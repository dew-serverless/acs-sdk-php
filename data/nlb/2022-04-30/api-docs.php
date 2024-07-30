<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Nlb',
        'version' => '2022-04-30',
    ],
    'directories' => [
        [
            'id' => 192387,
            'title' => '监控',
            'type' => 'directory',
            'children' => [
                'DescribeHdMonitorRegionConfig',
                'SetHdMonitorRegionConfig',
            ],
        ],
        [
            'id' => 175130,
            'title' => '地域与可用区',
            'type' => 'directory',
            'children' => [
                'DescribeRegions',
                'DescribeZones',
            ],
        ],
        [
            'id' => 175092,
            'title' => '实例',
            'type' => 'directory',
            'children' => [
                'CreateLoadBalancer',
                'DeleteLoadBalancer',
                'UpdateLoadBalancerAddressTypeConfig',
                'UpdateLoadBalancerAttribute',
                'UpdateLoadBalancerZones',
                'EnableLoadBalancerIpv6Internet',
                'DisableLoadBalancerIpv6Internet',
                'LoadBalancerLeaveSecurityGroup',
                'LoadBalancerJoinSecurityGroup',
                'UpdateLoadBalancerProtection',
                'ListLoadBalancers',
                'GetLoadBalancerAttribute',
                'StartShiftLoadBalancerZones',
                'CancelShiftLoadBalancerZones',
            ],
        ],
        [
            'id' => 175084,
            'title' => '监听',
            'type' => 'directory',
            'children' => [
                'CreateListener',
                'DeleteListener',
                'StartListener',
                'StopListener',
                'UpdateListenerAttribute',
                'ListListeners',
                'GetListenerAttribute',
                'GetListenerHealthStatus',
            ],
        ],
        [
            'id' => 175131,
            'title' => '监听证书',
            'type' => 'directory',
            'children' => [
                'ListListenerCertificates',
                'AssociateAdditionalCertificatesWithListener',
                'DisassociateAdditionalCertificatesWithListener',
            ],
        ],
        [
            'id' => 175112,
            'title' => '服务器组',
            'type' => 'directory',
            'children' => [
                'CreateServerGroup',
                'AddServersToServerGroup',
                'DeleteServerGroup',
                'RemoveServersFromServerGroup',
                'UpdateServerGroupAttribute',
                'UpdateServerGroupServersAttribute',
                'ListServerGroups',
                'ListServerGroupServers',
            ],
        ],
        [
            'id' => 175103,
            'title' => '共享带宽包',
            'type' => 'directory',
            'children' => [
                'DetachCommonBandwidthPackageFromLoadBalancer',
                'AttachCommonBandwidthPackageToLoadBalancer',
            ],
        ],
        [
            'id' => 175106,
            'title' => '安全策略',
            'type' => 'directory',
            'children' => [
                'CreateSecurityPolicy',
                'DeleteSecurityPolicy',
                'UpdateSecurityPolicyAttribute',
                'ListSecurityPolicy',
                'ListSystemSecurityPolicy',
            ],
        ],
        [
            'id' => 183551,
            'title' => '资源组',
            'type' => 'directory',
            'children' => [
                'MoveResourceGroup',
            ],
        ],
        [
            'id' => 175122,
            'title' => '异步任务',
            'type' => 'directory',
            'children' => [
                'GetJobStatus',
            ],
        ],
        [
            'id' => 175132,
            'title' => '标签',
            'type' => 'directory',
            'children' => [
                'TagResources',
                'UntagResources',
                'ListTagResources',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'DescribeHdMonitorRegionConfig' => [
            'summary' => '查询秒级监控存储配置。',
            'methods' => [
                'get',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'add 必选',
                        'description' => '资源所在的地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<GetJodResponse>',
                        'description' => 'RpcResponse<GetJodResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
                            ],
                            'RegionId' => [
                                'description' => '资源所在的地域ID。'."\n"
                                    ."\n"
                                    .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                                'type' => 'string',
                                'example' => 'cn-hangzhou',
                            ],
                            'LogProject' => [
                                'description' => '日志服务LogProject的名称。',
                                'type' => 'string',
                                'example' => 'hdmonitor-cn-hangzhou-223794579283657556'."\n",
                            ],
                            'MetricStore' => [
                                'description' => '日志服务MetricStore的名称。',
                                'type' => 'string',
                                'example' => 'hdmonitor-cn-hangzhou-metricStore-1',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DescribeHDMonitor.Fail',
                        'errorMessage' => 'DescribeHDMonitor Fail.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"LogProject\\": \\"hdmonitor-cn-hangzhou-223794579283657556\\\\n\\",\\n  \\"MetricStore\\": \\"hdmonitor-cn-hangzhou-metricStore-1\\"\\n}","type":"json"}]',
            'title' => '查询秒级监控配置',
            'description' => '查询当前地域配置的秒级监控存储数仓。',
        ],
        'SetHdMonitorRegionConfig' => [
            'summary' => '配置秒级监控存储。',
            'methods' => [
                'get',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'add 必选',
                        'description' => '资源所在的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'LogProject',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'add 必选',
                        'description' => '日志服务LogProject的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'hdmonitor-cn-hangzhou-223794579283657556',
                    ],
                ],
                [
                    'name' => 'MetricStore',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'add 必选',
                        'description' => '日志服务MetricStore的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'hdmonitor-cn-hangzhou-metricStore-1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<GetJodResponse>',
                        'description' => 'RpcResponse<GetJodResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                            'RegionId' => [
                                'description' => '资源所在的地域ID。'."\n"
                                    ."\n"
                                    .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。 ',
                                'type' => 'string',
                                'example' => 'cn-hangzhou',
                            ],
                            'LogProject' => [
                                'description' => '日志服务LogProject的名称。',
                                'type' => 'string',
                                'example' => 'hdmonitor-cn-hangzhou-223794579283657556',
                            ],
                            'MetricStore' => [
                                'description' => '日志服务MetricStore的名称。',
                                'type' => 'string',
                                'example' => 'hdmonitor-cn-hangzhou-metricStore-1',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'EnableHDMonitor.Fail',
                        'errorMessage' => 'EnableHDMonitor Fail.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"LogProject\\": \\"hdmonitor-cn-hangzhou-223794579283657556\\",\\n  \\"MetricStore\\": \\"hdmonitor-cn-hangzhou-metricStore-1\\"\\n}","type":"json"}]',
            'title' => '配置秒级监控',
            'description' => '设置秒级监控数仓信息，如果当前地域存在已开启秒级监控的监听，需要先关闭才可以调整秒级监控数仓。',
        ],
        'DescribeRegions' => [
            'summary' => '查询NLB的可用地域。',
            'methods' => [
                'get',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云产品的ServiceCode，仅取值：**nlb**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'nlb',
                        'default' => 'nlb',
                    ],
                ],
                [
                    'name' => 'AcceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '支持的语言。取值：'."\n"
                            ."\n"
                            .'- **zh-CN**：中文'."\n"
                            .'- **en-US**（默认）：英文'."\n"
                            .'- **ja**：日文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'en-US',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<DescribeRegionsResponse>',
                        'description' => '返回数据的结构。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                            'Regions' => [
                                'description' => '地域列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '地域信息结构。',
                                    'type' => 'object',
                                    'properties' => [
                                        'LocalName' => [
                                            'description' => '地域名称。',
                                            'type' => 'string',
                                            'example' => 'China (Hangzhou)',
                                        ],
                                        'RegionEndpoint' => [
                                            'description' => '地域服务的Endpoint地址。',
                                            'type' => 'string',
                                            'example' => 'nlb.cn-hangzhou.aliyuncs.com',
                                        ],
                                        'RegionId' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
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
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                    [
                        'errorCode' => 'IllegalParam',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"Regions\\": [\\n    {\\n      \\"LocalName\\": \\"China (Hangzhou)\\",\\n      \\"RegionEndpoint\\": \\"nlb.cn-hangzhou.aliyuncs.com\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <Regions>\\n        <LocalName>华东1（杭州）</LocalName>\\n        <RegionEndpoint>nlb.cn-hangzhou.aliyuncs.com</RegionEndpoint>\\n        <RegionId>cn-hangzhou</RegionId>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
            'title' => '查询地域',
        ],
        'DescribeZones' => [
            'summary' => '查询NLB一个地域下的可用区列表。',
            'methods' => [
                'get',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云产品的ServiceCode，仅取值：**nlb**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'nlb',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可用区所在的地域ID。您可以调用[DescribeRegions](~~443657~~)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AcceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '支持的语言。取值：'."\n"
                            ."\n"
                            .'- **zh-CN**：中文'."\n"
                            .'- **en-US**（默认）：英文'."\n"
                            .'- **ja**：日文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh-CN',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<DescribeZonesResponse>',
                        'description' => '返回数据的结构。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                            'Zones' => [
                                'description' => '可用区列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '可用区信息结构。',
                                    'type' => 'object',
                                    'properties' => [
                                        'LocalName' => [
                                            'description' => '可用区名称。',
                                            'type' => 'string',
                                            'example' => '杭州 可用区G',
                                        ],
                                        'ZoneId' => [
                                            'description' => '可用区ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-g',
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
                        'errorCode' => 'IllegalParam.AcceptLanguage',
                        'errorMessage' => 'The param of AcceptLanguage[%s] is illegal from bundle %s',
                    ],
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                    [
                        'errorCode' => 'IllegalParam',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"Zones\\": [\\n    {\\n      \\"LocalName\\": \\"杭州 可用区G\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-g\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeZonesResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <Zones>\\n        <LocalName>华东 1 可用区G</LocalName>\\n        <ZoneId>cn-hangzhou-g</ZoneId>\\n    </Zones>\\n</DescribeZonesResponse>","errorExample":""}]',
            'title' => '查询可用区',
        ],
        'CreateLoadBalancer' => [
            'summary' => '创建网络型负载均衡实例。',
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
            'parameters' => [
                [
                    'name' => 'LoadBalancerType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '负载均衡的类型，仅取值：**network**，表示网络型负载均衡。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'network',
                        'default' => 'network',
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'LoadBalancerName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例名称。'."\n"
                            ."\n"
                            .'长度为2~128个英文或中文字符，必须以大小写英文字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'NLB1',
                    ],
                ],
                [
                    'name' => 'AddressType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例的IPv4地址类型。取值：'."\n"
                            ."\n"
                            .'- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。'."\n"
                            .'- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。'."\n"
                            ."\n"
                            .'> 网络型负载均衡双栈实例的IPv6公网需通过[EnableLoadBalancerIpv6Internet](~~445878~~)接口开启。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Internet',
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'AddressIpVersion',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '协议版本。取值：'."\n"
                            ."\n"
                            .'- **ipv4**（默认值）：IPv4类型。'."\n"
                            .'- **DualStack**：双栈类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ipv4',
                        'default' => 'ipv4',
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例的专有网络ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc-bp1b49rqrybk45nio****',
                    ],
                ],
                [
                    'name' => 'ZoneMappings',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '可用区及交换机映射列表。至少需要添加2个可用区，最多支持添加10个可用区。',
                        'type' => 'array',
                        'items' => [
                            'description' => '可用区及交换机映射列表。至少需要添加2个可用区，最多支持添加10个可用区。',
                            'type' => 'object',
                            'properties' => [
                                'VSwitchId' => [
                                    'description' => '可用区对应的交换机，每个可用区只能使用一台交换机和一个子网。至少需要添加2个可用区，最多支持添加10个可用区。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'vsw-sersdf****',
                                ],
                                'ZoneId' => [
                                    'description' => '网络型负载均衡实例的可用区ID。至少需要添加2个可用区，最多支持添加10个可用区。'."\n"
                                        ."\n"
                                        .'您可以通过调用[DescribeZones](~~443890~~)接口获取可用区ID。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'cn-hangzhou-a',
                                ],
                                'PrivateIPv4Address' => [
                                    'title' => '私网ip',
                                    'description' => 'IPv4 私网VIP地址。NLB对外提供服务的私网IPv4地址。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '192.168.10.1',
                                ],
                                'AllocationId' => [
                                    'title' => '公网ipId',
                                    'description' => '公网实例绑定的EIP实例ID，每个可用区对应1个EIP实例ID。至少需要添加2个可用区，最多支持添加10个可用区。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'eip-bp1aedxso6u80u0qf****',
                                ],
                                'Ipv6Address' => [
                                    'description' => 'IPv6 VIP地址。NLB对外提供服务的IPv6地址。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '2408:400a:d5:3080:b409:840a:ca:e8e5',
                                ],
                                'Ipv4LocalAddresses' => [
                                    'description' => 'IPv4 Local地址列表。NLB与后端服务交互的地址列表。'."\n"
                                        .'地址个数必须是偶数，且最少2个，最多8个。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => 'IPv4 Local地址。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '192.168.10.2',
                                    ],
                                    'required' => false,
                                    'maxItems' => 8,
                                    'minItems' => 2,
                                ],
                                'Ipv6LocalAddresses' => [
                                    'description' => 'IPv6 Local地址列表。NLB与后端服务交互的地址列表。'."\n"
                                        .'地址个数必须是偶数，且最少2个，最多8个。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => 'IPv6 Local地址。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '2408:400a:d5:3080:b409:840a:ca:e8e6',
                                    ],
                                    'required' => false,
                                    'maxItems' => 8,
                                    'minItems' => 2,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 10,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'BandwidthPackageId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '公网类型实例关联的共享带宽包ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cbwp-bp1vevu8h3ieh****',
                    ],
                ],
                [
                    'name' => 'LoadBalancerBillingConfig',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '网络型负载均衡实例计费配置。',
                        'type' => 'object',
                        'properties' => [
                            'PayType' => [
                                'title' => 'PrePay, PostPay',
                                'description' => '网络型负载均衡实例的计费类型。'."\n"
                                    ."\n"
                                    .'仅取值**PostPay**：表示按量计费。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PostPay',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-atstuj3rtop****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会创建实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DeletionProtectionConfig',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '删除保护配置。',
                        'type' => 'object',
                        'properties' => [
                            'Enabled' => [
                                'description' => '删除保护状态，取值：'."\n"
                                    ."\n"
                                    .'- **true**：开启状态。'."\n"
                                    .'- **false**（默认值）：关闭状态。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'Reason' => [
                                'description' => '更改删除保护状态的原因。长度为2~128个英文或中文字符，必须以大小写英文字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '实例运行中',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ModificationProtectionConfig',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '修改保护配置。',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '网络型负载均衡修改保护状态。取值：'."\n"
                                    ."\n"
                                    .'- **NonProtection**：不保护，表示不允许传入保护配置的**Reason**。如果配置了保护配置的**Reason**，则清空其配置信息。'."\n"
                                    .'- **ConsoleProtection**：控制台修改保护，此时允许传入保护配置的**Reason**。'."\n"
                                    ."\n"
                                    .'> 当取值为**ConsoleProtection**，即开启修改保护后，用户不能通过负载均衡控制台修改实例配置，但可以通过调用API修改实例配置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ConsoleProtection',
                            ],
                            'Reason' => [
                                'description' => '输入开启修改保护的原因。长度为2~128个英文或中文字符，必须以大小写英文字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。'."\n"
                                    ."\n"
                                    .'> 仅在**Status**为**ConsoleProtection**时有效且合法。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '业务保障期',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'allowEmptyValue' => true,
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。最多支持64个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。支持字符包括字母、数字、下划线 (_)、点 (.)、冒号 (:)、斜线 (/)、等号 (=)、加号 (+)、减号 (-)、@符号 (@) 。'."\n"
                                        ."\n"
                                        .'一次调用最多支持添加20个标签。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'env',
                                ],
                                'Value' => [
                                    'description' => '标签值。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。支持字符包括字母、数字、下划线 (_)、点 (.)、冒号 (:)、斜线 (/)、等号 (=)、加号 (+)、减号 (-)、@符号 (@) 。'."\n"
                                        ."\n"
                                        .'一次调用最多支持添加20个标签。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'product',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'response',
                        'description' => 'response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                            'LoadbalancerId' => [
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'nlb-83ckzc8d4xlp8o****',
                            ],
                            'OrderId' => [
                                'description' => '网络型负载均衡实例的订单ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20230000',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.OnlyPayByTrafficSupported',
                        'errorMessage' => 'The operation is not allowed because of OnlyPayByTrafficSupported.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.%s',
                        'errorMessage' => 'The operation failed because of %s.',
                    ],
                    [
                        'errorCode' => 'Mismatch.ZoneIdAndVswitchId',
                        'errorMessage' => 'The ZoneIdAndVswitchId is mismatched for %s and %s.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.%s',
                        'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
                    ],
                    [
                        'errorCode' => 'DryRunOperation',
                        'errorMessage' => 'Request validation has been passed with DryRun flag set.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.OnlyPostPaidSupported',
                        'errorMessage' => 'The operation is not allowed because of OnlyPostPaidSupported.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.DuplicateZones.',
                        'errorMessage' => 'The operation failed because of Can not Specify duplicate zones.',
                    ],
                    [
                        'errorCode' => 'ResourceNotEnough.VSwitchIp',
                        'errorMessage' => 'The specified resource of VSwitchIp is not enough.',
                    ],
                    [
                        'errorCode' => 'DuplicatedParam.AllocationId',
                        'errorMessage' => 'The param of AllocationId is duplicated.',
                    ],
                    [
                        'errorCode' => 'ResourceInConfiguring.VswitchId',
                        'errorMessage' => 'The specified resource of VswitchId is being configured, please try again later.',
                    ],
                    [
                        'errorCode' => 'IllegalParam',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.UnpaidBill',
                        'errorMessage' => 'The operation failed because of UnpaidBill.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.ServiceLinkedRoleNotExist',
                        'errorMessage' => 'The operation is not allowed because of ServiceLinkedRoleNotExist.',
                    ],
                    [
                        'errorCode' => 'ResourceAlreadyAssociated.AllocationId',
                        'errorMessage' => 'The specified resource of %s is already associated.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.vSwitchNotSupportIpv6',
                        'errorMessage' => 'The operation failed because of vSwitchNotSupportIpv6.',
                    ],
                    [
                        'errorCode' => 'InvalidZones',
                        'errorMessage' => 'The current zone list is illegal.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.QuotaInsufficient',
                        'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
                    ],
                    [
                        'errorCode' => 'ResourceInUse.IP',
                        'errorMessage' => 'The specified resource of IP is in use.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.CreateOrderError',
                        'errorMessage' => 'Operation failed because CreateOrderError.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.NotExist.ResourceGroup',
                        'errorMessage' => 'Operation failed because ResourceGroup not exist.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.loadBalancerName',
                        'errorMessage' => 'Param loadBalancerName is illegal.',
                    ],
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The parameter of %s is missing.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'UnauthorizedZone',
                        'errorMessage' => 'The specified zone of %s is not authorized.',
                    ],
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                    [
                        'errorCode' => 'UnauthorizedRegion',
                        'errorMessage' => 'The specified region of %s is not authorized.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.VSwitch',
                        'errorMessage' => 'The specified resource of vSwitch is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.Vpc',
                        'errorMessage' => 'The specified resource of Vpc is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"LoadbalancerId\\": \\"nlb-83ckzc8d4xlp8o****\\",\\n  \\"OrderId\\": 20230000\\n}","errorExample":""},{"type":"xml","example":"<CreateLoadBalancerResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <LoadbalancerId>nlb-83ckzc8d4xlp8o****</LoadbalancerId>\\n    <OrderId>20230000</OrderId>\\n</CreateLoadBalancerResponse>","errorExample":""}]',
            'title' => '创建网络型负载均衡实例',
            'description' => '- 创建网络型负载均衡实例时会自动为用户创建AliyunServiceRoleForNlb SLR角色。'."\n"
                .'- **CreateLoadBalancer**接口属于异步接口，即系统返回一个实例ID，但该网络型负载均衡实例尚未创建成功，系统后台的创建任务仍在进行。您可以调用[GetLoadBalancerAttribute](~~445873~~)查询网络型负载均衡实例的创建状态：'."\n"
                .'    - 当网络型负载均衡实例处于**Provisioning**状态时，表示网络型负载均衡实例正在创建中。'."\n"
                .'    - 当网络型负载均衡实例处于**Active**状态时，表示网络型负载均衡实例创建成功。',
        ],
        'DeleteLoadBalancer' => [
            'summary' => '删除网络型负载均衡实例。',
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
            'parameters' => [
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nlb-wb7r6dlwetvt5j****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会删除实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'response',
                        'description' => '删除网络型负载均衡实例。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.%s',
                        'errorMessage' => 'The operation is not allowed because of %s.',
                    ],
                    [
                        'errorCode' => 'ResourceInConfiguring.loadbalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is being configured, please try again later.',
                    ],
                    [
                        'errorCode' => 'ResourceInCreating.loadbalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is creating, please try again later.',
                    ],
                    [
                        'errorCode' => 'DryRunOperation',
                        'errorMessage' => 'Request validation has been passed with DryRun flag set.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DeletionProtectionEnabled',
                        'errorMessage' => 'The operation is not allowed because of DeletionProtectionEnabled.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.loadbalancer',
                        'errorMessage' => 'The status of %s [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'The Lock [%s] is conflict.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteLoadBalancerResponse>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</DeleteLoadBalancerResponse>","errorExample":""}]',
            'title' => '删除负载均衡实例',
        ],
        'UpdateLoadBalancerAddressTypeConfig' => [
            'summary' => '变更网络型负载均衡NLB实例的IPv4地址的网络类型。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nlb-83ckzc8d4xlp8o****',
                    ],
                ],
                [
                    'name' => 'AddressType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '目标网络类型。取值：'."\n"
                            ."\n"
                            .'- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。'."\n"
                            .'- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Internet',
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'ZoneMappings',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '可用区及交换机映射列表，最多支持10个可用区。',
                        'type' => 'array',
                        'items' => [
                            'description' => '可用区及交换机映射列表。',
                            'type' => 'object',
                            'properties' => [
                                'VSwitchId' => [
                                    'description' => '可用区对应的交换机，每个可用区只能使用一台交换机和一个子网。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'vsw-bp10ttov87felojcn****',
                                ],
                                'ZoneId' => [
                                    'description' => '网络型负载均衡实例的可用区ID。'."\n"
                                        ."\n"
                                        .'您可以通过调用[DescribeZones](~~443890~~)接口获取可用区ID对应的可用区信息。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-hangzhou-a',
                                ],
                                'AllocationId' => [
                                    'title' => '公网ipId',
                                    'description' => '弹性公网IP实例ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'eip-bp1aedxso6u80u0qf****',
                                ],
                                'EipType' => [
                                    'description' => '公网EIP的类型。取值：'."\n"
                                        ."\n"
                                        .'- **Common**：弹性公网IP，简称EIP。'."\n"
                                        .'- **Anycast**：任播弹性公网IP，简称Anycast EIP。'."\n"
                                        ."\n"
                                        .'> **AddressType**配置为**Internet**时，需要配置该参数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Common',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会更新实例的网络类型。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'response',
                        'description' => '变更NLB实例的IPv4地址的网络类型。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DuplicatedParam.AllocationId',
                        'errorMessage' => 'The param of AllocationId is duplicated.',
                    ],
                    [
                        'errorCode' => 'ResourceInConfiguring.loadbalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is being configured, please try again later.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.EipAlreadyInBandwidthPackage',
                        'errorMessage' => 'The operation is not allowed because of EipAlreadyInBandwidthPackage.',
                    ],
                    [
                        'errorCode' => 'ResourceInConfiguring.%s',
                        'errorMessage' => 'The specified resource of %s is being configured, please try again later.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.AddressTypeNotChanged',
                        'errorMessage' => 'The operation is not allowed because of AddressTypeNotChanged.',
                    ],
                    [
                        'errorCode' => 'Mismatch.ZoneIdAndVswitchId',
                        'errorMessage' => 'The ZoneIdAndVswitchId is mismatched for %s and %s.',
                    ],
                    [
                        'errorCode' => 'TagInvokeError',
                        'errorMessage' => 'listTagsByResourceIds: InvalidResourceId.NotFound : The specified ResourceIds are not found in our records.',
                    ],
                    [
                        'errorCode' => 'DryRunOperation',
                        'errorMessage' => 'Request validation has been passed with DryRun flag set.',
                    ],
                    [
                        'errorCode' => 'IllegalParam',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.AnycastInstance',
                        'errorMessage' => 'The specified resource of AnycastInstance is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateLoadBalancerAddressTypeConfigResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</UpdateLoadBalancerAddressTypeConfigResponse>","errorExample":""}]',
            'title' => '变更网络类型配置',
            'description' => '- 您已创建NLB实例，请参见[CreateLoadBalancer](~~445868~~)。'."\n"
                .'- 您可以通过[GetLoadBalancerAttribute](~~445873~~)接口查询变更后NLB实例的**AddressType**取值。'."\n"
                .'-  **UpdateLoadBalancerAddressTypeConfig**属于异步接口，即系统返回一个请求ID，但该NLB实例IPv4地址的网络类型尚未变更成功，系统后台的变更任务仍在进行。您可以调用[GetJobStatus](~~445904~~)查询IPv4地址网络类型变更状态：'."\n"
                .'    - 当任务状态处于**Succeeded**时，表示实例IPv4地址的网络类型变更成功。'."\n"
                .'    - 当任务状态处于**Processing**时，表示实例IPv4地址的网络类型变更中，在该状态下，您只能执行查询操作，不能执行其他操作。',
        ],
        'UpdateLoadBalancerAttribute' => [
            'summary' => '更新网络型负载均衡实例名称等属性。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nlb-wb7r6dlwetvt5j****',
                    ],
                ],
                [
                    'name' => 'LoadBalancerName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例名称。'."\n"
                            ."\n"
                            .'长度为2~128个英文或中文字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'NLB1',
                    ],
                ],
                [
                    'name' => 'CrossZoneEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例是否开启跨可用区。取值：'."\n"
                            ."\n"
                            .'- **true**：开启。'."\n"
                            .'- **false**：关闭。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会更新实例信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'Cps',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例的每秒新建连接限速值。取值范围：**1**~**1000000**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'response',
                        'description' => '更新网络型负载均衡实例名称等属性。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7294679F-08DE-16D4-8E5D-1625685DC10B',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => 'aab74cfa-3bc4-48fc-80fc-0101da5a****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                    [
                        'errorCode' => 'ResourceInConfiguring.loadbalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is being configured, please try again later.',
                    ],
                    [
                        'errorCode' => 'DryRunOperation',
                        'errorMessage' => 'Request validation has been passed with DryRun flag set.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.loadBalancerName',
                        'errorMessage' => 'Param loadBalancerName is illegal.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7294679F-08DE-16D4-8E5D-1625685DC10B\\",\\n  \\"JobId\\": \\"aab74cfa-3bc4-48fc-80fc-0101da5a****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateLoadBalancerAttributeResponse>\\n    <RequestId>7294679F-08DE-16D4-8E5D-1625685DC10B</RequestId>\\n    <JobId>aab74cfa-3bc4-48fc-80fc-0101da5a****</JobId>\\n</UpdateLoadBalancerAttributeResponse>","errorExample":""}]',
            'title' => '更新负载均衡实例属性',
        ],
        'UpdateLoadBalancerZones' => [
            'summary' => '修改网络型负载均衡实例可用区及可用区属性。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nlb-83ckzc8d4xlp8o****',
                    ],
                ],
                [
                    'name' => 'ZoneMappings',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '可用区及交换机映射列表，最多支持添加10个可用区。',
                        'type' => 'array',
                        'items' => [
                            'description' => '可用区及交换机映射列表，最多支持添加10个可用区。',
                            'type' => 'object',
                            'properties' => [
                                'VSwitchId' => [
                                    'description' => '可用区对应的交换机，每个可用区默认使用一台交换机和一个子网。'."\n",
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'vsw-bp1rmcrwg3erh1fh8****',
                                ],
                                'ZoneId' => [
                                    'description' => '可用区ID，您可以通过调用[DescribeZones](~~443890~~)接口获取。'."\n"
                                        ."\n",
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'cn-hangzhou-a',
                                ],
                                'PrivateIPv4Address' => [
                                    'title' => '私网ip',
                                    'description' => '私网IP地址。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '192.168.36.16',
                                ],
                                'AllocationId' => [
                                    'title' => '公网ipId',
                                    'description' => '弹性公网IP或任播弹性公网IP的实例ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'eip-bp1aedxso6u80u0qf****',
                                ],
                                'EipType' => [
                                    'description' => '公网EIP的类型。取值：'."\n"
                                        ."\n"
                                        .'- **Common**：弹性公网IP，简称EIP。'."\n"
                                        .'- **Anycast**：任播弹性公网IP，简称Anycast EIP。'."\n"
                                        ."\n"
                                        .'> 支持绑定Anycast EIP的地域见[使用限制'."\n"
                                        .'](~~470000~~)，**AddressType**配置为**Internet**时，需要配置该参数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Common',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 10,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改实例可用区属性。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP_2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'response',
                        'description' => 'response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ResourceInCreating.loadbalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is creating, please try again later.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.ProtectedPrivateIPv4AddressChanged',
                        'errorMessage' => 'The operation is not allowed because of ProtectedPrivateIPv4AddressChanged.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.vSwitchNotSupportIpv6',
                        'errorMessage' => 'The operation failed because of vSwitchNotSupportIpv6.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.%s',
                        'errorMessage' => 'The operation is not allowed because of %s.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.ZoneVSwitchChanged',
                        'errorMessage' => 'The operation is not allowed because of ZoneVSwitchChanged.',
                    ],
                    [
                        'errorCode' => 'InvalidZones',
                        'errorMessage' => 'The current zone list is illegal.',
                    ],
                    [
                        'errorCode' => 'ResourceInConfiguring.loadbalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is being configured, please try again later.',
                    ],
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                    [
                        'errorCode' => 'ResourceNotEnough.VSwitchIp',
                        'errorMessage' => 'The specified resource of VSwitchIp is not enough.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'UnauthorizedZone',
                        'errorMessage' => 'The specified zone of %s is not authorized.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.VSwitch',
                        'errorMessage' => 'The specified resource of vSwitch is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateLoadBalancerZonesResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</UpdateLoadBalancerZonesResponse>","errorExample":""}]',
            'title' => '更新实例可用区及可用区属性',
            'description' => '每次调用该接口时，请确保您传入该NLB实例的所有可用区参数，包括存量和新增的可用区。如您未传入存量的可用区参数，存量可用区将会被删掉。'."\n"
                ."\n"
                .'前提条件：'."\n"
                .'- 您已创建NLB实例，请参见[CreateLoadBalancer](~~445868~~)。'."\n"
                .'- 您可以通过[GetLoadBalancerAttribute](~~445873~~)接口查询该NLB实例的可用区及可用区属性。'."\n"
                .'-  **UpdateLoadBalancerZones**属于异步接口，即系统返回一个请求ID，但该NLB实例可用区及可用区属性尚未修改成功，系统后台的变更任务仍在进行。您可以调用[GetJobStatus](~~445904~~)查询修改状态：'."\n"
                .'    - 当任务状态处于**Succeeded**时，表示实例可用区及可用区属性修改成功。'."\n"
                .'    - 当任务状态处于**Processing**时，表示实例可用区及可用区属性正在修改中，在该状态下，您只能执行查询操作，不能执行其他操作。',
        ],
        'EnableLoadBalancerIpv6Internet' => [
            'summary' => '将双栈NLB实例的IPv6地址从私网变更为公网。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nlb-83ckzc8d4xlp8o****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会变更Pv6类型实例的网络类型。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'response',
                        'description' => '双栈NLB实例的IPv6地址从私网变更为公网。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.NonDualStackInstance',
                        'errorMessage' => 'The operation is not allowed because of NonDualStackInstance.',
                    ],
                    [
                        'errorCode' => 'ResourceInCreating.%s',
                        'errorMessage' => 'The specified resource of %s is creating, please try again later.',
                    ],
                    [
                        'errorCode' => 'ResourceInCreating.loadbalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is creating, please try again later.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.Ipv6Gateway',
                        'errorMessage' => 'The specified resource of Ipv6Gateway is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableLoadBalancerIpv6InternetResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</EnableLoadBalancerIpv6InternetResponse>","errorExample":""}]',
            'title' => '开启NLB实例IPv6公网',
        ],
        'DisableLoadBalancerIpv6Internet' => [
            'summary' => '将双栈NLB实例的Pv6地址从公网变更为私网。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nlb-83ckzc8d4xlp8o****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会变更Pv6类型实例的网络类型。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'response',
                        'description' => 'response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.Ipv6IntranetInstance',
                        'errorMessage' => 'The operation is not allowed because of Ipv6IntranetInstance.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.NonDualStackInstance',
                        'errorMessage' => 'The operation is not allowed because of NonDualStackInstance.',
                    ],
                    [
                        'errorCode' => 'ResourceInConfiguring.loadbalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is being configured, please try again later.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableLoadBalancerIpv6InternetResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</DisableLoadBalancerIpv6InternetResponse>","errorExample":""}]',
            'title' => '关闭NLB实例IPv6公网',
        ],
        'LoadBalancerLeaveSecurityGroup' => [
            'summary' => '为网络型负载均衡实例解绑安全组。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'SecurityGroupIds',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '待解绑的安全组ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '待解绑的安全组ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'sg-bp1fg655nh68xyz9****',
                        ],
                        'required' => true,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nlb-83ckzc8d4xlp8o****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会为实例解绑安全组。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。  ',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'response',
                        'description' => 'response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                    [
                        'errorCode' => 'ResourceInConfiguring.loadbalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is being configured, please try again later.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.SecurityGroup',
                        'errorMessage' => 'Authentication is failed for SecurityGroup.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.%s',
                        'errorMessage' => 'The specified resource of %s is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<LoadBalancerLeaveSecurityGroupResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</LoadBalancerLeaveSecurityGroupResponse>","errorExample":""}]',
            'title' => '解绑安全组',
            'description' => 'LoadBalancerLeaveSecurityGroup接口属于异步接口，即系统返回一个请求ID，但该网络型负载均衡实例的安全组尚未解绑成功，系统后台的解绑任务仍在进行。您可以调用[GetJobStatus](~~445904~~)查询安全组的解绑状态：'."\n"
                ."\n"
                .'- 当任务状态处于**Succeeded**时，表示安全组解绑成功。'."\n"
                .'- 当任务状态处于**Processing**时，表示安全组正在解绑中，在该状态下，您只能执行查询操作，不能执行其他操作。',
        ],
        'LoadBalancerJoinSecurityGroup' => [
            'summary' => '为网络型负载均衡实例绑定已创建的安全组。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'SecurityGroupIds',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '安全组ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '安全组ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'sg-bp1fg655nh68xyz9****',
                        ],
                        'required' => true,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '待绑定安全组的网络型负载均衡实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nlb-83ckzc8d4xlp8o****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会为实例绑定安全组。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'response',
                        'description' => '为NLB实例绑定已创建的安全组。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.QuotaInsufficient',
                        'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
                    ],
                    [
                        'errorCode' => 'Conflict.SecurityGroup',
                        'errorMessage' => 'The SecurityGroup [%s] is conflict.',
                    ],
                    [
                        'errorCode' => 'Mismatch.%s',
                        'errorMessage' => 'The %s is mismatched for %s and %s.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.%s',
                        'errorMessage' => 'The operation is not allowed because of %s.',
                    ],
                    [
                        'errorCode' => 'TagInvokeError',
                        'errorMessage' => 'listTagsByResourceIds: InvalidResourceId.NotFound : The specified ResourceIds are not found in our records.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'The Lock [%s] is conflict.',
                    ],
                    [
                        'errorCode' => 'Mismatch.vpc',
                        'errorMessage' => 'The Vpc is mismatched for %s and %s.',
                    ],
                    [
                        'errorCode' => 'DryRunOperation',
                        'errorMessage' => 'Request validation has been passed with DryRun flag set.',
                    ],
                    [
                        'errorCode' => 'ResourceInCreating.loadbalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is creating, please try again later.',
                    ],
                    [
                        'errorCode' => 'ResourceInConfiguring.loadbalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is being configured, please try again later.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                    [
                        'errorCode' => 'Forbidden.SecurityGroup',
                        'errorMessage' => 'Authentication is failed for SecurityGroup.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.SecurityGroup',
                        'errorMessage' => 'The specified resource of SecurityGroup is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<LoadBalancerJoinSecurityGroupResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</LoadBalancerJoinSecurityGroupResponse>","errorExample":""}]',
            'title' => '绑定安全组',
            'description' => '- 请确保您已创建安全组。创建安全组，请参见[CreateSecurityGroup](~~25553~~)。'."\n"
                .'- 一个网络型负载均衡实例最多支持加入4个安全组。'."\n"
                .'- 您可以通过[GetLoadBalancerAttribute](~~214362~~)接口查询实例绑定的安全组。'."\n"
                .'- LoadBalancerJoinSecurityGroup属于异步接口，即系统返回一个请求ID，但该网络型负载均衡实例绑定安全组尚未成功，系统后台的绑定任务仍在进行。您可以调用[GetJobStatus](~~445904~~)查询安全组的绑定状态：'."\n"
                .'    - 当任务状态处于**Succeeded**时，表示安全组绑定成功。'."\n"
                .'    - 当任务状态处于**Processing**时，表示安全组正在绑定中，在该状态下，您只能执行查询操作，不能执行其他操作。',
        ],
        'UpdateLoadBalancerProtection' => [
            'summary' => '开启或关闭删除保护功能，及更新修改保护功能。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DeletionProtectionEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启删除保护。取值：'."\n"
                            ."\n"
                            .'- **true**：开启。'."\n"
                            .'- **false**：关闭。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'DeletionProtectionReason',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输入开启删除保护的原因。长度为2~128个英文或中文字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。'."\n"
                            ."\n"
                            .'> 仅在**DeletionProtectionEnabled**为**true**时该参数有效且合法。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '实例使用中',
                    ],
                ],
                [
                    'name' => 'ModificationProtectionStatus',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡修改保护状态。取值：'."\n"
                            ."\n"
                            .'- **NonProtection**：不保护，表示不允许传入**ModificationProtectionReason**。如果配置了保护配置的**ModificationProtectionReason**，则清空其配置信息。'."\n"
                            .'- **ConsoleProtection**：控制台修改保护，此时允许传入**ModificationProtectionReason**。'."\n"
                            ."\n"
                            .'> 当取值为**ConsoleProtection**，即开启修改保护后，用户不能通过负载均衡控制台修改实例配置，但可以通过调用API修改实例配置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ConsoleProtection',
                    ],
                ],
                [
                    'name' => 'ModificationProtectionReason',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输入开启修改保护的原因。长度为2~128个英文或中文字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。'."\n"
                            ."\n"
                            .'> 仅在**Status**为**ConsoleProtection**时该参数有效且合法。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '托管实例',
                    ],
                ],
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nlb-83ckzc8d4xlp8o****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会更新修改保护和删除保护。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'response',
                        'description' => '更新修改删除保护。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ResourceInConfiguring.%s',
                        'errorMessage' => 'The specified resource of %s is being configured, please try again later.',
                    ],
                    [
                        'errorCode' => 'IllegalParam',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'IdempotenceSignatureMismatch',
                        'errorMessage' => 'The idempotence token of request is same with the prev one, but the signature is different.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'The Lock [%s] is conflict.',
                    ],
                    [
                        'errorCode' => 'ResourceInConfiguring.loadbalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is being configured, please try again later.',
                    ],
                    [
                        'errorCode' => 'DryRunOperation',
                        'errorMessage' => 'Request validation has been passed with DryRun flag set.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.deletionProtectionReason',
                        'errorMessage' => 'The param of deletionProtectionReason is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.modificationProtectionReason',
                        'errorMessage' => 'The param of modificationProtectionReason is illegal.',
                    ],
                    [
                        'errorCode' => 'ResourceInCreating.loadbalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is creating, please try again later.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateLoadBalancerProtectionResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</UpdateLoadBalancerProtectionResponse>","errorExample":""}]',
            'title' => '修改删除保护',
            'description' => '> 您可以通过[GetLoadBalancerAttribute](~~445873~~)接口查询删除保护和修改保护详细信息。',
        ],
        'ListLoadBalancers' => [
            'summary' => '查询已创建的网络型负载均衡实例的基本信息。',
            'methods' => [
                'get',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'LoadBalancerType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '负载均衡类型',
                        'description' => '负载均衡类型。仅取值：**network**，表示网络型负载均衡。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'network',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '负载均衡拥有的可用区',
                        'description' => '可用区名称。您可以通过调用[DescribeZones](~~443890~~)接口获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou-a',
                    ],
                ],
                [
                    'name' => 'VpcIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '专有网络唯一标识',
                        'description' => '网络型负载均衡实例的专有网络ID。一次最多支持查询10个VPC ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '网络型负载均衡实例的专有网络ID。一次最多支持查询10个VPC ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'vpc-bp1b49rqrybk45nio****',
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'AddressType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地址类型：取值 internet，intranet',
                        'description' => '网络型负载均衡的IPv4地址类型。取值：'."\n"
                            .'- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。'."\n"
                            .'- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Internet',
                    ],
                ],
                [
                    'name' => 'AddressIpVersion',
                    'in' => 'query',
                    'schema' => [
                        'title' => '协议类型',
                        'description' => '协议版本。取值：'."\n"
                            .'- **ipv4**：IPv4类型。'."\n"
                            .'- **DualStack**：双栈类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ipv4',
                    ],
                ],
                [
                    'name' => 'Ipv6AddressType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '协议类型',
                        'description' => '网络型负载均衡的IPv6地址类型。取值：'."\n"
                            .'- **Internet**：公网类型。网络型负载均衡实例具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。'."\n"
                            .'- **Intranet**：私网类型。网络型负载均衡实例只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Internet',
                    ],
                ],
                [
                    'name' => 'DNSName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'dns 地址',
                        'description' => 'DNS域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'nlb-wb7r6dlwetvt5j****.cn-hangzhou.nlb.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'LoadBalancerStatus',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例状态',
                        'description' => '网络型负载均衡实例状态。取值：'."\n"
                            .'- **Inactive**：已停止，表示实例监听不会再转发流量。'."\n"
                            .'- **Active**：运行中。'."\n"
                            .'- **Provisioning**：创建中。'."\n"
                            .'- **Configuring**：变配中。'."\n"
                            .'- **Deleting**：删除中。'."\n"
                            .'- **Deleted**：已删除。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Active',
                    ],
                ],
                [
                    'name' => 'LoadBalancerBusinessStatus',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例业务状态',
                        'description' => '网络型负载均衡的业务状态。取值：'."\n"
                            .'- **Abnormal**：异常状态。'."\n"
                            .'- **Normal**：正常状态。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Normal',
                    ],
                ],
                [
                    'name' => 'LoadBalancerNames',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '负载均衡实例名称',
                        'description' => '网络型负载均衡实例名称。一次最多支持查询20个实例名称。',
                        'type' => 'array',
                        'items' => [
                            'description' => '网络型负载均衡实例名称。一次最多支持查询20个实例。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'NLB1',
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '企业资源组标识',
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-atstuj3rtop****',
                    ],
                ],
                [
                    'name' => 'LoadBalancerIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '实例列表',
                        'description' => '网络型负载均衡实例的ID。一次最多支持查询20个实例。',
                        'type' => 'array',
                        'items' => [
                            'description' => '网络型负载均衡实例的ID。一次最多支持查询20个实例。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'nlb-83ckzc8d4xlp8o****',
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '网络型负载均衡实例标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '网络型负载均衡实例标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '实例的标签键。最多支持输入20个标签键。一旦输入该值，则不允许为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'KeyTest',
                                ],
                                'Value' => [
                                    'description' => '实例的标签值。最多支持输入20个标签值。一旦输入该值，可以为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ValueTest',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                            .'- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'response',
                        'description' => 'response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                            'LoadBalancers' => [
                                'description' => '网络型负载均衡实例列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '网络型负载均衡实例列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'RegionId' => [
                                            'title' => '业务location',
                                            'description' => '网络型负载均衡实例所在的地域ID。 ',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'LoadBalancerId' => [
                                            'description' => '网络型负载均衡实例ID。',
                                            'type' => 'string',
                                            'example' => 'nlb-83ckzc8d4xlp8o****',
                                        ],
                                        'LoadBalancerName' => [
                                            'description' => '网络型负载均衡实例名称。',
                                            'type' => 'string',
                                            'example' => 'NLB1',
                                        ],
                                        'LoadBalancerType' => [
                                            'description' => '负载均衡实例类型。仅取值**Network**，表示网络型负载均衡。',
                                            'type' => 'string',
                                            'example' => 'Network',
                                        ],
                                        'AddressType' => [
                                            'description' => '网络型负载均衡的IPv4地址类型。取值：'."\n"
                                                .'- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。'."\n"
                                                .'- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
                                            'type' => 'string',
                                            'example' => 'Internet',
                                        ],
                                        'AddressIpVersion' => [
                                            'description' => '协议版本。取值：'."\n"
                                                .'- **ipv4**：IPv4类型。'."\n"
                                                .'- **DualStack**：双栈类型。',
                                            'type' => 'string',
                                            'example' => 'ipv4',
                                        ],
                                        'Ipv6AddressType' => [
                                            'description' => '网络型负载均衡的IPv6地址类型。取值：'."\n"
                                                ."\n"
                                                .'- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。'."\n"
                                                .'- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
                                            'type' => 'string',
                                            'example' => 'Internet',
                                        ],
                                        'LoadBalancerStatus' => [
                                            'description' => '网络型负载均衡实例状态。取值：'."\n"
                                                .'- **Inactive**：已停止，表示实例监听不会再转发流量。'."\n"
                                                .'- **Active**：运行中。'."\n"
                                                .'- **Provisioning**：创建中。'."\n"
                                                .'- **Configuring**：变配中。'."\n"
                                                .'- **Deleting**：删除中。'."\n"
                                                .'- **Deleted**：已删除。',
                                            'type' => 'string',
                                            'example' => 'Active',
                                        ],
                                        'LoadBalancerBusinessStatus' => [
                                            'description' => '网络型负载均衡的业务状态。取值：'."\n"
                                                .'- **Abnormal**：异常状态。'."\n"
                                                .'- **Normal**：正常状态。',
                                            'type' => 'string',
                                            'example' => 'Normal',
                                        ],
                                        'OperationLocks' => [
                                            'title' => '实例处于锁定状态列表',
                                            'description' => '网络型负载均衡操作锁配置。在`LoadBalancerBussinessStatus`为**Abnormal**（异常状态）时有效。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '网络型负载均衡操作锁配置。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'LockType' => [
                                                        'description' => '锁定的类型。取值 ：'."\n"
                                                            ."\n"
                                                            .'- **SecurityLocked**：安全锁定。'."\n"
                                                            .'- **RelatedResourceLocked**：关联锁定。'."\n"
                                                            .'- **FinancialLocked**：欠费锁定。'."\n"
                                                            .'- **ResidualLocked**：残留锁定。',
                                                        'type' => 'string',
                                                        'example' => 'SecurityLocked',
                                                    ],
                                                    'LockReason' => [
                                                        'description' => '锁定的原因。',
                                                        'type' => 'string',
                                                        'example' => '业务异常',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'VpcId' => [
                                            'description' => '网络型负载均衡实例的专有网络ID。',
                                            'type' => 'string',
                                            'example' => 'vpc-bp1b49rqrybk45nio****',
                                        ],
                                        'CreateTime' => [
                                            'description' => '资源创建时间，使用格林威治时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。',
                                            'type' => 'string',
                                            'example' => '2022-07-18T17:22:45Z',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-atstuj3rtop****',
                                        ],
                                        'DNSName' => [
                                            'description' => 'DNS域名。',
                                            'type' => 'string',
                                            'example' => 'nlb-wb7r6dlwetvt5j****.cn-hangzhou.nlb.aliyuncs.com',
                                        ],
                                        'ZoneMappings' => [
                                            'description' => '可用区及交换机映射列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '可用区及交换机映射列表。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'VSwitchId' => [
                                                        'description' => '可用区对应的交换机，每个可用区默认使用一台交换机和一个子网。',
                                                        'type' => 'string',
                                                        'example' => 'vsw-bp1rmcrwg3erh1fh8****',
                                                    ],
                                                    'ZoneId' => [
                                                        'description' => '可用区名称，您可以通过调用[DescribeZones](~~443890~~)接口获取。',
                                                        'type' => 'string',
                                                        'example' => 'cn-hangzhou-a',
                                                    ],
                                                    'LoadBalancerAddresses' => [
                                                        'description' => '网络型负载均衡实例地址信息。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '网络型负载均衡实例地址信息。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'EniId' => [
                                                                    'description' => '网络型负载均衡实例挂载的ENI的ID。',
                                                                    'type' => 'string',
                                                                    'example' => 'eni-bp12f1xhs5yal61a****',
                                                                ],
                                                                'PrivateIPv4Address' => [
                                                                    'title' => '私网ip',
                                                                    'description' => '网络型负载均衡实例私网IPv4地址。',
                                                                    'type' => 'string',
                                                                    'example' => '192.168.3.32',
                                                                ],
                                                                'AllocationId' => [
                                                                    'title' => '公网ipId',
                                                                    'description' => '弹性公网IP实例ID。',
                                                                    'type' => 'string',
                                                                    'example' => 'eip-bp1aedxso6u80u0qf****',
                                                                ],
                                                                'PublicIPv4Address' => [
                                                                    'title' => '公网ip地址：仅Get的时候有值',
                                                                    'description' => '网络型负载均衡实例公网IPv4地址。',
                                                                    'type' => 'string',
                                                                    'example' => '120.XX.XX.69',
                                                                ],
                                                                'Ipv6Address' => [
                                                                    'description' => '网络型负载均衡实例Ipv6地址。',
                                                                    'type' => 'string',
                                                                    'example' => '2001:db8:1:1:1:1:1:1',
                                                                ],
                                                                'PrivateIPv4HcStatus' => [
                                                                    'description' => '网络型负载均衡实例私网IPv4地址探测状态。取值：'."\n"
                                                                        .'- **Healthy**：健康。'."\n"
                                                                        .'- **Unhealthy**：异常。'."\n"
                                                                        ."\n"
                                                                        .'> 只有可用区状态（**Status**）为运行中（**Active**）时才返回该参数。',
                                                                    'type' => 'string',
                                                                    'example' => 'Healthy',
                                                                ],
                                                                'PrivateIPv6HcStatus' => [
                                                                    'description' => '网络型负载均衡实例IPv6地址探测状态。'."\n"
                                                                        .'- **Healthy**：健康。'."\n"
                                                                        .'- **Unhealthy**：异常。'."\n"
                                                                        ."\n"
                                                                        .'> 只有可用区状态（**Status**）为运行中（**Active**）时才返回该参数。',
                                                                    'type' => 'string',
                                                                    'example' => 'Healthy',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'Status' => [
                                                        'description' => '可用区状态。取值：'."\n"
                                                            ."\n"
                                                            .'- **Active**：启动。'."\n"
                                                            .'- **Stopped**：停止。该状态仅支持通过CADT容灾管理服务调用实现。'."\n"
                                                            .'- **Shifted**：DNS摘除。'."\n"
                                                            .'- **Starting**：启动中。该状态仅支持通过CADT容灾管理服务调用实现。'."\n"
                                                            .'- **Stopping**：停止中。该状态仅支持通过CADT容灾管理服务调用实现。',
                                                        'type' => 'string',
                                                        'example' => 'Active',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'BandwidthPackageId' => [
                                            'description' => '公网类型实例关联的共享带宽包ID。',
                                            'type' => 'string',
                                            'example' => 'cbwp-bp1vevu8h3ieh****',
                                        ],
                                        'SecurityGroupIds' => [
                                            'description' => '网络型负载均衡实例加入的安全组。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '网络型负载均衡实例加入的安全组。',
                                                'type' => 'string',
                                                'example' => 'sg-bp10uag3q0jkxu72****',
                                            ],
                                        ],
                                        'CrossZoneEnabled' => [
                                            'description' => '网络型负载均衡实例是否开启跨可用区。取值：'."\n"
                                                .'- **true**：开启。'."\n"
                                                .'- **false**：关闭。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'LoadBalancerBillingConfig' => [
                                            'title' => '计费相关属性',
                                            'description' => '网络型负载均衡实例计费配置。',
                                            'type' => 'object',
                                            'properties' => [
                                                'PayType' => [
                                                    'title' => '实例的计费类型',
                                                    'description' => '网络型负载均衡实例的计费类型。仅取值**PostPay**：表示按量计费。',
                                                    'type' => 'string',
                                                    'example' => 'PostPay',
                                                    'default' => 'PostPay',
                                                ],
                                            ],
                                        ],
                                        'DeletionProtectionConfig' => [
                                            'description' => '删除保护配置。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Enabled' => [
                                                    'description' => '删除保护状态，取值：'."\n"
                                                        ."\n"
                                                        .'- **true**：开启状态。'."\n"
                                                        .'- **false**：关闭状态。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'Reason' => [
                                                    'description' => '更改删除保护状态的原因。长度为2~128个英文或中文字符，必须以大小字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。'."\n",
                                                    'type' => 'string',
                                                    'example' => '实例运行中',
                                                ],
                                                'EnabledTime' => [
                                                    'description' => '删除保护开启时间，使用格林威治时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。',
                                                    'type' => 'string',
                                                    'example' => '2022-12-01T17:22:45Z',
                                                ],
                                            ],
                                        ],
                                        'ModificationProtectionConfig' => [
                                            'description' => '修改保护配置。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '网络型负载均衡修改保护状态。取值：'."\n"
                                                        ."\n"
                                                        .'- **NonProtection**：不保护，表示不允许传入**Reason**。如果配置了**Reason**，则清空其配置信息。'."\n"
                                                        .'- **ConsoleProtection**：控制台修改保护，此时允许传入**Reason**。'."\n"
                                                        ."\n"
                                                        .'> 当取值为**ConsoleProtection**，即开启修改保护后，用户不能通过负载均衡控制台修改实例配置，但可以通过调用API修改实例配置。',
                                                    'type' => 'string',
                                                    'example' => 'ConsoleProtection',
                                                ],
                                                'Reason' => [
                                                    'description' => '输入开启修改保护的原因。长度为2~128个英文或中文字符，必须以大小字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。'."\n"
                                                        ."\n"
                                                        .'仅在**Status**为**ConsoleProtection**时有效。',
                                                    'type' => 'string',
                                                    'example' => '业务保障期',
                                                ],
                                                'EnabledTime' => [
                                                    'description' => '修改保护开启时间，使用格林威治时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。',
                                                    'type' => 'string',
                                                    'example' => '2022-12-01T17:22:45Z',
                                                ],
                                            ],
                                        ],
                                        'Tags' => [
                                            'description' => '标签列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签列表。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'description' => '实例的标签键。',
                                                        'type' => 'string',
                                                        'example' => 'KeyTest',
                                                    ],
                                                    'Value' => [
                                                        'description' => '实例的标签值。',
                                                        'type' => 'string',
                                                        'example' => 'ValueTest',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '列表条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                                    .'- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
                                'type' => 'string',
                                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                            ],
                            'MaxResults' => [
                                'description' => '分批次查询时每次显示的条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalParam.%s',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.LoadBalancerType',
                        'errorMessage' => 'The LoadBalancerType value is invalid.',
                    ],
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.loadBalancerName',
                        'errorMessage' => 'Param loadBalancerName is illegal.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"LoadBalancers\\": [\\n    {\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"LoadBalancerId\\": \\"nlb-83ckzc8d4xlp8o****\\",\\n      \\"LoadBalancerName\\": \\"NLB1\\",\\n      \\"LoadBalancerType\\": \\"Network\\",\\n      \\"AddressType\\": \\"Internet\\",\\n      \\"AddressIpVersion\\": \\"ipv4\\",\\n      \\"Ipv6AddressType\\": \\"Internet\\",\\n      \\"LoadBalancerStatus\\": \\"Active\\",\\n      \\"LoadBalancerBusinessStatus\\": \\"Normal\\",\\n      \\"OperationLocks\\": [\\n        {\\n          \\"LockType\\": \\"SecurityLocked\\",\\n          \\"LockReason\\": \\"业务异常\\"\\n        }\\n      ],\\n      \\"VpcId\\": \\"vpc-bp1b49rqrybk45nio****\\",\\n      \\"CreateTime\\": \\"2022-07-18T17:22:45Z\\",\\n      \\"ResourceGroupId\\": \\"rg-atstuj3rtop****\\",\\n      \\"DNSName\\": \\"nlb-wb7r6dlwetvt5j****.cn-hangzhou.nlb.aliyuncs.com\\",\\n      \\"ZoneMappings\\": [\\n        {\\n          \\"VSwitchId\\": \\"vsw-bp1rmcrwg3erh1fh8****\\",\\n          \\"ZoneId\\": \\"cn-hangzhou-a\\",\\n          \\"LoadBalancerAddresses\\": [\\n            {\\n              \\"EniId\\": \\"eni-bp12f1xhs5yal61a****\\",\\n              \\"PrivateIPv4Address\\": \\"192.168.3.32\\",\\n              \\"AllocationId\\": \\"eip-bp1aedxso6u80u0qf****\\",\\n              \\"PublicIPv4Address\\": \\"120.XX.XX.69\\",\\n              \\"Ipv6Address\\": \\"2001:db8:1:1:1:1:1:1\\",\\n              \\"PrivateIPv4HcStatus\\": \\"Healthy\\",\\n              \\"PrivateIPv6HcStatus\\": \\"Healthy\\"\\n            }\\n          ],\\n          \\"Status\\": \\"Active\\"\\n        }\\n      ],\\n      \\"BandwidthPackageId\\": \\"cbwp-bp1vevu8h3ieh****\\",\\n      \\"SecurityGroupIds\\": [\\n        \\"sg-bp10uag3q0jkxu72****\\"\\n      ],\\n      \\"CrossZoneEnabled\\": true,\\n      \\"LoadBalancerBillingConfig\\": {\\n        \\"PayType\\": \\"PostPay\\"\\n      },\\n      \\"DeletionProtectionConfig\\": {\\n        \\"Enabled\\": true,\\n        \\"Reason\\": \\"实例运行中\\",\\n        \\"EnabledTime\\": \\"2022-12-01T17:22:45Z\\"\\n      },\\n      \\"ModificationProtectionConfig\\": {\\n        \\"Status\\": \\"ConsoleProtection\\",\\n        \\"Reason\\": \\"业务保障期\\",\\n        \\"EnabledTime\\": \\"2022-12-01T17:22:45Z\\"\\n      },\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"KeyTest\\",\\n          \\"Value\\": \\"ValueTest\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20\\n}","errorExample":""},{"type":"xml","example":"<ListLoadBalancersResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <LoadBalancers>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <LoadBalancerId>nlb-83ckzc8d4xlp8o****</LoadBalancerId>\\n        <LoadBalancerName>NLB1</LoadBalancerName>\\n        <LoadBalancerType>Network</LoadBalancerType>\\n        <AddressType>Internet</AddressType>\\n        <AddressIpVersion>ipv4</AddressIpVersion>\\n        <Ipv6AddressType>Internet</Ipv6AddressType>\\n        <LoadBalancerStatus>Active</LoadBalancerStatus>\\n        <LoadBalancerBusinessStatus>Normal</LoadBalancerBusinessStatus>\\n        <OperationLocks>\\n            <LockType>SecurityLocked</LockType>\\n            <LockReason>业务异常</LockReason>\\n        </OperationLocks>\\n        <VpcId>vpc-bp1b49rqrybk45nio****</VpcId>\\n        <CreateTime>2022-07-18T17:22Z</CreateTime>\\n        <ResourceGroupId>rg-atstuj3rtop****</ResourceGroupId>\\n        <DNSName>nlb-wb7r6dlwetvt5j****.cn-hangzhou.nlb.aliyuncs.com</DNSName>\\n        <ZoneMappings>\\n            <VSwitchId>vsw-bp1rmcrwg3erh1fh8****</VSwitchId>\\n            <ZoneId>cn-hangzhou-a</ZoneId>\\n            <LoadBalancerAddresses>\\n                <EniId>eni-bp12f1xhs5yal61a****</EniId>\\n                <PrivateIPv4Address>192.168.3.32</PrivateIPv4Address>\\n                <AllocationId>eip-bp1aedxso6u80u0qf****</AllocationId>\\n                <PublicIPv4Address>120.XX.XX.69</PublicIPv4Address>\\n                <Ipv6Address>2001:db8:1:1:1:1:1:1</Ipv6Address>\\n                <PrivateIPv4HcStatus>Healthy</PrivateIPv4HcStatus>\\n                <PrivateIPv6HcStatus>Healthy</PrivateIPv6HcStatus>\\n            </LoadBalancerAddresses>\\n            <Status>Active</Status>\\n        </ZoneMappings>\\n        <BandwidthPackageId>cbwp-bp1vevu8h3ieh****</BandwidthPackageId>\\n        <SecurityGroupIds>sg-bp10uag3q0jkxu72****</SecurityGroupIds>\\n        <CrossZoneEnabled>true</CrossZoneEnabled>\\n        <LoadBalancerBillingConfig>\\n            <PayType>PostPay</PayType>\\n        </LoadBalancerBillingConfig>\\n        <DeletionProtectionConfig>\\n            <Enabled>true</Enabled>\\n            <Reason>实例运行中</Reason>\\n            <EnabledTime>2022-12-01T17:22Z</EnabledTime>\\n        </DeletionProtectionConfig>\\n        <ModificationProtectionConfig>\\n            <Status>ConsoleProtection</Status>\\n            <Reason>业务保障期</Reason>\\n            <EnabledTime>2022-12-01T17:22Z</EnabledTime>\\n        </ModificationProtectionConfig>\\n        <Tags>\\n            <Key>KeyTest</Key>\\n            <Value>ValueTest</Value>\\n        </Tags>\\n    </LoadBalancers>\\n    <TotalCount>10</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n</ListLoadBalancersResponse>","errorExample":""}]',
            'title' => '查询负载均衡实例信息',
        ],
        'GetLoadBalancerAttribute' => [
            'summary' => '查询指定网络型负载均衡实例的详细信息。',
            'methods' => [
                'get',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络型负载均衡实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nlb-83ckzc8d4xlp8o****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会查询实例的配置信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'response',
                        'description' => 'response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                            'RegionId' => [
                                'description' => 'NLB实例所在的地域ID。',
                                'type' => 'string',
                                'example' => 'cn-hangzhou',
                            ],
                            'LoadBalancerId' => [
                                'description' => 'NLB实例ID。',
                                'type' => 'string',
                                'example' => 'nlb-83ckzc8d4xlp8o****',
                            ],
                            'LoadBalancerName' => [
                                'description' => 'NLB实例名称。'."\n"
                                    ."\n"
                                    .'长度为2~128个英文或中文字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                                'type' => 'string',
                                'example' => 'NLB1',
                            ],
                            'LoadBalancerType' => [
                                'description' => '负载均衡类型。仅取值：**network**，表示网络型负载均衡。',
                                'type' => 'string',
                                'example' => 'network',
                            ],
                            'AddressType' => [
                                'description' => 'NLB实例的IPv4网络地址类型。取值：'."\n"
                                    .'- **Internet**：公网。负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。'."\n"
                                    .'- **Intranet**：私网。负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
                                'type' => 'string',
                                'example' => 'Internet',
                            ],
                            'AddressIpVersion' => [
                                'description' => '协议版本。取值：'."\n"
                                    ."\n"
                                    .'- **ipv4**：IPv4类型。'."\n"
                                    .'- **DualStack**：双栈类型。',
                                'type' => 'string',
                                'example' => 'ipv4',
                            ],
                            'Ipv6AddressType' => [
                                'description' => 'NLB实例的IPv6地址类型。取值：'."\n"
                                    .'- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。'."\n"
                                    .'- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
                                'type' => 'string',
                                'example' => 'Internet',
                            ],
                            'LoadBalancerStatus' => [
                                'description' => 'NLB实例状态。取值：'."\n"
                                    .'- **Inactive**：已停止，表示实例监听不会再转发流量。'."\n"
                                    .'- **Active**：运行中。'."\n"
                                    .'- **Provisioning**：创建中。'."\n"
                                    .'- **Configuring**：变配中。'."\n"
                                    .'- **CreateFailed**：创建失败，此时不会产生费用，实例只能被删除。',
                                'type' => 'string',
                                'example' => 'Active',
                            ],
                            'LoadBalancerBusinessStatus' => [
                                'description' => 'NLB的业务状态。取值：'."\n"
                                    .'- **Abnormal**：异常状态。'."\n"
                                    .'- **Normal**：正常状态。',
                                'type' => 'string',
                                'example' => 'Normal',
                            ],
                            'OperationLocks' => [
                                'title' => '实例处于锁定状态列表',
                                'description' => 'NLB实例处于锁定状态列表。在`LoadBalancerBussinessStatus`为**Abnormal**（异常状态）时才返回当前参数。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '网络型负载均衡实例处于锁定状态列表。在`LoadBalancerBussinessStatus`为**Abnormal**（异常状态）时才返回当前参数。。',
                                    'type' => 'object',
                                    'properties' => [
                                        'LockType' => [
                                            'description' => '锁定的类型。取值 ：'."\n"
                                                .'- **SecurityLocked**：安全锁定。'."\n"
                                                .'- **RelatedResourceLocked**：关联锁定。'."\n"
                                                .'- **FinancialLocked**：欠费锁定。'."\n"
                                                .'- **ResidualLocked**：残留锁定。'."\n",
                                            'type' => 'string',
                                            'example' => 'SecurityLocked',
                                        ],
                                        'LockReason' => [
                                            'description' => '锁定的原因。',
                                            'type' => 'string',
                                            'example' => '业务异常。',
                                        ],
                                    ],
                                ],
                            ],
                            'VpcId' => [
                                'description' => 'NLB实例的专有网络ID。',
                                'type' => 'string',
                                'example' => 'vpc-bp1b49rqrybk45nio****',
                            ],
                            'CreateTime' => [
                                'description' => '资源创建时间，使用格林威治时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。',
                                'type' => 'string',
                                'example' => '2022-07-02T02:49:05Z',
                            ],
                            'ResourceGroupId' => [
                                'description' => '资源组ID。',
                                'type' => 'string',
                                'example' => 'rg-atstuj3rtop****',
                            ],
                            'DNSName' => [
                                'description' => 'DNS域名。',
                                'type' => 'string',
                                'example' => 'nlb-wb7r6dlwetvt5j****.cn-hangzhou.nlb.aliyuncs.com',
                            ],
                            'ZoneMappings' => [
                                'description' => '可用区及交换机映射列表，至少需要添加2个可用区，最多支持添加10个可用区。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '可用区及交换机映射列表，至少需要添加2个可用区，最多支持添加10个可用区。',
                                    'type' => 'object',
                                    'properties' => [
                                        'VSwitchId' => [
                                            'description' => '可用区对应的交换机，每个可用区默认使用一台交换机和一个子网。',
                                            'type' => 'string',
                                            'example' => 'vsw-bp1rmcrwg3erh1fh8****',
                                        ],
                                        'ZoneId' => [
                                            'description' => '可用区ID，您可以通过调用[DescribeZones](~~443890~~)接口获取。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-a',
                                        ],
                                        'LoadBalancerAddresses' => [
                                            'description' => '网络型负载均衡实例地址信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '网络型负载均衡实例地址信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'EniId' => [
                                                        'description' => 'ENI的ID。',
                                                        'type' => 'string',
                                                        'example' => 'eni-bp12f1xhs5yal61a****',
                                                    ],
                                                    'PrivateIPv4Address' => [
                                                        'title' => '私网ip',
                                                        'description' => 'IPv4 私网VIP地址。NLB对外提供服务的私网IPv4地址。',
                                                        'type' => 'string',
                                                        'example' => '192.168.3.32',
                                                    ],
                                                    'AllocationId' => [
                                                        'title' => '公网ipId',
                                                        'description' => '弹性公网IP实例ID。',
                                                        'type' => 'string',
                                                        'example' => 'eip-bp1aedxso6u80u0qf****',
                                                    ],
                                                    'PublicIPv4Address' => [
                                                        'title' => '公网ip地址：仅Get的时候有值',
                                                        'description' => 'NLB实例公网IPv4地址。',
                                                        'type' => 'string',
                                                        'example' => '120.XX.XX.69',
                                                    ],
                                                    'Ipv6Address' => [
                                                        'description' => 'IPv6 VIP地址。NLB对外提供服务的IPv6地址。',
                                                        'type' => 'string',
                                                        'example' => '2001:db8:1:1:1:1:1:1',
                                                    ],
                                                    'PrivateIPv4HcStatus' => [
                                                        'description' => 'NLB实例私网IPv4地址的探测状态。取值：'."\n"
                                                            ."\n"
                                                            .'- **Healthy**：健康。'."\n"
                                                            .'- **Unhealthy**：异常。'."\n"
                                                            ."\n"
                                                            .'> 只有可用区状态（**Status**）为运行中（**Active**）时才返回该参数。',
                                                        'type' => 'string',
                                                        'example' => 'Healthy',
                                                    ],
                                                    'PrivateIPv6HcStatus' => [
                                                        'description' => 'NLB实例IPv6地址的探测状态。取值：'."\n"
                                                            ."\n"
                                                            .'- **Healthy**：健康。'."\n"
                                                            .'- **Unhealthy**：异常。'."\n"
                                                            ."\n"
                                                            .'> 只有可用区状态（**Status**）为运行中（**Active**）时才返回该参数。',
                                                        'type' => 'string',
                                                        'example' => 'Healthy',
                                                    ],
                                                    'Ipv4LocalAddresses' => [
                                                        'description' => 'IPv4 Local地址列表。NLB与后端服务交互的地址列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => 'IPv4 Local地址。',
                                                            'type' => 'string',
                                                            'example' => '192.168.36.16',
                                                        ],
                                                    ],
                                                    'Ipv6LocalAddresses' => [
                                                        'description' => 'IPv6 Local地址列表。NLB与后端服务交互的地址列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => 'IPv6 Local地址。',
                                                            'type' => 'string',
                                                            'example' => '2408:4005:357:ba00:64a2:221f:5685:8854',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Status' => [
                                            'description' => '可用区状态。取值：'."\n"
                                                ."\n"
                                                .'- **Active**：启动。'."\n"
                                                .'- **Stopped**：停止。该状态仅支持通过CADT容灾管理服务调用实现。'."\n"
                                                .'- **Shifted**：DNS摘除。'."\n"
                                                .'- **Starting**：启动中。该状态仅支持通过CADT容灾管理服务调用实现。'."\n"
                                                .'- **Stopping**：停止中。该状态仅支持通过CADT容灾管理服务调用实现。',
                                            'type' => 'string',
                                            'example' => 'Active',
                                        ],
                                    ],
                                ],
                            ],
                            'BandwidthPackageId' => [
                                'description' => '公网类型实例关联的共享带宽包ID。',
                                'type' => 'string',
                                'example' => 'cbwp-bp1vevu8h3ieh****',
                            ],
                            'SecurityGroupIds' => [
                                'description' => 'NLB实例绑定的安全组ID。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'NLB实例绑定的安全组ID。',
                                    'type' => 'string',
                                    'example' => 'sg-bp10uag3q0jkxu72****',
                                ],
                            ],
                            'CrossZoneEnabled' => [
                                'description' => 'NLB实例是否开启跨可用区。取值：'."\n"
                                    .'- **true**：开启。'."\n"
                                    .'- **false**：关闭。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'LoadBalancerBillingConfig' => [
                                'title' => '计费相关属性',
                                'description' => '负载均衡实例计费配置。',
                                'type' => 'object',
                                'properties' => [
                                    'PayType' => [
                                        'title' => '实例的计费类型',
                                        'description' => 'NLB实例的计费类型。'."\n"
                                            .'仅取值**PostPay**：表示按量计费。',
                                        'type' => 'string',
                                        'example' => 'PostPay',
                                        'default' => 'PostPay',
                                    ],
                                ],
                            ],
                            'Cps' => [
                                'description' => 'NLB实例每秒新建连接限速值。取值范围：**0**~**1000000**。'."\n"
                                    ."\n"
                                    .'**0**表示不限速。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'DeletionProtectionConfig' => [
                                'description' => '删除保护配置。',
                                'type' => 'object',
                                'properties' => [
                                    'Enabled' => [
                                        'description' => '删除保护状态，取值：'."\n"
                                            ."\n"
                                            .'- **true**：开启状态。'."\n"
                                            .'- **false**：关闭状态。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'Reason' => [
                                        'description' => '更改删除保护状态的原因。长度为2~128个英文或中文字符，必须以大小字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                                        'type' => 'string',
                                        'example' => '实例运行中',
                                    ],
                                    'EnabledTime' => [
                                        'description' => '删除保护开启时间，使用格林威治时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。',
                                        'type' => 'string',
                                        'example' => '2022-11-02T02:49:05Z',
                                    ],
                                ],
                            ],
                            'ModificationProtectionConfig' => [
                                'description' => '修改保护配置。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '网络型负载均衡修改保护状态。取值：'."\n"
                                            ."\n"
                                            .'- **NonProtection**：不保护，表示不允许传入修改保护配置的**Reason**字段。如果配置了**Reason**，则清空其配置信息。'."\n"
                                            .'- **ConsoleProtection**：控制台修改保护，此时允许传入修改保护配置的**Reason**字段。'."\n"
                                            ."\n"
                                            .'> 当取值为**ConsoleProtection**，即开启修改保护后，用户不能通过负载均衡控制台修改实例配置，但可以通过调用API修改实例配置。'."\n",
                                        'type' => 'string',
                                        'example' => 'ConsoleProtection',
                                    ],
                                    'Reason' => [
                                        'description' => '输入开启修改保护的原因。长度为2~128个英文或中文字符，必须以大小字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。'."\n"
                                            ."\n"
                                            .'仅在修改保护配置的**Status**为**ConsoleProtection**有效且合法。',
                                        'type' => 'string',
                                        'example' => '业务保障期',
                                    ],
                                    'EnabledTime' => [
                                        'description' => '修改保护时间，使用格林威治时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。',
                                        'type' => 'string',
                                        'example' => '2022-12-02T02:49:05Z',
                                    ],
                                ],
                            ],
                            'Tags' => [
                                'description' => '标签列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TagKey' => [
                                            'description' => '实例的标签键。',
                                            'type' => 'string',
                                            'example' => 'KeyTest',
                                        ],
                                        'TagValue' => [
                                            'description' => '实例的标签值。',
                                            'type' => 'string',
                                            'example' => 'ValueTest',
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
                        'errorCode' => 'DuplicatedParam.%s',
                        'errorMessage' => 'The param of %s is duplicated.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.GetXipFailed',
                        'errorMessage' => 'Operation failed because GetXipFailed.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"LoadBalancerId\\": \\"nlb-83ckzc8d4xlp8o****\\",\\n  \\"LoadBalancerName\\": \\"NLB1\\",\\n  \\"LoadBalancerType\\": \\"network\\",\\n  \\"AddressType\\": \\"Internet\\",\\n  \\"AddressIpVersion\\": \\"ipv4\\",\\n  \\"Ipv6AddressType\\": \\"Internet\\",\\n  \\"LoadBalancerStatus\\": \\"Active\\",\\n  \\"LoadBalancerBusinessStatus\\": \\"Normal\\",\\n  \\"OperationLocks\\": [\\n    {\\n      \\"LockType\\": \\"SecurityLocked\\",\\n      \\"LockReason\\": \\"业务异常。\\"\\n    }\\n  ],\\n  \\"VpcId\\": \\"vpc-bp1b49rqrybk45nio****\\",\\n  \\"CreateTime\\": \\"2022-07-02T02:49:05Z\\",\\n  \\"ResourceGroupId\\": \\"rg-atstuj3rtop****\\",\\n  \\"DNSName\\": \\"nlb-wb7r6dlwetvt5j****.cn-hangzhou.nlb.aliyuncs.com\\",\\n  \\"ZoneMappings\\": [\\n    {\\n      \\"VSwitchId\\": \\"vsw-bp1rmcrwg3erh1fh8****\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-a\\",\\n      \\"LoadBalancerAddresses\\": [\\n        {\\n          \\"EniId\\": \\"eni-bp12f1xhs5yal61a****\\",\\n          \\"PrivateIPv4Address\\": \\"192.168.3.32\\",\\n          \\"AllocationId\\": \\"eip-bp1aedxso6u80u0qf****\\",\\n          \\"PublicIPv4Address\\": \\"120.XX.XX.69\\",\\n          \\"Ipv6Address\\": \\"2001:db8:1:1:1:1:1:1\\",\\n          \\"PrivateIPv4HcStatus\\": \\"Healthy\\",\\n          \\"PrivateIPv6HcStatus\\": \\"Healthy\\",\\n          \\"Ipv4LocalAddresses\\": [\\n            \\"192.168.36.16\\"\\n          ],\\n          \\"Ipv6LocalAddresses\\": [\\n            \\"2408:4005:357:ba00:64a2:221f:5685:8854\\"\\n          ]\\n        }\\n      ],\\n      \\"Status\\": \\"Active\\"\\n    }\\n  ],\\n  \\"BandwidthPackageId\\": \\"cbwp-bp1vevu8h3ieh****\\",\\n  \\"SecurityGroupIds\\": [\\n    \\"sg-bp10uag3q0jkxu72****\\"\\n  ],\\n  \\"CrossZoneEnabled\\": true,\\n  \\"LoadBalancerBillingConfig\\": {\\n    \\"PayType\\": \\"PostPay\\"\\n  },\\n  \\"Cps\\": 100,\\n  \\"DeletionProtectionConfig\\": {\\n    \\"Enabled\\": true,\\n    \\"Reason\\": \\"实例运行中\\",\\n    \\"EnabledTime\\": \\"2022-11-02T02:49:05Z\\"\\n  },\\n  \\"ModificationProtectionConfig\\": {\\n    \\"Status\\": \\"ConsoleProtection\\",\\n    \\"Reason\\": \\"业务保障期\\",\\n    \\"EnabledTime\\": \\"2022-12-02T02:49:05Z\\"\\n  },\\n  \\"Tags\\": [\\n    {\\n      \\"TagKey\\": \\"KeyTest\\",\\n      \\"TagValue\\": \\"ValueTest\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetLoadBalancerAttributeResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <LoadBalancerId>nlb-83ckzc8d4xlp8o****</LoadBalancerId>\\n    <LoadBalancerName>NLB1</LoadBalancerName>\\n    <LoadBalancerType>network</LoadBalancerType>\\n    <AddressType>Internet</AddressType>\\n    <AddressIpVersion>ipv4</AddressIpVersion>\\n    <Ipv6AddressType>Internet</Ipv6AddressType>\\n    <LoadBalancerStatus>Active</LoadBalancerStatus>\\n    <LoadBalancerBusinessStatus>Normal</LoadBalancerBusinessStatus>\\n    <OperationLocks>\\n        <LockType>SecurityLocked</LockType>\\n        <LockReason>业务异常。</LockReason>\\n    </OperationLocks>\\n    <VpcId>vpc-bp1b49rqrybk45nio****</VpcId>\\n    <CreateTime>2022-07-02T02:49:05Z</CreateTime>\\n    <ResourceGroupId>rg-atstuj3rtop****</ResourceGroupId>\\n    <DNSName>nlb-wb7r6dlwetvt5j****.cn-hangzhou.nlb.aliyuncs.com</DNSName>\\n    <ZoneMappings>\\n        <VSwitchId>vsw-bp1rmcrwg3erh1fh8****</VSwitchId>\\n        <ZoneId>cn-hangzhou-a</ZoneId>\\n        <LoadBalancerAddresses>\\n            <EniId>eni-bp12f1xhs5yal61a****</EniId>\\n            <PrivateIPv4Address>192.168.3.32</PrivateIPv4Address>\\n            <AllocationId>eip-bp1aedxso6u80u0qf****</AllocationId>\\n            <PublicIPv4Address>120.XX.XX.69</PublicIPv4Address>\\n            <Ipv6Address>2001:db8:1:1:1:1:1:1</Ipv6Address>\\n            <PrivateIPv4HcStatus>Healthy</PrivateIPv4HcStatus>\\n            <PrivateIPv6HcStatus>Healthy</PrivateIPv6HcStatus>\\n        </LoadBalancerAddresses>\\n        <Status>Active</Status>\\n    </ZoneMappings>\\n    <BandwidthPackageId>cbwp-bp1vevu8h3ieh****</BandwidthPackageId>\\n    <SecurityGroupIds>sg-bp10uag3q0jkxu72****</SecurityGroupIds>\\n    <CrossZoneEnabled>true</CrossZoneEnabled>\\n    <LoadBalancerBillingConfig>\\n        <PayType>PostPay</PayType>\\n    </LoadBalancerBillingConfig>\\n    <Cps>100</Cps>\\n    <DeletionProtectionConfig>\\n        <Enabled>true</Enabled>\\n        <Reason>实例运行中</Reason>\\n        <EnabledTime>2022-11-02T02:49:05Z</EnabledTime>\\n    </DeletionProtectionConfig>\\n    <ModificationProtectionConfig>\\n        <Status>ConsoleProtection</Status>\\n        <Reason>业务保障期</Reason>\\n        <EnabledTime>2022-12-02T02:49:05Z</EnabledTime>\\n    </ModificationProtectionConfig>\\n    <Tags>\\n        <TagKey>KeyTest</TagKey>\\n        <TagValue>ValueTest</TagValue>\\n    </Tags>\\n</GetLoadBalancerAttributeResponse>","errorExample":""}]',
            'title' => '查询负载均衡实例的详细信息',
        ],
        'StartShiftLoadBalancerZones' => [
            'summary' => '将可用区对应的EIP/VIP从域名解析中摘除。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ZoneMappings',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '可用区及交换机映射列表。'."\n"
                            ."\n"
                            .'> 一次调用最多支持移除一个可用区。',
                        'type' => 'array',
                        'items' => [
                            'description' => '可用区及交换机映射列表。'."\n"
                                ."\n"
                                .'> 一次调用最多支持移除一个可用区。',
                            'type' => 'object',
                            'properties' => [
                                'VSwitchId' => [
                                    'description' => '可用区对应的交换机，每个可用区默认使用一台交换机和一个子网。'."\n",
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'vsw-bp1rmcrwg3erh1fh8****',
                                ],
                                'ZoneId' => [
                                    'description' => 'NLB实例的可用区ID。'."\n"
                                        .'> 一次调用最多支持移除一个可用区。'."\n"
                                        ."\n"
                                        .'您可以通过调用[DescribeZones](~~443890~~)接口获取可用区ID。'."\n",
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'cn-hangzhou-a',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 1,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'NLB实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nlb-83ckzc8d4xlp8o****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会移除可用区。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'NLB实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<LoadBalancerZonesResponse>',
                        'description' => 'RpcResponse<LoadBalancerZonesResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ResourceInConfiguring.loadbalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is being configured, please try again later.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.%s',
                        'errorMessage' => 'Authentication is failed for %s.',
                    ],
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\"\\n}","errorExample":""},{"type":"xml","example":"<StartShiftLoadBalancerZonesResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n</StartShiftLoadBalancerZonesResponse>","errorExample":""}]',
            'title' => '把可用区的EIP/VIP从域名解析中摘除',
            'description' => '> 当前NLB实例可用区数量为1时，不支持移除实例可用区。',
        ],
        'CancelShiftLoadBalancerZones' => [
            'summary' => '将可用区对应的EIP/VIP加回到域名解析中。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ZoneMappings',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '可用区及交换机映射列表。'."\n"
                            ."\n"
                            .'> 一次调用最多支持加回一个可用区。',
                        'type' => 'array',
                        'items' => [
                            'description' => '可用区及交换机映射列表。'."\n"
                                ."\n"
                                .'> 一次调用最多支持加回一个可用区。',
                            'type' => 'object',
                            'properties' => [
                                'VSwitchId' => [
                                    'description' => '可用区对应的交换机，每个可用区默认使用一台交换机和一个子网。'."\n",
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'vsw-sersdf****',
                                ],
                                'ZoneId' => [
                                    'description' => 'NLB实例的可用区ID。'."\n"
                                        .'> 一次调用最多支持加回一个可用区。'."\n"
                                        ."\n"
                                        .'您可以通过调用[DescribeZones](~~443890~~)接口获取可用区ID。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'cn-hangzhou-a',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 1,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'NLB实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nlb-83ckzc8d4xlp8o****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会加回可用区。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'NLB实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<LoadBalancerZonesResponse>',
                        'description' => 'RpcResponse<LoadBalancerZonesResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IncorrectStatus.ZoneId',
                        'errorMessage' => 'The zoneId status of eni [%s] is incorrect.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.%s',
                        'errorMessage' => 'Authentication is failed for %s.',
                    ],
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelShiftLoadBalancerZonesResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n</CancelShiftLoadBalancerZonesResponse>","errorExample":""}]',
            'title' => '把可用区的EIP/VIP加到DNS中',
            'description' => '调用本接口时，您已通过[StartShiftLoadBalancerZones](~~2411999~~)接口或控制台移除NLB实例的某个可用区。',
        ],
        'CreateListener' => [
            'summary' => '在网络型负载均衡实例中创建TCP、UDP或TCPSSL监听。',
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
            'parameters' => [
                [
                    'name' => 'ListenerProtocol',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '监听协议',
                        'description' => '监听协议。取值：**TCP**、**UDP**或**TCPSSL**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'TCP',
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'ListenerPort',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '监听端口',
                        'description' => '监听端口。取值范围：**0**~**65535**。'."\n"
                            ."\n"
                            .'**0**：表示使用全端口功能。当设置为**0**时，您需要配置**StartPort**和**EndPort**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '65535',
                        'minimum' => '0',
                        'example' => '80',
                    ],
                ],
                [
                    'name' => 'ListenerDescription',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '监听描述',
                        'description' => '自定义监听名称。'."\n"
                            ."\n"
                            .'长度限制为2~256个字符，支持中文和英文字母，可包含数字、半角逗号（,）、半角句号（.）、半角分号（;）、正斜线（/）、at（@）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tcp_80',
                    ],
                ],
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'add 必选',
                        'description' => '网络型负载均衡实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nlb-83ckzc8d4xlp8o****',
                    ],
                ],
                [
                    'name' => 'ServerGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'servergroupId',
                        'description' => '服务器组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sgp-ppdpc14gdm3x4o****',
                    ],
                ],
                [
                    'name' => 'IdleTimeout',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '空闲超时时间',
                        'description' => '连接空闲超时时间。单位：秒。'."\n"
                            .'取值范围：**1**~**900**。默认值：**900**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '3600',
                        'minimum' => '1',
                        'example' => '900',
                    ],
                ],
                [
                    'name' => 'SecurityPolicyId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Tclssl监听的安全策略',
                        'description' => '安全策略ID。支持系统安全策略和自定义安全策略。'."\n"
                            ."\n"
                            .'- 系统策略取值：**tls_cipher_policy_1_0**（默认值）、**tls_cipher_policy_1_1**、**tls_cipher_policy_1_2**、**tls_cipher_policy_1_2_strict**或**tls_cipher_policy_1_2_strict_with_1_3**。'."\n"
                            .'- 自定义安全策略：输入自定义安全策略ID。'."\n"
                            .'    - 创建自定义策略，请参见[CreateSecurityPolicy](~~445901~~)。'."\n"
                            .'    - 查询安全策略，请参见[ListSecurityPolicy](~~445900~~)。'."\n"
                            ."\n"
                            .'>仅对TCPSSL监听生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tls_cipher_policy_1_0',
                    ],
                ],
                [
                    'name' => 'CertificateIds',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => 'server证书列表',
                        'description' => '服务器证书列表信息。仅对TCPSSL监听生效。'."\n"
                            ."\n"
                            .'> 目前仅支持添加1个服务器证书。',
                        'type' => 'array',
                        'items' => [
                            'description' => '服务器证书列表信息。仅对TCPSSL监听生效。'."\n"
                                ."\n"
                                .'> 目前仅支持添加1个服务器证书。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '123157******',
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'CaCertificateIds',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => 'ca 证书列表',
                        'description' => 'CA证书列表。仅对TCPSSL监听生效。'."\n"
                            ."\n"
                            .'> 目前仅支持添加1个CA证书。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'CA证书列表。仅对TCPSSL监听生效。'."\n"
                                ."\n"
                                .'> 目前仅支持添加1个CA证书。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '139a00******',
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'CaEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启动双向认证。取值：'."\n"
                            ."\n"
                            .'- **true**：启动。'."\n"
                            ."\n"
                            .'- **false**（默认值）：关闭。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会创建监听。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ProxyProtocolEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启通过Proxy Protocol协议携带客户端源地址到后端服务器。取值：'."\n"
                            ."\n"
                            .'- **true**：开启。'."\n"
                            ."\n"
                            .'- **false**（默认值）：关闭。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'SecSensorEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启秒级监控功能。取值：'."\n"
                            ."\n"
                            .'- **true**：开启。'."\n"
                            ."\n"
                            .'- **false**（默认值）：关闭。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'AlpnEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启ALPN。取值：'."\n"
                            ."\n"
                            .'- **true**：开启。'."\n"
                            ."\n"
                            .'- **false**（默认值）：关闭。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'AlpnPolicy',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ALPN策略。取值：'."\n"
                            ."\n"
                            .'- **HTTP1Only**：只协商使用HTTP1.x协议，优先级为HTTP1.1>HTTP1.0。'."\n"
                            .'- **HTTP2Only**：只协商使用HTTP2.0协议。'."\n"
                            .'- **HTTP2Optional**：优先使用HTTP1.x协议，但也接受HTTP2.0协议，优先级为HTTP1.1>HTTP1.0>HTTP2.0。'."\n"
                            .'- **HTTP2Preferred**：优先使用HTTP2.0协议，但也接受HTTP1.x协议，优先级为HTTP2.0>HTTP1.1>HTTP1.0。'."\n"
                            ."\n"
                            .'> **AlpnEnabled**开启后需配置该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HTTP1Only',
                        'enum' => [
                            'HTTP1Only',
                            'HTTP2Only',
                            'HTTP2Preferred',
                            'HTTP2Optional',
                        ],
                    ],
                ],
                [
                    'name' => 'StartPort',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '全端口监听起始端口。取值范围：**0** ~ **65535**。'."\n"
                            ."\n"
                            .'> 当**ListenerPort**为**0**时，需要配置该参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '244',
                    ],
                ],
                [
                    'name' => 'EndPort',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '全端口监听结束端口。取值范围：**0** ~ **65535**。'."\n"
                            .'终止端口的取值大于起始端口。'."\n"
                            ."\n"
                            .'> 当**ListenerPort**为**0**时，需要配置该参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '566',
                    ],
                ],
                [
                    'name' => 'Cps',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例每秒新建连接限速值。取值范围：**0**~**1000000**。**0**表示不限速。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'Mss',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'TCP报文的最大段大小。单位：字节，取值范围：**0**~**1500**。'."\n"
                            .'**0**：表示不修改用户TCP报文的MSS值。'."\n"
                            ."\n"
                            .'> 仅TCP、TCPSSL类型的监听支持该字段值。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '43',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'allowEmptyValue' => true,
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。最多支持64个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。支持字符包括字母、数字、下划线 (_)、点 (.)、冒号 (:)、斜线 (/)、等号 (=)、加号 (+)、减号 (-)、@符号 (@) 。'."\n"
                                        ."\n"
                                        .'一次调用最多支持添加20个标签。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'KeyTest',
                                ],
                                'Value' => [
                                    'description' => '标签值。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。支持字符包括字母、数字、下划线 (_)、点 (.)、冒号 (:)、斜线 (/)、等号 (=)、加号 (+)、减号 (-)、@符号 (@) 。'."\n"
                                        ."\n"
                                        .'一次调用最多支持添加20个标签。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Test',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'ProxyProtocolV2Config',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '通过Proxy Protocol协议携带VpcId、PrivateLinkEpId、PrivateLinkEpsId信息到后端服务器配置。',
                        'type' => 'object',
                        'properties' => [
                            'Ppv2VpcIdEnabled' => [
                                'description' => '是否开启通过Proxy Protocol协议携带VpcId到后端服务器。取值：'."\n"
                                    ."\n"
                                    .'- **true**：开启。'."\n"
                                    ."\n"
                                    .'- **false**（默认值）：关闭。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                                'default' => 'false',
                            ],
                            'Ppv2PrivateLinkEpIdEnabled' => [
                                'description' => '是否开启通过Proxy Protocol协议携带Ppv2PrivateLinkEpId到后端服务器。取值：'."\n"
                                    ."\n"
                                    .'- **true**：开启。'."\n"
                                    ."\n"
                                    .'- **false**（默认值）：关闭。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                                'default' => 'false',
                            ],
                            'Ppv2PrivateLinkEpsIdEnabled' => [
                                'description' => '是否开启通过Proxy Protocol协议携带PrivateLinkEpsId到后端服务器。取值：'."\n"
                                    ."\n"
                                    .'- **true**：开启。'."\n"
                                    ."\n"
                                    .'- **false**（默认值）：关闭。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                                'default' => 'false',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<CreateListenerResponse>',
                        'description' => 'RpcResponse<CreateListenerResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                            'ListenerId' => [
                                'description' => '监听ID。',
                                'type' => 'string',
                                'example' => 'lsn-bp1bpn0kn908w4nbw****',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Conflict.Port',
                        'errorMessage' => 'The Port [%s] is conflict.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.MssConflictWithUdpAndGeneve',
                        'errorMessage' => 'The param of MssConflictWithUdpAndGeneve is illegal.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.%s',
                        'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
                    ],
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                    [
                        'errorCode' => 'Mismatch.VpcId',
                        'errorMessage' => 'The VpcId is mismatched for %s and %s.',
                    ],
                    [
                        'errorCode' => 'ResourceNotEnough.%s',
                        'errorMessage' => 'The specified resource of %s is not enough.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'The Lock [%s] is conflict.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.AnyPortListenerConflictWithNonAnyPortServerGroup',
                        'errorMessage' => 'The param of AnyPortListenerConflictWithNonAnyPortServerGroup is illegal.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.loadbalancer',
                        'errorMessage' => 'The status of loadbalancer [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.Certificate',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.ServerGroupId',
                        'errorMessage' => 'The param of ServerGroupId is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.NonAnyPortListenerConflictWithAnyPortServerGroup',
                        'errorMessage' => 'The param of NonAnyPortListenerConflictWithAnyPortServerGroup is illegal.',
                    ],
                    [
                        'errorCode' => 'MissingParam.Certificate',
                        'errorMessage' => 'The param of certificate is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.Port',
                        'errorMessage' => 'The param of Port is illegal.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.QuotaInsufficient',
                        'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
                    ],
                    [
                        'errorCode' => 'Mismatch.Protocol',
                        'errorMessage' => 'The Protocol is mismatched for %s and %s.',
                    ],
                    [
                        'errorCode' => 'ResourceNotEnough.CaCertificateApiCount',
                        'errorMessage' => 'The specified resource of CaCertificateApiCount is not enough.',
                    ],
                    [
                        'errorCode' => 'MissingParam.ServerGroupId',
                        'errorMessage' => 'The param of ServerGroupId is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.ListenerDescription',
                        'errorMessage' => 'The parameter ListenerDescription of listener is illegal.',
                    ],
                    [
                        'errorCode' => 'DryRunOperation',
                        'errorMessage' => 'Request validation has been passed with DryRun flag set.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.IdleTimeout',
                        'errorMessage' => 'The param of IdleTimeout is illegal.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The parameter of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParam',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParamSize.certificateIds',
                        'errorMessage' => 'The param size of certificateIds or  caCertificateIds is illegal.',
                    ],
                    [
                        'errorCode' => 'DuplicatedParam.listener',
                        'errorMessage' => 'The param of any port listener is duplicated.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.PreserveClientIpSwitch',
                        'errorMessage' => 'The server group associated with the tcpssl listener does not support enabling PreserveClientIp.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.RegionNotSupportHDMonitor',
                        'errorMessage' => 'The operation is not allowed because of RegionNotSupportHDMonitor.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.VSwitch',
                        'errorMessage' => 'The specified resource of vSwitch is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.serverGroup',
                        'errorMessage' => 'The specified resource of serverGroup is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.CaCertificate',
                        'errorMessage' => 'The specified resource of CaCertificate is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.HdMonitorConfigNotExist',
                        'errorMessage' => 'The specified resource of HdMonitorConfigNotExist is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"ListenerId\\": \\"lsn-bp1bpn0kn908w4nbw****\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateListenerResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <ListenerId>lsn-bp1bpn0kn908w4nbw****</ListenerId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</CreateListenerResponse>","errorExample":""}]',
            'title' => '创建监听',
        ],
        'DeleteListener' => [
            'summary' => '删除网络型负载均衡监听。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ListenerId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'update or delete必选, add在custom中生成',
                        'description' => '监听ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lsn-bp1bpn0kn908w4nbw****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会删除监听。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<UpdateOrDeleteListenerResponse>',
                        'description' => '删除监听。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DryRunOperation',
                        'errorMessage' => 'Request validation has been passed with DryRun flag set.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.listener',
                        'errorMessage' => 'The status of listener [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.loadbalancer',
                        'errorMessage' => 'The status of %s [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'The Lock [%s] is conflict.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.listener',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteListenerResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</DeleteListenerResponse>","errorExample":""}]',
            'title' => '删除监听',
        ],
        'StartListener' => [
            'summary' => '启动网络型负载均衡监听。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ListenerId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'update or delete必选, add在custom中生成',
                        'description' => '监听ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'lsn-bp1bpn0kn908w4nbw****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会启动监听。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<StopOrStartListenerResponse>',
                        'description' => 'RpcResponse<StopOrStartListenerResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IncorrectStatus.listener',
                        'errorMessage' => 'The status of listener [%s] is incorrect.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.listener',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<StartListenerResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</StartListenerResponse>","errorExample":""}]',
            'title' => '启动监听',
        ],
        'StopListener' => [
            'summary' => '停止网络型负载均衡实例的监听。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ListenerId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'update or delete必选, add在custom中生成',
                        'description' => '监听ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lsn-bp1bpn0kn908w4nbw****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会停止监听。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<StopOrStartListenerResponse>',
                        'description' => '停止监听。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.listener',
                        'errorMessage' => 'The status of listener [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'DryRunOperation',
                        'errorMessage' => 'Request validation has been passed with DryRun flag set.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.listener',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<StopListenerResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</StopListenerResponse>","errorExample":""}]',
            'title' => '停止监听',
        ],
        'UpdateListenerAttribute' => [
            'summary' => '更新网络型负载均衡监听的配置。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ListenerId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'update or delete必选, add在custom中生成',
                        'description' => '监听实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lsn-bp1bpn0kn908w4nbw****',
                    ],
                ],
                [
                    'name' => 'ListenerDescription',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '监听描述',
                        'description' => '自定义监听名称。'."\n"
                            ."\n"
                            .'长度限制为2~256个字符，支持中文和英文字母，可包含数字、半角逗号（,）、半角句号（.）、半角分号（;）、正斜线（/）、at（@）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tcpssl_443',
                    ],
                ],
                [
                    'name' => 'ServerGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '实服务组',
                        'description' => '服务器组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sgp-ppdpc14gdm3x4o****',
                    ],
                ],
                [
                    'name' => 'SecurityPolicyId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'https监听的安全策略',
                        'description' => '安全策略ID。'."\n"
                            ."\n"
                            .'> 仅对TCPSSL监听生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tls_cipher_policy_1_1',
                    ],
                ],
                [
                    'name' => 'CertificateIds',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => 'server证书列表',
                        'description' => '服务器证书列表信息。目前仅支持添加1个服务器证书。'."\n"
                            ."\n\n"
                            .'> 仅对TCPSSL监听生效。',
                        'type' => 'array',
                        'items' => [
                            'description' => '服务器证书列表信息。目前仅支持添加1个服务器证书。'."\n"
                                ."\n"
                                .'> 仅对TCPSSL监听生效。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '123157******',
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'CaCertificateIds',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => 'ca 证书列表',
                        'description' => 'CA证书列表信息。目前仅支持添加1个CA证书。'."\n"
                            ."\n"
                            .'> 仅对TCPSSL监听生效。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'CA证书列表信息。目前仅支持添加1个CA证书。'."\n"
                                ."\n"
                                .'> 仅对TCPSSL监听生效。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '139a00******',
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'CaEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启动双向认证。取值：'."\n"
                            ."\n"
                            .'- **true**：启动。'."\n"
                            ."\n"
                            .'- **false**（默认值）：关闭。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'IdleTimeout',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '连接空闲超时时间。单位：秒。取值范围：**1**~**900**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '3600',
                        'minimum' => '1',
                        'example' => '900',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会更新监听信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ProxyProtocolEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启通过Proxy Protocol协议携带客户端源地址到后端服务器。取值：'."\n"
                            ."\n"
                            .'- **true**：开启。'."\n"
                            ."\n"
                            .'- **false**：关闭。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'SecSensorEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启秒级监控功能。取值：'."\n"
                            ."\n"
                            .'- **true**：开启。'."\n"
                            ."\n"
                            .'- **false**：关闭。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'AlpnEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启ALPN。取值：'."\n"
                            ."\n"
                            .'- **true**：开启。'."\n"
                            ."\n"
                            .'- **false**：关闭。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'AlpnPolicy',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ALPN策略。取值：'."\n"
                            ."\n"
                            .'- **HTTP1Only**：只协商使用HTTP1.x协议，优先级为HTTP1.1>HTTP1.0。'."\n"
                            .'- **HTTP2Only**：只协商使用HTTP2.0协议。'."\n"
                            .'- **HTTP2Optional**：优先使用HTTP1.x协议，但也接受HTTP2.0协议，优先级为HTTP1.1>HTTP1.0>HTTP2.0。'."\n"
                            .'- **HTTP2Preferred**：优先使用HTTP2.0协议，但也接受HTTP1.x协议，优先级为HTTP2.0>HTTP1.1>HTTP1.0。'."\n"
                            ."\n"
                            .'> AlpnEnabled开启后需配置该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HTTP1Only',
                        'enum' => [
                            'HTTP1Only',
                            'HTTP2Only',
                            'HTTP2Preferred',
                            'HTTP2Optional',
                        ],
                    ],
                ],
                [
                    'name' => 'Cps',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例每秒新建连接限速值。取值范围：**0**~**1000000**。**0**表示不限速。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10000',
                    ],
                ],
                [
                    'name' => 'Mss',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'TCP报文的最大段大小。单位：字节，取值范围：**0**~**1500**。**0**表示不修改用户TCP报文的MSS值。仅TCP、TCPSSL类型的监听支持该字段值。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '344',
                    ],
                ],
                [
                    'name' => 'ProxyProtocolV2Config',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '通过Proxy Protocol协议携带VpcId、PrivateLinkEpId、PrivateLinkEpsId信息到后端服务器配置。',
                        'type' => 'object',
                        'properties' => [
                            'Ppv2VpcIdEnabled' => [
                                'description' => '是否开启通过Proxy Protocol协议携带VpcId到后端服务器。取值：'."\n"
                                    ."\n"
                                    .'- **true**：开启。'."\n"
                                    ."\n"
                                    .'- **false**：关闭。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'Ppv2PrivateLinkEpIdEnabled' => [
                                'description' => '是否开启通过Proxy Protocol协议携带PrivateLinkEpId到后端服务器。取值：'."\n"
                                    ."\n"
                                    .'- **true**：开启。'."\n"
                                    ."\n"
                                    .'- **false**：关闭。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'Ppv2PrivateLinkEpsIdEnabled' => [
                                'description' => '是否开启通过Proxy Protocol协议携带PrivateLinkEpsId到后端服务器。取值：'."\n"
                                    ."\n"
                                    .'- **true**：开启。'."\n"
                                    ."\n"
                                    .'- **false**：关闭。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'RpcResponse<UpdateOrDeleteListenerResponse>',
                        'description' => '更新监听配置。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Mismatch.VpcId',
                        'errorMessage' => 'The VpcId is mismatched for %s and %s.',
                    ],
                    [
                        'errorCode' => 'Conflict.Port',
                        'errorMessage' => 'The Port [%s] is conflict.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.Certificate',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.listener',
                        'errorMessage' => 'The status of listener [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'IdempotenceSignatureMismatch',
                        'errorMessage' => 'The idempotence token of request is same with the prev one, but the signature is different.',
                    ],
                    [
                        'errorCode' => 'DryRunOperation',
                        'errorMessage' => 'Request validation has been passed with DryRun flag set.',
                    ],
                    [
                        'errorCode' => 'ResourceAlreadyAssociated.Certificate',
                        'errorMessage' => 'The specified resource %s is already associated.',
                    ],
                    [
                        'errorCode' => 'IllegalParamSize.certificateIds',
                        'errorMessage' => 'The param size of certificateIds or  caCertificateIds is illegal.',
                    ],
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.IdleTimeout',
                        'errorMessage' => 'The param of IdleTimeout is illegal.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.RegionNotSupportHDMonitor',
                        'errorMessage' => 'The operation is not allowed because of RegionNotSupportHDMonitor.',
                    ],
                    [
                        'errorCode' => 'ResourceNotEnough.CaCertificateApiCount',
                        'errorMessage' => 'The specified resource of CaCertificateApiCount is not enough.',
                    ],
                    [
                        'errorCode' => 'IllegalParam',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.listener',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.HdMonitorConfigNotExist',
                        'errorMessage' => 'The specified resource of HdMonitorConfigNotExist is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.CaCertificate',
                        'errorMessage' => 'The specified resource of CaCertificate is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.securitypolicy',
                        'errorMessage' => 'The specified resource of securitypolicy is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateListenerAttributeResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</UpdateListenerAttributeResponse>","errorExample":""}]',
            'title' => '更新监听配置',
        ],
        'ListListeners' => [
            'summary' => '查询网络型负载均衡监听列表。',
            'methods' => [
                'get',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ListenerIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '监听唯一标识',
                        'description' => '监听实例ID。最多支持20个监听ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '监听实例ID。最多支持20个监听ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'lsn-bp1bpn0kn908w4nbw****',
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'LoadBalancerIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '负载均衡实例标识',
                        'description' => '网络型负载均衡实例ID。最多支持20个实例ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '网络型负载均衡实例ID。最多支持20个实例ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'nlb-83ckzc8d4xlp8o****',
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'ListenerProtocol',
                    'in' => 'query',
                    'schema' => [
                        'title' => '监听协议',
                        'description' => '监听协议。取值：**TCP**、**UDP**或**TCPSSL**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TCPSSL',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '实例的标签键。最多支持输入20个标签键。一旦输入该值，则不允许为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'env',
                                ],
                                'Value' => [
                                    'description' => '实例的标签值。最多支持输入20个标签值。一旦输入该值，可以为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'product',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                            .'- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<ListListenersResponse>',
                        'description' => '查询监听列表。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                            'Listeners' => [
                                'description' => '网络型负载均衡监听列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '网络型负载均衡监听列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Tags' => [
                                            'description' => '标签列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'description' => '标签键。',
                                                        'type' => 'string',
                                                        'example' => 'Created',
                                                    ],
                                                    'Value' => [
                                                        'description' => '标签值。',
                                                        'type' => 'string',
                                                        'example' => 'TF',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'LoadBalancerId' => [
                                            'description' => '网络型负载均衡实例ID。',
                                            'type' => 'string',
                                            'example' => 'nlb-83ckzc8d4xlp8o****',
                                        ],
                                        'ListenerId' => [
                                            'title' => '自己生成后赋值',
                                            'description' => '监听ID。',
                                            'type' => 'string',
                                            'example' => 'lsn-ga6sjjcll6ou34l1et****',
                                        ],
                                        'ListenerProtocol' => [
                                            'title' => '监听协议 (TCP, UDP, TCPSSL, GENEVE)',
                                            'description' => '监听协议。取值：**TCP**、**UDP**或**TCPSSL**。',
                                            'type' => 'string',
                                            'example' => 'TCPSSL',
                                        ],
                                        'ListenerPort' => [
                                            'title' => '监听端口',
                                            'description' => '监听端口。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '443',
                                        ],
                                        'StartPort' => [
                                            'title' => 'anyPort监听起始端口',
                                            'description' => '全端口监听起始端口。',
                                            'type' => 'string',
                                            'example' => '233',
                                        ],
                                        'EndPort' => [
                                            'title' => 'anyPort监听结束端口',
                                            'description' => '全端口监听结束端口。',
                                            'type' => 'string',
                                            'example' => '455',
                                        ],
                                        'ListenerDescription' => [
                                            'title' => '监听描述',
                                            'description' => '自定义监听名称。'."\n"
                                                ."\n"
                                                .'长度限制为2~256个字符，支持中文和英文字母，可包含数字、半角逗号（,）、半角句号（.）、半角分号（;）、正斜线（/）、at（@）、下划线（_）和短划线（-）。',
                                            'type' => 'string',
                                            'example' => 'tcpssl_443',
                                        ],
                                        'ServerGroupId' => [
                                            'title' => 'servergroupId',
                                            'description' => '服务器组ID。',
                                            'type' => 'string',
                                            'example' => 'sgp-ppdpc14gdm3x4o****',
                                        ],
                                        'IdleTimeout' => [
                                            'title' => '空闲超时时间',
                                            'description' => '连接空闲超时时间。单位：秒。取值范围：**1**~**900**。默认值：**900**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '900',
                                        ],
                                        'SecurityPolicyId' => [
                                            'title' => 'Tclssl监听的安全策略',
                                            'description' => '安全策略ID。'."\n"
                                                ."\n"
                                                .'> 仅对TCPSSL监听生效。',
                                            'type' => 'string',
                                            'example' => 'tls_cipher_policy_1_1',
                                        ],
                                        'CertificateIds' => [
                                            'title' => 'server证书列表',
                                            'description' => '服务器证书列表信息。'."\n"
                                                ."\n"
                                                .'> 仅对TCPSSL监听生效。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '服务器证书列表信息。'."\n"
                                                    ."\n"
                                                    .'> 仅对TCPSSL监听生效。',
                                                'type' => 'string',
                                                'example' => '123157******',
                                            ],
                                        ],
                                        'CaCertificateIds' => [
                                            'title' => 'ca 证书列表',
                                            'description' => 'CA证书列表信息。'."\n"
                                                .'> 仅对TCPSSL监听生效。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => 'CA证书列表信息。'."\n"
                                                    .'> 仅对TCPSSL监听生效。',
                                                'type' => 'string',
                                                'example' => '139a00******',
                                            ],
                                        ],
                                        'CaEnabled' => [
                                            'description' => '是否启动双向认证。取值：'."\n"
                                                ."\n"
                                                .'- **true**：启动。'."\n"
                                                ."\n"
                                                .'- **false**：关闭。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'ListenerStatus' => [
                                            'description' => '当前监听的状态，取值：'."\n"
                                                ."\n"
                                                .'- **Provisioning**：创建中。'."\n"
                                                ."\n"
                                                .'- **Running**：运行中。'."\n"
                                                ."\n"
                                                .'- **Configuring**：配置中。'."\n"
                                                ."\n"
                                                .'- **Stopping**：停止中。'."\n"
                                                ."\n"
                                                .'- **Stopped**：已停止。'."\n"
                                                ."\n"
                                                .'- **Starting**：启动中。'."\n"
                                                ."\n"
                                                .'- **Deleting**：删除中。'."\n"
                                                ."\n"
                                                .'- **Deleted**：已删除。',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'RegionId' => [
                                            'title' => '业务location',
                                            'description' => '网络型负载均衡实例所在的地域ID。 ',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'AlpnEnabled' => [
                                            'description' => '是否开启ALPN。取值：'."\n"
                                                ."\n"
                                                .'- **true**：开启。'."\n"
                                                ."\n"
                                                .'- **false**：关闭。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'AlpnPolicy' => [
                                            'description' => 'ALPN策略。取值：'."\n"
                                                ."\n"
                                                .'- **HTTP1Only**'."\n"
                                                .'- **HTTP2Only**'."\n"
                                                .'- **HTTP2Preferred**'."\n"
                                                .'- **HTTP2Optional**',
                                            'type' => 'string',
                                            'example' => 'HTTP1Only',
                                        ],
                                        'SecSensorEnabled' => [
                                            'description' => '是否开启秒级监控功能。取值：'."\n"
                                                ."\n"
                                                .'- **true**：开启。'."\n"
                                                ."\n"
                                                .'- **false**：关闭。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'ProxyProtocolEnabled' => [
                                            'description' => '是否开启通过Proxy Protocol协议携带客户端源地址到后端服务器。取值：'."\n"
                                                ."\n"
                                                .'- **true**：开启。'."\n"
                                                ."\n"
                                                .'- **false**：关闭。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'ProxyProtocolV2Config' => [
                                            'description' => '通过Proxy Protocol协议携带VpcId、PrivateLinkEpId、PrivateLinkEpsId信息到后端服务器配置。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Ppv2VpcIdEnabled' => [
                                                    'description' => '是否开启通过Proxy Protocol协议携带VpcId到后端服务器。取值：'."\n"
                                                        ."\n"
                                                        .'- **true**：开启。'."\n"
                                                        ."\n"
                                                        .'- **false**：关闭。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'Ppv2PrivateLinkEpIdEnabled' => [
                                                    'description' => '是否开启通过Proxy Protocol协议携带PrivateLinkEpId到后端服务器。取值：'."\n"
                                                        ."\n"
                                                        .'- **true**：开启。'."\n"
                                                        ."\n"
                                                        .'- **false**：关闭。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'Ppv2PrivateLinkEpsIdEnabled' => [
                                                    'description' => '是否开启通过Proxy Protocol协议携带PrivateLinkEpsId到后端服务器。取值：'."\n"
                                                        ."\n"
                                                        .'- **true**：开启。'."\n"
                                                        ."\n"
                                                        .'- **false**：关闭。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                            ],
                                        ],
                                        'Cps' => [
                                            'description' => '网络型负载均衡实例每秒新建连接限速值。取值范围：**0**~**1000000**。**0**表示不限速。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1000',
                                        ],
                                        'Mss' => [
                                            'description' => 'TCP报文的最大段大小。单位：字节，取值范围：**0**~**1500**。**0**表示不修改用户TCP报文的MSS值。'."\n"
                                                ."\n"
                                                .'> 仅TCP、TCPSSL类型的监听支持该字段值。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '200',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '列表条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '4',
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    .'- 如果**NextToken**为空表示没有下一次查询。'."\n"
                                    .'- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                                'type' => 'string',
                                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                            ],
                            'MaxResults' => [
                                'description' => '分批次查询时每次显示的条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                    [
                        'errorCode' => 'IllegalParam',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"Listeners\\": [\\n    {\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"Created\\",\\n          \\"Value\\": \\"TF\\"\\n        }\\n      ],\\n      \\"LoadBalancerId\\": \\"nlb-83ckzc8d4xlp8o****\\",\\n      \\"ListenerId\\": \\"lsn-ga6sjjcll6ou34l1et****\\",\\n      \\"ListenerProtocol\\": \\"TCPSSL\\",\\n      \\"ListenerPort\\": 443,\\n      \\"StartPort\\": \\"233\\",\\n      \\"EndPort\\": \\"455\\",\\n      \\"ListenerDescription\\": \\"tcpssl_443\\",\\n      \\"ServerGroupId\\": \\"sgp-ppdpc14gdm3x4o****\\",\\n      \\"IdleTimeout\\": 900,\\n      \\"SecurityPolicyId\\": \\"tls_cipher_policy_1_1\\",\\n      \\"CertificateIds\\": [\\n        \\"123157******\\"\\n      ],\\n      \\"CaCertificateIds\\": [\\n        \\"139a00******\\"\\n      ],\\n      \\"CaEnabled\\": false,\\n      \\"ListenerStatus\\": \\"Running\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"AlpnEnabled\\": false,\\n      \\"AlpnPolicy\\": \\"HTTP1Only\\",\\n      \\"SecSensorEnabled\\": false,\\n      \\"ProxyProtocolEnabled\\": false,\\n      \\"ProxyProtocolV2Config\\": {\\n        \\"Ppv2VpcIdEnabled\\": false,\\n        \\"Ppv2PrivateLinkEpIdEnabled\\": false,\\n        \\"Ppv2PrivateLinkEpsIdEnabled\\": false\\n      },\\n      \\"Cps\\": 1000,\\n      \\"Mss\\": 200\\n    }\\n  ],\\n  \\"TotalCount\\": 4,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20\\n}","errorExample":""},{"type":"xml","example":"<ListListenersResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <Listeners>\\n        <LoadBalancerId>nlb-83ckzc8d4xlp8o****</LoadBalancerId>\\n        <ListenerId>lsn-ga6sjjcll6ou34l1et****</ListenerId>\\n        <ListenerProtocol>TCPSSL</ListenerProtocol>\\n        <ListenerPort>443</ListenerPort>\\n        <StartPort>233</StartPort>\\n        <EndPort>455</EndPort>\\n        <ListenerDescription>tcpssl_443</ListenerDescription>\\n        <ServerGroupId>sgp-ppdpc14gdm3x4o****</ServerGroupId>\\n        <IdleTimeout>900</IdleTimeout>\\n        <SecurityPolicyId>tls_cipher_policy_1_1</SecurityPolicyId>\\n        <CertificateIds>12315790212_166f8204689_1714763408_70998****</CertificateIds>\\n        <CaCertificateIds>139a00604ad-cn-east-hangzh****</CaCertificateIds>\\n        <CaEnabled>false</CaEnabled>\\n        <ListenerStatus>Running</ListenerStatus>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <AlpnEnabled>false</AlpnEnabled>\\n        <AlpnPolicy>ALPN</AlpnPolicy>\\n        <SecSensorEnabled>false</SecSensorEnabled>\\n        <ProxyProtocolEnabled>false</ProxyProtocolEnabled>\\n        <Cps>1000</Cps>\\n        <Mss>200</Mss>\\n    </Listeners>\\n    <TotalCount>4</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n</ListListenersResponse>","errorExample":""}]',
            'title' => '查询监听',
        ],
        'GetListenerAttribute' => [
            'summary' => '查询网络型负载均衡实例的监听详情。',
            'methods' => [
                'get',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ListenerId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'update or delete必选, add在custom中生成',
                        'description' => '监听ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lsn-bp1bpn0kn908w4nbw****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会查询监听详情。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<GetListenerAttributeResponse>',
                        'description' => '查询监听属性。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                            'RegionId' => [
                                'title' => '业务location',
                                'description' => '网络型负载均衡实例所在的地域ID。 ',
                                'type' => 'string',
                                'example' => 'cn-hangzhou',
                            ],
                            'LoadBalancerId' => [
                                'title' => '列表id',
                                'description' => '网络型负载均衡实例ID。',
                                'type' => 'string',
                                'example' => 'nlb-83ckzc8d4xlp8o****',
                            ],
                            'ListenerId' => [
                                'title' => '监听id',
                                'description' => '监听ID。',
                                'type' => 'string',
                                'example' => 'lsn-ga6sjjcll6ou34l1et****',
                            ],
                            'ListenerProtocol' => [
                                'title' => '监听协议 (TCP, UDP, TCPSSL, GENEVE)',
                                'description' => '监听协议。取值：**TCP**、**UDP**或**TCPSSL**。',
                                'type' => 'string',
                                'example' => 'TCPSSL',
                            ],
                            'ListenerPort' => [
                                'title' => '监听端口',
                                'description' => '监听端口。取值范围：**0**~**65535**。**0**：表示使用全端口监听。当设置为**0**时，您需要配置**StartPort**和**EndPort**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '233',
                            ],
                            'StartPort' => [
                                'title' => 'anyPort监听起始端口',
                                'description' => '全端口监听起始端口。取值范围：**0** ~ **65535**。',
                                'type' => 'string',
                                'example' => '233',
                            ],
                            'EndPort' => [
                                'title' => 'anyPort监听结束端口',
                                'description' => '全端口监听结束端口。取值范围：**0**~ **65535**。结束端口的取值小于起始端口。',
                                'type' => 'string',
                                'example' => '455',
                            ],
                            'ListenerDescription' => [
                                'title' => '监听描述',
                                'description' => '自定义监听名称。'."\n"
                                    ."\n"
                                    .'长度限制为2~256个字符，支持中文和英文字母，可包含数字、半角逗号（,）、半角句号（.）、半角分号（;）、正斜线（/）、at（@）、下划线（_）和短划线（-）。',
                                'type' => 'string',
                                'example' => 'tcpssl_443',
                            ],
                            'ServerGroupId' => [
                                'title' => 'servergroupId',
                                'description' => '服务器组ID。',
                                'type' => 'string',
                                'example' => 'sgp-ppdpc14gdm3x4o****',
                            ],
                            'IdleTimeout' => [
                                'title' => '空闲超时时间',
                                'description' => '连接空闲超时时间。单位：秒。取值范围：**1**~**900**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '900',
                            ],
                            'SecurityPolicyId' => [
                                'title' => 'Tclssl监听的安全策略',
                                'description' => '安全策略ID。支持系统安全策略和自定义安全策略。'."\n"
                                    ."\n"
                                    .'- 系统策略取值：**tls_cipher_policy_1_0**（默认值）、**tls_cipher_policy_1_1**、**tls_cipher_policy_1_2**、**tls_cipher_policy_1_2_strict**或**tls_cipher_policy_1_2_strict_with_1_3**。'."\n"
                                    .'- 自定义安全策略：输入自定义安全策略ID。'."\n"
                                    .'    - 创建自定义策略，请参见[CreateSecurityPolicy](~~445901~~)。'."\n"
                                    .'    - 查询安全策略，请参见[ListSecurityPolicy](~~445900~~)。'."\n"
                                    ."\n"
                                    .'>仅对TCPSSL监听生效。',
                                'type' => 'string',
                                'example' => 'tls_cipher_policy_1_0',
                            ],
                            'CertificateIds' => [
                                'title' => 'server证书列表',
                                'description' => '服务器证书列表信息。目前仅支持添加1个服务器证书。'."\n"
                                    ."\n"
                                    .'> 该参数仅对TCPSSL监听生效。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务器证书列表信息。目前仅支持添加1个服务器证书。'."\n"
                                        ."\n"
                                        .'> 该参数仅对TCPSSL监听生效。',
                                    'type' => 'string',
                                    'example' => '123157******',
                                ],
                            ],
                            'CaCertificateIds' => [
                                'title' => 'ca 证书列表',
                                'description' => 'CA证书列表信息。目前仅支持添加1个CA证书。'."\n"
                                    .'> 该参数仅对TCPSSL监听生效。'."\n",
                                'type' => 'array',
                                'items' => [
                                    'description' => 'CA证书列表信息。目前仅支持添加1个CA证书。'."\n"
                                        .'> 该参数仅对TCPSSL监听生效。',
                                    'type' => 'string',
                                    'example' => '139a00******',
                                ],
                            ],
                            'CaEnabled' => [
                                'description' => '是否启动双向认证。取值：'."\n"
                                    ."\n"
                                    .'- **true**：启动。'."\n"
                                    ."\n"
                                    .'- **false**：关闭。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'AlpnEnabled' => [
                                'description' => '是否开启ALPN。取值：'."\n"
                                    ."\n"
                                    .'- **true**：开启。'."\n"
                                    ."\n"
                                    .'- **false**：关闭。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'AlpnPolicy' => [
                                'description' => 'ALPN策略。取值：'."\n"
                                    ."\n"
                                    .'- **HTTP1Only**'."\n"
                                    .'- **HTTP2Only**'."\n"
                                    .'- **HTTP2Preferred**'."\n"
                                    .'- **HTTP2Optional**',
                                'type' => 'string',
                                'example' => 'HTTP1Only',
                            ],
                            'ProxyProtocolEnabled' => [
                                'description' => '是否开启通过Proxy Protocol协议携带客户端源地址到后端服务器。取值：'."\n"
                                    ."\n"
                                    .'- **true**：开启。'."\n"
                                    ."\n"
                                    .'- **false**：关闭。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'ProxyProtocolV2Config' => [
                                'description' => '通过Proxy Protocol协议携带VpcId、PrivateLinkEpId、PrivateLinkEpsId信息到后端服务器配置。',
                                'type' => 'object',
                                'properties' => [
                                    'Ppv2VpcIdEnabled' => [
                                        'description' => '是否开启通过Proxy Protocol协议携带VpcId到后端服务器。取值：'."\n"
                                            ."\n"
                                            .'- **true**：开启。'."\n"
                                            ."\n"
                                            .'- **false**：关闭。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'Ppv2PrivateLinkEpIdEnabled' => [
                                        'description' => '是否开启通过Proxy Protocol协议携带PrivateLinkEpId到后端服务器。取值：'."\n"
                                            ."\n"
                                            .'- **true**：开启。'."\n"
                                            ."\n"
                                            .'- **false**：关闭。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'Ppv2PrivateLinkEpsIdEnabled' => [
                                        'description' => '是否开启通过Proxy Protocol协议携带PrivateLinkEpsId到后端服务器。取值：'."\n"
                                            ."\n"
                                            .'- **true**：开启。'."\n"
                                            ."\n"
                                            .'- **false**：关闭。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                ],
                            ],
                            'SecSensorEnabled' => [
                                'description' => '是否开启秒级监控功能。取值：'."\n"
                                    ."\n"
                                    .'- **true**：开启。'."\n"
                                    ."\n"
                                    .'- **false**：关闭。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'ListenerStatus' => [
                                'description' => '当前监听的状态，取值：'."\n"
                                    ."\n"
                                    .'- **Provisioning**：创建中。'."\n"
                                    ."\n"
                                    .'- **Running**：运行中。'."\n"
                                    ."\n"
                                    .'- **Configuring**：配置中。'."\n"
                                    ."\n"
                                    .'- **Stopping**：停止中。'."\n"
                                    ."\n"
                                    .'- **Stopped**：已停止。'."\n"
                                    ."\n"
                                    .'- **Starting**：启动中。'."\n"
                                    ."\n"
                                    .'- **Deleting**：删除中。'."\n"
                                    ."\n"
                                    .'- **Deleted**：已删除。',
                                'type' => 'string',
                                'example' => 'Running',
                            ],
                            'Cps' => [
                                'description' => '网络型负载均衡实例每秒新建连接限速值。取值范围：**0**~**1000000**。**0**表示不限速。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1000',
                            ],
                            'Mss' => [
                                'description' => 'TCP报文的最大段大小。单位：字节，取值范围：**0**~**1500**。**0**表示不修改用户TCP报文的MSS值。'."\n"
                                    ."\n"
                                    .'> 仅TCP、TCPSSL类型的监听支持该字段值。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '166',
                            ],
                            'Tags' => [
                                'description' => '标签列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TagKey' => [
                                            'description' => '标签键。',
                                            'type' => 'string',
                                            'example' => 'ac-cus-tag-4',
                                        ],
                                        'TagValue' => [
                                            'description' => '标签值。',
                                            'type' => 'string',
                                            'example' => 'ON',
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
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.listener',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"LoadBalancerId\\": \\"nlb-83ckzc8d4xlp8o****\\",\\n  \\"ListenerId\\": \\"lsn-ga6sjjcll6ou34l1et****\\",\\n  \\"ListenerProtocol\\": \\"TCPSSL\\",\\n  \\"ListenerPort\\": 233,\\n  \\"StartPort\\": \\"233\\",\\n  \\"EndPort\\": \\"455\\",\\n  \\"ListenerDescription\\": \\"tcpssl_443\\",\\n  \\"ServerGroupId\\": \\"sgp-ppdpc14gdm3x4o****\\",\\n  \\"IdleTimeout\\": 900,\\n  \\"SecurityPolicyId\\": \\"tls_cipher_policy_1_0\\",\\n  \\"CertificateIds\\": [\\n    \\"123157******\\"\\n  ],\\n  \\"CaCertificateIds\\": [\\n    \\"139a00******\\"\\n  ],\\n  \\"CaEnabled\\": false,\\n  \\"AlpnEnabled\\": false,\\n  \\"AlpnPolicy\\": \\"HTTP1Only\\",\\n  \\"ProxyProtocolEnabled\\": false,\\n  \\"ProxyProtocolV2Config\\": {\\n    \\"Ppv2VpcIdEnabled\\": false,\\n    \\"Ppv2PrivateLinkEpIdEnabled\\": false,\\n    \\"Ppv2PrivateLinkEpsIdEnabled\\": false\\n  },\\n  \\"SecSensorEnabled\\": false,\\n  \\"ListenerStatus\\": \\"Running\\",\\n  \\"Cps\\": 1000,\\n  \\"Mss\\": 166,\\n  \\"Tags\\": [\\n    {\\n      \\"TagKey\\": \\"ac-cus-tag-4\\",\\n      \\"TagValue\\": \\"ON\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetListenerAttributeResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <LoadBalancerId>nlb-83ckzc8d4xlp8o****</LoadBalancerId>\\n    <ListenerId>lsn-ga6sjjcll6ou34l1et****</ListenerId>\\n    <ListenerProtocol>TCPSSL</ListenerProtocol>\\n    <ListenerPort>233</ListenerPort>\\n    <StartPort>233</StartPort>\\n    <EndPort>455</EndPort>\\n    <ListenerDescription>tcpssl_443</ListenerDescription>\\n    <ServerGroupId>sgp-ppdpc14gdm3x4o****</ServerGroupId>\\n    <IdleTimeout>900</IdleTimeout>\\n    <SecurityPolicyId>tls_cipher_policy_1_0</SecurityPolicyId>\\n    <CertificateIds>12315790212_166f8204689_1714763408_70998****</CertificateIds>\\n    <CaCertificateIds>139a00604ad-cn-east-hangzh****</CaCertificateIds>\\n    <CaEnabled>false</CaEnabled>\\n    <AlpnEnabled>false</AlpnEnabled>\\n    <AlpnPolicy>HTTP1Only</AlpnPolicy>\\n    <ProxyProtocolEnabled>false</ProxyProtocolEnabled>\\n    <SecSensorEnabled>false</SecSensorEnabled>\\n    <ListenerStatus>Running</ListenerStatus>\\n    <Cps>1000</Cps>\\n    <Mss>166</Mss>\\n</GetListenerAttributeResponse>","errorExample":""}]',
            'title' => '查询监听的属性',
        ],
        'GetListenerHealthStatus' => [
            'summary' => '查询网络型负载均衡实例监听的健康检查状态。',
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
                    'name' => 'ListenerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络型负载均衡实例的监听ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lsn-bp1bpn0kn908w4nbw****',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                            .'- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<GetListenerHealthStatusResponse>',
                        'description' => '查询监听健康检查状态。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
                            ],
                            'ListenerHealthStatus' => [
                                'description' => '监听的服务器组健康检查状态列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '监听的服务器组健康检查状态列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ListenerId' => [
                                            'description' => '网络型负载均衡实例的监听ID。',
                                            'type' => 'string',
                                            'example' => 'lsn-agkd9gmjx8nd85jjs0****',
                                        ],
                                        'ListenerPort' => [
                                            'description' => '监听的端口号。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '80',
                                        ],
                                        'ListenerProtocol' => [
                                            'description' => '监听协议。取值：**TCP**、**UDP**或**TCPSSL**。',
                                            'type' => 'string',
                                            'example' => 'TCPSSL',
                                        ],
                                        'ServerGroupInfos' => [
                                            'description' => '服务器组信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '服务器组信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'HeathCheckEnabled' => [
                                                        'description' => '是否开启健康检查。取值：'."\n"
                                                            ."\n"
                                                            .'- **true**：开启。'."\n"
                                                            ."\n"
                                                            .'- **false**：关闭。',
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                    'ServerGroupId' => [
                                                        'description' => '服务器组ID。',
                                                        'type' => 'string',
                                                        'example' => 'sgp-ppdpc14gdm3x4o****',
                                                    ],
                                                    'NonNormalServers' => [
                                                        'description' => '非正常状态的后端服务器列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '非正常状态的后端服务器列表。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Status' => [
                                                                    'description' => '健康检查状态。取值：'."\n"
                                                                        ."\n"
                                                                        .'- **Initial**：初始化中，表示负载均衡实例配置了健康检查，但查不到数据。'."\n"
                                                                        ."\n"
                                                                        .'- **Unhealthy**：异常，表示连续上报不健康的状态。'."\n"
                                                                        ."\n"
                                                                        .'- **Unused**：未使用，表示后端服务器的权重为0。'."\n"
                                                                        ."\n"
                                                                        .'- **Unavailable**：未开启，表示未开启健康检查。',
                                                                    'type' => 'string',
                                                                    'example' => 'Initial',
                                                                ],
                                                                'Port' => [
                                                                    'description' => '后端服务器端口。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '80',
                                                                ],
                                                                'Reason' => [
                                                                    'description' => '非正常状态的原因。',
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'ReasonCode' => [
                                                                            'description' => '**Status**为异常状态时的详细原因。取值：'."\n"
                                                                                ."\n"
                                                                                .'- **CONNECT_TIMEOUT**：负载均衡健康检查时向后端服务器建立连接超时。'."\n"
                                                                                .'- **CONNECT_FAIL**：负载均衡健康检查时向后端服务器建立连接失败。'."\n"
                                                                                .'- **RECV_TIMEOUT**：负载均衡健康检查时从后端服务器接收响应超时。'."\n"
                                                                                .'- **CONNECT_INTERRUPT**：负载均衡健康检查与后端服务器连接中断。'."\n"
                                                                                .'- **HTTP_CODE_NOT_MATCH**：负载均衡健康HTTP检查时从后端服务器接收的响应码与预期配置返回码不一致。'."\n"
                                                                                .'- **HTTP_INVALID_HEADER**：负载均衡健康HTTP检查时从后端服务器接收响应格式错误。',
                                                                            'type' => 'string',
                                                                            'example' => 'CONNECT_TIMEOUT',
                                                                        ],
                                                                    ],
                                                                ],
                                                                'ServerId' => [
                                                                    'description' => '后端服务器ID。',
                                                                    'type' => 'string',
                                                                    'example' => 'i-bp1bt75jaujl7tjl****',
                                                                ],
                                                                'ServerIp' => [
                                                                    'description' => '后端服务器IP。',
                                                                    'type' => 'string',
                                                                    'example' => '192.168.8.10',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '列表条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    .'- 如果**NextToken**为空表示没有下一次查询。'."\n"
                                    .'- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                                'type' => 'string',
                                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                            ],
                            'MaxResults' => [
                                'description' => '分批次查询时每次显示的条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.listener',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"ListenerHealthStatus\\": [\\n    {\\n      \\"ListenerId\\": \\"lsn-agkd9gmjx8nd85jjs0****\\",\\n      \\"ListenerPort\\": 80,\\n      \\"ListenerProtocol\\": \\"TCPSSL\\",\\n      \\"ServerGroupInfos\\": [\\n        {\\n          \\"HeathCheckEnabled\\": true,\\n          \\"ServerGroupId\\": \\"sgp-ppdpc14gdm3x4o****\\",\\n          \\"NonNormalServers\\": [\\n            {\\n              \\"Status\\": \\"Initial\\",\\n              \\"Port\\": 80,\\n              \\"Reason\\": {\\n                \\"ReasonCode\\": \\"CONNECT_TIMEOUT\\"\\n              },\\n              \\"ServerId\\": \\"i-bp1bt75jaujl7tjl****\\",\\n              \\"ServerIp\\": \\"192.168.8.10\\"\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ],\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20\\n}","errorExample":""},{"type":"xml","example":"<GetListenerHealthStatusResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <ListenerHealthStatus>\\n        <ListenerId>lsn-agkd9gmjx8nd85jjs0****</ListenerId>\\n        <ListenerPort>80</ListenerPort>\\n        <ListenerProtocol>TCPSSL</ListenerProtocol>\\n        <ServerGroupInfos>\\n            <HeathCheckEnabled>true</HeathCheckEnabled>\\n            <ServerGroupId>sgp-ppdpc14gdm3x4o****</ServerGroupId>\\n            <NonNormalServers>\\n                <Status>Initial</Status>\\n                <Port>80</Port>\\n                <Reason>\\n                    <ReasonCode>CONNECT_TIMEOUT</ReasonCode>\\n                </Reason>\\n                <ServerId>i-bp1bt75jaujl7tjl****</ServerId>\\n                <ServerIp>192.168.8.10</ServerIp>\\n            </NonNormalServers>\\n        </ServerGroupInfos>\\n    </ListenerHealthStatus>\\n    <TotalCount>10</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n</GetListenerHealthStatusResponse>","errorExample":""}]',
            'title' => '查询监听健康检查状态',
        ],
        'ListListenerCertificates' => [
            'summary' => '查询TCPSSL监听的服务器证书。',
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
                    'name' => 'ListenerId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '监听ID。仅TCPSSL监听有效。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lsn-j49ht1jxxqyg45****@80',
                    ],
                ],
                [
                    'name' => 'CertType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '证书类型。'."\n"
                            ."\n"
                            .'- **Ca**：CA证书。'."\n"
                            .'- **Server**：服务器证书。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Ca',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                            .'- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '50',
                        'minimum' => '1',
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<ListListenerCertificatesResponse>',
                        'description' => '查询TCPSSL监听证书。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2198BD6D-9EBB-5E1C-9C48-E0ABB79CF831',
                            ],
                            'CertificateIds' => [
                                'description' => '服务器证书列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务器证书列表。',
                                    'type' => 'string',
                                    'example' => '[ "931****-cn-hangzhou"]',
                                ],
                            ],
                            'Certificates' => [
                                'description' => '证书列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '证书列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'CertificateId' => [
                                            'title' => '证书id',
                                            'description' => '证书ID，当前仅支持服务器证书。',
                                            'type' => 'string',
                                            'example' => '12315790343_166f8204689_1714763408_70998****',
                                        ],
                                        'IsDefault' => [
                                            'title' => '是否为监听默认证书',
                                            'description' => '是否为监听默认证书。取值：'."\n"
                                                ."\n"
                                                .'- **true**：默认证书。'."\n"
                                                ."\n"
                                                .'- **false**：扩展证书。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Status' => [
                                            'title' => '证书与监听关联的状态',
                                            'description' => '证书与监听关联的状态。取值：'."\n"
                                                ."\n"
                                                .'- **Associating**：关联中。'."\n"
                                                ."\n"
                                                .'- **Associated**：已关联。'."\n"
                                                ."\n"
                                                .'- **Diassociating**：解除关联中。',
                                            'type' => 'string',
                                            'example' => 'Associating',
                                        ],
                                        'CertificateType' => [
                                            'title' => '证书类型',
                                            'description' => '证书类型。',
                                            'type' => 'string',
                                            'example' => 'Server',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '列表条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                                    .'- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
                                'type' => 'string',
                                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                            ],
                            'MaxResults' => [
                                'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.Protocol',
                        'errorMessage' => 'The operation is not allowed because of %s.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.%s',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.loadbalancer',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.listener',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2198BD6D-9EBB-5E1C-9C48-E0ABB79CF831\\",\\n  \\"CertificateIds\\": [\\n    \\"[ \\\\\\"931****-cn-hangzhou\\\\\\"]\\"\\n  ],\\n  \\"Certificates\\": [\\n    {\\n      \\"CertificateId\\": \\"12315790343_166f8204689_1714763408_70998****\\",\\n      \\"IsDefault\\": true,\\n      \\"Status\\": \\"Associating\\",\\n      \\"CertificateType\\": \\"Server\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 1,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20\\n}","errorExample":""},{"type":"xml","example":"<ListListenerCertificatesResponse>\\n    <RequestId>2198BD6D-9EBB-5E1C-9C48-E0ABB79CF831</RequestId>\\n    <CertificateIds>[ \\"931****-cn-hangzhou\\"]</CertificateIds>\\n    <Certificates>\\n        <CertificateId>12315790343_166f8204689_1714763408_70998****</CertificateId>\\n        <IsDefault>true</IsDefault>\\n        <Status>Associating</Status>\\n        <CertificateType>Server</CertificateType>\\n    </Certificates>\\n    <TotalCount>1</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n</ListListenerCertificatesResponse>","errorExample":""}]',
            'title' => '查询TCPSSL监听证书',
        ],
        'AssociateAdditionalCertificatesWithListener' => [
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
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AdditionalCertificateIds',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => 'server扩展证书列表',
                        'description' => '扩展证书列表。一次调用最多支持为监听关联15个扩展证书。',
                        'type' => 'array',
                        'items' => [
                            'description' => '扩展证书列表。一次调用最多支持为监听关联15个扩展证书。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '123157******',
                        ],
                        'required' => true,
                        'maxItems' => 15,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'ListenerId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'update or delete必选, add在custom中生成',
                        'description' => '监听ID。该接口仅支持输入TCPSSL监听ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lsn-bpn0kn908w4nbw****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会为TCPSSL监听添加扩展证书。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。  ',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<AdditionalCertificatesWithListenerResponse>',
                        'description' => '为TCPSSL监听添加扩展证书。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.%s',
                        'errorMessage' => 'The operation is not allowed because of %s.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.%s',
                        'errorMessage' => 'The operation failed because of %s.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.%s',
                        'errorMessage' => 'The status of %s [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'ResourceAlreadyAssociated.%s',
                        'errorMessage' => 'The specified resource of %s is already associated.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.listener',
                        'errorMessage' => 'The status of listener [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'ResourceAlreadyAssociated.Certificate',
                        'errorMessage' => 'The specified resource %s is already associated.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'The Lock [%s] is conflict.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.Protocol',
                        'errorMessage' => 'The operation is not allowed because of %s.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.Certificate',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.%s',
                        'errorMessage' => 'The specified resource of %s is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.listener',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'asynchronous',
                'callback' => 'Nlb::2022-04-30::GetJobStatus',
                'callbackInterval' => 5000,
                'maxCallbackTimes' => 10,
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<AssociateAdditionalCertificatesWithListenerResponse>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</AssociateAdditionalCertificatesWithListenerResponse>","errorExample":""}]',
            'title' => '关联扩展证书和监听',
            'summary' => '为TCPSSL监听关联扩展证书。',
            'description' => '**AssociateAdditionalCertificatesWithListener**接口属于异步接口，即系统返回一个请求ID，但该扩展证书尚未添加成功，系统后台的添加任务仍在进行。您可以调用[ListListenerCertificates](~~615175~~)查询扩展证书的添加状态：'."\n"
                ."\n"
                .'- 当TCPSSL监听处于**Associating**状态时，表示扩展证书正在添加中。'."\n"
                .'- 当TCPSSL监听处于**Associated**状态时，表示扩展证书添加成功。',
        ],
        'DisassociateAdditionalCertificatesWithListener' => [
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
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AdditionalCertificateIds',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => 'server扩展证书列表',
                        'description' => '扩展证书列表。一次调用最多支持为监听解绑15个扩展证书。',
                        'type' => 'array',
                        'items' => [
                            'description' => '扩展证书列表。仅支持服务器证书，一次调用最多支持为监听解绑15个扩展证书。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '123157******',
                        ],
                        'required' => true,
                        'maxItems' => 15,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'ListenerId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'update or delete必选, add在custom中生成',
                        'description' => '监听ID。该接口仅支持输入TCPSSL监听ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lsn-bpn0kn908w4nbw****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会为TCPSSL监听解绑扩展证书。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。  ',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<AdditionalCertificatesWithListenerResponse>',
                        'description' => 'RpcResponse<AdditionalCertificatesWithListenerResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IncorrectStatus.listener',
                        'errorMessage' => 'The status of %s [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.certificate',
                        'errorMessage' => 'The status of %s [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.loadbalancer',
                        'errorMessage' => 'The status of %s [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.Protocol',
                        'errorMessage' => 'The operation is not allowed because of %s.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DefaultCertificateUsed',
                        'errorMessage' => 'The operation is not allowed because of %s.',
                    ],
                    [
                        'errorCode' => 'ResourceNotAssociated.Certificate',
                        'errorMessage' => 'The specified resource %s is not associated.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.CaCertificateUsed',
                        'errorMessage' => 'The operation is not allowed because of %s.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'The Lock [%s] is conflict.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.listener',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'asynchronous',
                'callback' => 'Nlb::2022-04-30::GetJobStatus',
                'callbackInterval' => 5,
                'maxCallbackTimes' => 10,
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<DisassociateAdditionalCertificatesWithListenerResponse>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</DisassociateAdditionalCertificatesWithListenerResponse>","errorExample":""}]',
            'title' => '解除关联监听和扩展证书',
            'summary' => '解除TCPSSL监听关联的扩展证书。',
            'description' => '**DisassociateAdditionalCertificatesWithListener**接口属于异步接口，即系统返回一个请求ID，但该扩展证书尚未解绑成功，系统后台的解绑任务仍在进行。您可以调用[ListListenerCertificates](~~615175~~)查询扩展证书的解绑状态：'."\n"
                .' - 当扩展证书状态处于**Dissociating**状态时，表示扩展证书正在解绑中。'."\n"
                .' - 当扩展证书状态处于**Dissociated**状态时，表示扩展证书解绑成功。',
        ],
        'CreateServerGroup' => [
            'summary' => '在指定地域创建服务器组。',
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
            'parameters' => [
                [
                    'name' => 'ServerGroupType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '服务器组类型',
                        'description' => '服务器组类型。取值：'."\n"
                            ."\n"
                            .'- **Instance**（默认值）：服务器类型，该类型服务器组支持添加**Ecs**、**Ens**、**Eci**类型实例。'."\n"
                            ."\n"
                            .'- **Ip**：IP地址类型，该类型服务器组支持直接添加IP地址类型的后端服务器。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Instance',
                        'default' => 'Instance',
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'ServerGroupName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '服务器组名称',
                        'description' => '服务器组名称。'."\n"
                            ."\n"
                            .'长度为2~128个字符，必须以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'NLB_ServerGroup',
                    ],
                ],
                [
                    'name' => 'AddressIPVersion',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '协议版本。取值：'."\n"
                            ."\n"
                            .'- **ipv4**（默认值）：IPv4类型。'."\n"
                            ."\n"
                            .'- **DualStack**：双栈类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ipv4',
                        'default' => 'Ipv4',
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'Protocol',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '后端服务器类型',
                        'description' => '转发到后端服务器使用的通信协议。取值：'."\n"
                            ."\n"
                            .'- **TCP**（默认值）'."\n"
                            .'- **UDP**'."\n"
                            .'- **TCPSSL**',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TCP',
                        'default' => 'Tcp',
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '服务器组所在vpc的id',
                        'description' => '服务器组所在VPC的ID。'."\n"
                            ."\n"
                            .'> 如果**ServerGroupType**取值为**Instance**时，只有该VPC下的服务器可以加入到该服务器组。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc-bp15zckdt37pq72zv****',
                    ],
                ],
                [
                    'name' => 'AnyPortEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启全端口转发。取值：'."\n"
                            ."\n"
                            .'- **true**：开启。'."\n"
                            ."\n"
                            .'- **false**（默认值）：关闭。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ConnectionDrainEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否开启连接优雅中断',
                        'description' => '是否开启连接优雅中断。取值：'."\n"
                            ."\n"
                            .'- **true**：开启。'."\n"
                            ."\n"
                            .'- **false**（默认值）：关闭。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ConnectionDrainTimeout',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '连接优雅中断超时时间',
                        'description' => '设置连接优雅中断超时时间。单位：秒。'."\n"
                            .'取值范围：**0**~**900**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '3600',
                        'minimum' => '0',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'Scheduler',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '调度类型',
                        'description' => '调度算法。取值：'."\n"
                            ."\n"
                            .'- **Wrr**（默认值）：加权轮询，权重值越高的后端服务器，被轮询到的概率也越高。'."\n"
                            ."\n"
                            .'- **Wlc**：加权最小连接数，除了根据每台后端服务器设定的权重值来进行轮询，同时还考虑后端服务器的实际负载（即连接数）。当权重值相同时，当前连接数越小的后端服务器被轮询到的概率也越高。'."\n"
                            ."\n"
                            .'- **rr**：轮询，按照访问顺序依次将外部请求分发到后端服务器。'."\n"
                            ."\n"
                            .'- **sch**：源IP哈希：相同的源地址会调度到相同的后端服务器。'."\n"
                            ."\n"
                            .'- **tch**：四元组哈希，基于四元组（源IP、目的IP、源端口和目的端口）的一致性哈希，相同的流会调度到相同的后端服务器。'."\n"
                            ."\n"
                            .'- **qch**：QUIC ID哈希，支持将同一个QUIC ID的请求哈希到同一台后端服务器上。'."\n"
                            ."\n"
                            .'>  仅后端协议为UDP时，支持选择QUIC ID哈希。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wrr',
                        'default' => 'wrr',
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'PreserveClientIpEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启客户端地址保持功能。取值：'."\n"
                            ."\n"
                            .'- **true**（默认值）：开启。'."\n"
                            .'- **false**：关闭。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'HealthCheckConfig',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '健康检查配置',
                        'description' => '健康检查相关配置。',
                        'type' => 'object',
                        'properties' => [
                            'HealthCheckEnabled' => [
                                'title' => '是否开启健康检查',
                                'description' => '是否开启健康检查，取值：'."\n"
                                    ."\n"
                                    .'- **true**（默认值）：开启。'."\n"
                                    ."\n"
                                    .'- **false**：关闭。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'HealthCheckType' => [
                                'title' => '健康检查协议类型',
                                'description' => '健康检查协议。取值：**TCP**（默认值）或**HTTP**。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'TCP',
                            ],
                            'HealthCheckConnectPort' => [
                                'title' => '健康检查使用的端口',
                                'description' => '健康检查的后端服务器的端口。'."\n"
                                    ."\n"
                                    .'取值范围： **0**~**65535**。'."\n"
                                    ."\n"
                                    .'默认值：**0**，表示使用后端服务器的端口进行健康检查。'."\n"
                                    ."\n",
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'HealthyThreshold' => [
                                'title' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由fail判定为success',
                                'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。'."\n"
                                    ."\n"
                                    .'取值范围：**2**~**10**。'."\n"
                                    ."\n"
                                    .'默认值：**2**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                            ],
                            'UnhealthyThreshold' => [
                                'title' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由success判定为fail',
                                'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**成功**判定为**失败**。'."\n"
                                    ."\n"
                                    .'取值范围：**2**~**10**。'."\n"
                                    ."\n"
                                    .'默认值：**2**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                            ],
                            'HealthCheckConnectTimeout' => [
                                'title' => '健康检查响应的最大超时时间',
                                'description' => '健康检查响应的最大超时时间。单位：秒。'."\n"
                                    .'取值范围：**1**~**300**。'."\n"
                                    .'默认值：**5**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '5',
                            ],
                            'HealthCheckInterval' => [
                                'title' => '健康检查时间间隔',
                                'description' => '健康检查的时间间隔。单位：秒。'."\n"
                                    ."\n"
                                    .'取值范围：**1**~**50**。'."\n"
                                    ."\n"
                                    .'默认值：**10**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
                            ],
                            'HealthCheckDomain' => [
                                'title' => '健康检查的域名',
                                'description' => '用于健康检查的域名。取值：'."\n"
                                    ."\n"
                                    .'- **$SERVER_IP**：使用后端服务器内网IP。'."\n"
                                    ."\n"
                                    .'- **domain**：指定特定域名。长度限制1~80个字符，只能使用大小写字母、数字、短划线（-）、半角句号（.）。'."\n"
                                    ."\n"
                                    .'> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '$SERVER_IP',
                            ],
                            'HealthCheckUrl' => [
                                'title' => '健康检查的url',
                                'description' => '健康检查路径。'."\n"
                                    ."\n"
                                    .'长度为1~80个字符，只能使用大小写英文字母、数字、字符`-/.%?#&`。 必须以正斜线（/）开头。'."\n"
                                    .'> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '/test/index.html',
                            ],
                            'HealthCheckHttpCode' => [
                                'title' => '状态码，多个状态码用逗号分隔',
                                'description' => '健康状态返回码，多个状态码用半角逗号（,）分隔。'."\n"
                                    .'取值：**http\\_2xx**（默认值）、**http\\_3xx**、**http\\_4xx**和**http\\_5xx**。'."\n"
                                    .'> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '健康状态返回码，多个状态码用半角逗号（,）分隔。'."\n"
                                        .'取值：**http\\_2xx**（默认值）、**http\\_3xx**、**http\\_4xx**和**http\\_5xx**。'."\n"
                                        .'> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'http_2xx',
                                ],
                                'required' => false,
                            ],
                            'HttpCheckMethod' => [
                                'description' => '健康检查方法，取值：**GET**（默认值）或**HEAD**。'."\n"
                                    .'> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'GET',
                                'enum' => [],
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务器组所属的资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-atstuj3rtop****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会创建服务器组。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'allowEmptyValue' => true,
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。最多支持64个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。支持字符包括字母、数字、下划线 (_)、点 (.)、冒号 (:)、斜线 (/)、等号 (=)、加号 (+)、减号 (-)、@符号 (@) 。'."\n"
                                        ."\n"
                                        .'一次调用最多支持添加20个标签。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'env',
                                ],
                                'Value' => [
                                    'description' => '标签值。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。支持字符包括字母、数字、下划线 (_)、点 (.)、冒号 (:)、斜线 (/)、等号 (=)、加号 (+)、减号 (-)、@符号 (@) 。'."\n"
                                        ."\n"
                                        .'一次调用最多支持添加20个标签。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'product',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<CreateServerGroupResponse>',
                        'description' => '创建服务器组。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
                            ],
                            'ServerGroupId' => [
                                'description' => '服务器组ID。',
                                'type' => 'string',
                                'example' => 'sgp-atstuj3rtoptyui****',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalParam.AnyPortServerGroupConflictWithHealthCheckConfig',
                        'errorMessage' => 'The param of AnyPortServerGroupConflictWithHealthCheckConfig is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.ParseCreateRsPoolRequestFailed',
                        'errorMessage' => 'The param format of CreateRsPoolRequest is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.PreserveClientIpSwitch',
                        'errorMessage' => 'The param of PreserveClientIpSwitch is illegal.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.VpcNotSupportIpv6',
                        'errorMessage' => 'The operation is not allowed because of VpcNotSupportIpv6.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.healthCheckDomain',
                        'errorMessage' => 'The parameter of healthCheckConfig.healthCheckDomain is illegal.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.UidNotAllowQuic29',
                        'errorMessage' => 'The operation is not allowed because of uid not allow quic29 version.',
                    ],
                    [
                        'errorCode' => 'IlleagalParam.healthCheckUrl',
                        'errorMessage' => 'The parameter of healthCheckUrl in healthCheckConfig is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.ServerGroupName',
                        'errorMessage' => 'The param of ServerGroupName is illegal.',
                    ],
                    [
                        'errorCode' => 'DryRunOperation',
                        'errorMessage' => 'Request validation has been passed with DryRun flag set.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The parameter of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.ConnectionDrainTimeout',
                        'errorMessage' => 'The param of ConnectionDrainTimeout is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParam',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.QuotaInsufficient',
                        'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.Vpc',
                        'errorMessage' => 'The specified resource of Vpc is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.ResourceGroup',
                        'errorMessage' => 'The param of resourceGroup not existed.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"ServerGroupId\\": \\"sgp-atstuj3rtoptyui****\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateServerGroupResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <ServerGroupId>sgp-atstuj3rtoptyui****</ServerGroupId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</CreateServerGroupResponse>","errorExample":""}]',
            'title' => '创建服务器组',
            'description' => '**CreateServerGroup**接口属于异步接口，即系统返回一个请求ID，但该网络型负载均衡的服务器组尚未创建成功，系统后台的创建任务仍在进行。您可以调用[GetJobStatus](~~445904~~)查询服务器组的创建状态：'."\n"
                .'   - 当任务状态处于**Succeeded**时，表示服务器组创建成功。'."\n"
                .'   - 当任务状态处于**Processing**时，表示服务器组正在创建中，在该状态下，您只能执行查询操作，不能执行其他操作。',
        ],
        'AddServersToServerGroup' => [
            'summary' => '向网络型负载均衡服务器组中添加后端服务器。',
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
            'parameters' => [
                [
                    'name' => 'ServerGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务器组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sgp-atstuj3rtoptyui****',
                    ],
                ],
                [
                    'name' => 'Servers',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '后端服务器列表。'."\n"
                            ."\n"
                            .'> 单次调用最多支持传入200个服务器。',
                        'type' => 'array',
                        'items' => [
                            'description' => '后端服务器列表。'."\n"
                                ."\n"
                                .'> 单次调用最多支持传入200个服务器。',
                            'type' => 'object',
                            'properties' => [
                                'ServerId' => [
                                    'title' => '服务器id',
                                    'description' => '后端服务器ID。'."\n"
                                        ."\n"
                                        .'- 当服务器组为**Instance**类型时，该参数为**Ecs**、**Eni**、**Eci**的资源ID。'."\n"
                                        ."\n"
                                        .'- 当服务器组为**Ip**类型时，该参数为IP地址。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'i-bp67acfmxazb4p****',
                                ],
                                'ServerType' => [
                                    'title' => '服务器类型',
                                    'description' => '后端服务器类型，取值：'."\n"
                                        ."\n"
                                        .'- **Ecs**：ECS实例。'."\n"
                                        .'- **Eni**：ENI弹性网卡实例。'."\n"
                                        .'- **Eci**：ECI弹性容器。'."\n"
                                        .'- **Ip**：Ip地址。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'Ecs',
                                    'enum' => [],
                                ],
                                'ServerIp' => [
                                    'title' => '服务器ip',
                                    'description' => '服务器IP地址。当服务器组为**Ip**类型时，必须指定IP地址。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '192.168.6.6',
                                ],
                                'Port' => [
                                    'title' => '服务器端口',
                                    'description' => '后端服务器使用的端口。端口范围**0~65535**，不填则默认传入端口值**0**。'."\n"
                                        ."\n"
                                        .'当服务器组开启全端口转发后，添加后端服务器时无需指定端口（默认传入0），NLB将按照前端请求端口转发流量至后端服务器。您可以通过[ListServerGroups](~~445895~~)接口返回的**AnyPortEnabled**字段查询是否开启了全端口转发。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '443',
                                ],
                                'Weight' => [
                                    'title' => '后端权重',
                                    'description' => '后端服务器的权重，取值范围：**0**~**100**。默认值为**100**。如果设置权重为**0**，则不会将请求转发给该后端服务器。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '100',
                                    'default' => '100',
                                ],
                                'Description' => [
                                    'title' => '服务器描述信息',
                                    'description' => '服务器描述信息。'."\n"
                                        ."\n"
                                        .'长度限制为2-256个字符，可包含英文字母、数字、中文、半角逗号（,）、半角句号（.）、半角分号（;）、正斜线（/）、at（@）、下划线（_）和短划线（-）。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ECS',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会添加服务器。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<AddServersToServerGroupResponse>',
                        'description' => '添加后端服务器。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
                            ],
                            'ServerGroupId' => [
                                'description' => '服务器组ID。',
                                'type' => 'string',
                                'example' => 'sgp-atstuj3rtoptyui****',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'The Lock [%s] is conflict.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.IP',
                        'errorMessage' => 'The param of IP is illegal.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.QuotaInsufficient',
                        'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
                    ],
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                    [
                        'errorCode' => 'DuplicatedParam.Server',
                        'errorMessage' => 'The param of Server is duplicated.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.serverGroup',
                        'errorMessage' => 'The status of servergroup [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'Mismatch.VpcId',
                        'errorMessage' => 'The VpcId is mismatched for %s and %s.',
                    ],
                    [
                        'errorCode' => 'Mismatch.ServerType',
                        'errorMessage' => 'The ServerType is mismatched for %s and %s.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.RSPortConflictWithServerGroup',
                        'errorMessage' => 'The param of RSPortConflictWithServerGroup is illegal.',
                    ],
                    [
                        'errorCode' => 'TagInvokeError',
                        'errorMessage' => 'listTagsByResourceIds: InvalidResourceId.NotFound : The specified ResourceIds are not found in our records.',
                    ],
                    [
                        'errorCode' => 'ResourceInUse.IP',
                        'errorMessage' => 'The specified resource of IP is in use.',
                    ],
                    [
                        'errorCode' => 'IllegalParam',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The parameter of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.description',
                        'errorMessage' => 'The parameter description of server is illegal.',
                    ],
                    [
                        'errorCode' => 'MissingParam.IP',
                        'errorMessage' => 'The param of IP is missing.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.ServerGroupNotSupportIpv6',
                        'errorMessage' => 'The operation is not allowed because of ServerGroupNotSupportIpv6.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.Eni',
                        'errorMessage' => 'Eni status is invalid.',
                    ],
                    [
                        'errorCode' => 'IdempotenceSignatureMismatch',
                        'errorMessage' => 'The idempotence token of request is same with the prev one, but the signature is different.',
                    ],
                    [
                        'errorCode' => 'Throttling.User',
                        'errorMessage' => 'Request was denied due to api flow control.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.serverGroup',
                        'errorMessage' => 'The specified resource of serverGroup is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.Eci',
                        'errorMessage' => 'The specified resource of Eci is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.Ecs',
                        'errorMessage' => 'The specified resource of Ecs is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.Eni',
                        'errorMessage' => 'The specified resource Eni is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"ServerGroupId\\": \\"sgp-atstuj3rtoptyui****\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<AddServersToServerGroupResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <ServerGroupId>sgp-atstuj3rtoptyui****</ServerGroupId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</AddServersToServerGroupResponse>","errorExample":""}]',
            'title' => '添加后端服务器',
        ],
        'DeleteServerGroup' => [
            'summary' => '删除网络型负载均衡的服务器组。',
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
            'parameters' => [
                [
                    'name' => 'ServerGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '服务器组ID',
                        'description' => '服务器组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sgp-atstuj3rtoptyui****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会删除服务器组。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<DeleteServerGroupResponse>',
                        'description' => '删除服务器组。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ResourceInUse.ServerGroup',
                        'errorMessage' => 'The specified resource of ServerGroup is in use.',
                    ],
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.serverGroup',
                        'errorMessage' => 'The status of servergroup [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'DryRunOperation',
                        'errorMessage' => 'Request validation has been passed with DryRun flag set.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'The Lock [%s] is conflict.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.serverGroup',
                        'errorMessage' => 'The specified resource of serverGroup is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteServerGroupResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</DeleteServerGroupResponse>","errorExample":""}]',
            'title' => '删除服务器组',
            'description' => '服务器组未被任何监听使用时支持删除。',
        ],
        'RemoveServersFromServerGroup' => [
            'summary' => '从网络型负载均衡服务器组中移除后端服务器。',
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
            'parameters' => [
                [
                    'name' => 'ServerGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务器组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sgp-atstuj3rtoptyui****',
                    ],
                ],
                [
                    'name' => 'Servers',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '后端服务器列表，单次调用最多支持传入200个服务器。',
                        'type' => 'array',
                        'items' => [
                            'description' => '后端服务器列表，单次调用最多支持传入200个服务器。',
                            'type' => 'object',
                            'properties' => [
                                'ServerId' => [
                                    'title' => '服务器id',
                                    'description' => '后端服务器ID。'."\n"
                                        ."\n"
                                        .'- 当服务器组为**Instance**类型时，该参数为**Ecs**、**Eni**、**Eci**的资源ID。'."\n"
                                        ."\n"
                                        .'- 当服务器组为**Ip**类型时，该参数为IP地址。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'i-bp67acfmxazb4p****',
                                ],
                                'ServerType' => [
                                    'title' => '服务器类型',
                                    'description' => '后端服务器类型，取值：'."\n"
                                        ."\n"
                                        .'- **Ecs**：ECS实例。'."\n"
                                        .'- **Eni**：ENI弹性网卡实例。'."\n"
                                        .'- **Eci**：ECI弹性容器。'."\n"
                                        .'- **Ip**：Ip地址。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'Ecs',
                                    'enum' => [],
                                ],
                                'ServerIp' => [
                                    'title' => '服务器ip',
                                    'description' => '服务器IP地址。当服务器组为**Ip**类型时，必须指定IP地址。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '192.168.6.6',
                                ],
                                'Port' => [
                                    'title' => '服务器端口',
                                    'description' => '后端服务器使用的端口。端口范围**0**~**65535**，不填则默认传入端口值**0**。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '443',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会移除服务器。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<RemoveServersFromServerGroupResponse>',
                        'description' => '移除后端服务器。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
                            ],
                            'ServerGroupId' => [
                                'description' => '服务器组ID。',
                                'type' => 'string',
                                'example' => 'sgp-atstuj3rtoptyui****',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'The Lock [%s] is conflict.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.serverGroup',
                        'errorMessage' => 'The status of servergroup [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.%s',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                    [
                        'errorCode' => 'IdempotenceSignatureMismatch',
                        'errorMessage' => 'The idempotence token of request is same with the prev one, but the signature is different.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.BackendServer',
                        'errorMessage' => 'The specified resource of BackendServer is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.serverGroup',
                        'errorMessage' => 'The specified resource of serverGroup is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"ServerGroupId\\": \\"sgp-atstuj3rtoptyui****\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveServersFromServerGroupResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <ServerGroupId>sgp-atstuj3rtoptyui****</ServerGroupId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</RemoveServersFromServerGroupResponse>","errorExample":""}]',
            'title' => '移除后端服务器',
        ],
        'UpdateServerGroupAttribute' => [
            'summary' => '更新网络型负载均衡服务器组的配置。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ServerGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '服务器组ID',
                        'description' => '服务器组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sgp-atstuj3rtoptyui****',
                    ],
                ],
                [
                    'name' => 'ServerGroupName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '修改后的服务器组名称。'."\n"
                            ."\n"
                            .'长度为2~128个字符，必须以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'NLB_ServerGroup1',
                    ],
                ],
                [
                    'name' => 'ConnectionDrainEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否开启连接优雅中断',
                        'description' => '是否开启连接优雅中断。取值：'."\n"
                            ."\n"
                            .'- **true**：开启。'."\n"
                            ."\n"
                            .'- **false**：不开启。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ConnectionDrainTimeout',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '连接优雅中断超时时间',
                        'description' => '设置连接优雅中断超时时间。单位：秒。取值范围：**0**~**900**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Scheduler',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '调度类型',
                        'description' => '调度算法。取值：'."\n"
                            ."\n"
                            .'- **Wrr**：加权轮询，权重值越高的后端服务器，被轮询到的概率也越高。'."\n"
                            ."\n"
                            .'- **Wlc**：加权最小连接数，除了根据每台后端服务器设定的权重值来进行轮询，同时还考虑后端服务器的实际负载（即连接数）。当权重值相同时，当前连接数越小的后端服务器被轮询到的概率也越高。'."\n"
                            ."\n"
                            .'- **rr**：轮询，按照访问顺序依次将外部请求分发到后端服务器。'."\n"
                            ."\n"
                            .'- **sch**：源IP哈希：相同的源地址会调度到相同的后端服务器。'."\n"
                            ."\n"
                            .'- **tch**：四元组哈希，基于四元组（源IP、目的IP、源端口和目的端口）的一致性哈希，相同的流会调度到相同的后端服务器。'."\n"
                            ."\n"
                            .'- **qch**：QUIC ID哈希，支持将同一个QUIC ID的请求哈希到同一台后端服务器上。'."\n"
                            ."\n"
                            .'> 仅后端协议为UDP时，支持选择QUIC ID哈希。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wrr',
                    ],
                ],
                [
                    'name' => 'PreserveClientIpEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启客户端地址保持功能。取值：'."\n"
                            ."\n"
                            .'- **true**：开启。'."\n"
                            ."\n"
                            .'- **false**：关闭。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'HealthCheckConfig',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '健康检查配置',
                        'description' => '健康检查相关配置。',
                        'type' => 'object',
                        'properties' => [
                            'HealthCheckEnabled' => [
                                'title' => '是否开启健康检查',
                                'description' => '是否开启健康检查，取值：'."\n"
                                    ."\n"
                                    .'- **true**：开启。'."\n"
                                    ."\n"
                                    .'- **false**：关闭。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'HealthCheckType' => [
                                'title' => '健康检查协议类型',
                                'description' => '健康检查协议。取值：**TCP**或**HTTP**。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'TCP',
                            ],
                            'HealthCheckConnectPort' => [
                                'title' => '健康检查使用的端口',
                                'description' => '健康检查的后端服务器的端口。取值范围：**0**~**65535**。**0**表示使用后端服务器的端口进行健康检查。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'HealthyThreshold' => [
                                'title' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由fail判定为success',
                                'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。取值范围：**2**~**10**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '3',
                            ],
                            'UnhealthyThreshold' => [
                                'title' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由success判定为fail',
                                'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**成功**判定为**失败**。取值范围：**2**~**10**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '3',
                            ],
                            'HealthCheckConnectTimeout' => [
                                'title' => '健康检查响应的最大超时时间',
                                'description' => '健康检查响应的最大超时时间。单位：秒。取值范围：**1**~**300**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '100',
                            ],
                            'HealthCheckInterval' => [
                                'title' => '健康检查时间间隔',
                                'description' => '健康检查的时间间隔。单位：秒。'."\n"
                                    ."\n"
                                    .'取值范围：**1**~**50**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '5',
                            ],
                            'HealthCheckDomain' => [
                                'title' => '健康检查的域名',
                                'description' => '用于健康检查的域名。取值：'."\n"
                                    .'- **$SERVER_IP**：使用后端服务器内网IP。'."\n"
                                    .'- **domain**：指定特定域名。长度限制1~80个字符，只能使用小写字母、数字、短划线（-）、半角句号（.）。'."\n"
                                    ."\n"
                                    .'> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '$SERVER_IP',
                            ],
                            'HealthCheckUrl' => [
                                'title' => '健康检查的url',
                                'description' => '健康检查路径。'."\n"
                                    ."\n"
                                    .'长度为1~80个字符，只能使用字母、数字、字符`-/.%?#&=`以及扩展字符`_;~!（)*[]@$^:\',+`。 必须以正斜线（/）开头。'."\n"
                                    .'> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '/test/index.html',
                            ],
                            'HealthCheckHttpCode' => [
                                'title' => '状态码，多个状态码用逗号分隔',
                                'description' => '健康状态返回码，多个状态码用半角逗号（,）分隔。'."\n"
                                    .'取值：**http\\_2xx**（默认值）、**http\\_3xx**、**http\\_4xx**和**http\\_5xx**。'."\n"
                                    .'> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '健康状态返回码，多个状态码用半角逗号（,）分隔。'."\n"
                                        .'取值：**http\\_2xx**（默认值）、**http\\_3xx**、**http\\_4xx**和**http\\_5xx**。'."\n"
                                        .'> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'http_2xx',
                                ],
                                'required' => false,
                            ],
                            'HttpCheckMethod' => [
                                'description' => '健康检查方法，取值：**GET**或**HEAD**。'."\n"
                                    .'> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'GET',
                                'enum' => [],
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会更新服务器组信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => ' false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<UpdateServerGroupAttributeResponse>',
                        'description' => '更新服务器组配置。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
                            ],
                            'ServerGroupId' => [
                                'description' => '服务器组ID。',
                                'type' => 'string',
                                'example' => 'sgp-atstuj3rtoptyui****',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalParam.%s',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.healthCheckDomain',
                        'errorMessage' => 'The parameter of healthCheckConfig.healthCheckDomain is illegal.',
                    ],
                    [
                        'errorCode' => 'IlleagalParam.healthCheckUrl',
                        'errorMessage' => 'The parameter of healthCheckUrl in healthCheckConfig is illegal.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.UidNotAllowQuic29',
                        'errorMessage' => 'The operation is not allowed because of uid not allow quic29 version.',
                    ],
                    [
                        'errorCode' => 'IllegalParam',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'DryRunOperation',
                        'errorMessage' => 'Request validation has been passed with DryRun flag set.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.ServerGroupName',
                        'errorMessage' => 'The param of ServerGroupName is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.PreserveClientIpSwitch',
                        'errorMessage' => 'The server group associated with the tcpssl listener does not support enabling PreserveClientIp.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.serverGroup',
                        'errorMessage' => 'The specified resource of serverGroup is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"ServerGroupId\\": \\"sgp-atstuj3rtoptyui****\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateServerGroupAttributeResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <ServerGroupId>sgp-atstuj3rtoptyui****</ServerGroupId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</UpdateServerGroupAttributeResponse>","errorExample":""}]',
            'title' => '更新服务器组配置',
        ],
        'UpdateServerGroupServersAttribute' => [
            'summary' => '更新网络型负载均衡服务器组中后端服务器的权重和描述信息。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ServerGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务器组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sgp-atstuj3rtoptyui****',
                    ],
                ],
                [
                    'name' => 'Servers',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '后端服务器列表，单次调用最多支持传入200个后端服务器。',
                        'type' => 'array',
                        'items' => [
                            'description' => '后端服务器列表，单次调用最多支持传入200个后端服务器。',
                            'type' => 'object',
                            'properties' => [
                                'ServerId' => [
                                    'title' => '服务器id',
                                    'description' => '后端服务器ID。'."\n"
                                        ."\n"
                                        .'- 当服务器组为**Instance**类型时，该参数为**Ecs**、**Eni**、**Eci**的资源ID。'."\n"
                                        ."\n"
                                        .'- 当服务器组为**Ip**类型时，该参数为IP地址。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'i-bp67acfmxazb4p****',
                                ],
                                'ServerType' => [
                                    'title' => '服务器类型',
                                    'description' => '后端服务器类型，取值：'."\n"
                                        ."\n"
                                        .'- **Ecs**：ECS实例。'."\n"
                                        .'- **Eni**：ENI弹性网卡实例。'."\n"
                                        .'- **Eci**：ECI弹性容器。'."\n"
                                        .'- **Ip**：IP地址。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'Ecs',
                                    'enum' => [],
                                ],
                                'ServerIp' => [
                                    'title' => '服务器ip',
                                    'description' => '服务器IP地址。当服务器组为**Ip**类型时，必须指定IP地址。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '192.168.6.6',
                                ],
                                'Port' => [
                                    'title' => '服务器端口',
                                    'description' => '后端服务器使用的端口。取值范围：**1**~**65535**。'."\n"
                                        ."\n"
                                        .'> 该参数暂不支持修改。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                    'example' => '443',
                                ],
                                'Weight' => [
                                    'title' => '后端权重',
                                    'description' => '后端服务器的权重，取值范围：**0**~**100**。默认值为**100**。如果设置权重为**0**，则不会将请求转发给该后端服务器。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '100',
                                ],
                                'Description' => [
                                    'title' => '服务器描述信息',
                                    'description' => '服务器描述信息。'."\n"
                                        ."\n"
                                        .'长度限制为2-256个字符，可包含英文字母、数字、中文、半角逗号（,）、半角句号（.）、半角分号（;）、正斜线（/）、at（@）、下划线（_）和短划线（-）。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '后端服务器描述',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会更新服务器配置信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<UpdateServerGroupServersAttributeResponse>',
                        'description' => '更新后端服务器配置。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
                            ],
                            'ServerGroupId' => [
                                'description' => '服务器组ID。',
                                'type' => 'string',
                                'example' => 'sgp-atstuj3rtoptyui****',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IncorrectStatus.serverGroup',
                        'errorMessage' => 'The status of servergroup [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'The Lock [%s] is conflict.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.%s',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The parameter of %s is missing.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.%s',
                        'errorMessage' => 'Authentication is failed for %s.',
                    ],
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.BackendServer',
                        'errorMessage' => 'The specified resource of BackendServer is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.serverGroup',
                        'errorMessage' => 'The specified resource of serverGroup is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"ServerGroupId\\": \\"sgp-atstuj3rtoptyui****\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateServerGroupServersAttributeResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <ServerGroupId>sgp-atstuj3rtoptyui****</ServerGroupId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</UpdateServerGroupServersAttributeResponse>","errorExample":""}]',
            'title' => '更新后端服务器配置',
            'description' => '**UpdateServerGroupServersAttribute**接口属于异步接口，即系统返回一个请求ID，但该后端服务器配置信息尚未添加成功，系统后台的添加任务仍在进行。'."\n"
                .'1. 您可以调用[ListServerGroups](~~445895~~)查询服务器组状态：'."\n"
                .'    - 当服务器组处于**Configuring**状态时，表示服务器组正在变配中。'."\n"
                .'    - 当服务器组处于**Available**状态时，表示服务器组运行中。'."\n"
                ."\n"
                .'2. 您可以调用[ListServerGroupServers](~~445896~~)查询后端服务器状态：'."\n"
                .'    - 当后端服务器处于**Configuring**状态时，表示后端服务器正在变配中。'."\n"
                .'    - 当后端服务器处于**Available**状态时，表示后端服务器运行中。',
        ],
        'ListServerGroups' => [
            'summary' => '查询网络型负载均衡实例的服务器组列表。',
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
                    'name' => 'ServerGroupIds',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '服务器组ID。一次最多支持查询20个服务器组ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '服务器组ID。一次最多支持查询20个服务器组ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'sgp-atstuj3rtoptyui****',
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'ServerGroupNames',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '服务器组名称，一次最多支持查询20个服务器组名称。',
                        'type' => 'array',
                        'items' => [
                            'description' => '服务器组名称，一次最多支持查询20个服务器组名称。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'NLB_ServerGroup',
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务器组所属的资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-atstuj3rtop****',
                    ],
                ],
                [
                    'name' => 'ServerGroupType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务器组类型。取值：'."\n"
                            ."\n"
                            .'- **Instance**：服务器类型，该类型服务器组支持添加**Ecs**、**Ens**、**Eci**类型实例。'."\n"
                            .'- **Ip**：IP地址类型，该类型服务器组支持直接添加IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Instance',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '服务器组所在vpc的id',
                        'description' => '服务器组所在VPC的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-bp15zckdt37pq72zv****',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。最多支持10个标签键。'."\n"
                                        ."\n"
                                        .'最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或`者https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Test',
                                ],
                                'Value' => [
                                    'description' => '标签值。最多支持10个标签值。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Test',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                            .'- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'RpcResponse<ListServerGroupsResponse>',
                        'description' => '查询服务器组。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '54B28E3D-DF70-471B-AA93-08E683A1B45',
                            ],
                            'ServerGroups' => [
                                'description' => '后端服务器组列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '后端服务器组列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'RegionId' => [
                                            'title' => '业务region',
                                            'description' => '网络型负载均衡实例所在的地域ID。 ',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'ServerGroupId' => [
                                            'title' => '服务器组id',
                                            'description' => '服务器组ID。',
                                            'type' => 'string',
                                            'example' => 'sgp-atstuj3rtoptyui****',
                                        ],
                                        'ServerGroupName' => [
                                            'title' => '服务器组名称',
                                            'description' => '服务器组名称。',
                                            'type' => 'string',
                                            'example' => 'NLB_ServerGroup',
                                        ],
                                        'ServerGroupType' => [
                                            'title' => '服务器组类型',
                                            'description' => '服务器组类型。取值：'."\n"
                                                ."\n"
                                                .'- **Instance**：服务器类型，该类型服务器组支持添加**Ecs**、**Ens**、**Eci**类型实例。'."\n"
                                                .'- **Ip**：IP地址类型，该类型服务器组支持直接添加IP地址。',
                                            'type' => 'string',
                                            'example' => 'Instance',
                                        ],
                                        'AddressIPVersion' => [
                                            'title' => '服务器组地址类型',
                                            'description' => '协议版本。取值：'."\n"
                                                ."\n"
                                                .'- **Ipv4**：ipv4类型。'."\n"
                                                .'- **DualStack**：双栈类型。',
                                            'type' => 'string',
                                            'example' => 'ipv4',
                                        ],
                                        'VpcId' => [
                                            'title' => '服务器组的vpcid',
                                            'description' => '服务器组所在VPC的ID。',
                                            'type' => 'string',
                                            'example' => 'vpc-bp15zckdt37pq72zv****',
                                        ],
                                        'Scheduler' => [
                                            'title' => '调度类型',
                                            'description' => '调度算法。取值：'."\n"
                                                ."\n"
                                                .'- **Wrr**：加权轮询，权重值越高的后端服务器，被轮询到的概率也越高。'."\n"
                                                .'- **Wlc**：加权最小连接数，除了根据每台后端服务器设定的权重值来进行轮询，同时还考虑后端服务器的实际负载（即连接数）。当权重值相同时，当前连接数越小的后端服务器被轮询到的概率也越高。'."\n"
                                                .'- **rr**：轮询，按照访问顺序依次将外部请求分发到后端服务器sch：源IP哈希：相同的源地址会调度到相同的后端服务器。'."\n"
                                                .'- **sch**：源IP哈希，相同的源地址会调度到相同的后端服务器。'."\n"
                                                .'- **tch**：四元组哈希，基于四元组（源IP、目的IP、源端口和目的端口）的一致性哈希，相同的流会调度到相同的后端服务器。'."\n"
                                                .'- **qch**：QUIC ID哈希，支持将同一个QUIC ID的请求哈希到同一台后端服务器上。',
                                            'type' => 'string',
                                            'example' => 'Wrr',
                                        ],
                                        'Protocol' => [
                                            'title' => '后端协议',
                                            'description' => '后端转发协议，取值：**TCP**、**UDP**或**TCPSSL**。'."\n",
                                            'type' => 'string',
                                            'example' => 'TCP',
                                        ],
                                        'HealthCheck' => [
                                            'title' => '健康检查配置',
                                            'description' => '健康检查配置信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'HealthCheckEnabled' => [
                                                    'title' => '是否开启健康检查',
                                                    'description' => '是否开启健康检查，取值：'."\n"
                                                        ."\n"
                                                        .'- **true**：开启。'."\n"
                                                        ."\n"
                                                        .'- **false**：关闭。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'HealthCheckType' => [
                                                    'title' => '健康检查协议类型',
                                                    'description' => '健康检查协议。取值：**TCP**或**HTTP**。',
                                                    'type' => 'string',
                                                    'example' => 'TCP',
                                                ],
                                                'HealthCheckConnectPort' => [
                                                    'title' => '健康检查使用的端口',
                                                    'description' => '健康检查的后端服务器的端口。'."\n"
                                                        ."\n"
                                                        .'取值范围： **0**~**65535**。'."\n"
                                                        ."\n"
                                                        .'**0**表示使用后端服务器的端口进行健康检查。'."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '200',
                                                ],
                                                'HealthyThreshold' => [
                                                    'title' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由fail判定为success',
                                                    'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。'."\n"
                                                        ."\n"
                                                        .'取值范围：**2**~**10**。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
                                                ],
                                                'UnhealthyThreshold' => [
                                                    'title' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由success判定为fail',
                                                    'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**成功**判定为**失败**。'."\n"
                                                        ."\n"
                                                        .'取值范围：**2**~**10**。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '3',
                                                ],
                                                'HealthCheckConnectTimeout' => [
                                                    'title' => '健康检查响应的最大超时时间',
                                                    'description' => '健康检查响应的最大超时时间。单位：秒。'."\n"
                                                        .'取值范围：**1**~**300**。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '200',
                                                ],
                                                'HealthCheckInterval' => [
                                                    'title' => '健康检查时间间隔',
                                                    'description' => '健康检查的时间间隔。单位：秒。'."\n"
                                                        ."\n"
                                                        .'取值范围：**1**~**50**。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '10',
                                                ],
                                                'HealthCheckDomain' => [
                                                    'title' => '健康检查的域名',
                                                    'description' => '用于健康检查的域名。取值：'."\n"
                                                        ."\n"
                                                        .'- **$SERVER_IP**：使用后端服务器内网IP。'."\n"
                                                        ."\n"
                                                        .'- **domain**：指定特定域名。长度限制1~80个字符，只能使用小写字母、数字、短划线（-）、半角句号（.）。'."\n"
                                                        ."\n"
                                                        .'> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                                                    'type' => 'string',
                                                    'example' => '$SERVER_IP',
                                                ],
                                                'HealthCheckUrl' => [
                                                    'title' => '健康检查的url',
                                                    'description' => '健康检查路径。'."\n"
                                                        ."\n"
                                                        .'> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                                                    'type' => 'string',
                                                    'example' => '/test/index.html',
                                                ],
                                                'HealthCheckHttpCode' => [
                                                    'title' => '状态码，多个状态码用逗号分隔',
                                                    'description' => '健康状态返回码，多个状态码用半角逗号（,）分隔。'."\n"
                                                        .'取值：**http\\_2xx**、**http\\_3xx**、**http\\_4xx**和**http\\_5xx**。'."\n"
                                                        .'> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '健康状态返回码，多个状态码用半角逗号（,）分隔。'."\n"
                                                            .'取值：**http\\_2xx**、**http\\_3xx**、**http\\_4xx**和**http\\_5xx**。'."\n"
                                                            .'> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                                                        'type' => 'string',
                                                        'example' => 'http_2xx',
                                                    ],
                                                ],
                                                'HttpCheckMethod' => [
                                                    'description' => '健康检查方法，取值：**GET**或**HEAD**。'."\n"
                                                        .'> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                                                    'type' => 'string',
                                                    'example' => 'GET',
                                                ],
                                            ],
                                        ],
                                        'ConnectionDrainEnabled' => [
                                            'title' => '连接优雅中断开关',
                                            'description' => '是否开启连接优雅中断。取值：'."\n"
                                                ."\n"
                                                .'- **true**：开启。'."\n"
                                                ."\n"
                                                .'- **false**：关闭。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'ConnectionDrainTimeout' => [
                                            'title' => '连接优雅中断超时时间',
                                            'description' => '设置连接优雅中断超时时间。单位：秒。'."\n"
                                                .'取值范围：**10**~**900**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '200',
                                        ],
                                        'PreserveClientIpEnabled' => [
                                            'title' => '客户端地址保持开关',
                                            'description' => '是否开启客户端地址保持功能。取值：'."\n"
                                                ."\n"
                                                .'- **true**：开启。'."\n"
                                                .'- **false**：关闭。'."\n"
                                                ."\n"
                                                .'> 特殊说明：**AddressIPVersion**为**ipv4**类型时默认为**true**。**AddressIPVersion**为**ipv6**值时只能是**false**，后续待底层支持后可以为**true**。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'AnyPortEnabled' => [
                                            'description' => '是否开启全端口转发。取值：'."\n"
                                                ."\n"
                                                .'- **true**：开启。'."\n"
                                                ."\n"
                                                .'- **false**：关闭。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'ResourceGroupId' => [
                                            'title' => '资源组id',
                                            'description' => '服务器组所属的资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-atstuj3rtop****',
                                        ],
                                        'ServerGroupStatus' => [
                                            'title' => '状态',
                                            'description' => '服务器组状态。取值：'."\n"
                                                ."\n"
                                                .'- **Creating**：创建中。'."\n"
                                                .'- **Available**：可用。'."\n"
                                                .'- **Configuring**：变配中。',
                                            'type' => 'string',
                                            'example' => 'Available',
                                        ],
                                        'AliUid' => [
                                            'description' => '用户UID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '165820696622****',
                                        ],
                                        'Tags' => [
                                            'description' => '标签。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'description' => '标签键。最多支持10个标签键。'."\n"
                                                            ."\n"
                                                            .'最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或`者https://`。',
                                                        'type' => 'string',
                                                        'example' => 'Test',
                                                    ],
                                                    'Value' => [
                                                        'description' => '标签值。最多支持10个标签值。'."\n"
                                                            ."\n"
                                                            .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                                        'type' => 'string',
                                                        'example' => 'Test',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'RelatedLoadBalancerIds' => [
                                            'description' => '网络型负载均衡实例列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '网络型负载均衡实例列表。',
                                                'type' => 'string',
                                                'example' => 'nlb-83ckzc8d4xlp8o****',
                                            ],
                                        ],
                                        'ServerCount' => [
                                            'description' => '后端服务器数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '列表条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    .'- 如果**NextToken**为空表示没有下一次查询。'."\n"
                                    .'- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                                'type' => 'string',
                                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                            ],
                            'MaxResults' => [
                                'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.%s',
                        'errorMessage' => 'Authentication is failed for %s.',
                    ],
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B28E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"ServerGroups\\": [\\n    {\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"ServerGroupId\\": \\"sgp-atstuj3rtoptyui****\\",\\n      \\"ServerGroupName\\": \\"NLB_ServerGroup\\",\\n      \\"ServerGroupType\\": \\"Instance\\",\\n      \\"AddressIPVersion\\": \\"ipv4\\",\\n      \\"VpcId\\": \\"vpc-bp15zckdt37pq72zv****\\",\\n      \\"Scheduler\\": \\"Wrr\\",\\n      \\"Protocol\\": \\"TCP\\",\\n      \\"HealthCheck\\": {\\n        \\"HealthCheckEnabled\\": false,\\n        \\"HealthCheckType\\": \\"TCP\\",\\n        \\"HealthCheckConnectPort\\": 200,\\n        \\"HealthyThreshold\\": 2,\\n        \\"UnhealthyThreshold\\": 3,\\n        \\"HealthCheckConnectTimeout\\": 200,\\n        \\"HealthCheckInterval\\": 10,\\n        \\"HealthCheckDomain\\": \\"$SERVER_IP\\",\\n        \\"HealthCheckUrl\\": \\"/test/index.html\\",\\n        \\"HealthCheckHttpCode\\": [\\n          \\"http_2xx\\"\\n        ],\\n        \\"HttpCheckMethod\\": \\"GET\\"\\n      },\\n      \\"ConnectionDrainEnabled\\": false,\\n      \\"ConnectionDrainTimeout\\": 200,\\n      \\"PreserveClientIpEnabled\\": true,\\n      \\"AnyPortEnabled\\": false,\\n      \\"ResourceGroupId\\": \\"rg-atstuj3rtop****\\",\\n      \\"ServerGroupStatus\\": \\"Available\\",\\n      \\"AliUid\\": 0,\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"Test\\",\\n          \\"Value\\": \\"Test\\"\\n        }\\n      ],\\n      \\"RelatedLoadBalancerIds\\": [\\n        \\"nlb-83ckzc8d4xlp8o****\\"\\n      ],\\n      \\"ServerCount\\": 2\\n    }\\n  ],\\n  \\"TotalCount\\": 1,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20\\n}","errorExample":""},{"type":"xml","example":"<ListServerGroupsResponse>\\n    <RequestId>54B28E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <ServerGroups>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ServerGroupId>sgp-atstuj3rtoptyui****</ServerGroupId>\\n        <ServerGroupName>NLB_ServerGroup</ServerGroupName>\\n        <ServerGroupType>Instance</ServerGroupType>\\n        <AddressIPVersion>ipv4</AddressIPVersion>\\n        <VpcId>vpc-bp15zckdt37pq72zv****</VpcId>\\n        <Scheduler>Wrr</Scheduler>\\n        <Protocol>TCP</Protocol>\\n        <HealthCheck>\\n            <HealthCheckEnabled>false</HealthCheckEnabled>\\n            <HealthCheckType>TCP</HealthCheckType>\\n            <HealthCheckConnectPort>200</HealthCheckConnectPort>\\n            <HealthyThreshold>2</HealthyThreshold>\\n            <UnhealthyThreshold>3</UnhealthyThreshold>\\n            <HealthCheckConnectTimeout>200</HealthCheckConnectTimeout>\\n            <HealthCheckInterval>200</HealthCheckInterval>\\n            <HealthCheckDomain>$SERVER_IP</HealthCheckDomain>\\n            <HealthCheckUrl>/test/index.html</HealthCheckUrl>\\n            <HealthCheckHttpCode>http2xx</HealthCheckHttpCode>\\n            <HttpCheckMethod>GET</HttpCheckMethod>\\n        </HealthCheck>\\n        <ConnectionDrainEnabled>false</ConnectionDrainEnabled>\\n        <ConnectionDrainTimeout>200</ConnectionDrainTimeout>\\n        <PreserveClientIpEnabled>true</PreserveClientIpEnabled>\\n        <AnyPortEnabled>false</AnyPortEnabled>\\n        <ResourceGroupId>rg-atstuj3rtop****</ResourceGroupId>\\n        <ServerGroupStatus>Available</ServerGroupStatus>\\n        <Tags>\\n            <Key>Test</Key>\\n            <Value>Test</Value>\\n        </Tags>\\n        <RelatedLoadBalancerIds>nlb-83ckzc8d4xlp8o****</RelatedLoadBalancerIds>\\n        <ServerCount>2</ServerCount>\\n    </ServerGroups>\\n    <TotalCount>1</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n</ListServerGroupsResponse>","errorExample":""}]',
            'title' => '查询服务器组',
        ],
        'ListServerGroupServers' => [
            'summary' => '查询网络型负载均衡服务器组中的服务器列表。',
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
                    'name' => 'ServerGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务器组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sgp-atstuj3rtoptyui****',
                    ],
                ],
                [
                    'name' => 'ServerIds',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '服务器ID列表。单次调用最多支持展示40个服务器。',
                        'type' => 'array',
                        'items' => [
                            'description' => '服务器ID列表。单次调用最多支持展示40个服务器。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'i-bp67acfmxazb4p****',
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ServerIps',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '服务器IP列表。单次调用最多支持展示40个服务器。',
                        'type' => 'array',
                        'items' => [
                            'description' => '服务器IP列表。单次调用最多支持展示40个服务器。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '192.168.6.3',
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                            .'- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<ListServerGroupServersResponse>',
                        'description' => '查询服务器。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
                            ],
                            'Servers' => [
                                'description' => '服务器列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务器列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ServerId' => [
                                            'title' => '服务器id',
                                            'description' => '后端服务器ID。',
                                            'type' => 'string',
                                            'example' => 'i-bp67acfmxazb4p****',
                                        ],
                                        'ServerType' => [
                                            'title' => '服务器类型',
                                            'description' => '后端服务器类型，取值：'."\n"
                                                ."\n"
                                                .'- **Ecs**：ECS实例。'."\n"
                                                .'- **Eni**：ENI弹性网卡实例。'."\n"
                                                .'- **Eci**：ECI弹性容器。'."\n"
                                                .'- **Ip**：IP地址。',
                                            'type' => 'string',
                                            'example' => 'Ecs',
                                        ],
                                        'ServerIp' => [
                                            'title' => '服务器ip',
                                            'description' => '后端服务器IP地址。',
                                            'type' => 'string',
                                            'example' => '192.168.2.1',
                                        ],
                                        'Port' => [
                                            'title' => '服务器端口',
                                            'description' => '后端服务器使用的端口。取值范围：**1**~**65535**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '80',
                                        ],
                                        'Weight' => [
                                            'title' => '后端权重',
                                            'description' => '后端服务器的权重。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '100',
                                        ],
                                        'ServerGroupId' => [
                                            'description' => '服务器组ID。',
                                            'type' => 'string',
                                            'example' => 'sgp-atstuj3rtoptyui****',
                                        ],
                                        'Description' => [
                                            'title' => '服务器描述信息',
                                            'description' => '后端服务器描述。',
                                            'type' => 'string',
                                            'example' => 'ECS',
                                        ],
                                        'ZoneId' => [
                                            'title' => '服务器对应的zoneId',
                                            'description' => '服务器对应的可用区ID。'."\n",
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-a',
                                        ],
                                        'Status' => [
                                            'title' => '服务器的状态',
                                            'description' => '后端服务器的添加状态。取值：'."\n"
                                                ."\n"
                                                .'- **Adding**：添加中。'."\n"
                                                .'- **Available**：正常可用状态。'."\n"
                                                .'- **Configuring**：配置中。'."\n"
                                                .'- **Removing**：移除中。',
                                            'type' => 'string',
                                            'example' => 'Available',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '列表条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                                    .'- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
                                'type' => 'string',
                                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                            ],
                            'MaxResults' => [
                                'description' => '分批次查询时每次显示的条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.serverGroup',
                        'errorMessage' => 'The specified resource of serverGroup is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"Servers\\": [\\n    {\\n      \\"ServerId\\": \\"i-bp67acfmxazb4p****\\",\\n      \\"ServerType\\": \\"Ecs\\",\\n      \\"ServerIp\\": \\"192.168.2.1\\",\\n      \\"Port\\": 80,\\n      \\"Weight\\": 100,\\n      \\"ServerGroupId\\": \\"sgp-atstuj3rtoptyui****\\",\\n      \\"Description\\": \\"ECS\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-a\\",\\n      \\"Status\\": \\"Available\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20\\n}","errorExample":""},{"type":"xml","example":"<ListServerGroupServersResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <Servers>\\n        <ServerId>ecs-bp67acfmxazb4p****</ServerId>\\n        <ServerType>Ecs</ServerType>\\n        <ServerIp>192.168.2.1</ServerIp>\\n        <Port>80</Port>\\n        <Weight>100</Weight>\\n        <ServerGroupId>sgp-atstuj3rtoptyui****</ServerGroupId>\\n        <Description>ECS</Description>\\n        <ZoneId>cn-hangzhou-a</ZoneId>\\n        <Status>Available</Status>\\n    </Servers>\\n    <TotalCount>10</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n</ListServerGroupServersResponse>","errorExample":""}]',
            'title' => '查询服务器',
        ],
        'DetachCommonBandwidthPackageFromLoadBalancer' => [
            'summary' => '解绑网络型负载均衡实例中的共享带宽包。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nlb-83ckzc8d4xlp8o****',
                    ],
                ],
                [
                    'name' => 'BandwidthPackageId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要移除的共享带宽包ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cbwp-bp1pzf0ym72pu3y76****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会解绑带宽包。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'response',
                        'description' => '解绑共享带宽包。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.%s',
                        'errorMessage' => 'The operation is not allowed because of %s.',
                    ],
                    [
                        'errorCode' => 'ResourceNotAssociated.loadbalancer',
                        'errorMessage' => 'Thre resource is not associated with loadbalancer.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<DetachCommonBandwidthPackageFromLoadBalancerResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</DetachCommonBandwidthPackageFromLoadBalancerResponse>","errorExample":""}]',
            'title' => '实例解绑共享带宽包',
        ],
        'AttachCommonBandwidthPackageToLoadBalancer' => [
            'summary' => '为网络型负载均衡实例绑定共享带宽包。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nlb-83ckzc8d4xlp8o****',
                    ],
                ],
                [
                    'name' => 'BandwidthPackageId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '绑定的共享带宽包ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cbwp-bp1pzf0ym72pu3y76****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会绑定带宽包。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'response',
                        'description' => '实例绑定共享带宽包。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.IntranetLoadBalancer',
                        'errorMessage' => 'The operation is not allowed because of IntranetLoadBalancer.',
                    ],
                    [
                        'errorCode' => 'ResourceAlreadyAssociated.loadbalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is already associated.',
                    ],
                    [
                        'errorCode' => 'ResourceInConfiguring.loadbalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is being configured, please try again later.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.BandwidthPackageId',
                        'errorMessage' => 'The specified resource of BandwidthPackageId is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.CommonBandwidthPackage',
                        'errorMessage' => 'The specified resource of CommonBandwidthPackage is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<AttachCommonBandwidthPackageToLoadBalancerResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</AttachCommonBandwidthPackageToLoadBalancerResponse>","errorExample":""}]',
            'title' => '实例绑定共享带宽包',
        ],
        'CreateSecurityPolicy' => [
            'summary' => '在指定地域创建TCPSSL监听的自定义安全策略。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'TlsVersions',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '支持的TLS协议版本，取值：**TLSv1.0**、**TLSv1.1**、**TLSv1.2**和**TLSv1.3**。',
                        'type' => 'array',
                        'items' => [
                            'description' => '支持的TLS协议版本，取值：**TLSv1.0**、**TLSv1.1**、**TLSv1.2**和**TLSv1.3**。最多支持添加4个TLS协议版本。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'TLSv1.0',
                        ],
                        'required' => true,
                        'maxItems' => 4,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'SecurityPolicyName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '安全策略名称。'."\n"
                            ."\n"
                            .'长度为1~200个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TLSCipherPolicy',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-atstuj3rtop****',
                    ],
                ],
                [
                    'name' => 'Ciphers',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '支持的加密套件列表，具体依赖TLSVersion值。最多支持添加32个加密套件。'."\n"
                            ."\n"
                            .'TLSv1.0和TLSv1.1 支持：'."\n"
                            .'- **ECDHE-ECDSA-AES128-SHA**'."\n"
                            .'- **ECDHE-ECDSA-AES256-SHA**'."\n"
                            .'- **ECDHE-RSA-AES128-SHA**'."\n"
                            .'- **ECDHE-RSA-AES256-SHA**'."\n"
                            .'- **AES128-SHA**'."\n"
                            .'- **AES256-SHA**'."\n"
                            .'- **DES-CBC3-SHA**'."\n"
                            ."\n"
                            .'TLSv1.2支持：'."\n"
                            .'-   **ECDHE-ECDSA-AES128-SHA**'."\n"
                            .'-   **ECDHE-ECDSA-AES256-SHA**'."\n"
                            .'-   **ECDHE-RSA-AES128-SHA**'."\n"
                            .'-   **ECDHE-RSA-AES256-SHA**'."\n"
                            .'-   **AES128-SHA**'."\n"
                            .'-   **AES256-SHA**'."\n"
                            .'-   **DES-CBC3-SHA**'."\n"
                            .'-   **ECDHE-ECDSA-AES128-GCM-SHA256**'."\n"
                            .'-   **ECDHE-ECDSA-AES256-GCM-SHA384**'."\n"
                            .'-   **ECDHE-ECDSA-AES128-SHA256**'."\n"
                            .'-   **ECDHE-ECDSA-AES256-SHA384**'."\n"
                            .'-   **ECDHE-RSA-AES128-GCM-SHA256**'."\n"
                            .'-   **ECDHE-RSA-AES256-GCM-SHA384**'."\n"
                            .'-   **ECDHE-RSA-AES128-SHA256**'."\n"
                            .'-   **ECDHE-RSA-AES256-SHA384**'."\n"
                            .'-   **AES128-GCM-SHA256**'."\n"
                            .'-   **AES256-GCM-SHA384**'."\n"
                            .'-   **AES128-SHA256**'."\n"
                            .'-   **AES256-SHA256**'."\n"
                            ."\n"
                            .'TLSv1.3支持：'."\n"
                            .'- **TLS_AES_128_GCM_SHA256**'."\n"
                            .'- **TLS_AES_256_GCM_SHA384**'."\n"
                            .'- **TLS_CHACHA20_POLY1305_SHA256**'."\n"
                            .'- **TLS_AES_128_CCM_SHA256**'."\n"
                            .'- **TLS_AES_128_CCM_8_SHA256**'."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '支持的加密套件列表，具体依赖TLSVersion值。最多支持添加32个加密套件。'."\n"
                                ."\n"
                                .'TLSv1.0和TLSv1.1 支持：'."\n"
                                .'- **ECDHE-ECDSA-AES128-SHA**'."\n"
                                .'- **ECDHE-ECDSA-AES256-SHA**'."\n"
                                .'- **ECDHE-RSA-AES128-SHA**'."\n"
                                .'- **ECDHE-RSA-AES256-SHA**'."\n"
                                .'- **AES128-SHA**'."\n"
                                .'- **AES256-SHA**'."\n"
                                .'- **DES-CBC3-SHA**'."\n"
                                ."\n"
                                .'TLSv1.2支持：'."\n"
                                .'-   **ECDHE-ECDSA-AES128-SHA**'."\n"
                                .'-   **ECDHE-ECDSA-AES256-SHA**'."\n"
                                .'-   **ECDHE-RSA-AES128-SHA**'."\n"
                                .'-   **ECDHE-RSA-AES256-SHA**'."\n"
                                .'-   **AES128-SHA**'."\n"
                                .'-   **AES256-SHA**'."\n"
                                .'-   **DES-CBC3-SHA**'."\n"
                                .'-   **ECDHE-ECDSA-AES128-GCM-SHA256**'."\n"
                                .'-   **ECDHE-ECDSA-AES256-GCM-SHA384**'."\n"
                                .'-   **ECDHE-ECDSA-AES128-SHA256**'."\n"
                                .'-   **ECDHE-ECDSA-AES256-SHA384**'."\n"
                                .'-   **ECDHE-RSA-AES128-GCM-SHA256**'."\n"
                                .'-   **ECDHE-RSA-AES256-GCM-SHA384**'."\n"
                                .'-   **ECDHE-RSA-AES128-SHA256**'."\n"
                                .'-   **ECDHE-RSA-AES256-SHA384**'."\n"
                                .'-   **AES128-GCM-SHA256**'."\n"
                                .'-   **AES256-GCM-SHA384**'."\n"
                                .'-   **AES128-SHA256**'."\n"
                                .'-   **AES256-SHA256**'."\n"
                                ."\n"
                                .'TLSv1.3支持：'."\n"
                                .'- **TLS_AES_128_GCM_SHA256**'."\n"
                                .'- **TLS_AES_256_GCM_SHA384**'."\n"
                                .'- **TLS_CHACHA20_POLY1305_SHA256**'."\n"
                                .'- **TLS_AES_128_CCM_SHA256**'."\n"
                                .'- **TLS_AES_128_CCM_8_SHA256**'."\n",
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ECDHE-ECDSA-AES128-SHA',
                        ],
                        'required' => true,
                        'maxItems' => 32,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会创建自定义安全策略。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'allowEmptyValue' => true,
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。最多支持64个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。支持字符包括字母、数字、下划线 (_)、点 (.)、冒号 (:)、斜线 (/)、等号 (=)、加号 (+)、减号 (-)、@符号 (@) 。'."\n"
                                        ."\n"
                                        .'一次调用最多支持添加20个标签。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'KeyTest',
                                ],
                                'Value' => [
                                    'description' => '标签值。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。支持字符包括字母、数字、下划线 (_)、点 (.)、冒号 (:)、斜线 (/)、等号 (=)、加号 (+)、减号 (-)、@符号 (@) 。'."\n"
                                        ."\n"
                                        .'一次调用最多支持添加20个标签。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ValueTest',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<CreateSecurityPolicyResponse>',
                        'description' => '创建自定义安全策略。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D7A8875F-373A-5F48-8484-25B07A61F2AF',
                            ],
                            'SecurityPolicyId' => [
                                'description' => 'TLS安全策略ID。',
                                'type' => 'string',
                                'example' => 'sp-wuytp9pa******',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalParam',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7A8875F-373A-5F48-8484-25B07A61F2AF\\",\\n  \\"SecurityPolicyId\\": \\"sp-wuytp9pa******\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateSecurityPolicyResponse>\\n    <RequestId>D7A8875F-373A-5F48-8484-25B07A61F2AF</RequestId>\\n    <SecurityPolicyId>tls-bp14bb1e7dll4f****</SecurityPolicyId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</CreateSecurityPolicyResponse>","errorExample":""}]',
            'title' => '创建自定义安全策略',
        ],
        'DeleteSecurityPolicy' => [
            'summary' => '删除网络型负载均衡TLS自定义安全策略。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'SecurityPolicyId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'TLS安全策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sp-wuytp9pa******'."\n",
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会删除自定义安全策略。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<DeleteSecurityPolicyResponse>',
                        'description' => '删除TLS自定义安全策略。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D7A8875F-373A-5F48-8484-25B07A61F2AF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ResourceInUse.SecurityPolicy',
                        'errorMessage' => 'The specified resource of SecurityPolicy is in use.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.securitypolicy',
                        'errorMessage' => 'The specified resource of securitypolicy is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7A8875F-373A-5F48-8484-25B07A61F2AF\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteSecurityPolicyResponse>\\n    <RequestId>D7A8875F-373A-5F48-8484-25B07A61F2AF</RequestId>\\n</DeleteSecurityPolicyResponse>","errorExample":""}]',
            'title' => '删除自定义安全策略',
        ],
        'UpdateSecurityPolicyAttribute' => [
            'summary' => '更新网络型负载均衡自定义安全策略属性。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'TlsVersions',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '支持的TLS协议版本，取值：**TLSv1.0**、**TLSv1.1**、**TLSv1.2**和**TLSv1.3**。最多支持添加4个TLS协议版本。',
                        'type' => 'array',
                        'items' => [
                            'description' => '支持的TLS协议版本，取值：**TLSv1.0**、**TLSv1.1**、**TLSv1.2**和**TLSv1.3**。最多支持添加4个TLS协议版本。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'TLSv1.0',
                        ],
                        'required' => false,
                        'maxItems' => 4,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'SecurityPolicyId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'TLS安全策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sp-wuytp9pa******'."\n",
                    ],
                ],
                [
                    'name' => 'SecurityPolicyName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '安全策略名称。'."\n"
                            ."\n"
                            .'长度为1~200个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TLSCipherPolicy',
                    ],
                ],
                [
                    'name' => 'Ciphers',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '支持的加密套件列表，具体依赖TLSVersion值。最多支持添加32个加密套件。'."\n"
                            ."\n"
                            .'TLSv1.0和TLSv1.1 支持：'."\n"
                            .'- **ECDHE-ECDSA-AES128-SHA**'."\n"
                            .'- **ECDHE-ECDSA-AES256-SHA**'."\n"
                            .'- **ECDHE-RSA-AES128-SHA**'."\n"
                            .'- **ECDHE-RSA-AES256-SHA**'."\n"
                            .'- **AES128-SHA**'."\n"
                            .'- **AES256-SHA**'."\n"
                            .'- **DES-CBC3-SHA**'."\n"
                            ."\n"
                            .'TLSv1.2支持：'."\n"
                            .'-   **ECDHE-ECDSA-AES128-SHA**'."\n"
                            .'-   **ECDHE-ECDSA-AES256-SHA**'."\n"
                            .'-   **ECDHE-RSA-AES128-SHA**'."\n"
                            .'-   **ECDHE-RSA-AES256-SHA**'."\n"
                            .'-   **AES128-SHA**'."\n"
                            .'-   **AES256-SHA**'."\n"
                            .'-   **DES-CBC3-SHA**'."\n"
                            .'-   **ECDHE-ECDSA-AES128-GCM-SHA256**'."\n"
                            .'-   **ECDHE-ECDSA-AES256-GCM-SHA384**'."\n"
                            .'-   **ECDHE-ECDSA-AES128-SHA256**'."\n"
                            .'-   **ECDHE-ECDSA-AES256-SHA384**'."\n"
                            .'-   **ECDHE-RSA-AES128-GCM-SHA256**'."\n"
                            .'-   **ECDHE-RSA-AES256-GCM-SHA384**'."\n"
                            .'-   **ECDHE-RSA-AES128-SHA256**'."\n"
                            .'-   **ECDHE-RSA-AES256-SHA384**'."\n"
                            .'-   **AES128-GCM-SHA256**'."\n"
                            .'-   **AES256-GCM-SHA384**'."\n"
                            .'-   **AES128-SHA256**'."\n"
                            .'-   **AES256-SHA256**'."\n"
                            ."\n"
                            .'TLSv1.3支持：'."\n"
                            .'- **TLS_AES_128_GCM_SHA256**'."\n"
                            .'- **TLS_AES_256_GCM_SHA384**'."\n"
                            .'- **TLS_CHACHA20_POLY1305_SHA256**'."\n"
                            .'- **TLS_AES_128_CCM_SHA256**'."\n"
                            .'- **TLS_AES_128_CCM_8_SHA256**'."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '支持的加密套件列表，具体依赖TLSVersion值。最多支持添加32个加密套件。'."\n"
                                ."\n"
                                .'TLSv1.0和TLSv1.1 支持：'."\n"
                                .'- **ECDHE-ECDSA-AES128-SHA**'."\n"
                                .'- **ECDHE-ECDSA-AES256-SHA**'."\n"
                                .'- **ECDHE-RSA-AES128-SHA**'."\n"
                                .'- **ECDHE-RSA-AES256-SHA**'."\n"
                                .'- **AES128-SHA**'."\n"
                                .'- **AES256-SHA**'."\n"
                                .'- **DES-CBC3-SHA**'."\n"
                                ."\n"
                                .'TLSv1.2支持：'."\n"
                                .'-   **ECDHE-ECDSA-AES128-SHA**'."\n"
                                .'-   **ECDHE-ECDSA-AES256-SHA**'."\n"
                                .'-   **ECDHE-RSA-AES128-SHA**'."\n"
                                .'-   **ECDHE-RSA-AES256-SHA**'."\n"
                                .'-   **AES128-SHA**'."\n"
                                .'-   **AES256-SHA**'."\n"
                                .'-   **DES-CBC3-SHA**'."\n"
                                .'-   **ECDHE-ECDSA-AES128-GCM-SHA256**'."\n"
                                .'-   **ECDHE-ECDSA-AES256-GCM-SHA384**'."\n"
                                .'-   **ECDHE-ECDSA-AES128-SHA256**'."\n"
                                .'-   **ECDHE-ECDSA-AES256-SHA384**'."\n"
                                .'-   **ECDHE-RSA-AES128-GCM-SHA256**'."\n"
                                .'-   **ECDHE-RSA-AES256-GCM-SHA384**'."\n"
                                .'-   **ECDHE-RSA-AES128-SHA256**'."\n"
                                .'-   **ECDHE-RSA-AES256-SHA384**'."\n"
                                .'-   **AES128-GCM-SHA256**'."\n"
                                .'-   **AES256-GCM-SHA384**'."\n"
                                .'-   **AES128-SHA256**'."\n"
                                .'-   **AES256-SHA256**'."\n"
                                ."\n"
                                .'TLSv1.3支持：'."\n"
                                .'- **TLS_AES_128_GCM_SHA256**'."\n"
                                .'- **TLS_AES_256_GCM_SHA384**'."\n"
                                .'- **TLS_CHACHA20_POLY1305_SHA256**'."\n"
                                .'- **TLS_AES_128_CCM_SHA256**'."\n"
                                .'- **TLS_AES_128_CCM_8_SHA256**'."\n",
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ECDHE-ECDSA-AES128-SHA',
                        ],
                        'required' => false,
                        'maxItems' => 32,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会更新自定义安全策略。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<UpdateSecurityPolicyAttributeResponse>',
                        'description' => '更新安全策略属性。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D7A8875F-373A-5F48-8484-25B07A61F2AF',
                            ],
                            'SecurityPolicyId' => [
                                'description' => 'TLS安全策略ID。',
                                'type' => 'string',
                                'example' => 'sp-wuytp9pa******'."\n",
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalParam.PreserveClientIpSwitch',
                        'errorMessage' => 'The param of PreserveClientIpSwitch is illegal.',
                    ],
                    [
                        'errorCode' => 'UpdateSecurityPolicyFailed',
                        'errorMessage' => 'The operation failed because of Security Policy is not changed.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.securitypolicy',
                        'errorMessage' => 'The specified resource of securitypolicy is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.serverGroup',
                        'errorMessage' => 'The specified resource of serverGroup is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7A8875F-373A-5F48-8484-25B07A61F2AF\\",\\n  \\"SecurityPolicyId\\": \\"sp-wuytp9pa******\\\\n\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateSecurityPolicyAttributeResponse>\\n    <RequestId>D7A8875F-373A-5F48-8484-25B07A61F2AF</RequestId>\\n    <SecurityPolicyId>tls-bp14bb1e7dll4f****</SecurityPolicyId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</UpdateSecurityPolicyAttributeResponse>","errorExample":""}]',
            'title' => '更新自定义安全策略属性',
        ],
        'ListSecurityPolicy' => [
            'summary' => '查询网络型负载均衡的TLS自定义安全策略。',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'SecurityPolicyIds',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '安全策略实例ID列表。最多支持添加20个安全策略实例。',
                        'type' => 'array',
                        'items' => [
                            'description' => '安全策略实例ID列表。最多支持添加20个安全策略实例。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'sp-wuytp9pa******'."\n",
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'SecurityPolicyNames',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '安全策略名称列表。最多支持添加20个安全策略实例。',
                        'type' => 'array',
                        'items' => [
                            'description' => '安全策略名称列表。最多支持添加20个安全策略实例。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'TLSCipherPolicy',
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。最多支持10个标签键。'."\n"
                                        ."\n"
                                        .'最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Test',
                                ],
                                'Value' => [
                                    'description' => '标签值。最多支持10个标签值。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Test',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-atstuj3rtop****',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                            .'- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<ListSecurityPolicyResponse>',
                        'description' => '查询TLS安全策略。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D7A8875F-373A-5F48-8484-25B07A61F2AF',
                            ],
                            'SecurityPolicies' => [
                                'description' => 'TLS安全策略列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'TLS安全策略列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'SecurityPolicyId' => [
                                            'title' => 'tls策略ID',
                                            'description' => 'TLS安全策略ID。',
                                            'type' => 'string',
                                            'example' => 'sp-wuytp9pa******'."\n",
                                        ],
                                        'SecurityPolicyName' => [
                                            'title' => '名称',
                                            'description' => 'TLS安全策略名称。',
                                            'type' => 'string',
                                            'example' => 'TLSCipherPolicy',
                                        ],
                                        'TlsVersion' => [
                                            'title' => 'tls版本',
                                            'description' => 'TLS协议版本，取值：**TLSv1.0**、**TLSv1.1**、**TLSv1.2**和**TLSv1.3**。',
                                            'type' => 'string',
                                            'example' => 'TLSv1.0',
                                        ],
                                        'Ciphers' => [
                                            'title' => '加密套件',
                                            'description' => '支持的加密套件列表，具体依赖TLSVersion值。最多支持添加32个加密套件。'."\n"
                                                ."\n"
                                                .'TLSv1.0和TLSv1.1 支持：'."\n"
                                                .'- **ECDHE-ECDSA-AES128-SHA**'."\n"
                                                .'- **ECDHE-ECDSA-AES256-SHA**'."\n"
                                                .'- **ECDHE-RSA-AES128-SHA**'."\n"
                                                .'- **ECDHE-RSA-AES256-SHA**'."\n"
                                                .'- **AES128-SHA**'."\n"
                                                .'- **AES256-SHA**'."\n"
                                                .'- **DES-CBC3-SHA**'."\n"
                                                ."\n"
                                                .'TLSv1.2支持：'."\n"
                                                .'-   **ECDHE-ECDSA-AES128-SHA**'."\n"
                                                .'-   **ECDHE-ECDSA-AES256-SHA**'."\n"
                                                .'-   **ECDHE-RSA-AES128-SHA**'."\n"
                                                .'-   **ECDHE-RSA-AES256-SHA**'."\n"
                                                .'-   **AES128-SHA**'."\n"
                                                .'-   **AES256-SHA**'."\n"
                                                .'-   **DES-CBC3-SHA**'."\n"
                                                .'-   **ECDHE-ECDSA-AES128-GCM-SHA256**'."\n"
                                                .'-   **ECDHE-ECDSA-AES256-GCM-SHA384**'."\n"
                                                .'-   **ECDHE-ECDSA-AES128-SHA256**'."\n"
                                                .'-   **ECDHE-ECDSA-AES256-SHA384**'."\n"
                                                .'-   **ECDHE-RSA-AES128-GCM-SHA256**'."\n"
                                                .'-   **ECDHE-RSA-AES256-GCM-SHA384**'."\n"
                                                .'-   **ECDHE-RSA-AES128-SHA256**'."\n"
                                                .'-   **ECDHE-RSA-AES256-SHA384**'."\n"
                                                .'-   **AES128-GCM-SHA256**'."\n"
                                                .'-   **AES256-GCM-SHA384**'."\n"
                                                .'-   **AES128-SHA256**'."\n"
                                                .'-   **AES256-SHA256**'."\n"
                                                ."\n"
                                                .'TLSv1.3支持：'."\n"
                                                .'- **TLS_AES_128_GCM_SHA256**'."\n"
                                                .'- **TLS_AES_256_GCM_SHA384**'."\n"
                                                .'- **TLS_CHACHA20_POLY1305_SHA256**'."\n"
                                                .'- **TLS_AES_128_CCM_SHA256**'."\n"
                                                .'- **TLS_AES_128_CCM_8_SHA256**'."\n",
                                            'type' => 'string',
                                            'example' => 'ECDHE-ECDSA-AES128-SHA',
                                        ],
                                        'RegionId' => [
                                            'title' => '业务location',
                                            'description' => '网络型负载均衡实例所在的地域ID。 ',
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
                                                        'description' => '标签键。最多支持10个标签键。'."\n"
                                                            ."\n"
                                                            .'最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                                        'type' => 'string',
                                                        'example' => 'Test',
                                                    ],
                                                    'Value' => [
                                                        'description' => '标签值。最多支持10个标签值。'."\n"
                                                            ."\n"
                                                            .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                                        'type' => 'string',
                                                        'example' => 'Test',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'RelatedListeners' => [
                                            'description' => '关联的监听列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '关联的监听列表。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'ListenerId' => [
                                                        'description' => '监听ID。',
                                                        'type' => 'string',
                                                        'example' => 'lsn-bp1bpn0kn908w4nbw****',
                                                    ],
                                                    'ListenerPort' => [
                                                        'description' => '监听端口。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '443',
                                                    ],
                                                    'ListenerProtocol' => [
                                                        'description' => '监听协议。仅取值**TCPSSL**。',
                                                        'type' => 'string',
                                                        'example' => 'TCPSSL',
                                                    ],
                                                    'LoadBalancerId' => [
                                                        'description' => '网络型负载均衡实例ID。',
                                                        'type' => 'string',
                                                        'example' => 'nlb-83ckzc8d4xlp8o****',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-atstuj3rtop****',
                                        ],
                                        'SecurityPolicyStatus' => [
                                            'description' => 'TLS安全策略的状态，取值：'."\n"
                                                ."\n"
                                                .'- **Configuring** ：配置中。'."\n"
                                                .'- **Available**： 正常可用。',
                                            'type' => 'string',
                                            'example' => 'Available',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '列表条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                                    .'- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
                                'type' => 'string',
                                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                            ],
                            'MaxResults' => [
                                'description' => '分批次查询时每次显示的条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7A8875F-373A-5F48-8484-25B07A61F2AF\\",\\n  \\"SecurityPolicies\\": [\\n    {\\n      \\"SecurityPolicyId\\": \\"sp-wuytp9pa******\\\\n\\",\\n      \\"SecurityPolicyName\\": \\"TLSCipherPolicy\\",\\n      \\"TlsVersion\\": \\"TLSv1.0\\",\\n      \\"Ciphers\\": \\"ECDHE-ECDSA-AES128-SHA\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"Test\\",\\n          \\"Value\\": \\"Test\\"\\n        }\\n      ],\\n      \\"RelatedListeners\\": [\\n        {\\n          \\"ListenerId\\": \\"lsn-bp1bpn0kn908w4nbw****\\",\\n          \\"ListenerPort\\": 443,\\n          \\"ListenerProtocol\\": \\"TCPSSL\\",\\n          \\"LoadBalancerId\\": \\"nlb-83ckzc8d4xlp8o****\\"\\n        }\\n      ],\\n      \\"ResourceGroupId\\": \\"rg-atstuj3rtop****\\",\\n      \\"SecurityPolicyStatus\\": \\"Available\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20\\n}","errorExample":""},{"type":"xml","example":"<ListSecurityPolicyResponse>\\n    <RequestId>D7A8875F-373A-5F48-8484-25B07A61F2AF</RequestId>\\n    <SecurityPolicies>\\n        <SecurityPolicyId>tls-bp14bb1e7dll4f****</SecurityPolicyId>\\n        <SecurityPolicyName>TLSCipherPolicy</SecurityPolicyName>\\n        <TlsVersion>TLSv1.0</TlsVersion>\\n        <Ciphers>ECDHE-ECDSA-AES128-SHA</Ciphers>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <Tags>\\n            <Key>Test</Key>\\n            <Value>Test</Value>\\n        </Tags>\\n        <RelatedListeners>\\n            <ListenerId>lsn-bp1bpn0kn908w4nbw****</ListenerId>\\n            <ListenerPort>443</ListenerPort>\\n            <ListenerProtocol>TCPSSL</ListenerProtocol>\\n            <LoadBalancerId>nlb-83ckzc8d4xlp8o****</LoadBalancerId>\\n        </RelatedListeners>\\n        <ResourceGroupId>rg-atstuj3rtop****</ResourceGroupId>\\n        <SecurityPolicyStatus>Available</SecurityPolicyStatus>\\n    </SecurityPolicies>\\n    <TotalCount>10</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n</ListSecurityPolicyResponse>","errorExample":""}]',
            'title' => '查询自定义安全策略',
        ],
        'ListSystemSecurityPolicy' => [
            'summary' => '查询系统默认的TLS安全策略。',
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
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络型负载均衡实例所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<ListSystemSecurityPolicyResponse>',
                        'description' => '查询系统默认的TLS安全策略。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5C057647-284B-5C67-A07E-4B8F3DABA9F9',
                            ],
                            'SecurityPolicies' => [
                                'description' => 'TLS安全策略列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '安全策略。',
                                    'type' => 'object',
                                    'properties' => [
                                        'SecurityPolicyId' => [
                                            'title' => 'tls策略ID',
                                            'description' => 'TLS策略ID。',
                                            'type' => 'string',
                                            'example' => 'tls_cipher_policy_1_0',
                                        ],
                                        'SecurityPolicyName' => [
                                            'title' => '名称',
                                            'description' => 'TLS安全策略名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'TlsVersion' => [
                                            'title' => 'tls版本',
                                            'description' => 'TLS版本。',
                                            'type' => 'string',
                                            'example' => 'TLSv1.0,TLSv1.1,TLSv1.2',
                                        ],
                                        'Ciphers' => [
                                            'title' => '加密套件',
                                            'description' => '加密套件。',
                                            'type' => 'string',
                                            'example' => 'ECDHE-ECDSA-AES128-GCM-SHA256,ECDHE-ECDSA-AES256-GCM-SHA384,ECDHE-ECDSA-AES128-SHA256,ECDHE-ECDSA-AES256-SHA384,ECDHE-RSA-AES128-GCM-SHA256,ECDHE-RSA-AES256-GCM-SHA384,ECDHE-RSA-AES128-SHA256,ECDHE-RSA-AES256-SHA384,AES128-GCM-SHA256,AES256-GCM-SHA384,AES128-SHA256,AES256-SHA256,ECDHE-ECDSA-AES128-SHA,ECDHE-ECDSA-AES256-SHA,ECDHE-RSA-AES128-SHA,ECDHE-RSA-AES256-SHA,AES128-SHA,AES256-SHA,DES-CBC3-SHA',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5C057647-284B-5C67-A07E-4B8F3DABA9F9\\",\\n  \\"SecurityPolicies\\": [\\n    {\\n      \\"SecurityPolicyId\\": \\"tls_cipher_policy_1_0\\",\\n      \\"SecurityPolicyName\\": \\"test\\",\\n      \\"TlsVersion\\": \\"TLSv1.0,TLSv1.1,TLSv1.2\\",\\n      \\"Ciphers\\": \\"ECDHE-ECDSA-AES128-GCM-SHA256,ECDHE-ECDSA-AES256-GCM-SHA384,ECDHE-ECDSA-AES128-SHA256,ECDHE-ECDSA-AES256-SHA384,ECDHE-RSA-AES128-GCM-SHA256,ECDHE-RSA-AES256-GCM-SHA384,ECDHE-RSA-AES128-SHA256,ECDHE-RSA-AES256-SHA384,AES128-GCM-SHA256,AES256-GCM-SHA384,AES128-SHA256,AES256-SHA256,ECDHE-ECDSA-AES128-SHA,ECDHE-ECDSA-AES256-SHA,ECDHE-RSA-AES128-SHA,ECDHE-RSA-AES256-SHA,AES128-SHA,AES256-SHA,DES-CBC3-SHA\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询系统安全策略',
        ],
        'MoveResourceGroup' => [
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
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'NewResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '新资源组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rg-aekzjcnrv3v****',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源类型，取值：'."\n"
                            ."\n"
                            .'- **loadbalancer**：网络型负载均衡实例。'."\n"
                            .'- **securitypolicy**：安全策略。'."\n"
                            .'- **servergroup**：服务器组。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'loadbalancer',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nlb-nrnrxwd15en27r****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源所在的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<MoveResourceGroupResponse>',
                        'description' => 'RpcResponse<MoveResourceGroupResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
                            ],
                            'Success' => [
                                'description' => '接口请求结果，取值：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。'."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'ResourceId' => [
                                        'description' => '资源ID。',
                                        'type' => 'string',
                                        'example' => 'nlb-nrnrxwd15en27r****',
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
                        'errorCode' => 'IllegalParam.resourceType',
                        'errorMessage' => 'The param of resourceType is illegal.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.StatusCheckFail.ResourceGroup',
                        'errorMessage' => 'The operation failed because of StatusCheckFail.ResourceGroup.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.ResourceGroup',
                        'errorMessage' => 'The param of resourceGroup not existed.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"ResourceId\\": \\"nlb-nrnrxwd15en27r****\\"\\n  }\\n}","type":"json"}]',
            'title' => '变更资源所属的资源组',
            'summary' => '修改云资源所属的资源组。',
        ],
        'GetJobStatus' => [
            'summary' => '查询网络型负载均衡的异步任务执行结果信息。',
            'methods' => [
                'get',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'add 必选',
                        'description' => '异步任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<GetJodResponse>',
                        'description' => '查询异步任务结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
                            ],
                            'Status' => [
                                'description' => '任务状态。取值：'."\n"
                                    ."\n"
                                    .'- **Succeeded**：成功。'."\n"
                                    .'- **Processing**：执行中。',
                                'type' => 'string',
                                'example' => 'Succeeded',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.JobId',
                        'errorMessage' => 'The specified resource of JobId is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\",\\n  \\"Status\\": \\"Succeeded\\"\\n}","errorExample":""},{"type":"xml","example":"<GetJobStatusResponse>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <Status>Succeeded</Status>\\n</GetJobStatusResponse>","errorExample":""}]',
            'title' => '查询异步任务结果',
        ],
        'TagResources' => [
            'summary' => '为指定的资源列表统一创建并绑定标签。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceId',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '资源ID。一次调用最多支持添加50个资源ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID。一次调用最多支持添加50个资源ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'nlb-nrnrxwd15en27r****',
                        ],
                        'required' => true,
                        'maxItems' => 50,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。最多支持64个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。支持字符包括字母、数字、下划线 (_)、点 (.)、冒号 (:)、斜线 (/)、等号 (=)、加号 (+)、减号 (-)、@符号 (@) 。'."\n"
                                        ."\n"
                                        .'一次调用最多支持添加20个标签。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'env',
                                ],
                                'Value' => [
                                    'description' => '标签值。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。支持字符包括字母、数字、下划线 (_)、点 (.)、冒号 (:)、斜线 (/)、等号 (=)、加号 (+)、减号 (-)、@符号 (@) 。'."\n"
                                        ."\n"
                                        .'一次调用最多支持添加20个标签。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'product',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 20,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源类型，取值：'."\n"
                            ."\n"
                            .'- **loadbalancer**：网络型负载均衡实例。'."\n"
                            .'- **securitypolicy**：安全策略。'."\n"
                            .'- **servergroup**：服务器组。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'loadbalancer',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会为资源创建并绑定标签。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源所在的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<BaseResult>',
                        'description' => '绑定标签。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalParam',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The parameter of %s is missing.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.securitypolicy',
                        'errorMessage' => 'The specified resource of securitypolicy is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</TagResourcesResponse>","errorExample":""}]',
            'title' => '给资源添加标签',
        ],
        'UntagResources' => [
            'summary' => '为指定的资源列表统一解绑标签。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceId',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '资源ID。一次调用最多支持添加50个资源ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID。一次调用最多支持添加50个资源ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'nlb-nrnrxwd15en27r****',
                        ],
                        'required' => true,
                        'maxItems' => 50,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '要删除标签的标签键。一次调用最多支持删除20个标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要删除标签的标签键。一次调用最多支持删除20个标签。'."\n"
                                ."\n"
                                .'> 如果不指定**TagKey**，会删除掉这个实例上所有的标签。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'env',
                        ],
                        'required' => false,
                        'maxItems' => 20,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否解绑资源的所有标签。取值：'."\n"
                            ."\n"
                            .'- **true**：解绑资源的所有标签。'."\n"
                            .'- **false**（默认值）：不解绑资源的所有标签。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源类型。取值：'."\n"
                            ."\n"
                            .'- **loadbalancer**：网络型负载均衡实例。'."\n"
                            .'- **securitypolicy**：安全策略。'."\n"
                            .'- **servergroup**：服务器组。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'loadbalancer',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会为资源解绑标签。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源所在的地域ID。 '."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'RpcResponse<BaseResult>',
                        'description' => '解绑标签。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
                            ],
                            'JobId' => [
                                'description' => '异步任务ID。',
                                'type' => 'string',
                                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalParam',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</UntagResourcesResponse>","errorExample":""}]',
            'title' => '删除资源的标签',
        ],
        'ListTagResources' => [
            'summary' => '查询指定资源标签。',
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
                    'name' => 'ResourceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源类型。取值：'."\n"
                            ."\n"
                            .'- **loadbalancer**：网络型负载均衡实例。'."\n"
                            .'- **securitypolicy**：安全策略。'."\n"
                            .'- **servergroup**：服务器组。'."\n"
                            .'- **listener**：监听。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'loadbalancer',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '资源ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'nlb-nrnrxwd15en27r****',
                        ],
                        'required' => false,
                        'maxItems' => 50,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'env',
                                ],
                                'Value' => [
                                    'description' => '标签值。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'product',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                            .'- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**50**，默认值为**50**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<ListTagResourcesResponse>',
                        'description' => '查询资源标签。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
                            ],
                            'TagResources' => [
                                'description' => '由资源及其标签组成的集合，包含了资源ID、资源类型和标签键值等信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '由资源及其标签组成的集合，包含了资源ID、资源类型和标签键值等信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ResourceId' => [
                                            'description' => '资源ID。',
                                            'type' => 'string',
                                            'example' => 'nlb-nrnrxwd15en27r****',
                                        ],
                                        'ResourceType' => [
                                            'description' => '资源类型，取值：'."\n"
                                                ."\n"
                                                .'- **loadbalancer**：网络型负载均衡实例。'."\n"
                                                .'- **securitypolicy**：安全策略。'."\n"
                                                .'- **servergroup**：服务器组。',
                                            'type' => 'string',
                                            'example' => 'loadbalancer',
                                        ],
                                        'RegionNo' => [
                                            'description' => '地域信息。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'AliUid' => [
                                            'description' => '用户UID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1429****39299349',
                                        ],
                                        'TagKey' => [
                                            'description' => '标签键。',
                                            'type' => 'string',
                                            'example' => 'env',
                                        ],
                                        'TagValue' => [
                                            'description' => '标签值。',
                                            'type' => 'string',
                                            'example' => 'product',
                                        ],
                                        'Scope' => [
                                            'description' => '标签可见范围。',
                                            'type' => 'string',
                                            'example' => 'public',
                                        ],
                                        'Category' => [
                                            'description' => '标签类型。取值：'."\n"
                                                ."\n"
                                                .'- **Custom**：自定义标签。'."\n"
                                                .'- **System**：系统标签。'."\n"
                                                .'- **All**：全部标签。'."\n",
                                            'type' => 'string',
                                            'example' => 'All',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '列表条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    .'- 如果**NextToken**为空表示没有下一次查询。'."\n"
                                    .'- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                                'type' => 'string',
                                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                            ],
                            'MaxResults' => [
                                'description' => '分批次查询时每次显示的条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'System is busy, please try again later.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.resourceType',
                        'errorMessage' => 'The param of resourceType is illegal.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The parameter of %s is missing.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'Authentication is failed for NoPermission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound.securitypolicy',
                        'errorMessage' => 'The specified resource of securitypolicy is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.loadBalancer',
                        'errorMessage' => 'The specified resource of loadbalancer is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.listener',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.serverGroup',
                        'errorMessage' => 'The specified resource of serverGroup is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceId\\": \\"nlb-nrnrxwd15en27r****\\",\\n      \\"ResourceType\\": \\"loadbalancer\\",\\n      \\"RegionNo\\": \\"cn-hangzhou\\",\\n      \\"AliUid\\": 0,\\n      \\"TagKey\\": \\"env\\",\\n      \\"TagValue\\": \\"product\\",\\n      \\"Scope\\": \\"public\\",\\n      \\"Category\\": \\"All\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20\\n}","type":"json"}]',
            'title' => '查询资源标签',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'nlb.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'nlb.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'nlb.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-jva',
            'endpoint' => 'nlb.cn-zhengzhou-jva.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'nlb.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'nlb.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'nlb.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-nanjing',
            'endpoint' => 'nlb.cn-nanjing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'nlb.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'nlb.cn-heyuan.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'nlb.cn-guangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'nlb.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'nlb.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'nlb.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'nlb.ap-northeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'nlb.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'nlb.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'nlb.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'endpoint' => 'nlb.ap-southeast-6.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'nlb.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'nlb.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'nlb.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'nlb.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'nlb.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'nlb.cn-shanghai-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'nlb.cn-shenzhen-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'nlb.ap-southeast-7.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'nlb.cn-beijing-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-central-1',
            'endpoint' => 'nlb.me-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan-lr',
            'endpoint' => 'nlb.cn-wuhan-lr.aliyuncs.com',
        ],
    ],
];
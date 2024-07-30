<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Eipanycast',
        'version' => '2020-03-09',
    ],
    'directories' => [
        [
            'id' => 62809,
            'title' => '任播弹性公网IP',
            'type' => 'directory',
            'children' => [
                'AllocateAnycastEipAddress',
                'AssociateAnycastEipAddress',
                'UnassociateAnycastEipAddress',
                'ReleaseAnycastEipAddress',
                'ModifyAnycastEipAddressSpec',
                'ModifyAnycastEipAddressAttribute',
                'UpdateAnycastEipAddressAssociations',
                'DescribeAnycastEipAddress',
                'DescribeAnycastPopLocations',
                'ListAnycastEipAddresses',
                'DescribeAnycastServerRegions',
            ],
        ],
        [
            'id' => 183366,
            'title' => '标签',
            'type' => 'directory',
            'children' => [
                'TagResources',
                'ListTagResources',
                'UntagResources',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'AllocateAnycastEipAddress' => [
            'summary' => '调用AllocateAnycastEipAddress接口创建Anycast EIP实例。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Bandwidth',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例的带宽峰值。单位：Mbps。'."\n"
                            ."\n"
                            .'取值范围：**200**~**1000**。'."\n"
                            ."\n"
                            .'默认值：**1000**。'."\n"
                            ."\n"
                            .'>带宽峰值不作为业务承诺指标，仅作为参考值和带宽上限峰值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '200',
                        'default' => '1000',
                    ],
                ],
                [
                    'name' => 'ServiceLocation',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例接入区域。'."\n"
                            ."\n"
                            .'取值：**international**，指中国内地以外的区域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'international',
                    ],
                ],
                [
                    'name' => 'InstanceChargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例付费类型。'."\n"
                            ."\n"
                            .'取值：**PostPaid**，指后付费。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PostPaid',
                    ],
                ],
                [
                    'name' => 'InternetChargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例访问公网计费方式。'."\n"
                            ."\n"
                            .'取值：**PayByTraffic**，指按流量计费。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PayByTraffic',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-001****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例名称。'."\n"
                            ."\n"
                            .'长度为0~128个字符，以大小字母或中文开头，可包含数字，下划线（_）或短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'doctest',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例描述。'."\n"
                            ."\n"
                            .'长度为0~256个字符，不能以`http://`或`https://`开头。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'docdesc',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属的资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm3obzjuk****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FBDB18D8-E91E-4978-8D6C-6E2E3EE10133',
                            ],
                            'AnycastId' => [
                                'description' => 'Anycast EIP实例ID。',
                                'type' => 'string',
                                'example' => 'aeip-bp1ix34fralt4ykf3****',
                            ],
                            'OrderId' => [
                                'description' => '订单ID。',
                                'type' => 'string',
                                'example' => '1422000****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FBDB18D8-E91E-4978-8D6C-6E2E3EE10133\\",\\n  \\"AnycastId\\": \\"aeip-bp1ix34fralt4ykf3****\\",\\n  \\"OrderId\\": \\"1422000****\\"\\n}","errorExample":""},{"type":"xml","example":"<AllocateAnycastEipAddressResponse>\\n    <RequestId>FBDB18D8-E91E-4978-8D6C-6E2E3EE10133</RequestId>\\n    <AnycastId>aeip-bp1ix34fralt4ykf3****</AnycastId>\\n    <OrderId>1422000****</OrderId>\\n</AllocateAnycastEipAddressResponse>","errorExample":""}]',
            'title' => '创建实例',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AssociateAnycastEipAddress' => [
            'summary' => '调用AssociateAnycastEipAddress接口将Anycast EIP绑定到指定的后端云资源实例上。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'BindInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要绑定的云资源实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lb-d7oxbixhxv1uupnon****',
                    ],
                ],
                [
                    'name' => 'BindInstanceRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要绑定的云资源实例地域ID。'."\n"
                            ."\n"
                            .'仅支持绑定部分地域的云资源实例，您可以通过调用[DescribeAnycastServerRegions](~~171939~~)接口获取可绑定云资源实例的地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'us-west-1',
                    ],
                ],
                [
                    'name' => 'BindInstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要绑定的云资源实例类型。取值：'."\n"
                            .'- **SlbInstance**：专有网络类型的CLB实例。'."\n"
                            .'- **NetworkInterface**：弹性网卡。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SlbInstance',
                    ],
                ],
                [
                    'name' => 'AnycastId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aeip-bp1ix34fralt4ykf3****',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会绑定实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'PopLocations',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '绑定时关联的pop location，如果是绑定的第一个实例，该参数会忽略，会下发到全部pop点',
                        'description' => '绑定云资源实例时，关联的接入区域的接入点信息。'."\n"
                            ."\n"
                            .'如果您是第一次绑定，该参数无需配置，系统自动关联所有接入区域。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeAnycastPopLocations](~~171938~~)接口获取支持的接入区域的接入点信息。'."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '绑定云资源实例时，关联的接入区域的接入点信息。'."\n"
                                ."\n"
                                .'如果您是第一次绑定，该参数无需配置，系统自动关联所有接入区域。'."\n"
                                ."\n"
                                .'您可以通过调用[DescribeAnycastPopLocations](~~171938~~)接口获取支持的接入区域的接入点信息。'."\n",
                            'type' => 'object',
                            'properties' => [
                                'PopLocation' => [
                                    'title' => 'pop location',
                                    'description' => '绑定云资源实例时，关联的接入区域的接入点信息。'."\n"
                                        ."\n"
                                        .'如果您是第一次绑定，该参数无需配置，系统自动关联所有接入区域。'."\n"
                                        ."\n"
                                        .'您可以通过调用[DescribeAnycastPopLocations](~~171938~~)接口获取支持的接入区域的接入点信息。'."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'us-west-1-pop',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AssociationMode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '关联模式，默认模式、普通模式Default/Normal',
                        'description' => '绑定模式，取值：'."\n"
                            ."\n"
                            .'- **Default**：默认模式，将要绑定的云资源实例设置为默认源站。'."\n"
                            ."\n"
                            .'- **Normal**：普通模式，要绑定的云资源实例设置为普通源站。'."\n"
                            ."\n"
                            .'>  Anycast EIP支持绑定多个地域的云资源实例，仅支持一个云资源实例为默认源站，其余均为普通源站。当不指定接入点或新增接入点时，访问请求默认转发至默认源站。<br/><ul><li>如果您是第一次绑定，绑定模式默认取值为**Default**。</li><li>如果您不是第一次绑定，您可以将绑定模式设置为**Default**，将生效新的默认源站，原默认源站将变更为普通源站。</li></ul>'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Default',
                    ],
                ],
                [
                    'name' => 'PrivateIpAddress',
                    'in' => 'query',
                    'schema' => [
                        'title' => '私网ip地址',
                        'description' => '要绑定的弹性网卡的辅助私网IP。'."\n"
                            ."\n"
                            .'只有当**BindInstanceType**取值为**NetworkInterface**时，该参数生效。不输入时，该参数默认为弹性网卡的主私网IP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.XX.XX',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FBDB18D8-E91E-4978-8D6C-6E2E3EE10133',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'asynchronous',
                'callback' => 'Eipanycast::2020-03-09::ListAnycastEipAddresses',
                'callbackInterval' => 3000,
                'maxCallbackTimes' => 10,
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FBDB18D8-E91E-4978-8D6C-6E2E3EE10133\\"\\n}","errorExample":""},{"type":"xml","example":"<AssociateAnycastEipAddressResponse>\\r\\n<RequestId>FBDB18D8-E91E-4978-8D6C-6E2E3EE10133</RequestId>\\r\\n</AssociateAnycastEipAddressResponse>","errorExample":""}]',
            'title' => '绑定后端云资源实例',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UnassociateAnycastEipAddress' => [
            'summary' => '调用UnassociateAnycastEipAddress接口来解除Anycast EIP与其绑定的后端云资源实例的关联。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'BindInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要解绑的云资源实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lb-2zebb08phyczzawe****',
                    ],
                ],
                [
                    'name' => 'BindInstanceRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要解绑的云资源实例地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'us-west-1',
                    ],
                ],
                [
                    'name' => 'BindInstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要解绑的云资源实例类型。取值：'."\n"
                            ."\n"
                            .'- **SlbInstance**：专有网络类型的CLB实例。'."\n"
                            .'- **NetworkInterface**：弹性网卡。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SlbInstance',
                    ],
                ],
                [
                    'name' => 'AnycastId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aeip-2zeerraiwb7ujsxdc****',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-001****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会解绑后端实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'PrivateIpAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要解绑的弹性网卡的辅助私网IP。'."\n"
                            ."\n\n"
                            .'只有当**BindInstanceType**取值为**NetworkInterface**时，该参数生效。不输入时，该参数默认为弹性网卡的主私网IP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.XX.XX',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '私网IP地址',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FBDB18D8-E91E-4978-8D6C-6E2E3EE10133',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'asynchronous',
                'callback' => 'Eipanycast::2020-03-09::ListAnycastEipAddresses',
                'callbackInterval' => 3000,
                'maxCallbackTimes' => 10,
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FBDB18D8-E91E-4978-8D6C-6E2E3EE10133\\"\\n}","errorExample":""},{"type":"xml","example":"<UnassociateAnycastEipAddressResponse>\\n    <RequestId>FBDB18D8-E91E-4978-8D6C-6E2E3EE10133</RequestId>\\n</UnassociateAnycastEipAddressResponse>","errorExample":""}]',
            'title' => '解绑后端云资源实例',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ReleaseAnycastEipAddress' => [
            'summary' => '调用ReleaseAnycastEipAddress接口释放指定Anycast EIP实例。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AnycastId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要释放的Anycast EIP实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aeip-bp1ix34fralt4ykf3****',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId不一样。'."\n"
                            .'>',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-001****',
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
                                'example' => 'FBDB18D8-E91E-4978-8D6C-6E2E3EE10133',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                503 => [
                    [
                        'errorCode' => 'SystemBusy',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'asynchronous',
                'callback' => 'Eipanycast::2020-03-09::ListAnycastEipAddresses',
                'callbackInterval' => 3000,
                'maxCallbackTimes' => 10,
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FBDB18D8-E91E-4978-8D6C-6E2E3EE10133\\"\\n}","type":"json"}]',
            'title' => '释放实例',
        ],
        'ModifyAnycastEipAddressSpec' => [
            'summary' => '调用ModifyAnycastEipAddressSpec接口修改Anycast EIP实例带宽值。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Bandwidth',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例的带宽峰值。单位：Mbps。'."\n"
                            ."\n"
                            .'取值范围：**200**~**1000**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '200',
                    ],
                ],
                [
                    'name' => 'AnycastId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aeip-bp1ix34fralt4ykf3****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FBDB18D8-E91E-4978-8D6C-6E2E3EE10133',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'asynchronous',
                'callback' => 'Eipanycast::2020-03-09::ListAnycastEipAddresses',
                'callbackInterval' => 3000,
                'maxCallbackTimes' => 10,
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FBDB18D8-E91E-4978-8D6C-6E2E3EE10133\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAnycastEipAddressSpecResponse>\\n    <RequestId>FBDB18D8-E91E-4978-8D6C-6E2E3EE10133</RequestId>\\n</ModifyAnycastEipAddressSpecResponse>","errorExample":""}]',
            'title' => '修改实例带宽值',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyAnycastEipAddressAttribute' => [
            'summary' => '调用ModifyAnycastEipAddressAttribute接口修改Anycast EIP实例的名称和描述。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AnycastId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aeip-bp1ix34fralt4ykf3****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例名称。'."\n"
                            ."\n"
                            .'长度为0~128个字符，以大小字母或中文开头，可包含数字，下划线（_）或短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'docname',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例描述。'."\n"
                            ."\n"
                            .'长度为0~256个字符，不能以`http://`或`https://`开头。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'docdesc',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数列表。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FBDB18D8-E91E-4978-8D6C-6E2E3EE10133',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FBDB18D8-E91E-4978-8D6C-6E2E3EE10133\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAnycastEipAddressAttributeResponse>\\n    <RequestId>FBDB18D8-E91E-4978-8D6C-6E2E3EE10133</RequestId>\\n</ModifyAnycastEipAddressAttributeResponse>","errorExample":""}]',
            'title' => '修改实例属性',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateAnycastEipAddressAssociations' => [
            'summary' => '当Anycast EIP实例绑定了多个地域源站的后端资源时，支持修改接入点与源站的映射关系。您可以通过调用UpdateAnycastEipAddressAssociations接口增加或删除指定源站（绑定的云资源实例）的接入点来修改接入点与源站的映射关系。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'BindInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要绑定的云资源实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lb-d7oxbixhxv1uupnon****',
                    ],
                ],
                [
                    'name' => 'AnycastId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aeip-bp1ix34fralt4ykf3****',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-001****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会更新绑定关系。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'PopLocationAddList',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '新增关联的pop location',
                        'description' => '需要新增的关联接入区域和接入点列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '需要新增的关联接入区域和接入点列表。',
                            'type' => 'object',
                            'properties' => [
                                'PopLocation' => [
                                    'title' => 'pop location',
                                    'description' => '需要新增的关联接入区域的接入点。'."\n"
                                        ."\n"
                                        .'您可以通过调用[DescribeAnycastPopLocations](~~171938~~)接口获取支持的接入区域的接入点信息。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'us-west-1-pop',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PopLocationDeleteList',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '待删除的关联pop location',
                        'description' => '待删除的关联接入区域和接入点列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '待删除的关联接入区域的接入点列表。'."\n"
                                ."\n"
                                .'> 当该接入区域的接入点关联的云资源实例为默认源站时，无法删除该接入区域的接入点。',
                            'type' => 'object',
                            'properties' => [
                                'PopLocation' => [
                                    'title' => 'pop location',
                                    'description' => '待删除的关联接入区域的接入点列表。'."\n"
                                        ."\n"
                                        .'> 当该接入区域的接入点关联的云资源实例为默认源站时，无法删除该接入区域的接入点。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'eu-west-1-pop',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AssociationMode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '关联模式，默认模式、普通模式Default/Normal',
                        'description' => '绑定模式，取值：'."\n"
                            ."\n"
                            .'- **Default**：默认模式，将要绑定的云资源实例设置为默认源站。'."\n"
                            ."\n"
                            .'- **Normal**：普通模式，要绑定的云资源实例设置为普通源站。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Default',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4EC47282-1B74-4534-BD0E-403F3EE64CAF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationFailed.SetNormalAssociationMode',
                        'errorMessage' => 'The only associated instance must be default mode. ',
                    ],
                    [
                        'errorCode' => 'OperationFailed.DeletedPopLocation',
                        'errorMessage' => 'The operation is failed because of  added Pop Location is invalid.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.AddPopLocation',
                        'errorMessage' => 'The operation is failed because of added Pop Location is invalid.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.BindInstanceId',
                        'errorMessage' => 'The specified resource BindInstanceId is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.AnycastId',
                        'errorMessage' => 'The specified resource AnycastId is not found.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.Anycast',
                        'errorMessage' => 'The status of the Anycast instance is invalid.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'asynchronous',
                'callback' => 'Eipanycast::2020-03-09::ListAnycastEipAddresses',
                'callbackInterval' => 3000,
                'maxCallbackTimes' => 10,
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4EC47282-1B74-4534-BD0E-403F3EE64CAF\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateAnycastEipAddressAssociationsResponse>\\n    <RequestId>4EC47282-1B74-4534-BD0E-403F3EE64CAF</RequestId>\\n</UpdateAnycastEipAddressAssociationsResponse>","errorExample":""}]',
            'title' => '更新实例绑定信息',
        ],
        'DescribeAnycastEipAddress' => [
            'summary' => '调用DescribeAnycastEipAddress接口查询指定Anycast EIP实例的具体信息，包括实例状态、带宽峰值和已绑定资源的信息等。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例IP地址。'."\n"
                            ."\n"
                            .'> 您必须输入参数**Ip**和参数**AnycastId**中的任意一个。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '139.95.XX.XX',
                    ],
                ],
                [
                    'name' => 'AnycastId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例ID。'."\n"
                            ."\n"
                            .'> 您必须输入参数**Ip**和参数**AnycastId**中的任意一个。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aeip-bp1ix34fralt4ykf3****',
                    ],
                ],
                [
                    'name' => 'BindInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP绑定的云资源实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'lb-2zebb08phyczzawe****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => 'IP状态。'."\n"
                                    ."\n"
                                    .'- **Associating**：绑定中。'."\n"
                                    .'- **Unassociating**：解绑中。'."\n"
                                    .'- **Allocated**：已分配。'."\n"
                                    .'- **Associated**：已绑定。'."\n"
                                    .'- **Modifying**：修改中。'."\n"
                                    .'- **Releasing**：释放中。'."\n"
                                    .'- **Released**：已释放。',
                                'type' => 'string',
                                'example' => 'Associated',
                            ],
                            'Description' => [
                                'description' => 'Anycast EIP实例描述。',
                                'type' => 'string',
                                'example' => 'doctest',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4EC47282-1B74-4534-BD0E-403F3EE64CAF',
                            ],
                            'InstanceChargeType' => [
                                'description' => 'Anycast EIP实例的付费模式。'."\n"
                                    ."\n"
                                    .'取值：**PostPaid**，表示后付费模式。',
                                'type' => 'string',
                                'example' => 'PostPaid',
                            ],
                            'CreateTime' => [
                                'description' => 'Anycast EIP实例创建时间。'."\n"
                                    ."\n"
                                    .'时间按照ISO8601标准表示，并使用UTC时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。',
                                'type' => 'string',
                                'example' => '2021-04-23T01:37:38Z',
                            ],
                            'AnycastEipBindInfoList' => [
                                'description' => 'Anycast EIP实例绑定云资源信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'Anycast EIP实例绑定云资源信息列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'BindInstanceType' => [
                                            'description' => '绑定的云资源实例类型。取值：'."\n"
                                                ."\n"
                                                .'- **SlbInstance**：专有网络类型的CLB实例。'."\n"
                                                .'- **NetworkInterface**：弹性网卡。',
                                            'type' => 'string',
                                            'example' => 'SlbInstance',
                                        ],
                                        'BindTime' => [
                                            'description' => '绑定时间。'."\n"
                                                ."\n"
                                                .'时间按照ISO8601标准表示，并使用UTC时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。',
                                            'type' => 'string',
                                            'example' => '2021-04-23T02:37:38Z',
                                        ],
                                        'Status' => [
                                            'description' => '绑定的云资源实例的状态。取值：'."\n"
                                                .'- **BINDING**：绑定中。'."\n"
                                                .'- **BINDED**：已绑定。'."\n"
                                                .'- **UNBINDING**：解绑中。'."\n"
                                                .'- **DELETED**：已删除。'."\n"
                                                .'- **MODIFYING**：修改中。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'BINDING',
                                        ],
                                        'BindInstanceRegionId' => [
                                            'description' => '绑定的云资源实例的地域ID。',
                                            'type' => 'string',
                                            'example' => 'us-west-1',
                                        ],
                                        'BindInstanceId' => [
                                            'description' => '绑定的云资源实例ID。',
                                            'type' => 'string',
                                            'example' => 'lb-2zebb08phyczzawe****',
                                        ],
                                        'PopLocations' => [
                                            'title' => '关联的pop点',
                                            'description' => '绑定云资源实例时，关联的接入区域的接入点信息。'."\n"
                                                ."\n"
                                                .'如果您是第一次绑定，系统将返回所有接入区域的接入点信息。'."\n",
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '绑定云资源实例时，关联的接入区域的接入点信息。'."\n"
                                                    ."\n"
                                                    .'如果您是第一次绑定，系统将返回所有接入区域的接入点信息。'."\n",
                                                'type' => 'object',
                                                'properties' => [
                                                    'PopLocation' => [
                                                        'title' => 'PopLocation',
                                                        'description' => '绑定云资源实例时，关联的接入区域的接入点信息。'."\n"
                                                            ."\n"
                                                            .'如果您是第一次绑定，系统将返回所有接入区域的接入点信息。'."\n",
                                                        'type' => 'string',
                                                        'example' => 'us-west-1-pop',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'AssociationMode' => [
                                            'title' => '绑定模式 Normal、Default',
                                            'description' => '绑定模式，取值：'."\n"
                                                ."\n"
                                                .'- **Default**：默认模式，绑定的云资源实例为默认源站。'."\n"
                                                ."\n"
                                                .'- **Normal**：普通模式，绑定的云资源实例为普通源站。',
                                            'type' => 'string',
                                            'example' => 'Default',
                                        ],
                                        'PrivateIpAddress' => [
                                            'title' => 'ip地址',
                                            'description' => '绑定的弹性网卡的辅助私网IP。'."\n"
                                                ."\n"
                                                .'只有当**BindInstanceType**取值为**NetworkInterface**时，返回该参数。',
                                            'type' => 'string',
                                            'example' => '192.168.XX.XX',
                                        ],
                                    ],
                                ],
                            ],
                            'BusinessStatus' => [
                                'description' => 'Anycast EIP实例的业务状态。取值：'."\n"
                                    ."\n"
                                    .'- **Normal**：正常状态。'."\n"
                                    .'- **FinancialLocked**：欠费锁定状态。',
                                'type' => 'string',
                                'example' => 'Normal',
                            ],
                            'InternetChargeType' => [
                                'description' => 'Anycast EIP实例的计费方式。'."\n"
                                    ."\n"
                                    .'取值：**PayByTraffic**，表示按流量计费方式。',
                                'type' => 'string',
                                'example' => 'PayByTraffic',
                            ],
                            'Name' => [
                                'description' => 'Anycast EIP实例名称。',
                                'type' => 'string',
                                'example' => 'docname',
                            ],
                            'AnycastId' => [
                                'description' => 'Anycast EIP实例ID。',
                                'type' => 'string',
                                'example' => 'aeip-bp1ix34fralt4ykf3****',
                            ],
                            'ServiceLocation' => [
                                'description' => 'Anycast EIP实例接入区域。'."\n"
                                    ."\n"
                                    .'取值：**international**，表示中国内地以外的区域。',
                                'type' => 'string',
                                'example' => 'international',
                            ],
                            'Bandwidth' => [
                                'description' => 'Anycast EIP实例的带宽峰值，单位：Mbps。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'IpAddress' => [
                                'description' => 'Anycast EIP实例IP地址。',
                                'type' => 'string',
                                'example' => '139.95.XX.XX',
                            ],
                            'Bid' => [
                                'description' => 'Anycast EIP实例账号BID。',
                                'type' => 'string',
                                'example' => '26842',
                            ],
                            'AliUid' => [
                                'description' => 'Anycast EIP实例账号ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '25346073170691****',
                            ],
                            'ResourceGroupId' => [
                                'description' => '实例所属的资源组ID。',
                                'type' => 'string',
                                'example' => 'rg-acfmzssisocarfy',
                            ],
                            'Tags' => [
                                'description' => '标签信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'description' => '标签键。',
                                            'type' => 'string',
                                            'example' => 'FinanceDept',
                                        ],
                                        'Value' => [
                                            'description' => '标签值。',
                                            'type' => 'string',
                                            'example' => 'FinanceJoshua',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"Associated\\",\\n  \\"Description\\": \\"doctest\\",\\n  \\"RequestId\\": \\"4EC47282-1B74-4534-BD0E-403F3EE64CAF\\",\\n  \\"InstanceChargeType\\": \\"PostPaid\\",\\n  \\"CreateTime\\": \\"2021-04-23T01:37:38Z\\",\\n  \\"AnycastEipBindInfoList\\": [\\n    {\\n      \\"BindInstanceType\\": \\"SlbInstance\\",\\n      \\"BindTime\\": \\"2021-04-23T02:37:38Z\\",\\n      \\"Status\\": \\"BINDING\\",\\n      \\"BindInstanceRegionId\\": \\"us-west-1\\",\\n      \\"BindInstanceId\\": \\"lb-2zebb08phyczzawe****\\",\\n      \\"PopLocations\\": [\\n        {\\n          \\"PopLocation\\": \\"us-west-1-pop\\"\\n        }\\n      ],\\n      \\"AssociationMode\\": \\"Default\\",\\n      \\"PrivateIpAddress\\": \\"192.168.XX.XX\\"\\n    }\\n  ],\\n  \\"BusinessStatus\\": \\"Normal\\",\\n  \\"InternetChargeType\\": \\"PayByTraffic\\",\\n  \\"Name\\": \\"docname\\",\\n  \\"AnycastId\\": \\"aeip-bp1ix34fralt4ykf3****\\",\\n  \\"ServiceLocation\\": \\"international\\",\\n  \\"Bandwidth\\": 200,\\n  \\"IpAddress\\": \\"139.95.XX.XX\\",\\n  \\"Bid\\": \\"26842\\",\\n  \\"AliUid\\": 0,\\n  \\"ResourceGroupId\\": \\"rg-acfmzssisocarfy\\",\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"FinanceDept\\",\\n      \\"Value\\": \\"FinanceJoshua\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAnycastEipAddressResponse>\\n    <Status>Associated</Status>\\n    <Description>doctest</Description>\\n    <RequestId>4EC47282-1B74-4534-BD0E-403F3EE64CAF</RequestId>\\n    <InstanceChargeType>PostPaid</InstanceChargeType>\\n    <CreateTime>2021-04-23T01:37:38Z</CreateTime>\\n    <AnycastEipBindInfoList>\\n        <BindInstanceType>SlbInstance</BindInstanceType>\\n        <BindTime>2021-04-23T02:37:38Z</BindTime>\\n        <Status>BINDING</Status>\\n        <BindInstanceRegionId>us-west-1</BindInstanceRegionId>\\n        <BindInstanceId>lb-2zebb08phyczzawe****</BindInstanceId>\\n        <PopLocations>\\n            <PopLocation>us-west-1-pop</PopLocation>\\n        </PopLocations>\\n        <AssociationMode>Default</AssociationMode>\\n        <PrivateIpAddress>192.168.XX.XX</PrivateIpAddress>\\n    </AnycastEipBindInfoList>\\n    <BusinessStatus>Normal</BusinessStatus>\\n    <InternetChargeType>PayByTraffic</InternetChargeType>\\n    <Name>docname</Name>\\n    <AnycastId>aeip-bp1ix34fralt4ykf3****</AnycastId>\\n    <ServiceLocation>international</ServiceLocation>\\n    <Bandwidth>200</Bandwidth>\\n    <IpAddress>139.95.XX.XX</IpAddress>\\n    <Bid>26842</Bid>\\n    <Tags>\\n        <Key>FinanceDept</Key>\\n        <Value>FinanceJoshua</Value>\\n    </Tags>\\n</DescribeAnycastEipAddressResponse>","errorExample":""}]',
            'title' => '查看实例信息',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeAnycastPopLocations' => [
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
                    'name' => 'ServiceLocation',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例的接入区域。'."\n"
                            ."\n"
                            .'取值：**international**，指中国内地以外的区域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'international',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数列表。',
                        'type' => 'object',
                        'properties' => [
                            'AnycastPopLocationList' => [
                                'description' => '接入区域的接入点信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '接入区域的接入点信息列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'RegionName' => [
                                            'description' => '接入点地域名称。',
                                            'type' => 'string',
                                            'example' => 'us-west-1-pop',
                                        ],
                                        'RegionId' => [
                                            'description' => '接入点地域ID。',
                                            'type' => 'string',
                                            'example' => 'us-west-1-pop',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4EC47282-1B74-4534-BD0E-403F3EE64CAF',
                            ],
                            'Count' => [
                                'description' => '接入点列表条目数。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"AnycastPopLocationList\\": [\\n    {\\n      \\"RegionName\\": \\"us-west-1-pop\\",\\n      \\"RegionId\\": \\"us-west-1-pop\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"4EC47282-1B74-4534-BD0E-403F3EE64CAF\\",\\n  \\"Count\\": \\"1\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeAnycastPopLocationsResponse>\\n    <AnycastPopLocationList>\\n        <RegionName>us-west-1-pop</RegionName>\\n        <RegionId>us-west-1-pop</RegionId>\\n    </AnycastPopLocationList>\\n    <RequestId>4EC47282-1B74-4534-BD0E-403F3EE64CAF</RequestId>\\n    <Count>1</Count>\\n</DescribeAnycastPopLocationsResponse>","errorExample":""}]',
            'title' => '查询接入点信息',
            'summary' => '调用DescribeAnycastPopLocations接口查询指定接入区域的接入点信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListAnycastEipAddresses' => [
            'summary' => '查询指定接入区域已创建Anycast EIP实例的具体信息，包括实例状态、带宽峰值和已绑定资源的信息等。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AnycastId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例ID。'."\n"
                            ."\n"
                            .'> 为保证查询结果准确性，不建议同时配置**AnycastIds**和**AnycastId**。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aeip-2zeerraiwb7ujsxdc****',
                    ],
                ],
                [
                    'name' => 'AnycastIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => 'Anycast EIP实例ID列表。'."\n"
                            ."\n"
                            .'最多支持输入50个Anycast EIP实例ID。'."\n"
                            ."\n"
                            .'> 为保证查询结果准确性，不建议同时配置**AnycastIds**和**AnycastId**。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'Anycast EIP实例ID列表。'."\n"
                                ."\n"
                                .'最多支持输入50个Anycast EIP实例ID。'."\n"
                                .'> 为保证查询结果准确性，不建议同时配置**AnycastIds**和**AnycastId**。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'aeip-2zeerraiwb7ujsxdc****',
                        ],
                        'required' => false,
                        'maxItems' => 50,
                    ],
                ],
                [
                    'name' => 'AnycastEipAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例被分配的IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '139.95.XX.XX',
                    ],
                ],
                [
                    'name' => 'ServiceLocation',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例接入区域。'."\n"
                            ."\n"
                            .'取值：**international**，指中国内地以外的区域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'international',
                    ],
                ],
                [
                    'name' => 'InstanceChargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP付费模式。'."\n"
                            ."\n"
                            .'取值：**PostPaid**，后付费模式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PostPaid',
                    ],
                ],
                [
                    'name' => 'InternetChargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例访问公网计费方式。'."\n"
                            ."\n"
                            .'取值：**PayByTraffic**，指按流量计费。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PayByTraffic',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例名称。'."\n"
                            ."\n"
                            .'名称长度为0~128个字符，以大小写字母或中文开头，可包含数字、短划线（-）或下划线（_）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'doctest',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属的资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekzthsmwsnfuni',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签信息。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '资源的标签键。最多支持20个标签键。一旦传入该值，则不允许为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。'."\n"
                                        ."\n"
                                        .'> 参数**Tag.N**（**Tag.N.Key**与**Tag.N.Value**）至少输入一个。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'FinanceDept',
                                ],
                                'Value' => [
                                    'description' => '资源的标签值。最多支持20个标签值。一旦传入该值，可以为空字符串。'."\n"
                                        ."\n\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。'."\n"
                                        ."\n"
                                        .'> 参数**Tag.N**（**Tag.N.Key**与**Tag.N.Value**）至少输入一个。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'FinanceJoshua',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '列表分页展示时每页展示的实例个数，取值范围：**20~100**。默认值：**50**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
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
                        'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IP状态，取值：'."\n"
                            ."\n"
                            .'- **Associating**：绑定中。'."\n"
                            .'- **Unassociating**：解绑中。'."\n"
                            .'- **Allocated**：已分配。'."\n"
                            .'- **Associated**：已绑定。'."\n"
                            .'- **Modifying**：修改中。'."\n"
                            .'- **Releasing**：释放中。'."\n"
                            .'- **Released**：已释放。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Associated',
                    ],
                ],
                [
                    'name' => 'BusinessStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP实例的业务状态，取值：'."\n"
                            ."\n"
                            .'- **Normal**：正常状态。'."\n"
                            .'- **FinancialLocked**：欠费锁定状态。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Normal',
                    ],
                ],
                [
                    'name' => 'BindInstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => 'Anycast EIP绑定的云资源实例ID列表。'."\n"
                            ."\n"
                            .'最多支持输入100个云资源实例ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'Anycast EIP绑定的云资源实例ID列表。'."\n"
                                ."\n"
                                .'最多支持输入100个云资源实例ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'lb-2zebb08phyczzawe****',
                        ],
                        'required' => false,
                        'example' => 'lb-2zebb08phyczzawe****',
                        'maxItems' => 100,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '列表条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    .'- 如果**NextToken**为空表示没有下一次查询。'."\n"
                                    .'- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                                'type' => 'string',
                                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4EC47282-1B74-4534-BD0E-403F3EE64CAF',
                            ],
                            'AnycastList' => [
                                'description' => 'Anycast EIP信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'Anycast EIP信息列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => 'IP状态。'."\n"
                                                ."\n"
                                                .'- **Associating**：绑定中。'."\n"
                                                .'- **Unassociating**：解绑中。'."\n"
                                                .'- **Allocated**：已分配。'."\n"
                                                .'- **Associated**：已绑定。'."\n"
                                                .'- **Modifying**：修改中。'."\n"
                                                .'- **Releasing**：释放中。'."\n"
                                                .'- **Released**：已释放。',
                                            'type' => 'string',
                                            'example' => 'Associating',
                                        ],
                                        'CreateTime' => [
                                            'description' => 'Anycast EIP实例创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-04-22T01:37:38Z',
                                        ],
                                        'AnycastId' => [
                                            'description' => 'Anycast EIP实例ID。',
                                            'type' => 'string',
                                            'example' => 'aeip-2zeerraiwb7ujsxdc****',
                                        ],
                                        'AliUid' => [
                                            'description' => 'Anycast EIP实例账号ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '123440159596****',
                                        ],
                                        'ServiceLocation' => [
                                            'description' => 'Anycast EIP实例接入区域。'."\n"
                                                ."\n"
                                                .'**international**：指中国内地以外的区域。',
                                            'type' => 'string',
                                            'example' => 'international',
                                        ],
                                        'InstanceChargeType' => [
                                            'description' => 'Anycast EIP实例的付费模式。'."\n"
                                                ."\n"
                                                .'**PostPaid**：指后付费模式。',
                                            'type' => 'string',
                                            'example' => 'PostPaid',
                                        ],
                                        'IpAddress' => [
                                            'description' => 'Anycast EIP实例IP地址。',
                                            'type' => 'string',
                                            'example' => '139.95.XX.XX',
                                        ],
                                        'Bandwidth' => [
                                            'description' => 'Anycast EIP实例的带宽峰值。单位：Mbps。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '200',
                                        ],
                                        'Description' => [
                                            'description' => 'Anycast EIP实例描述。',
                                            'type' => 'string',
                                            'example' => 'docdesc',
                                        ],
                                        'AnycastEipBindInfoList' => [
                                            'description' => 'Anycast EIP实例绑定信息列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => 'Anycast EIP实例绑定信息列表。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'BindInstanceType' => [
                                                        'description' => '绑定云资源实例类型。'."\n"
                                                            ."\n"
                                                            .'- **SlbInstance**：指专有网络类型的私网传统型负载均衡CLB（Classic Load Balancer）实例（原SLB）。'."\n"
                                                            ."\n"
                                                            .'- **NetworkInterface**：弹性网卡ENI（Elastic Network Interface）。'."\n",
                                                        'type' => 'string',
                                                        'example' => 'SlbInstance',
                                                    ],
                                                    'BindTime' => [
                                                        'description' => '绑定时间。',
                                                        'type' => 'string',
                                                        'example' => '2022-04-23T01:37:38Z',
                                                    ],
                                                    'BindInstanceRegionId' => [
                                                        'description' => '绑定云资源实例地域ID。',
                                                        'type' => 'string',
                                                        'example' => 'us-west-1',
                                                    ],
                                                    'BindInstanceId' => [
                                                        'description' => '绑定云资源实例ID。',
                                                        'type' => 'string',
                                                        'example' => 'lb-2zebb08phyczzawe****',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'InternetChargeType' => [
                                            'description' => 'Anycast EIP实例的计费方式。'."\n"
                                                ."\n"
                                                .'**PayByTraffic**：指按流量计费方式。',
                                            'type' => 'string',
                                            'example' => 'PayByTraffic',
                                        ],
                                        'BusinessStatus' => [
                                            'description' => 'Anycast EIP实例的业务状态。'."\n"
                                                ."\n"
                                                .'- **Normal**：正常状态。'."\n"
                                                .'- **FinancialLocked**：欠费锁定状态。',
                                            'type' => 'string',
                                            'example' => 'Normal',
                                        ],
                                        'Name' => [
                                            'description' => 'Anycast EIP实例名称。',
                                            'type' => 'string',
                                            'example' => 'docname',
                                        ],
                                        'ServiceManaged' => [
                                            'description' => '是否为服务账号创建的资源。'."\n"
                                                ."\n"
                                                .'- **0**：非服务账号创建。'."\n"
                                                ."\n"
                                                .'- **1**：服务账号创建。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '实例所属的资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-aekzthsmwsnfuni'."\n",
                                        ],
                                        'Tags' => [
                                            'description' => '标签信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'description' => '标签键。',
                                                        'type' => 'string',
                                                        'example' => 'FinanceDept',
                                                    ],
                                                    'Value' => [
                                                        'description' => '标签值。',
                                                        'type' => 'string',
                                                        'example' => 'FinanceJoshua',
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
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 100,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"4EC47282-1B74-4534-BD0E-403F3EE64CAF\\",\\n  \\"AnycastList\\": [\\n    {\\n      \\"Status\\": \\"Associating\\",\\n      \\"CreateTime\\": \\"2022-04-22T01:37:38Z\\",\\n      \\"AnycastId\\": \\"aeip-2zeerraiwb7ujsxdc****\\",\\n      \\"AliUid\\": 0,\\n      \\"ServiceLocation\\": \\"international\\",\\n      \\"InstanceChargeType\\": \\"PostPaid\\",\\n      \\"IpAddress\\": \\"139.95.XX.XX\\",\\n      \\"Bandwidth\\": 200,\\n      \\"Description\\": \\"docdesc\\",\\n      \\"AnycastEipBindInfoList\\": [\\n        {\\n          \\"BindInstanceType\\": \\"SlbInstance\\",\\n          \\"BindTime\\": \\"2022-04-23T01:37:38Z\\",\\n          \\"BindInstanceRegionId\\": \\"us-west-1\\",\\n          \\"BindInstanceId\\": \\"lb-2zebb08phyczzawe****\\"\\n        }\\n      ],\\n      \\"InternetChargeType\\": \\"PayByTraffic\\",\\n      \\"BusinessStatus\\": \\"Normal\\",\\n      \\"Name\\": \\"docname\\",\\n      \\"ServiceManaged\\": 0,\\n      \\"ResourceGroupId\\": \\"rg-aekzthsmwsnfuni\\\\n\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"FinanceDept\\",\\n          \\"Value\\": \\"FinanceJoshua\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListAnycastEipAddressesResponse>\\n    <TotalCount>100</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>4EC47282-1B74-4534-BD0E-403F3EE64CAF</RequestId>\\n    <AnycastList>\\n        <Status>Associating</Status>\\n        <CreateTime>2022-04-22T01:37:38Z</CreateTime>\\n        <AnycastId>aeip-2zeerraiwb7ujsxdc****</AnycastId>\\n        <ServiceLocation>international</ServiceLocation>\\n        <InstanceChargeType>PostPaid</InstanceChargeType>\\n        <IpAddress>139.95.XX.XX</IpAddress>\\n        <Bandwidth>200</Bandwidth>\\n        <Description>docdesc</Description>\\n        <AnycastEipBindInfoList>\\n            <BindInstanceType>SlbInstance</BindInstanceType>\\n            <BindTime>2022-04-23T01:37:38Z</BindTime>\\n            <BindInstanceRegionId>us-west-1</BindInstanceRegionId>\\n            <BindInstanceId>lb-2zebb08phyczzawe****</BindInstanceId>\\n        </AnycastEipBindInfoList>\\n        <InternetChargeType>PayByTraffic</InternetChargeType>\\n        <BusinessStatus>Normal</BusinessStatus>\\n        <Name>docname</Name>\\n        <ServiceManaged>0</ServiceManaged>\\n        <Tags>\\n            <Key>FinanceDept</Key>\\n            <Value>FinanceJoshua</Value>\\n        </Tags>\\n    </AnycastList>\\n</ListAnycastEipAddressesResponse>","errorExample":""}]',
            'title' => '查询已创建实例',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeAnycastServerRegions' => [
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
                    'name' => 'ServiceLocation',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Anycast EIP接入区域。'."\n"
                            ."\n"
                            .'取值：**international**，表示中国内地以外的区域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'international',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4EC47282-1B74-4534-BD0E-403F3EE64CAF',
                            ],
                            'Count' => [
                                'description' => '列表条目数。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'AnycastServerRegionList' => [
                                'description' => 'Anycast EIP可绑定的后端地域信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'Anycast EIP可绑定的后端地域信息列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'RegionName' => [
                                            'description' => '可绑定地域名称。',
                                            'type' => 'string',
                                            'example' => 'eu-west-1-gb33-a01',
                                        ],
                                        'RegionId' => [
                                            'description' => '可绑定地域ID。',
                                            'type' => 'string',
                                            'example' => 'eu-west-1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4EC47282-1B74-4534-BD0E-403F3EE64CAF\\",\\n  \\"Count\\": \\"1\\",\\n  \\"AnycastServerRegionList\\": [\\n    {\\n      \\"RegionName\\": \\"eu-west-1-gb33-a01\\",\\n      \\"RegionId\\": \\"eu-west-1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAnycastServerRegionsResponse>\\n    <RequestId>4EC47282-1B74-4534-BD0E-403F3EE64CAF</RequestId>\\n    <Count>1</Count>\\n    <AnycastServerRegionList>\\n        <RegionName>eu-west-1-gb33-a01</RegionName>\\n        <RegionId>eu-west-1</RegionId>\\n    </AnycastServerRegionList>\\n</DescribeAnycastServerRegionsResponse>","errorExample":""}]',
            'title' => '查询可绑定的后端服务地域',
            'summary' => '调用DescribeAnycastServerRegions接口查询指定区域内Anycast EIP可绑定的后端服务地域。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'TagResources' => [
            'summary' => '调用TagResources接口为指定的资源统一创建并绑定标签。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '资源ID，最多支持输入20个资源ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID。最多支持输入20个资源ID。'."\n"
                                ."\n"
                                .'> 调用该API时，**ResourceId.N**参数必须输入。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'aeip-2zeerraiwb7ujsxdc****',
                        ],
                        'required' => true,
                        'maxItems' => 50,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型，取值：**ANYCASTEIPADDRESS**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ANYCASTEIPADDRESS',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签信息。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '资源的标签键。至少输入1个标签键，最多支持输入20个标签键。一旦传入该值，则不允许为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以aliyun和acs:开头，不能包含`http://`或者`https://`。'."\n"
                                        ."\n"
                                        .'> 调用该API时，**Tag.N.Key**参数必须输入。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'FinanceDept',
                                ],
                                'Value' => [
                                    'description' => '资源的标签值。至少输入1个标签值，最多支持输入20个标签值。一旦传入该值，可以为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。'."\n"
                                        ."\n"
                                        .'> 调用该API时，**Tag.N.Value**参数必须输入。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'FinanceJoshua',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 21,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResult',
                        'description' => 'BaseResult',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    ."\n"
                                    .'**true**：调用成功。'."\n"
                                    ."\n"
                                    .'**false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C46FF5A8-C5F0-4024-8262-B16B639225A0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NumberExceed.Tags',
                        'errorMessage' => 'The maximum number of tags is exceeded.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.ResourceIds',
                        'errorMessage' => 'The maximum number of resource IDs is exceeded.',
                    ],
                    [
                        'errorCode' => 'Forbidden.TagKeys',
                        'errorMessage' => 'The tag key cannot be operated by the request.',
                    ],
                    [
                        'errorCode' => 'Forbidden.TagKey.Duplicated',
                        'errorMessage' => 'The specified tag key already exists.',
                    ],
                    [
                        'errorCode' => 'InvalidInstanceIds.NotFound',
                        'errorMessage' => 'The instance IDs are not found.',
                    ],
                    [
                        'errorCode' => 'InvalidInstanceType.NotFound',
                        'errorMessage' => 'The instance type is not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"C46FF5A8-C5F0-4024-8262-B16B639225A0\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <Success>true</Success>\\n    <RequestId>C46FF5A8-C5F0-4024-8262-B16B639225A0</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
            'title' => '为实例添加标签',
        ],
        'ListTagResources' => [
            'summary' => '调用ListTagResources接口查询任播弹性公网IP已绑定的标签列表信息。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '资源ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID。最多支持输入20个资源ID。'."\n"
                                ."\n"
                                .'> 参数**ResourceId.N**或**Tag.N**（**Tag.N.Key**与**Tag.N.Value**）至少输入一个。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'aeip-2zeerraiwb7ujsxdc****',
                        ],
                        'required' => false,
                        'maxItems' => 50,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型，取值：**ANYCASTEIPADDRESS**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ANYCASTEIPADDRESS',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签信息。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '资源的标签键。最多支持20个标签键。一旦传入该值，则不允许为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。'."\n"
                                        ."\n"
                                        .'> 参数**ResourceId.N**或**Tag.N**（**Tag.N.Key**与**Tag.N.Value**）至少输入一个。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'FinanceDept',
                                ],
                                'Value' => [
                                    'description' => '资源的标签值。最多支持20个标签值。一旦传入该值，可以为空字符串。'."\n"
                                        ."\n\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。'."\n"
                                        ."\n"
                                        .'> 参数**ResourceId.N**或**Tag.N**（**Tag.N.Key**与**Tag.N.Value**）至少输入一个。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'FinanceJoshua',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            ."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                            ."\n"
                            .'- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页的最大条目数。取值范围：**1**~**50**，默认值：**50**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    .'- 如果**NextToken**为空表示没有下一次查询。'."\n"
                                    .'- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                                'type' => 'string',
                                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DE65F6B7-7566-4802-9007-96F2494AC512',
                            ],
                            'TagResources' => [
                                'description' => '绑定标签的资源信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ResourceId' => [
                                            'description' => '资源ID。',
                                            'type' => 'string',
                                            'example' => 'aeip-2zeerraiwb7ujsxdc****',
                                        ],
                                        'ResourceType' => [
                                            'description' => '资源类型，取值：**ANYCASTEIPADDRESS**。',
                                            'type' => 'string',
                                            'example' => 'ANYCASTEIPADDRESS',
                                        ],
                                        'TagValue' => [
                                            'description' => '标签值。',
                                            'type' => 'string',
                                            'example' => 'FinanceJoshua',
                                        ],
                                        'TagKey' => [
                                            'description' => '标签键。',
                                            'type' => 'string',
                                            'example' => 'FinanceDept',
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
                        'errorCode' => 'InvalidTagKey',
                        'errorMessage' => 'The tag keys are not valid.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.Tags',
                        'errorMessage' => 'The maximum number of tags is exceeded.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.ResourceIds',
                        'errorMessage' => 'The maximum number of resource IDs is exceeded.',
                    ],
                    [
                        'errorCode' => 'Forbidden.TagKeys',
                        'errorMessage' => 'The tag key cannot be operated by the request.',
                    ],
                    [
                        'errorCode' => 'Forbidden.TagKey.Duplicated',
                        'errorMessage' => 'The specified tag key already exists.',
                    ],
                    [
                        'errorCode' => 'InvalidInstanceIds.NotFound',
                        'errorMessage' => 'The instance IDs are not found.',
                    ],
                    [
                        'errorCode' => 'InvalidInstanceType.NotFound',
                        'errorMessage' => 'The instance type is not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"DE65F6B7-7566-4802-9007-96F2494AC512\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceId\\": \\"aeip-2zeerraiwb7ujsxdc****\\",\\n      \\"ResourceType\\": \\"ANYCASTEIPADDRESS\\",\\n      \\"TagValue\\": \\"FinanceJoshua\\",\\n      \\"TagKey\\": \\"FinanceDept\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>DE65F6B7-7566-4802-9007-96F2494AC512</RequestId>\\n    <TagResources>\\n        <ResourceId>aeip-2zeerraiwb7ujsxdc****</ResourceId>\\n        <ResourceType>ANYCASTEIPADDRESS</ResourceType>\\n        <TagValue>FinanceJoshua</TagValue>\\n        <TagKey>FinanceDept</TagKey>\\n    </TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
            'title' => '查询实例已绑定的标签列表',
        ],
        'UntagResources' => [
            'summary' => '调用UntagResources接口为指定的Anycast EIP资源批量解绑标签。',
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
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '资源ID。最多支持解绑20个资源ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID。最多支持解绑20个资源ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'aeip-2zeerraiwb7ujsxdc****',
                        ],
                        'required' => true,
                        'maxItems' => 50,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型，取值：**ANYCASTEIPADDRESS**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ANYCASTEIPADDRESS',
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要解绑的标签键。最多支持输入20个标签键。一旦传入该值，则不允许为空字符串。'."\n"
                            ."\n"
                            .'一个标签键最多支持128个字符，不能以aliyun和acs:开头，不能包含`http://`或者`https://`。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要解绑的标签键。最多支持输入20个标签键。一旦传入该值，可以为空字符串。'."\n"
                                ."\n"
                                .'一个标签键最多支持128个字符，不能以aliyun和acs:开头，不能包含http://或者https://。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'FinanceDept',
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResult',
                        'description' => 'BaseResult',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    ."\n"
                                    .'**true**：调用成功。'."\n"
                                    ."\n"
                                    .'**false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C46FF5A8-C5F0-4024-8262-B16B639225A0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NumberExceed.Tags',
                        'errorMessage' => 'The maximum number of tags is exceeded.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.ResourceIds',
                        'errorMessage' => 'The maximum number of resource IDs is exceeded.',
                    ],
                    [
                        'errorCode' => 'Forbidden.TagKeys',
                        'errorMessage' => 'The tag key cannot be operated by the request.',
                    ],
                    [
                        'errorCode' => 'Forbidden.TagKey.Duplicated',
                        'errorMessage' => 'The specified tag key already exists.',
                    ],
                    [
                        'errorCode' => 'InvalidInstanceIds.NotFound',
                        'errorMessage' => 'The instance IDs are not found.',
                    ],
                    [
                        'errorCode' => 'InvalidInstanceType.NotFound',
                        'errorMessage' => 'The instance type is not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"C46FF5A8-C5F0-4024-8262-B16B639225A0\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\n    <Success>true</Success>\\n    <RequestId>C46FF5A8-C5F0-4024-8262-B16B639225A0</RequestId>\\n</UntagResourcesResponse>","errorExample":""}]',
            'title' => '为实例解绑标签',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'eipanycast.cn-hangzhou.aliyuncs.com',
        ],
    ],
];
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Privatelink',
        'version' => '2020-04-15',
    ],
    'directories' => [
        [
            'id' => 176808,
            'title' => '私网连接服务',
            'type' => 'directory',
            'children' => [
                'OpenPrivateLinkService',
                'CheckProductOpen',
            ],
        ],
        [
            'id' => 176765,
            'title' => '地域与可用区',
            'type' => 'directory',
            'children' => [
                'DescribeRegions',
                'DescribeZones',
            ],
        ],
        [
            'id' => 3189,
            'title' => '终端节点服务',
            'type' => 'directory',
            'children' => [
                'CreateVpcEndpointService',
                'UpdateVpcEndpointServiceAttribute',
                'GetVpcEndpointServiceAttribute',
                'ListVpcEndpointServices',
                'DeleteVpcEndpointService',
            ],
        ],
        [
            'id' => 3191,
            'title' => '服务白名单',
            'type' => 'directory',
            'children' => [
                'AddUserToVpcEndpointService',
                'ListVpcEndpointServiceUsers',
                'RemoveUserFromVpcEndpointService',
            ],
        ],
        [
            'id' => 3194,
            'title' => '服务资源',
            'type' => 'directory',
            'children' => [
                'UpdateVpcEndpointServiceResourceAttribute',
                'AttachResourceToVpcEndpointService',
                'ListVpcEndpointServiceResources',
                'DetachResourceFromVpcEndpointService',
            ],
        ],
        [
            'id' => 3198,
            'title' => '终端节点',
            'type' => 'directory',
            'children' => [
                'DeleteVpcEndpoint',
                'CreateVpcEndpoint',
                'UpdateVpcEndpointAttribute',
                'ListVpcEndpoints',
                'GetVpcEndpointAttribute',
                'ListVpcEndpointServicesByEndUser',
            ],
        ],
        [
            'id' => 3203,
            'title' => '终端节点连接',
            'type' => 'directory',
            'children' => [
                'EnableVpcEndpointConnection',
                'UpdateVpcEndpointConnectionAttribute',
                'ListVpcEndpointConnections',
                'DisableVpcEndpointConnection',
            ],
        ],
        [
            'id' => 3207,
            'title' => '终端节点可用区',
            'type' => 'directory',
            'children' => [
                'AddZoneToVpcEndpoint',
                'ListVpcEndpointZones',
                'RemoveZoneFromVpcEndpoint',
            ],
        ],
        [
            'id' => 176753,
            'title' => '终端节点可用区连接',
            'type' => 'directory',
            'children' => [
                'DisableVpcEndpointZoneConnection',
                'EnableVpcEndpointZoneConnection',
                'UpdateVpcEndpointZoneConnectionResourceAttribute',
            ],
        ],
        [
            'id' => 3212,
            'title' => '安全组',
            'type' => 'directory',
            'children' => [
                'AttachSecurityGroupToVpcEndpoint',
                'ListVpcEndpointSecurityGroups',
                'DetachSecurityGroupFromVpcEndpoint',
            ],
        ],
        [
            'id' => 176748,
            'title' => '标签&资源组',
            'type' => 'directory',
            'children' => [
                'UntagResources',
                'ListTagResources',
                'TagResources',
                'ChangeResourceGroup',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'OpenPrivateLinkService' => [
            'summary' => '开启私网连接服务。',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '427688B8-ADFB-4C4E-9D45-EF5C1FD6E23D',
                            ],
                            'OrderId' => [
                                'description' => '订单ID。',
                                'type' => 'string',
                                'example' => '3245****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AccountTypeRestricted',
                        'errorMessage' => 'Please submit the application for beta testing first. You can activate the product after the application is approved.',
                    ],
                    [
                        'errorCode' => 'OrderOpend',
                        'errorMessage' => 'You have already activated the service. Go to the console to start using it.',
                    ],
                    [
                        'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
                        'errorMessage' => 'Your account does not have enough balance.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"427688B8-ADFB-4C4E-9D45-EF5C1FD6E23D\\",\\n  \\"OrderId\\": \\"3245****\\"\\n}","errorExample":""},{"type":"xml","example":"<OpenPrivateLinkServiceResponse>\\n    <RequestId>427688B8-ADFB-4C4E-9D45-EF5C1FD6E23D</RequestId>\\n    <OrderId>3245****</OrderId>\\n</OpenPrivateLinkServiceResponse>","errorExample":""}]',
            'title' => '开启私网连接服务',
        ],
        'CheckProductOpen' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8D8992C1-6712-423C-BAC5-E5E817484C6B',
                            ],
                            'Success' => [
                                'description' => '私网连接服务开通状态。'."\n"
                                    ."\n"
                                    .'仅取值：**true**，表示开通。'."\n"
                                    ."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NeedOpenProduct',
                        'errorMessage' => 'The product is not activated.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8D8992C1-6712-423C-BAC5-E5E817484C6B\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CheckProductOpenResponse>\\n    <RequestId>8D8992C1-6712-423C-BAC5-E5E817484C6B</RequestId>\\n    <Success>true</Success>\\n</CheckProductOpenResponse>","errorExample":""}]',
            'title' => '查询是否已开通私网连接',
            'summary' => '调用CheckProductOpen接口，查询是否已开通私网连接。',
        ],
        'DescribeRegions' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
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
                                'example' => '611CB80C-B6A9-43DB-9E38-0B0AC3D9B58F',
                            ],
                            'Regions' => [
                                'type' => 'object',
                                'properties' => [
                                    'Region' => [
                                        'description' => '可用地域的集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'LocalName' => [
                                                    'description' => '地域名称。',
                                                    'type' => 'string',
                                                    'example' => '华东1（杭州）',
                                                ],
                                                'RegionEndpoint' => [
                                                    'description' => '地域服务的终端节点。',
                                                    'type' => 'string',
                                                    'example' => 'privatelink.cn-hangzhou.aliyuncs.com',
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
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"611CB80C-B6A9-43DB-9E38-0B0AC3D9B58F\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"LocalName\\": \\"华东1（杭州）\\",\\n        \\"RegionEndpoint\\": \\"privatelink.cn-hangzhou.aliyuncs.com\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>A355E857-97F5-5054-9AC8-BCE064939652</RequestId>\\n    <Regions>\\n        <Region>\\n            <RegionId>cn-hangzhou</RegionId>\\n            <RegionEndpoint>privatelink.cn-hangzhou.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华东1（杭州）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-shanghai</RegionId>\\n            <RegionEndpoint>privatelink.cn-shanghai.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华东2（上海）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-nanjing</RegionId>\\n            <RegionEndpoint>privatelink.cn-nanjing.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华东5（南京-本地地域）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-qingdao</RegionId>\\n            <RegionEndpoint>privatelink.cn-qingdao.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北1（青岛）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-beijing</RegionId>\\n            <RegionEndpoint>privatelink.cn-beijing.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北2（北京）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-zhangjiakou</RegionId>\\n            <RegionEndpoint>privatelink.cn-zhangjiakou.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北3（张家口）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-huhehaote</RegionId>\\n            <RegionEndpoint>privatelink.cn-huhehaote.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北5（呼和浩特）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-wulanchabu</RegionId>\\n            <RegionEndpoint>privatelink.cn-wulanchabu.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北6（乌兰察布）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-shenzhen</RegionId>\\n            <RegionEndpoint>privatelink.cn-shenzhen.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华南1（深圳）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-heyuan</RegionId>\\n            <RegionEndpoint>privatelink.cn-heyuan.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华南2（河源）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-guangzhou</RegionId>\\n            <RegionEndpoint>privatelink.cn-guangzhou.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华南3（广州）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-chengdu</RegionId>\\n            <RegionEndpoint>privatelink.cn-chengdu.aliyuncs.com</RegionEndpoint>\\n            <LocalName>西南1（成都）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-hongkong</RegionId>\\n            <RegionEndpoint>privatelink.cn-hongkong.aliyuncs.com</RegionEndpoint>\\n            <LocalName>中国香港</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-southeast-1</RegionId>\\n            <RegionEndpoint>privatelink.ap-southeast-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>新加坡</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-southeast-2</RegionId>\\n            <RegionEndpoint>privatelink.ap-southeast-2.aliyuncs.com</RegionEndpoint>\\n            <LocalName>澳大利亚（悉尼）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-southeast-3</RegionId>\\n            <RegionEndpoint>privatelink.ap-southeast-3.aliyuncs.com</RegionEndpoint>\\n            <LocalName>马来西亚（吉隆坡）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-southeast-5</RegionId>\\n            <RegionEndpoint>privatelink.ap-southeast-5.aliyuncs.com</RegionEndpoint>\\n            <LocalName>印度尼西亚（雅加达）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-northeast-1</RegionId>\\n            <RegionEndpoint>privatelink.ap-northeast-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>日本（东京）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>eu-central-1</RegionId>\\n            <RegionEndpoint>privatelink.eu-central-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>德国（法兰克福）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>eu-west-1</RegionId>\\n            <RegionEndpoint>privatelink.eu-west-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>英国（伦敦）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>us-west-1</RegionId>\\n            <RegionEndpoint>privatelink.us-west-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>美国（硅谷）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>us-east-1</RegionId>\\n            <RegionEndpoint>privatelink.us-east-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>美国（弗吉尼亚）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-south-1</RegionId>\\n            <RegionEndpoint>privatelink.ap-south-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>印度（孟买）</LocalName>\\n        </Region>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
            'title' => '查看可选的地域和可用区',
            'summary' => '调用DescribeRegions接口，查看私网连接可选的地域和可用区。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeZones' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                        'description' => '可用区所在的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可用区所在的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
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
                                'example' => '611CB80C-B6A9-43DB-9E38-0B0AC3D9B58F',
                            ],
                            'Zones' => [
                                'type' => 'object',
                                'properties' => [
                                    'Zone' => [
                                        'description' => '可用区的集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '可用区的集合。',
                                            'type' => 'object',
                                            'properties' => [
                                                'LocalName' => [
                                                    'description' => '可用区名称。',
                                                    'type' => 'string',
                                                    'example' => '华东1 可用区B',
                                                ],
                                                'ZoneId' => [
                                                    'description' => '可用区ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou-b',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"611CB80C-B6A9-43DB-9E38-0B0AC3D9B58F\\",\\n  \\"Zones\\": {\\n    \\"Zone\\": [\\n      {\\n        \\"LocalName\\": \\"华东1 可用区B\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-b\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeZonesResponse>\\r\\n  <RequestId>6FEA0CF3-D3B9-43E5-A304-D217037876A8</RequestId>\\r\\n      <Zones>\\r\\n            <Zone>\\r\\n                  <ZoneId>cn-hangzhou-b</ZoneId>\\r\\n                  <LocalName>华东 1 可用区 B</LocalName>\\r\\n            </Zone>\\r\\n            <Zone>\\r\\n                  <ZoneId>cn-hangzhou-f</ZoneId>\\r\\n                  <LocalName>华东 1 可用区 F</LocalName>\\r\\n            </Zone>\\r\\n            <Zone>\\r\\n                  <ZoneId>cn-hangzhou-g</ZoneId>\\r\\n                  <LocalName>华东 1 可用区 G</LocalName>\\r\\n            </Zone>\\r\\n            <Zone>\\r\\n                  <ZoneId>cn-hangzhou-h</ZoneId>\\r\\n                  <LocalName>华东 1 可用区 H</LocalName>\\r\\n            </Zone>\\r\\n            <Zone>\\r\\n                  <ZoneId>cn-hangzhou-i</ZoneId>\\r\\n                  <LocalName>华东 1 可用区 I</LocalName>\\r\\n            </Zone>\\r\\n            <Zone>\\r\\n                  <ZoneId>cn-hangzhou-j</ZoneId>\\r\\n                  <LocalName>华东 1 可用区 J</LocalName>\\r\\n            </Zone>\\r\\n            <Zone>\\r\\n                  <ZoneId>cn-hangzhou-k</ZoneId>\\r\\n                  <LocalName>华东 1 可用区 K</LocalName>\\r\\n            </Zone>\\r\\n      </Zones>\\r\\n</DescribeZonesResponse>","errorExample":""}]',
            'title' => '查询指定地域中可用区的列表',
            'summary' => '调用DescribeZones接口，查询指定地域中可用区的列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateVpcEndpointService' => [
            'summary' => '调用CreateVpcEndpointService接口，创建终端节点服务。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务所在的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。'."\n"
                            ."\n\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会创建资源。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ServiceDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务的描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is my EndpointService.',
                    ],
                ],
                [
                    'name' => 'AutoAcceptEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否自动接受终端节点连接，取值：'."\n"
                            ."\n"
                            .'- **true**：自动接受终端节点连接。'."\n"
                            ."\n"
                            .'- **false**（默认值）：不自动接受终端节点连接。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'Payer',
                    'in' => 'query',
                    'schema' => [
                        'description' => '付费方，取值：'."\n"
                            ."\n"
                            .'- **Endpoint**：服务使用方。'."\n"
                            ."\n"
                            .'- **EndpointService**：服务提供方。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Endpoint',
                    ],
                ],
                [
                    'name' => 'ZoneAffinityEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否支持连接服务的终端节点域名就近解析，取值：'."\n"
                            ."\n"
                            .'- **true**：是。'."\n"
                            ."\n"
                            .'- **false**（默认值）：否。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ServiceResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务资源类型。取值：'."\n"
                            ."\n"
                            .'- **slb** ：表示服务资源类型为传统型负载均衡CLB（Classic Load Balancer）。'."\n"
                            ."\n"
                            .'- **alb** ：表示服务资源类型为应用型负载均衡ALB（Application Load Balancer）。'."\n"
                            .'- **nlb** ：表示服务资源类型为网络型负载均衡NLB（Network Load Balancer ）。'."\n"
                            ."\n"
                            .'> 不支持访问NLB的TCPSSL类型监听。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'slb',
                    ],
                ],
                [
                    'name' => 'Resource',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '终端节点服务资源合集。',
                        'type' => 'array',
                        'items' => [
                            'description' => '终端节点服务资源合集。',
                            'type' => 'object',
                            'properties' => [
                                'ResourceType' => [
                                    'description' => '添加到终端节点服务中的服务资源的类型，一个终端节点服务最多支持添加20个服务资源。取值：'."\n"
                                        ."\n"
                                        .'- **slb** ：表示服务资源类型为传统型负载均衡CLB（Classic Load Balancer）。'."\n"
                                        ."\n"
                                        .'- **alb** ：表示服务资源类型为应用型负载均衡ALB（Application Load Balancer）。'."\n"
                                        .'- **nlb** ：表示服务资源类型为网络型负载均衡NLB（Network Load Balancer ）。'."\n"
                                        ."\n"
                                        .'> 在支持私网连接功能的地域内，专有网络类型的传统型负载均衡CLB实例均支持作为终端节点服务的服务资源。不支持访问NLB的TCPSSL类型监听。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'slb',
                                ],
                                'ResourceId' => [
                                    'description' => '添加到终端节点服务中的服务资源ID。最多支持20个资源ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'lb-hp32z1wp5peaoox2q****',
                                ],
                                'ZoneId' => [
                                    'description' => '可用区ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-huhehaote-a',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务所在的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
                [
                    'name' => 'ServiceSupportIPv6',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务是否支持IPv6功能。取值：'."\n"
                            ."\n"
                            .'- **true**：是。'."\n"
                            ."\n"
                            .'- **false**（默认值）：否。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmy*****',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表。'."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '标签列表。'."\n",
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '实例的标签键。最多支持20个标签键。一旦传入该值，则不允许为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'env',
                                ],
                                'Value' => [
                                    'description' => '实例的标签值。最多支持20个标签值。一旦传入该值，可以为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'prod',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ServiceBusinessStatus' => [
                                'description' => '终端节点服务的业务状态。取值：'."\n"
                                    ."\n"
                                    .'- **Normal**：正常。'."\n"
                                    ."\n"
                                    .'- **FinancialLocked**：欠费锁定。',
                                'type' => 'string',
                                'example' => 'Normal',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8D8992C1-6712-423C-BAC5-E5E817484C6B',
                            ],
                            'ServiceName' => [
                                'description' => '终端节点服务的名称。',
                                'type' => 'string',
                                'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****',
                            ],
                            'ServiceStatus' => [
                                'description' => '终端节点服务的状态。取值：'."\n"
                                    ."\n"
                                    .'- **Creating**：创建中。'."\n"
                                    ."\n"
                                    .'- **Pending**：修改中。'."\n"
                                    ."\n"
                                    .'- **Active**：可用。'."\n"
                                    ."\n"
                                    .'- **Deleting**：删除中。',
                                'type' => 'string',
                                'example' => 'Active',
                            ],
                            'ServiceDescription' => [
                                'description' => '终端节点服务的描述信息。',
                                'type' => 'string',
                                'example' => 'This is my EndpointService.',
                            ],
                            'CreateTime' => [
                                'description' => '终端节点服务的创建时间。',
                                'type' => 'string',
                                'example' => '2022-01-02T19:11:12Z',
                            ],
                            'ServiceDomain' => [
                                'description' => '终端节点服务的服务域名。',
                                'type' => 'string',
                                'example' => 'epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com',
                            ],
                            'ZoneAffinityEnabled' => [
                                'description' => '是否支持连接服务的终端节点域名就近解析。取值：'."\n"
                                    ."\n"
                                    .'- **true**：是。'."\n"
                                    .'- **false**：否。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'AutoAcceptEnabled' => [
                                'description' => '是否自动接受终端节点连接。取值：'."\n"
                                    ."\n"
                                    .'- **true**：自动接受终端节点连接。'."\n"
                                    .'- **false**：不自动接受终端节点连接。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'ServiceId' => [
                                'description' => '终端节点服务的ID。',
                                'type' => 'string',
                                'example' => 'epsrv-hp3vpx8yqxblby3i****',
                            ],
                            'ServiceSupportIPv6' => [
                                'description' => '终端节点服务是否支持IPv6功能。取值：'."\n"
                                    ."\n"
                                    .'- **true**：是。'."\n"
                                    ."\n"
                                    .'- **false**：否。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'ResourceGroupId' => [
                                'description' => '资源组ID。',
                                'type' => 'string',
                                'example' => 'rg-acfmy*****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointServiceExist',
                        'errorMessage' => 'The specified Endpoint Service already exists.',
                    ],
                    [
                        'errorCode' => 'AlbNotFound',
                        'errorMessage' => 'The specified Alb does not exist.',
                    ],
                    [
                        'errorCode' => 'LoadBalancerNotFound',
                        'errorMessage' => 'The specified load balancer does not exist.',
                    ],
                    [
                        'errorCode' => 'LoadBalancerNotSupportPrivateLink',
                        'errorMessage' => 'The specified SLB does not support PrivateLink.',
                    ],
                    [
                        'errorCode' => 'GenerateResourceIdFailed',
                        'errorMessage' => 'Failed to generate ResourceId.',
                    ],
                    [
                        'errorCode' => 'QuotaMisMatched',
                        'errorMessage' => 'The resource you applied for has exceeded the quota.',
                    ],
                    [
                        'errorCode' => 'VSwitchNotFound',
                        'errorMessage' => 'The specified VSwitch does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointServicePayerForbidden',
                        'errorMessage' => 'The parameter EndpointServicePayer is forbidden. The user is not in the whitelist.',
                    ],
                    [
                        'errorCode' => 'NeedOpenProduct',
                        'errorMessage' => 'The product is not activated.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceNotSupportedZone',
                        'errorMessage' => 'The specified endpoint service does not support the zone.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.NatGateway',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                    [
                        'errorCode' => 'Mismatch.ResourceType',
                        'errorMessage' => 'The %s is mismatched for %s and %s.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceNotSupportIpv6',
                        'errorMessage' => 'The param supportIpv6 of EndpointService is forbidden , resource is not support ipv6.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.PrivateDomainNotSupport',
                        'errorMessage' => 'The operation is not allowed because of PrivateDomainNotSupport.',
                    ],
                    [
                        'errorCode' => 'Conflict.ServiceName',
                        'errorMessage' => 'The ServiceName %s is conflict.',
                    ],
                    [
                        'errorCode' => 'InvalidParam.PrivateDnsName',
                        'errorMessage' => 'The parameter of PrivateDnsName is illegal, which needs to end with aliyun.com, aliyun-inc.com, or aliyuncs.com.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ServiceBusinessStatus\\": \\"Normal\\",\\n  \\"RequestId\\": \\"8D8992C1-6712-423C-BAC5-E5E817484C6B\\",\\n  \\"ServiceName\\": \\"com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****\\",\\n  \\"ServiceStatus\\": \\"Active\\",\\n  \\"ServiceDescription\\": \\"This is my EndpointService.\\",\\n  \\"CreateTime\\": \\"2022-01-02T19:11:12Z\\",\\n  \\"ServiceDomain\\": \\"epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com\\",\\n  \\"ZoneAffinityEnabled\\": false,\\n  \\"AutoAcceptEnabled\\": false,\\n  \\"ServiceId\\": \\"epsrv-hp3vpx8yqxblby3i****\\",\\n  \\"ServiceSupportIPv6\\": false,\\n  \\"ResourceGroupId\\": \\"rg-acfmy*****\\"\\n}","type":"json"}]',
            'title' => '创建终端节点服务',
            'description' => '- 创建终端节点服务之前，请确保您已创建支持私网连接的负载均衡资源。具体操作，请参见[创建负载均衡实例](~~174064~~)。'."\n"
                .'- **CreateVpcEndpointService**接口属于异步接口，即系统会返回一个实例ID，但该终端节点服务尚未创建完成，系统后台任务仍在进行中。您可以调用[GetVpcEndpointServiceAttribute](~~183542~~)查询终端节点服务的创建状态：'."\n"
                ."\n"
                .'     - 当终端节点服务处于**Creating**状态时，表示终端节点服务正在创建。'."\n"
                ."\n"
                .'     - 当终端节点服务处于**Active**状态时，表示终端节点服务创建完成。',
        ],
        'UpdateVpcEndpointServiceAttribute' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务所在的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改资源属性。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP'."\n"
                            .' 2xx状态码并直接修改资源属性。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'ServiceDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务的描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is my EndpointService.',
                    ],
                ],
                [
                    'name' => 'AutoAcceptEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否自动接受终端节点连接，取值：'."\n"
                            ."\n"
                            .'- **true**：自动接受终端节点连接。'."\n"
                            ."\n"
                            .'- **false**：不自动接受终端节点连接。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ConnectBandwidth',
                    'in' => 'query',
                    'schema' => [
                        'description' => '默认连接带宽峰值。默认值：**3072**。单位：Mbps。'."\n"
                            ."\n"
                            .'取值范围：**100**~**10240**。'."\n"
                            ."\n"
                            .'> 当服务资源为传统型负载均衡CLB或应用型负载均衡ALB时，支持设置默认连接带宽峰值；当服务资源为网络型负载均衡NLB时，不支持设置连接带宽。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3072',
                    ],
                ],
                [
                    'name' => 'ZoneAffinityEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否支持连接服务的终端节点域名就近解析。取值：'."\n"
                            ."\n"
                            .'- **true**（默认值）：是。'."\n"
                            .'- **false**：否。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务所在的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ServiceSupportIPv6',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务是否支持IPv6功能。取值：'."\n"
                            ."\n"
                            .'- **true**：是。'."\n"
                            ."\n"
                            .'- **false**（默认值）：否。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '请求ID。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8D8992C1-6712-423C-BAC5-E5E817484C6B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointServiceNotFound',
                        'errorMessage' => 'The specified Service does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceLocked',
                        'errorMessage' => 'The specified Service is locked.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceOperationDenied',
                        'errorMessage' => 'The specified operation of endpoint service is not allowed.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.PrivateServiceDomainBusinessStatus',
                        'errorMessage' => 'The operation is not allowed because of PrivateServiceDomainBusinessStatus.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'ServiceResourceNotSupportIpv6',
                        'errorMessage' => 'The resource is not support ipv6.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceDowngradeNotAllowed',
                        'errorMessage' => 'The EndpointService is not allowed for downgrade.',
                    ],
                    [
                        'errorCode' => 'DependencyViolation.PrivateDnsName',
                        'errorMessage' => 'The specified resource of %s depends on %s, so the operation cannot be completed.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.PrivateDomainNotSupport',
                        'errorMessage' => 'The operation is not allowed because of PrivateDomainNotSupport.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.PrivateDomainStatusNotSupport',
                        'errorMessage' => 'The operation is not allowed because of %s.',
                    ],
                    [
                        'errorCode' => 'Conflict.ServiceName',
                        'errorMessage' => 'The ServiceName %s is conflict.',
                    ],
                    [
                        'errorCode' => 'InvalidParam.PrivateDnsName',
                        'errorMessage' => 'The parameter of PrivateDnsName is illegal, which needs to end with aliyun.com, aliyun-inc.com, or aliyuncs.com.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8D8992C1-6712-423C-BAC5-E5E817484C6B\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateVpcEndpointServiceAttributeResponse>\\n    <RequestId>8D8992C1-6712-423C-BAC5-E5E817484C6B</RequestId>\\n</UpdateVpcEndpointServiceAttributeResponse>","errorExample":""}]',
            'title' => '修改终端节点服务的属性',
            'summary' => '调用UpdateVpcEndpointServiceAttribute接口，修改终端节点服务的属性。',
            'description' => '- 修改终端节点服务的属性之前，请确保终端节点服务处于**Active**状态，您可以通过调用[GetVpcEndpointServiceAttribute](~~469330~~)接口，查询终端节点服务状态。'."\n"
                .'- **UpdateVpcEndpointServiceAttribute**接口不支持在同一个阿里云账号（主账号）下并发修改终端节点服务的属性。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetVpcEndpointServiceAttribute' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                        'description' => '终端节点服务所属的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务所属的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Payer' => [
                                'description' => '付费方，取值：'."\n"
                                    ."\n"
                                    .'- **Endpoint**：服务使用方。'."\n"
                                    .'- **EndpointService**：服务提供方。',
                                'type' => 'string',
                                'example' => 'Endpoint',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8D8992C1-6712-423C-BAC5-E5E817484C6B',
                            ],
                            'ServiceDescription' => [
                                'description' => '终端节点服务的描述信息。',
                                'type' => 'string',
                                'example' => 'This is my EndpointService.',
                            ],
                            'CreateTime' => [
                                'description' => '终端节点服务的创建时间。',
                                'type' => 'string',
                                'example' => '2020-01-02T19:11:12Z',
                            ],
                            'MaxBandwidth' => [
                                'description' => '终端节点连接的最大带宽。单位：Mbps。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1024',
                            ],
                            'MinBandwidth' => [
                                'description' => '终端节点连接的最小带宽。单位：Mbps。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'ServiceDomain' => [
                                'description' => '终端节点服务的服务域名。',
                                'type' => 'string',
                                'example' => 'epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com',
                            ],
                            'AutoAcceptEnabled' => [
                                'description' => '是否自动接受终端节点连接，取值：'."\n"
                                    ."\n"
                                    .'- **true**：自动接受终端节点连接。'."\n"
                                    ."\n"
                                    .'- **false**：不自动接受终端节点连接。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ZoneAffinityEnabled' => [
                                'description' => '是否支持连接服务的终端节点域名就近解析。取值：'."\n"
                                    ."\n"
                                    .'- **true**（默认值）：是。'."\n"
                                    .'- **false**：否。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ServiceId' => [
                                'description' => '终端节点服务的ID。',
                                'type' => 'string',
                                'example' => 'epsrv-hp3vpx8yqxblby3i****',
                            ],
                            'Zones' => [
                                'description' => '服务资源所属的可用区列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务资源所属的可用区。',
                                    'type' => 'string',
                                    'example' => 'cn-huhehaote-b',
                                ],
                            ],
                            'ServiceBusinessStatus' => [
                                'description' => '终端节点服务的业务状态，取值：'."\n"
                                    ."\n"
                                    .'- **Normal**：正常。'."\n"
                                    ."\n"
                                    .'- **FinancialLocked**：欠费锁定。',
                                'type' => 'string',
                                'example' => 'Normal',
                            ],
                            'ServiceName' => [
                                'description' => '终端节点服务的名称。',
                                'type' => 'string',
                                'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****',
                            ],
                            'ServiceStatus' => [
                                'description' => '终端节点服务的状态，取值：'."\n"
                                    ."\n"
                                    .'- **Creating**：创建中。'."\n"
                                    ."\n"
                                    .'- **Pending**：修改中。'."\n"
                                    ."\n"
                                    .'- **Active**：可用。'."\n"
                                    ."\n"
                                    .'- **Deleting**：删除中。',
                                'type' => 'string',
                                'example' => 'Active',
                            ],
                            'ConnectBandwidth' => [
                                'description' => '默认连接带宽峰值。单位：Mbps。取值范围：**100~10240**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3072',
                            ],
                            'RegionId' => [
                                'description' => '终端节点服务所属的地域。',
                                'type' => 'string',
                                'example' => 'cn-huhehaote',
                            ],
                            'ServiceType' => [
                                'description' => '终端节点类型。'."\n"
                                    ."\n"
                                    .'仅取值： **Interface**，表示接口终端节点，您可以添加传统型负载均衡CLB（Classic Load Balancer）、应用型负载均衡ALB（Application Load Balancer）和网络型负载均衡NLB（Network Load Balancer ）的服务资源类型。',
                                'type' => 'string',
                                'example' => 'Interface',
                            ],
                            'ServiceResourceType' => [
                                'description' => '服务资源类型，取值：'."\n"
                                    ."\n"
                                    .'- **slb**：表示服务资源类型为传统型负载均衡CLB（Classic Load Balancer）。'."\n"
                                    .'-  **alb**：表示服务资源类型为应用型负载均衡ALB（Application Load Balancer）。'."\n"
                                    .'- **nlb** ：表示服务资源类型为网络型负载均衡NLB（Network Load Balancer ）。',
                                'type' => 'string',
                                'example' => 'slb',
                            ],
                            'ServiceSupportIPv6' => [
                                'description' => '终端节点是否支持IPv6功能。取值：'."\n"
                                    ."\n"
                                    .'- **true**：是。'."\n"
                                    .'- **false**（默认值）：否。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'ResourceGroupId' => [
                                'description' => '资源组ID。',
                                'type' => 'string',
                                'example' => 'rg-acfmy*****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointServiceNotFound',
                        'errorMessage' => 'The specified Service does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Payer\\": \\"Endpoint\\",\\n  \\"RequestId\\": \\"8D8992C1-6712-423C-BAC5-E5E817484C6B\\",\\n  \\"ServiceDescription\\": \\"This is my EndpointService.\\",\\n  \\"CreateTime\\": \\"2020-01-02T19:11:12Z\\",\\n  \\"MaxBandwidth\\": 1024,\\n  \\"MinBandwidth\\": 100,\\n  \\"ServiceDomain\\": \\"epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com\\",\\n  \\"AutoAcceptEnabled\\": true,\\n  \\"ZoneAffinityEnabled\\": true,\\n  \\"ServiceId\\": \\"epsrv-hp3vpx8yqxblby3i****\\",\\n  \\"Zones\\": [\\n    \\"cn-huhehaote-b\\"\\n  ],\\n  \\"ServiceBusinessStatus\\": \\"Normal\\",\\n  \\"ServiceName\\": \\"com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****\\",\\n  \\"ServiceStatus\\": \\"Active\\",\\n  \\"ConnectBandwidth\\": 3072,\\n  \\"RegionId\\": \\"cn-huhehaote\\",\\n  \\"ServiceType\\": \\"Interface\\",\\n  \\"ServiceResourceType\\": \\"slb\\",\\n  \\"ServiceSupportIPv6\\": false,\\n  \\"ResourceGroupId\\": \\"rg-acfmy*****\\"\\n}","errorExample":""},{"type":"xml","example":"<GetVpcEndpointServiceAttributeResponse>\\n    <Payer>Endpoint</Payer>\\n    <RequestId>8D8992C1-6712-423C-BAC5-E5E817484C6B</RequestId>\\n    <ServiceDescription>This is my EndpointService.</ServiceDescription>\\n    <CreateTime>2020-01-02T19:11:12Z</CreateTime>\\n    <MaxBandwidth>1024</MaxBandwidth>\\n    <MinBandwidth>100</MinBandwidth>\\n    <ServiceDomain>epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com</ServiceDomain>\\n    <AutoAcceptEnabled>true</AutoAcceptEnabled>\\n    <ZoneAffinityEnabled>true</ZoneAffinityEnabled>\\n    <ServiceId>epsrv-hp3vpx8yqxblby3i****</ServiceId>\\n    <Zones>cn-huhehaote-b</Zones>\\n    <ServiceBusinessStatus>Normal</ServiceBusinessStatus>\\n    <ServiceName>com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****</ServiceName>\\n    <ServiceStatus>Active</ServiceStatus>\\n    <ConnectBandwidth>1024</ConnectBandwidth>\\n    <RegionId>cn-huhehaote</RegionId>\\n    <ServiceType>Interface</ServiceType>\\n    <ServiceResourceType>slb</ServiceResourceType>\\n    <ServiceSupportIPv6>false</ServiceSupportIPv6>\\n    <ResourceGroupId>rg-acfmy*****</ResourceGroupId>\\n</GetVpcEndpointServiceAttributeResponse>","errorExample":""}]',
            'title' => '获取终端节点服务属性信息',
            'summary' => '调用GetVpcEndpointServiceAttribute接口，获取终端节点服务属性信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListVpcEndpointServices' => [
            'summary' => '调用ListVpcEndpointServices接口，查询终端节点服务列表。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                        'description' => '终端节点服务所属的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
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
                        'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**50**，默认值：**50**。'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '0',
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'ServiceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务资源ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'lb-hp32z1wp5peaoox2q****',
                    ],
                ],
                [
                    'name' => 'ServiceResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务资源类型，取值：'."\n"
                            ."\n"
                            .'- **slb**：表示服务资源类型为传统型负载均衡CLB（Classic Load Balancer）。'."\n"
                            ."\n"
                            .'- **alb**：表示服务资源类型为应用型负载均衡ALB（Application Load Balancer）。'."\n"
                            .'- **nlb** ：表示服务资源类型为网络型负载均衡NLB（Network Load Balancer ）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'slb',
                    ],
                ],
                [
                    'name' => 'AutoAcceptEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否自动接受终端节点连接，取值：'."\n"
                            ."\n"
                            .'- **true**：自动接受终端节点连接。'."\n"
                            ."\n"
                            .'- **false**（默认值）：不自动接受终端节点连接。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ServiceStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务的状态，取值：'."\n"
                            ."\n"
                            .'- **Creating**：创建中。'."\n"
                            ."\n"
                            .'- **Pending**：修改中。'."\n"
                            ."\n"
                            .'- **Active**：可用。'."\n"
                            ."\n"
                            .'- **Deleting**：删除中。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Active',
                    ],
                ],
                [
                    'name' => 'ServiceBusinessStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务的业务状态，取值：'."\n"
                            ."\n"
                            .'- **Normal**：正常。'."\n"
                            ."\n"
                            .'- **FinancialLocked**：欠费锁定。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Normal',
                    ],
                ],
                [
                    'name' => 'ZoneAffinityEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否支持连接服务的终端节点域名就近解析。取值：'."\n"
                            ."\n"
                            .'- **true**（默认值）：是。'."\n"
                            .'- **false**：否。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务所属的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
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
                            'description' => '标签列表。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '实例的标签键。最多支持20个标签键。一旦传入该值，则不允许为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'FinanceDept',
                                ],
                                'Value' => [
                                    'description' => '实例的标签值。最多支持20个标签值。一旦传入该值，可以为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'FinanceJoshua',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmy*****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Services' => [
                                'description' => '终端节点服务集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '终端节点服务集合。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AutoAcceptEnabled' => [
                                            'description' => '是否自动接受终端节点连接，取值：'."\n"
                                                ."\n"
                                                .'- **true**：自动接受终端节点连接。'."\n"
                                                ."\n"
                                                .'- **false**：不自动接受终端节点连接。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'ServiceId' => [
                                            'description' => '终端节点服务的ID。',
                                            'type' => 'string',
                                            'example' => 'epsrv-hp3vpx8yqxblby3i****',
                                        ],
                                        'CreateTime' => [
                                            'description' => '终端节点服务的创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-09-24T17:15:10Z',
                                        ],
                                        'MinBandwidth' => [
                                            'description' => '终端节点连接的最小带宽。单位：Mbps。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '100',
                                        ],
                                        'MaxBandwidth' => [
                                            'description' => '终端节点连接的最大带宽。单位：Mbps。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1024',
                                        ],
                                        'ServiceStatus' => [
                                            'description' => '终端节点服务的状态，取值：'."\n"
                                                ."\n"
                                                .'- **Creating**：创建中。'."\n"
                                                ."\n"
                                                .'- **Pending**：修改中。'."\n"
                                                ."\n"
                                                .'- **Active**：可用。'."\n"
                                                ."\n"
                                                .'- **Deleting**：删除中。',
                                            'type' => 'string',
                                            'example' => 'Active',
                                        ],
                                        'ZoneAffinityEnabled' => [
                                            'description' => '是否支持可用区就近解析，取值：'."\n"
                                                ."\n"
                                                .'- **true**：是。'."\n"
                                                .'- **false**：否。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'RegionId' => [
                                            'description' => '终端节点服务所属的地域。',
                                            'type' => 'string',
                                            'example' => 'cn-huhehaote',
                                        ],
                                        'ServiceDomain' => [
                                            'description' => '终端节点服务的服务域名。',
                                            'type' => 'string',
                                            'example' => 'epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com',
                                        ],
                                        'Payer' => [
                                            'description' => '付费方，取值：'."\n"
                                                ."\n"
                                                .'- **Endpoint**：服务使用方。'."\n"
                                                .'- **EndpointService**：服务提供方。',
                                            'type' => 'string',
                                            'example' => 'Endpoint',
                                        ],
                                        'ServiceBusinessStatus' => [
                                            'description' => '终端节点服务的业务状态，取值：'."\n"
                                                ."\n"
                                                .'- **Normal**：正常。'."\n"
                                                ."\n"
                                                .'- **FinancialLocked**：欠费锁定。',
                                            'type' => 'string',
                                            'example' => 'Normal',
                                        ],
                                        'ConnectBandwidth' => [
                                            'description' => '默认连接带宽峰值。单位：Mbps。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1024',
                                        ],
                                        'ServiceName' => [
                                            'description' => '终端节点服务的名称。',
                                            'type' => 'string',
                                            'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****',
                                        ],
                                        'ServiceDescription' => [
                                            'description' => '终端节点服务的描述信息。',
                                            'type' => 'string',
                                            'example' => 'This is my EndpointService.',
                                        ],
                                        'ServiceResourceType' => [
                                            'description' => '服务资源类型，取值：'."\n"
                                                ."\n"
                                                .'- **slb**：表示服务资源类型为传统型负载均衡CLB（Classic Load Balancer）。'."\n"
                                                ."\n"
                                                .'- **alb**：表示服务资源类型为应用型负载均衡ALB（Application Load Balancer）。'."\n"
                                                .'- **nlb** ：表示服务资源类型为网络型负载均衡NLB（Network Load Balancer ）。',
                                            'type' => 'string',
                                            'example' => 'slb',
                                        ],
                                        'ServiceType' => [
                                            'description' => '终端节点服务类型，取值：'."\n"
                                                ."\n"
                                                .'- **Interface**：表示**ServiceResourceType**为**slb**（传统型负载均衡CLB）、**alb**（应用型负载均衡ALB）、**nlb**（网络型负载均衡NLB）时的终端节点服务类型。',
                                            'type' => 'string',
                                            'example' => 'Interface',
                                        ],
                                        'ServiceSupportIPv6' => [
                                            'description' => '终端节点服务是否支持IPv6功能。取值：'."\n"
                                                ."\n"
                                                .'- **true**：是。'."\n"
                                                ."\n"
                                                .'- **false**：否。'."\n",
                                            'type' => 'boolean',
                                            'example' => 'false',
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
                                                        'example' => 'FinanceDept',
                                                    ],
                                                    'Value' => [
                                                        'description' => '实例的标签值。',
                                                        'type' => 'string',
                                                        'example' => 'FinanceJoshua',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-acfmy*****',
                                        ],
                                    ],
                                ],
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
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                            'MaxResults' => [
                                'description' => '分批次查询时每次显示的条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '12',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Services\\": [\\n    {\\n      \\"AutoAcceptEnabled\\": true,\\n      \\"ServiceId\\": \\"epsrv-hp3vpx8yqxblby3i****\\",\\n      \\"CreateTime\\": \\"2021-09-24T17:15:10Z\\",\\n      \\"MinBandwidth\\": 100,\\n      \\"MaxBandwidth\\": 1024,\\n      \\"ServiceStatus\\": \\"Active\\",\\n      \\"ZoneAffinityEnabled\\": true,\\n      \\"RegionId\\": \\"cn-huhehaote\\",\\n      \\"ServiceDomain\\": \\"epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com\\",\\n      \\"Payer\\": \\"Endpoint\\",\\n      \\"ServiceBusinessStatus\\": \\"Normal\\",\\n      \\"ConnectBandwidth\\": 1024,\\n      \\"ServiceName\\": \\"com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****\\",\\n      \\"ServiceDescription\\": \\"This is my EndpointService.\\",\\n      \\"ServiceResourceType\\": \\"slb\\",\\n      \\"ServiceType\\": \\"Interface\\",\\n      \\"ServiceSupportIPv6\\": false,\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"FinanceDept\\",\\n          \\"Value\\": \\"FinanceJoshua\\"\\n        }\\n      ],\\n      \\"ResourceGroupId\\": \\"rg-acfmy*****\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\",\\n  \\"MaxResults\\": 50,\\n  \\"TotalCount\\": 12\\n}","errorExample":""},{"type":"xml","example":"<ListVpcEndpointServicesResponse>\\n    <Services>\\n        <AutoAcceptEnabled>true</AutoAcceptEnabled>\\n        <ServiceId>epsrv-hp3vpx8yqxblby3i****</ServiceId>\\n        <CreateTime>2021-09-24T17:15:10Z</CreateTime>\\n        <MinBandwidth>100</MinBandwidth>\\n        <MaxBandwidth>1024</MaxBandwidth>\\n        <ServiceStatus>Active</ServiceStatus>\\n        <ZoneAffinityEnabled>true</ZoneAffinityEnabled>\\n        <RegionId>cn-huhehaote</RegionId>\\n        <ServiceDomain>epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com</ServiceDomain>\\n        <Payer>Endpoint</Payer>\\n        <ServiceBusinessStatus>Normal</ServiceBusinessStatus>\\n        <ConnectBandwidth>1024</ConnectBandwidth>\\n        <ServiceName>com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****</ServiceName>\\n        <ServiceDescription>This is my EndpointService.</ServiceDescription>\\n        <ServiceResourceType>slb</ServiceResourceType>\\n        <ServiceType>Interface</ServiceType>\\n        <ServiceSupportIPv6>false</ServiceSupportIPv6>\\n        <Tags>\\n            <Key>FinanceDept</Key>\\n            <Value>FinanceJoshua</Value>\\n        </Tags>\\n        <ResourceGroupId>rg-acfmy*****</ResourceGroupId>\\n    </Services>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n    <MaxResults>50</MaxResults>\\n</ListVpcEndpointServicesResponse>","errorExample":""}]',
            'title' => '查询终端节点服务列表',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteVpcEndpointService' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务所属的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => "\n"
                            .'客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => "\n"
                            .'是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会删除资源。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的终端节点服务的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务所属的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1',
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
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointServiceNotFound',
                        'errorMessage' => 'The specified Service does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceOperationDenied',
                        'errorMessage' => 'The specified operation of endpoint service is not allowed.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceDependenceViolation',
                        'errorMessage' => 'The specified EndpointService already contains a resource.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceConnectionDependence',
                        'errorMessage' => 'You cannot delete EndpointService with Endpoint connected.',
                    ],
                    [
                        'errorCode' => 'DeleteFailedDueToEndpointExist',
                        'errorMessage' => 'The specified EndpointService id deleted failed , due to EndpointExist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteVpcEndpointServiceResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</DeleteVpcEndpointServiceResponse>","errorExample":""}]',
            'title' => '删除终端节点服务',
            'summary' => '调用DeleteVpcEndpointService接口，删除终端节点服务。',
            'description' => '- 删除终端节点服务之前，请先断开终端节点连接并移除服务资源。'."\n"
                .'- **DeleteVpcEndpointService**接口属于异步接口，即系统会返回一个请求ID，但终端节点服务尚未删除，系统后台的删除任务仍在进行。您可以调用[GetVpcEndpointServiceAttribute](~~183542~~)查询终端节点服务的删除状态：'."\n"
                .'    - 当终端节点服务处于**Deleting**状态时，表示终端节点服务正在删除中。'."\n"
                .'  - 当查询不到该终端节点服务时，表示终端节点服务删除完成。'."\n"
                .'- **DeleteVpcEndpointService**接口不支持在同一个阿里云账号（主账号）下并发删除终端节点服务。',
        ],
        'AddUserToVpcEndpointService' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要添加服务白名单的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务白名单账号ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '132193271328****',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => "\n"
                            .'是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会添加服务白名单。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
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
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要添加服务白名单的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1',
                    ],
                ],
                [
                    'name' => 'UserARN',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ARN格式的用户白名单。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:ram:*:<account-id>:*',
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
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointServiceNotFound',
                        'errorMessage' => 'The specified Service does not exist.',
                    ],
                    [
                        'errorCode' => 'MissingParam.UserArn',
                        'errorMessage' => 'The param of UserArn is missing.',
                    ],
                    [
                        'errorCode' => 'Mismatch.UserIdAndUserArn',
                        'errorMessage' => 'The %s and %s are mismatched.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<AddUserToVpcEndpointServiceResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</AddUserToVpcEndpointServiceResponse>","errorExample":""}]',
            'title' => '添加服务白名单',
            'summary' => '调用AddUserToVpcEndpointService接口，为终端节点服务添加服务白名单。',
            'description' => '- 添加服务白名单之前，请确保终端节点服务处于**Active**状态，您可以通过调用[GetVpcEndpointServiceAttribute](~~469330~~)接口，查询终端节点服务状态。'."\n"
                .'- **AddUserToVpcEndpointService**接口不支持在同一个阿里云账号（主账号）下并发添加服务白名单。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListVpcEndpointServiceUsers' => [
            'summary' => '调用ListVpcEndpointServiceUsers接口，查询终端节点服务的服务白名单。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                        'description' => '要查询的终端节点服务所属的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                            .'- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，取值范围：**1~50**，默认值：**50**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '0',
                        'example' => '50',
                        'default' => '50',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务白名单阿里云账号ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '12345678',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的终端节点服务所属的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
                [
                    'name' => 'UserListType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务白名单用户列表类型：'."\n"
                            .'- Users'."\n"
                            .'- UserARNs',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Users',
                        'default' => 'Users',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    .'- 如果**NextToken**为空表示没有下一次查询。'."\n"
                                    .'- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'Users' => [
                                'description' => '服务白名单阿里云账号集合。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'UserId' => [
                                            'description' => '服务白名单阿里云账号ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '12345678',
                                        ],
                                    ],
                                ],
                            ],
                            'UserARNs' => [
                                'description' => 'ARN格式的用户白名单列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'UserARN' => [
                                            'description' => 'ARN格式的用户白名单。',
                                            'type' => 'string',
                                            'example' => 'acs:ram:*::*',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointServiceNotFound',
                        'errorMessage' => 'The specified Service does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a4883\\",\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\",\\n  \\"MaxResults\\": 50,\\n  \\"Users\\": [\\n    {\\n      \\"UserId\\": 12345678\\n    }\\n  ],\\n  \\"UserARNs\\": [\\n    {\\n      \\"UserARN\\": \\"acs:ram:*::*\\"\\n    }\\n  ],\\n  \\"TotalCount\\": \\"3\\"\\n}","errorExample":""},{"type":"xml","example":"<ListVpcEndpointServiceUsersResponse>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a4883</NextToken>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n    <MaxResults>50</MaxResults>\\n    <Users>\\n        <UserId>12345678</UserId>\\n    </Users>\\n    <UserARNs/>\\n</ListVpcEndpointServiceUsersResponse>","errorExample":""}]',
            'title' => '查询终端节点服务的服务白名单',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RemoveUserFromVpcEndpointService' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要移除服务白名单的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会移除服务白名单。检查项包括AccessKey是否有效、RAM用户的授权情况和是否填写了必需参数。如果检查不通过，则返回对应错误。如果检查通过，会返回错误码`DryRunOperation`。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回2xx HTTP状态码并直接移除服务白名单。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要移除的服务白名单中的账号ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '12345678',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要移除服务白名单的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1',
                    ],
                ],
                [
                    'name' => 'UserARN',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ARN格式的用户白名单。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:ram:*:<account-id>:*',
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
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointServiceNotFound',
                        'errorMessage' => 'The specified Service does not exist.',
                    ],
                    [
                        'errorCode' => 'MissingParam.UserArn',
                        'errorMessage' => 'The param of UserArn is missing.',
                    ],
                    [
                        'errorCode' => 'Mismatch.UserIdAndUserArn',
                        'errorMessage' => 'The %s and %s are mismatched.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveUserFromVpcEndpointServiceResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</RemoveUserFromVpcEndpointServiceResponse>","errorExample":""}]',
            'title' => '移除服务白名单',
            'summary' => '调用RemoveUserFromVpcEndpointService接口，移除终端节点服务的服务白名单。',
            'description' => '- 移除服务白名单之前，请确保终端节点服务处于**Active**状态，您可以通过调用[GetVpcEndpointServiceAttribute](~~469330~~)接口，查询终端节点服务状态。'."\n"
                .'- **RemoveUserFromVpcEndpointService**接口不支持在同一个终端节点服务ID下并发移除服务白名单。',
        ],
        'UpdateVpcEndpointServiceResourceAttribute' => [
            'summary' => '调用UpdateVpcEndpointServiceResourceAttribute接口，修改终端节点服务资源是否自动分配。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改服务资源的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => "\n"
                            .'是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会修改终端节点服务资源的相关属性。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务资源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lb-hp32z1wp5peaoox2q****',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务资源所属的可用区。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou-i',
                    ],
                ],
                [
                    'name' => 'AutoAllocatedEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否允许资源自动分配，取值：'."\n"
                            ."\n"
                            .'- **true**：允许资源自动分配。'."\n"
                            ."\n"
                            .'- **false**：不允许资源自动分配。',
                        'type' => 'boolean',
                        'required' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改服务资源的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
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
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointServiceNotFound',
                        'errorMessage' => 'The specified Service does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceLocked',
                        'errorMessage' => 'The specified Service is locked.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceOperationDenied',
                        'errorMessage' => 'The specified operation of endpoint service is not allowed.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceResourceNotFound',
                        'errorMessage' => 'The specified service resource is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceAutoAllocateViolation',
                        'errorMessage' => 'The specified endpoint service must have at least one automatically allocated resource in one zone.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateVpcEndpointServiceResourceAttributeResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</UpdateVpcEndpointServiceResourceAttributeResponse>","errorExample":""}]',
            'title' => '修改终端节点服务资源的属性',
            'description' => '- 修改终端节点服务资源的属性之前，请确保终端节点服务处于**Active**状态，您可以通过调用[GetVpcEndpointServiceAttribute](~~469330~~)接口，查询终端节点服务状态。'."\n"
                .'- **UpdateVpcEndpointServiceResourceAttribute**接口不支持在同一个终端节点服务ID下并发修改终端节点服务资源的相关属性。',
        ],
        'AttachResourceToVpcEndpointService' => [
            'summary' => '调用AttachResourceToVpcEndpointService接口，为终端节点服务添加服务资源。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要添加服务资源的终端节点服务所属的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务资源类型。取值：'."\n"
                            ."\n"
                            .'- **slb**：表示服务资源类型为传统型负载均衡CLB（Classic Load Balancer）。'."\n"
                            .'- **alb**：表示服务资源类型为应用型负载均衡ALB（Application Load Balancer）。'."\n"
                            .'- **nlb**：表示服务资源类型为网络型负载均衡NLB（Network Load Balancer ）。'."\n"
                            ."\n"
                            .'> 不支持访问NLB的TCPSSL类型监听。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'slb',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务资源ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'lb-hp32z1wp5peaoox2q****',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务资源所属的可用区。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou-j',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要添加服务资源的终端节点服务。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会添加服务资源。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
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
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要添加服务资源的终端节点服务所属的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
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
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointServiceNotFound',
                        'errorMessage' => 'The specified Service does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceOperationDenied',
                        'errorMessage' => 'The specified operation of endpoint service is not allowed.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceResourceExist',
                        'errorMessage' => 'The specified resource already exists.',
                    ],
                    [
                        'errorCode' => 'LoadBalancerNotFound',
                        'errorMessage' => 'The specified load balancer does not exist.',
                    ],
                    [
                        'errorCode' => 'LoadBalancerNotSupportPrivateLink',
                        'errorMessage' => 'The specified SLB does not support PrivateLink.',
                    ],
                    [
                        'errorCode' => 'AlbNotFound',
                        'errorMessage' => 'The specified Alb does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceResourceTypeNotSupport',
                        'errorMessage' => 'The specified resource type is not supported.',
                    ],
                    [
                        'errorCode' => 'QuotaMisMatched',
                        'errorMessage' => 'The resource you applied for has exceeded the quota.',
                    ],
                    [
                        'errorCode' => 'VSwitchNotFound',
                        'errorMessage' => 'The specified VSwitch does not exist.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.NatGateway',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                    [
                        'errorCode' => 'Mismatch.ResourceType',
                        'errorMessage' => 'The %s is mismatched for %s and %s.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceNotSupportedZone',
                        'errorMessage' => 'The specified endpoint service does not support the zone.',
                    ],
                    [
                        'errorCode' => 'ServiceResourceNotSupportIpv6',
                        'errorMessage' => 'The resource is not support ipv6.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceResourceTypeNotEqual',
                        'errorMessage' => 'the service resource type not equal request type.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<AttachResourceToVpcEndpointServiceResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</AttachResourceToVpcEndpointServiceResponse>","errorExample":""}]',
            'title' => '为终端节点服务添加服务资源',
            'description' => '- 为终端节点服务添加服务资源之前，请确保终端节点服务处于**Active**状态，您可以通过调用[GetVpcEndpointServiceAttribute](~~469330~~)接口，查询终端节点服务状态。'."\n"
                .'- **AttachResourceToVpcEndpointService**接口不支持在同一个终端节点服务实例下并发添加服务资源。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListVpcEndpointServiceResources' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                        'description' => '要查询的服务资源的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
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
                        'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**50**，默认值：**50**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '0',
                        'example' => '50',
                        'default' => '50',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的服务资源的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
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
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                            'MaxResults' => [
                                'description' => '分批次查询时每次显示的条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'Resources' => [
                                'description' => '服务资源信息集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务资源所属的VPC。',
                                    'type' => 'object',
                                    'properties' => [
                                        'VpcId' => [
                                            'description' => '服务资源所属的VPC。',
                                            'type' => 'string',
                                            'example' => 'vpc-hp356stwkxg3fn2xe****',
                                        ],
                                        'VSwitchId' => [
                                            'description' => '服务资源所属的交换机。',
                                            'type' => 'string',
                                            'example' => 'vsw-hp3uf6045ljdhd5zr****',
                                        ],
                                        'ResourceType' => [
                                            'description' => '服务资源的类型。'."\n"
                                                ."\n"
                                                .'- **slb**：表示服务资源类型为传统型负载均衡CLB（Classic Load Balancer）。'."\n"
                                                ."\n"
                                                .'- **alb**：表示服务资源类型为应用型负载均衡ALB（Application Load Balancer）。'."\n"
                                                ."\n"
                                                .'-  **nlb**：表示服务资源类型为网络型负载均衡NLB（Network Load Balancer ）。',
                                            'type' => 'string',
                                            'example' => 'slb',
                                        ],
                                        'ZoneId' => [
                                            'description' => '服务资源所属的可用区。',
                                            'type' => 'string',
                                            'example' => 'cn-huhehaote-b',
                                        ],
                                        'Ip' => [
                                            'description' => '服务资源的IP地址。',
                                            'type' => 'string',
                                            'example' => '192.168.10.23',
                                        ],
                                        'ResourceId' => [
                                            'description' => '服务资源ID。',
                                            'type' => 'string',
                                            'example' => 'lb-hp32z1wp5peaoox2q****',
                                        ],
                                        'RegionId' => [
                                            'description' => '服务资源所属的地域。',
                                            'type' => 'string',
                                            'example' => 'cn-huhehaote',
                                        ],
                                        'RelatedEndpointCount' => [
                                            'description' => '服务资源关联的终端节点的连接数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                        'RelatedDeprecatedEndpointCount' => [
                                            'description' => '平滑迁移场景下，作为被替换的服务资源关联的终端节点的连接数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                        'AutoAllocatedEnabled' => [
                                            'description' => '是否允许自动分配，取值：'."\n"
                                                ."\n"
                                                .'- **true**：是。'."\n"
                                                ."\n"
                                                .'- **false**：否。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'ResourceSupportIPv6' => [
                                            'description' => '终端节点服务是否支持IPv6功能。取值：'."\n"
                                                ."\n"
                                                .'- **true**：是。'."\n"
                                                ."\n"
                                                .'- **false**：否。'."\n",
                                            'type' => 'boolean',
                                            'example' => 'false',
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
                        'errorCode' => 'EndpointServiceNotFound',
                        'errorMessage' => 'The specified Service does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\",\\n  \\"MaxResults\\": 50,\\n  \\"Resources\\": [\\n    {\\n      \\"VpcId\\": \\"vpc-hp356stwkxg3fn2xe****\\",\\n      \\"VSwitchId\\": \\"vsw-hp3uf6045ljdhd5zr****\\",\\n      \\"ResourceType\\": \\"slb\\",\\n      \\"ZoneId\\": \\"cn-huhehaote-b\\",\\n      \\"Ip\\": \\"192.168.10.23\\",\\n      \\"ResourceId\\": \\"lb-hp32z1wp5peaoox2q****\\",\\n      \\"RegionId\\": \\"cn-huhehaote\\",\\n      \\"RelatedEndpointCount\\": 10,\\n      \\"RelatedDeprecatedEndpointCount\\": 10,\\n      \\"AutoAllocatedEnabled\\": false,\\n      \\"ResourceSupportIPv6\\": false\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListVpcEndpointServiceResourcesResponse>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n    <MaxResults>50</MaxResults>\\n    <Resources>\\n        <VpcId>vpc-hp356stwkxg3fn2xe****</VpcId>\\n        <VSwitchId>vsw-hp3uf6045ljdhd5zr****</VSwitchId>\\n        <ResourceType>slb</ResourceType>\\n        <ZoneId>cn-huhehaote-b</ZoneId>\\n        <Ip>192.168.10.23</Ip>\\n        <ResourceId>lb-hp32z1wp5peaoox2q****</ResourceId>\\n        <RegionId>cn-huhehaote</RegionId>\\n        <RelatedEndpointCount>10</RelatedEndpointCount>\\n        <RelatedDeprecatedEndpointCount>10</RelatedDeprecatedEndpointCount>\\n        <AutoAllocatedEnabled>false</AutoAllocatedEnabled>\\n        <ResourceSupportIPv6>false</ResourceSupportIPv6>\\n    </Resources>\\n</ListVpcEndpointServiceResourcesResponse>","errorExample":""}]',
            'title' => '查询终端节点服务中的服务资源',
            'summary' => '调用ListVpcEndpointServiceResources接口查询终端节点服务中的服务资源。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DetachResourceFromVpcEndpointService' => [
            'summary' => '调用DetachResourceFromVpcEndpointService接口，移除终端节点服务中的服务资源。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要移除服务资源的终端节点服务所属的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务资源类型，取值：'."\n"
                            ."\n"
                            .'- **slb**：表示服务资源类型为专有网络类型且支持PrivateLink功能的传统型负载均衡CLB（Classic Load Balancer）实例。'."\n"
                            ."\n"
                            .'- **alb**：表示服务资源类型为私网类型且支持PrivateLink功能的应用型负载均衡ALB（Application Load Balancer）实例。'."\n"
                            .' '."\n"
                            .'- **nlb**：表示服务资源类型为私网类型且支持PrivateLink功能的网络型负载均衡NLB（Network Load Balancer ）实例。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'slb',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务资源ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'lb-hp32z1wp5peaoox2q****',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要移除服务资源的终端节点服务所属的可用区。您可以通过调用[describeregions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou-c',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要移除服务资源的终端节点服务的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会移除服务资源。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
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
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要移除服务资源的终端节点服务所属的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
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
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointServiceNotFound',
                        'errorMessage' => 'The specified Service does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceConnectionDependence',
                        'errorMessage' => 'You cannot delete EndpointService with Endpoint connected.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceResourceNotFound',
                        'errorMessage' => 'The specified service resource is not found.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceResourceCannotRemove',
                        'errorMessage' => 'The service resource cannot be removed.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<DetachResourceFromVpcEndpointServiceResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</DetachResourceFromVpcEndpointServiceResponse>","errorExample":""}]',
            'title' => '移除终端节点服务中的服务资源',
            'description' => '- 移除终端节点服务中的服务资源之前，请确保终端节点服务处于**Active**状态，您可以通过调用[GetVpcEndpointServiceAttribute](~~469330~~)接口，查询终端节点服务状态。'."\n"
                .'- **DetachResourceFromVpcEndpointService**接口不支持在同一个终端节点服务实例下并发移除服务资源。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteVpcEndpoint' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的终端节点所属的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会删除终端节点。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'EndpointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的终端节点ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ep-hp33b2e43fays7s8****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的终端节点所属的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1',
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
                                'example' => '8D8992C1-6712-423C-BAC5-E5E817484C6B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.EndpointProtected',
                        'errorMessage' => 'The operation is not allowed because of EndpointProtected.',
                    ],
                    [
                        'errorCode' => 'EndpointOperationDenied',
                        'errorMessage' => 'The specified operation of endpoint is not allowed.',
                    ],
                    [
                        'errorCode' => 'EndpointDependenceViolation',
                        'errorMessage' => 'The specified endpoint has dependent zone(s).',
                    ],
                    [
                        'errorCode' => 'EndpointNotFound',
                        'errorMessage' => 'The specified Endpoint does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointProtected',
                        'errorMessage' => 'The specified Endpoint is protected.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8D8992C1-6712-423C-BAC5-E5E817484C6B\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteVpcEndpointResponse>\\n    <RequestId>8D8992C1-6712-423C-BAC5-E5E817484C6B</RequestId>\\n</DeleteVpcEndpointResponse>","errorExample":""}]',
            'title' => '删除终端节点',
            'summary' => '调用DeleteVpcEndpoint接口，删除终端节点。',
            'description' => '- 删除终端节点之前，请先删除终端节点中已添加的可用区。'."\n"
                .'- **DeleteVpcEndpoint**接口属于异步接口，即系统会返回一个请求ID，但该终端节点尚未删除完成，系统后台删除任务仍在进行中。您可以调用[GetVpcEndpointAttribute](~~183568~~)查询终端节点的删除状态：'."\n"
                ."\n"
                .'  - 当终端节点处于**Deleting**状态时，表示终端节点正在删除中。'."\n"
                .'  - 当查询不到指定的终端节点时，表示终端节点删除成功。',
        ],
        'CreateVpcEndpoint' => [
            'summary' => '调用CreateVpcEndpoint接口，创建终端节点。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点所在的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会创建终端节点。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'EndpointName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点名称。'."\n"
                            ."\n"
                            .'长度为2~128个字符，以英文字母或中文开头，可包含数字、短划线（-）和下划线（_）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'EndpointType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点类型。'."\n"
                            ."\n"
                            .'仅取值： **Interface**，表示接口终端节点，您可以添加应用型负载均衡ALB（Application Load Balancer）、传统型负载均衡CLB（Classic Load Balancer）和网络型负载均衡NLB（Network Load Balancer ）的服务资源类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Interface',
                    ],
                ],
                [
                    'name' => 'ZonePrivateIpAddressCount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每个可用区ENI的私网IP的数量。仅取值：**1**。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'EndpointDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点描述。'."\n"
                            ."\n"
                            .'描述长度为2~256个字符，开头不能为`http://`和`https://`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is my Endpoint.',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点所属的专有网络。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vpc-hp356stwkxg3fn2xe****',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点关联的终端节点服务。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'epsrv-hp3xdsq46ael67lo****',
                    ],
                ],
                [
                    'name' => 'ServiceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点关联的终端节点服务的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'Zone',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '终端节点可用区列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '当前地域下的可用区ID。'."\n"
                                ."\n"
                                .'系统将在您指定的可用区下创建资源。',
                            'type' => 'object',
                            'properties' => [
                                'VSwitchId' => [
                                    'description' => '在可用区内要创建终端节点网卡的交换机。'."\n"
                                        .'您最多可以设置10个交换机。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'vsw-hp3uf6045ljdhd5zr****',
                                ],
                                'ZoneId' => [
                                    'description' => '终端节点服务对应的可用区。'."\n"
                                        ."\n"
                                        .'您最多可以设置10个可用区。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-huhehaote-b',
                                ],
                                'ip' => [
                                    'description' => '指定终端节点可用区的IP。'."\n"
                                        ."\n"
                                        .'您最多可以指定10个IP。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '192.168.XX.XX',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'SecurityGroupId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '终端节点网卡关联的安全组列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '终端节点网卡关联的安全组，安全组可以管控VPC到终端节点网卡的数据通信。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'sg-bp1fg655nh68xyz9****',
                        ],
                        'required' => false,
                        'example' => 'sg-hp33bw6ynvm2yb0e****',
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'ProtectedEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启托管保护，STS调用方式下生效。取值：'."\n"
                            .' '."\n"
                            .'- **true**：开启。开启托管保护后，只有和创建时相同的用户才能通过STS方式对该终端节点进行修改或者删除等操作。'."\n"
                            .'- **false**（默认值）：不开启。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点所在的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表。'."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '标签列表。'."\n",
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'env',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'prod',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmy*****',
                    ],
                ],
                [
                    'name' => 'PolicyDocument',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM权限策略。关于策略定义的更多信息，请参见[权限策略基本元素](~~93738~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'  "Version": "1",'."\n"
                            .'  "Statement": ['."\n"
                            .'    {'."\n"
                            .'      "Effect": "Allow",'."\n"
                            .'      "Action": ['."\n"
                            .'        "oss:List*",'."\n"
                            .'        "oss:PutObject",'."\n"
                            .'        "oss:GetObject"'."\n"
                            .'      ],'."\n"
                            .'      "Resource": ['."\n"
                            .'        "acs:oss:oss-*:*:pvl-policy-test/policy-test.txt"'."\n"
                            .'      ],'."\n"
                            .'      "Principal": {'."\n"
                            .'        "RAM": ['."\n"
                            .'          "acs:ram::14199xxxxxx:*"'."\n"
                            .'        ]'."\n"
                            .'      }'."\n"
                            .'    }'."\n"
                            .'  ]'."\n"
                            .'}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'EndpointDomain' => [
                                'description' => '终端节点域名。',
                                'type' => 'string',
                                'example' => 'ep-hp33b2e43fays7s8****.epsrv-hp3xdsq46ael67lo****.cn-huhehaote.privatelink.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                            'CreateTime' => [
                                'description' => '终端节点的创建时间。',
                                'type' => 'string',
                                'example' => '2022-01-02T19:11:12Z',
                            ],
                            'EndpointBusinessStatus' => [
                                'description' => '终端节点的业务状态。取值：'."\n"
                                    ."\n"
                                    .'- **Normal**：正常。'."\n"
                                    ."\n"
                                    .'- **FinancialLocked**：欠费锁定。',
                                'type' => 'string',
                                'example' => 'Normal',
                            ],
                            'EndpointDescription' => [
                                'description' => '终端节点描述。',
                                'type' => 'string',
                                'example' => 'This is my Endpoint.',
                            ],
                            'ServiceId' => [
                                'description' => '终端节点关联的终端节点服务的ID。',
                                'type' => 'string',
                                'example' => 'epsrv-hp3vpx8yqxblby3i****',
                            ],
                            'EndpointStatus' => [
                                'description' => '终端节点状态。取值：'."\n"
                                    ."\n"
                                    .'- **Creating**：创建中。'."\n"
                                    ."\n"
                                    .'- **Active**：可用。'."\n"
                                    ."\n"
                                    .'- **Pending**：修改中。'."\n"
                                    ."\n"
                                    .'- **Deleting**：删除中。',
                                'type' => 'string',
                                'example' => 'Active',
                            ],
                            'VpcId' => [
                                'description' => '终端节点所属的专有网络。',
                                'type' => 'string',
                                'example' => 'vpc-hp356stwkxg3fn2xe****',
                            ],
                            'EndpointName' => [
                                'description' => '终端节点名称。',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'ServiceName' => [
                                'description' => '终端节点关联的终端节点服务的名称。',
                                'type' => 'string',
                                'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3xdsq46ael67lo****',
                            ],
                            'Bandwidth' => [
                                'description' => '终端节点的连接带宽，单位：Mbps。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'EndpointId' => [
                                'description' => '终端节点ID。',
                                'type' => 'string',
                                'example' => 'ep-hp33b2e43fays7s8****',
                            ],
                            'ConnectionStatus' => [
                                'description' => '终端节点连接状态。取值：'."\n"
                                    ."\n"
                                    .'- **Pending**：修改中。'."\n"
                                    ."\n"
                                    .'- **Connecting**：连接中。'."\n"
                                    ."\n"
                                    .'- **Connected**：已连接。'."\n"
                                    ."\n"
                                    .'- **Disconnecting**：断开连接中。'."\n"
                                    ."\n"
                                    .'- **Disconnected**：未连接。'."\n"
                                    ."\n"
                                    .'- **Deleting**：删除中。',
                                'type' => 'string',
                                'example' => 'Disconnected',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointExist',
                        'errorMessage' => 'The specified Endpoint already exists.',
                    ],
                    [
                        'errorCode' => 'EndpointZoneDuplicated',
                        'errorMessage' => 'The zone is duplicated for the Endpoint.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceNotFound',
                        'errorMessage' => 'The specified Service does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceNotSupportedZone',
                        'errorMessage' => 'The specified endpoint service does not support the zone.',
                    ],
                    [
                        'errorCode' => 'VSwitchNotFound',
                        'errorMessage' => 'The specified VSwitch does not exist.',
                    ],
                    [
                        'errorCode' => 'SecurityGroupNotFound',
                        'errorMessage' => 'The specified security group does not exist.',
                    ],
                    [
                        'errorCode' => 'VpcTunnelNotFound',
                        'errorMessage' => 'The specified VPC tunnel does not exist.',
                    ],
                    [
                        'errorCode' => 'VpcNotFound',
                        'errorMessage' => 'The specified VPC does not exist.',
                    ],
                    [
                        'errorCode' => 'GenerateResourceIdFailed',
                        'errorMessage' => 'Failed to generate ResourceId.',
                    ],
                    [
                        'errorCode' => 'QuotaMisMatched',
                        'errorMessage' => 'The resource you applied for has exceeded the quota.',
                    ],
                    [
                        'errorCode' => 'EndpointMustContainSecurityGroup',
                        'errorMessage' => 'The specified endpoint must have at least one security group.',
                    ],
                    [
                        'errorCode' => 'EndpointDuplicated',
                        'errorMessage' => 'The endpoint of the service already exists and cannot be created again.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceDeleted',
                        'errorMessage' => 'The specified Service is already deleted.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceResourceNotFound',
                        'errorMessage' => 'The specified service resource is not found.',
                    ],
                    [
                        'errorCode' => 'SecurityGroupTypeNotSupport',
                        'errorMessage' => 'The specified security group type is not supported.',
                    ],
                    [
                        'errorCode' => 'EniIpUnavailable',
                        'errorMessage' => 'The specified IP address is unavailable.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceNotAuthorized',
                        'errorMessage' => 'The specified endpoint service is not authorized to user.',
                    ],
                    [
                        'errorCode' => 'SecurityGroupTypeOnlySingleTypeSupporteded',
                        'errorMessage' => 'The specified security group only support one type.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.IpQuotaPerEp',
                        'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
                    ],
                    [
                        'errorCode' => 'Mismatch.EndpointType',
                        'errorMessage' => 'The %s is mismatched for %s and %s.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.VpcEndpointService',
                        'errorMessage' => 'The status of %s [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'CheckServiceLinkRoleError',
                        'errorMessage' => 'The ServiceLink role check error.',
                    ],
                    [
                        'errorCode' => 'ResourceNotEnough.VSwitchIp',
                        'errorMessage' => 'The specified resource of VSwitchIp is not enough.',
                    ],
                    [
                        'errorCode' => 'VSwitchStatusNotAllowed',
                        'errorMessage' => 'The specified vswitch status is not Available.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.epZonePerEndpoint',
                        'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.totalEpPerVpc',
                        'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.totalIdleEndpoint',
                        'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.EndpointPolicyNotSupport',
                        'errorMessage' => 'The operation is not allowed because of EndpointPolicyNotSupport.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.PrivateDomainStatusNotSupport',
                        'errorMessage' => 'The operation is not allowed because of %s.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.PrivateDomainNotSupport',
                        'errorMessage' => 'The operation is not allowed because of PrivateDomainNotSupport.',
                    ],
                    [
                        'errorCode' => 'DependencyViolation.PrivateDnsName',
                        'errorMessage' => 'The specified resource of %s depends on %s, so the operation cannot be completed.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"EndpointDomain\\": \\"ep-hp33b2e43fays7s8****.epsrv-hp3xdsq46ael67lo****.cn-huhehaote.privatelink.aliyuncs.com\\",\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\",\\n  \\"CreateTime\\": \\"2022-01-02T19:11:12Z\\",\\n  \\"EndpointBusinessStatus\\": \\"Normal\\",\\n  \\"EndpointDescription\\": \\"This is my Endpoint.\\",\\n  \\"ServiceId\\": \\"epsrv-hp3vpx8yqxblby3i****\\",\\n  \\"EndpointStatus\\": \\"Active\\",\\n  \\"VpcId\\": \\"vpc-hp356stwkxg3fn2xe****\\",\\n  \\"EndpointName\\": \\"test\\",\\n  \\"ServiceName\\": \\"com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3xdsq46ael67lo****\\",\\n  \\"Bandwidth\\": 200,\\n  \\"EndpointId\\": \\"ep-hp33b2e43fays7s8****\\",\\n  \\"ConnectionStatus\\": \\"Disconnected\\"\\n}","type":"json"}]',
            'title' => '创建终端节点',
            'description' => '**CreateVpcEndpoint**接口属于异步接口，即系统会返回一个实例ID，但该终端节点尚未创建完成，系统后台任务仍在进行中。您可以调用[GetVpcEndpointAttribute](~~183568~~)查询终端节点的创建状态：'."\n"
                ."\n"
                .'- 当终端节点处于**Creating**状态时，表示终端节点正在创建中。'."\n"
                .'- 当终端节点处于**Active**状态时，表示终端节点创建完成。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateVpcEndpointAttribute' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改的终端节点的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => "\n"
                            .'是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会修改终端节点属性。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'EndpointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改的终端节点ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ep-hp33b2e43fays7s8****',
                    ],
                ],
                [
                    'name' => 'EndpointName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点的名称。'."\n"
                            ."\n"
                            .'名称长度在2~128个字符之间，以英文字母或中文开头，可包含数字、短划线（-）和下划线（_）。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'EndpointDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点的描述。'."\n"
                            ."\n"
                            .'描述长度为2~256个字符，不能以`http://`和`https://`开头。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'This is my Endpoint.',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改的终端节点的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1',
                    ],
                ],
                [
                    'name' => 'PolicyDocument',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM权限策略。关于策略定义的更多信息，请参见[权限策略基本元素](~~93738~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'  "Version": "1",'."\n"
                            .'  "Statement": ['."\n"
                            .'    {'."\n"
                            .'      "Effect": "Allow",'."\n"
                            .'      "Action": ['."\n"
                            .'        "oss:List*",'."\n"
                            .'        "oss:PutObject",'."\n"
                            .'        "oss:GetObject"'."\n"
                            .'      ],'."\n"
                            .'      "Resource": ['."\n"
                            .'        "acs:oss:oss-*:*:pvl-policy-test/policy-test.txt"'."\n"
                            .'      ],'."\n"
                            .'      "Principal": {'."\n"
                            .'        "RAM": ['."\n"
                            .'          "acs:ram::14199xxxxxx:*"'."\n"
                            .'        ]'."\n"
                            .'      }'."\n"
                            .'    }'."\n"
                            .'  ]'."\n"
                            .'}',
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
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.EndpointProtected',
                        'errorMessage' => 'The operation is not allowed because of EndpointProtected.',
                    ],
                    [
                        'errorCode' => 'EndpointNotFound',
                        'errorMessage' => 'The specified Endpoint does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointOperationDenied',
                        'errorMessage' => 'The specified operation of endpoint is not allowed.',
                    ],
                    [
                        'errorCode' => 'EndpointLocked',
                        'errorMessage' => 'The specified Endpoint is locked.',
                    ],
                    [
                        'errorCode' => 'EndpointConnectionOperationDenied',
                        'errorMessage' => 'The endpoint is being connected.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceDeleted',
                        'errorMessage' => 'The specified Service is already deleted.',
                    ],
                    [
                        'errorCode' => 'EndpointProtected',
                        'errorMessage' => 'The specified Endpoint is protected.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.EndpointPolicyNotSupport',
                        'errorMessage' => 'The operation is not allowed because of EndpointPolicyNotSupport.',
                    ],
                    [
                        'errorCode' => 'DependencyViolation.PrivateDnsName',
                        'errorMessage' => 'The specified resource of %s depends on %s, so the operation cannot be completed.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.PrivateDomainStatusNotSupport',
                        'errorMessage' => 'The operation is not allowed because of %s.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.PrivateDomainNotSupport',
                        'errorMessage' => 'The operation is not allowed because of PrivateDomainNotSupport.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateVpcEndpointAttributeResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</UpdateVpcEndpointAttributeResponse>","errorExample":""}]',
            'title' => '修改终端节点的属性',
            'summary' => '调用UpdateVpcEndpointAttribute接口，修改终端节点的属性。',
            'description' => '**UpdateVpcEndpointAttribute**接口不支持在同一个阿里云账号（主账号）下并发修改终端节点的属性。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListVpcEndpoints' => [
            'summary' => '调用ListVpcEndpoints接口，查询终端节点列表。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                        'description' => '要查询的终端节点所属的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                            .'- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。取值范围：**1**~**50**。默认值：**50**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '0',
                        'example' => '50',
                        'default' => '50',
                    ],
                ],
                [
                    'name' => 'EndpointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的终端节点ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ep-hp33b2e43fays7s8****',
                    ],
                ],
                [
                    'name' => 'ServiceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的终端节点关联的终端节点服务名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点所属的专有网络。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-fdjkf789dfdfdfde****',
                    ],
                ],
                [
                    'name' => 'EndpointName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'EndpointType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点类型。'."\n"
                            ."\n"
                            .'仅取值： **Interface**，表示接口终端节点，您可以添加应用型负载均衡ALB（Application Load Balancer）、传统型负载均衡CLB（Classic Load Balancer）和网络型负载均衡NLB（Network Load Balancer ）的服务资源类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Interface',
                    ],
                ],
                [
                    'name' => 'EndpointStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点状态，取值：'."\n"
                            ."\n"
                            .'- **Creating**：创建中。'."\n"
                            ."\n"
                            .'- **Active**：可用。'."\n"
                            ."\n"
                            .'- **Pending**：修改中。'."\n"
                            ."\n"
                            .'- **Deleting**：删除中。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Active',
                    ],
                ],
                [
                    'name' => 'ConnectionStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点连接状态，取值：'."\n"
                            ."\n"
                            .'- **Pending**：修改中。'."\n"
                            ."\n"
                            .'- **Connecting**：连接中。'."\n"
                            ."\n"
                            .'- **Connected**：已连接。'."\n"
                            ."\n"
                            .'- **Disconnecting**：断开连接中。'."\n"
                            ."\n"
                            .'- **Disconnected**：未连接。'."\n"
                            ."\n"
                            .'- **Deleting**：删除中。'."\n"
                            ."\n"
                            .'- **ServiceDeleted**：终端节点对应的服务已删除。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Disconnected',
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
                            'description' => '标签列表。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '实例的标签键。最多支持20个标签键。一旦传入该值，则不允许为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'FinanceDept',
                                ],
                                'Value' => [
                                    'description' => '实例的标签值。最多支持20个标签值。一旦传入该值，可以为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'FinanceJoshua',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的终端节点所属的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Endpoints' => [
                                'description' => '终端节点信息集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '终端节点信息集合。',
                                    'type' => 'object',
                                    'properties' => [
                                        'VpcId' => [
                                            'description' => '终端节点所属的专有网络。',
                                            'type' => 'string',
                                            'example' => 'vpc-hp356stwkxg3fn2xe****',
                                        ],
                                        'EndpointName' => [
                                            'description' => '终端节点名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'EndpointType' => [
                                            'description' => '终端节点类型。'."\n"
                                                ."\n"
                                                .'仅取值： **Interface**，表示接口终端节点，您可以添加应用型负载均衡ALB（Application Load Balancer）、传统型负载均衡CLB（Classic Load Balancer）和网络型负载均衡NLB（Network Load Balancer ）的服务资源类型。',
                                            'type' => 'string',
                                            'example' => 'Interface',
                                        ],
                                        'CreateTime' => [
                                            'description' => '终端节点的创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-09-24T18:00:07Z',
                                        ],
                                        'ServiceId' => [
                                            'description' => '终端节点关联的终端节点服务的ID。',
                                            'type' => 'string',
                                            'example' => 'epsrv-hp3vpx8yqxblby3i****',
                                        ],
                                        'ZoneAffinityEnabled' => [
                                            'description' => '是否支持连接服务的终端节点域名就近解析。取值：'."\n"
                                                .'- **true**：是。'."\n"
                                                ."\n"
                                                .'- **false**：否。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'EndpointDomain' => [
                                            'description' => '终端节点域名。',
                                            'type' => 'string',
                                            'example' => 'ep-hp33b2e43fays7s8****.epsrv-hp3xdsq46ael67lo****.cn-huhehaote.privatelink.aliyuncs.com',
                                        ],
                                        'EndpointStatus' => [
                                            'description' => '终端节点状态，取值：'."\n"
                                                ."\n"
                                                .'- **Creating**：创建中。'."\n"
                                                ."\n"
                                                .'- **Active**：可用。'."\n"
                                                ."\n"
                                                .'- **Pending**：修改中。'."\n"
                                                ."\n"
                                                .'- **Deleting**：删除中。',
                                            'type' => 'string',
                                            'example' => 'Active',
                                        ],
                                        'RegionId' => [
                                            'description' => '终端节点所属的地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-huhehaote',
                                        ],
                                        'ResourceOwner' => [
                                            'description' => '终端节点和终端节点服务是否同一账号，取值：'."\n"
                                                ."\n"
                                                .'- **true**：是。'."\n"
                                                ."\n"
                                                .'- **false**：否。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Bandwidth' => [
                                            'description' => '终端节点的连接带宽，单位：Mbps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1024',
                                        ],
                                        'ConnectionStatus' => [
                                            'description' => '终端节点连接状态，取值：'."\n"
                                                ."\n"
                                                .'- **Pending**：修改中。'."\n"
                                                ."\n"
                                                .'- **Connecting**：连接中。'."\n"
                                                ."\n"
                                                .'- **Connected**：已连接。'."\n"
                                                ."\n"
                                                .'- **Disconnecting**：断开连接中。'."\n"
                                                ."\n"
                                                .'- **Disconnected**：未连接。'."\n"
                                                ."\n"
                                                .'- **Deleting**：删除中。'."\n"
                                                ."\n"
                                                .'- **ServiceDeleted**：终端节点对应的服务已删除。',
                                            'type' => 'string',
                                            'example' => 'Disconnected',
                                        ],
                                        'EndpointDescription' => [
                                            'description' => '终端节点描述。',
                                            'type' => 'string',
                                            'example' => 'This is my Endpoint.',
                                        ],
                                        'EndpointId' => [
                                            'description' => '终端节点ID。',
                                            'type' => 'string',
                                            'example' => 'ep-hp33b2e43fays7s8****',
                                        ],
                                        'EndpointBusinessStatus' => [
                                            'description' => '终端节点的业务状态。取值：'."\n"
                                                ."\n"
                                                .'- **Normal**：正常。'."\n"
                                                ."\n"
                                                .'- **FinancialLocked**：欠费锁定。',
                                            'type' => 'string',
                                            'example' => 'Normal',
                                        ],
                                        'ServiceName' => [
                                            'description' => '终端节点关联的终端节点服务的名称。',
                                            'type' => 'string',
                                            'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3xdsq46ael67lo****',
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
                                                        'example' => 'FinanceDept',
                                                    ],
                                                    'Value' => [
                                                        'description' => '实例的标签值。',
                                                        'type' => 'string',
                                                        'example' => 'FinanceJoshua',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源实例ID。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'PolicyDocument' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    .'- 如果**NextToken**为空表示没有下一次查询。'."\n"
                                    .'- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '12',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Endpoints\\": [\\n    {\\n      \\"VpcId\\": \\"vpc-hp356stwkxg3fn2xe****\\",\\n      \\"EndpointName\\": \\"test\\",\\n      \\"EndpointType\\": \\"Interface\\",\\n      \\"CreateTime\\": \\"2021-09-24T18:00:07Z\\",\\n      \\"ServiceId\\": \\"epsrv-hp3vpx8yqxblby3i****\\",\\n      \\"ZoneAffinityEnabled\\": true,\\n      \\"EndpointDomain\\": \\"ep-hp33b2e43fays7s8****.epsrv-hp3xdsq46ael67lo****.cn-huhehaote.privatelink.aliyuncs.com\\",\\n      \\"EndpointStatus\\": \\"Active\\",\\n      \\"RegionId\\": \\"cn-huhehaote\\",\\n      \\"ResourceOwner\\": true,\\n      \\"Bandwidth\\": 1024,\\n      \\"ConnectionStatus\\": \\"Disconnected\\",\\n      \\"EndpointDescription\\": \\"This is my Endpoint.\\",\\n      \\"EndpointId\\": \\"ep-hp33b2e43fays7s8****\\",\\n      \\"EndpointBusinessStatus\\": \\"Normal\\",\\n      \\"ServiceName\\": \\"com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3xdsq46ael67lo****\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"FinanceDept\\",\\n          \\"Value\\": \\"FinanceJoshua\\"\\n        }\\n      ],\\n      \\"ResourceGroupId\\": \\"1\\",\\n      \\"PolicyDocument\\": \\"\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\",\\n  \\"MaxResults\\": 50,\\n  \\"TotalCount\\": 12\\n}","errorExample":""},{"type":"xml","example":"<ListVpcEndpointsResponse>\\n    <Endpoints>\\n        <VpcId>vpc-hp356stwkxg3fn2xe****</VpcId>\\n        <EndpointName>test</EndpointName>\\n        <EndpointType>Interface</EndpointType>\\n        <CreateTime>2021-09-24T18:00:07Z</CreateTime>\\n        <ServiceId>epsrv-hp3vpx8yqxblby3i****</ServiceId>\\n        <ZoneAffinityEnabled>true</ZoneAffinityEnabled>\\n        <EndpointDomain>ep-hp33b2e43fays7s8****.epsrv-hp3xdsq46ael67lo****.cn-huhehaote.privatelink.aliyuncs.com</EndpointDomain>\\n        <EndpointStatus>Active</EndpointStatus>\\n        <RegionId>cn-huhehaote</RegionId>\\n        <ResourceOwner>true</ResourceOwner>\\n        <Bandwidth>1024</Bandwidth>\\n        <ConnectionStatus>Disconnected</ConnectionStatus>\\n        <EndpointDescription>This is my Endpoint.</EndpointDescription>\\n        <EndpointId>ep-hp33b2e43fays7s8****</EndpointId>\\n        <EndpointBusinessStatus>Normal</EndpointBusinessStatus>\\n        <ServiceName>com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3xdsq46ael67lo****</ServiceName>\\n        <Tags>\\n            <Key>FinanceDept</Key>\\n            <Value>FinanceJoshua</Value>\\n        </Tags>\\n        <ResourceGroupId>1</ResourceGroupId>\\n    </Endpoints>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a****</NextToken>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n    <MaxResults>50</MaxResults>\\n</ListVpcEndpointsResponse>","errorExample":""}]',
            'title' => '查询终端节点列表',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetVpcEndpointAttribute' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                        'description' => '获取属性信息的终端节点所属的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
                [
                    'name' => 'EndpointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取属性信息的终端节点ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ep-hp33b2e43fays7s8****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取属性信息的终端节点所属的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Payer' => [
                                'description' => '付费方。取值：'."\n"
                                    ."\n"
                                    .'- **Endpoint**：服务使用方。'."\n"
                                    ."\n"
                                    .'- **EndpointService**：服务提供方。',
                                'type' => 'string',
                                'example' => 'Endpoint',
                            ],
                            'EndpointDomain' => [
                                'description' => '终端节点域名。',
                                'type' => 'string',
                                'example' => 'ep-hp33b2e43fays7s8****.epsrv-hp3xdsq46ael67lo****.cn-huhehaote.privatelink.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8D8992C1-6712-423C-BAC5-E5E817484C6B',
                            ],
                            'CreateTime' => [
                                'description' => '终端节点的创建时间。',
                                'type' => 'string',
                                'example' => '2021-09-24T18:00:07Z',
                            ],
                            'ResourceOwner' => [
                                'description' => '终端节点和终端节点服务是否同一账号。取值：'."\n"
                                    ."\n"
                                    .'- **true**：是。'."\n"
                                    ."\n"
                                    .'- **false**：否。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'EndpointBusinessStatus' => [
                                'description' => '终端节点的业务状态。取值：'."\n"
                                    ."\n"
                                    .'- **Normal**：正常。'."\n"
                                    ."\n"
                                    .'- **FinancialLocked**：欠费锁定。',
                                'type' => 'string',
                                'example' => 'Normal',
                            ],
                            'EndpointDescription' => [
                                'description' => '终端节点描述。',
                                'type' => 'string',
                                'example' => 'This is my Endpoint.',
                            ],
                            'ServiceId' => [
                                'description' => '终端节点关联的终端节点服务的ID。',
                                'type' => 'string',
                                'example' => 'epsrv-hp3vpx8yqxblby3i****',
                            ],
                            'EndpointStatus' => [
                                'description' => '终端节点状态。取值：'."\n"
                                    ."\n"
                                    .'- **Creating**：创建中。'."\n"
                                    ."\n"
                                    .'- **Active**：可用。'."\n"
                                    ."\n"
                                    .'- **Pending**：修改中。'."\n"
                                    ."\n"
                                    .'- **Deleting**：删除中。',
                                'type' => 'string',
                                'example' => 'Active',
                            ],
                            'VpcId' => [
                                'description' => '终端节点所属的专有网络ID。',
                                'type' => 'string',
                                'example' => 'vpc-fdfhkjafhjvcvdjf****',
                            ],
                            'EndpointName' => [
                                'description' => '终端节点名称。',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'ZonePrivateIpAddressCount' => [
                                'description' => '每个可用区ENI的私网IP的数量。仅取值：**1**。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'EndpointType' => [
                                'description' => '终端节点类型。'."\n"
                                    ."\n"
                                    .'取值：**Interface**，表示接口终端节点，其中终端节点服务的服务资源类型为应用型负载均衡ALB（Application Load Balancer）、传统型负载均衡CLB（Classic Load Balancer）或网络型负载均衡NLB（Network Load Balancer ）。',
                                'type' => 'string',
                                'example' => 'Interface',
                            ],
                            'ServiceName' => [
                                'description' => '终端节点关联的终端节点服务的名称。',
                                'type' => 'string',
                                'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3xdsq46ael67lo****',
                            ],
                            'Bandwidth' => [
                                'description' => '终端节点的连接带宽。单位：Mbps。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1024',
                            ],
                            'EndpointId' => [
                                'description' => '终端节点ID。',
                                'type' => 'string',
                                'example' => 'ep-hp33b2e43fays7s8****',
                            ],
                            'RegionId' => [
                                'description' => '终端节点所属的地域ID。',
                                'type' => 'string',
                                'example' => 'cn-huhehaote',
                            ],
                            'ConnectionStatus' => [
                                'description' => '终端节点连接状态。取值：'."\n"
                                    ."\n"
                                    .'- **Pending**：修改中。'."\n"
                                    ."\n"
                                    .'- **Connecting**：连接中。'."\n"
                                    ."\n"
                                    .'- **Connected**：已连接。'."\n"
                                    ."\n"
                                    .'- **Disconnecting**：断开连接中。'."\n"
                                    ."\n"
                                    .'- **Disconnected**：未连接。'."\n"
                                    ."\n"
                                    .'- **Deleting**：删除中。'."\n"
                                    ."\n"
                                    .'- **ServiceDeleted**：对应的终端节点服务已删除。',
                                'type' => 'string',
                                'example' => 'Connected',
                            ],
                            'ZoneAffinityEnabled' => [
                                'description' => '是否支持连接服务的终端节点域名就近解析。取值：'."\n"
                                    ."\n"
                                    .'- **true**：是。'."\n"
                                    ."\n"
                                    .'- **false**：否。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ResourceGroupId' => [
                                'description' => '资源组ID。',
                                'type' => 'string',
                                'example' => 'rg-acfmz7nocpei***',
                            ],
                            'PolicyDocument' => [
                                'description' => 'RAM权限策略。关于策略定义的更多信息，请参见[权限策略基本元素](~~93738~~)。',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'  "Version": "1",'."\n"
                                    .'  "Statement": ['."\n"
                                    .'    {'."\n"
                                    .'      "Effect": "Allow",'."\n"
                                    .'      "Action": ['."\n"
                                    .'        "oss:List*",'."\n"
                                    .'        "oss:PutObject",'."\n"
                                    .'        "oss:GetObject"'."\n"
                                    .'      ],'."\n"
                                    .'      "Resource": ['."\n"
                                    .'        "acs:oss:oss-*:*:pvl-policy-test/policy-test.txt"'."\n"
                                    .'      ],'."\n"
                                    .'      "Principal": {'."\n"
                                    .'        "RAM": ['."\n"
                                    .'          "acs:ram::14199xxxxxx:*"'."\n"
                                    .'        ]'."\n"
                                    .'      }'."\n"
                                    .'    }'."\n"
                                    .'  ]'."\n"
                                    .'}',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointNotFound',
                        'errorMessage' => 'The specified Endpoint does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointConnectionNotFound',
                        'errorMessage' => 'The specified endpoint connection does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Payer\\": \\"Endpoint\\",\\n  \\"EndpointDomain\\": \\"ep-hp33b2e43fays7s8****.epsrv-hp3xdsq46ael67lo****.cn-huhehaote.privatelink.aliyuncs.com\\",\\n  \\"RequestId\\": \\"8D8992C1-6712-423C-BAC5-E5E817484C6B\\",\\n  \\"CreateTime\\": \\"2021-09-24T18:00:07Z\\",\\n  \\"ResourceOwner\\": true,\\n  \\"EndpointBusinessStatus\\": \\"Normal\\",\\n  \\"EndpointDescription\\": \\"This is my Endpoint.\\",\\n  \\"ServiceId\\": \\"epsrv-hp3vpx8yqxblby3i****\\",\\n  \\"EndpointStatus\\": \\"Active\\",\\n  \\"VpcId\\": \\"vpc-fdfhkjafhjvcvdjf****\\",\\n  \\"EndpointName\\": \\"test\\",\\n  \\"ZonePrivateIpAddressCount\\": 1,\\n  \\"EndpointType\\": \\"Interface\\",\\n  \\"ServiceName\\": \\"com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3xdsq46ael67lo****\\",\\n  \\"Bandwidth\\": 1024,\\n  \\"EndpointId\\": \\"ep-hp33b2e43fays7s8****\\",\\n  \\"RegionId\\": \\"cn-huhehaote\\",\\n  \\"ConnectionStatus\\": \\"Connected\\",\\n  \\"ZoneAffinityEnabled\\": true,\\n  \\"ResourceGroupId\\": \\"rg-acfmz7nocpei***\\",\\n  \\"PolicyDocument\\": \\"{\\\\n  \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\",\\\\n  \\\\\\"Statement\\\\\\": [\\\\n    {\\\\n      \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\",\\\\n      \\\\\\"Action\\\\\\": [\\\\n        \\\\\\"oss:List*\\\\\\",\\\\n        \\\\\\"oss:PutObject\\\\\\",\\\\n        \\\\\\"oss:GetObject\\\\\\"\\\\n      ],\\\\n      \\\\\\"Resource\\\\\\": [\\\\n        \\\\\\"acs:oss:oss-*:*:pvl-policy-test/policy-test.txt\\\\\\"\\\\n      ],\\\\n      \\\\\\"Principal\\\\\\": {\\\\n        \\\\\\"RAM\\\\\\": [\\\\n          \\\\\\"acs:ram::14199xxxxxx:*\\\\\\"\\\\n        ]\\\\n      }\\\\n    }\\\\n  ]\\\\n}\\"\\n}","errorExample":""},{"type":"xml","example":"<GetVpcEndpointAttributeResponse>\\n    <Payer>Endpoint</Payer>\\n    <EndpointDomain>ep-hp33b2e43fays7s8****.epsrv-hp3xdsq46ael67lo****.cn-huhehaote.privatelink.aliyuncs.com</EndpointDomain>\\n    <RequestId>8D8992C1-6712-423C-BAC5-E5E817484C6B</RequestId>\\n    <CreateTime>2021-09-24T18:00:07Z</CreateTime>\\n    <ResourceOwner>true</ResourceOwner>\\n    <EndpointBusinessStatus>Normal</EndpointBusinessStatus>\\n    <EndpointDescription>This is my Endpoint.</EndpointDescription>\\n    <ServiceId>epsrv-hp3vpx8yqxblby3i****</ServiceId>\\n    <EndpointStatus>Active</EndpointStatus>\\n    <VpcId>vpc-fdfhkjafhjvcvdjf****</VpcId>\\n    <EndpointName>test</EndpointName>\\n    <ZonePrivateIpAddressCount>1</ZonePrivateIpAddressCount>\\n    <EndpointType>Interface</EndpointType>\\n    <ServiceName>com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3xdsq46ael67lo****</ServiceName>\\n    <Bandwidth>1024</Bandwidth>\\n    <EndpointId>ep-hp33b2e43fays7s8****</EndpointId>\\n    <RegionId>cn-huhehaote</RegionId>\\n    <ConnectionStatus>Connected</ConnectionStatus>\\n    <ZoneAffinityEnabled>true</ZoneAffinityEnabled>\\n</GetVpcEndpointAttributeResponse>","errorExample":""}]',
            'title' => '获取终端节点属性信息',
            'summary' => '调用GetVpcEndpointAttribute接口，获取终端节点属性信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListVpcEndpointServicesByEndUser' => [
            'summary' => '调用ListVpcEndpointServicesByEndUser接口，查询已授权本账号创建终端节点时可以关联的终端节点服务。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                        'description' => '要查询的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
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
                        'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**50**，默认值：**50**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '0',
                        'example' => '50',
                        'default' => '50',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的终端节点服务的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'ServiceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的终端节点服务的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3xdsq46ael67lo****',
                    ],
                ],
                [
                    'name' => 'ServiceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务类型。'."\n"
                            ."\n"
                            .'仅取值：**Interface**，表示接口终端节点，您可以添加应用型负载均衡ALB（Application Load Balancer）、传统型负载均衡CLB（Classic Load Balancer）和网络型负载均衡NLB（Network Load Balancer ）的服务资源类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Interface',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '标签列表。'."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '标签列表。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '实例的标签键。最多支持20个标签键。一旦传入该值，则不允许为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'FinanceDept',
                                ],
                                'Value' => [
                                    'description' => '实例的标签值。最多支持20个标签值。一旦传入该值，可以为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'FinanceJoshua',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmy*****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Services' => [
                                'description' => '终端节点服务集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '终端节点服务集合。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Payer' => [
                                            'description' => '付费方，取值：'."\n"
                                                ."\n"
                                                .'- **Endpoint**：服务使用方。'."\n"
                                                ."\n"
                                                .'- **EndpointService**：服务提供方。',
                                            'type' => 'string',
                                            'example' => 'Endpoint',
                                        ],
                                        'ServiceDomain' => [
                                            'description' => '创建终端节点时可以关联的终端节点服务的域名。',
                                            'type' => 'string',
                                            'example' => 'epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com',
                                        ],
                                        'Zones' => [
                                            'description' => '创建终端节点时可以关联的终端节点服务的可用区集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '创建终端节点时可以关联的终端节点服务的可用区。',
                                                'type' => 'string',
                                                'example' => 'cn-huhehaote-a',
                                            ],
                                        ],
                                        'ServiceId' => [
                                            'description' => '创建终端节点时可以关联的终端节点服务的ID。',
                                            'type' => 'string',
                                            'example' => 'epsrv-hp3vpx8yqxblby3i****',
                                        ],
                                        'ServiceName' => [
                                            'description' => '创建终端节点时可以关联的终端节点服务的名称。',
                                            'type' => 'string',
                                            'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****',
                                        ],
                                        'ServiceType' => [
                                            'description' => '终端节点服务类型。'."\n"
                                                ."\n"
                                                .'仅取值： **Interface**，表示接口终端节点，您可以添加应用型负载均衡ALB（Application Load Balancer）、传统型负载均衡CLB（Classic Load Balancer）和网络型负载均衡NLB（Network Load Balancer ）的服务资源类型。',
                                            'type' => 'string',
                                            'example' => 'Interface',
                                        ],
                                        'ServiceSupportIPv6' => [
                                            'description' => '终端节点服务是否支持IPv6功能。取值：'."\n"
                                                ."\n"
                                                .'- **true**：是。'."\n"
                                                ."\n"
                                                .'- **false**：否。',
                                            'type' => 'boolean',
                                            'example' => 'false',
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
                                                        'example' => 'FinanceDept',
                                                    ],
                                                    'Value' => [
                                                        'description' => '实例的标签值。',
                                                        'type' => 'string',
                                                        'example' => 'FinanceJoshua',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-acfmy*****',
                                        ],
                                        'ServiceResourceType' => [
                                            'description' => '服务资源类型。'."\n"
                                                ."\n"
                                                .'- **slb**，表示服务资源类型为传统型负载均衡CLB（Classic Load Balancer）。'."\n"
                                                .'- **alb**，表示服务资源类型为应用型负载均衡ALB（Application Load Balancer）。'."\n"
                                                .'- **nlb**，表示服务资源类型为网络型负载均衡NLB（Network Load Balancer ）。',
                                            'type' => 'string',
                                            'example' => 'slb',
                                        ],
                                    ],
                                ],
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
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                            'MaxResults' => [
                                'description' => '分批次查询时每次显示的条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'string',
                                'example' => '29',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Services\\": [\\n    {\\n      \\"Payer\\": \\"Endpoint\\",\\n      \\"ServiceDomain\\": \\"epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com\\",\\n      \\"Zones\\": [\\n        \\"cn-huhehaote-a\\"\\n      ],\\n      \\"ServiceId\\": \\"epsrv-hp3vpx8yqxblby3i****\\",\\n      \\"ServiceName\\": \\"com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****\\",\\n      \\"ServiceType\\": \\"Interface\\",\\n      \\"ServiceSupportIPv6\\": false,\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"FinanceDept\\",\\n          \\"Value\\": \\"FinanceJoshua\\"\\n        }\\n      ],\\n      \\"ResourceGroupId\\": \\"rg-acfmy*****\\",\\n      \\"ServiceResourceType\\": \\"slb\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\",\\n  \\"MaxResults\\": 50,\\n  \\"TotalCount\\": \\"29\\"\\n}","errorExample":""},{"type":"xml","example":"<ListVpcEndpointServicesByEndUserResponse>\\n    <Services>\\n        <Payer>Endpoint</Payer>\\n        <ServiceDomain>epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com</ServiceDomain>\\n        <Zones>cn-huhehaote-a</Zones>\\n        <ServiceId>epsrv-hp3vpx8yqxblby3i****</ServiceId>\\n        <ServiceName>com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****</ServiceName>\\n        <ServiceType>Interface</ServiceType>\\n        <ServiceSupportIPv6>false</ServiceSupportIPv6>\\n        <Tags>\\n            <Key>FinanceDept</Key>\\n            <Value>FinanceJoshua</Value>\\n        </Tags>\\n    </Services>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n    <MaxResults>50</MaxResults>\\n</ListVpcEndpointServicesByEndUserResponse>","errorExample":""}]',
            'title' => '查询可以关联的终端节点服务',
            'description' => "\n",
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'EnableVpcEndpointConnection' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                'operationType' => 'update',
                'abilityTreeCode' => '16173',
                'abilityTreeNodes' => [
                    'FEATUREprivatelinkDB15J4',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要接受的终端节点连接的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会接受连接请求。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，会返回错误码`DryRunOperation`。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接接受连接请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'EndpointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ep-hp33b2e43fays7s8****',
                    ],
                ],
                [
                    'name' => 'Bandwidth',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点的连接带宽。单位：Mbps。取值范围：**3072~10240**。'."\n"
                            ."\n"
                            .'>终端节点的连接带宽取值范围为 **100~10240**，默认为**3072** Mbps，当终端节点与终端节点服务进行连接时，则取默认带宽值为最小带宽值，此时，取值范围为**3072~10240**。当传统型负载均衡CLB或应用型负载均衡ALB作为服务资源时，您可以根据实际业务需要修改终端节点连接带宽。网络型负载均衡NLB不支持限速。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '2147483647',
                        'minimum' => '0',
                        'example' => '3072',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要接受的终端节点连接的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
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
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointServiceNotFound',
                        'errorMessage' => 'The specified Service does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointConnectionNotFound',
                        'errorMessage' => 'The specified endpoint connection does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointConnectionOperationDenied',
                        'errorMessage' => 'The endpoint is being connected.',
                    ],
                    [
                        'errorCode' => 'EndpointOperationDenied',
                        'errorMessage' => 'The specified operation of endpoint is not allowed.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.NoAvailableServiceResource',
                        'errorMessage' => 'The operation is not allowed because of there are no resource in some available zones of endpoint service.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableVpcEndpointConnectionResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</EnableVpcEndpointConnectionResponse>","errorExample":""}]',
            'title' => '接受终端节点连接请求',
            'summary' => '调用EnableVpcEndpointConnection接口，终端节点服务接受终端节点的连接请求。',
            'description' => '- **EnableVpcEndpointConnection**接口属于异步接口，即系统会返回一个请求ID，但该终端节点服务连接尚未成功，系统后台的连接任务仍在进行。您可以调用[GetVpcEndpointAttribute](~~183568~~)接口查询终端节点服务连接状态：'."\n"
                ."\n"
                .'    - 当连接处于**Connecting**状态时，表示终端节点连接服务正在连接。'."\n"
                .'    - 当连接处于**Connected**状态时，表示终端节点连接服务连接成功。'."\n"
                ."\n"
                .'- **EnableVpcEndpointConnection**接口不支持在同一个阿里云账号（主账号）下并发接受终端节点连接请求。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateVpcEndpointConnectionAttribute' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改的终端节点连接带宽的地域ID。'."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会修改连接带宽。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'EndpointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ep-hp33b2e43fays7s8****',
                    ],
                ],
                [
                    'name' => 'Bandwidth',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改的终端节点的连接带宽。单位 Mbps。取值范围：**3072**~**10240**。'."\n"
                            ."\n"
                            .'> 终端节点的连接带宽取值范围为 **100**~**10240**，默认为**3072** Mbps，当终端节点与终端节点服务进行连接时，则取默认带宽值为最小带宽值，此时，取值范围为**3072**~**10240**。当传统型负载均衡CLB或应用型负载均衡ALB作为服务资源时，您可以根据实际业务需要修改终端节点连接带宽。网络型负载均衡NLB不支持限速。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '0',
                        'example' => '3072',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改的终端节点连接带宽的地域ID。'."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1',
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
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointServiceNotFound',
                        'errorMessage' => 'The specified Service does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointConnectionNotFound',
                        'errorMessage' => 'The specified endpoint connection does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointConnectionOperationDenied',
                        'errorMessage' => 'The endpoint is being connected.',
                    ],
                    [
                        'errorCode' => 'EndpointNotFound',
                        'errorMessage' => 'The specified Endpoint does not exist.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.VpcNatServiceResourceTypeNotSupportBandwidth',
                        'errorMessage' => 'The operation is not allowed because of VpcNatServiceResourceTypeNotSupportBandwidth.',
                    ],
                    [
                        'errorCode' => 'UpdateBandWidthUnSupported',
                        'errorMessage' => 'Bandwidth updates are not supported for this service.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateVpcEndpointConnectionAttributeResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</UpdateVpcEndpointConnectionAttributeResponse>","errorExample":""}]',
            'title' => '修改终端节点连接的属性',
            'summary' => '调用UpdateVpcEndpointConnectionAttribute接口，修改终端节点连接的属性。',
            'description' => '**UpdateVpcEndpointConnectionAttribute**接口不支持在同一个阿里云账号（主账号）下并发修改终端节点连接带宽。',
        ],
        'ListVpcEndpointConnections' => [
            'summary' => '调用ListVpcEndpointConnections接口，查询终端节点连接。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的终端节点连接的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                            .'- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。取值范围：**1**~**50**。默认值：**50**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '50',
                        'default' => '50',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'EniId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点网卡ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eni-hp32lk0pyv6o94hs****',
                    ],
                ],
                [
                    'name' => 'EndpointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'ep-hp33b2e43fays7s8****',
                    ],
                ],
                [
                    'name' => 'ConnectionStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点连接状态，取值：'."\n"
                            ."\n"
                            .'- **Pending**：修改中。'."\n"
                            ."\n"
                            .'- **Connecting**：连接中。'."\n"
                            ."\n"
                            .'- **Connected**：已连接。'."\n"
                            ."\n"
                            .'- **Disconnecting**：断开连接中。'."\n"
                            ."\n"
                            .'- **Disconnected**：未连接。'."\n"
                            ."\n"
                            .'- **Deleting**：删除中。'."\n"
                            ."\n"
                            .'- **ServiceDeleted**：对应的终端节点服务已删除。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'Disconnected',
                    ],
                ],
                [
                    'name' => 'EndpointOwnerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点所属的账号ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '25346073170691****',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务资源ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'lb-hp32z1wp5peaoox2q****',
                    ],
                ],
                [
                    'name' => 'ReplacedResourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '平滑迁移场景下被替换的服务资源ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'lb-hp32z1wp5peaoox2q****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的终端节点连接的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的终端节点所属的资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmy*****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Connections' => [
                                'description' => '终端节点连接信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '终端节点连接信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Zones' => [
                                            'description' => '可用区信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '	'."\n"
                                                    .'可用区信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'VSwitchId' => [
                                                        'description' => '终端节点所属的交换机。',
                                                        'type' => 'string',
                                                        'example' => 'vsw-hp3uf6045ljdhd5zr****',
                                                    ],
                                                    'ZoneId' => [
                                                        'description' => '可用区ID。',
                                                        'type' => 'string',
                                                        'example' => 'cn-huhehaote-b',
                                                    ],
                                                    'ResourceId' => [
                                                        'description' => '服务资源ID。',
                                                        'type' => 'string',
                                                        'example' => 'lb-hp32z1wp5peaoox2q****',
                                                    ],
                                                    'EniId' => [
                                                        'description' => '终端节点网卡ID。',
                                                        'type' => 'string',
                                                        'example' => 'eni-hp32lk0pyv6o94hs****',
                                                    ],
                                                    'ZoneDomain' => [
                                                        'description' => '可用区域名。',
                                                        'type' => 'string',
                                                        'example' => 'ep-hp34jaz8ykl0exwt****-cn-huhehaote.epsrv-hp3vpx8yqxblby3i****.cn-huhehaote-b.privatelink.aliyuncs.com',
                                                    ],
                                                    'ZoneStatus' => [
                                                        'description' => '可用区的状态。取值：'."\n"
                                                            .'- **Creating**：创建中。'."\n"
                                                            .'- **Wait**：等待连接。'."\n"
                                                            .'- **Connected**：已连接。'."\n"
                                                            .'- **Deleting**：删除中。'."\n"
                                                            .'- **Disconnecting**：断开连接中。'."\n"
                                                            .'- **Disconnected**：已断开。'."\n"
                                                            .'- **Connecting**：连接中。'."\n"
                                                            .'- **Migrating**：迁移中。'."\n"
                                                            .'- **Migrated**：已迁移。',
                                                        'type' => 'string',
                                                        'example' => 'Connected',
                                                    ],
                                                    'ReplacedResourceId' => [
                                                        'description' => '平滑迁移场景下被替换的服务资源ID。',
                                                        'type' => 'string',
                                                        'example' => 'lb-hp32z1wp5peaoox2q****',
                                                    ],
                                                    'ReplacedEniId' => [
                                                        'description' => '平滑迁移场景下被替换的终端节点网卡ID。',
                                                        'type' => 'string',
                                                        'example' => 'eni-hp32lk0pyv6o94hs****',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ModifiedTime' => [
                                            'description' => '连接修改时间。',
                                            'type' => 'string',
                                            'example' => '2021-09-28T10:34:46Z',
                                        ],
                                        'Bandwidth' => [
                                            'description' => '终端节点连接的连接带宽，单位：Mbps。取值范围：**1024~10240**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1024',
                                        ],
                                        'EndpointOwnerId' => [
                                            'description' => '终端节点所属的账号ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '25346073170691****',
                                        ],
                                        'ResourceOwner' => [
                                            'description' => '终端节点和终端节点服务是否同一账号，取值：'."\n"
                                                ."\n"
                                                .'- **true**：是。'."\n"
                                                ."\n"
                                                .'- **false**：否。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'ServiceId' => [
                                            'description' => '终端节点服务的ID。',
                                            'type' => 'string',
                                            'example' => 'epsrv-hp3vpx8yqxblby3i****',
                                        ],
                                        'ConnectionStatus' => [
                                            'description' => '终端节点连接状态，取值：'."\n"
                                                ."\n"
                                                .'- **Pending**：修改中。'."\n"
                                                ."\n"
                                                .'- **Connecting**：连接中。'."\n"
                                                ."\n"
                                                .'- **Connected**：已连接。'."\n"
                                                ."\n"
                                                .'- **Disconnecting**：断开连接中。'."\n"
                                                ."\n"
                                                .'- **Disconnected**：未连接。'."\n"
                                                ."\n"
                                                .'- **Deleting**：删除中。'."\n"
                                                ."\n"
                                                .'- **ServiceDeleted**：对应的终端节点服务已删除。',
                                            'type' => 'string',
                                            'example' => 'Disconnected',
                                        ],
                                        'EndpointId' => [
                                            'description' => '终端节点ID。',
                                            'type' => 'string',
                                            'example' => 'ep-hp33b2e43fays7s8****',
                                        ],
                                        'EndpointVpcId' => [
                                            'description' => '终端节点所属的专有网络。',
                                            'type' => 'string',
                                            'example' => 'vpc-hp356stwkxg3fn2xe****',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '终端节点所属的资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-acfmw353z35v***',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    .'- 如果**NextToken**为空表示没有下一次查询。'."\n"
                                    .'- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'TotalCount' => [
                                'description' => '查询到的终端节点连接列表条目数。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointServiceNotFound',
                        'errorMessage' => 'The specified Service does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Connections\\": [\\n    {\\n      \\"Zones\\": [\\n        {\\n          \\"VSwitchId\\": \\"vsw-hp3uf6045ljdhd5zr****\\",\\n          \\"ZoneId\\": \\"cn-huhehaote-b\\",\\n          \\"ResourceId\\": \\"lb-hp32z1wp5peaoox2q****\\",\\n          \\"EniId\\": \\"eni-hp32lk0pyv6o94hs****\\",\\n          \\"ZoneDomain\\": \\"ep-hp34jaz8ykl0exwt****-cn-huhehaote.epsrv-hp3vpx8yqxblby3i****.cn-huhehaote-b.privatelink.aliyuncs.com\\",\\n          \\"ZoneStatus\\": \\"Connected\\",\\n          \\"ReplacedResourceId\\": \\"lb-hp32z1wp5peaoox2q****\\",\\n          \\"ReplacedEniId\\": \\"eni-hp32lk0pyv6o94hs****\\"\\n        }\\n      ],\\n      \\"ModifiedTime\\": \\"2021-09-28T10:34:46Z\\",\\n      \\"Bandwidth\\": 1024,\\n      \\"EndpointOwnerId\\": 0,\\n      \\"ResourceOwner\\": true,\\n      \\"ServiceId\\": \\"epsrv-hp3vpx8yqxblby3i****\\",\\n      \\"ConnectionStatus\\": \\"Disconnected\\",\\n      \\"EndpointId\\": \\"ep-hp33b2e43fays7s8****\\",\\n      \\"EndpointVpcId\\": \\"vpc-hp356stwkxg3fn2xe****\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmw353z35v***\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a4883\\",\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\",\\n  \\"MaxResults\\": 50,\\n  \\"TotalCount\\": \\"1\\"\\n}","errorExample":""},{"type":"xml","example":"<ListVpcEndpointConnectionsResponse>\\n    <Connections>\\n        <ResourceOwner>true</ResourceOwner>\\n        <Zones>\\n            <VSwitchId>vsw-hp3uf6045ljdhd5zr****</VSwitchId>\\n            <ZoneId>cn-huhehaote-b</ZoneId>\\n            <ResourceId>lb-hp32z1wp5peaoox2q****</ResourceId>\\n            <EniId>eni-hp32lk0pyv6o94hs****</EniId>\\n            <ZoneDomain>ep-hp34jaz8ykl0exwt****-cn-huhehaote.epsrv-hp3vpx8yqxblby3i****.cn-huhehaote-b.privatelink.aliyuncs.com</ZoneDomain>\\n            <ZoneStatus>Connected</ZoneStatus>\\n            <ReplacedResourceId>lb-hp32z1wp5peaoox2q****</ReplacedResourceId>\\n            <ReplacedEniId>eni-hp32lk0pyv6o94hs****</ReplacedEniId>\\n            <ConnectionId>123</ConnectionId>\\n            <ConnectionStringId>12345</ConnectionStringId>\\n        </Zones>\\n        <ModifiedTime>2021-09-28T10:34:46Z</ModifiedTime>\\n        <Bandwidth>1024</Bandwidth>\\n        <ServiceId>epsrv-hp3vpx8yqxblby3i****</ServiceId>\\n        <ConnectionStatus>Disconnected</ConnectionStatus>\\n        <EndpointId>ep-hp33b2e43fays7s8****</EndpointId>\\n        <EndpointVpcId>vpc-hp356stwkxg3fn2xe****</EndpointVpcId>\\n    </Connections>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a4883</NextToken>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n    <MaxResults>50</MaxResults>\\n</ListVpcEndpointConnectionsResponse>","errorExample":""}]',
            'title' => '查询终端节点连接',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DisableVpcEndpointConnection' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要拒绝终端节点连接的地域ID。'."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会拒绝连接请求。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'EndpointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ep-hp33b2e43fays7s8****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要拒绝终端节点连接的地域ID。'."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1',
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
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointServiceNotFound',
                        'errorMessage' => 'The specified Service does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointConnectionNotFound',
                        'errorMessage' => 'The specified endpoint connection does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointConnectionOperationDenied',
                        'errorMessage' => 'The endpoint is being connected.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableVpcEndpointConnectionResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</DisableVpcEndpointConnectionResponse>","errorExample":""}]',
            'title' => '拒绝终端节点的连接请求',
            'summary' => '调用DisableVpcEndpointConnection接口，拒绝终端节点的连接请求。',
            'description' => '- **DisableVpcEndpointConnection**接口属于异步接口，即系统会返回一个请求ID，但该终端节点尚未断开完成，系统后台断开任务仍在进行中。您可以调用[GetVpcEndpointAttribute](~~183568~~)查询终端节点的断开状态：'."\n"
                ."\n"
                .'    - 当终端节点连接状态处于**Disconnecting**状态时，表示终端节点连接正在断开中。'."\n"
                .'    - 当终端节点连接状态处于**Disconnected**状态时，表示终端节点连接已断开。'."\n"
                ."\n"
                .'- **DisableVpcEndpointConnection**接口不支持在同一个阿里云账号（主账号）下并发拒绝终端节点的连接请求。',
        ],
        'AddZoneToVpcEndpoint' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要添加可用区的终端节点所属的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要添加的可用区ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou-b',
                    ],
                ],
                [
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要添加的可用区中的交换机，系统会自动在该交换机下创建一个终端节点网卡。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vsw-hjkshjvdkdvd****',
                    ],
                ],
                [
                    'name' => 'ip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要添加的可用区中的终端节点网卡的IP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.XX.XX.32',
                    ],
                ],
                [
                    'name' => 'EndpointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要添加可用区的终端节点的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ep-hp33b2e43fays7s8****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会添加可用区。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
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
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要添加可用区的终端节点所属的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
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
                                'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.EndpointProtected',
                        'errorMessage' => 'The operation is not allowed because of EndpointProtected.',
                    ],
                    [
                        'errorCode' => 'EndpointNotFound',
                        'errorMessage' => 'The specified Endpoint does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointOperationDenied',
                        'errorMessage' => 'The specified operation of endpoint is not allowed.',
                    ],
                    [
                        'errorCode' => 'EndpointLocked',
                        'errorMessage' => 'The specified Endpoint is locked.',
                    ],
                    [
                        'errorCode' => 'EndpointConnectionOperationDenied',
                        'errorMessage' => 'The endpoint is being connected.',
                    ],
                    [
                        'errorCode' => 'EndpointZoneDuplicated',
                        'errorMessage' => 'The zone is duplicated for the Endpoint.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceNotSupportedZone',
                        'errorMessage' => 'The specified endpoint service does not support the zone.',
                    ],
                    [
                        'errorCode' => 'QuotaMisMatched',
                        'errorMessage' => 'The resource you applied for has exceeded the quota.',
                    ],
                    [
                        'errorCode' => 'EndpointDuplicated',
                        'errorMessage' => 'The endpoint of the service already exists and cannot be created again.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceDeleted',
                        'errorMessage' => 'The specified Service is already deleted.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceResourceNotFound',
                        'errorMessage' => 'The specified service resource is not found.',
                    ],
                    [
                        'errorCode' => 'VSwitchNotFound',
                        'errorMessage' => 'The specified VSwitch does not exist.',
                    ],
                    [
                        'errorCode' => 'EniIpUnavailable',
                        'errorMessage' => 'The specified IP address is unavailable.',
                    ],
                    [
                        'errorCode' => 'EndpointProtected',
                        'errorMessage' => 'The specified Endpoint is protected.',
                    ],
                    [
                        'errorCode' => 'VSwitchStatusNotAllowed',
                        'errorMessage' => 'The specified vswitch status is not Available.',
                    ],
                    [
                        'errorCode' => 'VpcNatServiceException',
                        'errorMessage' => 'The vpcNat service is busy',
                    ],
                    [
                        'errorCode' => 'ResourceNotEnough.VSwitchIp',
                        'errorMessage' => 'The specified resource of VSwitchIp is not enough.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0c593ea1-3bea-11e9-b96b-88e9fe637760\\"\\n}","errorExample":""},{"type":"xml","example":"<AddZoneToVpcEndpointResponse>\\n    <RequestId>0c593ea1-3bea-11e9-b96b-88e9fe637760</RequestId>\\n</AddZoneToVpcEndpointResponse>","errorExample":""}]',
            'title' => '为终端节点添加可用区',
            'summary' => '调用AddZoneToVpcEndpoint接口，为终端节点添加可用区。',
            'description' => '- **AddZoneToVpcEndpoint**接口属于异步接口，即系统会返回一个请求ID，但终端节点可用区尚未添加完成，系统后台添加任务仍在进行中。您可以调用[ListVpcEndpointZones](~~183560~~)查询终端节点可用区的状态：'."\n"
                ."\n"
                .'    - 当终端节点可用区处于**Creating**状态时，表示终端节点可用区正在添加中。'."\n"
                .'    - 当在终端节点中可以查询到该可用区时，表示终端节点可用区添加完成。'."\n"
                ."\n"
                .'- **AddZoneToVpcEndpoint**接口不支持给同一个终端节点实例并发添加可用区。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListVpcEndpointZones' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                        'description' => '要查询的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                            .'- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**50**，默认值：**50**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '0',
                        'example' => '50',
                        'default' => '50',
                    ],
                ],
                [
                    'name' => 'EndpointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询可用区的终端节点ID。'."\n"
                            ."\n"
                            .'指定终端节点ID后，系统会查询该终端节点的可用区。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ep-hp33b2e43fays7s8****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
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
                                'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                            'MaxResults' => [
                                'description' => '分批次查询时每次显示的条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '12',
                            ],
                            'Zones' => [
                                'description' => '可用区信息集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '可用区信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'VSwitchId' => [
                                            'description' => '可用区中的交换机，系统会自动在该交换机下创建一个终端节点网卡。',
                                            'type' => 'string',
                                            'example' => 'vsw-hjkshjvdkdvd****',
                                        ],
                                        'EniIp' => [
                                            'description' => '终端节点网卡的IP地址。',
                                            'type' => 'string',
                                            'example' => '192.168.2.23',
                                        ],
                                        'ZoneStatus' => [
                                            'description' => '可用区状态，取值：'."\n"
                                                ."\n"
                                                .'- **Creating**：创建中。'."\n"
                                                .'- **Wait**：等待连接。'."\n"
                                                .'- **Connected**：已连接。'."\n"
                                                .'- **Deleting**：删除中。'."\n"
                                                .'- **Disconnecting**：断开连接中。'."\n"
                                                .'- **Disconnected**：已断开。'."\n"
                                                .'- **Connecting**：连接中。',
                                            'type' => 'string',
                                            'example' => 'Wait',
                                        ],
                                        'ZoneId' => [
                                            'description' => '可用区ID。',
                                            'type' => 'string',
                                            'example' => 'cn-huhehaote-a',
                                        ],
                                        'EniId' => [
                                            'description' => '终端节点网卡ID。',
                                            'type' => 'string',
                                            'example' => 'eni-hp3c8qj1tyct8aqy****',
                                        ],
                                        'ZoneDomain' => [
                                            'description' => '可用区域名。'."\n"
                                                ."\n"
                                                .'终端节点连接建立成功后，可以通过该可用区域名访问终端节点服务中的服务资源。',
                                            'type' => 'string',
                                            'example' => 'ep-hp3f033dp24c5yc9****-cn-huhehaote.epsrv-hp3itcpowf37m3d5****.cn-huhehaote-a.privatelink.aliyuncs.com',
                                        ],
                                        'RegionId' => [
                                            'description' => '终端节点所属的地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-huhehaote',
                                        ],
                                        'ZoneIpv6Address' => [
                                            'description' => '终端节点服务是否支持IPv6功能。取值：'."\n"
                                                ."\n"
                                                .'- **true**：是。'."\n"
                                                .'- **false**（默认值）：否。',
                                            'type' => 'string',
                                            'example' => 'false',
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
                        'errorCode' => 'EndpointNotFound',
                        'errorMessage' => 'The specified Endpoint does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a4883\\",\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\",\\n  \\"MaxResults\\": 50,\\n  \\"TotalCount\\": 12,\\n  \\"Zones\\": [\\n    {\\n      \\"VSwitchId\\": \\"vsw-hjkshjvdkdvd****\\",\\n      \\"EniIp\\": \\"192.168.2.23\\",\\n      \\"ZoneStatus\\": \\"Wait\\",\\n      \\"ZoneId\\": \\"cn-huhehaote-a\\",\\n      \\"EniId\\": \\"eni-hp3c8qj1tyct8aqy****\\",\\n      \\"ZoneDomain\\": \\"ep-hp3f033dp24c5yc9****-cn-huhehaote.epsrv-hp3itcpowf37m3d5****.cn-huhehaote-a.privatelink.aliyuncs.com\\",\\n      \\"RegionId\\": \\"cn-huhehaote\\",\\n      \\"ZoneIpv6Address\\": \\"false\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListVpcEndpointZonesResponse>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a4883</NextToken>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n    <MaxResults>50</MaxResults>\\n    <Zones>\\n        <VSwitchId>vsw-hjkshjvdkdvd****</VSwitchId>\\n        <EniIp>192.168.2.23</EniIp>\\n        <ZoneStatus>Wait</ZoneStatus>\\n        <ZoneId>cn-huhehaote-a</ZoneId>\\n        <ServiceStatus>Active</ServiceStatus>\\n        <EniId>eni-hp3c8qj1tyct8aqy****</EniId>\\n        <ZoneDomain>ep-hp3f033dp24c5yc9****-cn-huhehaote.epsrv-hp3itcpowf37m3d5****.cn-huhehaote-a.privatelink.aliyuncs.com</ZoneDomain>\\n        <RegionId>cn-huhehaote</RegionId>\\n        <ZoneIpv6Address>false</ZoneIpv6Address>\\n    </Zones>\\n</ListVpcEndpointZonesResponse>","errorExample":""}]',
            'title' => '查询终端节点可用区列表',
            'summary' => '调用ListVpcEndpointZones接口，查询终端节点可用区列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RemoveZoneFromVpcEndpoint' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除可用区的终端节点所属的地域ID。'."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的可用区ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1a',
                    ],
                ],
                [
                    'name' => 'EndpointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除可用区的终端节点ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ep-hp33b2e43fays7s8****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会删除可用区。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
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
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除可用区的终端节点所属的地域ID。'."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1',
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
                                'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.EndpointProtected',
                        'errorMessage' => 'The operation is not allowed because of EndpointProtected.',
                    ],
                    [
                        'errorCode' => 'EndpointNotFound',
                        'errorMessage' => 'The specified Endpoint does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointOperationDenied',
                        'errorMessage' => 'The specified operation of endpoint is not allowed.',
                    ],
                    [
                        'errorCode' => 'EndpointLocked',
                        'errorMessage' => 'The specified Endpoint is locked.',
                    ],
                    [
                        'errorCode' => 'EndpointConnectionOperationDenied',
                        'errorMessage' => 'The endpoint is being connected.',
                    ],
                    [
                        'errorCode' => 'EndpointZoneNotFound',
                        'errorMessage' => 'The specified zone of Endpoint does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointProtected',
                        'errorMessage' => 'The specified Endpoint is protected.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0c593ea1-3bea-11e9-b96b-88e9fe637760\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveZoneFromVpcEndpointResponse>\\n    <RequestId>0c593ea1-3bea-11e9-b96b-88e9fe637760</RequestId>\\n</RemoveZoneFromVpcEndpointResponse>","errorExample":""}]',
            'title' => '删除终端节点的可用区',
            'summary' => '调用RemoveZoneFromVpcEndpoint接口，删除终端节点的可用区。',
            'description' => '- **RemoveZoneFromVpcEndpoint**接口属于异步接口，即系统会返回一个请求ID，但终端节点可用区尚未删除完成，系统后台删除任务仍在进行中。您可以调用[ListVpcEndpointZones](~~183560~~)查询终端节点可用区的删除状态：'."\n"
                ."\n"
                .'    - 当终端节点可用区处于**Deleting**状态时，表示终端节点可用区正在删除中。'."\n"
                .'    - 当查询不到该终端节点可用区时，表示该终端节点可用区已删除。'."\n"
                ."\n"
                .'- **RemoveZoneFromVpcEndpoint**接口不支持给同一个终端节点实例并发删除可用区。',
        ],
        'DisableVpcEndpointZoneConnection' => [
            'summary' => '调用DisableVpcEndpointZoneConnection接口，断开终端节点可用区连接。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要拒绝终端节点连接的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会拒绝连接请求。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'EndpointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ep-hp33b2e43fays7s8****',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点连接可用区ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou-b',
                    ],
                ],
                [
                    'name' => 'ReplacedResource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否断开平滑迁移后的旧连接。取值：'."\n"
                            ."\n"
                            .'- **true**：是。'."\n"
                            ."\n"
                            .'- **false**（默认值）：否。'."\n"
                            ."\n"
                            .'> 在资源做平滑迁移后，断开终端节点在此可用区的旧的连接时选择此属性。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要拒绝终端节点连接的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
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
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointServiceNotFound',
                        'errorMessage' => 'The specified Service does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointConnectionNotFound',
                        'errorMessage' => 'The specified endpoint connection does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointConnectionOperationDenied',
                        'errorMessage' => 'The endpoint is being connected.',
                    ],
                    [
                        'errorCode' => 'IncorrectBusinessStatus.VpcEndpoint',
                        'errorMessage' => 'The business status of %s [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'IncorrectBusinessStatus.VpcEndpointService',
                        'errorMessage' => 'The business status of %s [%s]  is incorrect.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.VpcEndpoint',
                        'errorMessage' => 'The status of %s [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.VpcEndpointConnection',
                        'errorMessage' => 'The status of %s [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.VpcEndpointService',
                        'errorMessage' => 'The status of %s [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.VpcEndpointZone',
                        'errorMessage' => 'The status of %s [%s] is incorrect.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.VpcEndpoint',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.VpcEndpointConnection',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.VpcEndpointService',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.VpcEndpointZone',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableVpcEndpointZoneConnectionResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</DisableVpcEndpointZoneConnectionResponse>","errorExample":""}]',
            'title' => '断开终端节点可用区连接',
            'description' => '- 当终端节点连接状态为**已连接**且终端节点可用区状态为**已连接**或**已迁移**时，才能调用此接口。'."\n"
                .'- **DisableVpcEndpointZoneConnection**接口属于异步接口，即系统会返回一个请求ID，但终端节点在此可用区的连接请求尚未拒绝完成，系统后台拒绝任务仍在进行中。您可以调用[ListVpcEndpointZones](~~183560~~)查询终端节点可用区的连接请求状态：'."\n"
                ."\n"
                .'    - 当终端节点可用区处于**Disconnecting**状态时，表示连接请求正在断开中。'."\n"
                ."\n"
                .'    - 当终端节点可用区处于**Disconnected**状态时，表示连接请求断开完成。'."\n"
                ."\n"
                .'- **DisableVpcEndpointZoneConnection**接口不支持在同一个终端节点实例下并发拒绝终端节点在此可用区的连接请求。',
        ],
        'EnableVpcEndpointZoneConnection' => [
            'summary' => '调用EnableVpcEndpointZoneConnection接口，允许终端节点可用区连接。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要接受终端节点连接的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会接受连接请求。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'EndpointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ep-hp33b2e43fays7s8****',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点连接可用区ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou-b',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要接受终端节点连接的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
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
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointServiceNotFound',
                        'errorMessage' => 'The specified Service does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointConnectionNotFound',
                        'errorMessage' => 'The specified endpoint connection does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointConnectionOperationDenied',
                        'errorMessage' => 'The endpoint is being connected.',
                    ],
                    [
                        'errorCode' => 'EndpointOperationDenied',
                        'errorMessage' => 'The specified operation of endpoint is not allowed.',
                    ],
                    [
                        'errorCode' => 'IncorrectBusinessStatus.VpcEndpoint',
                        'errorMessage' => 'The business status of %s [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'IncorrectBusinessStatus.VpcEndpointService',
                        'errorMessage' => 'The business status of %s [%s]  is incorrect.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.VpcEndpoint',
                        'errorMessage' => 'The status of %s [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.VpcEndpointConnection',
                        'errorMessage' => 'The status of %s [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.VpcEndpointService',
                        'errorMessage' => 'The status of %s [%s] is incorrect.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.VpcEndpointZone',
                        'errorMessage' => 'The status of %s [%s] is incorrect.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.VpcEndpoint',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.VpcEndpointConnection',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.VpcEndpointService',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.VpcEndpointZone',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","type":"json"}]',
            'title' => '允许终端节点可用区连接',
            'description' => '- 当终端节点连接状态为**已连接**且终端节点可用区状态为**已断开**时，才能调用此接口。'."\n"
                .'- **EnableVpcEndpointZoneConnection**接口属于异步接口，即系统会返回一个请求ID，但尚未接受终端节点在此可用区的连接请求，系统后台接受任务仍在进行中。您可以调用[ListVpcEndpointZones](~~183560~~)查询终端节点可用区的连接请求状态：'."\n"
                ."\n"
                .'    - 当终端节点可用区处于**Connecting**状态时，表示连接请求正在接受中。'."\n"
                .'    - 当终端节点可用区处于**Connected**状态时，表示连接请求已接受。'."\n"
                ."\n"
                .'- **EnableVpcEndpointZoneConnection**接口不支持在同一个终端节点实例下并发接受可用区的连接请求。',
        ],
        'UpdateVpcEndpointZoneConnectionResourceAttribute' => [
            'summary' => '调用UpdateVpcEndpointZoneConnectionResourceAttribute接口，替换终端节点可用区连接服务资源。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改的终端节点连接带宽的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点服务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ],
                ],
                [
                    'name' => 'EndpointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ep-hp33b2e43fays7s8****',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可用区ID。',
                        'type' => 'string',
                        'required' => true,
                        'maximum' => '2147483647',
                        'minimum' => '0',
                        'example' => 'cn-hangzhou-b',
                    ],
                ],
                [
                    'name' => 'ResourceAllocateMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源分配模式，只能在终端节点连接处于**已断开**时调整资源分配模式。取值：'."\n"
                            ."\n"
                            .'- **Auto**：自动分配服务资源（随机分配），此时会清除已经指定的服务资源。'."\n"
                            ."\n"
                            .'- **Manual**：手动分配服务资源，此时必须输入**ResourceId**和**ResourceType**参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Auto',
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'ResourceReplaceMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务资源迁移方式。取值：'."\n"
                            ."\n"
                            .'- **Graceful**：平滑迁移，此时可用区连接平滑迁移服务资源。'."\n"
                            ."\n"
                            .'- **Force**：强制迁移，此时可用区连接强制迁移服务资源。'."\n"
                            ."\n\n"
                            .'>只能在终端节点连接处于**已连接**且需要迁移服务资源时输入此参数，此时必须输入**ResourceId**和**ResourceType**参数。 ',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Graceful',
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务资源类型。取值：'."\n"
                            ."\n"
                            .'- **slb**：表示服务资源类型为专有网络类型且支持PrivateLink功能的传统型负载均衡CLB（Classic Load Balancer）。'."\n"
                            ."\n"
                            .'-  **alb**：表示服务资源类型为专有网络类型且支持PrivateLink功能的应用型负载均衡ALB（Application Load Balancer）。'."\n"
                            ."\n"
                            .'> 当**ResourceAllocateMode**为**Manual**或指定**ResourceReplaceMode**参数时，此参数必选。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'slb',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端节点连接所在可用区手动分配或迁移的服务资源ID。'."\n"
                            ."\n"
                            .'> 当**ResourceAllocateMode**为**Manual**或指定**ResourceReplaceMode**参数时，此参数必选。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'lb-hp32z1wp5peaoox2q****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改的终端节点连接带宽的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
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
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointServiceNotFound',
                        'errorMessage' => 'The specified Service does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointConnectionNotFound',
                        'errorMessage' => 'The specified endpoint connection does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointConnectionOperationDenied',
                        'errorMessage' => 'The endpoint is being connected.',
                    ],
                    [
                        'errorCode' => 'EndpointNotFound',
                        'errorMessage' => 'The specified Endpoint does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceLocked',
                        'errorMessage' => 'The specified Service is locked.',
                    ],
                    [
                        'errorCode' => 'EndpointLocked',
                        'errorMessage' => 'The specified Endpoint is locked.',
                    ],
                    [
                        'errorCode' => 'EndpointZoneNotFound',
                        'errorMessage' => 'The specified zone of Endpoint does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceResourceTypeNotSupport',
                        'errorMessage' => 'The specified resource type is not supported.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceResourceNotFound',
                        'errorMessage' => 'The specified service resource is not found.',
                    ],
                    [
                        'errorCode' => 'ZoneOperationDenied',
                        'errorMessage' => 'You cannot operate the specified zone.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.ResourceAllocateMode',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.ResourceReplaceMode',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'MissingParam.ResourceId',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'MissingParam.ResourceAllocateMode',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.CurrentResourceAutoAllocated',
                        'errorMessage' => 'The operation is not allowed because of CurrentResourceAutoAllocated.',
                    ],
                    [
                        'errorCode' => 'Mismatch.ZoneId',
                        'errorMessage' => 'The %s is mismatched for %s and %s.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateVpcEndpointZoneConnectionResourceAttributeResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</UpdateVpcEndpointZoneConnectionResourceAttributeResponse>","errorExample":""}]',
            'title' => '替换终端节点可用区连接服务资源',
            'description' => '- 替换终端节点可用区连接服务资源的功能默认不开放，请登录[配额中心控制台](https://quotas.console.aliyun.com/white-list-products/privatelink/quotas)，搜索ID`privatelink_whitelist/svc_res_mgt_uat`进行申请。'."\n"
                ."\n"
                .'- 请确保旧的服务资源不允许自动分配，具体操作，请参见[UpdateVpcEndpointServiceResourceAttribute](~~469340~~)。'."\n"
                ."\n"
                .'- 终端节点连接处于**未连接**状态时，支持手动分配可用区的服务资源。'."\n"
                .'- 终端节点连接处于**已连接**状态后，支持手动迁移可用区的服务资源（此时有断连风险）。'."\n"
                .'- **UpdateVpcEndpointZoneConnectionResourceAttribute**接口属于异步接口，即系统会返回一个请求ID，但终端节点连接可用区的服务资源尚未修改完成，系统后台修改任务仍在进行中。您可以调用[GetVpcEndpointServiceAttribute](~~469330~~)查询服务资源的修改状态：'."\n"
                ."\n"
                .'    - 当终端节点服务处于**Pending**状态时，表示服务资源正在修改中。'."\n"
                .'    - 当终端节点服务处于**Active**状态时，表示服务资源修改完成。'."\n"
                ."\n"
                .'- **UpdateVpcEndpointZoneConnectionResourceAttribute**接口不支持在同一个终端节点实例下并发修改终端节点连接可用区的服务资源。',
        ],
        'AttachSecurityGroupToVpcEndpoint' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要加入安全组的终端节点所属的地域ID。'."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1',
                    ],
                ],
                [
                    'name' => 'SecurityGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要加入的安全组的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'sg-hp3c8qj1tyct90ej****',
                    ],
                ],
                [
                    'name' => 'EndpointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要加入安全组的终端节点的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ep-hp33b2e43fays7s8****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会加入安全组。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
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
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要加入安全组的终端节点所属的地域ID。'."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1',
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
                                'example' => '8D778FF9-7640-4C13-BCD6-9265CA9A2F81',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointNotFound',
                        'errorMessage' => 'The specified Endpoint does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointOperationDenied',
                        'errorMessage' => 'The specified operation of endpoint is not allowed.',
                    ],
                    [
                        'errorCode' => 'EndpointLocked',
                        'errorMessage' => 'The specified Endpoint is locked.',
                    ],
                    [
                        'errorCode' => 'EndpointConnectionOperationDenied',
                        'errorMessage' => 'The endpoint is being connected.',
                    ],
                    [
                        'errorCode' => 'SecurityGroupExist',
                        'errorMessage' => 'The specified security group already exists.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceDeleted',
                        'errorMessage' => 'The specified Service is already deleted.',
                    ],
                    [
                        'errorCode' => 'SecurityGroupNotFound',
                        'errorMessage' => 'The specified security group does not exist.',
                    ],
                    [
                        'errorCode' => 'SecurityGroupTypeNotSupport',
                        'errorMessage' => 'The specified security group type is not supported.',
                    ],
                    [
                        'errorCode' => 'SecurityGroupTypeOnlySingleTypeSupporteded',
                        'errorMessage' => 'The specified security group only support one type.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8D778FF9-7640-4C13-BCD6-9265CA9A2F81\\"\\n}","errorExample":""},{"type":"xml","example":"<AttachSecurityGroupToVpcEndpointResponse>\\n    <RequestId>8D778FF9-7640-4C13-BCD6-9265CA9A2F81</RequestId>\\n</AttachSecurityGroupToVpcEndpointResponse>","errorExample":""}]',
            'title' => '将终端节点加入安全组',
            'summary' => '调用AttachSecurityGroupToVpcEndpoint接口，将终端节点加入安全组。',
            'description' => '- **AttachSecurityGroupToVpcEndpoint**接口属于异步接口，即系统会返回一个请求ID，但终端节点加入安全组尚未完成，系统后台添加任务仍在进行中。您可以调用[ListVpcEndpoints](~~183558~~)查询终端节点的状态：'."\n"
                ."\n"
                .'    - 当终端节点处于**Pending**状态时，表示终端节点正在添加中。'."\n"
                .'    - 当终端节点处于**Active**状态时，表示终端节点添加完成。'."\n"
                ."\n"
                .'- **AttachSecurityGroupToVpcEndpoint**接口不支持将同一个终端节点实例并发加入安全组。',
        ],
        'ListVpcEndpointSecurityGroups' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                        'description' => '要查询的终端节点所属的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                            .'- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，取值范围：**1**~**50**，默认值：**50**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '50',
                        'minimum' => '0',
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'EndpointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的终端节点的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ep-hp33b2e43fays7s8****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的终端节点所属的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SecurityGroups' => [
                                'description' => '安全组信息集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '安全组信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'SecurityGroupId' => [
                                            'description' => '终端节点已加入的安全组ID。',
                                            'type' => 'string',
                                            'example' => 'sg-hp33bw6ynvm2yb0e****',
                                        ],
                                        'SecurityGroupStatus' => [
                                            'description' => '安全组关联状态，取值：'."\n"
                                                .'- Attaching：关联中。'."\n"
                                                .'- Attached：已关联。'."\n"
                                                .'- Detaching：分离中。',
                                            'type' => 'string',
                                            'example' => 'Attached',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    .'- 如果**NextToken**为空表示没有下一次查询。'."\n"
                                    .'- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '12',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EndpointNotFound',
                        'errorMessage' => 'The specified Endpoint does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SecurityGroups\\": [\\n    {\\n      \\"SecurityGroupId\\": \\"sg-hp33bw6ynvm2yb0e****\\",\\n      \\"SecurityGroupStatus\\": \\"Attached\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a4883\\",\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\",\\n  \\"MaxResults\\": 50,\\n  \\"TotalCount\\": 12\\n}","errorExample":""},{"type":"xml","example":"<ListVpcEndpointSecurityGroupsResponse>\\n    <SecurityGroups>\\n        <SecurityGroupId>sg-hp33bw6ynvm2yb0e****</SecurityGroupId>\\n    </SecurityGroups>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a4883</NextToken>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n    <MaxResults>50</MaxResults>\\n</ListVpcEndpointSecurityGroupsResponse>","errorExample":""}]',
            'title' => '查询终端节点已加入的安全组',
            'summary' => '调用ListVpcEndpointSecurityGroups接口，查询终端节点已加入的安全组。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DetachSecurityGroupFromVpcEndpoint' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要移除安全组的终端节点所属的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1',
                    ],
                ],
                [
                    'name' => 'SecurityGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要移除的安全组的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'sg-hp3c8qj1tyct90ej****',
                    ],
                ],
                [
                    'name' => 'EndpointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要移除安全组的终端节点的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ep-hp33b2e43fays7s8****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会将终端节点移除安全组。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
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
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要移除安全组的终端节点所属的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'eu-west-1',
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
                                'example' => '8D778FF9-7640-4C13-BCD6-9265CA9A2F81',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SecurityGroupNotFound',
                        'errorMessage' => 'The specified security group does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointMustContainSecurityGroup',
                        'errorMessage' => 'The specified endpoint must have at least one security group.',
                    ],
                    [
                        'errorCode' => 'EndpointNotFound',
                        'errorMessage' => 'The specified Endpoint does not exist.',
                    ],
                    [
                        'errorCode' => 'EndpointOperationDenied',
                        'errorMessage' => 'The specified operation of endpoint is not allowed.',
                    ],
                    [
                        'errorCode' => 'EndpointLocked',
                        'errorMessage' => 'The specified Endpoint is locked.',
                    ],
                    [
                        'errorCode' => 'EndpointConnectionOperationDenied',
                        'errorMessage' => 'The endpoint is being connected.',
                    ],
                    [
                        'errorCode' => 'EndpointServiceDeleted',
                        'errorMessage' => 'The specified Service is already deleted.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8D778FF9-7640-4C13-BCD6-9265CA9A2F81\\"\\n}","errorExample":""},{"type":"xml","example":"<DetachSecurityGroupFromVpcEndpointResponse>\\n    <RequestId>8D778FF9-7640-4C13-BCD6-9265CA9A2F81</RequestId>\\n</DetachSecurityGroupFromVpcEndpointResponse>","errorExample":""}]',
            'title' => '将终端节点移除安全组',
            'summary' => '调用DetachSecurityGroupFromVpcEndpoint接口，将终端节点移除安全组。',
            'description' => '- **DetachSecurityGroupFromVpcEndpoint**接口属于异步接口，即系统会返回一个请求ID，但终端节点尚未从安全组中移除，系统后台的移除任务仍在进行。您可以调用[ListVpcEndpoints](~~183558~~)查询终端节点的移除状态：'."\n"
                .'    '."\n"
                .'    - 当终端节点处于**Pending**状态时，表示终端节点正在移除中。'."\n"
                .'    -  当在安全组中查询不到该终端节点时，表示终端节点移除完成。'."\n"
                ."\n"
                .'- **DetachSecurityGroupFromVpcEndpoint**接口不支持将同一个终端节点实例并发移除安全组。',
        ],
        'UntagResources' => [
            'summary' => '当您不需要标识一个或多个终端节点或终端节点服务时，可调用UntagResources接口，为指定的资源列表统一解绑标签。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceId',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '资源ID列表。最多支持50个资源ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ep-hp3i05294c2****',
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '要解绑的标签键列表。最多支持20个标签键。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要解绑的标签键。一旦传入该值，则不允许为空字符串。'."\n"
                                ."\n"
                                .'一个标签键最多支持64个字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-），不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'FinanceDept',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源类型。取值：'."\n"
                            ."\n"
                            .'- **vpcendpoint**：终端节点。                                '."\n"
                            ."\n"
                            .'- **vpcendpointservice**：终端节点服务。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpcendpoint',
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否解绑资源上全部的标签，取值：'."\n"
                            ."\n"
                            .'- **true**：解绑资源上的全部标签。'."\n"
                            ."\n"
                            .'- **false**：不解绑全部标签。'."\n"
                            ."\n"
                            .'> 如果同时设置了**TagKey**和本参数，则本参数不生效。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会解绑标签。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回`HTTP 2xx`状态码并直接进行操作。',
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
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[describeregions](~~36063~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[describeregions](~~36063~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'TagInfoNotExist',
                        'errorMessage' => 'Tag info not exist',
                    ],
                    [
                        'errorCode' => 'DuplicatedTagKey',
                        'errorMessage' => 'The tag keys is duplicated.',
                    ],
                    [
                        'errorCode' => 'IllegalTagKeyParam',
                        'errorMessage' => 'IllegalTagKeyParam',
                    ],
                    [
                        'errorCode' => 'IllegalTagValueParam',
                        'errorMessage' => 'The tag value is Illegal.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceId.NotFound',
                        'errorMessage' => 'The specified ResourceIds are not found in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","type":"json"}]',
            'title' => '为指定的资源列表统一解绑标签',
        ],
        'ListTagResources' => [
            'summary' => '当您需要查询资源标签时，可调用ListTagResources接口，查询资源已经绑定的标签列表。',
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
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '资源ID列表。最多支持50个资源ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '服务资源ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ep-hp3i05294c2d2d******',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型。取值：'."\n"
                            ."\n"
                            .'- **vpcendpoint**：终端节点。                                '."\n"
                            ."\n"
                            .'- **vpcendpointservice**：终端节点服务。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpcendpoint',
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
                            'description' => '资源的标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '资源的标签键。最多支持20个标签键。一旦传入该值，则不允许为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持64个字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-），不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'FinanceDept',
                                ],
                                'Value' => [
                                    'description' => '资源的标签值。最多支持20个标签值。一旦传入该值，可以为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-），不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'FinanceJoshua',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源所属的地域ID。您可以通过调用[describeregions](~~120468~~)接口获取地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
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
                        'example' => 'caeba0bbb2be03f84eb48b699f0a****',
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
                                'example' => '8D8992C1-6712-423C-BAC5-E5E817484C6B',
                            ],
                            'TagResources' => [
                                'description' => '绑定标签的资源信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '绑定标签的资源信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TagKey' => [
                                            'description' => '标签键。',
                                            'type' => 'string',
                                            'example' => 'endpoint',
                                        ],
                                        'TagValue' => [
                                            'description' => '标签值。',
                                            'type' => 'string',
                                            'example' => 'FinanceJoshua',
                                        ],
                                        'ResourceId' => [
                                            'description' => '资源ID。',
                                            'type' => 'string',
                                            'example' => 'ep-hp3i05294c2d2d******',
                                        ],
                                        'ResourceType' => [
                                            'description' => '资源类型。取值：'."\n"
                                                ."\n"
                                                .'- **vpcendpoint**：终端节点。                                '."\n"
                                                ."\n"
                                                .'- **vpcendpointservice**：终端节点服务。',
                                            'type' => 'string',
                                            'example' => 'vpcendpoint',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    ."\n"
                                    .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                                    ."\n"
                                    .'- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DuplicatedTagKey',
                        'errorMessage' => 'The tag keys is duplicated.',
                    ],
                    [
                        'errorCode' => 'MissingTagKeyParam',
                        'errorMessage' => 'The tag key is empty.',
                    ],
                    [
                        'errorCode' => 'MissingTagValueParam',
                        'errorMessage' => 'The tag value is empty.',
                    ],
                    [
                        'errorCode' => 'MissingResourceIdOrTagParam',
                        'errorMessage' => 'The resource id and tag is empty.',
                    ],
                    [
                        'errorCode' => 'IllegalTagKeyParam',
                        'errorMessage' => 'IllegalTagKeyParam',
                    ],
                    [
                        'errorCode' => 'IllegalTagValueParam',
                        'errorMessage' => 'The tag value is Illegal.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8D8992C1-6712-423C-BAC5-E5E817484C6B\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"TagKey\\": \\"endpoint\\",\\n      \\"TagValue\\": \\"FinanceJoshua\\",\\n      \\"ResourceId\\": \\"ep-hp3i05294c2d2d******\\",\\n      \\"ResourceType\\": \\"vpcendpoint\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a4883\\"\\n}","type":"json"}]',
            'title' => '查询资源已经绑定的标签列表',
            'description' => '- 请求中至少指定参数**ResourceId.N**或**Tag.N**（**Tag.N.Key**与**Tag.N.Value**），以确定检索对象。'."\n"
                ."\n"
                .'- **Tag.N**是资源的标签，由一个键值对组成。仅指定**Tag.N.Key**时，则返回该标签键关联的所有标签值。仅指定**Tag.N.Value**会报错。'."\n"
                ."\n"
                .'- 如果您同时指定**Tag.N**和**ResourceId.N**筛选标签，则**ResourceId.N**必须满足所有输入的标签键值对。'."\n"
                ."\n"
                .'- 如果您同时指定多个标签键值对，返回结果为同时包含被指定的多个键值对的资源。',
        ],
        'TagResources' => [
            'summary' => '当您需要标识一个或多个终端节点或终端节点服务时，可调用TagResources接口，为指定的资源列表统一绑定标签。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceId',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '资源ID列表。最多支持50个资源ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ep-ba16baebdf35641a1****',
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源的标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '实例的标签键。最多支持20个标签键。一旦传入该值，则不允许为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'FinanceDept',
                                ],
                                'Value' => [
                                    'description' => '实例的标签值。最多支持20个标签值。一旦传入该值，可以为空字符串。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'FinanceJoshua',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源类型。取值：'."\n"
                            ."\n"
                            .'- **vpcendpoint**：终端节点。                                '."\n"
                            ."\n"
                            .'- **vpcendpointservice**：终端节点服务。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpcendpoint',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会创建并绑定标签。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
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
                        'description' => '私网连接实例所在的地域ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRegions](~~120468~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
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
                        'errorCode' => 'MissingTagKeyParam',
                        'errorMessage' => 'The tag key is empty.',
                    ],
                    [
                        'errorCode' => 'MissingTagValueParam',
                        'errorMessage' => 'The tag value is empty.',
                    ],
                    [
                        'errorCode' => 'IllegalTagKeyParam',
                        'errorMessage' => 'IllegalTagKeyParam',
                    ],
                    [
                        'errorCode' => 'IllegalTagValueParam',
                        'errorMessage' => 'The tag value is Illegal.',
                    ],
                    [
                        'errorCode' => 'DuplicatedTagKey',
                        'errorMessage' => 'The tag keys is duplicated.',
                    ],
                    [
                        'errorCode' => 'QuotaExceed.TagsPerResource',
                        'errorMessage' => 'The maximum number of tags for each resource is exceeded',
                    ],
                    [
                        'errorCode' => 'InvalidResourceId.NotFound',
                        'errorMessage' => 'The specified ResourceIds are not found in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C46FF5A8-C5F0-4024-8262-B16B639225A0\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>C46FF5A8-C5F0-4024-8262-B16B639225A0</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
            'title' => '为指定的资源列表统一创建并绑定标签',
            'description' => '> 单个实例最多可绑定20条标签。绑定标签前，阿里云会校验资源已有标签数量，超过限制值会返回报错信息。',
        ],
        'ChangeResourceGroup' => [
            'summary' => '更改资源组。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型。取值：'."\n"
                            ."\n"
                            .'- **VpcEndpoint**（默认值）：终端节点。'."\n"
                            ."\n"
                            .'- **VpcEndpointService**：终端节点服务。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'VpcEndpoint',
                        'default' => 'VpcEndpoint',
                        'enum' => [
                            'VpcEndpoint',
                            'VpcEndpointService',
                        ],
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源Id',
                        'description' => '待修改资源组的私网连接资源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ep-hp3i05294c2d2d****',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '目标资源组',
                        'description' => '要替换的目标资源组的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rg-acfmy*****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8D8992C1-6712-423C-BAC5-E5E817484C6B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission.ChangeResourceGroup',
                        'errorMessage' => 'You are not authorized to change resourcegroup',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceRegionId',
                        'errorMessage' => 'The ResourceRegionId parameters that are required for processing this request are missing',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceId',
                        'errorMessage' => 'The ResourceId parameters that are required for processing this request are missing',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceGroupId',
                        'errorMessage' => 'The ResourceGroupId parameters that are required for processing this request are missing',
                    ],
                    [
                        'errorCode' => 'InvalidResourceGroup',
                        'errorMessage' => 'The specified ResourceGroupId is invalid',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred while processing your request',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => ' The specified resource is not found',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8D8992C1-6712-423C-BAC5-E5E817484C6B\\"\\n}","type":"json"}]',
            'title' => '更改资源组',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'privatelink.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'privatelink.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'privatelink.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'privatelink.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'privatelink.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'privatelink.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'privatelink.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'privatelink.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'privatelink.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'privatelink.cn-heyuan.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'privatelink.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'privatelink.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'privatelink.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'privatelink.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'privatelink.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'privatelink.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'privatelink.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'privatelink.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'privatelink.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'privatelink.cn-beijing-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'privatelink.cn-shanghai-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'privatelink.ap-southeast-7.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'privatelink.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'privatelink.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'privatelink.ap-northeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'privatelink.cn-shenzhen-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'privatelink.cn-guangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'endpoint' => 'privatelink.ap-southeast-6.aliyuncs.com',
        ],
    ],
];
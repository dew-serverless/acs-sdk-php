<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'CC5G',
        'version' => '2022-03-14',
    ],
    'directories' => [
        [
            'id' => 169074,
            'title' => '地域信息',
            'type' => 'directory',
            'children' => [
                'ListRegions',
                'ListZones',
            ],
        ],
        [
            'id' => 169077,
            'title' => '权限管理',
            'type' => 'directory',
            'children' => [
                'OpenCc5gService',
                'GetCreateCustomerInformation',
            ],
        ],
        [
            'id' => 169080,
            'title' => '5G上云实例',
            'type' => 'directory',
            'children' => [
                'ListAPNs',
                'CreateWirelessCloudConnector',
                'DeleteWirelessCloudConnector',
                'UpdateWirelessCloudConnector',
                'ListWirelessCloudConnectors',
                'AttachVpcToNetLink',
                'DetachVpcFromNetLink',
                'GetWirelessCloudConnector',
                'ListDataPackages',
                'CreateIoTCloudConnectorBackhaulRoute',
                'DeleteIoTCloudConnectorBackhaulRoute',
                'ModifyWirelessCloudConnectorFeature',
                'ListIoTCloudConnectorBackhaulRoute',
                'SwitchWirelessCloudConnectorToBusiness',
            ],
        ],
        [
            'id' => 169089,
            'title' => '订单管理',
            'type' => 'directory',
            'children' => [
                'ListOrders',
            ],
        ],
        [
            'id' => 169091,
            'title' => '卡管理',
            'type' => 'directory',
            'children' => [
                'LockCards',
                'UnlockCards',
                'StopCards',
                'ResumeCards',
                'UpdateCard',
                'ListCards',
                'ListCardUsages',
                'GetCard',
                'GetCardLockReason',
                'FailCards',
                'RebindCards',
                'ListCardDayUsages',
                'ResetAreaLimitCards',
                'ListCardAreaLimitSupportArea',
            ],
        ],
        [
            'id' => 169100,
            'title' => '授权规则',
            'type' => 'directory',
            'children' => [
                'CreateAuthorizationRule',
                'DeleteAuthorizationRule',
                'UpdateAuthorizationRule',
                'AddDNSAuthorizationRule',
                'UpdateDNSAuthorizationRule',
                'ListAuthorizationRules',
            ],
        ],
        [
            'id' => 169103,
            'title' => '卡批量操作',
            'type' => 'directory',
            'children' => [
                'CreateBatchOperateCardsTask',
                'DeleteBatchOperateCardsTask',
                'UpdateBatchOperateCardsTask',
                'ListBatchOperateCardsTasks',
            ],
        ],
        [
            'id' => 172117,
            'title' => '网络诊断',
            'type' => 'directory',
            'children' => [
                'SubmitDiagnoseTaskForSingleCard',
                'GetDiagnoseResultForSingleCard',
                'ListDiagnoseInfoForSingleCard',
            ],
        ],
        [
            'id' => 172116,
            'title' => '授权分享',
            'type' => 'directory',
            'children' => [
                'GrantNetLink',
                'RevokeNetLink',
            ],
        ],
        [
            'id' => 172767,
            'title' => '实例组',
            'type' => 'directory',
            'children' => [
                'CreateWirelessCloudConnectorGroup',
                'UpdateWirelessCloudConnectorGroup',
                'ListWirelessCloudConnectorGroups',
                'DeleteWirelessCloudConnectorGroup',
                'AddWirelessCloudConnectorToGroup',
                'RemoveWirelessCloudConnectorFromGroup',
                'CreateGroupAuthorizationRule',
                'UpdateGroupAuthorizationRule',
                'ListGroupAuthorizationRules',
                'DeleteGroupAuthorizationRule',
                'AddGroupDnsAuthorizationRule',
                'UpdateGroupDnsAuthorizationRule',
            ],
        ],
        [
            'id' => 183463,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'GetCreateCustomerInfomation',
                'InnerLimitRateCards',
                'InnerStopCards',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ListRegions' => [
            'summary' => '查询5G高速上云服务支持的地域列表。',
            'methods' => [
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
                    'name' => 'AcceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '支持的语言。取值：'."\n"
                            ."\n"
                            .'zh-CN：中文。'."\n"
                            .'en-US：英文。'."\n"
                            .'ja：日文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh-CN',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '2DCFA69E-A161-512D-99A7-108022580719',
                            ],
                            'Regions' => [
                                'title' => '数组，返回示例目录。',
                                'description' => '地域信息。',
                                'type' => 'array',
                                'items' => [
                                    'title' => 'RegionItemType',
                                    'description' => '地域信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'RegionId' => [
                                            'title' => '资源一级ID',
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'LocalName' => [
                                            'title' => '资源名称',
                                            'description' => '地域名称。',
                                            'type' => 'string',
                                            'example' => '华东1（杭州）',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2DCFA69E-A161-512D-99A7-108022580719\\",\\n  \\"Regions\\": [\\n    {\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"LocalName\\": \\"华东1（杭州）\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListRegionsResponse>\\n    <RequestId>2DCFA69E-A161-512D-99A7-108022580719</RequestId>\\n    <Regions>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <LocalName>华东1（杭州）</LocalName>\\n        <RegionEndpoint>cc5g.cn-hangzhou.aliyuncs.com</RegionEndpoint>\\n    </Regions>\\n</ListRegionsResponse>","errorExample":""}]',
            'title' => '查询可用地域列表',
        ],
        'ListZones' => [
            'summary' => '查询5G高速上云服务支持的可用区列表。',
            'methods' => [
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
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
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
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C2C1DE7C-E14C-53DE-920D-D63ACD7421A4',
                            ],
                            'Zones' => [
                                'title' => '数组，返回示例目录。',
                                'description' => '当前地域支持的可用区列表',
                                'type' => 'array',
                                'items' => [
                                    'title' => 'RegionItemType',
                                    'description' => '可用区信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ZoneId' => [
                                            'title' => '资源名称',
                                            'description' => '可用区ID',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-h',
                                        ],
                                        'LocalName' => [
                                            'title' => '创建时间',
                                            'description' => '可用区名称。',
                                            'type' => 'string',
                                            'example' => '杭州可用区h',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C2C1DE7C-E14C-53DE-920D-D63ACD7421A4\\",\\n  \\"Zones\\": [\\n    {\\n      \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n      \\"LocalName\\": \\"杭州可用区h\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询可用区的列表',
            'description' => '此接口属于运维类接口，主要用于网络规划和特殊控制，暂时只开放了北京、杭州、上海，深圳，如果有特殊region需求，请联系客服。',
        ],
        'OpenCc5gService' => [
            'summary' => '开通5G高速上云服务。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '区域ID',
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
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求iD',
                                'type' => 'string',
                                'example' => '2DCFA69E-A161-512D-99A7-108022580719',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2DCFA69E-A161-512D-99A7-108022580719\\"\\n}","type":"json"}]',
            'title' => '开通服务',
        ],
        'GetCreateCustomerInformation' => [
            'summary' => '获取客户资料录入地址和录入状态。',
            'methods' => [
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
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc5g-xxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求iD',
                                'type' => 'string',
                                'example' => 'AE0BA8E5-1E0C-5171-852F-826301C76BBE',
                            ],
                            'URL' => [
                                'description' => '物联网卡客户资料登记URL地址。',
                                'type' => 'string',
                                'example' => 'https://*******',
                            ],
                            'CanBuyCard' => [
                                'description' => '是否已经登记过标记，未登记资料，此字段无返回',
                                'type' => 'string',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AE0BA8E5-1E0C-5171-852F-826301C76BBE\\",\\n  \\"URL\\": \\"https://*******\\",\\n  \\"CanBuyCard\\": \\"True\\"\\n}","type":"json"}]',
            'title' => '获取客户资料录入地址和录入状态',
        ],
        'ListAPNs' => [
            'summary' => '查询5G高速上云服务支持的APN列表。',
            'methods' => [
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
                    'in' => 'query',
                    'schema' => [
                        'description' => '云连接器实例所在的地域ID，仅取值：cn-hangzhou。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'APN',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运营商接入点APN ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CMWAP',
                    ],
                ],
                [
                    'name' => 'ISP',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运营商ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'unicom',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用来标记当前开始读取的位置，置空表示从头开始。'."\n"
                            ."\n"
                            .'> 第一次调用不用填写，会在返回结果中包含第二次调用时用的NextToken，之后每次调用返回结果中都有下一次调用时的NextToken。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，取值范围：1~50，默认为10。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A175C091-3910-51AF-8D84-D5717B9B8D38',
                            ],
                            'APNs' => [
                                'title' => '数组，返回示例目录。',
                                'description' => '运营商APN列表。',
                                'type' => 'array',
                                'items' => [
                                    'title' => 'RegionItemType',
                                    'description' => '运营商APN列表项',
                                    'type' => 'object',
                                    'properties' => [
                                        'ISP' => [
                                            'title' => '资源一级ID',
                                            'description' => '5G高速上云实例的运营商。取值：'."\n"
                                                .'- **telecom**：中国电信。'."\n"
                                                .'- **mobile**：中国移动。'."\n"
                                                .'- **unicom**：中国联通。',
                                            'type' => 'string',
                                            'example' => 'unicom',
                                        ],
                                        'APN' => [
                                            'title' => '资源名称',
                                            'description' => '运营商接入点APN ID。',
                                            'type' => 'string',
                                            'example' => 'zjhzaliyun01s.5gjs.njiot',
                                        ],
                                        'Name' => [
                                            'title' => '创建时间',
                                            'description' => '名称。'."\n"
                                                ."\n"
                                                .'当前现实APN支持网断。',
                                            'type' => 'string',
                                            'example' => '10.0.0.0/13',
                                        ],
                                        'Description' => [
                                            'description' => '描述。'."\n"
                                                ."\n"
                                                .'当前线上APN描述暂未使用此字段，此APN描述信息为空。',
                                            'type' => 'string',
                                            'example' => '空',
                                        ],
                                        'Zones' => [
                                            'description' => '可用区列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '可用区ID。',
                                                'type' => 'string',
                                                'example' => 'cn-hangzhou-i',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '分页token，从返回结果中获取。',
                                'type' => 'string',
                                'example' => 'vhNxI+jwQfkLCUChCQ+iOoiRkyUbtAilGSvWuwktFBxF+bar2HpV0efI6n1+GkMv',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小，范围1-100。',
                                'type' => 'string',
                                'example' => '20',
                            ],
                            'TotalCount' => [
                                'description' => '总条目数。',
                                'type' => 'string',
                                'example' => '2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A175C091-3910-51AF-8D84-D5717B9B8D38\\",\\n  \\"APNs\\": [\\n    {\\n      \\"ISP\\": \\"unicom\\",\\n      \\"APN\\": \\"zjhzaliyun01s.5gjs.njiot\\",\\n      \\"Name\\": \\"10.0.0.0/13\\",\\n      \\"Description\\": \\"空\\",\\n      \\"Zones\\": [\\n        \\"cn-hangzhou-i\\"\\n      ]\\n    }\\n  ],\\n  \\"NextToken\\": \\"vhNxI+jwQfkLCUChCQ+iOoiRkyUbtAilGSvWuwktFBxF+bar2HpV0efI6n1+GkMv\\",\\n  \\"MaxResults\\": \\"20\\",\\n  \\"TotalCount\\": \\"2\\"\\n}","errorExample":""},{"type":"xml","example":"<ListAPNsResponse>\\n    <APNs>\\n    </APNs>\\n</ListAPNsResponse>","errorExample":""}]',
            'title' => '查询APN列表',
        ],
        'CreateWirelessCloudConnector' => [
            'summary' => '创建5G高速上云服务实例。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ISP',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例的运营商。取值：'."\n"
                            .'- **telecom**：中国电信。'."\n"
                            .'- **mobile**：中国移动。'."\n"
                            .'- **unicom**：中国联通。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'unicom',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '高速上云服务的描述信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'UseCase',
                    'in' => 'query',
                    'schema' => [
                        'description' => '使用场景',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'NetLinks',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '已经建立的云连接器列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '已经建立的云连接器列表。',
                            'type' => 'object',
                            'properties' => [
                                'RegionId' => [
                                    'description' => '地域ID。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'cn-hangzhou',
                                ],
                                'VpcId' => [
                                    'description' => '专有网络VPC ID。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'vpc-xxx',
                                ],
                                'VSwitchs' => [
                                    'description' => '虚拟交换机id。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => 'vSwitch ID。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'vsw-xxxx',
                                    ],
                                    'required' => true,
                                    'maxItems' => 2,
                                    'minItems' => 2,
                                ],
                                'APN' => [
                                    'description' => '运营商APN ID。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'zjalyjs01s.5gjs.njiot',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多详情，请参阅如何保证幂等性。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会创建实例组。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'BusinessType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Business',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求iD',
                                'type' => 'string',
                                'example' => 'E1E237B1-EED7-55D5-AE5F-671E642DB3B5',
                            ],
                            'WirelessCloudConnectorId' => [
                                'description' => '5G高速上云实例id。',
                                'type' => 'string',
                                'example' => 'cc5g-xxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E1E237B1-EED7-55D5-AE5F-671E642DB3B5\\",\\n  \\"WirelessCloudConnectorId\\": \\"cc5g-xxxx\\"\\n}","type":"json"}]',
            'title' => '创建5G高速上云服务实例',
        ],
        'DeleteWirelessCloudConnector' => [
            'summary' => '删除5G高速上云实例。',
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
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值：'."\n"
                            .'- **true**：发送检查请求，不会删除实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并删除实例。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.ExistCards',
                        'errorMessage' => 'The operation is not allowed because of exist cards.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.AttachedVpc',
                        'errorMessage' => 'The operation is not allowed because of exist vpc.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.ExistCustomerAuthorizationRules',
                        'errorMessage' => 'The operation is not allowed because of exist customer authorizationRule.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
            'title' => '删除5G高速上云实例',
        ],
        'UpdateWirelessCloudConnector' => [
            'summary' => '更新5G高速上云实例信息。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc5g-test',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值：'."\n"
                            .'- **true**：发送检查请求，不会更新实例信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后直接更新实例信息。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
            'title' => '更新5G高速上云实例',
        ],
        'ListWirelessCloudConnectors' => [
            'summary' => '查询5G高速上云实例列表。',
            'methods' => [
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
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Statuses',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '实例状态列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '实例状态，取值：'."\n"
                                ."\n"
                                .'- **Creating**: 创建中'."\n"
                                .'- **Available**: 有效的稳定状态'."\n"
                                .'- **Pending**: 配置中'."\n"
                                .'- **Deleting**: 删除中',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'Available',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WirelessCloudConnectorIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '实例的id列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '实例的id列表。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cc5g-xxxx',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Names',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '实例的名称列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '名称列表。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '智慧工厂',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上一页的查询返回的值，首页查询不传值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iou001238joojjaere',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'BusinessType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Business',
                    ],
                ],
                [
                    'name' => 'IsInGroup',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否查询实例组中的实例。取值：'."\n"
                            ."\n"
                            .'- **true**：查询实例组中的实例。'."\n"
                            ."\n"
                            .'- **false**：不查询实例组中的实例。'."\n"
                            ."\n"
                            .'- **null**：全量查询实例，不区分实例是否在实例组中。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'WirelessCloudConnectorGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例组实例id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc5gg-****',
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
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
                            ],
                            'WirelessCloudConnectors' => [
                                'title' => '数组，返回示例目录。',
                                'description' => '5G高速上云实例列表。',
                                'type' => 'array',
                                'items' => [
                                    'title' => 'RegionItemType',
                                    'description' => 'RegionItemType',
                                    'type' => 'object',
                                    'properties' => [
                                        'WirelessCloudConnectorId' => [
                                            'title' => '资源一级ID',
                                            'description' => '5G高速上云实例id。',
                                            'type' => 'string',
                                            'example' => 'cc5g-xxxx',
                                        ],
                                        'Status' => [
                                            'title' => '资源名称',
                                            'description' => '实例状态，取值：'."\n"
                                                ."\n"
                                                .'- **Creating**: 创建中'."\n"
                                                .'- **Available**: 有效的稳定状态'."\n"
                                                .'- **Pending**: 配置中'."\n"
                                                .'- **Deleting**: 删除中',
                                            'type' => 'string',
                                            'example' => 'Available',
                                        ],
                                        'Name' => [
                                            'title' => '创建时间',
                                            'description' => '名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'Description' => [
                                            'description' => '描述。',
                                            'type' => 'string',
                                            'example' => 'cc5g-test',
                                        ],
                                        'RegionId' => [
                                            'description' => '地域id。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'UseCase' => [
                                            'description' => '实例使用场景。',
                                            'type' => 'string',
                                            'example' => '智慧工厂',
                                        ],
                                        'DataPackageId' => [
                                            'description' => '流量包id。',
                                            'type' => 'string',
                                            'example' => 'dp-xxxx',
                                        ],
                                        'DataPackageType' => [
                                            'description' => '流量包档位，取值：'."\n"
                                                ."\n"
                                                .'- **200**: 200M/卡/月'."\n"
                                                .'- **1000**: 1G/卡/月'."\n"
                                                .'- **3000**: 3G/卡/月'."\n"
                                                .'- **30000**: 30G/卡/月',
                                            'type' => 'string',
                                            'example' => '200',
                                        ],
                                        'CardCount' => [
                                            'description' => '卡数量。',
                                            'type' => 'string',
                                            'example' => '20000',
                                        ],
                                        'CreateTime' => [
                                            'description' => '实例创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-3-15 22:20:00',
                                        ],
                                        'BusinessType' => [
                                            'description' => '业务类型',
                                            'type' => 'string',
                                            'example' => 'Business',
                                        ],
                                        'ServiceType' => [
                                            'description' => '服务类型，返回：'."\n"
                                                ."\n"
                                                .'- **CC5G**：普通实例。'."\n"
                                                .'- **CC5GCCIoT**：过户实例。',
                                            'type' => 'string',
                                            'example' => 'CC5G',
                                        ],
                                        'WirelessCloudConnectorGroupId' => [
                                            'description' => '关联的实例组id',
                                            'type' => 'string',
                                            'example' => 'cc5gg-****',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '下一页查询所需值。',
                                'type' => 'string',
                                'example' => 'iou001238joojjaere',
                            ],
                            'MaxResults' => [
                                'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                                'type' => 'string',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '列表的条目数。',
                                'type' => 'string',
                                'example' => '2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\",\\n  \\"WirelessCloudConnectors\\": [\\n    {\\n      \\"WirelessCloudConnectorId\\": \\"cc5g-xxxx\\",\\n      \\"Status\\": \\"Available\\",\\n      \\"Name\\": \\"test\\",\\n      \\"Description\\": \\"cc5g-test\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"UseCase\\": \\"智慧工厂\\",\\n      \\"DataPackageId\\": \\"dp-xxxx\\",\\n      \\"DataPackageType\\": \\"200\\",\\n      \\"CardCount\\": \\"20000\\",\\n      \\"CreateTime\\": \\"2022-3-15 22:20:00\\",\\n      \\"BusinessType\\": \\"Business\\",\\n      \\"ServiceType\\": \\"CC5G\\",\\n      \\"WirelessCloudConnectorGroupId\\": \\"cc5gg-****\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"iou001238joojjaere\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"TotalCount\\": \\"2\\"\\n}","type":"json"}]',
            'title' => '查询5G高速上云实例列表',
        ],
        'AttachVpcToNetLink' => [
            'summary' => '关联用户Vpc和Vswitch到5G高速上云实例。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'NetLinkId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络连接id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cciot-xxxx',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专有网络id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc-bp1etmgc4vooo5ahbkzou',
                    ],
                ],
                [
                    'name' => 'VSwitches',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '客户的专有网络下的交换机，必须是2个进行主备，且交换机的可用区和和网络连接的可用区保持一致。',
                        'type' => 'array',
                        'items' => [
                            'description' => '交换机id。',
                            'type' => 'string',
                            'required' => true,
                            'example' => 'vsw-xxxx',
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值：'."\n"
                            .'- **true**：发送检查请求，不会关联用户Vpc和Vswitch。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后关联用户Vpc和Vswitch到5G高速上云实例。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
            'title' => '关联用户Vpc和Vswitch',
        ],
        'DetachVpcFromNetLink' => [
            'summary' => '取消用户Vpc和Vswitch的关联。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'NetLinkId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络连接id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cciot-xxxx',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会取消关联。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后直接取消用户Vpc和Vswitch的关联。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
            'title' => '取消关联Vpc和Vswitch',
        ],
        'GetWirelessCloudConnector' => [
            'summary' => '查询5G高速上云实例详细信息。',
            'methods' => [
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
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => ' ',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
                            ],
                            'NetLinks' => [
                                'title' => '数组，返回示例目录。',
                                'description' => '到用户VPC的连接列表。',
                                'type' => 'array',
                                'items' => [
                                    'title' => 'RegionItemType',
                                    'description' => ' ',
                                    'type' => 'object',
                                    'properties' => [
                                        'RegionId' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'NetLinkId' => [
                                            'title' => '资源名称',
                                            'description' => '网络连接id。',
                                            'type' => 'string',
                                            'example' => 'cciot-xxxx',
                                        ],
                                        'Name' => [
                                            'title' => '创建时间',
                                            'description' => '名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'Description' => [
                                            'description' => '描述。',
                                            'type' => 'string',
                                            'example' => '连接test',
                                        ],
                                        'Status' => [
                                            'description' => '状态，取值：'."\n"
                                                ."\n"
                                                .'- **Pending**: 配置中  '."\n"
                                                .'- **Attached**: 已绑定'."\n"
                                                .'- **Detached**: 已解绑',
                                            'type' => 'string',
                                            'example' => 'Attached',
                                        ],
                                        'Type' => [
                                            'description' => '类型，取值：'."\n"
                                                ."\n"
                                                .'- **Standard**: 标准版  '."\n"
                                                .'- **Basic**: 基础版',
                                            'type' => 'string',
                                            'example' => 'Standard',
                                        ],
                                        'APN' => [
                                            'description' => '运营商APN的id。',
                                            'type' => 'string',
                                            'example' => 'bjaliyun01s.5gbj.bjiot',
                                        ],
                                        'ISP' => [
                                            'description' => '卡所属运营商: '."\n"
                                                .'- **Telecom**: 电信'."\n"
                                                .'- **Mobile**: 移动'."\n"
                                                .'- **Unicom**: 联通',
                                            'type' => 'string',
                                            'example' => 'Telecom',
                                        ],
                                        'VpcId' => [
                                            'description' => '专有网络VPC ID。',
                                            'type' => 'string',
                                            'example' => 'vpc-xxxx',
                                        ],
                                        'VSwitchs' => [
                                            'description' => '绑定的交换机列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '交换机id。',
                                                'type' => 'string',
                                                'example' => 'vsw-xxxx',
                                            ],
                                        ],
                                        'CreateTime' => [
                                            'description' => '连接创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-03-15 22:20:00',
                                        ],
                                        'GrantAliUid' => [
                                            'description' => '阿里云授权者UID。',
                                            'type' => 'string',
                                            'example' => '11111111111',
                                        ],
                                    ],
                                ],
                            ],
                            'WirelessCloudConnectorId' => [
                                'description' => '5G高速上云实例id。',
                                'type' => 'string',
                                'example' => 'cc5g-xxxx',
                            ],
                            'Status' => [
                                'description' => '实例状态，取值：'."\n"
                                    ."\n"
                                    .'- **Creating**: 创建中'."\n"
                                    .'- **Available**: 有效的稳定状态'."\n"
                                    .'- **Pending**: 配置中'."\n"
                                    .'- **Deleting**: 删除中',
                                'type' => 'string',
                                'example' => 'Available',
                            ],
                            'Name' => [
                                'description' => '名称。',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'Description' => [
                                'description' => '描述。',
                                'type' => 'string',
                                'example' => 'cc5g-test',
                            ],
                            'RegionId' => [
                                'description' => '地域id。',
                                'type' => 'string',
                                'example' => 'cn-hangzhou',
                            ],
                            'UseCase' => [
                                'description' => '实例使用场景。',
                                'type' => 'string',
                                'example' => '智慧工厂',
                            ],
                            'DataPackageId' => [
                                'description' => '流量包id。',
                                'type' => 'string',
                                'example' => 'dp-xxxx',
                            ],
                            'DataPackageType' => [
                                'description' => '流量包档位，取值：'."\n"
                                    ."\n"
                                    .'- **200**: 200M/卡/月'."\n"
                                    .'- **1000**: 1G/卡/月'."\n"
                                    .'- **3000**: 3G/卡/月'."\n"
                                    .'- **30000**: 30G/卡/月',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'CardCount' => [
                                'description' => '卡数量。',
                                'type' => 'string',
                                'example' => '20000',
                            ],
                            'CreateTime' => [
                                'description' => '实例创建时间。',
                                'type' => 'string',
                                'example' => '2022-3-15 22:20:00',
                            ],
                            'BusinessType' => [
                                'description' => '业务类型',
                                'type' => 'string',
                                'example' => 'Business',
                            ],
                            'WirelessCloudConnectorGroupId' => [
                                'description' => '分组ID',
                                'type' => 'string',
                                'example' => 'cc5gg-****',
                            ],
                            'Features' => [
                                'description' => '支持的功能特性列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '支持的功能特性列表。',
                                    'type' => 'string',
                                    'example' => '[\'DirectMode\']',
                                ],
                            ],
                            'ServiceType' => [
                                'description' => '服务类型，返回：'."\n"
                                    ."\n"
                                    .'- **CC5G**：普通实例。'."\n"
                                    .'- **CC5GCCIoT**：过户实例。',
                                'type' => 'string',
                                'example' => 'CC5GCCIoT',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\",\\n  \\"NetLinks\\": [\\n    {\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"NetLinkId\\": \\"cciot-xxxx\\",\\n      \\"Name\\": \\"test\\",\\n      \\"Description\\": \\"连接test\\",\\n      \\"Status\\": \\"Attached\\",\\n      \\"Type\\": \\"Standard\\",\\n      \\"APN\\": \\"bjaliyun01s.5gbj.bjiot\\",\\n      \\"ISP\\": \\"Telecom\\",\\n      \\"VpcId\\": \\"vpc-xxxx\\",\\n      \\"VSwitchs\\": [\\n        \\"vsw-xxxx\\"\\n      ],\\n      \\"CreateTime\\": \\"2022-03-15 22:20:00\\",\\n      \\"GrantAliUid\\": \\"11111111111\\"\\n    }\\n  ],\\n  \\"WirelessCloudConnectorId\\": \\"cc5g-xxxx\\",\\n  \\"Status\\": \\"Available\\",\\n  \\"Name\\": \\"test\\",\\n  \\"Description\\": \\"cc5g-test\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"UseCase\\": \\"智慧工厂\\",\\n  \\"DataPackageId\\": \\"dp-xxxx\\",\\n  \\"DataPackageType\\": \\"200\\",\\n  \\"CardCount\\": \\"20000\\",\\n  \\"CreateTime\\": \\"2022-3-15 22:20:00\\",\\n  \\"BusinessType\\": \\"Business\\",\\n  \\"WirelessCloudConnectorGroupId\\": \\"cc5gg-****\\",\\n  \\"Features\\": [\\n    \\"[\'DirectMode\']\\"\\n  ],\\n  \\"ServiceType\\": \\"CC5GCCIoT\\"\\n}","type":"json"}]',
            'title' => '查询5G高速上云实例详情',
        ],
        'ListDataPackages' => [
            'summary' => '查询流量包信息列表。',
            'methods' => [
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
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'Statuses',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '流量包状态列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '流量包状态，取值：'."\n"
                                ."\n"
                                .'- **Creating**: 创建中'."\n"
                                .'- **Available**: 已生效'."\n"
                                .'- **Expired**: 已过期',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'Available',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DataPackageIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '流量包id，最多20个。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => 'dp-xxxx',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Names',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '流量包名称，最多20个',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cciot-123',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上一页的查询返回的值，首页查询不传值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iou001238joojjaere',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '8734B5B2-FC84-54C4-8038-D40228CF01FE',
                            ],
                            'DataPackages' => [
                                'title' => '数组，返回示例目录。',
                                'description' => '流量包列表。',
                                'type' => 'array',
                                'items' => [
                                    'title' => 'RegionItemType',
                                    'description' => 'RegionItemType',
                                    'type' => 'object',
                                    'properties' => [
                                        'DataPackageId' => [
                                            'description' => '流量包id。',
                                            'type' => 'string',
                                            'example' => 'dp-xxxx',
                                        ],
                                        'Status' => [
                                            'title' => '资源名称',
                                            'description' => '流量包状态，取值：'."\n"
                                                ."\n"
                                                .'- **Creating**: 创建中'."\n"
                                                .'- **Available**: 已生效'."\n"
                                                .'- **Expired**: 已过期',
                                            'type' => 'string',
                                            'example' => 'Available',
                                        ],
                                        'Name' => [
                                            'title' => '创建时间',
                                            'description' => '流量包名称',
                                            'type' => 'string',
                                            'example' => '测试流量包',
                                        ],
                                        'ISP' => [
                                            'description' => '卡所属运营商：'."\n"
                                                ."\n"
                                                .'- **Telecom**: 电信'."\n"
                                                .'- **Mobile**: 移动'."\n"
                                                .'- **Unicom**: 联通',
                                            'type' => 'string',
                                            'example' => 'Telecom',
                                        ],
                                        'Size' => [
                                            'description' => '流量包档位，取值：'."\n"
                                                ."\n"
                                                .'- **200**: 200M/卡/月'."\n"
                                                .'- **1000**: 1G/卡/月'."\n"
                                                .'- **3000**: 3G/卡/月'."\n"
                                                .'- **30000**: 30G/卡/月',
                                            'type' => 'string',
                                            'example' => '200',
                                        ],
                                        'CardCount' => [
                                            'description' => '卡数量。',
                                            'type' => 'string',
                                            'example' => '20000',
                                        ],
                                        'CreateTime' => [
                                            'description' => '开通时间。',
                                            'type' => 'string',
                                            'example' => '2022-3-15 22:20:00',
                                        ],
                                        'ExpiredTime' => [
                                            'description' => '失效时间。',
                                            'type' => 'string',
                                            'example' => '2099-3-15 22:20:00',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '下一页查询所需值。',
                                'type' => 'string',
                                'example' => 'iou001238joojjaere',
                            ],
                            'MaxResults' => [
                                'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                                'type' => 'string',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '列表的条目数。',
                                'type' => 'string',
                                'example' => '2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8734B5B2-FC84-54C4-8038-D40228CF01FE\\",\\n  \\"DataPackages\\": [\\n    {\\n      \\"DataPackageId\\": \\"dp-xxxx\\",\\n      \\"Status\\": \\"Available\\",\\n      \\"Name\\": \\"测试流量包\\",\\n      \\"ISP\\": \\"Telecom\\",\\n      \\"Size\\": \\"200\\",\\n      \\"CardCount\\": \\"20000\\",\\n      \\"CreateTime\\": \\"2022-3-15 22:20:00\\",\\n      \\"ExpiredTime\\": \\"2099-3-15 22:20:00\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"iou001238joojjaere\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"TotalCount\\": \\"2\\"\\n}","type":"json"}]',
            'title' => '查询流量包信息',
        ],
        'CreateIoTCloudConnectorBackhaulRoute' => [
            'summary' => '开启了反向访问高级特性场景下，针对连接实例下发反向访问路由。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'NetLinkId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络连接id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cciot-xxxx',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会创建实例组。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
            'title' => '创建5G高速上云实例反向访问路由',
        ],
        'DeleteIoTCloudConnectorBackhaulRoute' => [
            'summary' => '开启了反向访问高级特性场景下，针对连接实例删除反向访问路由'."\n"
                .'。',
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
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'NetLinkId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络连接id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cciot-xxxx',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会创建授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后直接创建授权规则。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'AA93A076-3D94-51AB-AC70-4C94AF003B03',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AA93A076-3D94-51AB-AC70-4C94AF003B03\\"\\n}","type":"json"}]',
            'title' => '删除5G高速上云实例反向访问路由',
        ],
        'ModifyWirelessCloudConnectorFeature' => [
            'summary' => '修改5G高速上云实例高级属性，例如开启反向访问功能。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'FeatureName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '功能特征名称。'."\n"
                            .'- **DirectMode**：直通',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'DirectMode' => 'DirectMode',
                        ],
                        'example' => 'DirectMode',
                    ],
                ],
                [
                    'name' => 'FeatureValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '功能特征值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'On',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值：'."\n"
                            .'- **true**：发送检查请求，不会更新实例信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后直接更新实例信息。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '999E0F64-9A10-567B-BB84-B7C46023BA3B',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"999E0F64-9A10-567B-BB84-B7C46023BA3B\\"\\n}","type":"json"}]',
            'title' => '修改5G高速上云实例高级属性',
        ],
        'ListIoTCloudConnectorBackhaulRoute' => [
            'summary' => '开启了反向访问高级特性场景下，查询特定连接实例的反向访问路由列表。',
            'methods' => [
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
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'NetLinkId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络连接id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cciot-xxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '94032572-8758-575E-B306-86F59D1B826E',
                            ],
                            'NetLinkId' => [
                                'title' => 'Id of the request',
                                'description' => '网络连接id。',
                                'type' => 'string',
                                'example' => 'cciot-xxxx',
                            ],
                            'Routes' => [
                                'title' => '数组，返回示例目录。',
                                'description' => '数组，返回示例目录。',
                                'type' => 'array',
                                'items' => [
                                    'title' => 'RegionItemType',
                                    'description' => 'RegionItemType',
                                    'type' => 'object',
                                    'properties' => [
                                        'DestinationCidrBlock' => [
                                            'title' => '资源名称',
                                            'description' => '路由条目的目标网段。',
                                            'type' => 'string',
                                            'example' => '10.33.190.0/24',
                                        ],
                                        'NextHopId' => [
                                            'title' => '创建时间',
                                            'description' => '下一跳实例ID。',
                                            'type' => 'string',
                                            'example' => 'eni-uf677iw3xihqxiz2ssir',
                                        ],
                                        'NextHopType' => [
                                            'title' => '创建时间',
                                            'description' => '自定义路由条目的下一跳的类型，取值： '."\n"
                                                ."\n"
                                                .'- **Instance**（默认值）：ECS实例。'."\n"
                                                ."\n"
                                                .'- **HaVip**：高可用虚拟IP。  '."\n"
                                                ."\n"
                                                .'- **RouterInterface**：路由器接口。'."\n"
                                                ."\n"
                                                .'- **NetworkInterface**：弹性网卡。'."\n"
                                                ."\n"
                                                .'- **VpnGateway**：VPN网关。'."\n"
                                                ."\n"
                                                .'- **IPv6Gateway**：IPv6网关。'."\n"
                                                ."\n"
                                                .'- **NatGateway**：NAT网关。'."\n"
                                                ."\n"
                                                .'- **Attachment**：转发路由器。'."\n"
                                                ."\n"
                                                .'- **VpcPeer**：VPC对等连接。',
                                            'type' => 'string',
                                            'example' => 'NetworkInterface',
                                        ],
                                        'Description' => [
                                            'title' => '创建时间',
                                            'description' => '描述信息。',
                                            'type' => 'string',
                                            'example' => 'full cidr block route',
                                        ],
                                        'Status' => [
                                            'title' => '创建时间',
                                            'description' => '路由状态，取值：'."\n"
                                                ."\n"
                                                .'- **init**: 初始态'."\n"
                                                .'- **published**: 已下发',
                                            'type' => 'string',
                                            'enumValueTitles' => [],
                                            'example' => 'published',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"94032572-8758-575E-B306-86F59D1B826E\\",\\n  \\"NetLinkId\\": \\"cciot-xxxx\\",\\n  \\"Routes\\": [\\n    {\\n      \\"DestinationCidrBlock\\": \\"10.33.190.0/24\\",\\n      \\"NextHopId\\": \\"eni-uf677iw3xihqxiz2ssir\\",\\n      \\"NextHopType\\": \\"NetworkInterface\\",\\n      \\"Description\\": \\"full cidr block route\\",\\n      \\"Status\\": \\"published\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询5G高速上云实例反向访问路由',
        ],
        'SwitchWirelessCloudConnectorToBusiness' => [
            'summary' => '用于把5G上云服务测试实例切换到商业实例。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值：'."\n"
                            .'- **true**：发送检查请求，不会删除实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并删除实例。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '74ADDCF3-E3FE-5200-9290-1320125D71DC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"74ADDCF3-E3FE-5200-9290-1320125D71DC\\"\\n}","type":"json"}]',
            'title' => '切换5G上云服务实例到商业模式',
        ],
        'ListOrders' => [
            'summary' => '查询订单列表。',
            'methods' => [
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
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'Statuses',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '订单状态列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '订单状态，取值：'."\n"
                                ."\n"
                                .'- **Pending**: 待发货'."\n"
                                .'- **Posting**: 已发货'."\n"
                                .'- **Finished**: 已完成',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'Pending',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OrderIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '订单id列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '订单id。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '890******',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OrderAction',
                    'in' => 'query',
                    'schema' => [
                        'description' => '订单类型，取值：'."\n"
                            .'- **NewBuy**: 新购'."\n"
                            .'- **ScaleOut**: 扩容'."\n"
                            .'- **ScaleIn**: 缩容'."\n"
                            .'- **BuyCard**: 购卡'."\n"
                            .'- **Renewal**: 续期',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'NewBuy',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上一页的查询返回的值，首页查询不传值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iou001238joojjaere',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '88C2F32F-B641-5980-B7A5-6907050ABCD1'."\n",
                            ],
                            'Orders' => [
                                'title' => '数组，返回示例目录。',
                                'description' => '订单列表。',
                                'type' => 'array',
                                'items' => [
                                    'title' => 'RegionItemType',
                                    'description' => 'RegionItemType',
                                    'type' => 'object',
                                    'properties' => [
                                        'OrderId' => [
                                            'description' => '订单id。',
                                            'type' => 'string',
                                            'example' => '89************',
                                        ],
                                        'Status' => [
                                            'title' => '资源名称',
                                            'description' => '订单状态，取值：'."\n"
                                                ."\n"
                                                .'- **Pending**: 待发货'."\n"
                                                .'- **Posting**: 已发货'."\n"
                                                .'- **Finished**: 已完成',
                                            'type' => 'string',
                                            'example' => 'Pending',
                                        ],
                                        'Action' => [
                                            'title' => '创建时间',
                                            'description' => '订单类型，取值：'."\n"
                                                .'- **NewBuy**: 新购'."\n"
                                                .'- **ScaleOut**: 扩容'."\n"
                                                .'- **ScaleIn**: 缩容'."\n"
                                                .'- **BuyCard**: 购卡'."\n"
                                                .'- **Renewal**: 续期',
                                            'type' => 'string',
                                            'example' => 'NewBuy',
                                        ],
                                        'Description' => [
                                            'description' => '订单描述。',
                                            'type' => 'string',
                                            'example' => 'order-test',
                                        ],
                                        'LogisticsId' => [
                                            'description' => '物流单号。',
                                            'type' => 'string',
                                            'example' => 'SF14*********',
                                        ],
                                        'LogisticsStatus' => [
                                            'description' => '物流状态，取值：'."\n"
                                                .'- **Transporting**: 运送中'."\n"
                                                .'- **Delivering**: 派件中'."\n"
                                                .'- **Delivered**: 已送达'."\n"
                                                .'- **Signed**: 已签收',
                                            'type' => 'string',
                                            'example' => 'Signed',
                                        ],
                                        'LogisticsType' => [
                                            'description' => '物流公司，取值：'."\n"
                                                .'- **SF**: 顺丰'."\n"
                                                .'- **ZTO**: 中通'."\n",
                                            'type' => 'string',
                                            'example' => 'SF',
                                        ],
                                        'LogisticsUpdateTime' => [
                                            'description' => '物流最新更新时间。',
                                            'type' => 'string',
                                            'example' => '2022-3-15 22:20:00',
                                        ],
                                        'CardCount' => [
                                            'description' => '卡数量。',
                                            'type' => 'string',
                                            'example' => '20000',
                                        ],
                                        'ContactName' => [
                                            'description' => '邮寄联系人。',
                                            'type' => 'string',
                                            'example' => '张三',
                                        ],
                                        'ContactPhone' => [
                                            'description' => '邮寄联系电话。',
                                            'type' => 'string',
                                            'example' => '139000*******',
                                        ],
                                        'PostAddress' => [
                                            'description' => '邮寄地址。',
                                            'type' => 'string',
                                            'example' => '某公司',
                                        ],
                                        'CreateTime' => [
                                            'description' => '订单创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-3-15 21:20:00',
                                        ],
                                        'PayTime' => [
                                            'description' => '订单支付时间。',
                                            'type' => 'string',
                                            'example' => '2022-3-15 21:30:00',
                                        ],
                                        'RegionId' => [
                                            'description' => '地域id。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'CardType' => [
                                            'description' => '卡的规格，取值：'."\n"
                                                ."\n"
                                                .'- **CONSUMER\\_THREE\\_IN\\_ONE:** 消费电子级物联网卡\\_三合一'."\n"
                                                .'- **INDUSTRY\\_PATCH**'."\n"
                                                .': 工业级物联网贴片卡'."\n"
                                                .'- **CONSUMER\\_PATCH**'."\n"
                                                .':消费电子级物联网贴片卡'."\n"
                                                .'- **INDUSTRY\\_GENERAL**'."\n"
                                                .':工业级物联网卡\\_普通'."\n"
                                                .'- **INDUSTRY\\_MICRO**'."\n"
                                                .':工业级物联网卡\\_Micro'."\n"
                                                .'- **CONSUMER\\_GENERAL**'."\n"
                                                .':消费电子级物联网卡_普通'."\n"
                                                .'- **CONSUMER\\_TWO\\_IN\\_ONE**'."\n"
                                                .'：消费电子级物联网卡\\_二合一'."\n"
                                                .'- **INDUSTRY\\_NANO**'."\n"
                                                .'：工业级物联网卡\\_Nano'."\n"
                                                .'- **CAR\\_PATCH**'."\n"
                                                .':车规级物联网贴片卡',
                                            'type' => 'string',
                                            'example' => 'CONSUMER_THREE_IN_ONE',
                                        ],
                                        'CardNetType' => [
                                            'description' => '卡的网络类型，取值：'."\n"
                                                ."\n"
                                                .'- **4G**'."\n"
                                                .'- **5G**',
                                            'type' => 'string',
                                            'example' => '5G',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '下一页查询所需值。',
                                'type' => 'string',
                                'example' => 'iou001238joojjaere',
                            ],
                            'MaxResults' => [
                                'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                                'type' => 'string',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '列表的条目数。',
                                'type' => 'string',
                                'example' => '2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"88C2F32F-B641-5980-B7A5-6907050ABCD1\\\\n\\",\\n  \\"Orders\\": [\\n    {\\n      \\"OrderId\\": \\"89************\\",\\n      \\"Status\\": \\"Pending\\",\\n      \\"Action\\": \\"NewBuy\\",\\n      \\"Description\\": \\"order-test\\",\\n      \\"LogisticsId\\": \\"SF14*********\\",\\n      \\"LogisticsStatus\\": \\"Signed\\",\\n      \\"LogisticsType\\": \\"SF\\",\\n      \\"LogisticsUpdateTime\\": \\"2022-3-15 22:20:00\\",\\n      \\"CardCount\\": \\"20000\\",\\n      \\"ContactName\\": \\"张三\\",\\n      \\"ContactPhone\\": \\"139000*******\\",\\n      \\"PostAddress\\": \\"某公司\\",\\n      \\"CreateTime\\": \\"2022-3-15 21:20:00\\",\\n      \\"PayTime\\": \\"2022-3-15 21:30:00\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"CardType\\": \\"CONSUMER_THREE_IN_ONE\\",\\n      \\"CardNetType\\": \\"5G\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"iou001238joojjaere\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"TotalCount\\": \\"2\\"\\n}","type":"json"}]',
            'title' => '查询订单列表',
        ],
        'LockCards' => [
            'summary' => '批量锁定卡。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Iccids',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '物联网SIM卡卡号，每次最大500条',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => '890912389123',
                        ],
                        'required' => true,
                        'maxItems' => 1000,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会批量锁定。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后批量锁定卡。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '8734B5B2-FC84-54C4-8038-D40228CF01FE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8734B5B2-FC84-54C4-8038-D40228CF01FE\\"\\n}","type":"json"}]',
            'title' => '批量锁定卡',
        ],
        'UnlockCards' => [
            'summary' => '批量解锁卡。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Iccids',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '物联网SIM卡卡号，每次最大500条',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => '890912389123',
                        ],
                        'required' => true,
                        'maxItems' => 1000,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会批量解锁。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后进行批量解锁操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '81CB64DF-E328-50A3-B386-03CAD604C114',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.CardsSimStatusNotUnlock',
                        'errorMessage' => 'The operation is not allowed because of card status not support to unlock.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"81CB64DF-E328-50A3-B386-03CAD604C114\\"\\n}","type":"json"}]',
            'title' => '批量解锁卡',
        ],
        'StopCards' => [
            'summary' => '单卡停机，支持批量操作。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Iccids',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '物联网SIM卡卡号，每次最大500条',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => '890912389123',
                        ],
                        'required' => true,
                        'maxItems' => 1000,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会进行停机操作。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后直接进行卡停机操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '8734B5B2-FC84-54C4-8038-D40228CF01FE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8734B5B2-FC84-54C4-8038-D40228CF01FE\\"\\n}","type":"json"}]',
            'title' => '卡停机操作',
            'description' => '如单卡被劫持或者其他原因做主动运维，可在此实现运营商侧卡停机。',
        ],
        'ResumeCards' => [
            'summary' => '激活单卡，或恢复运营商侧卡状态，支持批量操作。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Iccids',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '物联网SIM卡卡号，每次最大500条',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => '890912389123',
                        ],
                        'required' => true,
                        'maxItems' => 1000,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会激活/恢复卡状态。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后激活/恢复卡状态。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.CardsSimStatusNotResume',
                        'errorMessage' => 'The operation is not allowed because of card status not support to resume.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
            'title' => '激活/恢复卡状态',
            'description' => '运营商卡切换终端或者因为频繁拨号等原因导致锁卡可在此恢复。',
        ],
        'UpdateCard' => [
            'summary' => '更新卡实例的名称和描述。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'Iccid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的iccid。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '890912389123',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'card-test',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会更新卡信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后更新卡信息。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '8734B5B2-FC84-54C4-8038-D40228CF01FE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8734B5B2-FC84-54C4-8038-D40228CF01FE\\"\\n}","type":"json"}]',
            'title' => '更新卡信息',
        ],
        'ListCards' => [
            'summary' => '查询5G高速上云实例下的卡信息列表。',
            'methods' => [
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
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'Statuses',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '卡的状态列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '卡的状态，取值：'."\n"
                                ."\n"
                                .'- **Testable**: 可测试'."\n"
                                .'- **Activatable**: 可激活'."\n"
                                .'- **Activated**: 已激活'."\n"
                                .'- **Deactivated**: 已停用'."\n"
                                .'- **Failed**: 已失效'."\n"
                                .'- **Cleared**: 已清除'."\n"
                                .'- **Replaced**: 已更换'."\n"
                                .'- **Resuming**: 恢复中'."\n"
                                .'- **ShutDown**: 已停机',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'Activated',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Iccids',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '物联网卡的iccid列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '物联网卡的iccid。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '89091231231219123',
                        ],
                        'required' => false,
                        'enumValueTitles' => [],
                    ],
                ],
                [
                    'name' => 'IpAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的固定IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10.0.0.1',
                    ],
                ],
                [
                    'name' => 'Lock',
                    'in' => 'query',
                    'schema' => [
                        'description' => '卡是否锁定。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Online',
                    'in' => 'query',
                    'schema' => [
                        'description' => '卡是否在线。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'NetLinkId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络连接id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cciot-xxxx',
                    ],
                ],
                [
                    'name' => 'Apn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运营商APN的id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'bjaliyun01s.5gbj.bjiot',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上一页的查询返回的值，首页查询不传值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iou001238joojjaere',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Iccid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '卡的iccid的前缀，如果后缀包含字符会去除字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '8909123123121912',
                    ],
                ],
                [
                    'name' => 'Msisdn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的MSISDN。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1441204374591',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '88C2F32F-B641-5980-B7A5-6907050ABCD1',
                            ],
                            'Cards' => [
                                'title' => '数组，返回示例目录。',
                                'description' => '卡列表。',
                                'type' => 'array',
                                'items' => [
                                    'title' => 'RegionItemType',
                                    'description' => 'RegionItemType',
                                    'type' => 'object',
                                    'properties' => [
                                        'Iccid' => [
                                            'title' => '资源一级ID',
                                            'description' => '物联网卡的iccid。',
                                            'type' => 'string',
                                            'example' => '89091231231219123',
                                        ],
                                        'NetType' => [
                                            'title' => '资源名称',
                                            'description' => '网络类型，取值：'."\n"
                                                ."\n"
                                                .'- **4G**'."\n"
                                                .'- **5G**',
                                            'type' => 'string',
                                            'example' => '5G',
                                        ],
                                        'APN' => [
                                            'title' => '创建时间',
                                            'description' => '运营商APN的id。',
                                            'type' => 'string',
                                            'example' => 'bjaliyun01s.5gbj.bjiot',
                                        ],
                                        'ISP' => [
                                            'description' => '5G高速上云实例的运营商。取值：'."\n"
                                                .'- **Telecom**：中国电信'."\n"
                                                .'- **Mobile**：中国移动'."\n"
                                                .'- **Unicom**：中国联通',
                                            'type' => 'string',
                                            'example' => 'Telecom',
                                        ],
                                        'IpAddress' => [
                                            'description' => '卡的静态IP地址。',
                                            'type' => 'string',
                                            'example' => '10.0.0.118',
                                        ],
                                        'Imsi' => [
                                            'description' => '物联网卡的IMSI。',
                                            'type' => 'string',
                                            'example' => '8912039123',
                                        ],
                                        'Imei' => [
                                            'description' => '物联网卡的IMEI。',
                                            'type' => 'string',
                                            'example' => '7896129300',
                                        ],
                                        'Lock' => [
                                            'description' => '卡是否锁定。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'Spec' => [
                                            'description' => '卡的规格，取值：'."\n"
                                                ."\n"
                                                .'- **CONSUMER\\_THREE\\_IN\\_ONE:** 消费电子级物联网卡\\_三合一'."\n"
                                                .'- **INDUSTRY\\_PATCH:** 工业级物联网贴片卡'."\n"
                                                .'- **CONSUMER\\_PATCH:** 消费电子级物联网贴片卡'."\n"
                                                .'- **INDUSTRY\\_GENERAL:** 工业级物联网卡\\_普通'."\n"
                                                .'- **INDUSTRY\\_MICRO:** 工业级物联网卡\\_Micro'."\n"
                                                .'- **CONSUMER\\_GENERAL:** 消费电子级物联网卡_普通'."\n"
                                                .'- **CONSUMER\\_TWO\\_IN\\_ONE:** 消费电子级物联网卡\\_二合一'."\n"
                                                .'- **INDUSTRY\\_NANO:** 工业级物联网卡\\_Nano'."\n"
                                                .'- **CAR\\_PATCH:** 车规级物联网贴片卡',
                                            'type' => 'string',
                                            'example' => 'CONSUMER_THREE_IN_ONE',
                                        ],
                                        'Status' => [
                                            'description' => '卡的状态，取值：'."\n"
                                                ."\n"
                                                .'- **Testable**: 可测试'."\n"
                                                .'- **Activatable**: 可激活'."\n"
                                                .'- **Activated**: 已激活'."\n"
                                                .'- **Deactivated**: 已停用'."\n"
                                                .'- **Failed**: 已失效'."\n"
                                                .'- **Cleared**: 已清除'."\n"
                                                .'- **Replaced**: 已更换'."\n"
                                                .'- **Resuming**: 恢复中'."\n"
                                                .'- **ShutDown**: 已停机',
                                            'type' => 'string',
                                            'example' => 'Activated',
                                        ],
                                        'Description' => [
                                            'description' => '描述。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'Name' => [
                                            'description' => '名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'UsageDataMonth' => [
                                            'description' => '本月已用流量，单位MB。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '20',
                                        ],
                                        'OrderId' => [
                                            'description' => '订单号。',
                                            'type' => 'string',
                                            'example' => '89099123012',
                                        ],
                                        'ActivatedTime' => [
                                            'description' => '激活时间。',
                                            'type' => 'string',
                                            'example' => '2022-3-15 22:20:00',
                                        ],
                                        'BusinessStatus' => [
                                            'description' => '业务状态，取值：'."\n"
                                                ."\n"
                                                .'- **Creating**: 创建中'."\n"
                                                .'- **Available**: 稳定状态，有效'."\n"
                                                .'- **Configuring**: 配置中'."\n"
                                                .'- **Deleting**: 删除中',
                                            'type' => 'string',
                                            'example' => 'Available',
                                        ],
                                        'Msisdn' => [
                                            'description' => '物联网卡的MSISDN。',
                                            'type' => 'string',
                                            'example' => '1441204374591',
                                        ],
                                        'UsageDataTotal' => [
                                            'description' => '单卡总使用量',
                                            'type' => 'string',
                                            'example' => '50',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '下一页查询所需值。',
                                'type' => 'string',
                                'example' => 'iou001238joojjaere',
                            ],
                            'MaxResults' => [
                                'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                                'type' => 'string',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '列表的条目数。',
                                'type' => 'string',
                                'example' => '2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"88C2F32F-B641-5980-B7A5-6907050ABCD1\\",\\n  \\"Cards\\": [\\n    {\\n      \\"Iccid\\": \\"89091231231219123\\",\\n      \\"NetType\\": \\"5G\\",\\n      \\"APN\\": \\"bjaliyun01s.5gbj.bjiot\\",\\n      \\"ISP\\": \\"Telecom\\",\\n      \\"IpAddress\\": \\"10.0.0.118\\",\\n      \\"Imsi\\": \\"8912039123\\",\\n      \\"Imei\\": \\"7896129300\\",\\n      \\"Lock\\": false,\\n      \\"Spec\\": \\"CONSUMER_THREE_IN_ONE\\",\\n      \\"Status\\": \\"Activated\\",\\n      \\"Description\\": \\"test\\",\\n      \\"Name\\": \\"test\\",\\n      \\"UsageDataMonth\\": 20,\\n      \\"OrderId\\": \\"89099123012\\",\\n      \\"ActivatedTime\\": \\"2022-3-15 22:20:00\\",\\n      \\"BusinessStatus\\": \\"Available\\",\\n      \\"Msisdn\\": \\"1441204374591\\",\\n      \\"UsageDataTotal\\": \\"50\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"iou001238joojjaere\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"TotalCount\\": \\"2\\"\\n}","type":"json"}]',
            'title' => '查询5G高速上云实例下的卡信息',
        ],
        'ListCardUsages' => [
            'summary' => '查询物联网卡流量使用信息。',
            'methods' => [
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
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例ID 。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'Iccids',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '物联网SIM卡卡号，每次最大50条',
                        'type' => 'array',
                        'items' => [
                            'description' => '物联网卡的iccid。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '890912389123',
                        ],
                        'required' => false,
                        'maxItems' => 50,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '186B6E37-D9D1-5E64-ACDE-E89F7E68A37B',
                            ],
                            'Cards' => [
                                'title' => '数组，返回示例目录。',
                                'description' => '卡信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'title' => 'RegionItemType',
                                    'description' => '卡信息项',
                                    'type' => 'object',
                                    'properties' => [
                                        'Iccid' => [
                                            'title' => '资源一级ID',
                                            'description' => '物联网卡的iccid。',
                                            'type' => 'string',
                                            'example' => '89091231231219123',
                                        ],
                                        'UsageDataMonth' => [
                                            'description' => '本月已用流量，单位MB。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '20',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '返回总量',
                                'type' => 'string',
                                'example' => '2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"186B6E37-D9D1-5E64-ACDE-E89F7E68A37B\\",\\n  \\"Cards\\": [\\n    {\\n      \\"Iccid\\": \\"89091231231219123\\",\\n      \\"UsageDataMonth\\": 20\\n    }\\n  ],\\n  \\"TotalCount\\": \\"2\\"\\n}","type":"json"}]',
            'title' => '查询卡流量使用信息',
            'description' => '当月流量信息是本月1号0点开始到月底结束。',
        ],
        'GetCard' => [
            'summary' => '获取单卡信息。',
            'methods' => [
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
                    'name' => 'Iccid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的iccid。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11111111111',
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
                                'description' => '请求iD',
                                'type' => 'string',
                                'enumValueTitles' => [],
                                'example' => '0B28B72A-BD16-51F7-AAEE-55247FE02729',
                            ],
                            'Iccid' => [
                                'description' => '物联网卡的iccid。',
                                'type' => 'string',
                                'example' => '111111111',
                            ],
                            'NetType' => [
                                'description' => '网络类型，取值：'."\n"
                                    ."\n"
                                    .'- **4G**'."\n"
                                    .'- **5G**',
                                'type' => 'string',
                                'example' => '5G',
                            ],
                            'APN' => [
                                'description' => '运营商APN的id。',
                                'type' => 'string',
                                'example' => 'zjalyjs01s.5gjs.njiot',
                            ],
                            'ISP' => [
                                'description' => '5G高速上云实例的运营商。取值：'."\n"
                                    .'- **telecom**：中国电信。'."\n"
                                    .'- **mobile**：中国移动。'."\n"
                                    .'- **unicom**：中国联通。',
                                'type' => 'string',
                                'example' => 'Unicom',
                            ],
                            'IpAddress' => [
                                'description' => '物联网卡的固定IP地址。',
                                'type' => 'string',
                                'example' => '172.24.2.121',
                            ],
                            'Imsi' => [
                                'description' => '物联网卡的IMSI。',
                                'type' => 'string',
                                'example' => '12123123',
                            ],
                            'Imei' => [
                                'description' => '设备IMEI。',
                                'type' => 'string',
                                'example' => '23412313513512',
                            ],
                            'Lock' => [
                                'description' => '卡是否锁定。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'Spec' => [
                                'description' => '规格',
                                'type' => 'string',
                                'example' => 'CONSUMER_THREE_IN_ONE',
                            ],
                            'SimStatus' => [
                                'description' => '卡的状态，取值：'."\n"
                                    ."\n"
                                    .'- **Testable**: 可测试'."\n"
                                    .'- **Activatable**: 可激活'."\n"
                                    .'- **Activated**: 已激活'."\n"
                                    .'- **Deactivated**: 已停用'."\n"
                                    .'- **Failed**: 已失效'."\n"
                                    .'- **Cleared**: 已清除'."\n"
                                    .'- **Replaced**: 已更换'."\n"
                                    .'- **Resuming**: 恢复中'."\n"
                                    .'- **ShutDown**: 已停机',
                                'type' => 'string',
                                'example' => 'Deactivated',
                            ],
                            'Status' => [
                                'description' => '实例状态，取值：'."\n"
                                    ."\n"
                                    .'- **Creating**: 创建中'."\n"
                                    .'- **Available**: 有效的稳定状态'."\n"
                                    .'- **UnAvailable**: 无效状态'."\n"
                                    .'- **Pending**: 配置中'."\n"
                                    .'- **Deleting**: 删除中',
                                'type' => 'string',
                                'example' => 'Available',
                            ],
                            'Description' => [
                                'description' => '描述。',
                                'type' => 'string',
                                'example' => 'task-test',
                            ],
                            'Name' => [
                                'description' => '名称。',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'WirelessCloudConnectorId' => [
                                'description' => '5G高速上云实例id。',
                                'type' => 'string',
                                'example' => 'cc5g-xxxxxxx',
                            ],
                            'CloudConnectorId' => [
                                'description' => '云连接id。',
                                'type' => 'string',
                                'example' => 'iotcc-xxxxxxxx',
                            ],
                            'UsageDataMonth' => [
                                'description' => '本月已用流量，单位MB。'."\n"
                                    .'本字段信息存在一些外部条件等影响，会出现信息同步滞后，建议使用[ListCardUsages](https://help.aliyun.com/document_detail/472077.html?spm=a2c4g.438976.0.0.8bbc1711r5XXDT)查询单卡流量信息。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'OrderId' => [
                                'description' => '订单id。',
                                'type' => 'string',
                                'example' => '12312341234124',
                            ],
                            'ActivatedTime' => [
                                'description' => '激活时间。',
                                'type' => 'string',
                                'example' => '2022-08-25 17:34:57',
                            ],
                            'Msisdn' => [
                                'description' => '物联网卡的MSISDN。',
                                'type' => 'string',
                                'example' => '2312341231235',
                            ],
                            'UsageDataTotal' => [
                                'description' => '单卡总使用量，单位MB。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1000',
                            ],
                            'LimitThreshold' => [
                                'description' => '达量限速阈值，单位MB。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '50',
                            ],
                            'StopThreshold' => [
                                'description' => '达量停机阈值，单位MB。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '4096',
                            ],
                            'AlarmThreshold' => [
                                'description' => '告警阈值，单位MB。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1000',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0B28B72A-BD16-51F7-AAEE-55247FE02729\\",\\n  \\"Iccid\\": \\"111111111\\",\\n  \\"NetType\\": \\"5G\\",\\n  \\"APN\\": \\"zjalyjs01s.5gjs.njiot\\",\\n  \\"ISP\\": \\"Unicom\\",\\n  \\"IpAddress\\": \\"172.24.2.121\\",\\n  \\"Imsi\\": \\"12123123\\",\\n  \\"Imei\\": \\"23412313513512\\",\\n  \\"Lock\\": \\"true\\",\\n  \\"Spec\\": \\"CONSUMER_THREE_IN_ONE\\",\\n  \\"SimStatus\\": \\"Deactivated\\",\\n  \\"Status\\": \\"Available\\",\\n  \\"Description\\": \\"task-test\\",\\n  \\"Name\\": \\"test\\",\\n  \\"WirelessCloudConnectorId\\": \\"cc5g-xxxxxxx\\",\\n  \\"CloudConnectorId\\": \\"iotcc-xxxxxxxx\\",\\n  \\"UsageDataMonth\\": 50,\\n  \\"OrderId\\": \\"12312341234124\\",\\n  \\"ActivatedTime\\": \\"2022-08-25 17:34:57\\",\\n  \\"Msisdn\\": \\"2312341231235\\",\\n  \\"UsageDataTotal\\": 1000,\\n  \\"LimitThreshold\\": 50,\\n  \\"StopThreshold\\": 4096,\\n  \\"AlarmThreshold\\": 1000\\n}","type":"json"}]',
            'title' => '获取单卡信息',
        ],
        'GetCardLockReason' => [
            'summary' => '获取锁卡原因。',
            'methods' => [
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
                    'name' => 'Iccid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的iccid。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '*********11111',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => 'F32C0BBE-5025-5561-8976-7BD096BA21FB',
                            ],
                            'LockReason' => [
                                'description' => '锁定原因。',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'CreditTwoWayStop' => 'CreditTwoWayStop',
                                    'ExpireStop' => 'ExpireStop',
                                    'ActiveTwoWayStop' => 'ActiveTwoWayStop',
                                    'LocationStop' => 'LocationStop',
                                    'NoReasonStop' => 'NoReasonStop',
                                    'SeparationStop' => 'SeparationStop',
                                    'M2MStop' => 'M2MStop',
                                    'ForceTwoWayStop' => 'ForceTwoWayStop',
                                ],
                                'example' => 'ForceTwoWayStop',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F32C0BBE-5025-5561-8976-7BD096BA21FB\\",\\n  \\"LockReason\\": \\"ForceTwoWayStop\\"\\n}","type":"json"}]',
            'title' => '获取锁卡原因',
        ],
        'FailCards' => [
            'summary' => '销卡。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Iccids',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '卡的iccid列表，最多200条。',
                        'type' => 'array',
                        'items' => [
                            'description' => '物联网卡的iccid。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [],
                            'example' => '8986*******',
                        ],
                        'required' => true,
                        'enumValueTitles' => [],
                        'example' => 'FailCards',
                        'maxItems' => 50,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。'."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'TF-CreateServerlessDBInstance-1639649079-51d933f6-0251-4057-9276',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会激活/恢复卡状态。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后激活/恢复卡状态。',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '186B6E37-D9D1-5E64-ACDE-E89F7E68A37B',
                            ],
                        ],
                        'enumValueTitles' => [],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"186B6E37-D9D1-5E64-ACDE-E89F7E68A37B\\"\\n}","type":"json"}]',
            'title' => '销卡',
            'description' => '**销卡操作需谨慎，对卡进行销卡行为不可逆。**。',
        ],
        'RebindCards' => [
            'summary' => '换绑解锁单卡。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Iccids',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '物联网SIM卡卡号，每次最大500条',
                        'type' => 'array',
                        'items' => [
                            'description' => '物联网卡的iccid。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '123456789',
                        ],
                        'required' => true,
                        'maxItems' => 1000,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '区域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会删除批量操作卡任务。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后删除批量操作卡任务。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D2A9864E-BB8D-5A5C-90FC-E2FBD5D0BF9B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.CardsSimStatusNotReBind',
                        'errorMessage' => 'The operation is not allowed because of card status not support to rebind.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.TestCardFlowExceedQuota',
                        'errorMessage' => 'The operation is not allowed because of test card flow exceed quota.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.IccID',
                        'errorMessage' => 'The specified resource of iccid is not found.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.SingCardOneMonthRebindExceeded',
                        'errorMessage' => 'The operation is not allowed because of the number of times per card per month exceed quota.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D2A9864E-BB8D-5A5C-90FC-E2FBD5D0BF9B\\"\\n}","type":"json"}]',
            'title' => '换绑解锁单卡',
            'description' => '物联网卡在换绑设备时，运营商会锁定此卡，为了能够正常使用，一般需要对此卡进行换绑解锁，注意：单卡单月换绑解锁部分运营商只能支持2次。',
        ],
        'ListCardDayUsages' => [
            'summary' => '查询单卡单日流量。',
            'methods' => [
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
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'Iccids',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '物联网SIM卡卡号，每次最大50条',
                        'type' => 'array',
                        'items' => [
                            'description' => '物联网卡的iccid。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '890912389123',
                        ],
                        'required' => true,
                        'maxItems' => 50,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'LatestMonthNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询最近几个月卡流量数据，默认两个月，包含当月。参数范围[1,6]',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '6',
                        'minimum' => '1',
                        'enumValueTitles' => [],
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'AA93A076-3D94-51AB-AC70-4C94AF003B03',
                            ],
                            'Cards' => [
                                'title' => '数组，返回示例目录。',
                                'description' => '卡流量信息',
                                'type' => 'array',
                                'items' => [
                                    'title' => 'RegionItemType',
                                    'description' => '卡流量信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'Iccid' => [
                                            'title' => '资源一级ID',
                                            'description' => '物联网卡的iccid。',
                                            'type' => 'string',
                                            'example' => '89091231231219123',
                                        ],
                                        'UsageDataMonths' => [
                                            'description' => '卡单月流量信息',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '卡单月流量信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'UsageDataMonth' => [
                                                        'description' => '月已用流量，单位MB。',
                                                        'type' => 'string',
                                                        'example' => '1030',
                                                    ],
                                                    'Month' => [
                                                        'description' => '月份',
                                                        'type' => 'string',
                                                        'example' => '202207',
                                                    ],
                                                    'CardDayUsages' => [
                                                        'description' => '卡天级别流量信息',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '卡天级别流量信息',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Day' => [
                                                                    'description' => '日',
                                                                    'type' => 'string',
                                                                    'example' => '20220701',
                                                                ],
                                                                'UsageData' => [
                                                                    'description' => '日已用流量，单位MB。',
                                                                    'type' => 'string',
                                                                    'example' => '40',
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
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AA93A076-3D94-51AB-AC70-4C94AF003B03\\",\\n  \\"Cards\\": [\\n    {\\n      \\"Iccid\\": \\"89091231231219123\\",\\n      \\"UsageDataMonths\\": [\\n        {\\n          \\"UsageDataMonth\\": \\"1030\\",\\n          \\"Month\\": \\"202207\\",\\n          \\"CardDayUsages\\": [\\n            {\\n              \\"Day\\": \\"20220701\\",\\n              \\"UsageData\\": \\"40\\"\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询单卡单日流量',
            'description' => '返回参数如果没有此卡或者有此卡但是某些天没有，说明这些未返回的天此卡没有使用流量。',
        ],
        'ResetAreaLimitCards' => [
            'summary' => '物联网卡区域限制解锁',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Iccids',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '物联网SIM卡卡号，每次最大50条',
                        'type' => 'array',
                        'items' => [
                            'description' => '物联网SIM卡卡号，每次最大50条',
                            'type' => 'string',
                            'required' => false,
                            'example' => '898606*******',
                        ],
                        'required' => true,
                        'maxItems' => 1000,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。'."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会创建批量操作卡任务。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查直接创建批量操作卡任务。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Province',
                    'in' => 'query',
                    'schema' => [
                        'description' => '省份。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '湖南省',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应返回体',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.CardsSimStatusNotResume',
                        'errorMessage' => 'The operation is not allowed because of card status not support to resume.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
            'title' => '区域限制解锁',
        ],
        'ListCardAreaLimitSupportArea' => [
            'summary' => '查询卡区域解锁支持的省份。',
            'methods' => [
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
                    'name' => 'AcceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回信息的语言类型：'."\n"
                            ."\n"
                            .'- zh：中文'."\n"
                            .'- en：英文'."\n"
                            ."\n"
                            .'默认不填中文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '区域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ProvinceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '省份名称（非必填）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '浙江省',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结构体',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求iD',
                                'type' => 'string',
                                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
                            ],
                            'Provinces' => [
                                'title' => '数组，返回示例目录。',
                                'description' => '数组，返回示例目录。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '支持的中国省份。',
                                    'type' => 'string',
                                    'example' => '江苏省',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\",\\n  \\"Provinces\\": [\\n    \\"江苏省\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询卡区域解锁支持的省份',
        ],
        'CreateAuthorizationRule' => [
            'summary' => '创建授权规则。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权规则名称，长度不超过128字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权规则描述，长度不超过256字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ar5g-test',
                    ],
                ],
                [
                    'name' => 'SourceCidr',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源CIDR地址块。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0.0.0.0/0',
                    ],
                ],
                [
                    'name' => 'DestinationType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标类型，取值：'."\n"
                            .'- **Cidr**: 网段'."\n"
                            .'- **Domain**: 域名或泛域名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Cidr',
                    ],
                ],
                [
                    'name' => 'Protocol',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协议类型。取值：'."\n"
                            ."\n"
                            .'- **icmp**：网络控制报文协议。'."\n"
                            .'- **tcp**：传输控制协议。'."\n"
                            .'- **udp**：用户数据报协议。'."\n"
                            .'- **all**：支持所有协议。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'all',
                    ],
                ],
                [
                    'name' => 'DestinationPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标端口范围。取值范围：'."\n"
                            ."\n"
                            .'- TCP、UDP协议：1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。'."\n"
                            ."\n"
                            .'- ICMP协议：-1/-1。'."\n"
                            ."\n"
                            .'- ALL：-1/-1。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-1/-1',
                    ],
                ],
                [
                    'name' => 'Destination',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标地址或域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '10.0.0.1',
                    ],
                ],
                [
                    'name' => 'Policy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权规则策略，取值：'."\n"
                            .'- **Permit**：允许'."\n"
                            .'- **Deny**：拒绝',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Permit',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会创建授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后直接创建授权规则。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '61202DF5-668B-5EDA-8177-F2D71F4737C1',
                            ],
                            'AuthorizationRuleId' => [
                                'description' => '授权规则id。',
                                'type' => 'string',
                                'example' => 'ar5g-12fnojjtkkre28t08j',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.CIDRMaskTooLarge',
                        'errorMessage' => 'The operation is not allowed because of CIDR too large.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"61202DF5-668B-5EDA-8177-F2D71F4737C1\\",\\n  \\"AuthorizationRuleId\\": \\"ar5g-12fnojjtkkre28t08j\\"\\n}","type":"json"}]',
            'title' => '创建授权规则',
        ],
        'DeleteAuthorizationRule' => [
            'summary' => '删除授权规则。',
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
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'AuthorizationRuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权规则id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ar5g-xxxx',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会删除授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后直接删除授权规则。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
            'title' => '删除授权规则',
        ],
        'UpdateAuthorizationRule' => [
            'summary' => '更新授权规则。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'AuthorizationRuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权规则id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ar5g-xxxx',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '名称，长度不超过128字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '描述，长度不超过256字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ar5g-test',
                    ],
                ],
                [
                    'name' => 'SourceCidr',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源CIDR地址块。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0.0.0.0/0',
                    ],
                ],
                [
                    'name' => 'Destination',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标地址或域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10.0.0.1',
                    ],
                ],
                [
                    'name' => 'Protocol',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协议类型。取值：'."\n"
                            ."\n"
                            .'- **tcp**。'."\n"
                            .'- **udp**。'."\n"
                            .'- **icmp**。'."\n"
                            .'- **all**：支持所有协议。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'all',
                    ],
                ],
                [
                    'name' => 'DestinationPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标端口范围。取值范围：'."\n"
                            ."\n"
                            .'- TCP、UDP协议：1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。'."\n"
                            ."\n"
                            .'- ICMP协议：-1/-1。'."\n"
                            ."\n"
                            .'- ALL：-1/-1。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-1/-1',
                    ],
                ],
                [
                    'name' => 'Policy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权规则策略，取值：'."\n"
                            .'- **Permit**：允许'."\n"
                            .'- **Deny**：拒绝',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Permit',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会更新授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后更新授权规则。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => 'D3BAFE75-C670-52DB-9739-03133E5FC914',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.CIDRMaskTooLarge',
                        'errorMessage' => 'The operation is not allowed because of CIDR too large.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D3BAFE75-C670-52DB-9739-03133E5FC914\\"\\n}","type":"json"}]',
            'title' => '更新授权规则',
        ],
        'AddDNSAuthorizationRule' => [
            'summary' => '创建DNS授权规则。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '名称，长度不超过128字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '描述，长度不超过256字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ar5g-test',
                    ],
                ],
                [
                    'name' => 'SourceDNSIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DNS服务器地址。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '0.0.0.0',
                    ],
                ],
                [
                    'name' => 'DestinationIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要重定向的DNS服务器地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.1.1.1',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会创建DNS授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后创建DNS授权规则。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
                            ],
                            'AuthorizationRuleId' => [
                                'description' => '生成的DNS授权规则id。',
                                'type' => 'string',
                                'example' => 'ar5g-xxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\",\\n  \\"AuthorizationRuleId\\": \\"ar5g-xxxx\\"\\n}","type":"json"}]',
            'title' => '创建DNS授权规则',
        ],
        'UpdateDNSAuthorizationRule' => [
            'summary' => '更新DNS授权规则。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'AuthorizationRuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DNS授权规则ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ar5g-xxxx',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '名称，长度不超过128字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '描述，长度不超过256字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ar5g-test',
                    ],
                ],
                [
                    'name' => 'SourceDNSIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DNS服务器地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0.0.0.0',
                    ],
                ],
                [
                    'name' => 'DestinationIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要重定向的DNS服务器地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10.0.0.1',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会更新DNS授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后更新DNS授权规则。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
            'title' => '更新DNS授权规则',
        ],
        'ListAuthorizationRules' => [
            'summary' => '查询授权规则列表。',
            'methods' => [
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
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'Statuses',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '授权规则状态列表',
                        'type' => 'array',
                        'items' => [
                            'description' => ' 授权规则状态，取值：'."\n"
                                .'- **Creating**:创建中'."\n"
                                .'- **Pending**:配置中'."\n"
                                .'- **Available**:有效的稳定状态'."\n"
                                .'- **Invalid**: 无效'."\n"
                                .'- **Deleting**:删除中',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'Creating',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AuthorizationRuleIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '授权规则id列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '授权规则id',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ar5g-xxxx',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Names',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '授权规则名称列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '名称，长度不超过128字符。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'Test',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DestinationType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标类型，取值：'."\n"
                            .'- **Cidr**: 网段'."\n"
                            .'- **Domain**: 域名或泛域名'."\n"
                            .'- **IpPort**: IP重定向',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Cidr',
                    ],
                ],
                [
                    'name' => 'Protocol',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协议类型。取值：'."\n"
                            ."\n"
                            .'- **tcp**。'."\n"
                            .'- **udp**。'."\n"
                            .'- **icmp**。'."\n"
                            .'- **all**：支持所有协议。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'all',
                    ],
                ],
                [
                    'name' => 'DestinationPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标端口范围。取值范围：'."\n"
                            ."\n"
                            .'- TCP、UDP协议：1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。'."\n"
                            ."\n"
                            .'- ICMP协议：-1/-1。'."\n"
                            ."\n"
                            .'- ALL：-1/-1。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-1/-1',
                    ],
                ],
                [
                    'name' => 'Destination',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标地址、域名或泛域名，前缀匹配。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10.0.0.1',
                    ],
                ],
                [
                    'name' => 'Policy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权规则策略，取值：'."\n"
                            .'- **Permit**：允许'."\n"
                            .'- **Deny**：拒绝'."\n"
                            .'- **Mapping**：重定向',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Permit',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '类型，取值：'."\n"
                            .'- **System**: 系统'."\n"
                            .'- **Default**: 默认'."\n"
                            .'- **Customer**: 自定义',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'System',
                    ],
                ],
                [
                    'name' => 'Dns',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否为DNS。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上一页的查询返回的值，首页查询不传值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iou001238joojjaere',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '207F9929-806E-5622-8E4F-8484F7000C22',
                            ],
                            'AuthorizationRules' => [
                                'title' => '数组，返回示例目录。',
                                'description' => '授权规则列表。',
                                'type' => 'array',
                                'items' => [
                                    'title' => 'RegionItemType',
                                    'description' => 'RegionItemType',
                                    'type' => 'object',
                                    'properties' => [
                                        'AuthorizationRuleId' => [
                                            'title' => '资源一级ID',
                                            'description' => '授权规则id。',
                                            'type' => 'string',
                                            'example' => 'ar5g-xxxx',
                                        ],
                                        'Status' => [
                                            'title' => '资源名称',
                                            'description' => '授权规则状态，取值：'."\n"
                                                .'-  **Creating**: 创建中 '."\n"
                                                .'-  **Pending**: 配置中'."\n"
                                                .'-  **Available**: 有效的稳定状态'."\n"
                                                .'-  **Invalid**: 无效'."\n"
                                                .'-  **Deleting**: 删除中',
                                            'type' => 'string',
                                            'example' => 'Pending',
                                        ],
                                        'Name' => [
                                            'title' => '创建时间',
                                            'description' => '授权规则名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'Description' => [
                                            'description' => '授权规则描述。',
                                            'type' => 'string',
                                            'example' => 'ar5g-test',
                                        ],
                                        'Type' => [
                                            'description' => '类型，取值：'."\n"
                                                .'- **System**: 系统'."\n"
                                                .'- **Default**: 默认'."\n"
                                                .'- **Customer**: 自定义',
                                            'type' => 'string',
                                            'example' => 'Default',
                                        ],
                                        'SourceCidr' => [
                                            'description' => '源CIDR地址块。',
                                            'type' => 'string',
                                            'example' => '0.0.0.0/0',
                                        ],
                                        'DestinationType' => [
                                            'description' => '目标类型，取值：'."\n"
                                                .'- **Cidr**: 网段'."\n"
                                                .'- **Domain**: 域名或泛域名'."\n"
                                                .'- **IpPort**: IP重定向',
                                            'type' => 'string',
                                            'example' => 'Cidr',
                                        ],
                                        'Protocol' => [
                                            'description' => '协议类型。取值：'."\n"
                                                ."\n"
                                                .'- **tcp**。'."\n"
                                                .'- **udp**。'."\n"
                                                .'- **icmp**。'."\n"
                                                .'- **all**：支持所有协议。',
                                            'type' => 'string',
                                            'example' => 'all',
                                        ],
                                        'DestinationPort' => [
                                            'description' => '目标端口范围。取值范围：'."\n"
                                                ."\n"
                                                .'- TCP、UDP协议：1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。'."\n"
                                                .'- ICMP协议：-1/-1。'."\n"
                                                .'- ALL：-1/-1。',
                                            'type' => 'string',
                                            'example' => '0-65535',
                                        ],
                                        'Destination' => [
                                            'description' => '目标地址、域名或泛域名，前缀匹配。',
                                            'type' => 'string',
                                            'example' => '10.0.0.0/24',
                                        ],
                                        'Policy' => [
                                            'description' => '授权规则策略，取值：'."\n"
                                                .'- **Permit**：允许'."\n"
                                                .'- **Deny**：拒绝'."\n"
                                                .'- **Mapping**：重定向',
                                            'type' => 'string',
                                            'example' => 'Permit',
                                        ],
                                        'Dns' => [
                                            'description' => '是否为DNS。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-3-15 22:20:00',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '下一次查询的起始token。',
                                'type' => 'string',
                                'example' => 'iou001238joojjaere',
                            ],
                            'MaxResults' => [
                                'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                                'type' => 'string',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '列表的条目数。',
                                'type' => 'string',
                                'example' => '2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"207F9929-806E-5622-8E4F-8484F7000C22\\",\\n  \\"AuthorizationRules\\": [\\n    {\\n      \\"AuthorizationRuleId\\": \\"ar5g-xxxx\\",\\n      \\"Status\\": \\"Pending\\",\\n      \\"Name\\": \\"test\\",\\n      \\"Description\\": \\"ar5g-test\\",\\n      \\"Type\\": \\"Default\\",\\n      \\"SourceCidr\\": \\"0.0.0.0/0\\",\\n      \\"DestinationType\\": \\"Cidr\\",\\n      \\"Protocol\\": \\"all\\",\\n      \\"DestinationPort\\": \\"0-65535\\",\\n      \\"Destination\\": \\"10.0.0.0/24\\",\\n      \\"Policy\\": \\"Permit\\",\\n      \\"Dns\\": true,\\n      \\"CreateTime\\": \\"2022-3-15 22:20:00\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"iou001238joojjaere\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"TotalCount\\": \\"2\\"\\n}","type":"json"}]',
            'title' => '查询授权规则',
        ],
        'CreateBatchOperateCardsTask' => [
            'summary' => '创建批量操作卡任务。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '批量操作任务名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '批量操作任务描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'task- test',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会创建批量操作卡任务。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查直接创建批量操作卡任务。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'WirelessCloudConnectorIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '5G上云实例的id列表，最多10个。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cc5g-xxxx',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Iccids',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '卡的iccid列表，最多200条。',
                        'type' => 'array',
                        'items' => [
                            'description' => '卡的iccid。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '890912389123',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IccidsOssFilePath',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iccid文件存放路径。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://examplebucket.oss-eu-central-1.aliyuncs.com/***',
                    ],
                ],
                [
                    'name' => 'OperateType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '限制类型，取值：'."\n"
                            ."\n"
                            .'- **BreakNetwork**: 达量断网'."\n"
                            .'- **LimitRate**: 达量限速'."\n"
                            .'- **Alarm**: 达量告警',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'BreakNetwork',
                    ],
                ],
                [
                    'name' => 'Threshold',
                    'in' => 'query',
                    'schema' => [
                        'description' => '达量阈值，单位MB。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'EffectType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '生效类型，取值：'."\n"
                            ."\n"
                            .'- **CurrentMonth**：当月生效'."\n"
                            .'- **ContinualMonth**：连续生效',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'CurrentMonth',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
                            ],
                            'BatchOperateCardsTaskId' => [
                                'description' => '批量操作任务id。',
                                'type' => 'string',
                                'example' => 'boct-xxxx',
                            ],
                            'OperateResultOssFilePath' => [
                                'description' => '批量操作结果的文件路径。',
                                'type' => 'string',
                                'example' => 'https://examplebucket.oss-eu-central-1.aliyuncs.com/***',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\",\\n  \\"BatchOperateCardsTaskId\\": \\"boct-xxxx\\",\\n  \\"OperateResultOssFilePath\\": \\"https://examplebucket.oss-eu-central-1.aliyuncs.com/***\\"\\n}","type":"json"}]',
            'title' => '创建批量操作卡任务',
        ],
        'DeleteBatchOperateCardsTask' => [
            'summary' => '删除批量操作卡任务。',
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
                    'name' => 'BatchOperateCardsTaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建批量操作任务生成的id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'boct-xxx',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会删除批量操作卡任务。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后删除批量操作卡任务。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shenzhen',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
            'title' => '删除批量操作卡任务',
        ],
        'UpdateBatchOperateCardsTask' => [
            'summary' => '更新批量操作卡任务。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'task-test',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会更新批量操作卡任务。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后更新批量操作卡任务。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'WirelessCloudConnectorIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '5G高速上云实例的id列表，最多10个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '5G高速上云实例id。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cc5g-xxxx',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Iccids',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '卡的iccid列表，最多200条。',
                        'type' => 'array',
                        'items' => [
                            'description' => '卡的iccid。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '890912389123',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IccidsOssFilePath',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iccid文件存放路径。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cciot-cn-hangzhou/127859184306****/***.csv',
                    ],
                ],
                [
                    'name' => 'OperateType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '限制类型，取值: '."\n"
                            ."\n"
                            .'- **BreakNetwork**: 达量断网'."\n"
                            .'- **LimitRate**: 达量限速'."\n"
                            .'- **Alarm**: 达量告警',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'BreakNetwork',
                    ],
                ],
                [
                    'name' => 'Threshold',
                    'in' => 'query',
                    'schema' => [
                        'description' => '达量阈值，单位MB。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'EffectType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '生效类型，取值：'."\n"
                            ."\n"
                            .'- **CurrentMonth**'."\n"
                            .'- **ContinualMonth**',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'CurrentMonth',
                    ],
                ],
                [
                    'name' => 'BatchOperateCardsTaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '批量操作任务id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'boct-xxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
            'title' => '更新批量操作卡任务',
        ],
        'ListBatchOperateCardsTasks' => [
            'summary' => '列出批量操作卡任务。',
            'methods' => [
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
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Statuses',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '批量操作任务的状态。',
                        'type' => 'array',
                        'items' => [
                            'description' => '任务状态，取值：'."\n"
                                .'-  **Creating**: 创建中 '."\n"
                                .'-  **Pending**: 待生效'."\n"
                                .'-  **Available**: 全部成功'."\n"
                                .'-  **PartialAvailable**: 部分成功'."\n"
                                .'-  **UnAvailable**: 已失效'."\n"
                                .'-  **Fail**: 全部失败',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'Creating',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BatchOperateCardsTaskIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '批量操作任务的id列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '批量操作任务id。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'boct-xxxx',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上一页的查询返回的值，首页查询不传值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iou001238joojjaere',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Names',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '批量操作的名称。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => 'xxxx工厂实例批量限速',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
                            ],
                            'BatchOperateCardsTasks' => [
                                'title' => '数组，返回示例目录。',
                                'description' => '卡批量操作任务列表。',
                                'type' => 'array',
                                'items' => [
                                    'title' => 'RegionItemType',
                                    'description' => '任务项',
                                    'type' => 'object',
                                    'properties' => [
                                        'BatchOperateCardsTaskId' => [
                                            'title' => '资源一级ID',
                                            'description' => '批量操作任务ID。',
                                            'type' => 'string',
                                            'example' => 'boct-xxxx',
                                        ],
                                        'Status' => [
                                            'description' => '任务状态，取值：'."\n"
                                                .'-  **Creating**: 创建中 '."\n"
                                                .'-  **Pending**: 待生效'."\n"
                                                .'-  **Available**: 全部成功'."\n"
                                                .'-  **PartialAvailable**: 部分成功'."\n"
                                                .'-  **UnAvailable**: 已失效'."\n"
                                                .'-  **Fail**: 全部失败',
                                            'type' => 'string',
                                            'example' => 'Available',
                                        ],
                                        'OperateType' => [
                                            'title' => '创建时间',
                                            'description' => '限制类型，枚举值：'."\n"
                                                ."\n"
                                                .'- **BreakNetwork**: 达量断网'."\n"
                                                .'- **LimitRate**: 达量限速'."\n"
                                                .'- **Alarm**: 达量告警',
                                            'type' => 'string',
                                            'example' => 'BreakNetwork',
                                        ],
                                        'Threshold' => [
                                            'description' => '达量阈值，单位MB。',
                                            'type' => 'string',
                                            'example' => '100',
                                        ],
                                        'EffectType' => [
                                            'description' => '生效类型，枚举值：'."\n"
                                                ."\n"
                                                .'- **CurrentMonth**'."\n"
                                                .'- **ContinualMonth**',
                                            'type' => 'string',
                                            'example' => 'CurrentMonth',
                                        ],
                                        'IccidsOssFilePath' => [
                                            'description' => 'iccid文件存放路径。',
                                            'type' => 'string',
                                            'example' => 'https://examplebucket.oss-eu-central-1.aliyuncs.com/***',
                                        ],
                                        'WirelessCloudConnectors' => [
                                            'description' => '5G高速上云的实例ID和状态列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'WirelessCloudConnectorId' => [
                                                        'description' => '5G高速上云实例id。',
                                                        'type' => 'string',
                                                        'example' => 'cc5g-xxxx',
                                                    ],
                                                    'Status' => [
                                                        'description' => '状态，枚举值：'."\n"
                                                            ."\n"
                                                            .'- **Creating**: 创建中'."\n"
                                                            .'- **Available**: 有效的稳定状态'."\n"
                                                            .'- **Pending**: 配置中'."\n"
                                                            .'- **Deleting**: 删除中'."\n"
                                                            .'- **Deleted**: 已删除',
                                                        'type' => 'string',
                                                        'example' => 'Deleted',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'OperateResultOssFilePath' => [
                                            'description' => '批量操作结果的文件路径。',
                                            'type' => 'string',
                                            'example' => 'https://examplebucket.oss-eu-central-1.aliyuncs.com/***',
                                        ],
                                        'Description' => [
                                            'description' => '批量操作描述。',
                                            'type' => 'string',
                                            'example' => 'task-test',
                                        ],
                                        'Name' => [
                                            'description' => '批量操作名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-3-15 22:20:00',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '下一次查询的起始token。',
                                'type' => 'string',
                                'example' => 'iou001238joojjaere',
                            ],
                            'MaxResults' => [
                                'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                                'type' => 'string',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '列表的条目数。',
                                'type' => 'string',
                                'example' => '2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\",\\n  \\"BatchOperateCardsTasks\\": [\\n    {\\n      \\"BatchOperateCardsTaskId\\": \\"boct-xxxx\\",\\n      \\"Status\\": \\"Available\\",\\n      \\"OperateType\\": \\"BreakNetwork\\",\\n      \\"Threshold\\": \\"100\\",\\n      \\"EffectType\\": \\"CurrentMonth\\",\\n      \\"IccidsOssFilePath\\": \\"https://examplebucket.oss-eu-central-1.aliyuncs.com/***\\",\\n      \\"WirelessCloudConnectors\\": [\\n        {\\n          \\"WirelessCloudConnectorId\\": \\"cc5g-xxxx\\",\\n          \\"Status\\": \\"Deleted\\"\\n        }\\n      ],\\n      \\"OperateResultOssFilePath\\": \\"https://examplebucket.oss-eu-central-1.aliyuncs.com/***\\",\\n      \\"Description\\": \\"task-test\\",\\n      \\"Name\\": \\"test\\",\\n      \\"CreateTime\\": \\"2022-3-15 22:20:00\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"iou001238joojjaere\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"TotalCount\\": \\"2\\"\\n}","type":"json"}]',
            'title' => '列出批量操作卡任务',
        ],
        'SubmitDiagnoseTaskForSingleCard' => [
            'summary' => '发起单张物联网卡的网络诊断。',
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
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'Source',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络诊断的源物联网卡ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '89860477102170127555',
                    ],
                ],
                [
                    'name' => 'Destination',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络诊断的目的IP或者域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '106.14.175.4',
                    ],
                ],
                [
                    'name' => 'BeginTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络诊断的开始时间戳。单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1662307201200',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络诊断的结束时间戳。单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1662307201200',
                    ],
                ],
                [
                    'name' => 'RegionNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例所在的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceUid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云连接器实例使用者的阿里云账号ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '253460731706911258',
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
                                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
                            ],
                            'DiagnoseTaskId' => [
                                'description' => '网络诊断任务ID。',
                                'type' => 'string',
                                'example' => 'diagnoseTask-bp2n6rgaj49qcs34jyzo8',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Forbidden.RAM',
                        'errorMessage' => 'Ram user does not have permission to perform this operation.',
                    ],
                    [
                        'errorCode' => 'cardIdNotExist',
                        'errorMessage' => 'diagnose task iccid not exist',
                    ],
                    [
                        'errorCode' => 'CardIPNotBind',
                        'errorMessage' => 'card ip not bind',
                    ],
                    [
                        'errorCode' => 'CardIPAndIccIdNotMatch',
                        'errorMessage' => 'card ip and iccid not match',
                    ],
                    [
                        'errorCode' => 'CardIPNotExist',
                        'errorMessage' => 'card ip not exist',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.IoTCloudConnector',
                        'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\",\\n  \\"DiagnoseTaskId\\": \\"diagnoseTask-bp2n6rgaj49qcs34jyzo8\\"\\n}","type":"json"}]',
            'title' => '发起单卡网络诊断',
        ],
        'GetDiagnoseResultForSingleCard' => [
            'summary' => '查询单张物联网卡的网络诊断结果。',
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
                    'name' => 'DiagnoseTaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络诊断任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'diagnoseTask-bp2qhwdp2n9x6zkvq****',
                    ],
                ],
                [
                    'name' => 'RegionNo',
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
                                'example' => '94032572-8758-575E-B306-86F59D1B826E',
                            ],
                            'WirelessCloudConnectorId' => [
                                'description' => '5G高速上云实例ID。',
                                'type' => 'string',
                                'example' => 'cc5g-xxxx',
                            ],
                            'CardIp' => [
                                'description' => '网络诊断的源端卡的IP地址。',
                                'type' => 'string',
                                'example' => '10.176.78.61',
                            ],
                            'IccId' => [
                                'description' => '网络诊断的源端卡的ID。',
                                'type' => 'string',
                                'example' => '89860477102170127555',
                            ],
                            'Destination' => [
                                'description' => '网络诊断目的地址或域名。',
                                'type' => 'string',
                                'example' => '106.14.175.4',
                            ],
                            'DestinationType' => [
                                'description' => '网路诊断的目的类型。取值：'."\n"
                                    ."\n"
                                    .'- **IP**：表示诊断的目的类型是IP类型。'."\n"
                                    ."\n"
                                    .'- **Domain**：表示诊断的目的类型是域名类型。'."\n",
                                'type' => 'string',
                                'example' => 'Domain',
                            ],
                            'BeginTime' => [
                                'description' => '网络诊断的开始时间戳。单位：秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1646100223024',
                            ],
                            'EndTime' => [
                                'description' => '网络诊断的结束时间戳。单位：秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1646100223264',
                            ],
                            'Status' => [
                                'description' => '网络诊断任务的状态。取值：'."\n"
                                    ."\n"
                                    .'- **success**：表示诊断成功。'."\n"
                                    .'- **failed**：表示诊断失败。'."\n"
                                    .'- **diagnosing**：表示诊断中。',
                                'type' => 'string',
                                'example' => 'failed',
                            ],
                            'ErrorResult' => [
                                'description' => '诊断结果列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '诊断结果。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ErrorLevel' => [
                                            'description' => '诊断问题的级别。取值：'."\n"
                                                ."\n"
                                                .'- **Error**：表示错误。'."\n"
                                                ."\n"
                                                .'- **Warning**：表示警告。',
                                            'type' => 'string',
                                            'example' => 'Warning',
                                        ],
                                        'ErrorPart' => [
                                            'description' => '诊断问题的组件。取值：'."\n"
                                                ."\n"
                                                .'- **CCIOT**：表示诊断的问题为云连接器的问题。'."\n"
                                                ."\n"
                                                .'- **Card**：表示诊断的问题为物联网卡的问题。'."\n"
                                                ."\n"
                                                .'- **Terminal**：表示诊断的问题为终端的问题。'."\n"
                                                ."\n"
                                                .'- **Server**：表示诊断的问题为服务器的问题。'."\n"
                                                ."\n"
                                                .'- **Apn**：表示诊断的问题为APN的问题。',
                                            'type' => 'string',
                                            'example' => 'Terminal',
                                        ],
                                        'ErrorItem' => [
                                            'description' => '诊断部件对应的诊断指标项，详见 **返回参数补充说明**。',
                                            'type' => 'string',
                                            'example' => 'CardStatus',
                                        ],
                                        'ErrorDesc' => [
                                            'description' => '诊断问题的描述。',
                                            'type' => 'string',
                                            'example' => 'Terminal abnormal',
                                        ],
                                        'ErrorSuggestion' => [
                                            'description' => '诊断问题的解决建议。',
                                            'type' => 'string',
                                            'example' => 'Please check whether the terminal and card are compatible or whether the terminal can send messages',
                                        ],
                                    ],
                                ],
                            ],
                            'DiagnoseItem' => [
                                'description' => '诊断项信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '诊断项信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Part' => [
                                            'description' => '诊断的部件名称。取值：'."\n"
                                                ."\n"
                                                .'- **CCIOT**：云连接器。'."\n"
                                                .'- **Card**：物联网卡。'."\n"
                                                .'- **Terminal**：终端。'."\n"
                                                .'- **Server**：服务器。'."\n"
                                                .'- **Apn**：APN。',
                                            'type' => 'string',
                                            'example' => 'Terminal',
                                        ],
                                        'Status' => [
                                            'description' => '诊断部件的状态。取值：'."\n"
                                                ."\n"
                                                .'- **Normal**：表示诊断状态正常。'."\n"
                                                .'- **Wrong**：表示诊断状态错误。'."\n"
                                                .'- **Unknown**：表示诊断状态未知。',
                                            'type' => 'string',
                                            'example' => 'Wrong',
                                        ],
                                        'SubItems' => [
                                            'description' => '诊断部件的诊断指标列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '诊断部件的诊断指标。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'SubItem' => [
                                                        'description' => '诊断部件对应的诊断指标项，详见 **返回参数补充说明**。',
                                                        'type' => 'string',
                                                        'example' => 'CardStatus',
                                                    ],
                                                    'SubItemStatus' => [
                                                        'description' => '诊断指标的状态。取值：'."\n"
                                                            ."\n"
                                                            .'- **Normal**：表示诊断状态正常。'."\n"
                                                            .'- **Warnning**：表示诊断状态为提示级别错误。'."\n"
                                                            .'- **Minor**: 表示诊断状态为一般级别错误。'."\n"
                                                            .'- **Major**: 表示诊断状态为严重级别错误。'."\n"
                                                            .'- **Unknown**：表示诊断状态未知。',
                                                        'type' => 'string',
                                                        'example' => 'Normal',
                                                    ],
                                                    'SubItemInfo' => [
                                                        'description' => '诊断指标的附加信息。',
                                                        'type' => 'string',
                                                        'example' => 'Card status is real-time',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'enumValueTitles' => [],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Forbidden.RAM',
                        'errorMessage' => 'Ram user does not have permission to perform this operation.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"94032572-8758-575E-B306-86F59D1B826E\\",\\n  \\"WirelessCloudConnectorId\\": \\"cc5g-xxxx\\",\\n  \\"CardIp\\": \\"10.176.78.61\\",\\n  \\"IccId\\": \\"89860477102170127555\\",\\n  \\"Destination\\": \\"106.14.175.4\\",\\n  \\"DestinationType\\": \\"Domain\\",\\n  \\"BeginTime\\": 1646100223024,\\n  \\"EndTime\\": 1646100223264,\\n  \\"Status\\": \\"failed\\",\\n  \\"ErrorResult\\": [\\n    {\\n      \\"ErrorLevel\\": \\"Warning\\",\\n      \\"ErrorPart\\": \\"Terminal\\",\\n      \\"ErrorItem\\": \\"CardStatus\\",\\n      \\"ErrorDesc\\": \\"Terminal abnormal\\",\\n      \\"ErrorSuggestion\\": \\"Please check whether the terminal and card are compatible or whether the terminal can send messages\\"\\n    }\\n  ],\\n  \\"DiagnoseItem\\": [\\n    {\\n      \\"Part\\": \\"Terminal\\",\\n      \\"Status\\": \\"Wrong\\",\\n      \\"SubItems\\": [\\n        {\\n          \\"SubItem\\": \\"CardStatus\\",\\n          \\"SubItemStatus\\": \\"Normal\\",\\n          \\"SubItemInfo\\": \\"Card status is real-time\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询单卡诊断结果',
            'responseParamsDescription' => '诊断部件的诊断指标项。取值: '."\n"
                ."\n"
                .'**Part**: Card'."\n"
                .'- **CardStatus**: 卡状态'."\n"
                .'- **CardOnlineStatus**: 卡会话状态'."\n"
                ."\n"
                .'**Part**: Apn'."\n"
                .'- **GreTunnelStatus**: 运营商隧道状态'."\n"
                ."\n"
                .'**Part**: CCIOT'."\n"
                .'- **CciotInstanceStatus**: 云连接器实例状态'."\n"
                .'- **CciotConnectionPoolConfiged**: 云连接器连接池配置状态'."\n"
                .'- **CciotAuthorizationRulesConfiged**: 云连接器授权规则配置状态'."\n"
                .'- **CardInCciotConnectionPool**: 卡在云连接器实例连接池中'."\n"
                .'- **DestinationInCciotAuthorizationRules**: 目的地址在云连接器实例授权规则中'."\n"
                .'- **DefaultDnsInCciotDnsServiceRules**: 默认的DNS服务地址在授权规则中'."\n"
                .'- **DestinationConflictWithIpMapping**: 目的地址与IP映射冲突'."\n"
                .'- **CciotAssociateWithVswitch**: 云连接器实例关联VPC'."\n"
                .'- **BackhaulRoutePublishedInVpc**: 云连接器实例回程路由发布状态'."\n"
                .'- **BackhaulRouteExsited**: 云连接器实例回程路由存在状态'."\n"
                .'- **DnsParseStatus**: 云连接器实例DNS解析状态'."\n"
                .'- **AccessLogFromCardToDestination**: 卡到目的地址的访问记录'."\n"
                .'- **AccessLogFromDestinationToCard**: 目的地址到卡的访问记录'."\n"
                .'- **AccessLogOfCard**: 卡的访问记录'."\n"
                .'- **AccessLogOfDesination**: 目的地址到访问记录'."\n"
                .'- **DropLogOfCard**: 卡的丢包记录'."\n"
                .'- **DropLogOfDestination**: 目的地址的丢包记录'."\n"
                .'- **CciotCardOnlineStatus**: 卡在线状态',
        ],
        'ListDiagnoseInfoForSingleCard' => [
            'summary' => '查询5G上云实例的历史诊断信息（不包含诊断结果）。',
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
                    'name' => 'RegionNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例所在的地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例ID 。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络诊断的源类型。取值：'."\n"
                            ."\n"
                            .'- **Ip**：表示通过物联网卡的卡IP进行网络诊断。'."\n"
                            ."\n"
                            .'- **Iccid**：表示通过物联网卡的卡ID进行网络诊断。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Iccid',
                    ],
                ],
                [
                    'name' => 'Source',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络诊断的源端卡的ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '89860477102170127555',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络诊断任务的状态。取值：'."\n"
                            .'- **success**：表示诊断成功。'."\n"
                            .'- **failed**：表示诊断失败。'."\n"
                            .'- **diagnosing**：表示诊断中。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'success',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            .'- 如果**NextToken**为空表示没有下一次查询。'."\n"
                            .'- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分批次查询时每次显示的条目数。取值范围：1~100。默认值：20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => 'E1E237B1-EED7-55D5-AE5F-671E642DB3B5',
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    ."\n"
                                    .'- 如果**NextToken**为空表示没有下一次查询。'."\n"
                                    .'- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                                'type' => 'string',
                                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****'."\n",
                            ],
                            'MaxResults' => [
                                'description' => '分批次查询时每次显示的条目数。取值范围：1~100。默认值：20。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'DiagnoseInfo' => [
                                'description' => '诊断任务列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'WirelessCloudConnectorId' => [
                                            'description' => '5G高速上云实例id。',
                                            'type' => 'string',
                                            'example' => 'cc5g-xxxx',
                                        ],
                                        'CardIp' => [
                                            'description' => '网络诊断的源端卡的IP地址。',
                                            'type' => 'string',
                                            'example' => '10.176.78.61',
                                        ],
                                        'IccId' => [
                                            'description' => '网络诊断的源端卡的ID。',
                                            'type' => 'string',
                                            'example' => '89860477102170127555',
                                        ],
                                        'SourceType' => [
                                            'description' => '网络诊断的源类型。',
                                            'type' => 'string',
                                            'example' => 'Iccid',
                                        ],
                                        'Source' => [
                                            'description' => '网络诊断的源端卡IP或者卡ID。',
                                            'type' => 'string',
                                            'example' => '89860477102170127555',
                                        ],
                                        'DestinationType' => [
                                            'description' => '网路诊断的目的类型。取值：'."\n"
                                                ."\n"
                                                .'- **IP**：表示诊断的目的类型是IP类型。'."\n"
                                                ."\n"
                                                .'- **Domain**：表示诊断的目的类型是域名类型。',
                                            'type' => 'string',
                                            'example' => 'Domain',
                                        ],
                                        'Destination' => [
                                            'description' => '网络诊断的目的IP或者域名。',
                                            'type' => 'string',
                                            'example' => 'www.xxx.com',
                                        ],
                                        'BeginTime' => [
                                            'description' => '网络诊断的开始时间戳。单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1662307200000',
                                        ],
                                        'EndTime' => [
                                            'description' => '网络诊断的结束时间戳。单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1662307201200',
                                        ],
                                        'Status' => [
                                            'description' => '网络诊断任务的状态。取值：'."\n"
                                                ."\n"
                                                .'- **success**：表示诊断成功。'."\n"
                                                .'- **failed**：表示诊断失败。'."\n"
                                                .'- **diagnosing**：表示诊断中。',
                                            'type' => 'string',
                                            'example' => 'failed',
                                        ],
                                        'DiagnoseTime' => [
                                            'description' => '诊断任务入库的时间戳。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1662307202400',
                                        ],
                                        'DiagnoseTaskId' => [
                                            'description' => '网络诊断任务ID。',
                                            'type' => 'string',
                                            'example' => 'diagnoseTask-bp2x7tzkdl655liw3mhbg',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '总列表条目数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '50',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Forbidden.RAM',
                        'errorMessage' => 'Ram user does not have permission to perform this operation.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.IoTCloudConnector',
                        'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E1E237B1-EED7-55D5-AE5F-671E642DB3B5\\",\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\\\n\\",\\n  \\"MaxResults\\": 20,\\n  \\"DiagnoseInfo\\": [\\n    {\\n      \\"WirelessCloudConnectorId\\": \\"cc5g-xxxx\\",\\n      \\"CardIp\\": \\"10.176.78.61\\",\\n      \\"IccId\\": \\"89860477102170127555\\",\\n      \\"SourceType\\": \\"Iccid\\",\\n      \\"Source\\": \\"89860477102170127555\\",\\n      \\"DestinationType\\": \\"Domain\\",\\n      \\"Destination\\": \\"www.xxx.com\\",\\n      \\"BeginTime\\": 1662307200000,\\n      \\"EndTime\\": 1662307201200,\\n      \\"Status\\": \\"failed\\",\\n      \\"DiagnoseTime\\": 1662307202400,\\n      \\"DiagnoseTaskId\\": \\"diagnoseTask-bp2x7tzkdl655liw3mhbg\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 50\\n}","type":"json"}]',
            'title' => '查询历史诊断记录',
        ],
        'GrantNetLink' => [
            'summary' => '授权云连接器给第三方客户。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [],
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'NetLinkId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络连接id。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [],
                        'example' => 'cciot-xxxx',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'f0ba469f-de7f-4dde-8390-0966a1a0ef9a',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会删除授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后直接删除授权规则。',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'False',
                    ],
                ],
                [
                    'name' => 'GrantAliUid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云授权者UID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'enumValueTitles' => [],
                        'example' => '11111111111',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求iD',
                                'type' => 'string',
                                'enumValueTitles' => [],
                                'example' => 'E6B58AF9-F1BF-5894-B898-6CE2108463C5',
                            ],
                        ],
                        'enumValueTitles' => [],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.GrantUidNotHaveCcIotSlr',
                        'errorMessage' => 'The operation is not allowed because of GrantUid not have AliyunServiceRoleForCCIoT.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.NotSupportGrantToSelf',
                        'errorMessage' => 'The operation is not allowed because of not support grant self.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.ExistCustomerAuthorizationRules',
                        'errorMessage' => 'The operation is not allowed because of exist customer authorization rules.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E6B58AF9-F1BF-5894-B898-6CE2108463C5\\"\\n}","type":"json"}]',
            'title' => '授权云连接器',
        ],
        'RevokeNetLink' => [
            'summary' => '主动撤销之前授权动作。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'WirelessCloudConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '5G高速上云实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5g-xxxx',
                    ],
                ],
                [
                    'name' => 'NetLinkId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络连接id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'iotcc-ua6xy4vpmi24y114ws',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '8278082c-0b8c-412c-b0ad-876a3cf0d0f8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会取消关联。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后直接取消用户Vpc和Vswitch的关联。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求iD',
                                'type' => 'string',
                                'example' => '1E781588-69D4-56C3-93BA-DEFECF2596B8',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1E781588-69D4-56C3-93BA-DEFECF2596B8\\"\\n}","type":"json"}]',
            'title' => '撤销授权',
            'description' => '被授权客户如果已经接受授权，此时不能被撤销，只能在未接受之前撤销',
        ],
        'CreateWirelessCloudConnectorGroup' => [
            'summary' => '创建cc5g实例分组。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例组名称，长度不超过128字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test1',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '高速上云服务分组的描述信息。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc5gg-test',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值：'."\n"
                            .'- **true**：发送检查请求，不会删除实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并删除实例。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '88C2F32F-B641-5980-B7A5-6907050ABCD1'."\n",
                            ],
                            'WirelessCloudConnectorGroupId' => [
                                'description' => '实例组实例id。',
                                'type' => 'string',
                                'example' => 'cc5gg-****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"88C2F32F-B641-5980-B7A5-6907050ABCD1\\\\n\\",\\n  \\"WirelessCloudConnectorGroupId\\": \\"cc5gg-****\\"\\n}","type":"json"}]',
            'title' => '创建分组',
        ],
        'UpdateWirelessCloudConnectorGroup' => [
            'summary' => '修改cc5g实例分组信息。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'WirelessCloudConnectorGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例组ID。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [],
                        'example' => 'cc5gg-****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改的实例组的实例名称。'."\n"
                            ."\n"
                            .'长度为2-128个英文或中文字符，必须以大小字母或中文开头，可包含数字，半角句号（.），下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改的实例组的描述信息。'."\n"
                            ."\n"
                            .'长度为2~256个字符，开头必须为大小写英文字母或中文，但不能为http://或https://。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'description',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值：'."\n"
                            .'- **true**：发送检查请求，不会更新实例信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后直接更新实例信息。',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'enumValueTitles' => [],
                                'example' => '8734B5B2-FC84-54C4-8038-D40228CF01FE',
                            ],
                        ],
                        'enumValueTitles' => [],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8734B5B2-FC84-54C4-8038-D40228CF01FE\\"\\n}","type":"json"}]',
            'title' => '更新分组信息',
        ],
        'ListWirelessCloudConnectorGroups' => [
            'summary' => '查询cc5g实例分组。',
            'methods' => [
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
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'WirelessCloudConnectorGroupStatus',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '实例组的状态列表。最多支持10个实例组的状态。',
                        'type' => 'array',
                        'items' => [
                            'description' => '实例组的状态。取值：'."\n"
                                ."\n"
                                .'1. Creating: 创建中 '."\n"
                                .'2. Available: 有效的稳定状态'."\n"
                                .'3. Pending: 配置中 '."\n"
                                .'4. Deleting: 删除中',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'Creating',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WirelessCloudConnectorGroupIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '实例组的ID列表。最多支持10个实例组的ID列表。'."\n"
                            ."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '实例组的ID。'."\n"
                                ."\n",
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cc5gg-xxxx',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WirelessCloudConnectorGroupNames',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '实例组的名称列表。最多支持10个实例组的名称。'."\n"
                            ."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '实例组的名称。'."\n"
                                .'名称长度为2~128个英文或中文字符，以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上一页的查询返回的值，首页查询不传值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iou001238joojjaere'."\n",
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => 'D3BAFE75-C670-52DB-9739-03133E5FC914',
                            ],
                            'WirelessCloudConnectorGroups' => [
                                'title' => '数组，返回示例目录。',
                                'description' => '实例组列表信息。',
                                'type' => 'array',
                                'items' => [
                                    'title' => 'RegionItemType',
                                    'description' => '实例组列表项信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'WirelessCloudConnectorGroupId' => [
                                            'title' => '资源一级ID',
                                            'description' => '实例组ID。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'cc5gg-xxxx',
                                        ],
                                        'Status' => [
                                            'title' => '资源名称',
                                            'description' => '实例组的状态。取值：'."\n"
                                                ."\n"
                                                .'1. Creating: 创建中 '."\n"
                                                .'2. Available: 有效的稳定状态'."\n"
                                                .'3. Pending: 配置中 '."\n"
                                                .'4. Deleting: 删除中'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'Creating',
                                        ],
                                        'Name' => [
                                            'title' => '创建时间',
                                            'description' => '名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'Description' => [
                                            'description' => '描述。',
                                            'type' => 'string',
                                            'example' => 'cc5gg-test'."\n",
                                        ],
                                        'RegionId' => [
                                            'description' => '地域id。',
                                            'type' => 'string',
                                            'example' => 'cn-shenzhen',
                                        ],
                                        'CreateTime' => [
                                            'description' => '实例创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-07-04 19:19:14',
                                        ],
                                        'WirelessCloudConnectors' => [
                                            'description' => '5G高速上云实例列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => 'RegionItemType',
                                                'type' => 'object',
                                                'properties' => [
                                                    'WirelessCloudConnectorId' => [
                                                        'description' => '5G高速上云实例id。',
                                                        'type' => 'string',
                                                        'example' => 'cc5g-62eb02o7lz1w5aurl3',
                                                    ],
                                                    'Status' => [
                                                        'description' => '实例状态，取值：'."\n"
                                                            ."\n"
                                                            .'Creating: 创建中'."\n"
                                                            .'Available: 有效的稳定状态'."\n"
                                                            .'Pending: 配置中'."\n"
                                                            .'Deleting: 删除中',
                                                        'type' => 'string',
                                                        'example' => 'Available',
                                                    ],
                                                    'Name' => [
                                                        'description' => '名称。',
                                                        'type' => 'string',
                                                        'example' => 'test',
                                                    ],
                                                    'Description' => [
                                                        'description' => '描述。',
                                                        'type' => 'string',
                                                        'example' => 'cc5g-test',
                                                    ],
                                                    'RegionId' => [
                                                        'description' => '地域id。',
                                                        'type' => 'string',
                                                        'example' => 'cn-shenzhen',
                                                    ],
                                                    'UseCase' => [
                                                        'description' => '实例使用场景。',
                                                        'type' => 'string',
                                                        'example' => '智慧工厂'."\n",
                                                    ],
                                                    'DataPackageId' => [
                                                        'description' => '流量包id。',
                                                        'type' => 'string',
                                                        'example' => 'dp-xxxx'."\n",
                                                    ],
                                                    'DataPackageType' => [
                                                        'description' => '流量包档位，取值：'."\n"
                                                            ."\n"
                                                            .'- **200**: 200M/卡/月'."\n"
                                                            .'- **1000**: 1G/卡/月'."\n"
                                                            .'- **3000**: 3G/卡/月'."\n"
                                                            .'- **30000**: 30G/卡/月',
                                                        'type' => 'string',
                                                        'example' => '200',
                                                    ],
                                                    'CardCount' => [
                                                        'description' => '卡数量。',
                                                        'type' => 'string',
                                                        'example' => '115',
                                                    ],
                                                    'CreateTime' => [
                                                        'description' => '实例创建时间。',
                                                        'type' => 'string',
                                                        'example' => '2022-04-28 17:40:53',
                                                    ],
                                                    'BusinessType' => [
                                                        'description' => '业务类型',
                                                        'type' => 'string',
                                                        'example' => 'Business',
                                                    ],
                                                    'ServiceType' => [
                                                        'description' => '服务类型，返回：'."\n"
                                                            ."\n"
                                                            .'- **CC5G**：普通实例。'."\n"
                                                            .'- **CC5GCCIoT**：过户实例。',
                                                        'type' => 'string',
                                                        'example' => 'CC5G',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '上一页的查询返回的值，首页查询不传值。',
                                'type' => 'string',
                                'example' => 'iou001238joojjaere',
                            ],
                            'MaxResults' => [
                                'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                                'type' => 'string',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '列表的条目数。',
                                'type' => 'string',
                                'example' => '2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D3BAFE75-C670-52DB-9739-03133E5FC914\\",\\n  \\"WirelessCloudConnectorGroups\\": [\\n    {\\n      \\"WirelessCloudConnectorGroupId\\": \\"cc5gg-xxxx\\",\\n      \\"Status\\": \\"Creating\\",\\n      \\"Name\\": \\"test\\",\\n      \\"Description\\": \\"cc5gg-test\\\\n\\",\\n      \\"RegionId\\": \\"cn-shenzhen\\",\\n      \\"CreateTime\\": \\"2022-07-04 19:19:14\\",\\n      \\"WirelessCloudConnectors\\": [\\n        {\\n          \\"WirelessCloudConnectorId\\": \\"cc5g-62eb02o7lz1w5aurl3\\",\\n          \\"Status\\": \\"Available\\",\\n          \\"Name\\": \\"test\\",\\n          \\"Description\\": \\"cc5g-test\\",\\n          \\"RegionId\\": \\"cn-shenzhen\\",\\n          \\"UseCase\\": \\"智慧工厂\\\\n\\",\\n          \\"DataPackageId\\": \\"dp-xxxx\\\\n\\",\\n          \\"DataPackageType\\": \\"200\\",\\n          \\"CardCount\\": \\"115\\",\\n          \\"CreateTime\\": \\"2022-04-28 17:40:53\\",\\n          \\"BusinessType\\": \\"Business\\",\\n          \\"ServiceType\\": \\"CC5G\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"NextToken\\": \\"iou001238joojjaere\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"TotalCount\\": \\"2\\"\\n}","type":"json"}]',
            'title' => '查询分组信息',
        ],
        'DeleteWirelessCloudConnectorGroup' => [
            'summary' => '删除cc5g实例分组。',
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
                    'name' => 'WirelessCloudConnectorGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的实例组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5gg-****',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值：'."\n"
                            .'- **true**：发送检查请求，不会删除实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并删除实例。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '2E759287-F208-589B-82D8-6D7A30F417E3',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2E759287-F208-589B-82D8-6D7A30F417E3\\"\\n}","type":"json"}]',
            'title' => '删除分组',
        ],
        'AddWirelessCloudConnectorToGroup' => [
            'summary' => '给cc5g实例分组增加cc5g实例。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'WirelessCloudConnectorGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例组实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5gg-****',
                    ],
                ],
                [
                    'name' => 'WirelessCloudConnectorIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '5G上云实例的id列表，最多20个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '5g上云实例id。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cc5g-xxxx',
                        ],
                        'required' => true,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值：'."\n"
                            .'- **true**：发送检查请求，不会删除实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并删除实例。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
            'title' => '给分组增加cc5g实例',
        ],
        'RemoveWirelessCloudConnectorFromGroup' => [
            'summary' => '从cc5g实例分组移除cc5g实例。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'WirelessCloudConnectorGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5gg-****',
                    ],
                ],
                [
                    'name' => 'WirelessCloudConnectorIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '5G上云实例的id列表，最多20个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '5G上云实例id。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cc5g-xxxx',
                        ],
                        'required' => true,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值：'."\n"
                            .'- **true**：发送检查请求，不会更新实例信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后直接更新实例信息。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '2DCFA69E-A161-512D-99A7-108022580719',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2DCFA69E-A161-512D-99A7-108022580719\\"\\n}","type":"json"}]',
            'title' => '从分组中移除cc5g实例',
        ],
        'CreateGroupAuthorizationRule' => [
            'summary' => '创建cc5g分组的授权规则。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'WirelessCloudConnectorGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例组实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5gg-****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '名称，长度不超过128字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权规则描述，长度不超过256字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ar5gg-test',
                    ],
                ],
                [
                    'name' => 'SourceCidr',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源CIDR地址块。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0.0.0.0/0',
                    ],
                ],
                [
                    'name' => 'DestinationType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标类型，取值：'."\n"
                            .'- **Cidr**: 网段'."\n"
                            .'- **Domain**: 域名或泛域名'."\n"
                            .'- **IpPort**: IP重定向',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Cidr',
                    ],
                ],
                [
                    'name' => 'Protocol',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协议类型。取值：'."\n"
                            ."\n"
                            .'- **icmp**：网络控制报文协议。'."\n"
                            .'- **tcp**：传输控制协议。'."\n"
                            .'- **udp**：用户数据报协议。'."\n"
                            .'- **all**：支持所有协议。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'all',
                    ],
                ],
                [
                    'name' => 'DestinationPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标端口范围。取值范围：'."\n"
                            ."\n"
                            .'- TCP、UDP协议：1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。'."\n"
                            ."\n"
                            .'- ICMP协议：-1/-1。'."\n"
                            ."\n"
                            .'- ALL：-1/-1。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-1/-1',
                    ],
                ],
                [
                    'name' => 'Destination',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标地址或域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '106.14.175.4',
                    ],
                ],
                [
                    'name' => 'Policy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权规则策略，取值：'."\n"
                            .'- **Permit**：允许'."\n"
                            .'- **Deny**：拒绝',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Permit',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值：'."\n"
                            .'- **true**：发送检查请求，不会删除实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并删除实例。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => 'AA93A076-3D94-51AB-AC70-4C94AF003B03',
                            ],
                            'AuthorizationRuleId' => [
                                'description' => '授权规则id。',
                                'type' => 'string',
                                'example' => 'ar5gg-xxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.CIDRMaskTooLarge',
                        'errorMessage' => 'The operation is not allowed because of CIDR too large.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AA93A076-3D94-51AB-AC70-4C94AF003B03\\",\\n  \\"AuthorizationRuleId\\": \\"ar5gg-xxxx\\"\\n}","type":"json"}]',
            'title' => '创建分组授权规则',
        ],
        'UpdateGroupAuthorizationRule' => [
            'summary' => '修改cc5g实例组的授权规则。',
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
                    'name' => 'WirelessCloudConnectorGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例组id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5gg-****',
                    ],
                ],
                [
                    'name' => 'AuthorizationRuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权规则id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ar5gg-xxxx',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权规则名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权规则描述，长度不超过256字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'SourceCidr',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源CIDR地址块。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.0.1',
                    ],
                ],
                [
                    'name' => 'Destination',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问目标。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.XX.XX',
                    ],
                ],
                [
                    'name' => 'Protocol',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协议类型。取值：'."\n"
                            ."\n"
                            .'- **tcp**。'."\n"
                            .'- **udp**。'."\n"
                            .'- **icmp**。'."\n"
                            .'- **all**：支持所有协议。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'all',
                    ],
                ],
                [
                    'name' => 'DestinationPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标端口范围。取值范围：'."\n"
                            ."\n"
                            .'- TCP、UDP协议：1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。'."\n"
                            ."\n"
                            .'- ICMP协议：-1/-1。'."\n"
                            ."\n"
                            .'- ALL：-1/-1。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '80/80'."\n",
                    ],
                ],
                [
                    'name' => 'Policy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权规则策略，取值：'."\n"
                            .'- **Permit**：允许'."\n"
                            .'- **Deny**：拒绝',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Permit',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值：'."\n"
                            .'- **true**：发送检查请求，不会删除实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并删除实例。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '79B01B1A-7089-552F-9798-DEDFFBAAED5F',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'OperationDenied.CIDRMaskTooLarge',
                        'errorMessage' => 'The operation is not allowed because of CIDR too large.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"79B01B1A-7089-552F-9798-DEDFFBAAED5F\\"\\n}","type":"json"}]',
            'title' => '更新分组授权规则',
        ],
        'ListGroupAuthorizationRules' => [
            'summary' => '查询分组的授权规则列表。',
            'methods' => [
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
                    'name' => 'WirelessCloudConnectorGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例组实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5gg-****',
                    ],
                ],
                [
                    'name' => 'Statuses',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '授权规则状态列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '授权规则状态，取值：'."\n"
                                ."\n"
                                .'- **Creating**：创建中'."\n"
                                .'- **Available**：有效的稳定状态'."\n"
                                .'- **Pending**：配置中 '."\n"
                                .'- **Deleting**：删除中'."\n"
                                .'- **UnAvailable**：无效，此规则暂时不生效',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'Creating',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AuthorizationRuleIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '授权规则id列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '授权规则id'."\n"
                                ."\n",
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ar5gg-xxxx',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Names',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '授权规则名称列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '名称，长度不超过128字符。'."\n"
                                ."\n",
                            'type' => 'string',
                            'required' => false,
                            'example' => 'Test',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DestinationType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标类型，取值：'."\n"
                            .'1. Cidr'."\n"
                            .'2. Domain'."\n"
                            .'3. IpPort',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Cidr',
                    ],
                ],
                [
                    'name' => 'Protocol',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协议类型。取值：'."\n"
                            ."\n"
                            .'- **tcp**。'."\n"
                            .'- **udp**。'."\n"
                            .'- **icmp**。'."\n"
                            .'- **all**：支持所有协议。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'all',
                    ],
                ],
                [
                    'name' => 'DestinationPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标端口范围。取值范围：'."\n"
                            ."\n"
                            .'- TCP、UDP协议：1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。'."\n"
                            ."\n"
                            .'- ICMP协议：-1/-1。'."\n"
                            ."\n"
                            .'- ALL：-1/-1。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-1/-1',
                    ],
                ],
                [
                    'name' => 'Destination',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标地址、域名或泛域名，前缀匹配。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10.0.0.1',
                    ],
                ],
                [
                    'name' => 'Policy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权规则策略，取值：'."\n"
                            .'- **Permit**：允许'."\n"
                            .'- **Deny**：拒绝',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Permit',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '类型，取值：'."\n"
                            .'- **System**: 系统'."\n"
                            .'- **Default**: 默认'."\n"
                            .'- **Customer**: 自定义',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'System',
                    ],
                ],
                [
                    'name' => 'Dns',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否为DNS。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上一页的查询返回的值，首页查询不传值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iou001238joojjaere',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
                            ],
                            'GroupAuthorizationRules' => [
                                'title' => '数组，返回示例目录。',
                                'description' => '授权规则列表。'."\n"
                                    ."\n",
                                'type' => 'array',
                                'items' => [
                                    'title' => 'RegionItemType',
                                    'description' => '授权规则列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AuthorizationRuleId' => [
                                            'title' => '资源一级ID',
                                            'description' => '授权规则id。',
                                            'type' => 'string',
                                            'example' => 'ar5gg-y5g4rp2w1tl1w7zg59',
                                        ],
                                        'Status' => [
                                            'title' => '资源名称',
                                            'description' => '授权规则状态，取值：'."\n"
                                                .'- **Creating**: 创建中'."\n"
                                                .'- **Available**: 有效的稳定状态'."\n"
                                                .'- **Pending**: 配置中'."\n"
                                                .'- **Deleting**: 删除中'."\n"
                                                .'- **UnAvailable**: 无效',
                                            'type' => 'string',
                                            'example' => 'Creating',
                                        ],
                                        'Name' => [
                                            'title' => '创建时间',
                                            'description' => '授权规则名称',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'Description' => [
                                            'description' => '授权规则描述，长度不超过256字符。',
                                            'type' => 'string',
                                            'example' => 'ar5gg-test'."\n",
                                        ],
                                        'Type' => [
                                            'description' => '类型，取值：'."\n"
                                                .'- **System**: 系统'."\n"
                                                .'- **Default**: 默认'."\n"
                                                .'- **Customer**: 自定义',
                                            'type' => 'string',
                                            'example' => 'Default',
                                        ],
                                        'SourceCidr' => [
                                            'description' => '源CIDR地址块。',
                                            'type' => 'string',
                                            'example' => '0.0.0.0/0',
                                        ],
                                        'DestinationType' => [
                                            'description' => '目标类型，取值：'."\n"
                                                .'1. Cidr'."\n"
                                                .'2. Domain'."\n"
                                                .'3. IpPort',
                                            'type' => 'string',
                                            'example' => 'Cidr',
                                        ],
                                        'Protocol' => [
                                            'description' => '协议类型。取值：'."\n"
                                                ."\n"
                                                .'- **tcp**。'."\n"
                                                .'- **udp**。'."\n"
                                                .'- **icmp**。'."\n"
                                                .'- **all**：支持所有协议。',
                                            'type' => 'string',
                                            'example' => 'all',
                                        ],
                                        'DestinationPort' => [
                                            'description' => '目标端口范围。取值范围：'."\n"
                                                ."\n"
                                                .'- TCP、UDP协议：1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。'."\n"
                                                ."\n"
                                                .'- ICMP协议：-1/-1。'."\n"
                                                ."\n"
                                                .'- ALL：-1/-1。',
                                            'type' => 'string',
                                            'example' => '0-65535',
                                        ],
                                        'Destination' => [
                                            'description' => '目标地址、域名或泛域名，前缀匹配。',
                                            'type' => 'string',
                                            'example' => '47.103.184.100/32',
                                        ],
                                        'Policy' => [
                                            'description' => '授权规则策略，取值：'."\n"
                                                .'- **Permit**：允许'."\n"
                                                .'- **Deny**：拒绝',
                                            'type' => 'string',
                                            'example' => 'Permit',
                                        ],
                                        'Dns' => [
                                            'description' => '是否为DNS。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-06-21 15:27:24',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '下一次查询的起始token。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'iou001238joojjaere'."\n",
                            ],
                            'MaxResults' => [
                                'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                                'type' => 'string',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '列表的条目数。',
                                'type' => 'string',
                                'example' => '2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\",\\n  \\"GroupAuthorizationRules\\": [\\n    {\\n      \\"AuthorizationRuleId\\": \\"ar5gg-y5g4rp2w1tl1w7zg59\\",\\n      \\"Status\\": \\"Creating\\",\\n      \\"Name\\": \\"test\\",\\n      \\"Description\\": \\"ar5gg-test\\\\n\\",\\n      \\"Type\\": \\"Default\\",\\n      \\"SourceCidr\\": \\"0.0.0.0/0\\",\\n      \\"DestinationType\\": \\"Cidr\\",\\n      \\"Protocol\\": \\"all\\",\\n      \\"DestinationPort\\": \\"0-65535\\",\\n      \\"Destination\\": \\"47.103.184.100/32\\",\\n      \\"Policy\\": \\"Permit\\",\\n      \\"Dns\\": true,\\n      \\"CreateTime\\": \\"2022-06-21 15:27:24\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"iou001238joojjaere\\\\n\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"TotalCount\\": \\"2\\"\\n}","type":"json"}]',
            'title' => '查询分组授权规则列表',
        ],
        'DeleteGroupAuthorizationRule' => [
            'summary' => '删除cc5g分组授权规则。',
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
                    'name' => 'WirelessCloudConnectorGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例组实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5gg-****',
                    ],
                ],
                [
                    'name' => 'AuthorizationRuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权规则id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ar5gg-12fnojjtkkre28t08j',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会创建授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后直接创建授权规则。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => 'A175C091-3910-51AF-8D84-D5717B9B8D38',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A175C091-3910-51AF-8D84-D5717B9B8D38\\"\\n}","type":"json"}]',
            'title' => '删除分组授权规则',
        ],
        'AddGroupDnsAuthorizationRule' => [
            'summary' => '实例组创建DNS授权规则。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'WirelessCloudConnectorGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例组实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc5gg-****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '名称，长度不超过128字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权规则描述，长度不超过256字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ar5gg-test'."\n",
                    ],
                ],
                [
                    'name' => 'SourceDNSIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DNS服务器地址。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '114.114.114.114',
                    ],
                ],
                [
                    'name' => 'DestinationIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要重定向的DNS服务器地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.1.1.1',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值：'."\n"
                            .'- **true**：发送检查请求，不会删除实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并删除实例。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => 'D3BAFE75-C670-52DB-9739-03133E5FC914',
                            ],
                            'AuthorizationRuleId' => [
                                'description' => '生成的DNS授权规则id。',
                                'type' => 'string',
                                'example' => 'ar5gg-12fnojjtkkre28t08j',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D3BAFE75-C670-52DB-9739-03133E5FC914\\",\\n  \\"AuthorizationRuleId\\": \\"ar5gg-12fnojjtkkre28t08j\\"\\n}","type":"json"}]',
            'title' => '创建分组DNS授权规则',
        ],
        'UpdateGroupDnsAuthorizationRule' => [
            'summary' => '修改实例组的DNS授权规则。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'WirelessCloudConnectorGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例组id。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [],
                        'example' => 'cc5gg-****',
                    ],
                ],
                [
                    'name' => 'AuthorizationRuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DNS授权规则id。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [],
                        'example' => 'ar5gg-xxxx',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DNS授权规则名称。'."\n"
                            ."\n"
                            .'长度为2~128个英文或中文字符，开头必须为大小写英文字母或中文，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DNS授权规则描述。'."\n"
                            ."\n"
                            .'长度为2~256个字符，开头必须为大小写英文字母或中文，但不能为http://或https://。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'description',
                    ],
                ],
                [
                    'name' => 'SourceDNSIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源DNS授权规则IP地址。包括但不限于以下取值：'."\n"
                            ."\n"
                            .'100.100.2.136，100.100.2.137，100.100.2.138，114.114.114.114，8.8.8.8，8.8.4.4，223.5.5.5，223.6.6.6，221.5.88.88，116.116.116.116，221.228.15.26，61.139.2.69，218.6.200.139，119.29.29.29，218.2.2.2，208.67.220.220，208.67.222.222，218.4.4.4。'."\n"
                            ."\n\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '100.100.2.136'."\n",
                    ],
                ],
                [
                    'name' => 'DestinationIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标DNS授权规则IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.0.2'."\n",
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。'."\n"
                            .'> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会创建授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后直接创建授权规则。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '207F9929-806E-5622-8E4F-8484F7000C22',
                            ],
                        ],
                        'enumValueTitles' => [],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"207F9929-806E-5622-8E4F-8484F7000C22\\"\\n}","type":"json"}]',
            'title' => '更新分组DNS授权规则',
        ],
        'GetCreateCustomerInfomation' => [
            'summary' => '获取运营商物联网卡客户资料录入页面地址以及是否已经录入完成信息。',
            'methods' => [
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
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'example' => 'cn-hangzhou',
                        'required' => false,
                        'type' => 'string',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求iD',
                                'example' => '2E759287-F208-589B-82D8-6D7A30F417E3',
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                            'URL' => [
                                'description' => '物联网卡客户资料登记URL地址。',
                                'example' => 'https://*******',
                                'type' => 'string',
                            ],
                            'CanBuyCard' => [
                                'description' => '是否已经登记过标记',
                                'example' => 'True',
                                'type' => 'string',
                            ],
                        ],
                        'title' => 'Schema of Response',
                        'type' => 'object',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2E759287-F208-589B-82D8-6D7A30F417E3\\",\\n  \\"URL\\": \\"https://*******\\",\\n  \\"CanBuyCard\\": \\"True\\"\\n}","type":"json"}]',
            'title' => '获取资料登记链接等信息',
        ],
        'InnerLimitRateCards' => [
            'summary' => '内部卡限速接口',
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
            'parameters' => [
                [
                    'name' => 'Iccids',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                        'required' => true,
                        'maxItems' => 1000,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'InnerApi',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                    ],
                ],
                [
                    'name' => 'Task',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'InnerStopCards' => [
            'summary' => '内部接口运营商侧卡停机',
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
            'parameters' => [
                [
                    'name' => 'Iccids',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                        'required' => true,
                        'maxItems' => 1000,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                    ],
                ],
                [
                    'name' => 'InnerApi',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                    ],
                ],
                [
                    'name' => 'Task',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cc5g.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'cc5g.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'cc5g.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'cc5g.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'cc5g.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'cc5g.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'cc5g.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'cc5g.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'cc5g.aliyuncs.com',
        ],
    ],
];
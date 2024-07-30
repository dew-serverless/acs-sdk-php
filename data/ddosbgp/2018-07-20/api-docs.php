<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'ddosbgp',
        'version' => '2018-07-20',
    ],
    'directories' => [
        [
            'id' => 192606,
            'title' => '策略',
            'type' => 'directory',
            'children' => [
                'CreatePolicy',
                'DeletePolicy',
                'ModifyPolicy',
                'ModifyPolicyContent',
                'ListPolicy',
                'DetachFromPolicy',
                'ListPolicyAttachment',
            ],
        ],
        [
            'id' => 190653,
            'title' => '多账号管理',
            'type' => 'directory',
            'children' => [
                'DescribeRdStatus',
                'DescribeRdMemberList',
                'AddRdMemberList',
                'DeleteRdMemberList',
            ],
        ],
        [
            'id' => 60254,
            'title' => '实例',
            'type' => 'directory',
            'children' => [
                'ModifyRemark',
                'DescribeRegions',
                'DescribeInstanceList',
                'DescribeInstanceSpecs',
                'DescribeExcpetionCount',
                'DescribePackIpList',
                'GetSlsOpenStatus',
                'CheckGrant',
            ],
        ],
        [
            'id' => 60263,
            'title' => '防护',
            'type' => 'directory',
            'children' => [
                'DettachAssetGroupToInstance',
                'DescribeAssetGroupToInstance',
                'AttachAssetGroupToInstance',
                'DescribeAssetGroup',
                'AddIp',
                'DeleteIp',
                'DeleteBlackhole',
            ],
        ],
        [
            'id' => 60267,
            'title' => '日志',
            'type' => 'directory',
            'children' => [
                'DescribeDdosEvent',
                'DescribeOpEntities',
                'DescribeTraffic',
                'ListOpenedAccessLogInstances',
                'DescribeOnDemandDdosEvent',
                'CheckAccessLogAuth',
            ],
        ],
        [
            'id' => 60274,
            'title' => '代播防护',
            'type' => 'directory',
            'children' => [
                'CreateSchedruleOnDemand',
                'DeleteSchedruleOnDemand',
                'SetInstanceModeOnDemand',
                'DescribeOnDemandInstanceStatus',
                'QuerySchedruleOnDemand',
                'ConfigSchedruleOnDemand',
            ],
        ],
        [
            'id' => 60281,
            'title' => '标签',
            'type' => 'directory',
            'children' => [
                'ListTagKeys',
                'ListTagResources',
                'TagResources',
                'UntagResources',
            ],
        ],
        [
            'id' => 190513,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'ReleaseDdosOriginInstance',
                'DescribeDdosOriginInstanceBill',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreatePolicy' => [
            'summary' => '创建防护策略。',
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
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '201461',
                'abilityTreeNodes' => [
                    'FEATUREddosRWSV1C',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                        'maxLength' => 32,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略类型。取值：'."\n"
                            .'- **l3**：表示IP防护策略。'."\n"
                            .'- **l4**：表示端口防护策略。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'l3' => 'IP防护策略',
                            'l4' => '端口防护策略',
                        ],
                        'example' => 'l3',
                        'enum' => [
                            'l3',
                            'l4',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的 ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '864FE2F4-CB2E-4024-B9EF-D59FD08A****',
                            ],
                            'Id' => [
                                'description' => '策略ID',
                                'type' => 'string',
                                'example' => '83967609-7ea5-4f6d-a6ea-380b09e****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"864FE2F4-CB2E-4024-B9EF-D59FD08A****\\",\\n  \\"Id\\": \\"83967609-7ea5-4f6d-a6ea-380b09e****\\"\\n}","type":"json"}]',
            'title' => '创建防护策略',
        ],
        'DeletePolicy' => [
            'summary' => '删除防护策略。',
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
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '201464',
                'abilityTreeNodes' => [
                    'FEATUREddosRWSV1C',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '90300b1a-ced8-4437-b4bf-f9a5*******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的 ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'BD06F539-2FBE-450D-9391-7EFF7871****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BD06F539-2FBE-450D-9391-7EFF7871****\\"\\n}","type":"json"}]',
            'title' => '删除防护策略',
            'description' => '已关联防护对象的防护策略不能删除。',
        ],
        'ModifyPolicy' => [
            'summary' => '修改防护策略。',
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
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '201472',
                'abilityTreeNodes' => [
                    'FEATUREddosRWSV1C',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c52c2fa6-fdac-40c4-8753-be7c********',
                    ],
                ],
                [
                    'name' => 'ActionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '动作类型。取值'."\n"
                            ."\n"
                            .'- **10**：表示修改名称（`Name`必填）。'."\n"
                            .'- **11**：表示修改黑名单超时时间（`BlackIpListExpireAt`必填）。仅IP防护策略支持。'."\n"
                            .'- **12**：表示修改DDoS高防回源地址加白开关（`WhitenGfbrNets`必填）。仅IP防护策略支持。'."\n"
                            .'- **13**：表示修改禁用ICMP协议开关（`EnableDropIcmp`必填）。仅IP防护策略支持。'."\n"
                            .'- **20**：表示添加黑白名单（`WhiteIpList`和`BlackIpList`选填）。仅IP防护策略支持。'."\n"
                            .'- **21**：表示删除黑白名单（`WhiteIpList`和`BlackIpList`选填）。仅IP防护策略支持。'."\n"
                            .'- **22**：表示清空白名单。仅IP防护策略支持。'."\n"
                            .'- **23**：表示清空黑名单。仅IP防护策略支持。'."\n"
                            .'- **30**：表示修改AI智能防护开发和等级（`EnableIntelligence`和`IntelligenceLevel`必填）。仅IP防护策略支持。'."\n"
                            .'- **31**：表示修改区域封禁配置（`RegionBlockCountryList`和`RegionBlockProvinceList`选填）。仅IP防护策略支持。'."\n"
                            .'- **32**：表示修改源限速配置（`SourceLimit`和`SourceBlockList`必填）。仅IP防护策略支持。'."\n"
                            .'- **33**：表示修改反射端口过滤（`ReflectBlockUdpPortList`必填）。仅IP防护策略支持。'."\n"
                            .'- **40**：表示创建端口封禁规则（`PortRuleList`必填）。仅IP防护策略支持。'."\n"
                            .'- **41**：表示修改端口封禁规则（`PortRuleList`必填）。仅IP防护策略支持。'."\n"
                            .'- **42**：表示删除端口封禁规则（`PortRuleList`必填）。仅IP防护策略支持。'."\n"
                            .'- **50**：表示创建指纹过滤规则（`FingerPrintRuleList`必填）。仅IP防护策略支持。'."\n"
                            .'- **51**：表示修改指纹过滤规则（`FingerPrintRuleList`必填）。仅IP防护策略支持。'."\n"
                            .'- **52**：表示删除指纹过滤规则（`FingerPrintRuleList`必填）。仅IP防护策略支持。'."\n"
                            .'- **60**：表示修改端口防护开关（`EnableL4Defense`必填）。仅端口防护策略支持。'."\n"
                            .'- **61**：表示创建端口防护规则（`L4RuleList`必填）。仅端口防护策略支持。'."\n"
                            .'- **62**：表示修改端口防护规则（`L4RuleList`必填）。仅端口防护策略支持。'."\n"
                            .'- **63**：表示删除端口防护规则（`L4RuleList`必填）。仅端口防护策略支持。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '11',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo**',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '策略内容。',
                        'type' => 'object',
                        'properties' => [
                            'BlackIpListExpireAt' => [
                                'description' => 'IP黑名单超时时间（unix时间戳）。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1716878000',
                            ],
                            'EnableIntelligence' => [
                                'description' => '是否开启AI智能防护。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'IntelligenceLevel' => [
                                'description' => 'AI智能防护的防护等级。取值：'."\n"
                                    ."\n"
                                    .'- **default**：表示正常。'."\n"
                                    .'- **hard**：表示严格。'."\n"
                                    .'- **weak**：表示宽松。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'default',
                                'enum' => [
                                    'default',
                                    'weak',
                                    'hard',
                                ],
                            ],
                            'WhitenGfbrNets' => [
                                'description' => '是否开启DDoS高防（中国内地&非中国内地）回源地址加白。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'EnableDropIcmp' => [
                                'description' => '是否禁用ICMP协议。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'RegionBlockCountryList' => [
                                'description' => '区域封禁的国家列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '区域封禁的国家代号。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'maximum' => '241',
                                    'minimum' => '1',
                                    'example' => '11',
                                ],
                                'required' => false,
                                'maxItems' => 241,
                                'minItems' => 1,
                            ],
                            'RegionBlockProvinceList' => [
                                'description' => '区域封禁的省份列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '区域封禁的省份代号。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'maximum' => '82',
                                    'minimum' => '1',
                                    'example' => '2',
                                ],
                                'required' => false,
                                'maxItems' => 35,
                                'minItems' => 1,
                            ],
                            'SourceLimit' => [
                                'description' => '源限速。',
                                'type' => 'object',
                                'properties' => [
                                    'Pps' => [
                                        'description' => '源PPS限速，单位Packet/s。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'maximum' => '500000',
                                        'minimum' => '32',
                                        'example' => '64',
                                    ],
                                    'Bps' => [
                                        'description' => '源带宽限速，单位Byte/s。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'maximum' => '268435456',
                                        'minimum' => '1024',
                                        'example' => '2048',
                                    ],
                                    'SynPps' => [
                                        'description' => '源SYN PPS限速，单位Packet/s。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'maximum' => '100000',
                                        'minimum' => '1',
                                        'example' => '64',
                                    ],
                                    'SynBps' => [
                                        'description' => '源SYN 带宽限速，单位Byte/s。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'maximum' => '268435456',
                                        'minimum' => '1024',
                                        'example' => '2048',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'SourceBlockList' => [
                                'description' => '源限速拉黑列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '源限速类型。取值：'."\n"
                                                ."\n"
                                                .'- **3**：表示源PPS限速。'."\n"
                                                ."\n"
                                                .'- **4**：表示源带宽限速。'."\n"
                                                ."\n"
                                                .'- **5**：表示源SYN PPS限速。'."\n"
                                                ."\n"
                                                .'- **6**：表示源SYN 带宽限速。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'example' => '3',
                                            'enum' => [
                                                '3',
                                                '4',
                                                '5',
                                                '6',
                                            ],
                                        ],
                                        'BlockExpireSeconds' => [
                                            'description' => '源IP加入黑名单的时长。单位秒。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '2592000',
                                            'minimum' => '60',
                                            'example' => '120',
                                        ],
                                        'EverySeconds' => [
                                            'description' => '源限速拉黑的统计周期，单位秒。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '1200',
                                            'minimum' => '60',
                                            'example' => '60',
                                        ],
                                        'ExceedLimitTimes' => [
                                            'description' => '源IP在1个统计周期内超过限速值的次数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '1200',
                                            'minimum' => '1',
                                            'example' => '5',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                                'maxItems' => 4,
                            ],
                            'ReflectBlockUdpPortList' => [
                                'description' => '反射攻击防护过滤的端口列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '反射攻击防护过滤的端口。'."\n"
                                        .'> 仅支持UDP',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'maximum' => '65535',
                                    'minimum' => '0',
                                    'example' => '123',
                                ],
                                'required' => false,
                                'maxItems' => 128,
                                'minItems' => 1,
                            ],
                            'PortRuleList' => [
                                'description' => '端口封禁规则列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'description' => '规则ID。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'c52c2fa6-fdac-40c4-8753-be7c*********',
                                        ],
                                        'Protocol' => [
                                            'description' => '协议类型。取值：'."\n"
                                                ."\n"
                                                .'- **tcp**：表示传输控制协议。'."\n"
                                                .'- **udp**：表示用户数据报协议。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'tcp',
                                            'enum' => [
                                                'tcp',
                                                'udp',
                                            ],
                                        ],
                                        'SrcPortStart' => [
                                            'description' => '源端口范围的起始值。取值范围：**0**~**65535**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '65535',
                                            'minimum' => '0',
                                            'example' => '0',
                                        ],
                                        'SrcPortEnd' => [
                                            'description' => '源端口范围的结束值。取值范围：**0**~**65535**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '65535',
                                            'minimum' => '0',
                                            'example' => '65535',
                                        ],
                                        'DstPortStart' => [
                                            'description' => '目的端口范围的起始值。取值范围：**0**~**65535**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '65535',
                                            'minimum' => '0',
                                            'example' => '0',
                                        ],
                                        'DstPortEnd' => [
                                            'description' => '目的端口范围的结束值。取值范围：**0**~**65535**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '65535',
                                            'minimum' => '0',
                                            'example' => '65535',
                                        ],
                                        'MatchAction' => [
                                            'description' => '匹配动作。取值：'."\n"
                                                ."\n"
                                                .'- **drop**：表示丢弃。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'drop',
                                            'enum' => [
                                                'drop',
                                            ],
                                        ],
                                        'SeqNo' => [
                                            'description' => '生效顺序号，使用整数表示。'."\n"
                                                .'>数字越小，越靠前生效。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '100',
                                            'minimum' => '1',
                                            'example' => '1',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'FingerPrintRuleList' => [
                                'description' => '指纹过滤规则列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'description' => '规则ID。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '5fbe941f-a0cf-4a49-9c7c-8fac********',
                                        ],
                                        'Protocol' => [
                                            'description' => '协议类型。取值：'."\n"
                                                ."\n"
                                                .'- **tcp**：表示传输控制协议。'."\n"
                                                .'- **udp**：表示用户数据报协议。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'udp',
                                            'enum' => [
                                                'tcp',
                                                'udp',
                                            ],
                                        ],
                                        'SrcPortStart' => [
                                            'description' => '源端口范围的开始值。取值范围：**0**~**65535**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '65535',
                                            'minimum' => '0',
                                            'example' => '0',
                                        ],
                                        'SrcPortEnd' => [
                                            'description' => '源端口范围的结束值。取值范围：**0**~**65535**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '65535',
                                            'minimum' => '0',
                                            'example' => '65535',
                                        ],
                                        'DstPortStart' => [
                                            'description' => '目的端口范围的起始值。取值范围：**0**~**65535**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '65535',
                                            'minimum' => '0',
                                            'example' => '0',
                                        ],
                                        'DstPortEnd' => [
                                            'description' => '目的端口范围的结束值。取值范围：**0**~**65535**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '65535',
                                            'minimum' => '0',
                                            'example' => '65535',
                                        ],
                                        'MinPktLen' => [
                                            'description' => '最小包长，取值范围：**1**~**1500**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '1500',
                                            'minimum' => '0',
                                            'example' => '1',
                                        ],
                                        'MaxPktLen' => [
                                            'description' => '最大包长，取值范围：**1**~**1500**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '1500',
                                            'minimum' => '0',
                                            'example' => '1500',
                                        ],
                                        'Offset' => [
                                            'description' => '偏移量，取值范围：**0**~**1500**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'maximum' => '1500',
                                            'minimum' => '0',
                                            'example' => '0',
                                        ],
                                        'PayloadBytes' => [
                                            'description' => '检测载荷。使用十六进制字符串格式表示。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'abcd',
                                            'maxLength' => 32,
                                            'minLength' => 2,
                                            'pattern' => '^([0-9a-fA-f]{2}){1,15}$',
                                        ],
                                        'MatchAction' => [
                                            'description' => '匹配动作。取值：'."\n"
                                                ."\n"
                                                .'- **accept**：表示放行满足指纹特征的流量。'."\n"
                                                .'- **drop**：表示丢弃满足指纹特征的流量。'."\n"
                                                .'- **ip_rate**：表示对满足指纹特征的流量来源IP进行访问限速。限速值通过**RateValue**参数设置。'."\n"
                                                .'- **session_rate**：表示对满足指纹特征的流量来源会话进行访问限速。限速值通过**RateValue**参数设置。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'drop',
                                            'enum' => [
                                                'drop',
                                                'accept',
                                                'ip_rate',
                                                'session_rate',
                                            ],
                                        ],
                                        'RateValue' => [
                                            'description' => '限速值。取值范围：**1**~**100000**。'."\n"
                                                ."\n"
                                                .'> 匹配后动作为源IP限速或者源Session限速时（**MacthAction**为**ip_rate**或**session_rate**），必须填写该参数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'maximum' => '100000',
                                            'minimum' => '1',
                                            'example' => '100',
                                        ],
                                        'SeqNo' => [
                                            'description' => '生效顺序号，使用整数表示。'."\n"
                                                .'>数字越小，越靠前生效。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '100',
                                            'minimum' => '1',
                                            'example' => '1',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'EnableL4Defense' => [
                                'description' => '是否开启端口防护。',
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'L4RuleList' => [
                                'description' => '端口防护规则列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '规则名称。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'test****',
                                            'maxLength' => 32,
                                            'minLength' => 1,
                                        ],
                                        'Priority' => [
                                            'description' => '规则优先级。取值范围：**1**~**100**。'."\n"
                                                ."\n"
                                                .'> 数字越小，优先级越高。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '100',
                                            'minimum' => '1',
                                            'example' => '1',
                                        ],
                                        'Method' => [
                                            'description' => '规则类型。取值：'."\n"
                                                ."\n"
                                                .'- **char**：表示字符串匹配。'."\n"
                                                ."\n"
                                                .'- **hex**：表示十六进制匹配。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'char',
                                            'enum' => [
                                                'hex',
                                                'char',
                                            ],
                                        ],
                                        'Match' => [
                                            'description' => '逻辑符。取值：'."\n"
                                                ."\n"
                                                .'- **0**：表示命中执行动作。'."\n"
                                                ."\n"
                                                .'- **1**：表示未命中执行动作。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '0',
                                            'enum' => [
                                                '0',
                                                '1',
                                            ],
                                        ],
                                        'Action' => [
                                            'description' => '动作。取值：'."\n"
                                                ."\n"
                                                .'- **2**： 表示丢弃。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '2',
                                            'enum' => [
                                                '1',
                                                '2',
                                            ],
                                        ],
                                        'Limited' => [
                                            'description' => '会话流启动规则匹配的最小字节数，取值范围：**0**~**2048**',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '2048',
                                            'exclusiveMaximum' => true,
                                            'minimum' => '0',
                                            'example' => '0',
                                        ],
                                        'ConditionList' => [
                                            'description' => '检测条件列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Arg' => [
                                                        'description' => '检测内容。'."\n"
                                                            .'> 规则类型为**char**，必须为ACSII字符串；规则类型为**hex**，必须为十六进制字符串。最大长度2048。',
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'example' => 'abcd',
                                                        'maxLength' => 4096,
                                                        'minLength' => 1,
                                                    ],
                                                    'Position' => [
                                                        'description' => '检测起始位置。取值范围：**0**~**2047**。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => true,
                                                        'maximum' => '2047',
                                                        'minimum' => '0',
                                                        'example' => '0',
                                                    ],
                                                    'Depth' => [
                                                        'description' => '检测窗口长度，取值范围：**1**~**2048**。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => true,
                                                        'maximum' => '2048',
                                                        'minimum' => '1',
                                                        'example' => '1200',
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'required' => true,
                                            'maxItems' => 5,
                                            'minItems' => 1,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'WhiteIpList' => [
                                'description' => 'IP白名单列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'IP白名单。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1.1.1.*',
                                ],
                                'required' => false,
                                'maxItems' => 2000,
                                'minItems' => 1,
                            ],
                            'BlackIpList' => [
                                'description' => 'IP黑名单列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'IP黑名单。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '2.2.2.*',
                                ],
                                'required' => false,
                                'maxItems' => 2000,
                                'minItems' => 1,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的 ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'B4B379C2-9319-4C6B-B579-FE36831****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4B379C2-9319-4C6B-B579-FE36831****\\"\\n}","type":"json"}]',
            'title' => '修改防护策略',
        ],
        'ModifyPolicyContent' => [
            'summary' => '修改防护策略内容。',
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
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '224798',
                'abilityTreeNodes' => [
                    'FEATUREddosRWSV1C',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '83967609-7ea5-4f6d-a6ea-380b09e****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo**',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '策略内容。',
                        'type' => 'object',
                        'properties' => [
                            'BlackIpListExpireAt' => [
                                'description' => 'IP黑名单超时时间（unix时间戳）。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1716878000',
                            ],
                            'EnableIntelligence' => [
                                'description' => '是否开启AI智能防护。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'IntelligenceLevel' => [
                                'description' => 'AI智能防护的防护等级。取值：'."\n"
                                    ."\n"
                                    .'- **default**：表示正常。'."\n"
                                    .'- **hard**：表示严格。'."\n"
                                    .'- **weak**：表示宽松。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'default',
                                'enum' => [
                                    'default',
                                    'weak',
                                    'hard',
                                ],
                            ],
                            'WhitenGfbrNets' => [
                                'description' => '是否开启DDoS高防（中国内地&非中国内地）回源地址加白。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'EnableDropIcmp' => [
                                'description' => '是否禁用ICMP协议。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'RegionBlockCountryList' => [
                                'description' => '区域封禁的国家列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '区域封禁的国家代号。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'maximum' => '241',
                                    'minimum' => '1',
                                    'example' => '11',
                                ],
                                'required' => false,
                                'maxItems' => 241,
                                'minItems' => 1,
                            ],
                            'RegionBlockProvinceList' => [
                                'description' => '区域封禁的省份列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '区域封禁的省份代号。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'maximum' => '82',
                                    'minimum' => '1',
                                    'example' => '2',
                                ],
                                'required' => false,
                                'maxItems' => 35,
                                'minItems' => 1,
                            ],
                            'SourceLimit' => [
                                'description' => '源限速。',
                                'type' => 'object',
                                'properties' => [
                                    'Pps' => [
                                        'description' => '源PPS限速，单位Packet/s。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'maximum' => '500000',
                                        'minimum' => '32',
                                        'example' => '64',
                                    ],
                                    'Bps' => [
                                        'description' => '源带宽限速，单位Byte/s。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'maximum' => '268435456',
                                        'minimum' => '1024',
                                        'example' => '2048',
                                    ],
                                    'SynPps' => [
                                        'description' => '源SYN PPS限速，单位Packet/s。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'maximum' => '100000',
                                        'minimum' => '1',
                                        'example' => '64',
                                    ],
                                    'SynBps' => [
                                        'description' => '源SYN 带宽限速，单位Byte/s。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'maximum' => '268435456',
                                        'minimum' => '1024',
                                        'example' => '2048',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'SourceBlockList' => [
                                'description' => '源限速拉黑列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '源限速类型。取值：'."\n"
                                                .'- **3**：表示源PPS限速。'."\n"
                                                .'- **4**：表示源带宽限速。'."\n"
                                                .'- **5**：表示源SYN PPS限速。'."\n"
                                                .'- **6**：表示源SYN 带宽限速。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'example' => '3',
                                            'enum' => [
                                                '3',
                                                '4',
                                                '5',
                                                '6',
                                            ],
                                        ],
                                        'BlockExpireSeconds' => [
                                            'description' => '源IP加入黑名单的时长。单位秒。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '2592000',
                                            'minimum' => '60',
                                            'example' => '120',
                                        ],
                                        'EverySeconds' => [
                                            'description' => '源限速拉黑的统计周期，单位秒。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '1200',
                                            'minimum' => '60',
                                            'example' => '60',
                                        ],
                                        'ExceedLimitTimes' => [
                                            'description' => '源IP在1个统计周期内超过限速值的次数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '1200',
                                            'minimum' => '1',
                                            'example' => '5',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                                'maxItems' => 4,
                            ],
                            'ReflectBlockUdpPortList' => [
                                'description' => '反射攻击防护过滤的端口列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '反射攻击防护过滤的端口。'."\n"
                                        .'>仅支持UDP',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'maximum' => '65535',
                                    'minimum' => '0',
                                    'example' => '123',
                                ],
                                'required' => false,
                                'maxItems' => 128,
                                'minItems' => 1,
                            ],
                            'PortRuleList' => [
                                'description' => '端口封禁规则列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'description' => '规则ID。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '412a7312-58ff-4e32-a202-0ab0*******',
                                        ],
                                        'Protocol' => [
                                            'description' => '协议类型，取值：'."\n"
                                                ."\n"
                                                .'- **tcp**：表示传输控制协议。'."\n"
                                                .'- **udp**：表示用户数据报协议。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'tcp',
                                            'enum' => [
                                                'tcp',
                                                'udp',
                                            ],
                                        ],
                                        'SrcPortStart' => [
                                            'description' => '源端口范围的开始值。取值范围：**0**~**65535**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '65535',
                                            'minimum' => '0',
                                            'example' => '0',
                                        ],
                                        'SrcPortEnd' => [
                                            'description' => '源端口范围的结束值。取值范围：**0**~**65535**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '65535',
                                            'minimum' => '0',
                                            'example' => '65535',
                                        ],
                                        'DstPortStart' => [
                                            'description' => '目的端口范围的起始值。取值范围：**0**~**65535**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '65535',
                                            'minimum' => '0',
                                            'example' => '0',
                                        ],
                                        'DstPortEnd' => [
                                            'description' => '目的端口范围的结束值。取值范围：**0**~**65535**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '65535',
                                            'minimum' => '0',
                                            'example' => '65535',
                                        ],
                                        'MatchAction' => [
                                            'description' => '匹配动作。取值：'."\n"
                                                ."\n"
                                                .'- **drop**：表示丢弃。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'drop',
                                            'enum' => [
                                                'drop',
                                            ],
                                        ],
                                        'SeqNo' => [
                                            'description' => '生效顺序号，使用整数表示。'."\n"
                                                .'>数字越小，越靠前生效。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '100',
                                            'minimum' => '1',
                                            'example' => '1',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'FingerPrintRuleList' => [
                                'description' => '指纹过滤规则列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'description' => '规则ID。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '83967609-7ea5-4f6d-a6ea-380b09e****',
                                        ],
                                        'Protocol' => [
                                            'description' => '协议类型，取值：'."\n"
                                                ."\n"
                                                .'- **tcp**：表示传输控制协议。'."\n"
                                                .'- **udp**：表示用户数据报协议。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'tcp',
                                            'enum' => [
                                                'tcp',
                                                'udp',
                                            ],
                                        ],
                                        'SrcPortStart' => [
                                            'description' => '源端口范围的起始值。取值范围：**0**~**65535**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '65535',
                                            'minimum' => '0',
                                            'example' => '0',
                                        ],
                                        'SrcPortEnd' => [
                                            'description' => '源端口范围的结束值。取值范围：**0**~**65535**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '65535',
                                            'minimum' => '0',
                                            'example' => '65535',
                                        ],
                                        'DstPortStart' => [
                                            'description' => '目的端口范围的起始值。取值范围：**0**~**65535**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '65535',
                                            'minimum' => '0',
                                            'example' => '0',
                                        ],
                                        'DstPortEnd' => [
                                            'description' => '目的端口范围的结束值。取值范围：**0**~**65535**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '65535',
                                            'minimum' => '0',
                                            'example' => '65535',
                                        ],
                                        'MinPktLen' => [
                                            'description' => '最小包长，取值范围：**1**~**1500**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '1500',
                                            'minimum' => '0',
                                            'example' => '1',
                                        ],
                                        'MaxPktLen' => [
                                            'description' => '最大包长，取值范围：**1**~**1500**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '1500',
                                            'minimum' => '0',
                                            'example' => '1500',
                                        ],
                                        'Offset' => [
                                            'description' => '偏移量，取值范围：**0**~**1500**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'maximum' => '1500',
                                            'minimum' => '0',
                                            'example' => '0',
                                        ],
                                        'PayloadBytes' => [
                                            'description' => '检测载荷。使用十六进制字符串格式表示。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'abcd',
                                            'maxLength' => 32,
                                            'minLength' => 2,
                                            'pattern' => '^([0-9a-fA-f]{2}){1,15}$',
                                        ],
                                        'MatchAction' => [
                                            'description' => '设置指纹特征匹配后的动作。取值：'."\n"
                                                ."\n"
                                                .'- **permit**：表示放行满足指纹特征的流量。'."\n"
                                                .'- **drop**：表示丢弃满足指纹特征的流量。'."\n"
                                                .'- **src\\_ip\\_rate**：表示对满足指纹特征的流量来源IP进行访问限速。限速值通过**RateValue**参数设置。'."\n"
                                                .'- **session\\_rate**：表示对满足指纹特征的流量来源会话进行访问限速。限速值通过**RateValue**参数设置。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'drop',
                                            'enum' => [
                                                'drop',
                                                'accept',
                                                'ip_rate',
                                                'session_rate',
                                            ],
                                        ],
                                        'RateValue' => [
                                            'description' => '限速值。取值范围：**1**~**100000**。'."\n"
                                                ."\n"
                                                .'> 匹配后动作为源IP限速或者源Session限速时（**匹配动作**为**ip_rate**或**session_rate**），必须填写该参数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'maximum' => '100000',
                                            'minimum' => '1',
                                            'example' => '100',
                                        ],
                                        'SeqNo' => [
                                            'description' => '生效顺序号，使用整数表示。'."\n"
                                                .'>数字越小，越靠前生效。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '100',
                                            'minimum' => '1',
                                            'example' => '1',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'EnableL4Defense' => [
                                'description' => '是否开启端口防护。',
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'L4RuleList' => [
                                'description' => '端口防护规则列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '规则名称。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'test**',
                                            'maxLength' => 32,
                                            'minLength' => 1,
                                        ],
                                        'Priority' => [
                                            'description' => '规则优先级。取值范围：1~100。'."\n"
                                                .'>数字越小，优先级越高。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '100',
                                            'minimum' => '1',
                                            'example' => '1',
                                        ],
                                        'Method' => [
                                            'description' => '规则类型。取值：'."\n"
                                                ."\n"
                                                .'- **char**：表示字符串匹配。'."\n"
                                                ."\n"
                                                .'- **hex**：表示十六进制匹配。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'char',
                                            'enum' => [
                                                'hex',
                                                'char',
                                            ],
                                        ],
                                        'Match' => [
                                            'description' => '逻辑符。取值：'."\n"
                                                ."\n"
                                                .'- **0**：表示命中执行动作。'."\n"
                                                ."\n"
                                                .'- **1**：表示未命中执行动作。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '0',
                                            'enum' => [
                                                '0',
                                                '1',
                                            ],
                                        ],
                                        'Action' => [
                                            'description' => '动作。取值：'."\n"
                                                ."\n"
                                                .'- **2**： 表示丢弃。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '2',
                                            'enum' => [
                                                '1',
                                                '2',
                                            ],
                                        ],
                                        'Limited' => [
                                            'description' => '会话流启动规则匹配的最小字节数，取值范围：**0**~**2048**',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'maximum' => '2048',
                                            'exclusiveMaximum' => true,
                                            'minimum' => '0',
                                            'example' => '0',
                                        ],
                                        'ConditionList' => [
                                            'description' => '检测条件列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Arg' => [
                                                        'description' => '检测内容。'."\n"
                                                            .'> 规则类型为**char**，必须为ACSII字符串；规则类型为**hex**，必须为十六进制字符串。最大长度2048。',
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'example' => 'abcd',
                                                        'maxLength' => 4096,
                                                        'minLength' => 1,
                                                    ],
                                                    'Position' => [
                                                        'description' => '检测起始位置，取值范围：**0**~**2047**。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => true,
                                                        'maximum' => '2047',
                                                        'minimum' => '0',
                                                        'example' => '0',
                                                    ],
                                                    'Depth' => [
                                                        'description' => '检测窗口长度，取值范围：**1**~**2048**。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => true,
                                                        'maximum' => '2048',
                                                        'minimum' => '1',
                                                        'example' => '1200',
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'required' => true,
                                            'maxItems' => 5,
                                            'minItems' => 1,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的 ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '3777EF25-940B-51F4-BB1D-99B5********',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3777EF25-940B-51F4-BB1D-99B5********\\"\\n}","type":"json"}]',
            'title' => '修改防护策略内容',
            'description' => '请确保使用该接口时，参数是全量的，参数未填时，配置会被删除。',
        ],
        'ListPolicy' => [
            'summary' => '查询防护策略。',
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
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '201465',
                'abilityTreeNodes' => [
                    'FEATUREddosRWSV1C',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test**',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略类型。取值：'."\n"
                            ."\n"
                            .'- **l3**：表示IP防护策略'."\n"
                            ."\n"
                            .'- **l4**：表示端口防护策略',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'l3',
                        'enum' => [
                            'l3',
                            'l4',
                        ],
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页的行数。默认值为**10**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的 ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'B4B379C2-9319-4C6B-B579-FE36831B09F4',
                            ],
                            'PolicyList' => [
                                'description' => '策略列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'description' => '策略ID。',
                                            'type' => 'string',
                                            'example' => '877afbdf-3982-4d36-9886-f043********',
                                        ],
                                        'Name' => [
                                            'description' => '策略名称。',
                                            'type' => 'string',
                                            'example' => 'test**',
                                        ],
                                        'Type' => [
                                            'description' => '策略类型。取值：'."\n"
                                                .'- **l3**：表示IP防护策略。'."\n"
                                                .'- **l4**：表示端口防护策略。',
                                            'type' => 'string',
                                            'example' => 'l3',
                                        ],
                                        'AttachedCount' => [
                                            'description' => '策略关联的防护对象数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'Content' => [
                                            'description' => '策略内容。',
                                            'type' => 'object',
                                            'properties' => [
                                                'BlackIpListExpireAt' => [
                                                    'description' => 'IP黑名单超时时间（unix时间戳）。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1716878000',
                                                ],
                                                'EnableIntelligence' => [
                                                    'description' => '是否开启AI智能防护。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'IntelligenceLevel' => [
                                                    'description' => 'AI智能防护的防护等级。取值：'."\n"
                                                        ."\n"
                                                        .'- **default**：表示正常。'."\n"
                                                        .'- **hard**：表示严格。'."\n"
                                                        .'- **weak**：表示宽松。',
                                                    'type' => 'string',
                                                    'example' => 'default',
                                                ],
                                                'WhitenGfbrNets' => [
                                                    'description' => '是否开启DDoS高防（中国内地&非中国内地）回源地址加白。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'EnableDropIcmp' => [
                                                    'description' => '是否禁用ICMP协议。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'RegionBlockCountryList' => [
                                                    'description' => '区域封禁的国家列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '区域封禁的国家代号。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '11',
                                                    ],
                                                ],
                                                'RegionBlockProvinceList' => [
                                                    'description' => '区域封禁的省份列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '区域封禁的省份代号。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '2',
                                                    ],
                                                ],
                                                'SourceLimit' => [
                                                    'description' => '源限速。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Pps' => [
                                                            'description' => '源PPS限速，单位Packet/s。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '64',
                                                        ],
                                                        'Bps' => [
                                                            'description' => '源带宽限速，单位Byte/s。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '2048',
                                                        ],
                                                        'SynPps' => [
                                                            'description' => '源SYN PPS限速，单位Packet/s。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '64',
                                                        ],
                                                        'SynBps' => [
                                                            'description' => '源SYN 带宽限速，单位Byte/s。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '2048',
                                                        ],
                                                    ],
                                                ],
                                                'SourceBlockList' => [
                                                    'description' => '源限速拉黑列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Type' => [
                                                                'description' => '源限速类型。取值：'."\n"
                                                                    ."\n"
                                                                    .'- **3**：表示源PPS限速。'."\n"
                                                                    ."\n"
                                                                    .'- **4**：表示源带宽限速。'."\n"
                                                                    ."\n"
                                                                    .'- **5**：表示源SYN PPS限速。'."\n"
                                                                    ."\n"
                                                                    .'- **6**：表示源SYN 带宽限速。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '3',
                                                            ],
                                                            'BlockExpireSeconds' => [
                                                                'description' => '源IP加入黑名单的时长。单位秒。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '120',
                                                            ],
                                                            'EverySeconds' => [
                                                                'description' => '源限速拉黑的统计周期，单位秒。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '60',
                                                            ],
                                                            'ExceedLimitTimes' => [
                                                                'description' => '源IP在1个统计周期内超过限速值的次数。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '5',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'ReflectBlockUdpPortList' => [
                                                    'description' => '反射攻击防护过滤的端口列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '反射攻击防护过滤的端口',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '123',
                                                    ],
                                                ],
                                                'PortRuleList' => [
                                                    'description' => '端口封禁规则列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Id' => [
                                                                'description' => '规则ID。',
                                                                'type' => 'string',
                                                                'example' => '8f3c3062-6c20-425d-8405-2bd1********',
                                                            ],
                                                            'Protocol' => [
                                                                'description' => '协议类型，取值：'."\n"
                                                                    ."\n"
                                                                    .'- **tcp**：表示传输控制协议。'."\n"
                                                                    .'- **udp**：表示用户数据报协议。',
                                                                'type' => 'string',
                                                                'example' => 'udp',
                                                            ],
                                                            'SrcPortStart' => [
                                                                'description' => '源端口范围的起始值。取值范围：**0**~**65535**。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '0',
                                                            ],
                                                            'SrcPortEnd' => [
                                                                'description' => '源端口范围的结束值。取值范围：**0**~**65535**。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '65535',
                                                            ],
                                                            'DstPortStart' => [
                                                                'description' => '目的端口范围的起始值。取值范围：**0**~**65535**。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '0',
                                                            ],
                                                            'DstPortEnd' => [
                                                                'description' => '目的端口范围的结束值。取值范围：**0**~**65535**。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '65535',
                                                            ],
                                                            'MatchAction' => [
                                                                'description' => '匹配动作。取值：'."\n"
                                                                    ."\n"
                                                                    .'- **drop**：表示丢弃。',
                                                                'type' => 'string',
                                                                'example' => 'drop',
                                                            ],
                                                            'SeqNo' => [
                                                                'description' => '生效顺序号，使用整数表示。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '1',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'FingerPrintRuleList' => [
                                                    'description' => '指纹过滤规则列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Id' => [
                                                                'description' => '规则ID。',
                                                                'type' => 'string',
                                                                'example' => '2c0b09cd-a565-4481-9acb-418b********',
                                                            ],
                                                            'Protocol' => [
                                                                'description' => '协议类型，取值：'."\n"
                                                                    ."\n"
                                                                    .'- **tcp**：表示传输控制协议。'."\n"
                                                                    .'- **udp**：表示用户数据报协议。',
                                                                'type' => 'string',
                                                                'example' => 'udp',
                                                            ],
                                                            'SrcPortStart' => [
                                                                'description' => '源端口范围的开始值。取值范围：**0**~**65535**。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '0',
                                                            ],
                                                            'SrcPortEnd' => [
                                                                'description' => '源端口范围的结束值。取值范围：**0**~**65535**。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '65535',
                                                            ],
                                                            'DstPortStart' => [
                                                                'description' => '目的端口范围的起始值。取值范围：**0**~**65535**。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '0',
                                                            ],
                                                            'DstPortEnd' => [
                                                                'description' => '目的端口范围的结束值。取值范围：**0**~**65535**。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '65535',
                                                            ],
                                                            'MinPktLen' => [
                                                                'description' => '最小包长，取值范围：**1**~**1500**。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '1',
                                                            ],
                                                            'MaxPktLen' => [
                                                                'description' => '最大包长，取值范围：**1**~**1500**。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '1500',
                                                            ],
                                                            'Offset' => [
                                                                'description' => '偏移量，取值范围：**0**~**1500**。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '0',
                                                            ],
                                                            'PayloadBytes' => [
                                                                'description' => '检测载荷。使用十六进制字符串格式表示。',
                                                                'type' => 'string',
                                                                'example' => 'abcd',
                                                            ],
                                                            'MatchAction' => [
                                                                'description' => '匹配动作。取值：'."\n"
                                                                    ."\n"
                                                                    .'- **accept**：表示放行满足指纹特征的流量。'."\n"
                                                                    .'- **drop**：表示丢弃满足指纹特征的流量。'."\n"
                                                                    .'- **ip_rate**：表示对满足指纹特征的流量来源IP进行访问限速。限速值通过**RateValue**参数设置。'."\n"
                                                                    .'- **session_rate**：表示对满足指纹特征的流量来源会话进行访问限速。限速值通过**RateValue**参数设置。',
                                                                'type' => 'string',
                                                                'example' => 'drop',
                                                            ],
                                                            'RateValue' => [
                                                                'description' => '限速值。取值范围：**1**~**100000**。'."\n"
                                                                    ."\n"
                                                                    .'> 匹配后动作为源IP限速或者源Session限速时（**匹配动作**为**ip_rate**或**session_rate**），必须填写该参数。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '1000',
                                                            ],
                                                            'SeqNo' => [
                                                                'description' => '生效顺序号，使用整数表示。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '1',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'EnableL4Defense' => [
                                                    'description' => '是否开启端口防护。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'L4RuleList' => [
                                                    'description' => '端口防护规则列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Name' => [
                                                                'description' => '规则名称。',
                                                                'type' => 'string',
                                                                'example' => 'test**',
                                                            ],
                                                            'Priority' => [
                                                                'description' => '规则优先级。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '1',
                                                            ],
                                                            'Method' => [
                                                                'description' => '规则类型。取值：'."\n"
                                                                    ."\n"
                                                                    .'- **char**：表示字符串匹配。'."\n"
                                                                    ."\n"
                                                                    .'- **hex**：表示十六进制匹配。',
                                                                'type' => 'string',
                                                                'example' => 'char',
                                                            ],
                                                            'Match' => [
                                                                'description' => '逻辑符。取值：'."\n"
                                                                    ."\n"
                                                                    .'- **0**：表示命中执行动作。'."\n"
                                                                    ."\n"
                                                                    .'- **1**：表示未命中执行动作。',
                                                                'type' => 'string',
                                                                'example' => '1',
                                                            ],
                                                            'Action' => [
                                                                'description' => '动作。取值：'."\n"
                                                                    ."\n"
                                                                    .'- **2**： 表示丢弃。',
                                                                'type' => 'string',
                                                                'example' => '2',
                                                            ],
                                                            'Limited' => [
                                                                'description' => '会话流启动规则匹配的最小字节数，取值范围：**0**~**2048**',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '0',
                                                            ],
                                                            'ConditionList' => [
                                                                'description' => '检测条件列表。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'Arg' => [
                                                                            'description' => '检测内容。'."\n"
                                                                                .'> 规则类型为**char**，必须为ACSII字符串；规则类型为**hex**，必须为十六进制字符串。最大长度2048。',
                                                                            'type' => 'string',
                                                                            'example' => 'test',
                                                                        ],
                                                                        'Position' => [
                                                                            'description' => '检测起始位置，取值范围：**0**~**2047**。',
                                                                            'type' => 'integer',
                                                                            'format' => 'int32',
                                                                            'example' => '0',
                                                                        ],
                                                                        'Depth' => [
                                                                            'description' => '检测窗口长度，取值范围：**1**~**2048**。',
                                                                            'type' => 'integer',
                                                                            'format' => 'int32',
                                                                            'example' => '32',
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
                            'Total' => [
                                'description' => '策略总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4B379C2-9319-4C6B-B579-FE36831B09F4\\",\\n  \\"PolicyList\\": [\\n    {\\n      \\"Id\\": \\"877afbdf-3982-4d36-9886-f043********\\",\\n      \\"Name\\": \\"test**\\",\\n      \\"Type\\": \\"l3\\",\\n      \\"AttachedCount\\": 0,\\n      \\"Content\\": {\\n        \\"BlackIpListExpireAt\\": 1716878000,\\n        \\"EnableIntelligence\\": true,\\n        \\"IntelligenceLevel\\": \\"default\\",\\n        \\"WhitenGfbrNets\\": false,\\n        \\"EnableDropIcmp\\": false,\\n        \\"RegionBlockCountryList\\": [\\n          11\\n        ],\\n        \\"RegionBlockProvinceList\\": [\\n          2\\n        ],\\n        \\"SourceLimit\\": {\\n          \\"Pps\\": 64,\\n          \\"Bps\\": 2048,\\n          \\"SynPps\\": 64,\\n          \\"SynBps\\": 2048\\n        },\\n        \\"SourceBlockList\\": [\\n          {\\n            \\"Type\\": 3,\\n            \\"BlockExpireSeconds\\": 120,\\n            \\"EverySeconds\\": 60,\\n            \\"ExceedLimitTimes\\": 5\\n          }\\n        ],\\n        \\"ReflectBlockUdpPortList\\": [\\n          123\\n        ],\\n        \\"PortRuleList\\": [\\n          {\\n            \\"Id\\": \\"8f3c3062-6c20-425d-8405-2bd1********\\",\\n            \\"Protocol\\": \\"udp\\",\\n            \\"SrcPortStart\\": 0,\\n            \\"SrcPortEnd\\": 65535,\\n            \\"DstPortStart\\": 0,\\n            \\"DstPortEnd\\": 65535,\\n            \\"MatchAction\\": \\"drop\\",\\n            \\"SeqNo\\": 1\\n          }\\n        ],\\n        \\"FingerPrintRuleList\\": [\\n          {\\n            \\"Id\\": \\"2c0b09cd-a565-4481-9acb-418b********\\",\\n            \\"Protocol\\": \\"udp\\",\\n            \\"SrcPortStart\\": 0,\\n            \\"SrcPortEnd\\": 65535,\\n            \\"DstPortStart\\": 0,\\n            \\"DstPortEnd\\": 65535,\\n            \\"MinPktLen\\": 1,\\n            \\"MaxPktLen\\": 1500,\\n            \\"Offset\\": 0,\\n            \\"PayloadBytes\\": \\"abcd\\",\\n            \\"MatchAction\\": \\"drop\\",\\n            \\"RateValue\\": 1000,\\n            \\"SeqNo\\": 1\\n          }\\n        ],\\n        \\"EnableL4Defense\\": true,\\n        \\"L4RuleList\\": [\\n          {\\n            \\"Name\\": \\"test**\\",\\n            \\"Priority\\": 1,\\n            \\"Method\\": \\"char\\",\\n            \\"Match\\": \\"1\\",\\n            \\"Action\\": \\"2\\",\\n            \\"Limited\\": 0,\\n            \\"ConditionList\\": [\\n              {\\n                \\"Arg\\": \\"test\\",\\n                \\"Position\\": 0,\\n                \\"Depth\\": 32\\n              }\\n            ]\\n          }\\n        ]\\n      }\\n    }\\n  ],\\n  \\"Total\\": 10\\n}","type":"json"}]',
            'title' => '查询防护策略',
        ],
        'DetachFromPolicy' => [
            'summary' => '防护对象取消关联防护策略。',
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
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '201491',
                'abilityTreeNodes' => [
                    'FEATUREddosRWSV1C',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PolicyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略类型。取值'."\n"
                            .'- **l3**：表示IP防护策略'."\n"
                            .'- **l4**：表示端口防护策略',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'l3',
                        'enum' => [
                            'default',
                            'l3',
                            'l4',
                        ],
                    ],
                ],
                [
                    'name' => 'IpPortProtocolList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '防护对象列表。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Ip' => [
                                    'description' => '防护对象的IP地址。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '47.118.172.***',
                                ],
                                'Port' => [
                                    'description' => '防护对象的端口。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'maximum' => '65535',
                                    'minimum' => '1',
                                    'example' => '8*',
                                ],
                                'Protocol' => [
                                    'description' => '防护对象的协议类型，取值：'."\n"
                                        ."\n"
                                        .'- **tcp**：表示传输控制协议。'."\n"
                                        .'- **udp**：表示用户数据报协议。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'tcp',
                                    'enum' => [
                                        'udp',
                                        'tcp',
                                    ],
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '1B0F7EC6-51D7-4D70-B0EC-CD8A9E99****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1B0F7EC6-51D7-4D70-B0EC-CD8A9E99****\\"\\n}","type":"json"}]',
            'title' => '防护对象取消关联防护策略',
        ],
        'ListPolicyAttachment' => [
            'summary' => '查询防护策略关联关系。',
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
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '201492',
                'abilityTreeNodes' => [
                    'FEATUREddosRWSV1C',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'f38f6520-92b7-451e-b520-9ab3********',
                    ],
                ],
                [
                    'name' => 'PolicyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略类型，取值'."\n"
                            .'- **l3**：表示IP防护策略'."\n"
                            .'- **l4**：表示端口防护策略',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'l3',
                        'enum' => [
                            'default',
                            'l3',
                            'l4',
                        ],
                    ],
                ],
                [
                    'name' => 'IpPortProtocolList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '防护对象列表。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Ip' => [
                                    'description' => '防护对象的IP地址。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '47.118.172.***',
                                ],
                                'Port' => [
                                    'description' => '防护对象的端口号。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'maximum' => '65535',
                                    'minimum' => '1',
                                    'example' => '8*',
                                ],
                                'Protocol' => [
                                    'description' => '防护对象的协议类型，取值：'."\n"
                                        ."\n"
                                        .'- **tcp**：表示传输控制协议。'."\n"
                                        .'- **udp**：表示用户数据报协议。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'tcp',
                                    'enum' => [
                                        'udp',
                                        'tcp',
                                    ],
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页的行数。默认值为**10**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'B4B379C2-9319-4C6B-B579-FE36831B09F4',
                            ],
                            'AttachmentList' => [
                                'description' => '防护关联关系列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Ip' => [
                                            'description' => '防护对象的IP地址。',
                                            'type' => 'string',
                                            'example' => '147.139.183.***',
                                        ],
                                        'PolicyId' => [
                                            'description' => '策略ID。',
                                            'type' => 'string',
                                            'example' => '1b43f44e-65e1-411a-b0c0-d6c1********',
                                        ],
                                        'PolicyName' => [
                                            'description' => '策略名称。',
                                            'type' => 'string',
                                            'example' => 'test**',
                                        ],
                                        'PolicyType' => [
                                            'description' => '策略类型，取值'."\n"
                                                .'- **l3**：表示IP防护策略'."\n"
                                                .'- **l4**：表示端口防护策略',
                                            'type' => 'string',
                                            'example' => 'l3',
                                        ],
                                        'Region' => [
                                            'description' => '防护对象的IP归属地域。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'Port' => [
                                            'description' => '防护对象的端口号。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '8*',
                                        ],
                                        'Protocol' => [
                                            'description' => '防护对象的协议类型，取值：'."\n"
                                                ."\n"
                                                .'- **tcp**：表示传输控制协议。'."\n"
                                                .'- **udp**：表示用户数据报协议。',
                                            'type' => 'string',
                                            'example' => 'udp',
                                        ],
                                        'MemberUid' => [
                                            'description' => '防护对象的IP所属成员账号UID。',
                                            'type' => 'string',
                                            'example' => '177699790631****',
                                        ],
                                    ],
                                ],
                            ],
                            'Total' => [
                                'description' => '防护关联关系总数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '28',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4B379C2-9319-4C6B-B579-FE36831B09F4\\",\\n  \\"AttachmentList\\": [\\n    {\\n      \\"Ip\\": \\"147.139.183.***\\",\\n      \\"PolicyId\\": \\"1b43f44e-65e1-411a-b0c0-d6c1********\\",\\n      \\"PolicyName\\": \\"test**\\",\\n      \\"PolicyType\\": \\"l3\\",\\n      \\"Region\\": \\"cn-hangzhou\\",\\n      \\"Port\\": 0,\\n      \\"Protocol\\": \\"udp\\",\\n      \\"MemberUid\\": \\"177699790631****\\"\\n    }\\n  ],\\n  \\"Total\\": 28\\n}","type":"json"}]',
            'title' => '查询防护策略关联关系',
        ],
        'DescribeRdStatus' => [
            'summary' => '查询多账号管理状态。',
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
                'abilityTreeCode' => '187044',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的 ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '1B0F7EC6-51D7-4D70-B0EC-CD8A9E998D86',
                            ],
                            'RootUid' => [
                                'description' => '原生防护多账号管理的管理账号 ID。',
                                'type' => 'string',
                                'example' => '125085778340****',
                            ],
                            'CurrentUid' => [
                                'description' => '当前账号 ID。',
                                'type' => 'string',
                                'example' => '125085778340****',
                            ],
                            'RemoteEnable' => [
                                'description' => '是否在[资源管理控制台](https://resourcemanager.console.aliyun.com)开通了资源目录。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'LocalEnable' => [
                                'description' => '当前账号是否开通了原生防护多账号管理。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'MasterUid' => [
                                'description' => '资源目录的管理账号 (Master Account) ID。',
                                'type' => 'string',
                                'example' => '125085778340****',
                            ],
                            'ServicePrincipalEnabled' => [
                                'description' => '是否开启了可信服务。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'Enabled' => [
                                'description' => '是否允许使用原生防护多账号管理。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'CurrentUidType' => [
                                'description' => '账号类型。取值：'."\n"
                                    ."\n"
                                    .'- **MasterAccount**：表示管理账号'."\n"
                                    .'- **DelegatedAdminAccount**：表示委托管理账号'."\n"
                                    .'- **MemberAccount**：表示成员账号',
                                'type' => 'string',
                                'example' => 'MemberAccount',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1B0F7EC6-51D7-4D70-B0EC-CD8A9E998D86\\",\\n  \\"RootUid\\": \\"125085778340****\\",\\n  \\"CurrentUid\\": \\"125085778340****\\",\\n  \\"RemoteEnable\\": false,\\n  \\"LocalEnable\\": false,\\n  \\"MasterUid\\": \\"125085778340****\\",\\n  \\"ServicePrincipalEnabled\\": false,\\n  \\"Enabled\\": false,\\n  \\"CurrentUidType\\": \\"MemberAccount\\"\\n}","type":"json"}]',
            'title' => '查询多账号管理状态',
        ],
        'DescribeRdMemberList' => [
            'summary' => '查询已添加的成员账号。',
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
                'abilityTreeCode' => '185221',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页的行数。默认值为**10**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'ResourceDirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源目录ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rd-x9bL**',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的 ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'DC245DEE-9800-5579-BF99-189D6A5BA9FE',
                            ],
                            'Total' => [
                                'description' => '总记录条数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'MemberList' => [
                                'description' => '成员账号列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '成员账号。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Uid' => [
                                            'description' => '成员账号 ID。',
                                            'type' => 'string',
                                            'example' => '196027980201****',
                                        ],
                                        'Name' => [
                                            'description' => '成员账号名称。',
                                            'type' => 'string',
                                            'example' => 'tes***',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1624954942000',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DC245DEE-9800-5579-BF99-189D6A5BA9FE\\",\\n  \\"Total\\": 10,\\n  \\"MemberList\\": [\\n    {\\n      \\"Uid\\": \\"196027980201****\\",\\n      \\"Name\\": \\"tes***\\",\\n      \\"GmtCreate\\": 1624954942000\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询已添加的成员账号',
        ],
        'AddRdMemberList' => [
            'summary' => '添加成员账号。',
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
                'abilityTreeCode' => '185232',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'MemberList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '成员账号列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '成员账号。',
                            'type' => 'object',
                            'properties' => [
                                'Uid' => [
                                    'description' => '成员账号 ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '19510843762****',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 32,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的 ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '4C467B38-3910-447D-87BC-AC049166F216',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4C467B38-3910-447D-87BC-AC049166F216\\"\\n}","type":"json"}]',
            'title' => '添加成员账号',
            'description' => '只有委派管理员账号（Delegated Admin Account）或者管理账号（Master Account）才能添加成员账号。',
        ],
        'DeleteRdMemberList' => [
            'summary' => '删除成员账号。',
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
                'operationType' => 'delete',
                'abilityTreeCode' => '185233',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'MemberList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '成员账号列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '成员账号。',
                            'type' => 'object',
                            'properties' => [
                                'Uid' => [
                                    'description' => '成员账号 ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '136548010379****',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 32,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的 ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'A2D6D5FB-FA07-41A8-B093-A2B7B26E72F2',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A2D6D5FB-FA07-41A8-B093-A2B7B26E72F2\\"\\n}","type":"json"}]',
            'title' => '删除成员账号',
            'description' => '只有委派管理员账号（Delegated Admin Account）或者管理账号（Master Account）才能删除成员账号。',
        ],
        'ModifyRemark' => [
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
                'abilityTreeCode' => '105803',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要设置备注的DDoS原生防护实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceList](~~118698~~)查询所有DDoS原生防护实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddosbgp-cn-n6w1r7nz****',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '为DDoS原生防护实例设置备注。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test-remark',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域ID。',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '6AC3597B-7FD5-5E68-97C3-E11F4D010732',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6AC3597B-7FD5-5E68-97C3-E11F4D010732\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyRemarkResponse>\\n    <RequestId>6AC3597B-7FD5-5E68-97C3-E11F4D010732</RequestId>\\n</ModifyRemarkResponse>","errorExample":""}]',
            'title' => '修改DDoS防护包的备注',
            'summary' => '为单个DDoS原生防护实例设置备注。',
            'description' => '本接口用于为单个DDoS原生防护实例设置备注。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeRegions' => [
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
                'abilityTreeCode' => '105774',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。'."\n"
                            ."\n"
                            .'关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的地域ID。默认为**cn-hangzhou**，表示查询华东1（杭州）地域的DDoS原生防护实例支持防护的云资产的地域。'."\n"
                            ."\n"
                            .'如果需要查询其他地域ID，请参见[地域和可用区](~~40654~~)，获取对应的**RegionId**。'."\n",
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
                            'Code' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'F7CA8B4E-FB15-4336-A351-8DC29D66EA82',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    .'- **true**：表示调用成功。'."\n"
                                    .'- **false**：表示调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Regions' => [
                                'description' => 'DDoS原生防护支持防护的云资产的地域信息，包含地域ID和名称等。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'RegionEnName' => [
                                            'description' => '地域的英文名称。',
                                            'type' => 'string',
                                            'example' => 'China (Hangzhou)',
                                        ],
                                        'RegionName' => [
                                            'description' => '地域的中文名称。',
                                            'type' => 'string',
                                            'example' => '华东1（杭州）',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"F7CA8B4E-FB15-4336-A351-8DC29D66EA82\\",\\n  \\"Success\\": true,\\n  \\"Regions\\": [\\n    {\\n      \\"RegionEnName\\": \\"China (Hangzhou)\\",\\n      \\"RegionName\\": \\"华东1（杭州）\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":"{\\n    \\"RequestId\\": \\"9C48E43E-58A6-4A08-A858-4C9BB9631870\\",\\n    \\"Regions\\": [\\n    {\\n        \\"RegionId\\": \\"cn-shenzhen\\"\\n    },\\n    {\\n        \\"RegionId\\": \\"cn-qingdao\\"\\n    },\\n    {\\n        \\"RegionId\\": \\"cn-beijing\\"\\n    },\\n    {\\n        \\"RegionId\\": \\"cn-shanghai\\"\\n    },\\n    {\\n        \\"RegionId\\": \\"cn-hongkong\\"\\n    },\\n    {\\n        \\"RegionId\\": \\"cn-huhehaote\\"\\n    },\\n    {\\n        \\"RegionId\\": \\"cn-zhangjiakou\\"\\n    },\\n    {\\n        \\"RegionId\\": \\"us-west-1\\"\\n    },\\n    {\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n    ],\\n    \\"Success\\": true,\\n    \\"Code\\": \\"200\\"\\n}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<DescribeRegionsResponse>\\n\\t<RequestId>F7CA8B4E-FB15-4336-A351-8DC29D66EA82</RequestId>\\n\\t<Regions>\\n\\t\\t<RegionName>俄罗斯（莫斯科）</RegionName>\\n\\t\\t<RegionEnName>Russia (Moscow)</RegionEnName>\\n\\t\\t<RegionId>rus-west-1</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>华北2（北京）</RegionName>\\n\\t\\t<RegionEnName>China (Beijing)</RegionEnName>\\n\\t\\t<RegionId>cn-beijing</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>华北6（乌兰察布）</RegionName>\\n\\t\\t<RegionEnName>China (Ulanqab)</RegionEnName>\\n\\t\\t<RegionId>cn-wulanchabu</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>印度（孟买）</RegionName>\\n\\t\\t<RegionEnName>India (Mumbai)</RegionEnName>\\n\\t\\t<RegionId>ap-south-1</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>华北1（青岛）</RegionName>\\n\\t\\t<RegionEnName>China (Qingdao)</RegionEnName>\\n\\t\\t<RegionId>cn-qingdao</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>华东2（上海）</RegionName>\\n\\t\\t<RegionEnName>China (Shanghai)</RegionEnName>\\n\\t\\t<RegionId>cn-shanghai</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>中国（香港）</RegionName>\\n\\t\\t<RegionEnName>China (Hong Kong)</RegionEnName>\\n\\t\\t<RegionId>cn-hongkong</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>华南2（河源）</RegionName>\\n\\t\\t<RegionEnName>China (Heyuan)</RegionEnName>\\n\\t\\t<RegionId>cn-heyuan</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>德国（法兰克福）</RegionName>\\n\\t\\t<RegionEnName>Germany (Frankfurt)</RegionEnName>\\n\\t\\t<RegionId>eu-central-1</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>华北3（张家口）</RegionName>\\n\\t\\t<RegionEnName>China (Zhangjiakou)</RegionEnName>\\n\\t\\t<RegionId>cn-zhangjiakou</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>美国（硅谷）</RegionName>\\n\\t\\t<RegionEnName>US (Silicon Valley)</RegionEnName>\\n\\t\\t<RegionId>us-west-1</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>华南1（深圳）</RegionName>\\n\\t\\t<RegionEnName>China (Shenzhen)</RegionEnName>\\n\\t\\t<RegionId>cn-shenzhen</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>英国（伦敦）</RegionName>\\n\\t\\t<RegionEnName>UK (London)</RegionEnName>\\n\\t\\t<RegionId>eu-west-1</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>日本（东京）</RegionName>\\n\\t\\t<RegionEnName>Japan (Tokyo)</RegionEnName>\\n\\t\\t<RegionId>ap-northeast-1</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>阿联酋（迪拜）</RegionName>\\n\\t\\t<RegionEnName>UAE (Dubai)</RegionEnName>\\n\\t\\t<RegionId>me-east-1</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>西南1（成都）</RegionName>\\n\\t\\t<RegionEnName>China (Chengdu)</RegionEnName>\\n\\t\\t<RegionId>cn-chengdu</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>华南3（广州）</RegionName>\\n\\t\\t<RegionEnName>China (Guangzhou)</RegionEnName>\\n\\t\\t<RegionId>cn-guangzhou</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>新加坡</RegionName>\\n\\t\\t<RegionEnName>Singapore</RegionEnName>\\n\\t\\t<RegionId>ap-southeast-1</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>澳大利亚（悉尼）</RegionName>\\n\\t\\t<RegionEnName>Australia (Sydney)</RegionEnName>\\n\\t\\t<RegionId>ap-southeast-2</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>马来西亚（吉隆坡）</RegionName>\\n\\t\\t<RegionEnName>Malaysia (Kuala Lumpur)</RegionEnName>\\n\\t\\t<RegionId>ap-southeast-3</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>华北5（呼和浩特）</RegionName>\\n\\t\\t<RegionEnName>China (Hohhot)</RegionEnName>\\n\\t\\t<RegionId>cn-huhehaote</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>印度尼西亚（雅加达）</RegionName>\\n\\t\\t<RegionEnName>Indonesia (Jakarta)</RegionEnName>\\n\\t\\t<RegionId>ap-southeast-5</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>美国（弗吉尼亚）</RegionName>\\n\\t\\t<RegionEnName>US (Virginia)</RegionEnName>\\n\\t\\t<RegionId>us-east-1</RegionId>\\n\\t</Regions>\\n\\t<Regions>\\n\\t\\t<RegionName>华东1（杭州）</RegionName>\\n\\t\\t<RegionEnName>China (Hangzhou)</RegionEnName>\\n\\t\\t<RegionId>cn-hangzhou</RegionId>\\n\\t</Regions>\\n\\t<Code>200</Code>\\n\\t<Success>true</Success>\\n</DescribeRegionsResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<DescribeRegionsResponse>\\n   <RequestId>C3D66E07-41BF-41B7-A4BF-83A9E08E1C09</RequestId>\\n   <Regions>\\n       <Region>\\n           <RegionId>cn-shenzhen</RegionId>\\n       </Region>\\n       <Region>\\n           <RegionId>cn-qingdao</RegionId>\\n       </Region>\\n       <Region>\\n           <RegionId>cn-beijing</RegionId>\\n       </Region>\\n       <Region>\\n           <RegionId>cn-shanghai</RegionId>\\n       </Region>\\n       <Region>\\n           <RegionId>cn-hongkong</RegionId>\\n       </Region>\\n       <Region>\\n           <RegionId>cn-huhehaote</RegionId>\\n       </Region>\\n       <Region>\\n           <RegionId>cn-zhangjiakou</RegionId>\\n       </Region>\\n       <Region>\\n           <RegionId>us-west-1</RegionId>\\n       </Region>\\n       <Region>\\n           <RegionId>cn-hangzhou</RegionId>\\n       </Region>\\n   </Regions>\\n   <Success>true</Success>\\n   <Code>200</Code>\\n</DescribeRegionsResponse>"}]',
            'title' => '查询所有地域列表',
            'summary' => '查询DDoS原生防护企业版支持的所有地域信息。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeInstanceList' => [
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
                'abilityTreeCode' => '105761',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'InstanceIdList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS原生防护实例的ID列表。使用`["<实例ID 1>","<实例ID 2>",……]`格式表示。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["ddosbgp-cn-oew1pjrk****"]',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS原生防护实例的备注。支持模糊查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页包含实例的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'IpVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS原生防护实例防护的IP资产的协议类型。取值：'."\n"
                            ."\n"
                            .'- **IPv4**：表示IPv4协议。'."\n"
                            .'- **IPv6**：表示IPv6协议。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'IPv4',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS原生防护实例的防护套餐类型。取值：'."\n"
                            ."\n"
                            .'- **0**：表示专业版。'."\n"
                            .'- **1**：表示企业版。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS原生防护实例的防护对象IP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '47.89.XX.XX',
                    ],
                ],
                [
                    'name' => 'Orderby',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置DDoS原生防护实例列表的排序字段。取值固定为**expireTime**，表示按照实例的到期时间排序。'."\n"
                            ."\n"
                            .'您可以通过**Orderdire**参数设置排序方式。'."\n"
                            .'                           ',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'expireTime',
                    ],
                ],
                [
                    'name' => 'Orderdire',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置排序方式。取值：'."\n"
                            ."\n"
                            .'- **desc**（默认）：表示按照到期时间降序排序。'."\n"
                            .'- **asc**：表示按照到期时间升序排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'desc',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS原生防护实例所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的DDoS原生防护实例绑定的标签列表。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '要查询的DDoS原生防护实例绑定的标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test-key',
                                ],
                                'Value' => [
                                    'description' => '要查询的DDoS原生防护实例绑定的标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test-value',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'InstanceTypeList',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询的DDoS原生防护实例的防护套餐类型。取值：'."\n"
                                .'- 0：表示专业版。'."\n"
                                .'- 1：表示企业版',
                            'type' => 'string',
                            'required' => false,
                            'example' => '0',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Total' => [
                                'description' => '查询到的DDoS原生防护实例的总数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '381D5D33-BB8F-395F-8EE4-AE3BB4B523C4',
                            ],
                            'InstanceList' => [
                                'description' => 'DDoS原生防护实例的详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '实例的状态。取值：'."\n"
                                                ."\n"
                                                .'- **1**：表示正常。'."\n"
                                                .'- **2**：表示已过期。'."\n"
                                                .'- **3**：表示已释放。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'IpType' => [
                                            'description' => '实例防护的IP资产的协议类型。取值：'."\n"
                                                ."\n"
                                                .'- **IPv4**：表示IPv4协议。'."\n"
                                                .'- **IPv6**：表示IPv6协议。',
                                            'type' => 'string',
                                            'example' => 'IPv4',
                                        ],
                                        'AutoRenewal' => [
                                            'description' => '实例是否已开启自动续费。取值：'."\n"
                                                ."\n"
                                                .'- **true**：表示已开启。'."\n"
                                                .'- **false**：表示未开启。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'Remark' => [
                                            'description' => '实例的备注。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'ExpireTime' => [
                                            'description' => '实例的到期时间。使用时间戳表示，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1640275200000',
                                        ],
                                        'Product' => [
                                            'description' => '实例关联的云产品类型。默认不返回该参数，只有当DDoS原生防护实例通过其他云产品创建时，才会返回对应云产品的代码。'."\n"
                                                ."\n"
                                                .'取值：'."\n"
                                                ."\n"
                                                .'- **gamebox**：表示该DDoS原生防护实例通过游戏安全盒服务创建。'."\n"
                                                .'- **eip**：表示该DDoS原生防护实例通过DDoS防护（增强版）EIP实例创建。',
                                            'type' => 'string',
                                            'example' => 'gamebox',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '实例的购买时间。使用时间戳表示，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1592886047000',
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'ddosbgp-cn-oew1pjrk****',
                                        ],
                                        'InstanceType' => [
                                            'description' => '实例的防护套餐类型。取值：'."\n"
                                                ."\n"
                                                .'- **0**：表示专业版。'."\n"
                                                .'- **1**：表示企业版。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'BlackholdingCount' => [
                                            'description' => '实例防护的公网IP资产中，处于黑洞状态的IP的数量。'."\n"
                                                ."\n"
                                                .'> 您可以调用[DeleteBlackhole](~~118692~~)为单个受保护IP解除黑洞状态。',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'CoverageType' => [
                                            'description' => '实例的资产覆盖类型。'."\n"
                                                ."\n"
                                                .'-  **1**：表示支持全球多个地域的公网IP资产。'."\n"
                                                .'- **2**：表示支持中国内地多个地域的公网IP资产。'."\n"
                                                .'- **3**：表示支持非中国内地多个地域的公网IP资产。'."\n"
                                                .'- **4**：表示支持全球一个地域的公网IP资产。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'CommodityType' => [
                                            'description' => '实例的商品类型。'."\n"
                                                ."\n"
                                                .'-  **ddos_ddosorigin_public_cn**：表示DDoS原生防护2.0（后付费）中国站。'."\n"
                                                .'- **ddos_ddosorigin_public_intl**：表示DDoS原生防护2.0（后付费）国际站。',
                                            'type' => 'string',
                                        ],
                                        'AutoProtectCondition' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Events' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'string',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Total\\": 1,\\n  \\"RequestId\\": \\"381D5D33-BB8F-395F-8EE4-AE3BB4B523C4\\",\\n  \\"InstanceList\\": [\\n    {\\n      \\"Status\\": \\"1\\",\\n      \\"IpType\\": \\"IPv4\\",\\n      \\"AutoRenewal\\": false,\\n      \\"Remark\\": \\"test\\",\\n      \\"ExpireTime\\": 1640275200000,\\n      \\"Product\\": \\"gamebox\\",\\n      \\"GmtCreate\\": 1592886047000,\\n      \\"InstanceId\\": \\"ddosbgp-cn-oew1pjrk****\\",\\n      \\"InstanceType\\": \\"1\\",\\n      \\"BlackholdingCount\\": \\"0\\",\\n      \\"CoverageType\\": 0,\\n      \\"CommodityType\\": \\"\\",\\n      \\"AutoProtectCondition\\": {\\n        \\"Events\\": [\\n          \\"\\"\\n        ]\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceListResponse>\\n    <Total>1</Total>\\n    <RequestId>381D5D33-BB8F-395F-8EE4-AE3BB4B523C4</RequestId>\\n    <InstanceList>\\n        <Status>1</Status>\\n        <IpType>IPv4</IpType>\\n        <AutoRenewal>false</AutoRenewal>\\n        <Remark>test</Remark>\\n        <ExpireTime>1640275200000</ExpireTime>\\n        <Product>ECS</Product>\\n        <GmtCreate>1592886047000</GmtCreate>\\n        <InstanceId>ddosbgp-cn-oew1pjrk****</InstanceId>\\n        <InstanceType>1</InstanceType>\\n        <BlackholdingCount>0</BlackholdingCount>\\n    </InstanceList>\\n</DescribeInstanceListResponse>","errorExample":""}]',
            'title' => '查询防护包实例的详细信息',
            'summary' => '查询DDoS原生防护实例的详情。',
            'description' => '本接口用于分页查询当前阿里云账号拥有的所有DDoS原生防护实例的详情，例如，实例的ID、有效期、状态等。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeInstanceSpecs' => [
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
                'abilityTreeCode' => '105762',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceIdList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS原生防护企业版实例的ID。使用JSON数组转化的字符串格式表示。JSON数组中的每个元素表示一个实例ID（字符串格式），多个ID间使用英文逗号（,）分隔。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceList](~~118698~~)查询指定地域下所有DDoS原生防护企业版实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '["ddosbgp-cn-n6w1r7nz****"]',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护企业版实例的地域ID。默认为**cn-hangzhou**，表示华东1（杭州）。'."\n"
                            ."\n"
                            .'> 如果您的实例不在华东1（杭州）地域，则此处必须填写实例所在地域的ID。您可以调用[DescribeRegions](~~118703~~)查询所有的**RegionId**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护企业版实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。'."\n"
                            ."\n"
                            .'关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '5840AB9F-1419-4620-807D-5EA476090247',
                            ],
                            'InstanceSpecs' => [
                                'description' => 'DDoS原生防护企业版实例的规格信息，包含全力防护的开启状态、可用和已用的全力防护次数等。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'IsFullDefenseMode' => [
                                            'description' => '该实例是否开启了全力防护模式。取值：'."\n"
                                                ."\n"
                                                .'- **0**：未开启全力防护模式。'."\n"
                                                .'- **1**：开启了全力防护模式。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Region' => [
                                            'description' => 'DDoS原生防护企业版实例的地域ID。'."\n"
                                                ."\n"
                                                .'> 您可以调用[DescribeRegions](~~118703~~)查询地域ID的具体含义。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'AvailableDefenseTimes' => [
                                            'description' => '当前可用的全力防护次数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'TotalDefenseTimes' => [
                                            'description' => '总共可用的全力防护次数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'DefenseTimesPercent' => [
                                            'description' => '全力防护次数使用的百分比。单位：百分比。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '30',
                                        ],
                                        'AvailableDeleteBlackholeCount' => [
                                            'description' => '当前可用的解除黑洞次数。',
                                            'type' => 'string',
                                            'example' => '100',
                                        ],
                                        'InstanceId' => [
                                            'description' => 'DDoS原生防护企业版实例的ID。',
                                            'type' => 'string',
                                            'example' => 'ddosbgp-cn-n6w1r7nz****',
                                        ],
                                        'PackConfig' => [
                                            'description' => 'DDoS原生防护企业版实例的配置信息，包含防护IP数量、防护带宽信息等。',
                                            'type' => 'object',
                                            'properties' => [
                                                'PackBasicThre' => [
                                                    'description' => '原生防护企业版实例的基础防护带宽。单位：Gbps。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '20',
                                                ],
                                                'BindIpCount' => [
                                                    'description' => '已添加防护的IP数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'PackAdvThre' => [
                                                    'description' => '原生防护企业版实例的弹性防护带宽。单位：Gbps。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '300',
                                                ],
                                                'NormalBandwidth' => [
                                                    'description' => '正常业务带宽。单位：Mbps。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '200',
                                                ],
                                                'IpBasicThre' => [
                                                    'description' => '被防护IP的基础防护阈值。单位：Gbps。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '20',
                                                ],
                                                'IpAdvanceThre' => [
                                                    'description' => '被防护IP的弹性防护阈值。单位：Gbps。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '300',
                                                ],
                                                'IpSpec' => [
                                                    'description' => '可添加的防护IP的数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '100',
                                                ],
                                                'Bandwidth' => [
                                                    'description' => '带宽。单位：Gbit/s。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5840AB9F-1419-4620-807D-5EA476090247\\",\\n  \\"InstanceSpecs\\": [\\n    {\\n      \\"IsFullDefenseMode\\": 1,\\n      \\"Region\\": \\"cn-hangzhou\\",\\n      \\"AvailableDefenseTimes\\": 2,\\n      \\"TotalDefenseTimes\\": 2,\\n      \\"DefenseTimesPercent\\": 30,\\n      \\"AvailableDeleteBlackholeCount\\": \\"100\\",\\n      \\"InstanceId\\": \\"ddosbgp-cn-n6w1r7nz****\\",\\n      \\"PackConfig\\": {\\n        \\"PackBasicThre\\": 20,\\n        \\"BindIpCount\\": 0,\\n        \\"PackAdvThre\\": 300,\\n        \\"NormalBandwidth\\": 200,\\n        \\"IpBasicThre\\": 20,\\n        \\"IpAdvanceThre\\": 300,\\n        \\"IpSpec\\": 100,\\n        \\"Bandwidth\\": 2\\n      }\\n    }\\n  ]\\n}","errorExample":"{\\n \\"InstanceSpecs\\": [\\n   {\\n     \\"Region\\": \\"cn-hangzhou\\",\\n     \\"InstanceId\\": \\"ddosbgp-cn-x1\\",\\n     \\"AvailableDeleteBlackholeCount\\": 100,\\n     \\"PackConfig\\": {\\n       \\"IpBasicThre\\": 20,\\n       \\"BindIpCount\\": 0,\\n       \\"PackBasicThre\\": 20,\\n       \\"IpAdvanceThre\\": 100,\\n       \\"IpSpec\\": 100,\\n       \\"PackAdvThre\\": 101\\n     }\\n   }\\n ],\\n \\"RequestId\\": \\"D8D786F2-2008-4280-B9AB-8E6C4E8C2A16\\"\\n}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<DescribeInstanceSpecsResponse>\\n\\t<RequestId>5840AB9F-1419-4620-807D-5EA476090247</RequestId>\\n\\t<InstanceSpecs>\\n\\t\\t<TotalDefenseTimes>2</TotalDefenseTimes>\\n\\t\\t<IsFullDefenseMode>1</IsFullDefenseMode>\\n\\t\\t<InstanceId>ddosbgp-cn-n6w1r7nz****</InstanceId>\\n\\t\\t<AvailableDefenseTimes>2</AvailableDefenseTimes>\\n\\t\\t<Region>cn-hangzhou</Region>\\n\\t\\t<AvailableDeleteBlackholeCount>100</AvailableDeleteBlackholeCount>\\n\\t\\t<PackConfig>\\n\\t\\t\\t<PackAdvThre>300</PackAdvThre>\\n\\t\\t\\t<IpSpec>100</IpSpec>\\n\\t\\t\\t<NormalBandwidth>200</NormalBandwidth>\\n\\t\\t\\t<BindIpCount>0</BindIpCount>\\n\\t\\t\\t<IpAdvanceThre>300</IpAdvanceThre>\\n\\t\\t\\t<PackBasicThre>20</PackBasicThre>\\n\\t\\t\\t<IpBasicThre>20</IpBasicThre>\\n\\t\\t</PackConfig>\\n\\t</InstanceSpecs>\\n</DescribeInstanceSpecsResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<DescribeInstanceSpecsResponse>\\n   <InstanceSpecs>\\n       <InstanceSpec>\\n           <Region>cn-hangzhou</Region>\\n           <InstanceId>ddosbgp-cn-x1</InstanceId>\\n           <AvailableDeleteBlackholeCount>100</AvailableDeleteBlackholeCount>\\n           <PackConfig>\\n               <IpBasicThre>20</IpBasicThre>\\n               <BindIpCount>0</BindIpCount>\\n               <PackBasicThre>20</PackBasicThre>\\n               <IpAdvanceThre>101</IpAdvanceThre>\\n               <IpSpec>100</IpSpec>\\n               <PackAdvThre>101</PackAdvThre>\\n           </PackConfig>\\n       </InstanceSpec>\\n   </InstanceSpecs>\\n   <RequestId>CEB7F4F5-1DA8-41ED-A9C4-E0F0033E9E1F</RequestId>\\n</DescribeInstanceSpecsResponse>"}]',
            'title' => '查询防护包的规格信息',
            'summary' => '查询指定的DDoS原生防护企业版实例的规格信息。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeExcpetionCount' => [
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
                'operationType' => 'get',
                'abilityTreeCode' => '105757',
                'abilityTreeNodes' => [
                    'FEATUREddosL8I8F2',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域ID。',
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
                            'ExceptionIpCount' => [
                                'description' => '受保护公网IP资产（云服务器ECS实例、负载均衡SLB实例、弹性公网IP实例等）中，状态异常的IP（例如，处于黑洞中等）的数量。'."\n",
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ExpireTimeCount' => [
                                'description' => '即将到期（剩余有效期不足7天）的DDoS原生防护实例的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '4B45279A-B1BE-5EEE-87CA-58AF4183EA58',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ExceptionIpCount\\": 0,\\n  \\"ExpireTimeCount\\": 1,\\n  \\"RequestId\\": \\"4B45279A-B1BE-5EEE-87CA-58AF4183EA58\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeExcpetionCountResponse>\\n    <ExceptionIpCount>0</ExceptionIpCount>\\n    <ExpireTimeCount>1</ExpireTimeCount>\\n    <RequestId>4B45279A-B1BE-5EEE-87CA-58AF4183EA58</RequestId>\\n</DescribeExcpetionCountResponse>","errorExample":""}]',
            'title' => '查询防护包异常信息',
            'summary' => '查询指定地域下，状态异常的公网IP资产的数量和即将过期的DDoS原生防护实例的数量。',
            'description' => '本接口用于查询指定地域下，受保护的公网IP资产（云服务器ECS实例、负载均衡SLB实例、弹性公网IP实例等）中状态异常的IP（例如，处于黑洞中等）的数量，以及即将过期（剩余有效期不足7个自然日）的DDoS原生防护实例的数量。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribePackIpList' => [
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
                'abilityTreeCode' => '105771',
                'abilityTreeNodes' => [
                    'FEATUREddosCIYF86',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页包含受保护IP的数量。最大值：50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS原生防护实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceList](~~118698~~)查询所有DDoS原生防护实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddosbgp-cn-n6w1r7nz****',
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的受保护IP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '47.98.XX.XX',
                    ],
                ],
                [
                    'name' => 'ProductName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的受保护IP所属云资产类型。取值：'."\n"
                            ."\n"
                            .'- **ECS**：表示云服务器ECS实例。'."\n"
                            .'- **SLB**：表示传统型负载均衡CLB（原SLB）实例。'."\n"
                            .'- **EIP**：表示弹性公网IP实例。因公网应用型负载均衡ALB实例使用弹性公网IP，您需要通过EIP实例查询ALB的公网IP。'."\n"
                            .'- **WAF**：表示Web应用防火墙实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ECS',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'MemberUid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '成员账号UID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '170858869679****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '本次请求的HTTP状态码。'."\n"
                                    ."\n"
                                    .'关于状态码的更多信息，请参见[公共参数](~~118841~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '4FD1578A-BD77-50B7-A969-45A374A7ED22',
                            ],
                            'Total' => [
                                'description' => '查询到的受保护IP的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Success' => [
                                'description' => '本次请求是否调用成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示调用成功。'."\n"
                                    .'- **false**：表示调用失败。 ',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'IpList' => [
                                'description' => '受DDoS原生防护实例保护的IP列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => 'IP的当前状态。取值：'."\n"
                                                ."\n"
                                                .'- **normal**：表示正常（未受攻击）。'."\n"
                                                .'- **hole_begin**：表示正处于黑洞状态。',
                                            'type' => 'string',
                                            'example' => 'normal',
                                        ],
                                        'Ip' => [
                                            'description' => 'IP地址。',
                                            'type' => 'string',
                                            'example' => '47.98.XX.XX',
                                        ],
                                        'Remark' => [
                                            'description' => 'IP所属云资产（例如，ECS实例、SLB实例等）的备注。'."\n"
                                                ."\n"
                                                .'> 如果云资产无备注，则不返回该参数。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'Product' => [
                                            'description' => 'IP所属云资产的类型。取值：'."\n"
                                                ."\n"
                                                .'- **ECS**：表示云服务器ECS实例。'."\n"
                                                .'- **SLB**：表示传统型负载均衡CLB（原SLB）实例。'."\n"
                                                .'- **EIP**：表示弹性公网IP实例（包含应用型负载均衡ALB实例使用的弹性公网IP）。'."\n"
                                                .'- **WAF**：表示Web应用防火墙实例。',
                                            'type' => 'string',
                                            'example' => 'ECS',
                                        ],
                                        'Region' => [
                                            'description' => '受保护IP的所在地域。'."\n"
                                                .'>如果受保护IP所在地域和实例所在地域一致，则不返回该参数。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'MemberUid' => [
                                            'description' => '成员账号UID。',
                                            'type' => 'string',
                                            'example' => '170858869679****'."\n",
                                        ],
                                        'NsmStatus' => [
                                            'description' => '近源压制状态。取值：'."\n"
                                                .'- **1**：表示正在近源压制中'."\n"
                                                .'- **0**：表示未在近源压制中',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'NsmStartAt' => [
                                            'description' => '近源压制开始时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1715655000',
                                        ],
                                        'NsmExpireAt' => [
                                            'description' => '近源压制结束时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1715658000',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"4FD1578A-BD77-50B7-A969-45A374A7ED22\\",\\n  \\"Total\\": 1,\\n  \\"Success\\": true,\\n  \\"IpList\\": [\\n    {\\n      \\"Status\\": \\"normal\\",\\n      \\"Ip\\": \\"47.98.XX.XX\\",\\n      \\"Remark\\": \\"test\\",\\n      \\"Product\\": \\"ECS\\",\\n      \\"Region\\": \\"cn-hangzhou\\",\\n      \\"MemberUid\\": \\"170858869679****\\\\n\\",\\n      \\"NsmStatus\\": 0,\\n      \\"NsmStartAt\\": 1715655000,\\n      \\"NsmExpireAt\\": 1715658000\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribePackIpListResponse>\\n    <Code>200</Code>\\n    <RequestId>4FD1578A-BD77-50B7-A969-45A374A7ED22</RequestId>\\n    <Total>1</Total>\\n    <Success>true</Success>\\n    <IpList>\\n        <Status>normal</Status>\\n        <Ip>47.98.XX.XX</Ip>\\n        <Remark>test</Remark>\\n        <Product>ECS</Product>\\n    </IpList>\\n</DescribePackIpListResponse>","errorExample":""}]',
            'title' => '查询防护包的防护IP列表信息',
            'summary' => '查询单个DDoS原生防护实例的防护IP列表。',
            'description' => '本接口用于分页查询单个DDoS原生防护实例的防护IP列表，例如，IP地址、IP所属云资产类型、IP的当前状态（是否处于黑洞状态）等。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetSlsOpenStatus' => [
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
                'abilityTreeCode' => '105788',
                'abilityTreeNodes' => [
                    'FEATUREddosOYL225',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例所属地域ID。'."\n"
                            ."\n"
                            .'关于该参数的取值，请参见[地域和可用区](~~188196~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。'."\n"
                            ."\n"
                            .'关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SlsOpenStatus' => [
                                'description' => '当前阿里云账号是否已开通日志服务。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示已开通日志服务。'."\n"
                                    .'- **false**：表示未开通日志服务。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'D01666F5-541B-4C78-98A6-D29E02DAAC7C',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SlsOpenStatus\\": true,\\n  \\"RequestId\\": \\"D01666F5-541B-4C78-98A6-D29E02DAAC7C\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetSlsOpenStatusResponse>\\r\\n\\t<RequestId>D01666F5-541B-4C78-98A6-D29E02DAAC7C</RequestId>\\r\\n\\t<SlsOpenStatus>true</SlsOpenStatus>\\r\\n</GetSlsOpenStatusResponse>","errorExample":""}]',
            'title' => '获取 SLS 打开状态',
            'summary' => '查询阿里云日志服务的开通状态。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CheckGrant' => [
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
                'operationType' => 'none',
                'abilityTreeCode' => '105724',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'IsSlr',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护包授权是否检查SLR角色。取值：'."\n"
                            ."\n"
                            .'- **true**：表示检查SLR角色。'."\n"
                            .'- **false**：表示不检查SLR角色。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '授权状态。取值：'."\n"
                                    ."\n"
                                    .'- **1**：已授权DDoS原生防护获取公网IP资产（例如，ECS、SLB实例等）信息。'."\n"
                                    .'- **0**：未授权DDoS原生防护获取公网IP资产（例如，ECS、SLB实例等）信息。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'DB002CE5-5E6C-5F11-AE15-B525299A40F6',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": 1,\\n  \\"RequestId\\": \\"DB002CE5-5E6C-5F11-AE15-B525299A40F6\\"\\n}","errorExample":""},{"type":"xml","example":"<CheckGrantResponse>\\n    <Status>1</Status>\\n    <RequestId>DB002CE5-5E6C-5F11-AE15-B525299A40F6</RequestId>\\n</CheckGrantResponse>","errorExample":""}]',
            'title' => '检查防护包服务授权状态',
            'summary' => '检查防护包服务的授权状态，即是否授权防护包查询ECS服务器信息。',
            'description' => '本接口用于查询当前阿里云账号是否已授权DDoS原生防护服务获取账号拥有的公网IP资产（例如，云服务器ECS实例、负载均衡SLB实例、弹性公网IP实例等）信息。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DettachAssetGroupToInstance' => [
            'summary' => '删除资产组和防护包实例绑定关系。',
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
                'operationType' => 'delete',
                'abilityTreeCode' => '171778',
                'abilityTreeNodes' => [
                    'FEATUREddosUGI71K',
                    'FEATUREddosM4KVA0',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例所属地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除绑定的DDoS原生防护实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceList](~~118698~~)查询所有DDoS原生防护实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddosbgp-xxx',
                    ],
                ],
                [
                    'name' => 'AssetGroupList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '要删除的资产组信息。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Name' => [
                                    'description' => '资产组名称。对于WAF，指WAF的实例ID。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'waf_v2_public_cn-lbj382l****',
                                ],
                                'Type' => [
                                    'description' => '资产组类型。取值：'."\n"
                                        .'- **waf**：表示WAF资产。'."\n"
                                        .'- **ga**：表示GA资产。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'waf',
                                ],
                                'Region' => [
                                    'description' => '资产组所属的地域。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'cn-hangzhou',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'minItems' => 1,
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
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'E54BA258-9DE8-59BE-B7A8-DAD28E6E8DAF',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E54BA258-9DE8-59BE-B7A8-DAD28E6E8DAF\\"\\n}","type":"json"}]',
            'title' => '删除资产组和防护包实例绑定关系',
        ],
        'DescribeAssetGroupToInstance' => [
            'summary' => '查询资产组和防护包实例绑定关系。',
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
                'abilityTreeCode' => '171781',
                'abilityTreeNodes' => [
                    'FEATUREddosUGI71K',
                    'FEATUREddosM4KVA0',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS原生防护实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceList](~~118698~~)查询所有DDoS原生防护实例的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ddosbgp-cn-7212zaa5v***',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资产组名称。对于WAF，指WAF的实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'waf_v2_public_cn-lbj382l****',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资产组类型。取值：'."\n"
                            .'- **waf**：表示WAF资产。'."\n"
                            .'- **ga**：表示GA资产。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'waf',
                    ],
                ],
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资产实例所属的地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'MemberUid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资产组所属成员账号UID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '170858869679****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Total' => [
                                'description' => '总记录条数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'C73C59B9-9F5C-57FF-A394-13EC8FC3B2FF',
                            ],
                            'DataList' => [
                                'description' => '返回的信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'description' => 'DDoS原生防护实例ID。',
                                            'type' => 'string',
                                            'example' => 'ddosbgp-cn-7212zaa5v***'."\n",
                                        ],
                                        'Name' => [
                                            'description' => '资产组名称。',
                                            'type' => 'string',
                                            'example' => 'waf_v2_public_cn-lbj382l****',
                                        ],
                                        'Type' => [
                                            'description' => '资产组类型。',
                                            'type' => 'string',
                                            'example' => 'waf',
                                        ],
                                        'Region' => [
                                            'description' => '资产组所属的地域。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'MemberUid' => [
                                            'description' => '资产组所属成员账号UID。',
                                            'type' => 'string',
                                            'example' => '170858869679****'."\n",
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Total\\": 1,\\n  \\"RequestId\\": \\"C73C59B9-9F5C-57FF-A394-13EC8FC3B2FF\\",\\n  \\"DataList\\": [\\n    {\\n      \\"InstanceId\\": \\"ddosbgp-cn-7212zaa5v***\\\\n\\",\\n      \\"Name\\": \\"waf_v2_public_cn-lbj382l****\\",\\n      \\"Type\\": \\"waf\\",\\n      \\"Region\\": \\"cn-hangzhou\\",\\n      \\"MemberUid\\": \\"170858869679****\\\\n\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询资产组和防护包实例绑定关系',
        ],
        'AttachAssetGroupToInstance' => [
            'summary' => '创建资产组和防护包实例绑定关系。',
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
                'abilityTreeCode' => '171777',
                'abilityTreeNodes' => [
                    'FEATUREddosUGI71K',
                    'FEATUREddosM4KVA0',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS原生防护实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceList](~~118698~~)查询所有DDoS原生防护实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddosbgp-cn-n6w1r7nz****',
                    ],
                ],
                [
                    'name' => 'AssetGroupList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '要绑定的资产组信息。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Name' => [
                                    'description' => '要添加的资产实例ID。对于WAF，指WAFf的实例ID。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'waf-test-001',
                                ],
                                'Type' => [
                                    'description' => '资产组类型。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'waf',
                                ],
                                'Region' => [
                                    'description' => '资产实例所属的地域ID。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'cn-hangzhou',
                                ],
                                'MemberUid' => [
                                    'description' => '资产组所属成员账号UID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1743970208320***',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '52B49F64-5A36-5CE0-BD00-765792C26AA9',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"52B49F64-5A36-5CE0-BD00-765792C26AA9\\"\\n}","type":"json"}]',
            'title' => '创建资产组和防护包实例绑定关系',
        ],
        'DescribeAssetGroup' => [
            'summary' => '查询资产组和防护包实例绑定关系。',
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
                'abilityTreeCode' => '171788',
                'abilityTreeNodes' => [
                    'FEATUREddosUGI71K',
                    'FEATUREddosM4KVA0',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资产组名称。对于WAF，指WAF的实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'waf_v2_public_cn-lbj382l****',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资产组类型。取值：'."\n"
                            .'- **waf**：表示WAF资产。'."\n"
                            .'- **ga**：表示GA资产。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf',
                    ],
                ],
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资产实例所属的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Total' => [
                                'description' => '总数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '487EC0F7-8D14-504E-914E-3A1BC314B581',
                            ],
                            'AssetGroupList' => [
                                'description' => '要查询的资产组信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '资产组名称。',
                                            'type' => 'string',
                                            'example' => 'waf_v2_public_cn-lbj382l****',
                                        ],
                                        'Type' => [
                                            'description' => '资产组类型。',
                                            'type' => 'string',
                                            'example' => 'waf',
                                        ],
                                        'Region' => [
                                            'description' => '资产组所属的地域。',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Total\\": 2,\\n  \\"RequestId\\": \\"487EC0F7-8D14-504E-914E-3A1BC314B581\\",\\n  \\"AssetGroupList\\": [\\n    {\\n      \\"Name\\": \\"waf_v2_public_cn-lbj382l****\\",\\n      \\"Type\\": \\"waf\\",\\n      \\"Region\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询资产组信息',
        ],
        'AddIp' => [
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
                'abilityTreeCode' => '105719',
                'abilityTreeNodes' => [
                    'FEATUREddosCIYF86',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'IpList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要添加到原生防护企业版实例进行防护的IP地址列表。使用JSON数组转化的字符串格式表示。JSON数组中的每个元素是一个结构体，包含以下字段：'."\n"
                            ."\n"
                            .'- **ip**：String类型 | 必选 | 要添加的IP地址。'."\n"
                            ."\n"
                            .'    > IP地址必须是当前阿里云账号下的资产。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"ip":"1.XX.XX.1"},{"ip":"2.XX.XX.2"}]',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要操作的原生防护企业版实例ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceList](~~118698~~)查询所有原生防护企业版实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddosbgp-cn-npk1z7t9****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '原生防护企业版实例的地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '原生防护企业版实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。'."\n"
                            ."\n"
                            .'关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<AddIpResponse>\\r\\n    <RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\r\\n</AddIpResponse>","errorExample":""}]',
            'title' => '为DDoS防护包添加防护对象IP',
            'summary' => '为DDoS原生防护企业版实例添加防护对象IP。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteIp' => [
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
                'abilityTreeCode' => '105736',
                'abilityTreeNodes' => [
                    'FEATUREddosCIYF86',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'IpList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要从原生防护企业版实例的防护对象中移除的IP地址列表。使用JSON数组转化的字符串格式表示。JSON数组中的每个元素是一个结构体，包含以下字段：'."\n"
                            ."\n"
                            .'- **ip**：String类型 | 必选 | 要移除的IP地址。'."\n"
                            .'    '."\n"
                            .'    > IP地址必须已经在原生防护企业版实例的防护列表。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"ip":"1.XX.XX.1"},{"ip":"2.XX.XX.2"}]',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要操作的原生防护企业版实例ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceList](~~118698~~)查询所有原生防护企业版实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddosbgp-cn-npk1z7t9****',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '原生防护企业版实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。'."\n"
                            ."\n"
                            .'关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '原生防护企业版实例的地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域信息。',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"4C467B38-3910-447D-87BC-AC049166F216\\"\\n}"},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<DeleteIpResponse>\\n    <RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\n</DeleteIpResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<DeleteIpResponse>\\n    <RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\n</DeleteIpResponse>"}]',
            'title' => '删除防护IP',
            'summary' => '将被防护IP从防护包中移除，取消防护。',
            'description' => '被移除的IP将不再受到原生防护企业版实例的防护。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。'."\n",
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteBlackhole' => [
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
                'operationType' => 'delete',
                'abilityTreeCode' => '105732',
                'abilityTreeNodes' => [
                    'FEATUREddosCIYF86',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要解除黑洞状态的受保护IP。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribePackIpList](~~118701~~)查询所有受DDoS原生防护实例保护的IP资产及IP的防护状态（IP是否处于黑洞状态）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '47.89.XX.XX',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceList](~~118698~~)查询所有DDoS原生防护实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddosbgp-cn-n6w1r7nz****',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域ID。'."\n",
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteBlackholeResponse>\\n    <RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\n</DeleteBlackholeResponse>","errorExample":""}]',
            'title' => '为被防护IP解除黑洞状态',
            'summary' => '为单个受保护IP解除黑洞状态。',
            'description' => '本接口用于为单个受DDoS原生防护实例保护的IP解除黑洞状态。'."\n"
                ."\n"
                .'调用本接口前，您可以调用[DescribePackIpList](~~118701~~)查询所有受DDoS原生防护实例保护的IP资产的防护状态（IP是否处于黑洞状态）。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDdosEvent' => [
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
                'abilityTreeCode' => '105751',
                'abilityTreeNodes' => [
                    'FEATUREddos8TPB4T',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS攻击事件的开始时间。使用时间戳表示，单位：秒。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1633017600',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS攻击事件的结束时间。使用时间戳表示，单位：秒。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1638288000',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页包含DDoS攻击事件的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS原生防护实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceList](~~118698~~)查询所有DDoS原生防护实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddosbgp-cn-n6w1r7nz****',
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的被攻击IP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '47.89.XX.XX',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域ID。',
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
                            'Total' => [
                                'description' => '查询到的DDoS攻击事件的总数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'F3B6C3F9-6B21-519D-B976-A1E14166F909',
                            ],
                            'Events' => [
                                'description' => 'DDoS攻击事件详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EndTime' => [
                                            'description' => '攻击结束时间。使用时间戳表示，单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1637554335',
                                        ],
                                        'Status' => [
                                            'description' => '攻击事件的当前状态。取值：'."\n"
                                                ."\n"
                                                .'- **hole_begin**：表示被攻击IP正处于黑洞状态。'."\n"
                                                .'- **hole_end**：表示被攻击IP已从黑洞状态中解除。'."\n"
                                                .'- **defense_begin**：表示正在清洗攻击流量。'."\n"
                                                .'- **defense_end**：表示已结束攻击流量清洗。',
                                            'type' => 'string',
                                            'example' => 'defense_end',
                                        ],
                                        'StartTime' => [
                                            'description' => '攻击结束时间。使用时间戳表示，单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1637554034',
                                        ],
                                        'Mbps' => [
                                            'description' => '攻击开始时刻的请求流量大小。单位：Mbps。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'Ip' => [
                                            'description' => '被攻击的IP。',
                                            'type' => 'string',
                                            'example' => '47.89.XX.XX',
                                        ],
                                        'Pps' => [
                                            'description' => '攻击开始时刻的报文数量大小。单位：pps',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '456',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Total\\": 1,\\n  \\"RequestId\\": \\"F3B6C3F9-6B21-519D-B976-A1E14166F909\\",\\n  \\"Events\\": [\\n    {\\n      \\"EndTime\\": 1637554335,\\n      \\"Status\\": \\"defense_end\\",\\n      \\"StartTime\\": 1637554034,\\n      \\"Mbps\\": 0,\\n      \\"Ip\\": \\"47.89.XX.XX\\",\\n      \\"Pps\\": 456\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDdosEventResponse>\\n    <Total>1</Total>\\n    <RequestId>F3B6C3F9-6B21-519D-B976-A1E14166F909</RequestId>\\n    <Events>\\n        <EndTime>1637554335</EndTime>\\n        <Status>defense_end</Status>\\n        <StartTime>1637554034</StartTime>\\n        <Mbps>0</Mbps>\\n        <Ip>47.89.XX.XX</Ip>\\n        <Pps>456</Pps>\\n    </Events>\\n</DescribeDdosEventResponse>","errorExample":""}]',
            'title' => '查看指定防护包上的DDoS事件',
            'summary' => '查询单个DDoS原生防护实例上发生的DDoS攻击事件详情。',
            'description' => '本接口用于分页查询单个DDoS原生防护实例上发生的DDoS攻击事件详情，例如，攻击起止时间、被攻击IP、事件状态等。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeOpEntities' => [
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
                'abilityTreeCode' => '105769',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。'."\n"
                            .'                           ',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页包含操作日志的数量。最大值：50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置开始时间，查询在**StartTime**后产生的操作日志。使用时间戳表示，单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1609430400000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置结束时间，查询在**EndTime**前产生的操作日志。使用时间戳表示，单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1640880000000',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置操作日志的排序字段。取值固定为**opdate**，表示按照操作时间排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'opdate',
                    ],
                ],
                [
                    'name' => 'OrderDir',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置操作日志的排序方式。取值：'."\n"
                            ."\n"
                            .'- **ASC**：表示按照正序排序。'."\n"
                            .'- **DESC**：表示按照倒序排序。'."\n"
                            ."\n"
                            .'默认：**DESC**',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ASC',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS原生防护实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceList](~~118698~~)查询所有DDoS原生防护实例的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ddosbgp-cn-n6w1r7nz****',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域ID。',
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
                            'TotalCount' => [
                                'description' => '查询到的操作日志的总数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '52C8ECB0-0B1A-4E66-A31C-B6A855120E82',
                            ],
                            'OpEntities' => [
                                'description' => '操作日志的详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EntityType' => [
                                            'description' => '操作对象类型。取值固定为**1**，表示DDoS原生防护实例。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'EntityObject' => [
                                            'description' => '操作对象，即DDoS原生防护实例的ID。',
                                            'type' => 'string',
                                            'example' => 'ddosbgp-cn-n6w1r7nz****',
                                        ],
                                        'OpAction' => [
                                            'description' => '操作类型。取值：'."\n"
                                                ."\n"
                                                .'- **3**：表示为DDoS原生防护实例添加防护IP。'."\n"
                                                .'- **4**：表示为DDoS原生防护实例解绑防护IP。'."\n"
                                                .'- **5**：表示为DDoS原生防护实例降配。'."\n"
                                                .'- **6**：表示解除黑洞。'."\n"
                                                .'- **7**：表示重置解除黑洞次数。'."\n"
                                                .'- **8**：表示恢复弹性防护。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '8',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '日志的创建时间。使用时间戳表示，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1635818114000',
                                        ],
                                        'OpAccount' => [
                                            'description' => '执行本次操作的阿里云账号ID。'."\n"
                                                ."\n"
                                                .'> 如果取值为**system**，表示本次操作由DDoS原生防护服务自动执行。',
                                            'type' => 'string',
                                            'example' => '171986973287****',
                                        ],
                                        'OpDesc' => [
                                            'description' => '操作详情。使用JSON结构体转换的字符串表示。JSON结构体包含以下字段：'."\n"
                                                ."\n"
                                                .'- **entity**：Object类型 | 表示操作对象。根据操作类型（**OpAction**）不同，**entity**包含的字段不同。具体说明如下：'."\n"
                                                ."\n"
                                                .'    - **OpAction**为**3**（表示添加防护IP）时，**entity**包含以下字段：'."\n"
                                                .'        - **ips**：Array类型 | 表示绑定到原生防护实例防护的公网IP资产列表。'."\n"
                                                ."\n"
                                                .'    - **OpAction**为**4**（表示解绑防护IP）时，**entity**包含以下字段：'."\n"
                                                .'        - **ips**：Array类型 | 表示从原生防护实例解除防护的公网IP资产列表。'."\n"
                                                ."\n"
                                                .'    - **OpAction**为**5**（表示实例降配）时，**entity**包含以下字段：'."\n"
                                                .'        - **baseBandwidth**：Integer类型 | 表示基础防护带宽，单位：Gbps。'."\n"
                                                .'        - **elasticBandwidth**：Integer类型 | 表示弹性防护带宽，单位：Gbps。'."\n"
                                                .'        - **opSource**：Integer类型 | 操作来源，取值固定为**1**（表示由DDoS原生防护服务自动执行本次操作）。'."\n"
                                                ."\n"
                                                .'    - **OpAction**为**6**（表示解除黑洞）时，**entity**包含以下字段：'."\n"
                                                .'        - **ips**：Array类型 | 表示解除黑洞状态的公网IP资产列表。'."\n"
                                                ."\n"
                                                .'    - **OpAction**为**7**（表示重置解除黑洞次数）时，**entity**为空。'."\n"
                                                ."\n"
                                                .'    - **OpAction**为**8**（表示实恢复弹性防护）时，**entity**包含以下字段：'."\n"
                                                .'        - **baseBandwidth**：Integer类型 | 表示基础防护带宽，单位：Gbps。'."\n"
                                                .'        - **elasticBandwidth**：Integer类型 | 表示弹性防护带宽，单位：Gbps。'."\n",
                                            'type' => 'string',
                                            'example' => '{"entity":{"baseBandwidth":20,"elasticBandwidth":20}}',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"52C8ECB0-0B1A-4E66-A31C-B6A855120E82\\",\\n  \\"OpEntities\\": [\\n    {\\n      \\"EntityType\\": 1,\\n      \\"EntityObject\\": \\"ddosbgp-cn-n6w1r7nz****\\",\\n      \\"OpAction\\": 8,\\n      \\"GmtCreate\\": 1635818114000,\\n      \\"OpAccount\\": \\"171986973287****\\",\\n      \\"OpDesc\\": \\"{\\\\\\"entity\\\\\\":{\\\\\\"baseBandwidth\\\\\\":20,\\\\\\"elasticBandwidth\\\\\\":20}}\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeOpEntitiesResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>52C8ECB0-0B1A-4E66-A31C-B6A855120E82</RequestId>\\n    <OpEntities>\\n        <EntityType>1</EntityType>\\n        <EntityObject>ddosbgp-cn-n6w1r7nz****</EntityObject>\\n        <OpAction>8</OpAction>\\n        <GmtCreate>1635818114000</GmtCreate>\\n        <OpAccount>171986973287****</OpAccount>\\n        <OpDesc>{\\"entity\\":{\\"baseBandwidth\\":20,\\"elasticBandwidth\\":20}}</OpDesc>\\n    </OpEntities>\\n</DescribeOpEntitiesResponse>","errorExample":""}]',
            'title' => '查询用户的操作日志',
            'summary' => '查询DDoS原生防护的操作日志。',
            'description' => '本接口用于分页查询DDoS原生防护的操作日志。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeTraffic' => [
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
                'abilityTreeCode' => '105781',
                'abilityTreeNodes' => [
                    'FEATUREddos8TPB4T',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS原生防护实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceList](~~118698~~)查询所有DDoS原生防护实例的ID。'."\n"
                            ."\n\n"
                            .'如果此处设置的实例用于代播防护，您必须设置请求参数**Interval**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ddosbgp-cn-n6w203qg****',
                    ],
                ],
                [
                    'name' => 'Ipnet',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的代播网段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '111.XX.XX.0/24',
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产。不设置该参数表示查询DDoS原生防护实例防护的所有公网IP资产的流量统计数据。'."\n"
                            ."\n"
                            .'> 公网IP资产必须已经添加为DDoS原生防护实例的防护对象。您可以调用[DescribePackIpList](~~118701~~)查询DDoS原生防护实例的所有防护对象。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '39.XX.XX.96',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。使用时间戳格式，单位：秒。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1619798400',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。使用时间戳格式，单位：秒。'."\n"
                            ."\n"
                            .'不设置该参数表示以当前时间作为查询结束时间。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1563445054',
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置流量统计的时间间隔，单位：秒，表示将每多少秒时间段作为一个区间，统计该区间内的流量数据。默认值为**5**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'FlowType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的流量统计数据的类型。取值：'."\n"
                            ."\n"
                            .'- **max**：表示统计时间区间内的流量峰值。'."\n"
                            .'- **avg**：表示统计时间区间内的流量均值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'max',
                        'default' => 'max',
                        'enum' => [
                            'all',
                            'avg',
                            'max',
                        ],
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例所属地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域ID。',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '6A507DC8-F657-4C13-84E2-D1D1B9400753',
                            ],
                            'FlowList' => [
                                'description' => '查询到的流量统计数据。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Time' => [
                                            'description' => '流量统计时间。使用时间戳表示，单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1620951900',
                                        ],
                                        'FlowType' => [
                                            'description' => '流量统计数据的类型。取值：'."\n"
                                                ."\n"
                                                .'- **max**：表示统计时间区间内的流量峰值。'."\n"
                                                .'- **avg**：表示统计时间区间内的流量均值。',
                                            'type' => 'string',
                                            'example' => 'max',
                                        ],
                                        'AttackPps' => [
                                            'description' => '攻击流量的包转发率，单位：pps。'."\n"
                                                .'> 仅在有攻击流量时，返回该数据。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'Name' => [
                                            'description' => '该次流量统计的ID。',
                                            'type' => 'string',
                                            'example' => '8e33f19e-5644-11eb-b5c1-d89d67182200',
                                        ],
                                        'Pps' => [
                                            'description' => '总流量的包转发率，单位：pps。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '274',
                                        ],
                                        'Kbps' => [
                                            'description' => '总流量的宽带速率，单位：Kbps。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '417',
                                        ],
                                        'AttackBps' => [
                                            'description' => '攻击流量的宽带速率，单位：bps。'."\n"
                                                ."\n"
                                                .'> 仅在有攻击流量时，返回该数据。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6A507DC8-F657-4C13-84E2-D1D1B9400753\\",\\n  \\"FlowList\\": [\\n    {\\n      \\"Time\\": 1620951900,\\n      \\"FlowType\\": \\"max\\",\\n      \\"AttackPps\\": 0,\\n      \\"Name\\": \\"8e33f19e-5644-11eb-b5c1-d89d67182200\\",\\n      \\"Pps\\": 274,\\n      \\"Kbps\\": 417,\\n      \\"AttackBps\\": 0\\n    }\\n  ]\\n}","errorExample":"{\\n \\"RequestId\\": \\"6A507DC8-F657-4C13-84E2-D1D1B9400753\\",\\n \\"FlowList\\": [\\n        {\\n            \\"Name\\": \\"73765106-54e7-11e9-aab0-d89d67182200\\",\\n            \\"Pps\\": 25,\\n            \\"Time\\": 1560855000,\\n            \\"FlowType\\": \\"max\\",\\n            \\"Kbps\\": 17\\n        },\\n        {\\n            \\"Name\\": \\"73765106-54e7-11e9-aab0-d89d67182200\\",\\n            \\"Pps\\": 9,\\n            \\"Time\\": 1560857000,\\n            \\"FlowType\\": \\"max\\",\\n            \\"Kbps\\": 8\\n        }\\n ]\\n}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<DescribeTrafficResponse>\\n\\t<FlowList>\\n\\t\\t<Pps>274</Pps>\\n\\t\\t<Kbps>417</Kbps>\\n\\t\\t<FlowType>max</FlowType>\\n\\t\\t<Time>1620890570</Time>\\n\\t\\t<Name>8e33f19e-5644-11eb-b5c1-d89d67182200</Name>\\n\\t</FlowList>\\n\\t<FlowList>\\n\\t\\t<Pps>10</Pps>\\n\\t\\t<Kbps>62</Kbps>\\n\\t\\t<FlowType>max</FlowType>\\n\\t\\t<Time>1620951900</Time>\\n\\t\\t<Name>8e33f19e-5644-11eb-b5c1-d89d67182200</Name>\\n\\t</FlowList>\\n\\t<RequestId>3986BADC-F6F7-4874-BF71-E5306BABBE75</RequestId>\\n</DescribeTrafficResponse>\\n","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<DescribeTraffic>\\n\\t<RequestId>6A507DC8-F657-4C13-84E2-D1D1B9400753</RequestId>\\n\\t<FlowList>\\n\\t\\t<Name>73765106-54e7-11e9-aab0-d89d67182200</Name>\\n\\t\\t<Pps>25</Pps>\\n\\t\\t<Time>1560855000</Time>\\n\\t\\t<FlowType>max</FlowType>\\n\\t\\t<Kbps>17</Kbps>\\n\\t</FlowList>\\n\\t<FlowList>\\n\\t\\t<Name>73765106-54e7-11e9-aab0-d89d67182200</Name>\\n\\t\\t<Pps>9</Pps>\\n\\t\\t<Time>1560857000</Time>\\n\\t\\t<FlowType>max</FlowType>\\n\\t\\t<Kbps>8</Kbps>\\n\\t</FlowList>\\n</DescribeTraffic>"}]',
            'title' => '查看指定防护包上的流量情况',
            'summary' => '查询指定时间段内某个DDoS原生防护实例的流量统计数据。',
            'description' => '本接口用于查询指定时间范围内单个DDoS原生防护实例的流量统计数据。'."\n"
                ."\n"
                .'> 调用本接口时，您必须设置**InstanceId**参数，指定要查询的DDoS原生防护实例。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为1次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListOpenedAccessLogInstances' => [
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
                'abilityTreeCode' => '105794',
                'abilityTreeNodes' => [
                    'FEATUREddosOYL225',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。'."\n"
                            ."\n"
                            .'关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，返回第几页数据。默认值为**1**，表示返回第1页数据。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，每页包含结果的数量。默认值为**10**，表示每页包含10个结果。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '查询到的结果的数量，即已开启日志分析的DDoS原生防护实例的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '4DB64811-70A1-41C9-A0CE-CD8B260ED551',
                            ],
                            'SlsConfigStatus' => [
                                'description' => 'DDoS原生防护实例的日志分析配置。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'description' => 'DDoS原生防护的实例ID。',
                                            'type' => 'string',
                                            'example' => 'ddosbgp-cn-m7r1zce2****',
                                        ],
                                        'Enable' => [
                                            'description' => '该实例是否已开启日志分析。取值：'."\n"
                                                ."\n"
                                                .'- **true**：表示已开启。'."\n"
                                                .'- **false**：表示未开启。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"4DB64811-70A1-41C9-A0CE-CD8B260ED551\\",\\n  \\"SlsConfigStatus\\": [\\n    {\\n      \\"InstanceId\\": \\"ddosbgp-cn-m7r1zce2****\\",\\n      \\"Enable\\": true\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListOpenedAccessLogInstancesResponse>\\r\\n\\t<TotalCount>1</TotalCount>\\r\\n\\t<RequestId>4DB64811-70A1-41C9-A0CE-CD8B260ED551</RequestId>\\r\\n\\t<SlsConfigStatus>\\r\\n\\t\\t<InstanceId>ddosbgp-cn-m7r1zce2****</InstanceId>\\r\\n\\t\\t<Enable>true</Enable>\\r\\n\\t</SlsConfigStatus>\\r\\n</ListOpenedAccessLogInstancesResponse>","errorExample":""}]',
            'title' => '列出打开的访问日志实例',
            'summary' => '查询已开启日志分析的DDoS原生防护实例。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeOnDemandDdosEvent' => [
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
                'abilityTreeCode' => '105766',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS攻击事件的开始时间。使用时间戳表示，单位：秒。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1557305044',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS攻击事件的结束时间。使用时间戳表示，单位：秒。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1557909844',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页包含事件的数量。最大值为**50**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的代播实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeOnDemandInstance](~~152120~~)查询代播实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddosbgp-cn-n6w1r7nz****',
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的代播IP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.XX.XX.1',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的代播实例的地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域ID。',
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
                            'Total' => [
                                'description' => '查询到的DDoS攻击事件的总数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '6A507DC8-F657-4C13-84E2-D1D1B9400753',
                            ],
                            'Events' => [
                                'description' => 'DDoS攻击事件详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EndTime' => [
                                            'description' => '攻击结束时间。使用时间戳表示，单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1557891306',
                                        ],
                                        'Status' => [
                                            'description' => '事件的当前状态。取值：'."\n"
                                                ."\n"
                                                .'- **hole_begin**：表示黑洞中。'."\n"
                                                .'- **hole_end**：表示黑洞结束。'."\n"
                                                .'- **defense_begin**：表示清洗中。'."\n"
                                                .'- **defense_end**：表示清洗结束。',
                                            'type' => 'string',
                                            'example' => 'defense_end',
                                        ],
                                        'StartTime' => [
                                            'description' => '攻击开始时间。使用时间戳表示，单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1557889506',
                                        ],
                                        'Mbps' => [
                                            'description' => '攻击流量大小。单位：Mbps。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '110000',
                                        ],
                                        'Ip' => [
                                            'description' => '被攻击的IP。',
                                            'type' => 'string',
                                            'example' => '192.XX.XX.1',
                                        ],
                                        'Pps' => [
                                            'description' => '攻击报文数量。单位：pps。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Total\\": 1,\\n  \\"RequestId\\": \\"6A507DC8-F657-4C13-84E2-D1D1B9400753\\",\\n  \\"Events\\": [\\n    {\\n      \\"EndTime\\": 1557891306,\\n      \\"Status\\": \\"defense_end\\",\\n      \\"StartTime\\": 1557889506,\\n      \\"Mbps\\": 110000,\\n      \\"Ip\\": \\"192.XX.XX.1\\",\\n      \\"Pps\\": 0\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeOnDemandDdosEventResponse>\\n    <Total>1</Total>\\n    <RequestId>6A507DC8-F657-4C13-84E2-D1D1B9400753</RequestId>\\n    <Events>\\n        <EndTime>1557891306</EndTime>\\n        <Status>defense_end</Status>\\n        <StartTime>1557889506</StartTime>\\n        <Mbps>110000</Mbps>\\n        <Ip>192.XX.XX.1</Ip>\\n        <Pps>0</Pps>\\n    </Events>\\n</DescribeOnDemandDdosEventResponse>","errorExample":""}]',
            'title' => '查询代播IP事件记录',
            'summary' => '查询DDoS防护代播IP上的DDoS事件记录。',
            'description' => '本接口用于分页查询DDoS防护代播IP上的DDoS攻击事件详情，例如，攻击起止事件、攻击流量大小、当前防护状态等。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CheckAccessLogAuth' => [
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
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '105722',
                'abilityTreeNodes' => [
                    'FEATUREddosOYL225',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例所属地域ID。'."\n"
                            ."\n"
                            .'关于该参数的取值，请参见[地域和可用区](~~188196~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。'."\n"
                            ."\n"
                            .'关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessLogAuth' => [
                                'description' => 'DDoS原生防护是否被授权访问阿里云日志服务。取值：'."\n"
                                    .'- **true**：表示已经获得授权。'."\n"
                                    .'- **false**：表示没有获得授权。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '864FE2F4-CB2E-4024-B9EF-D59FD08ABD41',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"AccessLogAuth\\": true,\\n  \\"RequestId\\": \\"864FE2F4-CB2E-4024-B9EF-D59FD08ABD41\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CheckAccessLogAuthResponse>\\r\\n\\t<RequestId>864FE2F4-CB2E-4024-B9EF-D59FD08ABD41</RequestId>\\r\\n\\t<AccessLogAuth>true</AccessLogAuth>\\r\\n</CheckAccessLogAuthResponse>","errorExample":""}]',
            'title' => '检查访问日志认证信息',
            'summary' => '查询DDoS原生防护是否被授权访问阿里云日志服务。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateSchedruleOnDemand' => [
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
                'abilityTreeCode' => '105731',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要操作的代播实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeOnDemandInstance](~~152120~~)查询所有代播实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddosbgp-cn-z2q1qzxb****',
                    ],
                ],
                [
                    'name' => 'RuleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度规则的名称。'."\n"
                            ."\n"
                            .'支持使用英文小写字母、数字、短划线（-）和下划线（_），不超过32个字符。建议您使用代播实例的ID作为调度规则名称，例如，`ddosbgp-cn-z2q1qzxb****`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddosbgp-cn-z2q1qzxb****',
                    ],
                ],
                [
                    'name' => 'RuleConditionMbps',
                    'in' => 'query',
                    'schema' => [
                        'description' => '入方向带宽阈值，单位：Mbps。最小值：**100**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'RuleConditionKpps',
                    'in' => 'query',
                    'schema' => [
                        'description' => '入方向报文数阈值，单位：Kpps。最小值：**10**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'RuleConditionCnt',
                    'in' => 'query',
                    'schema' => [
                        'description' => '从互联网访问IDC的网络带宽或者报文数量连续超过阈值多少次时，将触发调度规则并开启代播防护。'."\n"
                            ."\n"
                            .'> 带宽阈值通过**RuleConditionMbps**参数设置，报文数阈值通过**RuleConditionKpps**参数设置。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'RuleAction',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度动作。取值固定为**declare**，表示宣告路由。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'declare',
                    ],
                ],
                [
                    'name' => 'RuleSwitch',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度规则的开关状态。取值：'."\n"
                            ."\n"
                            .'- **on**：表示开启。'."\n"
                            .'- **off**：表示关闭。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'on',
                    ],
                ],
                [
                    'name' => 'RuleUndoMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度规则的停止方式。取值：'."\n"
                            ."\n"
                            .'- **auto**：表示自动停止调度。'."\n"
                            .'- **manual**：表示手动停止调度。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'auto',
                    ],
                ],
                [
                    'name' => 'RuleUndoBeginTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动停止调度的开始时间。使用24小时制表示，格式：`hh:mm`。'."\n"
                            ."\n"
                            .'当系统检测到攻击停止后，会在此处设置的时间开始停止代播防护。建议您将该时间设置为业务低峰期。'."\n"
                            ."\n"
                            .'> 该参数仅在使用自动停止调度（**RuleUndoMode**设置为**auto**）时生效。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '03:00',
                    ],
                ],
                [
                    'name' => 'RuleUndoEndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动停止调度的结束时间。使用24小时制表示，格式：`hh:mm`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '03:05',
                    ],
                ],
                [
                    'name' => 'TimeZone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动停止调度时间对应的时区。使用格林威治时间表示，格式：`GMT-hh:mm`。'."\n"
                            ."\n"
                            .'例如，`GMT-08:00`表示东八区。'."\n"
                            ."\n"
                            .'> 该参数仅在使用自动停止调度（**RuleUndoMode**设置为**auto**）时生效。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'GMT-08:00',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '代播实例的地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-zhangjiakou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'BD06F539-2FBE-450D-9391-7EFF787128F5',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BD06F539-2FBE-450D-9391-7EFF787128F5\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateSchedruleOnDemandResponse>\\r\\n\\t<RequestId>BD06F539-2FBE-450D-9391-7EFF787128F5</RequestId>\\r\\n</CreateSchedruleOnDemandResponse>","errorExample":""}]',
            'title' => '为代播实例创建一条调度规则',
            'summary' => '为代播实例创建一条调度规则。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteSchedruleOnDemand' => [
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
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '105738',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要操作的代播实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeOnDemandInstance](~~152120~~)查询所有代播实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddosbgp-cn-z2q1qzxb****',
                    ],
                ],
                [
                    'name' => 'RuleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的调度规则的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testrule',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '代播实例的地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-zhangjiakou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'BD06F539-2FBE-450D-9391-7EFF787128F5',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BD06F539-2FBE-450D-9391-7EFF787128F5\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteSchedruleOnDemandResponse>\\r\\n\\t<RequestId>BD06F539-2FBE-450D-9391-7EFF787128F5</RequestId>\\r\\n</DeleteSchedruleOnDemandResponse>","errorExample":""}]',
            'title' => '删除代播实例的调度规则',
            'summary' => '删除代播实例的调度规则。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SetInstanceModeOnDemand' => [
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
                'abilityTreeCode' => '105809',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Mode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置代播实例的调度模式。取值：'."\n"
                            ."\n"
                            .'- **manual**：表示手动调度。'."\n"
                            .'- **netflow-auto**：表示自动调度。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'netflow-auto',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '代播实例的地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-zhangjiakou',
                    ],
                ],
                [
                    'name' => 'InstanceIdList',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要操作的代播实例的ID列表。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeOnDemandInstance](~~152120~~)查询所有代播实例的ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '实例ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddosbgp-cn-z2q1qzxb****',
                        ],
                        'required' => true,
                        'example' => 'ddosbgp-cn-z2q1qzxb****',
                        'maxItems' => 500,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'BD06F539-2FBE-450D-9391-7EFF787128F5',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BD06F539-2FBE-450D-9391-7EFF787128F5\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<SetInstanceModeOnDemandREsponse>\\r\\n\\t<RequestId>BD06F539-2FBE-450D-9391-7EFF787128F5</RequestId>\\r\\n</SetInstanceModeOnDemandREsponse>","errorExample":""}]',
            'title' => '设置代播实例的调度模式',
            'summary' => '设置代播实例的调度模式。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeOnDemandInstanceStatus' => [
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
                'abilityTreeCode' => '105768',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '代播实例的地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-zhangjiakou',
                    ],
                ],
                [
                    'name' => 'InstanceIdList',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的代播实例的ID列表。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeOnDemandInstance](~~152120~~)查询所有代播实例的ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddosbgp-cn-z2q1qzxb****',
                        ],
                        'required' => true,
                        'example' => 'ddosbgp-cn-z2q1qzxb****',
                        'maxItems' => 500,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'CC49FF51-612F-429B-AB1E-374B3F115396',
                            ],
                            'Instances' => [
                                'description' => '代播实例的详细信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'UserId' => [
                                            'description' => '阿里云账号ID。',
                                            'type' => 'string',
                                            'example' => '171986973287****',
                                        ],
                                        'Mode' => [
                                            'description' => '代播防护的启动模式。取值：'."\n"
                                                ."\n"
                                                .'- **manual**：表示手动启动。'."\n"
                                                .'- **netflow-auto**：表示通过NetFlow网络流量监测自动启动。',
                                            'type' => 'string',
                                            'example' => 'netflow-auto',
                                        ],
                                        'InstanceId' => [
                                            'description' => '代播实例的ID。'."\n"
                                                ."\n"
                                                .'> 该参数仅在返回多个代播实例时才会返回。目前仅返回一个代播实例，该参数不会返回。',
                                            'type' => 'string',
                                            'example' => 'ddosbgp-cn-z2q1qzxb****',
                                        ],
                                        'Declared' => [
                                            'description' => '海外IDC的路由宣告状态信息。以JSON数组格式转化成字符串表示，JSON数组中的每个结构体包含以下参数：'."\n"
                                                ."\n"
                                                .'- **region**：String类型 | 海外IDC代码。关于IDC代码对应的地域信息，请参见该表格下方的**海外IDC代码**说明。'."\n"
                                                .'- **declared**：String类型 | 该IDC是否宣告路由，取值：**0**（表示未宣告） | **1**（表示宣告）。',
                                            'type' => 'string',
                                            'example' => '[{\\"region\\":\\"oe24\\",\\"declared\\":0},{\\"region\\":\\"oe26\\",\\"declared\\":0},{\\"region\\":\\"oe28\\",\\"declared\\":0},{\\"region\\":\\"oi39\\",\\"declared\\":0},{\\"region\\":\\"us50\\",\\"declared\\":0},{\\"region\\":\\"jp141\\",\\"declared\\":0}]',
                                        ],
                                        'RegistedAs' => [
                                            'description' => '自治系统AS（Autonomous System）号码。目前取值固定为**0**，表示暂未启用。',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'Net' => [
                                            'description' => '代播网段。',
                                            'type' => 'string',
                                            'example' => '47.***.***.0/24',
                                        ],
                                        'Desc' => [
                                            'description' => '代播实例的描述。'."\n"
                                                ."\n"
                                                .'> 该参数仅在返回多个代播实例时才会返回。目前仅返回一个代播实例，该参数不会返回。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CC49FF51-612F-429B-AB1E-374B3F115396\\",\\n  \\"Instances\\": [\\n    {\\n      \\"UserId\\": \\"171986973287****\\",\\n      \\"Mode\\": \\"netflow-auto\\",\\n      \\"InstanceId\\": \\"ddosbgp-cn-z2q1qzxb****\\",\\n      \\"Declared\\": \\"[{\\\\\\\\\\\\\\"region\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"oe24\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"declared\\\\\\\\\\\\\\":0},{\\\\\\\\\\\\\\"region\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"oe26\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"declared\\\\\\\\\\\\\\":0},{\\\\\\\\\\\\\\"region\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"oe28\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"declared\\\\\\\\\\\\\\":0},{\\\\\\\\\\\\\\"region\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"oi39\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"declared\\\\\\\\\\\\\\":0},{\\\\\\\\\\\\\\"region\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"us50\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"declared\\\\\\\\\\\\\\":0},{\\\\\\\\\\\\\\"region\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"jp141\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"declared\\\\\\\\\\\\\\":0}]\\",\\n      \\"RegistedAs\\": \\"0\\",\\n      \\"Net\\": \\"47.***.***.0/24\\",\\n      \\"Desc\\": \\"test\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<DescribeOnDemandInstanceStatusResponse>\\n\\t<Instances>\\n\\t\\t<UserId>171986973287****</UserId>\\n\\t\\t<Mode>netflow-auto</Mode>\\n\\t\\t<RegistedAs>0</RegistedAs>\\n\\t\\t<Net>47.***.***.0/24</Net>\\n\\t\\t<Declared>[{\\\\\\"region\\\\\\":\\\\\\"oe24\\\\\\",\\\\\\"declared\\\\\\":0},{\\\\\\"region\\\\\\":\\\\\\"oe26\\\\\\",\\\\\\"declared\\\\\\":0},{\\\\\\"region\\\\\\":\\\\\\"oe28\\\\\\",\\\\\\"declared\\\\\\":0},{\\\\\\"region\\\\\\":\\\\\\"oi39\\\\\\",\\\\\\"declared\\\\\\":0},{\\\\\\"region\\\\\\":\\\\\\"us50\\\\\\",\\\\\\"declared\\\\\\":0},{\\\\\\"region\\\\\\":\\\\\\"jp141\\\\\\",\\\\\\"declared\\\\\\":0}]</Declared>\\n\\t</Instances>\\n\\t<RequestId>CC49FF51-612F-429B-AB1E-374B3F115396</RequestId>\\n  </DescribeOnDemandInstanceStatusResponse>","errorExample":""}]',
            'title' => '查询代播实例的详细状态信息',
            'summary' => '查询代播实例的详细信息。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。'."\n",
            'responseParamsDescription' => '**海外IDC代码**'."\n"
                ."\n"
                .'下表描述了不同海外地域部署的代播防护IDC的代码。'."\n"
                ."\n"
                .'| 地域         | IDC代码                          |'."\n"
                .'|------------|--------------------------------|'."\n"
                .'| 美国（硅谷）     | oe24、oe25、oc27、ot7             |'."\n"
                .'| 美国（弗吉尼亚）   | us44\\-a、us44\\-b、us68、us50、us51 |'."\n"
                .'| 中国（香港）     | meg、oe26、hk45、hk71             |'."\n"
                .'| 新加坡        | oe28、og37、os30、sg94、sg52、sg113 |'."\n"
                .'| 澳大利亚（悉尼）   | au49、au67、au57、au58            |'."\n"
                .'| 德国（法兰克福）   | de46、de81、oe38、oi39            |'."\n"
                .'| 俄罗斯（莫斯科）   | ol31、ru85、ru66                 |'."\n"
                .'| 英国（伦敦）     | gb82、gb83、gb33、gb124           |'."\n"
                .'| 印度（孟买）     | in74、in75、in73、in123           |'."\n"
                .'| 日本（东京）     | jp59、jp42、jp43、jp138、jp141           |'."\n"
                .'| 马来西亚（吉隆坡）  | my86、my87、my88、my115           |'."\n"
                .'| 印度尼西亚（雅加达） | id56、id55、id35、id90            |',
            'extraInfo' => ' ',
        ],
        'QuerySchedruleOnDemand' => [
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
                'abilityTreeCode' => '105806',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的代播实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeOnDemandInstance](~~152120~~)查询所有代播实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddosbgp-cn-z2q1qzxb****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '代播实例的地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-zhangjiakou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '4A8F9980-5ACB-497F-9F15-48E9D6B29028',
                            ],
                            'InstanceId' => [
                                'description' => '代播实例的ID。',
                                'type' => 'string',
                                'example' => 'ddosbgp-cn-z2q1qzxb****',
                            ],
                            'UserId' => [
                                'description' => '阿里云账号ID。',
                                'type' => 'string',
                                'example' => '171986973287****',
                            ],
                            'RuleConfig' => [
                                'description' => '调度规则的配置信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'RuleSwitch' => [
                                            'description' => '调度规则的开关状态。取值：'."\n"
                                                ."\n"
                                                .'- **on**：表示开启。'."\n"
                                                .'- **off**：表示关闭。',
                                            'type' => 'string',
                                            'example' => 'on',
                                        ],
                                        'RuleConditionMbps' => [
                                            'description' => '入方向带宽阈值，单位：Mbps。最小值：**100**。',
                                            'type' => 'string',
                                            'example' => '100',
                                        ],
                                        'TimeZone' => [
                                            'description' => '自动停止调度时间对应的时区。使用格林威治时间表示，格式：`GMT-hh:mm`。'."\n"
                                                ."\n"
                                                .'例如，`GMT-08:00`表示东八区。'."\n"
                                                ."\n"
                                                .'> 该参数仅在使用自动停止调度（**RuleUndoMode**设置为**auto**）时生效。',
                                            'type' => 'string',
                                            'example' => 'GMT-08:00',
                                        ],
                                        'RuleAction' => [
                                            'description' => '调度动作。取值固定为**declare**，表示宣告路由。',
                                            'type' => 'string',
                                            'example' => 'declare',
                                        ],
                                        'RuleConditionKpps' => [
                                            'description' => '入方向报文数阈值，单位：Kpps。最小值：**10**。',
                                            'type' => 'string',
                                            'example' => '10',
                                        ],
                                        'RuleUndoMode' => [
                                            'description' => '调度规则的停止方式。取值：'."\n"
                                                ."\n"
                                                .'- **auto**：表示自动停止调度。'."\n"
                                                .'- **manual**：表示手动停止调度。',
                                            'type' => 'string',
                                            'example' => 'auto',
                                        ],
                                        'RuleUndoBeginTime' => [
                                            'description' => '自动停止调度的开始时间。使用24小时制表示，格式：`hh:mm`。'."\n"
                                                ."\n"
                                                .'当系统检测到攻击停止后，会在此处设置的时间开始停止代播防护。建议您将该时间设置为业务低峰期。'."\n"
                                                ."\n"
                                                .'> 该参数仅在使用自动停止调度（**RuleUndoMode**设置为**auto**）时生效。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => '03:00',
                                        ],
                                        'RuleConditionCnt' => [
                                            'description' => '从互联网访问IDC的网络带宽或者报文数量连续超过阈值多少次时，将触发调度规则并开启代播防护。'."\n"
                                                ."\n"
                                                .'> 带宽阈值通过**RuleConditionMbps**参数设置，报文数阈值通过**RuleConditionKpps**参数设置。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'RuleUndoEndTime' => [
                                            'description' => '自动停止调度的结束时间。使用24小时制表示，格式：`hh:mm`。',
                                            'type' => 'string',
                                            'example' => '03:05',
                                        ],
                                        'RuleName' => [
                                            'description' => '调度规则的名称。',
                                            'type' => 'string',
                                            'example' => 'ddosbgp-cn-z2q1qzxb****',
                                        ],
                                    ],
                                ],
                            ],
                            'RuleStatus' => [
                                'description' => '调度规则的状态信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'RuleSchedStatus' => [
                                            'description' => '调度状态。取值：'."\n"
                                                ."\n"
                                                .'- **scheduled**：表示调度中。'."\n"
                                                .'- **unscheduled**：表示不在调度中。',
                                            'type' => 'string',
                                            'example' => 'unscheduled',
                                        ],
                                        'Net' => [
                                            'description' => '代播网段。',
                                            'type' => 'string',
                                            'example' => '47.***.***.0/24',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4A8F9980-5ACB-497F-9F15-48E9D6B29028\\",\\n  \\"InstanceId\\": \\"ddosbgp-cn-z2q1qzxb****\\",\\n  \\"UserId\\": \\"171986973287****\\",\\n  \\"RuleConfig\\": [\\n    {\\n      \\"RuleSwitch\\": \\"on\\",\\n      \\"RuleConditionMbps\\": \\"100\\",\\n      \\"TimeZone\\": \\"GMT-08:00\\",\\n      \\"RuleAction\\": \\"declare\\",\\n      \\"RuleConditionKpps\\": \\"10\\",\\n      \\"RuleUndoMode\\": \\"auto\\",\\n      \\"RuleUndoBeginTime\\": \\"03:00\\",\\n      \\"RuleConditionCnt\\": \\"3\\",\\n      \\"RuleUndoEndTime\\": \\"03:05\\",\\n      \\"RuleName\\": \\"ddosbgp-cn-z2q1qzxb****\\"\\n    }\\n  ],\\n  \\"RuleStatus\\": [\\n    {\\n      \\"RuleSchedStatus\\": \\"unscheduled\\",\\n      \\"Net\\": \\"47.***.***.0/24\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<QuerySchedruleOnDemandResponse>\\r\\n\\t<RequestId>4A8F9980-5ACB-497F-9F15-48E9D6B29028</RequestId>\\r\\n\\t<InstanceId>ddosbgp-cn-z2q1qzxb****</InstanceId>\\r\\n\\t<UserId>171986973287****</UserId>\\r\\n\\t<RuleStatus>\\r\\n\\t\\t<RuleSchedStatus>unscheduled</RuleSchedStatus>\\r\\n\\t\\t<Net>47.***.***.0/24</Net>\\r\\n\\t</RuleStatus>\\r\\n\\t<RuleConfig>\\r\\n\\t\\t<RuleUndoEndTime>03:05</RuleUndoEndTime>\\r\\n\\t\\t<RuleSwitch>on</RuleSwitch>\\r\\n\\t\\t<TimeZone>GMT-08:00</TimeZone>\\r\\n\\t\\t<RuleConditionCnt>3</RuleConditionCnt>\\r\\n\\t\\t<RuleAction>declare</RuleAction>\\r\\n\\t\\t<RuleConditionMbps>100</RuleConditionMbps>\\r\\n\\t\\t<RuleConditionKpps>10</RuleConditionKpps>\\r\\n\\t\\t<RuleUndoMode>auto</RuleUndoMode>\\r\\n\\t\\t<RuleName>ddosbgp-cn-z2q1qzxb****</RuleName>\\r\\n\\t\\t<RuleUndoBeginTime>03:00</RuleUndoBeginTime>\\r\\n\\t</RuleConfig>\\r\\n</QuerySchedruleOnDemandResponse>","errorExample":""}]',
            'title' => '查询代播实例的调度规则',
            'summary' => '查询代播实例的调度规则。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ConfigSchedruleOnDemand' => [
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
                'abilityTreeCode' => '105726',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要操作的代播实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeOnDemandInstance](~~152120~~)查询所有代播实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddosbgp-cn-z2q1qzxb****',
                    ],
                ],
                [
                    'name' => 'RuleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度规则的名称。'."\n"
                            ."\n"
                            .'支持使用英文小写字母、数字、短划线（-）和下划线（_），不超过32个字符。建议您使用代播实例的ID作为调度规则名称，例如，`ddosbgp-cn-z2q1qzxb****`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddosbgp-cn-z2q1qzxb****',
                    ],
                ],
                [
                    'name' => 'RuleConditionMbps',
                    'in' => 'query',
                    'schema' => [
                        'description' => '入方向带宽阈值，单位：Mbps。最小值：**100**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'RuleConditionKpps',
                    'in' => 'query',
                    'schema' => [
                        'description' => '入方向报文数阈值，单位：Kpps。最小值：**10**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'RuleConditionCnt',
                    'in' => 'query',
                    'schema' => [
                        'description' => '从互联网访问IDC的网络带宽或者报文数量连续超过阈值多少次时，将触发调度规则并开启代播防护。'."\n"
                            ."\n"
                            .'> 带宽阈值通过**RuleConditionMbps**参数设置，报文数阈值通过**RuleConditionKpps**参数设置。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'RuleAction',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度动作。取值固定为**declare**，表示宣告路由。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'declare',
                    ],
                ],
                [
                    'name' => 'RuleSwitch',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度规则的开关状态。取值：'."\n"
                            ."\n"
                            .'- **on**：表示开启。'."\n"
                            .'- **off**：表示关闭。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'on',
                    ],
                ],
                [
                    'name' => 'RuleUndoMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度规则的停止方式。取值：'."\n"
                            ."\n"
                            .'- **auto**：表示自动停止调度。'."\n"
                            .'- **manual**：表示手动停止调度。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'manual',
                    ],
                ],
                [
                    'name' => 'RuleUndoBeginTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动停止调度的开始时间。使用24小时制表示，格式：`hh:mm`。'."\n"
                            ."\n"
                            .'当系统检测到攻击停止后，会在此处设置的时间开始停止代播防护。建议您将该时间设置为业务低峰期。'."\n"
                            ."\n"
                            .'> 该参数仅在使用自动停止调度（**RuleUndoMode**设置为**auto**）时生效。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '03:00',
                    ],
                ],
                [
                    'name' => 'RuleUndoEndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动停止调度的结束时间。使用24小时制表示，格式：`hh:mm`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '03:05',
                    ],
                ],
                [
                    'name' => 'TimeZone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动停止调度时间对应的时区。使用格林威治时间表示，格式：`GMT-hh:mm`。'."\n"
                            ."\n"
                            .'例如，`GMT-08:00`表示东八区。'."\n"
                            ."\n"
                            .'> 该参数仅在使用自动停止调度（**RuleUndoMode**设置为**auto**）时生效。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'GMT-08:00',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '代播实例的地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-zhangjiakou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'BD06F539-2FBE-450D-9391-7EFF787128F5',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BD06F539-2FBE-450D-9391-7EFF787128F5\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ConfigSchedruleOnDemandResponse>\\r\\n\\t<RequestId>BD06F539-2FBE-450D-9391-7EFF787128F5</RequestId>\\r\\n</ConfigSchedruleOnDemandResponse>","errorExample":""}]',
            'title' => '修改代播实例的调度规则',
            'summary' => '修改代播实例的调度规则。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTagKeys' => [
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
                'abilityTreeCode' => '105795',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型，取值：**INSTANCE**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'INSTANCE',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页行数，最大值为**50**，默认值为**10**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '列表的页码，起始值为**1**，默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CurrentPage' => [
                                'description' => '列表的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '97935DF1-0289-4AA2-9DD1-72377838B16B',
                            ],
                            'PageSize' => [
                                'description' => '每页的行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'TotalCount' => [
                                'description' => '标签的总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '6',
                            ],
                            'TagKeys' => [
                                'description' => '标签信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'TagCount' => [
                                            'description' => '标签键下标签值的总数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'TagKey' => [
                                            'description' => '标签键。',
                                            'type' => 'string',
                                            'example' => 'a',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"97935DF1-0289-4AA2-9DD1-72377838B16B\\",\\n  \\"PageSize\\": 20,\\n  \\"TotalCount\\": 6,\\n  \\"TagKeys\\": [\\n    {\\n      \\"TagCount\\": 1,\\n      \\"TagKey\\": \\"a\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\r\\n<ListTagKeysResponse>\\r\\n   <CurrentPage>1</CurrentPage>\\r\\n   <PageSize>20</PageSize>\\r\\n   <RequestId>97935DF1-0289-4AA2-9DD1-72377838B16B</RequestId>\\r\\n   <TagKeys>\\r\\n      <element>\\r\\n         <TagCount>1</TagCount>\\r\\n         <TagKey>a</TagKey>\\r\\n      </element>\\r\\n      <element>\\r\\n         <TagCount>1</TagCount>\\r\\n         <TagKey>testKey1</TagKey>\\r\\n      </element>\\r\\n      <element>\\r\\n         <TagCount>1</TagCount>\\r\\n         <TagKey>testKey2</TagKey>\\r\\n      </element>\\r\\n      <element>\\r\\n         <TagCount>2</TagCount>\\r\\n         <TagKey>testKey3</TagKey>\\r\\n      </element>\\r\\n      <element>\\r\\n         <TagCount>1</TagCount>\\r\\n         <TagKey>testKey4</TagKey>\\r\\n      </element>\\r\\n      <element>\\r\\n         <TagCount>1</TagCount>\\r\\n         <TagKey>x</TagKey>\\r\\n      </element>\\r\\n   </TagKeys>\\r\\n   <TotalCount>6</TotalCount>\\r\\n</ListTagKeysResponse>","errorExample":""}]',
            'title' => '查询所有标签',
            'summary' => '查询所有标签。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTagResources' => [
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
                'abilityTreeCode' => '105796',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的资源的类型。取值固定为**INSTANCE**，表示实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'INSTANCE',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询凭证（Token）。取值为上一次调用本接口返回的**NextToken**参数值，初次调用接口时无需设置该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RGuYpqDdKhzXb8C3.D1BwQgc1tMBsoxdGiEKHHUUCf****',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的原生防护实例的ID列表。'."\n"
                            ."\n"
                            .'> **ResourceId**和**Tag Key-Value对**不能同时为空。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询的原生防护实例的ID。'."\n"
                                ."\n"
                                .'> 您可以调用[DescribeInstanceList](~~118698~~)查询所有DDoS原生防护实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddosbgp-cn-n6w1r7nz****',
                        ],
                        'required' => false,
                        'example' => 'ddosbgp-cn-v0h1fmwbc024',
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的标签键值对。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '要查询的标签键。'."\n"
                                        ."\n"
                                        .'> **ResourceId**和**Tag Key-Value对**不能同时为空。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'testKey1',
                                ],
                                'Value' => [
                                    'description' => '要查询的标签值。'."\n"
                                        ."\n"
                                        .'> **ResourceId**和**Tag Key-Value对**不能同时为空。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'testValue1',
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
                            'NextToken' => [
                                'description' => '本次调用返回的查询凭证（Token）。',
                                'type' => 'string',
                                'example' => 'RGuYpqDdKhzXb8C3.D1BwQgc1tMBsoxdGiEKHHUUCf****',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'C3F7E6AE-43B2-4730-B6A3-FD17552B8F65',
                            ],
                            'TagResources' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagResource' => [
                                        'description' => 'DDoS原生防护实例绑定的标签列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TagValue' => [
                                                    'description' => '实例绑定的标签值。',
                                                    'type' => 'string',
                                                    'example' => 'testValue1',
                                                ],
                                                'ResourceType' => [
                                                    'description' => '资源类型。取值固定为**INSTANCE**，表示实例。',
                                                    'type' => 'string',
                                                    'example' => 'INSTANCE',
                                                ],
                                                'ResourceId' => [
                                                    'description' => 'DDoS原生防护实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'ddosbgp-cn-n6w1r7nz****',
                                                ],
                                                'TagKey' => [
                                                    'description' => '实例绑定的标签键。',
                                                    'type' => 'string',
                                                    'example' => 'testKey1',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"RGuYpqDdKhzXb8C3.D1BwQgc1tMBsoxdGiEKHHUUCf****\\",\\n  \\"RequestId\\": \\"C3F7E6AE-43B2-4730-B6A3-FD17552B8F65\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"TagValue\\": \\"testValue1\\",\\n        \\"ResourceType\\": \\"INSTANCE\\",\\n        \\"ResourceId\\": \\"ddosbgp-cn-n6w1r7nz****\\",\\n        \\"TagKey\\": \\"testKey1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <NextToken>RGuYpqDdKhzXb8C3.D1BwQgc1tMBsoxdGiEKHHUUCffomr</NextToken>\\n    <RequestId>C3F7E6AE-43B2-4730-B6A3-FD17552B8F65</RequestId>\\n    <TagResources>\\n        <TagValue>testValue1</TagValue>\\n        <ResourceType>INSTANCE</ResourceType>\\n        <ResourceId>ddosbgp-cn-n6w1r7nz****</ResourceId>\\n        <TagKey>testKey1</TagKey>\\n    </TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
            'title' => '查询资源和标签的对应关系',
            'summary' => '查询资源（DDoS原生防护实例）和标签的对应关系。',
            'description' => '本接口用于批量查询DDoS原生防护实例绑定的标签。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'TagResources' => [
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
                'abilityTreeCode' => '105810',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS原生防护实例所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~118703~~)查询DDoS原生防护支持的所有地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要绑定标签的资源的类型，取值固定为**INSTANCE**，表示实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'INSTANCE',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要绑定标签的DDoS原生防护实例的ID列表。最多支持51个ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要绑定标签的DDoS原生防护实例的ID。'."\n"
                                ."\n"
                                .'> 您可以调用[DescribeInstanceList](~~118698~~)查询所有DDoS原生防护实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddosbgp-cn-n6w1r7nz****',
                        ],
                        'required' => true,
                        'example' => 'ddosbgp-cn-v0h1fmwb****',
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要绑定的标签（键值对）列表。最多支持21个标签对。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '要绑定的标签键。'."\n"
                                        ."\n"
                                        .'> 如果您设置的标签键不存在，则表示新建该标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test-key',
                                ],
                                'Value' => [
                                    'description' => '要绑定的标签值。'."\n"
                                        ."\n"
                                        .'> 如果您设置的标签值不存在，则表示新建该标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test-value',
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
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '7078CD1E-F609-47A4-9C39-B288CC27C686',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7078CD1E-F609-47A4-9C39-B288CC27C686\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>7078CD1E-F609-47A4-9C39-B288CC27C686</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
            'title' => '为指定资源绑定标签',
            'summary' => '为指定资源（DDoS原生防护实例）绑定标签。',
            'description' => '本接口用于为单个或多个DDoS原生防护实例绑定标签。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~118841~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UntagResources' => [
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
                'abilityTreeCode' => '105811',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '原生防护实例的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型，取值：**INSTANCE**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'INSTANCE',
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否移除实例上的所有标签。默认否。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要操作的原生防护实例的ID。n的取值范围为 \\[0, 49]，用于指定多个实例，最多50个。例如：ResourceId.0，ResourceId.1，...，ResourceId.49。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要操作的原生防护实例的ID。n的取值范围为 \\[0, 49]，用于指定多个实例，最多50个。例如：ResourceId.0，ResourceId.1，...，ResourceId.49。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddosbgp-cn-v0h1fmwbc024',
                        ],
                        'required' => true,
                        'example' => 'ddosbgp-cn-v0h1fmwbc024',
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要移除的标签键。n的取值范围为 \\[0, 19]，用于指定多个标签键，最多20个。例如：Tag.0.Key，Tag.1.Key，...，Tag.19.Key。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要移除的标签键。n的取值范围为 \\[0, 19]，用于指定多个标签键，最多20个。例如：Tag.0.Key，Tag.1.Key，...，Tag.19.Key。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'testKey1',
                        ],
                        'required' => false,
                        'example' => 'testKey1',
                        'maxItems' => 21,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'F2D86AED-BA27-4584-BADC-B43BDA7EEBCA',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F2D86AED-BA27-4584-BADC-B43BDA7EEBCA\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\n    <RequestId>F2D86AED-BA27-4584-BADC-B43BDA7EEBCA</RequestId>\\n</UntagResourcesResponse>","errorExample":""}]',
            'title' => '移除指定资源标签',
            'summary' => '移除指定资源（DDoS原生防护实例）的标签。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ReleaseDdosOriginInstance' => [
            'summary' => '手动释放DDos防护包后付费全局实例。',
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
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '146584',
                'abilityTreeNodes' => [
                    'FEATUREddos61Q1SH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要释放的DDoS原生防护实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceList](~~118698~~)查询所有DDoS原生防护实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddosorigin_cn-pe335v7gs01',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'B4B379C2-9319-4C6B-B579-FE36831B09F4',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4B379C2-9319-4C6B-B579-FE36831B09F4\\"\\n}","type":"json"}]',
            'title' => '手动释放DDos防护包后付费全局实例',
        ],
        'DescribeDdosOriginInstanceBill' => [
            'summary' => '查询DDos防护包后付费账单信息。',
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
                'abilityTreeCode' => '154574',
                'abilityTreeNodes' => [
                    'FEATUREddos61Q1SH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账单类型。取值：'."\n"
                            .'- **flow_cn**：表示干净流量-DDoS防护增强版EIP中国内地账单。'."\n"
                            .'- **flow_ov**：表示干净流量-DDoS防护增强版EIP国际和港澳台账单。'."\n"
                            .'- **standard_assets_flow_cn**：表示干净流量-标准云产品中国内地账单。'."\n"
                            .'- **standard_assets_flow_ov**：表示干净流量-标准云产品国际和港澳台账单。'."\n"
                            .'- **function**：表示功能开通账单。'."\n"
                            .'- **ip_count**：表示防护IP数账单。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'function',
                        'enum' => [
                            'function',
                            'flow_cn',
                            'flow_ov',
                            'ip_count',
                            'standard_assets_flow_cn',
                            'standard_assets_flow_ov',
                        ],
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间戳，单位为毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1711209600410',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间戳，单位为毫秒。时间跨度不能超过30天。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1711382399410',
                    ],
                ],
                [
                    'name' => 'IsShowList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否展示账单详情。  取值：'."\n"
                            .'- **true**：展示账单信息。'."\n"
                            .'- **false**：只展示全局实例信息不展示账单详情。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '72155560-F343-55C8-82FE-ED4D7E4AA97E',
                            ],
                            'Status' => [
                                'description' => '开通状态。取值：'."\n"
                                    ."\n"
                                    .'- **1**：正常。'."\n"
                                    .'- **2**：过期。'."\n"
                                    .'- **3**：释放。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'DebtStatus' => [
                                'description' => '欠费状态。取值：'."\n"
                                    ."\n"
                                    .'- **0**：未欠费。'."\n"
                                    .'- **1**：欠费。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                            ],
                            'InstanceId' => [
                                'description' => '要查询的防护包后付费实例ID。',
                                'type' => 'string',
                                'example' => 'ddosorigin_cn-u7c3lcr9r02',
                            ],
                            'IpCount' => [
                                'description' => '防护IP数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '15',
                            ],
                            'IpInfo' => [
                                'description' => 'IP分布详情。JSON结构体包含以下字段：：'."\n"
                                    .'- **eipCnIpCount**：高防EIP中国内地IP数。'."\n"
                                    .'- **eipOvIpCount**：高防EIP国际和港澳台IP数。'."\n"
                                    .'- **standardAssetsCnIpCount**：标准云产品中国内地IP数。'."\n"
                                    .'- **standardAssetsOvIpCount**：标准云产品国际和港澳台IP数。',
                                'type' => 'string',
                                'example' => '{\\"eipCnIpCount\\":6,\\"eipOvIpCount\\":17,\\"standardAssetsCnIpCount\\":2,\\"standardAssetsOvIpCount\\":0}',
                            ],
                            'TotalFlowCn' => [
                                'description' => '当月DDoS防护（增强版）EIP中国内地总流量，单位：字节。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '6302081067',
                            ],
                            'TotalFlowOv' => [
                                'description' => '当月DDoS防护（增强版）EIP国际和港澳台总流量，单位：字节。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '6204918019',
                            ],
                            'StandardAssetsTotalFlowCn' => [
                                'description' => '当月标准云产品中国内地总流量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                            ],
                            'StandardAssetsTotalFlowOv' => [
                                'description' => '当月标准云产品国际和港澳台总流量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                            ],
                            'IpCountOrFunctionList' => [
                                'description' => '防护IP数和功能开通列表详情。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Coverage' => [
                                            'description' => '防护资产区域。取值：'."\n"
                                                .'- **only_mainland_china**：仅中国内地。'."\n"
                                                .'- **global**：全球。'."\n"
                                                .'- **international_and_hmt**：非中国内地，包含国际和中国香港、中国澳门、中国台湾。',
                                            'type' => 'string',
                                            'example' => 'global',
                                        ],
                                        'IpCntCn' => [
                                            'description' => '后付费防护中国内地IP数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '5',
                                        ],
                                        'IpCntOv' => [
                                            'description' => '后付费防护国际和港澳台IP数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '5',
                                        ],
                                        'Time' => [
                                            'description' => '账单时间，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1680278400000',
                                        ],
                                        'MemberIpCnt' => [
                                            'description' => '账单分布的账号。JSON字段结构如下：'."\n"
                                                .'- **eipCnIpCount**：DDoS防护增强版EIP中国内地IP数。'."\n"
                                                .'- **eipOvIpCount**：DDoS防护增强版EIP国际和港澳台IP数。'."\n"
                                                .'- **memberUid**：所属账号。'."\n"
                                                .'- **standardAssetsCnIpCount**：标准云产品中国内地IP数。'."\n"
                                                .'- **standardAssetsOvIpCount**：标准云产品国际和港澳台IP数。'."\n"
                                                .'> JSON中memberUid为空则表示当前账号信息。',
                                            'type' => 'string',
                                            'example' => '[{\\"eipCnIpCount\\":3,\\"eipOvIpCount\\":18,\\"memberUid\\":\\"\\",\\"standardAssetsCnIpCount\\":2,\\"standardAssetsOvIpCount\\":0},{\\"eipCnIpCount\\":3,\\"eipOvIpCount\\":0,\\"memberUid\\":\\"1776997906319249\\",\\"standardAssetsCnIpCount\\":0,\\"standardAssetsOvIpCount\\":0}]',
                                        ],
                                    ],
                                ],
                            ],
                            'FlowList' => [
                                'description' => 'DDoS防护增强版EIP流量详情。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'TotalFlow' => [
                                            'description' => 'DDoS防护增强版EIP流量，单位为byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '6302081067',
                                        ],
                                        'RegionFlow' => [
                                            'description' => 'region对应的流量分布。JSON字段结构如下：'."\n"
                                                .'- **bytes**：DDoS防护增强版EIP对应region的流量大小，单位：byte。'."\n"
                                                .'- **instanceId**：DDoS防护增强版EIP对应的全局按量实例ID。'."\n"
                                                .'- **ip**：对应的高防EIP。'."\n"
                                                .'- **region**：区域。',
                                            'type' => 'string',
                                            'example' => '{\\"cn-hangzhou\\":[{\\"bytes\\":0,\\"instanceId\\":\\"ddosorigin_cn-u7c3lcr9r02\\",\\"ip\\":\\"47.118.168.124\\",\\"region\\":\\"cn-hangzhou\\"}]}',
                                        ],
                                        'Time' => [
                                            'description' => '时间戳。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1620951900',
                                        ],
                                        'MemberFlow' => [
                                            'description' => 'region对应的流量分布。JSON字段结构如下：'."\n"
                                                .'- **bytes**：DDoS防护增强版EIP对应region的流量大小，单位：byte。'."\n"
                                                .'- **memberUid** 所属账号。'."\n"
                                                .'- **instanceId**：DDoS防护增强版EIP对应的全局按量实例ID。'."\n"
                                                .'- **ip**：对应的高防EIP。'."\n"
                                                .'- **region**：区域。'."\n"
                                                .'> JSON中memberUid为空则表示当前账号信息。JSON最外层bytes为总流量，内层bytes为账号对应的流量。',
                                            'type' => 'string',
                                            'example' => '[{\\"bytes\\":79282719,\\"memberUid\\":\\"\\",\\"regionFlows\\":{\\"cn-hangzhou\\":[{\\"bytes\\":79282719,\\"instanceId\\":\\"ddosorigin_cn-u7c3lcr9r02\\",\\"ip\\":\\"47.118.168.57\\",\\"region\\":\\"cn-hangzhou\\"}]}}]',
                                        ],
                                    ],
                                ],
                            ],
                            'StandardAssetsFlowList' => [
                                'description' => '标准云产品流量信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'TotalFlow' => [
                                            'description' => '标准云产品流量，单位为byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '6302081067',
                                        ],
                                        'RegionFlow' => [
                                            'description' => 'region对应的流量分布。JSON字段结构如下：'."\n"
                                                .'- **bytes**：标准云产品对应region的流量大小，单位：byte。'."\n"
                                                .'- **instanceId**：标准云产品对应的全局按量实例ID。'."\n"
                                                .'- **ip**：防护包实例对应的实例id。'."\n"
                                                .'- **region**：区域。',
                                            'type' => 'string',
                                            'example' => '{\\"cn-hangzhou\\":[{\\"bytes\\":0,\\"instanceId\\":\\"ddosorigin_cn-u7c3lcr9r02\\",\\"ip\\":\\"47.118.168.124\\",\\"region\\":\\"cn-hangzhou\\"}]}',
                                        ],
                                        'Time' => [
                                            'description' => '时间戳，单位毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1679846400000',
                                        ],
                                        'MemberFlow' => [
                                            'description' => 'region对应的流量分布。JSON字段结构如下：'."\n"
                                                .'- **bytes**：标准云产品对应region的流量大小，单位：byte。'."\n"
                                                .'- **memberUid** 所属账号。'."\n"
                                                .'- **instanceId**：标准云产品对应的全局按量实例ID。'."\n"
                                                .'- **ip**：标准云产品对应的实例id。'."\n"
                                                .'- **region**：区域。'."\n"
                                                .'> JSON中memberUid为空则表示当前账号信息。JSON最外层bytes为总流量，内层bytes为账号对应的流量。',
                                            'type' => 'string',
                                            'example' => '[{\\"bytes\\":79282719,\\"memberUid\\":\\"\\",\\"regionFlows\\":{\\"cn-hangzhou\\":[{\\"bytes\\":79282719,\\"instanceId\\":\\"ddosorigin_cn-u7c3lcr9r02\\",\\"ip\\":\\"47.118.168.57\\",\\"region\\":\\"cn-hangzhou\\"}]}}]',
                                        ],
                                    ],
                                ],
                            ],
                            'FlowRegion' => [
                                'description' => 'DDoS防护（增强版）EIP的region流量分布信息。',
                                'type' => 'object',
                                'example' => '{\'cn-hongkong\': 166491566}',
                            ],
                            'StandardAssetsFlowRegion' => [
                                'description' => '标准云产品的region流量分布信息。',
                                'type' => 'object',
                                'example' => '{\'cn-hongkong\': 166491566}'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"72155560-F343-55C8-82FE-ED4D7E4AA97E\\",\\n  \\"Status\\": 1,\\n  \\"DebtStatus\\": 0,\\n  \\"InstanceId\\": \\"ddosorigin_cn-u7c3lcr9r02\\",\\n  \\"IpCount\\": 15,\\n  \\"IpInfo\\": \\"{\\\\\\\\\\\\\\"eipCnIpCount\\\\\\\\\\\\\\":6,\\\\\\\\\\\\\\"eipOvIpCount\\\\\\\\\\\\\\":17,\\\\\\\\\\\\\\"standardAssetsCnIpCount\\\\\\\\\\\\\\":2,\\\\\\\\\\\\\\"standardAssetsOvIpCount\\\\\\\\\\\\\\":0}\\",\\n  \\"TotalFlowCn\\": 6302081067,\\n  \\"TotalFlowOv\\": 6204918019,\\n  \\"StandardAssetsTotalFlowCn\\": 0,\\n  \\"StandardAssetsTotalFlowOv\\": 0,\\n  \\"IpCountOrFunctionList\\": [\\n    {\\n      \\"Coverage\\": \\"global\\",\\n      \\"IpCntCn\\": 5,\\n      \\"IpCntOv\\": 5,\\n      \\"Time\\": 1680278400000,\\n      \\"MemberIpCnt\\": \\"[{\\\\\\\\\\\\\\"eipCnIpCount\\\\\\\\\\\\\\":3,\\\\\\\\\\\\\\"eipOvIpCount\\\\\\\\\\\\\\":18,\\\\\\\\\\\\\\"memberUid\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"standardAssetsCnIpCount\\\\\\\\\\\\\\":2,\\\\\\\\\\\\\\"standardAssetsOvIpCount\\\\\\\\\\\\\\":0},{\\\\\\\\\\\\\\"eipCnIpCount\\\\\\\\\\\\\\":3,\\\\\\\\\\\\\\"eipOvIpCount\\\\\\\\\\\\\\":0,\\\\\\\\\\\\\\"memberUid\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1776997906319249\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"standardAssetsCnIpCount\\\\\\\\\\\\\\":0,\\\\\\\\\\\\\\"standardAssetsOvIpCount\\\\\\\\\\\\\\":0}]\\"\\n    }\\n  ],\\n  \\"FlowList\\": [\\n    {\\n      \\"TotalFlow\\": 6302081067,\\n      \\"RegionFlow\\": \\"{\\\\\\\\\\\\\\"cn-hangzhou\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"bytes\\\\\\\\\\\\\\":0,\\\\\\\\\\\\\\"instanceId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"ddosorigin_cn-u7c3lcr9r02\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"ip\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"47.118.168.124\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"region\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cn-hangzhou\\\\\\\\\\\\\\"}]}\\",\\n      \\"Time\\": 1620951900,\\n      \\"MemberFlow\\": \\"[{\\\\\\\\\\\\\\"bytes\\\\\\\\\\\\\\":79282719,\\\\\\\\\\\\\\"memberUid\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"regionFlows\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"cn-hangzhou\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"bytes\\\\\\\\\\\\\\":79282719,\\\\\\\\\\\\\\"instanceId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"ddosorigin_cn-u7c3lcr9r02\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"ip\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"47.118.168.57\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"region\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cn-hangzhou\\\\\\\\\\\\\\"}]}}]\\"\\n    }\\n  ],\\n  \\"StandardAssetsFlowList\\": [\\n    {\\n      \\"TotalFlow\\": 6302081067,\\n      \\"RegionFlow\\": \\"{\\\\\\\\\\\\\\"cn-hangzhou\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"bytes\\\\\\\\\\\\\\":0,\\\\\\\\\\\\\\"instanceId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"ddosorigin_cn-u7c3lcr9r02\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"ip\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"47.118.168.124\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"region\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cn-hangzhou\\\\\\\\\\\\\\"}]}\\",\\n      \\"Time\\": 1679846400000,\\n      \\"MemberFlow\\": \\"[{\\\\\\\\\\\\\\"bytes\\\\\\\\\\\\\\":79282719,\\\\\\\\\\\\\\"memberUid\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"regionFlows\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"cn-hangzhou\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"bytes\\\\\\\\\\\\\\":79282719,\\\\\\\\\\\\\\"instanceId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"ddosorigin_cn-u7c3lcr9r02\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"ip\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"47.118.168.57\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"region\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cn-hangzhou\\\\\\\\\\\\\\"}]}}]\\"\\n    }\\n  ],\\n  \\"FlowRegion\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"StandardAssetsFlowRegion\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n}","type":"json"}]',
            'title' => '查询DDos防护包后付费账单信息',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'ddosbgp.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'ddosbgp.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'ddosbgp.us-east-1.aliyuncs.com',
        ],
    ],
];
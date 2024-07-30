<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'ddoscoo',
        'version' => '2020-01-01',
    ],
    'directories' => [
        [
            'id' => 77847,
            'title' => '实例',
            'type' => 'directory',
            'children' => [
                'ReleaseInstance',
                'ModifyInstanceRemark',
                'ModifyElasticBandWidth',
                'DescribeInstanceIds',
                'DescribeInstanceStatus',
                'DescribeElasticBandwidthSpec',
                'DescribeInstanceStatistics',
                'DescribeInstances',
                'DescribeInstanceSpecs',
                'DescribeInstanceDetails',
                'ModifyElasticBizQps',
                'ModifyQpsMode',
            ],
        ],
        [
            'id' => 77858,
            'title' => '域名',
            'type' => 'directory',
            'children' => [
                'CreateWebRule',
                'DeleteWebRule',
                'ModifyWebRule',
                'ModifyTlsConfig',
                'ModifyHttp2Enable',
                'ModifyWebAccessMode',
                'ModifyCnameReuse',
                'DescribeWebRules',
                'DescribeWebInstanceRelations',
                'DescribeCerts',
                'DescribeWebCustomPorts',
                'DescribeWebAccessMode',
                'DescribeCnameReuses',
                'DescribeL7RsPolicy',
                'AssociateWebCert',
                'ConfigL7RsPolicy',
                'ModifyOcspStatus',
                'ConfigL7UsKeepalive',
                'DescribeL7UsKeepalive',
            ],
        ],
        [
            'id' => 77875,
            'title' => '任务',
            'type' => 'directory',
            'children' => [
                'CreateAsyncTask',
                'DeleteAsyncTask',
            ],
        ],
        [
            'id' => 77878,
            'title' => '网络转发规则',
            'type' => 'directory',
            'children' => [
                'CreateNetworkRules',
                'DeleteNetworkRule',
                'ModifyHealthCheckConfig',
                'DescribeNetworkRules',
                'DescribeHealthCheckStatus',
                'ConfigNetworkRules',
            ],
        ],
        [
            'id' => 77885,
            'title' => '流量调度器',
            'type' => 'directory',
            'children' => [
                'CreateSchedulerRule',
                'DeleteSchedulerRule',
                'ModifySchedulerRule',
                'DescribeSchedulerRules',
                'SwitchSchedulerRule',
            ],
        ],
        [
            'id' => 77890,
            'title' => '基础设施防护策略',
            'type' => 'directory',
            'children' => [
                'AddAutoCcBlacklist',
                'AddAutoCcWhitelist',
                'DeleteAutoCcBlacklist',
                'DeleteAutoCcWhitelist',
                'ModifyBlackholeStatus',
                'ModifyBlockStatus',
                'DescribeAutoCcListCount',
                'DescribeAutoCcBlacklist',
                'DescribeAutoCcWhitelist',
                'DescribeUnBlackholeCount',
                'DescribeBlackholeStatus',
                'DescribeNetworkRegionBlock',
                'DescribeBlockStatus',
                'DescribeUnBlockCount',
                'EmptyAutoCcBlacklist',
                'EmptyAutoCcWhitelist',
                'ConfigNetworkRegionBlock',
                'DescribeUdpReflect',
                'ConfigUdpReflect',
            ],
        ],
        [
            'id' => 77908,
            'title' => '网站业务防护策略',
            'type' => 'directory',
            'children' => [
                'CreateWebCCRule',
                'DeleteWebCCRule',
                'DeleteWebPreciseAccessRule',
                'ModifyWebAIProtectSwitch',
                'ModifyWebAIProtectMode',
                'ModifyWebIpSetSwitch',
                'EnableWebCC',
                'DisableWebCC',
                'EnableWebCCRule',
                'DisableWebCCRule',
                'ModifyWebCCRule',
                'ModifyWebPreciseAccessSwitch',
                'ModifyWebPreciseAccessRule',
                'ModifyWebAreaBlockSwitch',
                'ModifyWebAreaBlock',
                'DescribeWebCcProtectSwitch',
                'DescribeWebCCRules',
                'DescribeWebPreciseAccessRule',
                'DescribeWebAreaBlockConfigs',
                'ConfigWebIpSet',
                'ConfigWebCCTemplate',
                'DeleteWebCCRuleV2',
                'DescribeWebCCRulesV2',
                'ConfigWebCCRuleV2',
                'ModifyWebCCGlobalSwitch',
            ],
        ],
        [
            'id' => 77930,
            'title' => '非网站业务防护策略',
            'type' => 'directory',
            'children' => [
                'ModifyPortAutoCcStatus',
                'ModifyNetworkRuleAttribute',
                'DescribePortAutoCcStatus',
                'DescribeDomains',
                'DescribeHealthCheckList',
                'DescribeNetworkRuleAttributes',
            ],
        ],
        [
            'id' => 77938,
            'title' => '定制场景策略',
            'type' => 'directory',
            'children' => [
                'CreateSceneDefensePolicy',
                'DeleteSceneDefensePolicy',
                'ModifySceneDefensePolicy',
                'AttachSceneDefenseObject',
                'DetachSceneDefenseObject',
                'EnableSceneDefensePolicy',
                'DisableSceneDefensePolicy',
                'DescribeSceneDefensePolicies',
                'DescribeSceneDefenseObjects',
            ],
        ],
        [
            'id' => 77948,
            'title' => '静态页面缓存',
            'type' => 'directory',
            'children' => [
                'DeleteWebCacheCustomRule',
                'ModifyWebCacheSwitch',
                'ModifyWebCacheMode',
                'ModifyWebCacheCustomRule',
                'DescribeWebCacheConfigs',
            ],
        ],
        [
            'id' => 77954,
            'title' => '攻击分析',
            'type' => 'directory',
            'children' => [
                'DescribeDDosEventMax',
                'DescribeDDosEventArea',
                'DescribeDDosEventAttackType',
                'DescribeDDosEventIsp',
                'DescribeDDosEventSrcIp',
                'DescribeBackSourceCidr',
                'DescribeDDosAllEventList',
                'DescribeDDoSEvents',
                'DescribeSlaEventList',
                'DescribeDomainAttackEvents',
                'DescribeDefenseCountStatistics',
                'DescribeAttackAnalysisMaxQps',
            ],
        ],
        [
            'id' => 77966,
            'title' => '监控报表',
            'type' => 'directory',
            'children' => [
                'DescribePortFlowList',
                'DescribePortConnsList',
                'DescribePortConnsCount',
                'DescribePortMaxConns',
                'DescribePortAttackMaxFlow',
                'DescribePortViewSourceCountries',
                'DescribePortViewSourceIsps',
                'DescribePortViewSourceProvinces',
                'DescribeDomainQPSList',
                'DescribeDomainStatusCodeList',
                'DescribeDomainOverview',
                'DescribeDomainStatusCodeCount',
                'DescribeDomainTopAttackList',
                'DescribeDomainViewSourceCountries',
                'DescribeDomainViewSourceProvinces',
                'DescribeDomainViewTopCostTime',
                'DescribeDomainViewTopUrl',
            ],
        ],
        [
            'id' => 77984,
            'title' => '日志',
            'type' => 'directory',
            'children' => [
                'EnableWebAccessLogConfig',
                'ModifyFullLogTtl',
                'DisableWebAccessLogConfig',
                'DescribeWebAccessLogDispatchStatus',
                'DescribeWebAccessLogStatus',
                'DescribeLogStoreExistStatus',
                'DescribeOpEntities',
                'DescribeSlsAuthStatus',
                'DescribeSlsLogstoreInfo',
                'DescribeSlsOpenStatus',
                'DescribeWebAccessLogEmptyCount',
                'DescribeDefenseRecords',
                'EmptySlsLogstore',
            ],
        ],
        [
            'id' => 77998,
            'title' => '系统配置与日志',
            'type' => 'directory',
            'children' => [
                'DescribeStsGrantStatus',
                'DescribeAsyncTasks',
                'DescribeSystemLog',
                'DescribeElasticQps',
                'DescribeElasticQpsRecord',
            ],
        ],
        [
            'id' => 78001,
            'title' => '标签',
            'type' => 'directory',
            'children' => [
                'CreateTagResources',
                'DeleteTagResources',
                'DescribeTagKeys',
                'DescribeTagResources',
            ],
        ],
        [
            'id' => 78006,
            'title' => '端口',
            'type' => 'directory',
            'children' => [
                'CreatePort',
                'DeletePort',
                'ModifyPort',
                'DescribePort',
            ],
        ],
        [
            'id' => 178094,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'CreateDomainResource',
                'DeleteDomainResource',
                'DescribeDomainResource',
                'ModifyDomainResource',
                'ConfigLayer4Remark',
                'ConfigLayer4RuleBakMode',
                'ConfigLayer4RulePolicy',
                'DescribeLayer4RulePolicy',
                'DescribeInstanceExt',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ReleaseInstance' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要释放的实例ID。'."\n"
                            ."\n"
                            .'> 只允许释放已到期的实例。您可以调用[DescribeInstances](~~91478~~)查询所有DDoS高防实例的ID和到期状态信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
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
                                'example' => '06FFAF5F-CD3E-4886-A849-AAB40DFF6515',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06FFAF5F-CD3E-4886-A849-AAB40DFF6515\\"\\n}","type":"json"}]',
            'title' => '释放已经到期的DDoS高防实例',
            'summary' => '释放已经到期的DDoS高防实例。',
            'description' => 'DDoS高防实例到期后，将停止提供DDoS攻击防御服务，且实例到期7天后，将停止业务流量转发。'."\n"
                .'- 建议您在实例到期前及时续费，避免实例到期对业务防护和转发带来影响。您可以调用[DescribeInstances](~~91478~~)查询实例的到期时间。如果需要续费，请前往[DDoS高防控制台](https://yundun.console.aliyun.com/?p=ddoscoo)进行操作。'."\n"
                .'- 如果您不计划续费实例，建议您在DDoS高防实例到期前恢复已接入防护的业务IP（不再使用DDoS高防IP作为业务IP）或业务DNS解析（不再将业务流量解析到DDoS高防的CNAME地址），停止将业务转发到DDoS高防实例，避免实例到期对正常业务转发带来影响。'."\n"
                ."\n"
                .'实例到期后，您可以调用本接口释放指定的DDoS高防实例。'."\n"
                ."\n"
                .'> 释放指定实例前，请务必确认您已经恢复接入防护的业务IP或业务DNS解析。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyInstanceRemark' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要操作的DDoS高防实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '为DDoS高防实例设置备注。'."\n"
                            ."\n"
                            .'支持使用中文字符、英文大小写字符、数字及部分特殊字符，例如：`,.+-*/_`。最长不允许超过500个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'new-remark',
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
                                'example' => '7EFA2BA6-9C0A-4410-B735-FC337EB634A1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7EFA2BA6-9C0A-4410-B735-FC337EB634A1\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyInstanceRemarkResponse>\\n    <RequestId>7EFA2BA6-9C0A-4410-B735-FC337EB634A1</RequestId>\\n</ModifyInstanceRemarkResponse>","errorExample":""}]',
            'title' => '修改指定实例的备注信息',
            'summary' => '编辑DDoS高防实例的备注。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyElasticBandWidth' => [
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
                    'name' => 'ElasticBandwidth',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要设置的弹性防护带宽，单位：Gbps。'."\n"
                            .'> 您可以调用[DescribeElasticBandwidthSpec](~~91502~~)查询可选的弹性防护带宽规格。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 实例必须处于正常状态。您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyElasticBandWidthResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</ModifyElasticBandWidthResponse>","errorExample":""}]',
            'title' => '修改指定实例的弹性防护带宽',
            'summary' => '修改DDoS高防（中国内地）实例的弹性防护带宽。',
            'description' => '> 该接口仅适用于DDoS高防（中国内地）服务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeInstanceIds' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'Edition',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的类型。取值：'."\n"
                            ."\n"
                            .'- **0**：表示DDoS高防（非中国内地）保险版。'."\n"
                            .'- **1**：表示DDoS高防（非中国内地）无忧版。'."\n"
                            .'- **2**：表示DDoS高防（非中国内地）加速线路。'."\n"
                            .'- **3**：表示DDoS高防（非中国内地）安全加速线路。'."\n"
                            .'- **9**：表示DDoS高防（中国内地）专业版。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '9',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的ID列表。N的最大值：200。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询的DDoS高防实例的ID。'."\n"
                                ."\n"
                                .'不设置该参数表示查询所有DDoS高防实例。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-zvp2eibz****',
                        ],
                        'required' => false,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 100,
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
                                'example' => '310A41FD-0990-5610-92E0-A6A55D7C6444',
                            ],
                            'InstanceIds' => [
                                'description' => 'DDoS高防实例的ID、版本、备注、IP类型信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'IpMode' => [
                                            'description' => '实例的IP转发模式。取值：'."\n"
                                                ."\n"
                                                .'- **fnat**：表示源站和客户端的IP版本一致，即IPv4地址客户端请求转发到IPv4地址源站、IPv6地址客户端请求转发到IPv6地址源站。'."\n"
                                                .'- **v6tov4**：表示IPv6和IPv4地址客户端请求都转发到IPv4地址源站。',
                                            'type' => 'string',
                                            'example' => 'fnat',
                                        ],
                                        'Edition' => [
                                            'description' => '实例的类型。取值：'."\n"
                                                ."\n"
                                                .'- **0**：表示DDoS高防（非中国内地）保险版。'."\n"
                                                .'- **1**：表示DDoS高防（非中国内地）无忧版。'."\n"
                                                .'- **2**：表示DDoS高防（非中国内地）加速线路。'."\n"
                                                .'- **3**：表示DDoS高防（非中国内地）安全加速线路。'."\n"
                                                .'- **9**：表示DDoS高防（中国内地）专业版。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '9',
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'ddoscoo-cn-zvp2eibz****',
                                        ],
                                        'IpVersion' => [
                                            'description' => '实例的IP协议版本。取值：'."\n"
                                                ."\n"
                                                .'- **Ipv4**：表示 IPv4版本。'."\n"
                                                .'- **Ipv6**：表示 IPv6版本。',
                                            'type' => 'string',
                                            'example' => 'Ipv4',
                                        ],
                                        'Remark' => [
                                            'description' => '实例的备注。',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"310A41FD-0990-5610-92E0-A6A55D7C6444\\",\\n  \\"InstanceIds\\": [\\n    {\\n      \\"IpMode\\": \\"fnat\\",\\n      \\"Edition\\": 9,\\n      \\"InstanceId\\": \\"ddoscoo-cn-zvp2eibz****\\",\\n      \\"IpVersion\\": \\"Ipv4\\",\\n      \\"Remark\\": \\"test\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceIdsResponse>\\n    <RequestId>310A41FD-0990-5610-92E0-A6A55D7C6444</RequestId>\\n    <InstanceIds>\\n        <IpMode>fnat</IpMode>\\n        <Edition>9</Edition>\\n        <InstanceId>ddoscoo-cn-zvp2eibz****</InstanceId>\\n        <IpVersion>Ipv4</IpVersion>\\n        <Remark>test</Remark>\\n    </InstanceIds>\\n</DescribeInstanceIdsResponse>","errorExample":""}]',
            'title' => '查询DDoS高防实例的ID信息',
            'summary' => '查询DDoS高防实例的ID、版本、备注、IP类型信息。',
            'description' => '本接口用于查询所有DDoS高防实例的ID、版本、备注、IP类型信息。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeInstanceStatus' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防（中国内地）或DDoS高防（非中国内地）实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-6ja1y6p5****',
                    ],
                ],
                [
                    'name' => 'ProductType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的类型。取值：'."\n"
                            ."\n"
                            .'- **1**：表示DDoS高防（中国内地）实例。'."\n"
                            .'- **2**：表示DDoS高防（非中国内地）实例。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'InstanceStatus' => [
                                'description' => 'DDoS高防实例的状态。取值：'."\n"
                                    ."\n"
                                    .'- **1**：表示正常。'."\n"
                                    .'- **2**：表示已过期。'."\n"
                                    .'- **3**：表示存在欠费。'."\n"
                                    .'- **4**：表示已释放。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '112777CC-2AD6-46FC-A263-00B931406FCD',
                            ],
                            'InstanceId' => [
                                'description' => 'DDoS高防实例的ID。',
                                'type' => 'string',
                                'example' => 'ddoscoo-cn-6ja1y6p5****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"InstanceStatus\\": 1,\\n  \\"RequestId\\": \\"112777CC-2AD6-46FC-A263-00B931406FCD\\",\\n  \\"InstanceId\\": \\"ddoscoo-cn-6ja1y6p5****\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeInstanceStatusResponse>\\r\\n\\t<RequestId>112777CC-2AD6-46FC-A263-00B931406FCD</RequestId>\\r\\n\\t<InstanceId>ddoscoo-cn-6ja1y6p5****</InstanceId>\\r\\n\\t<InstanceStatus>1</InstanceStatus>\\r\\n</DescribeInstanceStatusResponse>","errorExample":""}]',
            'title' => '查询指定的DDoS高防实例的状态',
            'summary' => '查询指定的DDoS高防实例的状态。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeElasticBandwidthSpec' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                            'ElasticBandwidthSpec' => [
                                'description' => '可选的弹性防护带宽规格列表。单位：Gbps。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '弹性防护带宽规格。',
                                    'type' => 'string',
                                    'example' => '5',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\",\\n  \\"ElasticBandwidthSpec\\": [\\n    \\"5\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeElasticBandwidthSpecResponse>\\r\\n\\t<ElasticBandwidthSpec>5</ElasticBandwidthSpec>\\r\\n\\t<ElasticBandwidthSpec>10</ElasticBandwidthSpec>\\r\\n\\t<ElasticBandwidthSpec>20</ElasticBandwidthSpec>\\r\\n\\t<ElasticBandwidthSpec>30</ElasticBandwidthSpec>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</DescribeElasticBandwidthSpecResponse>","errorExample":""}]',
            'title' => '查询指定实例的弹性带宽规格',
            'summary' => '查询DDoS高防（中国内地）实例的可选弹性防护带宽规格。',
            'description' => '> 该接口仅适用于DDoS高防（新BGP）服务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeInstanceStatistics' => [
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
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询的DDoS高防实例的ID。N的最大值：200，即最多可配置200个DDoS高防实例，实例ID之间用半角逗号（,）隔开。'."\n"
                                .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-mp91j1ao****',
                        ],
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 100,
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
                                'example' => '642319A9-D1F2-4459-A447-E57CFC599FDE',
                            ],
                            'InstanceStatistics' => [
                                'description' => 'DDoS高防实例的统计信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DomainUsage' => [
                                            'description' => '已防护的域名数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'DefenseCountUsage' => [
                                            'description' => '本月已用高级防护次数。'."\n"
                                                ."\n"
                                                .'> 只有DDoS高防（非中国内地）实例拥有该属性。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'InstanceId' => [
                                            'description' => 'DDoS高防实例ID。',
                                            'type' => 'string',
                                            'example' => 'ddoscoo-cn-mp91j1ao****',
                                        ],
                                        'SiteUsage' => [
                                            'description' => '已防护的站点数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'PortUsage' => [
                                            'description' => '已防护的端口数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"642319A9-D1F2-4459-A447-E57CFC599FDE\\",\\n  \\"InstanceStatistics\\": [\\n    {\\n      \\"DomainUsage\\": 1,\\n      \\"DefenseCountUsage\\": 1,\\n      \\"InstanceId\\": \\"ddoscoo-cn-mp91j1ao****\\",\\n      \\"SiteUsage\\": 1,\\n      \\"PortUsage\\": 2\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceStatisticsResponse>\\n    <RequestId>642319A9-D1F2-4459-A447-E57CFC599FDE</RequestId>\\n    <InstanceStatistics>\\n        <DomainUsage>1</DomainUsage>\\n        <DefenseCountUsage>1</DefenseCountUsage>\\n        <InstanceId>ddoscoo-cn-mp91j1ao****</InstanceId>\\n        <SiteUsage>1</SiteUsage>\\n        <PortUsage>2</PortUsage>\\n    </InstanceStatistics>\\n</DescribeInstanceStatisticsResponse>","errorExample":""}]',
            'title' => '查询指定实例的统计信息',
            'summary' => '查询DDoS高防实例的统计信息，例如已防护的域名、端口数量等。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeInstances' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页包含实例的数量。取值范围：1~50。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '203.107.XX.XX',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的备注。支持模糊查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'doc-test',
                    ],
                ],
                [
                    'name' => 'Edition',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的防护套餐版本。取值：'."\n"
                            ."\n"
                            .'- **0**：表示DDoS高防（非中国内地）保险版。'."\n"
                            .'- **1**：表示DDoS高防（非中国内地）无忧版。'."\n"
                            .'- **2**： 表示DDoS高防（非中国内地）加速线路。'."\n"
                            .'- **9**：表示DDoS高防（中国内地）专业版。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '9',
                    ],
                ],
                [
                    'name' => 'Enabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的业务流量转发状态。取值：'."\n"
                            ."\n"
                            .'- **0**：表示已停止转发业务流量。'."\n"
                            .'- **1**：表示正常转发业务流量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ExpireStartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的最早到期时间（即查询到期时间在**ExpireStartTime**之后的DDoS高防实例）。使用时间戳表示，单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1640361500000',
                    ],
                ],
                [
                    'name' => 'ExpireEndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的最晚到期时间（即查询到期时间在**ExpireEndTime**之前的DDoS高防实例）。使用时间戳表示，单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1640361700000',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的ID列表。最多可配置200个DDoS高防实例。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询的DDoS高防实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-7pp2g9ed****',
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的状态列表。最多可配置2个DDoS高防实例状态。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询的DDoS高防实例的状态。取值：'."\n"
                                ."\n"
                                .'- **1**：表示正常。'."\n"
                                .'- **2**：表示已过期。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'example' => '1',
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例绑定的标签列表。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '要查询的DDoS高防实例绑定的标签键。N的最大值：200，即最多可配置200个标签键。配置规则如下：'."\n"
                                        ."\n"
                                        .'- 每个标签包含一个标签键（**Key**）和一个标签值（**Value**），中间用半角逗号（,）隔开。'."\n"
                                        .'- 标签之间用半角逗号（,）隔开。'."\n"
                                        ."\n"
                                        .'> 标签键（**Key**）和标签值（**Value**）必须成对出现。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test-key',
                                ],
                                'Value' => [
                                    'description' => '要查询的DDoS高防实例绑定的标签值。N的最大值：200，即最多可配置200个标签值。配置规则如下：'."\n"
                                        ."\n"
                                        .'- 每个标签包含一个标签键（**Key**）和一个标签值（**Value**），中间用半角逗号（,）隔开。'."\n"
                                        .'- 标签之间用半角逗号（,）隔开。'."\n"
                                        ."\n"
                                        .'> 标签键（**Key**）和标签值（**Value**）必须成对出现。',
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
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '查询到的DDoS高防实例的总数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'A0AF40CC-814A-5A86-AEAA-6F19E88B8A39',
                            ],
                            'Instances' => [
                                'description' => 'DDoS高防实例的详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '实例的状态。取值：'."\n"
                                                ."\n"
                                                .'- **1**：表示正常。'."\n"
                                                .'- **2**：表示已过期。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'IpMode' => [
                                            'description' => '实例的IP转发模式。取值：'."\n"
                                                ."\n"
                                                .'- **fnat**：表示源站和客户端的IP版本一致，即IPv4地址客户端请求转发到IPv4地址源站、IPv6地址客户端请求转发到IPv6地址源站。'."\n"
                                                .'- **v6tov4**：表示IPv6地址客户端请求转发到IPv4地址源站。',
                                            'type' => 'string',
                                            'example' => 'fnat',
                                        ],
                                        'DebtStatus' => [
                                            'description' => '实例的欠费状态。取值固定为**0**，表示不欠费，因为DDoS高防服务目前只支持包年包月的预付费计费方式。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'Edition' => [
                                            'description' => '实例的防护套餐版本。取值：'."\n"
                                                ."\n"
                                                .'- **0**：表示DDoS高防（非中国内地）保险版。'."\n"
                                                .'- **1**：表示DDoS高防（非中国内地）无忧版。'."\n"
                                                .'- **2**： 表示DDoS高防（非中国内地）加速线路。'."\n"
                                                .'- **9**：表示DDoS高防（中国内地）专业版。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '9',
                                        ],
                                        'IpVersion' => [
                                            'description' => '实例的IP协议版本。取值：'."\n"
                                                ."\n"
                                                .'- **Ipv4**：表示IPv4协议。'."\n"
                                                .'- **Ipv6**：表示IPv6协议。',
                                            'type' => 'string',
                                            'example' => 'Ipv4',
                                        ],
                                        'ExpireTime' => [
                                            'description' => '实例的到期时间。使用时间戳表示，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1640361600000',
                                        ],
                                        'Remark' => [
                                            'description' => '实例的备注。',
                                            'type' => 'string',
                                            'example' => 'doc-test',
                                        ],
                                        'CreateTime' => [
                                            'description' => '实例的创建时间。使用时间戳表示，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1637751953000',
                                        ],
                                        'Enabled' => [
                                            'description' => '实例的业务流量转发状态。取值：'."\n"
                                                ."\n"
                                                .'- **0**：表示已停止转发业务流量。'."\n"
                                                .'- **1**：表示正常转发业务流量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例的ID。',
                                            'type' => 'string',
                                            'example' => 'ddoscoo-cn-7pp2g9ed****',
                                        ],
                                        'IsFirstOpenBw' => [
                                            'description' => '实例是否开启过95弹性业务带宽计费模式。取值：'."\n"
                                                ."\n"
                                                .'- 0：表示未开启过。'."\n"
                                                .'- 1：表示开启过。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'IsFirstOpenQps' => [
                                            'description' => '实例是否开启过95弹性QPS计费模式。取值：'."\n"
                                                ."\n"
                                                .'- 0：表示未开启过。'."\n"
                                                .'- 1：表示开启过。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'Ip' => [
                                            'description' => 'DDoS高防实例的IP。',
                                            'type' => 'string',
                                            'example' => '203.199.XX.XX',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"A0AF40CC-814A-5A86-AEAA-6F19E88B8A39\\",\\n  \\"Instances\\": [\\n    {\\n      \\"Status\\": 1,\\n      \\"IpMode\\": \\"fnat\\",\\n      \\"DebtStatus\\": 0,\\n      \\"Edition\\": 9,\\n      \\"IpVersion\\": \\"Ipv4\\",\\n      \\"ExpireTime\\": 1640361600000,\\n      \\"Remark\\": \\"doc-test\\",\\n      \\"CreateTime\\": 1637751953000,\\n      \\"Enabled\\": 1,\\n      \\"InstanceId\\": \\"ddoscoo-cn-7pp2g9ed****\\",\\n      \\"IsFirstOpenBw\\": 0,\\n      \\"IsFirstOpenQps\\": 0,\\n      \\"Ip\\": \\"203.199.XX.XX\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstancesResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>A0AF40CC-814A-5A86-AEAA-6F19E88B8A39</RequestId>\\n    <Instances>\\n        <Status>1</Status>\\n        <IpMode>fnat</IpMode>\\n        <DebtStatus>0</DebtStatus>\\n        <Edition>9</Edition>\\n        <IpVersion>Ipv4</IpVersion>\\n        <ExpireTime>1640361600000</ExpireTime>\\n        <Remark>doc-test</Remark>\\n        <CreateTime>1637751953000</CreateTime>\\n        <Enabled>1</Enabled>\\n        <InstanceId>ddoscoo-cn-7pp2g9ed****</InstanceId>\\n        <IsFirstOpenBw>0</IsFirstOpenBw>\\n    </Instances>\\n</DescribeInstancesResponse>","errorExample":""}]',
            'title' => '分页查询新BGP高防实例信息列表',
            'summary' => '查询DDoS高防实例的详情列表。',
            'description' => '本接口用于分页查询当前阿里云账号拥有的DDoS高防实例的详情，例如，实例的ID、版本、到期时间、业务转发状态等。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
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
            ],
            'parameters' => [
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询的DDoS高防实例的ID。'."\n"
                                ."\n"
                                .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-zvp2eibz****',
                        ],
                        'required' => true,
                        'maxItems' => 100,
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
                                'example' => '4E3A9B5F-5DDB-593D-A1E6-F1F451DB5E0B',
                            ],
                            'InstanceSpecs' => [
                                'description' => 'DDoS高防实例的规格配置列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'BaseBandwidth' => [
                                            'description' => '基础防护带宽。单位：Gbps。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '30',
                                        ],
                                        'QpsLimit' => [
                                            'description' => '正常业务QPS。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3000',
                                        ],
                                        'BandwidthMbps' => [
                                            'description' => '正常业务带宽。单位：Mbps。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '100',
                                        ],
                                        'ElasticBw' => [
                                            'description' => '弹性业务带宽。单位：Mbps。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '300',
                                        ],
                                        'DefenseCount' => [
                                            'description' => '本月可用高级防护的次数。**-1**表示无限次。'."\n"
                                                ."\n\n"
                                                .'> 只有当请求参数**RegionId**为**ap-southeast-1**（表示查询DDoS高防非中国内地实例）时，才会返回该参数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'SiteLimit' => [
                                            'description' => '实例可防护站点的数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                        ],
                                        'PortLimit' => [
                                            'description' => '实例可防护端口的数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '50',
                                        ],
                                        'ElasticBandwidth' => [
                                            'description' => '弹性防护带宽。单位：Gbps。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '30',
                                        ],
                                        'FunctionVersion' => [
                                            'description' => '实例的功能套餐类型。取值：'."\n"
                                                ."\n"
                                                .'- **default**：表示标准功能套餐。'."\n"
                                                .'- **enhance**：表示增强功能套餐。'."\n"
                                                .'- **cnhk**：表示加速线路。'."\n"
                                                .'- **cnhk_default**：表示安全加速线路标准功能。'."\n"
                                                .'- **cnhk_enhance**：表示安全加速线路增强功能。'."\n",
                                            'type' => 'string',
                                            'example' => 'default',
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'ddoscoo-cn-zvp2eibz****',
                                        ],
                                        'DomainLimit' => [
                                            'description' => '实例可防护域名的数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '50',
                                        ],
                                        'ElasticBwModel' => [
                                            'description' => '实例的弹性业务带宽的计费模式。取值：'."\n"
                                                ."\n"
                                                .'- **day**：表示日95计费模式。'."\n"
                                                .'- **month**：表示月95计费模式。',
                                            'type' => 'string',
                                            'example' => 'day',
                                        ],
                                        'CpsLimit' => [
                                            'description' => '实例的新建连接数规格。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '5000',
                                        ],
                                        'ConnLimit' => [
                                            'description' => '实例的并发连接数规格。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '100000',
                                        ],
                                        'RealLimitBw' => [
                                            'description' => '实例业务带宽限速值。取值：0～15360，0表示不限速。单位：mbps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'ElasticQpsMode' => [
                                            'description' => '实例的弹性QPS的计费模式。取值：'."\n"
                                                ."\n"
                                                .'- **day**：表示日95计费模式。'."\n"
                                                .'- **month**：表示月95计费模式。',
                                            'type' => 'string',
                                            'example' => 'day',
                                        ],
                                        'ElasticQps' => [
                                            'description' => '弹性QPS。单位：Qps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4E3A9B5F-5DDB-593D-A1E6-F1F451DB5E0B\\",\\n  \\"InstanceSpecs\\": [\\n    {\\n      \\"BaseBandwidth\\": 30,\\n      \\"QpsLimit\\": 3000,\\n      \\"BandwidthMbps\\": 100,\\n      \\"ElasticBw\\": 300,\\n      \\"DefenseCount\\": 2,\\n      \\"SiteLimit\\": 5,\\n      \\"PortLimit\\": 50,\\n      \\"ElasticBandwidth\\": 30,\\n      \\"FunctionVersion\\": \\"default\\",\\n      \\"InstanceId\\": \\"ddoscoo-cn-zvp2eibz****\\",\\n      \\"DomainLimit\\": 50,\\n      \\"ElasticBwModel\\": \\"day\\",\\n      \\"CpsLimit\\": 5000,\\n      \\"ConnLimit\\": 100000,\\n      \\"RealLimitBw\\": 0,\\n      \\"ElasticQpsMode\\": \\"day\\",\\n      \\"ElasticQps\\": 10\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询DDoS高防实例的规格信息',
            'summary' => '查询DDoS高防实例的规格配置。',
            'description' => '本接口用于批量查询DDoS高防实例的规格配置，例如，实例的业务带宽、防护带宽、功能套餐版本、支持防护的域名和端口数量等。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
        ],
        'DescribeInstanceDetails' => [
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
                'abilityTreeCode' => '106149',
                'abilityTreeNodes' => [
                    'FEATUREddosMHU3MF',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询的DDoS高防实例的ID。'."\n"
                                ."\n"
                                .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-zvp2eibz****',
                        ],
                        'required' => true,
                        'maxItems' => 100,
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
                                'example' => '3C814429-21A5-4673-827E-FDD19DC75681',
                            ],
                            'InstanceDetails' => [
                                'description' => 'DDoS高防实例的IP和线路信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Line' => [
                                            'description' => 'DDoS高防实例的防护线路。',
                                            'type' => 'string',
                                            'example' => 'coop-line-001',
                                        ],
                                        'InstanceId' => [
                                            'description' => 'DDoS高防实例ID。',
                                            'type' => 'string',
                                            'example' => 'ddoscoo-cn-zvp2eibz****',
                                        ],
                                        'EipInfos' => [
                                            'description' => 'DDoS高防实例的IP信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Status' => [
                                                        'description' => 'DDoS高防IP的状态。取值：'."\n"
                                                            ."\n"
                                                            .'- **normal**：表示正常。'."\n"
                                                            .'- **expired**：表示已过期。'."\n"
                                                            .'- **defense**：表示清洗中。'."\n"
                                                            .'- **blackhole**：表示黑洞中。'."\n"
                                                            .'- **punished**：表示处罚中。',
                                                        'type' => 'string',
                                                        'example' => 'normal',
                                                    ],
                                                    'IpMode' => [
                                                        'description' => 'IP转发模式。取值：'."\n"
                                                            ."\n"
                                                            .'- **fnat**：表示源站和客户端的IP版本一致，即IPv4地址客户端请求转发到IPv4地址源站、IPv6地址客户端请求转发到IPv6地址源站。'."\n"
                                                            .'- **v6tov4**：表示IPv6地址客户端请求转发到IPv4地址源站。'."\n",
                                                        'type' => 'string',
                                                        'example' => 'fnat',
                                                    ],
                                                    'Eip' => [
                                                        'description' => 'DDoS高防IP地址。',
                                                        'type' => 'string',
                                                        'example' => '203.117.XX.XX',
                                                    ],
                                                    'IpVersion' => [
                                                        'description' => 'IP协议版本。取值：'."\n"
                                                            ."\n"
                                                            .'- **Ipv4**：表示IPv4协议。'."\n"
                                                            .'- **Ipv6**：表示IPv6协议。'."\n",
                                                        'type' => 'string',
                                                        'example' => 'Ipv4',
                                                    ],
                                                    'CertConfigured' => [
                                                        'description' => '是否配置了自定义证书。',
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                    'TlsVersion' => [
                                                        'description' => '自定义配置的TLS版本。',
                                                        'type' => 'string',
                                                        'example' => 'tls1.2',
                                                    ],
                                                    'Ssl13Enabled' => [
                                                        'description' => '是否支持TLS1.3版本。',
                                                        'type' => 'boolean',
                                                        'example' => 'false',
                                                    ],
                                                    'FunctionVersion' => [
                                                        'description' => '实例类型。',
                                                        'type' => 'string',
                                                        'example' => 'default',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3C814429-21A5-4673-827E-FDD19DC75681\\",\\n  \\"InstanceDetails\\": [\\n    {\\n      \\"Line\\": \\"coop-line-001\\",\\n      \\"InstanceId\\": \\"ddoscoo-cn-zvp2eibz****\\",\\n      \\"EipInfos\\": [\\n        {\\n          \\"Status\\": \\"normal\\",\\n          \\"IpMode\\": \\"fnat\\",\\n          \\"Eip\\": \\"203.117.XX.XX\\",\\n          \\"IpVersion\\": \\"Ipv4\\",\\n          \\"CertConfigured\\": true,\\n          \\"TlsVersion\\": \\"tls1.2\\",\\n          \\"Ssl13Enabled\\": false,\\n          \\"FunctionVersion\\": \\"default\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceDetailsResponse>\\n    <RequestId>3C814429-21A5-4673-827E-FDD19DC75681</RequestId>\\n    <InstanceDetails>\\n        <Line>coop-line-001</Line>\\n        <InstanceId>ddoscoo-cn-mp91j1ao****</InstanceId>\\n        <EipInfos>\\n            <Status>normal</Status>\\n            <IpMode>fnat</IpMode>\\n            <Eip>203.117.XX.XX</Eip>\\n            <IpVersion>Ipv4</IpVersion>\\n        </EipInfos>\\n    </InstanceDetails>\\n</DescribeInstanceDetailsResponse>","errorExample":""}]',
            'title' => '查询DDoS高防实例的IP和线路信息',
            'summary' => '查询DDoS高防实例的IP和线路信息。',
            'description' => '本接口用于查询DDoS高防实例的IP和线路信息，例如，实例的IP地址、状态、防护线路等。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
        ],
        'ModifyElasticBizQps' => [
            'summary' => '设置DDoS高防实例的弹性QPS和模式。',
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
                'abilityTreeCode' => '172640',
                'abilityTreeNodes' => [
                    'FEATUREddosMHU3MF',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性QPS的计费模式。取值：'."\n"
                            .'- **month**：月95模式'."\n"
                            .'- **day**：日95模式',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'month',
                    ],
                ],
                [
                    'name' => 'OpsElasticQps',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性QPS值。'."\n"
                            .'> 中国内地开启默认300000QPS，非中国内地开启默认150000QPS。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '300000',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","type":"json"}]',
            'title' => '修改指定实例的弹性QPS',
            'description' => '目前仅支持IPV4实例开启弹性QPS。',
        ],
        'ModifyQpsMode' => [
            'summary' => '切换弹性业务带宽的95计费模式。',
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
                'abilityTreeCode' => '169181',
                'abilityTreeNodes' => [
                    'FEATUREddosMHU3MF',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-7e225i41****',
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'QPS计费模式。取值：'."\n"
                            .'- **month**：月95模式'."\n"
                            .'- **day**：日95模式',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'month',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '48859E14-A9FB-4100-99FF-AAB75CA46776',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"48859E14-A9FB-4100-99FF-AAB75CA46776\\"\\n}","type":"json"}]',
            'title' => '切换弹性QPS计费模式',
        ],
        'CreateWebRule' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。'."\n"
                            ."\n"
                            .'关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要接入DDoS高防进行防护的网站域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'RsType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源站服务器的地址类型。取值：'."\n"
                            .'- **0**：表示源站服务器的IP地址。'."\n"
                            .'- **1**：表示源站服务器的域名地址。通常适用于源站和高防之间还部署有其他代理服务（例如WAF）的场景，具体指代理服务的跳转地址（例如WAF CNAME地址）。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Rules',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务转发规则的详细配置。使用JSON数组转化的字符串格式表示。JSON数组中的每个元素是一个JSON结构体，包含以下字段：'."\n"
                            ."\n"
                            .'- **ProxyRules**：JSONArray类型 | 必选 | 源站服务器信息，包括端口号和服务器地址。数组中每个元素是一个JSON结构体，包含以下字段：'."\n"
                            .'    - **ProxyPort**：Integer类型 | 必选 | 协议对应的端口号。'."\n"
                            .'    - **RealServers**：StringArray类型 | 必选 | 服务器地址。'."\n"
                            ."\n"
                            .'- **ProxyType**：String类型 | 必选 | 网站协议类型。取值：**http** | **https** | **websocket** | **websockets**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"ProxyRules":[{"ProxyPort":443,"RealServers":["192.1.XX.XX"]}],"ProxyType":"https"}]',
                    ],
                ],
                [
                    'name' => 'HttpsExt',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'HTTPS高级设置，仅在网站协议类型支持HTTPS（**ProxyType**包含**https**）时生效。使用JSON结构体转化的字符串格式表示，JSON结构体包含以下字段：'."\n"
                            ."\n"
                            .'- **Http2https**：Integer类型 | 可选 | 是否开启HTTPS的强制跳转功能，取值：**0**（表示关闭） | **1**（表示开启），默认关闭。'."\n"
                            ."\n"
                            .'    适用于您的网站同时支持HTTP和HTTPS协议。开启该设置后，所有HTTP请求将强制转换为HTTPS请求，且默认跳转到443端口。'."\n"
                            ."\n"
                            .'- **Https2http**：Integer类型 | 可选 | 是否开启HTTP回源功能，取值：**0**（表示关闭） | **1**（表示开启），默认关闭。'."\n"
                            ."\n"
                            .'    适用于您的网站不支持HTTPS回源。开启该设置后，所有HTTPS协议请求将通过HTTP回源（Websockets协议会通过Websocket回源），且默认回源端口为80。'."\n"
                            ."\n"
                            .'- **Http2**：Integer类型 | 可选 | 是否启用HTTP2.0协议类型，取值：**0**（表示关闭） | **1**（表示开启），默认关闭。'."\n"
                            ."\n"
                            .'    开启该设置后，协议版本为HTTP2.0。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"Http2":1,"Http2https":1,"Https2http":1}',
                    ],
                ],
                [
                    'name' => 'DefenseId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要关联的防护ID。该参数适用于其他云服务（例如对象存储OSS）集成了DDoS高防的场景。'."\n"
                            ."\n"
                            .'> 该参数在内部测试中，暂时请勿使用。'."\n"
                            ."\n"
                            .'示例：如果您的OSS服务集成了DDoS高防，则高防会为OSS生产账号分配一组IP资源池，每一个IP资源对应唯一的防护ID。防护ID是一个CNAME地址，该CNAME默认解析到对应的高防IP。防护ID（即CNAME）可以通过解析复用同一个IP，便于灵活调度。'."\n"
                            ."\n"
                            .'> 不允许同时填写**InstanceIds**和**DefenseId**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testid',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要关联的DDoS高防实例的ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要关联的DDoS高防实例的ID。不设置该参数表示只添加网站域名，不关联高防实例。'."\n"
                                ."\n"
                                .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-i7m27nf3****',
                        ],
                        'required' => false,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 100,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '9EC62E89-BD30-4FCD-9CB8-FA53865FF0D7',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9EC62E89-BD30-4FCD-9CB8-FA53865FF0D7\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateWebRuleResponse>\\n    <RequestId>9EC62E89-BD30-4FCD-9CB8-FA53865FF0D7</RequestId>\\n</CreateWebRuleResponse>","errorExample":""}]',
            'title' => '创建一条网站业务转发规则',
            'summary' => '创建一条网站业务转发规则。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteWebRule' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。'."\n"
                            ."\n"
                            .'关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的网站业务的域名。'."\n"
                            ."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有已配置网站业务转发规则的域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
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
                                'example' => '9EC62E89-BD30-4FCD-9CB8-FA53865FF0D7',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9EC62E89-BD30-4FCD-9CB8-FA53865FF0D7\\"\\n}","type":"json"}]',
            'title' => '删除网站业务转发规则',
            'summary' => '删除网站业务转发规则。',
        ],
        'ModifyWebRule' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。'."\n"
                            ."\n"
                            .'关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要操作的网站业务的域名。'."\n"
                            ."\n"
                            .'> 域名必须已经配置过网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有已经配置过网站业务转发规则的域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'ProxyTypes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务转发规则的协议信息。使用JSON数组转化的字符串格式表示。JSON数组中的每个元素是一个JSON结构体，包含以下字段：'."\n"
                            ."\n"
                            .'- **ProxyType**：String类型 | 必选 | 网站协议类型。取值：**http** | **https** | **websocket** | **websockets**。'."\n"
                            .'- **ProxyPorts**：array类型 | 必选 | 协议对应的端口号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"ProxyType":"https","ProxyPorts":[443]}]',
                    ],
                ],
                [
                    'name' => 'RsType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源站服务器的地址类型。取值：'."\n"
                            ."\n"
                            .'- **0**：表示源站服务器的IP地址。'."\n"
                            .'- **1**：表示源站服务器的域名地址。通常适用于源站和高防之间还部署有其他代理服务（例如WAF）的场景，具体指代理服务的跳转地址（例如WAF CNAME地址）。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'HttpsExt',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'HTTPS高级设置，仅在网站协议类型支持HTTPS（**ProxyType**包含**https**）时生效。使用JSON结构体转化的字符串格式表示，JSON结构体包含以下字段：'."\n"
                            ."\n"
                            .'- **Http2https**：Integer类型 | 可选 | 是否开启HTTPS的强制跳转功能，取值：**0**（表示关闭） | **1**（表示开启），默认关闭。'."\n"
                            ."\n"
                            .'    适用于您的网站同时支持HTTP和HTTPS协议。开启该设置后，所有HTTP请求将强制转换为HTTPS请求，且默认跳转到443端口。'."\n"
                            ."\n"
                            .'- **Https2http**：Integer类型 | 可选 | 是否开启HTTP回源功能，取值：**0**（表示关闭） | **1**（表示开启），默认关闭。'."\n"
                            ."\n"
                            .'    适用于您的网站不支持HTTPS回源。开启该设置后，所有HTTPS协议请求将通过HTTP回源（Websockets协议会通过Websocket回源），且默认回源端口为80。'."\n"
                            ."\n"
                            .'- **Http2**：Integer类型 | 可选 | 是否启用HTTP2.0协议类型，取值：**0**（表示关闭） | **1**（表示开启），默认关闭。'."\n"
                            ."\n"
                            .'    开启该设置后，协议版本为HTTP2.0。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"Http2":1,"Http2https":1,"Https2http":1}',
                    ],
                ],
                [
                    'name' => 'RealServers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '源站服务器地址列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '源站服务器地址。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '192.XX.XX.2',
                        ],
                        'required' => true,
                        'example' => '1.xxx.xxx.1',
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要关联的DDoS高防实例的ID列表。最多支持关联100个实例。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要关联的DDoS高防实例的ID。'."\n"
                                ."\n"
                                .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-i7m27nf3****',
                        ],
                        'required' => false,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 20,
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
                                'example' => 'CB3261D2-7D1B-4ADA-9E98-A200B2CDA2DC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CB3261D2-7D1B-4ADA-9E98-A200B2CDA2DC\\"\\n}","type":"json"}]',
            'title' => '修改已经创建的网站业务转发规则',
            'summary' => '修改已经创建的网站业务转发规则。',
        ],
        'ModifyTlsConfig' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'Config',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'TLS安全策略的详细信息，使用JSON格式的字符串表达，具体结构如下。'."\n"
                            .'- **ssl_protocols**：String类型，必选，TLS版本。取值：'."\n"
                            .'    - **tls1.0**：支持TLS1.0及以上'."\n"
                            .'    - **tls1.1**：支持TLS1.1及以上'."\n"
                            .'    - **tls1.2**：支持TLS1.2及以上'."\n"
                            .'- **ssl_ciphers**：String类型，必选，加密套件类型。取值：'."\n"
                            .'    - **all**：全部加密套件，包含强加密套件和弱加密套件'."\n"
                            .'    - **improved**：增强加密套件'."\n"
                            .'    - **strong**：强加密套件'."\n"
                            .'    - **default**：默认，仅包含强加密套件',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"ssl_protocols":"tls1.0","ssl_ciphers":"all"}',
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
                                'example' => 'C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyTlsConfigResponse>\\n    <RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\n</ModifyTlsConfigResponse>","errorExample":""}]',
            'title' => '编辑网站业务转发规则的TLS安全策略',
            'summary' => '编辑网站业务转发规则的TLS安全策略。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyHttp2Enable' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则且关联了增强功能套餐的DDoS高防实例。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'Enable',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'HTTP2.0的开关状态。取值：'."\n"
                            .'- **0**：关闭'."\n"
                            .'- **1**：开启',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyHttp2EnableResponse>\\r\\n\\t<RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\r\\n</ModifyHttp2EnableResponse>","errorExample":""}]',
            'title' => '设置网站业务转发规则的HTTP2.0开关状态',
            'summary' => '设置网站业务转发规则的HTTP2.0开关状态。',
            'description' => '> 该接口仅适用于DDoS高防（中国内地）服务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyWebAccessMode' => [
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
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'AccessMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的接入模式。取值：'."\n"
                            .'- **0**：A记录'."\n"
                            .'- **1**：高防模式'."\n"
                            .'- **2**：回源模式',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '2',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyWebAccessModeResponse>\\r\\n      <RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</ModifyWebAccessModeResponse>","errorExample":""}]',
            'title' => '设置网站业务的接入模式',
            'summary' => '设置网站业务的接入模式。',
        ],
        'ModifyCnameReuse' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'Cname',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要复用的CNAME值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4o6ep6q217k9****.aliyunddos0004.com',
                    ],
                ],
                [
                    'name' => 'Enable',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启CNAME复用。取值：'."\n"
                            .'- **0**：关闭'."\n"
                            .'- **1**：开启',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyCnameReuseResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</ModifyCnameReuseResponse>","errorExample":""}]',
            'title' => '为网站业务开启或关闭CNAME复用',
            'summary' => '为网站业务开启或关闭CNAME复用。',
            'description' => '> 该接口仅适用于DDoS高防（非中国内地）服务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeWebRules' => [
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
                'abilityTreeCode' => '106211',
                'abilityTreeNodes' => [
                    'FEATUREddos64TBV6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的网站域名。'."\n"
                            ."\n"
                            .'> 域名必须已经配置过网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有已经配置过网站业务转发规则的域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'Cname',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的CNAME地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'kzmk7b8tt351****.aliyunddos1014****',
                        'maxLength' => 128,
                        'minLength' => 3,
                    ],
                ],
                [
                    'name' => 'QueryDomainPattern',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询匹配模式。取值：'."\n"
                            .'- **fuzzy**（默认）：表示模糊查询。'."\n"
                            .'- **exact**：表示精确查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'exact',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页包含转发规则的数量。取值范围：**1**~**10**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询的DDoS高防实例的ID。N的最大值：200，即最多可配置200个DDoS高防实例，实例ID之间用半角逗号（,）隔开。'."\n"
                                ."\n"
                                .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-i7m27nf3****',
                        ],
                        'required' => false,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 100,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '查询到的网站业务转发规则的总数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '0F5B72DD-96F4-423A-B12B-A5151DD746B8',
                            ],
                            'WebRules' => [
                                'description' => '网站业务转发规则的配置。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Domain' => [
                                            'description' => '网站域名。',
                                            'type' => 'string',
                                            'example' => 'example.com',
                                        ],
                                        'Http2HttpsEnable' => [
                                            'description' => '是否开启了HTTPS强制跳转功能。取值：'."\n"
                                                ."\n"
                                                .'- **true**：表示已开启。'."\n"
                                                .'- **false**：表示未开启。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'SslProtocols' => [
                                            'description' => '支持的TLS协议版本。取值：'."\n"
                                                ."\n"
                                                .'- **tls1.0**：表示支持TLS 1.0及以上版本。'."\n"
                                                .'- **tls1.1**：表示支持TLS 1.1及以上版本。'."\n"
                                                .'- **tls1.2**：表示支持TLS 1.2及以上版本。',
                                            'type' => 'string',
                                            'example' => 'tls1.1',
                                        ],
                                        'PunishReason' => [
                                            'description' => '域名受到违规处罚的原因。取值：'."\n"
                                                .'- **1**：表示域名未履行ICP备案。'."\n"
                                                .'- **2**：表示域名经营的业务不符合监管要求。'."\n"
                                                ."\n"
                                                .'如果同时包含原因**1**和**2**，该参数返回**2**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'CcTemplate' => [
                                            'description' => '频率控制防护（CC防护）的模式。取值：'."\n"
                                                .'- **default**：表示正常模式。'."\n"
                                                .'- **gf_under_attack**：表示攻击紧急模式。'."\n"
                                                .'- **gf_sos_verify**：表示严格模式。'."\n"
                                                .'- **gf_sos_enhance**：表示超级严格模式。',
                                            'type' => 'string',
                                            'example' => 'default',
                                        ],
                                        'CcEnabled' => [
                                            'description' => '是否开启了频率控制防护（CC防护）。取值：'."\n"
                                                .'- **true**：表示已开启。'."\n"
                                                .'- **false**：表示未开启。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'SslCiphers' => [
                                            'description' => '加密套件的类型。取值：'."\n"
                                                ."\n"
                                                .'- **default**：表示自定义加密套件。'."\n"
                                                .'- **all**：表示全部加密套件，包含强加密套件和弱加密套件。'."\n"
                                                .'- **strong**：表示强加密套件。',
                                            'type' => 'string',
                                            'example' => 'default',
                                        ],
                                        'Ssl13Enabled' => [
                                            'description' => '是否开启了TLS 1.3协议支持。取值：'."\n"
                                                .'- **true**：表示已开启。'."\n"
                                                .'- **false**：表示未开启。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'CcRuleEnabled' => [
                                            'description' => '是否开启了自定义频率控制防护（CC防护）。取值：'."\n"
                                                .'- **true**：表示已开启。'."\n"
                                                .'- **false**：表示未开启。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'OcspEnabled' => [
                                            'description' => '是否启用了OCSP（Online Certificate Status Protocol）功能。取值：'."\n"
                                                .'- **true**：表示已开启。'."\n"
                                                .'- **false**：表示未开启。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'PunishStatus' => [
                                            'description' => '域名是否受到违规处罚。取值：'."\n"
                                                ."\n"
                                                .'- **true**：表示已受到违规处罚。您可以通过**PunishReason**查看受到违规处罚的具体原因。'."\n"
                                                .'- **false**：表示未受到违规处罚。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'ProxyEnabled' => [
                                            'description' => '网站业务转发是否开启。取值：'."\n"
                                                ."\n"
                                                .'- **true**：表示已开启。'."\n"
                                                .'- **false**：表示未开启。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'CertName' => [
                                            'description' => '证书名称。',
                                            'type' => 'string',
                                            'example' => 'testcert',
                                        ],
                                        'PolicyMode' => [
                                            'description' => '回源负载算法的类型。取值：'."\n"
                                                ."\n"
                                                .'- **ip_hash**：表示IP Hash算法。根据请求来源IP进行HASH映射，将同一个IP的所有请求定向到一个源站服务器。'."\n"
                                                .'- **rr**：表示轮转算法。将所有请求轮流分配给不同源站服务器。'."\n"
                                                .'- **least_time**：表示Least Time算法。该算法通过智能DNS解析能力，保证业务流量从接入防护节点到转发回源站服务器整个链路的时延最短。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'ip_hash',
                                        ],
                                        'Cname' => [
                                            'description' => '网站域名对应的DDoS高防CNAME地址。',
                                            'type' => 'string',
                                            'example' => 'kzmk7b8tt351****.aliyunddos1014****',
                                        ],
                                        'Http2Enable' => [
                                            'description' => '是否开启了HTTP 2.0协议支持。取值：'."\n"
                                                .'- **true**：表示已开启。'."\n"
                                                .'- **false**：表示未开启。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Https2HttpEnable' => [
                                            'description' => '是否开启了HTTP回源功能。取值：'."\n"
                                                ."\n"
                                                .'- **true**：表示已开启。'."\n"
                                                .'- **false**：表示未开启。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'ProxyTypes' => [
                                            'description' => '转发协议和端口配置。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'ProxyType' => [
                                                        'description' => '转发协议类型。取值：'."\n"
                                                            .'- **http**：表示HTTP协议。'."\n"
                                                            .'- **https**：表示HTTPS协议。'."\n"
                                                            .'- **websocket**：表示WebSocket协议。'."\n"
                                                            .'- **websockets**：表示WebSockets协议。',
                                                        'type' => 'string',
                                                        'example' => 'https',
                                                    ],
                                                    'ProxyPorts' => [
                                                        'description' => '端口列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '端口。',
                                                            'type' => 'string',
                                                            'example' => '443',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'RealServers' => [
                                            'description' => '源站服务器地址信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'RsType' => [
                                                        'description' => '源站服务器地址的类型。取值：'."\n"
                                                            ."\n"
                                                            .'- **0**：表示源站服务器的IP地址。'."\n"
                                                            .'- **1**：表示源站服务器的域名地址。通常适用于源站和高防之间还部署有其他代理服务（例如WAF）的场景，具体指代理服务的跳转地址（例如WAF CNAME地址）。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '0',
                                                    ],
                                                    'RealServer' => [
                                                        'description' => '源站服务器地址。',
                                                        'type' => 'string',
                                                        'example' => '192.0.XX.XX',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'WhiteList' => [
                                            'description' => 'IP白名单（针对域名）列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '针对该域名的白名单IP。'."\n"
                                                    ."\n"
                                                    .'> 仅在您已经为该域名配置了IP白名单（针对域名）时返回该结果。您可以调用[ConfigWebIpSet](~~157469~~)为网站域名配置IP黑白名单。',
                                                'type' => 'string',
                                                'example' => '192.168.XX.XX',
                                            ],
                                        ],
                                        'BlackList' => [
                                            'description' => 'IP黑名单（针对域名）列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '针对该域名的黑名单IP。'."\n"
                                                    ."\n"
                                                    .'> 仅在您已经为该域名配置了IP黑名单（针对域名）时返回该结果。您可以调用[ConfigWebIpSet](~~157469~~)为网站域名配置IP黑白名单。',
                                                'type' => 'string',
                                                'example' => '192.0.XX.XX',
                                            ],
                                        ],
                                        'CustomCiphers' => [
                                            'description' => '自定义加密套件列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '自定义加密套件。',
                                                'type' => 'string',
                                                'example' => 'ECDHE-ECDSA-AES128-GCM-SHA256',
                                            ],
                                        ],
                                        'GmCert' => [
                                            'description' => '国密相关配置。',
                                            'type' => 'object',
                                            'properties' => [
                                                'CertId' => [
                                                    'description' => '国密标准证书的ID。',
                                                    'type' => 'string',
                                                    'example' => '725****',
                                                ],
                                                'GmEnable' => [
                                                    'description' => '是否启用了国密验证功能。'."\n"
                                                        ."\n"
                                                        .'- 0：关闭'."\n"
                                                        .'- 1：开启',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'GmOnly' => [
                                                    'description' => '是否开启了仅支持国密客户端访问。'."\n"
                                                        ."\n"
                                                        .'- 0：关闭'."\n"
                                                        .'- 1：开启',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                            ],
                                        ],
                                        'CertRegion' => [
                                            'description' => '证书区域。取值：'."\n"
                                                .'- cn-hangzhou：中国大陆地区（默认）'."\n"
                                                .'- ap-southeast-1：非中国大陆地区。',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"0F5B72DD-96F4-423A-B12B-A5151DD746B8\\",\\n  \\"WebRules\\": [\\n    {\\n      \\"Domain\\": \\"example.com\\",\\n      \\"Http2HttpsEnable\\": true,\\n      \\"SslProtocols\\": \\"tls1.1\\",\\n      \\"PunishReason\\": 1,\\n      \\"CcTemplate\\": \\"default\\",\\n      \\"CcEnabled\\": true,\\n      \\"SslCiphers\\": \\"default\\",\\n      \\"Ssl13Enabled\\": false,\\n      \\"CcRuleEnabled\\": false,\\n      \\"OcspEnabled\\": false,\\n      \\"PunishStatus\\": true,\\n      \\"ProxyEnabled\\": true,\\n      \\"CertName\\": \\"testcert\\",\\n      \\"PolicyMode\\": \\"ip_hash\\",\\n      \\"Cname\\": \\"kzmk7b8tt351****.aliyunddos1014****\\",\\n      \\"Http2Enable\\": true,\\n      \\"Https2HttpEnable\\": true,\\n      \\"ProxyTypes\\": [\\n        {\\n          \\"ProxyType\\": \\"https\\",\\n          \\"ProxyPorts\\": [\\n            \\"443\\"\\n          ]\\n        }\\n      ],\\n      \\"RealServers\\": [\\n        {\\n          \\"RsType\\": 0,\\n          \\"RealServer\\": \\"192.0.XX.XX\\"\\n        }\\n      ],\\n      \\"WhiteList\\": [\\n        \\"192.168.XX.XX\\"\\n      ],\\n      \\"BlackList\\": [\\n        \\"192.0.XX.XX\\"\\n      ],\\n      \\"CustomCiphers\\": [\\n        \\"ECDHE-ECDSA-AES128-GCM-SHA256\\"\\n      ],\\n      \\"GmCert\\": {\\n        \\"CertId\\": \\"725****\\",\\n        \\"GmEnable\\": 1,\\n        \\"GmOnly\\": 1\\n      },\\n      \\"CertRegion\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeWebRulesResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>0F5B72DD-96F4-423A-B12B-A5151DD746B8</RequestId>\\n    <WebRules>\\n        <Domain>example.com</Domain>\\n        <Http2HttpsEnable>true</Http2HttpsEnable>\\n        <SslProtocols>tls1.1</SslProtocols>\\n        <PunishReason>1</PunishReason>\\n        <CcTemplate>default</CcTemplate>\\n        <CcEnabled>true</CcEnabled>\\n        <SslCiphers>default</SslCiphers>\\n        <Ssl13Enabled>false</Ssl13Enabled>\\n        <CcRuleEnabled>false</CcRuleEnabled>\\n        <OcspEnabled>false</OcspEnabled>\\n        <PunishStatus>true</PunishStatus>\\n        <ProxyEnabled>true</ProxyEnabled>\\n        <CertName>testcert</CertName>\\n        <PolicyMode>ip_hash</PolicyMode>\\n        <Cname>kzmk7b8tt351****.aliyunddos1014****</Cname>\\n        <Http2Enable>true</Http2Enable>\\n        <Https2HttpEnable>true</Https2HttpEnable>\\n        <ProxyTypes>\\n            <ProxyType>https</ProxyType>\\n            <ProxyPorts>443</ProxyPorts>\\n        </ProxyTypes>\\n        <RealServers>\\n            <RsType>0</RsType>\\n            <RealServer>192.0.XX.XX</RealServer>\\n        </RealServers>\\n        <WhiteList>192.168.XX.XX</WhiteList>\\n        <BlackList>192.0.XX.XX</BlackList>\\n        <CustomCiphers>ECDHE-ECDSA-AES128-GCM-SHA256</CustomCiphers>\\n        <GmCert>\\n            <CertId>725****</CertId>\\n            <GmEnable>1</GmEnable>\\n            <GmOnly>1</GmOnly>\\n        </GmCert>\\n    </WebRules>\\n</DescribeWebRulesResponse>","errorExample":""}]',
            'title' => '查询已经创建的网站业务转发规则',
            'summary' => '查询网站业务转发规则的配置。',
            'description' => '本接口用于分页查询您已创建的网站业务转发规则的配置，例如，转发协议类型、源站服务器地址、HTTPS配置、IP黑名单配置等。'."\n"
                ."\n"
                .'调用本接口前，您必须已经调用[CreateWebRule](~~157463~~)创建了网站业务转发规则。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为50次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeWebInstanceRelations' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domains',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '网站业务的域名列表。'."\n"
                            ."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'array',
                        'items' => [
                            'description' => '网站业务的域名。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'www.aliyun**.com',
                        ],
                        'required' => true,
                        'example' => 'www.aliyun.com',
                        'maxItems' => 20,
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
                                'example' => '0222382B-5FE5-4FF7-BC9B-97EE31D58818',
                            ],
                            'WebInstanceRelations' => [
                                'description' => '网站业务关联的DDoS高防实例信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Domain' => [
                                            'description' => '网站域名。',
                                            'type' => 'string',
                                            'example' => 'www.aliyun.com',
                                        ],
                                        'InstanceDetails' => [
                                            'description' => '关联的DDoS高防实例信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'FunctionVersion' => [
                                                        'description' => '功能套餐类型。取值：'."\n"
                                                            .'- **default**：标准功能'."\n"
                                                            .'- **enhance**：增强功能'."\n",
                                                        'type' => 'string',
                                                        'example' => 'enhance',
                                                    ],
                                                    'InstanceId' => [
                                                        'description' => 'DDoS高防实例ID。',
                                                        'type' => 'string',
                                                        'example' => 'ddoscoo-cn-0pp163pd****',
                                                    ],
                                                    'EipList' => [
                                                        'description' => 'DDoS高防IP列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => 'DDoS高防IP。',
                                                            'type' => 'string',
                                                            'example' => '203.***.***.158',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0222382B-5FE5-4FF7-BC9B-97EE31D58818\\",\\n  \\"WebInstanceRelations\\": [\\n    {\\n      \\"Domain\\": \\"www.aliyun.com\\",\\n      \\"InstanceDetails\\": [\\n        {\\n          \\"FunctionVersion\\": \\"enhance\\",\\n          \\"InstanceId\\": \\"ddoscoo-cn-0pp163pd****\\",\\n          \\"EipList\\": [\\n            \\"203.***.***.158\\"\\n          ]\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeWebInstanceRelationsResponse>\\r\\n\\t<RequestId>0222382B-5FE5-4FF7-BC9B-97EE31D58818</RequestId>\\r\\n\\t<WebInstanceRelations>\\r\\n\\t\\t<InstanceDetails>\\r\\n\\t\\t\\t<EipList>203.***.***.158</EipList>\\r\\n\\t\\t\\t<InstanceId>ddoscoo-cn-0pp163pd****</InstanceId>\\r\\n\\t\\t\\t<FunctionVersion>enhance</FunctionVersion>\\r\\n\\t\\t</InstanceDetails>\\r\\n\\t\\t<InstanceDetails>\\r\\n\\t\\t\\t<EipList>203.***.***.38</EipList>\\r\\n\\t\\t\\t<InstanceId>ddoscoo-cn-45917cd3****</InstanceId>\\r\\n\\t\\t\\t<FunctionVersion>enhance</FunctionVersion>\\r\\n\\t\\t</InstanceDetails>\\r\\n\\t\\t<Domain>www.aliyun.com</Domain>\\r\\n\\t</WebInstanceRelations>\\r\\n</DescribeWebInstanceRelationsResponse>","errorExample":""}]',
            'title' => '查询网站业务关联的DDoS高防实例信息',
            'summary' => '查询网站业务关联的DDoS高防实例信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeCerts' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyun.com',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                            'Certs' => [
                                'description' => '网站业务的证书信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EndDate' => [
                                            'description' => '证书到期日期。字符串格式。',
                                            'type' => 'string',
                                            'example' => '2021-09-12',
                                        ],
                                        'DomainRelated' => [
                                            'description' => '证书是否关联域名。取值：'."\n"
                                                .'- **true**：已关联'."\n"
                                                .'- **false**：未关联',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'StartDate' => [
                                            'description' => '证书签发日期。字符串格式。',
                                            'type' => 'string',
                                            'example' => '2019-09-12',
                                        ],
                                        'Issuer' => [
                                            'description' => '证书颁发机构。',
                                            'type' => 'string',
                                            'example' => 'Symantec',
                                        ],
                                        'Name' => [
                                            'description' => '证书名称。',
                                            'type' => 'string',
                                            'example' => 'testcert',
                                        ],
                                        'Common' => [
                                            'description' => '证书关联的域名。',
                                            'type' => 'string',
                                            'example' => 'www.aliyun.com',
                                        ],
                                        'Id' => [
                                            'description' => '证书ID。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '81',
                                        ],
                                        'CertIdentifier' => [
                                            'description' => '全局证书ID，证书ID+"-cn-hangzhou"。如果证书ID=123，则CertIdentifier=“123-cn-hangzhou”。',
                                            'type' => 'string',
                                            'example' => '126345-ap-southeast-1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\",\\n  \\"Certs\\": [\\n    {\\n      \\"EndDate\\": \\"2021-09-12\\",\\n      \\"DomainRelated\\": true,\\n      \\"StartDate\\": \\"2019-09-12\\",\\n      \\"Issuer\\": \\"Symantec\\",\\n      \\"Name\\": \\"testcert\\",\\n      \\"Common\\": \\"www.aliyun.com\\",\\n      \\"Id\\": 81,\\n      \\"CertIdentifier\\": \\"126345-ap-southeast-1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeCertsResponse>\\r\\n      <RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n      <Certs>\\r\\n            <Id>81</Id>\\r\\n            <Name>testcert</Name>\\r\\n            <Common>www.aliyun.com</Common>\\r\\n            <DomainRelated>true</DomainRelated>\\r\\n            <Issuer>Symantec</Issuer>\\r\\n            <StartDate>2019-09-12</StartDate>\\r\\n            <EndDate>2021-09-12</EndDate>\\r\\n      </Certs>\\r\\n</DescribeCertsResponse>","errorExample":""}]',
            'title' => '查询适用于当前域名的所有证书列表',
            'summary' => '查询用户适用于当前域名的所有证书信息，而非当前使用的证书。',
            'description' => '该接口为查询配置高防域名适用所有证书，会出现一个域名对应多个证书。例如：通过精准域名查询到精准域名证书或泛域名证书。'."\n"
                .'> 如果您需要查询当前域名正在生效使用的证书您可以调用[DescribeWebRules](~~473610~~)查询获取CertName和CertRegion，然后调用证书中心的接口[ListUserCertificateOrder](~~411733~~)使用返回的CertName关联查询到对应的证书ID或其他详情。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeWebCustomPorts' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                            'WebCustomPorts' => [
                                'description' => '网站业务自定义端口信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ProxyType' => [
                                            'description' => '协议类型。取值：'."\n"
                                                .'- **http**'."\n"
                                                .'- **https**',
                                            'type' => 'string',
                                            'example' => 'http',
                                        ],
                                        'ProxyPorts' => [
                                            'description' => '可选端口范围。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '可选端口。',
                                                'type' => 'string',
                                                'example' => '8080',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\",\\n  \\"WebCustomPorts\\": [\\n    {\\n      \\"ProxyType\\": \\"http\\",\\n      \\"ProxyPorts\\": [\\n        \\"8080\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeWebCustomPortsResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n\\t<WebCustomPorts>\\r\\n\\t\\t<ProxyType>https</ProxyType>\\r\\n\\t\\t<ProxyPorts>443</ProxyPorts>\\r\\n\\t\\t<ProxyPorts>8443</ProxyPorts>\\r\\n\\t</WebCustomPorts>\\r\\n\\t<WebCustomPorts>\\r\\n\\t\\t<ProxyType>http</ProxyType>\\r\\n\\t\\t<ProxyPorts>80</ProxyPorts>\\r\\n\\t\\t<ProxyPorts>8080</ProxyPorts>\\r\\n\\t</WebCustomPorts>\\r\\n</DescribeWebCustomPortsResponse>\\r\\n\\t\\r\\n","errorExample":""}]',
            'title' => '查询网站业务自定义端口范围',
            'summary' => '查询DDoS高防支持的网站业务自定义端口范围。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeWebAccessMode' => [
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
                    'name' => 'Domains',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。'."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '网站业务的域名。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'www.test****.com',
                        ],
                        'required' => true,
                        'example' => 'www.aliyun.com',
                        'maxItems' => 20,
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                            'DomainModes' => [
                                'description' => '网站业务的接入模式信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'AccessMode' => [
                                            'description' => '接入模式。取值：'."\n"
                                                .'- **0**：A记录接入'."\n"
                                                .'- **1**：高防模式'."\n"
                                                .'- **2**：回源模式',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'Domain' => [
                                            'description' => '网站域名。',
                                            'type' => 'string',
                                            'example' => 'www.aliyun.com',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\",\\n  \\"DomainModes\\": [\\n    {\\n      \\"AccessMode\\": 0,\\n      \\"Domain\\": \\"www.aliyun.com\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeWebAccessModeResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n\\t<DomainModes>\\r\\n\\t\\t<Domain>www.aliyun.com</Domain>\\r\\n\\t\\t<AccessMode>0</AccessMode>\\r\\n\\t</DomainModes>\\r\\n</DescribeWebAccessModeResponse>","errorExample":""}]',
            'title' => '查询网站业务的接入模式',
            'summary' => '查询网站业务的接入模式。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeCnameReuses' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domains',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '网站业务的域名。N的最大值：200，即最多可查询200个网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'array',
                        'items' => [
                            'description' => '网站业务的域名。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'www.aliyun.com',
                        ],
                        'required' => true,
                        'example' => 'www.aliyun.com',
                        'maxItems' => 20,
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                            'CnameReuses' => [
                                'description' => 'CNAME复用信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Domain' => [
                                            'description' => '网站域名。',
                                            'type' => 'string',
                                            'example' => 'www.aliyun.com',
                                        ],
                                        'Cname' => [
                                            'description' => '复用的CNAME值。',
                                            'type' => 'string',
                                            'example' => '4o6ep6q217k9****.aliyunddos0004.com',
                                        ],
                                        'Enable' => [
                                            'description' => '是否已开启CNAME复用。取值：'."\n"
                                                .'- **0**：未开启'."\n"
                                                .'- **1**：已开启',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\",\\n  \\"CnameReuses\\": [\\n    {\\n      \\"Domain\\": \\"www.aliyun.com\\",\\n      \\"Cname\\": \\"4o6ep6q217k9****.aliyunddos0004.com\\",\\n      \\"Enable\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeCnameReusesResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n\\t<CnameReuses>\\r\\n\\t\\t<Domain>www.aliyun.com</Domain>\\r\\n\\t\\t<Cname>4o6ep6q217k9****.aliyunddos0004.com</Cname>\\r\\n\\t\\t<Enable>1</Enable>\\r\\n\\t</CnameReuses>\\r\\n</DescribeCnameReusesResponse>","errorExample":""}]',
            'title' => '查询网站业务的CNAME复用信息',
            'summary' => '查询网站业务的CNAME复用信息。',
            'description' => '> 该接口仅适用于DDoS高防（国际）服务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeL7RsPolicy' => [
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
                'abilityTreeCode' => '106157',
                'abilityTreeNodes' => [
                    'FEATUREddos64TBV6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。'."\n"
                            ."\n"
                            .'关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的网站业务的域名。'."\n"
                            ."\n"
                            .'> 域名必须已经配置过网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有已经配置过网站业务转发规则的域名。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'RealServers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的源站服务器地址列表。N的最大值：200，即最多可配置200个源站服务器地址。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询的源站服务器地址列表。N的最大值：200，即最多可配置200个源站服务器地址，服务器地址之间用半角逗号（,）隔开。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '1.***.***.1',
                        ],
                        'required' => false,
                        'example' => '1.***.***.1',
                        'maxItems' => 20,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ProxyMode' => [
                                'description' => '回源负载均衡算法。取值：'."\n"
                                    ."\n"
                                    .'- **ip_hash**：表示IP Hash算法。根据请求来源IP进行HASH映射，将同一个IP的所有请求定向到一个源站服务器。'."\n"
                                    .'- **rr**：表示轮询算法。将所有请求轮流分配给不同源站服务器。'."\n"
                                    .'- **least_time**：表示Least Time算法。该算法通过智能DNS解析能力，保证业务流量从接入防护节点到转发回源站服务器整个链路的时延最短。',
                                'type' => 'string',
                                'example' => 'rr',
                            ],
                            'UpstreamRetry' => [
                                'description' => '回源重试开关。取值：'."\n"
                                    ."\n"
                                    .'- **1**：打开。'."\n"
                                    .'- **0**：关闭。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '9E7F6B2C-03F2-462F-9076-B782CF0DD502',
                            ],
                            'Attributes' => [
                                'description' => '回源参数信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'RsType' => [
                                            'description' => '源站服务器的地址类型。取值：'."\n"
                                                ."\n"
                                                .'- **0**：表示源站服务器的IP地址。'."\n"
                                                .'- **1**：表示源站服务器的域名地址。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'RealServer' => [
                                            'description' => '源站服务器地址。',
                                            'type' => 'string',
                                            'example' => '1.***.***.1',
                                        ],
                                        'Attribute' => [
                                            'description' => '回源参数。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Weight' => [
                                                    'description' => '服务器的权重。仅在使用轮询算法（**ProxyMode**为**rr**）时生效。'."\n"
                                                        ."\n"
                                                        .'权重取值范围：**1**~**100**，默认值为**100**。权重越高的服务器分配到的请求越多。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '100',
                                                ],
                                                'ConnectTimeout' => [
                                                    'description' => '新建连接超时时间。'."\n"
                                                        .'值范围**1**~**10**秒，默认值为**5**。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '5',
                                                ],
                                                'FailTimeout' => [
                                                    'description' => '失效时间，单位秒，当源站失败超过**MaxFails**时，则将该源站地址设置为down，时效为**FailTimeout**时间，最终取值取**ConnectTimeout**和**FailTimeout**的最大值。'."\n"
                                                        .'值范围**1**~**3600**秒，默认值为**10**。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '10',
                                                ],
                                                'MaxFails' => [
                                                    'description' => '最大失败次数，健康检查相关。'."\n"
                                                        .'值范围**1**~**10**秒，默认值为**3**。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '3',
                                                ],
                                                'Mode' => [
                                                    'description' => '主备属性标志。取值：'."\n"
                                                        ."\n"
                                                        .'- **active**：主。'."\n"
                                                        .'- **backup**：备。',
                                                    'type' => 'string',
                                                    'example' => 'active',
                                                ],
                                                'ReadTimeout' => [
                                                    'description' => '读连接超时时间。'."\n"
                                                        .'取值范围**10**~**300**秒，默认值为**120**。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '120',
                                                ],
                                                'SendTimeout' => [
                                                    'description' => '写连接超时时间。'."\n"
                                                        .'取值范围**10**~**300**秒，默认值为**120**。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '120',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ProxyMode\\": \\"rr\\",\\n  \\"UpstreamRetry\\": 1,\\n  \\"RequestId\\": \\"9E7F6B2C-03F2-462F-9076-B782CF0DD502\\",\\n  \\"Attributes\\": [\\n    {\\n      \\"RsType\\": 0,\\n      \\"RealServer\\": \\"1.***.***.1\\",\\n      \\"Attribute\\": {\\n        \\"Weight\\": 100,\\n        \\"ConnectTimeout\\": 5,\\n        \\"FailTimeout\\": 10,\\n        \\"MaxFails\\": 3,\\n        \\"Mode\\": \\"active\\",\\n        \\"ReadTimeout\\": 120,\\n        \\"SendTimeout\\": 120\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeL7RsPolicyResponse>\\n    <ProxyMode>rr</ProxyMode>\\n    <RequestId>9E7F6B2C-03F2-462F-9076-B782CF0DD502</RequestId>\\n    <Attributes>\\n        <RsType>0</RsType>\\n        <RealServer>1.***.***.1</RealServer>\\n        <Attribute>\\n            <Weight>100</Weight>\\n        </Attribute>\\n    </Attributes>\\n</DescribeL7RsPolicyResponse>","errorExample":""}]',
            'title' => '查询网站业务转发规则的回源策略',
            'summary' => '查询网站业务转发规则的回源策略。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AssociateWebCert' => [
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
                'abilityTreeCode' => '106049',
                'abilityTreeNodes' => [
                    'FEATUREddos64TBV6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CertId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CertName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Cert',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CertIdentifier',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CertRegion',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '40F11005-A75C-4644-95F2-52A4E7D43E91',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40F11005-A75C-4644-95F2-52A4E7D43E91\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<AssociateWebCertResponse>\\r\\n\\t<RequestId>40F11005-A75C-4644-95F2-52A4E7D43E91</RequestId>\\r\\n</AssociateWebCertResponse>","errorExample":""}]',
            'title' => '为网站业务转发规则关联SSL证书',
            'summary' => '为网站业务转发规则关联SSL证书。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ConfigL7RsPolicy' => [
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
                'abilityTreeCode' => '106052',
                'abilityTreeNodes' => [
                    'FEATUREddos64TBV6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。'."\n"
                            ."\n"
                            .'关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要操作的网站业务的域名。'."\n"
                            ."\n"
                            .'> 域名必须已经配置过网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有已经配置过网站业务转发规则的域名。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'Policy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回源策略。使用JSON结构体转化的字符串格式表示，JSON结构体包含以下字段：'."\n"
                            ."\n"
                            .' - **ProxyMode**：String类型 | 必选 | 回源负载均衡算法。取值：'."\n"
                            .'    - **ip_hash**：表示IP Hash算法。根据请求来源IP进行HASH映射，将同一个IP的所有请求定向到一个源站服务器。'."\n"
                            .'    - **rr**：表示轮询算法。将所有请求轮流分配给不同源站服务器。使用该算法时，您可以根据不同服务器的性能为服务器设置权重。'."\n"
                            .'     - **least_time**：表示Least Time算法。该算法通过智能DNS解析能力，保证业务流量从接入防护节点到转发回源站服务器整个链路的时延最短。'."\n"
                            .'- **Attributes**：JSONArray类型 | 可选 | 回源参数信息。数组中每个元素包含以下字段：'."\n"
                            .'    - **RealServer**：String类型 | 可选 | 源站服务器地址。'."\n"
                            .'    - **Attribute**：JSONObject类型 | 可选 | 回源参数。包含以下字段：'."\n"
                            .'        - **Weight**：Integer类型 | 可选 | 服务器的权重。仅在使用轮询算法（**ProxyMode**为**rr**）时生效。权重取值范围：**1**~**100**，默认值为**100**。权重越高的服务器分配到的请求越多。'."\n"
                            .'        - **ConnectTimeout**：Integer类型 | 可选 | 新建连接超时时间。值范围**1**~**10**秒，默认值为**5**。'."\n"
                            .'        - **FailTimeout**：Integer类型 | 可选 | 失效时间，单位秒。值范围**1**~**3600**秒，默认值为**10**。'."\n"
                            .'        - **MaxFails**：Integer类型 | 可选 | 最大失败次数，健康检查相关。值范围**1**~**10**秒，默认值为**3**。'."\n"
                            .'        - **Mode**：String类型 | 可选 | 主备属性标志。取值：**active**为主。**backup**为备。'."\n"
                            .'        - **ReadTimeout**：Integer类型 | 可选 | 读超时时间。值范围**10**~**300**秒，默认值为**120**。'."\n"
                            .'        - **SendTimeout**：Integer类型 | 可选 | 写超时时间。值范围**10**~**300**秒，默认值为**120**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"ProxyMode":"rr","Attributes":[{"RealServer":"1.***.***.1","Attribute":{"Weight":100,"ConnectTimeout":5,"FailTimeout":10,"MaxFails":3,"Mode":"active","ReadTimeout":120,"SendTimeout":120}},{"RealServer":"2.***.***.2","Attribute":{"Weight":100,"ConnectTimeout":5,"FailTimeout":10,"MaxFails":3,"Mode":"active","ReadTimeout":120,"SendTimeout":120}}]}',
                    ],
                ],
                [
                    'name' => 'UpstreamRetry',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回源重试开关。取值：'."\n"
                            ."\n"
                            .'- **1**：回源重试开。'."\n"
                            .'- **0**：回源重试关。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ConfigL7RsPolicyResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</ConfigL7RsPolicyResponse>","errorExample":""}]',
            'title' => '为转发规则设置回源策略',
            'summary' => '为已经创建的网站业务转发规则设置回源策略。',
            'description' => '如果接入DDoS高防的网站配置了多个源站服务器，您可以通过回源策略修改回源负载算法。默认使用IP Hash算法，支持修改为轮询或Leaset Time算法。具体说明请参见请求参数**Policy**的描述。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyOcspStatus' => [
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
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要设置静态页面缓存的域名。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeDomains](~~91724~~)查询所有已接入DDoS高防防护的域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'click.linktech.cn',
                    ],
                ],
                [
                    'name' => 'Enable',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启OCSP功能。取值：'."\n"
                            .'- **1**：开启'."\n"
                            .'- **0**：关闭',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
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
                                'example' => 'D8DDBA8E-8182-5C85-AA41-F17EACFCAE0D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D8DDBA8E-8182-5C85-AA41-F17EACFCAE0D\\"\\n}","type":"json"}]',
            'title' => '设置是否启用 OCSP （Online Certificate Status Protocol）功能',
            'summary' => '是否启用 OCSP （Online Certificate Status Protocol）功能。',
            'description' => '该功能适用于网站HTTPS业务。如果您已选择的协议类型包含HTTPS，推荐启用该功能。',
        ],
        'ConfigL7UsKeepalive' => [
            'summary' => '配置域名回源长连接设置。',
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
                'operationType' => 'none',
                'abilityTreeCode' => '215883',
                'abilityTreeNodes' => [
                    'FEATUREddos64TBV6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'UpstreamKeepalive',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回源长连接设置参数，使用JSON结构体转化的字符串格式表示，JSON结构体包含以下字段：'."\n"
                            ."\n"
                            .'- **enabled**：Boolean类型 | 必选 | 回源长连接配置开关。'."\n"
                            .'- **keepalive_requests**：Integer类型 | 必选 | 长连接复用的请求数量。'."\n"
                            .'- **keepalive_timeout**：Integer类型 | 必选 | 长连接的空闲超时时间。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"enabled": true, "keepalive_requests": 1000,"keepalive_timeout": 30}',
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
                                'example' => '6D48AED0-41DB-5D9B-B484-3B6AAD312AD1',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6D48AED0-41DB-5D9B-B484-3B6AAD312AD1\\"\\n}","type":"json"}]',
            'title' => '配置域名回源长连接设置',
        ],
        'DescribeL7UsKeepalive' => [
            'summary' => '查询域名回源长连接设置。',
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
                'operationType' => 'none',
                'abilityTreeCode' => '215888',
                'abilityTreeNodes' => [
                    'FEATUREddos64TBV6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyun.com',
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
                                'example' => '39499F01-19D9-4EA4-A0E9-C6014BA5CDBE',
                            ],
                            'RsKeepalive' => [
                                'description' => '配置的回源长连接参数。',
                                'type' => 'object',
                                'properties' => [
                                    'Enabled' => [
                                        'description' => '是否开启回源长连接。取值：'."\n"
                                            ."\n"
                                            .'- **true**：表示开启。'."\n"
                                            .'- **false**：表示不开启。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'KeepaliveRequests' => [
                                        'description' => '长连接复用的请求数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1000',
                                    ],
                                    'KeepaliveTimeout' => [
                                        'description' => '长连接的空闲超时时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '30',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39499F01-19D9-4EA4-A0E9-C6014BA5CDBE\\",\\n  \\"RsKeepalive\\": {\\n    \\"Enabled\\": true,\\n    \\"KeepaliveRequests\\": 1000,\\n    \\"KeepaliveTimeout\\": 30\\n  }\\n}","type":"json"}]',
            'title' => '查询回源长连接设置',
        ],
        'CreateAsyncTask' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'TaskType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要创建的任务类型。取值：'."\n"
                            .'- **1**：四层导出任务，导出DDoS高防实例的端口转发规则'."\n"
                            .'- **2**：七层导出任务，导出网站业务转发规则'."\n"
                            .'- **3**：会话、健康检查导出任务，导出DDoS高防实例的会话、健康检查配置'."\n"
                            .'- **4**：DDoS防护策略导出任务，导出DDoS高防实例的DDoS防护策略配置'."\n"
                            .'- **5**：黑名单（针对目的IP）下载任务，导出针对DDoS高防实例的黑名单IP'."\n"
                            .'- **6**：白名单（针对目的IP）下载任务，导出针对DDoS高防实例的白名单IP',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'TaskParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务参数信息。使用JSON格式的字符串表达。不同**TaskType**需要传入的任务参数不完全相同。'."\n"
                            ."\n"
                            .'**TaskType**为**1**、**3**、**4**、**5**、**6**时，任务参数的结构如下。'."\n"
                            .'- **instanceId**：String类型，必选，DDoS高防实例的ID。'."\n"
                            ."\n"
                            .'**TaskType**为**2**时，任务参数的结构如下。'."\n"
                            .'- **domain**：String类型，可选，网站业务的域名。不传入表示导出所有网站业务的转发规则。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"instanceId": "ddoscoo-cn-mp91j1ao****"}',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateAsyncTaskResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</CreateAsyncTaskResponse>","errorExample":""}]',
            'title' => '创建异步导出任务',
            'summary' => '创建异步导出任务，例如导出网站业务转发规则、端口转发规则、会话保持和健康检查配置、DDoS防护策略、IP黑白名单。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteAsyncTask' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的任务ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeAsyncTasks](~~DescribeAsyncTasks~~)查询所有异步导出任务ID。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
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
                                'example' => 'CF33B4C3-196E-4015-AADD-5CAD00057B80',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CF33B4C3-196E-4015-AADD-5CAD00057B80\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteAsyncTaskResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</DeleteAsyncTaskResponse>","errorExample":""}]',
            'title' => '删除指定的异步任务',
            'summary' => '删除异步导出任务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateNetworkRules' => [
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
                'operationType' => 'create',
                'abilityTreeCode' => '106069',
                'abilityTreeNodes' => [
                    'FEATUREddos64TBV6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'NetworkRules',
                    'in' => 'query',
                    'schema' => [
                        'description' => '端口转发规则的详细信息，使用JSON格式的字符串表述，具体结构如下。'."\n"
                            .'- **InstanceId**：String类型，必选，DDoS高防实例ID。'."\n"
                            .'- **Protocol**：String类型，必选，转发协议类型。取值：**tcp**、**udp**。'."\n"
                            .'- **FrontendPort**：Integer类型，必选，转发端口。'."\n"
                            .'- **BackendPort**：Integer类型，必选，源站端口。'."\n"
                            .'- **RealServers**：JSON数组类型，必选，源站IP地址列表。最多支持20个IP地址。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"InstanceId":"ddoscoo-cn-mp91j1ao****","Protocol":"tcp","FrontendPort":8080,"BackendPort":8080,"RealServers":["1.1.1.1","2.2.2.2"]}]',
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
                                'example' => 'ADCA45A5-D15C-4B7D-9F81-138B0B36D0BD',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ADCA45A5-D15C-4B7D-9F81-138B0B36D0BD\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateNetworkRulesResponse>\\r\\n\\t<RequestId>ADCA45A5-D15C-4B7D-9F81-138B0B36D0BD</RequestId>\\r\\n</CreateNetworkRulesResponse>","errorExample":""}]',
            'title' => '创建端口转发规则',
            'summary' => '创建端口转发规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteNetworkRule' => [
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
                'operationType' => 'delete',
                'abilityTreeCode' => '106083',
                'abilityTreeNodes' => [
                    'FEATUREddos64TBV6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'NetworkRule',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的端口转发规则，使用JSON格式的字符串表述，具体结构如下。'."\n"
                            .'- **InstanceId**：String类型，必选，DDoS高防实例ID。'."\n"
                            .'- **Protocol**：String类型，必选，转发协议类型。取值：**tcp**、**udp**。'."\n"
                            .'- **FrontendPort**：Integer类型，必选，转发端口。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"InstanceId":"ddoscoo-cn-mp91j1ao****","Protocol":"tcp","FrontendPort":8080}]',
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
                                'example' => '49AD2F34-694A-4024-9B0E-DDCFC59CCC13',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"49AD2F34-694A-4024-9B0E-DDCFC59CCC13\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteNetworkRuleResponse>\\r\\n\\t<RequestId>49AD2F34-694A-4024-9B0E-DDCFC59CCC13</RequestId>\\r\\n</DeleteNetworkRuleResponse>","errorExample":""}]',
            'title' => '删除端口转发规则',
            'summary' => '目前不支持批量删除，每次只允许删除一个对象。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyHealthCheckConfig' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                    ],
                ],
                [
                    'name' => 'ForwardProtocol',
                    'in' => 'query',
                    'schema' => [
                        'description' => '转发协议。取值：'."\n"
                            .'- **tcp**'."\n"
                            .'- **udp**',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tcp',
                    ],
                ],
                [
                    'name' => 'FrontendPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '转发端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '8080',
                    ],
                ],
                [
                    'name' => 'HealthCheck',
                    'in' => 'query',
                    'schema' => [
                        'description' => '健康检查配置的详细信息，使用JSON格式的字符串表述，具体结构如下。'."\n"
                            ."\n"
                            .'- **Type**：String类型，必选，协议类型。取值：**tcp**（四层）、**http**（七层）。'."\n"
                            .'- **Domain**：String类型，可选，域名。'."\n"
                            ."\n"
                            .'    > 仅适用于七层健康检查。'."\n"
                            ."\n"
                            .'- **Uri**：String类型，可选，检查路径。'."\n"
                            ."\n"
                            .'    > 仅适用于七层健康检查。'."\n"
                            ."\n"
                            .'- **Timeout**：Integer类型，可选，响应超时时间。取值范围：**1**~**30**，单位：秒。'."\n"
                            .'- **Port**：Integer类型，可选，检查端口。'."\n"
                            .'- **Interval**：Integer类型，可选，检查间隔。取值范围：**1**~**30**，单位：秒。'."\n"
                            .'- **Up**：Integer类型，可选，健康阈值。取值范围：**1**~**10**。'."\n"
                            .'- **Down**：Integer类型，可选，不健康阈值。取值范围：**1**~**10**。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"Type":"tcp","Timeout":10,"Port":8080,"Interval":10,"Up":10,"Down":40}',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyHealthCheckConfigResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</ModifyHealthCheckConfigResponse>","errorExample":""}]',
            'title' => '编辑健康检查配置',
            'summary' => '编辑端口转发规则的健康检查配置（四层或七层）。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeNetworkRules' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                    ],
                ],
                [
                    'name' => 'ForwardProtocol',
                    'in' => 'query',
                    'schema' => [
                        'description' => '转发协议。取值：'."\n"
                            .'- **tcp**'."\n"
                            .'- **udp**',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tcp',
                    ],
                ],
                [
                    'name' => 'FrontendPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '转发端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '80',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询请求时返回的页码。例如，查询第一页的返回结果，则填写**1**。',
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
                        'description' => '页面显示的记录数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
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
                                'description' => '端口转发规则总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '8597F235-FA5E-4FC7-BAD9-E4C0B01BC771',
                            ],
                            'NetworkRules' => [
                                'description' => '端口转发规则信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'FrontendPort' => [
                                            'description' => '转发端口。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '80',
                                        ],
                                        'IsAutoCreate' => [
                                            'description' => '是否自动创建。取值：'."\n"
                                                .'- **true**：是'."\n"
                                                .'- **false**：否',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'InstanceId' => [
                                            'description' => 'DDoS高防实例ID。',
                                            'type' => 'string',
                                            'example' => 'ddoscoo-cn-mp91j1ao****',
                                        ],
                                        'Protocol' => [
                                            'description' => '转发协议。取值：'."\n"
                                                .'- **tcp**'."\n"
                                                .'- **udp**',
                                            'type' => 'string',
                                            'example' => 'tcp',
                                        ],
                                        'BackendPort' => [
                                            'description' => '源站端口。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '80',
                                        ],
                                        'RealServers' => [
                                            'description' => '源站IP地址列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '源站IP地址。',
                                                'type' => 'string',
                                                'example' => '112.139.XX.XX',
                                            ],
                                        ],
                                        'Remark' => [
                                            'description' => '端口转发规则的备注信息。',
                                            'type' => 'string',
                                            'example' => '测试',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"8597F235-FA5E-4FC7-BAD9-E4C0B01BC771\\",\\n  \\"NetworkRules\\": [\\n    {\\n      \\"FrontendPort\\": 80,\\n      \\"IsAutoCreate\\": true,\\n      \\"InstanceId\\": \\"ddoscoo-cn-mp91j1ao****\\",\\n      \\"Protocol\\": \\"tcp\\",\\n      \\"BackendPort\\": 80,\\n      \\"RealServers\\": [\\n        \\"112.139.XX.XX\\"\\n      ],\\n      \\"Remark\\": \\"测试\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeNetworkRulesResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>8597F235-FA5E-4FC7-BAD9-E4C0B01BC771</RequestId>\\n    <NetworkRules>\\n        <FrontendPort>80</FrontendPort>\\n        <IsAutoCreate>true</IsAutoCreate>\\n        <InstanceId>ddoscoo-cn-mp91j1ao****</InstanceId>\\n        <Protocol>tcp</Protocol>\\n        <BackendPort>80</BackendPort>\\n        <RealServers>[\\"112.139.XX.XX\\"]</RealServers>\\n    </NetworkRules>\\n</DescribeNetworkRulesResponse>","errorExample":""}]',
            'title' => '查询端口转发规则',
            'summary' => '查询端口转发规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeHealthCheckStatus' => [
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
                    'name' => 'NetworkRules',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的端口转发规则，使用JSON格式的字符串表述，具体结构如下。'."\n"
                            .'- **InstanceId**：String类型，必选，DDoS高防实例ID。'."\n"
                            .'- **Protocol**：String类型，必选，转发协议类型。取值：**tcp**、**udp**。'."\n"
                            .'- **FrontendPort**：Integer类型，必选，转发端口。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"InstanceId":"ddoscoo-cn-mp91j1ao****","Protocol":"tcp","FrontendPort":8080}]',
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
                                'example' => 'DE9FF9E1-569C-4B6C-AB6A-0F6D927BB27C',
                            ],
                            'HealthCheckStatus' => [
                                'description' => '源站健康检查状态信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '源站健康检查状态。取值：'."\n"
                                                .'- **normal**：健康'."\n"
                                                .'- **abnormal**：不健康',
                                            'type' => 'string',
                                            'example' => 'normal',
                                        ],
                                        'FrontendPort' => [
                                            'description' => '转发端口。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '8080',
                                        ],
                                        'InstanceId' => [
                                            'description' => 'DDoS高防实例ID。',
                                            'type' => 'string',
                                            'example' => 'ddoscoo-cn-mp91j1ao****',
                                        ],
                                        'Protocol' => [
                                            'description' => '转发协议。取值：'."\n"
                                                .'- **tcp**'."\n"
                                                .'- **udp**',
                                            'type' => 'string',
                                            'example' => 'tcp',
                                        ],
                                        'RealServerStatusList' => [
                                            'description' => '源站IP地址健康检查状态列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Status' => [
                                                        'description' => '当前IP地址健康检查状态。取值：'."\n"
                                                            .'- **normal**：健康'."\n"
                                                            .'- **abnormal**：不健康',
                                                        'type' => 'string',
                                                        'example' => 'abnormal',
                                                    ],
                                                    'Address' => [
                                                        'description' => '源站IP地址。',
                                                        'type' => 'string',
                                                        'example' => '192.0.XX.XX',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DE9FF9E1-569C-4B6C-AB6A-0F6D927BB27C\\",\\n  \\"HealthCheckStatus\\": [\\n    {\\n      \\"Status\\": \\"normal\\",\\n      \\"FrontendPort\\": 8080,\\n      \\"InstanceId\\": \\"ddoscoo-cn-mp91j1ao****\\",\\n      \\"Protocol\\": \\"tcp\\",\\n      \\"RealServerStatusList\\": [\\n        {\\n          \\"Status\\": \\"abnormal\\",\\n          \\"Address\\": \\"192.0.XX.XX\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeHealthCheckStatusResponse>\\n    <RequestId>DE9FF9E1-569C-4B6C-AB6A-0F6D927BB27C</RequestId>\\n    <HealthCheckStatus>\\n        <Status>normal</Status>\\n        <FrontendPort>8080</FrontendPort>\\n        <InstanceId>ddoscoo-cn-mp91j1ao****</InstanceId>\\n        <Protocol>tcp</Protocol>\\n        <RealServerStatusList>\\n            <Status>abnormal</Status>\\n            <Address>192.0.XX.XX</Address>\\n        </RealServerStatusList>\\n    </HealthCheckStatus>\\n</DescribeHealthCheckStatusResponse>","errorExample":""}]',
            'title' => '查询源站健康检查状态信息',
            'summary' => '查询源站健康检查状态信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ConfigNetworkRules' => [
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
                'abilityTreeCode' => '106057',
                'abilityTreeNodes' => [
                    'FEATUREddos64TBV6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'NetworkRules',
                    'in' => 'query',
                    'schema' => [
                        'description' => '端口转发规则的详细信息，使用JSON格式的字符串表述，具体结构如下。'."\n"
                            .'- **InstanceId**：String类型，必选，DDoS高防实例ID。'."\n"
                            .'- **Protocol**：String类型，必选，转发协议类型。取值：**tcp**、**udp**。'."\n"
                            .'- **FrontendPort**：Integer类型，必选，转发端口。'."\n"
                            .'- **BackendPort**：Integer类型，必选，源站端口。'."\n"
                            .'- **RealServers**：JSON数组类型，必选，源站IP地址列表。最多支持20个IP地址。'."\n"
                            ."\n"
                            .'> 编辑端口转发规则时，只可以修改**RealServers**，即源站IP地址。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"InstanceId":"ddoscoo-cn-mp91j1ao****","Protocol":"tcp","FrontendPort":8080,"BackendPort":8080,"RealServers":["1.1.1.1","2.2.2.2","3.3.3.3"]}]',
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
                                'example' => 'CC042262-15A3-4A49-ADF0-130968EA47BC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CC042262-15A3-4A49-ADF0-130968EA47BC\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ConfigNetworkRulesResponse>\\r\\n\\t<RequestId>CC042262-15A3-4A49-ADF0-130968EA47BC</RequestId>\\r\\n</ConfigNetworkRulesResponse>","errorExample":""}]',
            'title' => '编辑端口转发规则',
            'summary' => '修改源站IP地址。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateSchedulerRule' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Rules',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通用联动规则的详细信息，使用JSON格式的字符串表述，具体结构如下。'."\n"
                            .'- **Type**：String类型，必选，联动资源的地址格式。取值：'."\n"
                            .'    - **A**：IP地址'."\n"
                            .'    - **CNAME**：域名'."\n"
                            .'- **Value**：String类型，必选，联动资源的地址。'."\n"
                            .'- **Priority**：Integer类型，必选，规则优先级。取值范围：**0**~**100**，取值越大，优先级越高。'."\n"
                            .'- **ValueType**：Integer类型，必选，联动资源的类型。取值：'."\n"
                            .'    - **1**：DDoS高防IP '."\n"
                            .'    - **2**：（阶梯防护）云资源IP'."\n"
                            .'    - **3**：（出海加速）加速线路IP'."\n"
                            .'    - **5**：（CDN联动）加速域名'."\n"
                            .'    - **6**：（云产品联动）云资源IP'."\n"
                            .'- **RegionId**：String类型，可选（**ValueType**为**2**时必选），地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"Type":"A", "Value":"1.1.XX.XX", "Priority":80,"ValueType":2, "RegionId":"cn-hangzhou" },{"Type":"A", "Value":"203.199.XX.XX", "Priority":80,"ValueType":1}]',
                    ],
                ],
                [
                    'name' => 'RuleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testrule',
                    ],
                ],
                [
                    'name' => 'RuleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则类型。取值：'."\n"
                            .'- **2**：阶梯防护'."\n"
                            .'- **3**：出海加速'."\n"
                            .'- **5**：CDN联动'."\n"
                            .'- **6**：云产品联动'."\n"
                            .'- **8**：安全加速',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'Param',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CDN联动规则的详细信息，使用JSON格式的字符串表达，具体结构如下。'."\n"
                            .'- **ParamType**：必选，String类型，CDN联动类型。取值：**cdn**，表示CDN联动。'."\n"
                            .'- **ParamData**：必选，Map类型，CDN联动参数。具体结构如下。'."\n"
                            .'    - **Domain**：必选，String类型，CDN加速域名。'."\n"
                            .'    - **Cname**：必选，String类型，加速域名CNAME地址。'."\n"
                            .'    - **AccessQps**：必选，Integer类型，访问QPS阈值。超过阈值切换到DDoS高防。'."\n"
                            .'    - **UpstreamQps**：可选，Integer类型，回源QPS阈值。低于阈值切换到CDN。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"ParamType":"cdn","ParamData":{"Domain":"example.aliyundoc.com","Cname":"demo.aliyundoc.com","AccessQps":100,"UpstreamQps":100}}',
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
                                'example' => '8DFB602D-1AAC-46C4-90F2-C84086E7A6E4',
                            ],
                            'Cname' => [
                                'description' => '规则对应的流量调度器CNAME值。'."\n"
                                    ."\n"
                                    .'> 您必须将业务解析到流量调度器的CNAME，才能启用规则。',
                                'type' => 'string',
                                'example' => '48k7b372gpl4****.aliyunddos0001.com',
                            ],
                            'RuleName' => [
                                'description' => '规则名称。',
                                'type' => 'string',
                                'example' => 'testrule',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8DFB602D-1AAC-46C4-90F2-C84086E7A6E4\\",\\n  \\"Cname\\": \\"48k7b372gpl4****.aliyunddos0001.com\\",\\n  \\"RuleName\\": \\"testrule\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateSchedulerRuleResponse>\\n    <RequestId>8DFB602D-1AAC-46C4-90F2-C84086E7A6E4</RequestId>\\n    <Cname>48k7b372gpl4****.aliyunddos0001.com</Cname>\\n    <RuleName>testrule</RuleName>\\n</CreateSchedulerRuleResponse>","errorExample":""}]',
            'title' => '创建流量调度器调度规则',
            'summary' => '创建流量调度器调度规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteSchedulerRule' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'RuleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的规则名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testrule',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteSchedulerRuleResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</DeleteSchedulerRuleResponse>","errorExample":""}]',
            'title' => '删除流量调度器调度规则',
            'summary' => '删除流量调度器调度规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifySchedulerRule' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Rules',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通用联动规则的详细信息，使用JSON格式的字符串表述，具体结构如下。'."\n"
                            .'- **Type**：String类型，必选，联动资源的地址格式。取值：'."\n"
                            .'    - **A**：IP地址'."\n"
                            .'    - **CNAME**：域名'."\n"
                            .'- **Value**：String类型，必选，联动资源的地址。'."\n"
                            .'- **Priority**：Integer类型，必选，规则优先级。取值范围：**0**~**100**，取值越大，优先级越高。'."\n"
                            .'- **ValueType**：Integer类型，必选，联动资源的类型。取值：'."\n"
                            .'    - **1**：DDoS高防IP '."\n"
                            .'    - **2**：（阶梯防护）云资源IP'."\n"
                            .'    - **3**：（出海加速）加速线路IP'."\n"
                            .'    - **5**：（CDN联动）加速域名'."\n"
                            .'    - **6**：（云产品联动）云资源IP'."\n"
                            .'    - **8**：（安全加速）安全加速IP'."\n"
                            .'- **RegionId**：String类型，可选（**ValueType**为**2**时必选），地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"Type":"A", "Value":"1.1.XX.XX", "Priority":80,"ValueType":2, "RegionId":"cn-hangzhou" },{"Type":"A", "Value":"203.199.XX.XX", "Priority":80,"ValueType":1}]',
                    ],
                ],
                [
                    'name' => 'RuleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要编辑的规则名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testrule',
                    ],
                ],
                [
                    'name' => 'RuleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则类型。取值：'."\n"
                            .'- **2**：阶梯防护'."\n"
                            .'- **3**：出海加速'."\n"
                            .'- **5**：CDN联动'."\n"
                            .'- **6**：云产品联动'."\n"
                            .'- **8**：安全加速',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'Param',
                    'in' => 'query',
                    'schema' => [
                        'description' => "\n"
                            .'CDN联动规则的详细信息，使用JSON格式的字符串表达，具体结构如下。'."\n"
                            .'- **ParamType**：必选，String类型，CDN联动类型。取值：**cdn**，表示CDN联动。'."\n"
                            .'- **ParamData**：必选，Map类型，CDN联动参数。具体结构如下。'."\n"
                            .'    - **Domain**：必选，String类型，CDN加速域名。'."\n"
                            .'    - **Cname**：必选，String类型，加速域名CNAME地址。'."\n"
                            .'    - **AccessQps**：必选，Integer类型，访问QPS阈值。超过阈值切换到DDoS高防。'."\n"
                            .'    - **UpstreamQps**：可选，Integer类型，回源QPS阈值。低于阈值切换到CDN。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"ParamType":"cdn","ParamData":"Domain":"example.aliyundoc.com","Cname":"demo.aliyundoc.com","AccessQps":100,"UpstreamQps":100}}',
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
                                'example' => 'FFC77501-BDF8-4BC8-9BF5-B295FBC3189B',
                            ],
                            'Cname' => [
                                'description' => '规则对应的流量调度器CNAME值。'."\n"
                                    ."\n"
                                    .'> 您必须将业务解析到流量调度器的CNAME，才能启用规则。',
                                'type' => 'string',
                                'example' => '48k7b372gpl4****.aliyunddos0001.com',
                            ],
                            'RuleName' => [
                                'description' => '规则名称。',
                                'type' => 'string',
                                'example' => 'testrule',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FFC77501-BDF8-4BC8-9BF5-B295FBC3189B\\",\\n  \\"Cname\\": \\"48k7b372gpl4****.aliyunddos0001.com\\",\\n  \\"RuleName\\": \\"testrule\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifySchedulerRuleResponse>\\n    <RequestId>FFC77501-BDF8-4BC8-9BF5-B295FBC3189B</RequestId>\\n    <Cname>48k7b372gpl4****.aliyunddos0001.com</Cname>\\n    <RuleName>testrule</RuleName>\\n</ModifySchedulerRuleResponse>","errorExample":""}]',
            'title' => '编辑流量调度器调度规则',
            'summary' => '编辑流量调度器调度规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeSchedulerRules' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'RuleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testrule',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询请求时返回的页码。例如，查询第一页的返回结果，则填写**1**。',
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
                        'description' => '页面显示的记录数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
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
                                'description' => '流量调度规则的总数。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '11C55595-1757-4B17-9ACE-4ACB68C2D989',
                            ],
                            'SchedulerRules' => [
                                'description' => '流量调度规则信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'RuleType' => [
                                            'description' => '规则类型。取值：'."\n"
                                                .'- **2**：阶梯防护'."\n"
                                                .'- **3**：出海加速'."\n"
                                                .'- **5**：CDN联动'."\n"
                                                .'- **6**：云产品联动'."\n"
                                                .'- **8**：安全加速',
                                            'type' => 'string',
                                            'example' => '2',
                                        ],
                                        'Cname' => [
                                            'description' => 'CNAME值。',
                                            'type' => 'string',
                                            'example' => '4eru5229a843****.aliyunddos0001.com',
                                        ],
                                        'RuleName' => [
                                            'description' => '规则名称。',
                                            'type' => 'string',
                                            'example' => 'doctest',
                                        ],
                                        'Rules' => [
                                            'description' => '规则列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Type' => [
                                                        'description' => '资源地址的格式。取值：'."\n"
                                                            .'- **A**：IPv4地址'."\n"
                                                            .'- **CNAME**：CNAME地址',
                                                        'type' => 'string',
                                                        'example' => 'A',
                                                    ],
                                                    'Status' => [
                                                        'description' => '规则生效状态。取值：'."\n"
                                                            .'- **0**：未生效'."\n"
                                                            .'- **1**：生效',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '0',
                                                    ],
                                                    'Value' => [
                                                        'description' => '资源地址。',
                                                        'type' => 'string',
                                                        'example' => '203.***.***.39',
                                                    ],
                                                    'ValueType' => [
                                                        'description' => '资源地址类型。取值：'."\n"
                                                            .'- **1**：DDoS高防IP '."\n"
                                                            .'- **2**：（阶梯防护）云资源IP'."\n"
                                                            .'- **3**：（出海加速）加速线路IP'."\n"
                                                            .'- **5**：（CDN联动）加速域名'."\n"
                                                            .'- **6**：（云产品联动）云资源IP'."\n"
                                                            .'- **8**：（安全加速）安全加速P',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
                                                    ],
                                                    'Priority' => [
                                                        'description' => '规则优先级。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '100',
                                                    ],
                                                    'RestoreDelay' => [
                                                        'description' => '回切时间，单位为分钟。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '60',
                                                    ],
                                                    'RegionId' => [
                                                        'description' => '地域ID。'."\n"
                                                            ."\n"
                                                            .'> 仅当RuleType（即阶梯防护规则）取值为2时返回。',
                                                        'type' => 'string',
                                                        'example' => '1',
                                                    ],
                                                    'Line' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Param' => [
                                            'description' => '全球加速实例联动DDoS高防的规则。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ParamType' => [
                                                    'description' => '联动资源的类型。取值：**GA**，表示全球加速实例。',
                                                    'type' => 'string',
                                                    'example' => 'GA',
                                                ],
                                                'ParamData' => [
                                                    'description' => '联动资源。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'CloudInstanceId' => [
                                                            'description' => '全球加速实例的ID。',
                                                            'type' => 'string',
                                                            'example' => 'ga-bp1htlajy5509rc99****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": \\"1\\",\\n  \\"RequestId\\": \\"11C55595-1757-4B17-9ACE-4ACB68C2D989\\",\\n  \\"SchedulerRules\\": [\\n    {\\n      \\"RuleType\\": \\"2\\",\\n      \\"Cname\\": \\"4eru5229a843****.aliyunddos0001.com\\",\\n      \\"RuleName\\": \\"doctest\\",\\n      \\"Rules\\": [\\n        {\\n          \\"Type\\": \\"A\\",\\n          \\"Status\\": 0,\\n          \\"Value\\": \\"203.***.***.39\\",\\n          \\"ValueType\\": 1,\\n          \\"Priority\\": 100,\\n          \\"RestoreDelay\\": 60,\\n          \\"RegionId\\": \\"1\\",\\n          \\"Line\\": \\"\\"\\n        }\\n      ],\\n      \\"Param\\": {\\n        \\"ParamType\\": \\"GA\\",\\n        \\"ParamData\\": {\\n          \\"CloudInstanceId\\": \\"ga-bp1htlajy5509rc99****\\"\\n        }\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n\\t<DescribeSchedulerRulesResponse>\\r\\n\\t\\t<TotalCount>1</TotalCount>\\r\\n\\t\\t<RequestId>11C55595-1757-4B17-9ACE-4ACB68C2D989</RequestId>\\r\\n\\t\\t<SchedulerRules>\\r\\n\\t\\t\\t<Param>\\r\\n\\t\\t\\t\\t<ParamData>\\r\\n\\t\\t\\t\\t\\t<CloudInstanceId>ga-bp1htlajy5509rc99****</CloudInstanceId>\\r\\n\\t\\t\\t\\t</ParamData>\\r\\n\\t\\t\\t\\t<ParamType>GA</ParamType>\\r\\n\\t\\t\\t</Param>\\r\\n\\t\\t\\t<RuleType>6</RuleType>\\r\\n\\t\\t\\t<Cname>4eru5229a843****.aliyunddos0001.com</Cname>\\r\\n\\t\\t\\t<Rules>\\r\\n\\t\\t\\t\\t<Status>0</Status>\\r\\n\\t\\t\\t\\t<Type>A</Type>\\r\\n\\t\\t\\t\\t<RestoreDelay>60</RestoreDelay>\\r\\n\\t\\t\\t\\t<ValueType>1</ValueType>\\r\\n\\t\\t\\t\\t<Priority>100</Priority>\\r\\n\\t\\t\\t\\t<Value>203.***.***.39</Value>\\r\\n\\t\\t\\t\\t<RegionId></RegionId>\\r\\n\\t\\t\\t</Rules>\\r\\n\\t\\t\\t<Rules>\\r\\n\\t\\t\\t\\t<Status>1</Status>\\r\\n\\t\\t\\t\\t<Type>A</Type>\\r\\n\\t\\t\\t\\t<ValueType>6</ValueType>\\r\\n\\t\\t\\t\\t<Priority>50</Priority>\\r\\n\\t\\t\\t\\t<Value>47.***.***.47</Value>\\r\\n\\t\\t\\t\\t<RegionId>cn-hangzhou</RegionId>\\r\\n\\t\\t\\t</Rules>\\r\\n\\t\\t\\t<RuleName>doctest</RuleName>\\r\\n\\t\\t</SchedulerRules>\\r\\n\\t</DescribeSchedulerRulesResponse>\\r\\n","errorExample":""}]',
            'title' => '查询流量调度器的调度规则',
            'summary' => '查询流量调度器的调度规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SwitchSchedulerRule' => [
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
                'abilityTreeCode' => '106277',
                'abilityTreeNodes' => [
                    'FEATUREddosZIK01A',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RuleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要操作的流量调度规则的名称。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeSchedulerRules](~~157481~~)查询所有流量调度规则的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testrule',
                    ],
                ],
                [
                    'name' => 'RuleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '流量调度规则的类型。取值：'."\n"
                            ."\n"
                            .'- **2**：表示阶梯防护规则。'."\n"
                            .'- **3**：表示出海加速规则。'."\n"
                            .'- **5**：表示CDN联动规则。'."\n"
                            .'- **6**：表示云产品联动规则。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '6',
                    ],
                ],
                [
                    'name' => 'SwitchData',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务流量切换操作的配置。使用JSON数组转化的字符串表示，JSON数组的每个元素是一个结构体，结构体包含以下字段：'."\n"
                            ."\n"
                            .'-  **Value**：String类型 | 必选 | 联动资源的IP地址。'."\n"
                            ."\n"
                            .'- **State**：Integer类型 | 必选 | 操作类型。取值：'."\n"
                            .'    - **0**：表示将业务流量从联动资源切换到DDoS高防实例进行清洗。'."\n"
                            .'    - **1**：表示将业务流量回切到联动资源。'."\n"
                            ."\n"
                            .'- **Interval**：Integer类型 | 可选 | 回切时间，单位：分钟。使用说明：'."\n"
                            .'    - **State**为**0**（表示切换到高防时），必须设置该参数为**-1**，否则会调用失败。'."\n"
                            .'    - **State**为**1**（表示回切到云资源时，无需设置该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"Value":"39.104.XX.XX","State":0,"Interval":-1}]',
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
                                'example' => '7E3C301F-84BB-50E4-9DB9-2937B2429C1E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7E3C301F-84BB-50E4-9DB9-2937B2429C1E\\"\\n}","errorExample":""},{"type":"xml","example":"<SwitchSchedulerRuleResponse>\\n    <RequestId>7E3C301F-84BB-50E4-9DB9-2937B2429C1E</RequestId>\\n</SwitchSchedulerRuleResponse>","errorExample":""}]',
            'title' => '切换调度规则',
            'summary' => '将业务流量切换到DDoS高防实例进行清洗、回切到联动资源。',
            'description' => '本接口用于修改单个流量调度规则的当前生效资源，例如，将业务流量切换到DDoS高防实例进行清洗、回切到联动资源。'."\n"
                ."\n"
                .'调用本接口前，您必须已经调用[CreateSchedulerRule](~~157479~~)创建了流量调度规则。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。'."\n",
        ],
        'AddAutoCcBlacklist' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用**DescribeInstanceIds**查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                    ],
                ],
                [
                    'name' => 'Blacklist',
                    'in' => 'query',
                    'schema' => [
                        'description' => '黑名单IP的详细信息，使用JSON格式的字符串表述，具体结构如下。'."\n"
                            .'- **src**：String类型，必选，黑名单IP。'."\n"
                            .'> 黑名单中最多支持手动添加2000个IP。多个IP地址间使用空格或换行方式分割。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"src":"198.51.XX.XX"},{"src":"198.52.XX.XX"}]',
                    ],
                ],
                [
                    'name' => 'ExpireTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '过期时间，可自定义。取值范围：**300**~**604800**，单位：秒。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '300',
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
                                'example' => 'C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\"\\n}","errorExample":""},{"type":"xml","example":"<AddAutoCcBlacklistResponse>\\n    <RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\n</AddAutoCcBlacklistResponse>","errorExample":""}]',
            'title' => '添加针对DDoS高防实例的黑名单IP',
            'summary' => '添加针对DDoS高防实例的黑名单IP。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AddAutoCcWhitelist' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要添加白名单IP的DDoS高防实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                    ],
                ],
                [
                    'name' => 'Whitelist',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要添加的白名单IP的配置。使用JSON数组转化的字符串表示。JSON数组的每个元素是一个白名单IP结构体，具体包含以下参数：'."\n"
                            ."\n"
                            .'- **src**：String类型 | 必选 | 要添加到白名单的IP地址。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"src":"192.XX.XX.1"},{"src":"192.XX.XX.2"}]',
                    ],
                ],
                [
                    'name' => 'ExpireTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。'."\n"
                            ."\n"
                            .'> 该参数表示黑名单IP的有效期。白名单IP默认永久有效，无需设置该参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
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
                                'example' => 'AB5025DA-5C52-5207-B6AC-3F198758B678',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AB5025DA-5C52-5207-B6AC-3F198758B678\\"\\n}","errorExample":""},{"type":"xml","example":"<AddAutoCcWhitelistResponse>\\n    <RequestId>AB5025DA-5C52-5207-B6AC-3F198758B678</RequestId>\\n</AddAutoCcWhitelistResponse>","errorExample":""}]',
            'title' => '添加针对DDoS高防实例的白名单IP',
            'summary' => '添加针对DDoS高防实例的白名单IP。',
            'description' => '本接口用于为单个DDoS高防实例添加白名单IP，使DDoS高防实例直接放行指定IP的请求流量。'."\n"
                ."\n"
                .'白名单IP经添加后，默认永久有效。如果后续不再需要白名单IP，您可以调用[EmptyAutoCcWhitelist](~~157505~~)清空已添加的白名单IP列表。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteAutoCcBlacklist' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                    ],
                ],
                [
                    'name' => 'Blacklist',
                    'in' => 'query',
                    'schema' => [
                        'description' => '黑名单IP的详细信息，使用JSON格式的字符串表述，具体结构如下。'."\n"
                            .'- **src**：String类型，必选，黑名单IP。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"src":"198.51.XX.XX"},{"src":"198.52.XX.XX"}]',
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
                                'example' => 'C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAutoCcBlacklistResponse>\\n    <RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\n</DeleteAutoCcBlacklistResponse>","errorExample":""}]',
            'title' => '删除针对DDoS高防实例的黑名单IP',
            'summary' => '删除针对DDoS高防实例的黑名单IP。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteAutoCcWhitelist' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                    ],
                ],
                [
                    'name' => 'Whitelist',
                    'in' => 'query',
                    'schema' => [
                        'description' => '白名单IP的详细信息，使用JSON格式的字符串表述，具体结构如下。'."\n"
                            .'- **src：String**类型，必选，白名单IP。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"src":"1.1.1.1"},{"src":"2.2.2.2"}]',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteAutoCcWhitelistResponse>\\r\\n\\t<RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\r\\n</DeleteAutoCcWhitelistResponse>","errorExample":""}]',
            'title' => '删除针对DDoS高防实例的白名单IP',
            'summary' => '删除针对DDoS高防实例的白名单IP。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyBlackholeStatus' => [
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
                    'name' => 'BlackholeStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置黑洞状态。取值：**undo**，表示解除黑洞。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'undo',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyPortAutoCcStatusResponse>\\r\\n\\t<RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\r\\n</ModifyPortAutoCcStatusResponse>","errorExample":""}]',
            'title' => '执行黑洞解封',
            'summary' => '执行黑洞解封。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyBlockStatus' => [
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
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置近源流量压制的状态。取值：'."\n"
                            ."\n"
                            .'- **do**：表示开启近源流量压制。'."\n"
                            .'- **undo**：表示关闭近源流量压制。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'do',
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要封禁的时长。取值范围：**15**~**43200**，单位：分钟。'."\n"
                            ."\n"
                            .'> **Status**为**do**（表示开启近源流量压制）时，该参数必选。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '60',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要操作的DDoS高防（新BGP）实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                    ],
                ],
                [
                    'name' => 'Lines',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要封禁的线路列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要设置的线路。取值：'."\n"
                                .'- **ct**：表示海外电信线路。'."\n"
                                .'- **cut**：表示海外联通线路。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ct',
                        ],
                        'required' => true,
                        'example' => 'ct',
                        'maxItems' => 20,
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyBlockStatusResponse>\\n    <RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\n</ModifyBlockStatusResponse>","errorExample":""}]',
            'title' => '设置实例近源流量压制',
            'summary' => '设置DDoS高防（中国内地）实例的近源流量压制。',
            'description' => '> 该接口仅适用于DDoS高防（中国内地）服务。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeAutoCcListCount' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用**DescribeInstanceIds**查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                    ],
                ],
                [
                    'name' => 'QueryType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的黑白名单IP的来源。取值：'."\n"
                            .'- **manual**：手动添加'."\n"
                            .'- **auto**：自动添加',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'manual',
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
                                'example' => '5AC3785F-C789-4622-87A4-F58BE7F6B184',
                            ],
                            'WhiteCount' => [
                                'description' => '白名单IP的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'BlackCount' => [
                                'description' => '黑名单IP的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5AC3785F-C789-4622-87A4-F58BE7F6B184\\",\\n  \\"WhiteCount\\": 2,\\n  \\"BlackCount\\": 0\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeAutoCcListCountResponse>\\r\\n\\t<BlackCount>0</BlackCount>\\r\\n\\t<RequestId>5AC3785F-C789-4622-87A4-F58BE7F6B184</RequestId>\\r\\n\\t<WhiteCount>2</WhiteCount>\\r\\n</DescribeAutoCcListCountResponse>","errorExample":""}]',
            'title' => '查询黑名单和白名单IP的数量',
            'summary' => '查询针对DDoS高防实例的黑名单和白名单IP的数量。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeAutoCcBlacklist' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                    ],
                ],
                [
                    'name' => 'KeyWord',
                    'in' => 'query',
                    'schema' => [
                        'description' => '使用源IP关键字查询，指定要查询的源IP的前缀。'."\n"
                            ."\n"
                            .'> 必须大于3个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '138',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询请求时返回的页码。例如，查询第一页的返回结果，则填写**1**。',
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
                        'description' => '页面显示的记录数量。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
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
                                'description' => '黑名单IP的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'E78C8472-0B15-42D5-AF22-A32A78818AB2',
                            ],
                            'AutoCcBlacklist' => [
                                'description' => '针对DDoS高防实例的黑名单IP列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '黑名单IP的来源。取值：'."\n"
                                                .'- **manual**：手动添加'."\n"
                                                .'- **auto**：自动添加',
                                            'type' => 'string',
                                            'example' => 'manual',
                                        ],
                                        'DestIp' => [
                                            'description' => 'DDoS高防实例的IP。',
                                            'type' => 'string',
                                            'example' => '192.0.XX.XX',
                                        ],
                                        'EndTime' => [
                                            'description' => '黑名单IP的失效时间。时间戳格式，单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1584093569',
                                        ],
                                        'SourceIp' => [
                                            'description' => '黑名单IP。',
                                            'type' => 'string',
                                            'example' => '47.100.XX.XX',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"E78C8472-0B15-42D5-AF22-A32A78818AB2\\",\\n  \\"AutoCcBlacklist\\": [\\n    {\\n      \\"Type\\": \\"manual\\",\\n      \\"DestIp\\": \\"192.0.XX.XX\\",\\n      \\"EndTime\\": 1584093569,\\n      \\"SourceIp\\": \\"47.100.XX.XX\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAutoCcBlacklistResponse>\\n    <TotalCount>2</TotalCount>\\n    <RequestId>E78C8472-0B15-42D5-AF22-A32A78818AB2</RequestId>\\n    <AutoCcBlacklist>\\n        <Type>manual</Type>\\n        <DestIp>192.0.XX.XX</DestIp>\\n        <EndTime>1584093569</EndTime>\\n        <SourceIp>47.100.XX.XX</SourceIp>\\n    </AutoCcBlacklist>\\n</DescribeAutoCcBlacklistResponse>","errorExample":""}]',
            'title' => '查询针对DDoS高防实例的黑名单IP',
            'summary' => '查询针对DDoS高防实例的黑名单IP。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeAutoCcWhitelist' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                    ],
                ],
                [
                    'name' => 'KeyWord',
                    'in' => 'query',
                    'schema' => [
                        'description' => '使用源IP关键字查询，指定要查询的源IP的前缀。'."\n"
                            ."\n"
                            .'> 必须大于3个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '138',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询请求时返回的页码。例如，查询第一页的返回结果，则填写**1**。',
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
                        'description' => '页面显示的记录数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
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
                                'description' => '白名单IP的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'F09D085E-5E0F-4FF2-B32E-F4A644049162',
                            ],
                            'AutoCcWhitelist' => [
                                'description' => '针对DDoS高防实例的白名单IP列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '白名单IP类型。取值：'."\n"
                                                .'- **manual**：手动添加'."\n"
                                                .'- **auto**：自动添加',
                                            'type' => 'string',
                                            'example' => 'manual',
                                        ],
                                        'DestIp' => [
                                            'description' => 'DDoS高防实例的IP。',
                                            'type' => 'string',
                                            'example' => '203.***.***.117',
                                        ],
                                        'EndTime' => [
                                            'description' => '白名单IP的失效时间，单位：秒。**0**表示永久生效。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'SourceIp' => [
                                            'description' => '白名单IP。',
                                            'type' => 'string',
                                            'example' => '2.2.2.2',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"F09D085E-5E0F-4FF2-B32E-F4A644049162\\",\\n  \\"AutoCcWhitelist\\": [\\n    {\\n      \\"Type\\": \\"manual\\",\\n      \\"DestIp\\": \\"203.***.***.117\\",\\n      \\"EndTime\\": 0,\\n      \\"SourceIp\\": \\"2.2.2.2\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeAutoCcWhitelistResponse>\\r\\n\\t<AutoCcWhitelist>\\r\\n\\t\\t<Type>manual</Type>\\r\\n\\t\\t<SourceIp>4.4.4.4</SourceIp>\\r\\n\\t\\t<EndTime>0</EndTime>\\r\\n\\t\\t<DestIp>203.***.***.117</DestIp>\\r\\n\\t</AutoCcWhitelist>\\r\\n\\t<AutoCcWhitelist>\\r\\n\\t\\t<Type>manual</Type>\\r\\n\\t\\t<SourceIp>2.2.2.2</SourceIp>\\r\\n\\t\\t<EndTime>0</EndTime>\\r\\n\\t\\t<DestIp>203.***.***.117</DestIp>\\r\\n\\t</AutoCcWhitelist>\\r\\n\\t<TotalCount>2</TotalCount>\\r\\n\\t<RequestId>F09D085E-5E0F-4FF2-B32E-F4A644049162</RequestId>\\r\\n</DescribeAutoCcWhitelistResponse>","errorExample":""}]',
            'title' => '查询针对DDoS高防实例的白名单IP',
            'summary' => '查询针对DDoS高防实例的白名单IP。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeUnBlackholeCount' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
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
                                'example' => '232929FA-40B6-4C53-9476-EE335ABA44CD',
                            ],
                            'TotalCount' => [
                                'description' => '黑洞解封总次数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'RemainCount' => [
                                'description' => '剩余的黑洞解封次数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"232929FA-40B6-4C53-9476-EE335ABA44CD\\",\\n  \\"TotalCount\\": 5,\\n  \\"RemainCount\\": 5\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeUnBlackholeCountResponse>\\r\\n\\t<TotalCount>5</TotalCount>\\r\\n\\t<RequestId>232929FA-40B6-4C53-9476-EE335ABA44CD</RequestId>\\r\\n\\t<RemainCount>5</RemainCount>\\r\\n</DescribeUnBlackholeCountResponse>","errorExample":""}]',
            'title' => '查询黑洞解封次数',
            'summary' => '查询黑洞解封次数。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeBlackholeStatus' => [
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
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'DDoS高防实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-mp91j1ao****',
                        ],
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 20,
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
                            'BlackholeStatus' => [
                                'description' => 'DDoS高防实例的黑洞状态信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EndTime' => [
                                            'description' => '黑洞结束时间。时间戳格式，单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1540196323',
                                        ],
                                        'StartTime' => [
                                            'description' => '黑洞开始时间。时间戳格式，单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1540195323',
                                        ],
                                        'Ip' => [
                                            'description' => 'DDoS高防实例的IP。',
                                            'type' => 'string',
                                            'example' => '203.***.***.132',
                                        ],
                                        'BlackStatus' => [
                                            'description' => '黑洞状态。取值：'."\n"
                                                .'- **blackhole**：黑洞中'."\n"
                                                .'- **normal**：正常',
                                            'type' => 'string',
                                            'example' => 'blackhole',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\",\\n  \\"BlackholeStatus\\": [\\n    {\\n      \\"EndTime\\": 1540196323,\\n      \\"StartTime\\": 1540195323,\\n      \\"Ip\\": \\"203.***.***.132\\",\\n      \\"BlackStatus\\": \\"blackhole\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeBlackholeStatusResponse>\\r\\n\\t<RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\r\\n\\t<BlackholeStatus>\\r\\n\\t\\t<Ip>203.***.***.132</Ip>\\r\\n\\t\\t<BlackStatus>blackhole</BlackStatus>\\r\\n\\t\\t<StartTime>1540195323</StartTime>\\r\\n\\t\\t<EndTime>1540196323</EndTime>\\r\\n\\t</BlackholeStatus>\\r\\n</DescribeBlackholeStatusResponse>","errorExample":""}]',
            'title' => '查询DDoS高防实例的黑洞状态',
            'summary' => '查询DDoS高防实例的黑洞状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeNetworkRegionBlock' => [
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
                'abilityTreeCode' => '106160',
                'abilityTreeNodes' => [
                    'FEATUREddosOZ1QOD',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
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
                            'Config' => [
                                'description' => '区域封禁的配置信息。',
                                'type' => 'object',
                                'properties' => [
                                    'RegionBlockSwitch' => [
                                        'description' => '区域封禁的开关状态。取值：'."\n"
                                            .'- **on**：开启'."\n"
                                            .'- **off**：关闭',
                                        'type' => 'string',
                                        'example' => 'on',
                                    ],
                                    'Countries' => [
                                        'description' => '被封禁的海外地域代码列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '被封禁的海外地域代码。'."\n"
                                                ."\n"
                                                .'> 关于海外地域代码的详细信息，请参见[地域类型参数取值说明](~~167926~~)。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                    ],
                                    'Provinces' => [
                                        'description' => '被封禁的中国地域代码列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '被封禁的中国地域代码。例如，**11**表示北京市、**12**表示天津市。'."\n"
                                                ."\n"
                                                .'> 关于中国地域代码的详细信息，请参见[地域类型参数取值说明](~~167926~~)。'."\n",
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '11',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\",\\n  \\"Config\\": {\\n    \\"RegionBlockSwitch\\": \\"on\\",\\n    \\"Countries\\": [\\n      2\\n    ],\\n    \\"Provinces\\": [\\n      11\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询区域封禁配置',
            'summary' => '查询针对DDoS高防实例的区域封禁配置。',
        ],
        'DescribeBlockStatus' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询近源流量压制配置的DDoS高防实例的ID列表。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询近源流量压制配置的DDoS高防实例的ID。'."\n"
                                ."\n"
                                .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-zvp2eibz****',
                        ],
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 20,
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
                            'StatusList' => [
                                'description' => 'DDoS高防实例的近源流量压制配置。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Ip' => [
                                            'description' => 'DDoS高防实例的IP。',
                                            'type' => 'string',
                                            'example' => '203.XX.XX.88',
                                        ],
                                        'BlockStatusList' => [
                                            'description' => '近源流量压制配置。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'EndTime' => [
                                                        'description' => '封禁结束时间。使用时间戳表示，单位：秒。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '1540196323',
                                                    ],
                                                    'StartTime' => [
                                                        'description' => '封禁开始时间。使用时间戳表示，单位：秒。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '1540195323',
                                                    ],
                                                    'Line' => [
                                                        'description' => '封禁线路类型。取值：'."\n"
                                                            .'- **ct**：表示电信海外线路。'."\n"
                                                            .'- **cut**：表示联通海外线路。',
                                                        'type' => 'string',
                                                        'example' => 'cut',
                                                    ],
                                                    'BlockStatus' => [
                                                        'description' => '流量封禁状态。取值：'."\n"
                                                            .'- **areablock**：表示封禁中。'."\n"
                                                            .'- **normal**：表示正常（未封禁）。',
                                                        'type' => 'string',
                                                        'example' => 'areablock',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\",\\n  \\"StatusList\\": [\\n    {\\n      \\"Ip\\": \\"203.XX.XX.88\\",\\n      \\"BlockStatusList\\": [\\n        {\\n          \\"EndTime\\": 1540196323,\\n          \\"StartTime\\": 1540195323,\\n          \\"Line\\": \\"cut\\",\\n          \\"BlockStatus\\": \\"areablock\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeBlockStatusResponse>\\n    <RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\n    <StatusList>\\n        <Ip>203.XX.XX.88</Ip>\\n        <BlockStatusList>\\n            <EndTime>1540196323</EndTime>\\n            <StartTime>1540195323</StartTime>\\n            <Line>cut</Line>\\n            <BlockStatus>areablock</BlockStatus>\\n        </BlockStatusList>\\n    </StatusList>\\n</DescribeBlockStatusResponse>","errorExample":""}]',
            'title' => '查询实例近源流量压制配置',
            'summary' => '查询DDoS高防（中国内地）实例的近源流量压制配置。',
            'description' => '本接口用于查询DDoS高防（中国内地）实例的近源流量压制配置。'."\n"
                ."\n"
                .'> 本接口只适用于DDoS高防（中国内地）服务。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeUnBlockCount' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
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
                            'TotalCount' => [
                                'description' => '总共可用的近源流量压制次数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RemainCount' => [
                                'description' => '剩余可用的近源流量压制次数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '7',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\",\\n  \\"TotalCount\\": 10,\\n  \\"RemainCount\\": 7\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeUnBlockCountResponse>\\r\\n\\t<RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\r\\n\\t<TotalCount>10</TotalCount>\\r\\n\\t<RemainCount>7</RemainCount>\\r\\n</DescribeUnBlockCountResponse>","errorExample":""}]',
            'title' => '查询可用的近源流量压制次数',
            'summary' => '查询可用的近源流量压制次数。',
            'description' => '> 该接口仅适用于DDoS高防（新BGP）服务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'EmptyAutoCcBlacklist' => [
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
                'abilityTreeCode' => '106217',
                'abilityTreeNodes' => [
                    'FEATUREddosI8LHMA',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<EmptyAutoCcBlacklistResponse>\\r\\n\\t<RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\r\\n</EmptyAutoCcBlacklistResponse>","errorExample":""}]',
            'title' => '清空针对DDoS高防实例的黑名单IP',
            'summary' => '清空针对DDoS高防实例的黑名单IP。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'EmptyAutoCcWhitelist' => [
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
                'abilityTreeCode' => '106218',
                'abilityTreeNodes' => [
                    'FEATUREddosI8LHMA',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<EmptyAutoCcWhitelistResponse>\\r\\n\\t<RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\r\\n</EmptyAutoCcWhitelistResponse>","errorExample":""}]',
            'title' => '清空针对DDoS高防实例的白名单IP',
            'summary' => '清空针对DDoS高防实例的白名单IP。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ConfigNetworkRegionBlock' => [
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
                'abilityTreeCode' => '106056',
                'abilityTreeNodes' => [
                    'FEATUREddosOZ1QOD',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                    ],
                ],
                [
                    'name' => 'Config',
                    'in' => 'query',
                    'schema' => [
                        'description' => '区域封禁的配置信息，使用JSON格式的字符串表述，具体结构如下。'."\n"
                            .'- **RegionBlockSwitch**：String类型，必选，区域封禁的开关状态。取值：'."\n"
                            .'    - **on**：开启'."\n"
                            .'    - **off**：关闭'."\n"
                            .'- **Countries**：Array类型，可选，要封禁的国际地域代码列表。'."\n"
                            .'    > 关于国际地域代码的详细信息，请参见[地域类型参数取值说明](~~167926~~)。'."\n"
                            .'。'."\n"
                            ."\n"
                            .'- **Provinces**：Array类型，可选，要封禁的中国地域代码列表。'."\n"
                            ."\n"
                            .'    > 关于中国地域代码的详细信息，请参见[地域类型参数取值说明](~~167926~~)。'."\n"
                            ."\n"
                            .'    例如，`[11,12]`表示北京市和天津市。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"RegionBlockSwitch":"on","Countries":[],"Provinces":[11,12,13,14,15,21,22,23,31,32,33,34,35,36,37,41,42,43,44,45,46,50,51,52,53,54,61,62,63,64,65,71,81,82]}',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\"\\n}","errorExample":""},{"type":"xml","example":"<ConfigNetworkRegionBlockResponse>\\n    <RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\n</ConfigNetworkRegionBlockResponse>","errorExample":""}]',
            'title' => '设置针对DDoS高防实例的区域封禁',
            'summary' => '设置针对DDoS高防实例的区域封禁。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeUdpReflect' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-i7m25564****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例所属地域ID。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**（默认）：表示中国内地，对应DDoS高防（中国内地）实例。'."\n"
                            .'- **ap-southeast-1**：表示非中国内地，对应DDoS高防（非中国内地）实例。',
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
                                'example' => 'F97A8766-FB4D-411A-9CD5-2CFF701B592F',
                            ],
                            'UdpSports' => [
                                'description' => '被UDP反射攻击防护策略过滤的反射源端口列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '被UDP反射攻击防护策略过滤的反射源端口。',
                                    'type' => 'string',
                                    'example' => '17',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F97A8766-FB4D-411A-9CD5-2CFF701B592F\\",\\n  \\"UdpSports\\": [\\n    \\"17\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeUdpReflectResponse>\\r\\n\\t<RequestId>F97A8766-FB4D-411A-9CD5-2CFF701B592F</RequestId>\\r\\n\\t<UdpSports>17</UdpSports>\\r\\n\\t<UdpSports>19</UdpSports>\\r\\n\\t<UdpSports>69</UdpSports>\\r\\n\\t<UdpSports>111</UdpSports>\\r\\n\\t<UdpSports>123</UdpSports>\\r\\n\\t<UdpSports>137</UdpSports>\\r\\n\\t<UdpSports>161</UdpSports>\\r\\n\\t<UdpSports>389</UdpSports>\\r\\n\\t<UdpSports>1194</UdpSports>\\r\\n\\t<UdpSports>1900</UdpSports>\\r\\n\\t<UdpSports>3389</UdpSports>\\r\\n\\t<UdpSports>11211</UdpSports>\\r\\n\\t<UdpSports>11212</UdpSports>\\r\\n</DescribeUdpReflectResponse>","errorExample":""}]',
            'title' => '查询 UDP 反射攻击防护策略',
            'summary' => '查询指定的DDoS高防实例上被UDP反射攻击防护策略过滤的反射源端口。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ConfigUdpReflect' => [
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
                'abilityTreeCode' => '106059',
                'abilityTreeNodes' => [
                    'FEATUREddosN7DYCX',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要操作的DDoS高防实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-i7m25564****',
                    ],
                ],
                [
                    'name' => 'Config',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要添加的UDP反射攻击防护策略的配置。'."\n"
                            ."\n"
                            .'该参数使用JSON结构体转换的字符串表示。JSON结构体包含以下字段：'."\n"
                            ."\n"
                            .'- **UdpSports**：Array类型，必选，要封禁的UDP反射源端口，示例：`[17,19]`。'."\n"
                            ."\n"
                            .'    推荐您封禁以下常见的UDP反射攻击的源端口：'."\n"
                            ."\n"
                            .'    - UDP 17：QOTD反射攻击'."\n"
                            .'    - UDP 19：CharGEN反射攻击'."\n"
                            .'    - UDP 69：TFTP反射攻击'."\n"
                            .'    - UDP 111：Portmap反射攻击'."\n"
                            .'    - UDP 123：NTP反射攻击'."\n"
                            .'    - UDP 137：NetBIOS反射攻击'."\n"
                            .'    - UDP 161：SNMPv2反射攻击'."\n"
                            .'    - UDP 389：CLDAP反射攻击'."\n"
                            .'    - UDP 1194：OpenVPN反射攻击'."\n"
                            .'    - UDP 1900：SSDP反射攻击'."\n"
                            .'    - UDP 3389：RDP反射攻击'."\n"
                            .'    - UDP 11211：Memcached反射攻击',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{\\"UdpSports\\":[17,19]}',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例所属地域ID。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**（默认）：表示中国内地，即DDoS高防（中国内地）实例。'."\n"
                            .'- **ap-southeast-1**：表示非中国内地，即DDoS高防（非中国内地）实例。',
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
                                'example' => '9EC62E89-BD30-4FCD-9CB8-FA53865FF0D7',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9EC62E89-BD30-4FCD-9CB8-FA53865FF0D7\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ConfigUdpReflectResponse>\\r\\n\\t<RequestId>9EC62E89-BD30-4FCD-9CB8-FA53865FF0D7</RequestId>\\r\\n</ConfigUdpReflectResponse>","errorExample":""}]',
            'title' => '配置 UDP 反射攻击防护策略',
            'summary' => '添加UDP反射攻击防护策略，过滤指定的反射源端口。',
            'description' => '本接口用于为DDoS高防实例添加UDP反射攻击防护策略，过滤指定的反射源端口。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateWebCCRule' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。'."\n"
                            ."\n"
                            .'关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            ."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则名称。支持使用英文字母、数字或下划线（_），且长度不能超过128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testrule',
                    ],
                ],
                [
                    'name' => 'Act',
                    'in' => 'query',
                    'schema' => [
                        'description' => '对命中防护规则的请求执行的动作。取值：'."\n"
                            ."\n"
                            .'- **close**：表示封禁该请求。'."\n"
                            .'- **captcha**：表示发起人机识别验证。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'close',
                    ],
                ],
                [
                    'name' => 'Count',
                    'in' => 'query',
                    'schema' => [
                        'description' => '单一IP访问次数。取值范围：**2**~**2000**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '60',
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '检测时长。取值范围：**5**~**10800**，单位：秒。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '匹配模式。取值：'."\n"
                            .'- **prefix**：表示前缀匹配。'."\n"
                            .'- **match**：表示完全匹配。'."\n"
                            ."\n"
                            .'> 检测路径**URI**中包含参数时，请选择前缀匹配（**prefix**）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prefix',
                    ],
                ],
                [
                    'name' => 'Ttl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '封禁时长。取值范围：**60**~**86400**，单位：秒。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '60',
                    ],
                ],
                [
                    'name' => 'Uri',
                    'in' => 'query',
                    'schema' => [
                        'description' => '检测路径。'."\n"
                            .'> URI不支持修改。网站业务的域名，检测路径，规则名称唯一确定一条规则。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/abc/a.php',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据的主体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","type":"json"}]',
            'title' => '创建网站CC防护自定义规则',
            'summary' => '创建网站业务频率控制防护（CC防护）的自定义规则。',
        ],
        'DeleteWebCCRule' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的自定义频率控制（CC防护）规则的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'wq',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteWebCCRuleResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</DeleteWebCCRuleResponse>","errorExample":""}]',
            'title' => '删除网站CC防护自定义规则',
            'summary' => '删除网站业务频率控制防护（CC防护）的自定义规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteWebPreciseAccessRule' => [
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
                'operationType' => 'delete',
                'abilityTreeCode' => '106090',
                'abilityTreeNodes' => [
                    'FEATUREddosI8LHMA',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'RuleNames',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要删除的精确访问控制规则的名称。',
                        'type' => 'array',
                        'items' => [
                            'description' => '访问控制规则的名称。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'testrule',
                        ],
                        'required' => true,
                        'example' => 'testrule',
                        'maxItems' => 10,
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteWebPreciseAccessRule>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</DeleteWebPreciseAccessRule>","errorExample":""}]',
            'title' => '删除网站业务精确访问控制规则',
            'summary' => '删除网站业务精确访问控制规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyWebAIProtectSwitch' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'Config',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AI智能防护配置的详细信息，使用JSON格式的字符串表述，具体结构如下。'."\n"
                            .'- **AiRuleEnable**：Integer类型，必选，AI智能防护功能的开关状态。取值：'."\n"
                            .'    - **0**：关闭'."\n"
                            .'    - **1**：开启',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"AiRuleEnable": 1}',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyWebAIProtectSwitchResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</ModifyWebAIProtectSwitchResponse>","errorExample":""}]',
            'title' => '设置网站业务AI智能防护的开关状态',
            'summary' => '设置网站业务AI智能防护的开关状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyWebAIProtectMode' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'Config',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AI智能防护配置的详细信息，使用JSON格式的字符串表述，具体结构如下。'."\n"
                            .'- **AiTemplate**：String类型，必选，AI智能防护功能的防护等级。取值：'."\n"
                            .'    - **level30**：宽松'."\n"
                            .'    - **level60**：正常'."\n"
                            .'    - **level90**：严格'."\n"
                            .'- **AiMode**：String类型，必选，AI智能防护功能的防护模式。取值：'."\n"
                            .'    - **watch**：预警模式'."\n"
                            .'    - **defense**：防护模式',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"AiTemplate":"level60","AiMode":"defense"}',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyWebAIProtectModeResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</ModifyWebAIProtectModeResponse>","errorExample":""}]',
            'title' => '设置网站业务AI智能防护的模式',
            'summary' => '设置网站业务AI智能防护的模式。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyWebIpSetSwitch' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'Config',
                    'in' => 'query',
                    'schema' => [
                        'description' => '黑白名单（针对域名）的详细信息，使用JSON格式的字符串表述，具体结构如下。'."\n"
                            ."\n"
                            .' **bwlist_enable**：Integer类型，必选，黑白名单（针对域名）功能的开关状态。取值：'."\n"
                            ."\n"
                            .'-   0：关闭'."\n"
                            .'-    1：开启',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"bwlist_enable":1}',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyWebIpSetSwitchResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</ModifyWebIpSetSwitchResponse>","errorExample":""}]',
            'title' => '设置网站业务黑白名单开关状态',
            'summary' => '设置网站业务黑白名单（针对域名）的开关状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'EnableWebCC' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<EnableWebCCResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</EnableWebCCResponse>","errorExample":""}]',
            'title' => '开启网站业务频率控制防护（CC防护）的开关',
            'summary' => '开启网站业务频率控制防护（CC防护）的开关。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DisableWebCC' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DisableWebCCResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</DisableWebCCResponse>","errorExample":""}]',
            'title' => '关闭网站业务CC防护开关',
            'summary' => '关闭网站业务频率控制防护（CC防护）的开关。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'EnableWebCCRule' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<EnableWebCCRuleResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</EnableWebCCRuleResponse>","errorExample":""}]',
            'title' => '开启网站业务CC防护自定义规则开关',
            'summary' => '开启网站业务频率控制防护（CC防护）的自定义规则开关。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DisableWebCCRule' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DisableWebCCRuleResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</DisableWebCCRuleResponse>","errorExample":""}]',
            'title' => '关闭网站业务CC防护自定义规则开关',
            'summary' => '关闭网站业务频率控制防护（CC防护）的自定义规则开关。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyWebCCRule' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testrule',
                    ],
                ],
                [
                    'name' => 'Act',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阻断类型。取值：'."\n"
                            .'- **close**：封禁'."\n"
                            .'- **captcha**：人机识别',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'close',
                    ],
                ],
                [
                    'name' => 'Count',
                    'in' => 'query',
                    'schema' => [
                        'description' => '单一IP访问次数。取值范围：**2**~**2000**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '检测时长。取值范围：**5**~**10800**，单位：秒。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '匹配模式。取值：'."\n"
                            .'- **prefix**：前缀匹配'."\n"
                            .'- **match**：完全匹配',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prefix',
                    ],
                ],
                [
                    'name' => 'Ttl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '封禁时长。取值范围：**60**~**86400**，单位：秒。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '60',
                    ],
                ],
                [
                    'name' => 'Uri',
                    'in' => 'query',
                    'schema' => [
                        'description' => '检测路径。'."\n"
                            .'> URI不支持修改。网站业务的域名，检测路径，规则名称唯一确定一条规则。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/abc',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyWebCCRuleResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</ModifyWebCCRuleResponse>","errorExample":""}]',
            'title' => '编辑网站业务CC防护自定义规则',
            'summary' => '编辑网站业务频率控制防护（CC防护）的自定义规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyWebPreciseAccessSwitch' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'Config',
                    'in' => 'query',
                    'schema' => [
                        'description' => '精确访问控制的开关状态配置，使用JSON格式的字符串表述，具体结构如下。'."\n"
                            .'- **PreciseRuleEnable**：Integer类型，必选，精确访问控制的开关状态。取值：'."\n"
                            .'    - **0**：关闭'."\n"
                            .'    - **1**：开启',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"PreciseRuleEnable":0}',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyWebPreciseAccessSwitchResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</ModifyWebPreciseAccessSwitchResponse>","errorExample":""}]',
            'title' => '设置网站业务精确访问控制的开关状态',
            'summary' => '设置网站业务精确访问控制的开关状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyWebPreciseAccessRule' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'Rules',
                    'in' => 'query',
                    'schema' => [
                        'description' => '精确访问控制规则的配置，使用JSON格式的字符串表述，具体结构如下。'."\n"
                            .'- **action**：String类型，必选，匹配动作。取值：'."\n"
                            .'    - **accept**：放行'."\n"
                            .'    - **block**：封禁'."\n"
                            .'    - **challenge**：挑战'."\n"
                            .'- **name**：String类型，必选，规则名称。'."\n"
                            .'- **condition**：Map类型，必选，匹配条件。具体结构如下。'."\n"
                            ."\n"
                            .'    > 如果设置了多个匹配条件，则多个条件间是且的关系。'."\n"
                            ."\n"
                            .'    - **field**：String类型，必选，匹配字段。'."\n"
                            .'    - **match_method**：String类型，必选，匹配方法。'."\n"
                            .' '."\n"
                            .'        > 关于**field**和**match_method**的取值，请参见请求参数表下的补充描述。'."\n"
                            ."\n"
                            .'    - **content**：String类型，必选，匹配内容。'."\n"
                            .'- **header_name**：String类型，可选，头部字段名称。仅在**field**为**header**时生效。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"action":"block","name":"testrule","condition":[{"field":"uri","match_method":"contain","content":"/test/123"}]}]',
                    ],
                ],
                [
                    'name' => 'Expires',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则有效期。单位：秒。规则的匹配动作为阻断时（**action**为**block**）生效，在规则有效期内阻断访问请求。不传入该参数表示永久生效。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '600',
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
                                'example' => 'F908E959-ADA8-4D7B-8A05-FF2F67F50964',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F908E959-ADA8-4D7B-8A05-FF2F67F50964\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyWebPreciseAccessRuleResponse>\\n    <RequestId>F908E959-ADA8-4D7B-8A05-FF2F67F50964</RequestId>\\n</ModifyWebPreciseAccessRuleResponse>","errorExample":""}]',
            'title' => '编辑网站业务精确访问控制规则',
            'summary' => '编辑网站业务精确访问控制规则。',
            'requestParamsDescription' => '**field和match_method的取值及对应关系**'."\n"
                ."\n"
                .'| 匹配字段（field） | 描述 | 适用的逻辑符（match_method） |'."\n"
                .'|-----------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|-----------------------------------------------------------------------------------------------------------------------------------------|'."\n"
                .'| **ip** | 访问请求的来源IP。 | **belong** ：属于<br>**nbelong** ：不属于 |'."\n"
                .'| **uri** | 访问请求的URI地址。 | **contain** ：包含<br>**ncontain** ：不包含<br>**equal** ：等于<br>**nequal** ：不等于<br>**lless** ：长度小于<br>**lequal** ：长度等于<br>**lgreat** ：长度大于<br>**regular** ：正则匹配 |'."\n"
                .'| **referer** | 访问请求的来源网址，即该访问请求是从哪个页面跳转产生的。 | **contain** ：包含<br>**ncontain** ：不包含<br>**equal** ：等于<br>**nequal** ：不等于<br>**lless** ：长度小于<br>**lequal** ：长度等于<br>**lgreat** ：长度大于<br>**nexist** ：不存在<br>**regular** ：正则匹配 |'."\n"
                .'| **user-agent** | 发起访问请求的客户端的浏览器标识、渲染引擎标识和版本信息等浏览器相关信息。 | **contain** ：包含<br>**ncontain** ：不包含<br>**equal** ：等于<br>**nequal** ：不等于<br>**lless** ：长度小于<br>**lequal** ：长度等于<br>**lgreat** ：长度大于<br>**regular** ：正则匹配 |'."\n"
                .'| **params** | 访问请求的URL地址中的参数部分，通常指URL中”?”后面的部分。例如，`demo.aliyundoc.com/index.html?action=login`中的`action=login`就是参数部分。 | **contain** ：包含<br>**ncontain** ：不包含<br>**equal** ：等于<br>**nequal** ：不等于<br>**lless** ：长度小于<br>**lequal** ：长度等于<br>**lgreat** ：长度大于 |'."\n"
                .'| **cookie** | 访问请求中的Cookie信息。 | **contain** ：包含<br>**ncontain** ：不包含<br>**equal** ：等于<br>**nequal** ：不等于<br>**lless** ：长度小于<br>**lequal** ：长度等于<br>**lgreat** ：长度大于<br>**nexist** ：不存在 |'."\n"
                .'| **content-type** | 访问请求指定的响应HTTP内容类型，即MIME类型信息。 | **contain** ：包含<br>**ncontain** ：不包含<br>**equal** ：等于<br>**nequal** ：不等于<br>**lless** ：长度小于<br>**lequal** ：长度等于<br>**lgreat** ：长度大于 |'."\n"
                .'| **x-forwarded-for** | 访问请求的客户端真实IP。X-Forwarded-For（XFF）用来识别通过HTTP代理或负载均衡方式转发的访问请求的客户端最原始的IP地址的HTTP请求头字段，只有通过HTTP代理或者负载均衡服务器转发的访问请求才会包含该项。 | **contain** ：包含<br>**ncontain** ：不包含<br>**equal** ：等于<br>**nequal** ：不等于<br>**lless** ：长度小于<br>**lequal** ：长度等于<br>**lgreat** ：长度大于<br>**nexist** ：不存在<br>**regular** ：正则匹配 |'."\n"
                .'| **content-length** | 访问请求的所包含的字节数。 | **vless** ：值小于<br>**vequal** ：值等于<br>**vgreat** ：值大于 |'."\n"
                .'| **post-body** | 访问请求的内容信息。 | **contain** ：包含<br>**ncontain** ：不包含<br>**equal** ：等于<br>**nequal** ：不等于<br>**regular** ：正则匹配 |'."\n"
                .'| **http-method** | 访问请求的方法，如GET、POST等。 | **equal** ：等于<br>**nequal** ：不等于 |'."\n"
                .'| **header** | 访问请求的头部信息，用于自定义HTTP头部字段。 | **contain** ：包含<br>**ncontain** ：不包含<br>**equal** ：等于<br>**nequal** ：不等于<br>**lless** ：长度小于<br>**lequal** ：长度等于<br>**lgreat** ：长度大于<br>**nexist** ：不存在 |'."\n"
                ."\n",
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyWebAreaBlockSwitch' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要设置区域封禁功能的域名。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeDomains](~~91724~~)查询所有已接入DDoS高防防护的域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'Config',
                    'in' => 'query',
                    'schema' => [
                        'description' => '区域封禁（针对域名）的开关状态。使用JSON结构体转化的字符串表示，JSON结构体包含以下参数：'."\n"
                            .'- **RegionblockEnable**：Integer类型，必选，区域封禁（针对域名）的开关状态。取值：'."\n"
                            .'    - **1**：表示开启。'."\n"
                            .'    - **0**：表示关闭。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"RegionblockEnable": 1}',
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
                                'example' => '6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyWebAreaBlockSwitchResponse>\\n    <RequestId>6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1</RequestId>\\n</ModifyWebAreaBlockSwitchResponse>","errorExample":""}]',
            'title' => '设置网站业务区域封禁开关状态',
            'summary' => '设置网站业务区域封禁（针对域名）的开关状态。',
            'description' => '本接口用于设置网站业务区域封禁（针对域名）的开关状态。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyWebAreaBlock' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。'."\n"
                            ."\n"
                            .'关于资源组的更多信息，请参见[创建资源组](~~94485~~)。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要操作的域名。'."\n"
                            ."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'Regions',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要封禁的地域列表。'."\n"
                            ."\n"
                            .'> 不设置该参数表示关闭区域封禁（针对域名）功能。'."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '要封禁的地域列表。支持封禁中国地域（省市区维度）和国际地域（国家维度），例如，**CN-310000**表示上海市、**OVERSEAS-US**表示美国。不设置该参数表示关闭区域封禁（针对域名）功能。'."\n"
                                ."\n"
                                .'> 关于该参数的取值说明，请参见[地域类型参数取值说明](~~167926~~)。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'CN-310000',
                        ],
                        'required' => false,
                        'example' => 'CN-SHANGHAI',
                        'maxItems' => 1000,
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
                                'example' => '5AA2BD65-E289-4E91-9DD9-3E1FB2140D17',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5AA2BD65-E289-4E91-9DD9-3E1FB2140D17\\"\\n}","type":"json"}]',
            'title' => '设置网站业务区域封禁地区',
            'summary' => '设置网站业务区域封禁（针对域名）的封禁地区。',
        ],
        'DescribeWebCcProtectSwitch' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domains',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '网站业务的域名。最多可查询5个网站业务域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'array',
                        'items' => [
                            'description' => '网站业务的域名。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'www.aliyun**.com',
                        ],
                        'required' => true,
                        'example' => 'www.aliyun.com',
                        'maxItems' => 5,
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
                                'example' => '3ADD9EED-CA4B-488C-BC82-01B0B899363D',
                            ],
                            'ProtectSwitchList' => [
                                'description' => '网站业务各防护功能的开关状态。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'BlackWhiteListEnable' => [
                                            'description' => '黑白名单（针对域名）的开关状态。取值：'."\n"
                                                .'- **0**：关闭'."\n"
                                                .'- **1**：开启',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'AiTemplate' => [
                                            'description' => 'AI智能防护的等级。取值：'."\n"
                                                .'- **level30**：宽松'."\n"
                                                .'- **level60**：正常'."\n"
                                                .'- **level90**：严格',
                                            'type' => 'string',
                                            'example' => 'level60',
                                        ],
                                        'PreciseRuleEnable' => [
                                            'description' => '精确访问控制的开关状态。取值：'."\n"
                                                .'- **0**：关闭'."\n"
                                                .'- **1**：开启',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'Domain' => [
                                            'description' => '网站域名。',
                                            'type' => 'string',
                                            'example' => 'www.aliyun.com',
                                        ],
                                        'AiMode' => [
                                            'description' => 'AI智能防护的模式。取值：'."\n"
                                                .'- **watch**：预警模式'."\n"
                                                .'- **defense**：防护模式',
                                            'type' => 'string',
                                            'example' => 'defense',
                                        ],
                                        'AiRuleEnable' => [
                                            'description' => 'AI智能防护的开关状态。取值：'."\n"
                                                .'- **0**：关闭'."\n"
                                                .'- **1**：开启',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'RegionBlockEnable' => [
                                            'description' => '区域封禁（针对域名）的开关状态。取值：'."\n"
                                                .'- **0**：关闭'."\n"
                                                .'- **1**：开启',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'CcTemplate' => [
                                            'description' => '频率控制防护（CC防护）的模式。取值：'."\n"
                                                .'- **default**：正常'."\n"
                                                .'- **gf_under_attack**：攻击紧急'."\n"
                                                .'- **gf_sos_verify**：严格'."\n"
                                                .'- **gf_sos_enhance**：超级严格',
                                            'type' => 'string',
                                            'example' => 'default',
                                        ],
                                        'CcCustomRuleEnable' => [
                                            'description' => '自定义频率控制防护（CC防护）的开关状态。取值：'."\n"
                                                .'- **0**：关闭'."\n"
                                                .'- **1**：开启',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'CcEnable' => [
                                            'description' => '频率控制防护（CC防护）的开关状态。取值：'."\n"
                                                .'- **0**：关闭'."\n"
                                                .'- **1**：开启',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'CcGlobalSwitch' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3ADD9EED-CA4B-488C-BC82-01B0B899363D\\",\\n  \\"ProtectSwitchList\\": [\\n    {\\n      \\"BlackWhiteListEnable\\": 1,\\n      \\"AiTemplate\\": \\"level60\\",\\n      \\"PreciseRuleEnable\\": 0,\\n      \\"Domain\\": \\"www.aliyun.com\\",\\n      \\"AiMode\\": \\"defense\\",\\n      \\"AiRuleEnable\\": 1,\\n      \\"RegionBlockEnable\\": 0,\\n      \\"CcTemplate\\": \\"default\\",\\n      \\"CcCustomRuleEnable\\": 0,\\n      \\"CcEnable\\": 1,\\n      \\"CcGlobalSwitch\\": \\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeWebCcProtectSwitchResponse>\\r\\n\\t<RequestId>3ADD9EED-CA4B-488C-BC82-01B0B899363D</RequestId>\\r\\n\\t<ProtectSwitchList>\\r\\n\\t\\t<CcEnable>1</CcEnable>\\r\\n\\t\\t<BlackWhiteListEnable>1</BlackWhiteListEnable>\\r\\n\\t\\t<AiRuleEnable>1</AiRuleEnable>\\r\\n\\t\\t<CcCustomRuleEnable>0</CcCustomRuleEnable>\\r\\n\\t\\t<PreciseRuleEnable>0</PreciseRuleEnable>\\r\\n\\t\\t<Domain>www.aliyun.com</Domain>\\r\\n\\t\\t<AiMode>defense</AiMode>\\r\\n\\t\\t<RegionBlockEnable>0</RegionBlockEnable>\\r\\n\\t\\t<CcTemplate>default</CcTemplate>\\r\\n\\t\\t<AiTemplate>level60</AiTemplate>\\r\\n\\t</ProtectSwitchList>\\r\\n</DescribeWebCcProtectSwitchResponse>","errorExample":""}]',
            'title' => '查询网站业务各防护功能的开关状态',
            'summary' => '查询网站业务各防护功能的开关状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeWebCCRules' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询请求时返回的页码。例如，查询第一页的返回结果，则填写**1**。',
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
                        'description' => '页面显示的记录数量。',
                        'type' => 'string',
                        'required' => true,
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
                                'description' => '频率控制（CC防护）自定义规则的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'EAED912D-909E-45F0-AF74-AC0CCDCAE314',
                            ],
                            'WebCCRules' => [
                                'description' => '频率控制（CC防护）自定义规则。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Ttl' => [
                                            'description' => '封禁时长。取值范围：**1**~**1440**，单位：分钟。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '60',
                                        ],
                                        'Act' => [
                                            'description' => '阻断类型。取值：'."\n"
                                                .'- **close**：封禁'."\n"
                                                .'- **captcha**：人机识别',
                                            'type' => 'string',
                                            'example' => 'close',
                                        ],
                                        'Interval' => [
                                            'description' => '检测间隔。取值范围：**5**~**10800**，单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                        ],
                                        'Mode' => [
                                            'description' => '匹配模式。取值：'."\n"
                                                .'- **prefix**：前缀匹配'."\n"
                                                .'- **match**：完全匹配',
                                            'type' => 'string',
                                            'example' => 'prefix',
                                        ],
                                        'Name' => [
                                            'description' => '规则名称。',
                                            'type' => 'string',
                                            'example' => 'wq',
                                        ],
                                        'Uri' => [
                                            'description' => '检测路径。',
                                            'type' => 'string',
                                            'example' => '/hello',
                                        ],
                                        'Count' => [
                                            'description' => '单一IP访问次数。取值范围：**2**~**2000**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"EAED912D-909E-45F0-AF74-AC0CCDCAE314\\",\\n  \\"WebCCRules\\": [\\n    {\\n      \\"Ttl\\": 60,\\n      \\"Act\\": \\"close\\",\\n      \\"Interval\\": 5,\\n      \\"Mode\\": \\"prefix\\",\\n      \\"Name\\": \\"wq\\",\\n      \\"Uri\\": \\"/hello\\",\\n      \\"Count\\": 3\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeWebCCRulesResponse>\\r\\n\\t<TotalCount>1</TotalCount>\\r\\n\\t<RequestId>EAED912D-909E-45F0-AF74-AC0CCDCAE314</RequestId>\\r\\n\\t<WebCCRules>\\r\\n\\t\\t<Act>close</Act>\\r\\n\\t\\t<Mode>prefix</Mode>\\r\\n\\t\\t<Count>3</Count>\\r\\n\\t\\t<Ttl>60</Ttl>\\r\\n\\t\\t<Uri>/hello</Uri>\\r\\n\\t\\t<Name>wq</Name>\\r\\n\\t\\t<Interval>5</Interval>\\r\\n\\t</WebCCRules>\\r\\n</DescribeWebCCRulesResponse>","errorExample":""}]',
            'title' => '查询网站业务CC防护自定义规则',
            'summary' => '查询网站业务频率控制防护（CC防护）的自定义规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeWebPreciseAccessRule' => [
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
                'abilityTreeCode' => '106208',
                'abilityTreeNodes' => [
                    'FEATUREddosOZ1QOD',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domains',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'array',
                        'items' => [
                            'description' => '网站业务的域名。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'www.test****.com',
                        ],
                        'required' => true,
                        'example' => 'www.aliyun.com',
                        'maxItems' => 5,
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
                                'example' => '209EEFBF-B0C7-441E-8C28-D0945A57A638',
                            ],
                            'PreciseAccessConfigList' => [
                                'description' => '网站业务精确访问控制规则。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Domain' => [
                                            'description' => '网站域名。',
                                            'type' => 'string',
                                            'example' => 'www.aliyun.com',
                                        ],
                                        'RuleList' => [
                                            'description' => '规则列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Action' => [
                                                        'description' => '匹配动作。取值：'."\n"
                                                            .'- **accept**：放行'."\n"
                                                            .'- **block**：封禁'."\n"
                                                            .'- **challenge**：挑战',
                                                        'type' => 'string',
                                                        'example' => 'accept',
                                                    ],
                                                    'Owner' => [
                                                        'description' => '规则来源。取值：'."\n"
                                                            .'- **manual**：手动添加（默认）'."\n"
                                                            .'- **auto**：自动生成',
                                                        'type' => 'string',
                                                        'example' => 'manual',
                                                    ],
                                                    'Expires' => [
                                                        'description' => '规则有效期。单位：秒。规则的匹配动作为阻断时（**action**为**block**）生效，在规则有效期内阻断访问请求。**0**表示永久生效。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '0',
                                                    ],
                                                    'Name' => [
                                                        'description' => '规则名称。',
                                                        'type' => 'string',
                                                        'example' => 'testrule',
                                                    ],
                                                    'ConditionList' => [
                                                        'description' => '匹配条件列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'MatchMethod' => [
                                                                    'description' => '逻辑符。',
                                                                    'type' => 'string',
                                                                    'example' => 'belong',
                                                                ],
                                                                'Field' => [
                                                                    'description' => '匹配字段。',
                                                                    'type' => 'string',
                                                                    'example' => 'ip',
                                                                ],
                                                                'Content' => [
                                                                    'description' => '匹配内容。',
                                                                    'type' => 'string',
                                                                    'example' => '1.1.1.1',
                                                                ],
                                                                'HeaderName' => [
                                                                    'description' => '自定义HTTP头部字段名称。'."\n"
                                                                        ."\n"
                                                                        .'> 仅在**Field**为**header**时有效。',
                                                                    'type' => 'string',
                                                                    'example' => 'null',
                                                                ],
                                                                'ContentList' => [
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
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"209EEFBF-B0C7-441E-8C28-D0945A57A638\\",\\n  \\"PreciseAccessConfigList\\": [\\n    {\\n      \\"Domain\\": \\"www.aliyun.com\\",\\n      \\"RuleList\\": [\\n        {\\n          \\"Action\\": \\"accept\\",\\n          \\"Owner\\": \\"manual\\",\\n          \\"Expires\\": 0,\\n          \\"Name\\": \\"testrule\\",\\n          \\"ConditionList\\": [\\n            {\\n              \\"MatchMethod\\": \\"belong\\",\\n              \\"Field\\": \\"ip\\",\\n              \\"Content\\": \\"1.1.1.1\\",\\n              \\"HeaderName\\": \\"null\\",\\n              \\"ContentList\\": [\\n                \\"\\"\\n              ]\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeWebPreciseAccessRuleResponse>\\r\\n\\t<PreciseAccessConfigList>\\r\\n\\t\\t<RuleList>\\r\\n\\t\\t\\t<Owner>manual</Owner>\\r\\n\\t\\t\\t<Action>accept</Action>\\r\\n\\t\\t\\t<ConditionList>\\r\\n\\t\\t\\t\\t<MatchMethod>belong</MatchMethod>\\r\\n\\t\\t\\t\\t<Field>ip</Field>\\r\\n\\t\\t\\t\\t<HeaderName></HeaderName>\\r\\n\\t\\t\\t\\t<Content>1.***.***.2</Content>\\r\\n\\t\\t\\t</ConditionList>\\r\\n\\t\\t\\t<Expires>0</Expires>\\r\\n\\t\\t\\t<Name>testrule</Name>\\r\\n\\t\\t</RuleList>\\r\\n\\t\\t<Domain>www.aliyun.com</Domain>\\r\\n\\t</PreciseAccessConfigList>\\r\\n\\t<RequestId>209EEFBF-B0C7-441E-8C28-D0945A57A638</RequestId>\\r\\n</DescribeWebPreciseAccessRuleResponse>","errorExample":""}]',
            'title' => '查询网站业务精确访问控制规则',
            'summary' => '查询网站业务精确访问控制规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeWebAreaBlockConfigs' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domains',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'array',
                        'items' => [
                            'description' => '网站业务的域名。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'www.aliyun**.com',
                        ],
                        'required' => true,
                        'example' => 'www.aliyun.com',
                        'maxItems' => 10,
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                            'AreaBlockConfigs' => [
                                'description' => '区域封禁（针对域名）的配置信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Domain' => [
                                            'description' => '网站域名。',
                                            'type' => 'string',
                                            'example' => 'www.aliyun.com',
                                        ],
                                        'RegionList' => [
                                            'description' => '封禁地区信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Region' => [
                                                        'description' => '地区。',
                                                        'type' => 'string',
                                                        'example' => 'CN-SHANGHAI',
                                                    ],
                                                    'Block' => [
                                                        'description' => '封禁状态。取值：'."\n"
                                                            .'- **0**：未封禁'."\n"
                                                            .'- **1**：已封禁',
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
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\",\\n  \\"AreaBlockConfigs\\": [\\n    {\\n      \\"Domain\\": \\"www.aliyun.com\\",\\n      \\"RegionList\\": [\\n        {\\n          \\"Region\\": \\"CN-SHANGHAI\\",\\n          \\"Block\\": 0\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeWebAreaBlockConfigsResponse>\\r\\n\\t<AreaBlockConfigs>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>1</Block>\\r\\n\\t\\t\\t<Region>CN-YUNNAN</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-HEILONGJIANG</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>OVERSEAS-ANTARCTICA</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>1</Block>\\r\\n\\t\\t\\t<Region>OVERSEAS-EUROPE</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-BEIJING</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-HENAN</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-HUNAN</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-FUJIAN</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-JIANGSU</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-ZHEJIANG</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-HAINAN</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-TIBET</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-INNERMONGOLIA</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-NINGXIA</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-SHAANXI</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-GUANGDONG</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-QINGHAI</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>OVERSEAS-NAMERICA</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>OVERSEAS-SAMERICA</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-SHANGHAI</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>1</Block>\\r\\n\\t\\t\\t<Region>CN-GUANGXI</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>OVERSEAS-ASIA</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>OVERSEAS-OCEANIA</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-MACAU</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-GUIZHOU</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-JILIN</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-ANHUI</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-JIANGXI</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-HEBEI</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-CHONGQING</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>OVERSEAS-AFRICA</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-SICHUAN</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-TIANJIN</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-XINJIANG</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-LIAONING</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-GANSU</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-HONGKONG</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>1</Block>\\r\\n\\t\\t\\t<Region>CN-TAIWAN</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-SHANDONG</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-SHANXI</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<RegionList>\\r\\n\\t\\t\\t<Block>0</Block>\\r\\n\\t\\t\\t<Region>CN-HUBEI</Region>\\r\\n\\t\\t</RegionList>\\r\\n\\t\\t<Domain>www.aliyun.com</Domain>\\r\\n\\t</AreaBlockConfigs>\\r\\n\\t<RequestId>044D33A9-80B9-4F07-BA63-9207CAD53263</RequestId>\\r\\n</DescribeWebAreaBlockConfigsResponse>","errorExample":""}]',
            'title' => '查询网站业务区域封禁配置信息',
            'summary' => '查询网站业务区域封禁（针对域名）的配置信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ConfigWebIpSet' => [
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
                'abilityTreeCode' => '106061',
                'abilityTreeNodes' => [
                    'FEATUREddos64TBV6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'BlackList',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '黑名单IP地址/地址段列表。N的最大值：200，即最多可配置200个黑名单IP地址/地址段。',
                        'type' => 'array',
                        'items' => [
                            'description' => '黑名单IP地址/地址段。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '59.49.*.*',
                        ],
                        'required' => false,
                        'example' => '1.1.1.1',
                        'maxItems' => 2000,
                    ],
                ],
                [
                    'name' => 'WhiteList',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '白名单IP地址/地址段列表。N的最大值：200，即最多可配置200个白名单IP地址/地址段。',
                        'type' => 'array',
                        'items' => [
                            'description' => '白名单IP地址/地址段。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '2.2.*.*/24',
                        ],
                        'required' => false,
                        'example' => '2.2.2.2/24',
                        'maxItems' => 2000,
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ConfigWebIpSetResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</ConfigWebIpSetResponse>","errorExample":""}]',
            'title' => '设置针对网站业务的黑名单和白名单IP',
            'summary' => '设置针对网站业务的黑名单和白名单IP。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ConfigWebCCTemplate' => [
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
                'abilityTreeCode' => '106060',
                'abilityTreeNodes' => [
                    'FEATUREddosM9SQC1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'Template',
                    'in' => 'query',
                    'schema' => [
                        'description' => '频率控制防护（CC防护）的防护模式。取值：'."\n"
                            .'- **default**：正常'."\n"
                            .'- **gf_under_attack**：攻击紧急'."\n"
                            .'- **gf_sos_verify**：严格'."\n"
                            .'- **gf_sos_enhance**：超级严格',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ConfigWebCCTemplateResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</ConfigWebCCTemplateResponse>","errorExample":""}]',
            'title' => '设置网站CC防护的防护模式',
            'summary' => '设置网站业务频率控制防护（CC防护）的防护模式。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteWebCCRuleV2' => [
            'summary' => '删除网站业务频率控制防护（CC防护）的自定义规则。',
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
                'chargeType' => 'free',
                'abilityTreeCode' => '198862',
                'abilityTreeNodes' => [
                    'FEATUREddosOZ1QOD',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.example.com',
                    ],
                ],
                [
                    'name' => 'RuleNames',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的规则的名称列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[\\"trdsss\\"]',
                    ],
                ],
                [
                    'name' => 'Owner',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则来源。取值：'."\n"
                            .'- **manual**：手动添加（默认）'."\n"
                            .'- **clover**：自动生成（指定删除智能规则使用）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'manual',
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
                                'example' => '6D48AED0-41DB-5D9B-B484-3B6AAD312AD1',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6D48AED0-41DB-5D9B-B484-3B6AAD312AD1\\"\\n}","type":"json"}]',
            'title' => '删除网站业务频率控制防护（CC防护）的自定义规则',
        ],
        'DescribeWebCCRulesV2' => [
            'summary' => '查询网站业务频率控制防护（CC防护）的自定义规则。',
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
                'operationType' => 'list',
                'chargeType' => 'free',
                'abilityTreeCode' => '198809',
                'abilityTreeNodes' => [
                    'FEATUREddosOZ1QOD',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要接入DDoS高防进行防护的网站域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，即每页显示多少个结果。最大值**20**，默认值**20**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'Offset',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始索引位置，即从第几条结果开始显示。默认从**0**开始。 ',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Owner',
                    'in' => 'query',
                    'schema' => [
                        'description' => '筛选规则来源。取值：'."\n"
                            .'- **manual**（默认）：手动添加'."\n"
                            .'- **clover**：自动生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'manual',
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
                                'description' => '本次调用请求的 ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'CF33B4C3-196E-4015-AADD-5CAD00057B80',
                            ],
                            'TotalCount' => [
                                'description' => '频率控制规则总数。',
                                'type' => 'string',
                                'example' => '12',
                            ],
                            'Domain' => [
                                'description' => '网站业务的域名。',
                                'type' => 'string',
                                'example' => 'www.aliyun.com',
                            ],
                            'WebCCRules' => [
                                'description' => '频率控制（CC防护）自定义规则。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '频率控制（CC防护）自定义规则。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Owner' => [
                                            'description' => '规则来源。取值：'."\n"
                                                .'- **manual**（默认）：手动添加'."\n"
                                                .'- **clover**：自动生成',
                                            'type' => 'string',
                                            'example' => 'manual',
                                        ],
                                        'Expires' => [
                                            'description' => '规则有效期。单位：秒。规则的匹配动作为阻断时（action为block）生效，在规则有效期内阻断访问请求。0表示永久生效。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'Name' => [
                                            'description' => '规则名称。',
                                            'type' => 'string',
                                            'example' => 'wq',
                                        ],
                                        'RuleDetail' => [
                                            'description' => '规则详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Mode' => [
                                                    'description' => '老规则格式，已废弃。',
                                                    'type' => 'string',
                                                    'example' => '废弃',
                                                ],
                                                'Count' => [
                                                    'description' => '老规则格式，已废弃。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '废弃',
                                                ],
                                                'Name' => [
                                                    'description' => '规则名称。',
                                                    'type' => 'string',
                                                    'example' => 'ccauto14',
                                                ],
                                                'Action' => [
                                                    'description' => '匹配动作。取值：'."\n"
                                                        .'- **accept**：放行'."\n"
                                                        .'- **block**：封禁'."\n"
                                                        .'- **challenge**：挑战'."\n"
                                                        .'- **watch**：观察',
                                                    'type' => 'string',
                                                    'example' => 'block',
                                                ],
                                                'Interval' => [
                                                    'description' => '老规则格式，已废弃。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '60',
                                                ],
                                                'Ttl' => [
                                                    'description' => '老规则格式，已废弃。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '300',
                                                ],
                                                'Uri' => [
                                                    'description' => '老规则格式，已废弃。',
                                                    'type' => 'string',
                                                    'example' => '/p3shijihao',
                                                ],
                                                'RateLimit' => [
                                                    'description' => '频率统计。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'SubKey' => [
                                                            'description' => '字段名称（仅当统计源为header时设置）。',
                                                            'type' => 'string',
                                                            'example' => 'action',
                                                        ],
                                                        'Interval' => [
                                                            'description' => '统计周期。单位：秒。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '60',
                                                        ],
                                                        'Threshold' => [
                                                            'description' => '触发阈值。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '20',
                                                        ],
                                                        'Ttl' => [
                                                            'description' => '封禁时长。单位：秒。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '15',
                                                        ],
                                                        'Target' => [
                                                            'description' => '统计源。取值：'."\n"
                                                                .'- **ip**：按照IP统计'."\n"
                                                                .'- **header**：按照Header统计',
                                                            'type' => 'string',
                                                            'example' => 'ip',
                                                        ],
                                                    ],
                                                ],
                                                'Condition' => [
                                                    'description' => '匹配条件列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '匹配条件。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'MatchMethod' => [
                                                                'description' => '匹配方法。',
                                                                'type' => 'string',
                                                                'example' => 'belong',
                                                            ],
                                                            'Field' => [
                                                                'description' => '匹配字段。',
                                                                'type' => 'string',
                                                                'example' => 'ip',
                                                            ],
                                                            'HeaderName' => [
                                                                'description' => '自定义HTTP头部字段名称。'."\n"
                                                                    ."\n"
                                                                    .'> 仅在**Field**为**header**时有效。',
                                                                'type' => 'string',
                                                                'example' => 'null',
                                                            ],
                                                            'Content' => [
                                                                'description' => '匹配内容。',
                                                                'type' => 'string',
                                                                'example' => '192.0.XX.XX',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'Statistics' => [
                                                    'description' => '去重统计，可缺省（缺省为不去重统计）。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Mode' => [
                                                            'description' => '去重模式。取值：'."\n"
                                                                .'- **count**：不去重统计'."\n"
                                                                .'- **distinct**：去重统计',
                                                            'type' => 'string',
                                                            'example' => 'count',
                                                        ],
                                                        'Field' => [
                                                            'description' => '统计源。取值：'."\n"
                                                                .'- **ip**：按照IP统计'."\n"
                                                                .'- **header**：按照Header统计 '."\n"
                                                                .'- **uri**：按照uri统计',
                                                            'type' => 'string',
                                                            'example' => 'uri',
                                                        ],
                                                        'HeaderName' => [
                                                            'description' => '仅当统计源为header时设置。',
                                                            'type' => 'string',
                                                            'example' => 'hello',
                                                        ],
                                                    ],
                                                ],
                                                'StatusCode' => [
                                                    'description' => '状态码。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Enabled' => [
                                                            'description' => '是否可用。取值：'."\n"
                                                                ."\n"
                                                                .'- **true**：开启。'."\n"
                                                                .'- **false**：关闭。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                        'Code' => [
                                                            'description' => '状态码。值范围**100**~**599**：'."\n"
                                                                ."\n"
                                                                .'- **200**：表示成功。'."\n"
                                                                .'- 其它：表示错误码。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '200',
                                                        ],
                                                        'UseRatio' => [
                                                            'description' => '是否使用比率：'."\n"
                                                                ."\n"
                                                                .'- **true**：使用。'."\n"
                                                                .'- **false**：不使用。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                        'CountThreshold' => [
                                                            'description' => '不使用比率时，仅在对应状态码达到 **CountThreshold** 时触发处置动作，值范围**2**~**50000**。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '10',
                                                        ],
                                                        'RatioThreshold' => [
                                                            'description' => '使用比率时，仅在对应状态码达到 **RatioThreshold** 时触发处置动作，值范围**1**~**100**。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '10',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CF33B4C3-196E-4015-AADD-5CAD00057B80\\",\\n  \\"TotalCount\\": \\"12\\",\\n  \\"Domain\\": \\"www.aliyun.com\\",\\n  \\"WebCCRules\\": [\\n    {\\n      \\"Owner\\": \\"manual\\",\\n      \\"Expires\\": 0,\\n      \\"Name\\": \\"wq\\",\\n      \\"RuleDetail\\": {\\n        \\"Mode\\": \\"废弃\\",\\n        \\"Count\\": 0,\\n        \\"Name\\": \\"ccauto14\\",\\n        \\"Action\\": \\"block\\",\\n        \\"Interval\\": 60,\\n        \\"Ttl\\": 300,\\n        \\"Uri\\": \\"/p3shijihao\\",\\n        \\"RateLimit\\": {\\n          \\"SubKey\\": \\"action\\",\\n          \\"Interval\\": 60,\\n          \\"Threshold\\": 20,\\n          \\"Ttl\\": 15,\\n          \\"Target\\": \\"ip\\"\\n        },\\n        \\"Condition\\": [\\n          {\\n            \\"MatchMethod\\": \\"belong\\",\\n            \\"Field\\": \\"ip\\",\\n            \\"HeaderName\\": \\"null\\",\\n            \\"Content\\": \\"192.0.XX.XX\\"\\n          }\\n        ],\\n        \\"Statistics\\": {\\n          \\"Mode\\": \\"count\\",\\n          \\"Field\\": \\"uri\\",\\n          \\"HeaderName\\": \\"hello\\"\\n        },\\n        \\"StatusCode\\": {\\n          \\"Enabled\\": true,\\n          \\"Code\\": 200,\\n          \\"UseRatio\\": true,\\n          \\"CountThreshold\\": 10,\\n          \\"RatioThreshold\\": 10\\n        }\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询网站业务频率控制防护（CC防护）的自定义规则',
        ],
        'ConfigWebCCRuleV2' => [
            'summary' => '创建或编辑网站业务频率控制防护（CC防护）的自定义规则。',
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
                'chargeType' => 'free',
                'abilityTreeCode' => '198715',
                'abilityTreeNodes' => [
                    'FEATUREddosOZ1QOD',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.example.com',
                    ],
                ],
                [
                    'name' => 'RuleList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '频率控制规则的配置，使用JSON格式的字符串表述，具体结构如下。'."\n"
                            .'- **action**：String类型，必选，匹配动作。取值：'."\n"
                            .'    - **block**：封禁'."\n"
                            .'    - **challenge**：挑战'."\n"
                            .'    - **watch**：观察'."\n"
                            .'- **name**：String类型，必选，规则名称。'."\n"
                            .'- **condition**：Map类型，必选，匹配条件。具体结构如下。'."\n"
                            ."\n"
                            .'    > 如果设置了多个匹配条件，则多个条件间是且的关系。'."\n"
                            ."\n"
                            .'    - **field**：String类型，必选，匹配字段。'."\n"
                            .'    - **match_method**：String类型，必选，匹配方法。'."\n"
                            .' '."\n"
                            .'        > 关于**field**和**match_method**的取值，请参见请求参数表下的补充描述。'."\n"
                            ."\n"
                            .'    - **header_name**：String类型，可选，自定义HTTP头部字段名称。'."\n"
                            ."\n"
                            .'        > 仅在**field**为**header**时有效。'."\n"
                            ."\n"
                            .'    - **content**：String类型，必选，匹配内容。'."\n"
                            .'- **ratelimit**：String类型，可选，频率控制字段，可以按照IP或者自定义Header进行频率统计。具体结构如下。'."\n"
                            .'  - **interval**：Integer类型，必选，统计时长（秒）。'."\n"
                            .'  - **ttl**：Integer类型，必选，处置时长（秒）。'."\n"
                            .'  - **threshold**：Integer类型，必选，阈值（次）。'."\n"
                            .'  - **subkey**：String类型，可选，字段名称（仅当统计源为header时设置）。'."\n"
                            .'  - **target**：String类型，必选，统计源，支持ip和header。'."\n"
                            .'- **status_code**：String类型，可选，频率控制字段，可以根据状态码出现数量或频率进行统计。具体结构如下。'."\n"
                            .'  - **enabled**：Boolean类型，必选，是否开启状态码统计。'."\n"
                            .'  - **code**：Integer类型，必选，状态码，值范围**100**~**599**。'."\n"
                            .'  - **use_ratio**：Boolean类型，必选，为true时使用比率。'."\n"
                            .'  - **ratio_threshold**：Integer类型，可选，状态码出现比率，使用比率时，仅在对应状态码达到 **ratio_threshold** 时触发处置动作，值范围**1**~**100**。'."\n"
                            .'  - **count_threshold**：Integer类型，可选，状态码出现数量，不使用比率时，仅在对应状态码达到 **count_threshold** 时触发处置动作，值范围**2**~**50000**。'."\n"
                            .'- **statistics**：String类型，可选，去重统计，可缺省（缺省为不去重统计）。具体结构如下。'."\n"
                            .'  - **mode**：String类型，必选，是否开启状态码统计。取值：'."\n"
                            .'    - **count**：不去重统计'."\n"
                            .'    - **distinct**：去重统计'."\n"
                            .'  - **field**：String类型，必选，统计源，去重统计，仅支持ip、header和uri。'."\n"
                            .'  - **header_name**：String类型，可选，字段名称，仅当统计源为header时设置。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"action":"block","name":"trdsss","statistics":{"mode":"count","field":"header","header_name":"hahah"},"ratelimit":{"interval":60,"ttl":300,"threshold":70,"target":"ip"},"status_code":{"enabled":true,"code":404,"use_ratio":true,"ratio_threshold":80,"count_threshold":2},"condition":[{"field":"ip","match_method":"belong","content":"1.1.1.1"}]}]',
                    ],
                ],
                [
                    'name' => 'Expires',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则有效期。单位：秒。'."\n"
                            .'   > 规则的匹配动作为封禁时（action为block）生效，在规则有效期内阻断访问请求。不传入该参数表示永久生效。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '600',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","type":"json"}]',
            'title' => '创建或编辑网站业务频率控制防护（CC防护）的自定义规则',
            'requestParamsDescription' => '**field和match_method的取值及对应关系**'."\n"
                ."\n"
                .'| 匹配字段（field） | 描述 | 适用的逻辑符（match_method） |'."\n"
                .'|-----------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|-----------------------------------------------------------------------------------------------------------------------------------------|'."\n"
                .'| **ip** | 访问请求的来源IP。 | **belong** ：属于<br>**nbelong** ：不属于 |'."\n"
                .'| **uri** | 访问请求的URI地址。 | **contain** ：包含<br>**ncontain** ：不包含<br>**equal** ：等于<br>**nequal** ：不等于<br>**lless** ：长度小于<br>**lequal** ：长度等于<br>**lgreat** ：长度大于<br>**prefix** ：前缀匹配 |'."\n"
                .'| **referer** | 访问请求的来源网址，即该访问请求是从哪个页面跳转产生的。 | **contain** ：包含<br>**ncontain** ：不包含<br>**equal** ：等于<br>**nequal** ：不等于<br>**lless** ：长度小于<br>**lequal** ：长度等于<br>**lgreat** ：长度大于<br>**nexist** ：不存在 |'."\n"
                .'| **user-agent** | 发起访问请求的客户端的浏览器标识、渲染引擎标识和版本信息等浏览器相关信息。 | **contain** ：包含<br>**ncontain** ：不包含<br>**equal** ：等于<br>**nequal** ：不等于<br>**lless** ：长度小于<br>**lequal** ：长度等于<br>**lgreat** ：长度大于 |'."\n"
                .'| **params** | 访问请求的URL地址中的参数部分，通常指URL中”?”后面的部分。例如，`demo.aliyundoc.com/index.html?action=login`中的`action=login`就是参数部分。 | **contain** ：包含<br>**ncontain** ：不包含<br>**equal** ：等于<br>**nequal** ：不等于<br>**lless** ：长度小于<br>**lequal** ：长度等于<br>**lgreat** ：长度大于 |'."\n"
                .'| **cookie** | 访问请求中的Cookie信息。 | **contain** ：包含<br>**ncontain** ：不包含<br>**equal** ：等于<br>**nequal** ：不等于<br>**lless** ：长度小于<br>**lequal** ：长度等于<br>**lgreat** ：长度大于<br>**nexist** ：不存在 |'."\n"
                .'| **content-type** | 访问请求指定的响应HTTP内容类型，即MIME类型信息。 | **contain** ：包含<br>**ncontain** ：不包含<br>**equal** ：等于<br>**nequal** ：不等于<br>**lless** ：长度小于<br>**lequal** ：长度等于<br>**lgreat** ：长度大于 |'."\n"
                .'| **x-forwarded-for** | 访问请求的客户端真实IP。X-Forwarded-For（XFF）用来识别通过HTTP代理或负载均衡方式转发的访问请求的客户端最原始的IP地址的HTTP请求头字段，只有通过HTTP代理或者负载均衡服务器转发的访问请求才会包含该项。 | **contain** ：包含<br>**ncontain** ：不包含<br>**equal** ：等于<br>**nequal** ：不等于<br>**lless** ：长度小于<br>**lequal** ：长度等于<br>**lgreat** ：长度大于<br>**nexist** ：不存在 |'."\n"
                .'| **content-length** | 访问请求的所包含的字节数。 | **vless** ：值小于<br>**vequal** ：值等于<br>**vgreat** ：值大于 |'."\n"
                .'| **post-body** | 访问请求的内容信息。 | **contain** ：包含<br>**ncontain** ：不包含<br>**equal** ：等于<br>**nequal** ：不等于 |'."\n"
                .'| **http-method** | 访问请求的方法，如GET、POST等。 | **equal** ：等于<br>**nequal** ：不等于 |'."\n"
                .'| **header** | 访问请求的头部信息，用于自定义HTTP头部字段。 | **contain** ：包含<br>**ncontain** ：不包含<br>**equal** ：等于<br>**nequal** ：不等于<br>**lless** ：长度小于<br>**lequal** ：长度等于<br>**lgreat** ：长度大于<br>**nexist** ：不存在 |',
        ],
        'ModifyWebCCGlobalSwitch' => [
            'summary' => '本接口用于设置网站业务CC安全防护模块的开关状态。',
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
                'abilityTreeCode' => '201506',
                'abilityTreeNodes' => [
                    'FEATUREddosOZ1QOD',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.aliyundoc.com'."\n",
                    ],
                ],
                [
                    'name' => 'CcGlobalSwitch',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开关状态。取值：'."\n"
                            .'- **open**：开启'."\n"
                            .'- **close**：关闭',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'open',
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
                                'example' => '5AE2FC86-C840-41AE-9F1A-3A2747C7C1DF',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5AE2FC86-C840-41AE-9F1A-3A2747C7C1DF\\"\\n}","type":"json"}]',
            'title' => '设置网站业务CC安全防护模块的开关状态',
        ],
        'ModifyPortAutoCcStatus' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                    ],
                ],
                [
                    'name' => 'Switch',
                    'in' => 'query',
                    'schema' => [
                        'description' => '非网站业务AI智能防护的开关状态。取值：'."\n"
                            .'- **on**：开启'."\n"
                            .'- **off**：关闭',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'on',
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '非网站业务AI智能防护的模式。取值：'."\n"
                            .'- **normal**：正常'."\n"
                            .'- **loose**：宽松'."\n"
                            .'- **strict**：严格',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'normal',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyPortAutoCcStatusResponse>\\r\\n      <RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</ModifyPortAutoCcStatusResponse>","errorExample":""}]',
            'title' => '设置非网站业务AI智能防护',
            'summary' => '设置非网站业务AI智能防护。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyNetworkRuleAttribute' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                    ],
                ],
                [
                    'name' => 'ForwardProtocol',
                    'in' => 'query',
                    'schema' => [
                        'description' => '转发协议。取值：'."\n"
                            .'- **tcp**'."\n"
                            .'- **udp**',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tcp',
                    ],
                ],
                [
                    'name' => 'FrontendPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '转发端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '8080',
                    ],
                ],
                [
                    'name' => 'Config',
                    'in' => 'query',
                    'schema' => [
                        'description' => '端口转发规则的会话保持设置。使用JSON格式的字符串表述，具体结构描述如下。'."\n"
                            ."\n"
                            .'- **PersistenceTimeout**：Integer类型，必选，会话保持的超时时间。取值范围：**30**~**3600**，单位：秒。默认为**0**，表示关闭。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"PersistenceTimeout":900}',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyNetworkRuleAttributeResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</ModifyNetworkRuleAttributeResponse>","errorExample":""}]',
            'title' => '编辑端口转发规则的会话保持设置',
            'summary' => '编辑端口转发规则的会话保持设置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribePortAutoCcStatus' => [
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
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'DDoS高防实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-mp91j1ao****',
                        ],
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 100,
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
                                'example' => 'BC3C6403-F248-4125-B2C9-8733ED94EA85',
                            ],
                            'PortAutoCcStatus' => [
                                'description' => '非网站业务AI智能防护的配置信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Switch' => [
                                            'description' => 'AI智能防护的开关状态。取值：'."\n"
                                                .'- **on**：开启'."\n"
                                                .'- **off**：关闭',
                                            'type' => 'string',
                                            'example' => 'on',
                                        ],
                                        'Mode' => [
                                            'description' => 'AI智能防护的模式。取值：'."\n"
                                                .'- **normal**：正常'."\n"
                                                .'- **loose**：宽松'."\n"
                                                .'- **strict**：严格',
                                            'type' => 'string',
                                            'example' => 'normal',
                                        ],
                                        'WebSwitch' => [
                                            'description' => '80和443端口的防护开关状态。取值：'."\n"
                                                .'- **on**：开启'."\n"
                                                .'- **off**：关闭',
                                            'type' => 'string',
                                            'example' => 'off',
                                        ],
                                        'WebMode' => [
                                            'description' => '80和443端口的防护模式。取值：'."\n"
                                                .'- **normal**：正常'."\n"
                                                .'- **loose**：宽松'."\n"
                                                .'- **strict**：严格',
                                            'type' => 'string',
                                            'example' => 'normal',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BC3C6403-F248-4125-B2C9-8733ED94EA85\\",\\n  \\"PortAutoCcStatus\\": [\\n    {\\n      \\"Switch\\": \\"on\\",\\n      \\"Mode\\": \\"normal\\",\\n      \\"WebSwitch\\": \\"off\\",\\n      \\"WebMode\\": \\"normal\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribePortAutoCcStatusResponse>\\r\\n\\t<RequestId>BC3C6403-F248-4125-B2C9-8733ED94EA85</RequestId>\\r\\n\\t<PortAutoCcStatus>\\r\\n\\t\\t<WebSwitch>off</WebSwitch>\\r\\n\\t\\t<Switch>on</Switch>\\r\\n\\t\\t<WebMode>normal</WebMode>\\r\\n\\t\\t<Mode>normal</Mode>\\r\\n\\t</PortAutoCcStatus>\\r\\n</DescribePortAutoCcStatusResponse>","errorExample":""}]',
            'title' => '查询非网站业务AI智能防护的配置信息',
            'summary' => '查询非网站业务AI智能防护的配置信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDomains' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。'."\n"
                            ."\n"
                            .'关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。'."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => 'DDoS高防实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-mp91j1ao****',
                        ],
                        'required' => false,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 100,
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
                                'example' => 'F908E959-ADA8-4D7B-8A05-FF2F67F50964',
                            ],
                            'Domains' => [
                                'description' => '已配置网站业务转发规则的域名列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '已配置网站业务转发规则的域名。',
                                    'type' => 'string',
                                    'example' => 'www.aliyun***.com',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F908E959-ADA8-4D7B-8A05-FF2F67F50964\\",\\n  \\"Domains\\": [\\n    \\"www.aliyun***.com\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeDomainsResponse>\\r\\n\\t<Domains>www.aliyun.com</Domains>\\r\\n\\t<RequestId>F908E959-ADA8-4D7B-8A05-FF2F67F50964</RequestId>\\r\\n</DescribeDomainsResponse>","errorExample":""}]',
            'title' => '查询已配置网站业务转发规则的域名',
            'summary' => '查询已配置网站业务转发规则的域名。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeHealthCheckList' => [
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
                'abilityTreeCode' => '106147',
                'abilityTreeNodes' => [
                    'FEATUREddosN7DYCX',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'NetworkRules',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的端口转发规则，使用JSON格式的字符串表述，具体结构如下。'."\n"
                            .'- **InstanceId**：String类型，必选，DDoS高防实例ID。'."\n"
                            .'- **Protocol**：String类型，必选，转发协议类型。取值：**tcp**、**udp**。'."\n"
                            .'- **FrontendPort**：Integer类型，必选，转发端口。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"InstanceId":"ddoscoo-cn-mp91j1ao****","Protocol":"tcp","FrontendPort":8080}]',
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
                                'example' => '83B4AF42-E8EE-4DC9-BD73-87B7733A36F9',
                            ],
                            'HealthCheckList' => [
                                'description' => '健康检查配置列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'FrontendPort' => [
                                            'description' => '转发端口。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '8080',
                                        ],
                                        'InstanceId' => [
                                            'description' => 'DDoS高防实例ID。',
                                            'type' => 'string',
                                            'example' => 'ddoscoo-cn-mp91j1ao****',
                                        ],
                                        'Protocol' => [
                                            'description' => '转发协议。取值：'."\n"
                                                .'- **tcp**'."\n"
                                                .'- **udp**',
                                            'type' => 'string',
                                            'example' => 'tcp',
                                        ],
                                        'HealthCheck' => [
                                            'description' => '健康检查配置信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Timeout' => [
                                                    'description' => '响应超时时间。取值范围：**1**~**30**，单位：秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '5',
                                                ],
                                                'Type' => [
                                                    'description' => '协议类型。取值：'."\n"
                                                        .'- **tcp**：四层'."\n"
                                                        .'- **http**：七层',
                                                    'type' => 'string',
                                                    'example' => 'tcp',
                                                ],
                                                'Domain' => [
                                                    'description' => '域名。'."\n"
                                                        ."\n"
                                                        .'> 仅适用于七层健康检查。',
                                                    'type' => 'string',
                                                    'example' => 'www.aliyun.com',
                                                ],
                                                'Interval' => [
                                                    'description' => '检查间隔。取值范围：**1**~**30**，单位：秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '15',
                                                ],
                                                'Up' => [
                                                    'description' => '健康阈值。取值范围：**1**~**10**。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '3',
                                                ],
                                                'Down' => [
                                                    'description' => '不健康阈值。取值范围：**1**~**10**。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '3',
                                                ],
                                                'Port' => [
                                                    'description' => '检查端口。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '8080',
                                                ],
                                                'Uri' => [
                                                    'description' => '检查路径。'."\n"
                                                        ."\n"
                                                        .'> 仅适用于七层健康检查。',
                                                    'type' => 'string',
                                                    'example' => '/abc',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": \\"1\\",\\n  \\"RequestId\\": \\"83B4AF42-E8EE-4DC9-BD73-87B7733A36F9\\",\\n  \\"HealthCheckList\\": [\\n    {\\n      \\"FrontendPort\\": 8080,\\n      \\"InstanceId\\": \\"ddoscoo-cn-mp91j1ao****\\",\\n      \\"Protocol\\": \\"tcp\\",\\n      \\"HealthCheck\\": {\\n        \\"Timeout\\": 5,\\n        \\"Type\\": \\"tcp\\",\\n        \\"Domain\\": \\"www.aliyun.com\\",\\n        \\"Interval\\": 15,\\n        \\"Up\\": 3,\\n        \\"Down\\": 3,\\n        \\"Port\\": 8080,\\n        \\"Uri\\": \\"/abc\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeHealthCheckListResponse>\\r\\n\\t<RequestId>83B4AF42-E8EE-4DC9-BD73-87B7733A36F9</RequestId>\\r\\n\\t<HealthCheckList>\\r\\n\\t\\t<InstanceId>ddoscoo-cn-mp91j1ao****</InstanceId>\\r\\n\\t\\t<FrontendPort>8080</FrontendPort>\\r\\n\\t\\t<HealthCheck>\\r\\n\\t\\t\\t<Type>tcp</Type>\\r\\n\\t\\t\\t<Down>3</Down>\\r\\n\\t\\t\\t<Timeout>5</Timeout>\\r\\n\\t\\t\\t<Port>8080</Port>\\r\\n\\t\\t\\t<Up>3</Up>\\r\\n\\t\\t\\t<Interval>15</Interval>\\r\\n\\t\\t</HealthCheck>\\r\\n\\t\\t<Protocol>tcp</Protocol>\\r\\n\\t</HealthCheckList>\\r\\n    <TotalCount>1</TotalCount>\\r\\n</DescribeHealthCheckListResponse>","errorExample":""}]',
            'title' => '查询端口转发规则的健康检查配置',
            'summary' => '查询端口转发规则的健康检查配置（四层或七层）。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeNetworkRuleAttributes' => [
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
                    'name' => 'NetworkRules',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的端口转发规则，使用JSON格式的字符串表述，具体结构如下。'."\n"
                            .'- **InstanceId**：String类型，必选，DDoS高防实例ID。'."\n"
                            .'- **Protocol**：String类型，必选，转发协议类型。取值：**tcp**、**udp**。'."\n"
                            .'- **FrontendPort**：Integer类型，必选，转发端口。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"InstanceId":"ddoscoo-cn-mp91j1ao****","Protocol":"tcp","FrontendPort":8080}]',
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
                                'example' => 'F9F2F77D-307C-4F15-8D02-AB5957EEBF97',
                            ],
                            'NetworkRuleAttributes' => [
                                'description' => '非网站业务端口转发规则的防护配置，包括会话保持和DDoS防护策略。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'FrontendPort' => [
                                            'description' => '转发端口。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '8080',
                                        ],
                                        'InstanceId' => [
                                            'description' => 'DDoS高防实例ID。',
                                            'type' => 'string',
                                            'example' => 'ddoscoo-cn-mp91j1ao****',
                                        ],
                                        'Protocol' => [
                                            'description' => '转发协议。取值：'."\n"
                                                .'- **tcp**'."\n"
                                                .'- **udp**',
                                            'type' => 'string',
                                            'example' => 'tcp',
                                        ],
                                        'Config' => [
                                            'description' => '端口转发规则的防护配置。',
                                            'type' => 'object',
                                            'properties' => [
                                                'NodataConn' => [
                                                    'description' => '空连接过滤的开关状态。取值：'."\n"
                                                        .'- **on**：开启'."\n"
                                                        .'- **off**：关闭',
                                                    'type' => 'string',
                                                    'example' => 'off',
                                                ],
                                                'Synproxy' => [
                                                    'description' => '虚假源过滤的开关状态。取值：'."\n"
                                                        .'- **on**：开启'."\n"
                                                        .'- **off**：关闭',
                                                    'type' => 'string',
                                                    'example' => 'off',
                                                ],
                                                'PersistenceTimeout' => [
                                                    'description' => '会话保持的超时时间。取值范围：**30**~**3600**，单位：秒。默认为**0**，表示关闭。 ',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'Sla' => [
                                                    'description' => '目的限速配置。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'MaxconnEnable' => [
                                                            'description' => '目的并发连接限速的开关状态。取值：'."\n"
                                                                .'- **0**：关闭'."\n"
                                                                .'- **1**：开启',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'CpsEnable' => [
                                                            'description' => '目的新建连接限速的开关状态。取值：'."\n"
                                                                .'- **0**：关闭'."\n"
                                                                .'- **1**：开启',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1',
                                                        ],
                                                        'Cps' => [
                                                            'description' => '目的新建连接限速。取值范围：**100**~**100000**。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '100000',
                                                        ],
                                                        'Maxconn' => [
                                                            'description' => '目的并发连接限速。取值范围：**1000**~**1000000**。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1000000',
                                                        ],
                                                    ],
                                                ],
                                                'Slimit' => [
                                                    'description' => '源限速配置。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'MaxconnEnable' => [
                                                            'description' => '源并发连接限速的开关状态。取值：'."\n"
                                                                .'- **0**：关闭'."\n"
                                                                .'- **1**：开启',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'CpsEnable' => [
                                                            'description' => '源新建连接限速的开关状态。取值：'."\n"
                                                                .'- **0**：关闭'."\n"
                                                                .'- **1**：开启',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'Cps' => [
                                                            'description' => '源新建连接限速。取值范围：**1**~**500000**，单位：个。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'Pps' => [
                                                            'description' => '源PPS限速。取值范围：**1**~**100000**，单位：Packet/s。默认为**0**，表示未开启源PPS限速。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '0',
                                                        ],
                                                        'Bps' => [
                                                            'description' => '源带宽限速。取值范围：**1024**~**268435456**，单位：Byte/s。默认为**0**，表示未开启源带宽限速。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '0',
                                                        ],
                                                        'Maxconn' => [
                                                            'description' => '源并发连接限速。取值范围：**1**~**500000**，单位：个。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'CpsMode' => [
                                                            'description' => '源新建连接限速的模式。取值：'."\n"
                                                                .'- **1**：手动'."\n"
                                                                .'- **2**：自动',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1',
                                                        ],
                                                    ],
                                                ],
                                                'PayloadLen' => [
                                                    'description' => '包长度过滤配置。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Min' => [
                                                            'description' => '包长度的最小值。取值范围：**0**~**6000**，单位：Byte。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'Max' => [
                                                            'description' => '包长度的最大值。取值范围：**0**~**6000**，单位：Byte。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '6000',
                                                        ],
                                                    ],
                                                ],
                                                'Cc' => [
                                                    'description' => '源连接频繁超限控制策略。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Sblack' => [
                                                            'description' => '源连接多次超限，将源IP加入黑名单的策略。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Type' => [
                                                                        'description' => '源IP黑名单配置类型。取值：'."\n"
                                                                            .'- **1**：源新建连接限速IP黑名单'."\n"
                                                                            .'- **2**：源并发连接限速IP黑名单'."\n"
                                                                            .'- **3**：源PPS限速IP黑名单'."\n"
                                                                            .'- **4**：源带宽限速IP黑名单',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '1',
                                                                    ],
                                                                    'During' => [
                                                                        'description' => '检查间隔。取值固定为**60**，单位：秒。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '60',
                                                                    ],
                                                                    'Expires' => [
                                                                        'description' => '黑名单有效时长。取值范围：**60**~**604800**，单位：秒。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '600',
                                                                    ],
                                                                    'Cnt' => [
                                                                        'description' => '源连接超过限制的次数。取值固定为**5**，表示如果源连接在检查间隔内超过限制5次，将源IP加入黑名单。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '5',
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
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F9F2F77D-307C-4F15-8D02-AB5957EEBF97\\",\\n  \\"NetworkRuleAttributes\\": [\\n    {\\n      \\"FrontendPort\\": 8080,\\n      \\"InstanceId\\": \\"ddoscoo-cn-mp91j1ao****\\",\\n      \\"Protocol\\": \\"tcp\\",\\n      \\"Config\\": {\\n        \\"NodataConn\\": \\"off\\",\\n        \\"Synproxy\\": \\"off\\",\\n        \\"PersistenceTimeout\\": 0,\\n        \\"Sla\\": {\\n          \\"MaxconnEnable\\": 0,\\n          \\"CpsEnable\\": 1,\\n          \\"Cps\\": 100000,\\n          \\"Maxconn\\": 1000000\\n        },\\n        \\"Slimit\\": {\\n          \\"MaxconnEnable\\": 0,\\n          \\"CpsEnable\\": 0,\\n          \\"Cps\\": 0,\\n          \\"Pps\\": 0,\\n          \\"Bps\\": 0,\\n          \\"Maxconn\\": 0,\\n          \\"CpsMode\\": 1\\n        },\\n        \\"PayloadLen\\": {\\n          \\"Min\\": 0,\\n          \\"Max\\": 6000\\n        },\\n        \\"Cc\\": {\\n          \\"Sblack\\": [\\n            {\\n              \\"Type\\": 1,\\n              \\"During\\": 60,\\n              \\"Expires\\": 600,\\n              \\"Cnt\\": 5\\n            }\\n          ]\\n        }\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeNetworkRuleAttributesResponse>\\r\\n\\t<NetworkRuleAttributes>\\r\\n\\t\\t<InstanceId>ddoscoo-cn-mp91j1ao****</InstanceId>\\r\\n\\t\\t<Config>\\r\\n\\t\\t\\t<NodataConn>off</NodataConn>\\r\\n\\t\\t\\t<Cc></Cc>\\r\\n\\t\\t\\t<PersistenceTimeout>0</PersistenceTimeout>\\r\\n\\t\\t\\t<PayloadLen>\\r\\n\\t\\t\\t\\t<Min>0</Min>\\r\\n\\t\\t\\t\\t<Max>6000</Max>\\r\\n\\t\\t\\t</PayloadLen>\\r\\n\\t\\t\\t<Sla>\\r\\n\\t\\t\\t\\t<Cps>100000</Cps>\\r\\n\\t\\t\\t\\t<CpsEnable>1</CpsEnable>\\r\\n\\t\\t\\t\\t<MaxconnEnable>0</MaxconnEnable>\\r\\n\\t\\t\\t\\t<Maxconn>1000000</Maxconn>\\r\\n\\t\\t\\t</Sla>\\r\\n\\t\\t\\t<Slimit>\\r\\n\\t\\t\\t\\t<CpsMode>1</CpsMode>\\r\\n\\t\\t\\t\\t<Pps>0</Pps>\\r\\n\\t\\t\\t\\t<Bps>0</Bps>\\r\\n\\t\\t\\t\\t<Cps>0</Cps>\\r\\n\\t\\t\\t\\t<CpsEnable>0</CpsEnable>\\r\\n\\t\\t\\t\\t<MaxconnEnable>0</MaxconnEnable>\\r\\n\\t\\t\\t\\t<Maxconn>0</Maxconn>\\r\\n\\t\\t\\t</Slimit>\\r\\n\\t\\t\\t<Synproxy>on</Synproxy>\\r\\n\\t\\t</Config>\\r\\n\\t\\t<FrontendPort>8080</FrontendPort>\\r\\n\\t\\t<Protocol>tcp</Protocol>\\r\\n\\t</NetworkRuleAttributes>\\r\\n\\t<RequestId>F9F2F77D-307C-4F15-8D02-AB5957EEBF97</RequestId>\\r\\n</DescribeNetworkRuleAttributesResponse>\\r\\n","errorExample":""}]',
            'title' => '查询非网站业务端口转发规则防护配置',
            'summary' => '查询非网站业务端口转发规则的防护配置，包括会话保持和DDoS防护策略。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateSceneDefensePolicy' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testpolicy',
                    ],
                ],
                [
                    'name' => 'Template',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略模板。取值：'."\n"
                            .'- **promotion**：重大活动'."\n"
                            .'- **bypass**：全量转发',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'promotion',
                        'enum' => [
                            'promotion',
                        ],
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '生效开始时间。时间戳格式，单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1585670400000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '生效结束时间。时间戳格式，单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1586016000000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功创建策略。取值：'."\n"
                                    .'- **true**：是'."\n"
                                    .'- **false**：否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'F65DF043-E0EB-4796-9467-23DDCDF92C1D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"F65DF043-E0EB-4796-9467-23DDCDF92C1D\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateSceneDefensePolicyResponse>\\r\\n\\t<RequestId>F65DF043-E0EB-4796-9467-23DDCDF92C1D</RequestId>\\r\\n\\t<Success>true</Success>\\r\\n</CreateSceneDefensePolicyResponse>","errorExample":""}]',
            'title' => '创建定制场景策略',
            'summary' => '创建定制场景策略。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteSceneDefensePolicy' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的策略ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeSceneDefensePolicies](~~159382~~)查询所有策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '321a-fd31-df51-****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功调用。取值：'."\n"
                                    .'- **true**：是'."\n"
                                    .'- **false**：否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'F65DF043-E0EB-4796-9467-23DDCDF92C1D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"F65DF043-E0EB-4796-9467-23DDCDF92C1D\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteSceneDefensePolicyResponse>\\r\\n\\t<RequestId>F65DF043-E0EB-4796-9467-23DDCDF92C1D</RequestId>\\r\\n\\t<Success>true</Success>\\r\\n</DeleteSceneDefensePolicyResponse>","errorExample":""}]',
            'title' => '删除定制场景策略',
            'summary' => '删除定制场景策略。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifySceneDefensePolicy' => [
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
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要编辑的策略ID。'."\n"
                            .'> 您可以调用[DescribeSceneDefensePolicies](~~159382~~)查询所有策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '321a-fd31-df51-****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testpolicy',
                    ],
                ],
                [
                    'name' => 'Template',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略模板。取值：'."\n"
                            .'- **promotion**：重大活动'."\n"
                            .'- **bypass**：全量转发',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'promotion',
                        'enum' => [
                            'promotion',
                        ],
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '生效开始时间。时间戳格式，单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1585670400000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '生效结束时间。时间戳格式，单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1586016000000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功调用。取值：'."\n"
                                    .'- **true**：是'."\n"
                                    .'- **false**：否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'F65DF043-E0EB-4796-9467-23DDCDF92C1D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"F65DF043-E0EB-4796-9467-23DDCDF92C1D\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifySceneDefensePolicyResponse>\\r\\n\\t<RequestId>F65DF043-E0EB-4796-9467-23DDCDF92C1D</RequestId>\\r\\n\\t<Success>true</Success>\\r\\n</ModifySceneDefensePolicyResponse>","errorExample":""}]',
            'title' => '编辑定制场景策略',
            'summary' => '编辑定制场景策略。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AttachSceneDefenseObject' => [
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
                'abilityTreeCode' => '106050',
                'abilityTreeNodes' => [
                    'FEATUREddosI8LHMA',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeSceneDefensePolicies](~~159382~~)查询所有策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '321a-fd31-df51-****',
                    ],
                ],
                [
                    'name' => 'ObjectType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '对象类型。取值：**Domain**，表示域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Domain',
                    ],
                ],
                [
                    'name' => 'Objects',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要添加的防护对象。多个对象间使用英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功调用。取值：'."\n"
                                    .'- **true**：是'."\n"
                                    .'- **false**：否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'F65DF043-E0EB-4796-9467-23DDCDF92C1D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"F65DF043-E0EB-4796-9467-23DDCDF92C1D\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<AttachSceneDefenseObjectResponse>\\r\\n\\t<RequestId>F65DF043-E0EB-4796-9467-23DDCDF92C1D</RequestId>\\r\\n\\t<Success>true</Success>\\r\\n</AttachSceneDefenseObjectResponse>","errorExample":""}]',
            'title' => '为定制场景策略添加防护对象',
            'summary' => '为定制场景策略添加防护对象。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DetachSceneDefenseObject' => [
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
                'abilityTreeCode' => '106212',
                'abilityTreeNodes' => [
                    'FEATUREddosI8LHMA',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeSceneDefensePolicies](~~159382~~)查询所有策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '321a-fd31-df51-****',
                    ],
                ],
                [
                    'name' => 'ObjectType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '对象类型。取值：**Domain**，表示域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Domain',
                        'default' => 'Domain',
                    ],
                ],
                [
                    'name' => 'Objects',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要移除的防护对象。多个对象间使用英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功调用。取值：'."\n"
                                    .'- **true**：是'."\n"
                                    .'- **false**：否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'F65DF043-E0EB-4796-9467-23DDCDF92C1D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"F65DF043-E0EB-4796-9467-23DDCDF92C1D\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DetachSceneDefenseObjectResponse>\\r\\n\\t<RequestId>F65DF043-E0EB-4796-9467-23DDCDF92C1D</RequestId>\\r\\n\\t<Success>true</Success>\\r\\n</DetachSceneDefenseObjectResponse>","errorExample":""}]',
            'title' => '移除定制场景策略的防护对象',
            'summary' => '移除定制场景策略的防护对象。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'EnableSceneDefensePolicy' => [
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
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要启用的策略ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeSceneDefensePolicies](~~159382~~)查询所有策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '321a-fd31-df51-****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功调用。取值：'."\n"
                                    .'- **true**：是'."\n"
                                    .'- **false**：否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'F65DF043-E0EB-4796-9467-23DDCDF92C1D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"F65DF043-E0EB-4796-9467-23DDCDF92C1D\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<EnableSceneDefensePolicyResponse>\\r\\n\\t<RequestId>F65DF043-E0EB-4796-9467-23DDCDF92C1D</RequestId>\\r\\n\\t<Success>true</Success>\\r\\n</EnableSceneDefensePolicyResponse>","errorExample":""}]',
            'title' => '启用定制场景策略',
            'summary' => '启用定制场景策略。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DisableSceneDefensePolicy' => [
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
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要禁用的策略ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeSceneDefensePolicies](~~159382~~)查询所有策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '321a-fd31-df51-****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功调用。取值：'."\n"
                                    .'- **true**：是'."\n"
                                    .'- **false**：否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'F65DF043-E0EB-4796-9467-23DDCDF92C1D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"F65DF043-E0EB-4796-9467-23DDCDF92C1D\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DisableSceneDefensePolicyResponse>\\r\\n\\t<RequestId>F65DF043-E0EB-4796-9467-23DDCDF92C1D</RequestId>\\r\\n\\t<Success>true</Success>\\r\\n</DisableSceneDefensePolicyResponse>","errorExample":""}]',
            'title' => '禁用定制场景策略',
            'summary' => '禁用定制场景策略。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeSceneDefensePolicies' => [
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
                    'name' => 'Template',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的策略使用的模板类型。取值：'."\n"
                            .'- **promotion**：表示重大活动模板。'."\n"
                            .'- **bypass**：表示全量转发模板。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'promotion',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的策略的生效状态。取值：'."\n"
                            .'- **0**：表示已被禁用。'."\n"
                            .'- **1**：表示等待生效。'."\n"
                            .'- **2**：表示生效中。'."\n"
                            .'- **3**：表示已过期。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
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
                            'Success' => [
                                'description' => '本次请求是否成功调用成功。取值：'."\n"
                                    .'- **true**：表示调用成功。'."\n"
                                    .'- **false**：表示调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'F65DF043-E0EB-4796-9467-23DDCDF92C1D',
                            ],
                            'Policies' => [
                                'description' => '定制场景策略的详细配置。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Done' => [
                                            'description' => '策略执行状态。取值：'."\n"
                                                .'- **1**：表示未执行或执行完成。'."\n"
                                                .'- **0**：表示执行中。'."\n"
                                                .'- **-1**：表示执行失败。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'EndTime' => [
                                            'description' => '策略结束生效的时间。使用时间戳表示，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1586016000000',
                                        ],
                                        'Status' => [
                                            'description' => '策略的生效状态。取值：'."\n"
                                                .'- **0**：表示已被禁用。'."\n"
                                                .'- **1**：表示等待生效。'."\n"
                                                .'- **2**：表示生效中。'."\n"
                                                .'- **3**：表示已过期。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'StartTime' => [
                                            'description' => '策略开始生效的时间。使用时间戳表示，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1585670400000',
                                        ],
                                        'ObjectCount' => [
                                            'description' => '策略的防护对象数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Template' => [
                                            'description' => '策略使用的模板类型。取值：'."\n"
                                                .'- **promotion**：表示重大活动模板。'."\n"
                                                .'- **bypass**：表示全量转发模板。',
                                            'type' => 'string',
                                            'example' => 'promotion',
                                        ],
                                        'PolicyId' => [
                                            'description' => '策略ID。',
                                            'type' => 'string',
                                            'example' => '321a-fd31-df51-****',
                                        ],
                                        'Name' => [
                                            'description' => '策略名称。',
                                            'type' => 'string',
                                            'example' => 'testpolicy',
                                        ],
                                        'RuntimePolicies' => [
                                            'description' => '策略运行规则。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Status' => [
                                                        'description' => '策略运行状态。取值：'."\n"
                                                            .'- **0**：表示未下发或策略恢复成功。'."\n"
                                                            .'- **1**：表示正在生效中（策略生效）。'."\n"
                                                            .'- **2**：表示正在恢复中（策略恢复）。'."\n"
                                                            .'- **3**：表示策略生效成功 。'."\n"
                                                            .'- **4**：表示策略生效失败。'."\n"
                                                            .'- **5**：表示策略恢复失败。'."\n"
                                                            .'- **6**：表示策略对应对象的配置不存在（可能已删除）。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '3',
                                                    ],
                                                    'oldValue' => [
                                                        'description' => '策略生效前的防护规则。'."\n"
                                                            ."\n"
                                                            .'**PolicyType**为**1**时，取值：**{"cc\\_rule_enable": true}**，表示启用了频率控制。'."\n"
                                                            ."\n"
                                                            .'**PolicyType**为**2**时，取值：**{"ai\\_rule_enable": 1}**，表示启用了AI智能防护。',
                                                        'type' => 'string',
                                                        'example' => '{"cc_rule_enable": true}',
                                                    ],
                                                    'NewValue' => [
                                                        'description' => '策略生效时的防护规则。'."\n"
                                                            ."\n"
                                                            .'**PolicyType**为**1**时，取值：**{"cc\\_rule_enable": false }**，表示禁用频率控制。'."\n"
                                                            ."\n"
                                                            .'**PolicyType**为**2**时，取值：**{"ai\\_rule_enable": 0}**，表示禁用AI智能防护。',
                                                        'type' => 'string',
                                                        'example' => '{"cc_rule_enable": false }',
                                                    ],
                                                    'PolicyType' => [
                                                        'description' => '策略生效时触发的防护功能变更类型。取值：'."\n"
                                                            .'- **1**：表示频率控制功能变更。'."\n"
                                                            .'- **2**：表示AI智能防护功能变更。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"F65DF043-E0EB-4796-9467-23DDCDF92C1D\\",\\n  \\"Policies\\": [\\n    {\\n      \\"Done\\": 1,\\n      \\"EndTime\\": 1586016000000,\\n      \\"Status\\": 1,\\n      \\"StartTime\\": 1585670400000,\\n      \\"ObjectCount\\": 1,\\n      \\"Template\\": \\"promotion\\",\\n      \\"PolicyId\\": \\"321a-fd31-df51-****\\",\\n      \\"Name\\": \\"testpolicy\\",\\n      \\"RuntimePolicies\\": [\\n        {\\n          \\"Status\\": 3,\\n          \\"oldValue\\": \\"{\\\\\\"cc_rule_enable\\\\\\": true}\\",\\n          \\"NewValue\\": \\"{\\\\\\"cc_rule_enable\\\\\\": false }\\",\\n          \\"PolicyType\\": 1\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeSceneDefensePoliciesResponse>\\n    <Success>true</Success>\\n    <RequestId>F65DF043-E0EB-4796-9467-23DDCDF92C1D</RequestId>\\n    <Policies>\\n        <Done>1</Done>\\n        <EndTime>1586016000000</EndTime>\\n        <Status>1</Status>\\n        <StartTime>1585670400000</StartTime>\\n        <ObjectCount>1</ObjectCount>\\n        <Template>promotion</Template>\\n        <PolicyId>321a-fd31-df51-****</PolicyId>\\n        <Name>testpolicy</Name>\\n        <RuntimePolicies>\\n            <Status>3</Status>\\n            <oldValue>{\\"cc_rule_enable\\": true}</oldValue>\\n            <NewValue>{\\"cc_rule_enable\\": false }</NewValue>\\n            <PolicyType>1</PolicyType>\\n        </RuntimePolicies>\\n    </Policies>\\n</DescribeSceneDefensePoliciesResponse>","errorExample":""}]',
            'title' => '查询定制场景策略的详细信息',
            'summary' => '查询定制场景策略的详细配置。',
            'description' => '本接口用于查询已创建的定制场景策略的详细配置，例如，策略的状态、防护对象、防护规则等。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeSceneDefenseObjects' => [
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
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的策略ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeSceneDefensePolicies](~~159382~~)查询所有策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '47e07ebd-0ba5-4afc-957b-59d15b90****',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
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
                            'Success' => [
                                'description' => '本次请求是否成功调用。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示调用成功。'."\n"
                                    .'- **false**：表示调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'FE07E73F-F19E-4A51-B62F-AC59E3B962D8',
                            ],
                            'Objects' => [
                                'description' => '定制场景策略的防护对象信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Domain' => [
                                            'description' => '策略防护的域名。',
                                            'type' => 'string',
                                            'example' => 'www.aliyundoc.com',
                                        ],
                                        'PolicyId' => [
                                            'description' => '定制场景策略的ID。',
                                            'type' => 'string',
                                            'example' => '47e07ebd-0ba5-4afc-957b-59d15b90****',
                                        ],
                                        'Vip' => [
                                            'description' => '策略防护的高防实例IP。',
                                            'type' => 'string',
                                            'example' => '203.XX.XX.119',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"FE07E73F-F19E-4A51-B62F-AC59E3B962D8\\",\\n  \\"Objects\\": [\\n    {\\n      \\"Domain\\": \\"www.aliyundoc.com\\",\\n      \\"PolicyId\\": \\"47e07ebd-0ba5-4afc-957b-59d15b90****\\",\\n      \\"Vip\\": \\"203.XX.XX.119\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeSceneDefenseObjectsResponse>\\n    <Success>true</Success>\\n    <RequestId>FE07E73F-F19E-4A51-B62F-AC59E3B962D8</RequestId>\\n    <Objects>\\n        <Domain>www.aliyundoc.com</Domain>\\n        <PolicyId>47e07ebd-0ba5-4afc-957b-59d15b90****</PolicyId>\\n    </Objects>\\n</DescribeSceneDefenseObjectsResponse>","errorExample":""}]',
            'title' => '查询定制场景策略的防护对象',
            'summary' => '查询定制场景策略的防护对象。',
            'description' => '本接口用于查询定制场景策略的防护对象。'."\n"
                ."\n"
                .'调用本接口前，您必须已经调用[CreateSceneDefensePolicy](~~159779~~)创建了定制场景策略。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteWebCacheCustomRule' => [
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
                'operationType' => 'delete',
                'abilityTreeCode' => '106088',
                'abilityTreeNodes' => [
                    'FEATUREddosOZ1QOD',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除静态页面缓存自定义规则的域名。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeDomains](~~91724~~)查询所有已接入DDoS高防防护的域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'RuleNames',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要删除的规则的名称列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要删除的规则的名称。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'doc-test-rule',
                        ],
                        'required' => true,
                        'example' => 'test',
                        'maxItems' => 10,
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
                                'example' => '6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteWebCacheCustomRuleResponse>\\n    <RequestId>6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1</RequestId>\\n</DeleteWebCacheCustomRuleResponse>","errorExample":""}]',
            'title' => '删除网站业务静态页面缓存的自定义规则',
            'summary' => '删除网站业务静态页面缓存的自定义规则。',
            'description' => '本接口用于批量删除网站业务静态页面缓存的自定义规则。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyWebCacheSwitch' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要设置静态页面缓存的域名。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeDomains](~~91724~~)查询所有已接入DDoS高防防护的域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'Enable',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置静态页面缓存的开关状态。取值：'."\n"
                            ."\n"
                            .'- **1**：表示开启。'."\n"
                            .'- **0**：表示关闭。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyWebCacheSwitchResponse>\\n    <RequestId>6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1</RequestId>\\n</ModifyWebCacheSwitchResponse>","errorExample":""}]',
            'title' => '设置网站业务静态页面缓存的开关状态',
            'summary' => '设置网站业务静态页面缓存的开关状态。',
            'description' => '本接口用于设置网站业务静态页面缓存的开关状态。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyWebCacheMode' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则且关联了增强功能套餐的DDoS高防实例。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '静态页面缓存的模式。取值：'."\n"
                            .'- **standard**：标准模式'."\n"
                            .'- **aggressive**：强力模式'."\n"
                            .'- **bypass**：不缓存',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'standard',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyWebCacheModeResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</ModifyWebCacheModeResponse>","errorExample":""}]',
            'title' => '设置网站业务静态页面缓存的缓存模式',
            'summary' => '设置网站业务静态页面缓存的缓存模式。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyWebCacheCustomRule' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则且关联了增强功能套餐的DDoS高防实例。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'Rules',
                    'in' => 'query',
                    'schema' => [
                        'description' => '静态页面缓存的自定义规则信息，使用JSON格式的字符串表述，具体结构如下。'."\n"
                            .'- **Name**：String类型，必选，规则名称。'."\n"
                            .'- **Uri**：String类型，必选，缓存页面的路径。'."\n"
                            .'- **Mode**：String类型，必选，缓存模式。取值：'."\n"
                            .'    - **standard**：标准模式'."\n"
                            .'    - **aggressive**：强力模式'."\n"
                            .'    - **bypass**：不缓存'."\n"
                            .'- **CacheTtl**：Integer类型，必选，页面缓存的过期时间。单位：秒。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"Name": "test","Uri": "/a","Mode": "standard","CacheTtl": 3600}]',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyWebCacheCustomRuleResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</ModifyWebCacheCustomRuleResponse>","errorExample":""}]',
            'title' => '设置网站业务静态页面缓存的自定义规则',
            'summary' => '设置网站业务静态页面缓存的自定义规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeWebCacheConfigs' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'Domains',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询静态页面缓配置的域名列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询静态页面缓配置的域名。'."\n"
                                ."\n"
                                .'> 您可以调用[DescribeDomains](~~91724~~)查询所有已接入DDoS高防防护的域名。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'www.aliyundoc.com',
                        ],
                        'required' => true,
                        'example' => 'www.aliyun.com',
                        'maxItems' => 5,
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
                                'example' => '6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1',
                            ],
                            'DomainCacheConfigs' => [
                                'description' => '静态页面缓存的配置信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Domain' => [
                                            'description' => '网站域名。',
                                            'type' => 'string',
                                            'example' => 'www.aliyundoc.com',
                                        ],
                                        'Mode' => [
                                            'description' => '缓存模式。取值：'."\n"
                                                .'- **standard**：表示标准模式。'."\n"
                                                .'- **aggressive**：表示强力模式。'."\n"
                                                .'- **bypass**：表示不缓存。',
                                            'type' => 'string',
                                            'example' => 'bypass',
                                        ],
                                        'Enable' => [
                                            'description' => '开关状态。取值：'."\n"
                                                .'- **1**：表示开启。'."\n"
                                                .'- **0**：表示关闭。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'CustomRules' => [
                                            'description' => '自定义缓存规则配置。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Mode' => [
                                                        'description' => '缓存模式。取值：'."\n"
                                                            .'- **standard**：表示标准模式。'."\n"
                                                            .'- **aggressive**：表示强力模式。'."\n"
                                                            .'- **bypass**：表示不缓存。',
                                                        'type' => 'string',
                                                        'example' => 'standard',
                                                    ],
                                                    'CacheTtl' => [
                                                        'description' => '页面缓存的过期时间。单位：秒。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '86400',
                                                    ],
                                                    'Name' => [
                                                        'description' => '规则名称。',
                                                        'type' => 'string',
                                                        'example' => 'c1',
                                                    ],
                                                    'Uri' => [
                                                        'description' => '缓存页面的路径。',
                                                        'type' => 'string',
                                                        'example' => '/blog/',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1\\",\\n  \\"DomainCacheConfigs\\": [\\n    {\\n      \\"Domain\\": \\"www.aliyundoc.com\\",\\n      \\"Mode\\": \\"bypass\\",\\n      \\"Enable\\": 1,\\n      \\"CustomRules\\": [\\n        {\\n          \\"Mode\\": \\"standard\\",\\n          \\"CacheTtl\\": 86400,\\n          \\"Name\\": \\"c1\\",\\n          \\"Uri\\": \\"/blog/\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeWebCacheConfigsResponse>\\n    <RequestId>6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1</RequestId>\\n    <DomainCacheConfigs>\\n        <Domain>www.aliyundoc.com</Domain>\\n        <Mode>bypass</Mode>\\n        <Enable>1</Enable>\\n        <CustomRules>\\n            <Mode>standard</Mode>\\n            <CacheTtl>86400</CacheTtl>\\n            <Name>c1</Name>\\n            <Uri>/blog/</Uri>\\n        </CustomRules>\\n    </DomainCacheConfigs>\\n</DescribeWebCacheConfigsResponse>","errorExample":""}]',
            'title' => '查询网站业务静态页面缓存的配置',
            'summary' => '查询网站业务静态页面缓存的配置。',
            'description' => '本接口用于查询网站业务静态页面缓存的配置，例如，缓存模式、自定义缓存规则等。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDDosEventMax' => [
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
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间戳，单位：秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1598889600',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间戳，单位：秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1604073600',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Qps' => [
                                'description' => 'Web资源耗尽型攻击峰值，单位：qps。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '26314',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '5AE2FC86-C840-41AE-9F1A-3A2747C7C1DF',
                            ],
                            'Cps' => [
                                'description' => '连接型攻击峰值，单位：cps。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1302',
                            ],
                            'Mbps' => [
                                'description' => '流量型攻击峰值，单位：Mbps。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '6809',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Qps\\": 26314,\\n  \\"RequestId\\": \\"5AE2FC86-C840-41AE-9F1A-3A2747C7C1DF\\",\\n  \\"Cps\\": 1302,\\n  \\"Mbps\\": 6809\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeDDosEventMaxResponse>\\r\\n\\t<RequestId>5AE2FC86-C840-41AE-9F1A-3A2747C7C1DF</RequestId>\\r\\n\\t<Qps>26314</Qps>\\r\\n\\t<Cps>1302</Cps>\\r\\n\\t<Mbps>6809</Mbps>\\r\\n </DescribeDDosEventMaxResponse>","errorExample":""}]',
            'title' => '查询攻击峰值',
            'summary' => '查询流量型攻击峰值（bps）、连接型攻击峰值（cps）、Web资源耗尽型攻击峰值（qps）。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDDosEventArea' => [
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
                    'name' => 'EventType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的攻击事件类型。取值：'."\n"
                            ."\n"
                            .'- **defense**：表示流量型攻击清洗事件。'."\n"
                            .'- **blackhole**：表示流量型攻击黑洞事件。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'defense',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询事件的开始时间戳，单位：秒。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeDDosAllEventList](~~188604~~)查询所有事件的开始时间信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1598948471',
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '受攻击的高防IP。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '203.***.***.199',
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
                                'example' => '11710C9F-BC5E-481A-BEC5-C6D8FBFCA827',
                            ],
                            'Areas' => [
                                'description' => '攻击来源地域信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'InPkts' => [
                                            'description' => '攻击来源地域的请求包数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '228',
                                        ],
                                        'Area' => [
                                            'description' => '攻击来源地域的代码。更多信息，请参见[地域代码](~~167926~~)。例如，**110000**表示中国北京市、**us**表示美国。',
                                            'type' => 'string',
                                            'example' => '110000',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"11710C9F-BC5E-481A-BEC5-C6D8FBFCA827\\",\\n  \\"Areas\\": [\\n    {\\n      \\"InPkts\\": 228,\\n      \\"Area\\": \\"110000\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeDDosEventAreaResponse>\\r\\n\\t<RequestId>11710C9F-BC5E-481A-BEC5-C6D8FBFCA827</RequestId>\\r\\n\\t<Areas>\\r\\n\\t\\t<Area>us</Area>\\r\\n\\t\\t<InPkts>2</InPkts>\\r\\n\\t</Areas>\\r\\n\\t<Areas>\\r\\n\\t\\t<Area>110000</Area>\\r\\n\\t\\t<InPkts>228</InPkts>\\r\\n\\t</Areas>\\r\\n  </DescribeDDosEventAreaResponse>\\r\\n","errorExample":""}]',
            'title' => '查询某次流量型攻击的来源地域详情',
            'summary' => '查询某次流量型攻击的来源地域详情。',
            'description' => '> 目前该接口仅适用于查询流量型攻击的数据，不适用于查询Web资源消耗型和连接型攻击的数据。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDDosEventAttackType' => [
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
                    'name' => 'EventType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的攻击事件的类型。取值：'."\n"
                            ."\n"
                            .'- **defense**：表示流量型攻击清洗事件。'."\n"
                            .'- **blackhole**：表示流量型攻击黑洞事件。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'defense',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询事件的开始时间戳，单位：秒。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeDDosAllEventList](~~188604~~)查询所有事件的开始时间信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1598948471',
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '受攻击的高防IP。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '203.***.***.199',
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
                                'example' => '6F644A6E-40E7-483F-9DBB-CC27E16BB555',
                            ],
                            'AttackTypes' => [
                                'description' => '攻击类型信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'InPkts' => [
                                            'description' => '该攻击类型的请求包数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '145902',
                                        ],
                                        'AttackType' => [
                                            'description' => '攻击类型。取值：'."\n"
                                                ."\n"
                                                .'- **QOTD-Reflect-Flood**：QOTD反射攻击'."\n"
                                                .'- **CharGEN-Reflect-Flood**：CharGEN反射攻击'."\n"
                                                .'- **DNS-Reflect-Flood**：DNS反射攻击'."\n"
                                                .'- **TFTP-Reflect-Flood**：TFTP反射攻击'."\n"
                                                .'- **Portmap-Reflect-Flood**：Portmap反射攻击'."\n"
                                                .'- **NTP-Reflect-Flood**：NTP反射攻击'."\n"
                                                .'- **NetBIOS-Reflect-Flood**：NetBIOS反射攻击'."\n"
                                                .'- **SNMPv2-Reflect-Flood**：SNMPv2反射攻击'."\n"
                                                .'- **CLDAP-Reflect-Flood**：CLDAP反射攻击'."\n"
                                                .'- **Ripv1-Reflect-Flood**：Ripv1反射攻击'."\n"
                                                .'- **OpenVPN-Reflect-Flood**：OpenVPN反射攻击'."\n"
                                                .'- **SSDP-Reflect-Flood**：SSDP反射攻击'."\n"
                                                .'- **NetAssistant-Reflect-Flood**：NetAssistant反射攻击'."\n"
                                                .'- **WSDiscovery-Reflect-Flood**：WSDiscovery反射攻击'."\n"
                                                .'- **Kad-Reflect-Flood**：Kad反射攻击'."\n"
                                                .'- **mDNS-Reflect-Flood**：mDNS反射攻击'."\n"
                                                .'- **10001-Reflect-Flood**：10001反射攻击'."\n"
                                                .'- **Memcached-Reflect-Flood**：Memcached反射攻击'."\n"
                                                .'- **QNP-Reflect-Flood**：QNP反射攻击'."\n"
                                                .'- **DVR-Reflect-Flood**：DVR反射攻击'."\n"
                                                .'- **CoAP-Reflect-Flood**：CoAP反射攻击'."\n"
                                                .'- **ADDP-Reflect-Flood**：ADDP反射攻击'."\n"
                                                .'- **Tcp-Syn**：TCP SYN Flood攻击'."\n"
                                                .'- **Tcp-Fin**：TCP FIN Flood攻击'."\n"
                                                .'- **Tcp-Ack**：TCP ACK Flood攻击'."\n"
                                                .'- **Tcp-Rst**：TCP RST Flood攻击'."\n"
                                                .'- **Tcp-Pushack**：TCP PSH+ACK Flood攻击'."\n"
                                                .'- **Tcp-Synack**：TCP SYN+ACK Flood攻击'."\n"
                                                .'- **Udp-None**：UDP攻击'."\n"
                                                .'- **Udp-Ssh**：UDP SSH协议攻击'."\n"
                                                .'- **Udp-Dns**：UDP DNS协议攻击'."\n"
                                                .'- **Udp-Http**：UDP HTTP协议攻击'."\n"
                                                .'- **Udp-Https**：UDP HTTPS协议攻击'."\n"
                                                .'- **Udp-Ntp**：UDP NTP协议攻击'."\n"
                                                .'- **Udp-Ldap**：UDP LDAP协议攻击'."\n"
                                                .'- **Udp-Ssdp**：UDP SSDP协议攻击'."\n"
                                                .'- **Udp-Memcached**：Memcache UDP反射放大攻击'."\n"
                                                .'- **Tcp-Other**：TCP其他类型攻击'."\n"
                                                .'- **Icmp**：ICMP Flood攻击'."\n"
                                                .'- **Igmp**：IGMP Flood攻击'."\n"
                                                .'- **Ipv6**：IPv6攻击',
                                            'type' => 'string',
                                            'example' => 'Tcp-Syn',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F644A6E-40E7-483F-9DBB-CC27E16BB555\\",\\n  \\"AttackTypes\\": [\\n    {\\n      \\"InPkts\\": 145902,\\n      \\"AttackType\\": \\"Tcp-Syn\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeDDosEventAttackTypeResponse>\\r\\n\\t<RequestId>6F644A6E-40E7-483F-9DBB-CC27E16BB555</RequestId>\\r\\n\\t<AttackTypes>\\r\\n\\t\\t<AttackType>Tcp-Syn</AttackType>\\r\\n\\t\\t<InPkts>145902</InPkts>\\r\\n\\t</AttackTypes>\\r\\n\\t<AttackTypes>\\r\\n\\t\\t<AttackType>Tcp-Other</AttackType>\\r\\n\\t\\t<InPkts>3</InPkts>\\r\\n\\t</AttackTypes>\\r\\n  </DescribeDDosEventAttackTypeResponse>","errorExample":""}]',
            'title' => '查询某次流量型攻击的攻击类型详情',
            'summary' => '查询某次流量型攻击的攻击类型详情。',
            'description' => '> 目前该接口仅适用于查询流量型攻击的数据，不适用于查询Web资源消耗型和连接型攻击的数据。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDDosEventIsp' => [
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
                    'name' => 'EventType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的攻击事件类型。取值：'."\n"
                            ."\n"
                            .'- **defense**：流量型攻击清洗事件。'."\n"
                            .'- **blackhole**：流量型攻击黑洞事件。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'defense',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询事件的开始时间戳，单位：秒。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeDDosAllEventList](~~DescribeDDosAllEventList~~)查询所有事件的开始时间信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1598948471',
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '受攻击的高防IP。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '203.***.***.199',
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
                                'example' => 'C4A3BCD1-4A32-4342-941A-4745AE69508C',
                            ],
                            'Isps' => [
                                'description' => '攻击来源网络运营商信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'InPkts' => [
                                            'description' => '来自该网络运营商的请求包数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '230',
                                        ],
                                        'Isp' => [
                                            'description' => '攻击来源网络运营商的代码。取值：'."\n"
                                                ."\n"
                                                .'- **100017**：电信'."\n"
                                                .'- **100026**：联通'."\n"
                                                .'- **100025**：移动'."\n"
                                                .'- **100027**：教育网'."\n"
                                                .'- **100020**：铁通'."\n"
                                                .'- **1000143**：鹏博士'."\n"
                                                .'- **100080**：歌华'."\n"
                                                .'- **1000139**：广电'."\n"
                                                .'- **100023**：有线通'."\n"
                                                .'- **100063**：方正宽带'."\n"
                                                .'- **1000337**：皓宽网络'."\n"
                                                .'- **100021**：世纪互联'."\n"
                                                .'- **1000333**：华数传媒'."\n"
                                                .'- **100093**：网宿'."\n"
                                                .'- **1000401**：腾讯'."\n"
                                                .'- **100099**：百度'."\n"
                                                .'- **1000323**：阿里云'."\n"
                                                .'- **100098**：阿里巴巴',
                                            'type' => 'string',
                                            'example' => '1000323',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C4A3BCD1-4A32-4342-941A-4745AE69508C\\",\\n  \\"Isps\\": [\\n    {\\n      \\"InPkts\\": 230,\\n      \\"Isp\\": \\"1000323\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeDDosEventIspResponse>\\r\\n\\t<RequestId>C4A3BCD1-4A32-4342-941A-4745AE69508C</RequestId>\\r\\n\\t<Isps>\\r\\n\\t\\t<InPkts>230</InPkts>\\r\\n\\t\\t<Isp>1000323</Isp>\\r\\n\\t</Isps>\\r\\n\\t<Isps>\\r\\n\\t\\t<InPkts>24</InPkts>\\r\\n\\t\\t<Isp>100098</Isp>\\r\\n\\t</Isps>\\r\\n  </DescribeDDosEventIspResponse>","errorExample":""}]',
            'title' => '查询攻击来源网络运营商（ISP）信息',
            'summary' => '查询某次流量型攻击的攻击来源网络运营商（ISP）信息。',
            'description' => '> 目前该接口仅适用于查询流量型攻击的数据，不适用于查询Web资源消耗型和连接型攻击的数据。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDDosEventSrcIp' => [
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
                    'name' => 'EventType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的攻击事件的类型。取值：'."\n"
                            ."\n"
                            .'- **defense**：表示流量型攻击清洗事件。'."\n"
                            .'- **blackhole**：表示流量型攻击黑洞事件。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'defense',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询事件的开始时间戳，单位：秒。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeDDosAllEventList](~~188604~~)查询所有事件的开始时间信息。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1598948471',
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '受攻击的高防IP。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '203.***.***.199',
                    ],
                ],
                [
                    'name' => 'Range',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要返回的攻击来源IP的个数。按照攻击流量由大到小排序，默认返回前**5**个IP。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '2',
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
                                'example' => '38A0224E-FDBC-4733-A362-B391827FC1E9',
                            ],
                            'Ips' => [
                                'description' => '攻击来源IP信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'SrcIp' => [
                                            'description' => '攻击来源IP。',
                                            'type' => 'string',
                                            'example' => '218.***.***.24',
                                        ],
                                        'AreaId' => [
                                            'description' => '攻击来源地域的代码。更多信息，请参见[地域代码](~~167926~~)。例如，**110000**表示中国北京市、**us**表示美国。',
                                            'type' => 'string',
                                            'example' => '110000',
                                        ],
                                        'Isp' => [
                                            'description' => '攻击来源网络运营商。取值：'."\n"
                                                ."\n"
                                                .'- **100017**：电信'."\n"
                                                .'- **100026**：联通'."\n"
                                                .'- **100025**：移动'."\n"
                                                .'- **100027**：教育网'."\n"
                                                .'- **100020**：铁通'."\n"
                                                .'- **1000143**：鹏博士'."\n"
                                                .'- **100080**：歌华'."\n"
                                                .'- **1000139**：广电'."\n"
                                                .'- **100023**：有线通'."\n"
                                                .'- **100063**：方正宽带'."\n"
                                                .'- **1000337**：皓宽网络'."\n"
                                                .'- **100021**：世纪互联'."\n"
                                                .'- **1000333**：华数传媒'."\n"
                                                .'- **100093**：网宿'."\n"
                                                .'- **1000401**：腾讯'."\n"
                                                .'- **100099**：百度'."\n"
                                                .'- **1000323**：阿里云'."\n"
                                                .'- **100098**：阿里巴巴',
                                            'type' => 'string',
                                            'example' => '100026',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"38A0224E-FDBC-4733-A362-B391827FC1E9\\",\\n  \\"Ips\\": [\\n    {\\n      \\"SrcIp\\": \\"218.***.***.24\\",\\n      \\"AreaId\\": \\"110000\\",\\n      \\"Isp\\": \\"100026\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeDDosEventSrcIpResponse>\\r\\n\\t<RequestId>38A0224E-FDBC-4733-A362-B391827FC1E9</RequestId>\\r\\n\\t<Ips>\\r\\n\\t\\t<Isp>100026</Isp>\\r\\n\\t\\t<AreaId>110000</AreaId>\\r\\n\\t\\t<SrcIp>218.***.***.24</SrcIp>\\r\\n\\t</Ips>\\r\\n\\t<Ips>\\r\\n\\t\\t<Isp></Isp>\\r\\n\\t\\t<AreaId>us</AreaId>\\r\\n\\t\\t<SrcIp>193.***.***.174</SrcIp>\\r\\n\\t</Ips>\\r\\n</DescribeDDosEventSrcIpResponse>\\r\\n","errorExample":""}]',
            'title' => '查询某次流量型攻击的攻击来源IP详情',
            'summary' => '查询某次流量型攻击的攻击来源IP详情。',
            'description' => '> 目前该接口仅适用于查询流量型攻击的数据，不适用于查询Web资源消耗型和连接型攻击的数据。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeBackSourceCidr' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'Line',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的线路。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'coop-line-001',
                    ],
                ],
                [
                    'name' => 'IpVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的回源IP网段的IP协议类型。'."\n"
                            ."\n"
                            .'- **IPv4**：表示IPv4协议。'."\n"
                            .'- **IPv6**：表示IPv6协议。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'IPv4',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                            'Cidrs' => [
                                'description' => 'DDoS高防的回源IP网段列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'DDoS高防的回源IP网段。',
                                    'type' => 'string',
                                    'example' => '47.0.XX.XX/25',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\",\\n  \\"Cidrs\\": [\\n    \\"47.0.XX.XX/25\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackSourceCidrResponse>\\n    <RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\n    <Cidrs>[ \\"47.0.XX.XX/25\\",\\"47.128.XX.XX/25\\" ]</Cidrs>\\n</DescribeBackSourceCidrResponse>","errorExample":""}]',
            'title' => '查询高防回源网段地址',
            'summary' => '查询DDoS高防的回源IP网段。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDDosAllEventList' => [
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
                    'name' => 'EventType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS攻击事件的类型。取值：'."\n"
                            ."\n"
                            .'- **web-cc**：表示Web资源耗尽型攻击。'."\n"
                            .'- **cc**：表示连接型攻击。'."\n"
                            .'- **defense**：表示流量型攻击（清洗事件）。'."\n"
                            .'- **blackhole**：表示流量型攻击（黑洞事件）。'."\n"
                            ."\n"
                            .'支持同时设置多个类型，多个类型间使用半角逗号（,）分隔。'."\n"
                            ."\n"
                            .'不设置该参数表示查询所有类型的攻击事件。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'defense',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置开始时间，查询在**StartTime**后发生的DDoS攻击事件。使用时间戳表示，单位：秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1609430400',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置结束时间，查询在**EndTime**前发生的DDoS攻击事件。使用时间戳表示，单位：秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1640966399',
                    ],
                ],
                [
                    'name' => 'PageNumber',
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
                        'description' => '分页查询时，设置每页包含攻击事件的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Total' => [
                                'description' => '查询到的攻击事件的总数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '25D83ED5-28CB-5683-9CF7-AECE521F3005',
                            ],
                            'AttackEvents' => [
                                'description' => '攻击事件列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EndTime' => [
                                            'description' => '攻击结束时间。使用时间戳表示，单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1634546030',
                                        ],
                                        'StartTime' => [
                                            'description' => '攻击开始时间。使用时间戳表示，单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1634543764',
                                        ],
                                        'EventType' => [
                                            'description' => 'DDoS攻击事件的类型。取值：'."\n"
                                                ."\n"
                                                .'- **web-cc**：表示Web资源耗尽型攻击。'."\n"
                                                .'- **cc**：表示连接型攻击。'."\n"
                                                .'- **defense**：表示流量型攻击（清洗事件）。'."\n"
                                                .'- **blackhole**：表示流量型攻击（黑洞事件）。',
                                            'type' => 'string',
                                            'example' => 'cc',
                                        ],
                                        'Mbps' => [
                                            'description' => '攻击流量的带宽峰值。单位：Mbps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '101899',
                                        ],
                                        'Ip' => [
                                            'description' => '被攻击的对象。不同攻击事件类型对应的被攻击对象不同，具体说明如下：'."\n"
                                                ."\n"
                                                .'- Web资源耗尽型攻击（**EventType**为**web-cc**）：该参数表示被攻击的网站域名。'."\n"
                                                .'- 连接型攻击（**EventType**为**cc**）：该参数表示被攻击的高防IP。'."\n"
                                                .'- 流量型攻击（**EventType**为**defense**或**blackhole**）：该参数表示被攻击的高防IP。',
                                            'type' => 'string',
                                            'example' => '203.107.XX.XX',
                                        ],
                                        'Area' => [
                                            'description' => '攻击来源地域。取值：'."\n"
                                                ."\n"
                                                .'- **cn**：表示中国内地。'."\n"
                                                .'- **alb-cn-hongkong-gf-2**：表示中国香港。'."\n"
                                                .'- **alb-us-west-1-gf-2**：表示美国（硅谷）。'."\n"
                                                .'- **alb-ap-northeast-1-gf-1**：表示日本（东京）。'."\n"
                                                .'- **alb-ap-southeast-gf-1**：表示新加坡。'."\n"
                                                .'- **alb-eu-central-1-gf-1**：表示德国（法兰克福）。'."\n"
                                                .'- **alb-eu-west-1-gf-1**、**selb-eu-west-1-gf-1a**：表示英国（伦敦）。'."\n"
                                                .'- **alb-us-east-gf-1**：表示美国（弗吉尼亚）。'."\n"
                                                .'- **CT-yundi**：表示中国香港。该取值只适用于DDoS高防（国际）安全加速线路实例。',
                                            'type' => 'string',
                                            'example' => 'cn',
                                        ],
                                        'Port' => [
                                            'description' => '被攻击的端口号。'."\n"
                                                ."\n"
                                                .'> Web资源耗尽型攻击（**EventType**为**web-cc**）不返回该参数。',
                                            'type' => 'string',
                                            'example' => '80',
                                        ],
                                        'Pps' => [
                                            'description' => '攻击流量的包转发率峰值。单位：pps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '9664270',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Total\\": 1,\\n  \\"RequestId\\": \\"25D83ED5-28CB-5683-9CF7-AECE521F3005\\",\\n  \\"AttackEvents\\": [\\n    {\\n      \\"EndTime\\": 1634546030,\\n      \\"StartTime\\": 1634543764,\\n      \\"EventType\\": \\"cc\\",\\n      \\"Mbps\\": 101899,\\n      \\"Ip\\": \\"203.107.XX.XX\\",\\n      \\"Area\\": \\"cn\\",\\n      \\"Port\\": \\"80\\",\\n      \\"Pps\\": 9664270\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDDosAllEventListResponse>\\n    <Total>1</Total>\\n    <RequestId>25D83ED5-28CB-5683-9CF7-AECE521F3005</RequestId>\\n    <AttackEvents>\\n        <EndTime>1634546030</EndTime>\\n        <StartTime>1634543764</StartTime>\\n        <EventType>cc</EventType>\\n        <Mbps>101899</Mbps>\\n        <Ip>203.107.XX.XX</Ip>\\n        <Area>cn</Area>\\n        <Port>80</Port>\\n        <Pps>9664270</Pps>\\n    </AttackEvents>\\n</DescribeDDosAllEventListResponse>","errorExample":""}]',
            'title' => '查询攻击事件列表',
            'summary' => '查询DDoS攻击事件列表。',
            'description' => '本接口用于分页查询指定时间范围内的DDoS攻击事件列表。DDoS攻击事件包含以下信息：攻击的起止时间、攻击类型、受攻击的对象、攻击流量的峰值（带宽峰值或包转发率峰值）等。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDDoSEvents' => [
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
                'abilityTreeCode' => '106114',
                'abilityTreeNodes' => [
                    'FEATUREddosRTUJBH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1583683200',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1582992000',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页面显示的记录数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询请求时返回的页码。例如，查询第一页的返回结果，则填写**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。'."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => 'DDoS高防实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-mp91j1ao****',
                        ],
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 100,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Total' => [
                                'description' => '攻击事件总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '0CA72AF5-1795-4350-8C77-50A448A2F334',
                            ],
                            'DDoSEvents' => [
                                'description' => 'DDoS攻击事件列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EndTime' => [
                                            'description' => '攻击结束时间。时间戳格式，单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1583933330',
                                        ],
                                        'StartTime' => [
                                            'description' => '攻击开始时间。时间戳格式，单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1583933277',
                                        ],
                                        'EventType' => [
                                            'description' => '攻击事件类型。取值：'."\n"
                                                .'- **defense**：清洗事件。'."\n"
                                                .'- **blackhole**：黑洞事件。',
                                            'type' => 'string',
                                            'example' => 'blackhole',
                                        ],
                                        'Region' => [
                                            'description' => '攻击来源地区。取值：'."\n"
                                                .'- **cn**：中国内地。'."\n"
                                                .'- **alb-ap-northeast-1-gf-x**：日本。'."\n"
                                                .'- **alb-ap-southeast-gf-x**：新加坡。'."\n"
                                                .'- **alb-cn-hongkong-gf-x**：中国香港。'."\n"
                                                .'- **alb-eu-central-1-gf-x**：德国。'."\n"
                                                .'- **alb-us-west-1-gf-x**：美国西部。'."\n"
                                                ."\n"
                                                .'>**cn**以外的取值只有在DDoS高防（国际）服务（**RegionId**为**ap-southeast-1**）中提供。',
                                            'type' => 'string',
                                            'example' => 'cn',
                                        ],
                                        'Ip' => [
                                            'description' => '被攻击IP。',
                                            'type' => 'string',
                                            'example' => '203.***.***.132',
                                        ],
                                        'Port' => [
                                            'description' => '被攻击端口。',
                                            'type' => 'string',
                                            'example' => '80',
                                        ],
                                        'Bps' => [
                                            'description' => '攻击流量带宽大小。单位：bps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'Pps' => [
                                            'description' => '攻击流量包转发率。单位：pps。',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Total\\": 1,\\n  \\"RequestId\\": \\"0CA72AF5-1795-4350-8C77-50A448A2F334\\",\\n  \\"DDoSEvents\\": [\\n    {\\n      \\"EndTime\\": 1583933330,\\n      \\"StartTime\\": 1583933277,\\n      \\"EventType\\": \\"blackhole\\",\\n      \\"Region\\": \\"cn\\",\\n      \\"Ip\\": \\"203.***.***.132\\",\\n      \\"Port\\": \\"80\\",\\n      \\"Bps\\": 0,\\n      \\"Pps\\": 0\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeDDoSEventsResponse>\\r\\n\\t<RequestId>0CA72AF5-1795-4350-8C77-50A448A2F334</RequestId>\\r\\n\\t<Total>1</Total>\\r\\n\\t<DDoSEvents>\\r\\n\\t\\t<Pps>0</Pps>\\r\\n\\t\\t<Bps>0</Bps>\\r\\n\\t\\t<EndTime>1583933330</EndTime>\\r\\n\\t\\t<EventType>blackhole</EventType>\\r\\n\\t\\t<Ip>203.***.***.132</Ip>\\r\\n\\t\\t<Port></Port>\\r\\n\\t\\t<StartTime>1583933277</StartTime>\\r\\n\\t</DDoSEvents>\\r\\n</DescribeDDoSEventsResponse>","errorExample":""}]',
            'title' => '查询指定IP的DDoS攻击事件',
            'summary' => '查询针对DDoS高防实例的攻击事件。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeSlaEventList' => [
            'summary' => '查询目的限速事件列表。',
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
                'abilityTreeCode' => '175662',
                'abilityTreeNodes' => [
                    'FEATUREddosRTUJBH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务地域。取值：'."\n"
                            .'- **cn**：中国内地。'."\n"
                            .'- **cn-hongkong**：非中国内地。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn',
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '203.107.XX.XX',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1678080840',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。时间戳格式，单位：秒。'."\n"
                            ."\n"
                            .'> 必须为整点分钟。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1671886740',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页包含的记录数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'Page',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询页码。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
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
                                'example' => 'CF33B4C3-196E-4015-AADD-5CAD00057B80',
                            ],
                            'SlaEvent' => [
                                'description' => '目的限速事件列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'StartTime' => [
                                            'description' => '查询事件的开始时间，单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1678080840',
                                        ],
                                        'EndTime' => [
                                            'description' => '查询事件的结束时间，单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1671886740',
                                        ],
                                        'Ip' => [
                                            'description' => '要查询的高防实例IP。',
                                            'type' => 'string',
                                            'example' => '203.107.XX.XX',
                                        ],
                                        'Region' => [
                                            'description' => '目的限速IP所属地区。取值：'."\n"
                                                .'- **cn**：中国内地。'."\n"
                                                .'- **cn-hongkong**：中国香港。',
                                            'type' => 'string',
                                            'example' => 'cn',
                                        ],
                                    ],
                                ],
                            ],
                            'Total' => [
                                'description' => '目的限速列表总数。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CF33B4C3-196E-4015-AADD-5CAD00057B80\\",\\n  \\"SlaEvent\\": [\\n    {\\n      \\"StartTime\\": 1678080840,\\n      \\"EndTime\\": 1671886740,\\n      \\"Ip\\": \\"203.107.XX.XX\\",\\n      \\"Region\\": \\"cn\\"\\n    }\\n  ],\\n  \\"Total\\": 10\\n}","type":"json"}]',
            'title' => '查询目的限速事件列表',
        ],
        'DescribeDomainAttackEvents' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1582992000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1583683200',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询请求时返回的页码。例如，查询第一页的返回结果，则填写**1**。',
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
                        'description' => '页面显示的记录数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
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
                                'description' => '攻击事件的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E',
                            ],
                            'DomainAttackEvents' => [
                                'description' => '网站业务DDoS攻击事件信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EndTime' => [
                                            'description' => '攻击结束时间。时间戳格式，单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1560320160',
                                        ],
                                        'StartTime' => [
                                            'description' => '攻击开始时间。时间戳格式，单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1560312900',
                                        ],
                                        'Domain' => [
                                            'description' => '被攻击域名。',
                                            'type' => 'string',
                                            'example' => 'www.aliyun.com',
                                        ],
                                        'MaxQps' => [
                                            'description' => '攻击峰值QPS。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1000',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\",\\n  \\"DomainAttackEvents\\": [\\n    {\\n      \\"EndTime\\": 1560320160,\\n      \\"StartTime\\": 1560312900,\\n      \\"Domain\\": \\"www.aliyun.com\\",\\n      \\"MaxQps\\": 1000\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeDomainAttackEventsResponse>\\r\\n\\t<RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\r\\n\\t<TotalCount>1</TotalCount>\\r\\n\\t<DomainAttackEvents>\\r\\n\\t\\t<Domain>www.aliyun.com</Domain>\\r\\n\\t\\t<MaxQps>1000</MaxQps>\\r\\n\\t\\t<StartTime>1560312900</StartTime>\\r\\n\\t\\t<EndTime>1560320160</EndTime>\\r\\n\\t</DomainAttackEvents>\\r\\n</DescribeDomainAttackEventsResponse>","errorExample":""}]',
            'title' => '查询针对网站业务的攻击事件',
            'summary' => '查询针对网站业务的攻击事件。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDefenseCountStatistics' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。'."\n",
                                'type' => 'string',
                                'example' => '310A41FD-0990-5610-92E0-A6A55D7C6444',
                            ],
                            'DefenseCountStatistics' => [
                                'description' => '高级防护次数统计数据。',
                                'type' => 'object',
                                'properties' => [
                                    'FlowPackCountRemain' => [
                                        'description' => '高级防护资源包中剩余可用的保险版高级防护次数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'MaxUsableDefenseCountCurrentMonth' => [
                                        'description' => '当前自然月可使用的高级防护次数（包含实例自带的高级防护和高级防护资源包提供的高级防护）的上限。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '20',
                                    ],
                                    'DefenseCountTotalUsageOfCurrentMonth' => [
                                        'description' => '当前自然月已使用的高级防护总次数（包含实例自带的高级防护和高级防护资源包提供的高级防护）。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'SecHighSpeedCountRemain' => [
                                        'description' => '高级防护资源包中剩余可用的安全加速线路高级防护次数。',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"310A41FD-0990-5610-92E0-A6A55D7C6444\\",\\n  \\"DefenseCountStatistics\\": {\\n    \\"FlowPackCountRemain\\": 0,\\n    \\"MaxUsableDefenseCountCurrentMonth\\": 20,\\n    \\"DefenseCountTotalUsageOfCurrentMonth\\": 0,\\n    \\"SecHighSpeedCountRemain\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDefenseCountStatisticsResponse>\\n    <RequestId>310A41FD-0990-5610-92E0-A6A55D7C6444</RequestId>\\n    <DefenseCountStatistics>\\n        <FlowPackCountRemain>0</FlowPackCountRemain>\\n        <MaxUsableDefenseCountCurrentMonth>20</MaxUsableDefenseCountCurrentMonth>\\n        <DefenseCountTotalUsageOfCurrentMonth>0</DefenseCountTotalUsageOfCurrentMonth>\\n        <SecHighSpeedCountRemain>0</SecHighSpeedCountRemain>\\n    </DefenseCountStatistics>\\n</DescribeDefenseCountStatisticsResponse>","errorExample":""}]',
            'title' => '查询DDoS高防（非中国内地）服务的高级防护次数统计数据',
            'summary' => '查询DDoS高防（非中国内地）服务的高级防护次数统计数据。',
            'description' => '本接口用于查询DDoS高防（非中国内地）服务的高级防护次数统计数据，例如，当前自然月已使用的高级防护次数、高级防护资源包中剩余可用的高级防护次数等。'."\n"
                ."\n"
                .'><notice> 本接口只适用于DDoS高防（非中国内地）服务。'."\n"
                .'></notice>'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文示例中的请求示例。',
        ],
        'DescribeAttackAnalysisMaxQps' => [
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
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。使用时间戳格式，单位：秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1622476799',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。使用时间戳格式，单位：秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1619798400',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Qps' => [
                                'description' => 'DDoS攻击的峰值，单位：qps。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '41652',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '8DFB602D-1AAC-46C4-90F2-C84086E7A6E4',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Qps\\": 41652,\\n  \\"RequestId\\": \\"8DFB602D-1AAC-46C4-90F2-C84086E7A6E4\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<DescribeAttackAnalysisMaxQpsResponse>\\n\\t<RequestId>8DFB602D-1AAC-46C4-90F2-C84086E7A6E4</RequestId>\\n\\t<Qps>41652</Qps>\\n</DescribeAttackAnalysisMaxQpsResponse>","errorExample":""}]',
            'title' => '查询指攻击的峰值',
            'summary' => '查询指定时间段内DDoS攻击的峰值（qps）。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribePortFlowList' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。'."\n"
                            ."\n"
                            .'关于资源组的更多信息，请参见[创建资源组](~~94485~~)。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置查询结束时间。使用时间戳格式，单位：秒。'."\n"
                            ."\n"
                            .'> 必须设置成整点分钟。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1583683200',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置查询开始时间。使用时间戳格式，单位：秒。'."\n"
                            ."\n"
                            .'> 必须设置成整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1582992000',
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置返回数据的步长，单位为秒，即每隔多少秒返回一个结果。查询时间范围（由**StartTime**和**EndTime**决定）不同，支持的步长取值范围不同，设置建议如下：'."\n"
                            ."\n"
                            .'- 查询时间范围不大于1小时，建议最小步长为60秒，最大不超过查询时间范围。'."\n"
                            .'- 查询时间范围大于1小时但不超过6小时，建议最小步长为600秒，最大不超过查询时间范围。'."\n"
                            .'- 查询时间范围大于6小时但不超过24小时，建议最小步长为1800秒，最大不超过查询时间范围。'."\n"
                            .'- 查询时间范围大于24小时但不超过7天，建议最小步长为3600秒，最大不超过查询时间范围。'."\n"
                            .'- 查询时间范围大于7天但不超过15天，建议最小步长为14400秒，最大不超过查询时间范围。'."\n"
                            .'- 查询时间范围大于15天，建议最小步长为43200秒，最大不超过查询时间范围。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1000',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'DDoS高防实例的ID。'."\n"
                                .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-zz120cjv****',
                        ],
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 100,
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
                                'example' => 'FFC77501-BDF8-4BC8-9BF5-B295FBC3189B',
                            ],
                            'PortFlowList' => [
                                'description' => '查询到的流量数据。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Index' => [
                                            'description' => '返回数据的索引号。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'Time' => [
                                            'description' => '统计时间。时间戳格式，单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1582992000',
                                        ],
                                        'InPps' => [
                                            'description' => '入方向包转发率，单位：pps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2934',
                                        ],
                                        'InBps' => [
                                            'description' => '入方向带宽，单位：bps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2176000',
                                        ],
                                        'Region' => [
                                            'description' => '访问流量来源地区。取值：'."\n"
                                                .'- **cn**：中国内地。'."\n"
                                                .'- **alb-ap-northeast-1-gf-x**：日本。'."\n"
                                                .'- **alb-ap-southeast-gf-x**：新加坡。'."\n"
                                                .'- **alb-cn-hongkong-gf-x**：中国香港。'."\n"
                                                .'- **alb-eu-central-1-gf-x**：德国。'."\n"
                                                .'- **alb-us-west-1-gf-x**：美国西部。'."\n"
                                                ."\n"
                                                .'>**cn**以外的取值只有在DDoS高防（国际）服务（**RegionId**为**ap-southeast-1**）中提供。',
                                            'type' => 'string',
                                            'example' => 'cn',
                                        ],
                                        'OutPps' => [
                                            'description' => '出方向包转发率，单位：pps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '5',
                                        ],
                                        'AttackPps' => [
                                            'description' => '攻击包转发率，单位：pps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'OutBps' => [
                                            'description' => '出方向带宽，单位：bps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '4389',
                                        ],
                                        'AttackBps' => [
                                            'description' => '攻击带宽，单位：bps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'SlaBpsDropBps' => [
                                            'description' => '目的带宽，单位：bps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'SlaPpsDropBps' => [
                                            'description' => '目的报文，单位：bps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'SlaCpsDropBps' => [
                                            'description' => '目的新建连接数，单位：bps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'SlaConnDropBps' => [
                                            'description' => '目的并发连接数，单位：bps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'SlaBpsDropPps' => [
                                            'description' => '目的带宽包转发率，单位：pps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'SlaPpsDropPps' => [
                                            'description' => '目的报文包转发率，单位：pps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'SlaCpsDropPps' => [
                                            'description' => '目的新建连接数包转发率，单位：pps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'SlaConnDropPps' => [
                                            'description' => '目的并发连接数包转发率，单位：pps。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FFC77501-BDF8-4BC8-9BF5-B295FBC3189B\\",\\n  \\"PortFlowList\\": [\\n    {\\n      \\"Index\\": 0,\\n      \\"Time\\": 1582992000,\\n      \\"InPps\\": 2934,\\n      \\"InBps\\": 2176000,\\n      \\"Region\\": \\"cn\\",\\n      \\"OutPps\\": 5,\\n      \\"AttackPps\\": 0,\\n      \\"OutBps\\": 4389,\\n      \\"AttackBps\\": 0,\\n      \\"SlaBpsDropBps\\": 0,\\n      \\"SlaPpsDropBps\\": 0,\\n      \\"SlaCpsDropBps\\": 0,\\n      \\"SlaConnDropBps\\": 0,\\n      \\"SlaBpsDropPps\\": 0,\\n      \\"SlaPpsDropPps\\": 0,\\n      \\"SlaCpsDropPps\\": 0,\\n      \\"SlaConnDropPps\\": 0\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询DDoS高防实例的流量数据列表',
            'summary' => '查询DDoS高防实例的流量数据列表。',
        ],
        'DescribePortConnsList' => [
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
                'abilityTreeCode' => '106174',
                'abilityTreeNodes' => [
                    'FEATUREddosRTUJBH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1583683200',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1582992000',
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回数据的步长，单位为秒，即每隔多少秒返回一个结果。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1000',
                    ],
                ],
                [
                    'name' => 'Port',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的端口号。不传入该参数表示查询所有端口。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '80',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'DDoS高防实例的ID。'."\n"
                                .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-mp91j1ao****',
                        ],
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 100,
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
                                'example' => '6D48AED0-41DB-5D9B-B484-3B6AAD312AD1',
                            ],
                            'ConnsList' => [
                                'description' => '端口连接数据列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ActConns' => [
                                            'description' => '活跃连接数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3',
                                        ],
                                        'InActConns' => [
                                            'description' => '不活跃连接数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'Index' => [
                                            'description' => '返回数据的索引。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '16506',
                                        ],
                                        'Cps' => [
                                            'description' => '新建连接数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'Conns' => [
                                            'description' => '> 该参数在内部测试中，暂时请勿使用。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '8',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6D48AED0-41DB-5D9B-B484-3B6AAD312AD1\\",\\n  \\"ConnsList\\": [\\n    {\\n      \\"ActConns\\": 3,\\n      \\"InActConns\\": 2,\\n      \\"Index\\": 16506,\\n      \\"Cps\\": 0,\\n      \\"Conns\\": 8\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribePortConnsListResponse>\\n    <RequestId>6D48AED0-41DB-5D9B-B484-3B6AAD312AD1</RequestId>\\n    <ConnsList>\\n        <ActConns>3</ActConns>\\n        <InActConns>2</InActConns>\\n        <Index>16506</Index>\\n        <Cps>0</Cps>\\n        <Conns>8</Conns>\\n    </ConnsList>\\n</DescribePortConnsListResponse>","errorExample":""}]',
            'title' => '查询DDoS高防实例的端口连接数列表',
            'summary' => '查询DDoS高防实例的端口连接数列表。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribePortConnsCount' => [
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
                'abilityTreeCode' => '106173',
                'abilityTreeNodes' => [
                    'FEATUREddosRTUJBH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1583683200',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1582992000',
                    ],
                ],
                [
                    'name' => 'Port',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的端口号。不传入该参数表示查询所有端口号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '80',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'DDoS高防实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-mp91j1ao****',
                        ],
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 100,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'InActConns' => [
                                'description' => '不活跃的连接数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '121',
                            ],
                            'ActConns' => [
                                'description' => '活跃的连接数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '159',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '48859E14-A9FB-4100-99FF-AAB75CA46776',
                            ],
                            'Cps' => [
                                'description' => '新建连接数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                            ],
                            'Conns' => [
                                'description' => '并发连接数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '46340',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"InActConns\\": 121,\\n  \\"ActConns\\": 159,\\n  \\"RequestId\\": \\"48859E14-A9FB-4100-99FF-AAB75CA46776\\",\\n  \\"Cps\\": 0,\\n  \\"Conns\\": 46340\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribePortConnsCountResponse>\\r\\n\\t<Conns>46340</Conns>\\r\\n\\t<RequestId>48859E14-A9FB-4100-99FF-AAB75CA46776</RequestId>\\r\\n\\t<Cps>0</Cps>\\r\\n\\t<ActConns>159</ActConns>\\r\\n\\t<InActConns>121</InActConns>\\r\\n</DescribePortConnsCountResponse>","errorExample":""}]',
            'title' => '查询实例端口连接数统计信息',
            'summary' => '查询DDoS高防实例的端口连接数统计信息。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribePortMaxConns' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1583683200',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1582992000',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'DDoS高防实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => ' ddoscoo-cn-mp91j1ao****',
                        ],
                        'required' => true,
                        'example' => ' ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 100,
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
                                'example' => '08F79110-2AF5-4FA7-998E-7C5E75EACF9C',
                            ],
                            'PortMaxConns' => [
                                'description' => 'DDoS高防实例的端口连接峰值信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Ip' => [
                                            'description' => 'DDoS高防实例的IP。',
                                            'type' => 'string',
                                            'example' => '203.***.***.117',
                                        ],
                                        'Port' => [
                                            'description' => 'DDoS高防实例的端口。',
                                            'type' => 'string',
                                            'example' => '80',
                                        ],
                                        'Cps' => [
                                            'description' => '最大每秒连接数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '100',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"08F79110-2AF5-4FA7-998E-7C5E75EACF9C\\",\\n  \\"PortMaxConns\\": [\\n    {\\n      \\"Ip\\": \\"203.***.***.117\\",\\n      \\"Port\\": \\"80\\",\\n      \\"Cps\\": 100\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribePortMaxConnsResponse>\\r\\n\\t<PortMaxConns>\\r\\n\\t\\t<Port>80</Port>\\r\\n\\t\\t<Ip>203.***.***.117</Ip>\\r\\n\\t\\t<Cps>0</Cps>\\r\\n\\t</PortMaxConns>\\r\\n\\t<PortMaxConns>\\r\\n\\t\\t<Port>443</Port>\\r\\n\\t\\t<Ip>203.***.***.117</Ip>\\r\\n\\t\\t<Cps>0</Cps>\\r\\n\\t</PortMaxConns>\\r\\n\\t<RequestId>08F79110-2AF5-4FA7-998E-7C5E75EACF9C</RequestId>\\r\\n</DescribePortMaxConnsResponse>","errorExample":""}]',
            'title' => '查询DDoS高防实例的端口连接峰值信息',
            'summary' => '查询DDoS高防实例的端口连接峰值信息。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribePortAttackMaxFlow' => [
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
                'abilityTreeCode' => '106165',
                'abilityTreeNodes' => [
                    'FEATUREddosRTUJBH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的流量数据的结束时间。使用时间戳表示，单位：秒。'."\n"
                            ."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1583683200',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的流量数据的开始时间。使用时间戳表示，单位：秒。'."\n"
                            ."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1582992000',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询的DDoS高防实例的ID。'."\n"
                                ."\n"
                                .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-zvp2eibz****',
                        ],
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 100,
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
                            'Bps' => [
                                'description' => '攻击带宽峰值。单位：bps。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '149559',
                            ],
                            'Pps' => [
                                'description' => '攻击包速峰值。单位：pps。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '23',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\",\\n  \\"Bps\\": 149559,\\n  \\"Pps\\": 23\\n}","errorExample":""},{"type":"xml","example":"<DescribePortAttackMaxFlowResponse>\\n    <RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\n    <Bps>149559</Bps>\\n    <Pps>23</Pps>\\n</DescribePortAttackMaxFlowResponse>","errorExample":""}]',
            'title' => '查询DDoS高防受到的攻击带宽和包速峰值',
            'summary' => '查询指定时间段内DDoS高防受到的攻击带宽和包速峰值。',
            'description' => '本接口用于查询指定时间段内DDoS高防受到的攻击带宽和包速峰值。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribePortViewSourceCountries' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。'."\n"
                            ."\n"
                            .'关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1583683200',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1582992000',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询的DDoS高防实例的ID。'."\n"
                                .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-mp91j1ao****',
                        ],
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 100,
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
                            'SourceCountrys' => [
                                'description' => 'DDoS高防实例的请求来源国家信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Count' => [
                                            'description' => '请求次数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3390671',
                                        ],
                                        'CountryId' => [
                                            'description' => '请求来源国家的简称。例如，**cn**表示中国，**us**表示美国。'."\n"
                                                ."\n"
                                                .'> 关于该参数的取值，请参见[地域类型参数取值说明](~~167926~~)。',
                                            'type' => 'string',
                                            'example' => 'cn',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\",\\n  \\"SourceCountrys\\": [\\n    {\\n      \\"Count\\": 3390671,\\n      \\"CountryId\\": \\"cn\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询实例的请求来源国家分布',
            'summary' => '查询指定时间段内DDoS高防实例的请求来源国家分布。',
        ],
        'DescribePortViewSourceIsps' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的请求数据的结束时间。使用时间戳表示，单位：秒。'."\n"
                            ."\n"
                            .'> 必须为整点分钟。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1583683200',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的请求数据的开始时间。使用时间戳表示，单位：秒。'."\n"
                            ."\n"
                            .'> 必须为整点分钟。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1582992000',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询的DDoS高防实例的ID。'."\n"
                                .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-zvp2eibz****',
                        ],
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 100,
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
                            'Isps' => [
                                'description' => 'DDoS高防实例的请求来源运营商信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Count' => [
                                            'description' => '相对请求数量。'."\n"
                                                ."\n"
                                                .'> 该数据不表示真实请求数量的大小，目前您可以使用该数据来计算不同运营商请求数量的比例。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3390671',
                                        ],
                                        'IspId' => [
                                            'description' => '运营商ID。详见返回参数表下的运营商代码说明，运营商ID对应表中的代码。',
                                            'type' => 'string',
                                            'example' => '100017',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\",\\n  \\"Isps\\": [\\n    {\\n      \\"Count\\": 3390671,\\n      \\"IspId\\": \\"100017\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribePortViewSourceIspsResponse>\\n    <RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\n    <Isps>\\n        <Count>3390671</Count>\\n        <IspId>100017</IspId>\\n    </Isps>\\n</DescribePortViewSourceIspsResponse>","errorExample":""}]',
            'title' => '查询实例的请求来源运营商分布',
            'summary' => '查询指定时间段内DDoS高防实例的请求来源运营商分布。',
            'description' => '本接口用于查询指定时间段内DDoS高防实例的请求来源运营商分布。'."\n"
                ."\n"
                .'> 由于DDoS高防的四层传输层身份统计算法更新，目前本接口返回数据不能反应真实流量的大小，仅可用于计算不同运营商请求数量的比例（即请求的来源运营商分布情况）。如果您想获取请求流量数据，推荐您调用[DescribePortFlowList](~~157460~~)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => '**运营商代码**'."\n"
                ."\n"
                .'| 代码 | 运营商 |'."\n"
                .'|---------|----------|'."\n"
                .'| 100017 | 电信 |'."\n"
                .'| 100026 | 联通 |'."\n"
                .'| 100025 | 移动 |'."\n"
                .'| 100027 | 教育网 |'."\n"
                .'| 100020 | 铁通 |'."\n"
                .'| 1000143 | 鹏博士 |'."\n"
                .'| 100080 | 歌华 |'."\n"
                .'| 1000139 | 广电 |'."\n"
                .'| 100023 | 有线通 |'."\n"
                .'| 100063 | 方正宽带 |'."\n"
                .'| 1000337 | 皓宽网络 |'."\n"
                .'| 100021 | 世纪互联 |'."\n"
                .'| 1000333 | 华数传媒 |'."\n"
                .'| 100093 | 网宿 |'."\n"
                .'| 1000401 | 腾讯 |'."\n"
                .'| 100099 | 百度 |'."\n"
                .'| 1000323 | 阿里云 |'."\n"
                .'| 100098 | 阿里巴巴 |'."\n"
                .'| 1000120 | 北龙中网 |'."\n"
                .'| 1000189 | 中国互联网信息中心 |'."\n"
                .'| 1000188 | 吉林油田通信 |'."\n"
                .'| 1000187 | 数讯信息技术 |'."\n"
                .'| 1000186 | 中原油田 |'."\n"
                .'| 1000185 | 众屹赢时通信 |'."\n"
                .'| 1000184 | 南凌科技 |'."\n"
                .'| 1000181 | 安徽省教育厅 |'."\n"
                .'| 100075 | 蓝讯通信技术 |'."\n"
                .'| 100076 | 天威宽带 |'."\n"
                .'| 1000104 | 金桥网 |'."\n"
                .'| 1000103 | 国研网 |'."\n"
                .'| 1000102 | 飞华领航 |'."\n"
                .'| 100072 | E家宽带 |'."\n"
                .'| 100078 | 油田宽带 |'."\n"
                .'| 100079 | 视讯宽带 |'."\n"
                .'| 1000114 | 首信网 |'."\n"
                .'| 1000103 | 中国科技网 |'."\n"
                .'| 1000199 | 维赛网络 |'."\n"
                .'| 1000194 | 城市网络 |'."\n"
                .'| 1000195 | 壹通通信 |'."\n"
                .'| 1000197 | 燕大正洋 |'."\n"
                .'| 1000190 | 中科鸿基网络 |'."\n"
                .'| 1000191 | 中国一汽 |'."\n"
                .'| 1000192 | 零色沸点网络 |'."\n"
                .'| 1000193 | 网宽天地 |'."\n"
                .'| 100063 | 方正网络 |'."\n"
                .'| 100061 | 长城宽带 |'."\n"
                .'| 1000117 | 中信网络 |'."\n"
                .'| 1000118 | 京宽网络 |'."\n"
                .'| 1000119 | 网易网络 |'."\n"
                .'| 1000122 | 网联光通 |'."\n"
                .'| 1000124 | 金科信息网 |'."\n"
                .'| 1000128 | 卫视创捷 |'."\n"
                .'| 1000321 | 媒迪雅 |'."\n"
                .'| 1000320 | 天地祥云 |'."\n"
                .'| 100092 | 263网络 |'."\n"
                .'| 1000325 | 湖南广电 |'."\n"
                .'| 100018 | 电信通 |'."\n"
                .'| 1000106 | 神州在线 |'."\n"
                .'| 100089 | 光环新网 |'."\n"
                .'| 1000136 | 联通新国信 |'."\n"
                .'| 100086 | 华宇宽带 |'."\n"
                .'| 100083 | 视通宽带 |'."\n"
                .'| 1000131 | 比通联合网络 |'."\n"
                .'| 1000305 | 铜牛集团 |'."\n"
                .'| 1000302 | 盈通网络 |'."\n"
                .'| 1000309 | 中国在线 |'."\n"
                .'| 1000308 | 临网通讯 |'."\n"
                .'| 1000149 | 太平洋电信 |'."\n"
                .'| 1000148 | 有孚网络 |'."\n"
                .'| 1000140 | 华数 |'."\n"
                .'| 1000147 | 沃通电子商务 |'."\n"
                .'| 1000146 | 华瑞信通 |'."\n"
                .'| 1000144 | 屹立由数据 |'."\n"
                .'| 100035 | 比林通信 |'."\n"
                .'| 100039 | 畅捷通信 |'."\n"
                .'| 1000312 | 中企通信 |'."\n"
                .'| 1000313 | 长城互联网 |'."\n"
                .'| 1000310 | 上海信息网络 |'."\n"
                .'| 1000316 | 三信时代 |'."\n"
                .'| 1000317 | 睿江科技 |'."\n"
                .'| 1000319 | 森华易腾 |'."\n"
                .'| 1000159 | 龙腾佳讯 |'."\n"
                .'| 1000150 | 新飞金信 |'."\n"
                .'| 1000153 | 腾讯网络 |'."\n"
                .'| 1000154 | 视虎科技 |'."\n"
                .'| 1000155 | 新视讯 |'."\n"
                .'| 1000156 | 地面通信息网络 |'."\n"
                .'| 1000157 | 日升天信科技 |'."\n"
                .'| 100029 | 恒敦通信 |'."\n"
                .'| 100028 | 中电飞华 |'."\n"
                .'| 100022 | 中电华通 |'."\n"
                .'| 1000135 | 经济信息网 |'."\n"
                .'| 1000165 | 上海大众汽车 |'."\n"
                .'| 1000167 | 翰威科技 |'."\n"
                .'| 1000161 | 天盈信息技术 |'."\n"
                .'| 1000160 | 佰隆网络 |'."\n"
                .'| 1000163 | 平煤神马集团 |'."\n"
                .'| 100051 | 博路电信 |'."\n"
                .'| 1000172 | 同煤集团 |'."\n"
                .'| 1000170 | 百吉数据 |'."\n"
                .'| 1000171 | 可口可乐网络 |'."\n"
                .'| 1000176 | 华夏光网 |'."\n"
                .'| 1000177 | 中国国际电子商务中心|'."\n"
                .'| 1000174 | 新浪网络 |'."\n"
                .'| 1000178 | 信天游 |'."\n"
                .'| 1000179 | 新网 |'."\n"
                .'| 100048 | 天地通电信 |'."\n"
                .'| 1000322 | 维速 |',
            'extraInfo' => ' ',
        ],
        'DescribePortViewSourceProvinces' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。'."\n"
                            ."\n"
                            .'关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。时间戳格式，单位：秒。不传入表示使用当前时间作为结束时间。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1583683200',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1582992000',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询的DDoS高防实例的ID。'."\n"
                                .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-mp91j1ao****',
                        ],
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 100,
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
                            'SourceProvinces' => [
                                'description' => 'DDoS高防实例的请求来源中国地域信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ProvinceId' => [
                                            'description' => '请求来源中国地域的ID。例如，**110000**表示北京市，**120000**表示天津市。'."\n"
                                                ."\n"
                                                .'> 关于该参数的取值，请参见[地域类型参数取值说明](~~167926~~)。',
                                            'type' => 'string',
                                            'example' => '440000',
                                        ],
                                        'Count' => [
                                            'description' => '相对请求数量。'."\n"
                                                ."\n"
                                                .'> 该数据不表示真实请求数量的大小，目前您可以使用该数据来计算不同省份请求数量的比例。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3390671',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\",\\n  \\"SourceProvinces\\": [\\n    {\\n      \\"ProvinceId\\": \\"440000\\",\\n      \\"Count\\": 3390671\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询实例的请求来源（中国）省份分布',
            'summary' => '查询指定时间段内DDoS高防实例的请求来源（中国）省份分布。',
        ],
        'DescribeDomainQPSList' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1582992000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1583683200',
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回数据的步长，单位为秒，即每隔多少秒返回一个结果。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1000',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。不传入表示查询所有域名的QPS统计信息。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyun.com',
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
                                'example' => '327F2ABB-104D-437A-AAB5-D633E29A8C51',
                            ],
                            'DomainQPSList' => [
                                'description' => '网站业务QPS统计信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Index' => [
                                            'description' => '返回数据的索引号。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'Time' => [
                                            'description' => '统计时间。时间戳格式，单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1582992000',
                                        ],
                                        'MaxAttackQps' => [
                                            'description' => '攻击QPS峰值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '37',
                                        ],
                                        'AttackQps' => [
                                            'description' => '攻击QPS。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'MaxQps' => [
                                            'description' => '总QPS峰值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '130',
                                        ],
                                        'MaxNormalQps' => [
                                            'description' => '正常QPS峰值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '93',
                                        ],
                                        'TotalQps' => [
                                            'description' => '总QPS。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'TotalCount' => [
                                            'description' => '总访问次数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '20008',
                                        ],
                                        'CacheHits' => [
                                            'description' => '缓存命中数。',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"327F2ABB-104D-437A-AAB5-D633E29A8C51\\",\\n  \\"DomainQPSList\\": [\\n    {\\n      \\"Index\\": 0,\\n      \\"Time\\": 1582992000,\\n      \\"MaxAttackQps\\": 37,\\n      \\"AttackQps\\": 1,\\n      \\"MaxQps\\": 130,\\n      \\"MaxNormalQps\\": 93,\\n      \\"TotalQps\\": 1,\\n      \\"TotalCount\\": 20008,\\n      \\"CacheHits\\": 0\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeDomainQPSListResponse>\\r\\n\\t<DomainQPSList>\\r\\n\\t\\t<MaxAttackQps>37</MaxAttackQps>\\r\\n\\t\\t<TotalQps>1</TotalQps>\\r\\n\\t\\t<TotalCount>20008</TotalCount>\\r\\n\\t\\t<MaxQps>130</MaxQps>\\r\\n\\t\\t<MaxNormalQps>93</MaxNormalQps>\\r\\n\\t\\t<AttackQps>1</AttackQps>\\r\\n\\t\\t<Index>0</Index>\\r\\n\\t\\t<Time>1582992000</Time>\\r\\n\\t\\t<CacheHits>0</CacheHits>\\r\\n\\t</DomainQPSList>\\r\\n\\t<RequestId>327F2ABB-104D-437A-AAB5-D633E29A8C51</RequestId>\\r\\n</DescribeDomainQPSListResponse>","errorExample":""}]',
            'title' => '查询网站业务的QPS统计信息',
            'summary' => '查询网站业务的QPS统计信息。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDomainStatusCodeList' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。'."\n"
                            ."\n"
                            .'关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。使用时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1582992000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。使用时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1583683200',
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回数据的步长，单位为秒，即每隔多少秒返回一个查询结果。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1000',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeDomains](~~91724~~)查询所有已接入DDoS高防防护的网站业务的域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.example.com',
                    ],
                ],
                [
                    'name' => 'QueryType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询数据的来源。取值：'."\n"
                            .'- **gf**：表示高防响应数据。'."\n"
                            .'- **upstream**：表示源站响应数据。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'upstream',
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
                                'example' => '3B63C0DD-8AC5-44B2-95D6-064CA9296B9C',
                            ],
                            'StatusCodeList' => [
                                'description' => '响应状态码的统计信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Index' => [
                                            'description' => '返回数据的索引号。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'Status502' => [
                                            'description' => '502状态码的统计值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'Time' => [
                                            'description' => '统计时间。时间戳格式，单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1582992000',
                                        ],
                                        'Status405' => [
                                            'description' => '405状态码的统计值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'Status3XX' => [
                                            'description' => '3XX类状态码的统计值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'Status503' => [
                                            'description' => '503状态码的统计值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'Status4XX' => [
                                            'description' => '4XX类状态码的统计值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '4486',
                                        ],
                                        'Status2XX' => [
                                            'description' => '2XX类状态码的统计值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '15520',
                                        ],
                                        'Status5XX' => [
                                            'description' => '5XX类状态码的统计值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'Status504' => [
                                            'description' => '504状态码的统计值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'Status200' => [
                                            'description' => '200状态码的统计值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '15520',
                                        ],
                                        'Status403' => [
                                            'description' => '403状态码的统计值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'Status404' => [
                                            'description' => '404状态码的统计值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'Status501' => [
                                            'description' => '501状态码的统计值。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3B63C0DD-8AC5-44B2-95D6-064CA9296B9C\\",\\n  \\"StatusCodeList\\": [\\n    {\\n      \\"Index\\": 0,\\n      \\"Status502\\": 0,\\n      \\"Time\\": 1582992000,\\n      \\"Status405\\": 0,\\n      \\"Status3XX\\": 0,\\n      \\"Status503\\": 0,\\n      \\"Status4XX\\": 4486,\\n      \\"Status2XX\\": 15520,\\n      \\"Status5XX\\": 0,\\n      \\"Status504\\": 0,\\n      \\"Status200\\": 15520,\\n      \\"Status403\\": 0,\\n      \\"Status404\\": 0,\\n      \\"Status501\\": 0\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询网站业务的响应状态码统计信息',
            'summary' => '查询网站业务的响应状态码统计信息。',
        ],
        'DescribeDomainOverview' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。'."\n"
                            ."\n"
                            .'关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。使用时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1619798400',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。使用时间戳格式，单位：秒。不设置该参数表示使用当前时间作为查询结束时间。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1623427200',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的网站业务的域名。不设置该参数表示查询所有域名的数据。'."\n"
                            ."\n"
                            .'> 域名必须已接入DDoS高防进行防护。您可以调用[DescribeDomains](~~91724~~)查询所有已接入DDoS高防的域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.aliyundoc.com',
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
                                'example' => 'C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E',
                            ],
                            'MaxHttp' => [
                                'description' => 'HTTP清洗峰值，单位：qps。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '41652',
                            ],
                            'MaxHttps' => [
                                'description' => 'HTTPS清洗峰值，单位：qps。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\",\\n  \\"MaxHttp\\": 41652,\\n  \\"MaxHttps\\": 0\\n}","errorExample":""},{"type":"xml","example":"<DescribeDomainOverviewResponse>\\n    <RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\n    <MaxHttp>41652</MaxHttp>\\n    <MaxHttps>0</MaxHttps>\\n</DescribeDomainOverviewResponse>","errorExample":""}]',
            'title' => '查询网站业务攻击总览',
            'summary' => '查询网站业务攻击总览，包括HTTP攻击峰值、HTTPS攻击峰值。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDomainStatusCodeCount' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1582992000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1583683200',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyun.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status502' => [
                                'description' => '查询时间段内502状态码的数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                            ],
                            'Status405' => [
                                'description' => '查询时间段内405状态码的数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                            ],
                            'Status3XX' => [
                                'description' => '查询时间段内3XX状态码的数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '133209',
                            ],
                            'Status503' => [
                                'description' => '查询时间段内503状态码的数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                            ],
                            'Status4XX' => [
                                'description' => '查询时间段内4XX状态码的数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '5653',
                            ],
                            'Status2XX' => [
                                'description' => '查询时间段内2XX类状态码的数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '951472',
                            ],
                            'Status5XX' => [
                                'description' => '查询时间段内5XX状态码的数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '14',
                            ],
                            'Status504' => [
                                'description' => '查询时间段内504状态码的数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E',
                            ],
                            'Status200' => [
                                'description' => '查询时间段内200状态码的数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '951159',
                            ],
                            'Status403' => [
                                'description' => '查询时间段内403状态码的数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                            ],
                            'Status404' => [
                                'description' => '查询时间段内404状态码的数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '897',
                            ],
                            'Status501' => [
                                'description' => '查询时间段内501状态码的数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status502\\": 0,\\n  \\"Status405\\": 0,\\n  \\"Status3XX\\": 133209,\\n  \\"Status503\\": 0,\\n  \\"Status4XX\\": 5653,\\n  \\"Status2XX\\": 951472,\\n  \\"Status5XX\\": 14,\\n  \\"Status504\\": 0,\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\",\\n  \\"Status200\\": 951159,\\n  \\"Status403\\": 0,\\n  \\"Status404\\": 897,\\n  \\"Status501\\": 0\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeDomainStatusCodeCountResponse>\\r\\n\\t<RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\r\\n\\t<Status2XX>951472</Status2XX>\\r\\n\\t<Status200>951159</Status200>\\r\\n\\t<Status3XX>133209</Status3XX>\\r\\n\\t<Status4XX>5653</Status4XX>\\r\\n\\t<Status403>0</Status403>\\r\\n\\t<Status404>897</Status404>\\r\\n\\t<Status405>0</Status405>\\r\\n\\t<Status5XX>14</Status5XX>\\r\\n\\t<Status501>0</Status501>\\r\\n\\t<Status502>0</Status502>\\r\\n\\t<Status503>0</Status503>\\r\\n\\t<Status504>0</Status504>\\r\\n</DescribeDomainStatusCodeCountResponse>","errorExample":""}]',
            'title' => '查询各类响应状态码统计信息',
            'summary' => '查询指定时间段内网站业务的各类响应状态码的统计信息。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDomainTopAttackList' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1582992000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1583683200',
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
                            'AttackList' => [
                                'description' => '网站业务的QPS峰值数据。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Attack' => [
                                            'description' => '攻击QPS。单位：qps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'Domain' => [
                                            'description' => '网站域名。',
                                            'type' => 'string',
                                            'example' => 'www.aliyun.com',
                                        ],
                                        'Count' => [
                                            'description' => '全部QPS，包含正常业务请求和攻击。单位：qps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '294',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\",\\n  \\"AttackList\\": [\\n    {\\n      \\"Attack\\": 0,\\n      \\"Domain\\": \\"www.aliyun.com\\",\\n      \\"Count\\": 294\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeDomainTopAttackListResponse>\\r\\n\\t<RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\r\\n\\t<AttackList>\\r\\n\\t\\t<Count>294</Count>\\r\\n\\t\\t<Attack>0</Attack>\\r\\n\\t\\t<Domain>www.aliyun.com</Domain>\\r\\n\\t</AttackList>\\r\\n</DescribeDomainTopAttackListResponse>","errorExample":""}]',
            'title' => '查询网站业务QPS峰值数据',
            'summary' => '查询指定时间段内网站业务的QPS峰值数据，包括攻击QPS、总QPS。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDomainViewSourceCountries' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1582992000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1583683200',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyun.com',
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
                            'SourceCountrys' => [
                                'description' => '网站业务的请求来源国家信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Count' => [
                                            'description' => '请求数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3390671',
                                        ],
                                        'CountryId' => [
                                            'description' => '国家简称。详见[中国和海外地区代码](~~167926~~)中的**海外地区代码**说明。例如，**cn**表示中国，**us**表示美国。',
                                            'type' => 'string',
                                            'example' => 'cn',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\",\\n  \\"SourceCountrys\\": [\\n    {\\n      \\"Count\\": 3390671,\\n      \\"CountryId\\": \\"cn\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeDomainViewSourceCountriesResponse>\\r\\n\\t<RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\r\\n\\t<SourceCountrys>\\r\\n\\t\\t<Count>3390671</Count>\\r\\n\\t\\t<CountryId>cn</CountryId>\\r\\n\\t</SourceCountrys>\\r\\n</DescribeDomainViewSourceCountriesResponse>","errorExample":""}]',
            'title' => '查询网站业务的请求来源国家分布',
            'summary' => '查询指定时间段内网站业务的请求来源国家分布。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDomainViewSourceProvinces' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1582992000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1583683200',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyun.com',
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
                            'SourceProvinces' => [
                                'description' => '网站业务的请求来源（中国）省份信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ProvinceId' => [
                                            'description' => '省份ID。详见[中国和海外地区代码](~~167926~~)中的**中国地区代码**说明。例如，**110000**表示北京市，**120000**表示天津市。'."\n",
                                            'type' => 'string',
                                            'example' => '440000',
                                        ],
                                        'Count' => [
                                            'description' => '请求数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3390671',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\",\\n  \\"SourceProvinces\\": [\\n    {\\n      \\"ProvinceId\\": \\"440000\\",\\n      \\"Count\\": 3390671\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeDomainViewSourceProvincesResponse>\\r\\n\\t<RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\r\\n\\t<SourceProvinces>\\r\\n\\t\\t<Count>3390671</Count>\\r\\n\\t\\t<ProvinceId>440000</ProvinceId>\\r\\n\\t</SourceProvinces>\\r\\n</DescribeDomainViewSourceProvincesResponse>","errorExample":""}]',
            'title' => '查询网站业务的请求来源省份分布',
            'summary' => '查询指定时间段内网站业务的请求来源（中国）省份分布。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDomainViewTopCostTime' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1582992000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1583683200',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'Top',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回URL的数量。取值范围：**1**~**100**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '5',
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
                            'UrlList' => [
                                'description' => '请求耗时TOP URL列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CostTime' => [
                                            'description' => '请求延时时长。单位：毫秒。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '3000',
                                        ],
                                        'Url' => [
                                            'description' => 'URL。使用BASE64加密表示。',
                                            'type' => 'string',
                                            'example' => 'Lw==',
                                        ],
                                        'Domain' => [
                                            'description' => '网站域名。',
                                            'type' => 'string',
                                            'example' => 'www.aliyun.com',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\",\\n  \\"UrlList\\": [\\n    {\\n      \\"CostTime\\": 3000,\\n      \\"Url\\": \\"Lw==\\",\\n      \\"Domain\\": \\"www.aliyun.com\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeDomainViewTopCostTimeResponse>\\r\\n\\t<RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\r\\n\\t<UrlList>\\r\\n\\t\\t<CostTime>3000</CostTime>\\r\\n\\t\\t<Domain>www.aliyun.com</Domain>\\r\\n\\t\\t<Url>Lw==</Url>\\r\\n\\t</UrlList>\\r\\n</DescribeDomainViewTopCostTimeResponse>","errorExample":""}]',
            'title' => '查询网站业务的请求耗时最大的前N个URL',
            'summary' => '查询指定时间段内网站业务的请求耗时最大的前N个URL。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDomainViewTopUrl' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1582992000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1583683200',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'Top',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回URL的数量。取值范围：**1**~**100**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '5',
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
                            'UrlList' => [
                                'description' => '网站业务的访问量TOP URL列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Url' => [
                                            'description' => 'URL。使用BASE64加密表示。',
                                            'type' => 'string',
                                            'example' => 'Lw==',
                                        ],
                                        'Domain' => [
                                            'description' => '网站域名。',
                                            'type' => 'string',
                                            'example' => 'www.aliyun.com',
                                        ],
                                        'Count' => [
                                            'description' => '请求数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3390671',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\",\\n  \\"UrlList\\": [\\n    {\\n      \\"Url\\": \\"Lw==\\",\\n      \\"Domain\\": \\"www.aliyun.com\\",\\n      \\"Count\\": 3390671\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeDomainViewTopUrlResponse>\\r\\n\\t<RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\r\\n\\t<UrlList>\\r\\n\\t\\t<Count>3390671</Count>\\r\\n\\t\\t<Domain>www.aliyun.com</Domain>\\r\\n\\t\\t<Url>Lw==</Url>\\r\\n\\t</UrlList>\\r\\n</DescribeDomainViewTopUrlResponse>","errorExample":""}]',
            'title' => '查询网站业务访问量最大的前N个URL',
            'summary' => '查询指定时间段内网站业务访问量最大的前N个URL。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'EnableWebAccessLogConfig' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
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
                                'example' => 'CF33B4C3-196E-4015-AADD-5CAD00057B80',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CF33B4C3-196E-4015-AADD-5CAD00057B80\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<EnableWebAccessLogConfigResponse>\\r\\n\\t<RequestId>CF33B4C3-196E-4015-AADD-5CAD00057B80</RequestId>\\r\\n</EnableWebAccessLogConfigResponse>","errorExample":""}]',
            'title' => '为网站业务开启全量日志分析',
            'summary' => '为网站业务开启全量日志分析。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyFullLogTtl' => [
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
                    'name' => 'Ttl',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防网站业务日志的存储时长。取值范围：**30**~**180**，单位：天。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
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
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyFullLogTtlResponse>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n</ModifyFullLogTtlResponse>","errorExample":""}]',
            'title' => '修改日志存储时长',
            'summary' => '编辑DDoS高防全量日志的存储时长。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DisableWebAccessLogConfig' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
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
                                'example' => 'CF33B4C3-196E-4015-AADD-5CAD00057B80',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CF33B4C3-196E-4015-AADD-5CAD00057B80\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DisableWebAccessLogConfigResponse>\\r\\n\\t<RequestId>CF33B4C3-196E-4015-AADD-5CAD00057B80</requestId>\\r\\n</DisableWebAccessLogConfigResponse>","errorExample":""}]',
            'title' => '为网站业务关闭全量日志分析',
            'summary' => '为网站业务关闭全量日志分析。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeWebAccessLogDispatchStatus' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页面。默认值为**1**。',
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
                        'description' => '分页查询时，设置每页包含域名的数量。默认值为**10**。',
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
                                'description' => '查询到的域名的总数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'CF33B4C3-196E-4015-AADD-5CAD00057B80',
                            ],
                            'SlsConfigStatus' => [
                                'description' => '域名的全量日志开关状态。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Domain' => [
                                            'description' => '域名。',
                                            'type' => 'string',
                                            'example' => 'www.aliyundoc.com',
                                        ],
                                        'Enable' => [
                                            'description' => '是否开启全量日志采集。取值：'."\n"
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"CF33B4C3-196E-4015-AADD-5CAD00057B80\\",\\n  \\"SlsConfigStatus\\": [\\n    {\\n      \\"Domain\\": \\"www.aliyundoc.com\\",\\n      \\"Enable\\": true\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeWebAccessLogDispatchStatusResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>CF33B4C3-196E-4015-AADD-5CAD00057B80</RequestId>\\n    <SlsConfigStatus>\\n        <Domain>www.aliyundoc.com</Domain>\\n        <Enable>true</Enable>\\n    </SlsConfigStatus>\\n</DescribeWebAccessLogDispatchStatusResponse>","errorExample":""}]',
            'title' => '查询所有域名的全量日志开关状态',
            'summary' => '查询所有域名的全量日志开关状态。',
            'description' => '本接口用于查询所有已接入DDoS高防防护的域名的全量日志开关状态。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeWebAccessLogStatus' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网站业务的域名。'."\n"
                            .'> 域名必须已配置网站业务转发规则。您可以调用[DescribeDomains](~~91724~~)查询所有域名。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SlsLogstore' => [
                                'description' => 'DDoS高防服务对接的日志库。',
                                'type' => 'string',
                                'example' => 'ddoscoo-logstore',
                            ],
                            'SlsStatus' => [
                                'description' => '网站业务是否开启全量日志。取值：'."\n"
                                    .'- **true**：已开启'."\n"
                                    .'- **false**：未开启',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'SlsProject' => [
                                'description' => 'DDoS高防服务对接的日志服务项目。',
                                'type' => 'string',
                                'example' => 'ddoscoo-project-128965410602****-cn-hangzhou',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'CF33B4C3-196E-4015-AADD-5CAD00057B80',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SlsLogstore\\": \\"ddoscoo-logstore\\",\\n  \\"SlsStatus\\": true,\\n  \\"SlsProject\\": \\"ddoscoo-project-128965410602****-cn-hangzhou\\",\\n  \\"RequestId\\": \\"CF33B4C3-196E-4015-AADD-5CAD00057B80\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeWebAccessLogStatusResponse>\\r\\n\\t<RequestId>CF33B4C3-196E-4015-AADD-5CAD00057B80</RequestId>\\r\\n\\t<SlsStatus>true</SlsStatus>\\r\\n\\t<SlsProject>ddoscoo-project-128965410602****-cn-hangzhou</SlsProject>\\r\\n\\t<SlsLogstore>ddoscoo-logstore</SlsLogstore>\\r\\n</DescribeWebAccessLogStatusResponse>","errorExample":""}]',
            'title' => '查询单个网站业务的全量日志服务信息',
            'summary' => '例如开关状态、对接的日志项目、日志库。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeLogStoreExistStatus' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ExistStatus' => [
                                'description' => '是否已创建DDoS高防的日志库。取值：'."\n"
                                    .'- **true**：已创建'."\n"
                                    .'- **false**：未创建',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'CF33B4C3-196E-4015-AADD-5CAD00057B80',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ExistStatus\\": true,\\n  \\"RequestId\\": \\"CF33B4C3-196E-4015-AADD-5CAD00057B80\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeLogStoreExistStatus?\\r\\n\\t<RequestId>CF33B4C3-196E-4015-AADD-5CAD00057B80</RequestId>\\r\\n\\t<ExistStatus>true</ExistStatus>\\r\\n</DescribeLogStoreExistStatus?","errorExample":""}]',
            'title' => '查询是否已创建DDoS高防的日志库',
            'summary' => '查询是否已创建DDoS高防的日志库。',
            'requestParamsDescription' => ' ',
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
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '使用操作对象筛选结果，传入要查询的操作对象的类型。取值：'."\n"
                            ."\n"
                            .'- **1**：DDoS高防IP'."\n"
                            .'- **2**：DDoS高防抗D包'."\n"
                            .'- **3**：ECS实例'."\n"
                            .'- **4**：全量日志',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'EntityObject',
                    'in' => 'query',
                    'schema' => [
                        'description' => '使用操作对象筛选结果，传入要查询的操作对象。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '203.***.***.132',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。时间戳格式，单位：毫秒。'."\n"
                            ."\n"
                            .'> 查询时间的跨度不允许超过近30天。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1582992000000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。时间戳格式，单位：毫秒。'."\n"
                            ."\n"
                            .'> 查询时间的跨度不允许超过近30天。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1583683200000',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询请求时返回的页码。例如，查询第一页的返回结果，则填写**1**。'."\n",
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
                        'description' => '页面显示的记录数量。最大值：**50**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
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
                                'description' => '操作记录的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'FB24D70C-71F5-4000-8CD8-22CDA0C53CD1',
                            ],
                            'OpEntities' => [
                                'description' => '操作日志记录。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EntityType' => [
                                            'description' => '操作对象的类型。取值：'."\n"
                                                ."\n"
                                                .'- **1**：DDoS高防IP'."\n"
                                                .'- **2**：DDoS高防抗D包'."\n"
                                                .'- **3**：ECS实例'."\n"
                                                .'- **4**：全量日志',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'EntityObject' => [
                                            'description' => '操作对象。',
                                            'type' => 'string',
                                            'example' => '203.***.***.132',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '操作时间。时间戳格式，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1584451769000',
                                        ],
                                        'OpAction' => [
                                            'description' => '操作类型。取值：'."\n"
                                                .'- **1**：设置弹性防护带宽。'."\n"
                                                .'- **5**：抵扣抗D包。'."\n"
                                                .'- **8**：更换ECS IP。'."\n"
                                                .'- **9**：执行黑洞解封。'."\n"
                                                .'- **10**：设置近源流量压制。'."\n"
                                                .'- **11**：清空全量日志。'."\n"
                                                .'- **12**：降级实例规格，表示实例到期或账号存在欠费时，降低弹性防护带宽。'."\n"
                                                .'- **13**：恢复实例规格，表示实例续费或账号欠费结清时，恢复弹性防护带宽。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '9',
                                        ],
                                        'OpAccount' => [
                                            'description' => '执行操作的阿里云账号ID。',
                                            'type' => 'string',
                                            'example' => '128965410602****',
                                        ],
                                        'OpDesc' => [
                                            'description' => '操作的描述信息，使用JSON格式的字符串表述，具体结构如下：'."\n"
                                                ."\n"
                                                .'- **newEntity**：String类型，操作后的参数。'."\n"
                                                .'- **oldEntity**：String类型，操作前的参数。'."\n"
                                                ."\n"
                                                .'**newEntity**和**oldEntity**均使用JSON格式的字符串表述。不同操作类型（**OpAtion**）对应的操作参数不同。'."\n"
                                                ."\n"
                                                .'**OpAction**为**1**、**12**、**13**时，操作参数的结构描述如下：'."\n"
                                                .'- **elasticBandwidth**：Integer类型，弹性防护带宽值，单位：Gbps。'."\n"
                                                ."\n"
                                                .'    示例：`{"newEntity":{"elasticBandwidth":300},"oldEntity":{"elasticBandwidth":300}}`'."\n"
                                                ."\n\n"
                                                .'**OpAction**为**5**时，操作参数的结构描述如下：'."\n"
                                                .'- **bandwidth**：Integer类型，弹性防护带宽，单位：Gbps。'."\n"
                                                .'- **count**：Integer类型，抗D包数量。'."\n"
                                                .'- **deductCount**：Integer类型，抵扣的抗D包数量。'."\n"
                                                .'- **expireTime**：Long类型，抗D包的到期时间。时间戳格式，单位：毫秒。'."\n"
                                                .'- **instanceId**：String类型，DDoS高防实例ID。'."\n"
                                                .'- **peakFlow**：Integer类型，峰值流量，单位：bps。'."\n"
                                                ."\n"
                                                .'    示例：`{"newEntity":{"bandwidth":100,"count":4,"deductCount":1,"expireTime":1616299196000,"instanceId":"ddoscoo-cn-v641kpmq****","peakFlow":751427000}}`'."\n"
                                                ."\n\n"
                                                .'**OpAction**为**8**时，操作参数的结构描述如下：'."\n"
                                                .'- **instanceId**：String类型，更换IP的ECS实例ID。'."\n"
                                                ."\n"
                                                .'    示例：`{"newEntity":{"instanceId":"i-wz9h6nc313zptbqn****"}}`	'."\n"
                                                .'	'."\n"
                                                ."\n"
                                                .'**OpAction**为**9**时，操作参数的结构描述如下：'."\n"
                                                .'- **actionMethod**：String类型，操作方法。取值：**undo**，表示解除黑洞。'."\n"
                                                ."\n"
                                                .'    示例：`{"newEntity":{"actionMethod":"undo"}}`	'."\n"
                                                .'	'."\n"
                                                ."\n"
                                                .'**OpAction**为**10**时，操作参数的结构描述如下：'."\n"
                                                .'- **actionMethod**：String类型，操作方法。取值：'."\n"
                                                .'    - **do**：开启近源流量压制'."\n"
                                                .'    - **undo**：取消近源流量压制'."\n"
                                                .'- **lines**：Array类型，操作的线路类型。取值：'."\n"
                                                .'    - **ct**：电信海外线路'."\n"
                                                .'    - **cut**：联通海外线路'."\n"
                                                ."\n"
                                                .'    示例：`{"newEntity":{"actionMethod":"undo","lines":["ct"]}}`'."\n"
                                                ."\n\n"
                                                .'**OpAction**为**11**时，无操作参数，操作描述为空。',
                                            'type' => 'string',
                                            'example' => '{"newEntity":{"actionMethod":"undo"}}',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"FB24D70C-71F5-4000-8CD8-22CDA0C53CD1\\",\\n  \\"OpEntities\\": [\\n    {\\n      \\"EntityType\\": 1,\\n      \\"EntityObject\\": \\"203.***.***.132\\",\\n      \\"GmtCreate\\": 1584451769000,\\n      \\"OpAction\\": 9,\\n      \\"OpAccount\\": \\"128965410602****\\",\\n      \\"OpDesc\\": \\"{\\\\\\"newEntity\\\\\\":{\\\\\\"actionMethod\\\\\\":\\\\\\"undo\\\\\\"}}\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeOpEntitiesResponse>\\r\\n\\t<TotalCount>1</TotalCount>\\r\\n\\t<RequestId>FB24D70C-71F5-4000-8CD8-22CDA0C53CD1</RequestId>\\r\\n\\t<OpEntities>\\r\\n\\t\\t<EntityType>1</EntityType>\\r\\n\\t\\t<GmtCreate>1584451769000</GmtCreate>\\r\\n\\t\\t<OpAccount>128965410602****</OpAccount>\\r\\n\\t\\t<OpDesc>\\r\\n\\t\\t\\t<newEntity>\\r\\n\\t\\t\\t\\t<actionMethod>undo</actionMethod>\\r\\n\\t\\t\\t</newEntity>\\r\\n\\t\\t</OpDesc>\\r\\n\\t\\t<OpAction>9</OpAction>\\r\\n\\t\\t<EntityObject>203.***.***.132</EntityObject>\\r\\n\\t</OpEntities>\\r\\n</DescribeOpEntitiesResponse>","errorExample":""}]',
            'title' => '查询DDoS高防（中国内地）的操作日志',
            'summary' => '查询DDoS高防（中国内地）的操作日志。',
            'description' => '> 该接口仅适用于DDoS高防（新BGP）服务。'."\n"
                ."\n"
                .'操作日志的类型包括：设置实例弹性防护规格、执行黑洞解封、设置近源流量压制、抵扣抗D包、更换ECS IP、清空全量日志等。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeSlsAuthStatus' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SlsAuthStatus' => [
                                'description' => 'DDoS高防全量日志分析服务的授权状态。取值：'."\n"
                                    .'- **true**：已授权'."\n"
                                    .'- **false**：未授权',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'CF33B4C3-196E-4015-AADD-5CAD00057B80',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SlsAuthStatus\\": true,\\n  \\"RequestId\\": \\"CF33B4C3-196E-4015-AADD-5CAD00057B80\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeSlsAuthStatusResponse>\\r\\n\\t<RequestId>CF33B4C3-196E-4015-AADD-5CAD00057B80</RequestId>\\r\\n\\t<SlsAuthStatus>true</SlsAuthStatus>\\r\\n</DescribeSlsAuthStatusResponse>","errorExample":""}]',
            'title' => '查询DDoS高防全量日志分析服务的授权状态',
            'summary' => '即是否授权DDoS高防访问日志服务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeSlsLogstoreInfo' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Ttl' => [
                                'description' => '日志存储时长。单位：天。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '180',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'CF33B4C3-196E-4015-AADD-5CAD00057B80',
                            ],
                            'Quota' => [
                                'description' => '可用的日志存储容量。单位：Byte。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '3298534883328',
                            ],
                            'LogStore' => [
                                'description' => 'DDoS高防服务对接的日志库。',
                                'type' => 'string',
                                'example' => 'ddoscoo-logstore',
                            ],
                            'Used' => [
                                'description' => '已经使用的存储容量。单位：Byte。'."\n"
                                    ."\n"
                                    .'> 日志服务的统计结果约有两个小时的延迟。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                            ],
                            'Project' => [
                                'description' => 'DDoS高防服务对接的日志项目。',
                                'type' => 'string',
                                'example' => 'ddoscoo-project-181071506993****-cn-hangzhou',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Ttl\\": 180,\\n  \\"RequestId\\": \\"CF33B4C3-196E-4015-AADD-5CAD00057B80\\",\\n  \\"Quota\\": 3298534883328,\\n  \\"LogStore\\": \\"ddoscoo-logstore\\",\\n  \\"Used\\": 0,\\n  \\"Project\\": \\"ddoscoo-project-181071506993****-cn-hangzhou\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeSlsLogstoreInfoResponse>\\r\\n\\t<RequestId>CF33B4C3-196E-4015-AADD-5CAD00057B80</requestId>\\r\\n\\t<LogStore>ddoscoo-logstore</LogStore>\\r\\n\\t<Project>ddoscoo-project-181071506993****-cn-hangzhou</Project>\\r\\n\\t<Quota>3298534883328</Quota>\\r\\n\\t<Ttl>180</Ttl>\\r\\n\\t<Used>0</Used>\\r\\n</DescribeSlsLogstoreInfoResponse>","errorExample":""}]',
            'title' => '查询DDoS高防的日志库信息',
            'summary' => '例如日志存储容量、日志存储时长。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeSlsOpenStatus' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SlsOpenStatus' => [
                                'description' => '是否已开通日志服务。取值：'."\n"
                                    .'- **true**：已开通'."\n"
                                    .'- **false**：未开通',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'CF33B4C3-196E-4015-AADD-5CAD00057B80',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SlsOpenStatus\\": true,\\n  \\"RequestId\\": \\"CF33B4C3-196E-4015-AADD-5CAD00057B80\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeSlsOpenStatusResponse>\\r\\n\\t<RequestId>CF33B4C3-196E-4015-AADD-5CAD00057B80</RequestId>\\r\\n\\t<SlsOpenStatus>true</SlsOpenStatus>\\r\\n</DescribeSlsOpenStatusResponse>","errorExample":""}]',
            'title' => '查询阿里云日志服务SLS的开通状态',
            'summary' => '查询阿里云日志服务SLS的开通状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeWebAccessLogEmptyCount' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AvailableCount' => [
                                'description' => '可用的清空日志库的次数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'CF33B4C3-196E-4015-AADD-5CAD00057B80',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"AvailableCount\\": 10,\\n  \\"RequestId\\": \\"CF33B4C3-196E-4015-AADD-5CAD00057B80\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeWebAccessLogEmptyCountResponse>\\r\\n\\t<RequestId>CF33B4C3-196E-4015-AADD-5CAD00057B80</RequestId>\\r\\n\\t<AvailableCount>10</AvailableCount>\\r\\n</DescribeWebAccessLogEmptyCountResponse>","errorExample":""}]',
            'title' => '查询可用的清空日志库的次数',
            'summary' => '查询可用的清空日志库的次数。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDefenseRecords' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。时间戳格式，单位：毫秒。'."\n"
                            ."\n"
                            .'> 查询时间的跨度不允许超过近90天。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1582992000000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。时间戳格式，单位：毫秒。'."\n"
                            ."\n"
                            .'> 查询时间的跨度不允许超过90天。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1583683200000',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询请求时返回的页码。例如，查询第一页的返回结果，则填写**1**。'."\n",
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
                        'description' => '页面显示的记录数量。最大值：**50**',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
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
                                'description' => '高级防护总次数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc',
                            ],
                            'DefenseRecords' => [
                                'description' => '高级防护日志记录。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EndTime' => [
                                            'description' => '防护结束时间。时间戳格式，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1583683200000',
                                        ],
                                        'Status' => [
                                            'description' => '高级防护的状态。取值：'."\n"
                                                .'- **0**：使用中'."\n"
                                                .'- **1**：已使用'."\n",
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'StartTime' => [
                                            'description' => '防护开始时间。时间戳格式，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1582992000000',
                                        ],
                                        'EventCount' => [
                                            'description' => '被攻击次数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'InstanceId' => [
                                            'description' => 'DDoS高防实例ID。',
                                            'type' => 'string',
                                            'example' => 'ddoscoo-cn-mp91j1ao****',
                                        ],
                                        'AttackPeak' => [
                                            'description' => '攻击峰值。单位：bps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '6584186000',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc\\",\\n  \\"DefenseRecords\\": [\\n    {\\n      \\"EndTime\\": 1583683200000,\\n      \\"Status\\": 0,\\n      \\"StartTime\\": 1582992000000,\\n      \\"EventCount\\": 2,\\n      \\"InstanceId\\": \\"ddoscoo-cn-mp91j1ao****\\",\\n      \\"AttackPeak\\": 6584186000\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeDefenseRecordsResponse>\\r\\n\\t<TotalCount>1</TotalCount>\\r\\n\\t<RequestId>0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc</RequestId>\\r\\n\\t<DefenseRecords>\\r\\n\\t\\t<StartTime>1582992000000</StartTime>\\r\\n\\t\\t<EndTime>1583683200000</EndTime>\\r\\n\\t\\t<InstanceId>ddoscoo-cn-mp91j1ao****</InstanceId>\\r\\n\\t\\t<Status>0</Status>\\r\\n\\t\\t<AttackPeak>10</AttackPeak>\\r\\n\\t\\t<EventCount>1</EventCount>\\r\\n\\t</DefenseRecords>\\r\\n</DescribeDefenseRecordsResponse>","errorExample":""}]',
            'title' => '查询高级防护日志',
            'summary' => '查询DDoS高防（国际）的高级防护日志。',
            'description' => '> 该接口仅适用于DDoS高防（国际）服务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'EmptySlsLogstore' => [
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
                'abilityTreeCode' => '106219',
                'abilityTreeNodes' => [
                    'FEATUREddosVFFSV8',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
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
                                'example' => 'CF33B4C3-196E-4015-AADD-5CAD00057B80',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CF33B4C3-196E-4015-AADD-5CAD00057B80\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<EmptySlsLogstoreResponse>\\r\\n\\t<RequestId>CF33B4C3-196E-4015-AADD-5CAD00057B80</RequestId>\\r\\n</EmptySlsLogstoreResponse>","errorExample":""}]',
            'title' => '清空日志库',
            'summary' => '清空DDoS高防的日志库。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeStsGrantStatus' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'Role',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的RAM角色名称。取值固定为**AliyunDDoSCOODefaultRole**，表示DDoS高防服务的默认角色。'."\n"
                            ."\n"
                            .'> DDoS高防服务默认使用此角色来访问您在其他云产品中的资源。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AliyunDDoSCOODefaultRole',
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
                                'example' => '6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1',
                            ],
                            'StsGrant' => [
                                'description' => 'DDoS高防服务的授权状态。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '授权状态。取值：'."\n"
                                            ."\n"
                                            .'- **0**：表示未授权DDoS高防服务访问其他云产品资源。'."\n"
                                            .'- **1**：表示已授权DDoS高防服务访问其他云产品资源。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1\\",\\n  \\"StsGrant\\": {\\n    \\"Status\\": 1\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeStsGrantStatusResponse>\\n    <RequestId>6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1</RequestId>\\n    <StsGrant>\\n        <Status>1</Status>\\n    </StsGrant>\\n</DescribeStsGrantStatusResponse>","errorExample":""}]',
            'title' => '查询是否授权访问其他云产品',
            'summary' => '查询是否授权DDoS高防服务访问其他云产品。',
            'description' => '本接口用于查询当前阿里云账号是否已授权DDoS高防服务访问其他云产品。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeAsyncTasks' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'PageNumber',
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
                        'description' => '分页查询时，设置每页包含异步导出任务的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
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
                                'description' => '查询到的异步导出任务的总数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1',
                            ],
                            'AsyncTasks' => [
                                'description' => '异步导出任务的详细信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EndTime' => [
                                            'description' => '任务结束时间。使用时间戳表示，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '157927362000',
                                        ],
                                        'TaskType' => [
                                            'description' => '任务类型。取值：'."\n"
                                                .'- **1**：四层导出任务，表示导出DDoS高防实例的端口转发规则。'."\n"
                                                .'- **2**：七层导出任务，表示导出网站业务转发规则。'."\n"
                                                .'- **3**：会话、健康检查导出任务，表示导出DDoS高防实例的会话、健康检查配置。'."\n"
                                                .'- **4**：DDoS防护策略导出任务，表示导出DDoS高防实例的DDoS防护策略配置。'."\n"
                                                .'- **5**：黑名单（针对目的IP）下载任务，表示导出针对DDoS高防实例的黑名单IP。'."\n"
                                                .'- **6**：白名单（针对目的IP）下载任务，表示导出针对DDoS高防实例的白名单IP。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                        ],
                                        'StartTime' => [
                                            'description' => '任务开始时间。使用时间戳表示，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '156927362000',
                                        ],
                                        'TaskParams' => [
                                            'description' => '任务参数。使用JSON格式的字符串表达。不同**TaskType**的任务参数不完全相同。'."\n"
                                                ."\n"
                                                .'**TaskType**为**1**、**3**、**4**、**5**、**6**时，任务参数的结构如下：'."\n"
                                                .'- **instanceId**：String类型，DDoS高防实例的ID。'."\n"
                                                ."\n"
                                                .'**TaskType**为**2**时，任务参数的结构如下：'."\n"
                                                .'- **domain**：String类型，网站业务的域名。',
                                            'type' => 'string',
                                            'example' => '{"instanceId": "ddoscoo-cn-mp91j1ao****"}',
                                        ],
                                        'TaskStatus' => [
                                            'description' => '任务状态。取值：'."\n"
                                                .'- **0**：表示任务初始化。'."\n"
                                                .'- **1**：表示任务进行中。'."\n"
                                                .'- **2**：表示任务成功。'."\n"
                                                .'- **3**：表示任务失败。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'TaskResult' => [
                                            'description' => '任务结果。使用JSON格式的字符串表达。不同**TaskType**的任务结果不完全相同。'."\n"
                                                ."\n"
                                                .'**TaskType**为**1**、**3**、**4**、**5**、**6**时，任务结果的结构如下：'."\n"
                                                .'- **instanceId**：String类型，DDoS高防实例的ID。'."\n"
                                                .'- **url**：String类型，导出文件的OSS下载地址。'."\n"
                                                ."\n"
                                                .'**TaskType**为**2**时，任务结果的结构如下：'."\n"
                                                .'- **domain**：String类型，网站业务的域名。'."\n"
                                                .'- **url**：String类型，导出文件的OSS下载地址。',
                                            'type' => 'string',
                                            'example' => '{"instanceId": "ddoscoo-cn-mp91j1ao****","url": "https://****.oss-cn-beijing.aliyuncs.com/heap.bin?Expires=1584785140&OSSAccessKeyId=TMP.3KfzD82FyRJevJdEkRX6JEFHhbvRBBb75PZJnyJmksA2QkMm47xFAFDgMhEV8Nm6Vxr8xExMfiy9LsUFAcLcTBrN3r****&Signature=Sj8BNcsxJLE8l5qm4cjNlDt8gv****"}',
                                        ],
                                        'TaskId' => [
                                            'description' => '任务ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1\\",\\n  \\"AsyncTasks\\": [\\n    {\\n      \\"EndTime\\": 157927362000,\\n      \\"TaskType\\": 5,\\n      \\"StartTime\\": 156927362000,\\n      \\"TaskParams\\": \\"{\\\\\\"instanceId\\\\\\": \\\\\\"ddoscoo-cn-mp91j1ao****\\\\\\"}\\",\\n      \\"TaskStatus\\": 2,\\n      \\"TaskResult\\": \\"{\\\\\\"instanceId\\\\\\": \\\\\\"ddoscoo-cn-mp91j1ao****\\\\\\",\\\\\\"url\\\\\\": \\\\\\"https://****.oss-cn-beijing.aliyuncs.com/heap.bin?Expires=1584785140&OSSAccessKeyId=TMP.3KfzD82FyRJevJdEkRX6JEFHhbvRBBb75PZJnyJmksA2QkMm47xFAFDgMhEV8Nm6Vxr8xExMfiy9LsUFAcLcTBrN3r****&Signature=Sj8BNcsxJLE8l5qm4cjNlDt8gv****\\\\\\"}\\",\\n      \\"TaskId\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAsyncTasksResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1</RequestId>\\n    <AsyncTasks>\\n        <EndTime>157927362000</EndTime>\\n        <TaskType>5</TaskType>\\n        <StartTime>156927362000</StartTime>\\n        <TaskParams>{\\"instanceId\\": \\"ddoscoo-cn-mp91j1ao****\\"}</TaskParams>\\n        <TaskStatus>2</TaskStatus>\\n        <TaskResult>{\\"instanceId\\": \\"ddoscoo-cn-mp91j1ao****\\",\\"url\\": \\"https://****.oss-cn-beijing.aliyuncs.com/heap.bin?Expires=1584785140&amp;OSSAccessKeyId=TMP.3KfzD82FyRJevJdEkRX6JEFHhbvRBBb75PZJnyJmksA2QkMm47xFAFDgMhEV8Nm6Vxr8xExMfiy9LsUFAcLcTBrN3r****&amp;Signature=Sj8BNcsxJLE8l5qm4cjNlDt8gv****\\"}</TaskResult>\\n        <TaskId>1</TaskId>\\n    </AsyncTasks>\\n</DescribeAsyncTasksResponse>","errorExample":""}]',
            'title' => '查询异步导出任务详细信息',
            'summary' => '例如任务ID、任务开始和结束时间、任务状态、任务参数、任务结果等。',
            'description' => '本接口用于查询异步导出任务的详细信息，例如，任务ID、任务开始和结束时间、任务状态、任务参数、任务结果等。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeSystemLog' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'EntityType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的系统日志的类型。取值固定为**20**，表示弹性业务带宽出账日志。'."\n"
                            ."\n"
                            .'> 必须设置该参数，否则会调用失败。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'EntityObject',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的IP地址。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceDetails](~~91490~~)查询DDoS高防实例的IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '203.107.XX.XX',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置起始时间，查询在该起始时间后出账的弹性业务带宽账单。使用时间戳表示，单位：毫秒。',
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
                        'description' => '设置结束时间，查询在该结束时间前出账的弹性业务带宽账单。使用时间戳表示，单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1640966400000',
                    ],
                ],
                [
                    'name' => 'PageNumber',
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
                        'description' => '分页查询时，设置每页包含日志的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Total' => [
                                'description' => '查询到的弹性业务带宽出账日志的总数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '8BC3A33A-F832-58DB-952F-7682A25AD14C',
                            ],
                            'SystemLog' => [
                                'description' => '弹性业务带宽出账日志的详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '账单的状态。取值：'."\n"
                                                ."\n"
                                                .'- **0**：表示待出账。'."\n"
                                                .'- **1**：表示已出账。'."\n"
                                                .'- **2**：表示终止出账。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'EntityType' => [
                                            'description' => '系统日志的类型。取值固定为**20**，表示弹性业务带宽出账日志。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '20',
                                        ],
                                        'EntityObject' => [
                                            'description' => 'DDoS高防实例的IP地址。',
                                            'type' => 'string',
                                            'example' => '203.107.XX.XX',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '账单的创建时间。使用时间戳表示，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1631793531000',
                                        ],
                                        'OpAction' => [
                                            'description' => '操作类型。取值固定为**100**，表示新增弹性业务带宽出账记录。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '100',
                                        ],
                                        'GmtModified' => [
                                            'description' => '账单最后一次被修改的时间。使用时间戳表示，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1635425407000',
                                        ],
                                        'OpAccount' => [
                                            'description' => '账单所属阿里云账号的ID。',
                                            'type' => 'string',
                                            'example' => '171986973287****',
                                        ],
                                        'OpDesc' => [
                                            'description' => '账单详情。使用JSON结构体转化的字符串表示，JSON结构体包含以下字段：'."\n"
                                                ."\n"
                                                .'- **newEntity**：Object类型，表示账单记录，具体包含以下字段：'."\n"
                                                ."\n"
                                                .'    - **billValue**：Integer类型 | 计费月份的弹性业务带宽用量，单位：Mbps。'."\n"
                                                .'    - **instanceId**：String类型 | DDoS高防实例的ID。'."\n"
                                                .'    - **ip**：String类型 | DDoS高防实例的IP地址。'."\n"
                                                .'    - **maxBw**：String类型 | 计费月份的实际业务流量峰值（月95峰值），单位：Mbps。'."\n"
                                                .'    - **month**：Long类型 | 账单出具月份（计费月份为账单出具月份的上个自然月），使用时间戳表示，单位：毫秒。'."\n"
                                                .'    - **overBandwidth**：Integer类型 | 实际业务流量峰值超出实例业务带宽规格的带宽大小，单位：Mbps。'."\n"
                                                .'    - **peakTime**：Long类型 | 实际业务流量峰值的计量时刻，使用时间戳表示，单位：秒。'."\n"
                                                .'    - **startTimestamp**：Long类型 | 实例业务流量峰值区间的起始时刻，使用时间戳表示，单位：秒。',
                                            'type' => 'string',
                                            'example' => '{"newEntity":{"billValue":"60","instanceId":"ddoscoo-cn-zz121ogz****","ip":"203.107.XX.XX","maxBw":"300","month":1627747200000,"overBandwidth":"120","peakTime":1629871200,"startTimestamp":1629871200}}',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Total\\": 1,\\n  \\"RequestId\\": \\"8BC3A33A-F832-58DB-952F-7682A25AD14C\\",\\n  \\"SystemLog\\": [\\n    {\\n      \\"Status\\": 1,\\n      \\"EntityType\\": 20,\\n      \\"EntityObject\\": \\"203.107.XX.XX\\",\\n      \\"GmtCreate\\": 1631793531000,\\n      \\"OpAction\\": 100,\\n      \\"GmtModified\\": 1635425407000,\\n      \\"OpAccount\\": \\"171986973287****\\",\\n      \\"OpDesc\\": \\"{\\\\\\"newEntity\\\\\\":{\\\\\\"billValue\\\\\\":\\\\\\"60\\\\\\",\\\\\\"instanceId\\\\\\":\\\\\\"ddoscoo-cn-zz121ogz****\\\\\\",\\\\\\"ip\\\\\\":\\\\\\"203.107.XX.XX\\\\\\",\\\\\\"maxBw\\\\\\":\\\\\\"300\\\\\\",\\\\\\"month\\\\\\":1627747200000,\\\\\\"overBandwidth\\\\\\":\\\\\\"120\\\\\\",\\\\\\"peakTime\\\\\\":1629871200,\\\\\\"startTimestamp\\\\\\":1629871200}}\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeSystemLogResponse>\\n    <Total>1</Total>\\n    <RequestId>8BC3A33A-F832-58DB-952F-7682A25AD14C</RequestId>\\n    <SystemLog>\\n        <Status>1</Status>\\n        <EntityType>20</EntityType>\\n        <EntityObject>203.107.XX.XX</EntityObject>\\n        <GmtCreate>1631793531000</GmtCreate>\\n        <OpAction>100</OpAction>\\n        <GmtModified>1635425407000</GmtModified>\\n        <OpAccount>171986973287****</OpAccount>\\n        <OpDesc>{\\"newEntity\\":{\\"billValue\\":\\"60\\",\\"instanceId\\":\\"ddoscoo-cn-zz121ogz****\\",\\"ip\\":\\"203.107.XX.XX\\",\\"maxBw\\":\\"300\\",\\"month\\":1627747200000,\\"overBandwidth\\":\\"120\\",\\"peakTime\\":1629871200,\\"startTimestamp\\":1629871200}}</OpDesc>\\n    </SystemLog>\\n</DescribeSystemLogResponse>","errorExample":""}]',
            'title' => '获取系统日志',
            'summary' => '查询弹性业务带宽的账单详情。',
            'description' => '本接口用于查询DDoS高防服务的系统日志。系统日志目前只包含弹性业务带宽的出账日志。'."\n"
                ."\n"
                .'如果您已经启用弹性业务带宽，可以调用本接口查询弹性业务带宽的账单详情。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeElasticQps' => [
            'summary' => '查询DDoS高防实例弹性QPS账单曲线图。',
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
                'abilityTreeCode' => '172965',
                'abilityTreeNodes' => [
                    'FEATUREddosIJFWZ1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务地域。取值：'."\n"
                            .'- **cn**：中国内地。'."\n"
                            .'- **cn-hongkong**：非中国内地。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn',
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '203.107.XX.XX'."\n",
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1684252800',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。时间戳格式，单位：秒。'."\n"
                            .'> 必须为整点分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1684339200',
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '采样间隔，单位：秒。必须是60秒的倍数，默认60s。返回结果可缩放。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '60',
                        'default' => '3600',
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
                                'example' => '2E7F7F7B-39A8-5D92-BAB4-D89D9DCE7D4F',
                            ],
                            'ElasticQps' => [
                                'description' => '弹性QPS列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'MaxNormalQps' => [
                                            'description' => '正常业务QPS峰值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '23',
                                        ],
                                        'Index' => [
                                            'description' => '返回数据的索引。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'MaxQps' => [
                                            'description' => '最大入QPS峰值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '100',
                                        ],
                                        'Pv' => [
                                            'description' => '步长内总请求数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '15104',
                                        ],
                                        'Ups' => [
                                            'description' => '步长时间内总的回源请求数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1223',
                                        ],
                                        'Status2' => [
                                            'description' => '步长内2xx总量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '455',
                                        ],
                                        'Status3' => [
                                            'description' => '步长内3xx总量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '100',
                                        ],
                                        'Status4' => [
                                            'description' => '步长内4xx总量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '34',
                                        ],
                                        'Status5' => [
                                            'description' => '步长内5xx总量。',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2E7F7F7B-39A8-5D92-BAB4-D89D9DCE7D4F\\",\\n  \\"ElasticQps\\": [\\n    {\\n      \\"MaxNormalQps\\": 23,\\n      \\"Index\\": 1,\\n      \\"MaxQps\\": 100,\\n      \\"Pv\\": 15104,\\n      \\"Ups\\": 1223,\\n      \\"Status2\\": 455,\\n      \\"Status3\\": 100,\\n      \\"Status4\\": 34,\\n      \\"Status5\\": 0\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询DDoS高防实例弹性QPS账单曲线图',
        ],
        'DescribeElasticQpsRecord' => [
            'summary' => '查询实例弹性QPS详情。',
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
                'operationType' => 'list',
                'abilityTreeCode' => '173053',
                'abilityTreeNodes' => [
                    'FEATUREddosIJFWZ1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间。格式为时间戳，单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1684252800000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间。格式为时间戳，单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1688140799999',
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的IP地址。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '203.107.XX.XX'."\n",
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
                                'example' => 'F68B34E2-570C-508D-95FD-DFB6611D518F',
                            ],
                            'ElasticQpsList' => [
                                'description' => '实例QPS信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'OpsElasticQps' => [
                                            'description' => '弹性QPS值，0表示未开启。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '300000',
                                        ],
                                        'Ip' => [
                                            'description' => 'DDoS高防实例的IP。',
                                            'type' => 'string',
                                            'example' => '203.***.***.199',
                                        ],
                                        'OriginQps' => [
                                            'description' => '业务QPS（购买）。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1345',
                                        ],
                                        'Date' => [
                                            'description' => '时间。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1688140799999'."\n",
                                        ],
                                        'InstanceId' => [
                                            'description' => 'DDoS高防实例的ID。',
                                            'type' => 'string',
                                            'example' => 'ddoscoo-cn-7e225i41****'."\n",
                                        ],
                                        'Qps' => [
                                            'description' => '日95峰值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '4367',
                                        ],
                                        'QpsPeak' => [
                                            'description' => '日峰值流量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '122',
                                        ],
                                        'Status' => [
                                            'description' => '实例售卖状态，取值：'."\n"
                                                ."\n"
                                                .'- **1**：正常'."\n"
                                                .'- **2**：过期'."\n"
                                                .'- **4**：释放',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'OpsQps' => [
                                            'description' => '业务QPS（实际运行）。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1345',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F68B34E2-570C-508D-95FD-DFB6611D518F\\",\\n  \\"ElasticQpsList\\": [\\n    {\\n      \\"OpsElasticQps\\": 300000,\\n      \\"Ip\\": \\"203.***.***.199\\",\\n      \\"OriginQps\\": 1345,\\n      \\"Date\\": 1688140799999,\\n      \\"InstanceId\\": \\"ddoscoo-cn-7e225i41****\\\\n\\",\\n      \\"Qps\\": 4367,\\n      \\"QpsPeak\\": 122,\\n      \\"Status\\": 1,\\n      \\"OpsQps\\": 1345\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询实例弹性QPS详情',
        ],
        'CreateTagResources' => [
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
                'operationType' => 'create',
                'abilityTreeCode' => '106073',
                'abilityTreeNodes' => [
                    'FEATUREddosMHU3MF',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例所属地域ID。取值固定为**cn-hangzhou**，表示中国内地，即DDoS高防（中国内地）实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型。取值固定为**INSTANCE**，表示DDoS高防实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'INSTANCE',
                    ],
                ],
                [
                    'name' => 'ResourceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要绑定标签的DDoS高防（中国内地）实例的ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要绑定标签的DDoS高防（中国内地）实例的ID。'."\n"
                                ."\n"
                                .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-mp91j1ao****',
                        ],
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要绑定的标签列表。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '要绑定的标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'testkey',
                                ],
                                'Value' => [
                                    'description' => '要绑定的标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'testvalue',
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
                                'example' => 'C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateTagResourcesResponse>\\r\\n\\t<RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\r\\n</CreateTagResourcesResponse>","errorExample":""}]',
            'title' => '为资源关联标签',
            'summary' => '为DDoS高防（中国内地）实例绑定标签。',
            'description' => '本接口用于批量为DDoS高防（中国内地）实例绑定标签。'."\n"
                ."\n"
                .'> DDoS高防（非中国内地）实例不支持标签功能。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteTagResources' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DoS高防实例所属地域ID。取值固定为**cn-hangzhou**，表示中国内地，即DDoS高防（中国内地）服务。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型。取值固定为**INSTANCE**，表示DDoS高防实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'INSTANCE',
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否移除资源上的所有标签。取值：'."\n"
                            .'- **true**：表示是。'."\n"
                            .'- **false**（默认）：表示否。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ResourceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要移除标签的DDoS高防实例的ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要移除标签的DDoS高防实例的ID。'."\n"
                                ."\n"
                                .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-zvp2eibz****',
                        ],
                        'required' => true,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要移除的标签键列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要移除的标签键。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'doc-test-key',
                        ],
                        'required' => false,
                        'example' => 'testkey',
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
                                'example' => '6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteTagResourcesResponse>\\n    <RequestId>6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1</RequestId>\\n</DeleteTagResourcesResponse>","errorExample":""}]',
            'title' => '为资源移除标签',
            'summary' => '为DDoS高防（中国内地）实例移除标签。',
            'description' => '本接口用于为DDoS高防（中国内地）实例移除标签。'."\n"
                ."\n"
                .'> 只有DDoS高防（中国内地）服务支持标签功能。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeTagKeys' => [
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
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例所属地域ID。取值固定为**cn-hangzhou**，表示中国内地，即DDoS高防（中国内地）服务。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型。取值固定为**INSTANCE**，表示DDoS高防实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'INSTANCE',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页包含标签键的数量。默认值为**10**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。默认值为**1**。',
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
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1',
                            ],
                            'PageNumber' => [
                                'description' => '当前页面的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页包含标签键的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '查询到的标签键的总数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TagKeys' => [
                                'description' => '标签键详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'TagCount' => [
                                            'description' => '标签键关联的DDoS高防（中国内地）实例的数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'TagKey' => [
                                            'description' => '标签键。',
                                            'type' => 'string',
                                            'example' => 'aa1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"TagKeys\\": [\\n    {\\n      \\"TagCount\\": 2,\\n      \\"TagKey\\": \\"aa1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeTagKeysResponse>\\n    <RequestId>6623EA1F-30FB-5BC8-BEC9-74D55F6F08F1</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <TagKeys>\\n        <TagCount>2</TagCount>\\n        <TagKey>aa1</TagKey>\\n    </TagKeys>\\n</DescribeTagKeysResponse>","errorExample":""}]',
            'title' => '查询所有标签键',
            'summary' => '查询所有标签键及标签键关联的DDoS高防（中国内地）实例的数量。',
            'description' => '本接口用于分页查询所有标签键及标签键关联的DDoS高防（中国内地）实例的数量。'."\n"
                ."\n"
                .'> 只有DDoS高防（中国内地）服务支持标签功能。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeTagResources' => [
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
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例所属地域ID。取值固定为**cn-hangzhou**，表示中国内地，即DDoS高防（中国内地）实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例在资源管理服务中所属的资源组ID。'."\n"
                            ."\n"
                            .'不设置该参数表示默认资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2pz25js****',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型。取值固定为**INSTANCE**，表示DDoS高防实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'INSTANCE',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询凭证（Token）。取值为上一次调用本接口返回的**NextToken**参数值。'."\n"
                            ."\n"
                            .'> 初次调用本接口时无需设置该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RGuYpqDdKhzXb8C3.D1BwQgc1tMBsoxdGiEKHHUUCf****',
                    ],
                ],
                [
                    'name' => 'ResourceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的DDoS高防（中国内地）实例的ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询的DDoS高防（中国内地）实例的ID。'."\n"
                                ."\n"
                                .'>- **ResourceIds.N**与**Tags.N.Key**不能同时为空。'."\n"
                                .'- 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-zz121ogz****',
                        ],
                        'required' => false,
                        'example' => 'ddoscoo-cn-mp91j1ao****',
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的标签列表。每个标签由标签键（**Key**）和标签值（**Value**）组成。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '要查询的标签键。'."\n"
                                        ."\n"
                                        .'>- **ResourceIds.N**与**Tags.N.Key**不能同时为空。'."\n"
                                        .'- 您可以调用[DescribeTagKeys](~~159785~~)查询所有标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'testkey',
                                ],
                                'Value' => [
                                    'description' => '要查询的标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'testvalue',
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
                                'example' => '36E698F7-48A4-48D0-9554-0BB4BAAB99B3',
                            ],
                            'TagResources' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagResource' => [
                                        'description' => 'DDoS高防（中国内地）实例绑定的标签列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TagValue' => [
                                                    'description' => 'DDoS高防（中国内地）实例绑定的标签值。',
                                                    'type' => 'string',
                                                    'example' => 'testkey',
                                                ],
                                                'ResourceType' => [
                                                    'description' => '资源类型。取值固定为**INSTANCE**，表示DDoS高防实例。',
                                                    'type' => 'string',
                                                    'example' => 'INSTANCE',
                                                ],
                                                'ResourceId' => [
                                                    'description' => 'DDoS高防（中国内地）实例的ID。',
                                                    'type' => 'string',
                                                    'example' => 'ddoscoo-cn-zz121ogz****',
                                                ],
                                                'TagKey' => [
                                                    'description' => 'DDoS高防（中国内地）实例绑定的标签键。',
                                                    'type' => 'string',
                                                    'example' => 'testvalue',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"RGuYpqDdKhzXb8C3.D1BwQgc1tMBsoxdGiEKHHUUCf****\\",\\n  \\"RequestId\\": \\"36E698F7-48A4-48D0-9554-0BB4BAAB99B3\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"TagValue\\": \\"testkey\\",\\n        \\"ResourceType\\": \\"INSTANCE\\",\\n        \\"ResourceId\\": \\"ddoscoo-cn-zz121ogz****\\",\\n        \\"TagKey\\": \\"testvalue\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeTagResourcesResponse>\\n    <NextToken>RGuYpqDdKhzXb8C3.D1BwQgc1tMBsoxdGiEKHHUUCf****</NextToken>\\n    <RequestId>36E698F7-48A4-48D0-9554-0BB4BAAB99B3</RequestId>\\n    <TagResources>\\n        <TagValue>testkey</TagValue>\\n        <ResourceType>INSTANCE</ResourceType>\\n        <ResourceId>ddoscoo-cn-zz121ogz****</ResourceId>\\n        <TagKey>testvalue</TagKey>\\n    </TagResources>\\n</DescribeTagResourcesResponse>","errorExample":""}]',
            'title' => '查询资源关联的标签信息',
            'summary' => '查询DDoS高防（中国内地）实例绑定的标签信息。',
            'description' => '本接口用于查询DDoS高防（中国内地）实例绑定的标签信息。'."\n"
                ."\n"
                .'> 只有DDoS高防（中国内地）服务支持标签功能。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreatePort' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'FrontendPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '转发端口。取值范围：**0**~**65535**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '55',
                    ],
                ],
                [
                    'name' => 'FrontendProtocol',
                    'in' => 'query',
                    'schema' => [
                        'description' => '转发协议类型。取值：'."\n"
                            ."\n"
                            .'- **tcp**：表示TCP协议。'."\n"
                            .'- **udp**：表示UDP协议。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tcp',
                        'enum' => [
                            'tcp',
                            'udp',
                        ],
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '端口转发规则所属的DDoS高防实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-st21zbyq****',
                    ],
                ],
                [
                    'name' => 'BackendPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源站端口。取值范围：**0**~**65535**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '55',
                    ],
                ],
                [
                    'name' => 'RealServers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '源站IP地址列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '源站IP地址。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '1.XX.XX.1',
                        ],
                        'required' => true,
                        'maxItems' => 20,
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
                                'example' => '4787A9A6-8230-4B4A-8211-AFBF7C416B4D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4787A9A6-8230-4B4A-8211-AFBF7C416B4D\\"\\n}","type":"json"}]',
            'title' => '创建一条端口转发规则',
            'summary' => '创建一条端口转发规则。',
            'description' => '本接口支持与Terraform工具对接。关于Terraform的更多信息，请参见[什么是Terraform](~~95820~~)。',
        ],
        'DeletePort' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'FrontendPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '转发端口。取值范围：**0**~**65535**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '55',
                    ],
                ],
                [
                    'name' => 'FrontendProtocol',
                    'in' => 'query',
                    'schema' => [
                        'description' => '转发协议类型。取值：'."\n"
                            .'- **tcp**：表示TCP协议。'."\n"
                            .'- **udp**：表示UDP协议。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tcp',
                        'enum' => [
                            'tcp',
                            'udp',
                        ],
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '端口转发规则所属的DDoS高防实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-st21zbyq****',
                    ],
                ],
                [
                    'name' => 'BackendPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源站端口。取值范围：**0**~**65535**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '55',
                    ],
                ],
                [
                    'name' => 'RealServers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '源站IP地址列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '源站IP地址。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '1.XX.XX.1',
                        ],
                        'required' => false,
                        'maxItems' => 20,
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
                                'example' => '39499F01-19D9-4EA4-A0E9-C6014BA5CDBE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39499F01-19D9-4EA4-A0E9-C6014BA5CDBE\\"\\n}","type":"json"}]',
            'title' => '删除指定的端口转发规则',
            'summary' => '删除指定的端口转发规则。',
            'description' => '删除端口转发规则后，DDoS高防实例将不会再转发该四层端口上的业务流量。请您确保已将四层端口上的业务流量切换到源站服务器，再删除对应的DDoS高防端口转发规则，避免影响您的业务访问。'."\n"
                ."\n"
                .'> 本接口支持与Terraform工具对接。关于Terraform的更多信息，请参见[什么是Terraform](~~95820~~)。',
        ],
        'ModifyPort' => [
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
                'operationType' => 'update',
                'abilityTreeCode' => '106253',
                'abilityTreeNodes' => [
                    'FEATUREddosN7DYCX',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'FrontendPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '转发端口。取值范围：**0**~**65535**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '55',
                    ],
                ],
                [
                    'name' => 'FrontendProtocol',
                    'in' => 'query',
                    'schema' => [
                        'description' => '转发协议类型。取值：'."\n"
                            .'- **tcp**：表示TCP协议。'."\n"
                            .'- **udp**：表示UDP协议。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tcp',
                        'enum' => [
                            'tcp',
                            'udp',
                        ],
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '端口转发规则所属的DDoS高防实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-st21zbyq****',
                    ],
                ],
                [
                    'name' => 'BackendPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源站端口。取值范围：**0**~**65535**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '55',
                    ],
                ],
                [
                    'name' => 'RealServers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '源站IP地址列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '源站IP地址。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '1.XX.XX.1',
                        ],
                        'required' => true,
                        'maxItems' => 20,
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
                                'example' => '39499F01-19D9-4EA4-A0E9-C6014BA5CDBE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39499F01-19D9-4EA4-A0E9-C6014BA5CDBE\\"\\n}","type":"json"}]',
            'title' => '修改已创建的端口转发规则',
            'summary' => '修改已创建的端口转发规则。',
            'description' => '本接口支持与Terraform工具对接。关于Terraform的更多信息，请参见[什么是Terraform](~~95820~~)。',
        ],
        'DescribePort' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddoscoo-cn-7e225i41****',
                    ],
                ],
                [
                    'name' => 'FrontendProtocol',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的转发协议类型。取值：'."\n"
                            ."\n"
                            .'- **tcp**：表示TCP协议。'."\n"
                            .'- **udp**：表示UDP协议。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tcp',
                        'enum' => [
                            'tcp',
                            'udp',
                        ],
                    ],
                ],
                [
                    'name' => 'FrontendPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的转发端口。取值范围：**0**~**65535**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '55',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时返回的页码。例如，查询第一页的返回结果，则设置**1**。',
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
                        'description' => '分页查询时每页包含的记录数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
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
                                'description' => '返回的端口转发规则的数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '39499F01-19D9-4EA4-A0E9-C6014BA5CDBE',
                            ],
                            'NetworkRules' => [
                                'description' => '端口转发规则配置列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'FrontendPort' => [
                                            'description' => '转发端口。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '55',
                                        ],
                                        'IsAutoCreate' => [
                                            'description' => '该规则是否由DDoS高防自动生成。取值：'."\n"
                                                .'- **true**：表示由DDoS高防自动生成。'."\n"
                                                .'- **false**：表示由您手动创建。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'InstanceId' => [
                                            'description' => '转发规则所属的DDoS高防实例的ID。',
                                            'type' => 'string',
                                            'example' => 'ddoscoo-cn-7e225i41****',
                                        ],
                                        'FrontendProtocol' => [
                                            'description' => '转发协议类型。取值：'."\n"
                                                .'- **tcp**：表示TCP协议。'."\n"
                                                .'- **udp**：表示UDP协议。',
                                            'type' => 'string',
                                            'example' => 'tcp',
                                        ],
                                        'BackendPort' => [
                                            'description' => '源站端口。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '55',
                                        ],
                                        'RealServers' => [
                                            'description' => '源站IP地址列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '源站IP地址。',
                                                'type' => 'string',
                                                'example' => '1.XX.XX.1',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"39499F01-19D9-4EA4-A0E9-C6014BA5CDBE\\",\\n  \\"NetworkRules\\": [\\n    {\\n      \\"FrontendPort\\": 55,\\n      \\"IsAutoCreate\\": false,\\n      \\"InstanceId\\": \\"ddoscoo-cn-7e225i41****\\",\\n      \\"FrontendProtocol\\": \\"tcp\\",\\n      \\"BackendPort\\": 55,\\n      \\"RealServers\\": [\\n        \\"1.XX.XX.1\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询端口转发规则',
            'summary' => '查询DDoS高防实例下已创建的端口转发规则。',
            'description' => '本接口支持与Terraform工具对接。关于Terraform的更多信息，请参见[什么是Terraform](~~95820~~)。',
        ],
        'CreateDomainResource' => [
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
                'operationType' => 'create',
                'abilityTreeCode' => '106066',
                'abilityTreeNodes' => [
                    'FEATUREddos64TBV6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要接入DDoS高防防护的网站业务的域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.example.com',
                    ],
                ],
                [
                    'name' => 'RsType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要设置的源站服务器的地址类型。取值：'."\n"
                            ."\n"
                            .'- **0**：表示设置源站服务器的IP地址。'."\n"
                            .'- **1**：表示设置源站服务器的域名地址。'."\n"
                            ."\n"
                            .'	适用于源站和DDoS高防之间还部署有其他代理服务（例如WAF）的场景，具体指代理服务的跳转地址（例如WAF的CNAME地址）。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '0',
                        'enum' => [
                            '0',
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'HttpsExt',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'HTTPS高级设置，仅在网站协议类型支持HTTPS（**ProxyType**包含**https**）时生效。使用JSON结构体转化的字符串格式表示，JSON结构体包含以下字段：'."\n"
                            ."\n"
                            .'- **Http2https**：Integer类型 | 可选 | 是否开启HTTPS的强制跳转功能，取值：**0**（表示关闭） | **1**（表示开启），默认关闭。'."\n"
                            ."\n"
                            .'	适用于您的网站同时支持HTTP和HTTPS协议。开启该设置后，所有HTTP请求将强制转换为HTTPS请求，且默认跳转到443端口。'."\n"
                            ."\n"
                            .'- **Https2http**：Integer类型 | 可选 | 是否开启HTTP回源功能，取值：**0**（表示关闭） | **1**（表示开启），默认关闭。'."\n"
                            ."\n"
                            .'	适用于您的网站不支持HTTPS回源。开启该设置后，所有HTTPS协议请求将通过HTTP回源（Websockets协议会通过Websocket回源），且默认回源端口为80。'."\n"
                            ."\n"
                            .'- **Http2**：Integer类型 | 可选 | 是否开启HTTP 2.0协议支持，取值：**0**（表示关闭） | **1**（表示开启），默认关闭。'."\n"
                            ."\n"
                            .'	开启该设置后，协议版本为HTTP 2.0。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"Http2":1,"Http2https":1,"Https2http":1}',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要关联的DDoS高防实例的ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要关联的DDoS高防实例的ID。不设置该参数表示只添加网站域名，不关联高防实例。'."\n"
                                ."\n"
                                .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-mp91j1ao****',
                        ],
                        'required' => true,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'RealServers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '源站服务器地址列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '源站服务器地址。'."\n"
                                ."\n"
                                .'如果**RsType**为**0**，该参数使用IP地址格式；如果**RsType**为**1**，该参数使用域名格式。更多信息，请参见**RsType**参数的说明。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '1.XX.XX.1',
                        ],
                        'required' => true,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ProxyTypes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '网站的协议及端口配置。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'ProxyPorts' => [
                                    'description' => '网站对外服务使用的端口列表。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '网站对外服务使用的端口。'."\n"
                                            ."\n"
                                            .'> 此处设置的端口必须在DDoS高防支持的端口范围内。更多信息，请参见[自定义非标端口](~~127433~~)。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '80',
                                    ],
                                    'required' => true,
                                    'maxItems' => 10,
                                ],
                                'ProxyType' => [
                                    'description' => '网站对外服务使用的协议类型。取值：'."\n"
                                        ."\n"
                                        .'- **http**：表示HTTP协议。'."\n"
                                        .'- **https**：表示HTTPS协议。'."\n"
                                        .'- **websocket**：表示WebSocket协议。'."\n"
                                        .'- **websockets**：表示WebSockets协议。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'http',
                                    'enum' => [
                                        'http',
                                        'https',
                                        'websocket',
                                        'websockets',
                                    ],
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '本次请求返回的数据体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '39499F01-19D9-4EA4-A0E9-C6014BA5CDBE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39499F01-19D9-4EA4-A0E9-C6014BA5CDBE\\"\\n}","type":"json"}]',
            'title' => '创建一条网站业务转发规则',
            'summary' => '创建一条网站业务转发规则。',
        ],
        'DeleteDomainResource' => [
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
                'abilityTreeCode' => '106081',
                'abilityTreeNodes' => [
                    'FEATUREddos64TBV6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的网站业务转发规则对应的域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.example.com',
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
                                'example' => '39499F01-19D9-4EA4-A0E9-C6014BA5CDBE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39499F01-19D9-4EA4-A0E9-C6014BA5CDBE\\"\\n}","type":"json"}]',
            'title' => '删除指定的网站业务转发规则',
            'summary' => '删除指定的网站业务转发规则。',
        ],
        'DescribeDomainResource' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的网站域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.example.com',
                    ],
                ],
                [
                    'name' => 'QueryDomainPattern',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询匹配模式。取值：'."\n"
                            ."\n"
                            .'- **fuzzy**（默认）：表示模糊查询。'."\n"
                            .'- **exact**：表示精确查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'fuzzy',
                        'enum' => [
                            'fuzzy',
                            'exact',
                        ],
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。默认值为**1**。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页包含转发规则的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的DDoS高防实例的ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询的DDoS高防实例的ID。'."\n"
                                ."\n"
                                .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-mp91j1ao****',
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '查询到的网站业务转发规则的总数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '39499F01-19D9-4EA4-A0E9-C6014BA5CDBE',
                            ],
                            'WebRules' => [
                                'description' => '网站业务转发规则的配置。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Domain' => [
                                            'description' => '网站业务的域名。',
                                            'type' => 'string',
                                            'example' => 'www.example.com',
                                        ],
                                        'Http2HttpsEnable' => [
                                            'description' => '是否开启了HTTPS强制跳转。取值：'."\n"
                                                ."\n"
                                                .'- **true**：表示已开启。'."\n"
                                                .'- **false**：表示未开启。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'SslProtocols' => [
                                            'description' => 'TLS协议版本。取值：'."\n"
                                                ."\n"
                                                .'- **tls1.0**：表示TLS 1.0及以上版本。'."\n"
                                                .'- **tls1.1**：表示TLS 1.1及以上版本。'."\n"
                                                .'- **tls1.2**：表示TLS 1.2及以上版本。',
                                            'type' => 'string',
                                            'example' => 'tls1.0',
                                        ],
                                        'PunishReason' => [
                                            'description' => '域名受到违规处罚的原因。取值：'."\n"
                                                .'- **1**：表示域名未履行ICP备案。'."\n"
                                                .'- **2**：表示域名经营的业务不符合监管要求。'."\n"
                                                ."\n"
                                                .'如果同时包含原因**1**和**2**，该参数返回**2**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'CcTemplate' => [
                                            'description' => '频率控制防护（CC防护）的模式。取值：'."\n"
                                                ."\n"
                                                .'- **default**：表示正常模式。'."\n"
                                                .'- **gf_under_attack**：表示攻击紧急模式。'."\n"
                                                .'- **gf_sos_verify**：表示严格模式。'."\n"
                                                .'- **gf_sos_enhance**：表示超级严格模式。',
                                            'type' => 'string',
                                            'example' => 'default',
                                        ],
                                        'HttpsExt' => [
                                            'description' => 'HTTPS高级设置，仅在网站协议类型支持HTTPS（**ProxyType**包含**https**）时生效。使用JSON结构体转化的字符串格式表示，JSON结构体包含以下字段：'."\n"
                                                ."\n"
                                                .'- **Http2https**：Integer类型 | 是否开启了HTTPS的强制跳转功能，取值：**0**（表示未开启） | **1**（表示已开启）。'."\n"
                                                .'- **Https2http**：Integer类型 | 是否开启了HTTP回源功能，取值：**0**（表示未开启） | **1**（表示已开启）。'."\n"
                                                .'- **Http2**：Integer类型 | 是否开启了HTTP 2.0协议支持，取值：**0**（表示未开启） | **1**（表示已开启）。',
                                            'type' => 'string',
                                            'example' => '{"Https2http":0,"Http2":0,"Http2https":0}',
                                        ],
                                        'CcEnabled' => [
                                            'description' => '是否开启了频率控制防护（CC防护）。取值：'."\n"
                                                ."\n"
                                                .'- **true**：表示已开启。'."\n"
                                                .'- **false**：表示未开启。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'SslCiphers' => [
                                            'description' => '加密套件的类型。取值：'."\n"
                                                ."\n"
                                                .'- **default**：表示自定义加密套件。'."\n"
                                                .'- **all**：表示全部加密套件。'."\n"
                                                .'- **strong**：表示强加密套件。',
                                            'type' => 'string',
                                            'example' => 'default',
                                        ],
                                        'CcRuleEnabled' => [
                                            'description' => '是否开启了自定义频率控制防护（CC防护）。取值：'."\n"
                                                ."\n"
                                                .'- **true**：表示已开启。'."\n"
                                                .'- **false**：表示未开启。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Ssl13Enabled' => [
                                            'description' => '是否开启了TLS 1.3协议支持。取值：'."\n"
                                                ."\n"
                                                .'- **true**：表示已开启。'."\n"
                                                .'- **false**：表示未开启。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'RsType' => [
                                            'description' => '源站服务器的地址类型。取值：'."\n"
                                                ."\n"
                                                .'- **0**：表示使用IP地址格式。'."\n"
                                                .'- **1**：表示使用域名格式。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'PunishStatus' => [
                                            'description' => '域名是否受到违规处罚。取值：'."\n"
                                                ."\n"
                                                .'- **true**：表示已受到违规处罚。您可以通过**PunishReason**查看受到违规处罚的具体原因。'."\n"
                                                .'- **false**：表示未受到违规处罚。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'ProxyEnabled' => [
                                            'description' => 'DDoS高防是否对该网站业务的流量进行转发。取值：'."\n"
                                                ."\n"
                                                .'- **true**：表示进行流量转发。'."\n"
                                                .'- **false**：表示已停止流量转发。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'CertName' => [
                                            'description' => '域名使用的SSL证书的名称。',
                                            'type' => 'string',
                                            'example' => '49944XX.pem',
                                        ],
                                        'PolicyMode' => [
                                            'description' => '回源负载算法的类型。取值：'."\n"
                                                ."\n"
                                                .'- **ip_hash**：表示IP Hash算法。该算法根据请求来源IP进行HASH映射，将同一个IP的所有请求定向到一个源站服务器。'."\n"
                                                .'- **rr**：表示轮转算法。该算法将所有请求轮流分配给不同源站服务器。'."\n"
                                                .'- **least_time**：表示Least Time算法。该算法通过智能DNS解析能力，保证业务流量从接入防护节点到转发回源站服务器整个链路的时延最短。',
                                            'type' => 'string',
                                            'example' => 'ip_hash',
                                        ],
                                        'Cname' => [
                                            'description' => '域名对应的DDoS高防CNAME地址。',
                                            'type' => 'string',
                                            'example' => '0ekb69x3j9wvXXXX.aliyunddosXXXX.com',
                                        ],
                                        'OcspEnabled' => [
                                            'description' => '是否启用了OCSP（Online Certificate Status Protocol）功能。取值：'."\n"
                                                .'- **true**：表示已开启。'."\n"
                                                .'- **false**：表示未开启。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'Http2Enable' => [
                                            'description' => '是否开启了HTTP 2.0。取值：'."\n"
                                                ."\n"
                                                .'- **true**：表示已开启。'."\n"
                                                .'- **false**：表示未开启。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'Https2HttpEnable' => [
                                            'description' => '是否开启了HTTP回源功能。取值：'."\n"
                                                ."\n"
                                                .'- **true**：表示已开启。'."\n"
                                                .'- **false**：表示未开启。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'ProxyTypes' => [
                                            'description' => '网站的协议及端口配置。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'ProxyType' => [
                                                        'description' => '网站对外服务使用的协议类型。取值：'."\n"
                                                            ."\n"
                                                            .'- **http**：表示HTTP协议。'."\n"
                                                            .'- **https**：表示HTTPS协议。'."\n"
                                                            .'- **websocket**：表示WebSocket协议。'."\n"
                                                            .'- **websockets**：表示WebSockets协议。',
                                                        'type' => 'string',
                                                        'example' => 'http',
                                                    ],
                                                    'ProxyPorts' => [
                                                        'description' => '网站对外服务使用的端口列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '网站对外服务使用的端口。',
                                                            'type' => 'string',
                                                            'example' => '80',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'InstanceIds' => [
                                            'description' => '域名关联的DDoS高防实例的ID列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '域名关联的DDoS高防实例的ID。',
                                                'type' => 'string',
                                                'example' => 'ddoscoo-cn-st21zbyq****',
                                            ],
                                        ],
                                        'CustomCiphers' => [
                                            'description' => '自定义加密套件列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '自定义加密套件。',
                                                'type' => 'string',
                                                'example' => 'ECDHE-RSA-AES256-SHA384',
                                            ],
                                        ],
                                        'WhiteList' => [
                                            'description' => '针对当前域名的白名单IP列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '针对当前域名的白名单IP。'."\n"
                                                    ."\n"
                                                    .'> 仅在您已经为该域名配置了**IP白名单（针对域名）**时返回该结果。您可以调用[ConfigWebIpSet](~~157469~~)为网站域名配置IP黑白名单。',
                                                'type' => 'string',
                                                'example' => '3.XX.XX.3',
                                            ],
                                        ],
                                        'BlackList' => [
                                            'description' => '针对当前域名的黑名单IP列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '针对当前域名的黑名单IP。'."\n"
                                                    ."\n"
                                                    .'> 仅在您已经为该域名配置了 **IP黑名单（针对域名）** 时返回该结果。您可以调用[ConfigWebIpSet](~~157469~~)为网站域名配置IP黑白名单。',
                                                'type' => 'string',
                                                'example' => '2.XX.XX.2',
                                            ],
                                        ],
                                        'RealServers' => [
                                            'description' => '源站服务器地址列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '源站服务器地址。',
                                                'type' => 'string',
                                                'example' => '1.XX.XX.1',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"39499F01-19D9-4EA4-A0E9-C6014BA5CDBE\\",\\n  \\"WebRules\\": [\\n    {\\n      \\"Domain\\": \\"www.example.com\\",\\n      \\"Http2HttpsEnable\\": false,\\n      \\"SslProtocols\\": \\"tls1.0\\",\\n      \\"PunishReason\\": 1,\\n      \\"CcTemplate\\": \\"default\\",\\n      \\"HttpsExt\\": \\"{\\\\\\"Https2http\\\\\\":0,\\\\\\"Http2\\\\\\":0,\\\\\\"Http2https\\\\\\":0}\\",\\n      \\"CcEnabled\\": true,\\n      \\"SslCiphers\\": \\"default\\",\\n      \\"CcRuleEnabled\\": true,\\n      \\"Ssl13Enabled\\": false,\\n      \\"RsType\\": 0,\\n      \\"PunishStatus\\": false,\\n      \\"ProxyEnabled\\": true,\\n      \\"CertName\\": \\"49944XX.pem\\",\\n      \\"PolicyMode\\": \\"ip_hash\\",\\n      \\"Cname\\": \\"0ekb69x3j9wvXXXX.aliyunddosXXXX.com\\",\\n      \\"OcspEnabled\\": false,\\n      \\"Http2Enable\\": false,\\n      \\"Https2HttpEnable\\": false,\\n      \\"ProxyTypes\\": [\\n        {\\n          \\"ProxyType\\": \\"http\\",\\n          \\"ProxyPorts\\": [\\n            \\"80\\"\\n          ]\\n        }\\n      ],\\n      \\"InstanceIds\\": [\\n        \\"ddoscoo-cn-st21zbyq****\\"\\n      ],\\n      \\"CustomCiphers\\": [\\n        \\"ECDHE-RSA-AES256-SHA384\\"\\n      ],\\n      \\"WhiteList\\": [\\n        \\"3.XX.XX.3\\"\\n      ],\\n      \\"BlackList\\": [\\n        \\"2.XX.XX.2\\"\\n      ],\\n      \\"RealServers\\": [\\n        \\"1.XX.XX.1\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDomainResourceResponse>\\n    <TotalCount>1</TotalCount>\\n    <WebRules>\\n        <Domain>www.example.com</Domain>\\n        <Http2HttpsEnable>false</Http2HttpsEnable>\\n        <BlackList>2.XX.XX.2</BlackList>\\n        <WhiteList>3.XX.XX.3</WhiteList>\\n        <CustomCiphers>ECDHE-RSA-AES256-SHA384</CustomCiphers>\\n        <RealServers>1.XX.XX.1</RealServers>\\n        <ProxyTypes>\\n            <ProxyPorts>80</ProxyPorts>\\n            <ProxyType>http</ProxyType>\\n        </ProxyTypes>\\n        <SslProtocols>tls1.0</SslProtocols>\\n        <PunishReason>1</PunishReason>\\n        <CcTemplate>default</CcTemplate>\\n        <CcEnabled>true</CcEnabled>\\n        <SslCiphers>default</SslCiphers>\\n        <Ssl13Enabled>false</Ssl13Enabled>\\n        <CcRuleEnabled>true</CcRuleEnabled>\\n        <PunishStatus>false</PunishStatus>\\n        <RsType>0</RsType>\\n        <ProxyEnabled>true</ProxyEnabled>\\n        <CertName>49944XX.pem</CertName>\\n        <PolicyMode>ip_hash</PolicyMode>\\n        <Cname>0ekb69x3j9wvXXXX.aliyunddosXXXX.com</Cname>\\n        <Http2Enable>false</Http2Enable>\\n        <Https2HttpEnable>false</Https2HttpEnable>\\n        <InstanceIds>ddoscoo-cn-st21zbyq****</InstanceIds>\\n        <HttpsExt>{\\"Https2http\\":0,\\"Http2\\":0,\\"Http2https\\":0}</HttpsExt>\\n    </WebRules>\\n    <RequestId>39499F01-19D9-4EA4-A0E9-C6014BA5CDBE</RequestId>\\n</DescribeDomainResourceResponse>","errorExample":""}]',
            'title' => '查询网站业务转发规则的配置',
            'summary' => '查询网站业务转发规则的配置。',
            'description' => '本接口用于查询分页您已创建的网站业务转发规则的详细配置，例如，网站域名、协议配置、HTTPS配置、CC安全防护配置。'."\n"
                ."\n"
                .'本接口支持与Terraform工具对接。关于Terraform的更多信息，请参见[什么是Terraform](~~95820~~)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为50次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
        ],
        'ModifyDomainResource' => [
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
                'abilityTreeCode' => '106238',
                'abilityTreeNodes' => [
                    'FEATUREddos64TBV6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已接入DDoS高防防护的网站业务的域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.example.com',
                    ],
                ],
                [
                    'name' => 'RsType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源站服务器的地址类型。取值：'."\n"
                            ."\n"
                            .'- **0**：表示设置源站服务器的IP地址。'."\n"
                            .'- **1**：表示设置源站服务器的域名地址。'."\n"
                            ."\n"
                            .'	适用于源站和DDoS高防之间还部署有其他代理服务（例如WAF）的场景，具体指代理服务的跳转地址（例如WAF的CNAME地址）。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '0',
                        'enum' => [
                            '0',
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'HttpsExt',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'HTTPS高级设置，仅在网站协议类型支持HTTPS（**ProxyType**包含**https**）时生效。使用JSON结构体转化的字符串格式表示，JSON结构体包含以下字段：'."\n"
                            ."\n"
                            .'- **Http2https**：Integer类型 | 可选 | 是否开启HTTPS的强制跳转功能，取值：**0**（表示关闭） | **1**（表示开启），默认关闭。'."\n"
                            ."\n"
                            .'	适用于您的网站同时支持HTTP和HTTPS协议。开启该设置后，所有HTTP请求将强制转换为HTTPS请求，且默认跳转到443端口。'."\n"
                            ."\n"
                            .'- **Https2http**：Integer类型 | 可选 | 是否开启HTTP回源功能，取值：**0**（表示关闭） | **1**（表示开启），默认关闭。'."\n"
                            ."\n"
                            .'	适用于您的网站不支持HTTPS回源。开启该设置后，所有HTTPS协议请求将通过HTTP回源（Websockets协议会通过Websocket回源），且默认回源端口为80。'."\n"
                            ."\n"
                            .'- **Http2**：Integer类型 | 可选 | 是否开启HTTP 2.0协议支持，取值：**0**（表示关闭） | **1**（表示开启），默认关闭。'."\n"
                            ."\n"
                            .'	开启该设置后，协议版本为HTTP 2.0。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"Http2":1,"Http2https":1,"Https2http":1}',
                    ],
                ],
                [
                    'name' => 'ProxyTypes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '网站的协议及端口配置。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'ProxyPorts' => [
                                    'description' => '网站对外服务使用的端口列表。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '网站对外服务使用的端口。'."\n"
                                            ."\n"
                                            .'> 此处设置的端口必须在DDoS高防支持的端口范围内。更多信息，请参见[自定义非标端口](~~127433~~)。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '443',
                                    ],
                                    'required' => true,
                                    'maxItems' => 10,
                                ],
                                'ProxyType' => [
                                    'description' => '网站对外服务使用的协议类型。取值：'."\n"
                                        ."\n"
                                        .'- **http**：表示HTTP协议。'."\n"
                                        .'- **https**：表示HTTPS协议。'."\n"
                                        .'- **websocket**：表示WebSocket协议。'."\n"
                                        .'- **websockets**：表示WebSockets协议。'."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'https',
                                    'enum' => [
                                        'http',
                                        'https',
                                        'websocket',
                                        'websockets',
                                    ],
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RealServers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '源站服务器地址列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '源站服务器地址。'."\n"
                                ."\n"
                                .'如果**RsType**为**0**，该参数使用IP地址格式；如果**RsType**为**1**，该参数使用域名格式。更多信息，请参见**RsType**参数的说明。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '1.XX.XX.1',
                        ],
                        'required' => true,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要关联的DDoS高防实例的ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要关联的DDoS高防实例的ID。不设置该参数表示只添加网站域名，不关联高防实例。'."\n"
                                ."\n"
                                .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ddoscoo-cn-mp91j1ao****',
                        ],
                        'required' => true,
                        'maxItems' => 20,
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
                                'example' => '39499F01-19D9-4EA4-A0E9-C6014BA5CDBE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39499F01-19D9-4EA4-A0E9-C6014BA5CDBE\\"\\n}","type":"json"}]',
            'title' => '修改已创建的网站业务转发规则',
            'summary' => '修改已创建的网站业务转发规则。',
        ],
        'ConfigLayer4Remark' => [
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
                'abilityTreeCode' => '106053',
                'abilityTreeNodes' => [
                    'FEATUREddosN7DYCX',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Listeners',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要设置的端口转发规则。'."\n"
                            ."\n"
                            .'该参数使用JSON数组转换的字符串表示。JSON数组的每个元素表示一个已创建的端口转发规则。一次最多可以设置1个端口转发规则。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeNetworkRules](~~157484~~)查询所有已创建的端口转发规则。'."\n"
                            ."\n"
                            .'每个端口转发规则包含以下字段：'."\n"
                            ."\n"
                            .'- **InstanceId**：String类型，必选，DDoS高防实例的ID。'."\n"
                            .'- **Protocol**：String类型，必选，端口转发协议类型。取值：**tcp**、**udp**。'."\n"
                            .'- **FrontendPort**：Integer类型，必选，转发端口。'."\n"
                            .'- **Remark**：String类型，必选，备注。支持使用中文字符、英文大小写字符、数字及部分特殊字符，例如：`,.+-*/_`。最长不允许超过200个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{\\"InstanceId\\":\\"ddosDip-sg-4hr2b3l****\\",\\"FrontendPort\\":2020,\\"Protocol\\":\\"udp\\",\\"Remark\\":\\"test\\"}]',
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
                                'example' => '6E46CC51-36BE-1100-B14C-DAF8381B8F73',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6E46CC51-36BE-1100-B14C-DAF8381B8F73\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ConfigLayer4RemarkResponse>\\r\\n\\t<RequestId>6E46CC51-36BE-1100-B14C-DAF8381B8F73</RequestId>\\r\\n</ConfigLayer4RemarkResponse>","errorExample":""}]',
            'title' => '为端口转发规则添加备注',
            'summary' => '为端口转发规则添加备注。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ConfigLayer4RuleBakMode' => [
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
                'abilityTreeCode' => '106054',
                'abilityTreeNodes' => [
                    'FEATUREddosCRC1QI',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'BakMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置回源模式。取值：'."\n"
                            .'- **0**：表示默认回源模式，即DDoS高防将业务流量转发到您调用[CreateNetworkRules](~~157482~~)创建该端口转发规则时指定的源站IP地址。'."\n"
                            .'- **1**：表示主备回源模式，即DDoS高防将业务流量转发到您调用[ConfigLayer4RulePolicy](~~312684~~)设置的主源站IP地址或备源站IP地址。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Listeners',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要设置的端口转发规则。'."\n"
                            ."\n"
                            .'该参数使用JSON数组转换的字符串表示。JSON数组的每个元素表示一个已创建的端口转发规则。一次最多可以设置1个端口转发规则。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeNetworkRules](~~157484~~)查询所有已创建的端口转发规则。'."\n"
                            ."\n"
                            .'每个端口转发规则包含以下字段：'."\n"
                            ."\n"
                            .'- **InstanceId**：String类型，必选，DDoS高防实例的ID。'."\n"
                            .'- **Protocol**：String类型，必选，端口转发协议类型。取值：**tcp**、**udp**。'."\n"
                            .'- **FrontendPort**：Integer类型，必选，转发端口。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{\\"InstanceId\\":\\"ddosDip-sg-4hr2b3l****\\",\\"FrontendPort\\":2020,\\"Protocol\\":\\"udp\\"}]',
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
                                'example' => 'CC042262-15A3-4A49-ADF0-130968EA47BC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CC042262-15A3-4A49-ADF0-130968EA47BC\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ConfigLayer4RuleBakModeResponse>\\r\\n\\t<RequestId>CC042262-15A3-4A49-ADF0-130968EA47BC</RequestId>\\r\\n</ConfigLayer4RuleBakModeResponse>","errorExample":""}]',
            'title' => '修改端口转发规则的回源模式',
            'summary' => '修改端口转发规则的回源模式（启用或关闭主备回源）。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ConfigLayer4RulePolicy' => [
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
                'abilityTreeCode' => '106055',
                'abilityTreeNodes' => [
                    'FEATUREddosCRC1QI',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Listeners',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置端口转发规则。'."\n"
                            ."\n"
                            .'该参数使用JSON数组转换的字符串表示。JSON数组的每个元素表示一个已创建的端口转发规则。一次最多可以设置1个端口转发规则。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeNetworkRules](~~157484~~)查询所有已创建的端口转发规则。'."\n"
                            ."\n"
                            .'每个端口转发规则包含以下字段：'."\n"
                            ."\n"
                            .'- **InstanceId**：String类型，必选，DDoS高防实例的ID。'."\n"
                            .'- **Protocol**：String类型，必选，转发协议类型。取值：**tcp**、**udp**。'."\n"
                            .'- **FrontendPort**：Integer类型，必选，转发端口。'."\n"
                            .'- **BackendPort**：Integer类型，必选，源站端口。'."\n"
                            .'- **PriRealServers**：JSON数组类型，必选，主源站IP地址列表。JSON数组的每个元素表示一个主源站IP地址。最多支持设置20个主源站IP地址。'."\n"
                            ."\n"
                            .'    每个主源站IP地址包含以下字段：'."\n"
                            ."\n"
                            .'    - **RealServer**：String类型，必选，主源站IP地址。'."\n"
                            ."\n"
                            .'- **SecRealServers**：JSON数组类型，必选，备源站IP地址列表。JSON数组的每个元素表示一个备源站IP地址。最多支持设置20个备源站IP地址。'."\n"
                            ."\n"
                            .'    每个备源站IP地址包含以下字段：'."\n"
                            .'    '."\n"
                            .'    - **RealServer**：String类型，必选，备源站IP地址。'."\n"
                            .' '."\n"
                            .'- **CurrentRsIndex**：Integer类型，必选，要生效的源站类型。取值：'."\n"
                            .'    - **1**：表示主源站设置生效（DDoS高防将业务流量转发到主源站IP地址）。'."\n"
                            .'    - **2**：表示备源站设置生效（DDoS高防将业务流量转发到备源站IP地址）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{\\"InstanceId\\":\\"ddosDip-sg-4hr2b3l****\\",\\"Protocol\\":\\"udp\\",\\"FrontendPort\\":2020,\\"BackendPort\\":2022,\\"PriRealServers\\":[{\\"RealServer\\":\\"192.0.2.1\\"},{\\"RealServer\\":\\"192.0.2.2\\"}],\\"SecRealServers\\":[{\\"RealServer\\":\\"192.0.2.3\\"},{\\"RealServer\\":\\"192.0.2.4\\"}],\\"CurrentRsIndex\\":1}]',
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
                                'example' => 'CC042262-15A3-4A49-ADF0-130968EA47BC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CC042262-15A3-4A49-ADF0-130968EA47BC\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ConfigLayer4RulePolicyResponse>\\r\\n\\t<RequestId>CC042262-15A3-4A49-ADF0-130968EA47BC</RequestId>\\r\\n</ConfigLayer4RulePolicyResponse>","errorExample":""}]',
            'title' => '配置4层规则策略',
            'summary' => '为端口转发规则设置主、备源站IP地址。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeLayer4RulePolicy' => [
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
                    'name' => 'Listeners',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的端口转发规则。'."\n"
                            ."\n"
                            .'该参数使用JSON数组转换的字符串表示。JSON数组的每个元素表示一个已创建的端口转发规则。一次最多可以查询1个端口转发规则。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeNetworkRules](~~157484~~)查询所有已创建的端口转发规则。'."\n"
                            ."\n"
                            .'每个端口转发规则包含以下字段：'."\n"
                            ."\n"
                            .'- **InstanceId**：String类型，必选，DDoS高防实例的ID。'."\n"
                            .'- **Protocol**：String类型，必选，端口转发协议类型。取值：**tcp**、**udp**。'."\n"
                            .'- **FrontendPort**：Integer类型，必选，转发端口。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{\\"InstanceId\\":\\"ddosDip-sg-4hr2b3l****\\",\\"FrontendPort\\":2020,\\"Protocol\\":\\"udp\\"}]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'FrontendPort' => [
                                'description' => '转发端口。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2020',
                            ],
                            'BakMode' => [
                                'description' => '回源模式。取值：'."\n"
                                    .'- 0：表示默认回源模式，即DDoS高防将业务流量转发到您调用[CreateNetworkRules](~~157482~~)创建该端口转发规则时指定的源站IP。'."\n"
                                    .'- 1：表示主备回源模式，即DDoS高防将业务流量转发到您调用[ConfigLayer4RulePolicy](~~312684~~)设置的主源站IP地址或备源站IP地址。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '6E46CC51-36BE-1100-B14C-DAF8381B8F73',
                            ],
                            'CurrentIndex' => [
                                'description' => '当前生效的源站类型。取值：'."\n"
                                    .'- **1**：表示主源站设置生效（DDoS高防将业务流量转发到主源站IP地址）。'."\n"
                                    .'- **2**：表示备源站设置生效（DDoS高防将业务流量转发到备源站IP地址）。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'ForwardProtocol' => [
                                'description' => '转发协议类型。',
                                'type' => 'string',
                                'example' => 'udp',
                            ],
                            'InstanceId' => [
                                'description' => 'DDoS高防实例的ID。',
                                'type' => 'string',
                                'example' => 'ddosDip-sg-4hr2b3l****',
                            ],
                            'BackendPort' => [
                                'description' => '源站端口。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2022',
                            ],
                            'PriRealServers' => [
                                'description' => '主源站信息，包括主源站IP地址、转发协议类型、转发端口等。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'FrontendPort' => [
                                            'description' => '转发端口。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2020',
                                        ],
                                        'Eip' => [
                                            'description' => 'DDoS高防实例的IP。',
                                            'type' => 'string',
                                            'example' => '203.107.XX.XX',
                                        ],
                                        'Protocol' => [
                                            'description' => '转发协议类型。',
                                            'type' => 'string',
                                            'example' => 'udp',
                                        ],
                                        'CurrentIndex' => [
                                            'description' => '当前生效的源站类型。取值：'."\n"
                                                .'- **1**：表示主源站设置生效（DDoS高防将业务流量转发到主源站IP地址）。'."\n"
                                                .'- **2**：表示备源站设置生效（DDoS高防将业务流量转发到备源站IP地址）。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'InstanceId' => [
                                            'description' => 'DDoS高防实例的ID。',
                                            'type' => 'string',
                                            'example' => 'ddosDip-sg-4hr2b3l****',
                                        ],
                                        'RealServer' => [
                                            'description' => '主源站IP地址。',
                                            'type' => 'string',
                                            'example' => '192.0.2.1',
                                        ],
                                    ],
                                ],
                            ],
                            'SecRealServers' => [
                                'description' => '备源站信息，包括备源站IP地址、转发协议类型、转发端口等。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'FrontendPort' => [
                                            'description' => '转发端口。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2020',
                                        ],
                                        'Eip' => [
                                            'description' => 'DDoS高防实例的IP。',
                                            'type' => 'string',
                                            'example' => '203.107.XX.XX',
                                        ],
                                        'Protocol' => [
                                            'description' => '转发协议类型。',
                                            'type' => 'string',
                                            'example' => 'udp',
                                        ],
                                        'CurrentIndex' => [
                                            'description' => '当前生效的源站类型。取值：'."\n"
                                                .'- **1**：表示主源站设置生效（DDoS高防将业务流量转发到主源站IP地址）。'."\n"
                                                .'- **2**：表示备源站设置生效（DDoS高防将业务流量转发到备源站IP地址）。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'InstanceId' => [
                                            'description' => 'DDoS高防实例的ID。',
                                            'type' => 'string',
                                            'example' => 'ddosDip-sg-4hr2b3l****',
                                        ],
                                        'RealServer' => [
                                            'description' => '备源站IP地址。',
                                            'type' => 'string',
                                            'example' => '192.0.2.3',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"FrontendPort\\": 2020,\\n  \\"BakMode\\": \\"1\\",\\n  \\"RequestId\\": \\"6E46CC51-36BE-1100-B14C-DAF8381B8F73\\",\\n  \\"CurrentIndex\\": 1,\\n  \\"ForwardProtocol\\": \\"udp\\",\\n  \\"InstanceId\\": \\"ddosDip-sg-4hr2b3l****\\",\\n  \\"BackendPort\\": 2022,\\n  \\"PriRealServers\\": [\\n    {\\n      \\"FrontendPort\\": 2020,\\n      \\"Eip\\": \\"203.107.XX.XX\\",\\n      \\"Protocol\\": \\"udp\\",\\n      \\"CurrentIndex\\": 1,\\n      \\"InstanceId\\": \\"ddosDip-sg-4hr2b3l****\\",\\n      \\"RealServer\\": \\"192.0.2.1\\"\\n    }\\n  ],\\n  \\"SecRealServers\\": [\\n    {\\n      \\"FrontendPort\\": 2020,\\n      \\"Eip\\": \\"203.107.XX.XX\\",\\n      \\"Protocol\\": \\"udp\\",\\n      \\"CurrentIndex\\": 1,\\n      \\"InstanceId\\": \\"ddosDip-sg-4hr2b3l****\\",\\n      \\"RealServer\\": \\"192.0.2.3\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeLayer4RulePolicyResponse>\\r\\n\\t<RequestId>BB95151E-FCAD-1C3C-872F-77166555E396</RequestId>\\r\\n\\t<InstanceId>ddosDip-sg-4hr2b3l****</InstanceId>\\r\\n\\t<BackendPort>2022</BackendPort>\\r\\n\\t<FrontendPort>2020</FrontendPort>\\r\\n\\t<CurrentIndex>1</CurrentIndex>\\r\\n\\t<bakMode>1</bakMode>\\r\\n\\t<ForwardProtocol>udp</ForwardProtocol>\\r\\n\\t<PriRealServers>\\r\\n\\t\\t<RealServer>192.0.2.1</RealServer>\\r\\n\\t\\t<InstanceId>ddosDip-sg-4hr2b3l****</InstanceId>\\r\\n\\t\\t<FrontendPort>2020</FrontendPort>\\r\\n\\t\\t<CurrentIndex>1</CurrentIndex>\\r\\n\\t\\t<Protocol>udp</Protocol>\\r\\n\\t\\t<Eip>203.107.XX.XX</Eip>\\r\\n\\t</PriRealServers>\\r\\n\\t<PriRealServers>\\r\\n\\t\\t<RealServer>192.0.2.2</RealServer>\\r\\n\\t\\t<InstanceId>ddosDip-sg-4hr2b3l****</InstanceId>\\r\\n\\t\\t<FrontendPort>2020</FrontendPort>\\r\\n\\t\\t<CurrentIndex>1</CurrentIndex>\\r\\n\\t\\t<Protocol>udp</Protocol>\\r\\n\\t\\t<Eip>203.107.XX.XX</Eip>\\r\\n\\t</PriRealServers>\\r\\n\\t<SecRealServers>\\r\\n\\t\\t<RealServer>192.0.2.3</RealServer>\\r\\n\\t\\t<InstanceId>ddosDip-sg-4hr2b3l****</InstanceId>\\r\\n\\t\\t<FrontendPort>2020</FrontendPort>\\r\\n\\t\\t<CurrentIndex>1</CurrentIndex>\\r\\n\\t\\t<Protocol>udp</Protocol>\\r\\n\\t\\t<Eip>203.107.XX.XX</Eip>\\r\\n\\t</SecRealServers>\\r\\n\\t<SecRealServers>\\r\\n\\t\\t<RealServer>192.0.2.4</RealServer>\\r\\n\\t\\t<InstanceId>ddosDip-sg-4hr2b3l****</InstanceId>\\r\\n\\t\\t<FrontendPort>2020</FrontendPort>\\r\\n\\t\\t<CurrentIndex>1</CurrentIndex>\\r\\n\\t\\t<Protocol>udp</Protocol>\\r\\n\\t\\t<Eip>203.107.XX.XX</Eip>\\r\\n\\t</SecRealServers>\\r\\n</DescribeLayer4RulePolicyResponse>","errorExample":""}]',
            'title' => '查询端口转发规则的回源设置',
            'summary' => '查询端口转发规则的回源设置。',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~157269~~)。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeInstanceExt' => [
            'summary' => '查询DDoS高防实例的扩展信息。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS高防实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIds](~~157459~~)查询所有DDoS高防实例的ID信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ddoscoo-cn-i7m25564****',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询请求时返回的页码。例如，查询第一页的返回结果，则填写**1**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页包含实例的数量。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
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
                                'example' => 'CF33B4C3-196E-4015-AADD-5CAD00057B80',
                            ],
                            'InstanceExtSpecs' => [
                                'description' => 'DDoS高防实例的扩展信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'ddoscoo-cn-i7m25564****'."\n",
                                        ],
                                        'NormalBandwidth' => [
                                            'description' => '业务带宽。单位：Mbps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '100',
                                        ],
                                        'FunctionVersion' => [
                                            'description' => '功能版本，取值：'."\n"
                                                ."\n"
                                                .'- **0**：标准版'."\n"
                                                .'- **1**：增强版',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'ServicePartner' => [
                                            'description' => '中国内地实例的线路资源。',
                                            'type' => 'string',
                                            'example' => 'coop-line-001',
                                        ],
                                        'ProductPlan' => [
                                            'description' => '要查询的DDoS高防实例的类型。取值：'."\n"
                                                ."\n"
                                                .'- **0**：表示DDoS高防（非中国内地）保险版。'."\n"
                                                .'- **1**：表示DDoS高防（非中国内地）无忧版。'."\n"
                                                .'- **2**：表示DDoS高防（非中国内地）加速线路。'."\n"
                                                .'- **3**：表示DDoS高防（非中国内地）安全加速线路。'."\n"
                                                .'- **9**：表示DDoS高防（中国内地）专业版。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '实例总个数。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CF33B4C3-196E-4015-AADD-5CAD00057B80\\",\\n  \\"InstanceExtSpecs\\": [\\n    {\\n      \\"InstanceId\\": \\"ddoscoo-cn-i7m25564****\\\\n\\",\\n      \\"NormalBandwidth\\": 100,\\n      \\"FunctionVersion\\": 0,\\n      \\"ServicePartner\\": \\"coop-line-001\\",\\n      \\"ProductPlan\\": 0\\n    }\\n  ],\\n  \\"TotalCount\\": 10\\n}","type":"json"}]',
            'title' => '查询DDoS高防实例的扩展信息',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'ddoscoo.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'ddoscoo.ap-southeast-1.aliyuncs.com',
        ],
    ],
];
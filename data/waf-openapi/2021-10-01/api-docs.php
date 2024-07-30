<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'waf-openapi',
        'version' => '2021-10-01',
    ],
    'directories' => [
        [
            'id' => 192115,
            'title' => 'API安全',
            'type' => 'directory',
            'children' => [
                'DescribeApisecLogDeliveries',
                'DescribeApisecSlsLogStores',
                'ModifyApisecLogDeliveryStatus',
                'DescribeApisecSlsProjects',
                'ModifyApisecLogDelivery',
            ],
        ],
        [
            'id' => 168644,
            'title' => '实例信息',
            'type' => 'directory',
            'children' => [
                'CreatePostpaidInstance',
                'DescribeInstance',
            ],
        ],
        [
            'id' => 172907,
            'title' => '接入配置',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 190400,
                    'title' => '云产品接入',
                    'type' => 'directory',
                    'children' => [
                        'SyncProductInstance',
                        'DescribeCloudResources',
                        'DescribeProductInstances',
                        'DescribeResourceSupportRegions',
                        'DescribeResourceRegionId',
                        'DescribeResourceInstanceCerts',
                    ],
                ],
                [
                    'id' => 190401,
                    'title' => 'CNAME接入',
                    'type' => 'directory',
                    'children' => [
                        'CreateDomain',
                        'ModifyDomain',
                        'DeleteDomain',
                        'DescribeDomains',
                        'DescribeDomainDetail',
                        'DescribePunishedDomains',
                        'ModifyDomainPunishStatus',
                        'DescribeCertDetail',
                        'DescribeCerts',
                        'DescribeDomainDNSRecord',
                        'DescribeWafSourceIpSegment',
                        'DescribeResourcePort',
                    ],
                ],
                [
                    'id' => 190402,
                    'title' => '混合云接入',
                    'type' => 'directory',
                    'children' => [
                        'DescribeHybridCloudResources',
                    ],
                ],
            ],
        ],
        [
            'id' => 168226,
            'title' => '防护配置',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 173021,
                    'title' => '防护对象',
                    'type' => 'directory',
                    'children' => [
                        'CreateDefenseResourceGroup',
                        'ModifyDefenseResourceGroup',
                        'DeleteDefenseResourceGroup',
                        'DescribeDefenseResourceGroup',
                        'DescribeDefenseResourceGroups',
                        'DescribeDefenseResourceGroupNames',
                        'DescribeDefenseResource',
                        'DescribeDefenseResources',
                        'DescribeDefenseResourceNames',
                        'ModifyDefenseResourceXff',
                    ],
                ],
                [
                    'id' => 172965,
                    'title' => '防护规则',
                    'type' => 'directory',
                    'children' => [
                        'ModifyDefenseRuleCache',
                        'DescribeDefenseResourceTemplates',
                        'DescribeDefenseTemplateValidGroups',
                        'DescribeDefenseTemplates',
                        'CreateDefenseTemplate',
                        'CopyDefenseTemplate',
                        'ModifyDefenseTemplate',
                        'DescribeDefenseTemplate',
                        'ModifyDefenseTemplateStatus',
                        'DeleteDefenseTemplate',
                        'CreateDefenseRule',
                        'ModifyDefenseRule',
                        'ModifyDefenseRuleStatus',
                        'DeleteDefenseRule',
                        'DescribeDefenseRule',
                        'DescribeDefenseRules',
                        'ModifyTemplateResources',
                        'DescribeTemplateResources',
                        'DescribeTemplateResourceCount',
                        'DescribeRuleGroups',
                    ],
                ],
                [
                    'id' => 172966,
                    'title' => '重保场景',
                    'type' => 'directory',
                    'children' => [
                        'CreateMajorProtectionBlackIp',
                        'ModifyMajorProtectionBlackIp',
                        'DeleteMajorProtectionBlackIp',
                        'ClearMajorProtectionBlackIp',
                        'DescribeMajorProtectionBlackIps',
                    ],
                ],
            ],
        ],
        [
            'id' => 172673,
            'title' => '报表信息',
            'type' => 'directory',
            'children' => [
                'DescribeFlowChart',
                'DescribePeakTrend',
                'DescribeResponseCodeTrendGraph',
                'DescribeVisitUas',
                'DescribeVisitTopIp',
                'DescribeRuleHitsTopResource',
                'DescribeRuleHitsTopRuleId',
                'DescribeRuleHitsTopTuleType',
                'DescribeRuleHitsTopUrl',
                'DescribeRuleHitsTopClientIp',
                'DescribeFlowTopResource',
                'DescribeRuleHitsTopUa',
                'DescribeFlowTopUrl',
            ],
        ],
        [
            'id' => 172961,
            'title' => '日志配置',
            'type' => 'directory',
            'children' => [
                'DescribeUserSlsLogRegions',
                'DescribeUserWafLogStatus',
                'DescribeSlsAuthStatus',
                'DescribeSlsLogStoreStatus',
                'DescribeSlsLogStore',
                'ModifyResourceLogStatus',
                'DescribeResourceLogStatus',
            ],
        ],
        [
            'id' => 181530,
            'title' => '混合云集群管理',
            'type' => 'directory',
            'children' => [
                'ModifyHybridCloudClusterBypassStatus',
                'DescribeHybridCloudUser',
                'DescribeHybridCloudGroups',
            ],
        ],
        [
            'id' => 190420,
            'title' => '多账号统一管理',
            'type' => 'directory',
            'children' => [
                'CreateMemberAccounts',
                'ModifyMemberAccount',
                'DeleteMemberAccount',
                'DescribeAccountDelegatedStatus',
                'DescribeMemberAccounts',
            ],
        ],
        [
            'id' => 191572,
            'title' => '标签管理',
            'type' => 'directory',
            'children' => [
                'TagResources',
                'ListTagKeys',
                'UntagResources',
                'ListTagResources',
                'ListTagValues',
            ],
        ],
        [
            'id' => 192986,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'DescribeApisecSensitiveDomainStatistic',
                'DeleteApisecEvent',
                'DescribeApisecEventDomainStatistic',
                'DeleteApisecAbnormal',
                'DescribeApisecAbnormalDomainStatistic',
                'DescribeApisecAssetTrend',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'DescribeApisecLogDeliveries' => [
            'summary' => '查询API安全日志订阅列表。',
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
                'abilityTreeCode' => '224407',
                'abilityTreeNodes' => [
                    'FEATUREwafJYSA2F',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)获取当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3_public_cn-uqm2z****0a'."\n",
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2EFCFE18-78F8-5079-B312-07***48B',
                            ],
                            'DeliveryConfigs' => [
                                'description' => '日志订阅列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '日志订阅信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AssertKey' => [
                                            'description' => '日志订阅类型。取值：'."\n"
                                                ."\n"
                                                .'- **risk**：表示风险信息。'."\n"
                                                .'- **event**：表示攻击事件信息。'."\n"
                                                .'- **asset**：表示资产信息。',
                                            'type' => 'string',
                                            'example' => 'risk',
                                        ],
                                        'LogRegionId' => [
                                            'description' => '日志存储地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'ProjectName' => [
                                            'description' => '日志服务SLS的Project的名称。',
                                            'type' => 'string',
                                            'example' => 'apisec-project-14316572********',
                                        ],
                                        'LogStoreName' => [
                                            'description' => '日志服务SLS日志库LogStore的名称。',
                                            'type' => 'string',
                                            'example' => 'apisec-logstore***'."\n",
                                        ],
                                        'Status' => [
                                            'description' => 'API安全日志订阅开启状态。取值：'."\n"
                                                ."\n"
                                                .'- **true**：表示开启。'."\n"
                                                ."\n"
                                                .'- **false**：表示关闭。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2EFCFE18-78F8-5079-B312-07***48B\\",\\n  \\"DeliveryConfigs\\": [\\n    {\\n      \\"AssertKey\\": \\"risk\\",\\n      \\"LogRegionId\\": \\"cn-hangzhou\\",\\n      \\"ProjectName\\": \\"apisec-project-14316572********\\",\\n      \\"LogStoreName\\": \\"apisec-logstore***\\\\n\\",\\n      \\"Status\\": true\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询API安全日志订阅列表',
        ],
        'DescribeApisecSlsLogStores' => [
            'summary' => '查询日志服务SLS中以apisec-开头的LogStore列表。',
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
                'abilityTreeCode' => '224413',
                'abilityTreeNodes' => [
                    'FEATUREwafJYSA2F',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)，查看当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3_public_cn-uqm2z****0a',
                    ],
                ],
                [
                    'name' => 'LogRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日志存储地域ID。'."\n"
                            ."\n\n"
                            .'> 您可以通过调用[DescribeUserSlsLogRegions](~~2712598~~)接口查询用户可用的日志存储地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日志服务SLS的Project的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'apisec-project-14316572********',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D7861F61-5B61-46CE-A47C-6B19****5EB0'."\n",
                            ],
                            'LogStores' => [
                                'description' => '日志服务SLS的日志库LogStore列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '日志服务SLS的日志库LogStore名称。',
                                    'type' => 'string',
                                    'example' => 'apisec-logstore***',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19****5EB0\\\\n\\",\\n  \\"LogStores\\": [\\n    \\"apisec-logstore***\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询日志服务SLS的LogStore列表',
        ],
        'ModifyApisecLogDeliveryStatus' => [
            'summary' => '修改API安全日志订阅状态。',
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
                'abilityTreeCode' => '225244',
                'abilityTreeNodes' => [
                    'FEATUREwafJYSA2F',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3_public_cn-uqm2z****0a',
                    ],
                ],
                [
                    'name' => 'AssertKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日志订阅类型。取值：'."\n"
                            ."\n"
                            .'- **risk**：表示风险信息。'."\n"
                            .'- **event**：表示攻击事件信息。'."\n"
                            .'- **asset**：表示资产信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'risk',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API安全日志订阅开启状态。取值：'."\n"
                            ."\n"
                            .'- **true**：表示开启。'."\n"
                            ."\n"
                            .'- **false**：表示关闭。',
                        'type' => 'boolean',
                        'required' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F35F45B0-5D6B-4238-BE02-A62D****E840',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F35F45B0-5D6B-4238-BE02-A62D****E840\\"\\n}","type":"json"}]',
            'title' => '修改API安全日志订阅状态',
        ],
        'DescribeApisecSlsProjects' => [
            'summary' => '查询日志服务SLS中以apisec-开头的Project列表。',
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
                'abilityTreeCode' => '224410',
                'abilityTreeNodes' => [
                    'FEATUREwafJYSA2F',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)获取当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3_public_cn-uqm2z****0a',
                    ],
                ],
                [
                    'name' => 'LogRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日志存储地域ID。'."\n"
                            ."\n\n"
                            .'> 您可以通过调用[DescribeUserSlsLogRegions](~~2712598~~)接口查询用户可用的日志存储地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D7861F61-5B61-46CE-A47C-6B19****5EB0',
                            ],
                            'Projects' => [
                                'description' => '日志服务SLS的Project列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '日志服务SLS的Project名称。',
                                    'type' => 'string',
                                    'example' => 'apisec-project-14316572********'."\n",
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19****5EB0\\",\\n  \\"Projects\\": [\\n    \\"apisec-project-14316572********\\\\n\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询日志服务SLS的Project列表',
        ],
        'ModifyApisecLogDelivery' => [
            'summary' => '修改API安全日志订阅。',
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
                'abilityTreeCode' => '224402',
                'abilityTreeNodes' => [
                    'FEATUREwafJYSA2F',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3_public_cn-uqm2z****0a',
                    ],
                ],
                [
                    'name' => 'AssertKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日志订阅类型。取值：'."\n"
                            ."\n"
                            .'- **risk**：表示风险信息。'."\n"
                            .'- **event**：表示攻击事件信息。'."\n"
                            .'- **asset**：表示资产信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'risk',
                    ],
                ],
                [
                    'name' => 'LogRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日志存储地域ID。'."\n"
                            ."\n\n"
                            .'> 您可以通过调用[DescribeUserSlsLogRegions](~~2712598~~)接口查询用户可用的日志存储地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日志服务SLS的Project的名称。'."\n"
                            ."\n"
                            .'> API安全日志仅支持投递到以apisec-开头的Project中。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'apisec-project-14316572********',
                    ],
                ],
                [
                    'name' => 'LogStoreName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日志服务SLS日志库LogStore的名称。'."\n"
                            ."\n"
                            .'> API安全日志仅支持投递到以apisec-开头的LogStore中。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'apisec-logstore***',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F35F45B0-5D6B-4238-BE02-A62D****E840',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F35F45B0-5D6B-4238-BE02-A62D****E840\\"\\n}","type":"json"}]',
            'title' => '修改API安全日志订阅',
        ],
        'CreatePostpaidInstance' => [
            'summary' => '创建Web应用防火墙3.0（按量付费）实例。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm4gh****wela',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '73A4E786-8235-50C0-9631-87C8****4A36',
                            ],
                            'InstanceId' => [
                                'title' => '实例ID',
                                'description' => 'WAF实例ID',
                                'type' => 'string',
                                'example' => 'waf_v2_public_cn-x0r****gr1i',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"73A4E786-8235-50C0-9631-87C8****4A36\\",\\n  \\"InstanceId\\": \\"waf_v2_public_cn-x0r****gr1i\\"\\n}","type":"json"}]',
            'title' => '创建Web应用防火墙3.0（按量付费）实例',
        ],
        'DescribeInstance' => [
            'summary' => '获取当前阿里云账号下WAF实例的详情。',
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
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '66A98669-CC6E-4F3E-80A6-3014697B11AE',
                            ],
                            'InstanceId' => [
                                'title' => '实例ID',
                                'description' => 'WAF实例ID。',
                                'type' => 'string',
                                'example' => 'waf-cn-xxx',
                            ],
                            'RegionId' => [
                                'title' => 'RegionId',
                                'description' => 'WAF实例所属地域。取值：'."\n"
                                    ."\n"
                                    .'- **cn-hangzhou**：表示中国内地。'."\n"
                                    ."\n"
                                    .'- **ap-southeast-1**：表示非中国内地。',
                                'type' => 'string',
                                'example' => 'cn-hangzhou',
                            ],
                            'Edition' => [
                                'title' => '套餐',
                                'description' => 'WAF版本。',
                                'type' => 'string',
                                'example' => 'default_version',
                            ],
                            'Details' => [
                                'title' => '实例详情',
                                'description' => '实例详情。',
                                'type' => 'object',
                                'properties' => [
                                    'Gslb' => [
                                        'title' => 'Gslb',
                                        'description' => '是否支持GSLB。取值：'."\n"
                                            .'- **true**：表示支持。'."\n"
                                            ."\n"
                                            .'- **false**：表示不支持。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'Ipv6' => [
                                        'title' => 'Ipv6',
                                        'description' => '是否支持IPv6。取值：'."\n"
                                            .'- **true**：表示支持。'."\n"
                                            ."\n"
                                            .'- **false**：表示不支持。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'ExclusiveIp' => [
                                        'title' => '独享IP',
                                        'description' => '是否支持独享IP。取值：'."\n"
                                            .'- **true**：表示支持。'."\n"
                                            ."\n"
                                            .'- **false**：表示不支持。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'BackendMaxCount' => [
                                        'title' => '最大回源数',
                                        'description' => '可配置的回源IP的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'CnameResourceMaxCount' => [
                                        'title' => '最大可添加CNAME数',
                                        'description' => '可添加的CNAME的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1000',
                                    ],
                                    'LogService' => [
                                        'title' => '日志服务是否开启',
                                        'description' => '是否支持日志服务。取值：'."\n"
                                            .'- **true**：表示支持。'."\n"
                                            ."\n"
                                            .'- **false**：表示不支持。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'DefenseObjectMaxCount' => [
                                        'title' => '最大防护对象数量',
                                        'description' => '可配置的防护对象的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20,000',
                                    ],
                                    'DefenseGroupMaxCount' => [
                                        'title' => '最大防护组数量',
                                        'description' => '可配置的防护组的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'DefenseObjectInGroupMaxCount' => [
                                        'title' => '一个防护组内最大包含对象数量',
                                        'description' => '一个防护组内包含的防护对象的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'DefenseObjectInTemplateMaxCount' => [
                                        'title' => '一个模板内关联对象的最大数量',
                                        'description' => '一个模板内关联的防护对象的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'BaseWafGroup' => [
                                        'title' => '基础防护',
                                        'description' => '是否支持基础防护规则。取值：'."\n"
                                            .'- **true**：表示支持。'."\n"
                                            ."\n"
                                            .'- **false**：表示不支持。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'BaseWafGroupRuleTemplateMaxCount' => [
                                        'title' => '基础防护规则最大数量',
                                        'description' => '可配置的基础防护规则模板的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'BaseWafGroupRuleInTemplateMaxCount' => [
                                        'title' => '基础防护规则',
                                        'description' => '单个基础防护规则模板中包含的防护规则的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'Whitelist' => [
                                        'title' => '是否支持白名单',
                                        'description' => '是否支持IP白名单。取值：'."\n"
                                            .'- **true**：表示支持。'."\n"
                                            ."\n"
                                            .'- **false**：表示不支持。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'WhitelistTemplateMaxCount' => [
                                        'title' => '白名单模板数',
                                        'description' => '可配置的白名单模板的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'WhitelistRuleInTemplateMaxCount' => [
                                        'title' => '白名单模板包含规则数',
                                        'description' => '单个白名单模板中包含的防护规则的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'WhitelistRuleCondition' => [
                                        'title' => '白名单规则匹配条件',
                                        'description' => '白名单规则匹配字段。更多信息，请参见[CreateDefenseRule](~~CreateDefenseRule~~)中**白名单规则（whitelist）**的**conditions**参数描述。',
                                        'type' => 'string',
                                        'example' => 'URL',
                                    ],
                                    'WhitelistLogical' => [
                                        'title' => '白名单规则匹配条件',
                                        'description' => '白名单规则逻辑符。更多信息，请参见[CreateDefenseRule](~~CreateDefenseRule~~)中**白名单规则（whitelist）**的**conditions**参数描述。',
                                        'type' => 'string',
                                        'example' => 'contain',
                                    ],
                                    'IpBlacklist' => [
                                        'title' => '支持IP黑名单',
                                        'description' => '是否支持IP黑名单。取值：'."\n"
                                            .'- **true**：表示支持。'."\n"
                                            ."\n"
                                            .'- **false**：表示不支持。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'IpBlacklistTemplateMaxCount' => [
                                        'title' => '/黑名单模板数',
                                        'description' => '可配置的黑名单模板的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'IpBlacklistRuleInTemplateMaxCount' => [
                                        'title' => 'IP黑名单模板包含规则数',
                                        'description' => '单个黑名单模板中包含的防护规则的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'IpBlacklistIpInRuleMaxCount' => [
                                        'title' => 'IP黑名单规则包含IP数',
                                        'description' => '黑名单规则中可添加IP的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '200',
                                    ],
                                    'CustomRule' => [
                                        'title' => '支持自定义规则',
                                        'description' => '是否支持自定义规则。取值：'."\n"
                                            .'- **true**：表示支持。'."\n"
                                            ."\n"
                                            .'- **false**：表示不支持。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'CustomRuleTemplateMaxCount' => [
                                        'title' => '自定义规则模板数',
                                        'description' => '可配置的自定义规则模板的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'CustomRuleInTemplateMaxCount' => [
                                        'title' => '自定义规则模板包含规则数',
                                        'description' => '单个自定义规则模板中包含的防护规则的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'CustomRuleCondition' => [
                                        'title' => '自定义规则匹配条件',
                                        'description' => '自定义规则匹配条件。更多信息，请参见[CreateDefenseRule](~~CreateDefenseRule~~)中**自定义规则（custom_acl）**的**conditions**参数描述。',
                                        'type' => 'string',
                                        'example' => 'URL',
                                    ],
                                    'CustomRuleRatelimitor' => [
                                        'title' => '自定义规则限速对象',
                                        'description' => '自定义规则限速对象。',
                                        'type' => 'string',
                                        'example' => 'header',
                                    ],
                                    'CustomRuleAction' => [
                                        'title' => '包含字符串',
                                        'description' => '自定义规则包含的字符串。',
                                        'type' => 'string',
                                        'example' => 'block',
                                    ],
                                    'AntiScan' => [
                                        'title' => '支持扫描防护',
                                        'description' => '是否支持扫描防护。取值：'."\n"
                                            .'- **true**：表示支持。'."\n"
                                            ."\n"
                                            .'- **false**：表示不支持。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'AntiScanTemplateMaxCount' => [
                                        'title' => '扫描防护模板数',
                                        'description' => '可配置的扫描防护模板的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'CustomResponse' => [
                                        'title' => '支持自定义响应',
                                        'description' => '是否支持自定义响应。取值：'."\n"
                                            .'- **true**：表示支持。'."\n"
                                            ."\n"
                                            .'- **false**：表示不支持。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'CustomResponseTemplateMaxCount' => [
                                        'title' => '自定义响应模板数',
                                        'description' => '可配置的自定义响应模板的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'CustomResponseRuleInTemplateMaxCount' => [
                                        'title' => '自定义响应模板包含规则数',
                                        'description' => '单个自定义响应模板中包含的防护规则的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'HttpPorts' => [
                                        'title' => 'HTTP端口可用范围',
                                        'description' => 'HTTP端口可用范围。更多信息，请参见[WAF支持的端口范围](~~385578~~)。',
                                        'type' => 'string',
                                        'example' => '80',
                                    ],
                                    'HttpsPorts' => [
                                        'title' => 'HTTPS端口可用范围',
                                        'description' => 'HTTPS端口可用范围。更多信息，请参见[WAF支持的端口范围](~~385578~~)。',
                                        'type' => 'string',
                                        'example' => '443',
                                    ],
                                    'AclRuleMaxIpCount' => [
                                        'description' => '匹配内容中可添加IP的最大数量。关于匹配内容的更多说明，请参见[匹配条件说明](~~374354~~)。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'MajorProtection' => [
                                        'title' => '是否支持重保',
                                        'description' => '是否支持重保场景防护。取值：'."\n"
                                            .'- **true**：表示支持。'."\n"
                                            ."\n"
                                            .'- **false**：表示不支持。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'MajorProtectionTemplateMaxCount' => [
                                        'title' => '重保模板的最大数量',
                                        'description' => '可配置的重保场景防护模板的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'VastIpBlacklistMaxCount' => [
                                        'title' => '海量IP的最大数量（单用户）',
                                        'description' => '单用户可配置的IP黑名单的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '50,000',
                                    ],
                                    'VastIpBlacklistInFileMaxCount' => [
                                        'title' => '海量IP单次上传文件IP的最大数量',
                                        'description' => '单次批量导入IP黑名单的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2,000',
                                    ],
                                    'VastIpBlacklistInOperationMaxCount' => [
                                        'title' => '海量IP单次页面操作的最大数量',
                                        'description' => '单次页面添加IP黑名单的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '500',
                                    ],
                                    'Bot' => [
                                        'description' => '是否支持Bot管理。取值：'."\n"
                                            .'- **true**：表示支持。'."\n"
                                            .'- **false**：表示不支持。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'Tamperproof' => [
                                        'description' => '是否支持网页防篡改。取值：'."\n"
                                            .'- **true**：表示支持。'."\n"
                                            .'- **false**：表示不支持。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'Dlp' => [
                                        'description' => '是否支持信息泄露防护。取值：'."\n"
                                            .'- **true**：表示支持。'."\n"
                                            .'- **false**：表示不支持。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'BotTemplateMaxCount' => [
                                        'description' => '可配置的Bot管理防护模板的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '50',
                                    ],
                                    'TamperproofTemplateMaxCount' => [
                                        'description' => '可配置的网页防篡改防护模板的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '50',
                                    ],
                                    'TamperproofRuleInTemplateMaxCount' => [
                                        'description' => '单个网页防篡改模板中包含的防护规则的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '50',
                                    ],
                                    'DlpTemplateMaxCount' => [
                                        'description' => '可配置的信息泄露防护模板的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '50',
                                    ],
                                    'DlpRuleInTemplateMaxCount' => [
                                        'description' => '单个信息泄露防护模板中包含的防护规则的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '50',
                                    ],
                                    'BotApp' => [
                                        'description' => '是否支持App防爬场景化防护。取值：'."\n"
                                            .'- **true**：表示支持。'."\n"
                                            .'- **false**：表示不支持。',
                                        'type' => 'string',
                                        'example' => 'true',
                                    ],
                                    'BotWeb' => [
                                        'description' => '是否支持网页防爬场景化防护。取值：'."\n"
                                            .'- **true**：表示支持。'."\n"
                                            .'- **false**：表示不支持。',
                                        'type' => 'string',
                                        'example' => 'true',
                                    ],
                                ],
                            ],
                            'EndTime' => [
                                'description' => '实例到期时间。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '4809859200000',
                            ],
                            'Status' => [
                                'description' => '实例的当前状态，取值：'."\n"
                                    .'- **1**：表示正常。'."\n"
                                    .'- **2**：表示到期。'."\n"
                                    .'- **3**：表示释放。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PayType' => [
                                'description' => '实例的付费类型。取值：'."\n"
                                    ."\n"
                                    .'- **POSTPAY**：表示已开通按量付费WAF实例。'."\n"
                                    ."\n"
                                    .'- **PREPAY**：表示已开通包年包月WAF实例。'."\n",
                                'type' => 'string',
                                'example' => 'POSTPAY',
                            ],
                            'InDebt' => [
                                'description' => '当前实例是否欠费：'."\n"
                                    .'- **0**：表示正常。'."\n"
                                    .'- **1**：表示已欠费。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'StartTime' => [
                                'description' => '购买时间，格式为Unix时间戳（UTC时间），单位为毫秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1668496310000',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"66A98669-CC6E-4F3E-80A6-3014697B11AE\\",\\n  \\"InstanceId\\": \\"waf-cn-xxx\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"Edition\\": \\"default_version\\",\\n  \\"Details\\": {\\n    \\"Gslb\\": true,\\n    \\"Ipv6\\": true,\\n    \\"ExclusiveIp\\": true,\\n    \\"BackendMaxCount\\": 20,\\n    \\"CnameResourceMaxCount\\": 1000,\\n    \\"LogService\\": true,\\n    \\"DefenseObjectMaxCount\\": 0,\\n    \\"DefenseGroupMaxCount\\": 100,\\n    \\"DefenseObjectInGroupMaxCount\\": 100,\\n    \\"DefenseObjectInTemplateMaxCount\\": 100,\\n    \\"BaseWafGroup\\": true,\\n    \\"BaseWafGroupRuleTemplateMaxCount\\": 20,\\n    \\"BaseWafGroupRuleInTemplateMaxCount\\": 100,\\n    \\"Whitelist\\": true,\\n    \\"WhitelistTemplateMaxCount\\": 20,\\n    \\"WhitelistRuleInTemplateMaxCount\\": 100,\\n    \\"WhitelistRuleCondition\\": \\"URL\\",\\n    \\"WhitelistLogical\\": \\"contain\\",\\n    \\"IpBlacklist\\": true,\\n    \\"IpBlacklistTemplateMaxCount\\": 20,\\n    \\"IpBlacklistRuleInTemplateMaxCount\\": 100,\\n    \\"IpBlacklistIpInRuleMaxCount\\": 200,\\n    \\"CustomRule\\": true,\\n    \\"CustomRuleTemplateMaxCount\\": 20,\\n    \\"CustomRuleInTemplateMaxCount\\": 100,\\n    \\"CustomRuleCondition\\": \\"URL\\",\\n    \\"CustomRuleRatelimitor\\": \\"header\\",\\n    \\"CustomRuleAction\\": \\"block\\",\\n    \\"AntiScan\\": true,\\n    \\"AntiScanTemplateMaxCount\\": 20,\\n    \\"CustomResponse\\": true,\\n    \\"CustomResponseTemplateMaxCount\\": 20,\\n    \\"CustomResponseRuleInTemplateMaxCount\\": 100,\\n    \\"HttpPorts\\": \\"80\\",\\n    \\"HttpsPorts\\": \\"443\\",\\n    \\"AclRuleMaxIpCount\\": 100,\\n    \\"MajorProtection\\": true,\\n    \\"MajorProtectionTemplateMaxCount\\": 20,\\n    \\"VastIpBlacklistMaxCount\\": 0,\\n    \\"VastIpBlacklistInFileMaxCount\\": 0,\\n    \\"VastIpBlacklistInOperationMaxCount\\": 500,\\n    \\"Bot\\": true,\\n    \\"Tamperproof\\": true,\\n    \\"Dlp\\": true,\\n    \\"BotTemplateMaxCount\\": 50,\\n    \\"TamperproofTemplateMaxCount\\": 50,\\n    \\"TamperproofRuleInTemplateMaxCount\\": 50,\\n    \\"DlpTemplateMaxCount\\": 50,\\n    \\"DlpRuleInTemplateMaxCount\\": 50,\\n    \\"BotApp\\": \\"true\\",\\n    \\"BotWeb\\": \\"true\\"\\n  },\\n  \\"EndTime\\": 4809859200000,\\n  \\"Status\\": 1,\\n  \\"PayType\\": \\"POSTPAY\\",\\n  \\"InDebt\\": \\"1\\",\\n  \\"StartTime\\": 1668496310000\\n}","type":"json"}]',
            'title' => '获取WAF实例详情',
        ],
        'SyncProductInstance' => [
            'summary' => '同步用户的ECS和CLB资产。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-zsk****fb09',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm4co****f5qa',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
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
                                'example' => '45BA2382-7C3F-5B29-9A83-C3BCE586****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"45BA2382-7C3F-5B29-9A83-C3BCE586****\\"\\n}","type":"json"}]',
            'title' => '透明接入同步用户的ECS和CLB资产',
            'description' => '调用接口后系统会异步执行同步，请使用[DescribeProductInstances](~~2743168~~)接口查询同步结果。',
        ],
        'DescribeCloudResources' => [
            'summary' => '查询接入到WAF的云产品列表情况。',
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
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-lbj****cn0c',
                        'default' => '',
                    ],
                ],
                [
                    'name' => 'ResourceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源的实例ID',
                        'description' => '资源的实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'alb-43glijk0fr****gths',
                    ],
                ],
                [
                    'name' => 'ResourceName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源的实例名称',
                        'description' => '资源的实例名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'alb-name',
                    ],
                ],
                [
                    'name' => 'ResourceRegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源归属RegionId',
                        'description' => '资源归属地域ID，取值请查看返回参数补充说明。'."\n"
                            ."\n"
                            .'> 每个产品支持的地域不同，产品筛选字段有值时，需要参考地域支持的产品，否则可能导致筛选失败。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'ResourceProduct',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源所属产品',
                        'description' => '资源所属云产品。取值：'."\n"
                            ."\n"
                            .'- **alb**：表示ALB产品。'."\n"
                            ."\n"
                            .'- **mse**：表示MSE产品。'."\n"
                            ."\n"
                            .'- **fc**：表示FC产品。'."\n"
                            ."\n"
                            .'- **sae**：表示SAE产品。'."\n"
                            ."\n"
                            .'> 每个产品支持的地域不同，产品筛选字段有值时，需要参考地域支持的产品，否则可能导致筛选失败。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'alb',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询请求时返回的页码。默认值为**1**。',
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
                        'maximum' => '100',
                        'minimum' => '10',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'ResourceRouteName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源的路由名称，当MSE接入可以使用该字段查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mse-default-traffic',
                    ],
                ],
                [
                    'name' => 'ResourceDomain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源的域名名称，当FC，SAE接入可以使用该字段查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'fc-domain-test',
                    ],
                ],
                [
                    'name' => 'ResourceFunction',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源的函数名称，当FC接入可以使用该字段查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'fc-test',
                    ],
                ],
                [
                    'name' => 'OwnerUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源归属用户UID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '11769793******',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm4gh****wela',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'description' => '云产品接入列表。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '查询到的云产品接入总数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '121',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C327F81A-CCE2-5B21-817C-F93E29C5****',
                            ],
                            'CloudResources' => [
                                'description' => '云产品接入列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '云产品接入信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ResourceRouteName' => [
                                            'description' => '资源的路由名称，当mse接入时，该字段有值。',
                                            'type' => 'string',
                                            'example' => 'test-route-name',
                                        ],
                                        'ResourceRegionId' => [
                                            'title' => 'RegionId',
                                            'description' => '资源归属地。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'ResourceFunction' => [
                                            'description' => '资源的函数名称，当FC接入时，该字段有值。',
                                            'type' => 'string',
                                            'example' => 'test-resource-function',
                                        ],
                                        'ResourceName' => [
                                            'title' => '实例名称',
                                            'description' => '实例名称',
                                            'type' => 'string',
                                            'example' => 'test-resource-name',
                                        ],
                                        'ResourceInstance' => [
                                            'title' => '实例ID',
                                            'description' => '资源实例ID。',
                                            'type' => 'string',
                                            'example' => 'alb-ffff****',
                                        ],
                                        'ResourceProduct' => [
                                            'description' => '资源所属云产品。取值：'."\n"
                                                ."\n"
                                                .'- **alb**：表示ALB产品。'."\n"
                                                ."\n"
                                                .'- **mse**：表示MSE产品。'."\n"
                                                ."\n"
                                                .'- **fc**：表示FC产品。'."\n"
                                                ."\n"
                                                .'- **sae**：表示SAE产品。',
                                            'type' => 'string',
                                            'example' => 'alb',
                                        ],
                                        'ResourceService' => [
                                            'description' => '资源的服务名称，当FC接入时，该字段有值。',
                                            'type' => 'string',
                                            'example' => 'test-resource-service',
                                        ],
                                        'ResourceDomain' => [
                                            'description' => '资源的域名名称，当FC，SAE接入时，该字段有值。',
                                            'type' => 'string',
                                            'example' => 'test-resource-domain',
                                        ],
                                        'OwnerUserId' => [
                                            'description' => '资源归属用户UID。',
                                            'type' => 'string',
                                            'example' => '11769793******',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 121,\\n  \\"RequestId\\": \\"C327F81A-CCE2-5B21-817C-F93E29C5****\\",\\n  \\"CloudResources\\": [\\n    {\\n      \\"ResourceRouteName\\": \\"test-route-name\\",\\n      \\"ResourceRegionId\\": \\"cn-hangzhou\\",\\n      \\"ResourceFunction\\": \\"test-resource-function\\",\\n      \\"ResourceName\\": \\"test-resource-name\\",\\n      \\"ResourceInstance\\": \\"alb-ffff****\\",\\n      \\"ResourceProduct\\": \\"alb\\",\\n      \\"ResourceService\\": \\"test-resource-service\\",\\n      \\"ResourceDomain\\": \\"test-resource-domain\\",\\n      \\"OwnerUserId\\": \\"11769793******\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询云产品接入WAF的实例列表',
            'requestParamsDescription' => '| 地域ID         | 地域名称       | 支持的产品      |'."\n"
                .'| ------------- | ------------- | ------------- |'."\n"
                .'|cn-hangzhou| 华东1（杭州）| SAE,ALB,FC,MSE|'."\n"
                .'|cn-shanghai| 华东2（上海）| SAE,ALB,FC,MSE|'."\n"
                .'|cn-shenzhen| 华南1（深圳）| SAE,ALB,FC,MSE|'."\n"
                .'|cn-beijing| 华北2（北京）| SAE,ALB,FC,MSE|'."\n"
                .'|cn-zhangjiakou| 华北3（张家口）| SAE,ALB,FC,MSE|'."\n"
                .'|cn-chengdu| 西南1（成都）| ALB|'."\n"
                .'|cn-qingdao| 华北1（青岛）| ALB|'."\n"
                .'|cn-guangzhou| 华南3（广州）| ALB|'."\n"
                .'|cn-wulanchabu| 华北6（乌兰察布）| ALB|'."\n"
                .'|cn-hongkong| 中国香港| ALB,MSE|'."\n"
                .'|cn-fuzhou| 华东6（福州-本地地域）| ALB|'."\n"
                .'|ap-southeast-6| 菲律宾（马尼拉）| ALB|'."\n"
                .'|ap-southeast-5| 印度尼西亚（雅加达）| ALB|'."\n"
                .'|ap-northeast-1| 日本（东京）| ALB|'."\n"
                .'|ap-southeast-3| 马来西亚（吉隆坡）| ALB,MSE|'."\n"
                .'|ap-southeast-2| 澳大利亚（悉尼）| ALB|'."\n"
                .'|ap-southeast-1| 新加坡| ALB,MSE|'."\n"
                .'|ap-south-1| 印度（孟买）| ALB|'."\n"
                .'|eu-central-1| 德国（法兰克福）| ALB|'."\n"
                .'|us-west-1| 美国（硅谷）| ALB|'."\n"
                .'|us-east-1| 美国（弗吉尼亚）| ALB|',
        ],
        'DescribeProductInstances' => [
            'summary' => '查询已同步的云产品资产列表。',
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
                'abilityTreeCode' => '144614',
                'abilityTreeNodes' => [
                    'FEATUREwafOV749M',
                    'FEATUREwafCMMRA4',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-zxu****9d02',
                    ],
                ],
                [
                    'name' => 'ResourceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源的实例ID',
                        'description' => '云产品的实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'lb-2zeugkfj81jvo****4tqm',
                    ],
                ],
                [
                    'name' => 'ResourceName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源的实例名称',
                        'description' => '云产品的实例名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'exampleResourceName',
                    ],
                ],
                [
                    'name' => 'ResourceRegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源归属RegionId',
                        'description' => '云产品归属地域ID。取值：'."\n"
                            .'- **cn-chengdu**：表示西南1（成都）。'."\n"
                            ."\n"
                            .'- **cn-beijing**：表示华北2（北京）。'."\n"
                            ."\n"
                            .'- **cn-zhangjiakou**：表示华北3（张家口）。'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示华东1（杭州）。'."\n"
                            ."\n"
                            .'- **cn-shanghai**：表示华东2（上海）。'."\n"
                            ."\n"
                            .'- **cn-shenzhen**：表示华南1（深圳）。'."\n"
                            ."\n"
                            .'- **cn-qingdao**：表示华北1（青岛）。'."\n"
                            ."\n"
                            .'- **cn-hongkong**：表示中国（香港）。'."\n"
                            ."\n"
                            .'- **ap-southeast-3**：表示马来西亚（吉隆坡）。'."\n"
                            ."\n"
                            .'- **ap-southeast-5**：表示印度尼西亚（雅加达）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceProduct',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源所属产品',
                        'description' => '云产品类型。取值：'."\n"
                            ."\n"
                            .'- **clb4**：表示四层CLB产品。'."\n"
                            ."\n"
                            .'- **clb7**：表示七层CLB产品。'."\n"
                            ."\n"
                            .'- **ecs**：表示ECS产品。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'clb7',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。默认值：**1**。',
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
                        'description' => '分页查询时，每页的行数。默认值为**10**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '10',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'ResourceIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云产品的公网IP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.X.X.1',
                    ],
                ],
                [
                    'name' => 'OwnerUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源归属用户UID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1704********9107',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekz6ql****5uzi',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'FDCBAE1E-2B3F-5C13-AD20-844B9473****',
                            ],
                            'TotalCount' => [
                                'description' => '返回结果的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'ProductInstances' => [
                                'description' => '云产品信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '云产品信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ResourceInstanceId' => [
                                            'title' => '实例ID',
                                            'description' => '云产品实例ID。',
                                            'type' => 'string',
                                            'example' => 'i-2ze1tm4pvghp****cluv',
                                        ],
                                        'ResourceName' => [
                                            'title' => '实例名称',
                                            'description' => '云产品实例名称。',
                                            'type' => 'string',
                                            'example' => 'ecs-test',
                                        ],
                                        'ResourceRegionId' => [
                                            'title' => 'RegionId',
                                            'description' => '云产品归属地域ID，取值：'."\n"
                                                .'- **cn-chengdu**：表示西南1（成都）。'."\n"
                                                ."\n"
                                                .'- **cn-beijing**：表示华北2（北京）。'."\n"
                                                ."\n"
                                                .'- **cn-zhangjiakou**：表示华北3（张家口）。'."\n"
                                                ."\n"
                                                .'- **cn-hangzhou**：表示华东1（杭州）。'."\n"
                                                ."\n"
                                                .'- **cn-shanghai**：表示华东2（上海）。'."\n"
                                                ."\n"
                                                .'- **cn-shenzhen**：表示华南1（深圳）。'."\n"
                                                ."\n"
                                                .'- **cn-qingdao**：表示华北1（青岛）。'."\n"
                                                ."\n"
                                                .'- **cn-hongkong**：表示中国（香港）。'."\n"
                                                ."\n"
                                                .'- **ap-southeast-3**：表示马来西亚（吉隆坡）。'."\n"
                                                ."\n"
                                                .'- **ap-southeast-5**：表示印度尼西亚（雅加达）。',
                                            'type' => 'string',
                                            'example' => 'cn-beijing',
                                        ],
                                        'ResourceProduct' => [
                                            'description' => '云产品类型。取值：'."\n"
                                                ."\n"
                                                .'- **clb4**：表示四层CLB产品。'."\n"
                                                ."\n"
                                                .'- **clb7**：表示七层CLB产品。'."\n"
                                                ."\n"
                                                .'- **ecs**：表示ECS产品。',
                                            'type' => 'string',
                                            'example' => 'clb4',
                                        ],
                                        'ResourcePorts' => [
                                            'description' => '端口信息列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '端口信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Port' => [
                                                        'description' => '端口。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '443',
                                                    ],
                                                    'Protocol' => [
                                                        'description' => '网络协议类型。取值：'."\n"
                                                            .'- **http**：表示HTTP协议。'."\n"
                                                            .'- **https**：表示HTTPS协议。',
                                                        'type' => 'string',
                                                        'example' => 'https',
                                                    ],
                                                    'Certificates' => [
                                                        'description' => '证书信息列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '证书信息。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'CertificateName' => [
                                                                    'description' => 'SSL证书名称。',
                                                                    'type' => 'string',
                                                                    'example' => 'demoCertName',
                                                                ],
                                                                'CertificateId' => [
                                                                    'description' => '证书ID。',
                                                                    'type' => 'string',
                                                                    'example' => '1234567',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ResourceIp' => [
                                            'description' => '云产品的公网IP。',
                                            'type' => 'string',
                                            'example' => '1.X.X.1',
                                        ],
                                        'OwnerUserId' => [
                                            'description' => '资源归属用户UID。',
                                            'type' => 'string',
                                            'example' => '1704********9107',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FDCBAE1E-2B3F-5C13-AD20-844B9473****\\",\\n  \\"TotalCount\\": 100,\\n  \\"ProductInstances\\": [\\n    {\\n      \\"ResourceInstanceId\\": \\"i-2ze1tm4pvghp****cluv\\",\\n      \\"ResourceName\\": \\"ecs-test\\",\\n      \\"ResourceRegionId\\": \\"cn-beijing\\",\\n      \\"ResourceProduct\\": \\"clb4\\",\\n      \\"ResourcePorts\\": [\\n        {\\n          \\"Port\\": 443,\\n          \\"Protocol\\": \\"https\\",\\n          \\"Certificates\\": [\\n            {\\n              \\"CertificateName\\": \\"demoCertName\\",\\n              \\"CertificateId\\": \\"1234567\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"ResourceIp\\": \\"1.X.X.1\\",\\n      \\"OwnerUserId\\": \\"1704********9107\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询已同步的云产品资产列表',
        ],
        'DescribeResourceSupportRegions' => [
            'summary' => '查询云产品接入的支持区域列表，主要指CLB，ECS产品。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)，查看当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekzpks****kdjq',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '查询结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '58FDF266-3D56-5DE8-91E0-96A26BAB****',
                            ],
                            'SupportRegions' => [
                                'description' => '透明接入支持的地域ID列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '地域ID。取值：'."\n"
                                        .'- **cn-chengdu**：表示西南1（成都）。'."\n"
                                        ."\n"
                                        .'- **cn-beijing**：表示华北2（北京）。'."\n"
                                        ."\n"
                                        .'- **cn-zhangjiakou**：表示华北3（张家口）。'."\n"
                                        ."\n"
                                        .'- **cn-hangzhou**：表示华东1（杭州）。'."\n"
                                        ."\n"
                                        .'- **cn-shanghai**：表示华东2（上海）。'."\n"
                                        ."\n"
                                        .'- **cn-shenzhen**：表示华南1（深圳）。'."\n"
                                        ."\n"
                                        .'- **cn-qingdao**：表示华北1（青岛）。'."\n"
                                        ."\n"
                                        .'- **cn-hongkong**：表示中国（香港）。'."\n"
                                        ."\n"
                                        .'- **ap-southeast-3**：表示马来西亚（吉隆坡）。'."\n"
                                        ."\n"
                                        .'- **ap-southeast-5**：表示印度尼西亚（雅加达）。',
                                    'type' => 'string',
                                    'example' => 'cn-hangzhou',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58FDF266-3D56-5DE8-91E0-96A26BAB****\\",\\n  \\"SupportRegions\\": [\\n    \\"cn-hangzhou\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询云产品接入的支持区域列表',
        ],
        'DescribeResourceRegionId' => [
            'summary' => '查询服务化接入的资源的地域ID，主要指ALB和MSE产品。',
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
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要操作的WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aek2lrm****6pnq',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F5905D3F-F674-5177-9E48-466DD3B8****',
                            ],
                            'ResourceRegionIds' => [
                                'description' => '服务化接入的资源的地域ID列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '地域ID。地域ID的中文名称请查看：<props="china">[阿里云地域详情](https://help.aliyun.com/document_detail/40654.html?spm=5176.28426678.J_HeJR_wZokYt378dwP-lLl.1.4cf85181JIAGSR&scm=20140722.S_help@@%E6%96%87%E6%A1%A3@@40654.S_RQW@ag0+BB2@ag0+BB1@ag0+hot+os0.ID_40654-RL_%E5%9C%B0%E5%9F%9F-LOC_search~UND~helpdoc~UND~item-OR_ser-V_3-P0_0)。</props>'."\n"
                                        ."\n"
                                        .'<props="intl">[阿里云地域详情](https://www.alibabacloud.com/help/zh/egs/regions-and-zones?spm=a3c0i.23458820.2359477120.9.6f4f6e9b9NShFZ)。</props>',
                                    'type' => 'string',
                                    'example' => 'cn-hangzhou',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F5905D3F-F674-5177-9E48-466DD3B8****\\",\\n  \\"ResourceRegionIds\\": [\\n    \\"cn-hangzhou\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询服务化接入的资源的地域ID',
        ],
        'DescribeResourceInstanceCerts' => [
            'summary' => '查询云产品实例的证书列表，该接口返回当前委派管理员和实例所属用户的证书列表，该接口仅在多账号场景下使用。'."\n"
                .'如：用户A是委派管控员，有证书cert1，云产品实例lb-xx-1是成员用户B，有证书cert2，查询实例lb-xx-1时，接口返回cert1和cert2。',
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
                'abilityTreeCode' => '212899',
                'abilityTreeNodes' => [
                    'FEATUREwafOV749M',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '域名',
                        'description' => '云产品实例ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'lb-bp1*****jqnnqk5uj2p',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，返回第几页数据。默认值为**1**，表示返回第1页数据。',
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
                        'description' => '分页查询时，每页包含多少条结果。默认值为**10**，表示每页包含10条结果。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '1000',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v2_public_cn-*',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
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
                                'example' => 'D7861F61-***-6B19160D5EB0',
                            ],
                            'TotalCount' => [
                                'description' => '返回结果的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Certs' => [
                                'description' => '证书结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '证书结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'Domain' => [
                                            'description' => '证书支持的域名',
                                            'type' => 'string',
                                            'example' => 'waf.aliyundemo.com',
                                        ],
                                        'CertName' => [
                                            'description' => '证书名称',
                                            'type' => 'string',
                                            'example' => '测试用证书名',
                                        ],
                                        'CertIdentifier' => [
                                            'description' => '全局证书ID，证书ID+"-cn-hangzhou"。如果证书ID=123，则CertIdentifier=“123-cn-hangzhou”。',
                                            'type' => 'string',
                                            'example' => '123-cn-hangzhou',
                                        ],
                                        'CommonName' => [
                                            'description' => '通用名称（CN）',
                                            'type' => 'string',
                                            'example' => 'www.aliyundemo.com',
                                        ],
                                        'IsChainCompleted' => [
                                            'description' => '证书链是否完整',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'AfterDate' => [
                                            'description' => '证书到期时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1708415521211',
                                        ],
                                        'BeforeDate' => [
                                            'description' => '证书的签发时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1708415521211',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D7861F61-***-6B19160D5EB0\\",\\n  \\"TotalCount\\": 1,\\n  \\"Certs\\": [\\n    {\\n      \\"Domain\\": \\"waf.aliyundemo.com\\",\\n      \\"CertName\\": \\"测试用证书名\\",\\n      \\"CertIdentifier\\": \\"123-cn-hangzhou\\",\\n      \\"CommonName\\": \\"www.aliyundemo.com\\",\\n      \\"IsChainCompleted\\": true,\\n      \\"AfterDate\\": 1708415521211,\\n      \\"BeforeDate\\": 1708415521211\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询云产品实例的证书列表',
        ],
        'CreateDomain' => [
            'summary' => '将域名接入WAF实例进行防护。',
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
                'abilityTreeCode' => '106298',
                'abilityTreeNodes' => [
                    'FEATUREwafD36LCH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的域名名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'Listen',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '配置监听信息。',
                        'type' => 'object',
                        'properties' => [
                            'HttpsPorts' => [
                                'description' => 'HTTPS协议的监听端口。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'HTTPS协议的监听端口，使用 [**port1,port2,......,portN**] 格式。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '[443,8443]',
                                ],
                                'required' => false,
                            ],
                            'HttpPorts' => [
                                'description' => 'HTTP协议的监听端口。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'HTTP协议的监听端口，使用[**port1,port2,……**]格式。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '[80,81]',
                                ],
                                'required' => false,
                            ],
                            'Http2Enabled' => [
                                'description' => '是否开启HTTP2。仅**HttpsPorts**取值不为空（表示域名使用HTTPS协议）时，使用该参数。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示开启HTTP2。'."\n"
                                    ."\n"
                                    .'- **false**（默认）：表示不开启HTTP2。',
                                'type' => 'boolean',
                                'required' => false,
                                'enumValueTitles' => [],
                                'example' => 'true',
                            ],
                            'CertId' => [
                                'description' => '要添加的证书的ID。仅**HttpsPorts**取值不为空（表示域名使用HTTPS协议）时，使用该参数。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                            'SM2Enabled' => [
                                'description' => '是否开启国密证书',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                                'default' => 'false',
                            ],
                            'SM2CertId' => [
                                'description' => '要添加的国密证书的ID。仅SM2Enabled取值为true时，使用该参数。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123-cn-hangzhou',
                            ],
                            'SM2AccessOnly' => [
                                'description' => '是否仅客端访问。仅SM2Enabled取值为true时，使用该参数。'."\n"
                                    ."\n"
                                    .'- true：仅国密客户端才可以访问。'."\n"
                                    ."\n"
                                    .'- false：国密和非国密均可以访问。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                                'default' => 'false',
                            ],
                            'TLSVersion' => [
                                'description' => '要添加的TLS版本。仅**HttpsPorts**取值不为空（表示域名使用HTTPS协议）时，使用该参数。取值：'."\n"
                                    .'- **tlsv1**'."\n"
                                    .'- **tlsv1.1**'."\n"
                                    .'- **tlsv1.2**',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'tlsv1',
                            ],
                            'EnableTLSv3' => [
                                'description' => '是否支持TLS1.3版本。仅**HttpsPorts**取值不为空（表示域名使用HTTPS协议）时，使用该参数。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示支持TLS1.3版本。'."\n"
                                    ."\n"
                                    .'- **false**：表示不支持TLS1.3版本。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'CipherSuite' => [
                                'description' => '要添加的加密套件类型。仅**HttpsPorts**取值不为空（表示域名使用HTTPS协议）时，使用该参数。取值：'."\n"
                                    ."\n"
                                    .'- **1**：表示添加全部加密套件。'."\n"
                                    ."\n"
                                    .'- **2**：表示添加强加密套件。仅**TLSVersion**取值为**tlsv1.2**时，可选择该取值。'."\n"
                                    ."\n"
                                    .'- **99**：表示添加自定义加密套件。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                            ],
                            'CustomCiphers' => [
                                'description' => '要添加的具体自定义加密套件。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '要添加的具体自定义加密套件。仅**CipherSuite**配置为**99**时，使用该参数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '["xxx","ffas"]',
                                ],
                                'required' => false,
                            ],
                            'FocusHttps' => [
                                'description' => '是否开启HTTPS的强制跳转。仅HttpsPorts取值不为空（表示域名使用HTTPS协议），且HttpPorts取值为空（表示域名未使用HTTP协议）时，使用该参数。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示开启HTTPS的强制跳转。'."\n"
                                    ."\n"
                                    .'- **false**：表示不开启HTTPS的强制跳转。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'XffHeaderMode' => [
                                'description' => 'WAF获取客户端真实IP的方式。取值：'."\n"
                                    ."\n"
                                    .'- **0**（默认）：表示客户端访问流量到WAF前没有经过其他七层代理转发。'."\n"
                                    ."\n"
                                    .'- **1**：表示WAF读取请求头中X-Forwarded-For（XFF）字段的第一个值作为客户端IP。'."\n"
                                    ."\n"
                                    .'- **2**：表示WAF读取请求头中由您设置的自定义字段值作为客户端IP。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'XffHeaders' => [
                                'description' => '设置用于获取客户端IP的自定义字段列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '设置用于获取客户端IP的自定义字段列表，使用[**"header1","header2",……**]格式表示。'."\n"
                                        ."\n"
                                        .'> 仅在**XffHeaderMode**取值为2（表示WAF读取请求头中由您设置的自定义字段值作为客户端IP）时，需要设置该参数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '["Client-ip","cip"]',
                                ],
                                'required' => false,
                            ],
                            'IPv6Enabled' => [
                                'description' => '是否开启IPv6。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示开启IPv6。'."\n"
                                    ."\n"
                                    .'- **false**（默认）：表示不开启IPv6。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'ProtectionResource' => [
                                'description' => '要使用的防护资源类型。取值：'."\n"
                                    ."\n"
                                    .'- **share**（默认）：表示使用共享集群。'."\n"
                                    ."\n"
                                    .'- **gslb**：表示使用共享集群智能负载均衡。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'share',
                                'default' => 'share',
                            ],
                            'ExclusiveIp' => [
                                'description' => '是否开启独享IP。仅**IPv6Enabled**取值为**false**（表示不开启IPv6），且**ProtectionResource**取值为**share**时（表示使用共享集群）时，使用该参数。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示开启独享IP。'."\n"
                                    ."\n"
                                    .'- **false**（默认）：表示不开启独享IP。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Redirect',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '配置转发信息。',
                        'type' => 'object',
                        'properties' => [
                            'Backends' => [
                                'description' => '域名对应的源站服务器IP或服务器回源域名。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '域名对应的源站服务器IP或服务器回源域名。您只能选择设置源站服务器IP或服务器回源域名中的一种，回源地址为域名时，只支持IPv4，暂不支持IPv6：'."\n"
                                        ."\n"
                                        .'- 设置源站服务器IP时，使用[**"ip1","ip2",……**]格式表示。最多支持添加20个IP。'."\n"
                                        ."\n"
                                        .'- 设置服务器回源域名时，使用[**"domain"**]格式表示。最多支持添加20个域名地址。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '['."\n"
                                        .'    "1.1.XX.XX",'."\n"
                                        .'    "2.2.XX.XX"'."\n"
                                        .']',
                                ],
                                'required' => false,
                            ],
                            'Loadbalance' => [
                                'description' => '回源时采用的负载均衡算法。取值：'."\n"
                                    ."\n"
                                    .'- **iphash**：表示IPHash算法。'."\n"
                                    ."\n"
                                    .'- **roundRobin**：表示轮询算法。'."\n"
                                    ."\n"
                                    .'- **leastTime**：表示Least Time算法。仅**ProtectionResource**取值为**gslb**（表示防护资源类型使用共享集群智能负载均衡）时，可选择该取值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'roundRobin',
                                'default' => 'iphash',
                            ],
                            'FocusHttpBackend' => [
                                'description' => '是否开启强制HTTP回源。仅**HttpsPorts**取值不为空（表示域名使用HTTPS协议）时，使用该参数。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示开启强制HTTP回源。'."\n"
                                    ."\n"
                                    .'- **false**：表示不开启强制HTTP回源。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'SniEnabled' => [
                                'description' => '是否开启回源SNI。仅**HttpsPorts**取值不为空（表示域名使用HTTPS协议）时，使用该参数。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示开启回源SNI。'."\n"
                                    ."\n"
                                    .'- **false**（默认）：表示不开启回源SNI。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'SniHost' => [
                                'description' => '设置自定义SNI扩展字段的值。如果不设置该参数，则默认使用请求头中**Host**字段的值作为SNI扩展字段的值。'."\n"
                                    .'一般情况无需自定义SNI，除非您的业务有特殊配置要求，希望WAF在回源请求中使用与实际请求Host不一致的SNI（即此处设置的自定义SNI）。'."\n"
                                    ."\n"
                                    .'> 仅在**SniEnabled**取值为**true**（表示开启回源SNI），需要设置该参数。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'www.aliyundoc.com',
                            ],
                            'RequestHeaders' => [
                                'description' => '域名的流量标记字段和值，用于标记经过WAF处理的流量。'."\n"
                                    ."\n"
                                    .'通过指定自定义请求头部字段和对应的值，当域名的访问流量经过WAF时，WAF自动在请求头部中添加所设定的自定义字段值作为流量标记，便于后端服务统计相关信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '该参数值的格式为[**{"k":"_key_","v":"_value_"}**]。其中，**_key_**表示所指定的自定义请求头部字段，**_value_**表示为该字段设定的值。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'description' => '指定的自定义请求头部字段。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'aaa',
                                        ],
                                        'Value' => [
                                            'description' => '自定义请求头部字段设定的值。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'bbb',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                                'maxItems' => 5,
                            ],
                            'ConnectTimeout' => [
                                'description' => '连接超时时长。单位：秒。'."\n"
                                    .'取值范围：1~3600。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'maximum' => '3600',
                                'minimum' => '1',
                                'example' => '120',
                                'default' => '5',
                            ],
                            'ReadTimeout' => [
                                'description' => '读超时时长，单位：秒。'."\n"
                                    .'取值范围：1~3600。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'maximum' => '3600',
                                'minimum' => '1',
                                'example' => '200',
                                'default' => '120',
                            ],
                            'WriteTimeout' => [
                                'description' => '写超时时长，单位：秒。'."\n"
                                    .'取值范围：1~3600。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'maximum' => '3600',
                                'minimum' => '1',
                                'example' => '200',
                                'default' => '120',
                            ],
                            'CnameEnabled' => [
                                'description' => '是否开启公共云容灾。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示开启公共云容灾。'."\n"
                                    ."\n"
                                    .'- **false**（默认）：表示不开启公共云容灾。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'RoutingRules' => [
                                'description' => '混合云转发规则。使用JSON数组转化的字符串格式表示。JSON数组中的每个元素是一个结构体，包含以下字段：'."\n"
                                    .'- **rs**：Array类型 | 表示回源IP地址或者回源CNAME列表'."\n"
                                    ."\n"
                                    .'- **location**：String类型 | 表示防护节点名称'."\n"
                                    ."\n"
                                    .'- **locationId**：Long类型 | 表示防护节点ID',
                                'type' => 'string',
                                'required' => false,
                                'example' => '['."\n"
                                    .'      {'."\n"
                                    .'            "rs": ['."\n"
                                    .'                  "1.1.XX.XX"'."\n"
                                    .'            ],'."\n"
                                    .'            "locationId": 535,'."\n"
                                    .'            "location": "test1111"'."\n"
                                    .'      }'."\n"
                                    .']',
                            ],
                            'Keepalive' => [
                                'description' => '是否保持长连接。取值：'."\n"
                                    ."\n"
                                    .'- **true**（默认）：表示保持长连接。'."\n"
                                    ."\n"
                                    .'- **false**：表示不保持长连接。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                                'default' => 'true',
                            ],
                            'Retry' => [
                                'description' => 'WAF回源失败时，是否重试。取值：'."\n"
                                    ."\n"
                                    .'- **true**（默认）：表示重试。'."\n"
                                    ."\n"
                                    .'- **false**：表示不重试。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                                'default' => 'true',
                            ],
                            'KeepaliveRequests' => [
                                'description' => '复用长连接的请求个数。取值范围：60~1000，单位：个。'."\n"
                                    ."\n"
                                    .'> 开启长连接后，复用多少个长连接。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'maximum' => '1000',
                                'minimum' => '60',
                                'example' => '1000',
                                'default' => '100',
                            ],
                            'KeepaliveTimeout' => [
                                'description' => '空闲长连接超时时间，取值范围：1~60，默认15，单位：秒。'."\n"
                                    ."\n"
                                    .'> 复用的长连接空闲多久后释放。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'maximum' => '3600',
                                'minimum' => '10',
                                'example' => '15',
                                'default' => '15',
                            ],
                            'XffProto' => [
                                'description' => 'X-Forward-For-Proto 传递WAF的协议。取值：'."\n"
                                    ."\n"
                                    .'- **true**（默认）：表示传递WAF的协议。'."\n"
                                    ."\n"
                                    .'- **false**：表示不传递WAF的协议。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                                'default' => 'true',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AccessType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的接入类型。取值：'."\n"
                            ."\n"
                            .'- **share**（默认）：表示CNAME接入。'."\n"
                            ."\n"
                            .'- **hybrid\\_cloud\\_cname**：表示混合云CNAME接入。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'share',
                        'default' => 'share',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '添加域名后的返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
                            ],
                            'DomainInfo' => [
                                'description' => '已添加的域名信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Cname' => [
                                        'description' => 'WAF为域名分配的CNAME地址。',
                                        'type' => 'string',
                                        'example' => 'xxxxxwww.****.com',
                                    ],
                                    'Domain' => [
                                        'description' => '已添加的域名名称。',
                                        'type' => 'string',
                                        'example' => 'www.aliyundoc.com',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\",\\n  \\"DomainInfo\\": {\\n    \\"Cname\\": \\"xxxxxwww.****.com\\",\\n    \\"Domain\\": \\"www.aliyundoc.com\\"\\n  }\\n}","type":"json"}]',
            'title' => '添加CNAME接入资源',
        ],
        'ModifyDomain' => [
            'summary' => '修改CNAME接入域名。',
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
                'abilityTreeCode' => '114036',
                'abilityTreeNodes' => [
                    'FEATUREwafD36LCH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要操作的域名名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'Listen',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '配置监听信息。',
                        'type' => 'object',
                        'properties' => [
                            'HttpsPorts' => [
                                'description' => 'HTTPS协议的监听端口，使用[**port1,port2,……**]格式。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'HTTPS协议的监听端口。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '443',
                                ],
                                'required' => false,
                            ],
                            'HttpPorts' => [
                                'description' => 'HTTP协议的监听端口，使用[**port1,port2,……**]格式。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'HTTP协议的监听端口。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '80',
                                ],
                                'required' => false,
                            ],
                            'Http2Enabled' => [
                                'description' => '是否开启HTTP2。仅**HttpsPorts**取值不为空（表示域名使用HTTPS协议）时，使用该参数。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示开启HTTP2。'."\n"
                                    ."\n"
                                    .'- **false**（默认）：表示不开启HTTP2。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'CertId' => [
                                'description' => '要添加的证书的ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                            'SM2Enabled' => [
                                'description' => '是否开启国密证书',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'SM2CertId' => [
                                'description' => '要添加的国密证书的ID。仅SM2Enable取值为true时，使用该参数。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123-cn-hangzhou',
                            ],
                            'SM2AccessOnly' => [
                                'description' => '是否仅客端访问。仅SM2Enable取值为true时，使用该参数。'."\n"
                                    ."\n"
                                    .'- true：仅国密客户端才可以访问。'."\n"
                                    ."\n"
                                    .'- false：国密和非国密均可以访问。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'TLSVersion' => [
                                'description' => '要添加的TLS版本。仅**HttpsPorts**取值不为空（表示域名使用HTTPS协议）时，使用该参数。取值：'."\n"
                                    ."\n"
                                    .'- **tlsv1**'."\n"
                                    ."\n"
                                    .'- **tlsv1.1**'."\n"
                                    ."\n"
                                    .'- **tlsv1.2**',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'tlsv1',
                            ],
                            'EnableTLSv3' => [
                                'description' => '是否支持TLS1.3版本。仅**HttpsPorts**取值不为空（表示域名使用HTTPS协议）时，使用该参数。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示支持TLS1.3版本。'."\n"
                                    ."\n"
                                    .'- **false**：表示不支持TLS1.3版本。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'CipherSuite' => [
                                'description' => '要添加的加密套件类型。仅**HttpsPorts**取值不为空（表示域名使用HTTPS协议）时，使用该参数。取值：'."\n"
                                    ."\n"
                                    .'- **1**：表示添加全部加密套件。'."\n"
                                    ."\n"
                                    .'- **2**：表示添加强加密套件。仅**TLSVersion**取值为**tlsv1.2**时，可选择该取值。'."\n"
                                    ."\n"
                                    .'- **99**：表示添加自定义加密套件。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                            ],
                            'CustomCiphers' => [
                                'description' => '要添加的具体自定义加密套件。仅**CipherSuite**配置为**99**时，使用该参数。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '自定义加密套件。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '["xxx","ffas"]',
                                ],
                                'required' => false,
                            ],
                            'FocusHttps' => [
                                'description' => '是否开启HTTPS的强制跳转。仅**HttpsPorts**取值不为空（表示域名使用HTTPS协议），且**HttpPorts**取值为空（表示域名未使用HTTP协议）时，使用该参数。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示开启HTTPS的强制跳转。'."\n"
                                    ."\n"
                                    .'- **false**：表示不开启HTTPS的强制跳转。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'XffHeaderMode' => [
                                'description' => 'WAF获取客户端真实IP的方式。取值：'."\n"
                                    ."\n"
                                    .'- **0**（默认）：表示客户端访问流量到WAF前没有经过其他七层代理转发。'."\n"
                                    ."\n"
                                    .'- **1**：表示WAF读取请求头中X-Forwarded-For（XFF）字段的第一个值作为客户端IP。'."\n"
                                    ."\n"
                                    .'- **2**：表示WAF读取请求头中由您设置的自定义字段值作为客户端IP。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'enumValueTitles' => [],
                                'example' => '2',
                                'enum' => [
                                    '0',
                                    '1',
                                    '2',
                                ],
                            ],
                            'XffHeaders' => [
                                'description' => '设置用于获取客户端IP的自定义字段列表，使用[**"header1","header2",……**]格式表示。'."\n"
                                    ."\n"
                                    .'> 仅在**XffHeaderMode**取值为2（表示WAF读取请求头中由您设置的自定义字段值作为客户端IP）时，需要设置该参数。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '用于获取客户端IP的自定义字段列表。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Client-ip',
                                ],
                                'required' => false,
                            ],
                            'IPv6Enabled' => [
                                'description' => '是否开启IPv6。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示开启IPv6。'."\n"
                                    ."\n"
                                    .'- **false**（默认）：表示不开启IPv6。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'ProtectionResource' => [
                                'description' => '要使用的防护资源类型。取值：'."\n"
                                    ."\n"
                                    .'- **share**（默认）：表示使用共享集群。'."\n"
                                    ."\n"
                                    .'- **gslb**：表示使用共享集群智能负载均衡。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'share',
                                'default' => 'share',
                            ],
                            'ExclusiveIp' => [
                                'description' => '是否开启独享IP。仅**IPv6Enabled**取值为false（表示不开启IPv6），且**ProtectionResource**取值为**share**时（表示使用共享集群）时，使用该参数。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示开启独享IP。'."\n"
                                    ."\n"
                                    .'- **false**（默认）：表示不开启独享IP。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Redirect',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '配置转发信息。',
                        'type' => 'object',
                        'properties' => [
                            'Backends' => [
                                'description' => '域名对应的源站服务器IP或服务器回源域名。您只能选择设置源站服务器IP或服务器回源域名中的一种，回源地址为域名时，只支持IPv4，暂不支持IPv6：'."\n"
                                    ."\n"
                                    .'- 设置源站服务器IP时，使用[**"ip1","ip2",……**]格式表示。最多支持添加20个IP。'."\n"
                                    ."\n"
                                    .'- 设置服务器回源域名时，使用[**"domain"**]格式表示。最多支持添加20个域名地址。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '源站服务器IP或服务器回源域名。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1.1.XX.XX',
                                ],
                                'required' => false,
                            ],
                            'Loadbalance' => [
                                'description' => '回源时采用的负载均衡算法。取值：'."\n"
                                    ."\n"
                                    .'- **iphash**：表示IP Hash算法。'."\n"
                                    ."\n"
                                    .'- **roundRobin**：表示轮询算法。'."\n"
                                    ."\n"
                                    .'- **leastTime**：表示Least Time算法。仅**ProtectionResource**取值为**gslb**（表示防护资源类型使用共享集群智能负载均衡）时，可选择该取值。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'iphash',
                                'default' => 'iphash',
                            ],
                            'FocusHttpBackend' => [
                                'description' => '是否开启强制HTTP回源。仅**HttpsPorts**取值不为空（表示域名使用HTTPS协议）时，使用该参数。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示开启强制HTTP回源。'."\n"
                                    .'- **false**：表示不开启强制HTTP回源。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'SniEnabled' => [
                                'description' => '是否开启回源SNI。仅**HttpsPorts**取值不为空（表示域名使用HTTPS协议）时，使用该参数。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示开启回源SNI。'."\n"
                                    .'- **false**（默认）：表示不开启回源SNI。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'SniHost' => [
                                'description' => '设置自定义SNI扩展字段的值。如果不设置该参数，则默认使用请求头中**Host**字段的值作为SNI扩展字段的值。'."\n"
                                    .'一般情况无需自定义SNI，除非您的业务有特殊配置要求，希望WAF在回源请求中使用与实际请求Host不一致的SNI（即此处设置的自定义SNI）。'."\n"
                                    ."\n"
                                    .'> 仅在**SniEnalbed**取值为xxx（表示自定义回源SNI）时，需要设置该参数。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'www.aliyundoc.com',
                            ],
                            'RequestHeaders' => [
                                'description' => '域名的流量标记字段和值，用于标记经过WAF处理的流量。'."\n"
                                    ."\n"
                                    .'通过指定自定义请求头部字段和对应的值，当域名的访问流量经过WAF时，WAF自动在请求头部中添加所设定的自定义字段值作为流量标记，便于后端服务统计相关信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '该参数值的格式为[**{"k":"_key_","v":"_value_"}**]。其中，**_key_**表示所指定的自定义请求头部字段，**_value_**表示为该字段设定的值。'."\n"
                                        ."\n"
                                        .'> 如果请求中已存在该自定义头部字段，系统将用所设定的流量标记值覆盖请求中该自定义字段的值。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'description' => '指定的自定义请求头部字段。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'aaa',
                                        ],
                                        'Value' => [
                                            'description' => '指定的自定义请求头部字段设定的值。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'bbb',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'ConnectTimeout' => [
                                'description' => '连接超时时长。单位：秒。'."\n"
                                    .'取值范围：1~3600。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'maximum' => '3600',
                                'minimum' => '1',
                                'example' => '120',
                                'default' => '5',
                            ],
                            'ReadTimeout' => [
                                'description' => '读超时时长，单位：秒。'."\n"
                                    .'取值范围：1~3600。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'maximum' => '3600',
                                'minimum' => '1',
                                'example' => '200',
                                'default' => '120',
                            ],
                            'WriteTimeout' => [
                                'description' => '写超时时长，单位：秒。'."\n"
                                    .'取值范围：1~3600。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'maximum' => '3600',
                                'minimum' => '1',
                                'example' => '200',
                                'default' => '120',
                            ],
                            'CnameEnabled' => [
                                'description' => '是否开启公共云容灾。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示开启公共云容灾。'."\n"
                                    ."\n"
                                    .'- **false**（默认）：表示不开启公共云容灾。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'RoutingRules' => [
                                'description' => '混合云转发规则。使用JSON数组转化的字符串格式表示。JSON数组中的每个元素是一个结构体，包含以下字段：'."\n"
                                    .'- **rs**：Array类型 | 表示回源IP地址或者回源CNAME列表'."\n"
                                    ."\n"
                                    .'- **location**：String类型 | 表示防护节点名称'."\n"
                                    ."\n"
                                    .'- **locationId**：Long类型 | 表示防护节点ID',
                                'type' => 'string',
                                'required' => false,
                                'example' => '['."\n"
                                    .'      {'."\n"
                                    .'            "rs": ['."\n"
                                    .'                  "1.1.XX.XX"'."\n"
                                    .'            ],'."\n"
                                    .'            "locationId": 535,'."\n"
                                    .'            "location": "test1111"'."\n"
                                    .'      }'."\n"
                                    .']'."\n",
                            ],
                            'Keepalive' => [
                                'description' => '是否保持长连接。取值：'."\n"
                                    ."\n"
                                    .'- **true**（默认）：表示保持长连接。'."\n"
                                    ."\n"
                                    .'- **false**：表示不保持长连接。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                                'default' => 'true',
                            ],
                            'Retry' => [
                                'description' => 'WAF回源失败时，是否重试。取值：'."\n"
                                    ."\n"
                                    .'- **true**（默认）：表示重试。'."\n"
                                    .'- **false**：表示不重试。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                                'default' => 'true',
                            ],
                            'KeepaliveRequests' => [
                                'description' => '复用长连接的请求个数。取值范围：60~1000，单位：个。'."\n"
                                    ."\n"
                                    .'> 开启长连接后，复用多少个长连接。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'maximum' => '1000',
                                'minimum' => '60',
                                'example' => '1000',
                                'default' => '100',
                            ],
                            'KeepaliveTimeout' => [
                                'description' => '空闲长连接超时时间，取值范围：1~60，默认15，单位：秒。'."\n"
                                    ."\n"
                                    .'> 复用的长连接空闲多少长后释放。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'maximum' => '3600',
                                'minimum' => '10',
                                'example' => '15',
                                'default' => '15',
                            ],
                            'XffProto' => [
                                'description' => 'X-Forward-For-Proto传递WAF的协议。取值：'."\n"
                                    ."\n"
                                    .'- **true**（默认）：表示传递WAF的协议。'."\n"
                                    ."\n"
                                    .'- **false**：表示不传递WAF的协议。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                                'default' => 'true',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            .'- **ap-southeast-1**：表示海外地区。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AccessType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的接入类型。取值：'."\n"
                            ."\n"
                            .'- **share**（默认）：表示CNAME接入。'."\n"
                            ."\n"
                            .'- **hybrid\\_cloud\\_cname**：表示混合云CNAME接入。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'share',
                        'default' => 'share',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D****',
                            ],
                            'DomainInfo' => [
                                'description' => '返回添加的域名信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Cname' => [
                                        'description' => 'WAF为域名分配的CNAME地址。',
                                        'type' => 'string',
                                        'example' => 'xxxxxcvdaf.****.com',
                                    ],
                                    'Domain' => [
                                        'description' => '要修改的域名。',
                                        'type' => 'string',
                                        'example' => 'www.aliyundoc.com',
                                    ],
                                    'DomainId' => [
                                        'description' => '域名ID',
                                        'type' => 'string',
                                        'example' => 'www.aliyundoc.com-waf',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D****\\",\\n  \\"DomainInfo\\": {\\n    \\"Cname\\": \\"xxxxxcvdaf.****.com\\",\\n    \\"Domain\\": \\"www.aliyundoc.com\\",\\n    \\"DomainId\\": \\"www.aliyundoc.com-waf\\"\\n  }\\n}","type":"json"}]',
            'title' => '修改CNAME接入资源',
        ],
        'DeleteDomain' => [
            'summary' => '删除CNAME接入域名。',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)，查看当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已接入WAF的域名名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AccessType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的接入类型。取值：'."\n"
                            ."\n"
                            .'- **share**（默认）：表示CNAME接入。'."\n"
                            .'- **hybrid\\_cloud_cname** ：表示混合云反向代理接入。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'share',
                        'default' => 'share',
                    ],
                ],
                [
                    'name' => 'DomainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '域名ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyundoc.com-waf',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\"\\n}","type":"json"}]',
            'title' => '删除CNAME接入资源',
        ],
        'DescribeDomains' => [
            'summary' => '查询添加到 Web 应用防火墙的域名列表。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)，查看当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'title' => '域名',
                        'description' => '添加到WAF防护的域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'Backend',
                    'in' => 'query',
                    'schema' => [
                        'title' => '回源地址',
                        'description' => '域名对应的源站服务器IP或服务器回源域名。您只能选择设置源站服务器IP或服务器回源域名中的一种。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.1.XX.XX',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，返回第几页数据。默认值为1，表示返回第1页数据。',
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
                        'description' => '分页查询时，每页包含多少条结果。默认值为10，表示每页包含10条结果。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '50',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'description' => '资源的标签，最多支持20个子项。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源的标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TagKey1',
                                ],
                                'Value' => [
                                    'description' => '标签值',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TagValue1',
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
                        'description' => 'CNAME接入列表。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'ABF68BB3-2C48-5FA4-9750-D5FE55700E36',
                            ],
                            'TotalCount' => [
                                'description' => '查询到的域名配置的总数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '146',
                            ],
                            'Domains' => [
                                'description' => 'CNAME接入列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'CNAME接入详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Domain' => [
                                            'title' => '域名',
                                            'description' => '已接入WAF的域名名称。',
                                            'type' => 'string',
                                            'example' => 'www.aliyundoc.com',
                                        ],
                                        'Status' => [
                                            'title' => '域名状态',
                                            'description' => '域名状态。取值：'."\n"
                                                ."\n"
                                                .'- **1**：表示域名处于正常状态。'."\n"
                                                ."\n"
                                                .'- **2**：表示域名创建中。'."\n"
                                                ."\n"
                                                .'- **3**：表示域名修改中。'."\n"
                                                ."\n"
                                                .'- **4**：表示域名释放中。'."\n"
                                                ."\n"
                                                .'- **5**：表示域名停止转发。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Cname' => [
                                            'title' => 'CNAME',
                                            'description' => 'WAF为域名分配的CNAME地址。',
                                            'type' => 'string',
                                            'example' => 'xxxxxcvdaf.****.com',
                                        ],
                                        'ListenPorts' => [
                                            'description' => '配置监听信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Http' => [
                                                    'description' => 'HTTP协议的监听端口列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => 'HTTP协议的监听端口。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '80',
                                                    ],
                                                ],
                                                'Https' => [
                                                    'description' => 'HTTPS协议的监听端口列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => 'HTTPS协议的监听端口。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '443',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Backeds' => [
                                            'description' => '回源配置信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Http' => [
                                                    'description' => 'HTTP协议回源地址列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => 'HTTP协议回源地址。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Backend' => [
                                                                'description' => 'HTTP协议回源地址。',
                                                                'type' => 'string',
                                                                'example' => '1.1.XX.XX',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'Https' => [
                                                    'description' => 'HTTPS协议回源地址列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => 'HTTPS协议回源地址。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Backend' => [
                                                                'description' => 'HTTPS协议回源地址。',
                                                                'type' => 'string',
                                                                'example' => '1.1.XX.XX',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ResourceManagerResourceGroupId' => [
                                            'description' => '阿里云资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-acfmvtc5z52****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABF68BB3-2C48-5FA4-9750-D5FE55700E36\\",\\n  \\"TotalCount\\": 146,\\n  \\"Domains\\": [\\n    {\\n      \\"Domain\\": \\"www.aliyundoc.com\\",\\n      \\"Status\\": 1,\\n      \\"Cname\\": \\"xxxxxcvdaf.****.com\\",\\n      \\"ListenPorts\\": {\\n        \\"Http\\": [\\n          80\\n        ],\\n        \\"Https\\": [\\n          443\\n        ]\\n      },\\n      \\"Backeds\\": {\\n        \\"Http\\": [\\n          {\\n            \\"Backend\\": \\"1.1.XX.XX\\"\\n          }\\n        ],\\n        \\"Https\\": [\\n          {\\n            \\"Backend\\": \\"1.1.XX.XX\\"\\n          }\\n        ]\\n      },\\n      \\"ResourceManagerResourceGroupId\\": \\"rg-acfmvtc5z52****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询CNAME接入列表',
        ],
        'DescribeDomainDetail' => [
            'summary' => '查询域名接入详情。',
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
                'abilityTreeCode' => '113957',
                'abilityTreeNodes' => [
                    'FEATUREwafD36LCH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'title' => '域名',
                        'description' => '要查询的域名名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'CNAME详情。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BAEF9CA9-66A0-533E-BD09-5D5D7AA8****',
                            ],
                            'Domain' => [
                                'title' => '域名',
                                'description' => '域名',
                                'type' => 'string',
                                'example' => 'www.aliyundoc.com',
                            ],
                            'Status' => [
                                'title' => '状态',
                                'description' => '域名状态。取值：'."\n"
                                    ."\n"
                                    .'- **1**：表示域名处于正常状态。'."\n"
                                    ."\n"
                                    .'- **2**：表示域名创建中。'."\n"
                                    ."\n"
                                    .'- **3**：表示域名修改中。'."\n"
                                    ."\n"
                                    .'- **4**：表示域名释放中。'."\n"
                                    ."\n"
                                    .'- **5**：表示域名停止转发。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Cname' => [
                                'description' => 'WAF为域名分配的CNAME地址。',
                                'type' => 'string',
                                'example' => 'xxxxxcvdaf.****.com',
                            ],
                            'Listen' => [
                                'title' => '监听配置',
                                'description' => '配置监听信息。',
                                'type' => 'object',
                                'properties' => [
                                    'HttpPorts' => [
                                        'title' => 'HTTP端口',
                                        'description' => 'HTTP协议的监听端口。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'HTTP协议的监听端口。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '80',
                                        ],
                                    ],
                                    'HttpsPorts' => [
                                        'title' => 'HTTPS端口',
                                        'description' => 'HTTPS协议的监听端口。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'HTTPS协议的监听端口。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '443'."\n",
                                        ],
                                    ],
                                    'Http2Enabled' => [
                                        'title' => '是否开启HTTP2',
                                        'description' => '是否开启HTTP2。取值：'."\n"
                                            ."\n"
                                            .'- **true**：表示开启HTTP2。'."\n"
                                            ."\n"
                                            .'- **false**：表示不开启HTTP2。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'CertId' => [
                                        'title' => '证书ID',
                                        'description' => '证书的ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '123',
                                    ],
                                    'TLSVersion' => [
                                        'title' => 'TLS版本',
                                        'description' => 'TLS的版本。取值：'."\n"
                                            ."\n"
                                            .'- **tlsv1**'."\n"
                                            ."\n"
                                            .'- **tlsv1.1**'."\n"
                                            ."\n"
                                            .'- **tlsv1.2**',
                                        'type' => 'string',
                                        'example' => 'tlsv1.2',
                                    ],
                                    'EnableTLSv3' => [
                                        'title' => '是否支持TLS1.3',
                                        'description' => '是否支持TLS1.3版本。取值：'."\n"
                                            ."\n"
                                            .'- **true**：表示支持TLS1.3版本。'."\n"
                                            ."\n"
                                            .'- **false**：表示不支持TLS1.3版本。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'CipherSuite' => [
                                        'description' => '加密套件类型。取值：'."\n"
                                            ."\n"
                                            .'- **1**：表示添加全部加密套件。'."\n"
                                            ."\n"
                                            .'- **2**：表示添加强加密套件。'."\n"
                                            ."\n"
                                            .'- **99**：表示添加自定义加密套件。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'CustomCiphers' => [
                                        'description' => '自定义加密套件。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '自定义加密套件。',
                                            'type' => 'string',
                                            'example' => 'xxx',
                                        ],
                                    ],
                                    'FocusHttps' => [
                                        'description' => '是否开启HTTPS的强制跳转。取值：'."\n"
                                            ."\n"
                                            .'- **true**：表示开启HTTPS的强制跳转。'."\n"
                                            ."\n"
                                            .'- **false**：表示不开启HTTPS的强制跳转。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'SM2Enabled' => [
                                        'description' => '是否开启国密证书。 取值：'."\n"
                                            ."\n"
                                            .'- **true**：表示开启国密证书。'."\n"
                                            ."\n"
                                            .'- **false**：表示不开启国密证书。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'SM2CertId' => [
                                        'description' => '要添加的国密证书的ID。仅SM2Enable取值为true时，使用该参数。',
                                        'type' => 'string',
                                        'example' => '123-cn-hangzhou',
                                    ],
                                    'SM2AccessOnly' => [
                                        'description' => '是否仅客端访问。仅SM2Enable取值为true时，使用该参数。'."\n"
                                            ."\n"
                                            .'- true：仅国密客户端才可以访问。'."\n"
                                            ."\n"
                                            .'- false：国密和非国密均可以访问。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'XffHeaderMode' => [
                                        'description' => 'WAF获取客户端真实IP的方式。取值：'."\n"
                                            ."\n"
                                            .'- **0**：表示客户端访问流量到WAF前没有经过其他七层代理转发。'."\n"
                                            ."\n"
                                            .'- **1**：表示WAF读取请求头中X-Forwarded-For（XFF）字段的第一个值作为客户端IP。'."\n"
                                            ."\n"
                                            .'- **2**：表示WAF读取请求头中由您设置的自定义字段值作为客户端IP。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'XffHeaders' => [
                                        'description' => '设置用于获取客户端IP的自定义字段列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '设置用于获取客户端IP的自定义字段列表。',
                                            'type' => 'string',
                                            'example' => 'Client-ip',
                                        ],
                                    ],
                                    'IPv6Enabled' => [
                                        'title' => '是否开启IPv6',
                                        'description' => '是否开启IPv6。取值：'."\n"
                                            ."\n"
                                            .'- **true**：表示开启IPv6。'."\n"
                                            ."\n"
                                            .'- **false**：表示不开启IPv6。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'ProtectionResource' => [
                                        'title' => '防护资源',
                                        'description' => '要使用的防护资源类型。取值：'."\n"
                                            ."\n"
                                            .'- **share**：表示使用共享集群。'."\n"
                                            ."\n"
                                            .'- **gslb**：表示使用共享集群智能负载均衡。',
                                        'type' => 'string',
                                        'example' => 'share',
                                    ],
                                    'ExclusiveIp' => [
                                        'title' => '是否开启独享IP',
                                        'description' => '是否开启独享IP。取值：'."\n"
                                            ."\n"
                                            .'- **true**：表示开启独享IP。'."\n"
                                            ."\n"
                                            .'- **false**：表示不开启独享IP。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                            ],
                            'Redirect' => [
                                'title' => '转发配置',
                                'description' => '配置转发信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Backends' => [
                                        'description' => '域名对应的回源地址。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '源站服务器IP或服务器回源域名。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Backend' => [
                                                    'description' => '域名对应的源站服务器IP或服务器回源域名。',
                                                    'type' => 'string',
                                                    'example' => '1.1.XX.XX',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Loadbalance' => [
                                        'title' => '负载均衡算法',
                                        'description' => '回源时采用的负载均衡算法。取值：'."\n"
                                            ."\n"
                                            .'- **iphash**：表示IP Hash算法。'."\n"
                                            ."\n"
                                            .' - **roundRobin**：表示轮询算法。'."\n"
                                            ."\n"
                                            .'- **leastTime**：表示Least Time算法。',
                                        'type' => 'string',
                                        'example' => 'iphash',
                                    ],
                                    'FocusHttpBackend' => [
                                        'description' => '是否开启强制HTTP回源。取值：'."\n"
                                            ."\n"
                                            .'- **true**：表示开启强制HTTP回源。'."\n"
                                            ."\n"
                                            .'- **false**：表示不开启强制HTTP回源。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'SniEnabled' => [
                                        'title' => 'SNI',
                                        'description' => '是否开启回源SNI。取值：'."\n"
                                            ."\n"
                                            .'- **true**：表示开启回源SNI。'."\n"
                                            ."\n"
                                            .'- **false**（默认）：表示不开启回源SNI。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'SniHost' => [
                                        'description' => '设置自定义SNI扩展字段的值。',
                                        'type' => 'string',
                                        'example' => 'www.aliyundoc.com',
                                    ],
                                    'RequestHeaders' => [
                                        'description' => '域名的流量标记字段和值，用于标记经过WAF处理的流量。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '域名的流量标记字段和值，用于标记经过WAF处理的流量。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Key' => [
                                                    'description' => '指定的自定义请求头部字段。',
                                                    'type' => 'string',
                                                    'example' => 'aaa',
                                                ],
                                                'Value' => [
                                                    'description' => '指定的自定义请求头部字段设定的值。',
                                                    'type' => 'string',
                                                    'example' => 'bbb',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ConnectTimeout' => [
                                        'description' => '连接超时时长。单位：秒。'."\n"
                                            .'取值范围：5~120。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '120',
                                    ],
                                    'WriteTimeout' => [
                                        'description' => '写超时时长，单位：秒。'."\n"
                                            .'取值范围：5~1800。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '200',
                                    ],
                                    'ReadTimeout' => [
                                        'description' => '读超时时长，单位：秒。'."\n"
                                            .'取值范围：5~1800。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '200',
                                    ],
                                    'Keepalive' => [
                                        'description' => '是否保持长连接。取值：'."\n"
                                            ."\n"
                                            .'- **true**（默认）：表示保持长连接。'."\n"
                                            ."\n"
                                            .'- **false**：表示不保持长连接。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                        'default' => 'true',
                                    ],
                                    'Retry' => [
                                        'description' => 'WAF回源失败时，是否重试。取值：'."\n"
                                            ."\n"
                                            .'- **true**（默认）：表示重试。'."\n"
                                            ."\n"
                                            .'- **false**：表示不重试。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                        'default' => 'true',
                                    ],
                                    'KeepaliveRequests' => [
                                        'description' => '复用长连接的请求个数。取值范围：60~1000，单位：个。'."\n"
                                            ."\n"
                                            .'> 开启长连接后，复用多少个长连接。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1000',
                                        'default' => '100',
                                    ],
                                    'KeepaliveTimeout' => [
                                        'description' => '空闲长连接超时时间，取值范围：1~60，默认15，单位：秒。'."\n"
                                            ."\n"
                                            .'> 复用的长连接空闲多长时间后释放。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '15',
                                        'default' => '15',
                                    ],
                                    'XffProto' => [
                                        'description' => 'X-Forward-For-Proto传递WAF的协议。取值：'."\n"
                                            ."\n"
                                            .'- **true**（默认）：表示传递WAF的协议。'."\n"
                                            ."\n"
                                            .'- **false**：表示不传递WAF的协议。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                            ],
                            'ResourceManagerResourceGroupId' => [
                                'description' => '阿里云资源组ID。',
                                'type' => 'string',
                                'example' => 'rg-acfm***q',
                            ],
                            'CertDetail' => [
                                'description' => 'SSL证书详情。',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'description' => '证书名称',
                                        'type' => 'string',
                                        'example' => 'test-cert-name',
                                    ],
                                    'Id' => [
                                        'description' => 'SSL证书ID',
                                        'type' => 'string',
                                        'example' => '123-cn-hangzhou',
                                    ],
                                    'StartTime' => [
                                        'description' => '证书生效时间，格式为Unix时间戳（UTC时间），单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1677772800000',
                                    ],
                                    'EndTime' => [
                                        'description' => '证书到期时间，格式为Unix时间戳（UTC时间），单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1685590400000',
                                    ],
                                    'CommonName' => [
                                        'description' => '通用名称（CN）',
                                        'type' => 'string',
                                        'example' => 'test.aliyundoc.com',
                                    ],
                                    'Sans' => [
                                        'description' => '证书绑定的所有域名。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '证书绑定的所有域名。',
                                            'type' => 'string',
                                            'example' => 'www.aliyundoc.com',
                                        ],
                                    ],
                                ],
                            ],
                            'SM2CertDetail' => [
                                'description' => '国密证书信息',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'description' => '证书名称',
                                        'type' => 'string',
                                        'example' => 'test-sm2-cert-name',
                                    ],
                                    'Id' => [
                                        'description' => 'SSL证书ID',
                                        'type' => 'string',
                                        'example' => '123-cn-hangzhou',
                                    ],
                                    'StartTime' => [
                                        'description' => '证书生效时间，格式为Unix时间戳（UTC时间），单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1657551525000',
                                    ],
                                    'EndTime' => [
                                        'description' => '证书到期时间，格式为Unix时间戳（UTC时间），单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1665590400000',
                                    ],
                                    'CommonName' => [
                                        'description' => '通用名称（CN）',
                                        'type' => 'string',
                                        'example' => 'test.aliyundoc.com'."\n",
                                    ],
                                    'Sans' => [
                                        'description' => '证书绑定的所有域名。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '证书绑定的所有域名。',
                                            'type' => 'string',
                                            'example' => 'www.aliyundoc.com'."\n",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BAEF9CA9-66A0-533E-BD09-5D5D7AA8****\\",\\n  \\"Domain\\": \\"www.aliyundoc.com\\",\\n  \\"Status\\": 1,\\n  \\"Cname\\": \\"xxxxxcvdaf.****.com\\",\\n  \\"Listen\\": {\\n    \\"HttpPorts\\": [\\n      80\\n    ],\\n    \\"HttpsPorts\\": [\\n      443\\n    ],\\n    \\"Http2Enabled\\": true,\\n    \\"CertId\\": 123,\\n    \\"TLSVersion\\": \\"tlsv1.2\\",\\n    \\"EnableTLSv3\\": true,\\n    \\"CipherSuite\\": 2,\\n    \\"CustomCiphers\\": [\\n      \\"xxx\\"\\n    ],\\n    \\"FocusHttps\\": true,\\n    \\"SM2Enabled\\": true,\\n    \\"SM2CertId\\": \\"123-cn-hangzhou\\",\\n    \\"SM2AccessOnly\\": true,\\n    \\"XffHeaderMode\\": 2,\\n    \\"XffHeaders\\": [\\n      \\"Client-ip\\"\\n    ],\\n    \\"IPv6Enabled\\": true,\\n    \\"ProtectionResource\\": \\"share\\",\\n    \\"ExclusiveIp\\": true\\n  },\\n  \\"Redirect\\": {\\n    \\"Backends\\": [\\n      {\\n        \\"Backend\\": \\"1.1.XX.XX\\"\\n      }\\n    ],\\n    \\"Loadbalance\\": \\"iphash\\",\\n    \\"FocusHttpBackend\\": true,\\n    \\"SniEnabled\\": true,\\n    \\"SniHost\\": \\"www.aliyundoc.com\\",\\n    \\"RequestHeaders\\": [\\n      {\\n        \\"Key\\": \\"aaa\\",\\n        \\"Value\\": \\"bbb\\"\\n      }\\n    ],\\n    \\"ConnectTimeout\\": 120,\\n    \\"WriteTimeout\\": 200,\\n    \\"ReadTimeout\\": 200,\\n    \\"Keepalive\\": true,\\n    \\"Retry\\": true,\\n    \\"KeepaliveRequests\\": 1000,\\n    \\"KeepaliveTimeout\\": 15,\\n    \\"XffProto\\": true\\n  },\\n  \\"ResourceManagerResourceGroupId\\": \\"rg-acfm***q\\",\\n  \\"CertDetail\\": {\\n    \\"Name\\": \\"test-cert-name\\",\\n    \\"Id\\": \\"123-cn-hangzhou\\",\\n    \\"StartTime\\": 1677772800000,\\n    \\"EndTime\\": 1685590400000,\\n    \\"CommonName\\": \\"test.aliyundoc.com\\",\\n    \\"Sans\\": [\\n      \\"www.aliyundoc.com\\"\\n    ]\\n  },\\n  \\"SM2CertDetail\\": {\\n    \\"Name\\": \\"test-sm2-cert-name\\",\\n    \\"Id\\": \\"123-cn-hangzhou\\",\\n    \\"StartTime\\": 1657551525000,\\n    \\"EndTime\\": 1665590400000,\\n    \\"CommonName\\": \\"test.aliyundoc.com\\\\n\\",\\n    \\"Sans\\": [\\n      \\"www.aliyundoc.com\\\\n\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询CNAME接入详情',
        ],
        'DescribePunishedDomains' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)，查看当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-uqm****qa07',
                    ],
                ],
                [
                    'name' => 'Domains',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '已接入WAF的域名列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '已接入WAF的域名。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'demo.xxxaliyundoc.com',
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekz7nc****aata',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B1F4D802-55A1-5D53-A247-7E79****85E7',
                            ],
                            'PunishedDomains' => [
                                'description' => '未备案处罚的域名列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '未备案处罚的域名。',
                                    'type' => 'string',
                                    'example' => 'demo.xxxaliyundoc.com'."\n",
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B1F4D802-55A1-5D53-A247-7E79****85E7\\",\\n  \\"PunishedDomains\\": [\\n    \\"demo.xxxaliyundoc.com\\\\n\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询已接入WAF域名的未备案处罚信息',
            'summary' => '查询已接入WAF域名的未备案处罚信息。',
        ],
        'ModifyDomainPunishStatus' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v2_public_cn-zxu****0g02',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '未备案处罚状态的域名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo.xxxxaliyundoc.com',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
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
                                'description' => '本次请求的id。',
                                'type' => 'string',
                                'example' => '70E65A35-22B8-567C-B0A0-A2E9****20AE',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Waf.Pullin.DomainNotBeianOrInBlackList',
                        'errorMessage' => 'The domain does not have an ICP filling or has been blacklisted.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"70E65A35-22B8-567C-B0A0-A2E9****20AE\\"\\n}","type":"json"}]',
            'title' => '重新接入未备案处罚状态的域名',
            'summary' => '重新接入未备案处罚状态的域名。',
        ],
        'DescribeCertDetail' => [
            'summary' => '查询证书详细信息，如证书名称、到期时间、签发时间，绑定域名等。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-uax****3k0e',
                    ],
                ],
                [
                    'name' => 'CertIdentifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123-cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'SourceIp',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
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
                                'example' => '3C115DBE-8E53-5A12-9CAF-FD3F****CDF6',
                            ],
                            'CertDetail' => [
                                'description' => 'SSL证书详情。',
                                'type' => 'object',
                                'properties' => [
                                    'Domain' => [
                                        'description' => '证书绑定的域名。',
                                        'type' => 'string',
                                        'example' => 'demo.xxxaliyun.com',
                                    ],
                                    'CertName' => [
                                        'description' => '证书名称。',
                                        'type' => 'string',
                                        'example' => 'testCertName',
                                    ],
                                    'CertIdentifier' => [
                                        'description' => '证书ID。',
                                        'type' => 'string',
                                        'example' => '123-cn-hangzhou',
                                    ],
                                    'CommonName' => [
                                        'description' => '主域名，通用域名。',
                                        'type' => 'string',
                                        'example' => '*.xxxaliyun.com'."\n",
                                    ],
                                    'AfterDate' => [
                                        'description' => 'CA证书的到期日期。使用时间戳表示，单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1976256736582',
                                    ],
                                    'BeforeDate' => [
                                        'description' => '证书签发时间，单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1976256736582',
                                    ],
                                    'Sans' => [
                                        'description' => '证书绑定的其他域名列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '证书绑定的其他域名。',
                                            'type' => 'string',
                                            'example' => 'demo.yyyaliyun.com',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3C115DBE-8E53-5A12-9CAF-FD3F****CDF6\\",\\n  \\"CertDetail\\": {\\n    \\"Domain\\": \\"demo.xxxaliyun.com\\",\\n    \\"CertName\\": \\"testCertName\\",\\n    \\"CertIdentifier\\": \\"123-cn-hangzhou\\",\\n    \\"CommonName\\": \\"*.xxxaliyun.com\\\\n\\",\\n    \\"AfterDate\\": 1976256736582,\\n    \\"BeforeDate\\": 1976256736582,\\n    \\"Sans\\": [\\n      \\"demo.yyyaliyun.com\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询证书详细信息',
        ],
        'DescribeCerts' => [
            'summary' => '查询用户的证书列表。',
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
                        'title' => '域名',
                        'description' => '域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.aliyun.com',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询的页码。默认值：**1**。',
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
                        'description' => '分页查询时，每页的行数。默认值为**10**，最大100。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '1000',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-5yd****tb02',
                    ],
                ],
                [
                    'name' => 'Algorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加密算法类型。取值：'."\n"
                            ."\n"
                            .'- **NotSM2（默认）**：表示非国密算法。'."\n"
                            ."\n"
                            .'- **SM2**：表示国密算法。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SM2',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmoiy****p2oq',
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
                                'example' => '19511B0D-5AE0-5600-BB8A-DC2C8345****',
                            ],
                            'TotalCount' => [
                                'description' => '返回结果的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8',
                            ],
                            'Certs' => [
                                'description' => '证书列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '证书对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Domain' => [
                                            'description' => '已接入WAF的域名。',
                                            'type' => 'string',
                                            'example' => 'www.example.com	'."\n",
                                        ],
                                        'CertName' => [
                                            'description' => '证书名称。',
                                            'type' => 'string',
                                            'example' => 'waf1234',
                                        ],
                                        'CertIdentifier' => [
                                            'description' => '全局证书ID，证书ID+"-cn-hangzhou"。如果证书ID=123，则CertIdentifier=“123-cn-hangzhou”。',
                                            'type' => 'string',
                                            'example' => '12345-cn-hangzhou',
                                        ],
                                        'CommonName' => [
                                            'description' => '通用域名。',
                                            'type' => 'string',
                                            'example' => '*.example.com	',
                                        ],
                                        'IsChainCompleted' => [
                                            'description' => '证书链是否完整。取值：'."\n"
                                                ."\n"
                                                .'- **true**：表示完整。'."\n"
                                                ."\n"
                                                .'- **false**：表示不完整。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'AfterDate' => [
                                            'description' => '生效时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1976256736582',
                                        ],
                                        'BeforeDate' => [
                                            'description' => '到期时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1976256836582',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"19511B0D-5AE0-5600-BB8A-DC2C8345****\\",\\n  \\"TotalCount\\": 8,\\n  \\"Certs\\": [\\n    {\\n      \\"Domain\\": \\"www.example.com\\\\t\\\\n\\",\\n      \\"CertName\\": \\"waf1234\\",\\n      \\"CertIdentifier\\": \\"12345-cn-hangzhou\\",\\n      \\"CommonName\\": \\"*.example.com\\\\t\\",\\n      \\"IsChainCompleted\\": true,\\n      \\"AfterDate\\": 1976256736582,\\n      \\"BeforeDate\\": 1976256836582\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询用户的可选证书列表',
        ],
        'DescribeDomainDNSRecord' => [
            'summary' => '查询域名DNS是否正确。',
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
                'abilityTreeCode' => '179230',
                'abilityTreeNodes' => [
                    'FEATUREwafD36LCH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-nwy****is02',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的域名名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'xxx.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                                'example' => 'D827FCFE-90A7-4330-9326-D33C8B4C****',
                            ],
                            'DNSStatus' => [
                                'description' => 'DNS状态。取值：'."\n"
                                    ."\n"
                                    .'- **cnameMatched**：表示正常。'."\n"
                                    ."\n"
                                    .'- **vipMatched**：表示A记录。'."\n"
                                    ."\n"
                                    .'- **wafVip**：表示使用其他WAF的VIP。'."\n"
                                    ."\n"
                                    .'- **unRecord**：表示没有DNS解析。'."\n"
                                    ."\n"
                                    .'- **unUsed**：表示未过WAF。'."\n"
                                    ."\n"
                                    .'- **checkTimeout**：表示检测超时。',
                                'type' => 'string',
                                'example' => 'cnameMatched',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D827FCFE-90A7-4330-9326-D33C8B4C****\\",\\n  \\"DNSStatus\\": \\"cnameMatched\\"\\n}","type":"json"}]',
            'title' => '查询CNAME域名DNS解析状态',
        ],
        'DescribeWafSourceIpSegment' => [
            'summary' => '查询WAF回源网段。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v2_public_cn-*****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '查询结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9087ADDC-9047-4D02-82A7-33021B58083C',
                            ],
                            'WafSourceIp' => [
                                'description' => '防护集群使用的WAF回源IP网段列表。',
                                'type' => 'object',
                                'properties' => [
                                    'IPv4' => [
                                        'description' => 'IPv4的回源网段列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'IPv4的回源网段。',
                                            'type' => 'string',
                                            'example' => '101.200.XX.XX/24',
                                        ],
                                    ],
                                    'IPv6' => [
                                        'description' => 'IPv6的回源网段列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'IPv6的回源网段。',
                                            'type' => 'string',
                                            'example' => '2408:XXXX:3c:4800::/56',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9087ADDC-9047-4D02-82A7-33021B58083C\\",\\n  \\"WafSourceIp\\": {\\n    \\"IPv4\\": [\\n      \\"101.200.XX.XX/24\\"\\n    ],\\n    \\"IPv6\\": [\\n      \\"2408:XXXX:3c:4800::/56\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取waf实例的回源IP网段列表',
        ],
        'DescribeResourcePort' => [
            'summary' => '查询实例下的所有已接入WAF端口。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'ResourceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源的实例ID',
                        'description' => '云产品实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8vb40vj87znu3ai7l5lv4-80****'."\n",
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '查询结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '66A98669-CC6E-4F3E-80A6-3014697B11AE',
                            ],
                            'ResourcePorts' => [
                                'description' => '已接入WAF的所有HTTP协议和HTTPS协议的监听端口。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'HTTP协议和HTTPS协议的监听端口。',
                                    'type' => 'string',
                                    'example' => '80',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"66A98669-CC6E-4F3E-80A6-3014697B11AE\\",\\n  \\"ResourcePorts\\": [\\n    \\"80\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询实例下的所有已接入WAF端口',
        ],
        'DescribeHybridCloudResources' => [
            'summary' => '查询混合云域名列表。',
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
                'abilityTreeCode' => '156993',
                'abilityTreeNodes' => [
                    'FEATUREwafSBJ1DO',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)，查看当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-***********',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'title' => '域名',
                        'description' => '要查询的域名名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'Backend',
                    'in' => 'query',
                    'schema' => [
                        'title' => '回源地址',
                        'description' => '域名对应的源站服务器IP或服务器回源域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.1.XX.XX',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，返回第几页数据。默认值为**1**，表示返回第1页数据。',
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
                        'description' => '分页查询时，每页包含多少条结果。默认值为**10**，表示每页包含10条结果。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '50',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'CnameEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启公共云容灾。取值：'."\n"
                            ."\n"
                            .'- **true**：表示开启公共云容灾。'."\n"
                            ."\n"
                            .'- **false**：表示不开启公共云容灾。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmvtc5z52****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '98D2AA9A-5959-5CCD-83E3-B6606232A2BE',
                            ],
                            'TotalCount' => [
                                'description' => '返回结果的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '24',
                            ],
                            'Domains' => [
                                'description' => '本次获取的域名列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '域名接入详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'description' => '接入ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'enumValueTitles' => [],
                                            'example' => '12345',
                                        ],
                                        'Uid' => [
                                            'description' => '用户ID。',
                                            'type' => 'string',
                                            'example' => '130715431409****',
                                        ],
                                        'Domain' => [
                                            'title' => '域名',
                                            'description' => '域名',
                                            'type' => 'string',
                                            'example' => 'www.aliyundoc.com',
                                        ],
                                        'Status' => [
                                            'title' => '域名状态',
                                            'description' => '域名状态。取值：'."\n"
                                                ."\n"
                                                .'- **1**：表示域名处于正常状态。'."\n"
                                                ."\n"
                                                .'- **2**：表示域名创建中。'."\n"
                                                ."\n"
                                                .'- **3**：表示域名修改中。'."\n"
                                                ."\n"
                                                .'- **4**：表示域名释放中。'."\n"
                                                ."\n"
                                                .'- **5**：表示域名停止转发。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Cname' => [
                                            'title' => 'CNAME',
                                            'description' => 'WAF为域名分配的CNAME地址。'."\n"
                                                .'> 仅在**CnameEnabled**取值为true（表示开启公共云容灾）时，返回该参数。',
                                            'type' => 'string',
                                            'example' => '50fqmu1ci7g0xtiyxnrhgx6qdhmn****.yundunwaf5.com',
                                        ],
                                        'Listen' => [
                                            'description' => '配置监听信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'HttpPorts' => [
                                                    'description' => 'HTTP协议的监听端口列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => 'HTTP协议的监听端口。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '80',
                                                    ],
                                                ],
                                                'HttpsPorts' => [
                                                    'description' => 'HTTPS端口列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => 'HTTPS协议的端口。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '443',
                                                    ],
                                                ],
                                                'Http2Enabled' => [
                                                    'description' => '是否开启HTTP2。取值：'."\n"
                                                        ."\n"
                                                        .'- **true**：表示开启HTTP2。'."\n"
                                                        ."\n"
                                                        .'- **false**：表示不开启HTTP2。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'CertId' => [
                                                    'description' => '证书ID',
                                                    'type' => 'string',
                                                    'example' => '72***76-cn-hangzhou',
                                                ],
                                                'TLSVersion' => [
                                                    'description' => 'TLS的版本。取值：'."\n"
                                                        ."\n"
                                                        .'- **tlsv1**'."\n"
                                                        ."\n"
                                                        .'- **tlsv1.1**'."\n"
                                                        ."\n"
                                                        .'- **tlsv1.2**',
                                                    'type' => 'string',
                                                    'example' => 'tlsv1.2',
                                                ],
                                                'EnableTLSv3' => [
                                                    'description' => '是否支持TLS1.3版本。取值：'."\n"
                                                        ."\n"
                                                        .'- **true**：表示支持TLS1.3版本。'."\n"
                                                        ."\n"
                                                        .'- **false**：表示不支持TLS1.3版本。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'CipherSuite' => [
                                                    'description' => '加密套件类型。取值：'."\n"
                                                        ."\n"
                                                        .'- **1**：表示添加全部加密套件。'."\n"
                                                        ."\n"
                                                        .'- **2**：表示添加强加密套件。'."\n"
                                                        ."\n"
                                                        .'- **99**：表示添加自定义加密套件。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'CustomCiphers' => [
                                                    'description' => '要添加的具体自定义加密套件。'."\n"
                                                        ."\n"
                                                        .'> 仅**CipherSuite**取值为**99**时，返回该参数。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '自定义加密套件。',
                                                        'type' => 'string',
                                                        'example' => 'ECDHE-ECDSA-AES128-GCM-SHA256',
                                                    ],
                                                ],
                                                'FocusHttps' => [
                                                    'description' => '是否开启HTTPS的强制跳转。取值：'."\n"
                                                        ."\n"
                                                        .'- **true**：表示开启HTTPS的强制跳转。'."\n"
                                                        ."\n"
                                                        .'- **false**：表示不开启HTTPS的强制跳转。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'XffHeaderMode' => [
                                                    'description' => 'WAF获取客户端真实IP的方式。取值：'."\n"
                                                        ."\n"
                                                        .'- **0**：表示客户端访问流量到WAF前没有经过其他七层代理转发。'."\n"
                                                        ."\n"
                                                        .'- **1**：表示WAF读取请求头中X-Forwarded-For（XFF）字段的第一个值作为客户端IP。'."\n"
                                                        ."\n"
                                                        .'- **2**：表示WAF读取请求头中由您设置的自定义字段值作为客户端IP。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'XffHeaders' => [
                                                    'description' => '用于获取客户端IP的自定义字段列表，使用**["header1","header2",……]**格式表示。'."\n"
                                                        ."\n"
                                                        .'> 仅在**XffHeaderMode**取值为2（表示WAF读取请求头中由您设置的自定义字段值作为客户端IP）时，返回该参数。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '用于获取客户端IP的自定义字段列表。',
                                                        'type' => 'string',
                                                        'example' => 'Client-ip',
                                                    ],
                                                ],
                                                'IPv6Enabled' => [
                                                    'description' => '开启IPv6	是否开启IPv6。取值：'."\n"
                                                        ."\n"
                                                        .'- **true**：表示开启IPv6。'."\n"
                                                        ."\n"
                                                        .'- **false**：表示不开启IPv6。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'ProtectionResource' => [
                                                    'description' => '要使用的防护资源类型。取值：'."\n"
                                                        ."\n"
                                                        .'- **share**：表示使用共享集群。'."\n"
                                                        ."\n"
                                                        .'- **gslb**：表示使用共享集群智能负载均衡。',
                                                    'type' => 'string',
                                                    'example' => 'share',
                                                ],
                                                'ExclusiveIp' => [
                                                    'description' => '是否支持独享IP。取值：'."\n"
                                                        .'- **true**：表示支持。'."\n"
                                                        ."\n"
                                                        .'- **false**：表示不支持。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                            ],
                                        ],
                                        'Redirect' => [
                                            'description' => '配置转发信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Backends' => [
                                                    'description' => '域名对应的源站服务器IP或服务器回源域名。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '域名对应的源站服务器IP或服务器回源域名。',
                                                        'type' => 'string',
                                                        'example' => '1.1.XX.XX',
                                                    ],
                                                ],
                                                'FocusHttpBackend' => [
                                                    'description' => '是否开启强制HTTP回源。取值：'."\n"
                                                        ."\n"
                                                        .'- **true**：表示开启强制HTTP回源。'."\n"
                                                        ."\n"
                                                        .'- **false**：表示不开启强制HTTP回源。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'Loadbalance' => [
                                                    'description' => '回源时采用的负载均衡算法。取值：'."\n"
                                                        ."\n"
                                                        .'- **iphash**：表示IP Hash算法。'."\n"
                                                        ."\n"
                                                        .' - **roundRobin**：表示轮询算法。'."\n"
                                                        ."\n"
                                                        .'- **leastTime**：表示Least Time算法。',
                                                    'type' => 'string',
                                                    'example' => 'iphash',
                                                ],
                                                'SniEnabled' => [
                                                    'description' => '是否开启回源SNI。取值：'."\n"
                                                        ."\n"
                                                        .'- **true**：表示开启回源SNI。'."\n"
                                                        ."\n"
                                                        .'- **false**：表示不开启回源SNI。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'SniHost' => [
                                                    'description' => 'SNI扩展字段的自定义值。取值为空表示未自定义SNI值，默认使用请求头中**Host**字段的值作为SNI扩展字段的值。'."\n"
                                                        ."\n"
                                                        .'> 仅在**SniEnabled**取值为**true**（表示开启SNI回源）时，返回该参数。',
                                                    'type' => 'string',
                                                    'example' => 'www.aliyundoc.com',
                                                ],
                                                'RequestHeaders' => [
                                                    'description' => '域名的流量标记字段和值，用于标记经过WAF处理的流量。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '域名的流量标记字段和值，用于标记经过WAF处理的流量。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Key' => [
                                                                'description' => '指定的自定义请求头部字段。',
                                                                'type' => 'string',
                                                                'example' => 'aaa',
                                                            ],
                                                            'Value' => [
                                                                'description' => '指定的自定义请求头部字段设定的值。',
                                                                'type' => 'string',
                                                                'example' => 'bbb',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'ConnectTimeout' => [
                                                    'description' => '连接超时时长。单位：秒。'."\n"
                                                        .'取值范围：5~120。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '120',
                                                ],
                                                'CnameEnabled' => [
                                                    'description' => '是否开启公共云容灾。取值：'."\n"
                                                        ."\n"
                                                        .'- **true**：表示开启公共云容灾。'."\n"
                                                        ."\n"
                                                        .'- **false**：表示不开启公共云容灾。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'RoutingRules' => [
                                                    'description' => '混合云转发规则。使用JSON数组转化的字符串格式表示。JSON数组中的每个元素是一个结构体，包含以下字段：'."\n"
                                                        .'- **rs**：Array类型 | 表示回源IP地址或者回源CNAME列表'."\n"
                                                        ."\n"
                                                        .'- **location**：String类型 | 表示防护节点名称'."\n"
                                                        ."\n"
                                                        .'- **locationId**：Long类型 | 表示防护节点ID',
                                                    'type' => 'string',
                                                    'example' => '['."\n"
                                                        .'      {'."\n"
                                                        .'            "rs": ['."\n"
                                                        .'                  "1.1.XX.XX"'."\n"
                                                        .'            ],'."\n"
                                                        .'            "locationId": 535,'."\n"
                                                        .'            "location": "test1111"'."\n"
                                                        .'      }'."\n"
                                                        .']',
                                                ],
                                                'Keepalive' => [
                                                    'description' => '是否保持长连接。取值：'."\n"
                                                        ."\n"
                                                        .'- **true**：表示保持长连接。'."\n"
                                                        ."\n"
                                                        .'- **false**：表示不保持长连接。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'KeepaliveRequests' => [
                                                    'description' => '复用长连接的请求个数。取值范围：60~1000，单位：个。'."\n"
                                                        ."\n"
                                                        .'> 开启长连接后，复用多少个长连接。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1000',
                                                ],
                                                'KeepaliveTimeout' => [
                                                    'description' => '空闲长连接超时时间，取值范围：1~60，默认15，单位：秒。'."\n"
                                                        ."\n"
                                                        .'> 复用的长连接空闲多久后释放。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '15',
                                                ],
                                                'ReadTimeout' => [
                                                    'description' => '读超时时长，单位：秒。'."\n"
                                                        .'取值范围：5~1800。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '200',
                                                ],
                                                'Retry' => [
                                                    'description' => 'WAF回源失败时，是否重试。取值：'."\n"
                                                        ."\n"
                                                        .'- **true**：表示重试。'."\n"
                                                        ."\n"
                                                        .'- **false**：表示不重试。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'WriteTimeout' => [
                                                    'description' => '写超时时长，单位：秒。'."\n"
                                                        .'取值范围：5~1800。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '200',
                                                ],
                                            ],
                                        ],
                                        'ResourceManagerResourceGroupId' => [
                                            'description' => '阿里云资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-acfmvtc5z52****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"98D2AA9A-5959-5CCD-83E3-B6606232A2BE\\",\\n  \\"TotalCount\\": 24,\\n  \\"Domains\\": [\\n    {\\n      \\"Id\\": 12345,\\n      \\"Uid\\": \\"130715431409****\\",\\n      \\"Domain\\": \\"www.aliyundoc.com\\",\\n      \\"Status\\": 1,\\n      \\"Cname\\": \\"50fqmu1ci7g0xtiyxnrhgx6qdhmn****.yundunwaf5.com\\",\\n      \\"Listen\\": {\\n        \\"HttpPorts\\": [\\n          80\\n        ],\\n        \\"HttpsPorts\\": [\\n          443\\n        ],\\n        \\"Http2Enabled\\": false,\\n        \\"CertId\\": \\"72***76-cn-hangzhou\\",\\n        \\"TLSVersion\\": \\"tlsv1.2\\",\\n        \\"EnableTLSv3\\": true,\\n        \\"CipherSuite\\": 1,\\n        \\"CustomCiphers\\": [\\n          \\"ECDHE-ECDSA-AES128-GCM-SHA256\\"\\n        ],\\n        \\"FocusHttps\\": false,\\n        \\"XffHeaderMode\\": 0,\\n        \\"XffHeaders\\": [\\n          \\"Client-ip\\"\\n        ],\\n        \\"IPv6Enabled\\": false,\\n        \\"ProtectionResource\\": \\"share\\",\\n        \\"ExclusiveIp\\": true\\n      },\\n      \\"Redirect\\": {\\n        \\"Backends\\": [\\n          \\"1.1.XX.XX\\"\\n        ],\\n        \\"FocusHttpBackend\\": true,\\n        \\"Loadbalance\\": \\"iphash\\",\\n        \\"SniEnabled\\": true,\\n        \\"SniHost\\": \\"www.aliyundoc.com\\",\\n        \\"RequestHeaders\\": [\\n          {\\n            \\"Key\\": \\"aaa\\",\\n            \\"Value\\": \\"bbb\\"\\n          }\\n        ],\\n        \\"ConnectTimeout\\": 120,\\n        \\"CnameEnabled\\": true,\\n        \\"RoutingRules\\": \\"[\\\\n      {\\\\n            \\\\\\"rs\\\\\\": [\\\\n                  \\\\\\"1.1.XX.XX\\\\\\"\\\\n            ],\\\\n            \\\\\\"locationId\\\\\\": 535,\\\\n            \\\\\\"location\\\\\\": \\\\\\"test1111\\\\\\"\\\\n      }\\\\n]\\",\\n        \\"Keepalive\\": true,\\n        \\"KeepaliveRequests\\": 1000,\\n        \\"KeepaliveTimeout\\": 15,\\n        \\"ReadTimeout\\": 200,\\n        \\"Retry\\": true,\\n        \\"WriteTimeout\\": 200\\n      },\\n      \\"ResourceManagerResourceGroupId\\": \\"rg-acfmvtc5z52****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询混合云CNAME接入列表',
        ],
        'CreateDefenseResourceGroup' => [
            'summary' => '创建防护对象组。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要创建的防护对象组名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'group221',
                    ],
                ],
                [
                    'name' => 'AddList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要添加到防护对象组的防护对象。支持一次添加多个防护对象到防护对象组。多个防护对象之间使用英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test1.aliyundoc.com,test2.aliyundoc.com'."\n",
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护对象组描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_domain',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5D69B341-4F97-58E7-9E16-1B17FE7A9E98',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5D69B341-4F97-58E7-9E16-1B17FE7A9E98\\"\\n}","type":"json"}]',
            'title' => '创建防护对象组',
        ],
        'ModifyDefenseResourceGroup' => [
            'summary' => '修改防护对象组配置信息。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改的防护对象组名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test01',
                    ],
                ],
                [
                    'name' => 'AddList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要添加到防护对象组中的防护对象。多个防护对象之间使用英文逗号（,）分隔。该参数为空，表示防护对象组不添加任何防护对象。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test1.aliyundoc.com,test2.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'DeleteList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要从防护对象组中删除的防护对象。多个防护对象之间使用英文逗号（,）分隔。该参数为空，表示不从防护对象组中删除任何防护对象。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test14.waf.com,test24.waf.com',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护对象组描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2CC1AFDE-BB31-5A2F-906E-92FCBDDE6B75',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2CC1AFDE-BB31-5A2F-906E-92FCBDDE6B75\\"\\n}","type":"json"}]',
            'title' => '修改防护对象组',
        ],
        'DeleteDefenseResourceGroup' => [
            'summary' => '删除防护对象组。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的防护对象组名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'group221',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '25BE1169-9AE4-5D7D-8293-C33242ABB549',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"25BE1169-9AE4-5D7D-8293-C33242ABB549\\"\\n}","type":"json"}]',
            'title' => '删除防护对象组',
        ],
        'DescribeDefenseResourceGroup' => [
            'summary' => '查询单个防护对象组信息。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的防护对象组名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'group221',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E67D21C6-5376-5F94-B745-70E08D03E3CB',
                            ],
                            'Group' => [
                                'description' => '防护组信息。',
                                'type' => 'object',
                                'properties' => [
                                    'GroupName' => [
                                        'description' => '要查询的防护对象组名称。',
                                        'type' => 'string',
                                        'example' => 'group1',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '防护对象组的创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '23242312312',
                                    ],
                                    'GmtModified' => [
                                        'description' => '防护对象组的修改时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '23242312312',
                                    ],
                                    'ResourceList' => [
                                        'description' => '已加入防护对象组的所有防护对象。多个防护对象之间使用英文逗号（,）分隔。',
                                        'type' => 'string',
                                        'example' => 'test1.aliyundoc.com,test2.aliyundoc.com',
                                    ],
                                    'Description' => [
                                        'description' => '防护对象组描述信息。',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E67D21C6-5376-5F94-B745-70E08D03E3CB\\",\\n  \\"Group\\": {\\n    \\"GroupName\\": \\"group1\\",\\n    \\"GmtCreate\\": 23242312312,\\n    \\"GmtModified\\": 23242312312,\\n    \\"ResourceList\\": \\"test1.aliyundoc.com,test2.aliyundoc.com\\",\\n    \\"Description\\": \\"test\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询单个防护对象组',
        ],
        'DescribeDefenseResourceGroups' => [
            'summary' => '分页查询防护对象组。',
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
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v2_public_cn-wwo36****0i',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxc7lf****eq',
                    ],
                ],
                [
                    'name' => 'GroupNameLike',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的防护对象组名称。您可以设置该参数，模糊查询已创建的防护对象组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demoGroupName',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，返回第几页数据。默认值为**1**，表示返回第 1 页数据。',
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
                        'description' => '分页查询时，每页包含多少条结果。默认值为**20**，表示每页包含 20 条结果。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'GroupNames',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的多个防护对象组。您可以设置该参数，查询多个已创建的防护对象组，多个防护对象组之间使用英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'groupName1,groupName2',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                                'example' => 'BFEC5C77-049B-5E88-A5B6-CB0C****B66E',
                            ],
                            'TotalCount' => [
                                'description' => '返回结果的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Groups' => [
                                'description' => '防护对象组列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '防护对象组。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Description' => [
                                            'description' => '防护对象组描述信息。',
                                            'type' => 'string',
                                            'example' => 'This is test description',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '防护对象组的创建时间。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1624343180000',
                                        ],
                                        'GmtModified' => [
                                            'description' => '防护对象组的修改时间。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1701656305000',
                                        ],
                                        'GroupName' => [
                                            'description' => '防护对象组名称。',
                                            'type' => 'string',
                                            'example' => 'apptest',
                                        ],
                                        'ResourceList' => [
                                            'description' => '防护对象组加入的防护对象名称集合，多个防护对象之间使用英文逗号（,）分隔。',
                                            'type' => 'string',
                                            'example' => 'example02.aliyun-waf,example01.aliyun-waf',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BFEC5C77-049B-5E88-A5B6-CB0C****B66E\\",\\n  \\"TotalCount\\": 10,\\n  \\"Groups\\": [\\n    {\\n      \\"Description\\": \\"This is test description\\",\\n      \\"GmtCreate\\": 1624343180000,\\n      \\"GmtModified\\": 1701656305000,\\n      \\"GroupName\\": \\"apptest\\",\\n      \\"ResourceList\\": \\"example02.aliyun-waf,example01.aliyun-waf\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '分页查询防护对象组',
        ],
        'DescribeDefenseResourceGroupNames' => [
            'summary' => '查询防护对象组名称列表。',
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
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-lbj****cc03',
                    ],
                ],
                [
                    'name' => 'GroupNameLike',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的防护对象组名称。您可以设置该参数，模糊查询已创建的防护对象组名称。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'example-group',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，返回第几页数据。默认值为**1**，表示返回第 1 页数据。',
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
                        'description' => '分页查询时，每页包含多少条结果。默认值为**20**，表示每页包含 20 条结果。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekzwwk****cv5i',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '59DA4258-2F32-5095-B283-57AC****70B3',
                            ],
                            'TotalCount' => [
                                'description' => '返回结果的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8',
                            ],
                            'GroupNames' => [
                                'description' => '防护对象组名称列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '防护对象组名称。',
                                    'type' => 'string',
                                    'example' => 'example-group-name',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"59DA4258-2F32-5095-B283-57AC****70B3\\",\\n  \\"TotalCount\\": 8,\\n  \\"GroupNames\\": [\\n    \\"example-group-name\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询防护对象组名称列表',
        ],
        'DescribeDefenseResource' => [
            'summary' => '查询单个防护对象。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-4xl****i60i',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'Resource',
                    'in' => 'query',
                    'schema' => [
                        'title' => '防护对象名称',
                        'description' => '要查询的防护对象名称。您可以设置该参数，精确查询已接入 WAF 的防护对象。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.aliyundoc.com-waf	',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'description' => '请求返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '439AADF2-368C-5E98-B14E-3086****0573',
                            ],
                            'Resource' => [
                                'description' => '防护对象信息。',
                                'type' => 'object',
                                'properties' => [
                                    'GmtCreate' => [
                                        'description' => '防护对象创建时间，单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1607493144000',
                                    ],
                                    'GmtModified' => [
                                        'description' => '防护对象修改时间，单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1691720010000',
                                    ],
                                    'Product' => [
                                        'description' => '云产品名称。',
                                        'type' => 'string',
                                        'example' => 'alb',
                                    ],
                                    'Resource' => [
                                        'description' => '防护对象名称。',
                                        'type' => 'string',
                                        'example' => 'alb-rencs***'."\n",
                                    ],
                                    'ResourceGroup' => [
                                        'description' => '防护对象加入的防护对象组的名称。',
                                        'type' => 'string',
                                        'example' => 'example_resource_group',
                                    ],
                                    'Detail' => [
                                        'description' => '防护对象的具体描述信息，Map 中不同的键值对表示防护对象不同的属性。',
                                        'type' => 'object',
                                        'example' => '{'."\n"
                                            .'"product": "waf",'."\n"
                                            .' "domain": "demo.aliyundoc****.com"'."\n"
                                            .'}',
                                    ],
                                    'Pattern' => [
                                        'description' => '防护对象的防护形式。',
                                        'type' => 'string',
                                        'example' => 'domain',
                                    ],
                                    'XffStatus' => [
                                        'description' => 'WAF 前是否开启七层代理（高防/CDN 等）。取值：'."\n"
                                            ."\n"
                                            .'- **0**：未开启。'."\n"
                                            ."\n"
                                            .'- **1**：开启。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'CustomHeaders' => [
                                        'description' => '指定 Header 字段列表。'."\n"
                                            .'> XffStatus = 1时，取指定 Header 字段中的第一个 IP 作为客户端源 IP，避免 XFF 伪造，输入多个 Header 时按顺序依次尝试取源 IP，如果第一个取不到则取第二个，依次类推，如果所有指定 Header 都取不到，则取 X-Forwarded-For 中第一个 IP。XffStatus = 1时，表示从第一个获取。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '指定的 Header 字段。',
                                            'type' => 'string',
                                            'example' => 'x-forwarded-for',
                                        ],
                                    ],
                                    'ResourceOrigin' => [
                                        'description' => '防护对象来源。取值：'."\n"
                                            ."\n"
                                            .'- **custom**：表示从接入管理创建的防护对象。'."\n"
                                            ."\n"
                                            .'- **access**：表示用户自定义创建的防护对象。',
                                        'type' => 'string',
                                        'example' => 'custom',
                                    ],
                                    'Description' => [
                                        'description' => '描述信息。',
                                        'type' => 'string',
                                        'example' => 'This is Description',
                                    ],
                                    'ResourceManagerResourceGroupId' => [
                                        'description' => '阿里云资源组ID。',
                                        'type' => 'string',
                                        'example' => 'rg-acfmoiy****p2oq',
                                    ],
                                    'AcwCookieStatus' => [
                                        'description' => '跟踪cookie开关状态。'."\n"
                                            ."\n"
                                            .'- **0**：表示关闭。'."\n"
                                            ."\n"
                                            .'- **1**：表示开启。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'AcwSecureStatus' => [
                                        'description' => '跟踪cookie的secure属性状态。'."\n"
                                            ."\n"
                                            .'- **0**：表示关闭。'."\n"
                                            ."\n"
                                            .'- **1**：表示开启。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'AcwV3SecureStatus' => [
                                        'description' => '滑块cookie的secure属性状态。'."\n"
                                            ."\n"
                                            .'- **0**：表示关闭。'."\n"
                                            ."\n"
                                            .'- **1**：表示开启。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'OwnerUserId' => [
                                        'description' => '防护对象归属UID。',
                                        'type' => 'string',
                                        'example' => '170457******9107',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"439AADF2-368C-5E98-B14E-3086****0573\\",\\n  \\"Resource\\": {\\n    \\"GmtCreate\\": 1607493144000,\\n    \\"GmtModified\\": 1691720010000,\\n    \\"Product\\": \\"alb\\",\\n    \\"Resource\\": \\"alb-rencs***\\\\n\\",\\n    \\"ResourceGroup\\": \\"example_resource_group\\",\\n    \\"Detail\\": {\\n      \\"product\\": \\"waf\\",\\n      \\"domain\\": \\"demo.aliyundoc****.com\\"\\n    },\\n    \\"Pattern\\": \\"domain\\",\\n    \\"XffStatus\\": 0,\\n    \\"CustomHeaders\\": [\\n      \\"x-forwarded-for\\"\\n    ],\\n    \\"ResourceOrigin\\": \\"custom\\",\\n    \\"Description\\": \\"This is Description\\",\\n    \\"ResourceManagerResourceGroupId\\": \\"rg-acfmoiy****p2oq\\",\\n    \\"AcwCookieStatus\\": 0,\\n    \\"AcwSecureStatus\\": 0,\\n    \\"AcwV3SecureStatus\\": 0,\\n    \\"OwnerUserId\\": \\"170457******9107\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询单个防护对象',
        ],
        'DescribeDefenseResources' => [
            'summary' => '分页查询防护对象。',
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
                'abilityTreeCode' => '106336',
                'abilityTreeNodes' => [
                    'FEATUREwafNZKQ0J',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
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
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，每页包含多少条结果。默认值为**10**，表示每页包含10条结果。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Query',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询条件，JSON格式的字符串。'."\n"
                            ."\n"
                            .'>根据不同的查询条件，查询到的防护对象结果不同。详细信息，请参见**Query参数描述**。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"product\\":\\"waf\\"}',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '资源标签列表，最多包含20个子项。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源标签，由标签建和标签值组成。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Tagkey1',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TagValue1',
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
                        'description' => '请求返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '618F2626-DB27-5187-8C6C-4E61A491****',
                            ],
                            'Resources' => [
                                'description' => '防护对象列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '防护对象信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'GmtCreate' => [
                                            'description' => '防护对象创建时间，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1652149203187',
                                        ],
                                        'GmtModified' => [
                                            'description' => '防护对象修改时间，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1665633032000',
                                        ],
                                        'Product' => [
                                            'description' => '云产品名称。',
                                            'type' => 'string',
                                            'example' => 'alb',
                                        ],
                                        'Resource' => [
                                            'description' => '防护对象名称。',
                                            'type' => 'string',
                                            'example' => 'alb-rencs***',
                                        ],
                                        'ResourceGroup' => [
                                            'description' => '防护对象加入防护组的名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'ResourceOrigin' => [
                                            'description' => '防护对象来源。',
                                            'type' => 'string',
                                            'example' => 'custom',
                                        ],
                                        'Description' => [
                                            'description' => '描述信息。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'Detail' => [
                                            'description' => '防护对象的具体描述信息，Map中不同的键值对表示防护对象不同的属性。',
                                            'type' => 'object',
                                        ],
                                        'Pattern' => [
                                            'description' => '防护对象的防护形式。',
                                            'type' => 'string',
                                            'example' => 'domain',
                                        ],
                                        'XffStatus' => [
                                            'description' => '防护对象是否开启xff代理。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'CustomHeaders' => [
                                            'description' => '自定义xff头用来取真实的客户端源IP，当xff=1且该字段为空时表示取xff头中第一个IP作为客户端源IP。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '自定义头字段信息。',
                                                'type' => 'string',
                                                'example' => 'afbfbajf',
                                            ],
                                        ],
                                        'ResourceManagerResourceGroupId' => [
                                            'description' => '阿里云资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-acfm***q',
                                        ],
                                        'AcwCookieStatus' => [
                                            'description' => '跟踪cookie开关状态。'."\n"
                                                ."\n"
                                                .'- **0**：表示关闭。'."\n"
                                                ."\n"
                                                .'- **1**：表示开启。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'AcwSecureStatus' => [
                                            'description' => '跟踪cookie的secure属性状态。'."\n"
                                                ."\n"
                                                .'- **0**：表示关闭。'."\n"
                                                ."\n"
                                                .'- **1**：表示开启。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'AcwV3SecureStatus' => [
                                            'description' => '滑块cookie的secure属性状态。'."\n"
                                                ."\n"
                                                .'- **0**：表示关闭。'."\n"
                                                ."\n"
                                                .'- **1**：表示开启。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'OwnerUserId' => [
                                            'description' => '多账号统一管理场景中防护对象资产归属账号。',
                                            'type' => 'string',
                                            'example' => '135*********46',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '返回结果的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '73',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"618F2626-DB27-5187-8C6C-4E61A491****\\",\\n  \\"Resources\\": [\\n    {\\n      \\"GmtCreate\\": 1652149203187,\\n      \\"GmtModified\\": 1665633032000,\\n      \\"Product\\": \\"alb\\",\\n      \\"Resource\\": \\"alb-rencs***\\",\\n      \\"ResourceGroup\\": \\"test\\",\\n      \\"ResourceOrigin\\": \\"custom\\",\\n      \\"Description\\": \\"test\\",\\n      \\"Detail\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"Pattern\\": \\"domain\\",\\n      \\"XffStatus\\": 1,\\n      \\"CustomHeaders\\": [\\n        \\"afbfbajf\\"\\n      ],\\n      \\"ResourceManagerResourceGroupId\\": \\"rg-acfm***q\\",\\n      \\"AcwCookieStatus\\": 1,\\n      \\"AcwSecureStatus\\": 0,\\n      \\"AcwV3SecureStatus\\": 0,\\n      \\"OwnerUserId\\": \\"135*********46\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 73\\n}","type":"json"}]',
            'title' => '分页查询防护对象',
            'requestParamsDescription' => '# Query参数描述'."\n"
                .'##### 参数描述'."\n"
                ."\n"
                .'|名称|类型|是否必选|示例值|描述|'."\n"
                .'| ----------| ------------| ------------ | ---------- | -----------|'."\n"
                .'|product | String|可选|waf|资产类型，取值：<br> - **waf**：表示通过Cname或其他方式接入WAF。<br> -  **alb**：表示通过ALB接入。<br> -  **clb**：表示通过CLB接入。<br> -  **ecs**：表示通过ECS接入。<br> -  **mse**：表示通过MSE接入。<br> -  **fc**：表示通过FC接入。|'."\n"
                .'|resourceLike | String|可选|example.aliyundoc.c|要查询的防护对象名称。您可以设置该参数，模糊查询已接入WAF的防护对象。'."\n"
                .'|resource|String|可选|example.aliyundoc.com-waf|要查询的防护对象名称。您可以设置该参数，精确查询已接入WAF的防护对象。'."\n"
                .'|resourceIn|String|可选|example1.aliyundoc.com,example2.aliyundoc.com|要查询的多个防护对象。您可以设置该参数，查询多个已接入WAF的防护对象。多个防护对象之间使用英文逗号（,）分隔。'."\n"
                .'|instanceId|String|可选|alb-nifa24****|要查询的防护对象的实例ID。您可以设置该参数，精确查询已接入WAF的防护对象的实例ID。'."\n"
                .'|domain|String|可选|example.aliyundoc.com|要查询的防护对象的域名。您可以设置该参数，精确查询已接入WAF的防护对象的域名。'."\n"
                .'|resourceGroup|String|可选|group1|要查询的防护对象组。'."\n"
                .'|inGroup|Boolean|可选|true|防护对象是否已加入该防护对象组。'."\n"
                .'|ownerUserId|String|可选|135********23|要查询防护对象的资产归属账号。您可以设置该参数，精确查询多账号场景中归属某一账号的WAF防护对象。'."\n"
                .'|orderBy|String|可选|resource|设置防护对象排序方式。取值：<br> - **resource** : 表示按防护对象名称排序。 <br> - **gmtModified** : 表示按修改时间排序。'."\n"
                .'|desc|Boolean|可选|true|设置排序顺序。取值：<br> - **false** : 表示正序显示。<br> - **true** : 表示倒序显示。'."\n"
                ."\n"
                .'##### 示例'."\n"
                .'``` json'."\n"
                .'{'."\n"
                .'    "product ": "waf",'."\n"
                .'    "resource": "example.aliyundoc.com-waf",'."\n"
                .'    "domain": "example.aliyundoc.com",'."\n"
                .'    "resourceLike ": "example.aliyundoc.c",'."\n"
                .'    "InstaneId": "waf_cn****",'."\n"
                .'    "resourceIn": "example1.aliyundoc.com,example2.aliyundoc.com",'."\n"
                .'    "ownerUserId": "135**********41"'."\n"
                .'}'."\n"
                .'```',
        ],
        'DescribeDefenseResourceNames' => [
            'summary' => '分页查询防护对象名称列表。',
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
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v2_public_cn-9lb****5s03',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekzd4c****pdwy',
                    ],
                ],
                [
                    'name' => 'Resource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的防护对象名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.xxxxaliyundoc.com',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，返回第几页数据。默认值为**1**，表示返回第 1 页数据。',
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
                        'description' => '分页查询时，每页包含多少条结果。默认值为**20**，表示每页包含 20 条结果。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C1823E96-EF4B-5BD2-9E02-1D18****3ED8',
                            ],
                            'TotalCount' => [
                                'description' => '返回结果的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '75',
                            ],
                            'Resources' => [
                                'description' => '防护对象名称列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '防护对象名称。',
                                    'type' => 'string',
                                    'example' => 'example.aliyundoc.com-waf',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C1823E96-EF4B-5BD2-9E02-1D18****3ED8\\",\\n  \\"TotalCount\\": 75,\\n  \\"Resources\\": [\\n    \\"example.aliyundoc.com-waf\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询防护对象名称列表',
        ],
        'ModifyDefenseResourceXff' => [
            'summary' => '修改防护对象的客户端IP和cookie设置。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'XffStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF前是否开启七层代理（高防/CDN等）。取值：'."\n"
                            ."\n"
                            .'- **0（默认）**：未开启。'."\n"
                            ."\n"
                            .'- **1**：开启。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v2_public_cn-wwo****ek07',
                    ],
                ],
                [
                    'name' => 'CustomHeaders',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '指定Header字段列表。'."\n"
                            ."\n"
                            .'> 取指定Header字段中的第一个IP作为客户端源IP，避免XFF伪造，输入多个Header时按顺序依次尝试取源IP，如果第一个取不到则取第二个，依次类推，如果所有指定Header都取不到，则取X-Forwarded-For中第一个IP',
                        'type' => 'array',
                        'items' => [
                            'description' => '指定的Header字段。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'x-forwarded-for',
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
                [
                    'name' => 'Resource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护对象名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'alb-4pxu81fgagx3h6y****-alb',
                    ],
                ],
                [
                    'name' => 'AcwCookieStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跟踪cookie开关状态。'."\n"
                            ."\n"
                            .'- **0**：表示关闭。'."\n"
                            ."\n"
                            .'- **1（默认）**：表示开启。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'AcwSecureStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跟踪cookie的secure属性状态。'."\n"
                            ."\n"
                            .'- **0（默认）**：表示关闭。'."\n"
                            ."\n"
                            .'- **1**：表示开启。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'AcwV3SecureStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '滑块cookie的secure属性状态。'."\n"
                            ."\n"
                            .'- **0（默认）**：表示关闭。'."\n"
                            ."\n"
                            .'- **1**：表示开启。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'SourceIp',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2ki****miwq',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6C094583-9B3F-5BD8-8748-DC638E48****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6C094583-9B3F-5BD8-8748-DC638E48****\\"\\n}","type":"json"}]',
            'title' => '修改防护对象的客户端IP和cookie设置',
        ],
        'ModifyDefenseRuleCache' => [
            'summary' => '更新网页防篡改防护规则缓存。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-zvp****xm2r',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护规则模板ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护规则ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '12345678',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A0F2B994-8645-5270-A05D-9DAD8C35****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A0F2B994-8645-5270-A05D-9DAD8C35****\\"\\n}","type":"json"}]',
            'title' => '更新网页防篡改防护规则缓存',
        ],
        'DescribeDefenseResourceTemplates' => [
            'summary' => '查询防护对象或防护组的防护模板。',
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
                'abilityTreeCode' => '106375',
                'abilityTreeNodes' => [
                    'FEATUREwafNZKQ0J',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'>  您可以调用[DescribeInstance](~~433756~~)，查看当前WAF实例的ID。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-9lb36****0e',
                    ],
                ],
                [
                    'name' => 'Resource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的防护对象或防护组名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'mitsuichemicals.cn-waf',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护资源类型。取值：'."\n"
                            .'- **single**（默认）：防护对象。'."\n"
                            .'- **group**：防护对象组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'single',
                    ],
                ],
                [
                    'name' => 'RuleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护规则类型。取值：'."\n"
                            .'- **defense**（默认）：防护规则'."\n"
                            .'- **whitelist**：白名单规则',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'whitelist',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护规则的ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20111098',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aek2ax2y5****pi',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2305CEB0-BA5A-5543-A1D3-3F1D08911B1C',
                            ],
                            'Templates' => [
                                'description' => '防护模板列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '防护模板。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DefenseScene' => [
                                            'description' => '要创建的WAF防护场景，取值：'."\n"
                                                ."\n"
                                                .'- **waf_group**：表示基础防护。'."\n"
                                                ."\n"
                                                .'- **antiscan**：表示扫描防护。'."\n"
                                                ."\n"
                                                .'- **ip_blacklist**：表示IP黑名单。'."\n"
                                                ."\n"
                                                .'- **custom_acl**：表示自定义规则。'."\n"
                                                ."\n"
                                                .'- **whitelist**：表示白名单。'."\n"
                                                ."\n"
                                                .'- **region_block**：表示区域封禁。'."\n"
                                                ."\n"
                                                .'- **custom_response**：表示自定义响应。'."\n"
                                                ."\n"
                                                .'- **cc**：表示CC防护。'."\n"
                                                ."\n"
                                                .'- **tamperproof**：表示网页防篡改。'."\n"
                                                ."\n"
                                                .'- **dlp**：表示信息泄露防护。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'whitelist',
                                        ],
                                        'GmtModified' => [
                                            'description' => '防护模板创建时间，格式为时间戳，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1692930539000',
                                        ],
                                        'TemplateId' => [
                                            'description' => '防护模板ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '34328',
                                        ],
                                        'TemplateName' => [
                                            'description' => '防护模板名称。',
                                            'type' => 'string',
                                            'example' => 'WAF扫描防护',
                                        ],
                                        'TemplateOrigin' => [
                                            'description' => '要创建的防护模板来源。取值为custom，表示用户自定义。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'custom',
                                        ],
                                        'TemplateStatus' => [
                                            'description' => '防护模板状态。取值：'."\n"
                                                .'- **0**：表示关闭。'."\n"
                                                .'- **1**：表示开启。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'TemplateType' => [
                                            'description' => '防护模板类型。取值：'."\n"
                                                .'- **user_default**：表示用户默认防护。'."\n"
                                                .'- **user_custom**：表示用户自定义防护。',
                                            'type' => 'string',
                                            'example' => 'user_custom',
                                        ],
                                        'DefenseSubScene' => [
                                            'description' => '防护模版子场景，取值：'."\n"
                                                .'- **web**：表示BOT管理网页防护场景模版。'."\n"
                                                .'- **app**：表示BOT管理APP防护场景模版。'."\n"
                                                .'- **basic**：表示BOT管理基础防护模版。',
                                            'type' => 'string',
                                            'example' => 'basic',
                                        ],
                                        'Description' => [
                                            'description' => '模板描述。',
                                            'type' => 'string',
                                            'example' => '示例防护模板',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2305CEB0-BA5A-5543-A1D3-3F1D08911B1C\\",\\n  \\"Templates\\": [\\n    {\\n      \\"DefenseScene\\": \\"whitelist\\",\\n      \\"GmtModified\\": 1692930539000,\\n      \\"TemplateId\\": 34328,\\n      \\"TemplateName\\": \\"WAF扫描防护\\",\\n      \\"TemplateOrigin\\": \\"custom\\",\\n      \\"TemplateStatus\\": 1,\\n      \\"TemplateType\\": \\"user_custom\\",\\n      \\"DefenseSubScene\\": \\"basic\\",\\n      \\"Description\\": \\"示例防护模板\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询防护对象或防护组的防护模板',
        ],
        'DescribeDefenseTemplateValidGroups' => [
            'summary' => '查询防护模板待生效的防护对象组名称列表。',
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
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-nwy****pf0e',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的防护对象组名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'group221',
                    ],
                ],
                [
                    'name' => 'DefenseScene',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的WAF防护场景，取值：'."\n"
                            ."\n"
                            .'- **waf_group**：表示基础防护。'."\n"
                            ."\n"
                            .'- **antiscan**：表示扫描防护。'."\n"
                            ."\n"
                            .'- **ip_blacklist**：表示IP黑名单。'."\n"
                            ."\n"
                            .'- **custom_acl**：表示自定义规则。'."\n"
                            ."\n"
                            .'- **whitelist**：表示白名单。'."\n"
                            ."\n"
                            .'- **region_block**：表示区域封禁。'."\n"
                            ."\n"
                            .'- **custom_response**：表示自定义响应。'."\n"
                            ."\n"
                            .'- **cc**：表示CC防护。'."\n"
                            ."\n"
                            .'- **tamperproof**：表示网页防篡改。'."\n"
                            ."\n"
                            .'- **dlp**：表示信息泄露防护。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'region_block',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，返回第几页数据。默认值为**1**，表示返回第 1 页数据。',
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
                        'description' => '分页查询时，每页包含多少条结果。默认值为**20**，表示每页包含 20 条结果。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的防护模板ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2th****v6ay',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6EA4B39A-9C0C-5E57-993E-30B6****3AD0',
                            ],
                            'TotalCount' => [
                                'description' => '返回结果的总记录数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '27',
                            ],
                            'Groups' => [
                                'description' => '防护对象组名称列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '防护对象组名称。',
                                    'type' => 'string',
                                    'example' => 'group_example',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6EA4B39A-9C0C-5E57-993E-30B6****3AD0\\",\\n  \\"TotalCount\\": 27,\\n  \\"Groups\\": [\\n    \\"group_example\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询防护模板待生效的防护对象组名称列表',
        ],
        'DescribeDefenseTemplates' => [
            'summary' => '分页查询防护模板列表。',
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
                'abilityTreeCode' => '106374',
                'abilityTreeNodes' => [
                    'FEATUREwaf1LM6V0',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)，查看当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-pe33b****03',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护模板ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '39395',
                    ],
                ],
                [
                    'name' => 'TemplateType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要创建的防护模板类型。取值：'."\n"
                            .'- **user_default**：表示用户默认防护。'."\n"
                            .'- **user_custom**：表示用户自定义防护。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'user_default',
                    ],
                ],
                [
                    'name' => 'DefenseScene',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要创建的WAF防护场景，取值：'."\n"
                            ."\n"
                            .'- **waf_group**：表示基础防护。'."\n"
                            ."\n"
                            .'- **antiscan**：表示扫描防护。'."\n"
                            ."\n"
                            .'- **ip_blacklist**：表示IP黑名单。'."\n"
                            ."\n"
                            .'- **custom_acl**：表示自定义规则。'."\n"
                            ."\n"
                            .'- **whitelist**：表示白名单。'."\n"
                            ."\n"
                            .'- **region_block**：表示区域封禁。'."\n"
                            ."\n"
                            .'- **custom_response**：表示自定义响应。'."\n"
                            ."\n"
                            .'- **cc**：表示CC防护。'."\n"
                            ."\n"
                            .'- **tamperproof**：表示网页防篡改。'."\n"
                            ."\n"
                            .'- **dlp**：表示信息泄露防护。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'region_block',
                    ],
                ],
                [
                    'name' => 'Resource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护对象或防护组名称。'."\n"
                            ."\n"
                            .'> 和ResourceType字段搭配使用，筛选生效时，两个字段都需要有值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ruiqiu.cc-ecs',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护资源类型。取值：'."\n"
                            .'- **single**（默认）：防护对象。'."\n"
                            .'- **group**：防护对象组。'."\n"
                            ."\n\n"
                            .'> 和Resource字段搭配使用，筛选生效时，两个字段都需要有值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'single',
                    ],
                ],
                [
                    'name' => 'DefenseSubScene',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护模版子场景，取值：'."\n"
                            .'- **web**：表示BOT管理网页防护场景模版。'."\n"
                            .'- **app**：表示BOT管理APP防护场景模版。'."\n"
                            .'- **basic**：表示BOT管理基础防护模版。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'basic',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询请求时返回的页码。默认值为**1**。',
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
                        'description' => '分页查询时每页的行数。默认值为**20**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmvyknl****fa',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4F26D2F1-E288-5104-8518-05E240E337A4',
                            ],
                            'TotalCount' => [
                                'description' => '返回结果的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'Templates' => [
                                'description' => '防护模板列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '防护模板。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DefenseScene' => [
                                            'description' => '要创建的WAF防护场景，取值：'."\n"
                                                ."\n"
                                                .'- **waf_group**：表示基础防护。'."\n"
                                                ."\n"
                                                .'- **antiscan**：表示扫描防护。'."\n"
                                                ."\n"
                                                .'- **ip_blacklist**：表示IP黑名单。'."\n"
                                                ."\n"
                                                .'- **custom_acl**：表示自定义规则。'."\n"
                                                ."\n"
                                                .'- **whitelist**：表示白名单。'."\n"
                                                ."\n"
                                                .'- **region_block**：表示区域封禁。'."\n"
                                                ."\n"
                                                .'- **custom_response**：表示自定义响应。'."\n"
                                                ."\n"
                                                .'- **cc**：表示CC防护。'."\n"
                                                ."\n"
                                                .'- **tamperproof**：表示网页防篡改。'."\n"
                                                ."\n"
                                                .'- **dlp**：表示信息泄露防护。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'whitelist',
                                        ],
                                        'GmtModified' => [
                                            'description' => '防护模板的创建时间，格式为时间戳，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1683776070000',
                                        ],
                                        'TemplateId' => [
                                            'description' => '防护模板ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '56477',
                                        ],
                                        'TemplateName' => [
                                            'description' => '防护模板名称。',
                                            'type' => 'string',
                                            'example' => 'template-blockarea1',
                                        ],
                                        'TemplateOrigin' => [
                                            'description' => '要创建的防护模板来源。取值为custom，表示用户自定义。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'custom',
                                        ],
                                        'TemplateStatus' => [
                                            'description' => '防护模板状态。取值：'."\n"
                                                .'- **0**：表示关闭。'."\n"
                                                .'- **1**：表示开启。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'TemplateType' => [
                                            'description' => '要创建的防护模板类型。取值：'."\n"
                                                .'- **user_default**：表示用户默认防护。'."\n"
                                                .'- **user_custom**：表示用户自定义防护。',
                                            'type' => 'string',
                                            'example' => 'user_custom',
                                        ],
                                        'DefenseSubScene' => [
                                            'description' => '防护模版子场景，取值：'."\n"
                                                .'- **web**：表示BOT管理网页防护场景模版。'."\n"
                                                .'- **app**：表示BOT管理APP防护场景模版。'."\n"
                                                .'- **basic**：表示BOT管理基础防护模版。',
                                            'type' => 'string',
                                            'example' => 'basic',
                                        ],
                                        'Description' => [
                                            'description' => '该模板的描述信息。',
                                            'type' => 'string',
                                            'example' => '示例防护模板。',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4F26D2F1-E288-5104-8518-05E240E337A4\\",\\n  \\"TotalCount\\": 100,\\n  \\"Templates\\": [\\n    {\\n      \\"DefenseScene\\": \\"whitelist\\",\\n      \\"GmtModified\\": 1683776070000,\\n      \\"TemplateId\\": 56477,\\n      \\"TemplateName\\": \\"template-blockarea1\\",\\n      \\"TemplateOrigin\\": \\"custom\\",\\n      \\"TemplateStatus\\": 1,\\n      \\"TemplateType\\": \\"user_custom\\",\\n      \\"DefenseSubScene\\": \\"basic\\",\\n      \\"Description\\": \\"示例防护模板。\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '分页查询防护模板列表',
        ],
        'CreateDefenseTemplate' => [
            'summary' => '创建防护模板。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)获取当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要创建的防护模板名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test221',
                    ],
                ],
                [
                    'name' => 'TemplateType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要创建的防护模板类型。取值：'."\n"
                            .'- **user_default**：表示用户默认防护。'."\n"
                            .'- **user_custom**：表示用户自定义防护。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_default',
                    ],
                ],
                [
                    'name' => 'TemplateStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要创建的防护模板状态。取值：'."\n"
                            .'- **0**：表示关闭。'."\n"
                            .'- **1**：表示开启。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DefenseScene',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护场景。更多信息，请参见[CreateDefenseRule](~~CreateDefenseRule~~)的**DefenseScene**参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_group',
                    ],
                ],
                [
                    'name' => 'TemplateOrigin',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要创建的防护模板来源。取值为**custom**，表示用户自定义。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'custom',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要创建的防护模板描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F48ABDF7-D777-5F26-892A-57349765D7A9',
                            ],
                            'TemplateId' => [
                                'description' => '防护模板ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2212',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F48ABDF7-D777-5F26-892A-57349765D7A9\\",\\n  \\"TemplateId\\": 2212\\n}","type":"json"}]',
            'title' => '创建防护模板',
        ],
        'CopyDefenseTemplate' => [
            'summary' => '复制当前防护模板，并生成一个新的防护模板。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)，查看当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v2_public_cn-lbj****x10g',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要复制的防护规则模板ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
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
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D7861F61-5B61-46CE-A47C-6B19****5EB0',
                            ],
                            'TemplateId' => [
                                'description' => '复制生成的防护模版ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '12346',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19****5EB0\\",\\n  \\"TemplateId\\": 12346\\n}","type":"json"}]',
            'title' => '复制防护模板',
        ],
        'ModifyDefenseTemplate' => [
            'summary' => '修改防护模板。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改的防护模板名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改的防护模板ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '7392',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改的防护模板描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1A68C85D-7467-5BB1-9A7E-2E8A5D96D88A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1A68C85D-7467-5BB1-9A7E-2E8A5D96D88A\\"\\n}","type":"json"}]',
            'title' => '修改防护模板',
        ],
        'DescribeDefenseTemplate' => [
            'summary' => '查询单个防护模板。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的防护模板ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1333',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
                            ],
                            'Template' => [
                                'description' => '模板信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DefenseScene' => [
                                        'description' => '防护场景。更多信息，请参见[CreateDefenseRule](~~CreateDefenseRule~~)的**DefenseScene**参数。',
                                        'type' => 'string',
                                        'example' => 'waf_group',
                                    ],
                                    'GmtModified' => [
                                        'description' => '防护模板修改时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1665283642000',
                                    ],
                                    'TemplateId' => [
                                        'description' => '防护规则模板ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10097',
                                    ],
                                    'TemplateName' => [
                                        'description' => '模板名称。',
                                        'type' => 'string',
                                        'example' => 'test0621',
                                    ],
                                    'TemplateOrigin' => [
                                        'description' => '要创建的防护模板来源。取值为custom，表示用户自定义。'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => 'custom',
                                    ],
                                    'TemplateStatus' => [
                                        'description' => '防护模板状态。取值：'."\n"
                                            .'- **0**：表示关闭。'."\n"
                                            .'- **1**：表示开启。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'TemplateType' => [
                                        'description' => '防护模板类型。取值：'."\n"
                                            .'- **user_default**：表示用户默认防护。'."\n"
                                            .'- **user_custom**：表示用户自定义防护。',
                                        'type' => 'string',
                                        'example' => 'user_default',
                                    ],
                                    'DefenseSubScene' => [
                                        'description' => '防护模版子场景，取值：'."\n"
                                            .'- **web**：表示BOT管理网页防护场景模版。'."\n"
                                            .'- **app**：表示BOT管理APP防护场景模版。'."\n"
                                            .'- **basic**：表示BOT管理基础防护模版。',
                                        'type' => 'string',
                                        'example' => 'app',
                                    ],
                                    'Description' => [
                                        'description' => '要创建的防护模板描述信息。',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\",\\n  \\"Template\\": {\\n    \\"DefenseScene\\": \\"waf_group\\",\\n    \\"GmtModified\\": 1665283642000,\\n    \\"TemplateId\\": 10097,\\n    \\"TemplateName\\": \\"test0621\\",\\n    \\"TemplateOrigin\\": \\"custom\\",\\n    \\"TemplateStatus\\": 1,\\n    \\"TemplateType\\": \\"user_default\\",\\n    \\"DefenseSubScene\\": \\"app\\",\\n    \\"Description\\": \\"test\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询单个防护模板',
        ],
        'ModifyDefenseTemplateStatus' => [
            'summary' => '修改防护模板状态。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护规则模板ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '2249',
                    ],
                ],
                [
                    'name' => 'TemplateStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改的防护模板状态。取值：'."\n"
                            .'- **0**：表示关闭。'."\n"
                            .'- **1**：表示开启。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '58007AE3-65D9-57BA-ABB4-1A544015FB50',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58007AE3-65D9-57BA-ABB4-1A544015FB50\\"\\n}","type":"json"}]',
            'title' => '修改防护模板状态',
        ],
        'DeleteDefenseTemplate' => [
            'summary' => '删除防护模板。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的防护模板ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '3155',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E2DE6F11-6FED-5909-95F2-2520B58C5BC7',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E2DE6F11-6FED-5909-95F2-2520B58C5BC7\\"\\n}","type":"json"}]',
            'title' => '删除防护模板',
        ],
        'CreateDefenseRule' => [
            'summary' => '创建防护规则。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看您当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v2_public_cn-****',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要创建的防护规则的防护模板ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1122',
                    ],
                ],
                [
                    'name' => 'DefenseScene',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要创建的WAF防护场景，取值：'."\n"
                            ."\n"
                            .'- **waf_group**：表示基础防护。'."\n"
                            ."\n"
                            .'- **antiscan**：表示扫描防护。'."\n"
                            ."\n"
                            .'- **ip_blacklist**：表示IP黑名单。'."\n"
                            ."\n"
                            .'- **custom_acl**：表示自定义规则。'."\n"
                            ."\n"
                            .'- **whitelist**：表示白名单。'."\n"
                            ."\n"
                            .'- **region_block**：表示区域封禁。'."\n"
                            ."\n"
                            .'- **custom_response**：表示自定义响应。'."\n"
                            ."\n"
                            .'- **cc**：表示CC防护。'."\n"
                            ."\n"
                            .'- **tamperproof**：表示网页防篡改。'."\n"
                            ."\n"
                            .'- **dlp**：表示信息泄露防护。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_group',
                    ],
                ],
                [
                    'name' => 'Rules',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则配置内容，以一系列参数构造的JSON格式转化成字符串。'."\n"
                            .'>  根据所指定的**防护规则类型**（**DefenseScene**）不同，具体涉及的参数有所不同。详细信息，请参见**防护规则参数描述**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '详见各个防护场景的规则详情',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'description' => '返回对象结构。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '当前请求的ID。',
                                'type' => 'string',
                                'example' => '26E46541-7AAB-5565-801D-F14DBDC5****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"26E46541-7AAB-5565-801D-F14DBDC5****\\"\\n}","type":"json"}]',
            'title' => '创建防护规则',
            'requestParamsDescription' => '## 防护规则参数描述'."\n"
                .'### 基础防护规则（**waf_group**）'."\n"
                .'#### 参数描述'."\n"
                ."\n"
                .'|名称|类型|是否必选|示例值|描述|'."\n"
                .'| ----------| ------------| ------------ | ---------- | -----------|'."\n"
                .'|status | Integer|必选|1|防护规则状态。该参数仅用于创建防护规则，修改防护规则状态时使用[ModifyDefenseRuleStatus](~~ModifyDefenseRuleStatus~~)接口的RuleStatus参数。取值：<br> - **0**：表示关闭。 <br> - **1**（默认）：表示开启。|'."\n"
                .'|action | String|必选|block|防护规则动作。取值：<br> - **block**：表示拦截。<br>- **monitor**：表示观察。'."\n"
                .'|policyId|Long|可选|1012|防护规则组ID。默认为中等规则组1012。'."\n"
                .'|protectionType | String|可选|sema|防护规则类型。取值：<br> - **regular**（默认）：表示正则防护。<br>- **sema**：表示语义防护。'."\n"
                .'|config|String|可选|{"nonInjectionSql":1}|自定义配置信息，以JSON字符串格式表示。具体配置信息，请参见config详细配置。'."\n"
                ."\n"
                .'**config详细配置**'."\n"
                .'- **protectionType**配置为**sema**时（基础防护规则配置为语义防护）'."\n"
                ."\n"
                .'|名称|类型|是否必选|示例值|描述|'."\n"
                .'| ----------| ------------| ------------ | ---------- | -----------|'."\n"
                .'|nonInjectionSql | Integer|必选|1|非注入型攻击检测状态。取值：<br/>- **0**：表示关闭。<br/>- **1**（默认）:表示开启。|'."\n"
                ."\n"
                .'#### 示例'."\n"
                .'``` json'."\n"
                .'{'."\n"
                .'    "DefenseScene": "waf_group",'."\n"
                .'    "TemplateId": 322,'."\n"
                .'    "InstaneId": "waf_cn****",'."\n"
                .'    "Rules": "[{\\"status\\":1,\\"policyId\\":1012,\\"action\\":\\"block\\"},{\\"status\\":1,\\"action\\":\\"block\\",\\"protectionType\\":\\"sema\\",\\"config\\":\\"{\\\\\\"nonInjectionSql\\\\\\":1}\\"}]"'."\n"
                .'}'."\n"
                .'```'."\n"
                .'### 扫描防护规则（**antiscan**）'."\n"
                .'#### 参数描述'."\n"
                ."\n"
                .'|名称|类型|是否必选|示例值|描述|'."\n"
                .'| ----------| ------------| ------------ | ---------- | -----------|'."\n"
                .'|protectionType | String|必选|highfreq|扫描防护规则子类型。取值：<br> - **highfreq**：表示高频扫描封禁。 <br> - **dirscan**：表示目录遍历封禁。<br>- **scantools**：表示扫描工具封禁。|'."\n"
                .'|status | Integer|必选|1|防护规则状态。该参数仅用于创建防护规则，修改防护规则状态时使用[ModifyDefenseRuleStatus](~~ModifyDefenseRuleStatus~~)接口的RuleStatus参数。取值：<br> - **0**：表示关闭。 <br> - **1**（默认）：表示开启。|'."\n"
                .'|action | String|必选|block|防护规则动作。取值：<br> - **block**：表示拦截。<br>- **monitor**：表示观察。'."\n"
                .'|config|String|可选|{\\"target\\":\\"remote_addr\\",\\"interval\\":60,\\"ttl\\":180,\\"count\\":20}|自定义配置信息，以JSON字符串格式进行描述。具体配置信息，请参见**config详细配置**。|'."\n"
                ."\n"
                .'**config详细配置**'."\n"
                .'- **protectionType**配置为**highfreq**时（扫描防护规则配置为高频扫描封禁）'."\n"
                ."\n"
                .'|名称|类型|是否必选|示例值|描述|'."\n"
                .'| ----------| ------------| ------------ | ---------- | -----------|'."\n"
                .'|target | String|必选|remote_addr|统计对象类型。取值：<br>- **remote_addr**（默认)：表示IP。<br> - **cookie.acw_tc**：表示会话。 <br> - **header**：表示自定义Header。选择自定义Header时，必须在subkey参数中填写需要统计的Header内容。<br> - **queryarg**：表示自定义参数。选择自定义参数时，必须在subkey参数中填写需要统计的自定义参数名称。<br> - **cookie**：表示自定义Cookie。选择自定义Cookie时，必须在subkey参数中填写需要统计的Cookie内容。|'."\n"
                .'|subKey | String|可选|abc|统计对象的子特征。当**target**参数值为**cookie**、**header**或**queryarg**时，必须在subkey参数中填写对应的信息。|'."\n"
                .'|interval | Integer|可选|60|检测时长，单位为秒。默认为60秒。<br>取值范围为：5~1800秒。|'."\n"
                .'|ttl|Integer|可选|1800|封禁时长，单位为秒。默认为1800秒。<br>取值范围为：60~86400秒。|'."\n"
                .'|count|Integer|可选|20|基础防护规则触发最大次数。默认为20次。<br>取值范围为：3~50000次。|'."\n"
                .'|ruleIdCount|Integer|可选|2|触发的最大规则数。默认为2条。<br>取值范围为：1~50条。|'."\n"
                ."\n"
                .'- **protectionType**配置为**dirscan**时（扫描防护规则配置为目录遍历封禁）'."\n"
                ."\n"
                .'|名称|类型|是否必选|示例值|描述|'."\n"
                .'| ----------| ------------| ------------ | ---------- | -----------|'."\n"
                .'|target | String|必选|remote_addr|统计和封禁对象。取值：<br/>- **remote\\_addr**（默认)：表示IP。<br/>- **cookie.acw\\_tc**：表示会话。 <br/>- **header**：表示自定义Header。<br/>- **queryarg**：表示自定义参数。<br/>- **cookie**：表示自定义Cookie。|'."\n"
                .'|subKey | String|可选|1|统计和封禁对象的子特征。仅target配置为**header、queryarg、cookie**时，配置该信息。'."\n"
                .' |interval | Integer|可选|60|检测时长，单位为秒。默认为60秒。<br>取值范围为：5~1800秒。|'."\n"
                .'|ttl|Integer|可选|1800|封禁时长，单位为秒。默认为1800秒。<br>取值范围为：60~86400秒。|'."\n"
                .'|count|Integer|可选|20|基础防护规则触发最大次数。默认为20次。<br>取值范围为：3~50000次。|'."\n"
                .'|weight|Float|可选|2|404响应码百分比。默认为0.7。<br>取值范围为：0.01~1.0，精确到小数点后两位。'."\n"
                .'|uriNum|Integer|可选|2|不存在的最大目录数。默认为50个。<br>取值范围为：2~50000个。|'."\n"
                ."\n"
                .'#### 示例'."\n"
                .'``` json'."\n"
                .'{'."\n"
                .'    "InstanceId": "waf_v2_public_****",'."\n"
                .'    "TemplateId": 2222,'."\n"
                .'    "DefenseScene": "antiscan",'."\n"
                .'    "Rules": "[{\\"protectionType\\":\\"scantools\\",\\"action\\":\\"block\\",\\"status\\":1},{\\"protectionType\\":\\"dirscan\\",\\"status\\":1,\\"action\\":\\"block\\",\\"config\\":\\"{\\\\\\"target\\\\\\":\\\\\\"remote_addr\\\\\\",\\\\\\"interval\\\\\\":10,\\\\\\"ttl\\\\\\":1800,\\\\\\"weight\\\\\\":0.7,\\\\\\"uriNum\\\\\\":50,\\\\\\"count\\\\\\":50}\\"},{\\"protectionType\\":\\"highfreq\\",\\"status\\":1,\\"action\\":\\"block\\",\\"config\\":\\"{\\\\\\"target\\\\\\":\\\\\\"remote_addr\\\\\\",\\\\\\"interval\\\\\\":60,\\\\\\"ttl\\\\\\":1800,\\\\\\"count\\\\\\":20,\\\\\\"ruleIdCount\\\\\\":2}\\"}]"'."\n"
                .'}'."\n"
                .'```'."\n"
                .'### IP黑名单规则（**ip_blacklist**）'."\n"
                .'#### 参数描述'."\n"
                .'|名称|类型|是否必选|示例值|描述|'."\n"
                .'| ----------| ------------| ------------ | ---------- | -----------|'."\n"
                .'|name | String|必选|iptest|IP黑名单规则名称。|'."\n"
                .'|status | Integer|必选|1|防护规则状态。该参数仅用于创建防护规则，修改防护规则状态时使用[ModifyDefenseRuleStatus](~~ModifyDefenseRuleStatus~~)接口的RuleStatus参数。取值：<br> - **0**：表示关闭。 <br> - **1**（默认）：表示开启。|'."\n"
                .'|action | String|必选|block|防护规则动作。取值：<br> - **block**：表示拦截。<br>- **monitor**：表示观察。'."\n"
                .'|remoteAddr|Array|必选|["1.1.XX.XX", "3.1.XX.XX/24"]|要加入的IP黑名单列表。使用["ip1","ip2",……]格式表示。'."\n"
                ."\n"
                .'#### 示例'."\n"
                .'``` json'."\n"
                .'{'."\n"
                .'    "InstanceId": "waf_v2_public_****",'."\n"
                .'    "TemplateId": 2222,'."\n"
                .'    "DefenseScene": "ip_blacklist",'."\n"
                .'    "Rules": "[{\\"name\\":\\"iptest1\\",\\"remoteAddr\\":[\\"1.1.1.2\\",\\"3.3.3.3/24\\"],\\"action\\":\\"monitor\\",\\"status\\":1},{\\"name\\":\\"iptest2\\",\\"remoteAddr\\":[\\"4.4.4.4\\",\\"5.5.5.5/32\\"],\\"action\\":\\"block\\",\\"status\\":1}]"'."\n"
                .'}'."\n"
                .'```'."\n"
                .'### 自定义规则（**custom_acl**）'."\n"
                .'#### 参数描述'."\n"
                .'|名称|类型|是否必选|示例值|描述|'."\n"
                .'| ----------| ------------| ------------ | ---------- | -----------|'."\n"
                .'|name | String|必选|iptest|自定义ACL规则名称。|'."\n"
                .'|status | Integer|必选|1|防护规则状态。该参数仅用于创建防护规则，修改防护规则状态时使用[ModifyDefenseRuleStatus](~~ModifyDefenseRuleStatus~~)接口的RuleStatus参数。取值：<br> - **0**：表示关闭。 <br> - **1**（默认）：表示开启。|'."\n"
                .'|action | String|必选|block|防护规则动作。取值：<br> - **block**：表示拦截。<br>- **monitor**：表示观察。<br> - **js**：表示JS验证。<br>- **captcha**：表示滑块。<br>- **captcha_strict**：表示严格滑块。<br> **说明** 自定义ACL支持的防护规则动作，请以**WAF控制台**中展示的自定义规则动作为准。|'."\n"
                .'|conditions|Array|必选|[{"key":"IP","opValue":"eq","values":"11.XX.XX.1"},{"key":"Header","subKey":"abc","opValue":"contains","values":"test"}]|ACL的流量特征，以JSON字符串格式进行描述，支持填写最多五个匹配条件。具体配置信息，请参见**conditions详细配置**。|'."\n"
                .'|ccStatus|Integer|必选|1|是否开启限速。取值：<br> - **0**：表示关闭限速。 <br> - **1**：表示开启限速。|'."\n"
                .'|ratelimit|JSON|可选|{"target":"remote_addr","interval":5,"threshold":2,"ttl":1800,"status":{"code":404,"count":2}}|限速详细配置，以JSON字符串格式进行描述，仅ccStatus配置为**1**时，配置该信息。具体配置信息，请参见**ratelimit详细配置**。|'."\n"
                .'|effect|String|可选|rule|设置限速生效范围，仅ccStatus配置为**1**时，配置该信息。取值：<br> - **service**：表示生效对象为防护对象。 <br> - **rule**：表示生效对象为单规则。|'."\n"
                ."\n"
                .'**conditions详细配置**'."\n"
                ."\n"
                .'|名称|类型|是否必选|示例值|描述|'."\n"
                .'| ----------| ------------| ------------ | ---------- | -----------|'."\n"
                .'|key | String|必选|IP|匹配字段。取值：URL、URLPath、IP、Referer、User-Agent、Params、Cookie、Content-Type、Content-Length、X-Forwarded-For、Post-Body、Http-Method、Header。|'."\n"
                .'|subKey | String|可选|abc|自定义子匹配字段。<br> **说明** 并不是每一个自定义规则的匹配字段（**key**）都有自定义子匹配字段（**subKey**）。关于不同匹配字段是否支持自定义子匹配字段，请以**WAF控制台**自定义规则中匹配字段和自定义匹配字段的关系为准。|'."\n"
                .'|opValue | String|必选|contain|逻辑符。取值：<br> - **not-contain**：表示不包含。<br> - **contain**：表示包含。<br> - **none**：表示不存在。<br> - **ne**：表示不等于。<br> - **eq**：表示等于。<br> - **lt**：表示值小于。<br> - **gt**：表示值大于。<br> - **len-lt**：表示长度小于。<br> - **len-eq**：表示长度等于。<br> - **len-gt**：表示长度大于。<br> - **not-match**：表示不匹配。<br> - **match-one**：表示等于多值之一。<br> - **all-not-match**：表示不等于任一值。<br> - **all-not-contain**：表示不包含任一值。<br> - **contain-one**：表示包含多值之一。<br> - **not-regex**：表示正则不匹配。<br> - **regex**：表示正则匹配。<br> - **all-not-regex**：表示正则均不匹配。<br> - **regex-one**：表示正则匹配其中之一。<br> - **prefix-match**：表示前缀匹配。<br> - **suffix-match**：表示后缀匹配。<br> - **empty**：表示内容为空。<br> - **exists**：表示字段存在。<br> - **inl**：表示在列表中。<br> **说明** 并不是每一个自定义规则的匹配字段（**key**）都能对应配置全部的逻辑符（**opValue**）。关于不同匹配字段支持使用的逻辑符，请以**WAF控制台**自定义规则中匹配字段和逻辑符的关联关系为准。|'."\n"
                .'|values | String|必选|abc|匹配内容，根据需要填写相应的内容。<br> **说明** 匹配条件参数中的逻辑符（**opValue**）、匹配内容（**values**）参数取值范围与所指定的匹配字段（**key**）相关。|'."\n"
                ."\n"
                .'**ratelimit详细配置**'."\n"
                ."\n"
                .'|名称|类型|是否必选|示例值|描述|'."\n"
                .'| ----------| ------------| ------------ | ---------- | -----------|'."\n"
                .'|target | String|必选|remote_addr|统计对象类型。取值：<br>- **remote_addr**（默认)：表示IP。<br> - **cookie.acw_tc**：表示会话。 <br> - **header**：表示自定义Header。选择自定义Header时，必须在subkey参数中填写需要统计的Header内容。<br> - **queryarg**：表示自定义参数。选择自定义参数时，必须在subkey参数中填写需要统计的自定义参数名称。<br> - **cookie**：表示自定义Cookie。选择自定义Cookie时，必须在subkey参数中填写需要统计的Cookie内容。|'."\n"
                .'|subKey | String|可选|abc|统计对象的子特征。当**target**参数值为**cookie**、**header**或**queryarg**时，必须在subkey参数中填写对应的信息。|'."\n"
                .' |interval | Integer|必选|60|统计时长，单位为秒。即访问次数的统计周期，与阈值（**threshold**）参数配合。<br>取值范围为：5~1800秒。|'."\n"
                .'|threshold|Integer|必选|200|在检测时长内，允许单个统计对象访问被防护地址的次数阈值。|'."\n"
                .'|ttl|Integer|必选|1800|处置动作的生效时长，单位为秒。<br>取值范围为：60~86400秒。|'."\n"
                .'|status|JSON|可选|{"code":404,"count":200}|响应码频率设置。以JSON字符串格式进行描述，具体包含以下参数：<br>**code**：Integer类型，必选 ，指定响应码。<br>**count**：Integer类型 ，可选，出现次数阈值，即表示当指定的响应码出现次数超过该阈值时命中防护规则。取值范围：2-50000次。count参数与ratio参数两者选其一，不可同时配置。<br>**ratio**：Integer类型 ，可选 ，出现比例阈值（百分比），即表示当指定的响应码出现比例超过该阈值时命中防护规则。取值范围：1-100。count参数与ratio参数两者选其一，不可同时配置。|'."\n"
                ."\n"
                .'#### 示例'."\n"
                .'``` json'."\n"
                .'{'."\n"
                .'    "InstanceId": "waf_v2_public_****",'."\n"
                .'    "TemplateId": 6242,'."\n"
                .'    "DefenseScene": "custom_acl",'."\n"
                .'    "Rules":"[{\\"name\\":\\"acl_test\\",\\"action\\":\\"block\\",\\"conditions\\":[{\\"key\\":\\"URL\\",\\"opValue\\":\\"contain\\",\\"values\\":\\"abc\\"}],\\"ratelimit\\":{\\"target\\":\\"remote_addr\\",\\"interval\\":5,\\"threshold\\":2,\\"ttl\\":1800,\\"status\\":{\\"code\\":404,\\"count\\":2}},\\"ccStatus\\":1,\\"effect\\":\\"rule\\",\\"status\\":1,\\"origin\\":\\"custom\\"}]"'."\n"
                .'}'."\n"
                .'```'."\n"
                .'### 白名单规则（**whitelist**）'."\n"
                .'#### 参数描述'."\n"
                .'|名称|类型|是否必选|示例值|描述|'."\n"
                .'| ----------| ------------| ------------ | ---------- | -----------|'."\n"
                .'|name | String|必选|whitelistTest|白名单规则名称。|'."\n"
                .'|status | Integer|必选|1|防护规则状态。该参数仅用于创建防护规则，修改防护规则状态时使用[ModifyDefenseRuleStatus](~~ModifyDefenseRuleStatus~~)接口的RuleStatus参数。取值：<br> - **0**：表示关闭。 <br> - **1**（默认）：表示开启。|'."\n"
                .'|conditions|Array|必选|[{"key":"IP","opValue":"eq","values":"11.XX.XX.1"},{"key":"Header","subKey":"abc","opValue":"contains","values":"test"}]|白名单的流量特征，以JSON字符串格式进行描述，支持填写最多五个匹配条件。具体配置信息，请参见**conditions详细配置**。'."\n"
                .'|tags|Array|必选|["waf", "regular"]|白名单作用模块列表，使用["**XX1**", "**XX2**",……]格式。取值：<br> - **waf**：表示全部模块。<br> - **customrule**：表示自定义规则。<br> - **blacklist**：表示IP黑名单。<br> - **antiscan**：表示扫描防护。<br> - **regular**：表示基础防护规则。<br> - **regular_rule**：表示基础防护特定正则规则。<br> - **regular_type**：表示基础防特定正则规则类型。<br> - **major_protection**：表示重保场景防护。<br> - **cc**：表示CC防护。<br> - **region_block**：表示区域封禁。<br> - **antibot_scene**：表示BOT场景防护。<br> - **dlp**：表示信息泄露防护。<br> - **tamperproof**：表示网页防篡改。|'."\n"
                .'|regularRules|Array|可选|[ "111111", "222222" ]|不检测正则规则ID列表，使用["**XX1**", "**XX2**",……]格式。仅白名单作用模块配置为基础防护特定正则规则（**tags**参数取值为**regular_rule**）时，配置该参数。|'."\n"
                .'|regularTypes|Array|可选|[ "xss", "css" ]|不检测正则规则类型列表，使用["**XX1**", "**XX2**",……]格式。仅白名单作用模块配置为Web应用正则类型（**tags**参数取值为**regular_type**）时，配置该参数。取值：<br> -  **sqli**：表示SQL注入。<br> -  **xss**：表示跨站脚本。<br> - **code_exec**：表示代码执行。<br> -  **crlf**：表示CRLF。<br> -  **lfilei**：表示本地文件包含。<br> -  **rfilei**：表示远程文件包含。<br> -  **webshell**：表示WebShell。<br> -  **csrf**：表示CSRF。<br> -  **other**：表示其他。|'."\n"
                ."\n"
                .'**conditions详细配置**'."\n"
                ."\n"
                .'|名称|类型|是否必选|示例值|描述|'."\n"
                .'| ----------| ------------| ------------ | ---------- | -----------|'."\n"
                .'|key | String|必选|IP|匹配字段。取值：**URL**、**URLPath**、**IP**、**Referer**、**User-Agent**、**Params**、**Cookie**、**Content-Type**、**Content-Length**、**X-Forwarded-For**、**Post-Body**、**Http-Method**、**Header**。'."\n"
                .'|subKey | String|可选|abc|自定义子匹配字段。<br> **说明** 并不是每一个白名单规则的匹配字段（**key**）都有自定义子匹配字段（**subKey**）。关于不同匹配字段是否支持自定义子匹配字段，请以**WAF控制台**白名单规则中匹配字段和自定义匹配字段的关系为准。|'."\n"
                .'|opValue | String|必选|contain|逻辑符。取值：<br> - **not-contain**：表示不包含。<br> - **contain**：表示包含。<br> - **none**：表示不存在。<br> - **ne**：表示不等于。<br> - **eq**：表示等于。<br> - **lt**：表示值小于。<br> - **gt**：表示值大于。<br> - **len-lt**：表示长度小于。<br> - **len-eq**：表示长度等于。<br> - **len-gt**：表示长度大于。<br> - **not-match**：表示不匹配。<br> - **match-one**：表示等于多值之一。<br> - **all-not-match**：表示不等于任一值。<br> - **all-not-contain**：表示不包含任一值。<br> - **contain-one**：表示包含多值之一。<br> - **not-regex**：表示正则不匹配。<br> - **regex**：表示正则匹配。<br> - **all-not-regex**：表示正则均不匹配。<br> - **regex-one**：表示正则匹配其中之一。<br> - **prefix-match**：表示前缀匹配。<br> - **suffix-match**：表示后缀匹配。<br> - **empty**：表示内容为空。<br> - **exists**：表示字段存在。<br> - **inl**：表示在列表中。<br> **说明** 并不是每一个白名单规则的匹配字段（**key**）都能对应配置全部的逻辑符（**opValue**）。关于不同匹配字段支持使用的逻辑符，请以**WAF控制台**白名单规则中匹配字段和逻辑符的关联关系为准。'."\n"
                .'|values | String|必选|abc|匹配内容，根据需要填写相应的内容。<br> **说明** 匹配条件参数中的逻辑符（**opValue**）、匹配内容（**values**）参数取值范围与所指定的匹配字段（**key**）相关。|'."\n"
                ."\n"
                .'#### 示例'."\n"
                .'``` json'."\n"
                .'{'."\n"
                .'    "InstanceId": "waf_v2_public_****",'."\n"
                .'    "TemplateId": 9242,'."\n"
                .'    "DefenseScene": "whitelist",'."\n"
                .'    "Rules":"[{\\"name\\":\\"whitelistTest\\",\\"tags\\":[\\"regular_rule\\",\\"customrule\\"],\\"status\\":1,\\"origin\\":\\"custom\\",\\"conditions\\":[{\\"key\\":\\"URL\\",\\"opValue\\":\\"contain\\",\\"values\\":\\"/test\\"},{\\"key\\":\\"Header\\",\\"opValue\\":\\"eq\\",\\"values\\":\\"ffff\\",\\"subKey\\":\\"abc\\"}],\\"regularRules\\":[\\"123444\\",\\"444444\\"]}]"'."\n"
                .'}'."\n"
                .'```'."\n"
                .'### 自定义响应规则（**custom_response**）'."\n"
                .'#### 参数描述'."\n"
                .'|名称|类型|是否必选|示例值|描述|'."\n"
                .'| ----------| ------------| ------------ | ---------- | -----------|'."\n"
                .'|responseType | String|必选|response_block|自定义响应的类型。取值response_block，表示拦截响应。|'."\n"
                .'|status | Integer|必选|1|防护规则状态。该参数仅用于创建防护规则，修改防护规则状态时使用[ModifyDefenseRuleStatus](~~ModifyDefenseRuleStatus~~)接口的RuleStatus参数。取值：<br> - **0**：表示关闭。 <br> - **1**（默认）：表示开启。|'."\n"
                .'|config|String|必选|{\\"responseCode\\":400,\\"responseHeaders\\":[{\\"key\\":\\"custom\\",\\"value\\":\\"123\\"},{\\"key\\":\\"aaa\\",\\"value\\":\\"2223\\"}],\\"responseContent\\":\\"HelloWorld\\"}|自定义配置信息，以JSON字符串格式进行描述。具体配置信息，请参见**config详细配置**。'."\n"
                ."\n"
                .'**config详细配置**'."\n"
                ."\n"
                .'|名称|类型|是否必选|示例值|描述|'."\n"
                .'| ----------| ------------| ------------ | ---------- | -----------|'."\n"
                .'|responseCode | Integer|必选|400|指定响应码。'."\n"
                .'|responseHeaders | Array|可选|[{"key":"custom","value":"123"},{"key":"aaaa","value":"2223"}]|自定义响应头列表，以JSON字符串格式进行描述。**key**为header的字段，**value**为header的值。'."\n"
                .'|responseContent | String|必选|helloworld|自定义响应的内容。'."\n"
                ."\n"
                .'#### 示例'."\n"
                .'``` json'."\n"
                .'{'."\n"
                .'    "InstanceId": "waf_v2_public_****",'."\n"
                .'    "TemplateId": 2841,'."\n"
                .'    "DefenseScene": "custom_response",'."\n"
                .'    "Rules":"[{\\"responseType\\":\\"response_block\\",\\"config\\":\\"{\\\\\\"templateName\\\\\\":\\\\\\"aaa\\\\\\",\\\\\\"responseCode\\\\\\":\\\\\\"400\\\\\\",\\\\\\"responseContent\\\\\\":\\\\\\"helloWorld\\\\\\",\\\\\\"responseHeaders\\\\\\":[{\\\\\\"key\\\\\\":\\\\\\"test1\\\\\\",\\\\\\"value\\\\\\":\\\\\\"abc\\\\\\"}]}\\",\\"status\\":1}]"'."\n"
                .'}'."\n"
                .'```'."\n"
                .'### 区域封禁规则（**region_block**）'."\n"
                .'#### 参数描述'."\n"
                .'|名称|类型|是否必选|示例值|描述|'."\n"
                .'| ----------| ------------| ------------ | ---------- | -----------|'."\n"
                .'|cnRegionList | String|可选|610000,230000|中国境内区域列表，只填写["**CN**"]，表示封禁中国内地区域（除港澳台）。多个区域之间使用英文逗号（,）分隔。关于地域代码的具体含义，请参见**中国境内地域代码含义说明**。|'."\n"
                .'|abroadRegionList | String|可选|KE,KG|中国境外区域列表，多个区域之间使用英文逗号（,）分隔。关于地域代码的具体含义，请参见**中国境外地域代码含义说明**。|'."\n"
                .'|status | Integer|必选|1|防护规则状态。该参数仅用于创建防护规则，修改防护规则状态时使用[ModifyDefenseRuleStatus](~~ModifyDefenseRuleStatus~~)接口的RuleStatus参数。取值：<br> - **0**：表示关闭。 <br> - **1**（默认）：表示开启。|'."\n"
                .'|action | String|必选|block|防护规则动作。取值：<br> - **block**：表示拦截。<br>- **monitor**：表示观察。'."\n"
                ."\n"
                .'**中国境内地域代码含义说明**'."\n"
                .'``` json'."\n"
                .'{'."\n"
                .'    "110000": "北京市",'."\n"
                .'    "120000": "天津市",'."\n"
                .'    "130000": "河北省",'."\n"
                .'    "140000": "山西省",'."\n"
                .'    "150000": "内蒙古自治区",'."\n"
                .'    "210000": "辽宁省",'."\n"
                .'    "220000": "吉林省",'."\n"
                .'    "230000": "黑龙江省",'."\n"
                .'    "310000": "上海市",'."\n"
                .'    "320000": "江苏省",'."\n"
                .'    "330000": "浙江省",'."\n"
                .'    "340000": "安徽省",'."\n"
                .'    "350000": "福建省",'."\n"
                .'    "360000": "江西省",'."\n"
                .'    "370000": "山东省",'."\n"
                .'    "410000": "河南省",'."\n"
                .'    "420000": "湖北省",'."\n"
                .'    "430000": "湖南省",'."\n"
                .'    "440000": "广东省",'."\n"
                .'    "450000": "广西壮族自治区",'."\n"
                .'    "460000": "海南省",'."\n"
                .'    "500000": "重庆市",'."\n"
                .'    "510000": "四川省",'."\n"
                .'    "520000": "贵州省",'."\n"
                .'    "530000": "云南省",'."\n"
                .'    "540000": "西藏自治区",'."\n"
                .'    "610000": "陕西省",'."\n"
                .'    "620000": "甘肃省",'."\n"
                .'    "630000": "青海省",'."\n"
                .'    "640000": "宁夏回族自治区",'."\n"
                .'    "650000": "新疆维吾尔自治区",'."\n"
                .'    "MO_01": "中国澳门",'."\n"
                .'    "HK_01": "中国香港",'."\n"
                .'    "TW_01": "中国台湾",'."\n"
                .'    "CN": "中华人民共和国内地区域（除港澳台）",'."\n"
                .'}'."\n"
                .'```'."\n"
                .'**中国境外地域代码含义说明**'."\n"
                .'``` json'."\n"
                .'{'."\n"
                .'  "KE": "肯尼亚",'."\n"
                .'  "KG": "吉尔吉斯斯坦",'."\n"
                .'  "KH": "柬埔寨",'."\n"
                .'  "KI": "基里巴斯",'."\n"
                .'  "KM": "科摩罗",'."\n"
                .'  "KN": "圣基茨和尼维斯联邦",'."\n"
                .'  "KP": "朝鲜",'."\n"
                .'  "KR": "韩国",'."\n"
                .'  "KW": "科威特",'."\n"
                .'  "KY": "开曼群岛",'."\n"
                .'  "KZ": "哈萨克斯坦",'."\n"
                .'  "LA": "老挝",'."\n"
                .'  "LB": "黎巴嫩",'."\n"
                .'  "LC": "圣卢西亚",'."\n"
                .'  "LI": "列支敦士登",'."\n"
                .'  "LK": "斯里兰卡",'."\n"
                .'  "LR": "利比里亚",'."\n"
                .'  "LS": "莱索托",'."\n"
                .'  "LT": "立陶宛",'."\n"
                .'  "LU": "卢森堡",'."\n"
                .'  "LV": "拉脱维亚",'."\n"
                .'  "LY": "利比亚",'."\n"
                .'  "MA": "摩洛哥",'."\n"
                .'  "MC": "摩纳哥",'."\n"
                .'  "MD": "摩尔多瓦",'."\n"
                .'  "ME": "黑山共和国",'."\n"
                .'  "MF": "圣马丁",'."\n"
                .'  "MG": "马达加斯加",'."\n"
                .'  "MH": "马绍尔群岛",'."\n"
                .'  "MK": "马其顿",'."\n"
                .'  "ML": "马里",'."\n"
                .'  "MM": "缅甸",'."\n"
                .'  "MN": "蒙古",'."\n"
                .'  "MP": "北马里亚纳群岛",'."\n"
                .'  "MQ": "马提尼克岛",'."\n"
                .'  "MR": "毛里塔尼亚",'."\n"
                .'  "MS": "蒙塞拉特岛",'."\n"
                .'  "MT": "马耳他",'."\n"
                .'  "MU": "毛里求斯",'."\n"
                .'  "MV": "马尔代夫",'."\n"
                .'  "MW": "马拉维",'."\n"
                .'  "MX": "墨西哥",'."\n"
                .'  "MY": "马来西亚",'."\n"
                .'  "MZ": "莫桑比克",'."\n"
                .'  "NA": "纳米比亚",'."\n"
                .'  "NC": "新喀里多尼亚",'."\n"
                .'  "NE": "尼日尔",'."\n"
                .'  "NF": "诺福克岛",'."\n"
                .'  "NG": "尼日利亚",'."\n"
                .'  "NI": "尼加拉瓜",'."\n"
                .'  "NL": "荷兰",'."\n"
                .'  "NO": "挪威",'."\n"
                .'  "NP": "尼泊尔",'."\n"
                .'  "NR": "瑙鲁",'."\n"
                .'  "NU": "纽埃岛",'."\n"
                .'  "NZ": "新西兰",'."\n"
                .'  "GA": "加蓬",'."\n"
                .'  "GB": "英国",'."\n"
                .'  "WS": "萨摩亚群岛",'."\n"
                .'  "GD": "格林纳达",'."\n"
                .'  "GE": "格鲁吉亚",'."\n"
                .'  "GF": "法属圭亚那",'."\n"
                .'  "GG": "根西岛",'."\n"
                .'  "GH": "加纳",'."\n"
                .'  "GI": "直布罗陀",'."\n"
                .'  "GL": "格陵兰岛",'."\n"
                .'  "GM": "冈比亚共和国",'."\n"
                .'  "GN": "几内亚",'."\n"
                .'  "GP": "瓜德罗普",'."\n"
                .'  "GQ": "赤道几内亚",'."\n"
                .'  "GR": "希腊",'."\n"
                .'  "GT": "危地马拉",'."\n"
                .'  "GU": "关岛",'."\n"
                .'  "GW": "几内亚比绍共和国",'."\n"
                .'  "GY": "圭亚那",'."\n"
                .'  "HN": "洪都拉斯",'."\n"
                .'  "HR": "克罗地亚",'."\n"
                .'  "HT": "海地",'."\n"
                .'  "YE": "也门",'."\n"
                .'  "HU": "匈牙利",'."\n"
                .'  "YT": "马约特岛",'."\n"
                .'  "ID": "印度尼西亚",'."\n"
                .'  "IE": "爱尔兰",'."\n"
                .'  "IL": "以色列",'."\n"
                .'  "IM": "马恩岛",'."\n"
                .'  "IN": "印度",'."\n"
                .'  "IO": "英属印度洋领地",'."\n"
                .'  "ZA": "南非",'."\n"
                .'  "IQ": "伊拉克共和国",'."\n"
                .'  "IR": "伊朗",'."\n"
                .'  "IS": "冰岛",'."\n"
                .'  "IT": "意大利",'."\n"
                .'  "ZM": "赞比亚",'."\n"
                .'  "JE": "泽西岛",'."\n"
                .'  "ZW": "津巴布韦",'."\n"
                .'  "JM": "牙买加",'."\n"
                .'  "JO": "约旦",'."\n"
                .'  "JP": "日本",'."\n"
                .'  "SI": "斯洛文尼亚",'."\n"
                .'  "BY": "白俄罗斯",'."\n"
                .'  "SK": "斯洛伐克",'."\n"
                .'  "BZ": "伯利兹",'."\n"
                .'  "SL": "塞拉利昂",'."\n"
                .'  "SM": "圣马力诺",'."\n"
                .'  "SN": "塞内加尔",'."\n"
                .'  "SO": "索马里",'."\n"
                .'  "CA": "加拿大",'."\n"
                .'  "SR": "苏里南",'."\n"
                .'  "SS": "南苏丹",'."\n"
                .'  "ST": "圣多美和普林西比",'."\n"
                .'  "CD": "刚果民主共和国",'."\n"
                .'  "CF": "中非共和国",'."\n"
                .'  "SV": "萨尔瓦多",'."\n"
                .'  "CG": "刚果",'."\n"
                .'  "CH": "瑞士",'."\n"
                .'  "SX": "荷属圣马丁",'."\n"
                .'  "SY": "阿拉伯叙利亚共和国",'."\n"
                .'  "CI": "科特迪瓦",'."\n"
                .'  "SZ": "斯威士兰",'."\n"
                .'  "CK": "库克群岛",'."\n"
                .'  "CL": "智利",'."\n"
                .'  "CM": "喀麦隆",'."\n"
                .'  "CN": "中华人民共和国",'."\n"
                .'  "CO": "哥伦比亚",'."\n"
                .'  "TC": "特克斯和凯科斯岛",'."\n"
                .'  "CR": "哥斯达黎加",'."\n"
                .'  "TD": "乍得",'."\n"
                .'  "CU": "古巴",'."\n"
                .'  "CV": "佛得角",'."\n"
                .'  "TG": "多哥",'."\n"
                .'  "CW": "库拉索",'."\n"
                .'  "TH": "泰国",'."\n"
                .'  "CX": "澳大利亚圣诞岛",'."\n"
                .'  "TJ": "塔吉克斯坦",'."\n"
                .'  "CY": "塞浦路斯",'."\n"
                .'  "CZ": "捷克共和国",'."\n"
                .'  "TK": "托克劳群岛",'."\n"
                .'  "TL": "东帝汶",'."\n"
                .'  "TM": "土库曼斯坦",'."\n"
                .'  "TN": "突尼斯",'."\n"
                .'  "TO": "汤加",'."\n"
                .'  "TR": "土耳其",'."\n"
                .'  "TT": "特立尼达和多巴哥",'."\n"
                .'  "DE": "德国",'."\n"
                .'  "TV": "图瓦卢",'."\n"
                .'  "DJ": "吉布提",'."\n"
                .'  "TZ": "坦桑尼亚",'."\n"
                .'  "DK": "丹麦",'."\n"
                .'  "DM": "多米尼克国",'."\n"
                .'  "DO": "多米尼加共和国",'."\n"
                .'  "UA": "乌克兰",'."\n"
                .'  "UG": "乌干达",'."\n"
                .'  "DZ": "阿尔及利亚",'."\n"
                .'  "UM": "美国本土外小岛屿",'."\n"
                .'  "US": "美国",'."\n"
                .'  "EC": "厄瓜多尔",'."\n"
                .'  "EE": "爱沙尼亚",'."\n"
                .'  "EG": "埃及",'."\n"
                .'  "UY": "乌拉圭",'."\n"
                .'  "UZ": "乌兹别克斯坦",'."\n"
                .'  "VA": "梵蒂冈",'."\n"
                .'  "VC": "圣文森特和格林纳丁斯",'."\n"
                .'  "ER": "厄立特里亚",'."\n"
                .'  "ES": "西班牙",'."\n"
                .'  "VE": "委内瑞拉",'."\n"
                .'  "ET": "埃塞俄比亚",'."\n"
                .'  "VG": "英属维尔京群岛",'."\n"
                .'  "VI": "美属维尔京群岛",'."\n"
                .'  "VN": "越南",'."\n"
                .'  "VU": "瓦努阿图",'."\n"
                .'  "FI": "芬兰",'."\n"
                .'  "FJ": "斐济",'."\n"
                .'  "FK": "马尔维纳斯群岛",'."\n"
                .'  "FM": "密克罗尼西亚联邦",'."\n"
                .'  "FO": "法罗群岛",'."\n"
                .'  "FR": "法国",'."\n"
                .'  "WF": "瓦利斯群岛和富图纳群岛",'."\n"
                .'  "OM": "阿曼",'."\n"
                .'  "PA": "巴拿马",'."\n"
                .'  "PE": "秘鲁",'."\n"
                .'  "PF": "法属波利尼西亚",'."\n"
                .'  "PG": "巴布亚新几内亚",'."\n"
                .'  "PH": "菲律宾",'."\n"
                .'  "PK": "巴基斯坦",'."\n"
                .'  "PL": "波兰",'."\n"
                .'  "PM": "圣皮埃尔和密克隆岛",'."\n"
                .'  "PR": "波多黎各",'."\n"
                .'  "PS": "巴勒斯坦",'."\n"
                .'  "PT": "葡萄牙",'."\n"
                .'  "PW": "帕劳",'."\n"
                .'  "PY": "巴拉圭",'."\n"
                .'  "QA": "卡塔尔",'."\n"
                .'  "AD": "安道尔",'."\n"
                .'  "AE": "阿拉伯联合酋长国",'."\n"
                .'  "AF": "阿富汗",'."\n"
                .'  "AG": "安提瓜和巴布达",'."\n"
                .'  "AI": "安圭拉",'."\n"
                .'  "AL": "阿尔巴尼亚",'."\n"
                .'  "AM": "亚美尼亚",'."\n"
                .'  "AO": "安哥拉",'."\n"
                .'  "AP": "亚太地区",'."\n"
                .'  "AQ": "南极洲",'."\n"
                .'  "AR": "阿根廷",'."\n"
                .'  "AS": "美属萨摩亚",'."\n"
                .'  "RE": "留尼旺岛",'."\n"
                .'  "AT": "奥地利",'."\n"
                .'  "AU": "澳大利亚",'."\n"
                .'  "AW": "阿鲁巴",'."\n"
                .'  "AX": "奥兰群岛",'."\n"
                .'  "AZ": "阿塞拜疆",'."\n"
                .'  "RO": "罗马尼亚",'."\n"
                .'  "BA": "波黑",'."\n"
                .'  "BB": "巴巴多斯",'."\n"
                .'  "RS": "塞尔维亚",'."\n"
                .'  "BD": "孟加拉共和国",'."\n"
                .'  "BE": "比利时",'."\n"
                .'  "RU": "俄罗斯",'."\n"
                .'  "BF": "布基纳法索",'."\n"
                .'  "RW": "卢旺达",'."\n"
                .'  "BG": "保加利亚",'."\n"
                .'  "BH": "巴林",'."\n"
                .'  "BI": "布隆迪共和国",'."\n"
                .'  "BJ": "贝宁",'."\n"
                .'  "BL": "圣巴泰勒米岛",'."\n"
                .'  "BM": "百慕大群岛",'."\n"
                .'  "BN": "文莱达鲁萨兰国",'."\n"
                .'  "BO": "玻利维亚",'."\n"
                .'  "SA": "沙特阿拉伯",'."\n"
                .'  "BQ": "博内尔、圣尤斯蒂休斯和萨巴",'."\n"
                .'  "SB": "所罗门群岛",'."\n"
                .'  "BR": "巴西",'."\n"
                .'  "SC": "塞舌尔",'."\n"
                .'  "SD": "苏丹",'."\n"
                .'  "BS": "巴哈马群岛",'."\n"
                .'  "SE": "瑞典",'."\n"
                .'  "BT": "不丹",'."\n"
                .'  "SG": "新加坡",'."\n"
                .'  "BW": "博茨瓦纳"'."\n"
                .'}'."\n"
                .'```'."\n"
                .'##### 示例'."\n"
                .'``` json'."\n"
                .'{'."\n"
                .'    "InstanceId": "waf_v2_public_****",'."\n"
                .'    "TemplateId": 2341,'."\n"
                .'    "DefenseScene": "region_block",'."\n"
                .'    "Rules": "[{\\"cnRegionList\\":\\"CN,HK_01,TW_01,MO_01\\",\\"abroadRegionList\\":\\"AU,NZ\\",\\"action\\":\\"block\\",\\"status\\":1}]"'."\n"
                .'}'."\n"
                .'```'."\n"
                .'### CC防护规则（**cc**）'."\n"
                .'#### 参数描述'."\n"
                .'|名称|类型|是否必选|示例值|描述|'."\n"
                .'| ----------| ------------| ------------ | ---------- | -----------|'."\n"
                .'|mode | Integer|必选|0|CC防护模式。取值：<br> - **0**（默认）：表示普通防护。 <br> - **1**：表示紧急防护。|'."\n"
                .'|status | Integer|必选|1|防护规则状态。该参数仅用于创建防护规则，修改防护规则状态时使用[ModifyDefenseRuleStatus](~~ModifyDefenseRuleStatus~~)接口的RuleStatus参数。取值：<br> - **0**：表示关闭。 <br> - **1**（默认）：表示开启。|'."\n"
                ."\n"
                .'#### 示例'."\n"
                .'``` json'."\n"
                .'{'."\n"
                .'    "InstanceId": "waf_v2_public_****",'."\n"
                .'    "TemplateId": 2241,'."\n"
                .'    "DefenseScene": "cc",'."\n"
                .'    "Rules":"[{\\"mode\\":0,\\"status\\":1}]"'."\n"
                .'}'."\n"
                .'```'."\n"
                .'### 网页防篡改防护规则（**tamperproof**）'."\n"
                .'#### 参数描述'."\n"
                .'|名称|类型|是否必选|示例值|描述|'."\n"
                .'| ----------| ------------| ------------ | ---------- | -----------|'."\n"
                .'|name | String|必选|test|防护规则名称。|'."\n"
                .'|url | String|必选|/abc|缓存页面的地址。|'."\n"
                .'|ua | String|可选|app|指定user-agent访问该路径。|'."\n"
                .'|protocol | String|必选|https|缓存页面地址的协议类型。取值：**http**、**https**。|'."\n"
                .'|status | Integer|必选|1|防护规则状态。该参数仅用于创建防护规则，修改防护规则状态时使用[ModifyDefenseRuleStatus](~~ModifyDefenseRuleStatus~~)接口的RuleStatus参数。取值：<br> - **0**：表示关闭。 <br> - **1**（默认）：表示开启。|'."\n"
                ."\n"
                .'#### 示例'."\n"
                .'``` json'."\n"
                .'{'."\n"
                .'    "InstanceId": "waf_v2_public_****",'."\n"
                .'    "TemplateId": 1241,'."\n"
                .'    "DefenseScene": "tamperproof",'."\n"
                .'    "Rules": "[{\\"name\\":\\"test1\\",\\"url\\":\\"www.test1.com\\",\\"ua\\":\\"firefox\\",\\"protocol\\":\\"https\\",\\"status\\":1}]"'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'### 信息泄露防护规则（**dlp**）'."\n"
                .'#### 参数描述'."\n"
                .'|名称|类型|是否必选|示例值|描述|'."\n"
                .'| ----------| ------------| ------------ | ---------- | -----------|'."\n"
                .'|name | String|必选|test|防护规则名称。|'."\n"
                .'|conditions|Array|必选|[{"key":"HttpCode","opValue":"contain","values":"400,401,402,403,404,405,500,501,502,503,504,505"},{"key":"URL","opValue":"contain","values":"test"}]|匹配条件，以JSON字符串格式进行描述，支持设置最多两条匹配条件且条件间的关系为并且。具体配置信息，请参见**conditions详细配置**。'."\n"
                .'|status | Integer|必选|1|防护规则状态。该参数仅用于创建防护规则，修改防护规则状态时使用[ModifyDefenseRuleStatus](~~ModifyDefenseRuleStatus~~)接口的RuleStatus参数。取值：<br> - **0**：表示关闭。 <br> - **1**（默认）：表示开启。|'."\n"
                .'|action | String|必选|block|防护规则动作。取值：<br> - **block**：表示拦截，该动作仅适用于包含响应码匹配条件场景。<br> - **monitor**：表示观察。<br> - **filter**：表示敏感信息过滤，该动作仅适用于包含敏感信息匹配条件场景。'."\n"
                ."\n"
                .'**conditions详细配置**'."\n"
                ."\n"
                .'|名称|类型|是否必选|示例值|描述|'."\n"
                .'| ----------| ------------| ------------ | ---------- | -----------|'."\n"
                .'|key | String|必选|URL|匹配字段。取值：**URL**、**HttpCode**、**SensitiveInfo**。'."\n"
                .'|opValue | String|必选|contain|逻辑符。固定取值**contain**。'."\n"
                .'|values | String|必选|abc|匹配内容，多个匹配内容之间使用逗号（,）分隔。<br> **HttpCode**对应取值为：**400**、**401**、**402**、**403**、**404**、**405**（代表**405-499**）、**500**、**501**、**502**、**503**、**504**、**505**（代表**505-599**）。<br>  **SensitiveInfo**对应取值为：<br> -  **phone**：表示电话号码。<br> -  **card**：表示信用卡。<br> -  **id**：表示身份证。<br> -  **word**：表示默认敏感词。'."\n"
                ."\n"
                .'#### 示例'."\n"
                .'``` json'."\n"
                .'{'."\n"
                .'    "InstanceId": "waf_v2_public_****",'."\n"
                .'    "TemplateId": 5241,'."\n"
                .'    "DefenseScene": "dlp",'."\n"
                .'    "Rules":"[{\\"name\\":\\"test\\",\\"action\\":\\"filter\\",\\"status\\":1,\\"conditions\\":[{\\"key\\":\\"SensitiveInfo\\",\\"opValue\\":\\"contain\\",\\"values\\":\\"id,card\\"},{\\"key\\":\\"URL\\",\\"opValue\\":\\"contain\\",\\"values\\":\\"/test.html\\"}]}]"'."\n"
                .'}'."\n"
                .'```',
        ],
        'ModifyDefenseRule' => [
            'summary' => '修改防护规则配置信息。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护规则模板ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '5325',
                    ],
                ],
                [
                    'name' => 'DefenseScene',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改的防护场景。更多信息，请参见[CreateDefenseRule](~~CreateDefenseRule~~)的**DefenseScene**参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_group',
                    ],
                ],
                [
                    'name' => 'Rules',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护规则详情，以一系列参数构造的JSON格式转化成字符串。配置时，您需要指定规则ID，并设置要修改的防护规则配置信息。具体包括：'."\n"
                            ."\n"
                            .'- **id**：Long类型 | 必选 | 规则ID。'."\n"
                            ."\n"
                            .'- 防护规则配置信息：与**CreateDefenseRule**接口的**Rules**参数相同。相关描述，请参见[CreateDefenseRule](~~CreateDefenseRule~~)接口的**防护规则参数描述**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"id":2344,"policyId":1012,"action":"block"}] ',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
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
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1EEA9C98-F166-54FE-ADE3-08D8****BDFA',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1EEA9C98-F166-54FE-ADE3-08D8****BDFA\\"\\n}","type":"json"}]',
            'title' => '修改防护规则',
        ],
        'ModifyDefenseRuleStatus' => [
            'summary' => '修改防护规则状态。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护规则模板ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '7239',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改的防护规则ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '20002615',
                    ],
                ],
                [
                    'name' => 'RuleStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改的防护规则状态。取值： '."\n"
                            .'- **0**：关闭  '."\n"
                            .'- **1**：开启  '."\n"
                            .'          ',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。'."\n",
                                'type' => 'string',
                                'example' => 'BB305BF3-3C71-57A9-9704-E22F567689B0',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BB305BF3-3C71-57A9-9704-E22F567689B0\\"\\n}","type":"json"}]',
            'title' => '修改防护规则状态',
        ],
        'DeleteDefenseRule' => [
            'summary' => '删除防护规则。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的防护模板ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '2221',
                    ],
                ],
                [
                    'name' => 'RuleIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的防护规则ID，多个防护规则ID之间使用英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2223455,23354,465565',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2EC856FE-6D31-5861-8275-E5DEDB539089',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2EC856FE-6D31-5861-8275-E5DEDB539089\\"\\n}","type":"json"}]',
            'title' => '删除防护规则',
        ],
        'DescribeDefenseRule' => [
            'summary' => '查询单个防护规则。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看您当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的防护模板ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '10318',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的防护规则ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '20026192',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
                            ],
                            'Rule' => [
                                'description' => '规则配置内容，以一系列参数构造的JSON格式转化成字符串。',
                                'type' => 'object',
                                'properties' => [
                                    'Config' => [
                                        'description' => '防护规则详情，以一系列参数构造的JSON格式转化成字符串。更多信息，请参见[CreateDefenseRule](~~CreateDefenseRule~~)的**防护规则参数描述**。',
                                        'type' => 'string',
                                        'example' => '{\\"status\\":1,\\"policyId\\":1012,\\"action\\":\\"block\\"}',
                                    ],
                                    'DefenseOrigin' => [
                                        'description' => '防护来源。取值：'."\n"
                                            ."\n"
                                            .'- **custom**：用户自定义。'."\n"
                                            ."\n"
                                            .'- **system**：系统自动生成。',
                                        'type' => 'string',
                                        'example' => 'custom',
                                    ],
                                    'DefenseScene' => [
                                        'description' => '防护场景。更多信息，请参见[CreateDefenseRule](~~CreateDefenseRule~~)的**DefenseScene**参数。',
                                        'type' => 'string',
                                        'example' => 'waf_group',
                                    ],
                                    'GmtModified' => [
                                        'description' => '防护规则修改时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1665196746000',
                                    ],
                                    'RuleId' => [
                                        'description' => '防护规则ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2732975',
                                    ],
                                    'RuleName' => [
                                        'description' => '防护规则名称。',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                    'Status' => [
                                        'description' => '防护规则状态。取值：'."\n"
                                            ."\n"
                                            .'- **0**：表示关闭。'."\n"
                                            ."\n"
                                            .'- **1**：表示开启。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'TemplateId' => [
                                        'description' => '防护规则模板ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '9114',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\",\\n  \\"Rule\\": {\\n    \\"Config\\": \\"{\\\\\\\\\\\\\\"status\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"policyId\\\\\\\\\\\\\\":1012,\\\\\\\\\\\\\\"action\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"block\\\\\\\\\\\\\\"}\\",\\n    \\"DefenseOrigin\\": \\"custom\\",\\n    \\"DefenseScene\\": \\"waf_group\\",\\n    \\"GmtModified\\": 1665196746000,\\n    \\"RuleId\\": 2732975,\\n    \\"RuleName\\": \\"test1\\",\\n    \\"Status\\": 1,\\n    \\"TemplateId\\": 9114\\n  }\\n}","type":"json"}]',
            'title' => '查询单个防护规则',
        ],
        'DescribeDefenseRules' => [
            'summary' => '分页查询防护规则。',
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
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'RuleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护规则类型。取值：'."\n"
                            .'- **whitelist**：白名单规则'."\n"
                            .'- **defense**（默认）：防护规则',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'whitelist',
                    ],
                ],
                [
                    'name' => 'Query',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询条件，以一系列参数构造的JSON格式转化成字符串。'."\n"
                            .'>根据不同的查询条件，查询到的防护规则结果不同。详细信息，请参见**Query参数描述**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"name\\":\\"IP压制_20220822_10\\",\\"scene\\":\\"custom_acl\\",\\"templateId\\":5327}',
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
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，每页包含多少条结果。默认值为**10**，表示每页包含10条结果。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '80736FA5-FA87-55F6-AA69-C5477C6FE6D0',
                            ],
                            'TotalCount' => [
                                'description' => '返回结果的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'Rules' => [
                                'description' => '防护规则列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '防护规则列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Config' => [
                                            'description' => '防护规则详情，以一系列参数构造的JSON格式转化成字符串。更多信息，请参见[CreateDefenseRule](~~CreateDefenseRule~~)的**Rule参数具体说明**。',
                                            'type' => 'string',
                                            'example' => '{\\"policyId\\":1012,\\"action\\":\\"block\\"}',
                                        ],
                                        'DefenseOrigin' => [
                                            'description' => '防护来源。取值：'."\n"
                                                ."\n"
                                                .'- **custom**：用户自定义。'."\n"
                                                ."\n"
                                                .'- **system**：系统自动生成。',
                                            'type' => 'string',
                                            'example' => 'custom',
                                        ],
                                        'DefenseScene' => [
                                            'description' => '防护场景。更多信息，请参见[CreateDefenseRule](~~CreateDefenseRule~~)的**DefenseScene**参数。',
                                            'type' => 'string',
                                            'example' => 'waf_group',
                                        ],
                                        'GmtModified' => [
                                            'description' => '防护规则修改时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1665460629000',
                                        ],
                                        'RuleId' => [
                                            'description' => '防护规则ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '42755',
                                        ],
                                        'RuleName' => [
                                            'description' => '防护规则名称。',
                                            'type' => 'string',
                                            'example' => 'rules_41',
                                        ],
                                        'Status' => [
                                            'description' => '防护规则状态。取值：'."\n"
                                                ."\n"
                                                .'- **0**：表示已禁用。'."\n"
                                                ."\n"
                                                .'- **1**：表示已启用。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'TemplateId' => [
                                            'description' => '防护规则模板ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '5673',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"80736FA5-FA87-55F6-AA69-C5477C6FE6D0\\",\\n  \\"TotalCount\\": 2,\\n  \\"Rules\\": [\\n    {\\n      \\"Config\\": \\"{\\\\\\\\\\\\\\"policyId\\\\\\\\\\\\\\":1012,\\\\\\\\\\\\\\"action\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"block\\\\\\\\\\\\\\"}\\",\\n      \\"DefenseOrigin\\": \\"custom\\",\\n      \\"DefenseScene\\": \\"waf_group\\",\\n      \\"GmtModified\\": 1665460629000,\\n      \\"RuleId\\": 42755,\\n      \\"RuleName\\": \\"rules_41\\",\\n      \\"Status\\": 1,\\n      \\"TemplateId\\": 5673\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '分页查询防护规则',
            'requestParamsDescription' => '### Query参数详解'."\n"
                .'#### 参数描述'."\n"
                ."\n"
                .'|名称|类型|是否必选|示例值|描述|'."\n"
                .'| ----------| ------------| ------------ | ---------- | -----------|'."\n"
                .'|name|String|可选|test|要查询的防护规则名称。您可以设置该参数，精确查询某条防护规则。|'."\n"
                .'|nameId| String|可选|test1|要查询的防护规则ID或名称。您可以设置该参数，模糊查询某条防护规则。|'."\n"
                .'|nameLike|String|可选|test.aliyundoc.c|要查询的防护规则名称。您可以设置该参数，模糊查询某条防护规则。|'."\n"
                .'|scene|String|可选|waf_group|要查询的防护场景。您可以设置该参数，精确查询某个防护场景的防护规则。取值范围请参见[CreateDefenseRule](~~CreateDefenseRule~~)的**DefenseScene**参数。|'."\n"
                .'|ruleId|Long|可选|33444|要查询的防护规则ID。您可以设置该参数，精确查询某条防护规则。|'."\n"
                .'|ruleIdIn|Array|可选|[3334455643,345555]|要查询的防护规则ID范围。您可以设置该参数，查询多个防护规则。多个防护规则之间使用英文逗号（,）分隔。'."\n"
                .'|templateId|Long|可选|24354|要查询的防护模板ID。您可以设置该参数，查询某个防护模板中的防护规则。|'."\n"
                .'|orderBy|String|可选|name|设置防护规则排序方式。取值：<br> - **name** : 表示按防护规则名称排序。 <br> - **gmtModified** : 表示按防护规则修改时间排序。<br> - **id** : 表示按规则ID排序。<br> - **templateId** : 表示按防护模板ID排序。|'."\n"
                .'|desc|Boolean|可选|true|设置排序顺序。取值：<br> - **false** : 表示正序显示。<br> - **true** : 表示倒序显示。|'."\n"
                ."\n"
                .'#### 示例'."\n"
                ."\n"
                .'```json'."\n"
                .'{'."\n"
                .'    "name": "test",'."\n"
                .'    "nameId ": "test1,'."\n"
                .'    "nameLike": "test.aliyundoc.c",'."\n"
                .'    "nameIn": "test.aliyundoc.c",'."\n"
                .'    "InstaneId": "test1.aliyundoc.com,test2.aliyundoc.com",'."\n"
                .'    "templateId": 24354'."\n"
                .'}'."\n"
                .'```',
        ],
        'ModifyTemplateResources' => [
            'summary' => '绑定或解绑防护资源与防护模板的关系。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护模板ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '2291',
                    ],
                ],
                [
                    'name' => 'BindResources',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '绑定的防护对象，使用[**"XX1","XX2",……**]格式。',
                        'type' => 'array',
                        'items' => [
                            'description' => '绑定的防护对象。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'abc',
                        ],
                        'required' => false,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'BindResourceGroups',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '绑定的防护对象组，使用[**"group1","group2",……**]格式。',
                        'type' => 'array',
                        'items' => [
                            'description' => '绑定的防护对象组。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'group1',
                        ],
                        'required' => false,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'UnbindResources',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '解除绑定的防护对象，使用[**"XX1","XX2",……**]格式。',
                        'type' => 'array',
                        'items' => [
                            'description' => '解除绑定的防护对象。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'abc',
                        ],
                        'required' => false,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'UnbindResourceGroups',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '解除绑定的防护对象组，使用[**"group1","group2",……**]格式。',
                        'type' => 'array',
                        'items' => [
                            'description' => '解除绑定的防护对象组。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'group1',
                        ],
                        'required' => false,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CF708F2F-FFB0-54D4-B1E0-B84A7CEB****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CF708F2F-FFB0-54D4-B1E0-B84A7CEB****\\"\\n}","type":"json"}]',
            'title' => '防护资源绑定或解绑防护模板',
        ],
        'DescribeTemplateResources' => [
            'summary' => '查询防护模板绑定的资源。',
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
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护模板ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1020',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护资源类型。取值：'."\n"
                            .'- **single**：防护对象。'."\n"
                            .'- **group**：防护对象组。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'single',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。'."\n",
                                'type' => 'string',
                                'example' => 'C7BC9373-3960-53B0-8968-2B13454AE18F',
                            ],
                            'Resources' => [
                                'description' => '绑定的防护对象或防护对象组名称列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '防护对象或防护对象组名称。',
                                    'type' => 'string',
                                    'example' => 'alb-wewbb23dfset***',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C7BC9373-3960-53B0-8968-2B13454AE18F\\",\\n  \\"Resources\\": [\\n    \\"alb-wewbb23dfset***\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询防护模板绑定的资源',
        ],
        'DescribeTemplateResourceCount' => [
            'summary' => '查询防护模板生效的防护资源个数。',
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
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'>  您可以调用[DescribeInstance](~~433756~~)，查看当前WAF实例的ID。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-lbj****gx08',
                    ],
                ],
                [
                    'name' => 'TemplateIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的多个防护模板ID。您可以设置该参数，查询多个已创建的防护模板生效的防护资源，多个防护模板ID之间使用英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345,12346',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekzwwkpn****5i',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B8064433-9781-5E86-806E-C1DD****1D95',
                            ],
                            'ResourceCount' => [
                                'description' => '防护模板生效的防护对象或防护对象组个数。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '防护模板生效的防护对象或防护对象组。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TemplateId' => [
                                            'description' => '防护模板ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '12345',
                                        ],
                                        'SingleCount' => [
                                            'description' => '防护对象个数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '30',
                                        ],
                                        'GroupCount' => [
                                            'description' => '防护对象组个数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '30',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B8064433-9781-5E86-806E-C1DD****1D95\\",\\n  \\"ResourceCount\\": [\\n    {\\n      \\"TemplateId\\": 12345,\\n      \\"SingleCount\\": 30,\\n      \\"GroupCount\\": 30\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询防护模板生效的防护资源个数',
        ],
        'DescribeRuleGroups' => [
            'summary' => '分页查询正则规则组。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'SearchType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询类型。取值：'."\n"
                            .'- **id**:   表示按照规则组ID查询。'."\n"
                            .'- **name**:  表示按照规则组名字查询，支持中英文查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'name',
                    ],
                ],
                [
                    'name' => 'SearchValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置查询内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
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
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，每页包含多少条结果。默认值为**10**，表示每页包含10条结果。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '02E9A4B8-90FB-5F41-A049-C82277EB82FB',
                            ],
                            'RuleGroups' => [
                                'description' => '正则规则组列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '正则规则组列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'RuleGroupId' => [
                                            'description' => '规则组的ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '115361',
                                        ],
                                        'RuleTotalCount' => [
                                            'description' => '内置规则数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '4444',
                                        ],
                                        'GmtModified' => [
                                            'description' => '更新时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1664336364000',
                                        ],
                                        'RuleGroupName' => [
                                            'description' => '规则组的名称。',
                                            'type' => 'string',
                                            'example' => 'ssssss',
                                        ],
                                        'IsSubscribe' => [
                                            'description' => '规则组自动更新状态。'."\n"
                                                ."\n"
                                                .'- 1：表示自动更新。'."\n"
                                                ."\n"
                                                .'- 2：表示不自动更新。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'ParentRuleGroupId' => [
                                            'description' => '规则组继承的规则组ID。'."\n"
                                                ."\n"
                                                .'- 0：表示不继承，从零创建。'."\n"
                                                ."\n"
                                                .'- 1011：表示严格规则组。'."\n"
                                                ."\n"
                                                .'- 1012：表示中等规则组。'."\n"
                                                ."\n"
                                                .'- 1013：表示宽松规则组。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1012',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '返回结果的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '24',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"02E9A4B8-90FB-5F41-A049-C82277EB82FB\\",\\n  \\"RuleGroups\\": [\\n    {\\n      \\"RuleGroupId\\": 115361,\\n      \\"RuleTotalCount\\": 4444,\\n      \\"GmtModified\\": 1664336364000,\\n      \\"RuleGroupName\\": \\"ssssss\\",\\n      \\"IsSubscribe\\": 1,\\n      \\"ParentRuleGroupId\\": 1012\\n    }\\n  ],\\n  \\"TotalCount\\": 24\\n}","type":"json"}]',
            'title' => '分页查询正则规则组',
        ],
        'CreateMajorProtectionBlackIp' => [
            'summary' => '添加WAF重保场景防护IP黑名单。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-2r42s6y****',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '重保场景防护规则模板ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '2221',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '重保IP黑名单规则ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '232324',
                    ],
                ],
                [
                    'name' => 'IpList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '添加的IP黑名单。支持自定义IP或IP段黑名单，同时支持IPv4和IPv6。多个IP之间用半角逗号（,）分隔。'."\n"
                            .'更多信息，请参见[重保场景防护](~~425591~~)。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => '192.0.XX.XX,192.0.XX.XX/24',
                    ],
                ],
                [
                    'name' => 'ExpiredTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '生效截止时间戳，单位为秒。'."\n"
                            .'> 取值为**0**时，表示永久生效。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1716528465',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '防护对象1domain 	描述信息。',
                        'description' => 'IP黑名单的描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Protection for major events',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateMajorProtectionBlackIpResponse>\\n    <RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\n</CreateMajorProtectionBlackIpResponse>","errorExample":""}]',
            'title' => '添加重保场景防护IP黑名单',
            'description' => '该接口仅适用于中国站。',
        ],
        'ModifyMajorProtectionBlackIp' => [
            'summary' => '修改重保场景黑IP。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '重保防护场景模板ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '5132',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '重保防护IP黑名单规则ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '20012033',
                    ],
                ],
                [
                    'name' => 'IpList',
                    'in' => 'query',
                    'schema' => [
                        'title' => '防护对象来源， custom：来自用户自定义 access:   来自接入',
                        'description' => '要添加的IP黑名单。支持自定义IP或IP段黑名单，同时支持IPv4和IPv6。多个IP之间用半角逗号（,）分隔。'."\n"
                            .'更多信息，请参见[重保场景防护](~~425591~~)。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => '12.XX.XX.2,3.XX.XX.3/24',
                    ],
                ],
                [
                    'name' => 'ExpiredTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '生效截止时间戳，单位：秒。'."\n"
                            .'> 取值为**0**时，表示永久生效。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1662603328',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '防护对象1domain 	描述信息。',
                        'description' => '描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '66A98669-CC6E-4F3E-80A6-3014697B11AE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"66A98669-CC6E-4F3E-80A6-3014697B11AE\\"\\n}","type":"json"}]',
            'title' => '修改重保场景防护IP黑名单',
        ],
        'DeleteMajorProtectionBlackIp' => [
            'summary' => '删除重保场景黑IP。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)获取当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '重保防护场景模板ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '5332',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '重保防护IP黑名单规则ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '20013135',
                    ],
                ],
                [
                    'name' => 'IpList',
                    'in' => 'query',
                    'schema' => [
                        'title' => '防护对象来源， custom：来自用户自定义 access:   来自接入',
                        'description' => '要删除的IP黑名单。支持自定义IP或IP段黑名单，同时支持IPv4和IPv6。多个IP之间用半角逗号（,）分隔。'."\n"
                            .'更多信息，请参见[重保场景防护](~~425591~~)。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => '192.0.XX.XX,192.0.XX.XX/24'."\n",
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '66A98669-CC6E-4F3E-80A6-3014697B11AE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"66A98669-CC6E-4F3E-80A6-3014697B11AE\\"\\n}","type":"json"}]',
            'title' => '删除重保场景防护IP黑名单',
        ],
        'ClearMajorProtectionBlackIp' => [
            'summary' => '清空重保场景黑IP。',
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
                'abilityTreeCode' => '124771',
                'abilityTreeNodes' => [
                    'FEATUREwaf2KYU04',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '重保防护场景模板ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '5132',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '重保防护IP黑名单规则ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '20012033',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '66A98669-CC6E-4F3E-80A6-3014697B11AE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"66A98669-CC6E-4F3E-80A6-3014697B11AE\\"\\n}","type":"json"}]',
            'title' => '清空重保场景防护IP黑名单',
        ],
        'DescribeMajorProtectionBlackIps' => [
            'summary' => '分页查询重保黑IP。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)获取当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '重保防护模板ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '5673',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '重保IP黑名单规则ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20013199',
                    ],
                ],
                [
                    'name' => 'IpLike',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的IP。您可以设置该参数，模糊查询已添加的IP黑名单。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.0.XX.XX',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置排序属性，支持按照如下属性**倒序排列**。取值：'."\n"
                            ."\n"
                            .'- **gmtModified**：表示按照修改时间排序。'."\n"
                            ."\n"
                            .'- **ip**：表示按照IP排序。'."\n"
                            ."\n"
                            .'- **templateId**：表示按照模板ID排序。'."\n"
                            ."\n"
                            .'- **id**：表示按照主键排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'gmtModified',
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
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，每页包含多少条结果。默认值为**10**，表示每页包含10条结果。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '41631674-EEB0-5B02-BEB4-40A758E9B841',
                            ],
                            'IpList' => [
                                'description' => '黑名单IP列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '黑名单IP列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'GmtModified' => [
                                            'description' => '黑名单IP的修改时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1665456202000',
                                        ],
                                        'Ip' => [
                                            'description' => 'IP地址。',
                                            'type' => 'string',
                                            'example' => '192.0.XX.XX',
                                        ],
                                        'TemplateId' => [
                                            'description' => '重保防护模板ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '9684',
                                        ],
                                        'RuleId' => [
                                            'description' => '重保IP黑名单规则ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '8508970',
                                        ],
                                        'ExpiredTime' => [
                                            'description' => '生效截止时间戳，单位为秒。'."\n"
                                                .'> 取值为**0**时，表示永久生效。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1662603328',
                                        ],
                                        'Description' => [
                                            'description' => '描述信息。',
                                            'type' => 'string',
                                            'example' => 'test0003asdffas',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '黑名单IP的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '63',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"41631674-EEB0-5B02-BEB4-40A758E9B841\\",\\n  \\"IpList\\": [\\n    {\\n      \\"GmtModified\\": 1665456202000,\\n      \\"Ip\\": \\"192.0.XX.XX\\",\\n      \\"TemplateId\\": 9684,\\n      \\"RuleId\\": 8508970,\\n      \\"ExpiredTime\\": 1662603328,\\n      \\"Description\\": \\"test0003asdffas\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 63\\n}","type":"json"}]',
            'title' => '分页查询重保防护IP黑名单',
        ],
        'DescribeFlowChart' => [
            'summary' => '查看流量统计信息。',
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
                    'name' => 'StartTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的开始时间，单位：秒。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1665331200',
                    ],
                ],
                [
                    'name' => 'EndTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间，单位：秒。如果不设置该参数，结束时间为当前的查询时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1665386280',
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '时间间隔，单位：秒。取值为60的整数倍',
                        'type' => 'string',
                        'required' => true,
                        'example' => '300',
                    ],
                ],
                [
                    'name' => 'Resource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的防护对象。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)，查看当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BFA71416-670E-585D-AAE6-E7BBEE248FAB',
                            ],
                            'FlowChart' => [
                                'description' => '流量统计信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '流量统计信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Index' => [
                                            'description' => '时间序号，按时间先后顺序排序。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                        'AntiScanBlockSum' => [
                                            'description' => '扫描防护规则的拦截量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'AntiscanReportsSum' => [
                                            'description' => '扫描防护规则的观察命中量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'AntibotBlockSum' => [
                                            'description' => 'Bot管理规则的拦截量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'AntibotReportSum' => [
                                            'description' => 'Bot管理规则的观察命中量。',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'WafBlockSum' => [
                                            'description' => '基础防护规则的拦截量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'WafReportSum' => [
                                            'description' => '基础防护规则的观察命中量。',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'BlacklistBlockSum' => [
                                            'description' => 'IP黑名单拦截量。',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'BlacklistReportsSum' => [
                                            'description' => 'IP黑名单的观察命中量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'CcCustomBlockSum' => [
                                            'description' => '自定义CC防护规则的拦截量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'CcCustomReportsSum' => [
                                            'description' => '自定义CC防护规则的观察命中量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'InBytes' => [
                                            'description' => '入WAF总请求量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '121645464',
                                        ],
                                        'MaxPv' => [
                                            'description' => '请求峰值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2932',
                                        ],
                                        'Count' => [
                                            'description' => '总请求次数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2932',
                                        ],
                                        'OutBytes' => [
                                            'description' => '出WAF总请求量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1200540464',
                                        ],
                                        'AclCustomBlockSum' => [
                                            'description' => '自定义ACL防护规则的拦截量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'AclCustomReportsSum' => [
                                            'description' => '自定义ACL防护规则的观察命中量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'CcSystemReportsSum' => [
                                            'description' => '系统CC防护规则的观察命中量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'CcSystemBlocksSum' => [
                                            'description' => '系统CC防护规则的拦截量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'RegionBlockReportsSum' => [
                                            'description' => '区域封禁规则的观察命中量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'RegionBlockBlocksSum' => [
                                            'description' => '区域封禁规则的拦截量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'RobotCount' => [
                                            'description' => '机器流量总请求量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1110',
                                        ],
                                        'RatelimitBlockSum' => [
                                            'description' => '洪峰限流规则的拦截量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'RatelimitReportSum' => [
                                            'description' => '洪峰限流规则的观察命中量。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BFA71416-670E-585D-AAE6-E7BBEE248FAB\\",\\n  \\"FlowChart\\": [\\n    {\\n      \\"Index\\": 10,\\n      \\"AntiScanBlockSum\\": 0,\\n      \\"AntiscanReportsSum\\": 0,\\n      \\"AntibotBlockSum\\": 0,\\n      \\"AntibotReportSum\\": \\"0\\",\\n      \\"WafBlockSum\\": 0,\\n      \\"WafReportSum\\": \\"0\\",\\n      \\"BlacklistBlockSum\\": \\"0\\",\\n      \\"BlacklistReportsSum\\": 0,\\n      \\"CcCustomBlockSum\\": 0,\\n      \\"CcCustomReportsSum\\": 0,\\n      \\"InBytes\\": 121645464,\\n      \\"MaxPv\\": 2932,\\n      \\"Count\\": 2932,\\n      \\"OutBytes\\": 1200540464,\\n      \\"AclCustomBlockSum\\": 0,\\n      \\"AclCustomReportsSum\\": 0,\\n      \\"CcSystemReportsSum\\": 0,\\n      \\"CcSystemBlocksSum\\": 0,\\n      \\"RegionBlockReportsSum\\": 0,\\n      \\"RegionBlockBlocksSum\\": 0,\\n      \\"RobotCount\\": 1110,\\n      \\"RatelimitBlockSum\\": 0,\\n      \\"RatelimitReportSum\\": 0\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看流量统计信息',
        ],
        'DescribePeakTrend' => [
            'summary' => '查看请求QPS的变化趋势。',
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
                    'name' => 'StartTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的开始时间，单位：秒。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1665331200',
                    ],
                ],
                [
                    'name' => 'EndTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间，单位：秒。如果不设置该参数，结束时间为当前的查询时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1665386340',
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '时间间隔，单位：秒。取值为60的整数倍。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '300',
                    ],
                ],
                [
                    'name' => 'Resource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护对象。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9D11AC3A-A10C-56E7-A342-E87EC892BAE2',
                            ],
                            'FlowChart' => [
                                'description' => 'WAF的QPS统计信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'WAF的QPS统计信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Index' => [
                                            'description' => '时间序号，按时间先后顺序排序。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                        'AntiScanSum' => [
                                            'description' => '扫描防护数量，包括观察命中量和拦截量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'WafSum' => [
                                            'description' => '正则防护数量，包括观察命中量和拦截量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'CcSum' => [
                                            'description' => 'CC防护数量，包括观察命中量和拦截量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'AclSum' => [
                                            'description' => 'ACL防护数量，包括观察命中量和拦截量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'Count' => [
                                            'description' => '总请求量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2622',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9D11AC3A-A10C-56E7-A342-E87EC892BAE2\\",\\n  \\"FlowChart\\": [\\n    {\\n      \\"Index\\": 10,\\n      \\"AntiScanSum\\": 0,\\n      \\"WafSum\\": 0,\\n      \\"CcSum\\": 0,\\n      \\"AclSum\\": 0,\\n      \\"Count\\": 2622\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看QPS变化趋势',
        ],
        'DescribeResponseCodeTrendGraph' => [
            'summary' => '查看WAF返回给客户端、源站返回给WAF的5XX、405、499、302、444等异常响应码的数量变化趋势。',
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
                'abilityTreeCode' => '106569',
                'abilityTreeNodes' => [
                    'FEATUREwafVPSU1I',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'StartTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的开始时间，单位：秒',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1665331200',
                    ],
                ],
                [
                    'name' => 'EndTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间，单位：秒。如果不设置该参数，结束时间为当前的查询时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1665386280',
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '时间间隔，单位：秒。取值为60的整数倍。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '300',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '响应码类型。取值：'."\n"
                            .'- **waf**：表示WAF返回给客户端的响应码。'."\n"
                            .'- **upstream**：表示源站返回给WAF的响应码',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf',
                    ],
                ],
                [
                    'name' => 'Resource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的防护对象。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '7D46493E-84DD-58CE-80A7-8643F2B09ECC',
                            ],
                            'ResponseCodes' => [
                                'description' => '响应码统计信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '响应码统计信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        '405Pv' => [
                                            'description' => '响应码405的统计数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '121645464',
                                        ],
                                        '499Pv' => [
                                            'description' => '响应码499的统计数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        '444Pv' => [
                                            'description' => '响应码444的统计数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        '302Pv' => [
                                            'description' => '响应码302的统计数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        '5xxPv' => [
                                            'description' => '响应码5xx的统计数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2932',
                                        ],
                                        'Index' => [
                                            'description' => '时间序号，按时间先后顺序排序。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7D46493E-84DD-58CE-80A7-8643F2B09ECC\\",\\n  \\"ResponseCodes\\": [\\n    {\\n      \\"405Pv\\": 121645464,\\n      \\"499Pv\\": 0,\\n      \\"444Pv\\": 0,\\n      \\"302Pv\\": 0,\\n      \\"5xxPv\\": 2932,\\n      \\"Index\\": 10\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看响应码的趋势图',
        ],
        'DescribeVisitUas' => [
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
                    'name' => 'StartTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的开始时间，单位：秒。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1665331200',
                    ],
                ],
                [
                    'name' => 'EndTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间，单位：秒。如果不设置该参数，结束时间为当前的查询时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1665386280',
                    ],
                ],
                [
                    'name' => 'Resource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护对象。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2847CE98-AFAE-5A64-B80E-60461717F9DE',
                            ],
                            'Uas' => [
                                'description' => 'UA流量访问统计Top10。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'UA流量访问统计情况。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Ua' => [
                                            'description' => 'UA名称。',
                                            'type' => 'string',
                                            'example' => 'chrome',
                                        ],
                                        'Count' => [
                                            'description' => 'UA总请求量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '698455',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2847CE98-AFAE-5A64-B80E-60461717F9DE\\",\\n  \\"Uas\\": [\\n    {\\n      \\"Ua\\": \\"chrome\\",\\n      \\"Count\\": 698455\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看流量访问Top 10的UA',
            'summary' => '查看发起请求次数最多的前10个User-Agent。',
        ],
        'DescribeVisitTopIp' => [
            'summary' => '查看发起请求次数最多的前10个IP。',
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
                    'name' => 'Resource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护对象。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'StartTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的开始时间，单位：秒。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1665331200',
                    ],
                ],
                [
                    'name' => 'EndTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间，单位：秒。如果不设置该参数，结束时间为当前的查询时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1665386280',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5D2B8DAE-A761-58CB-A68D-74989E4831DA',
                            ],
                            'TopIp' => [
                                'description' => 'IP的流量访问统计Top10。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'IP的流量访问统计情况。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Ip' => [
                                            'description' => '访问IP地址。',
                                            'type' => 'string',
                                            'example' => '1.1.XX.XX',
                                        ],
                                        'Area' => [
                                            'description' => '归属地编号。',
                                            'type' => 'string',
                                            'example' => '310000',
                                        ],
                                        'Isp' => [
                                            'description' => '服务提供商。',
                                            'type' => 'string',
                                            'example' => 'AAA',
                                        ],
                                        'Count' => [
                                            'description' => '访问IP总请求量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2622',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5D2B8DAE-A761-58CB-A68D-74989E4831DA\\",\\n  \\"TopIp\\": [\\n    {\\n      \\"Ip\\": \\"1.1.XX.XX\\",\\n      \\"Area\\": \\"310000\\",\\n      \\"Isp\\": \\"AAA\\",\\n      \\"Count\\": 2622\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看流量访问Top 10的IP',
        ],
        'DescribeRuleHitsTopResource' => [
            'summary' => '查看触发防护规则次数最多的前10个防护对象。',
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
                    'name' => 'StartTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的开始时间，单位：秒。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1665331200',
                    ],
                ],
                [
                    'name' => 'EndTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间，单位：秒。如果不设置该参数，结束时间为当前的查询时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1665386340',
                    ],
                ],
                [
                    'name' => 'RuleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护对象命中的规则类型。默认不设置该参数，表示显示全部规则。'."\n"
                            ."\n"
                            .'- **blacklist**: 表示命中IP黑名单。'."\n"
                            ."\n"
                            .'- **custom**：表示命中自定义规则。'."\n"
                            ."\n"
                            .'- **antiscan**: 表示命中扫描防护规则。'."\n"
                            ."\n"
                            .'- **cc_system**:  表示命中CC防护规则。'."\n"
                            ."\n"
                            .'- **region_block**: 表示区域封禁。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'blacklist',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'ADA11BC7-AA95-5C31-9095-5802C02ED1DC',
                            ],
                            'RuleHitsTopResource' => [
                                'description' => '防护对象的规则命中情况Top10。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '防护对象的规则命中情况。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Count' => [
                                            'description' => '命中规则请求数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '14219',
                                        ],
                                        'Resource' => [
                                            'description' => '防护对象。',
                                            'type' => 'string',
                                            'example' => 'www.aliyundoc.com',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ADA11BC7-AA95-5C31-9095-5802C02ED1DC\\",\\n  \\"RuleHitsTopResource\\": [\\n    {\\n      \\"Count\\": 14219,\\n      \\"Resource\\": \\"www.aliyundoc.com\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看命中防护规则的Top 10 防护对象',
        ],
        'DescribeRuleHitsTopRuleId' => [
            'summary' => '查看触发防护规则次数最多的前10个规则ID。',
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
                    'name' => 'StartTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的开始时间，单位：秒。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1665331200',
                    ],
                ],
                [
                    'name' => 'EndTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间，单位：秒。如果不设置该参数，结束时间为当前的查询时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1665386280',
                    ],
                ],
                [
                    'name' => 'Resource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护对象。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'RuleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护对象命中的规则类型。默认不设置该参数，表示显示全部规则。'."\n"
                            ."\n"
                            .'- **blacklist**: 表示命中IP黑名单。'."\n"
                            ."\n"
                            .'- **custom**：表示命中自定义规则。'."\n"
                            ."\n"
                            .'- **antiscan**: 表示命中扫描防护规则。'."\n"
                            ."\n"
                            .'- **cc_system**:  表示命中CC防护规则。'."\n"
                            ."\n"
                            .'- **region_block**: 表示区域封禁。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'blacklist',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'IsGroupResource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则命中次数是否聚合防护对象。'."\n"
                            ."\n"
                            .'- **true（默认）**：表示聚合防护对象的规则命中次数，即只按照单个防护规则命中情况统计次数，当前情况下发返回参数中Resource值为空。'."\n"
                            .'- **false**：表示不聚合防护对象的规则命中次数，即按照防护对象和防护规则命中情况统计次数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F6334274-8870-5D2F-A1AD-D6EF885AC1ED',
                            ],
                            'RuleHitsTopRuleId' => [
                                'description' => '规则ID命中Top10。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '规则ID命中情况。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Count' => [
                                            'description' => '规则命中请求量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '181174784',
                                        ],
                                        'Resource' => [
                                            'description' => '防护对象。当请求参数中IsGroupResource为false时会返回规则命中的防护对象。',
                                            'type' => 'string',
                                            'example' => 'www.aliyundoc.com',
                                        ],
                                        'RuleId' => [
                                            'description' => '规则ID。',
                                            'type' => 'string',
                                            'example' => '5465465',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F6334274-8870-5D2F-A1AD-D6EF885AC1ED\\",\\n  \\"RuleHitsTopRuleId\\": [\\n    {\\n      \\"Count\\": 181174784,\\n      \\"Resource\\": \\"www.aliyundoc.com\\",\\n      \\"RuleId\\": \\"5465465\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看命中防护规则的Top 10规则ID',
        ],
        'DescribeRuleHitsTopTuleType' => [
            'summary' => '查看触发防护规则次数最多的前10个防护类型。',
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
                    'name' => 'StartTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的开始时间，单位：秒。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1665331200',
                    ],
                ],
                [
                    'name' => 'EndTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间，单位：秒。如果不设置该参数，结束时间为当前的查询时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1665386280',
                    ],
                ],
                [
                    'name' => 'Resource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护对象。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看您当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '45E377CE-0B04-578E-B653-EEA63CFE****',
                            ],
                            'RuleHitsTopTuleType' => [
                                'description' => '防护类型的规则命中Top10。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '防护类型的规则命中情况。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Count' => [
                                            'description' => '规则命中请求量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '698455',
                                        ],
                                        'RuleType' => [
                                            'description' => '防护对象命中的规则类型。默认不返回该参数，表示显示全部规则。'."\n"
                                                ."\n"
                                                .'- **waf**: 表示基础防护规则。'."\n"
                                                ."\n"
                                                .'- **blacklist**: 表示命中IP黑名单。'."\n"
                                                ."\n"
                                                .'- **custom**：表示命中自定义规则。'."\n"
                                                ."\n"
                                                .'- **antiscan**: 表示命中扫描防护规则。'."\n"
                                                ."\n"
                                                .'- **cc_system**:  表示命中CC防护规则。'."\n"
                                                ."\n"
                                                .'- **region_block**: 表示区域封禁。'."\n"
                                                ."\n"
                                                .'- **scene**: 表示Bot管理。'."\n"
                                                ."\n"
                                                .'- **dlp**: 表示信息泄露防护。',
                                            'type' => 'string',
                                            'example' => 'blacklist',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"45E377CE-0B04-578E-B653-EEA63CFE****\\",\\n  \\"RuleHitsTopTuleType\\": [\\n    {\\n      \\"Count\\": 698455,\\n      \\"RuleType\\": \\"blacklist\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看命中防护规则的Top 10防护类型',
        ],
        'DescribeRuleHitsTopUrl' => [
            'summary' => '查看触发防护规则次数最多的前10个URL。',
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
                    'name' => 'StartTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的开始时间，单位：秒。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1665331200',
                    ],
                ],
                [
                    'name' => 'EndTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间，单位：秒。如果不设置该参数，结束时间为当前的查询时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1665386280',
                    ],
                ],
                [
                    'name' => 'Resource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护对象。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'RuleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护对象命中的规则类型。默认不设置该参数，表示显示全部规则。'."\n"
                            ."\n"
                            .'- **blacklist**: 表示命中IP黑名单。'."\n"
                            ."\n"
                            .'- **custom**：表示命中自定义规则。'."\n"
                            ."\n"
                            .'- **antiscan**: 表示命中扫描防护规则。'."\n"
                            ."\n"
                            .'- **cc_system**:  表示命中CC防护规则。'."\n"
                            ."\n"
                            .'- **region_block**: 表示区域封禁。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'blacklist',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看您当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '3D8AF43B-08EB-51CE-B33A-93AA****9B0C',
                            ],
                            'RuleHitsTopUrl' => [
                                'description' => 'URL的规则命中Top10。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'URL的规则命中情况。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Count' => [
                                            'description' => '规则命中请求量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '21862',
                                        ],
                                        'Url' => [
                                            'description' => '请求URL。'."\n"
                                                .'> 返回值使用base64格式编码。',
                                            'type' => 'string',
                                            'example' => 'd3d3LmFsaXl1bmRvYy5jb20vcGF0aDM=',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3D8AF43B-08EB-51CE-B33A-93AA****9B0C\\",\\n  \\"RuleHitsTopUrl\\": [\\n    {\\n      \\"Count\\": 21862,\\n      \\"Url\\": \\"d3d3LmFsaXl1bmRvYy5jb20vcGF0aDM=\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看命中防护规则的Top 10 URL',
        ],
        'DescribeRuleHitsTopClientIp' => [
            'summary' => '查看发动攻击次数最多的前10个攻击源IP。',
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
                    'name' => 'StartTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的开始时间，单位：秒。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1665331200',
                    ],
                ],
                [
                    'name' => 'EndTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间，单位：秒。如果不设置该参数，结束时间为当前的查询时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1665386280',
                    ],
                ],
                [
                    'name' => 'Resource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护对象。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'RuleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护对象命中的规则类型。默认不设置该参数，表示显示全部规则。'."\n"
                            ."\n"
                            .'- **blacklist**: 表示命中IP黑名单。'."\n"
                            ."\n"
                            .'- **custom**：表示命中自定义规则。'."\n"
                            ."\n"
                            .'- **antiscan**: 表示命中扫描防护规则。'."\n"
                            ."\n"
                            .'- **cc_system**:  表示命中CC防护规则。'."\n"
                            ."\n"
                            .'- **region_block**: 表示区域封禁。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'blacklist',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9F0F9AD6-62E2-50BB-A3E5-30FFB9410262',
                            ],
                            'RuleHitsTopClientIp' => [
                                'description' => '攻击源IP的攻击情况Top10。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '攻击源IP的攻击情况。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Count' => [
                                            'description' => '攻击请求量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '531',
                                        ],
                                        'ClientIp' => [
                                            'description' => '业务的客户端IP地址。',
                                            'type' => 'string',
                                            'example' => '3.3.XX.XX',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9F0F9AD6-62E2-50BB-A3E5-30FFB9410262\\",\\n  \\"RuleHitsTopClientIp\\": [\\n    {\\n      \\"Count\\": 531,\\n      \\"ClientIp\\": \\"3.3.XX.XX\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看发动攻击次数Top 10的攻击源IP',
        ],
        'DescribeFlowTopResource' => [
            'summary' => '查看请求量最高的前10个防护对象。',
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
                    'name' => 'StartTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的开始时间，单位：秒。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1665331200',
                    ],
                ],
                [
                    'name' => 'EndTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间，单位：秒。如果不设置该参数，结束时间为当前的查询时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1665386340',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8F0E0B9A-B518-5C6D-BEFC-A373DDE4F652',
                            ],
                            'RuleHitsTopResource' => [
                                'description' => '防护对象的流量访问统计Top10。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '防护对象的流量访问统计情况。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Count' => [
                                            'description' => '指定时间内，防护对象的总请求量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '181174784',
                                        ],
                                        'Resource' => [
                                            'description' => '防护对象。',
                                            'type' => 'string',
                                            'example' => 'www.aliyundoc.com',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8F0E0B9A-B518-5C6D-BEFC-A373DDE4F652\\",\\n  \\"RuleHitsTopResource\\": [\\n    {\\n      \\"Count\\": 181174784,\\n      \\"Resource\\": \\"www.aliyundoc.com\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看流量访问Top 10的防护对象',
        ],
        'DescribeRuleHitsTopUa' => [
            'summary' => '查看发动攻击次数最多的前10个User-Agent。',
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
                    'name' => 'StartTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的开始时间，单位：秒。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1665331200',
                    ],
                ],
                [
                    'name' => 'EndTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间，单位：秒。如果不设置该参数，结束时间为当前的查询时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1665386280',
                    ],
                ],
                [
                    'name' => 'Resource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护对象。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8E5C7ED7-503A-5986-A005-36F2511EB89F',
                            ],
                            'RuleHitsTopUa' => [
                                'description' => '攻击UA的攻击情况Top10。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '攻击UA的攻击情况。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Count' => [
                                            'description' => '攻击请求量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '531',
                                        ],
                                        'Ua' => [
                                            'description' => 'UA名称。',
                                            'type' => 'string',
                                            'example' => 'android',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8E5C7ED7-503A-5986-A005-36F2511EB89F\\",\\n  \\"RuleHitsTopUa\\": [\\n    {\\n      \\"Count\\": 531,\\n      \\"Ua\\": \\"android\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看发动攻击次数Top 10的攻击UA',
        ],
        'DescribeFlowTopUrl' => [
            'summary' => '查看发起请求次数最多的前10个URL。',
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
                    'name' => 'StartTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的开始时间，单位：秒。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1665331200',
                    ],
                ],
                [
                    'name' => 'EndTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间，单位：秒。如果不设置该参数，结束时间为当前的查询时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1665386340',
                    ],
                ],
                [
                    'name' => 'Resource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护对象。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'>  您可以调用[DescribeInstance](~~433756~~)，查看当前WAF实例的ID。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '520D4E4C-B8EC-5602-ACB6-4D378ACBA28D',
                            ],
                            'RuleHitsTopUrl' => [
                                'description' => 'URL的流量访问统计Top10。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'URL的流量访问统计情况。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Count' => [
                                            'description' => 'URL的总请求量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '181174784',
                                        ],
                                        'Url' => [
                                            'description' => '请求的URL。',
                                            'type' => 'string',
                                            'example' => 'www.aliyundoc.com/path1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"520D4E4C-B8EC-5602-ACB6-4D378ACBA28D\\",\\n  \\"RuleHitsTopUrl\\": [\\n    {\\n      \\"Count\\": 181174784,\\n      \\"Url\\": \\"www.aliyundoc.com/path1\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看流量访问Top 10的URL',
        ],
        'DescribeUserSlsLogRegions' => [
            'summary' => '查询用户可用的日志存储地域。',
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
                'abilityTreeCode' => '201946',
                'abilityTreeNodes' => [
                    'FEATUREwafJYSA2F',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v2_public_cn-uqm2z****0a',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9D11AC3A-A10C-56E7-A342-E87EC892BAE2',
                            ],
                            'LogRegions' => [
                                'description' => '日志存储地域ID列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '日志存储地域ID。取值：'."\n"
                                        ."\n"
                                        .'- **cn-hangzhou**：表示华东1（杭州）。'."\n"
                                        .'- **cn-beijing**：表示华北2（北京）。'."\n"
                                        .'- **cn-hongkong**：表示中国（香港）。'."\n"
                                        .'- **ap-southeast-1**：表示新加坡。'."\n"
                                        .'- **ap-southeast-2**：表示澳大利亚（悉尼）。'."\n"
                                        .'- **ap-southeast-3**：表示马来西亚（吉隆坡）。'."\n"
                                        .'- **ap-southeast-5**：表示印度尼西亚（雅加达）。'."\n"
                                        .'- **ap-southeast-6**：表示菲律宾（马尼拉）。'."\n"
                                        .'- **ap-southeast-7**：表示泰国（曼谷）。'."\n"
                                        .'- **me-east-1**：表示阿联酋（迪拜）。'."\n"
                                        .'- **eu-central-1**：表示德国（法兰克福）。'."\n"
                                        .'- **us-east-1**：表示美国（弗吉尼亚）。'."\n"
                                        .'- **us-west-1**：表示美国（硅谷）。'."\n"
                                        .'- **ap-northeast-1**：表示日本（东京）。'."\n"
                                        .'- **ap-northeast-2**：表示韩国（首尔）。'."\n"
                                        .'- **ap-south-1**：表示印度（孟买）。'."\n"
                                        .'- **eu-west-1**：表示英国（伦敦）。'."\n"
                                        .'- **cn-hangzhou-finance**：表示华东1 杭州金融云。'."\n"
                                        .'- **cn-shanghai-finance-1**：表示华东2 上海金融云。'."\n"
                                        .'- **cn-shenzhen-finance**：表示华南1 深圳金融云。'."\n"
                                        ."\n\n"
                                        ."\n\n"
                                        .'> 金融云的Region，只有金融云用户才能获取，且金融云用户只能获取到这些Region。',
                                    'type' => 'string',
                                    'example' => 'cn-hangzhou',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9D11AC3A-A10C-56E7-A342-E87EC892BAE2\\",\\n  \\"LogRegions\\": [\\n    \\"cn-hangzhou\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询用户可用的日志存储地域',
        ],
        'DescribeUserWafLogStatus' => [
            'summary' => '查询用户WAF日志服务的状态、RegionId，状态修改时间等。',
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
                'riskType' => 'none',
                'abilityTreeCode' => '201942',
                'abilityTreeNodes' => [
                    'FEATUREwafJYSA2F',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-nwy34****0j',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
                            ],
                            'LogStatus' => [
                                'description' => '用户日志服务的当前状态。'."\n"
                                    .'- **initializing**：初始化中。'."\n"
                                    .'- **initialize_failed**：初始化失败。'."\n"
                                    .'- **normal**：正常运行。'."\n"
                                    .'- **releasing**：释放中。'."\n"
                                    .'- **release_failed**：释放失败。',
                                'type' => 'string',
                                'example' => 'normal',
                            ],
                            'LogRegionId' => [
                                'description' => '日志存储地域ID。取值：'."\n"
                                    ."\n"
                                    .'- **cn-hangzhou**：表示华东1（杭州）。'."\n"
                                    .'- **cn-beijing**：表示华北2（北京）。'."\n"
                                    .'- **cn-hongkong**：表示中国（香港）。'."\n"
                                    .'- **ap-southeast-1**：表示新加坡。'."\n"
                                    .'- **ap-southeast-2**：表示澳大利亚（悉尼）。'."\n"
                                    .'- **ap-southeast-3**：表示马来西亚（吉隆坡）。'."\n"
                                    .'- **ap-southeast-5**：表示印度尼西亚（雅加达）。'."\n"
                                    .'- **ap-southeast-6**：表示菲律宾（马尼拉）。'."\n"
                                    .'- **ap-southeast-7**：表示泰国（曼谷）。'."\n"
                                    .'- **me-east-1**：表示阿联酋（迪拜）。'."\n"
                                    .'- **eu-central-1**：表示德国（法兰克福）。'."\n"
                                    .'- **us-east-1**：表示美国（弗吉尼亚）。'."\n"
                                    .'- **us-west-1**：表示美国（硅谷）。'."\n"
                                    .'- **ap-northeast-1**：表示日本（东京）。'."\n"
                                    .'- **ap-northeast-2**：表示韩国（首尔）。'."\n"
                                    .'- **ap-south-1**：表示印度（孟买）。'."\n"
                                    .'- **eu-west-1**：表示英国（伦敦）。'."\n"
                                    .'- **cn-hangzhou-finance**：表示华东1 杭州金融云。'."\n"
                                    .'- **cn-shanghai-finance-1**：表示华东2 上海金融云。'."\n"
                                    .'- **cn-shenzhen-finance**：表示华南1 深圳金融云。'."\n"
                                    ."\n\n"
                                    ."\n\n"
                                    .'> 金融云的Region，只有金融云用户才能获取，且金融云用户只能获取到这些Region。',
                                'type' => 'string',
                                'example' => 'cn-hangzhou',
                            ],
                            'StatusUpdateTime' => [
                                'description' => '日志状态修改时间，单位：毫秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1706771796859',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\",\\n  \\"LogStatus\\": \\"normal\\",\\n  \\"LogRegionId\\": \\"cn-hangzhou\\",\\n  \\"StatusUpdateTime\\": 1706771796859\\n}","type":"json"}]',
            'title' => '查询用户WAF日志服务',
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
            'systemTags' => [
                'abilityTreeCode' => '111394',
                'abilityTreeNodes' => [
                    'FEATUREwafJYSA2F',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-g4t3g****04',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aek2okfav****iq',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '阿里云为此次API调用请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '3589D3A3-4A04-51CB-AA89-353ED20ACB10',
                            ],
                            'Status' => [
                                'description' => '授权状态。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示已授权。'."\n"
                                    ."\n"
                                    .'- **false**：表示未授权。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3589D3A3-4A04-51CB-AA89-353ED20ACB10\\",\\n  \\"Status\\": false\\n}","type":"json"}]',
            'title' => '查询日志库授权状态',
            'summary' => '查询日志库授权状态。',
        ],
        'DescribeSlsLogStoreStatus' => [
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
                'abilityTreeCode' => '114229',
                'abilityTreeNodes' => [
                    'FEATUREwafJYSA2F',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v2_public_cn-uqm35****02',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmzedqv****ma',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '184F538F-C115-5C89-A4EF-C79CD2E29AC7',
                            ],
                            'ExistStatus' => [
                                'description' => '是否已创建WAF的日志库。取值：'."\n"
                                    .'- **true**：已创建。'."\n"
                                    .'- **false**：未创建。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"184F538F-C115-5C89-A4EF-C79CD2E29AC7\\",\\n  \\"ExistStatus\\": true\\n}","type":"json"}]',
            'title' => '查询日志库状态',
            'summary' => '查询SLS日志库的状态。',
        ],
        'DescribeSlsLogStore' => [
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
                'abilityTreeCode' => '114313',
                'abilityTreeNodes' => [
                    'FEATUREwafJYSA2F',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-zpr3d****0o',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aek2wf3mn****vq',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CAC0A24B-486A-5E12-9894-BE860E5F41CC',
                            ],
                            'ProjectName' => [
                                'description' => '日志服务Project的名称。',
                                'type' => 'string',
                                'example' => 'wafng-project-14316572********-cn-hangzhou',
                            ],
                            'LogStoreName' => [
                                'description' => '日志库的名称。',
                                'type' => 'string',
                                'example' => 'wafng-logstore',
                            ],
                            'Quota' => [
                                'description' => '日志库容量，单位：Byte（字节）。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '3298534883328',
                            ],
                            'Ttl' => [
                                'description' => '日志存储时长，单位：天。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '180',
                            ],
                            'Used' => [
                                'description' => '日志库已存储容量，单位：Byte（字节）。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '35471136',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CAC0A24B-486A-5E12-9894-BE860E5F41CC\\",\\n  \\"ProjectName\\": \\"wafng-project-14316572********-cn-hangzhou\\",\\n  \\"LogStoreName\\": \\"wafng-logstore\\",\\n  \\"Quota\\": 3298534883328,\\n  \\"Ttl\\": 180,\\n  \\"Used\\": 35471136\\n}","type":"json"}]',
            'title' => '查询日志库信息',
            'summary' => '查看日志库总容量，存储时长，已使用容量等信息。',
        ],
        'ModifyResourceLogStatus' => [
            'summary' => '修改防护对象日志状态。',
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
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf-cn-zz11zcl****',
                    ],
                ],
                [
                    'name' => 'Resource',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '要修改的防护对象。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'alb-wewbb23dfsetetcic1242-0****',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防护对象日志开启状态。取值：'."\n"
                            ."\n"
                            .'- **true**：表示已开启。'."\n"
                            ."\n"
                            .'- **false**：表示未开启。',
                        'type' => 'boolean',
                        'required' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7C55A3E5-638A-5D6E-9A2F-C3CE5A677EC5',
                            ],
                            'Status' => [
                                'description' => '防护对象日志开启状态。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示已开启。'."\n"
                                    ."\n"
                                    .'- **false**：表示未开启。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7C55A3E5-638A-5D6E-9A2F-C3CE5A677EC5\\",\\n  \\"Status\\": true\\n}","type":"json"}]',
            'title' => '修改防护对象日志状态',
        ],
        'DescribeResourceLogStatus' => [
            'summary' => '查询防护对象日志状态。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf-cn-zz11zcl****',
                    ],
                ],
                [
                    'name' => 'Resources',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '要查询的防护对象，多个防护对象用逗号（,）隔开。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'alb-wewbb23dfsetetcic1242-0****,alb-wewbb23dfsetetcic1242-1****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0DABF8AB-2321-5F8D-A8D7-922D757FBFFE',
                            ],
                            'Result' => [
                                'description' => '返回结果。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '防护对象日志状态信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Resource' => [
                                            'description' => '查询的防护对象。',
                                            'type' => 'string',
                                            'example' => 'alb-wewbb23dfsetetcic****',
                                        ],
                                        'Status' => [
                                            'description' => '防护对象日志开启状态。取值：'."\n"
                                                .' '."\n"
                                                .'- **true**：表示已开启。'."\n"
                                                ."\n"
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0DABF8AB-2321-5F8D-A8D7-922D757FBFFE\\",\\n  \\"Result\\": [\\n    {\\n      \\"Resource\\": \\"alb-wewbb23dfsetetcic****\\",\\n      \\"Status\\": true\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询防护对象日志状态',
        ],
        'ModifyHybridCloudClusterBypassStatus' => [
            'summary' => '修改混合云服务化集群手动Bypass开关。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceInfo](~~140857~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_elasticity-cn-0xldbqt****',
                    ],
                ],
                [
                    'name' => 'ClusterResourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '混合云集群资源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'hdbc_cluster_****',
                    ],
                ],
                [
                    'name' => 'RuleStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手动Bypass开启状态，取值：'."\n"
                            ."\n"
                            .'- **on**：开启。'."\n"
                            ."\n"
                            .'- **off（默认）**：关闭。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'on',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '当前请求的ID。',
                                'type' => 'string',
                                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\"\\n}","type":"json"}]',
            'title' => '修改混合云服务化集群手动Bypass开关',
        ],
        'DescribeHybridCloudUser' => [
            'summary' => '查询混合云接入，客户允许使用的端口范围，内容返回包括HTTP和HTTPS两类端口。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-***********',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '9178CB86-285F-5679-A30A-3B3F007E4206',
                            ],
                            'UserInfo' => [
                                'description' => '用户可用端口信息。',
                                'type' => 'object',
                                'properties' => [
                                    'HttpPorts' => [
                                        'description' => 'HTTP协议的可用端口列表。  取值为字符串，'."\n"
                                            .'多个端口时，使用**port1,port2,port3**的格式返回。',
                                        'type' => 'string',
                                        'example' => '80,8080',
                                    ],
                                    'HttpsPorts' => [
                                        'description' => 'HTTPS协议的可用端口列表。  取值为字符串，'."\n"
                                            .'多个端口时，使用**port1,port2,port3**的格式返回。',
                                        'type' => 'string',
                                        'example' => '8443,443',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9178CB86-285F-5679-A30A-3B3F007E4206\\",\\n  \\"UserInfo\\": {\\n    \\"HttpPorts\\": \\"80,8080\\",\\n    \\"HttpsPorts\\": \\"8443,443\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询混合云客户端口',
        ],
        'DescribeHybridCloudGroups' => [
            'summary' => '查询添加到Web应用防火墙的混合云节点组列表。',
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
                'abilityTreeCode' => '136062',
                'abilityTreeNodes' => [
                    'FEATUREwafR5NU4G',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v3prepaid_public_cn-********w0b',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '混合云集群 ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '428',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的节点组名称',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => 'groupName1',
                    ],
                ],
                [
                    'name' => 'GroupType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '混合云节点组类型。取值：'."\n"
                            ."\n"
                            .'- **protect**：防护。'."\n"
                            ."\n"
                            .'- **control**：管控。'."\n"
                            ."\n"
                            .'- **storage**：存储。'."\n"
                            ."\n"
                            .'- **controlStorage**：管控＆存储。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'protect',
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
                        'description' => '分页查询时，每页的行数。默认值为**10**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'ClusterProxyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群代理类型。取值：'."\n"
                            ."\n"
                            .'- **service**：服务化代理。'."\n"
                            ."\n"
                            .'- **cname**：反向代理。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cname',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => '045660E7-C4C6-5CD7-8182-7B337D95ADF4',
                            ],
                            'Groups' => [
                                'description' => '混合云节点组集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '单个混合云节点信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'GroupId' => [
                                            'description' => '混合云节点组ID。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '123',
                                        ],
                                        'GroupName' => [
                                            'description' => '混合云节点组名称。',
                                            'type' => 'string',
                                            'example' => 'StorageGroup',
                                        ],
                                        'GroupType' => [
                                            'description' => '混合云节点组类型。取值：'."\n"
                                                ."\n"
                                                .'- **protect**：防护。'."\n"
                                                ."\n"
                                                .'- **control**：管控。'."\n"
                                                ."\n"
                                                .'- **storage**：存储。'."\n"
                                                ."\n"
                                                .'- **controlStorage**：管控＆存储。',
                                            'type' => 'string',
                                            'example' => 'protect',
                                        ],
                                        'LoadBalanceIp' => [
                                            'description' => '负载均衡（服务器）IP。',
                                            'type' => 'string',
                                            'example' => '1.1.XX.XX',
                                        ],
                                        'Ports' => [
                                            'description' => '混合云集群使用的端口。  取值为字符串，'."\n"
                                                .'多个端口时，使用**port1,port2,port3**的格式返回。',
                                            'type' => 'string',
                                            'example' => '80,9200,20018',
                                        ],
                                        'Remark' => [
                                            'description' => '备注。',
                                            'type' => 'string',
                                            'example' => '备注',
                                        ],
                                        'LocationId' => [
                                            'description' => '防护节点ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1312',
                                        ],
                                        'OperatorValue' => [
                                            'description' => '防护集群运营商Code。'."\n"
                                                ."\n"
                                                .'> Code的取值列表，见返回参数补充说明。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'ContinentsValue' => [
                                            'description' => '防护集群大洲Code。'."\n"
                                                ."\n"
                                                .'> Code的取值列表，见返回参数补充说明。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '410',
                                        ],
                                        'RegionCodeValue' => [
                                            'description' => '防护集群城市Code。'."\n"
                                                ."\n"
                                                .'> Code的取值列表，见返回参数补充说明。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'BackSourceMark' => [
                                            'description' => '防护集群回源标记，格式为 {防护集群运营商Name}-{防护集群大洲Name}-{防护集群城市Name}-{防护集群回源标识}(可选)'."\n"
                                                ."\n"
                                                .'> 防护集群运营商Name、防护集群大洲Name、防护集群城市Name、防护集群回源标识的取值列表，见返回参数补充说明。',
                                            'type' => 'string',
                                            'example' => 'aliyun-asiapacific-beijing-56477821',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '返回结果的总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '146',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"045660E7-C4C6-5CD7-8182-7B337D95ADF4\\",\\n  \\"Groups\\": [\\n    {\\n      \\"GroupId\\": 123,\\n      \\"GroupName\\": \\"StorageGroup\\",\\n      \\"GroupType\\": \\"protect\\",\\n      \\"LoadBalanceIp\\": \\"1.1.XX.XX\\",\\n      \\"Ports\\": \\"80,9200,20018\\",\\n      \\"Remark\\": \\"备注\\",\\n      \\"LocationId\\": 1312,\\n      \\"OperatorValue\\": 0,\\n      \\"ContinentsValue\\": 410,\\n      \\"RegionCodeValue\\": 0,\\n      \\"BackSourceMark\\": \\"aliyun-asiapacific-beijing-56477821\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 146\\n}","type":"json"}]',
            'title' => '查询混合云集群下节点组列表',
            'responseParamsDescription' => '### 防护集群运营商Code'."\n"
                .'|运营商Code|运营商Tag|运营商Desc|'."\n"
                .'| ----------| ------------| ------------ |'."\n"
                .'|0| aliyun|阿里云|'."\n"
                .'|3| tencent|腾讯|'."\n"
                .'|100| google|谷歌|'."\n"
                .'|200| IDC|IDC|'."\n"
                ."\n"
                .'### 防护集群大洲Code'."\n"
                .'|防护大洲Code|防护大洲Tag|防护大洲Desc|'."\n"
                .'| ----------| ------------| ------------ |'."\n"
                .'|410| asiapacific|asiapacific|'."\n"
                .'|411| euro|euro|'."\n"
                ."\n\n"
                ."\n"
                .'### 防护集群城市Code'."\n"
                ."\n"
                .'|防护大洲Code|防护城市Code|防护城市Tag|防护城市Desc|'."\n"
                .'|----------| ----------| ------------| ------------ |'."\n"
                .'|411|0| frankfurt|法兰克福|'."\n"
                .'|411|1| siliconvallery|硅谷|'."\n"
                .'|411|2| Virginia|弗吉尼亚|'."\n"
                .'|410|0| beijing|北京|'."\n"
                .'|410|1| shanghai|上海|'."\n"
                .'|410|2| hongkong|中国香港|'."\n"
                .'|410|3| jakarta|雅加达|'."\n"
                .'|410|4| hangzhou|杭州|'."\n"
                .'|410|5| zhangjiakou|张家口|'."\n"
                .'|410|6| shenzhen|深圳|'."\n"
                .'|410|7| singapore|新加坡|'."\n"
                .'|410|8| Tokyo|东京|'."\n"
                .'|410|9| changsha|长沙|'."\n"
                .'|410|10| public_cloud|共有云|'."\n"
                .'|410|11| nanjing|南京|',
        ],
        'CreateMemberAccounts' => [
            'summary' => '多账号统一管理功能中添加WAF成员账号。',
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
                'abilityTreeCode' => '213361',
                'abilityTreeNodes' => [
                    'FEATUREwaf4WHEC3',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看您当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'SourceIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求源IP。无需填写，系统自动获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.1.X.X',
                    ],
                ],
                [
                    'name' => 'MemberAccountIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '需要管理的WAF成员账号ID列表。单次最多可添加 10 个成员账号。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'WAF成员账号ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '139**********55',
                        ],
                        'required' => true,
                        'maxItems' => 20,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '请求返回消息体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '66A98669-ER12-WE34-23PO-301469*****E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"66A98669-ER12-WE34-23PO-301469*****E\\"\\n}","type":"json"}]',
            'title' => '添加成员账号',
        ],
        'ModifyMemberAccount' => [
            'summary' => '多账号统一管理中修改成员账号信息。',
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
                'abilityTreeCode' => '213362',
                'abilityTreeNodes' => [
                    'FEATUREwaf4WHEC3',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_elasticity**-*******021',
                    ],
                ],
                [
                    'name' => 'SourceIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求源IP。无需填写，系统自动获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0.0.XX.XX',
                    ],
                ],
                [
                    'name' => 'MemberAccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已纳管的WAF成员账号ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '131**********39',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF成员账号的备注信息。长度为1~256个字符，支持中文、英文、数字、半角句号（.）、下划线（_）、短划线（-）和星号（*）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'account1',
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
                                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\"\\n}","type":"json"}]',
            'title' => '修改成员账号',
        ],
        'DeleteMemberAccount' => [
            'summary' => '多账号统一管理中删除WAF成员账号。',
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
                'abilityTreeCode' => '213363',
                'abilityTreeNodes' => [
                    'FEATUREwaf4WHEC3',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_esasdf3****',
                    ],
                ],
                [
                    'name' => 'SourceIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求源IP。无需填写，系统自动获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0.0.XX.XX',
                    ],
                ],
                [
                    'name' => 'MemberAccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已纳管的WAF成员账号ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '131***********39',
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
                                'example' => '5ABE714C-8890-5D7E-A08B-45CB650F5473',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5ABE714C-8890-5D7E-A08B-45CB650F5473\\"\\n}","type":"json"}]',
            'title' => '删除成员账号',
        ],
        'DescribeAccountDelegatedStatus' => [
            'summary' => '多账号统一管理中，查询用户是否是WAF的委派管理员。',
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
                'abilityTreeCode' => '213360',
                'abilityTreeNodes' => [
                    'FEATUREwaf4WHEC3',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)，查看当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
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
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '8161375D-5958-5627-BFDE-DF1458A73E87',
                            ],
                            'DelegatedStatus' => [
                                'description' => '是否是WAF的委派管理员。'."\n"
                                    ."\n"
                                    .'- **true**：表示WAF的委派管理员。'."\n"
                                    ."\n"
                                    .'- **false**：表示非WAF的委派管理员。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'AccountName' => [
                                'description' => '阿里云账号名称，当账号为委派管理员时返回该信息。',
                                'type' => 'string',
                                'example' => 'account_test',
                            ],
                            'AccountId' => [
                                'description' => '阿里云账号ID。',
                                'type' => 'string',
                                'example' => '10***********34',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8161375D-5958-5627-BFDE-DF1458A73E87\\",\\n  \\"DelegatedStatus\\": true,\\n  \\"AccountName\\": \\"account_test\\",\\n  \\"AccountId\\": \\"10***********34\\"\\n}","type":"json"}]',
            'title' => '查询用户是否是WAF委派管理员',
        ],
        'DescribeMemberAccounts' => [
            'summary' => '多账号统一管理中，查询WAF所有成员账号信息。',
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
                'operationType' => 'list',
                'abilityTreeCode' => '213364',
                'abilityTreeNodes' => [
                    'FEATUREwaf4WHEC3',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'SourceIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求源IP。无需填写，系统自动获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0.0.XX.XX',
                    ],
                ],
                [
                    'name' => 'AccountStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询指定状态的成员账号。您可以设置该参数，查询某个状态的成员账号。'."\n"
                            ."\n"
                            .'- **enabled**：表示成员账号为已纳管状态。'."\n"
                            ."\n"
                            .'- **disabled**：表示成员账号为未纳管状态。'."\n"
                            ."\n"
                            .'- **disabling**：表示成员账号为删除中状态。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'enabled',
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
                                'example' => '50C4A80D-D46C-57E0-9A7D-03C078474852',
                            ],
                            'AccountInfos' => [
                                'description' => '查询到的成员账号信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'AccountId' => [
                                            'description' => '成员账号ID。',
                                            'type' => 'string',
                                            'example' => '169************21',
                                        ],
                                        'AccountName' => [
                                            'description' => '成员账号名称。',
                                            'type' => 'string',
                                            'example' => 'ipflgmqqnbjg',
                                        ],
                                        'AccountStatus' => [
                                            'description' => '成员账号的状态。'."\n"
                                                ."\n"
                                                .'- **enabled**：表示成员账号为已纳管状态。'."\n"
                                                ."\n"
                                                .'- **disabled**：表示成员账号为未纳管状态。'."\n"
                                                ."\n"
                                                .'- **disabling**：表示成员账号为删除中状态。',
                                            'type' => 'string',
                                            'example' => 'enabled',
                                        ],
                                        'Description' => [
                                            'description' => '成员账号的备注信息。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '成员账号的添加时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1683367751000',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"50C4A80D-D46C-57E0-9A7D-03C078474852\\",\\n  \\"AccountInfos\\": [\\n    {\\n      \\"AccountId\\": \\"169************21\\",\\n      \\"AccountName\\": \\"ipflgmqqnbjg\\",\\n      \\"AccountStatus\\": \\"enabled\\",\\n      \\"Description\\": \\"test\\",\\n      \\"GmtCreate\\": 1683367751000\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询所有成员账号',
        ],
        'TagResources' => [
            'summary' => '指定一个或多个资源创建并绑定标签。',
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
                'abilityTreeCode' => '164018',
                'abilityTreeNodes' => [
                    'FEATUREwafNZKQ0J',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域',
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型定义。取值：ALIYUN::WAF::DEFENSERESOURCE',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ALIYUN::WAF::DEFENSERESOURCE',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '资源ID,最多 50个子项',
                        'description' => '资源ID,最多 50个子项',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'demo.xxxaliyundoc.com-waf',
                        ],
                        'required' => true,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '标签列表，最多包含20个子项',
                        'description' => '标签列表，最多包含20个子项',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '标签键',
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'demoTagKey',
                                ],
                                'Value' => [
                                    'title' => '标签值',
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'demoTagValue',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '57F8460F-8A62-5D79-8ED5-653C****0C6B',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"57F8460F-8A62-5D79-8ED5-653C****0C6B\\"\\n}","type":"json"}]',
            'title' => '为指定的资源创建并绑定标签',
        ],
        'ListTagKeys' => [
            'summary' => '查询标签键。',
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
                'abilityTreeCode' => '164269',
                'abilityTreeNodes' => [
                    'FEATUREwafNZKQ0J',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域',
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '下一个查询开始Token',
                        'description' => '下一个查询开始Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0*****',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型定义。取值：ALIYUN::WAF::DEFENSERESOURCE',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ALIYUN::WAF::DEFENSERESOURCE',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'waf_v3prepaid_public_cn-wwo****iw02',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'title' => '下一个查询开始Token，NextToken为空说明没有下一个',
                                'description' => '下一个查询开始Token，NextToken为空说明没有下一个。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0*****',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '8CB8BB88-24C7-5608-BF5E-4DCA****CF1C',
                            ],
                            'Keys' => [
                                'title' => '资源列表',
                                'description' => '标签键及类型列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'title' => '标签键',
                                            'description' => '标签键。',
                                            'type' => 'string',
                                            'example' => 'demoTagKey',
                                        ],
                                        'Category' => [
                                            'description' => '标签类型。取值：'."\n"
                                                ."\n"
                                                .'- custom：自定义标签。'."\n"
                                                .'- system：系统标签。',
                                            'type' => 'string',
                                            'example' => 'custom',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0*****\\",\\n  \\"RequestId\\": \\"8CB8BB88-24C7-5608-BF5E-4DCA****CF1C\\",\\n  \\"Keys\\": [\\n    {\\n      \\"Key\\": \\"demoTagKey\\",\\n      \\"Category\\": \\"custom\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询标签键',
        ],
        'UntagResources' => [
            'summary' => '为指定的一个或多个资源统一解绑并删除标签。',
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
                'abilityTreeCode' => '164020',
                'abilityTreeNodes' => [
                    'FEATUREwafNZKQ0J',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域',
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型定义。取值：ALIYUN::WAF::DEFENSERESOURCE',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ALIYUN::WAF::DEFENSERESOURCE',
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否全部删除，只针对TagKey.N为空时有效。 取值范围： true  false True False  默认是 false',
                        'description' => '是否解绑指定资源组或资源目录成员的全部标签。取值：'."\n"
                            .'- false（默认值）：否'."\n"
                            .'- true：是',
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
                        'title' => '资源ID，最多50个子项',
                        'description' => '资源ID列表，最多50个子项',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'demo.xxxxaliyundoc.com-waf',
                        ],
                        'required' => true,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '标签键，最多20个子项',
                        'description' => '标签键列表，最多20个子项。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签键。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'demoTagKey',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7A4B8DB1-A8B0-5362-A65D-6A55****07C5',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7A4B8DB1-A8B0-5362-A65D-6A55****07C5\\"\\n}","type":"json"}]',
            'title' => ' 解绑并删除标签',
        ],
        'ListTagResources' => [
            'summary' => '查询资源已经绑定的标签。',
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
                'abilityTreeCode' => '164021',
                'abilityTreeNodes' => [
                    'FEATUREwafNZKQ0J',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域',
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '下一个查询开始Token',
                        'description' => '下一个查询开始Token',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0*****',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型定义。取值：ALIYUN::WAF::DEFENSERESOURCE',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ALIYUN::WAF::DEFENSERESOURCE',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '资源ID,最多 50个子项',
                        'description' => '资源ID,最多 50个子项。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'demo.xxxaliyundoc.com-waf',
                        ],
                        'required' => false,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '标签列表，最多包含20个子项',
                        'description' => '标签列表，最多包含20个子项',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '标签键',
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Tagkey1',
                                ],
                                'Value' => [
                                    'title' => '标签值',
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TagValue1',
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
                                'title' => '下一个查询开始Token，NextToken为空说明没有下一个',
                                'description' => '下一个查询开始Token，NextToken为空说明没有下一个',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0*****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '716E64DA-044F-51C7-B528-2FBF****AE4F',
                            ],
                            'TagResources' => [
                                'title' => '资源列表',
                                'description' => '资源列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ResourceType' => [
                                            'title' => '资源类型',
                                            'description' => '资源类型定义。固定取值：ALIYUN::WAF::DEFENSERESOURCE',
                                            'type' => 'string',
                                            'example' => 'ALIYUN::WAF::DEFENSERESOURCE',
                                        ],
                                        'TagValue' => [
                                            'title' => '标签值',
                                            'description' => '资源的标签值。',
                                            'type' => 'string',
                                            'example' => 'TayValue1',
                                        ],
                                        'ResourceId' => [
                                            'title' => '资源ID',
                                            'description' => '资源 ID。',
                                            'type' => 'string',
                                            'example' => 'c754d2a4-28f1-46df-b557-9586173a****',
                                        ],
                                        'TagKey' => [
                                            'title' => '标签键',
                                            'description' => '资源的标签键。',
                                            'type' => 'string',
                                            'example' => 'TagKey1',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0*****\\",\\n  \\"RequestId\\": \\"716E64DA-044F-51C7-B528-2FBF****AE4F\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceType\\": \\"ALIYUN::WAF::DEFENSERESOURCE\\",\\n      \\"TagValue\\": \\"TayValue1\\",\\n      \\"ResourceId\\": \\"c754d2a4-28f1-46df-b557-9586173a****\\",\\n      \\"TagKey\\": \\"TagKey1\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询资源已经绑定的标签',
        ],
        'ListTagValues' => [
            'summary' => '查询指定标签键对应的标签值。',
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
                'abilityTreeCode' => '164272',
                'abilityTreeNodes' => [
                    'FEATUREwafNZKQ0J',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域',
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '下一个查询开始Token',
                        'description' => '下一个查询开始Token',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0*****'."\n",
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型定义。固定取值：ALIYUN::WAF::DEFENSERESOURCE',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ALIYUN::WAF::DEFENSERESOURCE',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签键。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoKey',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'title' => '下一个查询开始Token，NextToken为空说明没有下一个',
                                'description' => '下一个查询开始Token，NextToken为空说明没有下一个。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0*****'."\n",
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '705114BB-EAEF-5CC4-8837-F1D4****BB5B',
                            ],
                            'Values' => [
                                'title' => '资源列表',
                                'description' => '标签值列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签值',
                                    'type' => 'string',
                                    'example' => 'TagValue1',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0*****\\\\n\\",\\n  \\"RequestId\\": \\"705114BB-EAEF-5CC4-8837-F1D4****BB5B\\",\\n  \\"Values\\": [\\n    \\"TagValue1\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询指定标签键对应的标签值',
        ],
        'DescribeApisecSensitiveDomainStatistic' => [
            'summary' => '查询API安全敏感数据域名统计。',
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
                'abilityTreeCode' => '215787',
                'abilityTreeNodes' => [
                    'FEATUREwafVPSU1I',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值： '."\n"
                            .'- **cn**：中国大陆地区（默认）'."\n"
                            .'- **cn-hongkong**：海外地区',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstanceInfo](~~140857~~)查询当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_cdnsdf3****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '混合云集群 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '428',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间，格式为Unix时间戳（UTC时间），单位为毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1668496310',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间，格式为Unix时间戳（UTC时间），单位为毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1686895256',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '列表的页码。默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的行数。默认值：**10**',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据类型'."\n"
                            ."\n"
                            .'- request：请求敏感数据'."\n"
                            ."\n"
                            .'- response：响应敏感数据',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'request',
                    ],
                ],
                [
                    'name' => 'OrderWay',
                    'in' => 'query',
                    'schema' => [
                        'description' => '列表排序方式'."\n"
                            ."\n"
                            .'- asc：正序'."\n"
                            ."\n"
                            .'- desc：倒序',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'desc',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '56B40D30-4960-4F19-B7D5-2B1F***6CB70',
                            ],
                            'TotalCount' => [
                                'description' => '返回结果的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '27',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ApiCount' => [
                                            'description' => '涉及API数',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                        'DomainCount' => [
                                            'description' => '涉及站点数',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                        'SensitiveCode' => [
                                            'description' => '敏感数据Code',
                                            'type' => 'string',
                                            'example' => '10',
                                        ],
                                        'SensitiveLevel' => [
                                            'description' => '敏感数据等级',
                                            'type' => 'string',
                                            'example' => 'L3',
                                        ],
                                        'SensitiveName' => [
                                            'description' => '敏感数据名称',
                                            'type' => 'string',
                                            'example' => '自定义敏感类型',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"56B40D30-4960-4F19-B7D5-2B1F***6CB70\\",\\n  \\"TotalCount\\": 27,\\n  \\"Data\\": [\\n    {\\n      \\"ApiCount\\": 10,\\n      \\"DomainCount\\": 10,\\n      \\"SensitiveCode\\": \\"10\\",\\n      \\"SensitiveLevel\\": \\"L3\\",\\n      \\"SensitiveName\\": \\"自定义敏感类型\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询API安全敏感数据域名统计',
        ],
        'DeleteApisecEvent' => [
            'summary' => '删除API安全事件。',
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
                'operationType' => 'get',
                'abilityTreeCode' => '216410',
                'abilityTreeNodes' => [
                    'FEATUREwafVPSU1I',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值： '."\n"
                            .'- **cn**：中国大陆地区（默认）'."\n"
                            .'- **cn-hongkong**：海外地区',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf-cn-zz11sr5****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '混合云集群 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '433',
                    ],
                ],
                [
                    'name' => 'EventId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '事件ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0b7ab137a065aab7656986***11db',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'D7861F61-5B61-46CE-A47C-6B19****5EB0',
                            ],
                            'Result' => [
                                'description' => '返回结果。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19****5EB0\\",\\n  \\"Result\\": true\\n}","type":"json"}]',
            'title' => '删除API安全事件',
        ],
        'DescribeApisecEventDomainStatistic' => [
            'summary' => '查询API安全事件域名统计。',
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
                'abilityTreeCode' => '215784',
                'abilityTreeNodes' => [
                    'FEATUREwafVPSU1I',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值： '."\n"
                            .'- **cn**：中国大陆地区（默认）'."\n"
                            .'- **cn-hongkong**：海外地区',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~433756~~)获取当前WAF实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_elasticity-cn-0xldbqt****',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmvyknl****fa',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '混合云集群 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '428',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间，格式为Unix时间戳（UTC时间），单位为毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1668496310',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间，格式为Unix时间戳（UTC时间），单位为毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1686895256',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。起始值：1。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的行数。默认值：**10**',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'OrderWay',
                    'in' => 'query',
                    'schema' => [
                        'description' => '列表排序方式'."\n"
                            ."\n"
                            .'- asc：正序'."\n"
                            ."\n"
                            .'- desc：倒序',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'desc',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '66A98669-*******-80A6-3014697B11AE',
                            ],
                            'TotalCount' => [
                                'description' => '返回结果的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ApiCount' => [
                                            'description' => 'API数量',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                        'High' => [
                                            'description' => '高危事件数量',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                        'Medium' => [
                                            'description' => '中危事件数量',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '6',
                                        ],
                                        'Low' => [
                                            'description' => '低危事件数量',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'Domain' => [
                                            'description' => '域名',
                                            'type' => 'string',
                                            'example' => 'a.aliyun.com',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"66A98669-*******-80A6-3014697B11AE\\",\\n  \\"TotalCount\\": 10,\\n  \\"Data\\": [\\n    {\\n      \\"ApiCount\\": 10,\\n      \\"High\\": 10,\\n      \\"Medium\\": 6,\\n      \\"Low\\": 2,\\n      \\"Domain\\": \\"a.aliyun.com\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询API安全事件域名统计',
        ],
        'DeleteApisecAbnormal' => [
            'summary' => '删除API安全风险。',
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
                'operationType' => 'get',
                'abilityTreeCode' => '216409',
                'abilityTreeNodes' => [
                    'FEATUREwafVPSU1I',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值： '."\n"
                            .'- **cn**：中国大陆地区（默认）'."\n"
                            .'- **cn-hongkong**：海外地区'."\n"
                            .'          ',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstanceInfo](~~140857~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf-cn-n6w***x52m',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2th****v6ay',
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
                        'default' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '混合云集群 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '428',
                    ],
                ],
                [
                    'name' => 'AbnormalId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '风险ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c0a96***4b9cd303467402a63dcc',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '66A98669-CC6E-4F3E-80A6-7B***11AE',
                            ],
                            'Result' => [
                                'description' => '返回结果。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"66A98669-CC6E-4F3E-80A6-7B***11AE\\",\\n  \\"Result\\": true\\n}","type":"json"}]',
            'title' => '删除API安全风险',
        ],
        'DescribeApisecAbnormalDomainStatistic' => [
            'summary' => '查询API安全风险域名统计数据。',
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
                'abilityTreeCode' => '215781',
                'abilityTreeNodes' => [
                    'FEATUREwafVPSU1I',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所在的地域。取值：'."\n"
                            .'- **cn**：表示中国大陆地区（默认）'."\n"
                            .'- **cn-hongkong**：表示海外地区',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf-cn-45919n***',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm***q',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示非中国内地。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '混合云集群 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '428',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1682571600',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1687313820',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的行数。默认值：**10**',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'OrderWay',
                    'in' => 'query',
                    'schema' => [
                        'description' => '列表排序方式'."\n"
                            ."\n"
                            .'- asc：正序'."\n"
                            ."\n"
                            .'- desc：倒序',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'desc',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '66A98669-CC6E-4F3E-80A6-3014***B11AE',
                            ],
                            'TotalCount' => [
                                'description' => '返回的总记录数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Data' => [
                                'description' => '数据列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '响应数据。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ApiCount' => [
                                            'description' => 'API数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                        'High' => [
                                            'description' => '高危风险数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '12',
                                        ],
                                        'Medium' => [
                                            'description' => '中危风险数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '9',
                                        ],
                                        'Low' => [
                                            'description' => '低危风险数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '4',
                                        ],
                                        'Domain' => [
                                            'description' => '域名。',
                                            'type' => 'string',
                                            'example' => 'ba.aliyun.com',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"66A98669-CC6E-4F3E-80A6-3014***B11AE\\",\\n  \\"TotalCount\\": 1,\\n  \\"Data\\": [\\n    {\\n      \\"ApiCount\\": 10,\\n      \\"High\\": 12,\\n      \\"Medium\\": 9,\\n      \\"Low\\": 4,\\n      \\"Domain\\": \\"ba.aliyun.com\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询API安全风险域名统计数据',
        ],
        'DescribeApisecAssetTrend' => [
            'summary' => '查询API资产趋势图。',
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
                'abilityTreeCode' => '215756',
                'abilityTreeNodes' => [
                    'FEATUREwafVPSU1I',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所在的地域。取值：'."\n"
                            .'- **cn**：表示中国大陆地区（默认）'."\n"
                            .'- **cn-hongkong**：表示海外地区',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeInstanceInfo](~~140857~~)接口查看当前WAF实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_v2_public_cn-ww**b06',
                    ],
                ],
                [
                    'name' => 'ResourceManagerResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aek**7uq',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'WAF实例所属地域。取值：'."\n"
                            ."\n"
                            .'- **cn-hangzhou**：表示中国内地。'."\n"
                            ."\n"
                            .'- **ap-southeast-1**：表示海外地区。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '混合云集群 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '590',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间，格式为Unix时间戳（UTC时间），单位为毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1668496310',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间，格式为Unix时间戳（UTC时间），单位为毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1683183599',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'D7861F61-5B61-46CE-A47C-6B19****5EB0',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回数据。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Timestamp' => [
                                            'description' => '时间戳，格式为Unix时间戳，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1683600042',
                                        ],
                                        'AssetCount' => [
                                            'description' => '资产总数',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '80',
                                        ],
                                        'AssetOffline' => [
                                            'description' => '失活资产数量',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '20',
                                        ],
                                        'AssetActive' => [
                                            'description' => '活跃资产数量',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '60',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19****5EB0\\",\\n  \\"Data\\": [\\n    {\\n      \\"Timestamp\\": 1683600042,\\n      \\"AssetCount\\": 80,\\n      \\"AssetOffline\\": 20,\\n      \\"AssetActive\\": 60\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询API资产趋势图',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
        ],
    ],
];
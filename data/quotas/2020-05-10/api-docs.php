<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'quotas',
        'version' => '2020-05-10',
    ],
    'directories' => [
        [
            'id' => 169534,
            'title' => '产品配额',
            'type' => 'directory',
            'children' => [
                'GetProductQuota',
                'GetProductQuotaDimension',
                'ListProductDimensionGroups',
                'ListProductQuotaDimensions',
                'ListProductQuotas',
                'ListProducts',
                'ListDependentQuotas',
            ],
        ],
        [
            'id' => 169529,
            'title' => '配额告警',
            'type' => 'directory',
            'children' => [
                'CreateQuotaAlarm',
                'DeleteQuotaAlarm',
                'UpdateQuotaAlarm',
                'ListQuotaAlarms',
                'GetQuotaAlarm',
                'ListAlarmHistories',
            ],
        ],
        [
            'id' => 169535,
            'title' => '配额提升申请',
            'type' => 'directory',
            'children' => [
                'CreateQuotaApplication',
                'GetQuotaApplication',
                'ListQuotaApplications',
            ],
        ],
        [
            'id' => 171530,
            'title' => '配额模板',
            'type' => 'directory',
            'children' => [
                'GetQuotaTemplateServiceStatus',
                'ModifyQuotaTemplateServiceStatus',
                'CreateTemplateQuotaItem',
                'ModifyTemplateQuotaItem',
                'ListQuotaApplicationTemplates',
                'DeleteTemplateQuotaItem',
                'CreateQuotaApplicationsForTemplate',
                'ListQuotaApplicationsDetailForTemplate',
                'ListQuotaApplicationsForTemplate',
            ],
        ],
        [
            'id' => 190134,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'GetQuotaApplicationApproval',
                'RemindQuotaApplicationApproval',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'GetProductQuota' => [
            'summary' => '查询目标云产品的配额详情。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ProductCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '云产品的缩写名称。'."\n"
                            ."\n"
                            .'> 关于如何获取云产品的缩写名称，请参见[ListProducts](~~440555~~)中的`ProductCode`。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [],
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'QuotaActionCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额ID。'."\n"
                            ."\n"
                            .'> 关于如何获取目标云产品的配额ID，请参见[ListProductQuotas](~~440554~~)中的`QuotaActionCode`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'q_security-groups',
                    ],
                ],
                [
                    'name' => 'Dimensions',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '配额维度。',
                        'type' => 'array',
                        'items' => [
                            'description' => '配额维度。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '配额维度的Key。'."\n"
                                        ."\n"
                                        .'> 对于支持维度的云产品，该参数必填，且`Dimensions.N.Key`和`Dimensions.N.Value`必须同时设置。N的取值范围取决于对应云产品支持的维度个数。支持维度的云产品包括：ecs（云服务器ECS）、edas（企业级分布式应用服务）、ecs-spec（云服务器ECS规格配额）和ess（弹性伸缩）等。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'regionId',
                                ],
                                'Value' => [
                                    'description' => '配额维度的Value。'."\n"
                                        ."\n"
                                        .'> 对于支持维度的云产品，该参数必填，且`Dimensions.N.Key`和`Dimensions.N.Value`必须同时设置。N的取值范围取决于对应云产品支持的维度个数。支持维度的云产品包括：ecs（云服务器ECS）、edas（企业级分布式应用服务）、ecs-spec（云服务器ECS规格配额）和ess（弹性伸缩）等。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-hangzhou',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'example' => '{\\"regionId\\":\\"cn-beijing\\"}',
                        'maxItems' => 10,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8FF8CAF0-29D9-4F11-B6A4-FD2CBCA016D3',
                            ],
                            'Quota' => [
                                'description' => '配额详情。',
                                'type' => 'object',
                                'properties' => [
                                    'QuotaUnit' => [
                                        'description' => '配额单位。'."\n"
                                            ."\n"
                                            .'> 每个配额的单位不同。例如：容器服务Kubernetes版的配额`q_cbdch3`（最大集群数）单位为Cluster，云服务器ECS的配额`q_security-groups`（安全组总数量上限）单位为个。',
                                        'type' => 'string',
                                        'example' => '个',
                                    ],
                                    'QuotaActionCode' => [
                                        'description' => '配额ID。',
                                        'type' => 'string',
                                        'example' => 'q_security-groups',
                                    ],
                                    'TotalUsage' => [
                                        'description' => '配额用量。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '26',
                                    ],
                                    'ApplicableRange' => [
                                        'description' => '配额调整范围。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '配额调整范围。例如：`[802,10000]`。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '802',
                                        ],
                                    ],
                                    'SupportedRange' => [
                                        'description' => '无',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '当前配额项支持的配额值区间，用于配置配额模板时进行参考。'."\n"
                                                ."\n"
                                                .'- 当ApplicableType为continuous时，如果取值为[802,1000]，则表示取值为802~1000中的所有整数。'."\n"
                                                ."\n"
                                                .'- 当ApplicableType为discontinuous时，如果取值为[10,20,50,100]，则表示取值仅为10、20、50和100。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '[802,1000]',
                                        ],
                                    ],
                                    'QuotaType' => [
                                        'description' => '配额类型。取值：'."\n"
                                            ."\n"
                                            .'- privilege：特权。'."\n"
                                            ."\n"
                                            .'- normal：普通。',
                                        'type' => 'string',
                                        'example' => 'normal',
                                    ],
                                    'QuotaDescription' => [
                                        'description' => '配额描述。',
                                        'type' => 'string',
                                        'example' => '当前账户可拥有的安全组的最大数量',
                                    ],
                                    'Period' => [
                                        'description' => '配额周期。',
                                        'type' => 'object',
                                        'properties' => [
                                            'PeriodValue' => [
                                                'description' => '配额周期的取值。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'PeriodUnit' => [
                                                'description' => '配额周期的单位。取值：'."\n"
                                                    ."\n"
                                                    .'- second：秒。'."\n"
                                                    ."\n"
                                                    .'- minute：分钟。'."\n"
                                                    ."\n"
                                                    .'- hour：小时。'."\n"
                                                    ."\n"
                                                    .'- day：天。'."\n"
                                                    ."\n"
                                                    .'- week：周。'."\n"
                                                    ."\n",
                                                'type' => 'string',
                                                'example' => 'day',
                                            ],
                                        ],
                                    ],
                                    'QuotaArn' => [
                                        'description' => '配额ARN。',
                                        'type' => 'string',
                                        'example' => 'acs:quotas:cn-hangzhou:120886317861****:quota/ecs/q_security-groups/',
                                    ],
                                    'ApplicableType' => [
                                        'description' => '配额调整类型。取值：'."\n"
                                            ."\n"
                                            .'- continuous：连续。'."\n"
                                            ."\n"
                                            .'- discontinuous：间断。',
                                        'type' => 'string',
                                        'example' => 'continuous',
                                    ],
                                    'QuotaItems' => [
                                        'description' => '配额详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '配额类别。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'description' => '配额类别。取值：'."\n"
                                                        ."\n"
                                                        .'- BaseQuota：保障配额。'."\n"
                                                        ."\n"
                                                        .'- ReservedQuota：预留配额。',
                                                    'type' => 'string',
                                                    'example' => 'BaseQuota',
                                                ],
                                                'Quota' => [
                                                    'description' => '配额值。',
                                                    'type' => 'string',
                                                    'example' => '801',
                                                ],
                                                'QuotaUnit' => [
                                                    'description' => '配额单位。'."\n"
                                                        ."\n"
                                                        .'> 每个配额的单位不同。例如：容器服务Kubernetes版的配额`q_cbdch3`（最大集群数）单位为Cluster，云服务器ECS的配额`q_security-groups`（安全组总数量上限）单位为个。',
                                                    'type' => 'string',
                                                    'example' => '个',
                                                ],
                                                'Usage' => [
                                                    'description' => '配额用量。',
                                                    'type' => 'string',
                                                    'example' => '26',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Dimensions' => [
                                        'description' => '配额维度。格式：`{"regionId":"地域"}`。',
                                        'type' => 'object',
                                        'example' => '{"regionId":"cn-hangzhou"}',
                                    ],
                                    'Adjustable' => [
                                        'description' => '配额是否可调整。取值：'."\n"
                                            ."\n"
                                            .'- true：可调整。'."\n"
                                            ."\n"
                                            .'- false：不可调整。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'QuotaName' => [
                                        'description' => '配额名称。',
                                        'type' => 'string',
                                        'example' => '安全组总数量上限',
                                    ],
                                    'UnadjustableDetail' => [
                                        'description' => '配额不可调整原因。取值：'."\n"
                                            ."\n"
                                            .'- nonactivated：未开通服务。'."\n"
                                            ."\n"
                                            .'- applicationProcess：配额申请处理中。'."\n"
                                            ."\n"
                                            .'- limitReached：已达配额上限。'."\n"
                                            ."\n"
                                            .'- supportTicketRequired：需要提工单申请。',
                                        'type' => 'string',
                                        'example' => 'limitReached',
                                    ],
                                    'Consumable' => [
                                        'description' => '是否显示“已使用”的配额。取值：'."\n"
                                            ."\n"
                                            .'- true：显示“已使用”的配额。'."\n"
                                            ."\n"
                                            .'- false：不显示“已使用”的配额。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'TotalQuota' => [
                                        'description' => '配额值。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '801',
                                    ],
                                    'ProductCode' => [
                                        'description' => '云产品名称缩写。',
                                        'type' => 'string',
                                        'example' => 'ecs',
                                    ],
                                    'EffectiveTime' => [
                                        'description' => '配额生效的UTC时间。',
                                        'type' => 'string',
                                        'example' => '2022-09-28T06:06:00Z',
                                    ],
                                    'ExpireTime' => [
                                        'description' => '配额失效的UTC时间。',
                                        'type' => 'string',
                                        'example' => '2022-09-29T06:06:00Z',
                                    ],
                                    'QuotaCategory' => [
                                        'description' => '配额种类。取值：'."\n"
                                            .'- CommonQuota：通用配额。'."\n"
                                            ."\n"
                                            .'- FlowControl：API速率配额。'."\n"
                                            ."\n"
                                            .'- WhiteListLabel：权益配额。',
                                        'type' => 'string',
                                        'example' => 'CommonQuota',
                                    ],
                                    'ApplyReasonTips' => [
                                        'description' => '申请配额调整理由示例。',
                                        'type' => 'string',
                                        'example' => '申请业务：xxx'."\n"
                                            .'业务规模预计增长：50%',
                                    ],
                                    'GlobalQuota' => [
                                        'description' => '是否为全局配额。取值：'."\n"
                                            .'- true：该配额项为所有Region共用。'."\n"
                                            .'- false：该配额项为每个Region独立。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'UsageMetric' => [
                                        'description' => '配额用量在云监控（CloudMonitor）中的监控信息。'."\n"
                                            ."\n"
                                            .'> 空表示云监控中无此配额监控数据。',
                                        'type' => 'object',
                                        'properties' => [
                                            'MetricNamespace' => [
                                                'description' => 'CloudMonitor监控数据命名空间。',
                                                'type' => 'string',
                                                'example' => 'acs_quotas_flowcontrol',
                                            ],
                                            'MetricName' => [
                                                'description' => 'CloudMonitor监控项名称。',
                                                'type' => 'string',
                                                'example' => 'Usage',
                                            ],
                                            'MetricDimensions' => [
                                                'description' => 'CloudMonitor监控维度。'."\n"
                                                    ."\n"
                                                    .'格式：`key:value`键值对形式的集合，例如：'."\n"
                                                    .'`{"productCode":"***","metricKey":"***","regionId":"***","label":"***"}`。',
                                                'type' => 'object',
                                                'additionalProperties' => [
                                                    'type' => 'string',
                                                    'description' => 'CloudMonitor监控维度值。',
                                                    'example' => 'ecs',
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
            'errorCodes' => [],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8FF8CAF0-29D9-4F11-B6A4-FD2CBCA016D3\\",\\n  \\"Quota\\": {\\n    \\"QuotaUnit\\": \\"个\\",\\n    \\"QuotaActionCode\\": \\"q_security-groups\\",\\n    \\"TotalUsage\\": 26,\\n    \\"ApplicableRange\\": [\\n      802\\n    ],\\n    \\"SupportedRange\\": [\\n      0\\n    ],\\n    \\"QuotaType\\": \\"normal\\",\\n    \\"QuotaDescription\\": \\"当前账户可拥有的安全组的最大数量\\",\\n    \\"Period\\": {\\n      \\"PeriodValue\\": 1,\\n      \\"PeriodUnit\\": \\"day\\"\\n    },\\n    \\"QuotaArn\\": \\"acs:quotas:cn-hangzhou:120886317861****:quota/ecs/q_security-groups/\\",\\n    \\"ApplicableType\\": \\"continuous\\",\\n    \\"QuotaItems\\": [\\n      {\\n        \\"Type\\": \\"BaseQuota\\",\\n        \\"Quota\\": \\"801\\",\\n        \\"QuotaUnit\\": \\"个\\",\\n        \\"Usage\\": \\"26\\"\\n      }\\n    ],\\n    \\"Dimensions\\": {\\n      \\"regionId\\": \\"cn-hangzhou\\"\\n    },\\n    \\"Adjustable\\": true,\\n    \\"QuotaName\\": \\"安全组总数量上限\\",\\n    \\"UnadjustableDetail\\": \\"limitReached\\",\\n    \\"Consumable\\": true,\\n    \\"TotalQuota\\": 801,\\n    \\"ProductCode\\": \\"ecs\\",\\n    \\"EffectiveTime\\": \\"2022-09-28T06:06:00Z\\",\\n    \\"ExpireTime\\": \\"2022-09-29T06:06:00Z\\",\\n    \\"QuotaCategory\\": \\"CommonQuota\\",\\n    \\"ApplyReasonTips\\": \\"申请业务：xxx\\\\n业务规模预计增长：50%\\",\\n    \\"GlobalQuota\\": true,\\n    \\"UsageMetric\\": {\\n      \\"MetricNamespace\\": \\"acs_quotas_flowcontrol\\",\\n      \\"MetricName\\": \\"Usage\\",\\n      \\"MetricDimensions\\": {\\n        \\"key\\": \\"ecs\\"\\n      }\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetProductQuotaResponse>\\r\\n\\t<RequestId>8FF8CAF0-29D9-4F11-B6A4-FD2CBCA016D3</RequestId>\\r\\n\\t<Quota>\\r\\n\\t\\t<QuotaDescription>当前账户可拥有的安全组的最大数量</QuotaDescription>\\r\\n\\t\\t<Consumable>true</Consumable>\\r\\n\\t\\t<ProductCode>ecs</ProductCode>\\r\\n\\t\\t<TotalUsage>26</TotalUsage>\\r\\n\\t\\t<Dimensions>\\r\\n\\t\\t\\t<regionId>cn-hangzhou</regionId>\\r\\n\\t\\t</Dimensions>\\r\\n\\t\\t<Adjustable>true</Adjustable>\\r\\n\\t\\t<QuotaActionCode>q_security-groups</QuotaActionCode>\\r\\n\\t\\t<QuotaName>安全组总数量上限</QuotaName>\\r\\n\\t\\t<QuotaArn>acs:quotas:cn-hangzhou:120886317861****:quota/ecs/q_security-groups/</QuotaArn>\\r\\n\\t\\t<TotalQuota>801</TotalQuota>\\r\\n\\t\\t<ApplicableType>continuous</ApplicableType>\\r\\n\\t\\t<ApplicableRange>802</ApplicableRange>\\r\\n\\t\\t<ApplicableRange>10000</ApplicableRange>\\r\\n\\t</Quota>\\r\\n</GetProductQuotaResponse>\\t","errorExample":""}]',
            'title' => '查询目标云产品的配额详情',
            'description' => '本文将提供一个示例，查询云服务器ECS配额`q_security-groups`（安全组总数量上限）的详情。返回结果显示目标配额的名称为`安全组总数量上限`、ID为`q_security-groups`、描述为`当前账户可拥有的安全组的最大数量`、配额值为`801`、配额使用量为`26`、单位为`个`、维度为`{"regionId":"cn-hangzhou"}`等信息。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~171299~~)。 ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetProductQuotaDimension' => [
            'summary' => '查询目标云产品支持的配额维度详情。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProductCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '云产品的缩写名称。'."\n"
                            ."\n"
                            .'> 关于如何获取云产品的缩写名称，请参见[ListProducts](~~440555~~)中的`ProductCode`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'disk',
                    ],
                ],
                [
                    'name' => 'DimensionKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '目标配额维度的Key。'."\n"
                            ."\n"
                            .'> 当目标配额维度有依赖配额维度时，依赖配额维度的Key和Value必须设置，且需要同时设置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zoneId',
                    ],
                ],
                [
                    'name' => 'DependentDimensions',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '目标配额维度依赖的配额维度。',
                        'type' => 'array',
                        'items' => [
                            'description' => '目标配额维度依赖的配额维度。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '目标配额维度依赖的配额维度的Key。'."\n"
                                        ."\n"
                                        .'> - N的取值范围取决于目标配额维度依赖的配额维度的个数。'."\n"
                                        .'> - 依赖配额维度的Key和Value必须同时设置。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'regionId',
                                ],
                                'Value' => [
                                    'description' => '目标配额维度依赖的配额维度的Value。'."\n"
                                        ."\n"
                                        .'> - N的取值范围取决于目标配额维度依赖的配额维度的个数。'."\n"
                                        .'> - 依赖配额维度的Key和Value必须同时设置。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-hangzhou',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '产品支持的配额维度详情列表。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1FA5F0E2-368E-4BA4-A8D0-6060FC6BB8F3',
                            ],
                            'QuotaDimension' => [
                                'description' => '配额维度详情。',
                                'type' => 'object',
                                'properties' => [
                                    'DimensionKey' => [
                                        'description' => '配额维度的Key。取值：'."\n"
                                            .'- regionId：地域。'."\n"
                                            ."\n"
                                            .'- zoneId：可用区。'."\n"
                                            ."\n"
                                            .'- chargeType：付费类型。'."\n"
                                            ."\n"
                                            .'- networkType：网络类型。'."\n"
                                            ."\n"
                                            .'- resourceType：资源类型。',
                                        'type' => 'string',
                                        'example' => 'zoneId',
                                    ],
                                    'DependentDimensions' => [
                                        'description' => '目标配额依赖云服务的配额维度。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '目标配额依赖云服务的配额维度。',
                                            'type' => 'string',
                                            'example' => 'regionId',
                                        ],
                                    ],
                                    'DimensionValues' => [
                                        'description' => '配额维度Value的列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '配额维度Value的列表。',
                                            'type' => 'string',
                                            'example' => '["cn-hangzhou-b", "cn-hangzhou-e", "cn-hangzhou-f", "cn-hangzhou-g", "cn-hangzhou-h", "cn-hangzhou-i", "cn-hangzhou-j", "cn-hangzhou-k"]',
                                        ],
                                    ],
                                    'DimensionValueDetail' => [
                                        'description' => '配额维度Value的详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '配额维度Value的详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'description' => '配额维度Value的名称。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou-b',
                                                ],
                                                'Value' => [
                                                    'description' => '配额维度Value的值。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou-b',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Name' => [
                                        'description' => '配额维度的名称。',
                                        'type' => 'string',
                                        'example' => '可用区',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1FA5F0E2-368E-4BA4-A8D0-6060FC6BB8F3\\",\\n  \\"QuotaDimension\\": {\\n    \\"DimensionKey\\": \\"zoneId\\",\\n    \\"DependentDimensions\\": [\\n      \\"regionId\\"\\n    ],\\n    \\"DimensionValues\\": [\\n      \\"[\\\\\\"cn-hangzhou-b\\\\\\", \\\\\\"cn-hangzhou-e\\\\\\", \\\\\\"cn-hangzhou-f\\\\\\", \\\\\\"cn-hangzhou-g\\\\\\", \\\\\\"cn-hangzhou-h\\\\\\", \\\\\\"cn-hangzhou-i\\\\\\", \\\\\\"cn-hangzhou-j\\\\\\", \\\\\\"cn-hangzhou-k\\\\\\"]\\"\\n    ],\\n    \\"DimensionValueDetail\\": [\\n      {\\n        \\"Name\\": \\"cn-hangzhou-b\\",\\n        \\"Value\\": \\"cn-hangzhou-b\\"\\n      }\\n    ],\\n    \\"Name\\": \\"可用区\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetProductQuotaDimensionResponse>\\r\\n\\t<RequestId>1FA5F0E2-368E-4BA4-A8D0-6060FC6BB8F3</RequestId>\\r\\n\\t<QuotaDimension>\\r\\n\\t\\t<DimensionKey>regionId</DimensionKey>\\r\\n\\t\\t<DimensionValues>cn-shenzhen</DimensionValues>\\r\\n\\t\\t<DimensionValues>cn-beijing</DimensionValues>\\r\\n\\t\\t<DimensionValues>cn-hangzhou</DimensionValues>\\r\\n\\t\\t<DimensionValueDetail>\\r\\n\\t\\t\\t<Value>cn-shenzhen</Value>\\r\\n\\t\\t\\t<Name>cn-shenzhen</Name>\\r\\n\\t\\t</DimensionValueDetail>\\r\\n\\t\\t<DimensionValueDetail>\\r\\n\\t\\t\\t<Value>cn-beijing</Value>\\r\\n\\t\\t\\t<Name>cn-beijing</Name>\\r\\n\\t\\t</DimensionValueDetail>\\r\\n\\t\\t<DimensionValueDetail>\\r\\n\\t\\t\\t<Value>cn-hangzhou</Value>\\r\\n\\t\\t\\t<Name>cn-hangzhou</Name>\\r\\n\\t\\t</DimensionValueDetail>\\r\\n\\t\\t<Name>region</Name>\\r\\n\\t</QuotaDimension>\\r\\n</GetProductQuotaDimensionResponse>\\t","errorExample":""}]',
            'title' => '查询目标云产品支持的配额维度详情',
            'description' => '本文将提供一个示例，查询块存储（disk）的配额维度`zoneId`依赖的配额维度`regionId`的详情。返回结果显示如下：'."\n"
                ."\n"
                .'- 配额维度Value的详情`cn-hangzhou-b`、`cn-hangzhou-e`、`cn-hangzhou-f`、`cn-hangzhou-g`、`cn-hangzhou-h`、`cn-hangzhou-i`、`cn-hangzhou-j`和`cn-hangzhou-k`。'."\n"
                ."\n"
                .'- 配额维度的名称`可用区`（`zoneId`）。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~171299~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListProductDimensionGroups' => [
            'summary' => '查询目标云产品的维度组。',
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
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用来标记开始查询数据的位置。置空表示从头开始。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次查询的最大记录条数。'."\n"
                            .'取值范围：1~200。默认值：30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'example' => '3',
                        'default' => '30',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云产品的缩写名称。'."\n"
                            ."\n"
                            .'> 关于如何获取云产品的缩写名称，请参见[ListProducts](~~440555~~)中的`ProductCode`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'entconsole',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '维度组。',
                        'type' => 'object',
                        'properties' => [
                            'DimensionGroups' => [
                                'description' => '维度组。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '维度组代码。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ProductCode' => [
                                            'description' => '云服务代码。',
                                            'type' => 'string',
                                            'example' => 'entconsole',
                                        ],
                                        'GroupCode' => [
                                            'description' => '维度组代码。',
                                            'type' => 'string',
                                            'example' => 'entconsole_zjzp4dyg6b',
                                        ],
                                        'GroupName' => [
                                            'description' => '维度组名称。',
                                            'type' => 'string',
                                            'example' => '资源共享',
                                        ],
                                        'DimensionKeys' => [
                                            'description' => '维度组的Key。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '维度组的Key。',
                                                'type' => 'string',
                                                'example' => 'regionId',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '本次请求返回的全部记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                            'NextToken' => [
                                'description' => '用来标记返回查询数据的位置。空表示数据已经查询完毕。',
                                'type' => 'string',
                                'example' => '21',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '057D210F-F2FC-5329-A536-26C16628BB09',
                            ],
                            'MaxResults' => [
                                'description' => '本次查询返回的最大记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DimensionGroups\\": [\\n    {\\n      \\"ProductCode\\": \\"entconsole\\",\\n      \\"GroupCode\\": \\"entconsole_zjzp4dyg6b\\",\\n      \\"GroupName\\": \\"资源共享\\",\\n      \\"DimensionKeys\\": [\\n        \\"regionId\\"\\n      ]\\n    }\\n  ],\\n  \\"TotalCount\\": 3,\\n  \\"NextToken\\": \\"21\\",\\n  \\"RequestId\\": \\"057D210F-F2FC-5329-A536-26C16628BB09\\",\\n  \\"MaxResults\\": 3\\n}","errorExample":""},{"type":"xml","example":"<ListProductDimensionGroupsResponse>\\r\\n\\t<DimensionGroups>\\r\\n\\t\\t<GroupName>OSS_Group</GroupName>\\r\\n\\t\\t<ProductCode>oss</ProductCode>\\r\\n\\t\\t<GroupCode>oss_wf1ngqmd7q</GroupCode>\\r\\n\\t\\t<DimensionKeys>chargeType</DimensionKeys>\\r\\n\\t</DimensionGroups>\\r\\n\\t<TotalCount>1</TotalCount>\\r\\n\\t<RequestId>057D210F-F2FC-5329-A536-26C16628BB09</RequestId>\\r\\n\\t<MaxResults>1</MaxResults>\\r\\n</ListProductDimensionGroupsResponse>\\t","errorExample":""}]',
            'title' => '查询云产品的维度组',
            'description' => '本文将提供一个示例，查询资源管理（entconsole）的维度组。返回结果显示，维度组名称为`资源共享`、维度组代码为`entconsole_zjzp4dyg6b`、维度组Key为`regionId`等。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~171299~~)。'."\n",
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListProductQuotaDimensions' => [
            'summary' => '查询目标云产品支持的配额维度。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用来标记开始查询数据的位置。置空表示从头开始。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '本次查询的最大记录条数。'."\n"
                            ."\n"
                            .'取值范围：1~200。默认值：30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'example' => '5',
                        'default' => '30',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '云产品的缩写名称。'."\n"
                            ."\n"
                            .'> 关于如何获取云产品的缩写名称，请参见[ListProducts](~~440555~~)中的`ProductCode`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'disk',
                    ],
                ],
                [
                    'name' => 'QuotaCategory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额种类。取值：'."\n"
                            ."\n"
                            .'- FlowControl：API速率配额。'."\n"
                            ."\n"
                            .'- CommonQuota（默认值）：通用配额。'."\n"
                            ."\n"
                            .'> 权益配额（WhiteListLabel）无配额维度。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CommonQuota',
                        'enum' => [
                            'FlowControl',
                            'CommonQuota',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无。',
                        'type' => 'object',
                        'properties' => [
                            'QuotaDimensions' => [
                                'description' => '配额维度。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '配额维度。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Requisite' => [
                                            'description' => '查询配额维度时是否必选。取值：'."\n"
                                                ."\n"
                                                .'- true：必选。'."\n"
                                                ."\n"
                                                .'- false：非必选。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'DimensionKey' => [
                                            'description' => '配额维度的Key。取值：'."\n"
                                                ."\n"
                                                .'- regionId：地域ID。'."\n"
                                                ."\n"
                                                .'- zoneId：可用区ID。'."\n"
                                                ."\n"
                                                .'- chargeType：付费类型。'."\n"
                                                ."\n"
                                                .'- networkType：网络类型。'."\n"
                                                ."\n"
                                                .'- resourceType：资源类型。',
                                            'type' => 'string',
                                            'example' => 'zoneId',
                                        ],
                                        'DependentDimensions' => [
                                            'description' => '目标配额维度依赖的配额维度。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '目标配额维度依赖的配额维度。',
                                                'type' => 'string',
                                                'example' => 'regionId',
                                            ],
                                        ],
                                        'DimensionValues' => [
                                            'description' => '配额维度value的列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '配额维度Value的列表。',
                                                'type' => 'string',
                                                'example' => '["cn-hangzhou-b", "cn-hangzhou-e", "cn-hangzhou-f", "cn-hangzhou-g", "cn-hangzhou-h", "cn-hangzhou-i", "cn-hangzhou-j", "cn-hangzhou-k"]',
                                            ],
                                        ],
                                        'DimensionValueDetail' => [
                                            'description' => '配额维度Value的详情。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '配额维度value的详情。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Name' => [
                                                        'description' => '配额维度Value的名称。',
                                                        'type' => 'string',
                                                        'example' => 'cn-hangzhou-b',
                                                    ],
                                                    'Value' => [
                                                        'description' => '配额维度Value的值。',
                                                        'type' => 'string',
                                                        'example' => 'cn-hangzhou-b'."\n",
                                                    ],
                                                    'DependentDimensions' => [
                                                        'description' => '目标配额维度依赖的配额维度。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '目标配额维度依赖的配额维度。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Key' => [
                                                                    'description' => '目标配额维度依赖的配额维度的Key。',
                                                                    'type' => 'string',
                                                                    'example' => 'regionId',
                                                                ],
                                                                'Value' => [
                                                                    'description' => '目标配额维度依赖的配额维度的Value。',
                                                                    'type' => 'string',
                                                                    'example' => 'cn-hangzhou',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Name' => [
                                            'description' => '配额维度的名称。',
                                            'type' => 'string',
                                            'example' => '可用区',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '本次请求返回的全部记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'NextToken' => [
                                'description' => '用来标记返回查询数据的位置。未返回表示数据已经查询完毕。',
                                'type' => 'string',
                                'example' => '84',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7ED584FB-ECBF-4A2A-969D-F54D25EFABF9',
                            ],
                            'MaxResults' => [
                                'description' => '本次查询返回的最大记录条数。'."\n"
                                    ."\n",
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"QuotaDimensions\\": [\\n    {\\n      \\"Requisite\\": false,\\n      \\"DimensionKey\\": \\"zoneId\\",\\n      \\"DependentDimensions\\": [\\n        \\"regionId\\"\\n      ],\\n      \\"DimensionValues\\": [\\n        \\"[\\\\\\"cn-hangzhou-b\\\\\\", \\\\\\"cn-hangzhou-e\\\\\\", \\\\\\"cn-hangzhou-f\\\\\\", \\\\\\"cn-hangzhou-g\\\\\\", \\\\\\"cn-hangzhou-h\\\\\\", \\\\\\"cn-hangzhou-i\\\\\\", \\\\\\"cn-hangzhou-j\\\\\\", \\\\\\"cn-hangzhou-k\\\\\\"]\\"\\n      ],\\n      \\"DimensionValueDetail\\": [\\n        {\\n          \\"Name\\": \\"cn-hangzhou-b\\",\\n          \\"Value\\": \\"cn-hangzhou-b\\\\n\\",\\n          \\"DependentDimensions\\": [\\n            {\\n              \\"Key\\": \\"regionId\\",\\n              \\"Value\\": \\"cn-hangzhou\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"Name\\": \\"可用区\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 5,\\n  \\"NextToken\\": \\"84\\",\\n  \\"RequestId\\": \\"7ED584FB-ECBF-4A2A-969D-F54D25EFABF9\\",\\n  \\"MaxResults\\": 5\\n}","errorExample":""},{"type":"xml","example":"<ListProductQuotaDimensionsResponse>\\n<QuotaDimensions>\\n    <DimensionKey>regionId</DimensionKey>\\n    <DimensionValues>cn-shenzhen</DimensionValues>\\n    <DimensionValues>cn-beijing</DimensionValues>\\n    <DimensionValues>cn-wulanchabu</DimensionValues>\\n    <DimensionValues>ap-south-1</DimensionValues>\\n    <DimensionValues>eu-west-1</DimensionValues>\\n    <DimensionValues>ap-northeast-1</DimensionValues>\\n    <DimensionValues>me-east-1</DimensionValues>\\n    <DimensionValues>cn-chengdu</DimensionValues>\\n    <DimensionValues>cn-qingdao</DimensionValues>\\n    <DimensionValues>cn-shanghai</DimensionValues>\\n    <DimensionValues>cn-guangzhou</DimensionValues>\\n    <DimensionValues>cn-hongkong</DimensionValues>\\n    <DimensionValues>ap-southeast-1</DimensionValues>\\n    <DimensionValues>cn-heyuan</DimensionValues>\\n    <DimensionValues>ap-southeast-2</DimensionValues>\\n    <DimensionValues>ap-southeast-3</DimensionValues>\\n    <DimensionValues>eu-central-1</DimensionValues>\\n    <DimensionValues>cn-huhehaote</DimensionValues>\\n    <DimensionValues>ap-southeast-5</DimensionValues>\\n    <DimensionValues>us-east-1</DimensionValues>\\n    <DimensionValues>cn-zhangjiakou</DimensionValues>\\n    <DimensionValues>us-west-1</DimensionValues>\\n    <DimensionValues>cn-hangzhou</DimensionValues>\\n    <Name>region</Name>\\n    <Requisite>false</Requisite>\\n</QuotaDimensions>\\n<QuotaDimensions>\\n    <DimensionKey>zoneId</DimensionKey>\\n    <Name>可用区ID</Name>\\n    <Requisite>false</Requisite>\\n    <DependentDimensions>regionId</DependentDimensions>\\n</QuotaDimensions>\\n<QuotaDimensions>\\n    <DimensionKey>chargeType</DimensionKey>\\n    <DimensionValues>Spot</DimensionValues>\\n    <DimensionValues>PostPaid</DimensionValues>\\n    <DimensionValues>PrePaid</DimensionValues>\\n    <Name>付费类型</Name>\\n    <Requisite>false</Requisite>\\n</QuotaDimensions>\\n<QuotaDimensions>\\n    <DimensionKey>networkType</DimensionKey>\\n    <DimensionValues>classic</DimensionValues>\\n    <DimensionValues>vpc</DimensionValues>\\n    <Name>网络类型</Name>\\n    <Requisite>false</Requisite>\\n</QuotaDimensions>\\n<TotalCount>4</TotalCount>\\n<RequestId>7ED584FB-ECBF-4A2A-969D-F54D25EFABF9</RequestId>\\n<MaxResults>4</MaxResults>\\n</ListProductQuotaDimensionsResponse>","errorExample":""}]',
            'title' => '查询云产品支持的配额维度',
            'description' => '本文将提供一个示例，查询云服务器ECS支持的配额维度。返回结果显示ECS支持的所有配额维度。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~171299~~)。 ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListProductQuotas' => [
            'summary' => '查询目标云产品的配额列表。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用来标记开始查询数据的位置。置空表示从头开始。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '本次查询的最大记录条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。默认值：30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '云产品的缩写名称。'."\n"
                            ."\n"
                            .'> 关于如何获取云产品的缩写名称，请参见[ListProducts](~~440555~~)中的`ProductCode`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'QuotaActionCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'q_security-groups',
                    ],
                ],
                [
                    'name' => 'KeyWord',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额的搜索关键字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'security',
                    ],
                ],
                [
                    'name' => 'SortField',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额支持的排序方式。取值：'."\n"
                            .'- TIME：按最近更新时间排序。'."\n"
                            .'- TOTAL：按总配额用量排序。'."\n"
                            .'- RESERVED：按预留配额用量排序。'."\n"
                            ."\n"
                            .'> 该参数仅针对云服务器ECS规格配额（ecs-spec），如果不设置，则为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TIME',
                    ],
                ],
                [
                    'name' => 'SortOrder',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额支持的排序方式。取值：'."\n"
                            .'- Ascending：升序。'."\n"
                            .'- Descending：降序。'."\n"
                            ."\n"
                            .'> 该参数仅针对云服务器ECS规格配额（ecs-spec），如果不设置，则为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Ascending',
                        'enum' => [
                            'Ascending',
                            'Descending',
                        ],
                    ],
                ],
                [
                    'name' => 'Dimensions',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '配额维度。',
                        'type' => 'array',
                        'items' => [
                            'description' => '配额维度。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '配额维度的Key。'."\n"
                                        ."\n"
                                        .'> N的取值范围取决于对应云产品支持的维度个数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'regionId',
                                ],
                                'Value' => [
                                    'description' => '配额维度的Value。'."\n"
                                        ."\n"
                                        .'> N的取值范围取决于对应云产品支持的维度个数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-hangzhou',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'QuotaCategory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额种类。取值：'."\n"
                            .'- CommonQuota（默认值）：通用配额。'."\n"
                            ."\n"
                            .'- FlowControl：API速率配额。'."\n"
                            ."\n"
                            .'- WhiteListLabel：权益配额。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FlowControl',
                        'enum' => [
                            'CommonQuota',
                            'FlowControl',
                            'WhiteListLabel',
                        ],
                    ],
                ],
                [
                    'name' => 'GroupCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '维度组代码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'entconsole_w1j3msbo2g',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '本次请求返回的全部记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'NextToken' => [
                                'description' => '用来标记返回查询数据的位置。空表示数据已经查询完毕。'."\n",
                                'type' => 'string',
                                'example' => 'AAAAAd98/tlL5GF2aM7UMKQGM8LZesIPr0CbfxASQvHV/pwcmVKNfdBbW8OPld3NvG9Cy8+dNcyFzyUttQA3IONfBhRGpXFyiVoTgK+dupBsP2mX',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D0131FD5-5397-44FE-BF5A-4B7165B813CC',
                            ],
                            'Quotas' => [
                                'description' => '配额详情。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '配额详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'QuotaUnit' => [
                                            'description' => '配额单位。',
                                            'type' => 'string',
                                            'example' => '个',
                                        ],
                                        'QuotaActionCode' => [
                                            'description' => '配额ID。',
                                            'type' => 'string',
                                            'example' => 'q_security-groups',
                                        ],
                                        'TotalUsage' => [
                                            'description' => '配额用量。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '1009',
                                        ],
                                        'ApplicableRange' => [
                                            'description' => '无。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '当前配额项可申请的配额值区间。'."\n"
                                                    ."\n"
                                                    .'排除当前用户已有区间，用于申请配额时进行参考，例如：`[1010,10000]`。',
                                                'type' => 'number',
                                                'format' => 'float',
                                                'example' => '[1010,10000]',
                                            ],
                                        ],
                                        'SupportedRange' => [
                                            'description' => '无。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '当前配额项支持的配额值区间，用于配置配额模板时进行参考。'."\n"
                                                    ."\n"
                                                    .'- 当ApplicableType为continuous时，如果取值为[1009,10000]，则表示取值为1009~10000中的所有数。'."\n"
                                                    ."\n"
                                                    .'- 当ApplicableType为discontinuous时，如果取值为[10,20,50,100]，则表示取值仅为10、20、50和100。',
                                                'type' => 'number',
                                                'format' => 'float',
                                                'example' => '[1009,10000]',
                                            ],
                                        ],
                                        'QuotaType' => [
                                            'description' => '配额类型。取值：'."\n"
                                                ."\n"
                                                .'- privilege：特权。'."\n"
                                                ."\n"
                                                .'- normal：普通。',
                                            'type' => 'string',
                                            'example' => 'privilege',
                                        ],
                                        'QuotaDescription' => [
                                            'description' => '配额描述。',
                                            'type' => 'string',
                                            'example' => '当前账户可拥有的安全组的最大数量',
                                        ],
                                        'Period' => [
                                            'description' => '配额计算周期。',
                                            'type' => 'object',
                                            'properties' => [
                                                'PeriodValue' => [
                                                    'description' => '配额计算周期的取值。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '{}',
                                                ],
                                                'PeriodUnit' => [
                                                    'description' => '配额计算周期的单位。取值：'."\n"
                                                        ."\n"
                                                        .'- second：秒。'."\n"
                                                        ."\n"
                                                        .'- minute：分钟。'."\n"
                                                        ."\n"
                                                        .'- hour：小时。'."\n"
                                                        ."\n"
                                                        .'- day：天。'."\n"
                                                        ."\n"
                                                        .'- week：周。',
                                                    'type' => 'string',
                                                    'example' => 'day',
                                                ],
                                            ],
                                        ],
                                        'QuotaArn' => [
                                            'description' => '配额ARN。',
                                            'type' => 'string',
                                            'example' => 'acs:quotas:cn-hangzhou:120886317861****:quota/ecs/q_security-groups',
                                        ],
                                        'ApplicableType' => [
                                            'description' => '配额调整类型。取值：'."\n"
                                                ."\n"
                                                .'- continuous：连续。'."\n"
                                                ."\n"
                                                .'- discontinuous：间断。',
                                            'type' => 'string',
                                            'example' => 'discontinuous',
                                        ],
                                        'QuotaItems' => [
                                            'description' => '配额详情。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '无。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Type' => [
                                                        'description' => '配额类别。取值：'."\n"
                                                            ."\n"
                                                            .'- BaseQuota：保障配额。'."\n"
                                                            ."\n"
                                                            .'- ReservedQuota：预留配额。',
                                                        'type' => 'string',
                                                        'example' => 'BaseQuota',
                                                    ],
                                                    'Quota' => [
                                                        'description' => '配额值。',
                                                        'type' => 'string',
                                                        'example' => '1009',
                                                    ],
                                                    'QuotaUnit' => [
                                                        'description' => '配额单位。',
                                                        'type' => 'string',
                                                        'example' => '个',
                                                    ],
                                                    'Usage' => [
                                                        'description' => '配额用量。',
                                                        'type' => 'string',
                                                        'example' => '1009',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Dimensions' => [
                                            'description' => '配额维度。格式：`{"regionId":"地域"}`。',
                                            'type' => 'object',
                                            'example' => '{"regionId":"cn-hangzhou"}',
                                        ],
                                        'Adjustable' => [
                                            'description' => '配额是否可调整。取值：'."\n"
                                                ."\n"
                                                .'- true：配额可调整。'."\n"
                                                ."\n"
                                                .'- false：配额不可调整。'."\n",
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'QuotaName' => [
                                            'description' => '配额名称。',
                                            'type' => 'string',
                                            'example' => 'ecs.g5.2xlarge',
                                        ],
                                        'UnadjustableDetail' => [
                                            'description' => '配额不可调整原因。取值：'."\n"
                                                ."\n"
                                                .'- nonactivated：未开通服务。'."\n"
                                                ."\n"
                                                .'- applicationProcess：配额申请处理中。'."\n"
                                                ."\n"
                                                .'- limitReached：已达配额上限。',
                                            'type' => 'string',
                                            'example' => 'applicationProcess',
                                        ],
                                        'Consumable' => [
                                            'description' => '是否显示“已使用”的配额。取值：'."\n"
                                                ."\n"
                                                .'- true：显示“已使用”的配额。'."\n"
                                                ."\n"
                                                .'- false：不显示“已使用”的配额。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'TotalQuota' => [
                                            'description' => '配额值。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '200',
                                        ],
                                        'ProductCode' => [
                                            'description' => '云产品名称缩写。',
                                            'type' => 'string',
                                            'example' => 'ecs',
                                        ],
                                        'EffectiveTime' => [
                                            'description' => '配额生效的UTC时间。',
                                            'type' => 'string',
                                            'example' => '2022-09-28T06:07:00Z',
                                        ],
                                        'ExpireTime' => [
                                            'description' => '配额失效的UTC时间。',
                                            'type' => 'string',
                                            'example' => '2022-09-29T06:07:00Z',
                                        ],
                                        'QuotaCategory' => [
                                            'description' => '配额类型。'."\n"
                                                .'- CommonQuota：通用配额。'."\n"
                                                .'- FlowControl：API速率配额。'."\n"
                                                .'- WhiteListLabel：权益配额。',
                                            'type' => 'string',
                                            'example' => 'CommonQuota',
                                        ],
                                        'ApplyReasonTips' => [
                                            'description' => '申请配额调整理由示例。',
                                            'type' => 'string',
                                            'example' => '申请业务：xxx'."\n"
                                                .'业务规模预计增长：50%',
                                        ],
                                        'GlobalQuota' => [
                                            'description' => '是否为全局配额。取值：'."\n"
                                                .'- true：该配额项为所有Region共用。'."\n"
                                                .'- false：该配额项为每个Region独立。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'UsageMetric' => [
                                            'description' => '配额用量在云监控（CloudMonitor）中的监控信息。'."\n"
                                                ."\n"
                                                .'> 空表示云监控中无此配额监控数据。',
                                            'type' => 'object',
                                            'properties' => [
                                                'MetricNamespace' => [
                                                    'description' => 'CloudMonitor监控数据命名空间。',
                                                    'type' => 'string',
                                                    'example' => 'acs_quotas_flowcontrol',
                                                ],
                                                'MetricName' => [
                                                    'description' => 'CloudMonitor监控项名称。',
                                                    'type' => 'string',
                                                    'example' => 'Usage',
                                                ],
                                                'MetricDimensions' => [
                                                    'description' => 'CloudMonitor监控维度。'."\n"
                                                        ."\n"
                                                        .'格式：`key:value`键值对形式的集合，例如：'."\n"
                                                        .'`{"productCode":"***","metricKey":"***","regionId":"***","label":"***"}`。',
                                                    'type' => 'object',
                                                    'additionalProperties' => [
                                                        'type' => 'string',
                                                        'example' => 'ecs',
                                                        'description' => 'CloudMonitor监控维度值。',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'MaxResults' => [
                                'description' => '本次查询返回的最大记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidSortOrder',
                        'errorMessage' => 'Invalid SortOrder',
                    ],
                    [
                        'errorCode' => 'INVALID.MAX.RESULTS',
                        'errorMessage' => 'The maxResults parameter is invalid. Use an integer ranging from 1 to 100.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"NextToken\\": \\"AAAAAd98/tlL5GF2aM7UMKQGM8LZesIPr0CbfxASQvHV/pwcmVKNfdBbW8OPld3NvG9Cy8+dNcyFzyUttQA3IONfBhRGpXFyiVoTgK+dupBsP2mX\\",\\n  \\"RequestId\\": \\"D0131FD5-5397-44FE-BF5A-4B7165B813CC\\",\\n  \\"Quotas\\": [\\n    {\\n      \\"QuotaUnit\\": \\"个\\",\\n      \\"QuotaActionCode\\": \\"q_security-groups\\",\\n      \\"TotalUsage\\": 1009,\\n      \\"ApplicableRange\\": [\\n        0\\n      ],\\n      \\"SupportedRange\\": [\\n        0\\n      ],\\n      \\"QuotaType\\": \\"privilege\\",\\n      \\"QuotaDescription\\": \\"当前账户可拥有的安全组的最大数量\\",\\n      \\"Period\\": {\\n        \\"PeriodValue\\": 0,\\n        \\"PeriodUnit\\": \\"day\\"\\n      },\\n      \\"QuotaArn\\": \\"acs:quotas:cn-hangzhou:120886317861****:quota/ecs/q_security-groups\\",\\n      \\"ApplicableType\\": \\"discontinuous\\",\\n      \\"QuotaItems\\": [\\n        {\\n          \\"Type\\": \\"BaseQuota\\",\\n          \\"Quota\\": \\"1009\\",\\n          \\"QuotaUnit\\": \\"个\\",\\n          \\"Usage\\": \\"1009\\"\\n        }\\n      ],\\n      \\"Dimensions\\": {\\n        \\"regionId\\": \\"cn-hangzhou\\"\\n      },\\n      \\"Adjustable\\": true,\\n      \\"QuotaName\\": \\"ecs.g5.2xlarge\\",\\n      \\"UnadjustableDetail\\": \\"applicationProcess\\",\\n      \\"Consumable\\": true,\\n      \\"TotalQuota\\": 200,\\n      \\"ProductCode\\": \\"ecs\\",\\n      \\"EffectiveTime\\": \\"2022-09-28T06:07:00Z\\",\\n      \\"ExpireTime\\": \\"2022-09-29T06:07:00Z\\",\\n      \\"QuotaCategory\\": \\"CommonQuota\\",\\n      \\"ApplyReasonTips\\": \\"申请业务：xxx\\\\n业务规模预计增长：50%\\",\\n      \\"GlobalQuota\\": true,\\n      \\"UsageMetric\\": {\\n        \\"MetricNamespace\\": \\"acs_quotas_flowcontrol\\",\\n        \\"MetricName\\": \\"Usage\\",\\n        \\"MetricDimensions\\": {\\n          \\"key\\": \\"ecs\\"\\n        }\\n      }\\n    }\\n  ],\\n  \\"MaxResults\\": 1\\n}","errorExample":""},{"type":"xml","example":"<ListProductQuotasResponse>\\n    <TotalCount>4</TotalCount>\\n    <RequestId>F3A3568B-B01E-4EA7-B3DD-0699B4D319F9</RequestId>\\n    <NextToken>AAAAAd98/tlL5GF2aM7UMKQGM8LZesIPr0CbfxASQvHV/pwcmVKNfdBbW8OPld3NvG9Cy8+dNcyFzyUttQA3IONfBhRGpXFyiVoTgK+dupBsP2mX</NextToken>\\n    <Quotas>\\n        <QuotaDescription>ecs.g5.2xlarge</QuotaDescription>\\n        <Consumable>true</Consumable>\\n        <TotalUsage>3</TotalUsage>\\n        <ProductCode>ecs-spec</ProductCode>\\n        <Dimensions>\\n            <regionId>cn-hangzhou</regionId>\\n            <chargeType>PostPaid</chargeType>\\n            <zoneId>cn-hangzhou-i</zoneId>\\n            <networkType>vpc</networkType>\\n            <resourceType>InstanceType</resourceType>\\n        </Dimensions>\\n        <QuotaUnit>AMOUNT</QuotaUnit>\\n        <Period/>\\n        <Adjustable>true</Adjustable>\\n        <QuotaActionCode>ecs.g5.2xlarge</QuotaActionCode>\\n        <QuotaName>ecs.g5.2xlarge</QuotaName>\\n        <QuotaItems>\\n            <Usage>0</Usage>\\n            <Type>ReservedQuota</Type>\\n            <Quota>0</Quota>\\n        </QuotaItems>\\n        <QuotaItems>\\n            <Usage>0</Usage>\\n            <Type>BaseQuota</Type>\\n            <Quota>0</Quota>\\n        </QuotaItems>\\n        <QuotaArn>acs:quotas:cn-hangzhou:107992689699****:quota/ecs/ecs.g5.2xlarge/postpaid/vpc/cn-hangzhou/instancetype/cn-hangzhou-i</QuotaArn>\\n        <TotalQuota>160</TotalQuota>\\n        <ApplicableType>continuous</ApplicableType>\\n    </Quotas>\\n    <MaxResults>1</MaxResults>\\n</ListProductQuotasResponse>","errorExample":""}]',
            'title' => '查询目标云产品的配额列表',
            'description' => '本文将提供一个示例，查询云服务ECS规格配额`ecs.g5.2xlarge`的配额列表。返回结果显示，目标配额的名称、ID、单位、维度、周期等信息。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~171299~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListProducts' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用来标记开始查询数据的位置。置空表示从头开始。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '本次查询的最大记录条数。'."\n"
                            ."\n"
                            .'取值范围：1~200。默认值：30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'example' => '4',
                        'default' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ProductInfo' => [
                                'description' => '云产品信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ProductName' => [
                                            'description' => '云产品名称。',
                                            'type' => 'string',
                                            'example' => '云服务器ECS',
                                        ],
                                        'SecondCategoryId' => [
                                            'description' => '产品类目ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '5',
                                        ],
                                        'ProductNameEn' => [
                                            'description' => '云产品英文名称。',
                                            'type' => 'string',
                                            'example' => 'Elastic Compute Service',
                                        ],
                                        'Dynamic' => [
                                            'description' => '是否支持动态调整配额。取值：'."\n"
                                                ."\n"
                                                .'- true'."\n"
                                                ."\n"
                                                .'- false',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'SecondCategoryNameEn' => [
                                            'description' => '产品类目英文名称。',
                                            'type' => 'string',
                                            'example' => 'Elastic Compute',
                                        ],
                                        'SecondCategoryName' => [
                                            'description' => '产品类目名称。',
                                            'type' => 'string',
                                            'example' => '弹性计算',
                                        ],
                                        'ProductCode' => [
                                            'description' => '云产品名称缩写。',
                                            'type' => 'string',
                                            'example' => 'ecs',
                                        ],
                                        'FlowControlSupport' => [
                                            'title' => '是否支持流程',
                                            'description' => '是否支持API速率配额。取值：'."\n"
                                                ."\n"
                                                .'- support：支持。'."\n"
                                                ."\n"
                                                .'- unsupport：不支持。',
                                            'type' => 'string',
                                            'example' => 'unsupport',
                                        ],
                                        'CommonQuotaSupport' => [
                                            'title' => '通用配额是否支持',
                                            'description' => '是否支持通用配额。取值：'."\n"
                                                ."\n"
                                                .'- support：支持。'."\n"
                                                ."\n"
                                                .'- unsupport：不支持。',
                                            'type' => 'string',
                                            'example' => 'support',
                                        ],
                                        'WhiteListLabelQuotaSupport' => [
                                            'description' => '是否支持权益配额。取值：'."\n"
                                                ."\n"
                                                .'- support：支持。'."\n"
                                                ."\n"
                                                .'- unsupport：不支持。',
                                            'type' => 'string',
                                            'example' => 'support',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '本次请求返回的全部记录条数。'."\n",
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'NextToken' => [
                                'description' => '用来标记返回查询数据的位置。空表示数据已经查询完毕。',
                                'type' => 'string',
                                'example' => '4',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1DA9C136-11BC-4C39-ADC6-B86276128072',
                            ],
                            'MaxResults' => [
                                'description' => '本次查询返回的最大记录条数。'."\n",
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '4',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ProductInfo\\": [\\n    {\\n      \\"ProductName\\": \\"云服务器ECS\\",\\n      \\"SecondCategoryId\\": 5,\\n      \\"ProductNameEn\\": \\"Elastic Compute Service\\",\\n      \\"Dynamic\\": true,\\n      \\"SecondCategoryNameEn\\": \\"Elastic Compute\\",\\n      \\"SecondCategoryName\\": \\"弹性计算\\",\\n      \\"ProductCode\\": \\"ecs\\",\\n      \\"FlowControlSupport\\": \\"unsupport\\",\\n      \\"CommonQuotaSupport\\": \\"support\\",\\n      \\"WhiteListLabelQuotaSupport\\": \\"support\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 1,\\n  \\"NextToken\\": \\"4\\",\\n  \\"RequestId\\": \\"1DA9C136-11BC-4C39-ADC6-B86276128072\\",\\n  \\"MaxResults\\": 4\\n}","errorExample":""},{"type":"xml","example":"<ListProductsResponse>\\r\\n\\t<ProductInfo>\\r\\n\\t\\t<SecondCategoryNameEn>Elastic Compute</SecondCategoryNameEn>\\r\\n\\t\\t<Dynamic>true</Dynamic>\\r\\n\\t\\t<CommonQuotaSupport>support</CommonQuotaSupport>\\r\\n\\t\\t<ProductName>云服务器ECS</ProductName>\\r\\n\\t\\t<ProductCode>ecs</ProductCode>\\r\\n\\t\\t<SecondCategoryName>弹性计算</SecondCategoryName>\\r\\n\\t\\t<FlowControlSupport>unsupport</FlowControlSupport>\\r\\n\\t\\t<SecondCategoryId>5</SecondCategoryId>\\r\\n\\t\\t<ProductNameEn>Elastic Compute Service</ProductNameEn>\\r\\n\\t</ProductInfo>\\r\\n\\t<ProductInfo>\\r\\n\\t\\t<SecondCategoryNameEn>Elastic Compute</SecondCategoryNameEn>\\r\\n\\t\\t<Dynamic>true</Dynamic>\\r\\n\\t\\t<CommonQuotaSupport>support</CommonQuotaSupport>\\r\\n\\t\\t<ProductName>云服务器ECS规格配额</ProductName>\\r\\n\\t\\t<ProductCode>ecs-spec</ProductCode>\\r\\n\\t\\t<SecondCategoryName>弹性计算</SecondCategoryName>\\r\\n\\t\\t<FlowControlSupport>unsupport</FlowControlSupport>\\r\\n\\t\\t<SecondCategoryId>5</SecondCategoryId>\\r\\n\\t\\t<ProductNameEn>Ecs Quotas by Instance Type</ProductNameEn>\\r\\n\\t</ProductInfo>\\r\\n\\t<ProductInfo>\\r\\n\\t\\t<SecondCategoryNameEn>Elastic Compute</SecondCategoryNameEn>\\r\\n\\t\\t<Dynamic>true</Dynamic>\\r\\n\\t\\t<CommonQuotaSupport>support</CommonQuotaSupport>\\r\\n\\t\\t<ProductName>弹性伸缩</ProductName>\\r\\n\\t\\t<ProductCode>ess</ProductCode>\\r\\n\\t\\t<SecondCategoryName>弹性计算</SecondCategoryName>\\r\\n\\t\\t<FlowControlSupport>unsupport</FlowControlSupport>\\r\\n\\t\\t<SecondCategoryId>5</SecondCategoryId>\\r\\n\\t\\t<ProductNameEn>Auto Scaling</ProductNameEn>\\r\\n\\t</ProductInfo>\\r\\n\\t<ProductInfo>\\r\\n\\t\\t<SecondCategoryNameEn>Security Management</SecondCategoryNameEn>\\r\\n\\t\\t<Dynamic>true</Dynamic>\\r\\n\\t\\t<CommonQuotaSupport>support</CommonQuotaSupport>\\r\\n\\t\\t<ProductName>操作审计</ProductName>\\r\\n\\t\\t<ProductCode>actiontrail</ProductCode>\\r\\n\\t\\t<SecondCategoryName>安全管理</SecondCategoryName>\\r\\n\\t\\t<FlowControlSupport>unsupport</FlowControlSupport>\\r\\n\\t\\t<SecondCategoryId>21</SecondCategoryId>\\r\\n\\t\\t<ProductNameEn>ActionTrail</ProductNameEn>\\r\\n\\t</ProductInfo>\\r\\n\\t<TotalCount>22</TotalCount>\\r\\n\\t<RequestId>16AD05A1-10E4-4048-AD9D-03BC6B9D5CDA</RequestId>\\r\\n\\t<NextToken>4</NextToken>\\r\\n\\t<MaxResults>4</MaxResults>\\r\\n</ListProductsResponse>\\t","errorExample":""}]',
            'title' => '查询配额中心支持的云产品列表',
            'summary' => '查询配额中心支持的云产品列表。',
            'description' => '查询结果与[支持配额中心的云产品](~~182368~~)相同。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~171299~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListDependentQuotas' => [
            'summary' => '查询目标配额依赖的配额列表。',
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
                    'name' => 'ProductCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '云产品的缩写名称。'."\n"
                            ."\n"
                            .'> 关于如何获取云产品的缩写名称，请参见[ListProducts](~~440555~~)中的`ProductCode`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cloudsso',
                    ],
                ],
                [
                    'name' => 'QuotaActionCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额ID。'."\n"
                            ."\n"
                            .'> 关于如何获取目标云产品的配额ID，请参见[ListProductQuotas](~~440554~~)中的`QuotaActionCode`。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'q_system-policy-per-access-configuration',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '920D8A47-26BB-49FA-A09F-F98D7DAA55F3',
                            ],
                            'Quotas' => [
                                'description' => '目标配额依赖的配额列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '目标配额依赖的配额列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'QuotaActionCode' => [
                                            'description' => '目标配额依赖的配额ID。',
                                            'type' => 'string',
                                            'example' => 'q_laxtn4',
                                        ],
                                        'Dimensions' => [
                                            'description' => '目标配额依赖的配额维度。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '目标配额依赖的配额维度。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'DimensionKey' => [
                                                        'description' => '目标配额依赖的配额维度的Key。',
                                                        'type' => 'string',
                                                        'example' => '[]',
                                                    ],
                                                    'DependentDimension' => [
                                                        'description' => '目标配额依赖的配额维度所依赖的配额维度。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '目标配额依赖的配额维度所依赖的配额维度。',
                                                            'type' => 'string',
                                                            'example' => '[]',
                                                        ],
                                                    ],
                                                    'DimensionValues' => [
                                                        'description' => '目标配额依赖的配额维度所依赖的配额维度的Value。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '目标配额依赖的配额维度所依赖的配额维度的Value。',
                                                            'type' => 'string',
                                                            'example' => '[]',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ProductCode' => [
                                            'description' => '云产品名称缩写。',
                                            'type' => 'string',
                                            'example' => 'ram',
                                        ],
                                        'Scale' => [
                                            'description' => '目标配额与依赖配额的关系比例。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '100',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"920D8A47-26BB-49FA-A09F-F98D7DAA55F3\\",\\n  \\"Quotas\\": [\\n    {\\n      \\"QuotaActionCode\\": \\"q_laxtn4\\",\\n      \\"Dimensions\\": [\\n        {\\n          \\"DimensionKey\\": \\"[]\\",\\n          \\"DependentDimension\\": [\\n            \\"[]\\"\\n          ],\\n          \\"DimensionValues\\": [\\n            \\"[]\\"\\n          ]\\n        }\\n      ],\\n      \\"ProductCode\\": \\"ram\\",\\n      \\"Scale\\": 100\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListDependentQuotasResponse>\\r\\n\\t<RequestId>B871952D-ACA9-4641-B21A-713B08A5270A</RequestId>\\r\\n\\t<Quotas>\\r\\n\\t\\t<QuotaActionCode>q_fh20b0</QuotaActionCode>\\r\\n\\t\\t<ProductCode>slb</ProductCode>\\r\\n\\t</Quotas>\\r\\n\\t<Quotas>\\r\\n\\t\\t<QuotaActionCode>q_3mmbsp</QuotaActionCode>\\r\\n\\t\\t<ProductCode>slb</ProductCode>\\r\\n\\t</Quotas>\\r\\n\\t<Quotas>\\r\\n\\t\\t<QuotaActionCode>q_elastic-network-interfaces</QuotaActionCode>\\r\\n\\t\\t<ProductCode>ecs</ProductCode>\\r\\n\\t\\t<Dimensions>\\r\\n\\t\\t\\t<DimensionKey>regionId</DimensionKey>\\r\\n\\t\\t\\t<DimensionValues>cn-shenzhen</DimensionValues>\\r\\n\\t\\t\\t<DimensionValues>cn-beijing</DimensionValues>\\r\\n\\t\\t\\t<DimensionValues>cn-hangzhou</DimensionValues>\\r\\n\\t\\t</Dimensions>\\r\\n\\t</Quotas>\\r\\n</ListDependentQuotasResponse>\\t","errorExample":""}]',
            'title' => '查询目标配额依赖的配额列表',
            'description' => '本文将提供一个示例，查询云SSO（cloudsso）的配额`q_system-policy-per-access-configuration`（一个访问配置可以绑定的系统策略数量）依赖的配额列表，返回结果显示访问控制（ram）的配额项`q_laxtn4`（一个RAM角色可以绑定的系统策略个数）。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~171299~~)。 '."\n",
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateQuotaAlarm' => [
            'summary' => '创建配额告警。',
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
                    'name' => 'ProductCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '云产品的缩写名称。'."\n"
                            ."\n"
                            .'> 关于如何获取云产品的缩写名称，请参见[ListProductQuotas](~~440554~~)中的`ProductCode`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'config',
                    ],
                ],
                [
                    'name' => 'QuotaActionCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额ID。'."\n"
                            ."\n"
                            .'> 关于如何获取云产品的配额ID，请参见[ListProductQuotas](~~440554~~)中的`QuotaActionCode`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'q_hvnoqv',
                    ],
                ],
                [
                    'name' => 'AlarmName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额告警名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '规则创建数量告警',
                    ],
                ],
                [
                    'name' => 'ThresholdType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额告警类型。取值：'."\n"
                            ."\n"
                            .'- used（默认值）：已使用量告警。'."\n"
                            .'- usable：剩余可用量告警。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'used',
                        'default' => 'used',
                        'enum' => [
                            'used',
                            'usable',
                        ],
                    ],
                ],
                [
                    'name' => 'Threshold',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额告警阈值的数值。取值：'."\n"
                            ."\n"
                            .'- 当`ThresholdType`选择`used`时，如果配额的已使用量大于等于预设数值，您会收到告警通知。配额告警阈值必须大于配额的已使用量。'."\n"
                            ."\n"
                            .'- 当`ThresholdType`选择`usable`时，如果配额的剩余可用量小于等于预设数值，您会收到告警通知。配额告警阈值必须小于配额的剩余可用量。'."\n"
                            ."\n"
                            .'> 该参数与ThresholdPercent必须设置一个。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '150',
                    ],
                ],
                [
                    'name' => 'ThresholdPercent',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额告警阈值的百分比。取值：'."\n"
                            ."\n"
                            .'- 当`ThresholdType`选择`used`时，如果配额的已使用量大于等于预设百分比，您会收到告警通知。取值范围：（50%, 100%]。'."\n"
                            ."\n"
                            .'- 当`ThresholdType`选择`usable`时，如果配额的剩余可用量小于等于预设百分比，您会收到告警通知。取值范围：（0%, 50%]。'."\n"
                            ."\n"
                            .'> 该参数与Threshold必须设置一个。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '50',
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'WebHook',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额中心将告警信息通过HTTP协议的POST请求发送到指定公网的URL地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://alert.aliyun.com/callback',
                    ],
                ],
                [
                    'name' => 'QuotaDimensions',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '配额维度列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '无。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '配额维度的Key。'."\n"
                                        ."\n"
                                        .'> - N的取值范围取决于云产品支持的维度个数。'."\n"
                                        .'> - 当`ProductCode`为`ecs`、`ecs-spec`、`actiontrail`、`ess`等时，配额维度的Key和Value必须同时设置。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'regionId',
                                ],
                                'Value' => [
                                    'description' => '配额维度的Value。'."\n"
                                        ."\n"
                                        .'> - N的取值范围取决于云产品支持的维度个数。'."\n"
                                        .'> - 当`ProductCode`为`ecs`、`ecs-spec`、`actiontrail`、`ess`等时，配额维度的Key和Value必须同时设置。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-hangzhou',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AlarmId' => [
                                'description' => '告警ID。',
                                'type' => 'string',
                                'example' => '18b3be23-b7b0-4d45-91bc-d0c331aa****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BD219E2B-E687-45EE-B5F3-61FB730551B1',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'QUOTA.UNSUPPORT.ALARM',
                        'errorMessage' => 'This quota does not support creating alarm',
                    ],
                    [
                        'errorCode' => 'ALARM.NAME.REPEAT',
                        'errorMessage' => 'The warning name must be unique.',
                    ],
                    [
                        'errorCode' => 'QUOTA.ALARM.MAX',
                        'errorMessage' => 'Quota alarm have reached the upper limit of 100',
                    ],
                    [
                        'errorCode' => 'UNSUPPORTED.ALARM.TYPE',
                        'errorMessage' => 'Unified alarm does not support alarm types for used quantity alarms, and does not support numerical threshold types of quota alarms.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"AlarmId\\": \\"18b3be23-b7b0-4d45-91bc-d0c331aa****\\",\\n  \\"RequestId\\": \\"BD219E2B-E687-45EE-B5F3-61FB730551B1\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateQuotaAlarmResponse>\\n\\t\\t<AlarmId>a2efa7fc-832f-47bb-8054-39e28012****</AlarmId>\\n\\t\\t<RequestId>88BAD9A9-0C47-4139-8531-08CB333F3384</RequestId>\\n</CreateQuotaAlarmResponse>","errorExample":""}]',
            'title' => '创建配额用量告警',
            'description' => '本文将提供一个示例，为`config`（配置审计）的配额`q_hvnoqv`（规则创建数量）创建配额告警。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~171299~~)。 ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteQuotaAlarm' => [
            'summary' => '删除配额用量告警。',
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'AlarmId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额告警ID。'."\n"
                            ."\n"
                            .'> 关于如何获取配额告警ID，请参见[ListQuotaAlarms](~~440561~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '6b512ab7-da3a-4142-b529-2b2a9294****',
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
                                'example' => 'A95C65B3-7CF4-469E-B1D5-1CA0628A6411',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'RAM.PERMISSION.DENIED',
                        'errorMessage' => 'You are not authorized to do this action or the API input parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A95C65B3-7CF4-469E-B1D5-1CA0628A6411\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteQuotaAlarmResponse>\\r\\n<RequestId>A95C65B3-7CF4-469E-B1D5-1CA0628A6411</RequestId>\\r\\n</DeleteQuotaAlarmResponse>","errorExample":""}]',
            'title' => '删除配额用量告警',
            'description' => '本文将提供一个示例，删除配额用量告警`6b512ab7-da3a-4142-b529-2b2a9294****`。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~171299~~)。 ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateQuotaAlarm' => [
            'summary' => '修改配额告警信息。',
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
                    'name' => 'AlarmId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额告警ID。'."\n"
                            ."\n"
                            .'> 关于如何获取配额告警ID，请参见[ListQuotaAlarms](~~440561~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a2efa7fc-832f-47bb-8054-39e28012****',
                    ],
                ],
                [
                    'name' => 'AlarmName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额告警名称。'."\n"
                            ."\n"
                            .'> 关于如何获取配额告警名称，请参见[ListQuotaAlarms](~~440561~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '规则创建数量告警',
                    ],
                ],
                [
                    'name' => 'ThresholdType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额告警类型。取值：'."\n"
                            ."\n"
                            .'- used（默认值）：已使用量告警。'."\n"
                            .'- usable：剩余可用量告警。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'usable',
                        'default' => 'used',
                        'enum' => [
                            'used',
                            'usable',
                        ],
                    ],
                ],
                [
                    'name' => 'Threshold',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额告警阈值的数值。取值：'."\n"
                            ."\n"
                            .'- 当`ThresholdType`选择`used`时，如果配额的已使用量大于等于预设数值，您会收到告警通知。配额告警阈值必须大于配额的已使用量。'."\n"
                            ."\n"
                            .'- 当`ThresholdType`选择`usable`时，如果配额的剩余可用量小于等于预设数值，您会收到告警通知。配额告警阈值必须小于配额的剩余可用量。'."\n"
                            ."\n"
                            .'> 该参数与ThresholdPercent必须设置一个。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '160',
                    ],
                ],
                [
                    'name' => 'ThresholdPercent',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额告警阈值的百分比。取值：'."\n"
                            ."\n"
                            .'- 当`ThresholdType`选择`used`时，如果配额的已使用量大于等于预设百分比，您会收到告警通知。取值范围：（50%, 100%]。'."\n"
                            ."\n"
                            .'- 当`ThresholdType`选择`usable`时，如果配额的剩余可用量小于等于预设百分比，您会收到告警通知。取值范围：（0%, 50%]。'."\n"
                            ."\n"
                            .'> 该参数与Threshold必须设置一个',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '50',
                        'example' => '51',
                    ],
                ],
                [
                    'name' => 'WebHook',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额中心将告警信息通过HTTP协议的POST请求发送到指定公网的URL地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://alert.aliyun.com/callback',
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
                                'example' => 'A95C65B3-7CF4-469E-B1D5-1CA0628A6411',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'RAM.PERMISSION.DENIED',
                        'errorMessage' => 'You are not authorized to do this action or the API input parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'UNSUPPORTED.ALARM.TYPE',
                        'errorMessage' => 'Unified alarm does not support alarm types for used quantity alarms, and does not support numerical threshold types of quota alarms.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A95C65B3-7CF4-469E-B1D5-1CA0628A6411\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateQuotaAlarmResponse>\\r\\n\\t<RequestId>2542826A-B67E-42C7-B1CB-2F5B52CDE9A8</RequestId>\\r\\n</UpdateQuotaAlarmResponse>","errorExample":""}]',
            'title' => '修改配额用量告警信息',
            'description' => '本文将提供一个示例，将配额告警ID为`a2efa7fc-832f-47bb-8054-39e28012****`、配额告警名称为`规则创建数量`的配额告警阈值由`150`修改为`160`。',
            'extraInfo' => ' ',
        ],
        'ListQuotaAlarms' => [
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
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用来标记开始读取数据的位置。'."\n"
                            ."\n"
                            .'> 不设置该参数，表示从头开始。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '本次读取的最大记录条数。'."\n"
                            ."\n"
                            .'取值范围：1~200。默认值：30。'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '云产品的缩写名称。'."\n"
                            ."\n"
                            .'> 关于如何获取云产品的缩写名称，请参见[ListProductQuotas](~~440554~~)中的`ProductCode`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'AlarmName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额用量告警名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '规则创建数量告警',
                    ],
                ],
                [
                    'name' => 'QuotaActionCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额ID。'."\n"
                            ."\n"
                            .'> - 关于如何获取云产品的配额ID，请参见[ListProductQuotas](~~440554~~)中的`QuotaActionCode`。'."\n"
                            .'> - 如果已设置本参数，则`ProductCode`必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'q_hvnoqv',
                    ],
                ],
                [
                    'name' => 'QuotaDimensions',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '配额维度。',
                        'type' => 'array',
                        'items' => [
                            'description' => '配额维度。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '配额维度的Key。'."\n"
                                        ."\n"
                                        .'> - N的取值范围取决于云产品支持的维度个数。'."\n"
                                        .'> - 当`ProductCode`为`ecs`、`ecs-spec`、`actiontrail`、`ess`等时，配额维度的Key和Value必须同时设置。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'regionId',
                                ],
                                'Value' => [
                                    'description' => '配额维度的Key。'."\n"
                                        ."\n"
                                        .'> - N的取值范围取决于云产品支持的维度个数。'."\n"
                                        .'> - 当`ProductCode`为`ecs`、`ecs-spec`、`actiontrail`、`ess`等时，配额维度的Key和Value必须同时设置。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-hangzhou',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '配额用量告警总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'QuotaAlarms' => [
                                'description' => '配额用量告警详情。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '配额用量告警详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ThresholdPercent' => [
                                            'description' => '配额用量告警阈值的百分比。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '80',
                                        ],
                                        'ThresholdType' => [
                                            'description' => '配额告警类型。取值：'."\n"
                                                ."\n"
                                                .'- used：已使用量告警。'."\n"
                                                .'- usable：剩余可用量告警。',
                                            'type' => 'string',
                                            'example' => 'used',
                                        ],
                                        'QuotaDimensions' => [
                                            'description' => '配额维度。',
                                            'type' => 'object',
                                            'example' => '{"regionId":"cn-hangzhou"}',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建配额用量告警的时间。',
                                            'type' => 'string',
                                            'example' => '2020-11-27T07:23:34Z',
                                        ],
                                        'QuotaActionCode' => [
                                            'description' => '配额ID。',
                                            'type' => 'string',
                                            'example' => 'q_hvnoqv',
                                        ],
                                        'AlarmName' => [
                                            'description' => '告警名称。',
                                            'type' => 'string',
                                            'example' => '规则创建数量告警',
                                        ],
                                        'NotifyTarget' => [
                                            'description' => '告警通知对象。取值：accountContact。',
                                            'type' => 'string',
                                            'example' => 'accountContact',
                                        ],
                                        'NotifyChannels' => [
                                            'description' => '配额告警通知渠道。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '告警通知渠道。取值：'."\n"
                                                    ."\n"
                                                    .'- sms：短消息。'."\n"
                                                    ."\n"
                                                    .'- email：电子邮件。',
                                                'type' => 'string',
                                                'example' => 'sms',
                                            ],
                                        ],
                                        'QuotaUsage' => [
                                            'description' => '已使用配额。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '73',
                                        ],
                                        'QuotaValue' => [
                                            'description' => '配额值。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '200',
                                        ],
                                        'AlarmId' => [
                                            'description' => '告警ID。',
                                            'type' => 'string',
                                            'example' => 'a2efa7fc-832f-47bb-8054-39e28012****',
                                        ],
                                        'Threshold' => [
                                            'description' => '配额用量告警阈值的数值。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '160',
                                        ],
                                        'ProductCode' => [
                                            'description' => '云服务名称缩写。',
                                            'type' => 'string',
                                            'example' => 'config',
                                        ],
                                        'WebHook' => [
                                            'description' => 'Webhook地址。',
                                            'type' => 'string',
                                            'example' => 'https://www.aliyun.com/webhook',
                                        ],
                                        'ExceedThreshold' => [
                                            'description' => '是否达到配额告警阈值。取值：'."\n"
                                                ."\n"
                                                .'- false'."\n"
                                                ."\n"
                                                .'- true',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '用来标记当前调用返回读取到的位置。'."\n"
                                    ."\n"
                                    .'> 该参数返回为空，表示数据已读取完毕。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '87F3B755-3BD2-4C76-B36A-93247002918C',
                            ],
                            'MaxResults' => [
                                'description' => '本次请求返回的最大记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"QuotaAlarms\\": [\\n    {\\n      \\"ThresholdPercent\\": 80,\\n      \\"ThresholdType\\": \\"used\\",\\n      \\"QuotaDimensions\\": {\\n        \\"regionId\\": \\"cn-hangzhou\\"\\n      },\\n      \\"CreateTime\\": \\"2020-11-27T07:23:34Z\\",\\n      \\"QuotaActionCode\\": \\"q_hvnoqv\\",\\n      \\"AlarmName\\": \\"规则创建数量告警\\",\\n      \\"NotifyTarget\\": \\"accountContact\\",\\n      \\"NotifyChannels\\": [\\n        \\"sms\\"\\n      ],\\n      \\"QuotaUsage\\": 73,\\n      \\"QuotaValue\\": 200,\\n      \\"AlarmId\\": \\"a2efa7fc-832f-47bb-8054-39e28012****\\",\\n      \\"Threshold\\": 160,\\n      \\"ProductCode\\": \\"config\\",\\n      \\"WebHook\\": \\"https://www.aliyun.com/webhook\\",\\n      \\"ExceedThreshold\\": false\\n    }\\n  ],\\n  \\"NextToken\\": \\"1\\",\\n  \\"RequestId\\": \\"87F3B755-3BD2-4C76-B36A-93247002918C\\",\\n  \\"MaxResults\\": 1\\n}","errorExample":""},{"type":"xml","example":"<ListQuotaAlarmsResponse>\\r\\n\\t<TotalCount>2</TotalCount>\\r\\n\\t<QuotaAlarms>\\r\\n\\t\\t<AlarmId>a2efa7fc-832f-47bb-8054-39e28012****</AlarmId>\\r\\n\\t\\t<QuotaActionCode>q_hvnoqv</QuotaActionCode>\\r\\n\\t\\t<NotifyChannels>sms</NotifyChannels>\\r\\n\\t\\t<QuotaValue>200</QuotaValue>\\r\\n\\t\\t<QuotaDimensions/>\\r\\n\\t\\t<AlarmName>规则创建数量告警</AlarmName>\\r\\n\\t\\t<ProductCode>config</ProductCode>\\r\\n\\t\\t<NotifyTarget>accountContact</NotifyTarget>\\r\\n\\t\\t<CreateTime>2020-11-27T07:23:34Z</CreateTime>\\r\\n\\t\\t<QuotaUsage>73</QuotaUsage>\\r\\n\\t\\t<ExceedThreshold>false</ExceedThreshold>\\r\\n\\t\\t<Threshold>160</Threshold>\\r\\n\\t</QuotaAlarms>\\r\\n\\t<QuotaAlarms>\\r\\n\\t\\t<AlarmId>3f42ae59-edd0-44ad-aed1-b7aa36ff****</AlarmId>\\r\\n\\t\\t<QuotaActionCode>q_elastic-network-interfaces</QuotaActionCode>\\r\\n\\t\\t<NotifyChannels>sms</NotifyChannels>\\r\\n\\t\\t<NotifyChannels>email</NotifyChannels>\\r\\n\\t\\t<QuotaValue>50000</QuotaValue>\\r\\n\\t\\t<QuotaDimensions>\\r\\n\\t\\t\\t<regionId>cn-hangzhou</regionId>\\r\\n\\t\\t</QuotaDimensions>\\r\\n\\t\\t<AlarmName>test123</AlarmName>\\r\\n\\t\\t<ProductCode>ecs</ProductCode>\\r\\n\\t\\t<NotifyTarget>accountContact</NotifyTarget>\\r\\n\\t\\t<CreateTime>2020-11-27T06:51:35Z</CreateTime>\\r\\n\\t\\t<QuotaUsage>1</QuotaUsage>\\r\\n\\t\\t<ExceedThreshold>false</ExceedThreshold>\\r\\n\\t\\t<Threshold>5</Threshold>\\r\\n\\t</QuotaAlarms>\\r\\n\\t<RequestId>87F3B755-3BD2-4C76-B36A-93247002918C</RequestId>\\r\\n\\t<MaxResults>2</MaxResults>\\r\\n</ListQuotaAlarmsResponse>\\t","errorExample":""}]',
            'title' => '查询配额用量告警列表',
            'summary' => '查询配额用量告警列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetQuotaAlarm' => [
            'summary' => '查询目标配额告警详情。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'AlarmId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额告警ID。'."\n"
                            ."\n"
                            .'关于如何获取配额告警ID，请参见[ListQuotaAlarms](~~184348~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '78d7e436-4b25-4897-84b5-d7b656bb****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '81B9D511-F3DD-43B1-9A81-1795DDB52ADF',
                            ],
                            'QuotaAlarm' => [
                                'description' => '配额告警详情。',
                                'type' => 'object',
                                'properties' => [
                                    'ThresholdPercent' => [
                                        'description' => '配额告警阈值的百分比。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '50',
                                    ],
                                    'ThresholdType' => [
                                        'description' => '配额告警类型。取值：'."\n"
                                            ."\n"
                                            .'- used：配额已使用量告警。'."\n"
                                            .'- usable：配额剩余可用量告警。',
                                        'type' => 'string',
                                        'example' => 'used',
                                    ],
                                    'QuotaDimension' => [
                                        'description' => '配额维度。',
                                        'type' => 'object',
                                        'example' => '{"regionId":"cn-hangzhou"}',
                                    ],
                                    'CreateTime' => [
                                        'description' => '配额告警创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-01-21T03:47:28Z',
                                    ],
                                    'QuotaActionCode' => [
                                        'description' => '配额ID。',
                                        'type' => 'string',
                                        'example' => 'q_security-groups',
                                    ],
                                    'AlarmName' => [
                                        'description' => '配额告警名称。',
                                        'type' => 'string',
                                        'example' => '安全组总数量上限',
                                    ],
                                    'NotifyTarget' => [
                                        'description' => '配额告警通知对象。',
                                        'type' => 'string',
                                        'example' => 'accountContact',
                                    ],
                                    'NotifyChannels' => [
                                        'description' => '告警通知渠道。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '配额告警通知渠道。取值：'."\n"
                                                ."\n"
                                                .'- sms：短信。'."\n"
                                                ."\n"
                                                .'- email：邮箱。',
                                            'type' => 'string',
                                            'example' => '["sms", "email"]',
                                        ],
                                    ],
                                    'QuotaUsage' => [
                                        'description' => '配额用量。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '28',
                                    ],
                                    'QuotaValue' => [
                                        'description' => '配额值。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '804',
                                    ],
                                    'AlarmId' => [
                                        'description' => '配额告警ID。',
                                        'type' => 'string',
                                        'example' => '78d7e436-4b25-4897-84b5-d7b656bb****',
                                    ],
                                    'Threshold' => [
                                        'description' => '配额告警阈值的数值。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '29',
                                    ],
                                    'ProductCode' => [
                                        'description' => '云服务名称缩写。',
                                        'type' => 'string',
                                        'example' => 'ecs',
                                    ],
                                    'Webhook' => [
                                        'description' => '配额中心将告警信息通过HTTP协议的POST请求发送到指定公网的URL地址。',
                                        'type' => 'string',
                                        'example' => 'https://alert.aliyun.com/callback',
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
                        'errorCode' => 'RAM.PERMISSION.DENIED',
                        'errorMessage' => 'You are not authorized to do this action or the API input parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"81B9D511-F3DD-43B1-9A81-1795DDB52ADF\\",\\n  \\"QuotaAlarm\\": {\\n    \\"ThresholdPercent\\": 50,\\n    \\"ThresholdType\\": \\"used\\",\\n    \\"QuotaDimension\\": {\\n      \\"regionId\\": \\"cn-hangzhou\\"\\n    },\\n    \\"CreateTime\\": \\"2021-01-21T03:47:28Z\\",\\n    \\"QuotaActionCode\\": \\"q_security-groups\\",\\n    \\"AlarmName\\": \\"安全组总数量上限\\",\\n    \\"NotifyTarget\\": \\"accountContact\\",\\n    \\"NotifyChannels\\": [\\n      \\"[\\\\\\"sms\\\\\\", \\\\\\"email\\\\\\"]\\"\\n    ],\\n    \\"QuotaUsage\\": 28,\\n    \\"QuotaValue\\": 804,\\n    \\"AlarmId\\": \\"78d7e436-4b25-4897-84b5-d7b656bb****\\",\\n    \\"Threshold\\": 29,\\n    \\"ProductCode\\": \\"ecs\\",\\n    \\"Webhook\\": \\"https://alert.aliyun.com/callback\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetQuotaAlarmResponse>\\r\\n\\t<RequestId>81B9D511-F3DD-43B1-9A81-1795DDB52ADF</RequestId>\\r\\n\\t<QuotaAlarm>\\r\\n\\t\\t<AlarmId>78d7e436-4b25-4897-84b5-d7b656bb****</AlarmId>\\r\\n\\t\\t<QuotaActionCode>q_security-groups</QuotaActionCode>\\r\\n\\t\\t<NotifyChannels>sms</NotifyChannels>\\r\\n\\t\\t<NotifyChannels>email</NotifyChannels>\\r\\n\\t\\t<QuotaValue>804</QuotaValue>\\r\\n\\t\\t<AlarmName> 安全组总数量上限</AlarmName>\\r\\n\\t\\t<ProductCode>ecs</ProductCode>\\r\\n\\t\\t<NotifyTarget>accountContact</NotifyTarget>\\r\\n\\t\\t<CreateTime>2021-01-21T03:47:28Z</CreateTime>\\r\\n\\t\\t<QuotaDimension>\\r\\n\\t\\t\\t<regionId>cn-hangzhou</regionId>\\r\\n\\t\\t</QuotaDimension>\\r\\n\\t\\t<QuotaUsage>28</QuotaUsage>\\r\\n\\t\\t<Threshold>29</Threshold>\\r\\n        <ThresholdType>used</ThresholdType>\\r\\n\\t</QuotaAlarm>\\r\\n</GetQuotaAlarmResponse>\\t","errorExample":""}]',
            'title' => '查询配额用量告警详情',
            'description' => '本文将提供一个示例，查询配额告警`78d7e436-4b25-4897-84b5-d7b656bb****`的详情。返回结果显示配额告警的详情，包括：告警ID、告警名称、告警创建时间、通知对象等。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~171299~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListAlarmHistories' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用来标记开始查询数据的位置。置空表示从头开始。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '本次查询最大记录条数。'."\n"
                            ."\n"
                            .'取值范围：1~200。默认值：30。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '查询关键字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '数量',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '查询开始时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20201020',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '查询结束时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20201024',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '云服务名称缩写。'."\n"
                            ."\n"
                            .'> 关于支持配额中心的云服务，请参见[支持配额中心的云服务](~~182368~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'AlarmId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '告警ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '18b3be23-b7b0-4d45-91bc-d0c331aa****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '本次请求返回的全部记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '4',
                            ],
                            'NextToken' => [
                                'description' => '用来标记返回查询数据的位置。空表示数据已经查询完毕。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CB38DDF9-B1E0-48C1-9966-19C443C2841E',
                            ],
                            'MaxResults' => [
                                'description' => '本次查询返回的最大记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '4',
                            ],
                            'AlarmHistories' => [
                                'description' => '配额告警历史记录详情。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '配额告警历史记录详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'QuotaUsage' => [
                                            'description' => '已使用配额。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '31',
                                        ],
                                        'ThresholdPercent' => [
                                            'description' => '配额告警阈值的百分比。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '80',
                                        ],
                                        'CreateTime' => [
                                            'description' => '配额告警创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-01-24T09:20:09Z',
                                        ],
                                        'QuotaActionCode' => [
                                            'description' => '配额ID。',
                                            'type' => 'string',
                                            'example' => 'q_security-groups',
                                        ],
                                        'AlarmName' => [
                                            'description' => '配额告警名称。',
                                            'type' => 'string',
                                            'example' => '安全组总数量上限',
                                        ],
                                        'NotifyTarget' => [
                                            'description' => '配额告警通知对象。',
                                            'type' => 'string',
                                            'example' => 'accountContact',
                                        ],
                                        'NotifyChannels' => [
                                            'description' => '配额告警通知渠道。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '配额告警通知渠道。取值：'."\n"
                                                    ."\n"
                                                    .'- sms：短信。'."\n"
                                                    ."\n"
                                                    .'- email：邮件。',
                                                'type' => 'string',
                                                'example' => '["sms", "email"]',
                                            ],
                                        ],
                                        'Threshold' => [
                                            'description' => '配额告警阈值的数值。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '29',
                                        ],
                                        'ProductCode' => [
                                            'description' => '云服务名称缩写。',
                                            'type' => 'string',
                                            'example' => 'ecs',
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
                        'errorCode' => 'InvalidStartTime',
                        'errorMessage' => 'Invalid StartTime',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime',
                        'errorMessage' => 'Invalid EndTime',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 4,\\n  \\"NextToken\\": \\"1\\",\\n  \\"RequestId\\": \\"CB38DDF9-B1E0-48C1-9966-19C443C2841E\\",\\n  \\"MaxResults\\": 4,\\n  \\"AlarmHistories\\": [\\n    {\\n      \\"QuotaUsage\\": 31,\\n      \\"ThresholdPercent\\": 80,\\n      \\"CreateTime\\": \\"2021-01-24T09:20:09Z\\",\\n      \\"QuotaActionCode\\": \\"q_security-groups\\",\\n      \\"AlarmName\\": \\"安全组总数量上限\\",\\n      \\"NotifyTarget\\": \\"accountContact\\",\\n      \\"NotifyChannels\\": [\\n        \\"[\\\\\\"sms\\\\\\", \\\\\\"email\\\\\\"]\\"\\n      ],\\n      \\"Threshold\\": 29,\\n      \\"ProductCode\\": \\"ecs\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListAlarmHistoriesResponse>\\r\\n\\t<TotalCount>4</TotalCount>\\r\\n\\t<RequestId>CB38DDF9-B1E0-48C1-9966-19C443C2841E</RequestId>\\r\\n\\t<MaxResults>4</MaxResults>\\r\\n\\t<AlarmHistories>\\r\\n\\t\\t<QuotaActionCode>q_security-groups</QuotaActionCode>\\r\\n\\t\\t<NotifyChannels>sms</NotifyChannels>\\r\\n\\t\\t<NotifyChannels>email</NotifyChannels>\\r\\n\\t\\t<AlarmName>安全组总数量上限</AlarmName>\\r\\n\\t\\t<ProductCode>ecs</ProductCode>\\r\\n\\t\\t<NotifyTarget>accountContact</NotifyTarget>\\r\\n\\t\\t<CreateTime>2021-01-24T09:20:09Z</CreateTime>\\r\\n\\t\\t<QuotaUsage>31</QuotaUsage>\\r\\n\\t\\t<Threshold>29</Threshold>\\r\\n\\t</AlarmHistories>\\r\\n\\t<AlarmHistories>\\r\\n\\t\\t<QuotaActionCode>q_security-groups</QuotaActionCode>\\r\\n\\t\\t<NotifyChannels>sms</NotifyChannels>\\r\\n\\t\\t<NotifyChannels>email</NotifyChannels>\\r\\n\\t\\t<AlarmName>安全组总数量上限</AlarmName>\\r\\n\\t\\t<ProductCode>ecs</ProductCode>\\r\\n\\t\\t<NotifyTarget>accountContact</NotifyTarget>\\r\\n\\t\\t<CreateTime>2021-01-23T09:20:07Z</CreateTime>\\r\\n\\t\\t<QuotaUsage>31</QuotaUsage>\\r\\n\\t\\t<Threshold>29</Threshold>\\r\\n\\t</AlarmHistories>\\r\\n\\t<AlarmHistories>\\r\\n\\t\\t<QuotaActionCode>q_security-groups</QuotaActionCode>\\r\\n\\t\\t<NotifyChannels>sms</NotifyChannels>\\r\\n\\t\\t<NotifyChannels>email</NotifyChannels>\\r\\n\\t\\t<AlarmName>安全组总数量上限</AlarmName>\\r\\n\\t\\t<ProductCode>ecs</ProductCode>\\r\\n\\t\\t<NotifyTarget>accountContact</NotifyTarget>\\r\\n\\t\\t<CreateTime>2021-01-22T09:10:08Z</CreateTime>\\r\\n\\t\\t<QuotaUsage>30</QuotaUsage>\\r\\n\\t\\t<Threshold>29</Threshold>\\r\\n\\t</AlarmHistories>\\r\\n\\t<AlarmHistories>\\r\\n\\t\\t<QuotaActionCode>q_security-groups</QuotaActionCode>\\r\\n\\t\\t<NotifyChannels>sms</NotifyChannels>\\r\\n\\t\\t<NotifyChannels>email</NotifyChannels>\\r\\n\\t\\t<AlarmName>安全组总数量上限</AlarmName>\\r\\n\\t\\t<ProductCode>ecs</ProductCode>\\r\\n\\t\\t<NotifyTarget>accountContact</NotifyTarget>\\r\\n\\t\\t<CreateTime>2021-01-21T09:10:08Z</CreateTime>\\r\\n\\t\\t<QuotaUsage>29</QuotaUsage>\\r\\n\\t\\t<Threshold>29</Threshold>\\r\\n\\t</AlarmHistories>\\r\\n</ListAlarmHistoriesResponse>\\t","errorExample":""}]',
            'title' => '查询配额用量告警历史记录',
            'summary' => '查询配额告警历史记录。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~171299~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateQuotaApplication' => [
            'summary' => '创建配额提升申请。',
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ProductCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '云产品的缩写名称。'."\n"
                            ."\n"
                            .'> 关于如何获取云产品的缩写名称，请参见[ListProductQuotas](~~440554~~)中的`ProductCode`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'QuotaActionCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额ID。'."\n"
                            ."\n"
                            .'> 关于如何获取云产品的配额ID，请参见[ListProductQuotas](~~440554~~)中的`QuotaActionCode`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'q_security-groups',
                    ],
                ],
                [
                    'name' => 'DesireValue',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额申请的值。'."\n"
                            ."\n"
                            .'> - 根据[ListProductQuotas](~~440554~~)中目标配额的`TotalUsage`（配额用量）和`ApplicableRange`（配额项可申请范围）来设置配额申请值。'."\n"
                            .'> - 配额申请由各云产品的技术支持进行审批。如果您想增加通过几率，请在配额申请时填写合理的申请数值和详尽的申请理由。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                        'example' => '804',
                    ],
                ],
                [
                    'name' => 'Reason',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额申请的原因。'."\n"
                            ."\n"
                            .'> 配额申请由各云产品的技术支持进行审批。如果您想增加通过几率，请在配额申请时填写合理的申请数值和详尽的申请理由。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '扩容',
                    ],
                ],
                [
                    'name' => 'NoticeType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额申请结果是否发送通知。取值：'."\n"
                            ."\n"
                            .'- 0（默认值）：否。'."\n"
                            .'- 3：是。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                        'default' => '0',
                        'enum' => [
                            '0',
                            '1',
                            '2',
                            '3',
                        ],
                    ],
                ],
                [
                    'name' => 'Dimensions',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '配额维度。',
                        'type' => 'array',
                        'items' => [
                            'description' => '配额维度。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '配额维度的Key。'."\n"
                                        ."\n"
                                        .'> - N的取值范围取决于云产品支持的维度个数。'."\n"
                                        .'> - 当`ProductCode`为`ecs`、`ecs-spec`、`actiontrail`、`ess`等时，配额维度的Key和Value必须设置，且需要同时设置。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'regionId',
                                ],
                                'Value' => [
                                    'description' => '配额维度的Value。'."\n"
                                        ."\n"
                                        .'> - N的取值范围取决于云产品支持的维度个数。'."\n"
                                        .'> - 当`ProductCode`为`ecs`、`ecs-spec`、`actiontrail`、`ess`等时，配额维度的Key和Value必须设置，且需要同时设置。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-hangzhou',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
                [
                    'name' => 'QuotaCategory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额类型。'."\n"
                            .'- CommonQuota（默认值）：通用配额。'."\n"
                            .'- FlowControl：API速率配额。'."\n"
                            .'- WhiteListLabel：权益配额。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CommonQuota',
                        'enum' => [
                            'CommonQuota',
                            'FlowControl',
                            'WhiteListLabel',
                        ],
                    ],
                ],
                [
                    'name' => 'AuditMode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '><notice>该参数废弃，不建议使用。></notice>'."\n"
                            ."\n"
                            .'配额审核模式。取值： '."\n"
                            ."\n\n"
                            .'- Sync：同步审核。配额中心自动审核，审核结果立即返回，但是申请通过的概率比异步审核小，提升额度的有效期为1小时。'."\n"
                            .' '."\n"
                            .'- Async：异步审核。人工审核，申请通过的概率比较大，提升额度的有效期为1个月。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Sync',
                        'default' => 'Async',
                        'enum' => [
                            'Async',
                            'Sync',
                        ],
                    ],
                ],
                [
                    'name' => 'EnvLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额告警通知的语言。取值：'."\n"
                            ."\n"
                            .'- zh（默认值）：中文。'."\n"
                            .'- en：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'ExpireTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额生效的UTC时间。'."\n"
                            .'该参数仅适用于权益配额（WhiteListLabel）。 '."\n"
                            ."\n"
                            .'> 当您未选择生效时间时，默认为提交时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-01-20T09:25:56Z',
                    ],
                ],
                [
                    'name' => 'EffectiveTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额失效的UTC时间。'."\n"
                            .'该参数仅适用于权益配额（WhiteListLabel）。 '."\n"
                            ."\n"
                            .'> 当您未选择失效时间时，默认为当前配额开始时间起99年。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-01-19T09:25:56Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053',
                            ],
                            'Status' => [
                                'description' => '配额提升申请的审批状态。取值：'."\n"
                                    ."\n"
                                    .'- Disagree：拒绝。'."\n"
                                    ."\n"
                                    .'- Agree：审核通过。'."\n"
                                    ."\n"
                                    .'- Process：审核中。'."\n"
                                    ."\n"
                                    .'- Cancel：已关闭。',
                                'type' => 'string',
                                'example' => 'Process',
                            ],
                            'DesireValue' => [
                                'description' => '配额提升申请值。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '804',
                            ],
                            'QuotaActionCode' => [
                                'description' => '配额ID。',
                                'type' => 'string',
                                'example' => 'q_security-groups',
                            ],
                            'QuotaName' => [
                                'description' => '配额名称。',
                                'type' => 'string',
                                'example' => '安全组总数量上限',
                            ],
                            'ApplicationId' => [
                                'description' => '配额申请ID。',
                                'type' => 'string',
                                'example' => 'd314d6ae-867d-484c-9009-3d421a80****',
                            ],
                            'Reason' => [
                                'description' => '配额提升申请原因。',
                                'type' => 'string',
                                'example' => '扩容',
                            ],
                            'AuditReason' => [
                                'description' => '配额提升申请审批意见。',
                                'type' => 'string',
                                'example' => '同意',
                            ],
                            'QuotaDescription' => [
                                'description' => '配额描述。',
                                'type' => 'string',
                                'example' => '当前账户可拥有的安全组的最大数量',
                            ],
                            'ProductCode' => [
                                'description' => '云产品名称缩写。',
                                'type' => 'string',
                                'example' => 'ecs',
                            ],
                            'QuotaArn' => [
                                'description' => '配额ARN。',
                                'type' => 'string',
                                'example' => 'acs:quotas::141339776561****:quota/ecs/q_security-groups',
                            ],
                            'ApplyTime' => [
                                'description' => '配额提升申请时间。',
                                'type' => 'string',
                                'example' => '2021-01-19T09:25:56Z',
                            ],
                            'ApproveValue' => [
                                'description' => '配额提升申请审批通过的配额值。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '804',
                            ],
                            'Dimension' => [
                                'description' => '配额维度。',
                                'type' => 'object',
                                'example' => '{"regionId":"cn-hangzhou"}',
                            ],
                            'NoticeType' => [
                                'description' => '配额提升申请结果是否通知。取值：'."\n"
                                    ."\n"
                                    .'- 0：不通知。'."\n"
                                    ."\n"
                                    .'- 3：通知。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '3',
                            ],
                            'EffectiveTime' => [
                                'description' => '配额生效时间。',
                                'type' => 'string',
                                'example' => '2021-01-19T09:25:56Z',
                            ],
                            'ExpireTime' => [
                                'description' => '配额失效时间。',
                                'type' => 'string',
                                'example' => '2021-01-20T09:25:56Z',
                            ],
                            'QuotaUnit' => [
                                'description' => '配额单位。',
                                'type' => 'string',
                                'example' => '个',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ACQUIRE.LOCK.FAIL',
                        'errorMessage' => 'The request is too frequent. Please try again later.',
                    ],
                    [
                        'errorCode' => 'InvalidNoticeType',
                        'errorMessage' => 'Invalid NoticeType',
                    ],
                    [
                        'errorCode' => 'InvalidDesireValue',
                        'errorMessage' => 'Invalid DesireValue',
                    ],
                    [
                        'errorCode' => 'QUOTA.NOT.ADJUSTABLE',
                        'errorMessage' => 'Quota is not adjustable',
                    ],
                    [
                        'errorCode' => 'QUOTA.NOT.FOUND',
                        'errorMessage' => 'The quota does not exist.',
                    ],
                    [
                        'errorCode' => 'QUOTA.APPLICATION.PROCESS',
                        'errorMessage' => 'The quota adjustment application is being processed. Please try again later.',
                    ],
                    [
                        'errorCode' => 'QUOTA.DESIREVALUE.ILLEGAL',
                        'errorMessage' => 'The applied quota value is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053\\",\\n  \\"Status\\": \\"Process\\",\\n  \\"DesireValue\\": 804,\\n  \\"QuotaActionCode\\": \\"q_security-groups\\",\\n  \\"QuotaName\\": \\"安全组总数量上限\\",\\n  \\"ApplicationId\\": \\"d314d6ae-867d-484c-9009-3d421a80****\\",\\n  \\"Reason\\": \\"扩容\\",\\n  \\"AuditReason\\": \\"同意\\",\\n  \\"QuotaDescription\\": \\"当前账户可拥有的安全组的最大数量\\",\\n  \\"ProductCode\\": \\"ecs\\",\\n  \\"QuotaArn\\": \\"acs:quotas::141339776561****:quota/ecs/q_security-groups\\",\\n  \\"ApplyTime\\": \\"2021-01-19T09:25:56Z\\",\\n  \\"ApproveValue\\": 804,\\n  \\"Dimension\\": {\\n    \\"regionId\\": \\"cn-hangzhou\\"\\n  },\\n  \\"NoticeType\\": 3,\\n  \\"EffectiveTime\\": \\"2021-01-19T09:25:56Z\\",\\n  \\"ExpireTime\\": \\"2021-01-20T09:25:56Z\\",\\n  \\"QuotaUnit\\": \\"个\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateQuotaApplicationResponse>\\n\\t<Status>Process</Status>\\n\\t<ApplyTime>2021-11-11T03:24:39Z</ApplyTime>\\n\\t<QuotaDescription>当前账户可拥有的安全组的最大数量</QuotaDescription>\\n\\t<RequestId>D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053</RequestId>\\n\\t<ProductCode>ecs</ProductCode>\\n\\t<Dimension>\\n\\t\\t<regionId>cn-hangzhou</regionId>\\n\\t</Dimension>\\n\\t<ApproveValue>1007</ApproveValue>\\n\\t<Reason>扩容</Reason>\\n\\t<QuotaActionCode>q_security-groups</QuotaActionCode>\\n\\t<QuotaName>安全组总数量上限</QuotaName>\\n\\t<QuotaArn>acs:quotas:cn-hangzhou:120886317861****:quota/ecs/q_security-groups/</QuotaArn>\\n\\t<NoticeType>0</NoticeType>\\n\\t<ApplicationId>d314d6ae-867d-484c-9009-3d421a80****</ApplicationId>\\n\\t<DesireValue>804</DesireValue>\\n</CreateQuotaApplicationResponse>\\t","errorExample":""}]',
            'title' => '创建配额提升申请',
            'description' => '> 创建配额提升申请后，您可以调用[ListQuotaApplications](~~440568~~)接口查看审批结果，当`Status`显示为`Agree`时，表示审批通过。'."\n"
                ."\n"
                .'本文将提供一个示例，为云服务器ECS的配额`q_security-groups`（安全组总数量上限）申请提升配额，配额值为`804`，配额申请原因为`扩容`，配额所属地域为`cn-hangzhou`。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~171299~~)。  ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetQuotaApplication' => [
            'summary' => '查询配额提升申请详情。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ApplicationId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额提升申请ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd314d6ae-867d-484c-9009-3d421a80****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7BBD1D37-094C-4485-8B7D-64682F82BC18',
                            ],
                            'QuotaApplication' => [
                                'description' => '配额提升申请详情。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '配额提升申请的审批状态。取值：'."\n"
                                            ."\n"
                                            .'- Disagree：拒绝。'."\n"
                                            ."\n"
                                            .'- Agree：审核通过。'."\n"
                                            ."\n"
                                            .'- Process：审核中。'."\n"
                                            ."\n"
                                            .'- Cancel：已关闭。',
                                        'type' => 'string',
                                        'example' => 'Agree',
                                    ],
                                    'DesireValue' => [
                                        'description' => '配额提升申请值。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '804',
                                    ],
                                    'QuotaActionCode' => [
                                        'description' => '配额ID。',
                                        'type' => 'string',
                                        'example' => 'q_security-groups',
                                    ],
                                    'QuotaName' => [
                                        'description' => '配额名称。',
                                        'type' => 'string',
                                        'example' => '安全组总数量上限',
                                    ],
                                    'ApplicationId' => [
                                        'description' => '配额提升申请ID。',
                                        'type' => 'string',
                                        'example' => 'd314d6ae-867d-484c-9009-3d421a80****',
                                    ],
                                    'Reason' => [
                                        'description' => '配额提升申请原因。',
                                        'type' => 'string',
                                        'example' => '扩容',
                                    ],
                                    'AuditReason' => [
                                        'description' => '配额提升申请审批意见。',
                                        'type' => 'string',
                                        'example' => '同意',
                                    ],
                                    'QuotaDescription' => [
                                        'description' => '配额描述。',
                                        'type' => 'string',
                                        'example' => '当前账户可拥有的安全组的最大数量',
                                    ],
                                    'ProductCode' => [
                                        'description' => '云服务名称缩写。',
                                        'type' => 'string',
                                        'example' => 'ecs',
                                    ],
                                    'QuotaArn' => [
                                        'description' => '配额ARN。',
                                        'type' => 'string',
                                        'example' => 'acs:quotas:cn-hangzhou:120886317861****:quota/ecs/q_security-groups/',
                                    ],
                                    'ApplyTime' => [
                                        'description' => '配额提升申请时间。',
                                        'type' => 'string',
                                        'example' => '2021-01-19T09:25:56Z',
                                    ],
                                    'ApproveValue' => [
                                        'description' => '配额审批额度。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '10',
                                    ],
                                    'Dimension' => [
                                        'description' => '配额维度。'."\n"
                                            ."\n"
                                            .'格式：`{"regionId":"地域"}`。',
                                        'type' => 'object',
                                        'example' => '["cn-shanghai","cn-hangzhou"]',
                                    ],
                                    'NoticeType' => [
                                        'description' => '通知类型。取值：'."\n"
                                            ."\n"
                                            .'- 0：无需通知。'."\n"
                                            .'- 1：邮件通知。'."\n"
                                            .'- 2：短信通知。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'EffectiveTime' => [
                                        'description' => '配额生效时间。',
                                        'type' => 'string',
                                        'example' => '2021-01-19 15:30:00',
                                    ],
                                    'ExpireTime' => [
                                        'description' => '配额过期时间。',
                                        'type' => 'string',
                                        'example' => '2023-06-29 15:30:00',
                                    ],
                                    'QuotaUnit' => [
                                        'description' => '配额单位。',
                                        'type' => 'string',
                                        'example' => '个',
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
                        'errorCode' => 'QUOTA.APPLICATION.NOT.FOUND',
                        'errorMessage' => 'Quota application does not exist',
                    ],
                    [
                        'errorCode' => 'RAM.PERMISSION.DENIED',
                        'errorMessage' => 'You are not authorized to do this action or the API input parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7BBD1D37-094C-4485-8B7D-64682F82BC18\\",\\n  \\"QuotaApplication\\": {\\n    \\"Status\\": \\"Agree\\",\\n    \\"DesireValue\\": 804,\\n    \\"QuotaActionCode\\": \\"q_security-groups\\",\\n    \\"QuotaName\\": \\"安全组总数量上限\\",\\n    \\"ApplicationId\\": \\"d314d6ae-867d-484c-9009-3d421a80****\\",\\n    \\"Reason\\": \\"扩容\\",\\n    \\"AuditReason\\": \\"同意\\",\\n    \\"QuotaDescription\\": \\"当前账户可拥有的安全组的最大数量\\",\\n    \\"ProductCode\\": \\"ecs\\",\\n    \\"QuotaArn\\": \\"acs:quotas:cn-hangzhou:120886317861****:quota/ecs/q_security-groups/\\",\\n    \\"ApplyTime\\": \\"2021-01-19T09:25:56Z\\",\\n    \\"ApproveValue\\": 10,\\n    \\"Dimension\\": [\\n      \\"cn-shanghai\\",\\n      \\"cn-hangzhou\\"\\n    ],\\n    \\"NoticeType\\": 0,\\n    \\"EffectiveTime\\": \\"2021-01-19 15:30:00\\",\\n    \\"ExpireTime\\": \\"2023-06-29 15:30:00\\",\\n    \\"QuotaUnit\\": \\"个\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateQuotaApplicationResponse>\\r\\n\\t<Status>Process</Status>\\r\\n\\t<ApplyTime>2021-11-11T03:24:39Z</ApplyTime>\\r\\n\\t<QuotaDescription>当前账户可拥有的安全组的最大数量</QuotaDescription>\\r\\n\\t<RequestId>D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053</RequestId>\\r\\n\\t<ProductCode>ecs</ProductCode>\\r\\n\\t<Dimension>\\r\\n\\t\\t<regionId>cn-hangzhou</regionId>\\r\\n\\t</Dimension>\\r\\n\\t<ApproveValue>1007</ApproveValue>\\r\\n\\t<Reason>扩容</Reason>\\r\\n\\t<QuotaActionCode>q_security-groups</QuotaActionCode>\\r\\n\\t<QuotaName>安全组总数量上限</QuotaName>\\r\\n\\t<QuotaArn>acs:quotas:cn-hangzhou:120886317861****:quota/ecs/q_security-groups/</QuotaArn>\\r\\n\\t<NoticeType>0</NoticeType>\\r\\n\\t<ApplicationId>d314d6ae-867d-484c-9009-3d421a80****</ApplicationId>\\r\\n\\t<DesireValue>804</DesireValue>\\r\\n</CreateQuotaApplicationResponse>\\t","errorExample":""}]',
            'title' => '查询配额提升申请详情',
            'description' => '本文将提供一个示例，查询配额提升申请`d314d6ae-867d-484c-9009-3d421a80****`的详情。返回结果显示目标配额提升申请的详情，包括：申请ID、申请时间、申请配额值、审批意见等。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~171299~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListQuotaApplications' => [
            'summary' => '查询配额提升申请列表。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用来标记开始查询数据的位置。置空表示从头开始。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '本次查询的最大记录条数。'."\n"
                            ."\n"
                            .'取值范围：1~200。默认值：30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'example' => '1',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '云产品的缩写名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'csk',
                    ],
                ],
                [
                    'name' => 'QuotaActionCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额ID。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'q_i5uzm3',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额提升申请的审批状态。取值：'."\n"
                            ."\n"
                            .'- Disagree：拒绝。'."\n"
                            ."\n"
                            .'- Agree：审核通过。'."\n"
                            ."\n"
                            .'- Process：审核中。'."\n"
                            ."\n"
                            .'- Cancel：已关闭。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Agree',
                        'enum' => [
                            'Agree',
                            'Disagree',
                            'Process',
                            'Cancel',
                        ],
                    ],
                ],
                [
                    'name' => 'KeyWord',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额提升申请的搜索关键字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '集群',
                    ],
                ],
                [
                    'name' => 'Dimensions',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '配额维度。',
                        'type' => 'array',
                        'items' => [
                            'description' => '配额维度。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '配额维度的Key。'."\n"
                                        ."\n"
                                        .'> N的取值范围取决于云产品支持的维度个数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'regionId',
                                ],
                                'Value' => [
                                    'description' => '配额维度的Value。'."\n"
                                        ."\n"
                                        .'> N的取值范围取决于云产品支持的维度个数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-hangzhou',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
                [
                    'name' => 'QuotaCategory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额种类。取值：'."\n"
                            .'- CommonQuota：通用配额。'."\n"
                            .'- FlowControl：API速率配额。'."\n"
                            .'- WhiteListLabel：权益配额。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CommonQuota',
                        'enum' => [
                            'CommonQuota',
                            'FlowControl',
                            'WhiteListLabel',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '配额提升申请总数。'."\n"
                                    ."\n",
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'QuotaApplications' => [
                                'description' => '配额提升申请的详情。'."\n"
                                    ."\n",
                                'type' => 'array',
                                'items' => [
                                    'description' => '无。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '配额提升申请的审批状态。取值：'."\n"
                                                ."\n"
                                                .'- Disagree：拒绝。'."\n"
                                                ."\n"
                                                .'- Agree：审核通过。'."\n"
                                                ."\n"
                                                .'- Process：审核中。'."\n"
                                                ."\n"
                                                .'- Cancel：已关闭。',
                                            'type' => 'string',
                                            'example' => 'Agree',
                                        ],
                                        'Comment' => [
                                            'description' => '配额提升申请的备注。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'ExpireTime' => [
                                            'description' => '配额提升申请的过期时间。',
                                            'type' => 'string',
                                            'example' => '2021-01-17T11:46:25Z',
                                        ],
                                        'QuotaUnit' => [
                                            'description' => '配额单位。',
                                            'type' => 'string',
                                            'example' => 'Node',
                                        ],
                                        'DesireValue' => [
                                            'description' => '配额提升申请的配额值。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '101',
                                        ],
                                        'NoticeType' => [
                                            'description' => '配额提升申请结果是否通知。取值：'."\n"
                                                ."\n"
                                                .'- 0：否。'."\n"
                                                .'- 3：是。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3',
                                        ],
                                        'QuotaActionCode' => [
                                            'description' => '配额ID。',
                                            'type' => 'string',
                                            'example' => 'q_i5uzm3',
                                        ],
                                        'Dimension' => [
                                            'description' => '配额提升申请的配额维度。',
                                            'type' => 'object',
                                            'example' => '{"regionId":"cn-hangzhou"}',
                                        ],
                                        'QuotaDescription' => [
                                            'description' => '配额描述。',
                                            'type' => 'string',
                                            'example' => '集群最大节点数',
                                        ],
                                        'QuotaArn' => [
                                            'description' => '配额ARN。',
                                            'type' => 'string',
                                            'example' => 'acs:quotas:*:120886317861****:quota/csk/q_i5uzm3',
                                        ],
                                        'EffectiveTime' => [
                                            'description' => '配额提升申请的生效时间。',
                                            'type' => 'string',
                                            'example' => '2021-01-15T11:46:25Z',
                                        ],
                                        'ApproveValue' => [
                                            'description' => '配额提升申请审批通过的配额值。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '101',
                                        ],
                                        'QuotaName' => [
                                            'description' => '配额名称。',
                                            'type' => 'string',
                                            'example' => '集群最大节点数',
                                        ],
                                        'ApplicationId' => [
                                            'description' => '配额提升申请的ID。',
                                            'type' => 'string',
                                            'example' => 'b926571d-cc09-4711-b547-58a615f0****',
                                        ],
                                        'AuditReason' => [
                                            'description' => '配额提升申请的审批意见。',
                                            'type' => 'string',
                                            'example' => '同意',
                                        ],
                                        'Reason' => [
                                            'description' => '配额提升申请的原因。',
                                            'type' => 'string',
                                            'example' => '业务扩张',
                                        ],
                                        'ApplyTime' => [
                                            'description' => '配额提升申请的时间。',
                                            'type' => 'string',
                                            'example' => '2021-01-15T09:13:53Z',
                                        ],
                                        'ProductCode' => [
                                            'description' => '云服务名称缩写。',
                                            'type' => 'string',
                                            'example' => 'csk',
                                        ],
                                        'Period' => [
                                            'description' => '配额计算周期。'."\n",
                                            'type' => 'object',
                                            'properties' => [
                                                'PeriodValue' => [
                                                    'description' => '配额计算周期的取值。'."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'PeriodUnit' => [
                                                    'description' => '配额计算周期的单位。取值：'."\n"
                                                        .'- second：秒。'."\n"
                                                        .'- minute：分钟。'."\n"
                                                        .'- hour：小时。'."\n"
                                                        .'- day：天。'."\n"
                                                        .'- week：周',
                                                    'type' => 'string',
                                                    'example' => 'second',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '用来标记返回查询数据的位置。空表示数据已经查询完毕。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '730925FB-0BD0-40AC-AF3A-A6C6E9716879',
                            ],
                            'MaxResults' => [
                                'description' => '本次查询返回的最大记录条数。'."\n",
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidStatus',
                        'errorMessage' => 'Invalid Status',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"QuotaApplications\\": [\\n    {\\n      \\"Status\\": \\"Agree\\",\\n      \\"Comment\\": \\"test\\",\\n      \\"ExpireTime\\": \\"2021-01-17T11:46:25Z\\",\\n      \\"QuotaUnit\\": \\"Node\\",\\n      \\"DesireValue\\": 101,\\n      \\"NoticeType\\": 3,\\n      \\"QuotaActionCode\\": \\"q_i5uzm3\\",\\n      \\"Dimension\\": {\\n        \\"regionId\\": \\"cn-hangzhou\\"\\n      },\\n      \\"QuotaDescription\\": \\"集群最大节点数\\",\\n      \\"QuotaArn\\": \\"acs:quotas:*:120886317861****:quota/csk/q_i5uzm3\\",\\n      \\"EffectiveTime\\": \\"2021-01-15T11:46:25Z\\",\\n      \\"ApproveValue\\": 101,\\n      \\"QuotaName\\": \\"集群最大节点数\\",\\n      \\"ApplicationId\\": \\"b926571d-cc09-4711-b547-58a615f0****\\",\\n      \\"AuditReason\\": \\"同意\\",\\n      \\"Reason\\": \\"业务扩张\\",\\n      \\"ApplyTime\\": \\"2021-01-15T09:13:53Z\\",\\n      \\"ProductCode\\": \\"csk\\",\\n      \\"Period\\": {\\n        \\"PeriodValue\\": 1,\\n        \\"PeriodUnit\\": \\"second\\"\\n      }\\n    }\\n  ],\\n  \\"NextToken\\": \\"1\\",\\n  \\"RequestId\\": \\"730925FB-0BD0-40AC-AF3A-A6C6E9716879\\",\\n  \\"MaxResults\\": 1\\n}","errorExample":""},{"type":"xml","example":"<ListQuotaApplicationsResponse>\\r\\n\\t<TotalCount>1</TotalCount>\\r\\n\\t<QuotaApplications>\\r\\n\\t\\t<Status>Agree</Status>\\r\\n\\t\\t<ApplyTime>2021-01-15T09:13:53Z</ApplyTime>\\r\\n\\t\\t<QuotaDescription>集群最大节点数</QuotaDescription>\\r\\n\\t\\t<ProductCode>csk</ProductCode>\\r\\n\\t\\t<AuditReason>同意</AuditReason>\\r\\n\\t\\t<QuotaUnit>Node</QuotaUnit>\\r\\n\\t\\t<Period />\\r\\n\\t\\t<Dimension>{\\\\\\"regionId\\\\\\":\\\\\\"cn-hangzhou\\\\\\"}</Dimension>\\r\\n\\t\\t<ApproveValue>101</ApproveValue>\\r\\n\\t\\t<Reason>业务扩张</Reason>\\r\\n\\t\\t<QuotaActionCode>q_i5uzm3</QuotaActionCode>\\r\\n\\t\\t<QuotaName>集群最大节点数</QuotaName>\\r\\n\\t\\t<QuotaArn>acs:quotas:*:120886317861****:quota/csk/q_i5uzm3</QuotaArn>\\r\\n\\t\\t<NoticeType>3</NoticeType>\\r\\n\\t\\t<ApplicationId>b926571d-cc09-4711-b547-58a615f0****</ApplicationId>\\r\\n\\t\\t<DesireValue>101</DesireValue>\\r\\n\\t</QuotaApplications>\\r\\n\\t<RequestId>730925FB-0BD0-40AC-AF3A-A6C6E9716879</RequestId>\\r\\n\\t<MaxResults>1</MaxResults>\\r\\n</ListQuotaApplicationsResponse>\\t","errorExample":""}]',
            'title' => '查询配额提升申请列表',
            'description' => '本文将提供一个示例，查询容器服务Kubernetes版配额`q_i5uzm3`（集群最大节点数）的提升申请。返回结果显示目标配额提升申请的详情，其中申请ID为`b926571d-cc09-4711-b547-58a615f0****`、申请时间为`2021-01-15T09:13:53Z`、申请配额值为`101`、审批意见为`同意`等。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~171299~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetQuotaTemplateServiceStatus' => [
            'summary' => '查询配额模板的状态。',
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceDirectoryId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源目录ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rd-pG****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '无。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053',
                            ],
                            'TemplateServiceStatus' => [
                                'description' => '配额模板的状态。',
                                'type' => 'object',
                                'properties' => [
                                    'ServiceStatus' => [
                                        'description' => '配额模板的状态。取值：'."\n"
                                            ."\n"
                                            .'- -1：禁用。'."\n"
                                            ."\n"
                                            .'- 1：开启。'."\n"
                                            ."\n"
                                            .'- 0：未设置。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'ResourceDirectoryId' => [
                                        'description' => '资源目录ID。',
                                        'type' => 'string',
                                        'example' => 'rd-pG****',
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
                        'errorCode' => 'TEMPLATE.RDID.INVALID',
                        'errorMessage' => 'RdId invalid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053\\",\\n  \\"TemplateServiceStatus\\": {\\n    \\"ServiceStatus\\": 1,\\n    \\"ResourceDirectoryId\\": \\"rd-pG****\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询配额模板状态',
            'description' => '配额模板的默认状态为未设置（即`ServiceStatus`为`0`）。仅当配额模板的状态为开启（即`ServiceStatus`为`1`）时，您才可以正常使用配额模板的功能。',
        ],
        'ModifyQuotaTemplateServiceStatus' => [
            'summary' => '配额模板的默认状态为未设置。当资源目录的管理账号初次使用配额模板时，需要开启配额模板。',
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceStatus',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额模板的状态。取值：'."\n"
                            ."\n"
                            .'- -1：禁用。'."\n"
                            .'- 1：开启。',
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
                        'title' => 'Schema of Response',
                        'description' => '无。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053',
                            ],
                            'TemplateServiceStatus' => [
                                'description' => '配额模板的状态。',
                                'type' => 'object',
                                'properties' => [
                                    'ServiceStatus' => [
                                        'description' => '配额模板的状态。取值：'."\n"
                                            ."\n"
                                            .'- -1：禁用。'."\n"
                                            .'- 1：开启。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'ResourceDirectoryId' => [
                                        'description' => '资源目录ID。',
                                        'type' => 'string',
                                        'example' => 'rd-pG****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053\\",\\n  \\"TemplateServiceStatus\\": {\\n    \\"ServiceStatus\\": 1,\\n    \\"ResourceDirectoryId\\": \\"rd-pG****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ModifyQuotaTemplateServiceStatusResponse>\\n    <RequestId>D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053</RequestId>\\n    <TemplateServiceStatus>\\n        <ServiceStatus>1</ServiceStatus>\\n        <ResourceDirectoryId>rd-pG****</ResourceDirectoryId>\\n    </TemplateServiceStatus>\\n</ModifyQuotaTemplateServiceStatusResponse>","errorExample":""}]',
            'title' => '修改配额模板状态',
            'description' => '### 前提条件'."\n"
                ."\n"
                .'请确保您已开通资源目录。具体操作，请参见[EnableResourceDirectory](~~604185~~)。'."\n"
                ."\n"
                .'### 使用说明'."\n"
                .'当配额模板的状态`ServiceStatus`为`0`（未设置）或`-1`（禁用）时，您可以先将其修改为`1`（开启），再调用[CreateTemplateQuotaItem](~~450615~~)接口创建配额模板。',
        ],
        'CreateTemplateQuotaItem' => [
            'summary' => '管理账号创建配额模板后，如果资源目录新增成员，则配额模板自动为新增的成员提交配额提升申请，已有成员无变化。通过配额模板，您一次可以申请提升多个配额项，提升整个组织的配额管理效率和自动化水平。',
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
                    'name' => 'ProductCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '云服务名称缩写。',
                        'description' => '云产品的缩写名称。'."\n"
                            ."\n"
                            .'> 关于如何获取云产品的缩写名称，请参见[ListProducts](~~440555~~)中的`ProductCode`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'QuotaActionCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '配额ID。',
                        'description' => '配额ID。'."\n"
                            ."\n"
                            .'> 关于如何获取云产品的配额ID，请参见[ListProductQuotas](~~440554~~)中的`QuotaActionCode`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'q_security-groups',
                    ],
                ],
                [
                    'name' => 'DesireValue',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '配额申请的值。',
                        'description' => '配额申请的值。'."\n"
                            ."\n"
                            .'> - 根据[ListProductQuotas](~~440554~~)中目标配额的`TotalUsage`（配额用量）和`ApplicableRange`（配额项可申请范围）来设置配额申请值。'."\n"
                            .'> - 配额申请由各云产品的技术支持进行审批。如果您想增加通过几率，请在配额申请时填写合理的申请数值和详尽的申请理由。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                        'example' => '804',
                    ],
                ],
                [
                    'name' => 'NoticeType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '配额申请结果是否发送通知',
                        'description' => '配额申请结果是否发送通知。取值：'."\n"
                            .'- 0（默认值）：否。'."\n"
                            .'- 3：是。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Dimensions',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '配额维度。',
                        'description' => '配额维度。',
                        'type' => 'array',
                        'items' => [
                            'description' => '配额维度。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '配额维度的Key。'."\n"
                                        ."\n"
                                        .'> - N的取值范围取决于云产品支持的维度个数。'."\n"
                                        .'> - 当`ProductCode`为`ecs`、`ecs-spec`、`actiontrail`、`ess`等时，配额维度的Key和Value必须同时设置。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'regionId',
                                ],
                                'Value' => [
                                    'description' => '配额维度的Value。'."\n"
                                        ."\n"
                                        .'> - N的取值范围取决于云产品支持的维度个数。'."\n"
                                        .'> - 当`ProductCode`为`ecs`、`ecs-spec`、`actiontrail`、`ess`等时，配额维度的Key和Value必须同时设置。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-hangzhou',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
                [
                    'name' => 'EnvLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额告警通知的语言。取值：'."\n"
                            ."\n"
                            .'- zh（默认值）：中文。'."\n"
                            .'- en：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'EffectiveTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额生效的UTC时间。'."\n"
                            .'该参数仅适用于权益配额（WhiteListLabel）。 '."\n"
                            ."\n"
                            .'> 数据为空表示立即生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-01-19T09:25:56Z',
                    ],
                ],
                [
                    'name' => 'ExpireTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额失效的UTC时间。'."\n"
                            .'该参数仅适用于权益配额（WhiteListLabel）。 '."\n"
                            ."\n"
                            .'> 数据为空表示未设定UTC失效时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-01-20T09:25:56Z',
                    ],
                ],
                [
                    'name' => 'QuotaCategory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额种类。取值：'."\n"
                            .'- CommonQuota：通用配额。'."\n"
                            .'- WhiteListLabel：权益配额。'."\n"
                            .'- FlowControl：API速率配额。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CommonQuota',
                        'enum' => [
                            'CommonQuota',
                            'WhiteListLabel',
                            'FlowControl',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '无。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053',
                            ],
                            'Id' => [
                                'description' => '配额模板ID。',
                                'type' => 'string',
                                'example' => '1****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053\\",\\n  \\"Id\\": \\"1****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateTemplateQuotaItemResponse>\\n    <RequestId>D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053</RequestId>\\n    <Id>1****</Id>\\n</CreateTemplateQuotaItemResponse>","errorExample":""}]',
            'title' => '创建配额模板',
            'description' => '### 前提条件'."\n"
                .'请确保配额模板的状态为已开启（即`ServiceStatus`为`1`）。'."\n"
                ."\n"
                .'调用[GetQuotaTemplateServiceStatus](~~450407~~)接口查询配额模板的状态，当配额模板的状态`ServiceStatus`为`0`（未设置）或`-1`（禁用）时，需要调用[ModifyQuotaTemplateServiceStatus](~~450406~~)接口将配额模板的状态修改为`1`（开启）。'."\n"
                ."\n"
                .'### 使用说明'."\n"
                .'创建配额模板后，您可以调用[ListQuotaApplicationsForTemplate](~~2584864~~)接口查看审批结果，当`Status`显示为`Agree`时，表示审批通过。',
        ],
        'ModifyTemplateQuotaItem' => [
            'summary' => '管理账号修改配额模板后，修改结果仅对资源目录中管理账号新增的成员生效，已有成员无变化。',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额模板ID。'."\n"
                            .'关于如何获取配额模板ID，请参见[ListQuotaApplicationTemplates](~~450403~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1****',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '云产品的缩写名称。'."\n"
                            ."\n"
                            .'> 关于如何获取云产品的缩写名称，请参见[ListProducts](~~440555~~)中的`ProductCode`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'QuotaActionCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额ID。'."\n"
                            ."\n"
                            .'> 关于如何获取云产品的配额ID，请参见[ListProductQuotas](~~440554~~)中的`QuotaActionCode`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'q_security-groups',
                    ],
                ],
                [
                    'name' => 'Dimensions',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '配额维度。',
                        'type' => 'array',
                        'items' => [
                            'description' => '配额维度。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '配额维度的Key。'."\n"
                                        ."\n"
                                        .'> - N的取值范围取决于云产品支持的维度个数。'."\n"
                                        .'> - 当`ProductCode`为`ecs`、`ecs-spec`、`actiontrail`、`ess`等时，配额维度的Key和Value必须同时设置。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'regionId',
                                ],
                                'Value' => [
                                    'description' => '配额维度的Value。'."\n"
                                        ."\n"
                                        .'> - N的取值范围取决于云产品支持的维度个数。'."\n"
                                        .'> - 当`ProductCode`为`ecs`、`ecs-spec`、`actiontrail`、`ess`等时，配额维度的Key和Value必须同时设置。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-hangzhou',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
                [
                    'name' => 'DesireValue',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额申请的值。'."\n"
                            ."\n"
                            .'> - 根据[ListProductQuotas](~~440554~~)中目标配额的`TotalUsage`（配额用量）和`ApplicableRange`（配额项可申请范围）来设置配额申请值。'."\n"
                            .'> - 配额申请由各云产品的技术支持进行审批。如果您想增加通过几率，请在配额申请时填写合理的申请数值和详尽的申请理由。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '804',
                    ],
                ],
                [
                    'name' => 'NoticeType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额申请结果是否发送通知。取值：'."\n"
                            ."\n"
                            .'- 0（默认值）：否。'."\n"
                            .'- 3：是。'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'EnvLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额告警通知的语言。取值：'."\n"
                            ."\n"
                            .'- zh（默认值）：中文。'."\n"
                            .'- en：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'EffectiveTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额生效的UTC时间。'."\n"
                            .'该参数仅适用于权益配额（WhiteListLabel）。 '."\n"
                            ."\n"
                            .'> 数据为空表示立即生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-01-19T09:25:56Z',
                    ],
                ],
                [
                    'name' => 'ExpireTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额失效的UTC时间。'."\n"
                            .'该参数仅适用于权益配额（WhiteListLabel）。 '."\n"
                            ."\n"
                            .'> 数据为空表示未设定UTC失效时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-01-20T09:25:56Z',
                    ],
                ],
                [
                    'name' => 'QuotaCategory',
                    'in' => 'query',
                    'schema' => [
                        'description' => '配额种类。取值：'."\n"
                            .'- CommonQuota（默认值）：通用配额。'."\n"
                            .'- WhiteListLabel：权益配额。'."\n"
                            .'- FlowControl：API速率配额。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CommonQuota',
                        'enum' => [
                            'WhiteListLabel',
                            'CommonQuota',
                            'FlowControl',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '无。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053',
                            ],
                            'Id' => [
                                'description' => '配额模板ID。',
                                'type' => 'string',
                                'example' => '1****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'TEMPLATE.NOT.FOUND',
                        'errorMessage' => 'Quota template does not exist.',
                    ],
                    [
                        'errorCode' => 'UNSUPPORT.UPDATE.PRODUCTCODE.QUOTACODE',
                        'errorMessage' => 'Modification of product name, quota code and dimension data is not supported',
                    ],
                    [
                        'errorCode' => 'RAM.PERMISSION.DENIED',
                        'errorMessage' => 'You are not authorized to do this action or the API input parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053\\",\\n  \\"Id\\": \\"1****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyTemplateQuotaItemResponse>\\n    <RequestId>D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053</RequestId>\\n    <Id>1****</Id>\\n</ModifyTemplateQuotaItemResponse>","errorExample":""}]',
            'title' => '修改配额模板',
        ],
        'ListQuotaApplicationTemplates' => [
            'summary' => '管理账号查询配额模板列表。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'ProductCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品名称',
                        'description' => '云产品的缩写名称。'."\n"
                            ."\n"
                            .'> 关于如何获取云产品的缩写名称，请参见[ListProducts](~~440555~~)中的`ProductCode`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'Dimensions',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '配额维度',
                        'description' => '配额维度。',
                        'type' => 'array',
                        'items' => [
                            'description' => '配额维度。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '配额维度的Key。'."\n"
                                        ."\n"
                                        .'> - N的取值范围取决于云产品支持的维度个数。'."\n"
                                        .'> - 配额维度的Key和Value必须同时设置。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'regionId',
                                ],
                                'Value' => [
                                    'description' => '配额维度的Value。'."\n"
                                        ."\n"
                                        .'> - N的取值范围取决于云产品支持的维度个数。'."\n"
                                        .'> - 配额维度的Key和Value必须同时设置。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-hangzhou',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
                [
                    'name' => 'QuotaActionCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '配额操作code',
                        'description' => '配额ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'q_security-groups',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '模版配额项ID',
                        'description' => '模版配额项ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '最大记录条数',
                        'description' => '查询的最大记录条数。'."\n"
                            .'取值范围：1~100。'."\n"
                            .'默认值：30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用来标记开始查询数据的位置。'."\n"
                            ."\n"
                            .'> 不设置该参数，表示从头开始。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'QuotaCategory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额种类。取值：'."\n"
                            .'- CommonQuota：通用配额。'."\n"
                            .'- WhiteListLabel：权益配额。'."\n"
                            .'- FlowControl：API速率配额。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CommonQuota',
                        'enum' => [
                            'CommonQuota',
                            'WhiteListLabel',
                            'FlowControl',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '无。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053',
                            ],
                            'MaxResults' => [
                                'description' => '本次查询的最大记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'NextToken' => [
                                'description' => '用来标记当前调用返回读取到的位置。'."\n"
                                    ."\n"
                                    .'> 该参数返回为空，表示数据已读取完毕。'."\n",
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '本次请求返回的全部记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '40',
                            ],
                            'QuotaApplicationTemplates' => [
                                'description' => '配额模板列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '配额模板列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'description' => '配额模板ID。',
                                            'type' => 'string',
                                            'example' => '1****',
                                        ],
                                        'ProductCode' => [
                                            'description' => '云服务名称缩写。',
                                            'type' => 'string',
                                            'example' => 'ecs',
                                        ],
                                        'Dimensions' => [
                                            'description' => '配额维度。'."\n"
                                                ."\n"
                                                .'格式：{"regionId":"地域"}。'."\n"
                                                ."\n",
                                            'type' => 'object',
                                            'example' => '{"regionId":"cn-hangzhou"}',
                                        ],
                                        'DesireValue' => [
                                            'description' => '配额申请值。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '802',
                                        ],
                                        'NoticeType' => [
                                            'description' => '配额提升申请结果是否通知。取值：'."\n"
                                                ."\n"
                                                .'- 0：否。'."\n"
                                                .'- 3：是。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'QuotaActionCode' => [
                                            'description' => '配额ID。',
                                            'type' => 'string',
                                            'example' => 'q_security-groups',
                                        ],
                                        'ApplicableType' => [
                                            'description' => '配额调整类型。取值：'."\n"
                                                ."\n"
                                                .'- continuous：连续。'."\n"
                                                ."\n"
                                                .'- discontinuous：间断。',
                                            'type' => 'string',
                                            'example' => 'continuous',
                                        ],
                                        'ApplicableRange' => [
                                            'description' => '无',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '配额调整范围。'."\n"
                                                    ."\n"
                                                    .'- 当`ApplicableType`为`continuous`时，如果取值为`[802,1000]`，则表示取值为802~1000中的所有数。'."\n"
                                                    .'- 当`ApplicableType`为`discontinuous`时，如果取值为`[10,20,50,100]`，则表示取值仅为10、20、50和100。'."\n"
                                                    ."\n"
                                                    .'> 本参数已废弃，请查询[GetProductQuota](~~GetProductQuota~~)或[ListProductQuotas](~~ListProductQuotas~~)接口中返回参数`SupportedRange`取值。',
                                                'type' => 'number',
                                                'format' => 'float',
                                                'example' => '[802,1000]',
                                            ],
                                        ],
                                        'EnvLanguage' => [
                                            'description' => '配额告警通知的语言。取值：'."\n"
                                                ."\n"
                                                .'- zh：中文。'."\n"
                                                .'- en：英文。',
                                            'type' => 'string',
                                            'example' => 'zh',
                                        ],
                                        'QuotaName' => [
                                            'description' => '配额名称。',
                                            'type' => 'string',
                                            'example' => '安全组总数量上限',
                                        ],
                                        'QuotaDescription' => [
                                            'description' => '配额描述信息。',
                                            'type' => 'string',
                                            'example' => '当前账号可拥有的安全组的最大数量。',
                                        ],
                                        'EffectiveTime' => [
                                            'description' => '配额生效的UTC时间。',
                                            'type' => 'string',
                                            'example' => '2022-09-28T06:07:00Z',
                                        ],
                                        'ExpireTime' => [
                                            'description' => '配额失效的UTC时间。',
                                            'type' => 'string',
                                            'example' => '2022-09-29T06:07:00Z',
                                        ],
                                        'QuotaCategory' => [
                                            'description' => '配额类型。'."\n"
                                                .'- CommonQuota：通用配额。'."\n"
                                                .'- FlowControl：API速率配额'."\n"
                                                .'- WhiteListLabel：权益配额。',
                                            'type' => 'string',
                                            'example' => 'CommonQuota',
                                        ],
                                        'Period' => [
                                            'description' => '配额计算周期。',
                                            'type' => 'object',
                                            'properties' => [
                                                'PeriodValue' => [
                                                    'description' => '配额计算周期的取值。'."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'PeriodUnit' => [
                                                    'description' => '配额计算周期的单位。取值：'."\n"
                                                        .'- second：秒。'."\n"
                                                        .'- minute：分钟。'."\n"
                                                        .'- hour：小时。'."\n"
                                                        .'- day：天。'."\n"
                                                        .'- week：周',
                                                    'type' => 'string',
                                                    'example' => 'day',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053\\",\\n  \\"MaxResults\\": 30,\\n  \\"NextToken\\": \\"1\\",\\n  \\"TotalCount\\": 40,\\n  \\"QuotaApplicationTemplates\\": [\\n    {\\n      \\"Id\\": \\"1****\\",\\n      \\"ProductCode\\": \\"ecs\\",\\n      \\"Dimensions\\": {\\n        \\"regionId\\": \\"cn-hangzhou\\"\\n      },\\n      \\"DesireValue\\": 802,\\n      \\"NoticeType\\": 0,\\n      \\"QuotaActionCode\\": \\"q_security-groups\\",\\n      \\"ApplicableType\\": \\"continuous\\",\\n      \\"ApplicableRange\\": [\\n        0\\n      ],\\n      \\"EnvLanguage\\": \\"zh\\",\\n      \\"QuotaName\\": \\"安全组总数量上限\\",\\n      \\"QuotaDescription\\": \\"当前账号可拥有的安全组的最大数量。\\",\\n      \\"EffectiveTime\\": \\"2022-09-28T06:07:00Z\\",\\n      \\"ExpireTime\\": \\"2022-09-29T06:07:00Z\\",\\n      \\"QuotaCategory\\": \\"CommonQuota\\",\\n      \\"Period\\": {\\n        \\"PeriodValue\\": 1,\\n        \\"PeriodUnit\\": \\"day\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListQuotaApplicationTemplatesResponse>\\n    <RequestId>D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053</RequestId>\\n    <MaxResults>30</MaxResults>\\n    <NextToken>1</NextToken>\\n    <TotalCount>40</TotalCount>\\n    <QuotaApplicationTemplates>\\n        <Id>1****</Id>\\n        <ProductCode>ecs</ProductCode>\\n        <DesireValue>802</DesireValue>\\n        <NoticeType>0</NoticeType>\\n        <QuotaActionCode>q_security-groups</QuotaActionCode>\\n        <ApplicableType>continuous</ApplicableType>\\n        <EnvLanguage>zh</EnvLanguage>\\n        <QuotaName>安全组总数量上限</QuotaName>\\n        <QuotaDescription>当前账号可拥有的安全组的最大数量。</QuotaDescription>\\n    </QuotaApplicationTemplates>\\n</ListQuotaApplicationTemplatesResponse>","errorExample":""}]',
            'title' => '查询配额模板列表',
        ],
        'DeleteTemplateQuotaItem' => [
            'summary' => '管理账号删除配额模板后，如果资源目录新增成员，则配额模板不再自动为新增的成员提交配额提升申请。',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '配额项ID',
                        'description' => '配额模板ID。'."\n"
                            ."\n"
                            .'关于如何获取配额模板ID，请参见[ListQuotaApplicationTemplates](~~450403~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '无。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053',
                            ],
                            'Id' => [
                                'description' => '配额模板ID。',
                                'type' => 'string',
                                'example' => '1****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'RAM.PERMISSION.DENIED',
                        'errorMessage' => 'You are not authorized to do this action or the API input parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053\\",\\n  \\"Id\\": \\"1****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteTemplateQuotaItemResponse>\\n    <RequestId>D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053</RequestId>\\n    <Id>1****</Id>\\n</DeleteTemplateQuotaItemResponse>","errorExample":""}]',
            'title' => '删除配额模板',
        ],
        'CreateQuotaApplicationsForTemplate' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'QuotaCategory',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'CommonQuota, FlowControl, WhiteListLabel',
                        'description' => '配额类型。取值：'."\n"
                            .'- CommonQuota：通用配额。'."\n"
                            .'- FlowControl：API速率配额。'."\n"
                            .'- WhiteListLabel：权益配额。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'CommonQuota',
                        'enum' => [
                            'CommonQuota',
                            'FlowControl',
                            'WhiteListLabel',
                        ],
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品code',
                        'description' => '云产品的缩写名称。'."\n"
                            ."\n"
                            .'> 关于如何获取云产品的缩写名称，请参见[ListProducts](~~440555~~)中的`ProductCode`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecs-spec',
                    ],
                ],
                [
                    'name' => 'QuotaActionCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'quota的code',
                        'description' => '配额ID。'."\n"
                            ."\n"
                            .'> 关于如何获取云产品的配额ID，请参见[ListProductQuotas](~~440554~~)中的`QuotaActionCode`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecs.g5.2xlarge',
                    ],
                ],
                [
                    'name' => 'Dimensions',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '配额维度',
                        'description' => '配额维度。',
                        'type' => 'array',
                        'items' => [
                            'description' => '配额维度。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '配额维度的Key。'."\n"
                                        ."\n"
                                        .'> - N的取值范围取决于云产品支持的维度个数。'."\n"
                                        .'> - 当`ProductCode`为`ecs`、`ecs-spec`、`actiontrail`、`ess`等时，配额维度的Key和Value必须同时设置。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'regionId',
                                ],
                                'Value' => [
                                    'description' => '配额维度的Value。'."\n"
                                        ."\n"
                                        .'> - N的取值范围取决于云产品支持的维度个数。'."\n"
                                        .'> - 当`ProductCode`为`ecs`、`ecs-spec`、`actiontrail`、`ess`等时，配额维度的Key和Value必须同时设置。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-hangzhou',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'DesireValue',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '申请的配额量',
                        'description' => '配额申请的值。'."\n"
                            ."\n"
                            .'> - 根据[ListProductQuotas](~~440554~~)中目标配额的`TotalUsage`（配额用量）和`ApplicableRange`（配额项可申请范围）来设置配额申请值。'."\n"
                            .'> - 配额申请由各云产品的技术支持进行审批。如果您想增加通过几率，请在配额申请时填写合理的申请数值和详尽的申请理由。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'Reason',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '申请理由',
                        'description' => '配额申请的原因。'."\n"
                            ."\n"
                            .'> 配额申请由各云服务的技术支持进行审批。如果您想增加通过几率，请在配额申请时填写合理的申请数值和详尽的申请理由。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '业务扩容需要',
                    ],
                ],
                [
                    'name' => 'NoticeType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额申请结果是否发送通知。取值：'."\n"
                            ."\n"
                            .'- 0（默认值）：否。'."\n"
                            .'- 3：是。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'EnvLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '环境 语种，如',
                        'description' => '配额申请结果通知的语言。取值：'."\n"
                            ."\n"
                            .'- zh（默认值）：中文。'."\n"
                            .'- en：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'EffectiveTime',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '生效时间',
                        'description' => '配额生效的UTC时间。该参数仅适用于权益配额（WhiteListLabel）。'."\n"
                            .' '."\n"
                            .'>如果当前账号不选择生效时间，则默认为提交时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-01-19T09:25:56Z',
                    ],
                ],
                [
                    'name' => 'ExpireTime',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '过期时间(UTC 格式)',
                        'description' => '配额失效的UTC时间。该参数仅适用于权益配额（WhiteListLabel）。 '."\n"
                            ."\n"
                            .'> 如果当前账号未选择失效时间，则失效时间为当前配额生效时间开始起99年。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-01-20T09:25:56Z',
                    ],
                ],
                [
                    'name' => 'AliyunUids',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '批量调整账号',
                        'description' => '配额申请的资源目录成员的阿里云账号（主账号）列表。'."\n"
                            ."\n"
                            .'> 单次最多只支持为50个成员批量申请提升配额。关于资源目录的成员，请参见[ListAccounts](~~604207~~)。',
                        'type' => 'array',
                        'items' => [
                            'description' => '配额申请的资源目录成员的阿里云账号（主账号）。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '135048337611****'."\n",
                        ],
                        'required' => true,
                        'maxItems' => 100,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResultDTO<String>',
                        'description' => '提交申请返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8FF8CAF0-29D9-4F11-B6A4-FD2CBCA016D3',
                            ],
                            'BatchQuotaApplicationId' => [
                                'description' => '配额申请批次ID。',
                                'type' => 'string',
                                'example' => 'd314d6ae-867d-484c-9009-3d421a80****',
                            ],
                            'AliyunUids' => [
                                'description' => '配额申请的资源目录成员的阿里云账号（主账号）列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '配额申请的资源目录成员的阿里云账号（主账号）。',
                                    'type' => 'string',
                                    'example' => '135048337611****',
                                ],
                            ],
                            'FailResults' => [
                                'description' => '配额申请失败的资源目录成员的阿里云账号（主账号）和失败原因列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '配额申请失败的资源目录成员的阿里云账号（主账号）和失败原因列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AliyunUid' => [
                                            'description' => '配额申请失败的资源目录成员的阿里云账号（主账号）。',
                                            'type' => 'string',
                                            'example' => '135048337611****',
                                        ],
                                        'Reason' => [
                                            'description' => '失败原因。',
                                            'type' => 'string',
                                            'example' => '该配额申请处理中，不能继续申请。',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8FF8CAF0-29D9-4F11-B6A4-FD2CBCA016D3\\",\\n  \\"BatchQuotaApplicationId\\": \\"d314d6ae-867d-484c-9009-3d421a80****\\",\\n  \\"AliyunUids\\": [\\n    \\"135048337611****\\"\\n  ],\\n  \\"FailResults\\": [\\n    {\\n      \\"AliyunUid\\": \\"135048337611****\\",\\n      \\"Reason\\": \\"该配额申请处理中，不能继续申请。\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '通过配额模板批量申请成员配额',
            'summary' => '当您将配额项加入配额模板时，仅资源目录中新增的成员会自动提交配额提升申请，已有成员无变化。如果您需要通过配额模板为已有成员提升配额，则可以批量选择配额模板为资源目录中的多个成员提交配额提升申请。',
            'description' => '### 使用限制'."\n"
                .'单次申请的配额项不超过10个。',
        ],
        'ListQuotaApplicationsDetailForTemplate' => [
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
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AliyunUid',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额提升申请的阿里云账号（主账号）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '135048337611****',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '云产品的缩写名称。'."\n"
                            ."\n"
                            .'> 关于如何获取云产品的缩写名称，请参见[ListProducts](~~440555~~)中的`ProductCode`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'QuotaActionCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额ID。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs.c5.large',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Agree, Disagree, Process, Cancel',
                        'description' => '配额提升申请的审批状态。取值：'."\n"
                            ."\n"
                            .'- Disagree：拒绝。'."\n"
                            ."\n"
                            .'- Agree：审核通过。'."\n"
                            ."\n"
                            .'- Process：审核中。'."\n"
                            ."\n"
                            .'- Cancel：已关闭。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Agree',
                    ],
                ],
                [
                    'name' => 'BatchQuotaApplicationId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额申请批次ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd314d6ae-867d-484c-9009-3d421a80****'."\n",
                    ],
                ],
                [
                    'name' => 'QuotaCategory',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'CommonQuota, FlowControl, WhiteListLabel',
                        'description' => '配额种类。取值：'."\n"
                            .'- CommonQuota：通用配额。'."\n"
                            .'- FlowControl：API速率配额。'."\n"
                            .'- WhiteListLabel：权益配额。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CommonQuota',
                        'enum' => [
                            'CommonQuota',
                            'FlowControl',
                            'WhiteListLabel',
                        ],
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用来标记开始查询数据的位置。'."\n"
                            ."\n"
                            .'> 不设置该参数，表示从头开始。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '本次查询的最大记录条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。默认值：30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ResultList<QuotaBatchApplicationVo>',
                        'description' => '配额申请详情列表。',
                        'type' => 'object',
                        'properties' => [
                            'QuotaApplications' => [
                                'description' => '配额申请详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '配额申请详情列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'BatchQuotaApplicationId' => [
                                            'description' => '配额申请批次ID。',
                                            'type' => 'string',
                                            'example' => 'd314d6ae-867d-484c-9009-3d421a80****',
                                        ],
                                        'ProductCode' => [
                                            'description' => '云服务名称缩写。',
                                            'type' => 'string',
                                            'example' => 'ecs',
                                        ],
                                        'QuotaActionCode' => [
                                            'description' => '配额ID。',
                                            'type' => 'string',
                                            'example' => 'ecs.n1.large',
                                        ],
                                        'QuotaName' => [
                                            'description' => '配额名称。',
                                            'type' => 'string',
                                            'example' => '集群最大节点数',
                                        ],
                                        'QuotaDescription' => [
                                            'description' => '配额描述。',
                                            'type' => 'string',
                                            'example' => '集群最大节点数',
                                        ],
                                        'QuotaUnit' => [
                                            'description' => '配额单位。',
                                            'type' => 'string',
                                            'example' => 'GiB',
                                        ],
                                        'QuotaArn' => [
                                            'description' => '配额ARN。',
                                            'type' => 'string',
                                            'example' => 'acs:quotas:*:120886317861****:quota/csk/q_i5uzm3',
                                        ],
                                        'QuotaDimension' => [
                                            'description' => '配额维度。',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'example' => '{"regionId":"cn-hangzhou"}',
                                                'description' => '配额维度。'."\n"
                                                    ."\n"
                                                    .'格式：`{"regionId":"cn-hangzhou"}`。',
                                            ],
                                        ],
                                        'ApplicationId' => [
                                            'description' => '配额提升申请的ID。',
                                            'type' => 'string',
                                            'example' => 'b926571d-cc09-4711-b547-58a615f0****',
                                        ],
                                        'DesireValue' => [
                                            'description' => '配额提升申请的配额值。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '60',
                                        ],
                                        'Reason' => [
                                            'description' => '配额提升申请的原因。',
                                            'type' => 'string',
                                            'example' => '业务扩张',
                                        ],
                                        'Status' => [
                                            'description' => '配额提升申请的审批状态。取值：'."\n"
                                                ."\n"
                                                .'- Disagree：拒绝。'."\n"
                                                ."\n"
                                                .'- Agree：审核通过。'."\n"
                                                ."\n"
                                                .'- Process：审核中。'."\n"
                                                ."\n"
                                                .'- Cancel：已关闭。',
                                            'type' => 'string',
                                            'example' => 'Agree',
                                        ],
                                        'ApproveValue' => [
                                            'description' => '配额提升申请审批通过的配额值。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '101',
                                        ],
                                        'EffectiveTime' => [
                                            'description' => '配额生效的UTC时间。',
                                            'type' => 'string',
                                            'example' => '2021-01-15T11:46:25Z',
                                        ],
                                        'ExpireTime' => [
                                            'description' => '配额失效的UTC时间。',
                                            'type' => 'string',
                                            'example' => '2021-01-17T11:46:25Z',
                                        ],
                                        'ApplyTime' => [
                                            'description' => '配额提升申请的UTC时间。',
                                            'type' => 'string',
                                            'example' => '2021-01-15T09:13:53Z',
                                        ],
                                        'AuditReason' => [
                                            'description' => '配额提升申请的审批意见。',
                                            'type' => 'string',
                                            'example' => '同意',
                                        ],
                                        'NoticeType' => [
                                            'description' => '配额提升申请结果是否通知。取值：'."\n"
                                                ."\n"
                                                .'- 0：否。'."\n"
                                                .'- 3：是。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3',
                                        ],
                                        'AliyunUid' => [
                                            'description' => '阿里云账号（主账号）。',
                                            'type' => 'string',
                                            'example' => '175376458581****',
                                        ],
                                        'QuotaCategory' => [
                                            'description' => '配额种类。取值：'."\n"
                                                .'- CommonQuota（默认值）：通用配额。'."\n"
                                                .'- WhiteListLabel：权益配额。'."\n"
                                                .'- FlowControl：API速率配额。',
                                            'type' => 'string',
                                            'example' => 'CommonQuota',
                                        ],
                                        'EnvLanguage' => [
                                            'description' => '配额告警通知的语言。取值：'."\n"
                                                ."\n"
                                                .'- zh：中文。'."\n"
                                                .'- en：英文。',
                                            'type' => 'string',
                                            'example' => 'zh',
                                        ],
                                        'Period' => [
                                            'description' => '配额计算周期。'."\n",
                                            'type' => 'object',
                                            'properties' => [
                                                'PeriodUnit' => [
                                                    'title' => '配额计算周期单位',
                                                    'description' => '配额计算周期单位。',
                                                    'type' => 'string',
                                                    'example' => 'second',
                                                ],
                                                'PeriodValue' => [
                                                    'title' => '配额计算周期值',
                                                    'description' => '配额计算周期值。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '用来标记开始查询数据的位置。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '本次请求返回的全部记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '9',
                            ],
                            'MaxResults' => [
                                'description' => '本次查询的最大记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"QuotaApplications\\": [\\n    {\\n      \\"BatchQuotaApplicationId\\": \\"d314d6ae-867d-484c-9009-3d421a80****\\",\\n      \\"ProductCode\\": \\"ecs\\",\\n      \\"QuotaActionCode\\": \\"ecs.n1.large\\",\\n      \\"QuotaName\\": \\"集群最大节点数\\",\\n      \\"QuotaDescription\\": \\"集群最大节点数\\",\\n      \\"QuotaUnit\\": \\"GiB\\",\\n      \\"QuotaArn\\": \\"acs:quotas:*:120886317861****:quota/csk/q_i5uzm3\\",\\n      \\"QuotaDimension\\": {\\n        \\"key\\": \\"{\\\\\\"regionId\\\\\\":\\\\\\"cn-hangzhou\\\\\\"}\\"\\n      },\\n      \\"ApplicationId\\": \\"b926571d-cc09-4711-b547-58a615f0****\\",\\n      \\"DesireValue\\": 60,\\n      \\"Reason\\": \\"业务扩张\\",\\n      \\"Status\\": \\"Agree\\",\\n      \\"ApproveValue\\": 101,\\n      \\"EffectiveTime\\": \\"2021-01-15T11:46:25Z\\",\\n      \\"ExpireTime\\": \\"2021-01-17T11:46:25Z\\",\\n      \\"ApplyTime\\": \\"2021-01-15T09:13:53Z\\",\\n      \\"AuditReason\\": \\"同意\\",\\n      \\"NoticeType\\": 3,\\n      \\"AliyunUid\\": \\"175376458581****\\",\\n      \\"QuotaCategory\\": \\"CommonQuota\\",\\n      \\"EnvLanguage\\": \\"zh\\",\\n      \\"Period\\": {\\n        \\"PeriodUnit\\": \\"second\\",\\n        \\"PeriodValue\\": 1\\n      }\\n    }\\n  ],\\n  \\"NextToken\\": \\"1\\",\\n  \\"TotalCount\\": 9,\\n  \\"MaxResults\\": 30,\\n  \\"RequestId\\": \\"D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053\\"\\n}","type":"json"}]',
            'title' => '查询配额模板批量配额申请详情',
            'summary' => '查询资源目录中成员配额提升申请详情。',
        ],
        'ListQuotaApplicationsForTemplate' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'ProductCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '云产品的缩写名称。'."\n"
                            ."\n"
                            .'> 关于如何获取云产品的缩写名称，请参见[ListProducts](~~440555~~)中的`ProductCode`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs-spec',
                    ],
                ],
                [
                    'name' => 'QuotaActionCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额ID。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs.g5.2xlarge',
                    ],
                ],
                [
                    'name' => 'BatchQuotaApplicationId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额申请批次ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd314d6ae-867d-484c-9009-3d421a80****',
                    ],
                ],
                [
                    'name' => 'QuotaCategory',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'CommonQuota, FlowControl, WhiteListLabel',
                        'description' => '配额种类。取值：'."\n"
                            .'- CommonQuota：通用配额。'."\n"
                            .'- FlowControl：API速率配额。'."\n"
                            .'- WhiteListLabel：权益配额。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CommonQuota',
                        'enum' => [
                            'CommonQuota',
                            'FlowControl',
                            'WhiteListLabel',
                        ],
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用来标记开始读取数据的位置。'."\n"
                            ."\n"
                            .'> 不设置该参数，表示从头开始。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '单次请求返回结果的最大条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。默认值：30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'ApplyStartTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额申请开始的UTC时间。'."\n"
                            ."\n"
                            .'> `ApplyStartTime`和`ApplyEndTime`之间的时间间隔必须小于等于7天。如果未设置这两个参数，则配额申请时间为最近7天。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-05-22T16:00:00Z'."\n",
                    ],
                ],
                [
                    'name' => 'ApplyEndTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配额申请结束的UTC时间。'."\n"
                            ."\n"
                            .'> `ApplyStartTime`和`ApplyEndTime`之间的时间间隔必须小于等于7天。如果未设置这两个参数，则配额申请时间为最近7天。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-05-22T16:00:00Z'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResultDTO<ResultList<QuotaBatchApplicationVo>>',
                        'description' => '无。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053',
                            ],
                            'QuotaBatchApplications' => [
                                'description' => '配额申请历史列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '配额申请历史列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ProductCode' => [
                                            'description' => '云服务名称缩写。',
                                            'type' => 'string',
                                            'example' => 'vpc',
                                        ],
                                        'QuotaActionCode' => [
                                            'description' => '配额ID。',
                                            'type' => 'string',
                                            'example' => 'q_fhoz4k',
                                        ],
                                        'BatchQuotaApplicationId' => [
                                            'description' => '配额申请批次ID。',
                                            'type' => 'string',
                                            'example' => 'd314d6ae-867d-484c-9009-3d421a80****',
                                        ],
                                        'EffectiveTime' => [
                                            'description' => '配额生效的UTC时间。',
                                            'type' => 'string',
                                            'example' => '2023-05-22T16:00:00Z',
                                        ],
                                        'ExpireTime' => [
                                            'description' => '配额失效的UTC时间。',
                                            'type' => 'string',
                                            'example' => '2024-05-14T02:08:56Z',
                                        ],
                                        'ApplyTime' => [
                                            'description' => '配额提升申请的UTC时间。',
                                            'type' => 'string',
                                            'example' => '2022-09-23T02:38:18Z',
                                        ],
                                        'DesireValue' => [
                                            'description' => '配额申请的值。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '105',
                                        ],
                                        'QuotaCategory' => [
                                            'description' => '配额种类。取值：'."\n"
                                                .'- CommonQuota：通用配额。'."\n"
                                                .'- FlowControl：API速率配额。'."\n"
                                                .'- WhiteListLabel：权益配额。',
                                            'type' => 'string',
                                            'example' => 'CommonQuota',
                                        ],
                                        'AuditStatusVos' => [
                                            'description' => '不同审批状态的申请单数量。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '不同审批状态的申请单数量。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Status' => [
                                                        'title' => 'Agree, Disagree, Process, Cancel',
                                                        'description' => '配额提升申请的审批状态。取值：'."\n"
                                                            ."\n"
                                                            .'- Disagree：拒绝。'."\n"
                                                            ."\n"
                                                            .'- Agree：审核通过。'."\n"
                                                            ."\n"
                                                            .'- Process：审核中。'."\n"
                                                            ."\n"
                                                            .'- Cancel：已关闭。',
                                                        'type' => 'string',
                                                        'example' => 'Agree',
                                                    ],
                                                    'Count' => [
                                                        'description' => '审批单数量。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '4',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Dimensions' => [
                                            'description' => '配额维度。'."\n"
                                                ."\n"
                                                .'格式：{"regionId":"cn-hangzhou"}。',
                                            'type' => 'object',
                                            'example' => '{"regionId":"cn-hangzhou"}',
                                        ],
                                        'AliyunUids' => [
                                            'description' => '配额申请的资源目录成员的阿里云账号（主账号）列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '配额申请的资源目录成员的阿里云账号（主账号）。',
                                                'type' => 'string',
                                                'example' => '14468026070****',
                                            ],
                                        ],
                                        'Reason' => [
                                            'description' => '配额提升申请的原因。',
                                            'type' => 'string',
                                            'example' => '配额满',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '用来标记开始读取数据的位置。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '本次请求返回的全部记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '67',
                            ],
                            'MaxResults' => [
                                'description' => '本次查询的最大记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053\\",\\n  \\"QuotaBatchApplications\\": [\\n    {\\n      \\"ProductCode\\": \\"vpc\\",\\n      \\"QuotaActionCode\\": \\"q_fhoz4k\\",\\n      \\"BatchQuotaApplicationId\\": \\"d314d6ae-867d-484c-9009-3d421a80****\\",\\n      \\"EffectiveTime\\": \\"2023-05-22T16:00:00Z\\",\\n      \\"ExpireTime\\": \\"2024-05-14T02:08:56Z\\",\\n      \\"ApplyTime\\": \\"2022-09-23T02:38:18Z\\",\\n      \\"DesireValue\\": 105,\\n      \\"QuotaCategory\\": \\"CommonQuota\\",\\n      \\"AuditStatusVos\\": [\\n        {\\n          \\"Status\\": \\"Agree\\",\\n          \\"Count\\": 4\\n        }\\n      ],\\n      \\"Dimensions\\": {\\n        \\"regionId\\": \\"cn-hangzhou\\"\\n      },\\n      \\"AliyunUids\\": [\\n        \\"14468026070****\\"\\n      ],\\n      \\"Reason\\": \\"配额满\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"1\\",\\n  \\"TotalCount\\": 67,\\n  \\"MaxResults\\": 30\\n}","type":"json"}]',
            'title' => '查询配额模板批量配额申请历史',
            'summary' => '查询配额模板批量申请成员配额的申请历史。',
        ],
        'GetQuotaApplicationApproval' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'ApplicationId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '申请单 id',
                        'description' => '配额申请单ID。'."\n"
                            ."\n"
                            .'关于如何获取配额申请单ID，请参见[ListQuotaApplications](~~440568~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd314d6ae-867d-484c-9009-3d42****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResultDTO<QuotaApplicationApprovalVO>',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7ED584FB-ECBF-4A2A-969D-F54D25EFABF9',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'PARAMETER.ILLEGALL',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息。',
                                'type' => 'string',
                                'example' => 'Parameter[%s] is required.',
                            ],
                            'ErrorMsg' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'You are not authorized to do this action or the API input parameter is invalid.',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'RAM.PERMISSION.DENIED',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    ."\n"
                                    .'- true：调用成功。'."\n"
                                    .'- false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Module' => [
                                'description' => '返回对象。',
                                'type' => 'object',
                                'properties' => [
                                    'ApprovalHours' => [
                                        'description' => '配额申请单平均审批时间。单位：小时。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '24',
                                    ],
                                    'SupportReminder' => [
                                        'title' => '是否支持审批提醒',
                                        'description' => '配额申请单是否支持审批提醒。取值：'."\n"
                                            .'- false：不支持。'."\n"
                                            .'- true：支持。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'UnsupportReminderReason' => [
                                        'description' => '配额申请单不支持审批提醒的原因说明。',
                                        'type' => 'string',
                                        'example' => 'can only be remind once within the interval',
                                    ],
                                    'ReminderIntervalHours' => [
                                        'description' => '配额申请单的审批提醒间隔时间。单位：小时。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '24',
                                    ],
                                ],
                            ],
                            'AllowRetry' => [
                                'description' => '是否允许重试。取值：'."\n"
                                    .'- false：不允许重试。'."\n"
                                    .'- true：允许重试。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'ErrorArgs' => [
                                'description' => '错误的参数组。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '错误的参数。',
                                    'type' => 'any',
                                    'example' => 'ApplicationId',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7ED584FB-ECBF-4A2A-969D-F54D25EFABF9\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"PARAMETER.ILLEGALL\\",\\n  \\"DynamicMessage\\": \\"Parameter[%s] is required.\\",\\n  \\"ErrorMsg\\": \\"You are not authorized to do this action or the API input parameter is invalid.\\",\\n  \\"ErrorCode\\": \\"RAM.PERMISSION.DENIED\\",\\n  \\"Success\\": true,\\n  \\"Module\\": {\\n    \\"ApprovalHours\\": 24,\\n    \\"SupportReminder\\": false,\\n    \\"UnsupportReminderReason\\": \\"can only be remind once within the interval\\",\\n    \\"ReminderIntervalHours\\": 24\\n  },\\n  \\"AllowRetry\\": false,\\n  \\"ErrorArgs\\": [\\n    \\"ApplicationId\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询配额申请单审批信息',
            'summary' => '查询配额申请单审批信息。其中包含：平均审批时间、是否支持审批提醒和审批提醒间隔时间等。',
            'description' => '### 前提条件'."\n"
                .'请您确保已创建配额提升申请。具体操作，请参见[CreateQuotaApplication](~~440566~~)。',
        ],
        'RemindQuotaApplicationApproval' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'ApplicationId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '申请单 id',
                        'description' => '配额申请单ID。'."\n"
                            ."\n"
                            .'关于如何获取配额申请单ID，请参见[ListQuotaApplications](~~440568~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '219f1ff6-6205-495f-bda7-90d2fe945e****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopResultDTO<String>',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'PARAMETER.ILLEGALL',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息。',
                                'type' => 'string',
                                'example' => 'Parameter[%s] is required.',
                            ],
                            'ErrorMsg' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'You are not authorized to do this action or the API input parameter is invalid.',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'RAM.PERMISSION.DENIED'."\n",
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    .'- true：调用成功。'."\n"
                                    .'- false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Module' => [
                                'description' => '返回对象，配额申请单ID。',
                                'type' => 'string',
                                'example' => '219f1ff6-6205-495f-bda7-90d2fe945e****',
                            ],
                            'AllowRetry' => [
                                'description' => '是否允许重试。取值：'."\n"
                                    .'- false：不允许重试。'."\n"
                                    .'- true：允许重试。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'ErrorArgs' => [
                                'description' => '错误的参数组。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '错误的参数。',
                                    'type' => 'any',
                                    'example' => 'ApplicationId',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"PARAMETER.ILLEGALL\\",\\n  \\"DynamicMessage\\": \\"Parameter[%s] is required.\\",\\n  \\"ErrorMsg\\": \\"You are not authorized to do this action or the API input parameter is invalid.\\",\\n  \\"ErrorCode\\": \\"RAM.PERMISSION.DENIED\\\\n\\",\\n  \\"Success\\": true,\\n  \\"Module\\": \\"219f1ff6-6205-495f-bda7-90d2fe945e****\\",\\n  \\"AllowRetry\\": false,\\n  \\"ErrorArgs\\": [\\n    \\"ApplicationId\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询支持审批提醒的配额申请单',
            'summary' => '查询支持审批提醒的配额申请单。',
            'description' => '> 本接口仅适用于支持配额审批提醒的申请单，即GetQuotaApplicationApproval接口中`SupportReminder`为`true`。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'quotas.aliyuncs.com',
        ],
    ],
];
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'scdn',
        'version' => '2017-11-15',
    ],
    'directories' => [
        [
            'id' => 74279,
            'title' => '服务管理',
            'type' => 'directory',
            'children' => [
                'SetScdnBotInfo',
                'SetScdnCcInfo',
                'SetScdnDDoSInfo',
                'DescribeScdnDDoSInfo',
                'DescribeScdnService',
                'DescribeScdnUserProtectInfo',
                'DescribeScdnUserQuota',
                'CheckScdnService',
            ],
        ],
        [
            'id' => 74289,
            'title' => '统计',
            'type' => 'directory',
            'children' => [
                'DescribeScdnDomainPvData',
                'DescribeScdnDomainHitRateData',
                'DescribeScdnDomainIspData',
                'DescribeScdnDomainRealTimeByteHitRateData',
                'DescribeScdnDomainRealTimeHttpCodeData',
                'DescribeScdnDomainRealTimeQpsData',
                'DescribeScdnDomainRealTimeReqHitRateData',
                'DescribeScdnDomainRealTimeSrcBpsData',
                'DescribeScdnDomainRegionData',
                'DescribeScdnDomainTopReferVisit',
                'DescribeScdnDomainTopUrlVisit',
                'DescribeScdnDomainUvData',
                'DescribeScdnDomainRealTimeBpsData',
                'DescribeScdnCcTopIp',
                'DescribeScdnCcTopUrl',
                'DescribeScdnDomainBpsData',
                'DescribeScdnDomainHttpCodeData',
                'DescribeScdnDomainLog',
                'DescribeScdnDomainOriginBpsData',
                'DescribeScdnDomainQpsData',
                'DescribeScdnTopDomainsByFlow',
            ],
        ],
        [
            'id' => 74311,
            'title' => '缓存',
            'type' => 'directory',
            'children' => [
                'DescribeScdnRefreshQuota',
                'DescribeScdnRefreshTasks',
                'PreloadScdnObjectCaches',
                'RefreshScdnObjectCaches',
            ],
        ],
        [
            'id' => 74316,
            'title' => '监控',
            'type' => 'directory',
            'children' => [
                'DescribeScdnCertificateDetail',
                'DescribeScdnCertificateList',
                'DescribeScdnDomainTrafficData',
                'DescribeScdnDomainOriginTrafficData',
                'DescribeScdnDomainRealTimeSrcTrafficData',
                'DescribeScdnDomainRealTimeTrafficData',
                'DescribeScdnCcQpsInfo',
                'DescribeScdnDDoSTrafficInfo',
            ],
        ],
        [
            'id' => 74325,
            'title' => '证书',
            'type' => 'directory',
            'children' => [
                'SetScdnDomainCertificate',
                'DescribeScdnDomainCertificateInfo',
            ],
        ],
        [
            'id' => 74328,
            'title' => '域名管理',
            'type' => 'directory',
            'children' => [
                'AddScdnDomain',
                'DeleteScdnDomain',
                'DeleteScdnSpecificConfig',
                'StartScdnDomain',
                'StopScdnDomain',
                'UpdateScdnDomain',
                'BatchDeleteScdnDomainConfigs',
                'BatchSetScdnDomainConfigs',
                'BatchUpdateScdnDomain',
                'BatchStopScdnDomain',
                'BatchStartScdnDomain',
                'DescribeScdnUserDomains',
                'DescribeScdnDomainConfigs',
                'DescribeScdnDomainCname',
                'DescribeScdnDomainDetail',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'DescribeScdnCcInfo',
                'DescribeScdnVerifyContent',
                'VerifyScdnDomainOwner',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'SetScdnBotInfo' => [
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加速域名，多个域名用英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'Enable',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'bot防护开关。取值：'."\n"
                            .'- **on**：打开。'."\n"
                            .'- **off**：关闭。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'on',
                        'enum' => [
                            'on',
                            'off',
                        ],
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'bot防护参数。取值：'."\n"
                            ."\n"
                            .'- **limit**：拦截模式。'."\n"
                            .'- **observer**：观察模式。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'limit',
                        'enum' => [
                            'limit',
                            'observer',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MISS_PARAMETER',
                        'errorMessage' => 'MISS_PARAMETER',
                    ],
                    [
                        'errorCode' => 'INVALID_PARAMETER',
                        'errorMessage' => 'INVALID_PARAMETER',
                    ],
                    [
                        'errorCode' => 'USER_NOT_EXIST',
                        'errorMessage' => 'USER_NOT_EXIST',
                    ],
                    [
                        'errorCode' => 'DOMAIN_NOT_EXIST',
                        'errorMessage' => 'DOMAIN_NOT_EXIST',
                    ],
                    [
                        'errorCode' => 'ADD_BOT_FAILED',
                        'errorMessage' => 'ADD_BOT_FAILED',
                    ],
                    [
                        'errorCode' => 'SET_BOT_DB_FAILED',
                        'errorMessage' => 'SET_BOT_DB_FAILED',
                    ],
                    [
                        'errorCode' => 'BOT_LOCK',
                        'errorMessage' => 'BOT_LOCK',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23\\"\\n}","errorExample":""},{"type":"xml","example":"<SetScdnBotInfoResponse>\\r\\n    <RequestId>BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23</RequestId>\\r\\n</SetScdnBotInfoResponse>","errorExample":""}]',
            'title' => '设置bot防护功能',
            'summary' => '调用SetScdnBotInfo设置bot防护功能。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SetScdnCcInfo' => [
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '频次防护开关，取值：**enable**和**disable**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'enable',
                        'enum' => [
                            'enable',
                            'disable',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MISS_PARAMETER',
                        'errorMessage' => 'MISS_PARAMETER.',
                    ],
                    [
                        'errorCode' => 'USER_NOT_EXIST',
                        'errorMessage' => 'USER_NOT_EXIST',
                    ],
                    [
                        'errorCode' => 'SET_CC_FAILED',
                        'errorMessage' => 'SET_CC_FAILED',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23\\"\\n}","errorExample":""},{"type":"xml","example":"<SetScdnCcInfoResponse>\\r\\n    <RequestId>BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23</RequestId>\\r\\n</SetScdnCcInfoResponse>","errorExample":""}]',
            'title' => '设置频次防护功能',
            'summary' => '调用SetScdnCcInfo设置频次防护功能。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SetScdnDDoSInfo' => [
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ElasticBandwidth',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性带宽，单位：G。',
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
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MISS_PARAMETER',
                        'errorMessage' => 'MISS_PARAMETER.',
                    ],
                    [
                        'errorCode' => 'USER_NOT_EXIST',
                        'errorMessage' => 'USER_NOT_EXIST',
                    ],
                    [
                        'errorCode' => 'SET_DDOS_FAILED',
                        'errorMessage' => 'SET_DDOS_FAILED',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23\\"\\n}","errorExample":""},{"type":"xml","example":"<SetScdnDDoSInfoResponse>\\r\\n    <RequestId>BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23</RequestId>\\r\\n</SetScdnDDoSInfoResponse>","errorExample":""}]',
            'title' => '设置DDoS弹性防护带宽',
            'summary' => '调用SetScdnDDoSInfo设置网络攻击弹性防护带宽。',
            'description' => '> 单用户调用频率：50次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDDoSInfo' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SecBandwidth' => [
                                'description' => '安全防护带宽，单位：G。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23',
                            ],
                            'ElasticBandwidth' => [
                                'description' => '弹性带宽，单位：G。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '80',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MISS_PARAMETER',
                        'errorMessage' => 'MISS_PARAMETER.',
                    ],
                    [
                        'errorCode' => 'USER_NOT_EXIST',
                        'errorMessage' => 'USER_NOT_EXIST',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SecBandwidth\\": 20,\\n  \\"RequestId\\": \\"BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23\\",\\n  \\"ElasticBandwidth\\": 80\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDDoSInfoResponse>\\n<SecBandwidth>20</SecBandwidth>\\n<ElasticBandwidth>20</ElasticBandwidth>\\n<RequestId>BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23</RequestId>\\n</DescribeScdnDDoSInfoResponse>","errorExample":""}]',
            'title' => '查询DDoS防护信息',
            'summary' => '调用DescribeScdnDDoSInfo查询DDoS防护信息。',
            'description' => '> 单用户调用频率：50次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnService' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'DomainCountValue' => [
                                'description' => '将要生效的接入域名数（不带单位）',
                                'type' => 'string',
                                'example' => '20',
                            ],
                            'DDoSBasicValue' => [
                                'description' => '将要生效的网络攻击保底防护（不带单位）',
                                'type' => 'string',
                                'example' => '20',
                            ],
                            'ChangingAffectTime' => [
                                'description' => 'GMT时间，下次变配生效时间',
                                'type' => 'string',
                                'example' => '2018-03-31T16:00:00Z',
                            ],
                            'CcProtection' => [
                                'description' => '将要生效的频次攻击防护（带单位）',
                                'type' => 'string',
                                'example' => '60000Qps',
                            ],
                            'CurrentDomainCount' => [
                                'description' => '当前的接入域名数（带单位）',
                                'type' => 'string',
                                'example' => '20',
                            ],
                            'PricingCycle' => [
                                'description' => '付费周期。取值：**Month**，**Year**等。',
                                'type' => 'string',
                                'example' => 'Year',
                            ],
                            'OpenTime' => [
                                'description' => '开通服务时间，ISO 8601时间格式',
                                'type' => 'string',
                                'example' => '2017-11-07T16:00:00Z',
                            ],
                            'ChangingChargeType' => [
                                'description' => '下次生效的计费类型。'."\n"
                                    ."\n"
                                    .'- PayByTraffic：流量。'."\n"
                                    .'- PayByBandwidth：带宽。'."\n"
                                    .'- PayByBandwidth95：月95。'."\n"
                                    .'- PayByBandwidth_monthavg：月平均带宽。'."\n"
                                    .'- PayByBandwidth_month4th：月第四峰值。'."\n"
                                    .'- PayByBandwidth_monthday95avg：月平均95。'."\n"
                                    .'- PayByBandwidth_nighthalf95：月95夜间减半。',
                                'type' => 'string',
                                'example' => 'PayByBandwidth',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23',
                            ],
                            'CurrentBandwidthValue' => [
                                'description' => '当前的CDN保底带宽（不带单位）',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'Bandwidth' => [
                                'description' => '将要生效的CDN保底带宽（带单位）',
                                'type' => 'string',
                                'example' => '100Mbps',
                            ],
                            'DomainCount' => [
                                'description' => '将要生效的接入域名数（带单位）',
                                'type' => 'string',
                                'example' => '20个',
                            ],
                            'ProtectTypeValue' => [
                                'description' => '将要生效的资费版本英文，如base。为空时是标准版本。',
                                'type' => 'string',
                                'example' => 'standard',
                            ],
                            'CurrentBandwidth' => [
                                'description' => '当前的CDN保底带宽（带单位）',
                                'type' => 'string',
                                'example' => '3 M',
                            ],
                            'PriceType' => [
                                'description' => '付费方式',
                                'type' => 'string',
                                'example' => 'monthPrice',
                            ],
                            'CcProtectionValue' => [
                                'description' => '将要生效的频次攻击防护（不带单位）',
                                'type' => 'string',
                                'example' => '60000',
                            ],
                            'CurrentDDoSBasic' => [
                                'description' => '当前的网络攻击保底防护（带单位）',
                                'type' => 'string',
                                'example' => '30Gbps',
                            ],
                            'ProtectType' => [
                                'description' => '将要生效的资费版本，如基础防护。为空时是标准版本。',
                                'type' => 'string',
                                'example' => '标准防护',
                            ],
                            'CurrentElasticProtection' => [
                                'description' => '当前的网络攻击弹性防护（带单位）',
                                'type' => 'string',
                                'example' => '100Gbps',
                            ],
                            'CurrentElasticProtectionValue' => [
                                'description' => '当前的网络攻击弹性防护（不带单位）',
                                'type' => 'string',
                                'example' => '100',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID',
                                'type' => 'string',
                                'example' => 'example ID',
                            ],
                            'CurrentProtectType' => [
                                'description' => '当前的资费版本，如基础防护。为空时是标准版本。',
                                'type' => 'string',
                                'example' => '标准防护',
                            ],
                            'ElasticProtection' => [
                                'description' => '将要生效的网络攻击弹性防护（带单位）',
                                'type' => 'string',
                                'example' => '100Gbps',
                            ],
                            'EndTime' => [
                                'description' => '服务到期时间，ISO 8601时间格式',
                                'type' => 'string',
                                'example' => '2014-12-08T00:00:00Z',
                            ],
                            'CurrentDDoSBasicValue' => [
                                'description' => '当前的网络攻击保底防护（不带单位）',
                                'type' => 'string',
                                'example' => '30',
                            ],
                            'BandwidthValue' => [
                                'description' => '将要生效的CDN保底带宽（不带单位）',
                                'type' => 'string',
                                'example' => '100',
                            ],
                            'DDoSBasic' => [
                                'description' => '将要生效的网络攻击保底防护（带单位）',
                                'type' => 'string',
                                'example' => '20Gbps',
                            ],
                            'CurrentDomainCountValue' => [
                                'description' => '当前的接入域名数（不带单位）',
                                'type' => 'string',
                                'example' => '20',
                            ],
                            'ElasticProtectionValue' => [
                                'description' => '将要生效的网络攻击弹性防护（不带单位）',
                                'type' => 'string',
                                'example' => '100',
                            ],
                            'CurrentCcProtection' => [
                                'description' => '当前的频次攻击防护（带单位）',
                                'type' => 'string',
                                'example' => '60,000 QPS',
                            ],
                            'InternetChargeType' => [
                                'description' => '当前计费类型。'."\n"
                                    ."\n"
                                    .'- PayByTraffic：流量。'."\n"
                                    .'- PayByBandwidth：带宽。'."\n"
                                    .'- PayByBandwidth95：月95。'."\n"
                                    .'- PayByBandwidth_monthavg：月平均带宽。'."\n"
                                    .'- PayByBandwidth_month4th：月第四峰值。'."\n"
                                    .'- PayByBandwidth_monthday95avg：月平均95。'."\n"
                                    .'- PayByBandwidth_nighthalf95：月95夜间减半。',
                                'type' => 'string',
                                'example' => 'PayByTraffic',
                            ],
                            'CurrentProtectTypeValue' => [
                                'description' => '当前的资费版本英文，如base。为空时是标准版本。',
                                'type' => 'string',
                                'example' => 'standard',
                            ],
                            'CurrentCcProtectionValue' => [
                                'description' => '当前的频次攻击防护（不带单位）',
                                'type' => 'string',
                                'example' => '60000',
                            ],
                            'OperationLocks' => [
                                'type' => 'object',
                                'properties' => [
                                    'LockReason' => [
                                        'description' => '业务锁定状态。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'LockReason' => [
                                                    'description' => '锁定原因。例如：financial（欠费）。',
                                                    'type' => 'string',
                                                    'example' => 'financial',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'UnsupportedParameter',
                        'errorMessage' => 'There is unsupported parameters',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DomainCountValue\\": \\"20\\",\\n  \\"DDoSBasicValue\\": \\"20\\",\\n  \\"ChangingAffectTime\\": \\"2018-03-31T16:00:00Z\\",\\n  \\"CcProtection\\": \\"60000Qps\\",\\n  \\"CurrentDomainCount\\": \\"20\\",\\n  \\"PricingCycle\\": \\"Year\\",\\n  \\"OpenTime\\": \\"2017-11-07T16:00:00Z\\",\\n  \\"ChangingChargeType\\": \\"PayByBandwidth\\",\\n  \\"RequestId\\": \\"BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23\\",\\n  \\"CurrentBandwidthValue\\": \\"3\\",\\n  \\"Bandwidth\\": \\"100Mbps\\",\\n  \\"DomainCount\\": \\"20个\\",\\n  \\"ProtectTypeValue\\": \\"standard\\",\\n  \\"CurrentBandwidth\\": \\"3 M\\",\\n  \\"PriceType\\": \\"monthPrice\\",\\n  \\"CcProtectionValue\\": \\"60000\\",\\n  \\"CurrentDDoSBasic\\": \\"30Gbps\\",\\n  \\"ProtectType\\": \\"标准防护\\",\\n  \\"CurrentElasticProtection\\": \\"100Gbps\\",\\n  \\"CurrentElasticProtectionValue\\": \\"100\\",\\n  \\"InstanceId\\": \\"example ID\\",\\n  \\"CurrentProtectType\\": \\"标准防护\\",\\n  \\"ElasticProtection\\": \\"100Gbps\\",\\n  \\"EndTime\\": \\"2014-12-08T00:00:00Z\\",\\n  \\"CurrentDDoSBasicValue\\": \\"30\\",\\n  \\"BandwidthValue\\": \\"100\\",\\n  \\"DDoSBasic\\": \\"20Gbps\\",\\n  \\"CurrentDomainCountValue\\": \\"20\\",\\n  \\"ElasticProtectionValue\\": \\"100\\",\\n  \\"CurrentCcProtection\\": \\"60,000 QPS\\",\\n  \\"InternetChargeType\\": \\"PayByTraffic\\",\\n  \\"CurrentProtectTypeValue\\": \\"standard\\",\\n  \\"CurrentCcProtectionValue\\": \\"60000\\",\\n  \\"OperationLocks\\": {\\n    \\"LockReason\\": [\\n      {\\n        \\"LockReason\\": \\"financial\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnServiceResponse>\\r\\n    <CurrentDDoSBasicValue>30</CurrentDDoSBasicValue>\\r\\n    <EndTime>2019-03-25T16:00:00Z</EndTime>\\r\\n    <CurrentElasticProtectionValue>100</CurrentElasticProtectionValue>\\r\\n    <ElasticProtection>100Gbps</ElasticProtection>\\r\\n    <DDoSBasic>20Gbps</DDoSBasic>\\r\\n    <DomainCountValue>20</DomainCountValue>\\r\\n    <CurrentDomainCount>20</CurrentDomainCount>\\r\\n    <CcProtectionValue>60000</CcProtectionValue>\\r\\n    <ElasticProtectionValue>100</ElasticProtectionValue>\\r\\n    <OpenTime>2018-12-25T07:27:41Z</OpenTime>\\r\\n    <ChangingChargeType>PayByBandwidth</ChangingChargeType>\\r\\n    <DomainCount>20</DomainCount>\\r\\n    <CurrentElasticProtection>100Gbps</CurrentElasticProtection>\\r\\n    <RequestId>DD810356-4126-4474-981B-95019A9399D3</RequestId>\\r\\n    <InstanceId>xxx</InstanceId>\\r\\n    <CurrentCcProtectionValue>60000</CurrentCcProtectionValue>\\r\\n    <CurrentProtectType>标准防护</CurrentProtectType>\\r\\n    <CurrentDDoSBasic>30Gbps</CurrentDDoSBasic>\\r\\n    <CurrentDomainCountValue>20</CurrentDomainCountValue>\\r\\n    <ProtectTypeValue>standard</ProtectTypeValue>\\r\\n    <CurrentProtectTypeValue>standard</CurrentProtectTypeValue>\\r\\n    <CcProtection>60,000 QPS</CcProtection>\\r\\n    <OperationLocks>\\r\\n    </OperationLocks>\\r\\n    <InternetChargeType>PayByBandwidth</InternetChargeType>\\r\\n    <DDoSBasicValue>20</DDoSBasicValue>\\r\\n    <ProtectType>标准防护</ProtectType>\\r\\n    <CurrentCcProtection>60,000 QPS</CurrentCcProtection>\\r\\n</DescribeScdnServiceResponse>","errorExample":""}]',
            'title' => '查询SCDN服务状态',
            'summary' => '调用DescribeScdnService查询SCDN服务状态。包括：服务开通时间，频次攻击保护等数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnUserProtectInfo' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ServiceDDoS' => [
                                'description' => '是否开启网络攻击防护。取值：'."\n"
                                    ."\n"
                                    .'- **0**：未开启。'."\n"
                                    .'- **1**：开启。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MISS_PARAMETER',
                        'errorMessage' => 'MISS_PARAMETER.',
                    ],
                    [
                        'errorCode' => 'USER_NOT_EXIST',
                        'errorMessage' => 'USER_NOT_EXIST',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ServiceDDoS\\": 1,\\n  \\"RequestId\\": \\"BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnUserProtectInfoResponse>\\n<ServiceDDoS>1</ServiceDDoS>\\n<RequestId>BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23</RequestId>\\n</DescribeScdnUserProtectInfoResponse>","errorExample":""}]',
            'title' => '查询用户开通的服务信息',
            'summary' => '调用DescribeScdnUserProtectInfo查询用户开通的服务信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnUserQuota' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'BlockQuota' => [
                                'description' => '封禁上限。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'RefreshUrlRemain' => [
                                'description' => '当天剩余URL刷新数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'DomainQuota' => [
                                'description' => '加速域名数上限。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'BlockRemain' => [
                                'description' => '封禁余量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '500',
                            ],
                            'PreloadRemain' => [
                                'description' => '当天剩余预热数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '300',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23',
                            ],
                            'RefreshUrlQuota' => [
                                'description' => '当天URL刷新数量上限。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'PreloadQuota' => [
                                'description' => '当天预热数量上限。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '500',
                            ],
                            'RefreshDirQuota' => [
                                'description' => '当天路径刷新数量上限。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'RefreshDirRemain' => [
                                'description' => '当天剩余目录刷新数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"BlockQuota\\": 20,\\n  \\"RefreshUrlRemain\\": 100,\\n  \\"DomainQuota\\": 50,\\n  \\"BlockRemain\\": 500,\\n  \\"PreloadRemain\\": 300,\\n  \\"RequestId\\": \\"BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23\\",\\n  \\"RefreshUrlQuota\\": 100,\\n  \\"PreloadQuota\\": 500,\\n  \\"RefreshDirQuota\\": 100,\\n  \\"RefreshDirRemain\\": 100\\n}","errorExample":""},{"type":"xml","example":"<PreloadRemain>100</PreloadRemain>\\n<RefreshUrlRemain>500</RefreshUrlRemain>\\n<DomainQuota>20</DomainQuota>\\n<RefreshDirRemain>300</RefreshDirRemain>\\n<RequestId>BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23</RequestId>\\n<BlockRemain>100</BlockRemain>\\n<RefreshUrlQuota>1000</RefreshUrlQuota>\\n<BlockQuota>100</BlockQuota>\\n<PreloadQuota>300</PreloadQuota>\\n<RefreshDirQuota>500</RefreshDirQuota>","errorExample":""}]',
            'title' => '查询用户资源上限及已使用情况',
            'summary' => '调用DescribeScdnUserQuota查询用户资源上限及已使用情况。',
            'description' => '**调用此接口可以查询到如下信息：**'."\n"
                .'- 域名最大限制数量'."\n"
                .'- 刷新、预热URL及目录的最大限制数量'."\n"
                .'- 当日剩余刷新、预热URL及目录的次数',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CheckScdnService' => [
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
            'systemTags' => [],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'InDebt' => [
                                'description' => '是否欠费。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'OnService' => [
                                'description' => '服务是否可用（不欠费）。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4F51E9C3-728F-4E35-952D-0ED87A06A8A1',
                            ],
                            'InDebtOverdue' => [
                                'description' => '是否欠费超期。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'Enabled' => [
                                'description' => '是否已开通SCDN服务。',
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
                        'errorCode' => 'UnsupportedParameter',
                        'errorMessage' => 'There is unsupported parameters',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"InDebt\\": false,\\n  \\"OnService\\": true,\\n  \\"RequestId\\": \\"4F51E9C3-728F-4E35-952D-0ED87A06A8A1\\",\\n  \\"InDebtOverdue\\": false,\\n  \\"Enabled\\": true\\n}","errorExample":""},{"type":"xml","example":"<CheckScdnServiceResponse>\\r\\n    <Enabled>true</Enabled>\\r\\n    <InDebtOverdue>false</InDebtOverdue>\\r\\n    <InDebt>false</InDebt>\\r\\n    <OnService>true</OnService>\\r\\n    <RequestId>4F51E9C3-728F-4E35-952D-0ED87A06A8A1</RequestId>\\r\\n</CheckScdnServiceResponse>","errorExample":""}]',
            'title' => '查询SCDN是否开通或欠费',
            'summary' => '查询SCDN是否开通，是否欠费。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainPvData' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要查询的加速域名，仅支持一个域名，不写代表当前用户下所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据起始时间点，日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。'."\n"
                            ."\n"
                            .'- 最小数据粒度为1小时'."\n"
                            .'- 不写默认读取过去24小时数据',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2015-11-28T00:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间需大于起始时间；获日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2015-11-29T00:00:00Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'EndTime' => [
                                'description' => '获取数据结束时间点。',
                                'type' => 'string',
                                'example' => '2015-11-29T00:00:00Z',
                            ],
                            'StartTime' => [
                                'description' => '获取数据起始时间点。',
                                'type' => 'string',
                                'example' => '2015-11-28T00:00:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BCD7D917-76F1-442F-BB75-C810DE34C761',
                            ],
                            'DomainName' => [
                                'description' => '加速域名信息。',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'DataInterval' => [
                                'description' => '每条记录的时间间隔，固定值1小时或1天。',
                                'type' => 'string',
                                'example' => '3600',
                            ],
                            'PvDataInterval' => [
                                'type' => 'object',
                                'properties' => [
                                    'UsageData' => [
                                        'description' => '每个时间间隔的页面访问次数。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Value' => [
                                                    'description' => '详细使用数据。',
                                                    'type' => 'string',
                                                    'example' => '9292',
                                                ],
                                                'TimeStamp' => [
                                                    'description' => '时间片起始时刻。',
                                                    'type' => 'string',
                                                    'example' => '2015-11-28T03:00:00Z',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidStartTime.Malformed',
                        'errorMessage' => 'Specified StartTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Malformed',
                        'errorMessage' => 'Specified EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter StartTime is not supported.',
                    ],
                    [
                        'errorCode' => 'InvalidTime.ValueNotSupported',
                        'errorMessage' => 'StartTime or EndTime is miss match.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2015-11-29T00:00:00Z\\",\\n  \\"StartTime\\": \\"2015-11-28T00:00:00Z\\",\\n  \\"RequestId\\": \\"BCD7D917-76F1-442F-BB75-C810DE34C761\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"DataInterval\\": \\"3600\\",\\n  \\"PvDataInterval\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"Value\\": \\"9292\\",\\n        \\"TimeStamp\\": \\"2015-11-28T03:00:00Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainPvDataResponse>\\n<DataInterval>3600</DataInterval>\\n<RequestId>BCD7D917-76F1-442F-BB75-C810DE34C761</RequestId>\\n<DomainName>example.com</DomainName>\\n<EndTime>2015-11-29T00:00:00Z</EndTime>\\n<PvDataInterval>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T03:00:00Z</TimeStamp>\\n        <Value>9292</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T23:00:00Z</TimeStamp>\\n        <Value>9239</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T07:00:00Z</TimeStamp>\\n        <Value>9464</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T12:00:00Z</TimeStamp>\\n        <Value>9379</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T22:00:00Z</TimeStamp>\\n        <Value>9243</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T10:00:00Z</TimeStamp>\\n        <Value>10063</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T15:00:00Z</TimeStamp>\\n        <Value>9068</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T14:00:00Z</TimeStamp>\\n        <Value>9353</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T04:00:00Z</TimeStamp>\\n        <Value>9513</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T02:00:00Z</TimeStamp>\\n        <Value>9377</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T08:00:00Z</TimeStamp>\\n        <Value>9579</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T20:00:00Z</TimeStamp>\\n        <Value>9109</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T09:00:00Z</TimeStamp>\\n        <Value>10631</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T06:00:00Z</TimeStamp>\\n        <Value>9587</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T01:00:00Z</TimeStamp>\\n        <Value>9108</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T16:00:00Z</TimeStamp>\\n        <Value>9454</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T21:00:00Z</TimeStamp>\\n        <Value>9285</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T19:00:00Z</TimeStamp>\\n        <Value>9059</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T00:00:00Z</TimeStamp>\\n        <Value>9470</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T05:00:00Z</TimeStamp>\\n        <Value>11830</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T13:00:00Z</TimeStamp>\\n        <Value>9992</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T17:00:00Z</TimeStamp>\\n        <Value>9529</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T18:00:00Z</TimeStamp>\\n        <Value>9203</Value>\\n    </UsageData>\\n    <UsageData>\\n        <TimeStamp>2015-11-28T11:00:00Z</TimeStamp>\\n        <Value>9604</Value>\\n    </UsageData>\\n</PvDataInterval>\\n<StartTime>2015-11-28T00:00:00Z</StartTime>\\n</DescribeScdnDomainPvDataResponse>","errorExample":""}]',
            'title' => '获取加速域名PV页面访问统计数据',
            'summary' => '获取加速域名最小1小时粒度的PV页面访问的统计数据。',
            'description' => '> - 仅支持一个域名，或当前用户下所有域名。'."\n"
                .'- 最多可获取最近90天的数据。'."\n"
                .'- 不指定**StartTime**和**EndTime**时，默认读取过去24小时的数据，同时支持按指定的起止时间查询，两者需要同时指定。'."\n"
                .'- 单用户调用频率：10次/秒。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainHitRateData' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要查询的加速域名，只支持一个域名，不写代表所有。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据起始时间点。'."\n"
                            ."\n"
                            .'- 日期格式按照ISO8601表示法，并使用UTC时间'."\n"
                            .'- 格式为：YYYY-MM-DDThh:mm:ssZ'."\n"
                            .'- 最小数据粒度为5分钟'."\n"
                            .'- 不写默认读取过去24小时数据',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2018-03-02T12:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- 结束时间需大于起始时间'."\n"
                            .'- 获日期格式按照ISO8601表示法，并使用UTC时间'."\n"
                            .'- 格式为：YYYY-MM-DDThh:mm:ssZ',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2018-03-02T15:00:00Z',
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询数据的时间粒度，支持300、 3600和86400秒。'."\n"
                            ."\n"
                            .'- 3天以内（不包含3天整）支持300、 3600、 86400。'."\n"
                            .'- 3-31天（不包含31天整）支持3600和86400。'."\n"
                            .'- 31天以上支持86400。'."\n"
                            .'- 不传和传的值不支持时，使用默认值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '300',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'EndTime' => [
                                'description' => '结束时间',
                                'type' => 'string',
                                'example' => '2018-03-02T15:00:00Z',
                            ],
                            'StartTime' => [
                                'description' => '开始时间',
                                'type' => 'string',
                                'example' => '2018-03-02T12:00:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4D07ABFE-4737-4834-B1B9-A661308C47B4',
                            ],
                            'DomainName' => [
                                'description' => '安全加速域名',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'DataInterval' => [
                                'description' => '每条记录的时间间隔，以秒为单位',
                                'type' => 'string',
                                'example' => '3600',
                            ],
                            'HitRatePerInterval' => [
                                'type' => 'object',
                                'properties' => [
                                    'DataModule' => [
                                        'description' => '每个时间间隔的命中百分占比',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TimeStamp' => [
                                                    'description' => '时间片起始时刻',
                                                    'type' => 'string',
                                                    'example' => '2018-03-02T15:00:00Z',
                                                ],
                                                'ByteHitRate' => [
                                                    'description' => '字节命中百分占比',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'ReqHitRate' => [
                                                    'description' => '请求命中百分占比',
                                                    'type' => 'string',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'StartTime and EndTime can not be single.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.Malformed',
                        'errorMessage' => 'Specified StartTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Malformed',
                        'errorMessage' => 'Specified EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Mismatch',
                        'errorMessage' => 'Specified end time does not math the specified start time.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter StartTime is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2018-03-02T15:00:00Z\\",\\n  \\"StartTime\\": \\"2018-03-02T12:00:00Z\\",\\n  \\"RequestId\\": \\"4D07ABFE-4737-4834-B1B9-A661308C47B4\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"DataInterval\\": \\"3600\\",\\n  \\"HitRatePerInterval\\": {\\n    \\"DataModule\\": [\\n      {\\n        \\"TimeStamp\\": \\"2018-03-02T15:00:00Z\\",\\n        \\"ByteHitRate\\": \\"0\\",\\n        \\"ReqHitRate\\": \\"0\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainHitRateDataResponse>\\r\\n    <DomainName>example.com</DomainName>\\r\\n    <DataInterval>3600</DataInterval>\\r\\n    <HitRatePerInterval>\\r\\n        <DataModule>\\r\\n            <ByteHitRate>0</ByteHitRate>\\r\\n            <TimeStamp>2018-03-02T15:00:00Z</TimeStamp>\\r\\n            <ReqHitRate>0</ReqHitRate>\\r\\n        </DataModule>\\r\\n        <DataModule>\\r\\n            <ByteHitRate>0</ByteHitRate>\\r\\n            <TimeStamp>2018-03-02T14:00:00Z</TimeStamp>\\r\\n            <ReqHitRate>0</ReqHitRate>\\r\\n        </DataModule>\\r\\n        <DataModule>\\r\\n            <ByteHitRate>0</ByteHitRate>\\r\\n            <TimeStamp>2018-03-02T13:00:00Z</TimeStamp>\\r\\n            <ReqHitRate>0</ReqHitRate>\\r\\n        </DataModule>\\r\\n        <DataModule>\\r\\n            <ByteHitRate>0</ByteHitRate>\\r\\n            <TimeStamp>2018-03-02T12:00:00Z</TimeStamp>\\r\\n            <ReqHitRate>0</ReqHitRate>\\r\\n        </DataModule>\\r\\n    </HitRatePerInterval>\\r\\n    <RequestId>4D07ABFE-4737-4834-B1B9-A661308C47B4</RequestId>\\r\\n    <EndTime>2018-03-02T15:00:00Z</EndTime>\\r\\n    <StartTime>2018-03-02T12:00:00Z</StartTime>\\r\\n</DescribeScdnDomainHitRateDataResponse>","errorExample":""}]',
            'title' => '获取命中率',
            'summary' => '获取安全加速域名的命中率，包括字节命中率和请求命中率。',
            'description' => '- 不指定StartTime和EndTime时，默认读取过去24小时的数据，同时支持按指定的起止时间查询，两者需要同时指定。'."\n"
                .'- 支持批量域名查询，多个域名可用逗号（半角）分隔。'."\n"
                .'- 最多可获取最近90天的数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainIspData' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要查询的加速域名，只支持一个域名，不写代表当前用户下所有域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据起始时间点，北京时间。不写默认读取过去24小时数据。'."\n"
                            ."\n"
                            .'格式为：YYYY-MM-DDThh:mm:ssZ'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '2015-12-05T12:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间需大于起始时间，北京时间。'."\n"
                            ."\n"
                            .'格式为：YYYY-MM-DDThh:mm:ssZ',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2015-12-07T12:00:00Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'EndTime' => [
                                'description' => '结束时间',
                                'type' => 'string',
                                'example' => '2015-12-05T12:00:00Z',
                            ],
                            'StartTime' => [
                                'description' => '开始时间',
                                'type' => 'string',
                                'example' => '2015-12-07T12:00:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '2E5AD83F-BD7B-462E-8319-2E30E305519A',
                            ],
                            'DomainName' => [
                                'description' => '加速域名信息',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'DataInterval' => [
                                'description' => '每条记录的时间间隔，固定值1天',
                                'type' => 'string',
                                'example' => '86400',
                            ],
                            'Value' => [
                                'type' => 'object',
                                'properties' => [
                                    'ISPProportionData' => [
                                        'description' => '各运营商访问占比数据列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TotalQuery' => [
                                                    'description' => '总请求次数',
                                                    'type' => 'string',
                                                    'example' => '88',
                                                ],
                                                'TotalBytes' => [
                                                    'description' => '总流量',
                                                    'type' => 'string',
                                                    'example' => '254166333',
                                                ],
                                                'AvgResponseRate' => [
                                                    'description' => '平均响应速度，单位：`byte/秒`',
                                                    'type' => 'string',
                                                    'example' => '787.8073097249128',
                                                ],
                                                'AvgResponseTime' => [
                                                    'description' => '平均响应时间，单位：毫秒',
                                                    'type' => 'string',
                                                    'example' => '3666.193181818182',
                                                ],
                                                'ReqErrRate' => [
                                                    'description' => '请求错误率',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'AvgObjectSize' => [
                                                    'description' => '响应平均大小，单位：`byte`',
                                                    'type' => 'string',
                                                    'example' => '2888253.7875',
                                                ],
                                                'Bps' => [
                                                    'description' => '带宽',
                                                    'type' => 'string',
                                                    'example' => '40343.86242857143',
                                                ],
                                                'Qps' => [
                                                    'description' => '每秒查询率',
                                                    'type' => 'string',
                                                    'example' => '0.001746031746031746',
                                                ],
                                                'Proportion' => [
                                                    'description' => '占比使用数据',
                                                    'type' => 'string',
                                                    'example' => '0.33908754623921084',
                                                ],
                                                'IspEname' => [
                                                    'description' => '运营商英文名称',
                                                    'type' => 'string',
                                                    'example' => 'China Mobile',
                                                ],
                                                'ISP' => [
                                                    'description' => '运营商信息',
                                                    'type' => 'string',
                                                    'example' => '中国移动',
                                                ],
                                                'BytesProportion' => [
                                                    'description' => '总流量占比，如返回90即为90%',
                                                    'type' => 'string',
                                                    'example' => '0.37532921137846464',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidStartTime.Malformed',
                        'errorMessage' => 'Specified StartTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Malformed',
                        'errorMessage' => 'Specified EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter StartTime is not supported.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Mismatch',
                        'errorMessage' => 'Specified EndTime does not math the specified StartTime.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidDomain.NotFound',
                        'errorMessage' => 'The domain provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2015-12-05T12:00:00Z\\",\\n  \\"StartTime\\": \\"2015-12-07T12:00:00Z\\",\\n  \\"RequestId\\": \\"2E5AD83F-BD7B-462E-8319-2E30E305519A\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"DataInterval\\": \\"86400\\",\\n  \\"Value\\": {\\n    \\"ISPProportionData\\": [\\n      {\\n        \\"TotalQuery\\": \\"88\\",\\n        \\"TotalBytes\\": \\"254166333\\",\\n        \\"AvgResponseRate\\": \\"787.8073097249128\\",\\n        \\"AvgResponseTime\\": \\"3666.193181818182\\",\\n        \\"ReqErrRate\\": \\"0\\",\\n        \\"AvgObjectSize\\": \\"2888253.7875\\",\\n        \\"Bps\\": \\"40343.86242857143\\",\\n        \\"Qps\\": \\"0.001746031746031746\\",\\n        \\"Proportion\\": \\"0.33908754623921084\\",\\n        \\"IspEname\\": \\"China Mobile\\",\\n        \\"ISP\\": \\"中国移动\\",\\n        \\"BytesProportion\\": \\"0.37532921137846464\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<EndTime>2015-12-05T12:00:00Z</EndTime>\\n<RequestId>2E5AD83F-BD7B-462E-8319-2E30E305519A</RequestId>\\n<DomainName>example.com</DomainName>\\n<StartTime>2015-12-07T12:00:00Z</StartTime>\\n<DataInterval>86400</DataInterval>\\n<Value>\\n    <ISPProportionData>\\n        <AvgObjectSize>2888253.7875</AvgObjectSize>\\n        <BytesProportion>0.37532921137846464</BytesProportion>\\n        <Bps>40343.86242857143</Bps>\\n        <TotalQuery>88</TotalQuery>\\n        <Qps>0.001746031746031746</Qps>\\n        <Proportion>0.33908754623921084</Proportion>\\n        <TotalBytes>254166333</TotalBytes>\\n        <ISP>中国移动</ISP>\\n        <AvgResponseRate>787.8073097249128</AvgResponseRate>\\n        <ReqErrRate>0</ReqErrRate>\\n        <IspEname>China Mobile</IspEname>\\n        <AvgResponseTime>3666.193181818182</AvgResponseTime>\\n    </ISPProportionData>\\n</Value>","errorExample":""}]',
            'title' => '获取天粒度的用户运营商分布数据',
            'summary' => '获取加速域名的天粒度的用户运营商分布数据的统计。',
            'description' => '不指定**StartTime**和**EndTime**时，默认读取过去24小时的数据，同时支持按指定的起止时间查询，两者需要同时指定。'."\n"
                ."\n"
                .'- 只支持一个域名，或当前用户下所有域名'."\n"
                .'- 最多可获取最近90天的数据',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainRealTimeByteHitRateData' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '域名。多个之间用逗号（,）隔开。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据起始时间点。'."\n"
                            ."\n"
                            .'- 日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。'."\n"
                            .'- 不写默认读取过去1小时数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2015-12-10T20:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据结束时间点。'."\n"
                            ."\n"
                            .'- 结束时间需大于起始时间。'."\n"
                            .'- 获日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2015-12-10T20:01:00Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B955107D-E658-4E77-B913-E0AC3D31693E',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'ByteHitRateDataModel' => [
                                        'description' => '字节命中率数据列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ByteHitRate' => [
                                                    'description' => '请求命中率数据',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.8956940476262277',
                                                ],
                                                'TimeStamp' => [
                                                    'description' => '数据时间戳，日期格式按照ISO8601表示法，并使用UTC时间。例如：2016-10-20T04:00:00Z。',
                                                    'type' => 'string',
                                                    'example' => '2016-10-20T04:00:00Z',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidTime.Malformed',
                        'errorMessage' => 'Specified StartTime or EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidDomainName.Malformed',
                        'errorMessage' => 'Specified domain name is malformed.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B955107D-E658-4E77-B913-E0AC3D31693E\\",\\n  \\"Data\\": {\\n    \\"ByteHitRateDataModel\\": [\\n      {\\n        \\"ByteHitRate\\": 0.8956940476262277,\\n        \\"TimeStamp\\": \\"2016-10-20T04:00:00Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainRealTimeByteHitRateDataResponse>\\r\\n    <Data>\\r\\n        <TimeStamp>2016-10-20T04:00:00Z</TimeStamp>\\r\\n        <ReqHitRate>0.8956940476262277</ReqHitRate>\\r\\n    </Data>\\r\\n    <RequestId>B955107D-E658-4E77-B913-E0AC3D31693E</RequestId>\\r\\n</DescribeScdnDomainRealTimeByteHitRateDataResponse>","errorExample":""}]',
            'title' => '获取域名1分钟粒度字节命中率的数据',
            'summary' => '调用DescribeScdnDomainRealTimeByteHitRateData获取域名1分钟粒度字节命中率的数据。',
            'description' => '**调用该接口前，请您注意：**'."\n"
                ."\n"
                .'- 可以查询7天内的数据，单次查询StartTime和EndTime跨度不能超过24小时。'."\n"
                .'- 指定StartTime，未指定EndTime的情况：默认查询从指定的StartTime起一小时内的数据。'."\n"
                .'- 指定EndTime，未指定SdtartTime的情况：默认查询从指定的EndTime起向前推一个小时内的数据。'."\n"
                .'- 由于存在多域名合并存储的情况，可能会导致命中率数据不准确，具体情况以配置为准。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainRealTimeHttpCodeData' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可输入需要查询的加速域名。支持批量域名查询，多个域名用逗号（,）分隔。'."\n"
                            ."\n"
                            .'> 如果参数为空，默认返回所有加速域名合并后数据。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据起始时间点。'."\n"
                            ."\n"
                            .'- 日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。'."\n"
                            .'- 最小数据粒度为5分钟。'."\n"
                            .'- 不写默认读取过去24小时数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2017-12-10T20:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据结束时间点。'."\n"
                            ."\n"
                            .'- 结束时间需大于起始时间。'."\n"
                            .'- 获日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2017-12-10T21:00:00Z',
                    ],
                ],
                [
                    'name' => 'IspNameEn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运营商英文名，不传为所有运营商。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'unicom',
                    ],
                ],
                [
                    'name' => 'LocationNameEn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '区域英文名，不传为所有区域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'beijing',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'EndTime' => [
                                'description' => '结束时间',
                                'type' => 'string',
                                'example' => '2017-12-10T21:00:00Z',
                            ],
                            'StartTime' => [
                                'description' => '开始时间',
                                'type' => 'string',
                                'example' => '2017-12-10T20:00:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B955107D-E658-4E77-B913-E0AC3D31693E	',
                            ],
                            'DomainName' => [
                                'description' => '加速域名信息',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'DataInterval' => [
                                'description' => '每条记录的时间间隔，以秒为单位。',
                                'type' => 'string',
                                'example' => '300',
                            ],
                            'RealTimeHttpCodeData' => [
                                'type' => 'object',
                                'properties' => [
                                    'UsageData' => [
                                        'description' => '各返回码占比使用数据列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TimeStamp' => [
                                                    'description' => '时间片起始时刻',
                                                    'type' => 'string',
                                                    'example' => '2017-12-10T20:00:00Z',
                                                ],
                                                'Value' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'RealTimeCodeProportionData' => [
                                                            'description' => '返回码信息',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Code' => [
                                                                        'description' => 'HTTP返回码',
                                                                        'type' => 'string',
                                                                        'example' => '111111',
                                                                    ],
                                                                    'Proportion' => [
                                                                        'description' => '占比使用数据',
                                                                        'type' => 'string',
                                                                        'example' => '0.01155980271270037',
                                                                    ],
                                                                    'Count' => [
                                                                        'description' => '数量',
                                                                        'type' => 'string',
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
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingTimeParameter',
                        'errorMessage' => 'The StartTime and EndTime must be both specified.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.Malformed',
                        'errorMessage' => 'The specified StartTime is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Malformed',
                        'errorMessage' => 'The specified EndTime is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Mismatch',
                        'errorMessage' => 'The specified EndTime is earlier than the StartTime.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.ValueNotSupported',
                        'errorMessage' => 'The specified StartTime is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2017-12-10T21:00:00Z\\",\\n  \\"StartTime\\": \\"2017-12-10T20:00:00Z\\",\\n  \\"RequestId\\": \\"B955107D-E658-4E77-B913-E0AC3D31693E\\\\t\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"DataInterval\\": \\"300\\",\\n  \\"RealTimeHttpCodeData\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"TimeStamp\\": \\"2017-12-10T20:00:00Z\\",\\n        \\"Value\\": {\\n          \\"RealTimeCodeProportionData\\": [\\n            {\\n              \\"Code\\": \\"111111\\",\\n              \\"Proportion\\": \\"0.01155980271270037\\",\\n              \\"Count\\": \\"1\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainRealTimeHttpCodeDataResponse>\\r\\n    <DataInterval>300</DataInterval>\\r\\n    <RequestId>B955107D-E658-4E77-B913-E0AC3D31693E</RequestId>\\r\\n    <DomainName>example.com</DomainName>\\r\\n    <EndTime>2017-12-10T21:00:00Z</EndTime>\\r\\n    <StartTime>2017-12-10T20:00:00Z</StartTime>\\r\\n    <RealTimeHttpCodeData>\\r\\n        <TimeStamp>2017-12-10T20:00:00Z</TimeStamp>\\r\\n        <RealTimeCodeProportionData>\\r\\n            <Count>1</Count>\\r\\n            <Proportion>0.01155980271270037</Proportion>\\r\\n            <Code>111111</Code>\\r\\n        </RealTimeCodeProportionData>\\r\\n    </RealTimeHttpCodeData>\\r\\n</DescribeScdnDomainRealTimeHttpCodeDataResponse>","errorExample":""}]',
            'title' => '获取加速域名HTTP返回码占比数据',
            'summary' => '获取加速域名1分钟粒度的HTTP返回码占比数据。',
            'description' => '**调用该接口前，请您注意：**'."\n"
                ."\n"
                .'- 单次查询StartTime和EndTime跨度不能超过24小时。'."\n"
                .'- 如果StartTime和EndTime均未指定，默认返回当前时间起一小时内的数据。'."\n"
                .'- 支持批量域名查询，多个域名用逗号（,）分隔。'."\n"
                .'- 最多可获取最近7天的数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainRealTimeQpsData' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '域名。多个之间用英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'IspNameEn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运营商英文名，不传为所有运营商。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'telecom',
                    ],
                ],
                [
                    'name' => 'LocationNameEn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '区域英文名，不传为所有区域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'telecom',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '起始时间，日期格式按照ISO8601表示法，并使用UTC时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2018-01-02T11:26:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间，日期格式按照ISO8601表示法，并使用UTC时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2018-01-02T11:27:00Z',
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
                                'example' => '32DC9806-E9F9-4490-BBDC-B3A9E32FCC1D',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'QpsModel' => [
                                        'description' => '数据列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Qps' => [
                                                    'description' => 'QPS数据。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '1851.25',
                                                ],
                                                'TimeStamp' => [
                                                    'description' => '数据时间戳，日期格式按照ISO8601表示法，并使用UTC时间。例如：2016-10-20T04:00:00Z。',
                                                    'type' => 'string',
                                                    'example' => '2018-01-02T11:26:00Z',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidTime.Malformed',
                        'errorMessage' => 'Specified StartTime or EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidDomainName.Malformed',
                        'errorMessage' => 'Specified domain name is malformed.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"32DC9806-E9F9-4490-BBDC-B3A9E32FCC1D\\",\\n  \\"Data\\": {\\n    \\"QpsModel\\": [\\n      {\\n        \\"Qps\\": 1851.25,\\n        \\"TimeStamp\\": \\"2018-01-02T11:26:00Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainRealTimeQpsDataResponse>\\r\\n    <Data>\\r\\n        <QpsModel>\\r\\n            <TimeStamp>2018-01-02T11:26:00Z</TimeStamp>\\r\\n            <Qps>1851.25</Qps>\\r\\n        </QpsModel>\\r\\n        <QpsModel>\\r\\n            <TimeStamp>2018-01-02T11:25:00Z</TimeStamp>\\r\\n            <Qps>8967.7</Qps>\\r\\n        </QpsModel>\\r\\n    </Data>\\r\\n    <RequestId>32DC9806-E9F9-4490-BBDC-B3A9E32FCC1D</RequestId>\\r\\n</DescribeScdnDomainRealTimeQpsDataResponse>","errorExample":""}]',
            'title' => '获取域名1分钟粒度每秒访问次数的数据',
            'summary' => '调用DescribeScdnDomainRealTimeQpsData获取域名1分钟粒度每秒访问次数的数据。',
            'description' => '> - 可以查询7天内的数据，单次查询**StartTime**和**EndTime**跨度不能超过24小时。'."\n"
                .'- 指定**StartTime**，未指定**EndTime**的情况：默认查询从指定的**StartTime**起一小时内的数据。'."\n"
                .'- 指定**EndTime**，未指定**SdtartTime**的情况：默认查询从指定的**EndTime**起向前推一个小时内的数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainRealTimeReqHitRateData' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '起始时间，日期格式按照ISO8601表示法，并使用UTC时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2017-12-10T20:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间，日期格式按照ISO8601表示法，并使用UTC时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2017-12-10T21:01:00Z',
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
                                'example' => 'B955107D-E658-4E77-B913-E0AC3D31693E',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'ReqHitRateDataModel' => [
                                        'description' => '字节命中率数据列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ReqHitRate' => [
                                                    'description' => '请求命中率数据。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.8956940476262277',
                                                ],
                                                'TimeStamp' => [
                                                    'description' => '数据时间戳，日期格式按照ISO8601表示法，并使用UTC时间。例如：2016-10-20T04:00:00Z。',
                                                    'type' => 'string',
                                                    'example' => '2016-10-20T04:00:00Z',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidTime.Malformed',
                        'errorMessage' => 'Specified StartTime or EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidDomainName.Malformed',
                        'errorMessage' => 'Specified domain name is malformed.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B955107D-E658-4E77-B913-E0AC3D31693E\\",\\n  \\"Data\\": {\\n    \\"ReqHitRateDataModel\\": [\\n      {\\n        \\"ReqHitRate\\": 0.8956940476262277,\\n        \\"TimeStamp\\": \\"2016-10-20T04:00:00Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainRealTimeReqHitRateDataResponse>\\r\\n    <Data>\\r\\n        <TimeStamp>2016-10-20T04:00:00Z</TimeStamp>\\r\\n        <ReqHitRate>0.8956940476262277</ReqHitRate>\\r\\n    </Data>\\r\\n    <RequestId>B955107D-E658-4E77-B913-E0AC3D31693E</RequestId>\\r\\n</DescribeScdnDomainRealTimeReqHitRateDataResponse>","errorExample":""}]',
            'title' => '获取域名1分钟粒度请求命中率的数据',
            'summary' => '调用DescribeScdnDomainRealTimeReqHitRateData获取域名1分钟粒度请求命中率的数据。',
            'description' => '**调用该接口前，请您注意：**'."\n"
                ."\n"
                .'- 可以查询7天内的数据，单次查询StartTime和EndTime跨度不能超过24小时。如果StartTime和EndTime均未指定，默认返回当前时间起一小时内的数据。'."\n"
                .'- 指定StartTime，未指定EndTime的情况：默认查询从指定的StartTime起一小时内的数据。'."\n"
                .'- 指定EndTime，未指定StartTime的情况：默认查询从指定的EndTime起向前推一个小时内的数据。'."\n"
                .'- 由于存在多域名合并存储的情况，可能会导致命中率数据不准确，具体情况以配置为准。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainRealTimeSrcBpsData' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要查询的加速域名。支持批量域名查询，多个域名用逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据起始时间点。'."\n"
                            ."\n"
                            .'- 日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。'."\n"
                            .'- 不写默认读取过去1小时数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2015-12-10T20:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据结束时间点。'."\n"
                            ."\n"
                            .'- 结束时间需大于起始时间。'."\n"
                            .'- 获日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2015-12-10T20:01:00Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'EndTime' => [
                                'description' => '结束时间',
                                'type' => 'string',
                                'example' => '2015-12-10T20:01:00Z',
                            ],
                            'StartTime' => [
                                'description' => '开始时间',
                                'type' => 'string',
                                'example' => '2015-12-10T20:00:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '7CBCD6AD-B016-42E5-AE0B-B3731DE8F755',
                            ],
                            'DomainName' => [
                                'description' => '加速域名信息',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'DataInterval' => [
                                'description' => '每条记录的时间间隔，以秒为单位。',
                                'type' => 'string',
                                'example' => '300',
                            ],
                            'RealTimeSrcBpsDataPerInterval' => [
                                'type' => 'object',
                                'properties' => [
                                    'DataModule' => [
                                        'description' => '每个时间间隔的回源带宽数据',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Value' => [
                                                    'description' => '详细使用数据',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'TimeStamp' => [
                                                    'description' => '时间片起始时刻',
                                                    'type' => 'string',
                                                    'example' => '2015-12-10T20:01:00Z',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingTimeParameter',
                        'errorMessage' => 'The StartTime and EndTime must be both specified.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.Malformed',
                        'errorMessage' => 'The specified StartTime is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Malformed',
                        'errorMessage' => 'The specified EndTime is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Mismatch',
                        'errorMessage' => 'The specified EndTime is earlier than the StartTime.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.ValueNotSupported',
                        'errorMessage' => 'The specified StartTime is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2015-12-10T20:01:00Z\\",\\n  \\"StartTime\\": \\"2015-12-10T20:00:00Z\\",\\n  \\"RequestId\\": \\"7CBCD6AD-B016-42E5-AE0B-B3731DE8F755\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"DataInterval\\": \\"300\\",\\n  \\"RealTimeSrcBpsDataPerInterval\\": {\\n    \\"DataModule\\": [\\n      {\\n        \\"Value\\": \\"0\\",\\n        \\"TimeStamp\\": \\"2015-12-10T20:01:00Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainRealTimeSrcBpsDataResponse>\\r\\n    <RealTimeSrcBpsDataPerInterval>\\r\\n        <DataModule>\\r\\n            <TimeStamp>2015-12-10T20:00:00Z</TimeStamp>\\r\\n            <Value>821</Value>\\r\\n        </DataModule>\\r\\n        <DataModule>\\r\\n            <TimeStamp>2015-12-10T20:01:00Z</TimeStamp>\\r\\n            <Value>0</Value>\\r\\n        </DataModule>\\r\\n    </RealTimeSrcBpsDataPerInterval>\\r\\n    <DataInterval>60</DataInterval>\\r\\n    <RequestId>7CBCD6AD-B016-42E5-AE0B-B3731DE8F755</RequestId>\\r\\n    <DomainName>example.com</DomainName>\\r\\n    <EndTime>2015-12-10T20:01:00Z</EndTime>\\r\\n    <StartTime>2015-12-10T20:00:00Z</StartTime>\\r\\n</DescribeScdnDomainRealTimeSrcBpsDataResponse>","errorExample":""}]',
            'title' => '获取域名一分钟粒度回源带宽的数据',
            'summary' => '调用DescribeScdnDomainRealTimeSrcBpsData获取域名一分钟粒度回源带宽的数据。',
            'description' => '**调用该接口前，请您注意：**'."\n"
                ."\n"
                .'- 单次查询StartTime和EndTime跨度不能超过24小时。'."\n"
                .'- 如果StartTime和EndTime均未指定，默认返回当前时间起一小时内的数据。'."\n"
                .'- 支持批量域名查询，多个域名用逗号（,）分隔。'."\n"
                .'- 最多可获取最近7天的数据。',
        ],
        'DescribeScdnDomainRegionData' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要查询的加速域名，只支持一个域名，不写代表所有。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据起始时间点，北京时间。不写默认读取过去24小时数据。'."\n"
                            ."\n"
                            .'格式为：YYYY-MM-DDThh:mm:ssZ'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '2015-12-05T12:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间需大于起始时间，北京时间。'."\n"
                            ."\n"
                            .'格式为：YYYY-MM-DDThh:mm:ssZ',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2015-12-07T12:00:00Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'EndTime' => [
                                'description' => '结束时间',
                                'type' => 'string',
                                'example' => '2015-12-05T12:00:00Z',
                            ],
                            'StartTime' => [
                                'description' => '开始时间',
                                'type' => 'string',
                                'example' => '2015-12-07T12:00:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '2E5AD83F-BD7B-462E-8319-2E30E305519A',
                            ],
                            'DomainName' => [
                                'description' => '加速域名信息',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'DataInterval' => [
                                'description' => '每条记录的时间间隔，固定值1天',
                                'type' => 'string',
                                'example' => '86400',
                            ],
                            'Value' => [
                                'type' => 'object',
                                'properties' => [
                                    'RegionProportionData' => [
                                        'description' => '各地区访问占比数据列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TotalQuery' => [
                                                    'description' => '总请求次数',
                                                    'type' => 'string',
                                                    'example' => '3',
                                                ],
                                                'TotalBytes' => [
                                                    'description' => '总流量',
                                                    'type' => 'string',
                                                    'example' => '2400057',
                                                ],
                                                'AvgResponseRate' => [
                                                    'description' => '平均响应速度，单位：`byte/秒`',
                                                    'type' => 'string',
                                                    'example' => '154.3345765545624',
                                                ],
                                                'AvgResponseTime' => [
                                                    'description' => '平均响应时间，单位：毫秒',
                                                    'type' => 'string',
                                                    'example' => '5183.666666666667',
                                                ],
                                                'ReqErrRate' => [
                                                    'description' => '请求错误率',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'AvgObjectSize' => [
                                                    'description' => '响应平均大小，单位：`byte`',
                                                    'type' => 'string',
                                                    'example' => '800019.0',
                                                ],
                                                'Bps' => [
                                                    'description' => '带宽',
                                                    'type' => 'string',
                                                    'example' => '380.9614285714286',
                                                ],
                                                'Qps' => [
                                                    'description' => '每秒查询率',
                                                    'type' => 'string',
                                                    'example' => '5.9523809523809524E-5',
                                                ],
                                                'RegionEname' => [
                                                    'description' => '地区英文名称',
                                                    'type' => 'string',
                                                    'example' => '" "',
                                                ],
                                                'Region' => [
                                                    'description' => '地区信息',
                                                    'type' => 'string',
                                                    'example' => '日本',
                                                ],
                                                'Proportion' => [
                                                    'description' => '访问占比数据，如返回90即为90%',
                                                    'type' => 'string',
                                                    'example' => '0.01155980271270037',
                                                ],
                                                'BytesProportion' => [
                                                    'description' => '总流量占比，如返回90即为90%',
                                                    'type' => 'string',
                                                    'example' => '0.003544181046236794',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidStartTime.Malformed',
                        'errorMessage' => 'Specified StartTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Malformed',
                        'errorMessage' => 'Specified EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter StartTime is not supported.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Mismatch',
                        'errorMessage' => 'Specified EndTime does not math the specified StartTime.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidDomain.NotFound',
                        'errorMessage' => 'The domain provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2015-12-05T12:00:00Z\\",\\n  \\"StartTime\\": \\"2015-12-07T12:00:00Z\\",\\n  \\"RequestId\\": \\"2E5AD83F-BD7B-462E-8319-2E30E305519A\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"DataInterval\\": \\"86400\\",\\n  \\"Value\\": {\\n    \\"RegionProportionData\\": [\\n      {\\n        \\"TotalQuery\\": \\"3\\",\\n        \\"TotalBytes\\": \\"2400057\\",\\n        \\"AvgResponseRate\\": \\"154.3345765545624\\",\\n        \\"AvgResponseTime\\": \\"5183.666666666667\\",\\n        \\"ReqErrRate\\": \\"0\\",\\n        \\"AvgObjectSize\\": \\"800019.0\\",\\n        \\"Bps\\": \\"380.9614285714286\\",\\n        \\"Qps\\": \\"5.9523809523809524E-5\\",\\n        \\"RegionEname\\": \\"\\\\\\" \\\\\\"\\",\\n        \\"Region\\": \\"日本\\",\\n        \\"Proportion\\": \\"0.01155980271270037\\",\\n        \\"BytesProportion\\": \\"0.003544181046236794\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainRegionDataResponse>\\r\\n    <Value>\\r\\n        <RegionProportionData>\\r\\n            <Bps>380.9614285714286</Bps>\\r\\n            <Proportion>0.01155980271270037</Proportion>\\r\\n            <TotalBytes>2400057</TotalBytes>\\r\\n            <BytesProportion>0.003544181046236794</BytesProportion>\\r\\n            <TotalQuery>3</TotalQuery>\\r\\n            <RegionEname/>\\r\\n            <Region>日本</Region>\\r\\n            <AvgResponseRate>154.3345765545624</AvgResponseRate>\\r\\n            <AvgObjectSize>800019.0</AvgObjectSize>\\r\\n            <Qps>5.9523809523809524E-5</Qps>\\r\\n            <AvgResponseTime>5183.666666666667</AvgResponseTime>\\r\\n        </RegionProportionData>\\r\\n        <RegionProportionData>\\r\\n            <Bps>25110.431412698414</Bps>\\r\\n            <Proportion>0.31211467324291</Proportion>\\r\\n            <TotalBytes>158195717</TotalBytes>\\r\\n            <BytesProportion>0.23360872886644055</BytesProportion>\\r\\n            <TotalQuery>81</TotalQuery>\\r\\n            <RegionEname>xizang</RegionEname>\\r\\n            <Region>西藏自治区</Region>\\r\\n            <AvgResponseRate>1397.1430909315718</AvgResponseRate>\\r\\n            <AvgObjectSize>1953033.5543209878</AvgObjectSize>\\r\\n            <Qps>0.0016071428571428571</Qps>\\r\\n            <AvgResponseTime>1397.8765432098764</AvgResponseTime>\\r\\n        </RegionProportionData>\\r\\n        <RegionProportionData>\\r\\n            <Bps>40343.86242857143</Bps>\\r\\n            <Proportion>0.33908754623921084</Proportion>\\r\\n            <TotalBytes>254166333</TotalBytes>\\r\\n            <BytesProportion>0.37532921137846464</BytesProportion>\\r\\n            <TotalQuery>88</TotalQuery>\\r\\n            <RegionEname>chongqing</RegionEname>\\r\\n            <Region>重庆市</Region>\\r\\n            <AvgResponseRate>787.8073097249128</AvgResponseRate>\\r\\n            <AvgObjectSize>2888253.7875</AvgObjectSize>\\r\\n            <Qps>0.001746031746031746</Qps>\\r\\n            <AvgResponseTime>3666.193181818182</AvgResponseTime>\\r\\n        </RegionProportionData>\\r\\n    </Value>\\r\\n    <DataInterval>86400</DataInterval>\\r\\n    <RequestId>2E5AD83F-BD7B-462E-8319-2E30E305519A</RequestId>\\r\\n    <DomainName>example.com</DomainName>\\r\\n    <EndTime>2015-12-05T12:00:00Z</EndTime>\\r\\n    <StartTime>2015-12-07T12:00:00Z</StartTime>\\r\\n</DescribeScdnDomainRegionDataResponse>","errorExample":""}]',
            'title' => '获取用户区域分布数据统计',
            'summary' => '获取加速域名天粒度的用户区域分布的数据统计。',
            'description' => '不指定**StartTime**和**EndTime**时，默认读取过去24小时的数据，同时支持按指定的起止时间查询，两者需要同时指定。'."\n"
                ."\n"
                .'- 最多可获取90天的数据',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainTopReferVisit' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加速域名信息，只支持一个域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始获取数据的时间点。不写默认读取过去24小时数据。'."\n"
                            ."\n"
                            .'格式为：YYYY-MM-DDThh:mm:ssZ。'."\n"
                            ."\n"
                            .'查询某天的数据，建议传YYYY-MM-DDT16:00:00Z。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2018-10-03T16:00:00Z',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序方式，支持**traf**和**pv**，默认**pv**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pv',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'StartTime' => [
                                'description' => '查询指定日期。',
                                'type' => 'string',
                                'example' => '2018-10-03T16:00:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '95994621-8382-464B-8762-C708E73568D1',
                            ],
                            'DomainName' => [
                                'description' => '加速域名信息。',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'TopReferList' => [
                                'type' => 'object',
                                'properties' => [
                                    'ReferList' => [
                                        'description' => '热门ReferUrl列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Flow' => [
                                                    'description' => '流量。单位：byte。',
                                                    'type' => 'string',
                                                    'example' => '460486880',
                                                ],
                                                'FlowProportion' => [
                                                    'description' => '流量占比。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.35',
                                                ],
                                                'VisitData' => [
                                                    'description' => '访问次数。',
                                                    'type' => 'string',
                                                    'example' => '229567',
                                                ],
                                                'ReferDetail' => [
                                                    'description' => '完整的ReferUrl地址。',
                                                    'type' => 'string',
                                                    'example' => '123.XXX.XXX.158',
                                                ],
                                                'VisitProportion' => [
                                                    'description' => '访问占比。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.35',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidStartTime.Malformed',
                        'errorMessage' => 'Specified StartTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Malformed',
                        'errorMessage' => 'Specified EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter StartTime is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"StartTime\\": \\"2018-10-03T16:00:00Z\\",\\n  \\"RequestId\\": \\"95994621-8382-464B-8762-C708E73568D1\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"TopReferList\\": {\\n    \\"ReferList\\": [\\n      {\\n        \\"Flow\\": \\"460486880\\",\\n        \\"FlowProportion\\": 0.35,\\n        \\"VisitData\\": \\"229567\\",\\n        \\"ReferDetail\\": \\"123.XXX.XXX.158\\",\\n        \\"VisitProportion\\": 0.35\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainTopReferVisitResponse>\\n    <TopReferList>\\n        <ReferList>\\n            <Flow>460486880</Flow>\\n            <VisitProportion>0.35</VisitProportion>\\n            <VisitData>229567</VisitData>\\n            <ReferDetail>-</ReferDetail>\\n            <FlowProportion>0.35</FlowProportion>\\n        </ReferList>\\n        <ReferList>\\n            <Flow>460486880</Flow>\\n            <VisitProportion>0.35</VisitProportion>\\n            <VisitData>2496</VisitData>\\n            <ReferDetail>123.XXX.XXX.158</ReferDetail>\\n            <FlowProportion>0.35</FlowProportion>\\n        </ReferList>\\n        <ReferList>\\n            <Flow>460486880</Flow>\\n            <VisitProportion>0.35</VisitProportion>\\n            <VisitData>448</VisitData>\\n            <ReferDetail>example.aliyundoc.com</ReferDetail>\\n            <FlowProportion>0.35</FlowProportion>\\n        </ReferList>\\n        <ReferList>\\n            <Flow>460486880</Flow>\\n            <VisitProportion>0.35</VisitProportion>\\n            <VisitData>3</VisitData>\\n            <ReferDetail>example.aliyundoc.com</ReferDetail>\\n            <FlowProportion>0.35</FlowProportion>\\n        </ReferList>\\n    </TopReferList>\\n    <RequestId>95994621-8382-464B-8762-C708E73568D1</RequestId>\\n    <DomainName>example.com</DomainName>\\n    <StartTime>2018-10-03T16:00:00Z</StartTime>\\n</DescribeScdnDomainTopReferVisitResponse>","errorExample":""}]',
            'title' => '获取加速域名某天热门页面引用次数排名',
            'summary' => '获取加速域名某天的热门页面引用次数排名。',
            'description' => '> - 不指定StartTime时，默认读取过去1天的数据。'."\n"
                .'- 只支持一个域名。最多可获取最近90天的数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainTopUrlVisit' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加速域名，只支持一个域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始获取数据的时间点，不填默认读取过去24小时的数据。'."\n"
                            ."\n"
                            .'> 格式为：YYYY-MM-DDThh:mm:ssZ，查询某天的数据，建议传YYYY-MM-DDT16:00:00Z。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2018-10-03T16:00:00Z',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序方式，支持**traf**和**pv**，默认为**pv**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pv',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'StartTime' => [
                                'description' => '查询指定日期',
                                'type' => 'string',
                                'example' => '2018-10-03T16:00:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '64D28B53-5902-409B-94F6-FD46680144FE',
                            ],
                            'DomainName' => [
                                'description' => '加速域名',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'AllUrlList' => [
                                'type' => 'object',
                                'properties' => [
                                    'UrlList' => [
                                        'description' => '全部热门URL列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Flow' => [
                                                    'description' => '流量。单位：Byte。',
                                                    'type' => 'string',
                                                    'example' => '460486880',
                                                ],
                                                'UrlDetail' => [
                                                    'description' => '完整的URL地址',
                                                    'type' => 'string',
                                                    'example' => 'http://example.com/nn_live/nn_x64/a0.m3u8',
                                                ],
                                                'FlowProportion' => [
                                                    'description' => '流量占比',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.35',
                                                ],
                                                'VisitData' => [
                                                    'description' => '访问次数',
                                                    'type' => 'string',
                                                    'example' => '161673',
                                                ],
                                                'VisitProportion' => [
                                                    'description' => '访问占比',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.35',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Url200List' => [
                                'type' => 'object',
                                'properties' => [
                                    'UrlList' => [
                                        'description' => '返回为2xx的URL列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Flow' => [
                                                    'description' => '流量。单位：Byte。',
                                                    'type' => 'string',
                                                    'example' => '460486880',
                                                ],
                                                'UrlDetail' => [
                                                    'description' => '完整的URL地址',
                                                    'type' => 'string',
                                                    'example' => 'http://example.com/nn_live/nn_x64/a0.m3u8',
                                                ],
                                                'FlowProportion' => [
                                                    'description' => '流量占比',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.35',
                                                ],
                                                'VisitData' => [
                                                    'description' => '访问次数',
                                                    'type' => 'string',
                                                    'example' => '161673',
                                                ],
                                                'VisitProportion' => [
                                                    'description' => '访问占比',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.35',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Url300List' => [
                                'type' => 'object',
                                'properties' => [
                                    'UrlList' => [
                                        'description' => '返回为3xx的URL列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Flow' => [
                                                    'description' => '流量。单位：Byte。',
                                                    'type' => 'string',
                                                    'example' => '460486880',
                                                ],
                                                'UrlDetail' => [
                                                    'description' => '完整的URL地址',
                                                    'type' => 'string',
                                                    'example' => 'http://example.com/nn_live/nn_x64/a0.m3u8',
                                                ],
                                                'FlowProportion' => [
                                                    'description' => '流量占比',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.35',
                                                ],
                                                'VisitData' => [
                                                    'description' => '访问次数',
                                                    'type' => 'string',
                                                    'example' => '161673',
                                                ],
                                                'VisitProportion' => [
                                                    'description' => '访问占比',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.35',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Url400List' => [
                                'type' => 'object',
                                'properties' => [
                                    'UrlList' => [
                                        'description' => '返回为4xx的URL列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Flow' => [
                                                    'description' => '流量。单位：Byte。',
                                                    'type' => 'string',
                                                    'example' => '460486880',
                                                ],
                                                'UrlDetail' => [
                                                    'description' => '完整的URL地址',
                                                    'type' => 'string',
                                                    'example' => 'http://example.com/nn_live/nn_x64/a0.m3u8',
                                                ],
                                                'FlowProportion' => [
                                                    'description' => '流量占比',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.35',
                                                ],
                                                'VisitData' => [
                                                    'description' => '访问次数',
                                                    'type' => 'string',
                                                    'example' => '161673',
                                                ],
                                                'VisitProportion' => [
                                                    'description' => '访问占比',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.35',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Url500List' => [
                                'type' => 'object',
                                'properties' => [
                                    'UrlList' => [
                                        'description' => '返回为5xx的URL列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Flow' => [
                                                    'description' => '流量。单位：Byte。',
                                                    'type' => 'string',
                                                    'example' => '460486880',
                                                ],
                                                'UrlDetail' => [
                                                    'description' => '完整的URL地址',
                                                    'type' => 'string',
                                                    'example' => 'http://example.com/nn_live/nn_x64/a0.m3u8',
                                                ],
                                                'FlowProportion' => [
                                                    'description' => '流量占比',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.35',
                                                ],
                                                'VisitData' => [
                                                    'description' => '访问次数',
                                                    'type' => 'string',
                                                    'example' => '161673',
                                                ],
                                                'VisitProportion' => [
                                                    'description' => '访问占比',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.35',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidStartTime.Malformed',
                        'errorMessage' => 'Specified StartTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Malformed',
                        'errorMessage' => 'Specified EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter StartTime is not supported.',
                    ],
                    [
                        'errorCode' => 'InvalidTime.ValueNotSupported',
                        'errorMessage' => 'StartTime or EndTime is miss match.',
                    ],
                    [
                        'errorCode' => 'InvalidDomainName.Mismatch',
                        'errorMessage' => 'The specified DomainName is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"StartTime\\": \\"2018-10-03T16:00:00Z\\",\\n  \\"RequestId\\": \\"64D28B53-5902-409B-94F6-FD46680144FE\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"AllUrlList\\": {\\n    \\"UrlList\\": [\\n      {\\n        \\"Flow\\": \\"460486880\\",\\n        \\"UrlDetail\\": \\"http://example.com/nn_live/nn_x64/a0.m3u8\\",\\n        \\"FlowProportion\\": 0.35,\\n        \\"VisitData\\": \\"161673\\",\\n        \\"VisitProportion\\": 0.35\\n      }\\n    ]\\n  },\\n  \\"Url200List\\": {\\n    \\"UrlList\\": [\\n      {\\n        \\"Flow\\": \\"460486880\\",\\n        \\"UrlDetail\\": \\"http://example.com/nn_live/nn_x64/a0.m3u8\\",\\n        \\"FlowProportion\\": 0.35,\\n        \\"VisitData\\": \\"161673\\",\\n        \\"VisitProportion\\": 0.35\\n      }\\n    ]\\n  },\\n  \\"Url300List\\": {\\n    \\"UrlList\\": [\\n      {\\n        \\"Flow\\": \\"460486880\\",\\n        \\"UrlDetail\\": \\"http://example.com/nn_live/nn_x64/a0.m3u8\\",\\n        \\"FlowProportion\\": 0.35,\\n        \\"VisitData\\": \\"161673\\",\\n        \\"VisitProportion\\": 0.35\\n      }\\n    ]\\n  },\\n  \\"Url400List\\": {\\n    \\"UrlList\\": [\\n      {\\n        \\"Flow\\": \\"460486880\\",\\n        \\"UrlDetail\\": \\"http://example.com/nn_live/nn_x64/a0.m3u8\\",\\n        \\"FlowProportion\\": 0.35,\\n        \\"VisitData\\": \\"161673\\",\\n        \\"VisitProportion\\": 0.35\\n      }\\n    ]\\n  },\\n  \\"Url500List\\": {\\n    \\"UrlList\\": [\\n      {\\n        \\"Flow\\": \\"460486880\\",\\n        \\"UrlDetail\\": \\"http://example.com/nn_live/nn_x64/a0.m3u8\\",\\n        \\"FlowProportion\\": 0.35,\\n        \\"VisitData\\": \\"161673\\",\\n        \\"VisitProportion\\": 0.35\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainTopUrlVisitResponse>\\r\\n    <Url300List>\\r\\n        <UrlList>\\r\\n            <Flow>460486880</Flow>\\r\\n            <VisitProportion>0.35</VisitProportion>\\r\\n            <VisitData>161673</VisitData>\\r\\n            <UrlDetail>http://example.com/nn_live/nn_x64/aWQ9SE5KU0GNfbGl2ZQ,,/HNJSMPP360.m3u8</UrlDetail>\\r\\n            <FlowProportion>0.35</FlowProportion>\\r\\n        </UrlList>\\r\\n        <UrlList>\\r\\n            <Flow>460486880</Flow>\\r\\n            <VisitProportion>0.35</VisitProportion>\\r\\n            <VisitData>3</VisitData>\\r\\n            <UrlDetail>http://example.com/nn_live/nn_x64/aWQ9SE5KU01QUDZXg9MQ,,/HNJSMPP360.ts</UrlDetail>\\r\\n            <FlowProportion>0.35</FlowProportion>\\r\\n        </UrlList>\\r\\n    </Url300List>\\r\\n    <AllUrlList>\\r\\n        <UrlList>\\r\\n            <Flow>460486880</Flow>\\r\\n            <VisitProportion>0.35</VisitProportion>\\r\\n            <VisitData>161673</VisitData>\\r\\n            <UrlDetail>http://example.com/nn_live/nn_x64/a0.m3u8</UrlDetail>\\r\\n            <FlowProportion>0.35</FlowProportion>\\r\\n        </UrlList>\\r\\n        <UrlList>\\r\\n            <Flow>460486880</Flow>\\r\\n            <VisitProportion>0.35</VisitProportion>\\r\\n            <VisitData>37</VisitData>\\r\\n            <UrlDetail>http://example.com/nn_live/nn_x64/ZXg9MQ,,/HNJSMPP360.ts</UrlDetail>\\r\\n            <FlowProportion>0.35</FlowProportion>\\r\\n        </UrlList>\\r\\n    </AllUrlList>\\r\\n    <Url400List>\\r\\n        <UrlList>\\r\\n            <Flow>460486880</Flow>\\r\\n            <VisitProportion>0.35</VisitProportion>\\r\\n            <VisitData>1884</VisitData>\\r\\n            <UrlDetail>http://example.com/nn_live/nn_x64/aWQ9SE5KU01QUhbGxfcGNfbGl2ZQ,,/HNJSMPP360.m3u8</UrlDetail>\\r\\n            <FlowProportion>0.35</FlowProportion>\\r\\n        </UrlList>\\r\\n        <UrlList>\\r\\n            <Flow>460486880</Flow>\\r\\n            <VisitProportion>0.35</VisitProportion>\\r\\n            <VisitData>1</VisitData>\\r\\n            <UrlDetail>http://example.com/nn_live/nn_x64/aWQ9SEEwODgmpbmRleZPTE,/HNJSMPP360.ts</UrlDetail>\\r\\n            <FlowProportion>0.35</FlowProportion>\\r\\n        </UrlList>\\r\\n    </Url400List>\\r\\n    <RequestId>64D28B53-5902-409B-94F6-FD46680144FE</RequestId>\\r\\n    <DomainName>example.com</DomainName>\\r\\n    <Url200List>\\r\\n        <UrlList>\\r\\n            <Flow>460486880</Flow>\\r\\n            <VisitProportion>0.35</VisitProportion>\\r\\n            <VisitData>161673</VisitData>\\r\\n            <UrlDetail>http://example.com/nn_live/nn_x64/aWQ9SE5KU0bGxfcGNfbGl2ZQ,,/HNJSMPP360.m3u8</UrlDetail>\\r\\n            <FlowProportion>0.35</FlowProportion>\\r\\n        </UrlList>\\r\\n        <UrlList>\\r\\n            <Flow>460486880</Flow>\\r\\n            <VisitProportion>0.35</VisitProportion>\\r\\n            <VisitData>3</VisitData>\\r\\n            <UrlDetail>http://example.com/nn_live/nn_x64/aWQ9SE5KU01QUDMlPTIwMTxMDk5ZXg9MQ,,/HNJSMPP360.ts</UrlDetail>\\r\\n            <FlowProportion>0.35</FlowProportion>\\r\\n        </UrlList>\\r\\n    </Url200List>\\r\\n    <StartTime>2018-10-03T16:00:00Z</StartTime>\\r\\n    <Url500List>\\r\\n        <UrlList>\\r\\n            <Flow>460486880</Flow>\\r\\n            <VisitProportion>0.35</VisitProportion>\\r\\n            <VisitData>161673</VisitData>\\r\\n            <UrlDetail>http://example.com/nn_live/nn_x64/aWQ9SE5KU0GNfbGl2ZQ,,/HNJSMPP360.m3u8</UrlDetail>\\r\\n            <FlowProportion>0.35</FlowProportion>\\r\\n        </UrlList>\\r\\n        <UrlList>\\r\\n            <Flow>460486880</Flow>\\r\\n            <VisitProportion>0.35</VisitProportion>\\r\\n            <VisitData>3</VisitData>\\r\\n            <UrlDetail>http://example.com/nn_live/nn_x64/aWQ9SE5KU01QUDZXg9MQ,,/HNJSMPP360.ts</UrlDetail>\\r\\n            <FlowProportion>0.35</FlowProportion>\\r\\n        </UrlList>\\r\\n    </Url500List>\\r\\n</DescribeScdnDomainTopUrlVisitResponse>","errorExample":""}]',
            'title' => '获取加速域名某天内的热门URL列表',
            'summary' => '调用DescribeScdnDomainTopUrlVisit获取加速域名某天内的热门URL列表。',
            'description' => '> - 不指定**StartTime**，默认读取前一天的数据。 '."\n"
                .'- 只支持一个域名，最多可获取最近90天的数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainUvData' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要查询的加速域名，只支持一个域名，不写查询当前账号下所有域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据的起始时间点，日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。'."\n"
                            ."\n"
                            .'- 最小数据粒度为1小时。'."\n"
                            .'- 不写默认读取过去24小时数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2015-11-29T00:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据的结束时间点。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。'."\n"
                            ."\n"
                            .'> 结束时间需晚于起始时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2015-11-30T00:00:00Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'EndTime' => [
                                'description' => '结束时间。',
                                'type' => 'string',
                                'example' => '2015-11-30T00:00:00Z',
                            ],
                            'StartTime' => [
                                'description' => '开始时间。',
                                'type' => 'string',
                                'example' => '2015-11-29T00:00:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E9D3257A-1B7C-414C-90C1-8D07AC47BCAC',
                            ],
                            'DomainName' => [
                                'description' => '加速域名信息。',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'DataInterval' => [
                                'description' => '每条记录的时间间隔，单位为秒。',
                                'type' => 'string',
                                'example' => '300',
                            ],
                            'UvDataInterval' => [
                                'type' => 'object',
                                'properties' => [
                                    'UsageData' => [
                                        'description' => '每个时间间隔的页面独立访问次数。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Value' => [
                                                    'description' => '详细使用数据。',
                                                    'type' => 'string',
                                                    'example' => '318',
                                                ],
                                                'TimeStamp' => [
                                                    'description' => '时间片起始时刻。',
                                                    'type' => 'string',
                                                    'example' => '2015-11-29T20:00:00Z',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidStartTime.Malformed',
                        'errorMessage' => 'Specified StartTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Malformed',
                        'errorMessage' => 'Specified EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter StartTime is not supported.',
                    ],
                    [
                        'errorCode' => 'InvalidTime.ValueNotSupported',
                        'errorMessage' => 'StartTime or EndTime is miss match.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2015-11-30T00:00:00Z\\",\\n  \\"StartTime\\": \\"2015-11-29T00:00:00Z\\",\\n  \\"RequestId\\": \\"E9D3257A-1B7C-414C-90C1-8D07AC47BCAC\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"DataInterval\\": \\"300\\",\\n  \\"UvDataInterval\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"Value\\": \\"318\\",\\n        \\"TimeStamp\\": \\"2015-11-29T20:00:00Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainUvDataResponse>\\r\\n    <DataInterval>300</DataInterval>\\r\\n    <RequestId>E9D3257A-1B7C-414C-90C1-8D07AC47BCAC</RequestId>\\r\\n    <DomainName>example.com</DomainName>\\r\\n    <EndTime>2015-11-30T00:00:00Z</EndTime>\\r\\n    <StartTime>2015-11-29T00:00:00Z</StartTime>\\r\\n    <UvDataInterval>\\r\\n        <UsageData>\\r\\n            <TimeStamp>2015-11-29T20:00:00Z</TimeStamp>\\r\\n            <Value>318</Value>\\r\\n        </UsageData>\\r\\n        <UsageData>\\r\\n            <TimeStamp>2015-11-29T18:00:00Z</TimeStamp>\\r\\n            <Value>318</Value>\\r\\n        </UsageData>\\r\\n        <UsageData>\\r\\n            <TimeStamp>2015-11-29T03:00:00Z</TimeStamp>\\r\\n            <Value>329</Value>\\r\\n        </UsageData>\\r\\n        <UsageData>\\r\\n            <TimeStamp>2015-11-29T09:00:00Z</TimeStamp>\\r\\n            <Value>312</Value>\\r\\n        </UsageData>\\r\\n    </UvDataInterval>\\r\\n</DescribeScdnDomainUvDataResponse>","errorExample":""}]',
            'title' => '获取UV页面独立访问统计数据',
            'summary' => '获取加速域名最小1小时粒度的UV页面独立访问的统计数据。',
            'description' => '> - 不指定**StartTime**和**EndTime**时，默认读取过去24小时的数据，同时支持按指定的起止时间查询，两者需要同时指定。'."\n"
                .'- 只支持一个域名，或当前用户下所有域名。'."\n"
                .'- 最多可获取最近90天的数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainRealTimeBpsData' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '域名。多个之间用逗号（,）隔开。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'IspNameEn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运营商英文名，不传为所有运营商。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'telecom',
                    ],
                ],
                [
                    'name' => 'LocationNameEn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '区域英文名，不传为所有区域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'beijing',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '起始时间，日期格式按照ISO8601表示法，并使用UTC时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2018-01-02T11:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间，日期格式按照ISO8601表示法，并使用UTC时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2018-01-02T11:00:00Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B49E6DDA-F413-422B-B58E-2FA23F286726',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'BpsModel' => [
                                        'description' => '数据列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Bps' => [
                                                    'description' => '带宽数据，单位是bit/second。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '16710625.733333332',
                                                ],
                                                'TimeStamp' => [
                                                    'description' => '数据时间戳，日期格式按照ISO8601表示法，并使用UTC时间。例如：2016-10-20T04:00:00Z。',
                                                    'type' => 'string',
                                                    'example' => '2018-01-02T11:05:00Z',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidTime.Malformed',
                        'errorMessage' => 'Specified StartTime or EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidDomainName.Malformed',
                        'errorMessage' => 'Specified domain name is malformed.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B49E6DDA-F413-422B-B58E-2FA23F286726\\",\\n  \\"Data\\": {\\n    \\"BpsModel\\": [\\n      {\\n        \\"Bps\\": 16710625.733333332,\\n        \\"TimeStamp\\": \\"2018-01-02T11:05:00Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainRealTimeBpsDataResponse>\\r\\n    <Data>\\r\\n        <BpsModel>\\r\\n            <TimeStamp>2018-01-02T11:05:00Z</TimeStamp>\\r\\n            <Bps>16710625.733333332</Bps>\\r\\n        </BpsModel>\\r\\n        <BpsModel>\\r\\n            <TimeStamp>2018-01-02T11:04:00Z</TimeStamp>\\r\\n            <Bps>59392614.8</Bps>\\r\\n        </BpsModel>\\r\\n    </Data>\\r\\n    <RequestId>B49E6DDA-F413-422B-B58E-2FA23F286726</RequestId>\\r\\n</DescribeScdnDomainRealTimeBpsDataResponse>","errorExample":""}]',
            'title' => '获取域名1分钟粒度带宽数据',
            'summary' => '调用DescribeScdnDomainRealTimeBpsData获取域名1分钟粒度带宽数据。',
            'description' => '**调用该接口前，请您注意：**'."\n"
                ."\n"
                .'- 可以查询7天内的数据，单次查询StartTime和EndTime跨度不能超过24小时。'."\n"
                .'- 指定StartTime，未指定EndTime的情况：默认查询从指定的StartTime起一小时内的数据。'."\n"
                .'- 指定EndTime，未指定SdtartTime的情况：默认查询从指定的EndTime起向前推一个小时内的数据。',
        ],
        'DescribeScdnCcTopIp' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加速域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '单页显示数量，不写默认值**30**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，默认值为**1**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间。日期格式按照ISO8601表示法，并使用UTC时间。'."\n"
                            ."\n"
                            .'格式为：YYYY-MM-DDThh: mm:ssZ。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2017-11-30T00:55:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间。日期格式按照ISO8601表示法，并使用UTC时间。'."\n"
                            ."\n"
                            .' 格式为：YYYY-MM-DDThh: mm:ssZ。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2017-11-30T0 1:00:00Z',
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
                                'example' => 'FA2EE241-5E9D-488A-B36E-408BF81C077E',
                            ],
                            'Total' => [
                                'description' => '攻击IP数量。',
                                'type' => 'string',
                                'example' => '246',
                            ],
                            'DomainName' => [
                                'description' => '安全加速域名。',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'AttackIpDataList' => [
                                'type' => 'object',
                                'properties' => [
                                    'AttackIpDatas' => [
                                        'description' => '每个时间间隔的攻击者IP相关数据。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'AttackCount' => [
                                                    'description' => '攻击次数。',
                                                    'type' => 'string',
                                                    'example' => '2018398',
                                                ],
                                                'Ip' => [
                                                    'description' => '攻击者的IP地址。',
                                                    'type' => 'string',
                                                    'example' => '1.XXX.XXX.4',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MISS_PARAMETER',
                        'errorMessage' => 'MISS_PARAMETER.',
                    ],
                    [
                        'errorCode' => 'USER_NOT_EXIST',
                        'errorMessage' => 'USER_NOT_EXIST',
                    ],
                    [
                        'errorCode' => 'QUERY_DOMAIN_CC_DATA_FAILED',
                        'errorMessage' => 'QUERY_DOMAIN_CC_DATA_FAILED',
                    ],
                    [
                        'errorCode' => 'DOMAIN_NOT_EXIST',
                        'errorMessage' => 'DOMAIN_NOT_EXIST',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FA2EE241-5E9D-488A-B36E-408BF81C077E\\",\\n  \\"Total\\": \\"246\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"AttackIpDataList\\": {\\n    \\"AttackIpDatas\\": [\\n      {\\n        \\"AttackCount\\": \\"2018398\\",\\n        \\"Ip\\": \\"1.XXX.XXX.4\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnCcTopIpResponse>\\n    <AttackIpDataList>\\n        <AttackIpDatas>\\n            <Ip>1.XXX.XXX.4</Ip>\\n            <AttackCount>2018398</AttackCount>\\n        </AttackIpDatas>\\n        <AttackIpDatas>\\n            <Ip>2.XXX.XXX.5</Ip>\\n            <AttackCount>1891178</AttackCount>\\n        </AttackIpDatas>\\n        <AttackIpDatas>\\n            <Ip>5.XXX.XXX.8</Ip>\\n            <AttackCount>1758322</AttackCount>\\n        </AttackIpDatas>\\n    </AttackIpDataList>\\n    <Total>246</Total>\\n    <DomainName>example.com</DomainName>\\n    <RequestId>FA2EE241-5E9D-488A-B36E-408BF81C077E</RequestId>\\n</DescribeScdnCcTopIpResponse>","errorExample":""}]',
            'title' => '获取安全加速域名频次攻击IP',
            'summary' => '获取安全加速域名指定时间段之内的频次攻击IP信息。',
            'description' => '> - 只支持一个域名。'."\n"
                .'- 最多可获取最近30天的数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnCcTopUrl' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加速域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '单页显示数量，默认值**30**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，默认为**1**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间。日期格式按照ISO8601表示法，并使用UTC时间。'."\n"
                            ."\n"
                            .'格式为：YYYY-MM-DDThh: mm:ssZ。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2017-11-30T00:55:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间。日期格式按照ISO8601表示法，并使用UTC时间。'."\n"
                            ."\n"
                            .'格式为：YYYY-MM-DDThh: mm:ssZ。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2017-11-30T0 1:00:00Z',
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
                                'example' => 'FA2EE241-5E9D-488A-B36E-408BF81C077E',
                            ],
                            'Total' => [
                                'description' => '攻击URL数量。',
                                'type' => 'string',
                                'example' => '123',
                            ],
                            'DomainName' => [
                                'description' => '安全加速域名。',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'AttackUrlDataList' => [
                                'type' => 'object',
                                'properties' => [
                                    'AttackUrlDatas' => [
                                        'description' => '每个时间间隔的被攻击的URL相关数据。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'AttackCount' => [
                                                    'description' => '攻击次数。',
                                                    'type' => 'string',
                                                    'example' => '2018398',
                                                ],
                                                'Url' => [
                                                    'description' => '攻击者的URL。',
                                                    'type' => 'string',
                                                    'example' => '/xxxxx/xxx',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MISS_PARAMETER',
                        'errorMessage' => 'MISS_PARAMETER.',
                    ],
                    [
                        'errorCode' => 'USER_NOT_EXIST',
                        'errorMessage' => 'USER_NOT_EXIST',
                    ],
                    [
                        'errorCode' => 'QUERY_DOMAIN_CC_DATA_FAILED',
                        'errorMessage' => 'QUERY_DOMAIN_CC_DATA_FAILED',
                    ],
                    [
                        'errorCode' => 'DOMAIN_NOT_EXIST',
                        'errorMessage' => 'DOMAIN_NOT_EXIST',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FA2EE241-5E9D-488A-B36E-408BF81C077E\\",\\n  \\"Total\\": \\"123\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"AttackUrlDataList\\": {\\n    \\"AttackUrlDatas\\": [\\n      {\\n        \\"AttackCount\\": \\"2018398\\",\\n        \\"Url\\": \\"/xxxxx/xxx\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnCcTopUrlResponse>\\r\\n    <AttackUrlDataList>\\r\\n        <AttackUrlDatas>\\r\\n            <Url>/xxxxx/xxx</Url>\\r\\n            <AttackCount>2018398</AttackCount>\\r\\n        </AttackUrlDatas>\\r\\n        <AttackUrlDatas>\\r\\n            <Url>/xxx/xxxx.xx</Url>\\r\\n            <AttackCount>1891178</AttackCount>\\r\\n        </AttackUrlDatas>\\r\\n        <AttackUrlDatas>\\r\\n            <Url>/xxx/xxx/xx</Url>\\r\\n            <AttackCount>1758322</AttackCount>\\r\\n        </AttackUrlDatas>\\r\\n    </AttackUrlDataList>\\r\\n    <Total>123</Total>\\r\\n    <DomainName>example.com</DomainName>\\r\\n    <RequestId>FA2EE241-5E9D-488A-B36E-408BF81C077E</RequestId>\\r\\n</DescribeScdnCcTopUrlResponse>","errorExample":""}]',
            'title' => '获取安全加速域名频次攻击URL信息',
            'summary' => '获取安全加速域名指定时间段之内的频次攻击URL信息。',
            'description' => '> - 只支持一个域名'."\n"
                .'- 最多可获取最近30天的数据',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainBpsData' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- 若参数为空，默认返回所有加速域名合并后数据'."\n"
                            .'- 可输入需要查询的加速域名'."\n"
                            .'- 支持批量域名查询，多个域名用逗号（半角）分隔',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据起始时间点。'."\n"
                            ."\n"
                            .'- 日期格式按照ISO8601表示法，并使用UTC时间'."\n"
                            .'- 格式为：YYYY-MM-DDThh:mm:ssZ'."\n"
                            .'- 最小数据粒度为5分钟'."\n"
                            .'- 不写默认读取过去24小时数据',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2017-12-10T20:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- 结束时间需大于起始时间'."\n"
                            .'- 日期格式按照ISO8601表示法，并使用UTC时间'."\n"
                            .'- 格式为：YYYY-MM-DDThh:mm:ssZ',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2017-12-10T20:00:00Z',
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询数据的时间粒度，支持300、 3600和86400秒。'."\n"
                            ."\n"
                            .'- 3天以内（不包含3天整）支持300、 3600、 86400。'."\n"
                            .'- 3-31天（不包含31天整）支持3600和86400。'."\n"
                            .'- 31天以上支持86400。'."\n"
                            .'- 不传和传的值不支持时，使用默认值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '300',
                    ],
                ],
                [
                    'name' => 'IspNameEn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运营商英文名，通过**DescribeCdnRegionAndIsp**接口获得，不传为所有运营商。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'alibaba',
                    ],
                ],
                [
                    'name' => 'LocationNameEn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '区域英文名，通过**DescribeCdnRegionAndIsp**接口获得，不传为所有区域。',
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
                            'EndTime' => [
                                'description' => '结束时间',
                                'type' => 'string',
                                'example' => '2017-12-10T21:00:00Z',
                            ],
                            'StartTime' => [
                                'description' => '开始时间',
                                'type' => 'string',
                                'example' => '2017-12-10T20:00:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '3C6CCEC4-6B88-4D4A-93E4-D47B3D92CF8F',
                            ],
                            'DomainName' => [
                                'description' => '安全加速域名',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'DataInterval' => [
                                'description' => '每条记录的时间间隔，以秒为单位',
                                'type' => 'string',
                                'example' => '300',
                            ],
                            'BpsDataPerInterval' => [
                                'type' => 'object',
                                'properties' => [
                                    'DataModule' => [
                                        'description' => '每个时间间隔的网络带宽数据',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'BpsValue' => [
                                                    'description' => 'bps数据值，单位：bit/second',
                                                    'type' => 'string',
                                                    'example' => '11288111',
                                                ],
                                                'TimeStamp' => [
                                                    'description' => '时间片起始时刻',
                                                    'type' => 'string',
                                                    'example' => '2017-12-10T20:00:00Z',
                                                ],
                                                'HttpsBpsValue' => [
                                                    'description' => 'https bps数据值，单位：bit/second',
                                                    'type' => 'string',
                                                    'example' => '2000',
                                                ],
                                                'HttpBpsValue' => [
                                                    'description' => 'http bps数据值，单位：bit/second',
                                                    'type' => 'string',
                                                    'example' => '11286111',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'StartTime and EndTime can not be single.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.Malformed',
                        'errorMessage' => 'Specified StartTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Malformed',
                        'errorMessage' => 'Specified EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Mismatch',
                        'errorMessage' => 'Specified end time does not math the specified start time.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter StartTime is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2017-12-10T21:00:00Z\\",\\n  \\"StartTime\\": \\"2017-12-10T20:00:00Z\\",\\n  \\"RequestId\\": \\"3C6CCEC4-6B88-4D4A-93E4-D47B3D92CF8F\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"DataInterval\\": \\"300\\",\\n  \\"BpsDataPerInterval\\": {\\n    \\"DataModule\\": [\\n      {\\n        \\"BpsValue\\": \\"11288111\\",\\n        \\"TimeStamp\\": \\"2017-12-10T20:00:00Z\\",\\n        \\"HttpsBpsValue\\": \\"2000\\",\\n        \\"HttpBpsValue\\": \\"11286111\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainBpsDataResponse>\\r\\n    <BpsDataPerInterval>\\r\\n        <DataModule>\\r\\n            <TimeStamp>2017-12-10T20:00:00Z</TimeStamp>\\r\\n            <BpsValue>11288111</BpsValue>\\r\\n            <HttpBpsValue>11286111</HttpBpsValue>\\r\\n            <HttpsBpsValue>2000</HttpsBpsValue>\\r\\n        </DataModule>\\r\\n        <DataModule>\\r\\n            <TimeStamp>2017-12-10T20:05:00Z</TimeStamp>\\r\\n            <BpsValue>1288111</BpsValue>\\r\\n            <HttpBpsValue>1286111</HttpBpsValue>\\r\\n            <HttpsBpsValue>2000</HttpsBpsValue>\\r\\n        </DataModule>\\r\\n    </BpsDataPerInterval>\\r\\n    <DomainName>example.com</DomainName>\\r\\n    <DataInterval>300</DataInterval>\\r\\n    <RequestId>3C6CCEC4-6B88-4D4A-93E4-D47B3D92CF8F</RequestId>\\r\\n    <StartTime>2017-12-10T20:00:00Z</StartTime>\\r\\n    <EndTime>2017-12-10T21:00:00Z</EndTime> \\r\\n</DescribeScdnDomainBpsDataResponse>","errorExample":""}]',
            'title' => '获取安全加速域名的网络带宽监控数据',
            'summary' => '调用DescribeScdnDomainBpsData获取安全加速域名的网络带宽监控数据。',
            'description' => '- 单位bit/second。'."\n"
                .'- 不指定StartTime和EndTime时，默认读取过去24小时的数据，同时支持按指定的起止时间查询，两者需要同时指定。'."\n"
                .'- 支持批量域名查询，多个域名用逗号（半角）分隔。'."\n"
                .'- 最多可获取最近90天的数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainHttpCodeData' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要查询的加速域名。'."\n"
                            ."\n"
                            .'- 支持批量。'."\n"
                            .'- 多个域名用逗号（半角）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com,aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据起始时间点。'."\n"
                            ."\n"
                            .'- 日期格式按照ISO8601表示法，并使用UTC时间。'."\n"
                            .'- 格式为：YYYY-MM-DDThh:mm:ssZ。'."\n"
                            .'- 最小数据粒度为5分钟。'."\n"
                            .'- 不写默认读取过去24小时数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2018-03-01T05:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- 结束时间需大于起始时间。'."\n"
                            .'- 获日期格式按照ISO8601表示法，并使用UTC时间。'."\n"
                            .'- 格式为：YYYY-MM-DDThh:mm:ssZ。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2018-03-01T13:00:00Z',
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询数据的时间粒度，支持300、 3600和86400秒。'."\n"
                            ."\n"
                            .'- 3天以内（不包含3天整）支持300、 3600、 86400。'."\n"
                            .'- 3-31天（不包含31天整）支持3600和86400。'."\n"
                            .'- 31天以上支持86400。'."\n"
                            .'- 不传和传的值不支持时，使用默认值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '300',
                    ],
                ],
                [
                    'name' => 'IspNameEn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运营商英文名，通过**DescribeCdnRegionAndIsp**接口获得，不传为所有运营商。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'alibaba',
                    ],
                ],
                [
                    'name' => 'LocationNameEn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '区域英文名，通过**DescribeCdnRegionAndIsp**接口获得，不传为所有区域。',
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
                            'EndTime' => [
                                'description' => '结束时间。'."\n"
                                    .'日期格式按照ISO8601表示法，并使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。'."\n"
                                    ."\n"
                                    .'> 结束时间需大于起始时间。',
                                'type' => 'string',
                                'example' => '2018-03-01T13:00:00Z',
                            ],
                            'StartTime' => [
                                'description' => '开始时间。'."\n"
                                    .'日期格式按照ISO8601表示法，并使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
                                'type' => 'string',
                                'example' => '2018-03-01T05:00:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '91FC2D9D-B042-4634-8A5C-7B8E7482C22D',
                            ],
                            'DomainName' => [
                                'description' => '安全加速域名。',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'DataInterval' => [
                                'description' => '每条记录的时间间隔，以秒为单位，固定值为300s。',
                                'type' => 'string',
                                'example' => '3600',
                            ],
                            'DataPerInterval' => [
                                'type' => 'object',
                                'properties' => [
                                    'DataModule' => [
                                        'description' => '每个时间间隔的HTTP返回码占比数据。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TimeStamp' => [
                                                    'description' => '时间片起始时刻。',
                                                    'type' => 'string',
                                                    'example' => '2018-03-01T13:00:00Z',
                                                ],
                                                'HttpCodeDataPerInterval' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'HttpCodeDataModule' => [
                                                            'description' => '各返回码占比使用数据列表。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Code' => [
                                                                        'description' => 'HTTP返回码。',
                                                                        'type' => 'string',
                                                                        'example' => '404',
                                                                    ],
                                                                    'Proportion' => [
                                                                        'description' => '占比使用数据。',
                                                                        'type' => 'string',
                                                                        'example' => '100',
                                                                    ],
                                                                    'Count' => [
                                                                        'description' => '总数。',
                                                                        'type' => 'string',
                                                                        'example' => '16',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'StartTime and EndTime can not be single.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.Malformed',
                        'errorMessage' => 'Specified StartTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Malformed',
                        'errorMessage' => 'Specified EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Mismatch',
                        'errorMessage' => 'Specified end time does not math the specified start time.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter StartTime is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2018-03-01T13:00:00Z\\",\\n  \\"StartTime\\": \\"2018-03-01T05:00:00Z\\",\\n  \\"RequestId\\": \\"91FC2D9D-B042-4634-8A5C-7B8E7482C22D\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"DataInterval\\": \\"3600\\",\\n  \\"DataPerInterval\\": {\\n    \\"DataModule\\": [\\n      {\\n        \\"TimeStamp\\": \\"2018-03-01T13:00:00Z\\",\\n        \\"HttpCodeDataPerInterval\\": {\\n          \\"HttpCodeDataModule\\": [\\n            {\\n              \\"Code\\": \\"404\\",\\n              \\"Proportion\\": \\"100\\",\\n              \\"Count\\": \\"16\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<EndTime>2018-03-01T13:00:00Z</EndTime>\\n<RequestId>91FC2D9D-B042-4634-8A5C-7B8E7482C22D</RequestId>\\n<DomainName>example.com</DomainName>\\n<DataInterval>3600</DataInterval>\\n<StartTime>2018-03-01T05:00:00Z</StartTime>\\n<DataPerInterval>\\n    <DataModule>\\n        <TimeStamp>2018-03-01T13:00:00Z</TimeStamp>\\n        <HttpCodeDataPerInterval>\\n            <HttpCodeDataModule>\\n                <Proportion>100</Proportion>\\n                <Count>16</Count>\\n                <Code>404</Code>\\n            </HttpCodeDataModule>\\n        </HttpCodeDataPerInterval>\\n    </DataModule>\\n</DataPerInterval>","errorExample":""}]',
            'title' => '获取安全加速域名HTTP返回码占比数据',
            'summary' => '获取安全加速域名最小5分钟粒度的HTTP返回码占比数据。',
            'description' => '- 不指定StartTime和EndTime时，默认读取过去24小时的数据，同时支持按指定的起止时间查询，两者需要同时指定。'."\n"
                .'- 支持批量域名查询，多个域名可用逗号（半角）分隔。'."\n"
                .'- 最多可获取最近90天的数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainLog' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待查询的加速域名，只支持查询单个域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，默认**300**，最大**1000**，取值：**1~1000**之前的任意整数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                        'default' => '300',
                        'maximum' => '1000',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '取得第几页，取值范围为大于**1**的任意整数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取日志起始时间点。日期格式按照ISO8601表示法，并使用UTC时间。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '2016-10-20T04:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取日志起始时间点。日期格式按照ISO8601表示法，并使用UTC时间。'."\n"
                            ."\n"
                            .'> 结束时间需晚于起始时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2016-10-20T04:10:00Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'DomainName' => [
                                'description' => '域名。',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '077D0284-F041-4A41-A932-B48377FDAA25',
                            ],
                            'DomainLogDetails' => [
                                'type' => 'object',
                                'properties' => [
                                    'DomainLogDetail' => [
                                        'description' => 'DomainLogDetail组成的数据。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'LogCount' => [
                                                    'description' => '本页返回的总条数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '20',
                                                ],
                                                'LogInfos' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'LogInfoDetail' => [
                                                            'description' => 'LogInfoDetail组成的数据。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'EndTime' => [
                                                                        'description' => '结束时间。',
                                                                        'type' => 'string',
                                                                        'example' => '1521975600',
                                                                    ],
                                                                    'LogSize' => [
                                                                        'description' => '日志大小。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int64',
                                                                        'example' => '2645401',
                                                                    ],
                                                                    'StartTime' => [
                                                                        'description' => '开始时间。',
                                                                        'type' => 'string',
                                                                        'example' => '1521972000',
                                                                    ],
                                                                    'LogName' => [
                                                                        'description' => '日志名称。',
                                                                        'type' => 'string',
                                                                        'example' => 'example.com_2018_03_25_180000_190000.gz',
                                                                    ],
                                                                    'LogPath' => [
                                                                        'description' => '日志路径。',
                                                                        'type' => 'string',
                                                                        'example' => 'cdnlog2.aliyuncs.com/example.com/2018_03_25/example.com_2018_03_25_180000_190000.gz?',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'PageInfos' => [
                                                    'description' => 'PageInfoDetail组成的数据。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'PageNumber' => [
                                                            'description' => '返回数据的页码。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1',
                                                        ],
                                                        'PageSize' => [
                                                            'description' => '整页大小。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '20',
                                                        ],
                                                        'Total' => [
                                                            'description' => '总条数。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '20',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"RequestId\\": \\"077D0284-F041-4A41-A932-B48377FDAA25\\",\\n  \\"DomainLogDetails\\": {\\n    \\"DomainLogDetail\\": [\\n      {\\n        \\"LogCount\\": 20,\\n        \\"LogInfos\\": {\\n          \\"LogInfoDetail\\": [\\n            {\\n              \\"EndTime\\": \\"1521975600\\",\\n              \\"LogSize\\": 2645401,\\n              \\"StartTime\\": \\"1521972000\\",\\n              \\"LogName\\": \\"example.com_2018_03_25_180000_190000.gz\\",\\n              \\"LogPath\\": \\"cdnlog2.aliyuncs.com/example.com/2018_03_25/example.com_2018_03_25_180000_190000.gz?\\"\\n            }\\n          ]\\n        },\\n        \\"PageInfos\\": {\\n          \\"PageNumber\\": 1,\\n          \\"PageSize\\": 20,\\n          \\"Total\\": 20\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainLogResponse>\\n<RequestId>077D0284-F041-4A41-A932-B48377FDAA25</RequestId>\\n<DomainLogDetails>\\n    <DomainLogDetail>\\n        <LogInfos>\\n            <LogInfoDetail>\\n                <LogName>example.com_2018_03_25_180000_190000.gz</LogName>\\n                <LogPath>cdnlog2.aliyuncs.com/example.com/2018_03_25/example.com_2018_03_25_180000_190000.gz?xxx</LogPath>\\n                <EndTime>1521975600</EndTime>\\n                <StartTime>1521972000</StartTime>\\n                <LogSize>2645401</LogSize>\\n            </LogInfoDetail>\\n            <LogInfoDetail>\\n                <LogName>example.com_2018_03_25_190000_200000.gz</LogName>\\n                <LogPath>cdnlog2.aliyuncs.com/example.com/2018_03_25/example.com_2018_03_25_190000_200000.gz?xxx</LogPath>\\n                <EndTime>1521979200</EndTime>\\n                <StartTime>1521975600</StartTime>\\n                <LogSize>2653965</LogSize>\\n            </LogInfoDetail>\\n        </LogInfos>\\n        <LogCount>20</LogCount>\\n        <PageInfos>\\n            <PageNumber>1</PageNumber>\\n            <PageSize>20</PageSize>\\n            <Total>20</Total>\\n        </PageInfos>\\n    </DomainLogDetail>\\n</DomainLogDetails>\\n<DomainName>example.com</DomainName>\\n</DescribeScdnDomainLogResponse>","errorExample":""}]',
            'title' => '获取指定域名原始访问日志的下载地址',
            'summary' => '调用DescribeScdnDomainLog获取指定域名原始访问日志的下载地址。',
            'description' => '> - 不指定**StartTime**和**EndTime**时，默认读取过去24小时的日志数据。'."\n"
                .'- **StartTime**和**EndTime**需要同时指定，按指定的起止时间查询日志。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainOriginBpsData' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- 若参数为空，默认返回所有加速域名合并后数据。'."\n"
                            .'- 可输入需要查询的加速域名。'."\n"
                            .'- 支持批量域名查询，多个域名用逗号（半角）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据起始时间点。'."\n"
                            ."\n"
                            .'- 日期格式按照ISO8601表示法，并使用UTC时间。'."\n"
                            .'- 格式为：YYYY-MM-DDThh:mm:ssZ。'."\n"
                            .'- 最小数据粒度为5分钟。'."\n"
                            .'- 不写默认读取过去24小时数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2017-12-10T20:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- 结束时间需大于起始时间。'."\n"
                            .'- 获日期格式按照ISO8601表示法，并使用UTC时间。'."\n"
                            .'- 格式为：YYYY-MM-DDThh:mm:ssZ。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2017-12-10T20:00:00Z',
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询数据的时间粒度，支持300、 3600和86400秒。'."\n"
                            ."\n"
                            .'- 3天以内（不包含3天整）支持300、 3600、 86400。'."\n"
                            .'- 3-31天（不包含31天整）支持3600和86400。'."\n"
                            .'- 31天以上支持86400。'."\n"
                            .'- 不传和传的值不支持时，使用默认值。',
                        'type' => 'string',
                        'required' => false,
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7CBCD6AD-B016-42E5-AE0B-B3731DE8F755',
                            ],
                            'DomainName' => [
                                'description' => '安全加速域名。',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'StartTime' => [
                                'description' => '开始时间。',
                                'type' => 'string',
                                'example' => '2017-12-10T20:00:00Z',
                            ],
                            'EndTime' => [
                                'description' => '结束时间。',
                                'type' => 'string',
                                'example' => '2017-12-10T21:00:00Z',
                            ],
                            'DataInterval' => [
                                'description' => '每条记录的时间间隔，以秒为单位。',
                                'type' => 'string',
                                'example' => '300',
                            ],
                            'OriginBpsDataPerInterval' => [
                                'type' => 'object',
                                'properties' => [
                                    'DataModule' => [
                                        'description' => '每个时间间隔的回源带宽数据。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TimeStamp' => [
                                                    'description' => '时间片起始时刻。',
                                                    'type' => 'string',
                                                    'example' => '2017-12-10T21:00:00Z',
                                                ],
                                                'OriginBpsValue' => [
                                                    'description' => '回源带宽数据。',
                                                    'type' => 'string',
                                                    'example' => '200',
                                                ],
                                                'HttpOriginBpsValue' => [
                                                    'description' => 'HTTP回源带宽数据。',
                                                    'type' => 'string',
                                                    'example' => '100',
                                                ],
                                                'HttpsOriginBpsValue' => [
                                                    'description' => 'HTTPS回源带宽数据。',
                                                    'type' => 'string',
                                                    'example' => '100',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'StartTime and EndTime can not be single.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.Malformed',
                        'errorMessage' => 'Specified StartTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Malformed',
                        'errorMessage' => 'Specified EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Mismatch',
                        'errorMessage' => 'Specified end time does not math the specified start time.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter StartTime is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2017-12-10T21:00:00Z\\",\\n  \\"StartTime\\": \\"2017-12-10T20:00:00Z\\",\\n  \\"RequestId\\": \\"7CBCD6AD-B016-42E5-AE0B-B3731DE8F755\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"DataInterval\\": \\"300\\",\\n  \\"OriginBpsDataPerInterval\\": {\\n    \\"DataModule\\": [\\n      {\\n        \\"HttpOriginBpsValue\\": \\"100\\",\\n        \\"TimeStamp\\": \\"2017-12-10T21:00:00Z\\",\\n        \\"HttpsOriginBpsValue\\": \\"100\\",\\n        \\"OriginBpsValue\\": \\"200\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DomainName>example.com</DomainName>\\n<DataInterval>300</DataInterval>\\n<OriginBpsDataPerInterval>\\n    <DataModule>\\n        <TimeStamp>2017-12-10T21:00:00Z</TimeStamp>\\n        <OriginBpsValue>200</OriginBpsValue>\\n        <HttpOriginBpsValue>100</HttpOriginBpsValue>\\n        <HttpsOriginBpsValue>100</HttpsOriginBpsValue>\\n    </DataModule>\\n    <DataModule>\\n        <TimeStamp>2017-12-10T21:00:05Z</TimeStamp>\\n        <OriginBpsValue>300</OriginBpsValue>\\n        <HttpOriginBpsValue>200</HttpOriginBpsValue>\\n        <HttpsOriginBpsValue>100</HttpsOriginBpsValue>\\n    </DataModule>\\n    <DataModule>\\n        <TimeStamp>2017-12-10T21:00:10Z</TimeStamp>\\n        <OriginBpsValue>200</OriginBpsValue>\\n        <HttpOriginBpsValue>100</HttpOriginBpsValue>\\n        <HttpsOriginBpsValue>100</HttpsOriginBpsValue>\\n    </DataModule>\\n</OriginBpsDataPerInterval>\\n<RequestId>7CBCD6AD-B016-42E5-AE0B-B3731DE8F755</RequestId>\\n<StartTime>2017-12-10T20:00:00Z</StartTime>\\n<EndTime>2017-12-10T21:00:00Z</EndTime>","errorExample":""}]',
            'title' => '获取安全加速域名的回源带宽监控数据',
            'summary' => '调用DescribeScdnDomainOriginBpsData获取安全加速域名的回源带宽监控数据。',
            'description' => '- 单位bit/second。'."\n"
                .'- 不指定StartTime和EndTime时，默认读取过去24小时的数据，同时支持按指定的起止时间查询，两者需要同时指定。'."\n"
                .'- 支持批量域名查询，多个域名用逗号（半角）分隔。'."\n"
                .'- 最多可获取最近90天的数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainQpsData' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- 若参数为空，默认返回所有加速域名合并后数据。'."\n"
                            .'- 可输入需要查询的加速域名。'."\n"
                            .'- 支持批量域名查询，多个域名用逗号（半角）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据起始时间点。'."\n"
                            ."\n"
                            .'- 日期格式按照ISO8601表示法，并使用UTC时间。'."\n"
                            .'- 格式为：YYYY-MM-DDThh:mm:ssZ。'."\n"
                            .'- 最小数据粒度为5分钟。'."\n"
                            .'- 不写默认读取过去24小时数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2017-12-10T20:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- 结束时间需大于起始时间。'."\n"
                            .'- 日期格式按照ISO8601表示法，并使用UTC时间。'."\n"
                            .'- 格式为：YYYY-MM-DDThh:mm:ssZ。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2017-12-10T21:00:00Z',
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询数据的时间粒度，支持300、 3600和86400秒。'."\n"
                            ."\n"
                            .'- 3天以内（不包含3天整）支持300、 3600、 86400。'."\n"
                            .'- 3-31天（不包含31天整）支持3600和86400。'."\n"
                            .'- 31天以上支持86400。'."\n"
                            .'- 不传和传的值不支持时，使用默认值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '300',
                    ],
                ],
                [
                    'name' => 'IspNameEn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运营商英文名，通过**DescribeCdnRegionAndIsp**接口获得，不传为所有运营商。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'alibaba',
                    ],
                ],
                [
                    'name' => 'LocationNameEn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '区域英文名，通过**DescribeCdnRegionAndIsp**接口获得，不传为所有区域。',
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
                            'EndTime' => [
                                'description' => '结束时间。',
                                'type' => 'string',
                                'example' => '2017-12-10T21:00:00Z',
                            ],
                            'StartTime' => [
                                'description' => '开始时间。',
                                'type' => 'string',
                                'example' => '2017-12-10T20:00:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
                            ],
                            'DomainName' => [
                                'description' => '安全加速域名。',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'DataInterval' => [
                                'description' => '每条记录的时间间隔，以秒为单位。',
                                'type' => 'string',
                                'example' => '300',
                            ],
                            'QpsDataPerInterval' => [
                                'type' => 'object',
                                'properties' => [
                                    'DataModule' => [
                                        'description' => '每个时间间隔的每秒访问次数QPS。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'HttpsAccValue' => [
                                                    'description' => 'HTTPS访问次数。',
                                                    'type' => 'string',
                                                    'example' => '50',
                                                ],
                                                'QpsValue' => [
                                                    'description' => '总QPS。',
                                                    'type' => 'string',
                                                    'example' => '0.56',
                                                ],
                                                'AccValue' => [
                                                    'description' => '总访问次数。',
                                                    'type' => 'string',
                                                    'example' => '100',
                                                ],
                                                'HttpQpsValue' => [
                                                    'description' => 'http QPS。',
                                                    'type' => 'string',
                                                    'example' => '0.28',
                                                ],
                                                'TimeStamp' => [
                                                    'description' => '时间片起始时刻。',
                                                    'type' => 'string',
                                                    'example' => '2017-12-10T21:00:00Z',
                                                ],
                                                'HttpsQpsValue' => [
                                                    'description' => 'https QPS。',
                                                    'type' => 'string',
                                                    'example' => '0.28',
                                                ],
                                                'HttpAccValue' => [
                                                    'description' => 'HTTP访问次数。',
                                                    'type' => 'string',
                                                    'example' => '50',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'StartTime and EndTime can not be single.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.Malformed',
                        'errorMessage' => 'Specified StartTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Malformed',
                        'errorMessage' => 'Specified EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Mismatch',
                        'errorMessage' => 'Specified end time does not math the specified start time.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter StartTime is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2017-12-10T21:00:00Z\\",\\n  \\"StartTime\\": \\"2017-12-10T20:00:00Z\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"DataInterval\\": \\"300\\",\\n  \\"QpsDataPerInterval\\": {\\n    \\"DataModule\\": [\\n      {\\n        \\"HttpsAccValue\\": \\"50\\",\\n        \\"QpsValue\\": \\"0.56\\",\\n        \\"AccValue\\": \\"100\\",\\n        \\"HttpQpsValue\\": \\"0.28\\",\\n        \\"TimeStamp\\": \\"2017-12-10T21:00:00Z\\",\\n        \\"HttpsQpsValue\\": \\"0.28\\",\\n        \\"HttpAccValue\\": \\"50\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainQpsDataResponse>\\r\\n    <QpsDataPerInterval>\\r\\n        <DataModule>\\r\\n            <TimeStamp>2017-12-10T21:00:00Z</TimeStamp>\\r\\n            <QpsValue>0.56</QpsValue>\\r\\n            <HttpQpsValue>0.28</HttpQpsValue>\\r\\n            <HttpsQpsValue>0.28</HttpsQpsValue>\\r\\n            <AccValue>100</AccValue>\\r\\n            <HttpAccValue>50</HttpAccValue>\\r\\n            <HttpsAccValue>50</HttpsAccValue>\\r\\n        </DataModule>\\r\\n    </QpsDataPerInterval>\\r\\n    <DomainName>example.com</DomainName>\\r\\n    <DataInterval>300</DataInterval>\\r\\n    <RequestId>BEA5625F-8FCF-48F4-851B-CA63946DA664</RequestId>\\r\\n    <StartTime>2017-12-10T20:00:00Z</StartTime>\\r\\n    <EndTime>2017-12-10T21:00:00Z</EndTime>\\r\\n</DescribeScdnDomainQpsDataResponse>","errorExample":""}]',
            'title' => '获取安全加速域名的每秒访问次数QPS',
            'summary' => '调用DescribeScdnDomainQpsData获取安全加速域名的每秒访问次数QPS。',
            'description' => '- 不指定StartTime和EndTime时，默认读取过去24小时的数据，同时支持按指定的起止时间查询，两者需要同时指定。'."\n"
                .'- 支持批量域名查询，多个域名可用逗号（半角）分隔。'."\n"
                .'- 最多可获取最近90天的数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnTopDomainsByFlow' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据起始时间点。要求如下：'."\n"
                            ."\n"
                            .'- 日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。'."\n"
                            .'- 最小数据粒度为5分钟。'."\n"
                            .'- 不写默认读取当月数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2016-03-01T04:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据结束时间点。要求如下：'."\n"
                            ."\n"
                            .'- 结束时间需晚于起始时间。'."\n"
                            .'- 日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2016-03-14T07:34:00Z',
                    ],
                ],
                [
                    'name' => 'Product',
                    'in' => 'query',
                    'schema' => [
                        'description' => '传入**scdn**查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'scdn',
                        'default' => 'scdn',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '域名获取数量限制，默认为**20**，取值支持**1~100**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '5',
                        'default' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'DomainOnlineCount' => [
                                'description' => '账号下**正在运行**域名总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '68',
                            ],
                            'EndTime' => [
                                'description' => '结束时间。',
                                'type' => 'string',
                                'example' => '2016-03-14T07:34:00Z',
                            ],
                            'StartTime' => [
                                'description' => '开始时间。',
                                'type' => 'string',
                                'example' => '2016-03-14T06:34:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4E09C5D7-E1CF-4CAA-A45E-8727F4C8FD70',
                            ],
                            'DomainCount' => [
                                'description' => '账号下域名总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '68',
                            ],
                            'TopDomains' => [
                                'type' => 'object',
                                'properties' => [
                                    'TopDomain' => [
                                        'description' => '域名排名列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'MaxBps' => [
                                                    'description' => '带宽峰值。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '22139626',
                                                ],
                                                'Rank' => [
                                                    'description' => '排名。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'TotalAccess' => [
                                                    'description' => '访问次数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '3',
                                                ],
                                                'TrafficPercent' => [
                                                    'description' => '流量占比。',
                                                    'type' => 'string',
                                                    'example' => '21.686305274906182	',
                                                ],
                                                'DomainName' => [
                                                    'description' => '域名。',
                                                    'type' => 'string',
                                                    'example' => 'example.com',
                                                ],
                                                'TotalTraffic' => [
                                                    'description' => '总流量。',
                                                    'type' => 'string',
                                                    'example' => '123',
                                                ],
                                                'MaxBpsTime' => [
                                                    'description' => '带宽峰值时刻。使用ISO8601表示法，并使用UTC时间，格式为：YYYY-MM-DDThh:mm:ssZ。',
                                                    'type' => 'string',
                                                    'example' => '2018-11-01T08:10:00Z',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidStartTime.Malformed',
                        'errorMessage' => 'Specified StartTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Malformed',
                        'errorMessage' => 'Specified EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter StartTime is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DomainOnlineCount\\": 68,\\n  \\"EndTime\\": \\"2016-03-14T07:34:00Z\\",\\n  \\"StartTime\\": \\"2016-03-14T06:34:00Z\\",\\n  \\"RequestId\\": \\"4E09C5D7-E1CF-4CAA-A45E-8727F4C8FD70\\",\\n  \\"DomainCount\\": 68,\\n  \\"TopDomains\\": {\\n    \\"TopDomain\\": [\\n      {\\n        \\"MaxBps\\": 22139626,\\n        \\"Rank\\": 1,\\n        \\"TotalAccess\\": 3,\\n        \\"TrafficPercent\\": \\"21.686305274906182\\\\t\\",\\n        \\"DomainName\\": \\"example.com\\",\\n        \\"TotalTraffic\\": \\"123\\",\\n        \\"MaxBpsTime\\": \\"2018-11-01T08:10:00Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnTopDomainsByFlowResponse>\\r\\n    <DomainCount>68</DomainCount>\\r\\n    <DomainOnlineCount>68</DomainOnlineCount>\\r\\n    <RequestId>4E09C5D7-E1CF-4CAA-A45E-8727F4C8FD70</RequestId>\\r\\n    <TopDomains>\\r\\n        <TopDomain>\\r\\n            <Rank>1</Rank>\\r\\n            <MaxBps>22139626</MaxBps>\\r\\n            <TotalTraffic>2043859876683.9001</TotalTraffic>\\r\\n            <TrafficPercent>30.64191989360235</TrafficPercent>\\r\\n            <TotalAccess>107784230</TotalAccess>\\r\\n            <DomainName>example.com</DomainName>\\r\\n            <MaxBpsTime>2018-11-01T08:10:00Z</MaxBpsTime>\\r\\n        </TopDomain>\\r\\n        <TopDomain>\\r\\n            <Rank>2</Rank>\\r\\n            <MaxBps>1008772351</MaxBps>\\r\\n            <TotalTraffic>1729970466149.2002</TotalTraffic>\\r\\n            <TrafficPercent>25.936032624725815</TrafficPercent>\\r\\n            <TotalAccess>3843128</TotalAccess>\\r\\n            <DomainName>example.com</DomainName>\\r\\n            <MaxBpsTime>2018-11-01T08:10:00Z</MaxBpsTime>\\r\\n        </TopDomain>\\r\\n        <TopDomain>\\r\\n            <Rank>3</Rank>\\r\\n            <MaxBps>16046911</MaxBps>\\r\\n            <TotalTraffic>1446507574551.6</TotalTraffic>\\r\\n            <TrafficPercent>21.686305274906182</TrafficPercent>\\r\\n            <TotalAccess>547567</TotalAccess>\\r\\n            <DomainName>example.com</DomainName>\\r\\n            <MaxBpsTime>2018-11-01T08:10:00Z</MaxBpsTime>\\r\\n        </TopDomain>\\r\\n        <TopDomain>\\r\\n            <Rank>4</Rank>\\r\\n            <MaxBps>15990893</MaxBps>\\r\\n            <TotalTraffic>1418144519687.5</TotalTraffic>\\r\\n            <TrafficPercent>21.261081185428147</TrafficPercent>\\r\\n            <TotalAccess>548380</TotalAccess>\\r\\n            <DomainName>example.com</DomainName>\\r\\n            <MaxBpsTime>2018-11-01T08:10:00Z</MaxBpsTime>\\r\\n        </TopDomain>\\r\\n        <TopDomain>\\r\\n            <Rank>5</Rank>\\r\\n            <MaxBps>473599</MaxBps>\\r\\n            <TotalTraffic>28739937242.500004</TotalTraffic>\\r\\n            <TrafficPercent>0.4308743788055894</TrafficPercent>\\r\\n            <TotalAccess>152150</TotalAccess>\\r\\n            <DomainName>example.com</DomainName>\\r\\n            <MaxBpsTime>2018-11-01T08:10:00Z</MaxBpsTime>\\r\\n        </TopDomain>\\r\\n    </TopDomains>\\r\\n    <EndTime>2016-03-14T07:34:00Z</EndTime>\\r\\n    <StartTime>2016-03-01T04:00:00Z</StartTime>\\r\\n</DescribeScdnTopDomainsByFlowResponse>","errorExample":""}]',
            'title' => '获取用户按流量排名的域名',
            'summary' => '调用DescribeDcdnTopDomainsByFlow获取用户按流量排名的域名。',
            'description' => '> - 不指定**StartTime**和**EndTime**时，默认读取当月的数据，同时支持按指定的起止时间查询，两者需要同时指定。'."\n"
                ."\n"
                .'- 最多可获取90天的数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnRefreshQuota' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'BlockQuota' => [
                                'description' => '封禁上限',
                                'type' => 'string',
                                'example' => '100',
                            ],
                            'PreloadRemain' => [
                                'description' => '当天剩余预热数量',
                                'type' => 'string',
                                'example' => '400',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '42E0554B-80F4-4921-AED6-ACFB22CAAAD0',
                            ],
                            'blockRemain' => [
                                'description' => '封禁余量',
                                'type' => 'string',
                                'example' => '100',
                            ],
                            'DirRemain' => [
                                'description' => '当天剩余目录刷新数量',
                                'type' => 'string',
                                'example' => '99',
                            ],
                            'UrlRemain' => [
                                'description' => '当天剩余URL刷新数量',
                                'type' => 'string',
                                'example' => '1996',
                            ],
                            'DirQuota' => [
                                'description' => '当天路径刷新数量上限',
                                'type' => 'string',
                                'example' => '100',
                            ],
                            'UrlQuota' => [
                                'description' => '当天URL刷新数量上限',
                                'type' => 'string',
                                'example' => '2000',
                            ],
                            'PreloadQuota' => [
                                'description' => '当天预热数量上限',
                                'type' => 'string',
                                'example' => '500',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"BlockQuota\\": \\"100\\",\\n  \\"PreloadRemain\\": \\"400\\",\\n  \\"RequestId\\": \\"42E0554B-80F4-4921-AED6-ACFB22CAAAD0\\",\\n  \\"blockRemain\\": \\"100\\",\\n  \\"DirRemain\\": \\"99\\",\\n  \\"UrlRemain\\": \\"1996\\",\\n  \\"DirQuota\\": \\"100\\",\\n  \\"UrlQuota\\": \\"2000\\",\\n  \\"PreloadQuota\\": \\"500\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnRefreshQuotaResponse>\\r\\n    <DirQuota>100</DirQuota>\\r\\n    <DirRemain>99</DirRemain>\\r\\n    <RequestId>42E0554B-80F4-4921-AED6-ACFB22CAAAD0</RequestId>\\r\\n    <UrlQuota>2000</UrlQuota>\\r\\n    <UrlRemain>1996</UrlRemain>\\r\\n    <PreloadQuota>500</PreloadQuota>\\r\\n    <PreloadRemain>400</PreloadRemain>\\r\\n</DescribeScdnRefreshQuotaResponse>","errorExample":""}]',
            'title' => '查询刷新预热次数限制和余量',
            'summary' => '调用DescribeScdnRefreshQuota查询刷新预热次数限制和余量。',
            'description' => '- 刷新、预热URL及目录的最大限制数量'."\n"
                .'- 当日剩余刷新、预热URL及目录的次数',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnRefreshTasks' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按任务ID查询刷新状态。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '70422****',
                    ],
                ],
                [
                    'name' => 'ObjectPath',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按路径查询，准确匹配。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://example.com/examplefile.txt',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '取得第几页，取值范围为**1~100000**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '42949672',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'ObjectType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务类型。取值：'."\n"
                            ."\n"
                            .'- **file**'."\n"
                            .'- **path**'."\n"
                            .'- **preload**'."\n"
                            ."\n"
                            .'当指定**DomainName**或**TaskStatus**时，该项为必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'file',
                        'enum' => [
                            'file',
                            'directory',
                            'preload',
                        ],
                    ],
                ],
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务状态。取值：'."\n"
                            ."\n"
                            .'- **Complete**：完成。'."\n"
                            .'- **Refreshing**：刷新中。'."\n"
                            .'- **Failed**：刷新失败。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Complete',
                        'enum' => [
                            'Complete',
                            'Refreshing',
                            'Failed',
                        ],
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，默认**20**，最大**50**。取值为**1~50**之前的任意整数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '30',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2017-01-01T12:12:20Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2017-01-01T12:13:20Z',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmyuji4b6****',
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
                                'example' => '174F6032-AA26-470D-B90E-36F0EB205BEE',
                            ],
                            'PageNumber' => [
                                'description' => '当前页码。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页大小。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '总个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'Tasks' => [
                                'type' => 'object',
                                'properties' => [
                                    'Task' => [
                                        'description' => 'SCDNTask组成的任务列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '状态。取值：'."\n"
                                                        ."\n"
                                                        .'- **Complete**：完成。'."\n"
                                                        .'- **Refreshing**：刷新中。'."\n"
                                                        .'- **Failed**：刷新失败。'."\n"
                                                        .'- **Pending**：等待刷新。',
                                                    'type' => 'string',
                                                    'example' => 'Complete',
                                                ],
                                                'CreationTime' => [
                                                    'description' => '任务对象创建时间，UTC时间。',
                                                    'type' => 'string',
                                                    'example' => '2014-11-27T08:18:38Z',
                                                ],
                                                'ObjectType' => [
                                                    'description' => '任务类型。取值：'."\n"
                                                        ."\n"
                                                        .'- **file**'."\n"
                                                        .'- **path**'."\n"
                                                        .'- **preload**',
                                                    'type' => 'string',
                                                    'example' => 'file',
                                                ],
                                                'Process' => [
                                                    'description' => '进度百分比。',
                                                    'type' => 'string',
                                                    'example' => '100%',
                                                ],
                                                'Description' => [
                                                    'description' => '刷新预热失败返回错误描述。目前包含三种错误：'."\n"
                                                        ."\n"
                                                        .'- **InternalError**'."\n"
                                                        .'- **OriginTimeout**'."\n"
                                                        .'- **OriginReturn StatusCode 5XX**',
                                                    'type' => 'string',
                                                    'example' => 'Internal Error',
                                                ],
                                                'ObjectPath' => [
                                                    'description' => '刷新对象路径。',
                                                    'type' => 'string',
                                                    'example' => 'http://example.com/examplefile.txt',
                                                ],
                                                'TaskId' => [
                                                    'description' => '任务ID。',
                                                    'type' => 'string',
                                                    'example' => '704225667',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidTaskId.Malformed',
                        'errorMessage' => 'The specified TaskId is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ObjectType',
                        'errorMessage' => 'The ObjectType parameter is required if DomainName or Status is specified.',
                    ],
                    [
                        'errorCode' => 'MissingTimeParameter',
                        'errorMessage' => 'The StartTime and EndTime must be both specified.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Mismatch',
                        'errorMessage' => 'The specified EndTime is earlier than the StartTime.',
                    ],
                    [
                        'errorCode' => 'DomainNameOverLimit',
                        'errorMessage' => 'A maximum of 500 domains are supported for each request.',
                    ],
                    [
                        'errorCode' => 'InvalidTime',
                        'errorMessage' => 'The query time cannot exceed the last 3 days.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Malformed',
                        'errorMessage' => 'Specified EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter StartTime is not supported.',
                    ],
                    [
                        'errorCode' => 'InvalidObjectType.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter ObjectType is not supported.',
                    ],
                    [
                        'errorCode' => 'InvalidStatus.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter Status is not supported.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.Malformed',
                        'errorMessage' => 'The specified StartTime parameter is invalid.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'TooManyRequests',
                        'errorMessage' => 'The server is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"174F6032-AA26-470D-B90E-36F0EB205BEE\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 2,\\n  \\"Tasks\\": {\\n    \\"Task\\": [\\n      {\\n        \\"Status\\": \\"Complete\\",\\n        \\"CreationTime\\": \\"2014-11-27T08:18:38Z\\",\\n        \\"ObjectType\\": \\"file\\",\\n        \\"Process\\": \\"100%\\",\\n        \\"Description\\": \\"Internal Error\\",\\n        \\"ObjectPath\\": \\"http://example.com/examplefile.txt\\",\\n        \\"TaskId\\": \\"704225667\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>2</TotalCount>\\n<Tasks>\\n    <Task>\\n        <Status>Complete</Status>\\n        <ObjectType>file</ObjectType>\\n        <ObjectPath>http://example.com/examplefile.txt</ObjectPath>\\n        <Description>Internal Error</Description>\\n        <TaskId>704225667</TaskId>\\n        <CreationTime>2014-11-27T08:18:38Z</CreationTime>\\n        <Process>100%</Process>\\n    </Task>\\n</Tasks>\\n<PageSize>10</PageSize>\\n<RequestId>174F6032-AA26-470D-B90E-36F0EB205BEE</RequestId>\\n<PageNumber>1</PageNumber>","errorExample":""}]',
            'title' => '查询刷新、预热状态是否在全网生效',
            'summary' => '调用DescribeScdnRefreshTasks查询刷新、预热状态是否在全网生效。',
            'description' => '**调用该接口前，请您注意**：'."\n"
                .'- 支持根据任务ID和URL查询。'."\n"
                .'- TaskId与ObjectPath都不指定，默认查3天内，第一页的数据（20条）。'."\n"
                .'- TaskId与ObjectPath可以同时指定。'."\n"
                .'- 当指定DomainName或TaskStatus时，ObjectType该项为必填。'."\n"
                .'- 只可查询3天内的数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'PreloadScdnObjectCaches' => [
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
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ObjectPath',
                    'in' => 'query',
                    'schema' => [
                        'description' => '多个URL之间需要用换行符（`\\n或\\r\\n`）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.aliyundoc.com/examplefile.txt',
                    ],
                ],
                [
                    'name' => 'Area',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预热区域，取值：**domestic**, **overseas**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'overseas',
                        'enum' => [
                            'domestic',
                            'overseas',
                        ],
                    ],
                ],
                [
                    'name' => 'L2Preload',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否预热到 L2 Cache。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'WithHeader',
                    'in' => 'query',
                    'schema' => [
                        'description' => '支持用户自定义预热Header，用JSON串格式提交。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "Accept-Encoding": ['."\n"
                            .'            "gzip"'."\n"
                            .'      ]'."\n"
                            .'}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PreloadTaskId' => [
                                'description' => '预热返回的任务ID，多个任务ID用逗号（半角）分隔',
                                'type' => 'string',
                                'example' => '9524****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'E5BD4B50-7A02-493A-AE0B-97B9024B413',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SingleRequest.OverLimit',
                        'errorMessage' => 'Over 1000 urls in a single request',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.Preload',
                        'errorMessage' => 'Your preload attempts have exceeded the daily limit.',
                    ],
                    [
                        'errorCode' => 'InvalidObjectPath.Malformed',
                        'errorMessage' => 'The specified ObjectPath is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidExtensiveDomain.ValueNotSupported',
                        'errorMessage' => 'The specified ExtensiveDomain is not supported.',
                    ],
                    [
                        'errorCode' => 'PreloadQueueFull',
                        'errorMessage' => 'The warming queue is full; please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PreloadTaskId\\": \\"9524****\\",\\n  \\"RequestId\\": \\"E5BD4B50-7A02-493A-AE0B-97B9024B413\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>E5BD4B50-7A02-493A-AE0B-97B9024B413</RequestId>\\n<PreloadTaskId>9524****</PreloadTaskId>","errorExample":""}]',
            'title' => 'PreloadScdnObjectCaches',
            'summary' => '调用PreloadScdnObjectCaches将源站的内容主动预热到L2 Cache节点上，用户首次访问可直接命中缓存，缓解源站压力。',
            'description' => '限制：'."\n"
                ."\n"
                .'- 一个ID每天最多可提交500条URL预热请求。'."\n"
                ."\n"
                .'- 目前不支持目录级别的预热。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RefreshScdnObjectCaches' => [
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
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ObjectPath',
                    'in' => 'query',
                    'schema' => [
                        'description' => '刷新路径，多个URL之间需要用换行符`（\\n或\\r\\n）`分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.aliyundoc.com/examplefile.txt',
                    ],
                ],
                [
                    'name' => 'ObjectType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '刷新的类型， 其值可以为**File** | **Directory**，默认是File。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'File',
                        'default' => 'File',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RefreshTaskId' => [
                                'description' => '刷新返回的任务ID，多个任务ID用逗号（半角）分隔',
                                'type' => 'string',
                                'example' => '704222904',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D61E4801-EAFF-4A63-AAE1-FBF6CE1CFD1C',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SingleRequest.OverLimit',
                        'errorMessage' => 'Over 1000 urls in a single request',
                    ],
                    [
                        'errorCode' => 'InvalidObjectType.ValueNotSupported',
                        'errorMessage' => 'The specified value of "ObjectType" is not supported.',
                    ],
                    [
                        'errorCode' => 'ObjectPath.Malformed',
                        'errorMessage' => 'The specified value of parameter ObjectPath is malformed.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.Refresh',
                        'errorMessage' => 'Your refresh attempts have exceeded the daily limit.',
                    ],
                    [
                        'errorCode' => 'InvalidObjectPath.Malformed',
                        'errorMessage' => 'The specified ObjectPath is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidExtensiveDomain.ValueNotSupported',
                        'errorMessage' => 'The specified ExtensiveDomain is not supported.',
                    ],
                    [
                        'errorCode' => 'QuotaPerMinuteExceeded.Refresh',
                        'errorMessage' => 'You tried to refresh too frequently; please try again later.',
                    ],
                    [
                        'errorCode' => 'TooMany.Refresh',
                        'errorMessage' => 'The refresh queue is full; please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RefreshTaskId\\": \\"704222904\\",\\n  \\"RequestId\\": \\"D61E4801-EAFF-4A63-AAE1-FBF6CE1CFD1C\\"\\n}","errorExample":""},{"type":"xml","example":"<RefreshScdnObjectCachesResponse>\\r\\n    <RefreshTaskId>704222904</RefreshTaskId>\\r\\n    <RequestId>D61E4801-EAFF-4A63-AAE1-FBF6CE1CFD1C</RequestId>\\r\\n</RefreshScdnObjectCachesResponse>","errorExample":""}]',
            'title' => '刷新节点文件内容',
            'summary' => '刷新节点上的文件内容，刷新指定URL内容至Cache节点，支持URL批量刷新。',
            'description' => '限制：'."\n"
                ."\n"
                .'- 一个ID每天最多可提交2000条URL和100个目录预热刷新类请求。'."\n"
                ."\n"
                .'- 刷新API每次最高提交1000条URL，且单域名每次最高提交100条URL。'."\n"
                ."\n"
                .'- 刷新预热类接口包含 **RefreshScdnObjectCaches** 刷新接口和 **PushScdnObjectCache** 预热接口。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnCertificateDetail' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CertName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'certname',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CertName' => [
                                'description' => '证书名称',
                                'type' => 'string',
                                'example' => 'vmeixme',
                            ],
                            'Key' => [
                                'description' => '证书Key值',
                                'type' => 'string',
                                'example' => 'key',
                            ],
                            'Cert' => [
                                'description' => '证书内容',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----xxx-----END CERTIFICATE-----',
                            ],
                            'CertId' => [
                                'description' => '证书ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'C7C69682-7F88-40DD-A198-10D0309E439B',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CertName\\": \\"vmeixme\\",\\n  \\"Key\\": \\"key\\",\\n  \\"Cert\\": \\"-----BEGIN CERTIFICATE-----xxx-----END CERTIFICATE-----\\",\\n  \\"CertId\\": 123,\\n  \\"RequestId\\": \\"C7C69682-7F88-40DD-A198-10D0309E439B\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnCertificateDetailResponse>\\r\\n    <CertId>123</CertId>\\r\\n    <RequestId>C7C69682-7F88-40DD-A198-10D0309E439B</RequestId>\\r\\n    <CertName>证书名称</CertName>\\r\\n    <Cert>-----BEGIN CERTIFICATE-----xxx-----END CERTIFICATE-----</Cert>\\r\\n</DescribeScdnCertificateDetailResponse>","errorExample":""}]',
            'title' => '获取证书详细信息',
            'summary' => '调用DescribeScdnCertificateDetail获取证书详细信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnCertificateList' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加速域名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'FC0E34AC-0239-44A7-AB0E-800DE522C8DA',
                            ],
                            'CertificateListModel' => [
                                'description' => 'CertificateListModel类型',
                                'type' => 'object',
                                'properties' => [
                                    'Count' => [
                                        'description' => '证书个数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'CertList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Cert' => [
                                                'description' => '证书列表信息',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'LastTime' => [
                                                            'description' => '时间戳',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1512388610',
                                                        ],
                                                        'Fingerprint' => [
                                                            'description' => '证书指纹',
                                                            'type' => 'string',
                                                            'example' => 'xxx',
                                                        ],
                                                        'CertName' => [
                                                            'description' => '证书名称',
                                                            'type' => 'string',
                                                            'example' => '证书1',
                                                        ],
                                                        'Issuer' => [
                                                            'description' => '证书发行商',
                                                            'type' => 'string',
                                                            'example' => 'xxx',
                                                        ],
                                                        'CertId' => [
                                                            'description' => '证书ID',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '123',
                                                        ],
                                                        'Common' => [
                                                            'description' => '证书中的CN属性，一般是一个域名',
                                                            'type' => 'string',
                                                            'example' => 'example.com',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FC0E34AC-0239-44A7-AB0E-800DE522C8DA\\",\\n  \\"CertificateListModel\\": {\\n    \\"Count\\": 2,\\n    \\"CertList\\": {\\n      \\"Cert\\": [\\n        {\\n          \\"LastTime\\": 1512388610,\\n          \\"Fingerprint\\": \\"xxx\\",\\n          \\"CertName\\": \\"证书1\\",\\n          \\"Issuer\\": \\"xxx\\",\\n          \\"CertId\\": 123,\\n          \\"Common\\": \\"example.com\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnCertificateListResponse>\\r\\n    <CertificateListModel>\\r\\n        <Count>2</Count>\\r\\n        <CertList>\\r\\n            <Cert>\\r\\n                <CertName>证书1</CertName>\\r\\n                <Issuer>xxx</Issuer>\\r\\n                <LastTime>1512388610</LastTime>\\r\\n                <CertId>xxx</CertId>\\r\\n                <Common>test</Common>\\r\\n                <Fingerprint>xxx</Fingerprint>\\r\\n            </Cert>\\r\\n            <Cert>\\r\\n                <CertName>证书2</CertName>\\r\\n                <Issuer>xxx</Issuer>\\r\\n                <LastTime>1512388659</LastTime>\\r\\n                <CertId>xxx</CertId>\\r\\n                <Common>test</Common>\\r\\n                <Fingerprint>xxx</Fingerprint>\\r\\n            </Cert>\\r\\n        </CertList>\\r\\n    </CertificateListModel>\\r\\n    <RequestId>FC0E34AC-0239-44A7-AB0E-800DE522C8DA</RequestId>\\r\\n</DescribeScdnCertificateListResponse>","errorExample":""}]',
            'title' => '获取证书列表信息',
            'summary' => '调用DescribeScdnCertificateList获取证书列表信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainTrafficData' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- 若参数为空，默认返回所有加速域名合并后数据。'."\n"
                            .'- 可输入需要查询的加速域名。'."\n"
                            .'- 支持批量域名查询，多个域名用逗号（半角）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据起始时间点。'."\n"
                            ."\n"
                            .'- 日期格式按照ISO8601表示法，并使用UTC时间。'."\n"
                            .'- 格式为：YYYY-MM-DDThh:mm:ssZ。'."\n"
                            .'- 最小数据粒度为5分钟。'."\n"
                            .'- 不写默认读取过去24小时数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2017-12-10T20:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- 结束时间需大于起始时间。'."\n"
                            .'- 日期格式按照ISO8601表示法，并使用UTC时间。'."\n"
                            .'- 格式为：YYYY-MM-DDThh:mm:ssZ。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2017-12-10T21:00:00Z',
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询数据的时间粒度，支持300、 3600和86400秒。'."\n"
                            ."\n"
                            .'- 3天以内（不包含3天整）支持300、 3600、 86400。'."\n"
                            .'- 3-31天（不包含31天整）支持3600和86400。'."\n"
                            .'- 31天以上支持86400。'."\n"
                            .'- 不传和传的值不支持时，使用默认值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '300',
                    ],
                ],
                [
                    'name' => 'IspNameEn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运营商英文名，通过**DescribeCdnRegionAndIsp**接口获得，不传为所有运营商。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'alibaba',
                    ],
                ],
                [
                    'name' => 'LocationNameEn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '区域英文名，通过**DescribeCdnRegionAndIsp**接口获得，不传为所有区域。',
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
                            'EndTime' => [
                                'description' => '结束时间。',
                                'type' => 'string',
                                'example' => '2017-12-10T21:00:00Z',
                            ],
                            'StartTime' => [
                                'description' => '开始时间。',
                                'type' => 'string',
                                'example' => '2017-12-10T20:00:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B955107D-E658-4E77-B913-E0AC3D31693E',
                            ],
                            'DomainName' => [
                                'description' => '安全加速域名。',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'DataInterval' => [
                                'description' => '每条记录的时间间隔，以秒为单位。',
                                'type' => 'string',
                                'example' => '300',
                            ],
                            'TrafficDataPerInterval' => [
                                'type' => 'object',
                                'properties' => [
                                    'DataModule' => [
                                        'description' => '每个时间间隔的流量数据。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TrafficValue' => [
                                                    'description' => '总流量。',
                                                    'type' => 'string',
                                                    'example' => '423304182',
                                                ],
                                                'HttpTrafficValue' => [
                                                    'description' => 'HTTP流量。',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'TimeStamp' => [
                                                    'description' => '时间片起始时刻。',
                                                    'type' => 'string',
                                                    'example' => '2017-12-10T20:00:00Z',
                                                ],
                                                'HttpsTrafficValue' => [
                                                    'description' => 'HTTPS流量。',
                                                    'type' => 'string',
                                                    'example' => '423304182',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'StartTime and EndTime can not be single.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.Malformed',
                        'errorMessage' => 'Specified StartTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Malformed',
                        'errorMessage' => 'Specified EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Mismatch',
                        'errorMessage' => 'Specified end time does not math the specified start time.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter StartTime is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2017-12-10T21:00:00Z\\",\\n  \\"StartTime\\": \\"2017-12-10T20:00:00Z\\",\\n  \\"RequestId\\": \\"B955107D-E658-4E77-B913-E0AC3D31693E\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"DataInterval\\": \\"300\\",\\n  \\"TrafficDataPerInterval\\": {\\n    \\"DataModule\\": [\\n      {\\n        \\"TrafficValue\\": \\"423304182\\",\\n        \\"HttpTrafficValue\\": \\"0\\",\\n        \\"TimeStamp\\": \\"2017-12-10T20:00:00Z\\",\\n        \\"HttpsTrafficValue\\": \\"423304182\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainTrafficDataResponse>\\r\\n    <DomainName>example.com</DomainName>\\r\\n    <DataInterval>300</DataInterval>\\r\\n    <TrafficDataPerInterval>\\r\\n        <DataModule>\\r\\n            <TimeStamp>2017-12-10T20:00:00Z</TimeStamp>\\r\\n            <TrafficValue>423304182</TrafficValue>\\r\\n            <HttpTrafficValue>0</HttpTrafficValue>\\r\\n            <HttpsTrafficValue>423304182</HttpsTrafficValue>\\r\\n        </DataModule>\\r\\n        <DataModule>\\r\\n            <TimeStamp>2017-12-10T20:00:05Z</TimeStamp>\\r\\n            <TrafficValue>454680793</TrafficValue>\\r\\n            <HttpTrafficValue>0</HttpTrafficValue>\\r\\n            <HttpsTrafficValue>454680793</HttpsTrafficValue>\\r\\n        </DataModule>\\r\\n    </TrafficDataPerInterval>\\r\\n    <RequestId>B955107D-E658-4E77-B913-E0AC3D31693E</RequestId>\\r\\n    <StartTime>2017-12-10T20:00:00Z</StartTime>\\r\\n    <EndTime>2017-12-10T21:00:00Z</EndTime>\\r\\n</DescribeScdnDomainTrafficDataResponse>","errorExample":""}]',
            'title' => '获取网络流量监控数据',
            'summary' => '获取安全加速域名的网络流量监控数据，单位byte。',
            'description' => '- 不指定StartTime和EndTime时，默认读取过去24小时的数据，同时支持按指定的起止时间查询，两者需要同时指定。'."\n"
                .'- 支持批量域名查询，多个域名用逗号（半角）分隔。'."\n"
                .'- 最多可获取最近90天的数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainOriginTrafficData' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- 若参数为空，默认返回所有加速域名合并后数据。'."\n"
                            .'- 可输入需要查询的加速域名。'."\n"
                            .'- 支持批量域名查询，多个域名用逗号（半角）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据起始时间点。'."\n"
                            ."\n"
                            .'- 日期格式按照ISO8601表示法，并使用UTC时间。'."\n"
                            .'- 格式为：YYYY-MM-DDThh:mm:ssZ。'."\n"
                            .'- 最小数据粒度为5分钟。'."\n"
                            .'- 不写默认读取过去24小时数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2017-12-10T20:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- 结束时间需大于起始时间。'."\n"
                            .'- 获日期格式按照ISO8601表示法，并使用UTC时间。'."\n"
                            .'- 格式为：YYYY-MM-DDThh:mm:ssZ。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2017-12-10T21:00:00Z',
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询数据的时间粒度，支持300、 3600和86400秒。'."\n"
                            ."\n"
                            .'- 3天以内（不包含3天整）支持300、 3600、 86400。'."\n"
                            .'- 3-31天（不包含31天整）支持3600和86400。'."\n"
                            .'- 31天以上支持86400。'."\n"
                            .'- 不传和传的值不支持时，使用默认值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '300',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'EndTime' => [
                                'description' => '结束时间。',
                                'type' => 'string',
                                'example' => '2017-12-10T21:00:00Z',
                            ],
                            'StartTime' => [
                                'description' => '开始时间。',
                                'type' => 'string',
                                'example' => '2017-12-10T20:00:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A666D44F-19D6-490E-97CF-1A64AB962C57',
                            ],
                            'DomainName' => [
                                'description' => '安全加速域名。',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'DataInterval' => [
                                'description' => '每条记录的时间间隔，以秒为单位。',
                                'type' => 'string',
                                'example' => '300',
                            ],
                            'OriginTrafficDataPerInterval' => [
                                'type' => 'object',
                                'properties' => [
                                    'DataModule' => [
                                        'description' => '每个时间间隔的回源流量数据。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TrafficValue' => [
                                                    'description' => '回源流量数据。',
                                                    'type' => 'string',
                                                    'example' => '1000',
                                                ],
                                                'HttpTrafficValue' => [
                                                    'description' => 'HTTP回源流量数据。',
                                                    'type' => 'string',
                                                    'example' => '500',
                                                ],
                                                'TimeStamp' => [
                                                    'description' => '时间片起始时刻。',
                                                    'type' => 'string',
                                                    'example' => '2017-12-10T21:00:00Z',
                                                ],
                                                'HttpsTrafficValue' => [
                                                    'description' => 'HTTPS回源流量数据。',
                                                    'type' => 'string',
                                                    'example' => '500',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'StartTime and EndTime can not be single.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.Malformed',
                        'errorMessage' => 'Specified StartTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Malformed',
                        'errorMessage' => 'Specified EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Mismatch',
                        'errorMessage' => 'Specified end time does not math the specified start time.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter StartTime is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2017-12-10T21:00:00Z\\",\\n  \\"StartTime\\": \\"2017-12-10T20:00:00Z\\",\\n  \\"RequestId\\": \\"A666D44F-19D6-490E-97CF-1A64AB962C57\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"DataInterval\\": \\"300\\",\\n  \\"OriginTrafficDataPerInterval\\": {\\n    \\"DataModule\\": [\\n      {\\n        \\"TrafficValue\\": \\"1000\\",\\n        \\"HttpTrafficValue\\": \\"500\\",\\n        \\"TimeStamp\\": \\"2017-12-10T21:00:00Z\\",\\n        \\"HttpsTrafficValue\\": \\"500\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainOriginTrafficDataResponse>\\r\\n    <DomainName>example.com</DomainName>\\r\\n    <DataInterval>300</DataInterval>\\r\\n    <OriginTrafficDataPerInterval>\\r\\n        <DataModule>\\r\\n            <TimeStamp>2017-12-10T21:00:00Z</TimeStamp>\\r\\n            <TrafficValue>1000</TrafficValue>\\r\\n            <HttpTrafficValue>500</HttpTrafficValue>\\r\\n            <HttpsTrafficValue>500</HttpsTrafficValue>\\r\\n        </DataModule>\\r\\n        <DataModule>\\r\\n            <TimeStamp>2017-12-10T21:00:05Z</TimeStamp>\\r\\n            <TrafficValue>2000</TrafficValue>\\r\\n            <HttpTrafficValue>1500</HttpTrafficValue>\\r\\n            <HttpsTrafficValue>500</HttpsTrafficValue>\\r\\n        </DataModule>\\r\\n    </OriginTrafficDataPerInterval>\\r\\n    <RequestId>A666D44F-19D6-490E-97CF-1A64AB962C57</RequestId>\\r\\n    <StartTime>2017-12-10T20:00:00Z</StartTime>\\r\\n    <EndTime>2017-12-10T21:00:00Z</EndTime>\\r\\n</DescribeScdnDomainOriginTrafficDataResponse>","errorExample":""}]',
            'title' => '获取回源流量监控数据',
            'summary' => '获取安全加速域名的回源流量监控数据，单位bit。',
            'description' => '- 不指定StartTime和EndTime时，默认读取过去24小时的数据，同时支持按指定的起止时间查询，两者需要同时指定。'."\n"
                .'- 支持批量域名查询，多个域名可用逗号（半角）分隔。'."\n"
                .'- 最多可获取最近90天的数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainRealTimeSrcTrafficData' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可输入需要查询的加速域名。支持批量域名查询，多个域名用逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据起始时间点。'."\n"
                            ."\n"
                            .'- 日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。'."\n"
                            .'- 不写默认读取过去1小时数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2015-12-10T20:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据结束时间点。'."\n"
                            ."\n"
                            .'- 结束时间需大于起始时间。'."\n"
                            .'- 获日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2015-12-10T20:01:00Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'EndTime' => [
                                'description' => '结束时间',
                                'type' => 'string',
                                'example' => '2015-12-10T20:01:00Z',
                            ],
                            'StartTime' => [
                                'description' => '开始时间',
                                'type' => 'string',
                                'example' => '2015-12-10T20:00:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A666D44F-19D6-490E-97CF-1A64AB962C57',
                            ],
                            'DomainName' => [
                                'description' => '加速域名信息',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'DataInterval' => [
                                'description' => '每条记录的时间间隔，以秒为单位。',
                                'type' => 'string',
                                'example' => '60',
                            ],
                            'RealTimeSrcTrafficDataPerInterval' => [
                                'type' => 'object',
                                'properties' => [
                                    'DataModule' => [
                                        'description' => '每个时间间隔的回源流量数据',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Value' => [
                                                    'description' => '详细使用数据',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'TimeStamp' => [
                                                    'description' => '时间片起始时刻',
                                                    'type' => 'string',
                                                    'example' => '2015-12-10T20:00:00Z',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'StartTime and EndTime can not be single.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.Malformed',
                        'errorMessage' => 'Specified StartTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Malformed',
                        'errorMessage' => 'Specified EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Mismatch',
                        'errorMessage' => 'Specified end time does not math the specified start time.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter StartTime is not supported.',
                    ],
                    [
                        'errorCode' => 'Abs.DomainName.Malformed',
                        'errorMessage' => 'The size of DomainName is too big.',
                    ],
                    [
                        'errorCode' => 'InvalidInterval.Malformed',
                        'errorMessage' => 'Specified Interval is malformed.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2015-12-10T20:01:00Z\\",\\n  \\"StartTime\\": \\"2015-12-10T20:00:00Z\\",\\n  \\"RequestId\\": \\"A666D44F-19D6-490E-97CF-1A64AB962C57\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"DataInterval\\": \\"60\\",\\n  \\"RealTimeSrcTrafficDataPerInterval\\": {\\n    \\"DataModule\\": [\\n      {\\n        \\"Value\\": \\"0\\",\\n        \\"TimeStamp\\": \\"2015-12-10T20:00:00Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainRealTimeSrcTrafficDataResponse>\\r\\n    <DataInterval>60</DataInterval>\\r\\n    <RealTimeSrcTrafficDataPerInterval>\\r\\n        <DataModule>\\r\\n            <TimeStamp>2015-12-10T20:00:00Z</TimeStamp>\\r\\n            <Value>0</Value>\\r\\n        </DataModule>\\r\\n        <DataModule>\\r\\n            <TimeStamp>2015-12-10T20:01:00Z</TimeStamp>\\r\\n            <Value>0</Value>\\r\\n        </DataModule>\\r\\n    </RealTimeSrcTrafficDataPerInterval>\\r\\n    <RequestId>A666D44F-19D6-490E-97CF-1A64AB962C57</RequestId>\\r\\n    <DomainName>example.com</DomainName>\\r\\n    <EndTime>2015-12-10T20:01:00Z</EndTime>\\r\\n    <StartTime>2015-12-10T20:00:00Z</StartTime>\\r\\n</DescribeScdnDomainRealTimeSrcTrafficDataResponse>","errorExample":""}]',
            'title' => '获取加速域名回源流量监控数据',
            'summary' => '获取加速域名的1分钟回源流量监控数据，单位bit。',
            'description' => '**调用该接口前，请您注意：**'."\n"
                ."\n"
                .'- 不指定StartTime和EndTime时，默认读取过去1小时的数据，同时支持按指定的起止时间查询，两者需要同时指定。'."\n"
                .'- 支持批量域名查询，多个域名可用逗号（,）分隔。'."\n"
                .'- 最多可获取最近90天的数据。',
        ],
        'DescribeScdnDomainRealTimeTrafficData' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可输入需要查询的加速域名。支持批量域名查询，多个域名用逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据起始时间点。'."\n"
                            ."\n"
                            .'- 日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。'."\n"
                            .'- 不写默认读取过去1小时数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2015-12-10T20:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取数据结束时间点。'."\n"
                            ."\n"
                            .'- 结束时间需大于起始时间。'."\n"
                            .'- 获日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2015-12-10T20:01:00Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'EndTime' => [
                                'description' => '结束时间',
                                'type' => 'string',
                                'example' => '2015-12-10T20:01:00Z',
                            ],
                            'StartTime' => [
                                'description' => '开始时间',
                                'type' => 'string',
                                'example' => '2015-12-10T20:00:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A666D44F-19D6-490E-97CF-1A64AB962C57',
                            ],
                            'DomainName' => [
                                'description' => '加速域名信息',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'DataInterval' => [
                                'description' => '每条记录的时间间隔，以秒为单位。',
                                'type' => 'string',
                                'example' => '60',
                            ],
                            'RealTimeTrafficDataPerInterval' => [
                                'type' => 'object',
                                'properties' => [
                                    'DataModule' => [
                                        'description' => '每个时间间隔的回源流量数据',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Value' => [
                                                    'description' => '详细使用数据',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'TimeStamp' => [
                                                    'description' => '时间片起始时刻',
                                                    'type' => 'string',
                                                    'example' => '2015-12-10T20:00:00Z',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'StartTime and EndTime can not be single.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.Malformed',
                        'errorMessage' => 'Specified StartTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Malformed',
                        'errorMessage' => 'Specified EndTime is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidEndTime.Mismatch',
                        'errorMessage' => 'Specified end time does not math the specified start time.',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter StartTime is not supported.',
                    ],
                    [
                        'errorCode' => 'Abs.DomainName.Malformed',
                        'errorMessage' => 'The size of DomainName is too big.',
                    ],
                    [
                        'errorCode' => 'InvalidInterval.Malformed',
                        'errorMessage' => 'Specified Interval is malformed.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2015-12-10T20:01:00Z\\",\\n  \\"StartTime\\": \\"2015-12-10T20:00:00Z\\",\\n  \\"RequestId\\": \\"A666D44F-19D6-490E-97CF-1A64AB962C57\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"DataInterval\\": \\"60\\",\\n  \\"RealTimeTrafficDataPerInterval\\": {\\n    \\"DataModule\\": [\\n      {\\n        \\"Value\\": \\"0\\",\\n        \\"TimeStamp\\": \\"2015-12-10T20:00:00Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainRealTimeTrafficDataResponse>\\r\\n    <DataInterval>60</DataInterval>\\r\\n    <RealTimeSrcTrafficDataPerInterval>\\r\\n        <DataModule>\\r\\n            <TimeStamp>2015-12-10T20:00:00Z</TimeStamp>\\r\\n            <Value>0</Value>\\r\\n        </DataModule>\\r\\n        <DataModule>\\r\\n            <TimeStamp>2015-12-10T20:01:00Z</TimeStamp>\\r\\n            <Value>0</Value>\\r\\n        </DataModule>\\r\\n    </RealTimeSrcTrafficDataPerInterval>\\r\\n    <RequestId>A666D44F-19D6-490E-97CF-1A64AB962C57</RequestId>\\r\\n    <DomainName>example.com</DomainName>\\r\\n    <EndTime>2015-12-10T20:01:00Z</EndTime>\\r\\n    <StartTime>2015-12-10T20:00:00Z</StartTime>\\r\\n</DescribeScdnDomainRealTimeTrafficDataResponse>","errorExample":""}]',
            'title' => '获取加速域名回源流量监控数据',
            'summary' => '获取加速域名的1分钟回源流量监控数据，单位bit。',
            'description' => '**调用该接口前，请您注意：**'."\n"
                ."\n"
                .'- 不指定StartTime和EndTime时，默认读取过去1小时的数据，同时支持按指定的起止时间查询，两者需要同时指定。'."\n"
                .'- 支持批量域名查询，多个域名可用逗号（,）分隔。'."\n"
                .'- 最多可获取最近90天的数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnCcQpsInfo' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加速域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间，日期格式按照ISO8601表示法，并使用UTC时间。'."\n"
                            ."\n"
                            .'格式为：YYYY-MM-DDThh: mm:ssZ。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2017-11-30T00:55:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间，日期格式按照ISO8601表示法，并使用UTC时间。'."\n"
                            ."\n"
                            .'格式为：YYYY-MM-DDThh: mm:ssZ。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2017-11-30T00:55:00Z',
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
                                'example' => 'FA2EE241-5E9D-488A-B36E-408BF81C077E',
                            ],
                            'Attacks' => [
                                'type' => 'object',
                                'properties' => [
                                    'Attack' => [
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '攻击qps。',
                                            'type' => 'string',
                                            'example' => '{"Attack": [119089,118006,118269,118605,118990,118062]}',
                                        ],
                                    ],
                                ],
                            ],
                            'Totals' => [
                                'type' => 'object',
                                'properties' => [
                                    'Total' => [
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '总qps。',
                                            'type' => 'string',
                                            'example' => '{"Total": [119097,118013,118274,118609,118997,118068]}',
                                        ],
                                    ],
                                ],
                            ],
                            'TimeScopes' => [
                                'type' => 'object',
                                'properties' => [
                                    'TimeScope' => [
                                        'description' => '时间范围。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Interval' => [
                                                    'description' => '时间间隔，单位毫秒。',
                                                    'type' => 'string',
                                                    'example' => '60000',
                                                ],
                                                'Start' => [
                                                    'description' => '开始时间，时间戳，单位毫秒。',
                                                    'type' => 'string',
                                                    'example' => '1512003300000',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MISS_PARAMETER',
                        'errorMessage' => 'MISS_PARAMETER.',
                    ],
                    [
                        'errorCode' => 'USER_NOT_EXIST',
                        'errorMessage' => 'USER_NOT_EXIST',
                    ],
                    [
                        'errorCode' => 'QUERY_DOMAIN_QPS_FAILED',
                        'errorMessage' => 'QUERY_DOMAIN_QPS_FAILED',
                    ],
                    [
                        'errorCode' => 'DOMAIN_NOT_EXIST',
                        'errorMessage' => 'DOMAIN_NOT_EXIST',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FA2EE241-5E9D-488A-B36E-408BF81C077E\\",\\n  \\"Attacks\\": {\\n    \\"Attack\\": [\\n      \\"{\\\\\\"Attack\\\\\\": [119089,118006,118269,118605,118990,118062]}\\"\\n    ]\\n  },\\n  \\"Totals\\": {\\n    \\"Total\\": [\\n      \\"{\\\\\\"Total\\\\\\": [119097,118013,118274,118609,118997,118068]}\\"\\n    ]\\n  },\\n  \\"TimeScopes\\": {\\n    \\"TimeScope\\": [\\n      {\\n        \\"Interval\\": \\"60000\\",\\n        \\"Start\\": \\"1512003300000\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnCcQpsInfoResponse>\\r\\n    <Attacks>\\r\\n        <Attack>119089</Attack>\\r\\n        <Attack>118006</Attack>\\r\\n        <Attack>118269</Attack>\\r\\n        <Attack>118605</Attack>\\r\\n        <Attack>118990</Attack>\\r\\n        <Attack>118062</Attack>\\r\\n    </Attacks>\\r\\n    <Totals>\\r\\n        <Total>119097</Total>\\r\\n        <Total>118013</Total>\\r\\n        <Total>118274</Total>\\r\\n        <Total>118609</Total>\\r\\n        <Total>118997</Total>\\r\\n        <Total>118068</Total>\\r\\n    </Totals>\\r\\n    <TimeScopes>\\r\\n        <Interval>60000</Interval>\\r\\n        <Start>1512003300000</Start>\\r\\n    </TimeScopes>\\r\\n    <RequestId>FA2EE241-5E9D-488A-B36E-408BF81C077E</RequestId>\\r\\n</DescribeScdnCcQpsInfoResponse>","errorExample":""}]',
            'title' => '查询频次监控数据',
            'summary' => '调用DescribeScdnCcQpsInfo查询频次监控数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDDoSTrafficInfo' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。'."\n"
                            ."\n"
                            .'日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DDThh: mm:ssZ，例如2017-11-30T00:55:00Z。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2017-11-30T00:55:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。'."\n"
                            ."\n"
                            .'日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DDThh: mm:ssZ，例如2017-11-30T00:56:00Z。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2017-11-30T00:56:00Z',
                    ],
                ],
                [
                    'name' => 'Line',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运营商。取值：'."\n"
                            ."\n"
                            .'- **CUT**：联通。'."\n"
                            .'- **CT**：电信。'."\n"
                            .'- **ALL**：所有。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ALL',
                        'enum' => [
                            'CT',
                            'CUT',
                            'ALL',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8EEEA133-B4E4-4BE4-B00D-93B60387D8FD',
                            ],
                            'PpsTotals' => [
                                'type' => 'object',
                                'properties' => [
                                    'PpsTotal' => [
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '每秒包个数。',
                                            'type' => 'string',
                                            'example' => '{"PpsTotal": [519738,550892,555648,553692]}',
                                        ],
                                    ],
                                ],
                            ],
                            'PpsDrops' => [
                                'type' => 'object',
                                'properties' => [
                                    'PpsDrop' => [
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '每秒攻击的包个数。',
                                            'type' => 'string',
                                            'example' => '{"PpsDrop": [680,665,674,633]}',
                                        ],
                                    ],
                                ],
                            ],
                            'BpsDrops' => [
                                'type' => 'object',
                                'properties' => [
                                    'BpsDrop' => [
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '攻击带宽，单位为bps。',
                                            'type' => 'string',
                                            'example' => '{"BpsDrop": [468000,488000,488000,461000]}',
                                        ],
                                    ],
                                ],
                            ],
                            'BpsTotals' => [
                                'type' => 'object',
                                'properties' => [
                                    'BpsTotal' => [
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '总带宽，单位为bps。',
                                            'type' => 'string',
                                            'example' => '{"BpsTotal": [581720000,616652000,621827000,619432000]}',
                                        ],
                                    ],
                                ],
                            ],
                            'TimeScopes' => [
                                'type' => 'object',
                                'properties' => [
                                    'TimeScope' => [
                                        'description' => '时间范围。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Interval' => [
                                                    'description' => '时间间隔，单位为毫秒。',
                                                    'type' => 'string',
                                                    'example' => '60000',
                                                ],
                                                'Start' => [
                                                    'description' => '开始时间，时间戳，单位为毫秒。',
                                                    'type' => 'string',
                                                    'example' => '1512003360000',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MISS_PARAMETER',
                        'errorMessage' => 'MISS_PARAMETER.',
                    ],
                    [
                        'errorCode' => 'USER_NOT_EXIST',
                        'errorMessage' => 'USER_NOT_EXIST',
                    ],
                    [
                        'errorCode' => 'QUERY_TRAFFIC_FAILED',
                        'errorMessage' => 'QUERY_TRAFFIC_FAILED',
                    ],
                    [
                        'errorCode' => 'InvalidStartTime.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter StartTime is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8EEEA133-B4E4-4BE4-B00D-93B60387D8FD\\",\\n  \\"PpsTotals\\": {\\n    \\"PpsTotal\\": [\\n      \\"{\\\\\\"PpsTotal\\\\\\": [519738,550892,555648,553692]}\\"\\n    ]\\n  },\\n  \\"PpsDrops\\": {\\n    \\"PpsDrop\\": [\\n      \\"{\\\\\\"PpsDrop\\\\\\": [680,665,674,633]}\\"\\n    ]\\n  },\\n  \\"BpsDrops\\": {\\n    \\"BpsDrop\\": [\\n      \\"{\\\\\\"BpsDrop\\\\\\": [468000,488000,488000,461000]}\\"\\n    ]\\n  },\\n  \\"BpsTotals\\": {\\n    \\"BpsTotal\\": [\\n      \\"{\\\\\\"BpsTotal\\\\\\": [581720000,616652000,621827000,619432000]}\\"\\n    ]\\n  },\\n  \\"TimeScopes\\": {\\n    \\"TimeScope\\": [\\n      {\\n        \\"Interval\\": \\"60000\\",\\n        \\"Start\\": \\"1512003360000\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDDoSTrafficInfoResponse>\\r\\n    <PpsTotals>\\r\\n        <PpsTotal>519738</PpsTotal>\\r\\n        <PpsTotal>550892</PpsTotal>\\r\\n        <PpsTotal>555648</PpsTotal>\\r\\n        <PpsTotal>553692</PpsTotal>\\r\\n    </PpsTotals>\\r\\n    <PpsDrops>\\r\\n        <PpsDrop>680</PpsDrop>\\r\\n        <PpsDrop>665</PpsDrop>\\r\\n        <PpsDrop>674</PpsDrop>\\r\\n        <PpsDrop>633</PpsDrop>\\r\\n    </PpsDrops>\\r\\n    <TimeScopes>\\r\\n        <Interval>60000</Interval>\\r\\n        <Start>1512003360000</Start>\\r\\n    </TimeScopes>\\r\\n    <RequestId>8EEEA133-B4E4-4BE4-B00D-93B60387D8FD</RequestId>\\r\\n    <BpsTotals>\\r\\n        <BpsTotal>581720000</BpsTotal>\\r\\n        <BpsTotal>616652000</BpsTotal>\\r\\n        <BpsTotal>621827000</BpsTotal>\\r\\n        <BpsTotal>619432000</BpsTotal>\\r\\n    </BpsTotals>\\r\\n    <BpsDrops>\\r\\n        <BpsDrop>468000</BpsDrop>\\r\\n        <BpsDrop>488000</BpsDrop>\\r\\n        <BpsDrop>488000</BpsDrop>\\r\\n        <BpsDrop>461000</BpsDrop>\\r\\n    </BpsDrops>\\r\\n</DescribeScdnDDoSTrafficInfoResponse>","errorExample":""}]',
            'title' => '查询DDoS监控数据',
            'summary' => '查询网络监控数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SetScdnDomainCertificate' => [
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定证书所属加速域名。需属于HTTPS加速类型。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'CertType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书类型。取值范围：'."\n"
                            ."\n"
                            .'- **upload**：上传证书。'."\n"
                            .'- **cas**：证书中心证书。'."\n"
                            .'- **free**：免费证书。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cas',
                        'enum' => [
                            'free',
                            'cas',
                            'upload',
                        ],
                    ],
                ],
                [
                    'name' => 'CertName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'yourCertName',
                    ],
                ],
                [
                    'name' => 'SSLProtocol',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'HTTPS证书是否启用。取值：'."\n"
                            ."\n"
                            .'- **on**：启用'."\n"
                            .'- **off**（默认）：不启用',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'on',
                    ],
                ],
                [
                    'name' => 'SSLPub',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安全证书内容。不启用证书则无需输入，配置证书请输入证书内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SSLPub',
                    ],
                ],
                [
                    'name' => 'SSLPri',
                    'in' => 'query',
                    'schema' => [
                        'description' => '私钥内容。不启用证书则无需输入，配置证书请输入私钥内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SSLPri',
                    ],
                ],
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地区信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai	',
                    ],
                ],
                [
                    'name' => 'ForceSet',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置为1时，忽略证书名称重复的校验，覆盖原有同名证书信息。',
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
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0AEDAF20-4DDF-4165-8750-47FF9C1929C9',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidSSLProtocol.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter SSLProtocol is not supported.',
                    ],
                    [
                        'errorCode' => 'SSLPub.MissingParameter',
                        'errorMessage' => 'An input parameter "SSLPub" that is mandatory for processing the request is not supplied.',
                    ],
                    [
                        'errorCode' => 'SSLPri.MissingParameter',
                        'errorMessage' => 'An input parameter "SSLPri" that is mandatory for processing the request is not supplied.',
                    ],
                    [
                        'errorCode' => 'InvalidSSLPub',
                        'errorMessage' => 'The SSLPub you provided is malformed!',
                    ],
                    [
                        'errorCode' => 'InvalidSSLPri',
                        'errorMessage' => 'The SSLPri you provided is malformed!',
                    ],
                    [
                        'errorCode' => 'Certificate.MissMatch',
                        'errorMessage' => 'The SSLPri does not math the specified Certificate!',
                    ],
                    [
                        'errorCode' => 'InvalidCertificate.TooLong',
                        'errorMessage' => 'The Certificate you provided is over the max length!',
                    ],
                    [
                        'errorCode' => 'InvalidCertName.TooLong',
                        'errorMessage' => 'The Certificate name you provided is over the max length 128!',
                    ],
                    [
                        'errorCode' => 'Certificate.NotPermittedOff',
                        'errorMessage' => 'Turn off certificate will change domain scheduling, please contact customer service',
                    ],
                    [
                        'errorCode' => 'Certificate.SettedNotEffect',
                        'errorMessage' => 'Certificate was successfully setted but does\'t take effect for protecting current service, please contact customer service',
                    ],
                    [
                        'errorCode' => 'AuthenticationFailed',
                        'errorMessage' => 'Authentication failed.',
                    ],
                    [
                        'errorCode' => 'SetDomainCertificate.ParameterError',
                        'errorMessage' => 'Parameters have error.',
                    ],
                    [
                        'errorCode' => 'InvalidSSLPubOrInvalidSSLPri',
                        'errorMessage' => 'The SSLPri or SSLPub you provided is malformed!',
                    ],
                    [
                        'errorCode' => 'Certificate.StatusError',
                        'errorMessage' => 'Certificate is not exist or its status is error.',
                    ],
                    [
                        'errorCode' => 'DeleteFailed',
                        'errorMessage' => 'Delete certificate is failed.',
                    ],
                    [
                        'errorCode' => 'Certificate.NotFind',
                        'errorMessage' => 'Not find the certificate info.',
                    ],
                    [
                        'errorCode' => 'Certificate.Duplicated',
                        'errorMessage' => 'The certificate name is duplicated.',
                    ],
                    [
                        'errorCode' => 'Certificate.FormatError',
                        'errorMessage' => 'The certificate format is error.',
                    ],
                    [
                        'errorCode' => 'Certificate.KeyNull',
                        'errorMessage' => 'The private key is not null.',
                    ],
                    [
                        'errorCode' => 'Key.Malformed',
                        'errorMessage' => 'The private key format is error.',
                    ],
                    [
                        'errorCode' => 'CertStorage.failed',
                        'errorMessage' => 'The certificate storage failed.',
                    ],
                    [
                        'errorCode' => 'CertificateContent.Duplicated',
                        'errorMessage' => 'The certificate is already uploaded, please don\'t upload again.',
                    ],
                    [
                        'errorCode' => 'Certificate.Expired',
                        'errorMessage' => 'The certificate is expired.',
                    ],
                    [
                        'errorCode' => 'InvalidDomain.notOnline',
                        'errorMessage' => 'The domain is not online, please check the domain status and try again later.',
                    ],
                    [
                        'errorCode' => 'Decode.Error',
                        'errorMessage' => 'The certificate sslpub or sslpri decode error.',
                    ],
                    [
                        'errorCode' => 'sslPub.Error',
                        'errorMessage' => 'The SSLPub encoded failed.',
                    ],
                    [
                        'errorCode' => 'sslPri.Error',
                        'errorMessage' => 'The SSLPri encoded failed.',
                    ],
                    [
                        'errorCode' => 'DomainInSafeMode',
                        'errorMessage' => 'This domain is in the safe mode. if you want to do this operation, please contact us!',
                    ],
                    [
                        'errorCode' => 'DomainInProtectedMode',
                        'errorMessage' => 'This domain is in the protected mode. if you want to do this operation, please contact us!',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'IllegalOperation',
                        'errorMessage' => 'Illegal domain operate is not permitted.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'CertName.MissingParameter',
                        'errorMessage' => 'An input parameter "CertName" that is mandatory for processing the request is not supplied.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0AEDAF20-4DDF-4165-8750-47FF9C1929C9\\"\\n}","errorExample":""},{"type":"xml","example":"<SetScdnDomainCertificateResponse>\\r\\n    <RequestId>0AEDAF20-4DDF-4165-8750-47FF9C1929C9</RequestId>\\r\\n</SetScdnDomainCertificateResponse>","errorExample":""}]',
            'title' => '设置证书功能是否启用',
            'summary' => '设置某域名下证书功能是否启用及修改证书信息。',
        ],
        'DescribeScdnDomainCertificateInfo' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SCDN加速域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
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
                                'example' => '5C1E43DC-9E51-4771-82C0-7D5ECEB547A1',
                            ],
                            'CertInfos' => [
                                'type' => 'object',
                                'properties' => [
                                    'CertInfo' => [
                                        'description' => '证书信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '证书状态。取值：'."\n"
                                                        ."\n"
                                                        .'- **success**：已生效。'."\n"
                                                        .'- **checking**：检测域名是否在阿里云安全加速。'."\n"
                                                        .'- **cname_error**：域名没有切到阿里云安全加速。'."\n"
                                                        .'- **domain_invalid**：域名包含非法字符。'."\n"
                                                        .'- **unsupport_wildcard**：不支持泛域名。'."\n"
                                                        .'- **applying**：证书申请中。'."\n"
                                                        .'- **get_token_timeout**：证书申请超时。'."\n"
                                                        .'- **check_token_timeout**：校验超时。'."\n"
                                                        .'- **get_cert_timeout**：获取证书超时。'."\n"
                                                        .'- **failed**：证书申请失败。',
                                                    'type' => 'string',
                                                    'example' => 'success',
                                                ],
                                                'CertLife' => [
                                                    'description' => '证书时长。单位：'."\n"
                                                        .'- **months**：月。'."\n"
                                                        .'- **years**：年。',
                                                    'type' => 'string',
                                                    'example' => '3 months',
                                                ],
                                                'CertExpireTime' => [
                                                    'description' => '证书过期时间。',
                                                    'type' => 'string',
                                                    'example' => '2018-06-03T22:03:39Z',
                                                ],
                                                'SSLPub' => [
                                                    'description' => '证书公钥。',
                                                    'type' => 'string',
                                                    'example' => 'xxxx',
                                                ],
                                                'SSLProtocol' => [
                                                    'description' => 'HTTPS开启状态。取值：'."\n"
                                                        ."\n"
                                                        .'- **on**：已开启'."\n"
                                                        .'- **off**：未开启',
                                                    'type' => 'string',
                                                    'example' => 'on',
                                                ],
                                                'CertType' => [
                                                    'description' => '证书类型。取值：'."\n"
                                                        ."\n"
                                                        .'- **free**：免费证书'."\n"
                                                        .'- **cas**：云盾证书'."\n"
                                                        .'- **upload**：自定义上传',
                                                    'type' => 'string',
                                                    'example' => 'free',
                                                ],
                                                'CertDomainName' => [
                                                    'description' => '证书匹配的域名。',
                                                    'type' => 'string',
                                                    'example' => 'example.com',
                                                ],
                                                'CertName' => [
                                                    'description' => '证书名称。',
                                                    'type' => 'string',
                                                    'example' => 'example.com',
                                                ],
                                                'CertOrg' => [
                                                    'description' => '证书组织。',
                                                    'type' => 'string',
                                                    'example' => 'Let\'s Encrypt',
                                                ],
                                                'DomainName' => [
                                                    'description' => '加速域名。',
                                                    'type' => 'string',
                                                    'example' => 'example.com',
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
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'SignatureDoesNotMatch',
                        'errorMessage' => 'The signature we calculated does not match the one you provided. Please refer to the API reference about authentication for details.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to internal error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5C1E43DC-9E51-4771-82C0-7D5ECEB547A1\\",\\n  \\"CertInfos\\": {\\n    \\"CertInfo\\": [\\n      {\\n        \\"Status\\": \\"success\\",\\n        \\"CertLife\\": \\"3 months\\",\\n        \\"CertExpireTime\\": \\"2018-06-03T22:03:39Z\\",\\n        \\"SSLPub\\": \\"xxxx\\",\\n        \\"SSLProtocol\\": \\"on\\",\\n        \\"CertType\\": \\"free\\",\\n        \\"CertDomainName\\": \\"example.com\\",\\n        \\"CertName\\": \\"example.com\\",\\n        \\"CertOrg\\": \\"Let\'s Encrypt\\",\\n        \\"DomainName\\": \\"example.com\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainCertificateInfoResponse>\\r\\n    <CertInfos>\\r\\n        <CertInfo>\\r\\n            <Status>success</Status>\\r\\n            <CertLife>3 months</CertLife>\\r\\n            <SSLProtocol>on</SSLProtocol>\\r\\n            <CertType>cas</CertType>\\r\\n            <CertName>cert-example.com</CertName>\\r\\n            <CertDomainName>example.com</CertDomainName>\\r\\n            <DomainName>example.com</DomainName>\\r\\n            <CertOrg>Let\'s Encrypt</CertOrg>\\r\\n            <CertExpireTime>2018-06-03T22:03:39Z</CertExpireTime>\\r\\n        </CertInfo>\\r\\n    </CertInfos>\\r\\n    <RequestId>5C1E43DC-9E51-4771-82C0-7D5ECEB547A1</RequestId>\\r\\n</DescribeScdnDomainCertificateInfoResponse>","errorExample":""}]',
            'title' => '获取指定加速域名证书信息',
            'summary' => '调用DescribeScdnDomainCertificateInfo获取指定加速域名证书信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AddScdnDomain' => [
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接入CDN的加速域名。支持泛域名，以点号（.）开头。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。不传该参数时，自动补全为默认资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmyuji4b6r4**',
                    ],
                ],
                [
                    'name' => 'Sources',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回源地址列表。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"content":"1.1.1.1","type":"ipaddr","priority":"20","port":80}]',
                    ],
                ],
                [
                    'name' => 'CheckUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '健康检测URL。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.yourdomain.com/test.html',
                    ],
                ],
                [
                    'name' => 'Scope',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加速区域。取值：'."\n"
                            .'- **domestic**（默认值）：仅中国内地。'."\n"
                            .'- **overseas**：全球（不包含中国内地）。'."\n"
                            .'- **global**：全球。'."\n"
                            ."\n"
                            .'> 国际用户、国内L3及以上用户设置有效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'overseas',
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
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidDomainName.Malformed',
                        'errorMessage' => 'Specified DomainName is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidSource.Content.Malformed',
                        'errorMessage' => 'Specified source content is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidTypeContent.Mismatch',
                        'errorMessage' => 'Specified source type does not math the specified source content.',
                    ],
                    [
                        'errorCode' => 'MissingSource.Content',
                        'errorMessage' => 'Specified source content is mandatory for this action.',
                    ],
                    [
                        'errorCode' => 'MissingSource.Type',
                        'errorMessage' => 'Specified source type is mandatory for this action.',
                    ],
                    [
                        'errorCode' => 'InvalidSource.Type.Malformed',
                        'errorMessage' => 'Specified source type is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidSource.Priority.Malformed',
                        'errorMessage' => 'Specified source priority is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidScope.Malformed',
                        'errorMessage' => 'Specified Scope is malformed.',
                    ],
                    [
                        'errorCode' => 'SourceIp.Exceed',
                        'errorMessage' => 'The Certificate you provided is malformed!',
                    ],
                    [
                        'errorCode' => 'InvalidCertificate',
                        'errorMessage' => 'The Certificate you provided is malformed!',
                    ],
                    [
                        'errorCode' => 'InvalidCertificate.TooLong',
                        'errorMessage' => 'The Certificate you provided is over the max length!',
                    ],
                    [
                        'errorCode' => 'InnerAddDomainDenied',
                        'errorMessage' => 'Your account haven\'t bind aoneId, can not add domain.',
                    ],
                    [
                        'errorCode' => 'CheckSourceHealthFailed',
                        'errorMessage' => 'sources ip or source domain check health failed，please input right source.',
                    ],
                    [
                        'errorCode' => 'ExtensiveAndAllBothExist',
                        'errorMessage' => 'Extensive domain and the domain begins with \'all.\' can not exist at the same time.',
                    ],
                    [
                        'errorCode' => 'CdnTypeNotSupportExtensiveDomain',
                        'errorMessage' => 'Extensive domain not supported for this cdn type.',
                    ],
                    [
                        'errorCode' => 'ExtensiveAndSpecificDomainConflict',
                        'errorMessage' => 'Extensive domain and corresponding specific domain are mutually exclusive.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceGroupId.Malformed',
                        'errorMessage' => 'Specified ResourceGroupId is malformed.',
                    ],
                    [
                        'errorCode' => 'DomainReserved',
                        'errorMessage' => 'The root domain of your domain is reserved by another account. Submit a ticket to contact customer support.',
                    ],
                    [
                        'errorCode' => 'InvalidDomainNameLevel',
                        'errorMessage' => 'Domain name suffixed with alicdn.com only support third level.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.ResourceGroup',
                        'errorMessage' => 'The resource group does not exist.',
                    ],
                    [
                        'errorCode' => 'EntityNotExist.ResourceGroup',
                        'errorMessage' => 'The resource group does not exist.',
                    ],
                    [
                        'errorCode' => 'TopLevelDomain.Mismatch',
                        'errorMessage' => 'The specified TopLevelDomain does not match webSiteType.',
                    ],
                    [
                        'errorCode' => 'InvalidStatus.ResourceGroup',
                        'errorMessage' => 'It\'s now allowed to do this operation because of the current status of resource-group.',
                    ],
                    [
                        'errorCode' => 'NotInternationRealIdentity',
                        'errorMessage' => 'You need to do real name authentication when you use Chinese mainland resources.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","errorExample":""},{"type":"xml","example":"<AddScdnDomainResponse>\\r\\n    <RequestId>15C66C7B-671A-4297-9187-2C4477247A74</RequestId>\\r\\n</AddScdnDomainResponse>","errorExample":""}]',
            'title' => '添加安全加速域名',
            'summary' => '调用AddScdnDomain添加安全加速域名。',
            'description' => '> - 创建加速域名之前，必须先开通SCDN服务。'."\n"
                .'- 加速域名必须已完成备案。'."\n"
                .'- 源站内容如果不在阿里云平台上，需要审核，审核工作会在下一工作日前完成。',
            'requestParamsDescription' => ' Sources各字段含义如下所示。'."\n"
                .'| 参数       | 类型   | 描述                                                                                                                                                                   |'."\n"
                .'|------------|--------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------|'."\n"
                .'| type | String  |源站类型。取值：<br>**paddr**：IP源站。<br>**domain**：域名源站。<br>**oss**：OSS Bucket为源站。 |'."\n"
                .'| content | String |回源地址，可以是IP或域名。 |'."\n"
                .'| port| Integer  |端口。取值：<br>**80**：默认值。<br>**443**：HTTPS回源。<br>自定义端口。 |'."\n"
                .'| priority     | String |源站地址对应的优先级。取值：<br>**20**（默认值）：主源。<br>**30**：备源。 |'."\n"
                .'| weight     | String    |回源权重，100以内，默认10。|',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteScdnDomain' => [
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的SCDN域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
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
                                'example' => '4785C948-233E-45FD-BA27-1C2119BBC2CC',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidDomainName.Malformed',
                        'errorMessage' => 'The specific value of parameter DomainName is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'Delete live region parameters have error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4785C948-233E-45FD-BA27-1C2119BBC2CC\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteScdnDomainResponse>\\r\\n  <RequestId>4785C948-233E-45FD-BA27-1C2119BBC2CC</RequestId>\\r\\n</DeleteScdnDomainResponse>","errorExample":""}]',
            'title' => '删除已添加的加速域名',
            'summary' => '调用DeleteScdnDomain删除已添加的加速域名。',
            'description' => '> - 删除域名前建议您前往域名解析服务商处恢复域名A记录，以免域名被删除后导致该域名不可访问。'."\n"
                .'- **DeleteScdnDomain**调用成功后将删除本条加速域名的全部相关记录，如果您仅需要暂停该加速域名的使用，您可以调用**StopScdnDomain**接口。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteScdnSpecificConfig' => [
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '您的加速域名，多个用逗号（,）隔开。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com,aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'ConfigId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2317',
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
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Invalid%s.ValueNotSupported',
                        'errorMessage' => 'FunctionName [%s] is not supported.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The specified value of parameter DomainName can not be empty.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteScdnSpecificConfigResponse>\\r\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\r\\n</DeleteScdnSpecificConfigResponse>","errorExample":""}]',
            'title' => '删除加速域名的配置',
            'summary' => '调用DeleteScdnSpecificConfig删除加速域名的配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'StartScdnDomain' => [
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要接入SCDN的域名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0AEDAF20-4DDF-4165-8750-47FF9C1929C9',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'RecordCheckNotAvailable',
                        'errorMessage' => 'Please try again later.',
                    ],
                    [
                        'errorCode' => 'IcpBlack',
                        'errorMessage' => 'The domain is on the ICP blacklist.',
                    ],
                    [
                        'errorCode' => 'IspBlack',
                        'errorMessage' => 'The domain is on the ISP blacklist.',
                    ],
                    [
                        'errorCode' => 'DomainNotRecordedAliyun',
                        'errorMessage' => 'The domain not access Ali Cloud for the record please access.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0AEDAF20-4DDF-4165-8750-47FF9C1929C9\\"\\n}","errorExample":""},{"type":"xml","example":"<StartScdnDomainResponse>\\r\\n  <RequestId>8436769A-55D0-4DF8-BBA7-0DBC156D7AAF</RequestId>\\r\\n</StartScdnDomainResponse>","errorExample":""}]',
            'title' => '启用加速域名',
            'summary' => '启用状态为“停用”的加速域名，将DomainStatus变更为online。',
            'description' => '> 域名对应账户如果由于欠费，或域名处于非法状态，无法正常调用该接口启用加速域名。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'StopScdnDomain' => [
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要接入SCDN的域名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '324AEFFF-308C-4DA7-8CD3-01B277B98F28',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"324AEFFF-308C-4DA7-8CD3-01B277B98F28\\"\\n}","errorExample":""},{"type":"xml","example":"<StopDomainResponse>\\r\\n  <RequestId>12FE5F2B-8D1F-447F-AAD7-51183F3EEA07</RequestId>\\r\\n</StopDomainResponse>","errorExample":""}]',
            'title' => '停用加速域名',
            'summary' => '停用某个加速域名，将DomainStatus变更为offline。',
            'description' => '- 停用该加速域名后，该条加速域名信息仍保留，针对加速域名的请求系统将做自动回源处理。'."\n"
                .'- 若暂时不需要对某域名进行加速，推荐使用**StopDomain**接口，暂停域名加速效果。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateScdnDomain' => [
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要接入SCDN的域名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'Sources',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回源地址列表',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"content":"1.1.1.1","type":"ipaddr","priority":"20","port":80}]',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmyuji4b6r4ry',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingDomainName',
                        'errorMessage' => 'The input parameter domainName that is mandatory for processing this request is not supplied.',
                    ],
                    [
                        'errorCode' => 'InvalidDomainName.Malformed',
                        'errorMessage' => 'The specific value of parameter DomainName is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidSource.Content.Malformed',
                        'errorMessage' => 'Specified source content is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidTypeContent.Mismatch',
                        'errorMessage' => 'Specified source type does not math the specified source content.',
                    ],
                    [
                        'errorCode' => 'MissingSource.Content',
                        'errorMessage' => 'Specified source content is mandatory for this action.',
                    ],
                    [
                        'errorCode' => 'MissingSource.Type',
                        'errorMessage' => 'Specified source type is mandatory for this action.',
                    ],
                    [
                        'errorCode' => 'InvalidSource.Type.Malformed',
                        'errorMessage' => 'Specified source type is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidSource.Priority.Malformed',
                        'errorMessage' => 'Specified source priority is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceGroupId.Malformed',
                        'errorMessage' => 'Specified ResourceGroupId is malformed.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.ResourceGroup',
                        'errorMessage' => 'The resource group does not exist.',
                    ],
                    [
                        'errorCode' => 'EntityNotExist.ResourceGroup',
                        'errorMessage' => 'The resource group does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidStatus.ResourceGroup',
                        'errorMessage' => 'It\'s now allowed to do this operation because of the current status of resource-group.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DomainInProtectedMode',
                        'errorMessage' => 'This domain is in the protected mode. if you want to do this operation, please contact us!',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateScdnDomainResponse>\\r\\n    <RequestId>15C66C7B-671A-4297-9187-2C4477247A74</RequestId>\\r\\n</UpdateScdnDomainResponse>","errorExample":""}]',
            'title' => '修改加速域名配置',
            'summary' => '调用UpdateScdnDomain修改加速域名配置。',
            'description' => '> 创建加速域名之前，必须先开通SCDN服务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'BatchDeleteScdnDomainConfigs' => [
            'summary' => '调用BatchDeleteScdnDomainConfigs批量删除域名配置。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DomainNames',
                    'in' => 'query',
                    'schema' => [
                        'description' => '您的加速域名，存在多个加速域名时使用英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com,aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'FunctionNames',
                    'in' => 'query',
                    'schema' => [
                        'description' => '功能列表名称，存在多个功能列表名称时使用英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'referer_white_list_set,https_force',
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
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Invalid%s.ValueNotSupported',
                        'errorMessage' => 'FunctionName [%s] is not supported.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":""},{"type":"xml","example":"<BatchDeleteScdnDomainConfigsResponse>\\r\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\r\\n</BatchDeleteScdnDomainConfigsResponse>","errorExample":""}]',
            'title' => '批量删除域名配置',
            'requestParamsDescription' => '### 功能说明'."\n"
                .'所有参数值均按照字符串类型处理。'."\n"
                .'|    名称   | 参数 |'."\n"
                .'| ---------- | --- |'."\n"
                .'|  referer_white_list_set：Referer白名单   |   refer_domain_allow_list：白名单列表，存在多个白名单时使用英文逗号（,）分隔；allow_empty：是否允许空Referer进入，取值：on或off。 |'."\n"
                .'|  referer_black_list_set：Referer黑名单   |  refer_domain_deny_list：黑名单列表，存在多个黑名单时使用英文逗号（,）分隔；allow_empty：是否允许空Referer进入，取值：on或off。 |'."\n"
                .'|  filetype_based_ttl_set：文件过期时间设置   |  ttl：cache时间，单位为秒；file_type：文件类型，支持多个，多个文件类型用英文逗号（,）隔开，例如txt,jpg。 |'."\n"
                .'|  path_based_ttl_set：目录过期时间设置   |  ttl：cache时间，单位为秒；path：目录，必须以“/”开头。 |'."\n"
                .'|  cc_defense：防频次攻击 |  enable：开启或关闭防频次攻击，取值：on或off。 |'."\n"
                .'|  oss_auth：OSS鉴权Bucket   |  oss_bucket_id：用户Bucket地址。 |'."\n"
                .'|  ip_black_list_set：IP黑名单   |  ip_list：IP列表，多个使用英文逗号（,）隔开。 |'."\n"
                .'|  ip_white_list_set：IP白名单  |  ip_list：IP列表，多个使用英文逗号（,）隔开。 |'."\n"
                .'|  error_page：错误页面重定向   |  error_code：错误码；rewrite_page：重定向页面。 |'."\n"
                .'|  tesla：页面优化加速 | enable：功能开关，取值：on或off。 |'."\n"
                .'|  set_req_host_header：修改回源自定义头 | domain_name：回源Host头内容。 |'."\n"
                .'|  set_hashkey_args：忽略URL参数 | hashkey_args：保留参数的列表，存在多个保留参数时使用英文逗号（,）分隔；disable：disable等于on时表示忽略所有参数，off表示不忽略。 |'."\n"
                .'|  aliauth：阿里鉴权 | auth_type：鉴权类型，no_auth：无鉴权；type_a：鉴权方式A；type_b：鉴权方式B；type_c：鉴权方式C；auth_key1：主KEY；auth_key2：备KEY；ali_auth_delta：自定义鉴权缓冲时间。 |'."\n"
                .'|  set_resp_header：设置响应头（浏览器端可见） | key：响应头；value：响应头内容，删除填写null。  |'."\n"
                .'|  video_seek：视频切片拖拽开关 | enable：功能开关，取值：on或off。 |'."\n"
                .'|  range：Range请求功能 | enable：功能开关，取值：on或off。 |'."\n"
                .'|  gzip：页面Gzip优化 | enable：功能开关，取值：on或off |'."\n"
                .'|  https_force：强制HTTPS跳转 | enable：功能开关，取值：on或off。 |'."\n"
                .'|  http_force：强制HTTP跳转 | enable：功能开关，取值：on或off。 |'."\n"
                .'|  alilive：视频直播配置 | notify_url：直播通知URL；enable：功能开关，取值：on或off。 |'."\n"
                .'| forward_scheme：静态协议跟随回源 | enable：功能开关，取值：on或off；scheme_origin：回源站协议。 |',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'BatchSetScdnDomainConfigs' => [
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DomainNames',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加速域名，多个使用半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com,aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'Functions',
                    'in' => 'query',
                    'schema' => [
                        'description' => '功能列表。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"functionArgs":[{"argName":"domain_name","argValue":"example.com"}],"functionName":"set_req_host_header"}]',
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
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                            'DomainConfigList' => [
                                'type' => 'object',
                                'properties' => [
                                    'DomainConfigModel' => [
                                        'description' => '域名配置ID列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ConfigId' => [
                                                    'description' => '配置ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1234567',
                                                ],
                                                'DomainName' => [
                                                    'description' => '域名。',
                                                    'type' => 'string',
                                                    'example' => 'www.example.com',
                                                ],
                                                'FunctionName' => [
                                                    'description' => '功能。',
                                                    'type' => 'string',
                                                    'example' => 'set_req_host_header',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidFunctions.Malformed',
                        'errorMessage' => 'Specified Functions is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidArgValue.Malformed',
                        'errorMessage' => 'Specified ArgValue is malformed.',
                    ],
                    [
                        'errorCode' => 'Invalid%s.ValueNotSupported',
                        'errorMessage' => 'FunctionName [%s] is not supported.',
                    ],
                    [
                        'errorCode' => 'Invalid%s.Malformed',
                        'errorMessage' => 'ArgValue [%s] is malformed.',
                    ],
                    [
                        'errorCode' => 'TooManyDomains',
                        'errorMessage' => 'The count of domain is over 50.',
                    ],
                    [
                        'errorCode' => 'MissingParameter%s',
                        'errorMessage' => 'The specified value of ArgName[%s] is missing.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The specified ArgValue is missing.',
                    ],
                    [
                        'errorCode' => 'InvalidHeaderKey.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter HeaderKey is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"DomainConfigList\\": {\\n    \\"DomainConfigModel\\": [\\n      {\\n        \\"ConfigId\\": 1234567,\\n        \\"DomainName\\": \\"www.example.com\\",\\n        \\"FunctionName\\": \\"set_req_host_header\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<BatchSetScdnDomainConfigsResponse>\\n<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n<DomainConfigModel>\\n    <DomainName>www.example.com</DomainName>\\n    <ConfigId>1234567</ConfigId>\\n    <FunctionName>set_req_host_header</FunctionName>\\n</DomainConfigModel>\\n</BatchSetScdnDomainConfigsResponse>","errorExample":""}]',
            'title' => '批量配置域名',
            'summary' => '调用BatchSetScdnDomainConfigs批量配置域名。',
            'requestParamsDescription' => '### Functions格式：'."\n"
                ."\n"
                .'- `[{"functionArgs":[{"argName":"domain_name","argValue":"example.com"}],"functionName":"set_req_host_header"}]`'."\n"
                .'- 某些功能，如filetype_based_ttl_set，可以设置多条记录，当需要更新其中某条记录时，可通过该条记录的configId来指定。`[{"functionArgs":[{"argName":"file_type","argValue":"jpg"},{"argName":"ttl","argValue":"18"}],"functionName":"filetype_based_ttl_set","configId":5068995}]`'."\n"
                ."\n"
                .'### 功能说明'."\n"
                .'所有参数值均按照字符串类型处理。'."\n"
                .'|名称|说明|'."\n"
                .'|----------|---|'."\n"
                .'|referer_white_list_set|refer白名单|'."\n"
                .'|referer_black_list_set|refer黑名单|'."\n"
                .'|filetype_based_ttl_set|文件过期时间设置|'."\n"
                .'|path_based_ttl_set|目录过期时间设置|'."\n"
                .'|cc_defense |防频次攻击|'."\n"
                .'|oss_auth|OSS鉴权Bucket|'."\n"
                .'|ip_black_list_set|IP黑名单|'."\n"
                .'|ip_white_list_set|IP白名单|'."\n"
                .'|error_page|错误页面重定向|'."\n"
                .'|tesla|页面优化加速|'."\n"
                .'|set_req_host_header|修改回源自定义头|'."\n"
                .'|set_hashkey_args|忽略URL参数|'."\n"
                .'|aliauth|阿里鉴权|'."\n"
                .'|set_resp_header|设置响应头（浏览器端可见）|'."\n"
                .'|video_seek|视频切片拖拽开关|'."\n"
                .'|range|Range请求功能|'."\n"
                .'|gzip|页面Gzip优化|'."\n"
                .'|https_force|强制HTTPS跳转|'."\n"
                .'|http_force|强制HTTP跳转|'."\n"
                .'|alilive|视频直播配置|'."\n"
                .'|forward_scheme|自适应回源|'."\n"
                .'|tmd_signature|Taobao Missile Defense（一种防CC攻击的安全功能）自定义规则|'."\n",
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'BatchUpdateScdnDomain' => [
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要接入SCDN的域名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com,aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'Sources',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回源地址列表',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"content":"1.1.1.1","type":"ipaddr","priority":"20","port":80,"weight":"15"}]',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-xxx',
                    ],
                ],
                [
                    'name' => 'TopLevelDomain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '顶级接入域',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingDomainName',
                        'errorMessage' => 'The domainName parameter is required.',
                    ],
                    [
                        'errorCode' => 'InvalidDomainName.Malformed',
                        'errorMessage' => 'The specified DomainName is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidSource.Content.Malformed',
                        'errorMessage' => 'The specified Source Content is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidTypeContent.Mismatch',
                        'errorMessage' => 'The specified source type does not match the specified source content.',
                    ],
                    [
                        'errorCode' => 'MissingSource.Content',
                        'errorMessage' => 'The Source Content must be specified.',
                    ],
                    [
                        'errorCode' => 'MissingSource.Type',
                        'errorMessage' => 'The Source Type must be specified.',
                    ],
                    [
                        'errorCode' => 'InvalidSource.Type.Malformed',
                        'errorMessage' => 'The specified Source Type is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidSource.Priority.Malformed',
                        'errorMessage' => 'The specified Source Priority is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceGroupId.Malformed',
                        'errorMessage' => 'The specified ResourceGroupId is invalid.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.ResourceGroup',
                        'errorMessage' => 'The resource group does not exist.',
                    ],
                    [
                        'errorCode' => 'EntityNotExist.ResourceGroup',
                        'errorMessage' => 'The resource group does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidStatus.ResourceGroup',
                        'errorMessage' => 'The current status of the resource group does not support this operation.',
                    ],
                    [
                        'errorCode' => 'TopLevelDomain.Mismatch',
                        'errorMessage' => 'The specified TopLevelDomain does not match webSiteType.',
                    ],
                    [
                        'errorCode' => 'TopLevelDomain.NotFound',
                        'errorMessage' => 'The specified TopLevelDomain does not exist.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DomainInProtectedMode',
                        'errorMessage' => 'The domain is in protection mode. To request permission, contact Customer Service.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","errorExample":""},{"type":"xml","example":"<BatchUpdateScdnDomainResponse>\\r\\n    <RequestId>15C66C7B-671A-4297-9187-2C4477247A74</RequestId>\\r\\n</BatchUpdateScdnDomainResponse>","errorExample":""}]',
            'title' => '批量更新安全加速域名',
            'summary' => '调用BatchUpdateScdnDomain批量更新安全加速域名。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'BatchStopScdnDomain' => [
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DomainNames',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接入SCDN的域名，多个域名用半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
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
                                'example' => '324AEFFF-308C-4DA7-8CD3-01B277B98F28',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"324AEFFF-308C-4DA7-8CD3-01B277B98F28\\"\\n}","errorExample":""},{"type":"xml","example":"<BatchStopScdnDomainResponse>\\r\\n<RequestId>324AEFFF-308C-4DA7-8CD3-01B277B98F28</RequestId>\\r\\n</BatchStopScdnDomainResponse>","errorExample":""}]',
            'title' => '批量停止安全加速域名',
            'summary' => '调用BatchStopScdnDomain停用加速域名。',
            'description' => '> - 停用该加速域名后，该条加速域名信息仍保留，后续加速域名的请求，系统将做自动回源处理。'."\n"
                .'- 如果只是暂时不需要对某一个域名进行加速，推荐使用**StopDomain**接口，暂停域名加速效果。'."\n"
                .'- 单用户调用频率：30次/秒。',
        ],
        'BatchStartScdnDomain' => [
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DomainNames',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接入SCDN的域名，多个域名用半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
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
                                'example' => '0AEDAF20-4DDF-4165-8750-47FF9C1929C9',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'RecordCheckNotAvailable',
                        'errorMessage' => 'Please try again later.',
                    ],
                    [
                        'errorCode' => 'IcpBlack',
                        'errorMessage' => 'The domain is on the ICP blacklist.',
                    ],
                    [
                        'errorCode' => 'IspBlack',
                        'errorMessage' => 'The domain is on the ISP blacklist.',
                    ],
                    [
                        'errorCode' => 'DomainNotRecordedAliyun',
                        'errorMessage' => 'The domain not access Ali Cloud for the record please access.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0AEDAF20-4DDF-4165-8750-47FF9C1929C9\\"\\n}","errorExample":""},{"type":"xml","example":"<BatchStartScdnDomainResponse>\\r\\n    <RequestId>0AEDAF20-4DDF-4165-8750-47FF9C1929C9</RequestId>\\r\\n</BatchStartScdnDomainResponse>","errorExample":""}]',
            'title' => '批量启动安全域名',
            'summary' => '调用BatchStartScdnDomain启用状态为“停用”的加速域名。',
            'description' => '> - 单用户调用频率：30次/秒。'."\n"
                .'- 域名对应账户如果由于欠费或域名处于非法状态，无法正常调用该接口启用加速域名。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnUserDomains' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，默认20，最大500，取值：1~500之前的任意整数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '500',
                        'example' => '5',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '取得第几页，取值范围为：**1~100000**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加速域名。如果不传该参数，默认不做域名匹配搜索，返回所有符合条件的域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'DomainStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '域名状态过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '运行中',
                    ],
                ],
                [
                    'name' => 'DomainSearchType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '域名查询类型。取值：'."\n"
                            ."\n"
                            .'- **fuzzy_match**：模糊匹配。'."\n"
                            .'- **pre_match**：前匹配。'."\n"
                            .'- **suf_match**：后匹配。'."\n"
                            .'- **full_match**（默认值）：完全匹配。'."\n"
                            ."\n"
                            .'> 传递了域名参数的情况下，不传DomainSearchType参数，则默认采用完全匹配模式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'fuzzy_match',
                    ],
                ],
                [
                    'name' => 'CheckDomainShow',
                    'in' => 'query',
                    'schema' => [
                        'description' => '检查domain是否展出。',
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
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'ChangeStartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '变更起始时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '201911111',
                    ],
                ],
                [
                    'name' => 'ChangeEndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '变更结束时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '201911111',
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
                                'example' => 'AA75AADB-5E25-4970-B480-EAA1F5658483',
                            ],
                            'PageNumber' => [
                                'description' => '返回数据的页码。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '整页大小。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '5',
                            ],
                            'TotalCount' => [
                                'description' => '总条数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '16',
                            ],
                            'Domains' => [
                                'type' => 'object',
                                'properties' => [
                                    'PageData' => [
                                        'description' => '由PageData组成的数组格式，返回加速域名的状态信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'GmtCreated' => [
                                                    'description' => '加速域名创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2015-10-28T11:05:52Z',
                                                ],
                                                'Description' => [
                                                    'description' => '审核失败原因。',
                                                    'type' => 'string',
                                                    'example' => 'audit failed',
                                                ],
                                                'SSLProtocol' => [
                                                    'description' => 'HTTPS开关。'."\n"
                                                        ."\n"
                                                        .'- **on**：已开启。'."\n"
                                                        .'- **off**：未开启。',
                                                    'type' => 'string',
                                                    'example' => 'on',
                                                ],
                                                'ResourceGroupId' => [
                                                    'description' => '资源组ID。',
                                                    'type' => 'string',
                                                    'example' => 'abcd1234abcd1234',
                                                ],
                                                'Sandbox' => [
                                                    'description' => '沙箱。',
                                                    'type' => 'string',
                                                    'example' => 'normal',
                                                ],
                                                'DomainStatus' => [
                                                    'description' => '加速域名状态。取值：'."\n"
                                                        ."\n"
                                                        .'- **online**表示启用。'."\n"
                                                        .'- **offline**表示停用。'."\n"
                                                        .'- **configuring**表示配置中。'."\n"
                                                        .'- **configure_failed**表示配置失败。'."\n"
                                                        .'- **checking**表示正在审核。'."\n"
                                                        .'- **check_failed**表示审核失败。',
                                                    'type' => 'string',
                                                    'example' => 'online',
                                                ],
                                                'Cname' => [
                                                    'description' => '加速域名对应的CNAME域名。',
                                                    'type' => 'string',
                                                    'example' => 'image.developer.aliyundoc.com',
                                                ],
                                                'GmtModified' => [
                                                    'description' => '加速域名修改时间。',
                                                    'type' => 'string',
                                                    'example' => '2015-10-28T11:05:52Z',
                                                ],
                                                'DomainName' => [
                                                    'description' => '加速域名名称。',
                                                    'type' => 'string',
                                                    'example' => 'example.aliyun.com',
                                                ],
                                                'Sources' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Source' => [
                                                            'description' => '源站信息。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Type' => [
                                                                        'description' => '源站类型。',
                                                                        'type' => 'string',
                                                                        'example' => 'oss',
                                                                    ],
                                                                    'Priority' => [
                                                                        'description' => '优先级。',
                                                                        'type' => 'string',
                                                                        'example' => '50',
                                                                    ],
                                                                    'Port' => [
                                                                        'description' => '源站端口。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '80',
                                                                    ],
                                                                    'Content' => [
                                                                        'description' => '源站地址。',
                                                                        'type' => 'string',
                                                                        'example' => 'video.developer.aliyundoc.com',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidPageNumber.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter PageNumber is not supported.',
                    ],
                    [
                        'errorCode' => 'InvalidPageSize.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter PageSize is not supported.',
                    ],
                    [
                        'errorCode' => 'InvalidDomainStatus.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter DomainStatus is not supported.',
                    ],
                    [
                        'errorCode' => 'InvalidDomainName.Malformed',
                        'errorMessage' => 'The specific value of parameter DomainName is malformed.',
                    ],
                    [
                        'errorCode' => 'InvalidDomainSearchType.ValueNotSupported',
                        'errorMessage' => 'The specified value of parameter DomainSearchType is not supported.',
                    ],
                    [
                        'errorCode' => 'InvalidChangeStartTime.Malformed',
                        'errorMessage' => 'The specified ChangeStartTime is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidChangeEndTime.Malformed',
                        'errorMessage' => 'The specified ChangeEndTime is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AA75AADB-5E25-4970-B480-EAA1F5658483\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 5,\\n  \\"TotalCount\\": 16,\\n  \\"Domains\\": {\\n    \\"PageData\\": [\\n      {\\n        \\"GmtCreated\\": \\"2015-10-28T11:05:52Z\\",\\n        \\"Description\\": \\"audit failed\\",\\n        \\"SSLProtocol\\": \\"on\\",\\n        \\"ResourceGroupId\\": \\"abcd1234abcd1234\\",\\n        \\"Sandbox\\": \\"normal\\",\\n        \\"DomainStatus\\": \\"online\\",\\n        \\"Cname\\": \\"image.developer.aliyundoc.com\\",\\n        \\"GmtModified\\": \\"2015-10-28T11:05:52Z\\",\\n        \\"DomainName\\": \\"example.aliyun.com\\",\\n        \\"Sources\\": {\\n          \\"Source\\": [\\n            {\\n              \\"Type\\": \\"oss\\",\\n              \\"Priority\\": \\"50\\",\\n              \\"Port\\": 80,\\n              \\"Content\\": \\"video.developer.aliyundoc.com\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnUserDomainsResponse>\\n<PageNumber>1</PageNumber>\\n<TotalCount>16</TotalCount>\\n<PageSize>5</PageSize>\\n<RequestId>AA75AADB-5E25-4970-B480-EAA1F5658483</RequestId>\\n<Domains>\\n    <PageData>\\n        <DomainStatus>configure_failed</DomainStatus>\\n        <DomainName>example.aliyun.com</DomainName>\\n        <GmtModified>2015-10-28T11:05:52Z</GmtModified>\\n        <GmtCreated>2015-10-28T09:32:51Z</GmtCreated>\\n        <Description>audit failed</Description>\\n        <ResourceGroupId>abcd1234abcd1234</ResourceGroupId>\\n    </PageData>\\n    <PageData>\\n        <DomainStatus>configure_failed</DomainStatus>\\n        <DomainName>example.aliyun.com</DomainName>\\n        <GmtModified>2015-10-28T11:05:50Z</GmtModified>\\n        <GmtCreated>2015-10-28T09:31:59Z</GmtCreated>\\n        <ResourceGroupId>abcd1234abcd1234</ResourceGroupId>\\n    </PageData>\\n    <PageData>\\n        <Cname>image.developer.aliyundoc.com</Cname>\\n        <DomainStatus>online</DomainStatus>\\n        <DomainName>example.aliyun.com</DomainName>\\n        <GmtModified>2015-10-27T06:26:34Z</GmtModified>\\n        <GmtCreated>2015-10-23T09:30:00Z</GmtCreated>\\n        <ResourceGroupId>abcd1234abcd1234</ResourceGroupId>\\n    </PageData>\\n    <PageData>\\n        <Cname>image.developer.aliyundoc.com</Cname>\\n        <DomainStatus>online</DomainStatus>\\n        <DomainName>example.aliyun.com</DomainName>\\n        <GmtModified>2015-10-23T09:23:29Z</GmtModified>\\n        <GmtCreated>2015-10-23T09:23:20Z</GmtCreated>\\n        <ResourceGroupId>abcd1234abcd1234</ResourceGroupId>\\n    </PageData>\\n    <PageData>\\n        <Cname>image.developer.aliyundoc.com</Cname>\\n        <DomainStatus>online</DomainStatus>\\n        <DomainName>example.aliyun.com</DomainName>\\n        <GmtModified>2015-10-23T09:02:11Z</GmtModified>\\n        <GmtCreated>2015-10-23T09:01:57Z</GmtCreated>\\n        <ResourceGroupId>abcd1234abcd1234</ResourceGroupId>\\n    </PageData>\\n</Domains>\\n</DescribeScdnUserDomainsResponse>","errorExample":""}]',
            'title' => '查询安全加速域名列表',
            'summary' => '查询用户名下所有的安全加速域名。支持域名模糊匹配过滤和域名状态过滤。',
            'description' => '域名状态包括：'."\n"
                ."\n"
                .'- 运行中（表示域名服务状态正常）'."\n"
                .'- 已停止'."\n"
                .'- 配置中'."\n"
                .'- 配置失败'."\n"
                .'- 审核中'."\n"
                .'- 审核失败',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainConfigs' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加速域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'FunctionNames',
                    'in' => 'query',
                    'schema' => [
                        'description' => '功能列表名称，多个使用半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'filetype_based_ttl_set,set_req_host_header',
                    ],
                ],
                [
                    'name' => 'ConfigId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '配置ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
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
                                'example' => 'F8AA0364-0FDB-4AD5-AC74-D69FAB8924ED',
                            ],
                            'DomainConfigs' => [
                                'type' => 'object',
                                'properties' => [
                                    'DomainConfig' => [
                                        'description' => '域名配置数据列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '配置状态，包括success、testing、failed、configuring。',
                                                    'type' => 'string',
                                                    'example' => 'success',
                                                ],
                                                'ParentId' => [
                                                    'type' => 'string',
                                                ],
                                                'ConfigId' => [
                                                    'description' => '配置ID。',
                                                    'type' => 'string',
                                                    'example' => '5003576',
                                                ],
                                                'FunctionName' => [
                                                    'description' => 'Function名称。',
                                                    'type' => 'string',
                                                    'example' => 'set_req_host_header',
                                                ],
                                                'FunctionArgs' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'FunctionArg' => [
                                                            'description' => '各个Function。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'ArgName' => [
                                                                        'description' => '配置名称。',
                                                                        'type' => 'string',
                                                                        'example' => 'domain_name',
                                                                    ],
                                                                    'ArgValue' => [
                                                                        'description' => '配置值。',
                                                                        'type' => 'string',
                                                                        'example' => 'example.com',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Invalid%s.ValueNotSupported',
                        'errorMessage' => 'FunctionName [%s] is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F8AA0364-0FDB-4AD5-AC74-D69FAB8924ED\\",\\n  \\"DomainConfigs\\": {\\n    \\"DomainConfig\\": [\\n      {\\n        \\"Status\\": \\"success\\",\\n        \\"ConfigId\\": \\"5003576\\",\\n        \\"FunctionName\\": \\"set_req_host_header\\",\\n        \\"FunctionArgs\\": {\\n          \\"FunctionArg\\": [\\n            {\\n              \\"ArgName\\": \\"domain_name\\",\\n              \\"ArgValue\\": \\"example.com\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainConfigsResponse>\\r\\n    <RequestId>F8AA0364-0FDB-4AD5-AC74-D69FAB8924ED</RequestId>\\r\\n    <DomainConfigs>\\r\\n        <DomainConfig>\\r\\n            <FunctionArgs>\\r\\n                <FunctionArg>\\r\\n                    <ArgName>domain_name</ArgName>\\r\\n                    <ArgValue>example.com</ArgValue>\\r\\n                </FunctionArg>\\r\\n            </FunctionArgs>\\r\\n            <ConfigId>5003576</ConfigId>\\r\\n            <FunctionName>set_req_host_header</FunctionName>\\r\\n        </DomainConfig>\\r\\n        <DomainConfig>\\r\\n            <FunctionArgs>\\r\\n                <FunctionArg>\\r\\n                    <ArgName>file_type</ArgName>\\r\\n                    <ArgValue>txt</ArgValue>\\r\\n                </FunctionArg>\\r\\n                <FunctionArg>\\r\\n                    <ArgName>ttl</ArgName>\\r\\n                    <ArgValue>13</ArgValue>\\r\\n                </FunctionArg>\\r\\n            </FunctionArgs>\\r\\n            <ConfigId>5068995</ConfigId>\\r\\n            <FunctionName>filetype_based_ttl_set</FunctionName>\\r\\n        </DomainConfig>\\r\\n    </DomainConfigs>\\r\\n</DescribeScdnDomainConfigsResponse>","errorExample":""}]',
            'title' => '查询域名配置',
            'summary' => '可查询多个功能配置。',
            'requestParamsDescription' => '功能说明'."\n"
                .'|    名称   | 说明 |'."\n"
                .'| ---------- | --- |'."\n"
                .'|  referer_white_list_set   |  refer白名单 |'."\n"
                .'|  referer_black_list_set   |  refer黑名单 |'."\n"
                .'|  filetype_based_ttl_set   |  文件过期时间设置 |'."\n"
                .'|  path_based_ttl_set   |  目录过期时间设置 |'."\n"
                .'|  cc_defense |  防频次攻击 |'."\n"
                .'|  oss_auth   |  OSS鉴权Bucket |'."\n"
                .'|  ip_black_list_set   |  IP黑名单 |'."\n"
                .'|  ip_white_list_set  |  IP白名单 |'."\n"
                .'|  error_page   |  错误页面重定向 |'."\n"
                .'|  tesla | 页面优化加速|'."\n"
                .'|  set_req_host_header | 修改回源自定义头|'."\n"
                .'|  set_hashkey_args | 忽略URL参数|'."\n"
                .'|  aliauth | 阿里鉴权|'."\n"
                .'|  set_resp_header | 设置响应头（浏览器端可见）|'."\n"
                .'|  video_seek | 视频切片拖拽开关|'."\n"
                .'|  range | Range请求功能|'."\n"
                .'|  gzip | 页面Gzip优化|'."\n"
                .'|  https_force | 强制HTTPS跳转|'."\n"
                .'|  http_force | 强制HTTP跳转|'."\n"
                .'|  alilive | 视频直播配置|'."\n"
                .'|  forward_scheme | 自适应回源|'."\n"
                .'|  tmd_signature | Taobao Missile Defense（一种防CC攻击的安全功能）自定义规则|',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainCname' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要接入SCDN的域名，多个域名以逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aliyundoc.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                            'CnameDatas' => [
                                'type' => 'object',
                                'properties' => [
                                    'Data' => [
                                        'description' => 'Cname信息',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '状态',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '6',
                                                ],
                                                'Domain' => [
                                                    'description' => '域名',
                                                    'type' => 'string',
                                                    'example' => '.aliyundoc.com',
                                                ],
                                                'Cname' => [
                                                    'description' => 'Cname',
                                                    'type' => 'string',
                                                    'example' => 'example.com',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\",\\n  \\"CnameDatas\\": {\\n    \\"Data\\": [\\n      {\\n        \\"Status\\": 6,\\n        \\"Domain\\": \\".aliyundoc.com\\",\\n        \\"Cname\\": \\"example.com\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainCnameResponse>\\n<RequestId>15C66C7B-671A-4297-9187-2C4477247A74</RequestId>\\n<CnameDatas>\\n    <Data>\\n        <Status>6</Status>\\n        <Domain>.aliyundoc.com</Domain>\\n        <Cname>example.com</Cname>\\n    </Data>\\n</CnameDatas>\\n</DescribeScdnDomainCnameResponse>","errorExample":""}]',
            'title' => '检测用户是否完成Cname',
            'summary' => '检测用户是否完成Cname，支持多个域名。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnDomainDetail' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接入SCDN进行加速的域名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '09ABE829-6CD3-4FE0-AFEE-556113E29727',
                            ],
                            'DomainDetail' => [
                                'description' => '域名信息列表',
                                'type' => 'object',
                                'properties' => [
                                    'GmtCreated' => [
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2017-11-27T06:51:26Z',
                                    ],
                                    'SSLPub' => [
                                        'description' => '如果开启HTTPS，此处为证书公钥。',
                                        'type' => 'string',
                                        'example' => 'xxx',
                                    ],
                                    'Description' => [
                                        'description' => '审核失败原因',
                                        'type' => 'string',
                                        'example' => 'audit failed',
                                    ],
                                    'SSLProtocol' => [
                                        'description' => '是否开启SSL证书。取值范围：'."\n"
                                            ."\n"
                                            .'- **on**：表示开启'."\n"
                                            .'- **off**：表示关闭',
                                        'type' => 'string',
                                        'example' => 'on',
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组ID',
                                        'type' => 'string',
                                        'example' => 'rg-acfmyuji4b6r4ry',
                                    ],
                                    'CertName' => [
                                        'description' => '如果开启HTTPS，此处为证书名称。',
                                        'type' => 'string',
                                        'example' => '证书名称',
                                    ],
                                    'Scope' => [
                                        'description' => '区域',
                                        'type' => 'string',
                                        'example' => 'overseas',
                                    ],
                                    'Cname' => [
                                        'description' => '为加速域名生成的一个CNAME域名，需要在域名解析服务商处将加速域名CNAME解析到该域名。',
                                        'type' => 'string',
                                        'example' => 'example.com.scdn7mhp.com',
                                    ],
                                    'DomainStatus' => [
                                        'description' => '加速域名运行状态。取值：'."\n"
                                            ."\n"
                                            .'- **online**：表示启用'."\n"
                                            .'- **offline**：表示停用'."\n"
                                            .'- **configuring**：表示配置中'."\n"
                                            .'- **configure_failed**：表示配置失败'."\n"
                                            .'- **checking**：表示正在审核'."\n"
                                            .'- **check_failed**：表示审核失败',
                                        'type' => 'string',
                                        'example' => 'online',
                                    ],
                                    'GmtModified' => [
                                        'description' => '最近修改时间',
                                        'type' => 'string',
                                        'example' => '2017-11-27T06:51:26Z',
                                    ],
                                    'DomainName' => [
                                        'description' => '接入SCDN进行加速的域名',
                                        'type' => 'string',
                                        'example' => 'example.com',
                                    ],
                                    'Sources' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Source' => [
                                                'description' => '源站信息',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Type' => [
                                                            'description' => '源站类型。取值：'."\n"
                                                                ."\n"
                                                                .'- **ipaddr**：IP源站'."\n"
                                                                .'- **domain**：域名源站'."\n"
                                                                .'- **oss**：OSS Bucket为源站',
                                                            'type' => 'string',
                                                            'example' => 'oss',
                                                        ],
                                                        'Priority' => [
                                                            'description' => '优先级',
                                                            'type' => 'string',
                                                            'example' => '50',
                                                        ],
                                                        'Port' => [
                                                            'description' => '端口，支持443和80',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '80',
                                                        ],
                                                        'Content' => [
                                                            'description' => '回源地址',
                                                            'type' => 'string',
                                                            'example' => 'xxx.oss-cn-hangzhou.aliyuncs.com',
                                                        ],
                                                        'Enabled' => [
                                                            'description' => '状态',
                                                            'type' => 'string',
                                                            'example' => 'online',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"09ABE829-6CD3-4FE0-AFEE-556113E29727\\",\\n  \\"DomainDetail\\": {\\n    \\"GmtCreated\\": \\"2017-11-27T06:51:26Z\\",\\n    \\"SSLPub\\": \\"xxx\\",\\n    \\"Description\\": \\"audit failed\\",\\n    \\"SSLProtocol\\": \\"on\\",\\n    \\"ResourceGroupId\\": \\"rg-acfmyuji4b6r4ry\\",\\n    \\"CertName\\": \\"证书名称\\",\\n    \\"Scope\\": \\"overseas\\",\\n    \\"Cname\\": \\"example.com.scdn7mhp.com\\",\\n    \\"DomainStatus\\": \\"online\\",\\n    \\"GmtModified\\": \\"2017-11-27T06:51:26Z\\",\\n    \\"DomainName\\": \\"example.com\\",\\n    \\"Sources\\": {\\n      \\"Source\\": [\\n        {\\n          \\"Type\\": \\"oss\\",\\n          \\"Priority\\": \\"50\\",\\n          \\"Port\\": 80,\\n          \\"Content\\": \\"xxx.oss-cn-hangzhou.aliyuncs.com\\",\\n          \\"Enabled\\": \\"online\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnDomainDetailResponse>\\r\\n    <RequestId>09ABE829-6CD3-4FE0-AFEE-556113E29727</RequestId>\\r\\n    <DomainDetail>\\r\\n        <Cname>example.com.scdn7mhp.com</Cname>\\r\\n        <ResourceGroupId>rg-acfmyuji4b6r4ry</ResourceGroupId>\\r\\n        <DomainStatus>online</DomainStatus>\\r\\n        <DomainName>example.com</DomainName>\\r\\n        <Sources>\\r\\n            <Source>\\r\\n                <Enabled>online</Enabled>\\r\\n                <Port>80</Port>\\r\\n                <Type>oss</Type>\\r\\n                <Content>xxx.oss-cn-hangzhou.aliyuncs.com</Content>\\r\\n                <Priority>50</Priority>\\r\\n            </Source>\\r\\n        </Sources>\\r\\n        <GmtModified>2017-11-27T06:51:26Z</GmtModified>\\r\\n        <GmtCreated>2017-11-27T06:51:25Z</GmtCreated>\\r\\n    </DomainDetail>\\r\\n</DescribeScdnDomainDetailResponse>","errorExample":""}]',
            'title' => '获取指定加速域名配置的基本信息',
            'summary' => '调用DescribeScdnDomainDetail获取指定加速域名配置的基本信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnCcInfo' => [
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
            'systemTags' => [],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '频次防护开关，取值：**enable**和**disable**。',
                                'type' => 'string',
                                'example' => 'enable',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MISS_PARAMETER',
                        'errorMessage' => 'MISS_PARAMETER.',
                    ],
                    [
                        'errorCode' => 'USER_NOT_EXIST',
                        'errorMessage' => 'USER_NOT_EXIST',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"enable\\",\\n  \\"RequestId\\": \\"BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeScdnCcInfoResponse>\\r\\n    <Status>enable</Status>\\r\\n    <RequestId>BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23</RequestId>\\r\\n</DescribeScdnCcInfoResponse>","errorExample":""}]',
            'title' => 'DescribeScdnCcInfo',
            'summary' => '查询频次控制防护功能信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScdnVerifyContent' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Content' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'VerifyScdnDomainOwner' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VerifyType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Content' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DomainOwnerVerifyFail',
                        'errorMessage' => 'Owner verification of the root domain failed.',
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'scdn.aliyuncs.com',
        ],
    ],
];
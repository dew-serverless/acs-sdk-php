<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'antiddos-public',
        'version' => '2017-05-18',
    ],
    'directories' => [
        [
            'id' => 177779,
            'title' => '地域信息',
            'type' => 'directory',
            'children' => [
                'DescribeRegions',
            ],
        ],
        [
            'id' => 95144,
            'title' => '资产',
            'type' => 'directory',
            'children' => [
                'DescribeInstance',
                'DescribeDdosThreshold',
                'DescribeBgpPackByIp',
                'DescribeDdosCredit',
                'DescribeInstanceIpAddress',
                'DescribeIpDdosThreshold',
                'DescribeIpLocationService',
            ],
        ],
        [
            'id' => 95150,
            'title' => '防护',
            'type' => 'directory',
            'children' => [
                'ModifyIpDefenseThreshold',
                'ModifyDefenseThreshold',
                'DescribeDdosEventList',
                'DescribeDdosCount',
                'DescribeCap',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '5093C7EE-8E27-5FC9-9B88-40626BA540C0',
                            ],
                            'Regions' => [
                                'type' => 'object',
                                'properties' => [
                                    'Region' => [
                                        'description' => 'DDoS基础防护支持的地域列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '地域详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'RegionEnName' => [
                                                    'description' => '地域的英文名称。',
                                                    'type' => 'string',
                                                    'example' => 'East China 1',
                                                ],
                                                'RegionName' => [
                                                    'description' => '地域的中文名称。',
                                                    'type' => 'string',
                                                    'example' => '华东1（杭州）',
                                                ],
                                                'RegionNoAlias' => [
                                                    'description' => '地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'RegionNo' => [
                                                    'description' => '地域的编码。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou-dg-a01',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5093C7EE-8E27-5FC9-9B88-40626BA540C0\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"RegionEnName\\": \\"East China 1\\",\\n        \\"RegionName\\": \\"华东1（杭州）\\",\\n        \\"RegionNoAlias\\": \\"cn-hangzhou\\",\\n        \\"RegionNo\\": \\"cn-hangzhou-dg-a01\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>5093C7EE-8E27-5FC9-9B88-40626BA540C0</RequestId>\\n    <Regions>\\n        <Region>\\n            <RegionNo>cn-qingdao-cm5-a01</RegionNo>\\n            <RegionName>华北1（青岛）</RegionName>\\n            <RegionEnName>North China 1</RegionEnName>\\n            <RegionNoAlias>cn-qingdao</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>cn-zhangjiakou-spe-na62-a01</RegionNo>\\n            <RegionName>张北SPE</RegionName>\\n            <RegionEnName>Zhangbei SPE Zone</RegionEnName>\\n            <RegionNoAlias>cn-zhangjiakou-spe</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>cn-chengdu-wt97-a01</RegionNo>\\n            <RegionName>西南1（成都）</RegionName>\\n            <RegionEnName>China (Chengdu)</RegionEnName>\\n            <RegionNoAlias>cn-chengdu</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>cn-beijing-btc-a01</RegionNo>\\n            <RegionName>华北2（北京）</RegionName>\\n            <RegionEnName>North China 2</RegionEnName>\\n            <RegionNoAlias>cn-beijing</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>cn-nanjing-lnj1-a01</RegionNo>\\n            <RegionName>华东5（南京-本地地域）</RegionName>\\n            <RegionEnName>China (Nanjing-Local Region)</RegionEnName>\\n            <RegionNoAlias>cn-nanjing</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>cn-shanghai-eu13-a01</RegionNo>\\n            <RegionName>华东2（上海）</RegionName>\\n            <RegionEnName>East China 2</RegionEnName>\\n            <RegionNoAlias>cn-shanghai</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>rus-west-1-ru151-a01</RegionNo>\\n            <RegionName>俄罗斯（莫斯科）</RegionName>\\n            <RegionEnName>Russia (Moscow)</RegionEnName>\\n            <RegionNoAlias>rus-west-1</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>us-east-us44-a01</RegionNo>\\n            <RegionName>美国（弗吉尼亚）</RegionName>\\n            <RegionEnName>US East 1 (Virginia)</RegionEnName>\\n            <RegionNoAlias>us-east-1</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>eu-west-1-gb33-a01</RegionNo>\\n            <RegionName>英国（伦敦）</RegionName>\\n            <RegionEnName>UK(London)</RegionEnName>\\n            <RegionNoAlias>eu-west-1</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>cn-hangzhou-dg-a01</RegionNo>\\n            <RegionName>华东1（杭州）</RegionName>\\n            <RegionEnName>East China 1</RegionEnName>\\n            <RegionNoAlias>cn-hangzhou</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>cn-hongkong-am4-c04</RegionNo>\\n            <RegionName>中国（香港）</RegionName>\\n            <RegionEnName>cn-hongkong</RegionEnName>\\n            <RegionNoAlias>cn-hongkong</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>ap-southeast-my88-a01</RegionNo>\\n            <RegionName>马来西亚（吉隆坡）</RegionName>\\n            <RegionEnName>Asia Pacific SE 3 (Kuala Lumpur)</RegionEnName>\\n            <RegionNoAlias>ap-southeast-3</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>us-west-ot7-a01</RegionNo>\\n            <RegionName>美国（硅谷）</RegionName>\\n            <RegionEnName>US West 1 (Silicon Valley)</RegionEnName>\\n            <RegionNoAlias>us-west-1</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>me-east-db47-a01</RegionNo>\\n            <RegionName>阿联酋（迪拜）</RegionName>\\n            <RegionEnName>Middle East 1 (Dubai)</RegionEnName>\\n            <RegionNoAlias>me-east-1</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>ap-northeast-jp59-a01</RegionNo>\\n            <RegionName>日本（东京）</RegionName>\\n            <RegionEnName>Asia Pacific NE 1 (Tokyo)</RegionEnName>\\n            <RegionNoAlias>ap-northeast-1</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>cn-huhehaote-nt12-a01</RegionNo>\\n            <RegionName>华北5（呼和浩特）</RegionName>\\n            <RegionEnName>China North 5 (Huhehaote)</RegionEnName>\\n            <RegionNoAlias>cn-huhehaote</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>ap-southeast-au49-a01</RegionNo>\\n            <RegionName>澳大利亚（悉尼）</RegionName>\\n            <RegionEnName>Asia Pacific SE 2 (Sydney)</RegionEnName>\\n            <RegionNoAlias>ap-southeast-2</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>ap-southeast-id35-a01</RegionNo>\\n            <RegionName>印度尼西亚（雅加达）</RegionName>\\n            <RegionEnName>Asia Pacific SE 5 (Jakarta)</RegionEnName>\\n            <RegionNoAlias>ap-southeast-5</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>ap-south-in73-a01</RegionNo>\\n            <RegionName>印度（孟买）</RegionName>\\n            <RegionEnName>Asia Pacific SOU 1 (Mumbai)</RegionEnName>\\n            <RegionNoAlias>ap-south-1</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>cn-zhangjiakou-na62-a01</RegionNo>\\n            <RegionName>华北3（张家口）</RegionName>\\n            <RegionEnName>China North 3 (Zhangjiakou)</RegionEnName>\\n            <RegionNoAlias>cn-zhangjiakou</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>cn-shenzhen-st3-a01</RegionNo>\\n            <RegionName>华南1（深圳）</RegionName>\\n            <RegionEnName>South China 1</RegionEnName>\\n            <RegionNoAlias>cn-shenzhen</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>eu-central-de46-a01</RegionNo>\\n            <RegionName>德国（法兰克福）</RegionName>\\n            <RegionEnName>EU Central 1 (Frankfurt)</RegionEnName>\\n            <RegionNoAlias>eu-central-1</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>cn-guangzhou-so157-a01</RegionNo>\\n            <RegionName>华南3（广州）</RegionName>\\n            <RegionEnName>China (Guangzhou)</RegionEnName>\\n            <RegionNoAlias>cn-guangzhou</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>ap-southeast-6</RegionNo>\\n            <RegionName>菲律宾（马尼拉）</RegionName>\\n            <RegionEnName>Philippines (Manila)</RegionEnName>\\n            <RegionNoAlias>ap-southeast-6</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>cn-heyuan-sa127-a01</RegionNo>\\n            <RegionName>华南2（河源）</RegionName>\\n            <RegionEnName>China (Heyuan)</RegionEnName>\\n            <RegionNoAlias>cn-heyuan</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>ap-southeast-os30-a01</RegionNo>\\n            <RegionName>新加坡</RegionName>\\n            <RegionEnName>Asia Pacific SE 1 (Singapore)</RegionEnName>\\n            <RegionNoAlias>ap-southeast-1</RegionNoAlias>\\n        </Region>\\n        <Region>\\n            <RegionNo>cn-wulanchabu-na130-a01</RegionNo>\\n            <RegionName>华北6（乌兰察布）</RegionName>\\n            <RegionEnName>China (Ulanqab)</RegionEnName>\\n            <RegionNoAlias>cn-wulanchabu</RegionNoAlias>\\n        </Region>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
            'title' => '查询支持的地域',
            'summary' => '查询DDoS基础防护支持的地域信息。',
            'description' => '本接口用于查询DDoS基础防护支持的地域信息，具体包括地域ID、名称（中文和英文）和编码。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'DescribeInstance' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DdosRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~353250~~)查询所有地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产的实例类型。取值：'."\n"
                            ."\n"
                            .'- **ecs**：表示查询云服务器ECS实例。'."\n"
                            .'- **slb**：表示查询负载均衡SLB实例。'."\n"
                            .'- **eip**：表示查询弹性公网IP实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产的实例名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'launch-advisor-2022****',
                    ],
                ],
                [
                    'name' => 'DdosStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产的DDoS防护状态。取值：'."\n"
                            ."\n"
                            .'- **mitigating**：表示清洗中，即查询正在进行流量清洗的公网IP资产。'."\n"
                            .'- **blackholed**：表示黑洞中，即查询处于黑洞状态的公网IP资产。'."\n"
                            .'- **normal**：表示正常，即查询未遭受DDoS攻击的公网IP资产。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'blackholed',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产的实例ID。根据实例类型（**InstanceType**）不同，此处设置的实例ID格式不同，具体说明如下：'."\n"
                            ."\n"
                            .'- **InstanceType**为**ecs**，在此处设置ECS实例ID，例如，i-bp1cb6x80tfgocid\\*\\*\\*\\*。'."\n"
                            .'- **InstanceType**为**slb**，在此处设置SLB实例ID，例如，alb-vn2dqg3v31y2vd\\*\\*\\*\\*。'."\n"
                            .'- **InstanceType**为**eip**，在此处设置SLB实例ID，例如，eip-j6ce6dcx9epi7rs46\\*\\*\\*\\*。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'i-bp1cb6x80tfgocid****',
                    ],
                ],
                [
                    'name' => 'InstanceIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产的IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '121.199.XX.XX',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
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
                        'description' => '分页查询时，设置每页包含公网IP资产的数量。默认值为**10**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '50',
                        'example' => '10',
                        'default' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Total' => [
                                'description' => '查询到的公网IP资产的总数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'C728D7E9-9A39-52E0-966B-5C33118BDBB0',
                            ],
                            'InstanceList' => [
                                'type' => 'object',
                                'properties' => [
                                    'Instance' => [
                                        'description' => '公网IP资产的实例详情列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'InstanceIp' => [
                                                    'description' => '实例的IP地址。',
                                                    'type' => 'string',
                                                    'example' => '121.199.XX.XX',
                                                ],
                                                'IsBgppack' => [
                                                    'description' => '实例是否已绑定DDoS原生防护。取值：'."\n"
                                                        ."\n"
                                                        .'- **true**：表示是。'."\n"
                                                        .'- **false**：表示否。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'IpVersion' => [
                                                    'description' => '实例IP地址的协议类型。取值：'."\n"
                                                        ."\n"
                                                        .'- **v4**：表示IPv4协议。'."\n"
                                                        .'- **v6**：表示IPv6协议。',
                                                    'type' => 'string',
                                                    'example' => 'v4',
                                                ],
                                                'ElasticThreshold' => [
                                                    'description' => '实例的DDoS弹性防护阈值。单位：Mbps。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '12310',
                                                ],
                                                'BlackholeThreshold' => [
                                                    'description' => '实例的DDoS基础防护阈值。单位：Mbps。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '5200',
                                                ],
                                                'DefenseBpsThreshold' => [
                                                    'description' => '实例的流量清洗阈值。单位：Mbps。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '300',
                                                ],
                                                'InstanceName' => [
                                                    'description' => '实例的名称。',
                                                    'type' => 'string',
                                                    'example' => 'launch-advisor-2021****',
                                                ],
                                                'InstanceStatus' => [
                                                    'description' => '实例的DDoS防护状态。取值：'."\n"
                                                        ."\n"
                                                        .'- **mitigating**：表示清洗中。'."\n"
                                                        .'- **blackholed**：表示黑洞中。'."\n"
                                                        .'- **normal**：表示正常。',
                                                    'type' => 'string',
                                                    'example' => 'normal',
                                                ],
                                                'DefensePpsThreshold' => [
                                                    'description' => '实例的报文数量清洗阈值。单位：pps。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '70000',
                                                ],
                                                'InstanceId' => [
                                                    'description' => '实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'i-bp1cb6x80tfgocid****',
                                                ],
                                                'InstanceType' => [
                                                    'description' => '实例的类型。取值：'."\n"
                                                        ."\n"
                                                        .'- **ecs**：表示云服务器ECS实例。'."\n"
                                                        .'- **slb**：表示负载均衡SLB实例。'."\n"
                                                        .'- **eip**：表示弹性公网IP实例。',
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
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Total\\": 1,\\n  \\"RequestId\\": \\"C728D7E9-9A39-52E0-966B-5C33118BDBB0\\",\\n  \\"InstanceList\\": {\\n    \\"Instance\\": [\\n      {\\n        \\"InstanceIp\\": \\"121.199.XX.XX\\",\\n        \\"IsBgppack\\": false,\\n        \\"IpVersion\\": \\"v4\\",\\n        \\"ElasticThreshold\\": 12310,\\n        \\"BlackholeThreshold\\": 5200,\\n        \\"DefenseBpsThreshold\\": 300,\\n        \\"InstanceName\\": \\"launch-advisor-2021****\\",\\n        \\"InstanceStatus\\": \\"normal\\",\\n        \\"DefensePpsThreshold\\": 70000,\\n        \\"InstanceId\\": \\"i-bp1cb6x80tfgocid****\\",\\n        \\"InstanceType\\": \\"ecs\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceResponse>\\n    <Total>1</Total>\\n    <RequestId>C728D7E9-9A39-52E0-966B-5C33118BDBB0</RequestId>\\n    <InstanceList>\\n        <InstanceIp>121.199.XX.XX</InstanceIp>\\n        <IsBgppack>false</IsBgppack>\\n        <IpVersion>v4</IpVersion>\\n        <ElasticThreshold>12310</ElasticThreshold>\\n        <BlackholeThreshold>5200</BlackholeThreshold>\\n        <DefenseBpsThreshold>300</DefenseBpsThreshold>\\n        <InstanceName>launch-advisor-2021****</InstanceName>\\n        <InstanceStatus>normal</InstanceStatus>\\n        <DefensePpsThreshold>70000</DefensePpsThreshold>\\n        <InstanceId>i-bp1cb6x80tfgocid****</InstanceId>\\n        <InstanceType>ecs</InstanceType>\\n    </InstanceList>\\n</DescribeInstanceResponse>","errorExample":""}]',
            'title' => '查询ECS、SLB、EIP资产信息',
            'summary' => '查询当前阿里云账号拥有的公网IP资产（云服务器ECS实例、负载均衡SLB实例、弹性公网IP实例）的实例详情，该接口已经过时，推荐使用新接口DescribeInstanceIpAddress。',
            'description' => '本接口用于分页查询当前阿里云账号拥有的公网IP资产（云服务器ECS实例、负载均衡SLB实例、弹性公网IP实例）的实例详情，例如，实例的ID、IP地址、DDoS基础防护阈值、流量清洗阈值、是否绑定了DDoS原生防护等。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为200次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'DescribeDdosThreshold' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DdosRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~353250~~)查询所有地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DdosType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的阈值类型。取值：'."\n"
                            ."\n"
                            .'- **defense**：表示查询流量清洗阈值。'."\n"
                            .'- **blackhole**：表示查询DDoS防护阈值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'defense',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产的实例类型。取值：'."\n"
                            ."\n"
                            .'- **ecs**：表示查询云服务器ECS实例。'."\n"
                            .'- **slb**：表示查询负载均衡SLB实例。'."\n"
                            .'- **eip**：表示查询弹性公网IP实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要查询的公网IP资产的实例ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询的公网IP资产的实例ID。N的最大值：200，即最多可配置200个实例，实例ID之间用半角逗号（,）隔开。'."\n"
                                ."\n"
                                .'> 您可以调用[DescribeInstance](~~354191~~)查询当前阿里云账号拥有的ECS、SLB、EIP实例的ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'i-bp10bclrt56fblts****',
                        ],
                        'required' => true,
                        'maxItems' => 50,
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
                                'example' => 'E9B3C090-55AD-59C6-979E-FCFD81E7D9E7',
                            ],
                            'Thresholds' => [
                                'type' => 'object',
                                'properties' => [
                                    'Threshold' => [
                                        'description' => '公网IP资产的阈值详情列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DdosType' => [
                                                    'description' => '阈值类型。取值：'."\n"
                                                        ."\n"
                                                        .'- **defense**：表示流量清洗阈值。'."\n"
                                                        .'- **blackhole**：表示DDoS防护阈值。',
                                                    'type' => 'string',
                                                    'example' => 'defense',
                                                ],
                                                'IsAuto' => [
                                                    'description' => '是否为系统默认阈值。取值：'."\n"
                                                        ."\n"
                                                        .'- **true**：表示是，即由DDoS防护服务根据云服务器的流量负载，动态调整清洗阈值。'."\n"
                                                        .'- **false**：表示否，即由您手动设置清洗阈值。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'MaxBps' => [
                                                    'description' => '最大流量清洗阈值。单位：Mbps。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1024',
                                                ],
                                                'ElasticBps' => [
                                                    'description' => 'DDoS弹性防护阈值（即最大DDoS防护阈值）。单位：Mbps。'."\n"
                                                        ."\n"
                                                        .'> 只有当**DdosType**为**blackhole**（表示查询DDoS防护阈值）时，才会返回该参数。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '12310',
                                                ],
                                                'InstanceId' => [
                                                    'description' => '实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'i-bp10bclrt56fblts****',
                                                ],
                                                'Bps' => [
                                                    'description' => '**DdosType**为**defense**（表示查询流量清洗阈值）时，表示当前流量清洗阈值。单位：Mbps。'."\n"
                                                        ."\n"
                                                        .'**DdosType**为**blackhole**（表示查询DDoS防护阈值）时，表示当前DDoS基础防护阈值。单位：Mbps。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '500',
                                                ],
                                                'Pps' => [
                                                    'description' => '当前报文数量清洗阈值。单位：pps。'."\n"
                                                        ."\n"
                                                        .'> 只有当**DdosType**为**defense**（表示查询流量清洗阈值）时，才会返回该参数。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '150000',
                                                ],
                                                'MaxPps' => [
                                                    'description' => '最大报文数量清洗阈值。单位：pps。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '150000',
                                                ],
                                                'InternetIp' => [
                                                    'description' => '公网IP资产的IP地址。',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E9B3C090-55AD-59C6-979E-FCFD81E7D9E7\\",\\n  \\"Thresholds\\": {\\n    \\"Threshold\\": [\\n      {\\n        \\"DdosType\\": \\"defense\\",\\n        \\"IsAuto\\": false,\\n        \\"MaxBps\\": 1024,\\n        \\"ElasticBps\\": 12310,\\n        \\"InstanceId\\": \\"i-bp10bclrt56fblts****\\",\\n        \\"Bps\\": 500,\\n        \\"Pps\\": 150000,\\n        \\"MaxPps\\": 150000,\\n        \\"InternetIp\\": \\"192.0.XX.XX\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDdosThresholdResponse>\\n    <RequestId>E9B3C090-55AD-59C6-979E-FCFD81E7D9E7</RequestId>\\n    <Thresholds>\\n        <DdosType>defense</DdosType>\\n        <IsAuto>false</IsAuto>\\n        <MaxBps>1024</MaxBps>\\n        <ElasticBps>12310</ElasticBps>\\n        <InstanceId>i-bp10bclrt56fblts****</InstanceId>\\n        <Bps>500</Bps>\\n        <Pps>150000</Pps>\\n        <MaxPps>150000</MaxPps>\\n        <InternetIp>192.0.XX.XX</InternetIp>\\n    </Thresholds>\\n</DescribeDdosThresholdResponse>","errorExample":""}]',
            'title' => '查询ECS、SLB、EIP资产的阈值详情',
            'summary' => '查询当前阿里云账号下指定公网IP资产（云服务器ECS实例、负载均衡SLB实例、弹性公网IP实例）的DDoS防护阈值或流量清洗阈值详情。',
            'description' => '本接口用于查询当前阿里云账号下指定公网IP资产（云服务器ECS实例、负载均衡SLB实例、弹性公网IP实例）的DDoS防护阈值或流量清洗阈值详情，例如，当前清洗阈值、最大清洗阈值、当前防护阈值、最大防护阈值等。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'DescribeBgpPackByIp' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DdosRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~353250~~)查询所有地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产（ECS实例、SLB实例、EIP实例）的IP地址。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~354191~~)查询当前阿里云账号拥有的ECS、SLB、EIP实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '118.31.XX.XX',
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
                                'example' => 'E46A08E4-A1CD-5BE9-B580-C4D6E9BC5484',
                            ],
                            'Code' => [
                                'description' => '本次请求的HTTP状态码。'."\n"
                                    ."\n"
                                    .'关于状态码的更多信息，请参见[公共参数](~~118841~~)。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '本次请求是否调用成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示调用成功。'."\n"
                                    .'- **false**：表示调用失败。 ',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'DdosbgpInfo' => [
                                'description' => '公网IP资产绑定的DDoS原生防护实例的配置。',
                                'type' => 'object',
                                'properties' => [
                                    'Ip' => [
                                        'description' => '公网IP资产的IP地址。',
                                        'type' => 'string',
                                        'example' => '118.31.XX.XX',
                                    ],
                                    'ExpireTime' => [
                                        'description' => 'DDoS原生防护实例的到期时间。使用时间戳表示，单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1640448000000',
                                    ],
                                    'ElasticThreshold' => [
                                        'description' => 'DDoS原生防护实例的弹性防护阈值。单位：Gbps。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '301',
                                    ],
                                    'BaseThreshold' => [
                                        'description' => 'DDoS原生防护实例的基础防护阈值。单位：Gbps。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '20',
                                    ],
                                    'DdosbgpInstanceId' => [
                                        'description' => 'DDoS原生防护实例的ID。',
                                        'type' => 'string',
                                        'example' => 'ddosbgp-cn-n6w1r7nz****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E46A08E4-A1CD-5BE9-B580-C4D6E9BC5484\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"DdosbgpInfo\\": {\\n    \\"Ip\\": \\"118.31.XX.XX\\",\\n    \\"ExpireTime\\": 1640448000000,\\n    \\"ElasticThreshold\\": 301,\\n    \\"BaseThreshold\\": 20,\\n    \\"DdosbgpInstanceId\\": \\"ddosbgp-cn-n6w1r7nz****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBgpPackByIpResponse>\\n    <RequestId>E46A08E4-A1CD-5BE9-B580-C4D6E9BC5484</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <DdosbgpInfo>\\n        <Ip>118.31.XX.XX</Ip>\\n        <ExpireTime>1640448000000</ExpireTime>\\n        <ElasticThreshold>301</ElasticThreshold>\\n        <BaseThreshold>20</BaseThreshold>\\n        <DdosbgpInstanceId>ddosbgp-cn-n6w1r7nz****</DdosbgpInstanceId>\\n    </DdosbgpInfo>\\n</DescribeBgpPackByIpResponse>","errorExample":""}]',
            'title' => '查询ECS、SLB、EIP资产绑定的原生防护实例',
            'summary' => '查询单个公网IP资产（云服务器ECS实例、负载均衡SLB实例、弹性公网IP实例）绑定的DDoS原生防护实例的配置。',
            'description' => '本接口用于查询单个公网IP资产（云服务器ECS实例、负载均衡SLB实例、弹性公网IP实例）绑定的DDoS原生防护实例的配置，例如，原生防护实例的基础防护阈值、弹性防护阈值、到期时间等。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'DescribeDdosCredit' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DdosRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~353250~~)查询所有地域ID。',
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
                            'Success' => [
                                'description' => '本次请求是否调用成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**：表示调用成功。'."\n"
                                    .'- **false**：表示调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'E1F7BD73-8E9D-58D9-8658-CFC97112C641',
                            ],
                            'DdosCredit' => [
                                'description' => '当前阿里云账号在指定地域的安全信誉分详情。',
                                'type' => 'object',
                                'properties' => [
                                    'Score' => [
                                        'description' => '安全信誉分值。满分为**1000**。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '550',
                                    ],
                                    'ScoreLevel' => [
                                        'description' => '安全信誉分等级。取值：'."\n"
                                            ."\n"
                                            .'- **A**：表示极好。'."\n"
                                            .'- **B**：表示优秀。'."\n"
                                            .'- **C**：表示良好。'."\n"
                                            .'- **D**：表示中等。'."\n"
                                            .'- **E**：表示较差。'."\n"
                                            .'- **F**：表示极差。',
                                        'type' => 'string',
                                        'example' => 'D',
                                    ],
                                    'BlackholeTime' => [
                                        'description' => '阿里云账号在指定地域的黑洞自动解除时间。单位：分钟。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '150',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"E1F7BD73-8E9D-58D9-8658-CFC97112C641\\",\\n  \\"DdosCredit\\": {\\n    \\"Score\\": 550,\\n    \\"ScoreLevel\\": \\"D\\",\\n    \\"BlackholeTime\\": 150\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDdosCreditResponse>\\n    <Success>true</Success>\\n    <RequestId>E1F7BD73-8E9D-58D9-8658-CFC97112C641</RequestId>\\n    <DdosCredit>\\n        <Score>550</Score>\\n        <ScoreLevel>D</ScoreLevel>\\n        <BlackholeTime>150</BlackholeTime>\\n    </DdosCredit>\\n</DescribeDdosCreditResponse>","errorExample":""}]',
            'title' => '查询安全信誉分详情',
            'summary' => '查询当前阿里云账号在指定地域的安全信誉分详情。',
            'description' => '本接口用于查询当前阿里云账号在指定地域的安全信誉分详情，例如，安全信誉分值、安全信誉等级、当前黑洞自动解除时间等。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'DescribeInstanceIpAddress' => [
            'summary' => '查询当前阿里云账号拥有的公网IP资产（云服务器ECS实例、负载均衡SLB实例、弹性公网IP实例）的DDoS防护信息以及所属原生防护实例的详情。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DdosRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~353250~~)查询所有地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产的实例类型。取值：'."\n"
                            ."\n"
                            .'- **ecs**：表示查询云服务器ECS实例。'."\n"
                            .'- **slb**：表示查询负载均衡SLB实例。'."\n"
                            .'- **eip**：表示查询弹性公网IP实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产的实例名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'launch-advisor-2021****',
                    ],
                ],
                [
                    'name' => 'DdosStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产的DDoS防护状态。取值：'."\n"
                            ."\n"
                            .'- **defense**：表示清洗中，即查询正在进行流量清洗的公网IP资产。'."\n"
                            .'- **blackhole**：表示黑洞中，即查询处于黑洞状态的公网IP资产。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'defense',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产所属的实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'i-bp1cb6x80tfgocid****',
                    ],
                ],
                [
                    'name' => 'InstanceIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产的IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.0.XX.XX',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置从返回结果的第几页开始显示查询结果。默认值为**1**，表示从第1页开始显示。',
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
                        'description' => '设置分页查询时，每页显示的公网IP资产信息的数量。默认值为**10**，表示每页显示10条公网IP资产信息。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '50',
                        'example' => '10',
                        'default' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Total' => [
                                'description' => '查询到的公网IP资产的总数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'BC0907F8-A9F3-5E11-977B-D59CD98C64ED',
                            ],
                            'InstanceList' => [
                                'description' => '公网IP资产所属实例的详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'i-bp1cb6x80tfgocid****',
                                        ],
                                        'InstanceType' => [
                                            'description' => '公网IP资产的类型。取值：'."\n"
                                                ."\n"
                                                .'- **ecs**：表示云服务器ECS实例。'."\n"
                                                .'- **slb**：表示负载均衡SLB实例。'."\n"
                                                .'- **eip**：表示弹性公网IP实例。',
                                            'type' => 'string',
                                            'example' => 'ecs',
                                        ],
                                        'InstanceName' => [
                                            'description' => '实例的名称。',
                                            'type' => 'string',
                                            'example' => 'launch-advisor-2021****',
                                        ],
                                        'InstanceStatus' => [
                                            'description' => '实例的DDoS防护状态。取值：'."\n"
                                                ."\n"
                                                .'- **normal**：表示正常。'."\n"
                                                .'- **abnormal**：表示被攻击中。'."\n",
                                            'type' => 'string',
                                            'example' => 'normal',
                                        ],
                                        'IpAddressConfig' => [
                                            'description' => '公网IP资产的详情列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'InstanceIp' => [
                                                        'description' => '公网IP资产的IP地址。',
                                                        'type' => 'string',
                                                        'example' => '192.0.XX.XX',
                                                    ],
                                                    'IsBgppack' => [
                                                        'description' => '公网IP资产是否已绑定DDoS原生防护。取值：'."\n"
                                                            ."\n"
                                                            .'- **true**：表示是。'."\n"
                                                            .'- **false**：表示否。',
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                    'IpVersion' => [
                                                        'description' => 'IP地址的协议类型。取值：'."\n"
                                                            ."\n"
                                                            .'- **v4**：表示IPv4协议。'."\n"
                                                            .'- **v6**：表示IPv6协议。',
                                                        'type' => 'string',
                                                        'example' => 'v4',
                                                    ],
                                                    'IpStatus' => [
                                                        'description' => '公网IP资产的DDoS防护状态。取值：'."\n"
                                                            ."\n"
                                                            .'- **mitigating**：表示清洗中。'."\n"
                                                            .'- **blackholed**：表示黑洞中。'."\n"
                                                            .'- **normal**：表示正常。',
                                                        'type' => 'string',
                                                        'example' => 'normal',
                                                    ],
                                                    'RegionId' => [
                                                        'description' => '公网IP资产所属的地域编码。',
                                                        'type' => 'string',
                                                        'example' => 'cn-hangzhou-dg-a01',
                                                    ],
                                                    'ElasticThreshold' => [
                                                        'description' => '公网IP资产的DDoS弹性防护阈值。单位：Mbps。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '12310',
                                                    ],
                                                    'BlackholeThreshold' => [
                                                        'description' => '公网IP资产的DDoS基础防护阈值。单位：Mbps。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '5200',
                                                    ],
                                                    'DefenseBpsThreshold' => [
                                                        'description' => '公网IP资产的流量清洗阈值。单位：Mbps。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '300',
                                                    ],
                                                    'DefensePpsThreshold' => [
                                                        'description' => '公网IP资产的报文数量清洗阈值。单位：pps。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '70000',
                                                    ],
                                                    'IsFullProtection' => [
                                                        'description' => '公网IP资产是否在原生防护中全力防护。取值：'."\n"
                                                            ."\n"
                                                            .'- **0**：表示非全力防护。'."\n"
                                                            .'- **1**：表示全力防护。',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Total\\": 1,\\n  \\"RequestId\\": \\"BC0907F8-A9F3-5E11-977B-D59CD98C64ED\\",\\n  \\"InstanceList\\": [\\n    {\\n      \\"InstanceId\\": \\"i-bp1cb6x80tfgocid****\\",\\n      \\"InstanceType\\": \\"ecs\\",\\n      \\"InstanceName\\": \\"launch-advisor-2021****\\",\\n      \\"InstanceStatus\\": \\"normal\\",\\n      \\"IpAddressConfig\\": [\\n        {\\n          \\"InstanceIp\\": \\"192.0.XX.XX\\",\\n          \\"IsBgppack\\": true,\\n          \\"IpVersion\\": \\"v4\\",\\n          \\"IpStatus\\": \\"normal\\",\\n          \\"RegionId\\": \\"cn-hangzhou-dg-a01\\",\\n          \\"ElasticThreshold\\": 12310,\\n          \\"BlackholeThreshold\\": 5200,\\n          \\"DefenseBpsThreshold\\": 300,\\n          \\"DefensePpsThreshold\\": 70000,\\n          \\"IsFullProtection\\": 0\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceIpAddressResponse>\\n    <Total>1</Total>\\n    <RequestId>BC0907F8-A9F3-5E11-977B-D59CD98C64ED</RequestId>\\n    <InstanceList>\\n        <InstanceId>i-bp1cb6x80tfgocid****</InstanceId>\\n        <InstanceType>ecs</InstanceType>\\n        <InstanceName>launch-advisor-2021****</InstanceName>\\n        <InstanceStatus>normal</InstanceStatus>\\n        <IpAddressConfig>\\n            <InstanceIp>192.0.XX.XX</InstanceIp>\\n            <IsBgppack>true</IsBgppack>\\n            <IpVersion>v4</IpVersion>\\n            <IpStatus>normal</IpStatus>\\n            <RegionId>cn-hangzhou-dg-a01</RegionId>\\n            <ElasticThreshold>12310</ElasticThreshold>\\n            <BlackholeThreshold>5200</BlackholeThreshold>\\n            <DefenseBpsThreshold>300</DefenseBpsThreshold>\\n            <DefensePpsThreshold>70000</DefensePpsThreshold>\\n        </IpAddressConfig>\\n    </InstanceList>\\n</DescribeInstanceIpAddressResponse>","errorExample":""}]',
            'title' => '查询公网IP资产的DDoS防护信息以及所属原生防护实例的详情',
            'description' => '在一个DDoS原生防护实例包含一个或者多个公网IP资产的场景下，您可以调用DescribeInstanceIpAddress接口查询当前阿里云账号拥有的公网IP资产的DDoS防护信息以及所属原生防护实例的详情，例如DDoS基础防护阈值、流量清洗阈值、公网IP资产的DDoS防护状态、实例ID、实例的防护状态等。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为200次/60秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'DescribeIpDdosThreshold' => [
            'summary' => '查询当前阿里云账号下指定公网IP资产（云服务器ECS实例、负载均衡SLB实例、弹性公网IP实例）的DDoS防护阈值或流量清洗阈值详情。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DdosRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~353250~~)查询所有地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DdosType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的阈值类型。取值：'."\n"
                            ."\n"
                            .'- **defense**：表示查询流量清洗阈值。'."\n"
                            .'- **blackhole**：表示查询DDoS防护阈值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'defense',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产的实例类型。取值：'."\n"
                            ."\n"
                            .'- **ecs**：表示查询云服务器ECS实例。'."\n"
                            .'- **slb**：表示查询负载均衡SLB实例。'."\n"
                            .'- **eip**：表示查询弹性公网IP实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产的实例ID。'."\n"
                            .'> 您可以调用[DescribeInstanceIpAddress](~~429562~~)查询当前阿里云账号拥有的ECS、SLB、EIP实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-bp1i88rqjza51s****',
                    ],
                ],
                [
                    'name' => 'InternetIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产的IP地址。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '192.0.XX.XX',
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
                                'example' => '025F1688-680B-551A-9A8E-1A0D796315CF',
                            ],
                            'Threshold' => [
                                'description' => '公网IP资产的阈值详情列表。',
                                'type' => 'object',
                                'properties' => [
                                    'DdosType' => [
                                        'description' => '阈值类型。取值：'."\n"
                                            ."\n"
                                            .'- **defense**：表示流量清洗阈值。'."\n"
                                            .'- **blackhole**：表示DDoS防护阈值。',
                                        'type' => 'string',
                                        'example' => 'defense',
                                    ],
                                    'IsAuto' => [
                                        'description' => '是否为系统默认阈值。取值：'."\n"
                                            ."\n"
                                            .'- **true**：表示是，即由DDoS防护服务根据云服务器的流量负载，动态调整清洗阈值。'."\n"
                                            .'- **false**：表示否，即由您手动设置清洗阈值。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'MaxBps' => [
                                        'description' => '最大流量清洗阈值。单位：Mbps。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '7500',
                                    ],
                                    'ElasticBps' => [
                                        'description' => 'DDoS弹性防护阈值（即DDoS最大防护阈值）。单位：Mbps。'."\n"
                                            ."\n"
                                            .'> 只有当**DdosType**为**blackhole**（表示查询DDoS防护阈值）时，才会返回该参数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '12310',
                                    ],
                                    'InstanceId' => [
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'i-bp1i88rqjza51s****',
                                    ],
                                    'Bps' => [
                                        'description' => '**DdosType**为**defense**（表示查询流量清洗阈值）时，表示当前流量清洗阈值。单位：Mbps。'."\n"
                                            ."\n"
                                            .'**DdosType**为**blackhole**（表示查询DDoS防护阈值）时，表示当前DDoS基础防护阈值。单位：Mbps。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '7500',
                                    ],
                                    'Pps' => [
                                        'description' => '当前报文数量清洗阈值。单位：pps。'."\n"
                                            ."\n"
                                            .'> 只有当**DdosType**为**defense**（表示查询流量清洗阈值）时，才会返回该参数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5000000',
                                    ],
                                    'MaxPps' => [
                                        'description' => '最大报文数量清洗阈值。单位：pps。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5000000',
                                    ],
                                    'InternetIp' => [
                                        'description' => '公网IP资产的IP地址。',
                                        'type' => 'string',
                                        'example' => '192.0.XX.XX',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"025F1688-680B-551A-9A8E-1A0D796315CF\\",\\n  \\"Threshold\\": {\\n    \\"DdosType\\": \\"defense\\",\\n    \\"IsAuto\\": false,\\n    \\"MaxBps\\": 7500,\\n    \\"ElasticBps\\": 12310,\\n    \\"InstanceId\\": \\"i-bp1i88rqjza51s****\\",\\n    \\"Bps\\": 7500,\\n    \\"Pps\\": 5000000,\\n    \\"MaxPps\\": 5000000,\\n    \\"InternetIp\\": \\"192.0.XX.XX\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeIpDdosThresholdResponse>\\n    <RequestId>025F1688-680B-551A-9A8E-1A0D796315CF</RequestId>\\n    <Threshold>\\n        <DdosType>defense</DdosType>\\n        <IsAuto>false</IsAuto>\\n        <MaxBps>7500</MaxBps>\\n        <ElasticBps>12310</ElasticBps>\\n        <InstanceId>i-bp1i88rqjza51s****</InstanceId>\\n        <Bps>7500</Bps>\\n        <Pps>5000000</Pps>\\n        <MaxPps>5000000</MaxPps>\\n        <InternetIp>192.0.XX.XX</InternetIp>\\n    </Threshold>\\n</DescribeIpDdosThresholdResponse>","errorExample":""}]',
            'title' => '查询指定公网IP资产的DDoS防护阈值或流量清洗阈值详情',
            'description' => '在一个DDoS原生防护实例包含一个或者多个公网IP资产的场景下，您可以调用DescribeIpDdosThreshold接口查询指定公网IP资产的DDoS防护阈值或流量清洗阈值详情，例如当前清洗阈值、最大清洗阈值、当前防护阈值、最大防护阈值等。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'DescribeIpLocationService' => [
            'summary' => '查询当前阿里云账号拥有的公网IP资产（云服务器ECS实例、负载均衡SLB实例、弹性公网IP实例）的IP归属地域。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InternetIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产的IP地址。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '121.199.XX.XX',
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
                                'example' => 'C728D7E9-9A39-52E0-966B-5C33118BDBB0',
                            ],
                            'Instance' => [
                                'title' => 'instance model',
                                'description' => '资产实例详情。',
                                'type' => 'object',
                                'properties' => [
                                    'InstanceId' => [
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'i-bp1cb6x80tfgocid****',
                                    ],
                                    'InstanceName' => [
                                        'description' => '实例的名称。',
                                        'type' => 'string',
                                        'example' => 'launch-advisor-2021****',
                                    ],
                                    'InternetIp' => [
                                        'description' => '公网IP资产的IP地址。',
                                        'type' => 'string',
                                        'example' => '121.199.XX.XX',
                                    ],
                                    'InstanceType' => [
                                        'description' => '公网IP资产的实例类型。取值：'."\n"
                                            .'- ecs：表示云服务器ECS实例。'."\n"
                                            .'- slb：表示负载均衡SLB实例。'."\n"
                                            .'- eip：表示弹性公网IP实例。',
                                        'type' => 'string',
                                        'example' => 'ecs',
                                    ],
                                    'Region' => [
                                        'description' => '公网IP资产的IP归属地域。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C728D7E9-9A39-52E0-966B-5C33118BDBB0\\",\\n  \\"Instance\\": {\\n    \\"InstanceId\\": \\"i-bp1cb6x80tfgocid****\\",\\n    \\"InstanceName\\": \\"launch-advisor-2021****\\",\\n    \\"InternetIp\\": \\"121.199.XX.XX\\",\\n    \\"InstanceType\\": \\"ecs\\",\\n    \\"Region\\": \\"cn-hangzhou\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeIpLocationServiceResponse>\\n    <RequestId>C728D7E9-9A39-52E0-966B-5C33118BDBB0</RequestId>\\n    <Instance>\\n        <InstanceId>i-bp1cb6x80tfgocid****</InstanceId>\\n        <InstanceName>launch-advisor-2021****</InstanceName>\\n        <InternetIp>121.199.XX.XX</InternetIp>\\n        <InstanceType>ecs</InstanceType>\\n        <Region>cn-hangzhou</Region>\\n    </Instance>\\n</DescribeIpLocationServiceResponse>","errorExample":""}]',
            'title' => '查询公网IP资产的IP归属地域',
            'description' => '本接口用于查询当前阿里云账号拥有的公网IP资产（云服务器ECS实例、负载均衡SLB实例、弹性公网IP实例）的公网IP归属地域以及所属原生防护实例的实例详情，例如实例的ID、实例名称等。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'ModifyIpDefenseThreshold' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DdosRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '公网IP资产所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~353250~~)查询所有地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '公网IP资产的实例类型。取值：'."\n"
                            ."\n"
                            .'- **ecs**：表示云服务器ECS实例。'."\n"
                            .'- **slb**：表示负载均衡SLB实例。'."\n"
                            .'- **eip**：表示弹性公网IP实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '公网IP资产的实例ID。'."\n"
                            .'> 您可以调用[DescribeInstance](~~354191~~)查询当前阿里云账号拥有的ECS、SLB、EIP实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-uf6idy3c57psf7vu****',
                    ],
                ],
                [
                    'name' => 'Bps',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置流量清洗阈值，单位：Mbps。该阈值不能超过当前实例的公网数据流量峰值。修改Bps时，Pps必填，否则不会生效。'."\n"
                            ."\n"
                            .'您可以使用实例自带的监控工具，查询实例的公网数据流量：'."\n"
                            ."\n"
                            .'- 如果您使用ECS实例，请参见[查看实例监控信息](~~25482~~)。'."\n"
                            .'- 如果您使用SLB实例，请参见[查看监控数据](~~85982~~)。'."\n"
                            .'- 如果您使用EIP实例，请参见[查看监控数据](~~85354~~)。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'Pps',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置报文数量清洗阈值，单位：pps。修改Pps时，Bps必填，否则不会生效。'."\n"
                            ."\n"
                            .'该阈值不能超过当前实例的数据包流量峰值。您可以使用实例自带的监控工具，查询实例的数据包流量：'."\n"
                            ."\n"
                            .'- 如果您使用ECS实例，请参见[查看实例监控信息](~~25482~~)。'."\n"
                            .'- 如果您使用SLB实例，请参见[查看监控数据](~~85982~~)。'."\n"
                            .'- 如果您使用EIP实例，请参见[查看监控数据](~~85354~~)。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '70000',
                    ],
                ],
                [
                    'name' => 'IsAuto',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否启用自动设置，即根据实例的流量负载，自动调整清洗阈值。取值：'."\n"
                            .'- **true**：表示是，无需手动设置**Bps**、**Pps**参数。'."\n"
                            .'- **false**（默认值）：表示否，需要手动设置**Bps**、**Pps**参数。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'InternetIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '公网IP资产的IP地址。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '192.0.XX.XX',
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
                                'example' => 'BC0607F8-A9F3-5E11-977B-D59CD58C64ED',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BC0607F8-A9F3-5E11-977B-D59CD58C64ED\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyIpDefenseThresholdResponse>\\n    <RequestId>BC0607F8-A9F3-5E11-977B-D59CD58C64ED</RequestId>\\n</ModifyIpDefenseThresholdResponse>","errorExample":""}]',
            'title' => '修改单个公网IP资产的DDoS防护清洗阈值',
            'summary' => '修改单个公网IP资产（云服务器ECS实例、负载均衡SLB实例、弹性公网IP实例）的DDoS防护清洗阈值，该接口为同步接口，用于支持terraform。',
            'description' => '### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'ModifyDefenseThreshold' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DdosRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '公网IP资产所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~353250~~)查询所有地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '公网IP资产的实例类型。取值：'."\n"
                            ."\n"
                            .'- **ecs**：表示云服务器ECS实例。'."\n"
                            .'- **slb**：表示负载均衡SLB实例。'."\n"
                            .'- **eip**：表示弹性公网IP实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '公网IP资产的实例ID。'."\n"
                            .'> 您可以调用[DescribeInstance](~~354191~~)查询当前阿里云账号拥有的ECS、SLB、EIP实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-uf6idy3c57psf7vu****',
                    ],
                ],
                [
                    'name' => 'Bps',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置流量清洗阈值，单位：Mbps。该阈值不能超过当前实例的公网数据流量峰值。修改Bps时，Pps必填，否则不会生效。'."\n"
                            ."\n"
                            .'您可以使用实例自带的监控工具，查询实例的公网数据流量：'."\n"
                            ."\n"
                            .'- 如果您使用ECS实例，请参见[查看实例监控信息](~~25482~~)。'."\n"
                            .'- 如果您使用SLB实例，请参见[查看监控数据](~~85982~~)。'."\n"
                            .'<props="china">'."\n"
                            .'- 如果您使用EIP实例，请参见[查看监控数据](~~85354~~)。</props>',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'Pps',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置报文数量清洗阈值，单位：pps。修改Pps时，Bps必填，否则不会生效。'."\n"
                            ."\n"
                            .'该阈值不能超过当前实例的数据包流量峰值。您可以使用实例自带的监控工具，查询实例的数据包流量：'."\n"
                            ."\n"
                            .'- 如果您使用ECS实例，请参见[查看实例监控信息](~~25482~~)。'."\n"
                            .'- 如果您使用SLB实例，请参见[查看监控数据](~~85982~~)。'."\n"
                            .'<props="china">'."\n"
                            .'- 如果您使用EIP实例，请参见[查看监控数据](~~85354~~)。</props>',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '70000',
                    ],
                ],
                [
                    'name' => 'IsAuto',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否启用自动设置，即根据实例的流量负载，自动调整清洗阈值。取值：'."\n"
                            .'- **true**：表示是，无需手动设置**Bps**、**Pps**参数。'."\n"
                            .'- **false**：表示否，需要手动设置**Bps**、**Pps**参数。'."\n"
                            ."\n"
                            .'默认值：false'."\n"
                            ."\n",
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'InternetIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '公网IP资产的IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.0.XX.XX',
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
                                'example' => 'BC0607F8-A9F3-5E11-977B-D59CD58C64ED',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BC0607F8-A9F3-5E11-977B-D59CD58C64ED\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDefenseThresholdResponse>\\n    <RequestId>BC0607F8-A9F3-5E11-977B-D59CD58C64ED</RequestId>\\n</ModifyDefenseThresholdResponse>","errorExample":""}]',
            'title' => '修改清洗阈值',
            'summary' => '修改单个公网IP资产（云服务器ECS实例、负载均衡SLB实例、弹性公网IP实例）的DDoS防护清洗阈值。',
            'description' => '本接口用于修改单个公网IP资产（云服务器ECS实例、负载均衡SLB实例、弹性公网IP实例）的DDoS防护清洗阈值。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDdosEventList' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DdosRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~353250~~)查询所有地域ID。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产的实例类型。取值：'."\n"
                            ."\n"
                            .'- **ecs**：表示查询云服务器ECS实例。'."\n"
                            .'- **slb**：表示查询负载均衡SLB实例。'."\n"
                            .'- **eip**：表示查询弹性公网IP实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产的实例ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~354191~~)查询当前阿里云账号拥有的ECS、SLB、EIP实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-bp10bclrt56fblts****',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
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
                        'description' => '分页查询时，设置每页包含攻击事件的数量。默认值为**10**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '50',
                        'example' => '10',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'InternetIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产的IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '121.199.XX.XX',
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
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'BC0907F8-A9F3-5E11-977B-D59CD98C64ED',
                            ],
                            'DdosEventList' => [
                                'type' => 'object',
                                'properties' => [
                                    'DdosEvent' => [
                                        'description' => 'DDoS攻击事件的详情列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DdosType' => [
                                                    'description' => 'DDoS攻击事件的类型。取值：'."\n"
                                                        ."\n"
                                                        .'- **defense**：表示流量清洗事件。'."\n"
                                                        .'- **blackhole**：表示黑洞事件。',
                                                    'type' => 'string',
                                                    'example' => 'blackhole',
                                                ],
                                                'EndTime' => [
                                                    'description' => '事件的结束时间。使用时间戳表示，单位：毫秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1637817679000',
                                                ],
                                                'StartTime' => [
                                                    'description' => '事件的开始时间。使用时间戳表示，单位：毫秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1637812279000',
                                                ],
                                                'DelayTime' => [
                                                    'description' => '最后一次遭受攻击的时间。使用时间戳表示，单位：毫秒。'."\n"
                                                        ."\n"
                                                        .'> 只有在一次攻击事件中，公网IP资产遭到多次攻击时，才会返回该参数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1637817679000',
                                                ],
                                                'DdosStatus' => [
                                                    'description' => '事件的状态。取值：'."\n"
                                                        ."\n"
                                                        .'- **mitigating**：表示清洗中，即正在进行流量清洗。'."\n"
                                                        .'- **blackholed**：表示黑洞中，即公网IP资产处于黑洞状态。'."\n"
                                                        .'- **normal**：表示正常，即事件已结束。',
                                                    'type' => 'string',
                                                    'example' => 'normal',
                                                ],
                                                'UnBlackholeTime' => [
                                                    'description' => '黑洞解除时间。使用时间戳表示，单位：毫秒。'."\n"
                                                        ."\n"
                                                        .'> 只有当**DdosType**为**blackhole**（表示黑洞事件）时，才会返回该参数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1637814079000',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Total\\": 1,\\n  \\"RequestId\\": \\"BC0907F8-A9F3-5E11-977B-D59CD98C64ED\\",\\n  \\"DdosEventList\\": {\\n    \\"DdosEvent\\": [\\n      {\\n        \\"DdosType\\": \\"blackhole\\",\\n        \\"EndTime\\": 1637817679000,\\n        \\"StartTime\\": 1637812279000,\\n        \\"DelayTime\\": 1637817679000,\\n        \\"DdosStatus\\": \\"normal\\",\\n        \\"UnBlackholeTime\\": 1637814079000\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDdosEventListResponse>\\n    <Total>1</Total>\\n    <RequestId>BC0907F8-A9F3-5E11-977B-D59CD98C64ED</RequestId>\\n    <DdosEventList>\\n        <DdosType>blackhole</DdosType>\\n        <EndTime>1637817679000</EndTime>\\n        <StartTime>1637812279000</StartTime>\\n        <DelayTime>1637817679000</DelayTime>\\n        <DdosStatus>normal</DdosStatus>\\n        <UnBlackholeTime>1637814079000</UnBlackholeTime>\\n    </DdosEventList>\\n</DescribeDdosEventListResponse>","errorExample":""}]',
            'title' => '查询DDoS攻击事件列表',
            'summary' => '查询单个公网IP资产（云服务器ECS实例、负载均衡SLB实例、弹性公网IP实例）上发生的DDoS攻击事件的详情列表。',
            'description' => '本接口用于分页查询单个公网IP资产（云服务器ECS实例、负载均衡SLB实例、弹性公网IP实例）上发生的DDoS攻击事件的详情列表，例如，事件的起止时间、当前状态等。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'DescribeDdosCount' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DdosRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~353250~~)查询所有地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的公网IP资产的实例类型。取值：'."\n"
                            ."\n"
                            .'- **ecs**：表示查询云服务器ECS实例。'."\n"
                            .'- **slb**：表示查询负载均衡SLB实例。'."\n"
                            .'- **eip**：表示查询弹性公网IP实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecs',
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
                                'example' => '7D66C762-324E-51CE-B461-2007996087B2',
                            ],
                            'DdosCount' => [
                                'description' => '正在遭受DDoS攻击的实例数量详情。',
                                'type' => 'object',
                                'properties' => [
                                    'BlackholeCount' => [
                                        'description' => '处于黑洞状态的实例的数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'InstacenCount' => [
                                        'description' => '实例的总数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'DefenseCount' => [
                                        'description' => '正在进行攻击流量清洗的实例的数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '4',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7D66C762-324E-51CE-B461-2007996087B2\\",\\n  \\"DdosCount\\": {\\n    \\"BlackholeCount\\": 0,\\n    \\"InstacenCount\\": 0,\\n    \\"DefenseCount\\": 4\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDdosCountResponse>\\n    <RequestId>7D66C762-324E-51CE-B461-2007996087B2</RequestId>\\n    <DdosCount>\\n        <BlackholeCount>0</BlackholeCount>\\n        <InstacenCount>0</InstacenCount>\\n        <DefenseCount>4</DefenseCount>\\n    </DdosCount>\\n</DescribeDdosCountResponse>","errorExample":""}]',
            'title' => '查询正在遭受DDoS攻击的资产的数量',
            'summary' => '查询指定地域下正在遭受DDoS攻击的公网IP资产（云服务器ECS实例、负载均衡SLB实例、弹性公网IP实例）的数量。',
            'description' => '本接口用于查询指定地域下正在遭受DDoS攻击的公网IP资产（云服务器ECS实例、负载均衡SLB实例、弹性公网IP实例）的数量。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'DescribeCap' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DdosRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '遭受DDoS攻击的公网IP资产所在地域ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeRegions](~~353250~~)查询所有地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '遭受DDoS攻击的公网IP资产的实例类型。取值：'."\n"
                            ."\n"
                            .'- **ecs**：表示云服务器ECS实例。'."\n"
                            .'- **slb**：表示负载均衡SLB实例。'."\n"
                            .'- **eip**：表示弹性公网IP实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '遭受DDoS攻击的公网IP资产的实例ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeInstance](~~354191~~)查询当前阿里云账号拥有的ECS、SLB、EIP实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-bp10bclrt56fblts****',
                    ],
                ],
                [
                    'name' => 'BegTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDoS攻击事件的开始时间。使用时间戳表示，单位：毫秒。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeDdosEventList](~~354236~~)查询公网IP资产上发生的所有DDoS攻击事件的开始时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1637812279000',
                    ],
                ],
                [
                    'name' => 'InternetIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '遭受DDoS攻击的公网IP资产的IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '121.199.XX.XX',
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
                                'example' => 'C728D7E9-9A39-52E0-966B-5C33118BDBB0',
                            ],
                            'CapUrl' => [
                                'description' => 'DDoS攻击事件发生时抓取的流量数据的下载链接。',
                                'type' => 'object',
                                'properties' => [
                                    'Url' => [
                                        'description' => '流量数据的下载链接。',
                                        'type' => 'string',
                                        'example' => 'http://beaver-pack****.oss-cn-hangzhou.aliyuncs.com/ddos-2021112511-121.89.XX.XX.cap?Expires=1637824408&OSSAccessKeyId=LTAIXu2lJhw3****&Signature=KKSzOMSUajtwcqfqxkU1nK69d4****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C728D7E9-9A39-52E0-966B-5C33118BDBB0\\",\\n  \\"CapUrl\\": {\\n    \\"Url\\": \\"http://beaver-pack****.oss-cn-hangzhou.aliyuncs.com/ddos-2021112511-121.89.XX.XX.cap?Expires=1637824408&OSSAccessKeyId=LTAIXu2lJhw3****&Signature=KKSzOMSUajtwcqfqxkU1nK69d4****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeCapResponse>\\n    <RequestId>C728D7E9-9A39-52E0-966B-5C33118BDBB0</RequestId>\\n    <CapUrl>\\n        <Url>http://beaver-pack****.oss-cn-hangzhou.aliyuncs.com/ddos-2021112511-121.89.XX.XX.cap?Expires=1637824408&amp;OSSAccessKeyId=LTAIXu2lJhw3****&amp;Signature=KKSzOMSUajtwcqfqxkU1nK69d4****</Url>\\n    </CapUrl>\\n</DescribeCapResponse>","errorExample":""}]',
            'title' => '获取DDoS攻击抓包下载链接',
            'summary' => '获取DDoS攻击事件发生时抓取的流量数据的下载链接。',
            'description' => '本接口用于获取DDoS攻击事件发生时抓取的流量数据的下载链接。您可以使用链接下载攻击流量数据作为证据。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'antiddos-openapi.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'antiddos.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'antiddos-openapi.ap-northeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'antiddos.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'antiddos-openapi.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'endpoint' => 'antiddos-openapi.ap-southeast-6.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'antiddos.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'antiddos.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'antiddos-openapi.cn-guangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'antiddos.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'antiddos-openapi.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'antiddos-openapi.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'antiddos.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'antiddos.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'antiddos.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'antiddos-openapi.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-nanjing',
            'endpoint' => 'antiddos-openapi.cn-hangzhou-cloudstone.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'antiddos-openapi.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'antiddos.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1',
            'endpoint' => 'antiddos-openapi.rus-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'antiddos.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'antiddos-openapi.me-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'antiddos-openapi.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'antiddos.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'antiddos.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'antiddos.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'antiddos-openapi.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'antiddos-openapi.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'antiddos-openapi.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'antiddos.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'antiddos-openapi.cn-heyuan.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'antiddos.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'antiddos-openapi.eu-central-1.aliyuncs.com',
        ],
    ],
];
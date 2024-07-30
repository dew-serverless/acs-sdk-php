<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'hitsdb',
        'version' => '2017-06-01',
    ],
    'directories' => [
        [
            'id' => 64170,
            'title' => '可用区',
            'type' => 'directory',
            'children' => [
                'DescribeRegions',
                'DescribeZones',
            ],
        ],
        [
            'id' => 64173,
            'title' => '实例',
            'type' => 'directory',
            'children' => [
                'CreateHiTSDBInstance',
                'DeleteHiTSDBInstance',
                'ModifyHiTSDBInstanceClass',
                'DescribeHiTSDBInstance',
                'DescribeHiTSDBInstanceList',
                'RenameHiTSDBInstanceAlias',
                'RestartHiTSDBInstance',
                'RenewTSDBInstance',
                'SwitchHiTSDBInstancePublicNet',
            ],
        ],
        [
            'id' => 64183,
            'title' => '白名单',
            'type' => 'directory',
            'children' => [
                'ModifyHiTSDBInstanceSecurityIpList',
                'DescribeHiTSDBInstanceSecurityIpList',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '63941',
                'abilityTreeNodes' => [
                    'FEATUREhitsdbBWSQMK',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'AcceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回值的语言，取值范围：'."\n"
                            ."\n"
                            .'- zh-CN：中文'."\n"
                            .'- en-US：英文'."\n"
                            .'- ja：日文'."\n"
                            ."\n"
                            .'默认值：zh-CN。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh-CN',
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
                                'example' => 'BDDB1954-002B-4249-B2DF-2CDDA0259668',
                            ],
                            'Regions' => [
                                'type' => 'object',
                                'properties' => [
                                    'Region' => [
                                        'description' => '地域信息的集合',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'RegionEndpoint' => [
                                                    'description' => '地域对应的接入地址（Endpoint）',
                                                    'type' => 'string',
                                                    'example' => 'hitsdb.aliyuncs.com',
                                                ],
                                                'LocalName' => [
                                                    'description' => '地域名称',
                                                    'type' => 'string',
                                                    'example' => '华东1（杭州）',
                                                ],
                                                'RegionId' => [
                                                    'description' => '地域ID',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => '400',
                        'errorMessage' => 'Parameter is not valid',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BDDB1954-002B-4249-B2DF-2CDDA0259668\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"RegionEndpoint\\": \\"hitsdb.aliyuncs.com\\",\\n        \\"LocalName\\": \\"华东1（杭州）\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\r\\n    <RequestId>DBB70386-45C6-4E92-B239-4A764E32CE4C</RequestId>\\r\\n    <Regions>\\r\\n        <Region>\\r\\n            <RegionId>cn-hangzhou</RegionId>\\r\\n            <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\r\\n            <LocalName>华东1（杭州）</LocalName>\\r\\n        </Region>\\r\\n        <Region>\\r\\n            <RegionId>cn-shanghai</RegionId>\\r\\n            <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\r\\n            <LocalName>华东2（上海）</LocalName>\\r\\n        </Region>\\r\\n        <Region>\\r\\n            <RegionId>cn-qingdao</RegionId>\\r\\n            <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\r\\n            <LocalName>华北1（青岛）</LocalName>\\r\\n        </Region>\\r\\n        <Region>\\r\\n            <RegionId>cn-beijing</RegionId>\\r\\n            <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\r\\n            <LocalName>华北2（北京）</LocalName>\\r\\n        </Region>\\r\\n        <Region>\\r\\n            <RegionId>cn-huhehaote</RegionId>\\r\\n            <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\r\\n            <LocalName>华北5（呼和浩特）</LocalName>\\r\\n        </Region>\\r\\n        <Region>\\r\\n            <RegionId>cn-shenzhen</RegionId>\\r\\n            <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\r\\n            <LocalName>华南1（深圳）</LocalName>\\r\\n        </Region>\\r\\n        <Region>\\r\\n            <RegionId>ap-southeast-1</RegionId>\\r\\n            <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\r\\n            <LocalName>新加坡</LocalName>\\r\\n        </Region>\\r\\n    </Regions>\\r\\n</DescribeRegionsResponse>","errorExample":""}]',
            'title' => '查看用户可选的地域和可用区',
            'summary' => '调用DescribeRegions查询可部署时序数据库的Region列表。',
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
                'abilityTreeCode' => '63958',
                'abilityTreeNodes' => [
                    'FEATUREhitsdbBWSQMK',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Language',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语言环境，zh_CN-中文，en_US-英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_CN',
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
                                'example' => 'F67BFFF3-F5C2-45B5-9C28-6E4A1E51449B',
                            ],
                            'ZoneList' => [
                                'type' => 'object',
                                'properties' => [
                                    'ZoneModel' => [
                                        'description' => '可用区列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ZoneId' => [
                                                    'description' => '可用区ID',
                                                    'type' => 'string',
                                                    'example' => 'cn-shanghai-b',
                                                ],
                                                'LocalName' => [
                                                    'description' => '可用区名称',
                                                    'type' => 'string',
                                                    'example' => '华东2可用区B',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F67BFFF3-F5C2-45B5-9C28-6E4A1E51449B\\",\\n  \\"ZoneList\\": {\\n    \\"ZoneModel\\": [\\n      {\\n        \\"ZoneId\\": \\"cn-shanghai-b\\",\\n        \\"LocalName\\": \\"华东2可用区B\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>F67BFFF3-F5C2-45B5-9C28-6E4A1E51449B</RequestId>\\n<ZoneList>\\n    <ZoneId>cn-shanghai-b</ZoneId>\\n    <LocalName>华东2可用区B</LocalName>\\n</ZoneList>","errorExample":""}]',
            'title' => '查询某一阿里云地域下的可用区',
            'summary' => '调用DescribeZones获取实例支持的可用区信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateHiTSDBInstance' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'abilityTreeCode' => '75169',
                'abilityTreeNodes' => [
                    'FEATUREhitsdbUE1KPV',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '区域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备用参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'None',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可用区ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shanghai-b',
                    ],
                ],
                [
                    'name' => 'InstanceAlias',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'tsdb_test',
                    ],
                ],
                [
                    'name' => 'InstanceClass',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例规格。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'tsdb.1x.basic',
                        'enum' => [
                            'influxdata.n1.xlarge',
                            'influxdata.n1.2xlarge',
                            'influxdata.n1.4xlarge',
                            'influxdata.n1.8xlarge',
                            'influxdata.n1.16xlarge',
                            'influxdata.n1.mxlarge',
                            'influxdata.n1.xlarge_ha',
                            'influxdata.n1.2xlarge_ha',
                            'influxdata.n1.4xlarge_ha',
                            'influxdata.n1.8xlarge_ha',
                            'influxdata.n1.16xlarge_ha',
                            'influxdata.n1.mxlarge_ha',
                            'tsdb.1x.basic',
                            'tsdb.3x.basic',
                            'tsdb.4x.basic',
                            'tsdb.12x.standard',
                            'tsdb.24x.standard',
                            'tsdb.48x.large',
                            'tsdb.96x.large',
                            'tsdb.iot.1x.small',
                        ],
                    ],
                ],
                [
                    'name' => 'InstanceStorage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例存储容量，单位 GB。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'PayType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '付费类型：'."\n"
                            ."\n"
                            .'- PREPAY：包年包月。'."\n"
                            ."\n"
                            .'- POSTPAY：按量付费。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'PREPAY',
                        'enum' => [
                            'POSTPAY',
                            'PREPAY',
                        ],
                    ],
                ],
                [
                    'name' => 'VPCId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专有网络ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vpc-wz9ydz3vg93s1ozsd****',
                    ],
                ],
                [
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交换机ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vsw-wz9kv78f9cp47yadu****',
                    ],
                ],
                [
                    'name' => 'PricingCycle',
                    'in' => 'query',
                    'schema' => [
                        'description' => '付费类型为包年包月的实例的购买时长单位。'."\n"
                            ."\n"
                            .'- Month：月。'."\n"
                            ."\n"
                            .'- Year：年。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Month',
                        'enum' => [
                            'Month',
                            'Year',
                        ],
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '购买时长。'."\n"
                            ."\n"
                            .'- PricingCycle为Month时，取值范围为\\[1,9\\]。'."\n"
                            ."\n"
                            .'- PricingCycle为Year时，取值范围为\\[1,3\\]。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DiskCategory',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'TSDB for InfluxDB®️的磁盘类型：'."\n"
                            ."\n"
                            .'- cloud_efficiency：高效云盘。'."\n"
                            ."\n"
                            .'- cloud_ssd：SSD云盘。'."\n"
                            ."\n"
                            .'- cloud_essd：ESSD云盘。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cloud_ssd',
                        'enum' => [
                            'cloud_essd',
                            'cloud_ssd',
                            'cloud_efficiency',
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
                                'example' => '587BCA54-50DA-4885-ADE9-80A848339151',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'ts-wz99vz6u8jg39****',
                            ],
                            'OrderId' => [
                                'description' => '订单ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '211110656240000',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'TSDB.Errorcode.ParameterInvaild',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'TSDB.Errorcode.InstanceNotFound',
                        'errorMessage' => 'The instance is not found',
                    ],
                ],
                411 => [
                    [
                        'errorCode' => 'TSDB.Errorcode.InstanceClassAndEngineTypeMismatch',
                        'errorMessage' => 'The engine type and instance class parameters do not match. Instance class will take precedence.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'TSDB.Errorcode.InstanceStorageInvalid',
                        'errorMessage' => 'The parameter of instance storage is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"587BCA54-50DA-4885-ADE9-80A848339151\\",\\n  \\"InstanceId\\": \\"ts-wz99vz6u8jg39****\\",\\n  \\"OrderId\\": 211110656240000\\n}","errorExample":""},{"type":"xml","example":"<CreateHiTSDBInstance>\\n<RequestId>587BCA54-50DA-4885-ADE9-80A848339151</RequestId>\\n<InstanceId>ts-wz99vz6u8jg39****</InstanceId>\\n<OrderId>211110656240000</OrderId>\\n</CreateHiTSDBInstance>","errorExample":""}]',
            'title' => '创建TSDB实例',
            'summary' => '调用CreateHiTSDBInstance创建一个TSDB实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteHiTSDBInstance' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ts-ufxxxxxxxxxxxxx',
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
                                'example' => '1556DCB0-043A-4444-8BD9-CF4A68E7EE64',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Instance.IsNotPostPay',
                        'errorMessage' => 'The instance billing type is not subscription.',
                    ],
                    [
                        'errorCode' => 'Instance.IsNotAvailable',
                        'errorMessage' => 'The instance is unavailable.',
                    ],
                    [
                        'errorCode' => 'Instance.IsNotValid',
                        'errorMessage' => 'The instance is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1556DCB0-043A-4444-8BD9-CF4A68E7EE64\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteHiTSDBInstanceResponse>\\r\\n    <RequestId>1556DCB0-043A-4444-8BD9-CF4A68E7EE64</RequestId>\\r\\n</DeleteHiTSDBInstanceResponse>","errorExample":""}]',
            'title' => '删除实例',
            'summary' => '调用DeleteHiTSDBInstance删除实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyHiTSDBInstanceClass' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ts-xxxxxxxxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'InstanceClass',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例规格',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'tsdb.1x.basic',
                    ],
                ],
                [
                    'name' => 'InstanceStorage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例存储容量，单位GB',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '500',
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
                                'example' => '57540985-3C11-4588-96FD-93413C6282EF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Instance.IsModifyingClass',
                        'errorMessage' => 'The instance class is being modified and cannot be operated.',
                    ],
                    [
                        'errorCode' => 'Instance.SpecIsNotValid',
                        'errorMessage' => 'The instance specification is invalid.',
                    ],
                    [
                        'errorCode' => 'Instance.IsNotAvailable',
                        'errorMessage' => 'The instance is unavailable.',
                    ],
                    [
                        'errorCode' => 'Instance.DoesNotSupportShrinkStorage',
                        'errorMessage' => 'Storage scale in is not supported.',
                    ],
                    [
                        'errorCode' => 'Instance.Upgrade.ParamsIsNotValid',
                        'errorMessage' => 'The instance upgrade parameters are invalid.',
                    ],
                    [
                        'errorCode' => 'CurrentEngineType.ClassChangingNotSupported',
                        'errorMessage' => 'The current engine type does not support class changing.',
                    ],
                    [
                        'errorCode' => 'Commodity.NotFound',
                        'errorMessage' => 'The commodity is not found.',
                    ],
                    [
                        'errorCode' => 'Order.CreateFailed',
                        'errorMessage' => 'Failed to create the order.',
                    ],
                    [
                        'errorCode' => 'Instance.IsNotValid',
                        'errorMessage' => 'The instance is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"57540985-3C11-4588-96FD-93413C6282EF\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>57540985-3C11-4588-96FD-93413C6282EF</RequestId>","errorExample":""}]',
            'title' => '修改实例规格',
            'summary' => '调用ModifyHiTSDBInstanceClass修改实例规格。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeHiTSDBInstance' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ts-ufxxxxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '实例状态，ACTIVATION-运行中，CREATING-创建中，NET_CREATING-创建网络链接中，CLASS_CHANGING-实例变配中'."\n"
                                    .' ，LOCKED-已锁定，DELETED-已删除',
                                'type' => 'string',
                                'example' => 'ACTIVATION',
                            ],
                            'VpcId' => [
                                'description' => '专有网络ID',
                                'type' => 'string',
                                'example' => 'vpc-xxxxxxxxxxxxxxxxxxxxx',
                            ],
                            'PaymentType' => [
                                'description' => '付费类型，PREPAY-包年包月；POSTPAY-按量付费',
                                'type' => 'string',
                                'example' => 'PREPAY',
                            ],
                            'VswitchId' => [
                                'description' => '专有网络交换机ID',
                                'type' => 'string',
                                'example' => 'vsw-xxxxxxxxxxxxxxxxxxxxx',
                            ],
                            'CreateTime' => [
                                'description' => '实例创建的时间戳',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1603426323000',
                            ],
                            'MemSize' => [
                                'description' => '数据库内存大小，针对TSDB for InfluxDB®️类型实例',
                                'type' => 'string',
                                'example' => '8',
                            ],
                            'CpuNumber' => [
                                'description' => 'CPU核数',
                                'type' => 'string',
                                'example' => '2',
                            ],
                            'ChargeType' => [
                                'description' => '付费类型，PREPAY-包年包月；POSTPAY-按量付费',
                                'type' => 'string',
                                'example' => 'PREPAY',
                            ],
                            'PublicConnectionString' => [
                                'description' => '实例公网连接串',
                                'type' => 'string',
                                'example' => 'ts-xxxxxxxxxxxxxxxxx.influxdata.rds.aliyuncs.com:3242',
                            ],
                            'NetworkType' => [
                                'description' => '实例网络类型',
                                'type' => 'string',
                                'example' => 'VPC',
                            ],
                            'MaxTimelineLimit' => [
                                'description' => '实例时间线性能， 单位<条>，针对TSDB类型实例',
                                'type' => 'string',
                                'example' => '2400000',
                            ],
                            'DiskCategory' => [
                                'description' => '对于TSDB for InfluxDB®️类型，cloud_efficiency-高效云盘，cloud_ssd-SSD云盘',
                                'type' => 'string',
                                'example' => 'cloud_efficiency',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '8D156621-1FCB-414A-BD29-361C3CA4DD56',
                            ],
                            'InstanceTps' => [
                                'description' => '实例 Tps 性能， 单位<请求/秒>',
                                'type' => 'string',
                                'example' => '960000',
                            ],
                            'ConnectionString' => [
                                'description' => '数据库连接地址',
                                'type' => 'string',
                                'example' => 'ts-xxxxxxxxxxxxxxxxx.hitsdb.tsdb.aliyuncs.com:8242',
                            ],
                            'GmtExpire' => [
                                'description' => '付费类型为包年包月的实例的到期时间，格式为yyyy-MM-dd HH:mm:ss',
                                'type' => 'string',
                                'example' => '2020-12-17 00:00:00',
                            ],
                            'EngineType' => [
                                'description' => '引擎类型，tsdb_tsdb-tsdb类型，tsdb_influxdb-TSDB for InfluxDB®️类型，tsdb1.5-tsdb1.5类型',
                                'type' => 'string',
                                'example' => 'tsdb_tsdb',
                            ],
                            'InstanceClass' => [
                                'description' => '实例规格',
                                'type' => 'string',
                                'example' => 'tsdb.96x.large_lindorm',
                            ],
                            'AutoRenew' => [
                                'description' => '付费类型为包年包月的实例，是否开通自动续费',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'InstanceStorage' => [
                                'description' => '实例存储， 单位 G',
                                'type' => 'string',
                                'example' => '320',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID',
                                'type' => 'string',
                                'example' => 'ts-xxxxxxxxxxxxxxxxx',
                            ],
                            'InstanceDescription' => [
                                'description' => '实例描述',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'RegionId' => [
                                'description' => '区域ID',
                                'type' => 'string',
                                'example' => 'cn-shanghai',
                            ],
                            'GmtCreated' => [
                                'description' => '实例创建时间，格式为yyyy-MM-dd HH:mm:ss',
                                'type' => 'string',
                                'example' => '2020-11-16 16:22:56',
                            ],
                            'InstanceAlias' => [
                                'description' => '实例名称',
                                'type' => 'string',
                                'example' => 'tsdb_test',
                            ],
                            'ExpiredTime' => [
                                'description' => '对于包年包月类型，实例过期的时间戳',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1611417600000',
                            ],
                            'ZoneId' => [
                                'description' => '实例可用区ID',
                                'type' => 'string',
                                'example' => 'cn-shanghai-f',
                            ],
                            'InstanceStatus' => [
                                'description' => '实例状态，ACTIVATION-运行中，CREATING-创建中，NET_CREATING-创建网络链接中，CLASS_CHANGING-实例变配中'."\n"
                                    .' ，LOCKED-已锁定，DELETED-已删除',
                                'type' => 'string',
                                'example' => 'ACTIVATION',
                            ],
                            'Series' => [
                                'description' => 'TSDB for InfluxDB®️类型实例的版本，0-基础版，1-高可用版',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'SecurityIpList' => [
                                'description' => '实例白名单列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Ip' => [
                                            'description' => '实例白名单 IP'."\n",
                                            'type' => 'string',
                                            'example' => '0.0.0.0/0',
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
                        'errorCode' => 'TSDB.Errorcode.ParameterInvaild',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
                413 => [
                    [
                        'errorCode' => 'TSDB.Errorcode.InstanceNotFound',
                        'errorMessage' => 'The instance is not found. Please try again later.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'TSDB.Errorcode.InstanceCreateFailed',
                        'errorMessage' => 'Failed to create the instance.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'TSDB.Errorcode.InstanceCreateRetrying',
                        'errorMessage' => 'The system is trying to create the instance again.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'TSDB.Errorcode.InstanceDeleted',
                        'errorMessage' => 'The instance is already deleted.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"ACTIVATION\\",\\n  \\"VpcId\\": \\"vpc-xxxxxxxxxxxxxxxxxxxxx\\",\\n  \\"PaymentType\\": \\"PREPAY\\",\\n  \\"VswitchId\\": \\"vsw-xxxxxxxxxxxxxxxxxxxxx\\",\\n  \\"CreateTime\\": 1603426323000,\\n  \\"CpuNumber\\": \\"2\\",\\n  \\"MemSize\\": \\"8\\",\\n  \\"ChargeType\\": \\"PREPAY\\",\\n  \\"PublicConnectionString\\": \\"ts-xxxxxxxxxxxxxxxxx.influxdata.rds.aliyuncs.com:3242\\",\\n  \\"NetworkType\\": \\"VPC\\",\\n  \\"MaxTimelineLimit\\": \\"2400000\\",\\n  \\"DiskCategory\\": \\"cloud_efficiency\\",\\n  \\"RequestId\\": \\"8D156621-1FCB-414A-BD29-361C3CA4DD56\\",\\n  \\"InstanceTps\\": \\"960000\\",\\n  \\"ConnectionString\\": \\"ts-xxxxxxxxxxxxxxxxx.hitsdb.tsdb.aliyuncs.com:8242\\",\\n  \\"GmtExpire\\": \\"2020-12-17 00:00:00\\",\\n  \\"EngineType\\": \\"tsdb_tsdb\\",\\n  \\"InstanceClass\\": \\"tsdb.96x.large_lindorm\\",\\n  \\"AutoRenew\\": true,\\n  \\"InstanceStorage\\": \\"320\\",\\n  \\"InstanceId\\": \\"ts-xxxxxxxxxxxxxxxxx\\",\\n  \\"InstanceDescription\\": \\"test\\",\\n  \\"RegionId\\": \\"cn-shanghai\\",\\n  \\"GmtCreated\\": \\"2020-11-16 16:22:56\\",\\n  \\"InstanceAlias\\": \\"tsdb_test\\",\\n  \\"ExpiredTime\\": 1611417600000,\\n  \\"ZoneId\\": \\"cn-shanghai-f\\",\\n  \\"InstanceStatus\\": \\"ACTIVATION\\",\\n  \\"Series\\": 1,\\n  \\"SecurityIpList\\": [\\n    {\\n      \\"Ip\\": \\"0.0.0.0/0\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<AutoRenew>true</AutoRenew>\\n<GmtCreated>2020-11-16 16:22:56</GmtCreated>\\n<CpuNumber>2</CpuNumber>\\n<MemSize>8</MemSize>\\n<GmtExpire>2020-12-17 00:00:00</GmtExpire>\\n<NetworkType>VPC</NetworkType>\\n<InstanceStatus>ACTIVATION</InstanceStatus>\\n<InstanceAlias>tsdb_test</InstanceAlias>\\n<MaxTimelineLimit>2400000</MaxTimelineLimit>\\n<EngineType>tsdb_tsdb</EngineType>\\n<PublicConnectionString>ts-xxxxxxxxxxxxxxxxx.influxdata.rds.aliyuncs.com:3242</PublicConnectionString>\\n<InstanceTps>960000</InstanceTps>\\n<InstanceStorage>320</InstanceStorage>\\n<ZoneId>cn-shanghai-f</ZoneId>\\n<RequestId>8D156621-1FCB-414A-BD29-361C3CA4DD56</RequestId>\\n<InstanceId>ts-xxxxxxxxxxxxxxxxx</InstanceId>\\n<DiskCategory>cloud_efficiency</DiskCategory>\\n<InstanceClass>tsdb.96x.large_lindorm</InstanceClass>\\n<VswitchId>vsw-xxxxxxxxxxxxxxxxxxxxx</VswitchId>\\n<Series>1</Series>\\n<VpcId>vpc-xxxxxxxxxxxxxxxxxxxxx</VpcId>\\n<ChargeType>PREPAY</ChargeType>\\n<SecurityIpList>\\n    <Ip>0.0.0.0/0</Ip>\\n</SecurityIpList>\\n<InstanceDescription>test</InstanceDescription>\\n<RegionId>cn-shanghai</RegionId>\\n<ConnectionString>ts-xxxxxxxxxxxxxxxxx.hitsdb.tsdb.aliyuncs.com:8242</ConnectionString>","errorExample":""}]',
            'title' => '获取实例',
            'summary' => '调用DescribeHiTSDBInstance获取实例详情。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeHiTSDBInstanceList' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'QueryStr',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称关键字，可根据该参数做模糊搜索',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'StatusList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '状态过滤列表，JSON格式，枚举值为InstanceStatus。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["ACTIVATION", "DELETED"]',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'EngineType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '引擎类型，tsdb_tsdb-tsdb类型，tsdb_influxdb-TSDB for InfluxDB®️类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tsdb_tsdb',
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
                                'example' => '0A7153E4-8354-497E-87E5-5D0EBEF5AEB1',
                            ],
                            'PageNumber' => [
                                'description' => '页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'Total' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'InstanceList' => [
                                'description' => '实例列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '实例状态，ACTIVATION-运行中，CREATING-创建中，NET_CREATING-创建网络链接中，CLASS_CHANGING-实例变配中，LOCKED-已锁定，DELETED-已删除',
                                            'type' => 'string',
                                            'example' => 'ACTIVATION',
                                        ],
                                        'VpcId' => [
                                            'description' => '专有网络（VPC）的ID',
                                            'type' => 'string',
                                            'example' => 'vpc-bp1xxxxxxxxxxxxxxxxxx',
                                        ],
                                        'PaymentType' => [
                                            'description' => '付费类型，PREPAY-包年包月；POSTPAY-按量付费',
                                            'type' => 'string',
                                            'example' => 'PREPAY',
                                        ],
                                        'MaxSeriesPerDatabase' => [
                                            'description' => '单个数据库时间线的最大数量',
                                            'type' => 'string',
                                            'example' => '10000',
                                        ],
                                        'EngineType' => [
                                            'description' => '引擎类型，tsdb_tsdb-tsdb类型，tsdb_influxdb-TSDB for InfluxDB®️类型',
                                            'type' => 'string',
                                            'example' => 'tsdb_tsdb',
                                        ],
                                        'VswitchId' => [
                                            'description' => '虚拟交换机的ID',
                                            'type' => 'string',
                                            'example' => 'vsw-bp1xxxxxxxxxxxxxxxxxx',
                                        ],
                                        'InstanceClass' => [
                                            'description' => '实例规格',
                                            'type' => 'string',
                                            'example' => 'tsdb.1x.basic',
                                        ],
                                        'CreateTime' => [
                                            'description' => '实例创建的时间戳',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1603426323000',
                                        ],
                                        'ChargeType' => [
                                            'description' => '付费类型，PREPAY-包年包月；POSTPAY-按量付费',
                                            'type' => 'string',
                                            'example' => 'POSTPAY',
                                        ],
                                        'UserId' => [
                                            'description' => '用户ID',
                                            'type' => 'string',
                                            'example' => '1000000000000000',
                                        ],
                                        'InstanceStorage' => [
                                            'description' => '实例存储， 单位 G',
                                            'type' => 'string',
                                            'example' => '50',
                                        ],
                                        'NetworkType' => [
                                            'description' => '实例网络类型：VPC-专有网络',
                                            'type' => 'string',
                                            'example' => 'VPC',
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例ID',
                                            'type' => 'string',
                                            'example' => 'ts-xxxxxxxxxxxxxxxxx',
                                        ],
                                        'LockMode' => [
                                            'description' => '实例是否被锁定，0-未锁定，1-锁定',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'InstanceDescription' => [
                                            'description' => '实例描述',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'RegionId' => [
                                            'description' => '实例所在地域ID',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'GmtCreated' => [
                                            'description' => '实例创建时间，格式为yyyy-MM-dd HH:mm:ss',
                                            'type' => 'string',
                                            'example' => '2020-11-16 16:22:56',
                                        ],
                                        'InstanceAlias' => [
                                            'description' => '实例名称',
                                            'type' => 'string',
                                            'example' => 'test_tsdb',
                                        ],
                                        'InstanceTps' => [
                                            'description' => '实例 Tps 性能， 单位<请求/秒>',
                                            'type' => 'string',
                                            'example' => '960000',
                                        ],
                                        'ExpiredTime' => [
                                            'description' => '对于包年包月类型，实例过期的时间戳',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1611417600000',
                                        ],
                                        'ZoneId' => [
                                            'description' => '实例可用区ID',
                                            'type' => 'string',
                                            'example' => 'cn-hongkong-b',
                                        ],
                                        'InstanceStatus' => [
                                            'description' => '实例状态， 枚举',
                                            'type' => 'string',
                                            'example' => 'ACTIVATION',
                                        ],
                                        'GmtExpire' => [
                                            'description' => '付费类型为包年包月的实例的到期时间，格式为yyyy-MM-dd HH:mm:ss',
                                            'type' => 'string',
                                            'example' => '2020-12-17 00:00:00',
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
                        'errorCode' => 'TSDB.Errorcode.ParameterInvaild',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0A7153E4-8354-497E-87E5-5D0EBEF5AEB1\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"Total\\": 10,\\n  \\"InstanceList\\": [\\n    {\\n      \\"Status\\": \\"ACTIVATION\\",\\n      \\"VpcId\\": \\"vpc-bp1xxxxxxxxxxxxxxxxxx\\",\\n      \\"PaymentType\\": \\"PREPAY\\",\\n      \\"MaxSeriesPerDatabase\\": \\"10000\\",\\n      \\"EngineType\\": \\"tsdb_tsdb\\",\\n      \\"VswitchId\\": \\"vsw-bp1xxxxxxxxxxxxxxxxxx\\",\\n      \\"InstanceClass\\": \\"tsdb.1x.basic\\",\\n      \\"CreateTime\\": 1603426323000,\\n      \\"ChargeType\\": \\"POSTPAY\\",\\n      \\"UserId\\": \\"1000000000000000\\",\\n      \\"InstanceStorage\\": \\"50\\",\\n      \\"NetworkType\\": \\"VPC\\",\\n      \\"InstanceId\\": \\"ts-xxxxxxxxxxxxxxxxx\\",\\n      \\"LockMode\\": \\"0\\",\\n      \\"InstanceDescription\\": \\"test\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"GmtCreated\\": \\"2020-11-16 16:22:56\\",\\n      \\"InstanceAlias\\": \\"test_tsdb\\",\\n      \\"InstanceTps\\": \\"960000\\",\\n      \\"ExpiredTime\\": 1611417600000,\\n      \\"ZoneId\\": \\"cn-hongkong-b\\",\\n      \\"InstanceStatus\\": \\"ACTIVATION\\",\\n      \\"GmtExpire\\": \\"2020-12-17 00:00:00\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<PageSize>20</PageSize>\\n<RequestId>0A7153E4-8354-497E-87E5-5D0EBEF5AEB1</RequestId>\\n<PageNumber>1</PageNumber>\\n<Total>10</Total>\\n<InstanceList>\\n    <MaxSeriesPerDatabase>10000</MaxSeriesPerDatabase>\\n    <GmtCreated>2020-11-16 16:22:56</GmtCreated>\\n    <GmtExpire>2020-12-17 00:00:00</GmtExpire>\\n    <NetworkType>VPC</NetworkType>\\n    <InstanceStatus>ACTIVATION</InstanceStatus>\\n    <InstanceAlias>test_tsdb</InstanceAlias>\\n    <ExpiredTime>1611417600000</ExpiredTime>\\n    <PaymentType>PREPAY</PaymentType>\\n    <EngineType>tsdb_tsdb</EngineType>\\n    <InstanceTps>960000</InstanceTps>\\n    <Status>ACTIVATION</Status>\\n    <InstanceStorage>50</InstanceStorage>\\n    <ZoneId>cn-hongkong-b</ZoneId>\\n    <InstanceId>ts-xxxxxxxxxxxxxxxxx</InstanceId>\\n    <CreateTime>1603426323000</CreateTime>\\n    <InstanceClass>tsdb.1x.basic</InstanceClass>\\n    <LockMode>0</LockMode>\\n    <VswitchId>vsw-bp1xxxxxxxxxxxxxxxxxx</VswitchId>\\n    <VpcId>vpc-bp1xxxxxxxxxxxxxxxxxx</VpcId>\\n    <ChargeType>POSTPAY</ChargeType>\\n    <UserId>1000000000000000</UserId>\\n    <InstanceDescription>test</InstanceDescription>\\n    <RegionId>cn-hangzhou</RegionId>\\n</InstanceList>","errorExample":""}]',
            'title' => '获取实例列表',
            'summary' => '调用DescribeHiTSDBInstanceList查询数据库获取实例列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RenameHiTSDBInstanceAlias' => [
            'methods' => [
                'post',
                'get',
            ],
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ts-ufxxxxxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'InstanceAlias',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例别名',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vme',
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
                                'example' => '1556DCB0-043A-4444-8BD9-CF4A68E7EE64',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Instance.IsNotAvailable',
                        'errorMessage' => 'The instance is unavailable.',
                    ],
                    [
                        'errorCode' => 'Instance.IsNotValid',
                        'errorMessage' => 'The instance is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1556DCB0-043A-4444-8BD9-CF4A68E7EE64\\"\\n}","errorExample":""},{"type":"xml","example":"<RenameHiTSDBInstanceAliasResponse>\\r\\n    <RequestId>1556DCB0-043A-4444-8BD9-CF4A68E7EE64</RequestId>\\r\\n</RenameHiTSDBInstanceAliasResponse>","errorExample":""}]',
            'title' => '修改实例别名',
            'summary' => '调用RenameHiTSDBInstanceAlias修改实例别名。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RestartHiTSDBInstance' => [
            'methods' => [
                'post',
                'get',
            ],
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ts-ufxxxxxxxxxxxxxx',
                        'docRequired' => true,
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
                                'example' => '1556DCB0-043A-4444-8BD9-CF4A68E7EE64',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Instance.IsNotValid',
                        'errorMessage' => 'The instance is invalid.',
                    ],
                    [
                        'errorCode' => 'Instance.IsNotAvailable',
                        'errorMessage' => 'The instance is unavailable.',
                    ],
                    [
                        'errorCode' => 'Instance.RestartError',
                        'errorMessage' => 'An error occurred while restarting the instance.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1556DCB0-043A-4444-8BD9-CF4A68E7EE64\\"\\n}","errorExample":""},{"type":"xml","example":"<RestartHiTSDBInstanceResponse>\\r\\n    <RequestId>1556DCB0-043A-4444-8BD9-CF4A68E7EE64</RequestId>\\r\\n</RestartHiTSDBInstanceResponse>","errorExample":""}]',
            'title' => '重启数据库实例',
            'summary' => '调用RestartHiTSDBInstance重启实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RenewTSDBInstance' => [
            'methods' => [
                'post',
                'get',
            ],
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '区域ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ts-xxxxxxxxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'PricingCycle',
                    'in' => 'query',
                    'schema' => [
                        'description' => '付费类型为包年包月的实例的购买时长单位，Month-月，Year-年',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Month',
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '购买时长，PricingCycle为Month时，取值范围为\\[1,9\\]，PricingCycle为Year时，取值范围为\\[1,3\\]',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'OrderId' => [
                                'description' => '订单ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100000000000000',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '57540985-3C11-4588-96FD-93413C6282EF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ChargeType.IsNotValid',
                        'errorMessage' => 'The charge type is invalid.',
                    ],
                    [
                        'errorCode' => 'Commodity.NotFound',
                        'errorMessage' => 'The commodity is not found.',
                    ],
                    [
                        'errorCode' => 'Order.CreateFailed',
                        'errorMessage' => 'Failed to create the order.',
                    ],
                    [
                        'errorCode' => 'Instance.IsNotValid',
                        'errorMessage' => 'The instance is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": 100000000000000,\\n  \\"RequestId\\": \\"57540985-3C11-4588-96FD-93413C6282EF\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>57540985-3C11-4588-96FD-93413C6282EF</RequestId>\\n<OrderId>100000000000000</OrderId>","errorExample":""}]',
            'title' => '为包年包月付费类型实例进行续费操作',
            'summary' => '调用RenewTSDBInstance为包年包月付费类型实例进行续费操作。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SwitchHiTSDBInstancePublicNet' => [
            'methods' => [
                'post',
                'get',
            ],
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ts-ufxxxxxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'SwitchAction',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- **1**：开启公网链接'."\n"
                            .'- **0**：关闭公网链接',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
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
                                'example' => 'EC6A17BC-B326-4626-B3BE-932B003DB3A9',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Instance.IsNotAvailable',
                        'errorMessage' => 'The instance is unavailable.',
                    ],
                    [
                        'errorCode' => 'Instance.IsNotValid',
                        'errorMessage' => 'The instance is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'API.Forbidden',
                        'errorMessage' => 'The API operation is forbidden in this environment.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC6A17BC-B326-4626-B3BE-932B003DB3A9\\"\\n}","errorExample":""},{"type":"xml","example":"<SwitchHiTSDBInstancePublicNetResponse>\\r\\n    <RequestId>EC6A17BC-B326-4626-B3BE-932B003DB3A9</RequestId>\\r\\n</SwitchHiTSDBInstancePublicNetResponse>","errorExample":""}]',
            'title' => '切换实例公网链接状态',
            'summary' => '调用SwitchHiTSDBInstancePublicNet切换实例公网链接状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyHiTSDBInstanceSecurityIpList' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ts-ufxxxxxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'SecurityIpList',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IP pattern的列表，JSON格式的字符串。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '[“127.0.0.1”, “192.168.0.1/24”]',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分组名称，只允许包含字母、数字、下划线。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_group',
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
                                'example' => '1556DCB0-043A-4444-8BD9-CF4A68E7EE64',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ModifySecurityIpList.CreateAclGetNull',
                        'errorMessage' => 'Failed to create access control list.',
                    ],
                    [
                        'errorCode' => 'ModifySecurityIpList.QueryIngressFailed',
                        'errorMessage' => 'Failed to query SLB ingress.',
                    ],
                    [
                        'errorCode' => 'ModifySecurityIpList.QueryLoadBalancersFailed',
                        'errorMessage' => 'Failed to query load balancers.',
                    ],
                    [
                        'errorCode' => 'ModifySecurityIpList.LoadBalancerSizeAbnormal',
                        'errorMessage' => 'The number of load balancers is abnormal.',
                    ],
                    [
                        'errorCode' => 'ModifySecurityIpList.AddAclGetNull',
                        'errorMessage' => 'Failed to add access control list.',
                    ],
                    [
                        'errorCode' => 'ModifySecurityIpList.SetLBTcpListenerFailed',
                        'errorMessage' => 'Failed to set load balancer TCP listener attribute.',
                    ],
                    [
                        'errorCode' => 'ModifySecurityIpList.DescribeAclFailed',
                        'errorMessage' => 'Failed to describe access control list.',
                    ],
                    [
                        'errorCode' => 'ModifySecurityIpList.RemoveAclFailed',
                        'errorMessage' => 'Failed to remove access control list.',
                    ],
                    [
                        'errorCode' => 'Instance.IsNotAvailable',
                        'errorMessage' => 'The instance is unavailable.',
                    ],
                    [
                        'errorCode' => 'Instance.IsNotValid',
                        'errorMessage' => 'The instance is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1556DCB0-043A-4444-8BD9-CF4A68E7EE64\\"\\n}","type":"json"}]',
            'title' => 'ModifyHiTSDBInstanceSecurityIpList',
            'summary' => '调用ModifyHiTSDBInstanceSecurityIpList设置实例的IP白名单。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeHiTSDBInstanceSecurityIpList' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ts-xxxxxxxxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分组名称，只允许包含字母、数字、下划线。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_group',
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
                                'example' => 'F2DFDC0B-FE4F-4696-9FD1-2EFDEE8D6C7C',
                            ],
                            'SecurityIpList' => [
                                'description' => '网络白名单列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Ip' => [
                                            'description' => '白名单IP',
                                            'type' => 'string',
                                            'example' => '0.0.0.0/0',
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
                        'errorCode' => 'Instance.IsNotAvailable',
                        'errorMessage' => 'The instance is unavailable.',
                    ],
                    [
                        'errorCode' => 'Instance.IsNotValid',
                        'errorMessage' => 'The instance is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'API.Forbidden',
                        'errorMessage' => 'The API operation is forbidden in this environment.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F2DFDC0B-FE4F-4696-9FD1-2EFDEE8D6C7C\\",\\n  \\"SecurityIpList\\": [\\n    {\\n      \\"Ip\\": \\"0.0.0.0/0\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>F2DFDC0B-FE4F-4696-9FD1-2EFDEE8D6C7C</RequestId>\\n<SecurityIpList>\\n    <Ip>0.0.0.0/0</Ip>\\n</SecurityIpList>","errorExample":""}]',
            'title' => 'DescribeHiTSDBInstanceSecurityIpList',
            'summary' => '调用DescribeHiTSDBInstanceSecurityIpList获取实例白名单列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'hitsdb.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'hitsdb.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'hitsdb.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'hitsdb.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'hitsdb.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'hitsdb.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'hitsdb.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'hitsdb.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'hitsdb.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'hitsdb.cn-shanghai-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'hitsdb.cn-shenzhen-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'hitsdb.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'hitsdb.cn-hangzhou-finance.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote-nebula-1',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'hitsdb.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'hitsdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'hitsdb.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'hitsdb.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'hitsdb.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'hitsdb.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'hitsdb.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'hitsdb.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'hitsdb.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'hitsdb.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'hitsdb.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'hitsdb.cn-north-2-gov-1.aliyuncs.com',
        ],
    ],
];
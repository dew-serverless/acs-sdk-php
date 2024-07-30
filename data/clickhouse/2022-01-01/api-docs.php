<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'clickhouse',
        'version' => '2022-01-01',
    ],
    'directories' => [
        [
            'id' => 166807,
            'title' => '地域管理',
            'type' => 'directory',
            'children' => [
                'DescribeRegions',
            ],
        ],
        [
            'id' => 166827,
            'title' => '集群管理',
            'type' => 'directory',
            'children' => [
                'CheckCreateCluster',
                'CreateCluster',
                'ListClusters',
                'DescribeCluster',
                'DescribeClusterStatusSet',
                'ModifyClusterDescription',
                'DeleteCluster',
                'UpgradeCluster',
            ],
        ],
        [
            'id' => 166809,
            'title' => '计算组管理',
            'type' => 'directory',
            'children' => [
                'CheckCreateVirtualWareHouse',
                'CreateVirtualWareHouse',
                'ListVirtualWareHouses',
                'ListVirtualWareHouseConfigs',
                'DescribeVirtualWareHouse',
                'DescribeVirtualWareHouseEndpointInfo',
                'DescribeVirtualWareHouseClassSet',
                'DescribeVirtualWareHouseStatusSet',
                'CheckModifyVirtualWareHouseResource',
                'ModifyVirtualWareHouseResource',
                'RestartVirtualWareHouse',
                'ModifyVirtualWareHouseDescription',
                'ModifyVirtualWareHouseConfig',
                'AllocateVirtualWareHousePublicConnection',
                'ReleaseVirtualWareHousePublicConnection',
                'CheckDeleteVirtualWareHouse',
                'DeleteVirtualWareHouse',
                'DescribeSlowQuery',
                'DescribeSlowQueryTrend',
                'DescribeRunningQuery',
                'KillQuery',
                'GetDistributedTablesBufferSize',
            ],
        ],
        [
            'id' => 166838,
            'title' => '账号管理',
            'type' => 'directory',
            'children' => [
                'CreateAccount',
                'ListAccounts',
                'DescribeAccount',
                'ResetAccountPassword',
                'ModifyAccountDescription',
                'ModifyAccountPrivilege',
                'DeleteAccount',
            ],
        ],
        [
            'id' => 171880,
            'title' => '安全管理',
            'type' => 'directory',
            'children' => [
                'DescribeClusterSecurityInfo',
                'PatchClusterSecurityIPGroup',
                'UpsertClusterSecurityIPGroup',
                'DeleteClusterSecurityIPGroup',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'DescribeRegions' => [
            'summary' => '调用DescribeRegions接口查询云数据库ClickHouse云原生版的地域和可用区信息。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '可用区ID',
                        'description' => '可用区ID。'."\n"
                            .'>如果不填写，默认查询所选地域下的所有可用区。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou-h',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'>如果不填写，默认查询所有支持的地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<List<RegionModel>>',
                        'description' => 'PlainResponse<List<RegionModel>>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '地域和可用区。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回数据。',
                                    'type' => 'object',
                                    'properties' => [
                                        'RegionId' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'Zones' => [
                                            'description' => '可用区列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '可用区。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'ZoneId' => [
                                                        'description' => '可用区ID。',
                                                        'type' => 'string',
                                                        'example' => 'cn-hangzhou-h',
                                                    ],
                                                    'VpcEnabled' => [
                                                        'description' => '是否支持VPC，取值说明：'."\n"
                                                            ."\n"
                                                            .'- **true**：支持VPC。'."\n"
                                                            .'- **false**：不支持VPC。',
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"Zones\\": [\\n        {\\n          \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n          \\"VpcEnabled\\": true\\n        }\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <Data>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <Zones>\\n            <ZoneId>cn-hangzhou-h</ZoneId>\\n            <VpcEnabled>true</VpcEnabled>\\n        </Zones>\\n    </Data>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n</DescribeRegionsResponse>","errorExample":""}]',
            'title' => '查看可选的地域和可用区',
        ],
        'CheckCreateCluster' => [
            'summary' => '调用CheckCreateCluster接口对创建云数据库ClickHouse云原生版集群进行预检查，预判创建请求是否成功。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PayType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '付费类型 Prepaid | Postpaid',
                        'description' => '付费类型，取值说明：'."\n"
                            .'- **Postpaid**：按量付费。'."\n"
                            .'- **Prepaid**：预付费（包年包月）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Postpaid',
                    ],
                ],
                [
                    'name' => 'AutoRenew',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否自动续费',
                        'description' => '仅当付费类型为Prepaid时，该参数才生效且为可选参数。'."\n"
                            ."\n"
                            .'预付费集群是否自动续费，取值说明：'."\n"
                            ."\n"
                            .'- **true**：自动续费。'."\n"
                            .'- **false**：不自动续费，默认值。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'title' => '预付费周期 Year | Month',
                        'description' => '仅当付费类型为Prepaid时，该参数才生效且为必填参数。'."\n"
                            ."\n"
                            .'预付费集群为包年或包月类型，取值说明：				'."\n"
                            .'- **Year**：包年。'."\n"
                            .'- **Month**：包月。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Month',
                    ],
                ],
                [
                    'name' => 'UsedTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '预付费时长',
                        'description' => '仅当付费类型为Prepaid时，该参数才生效且为必填参数。'."\n"
                            ."\n"
                            .'预付费集群的购买时长。'."\n"
                            .'- 当Period为Year时，取值范围：1~3（整数）。'."\n"
                            .'- 当Period为Month时，取值范围：1~9（整数）。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'VPC ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc-uf6xmupdn7v6ui9f7****',
                    ],
                ],
                [
                    'name' => 'VswitchId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '默认交换机ID',
                        'description' => '交换机ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vsw-uf632qye9oqt4x4sr5****',
                    ],
                ],
                [
                    'name' => 'DBClusterDescription',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例描述信息',
                        'description' => '集群描述。'."\n"
                            .'>- 不能以http://或https://开头。'."\n"
                            .'- 长度为2~256个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseClass',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组规格码',
                        'description' => '计算组的规格码。您可以通过调用[DescribeVirtualWareHouseClassSet](~~417505~~)接口查询规格码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'n1.xlarge',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseCacheStorage',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组本地缓存空间 GiB',
                        'description' => '计算组的缓存大小，单位：GB。'."\n"
                            ."\n"
                            .'取值范围：200~32000。'."\n"
                            .'>步长为100 GB。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '200',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseDescription',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组描述信息',
                        'description' => '计算组描述。'."\n"
                            .'>- 不能以http://或https://开头。'."\n"
                            .'- 长度为2~256个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '可用区ID',
                        'description' => '可用区ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询可用区ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou-h',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<CommonOrderCheckResponse>',
                        'description' => 'PlainResponse<CommonOrderCheckResponse>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '预检查的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'ExpectedDBClusterStatus' => [
                                        'title' => '预期变更后的实例状态',
                                        'description' => '创建时集群的状态，预期结果为Creating：创建中。',
                                        'type' => 'string',
                                        'example' => 'Creating',
                                    ],
                                    'ExpectedTargetVirtualWareHouseStatus' => [
                                        'title' => '预期变更后的计算组状态',
                                        'description' => '创建时计算组的状态，预期结果为Creating：创建中。',
                                        'type' => 'string',
                                        'example' => 'Creating',
                                    ],
                                    'ExpectedOrderFinishSeconds' => [
                                        'title' => '预期变更完成需要的时间 秒',
                                        'description' => '创建云原生版集群所需的时间，单位：秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '60',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9A23C87D-87DF-4DA0-A50E-CB13F4F7923D',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'OperationDenied.CloudClickHouseAlreadyOffline',
                        'errorMessage' => 'The operation is not permitted due to product cloud_clickhouse has been already offline.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": {\\n    \\"ExpectedDBClusterStatus\\": \\"Creating\\",\\n    \\"ExpectedTargetVirtualWareHouseStatus\\": \\"Creating\\",\\n    \\"ExpectedOrderFinishSeconds\\": 60\\n  },\\n  \\"RequestId\\": \\"9A23C87D-87DF-4DA0-A50E-CB13F4F7923D\\"\\n}","errorExample":""},{"type":"xml","example":"<CheckCreateClusterResponse>\\n    <Data>\\n        <ExpectedDBClusterStatus>Creating</ExpectedDBClusterStatus>\\n        <ExpectedTargetVirtualWareHouseStatus>Creating</ExpectedTargetVirtualWareHouseStatus>\\n        <ExpectedOrderFinishSeconds>60</ExpectedOrderFinishSeconds>\\n    </Data>\\n    <RequestId>9A23C87D-87DF-4DA0-A50E-CB13F4F7923D</RequestId>\\n</CheckCreateClusterResponse>","errorExample":""}]',
            'title' => '对创建集群进行预检查',
        ],
        'CreateCluster' => [
            'summary' => '调用CreateCluster接口创建一个云数据库ClickHouse云原生版集群。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'PayType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '付费类型 Prepaid | Postpaid',
                        'description' => '付费类型，取值说明：'."\n"
                            .'- **Postpaid**：按量付费。'."\n"
                            .'- **Prepaid**：预付费（包年包月）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Postpaid',
                    ],
                ],
                [
                    'name' => 'AutoRenew',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否自动续费',
                        'description' => '仅当付费类型为Prepaid时，该参数才生效且为可选参数。'."\n"
                            ."\n"
                            .'是否自动续费，取值说明：'."\n"
                            ."\n"
                            .'- **true**：自动续费。'."\n"
                            .'- **false**：不自动续费，默认值。'."\n",
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'title' => '预付费周期 Year | Month',
                        'description' => '仅当付费类型为Prepaid时，该参数才生效且为必填参数。'."\n"
                            ."\n"
                            .'预付费集群为包年或包月类型，取值说明：				'."\n"
                            .'- **Year**：包年。'."\n"
                            .'- **Month**：包月。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Month',
                    ],
                ],
                [
                    'name' => 'UsedTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '预付费时长',
                        'description' => '仅当付费类型为Prepaid时，该参数才生效且为必填参数。'."\n"
                            ."\n"
                            .'预付费集群的购买时长。'."\n"
                            .'- 当Period为Year时，取值范围：1~3（整数）。'."\n"
                            .'- 当Period为Month时，取值范围：1~9（整数）。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'VPC ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc-uf6xmupdn7v6ui9f****',
                    ],
                ],
                [
                    'name' => 'VswitchId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '默认交换机ID',
                        'description' => '交换机ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vsw-uf632qye9oqt4x4sr****',
                    ],
                ],
                [
                    'name' => 'DBClusterDescription',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例描述信息',
                        'description' => '集群描述。'."\n"
                            .'>- 不能以http://或https://开头。'."\n"
                            .'- 长度为2~256个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseClass',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组规格码',
                        'description' => '计算组的规格码。您可以通过调用[DescribeVirtualWareHouseClassSet](~~417505~~)接口查询规格码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'n1.xlarge',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseCacheStorage',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组本地缓存空间 GiB',
                        'description' => '计算组的缓存大小，单位：GB。'."\n"
                            ."\n"
                            .'取值范围：200~32000。'."\n"
                            .'>步长为100 GB。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '400',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseDescription',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组描述信息',
                        'description' => '计算组描述。'."\n"
                            .'>- 不能以http://或https://开头。'."\n"
                            .'- 长度为2~256个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '可用区ID',
                        'description' => '可用区ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询可用区ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou-h',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<CreateClusterResponse>',
                        'description' => 'PlainResponse<CreateClusterResponse>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DBClusterId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'cc-bp123bm6vy801****',
                                    ],
                                    'VirtualWareHouseId' => [
                                        'description' => '计算组ID。',
                                        'type' => 'string',
                                        'example' => 'vw-uf6a499c0m3w5****',
                                    ],
                                    'OrderId' => [
                                        'description' => '订单ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '21154955706****',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'OperationDenied.CloudClickHouseAlreadyOffline',
                        'errorMessage' => 'The operation is not permitted due to product cloud_clickhouse has been already offline.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": {\\n    \\"DBClusterId\\": \\"cc-bp123bm6vy801****\\",\\n    \\"VirtualWareHouseId\\": \\"vw-uf6a499c0m3w5****\\",\\n    \\"OrderId\\": 0\\n  },\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateClusterResponse>\\n<Data>\\n<DBClusterId>cc-bp123bm6vy801****</DBClusterId>\\n<VirtualWareHouseId>vw-uf6a499c0m3w5****</VirtualWareHouseId>\\n<OrderId>21154955706****</OrderId>\\n</Data>\\n<RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n</CreateClusterResponse>","errorExample":""}]',
            'title' => '创建集群',
        ],
        'ListClusters' => [
            'summary' => '调用ListClusters接口查看指定地域的云数据库ClickHouse云原生版集群信息。',
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指定实例ID子串',
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-bp108z124a8o7****',
                    ],
                ],
                [
                    'name' => 'DBClusterStatus',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指定实例状态',
                        'description' => '集群的状态，取值说明：'."\n"
                            ."\n"
                            .'- **OrderPreparing**：订单确认中。'."\n"
                            .'- **Creating**：创建中。'."\n"
                            .'- **Running**：运行中。'."\n"
                            .'- **ResourceChanging**：资源变配中。'."\n"
                            .'- **ResourceChangingInReadonly**：资源变配中（实例写入锁定）。'."\n"
                            .'- **Deleting**：删除中。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Running',
                    ],
                ],
                [
                    'name' => 'DBClusterDescription',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指定实例描述子串',
                        'description' => '集群描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页码 从1开始 默认值1',
                        'description' => '页数。',
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
                        'title' => '分页大小 默认值30',
                        'description' => '每页记录数，取值：'."\n"
                            ."\n"
                            .'- **30**（默认值）'."\n"
                            .'- **50**'."\n"
                            .'- **100**',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PaginationResponse<List<ClusterModel>>',
                        'description' => 'PaginationResponse<List<ClusterModel>>',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageNumber' => [
                                'description' => '页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页记录数，取值：'."\n"
                                    .'- **30**（默认值）'."\n"
                                    .'- **50**'."\n"
                                    .'- **100**'."\n",
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'Data' => [
                                'description' => '集群列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '集群。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DBClusterId' => [
                                            'description' => '集群ID。',
                                            'type' => 'string',
                                            'example' => 'cc-bp108z124a8o7****',
                                        ],
                                        'DBClusterDescription' => [
                                            'title' => '实例描述信息',
                                            'description' => '集群描述。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'EngineVersion' => [
                                            'title' => '内核版本',
                                            'description' => '集群的内核版本号，固定为**21.8**。',
                                            'type' => 'string',
                                            'example' => '21.8',
                                        ],
                                        'AliUid' => [
                                            'title' => '实例所属账户Uid',
                                            'description' => '阿里云账号ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '140692647406****',
                                        ],
                                        'RegionId' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'VpcId' => [
                                            'description' => 'VPC ID。',
                                            'type' => 'string',
                                            'example' => 'vpc-2zedznmtm8j7fksbc****',
                                        ],
                                        'ZoneId' => [
                                            'title' => '默认可用区',
                                            'description' => '可用区ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-h',
                                        ],
                                        'VswitchId' => [
                                            'title' => '默认交换机ID',
                                            'description' => '交换机ID。',
                                            'type' => 'string',
                                            'example' => 'vsw-bp1tg609m5j85jejq****',
                                        ],
                                        'PayType' => [
                                            'title' => '付费类型',
                                            'description' => '付费类型，取值说明：'."\n"
                                                .'- **Postpaid**：按量付费。'."\n"
                                                .'- **Prepaid**：预付费（包年包月）。',
                                            'type' => 'string',
                                            'example' => 'Postpaid',
                                        ],
                                        'CommodityCode' => [
                                            'title' => '商品Code',
                                            'description' => '售卖商品Code。',
                                            'type' => 'string',
                                            'example' => 'clickhouse_go_public_cn',
                                        ],
                                        'CreateTime' => [
                                            'title' => '实例创建时间 UTC时间',
                                            'description' => '集群的创建时间，格式：yyyy-MM-ddTHH:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2022-03-18T08:14:48Z',
                                        ],
                                        'ExpireTime' => [
                                            'title' => '实例到期时间 UTC时间',
                                            'description' => '集群的到期时间，格式：yyyy-MM-ddTHH:mm:ssZ。'."\n"
                                                .'>按量付费集群无到期时间，返回值为空。',
                                            'type' => 'string',
                                            'example' => '2022-04-17T08:14:48Z',
                                        ],
                                        'LockMode' => [
                                            'title' => '实例锁定状态 Unlock:正常 | ManualLock:手动锁定 | LockByExpiration:过期锁定',
                                            'description' => '集群的锁定模式，取值说明：'."\n"
                                                .'- **Unlock**：正常。'."\n"
                                                .'- **ManualLock**：手动触发锁定。'."\n"
                                                .'- **LockByExpiration**：集群过期自动锁定。 '."\n"
                                                .'- **LockByRestoration**：集群回滚前的自动锁定。'."\n"
                                                .'- **LockByDiskQuota**：集群空间满自动锁定。',
                                            'type' => 'string',
                                            'example' => 'Unlock',
                                        ],
                                        'LockReason' => [
                                            'title' => '实例锁定原因',
                                            'description' => '锁定原因。'."\n"
                                                .'>锁定模式为Unlock时，返回值为空。',
                                            'type' => 'string',
                                            'example' => 'DISK_FULL',
                                        ],
                                        'DBClusterStatus' => [
                                            'title' => '实例状态 详见describeClusterStatusSet接口',
                                            'description' => '集群的状态，取值说明：'."\n"
                                                ."\n"
                                                .'- **OrderPreparing**：订单确认中。'."\n"
                                                .'- **Creating**：创建中。'."\n"
                                                .'- **Running**：运行中。'."\n"
                                                .'- **ResourceChanging**：资源变配中。'."\n"
                                                .'- **ResourceChangingInReadonly**：资源变配中（实例写入锁定）。'."\n"
                                                .'- **Deleting**：删除中。',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'ResourceCpuCores' => [
                                            'title' => '实例总CPU资源 cores',
                                            'description' => '集群的CPU规格，单位：核。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '8',
                                        ],
                                        'ResourceMemoryGiB' => [
                                            'title' => '实例总内存资源 GiB',
                                            'description' => '集群的内存规格，单位：GB。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '32',
                                        ],
                                        'CacheStorageType' => [
                                            'title' => '实例本地缓存类型',
                                            'description' => '集群的缓存类型。',
                                            'type' => 'string',
                                            'example' => 'CloudESSD',
                                        ],
                                        'CacheStorageSizeGiB' => [
                                            'title' => '实例总本地缓存空间 GiB',
                                            'description' => '集群的缓存空间，单位：GB。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '200',
                                        ],
                                        'ObjectStoreSizeGiB' => [
                                            'title' => '实例总对象存储空间 GiB',
                                            'description' => '集群的存储用量，单位：GB。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'VirtualWareHouses' => [
                                            'title' => '计算组列表',
                                            'description' => '计算组列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '计算组。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'VirtualWareHouseId' => [
                                                        'description' => '计算组ID。',
                                                        'type' => 'string',
                                                        'example' => 'vw-uf6a499c0m3w5****',
                                                    ],
                                                    'VirtualWareHouseDescription' => [
                                                        'title' => '计算组描述信息',
                                                        'description' => '计算组描述。',
                                                        'type' => 'string',
                                                        'example' => 'test',
                                                    ],
                                                    'VirtualWareHouseStatus' => [
                                                        'title' => '计算组状态 详见describeVirtualWareHouseStatusSet接口',
                                                        'description' => '计算组的状态，取值说明：'."\n"
                                                            ."\n"
                                                            .'- **Creating**：创建中。'."\n"
                                                            .'- **Running**：运行中。'."\n"
                                                            .'- **CreatingPublicSLB**：创建公网链接中。'."\n"
                                                            .'- **DeletingPublicSLB**：释放公网链接中。'."\n"
                                                            .'- **ResourceChanging**：资源变配中。'."\n"
                                                            .'- **ResourceChangingInReadonly**：资源变配中（计算组写入锁定）。'."\n"
                                                            .'- **Deleting**：删除中。',
                                                        'type' => 'string',
                                                        'example' => 'Running',
                                                    ],
                                                    'ZoneId' => [
                                                        'title' => '可用区',
                                                        'description' => '可用区ID。',
                                                        'type' => 'string',
                                                        'example' => 'cn-hangzhou-h',
                                                    ],
                                                    'VswitchId' => [
                                                        'title' => '交换机ID',
                                                        'description' => '交换机ID。',
                                                        'type' => 'string',
                                                        'example' => 'vsw-bp1tg609m5j85jejq****',
                                                    ],
                                                    'VirtualWareHouseClass' => [
                                                        'title' => '计算组规格码',
                                                        'description' => '计算组的规格码。',
                                                        'type' => 'string',
                                                        'example' => 'n1.xlarge',
                                                    ],
                                                    'VirtualWareHouseCacheStorage' => [
                                                        'title' => '计算组本地缓存空间GiB',
                                                        'description' => '计算组的缓存空间，单位：GB。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '200',
                                                    ],
                                                    'Ports' => [
                                                        'title' => '端口信息 英文逗号分隔',
                                                        'description' => '计算组的端口号。',
                                                        'type' => 'string',
                                                        'example' => 'tcp:9000,http:8123,mysql:9004',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DDB109DC-E37D-5475-8D49-47542C57BD38',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"Data\\": [\\n    {\\n      \\"DBClusterId\\": \\"cc-bp108z124a8o7****\\",\\n      \\"DBClusterDescription\\": \\"test\\",\\n      \\"EngineVersion\\": \\"21.8\\",\\n      \\"AliUid\\": 0,\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"VpcId\\": \\"vpc-2zedznmtm8j7fksbc****\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n      \\"VswitchId\\": \\"vsw-bp1tg609m5j85jejq****\\",\\n      \\"PayType\\": \\"Postpaid\\",\\n      \\"CommodityCode\\": \\"clickhouse_go_public_cn\\",\\n      \\"CreateTime\\": \\"2022-03-18T08:14:48Z\\",\\n      \\"ExpireTime\\": \\"2022-04-17T08:14:48Z\\",\\n      \\"LockMode\\": \\"Unlock\\",\\n      \\"LockReason\\": \\"DISK_FULL\\",\\n      \\"DBClusterStatus\\": \\"Running\\",\\n      \\"ResourceCpuCores\\": 8,\\n      \\"ResourceMemoryGiB\\": 32,\\n      \\"CacheStorageType\\": \\"CloudESSD\\",\\n      \\"CacheStorageSizeGiB\\": 200,\\n      \\"ObjectStoreSizeGiB\\": 0,\\n      \\"VirtualWareHouses\\": [\\n        {\\n          \\"VirtualWareHouseId\\": \\"vw-uf6a499c0m3w5****\\",\\n          \\"VirtualWareHouseDescription\\": \\"test\\",\\n          \\"VirtualWareHouseStatus\\": \\"Running\\",\\n          \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n          \\"VswitchId\\": \\"vsw-bp1tg609m5j85jejq****\\",\\n          \\"VirtualWareHouseClass\\": \\"n1.xlarge\\",\\n          \\"VirtualWareHouseCacheStorage\\": 200,\\n          \\"Ports\\": \\"tcp:9000,http:8123,mysql:9004\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"DDB109DC-E37D-5475-8D49-47542C57BD38\\"\\n}","errorExample":""},{"type":"xml","example":"<ListClustersResponse>\\n    <TotalCount>1</TotalCount>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <Data>\\n        <DBClusterId>cc-bp108z124a8o7****</DBClusterId>\\n        <DBClusterDescription>test</DBClusterDescription>\\n        <EngineVersion>21.8</EngineVersion>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <VpcId>vpc-2zedznmtm8j7fksbc****</VpcId>\\n        <ZoneId>cn-hangzhou-h</ZoneId>\\n        <VswitchId>vsw-bp1tg609m5j85jejq****</VswitchId>\\n        <PayType>Postpaid</PayType>\\n        <CommodityCode>clickhouse_go_public_cn</CommodityCode>\\n        <CreateTime>2022-03-18T08:14:48Z</CreateTime>\\n        <ExpireTime>2022-04-17T08:14:48Z</ExpireTime>\\n        <LockMode>Unlock</LockMode>\\n        <LockReason>DISK_FULL</LockReason>\\n        <DBClusterStatus>Running</DBClusterStatus>\\n        <ResourceCpuCores>8</ResourceCpuCores>\\n        <ResourceMemoryGiB>32</ResourceMemoryGiB>\\n        <CacheStorageType>CloudESSD</CacheStorageType>\\n        <CacheStorageSizeGiB>200</CacheStorageSizeGiB>\\n        <ObjectStoreSizeGiB>0</ObjectStoreSizeGiB>\\n        <VirtualWareHouses>\\n            <VirtualWareHouseId>vw-uf6a499c0m3w5****</VirtualWareHouseId>\\n            <VirtualWareHouseDescription>test</VirtualWareHouseDescription>\\n            <VirtualWareHouseStatus>Running</VirtualWareHouseStatus>\\n            <ZoneId>cn-hangzhou-h</ZoneId>\\n            <VswitchId>vsw-bp1tg609m5j85jejq****</VswitchId>\\n            <VirtualWareHouseClass>n1.xlarge</VirtualWareHouseClass>\\n            <VirtualWareHouseCacheStorage>200</VirtualWareHouseCacheStorage>\\n            <Ports>tcp:9000,http:8123,mysql:9004</Ports>\\n        </VirtualWareHouses>\\n    </Data>\\n    <RequestId>DDB109DC-E37D-5475-8D49-47542C57BD38</RequestId>\\n</ListClustersResponse>","errorExample":""}]',
            'title' => '查看指定地域集群信息',
        ],
        'DescribeCluster' => [
            'summary' => '调用DescribeCluster接口查看云数据库ClickHouse云原生版集群的信息。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-uf6a499c0m3w5****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<ClusterModel>',
                        'description' => 'PlainResponse<ClusterModel>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DBClusterId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'cc-uf6a499c0m3w5****',
                                    ],
                                    'DBClusterDescription' => [
                                        'title' => '实例描述信息',
                                        'description' => '集群描述。',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'EngineVersion' => [
                                        'title' => '内核版本',
                                        'description' => '集群的内核版本号，固定为21.8。',
                                        'type' => 'string',
                                        'example' => '21.8',
                                    ],
                                    'AliUid' => [
                                        'title' => '实例所属账户Uid',
                                        'description' => '阿里云账号ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '140692647406****',
                                    ],
                                    'RegionId' => [
                                        'description' => '地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'VpcId' => [
                                        'description' => 'VPC ID。',
                                        'type' => 'string',
                                        'example' => 'vpc-wz9duj8xd6r1gzhsg*****',
                                    ],
                                    'ZoneId' => [
                                        'title' => '默认可用区',
                                        'description' => '可用区ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou-h',
                                    ],
                                    'VswitchId' => [
                                        'title' => '默认交换机ID',
                                        'description' => '交换机ID。',
                                        'type' => 'string',
                                        'example' => 'vsw-2vcmrf8c878scsv43****',
                                    ],
                                    'PayType' => [
                                        'title' => '付费类型',
                                        'description' => '付费类型，取值说明：'."\n"
                                            .'- **Postpaid**：按量付费。'."\n"
                                            .'- **Prepaid**：预付费（包年包月）。',
                                        'type' => 'string',
                                        'example' => 'Postpaid',
                                    ],
                                    'CommodityCode' => [
                                        'title' => '商品Code',
                                        'description' => '售卖商品Code。',
                                        'type' => 'string',
                                        'example' => 'clickhouse_go_public_cn',
                                    ],
                                    'CreateTime' => [
                                        'title' => '实例创建时间 UTC时间',
                                        'description' => '集群的创建时间，格式：yyyy-MM-ddTHH:mm:ssZ。',
                                        'type' => 'string',
                                        'example' => '2022-03-18T08:14:48Z',
                                    ],
                                    'ExpireTime' => [
                                        'title' => '实例到期时间 UTC时间',
                                        'description' => '集群的到期时间，格式：yyyy-MM-ddTHH:mm:ssZ。'."\n"
                                            .'>按量付费集群无到期时间，返回值为空。',
                                        'type' => 'string',
                                        'example' => '2022-04-17T08:14:48Z',
                                    ],
                                    'LockMode' => [
                                        'title' => '实例锁定状态 Unlock:正常 | ManualLock:手动锁定 | LockByExpiration:过期锁定',
                                        'description' => '集群的锁定模式，取值说明：'."\n"
                                            .'- **Unlock**：正常。'."\n"
                                            .'- **ManualLock**：手动触发锁定。'."\n"
                                            .'- **LockByExpiration**：集群过期自动锁定。 '."\n"
                                            .'- **LockByRestoration**：集群回滚前的自动锁定。'."\n"
                                            .'- **LockByDiskQuota**：集群空间满自动锁定。',
                                        'type' => 'string',
                                        'example' => 'Unlock',
                                    ],
                                    'LockReason' => [
                                        'title' => '实例锁定原因',
                                        'description' => '锁定原因。'."\n"
                                            .'>锁定模式为Unlock时，返回值为空。',
                                        'type' => 'string',
                                        'example' => 'DISK_FULL',
                                    ],
                                    'DBClusterStatus' => [
                                        'title' => '实例状态 详见describeClusterStatusSet接口',
                                        'description' => '集群的状态，取值说明：'."\n"
                                            ."\n"
                                            .'- **OrderPreparing**：订单确认中。'."\n"
                                            .'- **Creating**：创建中。'."\n"
                                            .'- **Running**：运行中。'."\n"
                                            .'- **ResourceChanging**：资源变配中。'."\n"
                                            .'- **ResourceChangingInReadonly**：资源变配中（实例写入锁定）。'."\n"
                                            .'- **Deleting**：删除中。',
                                        'type' => 'string',
                                        'example' => 'Running',
                                    ],
                                    'ResourceCpuCores' => [
                                        'title' => '实例总CPU资源 cores',
                                        'description' => '集群的CPU规格，单位：核。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '8',
                                    ],
                                    'ResourceMemoryGiB' => [
                                        'title' => '实例总内存资源 GiB',
                                        'description' => '集群的内存规格，单位：GB。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '32',
                                    ],
                                    'CacheStorageType' => [
                                        'title' => '实例本地缓存类型',
                                        'description' => '集群的缓存类型。',
                                        'type' => 'string',
                                        'example' => 'CloudESSD',
                                    ],
                                    'CacheStorageSizeGiB' => [
                                        'title' => '实例总本地缓存空间 GiB',
                                        'description' => '集群的缓存空间，单位：GB。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '200',
                                    ],
                                    'ObjectStoreSizeGiB' => [
                                        'title' => '实例总对象存储空间 GiB',
                                        'description' => '集群的存储用量，单位：GB。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'VirtualWareHouses' => [
                                        'title' => '计算组列表',
                                        'description' => '计算组列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '计算组。',
                                            'type' => 'object',
                                            'properties' => [
                                                'VirtualWareHouseId' => [
                                                    'description' => '计算组ID。',
                                                    'type' => 'string',
                                                    'example' => 'vw-bp1w2728d535t****',
                                                ],
                                                'VirtualWareHouseDescription' => [
                                                    'title' => '计算组描述信息',
                                                    'description' => '计算组描述。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'VirtualWareHouseStatus' => [
                                                    'title' => '计算组状态 详见describeVirtualWareHouseStatusSet接口',
                                                    'description' => '计算组状态，取值说明：'."\n"
                                                        ."\n"
                                                        .'- **Creating**：创建中。'."\n"
                                                        .'- **Running**：运行中。'."\n"
                                                        .'- **CreatingPublicSLB**：创建公网链接中。'."\n"
                                                        .'- **DeletingPublicSLB**：释放公网链接中。'."\n"
                                                        .'- **ResourceChanging**：资源变配中。'."\n"
                                                        .'- **ResourceChangingInReadonly**：资源变配中（计算组写入锁定）。'."\n"
                                                        .'- **Deleting**：删除中。',
                                                    'type' => 'string',
                                                    'example' => 'Running',
                                                ],
                                                'ZoneId' => [
                                                    'title' => '可用区',
                                                    'description' => '可用区ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou-h',
                                                ],
                                                'VswitchId' => [
                                                    'title' => '交换机ID',
                                                    'description' => '交换机ID。',
                                                    'type' => 'string',
                                                    'example' => 'vsw-2vcmrf8c878scsv43****',
                                                ],
                                                'VirtualWareHouseClass' => [
                                                    'title' => '计算组规格码',
                                                    'description' => '计算组的规格码。',
                                                    'type' => 'string',
                                                    'example' => 'n1.xlarge',
                                                ],
                                                'VirtualWareHouseCacheStorage' => [
                                                    'title' => '计算组本地缓存空间GiB',
                                                    'description' => '计算组的缓存空间，单位：GB。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '200',
                                                ],
                                                'Ports' => [
                                                    'title' => '端口信息 英文逗号分隔',
                                                    'description' => '计算组的端口号。',
                                                    'type' => 'string',
                                                    'example' => 'tcp:9000,http:8123,mysql:9004',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9140518B-F330-5364-82FE-EC7298816EDF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": {\\n    \\"DBClusterId\\": \\"cc-uf6a499c0m3w5****\\",\\n    \\"DBClusterDescription\\": \\"test\\",\\n    \\"EngineVersion\\": \\"21.8\\",\\n    \\"AliUid\\": 0,\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"VpcId\\": \\"vpc-wz9duj8xd6r1gzhsg*****\\",\\n    \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n    \\"VswitchId\\": \\"vsw-2vcmrf8c878scsv43****\\",\\n    \\"PayType\\": \\"Postpaid\\",\\n    \\"CommodityCode\\": \\"clickhouse_go_public_cn\\",\\n    \\"CreateTime\\": \\"2022-03-18T08:14:48Z\\",\\n    \\"ExpireTime\\": \\"2022-04-17T08:14:48Z\\",\\n    \\"LockMode\\": \\"Unlock\\",\\n    \\"LockReason\\": \\"DISK_FULL\\",\\n    \\"DBClusterStatus\\": \\"Running\\",\\n    \\"ResourceCpuCores\\": 8,\\n    \\"ResourceMemoryGiB\\": 32,\\n    \\"CacheStorageType\\": \\"CloudESSD\\",\\n    \\"CacheStorageSizeGiB\\": 200,\\n    \\"ObjectStoreSizeGiB\\": 0,\\n    \\"VirtualWareHouses\\": [\\n      {\\n        \\"VirtualWareHouseId\\": \\"vw-bp1w2728d535t****\\",\\n        \\"VirtualWareHouseDescription\\": \\"test\\",\\n        \\"VirtualWareHouseStatus\\": \\"Running\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n        \\"VswitchId\\": \\"vsw-2vcmrf8c878scsv43****\\",\\n        \\"VirtualWareHouseClass\\": \\"n1.xlarge\\",\\n        \\"VirtualWareHouseCacheStorage\\": 200,\\n        \\"Ports\\": \\"tcp:9000,http:8123,mysql:9004\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"9140518B-F330-5364-82FE-EC7298816EDF\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeClusterResponse>\\n    <Data>\\n        <DBClusterId>cc-uf6a499c0m3w5****</DBClusterId>\\n        <DBClusterDescription>test</DBClusterDescription>\\n        <EngineVersion>21.8</EngineVersion>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <VpcId>vpc-wz9duj8xd6r1gzhsg*****</VpcId>\\n        <ZoneId>cn-hangzhou-h</ZoneId>\\n        <VswitchId>vsw-2vcmrf8c878scsv43****</VswitchId>\\n        <PayType>Postpaid</PayType>\\n        <CommodityCode>clickhouse_go_public_cn</CommodityCode>\\n        <CreateTime>2022-03-18T08:14:48Z</CreateTime>\\n        <ExpireTime>2022-04-17T08:14:48Z</ExpireTime>\\n        <LockMode>Unlock</LockMode>\\n        <LockReason>DISK_FULL</LockReason>\\n        <DBClusterStatus>Running</DBClusterStatus>\\n        <ResourceCpuCores>8</ResourceCpuCores>\\n        <ResourceMemoryGiB>32</ResourceMemoryGiB>\\n        <CacheStorageType>CloudESSD</CacheStorageType>\\n        <CacheStorageSizeGiB>200</CacheStorageSizeGiB>\\n        <ObjectStoreSizeGiB>0</ObjectStoreSizeGiB>\\n        <VirtualWareHouses>\\n            <VirtualWareHouseId>vw-bp1w2728d535t****</VirtualWareHouseId>\\n            <VirtualWareHouseDescription>test</VirtualWareHouseDescription>\\n            <VirtualWareHouseStatus>Running</VirtualWareHouseStatus>\\n            <ZoneId>cn-hangzhou-h</ZoneId>\\n            <VswitchId>vsw-2vcmrf8c878scsv43****</VswitchId>\\n            <VirtualWareHouseClass>n1.xlarge</VirtualWareHouseClass>\\n            <VirtualWareHouseCacheStorage>200</VirtualWareHouseCacheStorage>\\n            <Ports>tcp:9000,http:8123,mysql:9004</Ports>\\n        </VirtualWareHouses>\\n    </Data>\\n    <RequestId>9140518B-F330-5364-82FE-EC7298816EDF</RequestId>\\n</DescribeClusterResponse>","errorExample":""}]',
            'title' => '查看集群信息',
        ],
        'DescribeClusterStatusSet' => [
            'summary' => '调用DescribeClusterStatusSet接口查看云数据库ClickHouse云原生版集群的所有状态信息。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<List<ClusterStatusInfo>>',
                        'description' => 'PlainResponse<List<ClusterStatusInfo>>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据概览。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Value' => [
                                            'title' => '状态值',
                                            'description' => '集群的状态，取值说明：'."\n"
                                                ."\n"
                                                .'- **OrderPreparing**：订单确认中。'."\n"
                                                .'- **Creating**：创建中。'."\n"
                                                .'- **Running**：运行中。'."\n"
                                                .'- **ResourceChanging**：资源变配中。'."\n"
                                                .'- **ResourceChangingInReadonly**：资源变配中（实例写入锁定）。'."\n"
                                                .'- **Deleting**：删除中。',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'Desc' => [
                                            'title' => '描述',
                                            'description' => '集群状态的描述。',
                                            'type' => 'string',
                                            'example' => '运行中',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"Value\\": \\"Running\\",\\n      \\"Desc\\": \\"运行中\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeClusterStatusSetResponse>\\n    <Data>\\n        <Value>Running</Value>\\n        <Desc>运行中</Desc>\\n    </Data>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n</DescribeClusterStatusSetResponse>","errorExample":""}]',
            'title' => '查看集群状态信息',
        ],
        'ModifyClusterDescription' => [
            'summary' => '调用ModifyClusterDescription接口修改云数据库ClickHouse云原生版集群的描述。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DBClusterDescription',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例描述信息',
                        'description' => '集群的描述。'."\n"
                            .'>- 不能以http://或https://开头。'."\n"
                            .'- 长度为2~256个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp1qx68m06981****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse',
                        'description' => 'BaseResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyClusterDescriptionResponse>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n</ModifyClusterDescriptionResponse>","errorExample":""}]',
            'title' => '修改集群描述',
        ],
        'DeleteCluster' => [
            'summary' => '调用DeleteCluster接口释放指定云数据库ClickHouse云原生版的按量付费集群。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。您可以通过调用[ListClusters](~~419072~~)接口查询目标地域下所有的集群信息，包括集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp1qx68m06981****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<CommonOrderResponse>',
                        'description' => 'PlainResponse<CommonOrderResponse>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'OrderId' => [
                                        'description' => '订单ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '21152382576****',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5B1C3974-F13D-5510-9131-DC4A4C8B09C6',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": {\\n    \\"OrderId\\": 0\\n  },\\n  \\"RequestId\\": \\"5B1C3974-F13D-5510-9131-DC4A4C8B09C6\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteClusterResponse>\\n    <Data>\\n        <OrderId>21152382576****</OrderId>\\n    </Data>\\n    <RequestId>5B1C3974-F13D-5510-9131-DC4A4C8B09C6</RequestId>\\n</DeleteClusterResponse>","errorExample":""}]',
            'title' => '释放集群',
            'description' => '><warning>集群删除后，集群的所有数据都会被删除无法找回，请谨慎操作。'."\n"
                .'></warning>',
        ],
        'UpgradeCluster' => [
            'summary' => '调用UpgradeCluster接口为云数据库ClickHouse云原生版集群进行小版本升级，主要包含bug修复。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。您可以通过调用[ListClusters](~~419072~~)接口查询目标地域下所有的集群信息，包括集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-8vbsom12x476u****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以调用[DescribeRegions](~~416820~~)接口查看查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse',
                        'description' => 'BaseResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。'."\n",
                                'type' => 'string',
                                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\"\\n}","errorExample":""},{"type":"xml","example":"<UpgradeClusterResponse>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n</UpgradeClusterResponse>","errorExample":""}]',
            'title' => '升级小版本',
        ],
        'CheckCreateVirtualWareHouse' => [
            'summary' => '调用CheckCreateVirtualWareHouse接口对创建计算组进行预检查，预判创建请求是否成功。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'VswitchId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '交换机ID',
                        'description' => '交换机ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-uf632qye9oqt4x4sr****',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseClass',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组规格码',
                        'description' => '计算组的规格码。您可以通过调用[DescribeVirtualWareHouseClassSet](~~417505~~)接口查询规格码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'n1.xlarge',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseCacheStorage',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组本地缓存空间 GiB',
                        'description' => '计算组的缓存大小，单位：GB。'."\n"
                            ."\n"
                            .'取值范围：200~32000。'."\n"
                            .'>步长为100 GB。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '200',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseDescription',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组描述信息',
                        'description' => '计算组描述。'."\n"
                            .'>- 不能以http://或https://开头。'."\n"
                            .'- 长度为2~256个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '可用区ID',
                        'description' => '可用区ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询可用区ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou-h',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp108z124a8o7****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<CommonOrderCheckResponse>',
                        'description' => 'PlainResponse<CommonOrderCheckResponse>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '预检查的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'ExpectedDBClusterStatus' => [
                                        'title' => '预期变更后的实例状态',
                                        'description' => '创建时集群的状态，预期结果为ResourceChanging：资源变配中。',
                                        'type' => 'string',
                                        'example' => 'ResourceChanging',
                                    ],
                                    'ExpectedTargetVirtualWareHouseStatus' => [
                                        'title' => '预期变更后的计算组状态',
                                        'description' => '创建时计算组的状态，预期结果为Creating：创建中。',
                                        'type' => 'string',
                                        'example' => 'Creating',
                                    ],
                                    'ExpectedOrderFinishSeconds' => [
                                        'title' => '预期变更完成需要的时间 秒',
                                        'description' => '创建计算组所需的时间，单位：秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '60',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9A23C87D-87DF-4DA0-A50E-CB13F4F7923D',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": {\\n    \\"ExpectedDBClusterStatus\\": \\"ResourceChanging\\",\\n    \\"ExpectedTargetVirtualWareHouseStatus\\": \\"Creating\\",\\n    \\"ExpectedOrderFinishSeconds\\": 60\\n  },\\n  \\"RequestId\\": \\"9A23C87D-87DF-4DA0-A50E-CB13F4F7923D\\"\\n}","errorExample":""},{"type":"xml","example":"<CheckCreateVirtualWareHouseResponse>\\n    <Data>\\n        <ExpectedDBClusterStatus>ResourceChanging</ExpectedDBClusterStatus>\\n        <ExpectedTargetVirtualWareHouseStatus>Creating</ExpectedTargetVirtualWareHouseStatus>\\n        <ExpectedOrderFinishSeconds>60</ExpectedOrderFinishSeconds>\\n    </Data>\\n    <RequestId>9A23C87D-87DF-4DA0-A50E-CB13F4F7923D</RequestId>\\n</CheckCreateVirtualWareHouseResponse>","errorExample":""}]',
            'title' => '对创建计算组进行预检查',
        ],
        'CreateVirtualWareHouse' => [
            'summary' => '调用CreateVirtualWareHouse接口为云数据库ClickHouse云原生版集群创建计算组。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'VswitchId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '交换机ID',
                        'description' => '交换机ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-uf632qye9oqt4x4sr****',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseClass',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组规格码',
                        'description' => '计算组的规格码。您可以通过调用[DescribeVirtualWareHouseClassSet](~~417505~~)接口查询规格码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'n1.xlarge',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseCacheStorage',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组本地缓存空间 GiB',
                        'description' => '计算组的缓存大小，单位：GB。'."\n"
                            ."\n"
                            .'取值范围：200~32000。'."\n"
                            .'>步长为100 GB。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '200',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseDescription',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组描述信息',
                        'description' => '计算组描述。'."\n"
                            ."\n"
                            .'>- 不能以http://或https://开头。'."\n"
                            .'- 长度为2~256个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '可用区ID',
                        'description' => '可用区ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询可用区ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou-h',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp108z124a8o7****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<CreateVirtualWareHouseResponse>',
                        'description' => 'PlainResponse<CreateVirtualWareHouseResponse>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'VirtualWareHouseId' => [
                                        'description' => '计算组ID。',
                                        'type' => 'string',
                                        'example' => 'vw-bp1w2728d535t****',
                                    ],
                                    'OrderId' => [
                                        'description' => '订单ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '21155221661****',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2FED790E-FB61-4721-8C1C-07C627FA5A19',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": {\\n    \\"VirtualWareHouseId\\": \\"vw-bp1w2728d535t****\\",\\n    \\"OrderId\\": 0\\n  },\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateVirtualWareHouseResponse>\\n<Data>\\n<VirtualWareHouseId>vw-bp1w2728d535t****</VirtualWareHouseId>\\n<OrderId>21155221661****</OrderId>\\n</Data>\\n<RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>\\n</CreateVirtualWareHouseResponse>","errorExample":""}]',
            'title' => '对创建计算组进行预检查',
        ],
        'ListVirtualWareHouses' => [
            'summary' => '调用ListVirtualWareHouses接口查看云数据库ClickHouse云原生版集群的所有计算组信息。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp108z124a8o7****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<List<VirtualWareHouseModel>>',
                        'description' => 'PlainResponse<List<VirtualWareHouseModel>>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据概览。',
                                    'type' => 'object',
                                    'properties' => [
                                        'VirtualWareHouseId' => [
                                            'description' => '计算组ID。',
                                            'type' => 'string',
                                            'example' => 'vw-bp1w2728d535t****',
                                        ],
                                        'VirtualWareHouseDescription' => [
                                            'title' => '计算组描述信息',
                                            'description' => '计算组描述。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'VirtualWareHouseStatus' => [
                                            'title' => '计算组状态 详见describeVirtualWareHouseStatusSet接口',
                                            'description' => '计算组的状态，取值说明：'."\n"
                                                ."\n"
                                                .'- **Creating**：创建中。'."\n"
                                                .'- **Running**：运行中。'."\n"
                                                .'- **CreatingPublicSLB**：创建公网链接中。'."\n"
                                                .'- **DeletingPublicSLB**：释放公网链接中。'."\n"
                                                .'- **ResourceChanging**：资源变配中。'."\n"
                                                .'- **ResourceChangingInReadonly**：资源变配中（计算组写入锁定）。'."\n"
                                                .'- **Deleting**：删除中。',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'ZoneId' => [
                                            'title' => '可用区',
                                            'description' => '可用区ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-h',
                                        ],
                                        'VswitchId' => [
                                            'title' => '交换机ID',
                                            'description' => '交换机ID。',
                                            'type' => 'string',
                                            'example' => 'vsw-bp1tg609m5j85jejq****',
                                        ],
                                        'VirtualWareHouseClass' => [
                                            'title' => '计算组规格码',
                                            'description' => '计算组规格码。',
                                            'type' => 'string',
                                            'example' => 'n1.xlarge',
                                        ],
                                        'VirtualWareHouseCacheStorage' => [
                                            'title' => '计算组本地缓存空间GiB',
                                            'description' => '计算组的缓存空间，单位：GB。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '200',
                                        ],
                                        'Ports' => [
                                            'title' => '端口信息 英文逗号分隔',
                                            'description' => '计算组的端口号。',
                                            'type' => 'string',
                                            'example' => 'tcp:9000,http:8123,mysql:9004',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DD4F7C49-09BC-5BA7-BAC9-F0887E368126',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"VirtualWareHouseId\\": \\"vw-bp1w2728d535t****\\",\\n      \\"VirtualWareHouseDescription\\": \\"test\\",\\n      \\"VirtualWareHouseStatus\\": \\"Running\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n      \\"VswitchId\\": \\"vsw-bp1tg609m5j85jejq****\\",\\n      \\"VirtualWareHouseClass\\": \\"n1.xlarge\\",\\n      \\"VirtualWareHouseCacheStorage\\": 200,\\n      \\"Ports\\": \\"tcp:9000,http:8123,mysql:9004\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"DD4F7C49-09BC-5BA7-BAC9-F0887E368126\\"\\n}","errorExample":""},{"type":"xml","example":"<ListVirtualWareHousesResponse>\\n    <Data>\\n        <VirtualWareHouseId>vw-bp1w2728d535t****</VirtualWareHouseId>\\n        <VirtualWareHouseDescription>test</VirtualWareHouseDescription>\\n        <VirtualWareHouseStatus>Running</VirtualWareHouseStatus>\\n        <ZoneId>cn-hangzhou-h</ZoneId>\\n        <VswitchId>vsw-bp1tg609m5j85jejq****</VswitchId>\\n        <VirtualWareHouseClass>n1.xlarge</VirtualWareHouseClass>\\n        <VirtualWareHouseCacheStorage>200</VirtualWareHouseCacheStorage>\\n        <Ports>tcp:9000,http:8123,mysql:9004</Ports>\\n    </Data>\\n    <RequestId>DD4F7C49-09BC-5BA7-BAC9-F0887E368126</RequestId>\\n</ListVirtualWareHousesResponse>","errorExample":""}]',
            'title' => '查看所有计算组信息',
        ],
        'ListVirtualWareHouseConfigs' => [
            'summary' => '调用ListVirtualWareHouseConfigs接口查看云数据库ClickHouse云原生版集群指定计算组的所有参数配置信息。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'VirtualWareHouseId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组ID',
                        'description' => '计算组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vw-uf6a499c0m3w5****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-bp1p816075e21****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<List<VirtualWareHouseConfigModel>>',
                        'description' => 'PlainResponse<List<VirtualWareHouseConfigModel>>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据概览。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ConfigType' => [
                                            'title' => '参数类型 config.xml | users.xml',
                                            'description' => '参数的配置文件类型，取值：'."\n"
                                                ."\n"
                                                .'- **config.xml**'."\n"
                                                .'- **users.xml**',
                                            'type' => 'string',
                                            'example' => 'config.xml',
                                        ],
                                        'ConfigFullPath' => [
                                            'title' => '参数路径',
                                            'description' => '参数名。'."\n",
                                            'type' => 'string',
                                            'example' => 'keep_alive_timeout',
                                        ],
                                        'DefaultValue' => [
                                            'title' => '参数默认值 为空代表未设置',
                                            'description' => '参数默认值。',
                                            'type' => 'string',
                                            'example' => '300',
                                        ],
                                        'Spec' => [
                                            'title' => '修改规范',
                                            'description' => '参数的取值范围。',
                                            'type' => 'string',
                                            'example' => '>=10',
                                        ],
                                        'Description' => [
                                            'title' => '参数描述',
                                            'description' => '参数描述。',
                                            'type' => 'string',
                                            'example' => 'The number of seconds that ClickHouse HTTP server waits for incoming requests before closing the connection',
                                        ],
                                        'NeedRestart' => [
                                            'title' => '修改后是否需要重启',
                                            'description' => '修改参数后是否需要重启计算组使参数生效，取值说明：'."\n"
                                                ."\n"
                                                .'- **true**：需要重启计算组。'."\n"
                                                .'- **false**：不需要重启计算组。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Value' => [
                                            'title' => '参数设定值',
                                            'description' => '参数运行值。',
                                            'type' => 'string',
                                            'example' => '300',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '87B839E3-7384-52D5-9CAB-756DD3BF7B9B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"ConfigType\\": \\"config.xml\\",\\n      \\"ConfigFullPath\\": \\"keep_alive_timeout\\",\\n      \\"DefaultValue\\": \\"300\\",\\n      \\"Spec\\": \\">=10\\",\\n      \\"Description\\": \\"The number of seconds that ClickHouse HTTP server waits for incoming requests before closing the connection\\",\\n      \\"NeedRestart\\": true,\\n      \\"Value\\": \\"300\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"87B839E3-7384-52D5-9CAB-756DD3BF7B9B\\"\\n}","errorExample":""},{"type":"xml","example":"<ListVirtualWareHouseConfigsResponse>\\n    <Data>\\n        <ConfigType>config.xml</ConfigType>\\n        <ConfigFullPath>keep_alive_timeout</ConfigFullPath>\\n        <DefaultValue>300</DefaultValue>\\n        <Spec>&gt;=10</Spec>\\n        <Description>The number of seconds that ClickHouse HTTP server waits for incoming requests before closing the connection</Description>\\n        <NeedRestart>true</NeedRestart>\\n        <Value>300</Value>\\n    </Data>\\n    <RequestId>87B839E3-7384-52D5-9CAB-756DD3BF7B9B</RequestId>\\n</ListVirtualWareHouseConfigsResponse>","errorExample":""}]',
            'title' => '查看指定计算组的参数配置信息',
        ],
        'DescribeVirtualWareHouse' => [
            'summary' => '调用DescribeVirtualWareHouse接口查看云数据库ClickHouse云原生版集群的指定计算组信息。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'VirtualWareHouseId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组ID',
                        'description' => '计算组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vw-bp1w2728d535t****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-bp108z124a8o7****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<VirtualWareHouseModel>',
                        'description' => 'PlainResponse<VirtualWareHouseModel>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'VirtualWareHouseId' => [
                                        'description' => '计算组ID。',
                                        'type' => 'string',
                                        'example' => 'vw-bp1w2728d535t****',
                                    ],
                                    'VirtualWareHouseDescription' => [
                                        'title' => '计算组描述信息',
                                        'description' => '计算组描述。',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'VirtualWareHouseStatus' => [
                                        'title' => '计算组状态 详见describeVirtualWareHouseStatusSet接口',
                                        'description' => '计算组的状态，取值说明：'."\n"
                                            ."\n"
                                            .'- **Creating**：创建中。'."\n"
                                            .'- **Running**：运行中。'."\n"
                                            .'- **CreatingPublicSLB**：创建公网链接中。'."\n"
                                            .'- **DeletingPublicSLB**：释放公网链接中。'."\n"
                                            .'- **ResourceChanging**：资源变配中。'."\n"
                                            .'- **ResourceChangingInReadonly**：资源变配中（计算组写入锁定）。'."\n"
                                            .'- **Deleting**：删除中。',
                                        'type' => 'string',
                                        'example' => 'Running',
                                    ],
                                    'ZoneId' => [
                                        'title' => '可用区',
                                        'description' => '可用区ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou-h',
                                    ],
                                    'VswitchId' => [
                                        'title' => '交换机ID',
                                        'description' => '交换机ID。',
                                        'type' => 'string',
                                        'example' => 'vsw-bp1tg609m5j85jejq****',
                                    ],
                                    'VirtualWareHouseClass' => [
                                        'title' => '计算组规格码',
                                        'description' => '计算组规格码。',
                                        'type' => 'string',
                                        'example' => 'n1.xlarge',
                                    ],
                                    'VirtualWareHouseCacheStorage' => [
                                        'title' => '计算组本地缓存空间GiB',
                                        'description' => '计算组的缓存空间，单位：GB。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '200',
                                    ],
                                    'Ports' => [
                                        'title' => '端口信息 英文逗号分隔',
                                        'description' => '计算组的端口号。',
                                        'type' => 'string',
                                        'example' => 'tcp:9000,http:8123,mysql:9004',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F543E6CC-6868-523D-8D28-0E92CF977ED2',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": {\\n    \\"VirtualWareHouseId\\": \\"vw-bp1w2728d535t****\\",\\n    \\"VirtualWareHouseDescription\\": \\"test\\",\\n    \\"VirtualWareHouseStatus\\": \\"Running\\",\\n    \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n    \\"VswitchId\\": \\"vsw-bp1tg609m5j85jejq****\\",\\n    \\"VirtualWareHouseClass\\": \\"n1.xlarge\\",\\n    \\"VirtualWareHouseCacheStorage\\": 200,\\n    \\"Ports\\": \\"tcp:9000,http:8123,mysql:9004\\"\\n  },\\n  \\"RequestId\\": \\"F543E6CC-6868-523D-8D28-0E92CF977ED2\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeVirtualWareHouseResponse>\\n    <Data>\\n        <VirtualWareHouseId>vw-bp1w2728d535t****</VirtualWareHouseId>\\n        <VirtualWareHouseDescription>test</VirtualWareHouseDescription>\\n        <VirtualWareHouseStatus>Running</VirtualWareHouseStatus>\\n        <ZoneId>cn-hangzhou-h</ZoneId>\\n        <VswitchId>vsw-bp1tg609m5j85jejq****</VswitchId>\\n        <VirtualWareHouseClass>n1.xlarge</VirtualWareHouseClass>\\n        <VirtualWareHouseCacheStorage>200</VirtualWareHouseCacheStorage>\\n        <Ports>tcp:9000,http:8123,mysql:9004</Ports>\\n    </Data>\\n    <RequestId>F543E6CC-6868-523D-8D28-0E92CF977ED2</RequestId>\\n</DescribeVirtualWareHouseResponse>","errorExample":""}]',
            'title' => '查看指定的计算组信息',
        ],
        'DescribeVirtualWareHouseEndpointInfo' => [
            'summary' => '调用DescribeVirtualWareHouseEndpointInfo接口查看计算组的连接信息。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'VirtualWareHouseId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组ID',
                        'description' => '计算组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vw-bp11gxp8g992f****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-bp1qx68m06981****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<List<VirtualWareHouseEndpointModel>>',
                        'description' => 'PlainResponse<List<VirtualWareHouseEndpointModel>>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回数据。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Ip' => [
                                            'description' => '计算组的IP地址。',
                                            'type' => 'string',
                                            'example' => '10.0.xx.xx',
                                        ],
                                        'NetType' => [
                                            'title' => '网络类型 intranet:内网 | internet:公网',
                                            'description' => '网络类型，取值说明：'."\n"
                                                ."\n"
                                                .'- **intranet**：VPC网络。'."\n"
                                                .'- **internet**：外网。',
                                            'type' => 'string',
                                            'example' => 'intranet',
                                        ],
                                        'EndpointType' => [
                                            'title' => 'Endpoint类型',
                                            'description' => '网络访问入口的类型。',
                                            'type' => 'string',
                                            'example' => 'slb',
                                        ],
                                        'Ports' => [
                                            'title' => '端口信息 英文逗号分隔',
                                            'description' => '计算组的端口号。',
                                            'type' => 'string',
                                            'example' => 'tcp:9000,http:8123,mysql:9004',
                                        ],
                                        'Url' => [
                                            'title' => '链接串',
                                            'description' => '网络连接地址。',
                                            'type' => 'string',
                                            'example' => 'vw-bp11gxp8g992f****.clickhouse.ads.aliyuncs.com',
                                        ],
                                        'Status' => [
                                            'title' => '创建状态 Creating:创建中 | Ready:可使用 | Deleting:删除中',
                                            'description' => '网络访问入口的创建状态，取值说明：'."\n"
                                                ."\n"
                                                .'- **Creating**：创建中。'."\n"
                                                .'- **Ready**：可使用。'."\n"
                                                .'- **Deleting**：删除中。',
                                            'type' => 'string',
                                            'example' => 'Ready',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7EE0EF77-B7BA-5EE3-9B11-F8DE7B65BAB8',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"Ip\\": \\"10.0.xx.xx\\",\\n      \\"NetType\\": \\"intranet\\",\\n      \\"EndpointType\\": \\"slb\\",\\n      \\"Ports\\": \\"tcp:9000,http:8123,mysql:9004\\",\\n      \\"Url\\": \\"vw-bp11gxp8g992f****.clickhouse.ads.aliyuncs.com\\",\\n      \\"Status\\": \\"Ready\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"7EE0EF77-B7BA-5EE3-9B11-F8DE7B65BAB8\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeVirtualWareHouseEndpointInfoResponse>\\n    <Data>\\n        <Ip>10.0.xx.xx</Ip>\\n        <NetType>intranet</NetType>\\n        <EndpointType>slb</EndpointType>\\n        <Ports>tcp:9000,http:8123,mysql:9004</Ports>\\n        <Url>vw-bp11gxp8g992f****.clickhouse.ads.aliyuncs.com</Url>\\n        <Status>Ready</Status>\\n    </Data>\\n    <RequestId>7EE0EF77-B7BA-5EE3-9B11-F8DE7B65BAB8</RequestId>\\n</DescribeVirtualWareHouseEndpointInfoResponse>","errorExample":""}]',
            'title' => '查看计算组的连接信息',
        ],
        'DescribeVirtualWareHouseClassSet' => [
            'summary' => '调用DescribeVirtualWareHouseClassSet接口查询云数据库ClickHouse云原生版支持的所有计算组规格。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<List<VirtualWareHouseClassInfo>>',
                        'description' => 'PlainResponse<List<VirtualWareHouseClassInfo>>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '计算组规格。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回数据。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Value' => [
                                            'title' => '规格码',
                                            'description' => '计算组规格码。',
                                            'type' => 'string',
                                            'example' => 'n1.2xlarge',
                                        ],
                                        'CpuCores' => [
                                            'title' => 'CPU资源 cores',
                                            'description' => '计算组的CPU规格，单位：核。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '16',
                                        ],
                                        'MemoryGiB' => [
                                            'title' => '内存资源 GiB',
                                            'description' => '计算组的内存规格，单位：GB。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '64',
                                        ],
                                        'MinCacheStorage' => [
                                            'title' => '最小本地缓存空间 GiB',
                                            'description' => '计算组的最小缓存空间，单位：GB。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '200',
                                        ],
                                        'MaxCacheStorage' => [
                                            'title' => '最大本地缓存空间 GiB',
                                            'description' => '计算组的最大缓存空间，单位：GB。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '32000',
                                        ],
                                        'CacheStorageStep' => [
                                            'title' => '最大本地缓存空间调整步长 GiB',
                                            'description' => '缓存空间的调整步长，单位：GB。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '100',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"Value\\": \\"n1.2xlarge\\",\\n      \\"CpuCores\\": 16,\\n      \\"MemoryGiB\\": 64,\\n      \\"MinCacheStorage\\": 200,\\n      \\"MaxCacheStorage\\": 32000,\\n      \\"CacheStorageStep\\": 100\\n    }\\n  ],\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeVirtualWareHouseClassSetResponse>\\n    <Data>\\n        <Value>n1.2xlarge</Value>\\n        <CpuCores>16</CpuCores>\\n        <MemoryGiB>64</MemoryGiB>\\n        <MinCacheStorage>200</MinCacheStorage>\\n        <MaxCacheStorage>32000</MaxCacheStorage>\\n        <CacheStorageStep>100</CacheStorageStep>\\n    </Data>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n</DescribeVirtualWareHouseClassSetResponse>","errorExample":""}]',
            'title' => '查询所有计算组规格',
        ],
        'DescribeVirtualWareHouseStatusSet' => [
            'summary' => '调用DescribeVirtualWareHouseStatusSet接口查看云原生版集群计算组的所有状态信息。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<List<VirtualWareHouseStatusInfo>>',
                        'description' => 'PlainResponse<List<VirtualWareHouseStatusInfo>>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回数据。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Value' => [
                                            'title' => '状态值',
                                            'description' => '计算组的状态，取值说明：'."\n"
                                                ."\n"
                                                .'- **Creating**：创建中。'."\n"
                                                .'- **Running**：运行中。'."\n"
                                                .'- **CreatingPublicSLB**：创建公网链接中。'."\n"
                                                .'- **DeletingPublicSLB**：释放公网链接中。'."\n"
                                                .'- **ResourceChanging**：资源变配中。'."\n"
                                                .'- **ResourceChangingInReadonly**：资源变配中（计算组写入锁定）。'."\n"
                                                .'- **Deleting**：删除中。',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'Desc' => [
                                            'title' => '描述',
                                            'description' => '计算组状态的描述。',
                                            'type' => 'string',
                                            'example' => '运行中',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FDF272C3-8FD0-507B-8E63-A19495217339',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"Value\\": \\"Running\\",\\n      \\"Desc\\": \\"运行中\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"FDF272C3-8FD0-507B-8E63-A19495217339\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeVirtualWareHouseStatusSetResponse>\\n    <Data>\\n        <Value>Running</Value>\\n        <Desc>运行中</Desc>\\n    </Data>\\n    <RequestId>FDF272C3-8FD0-507B-8E63-A19495217339</RequestId>\\n</DescribeVirtualWareHouseStatusSetResponse>","errorExample":""}]',
            'title' => '查看计算组的状态信息',
        ],
        'CheckModifyVirtualWareHouseResource' => [
            'summary' => '调用CheckModifyVirtualWareHouseResource接口对计算组变配进行预检查，预判变配请求是否成功。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'VirtualWareHouseClass',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组规格码',
                        'description' => '计算组的规格码。您可以通过调用[DescribeVirtualWareHouseClassSet](~~417505~~)接口查询规格码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'n1.xlarge',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseCacheStorage',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组本地缓存空间 GiB',
                        'description' => '计算组的缓存大小，单位：GB。'."\n"
                            ."\n"
                            .'取值范围：200~32000。'."\n"
                            .'>步长为100 GB。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '200',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组ID',
                        'description' => '计算组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vw-uf6a499c0m3w5****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-bp108z124a8o7****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<CommonOrderCheckResponse>',
                        'description' => 'PlainResponse<CommonOrderCheckResponse>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '预检查的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'ExpectedDBClusterStatus' => [
                                        'title' => '预期变更后的实例状态',
                                        'description' => '变配时集群的状态，预期结果为ResourceChanging：资源变配中。',
                                        'type' => 'string',
                                        'example' => 'ResourceChanging',
                                    ],
                                    'ExpectedTargetVirtualWareHouseStatus' => [
                                        'title' => '预期变更后的计算组状态',
                                        'description' => '变配时计算组的状态，预期结果为ResourceChanging：资源变配中。',
                                        'type' => 'string',
                                        'example' => 'ResourceChanging',
                                    ],
                                    'ExpectedOrderFinishSeconds' => [
                                        'title' => '预期变更完成需要的时间 秒',
                                        'description' => '变配计算组需要的时间，单位：秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '60',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '05321590-BB65-4720-8CB6-8218E041CDD0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": {\\n    \\"ExpectedDBClusterStatus\\": \\"ResourceChanging\\",\\n    \\"ExpectedTargetVirtualWareHouseStatus\\": \\"ResourceChanging\\",\\n    \\"ExpectedOrderFinishSeconds\\": 60\\n  },\\n  \\"RequestId\\": \\"05321590-BB65-4720-8CB6-8218E041CDD0\\"\\n}","errorExample":""},{"type":"xml","example":"<CheckModifyVirtualWareHouseResourceResponse>\\n    <Data>\\n        <ExpectedDBClusterStatus>ResourceChanging</ExpectedDBClusterStatus>\\n        <ExpectedTargetVirtualWareHouseStatus>ResourceChanging</ExpectedTargetVirtualWareHouseStatus>\\n        <ExpectedOrderFinishSeconds>60</ExpectedOrderFinishSeconds>\\n    </Data>\\n    <RequestId>05321590-BB65-4720-8CB6-8218E041CDD0</RequestId>\\n</CheckModifyVirtualWareHouseResourceResponse>","errorExample":""}]',
            'title' => '对计算组变配进行预检查',
        ],
        'ModifyVirtualWareHouseResource' => [
            'summary' => '调用ModifyVirtualWareHouseResource接口对云数据库ClickHouse云原生版集群的指定计算组变配。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'VirtualWareHouseClass',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组规格码',
                        'description' => '计算组的规格码。您可以通过调用[DescribeVirtualWareHouseClassSet](~~417505~~)接口查询规格码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'n1.xlarge',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseCacheStorage',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组本地缓存空间 GiB',
                        'description' => '计算组的缓存大小，单位：GB。'."\n"
                            ."\n"
                            .'取值范围：200~32000。'."\n"
                            .'>步长为100 GB。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '200',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组ID',
                        'description' => '计算组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vw-uf62965t8lt50****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-bp108z124a8o7****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<CommonOrderResponse>',
                        'description' => 'PlainResponse<CommonOrderResponse>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'OrderId' => [
                                        'description' => '订单ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '21152548723****',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": {\\n    \\"OrderId\\": 0\\n  },\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyVirtualWareHouseResourceResponse>\\n    <Data>\\n        <OrderId>21152548723****</OrderId>\\n    </Data>\\n    <RequestId>D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC</RequestId>\\n</ModifyVirtualWareHouseResourceResponse>","errorExample":""}]',
            'title' => '对计算组变配',
        ],
        'RestartVirtualWareHouse' => [
            'summary' => '调用RestartVirtualWareHouse接口重启计算组。本接口仅适用于云数据库ClickHouse的云原生版集群。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'VirtualWareHouseId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组ID',
                        'description' => '计算组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vw-bp1w2728d535t****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-bp1p816075e21****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse',
                        'description' => 'BaseResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DE1F69AE-6F82-5227-B691-DF14AD36A460',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DE1F69AE-6F82-5227-B691-DF14AD36A460\\"\\n}","errorExample":""},{"type":"xml","example":"<RestartVirtualWareHouseResponse>\\n    <RequestId>DE1F69AE-6F82-5227-B691-DF14AD36A460</RequestId>\\n</RestartVirtualWareHouseResponse>","errorExample":""}]',
            'title' => '重启计算组',
        ],
        'ModifyVirtualWareHouseDescription' => [
            'summary' => '调用ModifyVirtualWareHouseDescription接口修改云数据库ClickHouse云原生版集群指定计算组的描述。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'VirtualWareHouseDescription',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组描述信息',
                        'description' => '计算组的描述。'."\n"
                            ."\n"
                            .'>- 不能以http://或https://开头。'."\n"
                            .'- 长度为2~256个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组ID',
                        'description' => '计算组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vw-bp1w2728d535t****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-bp108z124a8o7****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse',
                        'description' => 'BaseResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyVirtualWareHouseDescriptionResponse>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n</ModifyVirtualWareHouseDescriptionResponse>","errorExample":""}]',
            'title' => '修改计算组的描述',
        ],
        'ModifyVirtualWareHouseConfig' => [
            'summary' => '调用ModifyVirtualWareHouseConfig接口修改云原生版集群指定计算组的参数配置信息。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ConfigChanges',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '参数变更列表',
                        'description' => '参数配置信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '参数配置。',
                            'type' => 'object',
                            'properties' => [
                                'ConfigFullPath' => [
                                    'title' => '参数路径',
                                    'description' => '参数名。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'keep_alive_timeout',
                                ],
                                'Value' => [
                                    'title' => '参数设定值',
                                    'description' => '参数值，取值范围大于等于10。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '300',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组ID',
                        'description' => '计算组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vw-uf62965t8lt50****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-bp1qx68m06981****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse',
                        'description' => 'BaseResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '108B73B2-F513-5250-81DD-48A63E48C373',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"108B73B2-F513-5250-81DD-48A63E48C373\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyVirtualWareHouseConfigResponse>\\n    <RequestId>108B73B2-F513-5250-81DD-48A63E48C373</RequestId>\\n</ModifyVirtualWareHouseConfigResponse>","errorExample":""}]',
            'title' => '修改计算组的参数配置信息',
        ],
        'AllocateVirtualWareHousePublicConnection' => [
            'summary' => '调用AllocateVirtualWareHousePublicConnection接口申请云原生版集群指定计算组的外网地址。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'VirtualWareHouseId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组ID',
                        'description' => '计算组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vw-uf6a499c0m3w5****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-bp108z124a8o7****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse',
                        'description' => 'BaseResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\"\\n}","errorExample":""},{"type":"xml","example":"<AllocateVirtualWareHousePublicConnectionResponse>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n</AllocateVirtualWareHousePublicConnectionResponse>","errorExample":""}]',
            'title' => '申请计算组的外网地址',
        ],
        'ReleaseVirtualWareHousePublicConnection' => [
            'summary' => '调用ReleaseVirtualWareHousePublicConnection接口释放云数据库ClickHouse云原生版集群指定计算组的外网地址。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'VirtualWareHouseId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组ID',
                        'description' => '计算组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vw-bp1w2728d535t****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-bp108z124a8o7****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse',
                        'description' => 'BaseResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '05321590-BB65-4720-8CB6-8218E041CDD0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"05321590-BB65-4720-8CB6-8218E041CDD0\\"\\n}","errorExample":""},{"type":"xml","example":"<ReleaseVirtualWareHousePublicConnectionResponse>\\n    <RequestId>05321590-BB65-4720-8CB6-8218E041CDD0</RequestId>\\n</ReleaseVirtualWareHousePublicConnectionResponse>","errorExample":""}]',
            'title' => '释放计算组的外网地址',
        ],
        'CheckDeleteVirtualWareHouse' => [
            'summary' => '调用CheckDeleteVirtualWareHouse接口对删除计算组进行预检查，预判删除请求是否成功。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'VirtualWareHouseId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组ID',
                        'description' => '计算组ID。'."\n"
                            .'>云数据库ClickHouse云原生版集群需要至少保留一个计算组。您可以通过调用[ListVirtualWareHouses](~~419058~~)接口查询计算组数量。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vw-uf6a499c0m3w5****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-bp1qx68m06981****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<CommonOrderCheckResponse>',
                        'description' => 'PlainResponse<CommonOrderCheckResponse>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '预检查的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'ExpectedDBClusterStatus' => [
                                        'title' => '预期变更后的实例状态',
                                        'description' => '删除时集群的状态，预期结果为ResourceChanging：资源变配中。',
                                        'type' => 'string',
                                        'example' => 'ResourceChanging',
                                    ],
                                    'ExpectedTargetVirtualWareHouseStatus' => [
                                        'title' => '预期变更后的计算组状态',
                                        'description' => '删除时计算组的状态，预期结果为Deleting：删除中。',
                                        'type' => 'string',
                                        'example' => 'Deleting',
                                    ],
                                    'ExpectedOrderFinishSeconds' => [
                                        'title' => '预期变更完成需要的时间 秒',
                                        'description' => '删除计算组所需的时间，单位：秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '60',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9A23C87D-87DF-4DA0-A50E-CB13F4F7923D',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": {\\n    \\"ExpectedDBClusterStatus\\": \\"ResourceChanging\\",\\n    \\"ExpectedTargetVirtualWareHouseStatus\\": \\"Deleting\\",\\n    \\"ExpectedOrderFinishSeconds\\": 60\\n  },\\n  \\"RequestId\\": \\"9A23C87D-87DF-4DA0-A50E-CB13F4F7923D\\"\\n}","errorExample":""},{"type":"xml","example":"<CheckDeleteVirtualWareHouseResponse>\\n    <Data>\\n        <ExpectedDBClusterStatus>ResourceChanging</ExpectedDBClusterStatus>\\n        <ExpectedTargetVirtualWareHouseStatus>Deleting</ExpectedTargetVirtualWareHouseStatus>\\n        <ExpectedOrderFinishSeconds>60</ExpectedOrderFinishSeconds>\\n    </Data>\\n    <RequestId>9A23C87D-87DF-4DA0-A50E-CB13F4F7923D</RequestId>\\n</CheckDeleteVirtualWareHouseResponse>","errorExample":""}]',
            'title' => '对删除计算组进行预检查',
        ],
        'DeleteVirtualWareHouse' => [
            'summary' => '调用DeleteVirtualWareHouse接口删除云数据库ClickHouse云原生版集群的指定计算组。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'VirtualWareHouseId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组ID',
                        'description' => '计算组ID。'."\n"
                            .'>云数据库ClickHouse云原生版集群需要至少保留一个计算组。您可以通过调用[ListVirtualWareHouses](~~419058~~)接口查询计算组数量。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vw-bp1w2728d535t****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-bp1qx68m06981****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<CommonOrderResponse>',
                        'description' => 'PlainResponse<CommonOrderResponse>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'OrderId' => [
                                        'description' => '订单ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '21152153510****',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": {\\n    \\"OrderId\\": 0\\n  },\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteVirtualWareHouseResponse>\\n    <Data>\\n        <OrderId>21152153510****</OrderId>\\n    </Data>\\n    <RequestId>D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC</RequestId>\\n</DeleteVirtualWareHouseResponse>","errorExample":""}]',
            'title' => '删除计算组',
        ],
        'DescribeSlowQuery' => [
            'summary' => '调用DescribeSlowQuery接口对指定云数据库ClickHouse云原生版的单个计算组进行慢查询明细诊断操作。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '时间窗口起点 UTC时间 默认值当前时间减1小时',
                        'description' => '开始时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-02-02T08:30:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '时间窗口终点 UTC时间 默认值当前时间',
                        'description' => '结束时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-02-02T09:30:00Z',
                    ],
                ],
                [
                    'name' => 'QueryDurationMs',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询最小持续时间 毫秒 最小值1000 默认值1000',
                        'description' => '最短的查询耗时。最小值为**1000**，默认值为**1000**。单位：毫秒。返回参数将返回超过该耗时的查询。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1000',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页码 从1开始 默认值1',
                        'description' => '页码，取值为大于0且不超过Integer数据类型的最大值，默认值为**1**。',
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
                        'title' => '分页大小 默认值30',
                        'description' => '每页记录数，取值：'."\n"
                            .'- **30**（默认值）'."\n"
                            .'- **50**'."\n"
                            .'- **100**',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组ID',
                        'description' => '计算组ID。您可以通过调用[ListVirtualWareHouses](~~419058~~)接口查询目标地域下所有的计算组信息，包括计算组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vw-uf62965t8lt50****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。您可以通过调用[ListClusters](~~419072~~)接口查询目标地域下所有的集群信息，包括集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-bp1qx68m06981****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PaginationResponse<List<SlowQueryRecord>>',
                        'description' => 'PaginationResponse<List<SlowQueryRecord>>',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageNumber' => [
                                'description' => '页码，取值为大于0且不超过Integer数据类型的最大值，默认值为**1**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页记录数，取值：'."\n"
                                    .'- **30**（默认值）'."\n"
                                    .'- **50**'."\n"
                                    .'- **100**',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'Data' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'InitialQueryId' => [
                                            'title' => '查询ID',
                                            'description' => '查询ID。',
                                            'type' => 'string',
                                            'example' => '7c28bbbb-753b-4eba-98b1-efcbe2b9bdf6',
                                        ],
                                        'InitialUser' => [
                                            'title' => '查询用户',
                                            'description' => '查询用户。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'InitialAddress' => [
                                            'title' => '查询源地址',
                                            'description' => '发起查询的客户端IP地址。',
                                            'type' => 'string',
                                            'example' => '::ffff:10.1.XX.XX',
                                        ],
                                        'QueryDurationMs' => [
                                            'title' => '查询持续时间 毫秒',
                                            'description' => '查询耗时。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2000',
                                        ],
                                        'QueryStartTime' => [
                                            'title' => '查询起始时间 UTC时间',
                                            'description' => '开始时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                                            'type' => 'string',
                                            'example' => '2021-02-02T08:30:00Z',
                                        ],
                                        'Query' => [
                                            'description' => '查询语句。',
                                            'type' => 'string',
                                            'example' => 'select * from test order by score limit 1;',
                                        ],
                                        'ReadRows' => [
                                            'description' => '扫描数据行数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1000000',
                                        ],
                                        'ReadBytes' => [
                                            'description' => '扫描数据大小。单位：Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '9141300000',
                                        ],
                                        'ResultRows' => [
                                            'description' => '结果数据行数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'ResultBytes' => [
                                            'description' => '结果数据大小。单位：Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '8174',
                                        ],
                                        'MemoryUsage' => [
                                            'title' => '查询内存使用峰值',
                                            'description' => '查询内存使用峰值。单位：Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1024000000',
                                        ],
                                        'QueryState' => [
                                            'title' => '查询状态',
                                            'description' => '查询状态。取值说明：'."\n"
                                                .'- **QueryFinish**：查询结束。'."\n"
                                                .'- **Processing**：查询运行中。',
                                            'type' => 'string',
                                            'example' => 'QueryFinish',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '48CBEEBE-FA07-5A06-8BA4-567B92ADD6A0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"Data\\": [\\n    {\\n      \\"InitialQueryId\\": \\"7c28bbbb-753b-4eba-98b1-efcbe2b9bdf6\\",\\n      \\"InitialUser\\": \\"test\\",\\n      \\"InitialAddress\\": \\"::ffff:10.1.XX.XX\\",\\n      \\"QueryDurationMs\\": 2000,\\n      \\"QueryStartTime\\": \\"2021-02-02T08:30:00Z\\",\\n      \\"Query\\": \\"select * from test order by score limit 1;\\",\\n      \\"ReadRows\\": 1000000,\\n      \\"ReadBytes\\": 9141300000,\\n      \\"ResultRows\\": 1,\\n      \\"ResultBytes\\": 8174,\\n      \\"MemoryUsage\\": 1024000000,\\n      \\"QueryState\\": \\"QueryFinish\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"48CBEEBE-FA07-5A06-8BA4-567B92ADD6A0\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeSlowQueryResponse>\\n    <TotalCount>1</TotalCount>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <Data>\\n        <InitialQueryId>7c28bbbb-753b-4eba-98b1-efcbe2b9bdf6</InitialQueryId>\\n        <InitialUser>test</InitialUser>\\n        <InitialAddress>::ffff:10.1.XX.XX</InitialAddress>\\n        <QueryDurationMs>2000</QueryDurationMs>\\n        <QueryStartTime>2021-02-02T08:30:00Z</QueryStartTime>\\n        <Query>select * from test order by score limit 1;</Query>\\n        <ReadRows>1000000</ReadRows>\\n        <ReadBytes>9141300000</ReadBytes>\\n        <ResultRows>1</ResultRows>\\n        <ResultBytes>8174</ResultBytes>\\n        <MemoryUsage>1024000000</MemoryUsage>\\n        <QueryState>QueryFinish</QueryState>\\n    </Data>\\n    <RequestId>48CBEEBE-FA07-5A06-8BA4-567B92ADD6A0</RequestId>\\n</DescribeSlowQueryResponse>","errorExample":""}]',
            'title' => '查询计算组的慢查询',
        ],
        'DescribeSlowQueryTrend' => [
            'summary' => '调用DescribeSlowQueryTrend接口对指定云数据库ClickHouse云原生版的单个计算组进行慢查询趋势诊断操作。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '时间窗口起点 UTC时间 默认值当前时间减1小时',
                        'description' => '开始时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-02-02T08:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '时间窗口终点 UTC时间 默认值当前时间',
                        'description' => '结束时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-02-02T09:00:00Z',
                    ],
                ],
                [
                    'name' => 'QueryDurationMs',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询最小持续时间 毫秒 最小值1000 默认值1000',
                        'description' => '最短的查询耗时。最小值为**1000**，默认值为**1000**。单位：毫秒。返回参数将返回超过该耗时的查询。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1000',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组ID',
                        'description' => '计算组ID。您可以通过调用[ListVirtualWareHouses](~~419058~~)接口查询目标地域下所有的计算组信息，包括计算组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vw-uf62965t8lt50****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。您可以通过调用[ListClusters](~~419072~~)接口查询目标地域下所有的集群信息，包括集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-bp1qx68m06981****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<List<SlowQueryTrendRecord>>',
                        'description' => 'PlainResponse<List<SlowQueryTrendRecord>>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'StartTime' => [
                                            'title' => '统计时间窗口起点 UTC时间',
                                            'description' => '开始时间。格式：yyyy-MM-ddTHH:mmZ（UTC时间）。',
                                            'type' => 'string',
                                            'example' => '2021-02-02T08:00:00Z',
                                        ],
                                        'Count' => [
                                            'title' => '慢查询数量',
                                            'description' => '慢查询数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'AvgDurationMs' => [
                                            'title' => '平均查询耗时 毫秒',
                                            'description' => '平均查询耗时。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2000',
                                        ],
                                        'MaxDurationMs' => [
                                            'title' => '最大查询耗时 毫秒',
                                            'description' => '最大查询耗时。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3000',
                                        ],
                                        'MinDurationMs' => [
                                            'title' => '最小查询耗时 毫秒',
                                            'description' => '最小查询耗时。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1000',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '48CBEEBE-FA07-5A06-8BA4-567B92ADD6A0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"StartTime\\": \\"2021-02-02T08:00:00Z\\",\\n      \\"Count\\": 1,\\n      \\"AvgDurationMs\\": 2000,\\n      \\"MaxDurationMs\\": 3000,\\n      \\"MinDurationMs\\": 1000\\n    }\\n  ],\\n  \\"RequestId\\": \\"48CBEEBE-FA07-5A06-8BA4-567B92ADD6A0\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeSlowQueryTrendResponse>\\n    <Data>\\n        <StartTime>2021-02-02T08:00:00Z</StartTime>\\n        <Count>1</Count>\\n        <AvgDurationMs>2000</AvgDurationMs>\\n        <MaxDurationMs>3000</MaxDurationMs>\\n        <MinDurationMs>1000</MinDurationMs>\\n    </Data>\\n    <RequestId>48CBEEBE-FA07-5A06-8BA4-567B92ADD6A0</RequestId>\\n</DescribeSlowQueryTrendResponse>","errorExample":""}]',
            'title' => '查询计算组的慢查询趋势',
        ],
        'DescribeRunningQuery' => [
            'summary' => '调用DescribeRunningQuery接口对指定云数据库ClickHouse云原生版的单个计算组进行正在运行查询查看操作。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'QueryId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指定查询ID',
                        'description' => '查询ID。您可以通过调用[DescribeSlowQuery](~~452293~~)接口查询ID。'."\n"
                            .'>不填写该参数则查询所有查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c8cbcbaf-d4ab-4e74-900d-90d7c0aecaae',
                    ],
                ],
                [
                    'name' => 'QueryUser',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指定查询用户',
                        'description' => '查询用户。'."\n"
                            .'>不填写该参数则查询所有用户。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'QueryKeyWord',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指定查询关键字',
                        'description' => '查询关键字。'."\n"
                            .'>不填写该参数则查询所有语句。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'order by',
                    ],
                ],
                [
                    'name' => 'QueryDurationMs',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指定查询最小持续时间 毫秒 最小值1000 默认值1000',
                        'description' => '最短的查询耗时。最小值为**1000**，默认值为**1000**。单位：毫秒。返回参数将返回超过该耗时的查询。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1000',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页码 从1开始 默认值1',
                        'description' => '页码，取值为大于0且不超过Integer数据类型的最大值，默认值为**1**。',
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
                        'title' => '分页大小 默认值30',
                        'description' => '每页记录数，取值：'."\n"
                            .'- **30**（默认值）'."\n"
                            .'- **50**'."\n"
                            .'- **100**',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组ID',
                        'description' => '计算组ID。您可以通过调用[ListVirtualWareHouses](~~419058~~)接口查询目标地域下所有的计算组信息，包括计算组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vw-uf62965t8lt50****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。您可以通过调用[ListClusters](~~419072~~)接口查询目标地域下所有的集群信息，包括集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-bp1qx68m06981****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PaginationResponse<List<RunningQuery>>',
                        'description' => 'PaginationResponse<List<RunningQuery>>',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageNumber' => [
                                'description' => '页码，取值为大于0且不超过Integer数据类型的最大值，默认值为**1**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页记录数，取值：'."\n"
                                    .'- **30**（默认值）'."\n"
                                    .'- **50**'."\n"
                                    .'- **100**',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'Data' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'InitialQueryId' => [
                                            'title' => '查询ID',
                                            'description' => '查询ID。',
                                            'type' => 'string',
                                            'example' => '7c28bbbb-753b-4eba-98b1-efcbe2b9bdf6',
                                        ],
                                        'InitialUser' => [
                                            'title' => '查询用户',
                                            'description' => '查询用户。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'InitialAddress' => [
                                            'title' => '查询源地址',
                                            'description' => '发起查询的客户端IP地址。',
                                            'type' => 'string',
                                            'example' => '::ffff:10.1.XX.XX',
                                        ],
                                        'QueryDurationMs' => [
                                            'title' => '查询持续时间 毫秒',
                                            'description' => '查询耗时。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2000',
                                        ],
                                        'QueryStartTime' => [
                                            'title' => '查询起始时间 UTC时间',
                                            'description' => '查询开始时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                                            'type' => 'string',
                                            'example' => '2021-02-02T09:14:48Z',
                                        ],
                                        'Query' => [
                                            'description' => '查询语句。',
                                            'type' => 'string',
                                            'example' => 'select * from test order by score limit 1;',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '48CBEEBE-FA07-5A06-8BA4-567B92ADD6A0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"Data\\": [\\n    {\\n      \\"InitialQueryId\\": \\"7c28bbbb-753b-4eba-98b1-efcbe2b9bdf6\\",\\n      \\"InitialUser\\": \\"test\\",\\n      \\"InitialAddress\\": \\"::ffff:10.1.XX.XX\\",\\n      \\"QueryDurationMs\\": 2000,\\n      \\"QueryStartTime\\": \\"2021-02-02T09:14:48Z\\",\\n      \\"Query\\": \\"select * from test order by score limit 1;\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"48CBEEBE-FA07-5A06-8BA4-567B92ADD6A0\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeRunningQueryResponse>\\n    <TotalCount>1</TotalCount>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <Data>\\n        <InitialQueryId>7c28bbbb-753b-4eba-98b1-efcbe2b9bdf6</InitialQueryId>\\n        <InitialUser>test</InitialUser>\\n        <InitialAddress>::ffff:10.1.XX.XX</InitialAddress>\\n        <QueryDurationMs>2000</QueryDurationMs>\\n        <QueryStartTime>2021-02-02T09:14:48Z</QueryStartTime>\\n        <Query>select * from test order by score limit 1;</Query>\\n    </Data>\\n    <RequestId>48CBEEBE-FA07-5A06-8BA4-567B92ADD6A0</RequestId>\\n</DescribeRunningQueryResponse>","errorExample":""}]',
            'title' => '查询计算中正在运行的查询',
        ],
        'KillQuery' => [
            'summary' => '调用KillQuery接口对指定云数据库ClickHouse云原生版的单个计算组进行查询取消操作。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'QueryIds',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指定查询ID列表 英文逗号分隔 不指定则匹配所有查询',
                        'description' => '需要停止的查询ID。如果有多个ID，用“,”隔开。您可以通过调用[DescribeSlowQuery](~~452293~~)接口查询ID。'."\n"
                            .'>不填写该参数则停止所有的查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '21152382576****',
                    ],
                ],
                [
                    'name' => 'VirtualWareHouseId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组ID',
                        'description' => '计算组ID。您可以通过调用[ListVirtualWareHouses](~~419058~~)接口查询目标地域下所有的计算组信息，包括计算组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vw-uf62965t8lt50****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。您可以通过调用[ListClusters](~~419072~~)接口查询目标地域下所有的集群信息，包括集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-bp1qx68m06981****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse',
                        'description' => 'BaseResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '48CBEEBE-FA07-5A06-8BA4-567B92ADD6A0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"48CBEEBE-FA07-5A06-8BA4-567B92ADD6A0\\"\\n}","errorExample":""},{"type":"xml","example":"<KillQueryResponse>\\n    <RequestId>48CBEEBE-FA07-5A06-8BA4-567B92ADD6A0</RequestId>\\n</KillQueryResponse>","errorExample":""}]',
            'title' => '取消查询操作',
        ],
        'GetDistributedTablesBufferSize' => [
            'summary' => '调用GetDistributedTablesBufferSize接口对指定云数据库ClickHouse云原生版的单个计算组进行分布式表本地写入缓存大小统计操作。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'VirtualWareHouseId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '计算组ID',
                        'description' => '计算组ID。您可以通过调用[ListVirtualWareHouses](~~419058~~)接口查询目标地域下所有的计算组信息，包括计算组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vw-uf62965t8lt50****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。您可以通过调用[ListClusters](~~419072~~)接口查询目标地域下所有的集群信息，包括集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-bp1qx68m06981****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<DescribeDistributedTablesBufferSizeResponse>',
                        'description' => 'PlainResponse<DescribeDistributedTablesBufferSizeResponse>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'BufferSizeGiB' => [
                                        'title' => '分布式表本地Buffer空间 GiB',
                                        'description' => '分布式表本地写入数据缓存。单位：GiB。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '48CBEEBE-FA07-5A06-8BA4-567B92ADD6A0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": {\\n    \\"BufferSizeGiB\\": 100\\n  },\\n  \\"RequestId\\": \\"48CBEEBE-FA07-5A06-8BA4-567B92ADD6A0\\"\\n}","errorExample":""},{"type":"xml","example":"<GetDistributedTablesBufferSizeResponse>\\n    <Data>\\n        <BufferSizeGiB>100</BufferSizeGiB>\\n    </Data>\\n    <RequestId>48CBEEBE-FA07-5A06-8BA4-567B92ADD6A0</RequestId>\\n</GetDistributedTablesBufferSizeResponse>","errorExample":""}]',
            'title' => '统计计算组中分布式表本地写入缓存的大小',
        ],
        'CreateAccount' => [
            'summary' => '调用CreateAccount接口为云数据库ClickHouse云原生版集群创建数据库账号。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户明文密码',
                        'description' => '数据库账号的明文密码，取值说明：'."\n"
                            ."\n"
                            .'- 由大写字母、小写字母、数字、特殊字符中的任意三种组成。'."\n"
                            .'- !@#$%^&*()_+-=为特殊字符。'."\n"
                            .'- 长度为8~32个字符。'."\n"
                            ."\n"
                            .'>您需要通过Password或PasswordSha256Hex配置数据库账号的密码，两个参数不能同时为空。如果同时配置了Password和PasswordSha256Hex，以Password为准。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '123456Aa',
                    ],
                ],
                [
                    'name' => 'PasswordSha256Hex',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户密码sha256hex 优先使用明文密码',
                        'description' => '数据库账号的加密密码，对明文密码进行SHA256加密，并通过HEX编码。'."\n"
                            ."\n"
                            .'>您需要通过Password或PasswordSha256Hex配置数据库账号的密码，两个参数不能同时为空。如果同时配置了Password和PasswordSha256Hex，以Password为准。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'b17e1e0450dac425ea318253f6f852972d69731d6c7499c001468b695b6da219',
                    ],
                ],
                [
                    'name' => 'PrivilegeType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户权限类型 Normal:普通账户 | Readonly:只读账户 | Dml:DML账户-禁止DDL | Super:超级账户',
                        'description' => '数据库账号的权限类型。取值说明：'."\n"
                            ."\n"
                            .'- **Normal**：普通账户。'."\n"
                            .'- **Readonly**：只读账户。'."\n"
                            .'- **Dml**：DML账户（无DDL权限）。'."\n"
                            .'- **Super**：超级账户。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Normal',
                    ],
                ],
                [
                    'name' => 'Comment',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户备注信息',
                        'description' => '数据库账号的描述，取值说明：'."\n"
                            ."\n"
                            .'- 不能以http://或https://开头。'."\n"
                            .'- 长度为0~256个字符。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Account',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户名称',
                        'description' => '数据库账号，取值说明：'."\n"
                            ."\n"
                            .'- 名称唯一。'."\n"
                            .'- 包含小写字母、数字或下划线。'."\n"
                            .'- 以小写字母开头，以小写字母或数字结尾。'."\n"
                            .'- 长度为2~64个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-8vbsom12x476u****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse',
                        'description' => 'BaseResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8FE02123-D2A3-5CDE-939D-E9B477E00E68',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8FE02123-D2A3-5CDE-939D-E9B477E00E68\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAccountResponse>\\n    <RequestId>8FE02123-D2A3-5CDE-939D-E9B477E00E68</RequestId>\\n</CreateAccountResponse>","errorExample":""}]',
            'title' => '创建账号',
        ],
        'ListAccounts' => [
            'summary' => '调用ListAccounts接口查看云数据库ClickHouse云原生版集群的所有数据库账号信息。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp1qx68m06981****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<List<ClusterAccountModel>>',
                        'description' => 'PlainResponse<List<ClusterAccountModel>>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据概览。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Account' => [
                                            'title' => '账户名称',
                                            'description' => '数据库账号。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'PasswordSha256Hex' => [
                                            'title' => '账户密码sha256hex',
                                            'description' => '数据库账号的加密密码。',
                                            'type' => 'string',
                                            'example' => 'cd0289a263bf4146a2e00888321178234b65e8c050142074ad05683e3749****',
                                        ],
                                        'PrivilegeType' => [
                                            'title' => '账户权限类型',
                                            'description' => '数据库账号的权限类型。取值说明：'."\n"
                                                ."\n"
                                                .'- **Normal**：普通账户。'."\n"
                                                .'- **Readonly**：只读账户。'."\n"
                                                .'- **Dml**：DML账户（无DDL权限）。'."\n"
                                                .'- **Super**：超级账户。',
                                            'type' => 'string',
                                            'example' => 'Normal',
                                        ],
                                        'PrivilegeDescription' => [
                                            'title' => '账户权限描述',
                                            'description' => '数据库账号的权限类型说明。',
                                            'type' => 'string',
                                            'example' => '普通账户',
                                        ],
                                        'Comment' => [
                                            'title' => '账户备注',
                                            'description' => '数据库账号的描述。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E889A8CD-A4B4-5676-8EDB-80E06E072353',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"Account\\": \\"test\\",\\n      \\"PasswordSha256Hex\\": \\"cd0289a263bf4146a2e00888321178234b65e8c050142074ad05683e3749****\\",\\n      \\"PrivilegeType\\": \\"Normal\\",\\n      \\"PrivilegeDescription\\": \\"普通账户\\",\\n      \\"Comment\\": \\"test\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"E889A8CD-A4B4-5676-8EDB-80E06E072353\\"\\n}","errorExample":""},{"type":"xml","example":"<ListAccountsResponse>\\n    <Data>\\n        <Account>test</Account>\\n        <PasswordSha256Hex>cd0289a263bf4146a2e00888321178234b65e8c050142074ad05683e3749****</PasswordSha256Hex>\\n        <PrivilegeType>Normal</PrivilegeType>\\n        <PrivilegeDescription>普通账户</PrivilegeDescription>\\n        <Comment>test</Comment>\\n    </Data>\\n    <RequestId>E889A8CD-A4B4-5676-8EDB-80E06E072353</RequestId>\\n</ListAccountsResponse>","errorExample":""}]',
            'title' => '查看所有账号信息',
        ],
        'DescribeAccount' => [
            'summary' => '调用DescribeAccount接口查看云数据库ClickHouse云原生版集群的指定数据库账号信息。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'Account',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户名称',
                        'description' => '数据库账号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp108z124a8o7****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<ClusterAccountModel>',
                        'description' => 'PlainResponse<ClusterAccountModel>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'Account' => [
                                        'title' => '账户名称',
                                        'description' => '数据库账号。',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'PasswordSha256Hex' => [
                                        'title' => '账户密码sha256hex',
                                        'description' => '数据库账号的加密密码。',
                                        'type' => 'string',
                                        'example' => 'cd0289a263bf4146a2e00888321178234b65e8c050142074ad05683e3749****',
                                    ],
                                    'PrivilegeType' => [
                                        'title' => '账户权限类型',
                                        'description' => '数据库账号的权限类型。取值说明：'."\n"
                                            ."\n"
                                            .'- **Normal**：普通账户。'."\n"
                                            .'- **Readonly**：只读账户。'."\n"
                                            .'- **Dml**：DML账户-禁止DDL。'."\n"
                                            .'- **Super**：超级账户。',
                                        'type' => 'string',
                                        'example' => 'Super',
                                    ],
                                    'PrivilegeDescription' => [
                                        'title' => '账户权限描述',
                                        'description' => '数据库账号的权限类型说明。',
                                        'type' => 'string',
                                        'example' => '超级账户',
                                    ],
                                    'Comment' => [
                                        'title' => '账户备注',
                                        'description' => '数据库账号的描述。',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '92016D5B-899D-5B77-A8A7-EFE523D4C80A',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": {\\n    \\"Account\\": \\"test\\",\\n    \\"PasswordSha256Hex\\": \\"cd0289a263bf4146a2e00888321178234b65e8c050142074ad05683e3749****\\",\\n    \\"PrivilegeType\\": \\"Super\\",\\n    \\"PrivilegeDescription\\": \\"超级账户\\",\\n    \\"Comment\\": \\"test\\"\\n  },\\n  \\"RequestId\\": \\"92016D5B-899D-5B77-A8A7-EFE523D4C80A\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeAccountResponse>\\n    <Data>\\n        <Account>test</Account>\\n        <PasswordSha256Hex>cd0289a263bf4146a2e00888321178234b65e8c050142074ad05683e3749****</PasswordSha256Hex>\\n        <PrivilegeType>Super</PrivilegeType>\\n        <PrivilegeDescription>超级账户</PrivilegeDescription>\\n        <Comment>test</Comment>\\n    </Data>\\n    <RequestId>92016D5B-899D-5B77-A8A7-EFE523D4C80A</RequestId>\\n</DescribeAccountResponse>","errorExample":""}]',
            'title' => '查看指定账号信息',
        ],
        'ResetAccountPassword' => [
            'summary' => '调用ResetAccountPassword接口重置数据库账号的密码。本接口仅适用于云数据库ClickHouse的云原生版集群。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户明文密码',
                        'description' => '数据库账号的明文密码，取值说明：'."\n"
                            ."\n"
                            .'- 由大写字母、小写字母、数字、特殊字符中的任意三种组成。'."\n"
                            .'- !@#$%^&*()_+-=为特殊字符。'."\n"
                            .'- 长度为8~32个字符。'."\n"
                            ."\n"
                            .'>您需要通过Password或PasswordSha256Hex配置数据库账号的密码，两个参数不能同时为空。如果同时配置了Password和PasswordSha256Hex，以Password为准。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123456Aa',
                    ],
                ],
                [
                    'name' => 'PasswordSha256Hex',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户密码sha256hex 优先使用明文密码',
                        'description' => '数据库账号的加密密码，对明文密码进行SHA256加密，并通过HEX编码。'."\n"
                            .'>您需要通过Password或PasswordSha256Hex配置数据库账号的密码，两个参数不能同时为空。如果同时配置了Password和PasswordSha256Hex，以Password为准。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'b17e1e0450dac425ea318253f6f852972d69731d6c7499c001468b695b6da219',
                    ],
                ],
                [
                    'name' => 'Account',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户名称',
                        'description' => '数据库账号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp108z124a8o7****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse',
                        'description' => 'BaseResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5A6A077A-577C-536E-AC13-8E715D7A34C8',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5A6A077A-577C-536E-AC13-8E715D7A34C8\\"\\n}","errorExample":""},{"type":"xml","example":"<ResetAccountPasswordResponse>\\n    <RequestId>5A6A077A-577C-536E-AC13-8E715D7A34C8</RequestId>\\n</ResetAccountPasswordResponse>","errorExample":""}]',
            'title' => '重置账号密码',
        ],
        'ModifyAccountDescription' => [
            'summary' => '调用ModifyAccountDescription接口修改云数据库ClickHouse云原生版集群指定数据库账号的描述。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'Comment',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户备注',
                        'description' => '数据库账号的描述，取值说明：'."\n"
                            ."\n"
                            .'- 不能以http://和https://开头。'."\n"
                            .'- 长度为0~256个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Account',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户名称',
                        'description' => '数据库账号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp108z124a8o7****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse',
                        'description' => 'BaseResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAccountDescriptionResponse>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n</ModifyAccountDescriptionResponse>","errorExample":""}]',
            'title' => '修改账号描述',
        ],
        'ModifyAccountPrivilege' => [
            'summary' => '调用ModifyAccountPrivilege接口修改云数据库ClickHouse云原生版集群指定数据库账号的权限类型。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PrivilegeType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户权限类型 Normal:普通账户 | Readonly:只读账户 | Dml:DML账户-禁止DDL | Super:超级账户',
                        'description' => '数据库账号的权限类型。取值说明：'."\n"
                            ."\n"
                            .'- **Normal**：普通账户。'."\n"
                            .'- **Readonly**：只读账户。'."\n"
                            .'- **Dml**：DML账户（无DDL权限）。'."\n"
                            .'- **Super**：超级账户。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Normal',
                    ],
                ],
                [
                    'name' => 'Account',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户名称',
                        'description' => '数据库账号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp108z124a8o7****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse',
                        'description' => 'BaseResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2FED790E-FB61-4721-8C1C-07C627FA5A19',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAccountPrivilegeResponse>\\n    <RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>\\n</ModifyAccountPrivilegeResponse>","errorExample":""}]',
            'title' => '修改账号权限类型',
        ],
        'DeleteAccount' => [
            'summary' => '调用DeleteAccount接口删除云数据库ClickHouse云原生版集群的指定数据库账号。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'Account',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户名称',
                        'description' => '数据库账号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp108z124a8o7****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse',
                        'description' => 'BaseResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2FED790E-FB61-4721-8C1C-07C627FA5A19',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAccountResponse>\\n    <RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>\\n</DeleteAccountResponse>","errorExample":""}]',
            'title' => '删除指定账号',
        ],
        'DescribeClusterSecurityInfo' => [
            'summary' => '调用DescribeClusterSecurityInfo接口查看云数据库ClickHouse云原生版集群的白名单分组。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp1p816075e21****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<ClusterSecurityModel>',
                        'description' => 'PlainResponse<ClusterSecurityModel>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'SecurityIpGroups' => [
                                        'title' => '安全组列表',
                                        'description' => '白名单分组列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '白名单分组。',
                                            'type' => 'object',
                                            'properties' => [
                                                'GroupName' => [
                                                    'title' => '安全组名称',
                                                    'description' => '白名单分组名称。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'SecurityIps' => [
                                                    'title' => 'IP列表 英文逗号分隔',
                                                    'description' => '白名单分组下的IP列表。',
                                                    'type' => 'string',
                                                    'example' => '192.168.xx.xx,192.168.xx.xx',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2371CC7A-E9C3-5817-97C9-F6333D74BA6C',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": {\\n    \\"SecurityIpGroups\\": [\\n      {\\n        \\"GroupName\\": \\"test\\",\\n        \\"SecurityIps\\": \\"192.168.xx.xx,192.168.xx.xx\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"2371CC7A-E9C3-5817-97C9-F6333D74BA6C\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeClusterSecurityInfoResponse>\\n    <Data>\\n        <SecurityIpGroups>\\n            <GroupName>test</GroupName>\\n            <SecurityIps>192.168.xx.xx,192.168.xx.xx</SecurityIps>\\n        </SecurityIpGroups>\\n    </Data>\\n    <RequestId>2371CC7A-E9C3-5817-97C9-F6333D74BA6C</RequestId>\\n</DescribeClusterSecurityInfoResponse>","errorExample":""}]',
            'title' => '查看白名单分组',
        ],
        'PatchClusterSecurityIPGroup' => [
            'summary' => '调用PatchClusterSecurityIPGroup接口在白名单分组中添加IP地址。本接口仅适用于云数据库ClickHouse的云原生版集群。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '安全组名称',
                        'description' => '白名单分组名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'SecurityIps',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'IP列表 英文逗号分隔',
                        'description' => 'IP地址，支持如下两种格式：'."\n"
                            ."\n"
                            .'- IP地址形式，例如192.168.0.1表示允许此IP地址访问云数据库ClickHouse。'."\n"
                            .'- IP段形式：例如192.168.0.0/24表示允许从192.168.0.1到192.168.0.255的IP地址访问云数据库ClickHouse。'."\n"
                            .'>- 禁止输入IP: 0.0.0.0。'."\n"
                            .'- 设置为127.0.0.1代表禁止所有地址访问。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '192.168.xx.xx',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp108z124a8o7****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse',
                        'description' => 'BaseResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '05321590-BB65-4720-8CB6-8218E041CDD0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"05321590-BB65-4720-8CB6-8218E041CDD0\\"\\n}","errorExample":""},{"type":"xml","example":"<PatchClusterSecurityIPGroupResponse>\\n    <RequestId>05321590-BB65-4720-8CB6-8218E041CDD0</RequestId>\\n</PatchClusterSecurityIPGroupResponse>","errorExample":""}]',
            'title' => '在白名单分组中添加IP地址',
        ],
        'UpsertClusterSecurityIPGroup' => [
            'summary' => '调用UpsertClusterSecurityIPGroup接口重置白名单分组中的IP地址。本接口仅适用于云数据库ClickHouse的云原生版集群。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '安全组名称',
                        'description' => '白名单分组名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'SecurityIps',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'IP列表 英文逗号分隔',
                        'description' => 'IP地址，支持如下两种格式：'."\n"
                            ."\n"
                            .'- IP地址形式，例如192.168.0.1表示允许此IP地址访问云数据库ClickHouse。'."\n"
                            .'- IP段形式：例如192.168.0.0/24表示允许从192.168.0.1到192.168.0.255的IP地址访问云数据库ClickHouse。'."\n"
                            .'>- 禁止输入IP: 0.0.0.0。'."\n"
                            .'- 设置为127.0.0.1代表禁止所有地址访问。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '192.168.xx.xx',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp108z124a8o7****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse',
                        'description' => 'BaseResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A6DB2D3E-3E87-5804-9D42-9D51EC7A7D33',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A6DB2D3E-3E87-5804-9D42-9D51EC7A7D33\\"\\n}","errorExample":""},{"type":"xml","example":"<UpsertClusterSecurityIPGroupResponse>\\n    <RequestId>A6DB2D3E-3E87-5804-9D42-9D51EC7A7D33</RequestId>\\n</UpsertClusterSecurityIPGroupResponse>","errorExample":""}]',
            'title' => '重置白名单分组中的IP地址',
        ],
        'DeleteClusterSecurityIPGroup' => [
            'summary' => '调用DeleteClusterSecurityIPGroup接口删除云数据库ClickHouse云原生版集群的指定白名单分组。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '安全组名称',
                        'description' => '白名单分组名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp108z124a8o7****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以通过调用[DescribeRegions](~~416820~~)接口查询地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResponse',
                        'description' => 'BaseResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteClusterSecurityIPGroupResponse>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n</DeleteClusterSecurityIPGroupResponse>","errorExample":""}]',
            'title' => '删除白名单分组',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'clickhouse.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'clickhouse.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'clickhouse.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'clickhouse.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'clickhouse.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'clickhouse.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'clickhouse.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'clickhouse.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'clickhouse.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'me-central-1',
            'endpoint' => 'clickhouse.me-central-1.aliyuncs.com',
        ],
    ],
];
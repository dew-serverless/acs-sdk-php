<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Cassandra',
        'version' => '2019-01-01',
    ],
    'directories' => [
        [
            'id' => 58458,
            'title' => '实例管理',
            'type' => 'directory',
            'children' => [
                'CreateCluster',
                'CreateDataCenter',
                'DeleteCluster',
                'ModifyCluster',
                'ModifyInstanceMaintainTime',
                'ModifyInstanceType',
                'DescribeCluster',
                'DescribeClusters',
                'DescribeClusterStatus',
                'DescribeDeletedClusters',
                'DescribeDataCenter',
                'DescribeInstanceType',
                'GetCmsUrl',
                'PurgeCluster',
                'RebootCluster',
                'ResizeDiskSize',
                'ResizeNodeCount',
                'UpgradeClusterVersion',
            ],
        ],
        [
            'id' => 58477,
            'title' => '安全管理',
            'type' => 'directory',
            'children' => [
                'ModifyIpWhitelist',
                'ModifyIpWhitelistGroup',
                'ModifySecurityGroups',
                'DescribeIpWhitelist',
                'DescribeIpWhitelistGroups',
                'DescribeSecurityGroups',
            ],
        ],
        [
            'id' => 58484,
            'title' => '账号管理',
            'type' => 'directory',
            'children' => [
                'ModifyAccountPassword',
                'DescribeAccounts',
            ],
        ],
        [
            'id' => 58487,
            'title' => '可用区管理',
            'type' => 'directory',
            'children' => [
                'DeleteDataCenter',
                'ModifyDataCenter',
                'DescribeRegions',
                'DescribeDataCenters',
            ],
        ],
        [
            'id' => 58492,
            'title' => '备份管理',
            'type' => 'directory',
            'children' => [
                'CreateBackupPlan',
                'DeleteBackupPlan',
                'ModifyBackupPlan',
                'DescribeBackup',
                'DescribeBackupPlan',
                'DescribeBackups',
                'DescribeBackupPlans',
            ],
        ],
        [
            'id' => 58500,
            'title' => '连接点管理',
            'type' => 'directory',
            'children' => [
                'DescribeContactPoints',
                'AllocatePublicContactPoints',
                'ReleasePublicContactPoints',
            ],
        ],
        [
            'id' => 58504,
            'title' => 'Nodetool',
            'type' => 'directory',
            'children' => [
                'DeleteNodeToolExecutionHistory',
                'DescribeNodeToolExecutionHistory',
                'DescribeNodeToolExecutionHistories',
                'ExecuteNodeTool',
            ],
        ],
        [
            'id' => 58509,
            'title' => '参数管理',
            'type' => 'directory',
            'children' => [
                'ModifyParameter',
                'DescribeParameterModificationHistories',
                'DescribeParameters',
            ],
        ],
        [
            'id' => 58513,
            'title' => '仪表盘管理',
            'type' => 'directory',
            'children' => [
                'DescribeClusterDashboard',
            ],
        ],
        [
            'id' => 58515,
            'title' => '标签和资源',
            'type' => 'directory',
            'children' => [
                'ListTagResources',
                'ListTags',
                'UnTagResources',
                'MoveResourceGroup',
                'TagResources',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateCluster' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'PayType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '付费类型：'."\n"
                            ."\n"
                            .'- Subscription：包年包月'."\n"
                            .'- PayAsYouGo：按量付费'."\n"
                            ."\n"
                            .'> 按量付费实例无到期时间。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Subscription',
                    ],
                ],
                [
                    'name' => 'PeriodUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '	'."\n"
                            .'指定预付费实例为包年或者包月类型，取值：'."\n"
                            ."\n"
                            .'- Year：包年；'."\n"
                            .'- Month：包月。'."\n"
                            ."\n"
                            .'> 若付费类型为Subscription则该参数必须传入。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Year',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '付费周期，PayType（付费类型）为Subscription时为必选参数，单位为月，可选值：1-9，12，24，36 。'."\n"
                            ."\n"
                            .'> 付费类型为PayAsYouGo时不支持传入此参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'AutoRenew',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启自动续费，可选值：'."\n"
                            ."\n"
                            .'- true（开启）'."\n"
                            .'- false（不开启）'."\n"
                            ."\n"
                            .'默认值：false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'AutoRenewPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动续费周期，单位为月，可选值：'."\n"
                            ."\n"
                            .'- 1'."\n"
                            .'- 2'."\n"
                            .'- 3'."\n"
                            .'- 6'."\n"
                            .'- 12'."\n"
                            ."\n"
                            .'> 当AutoRenew为true时该参数必选。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3',
                        'default' => '',
                        'enum' => [
                            '1',
                            '2',
                            '3',
                            '6',
                            '12',
                        ],
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，大小写敏感、不超过64个ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID，可以通过接口DescribeRegions查看可用的地域ID。',
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
                        'description' => '	'."\n"
                            .'可用区ID，可调用DescribeRegions查询，使用此参数指定要创建实例的可用区。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou-h',
                    ],
                ],
                [
                    'name' => 'ClusterName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群名称。'."\n"
                            ."\n"
                            .'长度为2-128个字符，以大小写字母或中文开头，可包含数字，‘.’，‘_’或‘-’。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'apitest',
                    ],
                ],
                [
                    'name' => 'DataCenterName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据中心名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'apitest',
                    ],
                ],
                [
                    'name' => 'MajorVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主版本号。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '3.11',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群实例类型。可取值部分示例：'."\n"
                            ."\n"
                            .'- cassandra.c.large：2核 4G'."\n"
                            .'- cassandra.c.xlarge：4核 8G'."\n"
                            .'- cassandra.c.2xlarge：8核 16G',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cassandra.c.xlarge',
                    ],
                ],
                [
                    'name' => 'NodeCount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'DiskType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '磁盘存储类型。可取值示例：'."\n"
                            ."\n"
                            .'- cloud_ssd：SSD云盘'."\n"
                            .'- cloud_essd：ESSD云盘'."\n"
                            .'- cloud_efficiency：高效云盘'."\n"
                            .'- local_ssd_pro：本地SSD盘',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cloud_ssd',
                    ],
                ],
                [
                    'name' => 'DiskSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '磁盘存储大小。（每节点，单位：GB）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '160',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'VPC网络的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vpc-bp1oxxxxxxxxxxgzv26cd',
                    ],
                ],
                [
                    'name' => 'VswitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '虚拟交换机的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vsw-oqscxxxxxxxxxxxxx5e8c',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码。'."\n"
                            ."\n"
                            .'格式要求：大写、小写、数字、特殊字符占三种，长度8-32位；特殊字符为!@#$%^&*()_+-=',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Alibaba****!@#',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID，不设置时落在默认资源组里，可在资源组控制台查看资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-xxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ClusterId' => [
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'cds-bp1hy2ip****z46g',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '3E19E345-101D-4014-946C-A2055AEE1F26',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ClusterId\\": \\"cds-bp1hy2ip****z46g\\",\\n  \\"RequestId\\": \\"3E19E345-101D-4014-946C-A2055AEE1F26\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateClusterResponse>\\n<ClusterId>hb-bp16o0pd5****582s</ClusterId>\\n<RequestId>728C7EAF-4844-4D42-9BBE-DFFFBB77CF33</RequestId>\\n</CreateClusterResponse>","errorExample":""}]',
            'title' => '创建实例',
            'summary' => '创建一个Cassandra实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateDataCenter' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'PayType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '付费类型：'."\n"
                            ."\n"
                            .'- Subscription：包年包月'."\n"
                            .'- PayAsYouGo：按量付费'."\n"
                            ."\n"
                            .'> 按量付费实例无到期时间。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Subscription',
                    ],
                ],
                [
                    'name' => 'PeriodUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '	'."\n"
                            .'指定预付费实例为包年或者包月类型，取值：'."\n"
                            ."\n"
                            .'- Year：包年；'."\n"
                            .'- Month：包月。'."\n"
                            ."\n"
                            .'> 若付费类型为Subscription则该参数必须传入。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Year',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '付费周期，PayType（付费类型）为Subscription时为必选参数，单位为月，可选值：1-9，12，24，36 。'."\n"
                            ."\n"
                            .'> 付费类型为PayAsYouGo时不支持传入此参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '12',
                        'enum' => [
                            '1',
                            '2',
                            '3',
                            '4',
                            '5',
                            '6',
                            '7',
                            '8',
                            '9',
                            '12',
                            '24',
                            '36',
                        ],
                    ],
                ],
                [
                    'name' => 'AutoRenew',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启自动续费，可选值：'."\n"
                            ."\n"
                            .'- true（开启）'."\n"
                            .'- false（不开启）'."\n"
                            ."\n"
                            .'默认值：false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                        'enum' => [
                            'true',
                            'false',
                        ],
                    ],
                ],
                [
                    'name' => 'AutoRenewPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动续费周期，单位为月，可选值：'."\n"
                            ."\n"
                            .'- 1'."\n"
                            .'- 2'."\n"
                            .'- 3'."\n"
                            .'- 6'."\n"
                            .'- 12'."\n"
                            ."\n"
                            .'> 当AutoRenew为true时该参数必选。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '12',
                        'enum' => [
                            '1',
                            '2',
                            '3',
                            '4',
                            '5',
                            '6',
                            '12',
                        ],
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，大小写敏感、不超过64个ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'ETnLKlblzczshOTUbOC***ioIUBoiB',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID，可以通过接口DescribeRegions查看可用的地域ID。',
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
                        'description' => '可用区ID，可调用DescribeRegions查询，使用此参数指定要创建实例的可用区。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou-h',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp113rmn****2uy9',
                    ],
                ],
                [
                    'name' => 'DataCenterName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据中心名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'apitest',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群实例类型。可取值部分示例：'."\n"
                            ."\n"
                            .'- cassandra.c.large：2核 4'."\n"
                            .'- Gcassandra.c.xlarge：4核 8G'."\n"
                            .'- cassandra.c.2xlarge：8核 16G',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cassandra.c.large',
                    ],
                ],
                [
                    'name' => 'NodeCount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'DiskType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '磁盘存储类型。可取值示例：'."\n"
                            ."\n"
                            .'- cloud_ssd：SSD云盘'."\n"
                            .'- cloud_essd：ESSD云盘'."\n"
                            .'- cloud_efficiency：高效云盘'."\n"
                            .'- local_ssd_pro：本地SSD盘',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cloud_ssd',
                    ],
                ],
                [
                    'name' => 'DiskSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '磁盘存储大小（每节点，单位GB）。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '160',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'VPC网络的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vpc-bp1oxxxxxxxxxxgzv26cf',
                    ],
                ],
                [
                    'name' => 'VswitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '虚拟交换机的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vsw-oqscxxxxxxxxxxxxx5e8c',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'DataCenterId' => [
                                'description' => '集群数据中心ID。',
                                'type' => 'string',
                                'example' => 'cn-hangzhou-g',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '3E19E345-101D-4014-946C-A2055AEE1F26',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DataCenterId\\": \\"cn-hangzhou-g\\",\\n  \\"RequestId\\": \\"3E19E345-101D-4014-946C-A2055AEE1F26\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDataCenterResponse>\\n<DataCenterId>cn-hangzhou-g</DataCenterId>\\n<RequestId>728C7EAF-4844-4D42-9BBE-DFFFBB77CF33</RequestId>\\n</CreateDataCenterResponse>","errorExample":""}]',
            'title' => '为集群添加数据中心',
            'summary' => '调用CreateDataCenter为集群添加数据中心。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteCluster' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp1hy2ipk****46k',
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
                                'example' => 'EC9C10D0-B12F-41B0-A237-968848BBC167',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9C10D0-B12F-41B0-A237-968848BBC167\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteClusterResponse>\\r\\n    <RequestId>EC9C10D0-B12F-41B0-A237-968848BBC167</RequestId>\\r\\n</DeleteClusterResponse>","errorExample":""}]',
            'title' => '删除指定ID集群',
            'summary' => '调用DeleteCluster删除指定ID集群。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyCluster' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => ' cds-bp1b136j****5d58',
                    ],
                ],
                [
                    'name' => 'ClusterName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Cassandra_test',
                    ],
                ],
                [
                    'name' => 'ConfirmProductOffline',
                    'in' => 'query',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '39F3F7DF-435B-47C1-832C-369BF9661A67',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"39F3F7DF-435B-47C1-832C-369BF9661A67\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyClusterResponse>\\r\\n<RequestId>39F3F7DF-435B-47C1-832C-369BF9661A67</RequestId>\\r\\n</ModifyClusterResponse>","errorExample":""}]',
            'title' => '修改集群名称',
            'summary' => '调用ModifyCluster修改集群名称。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyInstanceMaintainTime' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改运维时间的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp1b**6jco895****',
                    ],
                ],
                [
                    'name' => 'MaintainStartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例运维开始时间格式为HH:mm。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2:00',
                    ],
                ],
                [
                    'name' => 'MaintainEndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例运维结束时间格式为HH:mm。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '4:00',
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
                                'example' => 'C9085433-A56A-4089-B49A-DF5A4E2B7B06',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C9085433-A56A-4089-B49A-DF5A4E2B7B06\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyInstanceMaintainTimeResponse>\\r\\n<RequestId>C9085433-A56A-4089-B49A-DF5A4E2B7B06</RequestId>\\r\\n</ModifyInstanceMaintainTimeResponse>","errorExample":""}]',
            'title' => '修改实例运维起始时间',
            'summary' => '调用ModifyInstanceMaintainTime修改实例运维起始时间。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyInstanceType' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-uf6ig2gf****7pw7',
                    ],
                ],
                [
                    'name' => 'DataCenterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群数据中心ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shanghai-e',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群实例类型。可取值部分示例：'."\n"
                            ."\n"
                            .'- cassandra.c.large：2核 4G'."\n"
                            .'- cassandra.c.xlarge：4核 8G'."\n"
                            .'- cassandra.c.2xlarge：8核 16G',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cassandra.g.xlarge',
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
                                'example' => 'BC262FE3-91ED-4FE7-BD75-190B62D8BABC',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BC262FE3-91ED-4FE7-BD75-190B62D8BABC\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyInstanceTypeResponse>\\r\\n<RequestId>BC262FE3-91ED-4FE7-BD75-190B62D8BABC</RequestId>\\r\\n</ModifyInstanceTypeResponse>","errorExample":""}]',
            'title' => '修改实例规格类型',
            'summary' => '调用ModifyInstanceType修改实例规格类型。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeCluster' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群 ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp1b136j****5d58',
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
                                'example' => '17E2B462-5FD3-4A0C-AF13-225C66E47BD5',
                            ],
                            'Cluster' => [
                                'description' => '集群信息列表。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '集群运行状态，可取值示例：'."\n"
                                            ."\n"
                                            .'- Creating：创建中'."\n"
                                            .'- CreateFailed：创建失败'."\n"
                                            .'- Running：运行中'."\n"
                                            .'- Deleting：删除中'."\n"
                                            .'- DeleteFailed：删除失败'."\n"
                                            .'- Deleted：已删除',
                                        'type' => 'string',
                                        'example' => 'Running',
                                    ],
                                    'ExpireTime' => [
                                        'description' => '集群到期时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC 通用标准时，以Z来标识）。',
                                        'type' => 'string',
                                        'example' => '2019-10-20T16:02:34Z',
                                    ],
                                    'MaintainStartTime' => [
                                        'description' => '实例运维开始时间。格式：HH:mmZ（UTC 通用标准时，以Z来标识）。',
                                        'type' => 'string',
                                        'example' => '2:00Z',
                                    ],
                                    'PayType' => [
                                        'description' => '付费类型，可取值：'."\n"
                                            ."\n"
                                            .'- Subscription：包年包月'."\n"
                                            .'- PayAsYouGo：按量付费'."\n"
                                            ."\n"
                                            .'> 按量付费实例无到期时间'."\n",
                                        'type' => 'string',
                                        'example' => 'PayAsYouGo',
                                    ],
                                    'MaintainEndTime' => [
                                        'description' => '实例运维结束时间。格式：HH:mmZ（UTC 通用标准时，以Z来标识）。',
                                        'type' => 'string',
                                        'example' => '4:00Z',
                                    ],
                                    'LockMode' => [
                                        'description' => '锁定模式：'."\n"
                                            ."\n"
                                            .'- None：未锁定'."\n"
                                            .'- Expired：集群订阅到期锁定'."\n"
                                            .'- DiskFull：磁盘已满锁定',
                                        'type' => 'string',
                                        'example' => 'None',
                                    ],
                                    'AutoRenewPeriod' => [
                                        'description' => '自动续费周期。'."\n"
                                            ."\n"
                                            .'- 按月购买：则自动续费周期为 1 个月。'."\n"
                                            .'- 按年购买：则自动续费周期为 1 年（12个月）。'."\n"
                                            ."\n"
                                            .'> 按量付费实例无到期时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '12',
                                    ],
                                    'MinorVersion' => [
                                        'description' => '集群小版本号。',
                                        'type' => 'string',
                                        'example' => '3.11.7',
                                    ],
                                    'DataCenterCount' => [
                                        'description' => '数据中心个数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'IsLatestVersion' => [
                                        'description' => '当前小版本是否为最新版本。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'AutoRenewal' => [
                                        'description' => '是否自动续费，可取值：true/false'."\n"
                                            .'> 按量付费实例无到期时间',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源所在的资源组id。',
                                        'type' => 'string',
                                        'example' => 'rg-xxxxxxxxxxx',
                                    ],
                                    'ClusterName' => [
                                        'description' => '集群名称。'."\n"
                                            ."\n"
                                            .'长度为2-128个字符，以大小写字母或中文开头，可包含数字，‘.’，‘_’或‘-’。',
                                        'type' => 'string',
                                        'example' => 'Cassandra-test',
                                    ],
                                    'ConfirmProductOffline' => [
                                        'type' => 'boolean',
                                    ],
                                    'MajorVersion' => [
                                        'description' => '集群主版本号。',
                                        'type' => 'string',
                                        'example' => '3.11',
                                    ],
                                    'CreatedTime' => [
                                        'description' => '集群创建时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC 通用标准时，以Z来标识）。',
                                        'type' => 'string',
                                        'example' => '2019-09-20T16:02:34Z',
                                    ],
                                    'ClusterId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'cds-bp1b136j****5d56',
                                    ],
                                    'Tags' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Tag' => [
                                                'description' => '标签',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Key' => [
                                                            'description' => '标签键',
                                                            'type' => 'string',
                                                            'example' => 'test-key',
                                                        ],
                                                        'Value' => [
                                                            'description' => '标签值',
                                                            'type' => 'string',
                                                            'example' => 'test-value',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"17E2B462-5FD3-4A0C-AF13-225C66E47BD5\\",\\n  \\"Cluster\\": {\\n    \\"Status\\": \\"Running\\",\\n    \\"ExpireTime\\": \\"2019-10-20T16:02:34Z\\",\\n    \\"MaintainStartTime\\": \\"2:00Z\\",\\n    \\"PayType\\": \\"PayAsYouGo\\",\\n    \\"MaintainEndTime\\": \\"4:00Z\\",\\n    \\"LockMode\\": \\"None\\",\\n    \\"AutoRenewPeriod\\": 12,\\n    \\"MinorVersion\\": \\"3.11.7\\",\\n    \\"DataCenterCount\\": 1,\\n    \\"IsLatestVersion\\": true,\\n    \\"AutoRenewal\\": true,\\n    \\"ResourceGroupId\\": \\"rg-xxxxxxxxxxx\\",\\n    \\"ClusterName\\": \\"Cassandra-test\\",\\n    \\"MajorVersion\\": \\"3.11\\",\\n    \\"CreatedTime\\": \\"2019-09-20T16:02:34Z\\",\\n    \\"ClusterId\\": \\"cds-bp1b136j****5d56\\",\\n    \\"Tags\\": {\\n      \\"Tag\\": [\\n        {\\n          \\"Key\\": \\"test-key\\",\\n          \\"Value\\": \\"test-value\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>17E2B462-5FD3-4A0C-AF13-225C66E47BD5</RequestId>\\n<Cluster>\\n    <Status>Running</Status>\\n    <MajorVersion>3.11</MajorVersion>\\n    <AutoRenewPeriod>12</AutoRenewPeriod>\\n    <CreatedTime>2019-09-20T16:02:34Z</CreatedTime>\\n    <ClusterId>cds-bp1b136j****5d56</ClusterId>\\n    <MinorVersion>3.11.7</MinorVersion>\\n    <PayType>PayAsYouGo</PayType>\\n    <LockMode>None</LockMode>\\n    <IsLatestVersion>true</IsLatestVersion>\\n    <MaintainEndTime>4:00Z</MaintainEndTime>\\n    <AutoRenewal>true</AutoRenewal>\\n    <DataCenterCount>1</DataCenterCount>\\n    <ClusterName>Cassandra-test</ClusterName>\\n    <ExpireTime>2019-10-20T16:02:34Z</ExpireTime>\\n    <MaintainStartTime>2:00Z</MaintainStartTime>\\n    <ResourceGroupId>rg-xxxxxxxxxxx</ResourceGroupId>\\n    <Tags>\\n        <Tag>\\n            <Value>test-value</Value>\\n            <Key>test-key</Key>\\n        </Tag>\\n    </Tags>\\n</Cluster>","errorExample":""}]',
            'title' => '查询实例的详细信息',
            'summary' => '查询Cassandra实例的详细信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeClusters' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID，如cn-hangzhou。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，取值：大于0且不超过Integer的最大值。'."\n"
                            ."\n"
                            .'默认值：1。',
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
                        'description' => '每页记录数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'ClusterName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组Id，可在资源组控制台查看可用资源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-xxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '自定义标签key',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'key',
                                ],
                                'Value' => [
                                    'description' => '自定义标签value',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'value',
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
                            'PageSize' => [
                                'description' => '每页记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4EA95B55-58AB-469E-BD8E-5B1F9EEB1683',
                            ],
                            'PageNumber' => [
                                'description' => '页码，取值：大于0且不超过Integer的最大值。'."\n"
                                    ."\n"
                                    .'默认值：1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '查询集群总记录数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '3',
                            ],
                            'Clusters' => [
                                'type' => 'object',
                                'properties' => [
                                    'Cluster' => [
                                        'description' => '集群查询结果列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '集群运行状态，取值示例：'."\n"
                                                        .'- Creating：创建中'."\n"
                                                        .'- CreateFailed：创建失败'."\n"
                                                        .'- Running：运行中'."\n"
                                                        .'- Deleting：删除中'."\n"
                                                        .'- DeleteFailed：删除失败'."\n"
                                                        .'- Deleted：已删除',
                                                    'type' => 'string',
                                                    'example' => 'Running',
                                                ],
                                                'ExpireTime' => [
                                                    'description' => '集群到期时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC 通用标准时，以Z来标识）。'."\n"
                                                        .'> 按量付费实例无到期时间',
                                                    'type' => 'string',
                                                    'example' => '2019-10-20T16:02:34Z',
                                                ],
                                                'PayType' => [
                                                    'description' => '付费类型，可取值：'."\n"
                                                        ."\n"
                                                        .'- Subscription：包年包月'."\n"
                                                        .'- PayAsYouGo：按量付费'."\n"
                                                        ."\n"
                                                        .'> 按量付费实例无到期时间',
                                                    'type' => 'string',
                                                    'example' => 'PayAsYouGo',
                                                ],
                                                'LockMode' => [
                                                    'description' => '锁定模式。'."\n"
                                                        ."\n"
                                                        .'- None：未锁定'."\n"
                                                        .'- Expired：集群订阅到期锁定'."\n"
                                                        .'- DiskFull：磁盘已满锁定',
                                                    'type' => 'string',
                                                    'example' => 'None',
                                                ],
                                                'MinorVersion' => [
                                                    'description' => '小版本号。',
                                                    'type' => 'string',
                                                    'example' => '3.11.5',
                                                ],
                                                'AutoRenewPeriod' => [
                                                    'description' => '自动续费周期。'."\n"
                                                        .'- 按月购买：则自动续费周期为 1 个月。'."\n"
                                                        .'- 按年购买：则自动续费周期为 1 年（12个月）。'."\n"
                                                        ."\n"
                                                        .'> 按量付费实例无此返回值'."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '12',
                                                ],
                                                'DataCenterCount' => [
                                                    'description' => '数据中心个数。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'AutoRenewal' => [
                                                    'description' => '是否自动续费，可取值：true/false'."\n"
                                                        .'> 按量付费实例无此返回值',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'ResourceGroupId' => [
                                                    'description' => '资源所在的资源组id。',
                                                    'type' => 'string',
                                                    'example' => 'rg-xxxxxxxxxxx',
                                                ],
                                                'ClusterName' => [
                                                    'description' => '集群名称。',
                                                    'type' => 'string',
                                                    'example' => 'Cassandra-test',
                                                ],
                                                'MajorVersion' => [
                                                    'description' => '主版本号。',
                                                    'type' => 'string',
                                                    'example' => '3.11',
                                                ],
                                                'CreatedTime' => [
                                                    'description' => '集群创建时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC 通用标准时，以Z来标识）。',
                                                    'type' => 'string',
                                                    'example' => '2019-09-20T16:02:34Z',
                                                ],
                                                'ClusterId' => [
                                                    'description' => '集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'cds-bp1e4e32****z75c',
                                                ],
                                                'Tags' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Tag' => [
                                                            'description' => '标签',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Key' => [
                                                                        'description' => '标签键',
                                                                        'type' => 'string',
                                                                        'example' => 'test-key',
                                                                    ],
                                                                    'Value' => [
                                                                        'description' => '标签值',
                                                                        'type' => 'string',
                                                                        'example' => 'test-value',
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
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"4EA95B55-58AB-469E-BD8E-5B1F9EEB1683\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 3,\\n  \\"Clusters\\": {\\n    \\"Cluster\\": [\\n      {\\n        \\"Status\\": \\"Running\\",\\n        \\"ExpireTime\\": \\"2019-10-20T16:02:34Z\\",\\n        \\"PayType\\": \\"PayAsYouGo\\",\\n        \\"LockMode\\": \\"None\\",\\n        \\"MinorVersion\\": \\"3.11.5\\",\\n        \\"AutoRenewPeriod\\": 12,\\n        \\"DataCenterCount\\": 1,\\n        \\"AutoRenewal\\": true,\\n        \\"ResourceGroupId\\": \\"rg-xxxxxxxxxxx\\",\\n        \\"ClusterName\\": \\"Cassandra-test\\",\\n        \\"MajorVersion\\": \\"3.11\\",\\n        \\"CreatedTime\\": \\"2019-09-20T16:02:34Z\\",\\n        \\"ClusterId\\": \\"cds-bp1e4e32****z75c\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"test-key\\",\\n              \\"Value\\": \\"test-value\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeClustersResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>4EA95B55-58AB-469E-BD8E-5B1F9EEB1683</RequestId>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <Clusters>\\n        <Cluster>\\n            <Status>Running</Status>\\n            <MajorVersion>3.11</MajorVersion>\\n            <AutoRenewPeriod>12</AutoRenewPeriod>\\n            <CreatedTime>2019-09-20T16:02:34Z</CreatedTime>\\n            <AutoRenewal>true</AutoRenewal>\\n            <ClusterId>cds-bp1e4e32****z75c</ClusterId>\\n            <DataCenterCount>1</DataCenterCount>\\n            <ClusterName>Cassandra-test</ClusterName>\\n            <MinorVersion>3.11.5</MinorVersion>\\n            <PayType>PayAsYouGo</PayType>\\n            <LockMode>None</LockMode>\\n            <ExpireTime>2019-10-20T16:02:34Z</ExpireTime>\\n        </Cluster>\\n        <Cluster>\\n            <Tags>\\n                <Tag>\\n                    <Value>test-value</Value>\\n                    <Key>test-key</Key>\\n                </Tag>\\n            </Tags>\\n        </Cluster>\\n    </Clusters>\\n</DescribeClustersResponse>","errorExample":""}]',
            'title' => 'DescribeClusters',
            'summary' => '调用DescribeClusters查询指定地域下的所有集群信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeClusterStatus' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp1b136j****5d59',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '集群运行状态，取值部分示例：'."\n"
                                    ."\n"
                                    .'- Creating：创建中'."\n"
                                    .'- CreateFailed：创建失败'."\n"
                                    .'- Running：运行中'."\n"
                                    .'- Deleting：删除中'."\n"
                                    .'- DeleteFailed：删除失败'."\n"
                                    .'- Deleted：已删除',
                                'type' => 'string',
                                'example' => 'Running',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '3AC5F451-8B0F-47B4-9733-4A09C8838AD4',
                            ],
                            'CreatedTime' => [
                                'description' => '集群创建时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC 通用标准时，以Z来标识）。',
                                'type' => 'string',
                                'example' => '2020-02-26T01:30:40Z',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"Running\\",\\n  \\"RequestId\\": \\"3AC5F451-8B0F-47B4-9733-4A09C8838AD4\\",\\n  \\"CreatedTime\\": \\"2020-02-26T01:30:40Z\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeClusterStatusResponse>\\n<Status>Running</Status>\\n<CreatedTime>2020-02-26T01:30:40Z</CreatedTime>\\n<RequestId>BEEDFA38-213F-4DF8-810D-702DFF5FF2A6</RequestId>\\n</DescribeClusterStatusResponse>","errorExample":""}]',
            'title' => '查询集群的运行状态',
            'summary' => '调用DescribeClusterStatus查询集群的运行状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDeletedClusters' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID，可以通过接口DescribeRegions查看可用的地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，取值：大于0且不超过Integer的最大值。'."\n"
                            ."\n"
                            .'默认值：1。',
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
                        'description' => '分页查询时设置的每页行数。',
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
                            'PageSize' => [
                                'description' => '每页记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '018F3C6E-2F9F-4181-8602-4AB4FB86F4ED',
                            ],
                            'PageNumber' => [
                                'description' => '页码，取值：大于0且不超过Integer的最大值。'."\n"
                                    ."\n"
                                    .'默认值：1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '查询集群总记录数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '3',
                            ],
                            'Clusters' => [
                                'type' => 'object',
                                'properties' => [
                                    'Cluster' => [
                                        'description' => '已删除集群列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '集群运行状态，可取值部分示例：'."\n"
                                                        ."\n"
                                                        .'- Creating：创建中'."\n"
                                                        .'- CreateFailed：创建失败'."\n"
                                                        .'- Running：运行中'."\n"
                                                        .'- Deleting：删除中'."\n"
                                                        .'- DeleteFailed：删除失败'."\n"
                                                        .'- Deleted：已删除',
                                                    'type' => 'string',
                                                    'example' => 'Deleted',
                                                ],
                                                'DataCenterCount' => [
                                                    'description' => '集群数据中心个数。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'ExpireTime' => [
                                                    'description' => '集群到期时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC 通用标准时，以Z来标识）。',
                                                    'type' => 'string',
                                                    'example' => '2019-10-09T20:29:27Z',
                                                ],
                                                'PayType' => [
                                                    'description' => '付费类型，可取值：'."\n"
                                                        ."\n"
                                                        .'- Subscription：包年包月'."\n"
                                                        .'- PayAsYouGo：按量付费'."\n"
                                                        ."\n"
                                                        .'> 按量付费实例无到期时间'."\n",
                                                    'type' => 'string',
                                                    'example' => 'PayAsYouGo',
                                                ],
                                                'ClusterName' => [
                                                    'description' => '集群名称。',
                                                    'type' => 'string',
                                                    'example' => 'Cassandra-test-wjk',
                                                ],
                                                'MajorVersion' => [
                                                    'description' => '集群主版本号。',
                                                    'type' => 'string',
                                                    'example' => '3.11',
                                                ],
                                                'CreatedTime' => [
                                                    'description' => '集群创建时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC 通用标准时，以Z来标识）。',
                                                    'type' => 'string',
                                                    'example' => '2019-10-09T14:59:31Z',
                                                ],
                                                'MinorVersion' => [
                                                    'description' => '集群小版本号。',
                                                    'type' => 'string',
                                                    'example' => '3.11.5',
                                                ],
                                                'ClusterId' => [
                                                    'description' => '集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'cds-bp1hy2ip****z46g',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"018F3C6E-2F9F-4181-8602-4AB4FB86F4ED\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 3,\\n  \\"Clusters\\": {\\n    \\"Cluster\\": [\\n      {\\n        \\"Status\\": \\"Deleted\\",\\n        \\"DataCenterCount\\": 1,\\n        \\"ExpireTime\\": \\"2019-10-09T20:29:27Z\\",\\n        \\"PayType\\": \\"PayAsYouGo\\",\\n        \\"ClusterName\\": \\"Cassandra-test-wjk\\",\\n        \\"MajorVersion\\": \\"3.11\\",\\n        \\"CreatedTime\\": \\"2019-10-09T14:59:31Z\\",\\n        \\"MinorVersion\\": \\"3.11.5\\",\\n        \\"ClusterId\\": \\"cds-bp1hy2ip****z46g\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDeletedClustersResponse>\\n<PageNumber>1</PageNumber>\\n<TotalCount>3</TotalCount>\\n<Clusters>\\n    <Cluster>\\n        <Status>Deleted</Status>\\n        <CreatedTime>2019-10-09T14:59:31Z</CreatedTime>\\n        <MinorVersion>3.11.5</MinorVersion>\\n        <ClusterName>Cassandra-test-wjk</ClusterName>\\n        <ClusterId>cds-bp1hy2ip****z46g</ClusterId>\\n        <ExpireTime>2019-10-09T20:29:27Z</ExpireTime>\\n        <DataCenterCount>1</DataCenterCount>\\n        <PayType>PayAsYouGo</PayType>\\n        <MajorVersion>3.11</MajorVersion>\\n    </Cluster>\\n    <Cluster>\\n        <Status>Deleted</Status>\\n        <CreatedTime>2019-09-24T20:37:17Z</CreatedTime>\\n        <MinorVersion>3.11.5</MinorVersion>\\n        <ClusterName>baitu-resize-disk-size</ClusterName>\\n        <ClusterId>cds-bp1354yf****35bw</ClusterId>\\n        <ExpireTime>2019-10-08T20:16:22Z</ExpireTime>\\n        <DataCenterCount>1</DataCenterCount>\\n        <PayType>PayAsYouGo</PayType>\\n        <MajorVersion>3.11</MajorVersion>\\n    </Cluster>\\n    <Cluster>\\n        <Status>Deleted</Status>\\n        <CreatedTime>2019-09-23T11:45:48Z</CreatedTime>\\n        <MinorVersion>3.11.5</MinorVersion>\\n        <ClusterName>baitu-4c16gaaa</ClusterName>\\n        <ClusterId>cds-bp1ia8ui****8dle</ClusterId>\\n        <ExpireTime>2019-10-08T20:16:19Z</ExpireTime>\\n        <DataCenterCount>1</DataCenterCount>\\n        <PayType>PayAsYouGo</PayType>\\n        <MajorVersion>3.11</MajorVersion>\\n    </Cluster>\\n</Clusters>\\n<PageSize>10</PageSize>\\n<RequestId>018F3C6E-2F9F-4181-8602-4AB4FB86F4ED</RequestId>\\n</DescribeDeletedClustersResponse>","errorExample":""}]',
            'title' => '查询已删除的集群列表',
            'summary' => '调用DescribeDeletedClusters查询已删除的集群列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDataCenter' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-t4n98w89z77*****',
                    ],
                ],
                [
                    'name' => 'DataCenterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据中心Id，可通过DescribeDataCenters获得相应的数据中心Id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ap-southeast-1a',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'VpcId' => [
                                'description' => 'VPC网络的ID。',
                                'type' => 'string',
                                'example' => 'vpc-bp1qitxqe1m5r****4mng',
                            ],
                            'Status' => [
                                'description' => '集群运行状态，可取值部分示例：'."\n"
                                    .'Creating：创建中'."\n"
                                    .'CreateFailed：创建失败'."\n"
                                    .'Running：运行中'."\n"
                                    .'Deleting：删除中'."\n"
                                    .'DeleteFailed：删除失败'."\n"
                                    .'Deleted：已删除',
                                'type' => 'string',
                                'example' => 'Running',
                            ],
                            'ExpireTime' => [
                                'description' => '集群订阅到期时间。格式：HH:mmZ（UTC 通用标准时，以Z来标识）。',
                                'type' => 'string',
                                'example' => '2020-11-17T00:00:00Z',
                            ],
                            'VswitchId' => [
                                'description' => '虚拟交换机的ID。',
                                'type' => 'string',
                                'example' => 'vsw-bp13e9ynz3jpy****hqlm',
                            ],
                            'PayType' => [
                                'description' => '付费类型：'."\n"
                                    .'Subscription：包年包月'."\n"
                                    .'PayAsYouGo：按量付费'."\n"
                                    .'<note>按量付费实例无到期时间</note>',
                                'type' => 'string',
                                'example' => 'Subscription',
                            ],
                            'DiskSize' => [
                                'description' => '磁盘存储大小（每节点，单位GB）。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '160',
                            ],
                            'DiskType' => [
                                'description' => '磁盘存储类型。可取值示例：'."\n"
                                    .'cloud_ssd：SSD云盘'."\n"
                                    .'cloud_essd：ESSD云盘'."\n"
                                    .'cloud_efficiency：高效云盘'."\n"
                                    .'local_ssd_pro：本地SSD盘',
                                'type' => 'string',
                                'example' => 'cloud_ssd',
                            ],
                            'InstanceType' => [
                                'description' => '集群实例类型。可取值部分示例：'."\n"
                                    .'cassandra.c.large：2核 4G'."\n"
                                    .'cassandra.c.xlarge：4核 8G'."\n"
                                    .'cassandra.c.2xlarge：8核 16G',
                                'type' => 'string',
                                'example' => 'cassandra.c.large',
                            ],
                            'LockMode' => [
                                'description' => '锁定模式。可取值：'."\n"
                                    .'None：未锁定'."\n"
                                    .'Expired：集群订阅到期锁定'."\n"
                                    .'DiskFull：磁盘已满锁定',
                                'type' => 'string',
                                'example' => 'None',
                            ],
                            'AutoRenewPeriod' => [
                                'description' => '付费周期，PayType（付费类型）为Subscription并且AutoRenewal（自动续费）为true时会有此结果，单位为月，取值：1-9，12，24，36 。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RegionId' => [
                                'description' => '地域ID，可以通过接口DescribeRegions查看可用的地域ID。',
                                'type' => 'string',
                                'example' => 'ap-southeast-1',
                            ],
                            'AutoRenewal' => [
                                'description' => '是否要自动续费。当参数PayType取值Subscription时才会有此值。取值：'."\n"
                                    .'true：自动续费。'."\n"
                                    .'false：不自动续费。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => 'A4C83BDF-1DE0-41CD-9D6C-8D9FE5EB5504',
                            ],
                            'CommodityInstance' => [
                                'description' => '集群商业ID。',
                                'type' => 'string',
                                'example' => 'cds-t4n98w89z77*****',
                            ],
                            'NodeCount' => [
                                'description' => '节点数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'DataCenterName' => [
                                'description' => '集群数据中心名称。',
                                'type' => 'string',
                                'example' => 'test_name',
                            ],
                            'ZoneId' => [
                                'description' => '可用区ID，可调用DescribeRegions查询，使用此参数指定要创建实例的可用区。',
                                'type' => 'string',
                                'example' => 'ap-southeast-1a',
                            ],
                            'CreatedTime' => [
                                'description' => '集群创建时间。格式：HH:mmZ（UTC 通用标准时，以Z来标识）。',
                                'type' => 'string',
                                'example' => '2020-10-16T11:27:20Z',
                            ],
                            'ClusterId' => [
                                'description' => '集群ID。',
                                'type' => 'string',
                                'example' => 'cds-t4n98w89z77*****',
                            ],
                            'DataCenterId' => [
                                'description' => '集群数据中心ID。',
                                'type' => 'string',
                                'example' => 'ap-southeast-1a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"VpcId\\": \\"vpc-bp1qitxqe1m5r****4mng\\",\\n  \\"Status\\": \\"Running\\",\\n  \\"ExpireTime\\": \\"2020-11-17T00:00:00Z\\",\\n  \\"VswitchId\\": \\"vsw-bp13e9ynz3jpy****hqlm\\",\\n  \\"PayType\\": \\"Subscription\\",\\n  \\"DiskSize\\": 160,\\n  \\"DiskType\\": \\"cloud_ssd\\",\\n  \\"InstanceType\\": \\"cassandra.c.large\\",\\n  \\"LockMode\\": \\"None\\",\\n  \\"AutoRenewPeriod\\": 1,\\n  \\"RegionId\\": \\"ap-southeast-1\\",\\n  \\"AutoRenewal\\": true,\\n  \\"RequestId\\": \\"A4C83BDF-1DE0-41CD-9D6C-8D9FE5EB5504\\",\\n  \\"CommodityInstance\\": \\"cds-t4n98w89z77*****\\",\\n  \\"NodeCount\\": 2,\\n  \\"DataCenterName\\": \\"test_name\\",\\n  \\"ZoneId\\": \\"ap-southeast-1a\\",\\n  \\"CreatedTime\\": \\"2020-10-16T11:27:20Z\\",\\n  \\"ClusterId\\": \\"cds-t4n98w89z77*****\\",\\n  \\"DataCenterId\\": \\"ap-southeast-1a\\"\\n}","errorExample":""},{"type":"xml","example":"<AutoRenewPeriod>1</AutoRenewPeriod>\\n<Status>Running</Status>\\n<DataCenterId>ap-southeast-1a</DataCenterId>\\n<CommodityInstance>cds-t4n98w89z77*****</CommodityInstance>\\n<CreatedTime>2020-10-16T11:27:20Z</CreatedTime>\\n<NodeCount>2</NodeCount>\\n<ZoneId>ap-southeast-1a</ZoneId>\\n<RequestId>A4C83BDF-1DE0-41CD-9D6C-8D9FE5EB5504</RequestId>\\n<ClusterId>cds-t4n98w89z77*****</ClusterId>\\n<LockMode>None</LockMode>\\n<PayType>Subscription</PayType>\\n<VswitchId>vsw-bp13e9ynz3jpy****hqlm</VswitchId>\\n<DataCenterName>test_name</DataCenterName>\\n<DiskType>cloud_ssd</DiskType>\\n<AutoRenewal>true</AutoRenewal>\\n<VpcId>vpc-bp1qitxqe1m5r****4mng</VpcId>\\n<DiskSize>160</DiskSize>\\n<RegionId>ap-southeast-1</RegionId>\\n<ExpireTime>2020-11-17T00:00:00Z</ExpireTime>\\n<InstanceType>cassandra.c.large</InstanceType>","errorExample":""}]',
            'title' => '获取单个数据中心详情',
            'summary' => '获取单个数据中心详情。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeInstanceType' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例规格名称,可取值示例：'."\n"
                            .'- cassandra.c.large：2核 4G'."\n"
                            .'- cassandra.c.xlarge：4核 8G'."\n"
                            .'- cassandra.c.2xlarge：8核 16G'."\n"
                            ."\n"
                            .'instanceType为空时，返回全部列表。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cassandra.c.2xlarge',
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
                                'example' => '4B989A12-FB9A-4D9A-A824-2E9267C911C7',
                            ],
                            'InstanceTypeSpecList' => [
                                'type' => 'object',
                                'properties' => [
                                    'InstanceTypeSpec' => [
                                        'description' => '实例规格列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'InstanceType' => [
                                                    'description' => '集群实例类型。可取值示例：'."\n"
                                                        ."\n"
                                                        .'- cassandra.c.large：2核 4G'."\n"
                                                        .'- cassandra.c.xlarge：4核 8G'."\n"
                                                        .'- cassandra.c.2xlarge：8核 16G',
                                                    'type' => 'string',
                                                    'example' => 'cassandra.c.large',
                                                ],
                                                'CpuSize' => [
                                                    'description' => 'CPU核数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '4',
                                                ],
                                                'MemSize' => [
                                                    'description' => '内存大小，单位：GB。',
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
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4B989A12-FB9A-4D9A-A824-2E9267C911C7\\",\\n  \\"InstanceTypeSpecList\\": {\\n    \\"InstanceTypeSpec\\": [\\n      {\\n        \\"InstanceType\\": \\"cassandra.c.large\\",\\n        \\"CpuSize\\": 4,\\n        \\"MemSize\\": 8\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceTypeResponse>\\n<RequestId>4B989A12-FB9A-4D9A-A824-2E9267C911C7</RequestId>\\n<InstanceTypeSpecList>\\n    <InstanceTypeSpec>\\n        <CpuSize>4</CpuSize>\\n        <MemSize>16</MemSize>\\n        <InstanceType>cassandra.c.large</InstanceType>\\n    </InstanceTypeSpec>\\n    <InstanceTypeSpec>\\n        <CpuSize>4</CpuSize>\\n        <MemSize>32</MemSize>\\n        <InstanceType>cassandra.c.large</InstanceType>\\n    </InstanceTypeSpec>\\n    <InstanceTypeSpec>\\n        <CpuSize>4</CpuSize>\\n        <MemSize>8</MemSize>\\n        <InstanceType>cassandra.c.large</InstanceType>\\n    </InstanceTypeSpec>\\n    <InstanceTypeSpec>\\n        <CpuSize>8</CpuSize>\\n        <MemSize>16</MemSize>\\n        <InstanceType>cassandra.c.2xlarge</InstanceType>\\n    </InstanceTypeSpec>\\n    <InstanceTypeSpec>\\n        <CpuSize>8</CpuSize>\\n        <MemSize>32</MemSize>\\n        <InstanceType>cassandra.c.2xlarge</InstanceType>\\n    </InstanceTypeSpec>\\n    <InstanceTypeSpec>\\n        <CpuSize>8</CpuSize>\\n        <MemSize>32</MemSize>\\n        <InstanceType>cassandra.c.2xlarge</InstanceType>\\n    </InstanceTypeSpec>\\n    <InstanceTypeSpec>\\n        <CpuSize>2</CpuSize>\\n        <MemSize>4</MemSize>\\n        <InstanceType>cassandra.c.large</InstanceType>\\n    </InstanceTypeSpec>\\n    <InstanceTypeSpec>\\n        <CpuSize>2</CpuSize>\\n        <MemSize>8</MemSize>\\n        <InstanceType>cassandra.c.large</InstanceType>\\n    </InstanceTypeSpec>\\n    <InstanceTypeSpec>\\n        <CpuSize>4</CpuSize>\\n        <MemSize>8</MemSize>\\n        <InstanceType>cassandra.c.xlarge</InstanceType>\\n    </InstanceTypeSpec>\\n</InstanceTypeSpecList>\\n</DescribeInstanceTypeResponse>","errorExample":""}]',
            'title' => '查询实例规格',
            'summary' => '如cpu、mem。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetCmsUrl' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp1b136j****5d57',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Url' => [
                                'description' => '云监控控制台Url。',
                                'type' => 'string',
                                'example' => 'https://cloudmonitor.console.aliyun.com?instanceId=cds-bp1l5ys68z98wzrc#/group/groupId=14680829&groupName=17926974****3449-cassandra/groupdashboard/cds//',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6453F432-0141-4D35-B2BF-ADF199B39B07',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Url\\": \\"https://cloudmonitor.console.aliyun.com?instanceId=cds-bp1l5ys68z98wzrc#/group/groupId=14680829&groupName=17926974****3449-cassandra/groupdashboard/cds//\\",\\n  \\"RequestId\\": \\"6453F432-0141-4D35-B2BF-ADF199B39B07\\"\\n}","errorExample":""},{"type":"xml","example":"<GetCmsUrlResponse>\\n<Url>https://cloudmonitor.console.aliyun.com?instanceId=cds-bp1l5ys68z98wzrc#/group/groupId=14680829&amp;groupName=17926974****3449-cassandra/groupdashboard/cds//</Url>\\n<RequestId>6453F432-0141-4D35-B2BF-ADF199B39B07</RequestId>\\n</GetCmsUrlResponse>","errorExample":""}]',
            'title' => '跳转云监控控制台',
            'summary' => '调用GetCmsUrl跳转云监控控制台。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'PurgeCluster' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已被删除的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp1hy2ip****z465',
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
                                'example' => '317BF5F0-2575-4158-9493-6DA83465491B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"317BF5F0-2575-4158-9493-6DA83465491B\\"\\n}","errorExample":""},{"type":"xml","example":"<PurgeClusterResponse>\\r\\n<RequestId>317BF5F0-2575-4158-9493-6DA83465491B</RequestId>\\r\\n</PurgeClusterResponse>","errorExample":""}]',
            'title' => '清除已被删除的集群',
            'summary' => '调用PurgeCluster清除已被删除的集群。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RebootCluster' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要重启集群的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp1b136j****5d51',
                    ],
                ],
                [
                    'name' => 'DataCenterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据中心ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou-g',
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
                                'example' => '033F5CDA-EF5E-4893-93C3-7EA5DCB76AF3',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"033F5CDA-EF5E-4893-93C3-7EA5DCB76AF3\\"\\n}","errorExample":""},{"type":"xml","example":"<RebootClusterResponse>\\r\\n<RequestId> 033F5CDA-EF5E-4893-93C3-7EA5DCB76AF3</RequestId>\\r\\n</RebootClusterResponse>","errorExample":""}]',
            'title' => 'RebootCluster',
            'summary' => '调用RebootCluster重启集群。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ResizeDiskSize' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp1b136j****5d51',
                    ],
                ],
                [
                    'name' => 'DataCenterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群数据中心ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou-g',
                    ],
                ],
                [
                    'name' => 'DiskSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '修改后的磁盘大小。（单位：GB）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '240',
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
                                'example' => '5C37DF4E-54D6-4AFA-A1F9-79ADC148F8AD',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5C37DF4E-54D6-4AFA-A1F9-79ADC148F8AD\\"\\n}","errorExample":""},{"type":"xml","example":"<ResizeDiskSizeResponse>\\r\\n<RequestId>5C37DF4E-54D6-4AFA-A1F9-79ADC148F8AD</RequestId>\\r\\n</ResizeDiskSizeResponse>","errorExample":""}]',
            'title' => '扩容或调整磁盘大小',
            'summary' => '扩容磁盘。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ResizeNodeCount' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp1b136j****5d59',
                    ],
                ],
                [
                    'name' => 'DataCenterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据中心ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => ' cn-hangzhou-g',
                    ],
                ],
                [
                    'name' => 'NodeCount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据中心节点数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '3',
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
                                'example' => 'D7D3088F-AA4F-49C3-BB46-B04F3E35041A',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7D3088F-AA4F-49C3-BB46-B04F3E35041A\\"\\n}","errorExample":""},{"type":"xml","example":"<ResizeNodeCountResponse>\\r\\n<RequestId>D7D3088F-AA4F-49C3-BB46-B04F3E35041A</RequestId>\\r\\n</ResizeNodeCountResponse>","errorExample":""}]',
            'title' => '扩容数据中心的节点',
            'summary' => '调用ResizeNodeCount扩容数据中心的节点。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpgradeClusterVersion' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => ' cds-bp1u2n43****n115',
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
                                'example' => 'BC262FE3-91ED-4FE7-BD75-190B62D8BABC',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BC262FE3-91ED-4FE7-BD75-190B62D8BABC\\"\\n}","errorExample":""},{"type":"xml","example":"<UpgradeClusterVersionResponse>\\r\\n<RequestId>BC262FE3-91ED-4FE7-BD75-190B62D8BABC</RequestId>\\r\\n</UpgradeClusterVersionResponse>","errorExample":""}]',
            'title' => '升级群集小版本',
            'summary' => '调用UpgradeClusterVersion升级集群小版本。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyIpWhitelist' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp1b136j****5d51',
                    ],
                ],
                [
                    'name' => 'IpList',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IP地址列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '192.***.0.23,30.15.***.133',
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
                                'example' => '11B95AE4-BB1A-4B62-9655-C43395C0B234',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"11B95AE4-BB1A-4B62-9655-C43395C0B234\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyIpWhitelistResponse>\\r\\n<RequestId>11B95AE4-BB1A-4B62-9655-C43395C0B234</RequestId>\\r\\n</ModifyIpWhitelistResponse>","errorExample":""}]',
            'title' => '修改集群网络访问白名单',
            'summary' => '调用ModifyIpWhitelist修改集群网络访问白名单。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyIpWhitelistGroup' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-uf6ig2gf****7pw9',
                    ],
                ],
                [
                    'name' => 'IpList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '白名单列表。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '218.30.***.40,192.***.0.23',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '白名单分组名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'IpVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IP版本。可取值：ipV4/ ipV6。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '6',
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
                                'example' => '50373857-C47B-4B64-9332-D0B5280B59EA',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"50373857-C47B-4B64-9332-D0B5280B59EA\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyIpWhitelistGroupResponse>\\r\\n<RequestId>50373857-C47B-4B64-9332-D0B5280B59EA</RequestId>\\r\\n</ModifyIpWhitelistGroupResponse>","errorExample":""}]',
            'title' => '修改集群白名单组',
            'summary' => '调用ModifyIpWhitelistGroup修改集群白名单组。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifySecurityGroups' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp142mt7****136k',
                    ],
                ],
                [
                    'name' => 'SecurityGroupIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属安全组ID，逗号隔开最多三个。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'sg-t4ng4yyc916o81nua6**,sg-******',
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
                                'example' => '4EC521F2-5E15-41F8-92C2-0C454EA02434',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4EC521F2-5E15-41F8-92C2-0C454EA02434\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifySecurityGroupsResponse>\\r\\n<RequestId>4EC521F2-5E15-41F8-92C2-0C454EA02434</RequestId>\\r\\n</ModifySecurityGroupsResponse>","errorExample":""}]',
            'title' => '修改安全组',
            'summary' => '调用ModifySecurityGroups修改安全组。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeIpWhitelist' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => ' cds-bp1b136j****5d59',
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
                                'example' => '070CAB1F-0F38-4EA8-8FD9-CA129F22409D',
                            ],
                            'IpList' => [
                                'type' => 'object',
                                'properties' => [
                                    'IP' => [
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '访问白名单列表，多个IP地址以“,”分割。',
                                            'type' => 'string',
                                            'example' => '192.***.0.23,30.15.***.133',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"070CAB1F-0F38-4EA8-8FD9-CA129F22409D\\",\\n  \\"IpList\\": {\\n    \\"IP\\": [\\n      \\"192.***.0.23,30.15.***.133\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeIpWhitelistResponse>\\n<RequestId>070CAB1F-0F38-4EA8-8FD9-CA129F22409D</RequestId>\\n<IpList>\\n    <IP>192.***.0.23</IP>\\n    <IP>30.15.***.133</IP>\\n</IpList>\\n</DescribeIpWhitelistResponse>","errorExample":""}]',
            'title' => '查询集群网络访问白名单',
            'summary' => '根据集群 ID 获取集群白名单信息列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeIpWhitelistGroups' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-j6c1zij80****9939',
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
                                'example' => '391A6933-0D4A-42EB-BCE7-03DA59D69ED4',
                            ],
                            'Groups' => [
                                'type' => 'object',
                                'properties' => [
                                    'Group' => [
                                        'description' => '白名单组列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'IpVersion' => [
                                                    'description' => 'IP版本，可选值：4/6。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '4',
                                                ],
                                                'GroupName' => [
                                                    'description' => '白名单组名。',
                                                    'type' => 'string',
                                                    'example' => 'group_one',
                                                ],
                                                'IpList' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'IP' => [
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '白名单列表，多个IP地址以“,”分割。',
                                                                'type' => 'string',
                                                                'example' => '127.0.0.1,192.***.0.1',
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
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"391A6933-0D4A-42EB-BCE7-03DA59D69ED4\\",\\n  \\"Groups\\": {\\n    \\"Group\\": [\\n      {\\n        \\"IpVersion\\": 4,\\n        \\"GroupName\\": \\"group_one\\",\\n        \\"IpList\\": {\\n          \\"IP\\": [\\n            \\"127.0.0.1,192.***.0.1\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeIpWhitelistGroupsResponse>\\n<Groups>\\n    <Group>\\n        <GroupName>default</GroupName>\\n        <IpVersion>4</IpVersion>\\n        <IpList>\\n            <IP>42.***.74.126</IP>\\n            <IP>127.0.0.2</IP>\\n        </IpList>\\n    </Group>\\n    <Group>\\n        <GroupName>default_jy</GroupName>\\n        <IpVersion>4</IpVersion>\\n        <IpList>\\n            <IP>42.***.74.126</IP>\\n            <IP>127.0.0.1</IP>\\n        </IpList>\\n    </Group>\\n</Groups>\\n<RequestId>391A6933-0D4A-42EB-BCE7-03DA59D69ED4</RequestId>\\n</DescribeIpWhitelistGroupsResponse>","errorExample":""}]',
            'title' => '查询白名单分组列表',
            'summary' => '调用DescribeIpWhitelistGroups查询白名单分组列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeSecurityGroups' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp1u2n43****n118',
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
                                'example' => 'C300D7C1-C45C-45F3-965C-9C4C0B7CB266',
                            ],
                            'SecurityGroupIds' => [
                                'type' => 'object',
                                'properties' => [
                                    'SecurityGroupId' => [
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '所属安全组ID集合。',
                                            'type' => 'string',
                                            'example' => 'sg-t4ng4yyc916o81nua6**,sg-****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C300D7C1-C45C-45F3-965C-9C4C0B7CB266\\",\\n  \\"SecurityGroupIds\\": {\\n    \\"SecurityGroupId\\": [\\n      \\"sg-t4ng4yyc916o81nua6**,sg-****\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeSecurityGroupsResponse>\\n<SecurityGroupIds>\\n    <SecurityGroupIds>sg-t4ng4yyc916o81nua6**</SecurityGroupIds>\\n    <SecurityGroupIds>sg-****</SecurityGroupIds>\\n</SecurityGroupIds>\\n<RequestId>C300D7C1-C45C-45F3-965C-9C4C0B7CB266</RequestId>\\n</DescribeSecurityGroupsResponse>","errorExample":""}]',
            'title' => '查询安全组',
            'summary' => '调用DescribeSecurityGroups查询安全组。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyAccountPassword' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp1l5ys6****wzrx',
                    ],
                ],
                [
                    'name' => 'Account',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cassandra_test',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号密码。大小写字母、数字、特殊字符占三种，长度为8-32位；特殊字符为!@#$%^&*()_+-=',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Alibaba@#￥**',
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
                                'example' => '50373857-C47B-4B64-9332-D0B5280B59EA',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"50373857-C47B-4B64-9332-D0B5280B59EA\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAccountPasswordResponse>\\r\\n<RequestId>50373857-C47B-4B64-9332-D0B5280B59EA</RequestId>\\r\\n</ModifyAccountPasswordResponse>","errorExample":""}]',
            'title' => '修改账号密码',
            'summary' => '修改数据库的账号密码。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeAccounts' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号所属实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp1b136jco79****',
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
                                'example' => '9BA1F8A4-12CC-4638-A7EC-D8FA2768D223',
                            ],
                            'Accounts' => [
                                'type' => 'object',
                                'properties' => [
                                    'Account' => [
                                        'description' => '由账号信息组成的集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'description' => '账号名。',
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
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9BA1F8A4-12CC-4638-A7EC-D8FA2768D223\\",\\n  \\"Accounts\\": {\\n    \\"Account\\": [\\n      {\\n        \\"Name\\": \\"test\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAccountsResponse>\\n    <Accounts>\\n        <Account>\\n            <Name>test</Name>\\n        </Account>\\n    </Accounts>\\n    <RequestId>9BA1F8A4-12CC-4638-A7EC-D8FA2768D223</RequestId>\\n</DescribeAccountsResponse>","errorExample":""}]',
            'title' => '查找实例的帐户列表信息',
            'summary' => '查找指定ID实例的帐户列表信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteDataCenter' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp11tjzh50****7d',
                    ],
                ],
                [
                    'name' => 'DataCenterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群数据中心ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou-g',
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
                                'example' => '200FB963-9359-4CAD-90B7-96395C88FD9D',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"200FB963-9359-4CAD-90B7-96395C88FD9D\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDataCenterResponse>\\r\\n    <RequestId>200FB963-9359-4CAD-90B7-96395C88FD9D</RequestId>\\r\\n</DeleteDataCenterResponse>","errorExample":""}]',
            'title' => '删除集群数据中心',
            'summary' => '调用DeleteDataCenter删除集群数据中心。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyDataCenter' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp1b136j****5d57',
                    ],
                ],
                [
                    'name' => 'DataCenterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据中心ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou-g',
                    ],
                ],
                [
                    'name' => 'DataCenterName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '修改后的数据中心名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Cassandra_test',
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
                                'example' => 'FAE9E7A4-0E75-46F7-9710-D2E0B41AF9F5',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FAE9E7A4-0E75-46F7-9710-D2E0B41AF9F5\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDataCenterResponse>\\r\\n<RequestId>FAE9E7A4-0E75-46F7-9710-D2E0B41AF9F5</RequestId>\\r\\n</ModifyDataCenterResponse>","errorExample":""}]',
            'title' => '修改数据中心名称',
            'summary' => '调用ModifyDataCenter修改数据中心名称。',
            'requestParamsDescription' => ' ',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AcceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '支持的语言。包括以下取值：'."\n"
                            ."\n"
                            .'- 中文：zh-CN（默认值）'."\n"
                            .'- 英文：en-US'."\n"
                            .'- 日文：ja',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F20BBD34-681D-4613-8EFA-259DF510A897',
                            ],
                            'Regions' => [
                                'type' => 'object',
                                'properties' => [
                                    'Region' => [
                                        'description' => '返回Region列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'RegionEndpoint' => [
                                                    'description' => 'Region服务的Endpoint地址。',
                                                    'type' => 'string',
                                                    'example' => 'cassandra.aliyuncs.com',
                                                ],
                                                'LocalName' => [
                                                    'description' => '地域名称。',
                                                    'type' => 'string',
                                                    'example' => '华东1（杭州）',
                                                ],
                                                'RegionId' => [
                                                    'description' => '地域ID，如cn-hangzhou。',
                                                    'type' => 'string',
                                                    'example' => '华东1（杭州）',
                                                ],
                                                'Zones' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Zone' => [
                                                            'description' => '可用区列表。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Id' => [
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
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F20BBD34-681D-4613-8EFA-259DF510A897\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"RegionEndpoint\\": \\"cassandra.aliyuncs.com\\",\\n        \\"LocalName\\": \\"华东1（杭州）\\",\\n        \\"RegionId\\": \\"华东1（杭州）\\",\\n        \\"Zones\\": {\\n          \\"Zone\\": [\\n            {\\n              \\"Id\\": \\"cn-hangzhou-b\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>F20BBD34-681D-4613-8EFA-259DF510A897</RequestId>\\n<Regions>\\n    <Region>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <RegionEndpoint>cassandra.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华东1（杭州）</LocalName>\\n        <Zones>\\n            <Zone>\\n                <Id>cn-hangzhou-h</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-hangzhou-i</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-hangzhou-b</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-hangzhou-e</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-hangzhou-f</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-hangzhou-g</Id>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-shanghai</RegionId>\\n        <RegionEndpoint>cassandra.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华东2（上海）</LocalName>\\n        <Zones>\\n            <Zone>\\n                <Id>cn-shanghai-g</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-shanghai-e</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-shanghai-f</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-shanghai-a</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-shanghai-b</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-shanghai-c</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-shanghai-d</Id>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-qingdao</RegionId>\\n        <RegionEndpoint>cassandra.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北1（青岛）</LocalName>\\n        <Zones>\\n            <Zone>\\n                <Id>cn-qingdao-b</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-qingdao-c</Id>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-beijing</RegionId>\\n        <RegionEndpoint>cassandra.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北2（北京）</LocalName>\\n        <Zones>\\n            <Zone>\\n                <Id>cn-beijing-h</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-beijing-g</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-beijing-f</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-beijing-a</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-beijing-b</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-beijing-c</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-beijing-d</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-beijing-e</Id>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-shenzhen</RegionId>\\n        <RegionEndpoint>cassandra.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华南1（深圳）</LocalName>\\n        <Zones>\\n            <Zone>\\n                <Id>cn-shenzhen-d</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-shenzhen-e</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-shenzhen-a</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-shenzhen-b</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-shenzhen-c</Id>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-hongkong</RegionId>\\n        <RegionEndpoint>cassandra.aliyuncs.com</RegionEndpoint>\\n        <LocalName>中国（香港）</LocalName>\\n        <Zones>\\n            <Zone>\\n                <Id>cn-hongkong-b</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-hongkong-c</Id>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>ap-southeast-1</RegionId>\\n        <RegionEndpoint>cassandra.aliyuncs.com</RegionEndpoint>\\n        <LocalName>新加坡</LocalName>\\n        <Zones>\\n            <Zone>\\n                <Id>ap-southeast-1c</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>ap-southeast-1a</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>ap-southeast-1b</Id>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n</Regions>","errorExample":""}]',
            'title' => '查询可用地域',
            'summary' => '调用DescribeRegions查询可用地域。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDataCenters' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp1b136j****5d57',
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
                                'example' => 'C8CA4D25-47FE-47D9-A34F-69B554A3A069',
                            ],
                            'DataCenters' => [
                                'type' => 'object',
                                'properties' => [
                                    'DataCenter' => [
                                        'description' => '数据中心信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'VpcId' => [
                                                    'description' => 'VPC网络的ID。',
                                                    'type' => 'string',
                                                    'example' => 'vpc-bp1qitxqe1m5r****4mng',
                                                ],
                                                'Status' => [
                                                    'description' => '集群运行状态，可取值部分示例：'."\n"
                                                        ."\n"
                                                        .'- Creating：创建中'."\n"
                                                        .'- CreateFailed：创建失败'."\n"
                                                        .'- Running：运行中'."\n"
                                                        .'- Deleting：删除中'."\n"
                                                        .'- DeleteFailed：删除失败'."\n"
                                                        .'- Deleted：已删除',
                                                    'type' => 'string',
                                                    'example' => 'Running',
                                                ],
                                                'ExpireTime' => [
                                                    'description' => '集群订阅到期时间。格式：HH:mmZ（UTC 通用标准时，以Z来标识）。',
                                                    'type' => 'string',
                                                    'example' => '2020-03-22T00:00:00Z',
                                                ],
                                                'VswitchId' => [
                                                    'description' => '虚拟交换机的ID。',
                                                    'type' => 'string',
                                                    'example' => 'vsw-bp13e9ynz3jpy****hqlm',
                                                ],
                                                'PayType' => [
                                                    'description' => '付费类型：'."\n"
                                                        ."\n"
                                                        .'- Subscription：包年包月'."\n"
                                                        .'- PayAsYouGo：按量付费'."\n"
                                                        ."\n"
                                                        .'<note>按量付费实例无到期时间</note>'."\n",
                                                    'type' => 'string',
                                                    'example' => 'Subscription',
                                                ],
                                                'DiskSize' => [
                                                    'description' => '磁盘存储大小（每节点，单位GB）。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '22000',
                                                ],
                                                'DiskType' => [
                                                    'description' => '磁盘存储类型。可取值示例：'."\n"
                                                        ."\n"
                                                        .'- cloud_ssd：SSD云盘'."\n"
                                                        .'- cloud_essd：ESSD云盘'."\n"
                                                        .'- cloud_efficiency：高效云盘'."\n"
                                                        .'- local_ssd_pro：本地SSD盘',
                                                    'type' => 'string',
                                                    'example' => 'local_ssd_pro',
                                                ],
                                                'InstanceType' => [
                                                    'description' => '集群实例类型。可取值部分示例：'."\n"
                                                        ."\n"
                                                        .'- cassandra.c.large：2核 4G'."\n"
                                                        .'- cassandra.c.xlarge：4核 8G'."\n"
                                                        .'- cassandra.c.2xlarge：8核 16G',
                                                    'type' => 'string',
                                                    'example' => 'cassandra.c5.xlarge',
                                                ],
                                                'LockMode' => [
                                                    'description' => '锁定模式。可取值：'."\n"
                                                        ."\n"
                                                        .'- None：未锁定'."\n"
                                                        .'- Expired：集群订阅到期锁定'."\n"
                                                        .'- DiskFull：磁盘已满锁定',
                                                    'type' => 'string',
                                                    'example' => 'None',
                                                ],
                                                'AutoRenewPeriod' => [
                                                    'description' => '自动续费周期',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '12',
                                                ],
                                                'RegionId' => [
                                                    'description' => '地域ID，可以通过接口DescribeRegions查看可用的地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'AutoRenewal' => [
                                                    'description' => '是否开启自动续费',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'CommodityInstance' => [
                                                    'description' => '集群商业ID。',
                                                    'type' => 'string',
                                                    'example' => 'cds-bp1syjlt****q976',
                                                ],
                                                'NodeCount' => [
                                                    'description' => '节点数。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
                                                ],
                                                'DataCenterName' => [
                                                    'description' => '集群数据中心名称。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'ZoneId' => [
                                                    'description' => '可用区ID，可调用DescribeRegions查询，使用此参数指定要创建实例的可用区。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou-g',
                                                ],
                                                'CreatedTime' => [
                                                    'description' => '集群创建时间。格式：HH:mmZ（UTC 通用标准时，以Z来标识）。',
                                                    'type' => 'string',
                                                    'example' => '2019-09-20T16:02:34Z',
                                                ],
                                                'ClusterId' => [
                                                    'description' => '集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'cds-bp1syjlt****q976',
                                                ],
                                                'DataCenterId' => [
                                                    'description' => '集群数据中心ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou-g',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C8CA4D25-47FE-47D9-A34F-69B554A3A069\\",\\n  \\"DataCenters\\": {\\n    \\"DataCenter\\": [\\n      {\\n        \\"VpcId\\": \\"vpc-bp1qitxqe1m5r****4mng\\",\\n        \\"Status\\": \\"Running\\",\\n        \\"ExpireTime\\": \\"2020-03-22T00:00:00Z\\",\\n        \\"VswitchId\\": \\"vsw-bp13e9ynz3jpy****hqlm\\",\\n        \\"PayType\\": \\"Subscription\\",\\n        \\"DiskSize\\": 22000,\\n        \\"DiskType\\": \\"local_ssd_pro\\",\\n        \\"InstanceType\\": \\"cassandra.c5.xlarge\\",\\n        \\"LockMode\\": \\"None\\",\\n        \\"AutoRenewPeriod\\": 12,\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"AutoRenewal\\": false,\\n        \\"CommodityInstance\\": \\"cds-bp1syjlt****q976\\",\\n        \\"NodeCount\\": 2,\\n        \\"DataCenterName\\": \\"test\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-g\\",\\n        \\"CreatedTime\\": \\"2019-09-20T16:02:34Z\\",\\n        \\"ClusterId\\": \\"cds-bp1syjlt****q976\\",\\n        \\"DataCenterId\\": \\"cn-hangzhou-g\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDataCentersResponse>\\n<DataCenters>\\n    <DataCenter>\\n        <Status>Running</Status>\\n        <DataCenterId>cn-hangzhou-g</DataCenterId>\\n        <CreatedTime>2020-02-21T10:29:45Z</CreatedTime>\\n        <CommodityInstance>cds-bp1syjlt****q976</CommodityInstance>\\n        <ZoneId>cn-hangzhou-g</ZoneId>\\n        <NodeCount>2</NodeCount>\\n        <ClusterId>cds-bp1syjlt****q976</ClusterId>\\n        <PayType>Subscription</PayType>\\n        <LockMode>None</LockMode>\\n        <DataCenterName>test</DataCenterName>\\n        <VswitchId>vsw-bp1nm66r36goq****2thl</VswitchId>\\n        <DiskType>local_ssd_pro</DiskType>\\n        <VpcId>vpc-bp120k6ixs4eo****vu6x</VpcId>\\n        <DiskSize>22000</DiskSize>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <InstanceType>cassandra.c.2xlarge</InstanceType>\\n        <ExpireTime>2020-03-22T00:00:00Z</ExpireTime>\\n    </DataCenter>\\n</DataCenters>\\n<RequestId>5AA67458-E8E8-419C-873A-D211CE2C7D31</RequestId>\\n</DescribeDataCentersResponse>","errorExample":""}]',
            'title' => 'DescribeDataCenters',
            'summary' => '调用DescribeDataCenters获取数据中心信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateBackupPlan' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份的集群的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp11tjzh50****7b',
                    ],
                ],
                [
                    'name' => 'DataCenterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集群数据中心ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => ' cn-hangzhou-g',
                    ],
                ],
                [
                    'name' => 'BackupTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每天开始备份的时间，UTC 通用标准时，以Z来标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '00:30Z',
                    ],
                ],
                [
                    'name' => 'BackupPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份周期。可取值：Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Monday',
                    ],
                ],
                [
                    'name' => 'RetentionPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建备份计划保留天数取值范围1-7天。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'Active',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否激活备份计划。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '200FB963-9359-4CAD-90B7-96395C88FD9D',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"200FB963-9359-4CAD-90B7-96395C88FD9D\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateBackupPlanResponse>\\r\\n    <RequestId>200FB963-9359-4CAD-90B7-96395C88FD9D</RequestId>\\r\\n</CreateBackupPlanResponse>","errorExample":""}]',
            'title' => '创建备份计划',
            'summary' => '调用CreateBackupPlan创建备份计划。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteBackupPlan' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份的集群的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp11tjzh50****7c',
                    ],
                ],
                [
                    'name' => 'DataCenterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集群数据中心ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => ' cn-hangzhou-g',
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
                                'example' => '200FB963-9359-4CAD-90B7-96395C88FD9D',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"200FB963-9359-4CAD-90B7-96395C88FD9D\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteBackupPlanResponse>\\r\\n    <RequestId>200FB963-9359-4CAD-90B7-96395C88FD9D</RequestId>\\r\\n</DeleteBackupPlanResponse>","errorExample":""}]',
            'title' => '删除备份计划',
            'summary' => '调用DeleteBackupPlan删除备份计划。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyBackupPlan' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-uf6m0bod****6158',
                    ],
                ],
                [
                    'name' => 'DataCenterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群数据中心ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shanghai-e',
                    ],
                ],
                [
                    'name' => 'BackupTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每天开始备份的时间，UTC 通用标准时，以Z来标识。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '00:30Z',
                    ],
                ],
                [
                    'name' => 'BackupPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份周期。'."\n"
                            ."\n"
                            .'可取值：Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Monday,Tuesday',
                    ],
                ],
                [
                    'name' => 'RetentionPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划保留天数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '7',
                    ],
                ],
                [
                    'name' => 'Active',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划是否激活。',
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
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FA04A743-6C3F-4C06-A2B7-6B75B9D3D18C',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FA04A743-6C3F-4C06-A2B7-6B75B9D3D18C\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyBackupPlanResponse>\\r\\n<RequestId>FA04A743-6C3F-4C06-A2B7-6B75B9D3D18C</RequestId>\\r\\n</ModifyBackupPlanResponse>","errorExample":""}]',
            'title' => '修改备份计划',
            'summary' => '调用ModifyBackupPlan修改备份计划。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeBackup' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp11tjzh50****78',
                    ],
                ],
                [
                    'name' => 'DataCenterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集群数据中心ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => ' cn-hangzhou-g',
                    ],
                ],
                [
                    'name' => 'BackupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2020010121****',
                    ],
                ],
                [
                    'name' => 'BackupType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份类型。取值：'."\n"
                            ."\n"
                            .'- full：全量备份'."\n"
                            .'- Incremental：增量备份',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Incremental',
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
                                'example' => '200FB963-9359-4CAD-90B7-96395C88FD9D',
                            ],
                            'Backup' => [
                                'description' => '备份计划概要信息列表。',
                                'type' => 'object',
                                'properties' => [
                                    'EndTime' => [
                                        'description' => '备份结束时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC 通用标准时，以Z来标识）。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 21:48:54Z',
                                    ],
                                    'Status' => [
                                        'description' => '备份状态。可取值部分示例：'."\n"
                                            ."\n"
                                            .'- Succeeded：成功'."\n"
                                            .'- Failed：失败',
                                        'type' => 'string',
                                        'example' => 'Succeeded',
                                    ],
                                    'StartTime' => [
                                        'description' => '备份开始时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC 通用标准时，以Z来标识）。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 21:48:40Z',
                                    ],
                                    'Size' => [
                                        'description' => '备份大小。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '149016650',
                                    ],
                                    'BackupType' => [
                                        'description' => '备份类型。取值：'."\n"
                                            ."\n"
                                            .'- full：全量备份'."\n"
                                            .'- Incremental：增量备份',
                                        'type' => 'string',
                                        'example' => 'Incremental',
                                    ],
                                    'BackupId' => [
                                        'description' => '备份ID。',
                                        'type' => 'string',
                                        'example' => '2020010121****',
                                    ],
                                    'Details' => [
                                        'description' => '备份细节。',
                                        'type' => 'string',
                                        'example' => '{"name": "cds-uf6m0bod****6159-20200226", "start": "2020-02-26 01:57:05", "end": "2020-02-26 02:12:50", "completeNodes": ["cds-uf6m0bod4****159-1-core-002.cassandra.rds.aliyuncs.com", "cds-uf6m0bo****v6159-1-core-001.cassandra.rds.aliyuncs.com", "cds-uf6m0bod****6159-1-core-003.cassandra.rds.aliyuncs.com"], "incompleteNodes": [], "missingNodes": [], "files": 923, "size": 149016650}',
                                    ],
                                    'DataCenterId' => [
                                        'description' => '备份集群数据中心ID。',
                                        'type' => 'string',
                                        'example' => ' cn-hangzhou-g',
                                    ],
                                    'ClusterId' => [
                                        'description' => '备份集群ID。',
                                        'type' => 'string',
                                        'example' => 'cds-bp11tjzh50****7v',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"200FB963-9359-4CAD-90B7-96395C88FD9D\\",\\n  \\"Backup\\": {\\n    \\"EndTime\\": \\"2020-01-01 21:48:54Z\\",\\n    \\"Status\\": \\"Succeeded\\",\\n    \\"StartTime\\": \\"2020-01-01 21:48:40Z\\",\\n    \\"Size\\": 149016650,\\n    \\"BackupType\\": \\"Incremental\\",\\n    \\"BackupId\\": \\"2020010121****\\",\\n    \\"Details\\": \\"{\\\\\\"name\\\\\\": \\\\\\"cds-uf6m0bod****6159-20200226\\\\\\", \\\\\\"start\\\\\\": \\\\\\"2020-02-26 01:57:05\\\\\\", \\\\\\"end\\\\\\": \\\\\\"2020-02-26 02:12:50\\\\\\", \\\\\\"completeNodes\\\\\\": [\\\\\\"cds-uf6m0bod4****159-1-core-002.cassandra.rds.aliyuncs.com\\\\\\", \\\\\\"cds-uf6m0bo****v6159-1-core-001.cassandra.rds.aliyuncs.com\\\\\\", \\\\\\"cds-uf6m0bod****6159-1-core-003.cassandra.rds.aliyuncs.com\\\\\\"], \\\\\\"incompleteNodes\\\\\\": [], \\\\\\"missingNodes\\\\\\": [], \\\\\\"files\\\\\\": 923, \\\\\\"size\\\\\\": 149016650}\\",\\n    \\"DataCenterId\\": \\" cn-hangzhou-g\\",\\n    \\"ClusterId\\": \\"cds-bp11tjzh50****7v\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupResponse>\\n    <RequestId>FA04A743-6C3F-4C06-A2B7-6B75B9D3D18C</RequestId>\\n    <Backup>\\n        <Status>Succeeded</Status>\\n        <DataCenterId>cn-shanghai-e</DataCenterId>\\n        <Details>{\\"name\\": \\"cds-uf6m0bod****6159-20200226\\", \\"start\\": \\"2020-02-26 01:57:05\\", \\"end\\": \\"2020-02-26 02:12:50\\", \\"completeNodes\\": [\\"cds-uf6m0bod****6159-1-core-002.cassandra.rds.aliyuncs.com\\", \\"cds-uf6m0bod****6159-1-core-001.cassandra.rds.aliyuncs.com\\", \\"cds-uf6m0bod****6159-1-core-003.cassandra.rds.aliyuncs.com\\"], \\"incompleteNodes\\": [], \\"missingNodes\\": [], \\"files\\": 923, \\"size\\": 149016650}\\n    </Details>\\n        <EndTime>2020-02-26T02:12:50Z</EndTime>\\n        <ClusterId>cds-uf6m0bo****v6159</ClusterId>\\n        <Size>149016650</Size>\\n        <StartTime>2020-02-26T01:57:00Z</StartTime>\\n        <BackupId>20200226</BackupId>\\n        <BackupType>Incremental</BackupType>\\n    </Backup>\\n</DescribeBackupResponse>","errorExample":""}]',
            'title' => '获取备份概要信息',
            'summary' => '调用DescribeBackup获取备份概要信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeBackupPlan' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-uf6m0bo****6158',
                    ],
                ],
                [
                    'name' => 'DataCenterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集群数据中心ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shanghai-e',
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
                                'example' => '0EA95AA2-860C-42CB-97CF-78CA3937E0D5',
                            ],
                            'BackupPlan' => [
                                'description' => '备份计划详情列表。',
                                'type' => 'object',
                                'properties' => [
                                    'Active' => [
                                        'description' => '备份计划是否激活。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'BackupPeriod' => [
                                        'description' => '备份周期。取值范围Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday。',
                                        'type' => 'string',
                                        'example' => 'Monday',
                                    ],
                                    'RetentionPeriod' => [
                                        'description' => '	'."\n"
                                            .'创建备份计划保留天数取值范围：1-7天。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '7',
                                    ],
                                    'CreatedTime' => [
                                        'description' => '备份计划创建时间。UTC 通用标准时，以Z来标识。',
                                        'type' => 'string',
                                        'example' => '2020-02-26T01:56Z',
                                    ],
                                    'BackupTime' => [
                                        'description' => '每天开始备份的时间，UTC 通用标准时，以Z来标识。',
                                        'type' => 'string',
                                        'example' => '00:30Z',
                                    ],
                                    'ClusterId' => [
                                        'description' => '备份集群ID。',
                                        'type' => 'string',
                                        'example' => 'cds-uf6m0b****7v6159',
                                    ],
                                    'DataCenterId' => [
                                        'description' => '备份集群数据中心ID。',
                                        'type' => 'string',
                                        'example' => 'cn-shanghai-e',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0EA95AA2-860C-42CB-97CF-78CA3937E0D5\\",\\n  \\"BackupPlan\\": {\\n    \\"Active\\": true,\\n    \\"BackupPeriod\\": \\"Monday\\",\\n    \\"RetentionPeriod\\": 7,\\n    \\"CreatedTime\\": \\"2020-02-26T01:56Z\\",\\n    \\"BackupTime\\": \\"00:30Z\\",\\n    \\"ClusterId\\": \\"cds-uf6m0b****7v6159\\",\\n    \\"DataCenterId\\": \\"cn-shanghai-e\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupPlanResponse>\\n    <RequestId>0EA95AA2-860C-42CB-97CF-78CA3937E0D5</RequestId>\\n    <BackupPlan>\\n        <DataCenterId>cn-shanghai-e</DataCenterId>\\n        <BackupPeriod>Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday</BackupPeriod>\\n        <Active>true</Active>\\n        <CreatedTime>2020-02-26T01:56Z</CreatedTime>\\n        <ClusterId>cds-uf6m0bo****v6159</ClusterId>\\n        <BackupTime>00:30Z</BackupTime>\\n        <RetentionPeriod>7</RetentionPeriod>\\n    </BackupPlan>\\n</DescribeBackupPlanResponse>","errorExample":""}]',
            'title' => '获取备份计划',
            'summary' => '调用DescribeBackupPlan描述备份计划。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeBackups' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-uf6m0bod****6158',
                    ],
                ],
                [
                    'name' => 'DataCenterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集群数据中心ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shanghai-e',
                    ],
                ],
                [
                    'name' => 'BackupType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份类型。取值：'."\n"
                            ."\n"
                            .'- full：全量备份'."\n"
                            .'- Incremental：增量备份',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Incremental',
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
                                'example' => 'A6E59F3B-5CB7-4922-85CA-06EC0BB00BAA',
                            ],
                            'Backups' => [
                                'type' => 'object',
                                'properties' => [
                                    'Backup' => [
                                        'description' => '备份任务信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'EndTime' => [
                                                    'description' => '备份结束时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC 通用标准时，以Z来标识）。',
                                                    'type' => 'string',
                                                    'example' => '2020-02-26T02:12:50Z',
                                                ],
                                                'Status' => [
                                                    'description' => '备份状态。可取值部分示例：'."\n"
                                                        ."\n"
                                                        .'- Succeeded：成功'."\n"
                                                        .'- Failed：失败',
                                                    'type' => 'string',
                                                    'example' => 'Succeeded',
                                                ],
                                                'StartTime' => [
                                                    'description' => '备份开始时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC 通用标准时，以Z来标识）。',
                                                    'type' => 'string',
                                                    'example' => '2020-02-26T01:57:00Z',
                                                ],
                                                'Size' => [
                                                    'description' => '备份大小。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '149016650',
                                                ],
                                                'BackupType' => [
                                                    'description' => '备份类型。取值：'."\n"
                                                        ."\n"
                                                        .'- full：全量备份'."\n"
                                                        .'- Incremental：增量备份',
                                                    'type' => 'string',
                                                    'example' => 'Incremental',
                                                ],
                                                'BackupId' => [
                                                    'description' => '备份ID。',
                                                    'type' => 'string',
                                                    'example' => '20200***',
                                                ],
                                                'ClusterId' => [
                                                    'description' => '备份集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'cds-uf6m0bod****6159',
                                                ],
                                                'DataCenterId' => [
                                                    'description' => '备份集群数据中心ID。',
                                                    'type' => 'string',
                                                    'example' => ' cn-shanghai-e',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A6E59F3B-5CB7-4922-85CA-06EC0BB00BAA\\",\\n  \\"Backups\\": {\\n    \\"Backup\\": [\\n      {\\n        \\"EndTime\\": \\"2020-02-26T02:12:50Z\\",\\n        \\"Status\\": \\"Succeeded\\",\\n        \\"StartTime\\": \\"2020-02-26T01:57:00Z\\",\\n        \\"Size\\": 149016650,\\n        \\"BackupType\\": \\"Incremental\\",\\n        \\"BackupId\\": \\"20200***\\",\\n        \\"ClusterId\\": \\"cds-uf6m0bod****6159\\",\\n        \\"DataCenterId\\": \\" cn-shanghai-e\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupsResponse>\\n    <RequestId>A6E59F3B-5CB7-4922-85CA-06EC0BB00BAA</RequestId>\\n    <Backups>\\n        <Backup>\\n            <Status>Succeeded</Status>\\n            <DataCenterId>cn-shanghai-e</DataCenterId>\\n            <EndTime>2020-02-26T02:12:50Z</EndTime>\\n            <ClusterId>cds-uf6m0bo****6159</ClusterId>\\n            <Size>149016650</Size>\\n            <StartTime>2020-02-26T01:57:00Z</StartTime>\\n            <BackupId>20200226</BackupId>\\n            <BackupType>Incremental</BackupType>\\n        </Backup>\\n        <Backup>\\n            <Status>Succeeded</Status>\\n            <DataCenterId>cn-shanghai-e</DataCenterId>\\n            <EndTime>2020-02-27T01:01:28Z</EndTime>\\n            <ClusterId>cds-uf6m0bod****6159</ClusterId>\\n            <Size>149494577</Size>\\n            <StartTime>2020-02-27T01:01:00Z</StartTime>\\n            <BackupId>20200227</BackupId>\\n            <BackupType>Incremental</BackupType>\\n        </Backup>\\n        <Backup>\\n            <Status>Succeeded</Status>\\n            <DataCenterId>cn-shanghai-e</DataCenterId>\\n            <EndTime>2020-02-28T01:01:23Z</EndTime>\\n            <ClusterId>cds-uf6m0bo****v6159</ClusterId>\\n            <Size>149282931</Size>\\n            <StartTime>2020-02-28T01:01:00Z</StartTime>\\n            <BackupId>20200228</BackupId>\\n            <BackupType>Incremental</BackupType>\\n        </Backup>\\n        <Backup>\\n            <Status>Succeeded</Status>\\n            <DataCenterId>cn-shanghai-e</DataCenterId>\\n            <EndTime>2020-02-29T01:00:56Z</EndTime>\\n            <ClusterId>cds-uf6m0bod****6159</ClusterId>\\n            <Size>149454625</Size>\\n            <StartTime>2020-02-29T00:25:28Z</StartTime>\\n            <BackupId>20200229</BackupId>\\n            <BackupType>Incremental</BackupType>\\n        </Backup>\\n        <Backup>\\n            <Status>Succeeded</Status>\\n            <DataCenterId>cn-shanghai-e</DataCenterId>\\n            <EndTime>2020-03-02T22:12:41Z</EndTime>\\n            <ClusterId>cds-uf6m0bo****v6159</ClusterId>\\n            <Size>149364202</Size>\\n            <StartTime>2020-03-01T00:30:00Z</StartTime>\\n            <BackupId>20200301</BackupId>\\n            <BackupType>Incremental</BackupType>\\n        </Backup>\\n        <Backup>\\n            <Status>Succeeded</Status>\\n            <DataCenterId>cn-shanghai-e</DataCenterId>\\n            <EndTime>2020-03-02T00:30:13Z</EndTime>\\n            <ClusterId>cds-uf6m0bod****6159</ClusterId>\\n            <Size>149356372</Size>\\n            <StartTime>2020-03-02T00:30:00Z</StartTime>\\n            <BackupId>20200302</BackupId>\\n            <BackupType>Incremental</BackupType>\\n        </Backup>\\n        <Backup>\\n            <Status>Succeeded</Status>\\n            <DataCenterId>cn-shanghai-e</DataCenterId>\\n            <EndTime>2020-03-04T02:11:59Z</EndTime>\\n            <ClusterId>cds-uf6m0bo****v6159</ClusterId>\\n            <Size>149359298</Size>\\n            <StartTime>2020-03-03T00:30:00Z</StartTime>\\n            <BackupId>20200303</BackupId>\\n            <BackupType>Incremental</BackupType>\\n        </Backup>\\n        <Backup>\\n            <Status>Succeeded</Status>\\n            <DataCenterId>cn-shanghai-e</DataCenterId>\\n            <EndTime>2020-03-04T02:12:09Z</EndTime>\\n            <ClusterId>cds-uf6m0bod****6159</ClusterId>\\n            <Size>149267899</Size>\\n            <StartTime>2020-03-04T00:30:00Z</StartTime>\\n            <BackupId>20200304</BackupId>\\n            <BackupType>Incremental</BackupType>\\n        </Backup>\\n        <Backup>\\n            <Status>Succeeded</Status>\\n            <DataCenterId>cn-shanghai-e</DataCenterId>\\n            <EndTime>2020-03-06T15:52:58Z</EndTime>\\n            <ClusterId>cds-uf6m0bod****6159</ClusterId>\\n            <Size>149188148</Size>\\n            <StartTime>2020-03-05T00:30:00Z</StartTime>\\n            <BackupId>20200305</BackupId>\\n            <BackupType>Incremental</BackupType>\\n        </Backup>\\n        <Backup>\\n            <Status>Succeeded</Status>\\n            <DataCenterId>cn-shanghai-e</DataCenterId>\\n            <EndTime>2020-03-06T15:53:06Z</EndTime>\\n            <ClusterId>cds-uf6m0bod****6159</ClusterId>\\n            <Size>149188280</Size>\\n            <StartTime>2020-03-06T00:30:00Z</StartTime>\\n            <BackupId>20200306</BackupId>\\n            <BackupType>Incremental</BackupType>\\n        </Backup>\\n    </Backups>\\n</DescribeBackupsResponse>","errorExample":""}]',
            'title' => '获取集群备份列表',
            'summary' => '调用DescribeBackups获取集群备份列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeBackupPlans' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp1yt5g0****7f48',
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
                                'example' => '200FB963-9359-4CAD-90B7-96395C88FD9D',
                            ],
                            'BackupPlans' => [
                                'type' => 'object',
                                'properties' => [
                                    'BackupPlan' => [
                                        'description' => '备份计划列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Active' => [
                                                    'description' => '备份计划是否激活。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'BackupPeriod' => [
                                                    'description' => '备份周期。取值范围Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday。',
                                                    'type' => 'string',
                                                    'example' => 'Monday',
                                                ],
                                                'RetentionPeriod' => [
                                                    'description' => '创建备份计划保留天数取值范围：1-7天。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '5',
                                                ],
                                                'CreatedTime' => [
                                                    'description' => '备份计划创建时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC 通用标准时，以Z来标识）。',
                                                    'type' => 'string',
                                                    'example' => '2020-02-26T01:56Z',
                                                ],
                                                'BackupTime' => [
                                                    'description' => '每天开始备份的时间。格式：HH:mmZ（UTC 通用标准时，以Z来标识）。',
                                                    'type' => 'string',
                                                    'example' => ' 00:30Z',
                                                ],
                                                'ClusterId' => [
                                                    'description' => '备份集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'cds-uf6m0bod****6159',
                                                ],
                                                'DataCenterId' => [
                                                    'description' => '备份集群数据中心ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou-g',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"200FB963-9359-4CAD-90B7-96395C88FD9D\\",\\n  \\"BackupPlans\\": {\\n    \\"BackupPlan\\": [\\n      {\\n        \\"Active\\": true,\\n        \\"BackupPeriod\\": \\"Monday\\",\\n        \\"RetentionPeriod\\": 5,\\n        \\"CreatedTime\\": \\"2020-02-26T01:56Z\\",\\n        \\"BackupTime\\": \\" 00:30Z\\",\\n        \\"ClusterId\\": \\"cds-uf6m0bod****6159\\",\\n        \\"DataCenterId\\": \\"cn-hangzhou-g\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupPlansResponse>\\n    <RequestId>DBADCCEE-0E07-4DBD-9343-C7F312B23979</RequestId>\\n    <BackupPlans>\\n        <BackupPlan>\\n            <DataCenterId>cn-shanghai-e</DataCenterId>\\n            <BackupPeriod>Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday</BackupPeriod>\\n            <Active>true</Active>\\n            <CreatedTime>2020-02-26T01:56Z</CreatedTime>\\n            <ClusterId>cds-uf6m0bod****6159</ClusterId>\\n            <BackupTime>00:30Z</BackupTime>\\n            <RetentionPeriod>7</RetentionPeriod>\\n        </BackupPlan>\\n    </BackupPlans>\\n</DescribeBackupPlansResponse>","errorExample":""}]',
            'title' => '查询备份计划列表',
            'summary' => '调用DescribeBackupPlans查询备份计划列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeContactPoints' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp1b136j****5d57',
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
                                'example' => '467F786B-C765-40C4-8493-89F4CE95F1B6',
                            ],
                            'ContactPoints' => [
                                'type' => 'object',
                                'properties' => [
                                    'ContactPoint' => [
                                        'description' => '集群连接信息集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Port' => [
                                                    'description' => 'CQL端口。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '9042',
                                                ],
                                                'DataCenterId' => [
                                                    'description' => '数据中心ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou-g',
                                                ],
                                                'PublicAddresses' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'PublicAddress' => [
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '公网连接点。',
                                                                'type' => 'string',
                                                                'example' => 'cds-proxy-pub-bp1b136j****5d56-1-core-002.cassandra.rds.aliyuncs.com',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'PrivateAddresses' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'PrivateAddress' => [
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '私网连接点。',
                                                                'type' => 'string',
                                                                'example' => 'cds-bp1b136****5d56-1-core-001.cassandra.rds.aliyuncs.com',
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
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"467F786B-C765-40C4-8493-89F4CE95F1B6\\",\\n  \\"ContactPoints\\": {\\n    \\"ContactPoint\\": [\\n      {\\n        \\"Port\\": 9042,\\n        \\"DataCenterId\\": \\"cn-hangzhou-g\\",\\n        \\"PublicAddresses\\": {\\n          \\"PublicAddress\\": [\\n            \\"cds-proxy-pub-bp1b136j****5d56-1-core-002.cassandra.rds.aliyuncs.com\\"\\n          ]\\n        },\\n        \\"PrivateAddresses\\": {\\n          \\"PrivateAddress\\": [\\n            \\"cds-bp1b136****5d56-1-core-001.cassandra.rds.aliyuncs.com\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeContactPointsResponse>\\n<RequestId>467F786B-C765-40C4-8493-89F4CE95F1B6</RequestId>\\n<ContactPoints>\\n    <ContactPoint>\\n        <Port>9042</Port>\\n        <DataCenterId>cn-hangzhou-g</DataCenterId>\\n        <PrivateAddresses>\\n            <PrivateAddress>cds-bp1b136j****5d56-1-core-001.cassandra.rds.aliyuncs.com</PrivateAddress>\\n            <PrivateAddress>cds-bp1b136j****5d56-1-core-002.cassandra.rds.aliyuncs.com</PrivateAddress>\\n        </PrivateAddresses>\\n        <PublicAddresses>\\n            <PublicAddress>cds-proxy-pub-bp1b136j****5d56-1-core-001.cassandra.rds.aliyuncs.com</PublicAddress>\\n            <PublicAddress>cds-proxy-pub-bp1b136j****5d56-1-core-002.cassandra.rds.aliyuncs.com</PublicAddress>\\n        </PublicAddresses>\\n    </ContactPoint>\\n</ContactPoints>\\n</DescribeContactPointsResponse>","errorExample":""}]',
            'title' => '获取集群数据库连接信息',
            'summary' => '调用DescribeContactPoints获取集群数据库连接信息  。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AllocatePublicContactPoints' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp1hy2i****2z46l',
                    ],
                ],
                [
                    'name' => 'DataCenterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群数据中心ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou-g',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '50373857-C47B-4B64-9332-D0B5280B59EA',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"50373857-C47B-4B64-9332-D0B5280B59EA\\"\\n}","errorExample":""},{"type":"xml","example":"<AllocatePublicContactPointsResponse>\\r\\n    <RequestId>50373857-C47B-4B64-9332-D0B5280B59EA</RequestId>\\r\\n</AllocatePublicContactPointsResponse>","errorExample":""}]',
            'title' => '分配公共联系点',
            'summary' => '调用AllocatePublicContactPoints分配公共联系点。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ReleasePublicContactPoints' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp1b136j****5d51',
                    ],
                ],
                [
                    'name' => 'DataCenterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据中心ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou-g',
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
                                'example' => 'DE71CDCF-97AF-4D69-A327-5F4B23184B9A',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DE71CDCF-97AF-4D69-A327-5F4B23184B9A\\"\\n}","errorExample":""},{"type":"xml","example":"<ReleasePublicContactPointsResponse>\\r\\n<RequestId>DE71CDCF-97AF-4D69-A327-5F4B23184B9A</RequestId>\\r\\n</ReleasePublicContactPointsResponse>","errorExample":""}]',
            'title' => '释放公网连接点',
            'summary' => '调用ReleasePublicContactPoints释放公网连接点。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteNodeToolExecutionHistory' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-3872l6py****n4ug',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '作业ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'job-QdKa51s****U0gHf',
                    ],
                ],
                [
                    'name' => 'DataCenterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群数据中心ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shanghai-f',
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
                                'example' => 'D72B6BAC-BB95-48DA-99A9-A9903CD02498',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D72B6BAC-BB95-48DA-99A9-A9903CD02498\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteNodeToolExecutionHistoryResponse>\\r\\n    <RequestId>D72B6BAC-BB95-48DA-99A9-A9903CD02498</RequestId>\\r\\n</DeleteNodeToolExecutionHistoryResponse>","errorExample":""}]',
            'title' => '删除nodetool执行记录',
            'summary' => '调用DeleteNodeToolExecutionHistory删除nodetool执行记录。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeNodeToolExecutionHistory' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-t4n98w89z77*****',
                    ],
                ],
                [
                    'name' => 'DcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据中心Id，可通过DescribeDataCenters获得相应的数据中心Id。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ap-southeast-1a',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '具体某个执行作业的Id，可通过DescribeNodeToolExecutionHistories查询到。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'job-y0edwqo993m*****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Nodes' => [
                                'description' => '执行的节点名称。',
                                'type' => 'string',
                                'example' => 'core-1',
                            ],
                            'ErrorMessage' => [
                                'description' => '如遇到报错，错误详细信息。',
                                'type' => 'string',
                                'example' => 'Error: The keyspace ap-southeast-1a, does not exist',
                            ],
                            'Result' => [
                                'description' => '命令执行的结果。',
                                'type' => 'string',
                                'example' => 'result',
                            ],
                            'CreateTime' => [
                                'description' => '作业创建时间。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1603103307000',
                            ],
                            'RegionId' => [
                                'description' => '地域ID。',
                                'type' => 'string',
                                'example' => 'ap-southeast-1',
                            ],
                            'Arguments' => [
                                'description' => 'nodetool命的参数。',
                                'type' => 'string',
                                'example' => 'ap-southeast-1a',
                            ],
                            'RequestId' => [
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '94D5E0BE-F383-4BBB-B768-7FA3414E95A3',
                            ],
                            'IsEnded' => [
                                'description' => '是否已完成，true或false。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'JobId' => [
                                'description' => '执行的作业id。',
                                'type' => 'string',
                                'example' => 'job-y0edwqo993m*****',
                            ],
                            'Command' => [
                                'description' => 'nodetool命令。',
                                'type' => 'string',
                                'example' => 'status',
                            ],
                            'ModifyTime' => [
                                'description' => '执行完成时间。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1603103312000',
                            ],
                            'DataCenterId' => [
                                'description' => '集群数据中心ID。',
                                'type' => 'string',
                                'example' => 'ap-southeast-1a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Nodes\\": \\"core-1\\",\\n  \\"ErrorMessage\\": \\"Error: The keyspace ap-southeast-1a, does not exist\\",\\n  \\"Result\\": \\"result\\",\\n  \\"CreateTime\\": 1603103307000,\\n  \\"RegionId\\": \\"ap-southeast-1\\",\\n  \\"Arguments\\": \\"ap-southeast-1a\\",\\n  \\"RequestId\\": \\"94D5E0BE-F383-4BBB-B768-7FA3414E95A3\\",\\n  \\"IsEnded\\": true,\\n  \\"JobId\\": \\"job-y0edwqo993m*****\\",\\n  \\"Command\\": \\"status\\",\\n  \\"ModifyTime\\": 1603103312000,\\n  \\"DataCenterId\\": \\"ap-southeast-1a\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyTime>1603103312000</ModifyTime>\\n<DataCenterId>ap-southeast-1a</DataCenterId>\\n<RequestId>94D5E0BE-F383-4BBB-B768-7FA3414E95A3</RequestId>\\n<CreateTime>1603103307000</CreateTime>\\n<Arguments>ap-southeast-1a</Arguments>\\n<Nodes>core-1</Nodes>\\n<Result>result</Result>\\n<IsEnded>true</IsEnded>\\n<Command>status</Command>\\n<RegionId>ap-southeast-1</RegionId>\\n<ErrorMessage>Error: The keyspace ap-southeast-1a, does not exist</ErrorMessage>\\n<JobId>job-y0edwqo993m*****</JobId>","errorExample":""}]',
            'title' => 'DescribeNodeToolExecutionHistory',
            'summary' => '获取单个命令执行的信息（包含执行结果result）。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeNodeToolExecutionHistories' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'cassandra集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-3872l6py****n9ul',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，取值：大于0且不超过Integer的最大值。'."\n"
                            ."\n"
                            .'默认值：1。',
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
                        'description' => '每页记录数。',
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
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FDC6EF03-8B7D-470D-AB81-BD9C9713A9E3',
                            ],
                            'PageNumber' => [
                                'description' => '页码，取值：大于0且不超过Integer的最大值。'."\n"
                                    ."\n"
                                    .'默认值：1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '页面大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'Histories' => [
                                'type' => 'object',
                                'properties' => [
                                    'History' => [
                                        'description' => 'nodetool执行历史列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Nodes' => [
                                                    'description' => '执行节点。',
                                                    'type' => 'string',
                                                    'example' => 'core-1,core-2',
                                                ],
                                                'ErrorMessage' => [
                                                    'description' => '如遇到报错，错误详细信息。',
                                                    'type' => 'string',
                                                    'example' => 'See \\"nodetool help\\" or \\"nodetool help',
                                                ],
                                                'IsEnded' => [
                                                    'description' => '是否已执行完。可选值：true/false。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'CreateTime' => [
                                                    'description' => '集群创建时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1576725956000',
                                                ],
                                                'JobId' => [
                                                    'description' => '执行的作业id。job-xxxx',
                                                    'type' => 'string',
                                                    'example' => 'job-C3zcrKtZ****qapO',
                                                ],
                                                'Command' => [
                                                    'description' => 'nodetool命令。',
                                                    'type' => 'string',
                                                    'example' => 'settimeout misc',
                                                ],
                                                'DataCenterId' => [
                                                    'description' => '集群数据中心ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-shanghai-f',
                                                ],
                                                'Arguments' => [
                                                    'description' => 'nodetool命令后的参数。',
                                                    'type' => 'string',
                                                    'example' => '10093',
                                                ],
                                                'RegionId' => [
                                                    'description' => '地域ID',
                                                    'type' => 'string',
                                                    'example' => 'cn-shanghai',
                                                ],
                                                'ModifyTime' => [
                                                    'description' => '修改时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1576725689000',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FDC6EF03-8B7D-470D-AB81-BD9C9713A9E3\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 2,\\n  \\"Histories\\": {\\n    \\"History\\": [\\n      {\\n        \\"Nodes\\": \\"core-1,core-2\\",\\n        \\"ErrorMessage\\": \\"See \\\\\\\\\\\\\\"nodetool help\\\\\\\\\\\\\\" or \\\\\\\\\\\\\\"nodetool help\\",\\n        \\"IsEnded\\": true,\\n        \\"CreateTime\\": 1576725956000,\\n        \\"JobId\\": \\"job-C3zcrKtZ****qapO\\",\\n        \\"Command\\": \\"settimeout misc\\",\\n        \\"DataCenterId\\": \\"cn-shanghai-f\\",\\n        \\"Arguments\\": \\"10093\\",\\n        \\"RegionId\\": \\"cn-shanghai\\",\\n        \\"ModifyTime\\": 1576725689000\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeNodeToolExecutionHistoriesResponse>\\n<TotalCount>2</TotalCount>\\n<PageSize>10</PageSize>\\n<RequestId>FDC6EF03-8B7D-470D-AB81-BD9C9713A9E3</RequestId>\\n<PageNumber>1</PageNumber>\\n<Histories>\\n    <History>\\n        <ModifyTime>1576725953000</ModifyTime>\\n        <DataCenterId>cn-shanghai-f</DataCenterId>\\n        <Command>settimeout misc</Command>\\n        <CreateTime>1576725956000</CreateTime>\\n        <Arguments>10093</Arguments>\\n        <RegionId>cn-shanghai</RegionId>\\n        <JobId>job-0XDBTwhOxelqFikQ</JobId>\\n        <Nodes>core-1,core-2</Nodes>\\n    </History>\\n    <History>\\n        <ModifyTime>1576725689000</ModifyTime>\\n        <DataCenterId>cn-shanghai-f</DataCenterId>\\n        <Command>settimeout misc</Command>\\n        <CreateTime>1576725692000</CreateTime>\\n        <Arguments>10039</Arguments>\\n        <RegionId>cn-shanghai</RegionId>\\n        <JobId>job-C3zcrKtZijSyqapO</JobId>\\n        <Nodes>core-1,core-2</Nodes>\\n    </History>\\n</Histories>\\n</DescribeNodeToolExecutionHistoriesResponse>","errorExample":""}]',
            'title' => '分页获取nodetool执行记录',
            'summary' => '分页获取nodetool执行记录。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ExecuteNodeTool' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-3872l6py****n4u1',
                    ],
                ],
                [
                    'name' => 'Command',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'nodetool后的命令。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'settimeout misc',
                    ],
                ],
                [
                    'name' => 'Arguments',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'nodetool命令后面所跟参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10056',
                    ],
                ],
                [
                    'name' => 'DataCenterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群数据中心ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shanghai-f',
                    ],
                ],
                [
                    'name' => 'ExecuteNodes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行节点的详细信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'core-2',
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
                                'example' => 'DCF0CD20-0F85-4FD2-8F75-73636D1331F7',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DCF0CD20-0F85-4FD2-8F75-73636D1331F7\\"\\n}","errorExample":""},{"type":"xml","example":"<ExecuteNodeToolResponse>\\r\\n<RequestId>DCF0CD20-0F85-4FD2-8F75-73636D1331F7</RequestId>\\r\\n</ExecuteNodeToolResponse>","errorExample":""}]',
            'title' => 'ExecuteNodeTool',
            'summary' => '调用ExecuteNodeTool在指定dc执行nodetool命令。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyParameter' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp1l5ys6****wzr5',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cas_contention_timeout_in_ms',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数值。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2000',
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
                                'example' => 'BC262FE3-91ED-4FE7-BD75-190B62D8BABC',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BC262FE3-91ED-4FE7-BD75-190B62D8BABC\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyParameterResponse>\\r\\n<RequestId>BC262FE3-91ED-4FE7-BD75-190B62D8BABC</RequestId>\\r\\n</ModifyParameterResponse>","errorExample":""}]',
            'title' => '修改参数设置中的参数',
            'summary' => '调用ModifyParameter修改参数设置中的参数。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeParameterModificationHistories' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp18si70****10s2',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数修改历史列表页码。'."\n"
                            ."\n"
                            .'取值：大于0且不超过Integer的最大值。'."\n"
                            .'默认值：1。',
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
                        'description' => '参数修改历史列表每页显示行数。',
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
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0CD8CFEE-879B-42FF-BCE5-A339C36E77DF',
                            ],
                            'PageNumber' => [
                                'description' => '参数修改历史列表页码。'."\n"
                                    ."\n"
                                    .'取值：大于0且不超过Integer的最大值。'."\n"
                                    .'默认值：1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '参数修改历史的每页行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '18',
                            ],
                            'Histories' => [
                                'type' => 'object',
                                'properties' => [
                                    'History' => [
                                        'description' => '参数修改历史集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Time' => [
                                                    'description' => '参数变更时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1576758805000',
                                                ],
                                                'OldValue' => [
                                                    'description' => '	'."\n"
                                                        .'旧参数值。',
                                                    'type' => 'string',
                                                    'example' => '1000',
                                                ],
                                                'Name' => [
                                                    'description' => '参数名。',
                                                    'type' => 'string',
                                                    'example' => 'cas_contention_timeout_in_ms',
                                                ],
                                                'NewValue' => [
                                                    'description' => '	'."\n"
                                                        .'新参数值。',
                                                    'type' => 'string',
                                                    'example' => '2000',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0CD8CFEE-879B-42FF-BCE5-A339C36E77DF\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 18,\\n  \\"Histories\\": {\\n    \\"History\\": [\\n      {\\n        \\"Time\\": 1576758805000,\\n        \\"OldValue\\": \\"1000\\",\\n        \\"Name\\": \\"cas_contention_timeout_in_ms\\",\\n        \\"NewValue\\": \\"2000\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeParameterModificationHistoriesResponse>\\n<Histories>\\n    <History>\\n        <Name>cas_contention_timeout_in_ms</Name>\\n        <Time>1576758805000</Time>\\n        <NewValue>1100</NewValue>\\n        <OldValue>1000</OldValue>\\n    </History>\\n    <History>\\n        <Name>cas_contention_timeout_in_ms</Name>\\n        <Time>1576759085000</Time>\\n        <NewValue>1000</NewValue>\\n        <OldValue>1100</OldValue>\\n    </History>\\n</Histories>\\n<PageNumber>1</PageNumber>\\n<TotalCount>2</TotalCount>\\n<PageSize>10</PageSize>\\n<RequestId>0CD8CFEE-879B-42FF-BCE5-A339C36E77DF</RequestId>\\n</DescribeParameterModificationHistoriesResponse>","errorExample":""}]',
            'title' => '查看参数修改历史',
            'summary' => '调用DescribeParameterModificationHistories查看参数修改历史。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeParameters' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-j6c1zij8****994s',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '列表的页码'."\n"
                            ."\n"
                            .'取值：大于0且不超过Integer的最大值。'."\n"
                            .'默认值：1。',
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
                        'description' => '	'."\n"
                            .'分页查询时设置的每页行数，默认值10。',
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
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '863163EC-69DA-41B3-AB78-37C123114307',
                            ],
                            'PageNumber' => [
                                'description' => '列表的页码。'."\n"
                                    ."\n"
                                    .'取值：大于0且不超过Integer的最大值。'."\n"
                                    .'默认值：1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时设置的每页行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '9',
                            ],
                            'Parameters' => [
                                'type' => 'object',
                                'properties' => [
                                    'Parameter' => [
                                        'description' => '参数列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Value' => [
                                                    'description' => '运行参数值。',
                                                    'type' => 'string',
                                                    'example' => '1000',
                                                ],
                                                'DataType' => [
                                                    'description' => '参数单位。',
                                                    'type' => 'string',
                                                    'example' => 'INT',
                                                ],
                                                'Description' => [
                                                    'description' => '参数描述。',
                                                    'type' => 'string',
                                                    'example' => 'How long the coordinator should wait for seq or index scans to complete.',
                                                ],
                                                'Name' => [
                                                    'description' => '参数名。',
                                                    'type' => 'string',
                                                    'example' => 'range_request_timeout_in_ms',
                                                ],
                                                'DefaultValue' => [
                                                    'description' => '参数默认值。',
                                                    'type' => 'string',
                                                    'example' => '1000',
                                                ],
                                                'AllowedValues' => [
                                                    'description' => '可修改参数值。',
                                                    'type' => 'string',
                                                    'example' => 'R[1000, 60000]',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"863163EC-69DA-41B3-AB78-37C123114307\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 9,\\n  \\"Parameters\\": {\\n    \\"Parameter\\": [\\n      {\\n        \\"Value\\": \\"1000\\",\\n        \\"DataType\\": \\"INT\\",\\n        \\"Description\\": \\"How long the coordinator should wait for seq or index scans to complete.\\",\\n        \\"Name\\": \\"range_request_timeout_in_ms\\",\\n        \\"DefaultValue\\": \\"1000\\",\\n        \\"AllowedValues\\": \\"R[1000, 60000]\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeParametersResponse>\\n<Parameters>\\n    <Parameter>\\n        <Name>cas_contention_timeout_in_ms</Name>\\n        <Description>How long a coordinator should continue to retry a CAS operation that contends with other proposals for the same row.</Description>\\n        <AllowedValues>R[1000, 60000]</AllowedValues>\\n        <Value>1000</Value>\\n        <DataType>INT</DataType>\\n        <DefaultValue>1000</DefaultValue>\\n    </Parameter>\\n    <Parameter>\\n        <Name>counter_write_request_timeout_in_ms</Name>\\n        <Description>How long the coordinator should wait for counter writes to complete.</Description>\\n        <AllowedValues>R[1000, 60000]</AllowedValues>\\n        <Value>5000</Value>\\n        <DataType>INT</DataType>\\n        <DefaultValue>5000</DefaultValue>\\n    </Parameter>\\n    <Parameter>\\n        <Name>enable_materialized_views</Name>\\n        <Description>Enables materialized view creation on this node.</Description>\\n        <AllowedValues>G[true|false]</AllowedValues>\\n        <Value>true</Value>\\n        <DataType>STR</DataType>\\n        <DefaultValue>true</DefaultValue>\\n    </Parameter>\\n    <Parameter>\\n        <Name>enable_sasi_indexes</Name>\\n        <Description>Enables SASI index creation on this node.</Description>\\n        <AllowedValues>G[true|false]</AllowedValues>\\n        <Value>true</Value>\\n        <DataType>STR</DataType>\\n        <DefaultValue>true</DefaultValue>\\n    </Parameter>\\n    <Parameter>\\n        <Name>range_request_timeout_in_ms</Name>\\n        <Description>How long the coordinator should wait for seq or index scans to complete.</Description>\\n        <AllowedValues>R[1000, 60000]</AllowedValues>\\n        <Value>10000</Value>\\n        <DataType>INT</DataType>\\n        <DefaultValue>10000</DefaultValue>\\n    </Parameter>\\n    <Parameter>\\n        <Name>read_request_timeout_in_ms</Name>\\n        <Description>How long the coordinator should wait for read operations to complete.</Description>\\n        <AllowedValues>R[1000, 60000]</AllowedValues>\\n        <Value>5000</Value>\\n        <DataType>INT</DataType>\\n        <DefaultValue>5000</DefaultValue>\\n    </Parameter>\\n    <Parameter>\\n        <Name>request_timeout_in_ms</Name>\\n        <Description>The default timeout for other, miscellaneous operations.</Description>\\n        <AllowedValues>R[1000, 60000]</AllowedValues>\\n        <Value>10000</Value>\\n        <DataType>INT</DataType>\\n        <DefaultValue>10000</DefaultValue>\\n    </Parameter>\\n    <Parameter>\\n        <Name>truncate_request_timeout_in_ms</Name>\\n        <Description>How long the coordinator should wait for truncates to complete.</Description>\\n        <AllowedValues>R[1000, 60000]</AllowedValues>\\n        <Value>60000</Value>\\n        <DataType>INT</DataType>\\n        <DefaultValue>60000</DefaultValue>\\n    </Parameter>\\n    <Parameter>\\n        <Name>write_request_timeout_in_ms</Name>\\n        <Description>How long the coordinator should wait for writes to complete.</Description>\\n        <AllowedValues>R[1000, 60000]</AllowedValues>\\n        <Value>2000</Value>\\n        <DataType>INT</DataType>\\n        <DefaultValue>2000</DefaultValue>\\n    </Parameter>\\n</Parameters>\\n<PageNumber>1</PageNumber>\\n<TotalCount>9</TotalCount>\\n<PageSize>10</PageSize>\\n<RequestId>863163EC-69DA-41B3-AB78-37C123114307</RequestId>\\n</DescribeParametersResponse>","errorExample":""}]',
            'title' => '查询参数设置中的所有参数',
            'summary' => '调用DescribeParameters查询参数设置中的所有参数。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeClusterDashboard' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-bp14****135h',
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
                                'example' => '9339F598-0560-43CE-9F57-CD7B6B385DBB',
                            ],
                            'Dashboard' => [
                                'description' => '仪表盘数据信息集合。',
                                'type' => 'object',
                                'properties' => [
                                    'ClusterId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'cds-bp1syjlt****q976',
                                    ],
                                    'DataCenters' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'DataCenter' => [
                                                'description' => '数据中心列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'DataCenterId' => [
                                                            'description' => '集群数据中心ID。',
                                                            'type' => 'string',
                                                            'example' => 'cn-shanghai-e',
                                                        ],
                                                        'Nodes' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Node' => [
                                                                    'description' => '节点集合。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'Address' => [
                                                                                'description' => 'IP地址。',
                                                                                'type' => 'string',
                                                                                'example' => '192.***.12.3',
                                                                            ],
                                                                            'Status' => [
                                                                                'description' => '当前节点状态：'."\n"
                                                                                    ."\n"
                                                                                    .'- UpNormal：节点正在运行，节点相对于集群的状态为正常；'."\n"
                                                                                    .'- UpLeaving：节点正在运行，节点相对于集群的状态为断开中；'."\n"
                                                                                    .'- UpJoining：节点正在运行，节点相对于集群的状态为连接中；'."\n"
                                                                                    .'- UpMovving：节点正在运行，节点相对于集群的状态为移除中；'."\n"
                                                                                    .'- DownNormal：节点停止运行，节点相对于集群的状态为正常；'."\n"
                                                                                    .'- DownLeaving：节点停止运行，节点相对于集群的状态为断开中；'."\n"
                                                                                    .'- DownJoining：节点停止运行，节点相对于集群的状态为连接中；'."\n"
                                                                                    .'- DownMovving：节点停止运行，节点相对于集群的状态为移除中；'."\n"
                                                                                    ."\n"
                                                                                    .'特别的：如果显示“?N”，则很有可能节点之间不通，请检查网络问题或者防火墙。',
                                                                                'type' => 'string',
                                                                                'example' => 'UpNormal',
                                                                            ],
                                                                            'Load' => [
                                                                                'description' => '负载。',
                                                                                'type' => 'string',
                                                                                'example' => '54.4 MiB',
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
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9339F598-0560-43CE-9F57-CD7B6B385DBB\\",\\n  \\"Dashboard\\": {\\n    \\"ClusterId\\": \\"cds-bp1syjlt****q976\\",\\n    \\"DataCenters\\": {\\n      \\"DataCenter\\": [\\n        {\\n          \\"DataCenterId\\": \\"cn-shanghai-e\\",\\n          \\"Nodes\\": {\\n            \\"Node\\": [\\n              {\\n                \\"Address\\": \\"192.***.12.3\\",\\n                \\"Status\\": \\"UpNormal\\",\\n                \\"Load\\": \\"54.4 MiB\\"\\n              }\\n            ]\\n          }\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeClusterDashboardResponse>\\n    <RequestId>9339F598-0560-43CE-9F57-CD7B6B385DBB</RequestId>\\n    <Dashboard>\\n        <DataCenters>\\n            <DataCenter>\\n                <DataCenterId>cn-shanghai-e</DataCenterId>\\n                <Nodes>\\n                    <Node>\\n                        <Status>UpNormal</Status>\\n                        <Load>54.4 MiB</Load>\\n                        <Address>192.***.0.208</Address>\\n                    </Node>\\n                    <Node>\\n                        <Status>UpNormal</Status>\\n                        <Load>49.99 MiB</Load>\\n                        <Address>192.***.0.209</Address>\\n                    </Node>\\n                    <Node>\\n                        <Status>UpNormal</Status>\\n                        <Load>37.8 MiB</Load>\\n                        <Address>192.***.0.211</Address>\\n                    </Node>\\n                </Nodes>\\n            </DataCenter>\\n        </DataCenters>\\n        <ClusterId>cds-uf6m0bod4***6159</ClusterId>\\n    </Dashboard>\\n</DescribeClusterDashboardResponse>","errorExample":""}]',
            'title' => '查询仪表盘数据',
            'summary' => '调用DescribeClusterDashboard查询仪表盘数据。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域Id。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '如果数据过多，会返回NextToken，用于查询下一页。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'NextToken',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '第N个资源Id，此处是为集群Id。可同时查询多个资源，可以传参数名为ResourceId.2、ResourceId.3等等。N为正整数。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'required' => false,
                        'example' => 'cds-wz9p9ccq****92as',
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '	'."\n"
                                        .'要查询的标签的key，可有多个。N为正整数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'key1',
                                ],
                                'Value' => [
                                    'description' => '	'."\n"
                                        .'要查询的标签的value，可有多个。N为正整数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'value1',
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
                                'description' => '	'."\n"
                                    .'下一页开始的Token，NextToken为空说明没有下一页。',
                                'type' => 'string',
                                'example' => '1d2db86sca4384811e0b5e8707e68181f',
                            ],
                            'RequestId' => [
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '74F02441-9A8D-48F6-933F-E317AEB28DBF',
                            ],
                            'TagResources' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagResource' => [
                                        'description' => '资源列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TagValue' => [
                                                    'description' => '标签值。',
                                                    'type' => 'string',
                                                    'example' => 'v1',
                                                ],
                                                'ResourceType' => [
                                                    'description' => '资源类型。',
                                                    'type' => 'string',
                                                    'example' => 'ALIYUN::CASSANDRA::CLUSTER',
                                                ],
                                                'ResourceId' => [
                                                    'description' => '资源ID。',
                                                    'type' => 'string',
                                                    'example' => 'cds-wz9p9ccq****92as',
                                                ],
                                                'TagKey' => [
                                                    'description' => '标签键。',
                                                    'type' => 'string',
                                                    'example' => 'k1',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"1d2db86sca4384811e0b5e8707e68181f\\",\\n  \\"RequestId\\": \\"74F02441-9A8D-48F6-933F-E317AEB28DBF\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"TagValue\\": \\"v1\\",\\n        \\"ResourceType\\": \\"ALIYUN::CASSANDRA::CLUSTER\\",\\n        \\"ResourceId\\": \\"cds-wz9p9ccq****92as\\",\\n        \\"TagKey\\": \\"k1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>74F02441-9A8D-48F6-933F-E317AEB28DBF</RequestId>\\n<NextToken>1d2db86sca4384811e0b5e8707e68181f</NextToken>\\n<TagResources>\\n    <TagResource>\\n        <ResourceId>cds-wz9p9ccq****92as</ResourceId>\\n        <TagKey>k1</TagKey>\\n        <ResourceType>ALIYUN::CASSANDRA::CLUSTER</ResourceType>\\n        <TagValue>v1</TagValue>\\n    </TagResource>\\n</TagResources>","errorExample":""}]',
            'title' => 'ListTagResources',
            'summary' => '通过ResourceId或者Tag（Key查询、key和value同时查询）获取标签列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTags' => [
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID，可通过DescribeRegions获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shanghai',
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
                                'example' => '36D1BE9B-3C4A-425B-947A-69E3D77999C4',
                            ],
                            'Tags' => [
                                'type' => 'object',
                                'properties' => [
                                    'Tag' => [
                                        'description' => '标签列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TagValue' => [
                                                    'description' => '标签值。',
                                                    'type' => 'string',
                                                    'example' => 'v2',
                                                ],
                                                'TagKey' => [
                                                    'description' => '标签键。',
                                                    'type' => 'string',
                                                    'example' => 'k1',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"36D1BE9B-3C4A-425B-947A-69E3D77999C4\\",\\n  \\"Tags\\": {\\n    \\"Tag\\": [\\n      {\\n        \\"TagValue\\": \\"v2\\",\\n        \\"TagKey\\": \\"k1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListTagsResponse>\\n<Tags>\\n    <Tag>\\n        <TagValue/>\\n        <TagKey>k1</TagKey>\\n    </Tag>\\n    <Tag>\\n        <TagValue>v1</TagValue>\\n        <TagKey>k1</TagKey>\\n    </Tag>\\n    <Tag>\\n        <TagValue>v2</TagValue>\\n        <TagKey>k1</TagKey>\\n    </Tag>\\n    <Tag>\\n        <TagValue>v2</TagValue>\\n        <TagKey>k2</TagKey>\\n    </Tag>\\n    <Tag>\\n        <TagValue>v3</TagValue>\\n        <TagKey>k3</TagKey>\\n    </Tag>\\n    <Tag>\\n        <TagValue>single</TagValue>\\n        <TagKey>type</TagKey>\\n    </Tag>\\n</Tags>\\n<RequestId>36D1BE9B-3C4A-425B-947A-69E3D77999C4</RequestId>\\n</ListTagsResponse>","errorExample":""}]',
            'title' => '获取指定 Region 下所有Tag',
            'summary' => '根据region获取该region下所有Tag。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UnTagResources' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shenzhen',
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否删除全部标签。如果传入了TagKey，则只按TagKey删除。为true/false，为true时切未传入TagKey时删除全部标签。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要删除的第N个资源Id，此处是为集群Id。如果有多个，可以传参数名为ResourceId.2、ResourceId.3等等。N为正整数。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                        'required' => true,
                        'example' => 'cds-wz92o754****7779',
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '第N个要删除的标签的键，可传多个，TagKey.2、TagKey.3等待。N为正整数。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                        'required' => false,
                        'example' => 'key',
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
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '9CBF8DF0-4931-4A54-9B60-4C6E1AB59286',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9CBF8DF0-4931-4A54-9B60-4C6E1AB59286\\"\\n}","errorExample":""},{"type":"xml","example":"<UnTagResourcesResponse>\\r\\n<RequestId>9CBF8DF0-4931-4A54-9B60-4C6E1AB59286</RequestId>\\r\\n</UnTagResourcesResponse>","errorExample":""}]',
            'title' => '删除资源标签',
            'summary' => '调用UnTagResources接口删除资源标签。对照TagResources创建接口。',
        ],
        'MoveResourceGroup' => [
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群Id。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cds-k6g0e3l9h****',
                    ],
                ],
                [
                    'name' => 'NewResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的资源组Id，可在资源组控制台查看可用资源组。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'rg-a4f9jl8u4e****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => 'FF520A14-0247-47C2-B5CA-7E01D34E9C8A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FF520A14-0247-47C2-B5CA-7E01D34E9C8A\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>FF520A14-0247-47C2-B5CA-7E01D34E9C8A</RequestId>","errorExample":""}]',
            'title' => '移动资源所在的资源组',
            'summary' => '通过MoveResourceGroup移动资源所在的资源组。',
            'requestParamsDescription' => ' ',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shenzhen',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '第N个资源ID，此处是为集群ID。如果有多个，可以传参数名为ResourceId.2、ResourceId.3等等，会给所有资源ID加上Tag里的标签。N为正整数。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'required' => true,
                        'example' => 'cds-wz92o754****7779',
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '第N个标签的key，N为正整数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'k1',
                                ],
                                'Value' => [
                                    'description' => '标签N的value。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'v1',
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
                                'example' => '2656FA19-6059-40C8-A157-3FFBEAEC2369',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2656FA19-6059-40C8-A157-3FFBEAEC2369\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\r\\n<RequestId>2656FA19-6059-40C8-A157-3FFBEAEC2369</RequestId>\\r\\n</TagResourcesResponse>","errorExample":""}]',
            'title' => '为实例增加 Tag 标签',
            'summary' => '调用TagResources接口为实例增加Tag标签。',
            'description' => '****',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'cassandra.aliyuncs.com',
        ],
    ],
];
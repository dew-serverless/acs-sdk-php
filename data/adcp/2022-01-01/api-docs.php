<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'adcp',
        'version' => '2022-01-01',
    ],
    'directories' => [
        [
            'id' => 165693,
            'title' => '集群',
            'type' => 'directory',
            'children' => [
                'CreateHubCluster',
                'DescribeHubClusters',
                'DescribeHubClusterDetails',
                'DeleteHubCluster',
                'AttachClusterToHub',
                'DescribeManagedClusters',
                'DetachClusterFromHub',
                'UpdateHubClusterFeature',
            ],
        ],
        [
            'id' => 165701,
            'title' => '授权',
            'type' => 'directory',
            'children' => [
                'DescribeUserPermissions',
                'GrantUserPermissions',
                'DescribeHubClusterKubeconfig',
                'GrantUserPermission',
                'UpdateUserPermission',
                'DeleteUserPermission',
            ],
        ],
        [
            'id' => 182212,
            'title' => '安全策略',
            'type' => 'directory',
            'children' => [
                'DescribePolicies',
                'DescribePolicyDetails',
                'DeployPolicyInstance',
                'DescribePolicyInstances',
                'DescribePolicyInstancesStatus',
                'DescribePolicyGovernanceInCluster',
                'DeletePolicyInstance',
            ],
        ],
        [
            'id' => 165703,
            'title' => '日志',
            'type' => 'directory',
            'children' => [
                'DescribeHubClusterLogs',
            ],
        ],
        [
            'id' => 165799,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'DescribeRegions',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'ChangeResourceGroup',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'Tag' => [
                'title' => '集群Tag配置',
                'description' => '集群Tag配置	',
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'title' => 'key值',
                        'type' => 'string',
                        'example' => 'env',
                    ],
                    'Value' => [
                        'title' => 'value值',
                        'type' => 'string',
                        'example' => 'prod',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateHubCluster' => [
            'summary' => '创建一个ACK One主控实例。',
            'methods' => [
                'post',
                'get',
            ],
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '118358',
                'abilityTreeNodes' => [
                    'FEATUREadcpH1M5DC',
                    'FEATUREadcpMQ5GFM',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '地域ID。说明您可以通过DescribeRegions接口查看可用地域。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '集群所属的VPC ID。您可以调用DescribeVpcs查询已创建的VPC信息。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vpc-f8zin0jscsr84s96tg***',
                    ],
                ],
                [
                    'name' => 'ApiServerPublicEip',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否使用公网地址暴露API Server，取值'."\n"
                            ."\n"
                            .'- true 使用公网API Server'."\n"
                            .'- false 使用内网API Server',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '集群名称',
                        'description' => '主控实例名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ack-demo',
                    ],
                ],
                [
                    'name' => 'VSwitches',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '虚拟交换机ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["vsw-2zeaijsas4zkzz81xm***"]',
                    ],
                ],
                [
                    'name' => 'AuditLogEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启审计日志。取值'."\n"
                            .'- true：开启。'."\n"
                            .'- false：关闭。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'IsEnterpriseSecurityGroup',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否企业安全组',
                        'description' => '是否企业安全组。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Profile',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '集群配置',
                        'description' => '主控实例配置信息。取值：'."\n"
                            ."\n"
                            .'- `Default`：标准场景主控实例。'."\n"
                            .'- `XFlow`：工作流场景主控实例。'."\n"
                            ."\n"
                            .'默认值：`Default`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Default',
                    ],
                ],
                [
                    'name' => 'ArgoServerEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用工作流集群UI。仅当Profile为XFlow的时候生效。取值：'."\n"
                            ."\n"
                            .'true：启用。'."\n"
                            .'false：禁用。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'WorkflowScheduleMode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作流调度模式。仅当Profile为XFlow的时候生效。取值'."\n"
                            .'- cost-optimized：成本优先'."\n"
                            .'- stock-optimized：库存优先',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cost-optimized',
                    ],
                ],
                [
                    'name' => 'PriceLimit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作流负载价格限制。WorkflowScheduleMode取值为cost-optimized时生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0.08',
                    ],
                ],
                [
                    'name' => 'ResourceGroupID',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-d1ye4kpy1z***',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签信息。'."\n"
                            ."\n"
                            .'一次最多支持输入20个标签信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源的标签。',
                            'required' => false,
                            '$ref' => '#/components/schemas/Tag',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '62F5AA2B-A2C9-5135-BCE2-C2167099****',
                            ],
                            'ClusterId' => [
                                'description' => '主控实例ID。',
                                'type' => 'string',
                                'example' => 'c09946603cd764dac96135f51d1ba****',
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 'T-62523eda841eca071400****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'asynchronous',
                'callback' => 'adcp::2022-01-01::DescribeHubClusterDetails',
                'callbackInterval' => 15000,
                'maxCallbackTimes' => 100,
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"62F5AA2B-A2C9-5135-BCE2-C2167099****\\",\\n  \\"ClusterId\\": \\"c09946603cd764dac96135f51d1ba****\\",\\n  \\"TaskId\\": \\"T-62523eda841eca071400****\\"\\n}","type":"json"}]',
            'title' => '创建ACK One主控实例',
        ],
        'DescribeHubClusters' => [
            'summary' => '获取用户ACK One主控实例列表'."\n"
                .'。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '118356',
                'abilityTreeNodes' => [
                    'FEATUREadcpH1M5DC',
                    'FEATUREadcpMQ5GFM',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Profile',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '面向场景时的主控类型，取值：'."\n"
                            ."\n"
                            .'- `Default`：标准场景主控实例。'."\n"
                            .'- `XFlow`：工作流场景主控实例。'."\n"
                            ."\n"
                            .'默认值：`Default`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Default',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aek3dinj3xkf***',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签。最多支持指定20个标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签。',
                            'required' => false,
                            '$ref' => '#/components/schemas/Tag',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2D676EFC-8C04-5CCE-A08E-BB97D24B47E8',
                            ],
                            'Clusters' => [
                                'description' => '集群列表信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '集群信息列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Endpoints' => [
                                            'description' => '集群访问端点。'."\n"
                                                ."\n",
                                            'type' => 'object',
                                            'properties' => [
                                                'IntranetApiServerEndpoint' => [
                                                    'description' => 'API Server 地址（内网）。',
                                                    'type' => 'string',
                                                    'example' => 'https://172.16.6.**:6443'."\n",
                                                ],
                                                'PublicApiServerEndpoint' => [
                                                    'description' => 'API Server 地址（公网）。',
                                                    'type' => 'string',
                                                    'example' => 'https://123.57.21.***:6443'."\n",
                                                ],
                                            ],
                                        ],
                                        'ClusterInfo' => [
                                            'description' => '集群详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Profile' => [
                                                    'description' => '集群配置信息。'."\n"
                                                        ."\n",
                                                    'type' => 'string',
                                                    'example' => 'Default',
                                                ],
                                                'CreationTime' => [
                                                    'description' => '集群创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2021-11-05T10:25:48Z',
                                                ],
                                                'UpdateTime' => [
                                                    'description' => '集群最后更新时间。',
                                                    'type' => 'string',
                                                    'example' => '2021-09-02T13:39:50Z',
                                                ],
                                                'ErrorMessage' => [
                                                    'description' => '集群创建失败的错误提示。',
                                                    'type' => 'string',
                                                    'example' => 'Success',
                                                ],
                                                'Version' => [
                                                    'description' => '集群版本。',
                                                    'type' => 'string',
                                                    'example' => '1.22.3-aliyun.1'."\n",
                                                ],
                                                'State' => [
                                                    'description' => '集群状态：'."\n"
                                                        ."\n"
                                                        .'- initial：初始化中'."\n"
                                                        .'- failed：创建失败'."\n"
                                                        .'- running：运行中'."\n"
                                                        .'- inactive：待激活'."\n"
                                                        .'- deleting：删除中'."\n"
                                                        .'- delete_failed：删除失败'."\n"
                                                        .'- deleted：已删除',
                                                    'type' => 'string',
                                                    'example' => 'running',
                                                ],
                                                'ClusterId' => [
                                                    'description' => '集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'c2d3e0121ea214b438010502a8019****',
                                                ],
                                                'Name' => [
                                                    'description' => '集群名称。',
                                                    'type' => 'string',
                                                    'example' => 'ackone-heyuan',
                                                ],
                                                'RegionId' => [
                                                    'description' => '地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-beijing',
                                                ],
                                                'ClusterSpec' => [
                                                    'description' => '集群规格'."\n"
                                                        ."\n"
                                                        .'- ack.pro.small 基础版'."\n",
                                                    'type' => 'string',
                                                    'example' => 'ack.pro.small',
                                                ],
                                                'ResourceGroupID' => [
                                                    'description' => '资源组ID。',
                                                    'type' => 'string',
                                                    'example' => 'rg-dt6rk4xm1r6***',
                                                ],
                                                'Tags' => [
                                                    'description' => '标签列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '标签。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Key' => [
                                                                'description' => '标签的键。',
                                                                'type' => 'string',
                                                                'example' => 'headername',
                                                            ],
                                                            'Value' => [
                                                                'description' => '标签的值。',
                                                                'type' => 'string',
                                                                'example' => 'release',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Network' => [
                                            'description' => '集群的网络配置。',
                                            'type' => 'object',
                                            'properties' => [
                                                'VpcId' => [
                                                    'description' => '集群所属的VPC ID。',
                                                    'type' => 'string',
                                                    'example' => 'vpc-2zeusrwi7c2mlww4a****',
                                                ],
                                                'VSwitches' => [
                                                    'description' => '集群所属的交换机ID。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '交换机ID。',
                                                        'type' => 'string',
                                                        'example' => '["vsw-2ze1h7tt2fgr1gxlx****"]',
                                                    ],
                                                ],
                                                'SecurityGroupIDs' => [
                                                    'description' => '安全组id。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '安全组id。',
                                                        'type' => 'string',
                                                        'example' => '["sg-2ze1h7tt2fgr****"]'."\n",
                                                    ],
                                                ],
                                                'ClusterDomain' => [
                                                    'description' => '集群域名。',
                                                    'type' => 'string',
                                                    'example' => 'cluster.local',
                                                ],
                                            ],
                                        ],
                                        'ApiServer' => [
                                            'description' => 'apiserver信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'EnabledPublic' => [
                                                    'description' => '是否开启公网API Server访问端点'."\n"
                                                        ."\n"
                                                        .'- true 开启公网访问端点'."\n"
                                                        .'- false 未开启公网访问端点',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'LoadBalancerId' => [
                                                    'description' => '关联的负载均衡实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'lb-bp1qyp4l6bscqxw69****',
                                                ],
                                                'ApiServerEipId' => [
                                                    'description' => 'EIP实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'eip-xxx',
                                                ],
                                            ],
                                        ],
                                        'MeshConfig' => [
                                            'description' => '服务网格(ASM)配置',
                                            'type' => 'object',
                                            'properties' => [
                                                'EnableMesh' => [
                                                    'description' => '是否启用服务网格(ASM)'."\n"
                                                        ."\n"
                                                        .'- true 启用'."\n"
                                                        .'- false 未启用',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'MeshId' => [
                                                    'description' => '服务网格实例ID',
                                                    'type' => 'string',
                                                    'example' => 'c2d3e0121ea214b438010502a8019****',
                                                ],
                                            ],
                                        ],
                                        'LogConfig' => [
                                            'description' => '日志配置。',
                                            'type' => 'object',
                                            'properties' => [
                                                'EnableLog' => [
                                                    'description' => '是否启用审计日志配置'."\n"
                                                        ."\n"
                                                        .'- true 启用'."\n"
                                                        .'- false 停用',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'LogProject' => [
                                                    'description' => '日志服务LogProject的名称。',
                                                    'type' => 'string',
                                                    'example' => 'audit-log-abc',
                                                ],
                                                'LogStoreTTL' => [
                                                    'description' => '日志存储天数',
                                                    'type' => 'string',
                                                    'example' => '7',
                                                ],
                                            ],
                                        ],
                                        'Conditions' => [
                                            'description' => '集群删除条件信息列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '集群删除条件信息对象',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Type' => [
                                                        'description' => '删除条件类型',
                                                        'type' => 'string',
                                                        'example' => 'DeletionProtection',
                                                    ],
                                                    'Status' => [
                                                        'description' => '删除条件状态，取值'."\n"
                                                            ."\n"
                                                            .'- True 不能删除'."\n"
                                                            .'- False 允许删除'."\n"
                                                            .'- Unknow 未知',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [],
                                                        'example' => 'True',
                                                    ],
                                                    'Reason' => [
                                                        'description' => '删除条件原因',
                                                        'type' => 'string',
                                                        'example' => 'Successful',
                                                    ],
                                                    'Message' => [
                                                        'description' => '删除条件错误信息',
                                                        'type' => 'string',
                                                        'example' => 'Successful!',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2D676EFC-8C04-5CCE-A08E-BB97D24B47E8\\",\\n  \\"Clusters\\": [\\n    {\\n      \\"Endpoints\\": {\\n        \\"IntranetApiServerEndpoint\\": \\"https://172.16.6.**:6443\\\\n\\",\\n        \\"PublicApiServerEndpoint\\": \\"https://123.57.21.***:6443\\\\n\\"\\n      },\\n      \\"ClusterInfo\\": {\\n        \\"Profile\\": \\"Default\\",\\n        \\"CreationTime\\": \\"2021-11-05T10:25:48Z\\",\\n        \\"UpdateTime\\": \\"2021-09-02T13:39:50Z\\",\\n        \\"ErrorMessage\\": \\"Success\\",\\n        \\"Version\\": \\"1.22.3-aliyun.1\\\\n\\",\\n        \\"State\\": \\"running\\",\\n        \\"ClusterId\\": \\"c2d3e0121ea214b438010502a8019****\\",\\n        \\"Name\\": \\"ackone-heyuan\\",\\n        \\"RegionId\\": \\"cn-beijing\\",\\n        \\"ClusterSpec\\": \\"ack.pro.small\\",\\n        \\"ResourceGroupID\\": \\"rg-dt6rk4xm1r6***\\",\\n        \\"Tags\\": [\\n          {\\n            \\"Key\\": \\"headername\\",\\n            \\"Value\\": \\"release\\"\\n          }\\n        ]\\n      },\\n      \\"Network\\": {\\n        \\"VpcId\\": \\"vpc-2zeusrwi7c2mlww4a****\\",\\n        \\"VSwitches\\": [\\n          \\"[\\\\\\"vsw-2ze1h7tt2fgr1gxlx****\\\\\\"]\\"\\n        ],\\n        \\"SecurityGroupIDs\\": [\\n          \\"[\\\\\\"sg-2ze1h7tt2fgr****\\\\\\"]\\\\n\\"\\n        ],\\n        \\"ClusterDomain\\": \\"cluster.local\\"\\n      },\\n      \\"ApiServer\\": {\\n        \\"EnabledPublic\\": true,\\n        \\"LoadBalancerId\\": \\"lb-bp1qyp4l6bscqxw69****\\",\\n        \\"ApiServerEipId\\": \\"eip-xxx\\"\\n      },\\n      \\"MeshConfig\\": {\\n        \\"EnableMesh\\": false,\\n        \\"MeshId\\": \\"c2d3e0121ea214b438010502a8019****\\"\\n      },\\n      \\"LogConfig\\": {\\n        \\"EnableLog\\": true,\\n        \\"LogProject\\": \\"audit-log-abc\\",\\n        \\"LogStoreTTL\\": \\"7\\"\\n      },\\n      \\"Conditions\\": [\\n        {\\n          \\"Type\\": \\"DeletionProtection\\",\\n          \\"Status\\": \\"True\\",\\n          \\"Reason\\": \\"Successful\\",\\n          \\"Message\\": \\"Successful!\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询已创建的主控实例列表',
        ],
        'DescribeHubClusterDetails' => [
            'summary' => '获取ACKOne主控集群的详细信息'."\n"
                .'。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '118359',
                'abilityTreeNodes' => [
                    'FEATUREadcpH1M5DC',
                    'FEATUREadcpMQ5GFM',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '集群ID',
                        'description' => '主控集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c676decda7b8148d69a9aba751877****',
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
                                'example' => '52C1B7DF-96C1-5214-97B6-1B0859FEAFE5',
                            ],
                            'Cluster' => [
                                'description' => '集群详情。',
                                'type' => 'object',
                                'properties' => [
                                    'Endpoints' => [
                                        'description' => '集群访问端点。',
                                        'type' => 'object',
                                        'properties' => [
                                            'IntranetApiServerEndpoint' => [
                                                'description' => 'API Server地址（内网）。',
                                                'type' => 'string',
                                                'example' => 'https://172.16.6.**:6443',
                                            ],
                                            'PublicApiServerEndpoint' => [
                                                'description' => 'API Server地址（公网）。',
                                                'type' => 'string',
                                                'example' => 'https://123.57.21.***:6443',
                                            ],
                                        ],
                                    ],
                                    'ClusterInfo' => [
                                        'description' => '集群详情。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Profile' => [
                                                'description' => '集群配置信息。',
                                                'type' => 'string',
                                                'example' => 'Default',
                                            ],
                                            'CreationTime' => [
                                                'description' => '集群创建时间。',
                                                'type' => 'string',
                                                'example' => '2022-03-23T06:22:28Z',
                                            ],
                                            'UpdateTime' => [
                                                'description' => '集群更新时间。',
                                                'type' => 'string',
                                                'example' => '2022-03-21T02:51:35.542Z',
                                            ],
                                            'ErrorMessage' => [
                                                'description' => '集群创建失败的错误提示。',
                                                'type' => 'string',
                                                'example' => 'The specified product does not exist.',
                                            ],
                                            'Version' => [
                                                'description' => '集群版本。',
                                                'type' => 'string',
                                                'example' => '1.22.3-aliyun.1',
                                            ],
                                            'State' => [
                                                'description' => '集群状态：'."\n"
                                                    .'- initial：初始化中'."\n"
                                                    .'- failed：创建失败'."\n"
                                                    .'- running：运行中'."\n"
                                                    .'- inactive：待激活'."\n"
                                                    .'- deleting：删除中'."\n"
                                                    .'- delete_failed：删除失败'."\n"
                                                    .'- deleted：已删除',
                                                'type' => 'string',
                                                'example' => 'running',
                                            ],
                                            'ClusterId' => [
                                                'description' => '主控集群ID。',
                                                'type' => 'string',
                                                'example' => 'cb09fda0dc2f94a8397c76638c7ecf***',
                                            ],
                                            'Name' => [
                                                'description' => '集群名称。',
                                                'type' => 'string',
                                                'example' => 'ackone-heyuan',
                                            ],
                                            'RegionId' => [
                                                'description' => '集群所在地域ID',
                                                'type' => 'string',
                                                'example' => 'cn-beijing',
                                            ],
                                            'ClusterSpec' => [
                                                'description' => '集群规格'."\n"
                                                    ."\n"
                                                    .'- ack.pro.small 基础版',
                                                'type' => 'string',
                                                'example' => 'ack.pro.small ',
                                            ],
                                            'MetaData' => [
                                                'description' => '元数据。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'ACKOne' => [
                                                        'description' => 'ACK One Fleet元数据',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'GitOps' => [
                                                                'description' => 'ACK One GitOps元数据',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Enabled' => [
                                                                        'description' => '是否启用GitOps。取值'."\n"
                                                                            ."\n"
                                                                            .'- true： 启用'."\n"
                                                                            .'- false： 禁用',
                                                                        'type' => 'boolean',
                                                                        'example' => 'true',
                                                                    ],
                                                                    'HAEnabled' => [
                                                                        'description' => '是否启用GitOps 高可用。取值'."\n"
                                                                            ."\n"
                                                                            .'- true： 启用'."\n"
                                                                            .'- false： 禁用',
                                                                        'type' => 'boolean',
                                                                        'example' => 'true',
                                                                    ],
                                                                    'PublicAccessEnabled' => [
                                                                        'description' => '是否启用ArgoCD控制台公网域名解析。取值：'."\n"
                                                                            ."\n"
                                                                            .'- true：启用。'."\n"
                                                                            .'- false：禁用。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'true',
                                                                    ],
                                                                    'AccessControlList' => [
                                                                        'description' => '公网访问ACL控制列表。仅当PublicAccessEnabled为true时有效。',
                                                                        'type' => 'array',
                                                                        'items' => [
                                                                            'description' => '公网访问ACL控制列表。仅当PublicAccessEnabled为true时有效。',
                                                                            'type' => 'string',
                                                                            'example' => '["192.168.0.0/16"]',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            'WorkFlow' => [
                                                                'description' => 'ACK One工作流元数据',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'ArgoWorkflow' => [
                                                                        'description' => 'ACK One工作流元数据',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'Enabled' => [
                                                                                'description' => '是否启用工作流配置。取值'."\n"
                                                                                    ."\n"
                                                                                    .'- true： 启用'."\n"
                                                                                    .'- false： 禁用',
                                                                                'type' => 'boolean',
                                                                                'example' => 'true',
                                                                            ],
                                                                            'ServerEnabled' => [
                                                                                'description' => '是否启用Argo Server UI。取值'."\n"
                                                                                    ."\n"
                                                                                    .'- true： 启用'."\n"
                                                                                    .'- false： 禁用',
                                                                                'type' => 'string',
                                                                                'example' => 'true',
                                                                            ],
                                                                            'PublicAccessEnabled' => [
                                                                                'description' => '是否启用Argo Workflow 控制台公网域名解析。取值：'."\n"
                                                                                    ."\n"
                                                                                    .'- true：启用。'."\n"
                                                                                    .'- false：禁用。',
                                                                                'type' => 'boolean',
                                                                                'example' => 'true',
                                                                            ],
                                                                            'AccessControlList' => [
                                                                                'description' => '公网访问ACL控制列表。仅当PublicAccessEnabled为true时有效。',
                                                                                'type' => 'array',
                                                                                'items' => [
                                                                                    'description' => '公网访问ACL控制列表。仅当PublicAccessEnabled为true时有效。',
                                                                                    'type' => 'string',
                                                                                    'example' => '["192.168.0.0/16"]'."\n",
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
                                            'ResourceGroupID' => [
                                                'description' => '资源组ID。',
                                                'type' => 'string',
                                                'example' => 'rg-2nnnd0b6q37***',
                                            ],
                                            'Tags' => [
                                                'description' => '标签列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '标签。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Key' => [
                                                            'description' => '标签的键。',
                                                            'type' => 'string',
                                                            'example' => 'user_resource',
                                                        ],
                                                        'Value' => [
                                                            'description' => '标签的值。',
                                                            'type' => 'string',
                                                            'example' => 'gfggfwq-697',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Network' => [
                                        'description' => '集群的网络配置。',
                                        'type' => 'object',
                                        'properties' => [
                                            'VpcId' => [
                                                'description' => 'VPC的ID。',
                                                'type' => 'string',
                                                'example' => 'vpc-f8ziib1019r9o0hdv2***',
                                            ],
                                            'VSwitches' => [
                                                'description' => 'vSwitch列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '交换机ID',
                                                    'type' => 'string',
                                                    'example' => '["vsw-f8zubs2z9x1cjnzk29***"]',
                                                ],
                                            ],
                                            'SecurityGroupIDs' => [
                                                'description' => '关联的安全组ID。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '关联的安全组ID。',
                                                    'type' => 'string',
                                                    'example' => '["sg-f8zubs2z9x1cj***"]',
                                                ],
                                            ],
                                            'IPStack' => [
                                                'description' => '支持的IP版本'."\n"
                                                    ."\n"
                                                    .'- ipv4 支持ipv4'."\n"
                                                    .'- ipv6 支持ipv6'."\n"
                                                    .'- dual 同时支持ipv4和ipv6',
                                                'type' => 'string',
                                                'example' => 'ipv4',
                                            ],
                                            'ClusterDomain' => [
                                                'description' => '集群域名。',
                                                'type' => 'string',
                                                'example' => 'cluster.local',
                                            ],
                                        ],
                                    ],
                                    'ApiServer' => [
                                        'description' => 'apiserver信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'EnabledPublic' => [
                                                'description' => '是否开启公网API Server访问端点'."\n"
                                                    ."\n"
                                                    .'- true 开启公网访问端点'."\n"
                                                    .'- false 未开启公网访问端点',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                            'LoadBalancerId' => [
                                                'description' => '负载均衡实例id。',
                                                'type' => 'string',
                                                'example' => 'lb-hp3ioqbfeq37h13rwe***',
                                            ],
                                            'ApiServerEipId' => [
                                                'description' => 'EIP实例ID。',
                                                'type' => 'string',
                                                'example' => 'eip-abc****',
                                            ],
                                        ],
                                    ],
                                    'MeshConfig' => [
                                        'description' => '服务网格(ASM)配置',
                                        'type' => 'object',
                                        'properties' => [
                                            'EnableMesh' => [
                                                'description' => '是否启用服务网格(ASM)'."\n"
                                                    .'- true 启用'."\n"
                                                    .'- false 未启用',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                            'MeshId' => [
                                                'description' => '服务网格(ASM)实例ID',
                                                'type' => 'string',
                                                'example' => 'cb09fda0dc2f94a8397c76638c7ecf***'."\n",
                                            ],
                                        ],
                                    ],
                                    'LogConfig' => [
                                        'description' => '日志配置信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'EnableLog' => [
                                                'description' => '是否启用审计日志配置'."\n"
                                                    .'- true 启用'."\n"
                                                    .'- false 未启用',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                            'LogProject' => [
                                                'description' => '日志服务LogProject的名称。',
                                                'type' => 'string',
                                                'example' => 'k8s-log-abc',
                                            ],
                                            'LogStoreTTL' => [
                                                'description' => '日志存储天数',
                                                'type' => 'string',
                                                'example' => '7',
                                            ],
                                        ],
                                    ],
                                    'Conditions' => [
                                        'description' => '集群删除条件信息列表'."\n"
                                            ."\n",
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '集群删除条件信息对象'."\n"
                                                ."\n",
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'description' => '删除条件类型'."\n"
                                                        ."\n",
                                                    'type' => 'string',
                                                    'example' => 'DeletionProtection',
                                                ],
                                                'Status' => [
                                                    'description' => '删除条件状态，取值'."\n"
                                                        .'- True 不能删除'."\n"
                                                        .'- False 允许删除'."\n"
                                                        .'- Unknow 未知'."\n",
                                                    'type' => 'string',
                                                    'example' => 'True',
                                                ],
                                                'Reason' => [
                                                    'description' => '删除条件原因'."\n"
                                                        ."\n",
                                                    'type' => 'string',
                                                    'example' => 'Successful',
                                                ],
                                                'Message' => [
                                                    'description' => '删除条件错误信息'."\n"
                                                        ."\n",
                                                    'type' => 'string',
                                                    'example' => 'Successful',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'WorkflowConfig' => [
                                        'description' => '工作流集群配置信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'ArgoServerEnabled' => [
                                                'description' => '是否启用Argo Server UI。取值'."\n"
                                                    .'-  true： 启用'."\n"
                                                    .'- false： 禁用',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                            'WorkflowScheduleMode' => [
                                                'description' => '工作流调度模式。取值'."\n"
                                                    .'- cost-optimized：成本优先'."\n"
                                                    .'- stock-optimized：库存优先',
                                                'type' => 'string',
                                                'example' => 'cost-optimized',
                                            ],
                                            'PriceLimit' => [
                                                'description' => '工作流负载价格限制。WorkflowScheduleMode取值为cost-optimized时生效。',
                                                'type' => 'string',
                                                'example' => '0.08',
                                            ],
                                            'WorkflowUnits' => [
                                                'description' => '集群工作流地域配置列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '集群工作流地域配置。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'RegionId' => [
                                                            'description' => '地域ID。',
                                                            'type' => 'string',
                                                            'example' => 'cn-beijing',
                                                        ],
                                                        'VpcId' => [
                                                            'description' => 'VPC的ID。',
                                                            'type' => 'string',
                                                            'example' => 'vpc-f8zukabbkv5aw7zkm****',
                                                        ],
                                                        'VSwitches' => [
                                                            'description' => '集群工作流交换机列表。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '集群工作流交换机。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'VswitchId' => [
                                                                        'description' => '交换机ID。',
                                                                        'type' => 'string',
                                                                        'example' => 'vsw-wz9sf0hsuizl7bxnj****',
                                                                    ],
                                                                    'ZoneId' => [
                                                                        'description' => '可用区ID。',
                                                                        'type' => 'string',
                                                                        'example' => 'cn-hangzhou-e',
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
                        'errorCode' => 'Cluster.NotFound',
                        'errorMessage' => 'Cluster Not Found',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"52C1B7DF-96C1-5214-97B6-1B0859FEAFE5\\",\\n  \\"Cluster\\": {\\n    \\"Endpoints\\": {\\n      \\"IntranetApiServerEndpoint\\": \\"https://172.16.6.**:6443\\",\\n      \\"PublicApiServerEndpoint\\": \\"https://123.57.21.***:6443\\"\\n    },\\n    \\"ClusterInfo\\": {\\n      \\"Profile\\": \\"Default\\",\\n      \\"CreationTime\\": \\"2022-03-23T06:22:28Z\\",\\n      \\"UpdateTime\\": \\"2022-03-21T02:51:35.542Z\\",\\n      \\"ErrorMessage\\": \\"The specified product does not exist.\\",\\n      \\"Version\\": \\"1.22.3-aliyun.1\\",\\n      \\"State\\": \\"running\\",\\n      \\"ClusterId\\": \\"cb09fda0dc2f94a8397c76638c7ecf***\\",\\n      \\"Name\\": \\"ackone-heyuan\\",\\n      \\"RegionId\\": \\"cn-beijing\\",\\n      \\"ClusterSpec\\": \\"ack.pro.small \\",\\n      \\"MetaData\\": {\\n        \\"ACKOne\\": {\\n          \\"GitOps\\": {\\n            \\"Enabled\\": true,\\n            \\"HAEnabled\\": true,\\n            \\"PublicAccessEnabled\\": true,\\n            \\"AccessControlList\\": [\\n              \\"[\\\\\\"192.168.0.0/16\\\\\\"]\\"\\n            ]\\n          },\\n          \\"WorkFlow\\": {\\n            \\"ArgoWorkflow\\": {\\n              \\"Enabled\\": true,\\n              \\"ServerEnabled\\": \\"true\\",\\n              \\"PublicAccessEnabled\\": true,\\n              \\"AccessControlList\\": [\\n                \\"[\\\\\\"192.168.0.0/16\\\\\\"]\\\\n\\"\\n              ]\\n            }\\n          }\\n        }\\n      },\\n      \\"ResourceGroupID\\": \\"rg-2nnnd0b6q37***\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"user_resource\\",\\n          \\"Value\\": \\"gfggfwq-697\\"\\n        }\\n      ]\\n    },\\n    \\"Network\\": {\\n      \\"VpcId\\": \\"vpc-f8ziib1019r9o0hdv2***\\",\\n      \\"VSwitches\\": [\\n        \\"[\\\\\\"vsw-f8zubs2z9x1cjnzk29***\\\\\\"]\\"\\n      ],\\n      \\"SecurityGroupIDs\\": [\\n        \\"[\\\\\\"sg-f8zubs2z9x1cj***\\\\\\"]\\"\\n      ],\\n      \\"IPStack\\": \\"ipv4\\",\\n      \\"ClusterDomain\\": \\"cluster.local\\"\\n    },\\n    \\"ApiServer\\": {\\n      \\"EnabledPublic\\": true,\\n      \\"LoadBalancerId\\": \\"lb-hp3ioqbfeq37h13rwe***\\",\\n      \\"ApiServerEipId\\": \\"eip-abc****\\"\\n    },\\n    \\"MeshConfig\\": {\\n      \\"EnableMesh\\": false,\\n      \\"MeshId\\": \\"cb09fda0dc2f94a8397c76638c7ecf***\\\\n\\"\\n    },\\n    \\"LogConfig\\": {\\n      \\"EnableLog\\": false,\\n      \\"LogProject\\": \\"k8s-log-abc\\",\\n      \\"LogStoreTTL\\": \\"7\\"\\n    },\\n    \\"Conditions\\": [\\n      {\\n        \\"Type\\": \\"DeletionProtection\\",\\n        \\"Status\\": \\"True\\",\\n        \\"Reason\\": \\"Successful\\",\\n        \\"Message\\": \\"Successful\\"\\n      }\\n    ],\\n    \\"WorkflowConfig\\": {\\n      \\"ArgoServerEnabled\\": true,\\n      \\"WorkflowScheduleMode\\": \\"cost-optimized\\",\\n      \\"PriceLimit\\": \\"0.08\\",\\n      \\"WorkflowUnits\\": [\\n        {\\n          \\"RegionId\\": \\"cn-beijing\\",\\n          \\"VpcId\\": \\"vpc-f8zukabbkv5aw7zkm****\\",\\n          \\"VSwitches\\": [\\n            {\\n              \\"VswitchId\\": \\"vsw-wz9sf0hsuizl7bxnj****\\",\\n              \\"ZoneId\\": \\"cn-hangzhou-e\\"\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '获取主控集群详情',
        ],
        'DeleteHubCluster' => [
            'summary' => '删除ACK One的主控集群	'."\n"
                .'。',
            'methods' => [
                'post',
                'get',
            ],
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
                'abilityTreeCode' => '118365',
                'abilityTreeNodes' => [
                    'FEATUREadcpH1M5DC',
                    'FEATUREadcpMQ5GFM',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主控实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cd90dd24a86fd42f895a1b77df620****',
                    ],
                ],
                [
                    'name' => 'Force',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制删除ACK One主控实例，取值：'."\n"
                            ."\n"
                            .'- true：强制删除ACK One主控实例'."\n"
                            ."\n"
                            .'- false：不强制删除ACK One主控实例'."\n"
                            ."\n"
                            .'默认值： false',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'RetainResources',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '需要保留资源的列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'json格式的字符串，可以被解析为一个字符串数组。指定在删除主控实例时、需要保留的主控实例相关资源的列表，数组内的值是需要保留的资源的实例ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '["eip-eip-bp1v18egqyuxzmeg****]',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7A827E32-6D24-5757-B3FD-D9396495FBDC',
                            ],
                            'ClusterId' => [
                                'description' => '集群ID。',
                                'type' => 'string',
                                'example' => 'cb09fda0dc2f94a8397c76638c7ec****',
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 'T-623a96b7bbeaac074b00****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'asynchronous',
                'callback' => 'adcp::2022-01-01::DescribeHubClusterDetails',
                'callbackInterval' => 15000,
                'maxCallbackTimes' => 1000,
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7A827E32-6D24-5757-B3FD-D9396495FBDC\\",\\n  \\"ClusterId\\": \\"cb09fda0dc2f94a8397c76638c7ec****\\",\\n  \\"TaskId\\": \\"T-623a96b7bbeaac074b00****\\"\\n}","type":"json"}]',
            'title' => '删除主控集群',
        ],
        'AttachClusterToHub' => [
            'summary' => '添加ACK集群到ACKOne主控集群。',
            'methods' => [
                'post',
                'get',
            ],
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '118361',
                'abilityTreeNodes' => [
                    'FEATUREadcp2RKVFZ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主控集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cd08d62e6506a4fa5a8c44c19d0fc****',
                    ],
                ],
                [
                    'name' => 'ClusterIds',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'json格式的字符串，可以被解析为一个字符串数组。要添加到主控集群中的子集群数组。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["cdea10134be464ba4acb36cc831a6****"]',
                    ],
                ],
                [
                    'name' => 'AttachToMesh',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否同时添加子集群到服务网格(ASM)中'."\n"
                            ."\n"
                            .'- true 添加到服务网格'."\n"
                            .'- false 不添加到服务网格',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'EA06613B-37A3-549E-BAE0-E4AD8A6E93D7',
                            ],
                            'ClusterId' => [
                                'description' => '主控集群ID',
                                'type' => 'string',
                                'example' => 'c8e28143817db4b039b8548d7c899****',
                            ],
                            'ManagedClusterIds' => [
                                'description' => '子集群ID列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '子集群ID',
                                    'type' => 'string',
                                    'example' => '[\'ce11727a7d2114790bf1392b2051e****\']',
                                ],
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 'T-623a96b7bbeaac074b00****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EA06613B-37A3-549E-BAE0-E4AD8A6E93D7\\",\\n  \\"ClusterId\\": \\"c8e28143817db4b039b8548d7c899****\\",\\n  \\"ManagedClusterIds\\": [\\n    \\"[\'ce11727a7d2114790bf1392b2051e****\']\\"\\n  ],\\n  \\"TaskId\\": \\"T-623a96b7bbeaac074b00****\\"\\n}","type":"json"}]',
            'title' => '添加子集群到主控集群',
        ],
        'DescribeManagedClusters' => [
            'summary' => '获取ACK One主控集群下的子集群列表。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '118362',
                'abilityTreeNodes' => [
                    'FEATUREadcp2RKVFZ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '集群ID',
                        'description' => '主控集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c2f41fd4599454a9c9ad8b3daafe8****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'BDA85C7A-FC81-56C4-9BC2-9112EE970059',
                            ],
                            'Clusters' => [
                                'description' => '集群信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '集群详细信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Cluster' => [
                                            'description' => '集群信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'description' => '集群名称。',
                                                    'type' => 'string',
                                                    'example' => 'ackone-heyuan',
                                                ],
                                                'ClusterID' => [
                                                    'description' => '集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'c2f41fd4599454a9c9ad8b3daafe8****',
                                                ],
                                                'Region' => [
                                                    'description' => '集群所在地域。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'State' => [
                                                    'description' => '子集群状态：'."\n"
                                                        ."\n"
                                                        .'- `initial`：初始化中。'."\n"
                                                        .'- `failed`：创建失败。'."\n"
                                                        .'- `running`：运行中。'."\n"
                                                        .'- `inactive`：待激活。'."\n"
                                                        .'- `deleting`：删除中。'."\n"
                                                        .'- `delete_failed`：删除失败。'."\n"
                                                        .'- `deleted`：已删除。',
                                                    'type' => 'string',
                                                    'example' => 'running',
                                                ],
                                                'ClusterType' => [
                                                    'description' => '集群类型。',
                                                    'type' => 'string',
                                                    'example' => 'One',
                                                ],
                                                'Created' => [
                                                    'description' => '集群的创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2022-03-23T06:22:28Z'."\n",
                                                ],
                                                'Updated' => [
                                                    'description' => '集群更新时间。',
                                                    'type' => 'string',
                                                    'example' => '2022-03-23T06:22:28Z'."\n",
                                                ],
                                                'InitVersion' => [
                                                    'description' => '集群的初始版本号。',
                                                    'type' => 'string',
                                                    'example' => '1.20.4-aliyun.1'."\n",
                                                ],
                                                'CurrentVersion' => [
                                                    'description' => '集群的最新版本号。'."\n"
                                                        ."\n",
                                                    'type' => 'string',
                                                    'example' => '1.22.3-aliyun.1'."\n",
                                                ],
                                                'ResourceGroupId' => [
                                                    'description' => '资源组ID。',
                                                    'type' => 'string',
                                                    'example' => 'rg-acfmx7o7ewy****',
                                                ],
                                                'VpcID' => [
                                                    'description' => 'VPC ID。',
                                                    'type' => 'string',
                                                    'example' => 'vpc-bp1fhizs9fxuvit06****',
                                                ],
                                                'VSwitchID' => [
                                                    'description' => '虚拟交换机ID。',
                                                    'type' => 'string',
                                                    'example' => 'vsw-m5e0pbkgmhvzecf7e****',
                                                ],
                                                'Profile' => [
                                                    'description' => '集群标识。',
                                                    'type' => 'string',
                                                    'example' => 'Default',
                                                ],
                                                'ClusterSpec' => [
                                                    'description' => '集群规格。`ack.pro.small`表示基础版。',
                                                    'type' => 'string',
                                                    'example' => 'ack.pro.small',
                                                ],
                                            ],
                                        ],
                                        'Status' => [
                                            'description' => '子集群在主控集群中的状态。',
                                            'type' => 'object',
                                            'properties' => [
                                                'State' => [
                                                    'description' => '子集群在主控集群中的状态：'."\n"
                                                        .'- `Installing`：添加中。'."\n"
                                                        .'- `Successed`：添加成功。'."\n"
                                                        .'- `Failed`：添加失败。'."\n"
                                                        .'- `Deleting`: 移除中'."\n"
                                                        .'- `Deleted`：已移除。',
                                                    'type' => 'string',
                                                    'example' => 'Successed',
                                                ],
                                                'Message' => [
                                                    'description' => '状态信息。',
                                                    'type' => 'string',
                                                    'example' => 'SUCCESS',
                                                ],
                                            ],
                                        ],
                                        'MeshStatus' => [
                                            'description' => '子集群在服务网格中的状态。',
                                            'type' => 'object',
                                            'properties' => [
                                                'InMesh' => [
                                                    'description' => '子集群是否在服务网格中，取值：'."\n"
                                                        .'- `true`：子集群在服务网格实例中。'."\n"
                                                        .'- `false`：子集群不在服务网格实例中。',
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
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BDA85C7A-FC81-56C4-9BC2-9112EE970059\\",\\n  \\"Clusters\\": [\\n    {\\n      \\"Cluster\\": {\\n        \\"Name\\": \\"ackone-heyuan\\",\\n        \\"ClusterID\\": \\"c2f41fd4599454a9c9ad8b3daafe8****\\",\\n        \\"Region\\": \\"cn-hangzhou\\",\\n        \\"State\\": \\"running\\",\\n        \\"ClusterType\\": \\"One\\",\\n        \\"Created\\": \\"2022-03-23T06:22:28Z\\\\n\\",\\n        \\"Updated\\": \\"2022-03-23T06:22:28Z\\\\n\\",\\n        \\"InitVersion\\": \\"1.20.4-aliyun.1\\\\n\\",\\n        \\"CurrentVersion\\": \\"1.22.3-aliyun.1\\\\n\\",\\n        \\"ResourceGroupId\\": \\"rg-acfmx7o7ewy****\\",\\n        \\"VpcID\\": \\"vpc-bp1fhizs9fxuvit06****\\",\\n        \\"VSwitchID\\": \\"vsw-m5e0pbkgmhvzecf7e****\\",\\n        \\"Profile\\": \\"Default\\",\\n        \\"ClusterSpec\\": \\"ack.pro.small\\"\\n      },\\n      \\"Status\\": {\\n        \\"State\\": \\"Successed\\",\\n        \\"Message\\": \\"SUCCESS\\"\\n      },\\n      \\"MeshStatus\\": {\\n        \\"InMesh\\": true\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询已添加的子集群列表',
        ],
        'DetachClusterFromHub' => [
            'summary' => '从ACK One主控集群中移除ACK子集群。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'abilityTreeCode' => '118363',
                'abilityTreeNodes' => [
                    'FEATUREadcp2RKVFZ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主控集群的ID。您可以调用[DescribeHubClusters](~~424404~~)接口获取已创建的主控集群。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cb09fda0dc2f94a8397c76638c7ec****',
                    ],
                ],
                [
                    'name' => 'ClusterIds',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '从主控集群中待移除的子集群ID数组。您可以调用[DescribeManagedClusters](~~424408~~)接口获取主集群下已添加的子集群ID。'."\n"
                            ."\n"
                            .'取值格式为JSON格式的字符串，可以被解析为一个字符串数组。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["c1c731554c1ec4a1ca9bb690ff9ed****"]',
                    ],
                ],
                [
                    'name' => 'DetachFromMesh',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否仅从服务网格（ASM）中移除子集群。'."\n"
                            .'- true：仅从服务网格（ASM）移除子集群。'."\n"
                            .'- false：同时从服务网格（ASM）和ACK One中移除子集群。'."\n"
                            ."\n"
                            .'若该参数未设置，默认按照取值为**false**处理，即默认子集群同时从服务网格（ASM）和ACK One中移除。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
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
                                'example' => '4412F213-DBCD-5D1B-A9A1-F6C26C6C19D9',
                            ],
                            'ClusterId' => [
                                'description' => '主控集群ID。',
                                'type' => 'string',
                                'example' => 'cc490b1e67ccc43a784727f29f33e****',
                            ],
                            'ManagedClusterIds' => [
                                'description' => '子集群列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '子集群ID。',
                                    'type' => 'string',
                                    'example' => '[\'c33106e9aeebd480c84da7ec6873a****\']',
                                ],
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 'T-623a96b7bbeaac074b00****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4412F213-DBCD-5D1B-A9A1-F6C26C6C19D9\\",\\n  \\"ClusterId\\": \\"cc490b1e67ccc43a784727f29f33e****\\",\\n  \\"ManagedClusterIds\\": [\\n    \\"[\'c33106e9aeebd480c84da7ec6873a****\']\\"\\n  ],\\n  \\"TaskId\\": \\"T-623a96b7bbeaac074b00****\\"\\n}","type":"json"}]',
            'title' => '从主控集群中移除子集群',
            'extraInfo' => '控制台相关操作，请参见[管理关联集群](~~415167~~)。',
        ],
        'UpdateHubClusterFeature' => [
            'summary' => '更新集群特性。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '135264',
                'abilityTreeNodes' => [
                    'FEATUREadcpH1M5DC',
                    'FEATUREadcpMQ5GFM',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '集群ID',
                        'description' => '主控实例ID。您可以调用[DescribeHubClusters](~~424404~~)接口获取已创建的主控实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c46979b1075f04d99b5f2b710393e5****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主控实例名称。长度为[1, 63]个英文或数字字符。必须以大小字母开头。可以包含数字、下划线（_）或者连字符（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ack-demo',
                    ],
                ],
                [
                    'name' => 'AuditLogEnabled',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '是否开启审计日志。'."\n"
                            .'- true：开启。'."\n"
                            .'- false：关闭。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'EnableMesh',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '是否开启服务网格（ASM）。'."\n"
                            ."\n"
                            .'- true：开启。'."\n"
                            .'- false：关闭。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'DeletionProtection',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '集群删除保护属性，指定是否支持通过控制台或API [DeleteHubCluster](~~424406~~)删除集群。'."\n"
                            ."\n"
                            .'-   true：开启集群删除保护。'."\n"
                            .'-   false：关闭集群删除保护。'."\n"
                            ."\n"
                            .'默认值：false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'PublicApiServerEnabled',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '是否为API Server绑定公网入口。'."\n"
                            ."\n"
                            .'- true： 绑定公网EIP，需要绑定的时候，可以自行指定ApiServerEipId参数，若不传入，则系统会自动创建一个EIP实例。'."\n"
                            .'- false： 解绑公网EIP。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ApiServerEipId',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => 'EIP实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eip-xxx',
                    ],
                ],
                [
                    'name' => 'ArgoCDEnabled',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '是否启用ArgoCD。仅当Profile为XFlow时生效。Profile参数可调用[DescribeHubClusterDetails](~~424405~~)接口查看。'."\n"
                            ."\n"
                            .'本参数取值如下：'."\n"
                            .'- true：启用。'."\n"
                            .'- false：禁用。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ArgoServerEnabled',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '是否启用工作流实例UI。仅当Profile为XFlow的时候生效。Profile参数可调用[DescribeHubClusterDetails](~~424405~~)接口查看。'."\n"
                            ."\n"
                            .'本参数取值如下：'."\n"
                            .'- true：启用。'."\n"
                            .'- false：禁用。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'WorkflowScheduleMode',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '工作流调度模式。仅当Profile为XFlow的时候生效。Profile参数可调用[DescribeHubClusterDetails](~~424405~~)接口查看。'."\n"
                            ."\n"
                            .'本参数取值如下：'."\n"
                            .'- cost-optimized：成本优先。'."\n"
                            .'- stock-optimized：库存优先。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cost-optimized',
                    ],
                ],
                [
                    'name' => 'PriceLimit',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '工作流负载价格限制。仅当WorkflowScheduleMode取值为cost-optimized时生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0.08',
                    ],
                ],
                [
                    'name' => 'VSwitches',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '交换机列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '虚拟交换机ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '["vsw-2zeaijsas4zkzz81xm***"]',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MonitorEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否启用工作流实例监控大盘。仅当Profile为XFlow的时候生效。取值：'."\n"
                            ."\n"
                            .'- true：启用。'."\n"
                            .'- false：禁用。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ArgoCDHAEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否启用ArgoCD高可用。取值：'."\n"
                            ."\n"
                            .'- true：启用。'."\n"
                            .'- false：禁用。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'PublicAccessEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否启用ArgoCD或者Argo Workflow控制台公网域名解析。取值：'."\n"
                            ."\n"
                            .'- true：启用。'."\n"
                            .'- false：禁用。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'AccessControlList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '公网访问ACL控制列表。仅当PublicAccessEnabled为true时有效。',
                        'type' => 'array',
                        'items' => [
                            'description' => '公网访问限制的网段。例如192.168.1.0/24。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '["192.168.1.0/24"]',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ArgoEventsEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否启用ArgoEvents。取值：'."\n"
                            ."\n"
                            .'- true：启用。'."\n"
                            .'- false：禁用。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'GatewayEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否启用Gateway特性。取值：'."\n"
                            ."\n"
                            .'- true：启用。'."\n"
                            .'- false：禁用。',
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
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '52C1B7DF-96C1-5214-97B6-1B0859FEAFE5',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"52C1B7DF-96C1-5214-97B6-1B0859FEAFE5\\"\\n}","type":"json"}]',
            'title' => '更新集群特性',
        ],
        'DescribeUserPermissions' => [
            'summary' => '查看子账号授权内容。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '171407',
                'abilityTreeNodes' => [
                    'FEATUREadcpP565GF',
                    'FEATUREadcp181E1P',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '指定RAM用户。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '21175****	'."\n",
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'EA06613B-37A3-549E-BAE0-E4AD8A6E93D7',
                            ],
                            'Permissions' => [
                                'description' => 'RAM用户的权限列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'RAM用户的权限详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'RoleType' => [
                                            'description' => '预置的角色类型，取值：'."\n"
                                                ."\n"
                                                .'- admin：管理员。'."\n"
                                                .'- dev：开发人员。',
                                            'type' => 'string',
                                            'example' => 'dev',
                                        ],
                                        'RoleName' => [
                                            'description' => '自定义角色名称，当授权自定义角色时，该字段为指定的自定义主控实例管理角色名称。',
                                            'type' => 'string',
                                            'example' => 'view',
                                        ],
                                        'ResourceType' => [
                                            'description' => '授权类型，取值：'."\n"
                                                .'- cluster：集群维度。'."\n"
                                                .'- namespace：命名空间维度。',
                                            'type' => 'string',
                                            'example' => 'cluster',
                                        ],
                                        'ResourceId' => [
                                            'description' => '主控实例访问配置，格式为：'."\n"
                                                .'- 当是集群维度授权时，格式为：{cluster_id}。'."\n"
                                                .'- 当是命名空间维度授权时，格式为：{cluster_id}/{namespace}。'."\n"
                                                .'- 当是所有集群授权时，值固定为：all-clusters。',
                                            'type' => 'string',
                                            'example' => 'cffef3c9c7ba145b083292942a2c3****',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EA06613B-37A3-549E-BAE0-E4AD8A6E93D7\\",\\n  \\"Permissions\\": [\\n    {\\n      \\"RoleType\\": \\"dev\\",\\n      \\"RoleName\\": \\"view\\",\\n      \\"ResourceType\\": \\"cluster\\",\\n      \\"ResourceId\\": \\"cffef3c9c7ba145b083292942a2c3****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询RAM用户主控实例授权信息',
        ],
        'GrantUserPermissions' => [
            'summary' => '为子账号授权。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '171408',
                'abilityTreeNodes' => [
                    'FEATUREadcpP565GF',
                    'FEATUREadcp181E1P',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2367****	'."\n",
                    ],
                ],
                [
                    'name' => 'Permissions',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'RAM用户的授权列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'RAM用户的授权详情。',
                            'type' => 'object',
                            'properties' => [
                                'RoleName' => [
                                    'description' => '预置的角色名称，取值：'."\n"
                                        ."\n"
                                        .'- admin: 管理员。'."\n"
                                        .'- dev：开发人员。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'dev',
                                    'enum' => [],
                                ],
                                'ClusterId' => [
                                    'description' => '授权目标主控实例ID。'."\n"
                                        ."\n"
                                        .'- 当role_type参数的值是all-clusters时，此参数的值传空字符串。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cf67bdb0ffcb349ecabc1ca70da78****',
                                ],
                                'Namespace' => [
                                    'description' => '命名空间名称，主控实例维度授权时默认为空。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test',
                                ],
                                'RoleType' => [
                                    'description' => '授权类型，取值：'."\n"
                                        ."\n"
                                        .'- cluster：主控实例维度。'."\n"
                                        .'- namespace: 命名空间维度。'."\n"
                                        .'- all-clusters: 所有主控实例维度。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'cluster',
                                    'enum' => [
                                        'cluster',
                                        'namespace',
                                        'all-clusters',
                                    ],
                                ],
                                'IsRamRole' => [
                                    'description' => '目标权限授予实体，如果是RAM角色，则为`true`，否则为`false`。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4412F213-DBCD-5D1B-A9A1-F6C26C6C19D9',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'substitutions' => [
                    'adcp::2022-01-01::GrantUserPermission',
                ],
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4412F213-DBCD-5D1B-A9A1-F6C26C6C19D9\\"\\n}","type":"json"}]',
            'title' => '全量更新RAM用户主控实例授权信息',
        ],
        'DescribeHubClusterKubeconfig' => [
            'summary' => '获取ACK One集群的KubeConfig。除了通过容器服务控制台来管理集群之外，您还可以通过Kubernetes命令行工具kubectl来管理集群以及应用。使用kubectl工具管理集群时，您需要先获取集群的KubeConfig信息并通过kubectl工具连接集群。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                'abilityTreeCode' => '118360',
                'abilityTreeNodes' => [
                    'FEATUREadcpP565GF',
                    'FEATUREadcp181E1P',
                ],
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
                        'example' => 'c102fe5f1ee5d4c87a68121a77d8b****',
                    ],
                ],
                [
                    'name' => 'PrivateIpAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否获取内网连接配置。取值：'."\n"
                            .'- `true`：仅获取内网连接凭据。'."\n"
                            .'- `false`：仅获取公网连接凭据。 '."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
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
                                'example' => '5BE4C329-DCC2-5B61-8F66-112B7D7FC712',
                            ],
                            'Kubeconfig' => [
                                'description' => 'KubeConfig配置内容。',
                                'type' => 'string',
                                'example' => "\n"
                                    .'"\\napiVersion: v1\\nclusters:\\n- cluster:\\n    server: https://172.16.11.***:6443\\n    certificate-authority-data: LS0tLS1CRU=...\\n  name: kubernetes\\ncontexts:\\n- context:\\n    cluster: kubernetes\\n    user: \\"kubernetes-a****\\"\\n  name: kubernetes-admin-cc2cbf5802bec4bfa9fae4014d8c****\\ncurrent-context: kubernetes-admin-cc2cbf5802bec4bfa9fae4014d8c9****\\nkind: Config\\npreferences: {}\\nusers:\\n- name: \\"kubernetes-admin\\"\\n  user:\\n    client-certificate-data: LS0tLS1CRU...\\n    client-key-data: LS0tCg==...\\n"'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5BE4C329-DCC2-5B61-8F66-112B7D7FC712\\",\\n  \\"Kubeconfig\\": \\"\\\\n\\\\\\"\\\\\\\\napiVersion: v1\\\\\\\\nclusters:\\\\\\\\n- cluster:\\\\\\\\n    server: https://172.16.11.***:6443\\\\\\\\n    certificate-authority-data: LS0tLS1CRU=...\\\\\\\\n  name: kubernetes\\\\\\\\ncontexts:\\\\\\\\n- context:\\\\\\\\n    cluster: kubernetes\\\\\\\\n    user: \\\\\\\\\\\\\\"kubernetes-a****\\\\\\\\\\\\\\"\\\\\\\\n  name: kubernetes-admin-cc2cbf5802bec4bfa9fae4014d8c****\\\\\\\\ncurrent-context: kubernetes-admin-cc2cbf5802bec4bfa9fae4014d8c9****\\\\\\\\nkind: Config\\\\\\\\npreferences: {}\\\\\\\\nusers:\\\\\\\\n- name: \\\\\\\\\\\\\\"kubernetes-admin\\\\\\\\\\\\\\"\\\\\\\\n  user:\\\\\\\\n    client-certificate-data: LS0tLS1CRU...\\\\\\\\n    client-key-data: LS0tCg==...\\\\\\\\n\\\\\\"\\\\n\\"\\n}","type":"json"}]',
            'title' => '获取集群的KubeConfig',
        ],
        'GrantUserPermission' => [
            'summary' => '为RAM用户或RAM角色授予RBAC权限。RAM系统策略仅控制ACK One集群资源的操作权限（例如创建实例、查看实例列表等），若RAM用户或RAM角色需要操作指定集群内的K8s资源，例如，创建GitOps Application和Argo Workflow等，还需要获取指定ACK One集群及其命名空间的操作权限即RBAC权限。本文为您介绍如何为RAM用户或RAM角色授予RBAC权限。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '172097',
                'abilityTreeNodes' => [
                    'FEATUREadcpP565GF',
                    'FEATUREadcp181E1P',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RoleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权类型，取值：'."\n"
                            ."\n"
                            .'- cluster：集群维度。'."\n"
                            .'- namespace: 命名空间维度。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cluster',
                        'enum' => [
                            'cluster',
                            'namespace',
                        ],
                    ],
                ],
                [
                    'name' => 'RoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预置的角色名称，取值：'."\n"
                            ."\n"
                            .'- admin: 管理员。'."\n"
                            .'- dev：开发人员。'."\n"
                            .'- gitops-dev: GitOps开发人员（仅限于舰队实例）。'."\n"
                            ."\n"
                            .'RoleName参数取值和RoleType参数取值关系如下：'."\n"
                            .'- 当**RoleType**取值为**cluster**时，本参数只能设置为**admin**。'."\n"
                            .'- 当**RoleType**取值为**namespace**时，本参数只能设置为**dev**或**gitops-dev**。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'dev' => 'dev',
                            'admin' => 'admin',
                            'gitops-dev' => 'gitops-dev',
                        ],
                        'example' => 'admin',
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c102fe5f1ee5d4c87a68121a77d8b****',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称。'."\n"
                            ."\n"
                            .'- 当**RoleType**取值为**cluster**时，本参数无需设置。'."\n"
                            .'- 当**RoleType**取值为**namespace**时，本参数必须填写。'."\n"
                            .'- 当**RoleType**取值为**namespace**，且**RoleName**取值为**gitops-dev**时，本参数必须设置且只能设置为**argocd**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户ID或者RAM角色ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2176****',
                    ],
                ],
                [
                    'name' => 'IsRamRole',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标权限授予实体，如果是RAM角色，则为`true`，否则为`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2D676EFC-8C04-5CCE-A08E-BB97D24B47E8',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2D676EFC-8C04-5CCE-A08E-BB97D24B47E8\\"\\n}","type":"json"}]',
            'title' => '授予RAM用户RBAC权限',
            'description' => '- 您需要使用阿里云账号（主账号）、集群创建者或已具有集群管理员权限的RAM用户，为指定的RAM用户或RAM角色授权，普通RAM用户无调用本接口进行授权操作的权限。'."\n"
                .'- 授予RBAC权限前，您需要先为RAM用户或RAM角色授予ACK One集群的操作权限，具体操作，请参见[为RAM用户或RAM角色授予系统权限策略](~~613486~~)。'."\n"
                ."\n"
                .'更多授权信息，请参见[授权概述](~~613468~~)。',
        ],
        'UpdateUserPermission' => [
            'summary' => '更新RAM用户RBAC授权。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '172098',
                'abilityTreeNodes' => [
                    'FEATUREadcpP565GF',
                    'FEATUREadcp181E1P',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RoleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权类型，取值：'."\n"
                            ."\n"
                            .'- cluster：主控实例维度。'."\n"
                            .'- namespace: 命名空间维度。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cluster',
                        'enum' => [
                            'cluster',
                            'namespace',
                        ],
                    ],
                ],
                [
                    'name' => 'RoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预置的角色名称，取值：'."\n"
                            ."\n"
                            .'- admin: 管理员。'."\n"
                            .'- dev：开发人员。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'admin',
                        'enum' => [
                            'admin',
                            'dev',
                        ],
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主控实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c8e28143817db4b039b8548d7c899****',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称，主控实例维度授权时默认为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2176****',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '62F5AA2B-A2C9-5135-BCE2-C2167099****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"62F5AA2B-A2C9-5135-BCE2-C2167099****\\"\\n}","type":"json"}]',
            'title' => '更新RAM用户RBAC授权',
        ],
        'DeleteUserPermission' => [
            'summary' => '删除RAM用户RBAC授权。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '172099',
                'abilityTreeNodes' => [
                    'FEATUREadcpP565GF',
                    'FEATUREadcp181E1P',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2176****',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主控实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c09946603cd764dac96135f51d1ba****',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2D676EFC-8C04-5CCE-A08E-BB97D24B47E8',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2D676EFC-8C04-5CCE-A08E-BB97D24B47E8\\"\\n}","type":"json"}]',
            'title' => '删除RAM用户RBAC授权',
        ],
        'DescribePolicies' => [
            'summary' => '列举策略治理规则库列表。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '144926',
                'abilityTreeNodes' => [
                    'FEATUREadcpVUYVM4',
                ],
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9439169C-64C1-5849-9F7C-E3E60BDDEF7A',
                            ],
                            'Policies' => [
                                'description' => '策略治理规则库列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '策略治理规则。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Category' => [
                                            'description' => '策略类型。',
                                            'type' => 'string',
                                            'example' => 'psp',
                                        ],
                                        'Names' => [
                                            'description' => '策略名称列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '策略名称。',
                                                'type' => 'string',
                                                'example' => 'ACKCheckNginxAnnotation',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9439169C-64C1-5849-9F7C-E3E60BDDEF7A\\",\\n  \\"Policies\\": [\\n    {\\n      \\"Category\\": \\"psp\\",\\n      \\"Names\\": [\\n        \\"ACKCheckNginxAnnotation\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列举策略治理规则库列表',
        ],
        'DescribePolicyDetails' => [
            'summary' => '获取策略治理规则模板详情。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '144927',
                'abilityTreeNodes' => [
                    'FEATUREadcpVUYVM4',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '策略治理规则名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ACKAllowedRepos',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2D676EFC-8C04-5CCE-A08E-BB97D24B47E8',
                            ],
                            'Policy' => [
                                'description' => '策略治理规则。',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'description' => '策略治理规则名称。',
                                        'type' => 'string',
                                        'example' => 'ACKAllowedRepos',
                                    ],
                                    'Category' => [
                                        'description' => '规则模板类型。',
                                        'type' => 'string',
                                        'example' => 'k8s-general'."\n",
                                    ],
                                    'Description' => [
                                        'description' => '规则模板描述。',
                                        'type' => 'string',
                                        'example' => 'Requires container images to begin with a repo string from a specified list'."\n",
                                    ],
                                    'Action' => [
                                        'description' => '规则治理动作，取值：'."\n"
                                            ."\n"
                                            .'- enforce：拦截违规部署。'."\n"
                                            .'- inform：告警。',
                                        'type' => 'string',
                                        'example' => 'enforce',
                                    ],
                                    'Severity' => [
                                        'description' => '规则治理等级。',
                                        'type' => 'string',
                                        'example' => 'high',
                                    ],
                                    'Template' => [
                                        'description' => '规则模板详情。',
                                        'type' => 'string',
                                        'example' => '详情参考返回内容。',
                                    ],
                                    'NoConfig' => [
                                        'description' => '是否需要配置策略，取值：'."\n"
                                            ."\n"
                                            .'- 0：表示需要参数配置。'."\n"
                                            .'- 1：表示无需参数配置。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'Created' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-18T10:52:17+08:00',
                                    ],
                                    'Updated' => [
                                        'description' => '最后更新时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-18T10:52:17+08:00',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2D676EFC-8C04-5CCE-A08E-BB97D24B47E8\\",\\n  \\"Policy\\": {\\n    \\"Name\\": \\"ACKAllowedRepos\\",\\n    \\"Category\\": \\"k8s-general\\\\n\\",\\n    \\"Description\\": \\"Requires container images to begin with a repo string from a specified list\\\\n\\",\\n    \\"Action\\": \\"enforce\\",\\n    \\"Severity\\": \\"high\\",\\n    \\"Template\\": \\"详情参考返回内容。\\",\\n    \\"NoConfig\\": 0,\\n    \\"Created\\": \\"2021-11-18T10:52:17+08:00\\",\\n    \\"Updated\\": \\"2021-11-18T10:52:17+08:00\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取策略治理规则模板详情',
        ],
        'DeployPolicyInstance' => [
            'summary' => '在主控实例关联集群中部署策略规则实例。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '176407',
                'abilityTreeNodes' => [
                    'FEATUREadcpVUYVM4',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略治理规则名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ACKNoEnvVarSecrets',
                    ],
                ],
                [
                    'name' => 'Namespaces',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'Namespace集合',
                        'type' => 'array',
                        'items' => [
                            'description' => '限制策略实施的命名空间，为空时表示所有命名空间。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '["default"]',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClusterIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'JSON格式的字符串，可以被解析为一个字符串数组。要部署策略规则的关联集群数组。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'JSON格式的字符串，可以被解析为一个字符串数组。要部署策略规则的关联集群数组。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '["c1c731554c1ec4a1ca9bb690ff9ed****"]',
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PolicyAction',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则治理动作，取值：'."\n"
                            ."\n"
                            .'- deny：拦截违规部署'."\n"
                            .'- warn：告警',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'warn',
                        'enum' => [
                            'deny',
                            'warn',
                        ],
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主控实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c102fe5f1ee5d4c87a68121a77d8b****',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2D676EFC-8C04-5CCE-A08E-BB97D24B47E8',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2D676EFC-8C04-5CCE-A08E-BB97D24B47E8\\"\\n}","type":"json"}]',
            'title' => '在主控实例关联集群中部署策略规则实例',
        ],
        'DescribePolicyInstances' => [
            'summary' => '查询主控实例关联集群的策略实例。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '176411',
                'abilityTreeNodes' => [
                    'FEATUREadcpVUYVM4',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略治理规则名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ACKNoEnvVarSecrets',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主控实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c102fe5f1ee5d4c87a68121a77d8b****',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5BE4C329-DCC2-5B61-8F66-112B7D7FC712',
                            ],
                            'Policies' => [
                                'description' => '策略实例列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '策略实例。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PolicyName' => [
                                            'description' => '策略治理规则名称',
                                            'type' => 'string',
                                            'example' => 'ACKPSPCapabilities',
                                        ],
                                        'InstanceName' => [
                                            'description' => '规则实例名称。',
                                            'type' => 'string',
                                            'example' => 'no-env-var-secrets-****'."\n",
                                        ],
                                        'PolicyCategory' => [
                                            'description' => '策略类型名称。',
                                            'type' => 'string',
                                            'example' => 'k8s-general'."\n",
                                        ],
                                        'PolicyDescription' => [
                                            'description' => '规则模板描述。',
                                            'type' => 'string',
                                            'example' => 'Restricts secrets used in pod envs'."\n",
                                        ],
                                        'PolicySeverity' => [
                                            'description' => '规则实例治理等级。',
                                            'type' => 'string',
                                            'example' => 'low',
                                        ],
                                        'PolicyScope' => [
                                            'description' => '策略实例实施范围：'."\n"
                                                ."\n"
                                                .'默认"*"代表集群所有命名空间。'."\n"
                                                ."\n"
                                                .'否则返回作用Namespaces名称，多个Namespaces以逗号（,）分隔。',
                                            'type' => 'string',
                                            'example' => '*',
                                        ],
                                        'PolicyAction' => [
                                            'description' => '规则治理动作，取值：'."\n"
                                                ."\n"
                                                .'- deny：拦截违规部署'."\n"
                                                .'- warn：告警',
                                            'type' => 'string',
                                            'example' => 'warn',
                                        ],
                                        'TotalViolations' => [
                                            'description' => '关联集群中当前被拦截和告警两种处理类型下不同治理等级的违规计数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'ClusterId' => [
                                            'description' => '关联集群ID。',
                                            'type' => 'string',
                                            'example' => 'cd0e6882394f7496589837cac3585****',
                                        ],
                                        'PolicyParameters' => [
                                            'description' => '当前规则实例的配置参数。',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'description' => '当前规则实例的配置参数。',
                                                'example' => '"restrictedNamespaces": [ "test" ]'."\n",
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5BE4C329-DCC2-5B61-8F66-112B7D7FC712\\",\\n  \\"Policies\\": [\\n    {\\n      \\"PolicyName\\": \\"ACKPSPCapabilities\\",\\n      \\"InstanceName\\": \\"no-env-var-secrets-****\\\\n\\",\\n      \\"PolicyCategory\\": \\"k8s-general\\\\n\\",\\n      \\"PolicyDescription\\": \\"Restricts secrets used in pod envs\\\\n\\",\\n      \\"PolicySeverity\\": \\"low\\",\\n      \\"PolicyScope\\": \\"*\\",\\n      \\"PolicyAction\\": \\"warn\\",\\n      \\"TotalViolations\\": 2,\\n      \\"ClusterId\\": \\"cd0e6882394f7496589837cac3585****\\",\\n      \\"PolicyParameters\\": {\\n        \\"key\\": \\"\\\\\\"restrictedNamespaces\\\\\\": [ \\\\\\"test\\\\\\" ]\\\\n\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询主控实例关联集群的策略实例',
        ],
        'DescribePolicyInstancesStatus' => [
            'summary' => '获取主控实例关联集群指定策略规则实例详情。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '176412',
                'abilityTreeNodes' => [
                    'FEATUREadcpVUYVM4',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主控实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c676decda7b8148d69a9aba751877****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5D89C59A-A7EB-5BF8-B094-6479175346CA',
                            ],
                            'Policies' => [
                                'description' => '不同策略类型下的策略实例计数列表。',
                                'type' => 'object',
                                'properties' => [
                                    'PolicyInstances' => [
                                        'description' => '不同策略类型下的策略实例计数列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '不同策略类型下的策略实例计数列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'PolicyName' => [
                                                    'description' => '策略治理规则名称。',
                                                    'type' => 'string',
                                                    'example' => 'ACKRestrictRoleBindings',
                                                ],
                                                'PolicyCategory' => [
                                                    'description' => '策略类型。',
                                                    'type' => 'string',
                                                    'example' => 'compliance'."\n",
                                                ],
                                                'PolicyDescription' => [
                                                    'description' => '策略描述。',
                                                    'type' => 'string',
                                                    'example' => 'Restricts use of the cluster-admin role.'."\n",
                                                ],
                                                'PolicySeverity' => [
                                                    'description' => '策略治理等级。',
                                                    'type' => 'string',
                                                    'example' => 'low',
                                                ],
                                                'PolicyInstancesCount' => [
                                                    'description' => '已部署的策略实例计数，如果字段为空说明未部署该类型策略实例。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2',
                                                ],
                                                'PolicyClusters' => [
                                                    'description' => '已部署策略的关联集群。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '已部署策略的关联集群。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'ClusterId' => [
                                                                'description' => '集群ID。',
                                                                'type' => 'string',
                                                                'example' => 'c639e5310e73e4a29ab18d6330a633****',
                                                            ],
                                                            'Status' => [
                                                                'description' => '策略部署状态。',
                                                                'type' => 'string',
                                                                'example' => 'Success',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'SeverityInfo' => [
                                        'description' => '集群中当前部署的不同治理等级的策略实例计数。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '集群中当前部署的不同治理等级的策略实例计数。',
                                            'type' => 'object',
                                            'properties' => [
                                                'SeverityType' => [
                                                    'description' => '策略治理等级。',
                                                    'type' => 'string',
                                                    'example' => 'low',
                                                ],
                                                'SeverityCount' => [
                                                    'description' => '策略实例计数。',
                                                    'type' => 'string',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5D89C59A-A7EB-5BF8-B094-6479175346CA\\",\\n  \\"Policies\\": {\\n    \\"PolicyInstances\\": [\\n      {\\n        \\"PolicyName\\": \\"ACKRestrictRoleBindings\\",\\n        \\"PolicyCategory\\": \\"compliance\\\\n\\",\\n        \\"PolicyDescription\\": \\"Restricts use of the cluster-admin role.\\\\n\\",\\n        \\"PolicySeverity\\": \\"low\\",\\n        \\"PolicyInstancesCount\\": 2,\\n        \\"PolicyClusters\\": [\\n          {\\n            \\"ClusterId\\": \\"c639e5310e73e4a29ab18d6330a633****\\",\\n            \\"Status\\": \\"Success\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"SeverityInfo\\": [\\n      {\\n        \\"SeverityType\\": \\"low\\",\\n        \\"SeverityCount\\": \\"2\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取主控实例关联集群指定策略规则实例详情',
        ],
        'DescribePolicyGovernanceInCluster' => [
            'summary' => '获取主控实例下关联集群策略治理详情。',
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
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '176414',
                'abilityTreeNodes' => [
                    'FEATUREadcpVUYVM4',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主控实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c09946603cd764dac96135f51d1ba****',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '96C6A284-0EC3-5486-9A97-E8E9EE27E9EF',
                            ],
                            'PolicyGovernances' => [
                                'description' => '策略治理详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '策略治理详情列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Cluster' => [
                                            'description' => '策略部署集群信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ClusterId' => [
                                                    'description' => '关联集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'ca5cf1b5edb5c4736a6ea0dfb4061****',
                                                ],
                                                'Name' => [
                                                    'description' => '集群名称。',
                                                    'type' => 'string',
                                                    'example' => 'ack-001',
                                                ],
                                                'RegionId' => [
                                                    'description' => '集群所在地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-heyuan',
                                                ],
                                                'State' => [
                                                    'description' => '集群状态。',
                                                    'type' => 'string',
                                                    'example' => 'running',
                                                ],
                                                'ClusterType' => [
                                                    'description' => '集群类型。',
                                                    'type' => 'string',
                                                    'example' => 'ManagedKubernetes',
                                                ],
                                                'ClusterSpec' => [
                                                    'description' => '集群规格。',
                                                    'type' => 'string',
                                                    'example' => 'ack.pro.small ',
                                                ],
                                                'Profile' => [
                                                    'description' => '集群标识。',
                                                    'type' => 'string',
                                                    'example' => 'Default',
                                                ],
                                            ],
                                        ],
                                        'PolicyGovernance' => [
                                            'description' => '策略治理详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'OnState' => [
                                                    'description' => '当前关联集群中开启的不同等级策略计数统计。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '当前关联集群中开启的不同等级策略计数统计。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'EnabledCount' => [
                                                                'description' => '当前开启的策略种类计数。',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '2',
                                                            ],
                                                            'TotalCount' => [
                                                                'description' => '该等级下策略种类总数。',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '2',
                                                            ],
                                                            'Severity' => [
                                                                'description' => '策略治理等级。',
                                                                'type' => 'string',
                                                                'example' => 'low',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'AdmitLog' => [
                                                    'description' => '关联集群当前策略治理审计日志。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Progress' => [
                                                            'description' => '查询结果的状态，取值：'."\n"
                                                                ."\n"
                                                                .'- Complete：查询已经完成，返回结果为完整结果。'."\n"
                                                                .'- Incomplete：查询已经完成，返回结果为不完整结果，需要重复请求以获得完整结果。',
                                                            'type' => 'string',
                                                            'example' => 'Complete',
                                                        ],
                                                        'Count' => [
                                                            'description' => '当前查询到的日志总数。',
                                                            'type' => 'string',
                                                            'example' => '100',
                                                        ],
                                                        'Logs' => [
                                                            'description' => '策略治理审计日志内容。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '策略治理审计日志内容。',
                                                                'type' => 'object',
                                                                'additionalProperties' => [
                                                                    'type' => 'string',
                                                                    'description' => '策略治理审计日志内容。',
                                                                    'example' => 'c8155823d057948c69a****'."\n",
                                                                ],
                                                            ],
                                                        ],
                                                        'LogProject' => [
                                                            'description' => '日志服务LogProject的名称。',
                                                            'type' => 'string',
                                                            'example' => 'demo',
                                                        ],
                                                        'LogStore' => [
                                                            'description' => '日志服务LogStore的名称。',
                                                            'type' => 'string',
                                                            'example' => 'demo',
                                                        ],
                                                    ],
                                                ],
                                                'Violation' => [
                                                    'description' => '关联集群中针对不同策略类型的拦截和告警的审计计数统计列表。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'TotalViolations' => [
                                                            'description' => '关联集群中当前被拦截和告警两种处理类型下不同治理等级的违规计数。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Deny' => [
                                                                    'description' => '被拦截的不同治理等级的违规计数统计。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '被拦截的不同治理等级的违规计数统计。',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'Severity' => [
                                                                                'description' => '策略治理等级。',
                                                                                'type' => 'string',
                                                                                'example' => 'low',
                                                                            ],
                                                                            'Violations' => [
                                                                                'description' => '被拦截的事件计数。',
                                                                                'type' => 'integer',
                                                                                'format' => 'int64',
                                                                                'example' => '2',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                                'Warn' => [
                                                                    'description' => '告警模式下不同治理等级的违规计数统计。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '告警模式下不同治理等级的违规计数统计。',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'Severity' => [
                                                                                'description' => '策略治理等级。',
                                                                                'type' => 'string',
                                                                                'example' => 'low',
                                                                            ],
                                                                            'Violations' => [
                                                                                'description' => '被拦截的事件计数。',
                                                                                'type' => 'string',
                                                                                'example' => '2',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                        'Violations' => [
                                                            'description' => '关联集群中针对不同策略类型的拦截和告警的审计计数统计列表。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Deny' => [
                                                                    'description' => '被拦截的不同策略类型的审计计数。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '被拦截的不同策略类型的审计计数。',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'PolicyName' => [
                                                                                'description' => '策略治理规则名称。',
                                                                                'type' => 'string',
                                                                                'example' => 'ACKPSPCapabilities',
                                                                            ],
                                                                            'PolicyDescription' => [
                                                                                'description' => '规则模板描述。',
                                                                                'type' => 'string',
                                                                                'example' => 'Restricts secrets used in pod envs'."\n",
                                                                            ],
                                                                            'Severity' => [
                                                                                'description' => '策略治理等级。',
                                                                                'type' => 'string',
                                                                                'example' => 'low',
                                                                            ],
                                                                            'Violations' => [
                                                                                'description' => '关联集群中对应规则类型下被拦截的违规计数统计。',
                                                                                'type' => 'integer',
                                                                                'format' => 'int64',
                                                                                'example' => '2',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                                'Warn' => [
                                                                    'description' => '告警模式下不同治理等级的违规计数统计。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '告警模式下不同治理等级的违规计数统计。',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'PolicyName' => [
                                                                                'description' => '策略治理规则名称。',
                                                                                'type' => 'string',
                                                                                'example' => 'ACKPSPCapabilities',
                                                                            ],
                                                                            'PolicyDescription' => [
                                                                                'description' => '规则模板描述。',
                                                                                'type' => 'string',
                                                                                'example' => 'Restricts secrets used in pod envs'."\n",
                                                                            ],
                                                                            'Severity' => [
                                                                                'description' => '策略治理等级。',
                                                                                'type' => 'string',
                                                                                'example' => 'low',
                                                                            ],
                                                                            'Violations' => [
                                                                                'description' => '关联集群中对应规则类型下被告警的违规计数统计。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"96C6A284-0EC3-5486-9A97-E8E9EE27E9EF\\",\\n  \\"PolicyGovernances\\": [\\n    {\\n      \\"Cluster\\": {\\n        \\"ClusterId\\": \\"ca5cf1b5edb5c4736a6ea0dfb4061****\\",\\n        \\"Name\\": \\"ack-001\\",\\n        \\"RegionId\\": \\"cn-heyuan\\",\\n        \\"State\\": \\"running\\",\\n        \\"ClusterType\\": \\"ManagedKubernetes\\",\\n        \\"ClusterSpec\\": \\"ack.pro.small \\",\\n        \\"Profile\\": \\"Default\\"\\n      },\\n      \\"PolicyGovernance\\": {\\n        \\"OnState\\": [\\n          {\\n            \\"EnabledCount\\": 2,\\n            \\"TotalCount\\": 2,\\n            \\"Severity\\": \\"low\\"\\n          }\\n        ],\\n        \\"AdmitLog\\": {\\n          \\"Progress\\": \\"Complete\\",\\n          \\"Count\\": \\"100\\",\\n          \\"Logs\\": [\\n            {\\n              \\"key\\": \\"c8155823d057948c69a****\\\\n\\"\\n            }\\n          ],\\n          \\"LogProject\\": \\"demo\\",\\n          \\"LogStore\\": \\"demo\\"\\n        },\\n        \\"Violation\\": {\\n          \\"TotalViolations\\": {\\n            \\"Deny\\": [\\n              {\\n                \\"Severity\\": \\"low\\",\\n                \\"Violations\\": 2\\n              }\\n            ],\\n            \\"Warn\\": [\\n              {\\n                \\"Severity\\": \\"low\\",\\n                \\"Violations\\": \\"2\\"\\n              }\\n            ]\\n          },\\n          \\"Violations\\": {\\n            \\"Deny\\": [\\n              {\\n                \\"PolicyName\\": \\"ACKPSPCapabilities\\",\\n                \\"PolicyDescription\\": \\"Restricts secrets used in pod envs\\\\n\\",\\n                \\"Severity\\": \\"low\\",\\n                \\"Violations\\": 2\\n              }\\n            ],\\n            \\"Warn\\": [\\n              {\\n                \\"PolicyName\\": \\"ACKPSPCapabilities\\",\\n                \\"PolicyDescription\\": \\"Restricts secrets used in pod envs\\\\n\\",\\n                \\"Severity\\": \\"low\\",\\n                \\"Violations\\": 2\\n              }\\n            ]\\n          }\\n        }\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取主控实例下关联集群策略治理详情',
        ],
        'DeletePolicyInstance' => [
            'summary' => '删除关联集群中的策略规则实例。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '176415',
                'abilityTreeNodes' => [
                    'FEATUREadcpVUYVM4',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主控实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c09946603cd764dac96135f51d1ba****',
                    ],
                ],
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略治理规则名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ACKNoEnvVarSecrets',
                    ],
                ],
                [
                    'name' => 'ClusterIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'JSON格式的字符串，可以被解析为一个字符串数组。要删除策略规则的关联集群数组。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'JSON格式的字符串，可以被解析为一个字符串数组。要删除策略规则的关联集群数组。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '["c1c731554c1ec4a1ca9bb690ff9ed****"]',
                        ],
                        'required' => false,
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'EA06613B-37A3-549E-BAE0-E4AD8A6E93D7',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EA06613B-37A3-549E-BAE0-E4AD8A6E93D7\\"\\n}","type":"json"}]',
            'title' => '删除关联集群中的策略规则实例',
        ],
        'DescribeHubClusterLogs' => [
            'summary' => '获取ACK One多集群舰队主控集群的日志。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '125616',
                'abilityTreeNodes' => [
                    'FEATUREadcpH1M5DC',
                    'FEATUREadcpMQ5GFM',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '集群ID',
                        'description' => '主控集群的ID。您可以调用[DescribeHubClusters](~~424404~~)接口查询已创建的主控集群。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c9cb1d933b2ab47ff9cd25571477d****',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '661192D7-25A6-54C2-B643-1129CB7D2768',
                            ],
                            'Logs' => [
                                'description' => '操作日志简要信息数组。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '日志信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'CreationTime' => [
                                            'description' => '日志创建时间。格式：<i>yyyy-mm-dd</i>t<i>hh:mm:ss</i>z（utc时间）。',
                                            'type' => 'string',
                                            'example' => '2021-12-02T11:48:15+08:00',
                                        ],
                                        'ClusterId' => [
                                            'description' => '集群ID。',
                                            'type' => 'string',
                                            'example' => 'c102fe5f1ee5d4c87a68121a77d8b****',
                                        ],
                                        'ClusterLog' => [
                                            'description' => '集群日志。',
                                            'type' => 'string',
                                            'example' => 'Cluster Created',
                                        ],
                                        'LogLevel' => [
                                            'description' => '日志级别。取值范围：'."\n"
                                                .'- error：错误。'."\n"
                                                .'- warn：警告。'."\n"
                                                .'- info：信息。',
                                            'type' => 'string',
                                            'example' => 'info',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"661192D7-25A6-54C2-B643-1129CB7D2768\\",\\n  \\"Logs\\": [\\n    {\\n      \\"CreationTime\\": \\"2021-12-02T11:48:15+08:00\\",\\n      \\"ClusterId\\": \\"c102fe5f1ee5d4c87a68121a77d8b****\\",\\n      \\"ClusterLog\\": \\"Cluster Created\\",\\n      \\"LogLevel\\": \\"info\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询集群日志',
        ],
        'DescribeRegions' => [
            'summary' => '查看可选的地域。',
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
                'abilityTreeCode' => '128489',
                'abilityTreeNodes' => [
                    'FEATUREadcpMQ5GFM',
                    'FEATUREadcpH1M5DC',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Language',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语言。取值：'."\n"
                            .'- `zh`：中文。'."\n"
                            .'- `en`：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'en',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C0EE05F4-6C1D-5993-B028-B569F9ED6B51',
                            ],
                            'Regions' => [
                                'description' => '地域信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '地域数据。',
                                    'type' => 'object',
                                    'properties' => [
                                        'RegionId' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'LocalName' => [
                                            'description' => '地域名称。',
                                            'type' => 'string',
                                            'example' => 'China (Hangzhou)',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C0EE05F4-6C1D-5993-B028-B569F9ED6B51\\",\\n  \\"Regions\\": [\\n    {\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"LocalName\\": \\"China (Hangzhou)\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看可选的地域',
        ],
        'ChangeResourceGroup' => [
            'summary' => '更新资源组',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '218610',
                'abilityTreeNodes' => [
                    'FEATUREadcpH1M5DC',
                    'FEATUREadcpMQ5GFM',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型的ID标识符。例如，当ResourceType=cluster时，则ResourceId可以理解为ClusterId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c9603ee23a84a41d6a1424619cb80****',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型，仅支持cluster。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cluster',
                        'enum' => [
                            'cluster',
                        ],
                    ],
                ],
                [
                    'name' => 'NewResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的资源组ID，可在资源组控制台查看可用资源组。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rg-aekzlvgbhaca***',
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
                                'example' => '5BE4C329-DCC2-5B61-8F66-112B7D7FC712',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5BE4C329-DCC2-5B61-8F66-112B7D7FC712\\"\\n}","type":"json"}]',
            'title' => '资源组转组',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'adcp.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'adcp.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'adcp.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'adcp.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'adcp.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'adcp.cn-heyuan.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'adcp.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'adcp.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'adcp.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'adcp.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'adcp.cn-shanghai-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'adcp.cn-shenzhen-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-central-1',
            'endpoint' => 'adcp.me-central-1.aliyuncs.com',
        ],
    ],
];
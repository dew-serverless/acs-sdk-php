<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'eflo-controller',
        'version' => '2022-12-15',
    ],
    'directories' => [
        [
            'id' => 181847,
            'title' => '灵骏集群',
            'type' => 'directory',
            'children' => [
                'CreateCluster',
                'DeleteCluster',
                'DescribeCluster',
                'ExtendCluster',
                'ListClusters',
                'ListClusterNodes',
                'ShrinkCluster',
            ],
        ],
        [
            'id' => 181846,
            'title' => '灵骏节点',
            'type' => 'directory',
            'children' => [
                'DescribeNode',
                'ListFreeNodes',
                'RebootNodes',
                'ReimageNodes',
            ],
        ],
        [
            'id' => 184488,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'UntagResources',
                'TagResources',
                'ListTagResources',
                'DescribeZones',
                'DescribeTask',
                'DescribeRegions',
                'ChangeResourceGroup',
                'ApproveOperation',
                'StopInvocation',
                'RunCommand',
                'DescribeInvocations',
                'DescribeSendFileResults',
                'SendFile',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateCluster' => [
            'summary' => '创建一个新的灵骏集群。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '集群名称',
                        'description' => '集群名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Standard_Cluster',
                    ],
                ],
                [
                    'name' => 'ClusterType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '集群类型',
                        'description' => '集群类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Lite',
                    ],
                ],
                [
                    'name' => 'ClusterDescription',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '集群描述',
                        'description' => '集群描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '标准集群测试',
                    ],
                ],
                [
                    'name' => 'NodeGroups',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '节点组列表'."\n",
                        'description' => '节点组列表'."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '节点分组信息',
                            'type' => 'object',
                            'properties' => [
                                'Nodes' => [
                                    'title' => '节点列表',
                                    'description' => '节点列表',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '节点列表',
                                        'type' => 'object',
                                        'properties' => [
                                            'NodeId' => [
                                                'title' => '节点id',
                                                'description' => '节点id',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'e01poc-cn-i7m2wnivf0d',
                                            ],
                                            'Hostname' => [
                                                'title' => '主机名'."\n",
                                                'description' => '主机名'."\n",
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '8d13b784-17a9-11ed-bc7b-acde48001122',
                                            ],
                                            'LoginPassword' => [
                                                'title' => '登录密码',
                                                'description' => '登录密码',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '***',
                                            ],
                                            'VSwitchId' => [
                                                'title' => 'dpu使用的交换机id'."\n",
                                                'description' => '虚拟交换机ID。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'vsw-bp169pi5fj151rrms4sia',
                                            ],
                                            'VpcId' => [
                                                'title' => 'dpu使用的虚拟网络id',
                                                'description' => '专有网络ID',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'vpc-0jlasms92fdxqd3wlf8ny',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                ],
                                'NodeGroupName' => [
                                    'title' => '节点组名称',
                                    'description' => '节点组名称',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'emr-default',
                                ],
                                'NodeGroupDescription' => [
                                    'title' => '节点组描述',
                                    'description' => '节点组描述',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '默认节点组',
                                ],
                                'MachineType' => [
                                    'title' => '机型',
                                    'description' => '机型',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'efg1.nvga1',
                                ],
                                'ImageId' => [
                                    'title' => '系统镜像id',
                                    'description' => '系统镜像id',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'i190297201634099844192',
                                ],
                                'ZoneId' => [
                                    'title' => '可用区id',
                                    'description' => '可用区id',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-hangzhou-i',
                                ],
                                'UserData' => [
                                    'title' => '用户自定义脚本，命令',
                                    'description' => '实例自定义数据。需要以Base64方式编码，原始数据最多为16 KB。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ZWNobyBoZWxsbyBlY3Mh',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IgnoreFailedNodeTasks',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否允许跳过失败节点，默认值为Flase',
                        'description' => '是否允许跳过失败节点，默认值为False',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'False',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '资源组id',
                        'description' => '资源组id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aek2xdkc6icwfha',
                    ],
                ],
                [
                    'name' => 'Networks',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '网络信息',
                        'description' => '网络信息',
                        'type' => 'object',
                        'properties' => [
                            'NewVpdInfo' => [
                                'description' => 'Vpd配置信息',
                                'type' => 'object',
                                'properties' => [
                                    'CenId' => [
                                        'title' => '云企业网id',
                                        'description' => '云企业网id',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'cen-1gb1eftc5qp2ao75fo',
                                    ],
                                    'CloudLinkCidr' => [
                                        'title' => '云链cidr',
                                        'description' => '云链cidr',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '172.16.0.0/24',
                                    ],
                                    'CloudLinkId' => [
                                        'title' => '云链id',
                                        'description' => '云链id',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'vcc-cn-c4dtycm5i08',
                                    ],
                                    'MonitorVpcId' => [
                                        'title' => '专有网络',
                                        'description' => '专有网络',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'vpc-0jl2x45apm6odc2c10h25',
                                    ],
                                    'MonitorVswitchId' => [
                                        'title' => '专有网络交换机',
                                        'description' => '专有网络交换机',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'vsw-0jl2w3ffbghkss0x2foff',
                                    ],
                                    'VpdCidr' => [
                                        'title' => '集群网段',
                                        'description' => '集群网段',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '192.168.0.0/16',
                                    ],
                                    'VpdSubnets' => [
                                        'title' => 'vpd子网信息',
                                        'description' => '集群子网',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'SubnetCidr' => [
                                                    'title' => '子网cidr',
                                                    'description' => '子网cidr',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => '10.0.1.8/24',
                                                ],
                                                'SubnetType' => [
                                                    'title' => '子网类型',
                                                    'description' => '子网类型',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => '10.0.2.8/24',
                                                ],
                                                'ZoneId' => [
                                                    'title' => '可用区id',
                                                    'description' => '可用区id',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'cn-wulanchabu-b',
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => false,
                            ],
                            'VpdInfo' => [
                                'description' => '复用VPD信息',
                                'type' => 'object',
                                'properties' => [
                                    'VpdId' => [
                                        'description' => '专有网络 id',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'vpd-vfuz6ejv',
                                    ],
                                    'VpdSubnets' => [
                                        'description' => '集群子网id列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '集群子网id',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'subnet-jcloe1',
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => false,
                            ],
                            'IpAllocationPolicy' => [
                                'description' => 'IP分配策略',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'BondPolicy' => [
                                            'description' => 'bond策略',
                                            'type' => 'object',
                                            'properties' => [
                                                'BondDefaultSubnet' => [
                                                    'description' => '默认bond集群子网',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => '172.168.0.0/24',
                                                ],
                                                'Bonds' => [
                                                    'description' => 'bond信息',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Name' => [
                                                                'description' => 'bond名称',
                                                                'type' => 'string',
                                                                'required' => false,
                                                                'example' => 'bond0',
                                                            ],
                                                            'Subnet' => [
                                                                'description' => 'ip来源集群子网',
                                                                'type' => 'string',
                                                                'required' => false,
                                                                'example' => '172.16.0.0/24',
                                                            ],
                                                        ],
                                                        'required' => false,
                                                    ],
                                                    'required' => false,
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                        'MachineTypePolicy' => [
                                            'description' => '机型分配策略',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Bonds' => [
                                                        'description' => 'bond信息',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Name' => [
                                                                    'description' => 'bond名称',
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                    'example' => 'bond0',
                                                                ],
                                                                'Subnet' => [
                                                                    'description' => 'ip来源集群子网',
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                    'example' => '192.168.1.0/24',
                                                                ],
                                                            ],
                                                            'required' => false,
                                                        ],
                                                        'required' => false,
                                                    ],
                                                    'MachineType' => [
                                                        'description' => '机型',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => 'efg1.nvga8n',
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'required' => false,
                                        ],
                                        'NodePolicy' => [
                                            'description' => '节点分配策略',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Bonds' => [
                                                        'description' => 'bond信息',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Name' => [
                                                                    'description' => 'bond名称',
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                    'example' => 'bond0'."\n",
                                                                ],
                                                                'Subnet' => [
                                                                    'description' => 'ip来源集群子网',
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                    'example' => '10.0.0.0/24',
                                                                ],
                                                            ],
                                                            'required' => false,
                                                        ],
                                                        'required' => false,
                                                    ],
                                                    'NodeId' => [
                                                        'description' => '节点id',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => 'e01-cn-2r42vq62001',
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'required' => false,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'SecurityGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VSwitchZoneId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VpcId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VSwitchId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'TailIpVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '资源标签',
                        'description' => '资源标签',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '键',
                                    'description' => '键',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'env-name',
                                ],
                                'Value' => [
                                    'title' => '值',
                                    'description' => '值',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'dev',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'Components',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '组件（软件实例）',
                        'description' => '组件（软件实例）',
                        'type' => 'array',
                        'items' => [
                            'title' => '组件类型',
                            'description' => '组件类型',
                            'type' => 'object',
                            'properties' => [
                                'ComponentType' => [
                                    'title' => '组件类型：  "ACKEdge"(ACK边缘集群)'."\n"
                                        .'"ARMS"（ARMS监控）',
                                    'description' => '组件类型',
                                    'type' => 'string',
                                    'required' => false,
                                    'enumValueTitles' => [
                                        'ARMS' => 'ARMS监控',
                                        'ACKEdge' => 'ACK边缘集群',
                                    ],
                                    'example' => 'ACKEdge',
                                ],
                                'ComponentConfig' => [
                                    'title' => '组件配置',
                                    'description' => '组件配置',
                                    'type' => 'object',
                                    'properties' => [
                                        'BasicArgs' => [
                                            'description' => '组件基础参数',
                                            'type' => 'any',
                                            'required' => false,
                                            'example' => '{'."\n"
                                                .'      "EndpointPublicAccess": false,'."\n"
                                                .'      "ContainerCidr": "10.4.0.0/24",'."\n"
                                                .'      "KeyPair": "test",'."\n"
                                                .'      "NodeCidrMask": "25",'."\n"
                                                .'      "ResourceGroupId": "rg-axsadm3sdzsdvdsndstdisd",'."\n"
                                                .'      "WorkerSystemDiskCategory": "da",'."\n"
                                                .'      "WorkerSystemDiskSize": 40,'."\n"
                                                .'      "DeletionProtection": false,'."\n"
                                                .'      "KubeProxy": "iptables",'."\n"
                                                .'      "Name": "da",'."\n"
                                                .'      "LoadBalancerSpec": "slb.s1.small",'."\n"
                                                .'      "Runtime": {'."\n"
                                                .'            "Version": "19.03.15",'."\n"
                                                .'            "Name": "docker"'."\n"
                                                .'      },'."\n"
                                                .'      "IsEnterpriseSecurityGroup": true,'."\n"
                                                .'      "Vpcid": "192.168.23.0/24",'."\n"
                                                .'      "NumOfNodes": 1,'."\n"
                                                .'      "VswitchIds": ['."\n"
                                                .'            "dad"'."\n"
                                                .'      ],'."\n"
                                                .'      "ServiceCidr": "10.0.0.0/16",'."\n"
                                                .'      "SnatEntry": false,'."\n"
                                                .'      "kubernetesVersion": "1.20.11-aliyunedge.1",'."\n"
                                                .'      "WorkerInstanceTypes": ['."\n"
                                                .'            "da"'."\n"
                                                .'      ]'."\n"
                                                .'}',
                                        ],
                                        'NodeUnits' => [
                                            'title' => '节点池配置， 并用于建立节点组和节点池的对应关系。 当'."\n"
                                                .'ComponentType=”ACKEdge“时必填，其他为空。',
                                            'description' => '节点池配置， 并用于建立节点组和节点池的对应关系。 当'."\n"
                                                .'ComponentType=”ACKEdge“时必填，其他为空。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '节点池配置， 并用于建立节点组和节点池的对应关系。 当'."\n"
                                                    .'ComponentType=”ACKEdge“时必填，其他为空。',
                                                'type' => 'any',
                                                'required' => false,
                                                'example' => '{'."\n"
                                                    .'      "Options": {},'."\n"
                                                    .'      "Type": "edge",'."\n"
                                                    .'      "ResourceGroupId": "rg-acfm2cdxm3zvnt4dsa1s1t65fi",'."\n"
                                                    .'      "RelatedNodeGroups": ['."\n"
                                                    .'            "tes"'."\n"
                                                    .'      ],'."\n"
                                                    .'      "NodeUnitKey": "da",'."\n"
                                                    .'      "MaxNodes": 30'."\n"
                                                    .'}',
                                            ],
                                            'required' => false,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HpnZone',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '集群编号',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'A1',
                    ],
                ],
                [
                    'name' => 'NimizVSwitches',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'Node虚拟交换机',
                        'type' => 'array',
                        'items' => [
                            'description' => 'Node虚拟交换机id',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'vsw-0jlx7dkziyhgf6klwnsi3',
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
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '3C683243-7915-57FB-9570-A2932C1C0F78',
                            ],
                            'ClusterId' => [
                                'title' => '集群id',
                                'description' => '集群id',
                                'type' => 'string',
                                'example' => 'i116913051663373010974',
                            ],
                            'TaskId' => [
                                'title' => '任务id',
                                'description' => '任务id',
                                'type' => 'string',
                                'example' => 'i159809891662373011015',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3C683243-7915-57FB-9570-A2932C1C0F78\\",\\n  \\"ClusterId\\": \\"i116913051663373010974\\",\\n  \\"TaskId\\": \\"i159809891662373011015\\"\\n}","type":"json"}]',
            'title' => '创建集群',
        ],
        'DeleteCluster' => [
            'summary' => '删除灵骏集群实例。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '集群 id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i116913051662373010974',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0FC4A1C7-421C-5EAB-9361-4C0338EFA287',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FC4A1C7-421C-5EAB-9361-4C0338EFA287\\"\\n}","type":"json"}]',
            'title' => '删除集群',
        ],
        'DescribeCluster' => [
            'summary' => '查询灵骏集群详情。',
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
                    'name' => 'ClusterId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '',
                        'description' => '集群id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i119982311660892626523',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '887FA855-89F4-5DB3-B305-C5879EC480E6',
                            ],
                            'CreateTime' => [
                                'title' => '创建时间',
                                'description' => '创建时间',
                                'type' => 'string',
                                'example' => '2022-06-08T07:05:11Z',
                            ],
                            'NodeCount' => [
                                'title' => '节点数',
                                'description' => '节点数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'NodeGroupCount' => [
                                'title' => '节点组数量',
                                'description' => '节点组数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'UpdateTime' => [
                                'title' => '更新时间',
                                'description' => '更新时间',
                                'type' => 'string',
                                'example' => '2022-08-23T06:36:17.000Z',
                            ],
                            'ClusterDescription' => [
                                'title' => '集群描述',
                                'description' => '集群描述',
                                'type' => 'string',
                                'example' => '测试集群',
                            ],
                            'OperatingState' => [
                                'title' => '集群状态',
                                'description' => '集群状态',
                                'type' => 'string',
                                'example' => 'running',
                            ],
                            'Components' => [
                                'title' => '组件信息',
                                'description' => '组件信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ComponentType' => [
                                            'title' => '组件类型',
                                            'description' => '组件类型',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'ARMS' => 'ARMS监控',
                                                'ACKEdge' => 'ACK边缘集群',
                                            ],
                                            'example' => 'ACKEdge',
                                        ],
                                        'ComponentId' => [
                                            'title' => '组件id',
                                            'description' => '组件id',
                                            'type' => 'string',
                                            'example' => 'i149549021660892626529',
                                        ],
                                    ],
                                ],
                            ],
                            'ClusterId' => [
                                'title' => '集群id'."\n",
                                'description' => '集群id'."\n",
                                'type' => 'string',
                                'example' => 'i116913051662373010974',
                            ],
                            'ClusterName' => [
                                'title' => '集群名称',
                                'description' => '集群名称',
                                'type' => 'string',
                                'example' => 'Eflo-YJ-Test-Cluster',
                            ],
                            'TaskId' => [
                                'title' => '任务id',
                                'description' => '任务id',
                                'type' => 'string',
                                'example' => 'i152609221670466904596',
                            ],
                            'ClusterType' => [
                                'title' => '集群类型',
                                'description' => '集群类型',
                                'type' => 'string',
                                'example' => 'AckEdgePro',
                            ],
                            'Networks' => [
                                'title' => '网络信息',
                                'description' => '网络信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'VpdId' => [
                                            'title' => '集群网段id',
                                            'description' => '集群网段id',
                                            'type' => 'string',
                                            'example' => 'vpd-iqd7xunc',
                                        ],
                                    ],
                                ],
                            ],
                            'ResourceGroupId' => [
                                'title' => '资源组id',
                                'description' => '资源组id',
                                'type' => 'string',
                                'example' => 'rg-aek2k3rqlvv6ytq',
                            ],
                            'VpcId' => [
                                'description' => '专有网络ID',
                                'type' => 'string',
                                'example' => 'vpc-0jlkqysom5dmcviymep3f',
                            ],
                            'HpnZone' => [
                                'description' => '集群编号',
                                'type' => 'string',
                                'example' => 'A2',
                            ],
                            'ComputingIpVersion' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"887FA855-89F4-5DB3-B305-C5879EC480E6\\",\\n  \\"CreateTime\\": \\"2022-06-08T07:05:11Z\\",\\n  \\"NodeCount\\": 2,\\n  \\"NodeGroupCount\\": 2,\\n  \\"UpdateTime\\": \\"2022-08-23T06:36:17.000Z\\",\\n  \\"ClusterDescription\\": \\"测试集群\\",\\n  \\"OperatingState\\": \\"running\\",\\n  \\"Components\\": [\\n    {\\n      \\"ComponentType\\": \\"ACKEdge\\",\\n      \\"ComponentId\\": \\"i149549021660892626529\\"\\n    }\\n  ],\\n  \\"ClusterId\\": \\"i116913051662373010974\\",\\n  \\"ClusterName\\": \\"Eflo-YJ-Test-Cluster\\",\\n  \\"TaskId\\": \\"i152609221670466904596\\",\\n  \\"ClusterType\\": \\"AckEdgePro\\",\\n  \\"Networks\\": [\\n    {\\n      \\"VpdId\\": \\"vpd-iqd7xunc\\"\\n    }\\n  ],\\n  \\"ResourceGroupId\\": \\"rg-aek2k3rqlvv6ytq\\",\\n  \\"VpcId\\": \\"vpc-0jlkqysom5dmcviymep3f\\",\\n  \\"HpnZone\\": \\"A2\\",\\n  \\"ComputingIpVersion\\": \\"\\"\\n}","type":"json"}]',
            'title' => '查询集群',
        ],
        'ExtendCluster' => [
            'summary' => '集群扩容。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '集群id',
                        'description' => '集群id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'i15b480fbd2fcdbc2869cd80',
                    ],
                ],
                [
                    'name' => 'NodeGroups',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '节点组',
                        'description' => '节点组',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Nodes' => [
                                    'title' => '节点列表',
                                    'description' => '节点列表',
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Hostname' => [
                                                'title' => '主机名',
                                                'description' => '主机名',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'd044d220-33fd-11ed-86a6',
                                            ],
                                            'LoginPassword' => [
                                                'title' => '登录密码'."\n",
                                                'description' => '登录密码'."\n",
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '***',
                                            ],
                                            'NodeId' => [
                                                'title' => '节点id',
                                                'description' => '节点id',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'e01-cn-zvp2zdpy601',
                                            ],
                                            'VpcId' => [
                                                'description' => '专有网络id',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'vpc-0jlasms92fdxqd3wlf8ny',
                                            ],
                                            'VSwitchId' => [
                                                'description' => '交换机id',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'vsw-bp169pi5fj151rrms4sia',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                ],
                                'NodeGroupId' => [
                                    'title' => '节点组id',
                                    'description' => '节点组id',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'i16d4883a46cbadeb4bc9',
                                ],
                                'UserData' => [
                                    'title' => '用户自定义脚本，命令',
                                    'description' => '自定义数据',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '#!/bin/sh'."\n"
                                        .'echo "Hello World. The time is now $(date -R)!" | tee /root/userdata_test.txt',
                                ],
                                'ZoneId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IgnoreFailedNodeTasks',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否允许跳过失败节点，默认值为Flase',
                        'description' => '是否允许跳过失败节点，默认值为False',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'False'."\n",
                    ],
                ],
                [
                    'name' => 'VpdSubnets',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '集群子网列表',
                        'type' => 'array',
                        'items' => [
                            'description' => 'vpd子网',
                            'type' => 'string',
                            'required' => false,
                            'example' => '["subnet-3od2fe","subnet-fdo3dv"]',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IpAllocationPolicy',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '分配ip的组合策略： 每个策略只能选择一种策略类型，可以有多个策略进行组合',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'BondPolicy' => [
                                    'description' => '根据bond名称指定集群子网id',
                                    'type' => 'object',
                                    'properties' => [
                                        'BondDefaultSubnet' => [
                                            'description' => '默认bond集群子网',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'subnet-3od2fe',
                                        ],
                                        'Bonds' => [
                                            'description' => 'bond信息',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Name' => [
                                                        'description' => 'bond名称',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => 'Bond0',
                                                    ],
                                                    'Subnet' => [
                                                        'description' => 'ip来源集群子网',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => 'subnet-3od2fe'."\n",
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'required' => false,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'MachineTypePolicy' => [
                                    'description' => '机型分配策略',
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Bonds' => [
                                                'description' => 'bond信息',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Name' => [
                                                            'description' => 'bond名称',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => 'Bond0',
                                                        ],
                                                        'Subnet' => [
                                                            'description' => 'ip来源集群子网',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => 'subnet-fdo3dv',
                                                        ],
                                                    ],
                                                    'required' => false,
                                                ],
                                                'required' => false,
                                            ],
                                            'MachineType' => [
                                                'description' => '机型',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'efg1.nvga1',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                ],
                                'NodePolicy' => [
                                    'description' => '节点分配策略',
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Bonds' => [
                                                'description' => 'bond信息',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Name' => [
                                                            'description' => 'bond名称',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => 'Bond0',
                                                        ],
                                                        'Subnet' => [
                                                            'description' => 'ip来源集群子网',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => 'subnet-fdo3dv',
                                                        ],
                                                    ],
                                                    'required' => false,
                                                ],
                                                'required' => false,
                                            ],
                                            'NodeId' => [
                                                'description' => '节点id',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'i-3fdodw2',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'VSwitchZoneId',
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
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '03668372-18FF-5959-98D9-6B36A4643C7A',
                            ],
                            'TaskId' => [
                                'title' => '任务id',
                                'description' => '任务id',
                                'type' => 'string',
                                'example' => 'i158475611663639202234',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"03668372-18FF-5959-98D9-6B36A4643C7A\\",\\n  \\"TaskId\\": \\"i158475611663639202234\\"\\n}","type":"json"}]',
            'title' => '扩容集群',
        ],
        'ListClusters' => [
            'summary' => '查询集群实例列表。',
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
                        'title' => '查询凭证（Token），取值为上一次API调用返回的 NextToken 参数值。'."\n",
                        'description' => '查询凭证（Token），取值为上一次API调用返回的 NextToken 参数值。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a3f2224a5ec7224116c4f5246120abe4',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分页查询时每页行数。最大值为100。'."\n"
                            ."\n"
                            .'默认值：'."\n"
                            ."\n"
                            .'•当不设置值或设置的值小于20时，默认值为20。'."\n"
                            ."\n"
                            .'•当设置的值大于100时，默认值为100。',
                        'description' => '分页查询时每页行数，默认值为20。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '资源组id',
                        'description' => '资源组id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aek2bg6wyoox6jq',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '2FE2B22C-CF9D-59DE-BF63-DC9B9B33A9D1',
                            ],
                            'Clusters' => [
                                'title' => '集群信息',
                                'description' => '集群信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Components' => [
                                            'title' => '组件信息'."\n",
                                            'description' => '组件信息'."\n",
                                            'type' => 'any',
                                            'example' => '{}',
                                        ],
                                        'ClusterId' => [
                                            'title' => '集群id',
                                            'description' => '集群id',
                                            'type' => 'string',
                                            'example' => 'i137590131672134915401',
                                        ],
                                        'ClusterName' => [
                                            'title' => '集群name',
                                            'description' => '集群name',
                                            'type' => 'string',
                                            'example' => 'cnp_test_cluster',
                                        ],
                                        'OperatingState' => [
                                            'title' => '集群状态',
                                            'description' => '集群状态',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'running' => '运行中',
                                                'expanding' => '扩容中',
                                                'shrinking' => '缩容中',
                                                'initializing' => '初始化中',
                                            ],
                                            'example' => 'initializing',
                                        ],
                                        'TaskId' => [
                                            'title' => '任务id',
                                            'description' => '任务id',
                                            'type' => 'string',
                                            'example' => 'i156365121663149566024',
                                        ],
                                        'ClusterType' => [
                                            'title' => '集群类型',
                                            'description' => '集群类型',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'AckEdgePro' => '基于ACK@Edge Pro的灵骏集群',
                                                'ExclusiveBareCluster' => '专属裸集群',
                                                'Lite' => '基础版灵骏集群',
                                            ],
                                            'example' => 'AckEdgePro',
                                        ],
                                        'NodeCount' => [
                                            'title' => '节点数量',
                                            'description' => '节点数量',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '12',
                                        ],
                                        'NodeGroupCount' => [
                                            'title' => '节点组数量',
                                            'description' => '节点组数量',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '1672134938',
                                        ],
                                        'UpdateTime' => [
                                            'title' => '更新时间',
                                            'description' => '更新时间',
                                            'type' => 'string',
                                            'example' => '1672134968',
                                        ],
                                        'ClusterDescription' => [
                                            'title' => '集群描述',
                                            'description' => '集群描述',
                                            'type' => 'string',
                                            'example' => '测试集群',
                                        ],
                                        'ResourceGroupId' => [
                                            'title' => '资源组id',
                                            'description' => '资源组id',
                                            'type' => 'string',
                                            'example' => 'rg-aek2ajbjoloa23q',
                                        ],
                                        'VpcId' => [
                                            'description' => '专有网络id',
                                            'type' => 'string',
                                            'example' => 'vpc-0jlx4hol2bjboafzmffvd',
                                        ],
                                        'HpnZone' => [
                                            'description' => '集群编号',
                                            'type' => 'string',
                                            'example' => 'B1',
                                        ],
                                        'ComputingIpVersion' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'title' => '本次调用返回的查询凭证值。'."\n",
                                'description' => '本次调用返回的查询凭证值。'."\n",
                                'type' => 'string',
                                'example' => 'f4f9a292c17072a2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2FE2B22C-CF9D-59DE-BF63-DC9B9B33A9D1\\",\\n  \\"Clusters\\": [\\n    {\\n      \\"Components\\": \\"{}\\",\\n      \\"ClusterId\\": \\"i137590131672134915401\\",\\n      \\"ClusterName\\": \\"cnp_test_cluster\\",\\n      \\"OperatingState\\": \\"initializing\\",\\n      \\"TaskId\\": \\"i156365121663149566024\\",\\n      \\"ClusterType\\": \\"AckEdgePro\\",\\n      \\"NodeCount\\": 12,\\n      \\"NodeGroupCount\\": 2,\\n      \\"CreateTime\\": \\"1672134938\\",\\n      \\"UpdateTime\\": \\"1672134968\\",\\n      \\"ClusterDescription\\": \\"测试集群\\",\\n      \\"ResourceGroupId\\": \\"rg-aek2ajbjoloa23q\\",\\n      \\"VpcId\\": \\"vpc-0jlx4hol2bjboafzmffvd\\",\\n      \\"HpnZone\\": \\"B1\\",\\n      \\"ComputingIpVersion\\": \\"\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"f4f9a292c17072a2\\"\\n}","type":"json"}]',
            'title' => '查询集群列表',
        ],
        'ListClusterNodes' => [
            'summary' => '查询集群节点列表。',
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
                    'name' => 'ClusterId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '集群id',
                        'description' => '集群id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i15b480fbd2fcdbc2869cd80',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '查询凭证（Token），取值为上一次API调用返回的 NextToken 参数值。'."\n",
                        'description' => '查询凭证（Token），取值为上一次API调用返回的 NextToken 参数值。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAAdQ3Z+oPlg49gsr2y8jb6wY=',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分页查询时每页行数。最大值为100。'."\n"
                            ."\n"
                            .'默认值：'."\n"
                            ."\n"
                            .'•当不设置值或设置的值小于20时，默认值为20。'."\n"
                            ."\n"
                            .'•当设置的值大于100时，默认值为100。',
                        'description' => '分页查询时每页行数，默认值为20。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'NodeGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '节点组id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ng-ec3c96ff0aa4c60d',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '2BA76272-6608-5AEC-BBA8-B6F0D3D14CDB',
                            ],
                            'NextToken' => [
                                'title' => '本次调用返回的查询凭证值。'."\n",
                                'description' => '本次调用返回的查询凭证值。'."\n",
                                'type' => 'string',
                                'example' => 'AAAAAXW/ZB9TBvH+0ZK0phtCibQgQmu1RbqplAI6Velo2OKR',
                            ],
                            'Nodes' => [
                                'title' => '节点列表',
                                'description' => '节点列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CreateTime' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '1642472468000'."\n",
                                        ],
                                        'ExpiredTime' => [
                                            'title' => '机器过期时间',
                                            'description' => '机器过期时间',
                                            'type' => 'string',
                                            'example' => '1762185600000',
                                        ],
                                        'Hostname' => [
                                            'title' => '主机名',
                                            'description' => '主机名',
                                            'type' => 'string',
                                            'example' => '72432f80-273e-11ed-b57a-acde48001122',
                                        ],
                                        'ImageId' => [
                                            'title' => '系统镜像id',
                                            'description' => '系统镜像id',
                                            'type' => 'string',
                                            'example' => 'i190297201669099844192',
                                        ],
                                        'MachineType' => [
                                            'title' => '机型',
                                            'description' => '机型',
                                            'type' => 'string',
                                            'example' => 'cn-wulanchabu-b11',
                                        ],
                                        'NodeGroupId' => [
                                            'title' => '节点组id'."\n",
                                            'description' => '节点组id'."\n",
                                            'type' => 'string',
                                            'example' => 'ng-e9b74f4d450cf18d',
                                        ],
                                        'NodeGroupName' => [
                                            'title' => '节点组名称'."\n",
                                            'description' => '节点组名称'."\n",
                                            'type' => 'string',
                                            'example' => 'emr_master',
                                        ],
                                        'NodeId' => [
                                            'title' => '节点id',
                                            'description' => '节点id',
                                            'type' => 'string',
                                            'example' => 'e01-cn-2r42tmj4z02',
                                        ],
                                        'OperatingState' => [
                                            'title' => '节点状态'."\n",
                                            'description' => '节点状态'."\n",
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Extending' => '扩容中',
                                                'UnusedNodeStopped' => '未使用节点停服中',
                                                'UnusedNodeStopping' => '未使用节点停服处理中',
                                                'Unused' => '未使用',
                                                'Using' => '使用中',
                                                'ReleaseLocking' => '待释放',
                                                'Operating' => '操作中',
                                                'Cutting' => '缩容中',
                                                'ClusterNodeStopped' => '集群节点停服中',
                                                'UnusedNodeRecovering' => '未使用节点恢复中',
                                                'ClusterNodeStopping' => '集群节点停服处理中',
                                                'ClusterNodeRecovering' => '未使用节点恢复中',
                                                'Replacing' => '替换中',
                                            ],
                                            'example' => 'Extending',
                                        ],
                                        'Sn' => [
                                            'title' => '机器sn',
                                            'description' => '机器sn',
                                            'type' => 'string',
                                            'enumValueTitles' => [],
                                            'example' => 'sn_tOuUk',
                                        ],
                                        'ZoneId' => [
                                            'title' => '可用区id',
                                            'description' => '可用区id',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-b',
                                        ],
                                        'Networks' => [
                                            'description' => '网络信息',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'BondName' => [
                                                        'description' => '机器网口名称',
                                                        'type' => 'string',
                                                        'example' => 'bond0',
                                                    ],
                                                    'Ip' => [
                                                        'description' => '专有网络内的机器ip',
                                                        'type' => 'string',
                                                        'example' => '192.168.22.2',
                                                    ],
                                                    'SubnetId' => [
                                                        'description' => '专有网络子网id',
                                                        'type' => 'string',
                                                        'example' => 'subnet-fwekrvg9',
                                                    ],
                                                    'VpdId' => [
                                                        'description' => '专有网络 id',
                                                        'type' => 'string',
                                                        'example' => 'vpd-eoiy88ju',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'HpnZone' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2BA76272-6608-5AEC-BBA8-B6F0D3D14CDB\\",\\n  \\"NextToken\\": \\"AAAAAXW/ZB9TBvH+0ZK0phtCibQgQmu1RbqplAI6Velo2OKR\\",\\n  \\"Nodes\\": [\\n    {\\n      \\"CreateTime\\": \\"1642472468000\\\\n\\",\\n      \\"ExpiredTime\\": \\"1762185600000\\",\\n      \\"Hostname\\": \\"72432f80-273e-11ed-b57a-acde48001122\\",\\n      \\"ImageId\\": \\"i190297201669099844192\\",\\n      \\"MachineType\\": \\"cn-wulanchabu-b11\\",\\n      \\"NodeGroupId\\": \\"ng-e9b74f4d450cf18d\\",\\n      \\"NodeGroupName\\": \\"emr_master\\",\\n      \\"NodeId\\": \\"e01-cn-2r42tmj4z02\\",\\n      \\"OperatingState\\": \\"Extending\\",\\n      \\"Sn\\": \\"sn_tOuUk\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-b\\",\\n      \\"Networks\\": [\\n        {\\n          \\"BondName\\": \\"bond0\\",\\n          \\"Ip\\": \\"192.168.22.2\\",\\n          \\"SubnetId\\": \\"subnet-fwekrvg9\\",\\n          \\"VpdId\\": \\"vpd-eoiy88ju\\"\\n        }\\n      ],\\n      \\"HpnZone\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询集群节点列表',
        ],
        'ShrinkCluster' => [
            'summary' => '灵骏集群缩容。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '集群id',
                        'description' => '集群id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'i15dfa12e8f27c44f4a006c2c8bb',
                    ],
                ],
                [
                    'name' => 'NodeGroups',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '节点组信息',
                        'description' => '节点组信息',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'NodeGroupId' => [
                                    'title' => '节点组id',
                                    'description' => '节点组id',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ng-3b6fbd24b1b845a0',
                                ],
                                'Nodes' => [
                                    'title' => '节点列表',
                                    'description' => '节点列表',
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'NodeId' => [
                                                'title' => '节点id',
                                                'description' => '节点id',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'e01poc-cn-zmb2ypjdc01',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IgnoreFailedNodeTasks',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否允许跳过失败节点，默认值为Flase',
                        'description' => '是否允许跳过失败节点，默认值为False',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'False',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id'."\n",
                                'description' => '请求id'."\n",
                                'type' => 'string',
                                'example' => 'CC9FEF89-9BE5-5E03-845E-238B48D7599B',
                            ],
                            'TaskId' => [
                                'title' => '任务id',
                                'description' => '任务id',
                                'type' => 'string',
                                'example' => 'i159136551662516768776',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CC9FEF89-9BE5-5E03-845E-238B48D7599B\\",\\n  \\"TaskId\\": \\"i159136551662516768776\\"\\n}","type":"json"}]',
            'title' => '集群缩容',
        ],
        'DescribeNode' => [
            'summary' => '查询节点列表。',
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
                    'name' => 'NodeId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '节点id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'mock-sn-2060',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'AC4F0004-7BCE-52E0-891B-CAC7D64E3368',
                            ],
                            'NodeGroupName' => [
                                'title' => '节点组名称',
                                'description' => '节点组名称',
                                'type' => 'string',
                                'example' => 'emr-default',
                            ],
                            'ClusterId' => [
                                'title' => '集群id',
                                'description' => '集群id',
                                'type' => 'string',
                                'example' => 'i116913051662373010974',
                            ],
                            'ClusterName' => [
                                'title' => '集群名称',
                                'description' => '集群名称',
                                'type' => 'string',
                                'example' => 'Standard_Cluster',
                            ],
                            'ZoneId' => [
                                'title' => '可用区id',
                                'description' => '可用区id',
                                'type' => 'string',
                                'example' => 'cn-hangzhou-i',
                            ],
                            'CreateTime' => [
                                'title' => '创建时间',
                                'description' => '创建时间',
                                'type' => 'string',
                                'example' => '2022-09-30T03:35:53Z',
                            ],
                            'NodeGroupId' => [
                                'title' => '节点组id',
                                'description' => '节点组id',
                                'type' => 'string',
                                'example' => 'ng-ec3c96ff0aa4c60d',
                            ],
                            'Hostname' => [
                                'title' => '主机名',
                                'description' => '主机名',
                                'type' => 'string',
                                'example' => '31d38530-241e-11ed-bc63-acde48001122',
                            ],
                            'ImageId' => [
                                'title' => '镜像id',
                                'description' => '镜像id',
                                'type' => 'string',
                                'example' => 'i190297201634099844192',
                            ],
                            'MachineType' => [
                                'title' => '机型',
                                'description' => '机型',
                                'type' => 'string',
                                'example' => 'efg1.nvga1',
                            ],
                            'NodeId' => [
                                'title' => '节点id',
                                'description' => '节点id',
                                'type' => 'string',
                                'example' => 'e01-cn-zvp2tgykr08',
                            ],
                            'Sn' => [
                                'title' => '机器唯一标识',
                                'description' => '机器唯一标识',
                                'type' => 'string',
                                'example' => 'sag42ckf4jx',
                            ],
                            'OperatingState' => [
                                'title' => '节点状态'."\n",
                                'description' => '节点状态'."\n",
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'Extending' => '扩容中',
                                    'UnusedNodeStopped' => '未使用节点停服中',
                                    'UnusedNodeStopping' => '未使用节点停服处理中',
                                    'Unused' => '未使用',
                                    'Using' => '使用中',
                                    'ReleaseLocking' => '待释放',
                                    'Operating' => '操作中',
                                    'Cutting' => '缩容中 ',
                                    'ClusterNodeStopped' => '集群节点停服中',
                                    'UnusedNodeRecovering' => '未使用节点恢复中',
                                    'ClusterNodeStopping' => '集群节点停服处理中',
                                    'ClusterNodeRecovering' => '集群节点恢复中',
                                    'Replacing' => '替换中',
                                ],
                                'example' => 'Using',
                            ],
                            'ExpiredTime' => [
                                'title' => '过期时间',
                                'description' => '过期时间',
                                'type' => 'string',
                                'example' => '2022-06-23T16:00:00Z',
                            ],
                            'Networks' => [
                                'title' => '网络信息',
                                'description' => '网络信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'BondName' => [
                                            'title' => '网卡端口信息',
                                            'description' => '网卡端口信息',
                                            'type' => 'string',
                                            'example' => 'Bond0',
                                        ],
                                        'Ip' => [
                                            'title' => '机器ip',
                                            'description' => '机器ip',
                                            'type' => 'string',
                                            'example' => '47.254.235.44',
                                        ],
                                        'SubnetId' => [
                                            'title' => '集群子网id',
                                            'description' => '集群子网id',
                                            'type' => 'string',
                                            'example' => 'vsw-uf68v51fldm5egmui5a6k',
                                        ],
                                        'VpdId' => [
                                            'title' => '集群网络id',
                                            'description' => '集群网络id',
                                            'type' => 'string',
                                            'example' => 'vpd-xcuhjyrj',
                                        ],
                                    ],
                                ],
                            ],
                            'ImageName' => [
                                'title' => '镜像名称',
                                'description' => '镜像名称',
                                'type' => 'string',
                                'example' => 'Centos7.9_all_0811',
                            ],
                            'HpnZone' => [
                                'type' => 'string',
                            ],
                            'ResourceGroupId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AC4F0004-7BCE-52E0-891B-CAC7D64E3368\\",\\n  \\"NodeGroupName\\": \\"emr-default\\",\\n  \\"ClusterId\\": \\"i116913051662373010974\\",\\n  \\"ClusterName\\": \\"Standard_Cluster\\",\\n  \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n  \\"CreateTime\\": \\"2022-09-30T03:35:53Z\\",\\n  \\"NodeGroupId\\": \\"ng-ec3c96ff0aa4c60d\\",\\n  \\"Hostname\\": \\"31d38530-241e-11ed-bc63-acde48001122\\",\\n  \\"ImageId\\": \\"i190297201634099844192\\",\\n  \\"MachineType\\": \\"efg1.nvga1\\",\\n  \\"NodeId\\": \\"e01-cn-zvp2tgykr08\\",\\n  \\"Sn\\": \\"sag42ckf4jx\\",\\n  \\"OperatingState\\": \\"Using\\",\\n  \\"ExpiredTime\\": \\"2022-06-23T16:00:00Z\\",\\n  \\"Networks\\": [\\n    {\\n      \\"BondName\\": \\"Bond0\\",\\n      \\"Ip\\": \\"47.254.235.44\\",\\n      \\"SubnetId\\": \\"vsw-uf68v51fldm5egmui5a6k\\",\\n      \\"VpdId\\": \\"vpd-xcuhjyrj\\"\\n    }\\n  ],\\n  \\"ImageName\\": \\"Centos7.9_all_0811\\",\\n  \\"HpnZone\\": \\"\\",\\n  \\"ResourceGroupId\\": \\"\\"\\n}","type":"json"}]',
            'title' => '查询节点',
        ],
        'ListFreeNodes' => [
            'summary' => '查询未使用节点列表。',
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
                        'title' => '查询凭证（Token），取值为上一次API调用返回的 NextToken 参数值。'."\n",
                        'description' => '查询凭证（Token），取值为上一次API调用返回的 NextToken 参数值。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a3f2224a5ec7224116c4f5246120abe4',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分页查询时每页行数。最大值为100。'."\n"
                            ."\n"
                            .'默认值：'."\n"
                            ."\n"
                            .'•当不设置值或设置的值小于20时，默认值为20。'."\n"
                            ."\n"
                            .'•当设置的值大于100时，默认值为100。',
                        'description' => '分页查询时每页行数，默认值为20。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'MachineType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '机型',
                        'description' => '机型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mock-machine-type2',
                    ],
                ],
                [
                    'name' => 'HpnZone',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '集群编号',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'A1',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源组id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxno4vh5muoq',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id'."\n",
                                'description' => '请求id'."\n",
                                'type' => 'string',
                                'example' => 'AA14CB86-70C4-5CB7-9E7B-6CCA77F3512B',
                            ],
                            'Nodes' => [
                                'title' => '节点列表',
                                'description' => '节点列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ZoneId' => [
                                            'title' => '可用区id',
                                            'description' => '可用区id',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-j',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '1652321554',
                                        ],
                                        'NodeId' => [
                                            'title' => '节点id',
                                            'description' => '节点id',
                                            'type' => 'string',
                                            'example' => 'e01-cn-7pp2x193801',
                                        ],
                                        'MachineType' => [
                                            'title' => '机型',
                                            'description' => '机型',
                                            'type' => 'string',
                                            'example' => 'efg1.nvga1',
                                        ],
                                        'Sn' => [
                                            'title' => '机器sn',
                                            'description' => '机器sn',
                                            'type' => 'string',
                                            'example' => 'sn_pozkHBgicd',
                                        ],
                                        'ExpiredTime' => [
                                            'title' => '机器过期时间',
                                            'description' => '机器过期时间',
                                            'type' => 'string',
                                            'example' => '1673107200',
                                        ],
                                        'HpnZone' => [
                                            'description' => '集群编号',
                                            'type' => 'string',
                                            'example' => 'A1',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组id',
                                            'type' => 'string',
                                            'example' => 'rg-aekzkkbrpl4owgy',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'title' => '本次调用返回的查询凭证值。'."\n",
                                'description' => '本次调用返回的查询凭证值。'."\n",
                                'type' => 'string',
                                'example' => 'a3f2224a5ec7224116c4f5246120abe4',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AA14CB86-70C4-5CB7-9E7B-6CCA77F3512B\\",\\n  \\"Nodes\\": [\\n    {\\n      \\"ZoneId\\": \\"cn-hangzhou-j\\",\\n      \\"CreateTime\\": \\"1652321554\\",\\n      \\"NodeId\\": \\"e01-cn-7pp2x193801\\",\\n      \\"MachineType\\": \\"efg1.nvga1\\",\\n      \\"Sn\\": \\"sn_pozkHBgicd\\",\\n      \\"ExpiredTime\\": \\"1673107200\\",\\n      \\"HpnZone\\": \\"A1\\",\\n      \\"ResourceGroupId\\": \\"rg-aekzkkbrpl4owgy\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"a3f2224a5ec7224116c4f5246120abe4\\"\\n}","type":"json"}]',
            'title' => '获取未使用节点列表',
        ],
        'RebootNodes' => [
            'summary' => '重启机器。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '集群id',
                        'description' => '集群id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'i15b480fbd2fcdbc2869cd80',
                    ],
                ],
                [
                    'name' => 'Nodes',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '节点列表',
                        'description' => '节点列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '节点id',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'i138475611663639202234',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IgnoreFailedNodeTasks',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否允许跳过失败节点，默认值为Flase',
                        'description' => '是否允许跳过失败节点，默认值为False',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'False',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '4FD06DF0-9167-5C6F-A145-F30CA4A15D54',
                            ],
                            'TaskId' => [
                                'title' => '任务id',
                                'description' => '任务id',
                                'type' => 'string',
                                'example' => 'i158475611663639202234',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4FD06DF0-9167-5C6F-A145-F30CA4A15D54\\",\\n  \\"TaskId\\": \\"i158475611663639202234\\"\\n}","type":"json"}]',
            'title' => '重启机器',
        ],
        'ReimageNodes' => [
            'summary' => '机器重装。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '集群id'."\n",
                        'description' => '集群id'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'i15dfa12e8f27c44f4a006c2c8bb',
                    ],
                ],
                [
                    'name' => 'Nodes',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '节点列表',
                        'description' => '节点列表',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Hostname' => [
                                    'title' => '主机名',
                                    'description' => '主机名',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '457db5ca-241d-11ed-9fd7-acde48001122',
                                ],
                                'LoginPassword' => [
                                    'title' => '登录密码',
                                    'description' => '登录密码',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '***',
                                ],
                                'NodeId' => [
                                    'title' => '节点id'."\n",
                                    'description' => '节点id'."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'e01-cn-zvp2tgykr0b',
                                ],
                                'ImageId' => [
                                    'title' => '系统镜像id',
                                    'description' => '系统镜像id',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'm-8vbf8rpv2nn14y7oybjy',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IgnoreFailedNodeTasks',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否允许跳过失败节点，默认值为Flase',
                        'description' => '是否允许跳过失败节点，默认值为False',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'False'."\n",
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '用户自定义脚本，命令',
                        'description' => '自定义数据',
                        'type' => 'string',
                        'required' => false,
                        'example' => '#!/bin/sh'."\n"
                            .'echo "Hello World. The time is now $(date -R)!" | tee /root/userdata_test.txt',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '15FBCD9B-C93F-54E8-A168-AADE7E66DAD2',
                            ],
                            'TaskId' => [
                                'title' => '任务id',
                                'description' => '任务id',
                                'type' => 'string',
                                'example' => 'i158782151663841517926',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"15FBCD9B-C93F-54E8-A168-AADE7E66DAD2\\",\\n  \\"TaskId\\": \\"i158782151663841517926\\"\\n}","type":"json"}]',
            'title' => '机器重装',
        ],
        'UntagResources' => [
            'summary' => '删除资源自定义标签。',
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Node' => '节点',
                            'Cluster' => '集群',
                        ],
                        'example' => 'Cluster',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '资源id列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源id',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'i15z93xkon193oaxf1ese8',
                        ],
                        'required' => true,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域Id',
                        'description' => '地域Id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签键列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签键，最多20个子项',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ac-cus-tag-0',
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否全部删除，只针对TagKey.N为空时有效。取值范围：'."\n"
                            ."\n"
                            .'- True，全部删除'."\n"
                            .'- False，不全部删除'."\n"
                            ."\n"
                            .'默认是 False',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'False',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结构体',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '81F648D0-5570-5351-AE98-6F501C7E957F',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred while processing your request',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'The operator is not permission for this operate	',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"81F648D0-5570-5351-AE98-6F501C7E957F\\"\\n}","type":"json"}]',
            'title' => '删除资源标签',
        ],
        'TagResources' => [
            'summary' => '资源打用户标签。',
            'methods' => [
                'post',
                'get',
            ],
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Node' => '节点',
                            'Cluster' => '集群',
                        ],
                        'example' => 'Cluster',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '资源id',
                        'description' => '资源id列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源id',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'i-uf6dlxcxssr4cgpkoo85',
                        ],
                        'required' => true,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域Id',
                        'description' => '地域Id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '标签',
                        'description' => '标签',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'app',
                                ],
                                'Value' => [
                                    'description' => '标签值',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'v3',
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
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'E7BB53E1-0B08-5C4E-BA66-9225548C3151',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred while processing your request',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'The operator is not permission for this operate',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7BB53E1-0B08-5C4E-BA66-9225548C3151\\"\\n}","type":"json"}]',
            'title' => '资源打标签',
        ],
        'ListTagResources' => [
            'summary' => '查询资源标签。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Node' => '节点',
                            'Vcc' => '入云专线',
                            'Cluster' => '集群',
                            'Subnet' => '灵骏子网',
                            'Vpd ' => '灵骏网段 ',
                        ],
                        'example' => 'Node',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '资源id列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源id',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'i1520224L16AY60305',
                        ],
                        'required' => true,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域Id',
                        'description' => '地域Id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
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
                                    'description' => '标签键',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'PodName',
                                ],
                                'Value' => [
                                    'description' => '标签值',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'WFT-OTC',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询凭证（Token），取值为上一次API调用返回的 NextToken 参数值',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAAdQ3Z+oPlg49gsr2y8jb6wY=',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '8F208B6D-4C42-5FD3-B6BE-E826E92A44DD',
                            ],
                            'TagResources' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagResource' => [
                                        'description' => '标签资源。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TagKey' => [
                                                    'description' => '标签键',
                                                    'type' => 'string',
                                                    'example' => 'env',
                                                ],
                                                'TagValue' => [
                                                    'description' => '标签值',
                                                    'type' => 'string',
                                                    'example' => 'dev'."\n",
                                                ],
                                                'ResourceId' => [
                                                    'description' => '资源ID',
                                                    'type' => 'string',
                                                    'example' => 'i15azeddnvf7uhw2oij57o0',
                                                ],
                                                'ResourceType' => [
                                                    'description' => '资源类型',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'Node' => '节点',
                                                        'Cluster' => '集群',
                                                    ],
                                                    'example' => 'Cluster'."\n",
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '下一页的NextToken，请求下一页时带上此返回值',
                                'type' => 'string',
                                'example' => 'AAAAAdQ3Z+oPlg49gsr2y8jb6wY=',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred while processing your request',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NoPermission	',
                        'errorMessage' => 'The operator is not permission for this operate',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8F208B6D-4C42-5FD3-B6BE-E826E92A44DD\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"TagKey\\": \\"env\\",\\n        \\"TagValue\\": \\"dev\\\\n\\",\\n        \\"ResourceId\\": \\"i15azeddnvf7uhw2oij57o0\\",\\n        \\"ResourceType\\": \\"Cluster\\\\n\\"\\n      }\\n    ]\\n  },\\n  \\"NextToken\\": \\"AAAAAdQ3Z+oPlg49gsr2y8jb6wY=\\"\\n}","type":"json"}]',
            'title' => '查询资源标签',
        ],
        'DescribeZones' => [
            'summary' => '可用区列表。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'AcceptLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '根据汉语、英语筛选返回结果。更多信息，请参见RFC7231。取值范围：'."\n"
                            ."\n"
                            .'zh-CN'."\n"
                            .'en-US'."\n"
                            .'默认值：zh-CN',
                        'description' => '根据汉语、英语筛选返回结果。更多信息，请参见RFC7231。取值范围：'."\n"
                            ."\n"
                            .'zh-CN'."\n"
                            .'en-US'."\n"
                            .'默认值：zh-CN',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'en-US' => '英文',
                            'zh-CN' => '中文',
                        ],
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
                                'title' => 'Id of the request',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'E9116F2D-82F8-501E-9ADB-2BE0C02B6A84',
                            ],
                            'Zones' => [
                                'title' => '可用区列表',
                                'description' => '可用区列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'LocalName' => [
                                            'title' => '可用区名称',
                                            'description' => '可用区名称',
                                            'type' => 'string',
                                            'example' => '杭州',
                                        ],
                                        'ZoneId' => [
                                            'title' => '可用区id'."\n",
                                            'description' => '可用区id'."\n",
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-i',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E9116F2D-82F8-501E-9ADB-2BE0C02B6A84\\",\\n  \\"Zones\\": [\\n    {\\n      \\"LocalName\\": \\"杭州\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-i\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询可用区列表',
        ],
        'DescribeTask' => [
            'summary' => '查询任务详情。',
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
                    'name' => 'TaskId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '任务id',
                        'description' => '任务id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i156331731670384438138',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'A7FD7411-9395-52E8-AF42-EB3A4A55446D',
                            ],
                            'ClusterId' => [
                                'title' => '集群id',
                                'description' => '集群id',
                                'type' => 'string',
                                'example' => 'i119982311660892626523',
                            ],
                            'ClusterName' => [
                                'title' => '集群名称',
                                'description' => '集群名称',
                                'type' => 'string',
                                'example' => 'Standard_Cluster',
                            ],
                            'TaskState' => [
                                'title' => '任务状态:waiting_to_run(等待执行)，running(执行)，execution_fail(执行失败)，execution_success（执行成功）',
                                'description' => '任务状态',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'running' => '执行中',
                                    'execution_success' => '执行成功',
                                    'execution_fail' => '执行失败',
                                    'waiting_to_run' => '等待执行',
                                ],
                                'example' => 'running',
                            ],
                            'TaskType' => [
                                'title' => '任务类型',
                                'description' => '任务类型',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'reclone_node_sub_task' => '重装节点子任务',
                                    'initialize_bare_cluster' => '初始化裸集群',
                                    'extend_bare_cluster' => '扩容裸集群',
                                    'reclone_node' => '重装节点',
                                    'reboot_node' => '重启节点',
                                    'extend_ack_edge_cluster' => '扩容ack集群',
                                    'extend_cluster' => '扩容集群',
                                    'initialize_ack_edge_cluster' => '初始化ack集群',
                                    'cut_node_sub_task' => '缩容集群子任务',
                                    'reboot_node_sub_task' => '重启节点子任务',
                                    'reclone_ack_edge_node' => '重装ack节点',
                                    'initialize_cluster' => '初始化标准集群',
                                    'cut_cluster' => '缩容集群',
                                    'reclone_bare_node' => '重装裸集群节点',
                                    'cut_bare_cluster' => '缩容裸集群',
                                ],
                                'example' => 'cut_cluster',
                            ],
                            'Message' => [
                                'title' => '任务失败信息',
                                'description' => '任务失败信息',
                                'type' => 'string',
                                'example' => 'Releasing [prod_main_mid_26e234cf] in region [cn-beijing] with weight [0]',
                            ],
                            'Steps' => [
                                'title' => '执行步骤',
                                'description' => '执行步骤',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'StepName' => [
                                            'title' => '步骤名称',
                                            'description' => '步骤名称',
                                            'type' => 'string',
                                            'example' => 'create_vpd',
                                        ],
                                        'StepState' => [
                                            'title' => '步骤执行状态',
                                            'description' => '步骤执行状态',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'execution_success' => '执行成功',
                                                'execution_failed' => '执行失败',
                                            ],
                                            'example' => 'execution_success',
                                        ],
                                        'StepType' => [
                                            'title' => '步骤类型',
                                            'description' => '步骤类型',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'normal' => '普通类型，有且只有一个后继step',
                                                'dispersive' => '发散类型，有多个后继step',
                                            ],
                                            'example' => 'normal',
                                        ],
                                        'SubTasks' => [
                                            'title' => '子任务',
                                            'description' => '子任务',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'TaskId' => [
                                                        'title' => '任务id',
                                                        'description' => '任务id',
                                                        'type' => 'string',
                                                        'example' => 'i158805051661047928377',
                                                    ],
                                                    'TaskType' => [
                                                        'title' => '任务类型',
                                                        'description' => '任务类型',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'reclone_node_sub_task' => '重装节点子任务',
                                                            'initialize_bare_cluster' => '初始化裸集群',
                                                            'extend_bare_cluster' => '扩容裸集群',
                                                            'reclone_node' => '重装节点',
                                                            'reboot_node' => '重启节点',
                                                            'extend_ack_edge_cluster' => '扩容ack集群',
                                                            'extend_cluster' => '扩容集群',
                                                            'initialize_ack_edge_cluster' => '初始化ack集群',
                                                            'cut_node_sub_task' => '缩容集群子任务',
                                                            'reboot_node_sub_task' => '重启节点子任务',
                                                            'reclone_ack_edge_node' => '重装ack节点',
                                                            'initialize_cluster' => '初始化标准集群',
                                                            'cut_cluster' => '缩容集群',
                                                            'reclone_bare_node' => '重装裸集群节点',
                                                            'cut_bare_cluster' => '缩容裸集群',
                                                        ],
                                                        'example' => 'cut_node_sub_task',
                                                    ],
                                                    'CreateTime' => [
                                                        'title' => '创建时间',
                                                        'description' => '创建时间',
                                                        'type' => 'string',
                                                        'example' => '2022-11-30T2:00:00.852Z',
                                                    ],
                                                    'UpdateTime' => [
                                                        'title' => '更新时间',
                                                        'description' => '更新时间',
                                                        'type' => 'string',
                                                        'example' => '2022-11-30T02:20:14.852Z',
                                                    ],
                                                    'Message' => [
                                                        'title' => '子任务失败信息',
                                                        'description' => '子任务失败信息',
                                                        'type' => 'string',
                                                        'example' => 'Releasing [prod_main_mid_26e234cf] in region [cn-beijing] with weight [0]',
                                                    ],
                                                    'TaskState' => [
                                                        'title' => '任务执行状态',
                                                        'description' => '任务执行状态',
                                                        'type' => 'string',
                                                        'example' => 'running',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'StageTag' => [
                                            'title' => '阶段标记',
                                            'description' => '阶段标记',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                '机器释放' => '机器释放',
                                                '节点并发初始化' => '节点并发初始化',
                                                '节点释放' => '节点释放',
                                                '机器替换' => '机器替换',
                                                '节点缩容' => '节点缩容',
                                                '提前续费' => '提前续费',
                                                '物理机清理' => '物理机清理',
                                                '节点清理' => '节点清理',
                                                '创建K8s集群' => '创建K8s集群',
                                                '网络初始化' => '网络初始化',
                                                '节点重启' => '节点重启',
                                                '节点退订' => '节点退订',
                                                '集群扩容' => '集群扩容',
                                                '异常机器释放' => '异常机器释放',
                                            ],
                                            'example' => '节点缩容',
                                        ],
                                        'Message' => [
                                            'title' => '步骤失败信息',
                                            'description' => '步骤失败信息',
                                            'type' => 'string',
                                            'example' => 'get taskinfo failed',
                                        ],
                                        'StartTime' => [
                                            'title' => '开始时间',
                                            'description' => '开始时间',
                                            'type' => 'string',
                                            'example' => '2022-11-30T2:00:00.852Z',
                                        ],
                                        'UpdateTime' => [
                                            'title' => '更新时间',
                                            'description' => '更新时间',
                                            'type' => 'string',
                                            'example' => '2022-11-30T02:20:14.852Z',
                                        ],
                                    ],
                                ],
                            ],
                            'CreateTime' => [
                                'title' => '开始时间',
                                'description' => '开始时间',
                                'type' => 'string',
                                'example' => '2022-11-30T02:00:00.852Z',
                            ],
                            'UpdateTime' => [
                                'title' => '更新时间',
                                'description' => '更新时间',
                                'type' => 'string',
                                'example' => '2022-11-30T03:40:14.852Z',
                            ],
                            'NodeIds' => [
                                'title' => '节点ID列表',
                                'description' => '节点ID列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '节点ID列表',
                                    'type' => 'string',
                                    'example' => '[\'mock-sn-200101\']',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A7FD7411-9395-52E8-AF42-EB3A4A55446D\\",\\n  \\"ClusterId\\": \\"i119982311660892626523\\",\\n  \\"ClusterName\\": \\"Standard_Cluster\\",\\n  \\"TaskState\\": \\"running\\",\\n  \\"TaskType\\": \\"cut_cluster\\",\\n  \\"Message\\": \\"Releasing [prod_main_mid_26e234cf] in region [cn-beijing] with weight [0]\\",\\n  \\"Steps\\": [\\n    {\\n      \\"StepName\\": \\"create_vpd\\",\\n      \\"StepState\\": \\"execution_success\\",\\n      \\"StepType\\": \\"normal\\",\\n      \\"SubTasks\\": [\\n        {\\n          \\"TaskId\\": \\"i158805051661047928377\\",\\n          \\"TaskType\\": \\"cut_node_sub_task\\",\\n          \\"CreateTime\\": \\"2022-11-30T2:00:00.852Z\\",\\n          \\"UpdateTime\\": \\"2022-11-30T02:20:14.852Z\\",\\n          \\"Message\\": \\"Releasing [prod_main_mid_26e234cf] in region [cn-beijing] with weight [0]\\",\\n          \\"TaskState\\": \\"running\\"\\n        }\\n      ],\\n      \\"StageTag\\": \\"节点缩容\\",\\n      \\"Message\\": \\"get taskinfo failed\\",\\n      \\"StartTime\\": \\"2022-11-30T2:00:00.852Z\\",\\n      \\"UpdateTime\\": \\"2022-11-30T02:20:14.852Z\\"\\n    }\\n  ],\\n  \\"CreateTime\\": \\"2022-11-30T02:00:00.852Z\\",\\n  \\"UpdateTime\\": \\"2022-11-30T03:40:14.852Z\\",\\n  \\"NodeIds\\": [\\n    \\"[\'mock-sn-200101\']\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询任务信息',
        ],
        'DescribeRegions' => [
            'summary' => '查询地域信息列表。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'AcceptLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '根据汉语、英语和日语筛选返回结果。更多信息，请参见RFC7231。取值范围：'."\n"
                            ."\n"
                            .'zh-CN'."\n"
                            .'en-US'."\n"
                            .'默认值：zh-CN',
                        'description' => '根据汉语、英语和日语筛选返回结果。更多信息，请参见RFC7231。取值范围：'."\n"
                            ."\n"
                            .'zh-CN'."\n"
                            .'en-US'."\n"
                            .'默认值：zh-CN',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'en-US' => '英文',
                            'zh-CN' => '中文',
                        ],
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
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '1D2FBB36-C39B-5EBB-9928-FCC1A236D65D',
                            ],
                            'Regions' => [
                                'description' => '地域信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'LocalName' => [
                                            'title' => '区域名称',
                                            'description' => '区域名称',
                                            'type' => 'string',
                                            'example' => '杭州',
                                        ],
                                        'RegionId' => [
                                            'title' => '区域id',
                                            'description' => '区域id',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1D2FBB36-C39B-5EBB-9928-FCC1A236D65D\\",\\n  \\"Regions\\": [\\n    {\\n      \\"LocalName\\": \\"杭州\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询地域列表',
        ],
        'ChangeResourceGroup' => [
            'summary' => '资源转组。',
            'methods' => [
                'post',
                'get',
            ],
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
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '资源Id',
                        'description' => '资源Id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'i118099391667548921125',
                    ],
                ],
                [
                    'name' => 'ResourceRegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域Id',
                        'description' => '地域Id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-wulanchabu',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '目标资源组',
                        'description' => '目标资源组',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rg-aekzyqdwnfabx6q',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '8F065DDD-6996-5973-9691-9EC57BD0072E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission.ChangeResourceGroup',
                        'errorMessage' => 'You are not authorized to change resourcegroup',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceRegionId',
                        'errorMessage' => 'The ResourceRegionId parameters that are required for processing this request are missing',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceId',
                        'errorMessage' => 'The ResourceId parameters that are required for processing this request are missing',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceGroupId',
                        'errorMessage' => 'The ResourceGroupId parameters that are required for processing this request are missing',
                    ],
                    [
                        'errorCode' => 'InvalidResourceGroup',
                        'errorMessage' => 'The specified ResourceGroupId is invalid',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred while processing your request',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => ' The specified resource is not found',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8F065DDD-6996-5973-9691-9EC57BD0072E\\"\\n}","type":"json"}]',
            'title' => '资源转组',
        ],
        'ApproveOperation' => [
            'summary' => '审批运维操作。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'NodeId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '节点id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e01-cn-zvp2tgykr08',
                    ],
                ],
                [
                    'name' => 'OperationType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '运维类型',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'RepairMachine' => 'RepairMachine',
                        ],
                        'example' => 'RepairMachine',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '8F065DDD-6996-5973-9691-9EC57BD0072E',
                            ],
                            'ErrorMessage' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'Resource not found',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8F065DDD-6996-5973-9691-9EC57BD0072E\\",\\n  \\"ErrorMessage\\": \\"Resource not found\\"\\n}","type":"json"}]',
            'title' => '审批运维操作',
        ],
        'StopInvocation' => [
            'summary' => '停止运维助手命令进程。',
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
                    'name' => 'InvokeId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命令执行ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'f-hz044748dzepds0',
                    ],
                ],
                [
                    'name' => 'NodeIdList',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '节点列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '灵骏节点ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '\'i-bp1cfrqj4pztngvlq7la\'',
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
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'A7FD7411-9395-52E8-AF42-EB3A4A55446D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A7FD7411-9395-52E8-AF42-EB3A4A55446D\\"\\n}","type":"json"}]',
            'title' => '停止运维命令',
        ],
        'RunCommand' => [
            'summary' => '一台或多台灵骏机器中执行一段Shell的脚本。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命令名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testName',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命令描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testDescription',
                    ],
                ],
                [
                    'name' => 'CommandContent',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命令内容。您需要注意：'."\n"
                            ."\n"
                            .'- 指定参数`EnableParameter=true`可在命令内容中启用自定义参数功能：'."\n"
                            .'- 用{{}}包含的方式定义自定义参数，在`{{}}`内参数名前后的空格以及换行符会被忽略。'."\n"
                            .'- 自定义参数个数不能超过20个。'."\n"
                            .'- 自定义参数名允许a-zA-Z0-9-_的组合，不支持其余字符，参数名不区分大小写。'."\n"
                            .'- 单个自定义参数名不能超过64字节。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ZWNobyAxMjM=',
                    ],
                ],
                [
                    'name' => 'Timeout',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '执行命令的超时时间，单位：秒。当因为进程原因、缺失模块、缺失云助手Agent等原因无法运行命令时，会出现超时现象。超时后，会强制终止命令进程。默认值：60。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3600'."\n",
                    ],
                ],
                [
                    'name' => 'WorkingDir',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '您可自定义命令的执行路径。默认路径如下：'."\n"
                            ."\n"
                            .'- Linux实例：执行路径默认在管理员root用户的/home目录下。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/home/user',
                    ],
                ],
                [
                    'name' => 'EnableParameter',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命令中是否包含自定义参数。'."\n"
                            ."\n"
                            .'默认值：false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ContentEncoding',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '脚本内容的编码方式。取值范围：'."\n"
                            ."\n"
                            .'- PlainText：不编码，采用明文传输。'."\n"
                            .'- Base64：Base64编码。'."\n"
                            ."\n"
                            .'默认值：PlainText。乱填或错填时，该取值会当作PlainText处理。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Base64',
                    ],
                ],
                [
                    'name' => 'Username',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '在实例中执行命令的用户名称。长度不得超过255个字符。'."\n"
                            .'    Linux系统的实例，默认以root用户执行命令',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'root',
                    ],
                ],
                [
                    'name' => 'NodeIdList',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '节点列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '节点id。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '"i-bp185dy2o3o6neg****"',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RepeatMode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设置命令执行的方式。取值范围：'."\n"
                            ."\n"
                            .'- Once：立即执行命令。'."\n"
                            .'- Period：定时执行命令。当该参数取值为`Period`时，必须同时指定`Frequency`参数。'."\n"
                            .'- NextRebootOnly：当实例下一次启动时，自动执行命令。'."\n"
                            .'- EveryReboot：实例每一次启动都将自动执行命令。'."\n"
                            ."\n"
                            .'默认值：'."\n"
                            .'- 当不指定`Frequency`参数时，默认值为`Once`。'."\n"
                            .'- 当指定`Frequency`参数时，无论是否已设置了该参数值，都将按照`Period`处理。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Once',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见如何保证幂等性。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'Frequency',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '定时执行命令的执行时间。目前支持三种定时执行方式：固定时间间隔执行（基于Rate表达式）、仅在指定时间执行一次、基于时钟定时执行（基于Cron表达式）。'."\n"
                            ."\n"
                            .'固定时间间隔执行：基于Rate表达式，按照设置的时间间隔执行命令。时间间隔支持按秒（s） 、分钟（m） 、小时（h）和天（d）来选择，适用于在固定时间间隔执行任务的场景。格式为rate(<执行间隔数值><执行间隔单位>)，如5分钟执行一次，格式为rate(5m)。使用固定时间间隔执行有以下限制：'."\n"
                            .'设置的时间间隔不大于7天、不小于60秒，且需大于定时任务的超时时间。'."\n"
                            .'执行间隔只基于固定频率，与任务实际执行需要的时间无关。例如设置每5分钟执行一次命令，任务需要2分钟执行完成，则在任务完成3分钟后继续执行下一轮。'."\n"
                            .'创建任务时不会立即执行。例如设置每5分钟执行一次命令，创建任务时不会立即执行一次命令，而是在任务创建完成后的5分钟后开始执行。'."\n"
                            .'仅在指定时间执行一次：按照设置的时区和执行时间点执行一次命令。格式为at(yyyy-MM-dd HH:mm:ss <时区>)，即at(年-月-日 时:分:秒 <时区>)。如果不指定时区，默认为UTC时区。时区支持以下三种形式：'."\n"
                            .'时区全称： 如Asia/Shanghai（中国/上海时间）、America/Los_Angeles（美国/洛杉矶时间）等。'."\n"
                            .'时区相对于格林威治时间的偏移量： 如GMT+8:00（东八区）、GMT-7:00（西七区）等。使用GMT格式时，小时位不支持添加前导零。'."\n"
                            .'时区缩写： 仅支持UTC（协调世界时间）。'."\n"
                            ."\n"
                            .'如果指定在中国/上海时间2022年06月06日13时15分30秒执行一次，格式为：at(2022-06-06 13:15:30 Asia/Shanghai)；如果指定在西七区2022年06月06日13时15分30秒执行一次，格式为：at(2022-06-06 13:15:30 GMT-7:00)。'."\n"
                            ."\n"
                            .'基于时钟定时执行（基于Cron表达式）：基于Cron表达式，按照设置的定时任务执行命令。格式为<秒> <分钟> <小时> <日期> <月份> <星期> <年份（可选）> <时区>，即<Cron表达式> <时区>。在指定的时区下，根据Cron表达式推算定时任务执行时间并执行。若不指定时区，默认为执行定时任务实例的系统内部时区。关于Cron表达式的更多信息，请参见Cron表达式。时区支持以下三种形式：'."\n"
                            .'时区全称： 如Asia/Shanghai（中国/上海时间）、America/Los_Angeles（美国/洛杉矶时间）等。'."\n"
                            .'时区相对于格林威治时间的偏移量： 如GMT+8:00（东八区）、GMT-7:00（西七区）等。使用GMT格式时，小时位不支持添加前导零。'."\n"
                            .'时区缩写： 仅支持UTC（协调世界时间）。'."\n"
                            ."\n"
                            .'例如，在中国/上海时间，2022年每天上午10:15执行一次命令，格式为0 15 10 ? * * 2022 Asia/Shanghai；在东八区时间，2022年每天上午10:00到11:30每隔半小时执行，格式为0 0/30 10-11 * * ? 2022 GMT+8:00；在UTC时间，从2022年开始，每隔两年的10月每天下午14:00到下午14:55时间段内每隔5分钟执行，格式为0 0/5 14 * 10 ? 2022/2 UTC。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0 */20 * * * ?',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '命令中包含自定义参数时，执行命令时传入的自定义参数的键值对。例如，命令内容为`echo {{name}}`，则可以通过`Parameter`参数传入键值对`{"name":"Jack"}`。自定义参数将自动替换变量值`name`，得到一条新的命令，实际执行的是`echo Jack`。'."\n"
                            ."\n"
                            .'自定义参数的个数范围为0~10，且您需要注意：'."\n"
                            ."\n"
                            .'- 键不允许为空字符串，最多支持64个字符。'."\n"
                            .'- 值允许为空字符串。'."\n"
                            .'- 自定义参数与原始命令内容在Base64编码后，若保存命令，命令内容在Base64编码后的大小不能超过18 KB；若不保存命令，命令内容在Base64编码后的大小不能超过24 KB。您可通过`KeepCommand`设置是否保留命令。'."\n"
                            .'- 设置的自定义参数名集合必须为创建命令时定义的参数集的子集。对于未传入的参数，您可以使用空字符串代替。'."\n"
                            ."\n"
                            .'默认值为空，表示取消设置该参数从而禁用自定义参数。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"name":"Jack", "accessKey":"LTAIdyvdIqaRY****"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '2FE2B22C-CF9D-59DE-BF63-DC9B9B33A9D1',
                            ],
                            'InvokeId' => [
                                'description' => '命令执行ID。',
                                'type' => 'string',
                                'example' => 't-7d2a745b412b4601b2d47f6a768d*',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2FE2B22C-CF9D-59DE-BF63-DC9B9B33A9D1\\",\\n  \\"InvokeId\\": \\"t-7d2a745b412b4601b2d47f6a768d*\\"\\n}","type":"json"}]',
            'title' => '一台或多台灵骏机器中执行一段Shell的脚本',
        ],
        'DescribeInvocations' => [
            'summary' => '查询运维助手命令的执行列表和状态。',
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
                    'name' => 'InvokeId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '命令执行ID',
                        'description' => '命令执行ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 't-cd03crwys0lrls0',
                    ],
                ],
                [
                    'name' => 'NodeId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e01-cn-zvp2tgykr08',
                    ],
                ],
                [
                    'name' => 'IncludeOutput',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否在结果中返回命令运行的输出信息。'."\n"
                            ."\n"
                            .'- true：返回。此时，您至少指定参数`InvokeId`或`InstanceId`。'."\n"
                            .'- false：不返回。'."\n"
                            ."\n"
                            .'默认值：false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ContentEncoding',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设置返回数据中`CommandContent`字段和`Output`字段的编码方式。取值范围：'."\n"
                            ."\n"
                            .'- PlainText：返回原始命令内容和输出信息。'."\n"
                            .'- Base64：返回Base64编码后的命令内容和输出信息。'."\n"
                            ."\n"
                            .'默认值：Base64。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PlainText',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '4FD06DF0-9167-5C6F-A145-F30CA4A15D54',
                            ],
                            'Invocations' => [
                                'description' => '脚本执行记录对象。',
                                'type' => 'object',
                                'properties' => [
                                    'Invocation' => [
                                        'description' => '文件下发记录。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'CreationTime' => [
                                                    'description' => '任务的创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2020-01-19T09:15:46Z',
                                                ],
                                                'Frequency' => [
                                                    'description' => '定时执行命令的执行时间。',
                                                    'type' => 'string',
                                                    'example' => '0 */20 * * * *',
                                                ],
                                                'InvocationStatus' => [
                                                    'description' => '命令执行的总执行状态，总执行状态取决于本次调用的全部实例的共同执行状态，可能值：'."\n"
                                                        .'- Pending：系统正在校验或发送命令。存在至少一台实例的命令执行状态为Pending，则总执行状态为Pending。'."\n"
                                                        .'- Scheduled：定时执行的命令已发送，等待运行。存在至少一台实例的命令执行状态为Scheduled，则总执行状态为Scheduled。'."\n"
                                                        .'- Running：命令正在实例上运行。存在至少一台实例的命令执行状态为Running，则总执行状态为Running。'."\n"
                                                        .'- Success：各个实例上的命令执行状态均为Stopped或Success，且至少一个实例的命令执行状态是Success，则总执行状态为Success。'."\n"
                                                        .'    - 立即运行的任务：命令执行完成，且退出码为0。'."\n"
                                                        .'    - 定时运行的任务：最近一次执行成功且退出码为0，且指定的时间已全部完成。'."\n"
                                                        .'- Failed：各个实例上的命令执行状态均为Stopped或Failed，则总执行状态为Failed。实例上的命令执行状态一项或多项为以下状态时，返回值均为Failed状态：'."\n"
                                                        .'    - 命令校验失败（Invalid）。'."\n"
                                                        .'    - 命令发送失败（Aborted）。'."\n"
                                                        .'    - 命令执行完成但退出码非0（Failed）。'."\n"
                                                        .'    - 命令执行超时（Timeout）。'."\n"
                                                        .'    - 命令执行异常（Error）。'."\n"
                                                        .'- Stopping：正在停止任务。存在至少一台实例的命令执行状态为Stopping，则总执行状态为Stopping。'."\n"
                                                        .'- Stopped：任务已停止。所有实例的命令执行状态是Stopped，则总执行状态为Stopped。实例上的命令执行状态为以下状态时，返回值均为Stopped状态：'."\n"
                                                        .'    - 任务已取消（Cancelled）。'."\n"
                                                        .'    - 任务已终止（Terminated）。'."\n"
                                                        .'- PartialFailed：部分实例执行成功且部分实例执行失败。各个实例的命令执行状态均为Success、Failed或Stopped，则总执行状态为PartialFailed。'."\n"
                                                        ."\n"
                                                        .'> 返回参数中的`InvokeStatus`与该参数意义相似，但建议您查看该返回值。'."\n",
                                                    'type' => 'string',
                                                    'example' => 'Success',
                                                ],
                                                'RepeatMode' => [
                                                    'description' => '命令执行的方式。可能值：'."\n"
                                                        ."\n"
                                                        .'Once：立即执行命令。'."\n"
                                                        .'Period：定时执行命令。'."\n"
                                                        .'NextRebootOnly：当实例下一次启动时，自动执行命令。'."\n"
                                                        .'EveryReboot：实例每一次启动都将自动执行命令。',
                                                    'type' => 'string',
                                                    'example' => 'Once',
                                                ],
                                                'InvokeStatus' => [
                                                    'description' => '命令执行的总执行状态。总执行状态取决于创建执行中的一台或多台实例的共同执行状态。取值范围： '."\n"
                                                        .'         '."\n"
                                                        .'- Running：'."\n"
                                                        .'    - 定时执行：未手动停止定时执行命令前，执行状态一直为进行中。'."\n"
                                                        .'    - 单次执行：一旦有进行中的命令进程，总的执行状态就为进行中。'."\n"
                                                        .'- Finished：'."\n"
                                                        .'    - 定时执行：命令进程不可能为执行完成。'."\n"
                                                        .'    - 单次执行：所有实例全部完成执行。或者手动停止部分实例的命令进程，其余实例全部执行完成。'."\n"
                                                        .'- Failed：'."\n"
                                                        .'    - 定时执行：命令进程不可能为执行失败。'."\n"
                                                        .'    - 单次执行：所有实例全部执行失败。'."\n"
                                                        .'- Stopped：停止命令。'."\n"
                                                        .'- Stopping：停止中。'."\n"
                                                        .'- PartialFailed：部分失败；如果同时设置了`InstanceId`参数，则不生效。',
                                                    'type' => 'string',
                                                    'example' => 'Running',
                                                ],
                                                'Parameters' => [
                                                    'description' => '命令中的自定义参数。',
                                                    'type' => 'string',
                                                    'example' => '{}',
                                                ],
                                                'CommandContent' => [
                                                    'description' => '命令内容。'."\n"
                                                        ."\n"
                                                        .'- 若ContentEncoding指定PlainText，返回原始脚本内容。'."\n"
                                                        .'- 若ContentEncoding指定Base64，返回Base64编码后的脚本内容。',
                                                    'type' => 'string',
                                                    'example' => 'cnBtIC1xYSB8IGdyZXAgdnNm****',
                                                ],
                                                'CommandName' => [
                                                    'description' => '命令名称。',
                                                    'type' => 'string',
                                                    'example' => 'CommandTestName',
                                                ],
                                                'CommandDescription' => [
                                                    'description' => '命令描述。',
                                                    'type' => 'string',
                                                    'example' => 'testDescription',
                                                ],
                                                'InvokeId' => [
                                                    'description' => '命令执行ID。',
                                                    'type' => 'string',
                                                    'example' => 't-ind3k9ytvvduoe8',
                                                ],
                                                'Username' => [
                                                    'description' => '执行命令的用户名称。',
                                                    'type' => 'string',
                                                    'example' => 'root',
                                                ],
                                                'WorkingDir' => [
                                                    'description' => '命令在实例中的运行目录。',
                                                    'type' => 'string',
                                                    'example' => '/home',
                                                ],
                                                'Timeout' => [
                                                    'description' => '执行命令的超时时间，单位：秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '60',
                                                ],
                                                'InvokeNodes' => [
                                                    'description' => '命令执行记录',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'InvokeNode' => [
                                                            'description' => '节点命令执行记录',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'CreationTime' => [
                                                                        'description' => '命令执行的开始时间。',
                                                                        'type' => 'string',
                                                                        'example' => '2023-02-06T07:12:50Z',
                                                                    ],
                                                                    'UpdateTime' => [
                                                                        'description' => '更新时间',
                                                                        'type' => 'string',
                                                                        'example' => '2023-02-06T07:12:50Z',
                                                                    ],
                                                                    'FinishTime' => [
                                                                        'description' => '结束完成时间。',
                                                                        'type' => 'string',
                                                                        'example' => '2023-02-06T07:12:50Z',
                                                                    ],
                                                                    'InvocationStatus' => [
                                                                        'description' => '单台实例的命令进度状态，可能值：'."\n"
                                                                            .'-  Pending：系统正在校验或发送命令。'."\n"
                                                                            .'-  Invalid：指定命令类型或参数有误。'."\n"
                                                                            .'-  Aborted：向实例发送命令失败。实例必须在运行中，且命令可以1分钟内发送完成。'."\n"
                                                                            .'-  Running：命令正在实例上运行。'."\n"
                                                                            .'-  Success：'."\n"
                                                                            .'    -  单次执行的命令：命令执行完成，且退出码为0。'."\n"
                                                                            .'    -  周期执行的命令：上一次运行成功且退出码为0，且指定的周期已结束。'."\n"
                                                                            .'-  Failed：'."\n"
                                                                            .'    -  单次执行的命令：命令执行完成，且退出码非0。'."\n"
                                                                            .'    -  周期执行的命令：上一次运行成功且退出码非0，且指定的周期将中止。'."\n"
                                                                            .'-  Error：命令执行时发生异常无法继续。'."\n"
                                                                            .'-  Timeout：命令执行超时。'."\n"
                                                                            .'-  Cancelled：命令的执行动作已经取消，命令未曾启动。'."\n"
                                                                            .'-  Stopping：正在停止任务。'."\n"
                                                                            .'-  Terminated：命令运行时被终止。'."\n"
                                                                            .'-  Scheduled：'."\n"
                                                                            .'    -  单次执行的命令：不适用，不会出现。'."\n"
                                                                            .'    -  周期执行的命令：等待运行。',
                                                                        'type' => 'string',
                                                                        'example' => 'Pending',
                                                                    ],
                                                                    'Repeats' => [
                                                                        'description' => '命令在该实例上执行的次数。'."\n"
                                                                            .'-  若执行方式为单次执行，则值为0或1。'."\n"
                                                                            .'-  若执行方式为定时执行，则值为执行过多少次。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '0',
                                                                    ],
                                                                    'NodeId' => [
                                                                        'description' => '节点id',
                                                                        'type' => 'string',
                                                                        'example' => 'e01-cn-lbj36wkp70b',
                                                                    ],
                                                                    'Output' => [
                                                                        'description' => '命令的输出信息。'."\n"
                                                                            ."\n"
                                                                            .'若ContentEncoding指定PlainText，返回原始输出信息。'."\n"
                                                                            .'若ContentEncoding指定Base64，返回Base64编码后的输出信息。',
                                                                        'type' => 'string',
                                                                        'example' => 'OutPutTestmsg',
                                                                    ],
                                                                    'Dropped' => [
                                                                        'description' => 'Output字段中文字长度超出24 KB后，截断丢弃的文字长度。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '0',
                                                                    ],
                                                                    'StopTime' => [
                                                                        'description' => '若调用了StopInvocation以停止命令执行，表示调用的时间。',
                                                                        'type' => 'string',
                                                                        'example' => '2019-12-20T06:15:55Z	'."\n",
                                                                    ],
                                                                    'ExitCode' => [
                                                                        'description' => '命令进程的退出代码。可能值：'."\n"
                                                                            ."\n"
                                                                            .'Linux实例为Shell进程的退出码。'."\n"
                                                                            .'Windows实例为Bat或者PowerShell进程的退出码。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '0',
                                                                    ],
                                                                    'StartTime' => [
                                                                        'description' => '开始时间',
                                                                        'type' => 'string',
                                                                        'example' => '2019-12-20T06:15:55Z',
                                                                    ],
                                                                    'ErrorInfo' => [
                                                                        'description' => '命令的下发失败或执行失败原因的详情，可能值：'."\n"
                                                                            .'- 空：命令执行正常。'."\n"
                                                                            .'- the specified node does not exists：指定的实例不存在或已释放。'."\n"
                                                                            .'- the node has node when create task：执行命令期间，该实例被释放。'."\n"
                                                                            .'- the node is not running when create task：命令执行时，该实例不在运行中。'."\n"
                                                                            .'- the command is not applicable：命令不适用于指定的实例。'."\n"
                                                                            .'- the specified account does not exists：指定的账号不存在。'."\n"
                                                                            .'- the specified directory does not exists：指定的目录不存在。'."\n"
                                                                            .'- the cron job expression is invalid：指定的执行时间表达式不合法。'."\n"
                                                                            .'- the aliyun service is not running on the instance：云助手Agent未运行。'."\n"
                                                                            .'- the aliyun service in the instance does not response：云助手Agent无响应。'."\n"
                                                                            .'- the aliyun service in the node is upgrading now：云助手Agent正在升级中。'."\n"
                                                                            .'- the aliyun service in the node need upgrade：云助手Agent需要升级。'."\n"
                                                                            .'- the command delivery has been timeout：发送命令超时。'."\n"
                                                                            .'- the command execution has been timeout：命令执行超时。'."\n"
                                                                            .'- the command execution got an exception：命令执行发生异常。'."\n"
                                                                            .'- the command execution has been interrupted：命令执行被中断。'."\n"
                                                                            .'- the command execution exit code is not zero：命令执行结束，退出码非0。'."\n"
                                                                            .'- the specified node has been released：下发文件期间，该实例被释放。',
                                                                        'type' => 'string',
                                                                        'example' => 'the specified node does not exists',
                                                                    ],
                                                                    'Timed' => [
                                                                        'description' => '查询的命令是否在将来会自动执行。取值范围：'."\n"
                                                                            ."\n"
                                                                            .'- true：查询在调用`RunCommand`或`InvokeCommand`执行命令时，`RepeatMode`参数取值为`Period`、`NextRebootOnly`或者`EveryReboot`。'."\n"
                                                                            .'- false：查询以下两种状态的命令。'."\n"
                                                                            .'    - 在调用`RunCommand`或`InvokeCommand`执行命令时，`RepeatMode`参数取值为`Once`。'."\n"
                                                                            .'    - 已被取消、被停止或者已完成执行的命令。'."\n"
                                                                            ."\n"
                                                                            .'默认值：false。',
                                                                        'type' => 'string',
                                                                        'example' => 'false',
                                                                    ],
                                                                    'ErrorCode' => [
                                                                        'description' => '文件下发的失败原因代码。可能值：'."\n"
                                                                            ."\n"
                                                                            .'空：文件下发正常。'."\n"
                                                                            .'NodeNotExists：指定的实例不存在或已释放。'."\n"
                                                                            .'NodeReleased：下发文件期间，该实例被释放。'."\n"
                                                                            .'NodeNotRunning：创建下发文件任务时，该实例不在运行中。'."\n"
                                                                            .'AccountNotExists：指定的账号不存在。'."\n"
                                                                            .'ClientNotRunning：云助手Agent未运行。'."\n"
                                                                            .'ClientNotResponse：云助手Agent无响应。'."\n"
                                                                            .'ClientIsUpgrading：云助手Agent正在升级中。'."\n"
                                                                            .'ClientNeedUpgrade：云助手Agent需要升级。'."\n"
                                                                            .'DeliveryTimeout：发送文件超时。'."\n"
                                                                            .'FileCreateFail：文件创建失败。'."\n"
                                                                            .'FileAlreadyExists：相同路径下存在同名文件。'."\n"
                                                                            .'FileContentInvalid：文件内容不合法。'."\n"
                                                                            .'FileNameInvalid：文件名不合法。'."\n"
                                                                            .'FilePathInvalid：文件路径不合法。'."\n"
                                                                            .'FileAuthorityInvalid：文件权限不合法。'."\n"
                                                                            .'UserGroupNotExists：发送文件时指定的用户组不存在。',
                                                                        'type' => 'boolean',
                                                                        'example' => ' NodeNotExists：',
                                                                    ],
                                                                    'NodeInvokeStatus' => [
                                                                        'description' => '单台实例的命令进度状态。',
                                                                        'type' => 'string',
                                                                        'example' => 'Finished',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4FD06DF0-9167-5C6F-A145-F30CA4A15D54\\",\\n  \\"Invocations\\": {\\n    \\"Invocation\\": [\\n      {\\n        \\"CreationTime\\": \\"2020-01-19T09:15:46Z\\",\\n        \\"Frequency\\": \\"0 */20 * * * *\\",\\n        \\"InvocationStatus\\": \\"Success\\",\\n        \\"RepeatMode\\": \\"Once\\",\\n        \\"InvokeStatus\\": \\"Running\\",\\n        \\"Parameters\\": \\"{}\\",\\n        \\"CommandContent\\": \\"cnBtIC1xYSB8IGdyZXAgdnNm****\\",\\n        \\"CommandName\\": \\"CommandTestName\\",\\n        \\"CommandDescription\\": \\"testDescription\\",\\n        \\"InvokeId\\": \\"t-ind3k9ytvvduoe8\\",\\n        \\"Username\\": \\"root\\",\\n        \\"WorkingDir\\": \\"/home\\",\\n        \\"Timeout\\": 60,\\n        \\"InvokeNodes\\": {\\n          \\"InvokeNode\\": [\\n            {\\n              \\"CreationTime\\": \\"2023-02-06T07:12:50Z\\",\\n              \\"UpdateTime\\": \\"2023-02-06T07:12:50Z\\",\\n              \\"FinishTime\\": \\"2023-02-06T07:12:50Z\\",\\n              \\"InvocationStatus\\": \\"Pending\\",\\n              \\"Repeats\\": 0,\\n              \\"NodeId\\": \\"e01-cn-lbj36wkp70b\\",\\n              \\"Output\\": \\"OutPutTestmsg\\",\\n              \\"Dropped\\": 0,\\n              \\"StopTime\\": \\"2019-12-20T06:15:55Z\\\\t\\\\n\\",\\n              \\"ExitCode\\": 0,\\n              \\"StartTime\\": \\"2019-12-20T06:15:55Z\\",\\n              \\"ErrorInfo\\": \\"the specified node does not exists\\",\\n              \\"Timed\\": \\"false\\",\\n              \\"ErrorCode\\": true,\\n              \\"NodeInvokeStatus\\": \\"Finished\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询命令的执行列表和状态',
        ],
        'DescribeSendFileResults' => [
            'summary' => '查询运维助手下发文件列表及状态。',
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
                    'name' => 'InvokeId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命令执行ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 't-bj038i0d6r8zoqo',
                    ],
                ],
                [
                    'name' => 'NodeId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '节点ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e01-cn-zvp2tgykr08',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '4FD06DF0-9167-5C6F-A145-F30CA4A15D54',
                            ],
                            'TotalCount' => [
                                'description' => '命令总个数。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'Invocations' => [
                                'description' => '文件下发记录。',
                                'type' => 'object',
                                'properties' => [
                                    'Invocation' => [
                                        'description' => '命令执行ID。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'FileMode' => [
                                                    'description' => '文件的权限。',
                                                    'type' => 'string',
                                                    'example' => '0644',
                                                ],
                                                'Overwrite' => [
                                                    'description' => '如果同名文件在目标目录已存在，是否覆盖文件。'."\n"
                                                        .'- true：覆盖。'."\n"
                                                        .'- false：不覆盖。'."\n"
                                                        ."\n"
                                                        .'默认值为false。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'InvocationStatus' => [
                                                    'description' => '文件的总下发状态。总状态取决于本次下发的全部实例的共同执行状态，可能值：'."\n"
                                                        ."\n"
                                                        .'- Pending：系统正在校验或下发文件。存在至少一台实例的文件下发状态为Pending，则总执行状态为Pending。'."\n"
                                                        .'- Running：正在实例上下发文件。存在至少一台实例的文件下发状态为Running，则总执行状态为Running。'."\n"
                                                        .'- Success：各个实例上的文件下发状态均为Success，则总执行状态为Success。'."\n"
                                                        .'- Failed：各个实例上的文件下发状态均为Failed，则总执行状态为Failed。实例上的文件下发状态一项或多项为以下状态时，返回值均为Failed状态：'."\n"
                                                        .'    - 指定文件参数有误，校验失败（Invalid）。'."\n"
                                                        .'    - 向实例下发文件失败（Aborted）。'."\n"
                                                        .'    - 文件在实例内创建失败（Failed）。'."\n"
                                                        .'    - 下发文件超时（Timeout）。'."\n"
                                                        .'    - 下发文件时发生异常无法继续（Error）。'."\n"
                                                        .'- PartialFailed：部分实例文件下发成功且部分实例下发失败。各个实例的文件下发状态均为Success或Failed，则总执行状态为PartialFailed。',
                                                    'type' => 'string',
                                                    'example' => 'Pending',
                                                ],
                                                'Description' => [
                                                    'description' => '命令描述。',
                                                    'type' => 'string',
                                                    'example' => '描述信息。',
                                                ],
                                                'ContentType' => [
                                                    'description' => '文件内容类型。'."\n"
                                                        ."\n"
                                                        .'PlainText：普通文本。'."\n"
                                                        .'Base64：Base64编码。'."\n"
                                                        .'默认值为PlainText。',
                                                    'type' => 'string',
                                                    'example' => 'PlainText',
                                                ],
                                                'NodeCount' => [
                                                    'description' => '节点数量',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '3',
                                                ],
                                                'TargetDir' => [
                                                    'description' => '目标路径。',
                                                    'type' => 'string',
                                                    'example' => '	/home/user',
                                                ],
                                                'FileGroup' => [
                                                    'description' => '文件的用户组。',
                                                    'type' => 'string',
                                                    'example' => 'root',
                                                ],
                                                'FileOwner' => [
                                                    'description' => '文件的用户。',
                                                    'type' => 'string',
                                                    'example' => 'root',
                                                ],
                                                'Name' => [
                                                    'description' => '文件下发名称',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'Content' => [
                                                    'description' => '命令执行后的输出信息。'."\n"
                                                        ."\n"
                                                        .'若ContentEncoding指定PlainText，返回原始输出信息。'."\n"
                                                        .'若ContentEncoding指定Base64，返回Base64编码后的输出信息。',
                                                    'type' => 'string',
                                                    'example' => 'Base64',
                                                ],
                                                'CreationTime' => [
                                                    'description' => '下发创建时间',
                                                    'type' => 'string',
                                                    'example' => '2023-04-10T10:53:46.156+08:00'."\n",
                                                ],
                                                'InvokeNodes' => [
                                                    'description' => '文件下发记录',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'InvokeNode' => [
                                                            'description' => '节点文件下发记录',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'InvocationStatus' => [
                                                                        'description' => '单台实例下发任务的状态，可能值：'."\n"
                                                                            .'- Pending：系统正在校验或下发文件。'."\n"
                                                                            .'- Invalid：指定文件参数有误，校验失败。'."\n"
                                                                            .'- Running：正在实例上下发文件。'."\n"
                                                                            .'- Aborted：向实例下发文件失败。'."\n"
                                                                            .'- Success：文件下发完成。'."\n"
                                                                            .'- Failed：文件在实例内创建失败。'."\n"
                                                                            .'- Error：下发文件时发生异常无法继续。'."\n"
                                                                            .'- Timeout：下发文件超时。',
                                                                        'type' => 'string',
                                                                        'example' => 'Success',
                                                                    ],
                                                                    'FinishTime' => [
                                                                        'description' => '结束时间，格式："2020-05-22T17:04:18"。',
                                                                        'type' => 'string',
                                                                        'example' => '2023-04-10T10:53:46.156+08:00',
                                                                    ],
                                                                    'NodeId' => [
                                                                        'description' => '节点id',
                                                                        'type' => 'string',
                                                                        'example' => 'e01-cn-9lb3c15m81j',
                                                                    ],
                                                                    'ErrorInfo' => [
                                                                        'description' => '命令的下发失败或执行失败原因的详情，可能值：'."\n"
                                                                            .'- 空：命令执行正常。'."\n"
                                                                            .'- the specified instance does not exists：指定的实例不存在或已释放。'."\n"
                                                                            .'- the node has released when create task：执行命令期间，该实例被释放。'."\n"
                                                                            .'- the node is not running when create task：命令执行时，该实例不在运行中。'."\n"
                                                                            .'- the command is not applicable：命令不适用于指定的实例。'."\n"
                                                                            .'- the specified account does not exists：指定的账号不存在。'."\n"
                                                                            .'- the specified directory does not exists：指定的目录不存在。'."\n"
                                                                            .'- the cron job expression is invalid：指定的执行时间表达式不合法。'."\n"
                                                                            .'- the aliyun service is not running on the instance：云助手Agent未运行。'."\n"
                                                                            .'- the aliyun service in the instance does not response：云助手Agent无响应。'."\n"
                                                                            .'- the aliyun service in the node is upgrading now：云助手Agent正在升级中。'."\n"
                                                                            .'- the aliyun service in the node need upgrade：云助手Agent需要升级。'."\n"
                                                                            .'- the command delivery has been timeout：发送命令超时。'."\n"
                                                                            .'- the command execution has been timeout：命令执行超时。'."\n"
                                                                            .'- the command execution got an exception：命令执行发生异常。'."\n"
                                                                            .'- the command execution has been interrupted：命令执行被中断。'."\n"
                                                                            .'- the command execution exit code is not zero：命令执行结束，退出码非0。'."\n"
                                                                            .'- the specified instance has been released：下发文件期间，该实例被释放。',
                                                                        'type' => 'string',
                                                                        'example' => 'the specified instance does not exists',
                                                                    ],
                                                                    'CreationTime' => [
                                                                        'description' => '文件下发任务的创建时间。',
                                                                        'type' => 'string',
                                                                        'example' => '2023-02-06T07:12:50Z',
                                                                    ],
                                                                    'StartTime' => [
                                                                        'description' => '开始时间',
                                                                        'type' => 'string',
                                                                        'example' => '2023-03-30T16:00:00Z',
                                                                    ],
                                                                    'UpdateTime' => [
                                                                        'description' => '更新时间',
                                                                        'type' => 'string',
                                                                        'example' => '2023-03-30T16:00:00Z',
                                                                    ],
                                                                    'ErrorCode' => [
                                                                        'description' => '文件下发的失败原因代码。可能值：'."\n"
                                                                            ."\n"
                                                                            .'空：文件下发正常。'."\n"
                                                                            .'NodeNotExists：指定的实例不存在或已释放。'."\n"
                                                                            .'NodeReleased：下发文件期间，该实例被释放。'."\n"
                                                                            .'NodeNotRunning：创建下发文件任务时，该实例不在运行中。'."\n"
                                                                            .'AccountNotExists：指定的账号不存在。'."\n"
                                                                            .'ClientNotRunning：云助手Agent未运行。'."\n"
                                                                            .'ClientNotResponse：云助手Agent无响应。'."\n"
                                                                            .'ClientIsUpgrading：云助手Agent正在升级中。'."\n"
                                                                            .'ClientNeedUpgrade：云助手Agent需要升级。'."\n"
                                                                            .'DeliveryTimeout：发送文件超时。'."\n"
                                                                            .'FileCreateFail：文件创建失败。'."\n"
                                                                            .'FileAlreadyExists：相同路径下存在同名文件。'."\n"
                                                                            .'FileContentInvalid：文件内容不合法。'."\n"
                                                                            .'FileNameInvalid：文件名不合法。'."\n"
                                                                            .'FilePathInvalid：文件路径不合法。'."\n"
                                                                            .'FileAuthorityInvalid：文件权限不合法。'."\n"
                                                                            .'UserGroupNotExists：发送文件时指定的用户组不存在。',
                                                                        'type' => 'string',
                                                                        'example' => 'AccountNotExists',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4FD06DF0-9167-5C6F-A145-F30CA4A15D54\\",\\n  \\"TotalCount\\": \\"1\\",\\n  \\"Invocations\\": {\\n    \\"Invocation\\": [\\n      {\\n        \\"FileMode\\": \\"0644\\",\\n        \\"Overwrite\\": true,\\n        \\"InvocationStatus\\": \\"Pending\\",\\n        \\"Description\\": \\"描述信息。\\",\\n        \\"ContentType\\": \\"PlainText\\",\\n        \\"NodeCount\\": 3,\\n        \\"TargetDir\\": \\"\\\\t/home/user\\",\\n        \\"FileGroup\\": \\"root\\",\\n        \\"FileOwner\\": \\"root\\",\\n        \\"Name\\": \\"test\\",\\n        \\"Content\\": \\"Base64\\",\\n        \\"CreationTime\\": \\"2023-04-10T10:53:46.156+08:00\\\\n\\",\\n        \\"InvokeNodes\\": {\\n          \\"InvokeNode\\": [\\n            {\\n              \\"InvocationStatus\\": \\"Success\\",\\n              \\"FinishTime\\": \\"2023-04-10T10:53:46.156+08:00\\",\\n              \\"NodeId\\": \\"e01-cn-9lb3c15m81j\\",\\n              \\"ErrorInfo\\": \\"the specified instance does not exists\\",\\n              \\"CreationTime\\": \\"2023-02-06T07:12:50Z\\",\\n              \\"StartTime\\": \\"2023-03-30T16:00:00Z\\",\\n              \\"UpdateTime\\": \\"2023-03-30T16:00:00Z\\",\\n              \\"ErrorCode\\": \\"AccountNotExists\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询下发文件列表及状态',
        ],
        'SendFile' => [
            'summary' => '一台或多台灵骏机器下发远程文件。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文件名称。支持全字符集，长度不得超过255个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'file.txt',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '描述信息。支持全字符集，长度不得超过512个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a test file.	'."\n",
                    ],
                ],
                [
                    'name' => 'TargetDir',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文件下发目标灵骏节点中的目录。如不存在则会自动创建。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/home',
                    ],
                ],
                [
                    'name' => 'ContentType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文件内容类型。'."\n"
                            ."\n"
                            .'PlainText：普通文本。'."\n"
                            .'Base64：Base64编码。'."\n"
                            .'默认值为PlainText。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PlainText',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文件内容。文件内容在Base64编码后，大小不能超过32 KB。'."\n"
                            ."\n"
                            .'- 当`ContentType`参数为`PlainText`时，该字段为明文格式的普通文本。'."\n"
                            .'- 当`ContentType`参数为`Base64`时，该字段为Base64编码的文本。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '#!/bin/bash echo "Current User is :" echo $(ps | grep "$$" | awk \'{print $2}\') -------- oss://bucketName/objectName',
                    ],
                ],
                [
                    'name' => 'FileMode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文件的权限。只对Linux实例生效，设置方式与chmod命令相同。'."\n"
                            ."\n"
                            .'默认值为0644，表示用户具有读写权限，用户组和其它用户具有只读权限。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0644',
                    ],
                ],
                [
                    'name' => 'FileOwner',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文件的用户。只对Linux实例生效，默认为root。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'root',
                    ],
                ],
                [
                    'name' => 'FileGroup',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文件的用户组。只对Linux实例生效，默认为root。长度不得超过64个字符。'."\n"
                            ."\n"
                            .'说明'."\n"
                            .'使用其他用户组时，请确保实例中存在该用户组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'NodeIdList',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '节点列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '灵骏节点ID',
                            'type' => 'string',
                            'required' => false,
                            'example' => '[\'i-bp1b00g1wdnrvpz68o0b\', \'i-bp1bu2fp0uhruyf88k6v\']',
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Overwrite',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '如果同名文件在目标目录已存在，是否覆盖文件。'."\n"
                            .'- true：覆盖。'."\n"
                            .'- false：不覆盖。'."\n"
                            ."\n"
                            .'默认值为false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'True',
                    ],
                ],
                [
                    'name' => 'Timeout',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '下发文件的超时时间。单位：秒。'."\n"
                            ."\n"
                            .'- 当因为进程原因、缺失模块、缺失云助手Agent等原因无法下发文件时，会出现超时现象。'."\n"
                            .'- 当设置的超时时间小于10秒时，为确保下发成功，系统会将超时时间自动设置为10秒。'."\n"
                            ."\n"
                            .'默认值为60。',
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
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '3C683243-7915-57FB-9570-A2932C1C0F78',
                            ],
                            'InvokeId' => [
                                'description' => '命令执行ID。',
                                'type' => 'string',
                                'example' => 't-hz03la52z1zkvls',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3C683243-7915-57FB-9570-A2932C1C0F78\\",\\n  \\"InvokeId\\": \\"t-hz03la52z1zkvls\\"\\n}","type":"json"}]',
            'title' => '向一台或多台ECS实例下发远程文件',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'eflo-controller.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'eflo-controller.cn-heyuan.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'eflo-controller.ap-southeast-1.aliyuncs.com',
        ],
    ],
];
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'eflo-controller',
    'version' => '2022-12-15',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 181847,
      'title' => '灵骏集群',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateCluster',
        1 => 'DeleteCluster',
        2 => 'DescribeCluster',
        3 => 'ExtendCluster',
        4 => 'ListClusters',
        5 => 'ListClusterNodes',
        6 => 'ShrinkCluster',
      ),
    ),
    1 => 
    array (
      'id' => 181846,
      'title' => '灵骏节点',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeNode',
        1 => 'ListFreeNodes',
        2 => 'RebootNodes',
        3 => 'ReimageNodes',
      ),
    ),
    2 => 
    array (
      'id' => 184488,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UntagResources',
        1 => 'TagResources',
        2 => 'ListTagResources',
        3 => 'DescribeZones',
        4 => 'DescribeTask',
        5 => 'DescribeRegions',
        6 => 'ChangeResourceGroup',
        7 => 'ApproveOperation',
        8 => 'StopInvocation',
        9 => 'RunCommand',
        10 => 'DescribeInvocations',
        11 => 'DescribeSendFileResults',
        12 => 'SendFile',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
    ),
  ),
  'apis' => 
  array (
    'CreateCluster' => 
    array (
      'summary' => '创建一个新的灵骏集群。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '集群名称',
            'description' => '集群名称',
            'type' => 'string',
            'required' => false,
            'example' => 'Standard_Cluster',
          ),
        ),
        1 => 
        array (
          'name' => 'ClusterType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '集群类型',
            'description' => '集群类型',
            'type' => 'string',
            'required' => false,
            'example' => 'Lite',
          ),
        ),
        2 => 
        array (
          'name' => 'ClusterDescription',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '集群描述',
            'description' => '集群描述',
            'type' => 'string',
            'required' => false,
            'example' => '标准集群测试',
          ),
        ),
        3 => 
        array (
          'name' => 'NodeGroups',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '节点组列表
',
            'description' => '节点组列表
',
            'type' => 'array',
            'items' => 
            array (
              'description' => '节点分组信息',
              'type' => 'object',
              'properties' => 
              array (
                'Nodes' => 
                array (
                  'title' => '节点列表',
                  'description' => '节点列表',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '节点列表',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'NodeId' => 
                      array (
                        'title' => '节点id',
                        'description' => '节点id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e01poc-cn-i7m2wnivf0d',
                      ),
                      'Hostname' => 
                      array (
                        'title' => '主机名
',
                        'description' => '主机名
',
                        'type' => 'string',
                        'required' => false,
                        'example' => '8d13b784-17a9-11ed-bc7b-acde48001122',
                      ),
                      'LoginPassword' => 
                      array (
                        'title' => '登录密码',
                        'description' => '登录密码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '***',
                      ),
                      'VSwitchId' => 
                      array (
                        'title' => 'dpu使用的交换机id
',
                        'description' => '虚拟交换机ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-bp169pi5fj151rrms4sia',
                      ),
                      'VpcId' => 
                      array (
                        'title' => 'dpu使用的虚拟网络id',
                        'description' => '专有网络ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-0jlasms92fdxqd3wlf8ny',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                ),
                'NodeGroupName' => 
                array (
                  'title' => '节点组名称',
                  'description' => '节点组名称',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'emr-default',
                ),
                'NodeGroupDescription' => 
                array (
                  'title' => '节点组描述',
                  'description' => '节点组描述',
                  'type' => 'string',
                  'required' => false,
                  'example' => '默认节点组',
                ),
                'MachineType' => 
                array (
                  'title' => '机型',
                  'description' => '机型',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'efg1.nvga1',
                ),
                'ImageId' => 
                array (
                  'title' => '系统镜像id',
                  'description' => '系统镜像id',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'i190297201634099844192',
                ),
                'ZoneId' => 
                array (
                  'title' => '可用区id',
                  'description' => '可用区id',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-hangzhou-i',
                ),
                'UserData' => 
                array (
                  'title' => '用户自定义脚本，命令',
                  'description' => '实例自定义数据。需要以Base64方式编码，原始数据最多为16 KB。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ZWNobyBoZWxsbyBlY3Mh',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'IgnoreFailedNodeTasks',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否允许跳过失败节点，默认值为Flase',
            'description' => '是否允许跳过失败节点，默认值为False',
            'type' => 'boolean',
            'required' => false,
            'example' => 'False',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组id',
            'description' => '资源组id',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek2xdkc6icwfha',
          ),
        ),
        6 => 
        array (
          'name' => 'Networks',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '网络信息',
            'description' => '网络信息',
            'type' => 'object',
            'properties' => 
            array (
              'NewVpdInfo' => 
              array (
                'description' => 'Vpd配置信息',
                'type' => 'object',
                'properties' => 
                array (
                  'CenId' => 
                  array (
                    'title' => '云企业网id',
                    'description' => '云企业网id',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'cen-1gb1eftc5qp2ao75fo',
                  ),
                  'CloudLinkCidr' => 
                  array (
                    'title' => '云链cidr',
                    'description' => '云链cidr',
                    'type' => 'string',
                    'required' => false,
                    'example' => '172.16.0.0/24',
                  ),
                  'CloudLinkId' => 
                  array (
                    'title' => '云链id',
                    'description' => '云链id',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'vcc-cn-c4dtycm5i08',
                  ),
                  'MonitorVpcId' => 
                  array (
                    'title' => '专有网络',
                    'description' => '专有网络',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'vpc-0jl2x45apm6odc2c10h25',
                  ),
                  'MonitorVswitchId' => 
                  array (
                    'title' => '专有网络交换机',
                    'description' => '专有网络交换机',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'vsw-0jl2w3ffbghkss0x2foff',
                  ),
                  'VpdCidr' => 
                  array (
                    'title' => '集群网段',
                    'description' => '集群网段',
                    'type' => 'string',
                    'required' => false,
                    'example' => '192.168.0.0/16',
                  ),
                  'VpdSubnets' => 
                  array (
                    'title' => 'vpd子网信息',
                    'description' => '集群子网',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SubnetCidr' => 
                        array (
                          'title' => '子网cidr',
                          'description' => '子网cidr',
                          'type' => 'string',
                          'required' => false,
                          'example' => '10.0.1.8/24',
                        ),
                        'SubnetType' => 
                        array (
                          'title' => '子网类型',
                          'description' => '子网类型',
                          'type' => 'string',
                          'required' => false,
                          'example' => '10.0.2.8/24',
                        ),
                        'ZoneId' => 
                        array (
                          'title' => '可用区id',
                          'description' => '可用区id',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'cn-wulanchabu-b',
                        ),
                      ),
                      'required' => false,
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
              ),
              'VpdInfo' => 
              array (
                'description' => '复用VPD信息',
                'type' => 'object',
                'properties' => 
                array (
                  'VpdId' => 
                  array (
                    'description' => '专有网络 id',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'vpd-vfuz6ejv',
                  ),
                  'VpdSubnets' => 
                  array (
                    'description' => '集群子网id列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '集群子网id',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'subnet-jcloe1',
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
              ),
              'IpAllocationPolicy' => 
              array (
                'description' => 'IP分配策略',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'BondPolicy' => 
                    array (
                      'description' => 'bond策略',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'BondDefaultSubnet' => 
                        array (
                          'description' => '默认bond集群子网',
                          'type' => 'string',
                          'required' => false,
                          'example' => '172.168.0.0/24',
                        ),
                        'Bonds' => 
                        array (
                          'description' => 'bond信息',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Name' => 
                              array (
                                'description' => 'bond名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'bond0',
                              ),
                              'Subnet' => 
                              array (
                                'description' => 'ip来源集群子网',
                                'type' => 'string',
                                'required' => false,
                                'example' => '172.16.0.0/24',
                              ),
                            ),
                            'required' => false,
                          ),
                          'required' => false,
                        ),
                      ),
                      'required' => false,
                    ),
                    'MachineTypePolicy' => 
                    array (
                      'description' => '机型分配策略',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Bonds' => 
                          array (
                            'description' => 'bond信息',
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Name' => 
                                array (
                                  'description' => 'bond名称',
                                  'type' => 'string',
                                  'required' => false,
                                  'example' => 'bond0',
                                ),
                                'Subnet' => 
                                array (
                                  'description' => 'ip来源集群子网',
                                  'type' => 'string',
                                  'required' => false,
                                  'example' => '192.168.1.0/24',
                                ),
                              ),
                              'required' => false,
                            ),
                            'required' => false,
                          ),
                          'MachineType' => 
                          array (
                            'description' => '机型',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'efg1.nvga8n',
                          ),
                        ),
                        'required' => false,
                      ),
                      'required' => false,
                    ),
                    'NodePolicy' => 
                    array (
                      'description' => '节点分配策略',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Bonds' => 
                          array (
                            'description' => 'bond信息',
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Name' => 
                                array (
                                  'description' => 'bond名称',
                                  'type' => 'string',
                                  'required' => false,
                                  'example' => 'bond0
',
                                ),
                                'Subnet' => 
                                array (
                                  'description' => 'ip来源集群子网',
                                  'type' => 'string',
                                  'required' => false,
                                  'example' => '10.0.0.0/24',
                                ),
                              ),
                              'required' => false,
                            ),
                            'required' => false,
                          ),
                          'NodeId' => 
                          array (
                            'description' => '节点id',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'e01-cn-2r42vq62001',
                          ),
                        ),
                        'required' => false,
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
              'SecurityGroupId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'VSwitchZoneId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'VpcId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'VSwitchId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'TailIpVersion' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '资源标签',
            'description' => '资源标签',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '键',
                  'description' => '键',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env-name',
                ),
                'Value' => 
                array (
                  'title' => '值',
                  'description' => '值',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'dev',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        8 => 
        array (
          'name' => 'Components',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '组件（软件实例）',
            'description' => '组件（软件实例）',
            'type' => 'array',
            'items' => 
            array (
              'title' => '组件类型',
              'description' => '组件类型',
              'type' => 'object',
              'properties' => 
              array (
                'ComponentType' => 
                array (
                  'title' => '组件类型：  "ACKEdge"(ACK边缘集群)
"ARMS"（ARMS监控）',
                  'description' => '组件类型',
                  'type' => 'string',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                    'ARMS' => 'ARMS监控',
                    'ACKEdge' => 'ACK边缘集群',
                  ),
                  'example' => 'ACKEdge',
                ),
                'ComponentConfig' => 
                array (
                  'title' => '组件配置',
                  'description' => '组件配置',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'BasicArgs' => 
                    array (
                      'description' => '组件基础参数',
                      'type' => 'any',
                      'required' => false,
                      'example' => '{
      "EndpointPublicAccess": false,
      "ContainerCidr": "10.4.0.0/24",
      "KeyPair": "test",
      "NodeCidrMask": "25",
      "ResourceGroupId": "rg-axsadm3sdzsdvdsndstdisd",
      "WorkerSystemDiskCategory": "da",
      "WorkerSystemDiskSize": 40,
      "DeletionProtection": false,
      "KubeProxy": "iptables",
      "Name": "da",
      "LoadBalancerSpec": "slb.s1.small",
      "Runtime": {
            "Version": "19.03.15",
            "Name": "docker"
      },
      "IsEnterpriseSecurityGroup": true,
      "Vpcid": "192.168.23.0/24",
      "NumOfNodes": 1,
      "VswitchIds": [
            "dad"
      ],
      "ServiceCidr": "10.0.0.0/16",
      "SnatEntry": false,
      "kubernetesVersion": "1.20.11-aliyunedge.1",
      "WorkerInstanceTypes": [
            "da"
      ]
}',
                    ),
                    'NodeUnits' => 
                    array (
                      'title' => '节点池配置， 并用于建立节点组和节点池的对应关系。 当
ComponentType=”ACKEdge“时必填，其他为空。',
                      'description' => '节点池配置， 并用于建立节点组和节点池的对应关系。 当
ComponentType=”ACKEdge“时必填，其他为空。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '节点池配置， 并用于建立节点组和节点池的对应关系。 当
ComponentType=”ACKEdge“时必填，其他为空。',
                        'type' => 'any',
                        'required' => false,
                        'example' => '{
      "Options": {},
      "Type": "edge",
      "ResourceGroupId": "rg-acfm2cdxm3zvnt4dsa1s1t65fi",
      "RelatedNodeGroups": [
            "tes"
      ],
      "NodeUnitKey": "da",
      "MaxNodes": 30
}',
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'HpnZone',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集群编号',
            'type' => 'string',
            'required' => false,
            'example' => 'A1',
          ),
        ),
        10 => 
        array (
          'name' => 'NimizVSwitches',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'Node虚拟交换机',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'Node虚拟交换机id',
              'type' => 'string',
              'required' => false,
              'example' => 'vsw-0jlx7dkziyhgf6klwnsi3',
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '3C683243-7915-57FB-9570-A2932C1C0F78',
              ),
              'ClusterId' => 
              array (
                'title' => '集群id',
                'description' => '集群id',
                'type' => 'string',
                'example' => 'i116913051663373010974',
              ),
              'TaskId' => 
              array (
                'title' => '任务id',
                'description' => '任务id',
                'type' => 'string',
                'example' => 'i159809891662373011015',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3C683243-7915-57FB-9570-A2932C1C0F78\\",\\n  \\"ClusterId\\": \\"i116913051663373010974\\",\\n  \\"TaskId\\": \\"i159809891662373011015\\"\\n}","type":"json"}]',
      'title' => '创建集群',
    ),
    'DeleteCluster' => 
    array (
      'summary' => '删除灵骏集群实例。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集群 id',
            'type' => 'string',
            'required' => true,
            'example' => 'i116913051662373010974',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '0FC4A1C7-421C-5EAB-9361-4C0338EFA287',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FC4A1C7-421C-5EAB-9361-4C0338EFA287\\"\\n}","type":"json"}]',
      'title' => '删除集群',
    ),
    'DescribeCluster' => 
    array (
      'summary' => '查询灵骏集群详情。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '',
            'description' => '集群id。',
            'type' => 'string',
            'required' => true,
            'example' => 'i119982311660892626523',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '887FA855-89F4-5DB3-B305-C5879EC480E6',
              ),
              'CreateTime' => 
              array (
                'title' => '创建时间',
                'description' => '创建时间',
                'type' => 'string',
                'example' => '2022-06-08T07:05:11Z',
              ),
              'NodeCount' => 
              array (
                'title' => '节点数',
                'description' => '节点数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'NodeGroupCount' => 
              array (
                'title' => '节点组数量',
                'description' => '节点组数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'UpdateTime' => 
              array (
                'title' => '更新时间',
                'description' => '更新时间',
                'type' => 'string',
                'example' => '2022-08-23T06:36:17.000Z',
              ),
              'ClusterDescription' => 
              array (
                'title' => '集群描述',
                'description' => '集群描述',
                'type' => 'string',
                'example' => '测试集群',
              ),
              'OperatingState' => 
              array (
                'title' => '集群状态',
                'description' => '集群状态',
                'type' => 'string',
                'example' => 'running',
              ),
              'Components' => 
              array (
                'title' => '组件信息',
                'description' => '组件信息',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ComponentType' => 
                    array (
                      'title' => '组件类型',
                      'description' => '组件类型',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'ARMS' => 'ARMS监控',
                        'ACKEdge' => 'ACK边缘集群',
                      ),
                      'example' => 'ACKEdge',
                    ),
                    'ComponentId' => 
                    array (
                      'title' => '组件id',
                      'description' => '组件id',
                      'type' => 'string',
                      'example' => 'i149549021660892626529',
                    ),
                  ),
                ),
              ),
              'ClusterId' => 
              array (
                'title' => '集群id
',
                'description' => '集群id
',
                'type' => 'string',
                'example' => 'i116913051662373010974',
              ),
              'ClusterName' => 
              array (
                'title' => '集群名称',
                'description' => '集群名称',
                'type' => 'string',
                'example' => 'Eflo-YJ-Test-Cluster',
              ),
              'TaskId' => 
              array (
                'title' => '任务id',
                'description' => '任务id',
                'type' => 'string',
                'example' => 'i152609221670466904596',
              ),
              'ClusterType' => 
              array (
                'title' => '集群类型',
                'description' => '集群类型',
                'type' => 'string',
                'example' => 'AckEdgePro',
              ),
              'Networks' => 
              array (
                'title' => '网络信息',
                'description' => '网络信息',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'VpdId' => 
                    array (
                      'title' => '集群网段id',
                      'description' => '集群网段id',
                      'type' => 'string',
                      'example' => 'vpd-iqd7xunc',
                    ),
                  ),
                ),
              ),
              'ResourceGroupId' => 
              array (
                'title' => '资源组id',
                'description' => '资源组id',
                'type' => 'string',
                'example' => 'rg-aek2k3rqlvv6ytq',
              ),
              'VpcId' => 
              array (
                'description' => '专有网络ID',
                'type' => 'string',
                'example' => 'vpc-0jlkqysom5dmcviymep3f',
              ),
              'HpnZone' => 
              array (
                'description' => '集群编号',
                'type' => 'string',
                'example' => 'A2',
              ),
              'ComputingIpVersion' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"887FA855-89F4-5DB3-B305-C5879EC480E6\\",\\n  \\"CreateTime\\": \\"2022-06-08T07:05:11Z\\",\\n  \\"NodeCount\\": 2,\\n  \\"NodeGroupCount\\": 2,\\n  \\"UpdateTime\\": \\"2022-08-23T06:36:17.000Z\\",\\n  \\"ClusterDescription\\": \\"测试集群\\",\\n  \\"OperatingState\\": \\"running\\",\\n  \\"Components\\": [\\n    {\\n      \\"ComponentType\\": \\"ACKEdge\\",\\n      \\"ComponentId\\": \\"i149549021660892626529\\"\\n    }\\n  ],\\n  \\"ClusterId\\": \\"i116913051662373010974\\",\\n  \\"ClusterName\\": \\"Eflo-YJ-Test-Cluster\\",\\n  \\"TaskId\\": \\"i152609221670466904596\\",\\n  \\"ClusterType\\": \\"AckEdgePro\\",\\n  \\"Networks\\": [\\n    {\\n      \\"VpdId\\": \\"vpd-iqd7xunc\\"\\n    }\\n  ],\\n  \\"ResourceGroupId\\": \\"rg-aek2k3rqlvv6ytq\\",\\n  \\"VpcId\\": \\"vpc-0jlkqysom5dmcviymep3f\\",\\n  \\"HpnZone\\": \\"A2\\",\\n  \\"ComputingIpVersion\\": \\"\\"\\n}","type":"json"}]',
      'title' => '查询集群',
    ),
    'ExtendCluster' => 
    array (
      'summary' => '集群扩容。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '集群id',
            'description' => '集群id',
            'type' => 'string',
            'required' => false,
            'example' => 'i15b480fbd2fcdbc2869cd80',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeGroups',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '节点组',
            'description' => '节点组',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Nodes' => 
                array (
                  'title' => '节点列表',
                  'description' => '节点列表',
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Hostname' => 
                      array (
                        'title' => '主机名',
                        'description' => '主机名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd044d220-33fd-11ed-86a6',
                      ),
                      'LoginPassword' => 
                      array (
                        'title' => '登录密码
',
                        'description' => '登录密码
',
                        'type' => 'string',
                        'required' => false,
                        'example' => '***',
                      ),
                      'NodeId' => 
                      array (
                        'title' => '节点id',
                        'description' => '节点id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e01-cn-zvp2zdpy601',
                      ),
                      'VpcId' => 
                      array (
                        'description' => '专有网络id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-0jlasms92fdxqd3wlf8ny',
                      ),
                      'VSwitchId' => 
                      array (
                        'description' => '交换机id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-bp169pi5fj151rrms4sia',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                ),
                'NodeGroupId' => 
                array (
                  'title' => '节点组id',
                  'description' => '节点组id',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'i16d4883a46cbadeb4bc9',
                ),
                'UserData' => 
                array (
                  'title' => '用户自定义脚本，命令',
                  'description' => '自定义数据',
                  'type' => 'string',
                  'required' => false,
                  'example' => '#!/bin/sh
echo "Hello World. The time is now $(date -R)!" | tee /root/userdata_test.txt',
                ),
                'ZoneId' => 
                array (
                  'type' => 'string',
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'IgnoreFailedNodeTasks',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否允许跳过失败节点，默认值为Flase',
            'description' => '是否允许跳过失败节点，默认值为False',
            'type' => 'boolean',
            'required' => false,
            'example' => 'False
',
          ),
        ),
        3 => 
        array (
          'name' => 'VpdSubnets',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '集群子网列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'vpd子网',
              'type' => 'string',
              'required' => false,
              'example' => '["subnet-3od2fe","subnet-fdo3dv"]',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'IpAllocationPolicy',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '分配ip的组合策略： 每个策略只能选择一种策略类型，可以有多个策略进行组合',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'BondPolicy' => 
                array (
                  'description' => '根据bond名称指定集群子网id',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'BondDefaultSubnet' => 
                    array (
                      'description' => '默认bond集群子网',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'subnet-3od2fe',
                    ),
                    'Bonds' => 
                    array (
                      'description' => 'bond信息',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Name' => 
                          array (
                            'description' => 'bond名称',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'Bond0',
                          ),
                          'Subnet' => 
                          array (
                            'description' => 'ip来源集群子网',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'subnet-3od2fe
',
                          ),
                        ),
                        'required' => false,
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'MachineTypePolicy' => 
                array (
                  'description' => '机型分配策略',
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Bonds' => 
                      array (
                        'description' => 'bond信息',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Name' => 
                            array (
                              'description' => 'bond名称',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'Bond0',
                            ),
                            'Subnet' => 
                            array (
                              'description' => 'ip来源集群子网',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'subnet-fdo3dv',
                            ),
                          ),
                          'required' => false,
                        ),
                        'required' => false,
                      ),
                      'MachineType' => 
                      array (
                        'description' => '机型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'efg1.nvga1',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                ),
                'NodePolicy' => 
                array (
                  'description' => '节点分配策略',
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Bonds' => 
                      array (
                        'description' => 'bond信息',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Name' => 
                            array (
                              'description' => 'bond名称',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'Bond0',
                            ),
                            'Subnet' => 
                            array (
                              'description' => 'ip来源集群子网',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'subnet-fdo3dv',
                            ),
                          ),
                          'required' => false,
                        ),
                        'required' => false,
                      ),
                      'NodeId' => 
                      array (
                        'description' => '节点id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'i-3fdodw2',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'VSwitchZoneId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '03668372-18FF-5959-98D9-6B36A4643C7A',
              ),
              'TaskId' => 
              array (
                'title' => '任务id',
                'description' => '任务id',
                'type' => 'string',
                'example' => 'i158475611663639202234',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"03668372-18FF-5959-98D9-6B36A4643C7A\\",\\n  \\"TaskId\\": \\"i158475611663639202234\\"\\n}","type":"json"}]',
      'title' => '扩容集群',
    ),
    'ListClusters' => 
    array (
      'summary' => '查询集群实例列表。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NextToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询凭证（Token），取值为上一次API调用返回的 NextToken 参数值。
',
            'description' => '查询凭证（Token），取值为上一次API调用返回的 NextToken 参数值。
',
            'type' => 'string',
            'required' => false,
            'example' => 'a3f2224a5ec7224116c4f5246120abe4',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分页查询时每页行数。最大值为100。

默认值：

•当不设置值或设置的值小于20时，默认值为20。

•当设置的值大于100时，默认值为100。',
            'description' => '分页查询时每页行数，默认值为20。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组id',
            'description' => '资源组id',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek2bg6wyoox6jq',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '2FE2B22C-CF9D-59DE-BF63-DC9B9B33A9D1',
              ),
              'Clusters' => 
              array (
                'title' => '集群信息',
                'description' => '集群信息',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Components' => 
                    array (
                      'title' => '组件信息
',
                      'description' => '组件信息
',
                      'type' => 'any',
                      'example' => '{}',
                    ),
                    'ClusterId' => 
                    array (
                      'title' => '集群id',
                      'description' => '集群id',
                      'type' => 'string',
                      'example' => 'i137590131672134915401',
                    ),
                    'ClusterName' => 
                    array (
                      'title' => '集群name',
                      'description' => '集群name',
                      'type' => 'string',
                      'example' => 'cnp_test_cluster',
                    ),
                    'OperatingState' => 
                    array (
                      'title' => '集群状态',
                      'description' => '集群状态',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'running' => '运行中',
                        'expanding' => '扩容中',
                        'shrinking' => '缩容中',
                        'initializing' => '初始化中',
                      ),
                      'example' => 'initializing',
                    ),
                    'TaskId' => 
                    array (
                      'title' => '任务id',
                      'description' => '任务id',
                      'type' => 'string',
                      'example' => 'i156365121663149566024',
                    ),
                    'ClusterType' => 
                    array (
                      'title' => '集群类型',
                      'description' => '集群类型',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'AckEdgePro' => '基于ACK@Edge Pro的灵骏集群',
                        'ExclusiveBareCluster' => '专属裸集群',
                        'Lite' => '基础版灵骏集群',
                      ),
                      'example' => 'AckEdgePro',
                    ),
                    'NodeCount' => 
                    array (
                      'title' => '节点数量',
                      'description' => '节点数量',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '12',
                    ),
                    'NodeGroupCount' => 
                    array (
                      'title' => '节点组数量',
                      'description' => '节点组数量',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '1672134938',
                    ),
                    'UpdateTime' => 
                    array (
                      'title' => '更新时间',
                      'description' => '更新时间',
                      'type' => 'string',
                      'example' => '1672134968',
                    ),
                    'ClusterDescription' => 
                    array (
                      'title' => '集群描述',
                      'description' => '集群描述',
                      'type' => 'string',
                      'example' => '测试集群',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'title' => '资源组id',
                      'description' => '资源组id',
                      'type' => 'string',
                      'example' => 'rg-aek2ajbjoloa23q',
                    ),
                    'VpcId' => 
                    array (
                      'description' => '专有网络id',
                      'type' => 'string',
                      'example' => 'vpc-0jlx4hol2bjboafzmffvd',
                    ),
                    'HpnZone' => 
                    array (
                      'description' => '集群编号',
                      'type' => 'string',
                      'example' => 'B1',
                    ),
                    'ComputingIpVersion' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'title' => '本次调用返回的查询凭证值。
',
                'description' => '本次调用返回的查询凭证值。
',
                'type' => 'string',
                'example' => 'f4f9a292c17072a2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2FE2B22C-CF9D-59DE-BF63-DC9B9B33A9D1\\",\\n  \\"Clusters\\": [\\n    {\\n      \\"Components\\": \\"{}\\",\\n      \\"ClusterId\\": \\"i137590131672134915401\\",\\n      \\"ClusterName\\": \\"cnp_test_cluster\\",\\n      \\"OperatingState\\": \\"initializing\\",\\n      \\"TaskId\\": \\"i156365121663149566024\\",\\n      \\"ClusterType\\": \\"AckEdgePro\\",\\n      \\"NodeCount\\": 12,\\n      \\"NodeGroupCount\\": 2,\\n      \\"CreateTime\\": \\"1672134938\\",\\n      \\"UpdateTime\\": \\"1672134968\\",\\n      \\"ClusterDescription\\": \\"测试集群\\",\\n      \\"ResourceGroupId\\": \\"rg-aek2ajbjoloa23q\\",\\n      \\"VpcId\\": \\"vpc-0jlx4hol2bjboafzmffvd\\",\\n      \\"HpnZone\\": \\"B1\\",\\n      \\"ComputingIpVersion\\": \\"\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"f4f9a292c17072a2\\"\\n}","type":"json"}]',
      'title' => '查询集群列表',
    ),
    'ListClusterNodes' => 
    array (
      'summary' => '查询集群节点列表。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '集群id',
            'description' => '集群id',
            'type' => 'string',
            'required' => true,
            'example' => 'i15b480fbd2fcdbc2869cd80',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询凭证（Token），取值为上一次API调用返回的 NextToken 参数值。
',
            'description' => '查询凭证（Token），取值为上一次API调用返回的 NextToken 参数值。
',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAdQ3Z+oPlg49gsr2y8jb6wY=',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分页查询时每页行数。最大值为100。

默认值：

•当不设置值或设置的值小于20时，默认值为20。

•当设置的值大于100时，默认值为100。',
            'description' => '分页查询时每页行数，默认值为20。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'NodeGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '节点组id',
            'type' => 'string',
            'required' => false,
            'example' => 'ng-ec3c96ff0aa4c60d',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '2BA76272-6608-5AEC-BBA8-B6F0D3D14CDB',
              ),
              'NextToken' => 
              array (
                'title' => '本次调用返回的查询凭证值。
',
                'description' => '本次调用返回的查询凭证值。
',
                'type' => 'string',
                'example' => 'AAAAAXW/ZB9TBvH+0ZK0phtCibQgQmu1RbqplAI6Velo2OKR',
              ),
              'Nodes' => 
              array (
                'title' => '节点列表',
                'description' => '节点列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreateTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '1642472468000
',
                    ),
                    'ExpiredTime' => 
                    array (
                      'title' => '机器过期时间',
                      'description' => '机器过期时间',
                      'type' => 'string',
                      'example' => '1762185600000',
                    ),
                    'Hostname' => 
                    array (
                      'title' => '主机名',
                      'description' => '主机名',
                      'type' => 'string',
                      'example' => '72432f80-273e-11ed-b57a-acde48001122',
                    ),
                    'ImageId' => 
                    array (
                      'title' => '系统镜像id',
                      'description' => '系统镜像id',
                      'type' => 'string',
                      'example' => 'i190297201669099844192',
                    ),
                    'MachineType' => 
                    array (
                      'title' => '机型',
                      'description' => '机型',
                      'type' => 'string',
                      'example' => 'cn-wulanchabu-b11',
                    ),
                    'NodeGroupId' => 
                    array (
                      'title' => '节点组id
',
                      'description' => '节点组id
',
                      'type' => 'string',
                      'example' => 'ng-e9b74f4d450cf18d',
                    ),
                    'NodeGroupName' => 
                    array (
                      'title' => '节点组名称
',
                      'description' => '节点组名称
',
                      'type' => 'string',
                      'example' => 'emr_master',
                    ),
                    'NodeId' => 
                    array (
                      'title' => '节点id',
                      'description' => '节点id',
                      'type' => 'string',
                      'example' => 'e01-cn-2r42tmj4z02',
                    ),
                    'OperatingState' => 
                    array (
                      'title' => '节点状态
',
                      'description' => '节点状态
',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
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
                      ),
                      'example' => 'Extending',
                    ),
                    'Sn' => 
                    array (
                      'title' => '机器sn',
                      'description' => '机器sn',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                      ),
                      'example' => 'sn_tOuUk',
                    ),
                    'ZoneId' => 
                    array (
                      'title' => '可用区id',
                      'description' => '可用区id',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-b',
                    ),
                    'Networks' => 
                    array (
                      'description' => '网络信息',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'BondName' => 
                          array (
                            'description' => '机器网口名称',
                            'type' => 'string',
                            'example' => 'bond0',
                          ),
                          'Ip' => 
                          array (
                            'description' => '专有网络内的机器ip',
                            'type' => 'string',
                            'example' => '192.168.22.2',
                          ),
                          'SubnetId' => 
                          array (
                            'description' => '专有网络子网id',
                            'type' => 'string',
                            'example' => 'subnet-fwekrvg9',
                          ),
                          'VpdId' => 
                          array (
                            'description' => '专有网络 id',
                            'type' => 'string',
                            'example' => 'vpd-eoiy88ju',
                          ),
                        ),
                      ),
                    ),
                    'HpnZone' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2BA76272-6608-5AEC-BBA8-B6F0D3D14CDB\\",\\n  \\"NextToken\\": \\"AAAAAXW/ZB9TBvH+0ZK0phtCibQgQmu1RbqplAI6Velo2OKR\\",\\n  \\"Nodes\\": [\\n    {\\n      \\"CreateTime\\": \\"1642472468000\\\\n\\",\\n      \\"ExpiredTime\\": \\"1762185600000\\",\\n      \\"Hostname\\": \\"72432f80-273e-11ed-b57a-acde48001122\\",\\n      \\"ImageId\\": \\"i190297201669099844192\\",\\n      \\"MachineType\\": \\"cn-wulanchabu-b11\\",\\n      \\"NodeGroupId\\": \\"ng-e9b74f4d450cf18d\\",\\n      \\"NodeGroupName\\": \\"emr_master\\",\\n      \\"NodeId\\": \\"e01-cn-2r42tmj4z02\\",\\n      \\"OperatingState\\": \\"Extending\\",\\n      \\"Sn\\": \\"sn_tOuUk\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-b\\",\\n      \\"Networks\\": [\\n        {\\n          \\"BondName\\": \\"bond0\\",\\n          \\"Ip\\": \\"192.168.22.2\\",\\n          \\"SubnetId\\": \\"subnet-fwekrvg9\\",\\n          \\"VpdId\\": \\"vpd-eoiy88ju\\"\\n        }\\n      ],\\n      \\"HpnZone\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询集群节点列表',
    ),
    'ShrinkCluster' => 
    array (
      'summary' => '灵骏集群缩容。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '集群id',
            'description' => '集群id',
            'type' => 'string',
            'required' => false,
            'example' => 'i15dfa12e8f27c44f4a006c2c8bb',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeGroups',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '节点组信息',
            'description' => '节点组信息',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'NodeGroupId' => 
                array (
                  'title' => '节点组id',
                  'description' => '节点组id',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ng-3b6fbd24b1b845a0',
                ),
                'Nodes' => 
                array (
                  'title' => '节点列表',
                  'description' => '节点列表',
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'NodeId' => 
                      array (
                        'title' => '节点id',
                        'description' => '节点id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e01poc-cn-zmb2ypjdc01',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'IgnoreFailedNodeTasks',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否允许跳过失败节点，默认值为Flase',
            'description' => '是否允许跳过失败节点，默认值为False',
            'type' => 'boolean',
            'required' => false,
            'example' => 'False',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求id
',
                'description' => '请求id
',
                'type' => 'string',
                'example' => 'CC9FEF89-9BE5-5E03-845E-238B48D7599B',
              ),
              'TaskId' => 
              array (
                'title' => '任务id',
                'description' => '任务id',
                'type' => 'string',
                'example' => 'i159136551662516768776',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CC9FEF89-9BE5-5E03-845E-238B48D7599B\\",\\n  \\"TaskId\\": \\"i159136551662516768776\\"\\n}","type":"json"}]',
      'title' => '集群缩容',
    ),
    'DescribeNode' => 
    array (
      'summary' => '查询节点列表。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NodeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '节点id',
            'type' => 'string',
            'required' => true,
            'example' => 'mock-sn-2060',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => 'AC4F0004-7BCE-52E0-891B-CAC7D64E3368',
              ),
              'NodeGroupName' => 
              array (
                'title' => '节点组名称',
                'description' => '节点组名称',
                'type' => 'string',
                'example' => 'emr-default',
              ),
              'ClusterId' => 
              array (
                'title' => '集群id',
                'description' => '集群id',
                'type' => 'string',
                'example' => 'i116913051662373010974',
              ),
              'ClusterName' => 
              array (
                'title' => '集群名称',
                'description' => '集群名称',
                'type' => 'string',
                'example' => 'Standard_Cluster',
              ),
              'ZoneId' => 
              array (
                'title' => '可用区id',
                'description' => '可用区id',
                'type' => 'string',
                'example' => 'cn-hangzhou-i',
              ),
              'CreateTime' => 
              array (
                'title' => '创建时间',
                'description' => '创建时间',
                'type' => 'string',
                'example' => '2022-09-30T03:35:53Z',
              ),
              'NodeGroupId' => 
              array (
                'title' => '节点组id',
                'description' => '节点组id',
                'type' => 'string',
                'example' => 'ng-ec3c96ff0aa4c60d',
              ),
              'Hostname' => 
              array (
                'title' => '主机名',
                'description' => '主机名',
                'type' => 'string',
                'example' => '31d38530-241e-11ed-bc63-acde48001122',
              ),
              'ImageId' => 
              array (
                'title' => '镜像id',
                'description' => '镜像id',
                'type' => 'string',
                'example' => 'i190297201634099844192',
              ),
              'MachineType' => 
              array (
                'title' => '机型',
                'description' => '机型',
                'type' => 'string',
                'example' => 'efg1.nvga1',
              ),
              'NodeId' => 
              array (
                'title' => '节点id',
                'description' => '节点id',
                'type' => 'string',
                'example' => 'e01-cn-zvp2tgykr08',
              ),
              'Sn' => 
              array (
                'title' => '机器唯一标识',
                'description' => '机器唯一标识',
                'type' => 'string',
                'example' => 'sag42ckf4jx',
              ),
              'OperatingState' => 
              array (
                'title' => '节点状态
',
                'description' => '节点状态
',
                'type' => 'string',
                'enumValueTitles' => 
                array (
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
                ),
                'example' => 'Using',
              ),
              'ExpiredTime' => 
              array (
                'title' => '过期时间',
                'description' => '过期时间',
                'type' => 'string',
                'example' => '2022-06-23T16:00:00Z',
              ),
              'Networks' => 
              array (
                'title' => '网络信息',
                'description' => '网络信息',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'BondName' => 
                    array (
                      'title' => '网卡端口信息',
                      'description' => '网卡端口信息',
                      'type' => 'string',
                      'example' => 'Bond0',
                    ),
                    'Ip' => 
                    array (
                      'title' => '机器ip',
                      'description' => '机器ip',
                      'type' => 'string',
                      'example' => '47.254.235.44',
                    ),
                    'SubnetId' => 
                    array (
                      'title' => '集群子网id',
                      'description' => '集群子网id',
                      'type' => 'string',
                      'example' => 'vsw-uf68v51fldm5egmui5a6k',
                    ),
                    'VpdId' => 
                    array (
                      'title' => '集群网络id',
                      'description' => '集群网络id',
                      'type' => 'string',
                      'example' => 'vpd-xcuhjyrj',
                    ),
                  ),
                ),
              ),
              'ImageName' => 
              array (
                'title' => '镜像名称',
                'description' => '镜像名称',
                'type' => 'string',
                'example' => 'Centos7.9_all_0811',
              ),
              'HpnZone' => 
              array (
                'type' => 'string',
              ),
              'ResourceGroupId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AC4F0004-7BCE-52E0-891B-CAC7D64E3368\\",\\n  \\"NodeGroupName\\": \\"emr-default\\",\\n  \\"ClusterId\\": \\"i116913051662373010974\\",\\n  \\"ClusterName\\": \\"Standard_Cluster\\",\\n  \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n  \\"CreateTime\\": \\"2022-09-30T03:35:53Z\\",\\n  \\"NodeGroupId\\": \\"ng-ec3c96ff0aa4c60d\\",\\n  \\"Hostname\\": \\"31d38530-241e-11ed-bc63-acde48001122\\",\\n  \\"ImageId\\": \\"i190297201634099844192\\",\\n  \\"MachineType\\": \\"efg1.nvga1\\",\\n  \\"NodeId\\": \\"e01-cn-zvp2tgykr08\\",\\n  \\"Sn\\": \\"sag42ckf4jx\\",\\n  \\"OperatingState\\": \\"Using\\",\\n  \\"ExpiredTime\\": \\"2022-06-23T16:00:00Z\\",\\n  \\"Networks\\": [\\n    {\\n      \\"BondName\\": \\"Bond0\\",\\n      \\"Ip\\": \\"47.254.235.44\\",\\n      \\"SubnetId\\": \\"vsw-uf68v51fldm5egmui5a6k\\",\\n      \\"VpdId\\": \\"vpd-xcuhjyrj\\"\\n    }\\n  ],\\n  \\"ImageName\\": \\"Centos7.9_all_0811\\",\\n  \\"HpnZone\\": \\"\\",\\n  \\"ResourceGroupId\\": \\"\\"\\n}","type":"json"}]',
      'title' => '查询节点',
    ),
    'ListFreeNodes' => 
    array (
      'summary' => '查询未使用节点列表。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NextToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询凭证（Token），取值为上一次API调用返回的 NextToken 参数值。
',
            'description' => '查询凭证（Token），取值为上一次API调用返回的 NextToken 参数值。
',
            'type' => 'string',
            'required' => false,
            'example' => 'a3f2224a5ec7224116c4f5246120abe4',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分页查询时每页行数。最大值为100。

默认值：

•当不设置值或设置的值小于20时，默认值为20。

•当设置的值大于100时，默认值为100。',
            'description' => '分页查询时每页行数，默认值为20。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'MachineType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '机型',
            'description' => '机型',
            'type' => 'string',
            'required' => false,
            'example' => 'mock-machine-type2',
          ),
        ),
        3 => 
        array (
          'name' => 'HpnZone',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集群编号',
            'type' => 'string',
            'required' => false,
            'example' => 'A1',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源组id',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmxno4vh5muoq',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求id
',
                'description' => '请求id
',
                'type' => 'string',
                'example' => 'AA14CB86-70C4-5CB7-9E7B-6CCA77F3512B',
              ),
              'Nodes' => 
              array (
                'title' => '节点列表',
                'description' => '节点列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ZoneId' => 
                    array (
                      'title' => '可用区id',
                      'description' => '可用区id',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-j',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '1652321554',
                    ),
                    'NodeId' => 
                    array (
                      'title' => '节点id',
                      'description' => '节点id',
                      'type' => 'string',
                      'example' => 'e01-cn-7pp2x193801',
                    ),
                    'MachineType' => 
                    array (
                      'title' => '机型',
                      'description' => '机型',
                      'type' => 'string',
                      'example' => 'efg1.nvga1',
                    ),
                    'Sn' => 
                    array (
                      'title' => '机器sn',
                      'description' => '机器sn',
                      'type' => 'string',
                      'example' => 'sn_pozkHBgicd',
                    ),
                    'ExpiredTime' => 
                    array (
                      'title' => '机器过期时间',
                      'description' => '机器过期时间',
                      'type' => 'string',
                      'example' => '1673107200',
                    ),
                    'HpnZone' => 
                    array (
                      'description' => '集群编号',
                      'type' => 'string',
                      'example' => 'A1',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组id',
                      'type' => 'string',
                      'example' => 'rg-aekzkkbrpl4owgy',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'title' => '本次调用返回的查询凭证值。
',
                'description' => '本次调用返回的查询凭证值。
',
                'type' => 'string',
                'example' => 'a3f2224a5ec7224116c4f5246120abe4',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AA14CB86-70C4-5CB7-9E7B-6CCA77F3512B\\",\\n  \\"Nodes\\": [\\n    {\\n      \\"ZoneId\\": \\"cn-hangzhou-j\\",\\n      \\"CreateTime\\": \\"1652321554\\",\\n      \\"NodeId\\": \\"e01-cn-7pp2x193801\\",\\n      \\"MachineType\\": \\"efg1.nvga1\\",\\n      \\"Sn\\": \\"sn_pozkHBgicd\\",\\n      \\"ExpiredTime\\": \\"1673107200\\",\\n      \\"HpnZone\\": \\"A1\\",\\n      \\"ResourceGroupId\\": \\"rg-aekzkkbrpl4owgy\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"a3f2224a5ec7224116c4f5246120abe4\\"\\n}","type":"json"}]',
      'title' => '获取未使用节点列表',
    ),
    'RebootNodes' => 
    array (
      'summary' => '重启机器。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '集群id',
            'description' => '集群id',
            'type' => 'string',
            'required' => false,
            'example' => 'i15b480fbd2fcdbc2869cd80',
          ),
        ),
        1 => 
        array (
          'name' => 'Nodes',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '节点列表',
            'description' => '节点列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '节点id',
              'type' => 'string',
              'required' => false,
              'example' => 'i138475611663639202234',
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'IgnoreFailedNodeTasks',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否允许跳过失败节点，默认值为Flase',
            'description' => '是否允许跳过失败节点，默认值为False',
            'type' => 'boolean',
            'required' => false,
            'example' => 'False',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '4FD06DF0-9167-5C6F-A145-F30CA4A15D54',
              ),
              'TaskId' => 
              array (
                'title' => '任务id',
                'description' => '任务id',
                'type' => 'string',
                'example' => 'i158475611663639202234',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4FD06DF0-9167-5C6F-A145-F30CA4A15D54\\",\\n  \\"TaskId\\": \\"i158475611663639202234\\"\\n}","type":"json"}]',
      'title' => '重启机器',
    ),
    'ReimageNodes' => 
    array (
      'summary' => '机器重装。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '集群id
',
            'description' => '集群id
',
            'type' => 'string',
            'required' => false,
            'example' => 'i15dfa12e8f27c44f4a006c2c8bb',
          ),
        ),
        1 => 
        array (
          'name' => 'Nodes',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '节点列表',
            'description' => '节点列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Hostname' => 
                array (
                  'title' => '主机名',
                  'description' => '主机名',
                  'type' => 'string',
                  'required' => false,
                  'example' => '457db5ca-241d-11ed-9fd7-acde48001122',
                ),
                'LoginPassword' => 
                array (
                  'title' => '登录密码',
                  'description' => '登录密码',
                  'type' => 'string',
                  'required' => false,
                  'example' => '***',
                ),
                'NodeId' => 
                array (
                  'title' => '节点id
',
                  'description' => '节点id
',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'e01-cn-zvp2tgykr0b',
                ),
                'ImageId' => 
                array (
                  'title' => '系统镜像id',
                  'description' => '系统镜像id',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'm-8vbf8rpv2nn14y7oybjy',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'IgnoreFailedNodeTasks',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否允许跳过失败节点，默认值为Flase',
            'description' => '是否允许跳过失败节点，默认值为False',
            'type' => 'boolean',
            'required' => false,
            'example' => 'False
',
          ),
        ),
        3 => 
        array (
          'name' => 'UserData',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '用户自定义脚本，命令',
            'description' => '自定义数据',
            'type' => 'string',
            'required' => false,
            'example' => '#!/bin/sh
echo "Hello World. The time is now $(date -R)!" | tee /root/userdata_test.txt',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '15FBCD9B-C93F-54E8-A168-AADE7E66DAD2',
              ),
              'TaskId' => 
              array (
                'title' => '任务id',
                'description' => '任务id',
                'type' => 'string',
                'example' => 'i158782151663841517926',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"15FBCD9B-C93F-54E8-A168-AADE7E66DAD2\\",\\n  \\"TaskId\\": \\"i158782151663841517926\\"\\n}","type":"json"}]',
      'title' => '机器重装',
    ),
    'UntagResources' => 
    array (
      'summary' => '删除资源自定义标签。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'Node' => '节点',
              'Cluster' => '集群',
            ),
            'example' => 'Cluster',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源id列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源id',
              'type' => 'string',
              'required' => false,
              'example' => 'i15z93xkon193oaxf1ese8',
            ),
            'required' => true,
            'maxItems' => 51,
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域Id',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签键列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签键，最多20个子项',
              'type' => 'string',
              'required' => false,
              'example' => 'ac-cus-tag-0',
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        4 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否全部删除，只针对TagKey.N为空时有效。取值范围：

- True，全部删除
- False，不全部删除

默认是 False',
            'type' => 'boolean',
            'required' => false,
            'example' => 'False',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '81F648D0-5570-5351-AE98-6F501C7E957F',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred while processing your request',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'The operator is not permission for this operate	',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"81F648D0-5570-5351-AE98-6F501C7E957F\\"\\n}","type":"json"}]',
      'title' => '删除资源标签',
    ),
    'TagResources' => 
    array (
      'summary' => '资源打用户标签。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'Node' => '节点',
              'Cluster' => '集群',
            ),
            'example' => 'Cluster',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '资源id',
            'description' => '资源id列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源id',
              'type' => 'string',
              'required' => false,
              'example' => 'i-uf6dlxcxssr4cgpkoo85',
            ),
            'required' => true,
            'maxItems' => 51,
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域Id',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签',
            'description' => '标签',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'app',
                ),
                'Value' => 
                array (
                  'description' => '标签值',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'v3',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 21,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'E7BB53E1-0B08-5C4E-BA66-9225548C3151',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred while processing your request',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'The operator is not permission for this operate',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7BB53E1-0B08-5C4E-BA66-9225548C3151\\"\\n}","type":"json"}]',
      'title' => '资源打标签',
    ),
    'ListTagResources' => 
    array (
      'summary' => '查询资源标签。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'Node' => '节点',
              'Vcc' => '入云专线',
              'Cluster' => '集群',
              'Subnet' => '灵骏子网',
              'Vpd ' => '灵骏网段 ',
            ),
            'example' => 'Node',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源id列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源id',
              'type' => 'string',
              'required' => false,
              'example' => 'i1520224L16AY60305',
            ),
            'required' => true,
            'maxItems' => 51,
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域Id',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'PodName',
                ),
                'Value' => 
                array (
                  'description' => '标签值',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'WFT-OTC',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询凭证（Token），取值为上一次API调用返回的 NextToken 参数值',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAdQ3Z+oPlg49gsr2y8jb6wY=',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '8F208B6D-4C42-5FD3-B6BE-E826E92A44DD',
              ),
              'TagResources' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TagResource' => 
                  array (
                    'description' => '标签资源。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagKey' => 
                        array (
                          'description' => '标签键',
                          'type' => 'string',
                          'example' => 'env',
                        ),
                        'TagValue' => 
                        array (
                          'description' => '标签值',
                          'type' => 'string',
                          'example' => 'dev
',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '资源ID',
                          'type' => 'string',
                          'example' => 'i15azeddnvf7uhw2oij57o0',
                        ),
                        'ResourceType' => 
                        array (
                          'description' => '资源类型',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'Node' => '节点',
                            'Cluster' => '集群',
                          ),
                          'example' => 'Cluster
',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '下一页的NextToken，请求下一页时带上此返回值',
                'type' => 'string',
                'example' => 'AAAAAdQ3Z+oPlg49gsr2y8jb6wY=',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred while processing your request',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission	',
            'errorMessage' => 'The operator is not permission for this operate',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8F208B6D-4C42-5FD3-B6BE-E826E92A44DD\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"TagKey\\": \\"env\\",\\n        \\"TagValue\\": \\"dev\\\\n\\",\\n        \\"ResourceId\\": \\"i15azeddnvf7uhw2oij57o0\\",\\n        \\"ResourceType\\": \\"Cluster\\\\n\\"\\n      }\\n    ]\\n  },\\n  \\"NextToken\\": \\"AAAAAdQ3Z+oPlg49gsr2y8jb6wY=\\"\\n}","type":"json"}]',
      'title' => '查询资源标签',
    ),
    'DescribeZones' => 
    array (
      'summary' => '可用区列表。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '根据汉语、英语筛选返回结果。更多信息，请参见RFC7231。取值范围：

zh-CN
en-US
默认值：zh-CN',
            'description' => '根据汉语、英语筛选返回结果。更多信息，请参见RFC7231。取值范围：

zh-CN
en-US
默认值：zh-CN',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'en-US' => '英文',
              'zh-CN' => '中文',
            ),
            'example' => 'zh-CN',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => 'E9116F2D-82F8-501E-9ADB-2BE0C02B6A84',
              ),
              'Zones' => 
              array (
                'title' => '可用区列表',
                'description' => '可用区列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LocalName' => 
                    array (
                      'title' => '可用区名称',
                      'description' => '可用区名称',
                      'type' => 'string',
                      'example' => '杭州',
                    ),
                    'ZoneId' => 
                    array (
                      'title' => '可用区id
',
                      'description' => '可用区id
',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-i',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E9116F2D-82F8-501E-9ADB-2BE0C02B6A84\\",\\n  \\"Zones\\": [\\n    {\\n      \\"LocalName\\": \\"杭州\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-i\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询可用区列表',
    ),
    'DescribeTask' => 
    array (
      'summary' => '查询任务详情。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '任务id',
            'description' => '任务id',
            'type' => 'string',
            'required' => true,
            'example' => 'i156331731670384438138',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => 'A7FD7411-9395-52E8-AF42-EB3A4A55446D',
              ),
              'ClusterId' => 
              array (
                'title' => '集群id',
                'description' => '集群id',
                'type' => 'string',
                'example' => 'i119982311660892626523',
              ),
              'ClusterName' => 
              array (
                'title' => '集群名称',
                'description' => '集群名称',
                'type' => 'string',
                'example' => 'Standard_Cluster',
              ),
              'TaskState' => 
              array (
                'title' => '任务状态:waiting_to_run(等待执行)，running(执行)，execution_fail(执行失败)，execution_success（执行成功）',
                'description' => '任务状态',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'running' => '执行中',
                  'execution_success' => '执行成功',
                  'execution_fail' => '执行失败',
                  'waiting_to_run' => '等待执行',
                ),
                'example' => 'running',
              ),
              'TaskType' => 
              array (
                'title' => '任务类型',
                'description' => '任务类型',
                'type' => 'string',
                'enumValueTitles' => 
                array (
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
                ),
                'example' => 'cut_cluster',
              ),
              'Message' => 
              array (
                'title' => '任务失败信息',
                'description' => '任务失败信息',
                'type' => 'string',
                'example' => 'Releasing [prod_main_mid_26e234cf] in region [cn-beijing] with weight [0]',
              ),
              'Steps' => 
              array (
                'title' => '执行步骤',
                'description' => '执行步骤',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'StepName' => 
                    array (
                      'title' => '步骤名称',
                      'description' => '步骤名称',
                      'type' => 'string',
                      'example' => 'create_vpd',
                    ),
                    'StepState' => 
                    array (
                      'title' => '步骤执行状态',
                      'description' => '步骤执行状态',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'execution_success' => '执行成功',
                        'execution_failed' => '执行失败',
                      ),
                      'example' => 'execution_success',
                    ),
                    'StepType' => 
                    array (
                      'title' => '步骤类型',
                      'description' => '步骤类型',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'normal' => '普通类型，有且只有一个后继step',
                        'dispersive' => '发散类型，有多个后继step',
                      ),
                      'example' => 'normal',
                    ),
                    'SubTasks' => 
                    array (
                      'title' => '子任务',
                      'description' => '子任务',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TaskId' => 
                          array (
                            'title' => '任务id',
                            'description' => '任务id',
                            'type' => 'string',
                            'example' => 'i158805051661047928377',
                          ),
                          'TaskType' => 
                          array (
                            'title' => '任务类型',
                            'description' => '任务类型',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
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
                            ),
                            'example' => 'cut_node_sub_task',
                          ),
                          'CreateTime' => 
                          array (
                            'title' => '创建时间',
                            'description' => '创建时间',
                            'type' => 'string',
                            'example' => '2022-11-30T2:00:00.852Z',
                          ),
                          'UpdateTime' => 
                          array (
                            'title' => '更新时间',
                            'description' => '更新时间',
                            'type' => 'string',
                            'example' => '2022-11-30T02:20:14.852Z',
                          ),
                          'Message' => 
                          array (
                            'title' => '子任务失败信息',
                            'description' => '子任务失败信息',
                            'type' => 'string',
                            'example' => 'Releasing [prod_main_mid_26e234cf] in region [cn-beijing] with weight [0]',
                          ),
                          'TaskState' => 
                          array (
                            'title' => '任务执行状态',
                            'description' => '任务执行状态',
                            'type' => 'string',
                            'example' => 'running',
                          ),
                        ),
                      ),
                    ),
                    'StageTag' => 
                    array (
                      'title' => '阶段标记',
                      'description' => '阶段标记',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
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
                      ),
                      'example' => '节点缩容',
                    ),
                    'Message' => 
                    array (
                      'title' => '步骤失败信息',
                      'description' => '步骤失败信息',
                      'type' => 'string',
                      'example' => 'get taskinfo failed',
                    ),
                    'StartTime' => 
                    array (
                      'title' => '开始时间',
                      'description' => '开始时间',
                      'type' => 'string',
                      'example' => '2022-11-30T2:00:00.852Z',
                    ),
                    'UpdateTime' => 
                    array (
                      'title' => '更新时间',
                      'description' => '更新时间',
                      'type' => 'string',
                      'example' => '2022-11-30T02:20:14.852Z',
                    ),
                  ),
                ),
              ),
              'CreateTime' => 
              array (
                'title' => '开始时间',
                'description' => '开始时间',
                'type' => 'string',
                'example' => '2022-11-30T02:00:00.852Z',
              ),
              'UpdateTime' => 
              array (
                'title' => '更新时间',
                'description' => '更新时间',
                'type' => 'string',
                'example' => '2022-11-30T03:40:14.852Z',
              ),
              'NodeIds' => 
              array (
                'title' => '节点ID列表',
                'description' => '节点ID列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '节点ID列表',
                  'type' => 'string',
                  'example' => '[\'mock-sn-200101\']',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A7FD7411-9395-52E8-AF42-EB3A4A55446D\\",\\n  \\"ClusterId\\": \\"i119982311660892626523\\",\\n  \\"ClusterName\\": \\"Standard_Cluster\\",\\n  \\"TaskState\\": \\"running\\",\\n  \\"TaskType\\": \\"cut_cluster\\",\\n  \\"Message\\": \\"Releasing [prod_main_mid_26e234cf] in region [cn-beijing] with weight [0]\\",\\n  \\"Steps\\": [\\n    {\\n      \\"StepName\\": \\"create_vpd\\",\\n      \\"StepState\\": \\"execution_success\\",\\n      \\"StepType\\": \\"normal\\",\\n      \\"SubTasks\\": [\\n        {\\n          \\"TaskId\\": \\"i158805051661047928377\\",\\n          \\"TaskType\\": \\"cut_node_sub_task\\",\\n          \\"CreateTime\\": \\"2022-11-30T2:00:00.852Z\\",\\n          \\"UpdateTime\\": \\"2022-11-30T02:20:14.852Z\\",\\n          \\"Message\\": \\"Releasing [prod_main_mid_26e234cf] in region [cn-beijing] with weight [0]\\",\\n          \\"TaskState\\": \\"running\\"\\n        }\\n      ],\\n      \\"StageTag\\": \\"节点缩容\\",\\n      \\"Message\\": \\"get taskinfo failed\\",\\n      \\"StartTime\\": \\"2022-11-30T2:00:00.852Z\\",\\n      \\"UpdateTime\\": \\"2022-11-30T02:20:14.852Z\\"\\n    }\\n  ],\\n  \\"CreateTime\\": \\"2022-11-30T02:00:00.852Z\\",\\n  \\"UpdateTime\\": \\"2022-11-30T03:40:14.852Z\\",\\n  \\"NodeIds\\": [\\n    \\"[\'mock-sn-200101\']\\"\\n  ]\\n}","type":"json"}]',
      'title' => '查询任务信息',
    ),
    'DescribeRegions' => 
    array (
      'summary' => '查询地域信息列表。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '根据汉语、英语和日语筛选返回结果。更多信息，请参见RFC7231。取值范围：

zh-CN
en-US
默认值：zh-CN',
            'description' => '根据汉语、英语和日语筛选返回结果。更多信息，请参见RFC7231。取值范围：

zh-CN
en-US
默认值：zh-CN',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'en-US' => '英文',
              'zh-CN' => '中文',
            ),
            'example' => 'zh-CN',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '1D2FBB36-C39B-5EBB-9928-FCC1A236D65D',
              ),
              'Regions' => 
              array (
                'description' => '地域信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LocalName' => 
                    array (
                      'title' => '区域名称',
                      'description' => '区域名称',
                      'type' => 'string',
                      'example' => '杭州',
                    ),
                    'RegionId' => 
                    array (
                      'title' => '区域id',
                      'description' => '区域id',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1D2FBB36-C39B-5EBB-9928-FCC1A236D65D\\",\\n  \\"Regions\\": [\\n    {\\n      \\"LocalName\\": \\"杭州\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询地域列表',
    ),
    'ChangeResourceGroup' => 
    array (
      'summary' => '资源转组。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '资源Id',
            'description' => '资源Id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'i118099391667548921125',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '地域Id',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '目标资源组',
            'description' => '目标资源组',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-aekzyqdwnfabx6q',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '8F065DDD-6996-5973-9691-9EC57BD0072E',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission.ChangeResourceGroup',
            'errorMessage' => 'You are not authorized to change resourcegroup',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter.ResourceRegionId',
            'errorMessage' => 'The ResourceRegionId parameters that are required for processing this request are missing',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParameter.ResourceId',
            'errorMessage' => 'The ResourceId parameters that are required for processing this request are missing',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter.ResourceGroupId',
            'errorMessage' => 'The ResourceGroupId parameters that are required for processing this request are missing',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidResourceGroup',
            'errorMessage' => 'The specified ResourceGroupId is invalid',
          ),
          5 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred while processing your request',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceNotFound',
            'errorMessage' => ' The specified resource is not found',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8F065DDD-6996-5973-9691-9EC57BD0072E\\"\\n}","type":"json"}]',
      'title' => '资源转组',
    ),
    'ApproveOperation' => 
    array (
      'summary' => '审批运维操作。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NodeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '节点id',
            'type' => 'string',
            'required' => false,
            'example' => 'e01-cn-zvp2tgykr08',
          ),
        ),
        1 => 
        array (
          'name' => 'OperationType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '运维类型',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'RepairMachine' => 'RepairMachine',
            ),
            'example' => 'RepairMachine',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '8F065DDD-6996-5973-9691-9EC57BD0072E',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'Resource not found',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8F065DDD-6996-5973-9691-9EC57BD0072E\\",\\n  \\"ErrorMessage\\": \\"Resource not found\\"\\n}","type":"json"}]',
      'title' => '审批运维操作',
    ),
    'StopInvocation' => 
    array (
      'summary' => '停止运维助手命令进程。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InvokeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命令执行ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'f-hz044748dzepds0',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeIdList',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '节点列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '灵骏节点ID。',
              'type' => 'string',
              'required' => false,
              'example' => '\'i-bp1cfrqj4pztngvlq7la\'',
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'A7FD7411-9395-52E8-AF42-EB3A4A55446D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A7FD7411-9395-52E8-AF42-EB3A4A55446D\\"\\n}","type":"json"}]',
      'title' => '停止运维命令',
    ),
    'RunCommand' => 
    array (
      'summary' => '一台或多台灵骏机器中执行一段Shell的脚本。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命令名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'testName',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命令描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'testDescription',
          ),
        ),
        2 => 
        array (
          'name' => 'CommandContent',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命令内容。您需要注意：

- 指定参数`EnableParameter=true`可在命令内容中启用自定义参数功能：
- 用{{}}包含的方式定义自定义参数，在`{{}}`内参数名前后的空格以及换行符会被忽略。
- 自定义参数个数不能超过20个。
- 自定义参数名允许a-zA-Z0-9-_的组合，不支持其余字符，参数名不区分大小写。
- 单个自定义参数名不能超过64字节。',
            'type' => 'string',
            'required' => true,
            'example' => 'ZWNobyAxMjM=',
          ),
        ),
        3 => 
        array (
          'name' => 'Timeout',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '执行命令的超时时间，单位：秒。当因为进程原因、缺失模块、缺失云助手Agent等原因无法运行命令时，会出现超时现象。超时后，会强制终止命令进程。默认值：60。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3600
',
          ),
        ),
        4 => 
        array (
          'name' => 'WorkingDir',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '您可自定义命令的执行路径。默认路径如下：

- Linux实例：执行路径默认在管理员root用户的/home目录下。',
            'type' => 'string',
            'required' => false,
            'example' => '/home/user',
          ),
        ),
        5 => 
        array (
          'name' => 'EnableParameter',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命令中是否包含自定义参数。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'ContentEncoding',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '脚本内容的编码方式。取值范围：

- PlainText：不编码，采用明文传输。
- Base64：Base64编码。

默认值：PlainText。乱填或错填时，该取值会当作PlainText处理。',
            'type' => 'string',
            'required' => false,
            'example' => 'Base64',
          ),
        ),
        7 => 
        array (
          'name' => 'Username',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '在实例中执行命令的用户名称。长度不得超过255个字符。
    Linux系统的实例，默认以root用户执行命令',
            'type' => 'string',
            'required' => false,
            'example' => 'root',
          ),
        ),
        8 => 
        array (
          'name' => 'NodeIdList',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '节点列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '节点id。',
              'type' => 'string',
              'required' => false,
              'example' => '"i-bp185dy2o3o6neg****"',
            ),
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'RepeatMode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设置命令执行的方式。取值范围：

- Once：立即执行命令。
- Period：定时执行命令。当该参数取值为`Period`时，必须同时指定`Frequency`参数。
- NextRebootOnly：当实例下一次启动时，自动执行命令。
- EveryReboot：实例每一次启动都将自动执行命令。

默认值：
- 当不指定`Frequency`参数时，默认值为`Once`。
- 当指定`Frequency`参数时，无论是否已设置了该参数值，都将按照`Period`处理。',
            'type' => 'string',
            'required' => false,
            'example' => 'Once',
          ),
        ),
        10 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见如何保证幂等性。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        11 => 
        array (
          'name' => 'Frequency',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '定时执行命令的执行时间。目前支持三种定时执行方式：固定时间间隔执行（基于Rate表达式）、仅在指定时间执行一次、基于时钟定时执行（基于Cron表达式）。

固定时间间隔执行：基于Rate表达式，按照设置的时间间隔执行命令。时间间隔支持按秒（s） 、分钟（m） 、小时（h）和天（d）来选择，适用于在固定时间间隔执行任务的场景。格式为rate(<执行间隔数值><执行间隔单位>)，如5分钟执行一次，格式为rate(5m)。使用固定时间间隔执行有以下限制：
设置的时间间隔不大于7天、不小于60秒，且需大于定时任务的超时时间。
执行间隔只基于固定频率，与任务实际执行需要的时间无关。例如设置每5分钟执行一次命令，任务需要2分钟执行完成，则在任务完成3分钟后继续执行下一轮。
创建任务时不会立即执行。例如设置每5分钟执行一次命令，创建任务时不会立即执行一次命令，而是在任务创建完成后的5分钟后开始执行。
仅在指定时间执行一次：按照设置的时区和执行时间点执行一次命令。格式为at(yyyy-MM-dd HH:mm:ss <时区>)，即at(年-月-日 时:分:秒 <时区>)。如果不指定时区，默认为UTC时区。时区支持以下三种形式：
时区全称： 如Asia/Shanghai（中国/上海时间）、America/Los_Angeles（美国/洛杉矶时间）等。
时区相对于格林威治时间的偏移量： 如GMT+8:00（东八区）、GMT-7:00（西七区）等。使用GMT格式时，小时位不支持添加前导零。
时区缩写： 仅支持UTC（协调世界时间）。

如果指定在中国/上海时间2022年06月06日13时15分30秒执行一次，格式为：at(2022-06-06 13:15:30 Asia/Shanghai)；如果指定在西七区2022年06月06日13时15分30秒执行一次，格式为：at(2022-06-06 13:15:30 GMT-7:00)。

基于时钟定时执行（基于Cron表达式）：基于Cron表达式，按照设置的定时任务执行命令。格式为<秒> <分钟> <小时> <日期> <月份> <星期> <年份（可选）> <时区>，即<Cron表达式> <时区>。在指定的时区下，根据Cron表达式推算定时任务执行时间并执行。若不指定时区，默认为执行定时任务实例的系统内部时区。关于Cron表达式的更多信息，请参见Cron表达式。时区支持以下三种形式：
时区全称： 如Asia/Shanghai（中国/上海时间）、America/Los_Angeles（美国/洛杉矶时间）等。
时区相对于格林威治时间的偏移量： 如GMT+8:00（东八区）、GMT-7:00（西七区）等。使用GMT格式时，小时位不支持添加前导零。
时区缩写： 仅支持UTC（协调世界时间）。

例如，在中国/上海时间，2022年每天上午10:15执行一次命令，格式为0 15 10 ? * * 2022 Asia/Shanghai；在东八区时间，2022年每天上午10:00到11:30每隔半小时执行，格式为0 0/30 10-11 * * ? 2022 GMT+8:00；在UTC时间，从2022年开始，每隔两年的10月每天下午14:00到下午14:55时间段内每隔5分钟执行，格式为0 0/5 14 * 10 ? 2022/2 UTC。',
            'type' => 'string',
            'required' => false,
            'example' => '0 */20 * * * ?',
          ),
        ),
        12 => 
        array (
          'name' => 'Parameters',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '命令中包含自定义参数时，执行命令时传入的自定义参数的键值对。例如，命令内容为`echo {{name}}`，则可以通过`Parameter`参数传入键值对`{"name":"Jack"}`。自定义参数将自动替换变量值`name`，得到一条新的命令，实际执行的是`echo Jack`。

自定义参数的个数范围为0~10，且您需要注意：

- 键不允许为空字符串，最多支持64个字符。
- 值允许为空字符串。
- 自定义参数与原始命令内容在Base64编码后，若保存命令，命令内容在Base64编码后的大小不能超过18 KB；若不保存命令，命令内容在Base64编码后的大小不能超过24 KB。您可通过`KeepCommand`设置是否保留命令。
- 设置的自定义参数名集合必须为创建命令时定义的参数集的子集。对于未传入的参数，您可以使用空字符串代替。

默认值为空，表示取消设置该参数从而禁用自定义参数。',
            'type' => 'object',
            'required' => false,
            'example' => '{"name":"Jack", "accessKey":"LTAIdyvdIqaRY****"}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '2FE2B22C-CF9D-59DE-BF63-DC9B9B33A9D1',
              ),
              'InvokeId' => 
              array (
                'description' => '命令执行ID。',
                'type' => 'string',
                'example' => 't-7d2a745b412b4601b2d47f6a768d*',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2FE2B22C-CF9D-59DE-BF63-DC9B9B33A9D1\\",\\n  \\"InvokeId\\": \\"t-7d2a745b412b4601b2d47f6a768d*\\"\\n}","type":"json"}]',
      'title' => '一台或多台灵骏机器中执行一段Shell的脚本',
    ),
    'DescribeInvocations' => 
    array (
      'summary' => '查询运维助手命令的执行列表和状态。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InvokeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '命令执行ID',
            'description' => '命令执行ID',
            'type' => 'string',
            'required' => true,
            'example' => 't-cd03crwys0lrls0',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'e01-cn-zvp2tgykr08',
          ),
        ),
        2 => 
        array (
          'name' => 'IncludeOutput',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否在结果中返回命令运行的输出信息。

- true：返回。此时，您至少指定参数`InvokeId`或`InstanceId`。
- false：不返回。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'ContentEncoding',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设置返回数据中`CommandContent`字段和`Output`字段的编码方式。取值范围：

- PlainText：返回原始命令内容和输出信息。
- Base64：返回Base64编码后的命令内容和输出信息。

默认值：Base64。',
            'type' => 'string',
            'required' => false,
            'example' => 'PlainText',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '4FD06DF0-9167-5C6F-A145-F30CA4A15D54',
              ),
              'Invocations' => 
              array (
                'description' => '脚本执行记录对象。',
                'type' => 'object',
                'properties' => 
                array (
                  'Invocation' => 
                  array (
                    'description' => '文件下发记录。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreationTime' => 
                        array (
                          'description' => '任务的创建时间。',
                          'type' => 'string',
                          'example' => '2020-01-19T09:15:46Z',
                        ),
                        'Frequency' => 
                        array (
                          'description' => '定时执行命令的执行时间。',
                          'type' => 'string',
                          'example' => '0 */20 * * * *',
                        ),
                        'InvocationStatus' => 
                        array (
                          'description' => '命令执行的总执行状态，总执行状态取决于本次调用的全部实例的共同执行状态，可能值：
- Pending：系统正在校验或发送命令。存在至少一台实例的命令执行状态为Pending，则总执行状态为Pending。
- Scheduled：定时执行的命令已发送，等待运行。存在至少一台实例的命令执行状态为Scheduled，则总执行状态为Scheduled。
- Running：命令正在实例上运行。存在至少一台实例的命令执行状态为Running，则总执行状态为Running。
- Success：各个实例上的命令执行状态均为Stopped或Success，且至少一个实例的命令执行状态是Success，则总执行状态为Success。
    - 立即运行的任务：命令执行完成，且退出码为0。
    - 定时运行的任务：最近一次执行成功且退出码为0，且指定的时间已全部完成。
- Failed：各个实例上的命令执行状态均为Stopped或Failed，则总执行状态为Failed。实例上的命令执行状态一项或多项为以下状态时，返回值均为Failed状态：
    - 命令校验失败（Invalid）。
    - 命令发送失败（Aborted）。
    - 命令执行完成但退出码非0（Failed）。
    - 命令执行超时（Timeout）。
    - 命令执行异常（Error）。
- Stopping：正在停止任务。存在至少一台实例的命令执行状态为Stopping，则总执行状态为Stopping。
- Stopped：任务已停止。所有实例的命令执行状态是Stopped，则总执行状态为Stopped。实例上的命令执行状态为以下状态时，返回值均为Stopped状态：
    - 任务已取消（Cancelled）。
    - 任务已终止（Terminated）。
- PartialFailed：部分实例执行成功且部分实例执行失败。各个实例的命令执行状态均为Success、Failed或Stopped，则总执行状态为PartialFailed。

> 返回参数中的`InvokeStatus`与该参数意义相似，但建议您查看该返回值。
',
                          'type' => 'string',
                          'example' => 'Success',
                        ),
                        'RepeatMode' => 
                        array (
                          'description' => '命令执行的方式。可能值：

Once：立即执行命令。
Period：定时执行命令。
NextRebootOnly：当实例下一次启动时，自动执行命令。
EveryReboot：实例每一次启动都将自动执行命令。',
                          'type' => 'string',
                          'example' => 'Once',
                        ),
                        'InvokeStatus' => 
                        array (
                          'description' => '命令执行的总执行状态。总执行状态取决于创建执行中的一台或多台实例的共同执行状态。取值范围： 
         
- Running：
    - 定时执行：未手动停止定时执行命令前，执行状态一直为进行中。
    - 单次执行：一旦有进行中的命令进程，总的执行状态就为进行中。
- Finished：
    - 定时执行：命令进程不可能为执行完成。
    - 单次执行：所有实例全部完成执行。或者手动停止部分实例的命令进程，其余实例全部执行完成。
- Failed：
    - 定时执行：命令进程不可能为执行失败。
    - 单次执行：所有实例全部执行失败。
- Stopped：停止命令。
- Stopping：停止中。
- PartialFailed：部分失败；如果同时设置了`InstanceId`参数，则不生效。',
                          'type' => 'string',
                          'example' => 'Running',
                        ),
                        'Parameters' => 
                        array (
                          'description' => '命令中的自定义参数。',
                          'type' => 'string',
                          'example' => '{}',
                        ),
                        'CommandContent' => 
                        array (
                          'description' => '命令内容。

- 若ContentEncoding指定PlainText，返回原始脚本内容。
- 若ContentEncoding指定Base64，返回Base64编码后的脚本内容。',
                          'type' => 'string',
                          'example' => 'cnBtIC1xYSB8IGdyZXAgdnNm****',
                        ),
                        'CommandName' => 
                        array (
                          'description' => '命令名称。',
                          'type' => 'string',
                          'example' => 'CommandTestName',
                        ),
                        'CommandDescription' => 
                        array (
                          'description' => '命令描述。',
                          'type' => 'string',
                          'example' => 'testDescription',
                        ),
                        'InvokeId' => 
                        array (
                          'description' => '命令执行ID。',
                          'type' => 'string',
                          'example' => 't-ind3k9ytvvduoe8',
                        ),
                        'Username' => 
                        array (
                          'description' => '执行命令的用户名称。',
                          'type' => 'string',
                          'example' => 'root',
                        ),
                        'WorkingDir' => 
                        array (
                          'description' => '命令在实例中的运行目录。',
                          'type' => 'string',
                          'example' => '/home',
                        ),
                        'Timeout' => 
                        array (
                          'description' => '执行命令的超时时间，单位：秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '60',
                        ),
                        'InvokeNodes' => 
                        array (
                          'description' => '命令执行记录',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'InvokeNode' => 
                            array (
                              'description' => '节点命令执行记录',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'CreationTime' => 
                                  array (
                                    'description' => '命令执行的开始时间。',
                                    'type' => 'string',
                                    'example' => '2023-02-06T07:12:50Z',
                                  ),
                                  'UpdateTime' => 
                                  array (
                                    'description' => '更新时间',
                                    'type' => 'string',
                                    'example' => '2023-02-06T07:12:50Z',
                                  ),
                                  'FinishTime' => 
                                  array (
                                    'description' => '结束完成时间。',
                                    'type' => 'string',
                                    'example' => '2023-02-06T07:12:50Z',
                                  ),
                                  'InvocationStatus' => 
                                  array (
                                    'description' => '单台实例的命令进度状态，可能值：
-  Pending：系统正在校验或发送命令。
-  Invalid：指定命令类型或参数有误。
-  Aborted：向实例发送命令失败。实例必须在运行中，且命令可以1分钟内发送完成。
-  Running：命令正在实例上运行。
-  Success：
    -  单次执行的命令：命令执行完成，且退出码为0。
    -  周期执行的命令：上一次运行成功且退出码为0，且指定的周期已结束。
-  Failed：
    -  单次执行的命令：命令执行完成，且退出码非0。
    -  周期执行的命令：上一次运行成功且退出码非0，且指定的周期将中止。
-  Error：命令执行时发生异常无法继续。
-  Timeout：命令执行超时。
-  Cancelled：命令的执行动作已经取消，命令未曾启动。
-  Stopping：正在停止任务。
-  Terminated：命令运行时被终止。
-  Scheduled：
    -  单次执行的命令：不适用，不会出现。
    -  周期执行的命令：等待运行。',
                                    'type' => 'string',
                                    'example' => 'Pending',
                                  ),
                                  'Repeats' => 
                                  array (
                                    'description' => '命令在该实例上执行的次数。
-  若执行方式为单次执行，则值为0或1。
-  若执行方式为定时执行，则值为执行过多少次。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '0',
                                  ),
                                  'NodeId' => 
                                  array (
                                    'description' => '节点id',
                                    'type' => 'string',
                                    'example' => 'e01-cn-lbj36wkp70b',
                                  ),
                                  'Output' => 
                                  array (
                                    'description' => '命令的输出信息。

若ContentEncoding指定PlainText，返回原始输出信息。
若ContentEncoding指定Base64，返回Base64编码后的输出信息。',
                                    'type' => 'string',
                                    'example' => 'OutPutTestmsg',
                                  ),
                                  'Dropped' => 
                                  array (
                                    'description' => 'Output字段中文字长度超出24 KB后，截断丢弃的文字长度。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '0',
                                  ),
                                  'StopTime' => 
                                  array (
                                    'description' => '若调用了StopInvocation以停止命令执行，表示调用的时间。',
                                    'type' => 'string',
                                    'example' => '2019-12-20T06:15:55Z	
',
                                  ),
                                  'ExitCode' => 
                                  array (
                                    'description' => '命令进程的退出代码。可能值：

Linux实例为Shell进程的退出码。
Windows实例为Bat或者PowerShell进程的退出码。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '0',
                                  ),
                                  'StartTime' => 
                                  array (
                                    'description' => '开始时间',
                                    'type' => 'string',
                                    'example' => '2019-12-20T06:15:55Z',
                                  ),
                                  'ErrorInfo' => 
                                  array (
                                    'description' => '命令的下发失败或执行失败原因的详情，可能值：
- 空：命令执行正常。
- the specified node does not exists：指定的实例不存在或已释放。
- the node has node when create task：执行命令期间，该实例被释放。
- the node is not running when create task：命令执行时，该实例不在运行中。
- the command is not applicable：命令不适用于指定的实例。
- the specified account does not exists：指定的账号不存在。
- the specified directory does not exists：指定的目录不存在。
- the cron job expression is invalid：指定的执行时间表达式不合法。
- the aliyun service is not running on the instance：云助手Agent未运行。
- the aliyun service in the instance does not response：云助手Agent无响应。
- the aliyun service in the node is upgrading now：云助手Agent正在升级中。
- the aliyun service in the node need upgrade：云助手Agent需要升级。
- the command delivery has been timeout：发送命令超时。
- the command execution has been timeout：命令执行超时。
- the command execution got an exception：命令执行发生异常。
- the command execution has been interrupted：命令执行被中断。
- the command execution exit code is not zero：命令执行结束，退出码非0。
- the specified node has been released：下发文件期间，该实例被释放。',
                                    'type' => 'string',
                                    'example' => 'the specified node does not exists',
                                  ),
                                  'Timed' => 
                                  array (
                                    'description' => '查询的命令是否在将来会自动执行。取值范围：

- true：查询在调用`RunCommand`或`InvokeCommand`执行命令时，`RepeatMode`参数取值为`Period`、`NextRebootOnly`或者`EveryReboot`。
- false：查询以下两种状态的命令。
    - 在调用`RunCommand`或`InvokeCommand`执行命令时，`RepeatMode`参数取值为`Once`。
    - 已被取消、被停止或者已完成执行的命令。

默认值：false。',
                                    'type' => 'string',
                                    'example' => 'false',
                                  ),
                                  'ErrorCode' => 
                                  array (
                                    'description' => '文件下发的失败原因代码。可能值：

空：文件下发正常。
NodeNotExists：指定的实例不存在或已释放。
NodeReleased：下发文件期间，该实例被释放。
NodeNotRunning：创建下发文件任务时，该实例不在运行中。
AccountNotExists：指定的账号不存在。
ClientNotRunning：云助手Agent未运行。
ClientNotResponse：云助手Agent无响应。
ClientIsUpgrading：云助手Agent正在升级中。
ClientNeedUpgrade：云助手Agent需要升级。
DeliveryTimeout：发送文件超时。
FileCreateFail：文件创建失败。
FileAlreadyExists：相同路径下存在同名文件。
FileContentInvalid：文件内容不合法。
FileNameInvalid：文件名不合法。
FilePathInvalid：文件路径不合法。
FileAuthorityInvalid：文件权限不合法。
UserGroupNotExists：发送文件时指定的用户组不存在。',
                                    'type' => 'boolean',
                                    'example' => ' NodeNotExists：',
                                  ),
                                  'NodeInvokeStatus' => 
                                  array (
                                    'description' => '单台实例的命令进度状态。',
                                    'type' => 'string',
                                    'example' => 'Finished',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4FD06DF0-9167-5C6F-A145-F30CA4A15D54\\",\\n  \\"Invocations\\": {\\n    \\"Invocation\\": [\\n      {\\n        \\"CreationTime\\": \\"2020-01-19T09:15:46Z\\",\\n        \\"Frequency\\": \\"0 */20 * * * *\\",\\n        \\"InvocationStatus\\": \\"Success\\",\\n        \\"RepeatMode\\": \\"Once\\",\\n        \\"InvokeStatus\\": \\"Running\\",\\n        \\"Parameters\\": \\"{}\\",\\n        \\"CommandContent\\": \\"cnBtIC1xYSB8IGdyZXAgdnNm****\\",\\n        \\"CommandName\\": \\"CommandTestName\\",\\n        \\"CommandDescription\\": \\"testDescription\\",\\n        \\"InvokeId\\": \\"t-ind3k9ytvvduoe8\\",\\n        \\"Username\\": \\"root\\",\\n        \\"WorkingDir\\": \\"/home\\",\\n        \\"Timeout\\": 60,\\n        \\"InvokeNodes\\": {\\n          \\"InvokeNode\\": [\\n            {\\n              \\"CreationTime\\": \\"2023-02-06T07:12:50Z\\",\\n              \\"UpdateTime\\": \\"2023-02-06T07:12:50Z\\",\\n              \\"FinishTime\\": \\"2023-02-06T07:12:50Z\\",\\n              \\"InvocationStatus\\": \\"Pending\\",\\n              \\"Repeats\\": 0,\\n              \\"NodeId\\": \\"e01-cn-lbj36wkp70b\\",\\n              \\"Output\\": \\"OutPutTestmsg\\",\\n              \\"Dropped\\": 0,\\n              \\"StopTime\\": \\"2019-12-20T06:15:55Z\\\\t\\\\n\\",\\n              \\"ExitCode\\": 0,\\n              \\"StartTime\\": \\"2019-12-20T06:15:55Z\\",\\n              \\"ErrorInfo\\": \\"the specified node does not exists\\",\\n              \\"Timed\\": \\"false\\",\\n              \\"ErrorCode\\": true,\\n              \\"NodeInvokeStatus\\": \\"Finished\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询命令的执行列表和状态',
    ),
    'DescribeSendFileResults' => 
    array (
      'summary' => '查询运维助手下发文件列表及状态。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InvokeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命令执行ID。',
            'type' => 'string',
            'required' => true,
            'example' => 't-bj038i0d6r8zoqo',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '节点ID',
            'type' => 'string',
            'required' => false,
            'example' => 'e01-cn-zvp2tgykr08',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '4FD06DF0-9167-5C6F-A145-F30CA4A15D54',
              ),
              'TotalCount' => 
              array (
                'description' => '命令总个数。',
                'type' => 'string',
                'example' => '1',
              ),
              'Invocations' => 
              array (
                'description' => '文件下发记录。',
                'type' => 'object',
                'properties' => 
                array (
                  'Invocation' => 
                  array (
                    'description' => '命令执行ID。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FileMode' => 
                        array (
                          'description' => '文件的权限。',
                          'type' => 'string',
                          'example' => '0644',
                        ),
                        'Overwrite' => 
                        array (
                          'description' => '如果同名文件在目标目录已存在，是否覆盖文件。
- true：覆盖。
- false：不覆盖。

默认值为false。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'InvocationStatus' => 
                        array (
                          'description' => '文件的总下发状态。总状态取决于本次下发的全部实例的共同执行状态，可能值：

- Pending：系统正在校验或下发文件。存在至少一台实例的文件下发状态为Pending，则总执行状态为Pending。
- Running：正在实例上下发文件。存在至少一台实例的文件下发状态为Running，则总执行状态为Running。
- Success：各个实例上的文件下发状态均为Success，则总执行状态为Success。
- Failed：各个实例上的文件下发状态均为Failed，则总执行状态为Failed。实例上的文件下发状态一项或多项为以下状态时，返回值均为Failed状态：
    - 指定文件参数有误，校验失败（Invalid）。
    - 向实例下发文件失败（Aborted）。
    - 文件在实例内创建失败（Failed）。
    - 下发文件超时（Timeout）。
    - 下发文件时发生异常无法继续（Error）。
- PartialFailed：部分实例文件下发成功且部分实例下发失败。各个实例的文件下发状态均为Success或Failed，则总执行状态为PartialFailed。',
                          'type' => 'string',
                          'example' => 'Pending',
                        ),
                        'Description' => 
                        array (
                          'description' => '命令描述。',
                          'type' => 'string',
                          'example' => '描述信息。',
                        ),
                        'ContentType' => 
                        array (
                          'description' => '文件内容类型。

PlainText：普通文本。
Base64：Base64编码。
默认值为PlainText。',
                          'type' => 'string',
                          'example' => 'PlainText',
                        ),
                        'NodeCount' => 
                        array (
                          'description' => '节点数量',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'TargetDir' => 
                        array (
                          'description' => '目标路径。',
                          'type' => 'string',
                          'example' => '	/home/user',
                        ),
                        'FileGroup' => 
                        array (
                          'description' => '文件的用户组。',
                          'type' => 'string',
                          'example' => 'root',
                        ),
                        'FileOwner' => 
                        array (
                          'description' => '文件的用户。',
                          'type' => 'string',
                          'example' => 'root',
                        ),
                        'Name' => 
                        array (
                          'description' => '文件下发名称',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'Content' => 
                        array (
                          'description' => '命令执行后的输出信息。

若ContentEncoding指定PlainText，返回原始输出信息。
若ContentEncoding指定Base64，返回Base64编码后的输出信息。',
                          'type' => 'string',
                          'example' => 'Base64',
                        ),
                        'CreationTime' => 
                        array (
                          'description' => '下发创建时间',
                          'type' => 'string',
                          'example' => '2023-04-10T10:53:46.156+08:00
',
                        ),
                        'InvokeNodes' => 
                        array (
                          'description' => '文件下发记录',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'InvokeNode' => 
                            array (
                              'description' => '节点文件下发记录',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'InvocationStatus' => 
                                  array (
                                    'description' => '单台实例下发任务的状态，可能值：
- Pending：系统正在校验或下发文件。
- Invalid：指定文件参数有误，校验失败。
- Running：正在实例上下发文件。
- Aborted：向实例下发文件失败。
- Success：文件下发完成。
- Failed：文件在实例内创建失败。
- Error：下发文件时发生异常无法继续。
- Timeout：下发文件超时。',
                                    'type' => 'string',
                                    'example' => 'Success',
                                  ),
                                  'FinishTime' => 
                                  array (
                                    'description' => '结束时间，格式："2020-05-22T17:04:18"。',
                                    'type' => 'string',
                                    'example' => '2023-04-10T10:53:46.156+08:00',
                                  ),
                                  'NodeId' => 
                                  array (
                                    'description' => '节点id',
                                    'type' => 'string',
                                    'example' => 'e01-cn-9lb3c15m81j',
                                  ),
                                  'ErrorInfo' => 
                                  array (
                                    'description' => '命令的下发失败或执行失败原因的详情，可能值：
- 空：命令执行正常。
- the specified instance does not exists：指定的实例不存在或已释放。
- the node has released when create task：执行命令期间，该实例被释放。
- the node is not running when create task：命令执行时，该实例不在运行中。
- the command is not applicable：命令不适用于指定的实例。
- the specified account does not exists：指定的账号不存在。
- the specified directory does not exists：指定的目录不存在。
- the cron job expression is invalid：指定的执行时间表达式不合法。
- the aliyun service is not running on the instance：云助手Agent未运行。
- the aliyun service in the instance does not response：云助手Agent无响应。
- the aliyun service in the node is upgrading now：云助手Agent正在升级中。
- the aliyun service in the node need upgrade：云助手Agent需要升级。
- the command delivery has been timeout：发送命令超时。
- the command execution has been timeout：命令执行超时。
- the command execution got an exception：命令执行发生异常。
- the command execution has been interrupted：命令执行被中断。
- the command execution exit code is not zero：命令执行结束，退出码非0。
- the specified instance has been released：下发文件期间，该实例被释放。',
                                    'type' => 'string',
                                    'example' => 'the specified instance does not exists',
                                  ),
                                  'CreationTime' => 
                                  array (
                                    'description' => '文件下发任务的创建时间。',
                                    'type' => 'string',
                                    'example' => '2023-02-06T07:12:50Z',
                                  ),
                                  'StartTime' => 
                                  array (
                                    'description' => '开始时间',
                                    'type' => 'string',
                                    'example' => '2023-03-30T16:00:00Z',
                                  ),
                                  'UpdateTime' => 
                                  array (
                                    'description' => '更新时间',
                                    'type' => 'string',
                                    'example' => '2023-03-30T16:00:00Z',
                                  ),
                                  'ErrorCode' => 
                                  array (
                                    'description' => '文件下发的失败原因代码。可能值：

空：文件下发正常。
NodeNotExists：指定的实例不存在或已释放。
NodeReleased：下发文件期间，该实例被释放。
NodeNotRunning：创建下发文件任务时，该实例不在运行中。
AccountNotExists：指定的账号不存在。
ClientNotRunning：云助手Agent未运行。
ClientNotResponse：云助手Agent无响应。
ClientIsUpgrading：云助手Agent正在升级中。
ClientNeedUpgrade：云助手Agent需要升级。
DeliveryTimeout：发送文件超时。
FileCreateFail：文件创建失败。
FileAlreadyExists：相同路径下存在同名文件。
FileContentInvalid：文件内容不合法。
FileNameInvalid：文件名不合法。
FilePathInvalid：文件路径不合法。
FileAuthorityInvalid：文件权限不合法。
UserGroupNotExists：发送文件时指定的用户组不存在。',
                                    'type' => 'string',
                                    'example' => 'AccountNotExists',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4FD06DF0-9167-5C6F-A145-F30CA4A15D54\\",\\n  \\"TotalCount\\": \\"1\\",\\n  \\"Invocations\\": {\\n    \\"Invocation\\": [\\n      {\\n        \\"FileMode\\": \\"0644\\",\\n        \\"Overwrite\\": true,\\n        \\"InvocationStatus\\": \\"Pending\\",\\n        \\"Description\\": \\"描述信息。\\",\\n        \\"ContentType\\": \\"PlainText\\",\\n        \\"NodeCount\\": 3,\\n        \\"TargetDir\\": \\"\\\\t/home/user\\",\\n        \\"FileGroup\\": \\"root\\",\\n        \\"FileOwner\\": \\"root\\",\\n        \\"Name\\": \\"test\\",\\n        \\"Content\\": \\"Base64\\",\\n        \\"CreationTime\\": \\"2023-04-10T10:53:46.156+08:00\\\\n\\",\\n        \\"InvokeNodes\\": {\\n          \\"InvokeNode\\": [\\n            {\\n              \\"InvocationStatus\\": \\"Success\\",\\n              \\"FinishTime\\": \\"2023-04-10T10:53:46.156+08:00\\",\\n              \\"NodeId\\": \\"e01-cn-9lb3c15m81j\\",\\n              \\"ErrorInfo\\": \\"the specified instance does not exists\\",\\n              \\"CreationTime\\": \\"2023-02-06T07:12:50Z\\",\\n              \\"StartTime\\": \\"2023-03-30T16:00:00Z\\",\\n              \\"UpdateTime\\": \\"2023-03-30T16:00:00Z\\",\\n              \\"ErrorCode\\": \\"AccountNotExists\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询下发文件列表及状态',
    ),
    'SendFile' => 
    array (
      'summary' => '一台或多台灵骏机器下发远程文件。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件名称。支持全字符集，长度不得超过255个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'file.txt',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '描述信息。支持全字符集，长度不得超过512个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'This is a test file.	
',
          ),
        ),
        2 => 
        array (
          'name' => 'TargetDir',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件下发目标灵骏节点中的目录。如不存在则会自动创建。',
            'type' => 'string',
            'required' => true,
            'example' => '/home',
          ),
        ),
        3 => 
        array (
          'name' => 'ContentType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件内容类型。

PlainText：普通文本。
Base64：Base64编码。
默认值为PlainText。',
            'type' => 'string',
            'required' => false,
            'example' => 'PlainText',
          ),
        ),
        4 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件内容。文件内容在Base64编码后，大小不能超过32 KB。

- 当`ContentType`参数为`PlainText`时，该字段为明文格式的普通文本。
- 当`ContentType`参数为`Base64`时，该字段为Base64编码的文本。',
            'type' => 'string',
            'required' => true,
            'example' => '#!/bin/bash echo "Current User is :" echo $(ps | grep "$$" | awk \'{print $2}\') -------- oss://bucketName/objectName',
          ),
        ),
        5 => 
        array (
          'name' => 'FileMode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件的权限。只对Linux实例生效，设置方式与chmod命令相同。

默认值为0644，表示用户具有读写权限，用户组和其它用户具有只读权限。',
            'type' => 'string',
            'required' => false,
            'example' => '0644',
          ),
        ),
        6 => 
        array (
          'name' => 'FileOwner',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件的用户。只对Linux实例生效，默认为root。',
            'type' => 'string',
            'required' => false,
            'example' => 'root',
          ),
        ),
        7 => 
        array (
          'name' => 'FileGroup',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件的用户组。只对Linux实例生效，默认为root。长度不得超过64个字符。

说明
使用其他用户组时，请确保实例中存在该用户组。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        8 => 
        array (
          'name' => 'NodeIdList',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '节点列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '灵骏节点ID',
              'type' => 'string',
              'required' => false,
              'example' => '[\'i-bp1b00g1wdnrvpz68o0b\', \'i-bp1bu2fp0uhruyf88k6v\']',
            ),
            'required' => true,
          ),
        ),
        9 => 
        array (
          'name' => 'Overwrite',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '如果同名文件在目标目录已存在，是否覆盖文件。
- true：覆盖。
- false：不覆盖。

默认值为false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'True',
          ),
        ),
        10 => 
        array (
          'name' => 'Timeout',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '下发文件的超时时间。单位：秒。

- 当因为进程原因、缺失模块、缺失云助手Agent等原因无法下发文件时，会出现超时现象。
- 当设置的超时时间小于10秒时，为确保下发成功，系统会将超时时间自动设置为10秒。

默认值为60。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '600',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '3C683243-7915-57FB-9570-A2932C1C0F78',
              ),
              'InvokeId' => 
              array (
                'description' => '命令执行ID。',
                'type' => 'string',
                'example' => 't-hz03la52z1zkvls',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3C683243-7915-57FB-9570-A2932C1C0F78\\",\\n  \\"InvokeId\\": \\"t-hz03la52z1zkvls\\"\\n}","type":"json"}]',
      'title' => '向一台或多台ECS实例下发远程文件',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'eflo-controller.cn-wulanchabu.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'eflo-controller.cn-heyuan.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'eflo-controller.ap-southeast-1.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'adcp',
    'version' => '2022-01-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 165693,
      'title' => '集群',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateHubCluster',
        1 => 'DescribeHubClusters',
        2 => 'DescribeHubClusterDetails',
        3 => 'DeleteHubCluster',
        4 => 'AttachClusterToHub',
        5 => 'DescribeManagedClusters',
        6 => 'DetachClusterFromHub',
        7 => 'UpdateHubClusterFeature',
      ),
    ),
    1 => 
    array (
      'id' => 165701,
      'title' => '授权',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeUserPermissions',
        1 => 'GrantUserPermissions',
        2 => 'DescribeHubClusterKubeconfig',
        3 => 'GrantUserPermission',
        4 => 'UpdateUserPermission',
        5 => 'DeleteUserPermission',
      ),
    ),
    2 => 
    array (
      'id' => 182212,
      'title' => '安全策略',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribePolicies',
        1 => 'DescribePolicyDetails',
        2 => 'DeployPolicyInstance',
        3 => 'DescribePolicyInstances',
        4 => 'DescribePolicyInstancesStatus',
        5 => 'DescribePolicyGovernanceInCluster',
        6 => 'DeletePolicyInstance',
      ),
    ),
    3 => 
    array (
      'id' => 165703,
      'title' => '日志',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeHubClusterLogs',
      ),
    ),
    4 => 
    array (
      'id' => 165799,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
      ),
    ),
    5 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ChangeResourceGroup',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'Tag' => 
      array (
        'title' => '集群Tag配置',
        'description' => '集群Tag配置	',
        'type' => 'object',
        'properties' => 
        array (
          'Key' => 
          array (
            'title' => 'key值',
            'type' => 'string',
            'example' => 'env',
          ),
          'Value' => 
          array (
            'title' => 'value值',
            'type' => 'string',
            'example' => 'prod',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'CreateHubCluster' => 
    array (
      'summary' => '创建一个ACK One主控实例。',
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
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '118358',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpH1M5DC',
          1 => 'FEATUREadcpMQ5GFM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '地域ID。说明您可以通过DescribeRegions接口查看可用地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'VpcId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集群所属的VPC ID。您可以调用DescribeVpcs查询已创建的VPC信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vpc-f8zin0jscsr84s96tg***',
          ),
        ),
        2 => 
        array (
          'name' => 'ApiServerPublicEip',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否使用公网地址暴露API Server，取值

- true 使用公网API Server
- false 使用内网API Server',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '集群名称',
            'description' => '主控实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'ack-demo',
          ),
        ),
        4 => 
        array (
          'name' => 'VSwitches',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '虚拟交换机ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '["vsw-2zeaijsas4zkzz81xm***"]',
          ),
        ),
        5 => 
        array (
          'name' => 'AuditLogEnabled',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否开启审计日志。取值
- true：开启。
- false：关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'IsEnterpriseSecurityGroup',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否企业安全组',
            'description' => '是否企业安全组。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'Profile',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '集群配置',
            'description' => '主控实例配置信息。取值：

- `Default`：标准场景主控实例。
- `XFlow`：工作流场景主控实例。

默认值：`Default`。',
            'type' => 'string',
            'required' => false,
            'example' => 'Default',
          ),
        ),
        8 => 
        array (
          'name' => 'ArgoServerEnabled',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否启用工作流集群UI。仅当Profile为XFlow的时候生效。取值：

true：启用。
false：禁用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        9 => 
        array (
          'name' => 'WorkflowScheduleMode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作流调度模式。仅当Profile为XFlow的时候生效。取值
- cost-optimized：成本优先
- stock-optimized：库存优先',
            'type' => 'string',
            'required' => false,
            'example' => 'cost-optimized',
          ),
        ),
        10 => 
        array (
          'name' => 'PriceLimit',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作流负载价格限制。WorkflowScheduleMode取值为cost-optimized时生效。',
            'type' => 'string',
            'required' => false,
            'example' => '0.08',
          ),
        ),
        11 => 
        array (
          'name' => 'ResourceGroupID',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-d1ye4kpy1z***',
          ),
        ),
        12 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '标签信息。

一次最多支持输入20个标签信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源的标签。',
              'required' => false,
              '$ref' => '#/components/schemas/Tag',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '62F5AA2B-A2C9-5135-BCE2-C2167099****',
              ),
              'ClusterId' => 
              array (
                'description' => '主控实例ID。',
                'type' => 'string',
                'example' => 'c09946603cd764dac96135f51d1ba****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-62523eda841eca071400****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'asynchronous',
        'callback' => 'adcp::2022-01-01::DescribeHubClusterDetails',
        'callbackInterval' => 15000,
        'maxCallbackTimes' => 100,
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"62F5AA2B-A2C9-5135-BCE2-C2167099****\\",\\n  \\"ClusterId\\": \\"c09946603cd764dac96135f51d1ba****\\",\\n  \\"TaskId\\": \\"T-62523eda841eca071400****\\"\\n}","type":"json"}]',
      'title' => '创建ACK One主控实例',
    ),
    'DescribeHubClusters' => 
    array (
      'summary' => '获取用户ACK One主控实例列表
。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '118356',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpH1M5DC',
          1 => 'FEATUREadcpMQ5GFM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Profile',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '面向场景时的主控类型，取值：

- `Default`：标准场景主控实例。
- `XFlow`：工作流场景主控实例。

默认值：`Default`。',
            'type' => 'string',
            'required' => false,
            'example' => 'Default',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek3dinj3xkf***',
          ),
        ),
        2 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '标签。最多支持指定20个标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'required' => false,
              '$ref' => '#/components/schemas/Tag',
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
            'description' => '响应结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2D676EFC-8C04-5CCE-A08E-BB97D24B47E8',
              ),
              'Clusters' => 
              array (
                'description' => '集群列表信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '集群信息列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Endpoints' => 
                    array (
                      'description' => '集群访问端点。

',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'IntranetApiServerEndpoint' => 
                        array (
                          'description' => 'API Server 地址（内网）。',
                          'type' => 'string',
                          'example' => 'https://172.16.6.**:6443
',
                        ),
                        'PublicApiServerEndpoint' => 
                        array (
                          'description' => 'API Server 地址（公网）。',
                          'type' => 'string',
                          'example' => 'https://123.57.21.***:6443
',
                        ),
                      ),
                    ),
                    'ClusterInfo' => 
                    array (
                      'description' => '集群详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Profile' => 
                        array (
                          'description' => '集群配置信息。

',
                          'type' => 'string',
                          'example' => 'Default',
                        ),
                        'CreationTime' => 
                        array (
                          'description' => '集群创建时间。',
                          'type' => 'string',
                          'example' => '2021-11-05T10:25:48Z',
                        ),
                        'UpdateTime' => 
                        array (
                          'description' => '集群最后更新时间。',
                          'type' => 'string',
                          'example' => '2021-09-02T13:39:50Z',
                        ),
                        'ErrorMessage' => 
                        array (
                          'description' => '集群创建失败的错误提示。',
                          'type' => 'string',
                          'example' => 'Success',
                        ),
                        'Version' => 
                        array (
                          'description' => '集群版本。',
                          'type' => 'string',
                          'example' => '1.22.3-aliyun.1
',
                        ),
                        'State' => 
                        array (
                          'description' => '集群状态：

- initial：初始化中
- failed：创建失败
- running：运行中
- inactive：待激活
- deleting：删除中
- delete_failed：删除失败
- deleted：已删除',
                          'type' => 'string',
                          'example' => 'running',
                        ),
                        'ClusterId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'c2d3e0121ea214b438010502a8019****',
                        ),
                        'Name' => 
                        array (
                          'description' => '集群名称。',
                          'type' => 'string',
                          'example' => 'ackone-heyuan',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-beijing',
                        ),
                        'ClusterSpec' => 
                        array (
                          'description' => '集群规格

- ack.pro.small 基础版
',
                          'type' => 'string',
                          'example' => 'ack.pro.small',
                        ),
                        'ResourceGroupID' => 
                        array (
                          'description' => '资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-dt6rk4xm1r6***',
                        ),
                        'Tags' => 
                        array (
                          'description' => '标签列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '标签。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Key' => 
                              array (
                                'description' => '标签的键。',
                                'type' => 'string',
                                'example' => 'headername',
                              ),
                              'Value' => 
                              array (
                                'description' => '标签的值。',
                                'type' => 'string',
                                'example' => 'release',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'Network' => 
                    array (
                      'description' => '集群的网络配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpcId' => 
                        array (
                          'description' => '集群所属的VPC ID。',
                          'type' => 'string',
                          'example' => 'vpc-2zeusrwi7c2mlww4a****',
                        ),
                        'VSwitches' => 
                        array (
                          'description' => '集群所属的交换机ID。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '交换机ID。',
                            'type' => 'string',
                            'example' => '["vsw-2ze1h7tt2fgr1gxlx****"]',
                          ),
                        ),
                        'SecurityGroupIDs' => 
                        array (
                          'description' => '安全组id。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '安全组id。',
                            'type' => 'string',
                            'example' => '["sg-2ze1h7tt2fgr****"]
',
                          ),
                        ),
                        'ClusterDomain' => 
                        array (
                          'description' => '集群域名。',
                          'type' => 'string',
                          'example' => 'cluster.local',
                        ),
                      ),
                    ),
                    'ApiServer' => 
                    array (
                      'description' => 'apiserver信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EnabledPublic' => 
                        array (
                          'description' => '是否开启公网API Server访问端点

- true 开启公网访问端点
- false 未开启公网访问端点',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'LoadBalancerId' => 
                        array (
                          'description' => '关联的负载均衡实例ID。',
                          'type' => 'string',
                          'example' => 'lb-bp1qyp4l6bscqxw69****',
                        ),
                        'ApiServerEipId' => 
                        array (
                          'description' => 'EIP实例ID。',
                          'type' => 'string',
                          'example' => 'eip-xxx',
                        ),
                      ),
                    ),
                    'MeshConfig' => 
                    array (
                      'description' => '服务网格(ASM)配置',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EnableMesh' => 
                        array (
                          'description' => '是否启用服务网格(ASM)

- true 启用
- false 未启用',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'MeshId' => 
                        array (
                          'description' => '服务网格实例ID',
                          'type' => 'string',
                          'example' => 'c2d3e0121ea214b438010502a8019****',
                        ),
                      ),
                    ),
                    'LogConfig' => 
                    array (
                      'description' => '日志配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EnableLog' => 
                        array (
                          'description' => '是否启用审计日志配置

- true 启用
- false 停用',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'LogProject' => 
                        array (
                          'description' => '日志服务LogProject的名称。',
                          'type' => 'string',
                          'example' => 'audit-log-abc',
                        ),
                        'LogStoreTTL' => 
                        array (
                          'description' => '日志存储天数',
                          'type' => 'string',
                          'example' => '7',
                        ),
                      ),
                    ),
                    'Conditions' => 
                    array (
                      'description' => '集群删除条件信息列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '集群删除条件信息对象',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Type' => 
                          array (
                            'description' => '删除条件类型',
                            'type' => 'string',
                            'example' => 'DeletionProtection',
                          ),
                          'Status' => 
                          array (
                            'description' => '删除条件状态，取值

- True 不能删除
- False 允许删除
- Unknow 未知',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                            ),
                            'example' => 'True',
                          ),
                          'Reason' => 
                          array (
                            'description' => '删除条件原因',
                            'type' => 'string',
                            'example' => 'Successful',
                          ),
                          'Message' => 
                          array (
                            'description' => '删除条件错误信息',
                            'type' => 'string',
                            'example' => 'Successful!',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2D676EFC-8C04-5CCE-A08E-BB97D24B47E8\\",\\n  \\"Clusters\\": [\\n    {\\n      \\"Endpoints\\": {\\n        \\"IntranetApiServerEndpoint\\": \\"https://172.16.6.**:6443\\\\n\\",\\n        \\"PublicApiServerEndpoint\\": \\"https://123.57.21.***:6443\\\\n\\"\\n      },\\n      \\"ClusterInfo\\": {\\n        \\"Profile\\": \\"Default\\",\\n        \\"CreationTime\\": \\"2021-11-05T10:25:48Z\\",\\n        \\"UpdateTime\\": \\"2021-09-02T13:39:50Z\\",\\n        \\"ErrorMessage\\": \\"Success\\",\\n        \\"Version\\": \\"1.22.3-aliyun.1\\\\n\\",\\n        \\"State\\": \\"running\\",\\n        \\"ClusterId\\": \\"c2d3e0121ea214b438010502a8019****\\",\\n        \\"Name\\": \\"ackone-heyuan\\",\\n        \\"RegionId\\": \\"cn-beijing\\",\\n        \\"ClusterSpec\\": \\"ack.pro.small\\",\\n        \\"ResourceGroupID\\": \\"rg-dt6rk4xm1r6***\\",\\n        \\"Tags\\": [\\n          {\\n            \\"Key\\": \\"headername\\",\\n            \\"Value\\": \\"release\\"\\n          }\\n        ]\\n      },\\n      \\"Network\\": {\\n        \\"VpcId\\": \\"vpc-2zeusrwi7c2mlww4a****\\",\\n        \\"VSwitches\\": [\\n          \\"[\\\\\\"vsw-2ze1h7tt2fgr1gxlx****\\\\\\"]\\"\\n        ],\\n        \\"SecurityGroupIDs\\": [\\n          \\"[\\\\\\"sg-2ze1h7tt2fgr****\\\\\\"]\\\\n\\"\\n        ],\\n        \\"ClusterDomain\\": \\"cluster.local\\"\\n      },\\n      \\"ApiServer\\": {\\n        \\"EnabledPublic\\": true,\\n        \\"LoadBalancerId\\": \\"lb-bp1qyp4l6bscqxw69****\\",\\n        \\"ApiServerEipId\\": \\"eip-xxx\\"\\n      },\\n      \\"MeshConfig\\": {\\n        \\"EnableMesh\\": false,\\n        \\"MeshId\\": \\"c2d3e0121ea214b438010502a8019****\\"\\n      },\\n      \\"LogConfig\\": {\\n        \\"EnableLog\\": true,\\n        \\"LogProject\\": \\"audit-log-abc\\",\\n        \\"LogStoreTTL\\": \\"7\\"\\n      },\\n      \\"Conditions\\": [\\n        {\\n          \\"Type\\": \\"DeletionProtection\\",\\n          \\"Status\\": \\"True\\",\\n          \\"Reason\\": \\"Successful\\",\\n          \\"Message\\": \\"Successful!\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询已创建的主控实例列表',
    ),
    'DescribeHubClusterDetails' => 
    array (
      'summary' => '获取ACKOne主控集群的详细信息
。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '118359',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpH1M5DC',
          1 => 'FEATUREadcpMQ5GFM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群ID',
            'description' => '主控集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'c676decda7b8148d69a9aba751877****',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '52C1B7DF-96C1-5214-97B6-1B0859FEAFE5',
              ),
              'Cluster' => 
              array (
                'description' => '集群详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Endpoints' => 
                  array (
                    'description' => '集群访问端点。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'IntranetApiServerEndpoint' => 
                      array (
                        'description' => 'API Server地址（内网）。',
                        'type' => 'string',
                        'example' => 'https://172.16.6.**:6443',
                      ),
                      'PublicApiServerEndpoint' => 
                      array (
                        'description' => 'API Server地址（公网）。',
                        'type' => 'string',
                        'example' => 'https://123.57.21.***:6443',
                      ),
                    ),
                  ),
                  'ClusterInfo' => 
                  array (
                    'description' => '集群详情。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Profile' => 
                      array (
                        'description' => '集群配置信息。',
                        'type' => 'string',
                        'example' => 'Default',
                      ),
                      'CreationTime' => 
                      array (
                        'description' => '集群创建时间。',
                        'type' => 'string',
                        'example' => '2022-03-23T06:22:28Z',
                      ),
                      'UpdateTime' => 
                      array (
                        'description' => '集群更新时间。',
                        'type' => 'string',
                        'example' => '2022-03-21T02:51:35.542Z',
                      ),
                      'ErrorMessage' => 
                      array (
                        'description' => '集群创建失败的错误提示。',
                        'type' => 'string',
                        'example' => 'The specified product does not exist.',
                      ),
                      'Version' => 
                      array (
                        'description' => '集群版本。',
                        'type' => 'string',
                        'example' => '1.22.3-aliyun.1',
                      ),
                      'State' => 
                      array (
                        'description' => '集群状态：
- initial：初始化中
- failed：创建失败
- running：运行中
- inactive：待激活
- deleting：删除中
- delete_failed：删除失败
- deleted：已删除',
                        'type' => 'string',
                        'example' => 'running',
                      ),
                      'ClusterId' => 
                      array (
                        'description' => '主控集群ID。',
                        'type' => 'string',
                        'example' => 'cb09fda0dc2f94a8397c76638c7ecf***',
                      ),
                      'Name' => 
                      array (
                        'description' => '集群名称。',
                        'type' => 'string',
                        'example' => 'ackone-heyuan',
                      ),
                      'RegionId' => 
                      array (
                        'description' => '集群所在地域ID',
                        'type' => 'string',
                        'example' => 'cn-beijing',
                      ),
                      'ClusterSpec' => 
                      array (
                        'description' => '集群规格

- ack.pro.small 基础版',
                        'type' => 'string',
                        'example' => 'ack.pro.small ',
                      ),
                      'MetaData' => 
                      array (
                        'description' => '元数据。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ACKOne' => 
                          array (
                            'description' => 'ACK One Fleet元数据',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'GitOps' => 
                              array (
                                'description' => 'ACK One GitOps元数据',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Enabled' => 
                                  array (
                                    'description' => '是否启用GitOps。取值

- true： 启用
- false： 禁用',
                                    'type' => 'boolean',
                                    'example' => 'true',
                                  ),
                                  'HAEnabled' => 
                                  array (
                                    'description' => '是否启用GitOps 高可用。取值

- true： 启用
- false： 禁用',
                                    'type' => 'boolean',
                                    'example' => 'true',
                                  ),
                                  'PublicAccessEnabled' => 
                                  array (
                                    'description' => '是否启用ArgoCD控制台公网域名解析。取值：

- true：启用。
- false：禁用。',
                                    'type' => 'boolean',
                                    'example' => 'true',
                                  ),
                                  'AccessControlList' => 
                                  array (
                                    'description' => '公网访问ACL控制列表。仅当PublicAccessEnabled为true时有效。',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'description' => '公网访问ACL控制列表。仅当PublicAccessEnabled为true时有效。',
                                      'type' => 'string',
                                      'example' => '["192.168.0.0/16"]',
                                    ),
                                  ),
                                ),
                              ),
                              'WorkFlow' => 
                              array (
                                'description' => 'ACK One工作流元数据',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'ArgoWorkflow' => 
                                  array (
                                    'description' => 'ACK One工作流元数据',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Enabled' => 
                                      array (
                                        'description' => '是否启用工作流配置。取值

- true： 启用
- false： 禁用',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                      ),
                                      'ServerEnabled' => 
                                      array (
                                        'description' => '是否启用Argo Server UI。取值

- true： 启用
- false： 禁用',
                                        'type' => 'string',
                                        'example' => 'true',
                                      ),
                                      'PublicAccessEnabled' => 
                                      array (
                                        'description' => '是否启用Argo Workflow 控制台公网域名解析。取值：

- true：启用。
- false：禁用。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                      ),
                                      'AccessControlList' => 
                                      array (
                                        'description' => '公网访问ACL控制列表。仅当PublicAccessEnabled为true时有效。',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'description' => '公网访问ACL控制列表。仅当PublicAccessEnabled为true时有效。',
                                          'type' => 'string',
                                          'example' => '["192.168.0.0/16"]
',
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
                      'ResourceGroupID' => 
                      array (
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'example' => 'rg-2nnnd0b6q37***',
                      ),
                      'Tags' => 
                      array (
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '标签。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Key' => 
                            array (
                              'description' => '标签的键。',
                              'type' => 'string',
                              'example' => 'user_resource',
                            ),
                            'Value' => 
                            array (
                              'description' => '标签的值。',
                              'type' => 'string',
                              'example' => 'gfggfwq-697',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Network' => 
                  array (
                    'description' => '集群的网络配置。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'VpcId' => 
                      array (
                        'description' => 'VPC的ID。',
                        'type' => 'string',
                        'example' => 'vpc-f8ziib1019r9o0hdv2***',
                      ),
                      'VSwitches' => 
                      array (
                        'description' => 'vSwitch列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '交换机ID',
                          'type' => 'string',
                          'example' => '["vsw-f8zubs2z9x1cjnzk29***"]',
                        ),
                      ),
                      'SecurityGroupIDs' => 
                      array (
                        'description' => '关联的安全组ID。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '关联的安全组ID。',
                          'type' => 'string',
                          'example' => '["sg-f8zubs2z9x1cj***"]',
                        ),
                      ),
                      'IPStack' => 
                      array (
                        'description' => '支持的IP版本

- ipv4 支持ipv4
- ipv6 支持ipv6
- dual 同时支持ipv4和ipv6',
                        'type' => 'string',
                        'example' => 'ipv4',
                      ),
                      'ClusterDomain' => 
                      array (
                        'description' => '集群域名。',
                        'type' => 'string',
                        'example' => 'cluster.local',
                      ),
                    ),
                  ),
                  'ApiServer' => 
                  array (
                    'description' => 'apiserver信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'EnabledPublic' => 
                      array (
                        'description' => '是否开启公网API Server访问端点

- true 开启公网访问端点
- false 未开启公网访问端点',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'LoadBalancerId' => 
                      array (
                        'description' => '负载均衡实例id。',
                        'type' => 'string',
                        'example' => 'lb-hp3ioqbfeq37h13rwe***',
                      ),
                      'ApiServerEipId' => 
                      array (
                        'description' => 'EIP实例ID。',
                        'type' => 'string',
                        'example' => 'eip-abc****',
                      ),
                    ),
                  ),
                  'MeshConfig' => 
                  array (
                    'description' => '服务网格(ASM)配置',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'EnableMesh' => 
                      array (
                        'description' => '是否启用服务网格(ASM)
- true 启用
- false 未启用',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                      'MeshId' => 
                      array (
                        'description' => '服务网格(ASM)实例ID',
                        'type' => 'string',
                        'example' => 'cb09fda0dc2f94a8397c76638c7ecf***
',
                      ),
                    ),
                  ),
                  'LogConfig' => 
                  array (
                    'description' => '日志配置信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'EnableLog' => 
                      array (
                        'description' => '是否启用审计日志配置
- true 启用
- false 未启用',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                      'LogProject' => 
                      array (
                        'description' => '日志服务LogProject的名称。',
                        'type' => 'string',
                        'example' => 'k8s-log-abc',
                      ),
                      'LogStoreTTL' => 
                      array (
                        'description' => '日志存储天数',
                        'type' => 'string',
                        'example' => '7',
                      ),
                    ),
                  ),
                  'Conditions' => 
                  array (
                    'description' => '集群删除条件信息列表

',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '集群删除条件信息对象

',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '删除条件类型

',
                          'type' => 'string',
                          'example' => 'DeletionProtection',
                        ),
                        'Status' => 
                        array (
                          'description' => '删除条件状态，取值
- True 不能删除
- False 允许删除
- Unknow 未知
',
                          'type' => 'string',
                          'example' => 'True',
                        ),
                        'Reason' => 
                        array (
                          'description' => '删除条件原因

',
                          'type' => 'string',
                          'example' => 'Successful',
                        ),
                        'Message' => 
                        array (
                          'description' => '删除条件错误信息

',
                          'type' => 'string',
                          'example' => 'Successful',
                        ),
                      ),
                    ),
                  ),
                  'WorkflowConfig' => 
                  array (
                    'description' => '工作流集群配置信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ArgoServerEnabled' => 
                      array (
                        'description' => '是否启用Argo Server UI。取值
-  true： 启用
- false： 禁用',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'WorkflowScheduleMode' => 
                      array (
                        'description' => '工作流调度模式。取值
- cost-optimized：成本优先
- stock-optimized：库存优先',
                        'type' => 'string',
                        'example' => 'cost-optimized',
                      ),
                      'PriceLimit' => 
                      array (
                        'description' => '工作流负载价格限制。WorkflowScheduleMode取值为cost-optimized时生效。',
                        'type' => 'string',
                        'example' => '0.08',
                      ),
                      'WorkflowUnits' => 
                      array (
                        'description' => '集群工作流地域配置列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '集群工作流地域配置。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RegionId' => 
                            array (
                              'description' => '地域ID。',
                              'type' => 'string',
                              'example' => 'cn-beijing',
                            ),
                            'VpcId' => 
                            array (
                              'description' => 'VPC的ID。',
                              'type' => 'string',
                              'example' => 'vpc-f8zukabbkv5aw7zkm****',
                            ),
                            'VSwitches' => 
                            array (
                              'description' => '集群工作流交换机列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '集群工作流交换机。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'VswitchId' => 
                                  array (
                                    'description' => '交换机ID。',
                                    'type' => 'string',
                                    'example' => 'vsw-wz9sf0hsuizl7bxnj****',
                                  ),
                                  'ZoneId' => 
                                  array (
                                    'description' => '可用区ID。',
                                    'type' => 'string',
                                    'example' => 'cn-hangzhou-e',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Cluster.NotFound',
            'errorMessage' => 'Cluster Not Found',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"52C1B7DF-96C1-5214-97B6-1B0859FEAFE5\\",\\n  \\"Cluster\\": {\\n    \\"Endpoints\\": {\\n      \\"IntranetApiServerEndpoint\\": \\"https://172.16.6.**:6443\\",\\n      \\"PublicApiServerEndpoint\\": \\"https://123.57.21.***:6443\\"\\n    },\\n    \\"ClusterInfo\\": {\\n      \\"Profile\\": \\"Default\\",\\n      \\"CreationTime\\": \\"2022-03-23T06:22:28Z\\",\\n      \\"UpdateTime\\": \\"2022-03-21T02:51:35.542Z\\",\\n      \\"ErrorMessage\\": \\"The specified product does not exist.\\",\\n      \\"Version\\": \\"1.22.3-aliyun.1\\",\\n      \\"State\\": \\"running\\",\\n      \\"ClusterId\\": \\"cb09fda0dc2f94a8397c76638c7ecf***\\",\\n      \\"Name\\": \\"ackone-heyuan\\",\\n      \\"RegionId\\": \\"cn-beijing\\",\\n      \\"ClusterSpec\\": \\"ack.pro.small \\",\\n      \\"MetaData\\": {\\n        \\"ACKOne\\": {\\n          \\"GitOps\\": {\\n            \\"Enabled\\": true,\\n            \\"HAEnabled\\": true,\\n            \\"PublicAccessEnabled\\": true,\\n            \\"AccessControlList\\": [\\n              \\"[\\\\\\"192.168.0.0/16\\\\\\"]\\"\\n            ]\\n          },\\n          \\"WorkFlow\\": {\\n            \\"ArgoWorkflow\\": {\\n              \\"Enabled\\": true,\\n              \\"ServerEnabled\\": \\"true\\",\\n              \\"PublicAccessEnabled\\": true,\\n              \\"AccessControlList\\": [\\n                \\"[\\\\\\"192.168.0.0/16\\\\\\"]\\\\n\\"\\n              ]\\n            }\\n          }\\n        }\\n      },\\n      \\"ResourceGroupID\\": \\"rg-2nnnd0b6q37***\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"user_resource\\",\\n          \\"Value\\": \\"gfggfwq-697\\"\\n        }\\n      ]\\n    },\\n    \\"Network\\": {\\n      \\"VpcId\\": \\"vpc-f8ziib1019r9o0hdv2***\\",\\n      \\"VSwitches\\": [\\n        \\"[\\\\\\"vsw-f8zubs2z9x1cjnzk29***\\\\\\"]\\"\\n      ],\\n      \\"SecurityGroupIDs\\": [\\n        \\"[\\\\\\"sg-f8zubs2z9x1cj***\\\\\\"]\\"\\n      ],\\n      \\"IPStack\\": \\"ipv4\\",\\n      \\"ClusterDomain\\": \\"cluster.local\\"\\n    },\\n    \\"ApiServer\\": {\\n      \\"EnabledPublic\\": true,\\n      \\"LoadBalancerId\\": \\"lb-hp3ioqbfeq37h13rwe***\\",\\n      \\"ApiServerEipId\\": \\"eip-abc****\\"\\n    },\\n    \\"MeshConfig\\": {\\n      \\"EnableMesh\\": false,\\n      \\"MeshId\\": \\"cb09fda0dc2f94a8397c76638c7ecf***\\\\n\\"\\n    },\\n    \\"LogConfig\\": {\\n      \\"EnableLog\\": false,\\n      \\"LogProject\\": \\"k8s-log-abc\\",\\n      \\"LogStoreTTL\\": \\"7\\"\\n    },\\n    \\"Conditions\\": [\\n      {\\n        \\"Type\\": \\"DeletionProtection\\",\\n        \\"Status\\": \\"True\\",\\n        \\"Reason\\": \\"Successful\\",\\n        \\"Message\\": \\"Successful\\"\\n      }\\n    ],\\n    \\"WorkflowConfig\\": {\\n      \\"ArgoServerEnabled\\": true,\\n      \\"WorkflowScheduleMode\\": \\"cost-optimized\\",\\n      \\"PriceLimit\\": \\"0.08\\",\\n      \\"WorkflowUnits\\": [\\n        {\\n          \\"RegionId\\": \\"cn-beijing\\",\\n          \\"VpcId\\": \\"vpc-f8zukabbkv5aw7zkm****\\",\\n          \\"VSwitches\\": [\\n            {\\n              \\"VswitchId\\": \\"vsw-wz9sf0hsuizl7bxnj****\\",\\n              \\"ZoneId\\": \\"cn-hangzhou-e\\"\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取主控集群详情',
    ),
    'DeleteHubCluster' => 
    array (
      'summary' => '删除ACK One的主控集群	
。',
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
        'operationType' => 'create',
        'abilityTreeCode' => '118365',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpH1M5DC',
          1 => 'FEATUREadcpMQ5GFM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主控实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cd90dd24a86fd42f895a1b77df620****',
          ),
        ),
        1 => 
        array (
          'name' => 'Force',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否强制删除ACK One主控实例，取值：

- true：强制删除ACK One主控实例

- false：不强制删除ACK One主控实例

默认值： false',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'RetainResources',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '需要保留资源的列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'json格式的字符串，可以被解析为一个字符串数组。指定在删除主控实例时、需要保留的主控实例相关资源的列表，数组内的值是需要保留的资源的实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => '["eip-eip-bp1v18egqyuxzmeg****]',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7A827E32-6D24-5757-B3FD-D9396495FBDC',
              ),
              'ClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'cb09fda0dc2f94a8397c76638c7ec****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-623a96b7bbeaac074b00****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'asynchronous',
        'callback' => 'adcp::2022-01-01::DescribeHubClusterDetails',
        'callbackInterval' => 15000,
        'maxCallbackTimes' => 1000,
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7A827E32-6D24-5757-B3FD-D9396495FBDC\\",\\n  \\"ClusterId\\": \\"cb09fda0dc2f94a8397c76638c7ec****\\",\\n  \\"TaskId\\": \\"T-623a96b7bbeaac074b00****\\"\\n}","type":"json"}]',
      'title' => '删除主控集群',
    ),
    'AttachClusterToHub' => 
    array (
      'summary' => '添加ACK集群到ACKOne主控集群。',
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
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '118361',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcp2RKVFZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主控集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cd08d62e6506a4fa5a8c44c19d0fc****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClusterIds',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'json格式的字符串，可以被解析为一个字符串数组。要添加到主控集群中的子集群数组。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '["cdea10134be464ba4acb36cc831a6****"]',
          ),
        ),
        2 => 
        array (
          'name' => 'AttachToMesh',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否同时添加子集群到服务网格(ASM)中

- true 添加到服务网格
- false 不添加到服务网格',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'EA06613B-37A3-549E-BAE0-E4AD8A6E93D7',
              ),
              'ClusterId' => 
              array (
                'description' => '主控集群ID',
                'type' => 'string',
                'example' => 'c8e28143817db4b039b8548d7c899****',
              ),
              'ManagedClusterIds' => 
              array (
                'description' => '子集群ID列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '子集群ID',
                  'type' => 'string',
                  'example' => '[\'ce11727a7d2114790bf1392b2051e****\']',
                ),
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-623a96b7bbeaac074b00****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EA06613B-37A3-549E-BAE0-E4AD8A6E93D7\\",\\n  \\"ClusterId\\": \\"c8e28143817db4b039b8548d7c899****\\",\\n  \\"ManagedClusterIds\\": [\\n    \\"[\'ce11727a7d2114790bf1392b2051e****\']\\"\\n  ],\\n  \\"TaskId\\": \\"T-623a96b7bbeaac074b00****\\"\\n}","type":"json"}]',
      'title' => '添加子集群到主控集群',
    ),
    'DescribeManagedClusters' => 
    array (
      'summary' => '获取ACK One主控集群下的子集群列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '118362',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcp2RKVFZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群ID',
            'description' => '主控集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c2f41fd4599454a9c9ad8b3daafe8****',
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
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => 'BDA85C7A-FC81-56C4-9BC2-9112EE970059',
              ),
              'Clusters' => 
              array (
                'description' => '集群信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '集群详细信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Cluster' => 
                    array (
                      'description' => '集群信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '集群名称。',
                          'type' => 'string',
                          'example' => 'ackone-heyuan',
                        ),
                        'ClusterID' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'c2f41fd4599454a9c9ad8b3daafe8****',
                        ),
                        'Region' => 
                        array (
                          'description' => '集群所在地域。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'State' => 
                        array (
                          'description' => '子集群状态：

- `initial`：初始化中。
- `failed`：创建失败。
- `running`：运行中。
- `inactive`：待激活。
- `deleting`：删除中。
- `delete_failed`：删除失败。
- `deleted`：已删除。',
                          'type' => 'string',
                          'example' => 'running',
                        ),
                        'ClusterType' => 
                        array (
                          'description' => '集群类型。',
                          'type' => 'string',
                          'example' => 'One',
                        ),
                        'Created' => 
                        array (
                          'description' => '集群的创建时间。',
                          'type' => 'string',
                          'example' => '2022-03-23T06:22:28Z
',
                        ),
                        'Updated' => 
                        array (
                          'description' => '集群更新时间。',
                          'type' => 'string',
                          'example' => '2022-03-23T06:22:28Z
',
                        ),
                        'InitVersion' => 
                        array (
                          'description' => '集群的初始版本号。',
                          'type' => 'string',
                          'example' => '1.20.4-aliyun.1
',
                        ),
                        'CurrentVersion' => 
                        array (
                          'description' => '集群的最新版本号。

',
                          'type' => 'string',
                          'example' => '1.22.3-aliyun.1
',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-acfmx7o7ewy****',
                        ),
                        'VpcID' => 
                        array (
                          'description' => 'VPC ID。',
                          'type' => 'string',
                          'example' => 'vpc-bp1fhizs9fxuvit06****',
                        ),
                        'VSwitchID' => 
                        array (
                          'description' => '虚拟交换机ID。',
                          'type' => 'string',
                          'example' => 'vsw-m5e0pbkgmhvzecf7e****',
                        ),
                        'Profile' => 
                        array (
                          'description' => '集群标识。',
                          'type' => 'string',
                          'example' => 'Default',
                        ),
                        'ClusterSpec' => 
                        array (
                          'description' => '集群规格。`ack.pro.small`表示基础版。',
                          'type' => 'string',
                          'example' => 'ack.pro.small',
                        ),
                      ),
                    ),
                    'Status' => 
                    array (
                      'description' => '子集群在主控集群中的状态。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'State' => 
                        array (
                          'description' => '子集群在主控集群中的状态：
- `Installing`：添加中。
- `Successed`：添加成功。
- `Failed`：添加失败。
- `Deleting`: 移除中
- `Deleted`：已移除。',
                          'type' => 'string',
                          'example' => 'Successed',
                        ),
                        'Message' => 
                        array (
                          'description' => '状态信息。',
                          'type' => 'string',
                          'example' => 'SUCCESS',
                        ),
                      ),
                    ),
                    'MeshStatus' => 
                    array (
                      'description' => '子集群在服务网格中的状态。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'InMesh' => 
                        array (
                          'description' => '子集群是否在服务网格中，取值：
- `true`：子集群在服务网格实例中。
- `false`：子集群不在服务网格实例中。',
                          'type' => 'boolean',
                          'example' => 'true',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BDA85C7A-FC81-56C4-9BC2-9112EE970059\\",\\n  \\"Clusters\\": [\\n    {\\n      \\"Cluster\\": {\\n        \\"Name\\": \\"ackone-heyuan\\",\\n        \\"ClusterID\\": \\"c2f41fd4599454a9c9ad8b3daafe8****\\",\\n        \\"Region\\": \\"cn-hangzhou\\",\\n        \\"State\\": \\"running\\",\\n        \\"ClusterType\\": \\"One\\",\\n        \\"Created\\": \\"2022-03-23T06:22:28Z\\\\n\\",\\n        \\"Updated\\": \\"2022-03-23T06:22:28Z\\\\n\\",\\n        \\"InitVersion\\": \\"1.20.4-aliyun.1\\\\n\\",\\n        \\"CurrentVersion\\": \\"1.22.3-aliyun.1\\\\n\\",\\n        \\"ResourceGroupId\\": \\"rg-acfmx7o7ewy****\\",\\n        \\"VpcID\\": \\"vpc-bp1fhizs9fxuvit06****\\",\\n        \\"VSwitchID\\": \\"vsw-m5e0pbkgmhvzecf7e****\\",\\n        \\"Profile\\": \\"Default\\",\\n        \\"ClusterSpec\\": \\"ack.pro.small\\"\\n      },\\n      \\"Status\\": {\\n        \\"State\\": \\"Successed\\",\\n        \\"Message\\": \\"SUCCESS\\"\\n      },\\n      \\"MeshStatus\\": {\\n        \\"InMesh\\": true\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询已添加的子集群列表',
    ),
    'DetachClusterFromHub' => 
    array (
      'summary' => '从ACK One主控集群中移除ACK子集群。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'abilityTreeCode' => '118363',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcp2RKVFZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主控集群的ID。您可以调用[DescribeHubClusters](~~424404~~)接口获取已创建的主控集群。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cb09fda0dc2f94a8397c76638c7ec****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClusterIds',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '从主控集群中待移除的子集群ID数组。您可以调用[DescribeManagedClusters](~~424408~~)接口获取主集群下已添加的子集群ID。

取值格式为JSON格式的字符串，可以被解析为一个字符串数组。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '["c1c731554c1ec4a1ca9bb690ff9ed****"]',
          ),
        ),
        2 => 
        array (
          'name' => 'DetachFromMesh',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否仅从服务网格（ASM）中移除子集群。
- true：仅从服务网格（ASM）移除子集群。
- false：同时从服务网格（ASM）和ACK One中移除子集群。

若该参数未设置，默认按照取值为**false**处理，即默认子集群同时从服务网格（ASM）和ACK One中移除。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4412F213-DBCD-5D1B-A9A1-F6C26C6C19D9',
              ),
              'ClusterId' => 
              array (
                'description' => '主控集群ID。',
                'type' => 'string',
                'example' => 'cc490b1e67ccc43a784727f29f33e****',
              ),
              'ManagedClusterIds' => 
              array (
                'description' => '子集群列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '子集群ID。',
                  'type' => 'string',
                  'example' => '[\'c33106e9aeebd480c84da7ec6873a****\']',
                ),
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-623a96b7bbeaac074b00****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4412F213-DBCD-5D1B-A9A1-F6C26C6C19D9\\",\\n  \\"ClusterId\\": \\"cc490b1e67ccc43a784727f29f33e****\\",\\n  \\"ManagedClusterIds\\": [\\n    \\"[\'c33106e9aeebd480c84da7ec6873a****\']\\"\\n  ],\\n  \\"TaskId\\": \\"T-623a96b7bbeaac074b00****\\"\\n}","type":"json"}]',
      'title' => '从主控集群中移除子集群',
      'extraInfo' => '控制台相关操作，请参见[管理关联集群](~~415167~~)。',
    ),
    'UpdateHubClusterFeature' => 
    array (
      'summary' => '更新集群特性。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '135264',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpH1M5DC',
          1 => 'FEATUREadcpMQ5GFM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '集群ID',
            'description' => '主控实例ID。您可以调用[DescribeHubClusters](~~424404~~)接口获取已创建的主控实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c46979b1075f04d99b5f2b710393e5****',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主控实例名称。长度为[1, 63]个英文或数字字符。必须以大小字母开头。可以包含数字、下划线（_）或者连字符（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'ack-demo',
          ),
        ),
        2 => 
        array (
          'name' => 'AuditLogEnabled',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '是否开启审计日志。
- true：开启。
- false：关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'EnableMesh',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '是否开启服务网格（ASM）。

- true：开启。
- false：关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'DeletionProtection',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '集群删除保护属性，指定是否支持通过控制台或API [DeleteHubCluster](~~424406~~)删除集群。

-   true：开启集群删除保护。
-   false：关闭集群删除保护。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'PublicApiServerEnabled',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '是否为API Server绑定公网入口。

- true： 绑定公网EIP，需要绑定的时候，可以自行指定ApiServerEipId参数，若不传入，则系统会自动创建一个EIP实例。
- false： 解绑公网EIP。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'ApiServerEipId',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => 'EIP实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'eip-xxx',
          ),
        ),
        7 => 
        array (
          'name' => 'ArgoCDEnabled',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '是否启用ArgoCD。仅当Profile为XFlow时生效。Profile参数可调用[DescribeHubClusterDetails](~~424405~~)接口查看。

本参数取值如下：
- true：启用。
- false：禁用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        8 => 
        array (
          'name' => 'ArgoServerEnabled',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '是否启用工作流实例UI。仅当Profile为XFlow的时候生效。Profile参数可调用[DescribeHubClusterDetails](~~424405~~)接口查看。

本参数取值如下：
- true：启用。
- false：禁用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        9 => 
        array (
          'name' => 'WorkflowScheduleMode',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '工作流调度模式。仅当Profile为XFlow的时候生效。Profile参数可调用[DescribeHubClusterDetails](~~424405~~)接口查看。

本参数取值如下：
- cost-optimized：成本优先。
- stock-optimized：库存优先。',
            'type' => 'string',
            'required' => false,
            'example' => 'cost-optimized',
          ),
        ),
        10 => 
        array (
          'name' => 'PriceLimit',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '工作流负载价格限制。仅当WorkflowScheduleMode取值为cost-optimized时生效。',
            'type' => 'string',
            'required' => false,
            'example' => '0.08',
          ),
        ),
        11 => 
        array (
          'name' => 'VSwitches',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '交换机列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '虚拟交换机ID。',
              'type' => 'string',
              'required' => false,
              'example' => '["vsw-2zeaijsas4zkzz81xm***"]',
            ),
            'required' => false,
          ),
        ),
        12 => 
        array (
          'name' => 'MonitorEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启用工作流实例监控大盘。仅当Profile为XFlow的时候生效。取值：

- true：启用。
- false：禁用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        13 => 
        array (
          'name' => 'ArgoCDHAEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启用ArgoCD高可用。取值：

- true：启用。
- false：禁用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        14 => 
        array (
          'name' => 'PublicAccessEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启用ArgoCD或者Argo Workflow控制台公网域名解析。取值：

- true：启用。
- false：禁用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        15 => 
        array (
          'name' => 'AccessControlList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '公网访问ACL控制列表。仅当PublicAccessEnabled为true时有效。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '公网访问限制的网段。例如192.168.1.0/24。',
              'type' => 'string',
              'required' => false,
              'example' => '["192.168.1.0/24"]',
            ),
            'required' => false,
          ),
        ),
        16 => 
        array (
          'name' => 'ArgoEventsEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启用ArgoEvents。取值：

- true：启用。
- false：禁用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        17 => 
        array (
          'name' => 'GatewayEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启用Gateway特性。取值：

- true：启用。
- false：禁用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '52C1B7DF-96C1-5214-97B6-1B0859FEAFE5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"52C1B7DF-96C1-5214-97B6-1B0859FEAFE5\\"\\n}","type":"json"}]',
      'title' => '更新集群特性',
    ),
    'DescribeUserPermissions' => 
    array (
      'summary' => '查看子账号授权内容。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '171407',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpP565GF',
          1 => 'FEATUREadcp181E1P',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '指定RAM用户。',
            'type' => 'string',
            'required' => true,
            'example' => '21175****	
',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EA06613B-37A3-549E-BAE0-E4AD8A6E93D7',
              ),
              'Permissions' => 
              array (
                'description' => 'RAM用户的权限列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'RAM用户的权限详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RoleType' => 
                    array (
                      'description' => '预置的角色类型，取值：

- admin：管理员。
- dev：开发人员。',
                      'type' => 'string',
                      'example' => 'dev',
                    ),
                    'RoleName' => 
                    array (
                      'description' => '自定义角色名称，当授权自定义角色时，该字段为指定的自定义主控实例管理角色名称。',
                      'type' => 'string',
                      'example' => 'view',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '授权类型，取值：
- cluster：集群维度。
- namespace：命名空间维度。',
                      'type' => 'string',
                      'example' => 'cluster',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '主控实例访问配置，格式为：
- 当是集群维度授权时，格式为：{cluster_id}。
- 当是命名空间维度授权时，格式为：{cluster_id}/{namespace}。
- 当是所有集群授权时，值固定为：all-clusters。',
                      'type' => 'string',
                      'example' => 'cffef3c9c7ba145b083292942a2c3****',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EA06613B-37A3-549E-BAE0-E4AD8A6E93D7\\",\\n  \\"Permissions\\": [\\n    {\\n      \\"RoleType\\": \\"dev\\",\\n      \\"RoleName\\": \\"view\\",\\n      \\"ResourceType\\": \\"cluster\\",\\n      \\"ResourceId\\": \\"cffef3c9c7ba145b083292942a2c3****\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询RAM用户主控实例授权信息',
    ),
    'GrantUserPermissions' => 
    array (
      'summary' => '为子账号授权。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '171408',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpP565GF',
          1 => 'FEATUREadcp181E1P',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RAM用户的ID。',
            'type' => 'string',
            'required' => true,
            'example' => '2367****	
',
          ),
        ),
        1 => 
        array (
          'name' => 'Permissions',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'RAM用户的授权列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'RAM用户的授权详情。',
              'type' => 'object',
              'properties' => 
              array (
                'RoleName' => 
                array (
                  'description' => '预置的角色名称，取值：

- admin: 管理员。
- dev：开发人员。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'dev',
                  'enum' => 
                  array (
                  ),
                ),
                'ClusterId' => 
                array (
                  'description' => '授权目标主控实例ID。

- 当role_type参数的值是all-clusters时，此参数的值传空字符串。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cf67bdb0ffcb349ecabc1ca70da78****',
                ),
                'Namespace' => 
                array (
                  'description' => '命名空间名称，主控实例维度授权时默认为空。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'RoleType' => 
                array (
                  'description' => '授权类型，取值：

- cluster：主控实例维度。
- namespace: 命名空间维度。
- all-clusters: 所有主控实例维度。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'cluster',
                  'enum' => 
                  array (
                    0 => 'cluster',
                    1 => 'namespace',
                    2 => 'all-clusters',
                  ),
                ),
                'IsRamRole' => 
                array (
                  'description' => '目标权限授予实体，如果是RAM角色，则为`true`，否则为`false`。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
              ),
              'required' => false,
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4412F213-DBCD-5D1B-A9A1-F6C26C6C19D9',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'adcp::2022-01-01::GrantUserPermission',
        ),
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4412F213-DBCD-5D1B-A9A1-F6C26C6C19D9\\"\\n}","type":"json"}]',
      'title' => '全量更新RAM用户主控实例授权信息',
    ),
    'DescribeHubClusterKubeconfig' => 
    array (
      'summary' => '获取ACK One集群的KubeConfig。除了通过容器服务控制台来管理集群之外，您还可以通过Kubernetes命令行工具kubectl来管理集群以及应用。使用kubectl工具管理集群时，您需要先获取集群的KubeConfig信息并通过kubectl工具连接集群。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '118360',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpP565GF',
          1 => 'FEATUREadcp181E1P',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'c102fe5f1ee5d4c87a68121a77d8b****',
          ),
        ),
        1 => 
        array (
          'name' => 'PrivateIpAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否获取内网连接配置。取值：
- `true`：仅获取内网连接凭据。
- `false`：仅获取公网连接凭据。 

默认值：`false`。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5BE4C329-DCC2-5B61-8F66-112B7D7FC712',
              ),
              'Kubeconfig' => 
              array (
                'description' => 'KubeConfig配置内容。',
                'type' => 'string',
                'example' => '
"\\napiVersion: v1\\nclusters:\\n- cluster:\\n    server: https://172.16.11.***:6443\\n    certificate-authority-data: LS0tLS1CRU=...\\n  name: kubernetes\\ncontexts:\\n- context:\\n    cluster: kubernetes\\n    user: \\"kubernetes-a****\\"\\n  name: kubernetes-admin-cc2cbf5802bec4bfa9fae4014d8c****\\ncurrent-context: kubernetes-admin-cc2cbf5802bec4bfa9fae4014d8c9****\\nkind: Config\\npreferences: {}\\nusers:\\n- name: \\"kubernetes-admin\\"\\n  user:\\n    client-certificate-data: LS0tLS1CRU...\\n    client-key-data: LS0tCg==...\\n"
',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5BE4C329-DCC2-5B61-8F66-112B7D7FC712\\",\\n  \\"Kubeconfig\\": \\"\\\\n\\\\\\"\\\\\\\\napiVersion: v1\\\\\\\\nclusters:\\\\\\\\n- cluster:\\\\\\\\n    server: https://172.16.11.***:6443\\\\\\\\n    certificate-authority-data: LS0tLS1CRU=...\\\\\\\\n  name: kubernetes\\\\\\\\ncontexts:\\\\\\\\n- context:\\\\\\\\n    cluster: kubernetes\\\\\\\\n    user: \\\\\\\\\\\\\\"kubernetes-a****\\\\\\\\\\\\\\"\\\\\\\\n  name: kubernetes-admin-cc2cbf5802bec4bfa9fae4014d8c****\\\\\\\\ncurrent-context: kubernetes-admin-cc2cbf5802bec4bfa9fae4014d8c9****\\\\\\\\nkind: Config\\\\\\\\npreferences: {}\\\\\\\\nusers:\\\\\\\\n- name: \\\\\\\\\\\\\\"kubernetes-admin\\\\\\\\\\\\\\"\\\\\\\\n  user:\\\\\\\\n    client-certificate-data: LS0tLS1CRU...\\\\\\\\n    client-key-data: LS0tCg==...\\\\\\\\n\\\\\\"\\\\n\\"\\n}","type":"json"}]',
      'title' => '获取集群的KubeConfig',
    ),
    'GrantUserPermission' => 
    array (
      'summary' => '为RAM用户或RAM角色授予RBAC权限。RAM系统策略仅控制ACK One集群资源的操作权限（例如创建实例、查看实例列表等），若RAM用户或RAM角色需要操作指定集群内的K8s资源，例如，创建GitOps Application和Argo Workflow等，还需要获取指定ACK One集群及其命名空间的操作权限即RBAC权限。本文为您介绍如何为RAM用户或RAM角色授予RBAC权限。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '172097',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpP565GF',
          1 => 'FEATUREadcp181E1P',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权类型，取值：

- cluster：集群维度。
- namespace: 命名空间维度。',
            'type' => 'string',
            'required' => true,
            'example' => 'cluster',
            'enum' => 
            array (
              0 => 'cluster',
              1 => 'namespace',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'RoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预置的角色名称，取值：

- admin: 管理员。
- dev：开发人员。
- gitops-dev: GitOps开发人员（仅限于舰队实例）。

RoleName参数取值和RoleType参数取值关系如下：
- 当**RoleType**取值为**cluster**时，本参数只能设置为**admin**。
- 当**RoleType**取值为**namespace**时，本参数只能设置为**dev**或**gitops-dev**。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'dev' => 'dev',
              'admin' => 'admin',
              'gitops-dev' => 'gitops-dev',
            ),
            'example' => 'admin',
            'enum' => 
            array (
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c102fe5f1ee5d4c87a68121a77d8b****',
          ),
        ),
        3 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间名称。

- 当**RoleType**取值为**cluster**时，本参数无需设置。
- 当**RoleType**取值为**namespace**时，本参数必须填写。
- 当**RoleType**取值为**namespace**，且**RoleName**取值为**gitops-dev**时，本参数必须设置且只能设置为**argocd**。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        4 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RAM用户ID或者RAM角色ID。',
            'type' => 'string',
            'required' => true,
            'example' => '2176****',
          ),
        ),
        5 => 
        array (
          'name' => 'IsRamRole',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标权限授予实体，如果是RAM角色，则为`true`，否则为`false`。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2D676EFC-8C04-5CCE-A08E-BB97D24B47E8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2D676EFC-8C04-5CCE-A08E-BB97D24B47E8\\"\\n}","type":"json"}]',
      'title' => '授予RAM用户RBAC权限',
      'description' => '- 您需要使用阿里云账号（主账号）、集群创建者或已具有集群管理员权限的RAM用户，为指定的RAM用户或RAM角色授权，普通RAM用户无调用本接口进行授权操作的权限。
- 授予RBAC权限前，您需要先为RAM用户或RAM角色授予ACK One集群的操作权限，具体操作，请参见[为RAM用户或RAM角色授予系统权限策略](~~613486~~)。

更多授权信息，请参见[授权概述](~~613468~~)。',
    ),
    'UpdateUserPermission' => 
    array (
      'summary' => '更新RAM用户RBAC授权。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '172098',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpP565GF',
          1 => 'FEATUREadcp181E1P',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权类型，取值：

- cluster：主控实例维度。
- namespace: 命名空间维度。',
            'type' => 'string',
            'required' => true,
            'example' => 'cluster',
            'enum' => 
            array (
              0 => 'cluster',
              1 => 'namespace',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'RoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预置的角色名称，取值：

- admin: 管理员。
- dev：开发人员。',
            'type' => 'string',
            'required' => true,
            'example' => 'admin',
            'enum' => 
            array (
              0 => 'admin',
              1 => 'dev',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主控实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c8e28143817db4b039b8548d7c899****',
          ),
        ),
        3 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间名称，主控实例维度授权时默认为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        4 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RAM用户ID。',
            'type' => 'string',
            'required' => true,
            'example' => '2176****',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '62F5AA2B-A2C9-5135-BCE2-C2167099****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"62F5AA2B-A2C9-5135-BCE2-C2167099****\\"\\n}","type":"json"}]',
      'title' => '更新RAM用户RBAC授权',
    ),
    'DeleteUserPermission' => 
    array (
      'summary' => '删除RAM用户RBAC授权。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '172099',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpP565GF',
          1 => 'FEATUREadcp181E1P',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RAM用户ID。',
            'type' => 'string',
            'required' => true,
            'example' => '2176****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主控实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c09946603cd764dac96135f51d1ba****',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2D676EFC-8C04-5CCE-A08E-BB97D24B47E8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2D676EFC-8C04-5CCE-A08E-BB97D24B47E8\\"\\n}","type":"json"}]',
      'title' => '删除RAM用户RBAC授权',
    ),
    'DescribePolicies' => 
    array (
      'summary' => '列举策略治理规则库列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '144926',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpVUYVM4',
        ),
      ),
      'parameters' => 
      array (
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9439169C-64C1-5849-9F7C-E3E60BDDEF7A',
              ),
              'Policies' => 
              array (
                'description' => '策略治理规则库列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '策略治理规则。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Category' => 
                    array (
                      'description' => '策略类型。',
                      'type' => 'string',
                      'example' => 'psp',
                    ),
                    'Names' => 
                    array (
                      'description' => '策略名称列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '策略名称。',
                        'type' => 'string',
                        'example' => 'ACKCheckNginxAnnotation',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9439169C-64C1-5849-9F7C-E3E60BDDEF7A\\",\\n  \\"Policies\\": [\\n    {\\n      \\"Category\\": \\"psp\\",\\n      \\"Names\\": [\\n        \\"ACKCheckNginxAnnotation\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列举策略治理规则库列表',
    ),
    'DescribePolicyDetails' => 
    array (
      'summary' => '获取策略治理规则模板详情。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '144927',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpVUYVM4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '策略治理规则名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ACKAllowedRepos',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2D676EFC-8C04-5CCE-A08E-BB97D24B47E8',
              ),
              'Policy' => 
              array (
                'description' => '策略治理规则。',
                'type' => 'object',
                'properties' => 
                array (
                  'Name' => 
                  array (
                    'description' => '策略治理规则名称。',
                    'type' => 'string',
                    'example' => 'ACKAllowedRepos',
                  ),
                  'Category' => 
                  array (
                    'description' => '规则模板类型。',
                    'type' => 'string',
                    'example' => 'k8s-general
',
                  ),
                  'Description' => 
                  array (
                    'description' => '规则模板描述。',
                    'type' => 'string',
                    'example' => 'Requires container images to begin with a repo string from a specified list
',
                  ),
                  'Action' => 
                  array (
                    'description' => '规则治理动作，取值：

- enforce：拦截违规部署。
- inform：告警。',
                    'type' => 'string',
                    'example' => 'enforce',
                  ),
                  'Severity' => 
                  array (
                    'description' => '规则治理等级。',
                    'type' => 'string',
                    'example' => 'high',
                  ),
                  'Template' => 
                  array (
                    'description' => '规则模板详情。',
                    'type' => 'string',
                    'example' => '详情参考返回内容。',
                  ),
                  'NoConfig' => 
                  array (
                    'description' => '是否需要配置策略，取值：

- 0：表示需要参数配置。
- 1：表示无需参数配置。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Created' => 
                  array (
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '2021-11-18T10:52:17+08:00',
                  ),
                  'Updated' => 
                  array (
                    'description' => '最后更新时间。',
                    'type' => 'string',
                    'example' => '2021-11-18T10:52:17+08:00',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2D676EFC-8C04-5CCE-A08E-BB97D24B47E8\\",\\n  \\"Policy\\": {\\n    \\"Name\\": \\"ACKAllowedRepos\\",\\n    \\"Category\\": \\"k8s-general\\\\n\\",\\n    \\"Description\\": \\"Requires container images to begin with a repo string from a specified list\\\\n\\",\\n    \\"Action\\": \\"enforce\\",\\n    \\"Severity\\": \\"high\\",\\n    \\"Template\\": \\"详情参考返回内容。\\",\\n    \\"NoConfig\\": 0,\\n    \\"Created\\": \\"2021-11-18T10:52:17+08:00\\",\\n    \\"Updated\\": \\"2021-11-18T10:52:17+08:00\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取策略治理规则模板详情',
    ),
    'DeployPolicyInstance' => 
    array (
      'summary' => '在主控实例关联集群中部署策略规则实例。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '176407',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpVUYVM4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '策略治理规则名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ACKNoEnvVarSecrets',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespaces',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'Namespace集合',
            'type' => 'array',
            'items' => 
            array (
              'description' => '限制策略实施的命名空间，为空时表示所有命名空间。',
              'type' => 'string',
              'required' => false,
              'example' => '["default"]',
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'ClusterIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'JSON格式的字符串，可以被解析为一个字符串数组。要部署策略规则的关联集群数组。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'JSON格式的字符串，可以被解析为一个字符串数组。要部署策略规则的关联集群数组。',
              'type' => 'string',
              'required' => false,
              'example' => '["c1c731554c1ec4a1ca9bb690ff9ed****"]',
            ),
            'required' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'PolicyAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则治理动作，取值：

- deny：拦截违规部署
- warn：告警',
            'type' => 'string',
            'required' => true,
            'example' => 'warn',
            'enum' => 
            array (
              0 => 'deny',
              1 => 'warn',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主控实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c102fe5f1ee5d4c87a68121a77d8b****',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2D676EFC-8C04-5CCE-A08E-BB97D24B47E8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2D676EFC-8C04-5CCE-A08E-BB97D24B47E8\\"\\n}","type":"json"}]',
      'title' => '在主控实例关联集群中部署策略规则实例',
    ),
    'DescribePolicyInstances' => 
    array (
      'summary' => '查询主控实例关联集群的策略实例。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '176411',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpVUYVM4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '策略治理规则名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ACKNoEnvVarSecrets',
          ),
        ),
        1 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主控实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c102fe5f1ee5d4c87a68121a77d8b****',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5BE4C329-DCC2-5B61-8F66-112B7D7FC712',
              ),
              'Policies' => 
              array (
                'description' => '策略实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '策略实例。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PolicyName' => 
                    array (
                      'description' => '策略治理规则名称',
                      'type' => 'string',
                      'example' => 'ACKPSPCapabilities',
                    ),
                    'InstanceName' => 
                    array (
                      'description' => '规则实例名称。',
                      'type' => 'string',
                      'example' => 'no-env-var-secrets-****
',
                    ),
                    'PolicyCategory' => 
                    array (
                      'description' => '策略类型名称。',
                      'type' => 'string',
                      'example' => 'k8s-general
',
                    ),
                    'PolicyDescription' => 
                    array (
                      'description' => '规则模板描述。',
                      'type' => 'string',
                      'example' => 'Restricts secrets used in pod envs
',
                    ),
                    'PolicySeverity' => 
                    array (
                      'description' => '规则实例治理等级。',
                      'type' => 'string',
                      'example' => 'low',
                    ),
                    'PolicyScope' => 
                    array (
                      'description' => '策略实例实施范围：

默认"*"代表集群所有命名空间。

否则返回作用Namespaces名称，多个Namespaces以逗号（,）分隔。',
                      'type' => 'string',
                      'example' => '*',
                    ),
                    'PolicyAction' => 
                    array (
                      'description' => '规则治理动作，取值：

- deny：拦截违规部署
- warn：告警',
                      'type' => 'string',
                      'example' => 'warn',
                    ),
                    'TotalViolations' => 
                    array (
                      'description' => '关联集群中当前被拦截和告警两种处理类型下不同治理等级的违规计数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'ClusterId' => 
                    array (
                      'description' => '关联集群ID。',
                      'type' => 'string',
                      'example' => 'cd0e6882394f7496589837cac3585****',
                    ),
                    'PolicyParameters' => 
                    array (
                      'description' => '当前规则实例的配置参数。',
                      'type' => 'object',
                      'additionalProperties' => 
                      array (
                        'type' => 'string',
                        'description' => '当前规则实例的配置参数。',
                        'example' => '"restrictedNamespaces": [ "test" ]
',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5BE4C329-DCC2-5B61-8F66-112B7D7FC712\\",\\n  \\"Policies\\": [\\n    {\\n      \\"PolicyName\\": \\"ACKPSPCapabilities\\",\\n      \\"InstanceName\\": \\"no-env-var-secrets-****\\\\n\\",\\n      \\"PolicyCategory\\": \\"k8s-general\\\\n\\",\\n      \\"PolicyDescription\\": \\"Restricts secrets used in pod envs\\\\n\\",\\n      \\"PolicySeverity\\": \\"low\\",\\n      \\"PolicyScope\\": \\"*\\",\\n      \\"PolicyAction\\": \\"warn\\",\\n      \\"TotalViolations\\": 2,\\n      \\"ClusterId\\": \\"cd0e6882394f7496589837cac3585****\\",\\n      \\"PolicyParameters\\": {\\n        \\"key\\": \\"\\\\\\"restrictedNamespaces\\\\\\": [ \\\\\\"test\\\\\\" ]\\\\n\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询主控实例关联集群的策略实例',
    ),
    'DescribePolicyInstancesStatus' => 
    array (
      'summary' => '获取主控实例关联集群指定策略规则实例详情。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '176412',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpVUYVM4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主控实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c676decda7b8148d69a9aba751877****',
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
            'description' => '响应对象。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5D89C59A-A7EB-5BF8-B094-6479175346CA',
              ),
              'Policies' => 
              array (
                'description' => '不同策略类型下的策略实例计数列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'PolicyInstances' => 
                  array (
                    'description' => '不同策略类型下的策略实例计数列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '不同策略类型下的策略实例计数列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PolicyName' => 
                        array (
                          'description' => '策略治理规则名称。',
                          'type' => 'string',
                          'example' => 'ACKRestrictRoleBindings',
                        ),
                        'PolicyCategory' => 
                        array (
                          'description' => '策略类型。',
                          'type' => 'string',
                          'example' => 'compliance
',
                        ),
                        'PolicyDescription' => 
                        array (
                          'description' => '策略描述。',
                          'type' => 'string',
                          'example' => 'Restricts use of the cluster-admin role.
',
                        ),
                        'PolicySeverity' => 
                        array (
                          'description' => '策略治理等级。',
                          'type' => 'string',
                          'example' => 'low',
                        ),
                        'PolicyInstancesCount' => 
                        array (
                          'description' => '已部署的策略实例计数，如果字段为空说明未部署该类型策略实例。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'PolicyClusters' => 
                        array (
                          'description' => '已部署策略的关联集群。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '已部署策略的关联集群。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ClusterId' => 
                              array (
                                'description' => '集群ID。',
                                'type' => 'string',
                                'example' => 'c639e5310e73e4a29ab18d6330a633****',
                              ),
                              'Status' => 
                              array (
                                'description' => '策略部署状态。',
                                'type' => 'string',
                                'example' => 'Success',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'SeverityInfo' => 
                  array (
                    'description' => '集群中当前部署的不同治理等级的策略实例计数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '集群中当前部署的不同治理等级的策略实例计数。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SeverityType' => 
                        array (
                          'description' => '策略治理等级。',
                          'type' => 'string',
                          'example' => 'low',
                        ),
                        'SeverityCount' => 
                        array (
                          'description' => '策略实例计数。',
                          'type' => 'string',
                          'example' => '2',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5D89C59A-A7EB-5BF8-B094-6479175346CA\\",\\n  \\"Policies\\": {\\n    \\"PolicyInstances\\": [\\n      {\\n        \\"PolicyName\\": \\"ACKRestrictRoleBindings\\",\\n        \\"PolicyCategory\\": \\"compliance\\\\n\\",\\n        \\"PolicyDescription\\": \\"Restricts use of the cluster-admin role.\\\\n\\",\\n        \\"PolicySeverity\\": \\"low\\",\\n        \\"PolicyInstancesCount\\": 2,\\n        \\"PolicyClusters\\": [\\n          {\\n            \\"ClusterId\\": \\"c639e5310e73e4a29ab18d6330a633****\\",\\n            \\"Status\\": \\"Success\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"SeverityInfo\\": [\\n      {\\n        \\"SeverityType\\": \\"low\\",\\n        \\"SeverityCount\\": \\"2\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取主控实例关联集群指定策略规则实例详情',
    ),
    'DescribePolicyGovernanceInCluster' => 
    array (
      'summary' => '获取主控实例下关联集群策略治理详情。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '176414',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpVUYVM4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主控实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c09946603cd764dac96135f51d1ba****',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '96C6A284-0EC3-5486-9A97-E8E9EE27E9EF',
              ),
              'PolicyGovernances' => 
              array (
                'description' => '策略治理详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '策略治理详情列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Cluster' => 
                    array (
                      'description' => '策略部署集群信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ClusterId' => 
                        array (
                          'description' => '关联集群ID。',
                          'type' => 'string',
                          'example' => 'ca5cf1b5edb5c4736a6ea0dfb4061****',
                        ),
                        'Name' => 
                        array (
                          'description' => '集群名称。',
                          'type' => 'string',
                          'example' => 'ack-001',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '集群所在地域ID。',
                          'type' => 'string',
                          'example' => 'cn-heyuan',
                        ),
                        'State' => 
                        array (
                          'description' => '集群状态。',
                          'type' => 'string',
                          'example' => 'running',
                        ),
                        'ClusterType' => 
                        array (
                          'description' => '集群类型。',
                          'type' => 'string',
                          'example' => 'ManagedKubernetes',
                        ),
                        'ClusterSpec' => 
                        array (
                          'description' => '集群规格。',
                          'type' => 'string',
                          'example' => 'ack.pro.small ',
                        ),
                        'Profile' => 
                        array (
                          'description' => '集群标识。',
                          'type' => 'string',
                          'example' => 'Default',
                        ),
                      ),
                    ),
                    'PolicyGovernance' => 
                    array (
                      'description' => '策略治理详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'OnState' => 
                        array (
                          'description' => '当前关联集群中开启的不同等级策略计数统计。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '当前关联集群中开启的不同等级策略计数统计。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'EnabledCount' => 
                              array (
                                'description' => '当前开启的策略种类计数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                              ),
                              'TotalCount' => 
                              array (
                                'description' => '该等级下策略种类总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                              ),
                              'Severity' => 
                              array (
                                'description' => '策略治理等级。',
                                'type' => 'string',
                                'example' => 'low',
                              ),
                            ),
                          ),
                        ),
                        'AdmitLog' => 
                        array (
                          'description' => '关联集群当前策略治理审计日志。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Progress' => 
                            array (
                              'description' => '查询结果的状态，取值：

- Complete：查询已经完成，返回结果为完整结果。
- Incomplete：查询已经完成，返回结果为不完整结果，需要重复请求以获得完整结果。',
                              'type' => 'string',
                              'example' => 'Complete',
                            ),
                            'Count' => 
                            array (
                              'description' => '当前查询到的日志总数。',
                              'type' => 'string',
                              'example' => '100',
                            ),
                            'Logs' => 
                            array (
                              'description' => '策略治理审计日志内容。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '策略治理审计日志内容。',
                                'type' => 'object',
                                'additionalProperties' => 
                                array (
                                  'type' => 'string',
                                  'description' => '策略治理审计日志内容。',
                                  'example' => 'c8155823d057948c69a****
',
                                ),
                              ),
                            ),
                            'LogProject' => 
                            array (
                              'description' => '日志服务LogProject的名称。',
                              'type' => 'string',
                              'example' => 'demo',
                            ),
                            'LogStore' => 
                            array (
                              'description' => '日志服务LogStore的名称。',
                              'type' => 'string',
                              'example' => 'demo',
                            ),
                          ),
                        ),
                        'Violation' => 
                        array (
                          'description' => '关联集群中针对不同策略类型的拦截和告警的审计计数统计列表。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'TotalViolations' => 
                            array (
                              'description' => '关联集群中当前被拦截和告警两种处理类型下不同治理等级的违规计数。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Deny' => 
                                array (
                                  'description' => '被拦截的不同治理等级的违规计数统计。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '被拦截的不同治理等级的违规计数统计。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Severity' => 
                                      array (
                                        'description' => '策略治理等级。',
                                        'type' => 'string',
                                        'example' => 'low',
                                      ),
                                      'Violations' => 
                                      array (
                                        'description' => '被拦截的事件计数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                      ),
                                    ),
                                  ),
                                ),
                                'Warn' => 
                                array (
                                  'description' => '告警模式下不同治理等级的违规计数统计。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '告警模式下不同治理等级的违规计数统计。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Severity' => 
                                      array (
                                        'description' => '策略治理等级。',
                                        'type' => 'string',
                                        'example' => 'low',
                                      ),
                                      'Violations' => 
                                      array (
                                        'description' => '被拦截的事件计数。',
                                        'type' => 'string',
                                        'example' => '2',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'Violations' => 
                            array (
                              'description' => '关联集群中针对不同策略类型的拦截和告警的审计计数统计列表。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Deny' => 
                                array (
                                  'description' => '被拦截的不同策略类型的审计计数。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '被拦截的不同策略类型的审计计数。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'PolicyName' => 
                                      array (
                                        'description' => '策略治理规则名称。',
                                        'type' => 'string',
                                        'example' => 'ACKPSPCapabilities',
                                      ),
                                      'PolicyDescription' => 
                                      array (
                                        'description' => '规则模板描述。',
                                        'type' => 'string',
                                        'example' => 'Restricts secrets used in pod envs
',
                                      ),
                                      'Severity' => 
                                      array (
                                        'description' => '策略治理等级。',
                                        'type' => 'string',
                                        'example' => 'low',
                                      ),
                                      'Violations' => 
                                      array (
                                        'description' => '关联集群中对应规则类型下被拦截的违规计数统计。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                      ),
                                    ),
                                  ),
                                ),
                                'Warn' => 
                                array (
                                  'description' => '告警模式下不同治理等级的违规计数统计。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '告警模式下不同治理等级的违规计数统计。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'PolicyName' => 
                                      array (
                                        'description' => '策略治理规则名称。',
                                        'type' => 'string',
                                        'example' => 'ACKPSPCapabilities',
                                      ),
                                      'PolicyDescription' => 
                                      array (
                                        'description' => '规则模板描述。',
                                        'type' => 'string',
                                        'example' => 'Restricts secrets used in pod envs
',
                                      ),
                                      'Severity' => 
                                      array (
                                        'description' => '策略治理等级。',
                                        'type' => 'string',
                                        'example' => 'low',
                                      ),
                                      'Violations' => 
                                      array (
                                        'description' => '关联集群中对应规则类型下被告警的违规计数统计。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
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
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"96C6A284-0EC3-5486-9A97-E8E9EE27E9EF\\",\\n  \\"PolicyGovernances\\": [\\n    {\\n      \\"Cluster\\": {\\n        \\"ClusterId\\": \\"ca5cf1b5edb5c4736a6ea0dfb4061****\\",\\n        \\"Name\\": \\"ack-001\\",\\n        \\"RegionId\\": \\"cn-heyuan\\",\\n        \\"State\\": \\"running\\",\\n        \\"ClusterType\\": \\"ManagedKubernetes\\",\\n        \\"ClusterSpec\\": \\"ack.pro.small \\",\\n        \\"Profile\\": \\"Default\\"\\n      },\\n      \\"PolicyGovernance\\": {\\n        \\"OnState\\": [\\n          {\\n            \\"EnabledCount\\": 2,\\n            \\"TotalCount\\": 2,\\n            \\"Severity\\": \\"low\\"\\n          }\\n        ],\\n        \\"AdmitLog\\": {\\n          \\"Progress\\": \\"Complete\\",\\n          \\"Count\\": \\"100\\",\\n          \\"Logs\\": [\\n            {\\n              \\"key\\": \\"c8155823d057948c69a****\\\\n\\"\\n            }\\n          ],\\n          \\"LogProject\\": \\"demo\\",\\n          \\"LogStore\\": \\"demo\\"\\n        },\\n        \\"Violation\\": {\\n          \\"TotalViolations\\": {\\n            \\"Deny\\": [\\n              {\\n                \\"Severity\\": \\"low\\",\\n                \\"Violations\\": 2\\n              }\\n            ],\\n            \\"Warn\\": [\\n              {\\n                \\"Severity\\": \\"low\\",\\n                \\"Violations\\": \\"2\\"\\n              }\\n            ]\\n          },\\n          \\"Violations\\": {\\n            \\"Deny\\": [\\n              {\\n                \\"PolicyName\\": \\"ACKPSPCapabilities\\",\\n                \\"PolicyDescription\\": \\"Restricts secrets used in pod envs\\\\n\\",\\n                \\"Severity\\": \\"low\\",\\n                \\"Violations\\": 2\\n              }\\n            ],\\n            \\"Warn\\": [\\n              {\\n                \\"PolicyName\\": \\"ACKPSPCapabilities\\",\\n                \\"PolicyDescription\\": \\"Restricts secrets used in pod envs\\\\n\\",\\n                \\"Severity\\": \\"low\\",\\n                \\"Violations\\": 2\\n              }\\n            ]\\n          }\\n        }\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取主控实例下关联集群策略治理详情',
    ),
    'DeletePolicyInstance' => 
    array (
      'summary' => '删除关联集群中的策略规则实例。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '176415',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpVUYVM4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主控实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c09946603cd764dac96135f51d1ba****',
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '策略治理规则名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ACKNoEnvVarSecrets',
          ),
        ),
        2 => 
        array (
          'name' => 'ClusterIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'JSON格式的字符串，可以被解析为一个字符串数组。要删除策略规则的关联集群数组。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'JSON格式的字符串，可以被解析为一个字符串数组。要删除策略规则的关联集群数组。',
              'type' => 'string',
              'required' => false,
              'example' => '["c1c731554c1ec4a1ca9bb690ff9ed****"]',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EA06613B-37A3-549E-BAE0-E4AD8A6E93D7',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EA06613B-37A3-549E-BAE0-E4AD8A6E93D7\\"\\n}","type":"json"}]',
      'title' => '删除关联集群中的策略规则实例',
    ),
    'DescribeHubClusterLogs' => 
    array (
      'summary' => '获取ACK One多集群舰队主控集群的日志。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '125616',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpH1M5DC',
          1 => 'FEATUREadcpMQ5GFM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群ID',
            'description' => '主控集群的ID。您可以调用[DescribeHubClusters](~~424404~~)接口查询已创建的主控集群。',
            'type' => 'string',
            'required' => true,
            'example' => 'c9cb1d933b2ab47ff9cd25571477d****',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '661192D7-25A6-54C2-B643-1129CB7D2768',
              ),
              'Logs' => 
              array (
                'description' => '操作日志简要信息数组。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '日志信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreationTime' => 
                    array (
                      'description' => '日志创建时间。格式：<i>yyyy-mm-dd</i>t<i>hh:mm:ss</i>z（utc时间）。',
                      'type' => 'string',
                      'example' => '2021-12-02T11:48:15+08:00',
                    ),
                    'ClusterId' => 
                    array (
                      'description' => '集群ID。',
                      'type' => 'string',
                      'example' => 'c102fe5f1ee5d4c87a68121a77d8b****',
                    ),
                    'ClusterLog' => 
                    array (
                      'description' => '集群日志。',
                      'type' => 'string',
                      'example' => 'Cluster Created',
                    ),
                    'LogLevel' => 
                    array (
                      'description' => '日志级别。取值范围：
- error：错误。
- warn：警告。
- info：信息。',
                      'type' => 'string',
                      'example' => 'info',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"661192D7-25A6-54C2-B643-1129CB7D2768\\",\\n  \\"Logs\\": [\\n    {\\n      \\"CreationTime\\": \\"2021-12-02T11:48:15+08:00\\",\\n      \\"ClusterId\\": \\"c102fe5f1ee5d4c87a68121a77d8b****\\",\\n      \\"ClusterLog\\": \\"Cluster Created\\",\\n      \\"LogLevel\\": \\"info\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询集群日志',
    ),
    'DescribeRegions' => 
    array (
      'summary' => '查看可选的地域。',
      'methods' => 
      array (
        0 => 'get',
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
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '128489',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpMQ5GFM',
          1 => 'FEATUREadcpH1M5DC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。取值：
- `zh`：中文。
- `en`：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C0EE05F4-6C1D-5993-B028-B569F9ED6B51',
              ),
              'Regions' => 
              array (
                'description' => '地域信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '地域数据。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'LocalName' => 
                    array (
                      'description' => '地域名称。',
                      'type' => 'string',
                      'example' => 'China (Hangzhou)',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C0EE05F4-6C1D-5993-B028-B569F9ED6B51\\",\\n  \\"Regions\\": [\\n    {\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"LocalName\\": \\"China (Hangzhou)\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查看可选的地域',
    ),
    'ChangeResourceGroup' => 
    array (
      'summary' => '更新资源组',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '218610',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadcpH1M5DC',
          1 => 'FEATUREadcpMQ5GFM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型的ID标识符。例如，当ResourceType=cluster时，则ResourceId可以理解为ClusterId。',
            'type' => 'string',
            'required' => true,
            'example' => 'c9603ee23a84a41d6a1424619cb80****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型，仅支持cluster。',
            'type' => 'string',
            'required' => false,
            'example' => 'cluster',
            'enum' => 
            array (
              0 => 'cluster',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'NewResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新的资源组ID，可在资源组控制台查看可用资源组。',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-aekzlvgbhaca***',
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
                'example' => '5BE4C329-DCC2-5B61-8F66-112B7D7FC712',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5BE4C329-DCC2-5B61-8F66-112B7D7FC712\\"\\n}","type":"json"}]',
      'title' => '资源组转组',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'adcp.cn-beijing.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'adcp.cn-zhangjiakou.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'adcp.cn-hangzhou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'adcp.cn-shanghai.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'adcp.cn-shenzhen.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'adcp.cn-heyuan.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'adcp.cn-hongkong.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'adcp.ap-northeast-1.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'adcp.ap-southeast-1.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'adcp.ap-southeast-5.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'adcp.cn-shanghai-finance-1.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'adcp.cn-shenzhen-finance-1.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'me-central-1',
      'endpoint' => 'adcp.me-central-1.aliyuncs.com',
    ),
  ),
);
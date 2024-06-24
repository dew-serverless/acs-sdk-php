<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Eci',
    'version' => '2018-08-08',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 99743,
      'title' => '地域',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
      ),
    ),
    1 => 
    array (
      'id' => 99745,
      'title' => '容器组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateContainerGroup',
        1 => 'UpdateContainerGroup',
        2 => 'DescribeContainerGroups',
        3 => 'DescribeContainerGroupStatus',
        4 => 'DescribeContainerGroupEvents',
        5 => 'ResizeContainerGroupVolume',
        6 => 'RestartContainerGroup',
        7 => 'DeleteContainerGroup',
      ),
    ),
    2 => 
    array (
      'id' => 178925,
      'title' => '容器',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ExecContainerCommand',
        1 => 'DescribeContainerLog',
        2 => 'CommitContainer',
        3 => 'DescribeCommitContainerTask',
      ),
    ),
    3 => 
    array (
      'id' => 99760,
      'title' => '镜像缓存',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateImageCache',
        1 => 'DeleteImageCache',
        2 => 'UpdateImageCache',
        3 => 'DescribeImageCaches',
      ),
    ),
    4 => 
    array (
      'id' => 183905,
      'title' => '数据缓存',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDataCache',
        1 => 'DescribeDataCaches',
        2 => 'UpdateDataCache',
        3 => 'CopyDataCache',
        4 => 'DeleteDataCache',
      ),
    ),
    5 => 
    array (
      'id' => 99755,
      'title' => '虚拟节点',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateVirtualNode',
        1 => 'DeleteVirtualNode',
        2 => 'UpdateVirtualNode',
        3 => 'DescribeVirtualNodes',
      ),
    ),
    6 => 
    array (
      'id' => 99765,
      'title' => '监控',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeContainerGroupMetric',
        1 => 'DescribeMultiContainerGroupMetric',
      ),
    ),
    7 => 
    array (
      'id' => 99772,
      'title' => '运维操作',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateInstanceOpsTask',
        1 => 'DescribeInstanceOpsRecords',
      ),
    ),
    8 => 
    array (
      'id' => 193218,
      'title' => '标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'TagResources',
        1 => 'ListTagResources',
        2 => 'UntagResources',
      ),
    ),
    9 => 
    array (
      'id' => 99769,
      'title' => '其他接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListUsage',
        1 => 'DescribeContainerGroupPrice',
        2 => 'DescribeAvailableResource',
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
    'DescribeRegions' => 
    array (
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
        'abilityTreeCode' => '17738',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeciTLPZOI',
          1 => 'FEATUREeciL85GGA',
          2 => 'FEATUREeciO4MP7I',
          3 => 'FEATUREeciWX1P2C',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID，唯一标识。',
                'type' => 'string',
                'example' => '89945DD3-9072-47D0-A318-353284CFC7B3',
              ),
              'Regions' => 
              array (
                'description' => '地域信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '地域信息集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Zones' => 
                    array (
                      'description' => '可用区。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '可用区。',
                        'type' => 'string',
                        'example' => 'cn-hangzhou-g',
                      ),
                    ),
                    'RecommendZones' => 
                    array (
                      'description' => '推荐可用区。当前地域下，整体库存量相对充足的可用区。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '推荐可用区。当前地域下，整体库存量相对充足的可用区。',
                        'type' => 'string',
                        'example' => 'cn-hangzhou-j',
                      ),
                    ),
                    'RegionEndpoint' => 
                    array (
                      'description' => '地域对应的接入地址（Endpoint）。',
                      'type' => 'string',
                      'example' => 'eci.aliyuncs.com',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"89945DD3-9072-47D0-A318-353284CFC7B3\\",\\n  \\"Regions\\": [\\n    {\\n      \\"Zones\\": [\\n        \\"cn-hangzhou-g\\"\\n      ],\\n      \\"RecommendZones\\": [\\n        \\"cn-hangzhou-j\\"\\n      ],\\n      \\"RegionEndpoint\\": \\"eci.aliyuncs.com\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n  <RequestId>BF910418-FF74-4C99-B2D5-B77C88E49A44</RequestId>\\n  <Regions>\\n      <RecommendZones>cn-hangzhou-h</RecommendZones>\\n      <RecommendZones>cn-hangzhou-i</RecommendZones>\\n      <RecommendZones>cn-hangzhou-j</RecommendZones>\\n      <RegionId>cn-hangzhou</RegionId>\\n      <RegionEndpoint>eci.aliyuncs.com</RegionEndpoint>\\n      <Zones>cn-hangzhou-g</Zones>\\n      <Zones>cn-hangzhou-e</Zones>\\n      <Zones>cn-hangzhou-f</Zones>\\n      <Zones>cn-hangzhou-h</Zones>\\n      <Zones>cn-hangzhou-i</Zones>\\n      <Zones>cn-hangzhou-j</Zones>\\n      <Zones>cn-hangzhou-k</Zones>\\n  </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
      'title' => '查询可以使用的阿里云地域和可用区',
      'summary' => '查询弹性容器实例支持的地域和可用区信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateContainerGroup' => 
    array (
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
        'abilityTreeCode' => '17723',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeci5C81JE',
          1 => 'FEATUREeciUA7Z4X',
          2 => 'FEATUREeci6OZGI2',
          3 => 'FEATUREeci2ZQZXG',
          4 => 'FEATUREeciTNOJE5',
          5 => 'FEATUREeciT4H7SE',
          6 => 'FEATUREeciIKTG4T',
          7 => 'FEATUREeci0ITHIE',
          8 => 'FEATUREeci6EO4L5',
          9 => 'FEATUREeciE8K96A',
          10 => 'FEATUREeciWX1P2C',
          11 => 'FEATUREeciO4MP7I',
          12 => 'FEATUREeciL85GGA',
          13 => 'FEATUREeciTLPZOI',
          14 => 'FEATUREeciMQBGSL',
          15 => 'FEATUREeciURG2P2',
          16 => 'FEATUREeciHV8ZT3',
          17 => 'FEATUREeciW85X4O',
          18 => 'FEATUREeciVUTLVI',
          19 => 'FEATUREeci0764O2',
          20 => 'FEATUREeciJCC6LW',
          21 => 'FEATUREeciV3EHPN',
          22 => 'FEATUREeciAKHEC6',
          23 => 'FEATUREeci3RK7J6',
          24 => 'FEATUREeciE6R8DD',
          25 => 'FEATUREeci285KA3',
          26 => 'FEATUREeciG6ANZT',
          27 => 'FEATUREeci8EZOP4',
          28 => 'FEATUREeciCB9RZH',
          29 => 'FEATUREeciWJI928',
          30 => 'FEATUREeciSWZRZY',
          31 => 'FEATUREeciFNO51E',
          32 => 'FEATUREeciIGQQJ4',
          33 => 'FEATUREeci62HD6F',
          34 => 'FEATUREeciIY8PHC',
          35 => 'FEATUREeciSBWW1M',
          36 => 'FEATUREeciXZCGBO',
          37 => 'FEATUREeciWNN4ZA',
          38 => 'FEATUREeciD229V6',
          39 => 'FEATUREeciI5SLQA',
          40 => 'FEATUREeciOZ73BH',
          41 => 'FEATUREeciESSPHI',
          42 => 'FEATUREeciOFIQXM',
          43 => 'FEATUREeciPOV784',
          44 => 'FEATUREeciO8VNZM',
          45 => 'FEATUREeciL4OXNU',
          46 => 'FEATUREeciTSN7MB',
          47 => 'FEATUREeciXIMF39',
          48 => 'FEATUREeciY9GS39',
          49 => 'FEATUREeci5NN3BU',
          50 => 'FEATUREeciIT94P2',
          51 => 'FEATUREeciCZBDK8',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的可用区。如果取值为空，则表示由系统选择。

默认值为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-b',
          ),
        ),
        3 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的安全组ID。同一个安全组内的实例之间可以互相访问。

如果没有指定安全组，系统将自动使用您选择的地域下的默认安全组，您需要确保该安全组的入方向规则中包含容器需要暴露的协议和端口。如果您在该地域下没有默认安全组，系统将自动创建一个默认安全组，并将您声明的容器协议和端口添加到该安全组的入方向规则中。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'sg-uf66jeqopgqa9hdn****',
          ),
        ),
        4 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的交换机ID。支持指定多个交换机ID（单次最多10个），各交换机ID之间可以用半角逗号（,）进行分割，例如`vsw-***,vsw-***`。

如果没有指定交换机，系统将自动使用您选择的地域下的默认VPC下的默认交换机，如果您在该地域下没有默认VPC和默认交换机，系统将自动创建一个默认VPC和一个默认交换机。

> 交换机网段内的IP个数决定了该交换机下最大可以创建的ECI实例数量，请务必提前规划好网段。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'vsw-bp1xpiowfm5vo8o3c****,vsw-bp1rkyjgr1xwoho6k****',
          ),
        ),
        5 => 
        array (
          'name' => 'ContainerGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECI实例名称，即容器组名称。格式要求如下：

- 长度为2~128个字符。
- 支持英文小写字母、数字或者短划线（-），不能以短划线开头或者结尾。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'nginx-test',
          ),
        ),
        6 => 
        array (
          'name' => 'RestartPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例重启策略。取值范围：

- Always：总是重启
- Never：从不重启
- OnFailure：失败时重启

默认值：Always。',
            'type' => 'string',
            'required' => false,
            'example' => 'Always',
          ),
        ),
        7 => 
        array (
          'name' => 'EipInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性公网IP ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'eip-uf66jeqopgqa9hdn****',
          ),
        ),
        8 => 
        array (
          'name' => 'Cpu',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例级别vCPU大小。单位：核。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '1.0',
          ),
        ),
        9 => 
        array (
          'name' => 'Memory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例级别内存大小。单位：GiB。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '2.0',
          ),
        ),
        10 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-uf66jeqopgqa9hdn****',
          ),
        ),
        11 => 
        array (
          'name' => 'DnsPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS策略。取值范围：

- None：使用DnsConfig字段设置的DNS。
- Default：继承运行环境的DNS设置。',
            'type' => 'string',
            'required' => false,
            'example' => 'Default',
          ),
        ),
        12 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多详情，请参阅[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-xxxx-12d3-xxxx-426655440000',
          ),
        ),
        13 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的ECS实例规格，支持多规格。更多信息，请参见[指定ECS规格创建实例](~~114664~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs.c5.xlarge',
          ),
        ),
        14 => 
        array (
          'name' => 'ImageSnapshotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像缓存ID。更多信息，请参见[使用镜像缓存加速创建实例](~~141281~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'imc-2zebxkiifuyzzlhl****',
          ),
        ),
        15 => 
        array (
          'name' => 'RamRoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例RAM角色名称。ECI与ECS共用实例RAM角色，更多信息，请参见[通过API使用实例RAM角色](~~61178~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'RamTestRole',
          ),
        ),
        16 => 
        array (
          'name' => 'TerminationGracePeriodSeconds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '程序的缓冲时间，用于处理关闭之前的操作。单位为秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '60',
          ),
        ),
        17 => 
        array (
          'name' => 'AutoMatchImageCache',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动匹配镜像缓存。默认为false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        18 => 
        array (
          'name' => 'Ipv6AddressCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPv6地址数。固定为1，即一个ECI实例支持绑定一个IPv6地址。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        19 => 
        array (
          'name' => 'ActiveDeadlineSeconds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECI实例的有效期限，超出该时间后，实例会被强制退出。单位为秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1000',
          ),
        ),
        20 => 
        array (
          'name' => 'SpotStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的抢占策略。取值范围：

- NoSpot：正常按量付费实例。
- SpotWithPriceLimit：设置上限价格的抢占式实例。
- SpotAsPriceGo：系统自动出价，跟随当前市场实际价格的抢占式实例。

默认值：NoSpot。',
            'type' => 'string',
            'required' => false,
            'example' => 'SpotWithPriceLimit',
          ),
        ),
        21 => 
        array (
          'name' => 'SpotPriceLimit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置抢占式实例的每小时最高价格，最多精确到小数点后3位。

当SpotStrategy取值为SpotWithPriceLimit时，必须设置SpotPriceLimit。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '0.025',
          ),
        ),
        22 => 
        array (
          'name' => 'ScheduleStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配置了多可用区（通过VSwitchId参数指定多个交换机）时，ECI实例的调度策略。取值范围：

- VSwitchOrdered：按顺序调度
- VSwitchRandom：随机调度

更多信息，请参见[多可用区创建实例](~~157290~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'VSwitchOrdered',
          ),
        ),
        23 => 
        array (
          'name' => 'CorePattern',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义设置coredump生成的core文件的保存目录。更多信息，请参见[设置core文件保存到数据卷](~~167801~~)。

> 配置的路径不能以`|`开头，即不能通过Core dump来配置可执行程序。',
            'type' => 'string',
            'required' => false,
            'example' => '/xx/xx/core',
          ),
        ),
        24 => 
        array (
          'name' => 'ShareProcessNamespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用共享命名空间。默认为false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        25 => 
        array (
          'name' => 'AutoCreateEip',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动创建一个EIP，并绑定到ECI实例上。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        26 => 
        array (
          'name' => 'EipBandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EIP的带宽，默认为5 Mbps。    
当AutoCreateEip取值为true时，可以设置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000000',
            'minimum' => '0',
            'example' => '5',
          ),
        ),
        27 => 
        array (
          'name' => 'EipISP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置EIP的线路类型。取值范围：

- BGP（默认值）：BGP（多线）线路
- BGP_PRO：BGP（多线）精品线路',
            'type' => 'string',
            'required' => false,
            'example' => 'BGP',
          ),
        ),
        28 => 
        array (
          'name' => 'EipCommonBandwidthPackage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定已有的共享带宽包。',
            'type' => 'string',
            'required' => false,
            'example' => 'cbwp-2zeukbj916scmj51m****',
          ),
        ),
        29 => 
        array (
          'name' => 'HostName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主机名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        30 => 
        array (
          'name' => 'IngressBandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入方向带宽限制。单位：Bps。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '1024000',
          ),
        ),
        31 => 
        array (
          'name' => 'EgressBandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '出方向带宽限制。单位：Bps。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '1024000',
          ),
        ),
        32 => 
        array (
          'name' => 'CpuOptionsCore',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CPU物理核心数。仅部分规格支持自定义设置。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
        33 => 
        array (
          'name' => 'CpuOptionsThreadsPerCore',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每核线程数。仅部分规格支持自定义设置。配置为1时表示关闭超线程。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
        34 => 
        array (
          'name' => 'CpuOptionsNuma',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数暂不支持设置。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        35 => 
        array (
          'name' => 'EphemeralStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '增加的临时存储空间大小。单位：GiB。    
更多信息，请参见[自定义临时存储空间大小](~~204066~~)。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '5000',
            'minimum' => '0',
            'example' => '20',
          ),
        ),
        36 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。最多可以绑定20个。更多信息，请参见[使用标签管理实例](~~146608~~)。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。最多可以绑定20个。更多信息，请参见[使用标签管理实例](~~146608~~)。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。如果传入该值，则不允许为空字符串，且不允许重复。最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'version',
                ),
                'Value' => 
                array (
                  'description' => '标签值。如果传入该值，可以为空字符串。最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '3',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        37 => 
        array (
          'name' => 'ImageRegistryCredential',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '镜像仓库信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '镜像仓库信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Password' => 
                array (
                  'description' => '镜像仓库密码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'yourpassword',
                ),
                'Server' => 
                array (
                  'description' => '镜像仓库注册地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'registry-vpc.cn-shanghai.aliyuncs.com',
                ),
                'UserName' => 
                array (
                  'description' => '镜像仓库用户名。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'yourusername',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 11,
          ),
        ),
        38 => 
        array (
          'name' => 'Container',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '容器信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '容器信息。',
              'type' => 'object',
              'properties' => 
              array (
                'ReadinessProbe.TimeoutSeconds' => 
                array (
                  'description' => '检查超时的时间，默认为1秒，最小为1秒。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'ReadinessProbe.SuccessThreshold' => 
                array (
                  'description' => '从上次检查失败后重新认定检查成功的检查次数阈值（必须是连续成功），默认为1。当前必须为1。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'SecurityContext.Capability.Add' => 
                array (
                  'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET\\_ADMIN和NET\\_RAW。

> NET_RAW默认不支持，需提交工单申请。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET\\_ADMIN和NET\\_RAW。

> NET_RAW默认不支持，需提交工单申请。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'NET_ADMIN',
                  ),
                  'required' => false,
                  'maxItems' => 100,
                ),
                'ReadinessProbe.TcpSocket.Port' => 
                array (
                  'description' => '使用TCP Socket方式进行健康检查时，TCP Socket检测的端口。

> 设置ReadinessProbe相关参数时，HttpGet、Exec和TcpSocket这三种检查方式，只能选择其中一种。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '8000',
                ),
                'ReadinessProbe.HttpGet.Scheme' => 
                array (
                  'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求对应的协议类型，取值范围：
- HTTP
- HTTPS

> 设置ReadinessProbe相关参数时，HttpGet、Exec和TcpSocket这三种检查方式，只能选择其中一种。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'HTTP',
                ),
                'LivenessProbe.PeriodSeconds' => 
                array (
                  'description' => '检查执行的周期，默认为10秒，最小为1秒。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '5',
                ),
                'SecurityContext.ReadOnlyRootFilesystem' => 
                array (
                  'description' => '容器运行的根文件系统是否为只读，目前仅支持配置为true。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'EnvironmentVar' => 
                array (
                  'description' => '容器的环境变量值。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器的环境变量值。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Key' => 
                      array (
                        'description' => '环境变量名。长度为1~128位。格式要求：`[0-9a-zA-Z]`，以及下划线，不能以数字开头。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PATH',
                      ),
                      'Value' => 
                      array (
                        'description' => '环境变量值。长度为0~256位。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/usr/local/bin',
                      ),
                      'FieldRef.FieldPath' => 
                      array (
                        'description' => '环境变量值引用。目前只支持配置为status.podIP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'status.podIP',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 241,
                ),
                'LivenessProbe.TcpSocket.Port' => 
                array (
                  'description' => '使用TCP Socket方式进行健康检查时，TCP Socket检测的端口。

> 设置LivenessProbe相关参数时，HttpGet、Exec和TcpSocket这三种检查方式，只能选择其中一种。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '8080',
                ),
                'Tty' => 
                array (
                  'description' => '是否开启交互。默认为false。

当Command为/bin/bash命令时，需要设置为true。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'WorkingDir' => 
                array (
                  'description' => '容器工作目录。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/usr/local/',
                ),
                'Arg' => 
                array (
                  'description' => '容器启动命令对应的参数。最多10个。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器启动命令对应的参数。最多10个。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '100',
                  ),
                  'required' => false,
                  'maximum' => '65535',
                  'example' => '100',
                  'maxItems' => 101,
                ),
                'Stdin' => 
                array (
                  'description' => '此容器是否应在容器运行时为标准输入分配缓冲区。如果未设置，则容器中标准输入的读取值将导致EOF。默认为false。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'LivenessProbe.InitialDelaySeconds' => 
                array (
                  'description' => '检查开始执行的时间，以容器启动完成为起点计算。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '5',
                ),
                'VolumeMount' => 
                array (
                  'description' => '数据卷信息。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '数据卷信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'MountPropagation' => 
                      array (
                        'description' => '数据卷的挂载传播设置。挂载传播允许将Container挂载的卷共享到同一Pod中的其他Container，甚至可以共享到同一节点上的其他Pod。取值范围：

- None：该卷不感知任何后续在此卷或其子目录上执行的挂载操作。

- HostToContainer：该卷将会感知到后续在此卷或其子目录上的挂载操作。

- Bidirectional：和HostToContainer类似，能感知挂载操作。另外，该卷将被传播回主机和使用同一卷的所有Pod的所有容器。

默认值：None',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'None',
                      ),
                      'MountPath' => 
                      array (
                        'description' => '容器挂载数据卷的目录。    

> 容器挂载目录下的内容会被Volume的内容直接覆盖，请谨慎使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/pod/data',
                      ),
                      'ReadOnly' => 
                      array (
                        'description' => '数据卷是否只读。默认为false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                      ),
                      'SubPath' => 
                      array (
                        'description' => '数据卷子路径。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'data2/',
                      ),
                      'Name' => 
                      array (
                        'description' => '数据卷名称。同Volume中的Name。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default-volume1',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'ImagePullPolicy' => 
                array (
                  'description' => '镜像拉取策略。取值范围：

- Always：总是拉取。每次都拉取镜像。
- IfNotPresent：按需拉取。优先使用本地镜像，本地没有镜像时则拉取镜像。
- Never：从不拉取。使用本地镜像，不拉取镜像。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Always',
                ),
                'StdinOnce' => 
                array (
                  'description' => '当标准输入为true时，标准输入流将在多个附加会话中是否保持开启状态。    
如果StdinOnce设为true，标准输入在容器开启时被打开，在首个客户端附加到标准输入之前都为空，然后会一直保持开启状态，接收数据，直到客户端连接断开，此时标准输入被关闭，在容器重启前一直保持关闭状态。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'LifecyclePreStopHandlerTcpSocketPort' => 
                array (
                  'description' => '使用TCPSocket方式设置preStop回调函数时，TCP Socket检测的端口。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '90',
                ),
                'LifecyclePostStartHandlerHttpGetScheme' => 
                array (
                  'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求对应的协议类型，取值范围：

- HTTP
- HTTPS',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'HTTPS',
                ),
                'ReadinessProbe.PeriodSeconds' => 
                array (
                  'description' => '检查执行的周期，默认为10秒，最小为1秒。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '3',
                ),
                'LivenessProbe.SuccessThreshold' => 
                array (
                  'description' => '从上次检查失败后重新认定检查成功的检查次数阈值（必须是连续成功），默认为1。当前必须为1。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'Command' => 
                array (
                  'description' => '容器启动命令。最多20个。每个命令最多包含256个字符。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器启动命令。最多20个。每个命令最多包含256个字符。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'sleep',
                  ),
                  'required' => false,
                  'example' => 'sleep',
                  'maxItems' => 101,
                ),
                'LifecyclePostStartHandlerHttpGetHost' => 
                array (
                  'description' => '使用HTTP请求方式设置postStart回调函数时，接收HTTP Get请求的主机地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '10.0.XX.XX',
                ),
                'TerminationMessagePolicy' => 
                array (
                  'description' => '消息通知策略，默认为空，目前仅支持mns队列消息通知。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FallbackToLogsOnError',
                ),
                'ReadinessProbe.HttpGet.Path' => 
                array (
                  'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求检测的路径。

> 设置ReadinessProbe相关参数时，HttpGet、Exec和TcpSocket这三种检查方式，只能选择其中一种。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/healthz',
                ),
                'LivenessProbe.Exec.Command' => 
                array (
                  'description' => '使用命令行方式进行健康检查时，在容器内执行的命令。

> 设置LivenessProbe相关参数时，HttpGet、Exec和TcpSocket这三种检查方式，只能选择其中一种。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '使用命令行方式进行健康检查时，在容器内执行的命令。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'cat /tmp/healthy',
                  ),
                  'required' => false,
                  'maxItems' => 21,
                ),
                'LifecyclePostStartHandlerTcpSocketPort' => 
                array (
                  'description' => '使用TCPSocket方式设置postStart回调函数时，TCP Socket检测的端口。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '80',
                ),
                'LifecyclePostStartHandlerHttpGetPath' => 
                array (
                  'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求检测的路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/healthyz',
                ),
                'LifecyclePostStartHandlerExec' => 
                array (
                  'description' => '使用命令行方式设置postStart回调函数时，在容器内执行的命令。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '使用命令行方式设置postStart回调函数时，在容器内执行的命令。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '["/bin/sh", "-c", "echo Hello from the postStart handler > /usr/share/message"]',
                  ),
                  'required' => false,
                  'example' => '["/bin/sh", "-c", "echo Hello from the postStart handler > /usr/share/message"]',
                  'maxItems' => 101,
                ),
                'LifecyclePreStopHandlerHttpGetPath' => 
                array (
                  'description' => '使用HTTP请求方式设置preStop回调函数时，HTTP Get请求检测的路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/healthyz',
                ),
                'Port' => 
                array (
                  'description' => '端口号。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '端口号。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Protocol' => 
                      array (
                        'description' => '协议类型。取值范围：

- TCP
- UDP',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TCP',
                      ),
                      'Port' => 
                      array (
                        'description' => '端口号。取值范围：1~65535。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '80',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'TerminationMessagePath' => 
                array (
                  'description' => '容器的报错地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/tmp/termination-log',
                ),
                'LifecyclePreStopHandlerHttpGetScheme' => 
                array (
                  'description' => '使用HTTP请求方式设置preStop回调函数时，HTTP Get请求对应的协议类型，取值范围：

- HTTP
- HTTPS',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'HTTP',
                ),
                'LivenessProbe.HttpGet.Scheme' => 
                array (
                  'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求对应的协议类型，取值范围：

- HTTP
- HTTPS

> 设置LivenessProbe相关参数时，HttpGet、Exec和TcpSocket这三种检查方式，只能选择其中一种。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'HTTP',
                ),
                'ReadinessProbe.HttpGet.Port' => 
                array (
                  'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求检测的端口号。

> 设置ReadinessProbe相关参数时，HttpGet、Exec和TcpSocket这三种检查方式，只能选择其中一种。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '8080',
                ),
                'LifecyclePostStartHandlerTcpSocketHost' => 
                array (
                  'description' => '使用TCP Socket方式设置postStart回调函数时，TCP Socket检测的主机地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '10.0.XX.XX',
                ),
                'Gpu' => 
                array (
                  'description' => '指定容器使用的GPU个数。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'ReadinessProbe.InitialDelaySeconds' => 
                array (
                  'description' => '检查开始执行的时间，以容器启动完成为起点计算。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '3',
                ),
                'LifecyclePreStopHandlerExec' => 
                array (
                  'description' => '使用命令行方式设置preStop回调函数时，在容器内执行的命令。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '使用命令行方式设置preStop回调函数时，在容器内执行的命令。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '["/bin/sh", "-c","echo Hello from the preStop handler > /usr/share/message"]',
                  ),
                  'required' => false,
                  'example' => '["/bin/sh", "-c","echo Hello from the preStop handler > /usr/share/message"]',
                  'maxItems' => 101,
                ),
                'Memory' => 
                array (
                  'description' => '容器的内存大小。单位：GiB。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.5',
                ),
                'Name' => 
                array (
                  'description' => '容器名称。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'nginx',
                ),
                'LifecyclePreStopHandlerHttpGetHost' => 
                array (
                  'description' => '使用HTTP请求方式设置preStop回调函数时，接收HTTP Get请求的主机地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '10.0.XX.XX',
                ),
                'LifecyclePreStopHandlerTcpSocketHost' => 
                array (
                  'description' => '使用TCP Socket方式设置preStop回调函数时，TCP Socket检测的主机地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '10.0.XX.XX',
                ),
                'Image' => 
                array (
                  'description' => '容器镜像。',
                  'type' => 'string',
                  'required' => true,
                  'maximum' => '255',
                  'minimum' => '1',
                  'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com/eci_open/nginx:latest',
                ),
                'LifecyclePreStopHandlerHttpGetPort' => 
                array (
                  'description' => '使用HTTP请求方式设置preStop回调函数时，HTTP Get请求检测的端口号。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '88',
                ),
                'LivenessProbe.FailureThreshold' => 
                array (
                  'description' => '从上次检查成功后认定检查失败的检查次数阈值（必须是连续失败），默认为3。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '3',
                ),
                'ReadinessProbe.Exec.Command' => 
                array (
                  'description' => '使用命令行方式进行健康检查时，在容器内执行的命令。

> 设置ReadinessProbe相关参数时，HttpGet、Exec和TcpSocket这三种检查方式，只能选择其中一种。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '使用命令行方式进行健康检查时，在容器内执行的命令。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'cat /tmp/healthy',
                  ),
                  'required' => false,
                  'maxItems' => 20,
                ),
                'LifecyclePreStopHandlerHttpGetHttpHeader' => 
                array (
                  'description' => '生成的HTTP请求头参数。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '生成的HTTP请求头参数。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '使用HTTP请求方式设置preStop回调函数时，HTTP Get请求头中自定义设置的字段值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-preStop',
                      ),
                      'Name' => 
                      array (
                        'description' => '使用HTTP请求方式设置preStop回调函数时，HTTP Get请求头中自定义设置的字段名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Xiao-Custom-Header',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'ReadinessProbe.FailureThreshold' => 
                array (
                  'description' => '从上次检查成功后认定检查失败的检查次数阈值（必须是连续失败），默认为3。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '3',
                ),
                'Cpu' => 
                array (
                  'description' => '容器的vCPU大小。单位：核。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.25',
                ),
                'LivenessProbe.HttpGet.Port' => 
                array (
                  'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求检测的端口号。

> 设置LivenessProbe相关参数时，HttpGet、Exec和TcpSocket这三种检查方式，只能选择其中一种。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '8888',
                ),
                'LivenessProbe.HttpGet.Path' => 
                array (
                  'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求检测的路径。

> 设置LivenessProbe相关参数时，HttpGet、Exec和TcpSocket这三种检查方式，只能选择其中一种。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/healthz',
                ),
                'LivenessProbe.TimeoutSeconds' => 
                array (
                  'description' => '检查超时的时间，默认为1秒，最小为1秒。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'SecurityContext.RunAsUser' => 
                array (
                  'description' => '设置运行容器的用户ID。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '1000',
                ),
                'LifecyclePostStartHandlerHttpGetPort' => 
                array (
                  'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求检查的端口号。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '5050',
                ),
                'LifecyclePostStartHandlerHttpGetHttpHeader' => 
                array (
                  'description' => '生成的HTTP请求头参数。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '生成的HTTP请求头参数。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求头中自定义设置的字段值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-postStart',
                      ),
                      'Name' => 
                      array (
                        'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求头中自定义设置的字段名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Xiao-Custom-Header',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'EnvironmentVarHide' => 
                array (
                  'description' => '查询ECI实例详情时，是否隐藏环境变量信息。取值范围：

- false（默认值）：查询ECI实例详情时，不隐藏环境变量信息。
- true：查询ECI实例详情时，不返回环境变量信息。在环境变量带有敏感信息时，配置为true可以提高安全性。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'SecurityContextRunAsGroup' => 
                array (
                  'description' => '设置运行容器的用户组。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '3000',
                ),
                'SecurityContextRunAsNonRoot' => 
                array (
                  'description' => '是否以非root模式运行容器。取值范围：
- true：非root模式
- false（默认值）：root模式',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'SecurityContextPrivileged' => 
                array (
                  'description' => '容器是否启用特权，即是否以特权模式运行容器。取值范围：
- true：启用特权
- false（默认值）：不启用特权',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 41,
          ),
        ),
        39 => 
        array (
          'name' => 'Volume',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '数据卷信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '数据卷信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Type' => 
                array (
                  'description' => '数据卷类型。取值范围：

- EmptyDirVolume：EmptyDir类型的数据卷，表示空目录。
- NFSVolume：NFS类型的数据卷，表示网络文件系统。
- ConfigFileVolume：ConfigFile类型的数据卷，表示配置文件。
- FlexVolume：使用FlexVolume插件扩展存储类型，支持挂载云盘。
- HostPathVolume：HostPath类型的数据卷，表示主机节点的文件或目录。该类型仅对白名单用户开放使用。
- DiskVolume（不推荐）：云盘数据卷。建议使用FlexVolume挂载云盘。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ConfigFileVolume',
                ),
                'DiskVolume.DiskSize' => 
                array (
                  'description' => 'DiskVolume的大小。单位为GiB。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '15',
                ),
                'NFSVolume.Path' => 
                array (
                  'description' => 'NFS数据卷路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/share',
                ),
                'DiskVolume.FsType' => 
                array (
                  'description' => 'DiskVolume的系统类型。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'xfs',
                ),
                'FlexVolume.FsType' => 
                array (
                  'description' => '挂载的文件系统类型，默认取决于FlexVolume的script。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ext4',
                ),
                'HostPathVolume.Type' => 
                array (
                  'description' => 'HostPath Volume的类型。取值范围：

 - Directory：目录。
- File：文件。

> HostPath Volume仅对白名单用户开放使用。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Directory',
                ),
                'ConfigFileVolume.DefaultMode' => 
                array (
                  'description' => 'ConfigFileVolume默认的权限。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0644',
                ),
                'NFSVolume.ReadOnly' => 
                array (
                  'description' => 'NFS数据卷是否只读。默认为false。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'ConfigFileVolume.ConfigFileToPath' => 
                array (
                  'description' => 'ConfigFile类型的数据卷信息。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'ConfigFile类型的数据卷信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Path' => 
                      array (
                        'description' => '相对于挂载目录，配置文件所在的相对文件路径。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test/config-test.cnf',
                      ),
                      'Mode' => 
                      array (
                        'description' => '配置文件的权限，如果没有设置，则采用ConfigFileVolume.DefaultMode的值。采用四位八进制数表示，例如0644表示权限为rw-r–r--，即用户权限为rw-，用户所在组权限为r--，其他用户权限为r--。

权限说明如下：

- `---`：没有任何权限，八进制值为0。
- `--x`：只有执行权限，八进制值为1。
- ` -w-`：只有写入权限，八进制值为2。
- `-wx`：有写入和执行权限，八进制值为3。
- `r--`：只有读取权限，八进制值为4。
- `r-x`：有读取和执行权限，八进制值为5。
- `rw-`：有读取和写入权限，八进制值为6。
- `rwx`：具有读取、写入和执行权限，八进制值为7。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0644',
                      ),
                      'Content' => 
                      array (
                        'description' => '配置文件内容，需要将内容进行Base64编码。    
配置文件不能大于32 KB。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'bGl1bWk=',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 90,
                ),
                'HostPathVolume.Path' => 
                array (
                  'description' => 'HostPath Volume在主机上的目录路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/pod/data',
                ),
                'FlexVolume.Options' => 
                array (
                  'description' => 'FlexVolume对象选项列表。为KV形式，采用JSON传递。

例如通过FlexVolume挂载云盘时，Options表示云盘的配置参数，可配置的参数如下：

- volumeId：已有云盘ID。
- volumeSize：云盘大小，单位为GiB。取值范围为20~32768。
- performanceLevel：云盘性能等级。更多信息，请参见[云盘性能等级](~~25382~~)。
- deleteWithInstance：是否随实例释放，默认为false。
- encrypted：是否加密云盘，默认为false。更多信息，请参见[加密概述](~~59643~~)。
- kmsKeyId：加密云盘时，云盘使用的KMS密钥ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '{"volumeId":"d-2zehdahrwoa7srg****","performanceLevel": "PL2"}',
                ),
                'FlexVolume.Driver' => 
                array (
                  'description' => '使用FlexVolume插件挂载数据卷时的驱动类型。取值范围如下：

- alicloud/disk：挂载云盘。
- alicloud/nas：挂载NAS。
- alicloud/oss：挂载OSS。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'alicloud/disk',
                ),
                'NFSVolume.Server' => 
                array (
                  'description' => 'NFS服务器地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '3f9cd4a596-naw76.cn-shanghai.nas.aliyuncs.com',
                ),
                'DiskVolume.DiskId' => 
                array (
                  'description' => 'DiskVolume的ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'd-xx',
                ),
                'Name' => 
                array (
                  'description' => '数据卷名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'default-volume1',
                ),
                'EmptyDirVolume.Medium' => 
                array (
                  'description' => 'EmptyDirVolume的存储媒介，默认为空，使用node文件系统；支持 memory，表示使用内存。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'memory',
                ),
                'EmptyDirVolume.SizeLimit' => 
                array (
                  'description' => 'EmptyDirVolume的大小。单位为GiB。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '2',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 101,
          ),
        ),
        40 => 
        array (
          'name' => 'InitContainer',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'Init容器列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'Init容器列表。',
              'type' => 'object',
              'properties' => 
              array (
                'SecurityContext.Capability.Add' => 
                array (
                  'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET\\_ADMIN和NET\\_RAW。

> NET_RAW默认不支持，需提交工单申请。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET\\_ADMIN和NET\\_RAW。

> NET_RAW默认不支持，需提交工单申请。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'NET_ADMIN',
                  ),
                  'required' => false,
                  'maxItems' => 100,
                ),
                'Image' => 
                array (
                  'description' => '容器使用的镜像。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'nginx',
                ),
                'VolumeMount' => 
                array (
                  'description' => '挂载数据卷信息列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '挂载数据卷信息列表。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'MountPropagation' => 
                      array (
                        'description' => '数据卷的挂载传播设置。挂载传播允许将Container挂载的卷共享到同一Pod中的其他Container，甚至可以共享到同一节点上的其他Pod。取值范围：

- None：该卷不感知任何后续在此卷或其子目录上执行的挂载操作。

- HostToContainer：该卷将会感知到后续在此卷或其子目录上的挂载操作。

- Bidirectional：和HostToContainer类似，能感知挂载操作。另外，该卷将被传播回主机和使用同一卷的所有Pod的所有容器。

默认值：None',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'None',
                      ),
                      'MountPath' => 
                      array (
                        'description' => '挂载目录，容器的挂载目录下的内容被volume的内容直接覆盖，所以要慎用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/usr/share/',
                      ),
                      'ReadOnly' => 
                      array (
                        'description' => '挂载路径是否只读。默认为false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                      ),
                      'SubPath' => 
                      array (
                        'description' => '数据卷下的子目录，方便Pod将同一个Volume下不同目录挂载到容器不同目录。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/usr/sub/',
                      ),
                      'Name' => 
                      array (
                        'description' => '挂载数据卷的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-empty',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'Port' => 
                array (
                  'description' => 'init容器端口号。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'init容器端口号。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Protocol' => 
                      array (
                        'description' => '协议类型。取值范围：

- TCP
- UDP',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TCP',
                      ),
                      'Port' => 
                      array (
                        'description' => '端口号。取值范围：1~65535。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '8888',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'SecurityContext.ReadOnlyRootFilesystem' => 
                array (
                  'description' => '容器运行的根文件系统是否为只读。目前仅支持配置为true。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'TerminationMessagePath' => 
                array (
                  'description' => '容器退出的消息来源。当容器退出时，从指定的终止消息文件中检索终止消息。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/tmp/termination-log',
                ),
                'EnvironmentVar' => 
                array (
                  'description' => '容器的环境变量信息列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器的环境变量信息列表。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Key' => 
                      array (
                        'description' => '环境变量名。长度为1~128位。格式要求：`[0-9a-zA-Z]`，以及下划线，不能以数字开头。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Path',
                      ),
                      'Value' => 
                      array (
                        'description' => '环境变量值。长度为0~256位。
',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/usr/bin/',
                      ),
                      'FieldRef.FieldPath' => 
                      array (
                        'description' => '环境变量值引用。目前只支持配置为status.podIP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'status.podIP',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 241,
                ),
                'ImagePullPolicy' => 
                array (
                  'description' => '镜像拉取策略。取值范围：
- Always：总是拉取。每次都拉取镜像。
- IfNotPresent：按需拉取。优先使用本地镜像，本地没有镜像时则拉取镜像。
- Never：从不拉取。使用本地镜像，不拉取镜像。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Always',
                ),
                'WorkingDir' => 
                array (
                  'description' => '工作目录。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/usr/local',
                ),
                'Cpu' => 
                array (
                  'description' => '容器的vCPU大小。单位：核。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.5',
                ),
                'Arg' => 
                array (
                  'description' => '容器启动参数。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器启动参数。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '10',
                  ),
                  'required' => false,
                  'maximum' => '65535',
                  'example' => '10',
                  'maxItems' => 101,
                ),
                'Command' => 
                array (
                  'description' => '容器启动指令。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器启动指令。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'sleep',
                  ),
                  'required' => false,
                  'example' => 'sleep',
                  'maxItems' => 101,
                ),
                'Gpu' => 
                array (
                  'description' => '指定容器使用的GPU个数。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'SecurityContext.RunAsUser' => 
                array (
                  'description' => '设置运行容器的用户ID。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '587',
                ),
                'Memory' => 
                array (
                  'description' => '容器的内存大小。单位：GiB。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '1.0',
                ),
                'TerminationMessagePolicy' => 
                array (
                  'description' => '挂载信息，默认为空。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '*****',
                ),
                'Name' => 
                array (
                  'description' => '容器名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test-init',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 41,
          ),
        ),
        41 => 
        array (
          'name' => 'DnsConfig.NameServer',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'DNS服务器的IP地址列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'DNS服务器的IP地址列表。',
              'type' => 'string',
              'required' => false,
              'example' => '172.10.*.**',
            ),
            'required' => false,
            'example' => '172.10.*.**',
            'maxItems' => 20,
          ),
        ),
        42 => 
        array (
          'name' => 'DnsConfig.Search',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'DNS搜索域列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'DNS搜索域列表。',
              'type' => 'string',
              'required' => false,
              'example' => 'svc.local.kubernetes',
            ),
            'required' => false,
            'example' => 'svc.local.kubenetes',
            'maxItems' => 20,
          ),
        ),
        43 => 
        array (
          'name' => 'DnsConfig.Option',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '对象的选项列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '对象的选项列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Value' => 
                array (
                  'description' => '对象的Value。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'value',
                ),
                'Name' => 
                array (
                  'description' => '对象的Name。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'name',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        44 => 
        array (
          'name' => 'HostAliase',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '添加一个ECI的别名。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '添加一个ECI的别名。',
              'type' => 'object',
              'properties' => 
              array (
                'Ip' => 
                array (
                  'description' => '添加IP。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1.1.1.1',
                ),
                'Hostname' => 
                array (
                  'description' => '添加主机名。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '添加主机名。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'hehe.com',
                  ),
                  'required' => false,
                  'example' => 'hehe.com',
                  'maxItems' => 51,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 101,
          ),
        ),
        45 => 
        array (
          'name' => 'SecurityContext.Sysctl',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '通过安全上下文修改安全sysctl参数。更多信息，请参见[配置Security Context](~~462313~~)。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '通过安全上下文修改安全sysctl参数。更多信息，请参见[配置Security Context](~~462313~~)。',
              'type' => 'object',
              'properties' => 
              array (
                'Value' => 
                array (
                  'description' => '通过安全上下文修改sysctl参数时，安全sysctl参数的取值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '65536',
                ),
                'Name' => 
                array (
                  'description' => '通过安全上下文修改sysctl参数时，安全sysctl参数的名称。取值范围：

- net.ipv4.ping_group_range
- net.ipv4.ip_unprivileged_port_start',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'net.ipv4.ping_group_range',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 101,
          ),
        ),
        46 => 
        array (
          'name' => 'HostSecurityContext.Sysctl',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '通过安全上下文修改非安全sysctl参数。更多信息，请参见[配置Security Context](~~462313~~)。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '通过安全上下文修改非安全sysctl参数。更多信息，请参见[配置Security Context](~~462313~~)。',
              'type' => 'object',
              'properties' => 
              array (
                'Value' => 
                array (
                  'description' => '通过安全上下文修改sysctl参数时，非安全sysctl参数的取值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '65536',
                ),
                'Name' => 
                array (
                  'description' => '通过安全上下文修改sysctl参数时，非安全sysctl参数的名称。取值范围：

- kernel.shm*（kernel.shm_rmid_forced除外）
- kernel.msg*
- kernel.sem
- fs.mqueue.*
- net.*（net.ipv4.tcp_syncookies、net.ipv4.ping_group_range、net.ipv4.ip_unprivileged_port_start除外）',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'kernel.msgmax',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 101,
          ),
        ),
        47 => 
        array (
          'name' => 'NtpServer',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'NTP服务器。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'NTP服务器。',
              'type' => 'string',
              'required' => false,
              'example' => 'ntp.cloud.aliyuncs.com',
            ),
            'required' => false,
            'example' => 'ntp.cloud.aliyuncs.com',
            'maxItems' => 21,
          ),
        ),
        48 => 
        array (
          'name' => 'AcrRegistryInfo',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ACR企业版实例信息列表。更多信息，请参见[免密拉取ACR镜像](~~194250~~)。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ACR企业版实例信息列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Domain' => 
                array (
                  'description' => 'ACR企业版实例的域名。默认为相应实例的所有域名。支持指定个别域名，多个以半角逗号分隔。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'ACR企业版实例的域名。默认为相应实例的所有域名。支持指定个别域名，多个以半角逗号分隔。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '*****-****-registry.cn-beijing.cr.aliyuncs.com',
                  ),
                  'required' => false,
                  'example' => '*****-****-registry.cn-beijing.cr.aliyuncs.com',
                  'maxItems' => 100,
                ),
                'InstanceName' => 
                array (
                  'description' => 'ACR企业版实例的名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'acr-test',
                ),
                'InstanceId' => 
                array (
                  'description' => 'ACR企业版实例ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cri-nwj395hgf6f3****',
                ),
                'RegionId' => 
                array (
                  'description' => 'ACR企业版实例所属地域。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-beijing',
                ),
                'ArnService' => 
                array (
                  'description' => 'ECI实例等资源归属账号下的RAM角色的ARN。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'acs:ram::1609982529******:role/role-assume',
                ),
                'ArnUser' => 
                array (
                  'description' => 'ACR实例归属账号下的RAM角色的ARN。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'acs:ram::1298452580******:role/role-acr',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        49 => 
        array (
          'name' => 'SpotDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '抢占式实例的保护期。单位为小时。默认为1。可设置为0，表示无保护期。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        50 => 
        array (
          'name' => 'StrictSpot',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否周期执行：

- true：周期执行。
- false：非周期行执行。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        51 => 
        array (
          'name' => 'PlainHttpRegistry',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自建镜像仓库地址。使用HTTP协议的自建镜像仓库中的镜像创建ECI实例时，需配置该参数，使得ECI使用HTTP协议拉取镜像，避免因协议不同而导致镜像拉取失败。',
            'type' => 'string',
            'required' => false,
            'example' => '"harbor***.pre.com,192.168.XX.XX:5000,reg***.test.com:80"',
          ),
        ),
        52 => 
        array (
          'name' => 'InsecureRegistry',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自建镜像仓库地址。使用自签发证书的自建镜像仓库中的镜像创建ECI实例时，需配置该参数来跳过证书认证，避免因证书认证失败而导致镜像拉取失败。',
            'type' => 'string',
            'required' => false,
            'example' => '"harbor***.pre.com,192.168.XX.XX:5000,reg***.test.com:80"',
          ),
        ),
        53 => 
        array (
          'name' => 'ImageAccelerateMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像加速模式。取值范围：

- nydus：使用Nydus加速，需镜像本身支持。
- dadi：使用DADI加速，需镜像本身支持。
- p2p：使用P2P加速，需镜像本身支持。
- imc：使用镜像缓存加速。',
            'type' => 'string',
            'required' => false,
            'example' => 'imc',
          ),
        ),
        54 => 
        array (
          'name' => 'Ipv6GatewayBandwidthEnable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开通ECI的IPv6公网通信能力。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        55 => 
        array (
          'name' => 'Ipv6GatewayBandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当Ipv6GatewayBandwidthEnable配置为true时，配置IPv6地址的公网带宽峰值。取值如下：

- 当IPv6网关的公网带宽计费方式为按固定带宽计费时，IPv6地址的公网带宽范围为1~2000 Mbps。
- 当IPv6网关的公网带宽计费方式为按使用流量计费时，IPv6地址的公网带宽范围受网关规格约束。
    - 网关为免费版，IPv6地址的公网带宽范围为1~200 Mbps。
    - 网关为企业版，IPv6地址的公网带宽范围为1~500 Mbps。
     - 网关为企业增强版，IPv6地址的公网带宽范围为1~1000 Mbps。

默认值为网关对应带宽范围的最大值。',
            'type' => 'string',
            'required' => false,
            'example' => '100',
          ),
        ),
        56 => 
        array (
          'name' => 'ContainerResourceView',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当ECI规格比申请规格大时，可以开启该配置，确保容器内看到的资源跟申请的资源保持一致。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        57 => 
        array (
          'name' => 'FixedIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配置为true表示实例启用固定IP地址。具体请参见[配置ECI实例使用固定IP地址](~~2381086~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        58 => 
        array (
          'name' => 'FixedIpRetainHour',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '固定IP地址空闲后的保留时长，即启用固定IP地址的实例释放后，其固定IP地址的保留时长，单位为小时。默认值为48。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '24',
          ),
        ),
        59 => 
        array (
          'name' => 'DataCacheBucket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存Bucket。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        60 => 
        array (
          'name' => 'DataCachePL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存使用的云盘的性能等级。    
优先使用ESSD云盘，性能等级默认为PL1。',
            'type' => 'string',
            'required' => false,
            'example' => 'PL1',
          ),
        ),
        61 => 
        array (
          'name' => 'DataCacheProvisionedIops',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存使用ESSD AutoPL云盘时，ESSD AutoPL云盘预配置的读写IOPS。    
取值范围：0~min{50000, 1000 * 容量-基准性能}。基准性能=min{1800+50 * 容量, 50000}。    
更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '40000',
          ),
        ),
        62 => 
        array (
          'name' => 'DataCacheBurstingEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存使用ESSD AutoPL云盘时，是否开启Burst（性能突发）。更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        63 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值范围：

- true：发送检查请求，不会创建ECI实例。检查项包括是否填写了必填参数、请求格式、业务限制和库存。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码DryRun.Success。
- false（默认）：发送正常请求，通过检查后直接创建ECI实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        64 => 
        array (
          'name' => 'PrivateIpAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定ECI实例的私网IP地址。目前仅支持指定IPv4地址，请确保该IP地址没有被占用。',
            'type' => 'string',
            'required' => false,
            'example' => '172.16.0.1',
          ),
        ),
        65 => 
        array (
          'name' => 'OverheadReservationOption',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '系统开销预留选项。',
            'type' => 'object',
            'properties' => 
            array (
              'EnableOverheadReservation' => 
              array (
                'description' => '是否开启系统开销预留。默认为false，如要开启，请设置为true。开启后，系统会自动为ECI实例附加系统开销占用的内存，然后向上规整到最接近的规格，并按规整后的规格计费。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
            ),
            'required' => false,
          ),
        ),
        66 => 
        array (
          'name' => 'OsType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定ECI实例的操作系统。取值范围：

- Linux（默认值）
- Windows

> Windows实例正在邀测中，如需使用，请提交工单申请。',
            'type' => 'string',
            'required' => false,
            'example' => 'Windows',
          ),
        ),
        67 => 
        array (
          'name' => 'CpuArchitecture',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定ECI实例的CPU架构。取值范围：

- AMD64（默认值）
- ARM64',
            'type' => 'string',
            'required' => false,
            'example' => 'ARM64',
          ),
        ),
        68 => 
        array (
          'name' => 'ComputeCategory',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定算力类别。更多信息，请参见[指定算力类别创建实例](~~2638061~~)。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定算力类别。取值范围：

- economy：经济型
- general：通用型

支持设置多个算力类别，系统会按照设置顺序创建。',
              'type' => 'string',
              'required' => false,
              'example' => 'economy',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        69 => 
        array (
          'name' => 'GpuDriverVersion',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '指定GPU驱动版本。取值范围：
- tesla=470.82.01（默认值）
- tesla=525.85.12

> 仅部分规格支持切换GPU驱动版本。更多信息，请参见[指定GPU规格创建实例](~~2579486~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'tesla=525.85.12
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID，唯一标识。',
                'type' => 'string',
                'example' => '89945DD3-9072-47D0-A318-353284CFC7B3',
              ),
              'ContainerGroupId' => 
              array (
                'description' => '实例ID，即容器组ID。',
                'type' => 'string',
                'example' => 'eci-uf6fonnghi50u374****',
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
            'errorCode' => 'Account.Arrearage',
            'errorMessage' => 'Your account has an outstanding payment.',
          ),
          1 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.CPU.Memory',
            'errorMessage' => 'The specified cpu and memory are not allowed',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.DuplicatedName',
            'errorMessage' => 'The container group include containers with duplicate names.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.DuplicatedVolumeName',
            'errorMessage' => 'The container group includes volumes with duplicate names.',
          ),
          5 => 
          array (
            'errorCode' => 'IncorrectStatus',
            'errorMessage' => '%s',
          ),
          6 => 
          array (
            'errorCode' => 'ServiceNotEnabled',
            'errorMessage' => '%s',
          ),
          7 => 
          array (
            'errorCode' => 'ImageSnapshot.IncorrectStatus',
            'errorMessage' => '%s',
          ),
          8 => 
          array (
            'errorCode' => 'ImageSnapshot.NotSupport',
            'errorMessage' => '%s',
          ),
          9 => 
          array (
            'errorCode' => 'DiskVolume.NotSupport',
            'errorMessage' => 'The disk volume is not supported.',
          ),
          10 => 
          array (
            'errorCode' => 'RamRole.NotSupport',
            'errorMessage' => 'The RAM role is not supported.',
          ),
          11 => 
          array (
            'errorCode' => 'DiskNumber.LimitExceed',
            'errorMessage' => 'The maximum number of disks in an instance is exceeded.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidPaymentMethod.InsufficientBalance',
            'errorMessage' => 'No payment method is specified for your account. We recommend that you add a payment method or add funds to the prepayment balance.',
          ),
          13 => 
          array (
            'errorCode' => 'DiskVolume.NotInSameZone',
            'errorMessage' => 'The instance to be created and the disk are not in the same zone.',
          ),
          14 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to use the "Product on ECI" feature.',
          ),
          15 => 
          array (
            'errorCode' => 'HighCpuMemConfigRequired',
            'errorMessage' => 'You need to apply to be added to the whitelist of the specified CPU and memory.',
          ),
          16 => 
          array (
            'errorCode' => 'RecommendEmpty.InstanceTypeFamilyNotMatched',
            'errorMessage' => 'The recommended instance type is unavailable in the current zone. Try again later.',
          ),
          17 => 
          array (
            'errorCode' => 'LocalDiskAmountNotMatch',
            'errorMessage' => 'The number of local volumes does not match the instance type.',
          ),
          18 => 
          array (
            'errorCode' => 'Payfor.CreditPayInsufficientBalance',
            'errorMessage' => 'Your payment credit line is insufficient.',
          ),
          19 => 
          array (
            'errorCode' => 'InvalidOperation.KMS.InstanceTypeNotSupport',
            'errorMessage' => 'The specified instance is invalid. Only I/O optimized instances support KMS key.',
          ),
          20 => 
          array (
            'errorCode' => 'InvalidParameter.Encrypted.KmsNotEnabled',
            'errorMessage' => 'KMS must be enabled for encrypted disks.',
          ),
          21 => 
          array (
            'errorCode' => 'InvalidParameter.KMS.EncryptedIllegal',
            'errorMessage' => 'After configuring the parameter KmsKeyId, you must enable encryption.',
          ),
          22 => 
          array (
            'errorCode' => 'InvalidSpotCpuMemorySpec',
            'errorMessage' => 'The specified CPU and memory are not allowed. You must create spot ECI using standard ECS specifications for CPU and memory.',
          ),
          23 => 
          array (
            'errorCode' => 'Ipv6AddressNotSupportVsw',
            'errorMessage' => 'IPv6 is not supported in the specified vSwitch.',
          ),
          24 => 
          array (
            'errorCode' => 'Ipv6AddressNotSupport',
            'errorMessage' => 'Ipv6 is not supported in specified region.',
          ),
          25 => 
          array (
            'errorCode' => 'Ipv6AddressNotSupportInstanceType',
            'errorMessage' => 'IPv6 is not supported for the specified instance type.',
          ),
          26 => 
          array (
            'errorCode' => 'EipPayInsufficientBalance',
            'errorMessage' => 'Your account does not have enough balance to purchase eip.',
          ),
          27 => 
          array (
            'errorCode' => 'EipPurchaseFlowControl',
            'errorMessage' => 'Request was denied due to eip frequent purchase.',
          ),
          28 => 
          array (
            'errorCode' => 'Throttling',
            'errorMessage' => 'You have made too many requests within a short time; your request is denied due to request throttling',
          ),
          29 => 
          array (
            'errorCode' => 'JobInstanceBatchCreateNotSupport',
            'errorMessage' => 'ECI job instance not support batch create',
          ),
          30 => 
          array (
            'errorCode' => 'JobInstanceDiskNotSupport',
            'errorMessage' => 'ECI job instance not support disk volume',
          ),
          31 => 
          array (
            'errorCode' => 'JobInstanceEipNotSupport',
            'errorMessage' => 'ECI job instance not support eip',
          ),
          32 => 
          array (
            'errorCode' => 'JobInstanceFeatureNotMatch',
            'errorMessage' => 'ECI job instance feature not match',
          ),
          33 => 
          array (
            'errorCode' => 'JobInstanceImageCacheNotSupport',
            'errorMessage' => 'ECI job instance not support image cache',
          ),
          34 => 
          array (
            'errorCode' => 'JobInstanceIPv6NotSupport',
            'errorMessage' => 'ECI job instance not support IPv6',
          ),
          35 => 
          array (
            'errorCode' => 'JobInstanceRamRoleNotSupport',
            'errorMessage' => 'ECI job instance not support ram role',
          ),
          36 => 
          array (
            'errorCode' => 'JobInstanceRegionNotSupport',
            'errorMessage' => 'ECI job instance not support in this region',
          ),
          37 => 
          array (
            'errorCode' => 'JobInstanceSpotNotSupport',
            'errorMessage' => 'ECI job instance not support spot',
          ),
          38 => 
          array (
            'errorCode' => 'InvalidInstanceTypeForEciSpotDurationBuy',
            'errorMessage' => 'Current instance type does not support spot duration instance.',
          ),
          39 => 
          array (
            'errorCode' => 'InvalidInstanceTypeForEciBuy',
            'errorMessage' => 'Sales of this current instance type is not supported in eci.',
          ),
          40 => 
          array (
            'errorCode' => 'InstanceTypeNotMatchCpuArch',
            'errorMessage' => '%s.',
          ),
          41 => 
          array (
            'errorCode' => 'JobInstanceEcsInstanceTypeNotSupport',
            'errorMessage' => 'Job-optimized elastic container instances cannot be created by specifying ECS instance types.',
          ),
          42 => 
          array (
            'errorCode' => 'PrivatePoolInstanceSpotNotSupport',
            'errorMessage' => 'Spot is not supported for PrivatePool.',
          ),
          43 => 
          array (
            'errorCode' => 'DryRun.Success',
            'errorMessage' => 'This request is a dryrun request with successful result.',
          ),
          44 => 
          array (
            'errorCode' => 'PrivateIpAddress.Already.InUse',
            'errorMessage' => 'The specific PrivateIpAddress already in use.',
          ),
          45 => 
          array (
            'errorCode' => 'IncorrectOperation',
            'errorMessage' => '%s',
          ),
          46 => 
          array (
            'errorCode' => 'FeatureBasedConstraintConflict',
            'errorMessage' => 'A conflict occurs in specified feature constraints: [%s].',
          ),
          47 => 
          array (
            'errorCode' => 'OperationFailed.RiskControl',
            'errorMessage' => '%s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.VswZoneMisMatch',
            'errorMessage' => 'The specified VSwitchId is not in the specified Zone.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded',
            'errorMessage' => '%s quota exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'Zone.NotOnSale',
            'errorMessage' => 'The specified zone is not available for purchase.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'This operation has been identified as an abnormal operation and cannot be processed.',
          ),
          4 => 
          array (
            'errorCode' => 'Forbidden.SubUser',
            'errorMessage' => 'The specified action is not available for you.',
          ),
          5 => 
          array (
            'errorCode' => 'Forbidden.OnlyForInvitedTest',
            'errorMessage' => 'Eci create action is only open to invited users during public beta.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.SecurityGroupMisMatch',
            'errorMessage' => 'The specified VSwitchId and SecurityGroupId are not in the same VPC.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidVSwitchId.IpNotEnough',
            'errorMessage' => 'The specified VSwitch does not have enough IP addresses.',
          ),
          8 => 
          array (
            'errorCode' => 'Forbidden.UserBussinessStatus',
            'errorMessage' => 'This operation is not allowed, because you have overdue bills. Pay the overdue bill and try again.',
          ),
          9 => 
          array (
            'errorCode' => 'Forbidden.UserNotRealNameAuthentication',
            'errorMessage' => 'This operation is not allowed, because you have not passed the real-name verification.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidUser.PassRoleForbidden',
            'errorMessage' => 'The RAM user is not authorized to assume a RAM role.',
          ),
          11 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'The RAM role does not belong to ECS.',
          ),
          12 => 
          array (
            'errorCode' => 'OperationDenied.NoStock',
            'errorMessage' => 'Sales of this resource are temporarily suspended in the specified zone. We recommend that you use the multi-zone creation function to avoid the risk of insufficient resource. For more information, see https://help.aliyun.com/document_detail/157290.html',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidParameter.KMS.KeyId.Forbidden',
            'errorMessage' => 'You are not authorized to access the specified KMSKeyId.',
          ),
          14 => 
          array (
            'errorCode' => 'Forbidden.AccountClosed',
            'errorMessage' => 'The operation is forbidden. Your account has been closed.',
          ),
          15 => 
          array (
            'errorCode' => 'InvalidOperation.ResourceManagedByCloudProduct',
            'errorMessage' => 'The operation is forbidden. The security group has been managed by another cloud product.',
          ),
          16 => 
          array (
            'errorCode' => 'Spot.NotMatched',
            'errorMessage' => '%s. We recommend that you use the create multi-zone function to avoid insufficient inventory. For more information, see https://help.aliyun.com/document_detail/157290.html',
          ),
          17 => 
          array (
            'errorCode' => 'SecurityRisk.3DVerification',
            'errorMessage' => 'We have detected a security risk with your default credit or debit card. Please proceed with verification via the link in your email.',
          ),
          18 => 
          array (
            'errorCode' => 'CreateServiceLinkedRole.Denied',
            'errorMessage' => 'Please make sure the account has ram:CreateServiceLinkedRole permission.',
          ),
          19 => 
          array (
            'errorCode' => 'Throttling.Vcpu.PerDay',
            'errorMessage' => 'The maximum number of request for the day has been exceeded.',
          ),
          20 => 
          array (
            'errorCode' => 'FeatureAccessRestricted',
            'errorMessage' => 'Access to this feature:[%s] is restricted. Please contact Alibaba Cloud ECI support to request access.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ImageSnapshot.NotFound',
            'errorMessage' => 'The specified snapshot does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDiskId.NotFound',
            'errorMessage' => 'The specified disk does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.KMS.KeyId.NotFound',
            'errorMessage' => 'The specified KMSKeyId does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"89945DD3-9072-47D0-A318-353284CFC7B3\\",\\n  \\"ContainerGroupId\\": \\"eci-uf6fonnghi50u374****\\"\\n}","type":"json"}]',
      'title' => '创建一个容器组',
      'summary' => '调用CreateContainerGroup创建一个ECI实例（即容器组）。',
      'description' => '调用CreateContainerGroup创建ECI实例时，系统将自动为您创建一个服务关联角色AliyunServiceRoleForECI，用于访问ECS、VPC等相关云服务。更多信息，请参见[弹性容器实例服务关联角色](~~212914~~)。

创建ECI实例时，您可以根据需要配置实例、镜像、存储等相关功能。各功能涉及的参数及其说明，请参见以下功能文档：

**实例**

ECI支持以下两种方式创建实例：
- [指定vCPU和内存创建实例](~~114662~~)
- [指定ECS规格创建实例](~~114664~~)

以下功能两种创建方式均支持：
- [创建抢占式实例](~~157759~~)
- [配置多可用区](~~157290~~)
- [配置多规格](~~146468~~)
- [使用标签管理实例](~~146608~~)

**镜像**
- [配置容器镜像](~~461311~~)
- [使用镜像缓存加速创建实例](~~141281~~)
- [指定ACR企业版实例](~~194250~~)
- [使用自建镜像仓库](~~378059~~)

**网络**
- [绑定EIP](~~99146~~)
- [指定安全组](~~176237~~)
- [配置IPv6地址](~~451282~~)
- [配置带宽限速](~~190635~~)

**存储**
- [挂载云盘数据卷](~~144571~~)
- [挂载NAS数据卷](~~464075~~)
- [挂载OSS数据卷](~~464076~~)
- [挂载EmptyDir数据卷](~~464078~~)
- [挂载ConfigFile数据卷](~~464080~~)
- [自定义临时存储空间大小](~~204066~~)

**容器配置**
- [设置容器启动命令和参数](~~94593~~)
- [使用探针对容器进行健康检查](~~99053~~)
- [通过环境变量获取元数据](~~141788~~)
- [配置Security Context](~~462313~~)
- [配置NTP服务](~~462768~~)


**日志与运维**
- [通过环境变量配置日志采集](~~121973~~)
- [设置core文件保存到数据卷](~~167801~~)',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateContainerGroup' => 
    array (
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ContainerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定需要更新的ECI实例ID，即容器组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eci-2zelg8vwnlzdhf8hv****',
          ),
        ),
        3 => 
        array (
          'name' => 'RestartPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例重启策略。取值范围：

- Always：总是重启
- Never：从不重启
- OnFailure：失败时重启',
            'type' => 'string',
            'required' => false,
            'example' => 'Always',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多详情，请参阅[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000	',
          ),
        ),
        5 => 
        array (
          'name' => 'Cpu',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例级别（容器组）的vCPU数。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '2.0',
          ),
        ),
        6 => 
        array (
          'name' => 'Memory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例级别的（容器组）的内存数。单位为GiB。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '4.0',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所属资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-2df3isufhi38****	',
          ),
        ),
        8 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例绑定的标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例绑定的标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'name',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'hxh',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        9 => 
        array (
          'name' => 'Volume',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '数据卷列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '数据卷列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Name' => 
                array (
                  'description' => '数据卷名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test-empty',
                ),
                'Type' => 
                array (
                  'description' => '数据卷类型。取值范围：

- EmptyDirVolume：EmptyDir类型的数据卷，表示临时目录。
- ConfigFileVolume：ConfigFile类型的数据卷，表示配置文件。
- NFSVolume：NFS类型的数据卷，表示网络文件系统，例如NAS。
- FlexVolume：使用FlexVolume插件扩展存储类型，支持挂载云盘、NAS和OSS。
- HostPathVolume：HostPath类型的数据卷，表示宿主机上的文件或目录。该取值暂未开放使用。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'EmptyDirVolume',
                ),
                'NFSVolume.Path' => 
                array (
                  'description' => 'NFS数据卷要挂载的路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/',
                ),
                'NFSVolume.Server' => 
                array (
                  'description' => 'NFS数据卷的挂载点地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '071e349b04-bsd39.cn-hangzhou.nas.aliyuncs.com',
                ),
                'NFSVolume.ReadOnly' => 
                array (
                  'description' => 'NFS数据卷的读取权限。取值范围：

- true：NFS Volume具有只读权限。
- false：NFS Volume具有可读可写权限。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'ConfigFileVolume.ConfigFileToPath' => 
                array (
                  'description' => 'ConfigFile数据卷对应的配置文件信息。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'ConfigFile数据卷对应的配置文件信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Path' => 
                      array (
                        'description' => '配置文件的相对文件路径。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'jin/test',
                      ),
                      'Content' => 
                      array (
                        'description' => '配置文件的内容。采用Base64编码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'bGl1bWk=',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 16,
                ),
                'EmptyDirVolume.Medium' => 
                array (
                  'description' => 'EmptyDir数据卷的存储媒介，默认为空，使用node文件系统；支持配置为Memory，表示使用内存。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Memory',
                ),
                'EmptyDirVolume.SizeLimit' => 
                array (
                  'description' => 'EmptyDir数据卷的大小。取值请带上单位，建议使用Gi或Mi。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '256Mi',
                ),
                'FlexVolume.FsType' => 
                array (
                  'description' => '使用FlexVolume插件挂载云盘时，云盘的文件系统类型。支持的类型包括ext4、ext3、xfs、vfat。默认为ext4。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ext4',
                ),
                'FlexVolume.Driver' => 
                array (
                  'description' => '使用FlexVolume插件挂载数据卷时的驱动类型。取值范围如下：

- alicloud/disk：挂载云盘。
- alicloud/nas：挂载NAS。
- alicloud/oss：挂载OSS。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'alicloud/disk',
                ),
                'FlexVolume.Options' => 
                array (
                  'description' => 'FlexVolume对象选项列表。为KV形式，采用JSON传递。例如通过FlexVolume挂载云盘时，Options表示云盘的配置参数。更多信息，请参见[数据卷概述](~~90672~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '{"volumeId":"d-2zehdahrwoa7srg****","performanceLevel": "PL2"}',
                ),
                'HostPathVolume.Path' => 
                array (
                  'description' => 'HostPath数据卷在宿主机上的路径。

> 该参数暂未开放使用。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/tmp',
                ),
                'HostPathVolume.Type' => 
                array (
                  'description' => 'HostPath数据卷的类型。取值范围：

 - Directory：目录。
- File：文件。

> 该参数暂未开放使用。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Directory',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 61,
          ),
        ),
        10 => 
        array (
          'name' => 'DnsConfig.Search',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'DNS搜索域列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'DNS搜索域列表。',
              'type' => 'string',
              'required' => false,
              'example' => 'my.dns.search.suffix',
            ),
            'required' => false,
            'example' => 'my.dns.search.suffix',
            'maxItems' => 21,
          ),
        ),
        11 => 
        array (
          'name' => 'DnsConfig.NameServer',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'DNS服务器的IP地址列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'DNS服务器的IP地址列表。',
              'type' => 'string',
              'required' => false,
              'example' => '1.2.3.4',
            ),
            'required' => false,
            'example' => '1.2.3.4',
            'maxItems' => 21,
          ),
        ),
        12 => 
        array (
          'name' => 'DnsConfig.Option',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'DNS配置信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'DNS配置信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Value' => 
                array (
                  'description' => 'DNS配置的选项变量值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '2',
                ),
                'Name' => 
                array (
                  'description' => 'DNS配置的选项变量名。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ndots',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        13 => 
        array (
          'name' => 'Container',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定新的容器组配置信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定新的容器组配置信息。',
              'type' => 'object',
              'properties' => 
              array (
                'ReadinessProbe.TimeoutSeconds' => 
                array (
                  'description' => '检查超时的时间。默认为1秒，最小为1秒。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '5',
                ),
                'ReadinessProbe.SuccessThreshold' => 
                array (
                  'description' => '从上次检查失败后重新认定检查成功的检查次数阈值（必须是连续成功），默认为1。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'SecurityContext.Capability.Add' => 
                array (
                  'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET\\_ADMIN和NET\\_RAW。

> NET_RAW默认不支持，需提交工单申请。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET\\_ADMIN和NET\\_RAW。

> NET_RAW默认不支持，需提交工单申请。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'NET_ADMIN',
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'ReadinessProbe.TcpSocket.Port' => 
                array (
                  'description' => 'TcpSocket检测的端口。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '5000',
                ),
                'ReadinessProbe.HttpGet.Scheme' => 
                array (
                  'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求对应的协议类型，取值范围：

- HTTP
- HTTPS',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'HTTP',
                ),
                'LivenessProbe.PeriodSeconds' => 
                array (
                  'description' => '检查执行的周期。默认为10秒，最小为1秒。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '10',
                ),
                'SecurityContext.ReadOnlyRootFilesystem' => 
                array (
                  'description' => '是否只读根文件系统。取值目前仅支持：true。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'EnvironmentVar' => 
                array (
                  'description' => '容器的环境变量信息列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器的环境变量信息列表。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Key' => 
                      array (
                        'description' => '容器的环境变量名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PATH',
                      ),
                      'Value' => 
                      array (
                        'description' => '容器的环境变量值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/usr/bin/local/',
                      ),
                      'FieldRef.FieldPath' => 
                      array (
                        'description' => '使用Pod字段作为环境变量。目前仅支持status.podIP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'status.podIP',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'LivenessProbe.TcpSocket.Port' => 
                array (
                  'description' => 'TcpSocket检测的端口。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '80',
                ),
                'Tty' => 
                array (
                  'description' => '是否开启交互。默认为false，如果Command为/bin/bash类型，需要设置为true。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'WorkingDir' => 
                array (
                  'description' => '容器工作目录。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/usr/share/',
                ),
                'Arg' => 
                array (
                  'description' => '容器启动参数。最多10个。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器启动参数。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'hello',
                  ),
                  'required' => false,
                  'example' => 'hello',
                  'maxItems' => 101,
                ),
                'Stdin' => 
                array (
                  'description' => '此容器是否应在容器运行时为标准输入分配缓冲区。如果未设置，则容器中标准输入的读取值将导致EOF。默认为false。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'LivenessProbe.InitialDelaySeconds' => 
                array (
                  'description' => '检查开始执行的时间。以容器启动完成为起点开始计算。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '10',
                ),
                'VolumeMount' => 
                array (
                  'description' => '容器的数据卷信息列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器的数据卷信息列表。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'MountPropagation' => 
                      array (
                        'description' => '数据卷的挂载传播设置。挂载传播允许将Container挂载的卷共享到同一Pod中的其他Container，甚至可以共享到同一节点上的其他Pod。取值范围：

- None：该卷不感知任何后续在此卷或其子目录上执行的挂载操作。
- HostToContainer：该卷将会感知到后续在此卷或其子目录上的挂载操作。
- Bidirectional：和HostToContainerr类似，能感知挂载操作。另外，该卷将被传播回主机和使用同一卷的所有Pod的所有容器。

默认值：None',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'None',
                      ),
                      'MountPath' => 
                      array (
                        'description' => '容器挂载的目录。容器挂载目录下的内容会被volume的内容直接覆盖，请谨慎使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/usr/share/',
                      ),
                      'ReadOnly' => 
                      array (
                        'description' => '是否只读。默认值：false',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                      ),
                      'SubPath' => 
                      array (
                        'description' => '数据卷的子目录，方便Pod将同一个Volume下不同目录挂载到容器不同目录。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/usr/share/sub/',
                      ),
                      'Name' => 
                      array (
                        'description' => '容器挂载的数据卷名称。从ECI实例（容器组）挂载的数据卷中选择，即取值范围为配置的Volume.N.Name参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-empty',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'ImagePullPolicy' => 
                array (
                  'description' => '镜像拉取策略。取值范围：

- Always：总是拉取。每次都拉取镜像。
- IfNotPresent：按需拉取。优先使用本地镜像，本地没有镜像时则拉取镜像。
- Never：从不拉取。使用本地镜像，不拉取镜像。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Never',
                ),
                'StdinOnce' => 
                array (
                  'description' => '当标准输入为true时，标准输入流将在多个附加会话中保持开启状态。如果StdinOnce设为true，标准输入在容器开启时被打开，在首个客户端附加到标准输入之前都为空，然后会一直保持开启状态，接收数据，直到客户端连接断开，此时标准输入被关闭，在容器重启前一直保持关闭状态。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'LifecyclePreStopHandlerTcpSocketPort' => 
                array (
                  'description' => '使用TCPSocket方式设置preStop回调函数时，TCP Socket检测的端口。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '80',
                ),
                'LifecyclePostStartHandlerHttpGetScheme' => 
                array (
                  'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求检测的路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/healthyz',
                ),
                'ReadinessProbe.PeriodSeconds' => 
                array (
                  'description' => '检查执行的周期，默认为10秒，最小为1秒。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '3',
                ),
                'LivenessProbe.SuccessThreshold' => 
                array (
                  'description' => '从上次检查失败后重新认定检查成功的检查次数阈值（必须是连续成功）。默认为1次，当前必须为1次。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'Command' => 
                array (
                  'description' => '容器启动命令。最多20个，单个命令支持256个字符。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器启动命令。单个命令支持256个字符。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'echo',
                  ),
                  'required' => false,
                  'example' => 'echo',
                  'maxItems' => 101,
                ),
                'LifecyclePostStartHandlerHttpGetHost' => 
                array (
                  'description' => '使用HTTP请求方式设置postStart回调函数时，接收HTTP Get请求的主机地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'hide',
                ),
                'ReadinessProbe.HttpGet.Path' => 
                array (
                  'description' => 'HttpGet检测的路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/usr/',
                ),
                'LivenessProbe.Exec.Command' => 
                array (
                  'description' => '容器内检测命令。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器内检测命令。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'echo',
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'LifecyclePostStartHandlerTcpSocketPort' => 
                array (
                  'description' => '使用TCPSocket方式设置postStart回调函数时，TCP Socket检测的端口。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'LifecyclePostStartHandlerHttpGetPath' => 
                array (
                  'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求检测的路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/healthyz',
                ),
                'LifecyclePostStartHandlerExec' => 
                array (
                  'description' => '使用命令行方式设置postStart回调函数时，在容器内执行的命令。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '使用命令行方式设置postStart回调函数时，在容器内执行的命令。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '["/bin/sh", "-c", "echo Hello from the postStart handler > /usr/share/message"]',
                  ),
                  'required' => false,
                  'example' => 'hide',
                  'maxItems' => 101,
                ),
                'LifecyclePreStopHandlerHttpGetPath' => 
                array (
                  'description' => '使用HTTP请求方式设置preStop回调函数时，HTTP Get请求检测的路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/healthyz',
                ),
                'Port' => 
                array (
                  'description' => '容器端口号。取值范围：1~65535',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器端口号。取值范围：1~65535',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Protocol' => 
                      array (
                        'description' => 'TCP/UDP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TCP',
                      ),
                      'Port' => 
                      array (
                        'description' => '端口号。取值范围：1~65535',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '8080',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'LifecyclePreStopHandlerHttpGetScheme' => 
                array (
                  'description' => '使用HTTP请求方式设置preStop回调函数时，HTTP Get请求对应的协议类型，取值范围：

- HTTP
- HTTPS',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'HTTP',
                ),
                'LivenessProbe.HttpGet.Scheme' => 
                array (
                  'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求对应的协议类型，取值范围：

- HTTP
- HTTPS',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'HTTP',
                ),
                'LifecyclePostStartHandlerHttpGetHttpHeaders' => 
                array (
                  'description' => '生成的http请求头中，有效的http请求头信息集合。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '生成的http请求头中，有效的http请求头信息集合。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求的请求参数值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                      ),
                      'Name' => 
                      array (
                        'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求的请求参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testValue',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'ReadinessProbe.HttpGet.Port' => 
                array (
                  'description' => 'HttpGet检测的端口号。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '8080',
                ),
                'LifecyclePostStartHandlerTcpSocketHost' => 
                array (
                  'description' => '使用TCP Socket方式设置postStart回调函数时，TCP Socket检测的主机地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '10.0.XX.XX',
                ),
                'Gpu' => 
                array (
                  'description' => '指定容器使用的GPU个数。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'ReadinessProbe.InitialDelaySeconds' => 
                array (
                  'description' => '检查开始执行的时间，以容器启动完成为起点计算。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '10',
                ),
                'LifecyclePreStopHandlerExec' => 
                array (
                  'description' => '使用命令行方式设置preStop回调函数时，在容器内执行的命令。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '使用命令行方式设置preStop回调函数时，在容器内执行的命令。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '["/bin/sh", "-c","echo Hello from the preStop handler > /usr/share/message"]',
                  ),
                  'required' => false,
                  'example' => 'hide',
                  'maxItems' => 101,
                ),
                'Memory' => 
                array (
                  'description' => '容器内存大小。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '2.0',
                ),
                'Name' => 
                array (
                  'description' => '容器名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'jenkins',
                ),
                'LifecyclePreStopHandlerHttpGetHost' => 
                array (
                  'description' => '使用HTTP请求方式设置preStop回调函数时，接收HTTP Get请求的主机地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '10.0.XX.XX',
                ),
                'LifecyclePreStopHandlerTcpSocketHost' => 
                array (
                  'description' => '使用TCP Socket方式设置preStop回调函数时，TCP Socket检测的主机地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '10.0.XX.XX',
                ),
                'Image' => 
                array (
                  'description' => '容器镜像。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'jenkins',
                ),
                'LifecyclePreStopHandlerHttpGetPort' => 
                array (
                  'description' => '使用HTTP请求方式设置preStop回调函数时，HTTP Get请求检测的端口号。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'LivenessProbe.FailureThreshold' => 
                array (
                  'description' => '从上次检查成功后认定检查失败的检查次数阈值（必须是连续失败）。默认为3次。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '3',
                ),
                'ReadinessProbe.Exec.Command' => 
                array (
                  'description' => '容器内检测的命令。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器内检测的命令。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'echo',
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'LifecyclePreStopHandlerHttpGetHttpHeader' => 
                array (
                  'description' => '生成的http请求头信息。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '生成的http请求头信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '使用HTTP请求方式设置preStop回调函数时，HTTP Get请求的请求参数值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testValue',
                      ),
                      'Name' => 
                      array (
                        'description' => '使用HTTP请求方式设置preStop回调函数时，HTTP Get请求的请求参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'ReadinessProbe.FailureThreshold' => 
                array (
                  'description' => '从上次检查成功后认定检查失败的检查次数阈值（必须是连续失败）。默认为3次。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '3',
                ),
                'Cpu' => 
                array (
                  'description' => '容器vCPU大小。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '1.0',
                ),
                'LivenessProbe.HttpGet.Port' => 
                array (
                  'description' => 'HttpGet检测的端口号。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '8080',
                ),
                'LivenessProbe.HttpGet.Path' => 
                array (
                  'description' => 'HttpGet检测的路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/usr/local/bin',
                ),
                'LivenessProbe.TimeoutSeconds' => 
                array (
                  'description' => '检查超时的时间。默认为1秒，最小为1秒。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'SecurityContext.RunAsUser' => 
                array (
                  'description' => '用于运行容器进程入口点的UID。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '1377',
                ),
                'LifecyclePostStartHandlerHttpGetPort' => 
                array (
                  'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求检查的端口号。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        14 => 
        array (
          'name' => 'InitContainer',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定新的Init容器信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定新的Init容器信息。',
              'type' => 'object',
              'properties' => 
              array (
                'SecurityContext.Capability.Add' => 
                array (
                  'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET\\_ADMIN和NET\\_RAW。

> NET_RAW默认不支持，需提交工单申请。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET\\_ADMIN和NET\\_RAW。

> NET_RAW默认不支持，需提交工单申请。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'NET_ADMIN',
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'Image' => 
                array (
                  'description' => 'Init容器镜像。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'nginx',
                ),
                'VolumeMount' => 
                array (
                  'description' => '挂载数据卷信息列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '挂载数据卷信息列表。

',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'MountPropagation' => 
                      array (
                        'description' => '数据卷的挂载传播设置。挂载传播允许将Container挂载的卷共享到同一Pod中的其他Container，甚至可以共享到同一节点上的其他Pod。取值范围：

- None：该卷不感知到任何后续在此卷或其任何子目录上执行的挂载变化。
- HostToContainer：该卷将会感知到主机后续针对此卷或其任何子目录的挂载操作。
- Bidirectional：和HostToContainer类似。另外，该卷将被传播回主机和使用同一卷的所有Pod的所有容器。

默认值：None',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'None',
                      ),
                      'MountPath' => 
                      array (
                        'description' => 'Init容器挂载目录。容器挂载目录下的内容将被volume的内容直接覆盖，请谨慎使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/pod/data',
                      ),
                      'ReadOnly' => 
                      array (
                        'description' => '是否只读。默认值：false',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                      ),
                      'SubPath' => 
                      array (
                        'description' => '数据卷的子目录，方便Pod将同一个Volume下不同目录挂载到容器不同目录。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'data2/',
                      ),
                      'Name' => 
                      array (
                        'description' => 'Init容器挂载的数据卷名称。从ECI实例（容器组）挂载的数据卷中选择，即取值范围为配置的Volume.N.Name参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default-volume1',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'Port' => 
                array (
                  'description' => '端口号。取值范围：1~65535。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '端口号。取值范围：1~65535。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Protocol' => 
                      array (
                        'description' => 'TCP/UDP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TCP',
                      ),
                      'Port' => 
                      array (
                        'description' => 'Init容器端口号 。取值范围：1~65535。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '9000',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'SecurityContext.ReadOnlyRootFilesystem' => 
                array (
                  'description' => '容器运行的根文件系统是否为只读。目前仅支持配置为true。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'EnvironmentVar' => 
                array (
                  'description' => '容器的环境变量信息列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器的环境变量信息列表。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Key' => 
                      array (
                        'description' => 'Init容器的环境变量名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PATH',
                      ),
                      'Value' => 
                      array (
                        'description' => 'Init容器的环境变量值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/usr/local/bin',
                      ),
                      'FieldRef.FieldPath' => 
                      array (
                        'description' => '环境变量值引用。目前只支持配置为status.podIP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'status.podIP',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'ImagePullPolicy' => 
                array (
                  'description' => '镜像拉取策略。取值范围：

- Always：总是拉取。每次都拉取镜像。
- IfNotPresent：按需拉取。优先使用本地镜像，本地没有镜像时则拉取镜像。
- Never：从不拉取。使用本地镜像，不拉取镜像。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'IfNotPresent',
                ),
                'StdinOnce' => 
                array (
                  'description' => '当标准输入为true时，标准输入流将在多个附加会话中保持开启状态。如果StdinOnce设为true，标准输入在容器开启时被打开，在首个客户端附加到标准输入之前都为空，然后会一直保持开启状态，接收数据，直到客户端连接断开，此时标准输入被关闭，在容器重启前一直保持关闭状态。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'Cpu' => 
                array (
                  'description' => 'Init容器vCPU大小。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '2.0',
                ),
                'Tty' => 
                array (
                  'description' => '是否开启交互。默认为false，如果Command为/bin/bash类型时，需要设置为true。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'WorkingDir' => 
                array (
                  'description' => 'Init容器工作目录。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/bin/local/',
                ),
                'Command' => 
                array (
                  'description' => 'Init容器指令。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'Init容器指令。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '/bin/sh sleep',
                  ),
                  'required' => false,
                  'example' => '/bin/sh sleep',
                  'maxItems' => 101,
                ),
                'Arg' => 
                array (
                  'description' => 'Init容器启动参数。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'Init容器启动参数。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '10',
                  ),
                  'required' => false,
                  'example' => '10',
                  'maxItems' => 101,
                ),
                'SecurityContext.RunAsUser' => 
                array (
                  'description' => '设置运行容器的用户ID。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '1000',
                ),
                'Gpu' => 
                array (
                  'description' => '指定Init容器使用的GPU个数。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'Memory' => 
                array (
                  'description' => 'Init容器内存大小。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '4.0',
                ),
                'Stdin' => 
                array (
                  'description' => '此容器是否应在容器运行时为标准输入分配缓冲区。如果未设置，则容器中标准输入的读取值将导致EOF。默认为false。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'Name' => 
                array (
                  'description' => 'Init容器名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'init-nginx',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        15 => 
        array (
          'name' => 'ImageRegistryCredential',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '镜像仓库凭证信息列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '镜像仓库凭证信息列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Password' => 
                array (
                  'description' => '镜像仓库密码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'yourpassword',
                ),
                'Server' => 
                array (
                  'description' => '不带`http://`或`https://`前缀的镜像仓库地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'registry.cn-shanghai.aliyuncs.com/ecitest/nginx:alpine',
                ),
                'UserName' => 
                array (
                  'description' => '镜像仓库用户名。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'yourname',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        16 => 
        array (
          'name' => 'AcrRegistryInfo',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ACR企业版实例信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ACR企业版实例信息。',
              'type' => 'object',
              'properties' => 
              array (
                'InstanceId' => 
                array (
                  'description' => 'ACR企业版实例ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cri-nwj395hgf6f3****',
                ),
                'InstanceName' => 
                array (
                  'description' => 'ACR企业版实例的名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'acr-test',
                ),
                'RegionId' => 
                array (
                  'description' => 'ACR企业版实例所属地域。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-beijing',
                ),
                'Domain' => 
                array (
                  'description' => 'ACR企业版实例的域名。默认为相应实例的所有域名。支持指定个别域名，多个以半角逗号分隔。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'ACR企业版实例的域名。默认为相应实例的所有域名。支持指定个别域名，多个以半角逗号分隔。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'cn-beijing',
                  ),
                  'required' => false,
                  'maxItems' => 21,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        17 => 
        array (
          'name' => 'UpdateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更新类型。取值范围：

- RenewUpdate：全量更新，更新时需填写相关的所有参数。如果参数是一个List，不支持单独更新某个item，如果参数是一个结构体，不支持单独更新某个内部成员。
- IncrementalUpdate：增量更新，更新时可以只填某一需要更新的参数，其它相关参数保持原有不变。

默认为RenewUpdate。',
            'type' => 'string',
            'required' => false,
            'example' => 'RenewUpdate',
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
                'description' => '请求ID，唯一标识。',
                'type' => 'string',
                'example' => 'CB8D2B22-D636-4182-****-1FC9DBDAD66F',
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
            'errorCode' => 'InvalidParameter.CPU.Memory',
            'errorMessage' => 'The specified cpu and memory are not allowed',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.DuplicatedName',
            'errorMessage' => 'The container group include containers with duplicate names.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.DuplicatedVolumeName',
            'errorMessage' => 'The container group includes volumes with duplicate names.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.LengthExceeded',
            'errorMessage' => '%s',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.ValueExceeded',
            'errorMessage' => '%s',
          ),
          5 => 
          array (
            'errorCode' => 'IncorrectStatus',
            'errorMessage' => '%s',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParam.CpuOrMemorySpec',
            'errorMessage' => 'The specified specification is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => '%s',
          ),
          8 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => '%s',
          ),
          9 => 
          array (
            'errorCode' => 'NoNeedUpdate',
            'errorMessage' => 'There are no changes to be updated for current resource.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAction',
            'errorMessage' => 'The specified action is invalid',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.NotFound',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CB8D2B22-D636-4182-****-1FC9DBDAD66F\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateContainerGroup>\\r\\n    <RequestId>CB8D2B22-D636-4182-****-1FC9DBDAD66F</RequestId>\\r\\n</UpdateContainerGroup>","errorExample":""}]',
      'title' => '更新一个容器组',
      'summary' => '更新实例。',
      'description' => '- 仅支持处于启动中（Pending）或运行中（Running）状态的ECI实例进行更新。更新操作后，ECI实例状态将变更为更新中（Updating）。
- 更新RestartPolicy配置为Never的ECI实例可能会有容器Failed的风险，请慎重更新。',
      'requestParamsDescription' => '### 参数说明
**Container和InitContainer**
InitContainer和Container均仅支持全量更新。更新InitContainer需要重启实例。
更新包括以下几种情况：
- 原ECI实例同时有InitContainer和Container，但只更新InitContainer。
- 原ECI实例同时有InitContainer和Container，但只更新Container。
- 原ECI实例同时有InitContainer和Container，InitContainer和Container全部更新。
- 原ECI实例只有Container，更新Container。
- 原ECI实例只有Container，增加InitContainer。
- 原ECI实例只有Container，增加InitContainer，同时更新Container。


**ImageRegistryCredentials**
- 仅支持全量更新。
- 如果单独更新ImageRegistryCredentials，且更新后的ImageRegistryCredentials的数量不超过之前原ImageRegistryCredentials，则无需重启ECI实例，其他情况需要重启ECI实例。

> 全量更新：如果参数是一个List，不支持单独更新某个item，如果参数是一个结构体，不支持单独更新某个内部成员。',
      'responseParamsDescription' => '





',
      'extraInfo' => ' ',
    ),
    'DescribeContainerGroups' => 
    array (
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
        'abilityTreeCode' => '17732',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeciO8VNZM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的可用区。如果取值为空，则表示由系统选择。

默认值为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-h',
          ),
        ),
        3 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的虚拟交换机ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1jrgfqqy54kg5hc****',
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token，NextToken为空表示没有下一个。

> 首次查询时无需设置该参数，后续查询的Token从返回结果中获取。
',
            'type' => 'string',
            'required' => false,
            'example' => 'd78f2dd8-5979-42fe-****-b16db43be5bc',
          ),
        ),
        5 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限定此次返回资源的数量。如果不设置，默认返回20个，最大不能超过20个。

> 返回结果可能小于指定的数量，但不会多于指定的数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'ContainerGroupIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID序列。最多20个，字符串需按照JSON格式传入。',
            'type' => 'string',
            'required' => false,
            'example' => '["eci-bp17gw49eu09yiwm****", "eci-bp19aq49du01abcm****", "eci-2zegym1qhbmdfr1s****"]',
          ),
        ),
        7 => 
        array (
          'name' => 'ContainerGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称，即容器组名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        8 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例状态。取值范围：

- Pending：启动中
- Running：运行中
- Succeeded：运行成功
- Failed：运行失败
- Scheduling：创建中
- ScheduleFailed：创建失败
- Restarting：重启中
- Updating：更新中
- Terminating：终止中
- Expired：过期',
            'type' => 'string',
            'required' => false,
            'example' => 'Running',
          ),
        ),
        9 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aekzh43v*****	',
          ),
        ),
        10 => 
        array (
          'name' => 'WithEvent',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回事件信息。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        11 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例标签信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例标签信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '实例标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'name',
                ),
                'Value' => 
                array (
                  'description' => '实例标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        12 => 
        array (
          'name' => 'ComputeCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定算力类别。取值范围：

- economy：经济型
- general：通用型',
            'type' => 'string',
            'required' => false,
            'example' => 'economy',
          ),
        ),
        13 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的安全组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'sg-uf66jeqopgqa9hdn****
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
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '实例数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'd78f2dd8-5979-42fe-****-b16db43be5bc',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，唯一标识。',
                'type' => 'string',
                'example' => '89945DD3-9072-47D0-A318-353284CFC7B3',
              ),
              'ContainerGroups' => 
              array (
                'description' => '实例信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实例信息列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '实例状态。可能值：

- Pending：启动中
- Running：运行中
- Succeeded：运行成功
- Failed：运行失败
- Scheduling：创建中
- ScheduleFailed：创建失败
- Restarting：重启中
- Updating：更新中
- Terminating：终止中
- Expired：过期
',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'CreationTime' => 
                    array (
                      'description' => '接到请求后的系统创建时间。UTC时间，RFC3339标准。',
                      'type' => 'string',
                      'example' => '2018-08-02T15:00:00Z',
                    ),
                    'VpcId' => 
                    array (
                      'description' => '实例所属的VPC ID。',
                      'type' => 'string',
                      'example' => 'vpc-1vzjjflab6wvjox****',
                    ),
                    'InternetIp' => 
                    array (
                      'description' => '公网IP。',
                      'type' => 'string',
                      'example' => '192.0.XX.XX',
                    ),
                    'TenantSecurityGroupId' => 
                    array (
                      'description' => '该参数未开放使用。',
                      'type' => 'string',
                      'example' => 'sg-xxx',
                    ),
                    'SecurityGroupId' => 
                    array (
                      'description' => '安全组ID。',
                      'type' => 'string',
                      'example' => 'sg-bp12ujq5zpxuyjfo3o8r',
                    ),
                    'HostAliases' => 
                    array (
                      'description' => '自定义实例内一个容器的Hostname映射。
',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '自定义实例内一个容器的Hostname映射。
',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Hostnames' => 
                          array (
                            'description' => '主机信息。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '主机名。',
                              'type' => 'string',
                              'example' => '[\'hehe.com\', \'haha.com\']',
                            ),
                          ),
                          'Ip' => 
                          array (
                            'description' => 'IP地址。',
                            'type' => 'string',
                            'example' => '192.0.XX.XX',
                          ),
                        ),
                      ),
                    ),
                    'Tags' => 
                    array (
                      'description' => '实例标签信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '实例标签信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键。',
                            'type' => 'string',
                            'example' => 'name',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => 'test-xh',
                          ),
                        ),
                      ),
                    ),
                    'Events' => 
                    array (
                      'description' => '事件信息，上限50。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '事件信息，上限50。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Type' => 
                          array (
                            'description' => '事件类型，可能值：

- Normal
- Warning',
                            'type' => 'string',
                            'example' => 'Normal',
                          ),
                          'LastTimestamp' => 
                          array (
                            'description' => '事件结束时间。',
                            'type' => 'string',
                            'example' => '2018-08-02T15:00:00Z',
                          ),
                          'Message' => 
                          array (
                            'description' => '事件消息。',
                            'type' => 'string',
                            'example' => 'Started container',
                          ),
                          'Name' => 
                          array (
                            'description' => '事件的归属对象名。',
                            'type' => 'string',
                            'example' => 'test-xxx',
                          ),
                          'Reason' => 
                          array (
                            'description' => '事件名。',
                            'type' => 'string',
                            'example' => 'Created',
                          ),
                          'Count' => 
                          array (
                            'description' => '事件数量。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '20',
                          ),
                          'FirstTimestamp' => 
                          array (
                            'description' => '事件起始时间。',
                            'type' => 'string',
                            'example' => '2018-08-02T15:00:00Z',
                          ),
                        ),
                      ),
                    ),
                    'SucceededTime' => 
                    array (
                      'description' => '容器全部成功退出后的时间。UTC时间，RFC3339标准。',
                      'type' => 'string',
                      'example' => '2019-12-11T04:33:42Z',
                    ),
                    'SpotStrategy' => 
                    array (
                      'description' => '实例的抢占策略。取值范围：
- NoSpot（默认）：正常按量付费实例。
- SpotWithPriceLimit：设置上限价格的抢占式实例。
- SpotAsPriceGo：系统自动出价，跟随当前市场实际价格。',
                      'type' => 'string',
                      'example' => 'NoSpot',
                    ),
                    'SpotPriceLimit' => 
                    array (
                      'description' => '抢占式实例的每小时最高价格。

仅当SpotStrategy为SpotWithPriceLimit时返回。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '0.025',
                    ),
                    'EphemeralStorage' => 
                    array (
                      'description' => '临时存储空间大小。单位为：GiB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '20',
                    ),
                    'TenantEniInstanceId' => 
                    array (
                      'description' => '该参数未开放使用。',
                      'type' => 'string',
                      'example' => 'i-xxx',
                    ),
                    'Discount' => 
                    array (
                      'description' => '折扣。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '9',
                    ),
                    'RestartPolicy' => 
                    array (
                      'description' => '容器组的重启策略。取值范围：

- Never：不重启
- Always：始终重启
- OnFailure：失败时重启
',
                      'type' => 'string',
                      'example' => 'Never',
                    ),
                    'Memory' => 
                    array (
                      'description' => '实例级别内存大小。单位为GiB。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '4.0',
                    ),
                    'TenantVSwitchId' => 
                    array (
                      'description' => '该参数未开放使用。',
                      'type' => 'string',
                      'example' => 'vsw-xxx',
                    ),
                    'Containers' => 
                    array (
                      'description' => '实例包含的容器列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '实例包含的容器列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'LivenessProbe' => 
                          array (
                            'description' => '存活探针。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'SuccessThreshold' => 
                              array (
                                'description' => '从上次检查失败后重新认定检查成功的检查次数阈值（必须是连续成功），默认为1。当前必须为1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                              ),
                              'InitialDelaySeconds' => 
                              array (
                                'description' => '检查开始执行的时间，以容器启动完成为起点计算。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                              ),
                              'FailureThreshold' => 
                              array (
                                'description' => '从上次检查成功后认定检查失败的检查次数阈值（必须是连续失败），默认为3。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                              ),
                              'TimeoutSeconds' => 
                              array (
                                'description' => '检查超时的时间，默认为1秒，最小为1秒。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                              ),
                              'TcpSocket' => 
                              array (
                                'description' => 'TcpSocket。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Host' => 
                                  array (
                                    'description' => '主机名。',
                                    'type' => 'string',
                                    'example' => '1.2.3.4',
                                  ),
                                  'Port' => 
                                  array (
                                    'description' => '端口号。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '80',
                                  ),
                                ),
                              ),
                              'Execs' => 
                              array (
                                'description' => '执行命令。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '执行命令。',
                                  'type' => 'string',
                                  'example' => '["/bin/sh", "-c", "echo Hello world > /usr/share/message"]',
                                ),
                              ),
                              'HttpGet' => 
                              array (
                                'description' => 'HttpGet。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Scheme' => 
                                  array (
                                    'description' => 'HTTP或HTTPS。',
                                    'type' => 'string',
                                    'example' => 'HTTP',
                                  ),
                                  'Path' => 
                                  array (
                                    'description' => 'HttpGet检测的路径。',
                                    'type' => 'string',
                                    'example' => '/usr/nginx/',
                                  ),
                                  'Port' => 
                                  array (
                                    'description' => 'HttpGet检测的端口。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '80',
                                  ),
                                ),
                              ),
                              'PeriodSeconds' => 
                              array (
                                'description' => '检查执行的周期，默认为10秒，最小为1秒。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                              ),
                            ),
                          ),
                          'Commands' => 
                          array (
                            'description' => '容器启动命令。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '容器启动命令。',
                              'type' => 'string',
                              'example' => '[/bin/sh echo]',
                            ),
                          ),
                          'VolumeMounts' => 
                          array (
                            'description' => '挂载的数据卷信息。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '挂载的数据卷信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'MountPropagation' => 
                                array (
                                  'description' => '数据卷的挂载传播设置。挂载传播允许将Container挂载的卷共享到同一Pod中的其他Container，甚至可以共享到同一节点上的其他Pod。可能值：

- None：该卷不感知任何后续在此卷或其子目录上执行的挂载操作。
- HostToCotainer：该卷将会感知到后续在此卷或其子目录上的挂载操作。
- Bidirectional：和HostToCotainer类似，能感知挂载操作。另外，该卷将被传播回主机和使用同一卷的所有Pod的所有容器。',
                                  'type' => 'string',
                                  'example' => 'None',
                                ),
                                'MountPath' => 
                                array (
                                  'description' => '挂载目录，容器的挂载目录下的内容被Volume的内容直接覆盖。',
                                  'type' => 'string',
                                  'example' => '/usr/share/',
                                ),
                                'ReadOnly' => 
                                array (
                                  'description' => '是否只读。',
                                  'type' => 'boolean',
                                  'example' => 'false',
                                ),
                                'Name' => 
                                array (
                                  'description' => '数据卷名称。',
                                  'type' => 'string',
                                  'example' => 'test-empty',
                                ),
                                'SubPath' => 
                                array (
                                  'description' => '数据卷下的子目录。方便实例将同一个数据卷下的不同目录挂载到容器的不同目录。',
                                  'type' => 'string',
                                  'example' => '/usr/sub',
                                ),
                              ),
                            ),
                          ),
                          'Args' => 
                          array (
                            'description' => '容器启动参数。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '容器启动参数。',
                              'type' => 'string',
                              'example' => '["hello"]',
                            ),
                          ),
                          'Image' => 
                          array (
                            'description' => '容器镜像。',
                            'type' => 'string',
                            'example' => 'mysql',
                          ),
                          'Ports' => 
                          array (
                            'description' => '暴露端口和协议。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '暴露端口和协议。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Protocol' => 
                                array (
                                  'description' => '协议类型。',
                                  'type' => 'string',
                                  'example' => 'TCP',
                                ),
                                'Port' => 
                                array (
                                  'description' => '端口号。可能值：1~65535。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '8080',
                                ),
                              ),
                            ),
                          ),
                          'RestartCount' => 
                          array (
                            'description' => '重启次数。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '0',
                          ),
                          'ImagePullPolicy' => 
                          array (
                            'description' => '镜像拉取策略。可能值：

- Always：总是拉取。每次都拉取镜像。
- IfNotPresent：按需拉取。优先使用本地镜像，本地没有镜像时则拉取镜像。
- Never：从不拉取。使用本地镜像，不拉取镜像。',
                            'type' => 'string',
                            'example' => 'Always',
                          ),
                          'StdinOnce' => 
                          array (
                            'description' => '当标准输入为true时，标准输入流将在多个附加会话中保持开启状态。如果StdinOnce设为true，标准输入在容器开启时被打开，在首个客户端附加到标准输入之前都为空，然后会一直保持开启状态，接收数据，直到客户端连接断开，此时标准输入被关闭，在容器重启前一直保持关闭状态。',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'Cpu' => 
                          array (
                            'description' => '容器的vCPU大小。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '2.0',
                          ),
                          'PreviousState' => 
                          array (
                            'description' => '上一次状态。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'StartTime' => 
                              array (
                                'description' => '容器运行开始时间。',
                                'type' => 'string',
                                'example' => '2021-12-02T15:00:00Z',
                              ),
                              'FinishTime' => 
                              array (
                                'description' => '容器运行结束时间。',
                                'type' => 'string',
                                'example' => '2021-12-02T15:01:00Z',
                              ),
                              'DetailStatus' => 
                              array (
                                'description' => '状态详情。',
                                'type' => 'string',
                                'example' => 'working',
                              ),
                              'State' => 
                              array (
                                'description' => '容器状态。可能值：

- Waiting：启动中
- Running：运行中
- Terminated：运行终止',
                                'type' => 'string',
                                'example' => 'Terminated',
                              ),
                              'Message' => 
                              array (
                                'description' => '容器状态信息。',
                                'type' => 'string',
                                'example' => 'Back-off 5m0s restarting failed container=test pod=test_eci-xxx(xxx)',
                              ),
                              'Signal' => 
                              array (
                                'description' => '容器状态信号。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                              ),
                              'ExitCode' => 
                              array (
                                'description' => '容器运行退出码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'Reason' => 
                              array (
                                'description' => '容器状态Reason。',
                                'type' => 'string',
                                'example' => 'Completed',
                              ),
                            ),
                          ),
                          'Tty' => 
                          array (
                            'description' => '是否开启交互。默认为false。例如：当Command配置为`/bin/bash`时，需要配置为true。',
                            'type' => 'boolean',
                            'example' => 'false',
                          ),
                          'WorkingDir' => 
                          array (
                            'description' => '工作目录。',
                            'type' => 'string',
                            'example' => '/usr/local/nginx',
                          ),
                          'CurrentState' => 
                          array (
                            'description' => '容器当前状态。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'StartTime' => 
                              array (
                                'description' => '容器运行开始时间。',
                                'type' => 'string',
                                'example' => '2021-12-02T15:00:00Z',
                              ),
                              'FinishTime' => 
                              array (
                                'description' => '容器运行结束时间。',
                                'type' => 'string',
                                'example' => '2021-12-02T15:01:00Z',
                              ),
                              'DetailStatus' => 
                              array (
                                'description' => '容器状态详情。',
                                'type' => 'string',
                                'example' => 'working',
                              ),
                              'State' => 
                              array (
                                'description' => '容器状态，可能值：

- Waiting
- Running
- Terminated',
                                'type' => 'string',
                                'example' => 'Terminated',
                              ),
                              'Message' => 
                              array (
                                'description' => '容器状态信息。',
                                'type' => 'string',
                                'example' => 'Back-off 5m0s restarting failed container=test pod=test_eci-xxx(xxx)',
                              ),
                              'Signal' => 
                              array (
                                'description' => '容器状态信号。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                              ),
                              'ExitCode' => 
                              array (
                                'description' => '容器运行退出码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'Reason' => 
                              array (
                                'description' => '容器状态Reason。',
                                'type' => 'string',
                                'example' => 'Started',
                              ),
                            ),
                          ),
                          'Ready' => 
                          array (
                            'description' => '指定容器是否已通过其就绪探针。',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'Gpu' => 
                          array (
                            'description' => 'GPU个数。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'SecurityContext' => 
                          array (
                            'description' => '实例运行的安全上下文。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ReadOnlyRootFilesystem' => 
                              array (
                                'description' => '是否只读根文件系统，目前仅支持True。',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'RunAsUser' => 
                              array (
                                'description' => '运行容器的用户ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1000',
                              ),
                              'Capability' => 
                              array (
                                'description' => '容器内的进程所具备的特定权限。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Adds' => 
                                  array (
                                    'description' => '容器内的进程所具备的特定权限。',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'description' => '容器内的进程所具备的特定权限。',
                                      'type' => 'string',
                                      'example' => '[NET_ADMIN]',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                          'Memory' => 
                          array (
                            'description' => '容器内存大小。单位为GiB。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '2.0',
                          ),
                          'Stdin' => 
                          array (
                            'description' => '此容器是否应在容器运行时为标准输入分配缓冲区。如果未设置，则容器中标准输入的读取值将导致EOF。默认为false。',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'Name' => 
                          array (
                            'description' => '容器名称。',
                            'type' => 'string',
                            'example' => 'nginx',
                          ),
                          'EnvironmentVars' => 
                          array (
                            'description' => '环境变量。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '环境变量。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Key' => 
                                array (
                                  'description' => '环境变量名。
',
                                  'type' => 'string',
                                  'example' => 'PATH',
                                ),
                                'Value' => 
                                array (
                                  'description' => '环境变量值。',
                                  'type' => 'string',
                                  'example' => '/usr/bin/',
                                ),
                                'ValueFrom' => 
                                array (
                                  'description' => '环境变量值的来源。 如果值不为空，则无法使用。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'FieldRef' => 
                                    array (
                                      'description' => '指定字段。',
                                      'type' => 'object',
                                      'properties' => 
                                      array (
                                        'FieldPath' => 
                                        array (
                                          'description' => '字段的路径。',
                                          'type' => 'string',
                                          'example' => 'status.podIP',
                                        ),
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                          'ReadinessProbe' => 
                          array (
                            'description' => '应用业务探针（即就绪探针），用于检查容器是否已经就绪，可以为请求提供服务。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'SuccessThreshold' => 
                              array (
                                'description' => '从上次检查失败后重新认定检查成功的检查次数阈值（必须是连续成功），默认为1。当前必须为1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                              ),
                              'InitialDelaySeconds' => 
                              array (
                                'description' => '检查开始执行的时间，以容器启动完成为起点计算。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                              ),
                              'FailureThreshold' => 
                              array (
                                'description' => '从上次检查成功后认定检查失败的检查次数阈值（必须是连续失败），默认为3。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                              ),
                              'TimeoutSeconds' => 
                              array (
                                'description' => '检查超时的时间，默认为1秒，最小为1秒。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                              ),
                              'TcpSocket' => 
                              array (
                                'description' => '使用TCP Socket方式进行健康检查。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Host' => 
                                  array (
                                    'description' => 'Host。',
                                    'type' => 'string',
                                    'example' => '1.2.3.4',
                                  ),
                                  'Port' => 
                                  array (
                                    'description' => '端口号。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '8888',
                                  ),
                                ),
                              ),
                              'Execs' => 
                              array (
                                'description' => '使用命令行方式进行健康检查时，在容器内执行的命令。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '使用命令行方式进行健康检查时，在容器内执行的命令。',
                                  'type' => 'string',
                                  'example' => '["/bin/sh", "-c", "echo Hello world > /usr/share/message"]',
                                ),
                              ),
                              'HttpGet' => 
                              array (
                                'description' => '使用HTTP请求方式进行健康检查。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Scheme' => 
                                  array (
                                    'description' => 'HTTP／HTTPS。',
                                    'type' => 'string',
                                    'example' => 'HTTP',
                                  ),
                                  'Path' => 
                                  array (
                                    'description' => 'HttpGet检测的路径。',
                                    'type' => 'string',
                                    'example' => '/usr/local',
                                  ),
                                  'Port' => 
                                  array (
                                    'description' => 'HttpGet检测的端口号。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '8080',
                                  ),
                                ),
                              ),
                              'PeriodSeconds' => 
                              array (
                                'description' => '检查执行的周期，默认为10秒，最小为1秒。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'EniInstanceId' => 
                    array (
                      'description' => '弹性网卡ID。',
                      'type' => 'string',
                      'example' => 'eni-bp14rzqi6fd8satm****',
                    ),
                    'InitContainers' => 
                    array (
                      'description' => 'Init容器列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'Init容器列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'VolumeMounts' => 
                          array (
                            'description' => 'Init容器挂载的数据卷信息。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => 'Init容器挂载的数据卷信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'MountPropagation' => 
                                array (
                                  'description' => '数据卷的挂载传播设置。挂载传播允许将Container挂载的卷共享到同一Pod中的其他Container，甚至可以共享到同一节点上的其他Pod。可能值：

- None：该卷不感知任何后续在此卷或其子目录上执行的挂载操作。
- HostToCotainer：该卷将会感知到后续在此卷或其子目录上的挂载操作。
- Bidirectional：和HostToCotainer类似，能感知挂载操作。另外，该卷将被传播回主机和使用同一卷的所有Pod的所有容器。',
                                  'type' => 'string',
                                  'example' => 'None',
                                ),
                                'MountPath' => 
                                array (
                                  'description' => '挂载目录，容器的挂载目录下的内容被Volume的内容直接覆盖。',
                                  'type' => 'string',
                                  'example' => '/usr/share/',
                                ),
                                'ReadOnly' => 
                                array (
                                  'description' => '是否只读。',
                                  'type' => 'boolean',
                                  'example' => 'false',
                                ),
                                'Name' => 
                                array (
                                  'description' => '数据卷名称，同 Volume 中的 Name。',
                                  'type' => 'string',
                                  'example' => 'test-empty',
                                ),
                              ),
                            ),
                          ),
                          'Args' => 
                          array (
                            'description' => '启动参数。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '启动参数。',
                              'type' => 'string',
                              'example' => '[\'hello world\']',
                            ),
                          ),
                          'Image' => 
                          array (
                            'description' => '镜像。',
                            'type' => 'string',
                            'example' => 'nginx',
                          ),
                          'Ports' => 
                          array (
                            'description' => '暴露端口和协议。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '暴露端口和协议。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Protocol' => 
                                array (
                                  'description' => '协议类型。',
                                  'type' => 'string',
                                  'example' => 'TCP',
                                ),
                                'Port' => 
                                array (
                                  'description' => '端口号。可能值：1~65535。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '8888',
                                ),
                              ),
                            ),
                          ),
                          'RestartCount' => 
                          array (
                            'description' => '重启次数。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '5',
                          ),
                          'ImagePullPolicy' => 
                          array (
                            'description' => '镜像拉取策略。可能值：

- Always：总是拉取。每次都拉取镜像。
- IfNotPresent：按需拉取。优先使用本地镜像，本地没有镜像时则拉取镜像。
- Never：从不拉取。使用本地镜像，不拉取镜像。',
                            'type' => 'string',
                            'example' => 'Always',
                          ),
                          'PreviousState' => 
                          array (
                            'description' => '上一次状态。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'StartTime' => 
                              array (
                                'description' => '容器运行开始时间。',
                                'type' => 'string',
                                'example' => '2021-12-02T15:00:00Z',
                              ),
                              'FinishTime' => 
                              array (
                                'description' => '容器运行结束时间。',
                                'type' => 'string',
                                'example' => '2021-12-02T15:01:00Z',
                              ),
                              'DetailStatus' => 
                              array (
                                'description' => '状态详情。',
                                'type' => 'string',
                                'example' => 'working',
                              ),
                              'State' => 
                              array (
                                'description' => '容器状态，枚举值：Waiting，Running，Terminated。',
                                'type' => 'string',
                                'example' => 'Terminated',
                              ),
                              'Message' => 
                              array (
                                'description' => '容器状态信息。',
                                'type' => 'string',
                                'example' => 'Started container',
                              ),
                              'Signal' => 
                              array (
                                'description' => '容器状态信号。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                              ),
                              'ExitCode' => 
                              array (
                                'description' => '容器运行退出码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'Reason' => 
                              array (
                                'description' => '容器状态Reason。',
                                'type' => 'string',
                                'example' => 'completed',
                              ),
                            ),
                          ),
                          'WorkingDir' => 
                          array (
                            'description' => '工作目录。',
                            'type' => 'string',
                            'example' => '/usr/test',
                          ),
                          'Cpu' => 
                          array (
                            'description' => 'vCPU大小。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '1.0',
                          ),
                          'CurrentState' => 
                          array (
                            'description' => '当前状态。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'StartTime' => 
                              array (
                                'description' => '容器运行开始时间。',
                                'type' => 'string',
                                'example' => '2021-12-02T15:00:00Z',
                              ),
                              'FinishTime' => 
                              array (
                                'description' => '容器运行结束时间。',
                                'type' => 'string',
                                'example' => '2021-12-02T15:01:00Z',
                              ),
                              'DetailStatus' => 
                              array (
                                'description' => '状态详情。',
                                'type' => 'string',
                                'example' => 'working',
                              ),
                              'State' => 
                              array (
                                'description' => '容器状态，可能值：

- Waiting
- Running
- Terminated',
                                'type' => 'string',
                                'example' => 'Running',
                              ),
                              'Message' => 
                              array (
                                'description' => '事件消息。',
                                'type' => 'string',
                                'example' => 'Created container',
                              ),
                              'Signal' => 
                              array (
                                'description' => '容器状态信号。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                              ),
                              'ExitCode' => 
                              array (
                                'description' => '容器退出码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'Reason' => 
                              array (
                                'description' => '容器状态Reason。',
                                'type' => 'string',
                                'example' => 'Started',
                              ),
                            ),
                          ),
                          'Command' => 
                          array (
                            'description' => '启动命令。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '启动命令。',
                              'type' => 'string',
                              'example' => '[/bin/sh echo]',
                            ),
                          ),
                          'Ready' => 
                          array (
                            'description' => '指定容器是否已通过其就绪探针。',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'Gpu' => 
                          array (
                            'description' => 'GPU个数。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'SecurityContext' => 
                          array (
                            'description' => '容器运行的安全上下文。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ReadOnlyRootFilesystem' => 
                              array (
                                'description' => '是否只读根文件系统，目前仅支持True。',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'RunAsUser' => 
                              array (
                                'description' => '用于运行容器进程入口点的UID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1557',
                              ),
                              'Capability' => 
                              array (
                                'description' => '容器内的进程所具备的特定权限。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Adds' => 
                                  array (
                                    'description' => '容器内的进程所具备的特定权限。',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'description' => '容器内的进程所具备的特定权限。',
                                      'type' => 'string',
                                      'example' => 'NET_ADMIN',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                          'Memory' => 
                          array (
                            'description' => 'Init容器内存大小。单位为GiB。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '2.0',
                          ),
                          'Name' => 
                          array (
                            'description' => '容器名称。',
                            'type' => 'string',
                            'example' => 'Init-xxx',
                          ),
                          'EnvironmentVars' => 
                          array (
                            'description' => '环境变量。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '环境变量。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Key' => 
                                array (
                                  'description' => '环境变量名。',
                                  'type' => 'string',
                                  'example' => 'PATH',
                                ),
                                'Value' => 
                                array (
                                  'description' => '环境变量值。',
                                  'type' => 'string',
                                  'example' => '/usr/local/bin',
                                ),
                                'ValueFrom' => 
                                array (
                                  'description' => '环境变量值的来源。 如果值不为空，则无法使用。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'FieldRef' => 
                                    array (
                                      'description' => '指定的字段。',
                                      'type' => 'object',
                                      'properties' => 
                                      array (
                                        'FieldPath' => 
                                        array (
                                          'description' => '指定的版本中选择字段的路径。目前只支持 `status.podIP`。',
                                          'type' => 'string',
                                          'example' => 'status.podIP',
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
                    'ContainerGroupId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'eci-bp1jrgfqqy54kg5hc****',
                    ),
                    'TenantEniIp' => 
                    array (
                      'description' => '该参数未开放使用。',
                      'type' => 'string',
                      'example' => '10.10.XX.XX',
                    ),
                    'InstanceType' => 
                    array (
                      'description' => '指定的ECS实例规格。',
                      'type' => 'string',
                      'example' => 'ecs.g5.large',
                    ),
                    'IntranetIp' => 
                    array (
                      'description' => '内网IP。',
                      'type' => 'string',
                      'example' => '172.16.XX.XX',
                    ),
                    'Ipv6Address' => 
                    array (
                      'description' => 'IPv6地址。',
                      'type' => 'string',
                      'example' => '2001:XXXX:4:4:4:4:4:4',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '实例所属的地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'DnsConfig' => 
                    array (
                      'description' => 'DNS配置信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Searches' => 
                        array (
                          'description' => 'DNS搜索域列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'DNS搜索域。',
                            'type' => 'string',
                            'example' => 'svc.local.kubenetes',
                          ),
                        ),
                        'Options' => 
                        array (
                          'description' => '对象选项列表，每个对象由Name和Value（可选）构成。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '对象选项列表，每个对象由Name和Value（可选）构成。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '对象变量值。',
                                'type' => 'string',
                                'example' => 'value',
                              ),
                              'Name' => 
                              array (
                                'description' => '对象变量名。',
                                'type' => 'string',
                                'example' => 'name',
                              ),
                            ),
                          ),
                        ),
                        'NameServers' => 
                        array (
                          'description' => 'DNS服务器IP地址列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'IP地址。',
                            'type' => 'string',
                            'example' => '[10.2.*.*]',
                          ),
                        ),
                      ),
                    ),
                    'Volumes' => 
                    array (
                      'description' => '数据卷信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '数据卷信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Type' => 
                          array (
                            'description' => '数据卷类型，可能值：

- EmptyDirVolume
- NFSVolume
- ConfigFileVolume
- FlexVolume',
                            'type' => 'string',
                            'example' => 'EmptyDirVolume',
                          ),
                          'DiskVolumeDiskId' => 
                          array (
                            'description' => 'DiskVolume的ID。',
                            'type' => 'string',
                            'example' => 'd-xxxx',
                          ),
                          'NFSVolumeReadOnly' => 
                          array (
                            'description' => '是否只读。',
                            'type' => 'boolean',
                            'example' => 'false',
                          ),
                          'ConfigFileVolumeConfigFileToPaths' => 
                          array (
                            'description' => '配置文件路径列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '配置文件路径列表。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Path' => 
                                array (
                                  'description' => '相对文件路径。',
                                  'type' => 'string',
                                  'example' => '/usr/bin/',
                                ),
                                'Content' => 
                                array (
                                  'description' => '配置文件内容 (32KB)。',
                                  'type' => 'string',
                                  'example' => 'hello world',
                                ),
                              ),
                            ),
                          ),
                          'FlexVolumeFsType' => 
                          array (
                            'description' => '挂载的文件系统类型，默认取决于FlexVolume的script。',
                            'type' => 'string',
                            'example' => 'ntfs',
                          ),
                          'FlexVolumeDriver' => 
                          array (
                            'description' => '用于FlexVolume的驱动程序名称。',
                            'type' => 'string',
                            'example' => 'flexvolume',
                          ),
                          'DiskVolumeFsType' => 
                          array (
                            'description' => '数据卷类型。',
                            'type' => 'string',
                            'example' => 'xfs',
                          ),
                          'FlexVolumeOptions' => 
                          array (
                            'description' => 'FlexVolume对象选项列表。',
                            'type' => 'string',
                            'example' => '[nolock,tcp,noresvport]',
                          ),
                          'NFSVolumeServer' => 
                          array (
                            'description' => 'NFS服务器地址。',
                            'type' => 'string',
                            'example' => '0eafxxxxx-xxxxx.cn-hangzhou.nas.aliyuncs.com',
                          ),
                          'NFSVolumePath' => 
                          array (
                            'description' => 'NFS数据卷路径。',
                            'type' => 'string',
                            'example' => '/eci',
                          ),
                          'Name' => 
                          array (
                            'description' => '数据卷名称。',
                            'type' => 'string',
                            'example' => 'test-empty',
                          ),
                          'EmptyDirVolumeMedium' => 
                          array (
                            'description' => 'EmptyDir数据卷的存储媒介。默认为空，表示使用node文件系统。支持配置为以下值：

- Memory：表示使用内存。
- LocalRaid0：表示将本地盘组成RAID 0。该取值仅适用于创建本地盘实例并挂载本地盘的场景。更多信息，请参见[创建本地盘实例](~~114664~~)。',
                            'type' => 'string',
                            'example' => 'Memory',
                          ),
                          'EmptyDirVolumeSizeLimit' => 
                          array (
                            'description' => 'EmptyDir数据卷的大小。',
                            'type' => 'string',
                            'example' => '256Mi',
                          ),
                        ),
                      ),
                    ),
                    'RamRoleName' => 
                    array (
                      'description' => '实例RAM角色名称，ECI与ECS共用实例RAM角色，具体操作，请参见[通过API使用实例RAM角色](~~61178~~)。',
                      'type' => 'string',
                      'example' => 'ram:PassRole',
                    ),
                    'VSwitchId' => 
                    array (
                      'description' => '虚拟交换机ID。
',
                      'type' => 'string',
                      'example' => 'vsw-bp1vzjjflab6wvjox****',
                    ),
                    'Cpu' => 
                    array (
                      'description' => '实例级别vCPU大小。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '2.0',
                    ),
                    'ExpiredTime' => 
                    array (
                      'description' => '由于账户欠费导致实例运行失败的时间。UTC时间，RFC3339标准。
',
                      'type' => 'string',
                      'example' => '2018-08-02T15:00:00Z',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-8db03793gfrz****',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '实例所属的可用区。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-h',
                    ),
                    'ContainerGroupName' => 
                    array (
                      'description' => '实例名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'EciSecurityContext' => 
                    array (
                      'description' => '容器组运行的安全上下文。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Sysctls' => 
                        array (
                          'description' => 'sysctl参数。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'sysctl参数。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => 'sysctl参数值。',
                                'type' => 'string',
                                'example' => '65536',
                              ),
                              'Name' => 
                              array (
                                'description' => 'sysctl参数名。',
                                'type' => 'string',
                                'example' => 'kernel.msgmax',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'FailedTime' => 
                    array (
                      'description' => '实例运行失败的时间。UTC时间，RFC 3339标准。',
                      'type' => 'string',
                      'example' => '2018-08-02T15:00:00Z',
                    ),
                    'ComputeCategory' => 
                    array (
                      'description' => '算力类别。可能值：

- economy：经济型
- general：通用型',
                      'type' => 'string',
                      'example' => 'economy',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"NextToken\\": \\"d78f2dd8-5979-42fe-****-b16db43be5bc\\",\\n  \\"RequestId\\": \\"89945DD3-9072-47D0-A318-353284CFC7B3\\",\\n  \\"ContainerGroups\\": [\\n    {\\n      \\"Status\\": \\"Running\\",\\n      \\"CreationTime\\": \\"2018-08-02T15:00:00Z\\",\\n      \\"VpcId\\": \\"vpc-1vzjjflab6wvjox****\\",\\n      \\"InternetIp\\": \\"192.0.XX.XX\\",\\n      \\"TenantSecurityGroupId\\": \\"sg-xxx\\",\\n      \\"SecurityGroupId\\": \\"sg-bp12ujq5zpxuyjfo3o8r\\",\\n      \\"HostAliases\\": [\\n        {\\n          \\"Hostnames\\": [\\n            \\"[\'hehe.com\', \'haha.com\']\\"\\n          ],\\n          \\"Ip\\": \\"192.0.XX.XX\\"\\n        }\\n      ],\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"name\\",\\n          \\"Value\\": \\"test-xh\\"\\n        }\\n      ],\\n      \\"Events\\": [\\n        {\\n          \\"Type\\": \\"Normal\\",\\n          \\"LastTimestamp\\": \\"2018-08-02T15:00:00Z\\",\\n          \\"Message\\": \\"Started container\\",\\n          \\"Name\\": \\"test-xxx\\",\\n          \\"Reason\\": \\"Created\\",\\n          \\"Count\\": 20,\\n          \\"FirstTimestamp\\": \\"2018-08-02T15:00:00Z\\"\\n        }\\n      ],\\n      \\"SucceededTime\\": \\"2019-12-11T04:33:42Z\\",\\n      \\"SpotStrategy\\": \\"NoSpot\\",\\n      \\"SpotPriceLimit\\": 0.025,\\n      \\"EphemeralStorage\\": 20,\\n      \\"TenantEniInstanceId\\": \\"i-xxx\\",\\n      \\"Discount\\": 9,\\n      \\"RestartPolicy\\": \\"Never\\",\\n      \\"Memory\\": 4,\\n      \\"TenantVSwitchId\\": \\"vsw-xxx\\",\\n      \\"Containers\\": [\\n        {\\n          \\"LivenessProbe\\": {\\n            \\"SuccessThreshold\\": 1,\\n            \\"InitialDelaySeconds\\": 10,\\n            \\"FailureThreshold\\": 3,\\n            \\"TimeoutSeconds\\": 10,\\n            \\"TcpSocket\\": {\\n              \\"Host\\": \\"1.2.3.4\\",\\n              \\"Port\\": 80\\n            },\\n            \\"Execs\\": [\\n              \\"[\\\\\\"/bin/sh\\\\\\", \\\\\\"-c\\\\\\", \\\\\\"echo Hello world > /usr/share/message\\\\\\"]\\"\\n            ],\\n            \\"HttpGet\\": {\\n              \\"Scheme\\": \\"HTTP\\",\\n              \\"Path\\": \\"/usr/nginx/\\",\\n              \\"Port\\": 80\\n            },\\n            \\"PeriodSeconds\\": 5\\n          },\\n          \\"Commands\\": [\\n            \\"[/bin/sh echo]\\"\\n          ],\\n          \\"VolumeMounts\\": [\\n            {\\n              \\"MountPropagation\\": \\"None\\",\\n              \\"MountPath\\": \\"/usr/share/\\",\\n              \\"ReadOnly\\": false,\\n              \\"Name\\": \\"test-empty\\",\\n              \\"SubPath\\": \\"/usr/sub\\"\\n            }\\n          ],\\n          \\"Args\\": [\\n            \\"[\\\\\\"hello\\\\\\"]\\"\\n          ],\\n          \\"Image\\": \\"mysql\\",\\n          \\"Ports\\": [\\n            {\\n              \\"Protocol\\": \\"TCP\\",\\n              \\"Port\\": 8080\\n            }\\n          ],\\n          \\"RestartCount\\": 0,\\n          \\"ImagePullPolicy\\": \\"Always\\",\\n          \\"StdinOnce\\": true,\\n          \\"Cpu\\": 2,\\n          \\"PreviousState\\": {\\n            \\"StartTime\\": \\"2021-12-02T15:00:00Z\\",\\n            \\"FinishTime\\": \\"2021-12-02T15:01:00Z\\",\\n            \\"DetailStatus\\": \\"working\\",\\n            \\"State\\": \\"Terminated\\",\\n            \\"Message\\": \\"Back-off 5m0s restarting failed container=test pod=test_eci-xxx(xxx)\\",\\n            \\"Signal\\": 1,\\n            \\"ExitCode\\": 0,\\n            \\"Reason\\": \\"Completed\\"\\n          },\\n          \\"Tty\\": false,\\n          \\"WorkingDir\\": \\"/usr/local/nginx\\",\\n          \\"CurrentState\\": {\\n            \\"StartTime\\": \\"2021-12-02T15:00:00Z\\",\\n            \\"FinishTime\\": \\"2021-12-02T15:01:00Z\\",\\n            \\"DetailStatus\\": \\"working\\",\\n            \\"State\\": \\"Terminated\\",\\n            \\"Message\\": \\"Back-off 5m0s restarting failed container=test pod=test_eci-xxx(xxx)\\",\\n            \\"Signal\\": 1,\\n            \\"ExitCode\\": 0,\\n            \\"Reason\\": \\"Started\\"\\n          },\\n          \\"Ready\\": true,\\n          \\"Gpu\\": 1,\\n          \\"SecurityContext\\": {\\n            \\"ReadOnlyRootFilesystem\\": true,\\n            \\"RunAsUser\\": 1000,\\n            \\"Capability\\": {\\n              \\"Adds\\": [\\n                \\"[NET_ADMIN]\\"\\n              ]\\n            }\\n          },\\n          \\"Memory\\": 2,\\n          \\"Stdin\\": true,\\n          \\"Name\\": \\"nginx\\",\\n          \\"EnvironmentVars\\": [\\n            {\\n              \\"Key\\": \\"PATH\\",\\n              \\"Value\\": \\"/usr/bin/\\",\\n              \\"ValueFrom\\": {\\n                \\"FieldRef\\": {\\n                  \\"FieldPath\\": \\"status.podIP\\"\\n                }\\n              }\\n            }\\n          ],\\n          \\"ReadinessProbe\\": {\\n            \\"SuccessThreshold\\": 1,\\n            \\"InitialDelaySeconds\\": 5,\\n            \\"FailureThreshold\\": 3,\\n            \\"TimeoutSeconds\\": 1,\\n            \\"TcpSocket\\": {\\n              \\"Host\\": \\"1.2.3.4\\",\\n              \\"Port\\": 8888\\n            },\\n            \\"Execs\\": [\\n              \\"[\\\\\\"/bin/sh\\\\\\", \\\\\\"-c\\\\\\", \\\\\\"echo Hello world > /usr/share/message\\\\\\"]\\"\\n            ],\\n            \\"HttpGet\\": {\\n              \\"Scheme\\": \\"HTTP\\",\\n              \\"Path\\": \\"/usr/local\\",\\n              \\"Port\\": 8080\\n            },\\n            \\"PeriodSeconds\\": 1\\n          }\\n        }\\n      ],\\n      \\"EniInstanceId\\": \\"eni-bp14rzqi6fd8satm****\\",\\n      \\"InitContainers\\": [\\n        {\\n          \\"VolumeMounts\\": [\\n            {\\n              \\"MountPropagation\\": \\"None\\",\\n              \\"MountPath\\": \\"/usr/share/\\",\\n              \\"ReadOnly\\": false,\\n              \\"Name\\": \\"test-empty\\"\\n            }\\n          ],\\n          \\"Args\\": [\\n            \\"[\'hello world\']\\"\\n          ],\\n          \\"Image\\": \\"nginx\\",\\n          \\"Ports\\": [\\n            {\\n              \\"Protocol\\": \\"TCP\\",\\n              \\"Port\\": 8888\\n            }\\n          ],\\n          \\"RestartCount\\": 5,\\n          \\"ImagePullPolicy\\": \\"Always\\",\\n          \\"PreviousState\\": {\\n            \\"StartTime\\": \\"2021-12-02T15:00:00Z\\",\\n            \\"FinishTime\\": \\"2021-12-02T15:01:00Z\\",\\n            \\"DetailStatus\\": \\"working\\",\\n            \\"State\\": \\"Terminated\\",\\n            \\"Message\\": \\"Started container\\",\\n            \\"Signal\\": 1,\\n            \\"ExitCode\\": 0,\\n            \\"Reason\\": \\"completed\\"\\n          },\\n          \\"WorkingDir\\": \\"/usr/test\\",\\n          \\"Cpu\\": 1,\\n          \\"CurrentState\\": {\\n            \\"StartTime\\": \\"2021-12-02T15:00:00Z\\",\\n            \\"FinishTime\\": \\"2021-12-02T15:01:00Z\\",\\n            \\"DetailStatus\\": \\"working\\",\\n            \\"State\\": \\"Running\\",\\n            \\"Message\\": \\"Created container\\",\\n            \\"Signal\\": 1,\\n            \\"ExitCode\\": 0,\\n            \\"Reason\\": \\"Started\\"\\n          },\\n          \\"Command\\": [\\n            \\"[/bin/sh echo]\\"\\n          ],\\n          \\"Ready\\": true,\\n          \\"Gpu\\": 1,\\n          \\"SecurityContext\\": {\\n            \\"ReadOnlyRootFilesystem\\": true,\\n            \\"RunAsUser\\": 1557,\\n            \\"Capability\\": {\\n              \\"Adds\\": [\\n                \\"NET_ADMIN\\"\\n              ]\\n            }\\n          },\\n          \\"Memory\\": 2,\\n          \\"Name\\": \\"Init-xxx\\",\\n          \\"EnvironmentVars\\": [\\n            {\\n              \\"Key\\": \\"PATH\\",\\n              \\"Value\\": \\"/usr/local/bin\\",\\n              \\"ValueFrom\\": {\\n                \\"FieldRef\\": {\\n                  \\"FieldPath\\": \\"status.podIP\\"\\n                }\\n              }\\n            }\\n          ]\\n        }\\n      ],\\n      \\"ContainerGroupId\\": \\"eci-bp1jrgfqqy54kg5hc****\\",\\n      \\"TenantEniIp\\": \\"10.10.XX.XX\\",\\n      \\"InstanceType\\": \\"ecs.g5.large\\",\\n      \\"IntranetIp\\": \\"172.16.XX.XX\\",\\n      \\"Ipv6Address\\": \\"2001:XXXX:4:4:4:4:4:4\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"DnsConfig\\": {\\n        \\"Searches\\": [\\n          \\"svc.local.kubenetes\\"\\n        ],\\n        \\"Options\\": [\\n          {\\n            \\"Value\\": \\"value\\",\\n            \\"Name\\": \\"name\\"\\n          }\\n        ],\\n        \\"NameServers\\": [\\n          \\"[10.2.*.*]\\"\\n        ]\\n      },\\n      \\"Volumes\\": [\\n        {\\n          \\"Type\\": \\"EmptyDirVolume\\",\\n          \\"DiskVolumeDiskId\\": \\"d-xxxx\\",\\n          \\"NFSVolumeReadOnly\\": false,\\n          \\"ConfigFileVolumeConfigFileToPaths\\": [\\n            {\\n              \\"Path\\": \\"/usr/bin/\\",\\n              \\"Content\\": \\"hello world\\"\\n            }\\n          ],\\n          \\"FlexVolumeFsType\\": \\"ntfs\\",\\n          \\"FlexVolumeDriver\\": \\"flexvolume\\",\\n          \\"DiskVolumeFsType\\": \\"xfs\\",\\n          \\"FlexVolumeOptions\\": \\"[nolock,tcp,noresvport]\\",\\n          \\"NFSVolumeServer\\": \\"0eafxxxxx-xxxxx.cn-hangzhou.nas.aliyuncs.com\\",\\n          \\"NFSVolumePath\\": \\"/eci\\",\\n          \\"Name\\": \\"test-empty\\",\\n          \\"EmptyDirVolumeMedium\\": \\"Memory\\",\\n          \\"EmptyDirVolumeSizeLimit\\": \\"256Mi\\"\\n        }\\n      ],\\n      \\"RamRoleName\\": \\"ram:PassRole\\",\\n      \\"VSwitchId\\": \\"vsw-bp1vzjjflab6wvjox****\\",\\n      \\"Cpu\\": 2,\\n      \\"ExpiredTime\\": \\"2018-08-02T15:00:00Z\\",\\n      \\"ResourceGroupId\\": \\"rg-8db03793gfrz****\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n      \\"ContainerGroupName\\": \\"test\\",\\n      \\"EciSecurityContext\\": {\\n        \\"Sysctls\\": [\\n          {\\n            \\"Value\\": \\"65536\\",\\n            \\"Name\\": \\"kernel.msgmax\\"\\n          }\\n        ]\\n      },\\n      \\"FailedTime\\": \\"2018-08-02T15:00:00Z\\",\\n      \\"ComputeCategory\\": \\"economy\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeContainerGroupsResponse>\\n    <TotalCount>1</TotalCount>\\n    <NextToken/>\\n    <RequestId>CAABE95E-ED57-56CC-B361-48566745A3CC</RequestId>\\n    <ContainerGroups>\\n        <Discount>10</Discount>\\n        <Memory>4</Memory>\\n        <Containers>\\n            <EnvironmentVars>\\n                <ValueFrom>\\n                    <FieldRef/>\\n                </ValueFrom>\\n                <Value>/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin</Value>\\n                <Key>PATH</Key>\\n            </EnvironmentVars>\\n            <EnvironmentVars>\\n                <ValueFrom>\\n                    <FieldRef/>\\n                </ValueFrom>\\n                <Value>1.15.10-1~stretch</Value>\\n                <Key>NGINX_VERSION</Key>\\n            </EnvironmentVars>\\n            <EnvironmentVars>\\n                <ValueFrom>\\n                    <FieldRef/>\\n                </ValueFrom>\\n                <Value>1.15.10.0.3.0-1~stretch</Value>\\n                <Key>NJS_VERSION</Key>\\n            </EnvironmentVars>\\n            <ReadinessProbe>\\n                <HttpGet/>\\n                <TcpSocket/>\\n            </ReadinessProbe>\\n            <Memory>0</Memory>\\n            <LivenessProbe>\\n                <HttpGet/>\\n                <TcpSocket/>\\n            </LivenessProbe>\\n            <Cpu>0</Cpu>\\n            <Image>registry-vpc.cn-beijing.aliyuncs.com/eci_open/nginx:latest</Image>\\n            <Gpu>0</Gpu>\\n            <PreviousState>\\n                <FinishTime/>\\n                <State/>\\n                <StartTime/>\\n            </PreviousState>\\n            <Name>container-1</Name>\\n            <RestartCount>0</RestartCount>\\n            <Ready>true</Ready>\\n            <WorkingDir/>\\n            <ImagePullPolicy>IfNotPresent</ImagePullPolicy>\\n            <CurrentState>\\n                <FinishTime/>\\n                <State>Running</State>\\n                <StartTime>2021-09-08T02:49:52Z</StartTime>\\n            </CurrentState>\\n            <SecurityContext>\\n                <Capability/>\\n            </SecurityContext>\\n        </Containers>\\n        <Cpu>2</Cpu>\\n        <EciSecurityContext/>\\n        <FailedTime/>\\n        <IntranetIp>172.16.XX.XX</IntranetIp>\\n        <ContainerGroupName>container-group-1631069337474</ContainerGroupName>\\n        <DnsConfig/>\\n        <InternetIp/>\\n        <ExpiredTime/>\\n        <InstanceType>ecs.c5.large</InstanceType>\\n        <SpotStrategy>SpotAsPriceGo</SpotStrategy>\\n        <Status>Running</Status>\\n        <ZoneId>cn-beijing-g</ZoneId>\\n        <SucceededTime/>\\n        <SecurityGroupId>sg-2ze81zoc3yl7a3we****</SecurityGroupId>\\n        <VSwitchId>vsw-2ze23nqzig8inprou****</VSwitchId>\\n        <RestartPolicy>Always</RestartPolicy>\\n        <VpcId>vpc-2zeghwzptn5zii0w7****</VpcId>\\n        <CreationTime>2021-09-08T02:49:40Z</CreationTime>\\n        <EniInstanceId>eni-2ze80ferll5c3wjk****</EniInstanceId>\\n        <ContainerGroupId>eci-2zeg7owsmm74shw8****</ContainerGroupId>\\n        <RegionId>cn-beijing</RegionId>\\n    </ContainerGroups>\\n</DescribeContainerGroupsResponse>","errorExample":""}]',
      'title' => '批量查询容器组信息',
      'summary' => '调用DescribeContainerGroups批量查询ECI实例的信息。',
      'description' => '- 当ECI实例运行终止后，底层计算资源将会被回收。随实例一起创建的其它资源（例如EIP等）默认随实例一起释放。
- 终态（处于Failed、Succeeded或Expired状态）实例的元数据信息的保留情况如下：
    - 1小时内的实例信息全部保留。
    - 超出1小时的实例仅保留最近的100条（单个地域分别计算）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeContainerGroupStatus' => 
    array (
      'summary' => '调用DescribeContainerGroupStatus批量查询ECI实例的状态。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-k',
          ),
        ),
        2 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-uf6h3rbwbm90urjwa****',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-uf66jeqopgqa9hdn****',
          ),
        ),
        4 => 
        array (
          'name' => 'ContainerGroupIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECI实例ID序列。最多20个，字符串需按照JSON格式传入。',
            'type' => 'string',
            'required' => false,
            'example' => '["eci-bp17gw49eu09yiwm****", "eci-bp19aq49du01abcm****", "eci-2zegym1qhbmdfr1s****"]',
          ),
        ),
        5 => 
        array (
          'name' => 'SinceSecond',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回最近几秒内有状态更新的ECI实例状态，用于轮询查询状态。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '3600',
            'minimum' => '60',
            'example' => '60',
          ),
        ),
        6 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ECI实例绑定的标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ECI实例绑定的标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Value' => 
                array (
                  'description' => 'ECI实例的标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testValue',
                ),
                'Key' => 
                array (
                  'description' => 'ECI实例的标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testKey',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        7 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token，NextToken为空表示没有下一个。    
首次查询时无需设置该参数，后续查询的Token从返回结果中获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'd78f2dd8-5979-42fe-xaee-b16db43be5bc',
          ),
        ),
        8 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限定此次返回资源（ECI实例）的数量。默认为200个。

> 返回结果可能小于指定的数量，但不会多于指定的数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '1',
            'example' => '200',
            'default' => '50',
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
                'example' => '1340C38D-6189-54D1-86F6-7D5ECF3E0088',
              ),
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'd78f2dd8-5979-42fe-****-b16db43be5bc',
              ),
              'TotalCount' => 
              array (
                'description' => '结果条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Data' => 
              array (
                'description' => 'ECI实例状态信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'ECI实例状态信息集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ContainerGroupId' => 
                    array (
                      'description' => 'ECI实例ID。',
                      'type' => 'string',
                      'example' => 'eci-bp1jrgfqqy54kg5hc****',
                    ),
                    'Name' => 
                    array (
                      'description' => 'ECI实例名称。',
                      'type' => 'string',
                      'example' => 'nginx',
                    ),
                    'Namespace' => 
                    array (
                      'description' => 'ECI实例所在命名空间。',
                      'type' => 'string',
                      'example' => 'default',
                    ),
                    'Status' => 
                    array (
                      'description' => 'ECI实例状态。',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'uuid' => 
                    array (
                      'description' => 'ECI实例UUID，对应K8s的POD UID。',
                      'type' => 'string',
                      'example' => '78ee0657-987g-b8b2-1f507dic4****',
                    ),
                    'Annotations' => 
                    array (
                      'description' => 'ECI实例的注解。',
                      'type' => 'string',
                      'example' => '"{\\"tenancy.x-k8s.io/namespace\\":\\"redis\\"}"',
                    ),
                    'PodStatus' => 
                    array (
                      'description' => 'ECI实例的状态信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Conditions' => 
                        array (
                          'description' => 'Pod conditions信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'Pod conditions信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'type' => 
                              array (
                                'description' => 'condition类型。可能值：

- PodReadyToStartContainers
- Initialized
- Ready
- ContainersReady
- PodScheduled
- ContainerHasSufficientDisk
- ContainerInstanceCreated
- Unschedulable',
                                'type' => 'string',
                                'example' => 'Ready',
                              ),
                              'status' => 
                              array (
                                'description' => 'condition状态。',
                                'type' => 'string',
                                'example' => 'True',
                              ),
                              'Reason' => 
                              array (
                                'description' => '事件原因。',
                                'type' => 'string',
                                'example' => 'Completed',
                              ),
                              'Message' => 
                              array (
                                'description' => '事件消息。',
                                'type' => 'string',
                                'example' => 'Completed',
                              ),
                              'lastTransitionTime' => 
                              array (
                                'description' => '最后一次状态变化时间。',
                                'type' => 'string',
                                'example' => '2021-05-12T07:02:47Z',
                              ),
                            ),
                          ),
                        ),
                        'ContainerStatuses' => 
                        array (
                          'description' => '容器状态信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '容器状态信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Image' => 
                              array (
                                'description' => '容器镜像。',
                                'type' => 'string',
                                'example' => 'registry-vpc.cn-zhangjiakou.aliyuncs.com/eci_open/ubuntu:18.04',
                              ),
                              'ImageID' => 
                              array (
                                'description' => '镜像ID。',
                                'type' => 'string',
                                'example' => 'registry-vpc.cn-zhangjiakou.aliyuncs.com/eci_open/ubuntu@sha256:134c7fe821b9d359490cd009ce7ca322453f4f2d018623f849e580a89a685e5d',
                              ),
                              'Name' => 
                              array (
                                'description' => '容器名称。',
                                'type' => 'string',
                                'example' => 'ubuntu',
                              ),
                              'Ready' => 
                              array (
                                'description' => '容器是否Ready。',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'RestartCount' => 
                              array (
                                'description' => '重启次数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                              ),
                              'Started' => 
                              array (
                                'description' => '容器是否启动。',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'State' => 
                              array (
                                'description' => '容器状态。包括：

- Waiting
- Running
- Terminated',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Waiting' => 
                                  array (
                                    'description' => '容器正在等待创建，还未开始运行。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Reason' => 
                                      array (
                                        'description' => '事件原因。',
                                        'type' => 'string',
                                        'example' => 'Started',
                                      ),
                                      'Message' => 
                                      array (
                                        'description' => '事件消息。',
                                        'type' => 'string',
                                        'example' => 'Back-off',
                                      ),
                                    ),
                                  ),
                                  'Running' => 
                                  array (
                                    'description' => '容器已经成功创建，并且正在运行。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'StartedAtstartedAt' => 
                                      array (
                                        'description' => '开始时间。',
                                        'type' => 'string',
                                        'example' => '2021-05-23T20:49:31Z',
                                      ),
                                    ),
                                  ),
                                  'Terminated' => 
                                  array (
                                    'description' => '容器运行终止并退出，包括运行成功终止和运行失败终止。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'ContainerID' => 
                                      array (
                                        'description' => '容器ID。',
                                        'type' => 'string',
                                        'example' => 'containerd://3ff993933bea366c4719e43a1b067d89bc7f01f1f573981659a44ff17a******',
                                      ),
                                      'ExitCode' => 
                                      array (
                                        'description' => '退出码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                      ),
                                      'FinishedAt' => 
                                      array (
                                        'description' => '结束时间。',
                                        'type' => 'string',
                                        'example' => '2021-05-23T20:55:31Z',
                                      ),
                                      'StartedAt' => 
                                      array (
                                        'description' => '开始时间。',
                                        'type' => 'string',
                                        'example' => '2021-05-23T20:49:31Z',
                                      ),
                                      'Signal' => 
                                      array (
                                        'description' => '信号码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                      ),
                                      'Reason' => 
                                      array (
                                        'description' => '事件原因。',
                                        'type' => 'string',
                                        'example' => 'Completed',
                                      ),
                                      'Message' => 
                                      array (
                                        'description' => '事件消息。',
                                        'type' => 'string',
                                        'example' => 'Completed',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                              'LastState' => 
                              array (
                                'description' => '容器上一次状态。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Waiting' => 
                                  array (
                                    'description' => '容器正在等待创建，还未开始运行。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Reason' => 
                                      array (
                                        'description' => '事件原因。',
                                        'type' => 'string',
                                        'example' => 'Started',
                                      ),
                                      'Message' => 
                                      array (
                                        'description' => '事件消息。',
                                        'type' => 'string',
                                        'example' => 'Back-off',
                                      ),
                                    ),
                                  ),
                                  'Running' => 
                                  array (
                                    'description' => '容器已经成功创建，并且正在运行。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'StartedAtstartedAt' => 
                                      array (
                                        'description' => '开始时间。',
                                        'type' => 'string',
                                        'example' => '2021-05-23T20:49:31Z',
                                      ),
                                    ),
                                  ),
                                  'Terminated' => 
                                  array (
                                    'description' => '容器运行终止并退出，包括运行成功终止和运行失败终止。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'ContainerID' => 
                                      array (
                                        'description' => '容器ID。',
                                        'type' => 'string',
                                        'example' => 'containerd://3ff993933bea366c4719e43a1b067d89bc7f01f1f573981659a44ff17a******',
                                      ),
                                      'ExitCode' => 
                                      array (
                                        'description' => '退出码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                      ),
                                      'FinishedAt' => 
                                      array (
                                        'description' => '结束时间。',
                                        'type' => 'string',
                                        'example' => '2021-05-23T20:49:31Z',
                                      ),
                                      'StartedAt' => 
                                      array (
                                        'description' => '开始时间。',
                                        'type' => 'string',
                                        'example' => '2021-05-12T07:02:52Z',
                                      ),
                                      'Signal' => 
                                      array (
                                        'description' => '信号码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                      ),
                                      'Reason' => 
                                      array (
                                        'description' => '事件原因。',
                                        'type' => 'string',
                                        'example' => 'Completed',
                                      ),
                                      'Message' => 
                                      array (
                                        'description' => '事件消息。',
                                        'type' => 'string',
                                        'example' => 'Completed',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'HostIp' => 
                        array (
                          'description' => '主机IP。',
                          'type' => 'string',
                          'example' => '192.168.XX.XX',
                        ),
                        'Phase' => 
                        array (
                          'description' => 'Pod生命周期阶段。',
                          'type' => 'string',
                          'example' => 'Running',
                        ),
                        'PodIp' => 
                        array (
                          'description' => 'Pod IP地址。',
                          'type' => 'string',
                          'example' => '192.168.XX.XX',
                        ),
                        'PodIps' => 
                        array (
                          'description' => 'Pod IP地址集合。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'Pod IP地址集合。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Ip' => 
                              array (
                                'description' => 'Pod IP地址。',
                                'type' => 'string',
                                'example' => '192.168.XX.XX',
                              ),
                            ),
                          ),
                        ),
                        'QosClass' => 
                        array (
                          'description' => 'Pod Qos。',
                          'type' => 'string',
                          'example' => 'Guaranteed',
                        ),
                        'StartTime' => 
                        array (
                          'description' => '容器开始运行时间。',
                          'type' => 'string',
                          'example' => '2021-05-12T07:02:47Z',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1340C38D-6189-54D1-86F6-7D5ECF3E0088\\",\\n  \\"NextToken\\": \\"d78f2dd8-5979-42fe-****-b16db43be5bc\\",\\n  \\"TotalCount\\": 1,\\n  \\"Data\\": [\\n    {\\n      \\"ContainerGroupId\\": \\"eci-bp1jrgfqqy54kg5hc****\\",\\n      \\"Name\\": \\"nginx\\",\\n      \\"Namespace\\": \\"default\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"uuid\\": \\"78ee0657-987g-b8b2-1f507dic4****\\",\\n      \\"Annotations\\": \\"\\\\\\"{\\\\\\\\\\\\\\"tenancy.x-k8s.io/namespace\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"redis\\\\\\\\\\\\\\"}\\\\\\"\\",\\n      \\"PodStatus\\": {\\n        \\"Conditions\\": [\\n          {\\n            \\"type\\": \\"Ready\\",\\n            \\"status\\": \\"True\\",\\n            \\"Reason\\": \\"Completed\\",\\n            \\"Message\\": \\"Completed\\",\\n            \\"lastTransitionTime\\": \\"2021-05-12T07:02:47Z\\"\\n          }\\n        ],\\n        \\"ContainerStatuses\\": [\\n          {\\n            \\"Image\\": \\"registry-vpc.cn-zhangjiakou.aliyuncs.com/eci_open/ubuntu:18.04\\",\\n            \\"ImageID\\": \\"registry-vpc.cn-zhangjiakou.aliyuncs.com/eci_open/ubuntu@sha256:134c7fe821b9d359490cd009ce7ca322453f4f2d018623f849e580a89a685e5d\\",\\n            \\"Name\\": \\"ubuntu\\",\\n            \\"Ready\\": true,\\n            \\"RestartCount\\": 1,\\n            \\"Started\\": true,\\n            \\"State\\": {\\n              \\"Waiting\\": {\\n                \\"Reason\\": \\"Started\\",\\n                \\"Message\\": \\"Back-off\\"\\n              },\\n              \\"Running\\": {\\n                \\"StartedAtstartedAt\\": \\"2021-05-23T20:49:31Z\\"\\n              },\\n              \\"Terminated\\": {\\n                \\"ContainerID\\": \\"containerd://3ff993933bea366c4719e43a1b067d89bc7f01f1f573981659a44ff17a******\\",\\n                \\"ExitCode\\": 0,\\n                \\"FinishedAt\\": \\"2021-05-23T20:55:31Z\\",\\n                \\"StartedAt\\": \\"2021-05-23T20:49:31Z\\",\\n                \\"Signal\\": 1,\\n                \\"Reason\\": \\"Completed\\",\\n                \\"Message\\": \\"Completed\\"\\n              }\\n            },\\n            \\"LastState\\": {\\n              \\"Waiting\\": {\\n                \\"Reason\\": \\"Started\\",\\n                \\"Message\\": \\"Back-off\\"\\n              },\\n              \\"Running\\": {\\n                \\"StartedAtstartedAt\\": \\"2021-05-23T20:49:31Z\\"\\n              },\\n              \\"Terminated\\": {\\n                \\"ContainerID\\": \\"containerd://3ff993933bea366c4719e43a1b067d89bc7f01f1f573981659a44ff17a******\\",\\n                \\"ExitCode\\": 0,\\n                \\"FinishedAt\\": \\"2021-05-23T20:49:31Z\\",\\n                \\"StartedAt\\": \\"2021-05-12T07:02:52Z\\",\\n                \\"Signal\\": 1,\\n                \\"Reason\\": \\"Completed\\",\\n                \\"Message\\": \\"Completed\\"\\n              }\\n            }\\n          }\\n        ],\\n        \\"HostIp\\": \\"192.168.XX.XX\\",\\n        \\"Phase\\": \\"Running\\",\\n        \\"PodIp\\": \\"192.168.XX.XX\\",\\n        \\"PodIps\\": [\\n          {\\n            \\"Ip\\": \\"192.168.XX.XX\\"\\n          }\\n        ],\\n        \\"QosClass\\": \\"Guaranteed\\",\\n        \\"StartTime\\": \\"2021-05-12T07:02:47Z\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeContainerGroupStatusResponse>\\n    <RequestId>1340C38D-6189-54D1-86F6-7D5ECF3E0088</RequestId>\\n    <NextToken>d78f2dd8-5979-42fe-****-b16db43be5bc</NextToken>\\n    <TotalCount>1</TotalCount>\\n    <Data>\\n        <ContainerGroupId>eci-bp1jrgfqqy54kg5hc****</ContainerGroupId>\\n        <Name>nginx</Name>\\n        <Namespace>default</Namespace>\\n        <Status>Running</Status>\\n        <uuid>78ee0657-987g-b8b2-1f507dic4****</uuid>\\n        <PodStatus>\\n            <Conditions>\\n                <type>Ready</type>\\n                <status>True</status>\\n                <Reason>Completed</Reason>\\n                <Message>Completed</Message>\\n                <lastTransitionTime>2021-05-12T07:02:47Z</lastTransitionTime>\\n            </Conditions>\\n            <ContainerStatuses>\\n                <Image>registry-vpc.cn-zhangjiakou.aliyuncs.com/eci_open/ubuntu:18.04</Image>\\n                <ImageID>registry-vpc.cn-zhangjiakou.aliyuncs.com/eci_open/ubuntu@sha256:134c7fe821b9d359490cd009ce7ca322453f4f2d018623f849e580a89a685e5d</ImageID>\\n                <Name>ubuntu</Name>\\n                <Ready>true</Ready>\\n                <RestartCount>1</RestartCount>\\n                <Started>true</Started>\\n                <State>\\n                    <Waiting>\\n                        <Reason>Started</Reason>\\n                        <Message>Back-off</Message>\\n                    </Waiting>\\n                    <Running>\\n                        <StartedAtstartedAt>2021-05-23T20:49:31Z</StartedAtstartedAt>\\n                    </Running>\\n                    <Terminated>\\n                        <ContainerID>containerd://3ff993933bea366c4719e43a1b067d89bc7f01f1f573981659a44ff17a******</ContainerID>\\n                        <ExitCode>0</ExitCode>\\n                        <FinishedAt>2021-05-23T20:55:31Z</FinishedAt>\\n                        <StartedAt>2021-05-23T20:49:31Z</StartedAt>\\n                        <Signal>1</Signal>\\n                        <Reason>Completed</Reason>\\n                        <Message>Completed</Message>\\n                    </Terminated>\\n                </State>\\n                <LastState>\\n                    <Waiting>\\n                        <Reason>Started</Reason>\\n                        <Message>Back-off</Message>\\n                    </Waiting>\\n                    <Running>\\n                        <StartedAtstartedAt>2021-05-23T20:49:31Z</StartedAtstartedAt>\\n                    </Running>\\n                    <Terminated>\\n                        <ContainerID>containerd://3ff993933bea366c4719e43a1b067d89bc7f01f1f573981659a44ff17a******</ContainerID>\\n                        <ExitCode>0</ExitCode>\\n                        <FinishedAt>2021-05-23T20:49:31Z</FinishedAt>\\n                        <StartedAt>021-05-12T07:02:52Z</StartedAt>\\n                        <Signal>1</Signal>\\n                        <Reason>Completed</Reason>\\n                        <Message>Completed</Message>\\n                    </Terminated>\\n                </LastState>\\n            </ContainerStatuses>\\n            <HostIp>192.168.XX.XX</HostIp>\\n            <Phase>Running</Phase>\\n            <PodIp>192.168.XX.XX</PodIp>\\n            <PodIps>\\n                <Ip>192.168.XX.XX</Ip>\\n            </PodIps>\\n            <QosClass>Guaranteed</QosClass>\\n            <StartTime>2021-05-12T07:02:47Z</StartTime>\\n        </PodStatus>\\n    </Data>\\n</DescribeContainerGroupStatusResponse>","errorExample":""}]',
      'title' => '批量查询容器组状态',
    ),
    'DescribeContainerGroupEvents' => 
    array (
      'summary' => '调用DescribeContainerGroupEvents批量查询ECI实例的事件信息。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-k',
          ),
        ),
        2 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-uf6h3rbwbm90urjwa****',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-uf66jeqopgqa9hdn****',
          ),
        ),
        4 => 
        array (
          'name' => 'ContainerGroupIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECI实例ID序列。最多20个，字符串需按照JSON格式传入。',
            'type' => 'string',
            'required' => false,
            'example' => '["eci-bp17gw49eu09yiwm****", "eci-bp19aq49du01abcm****", "eci-2zegym1qhbmdfr1s****"]',
          ),
        ),
        5 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ECI实例绑定的标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ECI实例绑定的标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Value' => 
                array (
                  'description' => 'ECI实例的标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'name',
                ),
                'Key' => 
                array (
                  'description' => 'ECI实例的标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        6 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token，NextToken为空表示没有下一个。

首次查询时无需设置该参数，后续查询的Token从返回结果中获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'd78f2dd8-5979-42fe-xaee-b16db43be5bc',
          ),
        ),
        7 => 
        array (
          'name' => 'EventSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件源。取值范围：

- EciService
- K8sAgent

默认为空，查询所有事件。',
            'type' => 'string',
            'required' => false,
            'example' => 'K8sAgent',
            'enum' => 
            array (
              0 => 'EciService',
              1 => 'K8sAgent',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'SinceSecond',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回最近几秒内新增的事件，用于轮询增量事件。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '3600',
            'minimum' => '60',
            'example' => '60',
          ),
        ),
        9 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限定此次返回资源（ECI实例）的数量。默认为200个。

> 返回结果可能小于指定的数量，但不会多于指定的数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '1',
            'example' => '200',
            'default' => '50',
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
                'example' => '1340C38D-6189-54D1-86F6-7D5ECF3E0088',
              ),
              'TotalCount' => 
              array (
                'description' => '返回的事件条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Data' => 
              array (
                'description' => '事件信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '事件信息列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ContainerGroupId' => 
                    array (
                      'description' => 'ECI实例ID。',
                      'type' => 'string',
                      'example' => 'eci-uf6fonnghi50v6nq****',
                    ),
                    'Name' => 
                    array (
                      'description' => 'ECI实例名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Namespace' => 
                    array (
                      'description' => 'ECI实例所在命名空间。',
                      'type' => 'string',
                      'example' => 'redis',
                    ),
                    'uuid' => 
                    array (
                      'description' => 'ECI实例的UUID。',
                      'type' => 'string',
                      'example' => '3fc6b309-****-****',
                    ),
                    'Annotations' => 
                    array (
                      'description' => 'ECI实例的注解。',
                      'type' => 'string',
                      'example' => '"{\\"tenancy.x-k8s.io/namespace\\":\\"redis\\"}"',
                    ),
                    'Events' => 
                    array (
                      'description' => '事件列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '事件列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Type' => 
                          array (
                            'description' => '事件类型。可能值：

- Normal
- Warning',
                            'type' => 'string',
                            'example' => 'Normal',
                          ),
                          'Count' => 
                          array (
                            'description' => '事件数量。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '10',
                          ),
                          'FirstTimestamp' => 
                          array (
                            'description' => '事件第一次出现的时间。',
                            'type' => 'string',
                            'example' => '2021-10-04T09:08:04Z',
                          ),
                          'LastTimestamp' => 
                          array (
                            'description' => '事件最后一次出现的时间。',
                            'type' => 'string',
                            'example' => '2021-10-04T09:08:04Z',
                          ),
                          'Message' => 
                          array (
                            'description' => '事件信息。',
                            'type' => 'string',
                            'example' => 'Started container',
                          ),
                          'Reason' => 
                          array (
                            'description' => '事件原因。',
                            'type' => 'string',
                            'example' => 'Started',
                          ),
                          'ReportingComponent' => 
                          array (
                            'description' => '上报事件的组件。',
                            'type' => 'string',
                            'example' => 'test',
                          ),
                          'ReportingInstance' => 
                          array (
                            'description' => '上报事件的实例。',
                            'type' => 'string',
                            'example' => 'test',
                          ),
                          'Source' => 
                          array (
                            'description' => '来源。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Component' => 
                              array (
                                'description' => '组件。',
                                'type' => 'string',
                                'example' => 'kubelet',
                              ),
                              'Host' => 
                              array (
                                'description' => '主机类型。',
                                'type' => 'string',
                                'example' => 'eci',
                              ),
                            ),
                          ),
                          'involvedObject' => 
                          array (
                            'description' => '事件关联的资源对象。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Kind' => 
                              array (
                                'description' => '资源类型。',
                                'type' => 'string',
                                'example' => 'Pod',
                              ),
                              'Name' => 
                              array (
                                'description' => '资源名称。',
                                'type' => 'string',
                                'example' => 'test',
                              ),
                              'Namespace' => 
                              array (
                                'description' => '资源所在命名空间。',
                                'type' => 'string',
                                'example' => 'default',
                              ),
                              'Uid' => 
                              array (
                                'description' => '资源ID。',
                                'type' => 'string',
                                'example' => 'eci-8vb5nkcq3a5cu0p3****',
                              ),
                              'ApiVersion' => 
                              array (
                                'description' => 'K8s版本。',
                                'type' => 'string',
                                'example' => 'v1',
                              ),
                            ),
                          ),
                          'Metadata' => 
                          array (
                            'description' => '事件元数据。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Name' => 
                              array (
                                'description' => '事件名称。',
                                'type' => 'string',
                                'example' => 'eci-uto-created-eci-for-ubuntu.167e3fb73cc7f9cb',
                              ),
                              'Namespace' => 
                              array (
                                'description' => '命名空间。',
                                'type' => 'string',
                                'example' => 'default',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1340C38D-6189-54D1-86F6-7D5ECF3E0088\\",\\n  \\"TotalCount\\": 10,\\n  \\"Data\\": [\\n    {\\n      \\"ContainerGroupId\\": \\"eci-uf6fonnghi50v6nq****\\",\\n      \\"Name\\": \\"test\\",\\n      \\"Namespace\\": \\"redis\\",\\n      \\"uuid\\": \\"3fc6b309-****-****\\",\\n      \\"Annotations\\": \\"\\\\\\"{\\\\\\\\\\\\\\"tenancy.x-k8s.io/namespace\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"redis\\\\\\\\\\\\\\"}\\\\\\"\\",\\n      \\"Events\\": [\\n        {\\n          \\"Type\\": \\"Normal\\",\\n          \\"Count\\": 10,\\n          \\"FirstTimestamp\\": \\"2021-10-04T09:08:04Z\\",\\n          \\"LastTimestamp\\": \\"2021-10-04T09:08:04Z\\",\\n          \\"Message\\": \\"Started container\\",\\n          \\"Reason\\": \\"Started\\",\\n          \\"ReportingComponent\\": \\"test\\",\\n          \\"ReportingInstance\\": \\"test\\",\\n          \\"Source\\": {\\n            \\"Component\\": \\"kubelet\\",\\n            \\"Host\\": \\"eci\\"\\n          },\\n          \\"involvedObject\\": {\\n            \\"Kind\\": \\"Pod\\",\\n            \\"Name\\": \\"test\\",\\n            \\"Namespace\\": \\"default\\",\\n            \\"Uid\\": \\"eci-8vb5nkcq3a5cu0p3****\\",\\n            \\"ApiVersion\\": \\"v1\\"\\n          },\\n          \\"Metadata\\": {\\n            \\"Name\\": \\"eci-uto-created-eci-for-ubuntu.167e3fb73cc7f9cb\\",\\n            \\"Namespace\\": \\"default\\"\\n          }\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeContainerGroupEventsResponse>\\n    <RequestId>1340C38D-6189-54D1-86F6-7D5ECF3E0088</RequestId>\\n    <TotalCount>10</TotalCount>\\n    <Data>\\n        <ContainerGroupId>eci-uf6fonnghi50v6nq****</ContainerGroupId>\\n        <Events>\\n            <Type>Normal</Type>\\n            <Count>10</Count>\\n            <FirstTimestamp>2021-10-04T09:08:04Z</FirstTimestamp>\\n            <LastTimestamp>2021-10-04T09:08:04Z</LastTimestamp>\\n            <Message>Started container</Message>\\n            <Reason>Started</Reason>\\n            <ReportingComponent>test</ReportingComponent>\\n            <ReportingInstance>test</ReportingInstance>\\n            <Source>\\n                <Component>kubelet</Component>\\n                <Host>eci</Host>\\n            </Source>\\n            <involvedObject>\\n                <Kind>Pod</Kind>\\n                <Name>test</Name>\\n                <Namespace>default</Namespace>\\n                <Uid>eci-8vb5nkcq3a5cu0p3****</Uid>\\n                <ApiVersion>v1</ApiVersion>\\n            </involvedObject>\\n            <Metadata>\\n                <Name>eci-uto-created-eci-for-ubuntu.167e3fb73cc7f9cb</Name>\\n                <Namespace>default</Namespace>\\n            </Metadata>\\n        </Events>\\n    </Data>\\n</DescribeContainerGroupEventsResponse>","errorExample":""}]',
      'title' => '查询容器组事件列表',
      'description' => '调用本接口可以同时查询多个ECI实例的事件信息。默认返回每个ECI实例最新的50条事件信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResizeContainerGroupVolume' => 
    array (
      'summary' => '扩容指定ECI实例的数据卷。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ContainerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要扩容数据卷的ECI实例ID，即容器组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eci-2zelg8vwnlzdhf8hv****',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等参数',
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        4 => 
        array (
          'name' => 'VolumeName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECI实例关联的数据卷名称。目前仅支持扩容阿里云云盘。',
            'type' => 'string',
            'required' => true,
            'example' => 'default-volume1',
          ),
        ),
        5 => 
        array (
          'name' => 'NewSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '扩容后的云盘容量大小。单位为GiB。取值范围：

- 高效云盘（cloud_efficiency）：20~32768
- SSD云盘（cloud_ssd）：20~32768
- ESSD云盘（cloud_essd）：20~32768
- 普通云盘（cloud）：5~2000

> 扩容后的云盘容量必须大于原有云盘容量。如果扩容指定的容量与原有云盘容量一致，则仅扩容文件系统。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '100',
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
                'example' => '89945DD3-9072-47D0-A318-353284CFC7B3',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => '%s',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidVolumeType',
            'errorMessage' => 'The specified volumeName is invalid, only volume of cloud disk support capacity resize',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatusDetail',
            'errorMessage' => '%s',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAction',
            'errorMessage' => 'The specified action is invalid	',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"89945DD3-9072-47D0-A318-353284CFC7B3\\"\\n}","errorExample":""},{"type":"xml","example":"<ResizeContainerGroupVolumeResponse>\\r\\n    <RequestId>89945DD3-9072-47D0-A318-353284CFC7B3</RequestId>\\r\\n</ResizeContainerGroupVolumeResponse>","errorExample":""}]',
      'title' => '扩容容器组的数据卷',
      'description' => '##  接口说明

该接口仅支持扩容数据卷，不支持缩容数据卷。目前仅支持扩容阿里云云盘类型的数据卷，暂不支持扩容其它类型的数据卷。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RestartContainerGroup' => 
    array (
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ContainerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECI实例ID，即容器组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eci-2zelg8vwnlzdhf8hv****',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
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
                'description' => '请求ID，唯一标识。',
                'type' => 'string',
                'example' => '45D5B0AD-3B00-4A9B-9911-6D5303B06712',
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
            'errorCode' => 'IncorrectStatus',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => '%s',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAction',
            'errorMessage' => 'The specified action is invalid',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"45D5B0AD-3B00-4A9B-9911-6D5303B06712\\"\\n}","errorExample":""},{"type":"xml","example":"<RestartContainerGroupResponse>\\r\\n    <RequestId>45D5B0AD-3B00-4A9B-9911-6D5303B06712</RequestId>\\r\\n<RestartContainerGroupResponse>","errorExample":""}]',
      'title' => '重启一个容器组',
      'summary' => '调用RestartContainerGroup重启一个ECI实例。',
      'description' => '- 仅状态为启动中（Pending）或者运行中（Running）的ECI实例支持重启，已经运行完成的ECI实例不支持重启。
- 创建时间早于2019-03-07 15:00:00的ECI实例不支持重启。
- 重启中的ECI实例状态将变更为Restarting。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteContainerGroup' => 
    array (
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ContainerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECI实例ID，即容器组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eci-2zelg8vwnlzdhf8hv****',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
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
                'description' => '请求ID，唯一标识。',
                'type' => 'string',
                'example' => '45D5B0AD-3B00-4A9B-9911-6D5303B06712',
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
            'errorCode' => 'IncorrectStatus',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'OperationConflict',
            'errorMessage' => 'Request was denied due to conflict with a previous request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"45D5B0AD-3B00-4A9B-9911-6D5303B06712\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteContainerGroupResponse>\\r\\n    <RequestId>45D5B0AD-3B00-4A9B-9911-6D5303B06712</RequestId>\\r\\n</DeleteContainerGroupResponse>","errorExample":""}]',
      'title' => '删除一个容器组',
      'summary' => '调用DeleteContainerGroup删除一个ECI实例。',
      'description' => '您可以删除不再使用的ECI实例。操作前，请确保您已了解ECI实例的生命周期。具体请参见[ECI实例生命周期介绍](~~122385~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ExecContainerCommand' => 
    array (
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ContainerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，即容器组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eci-2zebxkiifulhl****',
          ),
        ),
        3 => 
        array (
          'name' => 'ContainerName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '容器名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'nginx',
          ),
        ),
        4 => 
        array (
          'name' => 'Command',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要在容器内执行的命令序列。最多20个命令，单个命令最长256个字符。    
执行多个命令时，字符串需按照JSON格式传入，例如：`["/bin/sh", "-c", "ls -a"]`。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '["/bin/sh", "-c", "ls -a"]',
          ),
        ),
        5 => 
        array (
          'name' => 'TTY',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启交互。默认为false。    
当Command为`/bin/bash`命令时，需要设置为true。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'Stdin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否标准输入。默认为true。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'Sync',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否立即执行命令并同步返回结果。默认为false。    
如果设置为true，TTY只能设置为false（即Command不是`/bin/bash`命令）。',
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
                'description' => '请求ID，唯一标识。',
                'type' => 'string',
                'example' => '28B583A8-313D-4383-7817-B5A9F7E0****',
              ),
              'WebSocketUri' => 
              array (
                'description' => 'WebSocket URL。您可以利用WebSocket URL建立与容器的连接。',
                'type' => 'string',
                'example' => 'wss://eci-cn-shanghai.aliyun.com/exec/?s=ktHPx****',
              ),
              'HttpUrl' => 
              array (
                'description' => 'HTTP URL。在30秒内访问该地址可以进入到容器。更多信息，请参见[使用并集成ECI Terminal](~~202846~~)。',
                'type' => 'string',
                'example' => 'https://eci.console.aliyun.com/terminal?param=X32a****',
              ),
              'SyncResponse' => 
              array (
                'description' => '命令的返回结果。当Sync设置为true时返回该参数。',
                'type' => 'string',
                'example' => 'Hello',
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
            'errorCode' => 'InvalidParameter.ValueExceeded',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"28B583A8-313D-4383-7817-B5A9F7E0****\\",\\n  \\"WebSocketUri\\": \\"wss://eci-cn-shanghai.aliyun.com/exec/?s=ktHPx****\\",\\n  \\"HttpUrl\\": \\"https://eci.console.aliyun.com/terminal?param=X32a****\\",\\n  \\"SyncResponse\\": \\"Hello\\"\\n}","errorExample":""},{"type":"xml","example":"<ExecContainerCommandResponse>\\n    <RequestId>28B583A8-313D-4383-7817-B5A9F7E0****</RequestId>\\n    <WebSocketUri>wss://eci-cn-shanghai.aliyun.com/exec/?s=ktHPx****</WebSocketUri>\\n    <HttpUrl>https://eci.console.aliyun.com/terminal?param=X32a****</HttpUrl>\\n</ExecContainerCommandResponse>","errorExample":""}]',
      'title' => '在容器内部执行命令',
      'summary' => '调用ExecContainerCommand在容器内部执行命令。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeContainerLog' => 
    array (
      'summary' => '调用DescribeContainerLog获取容器组内某个容器的日志信息。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ContainerGroupId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => 'ECI实例ID，即容器组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eci-uf6fonnghi50v6nq****',
          ),
        ),
        2 => 
        array (
          'name' => 'ContainerName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '容器名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'nginx',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'UTC时间，RFC3339标准。',
            'type' => 'string',
            'required' => false,
            'example' => '2018-08-02T15:00:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'Tail',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询最新多少行的日志内容。默认500行，最大2000行 。      
日志内容最大返回1 MB数据。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '500',
          ),
        ),
        5 => 
        array (
          'name' => 'LastTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否查询上一个容器（如果容器退出重启了）。取值范围：

- true：查询上一个容器。
- false：不查询。

默认为false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'SinceSeconds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询最近多少秒内的日志。例如：10s、20s、30s。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'LimitBytes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志总大小的限制。单位为Byte，取值范围为1~1048576（1 MB）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '123798',
          ),
        ),
        8 => 
        array (
          'name' => 'Timestamps',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回日志时间戳。取值范围：

- true：返回日志时间戳。
- false：不返回日志时间戳。

默认为false。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
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
                'description' => '请求ID，唯一标识。',
                'type' => 'string',
                'example' => 'CA850ADA-****-4AC8-****-5B5990EAB7D0',
              ),
              'ContainerName' => 
              array (
                'description' => '容器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
              'Content' => 
              array (
                'description' => '日志内容。',
                'type' => 'string',
                'example' => '{}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CA850ADA-****-4AC8-****-5B5990EAB7D0\\",\\n  \\"ContainerName\\": \\"nginx\\",\\n  \\"Content\\": \\"{}\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>CA850ADA-****-4AC8-****-5B5990EAB7D0</RequestId>\\n<ContainerName>nginx</ContainerName>\\n<Content>{}</Content>","errorExample":""}]',
      'title' => '获取容器日志信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CommitContainer' => 
    array (
      'summary' => '调用CommitContainer接口创建异步任务，将ECI实例中的指定容器保存为镜像，并推送至阿里云ACR的镜像仓库中。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ContainerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要创建CommitContainer任务的ECI实例。',
            'type' => 'string',
            'required' => true,
            'example' => 'eci-bp1do4xz75fa5sd****',
          ),
        ),
        3 => 
        array (
          'name' => 'ContainerName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要制作镜像的容器的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'container-1',
          ),
        ),
        4 => 
        array (
          'name' => 'Image',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '容器镜像信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Repository' => 
              array (
                'description' => 'ACR镜像仓库地址。    
出于安全考虑，目前仅支持将镜像推送（Push）至ACR。',
                'type' => 'string',
                'required' => true,
                'example' => 'registry-vpc.cn-beijing.aliyuncs.com/test/test-****',
              ),
              'Tag' => 
              array (
                'description' => '镜像标签。默认为空，代表不修改标签。',
                'type' => 'string',
                'required' => true,
                'example' => '0.0.6',
              ),
              'Message' => 
              array (
                'description' => '镜像的说明信息。',
                'type' => 'string',
                'required' => false,
                'example' => 'test commit',
              ),
              'Author' => 
              array (
                'description' => '镜像的authorization。',
                'type' => 'string',
                'required' => false,
                'example' => 'alice',
              ),
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'AcrRegistryInfo',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => 'ACR企业版实例的访问凭证配置信息。    

> 使用ACR个人版实例时无需配置该参数；使用ACR企业版实例时必须配置该参数。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'description' => 'ACR企业版实例ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'cri-nwj395hgf6f3****',
              ),
              'RegionId' => 
              array (
                'description' => 'ACR企业版实例所属的地域。',
                'type' => 'string',
                'required' => false,
                'example' => 'cn-hangzhou',
              ),
              'ArnService' => 
              array (
                'description' => '跨账号授权场景下，使用者（被授权者）的RAM角色ARN。',
                'type' => 'string',
                'required' => false,
                'example' => 'acs:ram::1609982529******:role/role-test',
              ),
              'ArnUser' => 
              array (
                'description' => '跨账号授权场景下，授权者的RAM角色ARN。',
                'type' => 'string',
                'required' => false,
                'example' => 'acs:ram::1298452580******:role/role-test',
              ),
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'Arn',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '授权需要的ARN信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RoleArn' => 
              array (
                'description' => '授权角色的ARN。',
                'type' => 'string',
                'required' => false,
                'example' => 'acs:ram:xxx',
              ),
              'RoleType' => 
              array (
                'description' => '授权类型。可配置为service，表示使用RAM角色进行授权。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                ),
                'example' => 'service',
              ),
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
                'description' => '请求ID，唯一标识。',
                'type' => 'string',
                'example' => 'CB8D2B22-D636-4182-****-1FC9DBDAD66F',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 't-bp18cwvrb3v9tjk0tekz',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => '%s',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidVolumeType',
            'errorMessage' => 'The specified volumeName is invalid, only volume of cloud disk support capacity resize',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatusDetail',
            'errorMessage' => '%s',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAction',
            'errorMessage' => 'The specified action is invalid	',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CB8D2B22-D636-4182-****-1FC9DBDAD66F\\",\\n  \\"TaskId\\": \\"t-bp18cwvrb3v9tjk0tekz\\"\\n}","errorExample":""},{"type":"xml","example":"<CommitContainerResponse>\\n    <RequestId>CB8D2B22-D636-4182-****-1FC9DBDAD66F</RequestId>\\n    <TaskId>t-bp18cwvrb3v9tjk0tekz</TaskId>\\n</CommitContainerResponse>","errorExample":""}]',
      'title' => '创建CommitContainer任务',
      'description' => '调用CommitContainer接口前，您需要准备好ACR镜像仓库，然后创建RAM角色并完成授权操作。具体操作，请参见[提交容器生成镜像并推送到ACR](~~473046~~)。',
    ),
    'DescribeCommitContainerTask' => 
    array (
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAdDWBF2****',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页行数。    
最大值为50。    
默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'ContainerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行CommitContainer任务的ECI实例ID。    
查询时按实例ID或者任务ID进行查询，两者至少要填其中一个。',
            'type' => 'string',
            'required' => false,
            'example' => 'eci-2zelg8vwnlzdhf8hv****',
          ),
        ),
        5 => 
        array (
          'name' => 'TaskStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务状态。取值范围：

- Running：运行中
- Succeeded：成功
- Failed：失败',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Succeeded' => 'Succeeded',
              'Failed' => 'Failed',
              'Running' => 'Running',
            ),
            'example' => 'Running',
          ),
        ),
        6 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '任务ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '任务ID。    
查询时按实例ID或者任务ID进行查询，两者至少要填其中一个。',
              'type' => 'string',
              'required' => false,
              'example' => 't-2zej6nstkg744qc3****',
            ),
            'required' => false,
            'maxItems' => 10,
            'minItems' => 0,
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
              'TotalCount' => 
              array (
                'description' => '符合查询条件的结果条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'NextToken' => 
              array (
                'description' => '本次调用返回的查询凭证值。',
                'type' => 'string',
                'example' => 'AAAAAdDWBF2****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '45D5B0AD-3B00-4A9B-9911-6D5303B06712',
              ),
              'MaxResults' => 
              array (
                'description' => '每页显示行数。',
                'type' => 'string',
                'example' => '20',
              ),
              'CommitTasks' => 
              array (
                'description' => '任务详细信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务详细信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TaskId' => 
                    array (
                      'description' => '任务ID。',
                      'type' => 'string',
                      'example' => 't-2zej6nstkg744qc3****',
                    ),
                    'TaskStatus' => 
                    array (
                      'description' => '任务状态。可能值：

- Running：运行中
- Succeeded：成功
- Failed：失败',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'TaskProgress' => 
                    array (
                      'description' => '任务进度（百分比）。',
                      'type' => 'string',
                      'example' => '50%',
                    ),
                    'StatusMessage' => 
                    array (
                      'description' => '状态消息。',
                      'type' => 'string',
                      'example' => 'Commit container -xxxxxx',
                    ),
                    'ContainerName' => 
                    array (
                      'description' => '容器名称。',
                      'type' => 'string',
                      'example' => 'worker0',
                    ),
                    'CommitPhaseInfos' => 
                    array (
                      'description' => '任务阶段信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '任务阶段信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Phase' => 
                          array (
                            'description' => '阶段名称。可能值：

- PullBaseImage：拉取原容器镜像。
- CommitContainer：提交容器生成镜像。
- PushCommittedImage：推送镜像到ACR。',
                            'type' => 'string',
                            'example' => 'PullBaseImage',
                          ),
                          'Status' => 
                          array (
                            'description' => '阶段状态。',
                            'type' => 'string',
                            'example' => 'Success',
                          ),
                          'Message' => 
                          array (
                            'description' => '阶段信息。',
                            'type' => 'string',
                            'example' => 'Pull base image for container container-1 successfully',
                          ),
                          'RecordTime' => 
                          array (
                            'description' => '阶段时间。',
                            'type' => 'string',
                            'example' => '2023-01-05T14:06:40.920005316+08:00',
                          ),
                        ),
                      ),
                    ),
                    'TaskCreationTime' => 
                    array (
                      'description' => '任务开始时间。',
                      'type' => 'string',
                      'example' => '2023-03-06T08:22:40Z',
                    ),
                    'TaskFinishedTime' => 
                    array (
                      'description' => '任务完成时间。',
                      'type' => 'string',
                      'example' => '2023-03-06T08:23:40Z',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 5,\\n  \\"NextToken\\": \\"AAAAAdDWBF2****\\",\\n  \\"RequestId\\": \\"45D5B0AD-3B00-4A9B-9911-6D5303B06712\\",\\n  \\"MaxResults\\": \\"20\\",\\n  \\"CommitTasks\\": [\\n    {\\n      \\"TaskId\\": \\"t-2zej6nstkg744qc3****\\",\\n      \\"TaskStatus\\": \\"Running\\",\\n      \\"TaskProgress\\": \\"50%\\",\\n      \\"StatusMessage\\": \\"Commit container -xxxxxx\\",\\n      \\"ContainerName\\": \\"worker0\\",\\n      \\"CommitPhaseInfos\\": [\\n        {\\n          \\"Phase\\": \\"PullBaseImage\\",\\n          \\"Status\\": \\"Success\\",\\n          \\"Message\\": \\"Pull base image for container container-1 successfully\\",\\n          \\"RecordTime\\": \\"2023-01-05T14:06:40.920005316+08:00\\"\\n        }\\n      ],\\n      \\"TaskCreationTime\\": \\"2023-03-06T08:22:40Z\\",\\n      \\"TaskFinishedTime\\": \\"2023-03-06T08:23:40Z\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeCommitContainerTaskResponse>\\n    <TotalCount>1</TotalCount>\\n    <CommitTasks>\\n        <TaskId>t-2zej6nstkg744qc3****</TaskId>\\n        <ContainerName>container-1</ContainerName>\\n        <CommitPhaseInfos>\\n            <Status>Running</Status>\\n            <RecordTime>2023-01-05T16:19:28.969043719+08:00</RecordTime>\\n            <Phase>PullBaseImage</Phase>\\n            <Message>Start pulling base image for container container-1</Message>\\n        </CommitPhaseInfos>\\n        <CommitPhaseInfos>\\n            <Status>Success</Status>\\n            <RecordTime>2023-01-05T16:19:30.828749277+08:00</RecordTime>\\n            <Phase>PullBaseImage</Phase>\\n            <Message>Pull base image for container container-1 successfully</Message>\\n        </CommitPhaseInfos>\\n        <CommitPhaseInfos>\\n            <Status>Running</Status>\\n            <RecordTime>2023-01-05T16:19:30.828751003+08:00</RecordTime>\\n            <Phase>CommitContainer</Phase>\\n            <Message>Start to commit container container-1 to image registry-vpc.cn-beijing.aliyuncs.com/jsy-test/jsy-registry:0.0.1</Message>\\n        </CommitPhaseInfos>\\n        <CommitPhaseInfos>\\n            <Status>Success</Status>\\n            <RecordTime>2023-01-05T16:19:31.149874126+08:00</RecordTime>\\n            <Phase>CommitContainer</Phase>\\n            <Message>Commit container container-1 to image registry-vpc.cn-beijing.aliyuncs.com/jsy-test/jsy-registry:0.0.1 successfully </Message>\\n        </CommitPhaseInfos>\\n        <CommitPhaseInfos>\\n            <Status>Running</Status>\\n            <RecordTime>2023-01-05T16:19:31.149874907+08:00</RecordTime>\\n            <Phase>PushCommittedImage</Phase>\\n            <Message>Start to push image container-1:registry-vpc.cn-beijing.aliyuncs.com/jsy-test/jsy-registry</Message>\\n        </CommitPhaseInfos>\\n        <CommitPhaseInfos>\\n            <Status>Success</Status>\\n            <RecordTime>2023-01-05T16:19:32.979481284+08:00</RecordTime>\\n            <Phase>PushCommittedImage</Phase>\\n            <Message>Push image registry-vpc.cn-beijing.aliyuncs.com/***-test/***-registry:1.0.1 successfully</Message>\\n        </CommitPhaseInfos>\\n        <CreationTime>2023-01-05T16:19:28Z</CreationTime>\\n        <TaskStatus>Succeeded</TaskStatus>\\n        <FinishedTime>2023-01-05T16:19:40Z</FinishedTime>\\n    </CommitTasks>\\n    <NextToken/>\\n    <RequestId>42E65299-8224-5D4A-915E-5AEC04A523FC</RequestId>\\n</DescribeCommitContainerTaskResponse>","errorExample":""}]',
      'title' => '查询CommitContainer任务详情',
      'summary' => '调用DescribeCommitContainerTask查询CommitContainer任务的详情。',
    ),
    'CreateImageCache' => 
    array (
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
        'abilityTreeCode' => '17725',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeciIGQQJ4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-g',
          ),
        ),
        3 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全组ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'sg-uf66jeqopgqa9hdn****',
          ),
        ),
        4 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机ID。支持指定多个交换机ID（单次最多10个），各交换机ID之间可以用半角逗号（,）进行分割，例如`vsw-***,vsw-***`。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'vsw-uf6h3rbwbm90urjwa****',
          ),
        ),
        5 => 
        array (
          'name' => 'ImageCacheName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像缓存名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testcache',
          ),
        ),
        6 => 
        array (
          'name' => 'EipInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性公网IP。如果需要拉取公网镜像，需要确保ECI实例能够访问公网，您可以配置EIP或者NAT网关实现公网访问。',
            'type' => 'string',
            'required' => false,
            'example' => 'eip-2zedsm5mfl3uhdj2d****',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aekzh43v*****',
          ),
        ),
        8 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-xxx-xxx-xxxx-42665544xxxx',
          ),
        ),
        9 => 
        array (
          'name' => 'ImageCacheSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像缓存的大小。默认为20 GiB。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        10 => 
        array (
          'name' => 'RetentionDays',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像缓存保留时间，过期将会被清理，默认永不过期。

> 创建失败的镜像缓存仅保留一天。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '7',
          ),
        ),
        11 => 
        array (
          'name' => 'AutoMatchImageCache',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启镜像缓存复用。开启后，新创建的镜像缓存可以复用已有镜像缓存的镜像层，加快镜像缓存的制作速度。取值范围：

- true：开启

- false：不开启

默认为false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        12 => 
        array (
          'name' => 'ImageRegistryCredential',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '镜像仓库信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '镜像仓库信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Password' => 
                array (
                  'description' => '镜像仓库密码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'password',
                ),
                'Server' => 
                array (
                  'description' => '不带 `http://` 或  `https://` 前缀的镜像仓库地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com',
                ),
                'UserName' => 
                array (
                  'description' => '镜像仓库用户名。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'username',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 11,
          ),
        ),
        13 => 
        array (
          'name' => 'Image',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '用于制作镜像缓存的容器镜像。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用于制作镜像缓存的容器镜像。',
              'type' => 'string',
              'required' => false,
              'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com/eci_open/nginx:1.15.10-perl',
            ),
            'required' => true,
            'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com/eci_open/nginx:1.15.10-perl',
            'maxItems' => 101,
          ),
        ),
        14 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '镜像缓存标签信息，最多20个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '镜像缓存标签信息，最多20个。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '镜像缓存标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'imc',
                ),
                'Value' => 
                array (
                  'description' => '镜像缓存标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        15 => 
        array (
          'name' => 'Flash',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启极速镜像缓存功能，开启后，可以加速镜像缓存创建。取值范围：

- true：开启

- false：不开启

默认为false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        16 => 
        array (
          'name' => 'AcrRegistryInfo',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ACR实例信息。更多信息，请参见[免密拉取ACR镜像](~~194250~~)。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ACR实例信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Domain' => 
                array (
                  'description' => 'ACR企业版实例的域名。默认为相应实例的所有域名。支持指定个别域名，多个以半角逗号分隔。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'ACR企业版实例的域名。默认为相应实例的所有域名。支持指定个别域名，多个以半角逗号分隔。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'test****-registry.cn-beijing.cr.aliyuncs.com',
                  ),
                  'required' => false,
                  'example' => 'test****-registry.cn-beijing.cr.aliyuncs.com',
                  'maxItems' => 100,
                ),
                'InstanceName' => 
                array (
                  'description' => 'ACR企业版实例的名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test****',
                ),
                'InstanceId' => 
                array (
                  'description' => 'ACR企业版实例ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cri-nwj395hgf6f3****',
                ),
                'RegionId' => 
                array (
                  'description' => 'ACR企业版实例所属地域。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-beijing',
                ),
                'ArnService' => 
                array (
                  'description' => 'ECI实例等资源归属账号下的RAM角色的ARN。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'acs:ram::1609982529******:role/role-assume',
                ),
                'ArnUser' => 
                array (
                  'description' => 'ACR实例归属账号下的RAM角色的ARN。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'acs:ram::1298452580******:role/role-acr',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        17 => 
        array (
          'name' => 'Annotations',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '注解。该参数暂不对外使用。',
            'type' => 'string',
            'required' => false,
            'example' => 'hide',
          ),
        ),
        18 => 
        array (
          'name' => 'PlainHttpRegistry',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自建镜像仓库地址。使用HTTP协议的自建镜像仓库中的镜像创建镜像缓存时，需配置该参数，使得ECI使用HTTP协议拉取镜像，避免因协议不同而导致镜像拉取失败。',
            'type' => 'string',
            'required' => false,
            'example' => '"harbor***.pre.com,192.168.XX.XX:5000,reg***.test.com:80"',
          ),
        ),
        19 => 
        array (
          'name' => 'InsecureRegistry',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自建镜像仓库地址。

使用自签发证书的自建镜像仓库中的镜像创建镜像缓存时，需配置该参数来跳过证书认证，避免因证书认证失败而导致镜像拉取失败。',
            'type' => 'string',
            'required' => false,
            'example' => '"harbor***.pre.com,192.168.XX.XX:5000,reg***.test.com:80"',
          ),
        ),
        20 => 
        array (
          'name' => 'StandardCopyCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '普通快照副本数。默认情况下，一个镜像缓存对应一个快照。如果该镜像缓存将用于批量创建多个ECI实例，建议您配置该参数实现快照多副本。推荐每1000个ECI实例增加一个快照副本。

> 未开启极速镜像缓存功能（Flash取值为false）时，创镜像缓存的过程中仅生成普通快照。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '7',
          ),
        ),
        21 => 
        array (
          'name' => 'FlashCopyCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本地快照副本数。默认情况下，一个镜像缓存对应一个快照。如果该镜像缓存将用于批量创建多个ECI实例，建议您配置该参数实现快照多副本。推荐每1000个ECI实例增加一个快照副本。

> 开启极速镜像缓存功能（Flash取值为true）时，创建镜像缓存的过程中将先创建本地快照，在本地快照创建完成后开始创建普通快照，待普通快照创建完成后会自动删除本地快照。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '7',
          ),
        ),
        22 => 
        array (
          'name' => 'EliminationStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像缓存的淘汰策略。默认为空，表示一直保留。

支持配置为LRU，表示可以被自动删除。当镜像缓存数量达到配额限制时，系统将自动删除最不常用的EliminationStrategy为LRU的镜像缓存。',
            'type' => 'string',
            'required' => false,
            'example' => 'LRU',
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
                'description' => '请求ID，唯一标识。',
                'type' => 'string',
                'example' => '0E234675-3465-4CC3-9D0F-9A864BC391DD',
              ),
              'ImageCacheId' => 
              array (
                'description' => '镜像缓存ID。',
                'type' => 'string',
                'example' => 'imc-2zebxkiifuyzzlhl****',
              ),
              'ContainerGroupId' => 
              array (
                'description' => '用于中转创建镜像缓存的ECI实例ID。
',
                'type' => 'string',
                'example' => 'eci-2zebxkiifuyzzlhl****',
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
            'errorCode' => 'Account.Arrearage',
            'errorMessage' => 'Your account has an outstanding payment.',
          ),
          1 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.CPU.Memory',
            'errorMessage' => 'The specified cpu and memory are not allowed',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectStatus',
            'errorMessage' => '%s',
          ),
          4 => 
          array (
            'errorCode' => 'ServiceNotEnabled',
            'errorMessage' => '%s',
          ),
          5 => 
          array (
            'errorCode' => 'DiskVolume.NotSupport',
            'errorMessage' => 'The disk volume is not supported.',
          ),
          6 => 
          array (
            'errorCode' => 'RamRole.NotSupport',
            'errorMessage' => 'The RAM role is not supported.',
          ),
          7 => 
          array (
            'errorCode' => 'ImageCache.IncorrectStatus',
            'errorMessage' => '%s',
          ),
          8 => 
          array (
            'errorCode' => 'ImageCacheNotSupport',
            'errorMessage' => 'Image cache is not available for all users. If you want to enable this function, contact us.',
          ),
          9 => 
          array (
            'errorCode' => 'EipAddressPoolIpNotEnough',
            'errorMessage' => 'The ip address of specified PublicIpAddressPool is not enough.',
          ),
          10 => 
          array (
            'errorCode' => 'OperationConflict',
            'errorMessage' => 'The request was denied. It conflicts with a previous request.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.VswZoneMisMatch',
            'errorMessage' => 'The specified VSwitchId is not in the specified Zone.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded',
            'errorMessage' => '%s quota exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'Zone.NotOnSale',
            'errorMessage' => 'The specified zone is not available for purchase.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'This operation has been identified as an abnormal operation and cannot be processed.',
          ),
          4 => 
          array (
            'errorCode' => 'Forbidden.SubUser',
            'errorMessage' => 'The specified action is not available for you.',
          ),
          5 => 
          array (
            'errorCode' => 'Forbidden.OnlyForInvitedTest',
            'errorMessage' => 'Eci create action is only open to invited users during public beta.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.SecurityGroupMisMatch',
            'errorMessage' => 'The specified VSwitchId and SecurityGroupId are not in the same VPC.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidVSwitchId.IpNotEnough',
            'errorMessage' => 'The specified VSwitch does not have enough IP addresses.',
          ),
          8 => 
          array (
            'errorCode' => 'Forbidden.UserBussinessStatus',
            'errorMessage' => 'This operation is not allowed, because you have overdue bills. Pay the overdue bill and try again.',
          ),
          9 => 
          array (
            'errorCode' => 'Forbidden.UserNotRealNameAuthentication',
            'errorMessage' => 'This operation is not allowed, because you have not passed the real-name verification.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidUser.PassRoleForbidden',
            'errorMessage' => 'The RAM user is not authorized to assume a RAM role.',
          ),
          11 => 
          array (
            'errorCode' => 'OperationDenied.NoStock',
            'errorMessage' => 'Sales of this resource are temporarily suspended in the specified zone. We recommend that you use the multi-zone creation function to avoid the risk of insufficient resource. For more information, see https://help.aliyun.com/document_detail/157290.html',
          ),
          12 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'The RAM role AliyunECIContainerGroupRole does not belong to eci.aliyuncs.com. Please check and try again.',
          ),
          13 => 
          array (
            'errorCode' => 'SecurityRisk.3DVerification',
            'errorMessage' => 'We have detected a security risk with your default credit or debit card. Please proceed with verification via the link in your email.',
          ),
          14 => 
          array (
            'errorCode' => 'CreateServiceLinkedRole.Denied',
            'errorMessage' => 'Please make sure the account has ram:CreateServiceLinkedRole permission.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0E234675-3465-4CC3-9D0F-9A864BC391DD\\",\\n  \\"ImageCacheId\\": \\"imc-2zebxkiifuyzzlhl****\\",\\n  \\"ContainerGroupId\\": \\"eci-2zebxkiifuyzzlhl****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateImageCacheResponse>\\n    <ImageCacheId>imc-2zebxkiifuyzzlhl****</ImageCacheId>\\n    <RequestId>0E234675-3465-4CC3-9D0F-9A864BC391DD</RequestId>\\n    <ContainerGroupId>eci-2zebxkiifuyzzlhl****</ContainerGroupId>\\n</CreateImageCacheResponse>","errorExample":""}]',
      'title' => '创建一个镜像缓存',
      'summary' => '调用CreateImageCache接口创建一个镜像缓存，以便后续创建ECI实例可以加速镜像拉取，减少实例启动耗时。',
      'description' => '### 注意事项

- 创建镜像缓存涉及资源计费。建议您提前了解相关计费信息。更多信息，请参见[镜像缓存计费](~~447682~~)。
- 创建镜像缓存前，您需要评估待缓存镜像的总大小，如果镜像总大小超过设置的缓存大小，将会创建失败。
- 创建镜像缓存时，系统将自动创建一个ECI实例和一块ESSD PL1类型的云盘用于中转创建镜像缓存。创建过程中请勿删除ECI实例和云盘，否则镜像缓存将创建失败。
- 创建镜像缓存将生成对应的快照。请勿删除快照，否则镜像缓存将会失效。
- 如果使用SDK，则对应版本为：Java 1.0.10以上，Python 1.0.7以上。

### 使用建议
- 对于使用自定义域名的ACR企业版镜像，需要指定ACR实例（设置AcrRegistryInfo相关参数）来配置免密。设置AcrRegistryInfo相关参数时，必须设置AcrRegistryInfo.N.InstanceId。
- 如果该镜像缓存将用于批量创建多个（超过1000个）ECI实例，建议您设置StandardCopyCount和FlashCopyCount实现快照多副本功能。快照多副本按增量数据收费，由于本次创建的多个快照副本数据均一致，因此使用快照多副本功能不会增加额外费用。

> 调用CreateImageCache创建镜像缓存时，系统将自动为您创建一个服务关联角色AliyunServiceRoleForECI，用于访问ECS、VPC等相关云服务。更多信息，请参见[弹性容器实例服务关联角色](~~212914~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteImageCache' => 
    array (
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ImageCacheId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像缓存ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'imc-2zebxkiifuyzzlhl****',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。
',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
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
                'description' => '请求ID，唯一标识。',
                'type' => 'string',
                'example' => '89945DD3-9072-47D0-A218-354284CFC7A2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"89945DD3-9072-47D0-A218-354284CFC7A2\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteImageCacheResponse>\\r\\n    <RequestId>89945DD3-9072-47D0-A218-354284CFC7A2</RequestId>\\r\\n</DeleteImageCacheResponse>","errorExample":""}]',
      'title' => '删除一个镜像缓存',
      'summary' => '调用DeleteImageCache删除一个镜像缓存。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateImageCache' => 
    array (
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou	',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou	',
          ),
        ),
        2 => 
        array (
          'name' => 'ImageCacheId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像缓存ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'imc-bp195erqe9o2pb09****	',
          ),
        ),
        3 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全组ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'sg-uf66jeqopgqa9hdn****	',
          ),
        ),
        4 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'vsw-uf6h3rbwbm90urjwa****	',
          ),
        ),
        5 => 
        array (
          'name' => 'ImageCacheName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像缓存名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'testcache',
          ),
        ),
        6 => 
        array (
          'name' => 'EipInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性公网IP。如果需要拉取公网镜像，需要确保ECI实例能够访问公网，您可以配置EIP或者NAT网关实现公网访问。',
            'type' => 'string',
            'required' => false,
            'example' => 'eip-2zedsm5mfl3uhdj2d****',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aekzh43v*****	',
          ),
        ),
        8 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-xxx-xxx-xxxx-42665544xxxx',
          ),
        ),
        9 => 
        array (
          'name' => 'ImageCacheSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像缓存的大小。默认为20 GiB。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        10 => 
        array (
          'name' => 'RetentionDays',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像缓存保留时间，过期将会被清理，默认永不过期。

> 创建失败的镜像缓存仅保留一天。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '7',
          ),
        ),
        11 => 
        array (
          'name' => 'AutoMatchImageCache',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启镜像缓存复用。开启后，新创建的镜像缓存可以复用已有镜像缓存的镜像层，加快镜像缓存的制作速度。取值范围：

- true：开启
- false：不开启

默认为false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        12 => 
        array (
          'name' => 'ImageRegistryCredential',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '镜像仓库信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '镜像仓库信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Password' => 
                array (
                  'description' => '镜像仓库密码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'password',
                ),
                'Server' => 
                array (
                  'description' => '不带 `http://` 或  `https://` 前缀的镜像仓库地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com',
                ),
                'UserName' => 
                array (
                  'description' => '镜像仓库用户名。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'username',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 11,
          ),
        ),
        13 => 
        array (
          'name' => 'Image',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '用于制作镜像缓存的容器镜像。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用于制作镜像缓存的容器镜像。',
              'type' => 'string',
              'required' => false,
              'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com/eci_open/nginx:1.15.10-perl',
            ),
            'required' => false,
            'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com/eci_open/nginx:1.15.10-perl',
            'maxItems' => 101,
          ),
        ),
        14 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '镜像缓存绑定的标签信息，最多20个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '镜像缓存绑定的标签信息，最多20个。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '镜像缓存标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'imc',
                ),
                'Value' => 
                array (
                  'description' => '镜像缓存标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        15 => 
        array (
          'name' => 'Flash',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启极速镜像缓存功能，开启后，可以加速镜像缓存创建。取值范围：

- true：开启
- false：不开启

默认为false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        16 => 
        array (
          'name' => 'AcrRegistryInfo',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ACR企业版实例信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ACR企业版实例信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Domain' => 
                array (
                  'description' => 'ACR企业版实例的域名。默认为相应实例的所有域名。支持指定个别域名，多个以半角逗号分隔。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'ACR企业版实例的域名。默认为相应实例的所有域名。支持指定个别域名，多个以半角逗号分隔。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'test****-registry.cn-hangzhou.cr.aliyuncs.com',
                  ),
                  'required' => false,
                  'example' => 'test****-registry.cn-hangzhou.cr.aliyuncs.com',
                  'maxItems' => 100,
                ),
                'InstanceName' => 
                array (
                  'description' => 'ACR企业版实例的名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test****',
                ),
                'InstanceId' => 
                array (
                  'description' => 'ACR企业版实例ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cri-nwj395hgf6f3****	',
                ),
                'RegionId' => 
                array (
                  'description' => 'ACR企业版实例所属地域。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-hangzhou',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        17 => 
        array (
          'name' => 'StandardCopyCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '普通快照副本数。默认情况下，一个镜像缓存对应一个快照。如果该镜像缓存将用于批量创建多个ECI实例，建议您配置该参数实现快照多副本。推荐每1000个ECI实例增加一个快照副本。

> 未开启极速镜像缓存功能（Flash取值为false）时，创镜像缓存的过程中仅生成普通快照。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '7',
          ),
        ),
        18 => 
        array (
          'name' => 'FlashCopyCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本地快照副本数。默认情况下，一个镜像缓存对应一个快照。如果该镜像缓存将用于批量创建多个ECI实例，建议您配置该参数实现快照多副本。推荐每1000个ECI实例增加一个快照副本。

> 开启极速镜像缓存功能（Flash取值为true）时，创建镜像缓存的过程中将先创建本地快照，在本地快照创建完成后开始创建普通快照，待普通快照创建完成后会自动删除本地快照。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '7',
          ),
        ),
        19 => 
        array (
          'name' => 'EliminationStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像缓存的淘汰策略。默认为空，表示一直保留。

支持配置为LRU，表示可以被自动删除。当镜像缓存数量达到配额限制时，系统将自动删除最不常用的EliminationStrategy为LRU的镜像缓存。',
            'type' => 'string',
            'required' => false,
            'example' => 'LRU',
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
                'description' => '请求ID，唯一标识。',
                'type' => 'string',
                'example' => '0E234675-3465-4CC3-9D0F-9A864BC391DD',
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
            'errorCode' => 'Account.Arrearage',
            'errorMessage' => 'Your account has an outstanding payment.',
          ),
          1 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.CPU.Memory',
            'errorMessage' => 'The specified cpu and memory are not allowed',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectStatus',
            'errorMessage' => '%s',
          ),
          4 => 
          array (
            'errorCode' => 'ServiceNotEnabled',
            'errorMessage' => '%s',
          ),
          5 => 
          array (
            'errorCode' => 'DiskVolume.NotSupport',
            'errorMessage' => 'The disk volume is not supported.',
          ),
          6 => 
          array (
            'errorCode' => 'RamRole.NotSupport',
            'errorMessage' => 'The RAM role is not supported.',
          ),
          7 => 
          array (
            'errorCode' => 'ImageCache.IncorrectStatus',
            'errorMessage' => '%s',
          ),
          8 => 
          array (
            'errorCode' => 'ImageCacheNotSupport',
            'errorMessage' => 'Image cache is not available for all users. If you want to enable this function, contact us.',
          ),
          9 => 
          array (
            'errorCode' => 'OperationConflict',
            'errorMessage' => 'Request was denied due to conflict with a previous request.',
          ),
          10 => 
          array (
            'errorCode' => 'NoNeedUpdate',
            'errorMessage' => 'There are no changes to be updated for current resource.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.VswZoneMisMatch',
            'errorMessage' => 'The specified VSwitchId is not in the specified Zone.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded',
            'errorMessage' => '%s quota exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'Zone.NotOnSale',
            'errorMessage' => 'The specified zone is not available for purchase.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'This operation has been identified as an abnormal operation and cannot be processed.',
          ),
          4 => 
          array (
            'errorCode' => 'Forbidden.SubUser',
            'errorMessage' => 'The specified action is not available for you.',
          ),
          5 => 
          array (
            'errorCode' => 'Forbidden.OnlyForInvitedTest',
            'errorMessage' => 'Eci create action is only open to invited users during public beta.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.SecurityGroupMisMatch',
            'errorMessage' => 'The specified VSwitchId and SecurityGroupId are not in the same VPC.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidVSwitchId.IpNotEnough',
            'errorMessage' => 'The specified VSwitch does not have enough IP addresses.',
          ),
          8 => 
          array (
            'errorCode' => 'Forbidden.UserBussinessStatus',
            'errorMessage' => 'This operation is not allowed, because you have overdue bills. Pay the overdue bill and try again.',
          ),
          9 => 
          array (
            'errorCode' => 'Forbidden.UserNotRealNameAuthentication',
            'errorMessage' => 'This operation is not allowed, because you have not passed the real-name verification.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidUser.PassRoleForbidden',
            'errorMessage' => 'The RAM user is not authorized to assume a RAM role.',
          ),
          11 => 
          array (
            'errorCode' => 'OperationDenied.NoStock',
            'errorMessage' => 'Sales of this resource are temporarily suspended in the specified zone. We recommend that you use the multi-zone creation function to avoid the risk of insufficient resource. For more information, see https://help.aliyun.com/document_detail/157290.html',
          ),
          12 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'The RAM role AliyunECIContainerGroupRole does not belong to eci.aliyuncs.com. Please check and try again.',
          ),
          13 => 
          array (
            'errorCode' => 'SecurityRisk.3DVerification',
            'errorMessage' => 'We have detected a security risk with your default credit or debit card. Please proceed with verification via the link in your email.',
          ),
          14 => 
          array (
            'errorCode' => 'CreateServiceLinkedRole.Denied',
            'errorMessage' => 'Please make sure the account has ram:CreateServiceLinkedRole permission.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0E234675-3465-4CC3-9D0F-9A864BC391DD\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateImageCacheResponse>\\r\\n    <RequestId>0E234675-3465-4CC3-9D0F-9A864BC391DD</RequestId>\\r\\n</UpdateImageCacheResponse>","errorExample":""}]',
      'title' => '更新一个镜像缓存',
      'summary' => '调用UpdateImageCache更新一个镜像缓存。',
      'description' => '仅支持更新状态为Ready（创建完成）或者UpdateFailed（更新失败）的镜像缓存。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeImageCaches' => 
    array (
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ImageCacheId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像缓存ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'imc-bp195erqe9o2pb09****',
          ),
        ),
        3 => 
        array (
          'name' => 'ImageCacheName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像缓存名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'testcache',
          ),
        ),
        4 => 
        array (
          'name' => 'SnapshotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像缓存对应的快照ID。',
            'type' => 'string',
            'required' => false,
            'example' => 's-2zec5oj8e1yhxijt****',
          ),
        ),
        5 => 
        array (
          'name' => 'Image',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '容器镜像。',
            'type' => 'string',
            'required' => false,
            'example' => 'nginx',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所属资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-2df3isufhi38****',
          ),
        ),
        7 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '镜像缓存绑定的标签信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '镜像缓存绑定的标签信息，最多20个。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '镜像缓存标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'imc',
                ),
                'Value' => 
                array (
                  'description' => '镜像缓存标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
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
          'name' => 'MatchImage',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定容器镜像，用于查询最佳匹配的镜像缓存，最多100个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定容器镜像，用于查询最佳匹配的镜像缓存，最多100个。',
              'type' => 'string',
              'required' => false,
              'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com/eci_open/nginx:1.15.10-perl',
            ),
            'required' => false,
            'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com/eci_open/nginx:1.15.10-perl',
            'maxItems' => 101,
          ),
        ),
        9 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '查询结果条数上限。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        10 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAdDWBF2****',
          ),
        ),
        11 => 
        array (
          'name' => 'ImageFullMatch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否完全匹配容器镜像。    
在配置了MatchImage取值的情况下，进一步过滤查询结果。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        12 => 
        array (
          'name' => 'ImageMatchCountRequest',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完全匹配容器镜像的镜像缓存个数。    
在配置了MatchImage取值的情况下，进一步过滤查询结果。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3',
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
                'description' => '请求ID，唯一标识。',
                'type' => 'string',
                'example' => '39FC2E43-3DD7-4CEF-9EF4-E4AD6E635301',
              ),
              'ImageCaches' => 
              array (
                'description' => '镜像缓存信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '镜像缓存信息列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Images' => 
                    array (
                      'description' => '镜像缓存包含的镜像列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '镜像缓存包含的镜像列表。',
                        'type' => 'string',
                        'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com/eci_open/nginx:1.15.10-perl',
                      ),
                    ),
                    'CreationTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2021-02-09T02:24:07Z',
                    ),
                    'Status' => 
                    array (
                      'description' => '镜像缓存状态。可能值：

- Preparing：准备中
- Creating：创建中
- Ready：创建完成
- Failed：创建失败
- Updating：更新中
- UpdateFailed：更新失败

当状态为Ready时，即可使用该镜像缓存。',
                      'type' => 'string',
                      'example' => 'Ready',
                    ),
                    'Progress' => 
                    array (
                      'description' => '镜像缓存对应快照的创建进度。

> 如果开启了极速镜像缓存功能，将先创建一份临时使用的本地快照再创建一份普通快照，该进度为普通快照的创建进度。',
                      'type' => 'string',
                      'example' => '100%',
                    ),
                    'ExpireDateTime' => 
                    array (
                      'description' => '到期时间。',
                      'type' => 'string',
                      'example' => '2019-11-10T09:00:48Z',
                    ),
                    'LastMatchedTime' => 
                    array (
                      'description' => '最新一次匹配到镜像缓存的时间。',
                      'type' => 'string',
                      'example' => '2021-08-18T03:48:10Z',
                    ),
                    'ContainerGroupId' => 
                    array (
                      'description' => '容器组ID。',
                      'type' => 'string',
                      'example' => 'eci-bp18oq3m15prd9jb****',
                    ),
                    'Tags' => 
                    array (
                      'description' => '镜像缓存的标签列表信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '镜像缓存的标签列表信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键。',
                            'type' => 'string',
                            'example' => 'imc',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => 'test',
                          ),
                        ),
                      ),
                    ),
                    'Events' => 
                    array (
                      'description' => '镜像缓存拉取镜像事件信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '镜像缓存拉取镜像事件信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Type' => 
                          array (
                            'description' => '事件类型。',
                            'type' => 'string',
                            'example' => 'Normal',
                          ),
                          'LastTimestamp' => 
                          array (
                            'description' => '事件结束时间。',
                            'type' => 'string',
                            'example' => '2021-02-09T02:24:48Z',
                          ),
                          'Message' => 
                          array (
                            'description' => '事件消息。',
                            'type' => 'string',
                            'example' => 'Successfully check image cache resource.',
                          ),
                          'Name' => 
                          array (
                            'description' => '事件名称。',
                            'type' => 'string',
                            'example' => 'imagetest.1661f31f851a****',
                          ),
                          'Count' => 
                          array (
                            'description' => '事件数。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'FirstTimestamp' => 
                          array (
                            'description' => '事件开始时间。',
                            'type' => 'string',
                            'example' => '2021-02-09T02:24:48Z',
                          ),
                          'Reason' => 
                          array (
                            'description' => '事件原因。',
                            'type' => 'string',
                            'example' => 'Started',
                          ),
                        ),
                      ),
                    ),
                    'ImageCacheId' => 
                    array (
                      'description' => '镜像缓存ID。
',
                      'type' => 'string',
                      'example' => 'imc-bp195erqe9o2pb09****',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '所属地域。',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                    ),
                    'SnapshotId' => 
                    array (
                      'description' => '镜像缓存对应的快照ID。',
                      'type' => 'string',
                      'example' => 's-2zec5oj8e1yhxijt****',
                    ),
                    'FlashSnapshotId' => 
                    array (
                      'description' => '本地快照ID。开启极速镜像缓存功能后，将临时创建一份本地快照。',
                      'type' => 'string',
                      'example' => 's-bp12w3v37sit96t6****',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '所属资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-2df3isufhi38****',
                    ),
                    'ImageCacheSize' => 
                    array (
                      'description' => '镜像缓存大小。单位：GiB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '20',
                    ),
                    'ImageCacheName' => 
                    array (
                      'description' => '镜像缓存名称。',
                      'type' => 'string',
                      'example' => 'imagetest',
                    ),
                    'EliminationStrategy' => 
                    array (
                      'description' => '镜像缓存的淘汰策略。默认为空，表示一直保留。

支持配置为LRU，表示可以被自动删除。当镜像缓存数量达到配额限制时，系统将自动删除最不常用的EliminationStrategy为LRU的镜像缓存。',
                      'type' => 'string',
                      'example' => 'LRU',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '本次调用返回的查询凭证值。',
                'type' => 'string',
                'example' => 'AAAAAdDWBF2****',
              ),
              'TotalCount' => 
              array (
                'description' => '查询结果总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '15',
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
            'errorCode' => 'Account.Arrearage',
            'errorMessage' => 'Your account has an outstanding payment.',
          ),
          1 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          2 => 
          array (
            'errorCode' => 'ServiceNotEnabled',
            'errorMessage' => '%s',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.SubUser',
            'errorMessage' => 'The specified action is not available for you.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.UserBussinessStatus',
            'errorMessage' => 'This operation is not allowed, because you have overdue bills. Pay the overdue bill and try again.',
          ),
          2 => 
          array (
            'errorCode' => 'Forbidden.UserNotRealNameAuthentication',
            'errorMessage' => 'This operation is not allowed, because you have not passed the real-name verification.',
          ),
          3 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'The RAM role does not belong to ECS.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"39FC2E43-3DD7-4CEF-9EF4-E4AD6E635301\\",\\n  \\"ImageCaches\\": [\\n    {\\n      \\"Images\\": [\\n        \\"registry-vpc.cn-hangzhou.aliyuncs.com/eci_open/nginx:1.15.10-perl\\"\\n      ],\\n      \\"CreationTime\\": \\"2021-02-09T02:24:07Z\\",\\n      \\"Status\\": \\"Ready\\",\\n      \\"Progress\\": \\"100%\\",\\n      \\"ExpireDateTime\\": \\"2019-11-10T09:00:48Z\\",\\n      \\"LastMatchedTime\\": \\"2021-08-18T03:48:10Z\\",\\n      \\"ContainerGroupId\\": \\"eci-bp18oq3m15prd9jb****\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"imc\\",\\n          \\"Value\\": \\"test\\"\\n        }\\n      ],\\n      \\"Events\\": [\\n        {\\n          \\"Type\\": \\"Normal\\",\\n          \\"LastTimestamp\\": \\"2021-02-09T02:24:48Z\\",\\n          \\"Message\\": \\"Successfully check image cache resource.\\",\\n          \\"Name\\": \\"imagetest.1661f31f851a****\\",\\n          \\"Count\\": 1,\\n          \\"FirstTimestamp\\": \\"2021-02-09T02:24:48Z\\",\\n          \\"Reason\\": \\"Started\\"\\n        }\\n      ],\\n      \\"ImageCacheId\\": \\"imc-bp195erqe9o2pb09****\\",\\n      \\"RegionId\\": \\"cn-beijing\\",\\n      \\"SnapshotId\\": \\"s-2zec5oj8e1yhxijt****\\",\\n      \\"FlashSnapshotId\\": \\"s-bp12w3v37sit96t6****\\",\\n      \\"ResourceGroupId\\": \\"rg-2df3isufhi38****\\",\\n      \\"ImageCacheSize\\": 20,\\n      \\"ImageCacheName\\": \\"imagetest\\",\\n      \\"EliminationStrategy\\": \\"LRU\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"AAAAAdDWBF2****\\",\\n  \\"TotalCount\\": 15\\n}","errorExample":""},{"type":"xml","example":"<DescribeImageCachesResponse>\\n    <RequestId>39FC2E43-3DD7-4CEF-9EF4-E4AD6E635301</RequestId>\\n    <ImageCaches>\\n        <Images>registry-vpc.cn-hangzhou.aliyuncs.com/eci_open/nginx:1.15.10-perl</Images>\\n        <CreationTime>2021-02-09T02:24:07Z</CreationTime>\\n        <Status>Ready</Status>\\n        <Progress>100%</Progress>\\n        <ExpireDateTime>2019-11-10T09:00:48Z</ExpireDateTime>\\n        <LastMatchedTime>2021-08-18T03:48:10Z</LastMatchedTime>\\n        <ContainerGroupId>eci-bp18oq3m15prd9jb****</ContainerGroupId>\\n        <Tags>\\n            <Key>imc</Key>\\n            <Value>test</Value>\\n        </Tags>\\n        <Events>\\n            <Type>Normal</Type>\\n            <LastTimestamp>2021-02-09T02:24:48Z</LastTimestamp>\\n            <Message>Successfully check image cache resource.</Message>\\n            <Name>imagetest.1661f31f851a****</Name>\\n            <Count>1</Count>\\n            <FirstTimestamp>2021-02-09T02:24:48Z</FirstTimestamp>\\n        </Events>\\n        <ImageCacheId>imc-bp195erqe9o2pb09****</ImageCacheId>\\n        <RegionId>cn-beijing</RegionId>\\n        <SnapshotId>s-2zec5oj8e1yhxijt****</SnapshotId>\\n        <FlashSnapshotId>s-bp12w3v37sit96t6****</FlashSnapshotId>\\n        <ResourceGroupId>rg-2df3isufhi38****</ResourceGroupId>\\n        <ImageCacheSize>20</ImageCacheSize>\\n        <ImageCacheName>imagetest</ImageCacheName>\\n        <EliminationStrategy>LRU</EliminationStrategy>\\n    </ImageCaches>\\n    <NextToken>AAAAAdDWBF2****</NextToken>\\n    <TotalCount>15</TotalCount>\\n</DescribeImageCachesResponse>","errorExample":""}]',
      'title' => '批量查询镜像缓存信息',
      'summary' => '调用DescribeImageCaches批量查询镜像缓存信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateDataCache' => 
    array (
      'summary' => '创建一个数据缓存。',
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
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建数据缓存过程中生成的ECI实例所属的安全组ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'sg-2ze81zoc3yl7a3we****',
          ),
        ),
        3 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建数据缓存过程中生成的ECI实例所属的交换机ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'vsw-bp1jrgfqqy54kg5hc****',
          ),
        ),
        4 => 
        array (
          'name' => 'Bucket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据的存储空间。默认为default。支持自定义，以便进行业务分组和避免路径冲突。

> eci-system为ECI保留空间，不可使用。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        5 => 
        array (
          'name' => 'Path',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据存储的路径。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '/model/test',
          ),
        ),
        6 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        7 => 
        array (
          'name' => 'Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存大小。单位为GiB，默认为20 GiB。请根据实际数据量评估所需大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        8 => 
        array (
          'name' => 'DataSource',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '数据源。',
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'description' => '数据源类型。取值范围：
- URL
- NAS
- OSS
- SNAPSHOT',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'NAS' => 'NAS',
                  'SNAPSHOT' => 'SNAPSHOT',
                  'URL' => 'URL',
                  'OSS' => 'OSS',
                ),
                'example' => 'URL',
              ),
              'Options' => 
              array (
                'description' => '数据源的配置参数。',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'example' => '{
	"#10#repoSource": "HuggingFace/Model",
	"#6#repoId": "stabilityai/stable-diffusion-2-1"
}',
                  'description' => '数据源的配置参数。不同类型数据源要传入的参数不同。各类型数据源及其配置参数说明，请参见[创建数据缓存](~~2391456~~)。',
                ),
              ),
            ),
            'required' => false,
            'docRequired' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'RetentionDays',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保留天数。过期会被清理。默认不过期。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '7',
          ),
        ),
        10 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '数据缓存绑定的标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '数据缓存绑定的标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testkey',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testvalue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        11 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-2df3isufhi38****',
          ),
        ),
        12 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-****-12d3-****-426655440000',
          ),
        ),
        13 => 
        array (
          'name' => 'EipInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定已有的弹性公网IP（EIP）。
如果VPC没有配置NAT网关，可以绑定EIP，以便拉取公网数据。',
            'type' => 'string',
            'required' => false,
            'example' => 'eip-uf66jeqopgqa9hdn****',
          ),
        ),
        14 => 
        array (
          'name' => 'EipCreateParam',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '创建一个弹性公网IP（EIP）并绑定。
如果VPC没有配置NAT网关，可以绑定EIP，以便拉取公网数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Bandwidth' => 
              array (
                'description' => 'EIP带宽。单位为Mbps。默认为5 Mbps。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '10',
              ),
              'CommonBandwidthPackage' => 
              array (
                'description' => '绑定已有的共享带宽包。',
                'type' => 'string',
                'required' => false,
                'example' => 'cbwp-2zeukbj916scmj51m****',
              ),
              'InternetChargeType' => 
              array (
                'description' => 'EIP的计量方式。取值范围：

- PayByBandwidth：按带宽计费
- PayByTraffic：按流量计费',
                'type' => 'string',
                'required' => false,
                'example' => 'PayByTraffic',
              ),
              'PublicIpAddressPoolId' => 
              array (
                'description' => 'IP地址池ID。
EIP将从该IP地址池中分配。
IP地址池功能默认不开放。如需使用，请在配额中心申请IP地址池功能权益配额。',
                'type' => 'string',
                'required' => false,
                'example' => 'pippool-2vc4xdtjhwl4t0go5****',
              ),
              'ISP' => 
              array (
                'description' => 'EIP的线路类型。取值范围：

- BGP（默认值）：BGP（多线）线路
- BGP_PRO：BGP（多线）精品线路',
                'type' => 'string',
                'required' => false,
                'example' => 'BGP',
              ),
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
                'example' => 'D81A4A13-6DCC-4579-AC62-90A6C3EC7BBC',
              ),
              'DataCacheId' => 
              array (
                'description' => '数据缓存ID。',
                'type' => 'string',
                'example' => 'edc-bp15l4vvys94oo******',
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
            'errorCode' => 'Account.Arrearage',
            'errorMessage' => 'Your account has an outstanding payment.',
          ),
          1 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.CPU.Memory',
            'errorMessage' => 'The specified cpu and memory are not allowed',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectStatus',
            'errorMessage' => '%s',
          ),
          4 => 
          array (
            'errorCode' => 'ServiceNotEnabled',
            'errorMessage' => '%s',
          ),
          5 => 
          array (
            'errorCode' => 'DiskVolume.NotSupport',
            'errorMessage' => 'The disk volume is not supported.',
          ),
          6 => 
          array (
            'errorCode' => 'RamRole.NotSupport',
            'errorMessage' => 'The RAM role is not supported.',
          ),
          7 => 
          array (
            'errorCode' => 'ImageCache.IncorrectStatus',
            'errorMessage' => '%s',
          ),
          8 => 
          array (
            'errorCode' => 'ImageCacheNotSupport',
            'errorMessage' => 'Image cache is not available for all users. If you want to enable this function, contact us.',
          ),
          9 => 
          array (
            'errorCode' => 'EipAddressPoolIpNotEnough',
            'errorMessage' => 'The ip address of specified PublicIpAddressPool is not enough.',
          ),
          10 => 
          array (
            'errorCode' => 'DryRun.Success',
            'errorMessage' => 'This request is a dryrun request with successful result.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.VswZoneMisMatch',
            'errorMessage' => 'The specified VSwitchId is not in the specified Zone.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded',
            'errorMessage' => '%s quota exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'Zone.NotOnSale',
            'errorMessage' => 'The specified zone is not available for purchase.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'This operation has been identified as an abnormal operation and cannot be processed.',
          ),
          4 => 
          array (
            'errorCode' => 'Forbidden.SubUser',
            'errorMessage' => 'The specified action is not available for you.',
          ),
          5 => 
          array (
            'errorCode' => 'Forbidden.OnlyForInvitedTest',
            'errorMessage' => 'Eci create action is only open to invited users during public beta.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.SecurityGroupMisMatch',
            'errorMessage' => 'The specified VSwitchId and SecurityGroupId are not in the same VPC.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidVSwitchId.IpNotEnough',
            'errorMessage' => 'The specified VSwitch does not have enough IP addresses.',
          ),
          8 => 
          array (
            'errorCode' => 'Forbidden.UserBussinessStatus',
            'errorMessage' => 'This operation is not allowed, because you have overdue bills. Pay the overdue bill and try again.',
          ),
          9 => 
          array (
            'errorCode' => 'Forbidden.UserNotRealNameAuthentication',
            'errorMessage' => 'This operation is not allowed, because you have not passed the real-name verification.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidUser.PassRoleForbidden',
            'errorMessage' => 'The RAM user is not authorized to assume a RAM role.',
          ),
          11 => 
          array (
            'errorCode' => 'OperationDenied.NoStock',
            'errorMessage' => 'Sales of this resource are temporarily suspended in the specified zone. We recommend that you use the multi-zone creation function to avoid the risk of insufficient resource. For more information, see https://help.aliyun.com/document_detail/157290.html',
          ),
          12 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'The RAM role AliyunECIContainerGroupRole does not belong to eci.aliyuncs.com. Please check and try again.',
          ),
          13 => 
          array (
            'errorCode' => 'SecurityRisk.3DVerification',
            'errorMessage' => 'We have detected a security risk with your default credit or debit card. Please proceed with verification via the link in your email.',
          ),
          14 => 
          array (
            'errorCode' => 'CreateServiceLinkedRole.Denied',
            'errorMessage' => 'Please make sure the account has ram:CreateServiceLinkedRole permission.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D81A4A13-6DCC-4579-AC62-90A6C3EC7BBC\\",\\n  \\"DataCacheId\\": \\"edc-bp15l4vvys94oo******\\"\\n}","type":"json"}]',
      'title' => '创建数据缓存',
      'description' => '- 创建镜像缓存涉及资源计费。建议您提前了解相关计费信息。更多信息，请参见[数据缓存计费](~~2503093~~)。
- 创建镜像缓存前，您需要评估待缓存数据的大小，如果数据大小超过设置的缓存大小，将会创建失败。
- 创建数据缓存时，系统将自动创建一个ECI实例和一块ESSD云盘用于中转创建数据缓存。创建过程中请勿删除ECI实例和云盘，否则数据缓存将创建失败。
- 创建数据缓存将生成对应的快照。请勿删除快照，否则数据缓存将会失效。',
    ),
    'DescribeDataCaches' => 
    array (
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
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'DataCacheId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '数据缓存ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '数据缓存ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'edc-bp1a7n7uawwwol******',
            ),
            'required' => false,
            'docRequired' => false,
            'maxItems' => 100,
          ),
        ),
        3 => 
        array (
          'name' => 'Bucket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存Bucket。默认为default。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        4 => 
        array (
          'name' => 'Path',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存对应Virtual Host的目录。',
            'type' => 'string',
            'required' => false,
            'example' => '/data/models/',
          ),
        ),
        5 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testkey',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testvalue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmzw2jz2z****',
          ),
        ),
        7 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '查询结果条数上限。默认值和最大值为20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        8 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
            'type' => 'string',
            'required' => false,
            'example' => 'd78f2dd8-5979-42fe-****-b16db43be5bc',
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
                'example' => 'B8756BA0-6452-419C-9727-37A6209C85E0',
              ),
              'DataCaches' => 
              array (
                'description' => '数据缓存信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据缓存信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DataCacheId' => 
                    array (
                      'description' => '数据缓存ID。',
                      'type' => 'string',
                      'example' => 'edc-bp15l4vvys94oo******
',
                    ),
                    'CreationTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2023-06-16T02:43Z',
                    ),
                    'Status' => 
                    array (
                      'description' => '数据缓存状态。可能值：

- Loading：缓存数据中
- Creating：创建中
- Available：创建成功
- Failed：创建失败
- Updating：更新中
- UpdateFailed：更新失败

当状态为Available时，即可使用该数据缓存。',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                    'Progress' => 
                    array (
                      'description' => '创建进度。',
                      'type' => 'string',
                      'example' => '100%',
                    ),
                    'LastMatchedTime' => 
                    array (
                      'description' => '最新一次匹配数据缓存的时间。',
                      'type' => 'string',
                      'example' => '2023-06-18T02:43Z',
                    ),
                    'ExpireDateTime' => 
                    array (
                      'description' => '到期时间。',
                      'type' => 'string',
                      'example' => '2023-06-26T02:43Z
',
                    ),
                    'ContainerGroupId' => 
                    array (
                      'description' => '创建数据缓存过程中，生成的ECI实例ID。',
                      'type' => 'string',
                      'example' => 'eci-8vb1y2w1dv7zeirn****',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键。',
                            'type' => 'string',
                            'example' => 'testkey',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => 'testvalue',
                          ),
                        ),
                      ),
                    ),
                    'Events' => 
                    array (
                      'description' => '事件列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '事件列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Type' => 
                          array (
                            'description' => '事件类型。可能值：

- Normal
- Warning',
                            'type' => 'string',
                            'example' => 'Normal',
                          ),
                          'LastTimestamp' => 
                          array (
                            'description' => '事件结束时间。',
                            'type' => 'string',
                            'example' => '2021-06-16T02:24:48Z',
                          ),
                          'Message' => 
                          array (
                            'description' => '事件信息。',
                            'type' => 'string',
                            'example' => 'Successfully check data cache resource.',
                          ),
                          'Name' => 
                          array (
                            'description' => '事件名称。',
                            'type' => 'string',
                            'example' => 'datacache',
                          ),
                          'Count' => 
                          array (
                            'description' => '事件数。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'FirstTimestamp' => 
                          array (
                            'description' => '事件开始时间。',
                            'type' => 'string',
                            'example' => '2021-06-16T02:14:48Z',
                          ),
                          'Reason' => 
                          array (
                            'description' => '事件原因。',
                            'type' => 'string',
                            'example' => 'Started',
                          ),
                        ),
                      ),
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'SnapshotId' => 
                    array (
                      'description' => '快照ID。',
                      'type' => 'string',
                      'example' => 's-2zec5oj8e1yhxijt****',
                    ),
                    'FlashSnapshotId' => 
                    array (
                      'description' => '本地快照ID。',
                      'type' => 'string',
                      'example' => 's-bp12w3v37sit96t6****
',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-aek2hlt3ux4****',
                    ),
                    'Size' => 
                    array (
                      'description' => '数据缓存大小。单位为GiB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '20',
                    ),
                    'Name' => 
                    array (
                      'description' => '数据缓存名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'DataSource' => 
                    array (
                      'description' => '数据源信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '数据源类型。可能值：

- NAS
- OSS
- URL
- SNAPSHOT',
                          'type' => 'string',
                          'example' => 'URL',
                        ),
                        'Options' => 
                        array (
                          'description' => '数据源的配置参数。',
                          'type' => 'string',
                          'example' => '{
      "options": {
            "path": "/",
            "server": "0ce1f4****-or***.cn-hangzhou.nas.aliyuncs.com",
            "vers": "3",
            "options": "nolock,proto=tcp,rsize=1048576,wsize=1048576,hard,timeo=600,retrans=2,noresvport"
      },
      "type": "NAS"
}',
                        ),
                      ),
                    ),
                    'Bucket' => 
                    array (
                      'description' => '数据缓存Bucket。',
                      'type' => 'string',
                      'example' => 'default',
                    ),
                    'Path' => 
                    array (
                      'description' => '数据缓存对应Virtual Host的目录。',
                      'type' => 'string',
                      'example' => '/data/models/',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                'type' => 'string',
                'example' => 'd78f2dd8-5979-42fe-xaee-b16db43be5bc',
              ),
              'TotalCount' => 
              array (
                'description' => '符合查询条件的结果条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
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
            'errorCode' => 'Account.Arrearage',
            'errorMessage' => 'Your account has an outstanding payment.',
          ),
          1 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          2 => 
          array (
            'errorCode' => 'ServiceNotEnabled',
            'errorMessage' => '%s',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.SubUser',
            'errorMessage' => 'The specified action is not available for you.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.UserBussinessStatus',
            'errorMessage' => 'This operation is not allowed, because you have overdue bills. Pay the overdue bill and try again.',
          ),
          2 => 
          array (
            'errorCode' => 'Forbidden.UserNotRealNameAuthentication',
            'errorMessage' => 'This operation is not allowed, because you have not passed the real-name verification.',
          ),
          3 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'The RAM role does not belong to ECS.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B8756BA0-6452-419C-9727-37A6209C85E0\\",\\n  \\"DataCaches\\": [\\n    {\\n      \\"DataCacheId\\": \\"edc-bp15l4vvys94oo******\\\\n\\",\\n      \\"CreationTime\\": \\"2023-06-16T02:43Z\\",\\n      \\"Status\\": \\"Available\\",\\n      \\"Progress\\": \\"100%\\",\\n      \\"LastMatchedTime\\": \\"2023-06-18T02:43Z\\",\\n      \\"ExpireDateTime\\": \\"2023-06-26T02:43Z\\\\n\\",\\n      \\"ContainerGroupId\\": \\"eci-8vb1y2w1dv7zeirn****\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"testkey\\",\\n          \\"Value\\": \\"testvalue\\"\\n        }\\n      ],\\n      \\"Events\\": [\\n        {\\n          \\"Type\\": \\"Normal\\",\\n          \\"LastTimestamp\\": \\"2021-06-16T02:24:48Z\\",\\n          \\"Message\\": \\"Successfully check data cache resource.\\",\\n          \\"Name\\": \\"datacache\\",\\n          \\"Count\\": 1,\\n          \\"FirstTimestamp\\": \\"2021-06-16T02:14:48Z\\",\\n          \\"Reason\\": \\"Started\\"\\n        }\\n      ],\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"SnapshotId\\": \\"s-2zec5oj8e1yhxijt****\\",\\n      \\"FlashSnapshotId\\": \\"s-bp12w3v37sit96t6****\\\\n\\",\\n      \\"ResourceGroupId\\": \\"rg-aek2hlt3ux4****\\",\\n      \\"Size\\": 20,\\n      \\"Name\\": \\"test\\",\\n      \\"DataSource\\": {\\n        \\"Type\\": \\"URL\\",\\n        \\"Options\\": \\"{\\\\n      \\\\\\"options\\\\\\": {\\\\n            \\\\\\"path\\\\\\": \\\\\\"/\\\\\\",\\\\n            \\\\\\"server\\\\\\": \\\\\\"0ce1f4****-or***.cn-hangzhou.nas.aliyuncs.com\\\\\\",\\\\n            \\\\\\"vers\\\\\\": \\\\\\"3\\\\\\",\\\\n            \\\\\\"options\\\\\\": \\\\\\"nolock,proto=tcp,rsize=1048576,wsize=1048576,hard,timeo=600,retrans=2,noresvport\\\\\\"\\\\n      },\\\\n      \\\\\\"type\\\\\\": \\\\\\"NAS\\\\\\"\\\\n}\\"\\n      },\\n      \\"Bucket\\": \\"default\\",\\n      \\"Path\\": \\"/data/models/\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"d78f2dd8-5979-42fe-xaee-b16db43be5bc\\",\\n  \\"TotalCount\\": 2\\n}","type":"json"}]',
      'title' => '查询数据缓存',
      'summary' => '查询数据缓存信息。',
    ),
    'UpdateDataCache' => 
    array (
      'summary' => '更新一个数据缓存。',
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'DataCacheId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'edc-bp1a7n7uawwwol******',
          ),
        ),
        3 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全组ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'sg-2ze81zoc3yl7a3we****',
          ),
        ),
        4 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'vsw-2ze23nqzig8inprou****',
          ),
        ),
        5 => 
        array (
          'name' => 'Bucket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存Bucket。默认为default。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        6 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        7 => 
        array (
          'name' => 'Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        8 => 
        array (
          'name' => 'DataSource',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '数据源信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'description' => '数据源类型。取值范围：

- URL
- NAS
- OSS
- SNAPSHOT',
                'type' => 'string',
                'required' => false,
                'example' => 'URL',
              ),
              'Options' => 
              array (
                'description' => '数据源的配置参数。',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'example' => '{
      "#10#repoSource": "HuggingFace/Model",
      "#6#repoId": "stabilityai/stable-diffusion-2-1"
}',
                  'description' => '数据源的配置参数。不同类型数据源要传入的参数不同。各类型数据源及其配置参数说明，请参见[创建数据缓存](~~2391456~~)。',
                ),
              ),
            ),
            'required' => false,
            'docRequired' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'RetentionDays',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保留天数。过期会被清理。默认不过期。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '7',
          ),
        ),
        10 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmzw2jz2z****',
          ),
        ),
        11 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testkey',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testvalue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        12 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '2f22dc16-cad0-4d3f-87e5-91e604756547',
          ),
        ),
        13 => 
        array (
          'name' => 'EipInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性公网IP。如果VPC没有配置NAT网关，可以绑定弹性公网IP，以便拉取公网数据。',
            'type' => 'string',
            'required' => false,
            'example' => 'eip-2zedsm5mfl3uhdj2d****',
          ),
        ),
        14 => 
        array (
          'name' => 'EipCreateParam',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '创建一个弹性公网IP（EIP）并绑定。
如果VPC没有配置NAT网关，可以绑定EIP，以便拉取公网数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Bandwidth' => 
              array (
                'description' => 'EIP带宽。单位为Mbps。默认为5 Mbps。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '10',
              ),
              'CommonBandwidthPackage' => 
              array (
                'description' => '绑定已有的共享带宽包。',
                'type' => 'string',
                'required' => false,
                'example' => 'cbwp-2zeukbj916scmj51m****',
              ),
              'InternetChargeType' => 
              array (
                'description' => 'EIP的计量方式。取值范围：

- PayByBandwidth：按带宽计费
- PayByTraffic：按流量计费',
                'type' => 'string',
                'required' => false,
                'example' => 'PayByTraffic',
              ),
              'PublicIpAddressPoolId' => 
              array (
                'description' => 'IP地址池ID。
EIP将从该IP地址池中分配。
IP地址池功能默认不开放。如需使用，请在配额中心申请IP地址池功能权益配额。',
                'type' => 'string',
                'required' => false,
                'example' => 'pippool-bp187arfugi543y1s****',
              ),
              'ISP' => 
              array (
                'description' => 'EIP的线路类型。取值范围：

- BGP（默认值）：BGP（多线）线路
- BGP_PRO：BGP（多线）精品线路',
                'type' => 'string',
                'required' => false,
                'example' => 'BGP',
              ),
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
                'example' => 'BD8BBB43-8E05-5F46-89A9-2512D8A324A2',
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
            'errorCode' => 'Account.Arrearage',
            'errorMessage' => 'Your account has an outstanding payment.',
          ),
          1 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.CPU.Memory',
            'errorMessage' => 'The specified cpu and memory are not allowed',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectStatus',
            'errorMessage' => '%s',
          ),
          4 => 
          array (
            'errorCode' => 'ServiceNotEnabled',
            'errorMessage' => '%s',
          ),
          5 => 
          array (
            'errorCode' => 'DiskVolume.NotSupport',
            'errorMessage' => 'The disk volume is not supported.',
          ),
          6 => 
          array (
            'errorCode' => 'RamRole.NotSupport',
            'errorMessage' => 'The RAM role is not supported.',
          ),
          7 => 
          array (
            'errorCode' => 'ImageCache.IncorrectStatus',
            'errorMessage' => '%s',
          ),
          8 => 
          array (
            'errorCode' => 'ImageCacheNotSupport',
            'errorMessage' => 'Image cache is not available for all users. If you want to enable this function, contact us.',
          ),
          9 => 
          array (
            'errorCode' => 'EipAddressPoolIpNotEnough',
            'errorMessage' => 'The ip address of specified PublicIpAddressPool is not enough.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.VswZoneMisMatch',
            'errorMessage' => 'The specified VSwitchId is not in the specified Zone.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded',
            'errorMessage' => '%s quota exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'Zone.NotOnSale',
            'errorMessage' => 'The specified zone is not available for purchase.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'This operation has been identified as an abnormal operation and cannot be processed.',
          ),
          4 => 
          array (
            'errorCode' => 'Forbidden.SubUser',
            'errorMessage' => 'The specified action is not available for you.',
          ),
          5 => 
          array (
            'errorCode' => 'Forbidden.OnlyForInvitedTest',
            'errorMessage' => 'Eci create action is only open to invited users during public beta.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.SecurityGroupMisMatch',
            'errorMessage' => 'The specified VSwitchId and SecurityGroupId are not in the same VPC.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidVSwitchId.IpNotEnough',
            'errorMessage' => 'The specified VSwitch does not have enough IP addresses.',
          ),
          8 => 
          array (
            'errorCode' => 'Forbidden.UserBussinessStatus',
            'errorMessage' => 'This operation is not allowed, because you have overdue bills. Pay the overdue bill and try again.',
          ),
          9 => 
          array (
            'errorCode' => 'Forbidden.UserNotRealNameAuthentication',
            'errorMessage' => 'This operation is not allowed, because you have not passed the real-name verification.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidUser.PassRoleForbidden',
            'errorMessage' => 'The RAM user is not authorized to assume a RAM role.',
          ),
          11 => 
          array (
            'errorCode' => 'OperationDenied.NoStock',
            'errorMessage' => 'Sales of this resource are temporarily suspended in the specified zone. We recommend that you use the multi-zone creation function to avoid the risk of insufficient resource. For more information, see https://help.aliyun.com/document_detail/157290.html',
          ),
          12 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'The RAM role AliyunECIContainerGroupRole does not belong to eci.aliyuncs.com. Please check and try again.',
          ),
          13 => 
          array (
            'errorCode' => 'SecurityRisk.3DVerification',
            'errorMessage' => 'We have detected a security risk with your default credit or debit card. Please proceed with verification via the link in your email.',
          ),
          14 => 
          array (
            'errorCode' => 'CreateServiceLinkedRole.Denied',
            'errorMessage' => 'Please make sure the account has ram:CreateServiceLinkedRole permission.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BD8BBB43-8E05-5F46-89A9-2512D8A324A2\\"\\n}","type":"json"}]',
      'title' => '更新数据缓存',
    ),
    'CopyDataCache' => 
    array (
      'summary' => '将数据缓存从一个地域拷贝到另一个地域。',
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
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已有数据缓存所在地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已有数据缓存所在地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-beijing',
          ),
        ),
        2 => 
        array (
          'name' => 'Bucket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存Bucket。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        3 => 
        array (
          'name' => 'Path',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存路径',
            'type' => 'string',
            'required' => false,
            'example' => '/bucket-test',
          ),
        ),
        4 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'test',
          ),
        ),
        5 => 
        array (
          'name' => 'RetentionDays',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存保留天数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '7',
          ),
        ),
        6 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '数据缓存标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '数据缓存标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testkey',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testvalue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存所属资源组 。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-2df3isufhi38****',
          ),
        ),
        8 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000	',
          ),
        ),
        9 => 
        array (
          'name' => 'DataCacheId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'edc-bp15l4vvys94oo******
',
          ),
        ),
        10 => 
        array (
          'name' => 'DestinationRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要拷贝到的目的地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '58EE0CB3-C864-5395-A4F7-24F425074839',
              ),
              'DataCacheId' => 
              array (
                'description' => '拷贝到新的地域后，生成的数据缓存ID。',
                'type' => 'string',
                'example' => 'edc-bp1423y6d7v7l6ua****',
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
            'errorCode' => 'Account.Arrearage',
            'errorMessage' => 'Your account has an outstanding payment.',
          ),
          1 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.CPU.Memory',
            'errorMessage' => 'The specified cpu and memory are not allowed',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectStatus',
            'errorMessage' => '%s',
          ),
          4 => 
          array (
            'errorCode' => 'ServiceNotEnabled',
            'errorMessage' => '%s',
          ),
          5 => 
          array (
            'errorCode' => 'DiskVolume.NotSupport',
            'errorMessage' => 'The disk volume is not supported.',
          ),
          6 => 
          array (
            'errorCode' => 'RamRole.NotSupport',
            'errorMessage' => 'The RAM role is not supported.',
          ),
          7 => 
          array (
            'errorCode' => 'ImageCache.IncorrectStatus',
            'errorMessage' => '%s',
          ),
          8 => 
          array (
            'errorCode' => 'ImageCacheNotSupport',
            'errorMessage' => 'Image cache is not available for all users. If you want to enable this function, contact us.',
          ),
          9 => 
          array (
            'errorCode' => 'EipAddressPoolIpNotEnough',
            'errorMessage' => 'The ip address of specified PublicIpAddressPool is not enough.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.VswZoneMisMatch',
            'errorMessage' => 'The specified VSwitchId is not in the specified Zone.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded',
            'errorMessage' => '%s quota exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'Zone.NotOnSale',
            'errorMessage' => 'The specified zone is not available for purchase.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'This operation has been identified as an abnormal operation and cannot be processed.',
          ),
          4 => 
          array (
            'errorCode' => 'Forbidden.SubUser',
            'errorMessage' => 'The specified action is not available for you.',
          ),
          5 => 
          array (
            'errorCode' => 'Forbidden.OnlyForInvitedTest',
            'errorMessage' => 'Eci create action is only open to invited users during public beta.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.SecurityGroupMisMatch',
            'errorMessage' => 'The specified VSwitchId and SecurityGroupId are not in the same VPC.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidVSwitchId.IpNotEnough',
            'errorMessage' => 'The specified VSwitch does not have enough IP addresses.',
          ),
          8 => 
          array (
            'errorCode' => 'Forbidden.UserBussinessStatus',
            'errorMessage' => 'This operation is not allowed, because you have overdue bills. Pay the overdue bill and try again.',
          ),
          9 => 
          array (
            'errorCode' => 'Forbidden.UserNotRealNameAuthentication',
            'errorMessage' => 'This operation is not allowed, because you have not passed the real-name verification.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidUser.PassRoleForbidden',
            'errorMessage' => 'The RAM user is not authorized to assume a RAM role.',
          ),
          11 => 
          array (
            'errorCode' => 'OperationDenied.NoStock',
            'errorMessage' => 'Sales of this resource are temporarily suspended in the specified zone. We recommend that you use the multi-zone creation function to avoid the risk of insufficient resource. For more information, see https://help.aliyun.com/document_detail/157290.html',
          ),
          12 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'The RAM role AliyunECIContainerGroupRole does not belong to eci.aliyuncs.com. Please check and try again.',
          ),
          13 => 
          array (
            'errorCode' => 'SecurityRisk.3DVerification',
            'errorMessage' => 'We have detected a security risk with your default credit or debit card. Please proceed with verification via the link in your email.',
          ),
          14 => 
          array (
            'errorCode' => 'CreateServiceLinkedRole.Denied',
            'errorMessage' => 'Please make sure the account has ram:CreateServiceLinkedRole permission.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58EE0CB3-C864-5395-A4F7-24F425074839\\",\\n  \\"DataCacheId\\": \\"edc-bp1423y6d7v7l6ua****\\"\\n}","type":"json"}]',
      'title' => '拷贝数据缓存',
      'description' => '数据缓存不支持直接跨地域使用，通过本接口可以将数据缓存从一个地域拷贝到另一个地域。该接口适用于以下场景：
- 需要在多个地域使用数据缓存，在A地域已有数据缓存的情况，可以通过本接口快速拷贝到B地域。
- 对于中国内地地域的用户，创建数据缓存时如果直接拉取国外地址的数据，可能会因为网络限制导致数据拉取过慢，此时可以先在非中国内地的地域（例如中国香港）创建数据缓存，然后通过本接口拷贝到中国内地地域。


><notice>拷贝数据缓存的过程相当于复制快照，费用涉及复制过程产生的流量费用以及最终生成的数据缓存的存储费用。></notice>',
    ),
    'DeleteDataCache' => 
    array (
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
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'DataCacheId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'edc-bp1a7n7uawwwol******',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '5e74729e-ce21-4c3e-9163-cbaf0f02768e',
          ),
        ),
        4 => 
        array (
          'name' => 'Bucket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存Bucket。默认为default。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        5 => 
        array (
          'name' => 'Path',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存对应Virtual Host的目录。',
            'type' => 'string',
            'required' => false,
            'example' => '/data/models/',
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
                'example' => 'C0F8A012-1426-5EB2-96F5-B4416DEB5B78',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C0F8A012-1426-5EB2-96F5-B4416DEB5B78\\"\\n}","type":"json"}]',
      'title' => '删除数据缓存',
      'summary' => '删除一个数据缓存。',
    ),
    'CreateVirtualNode' => 
    array (
      'summary' => '调用CreateVirtualNode创建一个虚拟节点（VNode），用于对接自建Kubernetes集群，使其可以扩展资源到ECI。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-b',
          ),
        ),
        3 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全组ID。虚拟节点以及该虚拟节点下的ECI实例将加入到该安全组中。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sg-2ze81zoc3yl7a3we****',
          ),
        ),
        4 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机ID。虚拟节点以及虚拟节点下的ECI实例所使用的交换机。    
支持指定多个（1~10个）属于同一VPC的交换机。    ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vsw-2ze23nqzig8inprou****',
          ),
        ),
        5 => 
        array (
          'name' => 'VirtualNodeName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟节点的名称。长度为2~128个英文字符，可以包含小写英文字符、数字、半角句号（.）或者短划线（-）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'testNode',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-uf66jeqopgqa9hdn****',
          ),
        ),
        7 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        8 => 
        array (
          'name' => 'EnablePublicNetwork',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否支持公网。默认为false。    
如果设置为true，则虚拟节点将对外暴露一个公网IP。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'EipInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性公网IP的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'eip-uf66jeqopgqa9hdn****',
          ),
        ),
        10 => 
        array (
          'name' => 'KubeConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟节点要连接的K8s集群的KubeConfig。需进行Base64编码后传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'JTVDbmFwaVZlcnNpb24lM0ElMjB2MSU1Q25jbHVzdGVycyUzQSU1Q24tJTIwY2x1c3RlciUzQSU1Q24uLi******',
          ),
        ),
        11 => 
        array (
          'name' => 'CustomResources',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟节点支持的自定义资源。如果ECI Pod的request中声明了相应的自定义资源，则该Pod会被调度到VNode。
格式为`资源名称=资源数量`，多个资源之间使用半角逗号间隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'example1.com=100,example2.com=200',
          ),
        ),
        12 => 
        array (
          'name' => 'ClusterDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群的域名。配置后，除了主机的搜索域外，Kubelet会配置所有容器来搜索该域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'example.com',
          ),
        ),
        13 => 
        array (
          'name' => 'ClusterDNS',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS服务器的IP地址。如果ECI Pod中设置了`dnsPolicy=ClusterFirst`，则使用该配置值为容器提供DNS服务。
支持配置多个IP地址，多个IP地址之间使用半角逗号间隔。',
            'type' => 'string',
            'required' => false,
            'example' => '100.1.XX.XX',
          ),
        ),
        14 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '虚拟节点标签信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '虚拟节点标签信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。N的取值范围为1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'name',
                ),
                'Value' => 
                array (
                  'description' => '标签值。N的取值范围为1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        15 => 
        array (
          'name' => 'Taint',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '虚拟节点污点信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '虚拟节点污点信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '污点的Key。N的取值范围为1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testKey',
                ),
                'Value' => 
                array (
                  'description' => '污点的Value。N的取值范围为1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testValue',
                ),
                'Effect' => 
                array (
                  'description' => '污点的Effect。N的取值范围为1~20。Effect的取值范围：

- NoSchedule：不将Pod调度到具有该污点的节点上。
- NoExecute：不将Pod调度到具有该污点的节点上的同时，驱逐节点上已经存在的Pod。
- PreferNoSchedule：尽量不将Pod调度到具有该污点的节点上。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'NoSchedule',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        16 => 
        array (
          'name' => 'TlsBootstrapEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启用TLS启动引导。启用后，请使用TLS启动引导的KubeConfig证书。取值范围：

- true：启用
- false：不启用

默认为false。
',
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
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89164E78-FC82-4684-BE97-DCDD85D26546',
              ),
              'VirtualNodeId' => 
              array (
                'description' => '虚拟节点ID。',
                'type' => 'string',
                'example' => 'vnd-2ze960zkdqrldeaw****',
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
            'errorCode' => 'Account.Arrearage',
            'errorMessage' => 'Your account has an outstanding payment.',
          ),
          1 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.CPU.Memory',
            'errorMessage' => 'The specified cpu and memory are not allowed',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.DuplicatedName',
            'errorMessage' => 'The container group include containers with duplicate names.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.DuplicatedVolumeName',
            'errorMessage' => 'The container group includes volumes with duplicate names.',
          ),
          5 => 
          array (
            'errorCode' => 'IncorrectStatus',
            'errorMessage' => '%s',
          ),
          6 => 
          array (
            'errorCode' => 'ServiceNotEnabled',
            'errorMessage' => '%s',
          ),
          7 => 
          array (
            'errorCode' => 'ImageSnapshot.IncorrectStatus',
            'errorMessage' => '%s',
          ),
          8 => 
          array (
            'errorCode' => 'ImageSnapshot.NotSupport',
            'errorMessage' => '%s',
          ),
          9 => 
          array (
            'errorCode' => 'DiskVolume.NotSupport',
            'errorMessage' => 'The disk volume is not supported.',
          ),
          10 => 
          array (
            'errorCode' => 'RamRole.NotSupport',
            'errorMessage' => 'The RAM role is not supported.',
          ),
          11 => 
          array (
            'errorCode' => 'DiskNumber.LimitExceed',
            'errorMessage' => 'The maximum number of disks in an instance is exceeded.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidPaymentMethod.InsufficientBalance',
            'errorMessage' => 'No payment method is specified for your account. We recommend that you add a payment method or add funds to the prepayment balance.',
          ),
          13 => 
          array (
            'errorCode' => 'DiskVolume.NotInSameZone',
            'errorMessage' => 'The instance to be created and the disk are not in the same zone.',
          ),
          14 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to use the "Product on ECI" feature.',
          ),
          15 => 
          array (
            'errorCode' => 'HighCpuMemConfigRequired',
            'errorMessage' => 'You need to apply to be added to the whitelist of the specified CPU and memory.',
          ),
          16 => 
          array (
            'errorCode' => 'RecommendEmpty.InstanceTypeFamilyNotMatched',
            'errorMessage' => 'The recommended instance type is unavailable in the current zone. Try again later.',
          ),
          17 => 
          array (
            'errorCode' => 'LocalDiskAmountNotMatch',
            'errorMessage' => 'The number of local volumes does not match the instance type.',
          ),
          18 => 
          array (
            'errorCode' => 'Payfor.CreditPayInsufficientBalance',
            'errorMessage' => 'Your payment credit line is insufficient.',
          ),
          19 => 
          array (
            'errorCode' => 'InvalidOperation.KMS.InstanceTypeNotSupport',
            'errorMessage' => 'The specified instance is invalid. Only I/O optimized instances support KMS key.',
          ),
          20 => 
          array (
            'errorCode' => 'InvalidParameter.Encrypted.KmsNotEnabled',
            'errorMessage' => 'KMS must be enabled for encrypted disks.',
          ),
          21 => 
          array (
            'errorCode' => 'InvalidParameter.KMS.EncryptedIllegal',
            'errorMessage' => 'After configuring the parameter KmsKeyId, you must enable encryption.',
          ),
          22 => 
          array (
            'errorCode' => 'Ipv6AddressNotSupportVsw',
            'errorMessage' => 'IPv6 is not supported in the specified vSwitch.',
          ),
          23 => 
          array (
            'errorCode' => 'EipAddressPoolIpNotEnough',
            'errorMessage' => 'The ip address of specified PublicIpAddressPool is not enough.',
          ),
          24 => 
          array (
            'errorCode' => 'VnodeDedicatedHostIdAlreadyExist',
            'errorMessage' => 'DedicatedHostId:%s of Vnode:%s already exists.',
          ),
          25 => 
          array (
            'errorCode' => 'DedicatedHostQuotaExceeded',
            'errorMessage' => 'The quota of DedicatedHost is exceeded.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.VswZoneMisMatch',
            'errorMessage' => 'The specified VSwitchId is not in the specified Zone.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded',
            'errorMessage' => '%s quota exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'Zone.NotOnSale',
            'errorMessage' => 'The specified zone is not available for purchase.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'This operation has been identified as an abnormal operation and cannot be processed.',
          ),
          4 => 
          array (
            'errorCode' => 'Forbidden.SubUser',
            'errorMessage' => 'The specified action is not available for you.',
          ),
          5 => 
          array (
            'errorCode' => 'Forbidden.OnlyForInvitedTest',
            'errorMessage' => 'Eci create action is only open to invited users during public beta.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.SecurityGroupMisMatch',
            'errorMessage' => 'The specified VSwitchId and SecurityGroupId are not in the same VPC.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidVSwitchId.IpNotEnough',
            'errorMessage' => 'The specified VSwitch does not have enough IP addresses.',
          ),
          8 => 
          array (
            'errorCode' => 'Forbidden.UserBussinessStatus',
            'errorMessage' => 'This operation is not allowed, because you have overdue bills. Pay the overdue bill and try again.',
          ),
          9 => 
          array (
            'errorCode' => 'Forbidden.UserNotRealNameAuthentication',
            'errorMessage' => 'This operation is not allowed, because you have not passed the real-name verification.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidUser.PassRoleForbidden',
            'errorMessage' => 'The RAM user is not authorized to assume a RAM role.',
          ),
          11 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'The RAM role does not belong to ECS.',
          ),
          12 => 
          array (
            'errorCode' => 'OperationDenied.NoStock',
            'errorMessage' => 'Sales of this resource are temporarily suspended in the specified zone. We recommend that you use the multi-zone creation function to avoid the risk of insufficient resource. For more information, see https://help.aliyun.com/document_detail/157290.html',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidParameter.KMS.KeyId.Forbidden',
            'errorMessage' => 'You are not authorized to access the specified KMSKeyId.',
          ),
          14 => 
          array (
            'errorCode' => 'Forbidden.AccountClosed',
            'errorMessage' => 'The operation is forbidden. Your account has been closed.',
          ),
          15 => 
          array (
            'errorCode' => 'InvalidOperation.ResourceManagedByCloudProduct',
            'errorMessage' => 'The operation is forbidden. The security group has been managed by another cloud product.',
          ),
          16 => 
          array (
            'errorCode' => 'Spot.NotMatched',
            'errorMessage' => '%s. We recommend that you use the create multi-zone function to avoid insufficient inventory. For more information, see https://help.aliyun.com/document_detail/157290.html',
          ),
          17 => 
          array (
            'errorCode' => 'SecurityRisk.3DVerification',
            'errorMessage' => 'We have detected a security risk with your default credit or debit card. Please proceed with verification via the link in your email.',
          ),
          18 => 
          array (
            'errorCode' => 'CreateServiceLinkedRole.Denied',
            'errorMessage' => 'Please make sure the account has ram:CreateServiceLinkedRole permission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ImageSnapshot.NotFound',
            'errorMessage' => 'The specified snapshot does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDiskId.NotFound',
            'errorMessage' => 'The specified disk does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.KMS.KeyId.NotFound',
            'errorMessage' => 'The specified KMSKeyId does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"89164E78-FC82-4684-BE97-DCDD85D26546\\",\\n  \\"VirtualNodeId\\": \\"vnd-2ze960zkdqrldeaw****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateVirtualNodeResponse>\\n    <RequestId>89164E78-FC82-4684-BE97-DCDD85D26546</RequestId>\\n    <VirtualNodeId>vnd-2ze960zkdqrldeaw****</VirtualNodeId>\\n</CreateVirtualNodeResponse>","errorExample":""}]',
      'title' => '创建一个虚拟节点',
      'description' => '- 调用本接口创建虚拟节点时，系统将自动为您创建一个服务关联角色AliyunServiceRoleForECIVnode，用于访问ECI、ECS、VPC等相关云服务。更多信息，请参见[虚拟节点服务关联角色](~~311014~~)。

- 虚拟节点按个数计费。每个虚拟节点会有一个常驻节点，相当于2 vCPU，8 GiB的ECI实例，收取相关ECI实例费用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteVirtualNode' => 
    array (
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'VirtualNodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟节点ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vnd-2ze960zkdqrldeaw****',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多详情，请参阅[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
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
                'example' => '89945DD3-9072-47D0-A318-353284CFC7B3',
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
            'errorCode' => 'Account.Arrearage',
            'errorMessage' => 'Your account has an outstanding payment.',
          ),
          1 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.CPU.Memory',
            'errorMessage' => 'The specified cpu and memory are not allowed',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.DuplicatedName',
            'errorMessage' => 'The container group include containers with duplicate names.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.DuplicatedVolumeName',
            'errorMessage' => 'The container group includes volumes with duplicate names.',
          ),
          5 => 
          array (
            'errorCode' => 'IncorrectStatus',
            'errorMessage' => '%s',
          ),
          6 => 
          array (
            'errorCode' => 'ServiceNotEnabled',
            'errorMessage' => '%s',
          ),
          7 => 
          array (
            'errorCode' => 'ImageSnapshot.IncorrectStatus',
            'errorMessage' => '%s',
          ),
          8 => 
          array (
            'errorCode' => 'ImageSnapshot.NotSupport',
            'errorMessage' => '%s',
          ),
          9 => 
          array (
            'errorCode' => 'DiskVolume.NotSupport',
            'errorMessage' => 'The disk volume is not supported.',
          ),
          10 => 
          array (
            'errorCode' => 'RamRole.NotSupport',
            'errorMessage' => 'The RAM role is not supported.',
          ),
          11 => 
          array (
            'errorCode' => 'DiskNumber.LimitExceed',
            'errorMessage' => 'The maximum number of disks in an instance is exceeded.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidPaymentMethod.InsufficientBalance',
            'errorMessage' => 'No payment method is specified for your account. We recommend that you add a payment method or add funds to the prepayment balance.',
          ),
          13 => 
          array (
            'errorCode' => 'DiskVolume.NotInSameZone',
            'errorMessage' => 'The instance to be created and the disk are not in the same zone.',
          ),
          14 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to use the "Product on ECI" feature.',
          ),
          15 => 
          array (
            'errorCode' => 'HighCpuMemConfigRequired',
            'errorMessage' => 'You need to apply to be added to the whitelist of the specified CPU and memory.',
          ),
          16 => 
          array (
            'errorCode' => 'RecommendEmpty.InstanceTypeFamilyNotMatched',
            'errorMessage' => 'The recommended instance type is unavailable in the current zone. Try again later.',
          ),
          17 => 
          array (
            'errorCode' => 'LocalDiskAmountNotMatch',
            'errorMessage' => 'The number of local volumes does not match the instance type.',
          ),
          18 => 
          array (
            'errorCode' => 'Payfor.CreditPayInsufficientBalance',
            'errorMessage' => 'Your payment credit line is insufficient.',
          ),
          19 => 
          array (
            'errorCode' => 'InvalidOperation.KMS.InstanceTypeNotSupport',
            'errorMessage' => 'The specified instance is invalid. Only I/O optimized instances support KMS key.',
          ),
          20 => 
          array (
            'errorCode' => 'InvalidParameter.Encrypted.KmsNotEnabled',
            'errorMessage' => 'KMS must be enabled for encrypted disks.',
          ),
          21 => 
          array (
            'errorCode' => 'InvalidParameter.KMS.EncryptedIllegal',
            'errorMessage' => 'After configuring the parameter KmsKeyId, you must enable encryption.',
          ),
          22 => 
          array (
            'errorCode' => 'Ipv6AddressNotSupportVsw',
            'errorMessage' => 'IPv6 is not supported in the specified vSwitch.',
          ),
          23 => 
          array (
            'errorCode' => 'VirtualNode.DELETE.FAILED',
            'errorMessage' => 'The vnode has eci on it, please delete eci first.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.VswZoneMisMatch',
            'errorMessage' => 'The specified VSwitchId is not in the specified Zone.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded',
            'errorMessage' => '%s quota exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'Zone.NotOnSale',
            'errorMessage' => 'The specified zone is not available for purchase.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'This operation has been identified as an abnormal operation and cannot be processed.',
          ),
          4 => 
          array (
            'errorCode' => 'Forbidden.SubUser',
            'errorMessage' => 'The specified action is not available for you.',
          ),
          5 => 
          array (
            'errorCode' => 'Forbidden.OnlyForInvitedTest',
            'errorMessage' => 'Eci create action is only open to invited users during public beta.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.SecurityGroupMisMatch',
            'errorMessage' => 'The specified VSwitchId and SecurityGroupId are not in the same VPC.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidVSwitchId.IpNotEnough',
            'errorMessage' => 'The specified VSwitch does not have enough IP addresses.',
          ),
          8 => 
          array (
            'errorCode' => 'Forbidden.UserNotRealNameAuthentication',
            'errorMessage' => 'This operation is not allowed, because you have not passed the real-name verification.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidUser.PassRoleForbidden',
            'errorMessage' => 'The RAM user is not authorized to assume a RAM role.',
          ),
          10 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'The RAM role does not belong to ECS.',
          ),
          11 => 
          array (
            'errorCode' => 'OperationDenied.NoStock',
            'errorMessage' => 'Sales of this resource are temporarily suspended in the specified zone. We recommend that you use the multi-zone creation function to avoid the risk of insufficient resource. For more information, see https://help.aliyun.com/document_detail/157290.html',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidParameter.KMS.KeyId.Forbidden',
            'errorMessage' => 'You are not authorized to access the specified KMSKeyId.',
          ),
          13 => 
          array (
            'errorCode' => 'Forbidden.AccountClosed',
            'errorMessage' => 'The operation is forbidden. Your account has been closed.',
          ),
          14 => 
          array (
            'errorCode' => 'InvalidOperation.ResourceManagedByCloudProduct',
            'errorMessage' => 'The operation is forbidden. The security group has been managed by another cloud product.',
          ),
          15 => 
          array (
            'errorCode' => 'Spot.NotMatched',
            'errorMessage' => '%s. We recommend that you use the create multi-zone function to avoid insufficient inventory. For more information, see https://help.aliyun.com/document_detail/157290.html',
          ),
          16 => 
          array (
            'errorCode' => 'SecurityRisk.3DVerification',
            'errorMessage' => 'We have detected a security risk with your default credit or debit card. Please proceed with verification via the link in your email.',
          ),
          17 => 
          array (
            'errorCode' => 'CreateServiceLinkedRole.Denied',
            'errorMessage' => 'Please make sure the account has ram:CreateServiceLinkedRole permission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ImageSnapshot.NotFound',
            'errorMessage' => 'The specified snapshot does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDiskId.NotFound',
            'errorMessage' => 'The specified disk does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.KMS.KeyId.NotFound',
            'errorMessage' => 'The specified KMSKeyId does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"89945DD3-9072-47D0-A318-353284CFC7B3\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteVirtualNodeResponse>\\r\\n    <RequestId>89945DD3-9072-47D0-A318-353284CFC7B3</RequestId>\\r\\n</DeleteVirtualNodeResponse>","errorExample":""}]',
      'title' => '删除一个虚拟节点',
      'summary' => '调用DeleteVirtualNode删除一个虚拟节点。',
      'description' => '调用本接口删除虚拟节点前，请确保该节点下已经没有ECI实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateVirtualNode' => 
    array (
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'VirtualNodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟节点ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vnd-2ze960zkdqrldeaw****',
          ),
        ),
        3 => 
        array (
          'name' => 'VirtualNodeName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟节点名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'testNode',
          ),
        ),
        4 => 
        array (
          'name' => 'CustomResources',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟节点支持的自定义资源。如果ECI Pod的request中声明了相应的自定义资源，则该Pod会被调度到VNode。
格式为`资源名称=资源数量`，多个资源之间使用半角逗号间隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'example1.com=100,example2.com=200',
          ),
        ),
        5 => 
        array (
          'name' => 'ClusterDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群的域名。配置后，除了主机的搜索域外，Kubelet会配置所有容器来搜索该域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'example.com',
          ),
        ),
        6 => 
        array (
          'name' => 'ClusterDNS',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS服务器的IP地址。如果ECI Pod中设置了`dnsPolicy=ClusterFirst`，则使用该配置值为容器提供DNS服务。
支持配置多个IP地址，多个IP地址之间使用半角逗号间隔。',
            'type' => 'string',
            'required' => false,
            'example' => '100.1.XX.XX',
          ),
        ),
        7 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多详情，请参阅[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        8 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '虚拟节点标签信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '虚拟节点标签信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'name',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89945DD3-9072-47D0-A318-353284CFC7B3',
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
            'errorCode' => 'Account.Arrearage',
            'errorMessage' => 'Your account has an outstanding payment.',
          ),
          1 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.CPU.Memory',
            'errorMessage' => 'The specified cpu and memory are not allowed',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.DuplicatedName',
            'errorMessage' => 'The container group include containers with duplicate names.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.DuplicatedVolumeName',
            'errorMessage' => 'The container group includes volumes with duplicate names.',
          ),
          5 => 
          array (
            'errorCode' => 'IncorrectStatus',
            'errorMessage' => '%s',
          ),
          6 => 
          array (
            'errorCode' => 'ServiceNotEnabled',
            'errorMessage' => '%s',
          ),
          7 => 
          array (
            'errorCode' => 'ImageSnapshot.IncorrectStatus',
            'errorMessage' => '%s',
          ),
          8 => 
          array (
            'errorCode' => 'ImageSnapshot.NotSupport',
            'errorMessage' => '%s',
          ),
          9 => 
          array (
            'errorCode' => 'DiskVolume.NotSupport',
            'errorMessage' => 'The disk volume is not supported.',
          ),
          10 => 
          array (
            'errorCode' => 'RamRole.NotSupport',
            'errorMessage' => 'The RAM role is not supported.',
          ),
          11 => 
          array (
            'errorCode' => 'DiskNumber.LimitExceed',
            'errorMessage' => 'The maximum number of disks in an instance is exceeded.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidPaymentMethod.InsufficientBalance',
            'errorMessage' => 'No payment method is specified for your account. We recommend that you add a payment method or add funds to the prepayment balance.',
          ),
          13 => 
          array (
            'errorCode' => 'DiskVolume.NotInSameZone',
            'errorMessage' => 'The instance to be created and the disk are not in the same zone.',
          ),
          14 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to use the "Product on ECI" feature.',
          ),
          15 => 
          array (
            'errorCode' => 'HighCpuMemConfigRequired',
            'errorMessage' => 'You need to apply to be added to the whitelist of the specified CPU and memory.',
          ),
          16 => 
          array (
            'errorCode' => 'RecommendEmpty.InstanceTypeFamilyNotMatched',
            'errorMessage' => 'The recommended instance type is unavailable in the current zone. Try again later.',
          ),
          17 => 
          array (
            'errorCode' => 'LocalDiskAmountNotMatch',
            'errorMessage' => 'The number of local volumes does not match the instance type.',
          ),
          18 => 
          array (
            'errorCode' => 'Payfor.CreditPayInsufficientBalance',
            'errorMessage' => 'Your payment credit line is insufficient.',
          ),
          19 => 
          array (
            'errorCode' => 'InvalidOperation.KMS.InstanceTypeNotSupport',
            'errorMessage' => 'The specified instance is invalid. Only I/O optimized instances support KMS key.',
          ),
          20 => 
          array (
            'errorCode' => 'InvalidParameter.Encrypted.KmsNotEnabled',
            'errorMessage' => 'KMS must be enabled for encrypted disks.',
          ),
          21 => 
          array (
            'errorCode' => 'InvalidParameter.KMS.EncryptedIllegal',
            'errorMessage' => 'After configuring the parameter KmsKeyId, you must enable encryption.',
          ),
          22 => 
          array (
            'errorCode' => 'Ipv6AddressNotSupportVsw',
            'errorMessage' => 'IPv6 is not supported in the specified vSwitch.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.VswZoneMisMatch',
            'errorMessage' => 'The specified VSwitchId is not in the specified Zone.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded',
            'errorMessage' => '%s quota exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'Zone.NotOnSale',
            'errorMessage' => 'The specified zone is not available for purchase.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'This operation has been identified as an abnormal operation and cannot be processed.',
          ),
          4 => 
          array (
            'errorCode' => 'Forbidden.SubUser',
            'errorMessage' => 'The specified action is not available for you.',
          ),
          5 => 
          array (
            'errorCode' => 'Forbidden.OnlyForInvitedTest',
            'errorMessage' => 'Eci create action is only open to invited users during public beta.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.SecurityGroupMisMatch',
            'errorMessage' => 'The specified VSwitchId and SecurityGroupId are not in the same VPC.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidVSwitchId.IpNotEnough',
            'errorMessage' => 'The specified VSwitch does not have enough IP addresses.',
          ),
          8 => 
          array (
            'errorCode' => 'Forbidden.UserBussinessStatus',
            'errorMessage' => 'This operation is not allowed, because you have overdue bills. Pay the overdue bill and try again.',
          ),
          9 => 
          array (
            'errorCode' => 'Forbidden.UserNotRealNameAuthentication',
            'errorMessage' => 'This operation is not allowed, because you have not passed the real-name verification.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidUser.PassRoleForbidden',
            'errorMessage' => 'The RAM user is not authorized to assume a RAM role.',
          ),
          11 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'The RAM role does not belong to ECS.',
          ),
          12 => 
          array (
            'errorCode' => 'OperationDenied.NoStock',
            'errorMessage' => 'Sales of this resource are temporarily suspended in the specified zone. We recommend that you use the multi-zone creation function to avoid the risk of insufficient resource. For more information, see https://help.aliyun.com/document_detail/157290.html',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidParameter.KMS.KeyId.Forbidden',
            'errorMessage' => 'You are not authorized to access the specified KMSKeyId.',
          ),
          14 => 
          array (
            'errorCode' => 'Forbidden.AccountClosed',
            'errorMessage' => 'The operation is forbidden. Your account has been closed.',
          ),
          15 => 
          array (
            'errorCode' => 'InvalidOperation.ResourceManagedByCloudProduct',
            'errorMessage' => 'The operation is forbidden. The security group has been managed by another cloud product.',
          ),
          16 => 
          array (
            'errorCode' => 'Spot.NotMatched',
            'errorMessage' => '%s. We recommend that you use the create multi-zone function to avoid insufficient inventory. For more information, see https://help.aliyun.com/document_detail/157290.html',
          ),
          17 => 
          array (
            'errorCode' => 'SecurityRisk.3DVerification',
            'errorMessage' => 'We have detected a security risk with your default credit or debit card. Please proceed with verification via the link in your email.',
          ),
          18 => 
          array (
            'errorCode' => 'CreateServiceLinkedRole.Denied',
            'errorMessage' => 'Please make sure the account has ram:CreateServiceLinkedRole permission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ImageSnapshot.NotFound',
            'errorMessage' => 'The specified snapshot does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDiskId.NotFound',
            'errorMessage' => 'The specified disk does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.KMS.KeyId.NotFound',
            'errorMessage' => 'The specified KMSKeyId does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"89945DD3-9072-47D0-A318-353284CFC7B3\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateVirtualNodeResponse>\\r\\n    <RequestId>89945DD3-9072-47D0-A318-353284CFC7B3</RequestId>\\r\\n</UpdateVirtualNodeResponse>","errorExample":""}]',
      'title' => '更新一个虚拟节点',
      'summary' => '调用UpdateVirtualNode更新一个虚拟节点的属性。',
      'description' => '##  接口说明
仅支持更新状态为Ready的虚拟节点。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeVirtualNodes' => 
    array (
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'VirtualNodeName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟节点名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'testNode',
          ),
        ),
        3 => 
        array (
          'name' => 'VirtualNodeIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟节点ID序列。最多20个，字符串需按照JSON格式传入。',
            'type' => 'string',
            'required' => false,
            'example' => '["vnd-2ze960zkdqrldeaw****","vnd-3ebzcviqbwt25dsz****"]',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多详情，请参阅[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        5 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟节点状态。取值范围：

- Pending
- Ready
- Failed',
            'type' => 'string',
            'required' => false,
            'example' => 'Ready',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'rg-uf66jeqopgqa9hdn****',
          ),
        ),
        7 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token，NextToken为空表示没有下一个。

首次查询时无需设置该参数，后续查询的Token从返回结果中获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'd78f2dd8-5979-42fe-****-b16db43be5bc',
          ),
        ),
        8 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限制本次查询返回的资源数量。默认返回20个，最大不能超过20个。

> 返回结果可能小于指定的数量，但不会多于指定的数量。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20',
          ),
        ),
        9 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '虚拟节点绑定的标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '虚拟节点绑定的标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'name',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '查询到的虚拟节点数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'd78f2dd8-5979-42fe-****-b16db43be5bc',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9C9B9917-ED22-50D5-ADE6-9FA9D58AD05F',
              ),
              'VirtualNodes' => 
              array (
                'description' => '虚拟节点信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '虚拟节点信息集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '虚拟节点状态。可能值：
- Pending
- Ready
- Failed',
                      'type' => 'string',
                      'example' => 'Ready',
                    ),
                    'CreationTime' => 
                    array (
                      'description' => '虚拟节点创建时间。UTC时间，RFC 3339标准。',
                      'type' => 'string',
                      'example' => '2021-09-08T15:00:00Z',
                    ),
                    'VpcId' => 
                    array (
                      'description' => '虚拟节点所属的VPC ID。',
                      'type' => 'string',
                      'example' => 'vpc-1vzjjflab6wvjox****',
                    ),
                    'InternetIp' => 
                    array (
                      'description' => '虚拟节点的公网IP。',
                      'type' => 'string',
                      'example' => '192.0.XX.XX',
                    ),
                    'Tags' => 
                    array (
                      'description' => '虚拟节点绑定的标签信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键。',
                            'type' => 'string',
                            'example' => 'name',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => 'test',
                          ),
                        ),
                      ),
                    ),
                    'Events' => 
                    array (
                      'description' => '事件信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '事件信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Type' => 
                          array (
                            'description' => '事件类型。可能值：

- Normal
- Warning',
                            'type' => 'string',
                            'example' => 'Normal',
                          ),
                          'LastTimestamp' => 
                          array (
                            'description' => '事件结束时间。',
                            'type' => 'string',
                            'example' => '2021-09-08T02:24:52Z',
                          ),
                          'Message' => 
                          array (
                            'description' => '事件消息。',
                            'type' => 'string',
                            'example' => 'Successfully',
                          ),
                          'Name' => 
                          array (
                            'description' => '事件的归属对象名。',
                            'type' => 'string',
                            'example' => 'test',
                          ),
                          'Reason' => 
                          array (
                            'description' => '事件名。',
                            'type' => 'string',
                            'example' => 'Created',
                          ),
                          'Count' => 
                          array (
                            'description' => '事件数。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'FirstTimestamp' => 
                          array (
                            'description' => '事件开始时间。',
                            'type' => 'string',
                            'example' => '2021-09-08T02:24:48Z',
                          ),
                        ),
                      ),
                    ),
                    'VirtualNodeId' => 
                    array (
                      'description' => '虚拟节点ID。',
                      'type' => 'string',
                      'example' => 'vnd-2ze960zkdqrldeaw****',
                    ),
                    'IntranetIp' => 
                    array (
                      'description' => '虚拟节点的内网IP。',
                      'type' => 'string',
                      'example' => '10.19.XX.XX',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '虚拟节点所属的地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'VirtualNodeVSwitchId' => 
                    array (
                      'description' => '虚拟节点所属的交换机ID。',
                      'type' => 'string',
                      'example' => 'vsw-2ze23nqzig8inprou****',
                    ),
                    'VirtualNodeSecurityGroupId' => 
                    array (
                      'description' => '虚拟节点所属的安全组ID。',
                      'type' => 'string',
                      'example' => 'sg-2zeeyaaxlkq9sppl****',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '虚拟节点所属的资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-uf66jeqopgqa9hdn****',
                    ),
                    'VirtualNodeName' => 
                    array (
                      'description' => '虚拟节点的名称。',
                      'type' => 'string',
                      'example' => 'testNode',
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
            'errorCode' => 'Account.Arrearage',
            'errorMessage' => 'Your account has an outstanding payment.',
          ),
          1 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.CPU.Memory',
            'errorMessage' => 'The specified cpu and memory are not allowed',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.DuplicatedName',
            'errorMessage' => 'The container group include containers with duplicate names.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.DuplicatedVolumeName',
            'errorMessage' => 'The container group includes volumes with duplicate names.',
          ),
          5 => 
          array (
            'errorCode' => 'IncorrectStatus',
            'errorMessage' => '%s',
          ),
          6 => 
          array (
            'errorCode' => 'ServiceNotEnabled',
            'errorMessage' => '%s',
          ),
          7 => 
          array (
            'errorCode' => 'ImageSnapshot.IncorrectStatus',
            'errorMessage' => '%s',
          ),
          8 => 
          array (
            'errorCode' => 'ImageSnapshot.NotSupport',
            'errorMessage' => '%s',
          ),
          9 => 
          array (
            'errorCode' => 'DiskVolume.NotSupport',
            'errorMessage' => 'The disk volume is not supported.',
          ),
          10 => 
          array (
            'errorCode' => 'RamRole.NotSupport',
            'errorMessage' => 'The RAM role is not supported.',
          ),
          11 => 
          array (
            'errorCode' => 'DiskNumber.LimitExceed',
            'errorMessage' => 'The maximum number of disks in an instance is exceeded.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidPaymentMethod.InsufficientBalance',
            'errorMessage' => 'No payment method is specified for your account. We recommend that you add a payment method or add funds to the prepayment balance.',
          ),
          13 => 
          array (
            'errorCode' => 'DiskVolume.NotInSameZone',
            'errorMessage' => 'The instance to be created and the disk are not in the same zone.',
          ),
          14 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to use the "Product on ECI" feature.',
          ),
          15 => 
          array (
            'errorCode' => 'HighCpuMemConfigRequired',
            'errorMessage' => 'You need to apply to be added to the whitelist of the specified CPU and memory.',
          ),
          16 => 
          array (
            'errorCode' => 'RecommendEmpty.InstanceTypeFamilyNotMatched',
            'errorMessage' => 'The recommended instance type is unavailable in the current zone. Try again later.',
          ),
          17 => 
          array (
            'errorCode' => 'LocalDiskAmountNotMatch',
            'errorMessage' => 'The number of local volumes does not match the instance type.',
          ),
          18 => 
          array (
            'errorCode' => 'Payfor.CreditPayInsufficientBalance',
            'errorMessage' => 'Your payment credit line is insufficient.',
          ),
          19 => 
          array (
            'errorCode' => 'InvalidOperation.KMS.InstanceTypeNotSupport',
            'errorMessage' => 'The specified instance is invalid. Only I/O optimized instances support KMS key.',
          ),
          20 => 
          array (
            'errorCode' => 'InvalidParameter.Encrypted.KmsNotEnabled',
            'errorMessage' => 'KMS must be enabled for encrypted disks.',
          ),
          21 => 
          array (
            'errorCode' => 'InvalidParameter.KMS.EncryptedIllegal',
            'errorMessage' => 'After configuring the parameter KmsKeyId, you must enable encryption.',
          ),
          22 => 
          array (
            'errorCode' => 'Ipv6AddressNotSupportVsw',
            'errorMessage' => 'IPv6 is not supported in the specified vSwitch.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.VswZoneMisMatch',
            'errorMessage' => 'The specified VSwitchId is not in the specified Zone.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded',
            'errorMessage' => '%s quota exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'Zone.NotOnSale',
            'errorMessage' => 'The specified zone is not available for purchase.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'This operation has been identified as an abnormal operation and cannot be processed.',
          ),
          4 => 
          array (
            'errorCode' => 'Forbidden.SubUser',
            'errorMessage' => 'The specified action is not available for you.',
          ),
          5 => 
          array (
            'errorCode' => 'Forbidden.OnlyForInvitedTest',
            'errorMessage' => 'Eci create action is only open to invited users during public beta.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.SecurityGroupMisMatch',
            'errorMessage' => 'The specified VSwitchId and SecurityGroupId are not in the same VPC.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidVSwitchId.IpNotEnough',
            'errorMessage' => 'The specified VSwitch does not have enough IP addresses.',
          ),
          8 => 
          array (
            'errorCode' => 'Forbidden.UserNotRealNameAuthentication',
            'errorMessage' => 'This operation is not allowed, because you have not passed the real-name verification.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidUser.PassRoleForbidden',
            'errorMessage' => 'The RAM user is not authorized to assume a RAM role.',
          ),
          10 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'The RAM role does not belong to ECS.',
          ),
          11 => 
          array (
            'errorCode' => 'OperationDenied.NoStock',
            'errorMessage' => 'Sales of this resource are temporarily suspended in the specified zone. We recommend that you use the multi-zone creation function to avoid the risk of insufficient resource. For more information, see https://help.aliyun.com/document_detail/157290.html',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidParameter.KMS.KeyId.Forbidden',
            'errorMessage' => 'You are not authorized to access the specified KMSKeyId.',
          ),
          13 => 
          array (
            'errorCode' => 'Forbidden.AccountClosed',
            'errorMessage' => 'The operation is forbidden. Your account has been closed.',
          ),
          14 => 
          array (
            'errorCode' => 'InvalidOperation.ResourceManagedByCloudProduct',
            'errorMessage' => 'The operation is forbidden. The security group has been managed by another cloud product.',
          ),
          15 => 
          array (
            'errorCode' => 'Spot.NotMatched',
            'errorMessage' => '%s. We recommend that you use the create multi-zone function to avoid insufficient inventory. For more information, see https://help.aliyun.com/document_detail/157290.html',
          ),
          16 => 
          array (
            'errorCode' => 'SecurityRisk.3DVerification',
            'errorMessage' => 'We have detected a security risk with your default credit or debit card. Please proceed with verification via the link in your email.',
          ),
          17 => 
          array (
            'errorCode' => 'CreateServiceLinkedRole.Denied',
            'errorMessage' => 'Please make sure the account has ram:CreateServiceLinkedRole permission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ImageSnapshot.NotFound',
            'errorMessage' => 'The specified snapshot does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDiskId.NotFound',
            'errorMessage' => 'The specified disk does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.KMS.KeyId.NotFound',
            'errorMessage' => 'The specified KMSKeyId does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"NextToken\\": \\"d78f2dd8-5979-42fe-****-b16db43be5bc\\",\\n  \\"RequestId\\": \\"9C9B9917-ED22-50D5-ADE6-9FA9D58AD05F\\",\\n  \\"VirtualNodes\\": [\\n    {\\n      \\"Status\\": \\"Ready\\",\\n      \\"CreationTime\\": \\"2021-09-08T15:00:00Z\\",\\n      \\"VpcId\\": \\"vpc-1vzjjflab6wvjox****\\",\\n      \\"InternetIp\\": \\"192.0.XX.XX\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"name\\",\\n          \\"Value\\": \\"test\\"\\n        }\\n      ],\\n      \\"Events\\": [\\n        {\\n          \\"Type\\": \\"Normal\\",\\n          \\"LastTimestamp\\": \\"2021-09-08T02:24:52Z\\",\\n          \\"Message\\": \\"Successfully\\",\\n          \\"Name\\": \\"test\\",\\n          \\"Reason\\": \\"Created\\",\\n          \\"Count\\": 1,\\n          \\"FirstTimestamp\\": \\"2021-09-08T02:24:48Z\\"\\n        }\\n      ],\\n      \\"VirtualNodeId\\": \\"vnd-2ze960zkdqrldeaw****\\",\\n      \\"IntranetIp\\": \\"10.19.XX.XX\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"VirtualNodeVSwitchId\\": \\"vsw-2ze23nqzig8inprou****\\",\\n      \\"VirtualNodeSecurityGroupId\\": \\"sg-2zeeyaaxlkq9sppl****\\",\\n      \\"ResourceGroupId\\": \\"rg-uf66jeqopgqa9hdn****\\",\\n      \\"VirtualNodeName\\": \\"testNode\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeVirtualNodesResponse>\\n    <TotalCount>1</TotalCount>\\n    <NextToken>d78f2dd8-5979-42fe-****-b16db43be5bc</NextToken>\\n    <RequestId>9C9B9917-ED22-50D5-ADE6-9FA9D58AD05F</RequestId>\\n    <VirtualNodes>\\n        <Status>Ready</Status>\\n        <CreationTime>2021-09-08T15:00:00Z</CreationTime>\\n        <ClusterId>c9af4f6c1563c4cd4bda887bfeb72****</ClusterId>\\n        <VpcId>vpc-1vzjjflab6wvjox****</VpcId>\\n        <InternetIp>192.0.XX.XX</InternetIp>\\n        <SecurityGroupId>sg-2ze81zoc3yl7a3we****</SecurityGroupId>\\n        <Tags>\\n            <Key>name</Key>\\n            <Value>test</Value>\\n        </Tags>\\n        <Events>\\n            <Type>Normal</Type>\\n            <LastTimestamp>2021-09-08T02:24:52Z</LastTimestamp>\\n            <Message>Successfully</Message>\\n            <Name>test</Name>\\n            <Reason>Created</Reason>\\n            <Count>1</Count>\\n            <FirstTimestamp>2021-09-08T02:24:48Z</FirstTimestamp>\\n        </Events>\\n        <Memory>4</Memory>\\n        <VirtualNodeId>vnd-2ze960zkdqrldeaw****</VirtualNodeId>\\n        <IntranetIp>10.19.XX.XX</IntranetIp>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <VirtualNodeVSwitchId>vsw-2ze23nqzig8inprou****</VirtualNodeVSwitchId>\\n        <VirtualNodeSecurityGroupId>sg-2zeeyaaxlkq9sppl****</VirtualNodeSecurityGroupId>\\n        <VSwitchIds>vsw-2ze23nqzig8inprou****</VSwitchIds>\\n        <Cpu>2</Cpu>\\n        <ResourceGroupId>rg-uf66jeqopgqa9hdn****</ResourceGroupId>\\n        <ZoneId>cn-hangzhou-b</ZoneId>\\n        <ZoneIds>cn-hangzhou-g</ZoneIds>\\n        <VirtualNodeName>testNode</VirtualNodeName>\\n    </VirtualNodes>\\n</DescribeVirtualNodesResponse>","errorExample":""}]',
      'title' => '批量查询虚拟节点信息',
      'summary' => '调用DescribeVirtualNodes批量查询虚拟节点的详细信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeContainerGroupMetric' => 
    array (
      'summary' => '调用DescribeContainerGroupMetric查询一个ECI实例的监控数据。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ContainerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECI实例ID，即容器组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eci-bp17da5olmkuagfr****',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询某个时间段内的监控数据时，设置的开始时间。取值必须为30天之内，默认为EndTime减去5分钟。

格式为RFC3339时间格式。例如：北京时间2019年03月12号上午9点整可以表示为2019-03-12T09:00:00.000+08:00或者2019-03-12T01:00:00.000Z',
            'type' => 'string',
            'required' => false,
            'example' => '2019-03-12T01:00:00.000Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询某个时间段内的监控数据时，设置的结束时间。默认为当前时间。

格式为RFC3339时间格式。',
            'type' => 'string',
            'required' => false,
            'example' => '2019-09-12T01:05:00.000Z  ',
          ),
        ),
        4 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据聚合周期，单位为秒。目前只支持15、30、60和600秒。默认为60秒。

> 如果StartTime和EndTime均没有设置，则默认获取最新5分钟的监控数据，默认聚合周期为15S，传入的Period将被忽略。',
            'type' => 'string',
            'required' => false,
            'example' => '15',
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
                'description' => '请求ID，唯一标识。',
                'type' => 'string',
                'example' => 'D81A4A13-6DCC-4579-AC62-90A6C3EC7BBC',
              ),
              'ContainerGroupId' => 
              array (
                'description' => 'ECI实例ID，即容器组ID。',
                'type' => 'string',
                'example' => 'eci-bp1dqpye03ke5s6p****',
              ),
              'Records' => 
              array (
                'description' => 'ECI实例的监控数据详情。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Network' => 
                    array (
                      'description' => '网络数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Interfaces' => 
                        array (
                          'description' => '网卡数据。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'RxErrors' => 
                              array (
                                'description' => '累计接收错误数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                              ),
                              'TxDrops' => 
                              array (
                                'description' => '累计发送丢包数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                              ),
                              'TxBytes' => 
                              array (
                                'description' => '累计发送字节数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1381805699',
                              ),
                              'RxPackets' => 
                              array (
                                'description' => '累计接收包数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '4800583',
                              ),
                              'TxPackets' => 
                              array (
                                'description' => '累计发送包数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '5158427',
                              ),
                              'Name' => 
                              array (
                                'description' => '网卡名称。',
                                'type' => 'string',
                                'example' => 'eth0',
                              ),
                              'TxErrors' => 
                              array (
                                'description' => '累计发送错误数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                              ),
                              'RxBytes' => 
                              array (
                                'description' => '累计接收字节数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '505001954',
                              ),
                              'RxDrops' => 
                              array (
                                'description' => '累计接收丢包数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'CPU' => 
                    array (
                      'description' => 'CPU数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UsageNanoCores' => 
                        array (
                          'description' => 'CPU在采样窗口内的使用量（纳秒）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'Limit' => 
                        array (
                          'description' => 'CPU使用上限（CPU核数*1000）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2000',
                        ),
                        'UsageCoreNanoSeconds' => 
                        array (
                          'description' => 'CPU历史使用总量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '70769883',
                        ),
                        'Load' => 
                        array (
                          'description' => '最近10秒的平均负载情况。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                      ),
                    ),
                    'Disk' => 
                    array (
                      'description' => '磁盘数据。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'WriteBytes' => 
                          array (
                            'description' => '磁盘写入的数据量，单位为Byte。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1375109120',
                          ),
                          'WriteIO' => 
                          array (
                            'description' => '该参数暂未开放使用。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '123',
                          ),
                          'Device' => 
                          array (
                            'description' => '磁盘名称。',
                            'type' => 'string',
                            'example' => '/dev/vda',
                          ),
                          'ReadIO' => 
                          array (
                            'description' => '该参数暂未开放使用。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '123',
                          ),
                          'ReadBytes' => 
                          array (
                            'description' => '磁盘读取的数据量，单位为Byte。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '210714112',
                          ),
                        ),
                      ),
                    ),
                    'Timestamp' => 
                    array (
                      'description' => '每条监控数据对应的统计时间。格式为RFC3339时间格式。',
                      'type' => 'string',
                      'example' => '2021-08-25T16:22:00.000+08:00',
                    ),
                    'Memory' => 
                    array (
                      'description' => '内存数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Rss' => 
                        array (
                          'description' => '常驻内存集，即实际使用的物理内存。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '9289728',
                        ),
                        'UsageBytes' => 
                        array (
                          'description' => '已使用内存。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '9289728',
                        ),
                        'WorkingSet' => 
                        array (
                          'description' => '当前内存工作集使用量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '9289728',
                        ),
                        'AvailableBytes' => 
                        array (
                          'description' => '可用内存。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '4285091840',
                        ),
                        'Cache' => 
                        array (
                          'description' => '缓存。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '9289728',
                        ),
                      ),
                    ),
                    'Filesystem' => 
                    array (
                      'description' => '文件系统分区数据。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Capacity' => 
                          array (
                            'description' => '空间总量。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '41610981376',
                          ),
                          'Available' => 
                          array (
                            'description' => '可用空间。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '35319836672',
                          ),
                          'FsName' => 
                          array (
                            'description' => '分区名称。',
                            'type' => 'string',
                            'example' => '/dev/root',
                          ),
                          'Usage' => 
                          array (
                            'description' => '已使用空间。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '4368744448',
                          ),
                          'Category' => 
                          array (
                            'description' => '分区类型。可能值：

- System
- Volume
- Other
',
                            'type' => 'string',
                            'example' => 'System',
                          ),
                        ),
                      ),
                    ),
                    'Containers' => 
                    array (
                      'description' => '容器的监控数据详情。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'CPU' => 
                          array (
                            'description' => '容器的CPU数据。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'UsageNanoCores' => 
                              array (
                                'description' => 'CPU在采样窗口内的使用量（纳秒）。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                              ),
                              'Limit' => 
                              array (
                                'description' => 'CPU使用上限（CPU核数*1000）。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1024',
                              ),
                              'UsageCoreNanoSeconds' => 
                              array (
                                'description' => 'CPU历史使用总量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '40876694',
                              ),
                              'Load' => 
                              array (
                                'description' => '最近10秒的平均负载情况。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                              ),
                            ),
                          ),
                          'Memory' => 
                          array (
                            'description' => '容器的内存数据。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Rss' => 
                              array (
                                'description' => '常驻内存集，即实际使用的物理内存。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '9289728',
                              ),
                              'UsageBytes' => 
                              array (
                                'description' => '已使用内存。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '9289728',
                              ),
                              'WorkingSet' => 
                              array (
                                'description' => '当前内存工作集使用量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '9289728',
                              ),
                              'AvailableBytes' => 
                              array (
                                'description' => '可用内存。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '4285091840',
                              ),
                              'Cache' => 
                              array (
                                'description' => '缓存。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '9289728',
                              ),
                            ),
                          ),
                          'Name' => 
                          array (
                            'description' => '容器名称。',
                            'type' => 'string',
                            'example' => 'u1',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D81A4A13-6DCC-4579-AC62-90A6C3EC7BBC\\",\\n  \\"ContainerGroupId\\": \\"eci-bp1dqpye03ke5s6p****\\",\\n  \\"Records\\": [\\n    {\\n      \\"Network\\": {\\n        \\"Interfaces\\": [\\n          {\\n            \\"RxErrors\\": 0,\\n            \\"TxDrops\\": 0,\\n            \\"TxBytes\\": 1381805699,\\n            \\"RxPackets\\": 4800583,\\n            \\"TxPackets\\": 5158427,\\n            \\"Name\\": \\"eth0\\",\\n            \\"TxErrors\\": 0,\\n            \\"RxBytes\\": 505001954,\\n            \\"RxDrops\\": 0\\n          }\\n        ]\\n      },\\n      \\"CPU\\": {\\n        \\"UsageNanoCores\\": 0,\\n        \\"Limit\\": 2000,\\n        \\"UsageCoreNanoSeconds\\": 70769883,\\n        \\"Load\\": 0\\n      },\\n      \\"Disk\\": [\\n        {\\n          \\"WriteBytes\\": 1375109120,\\n          \\"WriteIO\\": 123,\\n          \\"Device\\": \\"/dev/vda\\",\\n          \\"ReadIO\\": 123,\\n          \\"ReadBytes\\": 210714112\\n        }\\n      ],\\n      \\"Timestamp\\": \\"2021-08-25T16:22:00.000+08:00\\",\\n      \\"Memory\\": {\\n        \\"Rss\\": 9289728,\\n        \\"UsageBytes\\": 9289728,\\n        \\"WorkingSet\\": 9289728,\\n        \\"AvailableBytes\\": 4285091840,\\n        \\"Cache\\": 9289728\\n      },\\n      \\"Filesystem\\": [\\n        {\\n          \\"Capacity\\": 41610981376,\\n          \\"Available\\": 35319836672,\\n          \\"FsName\\": \\"/dev/root\\",\\n          \\"Usage\\": 4368744448,\\n          \\"Category\\": \\"System\\"\\n        }\\n      ],\\n      \\"Containers\\": [\\n        {\\n          \\"CPU\\": {\\n            \\"UsageNanoCores\\": 0,\\n            \\"Limit\\": 1024,\\n            \\"UsageCoreNanoSeconds\\": 40876694,\\n            \\"Load\\": 0\\n          },\\n          \\"Memory\\": {\\n            \\"Rss\\": 9289728,\\n            \\"UsageBytes\\": 9289728,\\n            \\"WorkingSet\\": 9289728,\\n            \\"AvailableBytes\\": 4285091840,\\n            \\"Cache\\": 9289728\\n          },\\n          \\"Name\\": \\"u1\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeContainerGroupMetricResponse>\\n    <RequestId>96F7805E-16E6-55B1-817F-EA6CF365E7AE</RequestId>\\n    <ContainerGroupId>eci-2zea33h8fdgiw23jfp3f</ContainerGroupId>\\n    <Records>\\n        <Memory>\\n            <UsageBytes>11153408</UsageBytes>\\n            <Rss>1593344</Rss>\\n            <AvailableBytes>4289445888</AvailableBytes>\\n            <WorkingSet>5521408</WorkingSet>\\n            <Cache>7028736</Cache>\\n        </Memory>\\n        <Network>\\n            <Interfaces>\\n                <RxPackets>0</RxPackets>\\n                <TxDrops>0</TxDrops>\\n                <RxDrops>0</RxDrops>\\n                <RxErrors>0</RxErrors>\\n                <TxErrors>0</TxErrors>\\n                <TxPackets>0</TxPackets>\\n                <RxBytes>505001954</RxBytes>\\n                <TxBytes>1381805699</TxBytes>\\n                <Name>eth0</Name>\\n            </Interfaces>\\n        </Network>\\n        <Containers>\\n            <Memory>\\n                <UsageBytes>9850880</UsageBytes>\\n                <Rss>1593344</Rss>\\n                <AvailableBytes>0</AvailableBytes>\\n                <WorkingSet>4841472</WorkingSet>\\n                <Cache>7028736</Cache>\\n            </Memory>\\n            <CPU>\\n                <UsageCoreNanoSeconds>38373298</UsageCoreNanoSeconds>\\n                <Load>0</Load>\\n                <UsageNanoCores>0</UsageNanoCores>\\n                <Limit>0</Limit>\\n            </CPU>\\n            <Name>nginx</Name>\\n        </Containers>\\n        <Containers>\\n            <Memory>\\n                <UsageBytes>9850880</UsageBytes>\\n                <Rss>1593344</Rss>\\n                <AvailableBytes>0</AvailableBytes>\\n                <WorkingSet>4841472</WorkingSet>\\n                <Cache>7028736</Cache>\\n            </Memory>\\n            <CPU>\\n                <UsageCoreNanoSeconds>38373298</UsageCoreNanoSeconds>\\n                <Load>0</Load>\\n                <UsageNanoCores>0</UsageNanoCores>\\n                <Limit>0</Limit>\\n            </CPU>\\n            <Name>nginx</Name>\\n        </Containers>\\n        <CPU>\\n            <UsageCoreNanoSeconds>70769883</UsageCoreNanoSeconds>\\n            <Load>0</Load>\\n            <UsageNanoCores>0</UsageNanoCores>\\n            <Limit>2000</Limit>\\n        </CPU>\\n        <Filesystem>\\n            <Usage>612556800</Usage>\\n            <Category>System</Category>\\n            <FsName>/dev/disk/by-uuid/39d6ac87-caa5-4bdd-b31e-660301e51bab</FsName>\\n            <Capacity>52576092160</Capacity>\\n            <Available>49262403584</Available>\\n        </Filesystem>\\n        <Filesystem>\\n            <Usage>5022646272</Usage>\\n            <Category>Other</Category>\\n            <FsName>/dev/root</FsName>\\n            <Capacity>41610981376</Capacity>\\n            <Available>34665934848</Available>\\n        </Filesystem>\\n        <Filesystem>\\n            <Usage>0</Usage>\\n            <Category>Other</Category>\\n            <FsName>/dev/shm</FsName>\\n            <Capacity>1991725056</Capacity>\\n            <Available>1991725056</Available>\\n        </Filesystem>\\n        <Filesystem>\\n            <Usage>37249024</Usage>\\n            <Category>Other</Category>\\n            <FsName>/dev/vda2</FsName>\\n            <Capacity>511647744</Capacity>\\n            <Available>436822016</Available>\\n        </Filesystem>\\n        <Timestamp>2021-08-25T16:22:00.000+08:00</Timestamp>\\n        <Disk>\\n            <Device>/dev/vda</Device>\\n            <ReadBytes>177200640</ReadBytes>\\n            <WriteBytes>8542216192</WriteBytes>\\n        </Disk>\\n    </Records>\\n</DescribeContainerGroupMetricResponse>","errorExample":""}]',
      'title' => '查询一个ECI实例的监控数据',
      'description' => '- 最多支持返回50条监控数据，超出50条将会报错。
- 仅支持分别查询5分钟以内的实时数据，或者5分钟之前的历史数据。如果查询时间段超出了当前时间点，默认只查询5分钟之前的历史数据。
- 仅支持查询创建时间晚于北京时间2019年04月03日15点的ECI实例的监控数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeMultiContainerGroupMetric' => 
    array (
      'summary' => '调用DescribeContainerGroupMetric查询一个ECI实例的监控数据。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ContainerGroupIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECI实例ID，即容器组ID。格式为JSON数组，一次最多支持20个ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '["eci-2zegym1qhbmdfr1s****","eci-2ze39w5svzj5ic34****"]',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmzw2jz2z****',
          ),
        ),
        3 => 
        array (
          'name' => 'MetricType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监控信息类型。目前仅支持配置为summary，表示返回Records。',
            'type' => 'string',
            'required' => false,
            'example' => 'summary',
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
                'description' => '请求ID，唯一标识。',
                'type' => 'string',
                'example' => 'B8756BA0-6452-419C-9727-37A6209C85E0',
              ),
              'MonitorDatas' => 
              array (
                'description' => '监控信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Records' => 
                    array (
                      'description' => '监控数据详情。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Network' => 
                          array (
                            'description' => '网络数据。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Interfaces' => 
                              array (
                                'description' => '网卡数据。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'RxErrors' => 
                                    array (
                                      'description' => '累计接收错误数。',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '0',
                                    ),
                                    'TxDrops' => 
                                    array (
                                      'description' => '累计发送丢包数。',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '0',
                                    ),
                                    'TxBytes' => 
                                    array (
                                      'description' => '累计发送字节数。',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '1381805699',
                                    ),
                                    'RxPackets' => 
                                    array (
                                      'description' => '累计接收包数量。',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '4800583',
                                    ),
                                    'TxPackets' => 
                                    array (
                                      'description' => '累计发送包数量。',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '5158427',
                                    ),
                                    'Name' => 
                                    array (
                                      'description' => '网卡名称。',
                                      'type' => 'string',
                                      'example' => 'eth0',
                                    ),
                                    'TxErrors' => 
                                    array (
                                      'description' => '累计发送错误数。',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '0',
                                    ),
                                    'RxBytes' => 
                                    array (
                                      'description' => '累计接收字节数。',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '505001954',
                                    ),
                                    'RxDrops' => 
                                    array (
                                      'description' => '累计接收丢包数。',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '0',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                          'CPU' => 
                          array (
                            'description' => 'CPU数据。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'UsageNanoCores' => 
                              array (
                                'description' => 'CPU在采样窗口内的使用量（纳秒）。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                              ),
                              'Limit' => 
                              array (
                                'description' => 'CPU使用上限（CPU核数*1000）。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2000',
                              ),
                              'UsageCoreNanoSeconds' => 
                              array (
                                'description' => 'CPU历史使用总量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '70769883',
                              ),
                              'Load' => 
                              array (
                                'description' => '最近10秒的平均负载情况。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                              ),
                            ),
                          ),
                          'Disk' => 
                          array (
                            'description' => '磁盘数据。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'WriteBytes' => 
                                array (
                                  'description' => '磁盘写入的数据量，单位为Byte。',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '1375109120',
                                ),
                                'Device' => 
                                array (
                                  'description' => '磁盘名称。',
                                  'type' => 'string',
                                  'example' => '/dev/vda',
                                ),
                                'WriteIo' => 
                                array (
                                  'description' => '该参数暂未开放使用。',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '123',
                                ),
                                'ReadBytes' => 
                                array (
                                  'description' => '磁盘读取的数据量，单位为Byte。',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '210714112',
                                ),
                                'ReadIo' => 
                                array (
                                  'description' => '该参数暂未开放使用。',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '123',
                                ),
                              ),
                            ),
                          ),
                          'Timestamp' => 
                          array (
                            'description' => '监控数据对应的统计时间。格式为RFC3339时间格式。',
                            'type' => 'string',
                            'example' => '2019-12-19T02:31:54Z',
                          ),
                          'Memory' => 
                          array (
                            'description' => '内存数据。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Rss' => 
                              array (
                                'description' => '常驻内存集，即实际使用的物理内存。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1593344',
                              ),
                              'UsageBytes' => 
                              array (
                                'description' => '已使用内存。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '11153408',
                              ),
                              'WorkingSet' => 
                              array (
                                'description' => '当前内存工作集使用量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '5521408',
                              ),
                              'AvailableBytes' => 
                              array (
                                'description' => '可用内存。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '4289445888',
                              ),
                              'Cache' => 
                              array (
                                'description' => '缓存。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '7028736',
                              ),
                            ),
                          ),
                          'Containers' => 
                          array (
                            'description' => '容器的监控数据详情。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'CPU' => 
                                array (
                                  'description' => '容器的CPU数据。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'UsageNanoCores' => 
                                    array (
                                      'description' => 'CPU在采样窗口内的使用量（纳秒）。',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '0',
                                    ),
                                    'Limit' => 
                                    array (
                                      'description' => 'CPU使用上限（CPU核数*1000）。',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '321234',
                                    ),
                                    'UsageCoreNanoSeconds' => 
                                    array (
                                      'description' => 'CPU历史使用总量。',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '40876694',
                                    ),
                                    'Load' => 
                                    array (
                                      'description' => '最近10秒的平均负载情况。',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '12341',
                                    ),
                                  ),
                                ),
                                'Memory' => 
                                array (
                                  'description' => '容器的内存数据。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'Rss' => 
                                    array (
                                      'description' => '常驻内存集，即实际使用的物理内存。',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '9289728',
                                    ),
                                    'UsageBytes' => 
                                    array (
                                      'description' => '	已使用内存。',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '9289728',
                                    ),
                                    'WorkingSet' => 
                                    array (
                                      'description' => '当前内存工作集使用量。',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '9289728',
                                    ),
                                    'AvailableBytes' => 
                                    array (
                                      'description' => '可用内存。',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '4285091840',
                                    ),
                                    'Cache' => 
                                    array (
                                      'description' => '缓存。',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '9289728',
                                    ),
                                  ),
                                ),
                                'Name' => 
                                array (
                                  'description' => '名称。',
                                  'type' => 'string',
                                  'example' => 'test1',
                                ),
                              ),
                            ),
                          ),
                          'Filesystem' => 
                          array (
                            'description' => '文件系统分区数据。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Capacity' => 
                                array (
                                  'description' => '空间总量。',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '41610981376',
                                ),
                                'Available' => 
                                array (
                                  'description' => '可用空间。',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '35319836672',
                                ),
                                'FsName' => 
                                array (
                                  'description' => '分区名称。',
                                  'type' => 'string',
                                  'example' => '/dev/root',
                                ),
                                'Usage' => 
                                array (
                                  'description' => '已使用空间。',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '4368744448',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'ContainerGroupId' => 
                    array (
                      'description' => '实例ID，即容器组ID。',
                      'type' => 'string',
                      'example' => 'eci-bp15oolgorelvhfb****',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B8756BA0-6452-419C-9727-37A6209C85E0\\",\\n  \\"MonitorDatas\\": [\\n    {\\n      \\"Records\\": [\\n        {\\n          \\"Network\\": {\\n            \\"Interfaces\\": [\\n              {\\n                \\"RxErrors\\": 0,\\n                \\"TxDrops\\": 0,\\n                \\"TxBytes\\": 1381805699,\\n                \\"RxPackets\\": 4800583,\\n                \\"TxPackets\\": 5158427,\\n                \\"Name\\": \\"eth0\\",\\n                \\"TxErrors\\": 0,\\n                \\"RxBytes\\": 505001954,\\n                \\"RxDrops\\": 0\\n              }\\n            ]\\n          },\\n          \\"CPU\\": {\\n            \\"UsageNanoCores\\": 0,\\n            \\"Limit\\": 2000,\\n            \\"UsageCoreNanoSeconds\\": 70769883,\\n            \\"Load\\": 0\\n          },\\n          \\"Disk\\": [\\n            {\\n              \\"WriteBytes\\": 1375109120,\\n              \\"Device\\": \\"/dev/vda\\",\\n              \\"WriteIo\\": 123,\\n              \\"ReadBytes\\": 210714112,\\n              \\"ReadIo\\": 123\\n            }\\n          ],\\n          \\"Timestamp\\": \\"2019-12-19T02:31:54Z\\",\\n          \\"Memory\\": {\\n            \\"Rss\\": 1593344,\\n            \\"UsageBytes\\": 11153408,\\n            \\"WorkingSet\\": 5521408,\\n            \\"AvailableBytes\\": 4289445888,\\n            \\"Cache\\": 7028736\\n          },\\n          \\"Containers\\": [\\n            {\\n              \\"CPU\\": {\\n                \\"UsageNanoCores\\": 0,\\n                \\"Limit\\": 321234,\\n                \\"UsageCoreNanoSeconds\\": 40876694,\\n                \\"Load\\": 12341\\n              },\\n              \\"Memory\\": {\\n                \\"Rss\\": 9289728,\\n                \\"UsageBytes\\": 9289728,\\n                \\"WorkingSet\\": 9289728,\\n                \\"AvailableBytes\\": 4285091840,\\n                \\"Cache\\": 9289728\\n              },\\n              \\"Name\\": \\"test1\\"\\n            }\\n          ],\\n          \\"Filesystem\\": [\\n            {\\n              \\"Capacity\\": 41610981376,\\n              \\"Available\\": 35319836672,\\n              \\"FsName\\": \\"/dev/root\\",\\n              \\"Usage\\": 4368744448\\n            }\\n          ]\\n        }\\n      ],\\n      \\"ContainerGroupId\\": \\"eci-bp15oolgorelvhfb****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeMultiContainerGroupMetricResponse>\\n    <RequestId>3BB0E196-5882-4038-BE05-D0765CA13236</RequestId>\\n    <MonitorDatas>\\n        <ContainerGroupId>eci-2zegym1qhbmdfr1s****</ContainerGroupId>\\n        <Records>\\n            <Memory>\\n                <UsageBytes>4005888</UsageBytes>\\n                <Rss>1413120</Rss>\\n                <AvailableBytes>4291596288</AvailableBytes>\\n                <WorkingSet>3371008</WorkingSet>\\n                <Cache>0</Cache>\\n            </Memory>\\n            <Network>\\n                <Interfaces>\\n                    <RxPackets>1822804</RxPackets>\\n                    <TxDrops>0</TxDrops>\\n                    <RxDrops>0</RxDrops>\\n                    <TxErrors>0</TxErrors>\\n                    <RxErrors>0</RxErrors>\\n                    <TxPackets>1694857</TxPackets>\\n                    <RxBytes>660431995</RxBytes>\\n                    <TxBytes>410762742</TxBytes>\\n                    <Name>eth0</Name>\\n                </Interfaces>\\n            </Network>\\n            <Containers>\\n                <Memory>\\n                    <UsageBytes>2854912</UsageBytes>\\n                    <Rss>1355776</Rss>\\n                    <AvailableBytes>0</AvailableBytes>\\n                    <WorkingSet>2842624</WorkingSet>\\n                    <Cache>0</Cache>\\n                </Memory>\\n                <CPU>\\n                    <UsageCoreNanoSeconds>37824896</UsageCoreNanoSeconds>\\n                    <Load>0</Load>\\n                    <Limit>0</Limit>\\n                    <UsageNanoCores>0</UsageNanoCores>\\n                </CPU>\\n                <Name>nginx</Name>\\n            </Containers>\\n            <CPU>\\n                <UsageCoreNanoSeconds>72555191</UsageCoreNanoSeconds>\\n                <Load>0</Load>\\n                <Limit>2000</Limit>\\n                <UsageNanoCores>0</UsageNanoCores>\\n            </CPU>\\n            <Filesystem>\\n                <Usage>37130240</Usage>\\n                <FsName>/dev/vda2</FsName>\\n                <Capacity>511647744</Capacity>\\n                <Available>436940800</Available>\\n            </Filesystem>\\n            <Disk>\\n                <WriteIo>0</WriteIo>\\n                <Device>/dev/vda</Device>\\n                <ReadIo>0</ReadIo>\\n                <ReadBytes>273759744</ReadBytes>\\n                <WriteBytes>2066857984</WriteBytes>\\n            </Disk>\\n            <Timestamp/>\\n        </Records>\\n    </MonitorDatas>\\n    <MonitorDatas>\\n        <ContainerGroupId>eci-2ze39w5svzj5ic34****</ContainerGroupId>\\n        <Records>\\n            <Memory>\\n                <UsageBytes>6463488</UsageBytes>\\n                <Rss>3149824</Rss>\\n                <AvailableBytes>4289142784</AvailableBytes>\\n                <WorkingSet>5824512</WorkingSet>\\n                <Cache>0</Cache>\\n            </Memory>\\n            <Network>\\n                <Interfaces>\\n                    <RxPackets>1764600</RxPackets>\\n                    <TxDrops>0</TxDrops>\\n                    <RxDrops>0</RxDrops>\\n                    <TxErrors>0</TxErrors>\\n                    <RxErrors>0</RxErrors>\\n                    <TxPackets>1641017</TxPackets>\\n                    <RxBytes>596649892</RxBytes>\\n                    <TxBytes>406628708</TxBytes>\\n                    <Name>eth0</Name>\\n                </Interfaces>\\n            </Network>\\n            <Containers>\\n                <Memory>\\n                    <UsageBytes>5242880</UsageBytes>\\n                    <Rss>3149824</Rss>\\n                    <AvailableBytes>0</AvailableBytes>\\n                    <WorkingSet>5230592</WorkingSet>\\n                    <Cache>0</Cache>\\n                </Memory>\\n                <CPU>\\n                    <UsageCoreNanoSeconds>119544335</UsageCoreNanoSeconds>\\n                    <Load>0</Load>\\n                    <Limit>0</Limit>\\n                    <UsageNanoCores>0</UsageNanoCores>\\n                </CPU>\\n                <Name>nginx</Name>\\n            </Containers>\\n            <CPU>\\n                <UsageCoreNanoSeconds>162459172</UsageCoreNanoSeconds>\\n                <Load>0</Load>\\n                <Limit>2000</Limit>\\n                <UsageNanoCores>0</UsageNanoCores>\\n            </CPU>\\n            <Filesystem>\\n                <Usage>37130240</Usage>\\n                <FsName>/dev/vda2</FsName>\\n                <Capacity>511647744</Capacity>\\n                <Available>436940800</Available>\\n            </Filesystem>\\n            <Disk>\\n                <WriteIo>0</WriteIo>\\n                <Device>/dev/vda</Device>\\n                <ReadIo>0</ReadIo>\\n                <ReadBytes>279165440</ReadBytes>\\n                <WriteBytes>2090905600</WriteBytes>\\n            </Disk>\\n            <Timestamp/>\\n        </Records>\\n    </MonitorDatas>\\n</DescribeMultiContainerGroupMetricResponse>","errorExample":""}]',
      'title' => '查询多个ECI实例的监控数据',
      'description' => '- 仅返回每个ECI实例最新的一条监控信息。
- 仅支持查询创建时间晚于北京时间2019年04月03日15时的ECI实例的监控数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateInstanceOpsTask' => 
    array (
      'summary' => '调用CreateInstanceOpsTask创建一个运维任务。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ContainerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECI实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eci-bp1dvysdafbh00t7****',
          ),
        ),
        3 => 
        array (
          'name' => 'OpsType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运维任务类型。取值范围：

- coredump
- tcpdump',
            'type' => 'string',
            'required' => true,
            'example' => 'coredump',
          ),
        ),
        4 => 
        array (
          'name' => 'OpsValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运维任务参数。根据OpsType的取值，可设置相应参数。
- 当OpsType取值为coredump时，OpsValue取值范围如下：
    - enable：开启coredump。
    - disable：关闭coredump。
- 当OpsType取值为tcpdump时，OpsValue取值为JSON格式的参数字符串，例如`{"Enable":true, "IfDeviceName":"eth0"}`。具体参数如下：
    - Enable：是否开启tcpdump，必填参数，取值为true表示开启，取值为false表示关闭。
    - Protocol：网络协议。取值范围为tcp、udp、icmpv4。
    - SourceIp：源IP地址。
    - SourceCidr：源IP网段。CIDR格式。如果同时设置了IP和IP网段，在IP网段有效时，将忽略IP设置。
    - SourcePort：源端口。取值范围为1~65535。
    - DestIp：目的IP地址。
    - DestCidr：目的IP网段。CIDR格式。如果同时设置了IP和IP网段，在IP网段有效时，将忽略IP设置。
    - DestPort：目的端口。取值范围为1~65535。
    - IfDeviceName：目标网卡。默认为eth0。
    - Snaplen：数据包抓取长度。默认为65535字节。
    - Duration：抓取时间。单位为秒。
    - PacketNum：抓取数据包的目标个数。
    - FileSize：抓取数据包的目标文件大小。单位为字节。最大为1073741824字节（即1 GB）。',
            'type' => 'string',
            'required' => true,
            'example' => 'enable',
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
                'example' => '89945DD3-9072-47D0-A318-353284CFC7B',
              ),
              'Result' => 
              array (
                'description' => '运维任务执行结果。',
                'type' => 'string',
                'example' => 'Coredump settings has been configured successfully.',
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
            'errorCode' => 'Coredump.RefrshIntervalTooShort',
            'errorMessage' => 'The time interval since last setting too short, please try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'Ops.TypeNotSupport',
            'errorMessage' => '%s',
          ),
          2 => 
          array (
            'errorCode' => 'Coredump.RegionNotSupport',
            'errorMessage' => '%s',
          ),
          3 => 
          array (
            'errorCode' => 'CorePattern.UpdateFail',
            'errorMessage' => 'Update coredump settings fail, please try again later',
          ),
          4 => 
          array (
            'errorCode' => 'Coredump.InvalidCorePatternType',
            'errorMessage' => '%s',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidCorePatternValue',
            'errorMessage' => '%s',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified instanceId does not exist',
          ),
          7 => 
          array (
            'errorCode' => 'Ops.InstanceNotSupport',
            'errorMessage' => '%s',
          ),
          8 => 
          array (
            'errorCode' => 'Ops.IntervalTooShort',
            'errorMessage' => 'The time interval since last setting too short, please try again later.',
          ),
          9 => 
          array (
            'errorCode' => 'Ops.RegionNotSupport',
            'errorMessage' => '%s',
          ),
          10 => 
          array (
            'errorCode' => 'Ops.OpsValueInvalid',
            'errorMessage' => 'Ops value check failed, please confirm by ops type and try again later.',
          ),
          11 => 
          array (
            'errorCode' => 'Ops.ExecuteTaskFail',
            'errorMessage' => '%s',
          ),
          12 => 
          array (
            'errorCode' => 'Tcpdump.InvalidValue',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"89945DD3-9072-47D0-A318-353284CFC7B\\",\\n  \\"Result\\": \\"Coredump settings has been configured successfully.\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateInstanceOpsTaskResponse>\\n    <RequestId>89945DD3-9072-47D0-A318-353284CFC7B</RequestId>\\n    <Result>Coredump settings has been configured successfully.</Result>\\n</CreateInstanceOpsTaskResponse>","errorExample":""}]',
      'title' => '创建运维任务',
      'description' => '##  接口说明
运维任务支持以下两种：

- coredump：开启coredump后，在容器异常终止时，系统会生成core文件，以便您分析异常，找出问题原因。更多信息，请参见[开启coredump](~~167801~~)。
- tcpdump：开启tcpdump后，系统将抓取网络数据包，以便您分析报文，定位网络问题。更多信息，请参见[开启tcpdump](~~429749~~)。',
    ),
    'DescribeInstanceOpsRecords' => 
    array (
      'summary' => '调用DescribeInstanceOpsRecords查询运维任务信息。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ContainerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECI实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eci-bp1dvysdafbh00t7****',
          ),
        ),
        3 => 
        array (
          'name' => 'OpsType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运维任务类型。取值范围：

- coredump
- tcpdump',
            'type' => 'string',
            'required' => true,
            'example' => 'coredump',
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
                'example' => '89945DD3-9072-47D0-A318-353284CFC7B3',
              ),
              'Records' => 
              array (
                'description' => '运维任务信息合集。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreateTime' => 
                    array (
                      'description' => '运维任务创建时间。',
                      'type' => 'string',
                      'example' => '2021-12-29T15:00:00Z',
                    ),
                    'ExpireTime' => 
                    array (
                      'description' => '运维任务过期时间。',
                      'type' => 'string',
                      'example' => '2099-12-29T15:00:00Z',
                    ),
                    'OpsType' => 
                    array (
                      'description' => '运维任务类型。',
                      'type' => 'string',
                      'example' => 'coredump',
                    ),
                    'OpsStatus' => 
                    array (
                      'description' => '运维任务状态。可能值：
- Ready：开启运维任务。
- Failed：运维任务执行失败。
- Expired：配置下发过期，有效期内未触发运维任务。
- Closed：关闭运维任务。
- Success：运维任务执行成功。',
                      'type' => 'string',
                      'example' => 'Ready',
                    ),
                    'ResultType' => 
                    array (
                      'description' => '运维结果类型。目前仅支持OSS，表示运维任务生成的文件将保存到OSS中。',
                      'type' => 'string',
                      'example' => 'OSS',
                    ),
                    'ResultContent' => 
                    array (
                      'description' => '运维结果内容，即运维任务所生成文件在的下载地址。',
                      'type' => 'string',
                      'example' => 'https://******',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"89945DD3-9072-47D0-A318-353284CFC7B3\\",\\n  \\"Records\\": [\\n    {\\n      \\"CreateTime\\": \\"2021-12-29T15:00:00Z\\",\\n      \\"ExpireTime\\": \\"2099-12-29T15:00:00Z\\",\\n      \\"OpsType\\": \\"coredump\\",\\n      \\"OpsStatus\\": \\"Ready\\",\\n      \\"ResultType\\": \\"OSS\\",\\n      \\"ResultContent\\": \\"https://******\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceOpsRecordsResponse>\\n    <RequestId>89945DD3-9072-47D0-A318-353284CFC7B3</RequestId>\\n    <Records>\\n        <CreateTime>2021-12-29T15:00:00Z</CreateTime>\\n        <ExpireTime>2099-12-29T15:00:00Z</ExpireTime>\\n        <OpsType>coredump</OpsType>\\n        <OpsStatus>Ready</OpsStatus>\\n        <ResultType>OSS</ResultType>\\n        <ResultContent>https://******</ResultContent>\\n    </Records>\\n</DescribeInstanceOpsRecordsResponse>","errorExample":""}]',
      'title' => '查询运维任务信息',
    ),
    'TagResources' => 
    array (
      'summary' => '调用TagResources为指定的ECI资源绑定标签。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。根据ResourceType取值填写对应资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'eci-2zelg8vwnlzdhf8hv****',
            ),
            'required' => true,
            'docRequired' => true,
            'maxItems' => 100,
          ),
        ),
        3 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。一个资源最多可以绑定20个标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。一个资源最多可以绑定20个标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。一旦传入该值，则不允许为空字符串。最多支持 128 个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testkey',
                ),
                'Value' => 
                array (
                  'description' => '标签键。一旦传入该值，可以为空字符串。最多支持 128 个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testvalue',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 100,
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。取值范围：

- ContainerGroup：ECI实例
- ImageCache：镜像缓存
- DataCache：数据缓存
- VirtualNode：虚拟节点',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'ContainerGroup',
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
                'example' => '0E234675-3465-4CC3-9D0F-9A864BC391DD',
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
            'errorCode' => 'IncorrectStatus',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'OperationConflict',
            'errorMessage' => 'Request was denied due to conflict with a previous request.',
          ),
          2 => 
          array (
            'errorCode' => 'NoPermission.Tag',
            'errorMessage' => 'No permissions to operate tags.',
          ),
          3 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The length of tags exceeded limit: 20.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0E234675-3465-4CC3-9D0F-9A864BC391DD\\"\\n}","type":"json"}]',
      'title' => '为ECI资源绑定标签',
    ),
    'ListTagResources' => 
    array (
      'summary' => '调用ListTagResources查询ECI资源绑定的标签信息。',
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
        'operationType' => 'list',
        'abilityTreeCode' => '163143',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeciO8VNZM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。根据ResourceType取值填写对应资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'eci-2zelg8vwnlzdhf8hv***',
            ),
            'required' => false,
            'docRequired' => true,
            'maxItems' => 100,
          ),
        ),
        3 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testkey',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testvalue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。取值范围：

- ContainerGroup：ECI实例
- ImageCache：镜像缓存
- DataCache：数据缓存
- VirtualNode：虚拟节点',
            'type' => 'string',
            'required' => true,
            'example' => 'ContainerGroup',
          ),
        ),
        5 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结果条数上限。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAdDWBF2****
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
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'title' => '下一个查询开始Token，NextToken为空说明没有下一个',
                'description' => '本次调用返回的查询凭证值。',
                'type' => 'string',
                'example' => 'AAAAAdDWBF2****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1340C38D-6189-54D1-86F6-7D5ECF3E0088',
              ),
              'TagResources' => 
              array (
                'title' => '资源列表',
                'description' => '资源列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceType' => 
                    array (
                      'title' => '资源类型',
                      'description' => '资源类型。可能值：

- ContainerGroup：ECI实例
- ImageCache：镜像缓存
- DataCache：数据缓存
- VirtualNode：虚拟节点',
                      'type' => 'string',
                      'example' => 'ContainerGroup',
                    ),
                    'TagValue' => 
                    array (
                      'title' => '标签值',
                      'description' => '资源绑定标签的标签值。',
                      'type' => 'string',
                      'example' => 'testvalue',
                    ),
                    'ResourceId' => 
                    array (
                      'title' => '资源ID',
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'eci-2zelg8vwnlzdhf8hv****
',
                    ),
                    'TagKey' => 
                    array (
                      'title' => '标签键',
                      'description' => '资源绑定标签的标签键。',
                      'type' => 'string',
                      'example' => 'testkey',
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
            'errorCode' => 'NoPermission.Tag',
            'errorMessage' => 'No permissions to operate tags.',
          ),
          1 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The length of tags exceeded limit: 20.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"AAAAAdDWBF2****\\",\\n  \\"RequestId\\": \\"1340C38D-6189-54D1-86F6-7D5ECF3E0088\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceType\\": \\"ContainerGroup\\",\\n      \\"TagValue\\": \\"testvalue\\",\\n      \\"ResourceId\\": \\"eci-2zelg8vwnlzdhf8hv****\\\\n\\",\\n      \\"TagKey\\": \\"testkey\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询ECI资源绑定的标签信息',
    ),
    'UntagResources' => 
    array (
      'summary' => '调用UntagResources为指定的ECI资源解绑标签。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。根据ResourceType取值填写对应资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'eci-2zelg8vwnlzdhf8hv****',
            ),
            'required' => true,
            'docRequired' => true,
            'maxItems' => 100,
          ),
        ),
        3 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '要解绑的标签键列表。最多可输入20个标签键。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要解绑的标签键。',
              'type' => 'string',
              'required' => false,
              'example' => 'testkey',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。取值范围：

- ContainerGroup：ECI实例
- ImageCache：镜像缓存
- DataCache：数据缓存
- VirtualNode：虚拟节点',
            'type' => 'string',
            'required' => true,
            'example' => 'ContainerGroup',
          ),
        ),
        5 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否解绑资源上全部的标签。当请求中未设置 `TagKey`时，该参数才有效。取值范围：

- true
- false

默认值：false',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-xxx-xxx-xxxx-42665544xxxx',
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
                'example' => '89945DD3-9072-47D0-A318-353284CFC7B',
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
            'errorCode' => 'IncorrectStatus',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'OperationConflict',
            'errorMessage' => 'Request was denied due to conflict with a previous request.',
          ),
          2 => 
          array (
            'errorCode' => 'NoPermission.Tag',
            'errorMessage' => 'No permissions to operate tags.',
          ),
          3 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The length of tags exceeded limit: 20.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"89945DD3-9072-47D0-A318-353284CFC7B\\"\\n}","type":"json"}]',
      'title' => '为ECI资源解绑标签',
    ),
    'ListUsage' => 
    array (
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
                'example' => '89164E78-FC82-4684-BE97-DCDD85D26546',
              ),
              'Attributes' => 
              array (
                'description' => '指定地域权益配额的已使用量和使用上限的信息集合。包含以下几项：

- UsedCpu：已有vCPU数。
- MaxCpu：vCPU上限。
- MaxImageCacheCount：手动创建的镜像缓存数量上限。
- UsedImageCacheCount：已有的手动创建的镜像缓存数量。
- MaxAutoImageCacheCount：自动创建的镜像缓存数量上限。
- UsedAutoImageCacheCount：已有的自动创建的镜像缓存数量。
- MaxDataCacheCount：数据缓存数量上限。
- UsedDataCacheCount：已有的数据缓存数量。',
                'type' => 'object',
                'example' => '{
    "UsedAutoImageCacheCount": 4,
    "UsedDataCacheCount": 3,
    "MaxDataCacheCount": 100,
    "UsedCpu": 16.5,
    "MaxCpu": 1000,
    "MaxAutoImageCacheCount": 25,
    "MaxImageCacheCount": 500,
    "UsedImageCacheCount": 0
  }',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"89164E78-FC82-4684-BE97-DCDD85D26546\\",\\n  \\"Attributes\\": {\\n    \\"UsedAutoImageCacheCount\\": 4,\\n    \\"UsedDataCacheCount\\": 3,\\n    \\"MaxDataCacheCount\\": 100,\\n    \\"UsedCpu\\": 16.5,\\n    \\"MaxCpu\\": 1000,\\n    \\"MaxAutoImageCacheCount\\": 25,\\n    \\"MaxImageCacheCount\\": 500,\\n    \\"UsedImageCacheCount\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListUsage>\\n    <RequestId>89164E78-FC82-4684-BE97-DCDD85D26546</RequestId>\\n    <Attributes>\\n        <UsedCpu>11</UsedCpu>\\n        <MaxCpu>1000</MaxCpu>\\n        <MaxImageCacheCount>50</MaxImageCacheCount>\\n        <UsedImageCacheCount>0</UsedImageCacheCount>\\n    </Attributes>\\n</ListUsage>","errorExample":""}]',
      'title' => '查询权益配额',
      'summary' => '调用ListUsage查询指定地域的权益配额，包括已使用量和使用上限。',
      'description' => '本接口不支持资源组鉴权。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeContainerGroupPrice' => 
    array (
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
        'abilityTreeCode' => '17731',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeciY9GS39',
          1 => 'FEATUREeciIT94P2',
          2 => 'FEATUREeci5NN3BU',
          3 => 'FEATUREeciCZBDK8',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以调用[DescribeRegions](~~146965~~)查询最新的地域可用区信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以调用[DescribeRegions](~~146965~~)查询最新的地域可用区信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Cpu',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'vCPU大小。ECI支持的vCPU和内存规格请参见[vCPU和内存规格说明](~~114662~~)。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'docRequired' => true,
            'example' => '2.0',
          ),
        ),
        3 => 
        array (
          'name' => 'Memory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内存大小。单位为GiB。ECI支持的vCPU和内存规格请参见[vCPU和内存规格说明](~~114662~~)。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'docRequired' => true,
            'example' => '4.0',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的ECS实例规格。ECI支持指定的ECS规格请参见[ECI支持的ECS规格说明](~~114664~~)。

> 设置该参数后，将自动忽略传入的vCPU和内存值，仅返回ECS规格的价格信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs.c5.large',
          ),
        ),
        5 => 
        array (
          'name' => 'SpotStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的抢占策略。取值范围：

- NoSpot：正常按量付费实例。
- SpotWithPriceLimit：设置上限价格的抢占式实例。
- SpotAsPriceGo：系统自动出价，跟随当前市场实际价格的抢占式实例。

默认为：NoSpot。',
            'type' => 'string',
            'required' => false,
            'example' => 'SpotWithPriceLimit',
          ),
        ),
        6 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区。您可以调用[DescribeRegions](~~146965~~)查询最新的地域可用区信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-g',
          ),
        ),
        7 => 
        array (
          'name' => 'SpotPriceLimit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置抢占式实例的每小时最高价格，最多精确到小数点后3位。当SpotStrategy取值为SpotWithPriceLimit时，必须设置SpotPriceLimit。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '0.2',
          ),
        ),
        8 => 
        array (
          'name' => 'EphemeralStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '临时存储空间大小。单位为GiB.。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        9 => 
        array (
          'name' => 'SpotDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '抢占式实例的保护期。单位为小时。默认为1。可设置为0，表示无保护期。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'ComputeCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '算力类别。取值为economy时，表示查询经济型规格的价格。',
            'type' => 'string',
            'required' => false,
            'example' => 'economy',
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
                'description' => '请求ID，唯一标识。',
                'type' => 'string',
                'example' => '7A872585-33C7-4D69-AB8E-412E81EBA387',
              ),
              'PriceInfo' => 
              array (
                'description' => '价格信息类型（Price），包括价格和优惠规则。',
                'type' => 'object',
                'properties' => 
                array (
                  'SpotPrices' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'SpotPrice' => 
                      array (
                        'description' => '抢占式实例价格信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ZoneId' => 
                            array (
                              'description' => '可用区。',
                              'type' => 'string',
                              'example' => 'cn-hangzhou-i',
                            ),
                            'SpotPrice' => 
                            array (
                              'description' => '抢占式实例的价格。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.056',
                            ),
                            'InstanceType' => 
                            array (
                              'description' => '实例规格。',
                              'type' => 'string',
                              'example' => 'ecs.c5.large',
                            ),
                            'OriginPrice' => 
                            array (
                              'description' => '原价。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.622',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Price' => 
                  array (
                    'description' => '价格。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'DiscountPrice' => 
                      array (
                        'description' => '折扣价。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '0',
                      ),
                      'TradePrice' => 
                      array (
                        'description' => '最终价，为原价减去折扣。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '0.00012252',
                      ),
                      'OriginalPrice' => 
                      array (
                        'description' => '原价。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '0.00012252',
                      ),
                      'DetailInfos' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'DetailInfo' => 
                          array (
                            'description' => '价格的详细信息。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Resource' => 
                                array (
                                  'description' => '资源名称。',
                                  'type' => 'string',
                                  'example' => 'cpu',
                                ),
                                'DiscountPrice' => 
                                array (
                                  'description' => '折扣价。',
                                  'type' => 'number',
                                  'format' => 'float',
                                  'example' => '0',
                                ),
                                'TradePrice' => 
                                array (
                                  'description' => '成交价。',
                                  'type' => 'number',
                                  'format' => 'float',
                                  'example' => '0.000098',
                                ),
                                'OriginalPrice' => 
                                array (
                                  'description' => '原价。',
                                  'type' => 'number',
                                  'format' => 'float',
                                  'example' => '0.000098',
                                ),
                                'Rules' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'Rule' => 
                                    array (
                                      'description' => '定价规则子集。',
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'Description' => 
                                          array (
                                            'description' => '规则描述。',
                                            'type' => 'string',
                                            'example' => '买满1年，立享官网价格8.5折优惠',
                                          ),
                                          'RuleId' => 
                                          array (
                                            'description' => '规则ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '123456',
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
                      'Currency' => 
                      array (
                        'description' => '货币单位。可能值：

- CNY：该值仅适用于中国站。
- USD：该值仅适用于国际站。',
                        'type' => 'string',
                        'example' => 'CNY',
                      ),
                    ),
                  ),
                  'Rules' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Rule' => 
                      array (
                        'description' => '活动规则。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Description' => 
                            array (
                              'description' => '活动规则描述。',
                              'type' => 'string',
                              'example' => '买满1年，立享官网价格8.5折优惠',
                            ),
                            'RuleId' => 
                            array (
                              'description' => '活动ID。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '123456',
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
            'errorCode' => 'InvalidParam.CpuOrMemorySpec',
            'errorMessage' => 'The specified specification is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'TradeBidCommodityNotMatch',
            'errorMessage' => 'The trade ID and the commodity do not match.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidSpotCpuMemorySpec',
            'errorMessage' => 'The specified CPU and memory are not allowed. You must create spot ECI using standard ECS specifications for CPU and memory.',
          ),
          3 => 
          array (
            'errorCode' => 'FeatureBasedConstraintConflict',
            'errorMessage' => 'A conflict occurs in specified feature constraints: [%s].',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spot.NotMatched',
            'errorMessage' => '%s. We recommend that you use the create multi-zone function to avoid insufficient inventory. For more information, see https://help.aliyun.com/document_detail/157290.html',
          ),
          1 => 
          array (
            'errorCode' => 'FeatureAccessRestricted',
            'errorMessage' => 'Access to this feature:[%s] is restricted. Please contact Alibaba Cloud ECI support to request access.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7A872585-33C7-4D69-AB8E-412E81EBA387\\",\\n  \\"PriceInfo\\": {\\n    \\"SpotPrices\\": {\\n      \\"SpotPrice\\": [\\n        {\\n          \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n          \\"SpotPrice\\": 0.056,\\n          \\"InstanceType\\": \\"ecs.c5.large\\",\\n          \\"OriginPrice\\": 0.622\\n        }\\n      ]\\n    },\\n    \\"Price\\": {\\n      \\"DiscountPrice\\": 0,\\n      \\"TradePrice\\": 0.00012252,\\n      \\"OriginalPrice\\": 0.00012252,\\n      \\"DetailInfos\\": {\\n        \\"DetailInfo\\": [\\n          {\\n            \\"Resource\\": \\"cpu\\",\\n            \\"DiscountPrice\\": 0,\\n            \\"TradePrice\\": 0.000098,\\n            \\"OriginalPrice\\": 0.000098,\\n            \\"Rules\\": {\\n              \\"Rule\\": [\\n                {\\n                  \\"Description\\": \\"买满1年，立享官网价格8.5折优惠\\",\\n                  \\"RuleId\\": 123456\\n                }\\n              ]\\n            }\\n          }\\n        ]\\n      },\\n      \\"Currency\\": \\"CNY\\"\\n    },\\n    \\"Rules\\": {\\n      \\"Rule\\": [\\n        {\\n          \\"Description\\": \\"买满1年，立享官网价格8.5折优惠\\",\\n          \\"RuleId\\": 123456\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeContainerGroupPriceResponse>\\n    <RequestId>49BF254A-F5A6-5B71-9F2B-5DB61B4FE12B</RequestId>\\n    <PriceInfo>\\n        <Price>\\n            <OriginalPrice>0.00017222</OriginalPrice>\\n            <Currency>CNY</Currency>\\n            <DiscountPrice>0.00016949</DiscountPrice>\\n            <DetailInfos>\\n                <DetailInfo>\\n                    <OriginalPrice>0.00017222</OriginalPrice>\\n                    <DiscountPrice>0.00016949</DiscountPrice>\\n                    <Resource>instance_type</Resource>\\n                    <TradePrice>0.00000273</TradePrice>\\n                    <Rules>\\n                    </Rules>\\n                </DetailInfo>\\n            </DetailInfos>\\n            <TradePrice>0.00000273</TradePrice>\\n        </Price>\\n        <Rules>\\n            <Rule>\\n                <Description>买满1年，立享官网价格8.5折优惠</Description>\\n                <RuleId>123456</RuleId>\\n            </Rule>\\n        </Rules>\\n    </PriceInfo>\\n</DescribeContainerGroupPriceResponse>","errorExample":""}]',
      'title' => '查询实例价格',
      'summary' => '调用DescribeContainerGroupPrice查询实例的价格。',
      'description' => '- 本接口不支持资源组鉴权。
- ECI实例支持指定vCPU和内存，或者指定ECS规格创建。调用本接口查询价格时，请传入ECI支持指定的规格。
    - [vCPU和内存规格说明](~~114662~~)。
    - [ECI支持的ECS规格说明](~~114664~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAvailableResource' => 
    array (
      'summary' => '调用DescribeAvailableResource查询指定地域和可用区下可售ECS实例规格族。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '103990',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeciY9GS39',
          1 => 'FEATUREeci5NN3BU',
          2 => 'FEATUREeciIT94P2',
          3 => 'FEATUREeciCZBDK8',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

您可以调用[DescribeRegions](~~146965~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。

默认值为空，此时查询指定地域下的所有可用区。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou-e',
          ),
        ),
        2 => 
        array (
          'name' => 'DestinationResource',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '要查询的资源信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Category' => 
              array (
                'description' => '资源类型。取值范围：

- InstanceTypeFamily：表示查询实例规格族，配合Value使用。
- InstanceType：表示查询实例规格，配合Value，以及Cores和Memory使用。',
                'type' => 'string',
                'required' => true,
                'example' => 'InstanceTypeFamily',
              ),
              'Value' => 
              array (
                'description' => '实例规格族或者具体实例规格。

- 当Category取值为InstanceTypeFamily时，取值为实例规格族，如ecs.c5。
- 当Category取值为InstanceType时，取值为具体实例规格。如ecs.c5.large。',
                'type' => 'string',
                'required' => false,
                'example' => 'ecs.c6',
              ),
              'Cores' => 
              array (
                'description' => 'vCPU核数。当Category取值为InstanceType时，可以设置。',
                'type' => 'number',
                'format' => 'float',
                'required' => false,
                'example' => '2',
              ),
              'Memory' => 
              array (
                'description' => '内存大小。单位为GiB。当Category取值为InstanceType时，可以设置。',
                'type' => 'number',
                'format' => 'float',
                'required' => false,
                'example' => '4',
              ),
            ),
            'required' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

您可以调用[DescribeRegions](~~146965~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'SpotResource',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '要查询的抢占式实例的资源信息。',
            'type' => 'object',
            'properties' => 
            array (
              'SpotStrategy' => 
              array (
                'description' => '实例的抢占策略。取值范围：

- NoSpot：正常按量付费实例。
- SpotWithPriceLimit：设置上限价格的抢占式实例。
- SpotAsPriceGo：系统自动出价，跟随当前市场实际价格的抢占式实例。

默认为：NoSpot。

> 查询抢占式实例资源信息时，即取值为SpotWithPriceLimit或SpotAsPriceGo时，Category取值必须为InstanceType，同时需指定具体实例规格（Value），或者指定vCPU和内存（Cores和Memory）。',
                'type' => 'string',
                'required' => false,
                'example' => 'SpotAsPriceGo',
              ),
              'SpotPriceLimit' => 
              array (
                'description' => '抢占式实例的每小时最高价格，最多精确到小数点后3位。当SpotStrategy取值为SpotWithPriceLimit时，必须设置SpotPriceLimit。',
                'type' => 'number',
                'format' => 'double',
                'required' => false,
                'example' => '0.2',
              ),
              'SpotDuration' => 
              array (
                'description' => '抢占式实例的保护期。单位为小时。默认为1。可设置为0，表示无保护期。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6829735A-FF76-58C6-AECB-27CBF135A7AA',
              ),
              'AvailableZones' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AvailableZone' => 
                  array (
                    'description' => '可用区级别的资源信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-e',
                        ),
                        'AvailableResources' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'AvailableResource' => 
                            array (
                              'description' => '该可用区支持的资源信息集合。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Type' => 
                                  array (
                                    'description' => '资源类型。可能值：
- InstanceTypeFamily：表示实例规格族。
- InstanceType：表示实例规格。',
                                    'type' => 'string',
                                    'example' => 'InstanceTypeFamily',
                                  ),
                                  'SupportedResources' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'SupportedResource' => 
                                      array (
                                        'description' => '资源信息组成的数组。',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'type' => 'object',
                                          'properties' => 
                                          array (
                                            'Value' => 
                                            array (
                                              'description' => '支持的ECS实例规格信息。

- 当Type为InstanceTypeFamily时，Value值为实例规格族。
- 当Type为InstanceType时，Value值为实例规格。',
                                              'type' => 'string',
                                              'example' => 'ecs.c6',
                                            ),
                                            'StatusCategory' => 
                                            array (
                                              'description' => '根据库存详细分类资源类别。可能值：

- WithStock：库存充足。
- ClosedWithStock：库存供应保障能力低，建议选用WithStock状态的实例规格。
- WithoutStock：库存售罄，将会补充资源，建议选用WithStock状态的实例规格。
- ClosedWithoutStock：库存售罄，且不补充资源，请选用WithStock状态的实例规格。',
                                              'type' => 'string',
                                              'example' => 'WithStock',
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
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => '%s',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spot.NotMatched',
            'errorMessage' => '%s. We recommend that you use the create multi-zone function to avoid insufficient inventory.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.NotFound',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6829735A-FF76-58C6-AECB-27CBF135A7AA\\",\\n  \\"AvailableZones\\": {\\n    \\"AvailableZone\\": [\\n      {\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-e\\",\\n        \\"AvailableResources\\": {\\n          \\"AvailableResource\\": [\\n            {\\n              \\"Type\\": \\"InstanceTypeFamily\\",\\n              \\"SupportedResources\\": {\\n                \\"SupportedResource\\": [\\n                  {\\n                    \\"Value\\": \\"ecs.c6\\",\\n                    \\"StatusCategory\\": \\"WithStock\\"\\n                  }\\n                ]\\n              }\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAvailableResourceResponse>\\n    <RequestId>6829735A-FF76-58C6-AECB-27CBF135A7AA</RequestId>\\n    <AvailableZones>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ZoneId>cn-hangzhou-e</ZoneId>\\n        <AvailableResources>\\n            <Type>InstanceTypeFamily</Type>\\n            <SupportedResources>\\n                <Value>ecs.c6</Value>\\n                <StatusCategory>WithStock</StatusCategory>\\n            </SupportedResources>\\n        </AvailableResources>\\n    </AvailableZones>\\n</DescribeAvailableResourceResponse>","errorExample":""}]',
      'title' => '查询可用ECS实例规格',
      'description' => '调用CreateContainerGroup创建ECI实例时支持通过InstanceType参数来指定ECS规格，以满足特定的规格需求。为保证ECI实例能够创建成功，在创建ECI实例前，您可以先调用本接口查询指定地域和可用区下支持哪些ECS实例规格或实例规格族。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'eci.cn-qingdao.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'eci.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'eci.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-zhengzhou-jva',
      'endpoint' => 'eci.cn-zhengzhou-jva.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'eci.cn-huhehaote.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'eci.cn-wulanchabu.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'eci.cn-hangzhou.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'eci.cn-shanghai.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-nanjing',
      'endpoint' => 'eci.cn-nanjing.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-fuzhou',
      'endpoint' => 'eci.cn-fuzhou.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'eci.cn-shenzhen.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'eci.cn-heyuan.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'eci.cn-guangzhou.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'eci.cn-chengdu.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'eci.cn-hongkong.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'eci.ap-northeast-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'eci.ap-northeast-2.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'eci.ap-southeast-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'eci.ap-southeast-2.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'eci.ap-southeast-3.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'eci.ap-southeast-5.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'eci.ap-southeast-6.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'eci.us-east-1.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'eci.us-west-1.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'eci.eu-west-1.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'eci.eu-central-1.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'eci.ap-south-1.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'eci.me-east-1.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'eci.cn-hangzhou-finance.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'eci.cn-shanghai-finance.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'eci.cn-shenzhen-finance.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'eci.ap-southeast-7.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'eci.cn-beijing-finance-1.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'me-central-1',
      'endpoint' => 'eci.me-central-1.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-wuhan-lr',
      'endpoint' => 'eci.cn-wuhan-lr.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'eas',
    'version' => '2021-07-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 141865,
      'title' => '服务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateService',
        1 => 'CreateServiceAutoScaler',
        2 => 'CreateServiceCronScaler',
        3 => 'CreateServiceMirror',
        4 => 'CreateAppService',
        5 => 'CloneService',
        6 => 'DeleteService',
        7 => 'DeleteServiceLabel',
        8 => 'DeleteServiceAutoScaler',
        9 => 'DeleteServiceCronScaler',
        10 => 'DeleteServiceInstances',
        11 => 'DeleteServiceMirror',
        12 => 'UpdateService',
        13 => 'UpdateServiceLabel',
        14 => 'StartService',
        15 => 'StopService',
        16 => 'RestartService',
        17 => 'UpdateServiceAutoScaler',
        18 => 'UpdateServiceCronScaler',
        19 => 'DevelopService',
        20 => 'CommitService',
        21 => 'UpdateServiceMirror',
        22 => 'UpdateServiceVersion',
        23 => 'UpdateServiceSafetyLock',
        24 => 'UpdateServiceInstance',
        25 => 'UpdateAppService',
        26 => 'ReleaseService',
        27 => 'DescribeService',
        28 => 'DescribeServiceAutoScaler',
        29 => 'DescribeServiceCronScaler',
        30 => 'DescribeServiceDiagnosis',
        31 => 'DescribeServiceInstanceDiagnosis',
        32 => 'DescribeServiceLog',
        33 => 'DescribeServiceEvent',
        34 => 'DescribeServiceMirror',
        35 => 'DescribeGroup',
        36 => 'DescribeSpotDiscountHistory',
        37 => 'ListServiceInstances',
        38 => 'ListServiceVersions',
        39 => 'ListServiceContainers',
        40 => 'ListServices',
        41 => 'ListGroups',
      ),
    ),
    1 => 
    array (
      'id' => 141890,
      'title' => '资源组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateResource',
        1 => 'CreateResourceInstances',
        2 => 'CreateResourceLog',
        3 => 'DeleteResource',
        4 => 'DeleteResourceDLink',
        5 => 'DeleteResourceInstances',
        6 => 'DeleteResourceLog',
        7 => 'UpdateResource',
        8 => 'UpdateResourceDLink',
        9 => 'UpdateResourceInstance',
        10 => 'DescribeResource',
        11 => 'DescribeResourceDLink',
        12 => 'DescribeResourceLog',
        13 => 'ListResourceInstances',
        14 => 'ListResourceInstanceWorker',
        15 => 'ListResources',
        16 => 'ListResourceServices',
      ),
    ),
    2 => 
    array (
      'id' => 167670,
      'title' => '压测任务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateBenchmarkTask',
        1 => 'DeleteBenchmarkTask',
        2 => 'DescribeBenchmarkTask',
        3 => 'DescribeBenchmarkTaskReport',
        4 => 'ListBenchmarkTask',
        5 => 'StartBenchmarkTask',
        6 => 'StopBenchmarkTask',
        7 => 'UpdateBenchmarkTask',
      ),
    ),
    3 => 
    array (
      'id' => 187393,
      'title' => '私有网关',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateGateway',
        1 => 'DescribeGateway',
        2 => 'UpdateGateway',
        3 => 'CreateGatewayIntranetLinkedVpc',
        4 => 'ListGatewayIntranetLinkedVpc',
        5 => 'DeleteGatewayIntranetLinkedVpc',
        6 => 'DeleteGateway',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'ContainerInfo' => 
      array (
        'title' => '容器信息',
        'description' => '实例容器信息。',
        'type' => 'object',
        'properties' => 
        array (
          'Name' => 
          array (
            'title' => '容器名称',
            'description' => '容器名称。',
            'type' => 'string',
            'example' => 'worker0',
          ),
          'Image' => 
          array (
            'title' => '镜像',
            'description' => '镜像。',
            'type' => 'string',
            'example' => 'registry.cn-shanghai.aliyuncs.com/eas/echo_cn-shanghai:v0.0.1-20210129111320',
          ),
          'Port' => 
          array (
            'title' => '端口',
            'description' => '端口。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '8080',
          ),
          'RestartCount' => 
          array (
            'title' => '重启次数',
            'description' => '重启次数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '0',
          ),
          'Ready' => 
          array (
            'title' => '健康检查是否通过',
            'description' => '健康检查是否通过。',
            'type' => 'boolean',
            'enumValueTitles' => 
            array (
              'true' => '是',
              'false' => '否',
            ),
            'example' => 'true',
          ),
          'CurrentStatus' => 
          array (
            'title' => '当前状态-状态',
            'description' => '当前状态，取值如下：
- Waiting：等待中
- Running：运行中
- Terminated：已停止',
            'type' => 'string',
            'example' => 'Waiting',
          ),
          'CurrentReaon' => 
          array (
            'title' => '当前状态-原因',
            'description' => '出现当前状态的原因。',
            'type' => 'string',
            'example' => 'PodInitializing',
          ),
          'CurrentTimestamp' => 
          array (
            'title' => '当前状态-时间',
            'description' => '出现当前状态的时间。',
            'type' => 'string',
            'example' => '2022-03-21T06:17:57Z',
          ),
          'LastStatus' => 
          array (
            'title' => '上次状态-状态',
            'description' => '上次状态，取值如下：
- Waiting：等待中
- Running：运行中
- Terminated：已停止',
            'type' => 'string',
            'example' => 'Terminated',
          ),
          'LastReason' => 
          array (
            'title' => '上次状态-原因',
            'description' => '出现上次状态的原因。',
            'type' => 'string',
            'example' => 'Error',
          ),
          'LastTimestamp' => 
          array (
            'title' => '上次状态-时间',
            'description' => '出现上次状态的时间。',
            'type' => 'string',
            'example' => '2022-03-21T05:17:57Z',
          ),
        ),
      ),
      'Group' => 
      array (
        'title' => '服务组',
        'description' => '服务群组。',
        'type' => 'object',
        'properties' => 
        array (
          'Name' => 
          array (
            'title' => '服务组名称',
            'description' => '服务群组名称。',
            'type' => 'string',
            'example' => 'foo',
          ),
          'ClusterId' => 
          array (
            'title' => '服务组所在集群',
            'description' => '服务群组所在区域。',
            'type' => 'string',
            'example' => 'cn-shanghai',
          ),
          'CreateTime' => 
          array (
            'title' => '服务组创建时间',
            'description' => '服务群组创建时间。使用UTC时间格式。',
            'type' => 'string',
            'example' => '2020-05-19T14:19:42Z',
          ),
          'UpdateTime' => 
          array (
            'title' => '服务组更新时间',
            'description' => '服务群组更新时间。使用UTC时间格式。',
            'type' => 'string',
            'example' => '2021-01-29T11:13:20Z',
          ),
          'QueueService' => 
          array (
            'title' => '服务组包含的队列服务',
            'description' => '服务群组包含的队列服务。',
            'type' => 'string',
            'example' => 'qservice',
          ),
          'InternetEndpoint' => 
          array (
            'title' => '服务组公网地址',
            'description' => '服务群组公网地址。',
            'type' => 'string',
            'example' => 'http://1110*****.cn-hangzhou.pai-eas.aliyuncs.com/api/predict/test_group',
          ),
          'IntranetEndpoint' => 
          array (
            'title' => '服务组内网地址',
            'description' => '服务群组内网地址。',
            'type' => 'string',
            'example' => 'http://1110*****.vpc.cn-hangzhou.pai-eas.aliyuncs.com/api/predict/test_group',
          ),
          'AccessToken' => 
          array (
            'title' => '服务组流量入口Token',
            'description' => '服务组流量入口Token。',
            'type' => 'string',
            'example' => 'MzJiMDI5MDliODc0MTlkYmI0ZDhlYmExYjczYTIyZTE3Zm********',
          ),
        ),
      ),
      'Instance' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'HostIP' => 
          array (
            'title' => '实例所在的宿主机IP',
            'description' => '实例所在的宿主机IP。',
            'type' => 'string',
            'example' => '11.0.XX.XX',
          ),
          'HostName' => 
          array (
            'title' => '实例所在的宿主机名字',
            'description' => '实例所在的宿主机名字。',
            'type' => 'string',
            'example' => 'smart-scene-cls-854dbdc99d-****',
          ),
          'InnerIP' => 
          array (
            'title' => '实例的内网IP',
            'description' => '实例的内网IP。',
            'type' => 'string',
            'example' => '172.17.0.17',
          ),
          'InstanceName' => 
          array (
            'title' => '实例的名字',
            'description' => '实例的名字。',
            'type' => 'string',
            'example' => 'foo-5fc8946767-v****',
          ),
          'InstancePort' => 
          array (
            'title' => '实例的网络端口',
            'description' => '实例的网络端口。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '8080',
          ),
          'LastState' => 
          array (
            'title' => '实例上一次退出的状态',
            'description' => '实例上一次退出的状态。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '状态详情。',
              'type' => 'object',
              'example' => '[]',
            ),
          ),
          'Namespace' => 
          array (
            'title' => '实例的命名空间',
            'description' => '实例的命名空间',
            'type' => 'string',
            'example' => 'foo',
          ),
          'Reason' => 
          array (
            'title' => '实例当前状态的标识',
            'description' => '实例当前状态的标识。',
            'type' => 'string',
            'example' => 'RUNNING',
          ),
          'RestartCount' => 
          array (
            'title' => '实例重启次数',
            'description' => '实例重启次数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'Status' => 
          array (
            'title' => '实例状态',
            'description' => '实例状态。',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'Terminating' => '结束中',
              'Succeeded' => '成功结束',
              'Unknown' => '未知',
              'Failed' => '失败结束',
              'Running' => '运行中',
              'Pending' => '等待中',
            ),
            'example' => 'Running',
          ),
          'TotalProcesses' => 
          array (
            'title' => '实例总的进程数',
            'description' => '实例总的进程数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'ReadyProcesses' => 
          array (
            'title' => '实例已经启动完成的进程数',
            'description' => '实例已经启动完成的进程数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'StartAt' => 
          array (
            'title' => '实例的启动时间',
            'description' => '实例的启动时间。',
            'type' => 'string',
            'example' => '2021-05-27T09:46:05Z',
          ),
          'Role' => 
          array (
            'title' => '实例所属的服务角色，包括Queue, DataLoader, Standard等角色',
            'description' => '实例所属的服务角色，包括Queue, DataLoader, Standard等角色。',
            'type' => 'string',
            'example' => 'Standard',
          ),
          'ResourceType' => 
          array (
            'title' => '实例所属的资源组类型，包括PublicResource和PrivateResource',
            'description' => '实例所属的资源组类型，包括PublicResource和PrivateResource。',
            'type' => 'string',
            'example' => 'PublicResource',
          ),
          'TenantInstanceIP' => 
          array (
            'title' => '实例所在的VPC分配的IP',
            'description' => '实例所在的专属网络IP。',
            'type' => 'string',
            'example' => '192.168.xx.xx',
          ),
          'TenantHostIP' => 
          array (
            'title' => '宿主机所在的vpc分配的地址',
            'description' => '宿主机所在的专属网络IP。',
            'type' => 'string',
            'example' => '192.168.xx.xx',
          ),
          'IsSpot' => 
          array (
            'title' => '是否为竞价实例',
            'description' => '是否为竞价实例',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'CurrentAmount' => 
          array (
            'title' => '竞价实例当前小时价',
            'description' => '竞价实例当前小时价',
            'type' => 'number',
            'format' => 'float',
            'example' => '0.444',
          ),
          'OriginalAmount' => 
          array (
            'title' => '竞价实例折前原价',
            'description' => '竞价实例折前原价',
            'type' => 'number',
            'format' => 'float',
            'example' => '2.2',
          ),
          'Isolated' => 
          array (
            'title' => '实例是否被隔离',
            'description' => '实例是否被隔离',
            'type' => 'boolean',
            'example' => 'false',
          ),
        ),
      ),
      'Resource' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'ResourceId' => 
          array (
            'title' => '资源组ID',
            'description' => '资源组ID。',
            'type' => 'string',
            'example' => 'eas-r-asdasdasd',
          ),
          'ResourceName' => 
          array (
            'title' => '资源组名字',
            'description' => '资源组名称。',
            'type' => 'string',
            'example' => 'iot',
          ),
          'ResourceType' => 
          array (
            'title' => '资源组的类型',
            'description' => '资源组的类型，取值如下：
- Dedicated：普通资源组。
- SelfManaged：用户自运维资源组。',
            'type' => 'string',
            'example' => 'Dedicated',
          ),
          'ClusterId' => 
          array (
            'title' => '资源组所在的集群',
            'description' => '集群信息。',
            'type' => 'string',
            'example' => 'cn-shanghai',
          ),
          'CreateTime' => 
          array (
            'title' => '资源组创建时间',
            'description' => '创建时间。',
            'type' => 'string',
            'example' => '2019-02-26T17:52:49Z',
          ),
          'UpdateTime' => 
          array (
            'title' => '资源组更新时间',
            'description' => '最后更新时间。',
            'type' => 'string',
            'example' => '2019-02-26T19:52:49Z',
          ),
          'InstanceCount' => 
          array (
            'title' => '资源组实例个数',
            'description' => '机器实例总数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '4',
          ),
          'PrePaidInstanceCount' => 
          array (
            'title' => '资源组预付费实例个数',
            'description' => '预付费机器实例数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '2',
          ),
          'PostPaidInstanceCount' => 
          array (
            'title' => '资源组按量付费实例个数',
            'description' => '后付费机器实例数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '2',
          ),
          'CpuCount' => 
          array (
            'title' => '资源组CPU数量',
            'description' => 'CPU总核数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '64',
          ),
          'GpuCount' => 
          array (
            'title' => '资源组GPU个数',
            'description' => 'GPU总数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'Status' => 
          array (
            'title' => '资源组的状态',
            'description' => '资源组状态。',
            'type' => 'string',
            'example' => 'ResouceReady',
          ),
          'Message' => 
          array (
            'title' => '资源组摘要信息',
            'description' => '资源组最新消息。',
            'type' => 'string',
            'example' => 'Resource is ready',
          ),
          'ExtraData' => 
          array (
            'title' => '资源组自定义数据',
            'description' => '额外信息。',
            'type' => 'object',
            'example' => '{}',
          ),
        ),
      ),
      'ResourceInstance' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'InstanceId' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'example' => 'eas-i-1800z74n30kao****',
          ),
          'InstanceName' => 
          array (
            'title' => '实例名称',
            'description' => '实例名称。',
            'type' => 'string',
            'example' => 'eas01122713204*****',
          ),
          'InstanceIp' => 
          array (
            'title' => '实例IP',
            'description' => '实例IP。',
            'type' => 'string',
            'example' => '11.227.XX.XX',
          ),
          'InstanceStatus' => 
          array (
            'title' => '实例状态',
            'description' => '实例状态。',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'Ready-SchedulingDisabled' => '不可调度',
              'Ready' => '就绪',
              'NotReady' => '未就绪',
            ),
            'example' => 'Ready',
          ),
          'InstanceCpuCount' => 
          array (
            'title' => '实例的Cpu个数',
            'description' => '实例的Cpu个数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '4',
          ),
          'InstanceGpuCount' => 
          array (
            'title' => '实例的Gpu个数',
            'description' => '实例的Gpu个数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '0',
          ),
          'InstanceMemory' => 
          array (
            'title' => '实例的内存大小',
            'description' => '实例的内存大小。',
            'type' => 'string',
            'example' => '8192M',
          ),
          'InstanceSystemDiskSize' => 
          array (
            'title' => '实例的系统盘大小',
            'description' => '实例的系统盘大小。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '200',
          ),
          'InstanceGpuMemory' => 
          array (
            'title' => '实例的显存大小',
            'description' => '实例的显存大小',
            'type' => 'string',
            'example' => '0G',
          ),
          'InstanceUsedCpu' => 
          array (
            'title' => '实例已使用的CPU数量',
            'description' => '实例被使用的CPU数量。',
            'type' => 'number',
            'format' => 'float',
            'example' => '2.4',
          ),
          'InstanceUsedGpu' => 
          array (
            'title' => '实例已使用的GPU数量',
            'description' => '实例被使用的GPU数量。',
            'type' => 'number',
            'format' => 'float',
            'example' => '0',
          ),
          'InstanceUsedMemory' => 
          array (
            'title' => '实例已使用的内存大小',
            'description' => '实例被使用的内存大小。',
            'type' => 'string',
            'example' => '1000M',
          ),
          'InstanceType' => 
          array (
            'title' => '实例的机型',
            'description' => '实例的机型。',
            'type' => 'string',
            'example' => 'ecs.s6-c1m2.xlarge',
          ),
          'CreateTime' => 
          array (
            'title' => '实例的创建时间',
            'description' => '实例的创建时间。',
            'type' => 'string',
            'example' => '2020-07-05T22:51:32Z',
          ),
          'ChargeType' => 
          array (
            'title' => '实例的计费类型',
            'description' => '实例的计费类型。',
            'type' => 'string',
            'example' => 'PrePaid',
          ),
          'ExpiredTime' => 
          array (
            'title' => '实例过期时间',
            'description' => '实例过期时间。',
            'type' => 'string',
            'example' => '2020-08-05T22:51:32Z',
          ),
          'AutoRenewal' => 
          array (
            'title' => '实例是否自动续费',
            'description' => '实例是否自动续费。',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'Arch' => 
          array (
            'title' => '实例系统架构',
            'description' => '实例系统架构。',
            'type' => 'string',
            'example' => 'arm64',
          ),
          'Region' => 
          array (
            'title' => '实例所属区域',
            'description' => '实例所属区域。',
            'type' => 'string',
            'example' => 'cn-hangzhou',
          ),
          'Zone' => 
          array (
            'title' => '实例所属可用区',
            'description' => '实例所属可用区。',
            'type' => 'string',
            'example' => 'cn-hangzhou-b',
          ),
          'ResourceId' => 
          array (
            'title' => '实例所属资源组ID',
            'description' => '实例所属资源组ID',
            'type' => 'string',
            'example' => 'eas-r-xxxxx',
          ),
          'InstanceTenantIp' => 
          array (
            'title' => '实例专属网络IP',
            'description' => '实例专属网络IP。',
            'type' => 'string',
            'example' => '192.168.xx.xx',
          ),
          'InstanceUsedGpuMemory' => 
          array (
            'title' => '实例已使用的显存大小',
            'description' => '实例已使用的显存大小。',
            'type' => 'string',
            'example' => '470M',
          ),
        ),
      ),
      'ResourceInstanceWorker' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'Name' => 
          array (
            'title' => 'pod名',
            'description' => '服务实例的名字。',
            'type' => 'string',
            'example' => 'test-india-5bbbfdbc98-****',
          ),
          'ServiceName' => 
          array (
            'title' => '服务名',
            'description' => '服务的名字。',
            'type' => 'string',
            'example' => 'test-in****',
          ),
          'Status' => 
          array (
            'title' => 'pod状态',
            'description' => '实例的状态。',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'Terminating' => '结束中',
              'Succeeded' => '成功运行',
              'Unknown' => '未知',
              'Failed' => '失败结束',
              'Running' => '运行中',
              'Pending' => '等待中',
            ),
            'example' => 'Running',
          ),
          'Ready' => 
          array (
            'title' => '是否ready',
            'description' => '是否已就绪。',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'CpuRequest' => 
          array (
            'title' => 'CpuRequest',
            'description' => '申请的CPU核数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'GpuRequest' => 
          array (
            'title' => 'GpuRequest',
            'description' => '申请的GPU数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '0',
          ),
          'MemoryRquest' => 
          array (
            'title' => 'MemoryRquest',
            'description' => '申请的内存数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '200',
          ),
          'CpuLimit' => 
          array (
            'title' => 'CpuLimit',
            'description' => '限制的CPU核数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '2',
          ),
          'GpuLimit' => 
          array (
            'title' => 'GpuLimit',
            'description' => '限制的GPU数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '0',
          ),
          'MemoryLimit' => 
          array (
            'title' => 'MemoryLimit',
            'description' => '限制的内存数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '400',
          ),
          'RestartCount' => 
          array (
            'title' => 'RestartCount',
            'description' => '重启次数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '3',
          ),
          'StartTime' => 
          array (
            'title' => 'StartTime',
            'description' => '启动时间。',
            'type' => 'string',
            'example' => '2021-05-09T09:56:19Z',
          ),
        ),
      ),
      'Service' => 
      array (
        'title' => 'A short description of struct',
        'description' => '服务详情。',
        'type' => 'object',
        'properties' => 
        array (
          'RequestId' => 
          array (
            'title' => '请求ID',
            'description' => '请求ID。',
            'type' => 'string',
            'example' => '40325405-579C-4D82********',
          ),
          'Region' => 
          array (
            'title' => '服务所在的区域',
            'description' => '服务所在的区域。',
            'type' => 'string',
            'example' => 'cn-shanghai',
          ),
          'CallerUid' => 
          array (
            'title' => '服务创建账号的UID',
            'description' => '服务创建账号的UID。',
            'type' => 'string',
            'example' => '20123*******',
          ),
          'ParentUid' => 
          array (
            'title' => '服务创建账号的主账号UID',
            'description' => '服务创建账号的主账号UID。',
            'type' => 'string',
            'example' => '11234*******',
          ),
          'CurrentVersion' => 
          array (
            'title' => '当前运行的模型版本',
            'description' => '当前运行的模型版本。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'Cpu' => 
          array (
            'title' => '每个实例申请的cpu',
            'description' => '每个实例申请的CPU。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'Gpu' => 
          array (
            'title' => '每个实例申请的gpu',
            'description' => '每个实例申请的GPU。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '0',
          ),
          'Image' => 
          array (
            'title' => '服务的数据镜像',
            'description' => '服务的数据镜像。',
            'type' => 'string',
            'example' => 'registry.cn-shanghai.aliyuncs.com/eas/echo_cn-shanghai:v0.0.1-20210129111320',
          ),
          'PendingInstance' => 
          array (
            'title' => '被挂起的服务的实例个数',
            'description' => '被挂起的服务的实例个数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '0',
          ),
          'RunningInstance' => 
          array (
            'title' => '正在运行的服务的实例个数',
            'description' => '正在运行的服务的实例个数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'TotalInstance' => 
          array (
            'title' => '服务的所有实例总个数',
            'description' => '服务的所有实例总个数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'InternetEndpoint' => 
          array (
            'title' => '服务的公网endpoint',
            'description' => '服务的公网Endpoint。',
            'type' => 'string',
            'example' => 'http://10123*****.cn-shanghai.aliyuncs.com/api/predict/echo',
          ),
          'IntranetEndpoint' => 
          array (
            'title' => '服务内网endpoint',
            'description' => '服务内网Endpoint。',
            'type' => 'string',
            'example' => 'http://10123*****.vpc.cn-shanghai.aliyuncs.com/api/predict/echo',
          ),
          'LatestVersion' => 
          array (
            'title' => '服务最新版本号',
            'description' => '服务最新版本号。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'Memory' => 
          array (
            'title' => '每个worker需要的内存大小，单位为M',
            'description' => '每个实例申请的内存，单位为MB。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1024',
          ),
          'Message' => 
          array (
            'title' => '服务的摘要信息',
            'description' => '服务的摘要信息。',
            'type' => 'string',
            'example' => 'Service start successfully',
          ),
          'Namespace' => 
          array (
            'title' => '服务所在的命名空间',
            'description' => '服务所在的命名空间。',
            'type' => 'string',
            'example' => 'echo',
          ),
          'Reason' => 
          array (
            'title' => '服务的状态信息',
            'description' => '服务的状态原因。',
            'type' => 'string',
            'example' => 'RUNNING',
          ),
          'Resource' => 
          array (
            'title' => '服务所在的资源组',
            'description' => '服务所在的资源组。',
            'type' => 'string',
            'example' => 'eas-r-xxxxxxx',
          ),
          'ResourceAlias' => 
          array (
            'title' => '服务所在的资源组别名',
            'description' => '服务所在的资源组别名。',
            'type' => 'string',
            'example' => 'my_resource',
          ),
          'ServiceConfig' => 
          array (
            'title' => '服务的配置信息',
            'description' => '服务的配置信息。',
            'type' => 'string',
            'example' => '{        "metadata": {             "cpu":1,             "instance":1,             "memory":1024           },         "name":"echo",         "processor_entry":"libecho.so",         "processor_path":"http://oss-cn-hangzhou-zmf.aliyuncs.com/059247/echo_processor_release.tar.gz",         "processor_type":"cpp"     }',
          ),
          'ServiceName' => 
          array (
            'title' => '服务的名字',
            'description' => '服务的名称。',
            'type' => 'string',
            'example' => 'echo',
          ),
          'ServiceGroup' => 
          array (
            'title' => '服务所在分组',
            'description' => '服务所在分组。',
            'type' => 'string',
            'example' => 'my_group',
          ),
          'Status' => 
          array (
            'title' => '服务的状态',
            'description' => '服务的状态。可能值：
- Creating：创建中。
- Deploying：等待中（等待部署完毕）。
- Stopped：已停止。
- Failed：部署失败。
- Updating：升级中（实例会被更新）。
- Stopping：停止中。
- Waiting：等待中（等待实例启动完毕）。
- HotUpdate：升级中（表示热更新，不更新实例）。
- Starting：启动中。
- DeleteFailed：删除失败。
- Running：运行中。
- Scaling：升级中（实例扩缩容中）。
- Pending：等待中（等待具体处理）。
- Deleting：删除中。',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'Creating' => '创建中',
              'Deploying' => '等待中（等待部署完毕）',
              'Stopped' => '已停止',
              'Failed' => '部署失败',
              'Updating' => '升级中（实例会被更新）',
              'Stopping' => '停止中',
              'Waiting' => '等待中（等待实例启动完毕）',
              'HotUpdate' => '升级中（热更新，不更新实例）',
              'Starting' => '启动中',
              'DeleteFailed' => '删除失败',
              'Running' => '运行中',
              'Scaling' => '升级中（实例扩缩容中）',
              'Pending' => '等待中（等待具体处理）',
              'Deleting' => '删除中',
            ),
            'example' => 'Running',
          ),
          'CreateTime' => 
          array (
            'title' => '服务的创建时间',
            'description' => '服务的创建时间。UTC时间，RFC3339格式。',
            'type' => 'string',
            'example' => '2021-01-29T11:13:20Z',
          ),
          'UpdateTime' => 
          array (
            'title' => '服务的更新时间',
            'description' => '服务的更新时间。UTC时间，RFC3339格式。',
            'type' => 'string',
            'example' => '2021-01-29T11:13:20Z',
          ),
          'Weight' => 
          array (
            'title' => '服务灰度发布的权重值',
            'description' => '服务灰度发布的权重值。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '100',
          ),
          'ServiceId' => 
          array (
            'title' => '服务ID',
            'description' => '服务的唯一ID。',
            'type' => 'string',
            'example' => 'eas-m-xxasdat',
          ),
          'ServiceUid' => 
          array (
            'title' => '服务ID，同ServiceId',
            'description' => '服务ID，同ServiceId。',
            'type' => 'string',
            'example' => 'eas-m-xxasdat
',
          ),
          'AccessToken' => 
          array (
            'title' => '服务的请求Token',
            'description' => '服务的请求Token。',
            'type' => 'string',
            'example' => 'MzJiMDI5MDliODc0MTlkYmI0ZDhlYmExYjczYTIyZTE3Zm********',
          ),
          'Source' => 
          array (
            'title' => '服务的部署来源',
            'description' => '服务的部署来源。',
            'type' => 'string',
            'example' => 'dsw',
          ),
          'ExtraData' => 
          array (
            'title' => '服务的额外信息',
            'description' => '服务的额外信息。',
            'type' => 'string',
            'example' => '{\\"blue_green_services\\":[\\"test\\",\\"testxxxx\\"]}',
          ),
          'Role' => 
          array (
            'title' => '服务角色',
            'description' => '服务角色。',
            'type' => 'string',
            'example' => 'Queue',
          ),
          'RoleAttrs' => 
          array (
            'title' => '服务角色额外属性',
            'description' => '服务角色额外属性。',
            'type' => 'string',
            'example' => '"{\\"ApproxMaxLength\\":null,\\"Length\\":null,\\"MaxPayloadBytes\\":null}"',
          ),
          'SafetyLock' => 
          array (
            'title' => '服务安全锁',
            'description' => '服务安全锁。可能值：
- all：禁止所有操作。
- dangerous：禁止删除或停止服务。
- none：不加锁。',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'all' => '禁止所有操作',
              'dangerous' => '禁止删除/停止服务',
              'none' => '不加锁',
            ),
            'example' => 'dangerous',
            'enum' => 
            array (
              0 => 'none',
              1 => 'dangerous',
              2 => 'all',
            ),
          ),
          'SecondaryInternetEndpoint' => 
          array (
            'title' => '异步服务同步请求的公网Endpoint',
            'description' => '异步服务同步请求的公网Endpoint',
            'type' => 'string',
            'example' => 'http://10123*****.cn-shanghai.aliyuncs.com/api/predict/async_path.echo
',
          ),
          'SecondaryIntranetEndpoint' => 
          array (
            'title' => '异步服务同步请求的内网Endpoint',
            'description' => '异步服务同步请求的内网Endpoint',
            'type' => 'string',
            'example' => 'http://10123*****.vpc.cn-shanghai.aliyuncs.com/api/predict/async_path.echo
',
          ),
          'Labels' => 
          array (
            'title' => '服务标签列表',
            'description' => '服务标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'LabelKey' => 
                array (
                  'title' => '服务标签键',
                  'description' => '服务标签键。',
                  'type' => 'string',
                  'example' => 'key1',
                ),
                'LabelValue' => 
                array (
                  'title' => '服务标签值',
                  'description' => '服务标签值。',
                  'type' => 'string',
                  'example' => 'value1',
                ),
              ),
            ),
          ),
          'WorkspaceId' => 
          array (
            'title' => '服务所属工作空间ID',
            'description' => '服务所属工作空间ID',
            'type' => 'string',
            'example' => '123445',
          ),
          'AppType' => 
          array (
            'title' => '应用服务类型',
            'description' => '应用服务类型',
            'type' => 'string',
            'example' => 'LLM',
          ),
          'AppConfig' => 
          array (
            'title' => '应用服务配置信息',
            'description' => '应用服务配置信息',
            'type' => 'string',
            'example' => '{"ModelStorage":"oss"}',
          ),
          'AppSpecName' => 
          array (
            'title' => '应用服务规格名称',
            'description' => '应用服务规格名称',
            'type' => 'string',
            'example' => 'llama_7b_fp16',
          ),
          'AppVersion' => 
          array (
            'title' => '应用服务版本',
            'description' => '应用服务版本',
            'type' => 'string',
            'example' => 'v1',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'CreateService' => 
    array (
      'summary' => '创建PAI-EAS服务。',
      'path' => '/api/v2/services',
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
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求body。其中关键请求参数配置说明，请参见下方的**表 1. 请求 Body 参数**和**表 2. metadata 参数**。更多参数配置详情，请参见[服务模型所有相关参数说明](~~450525~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '镜像部署服务：
{
  "name": "foo",
  "metadata": {
    "instance": 2,
    "memory": 7000,
    "cpu": 4
    },
  "containers": [
    {
      "image": "****",
      "script": "**** --listen=0.0.0.0 --server_port=8000 --headless",
      "port": 8000
    }
  ],
  "storage": [
    {
      "oss": {
        "path": "oss://examplebuket/data111/",
        "readOnly": false
      },
      "properties": {
        "resource_type": "model"
      },
      "mount_path": "/data"
    }
  ]
}
镜像部署AI-Web应用：
{
  "name": "foo",
  "metadata": {
    "instance": 1,
    "memory": 7000,
    "cpu": 4,
    "enable_webservice": true
  },
  "containers": [
    {
      "image": "****",
      "script": "**** --listen=0.0.0.0 --server_port=8000 --headless",
      "port": 8000
    }
  ],
  "storage": [
    {
      "oss": {
        "path": "oss://examplebucket/data111/",
        "readOnly": false
      },
      "properties": {
      "resource_type": "model"
      },
      "mount_path": "/data"
    }
  ]
}
模型+processor部署服务：
{
  "metadata": {
    "instance": 1,
    "memory": 7000,
    "cpu": 4
  },
  "name": "foo",
  "model_config": {},
  "processor_type": "python",
  "processor_path": "oss://****",
  "processor_entry": "a.py",
  "model_path": "oss://****"
}',
          ),
        ),
        1 => 
        array (
          'name' => 'Develop',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否进入开发模式。',
            'description' => '是否进入开发模式。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => '进入开发模式',
              'false' => '不进入开发模式',
            ),
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'Labels',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户自定义标签。',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'string',
              'description' => '标签。',
              'example' => '{"key":"value"}',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'ServiceId' => 
              array (
                'description' => '新创建服务的服务ID。',
                'type' => 'string',
                'example' => 'eas-m-aaxxxddf',
              ),
              'ServiceName' => 
              array (
                'description' => '新创建服务的服务名字。',
                'type' => 'string',
                'example' => 'yourname',
              ),
              'Status' => 
              array (
                'description' => '新服务的当前状态。',
                'type' => 'string',
                'example' => 'Creating',
              ),
              'Region' => 
              array (
                'description' => '新创建服务所属的区域ID。',
                'type' => 'string',
                'example' => 'cn-shanghai',
              ),
              'InternetEndpoint' => 
              array (
                'description' => '新创建服务的公网Endpoint。',
                'type' => 'string',
                'example' => 'http://pai-eas.vpc.cn-shanghai.****',
              ),
              'IntranetEndpoint' => 
              array (
                'description' => '新创建服务的内网Endpoint。',
                'type' => 'string',
                'example' => 'http://pai-eas.cn-shanghai.****',
              ),
            ),
          ),
        ),
        400 => 
        array (
        ),
        403 => 
        array (
        ),
        409 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"ServiceId\\": \\"eas-m-aaxxxddf\\",\\n  \\"ServiceName\\": \\"yourname\\",\\n  \\"Status\\": \\"Creating\\",\\n  \\"Region\\": \\"cn-shanghai\\",\\n  \\"InternetEndpoint\\": \\"http://pai-eas.vpc.cn-shanghai.****\\",\\n  \\"IntranetEndpoint\\": \\"http://pai-eas.cn-shanghai.****\\"\\n}","type":"json"}]',
      'title' => '创建服务',
      'description' => '**请确保在使用该接口前，已充分了解EAS产品的收费方式和[价格](~~144261~~)。**',
      'requestParamsDescription' => '**表 1. 请求Body参数**

|名称|类型|是否必选|说明|
|---|---|---|---|
|name|String|是|服务名称，在同一个地域内全局唯一。|
|token|String|否|指定用于访问鉴权的Token字符串，若不指定则按**generate_token**自动生成。|
|model_path|String|否|模型相关的文件，支持HTTP和OSS两种格式，HTTP地址需为Public可访问的。若为OSS地址，则输入可以是目录或者文件；若文件为`.tar.gz`、`.tar.bz2`、`.zip`等压缩包，会自动解压。|
|role_arn|string|否|**model_path**或**processor_path**为OSS地址时，需要指定用于OSS授权的role_arn，role_arn的获取参数Role_ARN。|
|oss_endpoint|String|否|**model_path**或**processor_path**为OSS地址时，需要指定OSS Bucket对应的endpoint。|
|model_entry|String|否|模型的入口文件，若不指定，则使用**model_path**中的文件名，可以包含任意文件，主文件的路径会传递给Processor中的`Load()`函数。|
|processor_path|String|是|Processor相关的文件包，支持本地文件和HTTP链接地址，若文件为`.tar.gz`、`.tar.bz2`、`.zip`等压缩包，会自动解压。|
|processor_entry|String|否|**C、C++、Python类型必选**。Processor的主文件，其中包含了预测所需要`Load()`函数和`Process()`函数的实现。|
|processor_mainclass|String|否|**Java类型必选**。Processor的主文件，JAR包中的mainclass。|
|processor_type|String|是|processor实现的语言，目前已支持C、C++、Java、Python。|
|metadata|Dict|否|服务的meta信息。详见下表2。|
|cloud|Dict|否|目前只有指定机型部署时会用到，传参的样式为`"cloud":{"computing":{"instance_type": "ecs.gxxxxxx.large"}}`。|
|containers|List|否|自定义镜像部署。如果Processor部署无法满足需求，可以使用自定义镜像部署，详情请参见[服务部署：自定义镜像](~~258246~~)。|
>model_path和processor_path为输入模型数据和processor数据的数据来源，支持HTTP和OSS两种数据源，使用test命令进行本地调试时支持本地文件和目录。
- 若使用HTTP地址，则需要将相关文件打包成.tar.gz、.tar.bz2、.zip等压缩包，可上传至OSS并生成HTTP地址。
- 若使用OSS地址，则输入可以是目录，也可以是文件。


**表 2. metadata参数**
|名称|类型|是否必选|描述|示例值|
|---|---|---|---|---|
|instance|Int|否|服务启动的Worker数目。|1|
|cpu|Int|否|每个Worker需要的CPU数目。|1|
|gpu|Int|否|每个Worker需要的GPU数目。|0|
|memory|Int|否|每个Worker需要的内存大小，单位为MB。|1000|
|resource|String|否|服务所属的资源组。|eas-r-aaabbbccc|
|rpc.worker_threads|Int|否|每个Instance中用于并发处理请求的线程数。|5|
|rpc.max_queue_size|Int|否|请求处理时队列的最大长度，队列满时新请求会被以450状态码丢弃。|64|
|rpc.keepalive|Int|否|请求的超时时间，单位为毫秒。|5000|
|rpc.rate_limit|Int|否|单实例请求限流的QPS值，单实例QPS超出该值后的请求会被返回429丢弃。|0|
|release|Bool|否|若为true，则要创建一个灰度发布服务。|false|',
    ),
    'CreateServiceAutoScaler' => 
    array (
      'summary' => '开通服务自动扩缩容功能，为服务创建自动扩缩控制器。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/autoscaler',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务所在区域',
            'description' => '服务所在地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务名字',
            'description' => '服务名称。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'min' => 
              array (
                'title' => '最小 replica 数，需要大于0',
                'description' => '最小实例数，需要大于0。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '2',
              ),
              'max' => 
              array (
                'title' => '最大 replica 数，需要大于MinReplica',
                'description' => '最大实例数，需要大于Min Replica。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '8',
              ),
              'scaleStrategies' => 
              array (
                'description' => '伸缩策略列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'metricName' => 
                    array (
                      'description' => '指标名称，取值如下：
- qps：单实例qps伸缩阈值。
- cpu：cpu利用率阈值。
- gpu[util]：gpu利用率阈值。',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'qps',
                    ),
                    'threshold' => 
                    array (
                      'description' => '触发自动伸缩阈值。
- 指标名称配置为qps：当单实例的平均qps大于该值时会触发扩容。
- 指标名称配置为cpu：当单实例的平均cpu使用率大于该值时会触发扩容。
- 指标名称配置为gpu[util]：当单实例的平均gpu使用率大于该值时会触发扩容。',
                      'type' => 'number',
                      'format' => 'float',
                      'required' => true,
                      'example' => '10',
                    ),
                    'service' => 
                    array (
                      'description' => '指标所属服务，不配置默认为当前服务。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'demo_svc',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => true,
              ),
              'behavior' => 
              array (
                'description' => '自动扩缩容时的行为。',
                'type' => 'object',
                'properties' => 
                array (
                  'scaleUp' => 
                  array (
                    'description' => '扩容时的行为。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'stabilizationWindowSeconds' => 
                      array (
                        'description' => '扩容稳定窗口期时间，默认值为0。
只有当过去一段时间内的指标均满足条件，才会执行扩容。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                    ),
                    'required' => false,
                  ),
                  'scaleDown' => 
                  array (
                    'description' => '缩容时的行为。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'stabilizationWindowSeconds' => 
                      array (
                        'description' => '缩容稳定窗口期时间，默认值为300。
只有当过去一段时间内的指标均不满足条件，才会执行缩容。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '300',
                      ),
                    ),
                    'required' => false,
                  ),
                  'onZero' => 
                  array (
                    'description' => '缩容到0时的行为。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'scaleDownGracePeriodSeconds' => 
                      array (
                        'description' => '缩容到0之前的等待期。
当指标满足缩容到0的条件时，需要经过等待期的时间，才会执行缩容到0。默认值为600。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '600',
                      ),
                      'scaleUpActivationReplicas' => 
                      array (
                        'description' => '当从0开始扩容时，一次性创建的实例数。默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                      ),
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '请求返回信息。',
                'type' => 'string',
                'example' => 'Succeed to auto scale service [foo]',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Succeed to auto scale service [foo]\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '开通服务自动扩缩容',
    ),
    'CreateServiceCronScaler' => 
    array (
      'summary' => '开通服务定时扩缩容功能。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/cronscaler',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务所在区域',
            'description' => '服务所在地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务名字',
            'description' => '服务名称。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'ScaleJobs' => 
              array (
                'title' => '定时伸缩任务描述',
                'description' => '定时伸缩任务描述。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TargetSize' => 
                    array (
                      'title' => '执行伸缩任务的目标replica',
                      'description' => '执行伸缩任务的目标实例数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => true,
                      'example' => '1',
                    ),
                    'Schedule' => 
                    array (
                      'title' => '要执行伸缩任务的cron表达式',
                      'description' => '要执行伸缩任务的Cron表达式。如何配置Cron表达式，请参见**请求参数补充说明**章节。',
                      'type' => 'string',
                      'required' => true,
                      'example' => '0 18 * * * *',
                    ),
                    'Name' => 
                    array (
                      'description' => '定时扩缩容任务名称。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'scale-job-1',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => true,
              ),
              'ExcludeDates' => 
              array (
                'title' => '需要排除的时间点的cron表达式',
                'description' => '需要排除的时间点的Cron表达式列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Cron表达式。如何配置Cron表达式，请参见**请求参数补充说明**章节。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '* * * * * 0,6',
                ),
                'required' => false,
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
            'description' => '返回body。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'title' => '操作成功消息',
                'description' => '请求返回信息。',
                'type' => 'string',
                'example' => 'Create cron scaler for service [foo] successfully',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Create cron scaler for service [foo] successfully\\"\\n}","type":"json"}]',
      'title' => '开通服务定时扩缩容',
      'requestParamsDescription' => '### Cron表达式
![未命名绘图.drawio.png](https://intranetproxy.alipay.com/skylark/lark/0/2022/png/72178/1645094436048-953c2592-1017-4597-855d-22e6e78afee0.png#clientId=ua661de8e-75b1-4&crop=0&crop=0&crop=1&crop=1&from=ui&height=120&id=ufb1b2c04&margin=%5Bobject%20Object%5D&name=%E6%9C%AA%E5%91%BD%E5%90%8D%E7%BB%98%E5%9B%BE.drawio.png&originHeight=215&originWidth=547&originalType=binary&ratio=1&rotation=0&showTitle=false&size=17762&status=done&style=none&taskId=ue641ee0e-20dd-462b-ae2e-102a58eae0e&title=&width=305)

| 名称 | 可用值 | 可用特殊符号 |
| --- | --- | --- |
| 秒 | 0-59 | * / , - |
| 分 | 0-59 | * / , - |
| 小时 | 0-23 | * / , - |
| 日 | 1-31  | * / , - |
| 月 | 1-12 或 JAN-DEC | * / , - |
| 星期 | 0-6 或 SUN-SAT | * / , - |

#### 特殊符号说明
**星号(*)**
星号代表任意值，例如：0 0 0 1 * *  代表每月1号的0点整。
​

**连字符(-)**
连字符代表一段连续的取值范围，例如：0 0 12-14 * * * 代表每天的12:00、13:00和14:00。
​

**逗号(,)**
连字符代表一段取值范围，例如：0 0 12,14 * * * 代表每天的12:00和14:00。
​

**斜杠(/)**
斜杠用来代表一段增量的区间，例如：0 */15 * * * * 代表每小时的 0分、15分、30分和45分。
斜杠可以和连字符配合使用，例如：0 5-40/15 * * * * 代表每小时从5分到40分钟之间，每隔15分钟取一个值，有效时间点可以是0:05, 0:20, 0:35。',
    ),
    'CreateServiceMirror' => 
    array (
      'summary' => '开启服务流量镜像功能，可以将一个服务接受到的请求镜像到另一个服务上。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/mirror',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务所在区域',
            'description' => '服务所在区域。例如华东2（上海）为cn-shanghai。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务名字',
            'description' => '服务名称。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'Ratio' => 
              array (
                'title' => '比例 [0, 100]',
                'description' => '比例0~100。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '30',
              ),
              'Target' => 
              array (
                'title' => '服务实例列表',
                'description' => '服务实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '目标服务名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'echo',
                ),
                'required' => false,
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82***',
              ),
              'Message' => 
              array (
                'description' => '请求返回信息。',
                'type' => 'string',
                'example' => 'Traffic mirroring is ON for service [foo] in region [cn-shanghia], ratio [70%]',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82***\\",\\n  \\"Message\\": \\"Traffic mirroring is ON for service [foo] in region [cn-shanghia], ratio [70%]\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '开通服务流量镜像',
    ),
    'CreateAppService' => 
    array (
      'summary' => '创建应用服务。',
      'path' => '/api/v2/app_services',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
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
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => false,
            'example' => '12****',
          ),
        ),
        1 => 
        array (
          'name' => 'QuotaId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '归属额度ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'abcdef',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'ServiceName' => 
              array (
                'description' => '服务名字。',
                'type' => 'string',
                'required' => true,
                'example' => 'foo',
              ),
              'AppType' => 
              array (
                'description' => '应用服务类型。',
                'type' => 'string',
                'required' => true,
                'enumValueTitles' => 
                array (
                  'LLM' => 'LLM',
                ),
                'example' => 'LLM',
              ),
              'AppVersion' => 
              array (
                'description' => '应用版本。',
                'type' => 'string',
                'required' => false,
                'example' => 'v1',
              ),
              'ServiceSpec' => 
              array (
                'description' => '服务规格。取值如下：
- llama_7b_fp16
- llama_7b_int8
- llama_13b_fp16
- llama_7b_int8
- chatglm_6b_fp16
- chatglm_6b_int8
- chatglm2_6b_fp16
- baichuan_7b_int8
- baichuan_13b_fp16
- baichuan_7b_fp16',
                'type' => 'string',
                'required' => true,
                'example' => 'llama_7b_fp16',
              ),
              'Replicas' => 
              array (
                'description' => '实例数。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '1',
              ),
              'Config' => 
              array (
                'description' => '部署时需要的其他配置信息。',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'any',
                  'example' => ' { "ModelStorage": "oss", "OssPath": "oss://examplebucket/xxxx/" }',
                  'description' => '模型挂载等应用信息。支持以下两种挂载方式：
- OSS挂载，参数配置如下：
{
    "ModelStorage": "oss",
    "OssPath": "oss://examplebucket/xxxx/"
} 
- NAS挂载，参数配置如下：
{
    "ModelStorage": "nas",
    "NasMountTarget": "317d14****-****.cn-shanghai.nas.aliyuncs.com",
    "NasPath": "/",
    "SecurityGroupID": "sg-uf6e50fazt4u7smt****",
    "VpcID": "vpc-uf66zxxrlv0l4nj49****",
    "VswitchID": "vsw-uf6fg76uu2bx84tci****"
} 
其中关键参数说明如下：
- ModelStorage：表示挂载方式。
- OssPath：表示模型所在的OSS Bucket目录。
- NasMountTarget：表示NAS挂载点。
- NasPath：表示NAS源路径。
- SecurityGroupID：表示创建NAS文件系统使用的安全组ID。
- VpcID：表示创建NAS文件系统使用的专有网络VPC ID。
- VswitchID：表示创建NAS文件系统使用的交换机ID。',
                ),
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
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'ServiceId' => 
              array (
                'description' => '服务ID。',
                'type' => 'string',
                'example' => 'eas-m-aaxxxddf',
              ),
              'ServiceName' => 
              array (
                'description' => '服务名字。',
                'type' => 'string',
                'example' => 'foo',
              ),
              'Status' => 
              array (
                'description' => '服务的状态。',
                'type' => 'string',
                'example' => 'Creating',
              ),
              'Region' => 
              array (
                'description' => '服务所在的区域。',
                'type' => 'string',
                'example' => 'cn-shanghai',
              ),
              'InternetEndpoint' => 
              array (
                'description' => '服务的公网Endpoint。',
                'type' => 'string',
                'example' => 'http://pai-eas.cn-shanghai.****',
              ),
              'IntranetEndpoint' => 
              array (
                'description' => '服务内网Endpoint。',
                'type' => 'string',
                'example' => 'http://pai-eas-vpc.cn-shanghai.****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"ServiceId\\": \\"eas-m-aaxxxddf\\",\\n  \\"ServiceName\\": \\"foo\\",\\n  \\"Status\\": \\"Creating\\",\\n  \\"Region\\": \\"cn-shanghai\\",\\n  \\"InternetEndpoint\\": \\"http://pai-eas.cn-shanghai.****\\",\\n  \\"IntranetEndpoint\\": \\"http://pai-eas-vpc.cn-shanghai.****\\"\\n}","type":"json"}]',
      'title' => '创建应用服务',
    ),
    'CloneService' => 
    array (
      'summary' => '复制服务。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/clone',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '217114',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnKDX12S',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群Id',
            'description' => '集群Id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务名',
            'description' => '服务名。如何查看服务名称，请参见[ListServices](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求body。参数配置说明，请参见[CreateService](~~412086~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '{   "name": "foo",   "model_path": "http://path/to/model.tar.gz",   "processor": "tensorflow_cpu",   "metadata": {     "instance": 2,     "memory": 7000,     "cpu": 4   } }',
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
                'example' => '40325405-579C-4D82****',
              ),
              'ServiceId' => 
              array (
                'title' => '服务Id',
                'description' => '服务Id。',
                'type' => 'string',
                'example' => 'eas-m-r9knx7n9guf2p*****',
              ),
              'ServiceName' => 
              array (
                'title' => '服务名',
                'description' => '服务名。',
                'type' => 'string',
                'example' => 'foo',
              ),
              'Status' => 
              array (
                'title' => '服务状态',
                'description' => '服务状态。',
                'type' => 'string',
                'example' => 'Creating',
              ),
              'InternetEndpoint' => 
              array (
                'title' => '公网访问地址',
                'description' => '公网访问地址。',
                'type' => 'string',
                'example' => 'http://10123*****.cn-shanghai.aliyuncs.com/api/predict/echo',
              ),
              'IntranetEndpoint' => 
              array (
                'title' => '快速访问地址',
                'description' => '快速访问地址。',
                'type' => 'string',
                'example' => 'http://10123*****.vpc.cn-shanghai.aliyuncs.com/api/predict/echo',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"ServiceId\\": \\"eas-m-r9knx7n9guf2p*****\\",\\n  \\"ServiceName\\": \\"foo\\",\\n  \\"Status\\": \\"Creating\\",\\n  \\"InternetEndpoint\\": \\"http://10123*****.cn-shanghai.aliyuncs.com/api/predict/echo\\",\\n  \\"IntranetEndpoint\\": \\"http://10123*****.vpc.cn-shanghai.aliyuncs.com/api/predict/echo\\"\\n}","type":"json"}]',
      'title' => '复制服务',
    ),
    'DeleteService' => 
    array (
      'summary' => '删除指定的服务。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务所在区域。例如华东2（上海）为cn-shanghai。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务名称。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'Service [foo] in region [cn-shanghai] is terminating',
              ),
            ),
          ),
        ),
        404 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Service [foo] in region [cn-shanghai] is terminating\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除服务',
    ),
    'DeleteServiceLabel' => 
    array (
      'summary' => '删除已有的服务标签。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/label',
      'methods' => 
      array (
        0 => 'delete',
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
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务所在区域。',
            'description' => '服务所在区域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务名字。',
            'description' => '服务名称。如何查看服务名称，请参见[ListServices](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
          ),
        ),
        2 => 
        array (
          'name' => 'Keys',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'title' => '要删除的服务标签。',
            'description' => '要删除的服务标签。',
            'type' => 'array',
            'items' => 
            array (
              'title' => '服务标签key列表。',
              'description' => '服务标签key列表。',
              'type' => 'string',
              'required' => false,
              'example' => 'key1,key2',
            ),
            'required' => true,
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'title' => '返回信息。',
                'description' => '请求返回信息。',
                'type' => 'string',
                'example' => 'Succeed to delete service [service_from_zxxx] labels.',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Succeed to delete service [service_from_zxxx] labels.\\"\\n}","type":"json"}]',
      'title' => '删除服务标签',
    ),
    'DeleteServiceAutoScaler' => 
    array (
      'summary' => '删除服务已有的弹性伸缩控制器，关闭自动弹性伸缩功能。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/autoscaler',
      'methods' => 
      array (
        0 => 'delete',
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
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务所在区域',
            'description' => '服务所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务名字',
            'description' => '服务名称。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '请求返回信息。',
                'type' => 'string',
                'example' => 'Autoscaler for service [foo] deleted successfully',
              ),
            ),
          ),
        ),
        404 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Autoscaler for service [foo] deleted successfully\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '关闭服务自动扩缩容',
    ),
    'DeleteServiceCronScaler' => 
    array (
      'summary' => '关闭服务定时扩缩容功能。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/cronscaler',
      'methods' => 
      array (
        0 => 'delete',
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
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务所在地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务名称。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
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
            'description' => '返回body。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '请求返回信息。',
                'type' => 'string',
                'example' => 'Cronscaler for service [foo] deleted successfully',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Cronscaler for service [foo] deleted successfully\\"\\n}","type":"json"}]',
      'title' => '关闭服务定时扩缩容',
    ),
    'DeleteServiceInstances' => 
    array (
      'summary' => '调用DeleteServiceInstances重启服务的指定实例。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/instances',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务所在区域',
            'description' => '服务所在区域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务名字',
            'description' => '服务名称。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceList',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '删除的实例列表，多个实例名字之间逗号隔开',
            'description' => '重启的实例列表，多个实例名称之间使用半角逗号（,）分隔。如何查看实例名称，请参见[ListServiceInstances](~~412108~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo-rdsbxxxx,foo-rdsaxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'SoftRestart',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只重启容器进程，不重建实例。默认为false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'Container',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要重启进程的容器名称。只有在SoftRestart参数为true，该参数才会生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'worker0',
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
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '请求返回信息。',
                'type' => 'string',
                'example' => 'Instance(s) [foo-rdsb,foo-rdsa]  for service [foo] in region [cn-shanghai] was deleted successfully',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Instance(s) [foo-rdsb,foo-rdsa]  for service [foo] in region [cn-shanghai] was deleted successfully\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '重启服务实例',
    ),
    'DeleteServiceMirror' => 
    array (
      'summary' => '关闭服务流量镜像功能。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/mirror',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务所在区域',
            'description' => '服务所在区域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务名字',
            'description' => '服务名称。如何获取服务名称，请参见[ListServices](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82***',
              ),
              'Message' => 
              array (
                'description' => '请求返回信息。',
                'type' => 'string',
                'example' => 'Traffic mirroring is OFF for service [foo] in region [cn-shanghia], ratio [70%]',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82***\\",\\n  \\"Message\\": \\"Traffic mirroring is OFF for service [foo] in region [cn-shanghia], ratio [70%]\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '关闭服务流量镜像',
    ),
    'UpdateService' => 
    array (
      'summary' => '用于服务的模型或Processor更新。如果只更新metadata.instance字段，则用于服务扩缩容功能。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务所在的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务名称。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
          ),
        ),
        2 => 
        array (
          'name' => 'UpdateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务更新类型，目前支持合并模式和替换模式。不传默认为合并模式。

- merge（合并模式）：若原服务配置JSON为
`{"a":"b"}`，更新配置为`{"c":"d"}` ，则合并模式下最终配置为`{"a":"b","c":"d"}`。
- replace（替换模式）：若原服务配置JSON为
`{"a":"b"}`，更新配置为`{"c":"d"}` ，则替换模式下最终配置为`{"c":"d"}`。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'merge' => '合并模式',
              'replace' => '替换模式',
            ),
            'example' => 'merge',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '更新配置。参数配置说明，请参见[CreateService](~~412086~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '{
      "name": "foo",
      "model_path": "http://path/to/model.tar.gz",
      "processor": "tensorflow_cpu",
      "metadata": {
            "instance": 2,
            "memory": 7000,
            "cpu": 4
      }
}',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '操作结果信息。',
                'type' => 'string',
                'example' => 'Succeed to update service [foo] in region [cn-shanghai]',
              ),
            ),
          ),
        ),
        400 => 
        array (
        ),
        403 => 
        array (
        ),
        409 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Succeed to update service [foo] in region [cn-shanghai]\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新服务',
      'requestParamsDescription' => '> 请参考CreateService文档，获取更多请求参数介绍。',
    ),
    'UpdateServiceLabel' => 
    array (
      'summary' => '新增服务标签，或更新已有的服务标签。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/label',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务所在区域',
            'description' => '服务所在区域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务名字',
            'description' => '服务名称。如何查看服务名称，请参见[ListServices](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求Body',
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'Labels' => 
              array (
                'title' => '自定义服务标签',
                'description' => '自定义服务标签。',
                'type' => 'object',
                'required' => true,
                'additionalProperties' => 
                array (
                  'title' => '标签对象',
                  'description' => '用户定义标签。',
                  'type' => 'string',
                  'example' => '{"key":"value"}',
                ),
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求Id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'title' => '返回信息。',
                'description' => '请求返回信息。',
                'type' => 'string',
                'example' => 'Succeed to update service [service_from_XXXX] labels.',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Succeed to update service [service_from_XXXX] labels.\\"\\n}","type":"json"}]',
      'title' => '更新服务标签',
    ),
    'StartService' => 
    array (
      'summary' => '启动一个已停止状态的服务。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/start',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务所在区域',
            'description' => '服务所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务名字',
            'description' => '服务名称。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'Service [foo] in region [cn-shanghai] is starting',
              ),
            ),
          ),
        ),
        404 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Service [foo] in region [cn-shanghai] is starting\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '启动服务',
    ),
    'StopService' => 
    array (
      'summary' => '停止一个运行中的服务。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/stop',
      'methods' => 
      array (
        0 => 'put',
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
        'abilityTreeCode' => '37049',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnKDX12S',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务所在区域',
            'description' => '服务所在区域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务名字',
            'description' => '服务名称。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '请求返回信息。',
                'type' => 'string',
                'example' => 'Succeed to auto scale service [foo]',
              ),
            ),
          ),
        ),
        404 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Succeed to auto scale service [foo]\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '停止服务',
    ),
    'RestartService' => 
    array (
      'summary' => '重启服务。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/restart',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务所在区域。',
            'description' => '服务所在区域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务名称。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求Id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'title' => '请求消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'Service is restarting',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Service is restarting\\"\\n}","type":"json"}]',
      'title' => '重启服务',
    ),
    'UpdateServiceAutoScaler' => 
    array (
      'summary' => '修改服务已有的自动扩缩控制器配置。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/autoscaler',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务名称。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'min' => 
              array (
                'title' => '最小 replica 数，需要大于0',
                'description' => '最小实例数，需要大于0。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '2',
              ),
              'max' => 
              array (
                'title' => '最大 replica 数，需要大于MinReplica',
                'description' => '最大实例数，需要大于Min Replica。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '8',
              ),
              'scaleStrategies' => 
              array (
                'description' => '伸缩策略列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'metricName' => 
                    array (
                      'description' => '指标名称，取值如下：
- qps：单实例QPS伸缩阈值。
- cpu：CPU利用率阈值。',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'qps',
                    ),
                    'threshold' => 
                    array (
                      'description' => '触发自动伸缩阈值。
- 指标名称配置为qps：当单实例的平均QPS大于该值时会触发扩容。
- 指标名称配置为cpu：当单实例的平均CPU使用率大于该值时会触发扩容。',
                      'type' => 'number',
                      'format' => 'float',
                      'required' => true,
                      'example' => '100',
                    ),
                    'service' => 
                    array (
                      'description' => '指标所属服务，不配置默认为当前服务。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'demo_svc',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => true,
              ),
              'behavior' => 
              array (
                'description' => '自动扩缩容时的行为。',
                'type' => 'object',
                'properties' => 
                array (
                  'scaleUp' => 
                  array (
                    'description' => '扩容时的行为',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'stabilizationWindowSeconds' => 
                      array (
                        'description' => '扩容稳定窗口期时间，默认值为0。
只有当过去一段时间内的指标均满足条件，才会执行扩容。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                    ),
                    'required' => false,
                  ),
                  'scaleDown' => 
                  array (
                    'description' => '缩容时的行为。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'stabilizationWindowSeconds' => 
                      array (
                        'description' => '缩容稳定窗口期时间，默认值为300。
只有当过去一段时间内的指标均不满足条件，才会执行缩容。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '300',
                      ),
                    ),
                    'required' => false,
                  ),
                  'onZero' => 
                  array (
                    'description' => '缩容到0时的行为。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'scaleDownGracePeriodSeconds' => 
                      array (
                        'description' => '缩容到0之前的等待期，默认为600。
当指标满足缩容到0的条件时，需要经过等待期的时间，才会执行缩容到0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '600',
                      ),
                      'scaleUpActivationReplicas' => 
                      array (
                        'description' => '当从0开始扩容时，一次性创建的实例数。默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                      ),
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '请求返回信息。',
                'type' => 'string',
                'example' => 'Update auto scale for service [foo] successfully',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Update auto scale for service [foo] successfully\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新服务自动扩缩容配置',
    ),
    'UpdateServiceCronScaler' => 
    array (
      'summary' => '更新服务定时扩缩容配置信息。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/cronscaler',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务所在区域',
            'description' => '服务所在区域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务名字',
            'description' => '服务名字。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'ScaleJobs' => 
              array (
                'title' => '定时伸缩任务描述',
                'description' => '定时伸缩任务描述。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TargetSize' => 
                    array (
                      'title' => '执行伸缩任务的目标replica',
                      'description' => '执行伸缩任务的目标实例数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => true,
                      'example' => '2',
                    ),
                    'Schedule' => 
                    array (
                      'title' => '要执行伸缩任务的cron表达式',
                      'description' => '要执行伸缩任务的Cron表达式。如何配置Cron表达式，请参见**请求参数补充说明**。',
                      'type' => 'string',
                      'required' => true,
                      'example' => '0 18 * * * *
',
                    ),
                    'Name' => 
                    array (
                      'description' => '定时扩缩容任务的名称。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'scale-job-1
',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => true,
              ),
              'ExcludeDates' => 
              array (
                'title' => '需要排除的时间点的cron表达式',
                'description' => '需要排除的时间点的Cron表达式。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Cron表达式。如何配置Cron表达式，请参见**请求参数补充说明**。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '* * * * * 0,6
',
                ),
                'required' => false,
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
            'description' => '返回Body。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'Update cron scaler for service [foo] successfully',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Update cron scaler for service [foo] successfully\\"\\n}","type":"json"}]',
      'title' => '更新服务定时扩缩容配置',
      'requestParamsDescription' => '### Cron表达式
![未命名绘图.drawio.png](https://intranetproxy.alipay.com/skylark/lark/0/2022/png/72178/1645094436048-953c2592-1017-4597-855d-22e6e78afee0.png#clientId=ua661de8e-75b1-4&crop=0&crop=0&crop=1&crop=1&from=ui&height=120&id=ufb1b2c04&margin=%5Bobject%20Object%5D&name=%E6%9C%AA%E5%91%BD%E5%90%8D%E7%BB%98%E5%9B%BE.drawio.png&originHeight=215&originWidth=547&originalType=binary&ratio=1&rotation=0&showTitle=false&size=17762&status=done&style=none&taskId=ue641ee0e-20dd-462b-ae2e-102a58eae0e&title=&width=305)

| 名称 | 可用值 | 可用特殊符号 |
| --- | --- | --- |
| 秒 | 0-59 | * / , - |
| 分 | 0-59 | * / , - |
| 小时 | 0-23 | * / , - |
| 日 | 1-31  | * / , - |
| 月 | 1-12 或 JAN-DEC | * / , - |
| 星期 | 0-6 或 SUN-SAT | * / , - |

#### 特殊符号说明
**星号(*)**
星号代表任意值，例如：0 0 0 1 * *  代表每月1号的0点整。
​

**连字符(-)**
连字符代表一段连续的取值范围，例如 0 0 12-14 * * * 代表每天的12:00、13:00 和14:00
​

**逗号(,)**
连字符代表一段取值范围，例如 0 0 12,14 * * * 代表每天的12:00 和14:00
​

**斜杠(/)**
斜杠用来代表一段增量的区间，例如 0 */15 * * * * 代表每小时的0分、15分、30分、和45分。
斜杠可以和连字符配合使用，例如 0 5-40/15 * * * * 代表每小时从5分到40分钟之间，每隔15分钟取一个值，有效时间点可以是 0:05, 0:20, 0:35',
    ),
    'DevelopService' => 
    array (
      'summary' => '将容器服务转为开发模式，或退出开发模式。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/develop',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群Id。',
            'description' => '服务所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务名',
            'description' => '服务名称。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'echo',
          ),
        ),
        2 => 
        array (
          'name' => 'Exit',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否退出开发模式',
            'description' => '是否退出开发模式，取值如下：
- true：表示退出开发模式。
- false（默认值）：表示进入开发模式。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => '退出开发模式',
              'false' => '进入开发模式（可不填）',
            ),
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'title' => '执行结果消息',
                'description' => '返回结果信息。',
                'type' => 'string',
                'example' => 'Success',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Success\\"\\n}","type":"json"}]',
      'title' => '开发服务',
    ),
    'CommitService' => 
    array (
      'summary' => 'Commit自定义容器服务中的Worker0容器，并作为新镜像重新部署服务。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/commit',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群Id。',
            'description' => '服务所在地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务名。',
            'description' => '服务名称。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'foo',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'title' => '执行结果。',
                'description' => '返回结果信息。',
                'type' => 'string',
                'example' => 'Success',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Success\\"\\n}","type":"json"}]',
      'title' => 'Commit容器并发布',
    ),
    'UpdateServiceMirror' => 
    array (
      'summary' => '更新服务流量镜像配置。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/mirror',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务所在区域',
            'description' => '服务所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务名字',
            'description' => '服务名称。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'Ratio' => 
              array (
                'title' => '比例 [0, 100]',
                'description' => '流量比例，取值范围0~100。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '30',
              ),
              'Target' => 
              array (
                'title' => '服务实例列表',
                'description' => '服务实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务实例名。如何查看服务实例名称，请参见[ListServiceInstances ](~~412108~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'foo-xxxx',
                ),
                'required' => false,
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82***',
              ),
              'Message' => 
              array (
                'description' => '返回结果信息。',
                'type' => 'string',
                'example' => 'Traffic mirroring is updating for service [foo] in region [cn-shanghia], ratio [70%]',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82***\\",\\n  \\"Message\\": \\"Traffic mirroring is updating for service [foo] in region [cn-shanghia], ratio [70%]\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新服务流量镜像配置',
    ),
    'UpdateServiceVersion' => 
    array (
      'summary' => '更新服务的当前版本，用于服务在历史版本的切换，可实现回滚功能。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/version',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务所在区域',
            'description' => '服务所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务名字',
            'description' => '服务名字。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'echo',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'Version' => 
              array (
                'description' => '服务要切换的目标版本，INT类型，取值需要大于0且小于服务当前的版本。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '返回结果信息。',
                'type' => 'string',
                'example' => 'Service [foo] in region [cn-shanghai] is starting',
              ),
            ),
          ),
        ),
        400 => 
        array (
        ),
        403 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Service [foo] in region [cn-shanghai] is starting\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '切换服务版本',
    ),
    'UpdateServiceSafetyLock' => 
    array (
      'summary' => '更新服务安全锁，可以一定程度上避免对服务的误操作。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/lock',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
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
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务名称。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'Lock' => 
              array (
                'description' => '安全锁级别。
- all：锁所有操作。
- dangerous：锁危险操作（例如：删除、停止）。
- none：不加锁。',
                'type' => 'string',
                'required' => true,
                'enumValueTitles' => 
                array (
                  'all' => '锁所有操作',
                  'dangerous' => '锁危险操作（删除、停止）',
                  'none' => '不加锁',
                ),
                'example' => 'dangerous',
                'enum' => 
                array (
                  0 => 'none',
                  1 => 'dangerous',
                  2 => 'all',
                ),
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E089D584-B6F4-50C4-9902-DA2295B7****',
              ),
              'Message' => 
              array (
                'description' => '返回结果信息。',
                'type' => 'string',
                'example' => 'service safety lock updated to dangerous',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E089D584-B6F4-50C4-9902-DA2295B7****\\",\\n  \\"Message\\": \\"service safety lock updated to dangerous\\"\\n}","type":"json"}]',
      'title' => '更新服务安全锁',
    ),
    'UpdateServiceInstance' => 
    array (
      'summary' => '更新服务实例属性，目前只支持隔离服务实例。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/instances/{InstanceName}',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务所在区域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务名字。如何查看服务名称，请参见[ListServices](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务实例的名字。如何查看实例名称，请参见[ListServiceInstances](~~412108~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo-69xxxx4f4-5w9r9',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'Isolate' => 
              array (
                'description' => '是否隔离。取值如下：
- true：表示隔离服务实例。
- false：表示不隔离服务实例。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
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
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '操作成功信息。',
                'type' => 'string',
                'example' => 'instance xxxx isolation updated to true。',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"instance xxxx isolation updated to true。\\"\\n}","type":"json"}]',
      'title' => '更新服务实例属性',
    ),
    'UpdateAppService' => 
    array (
      'summary' => '更新应用服务。',
      'path' => '/api/v2/app_services/{ClusterId}/{ServiceName}',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务名字。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
          ),
        ),
        2 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1234**',
          ),
        ),
        3 => 
        array (
          'name' => 'QuotaId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '归属额度ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'abcdef',
          ),
        ),
        4 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'AppType' => 
              array (
                'description' => '应用类型。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'LLM' => 'LLM',
                ),
                'example' => 'LLM',
              ),
              'AppVersion' => 
              array (
                'description' => '应用版本。',
                'type' => 'string',
                'required' => false,
                'example' => 'v1',
              ),
              'ServiceSpec' => 
              array (
                'description' => '服务规格。取值如下：
- llama_7b_fp16
- llama_7b_int8
- llama_13b_fp16
- llama_7b_int8
- chatglm_6b_fp16
- chatglm_6b_int8
- chatglm2_6b_fp16
- baichuan_7b_int8
- baichuan_13b_fp16
- baichuan_7b_fp16',
                'type' => 'string',
                'required' => false,
                'example' => 'llama_7b_fp16',
              ),
              'Replicas' => 
              array (
                'description' => '实例数。必须大于0。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
              'Config' => 
              array (
                'description' => '部署时需要的其他配置信息。',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'any',
                  'example' => '{ "ModelStorage": "oss", "OssPath": "oss://examplebucket/xxxx/" }',
                  'description' => '模型挂载等应用信息。配置方法，请参见[创建应用服务](~~2621216~~)。',
                ),
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
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'Success',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Success\\"\\n}","type":"json"}]',
      'title' => '更新应用服务',
    ),
    'ReleaseService' => 
    array (
      'summary' => '执行分组发布或蓝绿发布切流。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/release',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务所在区域',
            'description' => '服务所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务名字',
            'description' => '服务名称。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'Weight' => 
              array (
                'title' => '灰度权重，范围 [0, 100]',
                'description' => '灰度权重，范围0~100。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '100',
              ),
              'TrafficState' => 
              array (
                'description' => '流量状态，取值如下：
- standalone：独立流量。
- grouping：分组流量。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'standalone' => '独立流量',
                  'grouping' => '分组流量',
                ),
                'example' => 'grouping',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'Releasing service [foo] in region [cn-shanghai] with weight [40], service status: [Running]',
              ),
            ),
          ),
        ),
        400 => 
        array (
        ),
        404 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Releasing service [foo] in region [cn-shanghai] with weight [40], service status: [Running]\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '调整服务蓝绿发布流量比例',
    ),
    'DescribeService' => 
    array (
      'summary' => '获取指定服务的详细信息。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务名称。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回的服务详情。',
            '$ref' => '#/components/schemas/Service',
          ),
        ),
        404 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"\\",\\n  \\"Region\\": \\"\\",\\n  \\"CallerUid\\": \\"\\",\\n  \\"ParentUid\\": \\"\\",\\n  \\"CurrentVersion\\": 0,\\n  \\"Cpu\\": 0,\\n  \\"Gpu\\": 0,\\n  \\"Image\\": \\"\\",\\n  \\"PendingInstance\\": 0,\\n  \\"RunningInstance\\": 0,\\n  \\"TotalInstance\\": 0,\\n  \\"InternetEndpoint\\": \\"\\",\\n  \\"IntranetEndpoint\\": \\"\\",\\n  \\"LatestVersion\\": 0,\\n  \\"Memory\\": 0,\\n  \\"Message\\": \\"\\",\\n  \\"Namespace\\": \\"\\",\\n  \\"Reason\\": \\"\\",\\n  \\"Resource\\": \\"\\",\\n  \\"ResourceAlias\\": \\"\\",\\n  \\"ServiceConfig\\": \\"\\",\\n  \\"ServiceName\\": \\"\\",\\n  \\"ServiceGroup\\": \\"\\",\\n  \\"Status\\": \\"\\",\\n  \\"CreateTime\\": \\"\\",\\n  \\"UpdateTime\\": \\"\\",\\n  \\"Weight\\": 0,\\n  \\"ServiceId\\": \\"\\",\\n  \\"ServiceUid\\": \\"\\",\\n  \\"AccessToken\\": \\"\\",\\n  \\"Source\\": \\"\\",\\n  \\"ExtraData\\": \\"\\",\\n  \\"Role\\": \\"\\",\\n  \\"RoleAttrs\\": \\"\\",\\n  \\"SafetyLock\\": \\"\\",\\n  \\"SecondaryInternetEndpoint\\": \\"\\",\\n  \\"SecondaryIntranetEndpoint\\": \\"\\",\\n  \\"Labels\\": [\\n    {\\n      \\"LabelKey\\": \\"\\",\\n      \\"LabelValue\\": \\"\\"\\n    }\\n  ],\\n  \\"WorkspaceId\\": \\"\\",\\n  \\"AppType\\": \\"\\",\\n  \\"AppConfig\\": \\"\\",\\n  \\"AppSpecName\\": \\"\\",\\n  \\"AppVersion\\": \\"\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询服务详情',
    ),
    'DescribeServiceAutoScaler' => 
    array (
      'summary' => '查看服务的自动扩缩配置详情。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/autoscaler',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务名称。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'echo',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'ServiceName' => 
              array (
                'title' => '服务名字',
                'description' => '服务名称。',
                'type' => 'string',
                'example' => 'foo',
              ),
              'MinReplica' => 
              array (
                'title' => '服务最小实例数',
                'description' => '服务最小实例数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'MaxReplica' => 
              array (
                'title' => '服务最大实例数',
                'description' => '服务最大实例数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '8',
              ),
              'Behavior' => 
              array (
                'description' => '额外扩缩容策略。例如触发扩缩容前的等待时间。',
                'type' => 'object',
                'example' => '{
  "behavior": {
    "scaleDown": {
      "stabilizationWindowSeconds": 150
    }
  }
}',
              ),
              'ScaleStrategies' => 
              array (
                'description' => '伸缩策略列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'metricName' => 
                    array (
                      'description' => '指标名称，可能值：
- QPS：单实例QPS伸缩阈值。
- CPU：CPU利用率阈值。',
                      'type' => 'string',
                      'example' => 'QPS',
                    ),
                    'threshold' => 
                    array (
                      'description' => '触发自动伸缩阈值。
- 指标名称配置为QPS：当单实例的平均QPS大于该值时会触发扩容。
- 指标名称配置为CPU：当单实例的平均CPU使用率大于该值时会触发扩容。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '10',
                    ),
                    'service' => 
                    array (
                      'description' => '指标所属服务，不配置默认为当前服务。',
                      'type' => 'string',
                      'example' => 'demo_svc',
                    ),
                  ),
                ),
              ),
              'CurrentMetrics' => 
              array (
                'description' => '当前指标列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'metricName' => 
                    array (
                      'description' => '指标名称。可能值：
- QPS
- CPU',
                      'type' => 'string',
                      'example' => 'qps',
                    ),
                    'value' => 
                    array (
                      'description' => '当前指标值。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '10',
                    ),
                    'service' => 
                    array (
                      'description' => '指标所属服务。',
                      'type' => 'string',
                      'example' => 'demo_svc',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"ServiceName\\": \\"foo\\",\\n  \\"MinReplica\\": 3,\\n  \\"MaxReplica\\": 8,\\n  \\"Behavior\\": {\\n    \\"behavior\\": {\\n      \\"scaleDown\\": {\\n        \\"stabilizationWindowSeconds\\": 150\\n      }\\n    }\\n  },\\n  \\"ScaleStrategies\\": [\\n    {\\n      \\"metricName\\": \\"QPS\\",\\n      \\"threshold\\": 10,\\n      \\"service\\": \\"demo_svc\\"\\n    }\\n  ],\\n  \\"CurrentMetrics\\": [\\n    {\\n      \\"metricName\\": \\"qps\\",\\n      \\"value\\": 10,\\n      \\"service\\": \\"demo_svc\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查看服务自动扩缩容信息',
    ),
    'DescribeServiceCronScaler' => 
    array (
      'summary' => '查看服务的定时扩缩容配置详情。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/cronscaler',
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
      'produces' => 
      array (
        0 => 'application/json',
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
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务所在地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务名称。如何查看服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'foo',
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
                'example' => '40325405-579C-4D82****',
              ),
              'ServiceName' => 
              array (
                'description' => '服务名称。',
                'type' => 'string',
                'example' => 'foo',
              ),
              'ExcludeDates' => 
              array (
                'description' => '已排除的时间点的Cron表达式列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Cron表达式。',
                  'type' => 'string',
                  'example' => '* * * * * 0,6
',
                ),
              ),
              'ScaleJobs' => 
              array (
                'description' => '定时伸缩任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Schedule' => 
                    array (
                      'description' => '伸缩任务的Cron表达式。',
                      'type' => 'string',
                      'example' => '0 18 * * * *',
                    ),
                    'TargetSize' => 
                    array (
                      'description' => '伸缩任务的目标实例数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Name' => 
                    array (
                      'description' => '伸缩任务的名称。',
                      'type' => 'string',
                      'example' => 'scale-job-1',
                    ),
                    'Message' => 
                    array (
                      'description' => '最后一次定时任务的详细信息。',
                      'type' => 'string',
                      'example' => '"cron hpa job scale-jobs-0 executed successfully. current replicas:3, desired replicas:2."',
                    ),
                    'State' => 
                    array (
                      'description' => '最后一次定时任务的状态。',
                      'type' => 'string',
                      'example' => 'Succeed',
                    ),
                    'LastProbeTime' => 
                    array (
                      'description' => '最后一次定时任务的运行UTC时间。',
                      'type' => 'string',
                      'example' => '2022-02-24T06:31:00Z',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '最后一次定时任务创建UTC时间。',
                      'type' => 'string',
                      'example' => '2020-06-24T02:11:30Z',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"ServiceName\\": \\"foo\\",\\n  \\"ExcludeDates\\": [\\n    \\"* * * * * 0,6\\\\n\\"\\n  ],\\n  \\"ScaleJobs\\": [\\n    {\\n      \\"Schedule\\": \\"0 18 * * * *\\",\\n      \\"TargetSize\\": 1,\\n      \\"Name\\": \\"scale-job-1\\",\\n      \\"Message\\": \\"\\\\\\"cron hpa job scale-jobs-0 executed successfully. current replicas:3, desired replicas:2.\\\\\\"\\",\\n      \\"State\\": \\"Succeed\\",\\n      \\"LastProbeTime\\": \\"2022-02-24T06:31:00Z\\",\\n      \\"CreateTime\\": \\"2020-06-24T02:11:30Z\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查看服务定时扩缩容信息',
    ),
    'DescribeServiceDiagnosis' => 
    array (
      'summary' => '查看服务的诊断详情。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/diagnosis',
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
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'DiagnosisList' => 
              array (
                'description' => '诊断信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '诊断信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Error' => 
                    array (
                      'description' => '识别到的异常。',
                      'type' => 'string',
                      'example' => 'Container worker0 failed to pull image.',
                    ),
                    'Causes' => 
                    array (
                      'description' => '异常原因列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '异常原因。',
                        'type' => 'string',
                        'example' => 'Failed to pull image "busybox:no_exist_tag": rpc error: code = NotFound.',
                      ),
                    ),
                    'Advices' => 
                    array (
                      'description' => '修复建议列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '修复建议。',
                        'type' => 'string',
                        'example' => 'Please make sure the container image exists.',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"DiagnosisList\\": [\\n    {\\n      \\"Error\\": \\"Container worker0 failed to pull image.\\",\\n      \\"Causes\\": [\\n        \\"Failed to pull image \\\\\\"busybox:no_exist_tag\\\\\\": rpc error: code = NotFound.\\"\\n      ],\\n      \\"Advices\\": [\\n        \\"Please make sure the container image exists.\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查看服务诊断详情',
    ),
    'DescribeServiceInstanceDiagnosis' => 
    array (
      'summary' => '查看服务实例的诊断详情。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/instances/{InstanceName}/diagnosis',
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
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务实例的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo-69xxxx4f4-5w9r9',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82***',
              ),
              'Diagnosis' => 
              array (
                'description' => '诊断信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Error' => 
                  array (
                    'description' => '识别到的异常。',
                    'type' => 'string',
                    'example' => 'Container worker0 failed to pull image.',
                  ),
                  'Causes' => 
                  array (
                    'description' => '异常原因列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '异常原因。',
                      'type' => 'string',
                      'example' => 'Failed to pull image "busybox:no_exist_tag": rpc error: code = NotFound.',
                    ),
                  ),
                  'Advices' => 
                  array (
                    'description' => '修复建议列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '修复建议。',
                      'type' => 'string',
                      'example' => 'Please make sure the container image exists.',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82***\\",\\n  \\"Diagnosis\\": {\\n    \\"Error\\": \\"Container worker0 failed to pull image.\\",\\n    \\"Causes\\": [\\n      \\"Failed to pull image \\\\\\"busybox:no_exist_tag\\\\\\": rpc error: code = NotFound.\\"\\n    ],\\n    \\"Advices\\": [\\n      \\"Please make sure the container image exists.\\"\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查看服务实例诊断详情',
    ),
    'DescribeServiceLog' => 
    array (
      'summary' => '获取指定服务的日志信息。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/logs',
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
      'consumes' => 
      array (
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '请求的页码（默认为1）',
            'description' => '服务日志的页码，默认为1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页的大小（默认为500）',
            'description' => '分页查询时设置的每页显示的日志行数，默认值为500。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '500',
          ),
        ),
        2 => 
        array (
          'name' => 'Ip',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '要查询的机器ip',
            'description' => '要查询的机器IP。如何获取机器IP，请参见[ListServiceInstances](~~412108~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '10.0.0.1',
          ),
        ),
        3 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询的关键字',
            'description' => '查询的关键字。',
            'type' => 'string',
            'required' => false,
            'example' => 'key',
          ),
        ),
        4 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询的开始时间',
            'description' => '查询的开始UTC时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2006-01-02 15:04:05',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询的结束时间',
            'description' => '查询的结束UTC时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2006-01-02 15:04:05',
          ),
        ),
        6 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        7 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务名称。如何获取服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'echo',
          ),
        ),
        8 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例的名称。如何获取实例名称，请参见[ListServiceInstances](~~412108~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'echo-da290ac8-7fckm',
          ),
        ),
        9 => 
        array (
          'name' => 'ContainerName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例的容器名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'worker0',
          ),
        ),
        10 => 
        array (
          'name' => 'Previous',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查看实例上次重启前的日志。注意：仅在实例出现重启时可用。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => 'true',
              'false' => 'false',
            ),
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82********',
              ),
              'Logs' => 
              array (
                'title' => '返回的日志信息',
                'description' => '返回的日志信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '日志信息。',
                  'type' => 'string',
                  'example' => 'echo_test',
                ),
              ),
              'PageNum' => 
              array (
                'title' => '当前页码',
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '总计数量',
                'description' => '总计数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalPageNum' => 
              array (
                'title' => '总计页码',
                'description' => '总计页码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '500',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82********\\",\\n  \\"Logs\\": [\\n    \\"echo_test\\"\\n  ],\\n  \\"PageNum\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"TotalPageNum\\": 500\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查看服务日志',
    ),
    'DescribeServiceEvent' => 
    array (
      'summary' => '查询服务近期部署事件。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/events',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '152928',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnKDX12S',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '请求页码（默认1）',
            'description' => '服务事件列表的页码，默认为1。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页的大小（默认为100）',
            'description' => '分页查询时设置的每页显示的事件数量，默认为100。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务对应区域',
            'description' => '服务所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务对应名称',
            'description' => '服务对应名称。如何获取服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
          ),
        ),
        4 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '日志查询起始时刻（默认7天前）',
            'description' => '查询起始UCT时间。默认为7天前。',
            'type' => 'string',
            'required' => false,
            'example' => '2006-01-02 15:04:05',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '日志查询终止时刻（默认当前时刻）',
            'description' => '查询终止时间，默认当前时刻。',
            'type' => 'string',
            'required' => false,
            'example' => '2006-01-02 15:04:05',
          ),
        ),
        6 => 
        array (
          'name' => 'EventType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件类型：

- Normal：正常事件。
- Warning：异常事件。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Warning' => 'Warning',
              'Normal' => 'Normal',
            ),
            'example' => 'Normal',
          ),
        ),
        7 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例的名字。如何获取实例名称，请参见[ListServiceInstances](~~412108~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'echo-test-784xxxx85d-hhnd8',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3D491C94-6239-5318-B4B4-799D859***',
              ),
              'Events' => 
              array (
                'description' => '事件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '事件信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '事件类型，可能值：
- Normal：正常事件。
- Warning：异常事件。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'Reason' => 
                    array (
                      'description' => '事件原因（服务状态变化信息）。',
                      'type' => 'string',
                      'example' => 'Updating',
                    ),
                    'Message' => 
                    array (
                      'description' => '事件信息（格式化后的JSON字符串）。',
                      'type' => 'string',
                      'example' => '{\\"versionId\\":1,\\"message\\":\\"Stage scale complete\\",\\"availableInstance\\":1,\\"unavailableInstance\\":0}',
                    ),
                    'Time' => 
                    array (
                      'description' => '事件发生UTC时间。',
                      'type' => 'string',
                      'example' => '2022-04-09 06:30:00',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '总计数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '29',
              ),
              'TotalPageNum' => 
              array (
                'description' => '总计页码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '12',
              ),
              'PageNum' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3D491C94-6239-5318-B4B4-799D859***\\",\\n  \\"Events\\": [\\n    {\\n      \\"Type\\": \\"Normal\\",\\n      \\"Reason\\": \\"Updating\\",\\n      \\"Message\\": \\"{\\\\\\\\\\\\\\"versionId\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"message\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"Stage scale complete\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"availableInstance\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"unavailableInstance\\\\\\\\\\\\\\":0}\\",\\n      \\"Time\\": \\"2022-04-09 06:30:00\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 29,\\n  \\"TotalPageNum\\": 12,\\n  \\"PageNum\\": 1\\n}","type":"json"}]',
      'title' => '查询服务事件',
    ),
    'DescribeServiceMirror' => 
    array (
      'summary' => '查看指定服务的流量镜像配置详情。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/mirror',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务所在区域',
            'description' => '服务所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务名字',
            'description' => '服务名字。如何获取服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'ServiceName' => 
              array (
                'title' => '服务名字',
                'description' => '服务名称。',
                'type' => 'string',
                'example' => 'foo',
              ),
              'Target' => 
              array (
                'title' => '设置流量镜像对服务列表',
                'description' => '设置流量镜像对服务列表。',
                'type' => 'string',
                'example' => 'foo2,foo3',
              ),
              'Ratio' => 
              array (
                'title' => '比例[0,100]',
                'description' => '流量比例，取值范围0~100。',
                'type' => 'string',
                'example' => '50',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"ServiceName\\": \\"foo\\",\\n  \\"Target\\": \\"foo2,foo3\\",\\n  \\"Ratio\\": \\"50\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查看服务流量镜像信息',
    ),
    'DescribeGroup' => 
    array (
      'summary' => '查看服务群组信息。',
      'path' => '/api/v2/groups/{ClusterId}/{GroupName}',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'in' => 'path',
          'schema' => 
          array (
            'description' => '所属所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务群组名称。如何获取群组名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '服务群组详情信息。',
            '$ref' => '#/components/schemas/Group',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Name\\": \\"\\",\\n  \\"ClusterId\\": \\"\\",\\n  \\"CreateTime\\": \\"\\",\\n  \\"UpdateTime\\": \\"\\",\\n  \\"QueueService\\": \\"\\",\\n  \\"InternetEndpoint\\": \\"\\",\\n  \\"IntranetEndpoint\\": \\"\\",\\n  \\"AccessToken\\": \\"\\"\\n}","type":"json"}]',
      'title' => '查看服务群组详情',
    ),
    'DescribeSpotDiscountHistory' => 
    array (
      'summary' => '查询抢占式实例历史价格。关于抢占式实例，请参考高级配置：抢占型实例选择。',
      'path' => '/api/v2/public/spot_discount',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '183027',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnPKQVPS',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs.c6.4xlarge',
          ),
        ),
        1 => 
        array (
          'name' => 'IsProtect',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否有保护期。如果有保护期，在抢占式实例创建1小时内，实例不会被抢占。',
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
                'example' => '40325405-579C-4D82***',
              ),
              'SpotDiscounts' => 
              array (
                'description' => '抢占式实例折扣。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ZoneId' => 
                    array (
                      'description' => '可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-i',
                    ),
                    'SpotDiscount' => 
                    array (
                      'description' => '抢占式实例折扣。0.1代表一折。',
                      'type' => 'string',
                      'example' => '0.1',
                    ),
                    'Timestamp' => 
                    array (
                      'description' => '此折扣的UTC时间。',
                      'type' => 'string',
                      'example' => '2024-04-10T10:00:00Z',
                    ),
                    'InstanceType' => 
                    array (
                      'description' => '实例规格。',
                      'type' => 'string',
                      'example' => 'ecs.c7.large',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82***\\",\\n  \\"SpotDiscounts\\": [\\n    {\\n      \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n      \\"SpotDiscount\\": \\"0.1\\",\\n      \\"Timestamp\\": \\"2024-04-10T10:00:00Z\\",\\n      \\"InstanceType\\": \\"ecs.c7.large\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询抢占式实例历史价格',
    ),
    'ListServiceInstances' => 
    array (
      'summary' => '获取指定服务的实例列表。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/instances',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务所在区域',
            'description' => '服务所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务名字',
            'description' => '服务名称。如何获取服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'foo',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '请求的页码（默认为1）',
            'description' => '服务实例列表的页，默认值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页的大小（默认为100）',
            'description' => '分页查询时设置的每页显示的实例数量，默认为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关键字搜索。支持按实例名、实例IP、实例所在的机器的IP、实例规格搜索。',
            'type' => 'string',
            'required' => false,
            'example' => '10.118.xx.xx',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例所在的资源组类型。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'PublicResource' => '公共资源组',
              'DedicatedResource' => '专属资源组',
            ),
            'example' => 'PublicResource',
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs.c7.large',
          ),
        ),
        7 => 
        array (
          'name' => 'InstanceStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例的状态。',
            'type' => 'string',
            'required' => false,
            'example' => 'Running',
          ),
        ),
        8 => 
        array (
          'name' => 'InstanceIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例的IP。',
            'type' => 'string',
            'required' => false,
            'example' => '10.224.xx.xx',
          ),
        ),
        9 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例的名字。',
            'type' => 'string',
            'required' => false,
            'example' => 'foo-bdc5xxxx-8l7rk',
          ),
        ),
        10 => 
        array (
          'name' => 'HostIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例所在机器的IP。',
            'type' => 'string',
            'required' => false,
            'example' => '10.224.xx.xx',
          ),
        ),
        11 => 
        array (
          'name' => 'IsSpot',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为抢占式实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        12 => 
        array (
          'name' => 'Role',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务的角色。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'DataSet' => '数据集服务',
              'SDProxy' => 'Stable-Diffusion代理服务',
              'Standard' => '普通预测服务',
              'Queue' => '队列服务',
            ),
            'example' => 'Queue',
          ),
        ),
        13 => 
        array (
          'name' => 'Sort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'StartTime' => '创建时间',
            ),
            'example' => 'StartTime',
          ),
        ),
        14 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序顺序。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'asc' => '升序',
              'desc' => '降序',
            ),
            'example' => 'desc',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Instances' => 
              array (
                'description' => '服务实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务实例。',
                  '$ref' => '#/components/schemas/Instance',
                ),
              ),
              'PageNumber' => 
              array (
                'description' => '返回查询的实例列表的当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '返回每页显示的实例数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalCount' => 
              array (
                'description' => '实例总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Instances\\": [\\n    {\\n      \\"HostIP\\": \\"\\",\\n      \\"HostName\\": \\"\\",\\n      \\"InnerIP\\": \\"\\",\\n      \\"InstanceName\\": \\"\\",\\n      \\"InstancePort\\": 0,\\n      \\"LastState\\": [\\n        {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      ],\\n      \\"Namespace\\": \\"\\",\\n      \\"Reason\\": \\"\\",\\n      \\"RestartCount\\": 0,\\n      \\"Status\\": \\"\\",\\n      \\"TotalProcesses\\": 0,\\n      \\"ReadyProcesses\\": 0,\\n      \\"StartAt\\": \\"\\",\\n      \\"Role\\": \\"Standard\\",\\n      \\"ResourceType\\": \\"PublicResource\\",\\n      \\"TenantInstanceIP\\": \\"192.168.0.39\\",\\n      \\"TenantHostIP\\": \\"192.168.0.39\\",\\n      \\"IsSpot\\": false,\\n      \\"CurrentAmount\\": 0.444,\\n      \\"OriginalAmount\\": 2.2,\\n      \\"Isolated\\": false\\n    }\\n  ],\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"TotalCount\\": 1\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询服务实例列表',
    ),
    'ListServiceVersions' => 
    array (
      'summary' => '查询服务历史版本。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/versions',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '152269',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnKDX12S',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务所在区域',
            'description' => '服务所在区域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务名字',
            'description' => '服务名称。如何获取服务名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_oss',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '请求的页码（默认为1）',
            'description' => '请求的页码，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页的大小（默认为100）',
            'description' => '分页查询时设置的每页显示的版本数量，默认为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
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
                'example' => 'E089D584-B6F4-50C4-9902-DA2295B7****',
              ),
              'PageNumber' => 
              array (
                'description' => '返回查询的历史版本的当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '返回每页显示的历史版本数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '总计数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '166',
              ),
              'Versions' => 
              array (
                'description' => '版本信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '版本信息集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'BuildTime' => 
                    array (
                      'description' => '版本创建UTC时间。',
                      'type' => 'string',
                      'example' => '2022-08-29T22:02:14Z',
                    ),
                    'ImageAvailable' => 
                    array (
                      'description' => '镜像可用性。可能值：
- true：可用。
- false：不可用。
- unknown：未知。',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                    'ImageId' => 
                    array (
                      'description' => '镜像ID。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '4',
                    ),
                    'Message' => 
                    array (
                      'description' => '服务的摘要信息。',
                      'type' => 'string',
                      'example' => 'Service is Running',
                    ),
                    'ServiceRunnable' => 
                    array (
                      'description' => 'eas服务是否启用，可能值：
- true：启用。
- false：未启用。
- unknown：未知。',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                    'ServiceConfig' => 
                    array (
                      'description' => '服务部署配置。只有自定义镜像部署才会返回此字段。',
                      'type' => 'string',
                      'example' => '{
    "metadata": {
        "cpu": 1,
        "instance": 1,
        "memory": 1024
    },
    "name": "echo"
}',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E089D584-B6F4-50C4-9902-DA2295B7****\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 166,\\n  \\"Versions\\": [\\n    {\\n      \\"BuildTime\\": \\"2022-08-29T22:02:14Z\\",\\n      \\"ImageAvailable\\": \\"true\\",\\n      \\"ImageId\\": 4,\\n      \\"Message\\": \\"Service is Running\\",\\n      \\"ServiceRunnable\\": \\"true\\",\\n      \\"ServiceConfig\\": \\"{\\\\n    \\\\\\"metadata\\\\\\": {\\\\n        \\\\\\"cpu\\\\\\": 1,\\\\n        \\\\\\"instance\\\\\\": 1,\\\\n        \\\\\\"memory\\\\\\": 1024\\\\n    },\\\\n    \\\\\\"name\\\\\\": \\\\\\"echo\\\\\\"\\\\n}\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询服务历史版本',
    ),
    'ListServiceContainers' => 
    array (
      'summary' => '查询服务的容器列表。',
      'path' => '/api/v2/services/{ClusterId}/{ServiceName}/instances/{InstanceName}/containers',
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
      'produces' => 
      array (
        0 => 'application/json',
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
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务所在地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'foo',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务实例的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'foo-69xxxx4f4-5w9r9',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'ServiceName' => 
              array (
                'description' => '服务名称。',
                'type' => 'string',
                'example' => 'foo',
              ),
              'Containers' => 
              array (
                'description' => '服务实例的容器列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '容器的详细信息。',
                  '$ref' => '#/components/schemas/ContainerInfo',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"ServiceName\\": \\"foo\\",\\n  \\"Containers\\": [\\n    {\\n      \\"Name\\": \\"\\",\\n      \\"Image\\": \\"\\",\\n      \\"Port\\": 0,\\n      \\"RestartCount\\": 0,\\n      \\"Ready\\": true,\\n      \\"CurrentStatus\\": \\"\\",\\n      \\"CurrentReaon\\": \\"\\",\\n      \\"CurrentTimestamp\\": \\"\\",\\n      \\"LastStatus\\": \\"\\",\\n      \\"LastReason\\": \\"\\",\\n      \\"LastTimestamp\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询服务的容器列表',
    ),
    'ListServices' => 
    array (
      'summary' => '获取当前用户的服务列表。',
      'path' => '/api/v2/services',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'Sort',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序字段 （时间戳类型默认倒序排序）',
            'description' => '排序字段。按时间戳类型默认倒序排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'CreateTime',
          ),
        ),
        1 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序方式（默认降序）',
            'description' => '排序方式，取值如下：
- desc（默认值）：降序。
- asc：升序。',
            'type' => 'string',
            'required' => false,
            'example' => 'asc',
          ),
        ),
        2 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模糊匹配字段（只支持按服务名字模糊匹配）',
            'description' => '模糊匹配字段。只支持按服务名字模糊匹配。',
            'type' => 'string',
            'required' => false,
            'example' => 'foo',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '请求的页码（默认为1）',
            'description' => '服务列表的请求页码，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页的大小（默认为100）',
            'description' => '分页查询时设置的每页显示的服务数量，默认为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
        5 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务组名称过滤',
            'description' => '服务群组名称，如何获取服务群组名称，请参见[ListServices ](~~412109~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'foo',
          ),
        ),
        6 => 
        array (
          'name' => 'ParentServiceUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Band成员服务对应的主服务ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'eas-m-ijafy3c8cxxxx',
          ),
        ),
        7 => 
        array (
          'name' => 'ServiceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务类型，取值如下：
- Async
- Standard
- Offline Task
- Proxima',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Async' => 'Async',
              'Standard' => 'Standard',
              'OfflineTask' => 'OfflineTask',
              'Proxima' => 'Proxima',
            ),
            'example' => 'Standard',
          ),
        ),
        8 => 
        array (
          'name' => 'Label',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '按标签过滤。',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'string',
              'description' => '按`{"key":"value"}`格式填写。Value可为null或空字符，代表只按Key过滤，Value可为任意值。',
              'example' => '{"key1":"value1","key2":null}',
            ),
          ),
        ),
        9 => 
        array (
          'name' => 'ServiceStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务运行的状态。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Creating' => 'Creating',
              'Stopped' => 'Stopped',
              'Failed' => 'Failed',
              'Complete' => 'Complete',
              'Cloning' => 'Cloning',
              'Stopping' => 'Stopping',
              'Updating' => 'Updating',
              'Waiting' => 'Waiting',
              'HotUpdate' => 'HotUpdate',
              'Committing' => 'Committing',
              'Starting' => 'Starting',
              'DeleteFailed' => 'DeleteFailed',
              'Running' => 'Running',
              'Developing' => 'Developing',
              'Scaling' => 'Scaling',
              'Deleted' => 'Deleted',
              'Pending' => 'Pending',
              'Deleting' => 'Deleting',
            ),
            'example' => 'Running',
          ),
        ),
        10 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务名。',
            'type' => 'string',
            'required' => false,
            'example' => 'echo_test',
          ),
        ),
        11 => 
        array (
          'name' => 'ServiceUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务UID。',
            'type' => 'string',
            'required' => false,
            'example' => 'eas-m-c9iw3yitxxxx',
          ),
        ),
        12 => 
        array (
          'name' => 'ResourceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务所属的资源组名称或ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'eas-r-hd0qwy8cxxxx',
          ),
        ),
        13 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1234**',
          ),
        ),
        14 => 
        array (
          'name' => 'QuotaId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配额ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'quota1****',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Services' => 
              array (
                'description' => '服务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务实例。',
                  '$ref' => '#/components/schemas/Service',
                ),
              ),
              'PageNumber' => 
              array (
                'description' => '返回查询的服务列表的当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '返回每页显示的服务数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'TotalCount' => 
              array (
                'description' => '服务总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Services\\": [\\n    {\\n      \\"RequestId\\": \\"\\",\\n      \\"Region\\": \\"\\",\\n      \\"CallerUid\\": \\"\\",\\n      \\"ParentUid\\": \\"\\",\\n      \\"CurrentVersion\\": 0,\\n      \\"Cpu\\": 0,\\n      \\"Gpu\\": 0,\\n      \\"Image\\": \\"\\",\\n      \\"PendingInstance\\": 0,\\n      \\"RunningInstance\\": 0,\\n      \\"TotalInstance\\": 0,\\n      \\"InternetEndpoint\\": \\"\\",\\n      \\"IntranetEndpoint\\": \\"\\",\\n      \\"LatestVersion\\": 0,\\n      \\"Memory\\": 0,\\n      \\"Message\\": \\"\\",\\n      \\"Namespace\\": \\"\\",\\n      \\"Reason\\": \\"\\",\\n      \\"Resource\\": \\"\\",\\n      \\"ResourceAlias\\": \\"\\",\\n      \\"ServiceConfig\\": \\"\\",\\n      \\"ServiceName\\": \\"\\",\\n      \\"ServiceGroup\\": \\"\\",\\n      \\"Status\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"Weight\\": 0,\\n      \\"ServiceId\\": \\"\\",\\n      \\"ServiceUid\\": \\"\\",\\n      \\"AccessToken\\": \\"\\",\\n      \\"Source\\": \\"\\",\\n      \\"ExtraData\\": \\"\\",\\n      \\"Role\\": \\"\\",\\n      \\"RoleAttrs\\": \\"\\",\\n      \\"SafetyLock\\": \\"\\",\\n      \\"SecondaryInternetEndpoint\\": \\"\\",\\n      \\"SecondaryIntranetEndpoint\\": \\"\\",\\n      \\"Labels\\": [\\n        {\\n          \\"LabelKey\\": \\"\\",\\n          \\"LabelValue\\": \\"\\"\\n        }\\n      ],\\n      \\"WorkspaceId\\": \\"\\",\\n      \\"AppType\\": \\"\\",\\n      \\"AppConfig\\": \\"\\",\\n      \\"AppSpecName\\": \\"\\",\\n      \\"AppVersion\\": \\"\\"\\n    }\\n  ],\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 100,\\n  \\"TotalCount\\": 2\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询服务列表',
    ),
    'ListGroups' => 
    array (
      'summary' => '列举已创建的服务群组。',
      'path' => '/api/v2/groups',
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
      'consumes' => 
      array (
      ),
      'produces' => 
      array (
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
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页大小，默认100',
            'description' => '分页查询时设置的每页显示的服务群组数量，默认为100。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码数，默认1',
            'description' => '服务群组列表的当前页码，默认值为1。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '名字过滤',
            'description' => '设置的过滤名称，支持模糊匹配。',
            'type' => 'string',
            'required' => false,
            'example' => 'foo',
          ),
        ),
        3 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => false,
            'example' => '123***',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Groups' => 
              array (
                'description' => '服务群组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务群组信息。',
                  '$ref' => '#/components/schemas/Group',
                ),
              ),
              'PageSize' => 
              array (
                'description' => '返回每页显示的群组数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'description' => '返回查询的群组列表的当前页码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '总计数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Groups\\": [\\n    {\\n      \\"Name\\": \\"\\",\\n      \\"ClusterId\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"QueueService\\": \\"\\",\\n      \\"InternetEndpoint\\": \\"\\",\\n      \\"IntranetEndpoint\\": \\"\\",\\n      \\"AccessToken\\": \\"\\"\\n    }\\n  ],\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 5\\n}","type":"json"}]',
      'title' => '查看服务组列表',
    ),
    'CreateResource' => 
    array (
      'summary' => '创建一个新的资源组。',
      'path' => '/api/v2/resources',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'EcsInstanceType' => 
              array (
                'title' => '实例机型，对应ecs机型',
                'description' => '实例机型，对应ECS机型。
>当ResourceType选择Dedicated时，该参数为必填。',
                'type' => 'string',
                'required' => false,
                'example' => 'ecs.c6.8xlarge',
              ),
              'SystemDiskSize' => 
              array (
                'title' => '系统盘大小(200-2000GB)。不传默认为200。',
                'description' => '系统盘大小，单位为GiB。取值范围为200-2000GiB，不配置默认为200GiB。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '2000',
                'minimum' => '200',
                'example' => '200',
                'default' => '200',
              ),
              'EcsInstanceCount' => 
              array (
                'title' => '实例数量',
                'description' => '实例数量。
> 当ResourceType选择Dedicated时，该参数为必填。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '5',
              ),
              'ChargeType' => 
              array (
                'title' => '付费类型，预付费PrePaid，后付费PostPaid',
                'description' => '付费类型，取值如下：
- PrePaid：预付费。
- PostPaid：后付费。
> 当ResourceType选择Dedicated时，该参数为必填。
>',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'PostPaid' => '后付费',
                  'PrePaid' => '预付费',
                ),
                'example' => 'PostPaid',
              ),
              'AutoRenewal' => 
              array (
                'title' => '是否自动续费',
                'description' => '是否自动续费，取值如下：
- false（默认值）：表示不自动续费。
- true：表示自动续费。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'Zone' => 
              array (
                'description' => '实例所属可用区。',
                'type' => 'string',
                'required' => false,
                'example' => 'cn-shanghai-f',
              ),
              'ResourceType' => 
              array (
                'description' => '资源组类型，取值如下：

- Dedicated：专属资源组。
- SelfManaged：自运维资源组。
> 使用自运维资源组时，需要申请添加白名单。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'SelfManaged' => 'SelfManaged',
                  'Dedicated' => 'Dedicated',
                ),
                'example' => 'Dedicated',
              ),
              'SelfManagedResourceOptions' => 
              array (
                'description' => '自运维资源组配置选项。',
                'type' => 'object',
                'properties' => 
                array (
                  'ExternalClusterId' => 
                  array (
                    'description' => '自运维集群Id。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'cf0386f250f2545689ca7fdd1cd******',
                  ),
                  'RoleName' => 
                  array (
                    'description' => '授予云服务PAI-EAS相关权限的RAM角色名称。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'clusterrole',
                  ),
                  'NodeMatchLabels' => 
                  array (
                    'description' => '节点的标签键值对集合。',
                    'type' => 'object',
                    'required' => false,
                    'additionalProperties' => 
                    array (
                      'type' => 'string',
                      'example' => '"key1": "value1"',
                      'description' => '节点的标签键值对。',
                    ),
                  ),
                  'NodeTolerations' => 
                  array (
                    'description' => '节点污点的容忍度列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '节点污点的容忍度。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'key' => 
                        array (
                          'description' => '键名。',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'key1',
                        ),
                        'value' => 
                        array (
                          'description' => '键值。',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'value1',
                        ),
                        'operator' => 
                        array (
                          'description' => '键名和键值的关系。',
                          'type' => 'string',
                          'required' => false,
                          'enumValueTitles' => 
                          array (
                            'Equal' => 'Equal',
                            'Exists' => 'Exists',
                          ),
                          'example' => 'Equal',
                        ),
                        'effect' => 
                        array (
                          'description' => '效果。',
                          'type' => 'string',
                          'required' => false,
                          'enumValueTitles' => 
                          array (
                            'PreferNoSchedule' => 'PreferNoSchedule',
                            'NoSchedule' => 'NoSchedule',
                            'NoExecute' => 'NoExecute',
                          ),
                          'example' => 'NoSchedule',
                        ),
                      ),
                      'required' => false,
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
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
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'ResourceId' => 
              array (
                'title' => '资源组ID',
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'eas-r-h7lcw24dyqztwxxxxxx',
              ),
              'ResourceName' => 
              array (
                'title' => '资源组名称',
                'description' => '资源组名称。',
                'type' => 'string',
                'example' => 'MyResource',
              ),
              'ClusterId' => 
              array (
                'title' => '资源组所在集群ID',
                'description' => '资源组所在集群ID。',
                'type' => 'string',
                'example' => 'cn-shanghai',
              ),
              'OwnerUid' => 
              array (
                'title' => '资源组的Owner UID',
                'description' => '资源组的Owner UID。',
                'type' => 'string',
                'example' => '14401087478****',
              ),
              'InstanceIds' => 
              array (
                'description' => '机器实例ID列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '机器实例ID。',
                  'type' => 'string',
                  'example' => 'eas-i-xxxxx',
                ),
              ),
            ),
          ),
        ),
        400 => 
        array (
        ),
        401 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"ResourceId\\": \\"eas-r-h7lcw24dyqztwxxxxxx\\",\\n  \\"ResourceName\\": \\"MyResource\\",\\n  \\"ClusterId\\": \\"cn-shanghai\\",\\n  \\"OwnerUid\\": \\"14401087478****\\",\\n  \\"InstanceIds\\": [\\n    \\"eas-i-xxxxx\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建资源组',
      'description' => '**请确保在使用该接口前，已充分了解EAS产品的收费方式和[价格](~~144261~~)。**',
    ),
    'CreateResourceInstances' => 
    array (
      'summary' => '在专属资源组中创建新的机器实例。',
      'path' => '/api/v2/resources/{ClusterId}/{ResourceId}/instances',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源组所在的集群ID',
            'description' => '资源组所在的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源组ID',
            'description' => '资源组ID，如何查询资源组ID，请参见[ListResources](~~412133~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'eas-r-asdasdasd',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'EcsInstanceType' => 
              array (
                'title' => '实例机型，对应ecs机型',
                'description' => '实例机型，对应ECS机型。',
                'type' => 'string',
                'required' => true,
                'example' => 'ecs.s6-c1m2.xlarge',
              ),
              'SystemDiskSize' => 
              array (
                'title' => '系统盘大小(200-2000)GB，不传默认为200',
                'description' => '系统盘的磁盘大小，单位为GiB。取值范围为200-2000 GiB，不配置默认为200GiB。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '2000',
                'minimum' => '200',
                'example' => '200',
                'default' => '200',
              ),
              'EcsInstanceCount' => 
              array (
                'title' => '新创建的实例个数，(0, 100]',
                'description' => '新创建的实例个数，取值范围1~100。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '5',
              ),
              'ChargeType' => 
              array (
                'title' => '付费类型，预付费PrePaid，后付费PostPaid',
                'description' => '付费类型，取值如下：
- PrePaid：预付费。
- PostPaid：后付费。',
                'type' => 'string',
                'required' => true,
                'enumValueTitles' => 
                array (
                  'PostPaid' => '后付费',
                  'PrePaid' => '预付费',
                ),
                'example' => 'PrePaid',
              ),
              'UserData' => 
              array (
                'title' => '用户自这义数据，小于 16KB',
                'description' => '自定义用户信息，目前暂未使用。',
                'type' => 'string',
                'required' => false,
                'example' => 'x112223333',
              ),
              'AutoRenewal' => 
              array (
                'title' => '是否自动续费',
                'description' => '是否自动续费，取值如下：
- false（默认值）：表示不自动续费。
- true：表示自动续费。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'Zone' => 
              array (
                'description' => '实例所属可用区。',
                'type' => 'string',
                'required' => false,
                'example' => 'cn-shanghai-f',
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
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'InstanceIds' => 
              array (
                'description' => '机器实例ID列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '机器实例ID。',
                  'type' => 'string',
                  'example' => 'eas-i-xxxxxx',
                ),
              ),
              'Message' => 
              array (
                'description' => '操作成功返回信息。',
                'type' => 'string',
                'example' => 'Create 5 new ecs instance(s) in resource [eas-r-asdasdasd] successfully',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"InstanceIds\\": [\\n    \\"eas-i-xxxxxx\\"\\n  ],\\n  \\"Message\\": \\"Create 5 new ecs instance(s) in resource [eas-r-asdasdasd] successfully\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建资源组机器',
    ),
    'CreateResourceLog' => 
    array (
      'summary' => '开通资源组SLS日志投递功能。',
      'path' => '/api/v2/resources/{ClusterId}/{ResourceId}/log',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '资源组所在的地域ID。例如华东2（上海）为cn-shanghai。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '资源组的ID。如何查询资源组ID，请参见[ListResources](~~412133~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'eas-r-asdasdasd****',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'ProjectName' => 
              array (
                'title' => '资源组对应的sls日志管理项目',
                'description' => '资源组对应的SLS日志管理项目。如何查询项目，请参见[ListProject](~~74955~~)。',
                'type' => 'string',
                'required' => false,
                'example' => 'eas-r-asdasdasd-sls',
              ),
              'LogStore' => 
              array (
                'title' => 'sls日志库',
                'description' => 'SLS日志库，如何查询日志库，请参见[ListLogStores](~~426970~~)。',
                'type' => 'string',
                'required' => false,
                'example' => 'access_log',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '操作结果信息。',
                'type' => 'string',
                'example' => 'Resource [eas-r-asdasdasd****] is deleted.',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Resource [eas-r-asdasdasd****] is deleted.\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '开通资源组日志投递 ',
    ),
    'DeleteResource' => 
    array (
      'summary' => '删除一个已有的资源组，仅当资源组中无任务服务和资源实例的情况下才允许删除。',
      'path' => '/api/v2/resources/{ClusterId}/{ResourceId}',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源组所在的集群ID',
            'description' => '资源组所在的地域ID。例如华东2（上海）为cn-shanghai。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源组的ID',
            'description' => '资源组的ID。如何查询资源组ID，请参见[ListResources](~~412133~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'eas-r-asdasdasd****',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82-9624-EC2B1779****',
              ),
              'Message' => 
              array (
                'description' => '操作结果信息。',
                'type' => 'string',
                'example' => 'Resource [eas-r-asdasdasd****] is deleted.',
              ),
            ),
          ),
        ),
        404 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82-9624-EC2B1779****\\",\\n  \\"Message\\": \\"Resource [eas-r-asdasdasd****] is deleted.\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除资源组',
    ),
    'DeleteResourceDLink' => 
    array (
      'summary' => '关闭专属资源组VPC直连功能。',
      'path' => '/api/v2/resources/{ClusterId}/{ResourceId}/dlink',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源组所在的集群ID',
            'description' => '资源组所在的地域ID。例如华东2（上海）为cn-shanghai。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源组的ID',
            'description' => '资源组的ID。如何查询资源组ID，请参见[ListResources](~~412133~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'eas-r-asdasdasd****',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '操作结果信息。',
                'type' => 'string',
                'example' => 'Network interfaces are deleting',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Network interfaces are deleting\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '关闭资源组VPC直连',
    ),
    'DeleteResourceInstances' => 
    array (
      'summary' => '删除专属资源组中的机器实例，普通用户仅允许删除后付费实例。',
      'path' => '/api/v2/resources/{ClusterId}/{ResourceId}/instances',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '资源组所在的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '资源组的ID。如何查询资源组ID，请参见[ListResources](~~412133~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'eas-r-asdasdasd****',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例列表，多个实例之间以半角逗号（,）分割。例如：`instanceId1,instanceId2`。如何获取实例列表，请参见[ListResourceInstances](~~412129~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'eas-i-xxxxxxx,eas-i-xxxxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'AllFailed',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否删除全部创建失败实例。
- true：表示删除全部失败实例。
- false：表示不删除失败实例。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '操作结果信息。',
                'type' => 'string',
                'example' => 'Instances eas-i-01122713****,eas-i-01122713**** are deleting',
              ),
            ),
          ),
        ),
        404 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Instances eas-i-01122713****,eas-i-01122713**** are deleting\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除资源组机器实例',
    ),
    'DeleteResourceLog' => 
    array (
      'summary' => '关闭专属资源组SLS日志投递功能。',
      'path' => '/api/v2/resources/{ClusterId}/{ResourceId}/log',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '资源组所在的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '资源组的ID。如何查询资源组ID，请参见[ListResources](~~412133~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'eas-r-asdas****',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '操作结果信息。',
                'type' => 'string',
                'example' => 'Log service for resource [eas-r-asdas****] is deleting',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Log service for resource [eas-r-asdas****] is deleting\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '关闭资源组日志投递',
    ),
    'UpdateResource' => 
    array (
      'summary' => '更新专属资源组信息。',
      'path' => '/api/v2/resources/{ClusterId}/{ResourceId}',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源组所在的集群ID',
            'description' => '资源组所在的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源组的ID',
            'description' => '资源组的ID。如何查询资源组ID，请参见[ListResources](~~412133~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'eas-r-asdasdasd****',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'ResourceName' => 
              array (
                'title' => '',
                'description' => '新的资源组名称，不能超过27个字符。',
                'type' => 'string',
                'required' => false,
                'example' => 'iot',
              ),
              'SelfManagedResourceOptions' => 
              array (
                'description' => '自运维资源组配置选项',
                'type' => 'object',
                'properties' => 
                array (
                  'NodeMatchLabels' => 
                  array (
                    'description' => '节点的标签键值对集合',
                    'type' => 'object',
                    'required' => false,
                    'additionalProperties' => 
                    array (
                      'type' => 'string',
                      'example' => '"key1": "value1"',
                      'description' => '节点的标签键值对',
                    ),
                  ),
                  'NodeTolerations' => 
                  array (
                    'description' => '节点污点的容忍度列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '节点污点的容忍度',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'key' => 
                        array (
                          'description' => '键名',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'key1',
                        ),
                        'value' => 
                        array (
                          'description' => '键值',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'value1',
                        ),
                        'operator' => 
                        array (
                          'description' => '键名和键值的关系',
                          'type' => 'string',
                          'required' => false,
                          'enumValueTitles' => 
                          array (
                            'Equal' => 'Equal',
                            'Exists' => 'Exists',
                          ),
                          'example' => 'Equal',
                        ),
                        'effect' => 
                        array (
                          'description' => '效果',
                          'type' => 'string',
                          'required' => false,
                          'enumValueTitles' => 
                          array (
                            'PreferNoSchedule' => 'PreferNoSchedule',
                            'NoSchedule' => 'NoSchedule',
                            'NoExecute' => 'NoExecute',
                          ),
                          'example' => 'NoSchedule',
                        ),
                      ),
                      'required' => false,
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'ResourceId' => 
              array (
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'eas-r-asdasdasd****',
              ),
              'ResourceName' => 
              array (
                'description' => '资源组名称。',
                'type' => 'string',
                'example' => 'iot',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"ResourceId\\": \\"eas-r-asdasdasd****\\",\\n  \\"ResourceName\\": \\"iot\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新资源组信息',
    ),
    'UpdateResourceDLink' => 
    array (
      'summary' => '更新指定专属资源组的VPC直连配置。',
      'path' => '/api/v2/resources/{ClusterId}/{ResourceId}/dlink',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源组所在的集群ID',
            'description' => '资源组所在的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源组的Id',
            'description' => '资源组的ID。如何查询资源组ID，请参见[ListResources](~~412133~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'eas-r-w1ttszneb9n994****',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'VSwitchId' => 
              array (
                'title' => '对端的主VSwitchID，会在该vswitch中创建ENI',
                'description' => '对端的主VSwitchID，会在该VSwitch中创建ENI。',
                'type' => 'string',
                'required' => true,
                'example' => 'vpc-uf66uio7md****',
              ),
              'SecurityGroupId' => 
              array (
                'title' => '客户端ECS归属的安全组',
                'description' => '客户端ECS归属的安全组。',
                'type' => 'string',
                'required' => true,
                'example' => 'sg-bp149cedsfx2rfs****',
              ),
              'VSwitchIdList' => 
              array (
                'title' => '要打通的客户端的vswitch列表，会将这些vswitch对应的网段加入到服务端的回包路由中',
                'description' => '要打通的客户端的VSwitch列表，会将这些VSwitch对应的网段加入到服务端的回包路由中。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'VSwitch ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '["vsw-8ersw98sgmlgkxxxxxx","vsw-4dsgg2at0kljjxxxxxxxx"]',
                ),
                'required' => false,
              ),
              'DestinationCIDRs' => 
              array (
                'title' => '要打通的客户端的网段信息，会将该网段加入到服务端的回包路由中，与VSwitchIdList可二选一',
                'description' => '要打通的客户端的网段信息，会将该网段加入到服务端的回包路由中，与VSwitchIdList可二选一。',
                'type' => 'string',
                'required' => false,
                'example' => '172.16.0.0/16',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '操作结果信息。',
                'type' => 'string',
                'example' => 'Network interfaces are updating',
              ),
            ),
          ),
        ),
        404 => 
        array (
        ),
        409 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Network interfaces are updating\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新资源组VPC直连配置',
    ),
    'UpdateResourceInstance' => 
    array (
      'summary' => '更新专属资源组机器实例的调度状态。',
      'path' => '/api/v2/resources/{ClusterId}/{ResourceId}/instances/{InstanceId}',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例所属集群',
            'description' => '实例所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例所属资源组Id',
            'description' => '实例所属资源组ID，如何查询资源组ID，请参见[ListResources](~~412133~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'eas-r-asdas****',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例Id',
            'description' => '实例ID，如何获取实例ID，请参见[ListResourceInstances](~~412129~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'eas-i-asdas****',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Action' => 
              array (
                'title' => '更新服务的行为：Cordon, Uncordon, Drain',
                'description' => '更新专属资源组机器实例的可调度行为。取值如下：
- Uncordon：取消禁止服务调度到此实例。
- Cordon：禁止服务调度到此实例。
- Drain：驱逐已调度到此实例的服务实例。',
                'type' => 'string',
                'required' => true,
                'enumValueTitles' => 
                array (
                  'Uncordon' => '取消禁止服务调度到此实例',
                  'Cordon' => '禁止服务调度到此实例',
                  'Drain' => '驱逐已调度到此实例的服务实例',
                ),
                'example' => 'Cordon',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'ResourceId' => 
              array (
                'title' => '资源组ID',
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'eas-r-asdasdasd',
              ),
              'InstanceId' => 
              array (
                'title' => '实例名',
                'description' => '实例名。',
                'type' => 'string',
                'example' => 'eas-i-asdasdasd
',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"ResourceId\\": \\"eas-r-asdasdasd\\",\\n  \\"InstanceId\\": \\"eas-i-asdasdasd\\\\n\\"\\n}","type":"json"}]',
      'title' => '更新资源组机器实例',
    ),
    'DescribeResource' => 
    array (
      'summary' => '查看资源组详情。',
      'path' => '/api/v2/resources/{ClusterId}/{ResourceId}',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源组所在的集群ID',
            'description' => '资源组所在的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源组的ID',
            'description' => '资源组的ID。如何查询资源组ID，请参见[ListResources](~~412133~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'eas-r-asdasdasd',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '资源组详细信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '902976F2-6FAF-5404-8A4D-6CC223***',
              ),
              'ResourceId' => 
              array (
                'description' => 'EAS资源ID。',
                'type' => 'string',
                'example' => 'eas-r-glkfpsxuw57x1h*****',
              ),
              'ResourceName' => 
              array (
                'description' => 'EAS资源名称。',
                'type' => 'string',
                'example' => 'my-resouce****',
              ),
              'ClusterId' => 
              array (
                'description' => '资源组所在的集群ID。',
                'type' => 'string',
                'example' => 'cn-beijing',
              ),
              'CreateTime' => 
              array (
                'description' => '资源组创建时间。',
                'type' => 'string',
                'example' => '2020-05-19T14:19:42Z',
              ),
              'UpdateTime' => 
              array (
                'description' => '资源组最后更新时间。',
                'type' => 'string',
                'example' => '2021-02-24T11:52:17Z',
              ),
              'OwnerUid' => 
              array (
                'description' => '资源组负责人ID。',
                'type' => 'string',
                'example' => '14401087478****',
              ),
              'InstanceCount' => 
              array (
                'description' => '资源组中机器实例总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'PrePaidInstanceCount' => 
              array (
                'description' => '资源组中预付费机器实例总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PostPaidInstanceCount' => 
              array (
                'description' => '资源组中后付费机器实例总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'CpuCount' => 
              array (
                'description' => 'CPU总核数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '16',
              ),
              'GpuCount' => 
              array (
                'description' => 'GPU总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Status' => 
              array (
                'description' => '资源组状态。',
                'type' => 'string',
                'example' => 'ResourceReady',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'Resource is ready',
              ),
              'ExtraData' => 
              array (
                'description' => '额外信息。如VPC打通状态，SLS日志状态等。',
                'type' => 'string',
                'example' => '{"vswitch_id":"vsw-bp17uo6xebcusy****","gpu_share":true,"aux_vswitch_id_list":["vsw-bp13b3pvjap3vxn****","vsw-bp1nls8o5hk8mt8*****"],"security_group_id":"sg-bp1j1z7297hcink*****","vpc_id":"vpc-bp1kjr3rfyhx01*****","destination_cidr":"172.16.0.12/28","role_arn":"acs:ram::1157703270*****:role/AliyunServiceRoleForPaiEas","sls_project":"","sls_logstore":"","sls_status":"ResourceReady","sls_message":"","update_time":""}',
              ),
              'ResourceType' => 
              array (
                'description' => '资源组类型，取值如下：

- Dedicated：专属资源组
- SelfManaged：自运维资源组',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'SelfManaged' => 'SelfManaged',
                  'Dedicated' => 'Dedicated',
                ),
                'example' => 'Dedicated',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"902976F2-6FAF-5404-8A4D-6CC223***\\",\\n  \\"ResourceId\\": \\"eas-r-glkfpsxuw57x1h*****\\",\\n  \\"ResourceName\\": \\"my-resouce****\\",\\n  \\"ClusterId\\": \\"cn-beijing\\",\\n  \\"CreateTime\\": \\"2020-05-19T14:19:42Z\\",\\n  \\"UpdateTime\\": \\"2021-02-24T11:52:17Z\\",\\n  \\"OwnerUid\\": \\"14401087478****\\",\\n  \\"InstanceCount\\": 4,\\n  \\"PrePaidInstanceCount\\": 1,\\n  \\"PostPaidInstanceCount\\": 3,\\n  \\"CpuCount\\": 16,\\n  \\"GpuCount\\": 1,\\n  \\"Status\\": \\"ResourceReady\\",\\n  \\"Message\\": \\"Resource is ready\\",\\n  \\"ExtraData\\": \\"{\\\\\\"vswitch_id\\\\\\":\\\\\\"vsw-bp17uo6xebcusy****\\\\\\",\\\\\\"gpu_share\\\\\\":true,\\\\\\"aux_vswitch_id_list\\\\\\":[\\\\\\"vsw-bp13b3pvjap3vxn****\\\\\\",\\\\\\"vsw-bp1nls8o5hk8mt8*****\\\\\\"],\\\\\\"security_group_id\\\\\\":\\\\\\"sg-bp1j1z7297hcink*****\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-bp1kjr3rfyhx01*****\\\\\\",\\\\\\"destination_cidr\\\\\\":\\\\\\"172.16.0.12/28\\\\\\",\\\\\\"role_arn\\\\\\":\\\\\\"acs:ram::1157703270*****:role/AliyunServiceRoleForPaiEas\\\\\\",\\\\\\"sls_project\\\\\\":\\\\\\"\\\\\\",\\\\\\"sls_logstore\\\\\\":\\\\\\"\\\\\\",\\\\\\"sls_status\\\\\\":\\\\\\"ResourceReady\\\\\\",\\\\\\"sls_message\\\\\\":\\\\\\"\\\\\\",\\\\\\"update_time\\\\\\":\\\\\\"\\\\\\"}\\",\\n  \\"ResourceType\\": \\"Dedicated\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查看资源组详情',
    ),
    'DescribeResourceDLink' => 
    array (
      'summary' => '查看专属资源组VPC直连配置详情。',
      'path' => '/api/v2/resources/{ClusterId}/{ResourceId}/dlink',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源组所在的集群ID',
            'description' => '资源组所在的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源组的ID',
            'description' => '资源组的ID。如何查询资源组ID，请参见[ListResources](~~412133~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'eas-r-adfabas****',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'VpcId' => 
              array (
                'title' => '已打通直接的Vpc ID',
                'description' => '已打通直连的VPC ID。',
                'type' => 'string',
                'example' => 'vpc-uf66uio7m****1',
              ),
              'VSwitchId' => 
              array (
                'title' => '已打通直连的主VSwitch ID',
                'description' => '已打通直连的主VSwitch ID。',
                'type' => 'string',
                'example' => 'vsw-8vbqn2at0kljjxxxx****',
              ),
              'SecurityGroupId' => 
              array (
                'title' => '已打通直连的安全组',
                'description' => '已打通直连的安全组。',
                'type' => 'string',
                'example' => 'sg-bp1j1z7297hcink9d****',
              ),
              'AuxVSwitchList' => 
              array (
                'title' => '已打通直连的副VSwitch ID',
                'description' => '已打通直连的副VSwitch ID。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'VSwitch ID。',
                  'type' => 'string',
                  'example' => '[" vsw-8ersw98sgmlgkxxxxxx", " vsw-4dsgg2at0kljjxxxxxxxx"]',
                ),
              ),
              'DestinationCIDRs' => 
              array (
                'title' => '要打通的客户端的网段信息，会将该网段加入到服务端的回包路由中，与VSwitchIdList可二选一',
                'description' => '要打通的客户端的网段信息，会将该网段加入到服务端的回包路由中。',
                'type' => 'string',
                'example' => '172.16.0.0/16',
              ),
            ),
          ),
        ),
        404 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"VpcId\\": \\"vpc-uf66uio7m****1\\",\\n  \\"VSwitchId\\": \\"vsw-8vbqn2at0kljjxxxx****\\",\\n  \\"SecurityGroupId\\": \\"sg-bp1j1z7297hcink9d****\\",\\n  \\"AuxVSwitchList\\": [\\n    \\"[\\\\\\" vsw-8ersw98sgmlgkxxxxxx\\\\\\", \\\\\\" vsw-4dsgg2at0kljjxxxxxxxx\\\\\\"]\\"\\n  ],\\n  \\"DestinationCIDRs\\": \\"172.16.0.0/16\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查看资源组VPC直连信息',
    ),
    'DescribeResourceLog' => 
    array (
      'summary' => '查看专属资源组SLS日志投递配置详情。',
      'path' => '/api/v2/resources/{ClusterId}/{ResourceId}/log',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源组所在的集群ID',
            'description' => '资源组所在的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源组的ID',
            'description' => '资源组的ID。如何查询资源组ID，请参见[ListResources](~~412133~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'eas-r-asdas****',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'ProjectName' => 
              array (
                'title' => '资源组对应的sls日志管理项目',
                'description' => '资源组对应的SLS日志管理项目。',
                'type' => 'string',
                'example' => 'eas-r-asdasdasd-sls',
              ),
              'LogStore' => 
              array (
                'title' => 'sls日志库',
                'description' => 'SLS日志库。',
                'type' => 'string',
                'example' => 'access_log',
              ),
              'Message' => 
              array (
                'title' => 'sls日志信息',
                'description' => 'SLS日志信息。',
                'type' => 'string',
                'example' => 'Network interfaces are updating',
              ),
              'Status' => 
              array (
                'title' => '资源组状态',
                'description' => '资源组状态。',
                'type' => 'string',
                'example' => 'ResourceReady',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"ProjectName\\": \\"eas-r-asdasdasd-sls\\",\\n  \\"LogStore\\": \\"access_log\\",\\n  \\"Message\\": \\"Network interfaces are updating\\",\\n  \\"Status\\": \\"ResourceReady\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查看资源组日志投递信息',
    ),
    'ListResourceInstances' => 
    array (
      'summary' => '获取指定专属资源组中的机器实例列表。',
      'path' => '/api/v2/resources/{ClusterId}/{ResourceId}/instances',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源组所在的集群ID',
            'description' => '资源组所在的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源组的ID',
            'description' => '资源组的ID。如何查询资源组ID，请参见[ListResources](~~412133~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'iot',
          ),
        ),
        2 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '付费类型
PrePaid预付费
PostPaid后付费',
            'description' => '过滤机器付费类型，取值如下：
- PrePaid：预付费。
- PostPaid：后付费。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'PostPaid' => '后付费',
              'PrePaid' => '预付费',
            ),
            'example' => 'PrePaid',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '请求的页码（默认为1）',
            'description' => '专属资源组机器列表的页码。起始值为1，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页的大小（默认为100）',
            'description' => '分页查询时设置的每页显示的机器数量，默认为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按实例名称过滤。',
            'type' => 'string',
            'required' => false,
            'example' => 'e-xxxx***',
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按实例ID过滤。如何获取实例ID，请参见[ListResourceInstances](~~412129~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-bp1jd6x3uots****a',
          ),
        ),
        7 => 
        array (
          'name' => 'InstanceIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '机器IP。',
            'type' => 'string',
            'required' => false,
            'example' => '10.224.xx.xx',
          ),
        ),
        8 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关键字搜索。支持按机器ID或IP进行搜索。',
            'type' => 'string',
            'required' => false,
            'example' => '10.224.xx.xx',
          ),
        ),
        9 => 
        array (
          'name' => 'InstanceStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '机器状态。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Ready-SchedulingDisabled' => '机器可用-不可调度',
              'Ready' => '运行中',
              'NotReady' => '未就绪',
              'Stopped' => '已停机',
              'NotReady-SchedulingDisabled' => '机器不可用-不可调度',
              'Attaching' => '启动中',
              'Deleting' => '删除中',
              'CreateFailed' => '创建失败',
            ),
            'example' => 'Ready',
          ),
        ),
        10 => 
        array (
          'name' => 'Sort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'CreateTime' => '创建时间',
              'MemoryUsed' => '内存使用量',
              'GpuUsed' => 'GPU使用量',
              'ExpireTime' => '过期时间',
              'CpuUsed' => 'CPU使用率',
            ),
            'example' => 'CreateTime',
          ),
        ),
        11 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序顺序。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'asc' => '升序',
              'desc' => '降序',
            ),
            'example' => 'desc',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Instances' => 
              array (
                'description' => '实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实例信息。',
                  '$ref' => '#/components/schemas/ResourceInstance',
                ),
              ),
              'PageNumber' => 
              array (
                'description' => '返回查询的资源组机器列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '返回每页显示的资源组机器数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalCount' => 
              array (
                'description' => '实例总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
            ),
          ),
        ),
        404 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Instances\\": [\\n    {\\n      \\"InstanceId\\": \\"\\",\\n      \\"InstanceName\\": \\"\\",\\n      \\"InstanceIp\\": \\"\\",\\n      \\"InstanceStatus\\": \\"\\",\\n      \\"InstanceCpuCount\\": 0,\\n      \\"InstanceGpuCount\\": 0,\\n      \\"InstanceMemory\\": \\"\\",\\n      \\"InstanceSystemDiskSize\\": 0,\\n      \\"InstanceGpuMemory\\": \\"\\",\\n      \\"InstanceUsedCpu\\": 0,\\n      \\"InstanceUsedGpu\\": 0,\\n      \\"InstanceUsedMemory\\": \\"\\",\\n      \\"InstanceType\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"ChargeType\\": \\"\\",\\n      \\"ExpiredTime\\": \\"\\",\\n      \\"AutoRenewal\\": true,\\n      \\"Arch\\": \\"\\",\\n      \\"Region\\": \\"\\",\\n      \\"Zone\\": \\"\\",\\n      \\"ResourceId\\": \\"\\",\\n      \\"InstanceTenantIp\\": \\"\\",\\n      \\"InstanceUsedGpuMemory\\": \\"\\"\\n    }\\n  ],\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"TotalCount\\": 2\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询资源组机器列表',
    ),
    'ListResourceInstanceWorker' => 
    array (
      'summary' => '列举资源实例的服务Worker列表。',
      'path' => '/api/v2/resources/{ClusterId}/{ResourceId}/instance/{InstanceName}/workers',
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
      'produces' => 
      array (
        0 => 'application/json',
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
          'in' => 'path',
          'schema' => 
          array (
            'description' => '资源组所在的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '资源组的ID。资源组ID，如何查询资源组ID，请参见[ListResources](~~412133~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'eas-r-adfabas',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '资源组的实例名字。如何获取实例名称，请参见[ListResourceInstances](~~412129~~)。该接口返回结果中的HostName即为实例名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'cne10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作实例列表的页码。起始值为1，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页显示的实例数量，默认为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Pods' => 
              array (
                'title' => 'pod列表',
                'description' => 'Worker列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Worker信息。',
                  '$ref' => '#/components/schemas/ResourceInstanceWorker',
                ),
              ),
              'PageNumber' => 
              array (
                'title' => '当前页码',
                'description' => '返回查询的资源组工作实例列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '每页大小',
                'description' => '返回每页显示的资源组工作实例数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalCount' => 
              array (
                'title' => 'pod总数',
                'description' => 'Worker总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
            ),
          ),
        ),
        404 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Pods\\": [\\n    {\\n      \\"Name\\": \\"\\",\\n      \\"ServiceName\\": \\"\\",\\n      \\"Status\\": \\"\\",\\n      \\"Ready\\": true,\\n      \\"CpuRequest\\": 0,\\n      \\"GpuRequest\\": 0,\\n      \\"MemoryRquest\\": 0,\\n      \\"CpuLimit\\": 0,\\n      \\"GpuLimit\\": 0,\\n      \\"MemoryLimit\\": 0,\\n      \\"RestartCount\\": 0,\\n      \\"StartTime\\": \\"\\"\\n    }\\n  ],\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"TotalCount\\": 1\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询资源组工作实例列表',
    ),
    'ListResources' => 
    array (
      'summary' => '获取当前用户的专属资源组列表。',
      'path' => '/api/v2/resources',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '请求的页码（默认为1）',
            'description' => '专属资源组列表的页码。起始值为1，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页的大小（默认为100）',
            'description' => '分页查询时设置的每页显示的专属资源组数量，默认为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。[CreateResource](~~412111~~)会返回资源组名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'MyResource',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。[CreateResource](~~412111~~)会返回资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'eas-r-h7lcw24dyqztwxxxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组类型，取值如下：

- Dedicated：专属资源组
- SelfManaged：自运维资源组',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'SelfManaged' => 'SelfManaged',
              'Dedicated' => 'Dedicated',
            ),
            'example' => 'Dedicated',
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
            'description' => '返回Body。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Resources' => 
              array (
                'description' => '资源组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源组详情信息。',
                  '$ref' => '#/components/schemas/Resource',
                ),
              ),
              'PageNumber' => 
              array (
                'description' => '返回查询的专属资源组列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '返回每页显示的专属资源组数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalCount' => 
              array (
                'description' => '资源组总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Resources\\": [\\n    {\\n      \\"ResourceId\\": \\"\\",\\n      \\"ResourceName\\": \\"\\",\\n      \\"ResourceType\\": \\"\\",\\n      \\"ClusterId\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"InstanceCount\\": 0,\\n      \\"PrePaidInstanceCount\\": 0,\\n      \\"PostPaidInstanceCount\\": 0,\\n      \\"CpuCount\\": 0,\\n      \\"GpuCount\\": 0,\\n      \\"Status\\": \\"\\",\\n      \\"Message\\": \\"\\",\\n      \\"ExtraData\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  ],\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"TotalCount\\": 1\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询资源组列表',
    ),
    'ListResourceServices' => 
    array (
      'summary' => '列举专属资源组中已部署的服务列表。',
      'path' => '/api/v2/resources/{ClusterId}/{ResourceId}/services',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源组所在的集群ID',
            'description' => '资源组所在的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源组的ID',
            'description' => '资源组的ID。资源组ID，如何查询资源组ID，请参见[ListResources](~~412133~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'iot',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '请求的页码（默认为1）',
            'description' => '服务列表的页码。起始值为1，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页的大小（默认为100）',
            'description' => '分页查询时设置的每页显示的服务数量，默认为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Services' => 
              array (
                'description' => '服务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务摘要信息。',
                  '$ref' => '#/components/schemas/Service',
                ),
              ),
              'PageNumber' => 
              array (
                'description' => '返回查询的服务列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '返回每页显示的服务数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalCount' => 
              array (
                'description' => '服务总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
            ),
          ),
        ),
        404 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Services\\": [\\n    {\\n      \\"RequestId\\": \\"\\",\\n      \\"Region\\": \\"\\",\\n      \\"CallerUid\\": \\"\\",\\n      \\"ParentUid\\": \\"\\",\\n      \\"CurrentVersion\\": 0,\\n      \\"Cpu\\": 0,\\n      \\"Gpu\\": 0,\\n      \\"Image\\": \\"\\",\\n      \\"PendingInstance\\": 0,\\n      \\"RunningInstance\\": 0,\\n      \\"TotalInstance\\": 0,\\n      \\"InternetEndpoint\\": \\"\\",\\n      \\"IntranetEndpoint\\": \\"\\",\\n      \\"LatestVersion\\": 0,\\n      \\"Memory\\": 0,\\n      \\"Message\\": \\"\\",\\n      \\"Namespace\\": \\"\\",\\n      \\"Reason\\": \\"\\",\\n      \\"Resource\\": \\"\\",\\n      \\"ResourceAlias\\": \\"\\",\\n      \\"ServiceConfig\\": \\"\\",\\n      \\"ServiceName\\": \\"\\",\\n      \\"ServiceGroup\\": \\"\\",\\n      \\"Status\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"Weight\\": 0,\\n      \\"ServiceId\\": \\"\\",\\n      \\"ServiceUid\\": \\"\\",\\n      \\"AccessToken\\": \\"\\",\\n      \\"Source\\": \\"\\",\\n      \\"ExtraData\\": \\"\\",\\n      \\"Role\\": \\"\\",\\n      \\"RoleAttrs\\": \\"\\",\\n      \\"SafetyLock\\": \\"\\",\\n      \\"SecondaryInternetEndpoint\\": \\"\\",\\n      \\"SecondaryIntranetEndpoint\\": \\"\\",\\n      \\"Labels\\": [\\n        {\\n          \\"LabelKey\\": \\"\\",\\n          \\"LabelValue\\": \\"\\"\\n        }\\n      ],\\n      \\"WorkspaceId\\": \\"\\",\\n      \\"AppType\\": \\"\\",\\n      \\"AppConfig\\": \\"\\",\\n      \\"AppSpecName\\": \\"\\",\\n      \\"AppVersion\\": \\"\\"\\n    }\\n  ],\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"TotalCount\\": 2\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询资源组中的服务列表',
    ),
    'CreateBenchmarkTask' => 
    array (
      'summary' => '调用CreateBenchmarkTask，创建压测任务。',
      'path' => '/api/v2/benchmark-tasks',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '压测任务的配置参数。',
            'type' => 'string',
            'required' => false,
            'example' => '{
    "base": {
        "duration": 600
    },
    "service": {
        "serviceName": "test_service",
        "requestToken": "test_token"
    },
    "data": {
        "path": "https://larec-benchmark-cd.oss-cn-chengdu.aliyuncs.com/youbei/sv_dbmtl/data/youbei.warmup.tf.bin",
        "dataType": "binary"
    },
    "optional": {
       "maxRt": 100
    }
}',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82********',
              ),
              'TaskName' => 
              array (
                'description' => '压测任务名字。',
                'type' => 'string',
                'example' => 'benchmark-larec-test-1076',
              ),
              'Region' => 
              array (
                'description' => '压测任务所在的区域。',
                'type' => 'string',
                'example' => 'cn-shanghai',
              ),
              'Message' => 
              array (
                'description' => '请求返回信息。',
                'type' => 'string',
                'example' => 'Benchmark  task [foo] is Creating',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82********\\",\\n  \\"TaskName\\": \\"benchmark-larec-test-1076\\",\\n  \\"Region\\": \\"cn-shanghai\\",\\n  \\"Message\\": \\"Benchmark  task [foo] is Creating\\"\\n}","type":"json"}]',
      'title' => '创建压测任务',
      'requestParamsDescription' => '## 压测任务配置参数
eas-benchmark 整体配置分五部分，如下所示：

| **参数** | **说明** |
| --- | --- |
| base | 压测任务的基本配置。 |
| service | 待压测服务的相关配置。 |
| data | 压测请求数据的相关配置。 |
| http | 服务请求HTTP相关配置。 |
| optional | 压测任务可选高级配置。 |

#### 表1. base描述表
| **参数** | **说明** |
| --- | --- |
| name | 【可选】压测任务的名称，如果不指定，会根据服务名自动生成。 |
| duration | 【可选】压测任务执行的总时间，单位为秒，默认为1200。 |
| qps | 【可选】压测任务的目标（预期）QPS， 默认为10000。 |
| concurrency | 【可选】每个压测实例内创建的并发连接数, 初始值默认为40，会动态修改。 |
| agentCount | 【可选】压测任务创建的实例个数，初始值默认为1，会动态修改。 |


#### 表2. service描述表
当您需要通过访问网关的模式创建压测任务时，需要[提交工单](https://smartservice.console.aliyun.com/service/create-ticket?product=learn)开通白名单权限。    
| **参数** | **说明** |
| --- | --- |
| serviceUrl | 【可选】待压测服务的访问URL，如果待压测服务是EAS服务，无需配置。 |
| serviceName | 【可选】待压测服务的服务名，如果待压测服务是EAS服务，必须配置；如果待压测服务是自定义服务，无需配置。 |
| requestToken | 【可选】访问服务的鉴权token，如果**serviceName**被指定，无需配置。 |
| endpointType | 【可选】服务支持的压测类型，支持**default**（网关）、**direct**（直连模式） 两种模式，默认为**direct**。 |
#### 表3. data描述表
| **参数** | **说明** |
| --- | --- |
| content | 【可选】压测请求数据，字符串格式。 |
| path | 【可选】测试数据源的HTTP路径，可以是单个文件，也支持`.zip`文件，对`.zip`文件下载后会自动解压。 |
| dataType | 【可选】测试数据的类型，支持text和binary两种类型，默认为text类型。 |
| multiLine | 【可选】测试数据是否是按行分割的，BOOL类型，如果设置为true，会将下载的数据逐行解析。|
#### 表4、HTTP描述表
| **参数** | **说明** |
| --- | --- |
| method | 【可选】HTTP请求方法，默认为POST类型。 |
| host | 【可选】请求主机HOST设置，默认为空。 |
| headers | 【可选】HTTP请求HEADER设置，LIST类型，例如：`["Authorization:aaa", "Content-Type:text"] `。|
| timeout | 【可选】HTTP请求延时，单位为毫秒，默认20000。|
#### 表5. optional描述表
| **参数** | **说明** |
| --- | --- |
| mode | 【可选】压测模式，支持以下三种模式：<br>**auto（自动加压模式）**：默认值。eas-benchmark控制器会自动创建用于压测的Agent Worker，并设置合适的并发，通过自动寻优的算法来寻找服务的承压上限。<br>**scan（周期加压模式）**：根据您指定的起始QPS（minQPS）、QPS上限（maxQPS）、QPS增长时间间隔（adjustInterval）和QPS增长步长（qpsGrowthDelta）等参数，动态加压，当服务承载到达指定的maxRT、maxQPS或服务压测出现错误数量超出容忍程度（faultTolerate）时为止。<br>**manual（手动加压模式）**：固定压测Agent数量及每个Agent的并发数，您可以在压测过程中动态调整Agent数量及Agent并发数。|
| adjustInterval | 【可选】自动加压的动态调整间隔，单位为秒，默认为60。例如设置为30， 则每隔30秒调整加压阈值。|
| minQPS | 【可选】在自动加压过程中QPS的最小值，默认为100。|
| maxQPS | 【可选】在自动加压过程中QPS的最大值，默认为10000。|
| maxRT | 【可选】期望的最大RT，超过该阈值会自动调节QPS，直到实时RT符合预期。|
| qpsGrowthDelta | 【可选】在自动加压过程中QPS每次增长的数值，默认为50 。|
| faultTolerate | 【可选】请求错误（非200状态码）率的容忍程度，默认为0.001。 |
| faultAction | 【可选】在请求错误率超过faultTolerate设定的阈值时，压测的行为，可选值：stop （维持当前qps, 不再继续加压）；revise（动态调整QPS，直到请求错误率符合预期）|',
    ),
    'DeleteBenchmarkTask' => 
    array (
      'summary' => '删除指定的压测任务。',
      'path' => '/api/v2/benchmark-tasks/{ClusterId}/{TaskName}',
      'methods' => 
      array (
        0 => 'delete',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '压测任务所在区域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '压测任务名称。如何获取压测任务名称，请参见[ListBenchmarkTask](~~432976~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'benchmark-larec-test-2b11',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '请求返回信息。',
                'type' => 'string',
                'example' => 'Benchmark task [benchmark-test-service-234c] is Deleting',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Benchmark task [benchmark-test-service-234c] is Deleting\\"\\n}","type":"json"}]',
      'title' => '删除压测任务',
    ),
    'DescribeBenchmarkTask' => 
    array (
      'summary' => '查看指定压测任务的详细配置信息。',
      'path' => '/api/v2/benchmark-tasks/{ClusterId}/{TaskName}',
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
          'in' => 'path',
          'schema' => 
          array (
            'description' => '压测任务所在区域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '压测任务名称。如何获取压测任务名称，请参见[ListBenchmarkTask](~~432976~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'benchmark-larec-test-eac4',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'TaskName' => 
              array (
                'description' => '压测任务名称。',
                'type' => 'string',
                'example' => 'benchmark-larec-test-ae70',
              ),
              'TaskId' => 
              array (
                'description' => '压测任务ID。',
                'type' => 'string',
                'example' => 'eas-b-gv4y86u****',
              ),
              'ServiceName' => 
              array (
                'description' => '待压测的服务名称。',
                'type' => 'string',
                'example' => 'foo',
              ),
              'Token' => 
              array (
                'description' => '创建压测任务的鉴权凭证。',
                'type' => 'string',
                'example' => '6062787a-9301****',
              ),
              'CallerUid' => 
              array (
                'description' => '当前调用者ID。',
                'type' => 'string',
                'example' => '1640133467****',
              ),
              'ParentUid' => 
              array (
                'description' => '当前调用的主账号。',
                'type' => 'string',
                'example' => '1029728669****',
              ),
              'DesiredAgent' => 
              array (
                'description' => '预期的压测实例个数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '4',
              ),
              'AvailableAgent' => 
              array (
                'description' => '可用的压测实例个数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '4',
              ),
              'Status' => 
              array (
                'description' => '压测任务的执行状态。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'Creating' => '创建中：Creating',
                  'Starting' => '启动中：Starting',
                  'DeleteFailed' => '删除失败：DeleteFailed',
                  'Running' => '运行中：Running',
                  'Stopping' => '停止中：Stopping',
                  'Error' => '报错：Error',
                  'Updating' => '更新中：Updating',
                  'Deleting' => '删除中：Deleting',
                  'CreateFailed' => '创建失败：CreateFailed',
                ),
                'example' => 'Running',
              ),
              'Reason' => 
              array (
                'description' => '压测任务处于当前状态的事件或原因。',
                'type' => 'string',
                'example' => 'RUNNING',
              ),
              'Message' => 
              array (
                'description' => '压测任务执行状态的摘要信息。',
                'type' => 'string',
                'example' => 'Benchmar task is Running',
              ),
              'Endpoint' => 
              array (
                'description' => '服务网关Endpoint。',
                'type' => 'string',
                'example' => '192342311234.pai-eas.cn-chengdu.aliyuncs.com',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"TaskName\\": \\"benchmark-larec-test-ae70\\",\\n  \\"TaskId\\": \\"eas-b-gv4y86u****\\",\\n  \\"ServiceName\\": \\"foo\\",\\n  \\"Token\\": \\"6062787a-9301****\\",\\n  \\"CallerUid\\": \\"1640133467****\\",\\n  \\"ParentUid\\": \\"1029728669****\\",\\n  \\"DesiredAgent\\": 4,\\n  \\"AvailableAgent\\": 4,\\n  \\"Status\\": \\"Running\\",\\n  \\"Reason\\": \\"RUNNING\\",\\n  \\"Message\\": \\"Benchmar task is Running\\",\\n  \\"Endpoint\\": \\"192342311234.pai-eas.cn-chengdu.aliyuncs.com\\"\\n}","type":"json"}]',
      'title' => '查看压测任务详情',
    ),
    'DescribeBenchmarkTaskReport' => 
    array (
      'summary' => '查看指定压测任务的报告。',
      'path' => '/api/v2/benchmark-tasks/{ClusterId}/{TaskName}/report',
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
          'in' => 'path',
          'schema' => 
          array (
            'description' => '压测任务所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '压测任务名称。如何获取压测任务名称，请参见[ListBenchmarkTask](~~432976~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'benchmark-larec-test-015d',
          ),
        ),
        2 => 
        array (
          'name' => 'ReportType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报告类型，支持配置RAW和Report。',
            'type' => 'string',
            'required' => false,
            'example' => 'report',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82********',
              ),
              'ReportUrl' => 
              array (
                'description' => '当ReportType为Report时，返回压测报告的下载地址。',
                'type' => 'string',
                'example' => 'http://eas-benchmark.oss-cn-chengdu.aliyuncs.com/summary/benchmark-larec-test-015d-10007.html',
              ),
              'Data' => 
              array (
                'description' => '当ReportType为RAW时，返回压测报告的详细数据。',
                'type' => 'any',
                'example' => '{
    "TimestampList": ["int64"],
    "QPSList": ["float32"],
    "RTList": [
      {
        "AVG": "float32",
        "TP100": "float32",
        "TP99": "float32",
        "TP90": "float32",
        "TP50": "float32",
        "TP10": "float32"
      }
    ],
    "TrafficList": [
      {
        "Send": "float64",
        "Receive": "float64"
      }
    ],
    "StatusCode": {
      "200": "uint64",
      "450": "uint64",
      "500": "uint64"
    },
    "Count": "uint64",
    "Total": "float64",
    "MinRT": "float32",
    "AvgRT": "float32",
    "MaxRT": "float32",
    "QPS": "float32",
    "TotalSend": "float64",
    "TotalReceive": "float64",
    "RTDistribution": [
      {
        "Latency": "float32",
        "Percentage": "int"
      }
    ],
    "RTHistogram": [
      {
        "Count": "int",
        "Mark": "float32",
        "Frequency": "float32"
      }
    ]
  }',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82********\\",\\n  \\"ReportUrl\\": \\"http://eas-benchmark.oss-cn-chengdu.aliyuncs.com/summary/benchmark-larec-test-015d-10007.html\\",\\n  \\"Data\\": \\"{\\\\n    \\\\\\"TimestampList\\\\\\": [\\\\\\"int64\\\\\\"],\\\\n    \\\\\\"QPSList\\\\\\": [\\\\\\"float32\\\\\\"],\\\\n    \\\\\\"RTList\\\\\\": [\\\\n      {\\\\n        \\\\\\"AVG\\\\\\": \\\\\\"float32\\\\\\",\\\\n        \\\\\\"TP100\\\\\\": \\\\\\"float32\\\\\\",\\\\n        \\\\\\"TP99\\\\\\": \\\\\\"float32\\\\\\",\\\\n        \\\\\\"TP90\\\\\\": \\\\\\"float32\\\\\\",\\\\n        \\\\\\"TP50\\\\\\": \\\\\\"float32\\\\\\",\\\\n        \\\\\\"TP10\\\\\\": \\\\\\"float32\\\\\\"\\\\n      }\\\\n    ],\\\\n    \\\\\\"TrafficList\\\\\\": [\\\\n      {\\\\n        \\\\\\"Send\\\\\\": \\\\\\"float64\\\\\\",\\\\n        \\\\\\"Receive\\\\\\": \\\\\\"float64\\\\\\"\\\\n      }\\\\n    ],\\\\n    \\\\\\"StatusCode\\\\\\": {\\\\n      \\\\\\"200\\\\\\": \\\\\\"uint64\\\\\\",\\\\n      \\\\\\"450\\\\\\": \\\\\\"uint64\\\\\\",\\\\n      \\\\\\"500\\\\\\": \\\\\\"uint64\\\\\\"\\\\n    },\\\\n    \\\\\\"Count\\\\\\": \\\\\\"uint64\\\\\\",\\\\n    \\\\\\"Total\\\\\\": \\\\\\"float64\\\\\\",\\\\n    \\\\\\"MinRT\\\\\\": \\\\\\"float32\\\\\\",\\\\n    \\\\\\"AvgRT\\\\\\": \\\\\\"float32\\\\\\",\\\\n    \\\\\\"MaxRT\\\\\\": \\\\\\"float32\\\\\\",\\\\n    \\\\\\"QPS\\\\\\": \\\\\\"float32\\\\\\",\\\\n    \\\\\\"TotalSend\\\\\\": \\\\\\"float64\\\\\\",\\\\n    \\\\\\"TotalReceive\\\\\\": \\\\\\"float64\\\\\\",\\\\n    \\\\\\"RTDistribution\\\\\\": [\\\\n      {\\\\n        \\\\\\"Latency\\\\\\": \\\\\\"float32\\\\\\",\\\\n        \\\\\\"Percentage\\\\\\": \\\\\\"int\\\\\\"\\\\n      }\\\\n    ],\\\\n    \\\\\\"RTHistogram\\\\\\": [\\\\n      {\\\\n        \\\\\\"Count\\\\\\": \\\\\\"int\\\\\\",\\\\n        \\\\\\"Mark\\\\\\": \\\\\\"float32\\\\\\",\\\\n        \\\\\\"Frequency\\\\\\": \\\\\\"float32\\\\\\"\\\\n      }\\\\n    ]\\\\n  }\\"\\n}","type":"json"}]',
      'title' => '查看压测任务测试报告',
    ),
    'ListBenchmarkTask' => 
    array (
      'summary' => '查看当前用户部署的所有压测任务。',
      'path' => '/api/v2/benchmark-tasks',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '过滤参数。如果指定，将分别查找EAS服务名和压测任务名中和指定参数匹配的记录。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_bench',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '压测任务对应的EAS服务名称。如何查询服务名称，请参见[ListServices](~~412109~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_bench_srv',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '压测任务列表的页码。起始值为1，默认为1。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页显示的压测任务数量，默认为100。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Tasks' => 
              array (
                'description' => '任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TaskName' => 
                    array (
                      'description' => '压测任务名称。',
                      'type' => 'string',
                      'example' => 'benchmark-larec-test-1076',
                    ),
                    'TaskId' => 
                    array (
                      'description' => '压测任务ID。',
                      'type' => 'string',
                      'example' => 'eas-b-gv4y86uvgt****i',
                    ),
                    'ServiceName' => 
                    array (
                      'description' => '待压测的服务名称。',
                      'type' => 'string',
                      'example' => 'test_quota',
                    ),
                    'Region' => 
                    array (
                      'description' => '压测任务所在区域。',
                      'type' => 'string',
                      'example' => 'cn-shanghai',
                    ),
                    'AvailableAgent' => 
                    array (
                      'description' => '可用的压测实例个数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'Status' => 
                    array (
                      'description' => '压测任务的状态。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Creating' => 'Creating',
                        'Starting' => 'Starting',
                        'DeleteFailed' => 'DeleteFailed',
                        'Running' => 'Running',
                        'Stopping' => 'Stopping',
                        'Error' => 'Error',
                        'Updating' => 'Updating',
                        'Deleting' => 'Deleting',
                        'CreateFailed' => 'CreateFailed',
                      ),
                      'example' => 'Running',
                    ),
                    'Message' => 
                    array (
                      'description' => '服务的摘要信息。',
                      'type' => 'string',
                      'example' => 'Benchmark task [benchmark-larec-test-1076] is Running',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '压测任务的创建时间。',
                      'type' => 'string',
                      'example' => '2020-12-04T02:43:15Z',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '压测任务的更新时间。',
                      'type' => 'string',
                      'example' => '2020-06-24T03:11:30Z',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的任务总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'PageNumber' => 
              array (
                'description' => '返回查询的压测任务列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '返回每页显示的压测任务数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Tasks\\": [\\n    {\\n      \\"TaskName\\": \\"benchmark-larec-test-1076\\",\\n      \\"TaskId\\": \\"eas-b-gv4y86uvgt****i\\",\\n      \\"ServiceName\\": \\"test_quota\\",\\n      \\"Region\\": \\"cn-shanghai\\",\\n      \\"AvailableAgent\\": 2,\\n      \\"Status\\": \\"Running\\",\\n      \\"Message\\": \\"Benchmark task [benchmark-larec-test-1076] is Running\\",\\n      \\"CreateTime\\": \\"2020-12-04T02:43:15Z\\",\\n      \\"UpdateTime\\": \\"2020-06-24T03:11:30Z\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 2,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20\\n}","type":"json"}]',
      'title' => '查询压测任务列表',
    ),
    'StartBenchmarkTask' => 
    array (
      'summary' => '启动指定的压测任务。',
      'path' => '/api/v2/benchmark-tasks/{ClusterId}/{TaskName}/start',
      'methods' => 
      array (
        0 => 'put',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '压测任务所在区域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '压测任务名称。如何获取压测任务名称，请参见[ListBenchmarkTask](~~432976~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'benchmark-larec-test-3bc6',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '请求返回信息。',
                'type' => 'string',
                'example' => 'Benchmark task [benchmark-larec-test-1076] is Starting',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Benchmark task [benchmark-larec-test-1076] is Starting\\"\\n}","type":"json"}]',
      'title' => '启动压测任务',
    ),
    'StopBenchmarkTask' => 
    array (
      'summary' => '停止指定的压测任务。',
      'path' => '/api/v2/benchmark-tasks/{ClusterId}/{TaskName}/stop',
      'methods' => 
      array (
        0 => 'put',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '压测任务所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '压测任务名称。如何获取压测任务名称，请参见[ListBenchmarkTask](~~432976~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'benchmark-larec-test-dbe5',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '操作结果信息。',
                'type' => 'string',
                'example' => 'Benchmark task [benchmark-larec-test-dbe5] is Stopping',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Benchmark task [benchmark-larec-test-dbe5] is Stopping\\"\\n}","type":"json"}]',
      'title' => '停止压测任务',
    ),
    'UpdateBenchmarkTask' => 
    array (
      'summary' => '更新指定的压测任务。',
      'path' => '/api/v2/benchmark-tasks/{ClusterId}/{TaskName}',
      'methods' => 
      array (
        0 => 'put',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '压测任务所在区域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '压测任务名字。',
            'type' => 'string',
            'required' => true,
            'example' => 'benchmark-larec-test-645c',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '压测任务配置参数，详情请参见**表1. base描述表**。',
            'type' => 'string',
            'required' => false,
            'example' => '{
    "base":  {
         "qps": 200
    }
}',
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
                'example' => '40325405-579C-4D82***',
              ),
              'Message' => 
              array (
                'description' => '操作成功信息。',
                'type' => 'string',
                'example' => 'Benchmark task [benchmark-larec-test-1076] is Updating',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82***\\",\\n  \\"Message\\": \\"Benchmark task [benchmark-larec-test-1076] is Updating\\"\\n}","type":"json"}]',
      'title' => '更新压测任务',
      'requestParamsDescription' => '#### 表1. base描述表
更新操作时只允许修改如下base描述表中的配置，如下所示：
| **参数** | **说明** |
| --- | --- |
| duration | 【可选】压测任务执行的总时间（秒），默认为1200 |
| qps | 【可选】压测任务的目标（预期）qps，默认为10000 |
| concurrency | 【可选】每个压测实例内创建的并发连接数，初始值默认为40，会动态修改 |
| agentCount | 【可选】压测任务创建的实例个数，初始值默认为1，会动态修改 |',
    ),
    'CreateGateway' => 
    array (
      'summary' => '创建私有网关，目前仅支持在自运维资源组中创建私有网关。',
      'path' => '/api/v2/gateways',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ResourceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。如何获取资源组，请参见[ListResources](~~412133~~)接口返回结果中的ResourceId字段。',
            'type' => 'string',
            'required' => false,
            'example' => 'eas-r-4gt8twzwllfo******',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceType' => 
              array (
                'description' => '私有网关使用的机型。取值如下：
- ecs.r7.8xlarge：旗舰版内存型r7（32核256 GB）。
- ecs.r7.4xlarge：专业版内存型r7（16核128 GB）。',
                'type' => 'string',
                'required' => true,
                'example' => 'ecs.r7.4xlarge',
              ),
              'EnableIntranet' => 
              array (
                'description' => '开启内网访问（默认值为true）。',
                'type' => 'boolean',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'true',
              ),
              'EnableInternet' => 
              array (
                'description' => '开启公网访问（默认值为false）。',
                'type' => 'boolean',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'false',
              ),
              'Name' => 
              array (
                'description' => '私有网关别名。',
                'type' => 'string',
                'required' => false,
                'example' => 'mygateway1',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'GatewayId' => 
              array (
                'description' => '私有网关ID。',
                'type' => 'string',
                'example' => 'gw-1uhcqmsc7x22******',
              ),
              'ClusterId' => 
              array (
                'description' => '私有网关所在地域。',
                'type' => 'string',
                'example' => 'cn-wulanchabu',
              ),
              'Message' => 
              array (
                'description' => '请求返回信息。',
                'type' => 'string',
                'example' => 'Successfully create gateway for user-managed resource',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"GatewayId\\": \\"gw-1uhcqmsc7x22******\\",\\n  \\"ClusterId\\": \\"cn-wulanchabu\\",\\n  \\"Message\\": \\"Successfully create gateway for user-managed resource\\"\\n}","type":"json"}]',
      'title' => '创建私有网关',
    ),
    'DescribeGateway' => 
    array (
      'summary' => '查看私有网关详情。',
      'path' => '/api/v2/gateways/{ClusterId}/{GatewayId}',
      'methods' => 
      array (
        0 => 'get',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'in' => 'path',
          'schema' => 
          array (
            'description' => '私有网关所在地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'GatewayId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '私有网关ID。如何获取私有网关ID，请参见[ListResources](~~412133~~)接口返回结果中的private_gateway_id字段。',
            'type' => 'string',
            'required' => true,
            'example' => 'gw-1uhcqmsc7x22******',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Region' => 
              array (
                'title' => '地域ID',
                'description' => '私有网关所在地域。',
                'type' => 'string',
                'required' => true,
                'example' => 'cn-wulanchabu',
              ),
              'GatewayId' => 
              array (
                'title' => '网关ID',
                'description' => '私有网关ID。',
                'type' => 'string',
                'example' => 'gw-1uhcqmsc7x22******',
              ),
              'CreateTime' => 
              array (
                'title' => '创建时间',
                'description' => '私有网关创建时间。使用UTC时间。',
                'type' => 'string',
                'example' => '2020-05-19T14:19:42Z',
              ),
              'UpdateTime' => 
              array (
                'title' => '更新时间',
                'description' => '私有网关更新时间。使用UTC时间。',
                'type' => 'string',
                'example' => '2021-02-24T11:52:17Z',
              ),
              'IntranetEnabled' => 
              array (
                'description' => '内网访问是否开启。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'IntranetDomain' => 
              array (
                'title' => '外部域名',
                'description' => '内网访问域名。',
                'type' => 'string',
                'example' => 'gw-1uhcqmsc7x22******-1801786532******-vpc.cn-wulanchabu.pai-eas.aliyuncs.com',
              ),
              'InternetEnabled' => 
              array (
                'description' => '公网访问是否开启。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'InternetDomain' => 
              array (
                'title' => '内部域名',
                'description' => '公网访问域名。',
                'type' => 'string',
                'example' => 'gw-1uhcqmsc7x22******-1801786532******.cn-wulanchabu.pai-eas.aliyuncs.com',
              ),
              'InstanceType' => 
              array (
                'title' => '实例种类',
                'description' => '私有网关使用的机型。',
                'type' => 'string',
                'example' => 'ecs.r7.4xlarge
',
              ),
              'ParentUid' => 
              array (
                'title' => '用户ID',
                'description' => '创建私有网关账号的主账号UID。',
                'type' => 'string',
                'example' => '11234*******',
              ),
              'CallerUid' => 
              array (
                'description' => '创建私有网关账号的UID。',
                'type' => 'string',
                'example' => '20123*******',
              ),
              'Status' => 
              array (
                'title' => '网关状态',
                'description' => '私有网关状态。',
                'type' => 'string',
                'example' => 'PrivateGatewayRunning',
              ),
              'IntranetLinkedVpcList' => 
              array (
                'description' => '内网访问端点列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '内网访问端点。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'VpcId' => 
                    array (
                      'description' => '专有网络的ID。',
                      'type' => 'string',
                      'example' => 'vpc-bp1g11zvka6zr3i******',
                    ),
                    'VSwitchId' => 
                    array (
                      'description' => '虚拟交换机ID。',
                      'type' => 'string',
                      'example' => 'vsw-bp1txzxsdck43pp******',
                    ),
                    'Ip' => 
                    array (
                      'description' => 'Ip地址。',
                      'type' => 'string',
                      'example' => '192.168.10.11',
                    ),
                    'Status' => 
                    array (
                      'description' => '状态。可能值：
- Creating：创建中。
- Running：运行中。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Creating' => 'Creating',
                        'Running' => 'Running',
                      ),
                      'example' => 'Running',
                    ),
                    'SecurityGroupId' => 
                    array (
                      'description' => '安全组ID。',
                      'type' => 'string',
                      'example' => 'sg-2ze4pgstgszvgq******',
                    ),
                  ),
                ),
              ),
              'InternetAclPolicyList' => 
              array (
                'description' => '公网访问控制策略列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '公网访问控制策略。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Entry' => 
                    array (
                      'description' => '允许访问的IP段。',
                      'type' => 'string',
                      'example' => '192.168.1.1/32',
                    ),
                    'Status' => 
                    array (
                      'description' => '状态。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Creating' => '创建中',
                        'Running' => '运行中',
                      ),
                      'example' => 'Running',
                    ),
                    'Comment' => 
                    array (
                      'description' => '说明。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                  ),
                ),
              ),
              'GatewayName' => 
              array (
                'description' => '私有网关别名。',
                'type' => 'string',
                'example' => 'mygateway1',
              ),
              'ExternalClusterId' => 
              array (
                'description' => '自运维集群ID。',
                'type' => 'string',
                'example' => 'c935eadf284c14c2da57a2a13ad6******',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Region\\": \\"cn-wulanchabu\\",\\n  \\"GatewayId\\": \\"gw-1uhcqmsc7x22******\\",\\n  \\"CreateTime\\": \\"2020-05-19T14:19:42Z\\",\\n  \\"UpdateTime\\": \\"2021-02-24T11:52:17Z\\",\\n  \\"IntranetEnabled\\": true,\\n  \\"IntranetDomain\\": \\"gw-1uhcqmsc7x22******-1801786532******-vpc.cn-wulanchabu.pai-eas.aliyuncs.com\\",\\n  \\"InternetEnabled\\": true,\\n  \\"InternetDomain\\": \\"gw-1uhcqmsc7x22******-1801786532******.cn-wulanchabu.pai-eas.aliyuncs.com\\",\\n  \\"InstanceType\\": \\"ecs.r7.4xlarge\\\\n\\",\\n  \\"ParentUid\\": \\"11234*******\\",\\n  \\"CallerUid\\": \\"20123*******\\",\\n  \\"Status\\": \\"PrivateGatewayRunning\\",\\n  \\"IntranetLinkedVpcList\\": [\\n    {\\n      \\"VpcId\\": \\"vpc-bp1g11zvka6zr3i******\\",\\n      \\"VSwitchId\\": \\"vsw-bp1txzxsdck43pp******\\",\\n      \\"Ip\\": \\"192.168.10.11\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"SecurityGroupId\\": \\"sg-2ze4pgstgszvgq******\\"\\n    }\\n  ],\\n  \\"InternetAclPolicyList\\": [\\n    {\\n      \\"Entry\\": \\"192.168.1.1/32\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"Comment\\": \\"test\\"\\n    }\\n  ],\\n  \\"GatewayName\\": \\"mygateway1\\",\\n  \\"ExternalClusterId\\": \\"c935eadf284c14c2da57a2a13ad6******\\"\\n}","type":"json"}]',
      'title' => '查看私有网关详情',
    ),
    'UpdateGateway' => 
    array (
      'summary' => '更新私有网关。',
      'path' => '/api/v2/gateways/{ClusterId}/{GatewayId}',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceType' => 
              array (
                'title' => '如果Alias不为空，则更新Alias，否则更新Spec',
                'description' => '私有网关使用的机型。取值如下：
- ecs.r7.8xlarge：旗舰版内存型r7（32核256 GB）。
- ecs.r7.4xlarge：专业版内存型r7（16核128 GB）。',
                'type' => 'string',
                'required' => false,
                'example' => 'ecs.r7.4xlarge',
              ),
              'Name' => 
              array (
                'description' => '私有网关别名。',
                'type' => 'string',
                'required' => false,
                'example' => 'mygateway1',
              ),
              'EnableIntranet' => 
              array (
                'description' => '开启内网访问（默认值为true）。',
                'type' => 'boolean',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'true',
              ),
              'EnableInternet' => 
              array (
                'description' => '开启公网访问（默认值为false）。',
                'type' => 'boolean',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'false',
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'GatewayId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例 ID。',
            'description' => '私有网关ID。如何获取私有网关ID，请参见[ListResources](~~412133~~)接口返回结果中的private_gateway_id字段。',
            'type' => 'string',
            'required' => true,
            'example' => 'gw-1uhcqmsc7x22******',
          ),
        ),
        2 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '私有网关所在区域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'GatewayId' => 
              array (
                'title' => '资源ID，如ECS实例的创建接口CreateInstance应返回InstanceId。',
                'description' => '私有网关ID。',
                'type' => 'string',
                'example' => 'gw-1uhcqmsc7x22******',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82***',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'Gateway is updated',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"GatewayId\\": \\"gw-1uhcqmsc7x22******\\",\\n  \\"RequestId\\": \\"40325405-579C-4D82***\\",\\n  \\"Message\\": \\"Gateway is updated\\"\\n}","type":"json"}]',
      'title' => '更新私有网关',
    ),
    'CreateGatewayIntranetLinkedVpc' => 
    array (
      'summary' => '创建私有网关内网访问端点。',
      'path' => '/api/v2/gateways/{ClusterId}/{GatewayId}/intranet_endpoint_linked_vpc',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '私有网关对应地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'GatewayId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '私有网关ID。如何获取私有网关ID，请参见[ListResources](~~412133~~)接口返回结果中的private_gateway_id字段。',
            'type' => 'string',
            'required' => true,
            'example' => 'gw-1uhcqmsc7x22******',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络的ID。如何获取专有网络ID，请参见[DescribeVpcs](~~448581~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-uf66uio7md****',
          ),
        ),
        3 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟交换机ID。如何获取虚拟交换机ID，请参见[DescribeVpcs](~~448581~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-8vbqn2at0kljjxxxx****',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'GatewayId' => 
              array (
                'description' => '私有网关ID。',
                'type' => 'string',
                'example' => 'gw-1uhcqmsc7x22******',
              ),
              'Message' => 
              array (
                'description' => '请求返回信息。',
                'type' => 'string',
                'example' => 'Successfully add intranet linked vpc for gateway',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"GatewayId\\": \\"gw-1uhcqmsc7x22******\\",\\n  \\"Message\\": \\"Successfully add intranet linked vpc for gateway\\"\\n}","type":"json"}]',
      'title' => '创建私有网关内网访问端点',
    ),
    'ListGatewayIntranetLinkedVpc' => 
    array (
      'summary' => '查看私有网关内网访问端点列表。',
      'path' => '/api/v2/gateways/{ClusterId}/{GatewayId}/intranet_endpoint_linked_vpc',
      'methods' => 
      array (
        0 => 'get',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '私有网关所在地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'GatewayId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '私有网关ID。如何获取私有网关ID，请参见[ListResources](~~412133~~)接口返回结果中的private_gateway_id字段。',
            'type' => 'string',
            'required' => false,
            'example' => 'gw-1uhcqmsc7x22******',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'GatewayId' => 
              array (
                'description' => '私有网关ID。',
                'type' => 'string',
                'example' => 'gw-1uhcqmsc7x22******',
              ),
              'IntranetLinkedVpcList' => 
              array (
                'description' => '内网访问端点列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '内网访问端点。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Ip' => 
                    array (
                      'description' => 'IP地址。',
                      'type' => 'string',
                      'example' => '192.168.10.11
',
                    ),
                    'Status' => 
                    array (
                      'description' => '状态。可能值为：
- Creating：创建中。
- Running：运行中。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Creating' => 'Creating',
                        'Running' => 'Running',
                      ),
                      'example' => 'Running',
                    ),
                    'VpcId' => 
                    array (
                      'description' => '专有网络的ID。',
                      'type' => 'string',
                      'example' => 'vpc-2zetuli9ws0qgjd******',
                    ),
                    'VSwitchId' => 
                    array (
                      'description' => '虚拟交换机ID。',
                      'type' => 'string',
                      'example' => 'vsw-8vb2qjoiio6m9pg******',
                    ),
                    'SecurityGroupId' => 
                    array (
                      'description' => '安全组ID。',
                      'type' => 'string',
                      'example' => 'sg-2ze4pgstgszvgq******',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"GatewayId\\": \\"gw-1uhcqmsc7x22******\\",\\n  \\"IntranetLinkedVpcList\\": [\\n    {\\n      \\"Ip\\": \\"192.168.10.11\\\\n\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"VpcId\\": \\"vpc-2zetuli9ws0qgjd******\\",\\n      \\"VSwitchId\\": \\"vsw-8vb2qjoiio6m9pg******\\",\\n      \\"SecurityGroupId\\": \\"sg-2ze4pgstgszvgq******\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查看私有网关内网访问端点列表',
    ),
    'DeleteGatewayIntranetLinkedVpc' => 
    array (
      'summary' => '删除私有网关内网访问端点。',
      'path' => '/api/v2/gateways/{ClusterId}/{GatewayId}/intranet_endpoint_linked_vpc',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '所在区域',
            'description' => '私有网关所在地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'GatewayId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '网关ID',
            'description' => '私有网关ID。如何获取私有网关ID，请参见[ListResources](~~412133~~)接口返回结果中的private_gateway_id字段。',
            'type' => 'string',
            'required' => true,
            'example' => 'gw-1uhcqmsc7x22******',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络的ID。如何获取专有网络ID，请参见[DescribeVpcs](~~448581~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-uf66uio7md****',
          ),
        ),
        3 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟交换机ID。如何获取虚拟交换机ID，请参见[DescribeVpcs](~~448581~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-8vbqn2at0kljjxxxx****',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'Successfully delete intranet linked vpc for gateway',
              ),
              'GatewayId' => 
              array (
                'description' => '私有网关ID。',
                'type' => 'string',
                'example' => 'gw-1uhcqmsc7x22******',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"Message\\": \\"Successfully delete intranet linked vpc for gateway\\",\\n  \\"GatewayId\\": \\"gw-1uhcqmsc7x22******\\"\\n}","type":"json"}]',
      'title' => '删除私有网关内网访问端点',
    ),
    'DeleteGateway' => 
    array (
      'summary' => '删除私有网关。',
      'path' => '/api/v2/gateways/{ClusterId}/{GatewayId}',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '私有网关所在地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'GatewayId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '私有网关ID。如何获取私有网关ID，请参见[ListResources](~~412133~~)接口返回结果中的private_gateway_id字段。',
            'type' => 'string',
            'required' => true,
            'example' => 'gw-1uhcqmsc7x22******',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'GatewayId' => 
              array (
                'description' => '私有网关ID。',
                'type' => 'string',
                'example' => 'gw-1uhcqmsc7x22******',
              ),
              'Message' => 
              array (
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'Gateway gw-w8cy1dlhughc**** is deleted',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"GatewayId\\": \\"gw-1uhcqmsc7x22******\\",\\n  \\"Message\\": \\"Gateway gw-w8cy1dlhughc**** is deleted\\"\\n}","type":"json"}]',
      'title' => '删除私有网关',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'pai-eas.cn-heyuan.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'pai-eas.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'pai-eas.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'pai-eas.cn-hangzhou.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'pai-eas.cn-shanghai.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'pai-eas.cn-shenzhen.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'pai-eas.cn-chengdu.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'pai-eas.cn-hongkong.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'pai-eas.ap-southeast-1.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'pai-eas.ap-southeast-5.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'pai-eas.us-east-1.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'pai-eas.us-west-1.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'pai-eas.eu-central-1.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'pai-eas.ap-south-1.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'pai-eas.cn-shanghai-finance-1.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'pai-eas.cn-wulanchabu.aliyuncs.com',
    ),
  ),
);
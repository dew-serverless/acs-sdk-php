<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'hdr',
    'version' => '2017-09-25',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 151406,
      'title' => '服务器管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'RegisterServers',
        1 => 'UnregisterServer',
        2 => 'DescribeServer',
        3 => 'DescribeServers',
      ),
    ),
    1 => 
    array (
      'id' => 151411,
      'title' => '站点对管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeSitePairs',
        1 => 'DescribeSite',
        2 => 'DeleteSitePair',
        3 => 'CreateSitePair',
        4 => 'DescribeSitePair',
      ),
    ),
    2 => 
    array (
      'id' => 151417,
      'title' => '故障切换',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EnableReplication',
        1 => 'DisableReplication',
        2 => 'TestFailover',
        3 => 'TestCleanup',
        4 => 'DescribeRecoveryPoints',
        5 => 'ChangeRecoveryPoint',
        6 => 'CommitFailover',
        7 => 'ForcedFailover',
      ),
    ),
    3 => 
    array (
      'id' => 151426,
      'title' => '故障恢复',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'TriggerReversedRegister',
        1 => 'DescribeInfrastructures',
        2 => 'ReversedEnableReplication',
        3 => 'ReversedDisableReplication',
        4 => 'Failback',
      ),
    ),
    4 => 
    array (
      'id' => 180810,
      'title' => '恢复计划',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateRecoveryPlan',
        1 => 'DeleteRecoveryPlan',
        2 => 'DescribeRecoveryPlan',
        3 => 'DescribeRecoveryPlans',
        4 => 'UpdateRecoveryPlan',
      ),
    ),
    5 => 
    array (
      'id' => 151432,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeAvailableInstanceTypes',
        1 => 'DescribeTasks',
        2 => 'DescribeTask',
      ),
    ),
    6 => 
    array (
      'id' => 193000,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeSitePairStatistics',
        1 => 'DescribeSummary',
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
    'RegisterServers' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SitePairId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '站点对ID',
            'description' => '站点对ID',
            'type' => 'string',
            'required' => false,
            'example' => 's-000cm9ax8sgzwujrzdwt',
          ),
        ),
        1 => 
        array (
          'name' => 'ServerInstancesInfo',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '注册服务器信息',
            'description' => '注册服务器信息',
            'type' => 'string',
            'required' => false,
            'example' => '"[{\\"instanceId\\":\\"i-uf60ngpe9sseu5gsgu45\\",\\"privateIpAddress\\":\\"192.168.1.198\\",\\"osType\\":\\"linux\\",\\"osName\\":\\"CentOS  7.8 64位\\",\\"cpu\\":2,\\"memory\\":4294967296,\\"hostName\\":\\"hdr-test\\"}]"',
          ),
        ),
        2 => 
        array (
          'name' => 'AgentPort',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '代理服务端口，默认9080',
            'description' => '代理服务端口，默认9080',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '9080',
            'default' => '9080',
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
              'Code' => 
              array (
                'description' => '返回结果码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D76E741C-68B7-5281-8C5B-698AD06B0D89',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 't-0001nlbcl4bynbb67x4w',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"D76E741C-68B7-5281-8C5B-698AD06B0D89\\",\\n  \\"TaskId\\": \\"t-0001nlbcl4bynbb67x4w\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '添加受保护服务器',
      'summary' => '添加受保护服务器。',
    ),
    'UnregisterServer' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '受保护服务器ID',
            'type' => 'string',
            'required' => true,
            'example' => 'sr-000jf20efavec47ucq5g',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D2E81EC9-B206-54EA-BBCF-9D4D6AFE7AA8',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"D2E81EC9-B206-54EA-BBCF-9D4D6AFE7AA8\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '注销受保护服务器',
      'summary' => '注销受保护服务器。',
    ),
    'DescribeServer' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '受保护服务器ID',
            'type' => 'string',
            'required' => false,
            'example' => 'sr-0005qxusucbiga738e9s',
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
              'PrimarySiteId' => 
              array (
                'description' => '主站站点ID',
                'type' => 'string',
                'example' => 'si-0001jntih0phb0i2w1ya',
              ),
              'ServerId' => 
              array (
                'description' => '受保护服务器ID',
                'type' => 'string',
                'example' => 'sr-0005qxusucbiip0g6t93',
              ),
              'RecoveryUseDhcp' => 
              array (
                'description' => '恢复是否使用DHCP自动分配IP',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'BBCC4082-98DF-5804-96C6-0E74C37C5867',
              ),
              'RecoveryMemory' => 
              array (
                'description' => '故障切换使用的实例内存大小',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '4294967296',
              ),
              'SourceGatewayVersion' => 
              array (
                'description' => '主站网关版本',
                'type' => 'string',
                'example' => '3.7.3',
              ),
              'IncrementalSyncStartTime' => 
              array (
                'description' => '增量复制开始时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '0',
              ),
              'CrashConsistentPointPolicy' => 
              array (
                'description' => '恢复点策略',
                'type' => 'string',
                'example' => '{\\"scheduleType\\":\\"CRON\\",\\"expression\\":\\"0 0 */1 * * 0,1,2,3,4,5,6\\",\\"initialDelay\\":0}',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'RecoveryPostScriptContent' => 
              array (
                'description' => '故障切换的实例启动后执行的脚本内容',
                'type' => 'string',
                'example' => 'echo \\"127.0.0.1 kubernetes.docker.internal\\" >> /etc/hosts',
              ),
              'TestRecoveredInstanceId' => 
              array (
                'description' => '容灾演练的实例ID',
                'type' => 'string',
                'example' => 'i-bp13zgzv13am2n2z92lb',
              ),
              'ReplicationNetwork' => 
              array (
                'description' => '复制网络VSwitch ID',
                'type' => 'string',
                'example' => 'vsw-bp1g0s2u3b2kbn46kiy53',
              ),
              'RecoveryUseEssd' => 
              array (
                'description' => '故障切换的实例云盘类型是否使用ESSD',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'TargetGatewayVersion' => 
              array (
                'description' => '目的端网关版本',
                'type' => 'string',
                'example' => 'i-bp13zgzv13am2n2z92lb',
              ),
              'OsType' => 
              array (
                'description' => '操作系统类型',
                'type' => 'string',
                'example' => 'linux',
              ),
              'FullSyncStartTime' => 
              array (
                'description' => '全量复制开始时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '0',
              ),
              'ReplicationUseSsd' => 
              array (
                'description' => '复影实例是否使用SSD云盘',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'Rpo' => 
              array (
                'description' => '恢复时间目标，单位秒',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '45',
              ),
              'Consistent' => 
              array (
                'description' => '是否处于一致性状态',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'FullSyncTotalSize' => 
              array (
                'description' => '全量复制大小，单位B',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '365072220160',
              ),
              'RecoveredIpAddress' => 
              array (
                'description' => '容灾切换的实例IP',
                'type' => 'string',
                'example' => '192.168.2.2',
              ),
              'Alias' => 
              array (
                'description' => '别名',
                'type' => 'string',
                'example' => 'bsdewmpci_rz',
              ),
              'Status' => 
              array (
                'description' => '实例状态',
                'type' => 'string',
                'example' => 'replicating',
              ),
              'TestFailoverStatus' => 
              array (
                'description' => '容灾演练状态',
                'type' => 'string',
                'example' => 'testFailovered',
              ),
              'ReplicationUseEssd' => 
              array (
                'description' => '复影实例是否使用ESSD云盘',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'OsDetail' => 
              array (
                'description' => '操作系统详情',
                'type' => 'string',
                'example' => 'CentOS;7.9.2009',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'TestRecoveredIpAddress' => 
              array (
                'description' => '容灾演练的机器IP地址',
                'type' => 'string',
                'example' => '192.168.2.2',
              ),
              'SecondarySiteId' => 
              array (
                'description' => '从站站点ID',
                'type' => 'string',
                'example' => 'si-000imvpcegvbh6i5kd2u',
              ),
              'FullSyncProgress' => 
              array (
                'description' => '全量复制进度百分比',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '17',
              ),
              'RecoveryInstanceType' => 
              array (
                'description' => '故障切换的实例规格',
                'type' => 'string',
                'example' => 'ecs.c5.2xlarge',
              ),
              'IpAddress' => 
              array (
                'description' => '受保护服务器IP地址',
                'type' => 'string',
                'example' => '30.42.105.6',
              ),
              'RecoveryInstanceName' => 
              array (
                'description' => '故障切换的实例名称',
                'type' => 'string',
                'example' => 'HDR_Recovery-sr-000bzkmmlwghq3soqry2',
              ),
              'OriginalInstanceId' => 
              array (
                'description' => '源端实例ID',
                'type' => 'string',
                'example' => 'i-bp19axn91irnsi9204xg',
              ),
              'RecoveredInstanceId' => 
              array (
                'description' => '容灾切换的实例ID',
                'type' => 'string',
                'example' => 'i-bp19axn91irnsi9204xg',
              ),
              'RecoveryReserveIp' => 
              array (
                'description' => '演练实例是否保留源机的IP（需要演练所在的VSwitch包含相应网段）',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'Code' => 
              array (
                'description' => '状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Memory' => 
              array (
                'description' => '内存大小',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '8589934591',
              ),
              'RecoveryIpAddress' => 
              array (
                'description' => '故障切换的实例手动设置IP',
                'type' => 'string',
                'example' => '192.168.2.2',
              ),
              'RecoveryNetwork' => 
              array (
                'description' => '故障切换的实例所在的VSwitch ID',
                'type' => 'string',
                'example' => 'vsw-uf61v3bg6r790ir22jqv4',
              ),
              'Errno' => 
              array (
                'description' => '出错原因',
                'type' => 'string',
                'example' => 'cdr.console.plugin.failed_to_connect',
              ),
              'ReplicationUseOriginalInstance' => 
              array (
                'description' => '反向复制使用源机',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'Hostname' => 
              array (
                'description' => '主机名称',
                'type' => 'string',
                'example' => 'iZ2ze0jazgwtuxettbk1ywZ',
              ),
              'RecoveryCpu' => 
              array (
                'description' => '故障切换的实例CPU核数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'AgentPort' => 
              array (
                'description' => '客户端代理端口',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '9080',
              ),
              'ReplicationUseDhcp' => 
              array (
                'description' => '-',
                'type' => 'boolean',
                'example' => '-',
              ),
              'TestRecoveredInstanceName' => 
              array (
                'description' => '容灾演练的实例名称',
                'type' => 'string',
                'example' => 'HDR_Recovery-sr-000c2rz7q8tak59pt6sw',
              ),
              'AgentVersion' => 
              array (
                'description' => '客户端版本',
                'type' => 'string',
                'example' => '3.7.3',
              ),
              'FullSyncCurrentSize' => 
              array (
                'description' => '全量复制已完成大小，单位B',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3285276688384',
              ),
              'ReplicationInfrastructureType' => 
              array (
                'description' => '复制使用的基础设施类型',
                'type' => 'string',
                'example' => 'aliyun',
              ),
              'Cpu' => 
              array (
                'description' => 'CPU核数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'RecoveryPostScriptType' => 
              array (
                'description' => '演练实例启动后执行脚本类型，可选项：SHELL',
                'type' => 'string',
                'example' => 'SHELL',
              ),
              'ReplicationInfrastructureId' => 
              array (
                'description' => '目标站点基础设施ID',
                'type' => 'string',
                'example' => 'is-000bzkmmlwgibbduuoff',
              ),
              'ConnectionStatus' => 
              array (
                'description' => '连接状态',
                'type' => 'string',
                'example' => 'connected',
              ),
              'Operations' => 
              array (
                'description' => '支持的操作',
                'type' => 'string',
                'example' => '"{\\"Resynchronize\\":true,\\"TestFailover\\":true,\\"TestCleanup\\":true,\\"ChangeRecoveryPoint\\":true,\\"UnregisterServer\\":true,\\"ReversedEnableReplication\\":true,\\"ReversedDisableReplication\\":true,\\"DisableReplication\\":true,\\"CommitFailover\\":true,\\"RestartServer\\":true,\\"UpgradeServer\\":true,\\"ForcedFailover\\":true,\\"RepairReplication\\":true,\\"EnableReplication\\":true,\\"TriggerReversedRegister\\":true,\\"SetupAgent\\":true,\\"TriggerRegister\\":true,\\"CollectSupportBundle\\":true,\\"Failback\\":true}"',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 't-0004ka624vrza82g46ne',
              ),
              'RecoveryUseSsd' => 
              array (
                'description' => '故障切换的实例云盘类型是否使用SSD',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'Disks' => 
              array (
                'description' => '磁盘信息例表。',
                'type' => 'string',
                'example' => '[{\\"id\\":\\"0\\",\\"boot\\":true,\\"size\\":500363689984}]',
              ),
              'RecoveryEssdPerformanceLevel' => 
              array (
                'description' => '演练、切换实例使用ESSD选定的PL等级',
                'type' => 'string',
                'example' => 'PL1',
              ),
              'LatestRecoveryPointTime' => 
              array (
                'description' => '最近一次创建恢复点的时间',
                'type' => 'string',
                'example' => '1661419052',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PrimarySiteId\\": \\"si-0001jntih0phb0i2w1ya\\",\\n  \\"ServerId\\": \\"sr-0005qxusucbiip0g6t93\\",\\n  \\"RecoveryUseDhcp\\": false,\\n  \\"RequestId\\": \\"BBCC4082-98DF-5804-96C6-0E74C37C5867\\",\\n  \\"RecoveryMemory\\": 4294967296,\\n  \\"SourceGatewayVersion\\": \\"3.7.3\\",\\n  \\"IncrementalSyncStartTime\\": 0,\\n  \\"CrashConsistentPointPolicy\\": \\"{\\\\\\\\\\\\\\"scheduleType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"CRON\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"expression\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0 0 */1 * * 0,1,2,3,4,5,6\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"initialDelay\\\\\\\\\\\\\\":0}\\",\\n  \\"Success\\": true,\\n  \\"RecoveryPostScriptContent\\": \\"echo \\\\\\\\\\\\\\"127.0.0.1 kubernetes.docker.internal\\\\\\\\\\\\\\" >> /etc/hosts\\",\\n  \\"TestRecoveredInstanceId\\": \\"i-bp13zgzv13am2n2z92lb\\",\\n  \\"ReplicationNetwork\\": \\"vsw-bp1g0s2u3b2kbn46kiy53\\",\\n  \\"RecoveryUseEssd\\": false,\\n  \\"TargetGatewayVersion\\": \\"i-bp13zgzv13am2n2z92lb\\",\\n  \\"OsType\\": \\"linux\\",\\n  \\"FullSyncStartTime\\": 0,\\n  \\"ReplicationUseSsd\\": false,\\n  \\"Rpo\\": 45,\\n  \\"Consistent\\": false,\\n  \\"FullSyncTotalSize\\": 365072220160,\\n  \\"RecoveredIpAddress\\": \\"192.168.2.2\\",\\n  \\"Alias\\": \\"bsdewmpci_rz\\",\\n  \\"Status\\": \\"replicating\\",\\n  \\"TestFailoverStatus\\": \\"testFailovered\\",\\n  \\"ReplicationUseEssd\\": false,\\n  \\"OsDetail\\": \\"CentOS;7.9.2009\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"TestRecoveredIpAddress\\": \\"192.168.2.2\\",\\n  \\"SecondarySiteId\\": \\"si-000imvpcegvbh6i5kd2u\\",\\n  \\"FullSyncProgress\\": 17,\\n  \\"RecoveryInstanceType\\": \\"ecs.c5.2xlarge\\",\\n  \\"IpAddress\\": \\"30.42.105.6\\",\\n  \\"RecoveryInstanceName\\": \\"HDR_Recovery-sr-000bzkmmlwghq3soqry2\\",\\n  \\"OriginalInstanceId\\": \\"i-bp19axn91irnsi9204xg\\",\\n  \\"RecoveredInstanceId\\": \\"i-bp19axn91irnsi9204xg\\",\\n  \\"RecoveryReserveIp\\": false,\\n  \\"Code\\": \\"200\\",\\n  \\"Memory\\": 8589934591,\\n  \\"RecoveryIpAddress\\": \\"192.168.2.2\\",\\n  \\"RecoveryNetwork\\": \\"vsw-uf61v3bg6r790ir22jqv4\\",\\n  \\"Errno\\": \\"cdr.console.plugin.failed_to_connect\\",\\n  \\"ReplicationUseOriginalInstance\\": false,\\n  \\"Hostname\\": \\"iZ2ze0jazgwtuxettbk1ywZ\\",\\n  \\"RecoveryCpu\\": 4,\\n  \\"AgentPort\\": 9080,\\n  \\"ReplicationUseDhcp\\": true,\\n  \\"TestRecoveredInstanceName\\": \\"HDR_Recovery-sr-000c2rz7q8tak59pt6sw\\",\\n  \\"AgentVersion\\": \\"3.7.3\\",\\n  \\"FullSyncCurrentSize\\": 3285276688384,\\n  \\"ReplicationInfrastructureType\\": \\"aliyun\\",\\n  \\"Cpu\\": 4,\\n  \\"RecoveryPostScriptType\\": \\"SHELL\\",\\n  \\"ReplicationInfrastructureId\\": \\"is-000bzkmmlwgibbduuoff\\",\\n  \\"ConnectionStatus\\": \\"connected\\",\\n  \\"Operations\\": \\"\\\\\\"{\\\\\\\\\\\\\\"Resynchronize\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"TestFailover\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"TestCleanup\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"ChangeRecoveryPoint\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"UnregisterServer\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"ReversedEnableReplication\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"ReversedDisableReplication\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"DisableReplication\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"CommitFailover\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"RestartServer\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"UpgradeServer\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"ForcedFailover\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"RepairReplication\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"EnableReplication\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"TriggerReversedRegister\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"SetupAgent\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"TriggerRegister\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"CollectSupportBundle\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"Failback\\\\\\\\\\\\\\":true}\\\\\\"\\",\\n  \\"TaskId\\": \\"t-0004ka624vrza82g46ne\\",\\n  \\"RecoveryUseSsd\\": false,\\n  \\"Disks\\": \\"[{\\\\\\\\\\\\\\"id\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"boot\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"size\\\\\\\\\\\\\\":500363689984}]\\",\\n  \\"RecoveryEssdPerformanceLevel\\": \\"PL1\\",\\n  \\"LatestRecoveryPointTime\\": \\"1661419052\\"\\n}","type":"json"}]',
      'title' => '查询受保护服务器',
      'summary' => '查询受保护服务器。',
    ),
    'DescribeServers' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SitePairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '站点对ID',
            'type' => 'string',
            'required' => false,
            'example' => 's-0007rvzart0u501t4e5r',
          ),
        ),
        1 => 
        array (
          'name' => 'ServerIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '受保护服务器ID列表',
            'type' => 'string',
            'required' => false,
            'example' => '"[\\"sr-0005qxusucbi38lqfc2q\\",\\"sr-0005qxusucbi38lqfc2r\\"]"',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页参数：当前页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页参数：每页显示条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '10',
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
                'description' => '请求id。',
                'type' => 'string',
                'example' => 'D2B255D3-9736-5169-B488-C735A8BBCD79',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Code' => 
              array (
                'description' => '状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时每页的行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Servers' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'server' => 
                  array (
                    'description' => '受保护服务器信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '受保护服务器信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RecoveredInstanceName' => 
                        array (
                          'description' => '-',
                          'type' => 'string',
                          'example' => '-',
                        ),
                        'PrimarySiteId' => 
                        array (
                          'description' => '主站站点ID',
                          'type' => 'string',
                          'example' => 'si-000cm9ax8sgplgye2vc4',
                        ),
                        'ServerId' => 
                        array (
                          'description' => '受保护服务器ID',
                          'type' => 'string',
                          'example' => 'sr-000cm9ax8sh2381wa7kv',
                        ),
                        'RecoveryUseDhcp' => 
                        array (
                          'description' => '容灾切换的实例是否使用DHCP分配IP',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'RecoveryMemory' => 
                        array (
                          'description' => '容灾切换的实例内存大小',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '8589934592',
                        ),
                        'SourceGatewayVersion' => 
                        array (
                          'description' => '主站网关版本',
                          'type' => 'string',
                          'example' => '3.7.3',
                        ),
                        'IncrementalSyncStartTime' => 
                        array (
                          'description' => '增量复制开始时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1646049677',
                        ),
                        'CrashConsistentPointPolicy' => 
                        array (
                          'description' => '恢复点策略',
                          'type' => 'string',
                          'example' => '"{\\"scheduleType\\":\\"CRON\\",\\"expression\\":\\"0 0 */1 * * 0,1,2,3,4,5,6\\",\\"initialDelay\\":0}"',
                        ),
                        'RecoveryPostScriptContent' => 
                        array (
                          'description' => '容灾演练、容灾切换等机器启动后执行的脚本内容',
                          'type' => 'string',
                          'example' => '"echo \\"127.0.0.1 kubernetes.docker.internal\\" >> /etc/hosts"',
                        ),
                        'TestRecoveredInstanceId' => 
                        array (
                          'description' => '容灾演练的实例ID',
                          'type' => 'string',
                          'example' => 'i-bp13zgzv13am2n2z92lb',
                        ),
                        'ReplicationNetwork' => 
                        array (
                          'description' => '复影服务器所在的VSwitch ID',
                          'type' => 'string',
                          'example' => 'vsw-2zey7xe0m8dbqrks2jb9h',
                        ),
                        'RecoveryUseEssd' => 
                        array (
                          'description' => '容灾演练、容灾切换的实例是否使用ESSD',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'TargetGatewayVersion' => 
                        array (
                          'description' => '目的端网关版本',
                          'type' => 'string',
                          'example' => '3.7.3',
                        ),
                        'OsType' => 
                        array (
                          'description' => '操作系统类型',
                          'type' => 'string',
                          'example' => 'linux',
                        ),
                        'FullSyncStartTime' => 
                        array (
                          'description' => '全量复制开始时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'ReplicationUseSsd' => 
                        array (
                          'description' => '复影服务器是否使用SSD',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Rpo' => 
                        array (
                          'description' => '恢复时间目标，单位秒',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '30',
                        ),
                        'Consistent' => 
                        array (
                          'description' => '是否处于一致性状态',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'FullSyncTotalSize' => 
                        array (
                          'description' => '全量复制大小，单位B',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '150202220544',
                        ),
                        'RecoveredIpAddress' => 
                        array (
                          'description' => '容灾切换的实例IP',
                          'type' => 'string',
                          'example' => '192.168.2.2',
                        ),
                        'Alias' => 
                        array (
                          'description' => '别名',
                          'type' => 'string',
                          'example' => 'test-ecs',
                        ),
                        'Status' => 
                        array (
                          'description' => '状态',
                          'type' => 'string',
                          'example' => 'replicating',
                        ),
                        'TestFailoverStatus' => 
                        array (
                          'description' => '容灾演练状态',
                          'type' => 'string',
                          'example' => 'testFailovered',
                        ),
                        'ReplicationUseEssd' => 
                        array (
                          'description' => '复影服务器是否使用ESSD',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'OsDetail' => 
                        array (
                          'description' => '操作系统详情',
                          'type' => 'string',
                          'example' => 'CentOS;7.9.2009',
                        ),
                        'TestRecoveredIpAddress' => 
                        array (
                          'description' => '容灾演练的机器IP地址',
                          'type' => 'string',
                          'example' => '192.168.2.2',
                        ),
                        'SecondarySiteId' => 
                        array (
                          'description' => '从站站点ID',
                          'type' => 'string',
                          'example' => 'si-0007o5em8n6mhm8hee1l',
                        ),
                        'FullSyncProgress' => 
                        array (
                          'description' => '全量复制进度百分比',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'RecoveryInstanceType' => 
                        array (
                          'description' => '容灾切换的实例规格',
                          'type' => 'string',
                          'example' => 'ecs.r6.3xlarge',
                        ),
                        'IpAddress' => 
                        array (
                          'description' => '内网IP地址',
                          'type' => 'string',
                          'example' => '30.42.105.6',
                        ),
                        'RecoveryInstanceName' => 
                        array (
                          'description' => '容灾切换的实例名称',
                          'type' => 'string',
                          'example' => 'HDR_Recovery-sr-000c2rz7q8tak59pt6sw',
                        ),
                        'OriginalInstanceId' => 
                        array (
                          'description' => '源端实例ID',
                          'type' => 'string',
                          'example' => 'i-bp19axn91irnsi9204xg',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => 'ECS实例ID',
                          'type' => 'string',
                          'example' => 'i-bp19axn91irnsi9204xg',
                        ),
                        'RecoveredInstanceId' => 
                        array (
                          'description' => '容灾切换的实例ID',
                          'type' => 'string',
                          'example' => 'i-bp19axn91irnsi9204xg',
                        ),
                        'RecoveryReserveIp' => 
                        array (
                          'description' => '容灾切换实例保留源端IP',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Memory' => 
                        array (
                          'description' => '内存大小',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '4294967295',
                        ),
                        'RecoveryIpAddress' => 
                        array (
                          'description' => '容灾切换设置的手动IP地址',
                          'type' => 'string',
                          'example' => '192.168.2.2',
                        ),
                        'RecoveryNetwork' => 
                        array (
                          'description' => '复影服务器所在的虚拟交换机ID',
                          'type' => 'string',
                          'example' => 'vsw-uf63qu8ocjcly44tai570',
                        ),
                        'Errno' => 
                        array (
                          'description' => '出错原因',
                          'type' => 'string',
                          'example' => 'cdr.console.plugin.alicloud.agent_deploy_already_installed',
                        ),
                        'ReplicationUseOriginalInstance' => 
                        array (
                          'description' => '复影服务器使用源机，仅反向复制时有效',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Hostname' => 
                        array (
                          'description' => '主机名称',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'RecoveryCpu' => 
                        array (
                          'description' => '容灾切换的实例CPU核数',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'AgentPort' => 
                        array (
                          'description' => '客户端代理端口',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '9080',
                        ),
                        'ReplicationUseDhcp' => 
                        array (
                          'description' => '复影服务器使用DHCP分配IP',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'TestRecoveredInstanceName' => 
                        array (
                          'description' => '容灾演练的实例名称',
                          'type' => 'string',
                          'example' => 'HDR_Recovery-sr-000c2rz7q8tak59pt6sw',
                        ),
                        'AgentVersion' => 
                        array (
                          'description' => '客户端版本',
                          'type' => 'string',
                          'example' => '3.7.3',
                        ),
                        'FullSyncCurrentSize' => 
                        array (
                          'description' => '全量复制已完成大小，单位B',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1603469836288',
                        ),
                        'ReplicationInfrastructureType' => 
                        array (
                          'description' => '复制使用的基础设施类型',
                          'type' => 'string',
                          'example' => 'aliyun',
                        ),
                        'Cpu' => 
                        array (
                          'description' => 'CPU核数',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'RecoveryPostScriptType' => 
                        array (
                          'description' => '容灾切换的实例启动后执行的脚本类型',
                          'type' => 'string',
                          'example' => 'SHELL',
                        ),
                        'ReplicationInfrastructureId' => 
                        array (
                          'description' => '复制使用的基础设施ID',
                          'type' => 'string',
                          'example' => 'is-0004ka624vrxd9xsvs4f',
                        ),
                        'ConnectionStatus' => 
                        array (
                          'description' => '连接状态',
                          'type' => 'string',
                          'example' => 'connected',
                        ),
                        'Operations' => 
                        array (
                          'description' => '该实例支持与禁用的操作列表',
                          'type' => 'string',
                          'example' => '"{\\"Resynchronize\\":true,\\"TestFailover\\":true,\\"TestCleanup\\":true,\\"ChangeRecoveryPoint\\":true,\\"UnregisterServer\\":true,\\"ReversedEnableReplication\\":true,\\"ReversedDisableReplication\\":true,\\"DisableReplication\\":true,\\"CommitFailover\\":true,\\"RestartServer\\":true,\\"UpgradeServer\\":true,\\"ForcedFailover\\":true,\\"RepairReplication\\":true,\\"EnableReplication\\":true,\\"TriggerReversedRegister\\":true,\\"SetupAgent\\":true,\\"TriggerRegister\\":true,\\"CollectSupportBundle\\":true,\\"Failback\\":true}"',
                        ),
                        'TaskId' => 
                        array (
                          'description' => '正在执行的任务ID',
                          'type' => 'string',
                          'example' => 't-0007rvzart0v31c0x93q',
                        ),
                        'RecoveryUseSsd' => 
                        array (
                          'description' => '容灾切换的实例是否使用SSD',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Disks' => 
                        array (
                          'description' => '磁盘信息列表',
                          'type' => 'string',
                          'example' => '[{\\"id\\":\\"0\\",\\"boot\\":true,\\"size\\":500363689984}]',
                        ),
                        'RecoveryEssdPerformanceLevel' => 
                        array (
                          'description' => '演练、切换使用ESSD时选定的PL等级',
                          'type' => 'string',
                          'example' => 'PL3',
                        ),
                        'LatestRecoveryPointTime' => 
                        array (
                          'description' => '最近一次创建恢复点的时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1661419052',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D2B255D3-9736-5169-B488-C735A8BBCD79\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 2,\\n  \\"TotalCount\\": 10,\\n  \\"Servers\\": {\\n    \\"server\\": [\\n      {\\n        \\"RecoveredInstanceName\\": \\"-\\",\\n        \\"PrimarySiteId\\": \\"si-000cm9ax8sgplgye2vc4\\",\\n        \\"ServerId\\": \\"sr-000cm9ax8sh2381wa7kv\\",\\n        \\"RecoveryUseDhcp\\": true,\\n        \\"RecoveryMemory\\": 8589934592,\\n        \\"SourceGatewayVersion\\": \\"3.7.3\\",\\n        \\"IncrementalSyncStartTime\\": 1646049677,\\n        \\"CrashConsistentPointPolicy\\": \\"\\\\\\"{\\\\\\\\\\\\\\"scheduleType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"CRON\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"expression\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0 0 */1 * * 0,1,2,3,4,5,6\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"initialDelay\\\\\\\\\\\\\\":0}\\\\\\"\\",\\n        \\"RecoveryPostScriptContent\\": \\"\\\\\\"echo \\\\\\\\\\\\\\"127.0.0.1 kubernetes.docker.internal\\\\\\\\\\\\\\" >> /etc/hosts\\\\\\"\\",\\n        \\"TestRecoveredInstanceId\\": \\"i-bp13zgzv13am2n2z92lb\\",\\n        \\"ReplicationNetwork\\": \\"vsw-2zey7xe0m8dbqrks2jb9h\\",\\n        \\"RecoveryUseEssd\\": false,\\n        \\"TargetGatewayVersion\\": \\"3.7.3\\",\\n        \\"OsType\\": \\"linux\\",\\n        \\"FullSyncStartTime\\": 0,\\n        \\"ReplicationUseSsd\\": true,\\n        \\"Rpo\\": 30,\\n        \\"Consistent\\": true,\\n        \\"FullSyncTotalSize\\": 150202220544,\\n        \\"RecoveredIpAddress\\": \\"192.168.2.2\\",\\n        \\"Alias\\": \\"test-ecs\\",\\n        \\"Status\\": \\"replicating\\",\\n        \\"TestFailoverStatus\\": \\"testFailovered\\",\\n        \\"ReplicationUseEssd\\": false,\\n        \\"OsDetail\\": \\"CentOS;7.9.2009\\",\\n        \\"TestRecoveredIpAddress\\": \\"192.168.2.2\\",\\n        \\"SecondarySiteId\\": \\"si-0007o5em8n6mhm8hee1l\\",\\n        \\"FullSyncProgress\\": 0,\\n        \\"RecoveryInstanceType\\": \\"ecs.r6.3xlarge\\",\\n        \\"IpAddress\\": \\"30.42.105.6\\",\\n        \\"RecoveryInstanceName\\": \\"HDR_Recovery-sr-000c2rz7q8tak59pt6sw\\",\\n        \\"OriginalInstanceId\\": \\"i-bp19axn91irnsi9204xg\\",\\n        \\"InstanceId\\": \\"i-bp19axn91irnsi9204xg\\",\\n        \\"RecoveredInstanceId\\": \\"i-bp19axn91irnsi9204xg\\",\\n        \\"RecoveryReserveIp\\": true,\\n        \\"Memory\\": 4294967295,\\n        \\"RecoveryIpAddress\\": \\"192.168.2.2\\",\\n        \\"RecoveryNetwork\\": \\"vsw-uf63qu8ocjcly44tai570\\",\\n        \\"Errno\\": \\"cdr.console.plugin.alicloud.agent_deploy_already_installed\\",\\n        \\"ReplicationUseOriginalInstance\\": false,\\n        \\"Hostname\\": \\"test\\",\\n        \\"RecoveryCpu\\": 4,\\n        \\"AgentPort\\": 9080,\\n        \\"ReplicationUseDhcp\\": false,\\n        \\"TestRecoveredInstanceName\\": \\"HDR_Recovery-sr-000c2rz7q8tak59pt6sw\\",\\n        \\"AgentVersion\\": \\"3.7.3\\",\\n        \\"FullSyncCurrentSize\\": 1603469836288,\\n        \\"ReplicationInfrastructureType\\": \\"aliyun\\",\\n        \\"Cpu\\": 4,\\n        \\"RecoveryPostScriptType\\": \\"SHELL\\",\\n        \\"ReplicationInfrastructureId\\": \\"is-0004ka624vrxd9xsvs4f\\",\\n        \\"ConnectionStatus\\": \\"connected\\",\\n        \\"Operations\\": \\"\\\\\\"{\\\\\\\\\\\\\\"Resynchronize\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"TestFailover\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"TestCleanup\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"ChangeRecoveryPoint\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"UnregisterServer\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"ReversedEnableReplication\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"ReversedDisableReplication\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"DisableReplication\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"CommitFailover\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"RestartServer\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"UpgradeServer\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"ForcedFailover\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"RepairReplication\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"EnableReplication\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"TriggerReversedRegister\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"SetupAgent\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"TriggerRegister\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"CollectSupportBundle\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"Failback\\\\\\\\\\\\\\":true}\\\\\\"\\",\\n        \\"TaskId\\": \\"t-0007rvzart0v31c0x93q\\",\\n        \\"RecoveryUseSsd\\": true,\\n        \\"Disks\\": \\"[{\\\\\\\\\\\\\\"id\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"boot\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"size\\\\\\\\\\\\\\":500363689984}]\\",\\n        \\"RecoveryEssdPerformanceLevel\\": \\"PL3\\",\\n        \\"LatestRecoveryPointTime\\": 1661419052\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询受保护服务器',
      'summary' => '查询受保护服务器。',
    ),
    'DescribeSitePairs' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SitePairType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '站点对类型',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud2cloud',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数，默认值为10。',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '24CFBF97-EAD7-5D53-8D50-7F9E9D20C3A3',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Code' => 
              array (
                'description' => '状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数，默认值为10。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'TotalCount' => 
              array (
                'description' => '总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '28',
              ),
              'SitePairs' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'sitePair' => 
                  array (
                    'description' => '站点对信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '站点对信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SitePairType' => 
                        array (
                          'description' => '站点对类型',
                          'type' => 'string',
                          'example' => 'cloud2cloud',
                        ),
                        'LocalSiteName' => 
                        array (
                          'description' => '本地站点名称',
                          'type' => 'string',
                          'example' => 'local-site',
                        ),
                        'SecondarySiteId' => 
                        array (
                          'description' => '从站ID',
                          'type' => 'string',
                          'example' => 'si-0007nrkb2riv9yalg8s8',
                        ),
                        'PrimarySiteId' => 
                        array (
                          'description' => '主站ID',
                          'type' => 'string',
                          'example' => 'si-000as7kbj0cmlp3tt60m',
                        ),
                        'Version' => 
                        array (
                          'description' => '网关版本号',
                          'type' => 'string',
                          'example' => '3.7.3',
                        ),
                        'ServerCount' => 
                        array (
                          'description' => '受保护服务器数量',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '14',
                        ),
                        'CloudSiteName' => 
                        array (
                          'description' => '云上站点名称',
                          'type' => 'string',
                          'example' => 'cloud-site',
                        ),
                        'SitePairId' => 
                        array (
                          'description' => '站点对ID',
                          'type' => 'string',
                          'example' => 's-0003obqyc8f8lx2pf6m9',
                        ),
                        'SecondarySiteName' => 
                        array (
                          'description' => '从站名称',
                          'type' => 'string',
                          'example' => 'SH',
                        ),
                        'PrimarySiteName' => 
                        array (
                          'description' => '主站名称',
                          'type' => 'string',
                          'example' => 'HZ',
                        ),
                        'CreatedTime' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1636092147',
                        ),
                        'ReplicationStatistics' => 
                        array (
                          'description' => '复制状态统计',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Healthy' => 
                            array (
                              'description' => '处于健康状态（全量复制、实时复制）的受保护服务器数量。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '4',
                            ),
                            'Warning' => 
                            array (
                              'description' => '处于警告状态（RPO超过20分钟、暂时断开连接等）的受保护服务器数量',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '0',
                            ),
                            'Critical' => 
                            array (
                              'description' => '处于危险状态（复制失败等）的受保护服务器数量',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '0',
                            ),
                            'NotApplicable' => 
                            array (
                              'description' => '处于其他状态的受保护服务器数量',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '0',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"24CFBF97-EAD7-5D53-8D50-7F9E9D20C3A3\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 5,\\n  \\"TotalCount\\": 28,\\n  \\"SitePairs\\": {\\n    \\"sitePair\\": [\\n      {\\n        \\"SitePairType\\": \\"cloud2cloud\\",\\n        \\"LocalSiteName\\": \\"local-site\\",\\n        \\"SecondarySiteId\\": \\"si-0007nrkb2riv9yalg8s8\\",\\n        \\"PrimarySiteId\\": \\"si-000as7kbj0cmlp3tt60m\\",\\n        \\"Version\\": \\"3.7.3\\",\\n        \\"ServerCount\\": 14,\\n        \\"CloudSiteName\\": \\"cloud-site\\",\\n        \\"SitePairId\\": \\"s-0003obqyc8f8lx2pf6m9\\",\\n        \\"SecondarySiteName\\": \\"SH\\",\\n        \\"PrimarySiteName\\": \\"HZ\\",\\n        \\"CreatedTime\\": 1636092147,\\n        \\"ReplicationStatistics\\": {\\n          \\"Healthy\\": 4,\\n          \\"Warning\\": 0,\\n          \\"Critical\\": 0,\\n          \\"NotApplicable\\": 0\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询站点对信息',
      'summary' => '查询站点对信息。',
    ),
    'DescribeSite' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SiteId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '站点ID',
            'type' => 'string',
            'required' => true,
            'example' => 'si-000bzkmmlwh01trrecuw',
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
              'VpcId' => 
              array (
                'description' => '专有网络ID',
                'type' => 'string',
                'example' => 'vpc-bp1c3byhnaoj3u96sgk12',
              ),
              'Type' => 
              array (
                'description' => '站点类型',
                'type' => 'string',
                'example' => 'cloud',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B30A844D-E4CF-5382-A0D4-3DE76A8AD2AE',
              ),
              'SiteId' => 
              array (
                'description' => '站点ID',
                'type' => 'string',
                'example' => 'si-000bzkmmlwh01trrecuw',
              ),
              'UserSecurityGroupId' => 
              array (
                'description' => '用户安全组ID',
                'type' => 'string',
                'example' => 'sg-bp1466glrmpqfsq4zpjs',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'ZoneId' => 
              array (
                'description' => '可用区ID',
                'type' => 'string',
                'example' => 'cn-shanghai-l',
              ),
              'Code' => 
              array (
                'description' => '返回码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Name' => 
              array (
                'description' => '站点名称',
                'type' => 'string',
                'example' => 'SH',
              ),
              'RegionId' => 
              array (
                'description' => '站点所在的地域ID',
                'type' => 'string',
                'example' => 'cn-shanghai',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"VpcId\\": \\"vpc-bp1c3byhnaoj3u96sgk12\\",\\n  \\"Type\\": \\"cloud\\",\\n  \\"RequestId\\": \\"B30A844D-E4CF-5382-A0D4-3DE76A8AD2AE\\",\\n  \\"SiteId\\": \\"si-000bzkmmlwh01trrecuw\\",\\n  \\"UserSecurityGroupId\\": \\"sg-bp1466glrmpqfsq4zpjs\\",\\n  \\"Success\\": true,\\n  \\"ZoneId\\": \\"cn-shanghai-l\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Name\\": \\"SH\\",\\n  \\"RegionId\\": \\"cn-shanghai\\"\\n}","type":"json"}]',
      'title' => '查询站点信息',
      'summary' => '查询站点信息。',
    ),
    'DeleteSitePair' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SitePairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '站点对ID',
            'type' => 'string',
            'required' => true,
            'example' => 's-0003obqyc8f8a6u3bfw4',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '26365F46-16D9-5A56-B1EF-62D12C04E071',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"26365F46-16D9-5A56-B1EF-62D12C04E071\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '删除站点对',
      'summary' => '删除站点对。',
    ),
    'CreateSitePair' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SitePairType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '站点对类型',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'cloud2cloud' => 'cloud2cloud',
              'zone2zone' => 'zone2zone',
            ),
            'example' => 'cloud2cloud',
          ),
        ),
        1 => 
        array (
          'name' => 'PrimarySiteName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主站站点名称',
            'type' => 'string',
            'required' => false,
            'example' => '杭州可用区G',
          ),
        ),
        2 => 
        array (
          'name' => 'PrimarySiteType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主站站点类型',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud',
          ),
        ),
        3 => 
        array (
          'name' => 'PrimarySiteRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主站地域ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        4 => 
        array (
          'name' => 'PrimarySiteVpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主站VPC ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-uf6j3rao8wkr7hb4uopv2',
          ),
        ),
        5 => 
        array (
          'name' => 'PrimarySiteZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主站可用区ID，站点对类型为跨可用区容灾时有效',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-g',
          ),
        ),
        6 => 
        array (
          'name' => 'SecondarySiteName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '从站站点名称',
            'type' => 'string',
            'required' => false,
            'example' => '杭州可用区F',
          ),
        ),
        7 => 
        array (
          'name' => 'SecondarySiteType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '从站站点类型',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud',
          ),
        ),
        8 => 
        array (
          'name' => 'SecondarySiteRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '从站地域ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        9 => 
        array (
          'name' => 'SecondarySiteVpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '从站专有网络ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-bp1wu55gbyqd7gh3yu3ey',
          ),
        ),
        10 => 
        array (
          'name' => 'SecondarySiteZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '从站可用区ID，仅站点对类型为跨可用区容灾时有效',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-i',
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
                'example' => 'D14F1EB0-30B7-5A38-92E7-C2D11077D5CA',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Code' => 
              array (
                'description' => '返回码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'SitePairId' => 
              array (
                'description' => '站点对ID',
                'type' => 'string',
                'example' => 's-000bvn4shsuhq4cph5i8',
              ),
              'SecondarySiteId' => 
              array (
                'description' => '从站站点ID',
                'type' => 'string',
                'example' => 'si-000imvpcegvbh6i5kd2u',
              ),
              'PrimarySiteId' => 
              array (
                'description' => '主站站点ID',
                'type' => 'string',
                'example' => 'si-0001jntih0phb0i2w1ya',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D14F1EB0-30B7-5A38-92E7-C2D11077D5CA\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"SitePairId\\": \\"s-000bvn4shsuhq4cph5i8\\",\\n  \\"SecondarySiteId\\": \\"si-000imvpcegvbh6i5kd2u\\",\\n  \\"PrimarySiteId\\": \\"si-0001jntih0phb0i2w1ya\\"\\n}","type":"json"}]',
      'title' => '创建站点对',
      'summary' => '创建容灾站点对。',
    ),
    'DescribeSitePair' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SitePairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '站点对ID',
            'type' => 'string',
            'required' => true,
            'example' => 's-0007rvzart0c4cn130df',
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
              'SitePairType' => 
              array (
                'description' => '站点对类型',
                'type' => 'string',
                'example' => 'cloud2cloud',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'SecondarySiteId' => 
              array (
                'description' => '从站站点ID',
                'type' => 'string',
                'example' => 'si-0007rvzart0a2wpup82m',
              ),
              'PrimarySiteId' => 
              array (
                'description' => '主站站点ID',
                'type' => 'string',
                'example' => 'si-0001jntih0phb0i2w1ya',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '700F1972-16A2-5639-A937-D2A6D61557B8',
              ),
              'Version' => 
              array (
                'description' => '版本号',
                'type' => 'string',
                'example' => '3.7.3',
              ),
              'Code' => 
              array (
                'description' => '状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'SitePairId' => 
              array (
                'description' => '站点对ID',
                'type' => 'string',
                'example' => 's-000j6lhiuvdqakqa6k7l',
              ),
              'SecondarySiteName' => 
              array (
                'description' => '从站站点名称',
                'type' => 'string',
                'example' => '杭州D区',
              ),
              'CreatedTime' => 
              array (
                'description' => '创建时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1637293095',
              ),
              'PrimarySiteName' => 
              array (
                'description' => '主站站点名称',
                'type' => 'string',
                'example' => '杭州F区',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"SitePairType\\": \\"cloud2cloud\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"successful\\",\\n  \\"SecondarySiteId\\": \\"si-0007rvzart0a2wpup82m\\",\\n  \\"PrimarySiteId\\": \\"si-0001jntih0phb0i2w1ya\\",\\n  \\"RequestId\\": \\"700F1972-16A2-5639-A937-D2A6D61557B8\\",\\n  \\"Version\\": \\"3.7.3\\",\\n  \\"Code\\": \\"200\\",\\n  \\"SitePairId\\": \\"s-000j6lhiuvdqakqa6k7l\\",\\n  \\"SecondarySiteName\\": \\"杭州D区\\",\\n  \\"CreatedTime\\": 1637293095,\\n  \\"PrimarySiteName\\": \\"杭州F区\\"\\n}","type":"json"}]',
      'title' => '查询站点对信息',
      'summary' => '查询站点对信息。',
    ),
    'EnableReplication' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '受保护服务器ID',
            'description' => '受保护服务器ID',
            'type' => 'string',
            'required' => false,
            'example' => 'sr-0005qxusucbo6yomzb9x',
          ),
        ),
        1 => 
        array (
          'name' => 'ReplicationUseSsd',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '复影实例是否使用SSD云盘',
            'description' => '复影实例是否使用SSD云盘',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ReplicationUseEssd',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '复影实例是否使用ESSD云盘',
            'description' => '复影实例是否使用ESSD云盘',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ReplicationNetwork',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '复制网络VSwitch ID',
            'description' => '复制网络VSwitch ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1g0s2u3b2kbn46kiy53',
          ),
        ),
        4 => 
        array (
          'name' => 'RecoveryNetwork',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '恢复网络VSwitch ID',
            'description' => '恢复网络VSwitch ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1g0s2u3b2kbn46kiy53',
          ),
        ),
        5 => 
        array (
          'name' => 'CrashConsistentPointPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '恢复点策略',
            'description' => '恢复点策略',
            'type' => 'string',
            'required' => false,
            'example' => '{"scheduleType":"CRON","expression":"0 0 */1 * * 0,1,2,3,4,5,6","initialDelay":0}',
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
              'Code' => 
              array (
                'description' => '接口状态或POP错误码。取值说明如下：2xx：成功。                                 3xx：重定向。                                 4xx：请求错误。                                 5xx：服务器错误。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功，则返回success',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '接口请求唯一标识符。',
                'type' => 'string',
                'example' => 'E50FE4A6-C876-5D6F-8A09-93442308AA7B',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"E50FE4A6-C876-5D6F-8A09-93442308AA7B\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '启动复制',
      'summary' => '启动复制。',
    ),
    'DisableReplication' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '受保护服务器ID',
            'description' => '受保护服务器ID',
            'type' => 'string',
            'required' => false,
            'example' => 'sr-000cvyfewfi6fzi9zoql',
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
              'Code' => 
              array (
                'description' => '接口状态或POP错误码。取值说明如下：2xx：成功。                                 3xx：重定向。                                 4xx：请求错误。                                 5xx：服务器错误。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'B7F69F73-51C4-5D3F-B2BE-E1BD99022C15',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"B7F69F73-51C4-5D3F-B2BE-E1BD99022C15\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '停止复制',
      'summary' => '停止复制。',
    ),
    'TestFailover' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '受保护服务器ID',
            'description' => '受保护服务器ID',
            'type' => 'string',
            'required' => false,
            'example' => 'sr-000cvyfewfi7eudxml1a',
          ),
        ),
        1 => 
        array (
          'name' => 'RecoveryInstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '演练的实例名称',
            'description' => '演练的实例名称',
            'type' => 'string',
            'required' => false,
            'example' => 'test-failover-instance',
          ),
        ),
        2 => 
        array (
          'name' => 'RecoveryCpu',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '演练实例的CPU核数',
            'description' => '演练实例的CPU核数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
            'default' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'RecoveryMemory',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '演练实例的内存大小，单位MB',
            'description' => '演练实例的内存大小，单位MB',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '4294967296',
          ),
        ),
        4 => 
        array (
          'name' => 'RecoveryInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '演练的实例规格，未指定时按照指定的CPU核数、内存大小自动寻找可用规格',
            'description' => '演练的实例规格，未指定时按照指定的CPU核数、内存大小自动寻找可用规格',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs.c5.large  ',
            'default' => 'null',
          ),
        ),
        5 => 
        array (
          'name' => 'RecoveryUseSsd',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '演练实例是否使用SSD类型的云盘',
            'description' => '演练实例是否使用SSD类型的云盘',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'RecoveryUseEssd',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '演练实例是否使用ESSD类型的云盘',
            'description' => '演练实例是否使用ESSD类型的云盘',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'RecoveryNetwork',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '演练实例所在的VSwitch ID',
            'description' => '演练实例所在的VSwitch ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1g0s2u3b2kbn46kiy53',
          ),
        ),
        8 => 
        array (
          'name' => 'RecoveryReserveIp',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '演练实例是否保留源机的IP（需要演练所在的VSwitch包含相应网段）',
            'description' => '演练实例是否保留源机的IP（需要演练所在的VSwitch包含相应网段）',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'RecoveryUseDhcp',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '演练实例是否使用DHCP指定IP',
            'description' => '演练实例是否使用DHCP指定IP',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        10 => 
        array (
          'name' => 'RecoveryIpAddress',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '演练实例的IP',
            'description' => '演练实例的IP',
            'type' => 'string',
            'required' => false,
            'example' => '10.10.10.10',
          ),
        ),
        11 => 
        array (
          'name' => 'RecoveryPostScriptType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '演练实例启动后执行脚本类型，可选项：SHELL',
            'description' => '演练实例启动后执行脚本类型，可选项：SHELL',
            'type' => 'string',
            'required' => false,
            'example' => 'SHELL',
          ),
        ),
        12 => 
        array (
          'name' => 'RecoveryPostScriptContent',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '演练实例启动后执行脚本',
            'description' => '演练实例启动后执行脚本',
            'type' => 'string',
            'required' => false,
            'example' => 'echo \\"127.0.0.1 kubernetes.docker.internal\\" >> /etc/hosts',
          ),
        ),
        13 => 
        array (
          'name' => 'RecoveryPointId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '演练实例使用的恢复点ID',
            'description' => '演练实例使用的恢复点ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rp-0001cgurtbrvrkj2p2pp',
          ),
        ),
        14 => 
        array (
          'name' => 'RecoveryPointTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复点时间，若未指定恢复点ID时，根据恢复点时间查询可用恢复点。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1646046000',
          ),
        ),
        15 => 
        array (
          'name' => 'EipAddressId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '演练实例绑定的弹性公网IP ID',
            'description' => '演练实例绑定的弹性公网IP ID',
            'type' => 'string',
            'required' => false,
            'example' => 'eip-bp1nf283u9p060q4gim7m',
          ),
        ),
        16 => 
        array (
          'name' => 'RecoveryEssdPerformanceLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ESSD盘的PL等级，支持的PL等级按照最小的云盘大小进行判断',
            'type' => 'string',
            'required' => false,
            'example' => 'PL3',
            'default' => 'PL1',
            'enum' => 
            array (
              0 => 'PL0',
              1 => 'PL1',
              2 => 'PL2',
              3 => 'PL3',
            ),
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID，具有唯一性。',
                'type' => 'string',
                'example' => '6758891B-CF5A-5CA6-BF59-633573B91140',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 't-000h3k00ckeknbukn5a5',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"6758891B-CF5A-5CA6-BF59-633573B91140\\",\\n  \\"TaskId\\": \\"t-000h3k00ckeknbukn5a5\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '容灾演练',
      'summary' => '容灾演练。',
    ),
    'TestCleanup' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '受保护服务器ID',
            'description' => '受保护服务器ID',
            'type' => 'string',
            'required' => false,
            'example' => 'sr-000cvyfewfi6fzi9zoql',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '531E3DB9-3ED6-5F06-A09A-721F279CB64B',
              ),
              'TaskId' => 
              array (
                'description' => '任务id。',
                'type' => 'string',
                'example' => 't-000bzkmmlwh6tpzhitdz',
              ),
              'Success' => 
              array (
                'description' => '操作是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"531E3DB9-3ED6-5F06-A09A-721F279CB64B\\",\\n  \\"TaskId\\": \\"t-000bzkmmlwh6tpzhitdz\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '清理容灾演练环境',
      'summary' => '清理容灾演练环境。',
    ),
    'DescribeRecoveryPoints' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '受保护服务器ID',
            'type' => 'string',
            'required' => false,
            'example' => 'sr-0008fj9dbe1xzlg6805i',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间，从开始时间查询可用恢复点',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1633503912',
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
              'Code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回消息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8260C928-1A54-545A-A3F2-51E6327D28E6',
              ),
              'TotalCount' => 
              array (
                'description' => '可用恢复点的总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '15',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'RecoveryPoints' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'recoveryPoint' => 
                  array (
                    'description' => '恢复点信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '恢复点信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ApplicationConsistent' => 
                        array (
                          'description' => '恢复点是否满足应用一致性',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'RecoveryPointTime' => 
                        array (
                          'description' => '恢复点时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1637118000',
                        ),
                        'Disabled' => 
                        array (
                          'description' => '恢复点是否被禁用。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'RecoveryPointId' => 
                        array (
                          'description' => '恢复点ID',
                          'type' => 'string',
                          'example' => 'rp-0000syrdl2f8a7te4063',
                        ),
                        'Used' => 
                        array (
                          'description' => '恢复点是否已被使用',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'DisableReason' => 
                        array (
                          'description' => '恢复点被禁用的原因',
                          'type' => 'string',
                          'example' => 'inconsistent',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"8260C928-1A54-545A-A3F2-51E6327D28E6\\",\\n  \\"TotalCount\\": 15,\\n  \\"Success\\": true,\\n  \\"RecoveryPoints\\": {\\n    \\"recoveryPoint\\": [\\n      {\\n        \\"ApplicationConsistent\\": false,\\n        \\"RecoveryPointTime\\": 1637118000,\\n        \\"Disabled\\": false,\\n        \\"RecoveryPointId\\": \\"rp-0000syrdl2f8a7te4063\\",\\n        \\"Used\\": false,\\n        \\"DisableReason\\": \\"inconsistent\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询可用恢复点',
      'summary' => '查询可用恢复点。',
    ),
    'ChangeRecoveryPoint' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '受保护服务器ID',
            'type' => 'string',
            'required' => false,
            'example' => 'sr-000bak4sdet6gv8q0c2j',
          ),
        ),
        1 => 
        array (
          'name' => 'RecoveryInstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复的实例名称',
            'type' => 'string',
            'required' => false,
            'example' => 'HDR_Recovery-sr-000c9550g8gycc8oi4fb-cpr',
          ),
        ),
        2 => 
        array (
          'name' => 'RecoveryCpu',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复的实例CPU核数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '4',
          ),
        ),
        3 => 
        array (
          'name' => 'RecoveryMemory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复的实例内存大小',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '4294967296',
          ),
        ),
        4 => 
        array (
          'name' => 'RecoveryInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复的实例规格',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs.r6.3xlarge',
          ),
        ),
        5 => 
        array (
          'name' => 'RecoveryUseSsd',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复的实例是否使用SSD',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'RecoveryUseEssd',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复的实例是否使用ESSD',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'RecoveryNetwork',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复的实例所在的VSwitch ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-uf61v3bg6r790ir22jqv4',
          ),
        ),
        8 => 
        array (
          'name' => 'RecoveryReserveIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复的实例是否保留源机IP',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'RecoveryUseDhcp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复的实例是否使用DHCP分配IP',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        10 => 
        array (
          'name' => 'RecoveryIpAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复的实例手动指定IP',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.2.2',
          ),
        ),
        11 => 
        array (
          'name' => 'RecoveryPostScriptType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复的实例启动后执行的脚本类型',
            'type' => 'string',
            'required' => false,
            'example' => 'SHELL',
          ),
        ),
        12 => 
        array (
          'name' => 'RecoveryPostScriptContent',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复的实例启动后执行的脚本内容',
            'type' => 'string',
            'required' => false,
            'example' => 'echo \\"127.0.0.1 kubernetes.docker.internal\\" >> /etc/hosts',
          ),
        ),
        13 => 
        array (
          'name' => 'RecoveryPointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复点ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rp-0001625ljmig7ahibe0y',
          ),
        ),
        14 => 
        array (
          'name' => 'RecoveryPointTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复点时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1637002799',
          ),
        ),
        15 => 
        array (
          'name' => 'EipAddressId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复的实例绑定的弹性网卡ID',
            'type' => 'string',
            'required' => false,
            'example' => 'eip-2zelae2qye2ztjfj82f9z',
          ),
        ),
        16 => 
        array (
          'name' => 'RecoveryEssdPerformanceLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ESSD盘的PL等级，支持的PL等级按照最小的云盘大小进行判断',
            'type' => 'string',
            'required' => false,
            'example' => 'PL1',
            'default' => 'PL1',
            'enum' => 
            array (
              0 => 'PL0',
              1 => 'PL1',
              2 => 'PL2',
              3 => 'PL3',
            ),
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'BBCC4082-98DF-5804-96C6-0E74C37C5867',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 't-0007wl5r0hvxrj68rrbg',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"BBCC4082-98DF-5804-96C6-0E74C37C5867\\",\\n  \\"TaskId\\": \\"t-0007wl5r0hvxrj68rrbg\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '更换恢复点',
      'summary' => '更换恢复点。',
    ),
    'CommitFailover' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '受保护的服务器ID',
            'type' => 'string',
            'required' => false,
            'example' => 'sr-000bzkmmlwghq3soqry2',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '18603D03-FEA4-5FA8-878F-B03F11578F5F',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID',
                'type' => 'string',
                'example' => 't-0007wl5r0hvxrj68rrbg',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"18603D03-FEA4-5FA8-878F-B03F11578F5F\\",\\n  \\"TaskId\\": \\"t-0007wl5r0hvxrj68rrbg\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '确认故障切换',
      'summary' => '确认故障切换。',
    ),
    'ForcedFailover' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '受保护服务器ID',
            'type' => 'string',
            'required' => false,
            'example' => 'sr-000ih1rl47q6hksc910d',
          ),
        ),
        1 => 
        array (
          'name' => 'RecoveryInstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障切换的实例名称',
            'type' => 'string',
            'required' => false,
            'example' => 'HDR_Recovery-sr-000bzkmmlwghq3soqry2',
          ),
        ),
        2 => 
        array (
          'name' => 'RecoveryCpu',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障切换的实例CPU核数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '4',
          ),
        ),
        3 => 
        array (
          'name' => 'RecoveryMemory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障切换的实例内存大小',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '4294967296',
          ),
        ),
        4 => 
        array (
          'name' => 'RecoveryInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障切换的实例规格',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs.r5.3xlarge',
          ),
        ),
        5 => 
        array (
          'name' => 'RecoveryUseSsd',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障切换的实例云盘类型是否使用SSD',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'RecoveryUseEssd',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障切换的实例云盘类型是否使用ESSD',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'RecoveryNetwork',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障切换的实例所在的VSwitch ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1fh05y7ybq9kep6rtwu',
          ),
        ),
        8 => 
        array (
          'name' => 'RecoveryReserveIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障切换的实例是否保留源机IP',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'RecoveryUseDhcp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障切换的实例是否使用DHCP分配IP',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        10 => 
        array (
          'name' => 'RecoveryIpAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障切换的实例手动设置IP',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.2.2',
          ),
        ),
        11 => 
        array (
          'name' => 'RecoveryPostScriptType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障切换的实例启动后执行的脚本类型',
            'type' => 'string',
            'required' => false,
            'example' => 'SHELL',
          ),
        ),
        12 => 
        array (
          'name' => 'RecoveryPostScriptContent',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障切换的实例启动后执行的脚本内容',
            'type' => 'string',
            'required' => false,
            'example' => 'echo \\"127.0.0.1 kubernetes.docker.internal\\" >> /etc/hosts',
          ),
        ),
        13 => 
        array (
          'name' => 'RecoveryPointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复点ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rp-000184qxs690bth6jyqn',
          ),
        ),
        14 => 
        array (
          'name' => 'RecoveryPointTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复点时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1636526948',
          ),
        ),
        15 => 
        array (
          'name' => 'EipAddressId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障切换的实例绑定的弹性网卡ID',
            'type' => 'string',
            'required' => false,
            'example' => 'eip-bp1x7nua6eab8m4vsis9k',
          ),
        ),
        16 => 
        array (
          'name' => 'RecoveryEssdPerformanceLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ESSD盘的PL等级，支持的PL等级按照最小的云盘大小进行判断',
            'type' => 'string',
            'required' => false,
            'example' => 'PL2',
            'default' => 'PL1',
            'enum' => 
            array (
              0 => 'PL0',
              1 => 'PL1',
              2 => 'PL2',
              3 => 'PL3',
            ),
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '26DF0E81-08E2-5AE3-96AA-05F5F826261C',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 't-000ios55mggw4ifiy3nc',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"26DF0E81-08E2-5AE3-96AA-05F5F826261C\\",\\n  \\"TaskId\\": \\"t-000ios55mggw4ifiy3nc\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '故障切换',
      'summary' => '故障切换。',
    ),
    'TriggerReversedRegister' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '受保护服务器ID',
            'type' => 'string',
            'required' => false,
            'example' => 'sr-0007rvzart0bneyhl4q1',
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
              'Code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1D39F0BE-B3F9-5AA9-AD49-BE8CD7B4BF7B',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 't-000fzufp79idzl6bniso',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"1D39F0BE-B3F9-5AA9-AD49-BE8CD7B4BF7B\\",\\n  \\"TaskId\\": \\"t-000fzufp79idzl6bniso\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '反向注册',
      'summary' => '反向注册，将完成故障切换的实例从目的端站点反向注册到源端站点，为后续启动反向复制实现故障恢复做准备。',
    ),
    'DescribeInfrastructures' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SiteId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '站点ID',
            'type' => 'string',
            'required' => false,
            'example' => 'si-0005btelnqjwguycypba',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页参数：当前页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '10',
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
                'example' => '32AC7E7F-5484-548D-8D3F-905238B75080',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Code' => 
              array (
                'description' => '状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '分页参数：当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Infrastructures' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'infrastructure' => 
                  array (
                    'description' => '基础设施信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '基础设施信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '基础设施类型',
                          'type' => 'string',
                          'example' => 'aliyun',
                        ),
                        'Status' => 
                        array (
                          'description' => '状态',
                          'type' => 'string',
                          'example' => 'connected',
                        ),
                        'IpAddress' => 
                        array (
                          'description' => 'IP地址',
                          'type' => 'string',
                          'example' => '172.18.122.66',
                        ),
                        'InfrastructureId' => 
                        array (
                          'description' => '基础设施ID',
                          'type' => 'string',
                          'example' => 'is-0005qxusucbig0c42dlo',
                        ),
                        'Errno' => 
                        array (
                          'description' => '状态异常原因',
                          'type' => 'string',
                          'example' => 'cdr.console.plugin.failed_to_connect',
                        ),
                        'Name' => 
                        array (
                          'description' => '基础设施名称',
                          'type' => 'string',
                          'example' => 'si-0006w0mxd3w8jiifu77l-infrastructure1',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"32AC7E7F-5484-548D-8D3F-905238B75080\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 2,\\n  \\"TotalCount\\": 1,\\n  \\"Infrastructures\\": {\\n    \\"infrastructure\\": [\\n      {\\n        \\"Type\\": \\"aliyun\\",\\n        \\"Status\\": \\"connected\\",\\n        \\"IpAddress\\": \\"172.18.122.66\\",\\n        \\"InfrastructureId\\": \\"is-0005qxusucbig0c42dlo\\",\\n        \\"Errno\\": \\"cdr.console.plugin.failed_to_connect\\",\\n        \\"Name\\": \\"si-0006w0mxd3w8jiifu77l-infrastructure1\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询站点基础设施',
      'summary' => '查询站点基础设施信息，混合云容灾服务支持IDC上云容灾、跨区域容灾、跨可用区容灾，不同场景下站点使用的基础设施不同，例如IDC上云容灾的源端站点可能使用物理机、VCenter作为基础设施；跨区域容灾与跨可用区容灾目前主要使用阿里云作为基础设施。',
    ),
    'ReversedEnableReplication' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '受保护服务器ID',
            'type' => 'string',
            'required' => false,
            'example' => 'sr-000cm9ax8sh2381wa7kv',
          ),
        ),
        1 => 
        array (
          'name' => 'ReplicationUseOriginalInstance',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '反向复制使用源机',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ReplicationInfrastructureId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标站点基础设施ID',
            'type' => 'string',
            'required' => false,
            'example' => 'is-000bzkmmlwgibbduuoff',
          ),
        ),
        3 => 
        array (
          'name' => 'ReplicationLocation',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '-',
            'type' => 'string',
            'required' => false,
            'example' => '-',
          ),
        ),
        4 => 
        array (
          'name' => 'ReplicationComputeResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '-',
            'type' => 'string',
            'required' => false,
            'example' => '-',
          ),
        ),
        5 => 
        array (
          'name' => 'ReplicationDatastore',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '-',
            'type' => 'string',
            'required' => false,
            'example' => '-',
          ),
        ),
        6 => 
        array (
          'name' => 'ReplicationNetwork',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '反向复制的复制网络VSwitch ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1ii4x07tey6sisg4blp',
          ),
        ),
        7 => 
        array (
          'name' => 'ReplicationUseDhcp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '-',
            'type' => 'boolean',
            'required' => false,
            'example' => '-',
          ),
        ),
        8 => 
        array (
          'name' => 'ReplicationIpAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '-',
            'type' => 'string',
            'required' => false,
            'example' => '-',
          ),
        ),
        9 => 
        array (
          'name' => 'ReplicationNetMask',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '-',
            'type' => 'string',
            'required' => false,
            'example' => '-',
          ),
        ),
        10 => 
        array (
          'name' => 'ReplicationDns',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '-',
            'type' => 'string',
            'required' => false,
            'example' => '-',
          ),
        ),
        11 => 
        array (
          'name' => 'ReplicationGateway',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '-',
            'type' => 'string',
            'required' => false,
            'example' => '-',
          ),
        ),
        12 => 
        array (
          'name' => 'RecoveryNetwork',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '反向复制的恢复网络VSwitch ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1xmea0mkjtxqoubk7q8',
          ),
        ),
        13 => 
        array (
          'name' => 'CrashConsistentPointPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '-',
            'type' => 'string',
            'required' => false,
            'example' => '-',
          ),
        ),
        14 => 
        array (
          'name' => 'AppConsistentPointPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '-',
            'type' => 'string',
            'required' => false,
            'example' => '-',
          ),
        ),
        15 => 
        array (
          'name' => 'ShadowInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '-',
            'type' => 'string',
            'required' => false,
            'example' => '-',
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
              'Code' => 
              array (
                'description' => '接口返回码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D5CF3A51-1F39-5B16-AC0C-AD9B632D100D',
              ),
              'TaskId' => 
              array (
                'description' => '任务id。',
                'type' => 'string',
                'example' => 't-0004ka624vrxwublmqw6',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"D5CF3A51-1F39-5B16-AC0C-AD9B632D100D\\",\\n  \\"TaskId\\": \\"t-0004ka624vrxwublmqw6\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '启动反向复制',
      'summary' => '启动反向复制。',
    ),
    'ReversedDisableReplication' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '受保护服务器ID',
            'type' => 'string',
            'required' => false,
            'example' => 'sr-000cm9ax8sh2i6pc16u9',
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
              'Code' => 
              array (
                'description' => '接口返回码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5904D638-152A-5F1F-8652-E535EABF3ABA',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"5904D638-152A-5F1F-8652-E535EABF3ABA\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '停止反向复制',
      'summary' => '停止反向复制。',
    ),
    'Failback' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '受保护服务器ID',
            'type' => 'string',
            'required' => false,
            'example' => 'sr-000bzkmmlwghj95tnx15',
          ),
        ),
        1 => 
        array (
          'name' => 'RecoveryInfrastructureId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复站点基础设施ID',
            'type' => 'string',
            'required' => false,
            'example' => 'is-0007rvzart0rz2byr2x0',
          ),
        ),
        2 => 
        array (
          'name' => 'RecoveryInstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '容灾恢复的实例名称',
            'type' => 'string',
            'required' => false,
            'example' => 'HDR_Recovery-sr-0007rvzart0rz2bv9fzm',
          ),
        ),
        3 => 
        array (
          'name' => 'RecoveryCpu',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '容灾恢复的实例CPU核数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '4',
          ),
        ),
        4 => 
        array (
          'name' => 'RecoveryMemory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '容灾恢复的实例内存大小，单位MB',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '4294967296',
          ),
        ),
        5 => 
        array (
          'name' => 'RecoveryInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '容灾恢复的实例规格，若未指定，将根据CPU核数和内存大小自动寻找可用的实例规格',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs.c5.2xlarge',
          ),
        ),
        6 => 
        array (
          'name' => 'RecoveryNetwork',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障恢复的实例所在的VSwitch ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1xmea0mkjtxqoubk7q8',
          ),
        ),
        7 => 
        array (
          'name' => 'RecoveryReserveIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障恢复的实例保留原有IP',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        8 => 
        array (
          'name' => 'RecoveryUseDhcp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障恢复的实例使用DHCP分配IP',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'RecoveryIpAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障恢复的实例手动设置IP',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.2.2',
          ),
        ),
        10 => 
        array (
          'name' => 'RecoveryPostScriptType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障恢复的实例启动后执行的脚本类型',
            'type' => 'string',
            'required' => false,
            'example' => 'SHELL',
          ),
        ),
        11 => 
        array (
          'name' => 'RecoveryPostScriptContent',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障恢复的实例启动后执行的脚本内容',
            'type' => 'string',
            'required' => false,
            'example' => '"echo \\"127.0.0.1 kubernetes.docker.internal\\" >> /etc/hosts"',
          ),
        ),
        12 => 
        array (
          'name' => 'RecoveryPointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复点ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rp-0001625ljmig7ahibe0y',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '56CF7F68-C07B-5BE2-BE82-09D8E9719076',
              ),
              'TaskId' => 
              array (
                'description' => '任务id。',
                'type' => 'string',
                'example' => 't-0004ka624vrza82g46ne',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"56CF7F68-C07B-5BE2-BE82-09D8E9719076\\",\\n  \\"TaskId\\": \\"t-0004ka624vrza82g46ne\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '故障恢复',
      'summary' => '故障恢复。',
    ),
    'CreateRecoveryPlan' => 
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SitePairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '站点对ID。',
            'type' => 'string',
            'required' => false,
            'example' => 's-xxxxxxxxxxxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复计划名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test1',
          ),
        ),
        2 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复计划的方向，支持**forward**。',
            'type' => 'string',
            'required' => false,
            'example' => 'forward',
          ),
        ),
        3 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复计划详情。',
            'type' => 'string',
            'required' => false,
            'example' => '{
    "groups": [
        {
            "name": "Group-1",
            "id": "Group-1",
            "servers": [
                {
                    "name": "sr-xxxxxxxxxxxxxxxxxx",
                    "serverId": "sr-xxxxxxxxxxxxxxxxxx",
                    "testFailoverAction": {
                        "eipAddressId": "",
                        "recoveryPostScriptContent": "",
                        "recoveryPostScriptType": "POWERSHELL",
                        "recoveryInstanceName": "HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-tfo",
                        "recoveryCpu": 2,
                        "recoveryMemory": 4294967296,
                        "recoveryUseEssd": false,
                        "recoveryUseSsd": false,
                        "recoveryReserveIp": false,
                        "recoveryUseDhcp": true,
                        "recoveryIpAddress": "",
                        "recoveryNetwork": "vsw-xxxxxxxxxxxxxxxxxx"
                    },
                    "testCleanupAction": {},
                    "changeRecoveryPointAction": {
                        "eipAddressId": "",
                        "recoveryPostScriptContent": "",
                        "recoveryPostScriptType": "POWERSHELL",
                        "recoveryInstanceName": "HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-cpr",
                        "recoveryCpu": 2,
                        "recoveryMemory": 4294967296,
                        "recoveryUseEssd": false,
                        "recoveryUseSsd": false,
                        "recoveryReserveIp": false,
                        "recoveryUseDhcp": true,
                        "recoveryIpAddress": "",
                        "recoveryNetwork": "vsw-xxxxxxxxxxxxxxxxxx"
                    },
                    "forcedFailoverAction": {
                        "eipAddressId": "",
                        "recoveryPostScriptContent": "",
                        "recoveryPostScriptType": "POWERSHELL",
                        "recoveryInstanceName": "HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-ffo",
                        "recoveryCpu": 2,
                        "recoveryMemory": 4294967296,
                        "recoveryUseEssd": false,
                        "recoveryUseSsd": false,
                        "recoveryReserveIp": false,
                        "recoveryUseDhcp": true,
                        "recoveryIpAddress": "",
                        "recoveryNetwork": "vsw-xxxxxxxxxxxxxxxxxx"
                    }
                }
            ]
        }
    ]
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '返回码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FEC3D491-15BB-5C8F-902E-773794FF1B29',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 't-00055g8sxr0ys0g99n83',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"FEC3D491-15BB-5C8F-902E-773794FF1B29\\",\\n  \\"TaskId\\": \\"t-00055g8sxr0ys0g99n83\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '创建恢复计划',
      'summary' => '创建恢复计划。',
    ),
    'DeleteRecoveryPlan' => 
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RecoveryPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复计划ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rp-xxxxxxxxxxxxxxxx',
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
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '36C9E5CF-D575-5074-9A3E-79251448D708',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 't-0006ezqwy1swxqgcrfvx',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"36C9E5CF-D575-5074-9A3E-79251448D708\\",\\n  \\"TaskId\\": \\"t-0006ezqwy1swxqgcrfvx\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '删除恢复计划',
      'summary' => '根据恢复计划ID删除指定的恢复计划。',
    ),
    'DescribeRecoveryPlan' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RecoveryPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复计划ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rp-xxxxxxxxxxxxxxxxxx',
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
              'Status' => 
              array (
                'description' => '恢复计划状态。其中，

- **creating**：创建中
- **updating**：更新中
- **deleting**：删除中
- **failed**：失败
- **init**：已初始化
- **running**：执行中',
                'type' => 'string',
                'example' => 'init',
              ),
              'Direction' => 
              array (
                'description' => '恢复计划的方向，支持**forward**。',
                'type' => 'string',
                'example' => 'forward',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6F3884EC-AECB-52EF-AFE3-BC13A9688DEB',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Code' => 
              array (
                'description' => '返回码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Name' => 
              array (
                'description' => '恢复计划名称。',
                'type' => 'string',
                'example' => 'test',
              ),
              'Content' => 
              array (
                'description' => '恢复计划详情。',
                'type' => 'string',
                'example' => '{
    "groups": [
        {
            "name": "Group-1",
            "id": "Group-1",
            "servers": [
                {
                    "name": "sr-xxxxxxxxxxxxxxxxxx",
                    "serverId": "sr-xxxxxxxxxxxxxxxxxx",
                    "testFailoverAction": {
                        "eipAddressId": "",
                        "recoveryPostScriptContent": "",
                        "recoveryPostScriptType": "POWERSHELL",
                        "recoveryInstanceName": "HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-tfo",
                        "recoveryCpu": 2,
                        "recoveryMemory": 4294967296,
                        "recoveryUseEssd": false,
                        "recoveryUseSsd": false,
                        "recoveryReserveIp": false,
                        "recoveryUseDhcp": true,
                        "recoveryIpAddress": "",
                        "recoveryNetwork": "vsw-xxxxxxxxxxxxxxxxxx"
                    },
                    "testCleanupAction": {},
                    "changeRecoveryPointAction": {
                        "eipAddressId": "",
                        "recoveryPostScriptContent": "",
                        "recoveryPostScriptType": "POWERSHELL",
                        "recoveryInstanceName": "HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-cpr",
                        "recoveryCpu": 2,
                        "recoveryMemory": 4294967296,
                        "recoveryUseEssd": false,
                        "recoveryUseSsd": false,
                        "recoveryReserveIp": false,
                        "recoveryUseDhcp": true,
                        "recoveryIpAddress": "",
                        "recoveryNetwork": "vsw-xxxxxxxxxxxxxxxxxx"
                    },
                    "forcedFailoverAction": {
                        "eipAddressId": "",
                        "recoveryPostScriptContent": "",
                        "recoveryPostScriptType": "POWERSHELL",
                        "recoveryInstanceName": "HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-ffo",
                        "recoveryCpu": 2,
                        "recoveryMemory": 4294967296,
                        "recoveryUseEssd": false,
                        "recoveryUseSsd": false,
                        "recoveryReserveIp": false,
                        "recoveryUseDhcp": true,
                        "recoveryIpAddress": "",
                        "recoveryNetwork": "vsw-xxxxxxxxxxxxxxxxxx"
                    }
                }
            ]
        }
    ]
}',
              ),
              'RecoveryPlanId' => 
              array (
                'description' => '恢复计划ID。',
                'type' => 'string',
                'example' => 'rp-xxxxxxxxxxxxxxxxxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"init\\",\\n  \\"Direction\\": \\"forward\\",\\n  \\"RequestId\\": \\"6F3884EC-AECB-52EF-AFE3-BC13A9688DEB\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Name\\": \\"test\\",\\n  \\"Content\\": \\"{\\\\n    \\\\\\"groups\\\\\\": [\\\\n        {\\\\n            \\\\\\"name\\\\\\": \\\\\\"Group-1\\\\\\",\\\\n            \\\\\\"id\\\\\\": \\\\\\"Group-1\\\\\\",\\\\n            \\\\\\"servers\\\\\\": [\\\\n                {\\\\n                    \\\\\\"name\\\\\\": \\\\\\"sr-xxxxxxxxxxxxxxxxxx\\\\\\",\\\\n                    \\\\\\"serverId\\\\\\": \\\\\\"sr-xxxxxxxxxxxxxxxxxx\\\\\\",\\\\n                    \\\\\\"testFailoverAction\\\\\\": {\\\\n                        \\\\\\"eipAddressId\\\\\\": \\\\\\"\\\\\\",\\\\n                        \\\\\\"recoveryPostScriptContent\\\\\\": \\\\\\"\\\\\\",\\\\n                        \\\\\\"recoveryPostScriptType\\\\\\": \\\\\\"POWERSHELL\\\\\\",\\\\n                        \\\\\\"recoveryInstanceName\\\\\\": \\\\\\"HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-tfo\\\\\\",\\\\n                        \\\\\\"recoveryCpu\\\\\\": 2,\\\\n                        \\\\\\"recoveryMemory\\\\\\": 4294967296,\\\\n                        \\\\\\"recoveryUseEssd\\\\\\": false,\\\\n                        \\\\\\"recoveryUseSsd\\\\\\": false,\\\\n                        \\\\\\"recoveryReserveIp\\\\\\": false,\\\\n                        \\\\\\"recoveryUseDhcp\\\\\\": true,\\\\n                        \\\\\\"recoveryIpAddress\\\\\\": \\\\\\"\\\\\\",\\\\n                        \\\\\\"recoveryNetwork\\\\\\": \\\\\\"vsw-xxxxxxxxxxxxxxxxxx\\\\\\"\\\\n                    },\\\\n                    \\\\\\"testCleanupAction\\\\\\": {},\\\\n                    \\\\\\"changeRecoveryPointAction\\\\\\": {\\\\n                        \\\\\\"eipAddressId\\\\\\": \\\\\\"\\\\\\",\\\\n                        \\\\\\"recoveryPostScriptContent\\\\\\": \\\\\\"\\\\\\",\\\\n                        \\\\\\"recoveryPostScriptType\\\\\\": \\\\\\"POWERSHELL\\\\\\",\\\\n                        \\\\\\"recoveryInstanceName\\\\\\": \\\\\\"HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-cpr\\\\\\",\\\\n                        \\\\\\"recoveryCpu\\\\\\": 2,\\\\n                        \\\\\\"recoveryMemory\\\\\\": 4294967296,\\\\n                        \\\\\\"recoveryUseEssd\\\\\\": false,\\\\n                        \\\\\\"recoveryUseSsd\\\\\\": false,\\\\n                        \\\\\\"recoveryReserveIp\\\\\\": false,\\\\n                        \\\\\\"recoveryUseDhcp\\\\\\": true,\\\\n                        \\\\\\"recoveryIpAddress\\\\\\": \\\\\\"\\\\\\",\\\\n                        \\\\\\"recoveryNetwork\\\\\\": \\\\\\"vsw-xxxxxxxxxxxxxxxxxx\\\\\\"\\\\n                    },\\\\n                    \\\\\\"forcedFailoverAction\\\\\\": {\\\\n                        \\\\\\"eipAddressId\\\\\\": \\\\\\"\\\\\\",\\\\n                        \\\\\\"recoveryPostScriptContent\\\\\\": \\\\\\"\\\\\\",\\\\n                        \\\\\\"recoveryPostScriptType\\\\\\": \\\\\\"POWERSHELL\\\\\\",\\\\n                        \\\\\\"recoveryInstanceName\\\\\\": \\\\\\"HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-ffo\\\\\\",\\\\n                        \\\\\\"recoveryCpu\\\\\\": 2,\\\\n                        \\\\\\"recoveryMemory\\\\\\": 4294967296,\\\\n                        \\\\\\"recoveryUseEssd\\\\\\": false,\\\\n                        \\\\\\"recoveryUseSsd\\\\\\": false,\\\\n                        \\\\\\"recoveryReserveIp\\\\\\": false,\\\\n                        \\\\\\"recoveryUseDhcp\\\\\\": true,\\\\n                        \\\\\\"recoveryIpAddress\\\\\\": \\\\\\"\\\\\\",\\\\n                        \\\\\\"recoveryNetwork\\\\\\": \\\\\\"vsw-xxxxxxxxxxxxxxxxxx\\\\\\"\\\\n                    }\\\\n                }\\\\n            ]\\\\n        }\\\\n    ]\\\\n}\\",\\n  \\"RecoveryPlanId\\": \\"rp-xxxxxxxxxxxxxxxxxx\\"\\n}","type":"json"}]',
      'title' => '查询恢复计划详情',
      'summary' => '查询恢复计划详情。',
    ),
    'DescribeRecoveryPlans' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SitePairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '站点对ID。',
            'type' => 'string',
            'required' => false,
            'example' => 's-0005qxusucbii5ab6wuj',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的页数，默认值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数，默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '10',
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
                'example' => 'F2812CD7-03E7-5774-9EE5-827D8398A670',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Code' => 
              array (
                'description' => '接口返回码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时的每页行数，最大值：100默认值：10',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '分页查询的当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '恢复计划数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RecoveryPlans' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'recoveryPlan' => 
                  array (
                    'description' => '恢复计划列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '恢复计划详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '恢复计划状态。其中，

- **creating**：创建中
- **updating**：更新中
- **deleting**：删除中
- **failed**：失败
- **init**：已初始化
- **running**：执行中',
                          'type' => 'string',
                          'example' => 'init',
                        ),
                        'Direction' => 
                        array (
                          'description' => '恢复计划的方向，支持**forward**。',
                          'type' => 'string',
                          'example' => 'forward',
                        ),
                        'Name' => 
                        array (
                          'description' => '恢复计划名称。',
                          'type' => 'string',
                          'example' => 'test-1',
                        ),
                        'RecoveryPlanId' => 
                        array (
                          'description' => '恢复计划ID。',
                          'type' => 'string',
                          'example' => 'rp-xxxxxxxxxxxxxxxxxx',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F2812CD7-03E7-5774-9EE5-827D8398A670\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"RecoveryPlans\\": {\\n    \\"recoveryPlan\\": [\\n      {\\n        \\"Status\\": \\"init\\",\\n        \\"Direction\\": \\"forward\\",\\n        \\"Name\\": \\"test-1\\",\\n        \\"RecoveryPlanId\\": \\"rp-xxxxxxxxxxxxxxxxxx\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询恢复计划列表',
      'summary' => '查询站点对中的恢复计划列表。',
    ),
    'UpdateRecoveryPlan' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RecoveryPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复计划ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rp-xxxxxxxxxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复计划名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-1',
          ),
        ),
        2 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复计划详情。',
            'type' => 'string',
            'required' => false,
            'example' => '{
    "groups": [
        {
            "name": "Group-1",
            "id": "Group-1",
            "servers": [
                {
                    "name": "sr-xxxxxxxxxxxxxxxxxx",
                    "serverId": "sr-xxxxxxxxxxxxxxxxxx",
                    "testFailoverAction": {
                        "eipAddressId": "",
                        "recoveryPostScriptContent": "",
                        "recoveryPostScriptType": "POWERSHELL",
                        "recoveryInstanceName": "HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-tfo",
                        "recoveryCpu": 2,
                        "recoveryMemory": 4294967296,
                        "recoveryUseEssd": false,
                        "recoveryUseSsd": false,
                        "recoveryReserveIp": false,
                        "recoveryUseDhcp": true,
                        "recoveryIpAddress": "",
                        "recoveryNetwork": "vsw-xxxxxxxxxxxxxxxxxx"
                    },
                    "testCleanupAction": {},
                    "changeRecoveryPointAction": {
                        "eipAddressId": "",
                        "recoveryPostScriptContent": "",
                        "recoveryPostScriptType": "POWERSHELL",
                        "recoveryInstanceName": "HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-cpr",
                        "recoveryCpu": 2,
                        "recoveryMemory": 4294967296,
                        "recoveryUseEssd": false,
                        "recoveryUseSsd": false,
                        "recoveryReserveIp": false,
                        "recoveryUseDhcp": true,
                        "recoveryIpAddress": "",
                        "recoveryNetwork": "vsw-xxxxxxxxxxxxxxxxxx"
                    },
                    "forcedFailoverAction": {
                        "eipAddressId": "",
                        "recoveryPostScriptContent": "",
                        "recoveryPostScriptType": "POWERSHELL",
                        "recoveryInstanceName": "HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-ffo",
                        "recoveryCpu": 2,
                        "recoveryMemory": 4294967296,
                        "recoveryUseEssd": false,
                        "recoveryUseSsd": false,
                        "recoveryReserveIp": false,
                        "recoveryUseDhcp": true,
                        "recoveryIpAddress": "",
                        "recoveryNetwork": "vsw-xxxxxxxxxxxxxxxxxx"
                    }
                }
            ]
        }
    ]
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '返回码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F1B86896-AB3E-5861-9E33-10486F056BB3',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 't-000ir69ra7neqp2p4qdv',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"F1B86896-AB3E-5861-9E33-10486F056BB3\\",\\n  \\"TaskId\\": \\"t-000ir69ra7neqp2p4qdv\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '编辑恢复计划',
      'summary' => '编辑恢复计划内容。',
    ),
    'DescribeAvailableInstanceTypes' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing-g',
          ),
        ),
        2 => 
        array (
          'name' => 'DiskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '磁盘类型',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'cloud_efficiency,cloud_essd,cloud_ssd' => 'cloud_efficiency,cloud_essd,cloud_ssd',
            ),
            'example' => 'cloud_efficiency',
          ),
        ),
        3 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'PostPaid' => 'PostPaid',
              'PrePaid' => 'PrePaid',
            ),
            'example' => 'PostPaid',
            'default' => 'PostPaid',
            'enum' => 
            array (
              0 => 'PostPaid',
              1 => 'PrePaid',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'Network',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络类型',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'classic' => 'classic',
              'vpc' => 'vpc',
            ),
            'example' => 'vpc',
            'default' => 'vpc',
          ),
        ),
        5 => 
        array (
          'name' => 'IoOptimized',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否属于IO优化型实例',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序依据',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'memory' => 'memory',
              'vcpu' => 'vcpu',
            ),
            'example' => 'vcpu',
            'default' => 'network',
          ),
        ),
        7 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'asc' => 'asc',
              'desc' => 'desc',
            ),
            'example' => 'asc',
            'default' => 'desc',
            'enum' => 
            array (
              0 => 'asc',
              1 => 'desc',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '-',
            'type' => 'string',
            'required' => false,
            'example' => '-',
          ),
        ),
        9 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页参数：当前页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '10',
          ),
        ),
        11 => 
        array (
          'name' => 'UserClient',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用用户角色查询可用规格（默认使用混合云容灾服务账号进行查询），部分白名单实例规格需要开启该开关才能查询到结果。',
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
                'example' => '1A7577E8-755A-5BF5-A6BA-B87286D0743F',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Code' => 
              array (
                'description' => '返回结果编码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '分页参数：当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的实例总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '11',
              ),
              'InstanceTypes' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'instanceType' => 
                  array (
                    'description' => '可用实例规格列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '可用实例规格',
                      'type' => 'string',
                      'example' => 'ecs.g5ne.xlarge',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1A7577E8-755A-5BF5-A6BA-B87286D0743F\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 11,\\n  \\"InstanceTypes\\": {\\n    \\"instanceType\\": [\\n      \\"ecs.g5ne.xlarge\\"\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询可用规格',
      'summary' => '查询（演练、故障切换、故障恢复等场景的）可用规格。',
    ),
    'DescribeTasks' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SitePairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '站点对ID',
            'type' => 'string',
            'required' => false,
            'example' => 's-000cm9ax8sh22u8r9gs0',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询的当前页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按创建时间或更新时间排序',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'updatedTime' => 'updatedTime',
              'createdTime' => 'createdTime',
            ),
            'example' => 'createdTime',
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
                'description' => '请求 ID',
                'type' => 'string',
                'example' => '86FFBA6E-D087-53E0-8593-4575925CB9DC',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'successful',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '分页查询的当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '53',
              ),
              'Tasks' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'task' => 
                  array (
                    'description' => '任务列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '任务列表',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Progress' => 
                        array (
                          'description' => '任务进度百分比。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '90',
                        ),
                        'UpdatedTime' => 
                        array (
                          'description' => '最后修改时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1637292645',
                        ),
                        'StatusCode' => 
                        array (
                          'description' => '任务状态',
                          'type' => 'string',
                          'example' => 'hdr.task.completed',
                        ),
                        'TargetName' => 
                        array (
                          'description' => '任务的目标',
                          'type' => 'string',
                          'example' => 'sr-000ftuch27gfuv8wvpyj',
                        ),
                        'Name' => 
                        array (
                          'description' => '任务名称',
                          'type' => 'string',
                          'example' => 'CommitFailoverTask',
                        ),
                        'CreatedTime' => 
                        array (
                          'description' => '任务创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1636092147',
                        ),
                        'TaskId' => 
                        array (
                          'description' => '任务ID。',
                          'type' => 'string',
                          'example' => 't-0007wl5r0hvxrp3c3x8z',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"86FFBA6E-D087-53E0-8593-4575925CB9DC\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 3,\\n  \\"TotalCount\\": 53,\\n  \\"Tasks\\": {\\n    \\"task\\": [\\n      {\\n        \\"Progress\\": 90,\\n        \\"UpdatedTime\\": 1637292645,\\n        \\"StatusCode\\": \\"hdr.task.completed\\",\\n        \\"TargetName\\": \\"sr-000ftuch27gfuv8wvpyj\\",\\n        \\"Name\\": \\"CommitFailoverTask\\",\\n        \\"CreatedTime\\": 1636092147,\\n        \\"TaskId\\": \\"t-0007wl5r0hvxrp3c3x8z\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询任务列表',
      'summary' => '查询任务列表。',
    ),
    'DescribeTask' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID',
            'type' => 'string',
            'required' => true,
            'example' => 't-0005qxusucbnl5efovq9',
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
              'Progress' => 
              array (
                'description' => '任务进度百分比。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8F8A2274-F2A5-5782-89A0-7FA442BFA16B',
              ),
              'UpdatedTime' => 
              array (
                'description' => '最后修改时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1636452195',
              ),
              'StatusCode' => 
              array (
                'description' => '任务状态',
                'type' => 'string',
                'example' => 'hdr.task.TestFailoverTask.waitStartFailover',
              ),
              'Code' => 
              array (
                'description' => '返回码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Name' => 
              array (
                'description' => '任务名称',
                'type' => 'string',
                'example' => 'hdr.task.name.TestFailoverTask',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID',
                'type' => 'string',
                'example' => 't-000bzkmmlwh57miq4mwh',
              ),
              'Content' => 
              array (
                'description' => '任务内容。',
                'type' => 'string',
                'example' => '-',
              ),
              'CreatedTime' => 
              array (
                'description' => '创建时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1646100927',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Progress\\": 100,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"8F8A2274-F2A5-5782-89A0-7FA442BFA16B\\",\\n  \\"UpdatedTime\\": 1636452195,\\n  \\"StatusCode\\": \\"hdr.task.TestFailoverTask.waitStartFailover\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Name\\": \\"hdr.task.name.TestFailoverTask\\",\\n  \\"TaskId\\": \\"t-000bzkmmlwh57miq4mwh\\",\\n  \\"Content\\": \\"-\\",\\n  \\"CreatedTime\\": 1646100927\\n}","type":"json"}]',
      'title' => '查询任务',
      'summary' => '查询任务。',
    ),
    'DescribeSitePairStatistics' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SitePairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '站点对ID',
            'type' => 'string',
            'required' => false,
            'example' => 's-0005qxusucbp8acutbrv',
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
              'Code' => 
              array (
                'description' => '状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => 'C0D9AAEE-8A21-5693-BCBD-8548914E4F3B',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'PrimarySiteGatewayInfo' => 
              array (
                'description' => '主站站点信息',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '网关状态',
                    'type' => 'string',
                    'example' => 'connected',
                  ),
                  'GatewayId' => 
                  array (
                    'description' => '网关ID',
                    'type' => 'string',
                    'example' => 'gw-000bzkmmlwgzptnzsdnh',
                  ),
                  'Version' => 
                  array (
                    'description' => '网关版本',
                    'type' => 'string',
                    'example' => '3.7.3',
                  ),
                  'HeartbeatedTime' => 
                  array (
                    'description' => '网关心跳时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1642562996',
                  ),
                ),
              ),
              'SecondarySiteGatewayInfo' => 
              array (
                'description' => '从站站点信息',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '网关状态',
                    'type' => 'string',
                    'example' => 'connected',
                  ),
                  'GatewayId' => 
                  array (
                    'description' => '网关ID',
                    'type' => 'string',
                    'example' => 'gw-0005qxusucbigzug9wpe',
                  ),
                  'Version' => 
                  array (
                    'description' => '网关版本',
                    'type' => 'string',
                    'example' => '3.7.3',
                  ),
                  'HeartbeatedTime' => 
                  array (
                    'description' => '网关心跳时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1642562996',
                  ),
                ),
              ),
              'PrimarySiteServers' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'server' => 
                  array (
                    'description' => '主站说保护服务器信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '主站说保护服务器信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AgentVersion' => 
                        array (
                          'description' => '客户端版本号',
                          'type' => 'string',
                          'example' => '3.7.3',
                        ),
                        'ConnectionStatus' => 
                        array (
                          'description' => '受保护服务器连接状态',
                          'type' => 'string',
                          'example' => 'connected',
                        ),
                        'IpAddress' => 
                        array (
                          'description' => '受保护服务器IP地址',
                          'type' => 'string',
                          'example' => '30.42.105.6',
                        ),
                        'ServerId' => 
                        array (
                          'description' => '受保护服务器ID',
                          'type' => 'string',
                          'example' => 'sr-000c2rz7q8tkc0g4xgao',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'SecondarySiteServers' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'server' => 
                  array (
                    'description' => '从站受保护服务器信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '从站受保护服务器信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AgentVersion' => 
                        array (
                          'description' => '客户端版本号',
                          'type' => 'string',
                          'example' => '3.7.3',
                        ),
                        'ConnectionStatus' => 
                        array (
                          'description' => '受保护服务器连接状态',
                          'type' => 'string',
                          'example' => 'connected',
                        ),
                        'IpAddress' => 
                        array (
                          'description' => '受保护服务器IP地址',
                          'type' => 'string',
                          'example' => '192.168.1.4',
                        ),
                        'ServerId' => 
                        array (
                          'description' => '受保护服务器ID',
                          'type' => 'string',
                          'example' => 'sr-000ikcyl8ucxtxl5f7pi',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"C0D9AAEE-8A21-5693-BCBD-8548914E4F3B\\",\\n  \\"Success\\": true,\\n  \\"PrimarySiteGatewayInfo\\": {\\n    \\"Status\\": \\"connected\\",\\n    \\"GatewayId\\": \\"gw-000bzkmmlwgzptnzsdnh\\",\\n    \\"Version\\": \\"3.7.3\\",\\n    \\"HeartbeatedTime\\": 1642562996\\n  },\\n  \\"SecondarySiteGatewayInfo\\": {\\n    \\"Status\\": \\"connected\\",\\n    \\"GatewayId\\": \\"gw-0005qxusucbigzug9wpe\\",\\n    \\"Version\\": \\"3.7.3\\",\\n    \\"HeartbeatedTime\\": 1642562996\\n  },\\n  \\"PrimarySiteServers\\": {\\n    \\"server\\": [\\n      {\\n        \\"AgentVersion\\": \\"3.7.3\\",\\n        \\"ConnectionStatus\\": \\"connected\\",\\n        \\"IpAddress\\": \\"30.42.105.6\\",\\n        \\"ServerId\\": \\"sr-000c2rz7q8tkc0g4xgao\\"\\n      }\\n    ]\\n  },\\n  \\"SecondarySiteServers\\": {\\n    \\"server\\": [\\n      {\\n        \\"AgentVersion\\": \\"3.7.3\\",\\n        \\"ConnectionStatus\\": \\"connected\\",\\n        \\"IpAddress\\": \\"192.168.1.4\\",\\n        \\"ServerId\\": \\"sr-000ikcyl8ucxtxl5f7pi\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询站点对统计信息',
      'summary' => '查询站点对统计信息。',
    ),
    'DescribeSummary' => 
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
      'systemTags' => 
      array (
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => 'DE78056B-E82A-52FD-BF5E-F737D8B63845',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'ServerCount' => 
              array (
                'description' => '受保护服务器总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'TotalSize' => 
              array (
                'description' => '站点对总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'DbServerCount' => 
              array (
                'description' => '-',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '-',
              ),
              'SiteCount' => 
              array (
                'description' => '站点数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '4',
              ),
              'ReplicationDetails' => 
              array (
                'description' => '复制状态统计信息',
                'type' => 'object',
                'properties' => 
                array (
                  'WarningServers' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'warningServer' => 
                      array (
                        'description' => '处于警告状态的受保护服务器信息',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '处于警告状态的受保护服务器信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ServerId' => 
                            array (
                              'description' => '受保护服务器ID',
                              'type' => 'string',
                              'example' => 'sr-000fzufp79icz33l4pak',
                            ),
                            'InstanceId' => 
                            array (
                              'description' => '受保护服务器实例ID',
                              'type' => 'string',
                              'example' => 'i-bp1a4374akk4527gbt9x',
                            ),
                            'SitePairId' => 
                            array (
                              'description' => '受保护服务器站点对ID',
                              'type' => 'string',
                              'example' => 's-000bzkmmlwh5riquud19',
                            ),
                            'Rpo' => 
                            array (
                              'description' => 'RPO',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '30',
                            ),
                            'Status' => 
                            array (
                              'description' => '状态',
                              'type' => 'string',
                              'example' => 'replicating',
                            ),
                            'ConnectionStatus' => 
                            array (
                              'description' => '连接状态',
                              'type' => 'string',
                              'example' => 'connected',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'CriticalServers' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'criticalServer' => 
                      array (
                        'description' => '处于危险状态的受保护服务器信息',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '处于危险状态的受保护服务器信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ServerId' => 
                            array (
                              'description' => '受保护服务器ID',
                              'type' => 'string',
                              'example' => 'sr-0005qxusucb0fqqdf4ba',
                            ),
                            'InstanceId' => 
                            array (
                              'description' => '受保护服务器实例ID',
                              'type' => 'string',
                              'example' => 'i-bp1a4374akk4527gbt9x',
                            ),
                            'SitePairId' => 
                            array (
                              'description' => '受保护服务器站点对ID',
                              'type' => 'string',
                              'example' => 's-0005qxusucbii3ba2uve',
                            ),
                            'Rpo' => 
                            array (
                              'description' => 'RPO',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '30',
                            ),
                            'Status' => 
                            array (
                              'description' => '状态',
                              'type' => 'string',
                              'example' => 'replicating',
                            ),
                            'ConnectionStatus' => 
                            array (
                              'description' => '连接状态',
                              'type' => 'string',
                              'example' => 'connected',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'NotApplicableServers' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'notApplicableServer' => 
                      array (
                        'description' => '处于非复制状态的受保护服务器信息',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '处于未复制状态的受保护服务器信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ServerId' => 
                            array (
                              'description' => '受保护服务器ID',
                              'type' => 'string',
                              'example' => 'sr-000iji78mxxc93yldd2e',
                            ),
                            'InstanceId' => 
                            array (
                              'description' => '受保护服务器实例ID',
                              'type' => 'string',
                              'example' => 'i-bp1a4374akk4527gbt9x',
                            ),
                            'SitePairId' => 
                            array (
                              'description' => '受保护服务器站点对ID',
                              'type' => 'string',
                              'example' => 's-000bzkmmlwh5riquud19',
                            ),
                            'Rpo' => 
                            array (
                              'description' => 'RPO',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '40',
                            ),
                            'Status' => 
                            array (
                              'description' => '状态',
                              'type' => 'string',
                              'example' => 'replicating',
                            ),
                            'ConnectionStatus' => 
                            array (
                              'description' => '连接状态',
                              'type' => 'string',
                              'example' => 'connected',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DE78056B-E82A-52FD-BF5E-F737D8B63845\\",\\n  \\"Success\\": true,\\n  \\"ServerCount\\": 2,\\n  \\"TotalSize\\": 10,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"DbServerCount\\": 0,\\n  \\"SiteCount\\": 4,\\n  \\"ReplicationDetails\\": {\\n    \\"WarningServers\\": {\\n      \\"warningServer\\": [\\n        {\\n          \\"ServerId\\": \\"sr-000fzufp79icz33l4pak\\",\\n          \\"InstanceId\\": \\"i-bp1a4374akk4527gbt9x\\",\\n          \\"SitePairId\\": \\"s-000bzkmmlwh5riquud19\\",\\n          \\"Rpo\\": 30,\\n          \\"Status\\": \\"replicating\\",\\n          \\"ConnectionStatus\\": \\"connected\\"\\n        }\\n      ]\\n    },\\n    \\"CriticalServers\\": {\\n      \\"criticalServer\\": [\\n        {\\n          \\"ServerId\\": \\"sr-0005qxusucb0fqqdf4ba\\",\\n          \\"InstanceId\\": \\"i-bp1a4374akk4527gbt9x\\",\\n          \\"SitePairId\\": \\"s-0005qxusucbii3ba2uve\\",\\n          \\"Rpo\\": 30,\\n          \\"Status\\": \\"replicating\\",\\n          \\"ConnectionStatus\\": \\"connected\\"\\n        }\\n      ]\\n    },\\n    \\"NotApplicableServers\\": {\\n      \\"notApplicableServer\\": [\\n        {\\n          \\"ServerId\\": \\"sr-000iji78mxxc93yldd2e\\",\\n          \\"InstanceId\\": \\"i-bp1a4374akk4527gbt9x\\",\\n          \\"SitePairId\\": \\"s-000bzkmmlwh5riquud19\\",\\n          \\"Rpo\\": 40,\\n          \\"Status\\": \\"replicating\\",\\n          \\"ConnectionStatus\\": \\"connected\\"\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查询概览信息',
      'summary' => '查询概览信息。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'hdr.cn-shanghai.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'hdr.cn-zhangjiakou.aliyuncs.com',
    ),
  ),
);
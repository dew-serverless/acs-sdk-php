<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'hdr',
        'version' => '2017-09-25',
    ],
    'directories' => [
        [
            'id' => 151406,
            'title' => '服务器管理',
            'type' => 'directory',
            'children' => [
                'RegisterServers',
                'UnregisterServer',
                'DescribeServer',
                'DescribeServers',
            ],
        ],
        [
            'id' => 151411,
            'title' => '站点对管理',
            'type' => 'directory',
            'children' => [
                'DescribeSitePairs',
                'DescribeSite',
                'DeleteSitePair',
                'CreateSitePair',
                'DescribeSitePair',
            ],
        ],
        [
            'id' => 151417,
            'title' => '故障切换',
            'type' => 'directory',
            'children' => [
                'EnableReplication',
                'DisableReplication',
                'TestFailover',
                'TestCleanup',
                'DescribeRecoveryPoints',
                'ChangeRecoveryPoint',
                'CommitFailover',
                'ForcedFailover',
            ],
        ],
        [
            'id' => 151426,
            'title' => '故障恢复',
            'type' => 'directory',
            'children' => [
                'TriggerReversedRegister',
                'DescribeInfrastructures',
                'ReversedEnableReplication',
                'ReversedDisableReplication',
                'Failback',
            ],
        ],
        [
            'id' => 180810,
            'title' => '恢复计划',
            'type' => 'directory',
            'children' => [
                'CreateRecoveryPlan',
                'DeleteRecoveryPlan',
                'DescribeRecoveryPlan',
                'DescribeRecoveryPlans',
                'UpdateRecoveryPlan',
            ],
        ],
        [
            'id' => 151432,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'DescribeAvailableInstanceTypes',
                'DescribeTasks',
                'DescribeTask',
            ],
        ],
        [
            'id' => 193000,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'DescribeSitePairStatistics',
                'DescribeSummary',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'RegisterServers' => [
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
                    'name' => 'SitePairId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '站点对ID',
                        'description' => '站点对ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 's-000cm9ax8sgzwujrzdwt',
                    ],
                ],
                [
                    'name' => 'ServerInstancesInfo',
                    'in' => 'query',
                    'schema' => [
                        'title' => '注册服务器信息',
                        'description' => '注册服务器信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '"[{\\"instanceId\\":\\"i-uf60ngpe9sseu5gsgu45\\",\\"privateIpAddress\\":\\"192.168.1.198\\",\\"osType\\":\\"linux\\",\\"osName\\":\\"CentOS  7.8 64位\\",\\"cpu\\":2,\\"memory\\":4294967296,\\"hostName\\":\\"hdr-test\\"}]"',
                    ],
                ],
                [
                    'name' => 'AgentPort',
                    'in' => 'query',
                    'schema' => [
                        'title' => '代理服务端口，默认9080',
                        'description' => '代理服务端口，默认9080',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '9080',
                        'default' => '9080',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回结果码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D76E741C-68B7-5281-8C5B-698AD06B0D89',
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 't-0001nlbcl4bynbb67x4w',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"D76E741C-68B7-5281-8C5B-698AD06B0D89\\",\\n  \\"TaskId\\": \\"t-0001nlbcl4bynbb67x4w\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '添加受保护服务器',
            'summary' => '添加受保护服务器。',
        ],
        'UnregisterServer' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ServerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '受保护服务器ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sr-000jf20efavec47ucq5g',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D2E81EC9-B206-54EA-BBCF-9D4D6AFE7AA8',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"D2E81EC9-B206-54EA-BBCF-9D4D6AFE7AA8\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '注销受保护服务器',
            'summary' => '注销受保护服务器。',
        ],
        'DescribeServer' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ServerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '受保护服务器ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sr-0005qxusucbiga738e9s',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PrimarySiteId' => [
                                'description' => '主站站点ID',
                                'type' => 'string',
                                'example' => 'si-0001jntih0phb0i2w1ya',
                            ],
                            'ServerId' => [
                                'description' => '受保护服务器ID',
                                'type' => 'string',
                                'example' => 'sr-0005qxusucbiip0g6t93',
                            ],
                            'RecoveryUseDhcp' => [
                                'description' => '恢复是否使用DHCP自动分配IP',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BBCC4082-98DF-5804-96C6-0E74C37C5867',
                            ],
                            'RecoveryMemory' => [
                                'description' => '故障切换使用的实例内存大小',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '4294967296',
                            ],
                            'SourceGatewayVersion' => [
                                'description' => '主站网关版本',
                                'type' => 'string',
                                'example' => '3.7.3',
                            ],
                            'IncrementalSyncStartTime' => [
                                'description' => '增量复制开始时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                            ],
                            'CrashConsistentPointPolicy' => [
                                'description' => '恢复点策略',
                                'type' => 'string',
                                'example' => '{\\"scheduleType\\":\\"CRON\\",\\"expression\\":\\"0 0 */1 * * 0,1,2,3,4,5,6\\",\\"initialDelay\\":0}',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'RecoveryPostScriptContent' => [
                                'description' => '故障切换的实例启动后执行的脚本内容',
                                'type' => 'string',
                                'example' => 'echo \\"127.0.0.1 kubernetes.docker.internal\\" >> /etc/hosts',
                            ],
                            'TestRecoveredInstanceId' => [
                                'description' => '容灾演练的实例ID',
                                'type' => 'string',
                                'example' => 'i-bp13zgzv13am2n2z92lb',
                            ],
                            'ReplicationNetwork' => [
                                'description' => '复制网络VSwitch ID',
                                'type' => 'string',
                                'example' => 'vsw-bp1g0s2u3b2kbn46kiy53',
                            ],
                            'RecoveryUseEssd' => [
                                'description' => '故障切换的实例云盘类型是否使用ESSD',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'TargetGatewayVersion' => [
                                'description' => '目的端网关版本',
                                'type' => 'string',
                                'example' => 'i-bp13zgzv13am2n2z92lb',
                            ],
                            'OsType' => [
                                'description' => '操作系统类型',
                                'type' => 'string',
                                'example' => 'linux',
                            ],
                            'FullSyncStartTime' => [
                                'description' => '全量复制开始时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                            ],
                            'ReplicationUseSsd' => [
                                'description' => '复影实例是否使用SSD云盘',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'Rpo' => [
                                'description' => '恢复时间目标，单位秒',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '45',
                            ],
                            'Consistent' => [
                                'description' => '是否处于一致性状态',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'FullSyncTotalSize' => [
                                'description' => '全量复制大小，单位B',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '365072220160',
                            ],
                            'RecoveredIpAddress' => [
                                'description' => '容灾切换的实例IP',
                                'type' => 'string',
                                'example' => '192.168.2.2',
                            ],
                            'Alias' => [
                                'description' => '别名',
                                'type' => 'string',
                                'example' => 'bsdewmpci_rz',
                            ],
                            'Status' => [
                                'description' => '实例状态',
                                'type' => 'string',
                                'example' => 'replicating',
                            ],
                            'TestFailoverStatus' => [
                                'description' => '容灾演练状态',
                                'type' => 'string',
                                'example' => 'testFailovered',
                            ],
                            'ReplicationUseEssd' => [
                                'description' => '复影实例是否使用ESSD云盘',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'OsDetail' => [
                                'description' => '操作系统详情',
                                'type' => 'string',
                                'example' => 'CentOS;7.9.2009',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'TestRecoveredIpAddress' => [
                                'description' => '容灾演练的机器IP地址',
                                'type' => 'string',
                                'example' => '192.168.2.2',
                            ],
                            'SecondarySiteId' => [
                                'description' => '从站站点ID',
                                'type' => 'string',
                                'example' => 'si-000imvpcegvbh6i5kd2u',
                            ],
                            'FullSyncProgress' => [
                                'description' => '全量复制进度百分比',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '17',
                            ],
                            'RecoveryInstanceType' => [
                                'description' => '故障切换的实例规格',
                                'type' => 'string',
                                'example' => 'ecs.c5.2xlarge',
                            ],
                            'IpAddress' => [
                                'description' => '受保护服务器IP地址',
                                'type' => 'string',
                                'example' => '30.42.105.6',
                            ],
                            'RecoveryInstanceName' => [
                                'description' => '故障切换的实例名称',
                                'type' => 'string',
                                'example' => 'HDR_Recovery-sr-000bzkmmlwghq3soqry2',
                            ],
                            'OriginalInstanceId' => [
                                'description' => '源端实例ID',
                                'type' => 'string',
                                'example' => 'i-bp19axn91irnsi9204xg',
                            ],
                            'RecoveredInstanceId' => [
                                'description' => '容灾切换的实例ID',
                                'type' => 'string',
                                'example' => 'i-bp19axn91irnsi9204xg',
                            ],
                            'RecoveryReserveIp' => [
                                'description' => '演练实例是否保留源机的IP（需要演练所在的VSwitch包含相应网段）',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Memory' => [
                                'description' => '内存大小',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8589934591',
                            ],
                            'RecoveryIpAddress' => [
                                'description' => '故障切换的实例手动设置IP',
                                'type' => 'string',
                                'example' => '192.168.2.2',
                            ],
                            'RecoveryNetwork' => [
                                'description' => '故障切换的实例所在的VSwitch ID',
                                'type' => 'string',
                                'example' => 'vsw-uf61v3bg6r790ir22jqv4',
                            ],
                            'Errno' => [
                                'description' => '出错原因',
                                'type' => 'string',
                                'example' => 'cdr.console.plugin.failed_to_connect',
                            ],
                            'ReplicationUseOriginalInstance' => [
                                'description' => '反向复制使用源机',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'Hostname' => [
                                'description' => '主机名称',
                                'type' => 'string',
                                'example' => 'iZ2ze0jazgwtuxettbk1ywZ',
                            ],
                            'RecoveryCpu' => [
                                'description' => '故障切换的实例CPU核数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '4',
                            ],
                            'AgentPort' => [
                                'description' => '客户端代理端口',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '9080',
                            ],
                            'ReplicationUseDhcp' => [
                                'description' => '-',
                                'type' => 'boolean',
                                'example' => '-',
                            ],
                            'TestRecoveredInstanceName' => [
                                'description' => '容灾演练的实例名称',
                                'type' => 'string',
                                'example' => 'HDR_Recovery-sr-000c2rz7q8tak59pt6sw',
                            ],
                            'AgentVersion' => [
                                'description' => '客户端版本',
                                'type' => 'string',
                                'example' => '3.7.3',
                            ],
                            'FullSyncCurrentSize' => [
                                'description' => '全量复制已完成大小，单位B',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '3285276688384',
                            ],
                            'ReplicationInfrastructureType' => [
                                'description' => '复制使用的基础设施类型',
                                'type' => 'string',
                                'example' => 'aliyun',
                            ],
                            'Cpu' => [
                                'description' => 'CPU核数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '4',
                            ],
                            'RecoveryPostScriptType' => [
                                'description' => '演练实例启动后执行脚本类型，可选项：SHELL',
                                'type' => 'string',
                                'example' => 'SHELL',
                            ],
                            'ReplicationInfrastructureId' => [
                                'description' => '目标站点基础设施ID',
                                'type' => 'string',
                                'example' => 'is-000bzkmmlwgibbduuoff',
                            ],
                            'ConnectionStatus' => [
                                'description' => '连接状态',
                                'type' => 'string',
                                'example' => 'connected',
                            ],
                            'Operations' => [
                                'description' => '支持的操作',
                                'type' => 'string',
                                'example' => '"{\\"Resynchronize\\":true,\\"TestFailover\\":true,\\"TestCleanup\\":true,\\"ChangeRecoveryPoint\\":true,\\"UnregisterServer\\":true,\\"ReversedEnableReplication\\":true,\\"ReversedDisableReplication\\":true,\\"DisableReplication\\":true,\\"CommitFailover\\":true,\\"RestartServer\\":true,\\"UpgradeServer\\":true,\\"ForcedFailover\\":true,\\"RepairReplication\\":true,\\"EnableReplication\\":true,\\"TriggerReversedRegister\\":true,\\"SetupAgent\\":true,\\"TriggerRegister\\":true,\\"CollectSupportBundle\\":true,\\"Failback\\":true}"',
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 't-0004ka624vrza82g46ne',
                            ],
                            'RecoveryUseSsd' => [
                                'description' => '故障切换的实例云盘类型是否使用SSD',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'Disks' => [
                                'description' => '磁盘信息例表。',
                                'type' => 'string',
                                'example' => '[{\\"id\\":\\"0\\",\\"boot\\":true,\\"size\\":500363689984}]',
                            ],
                            'RecoveryEssdPerformanceLevel' => [
                                'description' => '演练、切换实例使用ESSD选定的PL等级',
                                'type' => 'string',
                                'example' => 'PL1',
                            ],
                            'LatestRecoveryPointTime' => [
                                'description' => '最近一次创建恢复点的时间',
                                'type' => 'string',
                                'example' => '1661419052',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PrimarySiteId\\": \\"si-0001jntih0phb0i2w1ya\\",\\n  \\"ServerId\\": \\"sr-0005qxusucbiip0g6t93\\",\\n  \\"RecoveryUseDhcp\\": false,\\n  \\"RequestId\\": \\"BBCC4082-98DF-5804-96C6-0E74C37C5867\\",\\n  \\"RecoveryMemory\\": 4294967296,\\n  \\"SourceGatewayVersion\\": \\"3.7.3\\",\\n  \\"IncrementalSyncStartTime\\": 0,\\n  \\"CrashConsistentPointPolicy\\": \\"{\\\\\\\\\\\\\\"scheduleType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"CRON\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"expression\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0 0 */1 * * 0,1,2,3,4,5,6\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"initialDelay\\\\\\\\\\\\\\":0}\\",\\n  \\"Success\\": true,\\n  \\"RecoveryPostScriptContent\\": \\"echo \\\\\\\\\\\\\\"127.0.0.1 kubernetes.docker.internal\\\\\\\\\\\\\\" >> /etc/hosts\\",\\n  \\"TestRecoveredInstanceId\\": \\"i-bp13zgzv13am2n2z92lb\\",\\n  \\"ReplicationNetwork\\": \\"vsw-bp1g0s2u3b2kbn46kiy53\\",\\n  \\"RecoveryUseEssd\\": false,\\n  \\"TargetGatewayVersion\\": \\"i-bp13zgzv13am2n2z92lb\\",\\n  \\"OsType\\": \\"linux\\",\\n  \\"FullSyncStartTime\\": 0,\\n  \\"ReplicationUseSsd\\": false,\\n  \\"Rpo\\": 45,\\n  \\"Consistent\\": false,\\n  \\"FullSyncTotalSize\\": 365072220160,\\n  \\"RecoveredIpAddress\\": \\"192.168.2.2\\",\\n  \\"Alias\\": \\"bsdewmpci_rz\\",\\n  \\"Status\\": \\"replicating\\",\\n  \\"TestFailoverStatus\\": \\"testFailovered\\",\\n  \\"ReplicationUseEssd\\": false,\\n  \\"OsDetail\\": \\"CentOS;7.9.2009\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"TestRecoveredIpAddress\\": \\"192.168.2.2\\",\\n  \\"SecondarySiteId\\": \\"si-000imvpcegvbh6i5kd2u\\",\\n  \\"FullSyncProgress\\": 17,\\n  \\"RecoveryInstanceType\\": \\"ecs.c5.2xlarge\\",\\n  \\"IpAddress\\": \\"30.42.105.6\\",\\n  \\"RecoveryInstanceName\\": \\"HDR_Recovery-sr-000bzkmmlwghq3soqry2\\",\\n  \\"OriginalInstanceId\\": \\"i-bp19axn91irnsi9204xg\\",\\n  \\"RecoveredInstanceId\\": \\"i-bp19axn91irnsi9204xg\\",\\n  \\"RecoveryReserveIp\\": false,\\n  \\"Code\\": \\"200\\",\\n  \\"Memory\\": 8589934591,\\n  \\"RecoveryIpAddress\\": \\"192.168.2.2\\",\\n  \\"RecoveryNetwork\\": \\"vsw-uf61v3bg6r790ir22jqv4\\",\\n  \\"Errno\\": \\"cdr.console.plugin.failed_to_connect\\",\\n  \\"ReplicationUseOriginalInstance\\": false,\\n  \\"Hostname\\": \\"iZ2ze0jazgwtuxettbk1ywZ\\",\\n  \\"RecoveryCpu\\": 4,\\n  \\"AgentPort\\": 9080,\\n  \\"ReplicationUseDhcp\\": true,\\n  \\"TestRecoveredInstanceName\\": \\"HDR_Recovery-sr-000c2rz7q8tak59pt6sw\\",\\n  \\"AgentVersion\\": \\"3.7.3\\",\\n  \\"FullSyncCurrentSize\\": 3285276688384,\\n  \\"ReplicationInfrastructureType\\": \\"aliyun\\",\\n  \\"Cpu\\": 4,\\n  \\"RecoveryPostScriptType\\": \\"SHELL\\",\\n  \\"ReplicationInfrastructureId\\": \\"is-000bzkmmlwgibbduuoff\\",\\n  \\"ConnectionStatus\\": \\"connected\\",\\n  \\"Operations\\": \\"\\\\\\"{\\\\\\\\\\\\\\"Resynchronize\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"TestFailover\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"TestCleanup\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"ChangeRecoveryPoint\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"UnregisterServer\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"ReversedEnableReplication\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"ReversedDisableReplication\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"DisableReplication\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"CommitFailover\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"RestartServer\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"UpgradeServer\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"ForcedFailover\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"RepairReplication\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"EnableReplication\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"TriggerReversedRegister\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"SetupAgent\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"TriggerRegister\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"CollectSupportBundle\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"Failback\\\\\\\\\\\\\\":true}\\\\\\"\\",\\n  \\"TaskId\\": \\"t-0004ka624vrza82g46ne\\",\\n  \\"RecoveryUseSsd\\": false,\\n  \\"Disks\\": \\"[{\\\\\\\\\\\\\\"id\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"boot\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"size\\\\\\\\\\\\\\":500363689984}]\\",\\n  \\"RecoveryEssdPerformanceLevel\\": \\"PL1\\",\\n  \\"LatestRecoveryPointTime\\": \\"1661419052\\"\\n}","type":"json"}]',
            'title' => '查询受保护服务器',
            'summary' => '查询受保护服务器。',
        ],
        'DescribeServers' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SitePairId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '站点对ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 's-0007rvzart0u501t4e5r',
                    ],
                ],
                [
                    'name' => 'ServerIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '受保护服务器ID列表',
                        'type' => 'string',
                        'required' => false,
                        'example' => '"[\\"sr-0005qxusucbi38lqfc2q\\",\\"sr-0005qxusucbi38lqfc2r\\"]"',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页参数：当前页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页参数：每页显示条数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
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
                                'example' => 'D2B255D3-9736-5169-B488-C735A8BBCD79',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时每页的行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'TotalCount' => [
                                'description' => '总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Servers' => [
                                'type' => 'object',
                                'properties' => [
                                    'server' => [
                                        'description' => '受保护服务器信息',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '受保护服务器信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'RecoveredInstanceName' => [
                                                    'description' => '-',
                                                    'type' => 'string',
                                                    'example' => '-',
                                                ],
                                                'PrimarySiteId' => [
                                                    'description' => '主站站点ID',
                                                    'type' => 'string',
                                                    'example' => 'si-000cm9ax8sgplgye2vc4',
                                                ],
                                                'ServerId' => [
                                                    'description' => '受保护服务器ID',
                                                    'type' => 'string',
                                                    'example' => 'sr-000cm9ax8sh2381wa7kv',
                                                ],
                                                'RecoveryUseDhcp' => [
                                                    'description' => '容灾切换的实例是否使用DHCP分配IP',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'RecoveryMemory' => [
                                                    'description' => '容灾切换的实例内存大小',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '8589934592',
                                                ],
                                                'SourceGatewayVersion' => [
                                                    'description' => '主站网关版本',
                                                    'type' => 'string',
                                                    'example' => '3.7.3',
                                                ],
                                                'IncrementalSyncStartTime' => [
                                                    'description' => '增量复制开始时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1646049677',
                                                ],
                                                'CrashConsistentPointPolicy' => [
                                                    'description' => '恢复点策略',
                                                    'type' => 'string',
                                                    'example' => '"{\\"scheduleType\\":\\"CRON\\",\\"expression\\":\\"0 0 */1 * * 0,1,2,3,4,5,6\\",\\"initialDelay\\":0}"',
                                                ],
                                                'RecoveryPostScriptContent' => [
                                                    'description' => '容灾演练、容灾切换等机器启动后执行的脚本内容',
                                                    'type' => 'string',
                                                    'example' => '"echo \\"127.0.0.1 kubernetes.docker.internal\\" >> /etc/hosts"',
                                                ],
                                                'TestRecoveredInstanceId' => [
                                                    'description' => '容灾演练的实例ID',
                                                    'type' => 'string',
                                                    'example' => 'i-bp13zgzv13am2n2z92lb',
                                                ],
                                                'ReplicationNetwork' => [
                                                    'description' => '复影服务器所在的VSwitch ID',
                                                    'type' => 'string',
                                                    'example' => 'vsw-2zey7xe0m8dbqrks2jb9h',
                                                ],
                                                'RecoveryUseEssd' => [
                                                    'description' => '容灾演练、容灾切换的实例是否使用ESSD',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'TargetGatewayVersion' => [
                                                    'description' => '目的端网关版本',
                                                    'type' => 'string',
                                                    'example' => '3.7.3',
                                                ],
                                                'OsType' => [
                                                    'description' => '操作系统类型',
                                                    'type' => 'string',
                                                    'example' => 'linux',
                                                ],
                                                'FullSyncStartTime' => [
                                                    'description' => '全量复制开始时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'ReplicationUseSsd' => [
                                                    'description' => '复影服务器是否使用SSD',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'Rpo' => [
                                                    'description' => '恢复时间目标，单位秒',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '30',
                                                ],
                                                'Consistent' => [
                                                    'description' => '是否处于一致性状态',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'FullSyncTotalSize' => [
                                                    'description' => '全量复制大小，单位B',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '150202220544',
                                                ],
                                                'RecoveredIpAddress' => [
                                                    'description' => '容灾切换的实例IP',
                                                    'type' => 'string',
                                                    'example' => '192.168.2.2',
                                                ],
                                                'Alias' => [
                                                    'description' => '别名',
                                                    'type' => 'string',
                                                    'example' => 'test-ecs',
                                                ],
                                                'Status' => [
                                                    'description' => '状态',
                                                    'type' => 'string',
                                                    'example' => 'replicating',
                                                ],
                                                'TestFailoverStatus' => [
                                                    'description' => '容灾演练状态',
                                                    'type' => 'string',
                                                    'example' => 'testFailovered',
                                                ],
                                                'ReplicationUseEssd' => [
                                                    'description' => '复影服务器是否使用ESSD',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'OsDetail' => [
                                                    'description' => '操作系统详情',
                                                    'type' => 'string',
                                                    'example' => 'CentOS;7.9.2009',
                                                ],
                                                'TestRecoveredIpAddress' => [
                                                    'description' => '容灾演练的机器IP地址',
                                                    'type' => 'string',
                                                    'example' => '192.168.2.2',
                                                ],
                                                'SecondarySiteId' => [
                                                    'description' => '从站站点ID',
                                                    'type' => 'string',
                                                    'example' => 'si-0007o5em8n6mhm8hee1l',
                                                ],
                                                'FullSyncProgress' => [
                                                    'description' => '全量复制进度百分比',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'RecoveryInstanceType' => [
                                                    'description' => '容灾切换的实例规格',
                                                    'type' => 'string',
                                                    'example' => 'ecs.r6.3xlarge',
                                                ],
                                                'IpAddress' => [
                                                    'description' => '内网IP地址',
                                                    'type' => 'string',
                                                    'example' => '30.42.105.6',
                                                ],
                                                'RecoveryInstanceName' => [
                                                    'description' => '容灾切换的实例名称',
                                                    'type' => 'string',
                                                    'example' => 'HDR_Recovery-sr-000c2rz7q8tak59pt6sw',
                                                ],
                                                'OriginalInstanceId' => [
                                                    'description' => '源端实例ID',
                                                    'type' => 'string',
                                                    'example' => 'i-bp19axn91irnsi9204xg',
                                                ],
                                                'InstanceId' => [
                                                    'description' => 'ECS实例ID',
                                                    'type' => 'string',
                                                    'example' => 'i-bp19axn91irnsi9204xg',
                                                ],
                                                'RecoveredInstanceId' => [
                                                    'description' => '容灾切换的实例ID',
                                                    'type' => 'string',
                                                    'example' => 'i-bp19axn91irnsi9204xg',
                                                ],
                                                'RecoveryReserveIp' => [
                                                    'description' => '容灾切换实例保留源端IP',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'Memory' => [
                                                    'description' => '内存大小',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '4294967295',
                                                ],
                                                'RecoveryIpAddress' => [
                                                    'description' => '容灾切换设置的手动IP地址',
                                                    'type' => 'string',
                                                    'example' => '192.168.2.2',
                                                ],
                                                'RecoveryNetwork' => [
                                                    'description' => '复影服务器所在的虚拟交换机ID',
                                                    'type' => 'string',
                                                    'example' => 'vsw-uf63qu8ocjcly44tai570',
                                                ],
                                                'Errno' => [
                                                    'description' => '出错原因',
                                                    'type' => 'string',
                                                    'example' => 'cdr.console.plugin.alicloud.agent_deploy_already_installed',
                                                ],
                                                'ReplicationUseOriginalInstance' => [
                                                    'description' => '复影服务器使用源机，仅反向复制时有效',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'Hostname' => [
                                                    'description' => '主机名称',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'RecoveryCpu' => [
                                                    'description' => '容灾切换的实例CPU核数',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '4',
                                                ],
                                                'AgentPort' => [
                                                    'description' => '客户端代理端口',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '9080',
                                                ],
                                                'ReplicationUseDhcp' => [
                                                    'description' => '复影服务器使用DHCP分配IP',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'TestRecoveredInstanceName' => [
                                                    'description' => '容灾演练的实例名称',
                                                    'type' => 'string',
                                                    'example' => 'HDR_Recovery-sr-000c2rz7q8tak59pt6sw',
                                                ],
                                                'AgentVersion' => [
                                                    'description' => '客户端版本',
                                                    'type' => 'string',
                                                    'example' => '3.7.3',
                                                ],
                                                'FullSyncCurrentSize' => [
                                                    'description' => '全量复制已完成大小，单位B',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1603469836288',
                                                ],
                                                'ReplicationInfrastructureType' => [
                                                    'description' => '复制使用的基础设施类型',
                                                    'type' => 'string',
                                                    'example' => 'aliyun',
                                                ],
                                                'Cpu' => [
                                                    'description' => 'CPU核数',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '4',
                                                ],
                                                'RecoveryPostScriptType' => [
                                                    'description' => '容灾切换的实例启动后执行的脚本类型',
                                                    'type' => 'string',
                                                    'example' => 'SHELL',
                                                ],
                                                'ReplicationInfrastructureId' => [
                                                    'description' => '复制使用的基础设施ID',
                                                    'type' => 'string',
                                                    'example' => 'is-0004ka624vrxd9xsvs4f',
                                                ],
                                                'ConnectionStatus' => [
                                                    'description' => '连接状态',
                                                    'type' => 'string',
                                                    'example' => 'connected',
                                                ],
                                                'Operations' => [
                                                    'description' => '该实例支持与禁用的操作列表',
                                                    'type' => 'string',
                                                    'example' => '"{\\"Resynchronize\\":true,\\"TestFailover\\":true,\\"TestCleanup\\":true,\\"ChangeRecoveryPoint\\":true,\\"UnregisterServer\\":true,\\"ReversedEnableReplication\\":true,\\"ReversedDisableReplication\\":true,\\"DisableReplication\\":true,\\"CommitFailover\\":true,\\"RestartServer\\":true,\\"UpgradeServer\\":true,\\"ForcedFailover\\":true,\\"RepairReplication\\":true,\\"EnableReplication\\":true,\\"TriggerReversedRegister\\":true,\\"SetupAgent\\":true,\\"TriggerRegister\\":true,\\"CollectSupportBundle\\":true,\\"Failback\\":true}"',
                                                ],
                                                'TaskId' => [
                                                    'description' => '正在执行的任务ID',
                                                    'type' => 'string',
                                                    'example' => 't-0007rvzart0v31c0x93q',
                                                ],
                                                'RecoveryUseSsd' => [
                                                    'description' => '容灾切换的实例是否使用SSD',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'Disks' => [
                                                    'description' => '磁盘信息列表',
                                                    'type' => 'string',
                                                    'example' => '[{\\"id\\":\\"0\\",\\"boot\\":true,\\"size\\":500363689984}]',
                                                ],
                                                'RecoveryEssdPerformanceLevel' => [
                                                    'description' => '演练、切换使用ESSD时选定的PL等级',
                                                    'type' => 'string',
                                                    'example' => 'PL3',
                                                ],
                                                'LatestRecoveryPointTime' => [
                                                    'description' => '最近一次创建恢复点的时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1661419052',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D2B255D3-9736-5169-B488-C735A8BBCD79\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 2,\\n  \\"TotalCount\\": 10,\\n  \\"Servers\\": {\\n    \\"server\\": [\\n      {\\n        \\"RecoveredInstanceName\\": \\"-\\",\\n        \\"PrimarySiteId\\": \\"si-000cm9ax8sgplgye2vc4\\",\\n        \\"ServerId\\": \\"sr-000cm9ax8sh2381wa7kv\\",\\n        \\"RecoveryUseDhcp\\": true,\\n        \\"RecoveryMemory\\": 8589934592,\\n        \\"SourceGatewayVersion\\": \\"3.7.3\\",\\n        \\"IncrementalSyncStartTime\\": 1646049677,\\n        \\"CrashConsistentPointPolicy\\": \\"\\\\\\"{\\\\\\\\\\\\\\"scheduleType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"CRON\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"expression\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0 0 */1 * * 0,1,2,3,4,5,6\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"initialDelay\\\\\\\\\\\\\\":0}\\\\\\"\\",\\n        \\"RecoveryPostScriptContent\\": \\"\\\\\\"echo \\\\\\\\\\\\\\"127.0.0.1 kubernetes.docker.internal\\\\\\\\\\\\\\" >> /etc/hosts\\\\\\"\\",\\n        \\"TestRecoveredInstanceId\\": \\"i-bp13zgzv13am2n2z92lb\\",\\n        \\"ReplicationNetwork\\": \\"vsw-2zey7xe0m8dbqrks2jb9h\\",\\n        \\"RecoveryUseEssd\\": false,\\n        \\"TargetGatewayVersion\\": \\"3.7.3\\",\\n        \\"OsType\\": \\"linux\\",\\n        \\"FullSyncStartTime\\": 0,\\n        \\"ReplicationUseSsd\\": true,\\n        \\"Rpo\\": 30,\\n        \\"Consistent\\": true,\\n        \\"FullSyncTotalSize\\": 150202220544,\\n        \\"RecoveredIpAddress\\": \\"192.168.2.2\\",\\n        \\"Alias\\": \\"test-ecs\\",\\n        \\"Status\\": \\"replicating\\",\\n        \\"TestFailoverStatus\\": \\"testFailovered\\",\\n        \\"ReplicationUseEssd\\": false,\\n        \\"OsDetail\\": \\"CentOS;7.9.2009\\",\\n        \\"TestRecoveredIpAddress\\": \\"192.168.2.2\\",\\n        \\"SecondarySiteId\\": \\"si-0007o5em8n6mhm8hee1l\\",\\n        \\"FullSyncProgress\\": 0,\\n        \\"RecoveryInstanceType\\": \\"ecs.r6.3xlarge\\",\\n        \\"IpAddress\\": \\"30.42.105.6\\",\\n        \\"RecoveryInstanceName\\": \\"HDR_Recovery-sr-000c2rz7q8tak59pt6sw\\",\\n        \\"OriginalInstanceId\\": \\"i-bp19axn91irnsi9204xg\\",\\n        \\"InstanceId\\": \\"i-bp19axn91irnsi9204xg\\",\\n        \\"RecoveredInstanceId\\": \\"i-bp19axn91irnsi9204xg\\",\\n        \\"RecoveryReserveIp\\": true,\\n        \\"Memory\\": 4294967295,\\n        \\"RecoveryIpAddress\\": \\"192.168.2.2\\",\\n        \\"RecoveryNetwork\\": \\"vsw-uf63qu8ocjcly44tai570\\",\\n        \\"Errno\\": \\"cdr.console.plugin.alicloud.agent_deploy_already_installed\\",\\n        \\"ReplicationUseOriginalInstance\\": false,\\n        \\"Hostname\\": \\"test\\",\\n        \\"RecoveryCpu\\": 4,\\n        \\"AgentPort\\": 9080,\\n        \\"ReplicationUseDhcp\\": false,\\n        \\"TestRecoveredInstanceName\\": \\"HDR_Recovery-sr-000c2rz7q8tak59pt6sw\\",\\n        \\"AgentVersion\\": \\"3.7.3\\",\\n        \\"FullSyncCurrentSize\\": 1603469836288,\\n        \\"ReplicationInfrastructureType\\": \\"aliyun\\",\\n        \\"Cpu\\": 4,\\n        \\"RecoveryPostScriptType\\": \\"SHELL\\",\\n        \\"ReplicationInfrastructureId\\": \\"is-0004ka624vrxd9xsvs4f\\",\\n        \\"ConnectionStatus\\": \\"connected\\",\\n        \\"Operations\\": \\"\\\\\\"{\\\\\\\\\\\\\\"Resynchronize\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"TestFailover\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"TestCleanup\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"ChangeRecoveryPoint\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"UnregisterServer\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"ReversedEnableReplication\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"ReversedDisableReplication\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"DisableReplication\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"CommitFailover\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"RestartServer\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"UpgradeServer\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"ForcedFailover\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"RepairReplication\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"EnableReplication\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"TriggerReversedRegister\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"SetupAgent\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"TriggerRegister\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"CollectSupportBundle\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"Failback\\\\\\\\\\\\\\":true}\\\\\\"\\",\\n        \\"TaskId\\": \\"t-0007rvzart0v31c0x93q\\",\\n        \\"RecoveryUseSsd\\": true,\\n        \\"Disks\\": \\"[{\\\\\\\\\\\\\\"id\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"boot\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"size\\\\\\\\\\\\\\":500363689984}]\\",\\n        \\"RecoveryEssdPerformanceLevel\\": \\"PL3\\",\\n        \\"LatestRecoveryPointTime\\": 1661419052\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询受保护服务器',
            'summary' => '查询受保护服务器。',
        ],
        'DescribeSitePairs' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SitePairType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '站点对类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cloud2cloud',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。',
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
                        'description' => '分页查询时设置的每页行数，默认值为10。',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '24CFBF97-EAD7-5D53-8D50-7F9E9D20C3A3',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时设置的每页行数，默认值为10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '当前页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'TotalCount' => [
                                'description' => '总数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '28',
                            ],
                            'SitePairs' => [
                                'type' => 'object',
                                'properties' => [
                                    'sitePair' => [
                                        'description' => '站点对信息',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '站点对信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'SitePairType' => [
                                                    'description' => '站点对类型',
                                                    'type' => 'string',
                                                    'example' => 'cloud2cloud',
                                                ],
                                                'LocalSiteName' => [
                                                    'description' => '本地站点名称',
                                                    'type' => 'string',
                                                    'example' => 'local-site',
                                                ],
                                                'SecondarySiteId' => [
                                                    'description' => '从站ID',
                                                    'type' => 'string',
                                                    'example' => 'si-0007nrkb2riv9yalg8s8',
                                                ],
                                                'PrimarySiteId' => [
                                                    'description' => '主站ID',
                                                    'type' => 'string',
                                                    'example' => 'si-000as7kbj0cmlp3tt60m',
                                                ],
                                                'Version' => [
                                                    'description' => '网关版本号',
                                                    'type' => 'string',
                                                    'example' => '3.7.3',
                                                ],
                                                'ServerCount' => [
                                                    'description' => '受保护服务器数量',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '14',
                                                ],
                                                'CloudSiteName' => [
                                                    'description' => '云上站点名称',
                                                    'type' => 'string',
                                                    'example' => 'cloud-site',
                                                ],
                                                'SitePairId' => [
                                                    'description' => '站点对ID',
                                                    'type' => 'string',
                                                    'example' => 's-0003obqyc8f8lx2pf6m9',
                                                ],
                                                'SecondarySiteName' => [
                                                    'description' => '从站名称',
                                                    'type' => 'string',
                                                    'example' => 'SH',
                                                ],
                                                'PrimarySiteName' => [
                                                    'description' => '主站名称',
                                                    'type' => 'string',
                                                    'example' => 'HZ',
                                                ],
                                                'CreatedTime' => [
                                                    'description' => '创建时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1636092147',
                                                ],
                                                'ReplicationStatistics' => [
                                                    'description' => '复制状态统计',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Healthy' => [
                                                            'description' => '处于健康状态（全量复制、实时复制）的受保护服务器数量。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '4',
                                                        ],
                                                        'Warning' => [
                                                            'description' => '处于警告状态（RPO超过20分钟、暂时断开连接等）的受保护服务器数量',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '0',
                                                        ],
                                                        'Critical' => [
                                                            'description' => '处于危险状态（复制失败等）的受保护服务器数量',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '0',
                                                        ],
                                                        'NotApplicable' => [
                                                            'description' => '处于其他状态的受保护服务器数量',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '0',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"24CFBF97-EAD7-5D53-8D50-7F9E9D20C3A3\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 5,\\n  \\"TotalCount\\": 28,\\n  \\"SitePairs\\": {\\n    \\"sitePair\\": [\\n      {\\n        \\"SitePairType\\": \\"cloud2cloud\\",\\n        \\"LocalSiteName\\": \\"local-site\\",\\n        \\"SecondarySiteId\\": \\"si-0007nrkb2riv9yalg8s8\\",\\n        \\"PrimarySiteId\\": \\"si-000as7kbj0cmlp3tt60m\\",\\n        \\"Version\\": \\"3.7.3\\",\\n        \\"ServerCount\\": 14,\\n        \\"CloudSiteName\\": \\"cloud-site\\",\\n        \\"SitePairId\\": \\"s-0003obqyc8f8lx2pf6m9\\",\\n        \\"SecondarySiteName\\": \\"SH\\",\\n        \\"PrimarySiteName\\": \\"HZ\\",\\n        \\"CreatedTime\\": 1636092147,\\n        \\"ReplicationStatistics\\": {\\n          \\"Healthy\\": 4,\\n          \\"Warning\\": 0,\\n          \\"Critical\\": 0,\\n          \\"NotApplicable\\": 0\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询站点对信息',
            'summary' => '查询站点对信息。',
        ],
        'DescribeSite' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SiteId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '站点ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'si-000bzkmmlwh01trrecuw',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'VpcId' => [
                                'description' => '专有网络ID',
                                'type' => 'string',
                                'example' => 'vpc-bp1c3byhnaoj3u96sgk12',
                            ],
                            'Type' => [
                                'description' => '站点类型',
                                'type' => 'string',
                                'example' => 'cloud',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B30A844D-E4CF-5382-A0D4-3DE76A8AD2AE',
                            ],
                            'SiteId' => [
                                'description' => '站点ID',
                                'type' => 'string',
                                'example' => 'si-000bzkmmlwh01trrecuw',
                            ],
                            'UserSecurityGroupId' => [
                                'description' => '用户安全组ID',
                                'type' => 'string',
                                'example' => 'sg-bp1466glrmpqfsq4zpjs',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'ZoneId' => [
                                'description' => '可用区ID',
                                'type' => 'string',
                                'example' => 'cn-shanghai-l',
                            ],
                            'Code' => [
                                'description' => '返回码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'Name' => [
                                'description' => '站点名称',
                                'type' => 'string',
                                'example' => 'SH',
                            ],
                            'RegionId' => [
                                'description' => '站点所在的地域ID',
                                'type' => 'string',
                                'example' => 'cn-shanghai',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"VpcId\\": \\"vpc-bp1c3byhnaoj3u96sgk12\\",\\n  \\"Type\\": \\"cloud\\",\\n  \\"RequestId\\": \\"B30A844D-E4CF-5382-A0D4-3DE76A8AD2AE\\",\\n  \\"SiteId\\": \\"si-000bzkmmlwh01trrecuw\\",\\n  \\"UserSecurityGroupId\\": \\"sg-bp1466glrmpqfsq4zpjs\\",\\n  \\"Success\\": true,\\n  \\"ZoneId\\": \\"cn-shanghai-l\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Name\\": \\"SH\\",\\n  \\"RegionId\\": \\"cn-shanghai\\"\\n}","type":"json"}]',
            'title' => '查询站点信息',
            'summary' => '查询站点信息。',
        ],
        'DeleteSitePair' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SitePairId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '站点对ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 's-0003obqyc8f8a6u3bfw4',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '26365F46-16D9-5A56-B1EF-62D12C04E071',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"26365F46-16D9-5A56-B1EF-62D12C04E071\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '删除站点对',
            'summary' => '删除站点对。',
        ],
        'CreateSitePair' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SitePairType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '站点对类型',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'cloud2cloud' => 'cloud2cloud',
                            'zone2zone' => 'zone2zone',
                        ],
                        'example' => 'cloud2cloud',
                    ],
                ],
                [
                    'name' => 'PrimarySiteName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主站站点名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '杭州可用区G',
                    ],
                ],
                [
                    'name' => 'PrimarySiteType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主站站点类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cloud',
                    ],
                ],
                [
                    'name' => 'PrimarySiteRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主站地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'PrimarySiteVpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主站VPC ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-uf6j3rao8wkr7hb4uopv2',
                    ],
                ],
                [
                    'name' => 'PrimarySiteZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主站可用区ID，站点对类型为跨可用区容灾时有效',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou-g',
                    ],
                ],
                [
                    'name' => 'SecondarySiteName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '从站站点名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '杭州可用区F',
                    ],
                ],
                [
                    'name' => 'SecondarySiteType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '从站站点类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cloud',
                    ],
                ],
                [
                    'name' => 'SecondarySiteRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '从站地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'SecondarySiteVpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '从站专有网络ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-bp1wu55gbyqd7gh3yu3ey',
                    ],
                ],
                [
                    'name' => 'SecondarySiteZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '从站可用区ID，仅站点对类型为跨可用区容灾时有效',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou-i',
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
                                'example' => 'D14F1EB0-30B7-5A38-92E7-C2D11077D5CA',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '返回码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'SitePairId' => [
                                'description' => '站点对ID',
                                'type' => 'string',
                                'example' => 's-000bvn4shsuhq4cph5i8',
                            ],
                            'SecondarySiteId' => [
                                'description' => '从站站点ID',
                                'type' => 'string',
                                'example' => 'si-000imvpcegvbh6i5kd2u',
                            ],
                            'PrimarySiteId' => [
                                'description' => '主站站点ID',
                                'type' => 'string',
                                'example' => 'si-0001jntih0phb0i2w1ya',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D14F1EB0-30B7-5A38-92E7-C2D11077D5CA\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"SitePairId\\": \\"s-000bvn4shsuhq4cph5i8\\",\\n  \\"SecondarySiteId\\": \\"si-000imvpcegvbh6i5kd2u\\",\\n  \\"PrimarySiteId\\": \\"si-0001jntih0phb0i2w1ya\\"\\n}","type":"json"}]',
            'title' => '创建站点对',
            'summary' => '创建容灾站点对。',
        ],
        'DescribeSitePair' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SitePairId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '站点对ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 's-0007rvzart0c4cn130df',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SitePairType' => [
                                'description' => '站点对类型',
                                'type' => 'string',
                                'example' => 'cloud2cloud',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'SecondarySiteId' => [
                                'description' => '从站站点ID',
                                'type' => 'string',
                                'example' => 'si-0007rvzart0a2wpup82m',
                            ],
                            'PrimarySiteId' => [
                                'description' => '主站站点ID',
                                'type' => 'string',
                                'example' => 'si-0001jntih0phb0i2w1ya',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '700F1972-16A2-5639-A937-D2A6D61557B8',
                            ],
                            'Version' => [
                                'description' => '版本号',
                                'type' => 'string',
                                'example' => '3.7.3',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'SitePairId' => [
                                'description' => '站点对ID',
                                'type' => 'string',
                                'example' => 's-000j6lhiuvdqakqa6k7l',
                            ],
                            'SecondarySiteName' => [
                                'description' => '从站站点名称',
                                'type' => 'string',
                                'example' => '杭州D区',
                            ],
                            'CreatedTime' => [
                                'description' => '创建时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1637293095',
                            ],
                            'PrimarySiteName' => [
                                'description' => '主站站点名称',
                                'type' => 'string',
                                'example' => '杭州F区',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"SitePairType\\": \\"cloud2cloud\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"successful\\",\\n  \\"SecondarySiteId\\": \\"si-0007rvzart0a2wpup82m\\",\\n  \\"PrimarySiteId\\": \\"si-0001jntih0phb0i2w1ya\\",\\n  \\"RequestId\\": \\"700F1972-16A2-5639-A937-D2A6D61557B8\\",\\n  \\"Version\\": \\"3.7.3\\",\\n  \\"Code\\": \\"200\\",\\n  \\"SitePairId\\": \\"s-000j6lhiuvdqakqa6k7l\\",\\n  \\"SecondarySiteName\\": \\"杭州D区\\",\\n  \\"CreatedTime\\": 1637293095,\\n  \\"PrimarySiteName\\": \\"杭州F区\\"\\n}","type":"json"}]',
            'title' => '查询站点对信息',
            'summary' => '查询站点对信息。',
        ],
        'EnableReplication' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ServerId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '受保护服务器ID',
                        'description' => '受保护服务器ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sr-0005qxusucbo6yomzb9x',
                    ],
                ],
                [
                    'name' => 'ReplicationUseSsd',
                    'in' => 'query',
                    'schema' => [
                        'title' => '复影实例是否使用SSD云盘',
                        'description' => '复影实例是否使用SSD云盘',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ReplicationUseEssd',
                    'in' => 'query',
                    'schema' => [
                        'title' => '复影实例是否使用ESSD云盘',
                        'description' => '复影实例是否使用ESSD云盘',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ReplicationNetwork',
                    'in' => 'query',
                    'schema' => [
                        'title' => '复制网络VSwitch ID',
                        'description' => '复制网络VSwitch ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-bp1g0s2u3b2kbn46kiy53',
                    ],
                ],
                [
                    'name' => 'RecoveryNetwork',
                    'in' => 'query',
                    'schema' => [
                        'title' => '恢复网络VSwitch ID',
                        'description' => '恢复网络VSwitch ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-bp1g0s2u3b2kbn46kiy53',
                    ],
                ],
                [
                    'name' => 'CrashConsistentPointPolicy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '恢复点策略',
                        'description' => '恢复点策略',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"scheduleType":"CRON","expression":"0 0 */1 * * 0,1,2,3,4,5,6","initialDelay":0}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口状态或POP错误码。取值说明如下：2xx：成功。                                 3xx：重定向。                                 4xx：请求错误。                                 5xx：服务器错误。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '响应消息，若成功，则返回success',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '接口请求唯一标识符。',
                                'type' => 'string',
                                'example' => 'E50FE4A6-C876-5D6F-8A09-93442308AA7B',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"E50FE4A6-C876-5D6F-8A09-93442308AA7B\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '启动复制',
            'summary' => '启动复制。',
        ],
        'DisableReplication' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ServerId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '受保护服务器ID',
                        'description' => '受保护服务器ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sr-000cvyfewfi6fzi9zoql',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口状态或POP错误码。取值说明如下：2xx：成功。                                 3xx：重定向。                                 4xx：请求错误。                                 5xx：服务器错误。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'B7F69F73-51C4-5D3F-B2BE-E1BD99022C15',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"B7F69F73-51C4-5D3F-B2BE-E1BD99022C15\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '停止复制',
            'summary' => '停止复制。',
        ],
        'TestFailover' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ServerId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '受保护服务器ID',
                        'description' => '受保护服务器ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sr-000cvyfewfi7eudxml1a',
                    ],
                ],
                [
                    'name' => 'RecoveryInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '演练的实例名称',
                        'description' => '演练的实例名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-failover-instance',
                    ],
                ],
                [
                    'name' => 'RecoveryCpu',
                    'in' => 'query',
                    'schema' => [
                        'title' => '演练实例的CPU核数',
                        'description' => '演练实例的CPU核数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                        'default' => '2',
                    ],
                ],
                [
                    'name' => 'RecoveryMemory',
                    'in' => 'query',
                    'schema' => [
                        'title' => '演练实例的内存大小，单位MB',
                        'description' => '演练实例的内存大小，单位MB',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '4294967296',
                    ],
                ],
                [
                    'name' => 'RecoveryInstanceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '演练的实例规格，未指定时按照指定的CPU核数、内存大小自动寻找可用规格',
                        'description' => '演练的实例规格，未指定时按照指定的CPU核数、内存大小自动寻找可用规格',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs.c5.large  ',
                        'default' => 'null',
                    ],
                ],
                [
                    'name' => 'RecoveryUseSsd',
                    'in' => 'query',
                    'schema' => [
                        'title' => '演练实例是否使用SSD类型的云盘',
                        'description' => '演练实例是否使用SSD类型的云盘',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'RecoveryUseEssd',
                    'in' => 'query',
                    'schema' => [
                        'title' => '演练实例是否使用ESSD类型的云盘',
                        'description' => '演练实例是否使用ESSD类型的云盘',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'RecoveryNetwork',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '演练实例所在的VSwitch ID',
                        'description' => '演练实例所在的VSwitch ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-bp1g0s2u3b2kbn46kiy53',
                    ],
                ],
                [
                    'name' => 'RecoveryReserveIp',
                    'in' => 'query',
                    'schema' => [
                        'title' => '演练实例是否保留源机的IP（需要演练所在的VSwitch包含相应网段）',
                        'description' => '演练实例是否保留源机的IP（需要演练所在的VSwitch包含相应网段）',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'RecoveryUseDhcp',
                    'in' => 'query',
                    'schema' => [
                        'title' => '演练实例是否使用DHCP指定IP',
                        'description' => '演练实例是否使用DHCP指定IP',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'RecoveryIpAddress',
                    'in' => 'query',
                    'schema' => [
                        'title' => '演练实例的IP',
                        'description' => '演练实例的IP',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10.10.10.10',
                    ],
                ],
                [
                    'name' => 'RecoveryPostScriptType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '演练实例启动后执行脚本类型，可选项：SHELL',
                        'description' => '演练实例启动后执行脚本类型，可选项：SHELL',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SHELL',
                    ],
                ],
                [
                    'name' => 'RecoveryPostScriptContent',
                    'in' => 'query',
                    'schema' => [
                        'title' => '演练实例启动后执行脚本',
                        'description' => '演练实例启动后执行脚本',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'echo \\"127.0.0.1 kubernetes.docker.internal\\" >> /etc/hosts',
                    ],
                ],
                [
                    'name' => 'RecoveryPointId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '演练实例使用的恢复点ID',
                        'description' => '演练实例使用的恢复点ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rp-0001cgurtbrvrkj2p2pp',
                    ],
                ],
                [
                    'name' => 'RecoveryPointTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复点时间，若未指定恢复点ID时，根据恢复点时间查询可用恢复点。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1646046000',
                    ],
                ],
                [
                    'name' => 'EipAddressId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '演练实例绑定的弹性公网IP ID',
                        'description' => '演练实例绑定的弹性公网IP ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eip-bp1nf283u9p060q4gim7m',
                    ],
                ],
                [
                    'name' => 'RecoveryEssdPerformanceLevel',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ESSD盘的PL等级，支持的PL等级按照最小的云盘大小进行判断',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PL3',
                        'default' => 'PL1',
                        'enum' => [
                            'PL0',
                            'PL1',
                            'PL2',
                            'PL3',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID，具有唯一性。',
                                'type' => 'string',
                                'example' => '6758891B-CF5A-5CA6-BF59-633573B91140',
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 't-000h3k00ckeknbukn5a5',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"6758891B-CF5A-5CA6-BF59-633573B91140\\",\\n  \\"TaskId\\": \\"t-000h3k00ckeknbukn5a5\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '容灾演练',
            'summary' => '容灾演练。',
        ],
        'TestCleanup' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ServerId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '受保护服务器ID',
                        'description' => '受保护服务器ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sr-000cvyfewfi6fzi9zoql',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '531E3DB9-3ED6-5F06-A09A-721F279CB64B',
                            ],
                            'TaskId' => [
                                'description' => '任务id。',
                                'type' => 'string',
                                'example' => 't-000bzkmmlwh6tpzhitdz',
                            ],
                            'Success' => [
                                'description' => '操作是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"531E3DB9-3ED6-5F06-A09A-721F279CB64B\\",\\n  \\"TaskId\\": \\"t-000bzkmmlwh6tpzhitdz\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '清理容灾演练环境',
            'summary' => '清理容灾演练环境。',
        ],
        'DescribeRecoveryPoints' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ServerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '受保护服务器ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sr-0008fj9dbe1xzlg6805i',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间，从开始时间查询可用恢复点',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1633503912',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回消息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8260C928-1A54-545A-A3F2-51E6327D28E6',
                            ],
                            'TotalCount' => [
                                'description' => '可用恢复点的总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '15',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'RecoveryPoints' => [
                                'type' => 'object',
                                'properties' => [
                                    'recoveryPoint' => [
                                        'description' => '恢复点信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '恢复点信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ApplicationConsistent' => [
                                                    'description' => '恢复点是否满足应用一致性',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'RecoveryPointTime' => [
                                                    'description' => '恢复点时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1637118000',
                                                ],
                                                'Disabled' => [
                                                    'description' => '恢复点是否被禁用。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'RecoveryPointId' => [
                                                    'description' => '恢复点ID',
                                                    'type' => 'string',
                                                    'example' => 'rp-0000syrdl2f8a7te4063',
                                                ],
                                                'Used' => [
                                                    'description' => '恢复点是否已被使用',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'DisableReason' => [
                                                    'description' => '恢复点被禁用的原因',
                                                    'type' => 'string',
                                                    'example' => 'inconsistent',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"8260C928-1A54-545A-A3F2-51E6327D28E6\\",\\n  \\"TotalCount\\": 15,\\n  \\"Success\\": true,\\n  \\"RecoveryPoints\\": {\\n    \\"recoveryPoint\\": [\\n      {\\n        \\"ApplicationConsistent\\": false,\\n        \\"RecoveryPointTime\\": 1637118000,\\n        \\"Disabled\\": false,\\n        \\"RecoveryPointId\\": \\"rp-0000syrdl2f8a7te4063\\",\\n        \\"Used\\": false,\\n        \\"DisableReason\\": \\"inconsistent\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询可用恢复点',
            'summary' => '查询可用恢复点。',
        ],
        'ChangeRecoveryPoint' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ServerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '受保护服务器ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sr-000bak4sdet6gv8q0c2j',
                    ],
                ],
                [
                    'name' => 'RecoveryInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复的实例名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HDR_Recovery-sr-000c9550g8gycc8oi4fb-cpr',
                    ],
                ],
                [
                    'name' => 'RecoveryCpu',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复的实例CPU核数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'RecoveryMemory',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复的实例内存大小',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '4294967296',
                    ],
                ],
                [
                    'name' => 'RecoveryInstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复的实例规格',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs.r6.3xlarge',
                    ],
                ],
                [
                    'name' => 'RecoveryUseSsd',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复的实例是否使用SSD',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'RecoveryUseEssd',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复的实例是否使用ESSD',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'RecoveryNetwork',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复的实例所在的VSwitch ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-uf61v3bg6r790ir22jqv4',
                    ],
                ],
                [
                    'name' => 'RecoveryReserveIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复的实例是否保留源机IP',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'RecoveryUseDhcp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复的实例是否使用DHCP分配IP',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'RecoveryIpAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复的实例手动指定IP',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.2.2',
                    ],
                ],
                [
                    'name' => 'RecoveryPostScriptType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复的实例启动后执行的脚本类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SHELL',
                    ],
                ],
                [
                    'name' => 'RecoveryPostScriptContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复的实例启动后执行的脚本内容',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'echo \\"127.0.0.1 kubernetes.docker.internal\\" >> /etc/hosts',
                    ],
                ],
                [
                    'name' => 'RecoveryPointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复点ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rp-0001625ljmig7ahibe0y',
                    ],
                ],
                [
                    'name' => 'RecoveryPointTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复点时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1637002799',
                    ],
                ],
                [
                    'name' => 'EipAddressId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复的实例绑定的弹性网卡ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eip-2zelae2qye2ztjfj82f9z',
                    ],
                ],
                [
                    'name' => 'RecoveryEssdPerformanceLevel',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ESSD盘的PL等级，支持的PL等级按照最小的云盘大小进行判断',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PL1',
                        'default' => 'PL1',
                        'enum' => [
                            'PL0',
                            'PL1',
                            'PL2',
                            'PL3',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BBCC4082-98DF-5804-96C6-0E74C37C5867',
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 't-0007wl5r0hvxrj68rrbg',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"BBCC4082-98DF-5804-96C6-0E74C37C5867\\",\\n  \\"TaskId\\": \\"t-0007wl5r0hvxrj68rrbg\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '更换恢复点',
            'summary' => '更换恢复点。',
        ],
        'CommitFailover' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ServerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '受保护的服务器ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sr-000bzkmmlwghq3soqry2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '18603D03-FEA4-5FA8-878F-B03F11578F5F',
                            ],
                            'TaskId' => [
                                'description' => '任务ID',
                                'type' => 'string',
                                'example' => 't-0007wl5r0hvxrj68rrbg',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"18603D03-FEA4-5FA8-878F-B03F11578F5F\\",\\n  \\"TaskId\\": \\"t-0007wl5r0hvxrj68rrbg\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '确认故障切换',
            'summary' => '确认故障切换。',
        ],
        'ForcedFailover' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ServerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '受保护服务器ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sr-000ih1rl47q6hksc910d',
                    ],
                ],
                [
                    'name' => 'RecoveryInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '故障切换的实例名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HDR_Recovery-sr-000bzkmmlwghq3soqry2',
                    ],
                ],
                [
                    'name' => 'RecoveryCpu',
                    'in' => 'query',
                    'schema' => [
                        'description' => '故障切换的实例CPU核数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'RecoveryMemory',
                    'in' => 'query',
                    'schema' => [
                        'description' => '故障切换的实例内存大小',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '4294967296',
                    ],
                ],
                [
                    'name' => 'RecoveryInstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '故障切换的实例规格',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs.r5.3xlarge',
                    ],
                ],
                [
                    'name' => 'RecoveryUseSsd',
                    'in' => 'query',
                    'schema' => [
                        'description' => '故障切换的实例云盘类型是否使用SSD',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'RecoveryUseEssd',
                    'in' => 'query',
                    'schema' => [
                        'description' => '故障切换的实例云盘类型是否使用ESSD',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'RecoveryNetwork',
                    'in' => 'query',
                    'schema' => [
                        'description' => '故障切换的实例所在的VSwitch ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-bp1fh05y7ybq9kep6rtwu',
                    ],
                ],
                [
                    'name' => 'RecoveryReserveIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '故障切换的实例是否保留源机IP',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'RecoveryUseDhcp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '故障切换的实例是否使用DHCP分配IP',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'RecoveryIpAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '故障切换的实例手动设置IP',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.2.2',
                    ],
                ],
                [
                    'name' => 'RecoveryPostScriptType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '故障切换的实例启动后执行的脚本类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SHELL',
                    ],
                ],
                [
                    'name' => 'RecoveryPostScriptContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '故障切换的实例启动后执行的脚本内容',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'echo \\"127.0.0.1 kubernetes.docker.internal\\" >> /etc/hosts',
                    ],
                ],
                [
                    'name' => 'RecoveryPointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复点ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rp-000184qxs690bth6jyqn',
                    ],
                ],
                [
                    'name' => 'RecoveryPointTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复点时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1636526948',
                    ],
                ],
                [
                    'name' => 'EipAddressId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '故障切换的实例绑定的弹性网卡ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eip-bp1x7nua6eab8m4vsis9k',
                    ],
                ],
                [
                    'name' => 'RecoveryEssdPerformanceLevel',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ESSD盘的PL等级，支持的PL等级按照最小的云盘大小进行判断',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PL2',
                        'default' => 'PL1',
                        'enum' => [
                            'PL0',
                            'PL1',
                            'PL2',
                            'PL3',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '26DF0E81-08E2-5AE3-96AA-05F5F826261C',
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 't-000ios55mggw4ifiy3nc',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"26DF0E81-08E2-5AE3-96AA-05F5F826261C\\",\\n  \\"TaskId\\": \\"t-000ios55mggw4ifiy3nc\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '故障切换',
            'summary' => '故障切换。',
        ],
        'TriggerReversedRegister' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ServerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '受保护服务器ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sr-0007rvzart0bneyhl4q1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '1D39F0BE-B3F9-5AA9-AD49-BE8CD7B4BF7B',
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 't-000fzufp79idzl6bniso',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"1D39F0BE-B3F9-5AA9-AD49-BE8CD7B4BF7B\\",\\n  \\"TaskId\\": \\"t-000fzufp79idzl6bniso\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '反向注册',
            'summary' => '反向注册，将完成故障切换的实例从目的端站点反向注册到源端站点，为后续启动反向复制实现故障恢复做准备。',
        ],
        'DescribeInfrastructures' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SiteId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '站点ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'si-0005btelnqjwguycypba',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页参数：当前页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
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
                                'example' => '32AC7E7F-5484-548D-8D3F-905238B75080',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'PageSize' => [
                                'description' => '分页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '分页参数：当前页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'TotalCount' => [
                                'description' => '总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Infrastructures' => [
                                'type' => 'object',
                                'properties' => [
                                    'infrastructure' => [
                                        'description' => '基础设施信息列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '基础设施信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'description' => '基础设施类型',
                                                    'type' => 'string',
                                                    'example' => 'aliyun',
                                                ],
                                                'Status' => [
                                                    'description' => '状态',
                                                    'type' => 'string',
                                                    'example' => 'connected',
                                                ],
                                                'IpAddress' => [
                                                    'description' => 'IP地址',
                                                    'type' => 'string',
                                                    'example' => '172.18.122.66',
                                                ],
                                                'InfrastructureId' => [
                                                    'description' => '基础设施ID',
                                                    'type' => 'string',
                                                    'example' => 'is-0005qxusucbig0c42dlo',
                                                ],
                                                'Errno' => [
                                                    'description' => '状态异常原因',
                                                    'type' => 'string',
                                                    'example' => 'cdr.console.plugin.failed_to_connect',
                                                ],
                                                'Name' => [
                                                    'description' => '基础设施名称',
                                                    'type' => 'string',
                                                    'example' => 'si-0006w0mxd3w8jiifu77l-infrastructure1',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"32AC7E7F-5484-548D-8D3F-905238B75080\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 2,\\n  \\"TotalCount\\": 1,\\n  \\"Infrastructures\\": {\\n    \\"infrastructure\\": [\\n      {\\n        \\"Type\\": \\"aliyun\\",\\n        \\"Status\\": \\"connected\\",\\n        \\"IpAddress\\": \\"172.18.122.66\\",\\n        \\"InfrastructureId\\": \\"is-0005qxusucbig0c42dlo\\",\\n        \\"Errno\\": \\"cdr.console.plugin.failed_to_connect\\",\\n        \\"Name\\": \\"si-0006w0mxd3w8jiifu77l-infrastructure1\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询站点基础设施',
            'summary' => '查询站点基础设施信息，混合云容灾服务支持IDC上云容灾、跨区域容灾、跨可用区容灾，不同场景下站点使用的基础设施不同，例如IDC上云容灾的源端站点可能使用物理机、VCenter作为基础设施；跨区域容灾与跨可用区容灾目前主要使用阿里云作为基础设施。',
        ],
        'ReversedEnableReplication' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ServerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '受保护服务器ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sr-000cm9ax8sh2381wa7kv',
                    ],
                ],
                [
                    'name' => 'ReplicationUseOriginalInstance',
                    'in' => 'query',
                    'schema' => [
                        'description' => '反向复制使用源机',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ReplicationInfrastructureId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标站点基础设施ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'is-000bzkmmlwgibbduuoff',
                    ],
                ],
                [
                    'name' => 'ReplicationLocation',
                    'in' => 'query',
                    'schema' => [
                        'description' => '-',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'ReplicationComputeResource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '-',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'ReplicationDatastore',
                    'in' => 'query',
                    'schema' => [
                        'description' => '-',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'ReplicationNetwork',
                    'in' => 'query',
                    'schema' => [
                        'description' => '反向复制的复制网络VSwitch ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-bp1ii4x07tey6sisg4blp',
                    ],
                ],
                [
                    'name' => 'ReplicationUseDhcp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '-',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'ReplicationIpAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '-',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'ReplicationNetMask',
                    'in' => 'query',
                    'schema' => [
                        'description' => '-',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'ReplicationDns',
                    'in' => 'query',
                    'schema' => [
                        'description' => '-',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'ReplicationGateway',
                    'in' => 'query',
                    'schema' => [
                        'description' => '-',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'RecoveryNetwork',
                    'in' => 'query',
                    'schema' => [
                        'description' => '反向复制的恢复网络VSwitch ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-bp1xmea0mkjtxqoubk7q8',
                    ],
                ],
                [
                    'name' => 'CrashConsistentPointPolicy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '-',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'AppConsistentPointPolicy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '-',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'ShadowInstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '-',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口返回码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D5CF3A51-1F39-5B16-AC0C-AD9B632D100D',
                            ],
                            'TaskId' => [
                                'description' => '任务id。',
                                'type' => 'string',
                                'example' => 't-0004ka624vrxwublmqw6',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"D5CF3A51-1F39-5B16-AC0C-AD9B632D100D\\",\\n  \\"TaskId\\": \\"t-0004ka624vrxwublmqw6\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '启动反向复制',
            'summary' => '启动反向复制。',
        ],
        'ReversedDisableReplication' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ServerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '受保护服务器ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sr-000cm9ax8sh2i6pc16u9',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口返回码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '5904D638-152A-5F1F-8652-E535EABF3ABA',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"5904D638-152A-5F1F-8652-E535EABF3ABA\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '停止反向复制',
            'summary' => '停止反向复制。',
        ],
        'Failback' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ServerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '受保护服务器ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sr-000bzkmmlwghj95tnx15',
                    ],
                ],
                [
                    'name' => 'RecoveryInfrastructureId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复站点基础设施ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'is-0007rvzart0rz2byr2x0',
                    ],
                ],
                [
                    'name' => 'RecoveryInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '容灾恢复的实例名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HDR_Recovery-sr-0007rvzart0rz2bv9fzm',
                    ],
                ],
                [
                    'name' => 'RecoveryCpu',
                    'in' => 'query',
                    'schema' => [
                        'description' => '容灾恢复的实例CPU核数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'RecoveryMemory',
                    'in' => 'query',
                    'schema' => [
                        'description' => '容灾恢复的实例内存大小，单位MB',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '4294967296',
                    ],
                ],
                [
                    'name' => 'RecoveryInstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '容灾恢复的实例规格，若未指定，将根据CPU核数和内存大小自动寻找可用的实例规格',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs.c5.2xlarge',
                    ],
                ],
                [
                    'name' => 'RecoveryNetwork',
                    'in' => 'query',
                    'schema' => [
                        'description' => '故障恢复的实例所在的VSwitch ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-bp1xmea0mkjtxqoubk7q8',
                    ],
                ],
                [
                    'name' => 'RecoveryReserveIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '故障恢复的实例保留原有IP',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'RecoveryUseDhcp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '故障恢复的实例使用DHCP分配IP',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'RecoveryIpAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '故障恢复的实例手动设置IP',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.2.2',
                    ],
                ],
                [
                    'name' => 'RecoveryPostScriptType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '故障恢复的实例启动后执行的脚本类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SHELL',
                    ],
                ],
                [
                    'name' => 'RecoveryPostScriptContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '故障恢复的实例启动后执行的脚本内容',
                        'type' => 'string',
                        'required' => false,
                        'example' => '"echo \\"127.0.0.1 kubernetes.docker.internal\\" >> /etc/hosts"',
                    ],
                ],
                [
                    'name' => 'RecoveryPointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复点ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rp-0001625ljmig7ahibe0y',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '56CF7F68-C07B-5BE2-BE82-09D8E9719076',
                            ],
                            'TaskId' => [
                                'description' => '任务id。',
                                'type' => 'string',
                                'example' => 't-0004ka624vrza82g46ne',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"56CF7F68-C07B-5BE2-BE82-09D8E9719076\\",\\n  \\"TaskId\\": \\"t-0004ka624vrza82g46ne\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '故障恢复',
            'summary' => '故障恢复。',
        ],
        'CreateRecoveryPlan' => [
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'SitePairId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '站点对ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 's-xxxxxxxxxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复计划名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test1',
                    ],
                ],
                [
                    'name' => 'Direction',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复计划的方向，支持**forward**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'forward',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复计划详情。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'    "groups": ['."\n"
                            .'        {'."\n"
                            .'            "name": "Group-1",'."\n"
                            .'            "id": "Group-1",'."\n"
                            .'            "servers": ['."\n"
                            .'                {'."\n"
                            .'                    "name": "sr-xxxxxxxxxxxxxxxxxx",'."\n"
                            .'                    "serverId": "sr-xxxxxxxxxxxxxxxxxx",'."\n"
                            .'                    "testFailoverAction": {'."\n"
                            .'                        "eipAddressId": "",'."\n"
                            .'                        "recoveryPostScriptContent": "",'."\n"
                            .'                        "recoveryPostScriptType": "POWERSHELL",'."\n"
                            .'                        "recoveryInstanceName": "HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-tfo",'."\n"
                            .'                        "recoveryCpu": 2,'."\n"
                            .'                        "recoveryMemory": 4294967296,'."\n"
                            .'                        "recoveryUseEssd": false,'."\n"
                            .'                        "recoveryUseSsd": false,'."\n"
                            .'                        "recoveryReserveIp": false,'."\n"
                            .'                        "recoveryUseDhcp": true,'."\n"
                            .'                        "recoveryIpAddress": "",'."\n"
                            .'                        "recoveryNetwork": "vsw-xxxxxxxxxxxxxxxxxx"'."\n"
                            .'                    },'."\n"
                            .'                    "testCleanupAction": {},'."\n"
                            .'                    "changeRecoveryPointAction": {'."\n"
                            .'                        "eipAddressId": "",'."\n"
                            .'                        "recoveryPostScriptContent": "",'."\n"
                            .'                        "recoveryPostScriptType": "POWERSHELL",'."\n"
                            .'                        "recoveryInstanceName": "HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-cpr",'."\n"
                            .'                        "recoveryCpu": 2,'."\n"
                            .'                        "recoveryMemory": 4294967296,'."\n"
                            .'                        "recoveryUseEssd": false,'."\n"
                            .'                        "recoveryUseSsd": false,'."\n"
                            .'                        "recoveryReserveIp": false,'."\n"
                            .'                        "recoveryUseDhcp": true,'."\n"
                            .'                        "recoveryIpAddress": "",'."\n"
                            .'                        "recoveryNetwork": "vsw-xxxxxxxxxxxxxxxxxx"'."\n"
                            .'                    },'."\n"
                            .'                    "forcedFailoverAction": {'."\n"
                            .'                        "eipAddressId": "",'."\n"
                            .'                        "recoveryPostScriptContent": "",'."\n"
                            .'                        "recoveryPostScriptType": "POWERSHELL",'."\n"
                            .'                        "recoveryInstanceName": "HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-ffo",'."\n"
                            .'                        "recoveryCpu": 2,'."\n"
                            .'                        "recoveryMemory": 4294967296,'."\n"
                            .'                        "recoveryUseEssd": false,'."\n"
                            .'                        "recoveryUseSsd": false,'."\n"
                            .'                        "recoveryReserveIp": false,'."\n"
                            .'                        "recoveryUseDhcp": true,'."\n"
                            .'                        "recoveryIpAddress": "",'."\n"
                            .'                        "recoveryNetwork": "vsw-xxxxxxxxxxxxxxxxxx"'."\n"
                            .'                    }'."\n"
                            .'                }'."\n"
                            .'            ]'."\n"
                            .'        }'."\n"
                            .'    ]'."\n"
                            .'}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FEC3D491-15BB-5C8F-902E-773794FF1B29',
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 't-00055g8sxr0ys0g99n83',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"FEC3D491-15BB-5C8F-902E-773794FF1B29\\",\\n  \\"TaskId\\": \\"t-00055g8sxr0ys0g99n83\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '创建恢复计划',
            'summary' => '创建恢复计划。',
        ],
        'DeleteRecoveryPlan' => [
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'RecoveryPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复计划ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rp-xxxxxxxxxxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '36C9E5CF-D575-5074-9A3E-79251448D708',
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 't-0006ezqwy1swxqgcrfvx',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"36C9E5CF-D575-5074-9A3E-79251448D708\\",\\n  \\"TaskId\\": \\"t-0006ezqwy1swxqgcrfvx\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '删除恢复计划',
            'summary' => '根据恢复计划ID删除指定的恢复计划。',
        ],
        'DescribeRecoveryPlan' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RecoveryPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复计划ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rp-xxxxxxxxxxxxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '恢复计划状态。其中，'."\n"
                                    ."\n"
                                    .'- **creating**：创建中'."\n"
                                    .'- **updating**：更新中'."\n"
                                    .'- **deleting**：删除中'."\n"
                                    .'- **failed**：失败'."\n"
                                    .'- **init**：已初始化'."\n"
                                    .'- **running**：执行中',
                                'type' => 'string',
                                'example' => 'init',
                            ],
                            'Direction' => [
                                'description' => '恢复计划的方向，支持**forward**。',
                                'type' => 'string',
                                'example' => 'forward',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6F3884EC-AECB-52EF-AFE3-BC13A9688DEB',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '返回码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'Name' => [
                                'description' => '恢复计划名称。',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'Content' => [
                                'description' => '恢复计划详情。',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'    "groups": ['."\n"
                                    .'        {'."\n"
                                    .'            "name": "Group-1",'."\n"
                                    .'            "id": "Group-1",'."\n"
                                    .'            "servers": ['."\n"
                                    .'                {'."\n"
                                    .'                    "name": "sr-xxxxxxxxxxxxxxxxxx",'."\n"
                                    .'                    "serverId": "sr-xxxxxxxxxxxxxxxxxx",'."\n"
                                    .'                    "testFailoverAction": {'."\n"
                                    .'                        "eipAddressId": "",'."\n"
                                    .'                        "recoveryPostScriptContent": "",'."\n"
                                    .'                        "recoveryPostScriptType": "POWERSHELL",'."\n"
                                    .'                        "recoveryInstanceName": "HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-tfo",'."\n"
                                    .'                        "recoveryCpu": 2,'."\n"
                                    .'                        "recoveryMemory": 4294967296,'."\n"
                                    .'                        "recoveryUseEssd": false,'."\n"
                                    .'                        "recoveryUseSsd": false,'."\n"
                                    .'                        "recoveryReserveIp": false,'."\n"
                                    .'                        "recoveryUseDhcp": true,'."\n"
                                    .'                        "recoveryIpAddress": "",'."\n"
                                    .'                        "recoveryNetwork": "vsw-xxxxxxxxxxxxxxxxxx"'."\n"
                                    .'                    },'."\n"
                                    .'                    "testCleanupAction": {},'."\n"
                                    .'                    "changeRecoveryPointAction": {'."\n"
                                    .'                        "eipAddressId": "",'."\n"
                                    .'                        "recoveryPostScriptContent": "",'."\n"
                                    .'                        "recoveryPostScriptType": "POWERSHELL",'."\n"
                                    .'                        "recoveryInstanceName": "HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-cpr",'."\n"
                                    .'                        "recoveryCpu": 2,'."\n"
                                    .'                        "recoveryMemory": 4294967296,'."\n"
                                    .'                        "recoveryUseEssd": false,'."\n"
                                    .'                        "recoveryUseSsd": false,'."\n"
                                    .'                        "recoveryReserveIp": false,'."\n"
                                    .'                        "recoveryUseDhcp": true,'."\n"
                                    .'                        "recoveryIpAddress": "",'."\n"
                                    .'                        "recoveryNetwork": "vsw-xxxxxxxxxxxxxxxxxx"'."\n"
                                    .'                    },'."\n"
                                    .'                    "forcedFailoverAction": {'."\n"
                                    .'                        "eipAddressId": "",'."\n"
                                    .'                        "recoveryPostScriptContent": "",'."\n"
                                    .'                        "recoveryPostScriptType": "POWERSHELL",'."\n"
                                    .'                        "recoveryInstanceName": "HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-ffo",'."\n"
                                    .'                        "recoveryCpu": 2,'."\n"
                                    .'                        "recoveryMemory": 4294967296,'."\n"
                                    .'                        "recoveryUseEssd": false,'."\n"
                                    .'                        "recoveryUseSsd": false,'."\n"
                                    .'                        "recoveryReserveIp": false,'."\n"
                                    .'                        "recoveryUseDhcp": true,'."\n"
                                    .'                        "recoveryIpAddress": "",'."\n"
                                    .'                        "recoveryNetwork": "vsw-xxxxxxxxxxxxxxxxxx"'."\n"
                                    .'                    }'."\n"
                                    .'                }'."\n"
                                    .'            ]'."\n"
                                    .'        }'."\n"
                                    .'    ]'."\n"
                                    .'}',
                            ],
                            'RecoveryPlanId' => [
                                'description' => '恢复计划ID。',
                                'type' => 'string',
                                'example' => 'rp-xxxxxxxxxxxxxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"init\\",\\n  \\"Direction\\": \\"forward\\",\\n  \\"RequestId\\": \\"6F3884EC-AECB-52EF-AFE3-BC13A9688DEB\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Name\\": \\"test\\",\\n  \\"Content\\": \\"{\\\\n    \\\\\\"groups\\\\\\": [\\\\n        {\\\\n            \\\\\\"name\\\\\\": \\\\\\"Group-1\\\\\\",\\\\n            \\\\\\"id\\\\\\": \\\\\\"Group-1\\\\\\",\\\\n            \\\\\\"servers\\\\\\": [\\\\n                {\\\\n                    \\\\\\"name\\\\\\": \\\\\\"sr-xxxxxxxxxxxxxxxxxx\\\\\\",\\\\n                    \\\\\\"serverId\\\\\\": \\\\\\"sr-xxxxxxxxxxxxxxxxxx\\\\\\",\\\\n                    \\\\\\"testFailoverAction\\\\\\": {\\\\n                        \\\\\\"eipAddressId\\\\\\": \\\\\\"\\\\\\",\\\\n                        \\\\\\"recoveryPostScriptContent\\\\\\": \\\\\\"\\\\\\",\\\\n                        \\\\\\"recoveryPostScriptType\\\\\\": \\\\\\"POWERSHELL\\\\\\",\\\\n                        \\\\\\"recoveryInstanceName\\\\\\": \\\\\\"HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-tfo\\\\\\",\\\\n                        \\\\\\"recoveryCpu\\\\\\": 2,\\\\n                        \\\\\\"recoveryMemory\\\\\\": 4294967296,\\\\n                        \\\\\\"recoveryUseEssd\\\\\\": false,\\\\n                        \\\\\\"recoveryUseSsd\\\\\\": false,\\\\n                        \\\\\\"recoveryReserveIp\\\\\\": false,\\\\n                        \\\\\\"recoveryUseDhcp\\\\\\": true,\\\\n                        \\\\\\"recoveryIpAddress\\\\\\": \\\\\\"\\\\\\",\\\\n                        \\\\\\"recoveryNetwork\\\\\\": \\\\\\"vsw-xxxxxxxxxxxxxxxxxx\\\\\\"\\\\n                    },\\\\n                    \\\\\\"testCleanupAction\\\\\\": {},\\\\n                    \\\\\\"changeRecoveryPointAction\\\\\\": {\\\\n                        \\\\\\"eipAddressId\\\\\\": \\\\\\"\\\\\\",\\\\n                        \\\\\\"recoveryPostScriptContent\\\\\\": \\\\\\"\\\\\\",\\\\n                        \\\\\\"recoveryPostScriptType\\\\\\": \\\\\\"POWERSHELL\\\\\\",\\\\n                        \\\\\\"recoveryInstanceName\\\\\\": \\\\\\"HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-cpr\\\\\\",\\\\n                        \\\\\\"recoveryCpu\\\\\\": 2,\\\\n                        \\\\\\"recoveryMemory\\\\\\": 4294967296,\\\\n                        \\\\\\"recoveryUseEssd\\\\\\": false,\\\\n                        \\\\\\"recoveryUseSsd\\\\\\": false,\\\\n                        \\\\\\"recoveryReserveIp\\\\\\": false,\\\\n                        \\\\\\"recoveryUseDhcp\\\\\\": true,\\\\n                        \\\\\\"recoveryIpAddress\\\\\\": \\\\\\"\\\\\\",\\\\n                        \\\\\\"recoveryNetwork\\\\\\": \\\\\\"vsw-xxxxxxxxxxxxxxxxxx\\\\\\"\\\\n                    },\\\\n                    \\\\\\"forcedFailoverAction\\\\\\": {\\\\n                        \\\\\\"eipAddressId\\\\\\": \\\\\\"\\\\\\",\\\\n                        \\\\\\"recoveryPostScriptContent\\\\\\": \\\\\\"\\\\\\",\\\\n                        \\\\\\"recoveryPostScriptType\\\\\\": \\\\\\"POWERSHELL\\\\\\",\\\\n                        \\\\\\"recoveryInstanceName\\\\\\": \\\\\\"HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-ffo\\\\\\",\\\\n                        \\\\\\"recoveryCpu\\\\\\": 2,\\\\n                        \\\\\\"recoveryMemory\\\\\\": 4294967296,\\\\n                        \\\\\\"recoveryUseEssd\\\\\\": false,\\\\n                        \\\\\\"recoveryUseSsd\\\\\\": false,\\\\n                        \\\\\\"recoveryReserveIp\\\\\\": false,\\\\n                        \\\\\\"recoveryUseDhcp\\\\\\": true,\\\\n                        \\\\\\"recoveryIpAddress\\\\\\": \\\\\\"\\\\\\",\\\\n                        \\\\\\"recoveryNetwork\\\\\\": \\\\\\"vsw-xxxxxxxxxxxxxxxxxx\\\\\\"\\\\n                    }\\\\n                }\\\\n            ]\\\\n        }\\\\n    ]\\\\n}\\",\\n  \\"RecoveryPlanId\\": \\"rp-xxxxxxxxxxxxxxxxxx\\"\\n}","type":"json"}]',
            'title' => '查询恢复计划详情',
            'summary' => '查询恢复计划详情。',
        ],
        'DescribeRecoveryPlans' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'SitePairId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '站点对ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 's-0005qxusucbii5ab6wuj',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的页数，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页行数，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
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
                                'example' => 'F2812CD7-03E7-5774-9EE5-827D8398A670',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '接口返回码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时的每页行数，最大值：100默认值：10',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '分页查询的当前页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '恢复计划数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RecoveryPlans' => [
                                'type' => 'object',
                                'properties' => [
                                    'recoveryPlan' => [
                                        'description' => '恢复计划列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '恢复计划详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '恢复计划状态。其中，'."\n"
                                                        ."\n"
                                                        .'- **creating**：创建中'."\n"
                                                        .'- **updating**：更新中'."\n"
                                                        .'- **deleting**：删除中'."\n"
                                                        .'- **failed**：失败'."\n"
                                                        .'- **init**：已初始化'."\n"
                                                        .'- **running**：执行中',
                                                    'type' => 'string',
                                                    'example' => 'init',
                                                ],
                                                'Direction' => [
                                                    'description' => '恢复计划的方向，支持**forward**。',
                                                    'type' => 'string',
                                                    'example' => 'forward',
                                                ],
                                                'Name' => [
                                                    'description' => '恢复计划名称。',
                                                    'type' => 'string',
                                                    'example' => 'test-1',
                                                ],
                                                'RecoveryPlanId' => [
                                                    'description' => '恢复计划ID。',
                                                    'type' => 'string',
                                                    'example' => 'rp-xxxxxxxxxxxxxxxxxx',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F2812CD7-03E7-5774-9EE5-827D8398A670\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"RecoveryPlans\\": {\\n    \\"recoveryPlan\\": [\\n      {\\n        \\"Status\\": \\"init\\",\\n        \\"Direction\\": \\"forward\\",\\n        \\"Name\\": \\"test-1\\",\\n        \\"RecoveryPlanId\\": \\"rp-xxxxxxxxxxxxxxxxxx\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询恢复计划列表',
            'summary' => '查询站点对中的恢复计划列表。',
        ],
        'UpdateRecoveryPlan' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RecoveryPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复计划ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rp-xxxxxxxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复计划名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-1',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复计划详情。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'    "groups": ['."\n"
                            .'        {'."\n"
                            .'            "name": "Group-1",'."\n"
                            .'            "id": "Group-1",'."\n"
                            .'            "servers": ['."\n"
                            .'                {'."\n"
                            .'                    "name": "sr-xxxxxxxxxxxxxxxxxx",'."\n"
                            .'                    "serverId": "sr-xxxxxxxxxxxxxxxxxx",'."\n"
                            .'                    "testFailoverAction": {'."\n"
                            .'                        "eipAddressId": "",'."\n"
                            .'                        "recoveryPostScriptContent": "",'."\n"
                            .'                        "recoveryPostScriptType": "POWERSHELL",'."\n"
                            .'                        "recoveryInstanceName": "HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-tfo",'."\n"
                            .'                        "recoveryCpu": 2,'."\n"
                            .'                        "recoveryMemory": 4294967296,'."\n"
                            .'                        "recoveryUseEssd": false,'."\n"
                            .'                        "recoveryUseSsd": false,'."\n"
                            .'                        "recoveryReserveIp": false,'."\n"
                            .'                        "recoveryUseDhcp": true,'."\n"
                            .'                        "recoveryIpAddress": "",'."\n"
                            .'                        "recoveryNetwork": "vsw-xxxxxxxxxxxxxxxxxx"'."\n"
                            .'                    },'."\n"
                            .'                    "testCleanupAction": {},'."\n"
                            .'                    "changeRecoveryPointAction": {'."\n"
                            .'                        "eipAddressId": "",'."\n"
                            .'                        "recoveryPostScriptContent": "",'."\n"
                            .'                        "recoveryPostScriptType": "POWERSHELL",'."\n"
                            .'                        "recoveryInstanceName": "HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-cpr",'."\n"
                            .'                        "recoveryCpu": 2,'."\n"
                            .'                        "recoveryMemory": 4294967296,'."\n"
                            .'                        "recoveryUseEssd": false,'."\n"
                            .'                        "recoveryUseSsd": false,'."\n"
                            .'                        "recoveryReserveIp": false,'."\n"
                            .'                        "recoveryUseDhcp": true,'."\n"
                            .'                        "recoveryIpAddress": "",'."\n"
                            .'                        "recoveryNetwork": "vsw-xxxxxxxxxxxxxxxxxx"'."\n"
                            .'                    },'."\n"
                            .'                    "forcedFailoverAction": {'."\n"
                            .'                        "eipAddressId": "",'."\n"
                            .'                        "recoveryPostScriptContent": "",'."\n"
                            .'                        "recoveryPostScriptType": "POWERSHELL",'."\n"
                            .'                        "recoveryInstanceName": "HDR_Recovery-sr-xxxxxxxxxxxxxxxxxx-ffo",'."\n"
                            .'                        "recoveryCpu": 2,'."\n"
                            .'                        "recoveryMemory": 4294967296,'."\n"
                            .'                        "recoveryUseEssd": false,'."\n"
                            .'                        "recoveryUseSsd": false,'."\n"
                            .'                        "recoveryReserveIp": false,'."\n"
                            .'                        "recoveryUseDhcp": true,'."\n"
                            .'                        "recoveryIpAddress": "",'."\n"
                            .'                        "recoveryNetwork": "vsw-xxxxxxxxxxxxxxxxxx"'."\n"
                            .'                    }'."\n"
                            .'                }'."\n"
                            .'            ]'."\n"
                            .'        }'."\n"
                            .'    ]'."\n"
                            .'}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F1B86896-AB3E-5861-9E33-10486F056BB3',
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 't-000ir69ra7neqp2p4qdv',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"F1B86896-AB3E-5861-9E33-10486F056BB3\\",\\n  \\"TaskId\\": \\"t-000ir69ra7neqp2p4qdv\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '编辑恢复计划',
            'summary' => '编辑恢复计划内容。',
        ],
        'DescribeAvailableInstanceTypes' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可用区ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-beijing-g',
                    ],
                ],
                [
                    'name' => 'DiskType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '磁盘类型',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'cloud_efficiency,cloud_essd,cloud_ssd' => 'cloud_efficiency,cloud_essd,cloud_ssd',
                        ],
                        'example' => 'cloud_efficiency',
                    ],
                ],
                [
                    'name' => 'ChargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '付费类型',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'PostPaid' => 'PostPaid',
                            'PrePaid' => 'PrePaid',
                        ],
                        'example' => 'PostPaid',
                        'default' => 'PostPaid',
                        'enum' => [
                            'PostPaid',
                            'PrePaid',
                        ],
                    ],
                ],
                [
                    'name' => 'Network',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络类型',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'classic' => 'classic',
                            'vpc' => 'vpc',
                        ],
                        'example' => 'vpc',
                        'default' => 'vpc',
                    ],
                ],
                [
                    'name' => 'IoOptimized',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否属于IO优化型实例',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序依据',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'memory' => 'memory',
                            'vcpu' => 'vcpu',
                        ],
                        'example' => 'vcpu',
                        'default' => 'network',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序方式',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'asc' => 'asc',
                            'desc' => 'desc',
                        ],
                        'example' => 'asc',
                        'default' => 'desc',
                        'enum' => [
                            'asc',
                            'desc',
                        ],
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'query',
                    'schema' => [
                        'description' => '-',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页参数：当前页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'UserClient',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否使用用户角色查询可用规格（默认使用混合云容灾服务账号进行查询），部分白名单实例规格需要开启该开关才能查询到结果。',
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
                                'example' => '1A7577E8-755A-5BF5-A6BA-B87286D0743F',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '返回结果编码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'PageSize' => [
                                'description' => '分页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '分页参数：当前页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '查询到的实例总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '11',
                            ],
                            'InstanceTypes' => [
                                'type' => 'object',
                                'properties' => [
                                    'instanceType' => [
                                        'description' => '可用实例规格列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '可用实例规格',
                                            'type' => 'string',
                                            'example' => 'ecs.g5ne.xlarge',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1A7577E8-755A-5BF5-A6BA-B87286D0743F\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 11,\\n  \\"InstanceTypes\\": {\\n    \\"instanceType\\": [\\n      \\"ecs.g5ne.xlarge\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询可用规格',
            'summary' => '查询（演练、故障切换、故障恢复等场景的）可用规格。',
        ],
        'DescribeTasks' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SitePairId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '站点对ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 's-000cm9ax8sh22u8r9gs0',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询的当前页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按创建时间或更新时间排序',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'updatedTime' => 'updatedTime',
                            'createdTime' => 'createdTime',
                        ],
                        'example' => 'createdTime',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '86FFBA6E-D087-53E0-8593-4575925CB9DC',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'PageSize' => [
                                'description' => '分页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '分页查询的当前页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                            'TotalCount' => [
                                'description' => '总条数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '53',
                            ],
                            'Tasks' => [
                                'type' => 'object',
                                'properties' => [
                                    'task' => [
                                        'description' => '任务列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '任务列表',
                                            'type' => 'object',
                                            'properties' => [
                                                'Progress' => [
                                                    'description' => '任务进度百分比。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '90',
                                                ],
                                                'UpdatedTime' => [
                                                    'description' => '最后修改时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1637292645',
                                                ],
                                                'StatusCode' => [
                                                    'description' => '任务状态',
                                                    'type' => 'string',
                                                    'example' => 'hdr.task.completed',
                                                ],
                                                'TargetName' => [
                                                    'description' => '任务的目标',
                                                    'type' => 'string',
                                                    'example' => 'sr-000ftuch27gfuv8wvpyj',
                                                ],
                                                'Name' => [
                                                    'description' => '任务名称',
                                                    'type' => 'string',
                                                    'example' => 'CommitFailoverTask',
                                                ],
                                                'CreatedTime' => [
                                                    'description' => '任务创建时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1636092147',
                                                ],
                                                'TaskId' => [
                                                    'description' => '任务ID。',
                                                    'type' => 'string',
                                                    'example' => 't-0007wl5r0hvxrp3c3x8z',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"86FFBA6E-D087-53E0-8593-4575925CB9DC\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 3,\\n  \\"TotalCount\\": 53,\\n  \\"Tasks\\": {\\n    \\"task\\": [\\n      {\\n        \\"Progress\\": 90,\\n        \\"UpdatedTime\\": 1637292645,\\n        \\"StatusCode\\": \\"hdr.task.completed\\",\\n        \\"TargetName\\": \\"sr-000ftuch27gfuv8wvpyj\\",\\n        \\"Name\\": \\"CommitFailoverTask\\",\\n        \\"CreatedTime\\": 1636092147,\\n        \\"TaskId\\": \\"t-0007wl5r0hvxrp3c3x8z\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询任务列表',
            'summary' => '查询任务列表。',
        ],
        'DescribeTask' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 't-0005qxusucbnl5efovq9',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Progress' => [
                                'description' => '任务进度百分比。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '8F8A2274-F2A5-5782-89A0-7FA442BFA16B',
                            ],
                            'UpdatedTime' => [
                                'description' => '最后修改时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1636452195',
                            ],
                            'StatusCode' => [
                                'description' => '任务状态',
                                'type' => 'string',
                                'example' => 'hdr.task.TestFailoverTask.waitStartFailover',
                            ],
                            'Code' => [
                                'description' => '返回码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Name' => [
                                'description' => '任务名称',
                                'type' => 'string',
                                'example' => 'hdr.task.name.TestFailoverTask',
                            ],
                            'TaskId' => [
                                'description' => '任务ID',
                                'type' => 'string',
                                'example' => 't-000bzkmmlwh57miq4mwh',
                            ],
                            'Content' => [
                                'description' => '任务内容。',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'CreatedTime' => [
                                'description' => '创建时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1646100927',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Progress\\": 100,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"8F8A2274-F2A5-5782-89A0-7FA442BFA16B\\",\\n  \\"UpdatedTime\\": 1636452195,\\n  \\"StatusCode\\": \\"hdr.task.TestFailoverTask.waitStartFailover\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Name\\": \\"hdr.task.name.TestFailoverTask\\",\\n  \\"TaskId\\": \\"t-000bzkmmlwh57miq4mwh\\",\\n  \\"Content\\": \\"-\\",\\n  \\"CreatedTime\\": 1646100927\\n}","type":"json"}]',
            'title' => '查询任务',
            'summary' => '查询任务。',
        ],
        'DescribeSitePairStatistics' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SitePairId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '站点对ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 's-0005qxusucbp8acutbrv',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => 'C0D9AAEE-8A21-5693-BCBD-8548914E4F3B',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'PrimarySiteGatewayInfo' => [
                                'description' => '主站站点信息',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '网关状态',
                                        'type' => 'string',
                                        'example' => 'connected',
                                    ],
                                    'GatewayId' => [
                                        'description' => '网关ID',
                                        'type' => 'string',
                                        'example' => 'gw-000bzkmmlwgzptnzsdnh',
                                    ],
                                    'Version' => [
                                        'description' => '网关版本',
                                        'type' => 'string',
                                        'example' => '3.7.3',
                                    ],
                                    'HeartbeatedTime' => [
                                        'description' => '网关心跳时间',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1642562996',
                                    ],
                                ],
                            ],
                            'SecondarySiteGatewayInfo' => [
                                'description' => '从站站点信息',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '网关状态',
                                        'type' => 'string',
                                        'example' => 'connected',
                                    ],
                                    'GatewayId' => [
                                        'description' => '网关ID',
                                        'type' => 'string',
                                        'example' => 'gw-0005qxusucbigzug9wpe',
                                    ],
                                    'Version' => [
                                        'description' => '网关版本',
                                        'type' => 'string',
                                        'example' => '3.7.3',
                                    ],
                                    'HeartbeatedTime' => [
                                        'description' => '网关心跳时间',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1642562996',
                                    ],
                                ],
                            ],
                            'PrimarySiteServers' => [
                                'type' => 'object',
                                'properties' => [
                                    'server' => [
                                        'description' => '主站说保护服务器信息列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '主站说保护服务器信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'AgentVersion' => [
                                                    'description' => '客户端版本号',
                                                    'type' => 'string',
                                                    'example' => '3.7.3',
                                                ],
                                                'ConnectionStatus' => [
                                                    'description' => '受保护服务器连接状态',
                                                    'type' => 'string',
                                                    'example' => 'connected',
                                                ],
                                                'IpAddress' => [
                                                    'description' => '受保护服务器IP地址',
                                                    'type' => 'string',
                                                    'example' => '30.42.105.6',
                                                ],
                                                'ServerId' => [
                                                    'description' => '受保护服务器ID',
                                                    'type' => 'string',
                                                    'example' => 'sr-000c2rz7q8tkc0g4xgao',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SecondarySiteServers' => [
                                'type' => 'object',
                                'properties' => [
                                    'server' => [
                                        'description' => '从站受保护服务器信息列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '从站受保护服务器信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'AgentVersion' => [
                                                    'description' => '客户端版本号',
                                                    'type' => 'string',
                                                    'example' => '3.7.3',
                                                ],
                                                'ConnectionStatus' => [
                                                    'description' => '受保护服务器连接状态',
                                                    'type' => 'string',
                                                    'example' => 'connected',
                                                ],
                                                'IpAddress' => [
                                                    'description' => '受保护服务器IP地址',
                                                    'type' => 'string',
                                                    'example' => '192.168.1.4',
                                                ],
                                                'ServerId' => [
                                                    'description' => '受保护服务器ID',
                                                    'type' => 'string',
                                                    'example' => 'sr-000ikcyl8ucxtxl5f7pi',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"C0D9AAEE-8A21-5693-BCBD-8548914E4F3B\\",\\n  \\"Success\\": true,\\n  \\"PrimarySiteGatewayInfo\\": {\\n    \\"Status\\": \\"connected\\",\\n    \\"GatewayId\\": \\"gw-000bzkmmlwgzptnzsdnh\\",\\n    \\"Version\\": \\"3.7.3\\",\\n    \\"HeartbeatedTime\\": 1642562996\\n  },\\n  \\"SecondarySiteGatewayInfo\\": {\\n    \\"Status\\": \\"connected\\",\\n    \\"GatewayId\\": \\"gw-0005qxusucbigzug9wpe\\",\\n    \\"Version\\": \\"3.7.3\\",\\n    \\"HeartbeatedTime\\": 1642562996\\n  },\\n  \\"PrimarySiteServers\\": {\\n    \\"server\\": [\\n      {\\n        \\"AgentVersion\\": \\"3.7.3\\",\\n        \\"ConnectionStatus\\": \\"connected\\",\\n        \\"IpAddress\\": \\"30.42.105.6\\",\\n        \\"ServerId\\": \\"sr-000c2rz7q8tkc0g4xgao\\"\\n      }\\n    ]\\n  },\\n  \\"SecondarySiteServers\\": {\\n    \\"server\\": [\\n      {\\n        \\"AgentVersion\\": \\"3.7.3\\",\\n        \\"ConnectionStatus\\": \\"connected\\",\\n        \\"IpAddress\\": \\"192.168.1.4\\",\\n        \\"ServerId\\": \\"sr-000ikcyl8ucxtxl5f7pi\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询站点对统计信息',
            'summary' => '查询站点对统计信息。',
        ],
        'DescribeSummary' => [
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
            'systemTags' => [],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => 'DE78056B-E82A-52FD-BF5E-F737D8B63845',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'ServerCount' => [
                                'description' => '受保护服务器总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'TotalSize' => [
                                'description' => '站点对总数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'DbServerCount' => [
                                'description' => '-',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '-',
                            ],
                            'SiteCount' => [
                                'description' => '站点数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '4',
                            ],
                            'ReplicationDetails' => [
                                'description' => '复制状态统计信息',
                                'type' => 'object',
                                'properties' => [
                                    'WarningServers' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'warningServer' => [
                                                'description' => '处于警告状态的受保护服务器信息',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '处于警告状态的受保护服务器信息',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ServerId' => [
                                                            'description' => '受保护服务器ID',
                                                            'type' => 'string',
                                                            'example' => 'sr-000fzufp79icz33l4pak',
                                                        ],
                                                        'InstanceId' => [
                                                            'description' => '受保护服务器实例ID',
                                                            'type' => 'string',
                                                            'example' => 'i-bp1a4374akk4527gbt9x',
                                                        ],
                                                        'SitePairId' => [
                                                            'description' => '受保护服务器站点对ID',
                                                            'type' => 'string',
                                                            'example' => 's-000bzkmmlwh5riquud19',
                                                        ],
                                                        'Rpo' => [
                                                            'description' => 'RPO',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '30',
                                                        ],
                                                        'Status' => [
                                                            'description' => '状态',
                                                            'type' => 'string',
                                                            'example' => 'replicating',
                                                        ],
                                                        'ConnectionStatus' => [
                                                            'description' => '连接状态',
                                                            'type' => 'string',
                                                            'example' => 'connected',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'CriticalServers' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'criticalServer' => [
                                                'description' => '处于危险状态的受保护服务器信息',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '处于危险状态的受保护服务器信息',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ServerId' => [
                                                            'description' => '受保护服务器ID',
                                                            'type' => 'string',
                                                            'example' => 'sr-0005qxusucb0fqqdf4ba',
                                                        ],
                                                        'InstanceId' => [
                                                            'description' => '受保护服务器实例ID',
                                                            'type' => 'string',
                                                            'example' => 'i-bp1a4374akk4527gbt9x',
                                                        ],
                                                        'SitePairId' => [
                                                            'description' => '受保护服务器站点对ID',
                                                            'type' => 'string',
                                                            'example' => 's-0005qxusucbii3ba2uve',
                                                        ],
                                                        'Rpo' => [
                                                            'description' => 'RPO',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '30',
                                                        ],
                                                        'Status' => [
                                                            'description' => '状态',
                                                            'type' => 'string',
                                                            'example' => 'replicating',
                                                        ],
                                                        'ConnectionStatus' => [
                                                            'description' => '连接状态',
                                                            'type' => 'string',
                                                            'example' => 'connected',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'NotApplicableServers' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'notApplicableServer' => [
                                                'description' => '处于非复制状态的受保护服务器信息',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '处于未复制状态的受保护服务器信息',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ServerId' => [
                                                            'description' => '受保护服务器ID',
                                                            'type' => 'string',
                                                            'example' => 'sr-000iji78mxxc93yldd2e',
                                                        ],
                                                        'InstanceId' => [
                                                            'description' => '受保护服务器实例ID',
                                                            'type' => 'string',
                                                            'example' => 'i-bp1a4374akk4527gbt9x',
                                                        ],
                                                        'SitePairId' => [
                                                            'description' => '受保护服务器站点对ID',
                                                            'type' => 'string',
                                                            'example' => 's-000bzkmmlwh5riquud19',
                                                        ],
                                                        'Rpo' => [
                                                            'description' => 'RPO',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '40',
                                                        ],
                                                        'Status' => [
                                                            'description' => '状态',
                                                            'type' => 'string',
                                                            'example' => 'replicating',
                                                        ],
                                                        'ConnectionStatus' => [
                                                            'description' => '连接状态',
                                                            'type' => 'string',
                                                            'example' => 'connected',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DE78056B-E82A-52FD-BF5E-F737D8B63845\\",\\n  \\"Success\\": true,\\n  \\"ServerCount\\": 2,\\n  \\"TotalSize\\": 10,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"DbServerCount\\": 0,\\n  \\"SiteCount\\": 4,\\n  \\"ReplicationDetails\\": {\\n    \\"WarningServers\\": {\\n      \\"warningServer\\": [\\n        {\\n          \\"ServerId\\": \\"sr-000fzufp79icz33l4pak\\",\\n          \\"InstanceId\\": \\"i-bp1a4374akk4527gbt9x\\",\\n          \\"SitePairId\\": \\"s-000bzkmmlwh5riquud19\\",\\n          \\"Rpo\\": 30,\\n          \\"Status\\": \\"replicating\\",\\n          \\"ConnectionStatus\\": \\"connected\\"\\n        }\\n      ]\\n    },\\n    \\"CriticalServers\\": {\\n      \\"criticalServer\\": [\\n        {\\n          \\"ServerId\\": \\"sr-0005qxusucb0fqqdf4ba\\",\\n          \\"InstanceId\\": \\"i-bp1a4374akk4527gbt9x\\",\\n          \\"SitePairId\\": \\"s-0005qxusucbii3ba2uve\\",\\n          \\"Rpo\\": 30,\\n          \\"Status\\": \\"replicating\\",\\n          \\"ConnectionStatus\\": \\"connected\\"\\n        }\\n      ]\\n    },\\n    \\"NotApplicableServers\\": {\\n      \\"notApplicableServer\\": [\\n        {\\n          \\"ServerId\\": \\"sr-000iji78mxxc93yldd2e\\",\\n          \\"InstanceId\\": \\"i-bp1a4374akk4527gbt9x\\",\\n          \\"SitePairId\\": \\"s-000bzkmmlwh5riquud19\\",\\n          \\"Rpo\\": 40,\\n          \\"Status\\": \\"replicating\\",\\n          \\"ConnectionStatus\\": \\"connected\\"\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '查询概览信息',
            'summary' => '查询概览信息。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'hdr.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'hdr.cn-zhangjiakou.aliyuncs.com',
        ],
    ],
];
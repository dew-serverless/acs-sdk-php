<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'smc',
        'version' => '2019-06-01',
    ],
    'directories' => [
        [
            'id' => 68530,
            'title' => '迁移源',
            'type' => 'directory',
            'children' => [
                'DescribeSourceServers',
                'ModifySourceServerAttribute',
                'DeleteSourceServer',
            ],
        ],
        [
            'id' => 68534,
            'title' => '迁移任务',
            'type' => 'directory',
            'children' => [
                'CreateReplicationJob',
                'ModifyReplicationJobAttribute',
                'StartReplicationJob',
                'StopReplicationJob',
                'DescribeReplicationJobs',
                'CutOverReplicationJob',
                'DeleteReplicationJob',
            ],
        ],
        [
            'id' => 183898,
            'title' => '标签',
            'type' => 'directory',
            'children' => [
                'TagResources',
                'ListTagResources',
                'UntagResources',
            ],
        ],
        [
            'id' => 183845,
            'title' => '激活码',
            'type' => 'directory',
            'children' => [
                'CreateAccessToken',
                'DisableAccessToken',
                'ListAccessTokens',
                'DeleteAccessToken',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'DescribeSourceServers' => [
            'summary' => '调用DescribeSourceServers查询一个或多个迁移源信息。',
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
                'abilityTreeCode' => '18569',
                'abilityTreeNodes' => [
                    'FEATUREsmcTXNBS6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'j-bp19vlwm0tyigbmj****',
                    ],
                ],
                [
                    'name' => 'State',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移源状态。取值范围：'."\n"
                            ."\n"
                            .'- Unavailable：不可用，包括离线和出错。'."\n"
                            .'- Available：在线。'."\n"
                            .'- InUse：迁移中。'."\n"
                            .'- Deleting：删除中。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Available',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移源名称。长度为2~128个英文或中文字符。必须以大小写字母或中文开头，不能以http:\\//和https:\\//开头。可以包含数字、半角冒号（:）、下划线（_）或者连字符（-）。'."\n"
                            ."\n"
                            .'默认值：空',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testSourceServerName',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回的迁移源列表的页码。起始值：1。'."\n"
                            ."\n"
                            .'默认值：1。',
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
                        'description' => '分页查询时设置的每页行数。最大值：50。'."\n"
                            ."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '50',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'SourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '迁移源ID，可以输入多个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '迁移源ID，可以输入多个。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 's-bp1e2fsl57knvuug****',
                        ],
                        'required' => false,
                        'example' => 's-bp1e2fsl57knvuug****',
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmw3ty5y7****',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签对象。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '为SMC资源指定的标签键。N的取值范围：1~20'."\n"
                                        ."\n"
                                        .'一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以aliyun和acs:开头，不能包含http:\\//或者https:\\//。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestKey',
                                ],
                                'Value' => [
                                    'description' => '为SMC资源指定的标签值。N的取值范围：1~20。'."\n"
                                        ."\n"
                                        .'一旦传入该值，可以为空字符串。最多支持64个字符，不能包含http:\\//或者https:\\//。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestValue',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'RelatedJobType',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '关联任务类型。',
                        'type' => 'array',
                        'items' => [
                            'description' => '关联任务类型。取值如下：'."\n"
                                ."\n"
                                .'- Not_Related：未关联任务。'."\n"
                                .'- Server：服务器迁移任务。'."\n"
                                .'- Os：操作系统迁移任务。'."\n"
                                .'- Cross_Zone：跨可用区迁移任务。'."\n"
                                .'- VMWare：VMWare迁移任务。'."\n"
                                .'- Desktop：桌面任务。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'Server',
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'SourceServers' => [
                                'type' => 'object',
                                'properties' => [
                                    'SourceServer' => [
                                        'description' => '迁移源数组。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '迁移源数组。',
                                            'type' => 'object',
                                            'properties' => [
                                                'CreationTime' => [
                                                    'description' => '迁移源的注册时间。',
                                                    'type' => 'string',
                                                    'example' => '2019-06-27T02:58:09Z',
                                                ],
                                                'HeartbeatRate' => [
                                                    'description' => 'SMC客户端（SMC Agent）心跳频率。单位：秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '30',
                                                ],
                                                'State' => [
                                                    'description' => '迁移源状态。',
                                                    'type' => 'string',
                                                    'example' => 'InUse',
                                                ],
                                                'DataDisks' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'DataDisk' => [
                                                            'description' => '迁移源的数据盘数组。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '迁移源的数据盘数组。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Index' => [
                                                                        'description' => '数据盘顺序。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '1',
                                                                    ],
                                                                    'Size' => [
                                                                        'description' => '数据盘N大小。单位：GiB。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '20',
                                                                    ],
                                                                    'Parts' => [
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'Part' => [
                                                                                'description' => '数据盘分区信息。',
                                                                                'type' => 'array',
                                                                                'items' => [
                                                                                    'description' => '数据盘分区信息。',
                                                                                    'type' => 'object',
                                                                                    'properties' => [
                                                                                        'CanBlock' => [
                                                                                            'description' => '数据盘分区是否支持块复制。',
                                                                                            'type' => 'boolean',
                                                                                            'example' => 'false',
                                                                                        ],
                                                                                        'SizeBytes' => [
                                                                                            'description' => '数据盘分区大小。单位：Byte。',
                                                                                            'type' => 'integer',
                                                                                            'format' => 'int64',
                                                                                            'example' => '21474836480',
                                                                                        ],
                                                                                        'Need' => [
                                                                                            'description' => '数据盘分区是否必须选择。',
                                                                                            'type' => 'boolean',
                                                                                            'example' => 'false',
                                                                                        ],
                                                                                        'Device' => [
                                                                                            'description' => '数据盘分区设备标识。',
                                                                                            'type' => 'string',
                                                                                            'example' => '1_0',
                                                                                        ],
                                                                                        'Path' => [
                                                                                            'description' => '数据盘分区路径。',
                                                                                            'type' => 'string',
                                                                                            'example' => '/home/data',
                                                                                        ],
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    'Path' => [
                                                                        'description' => '数据盘N路径。',
                                                                        'type' => 'string',
                                                                        'example' => '/home/data',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'SystemDiskParts' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'SystemDiskPart' => [
                                                            'description' => '系统盘分区信息。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '系统盘分区信息。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'CanBlock' => [
                                                                        'description' => '系统盘分区是否支持块复制。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'true',
                                                                    ],
                                                                    'SizeBytes' => [
                                                                        'description' => '系统盘分区大小。单位：Byte。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int64',
                                                                        'example' => '254803968',
                                                                    ],
                                                                    'Need' => [
                                                                        'description' => '系统盘分区是否必须选择。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'true',
                                                                    ],
                                                                    'Device' => [
                                                                        'description' => '系统盘分区设备标识符。',
                                                                        'type' => 'string',
                                                                        'example' => '0_0',
                                                                    ],
                                                                    'Path' => [
                                                                        'description' => '系统盘分区路径。',
                                                                        'type' => 'string',
                                                                        'example' => '/boot',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'KernelLevel' => [
                                                    'description' => '内核版本级别。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'SourceId' => [
                                                    'description' => '迁移源ID。',
                                                    'type' => 'string',
                                                    'example' => 's-bp1e2fsl57knvuug****',
                                                ],
                                                'AgentVersion' => [
                                                    'description' => 'SMC客户端版本号。',
                                                    'type' => 'string',
                                                    'example' => '1.5.2.3',
                                                ],
                                                'StatusInfo' => [
                                                    'description' => '迁移源状态详细信息。该参数在迁移源状态为异常时返回。JSON格式键值对，如：'."\n"
                                                        .'```'."\n"
                                                        .'- error_code：错误码。'."\n"
                                                        .'- error_msg：错误信息。'."\n"
                                                        .'```',
                                                    'type' => 'string',
                                                    'example' => '{"error_code": "S1", "error_msg": "Rsync not found. Please install rsync."}',
                                                ],
                                                'SystemDiskSize' => [
                                                    'description' => '迁移源的系统盘大小。单位：GiB',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '40',
                                                ],
                                                'Description' => [
                                                    'description' => '迁移源描述。',
                                                    'type' => 'string',
                                                    'example' => 'Server Source Imported By GotoAliyun.',
                                                ],
                                                'ErrorCode' => [
                                                    'description' => '迁移源状态错误码。',
                                                    'type' => 'string',
                                                    'example' => 'SourceServer.Offline',
                                                ],
                                                'JobId' => [
                                                    'description' => '最近一次的迁移任务ID。',
                                                    'type' => 'string',
                                                    'example' => 'j-bp19vlwm0tyigbmj****',
                                                ],
                                                'Platform' => [
                                                    'description' => '迁移源的系统平台。',
                                                    'type' => 'string',
                                                    'example' => 'OpenSUSE',
                                                ],
                                                'ReplicationDriver' => [
                                                    'description' => '复制驱动器。默认值：SMT（迁云工具）',
                                                    'type' => 'string',
                                                    'example' => 'SMT',
                                                ],
                                                'Name' => [
                                                    'description' => '迁移源的名称。',
                                                    'type' => 'string',
                                                    'example' => 'SourceServerName',
                                                ],
                                                'SystemInfo' => [
                                                    'description' => '迁移源系统信息。JSON格式键值对，可扩展，键值固定。大小不超过1 KB。如：'."\n"
                                                        ."\n"
                                                        .'```'."\n"
                                                        .'agent_mode：运行模式。'."\n"
                                                        .'agent_type：运行类型。'."\n"
                                                        .'client_type：客户端类型。'."\n"
                                                        .'hostname ：主机名。'."\n"
                                                        .'ipv4：IPv4地址。'."\n"
                                                        .'ipv6： IPv6地址。'."\n"
                                                        .'cores：CPU核数。'."\n"
                                                        .'cpu_usage： CPU使用率。'."\n"
                                                        .'memory：内存。'."\n"
                                                        .'memory_usage：内存使用率。'."\n"
                                                        .'```',
                                                    'type' => 'string',
                                                    'example' => '{\\"agent_mode\\":\\"daemon\\",\\"agent_type\\":\\"aliyun\\",\\"client_type\\":\\"\\",\\"cores\\":\\"2\\",\\"cpu_usage\\":\\"0.00\\",\\"hostname\\":\\"ixxxxxxxxxx\\",\\"ipv4\\":\\"10.0.0.1\\",\\"memory\\":\\"8.00\\",\\"memory_usage\\":\\"3.61\\"}',
                                                ],
                                                'Architecture' => [
                                                    'description' => '迁移源的系统架构。',
                                                    'type' => 'string',
                                                    'example' => 'x86_64',
                                                ],
                                                'ResourceGroupId' => [
                                                    'description' => '资源组ID。',
                                                    'type' => 'string',
                                                    'example' => 'rg-acfmw3ty5y7****',
                                                ],
                                                'Tags' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Tag' => [
                                                            'description' => '标签信息。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '标签对象。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Key' => [
                                                                        'description' => '为SMC资源指定的标签键。N的取值范围：1~20。'."\n"
                                                                            ."\n"
                                                                            .'一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以aliyun和acs:开头，不能包含http:\\//或者https:\\//。',
                                                                        'type' => 'string',
                                                                        'example' => 'TestKey',
                                                                    ],
                                                                    'Value' => [
                                                                        'description' => '为SMC资源指定的标签值。N的取值范围：1~20。'."\n"
                                                                            ."\n"
                                                                            .'一旦传入该值，可以为空字符串。最多支持64个字符，不能包含http:\\//或者https:\\//。',
                                                                        'type' => 'string',
                                                                        'example' => 'TestValue',
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
                            'TotalCount' => [
                                'description' => '迁移源总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '410E6073-66D0-45D3-AB3E-4DC3F5E4****',
                            ],
                            'PageNumber' => [
                                'description' => '迁移源列表的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Forbidden.Unauthorized',
                        'errorMessage' => 'A required authorization for the specified action is not supplied.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again. If the problem still exists, please submit a ticket.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SourceServers\\": {\\n    \\"SourceServer\\": [\\n      {\\n        \\"CreationTime\\": \\"2019-06-27T02:58:09Z\\",\\n        \\"HeartbeatRate\\": 30,\\n        \\"State\\": \\"InUse\\",\\n        \\"DataDisks\\": {\\n          \\"DataDisk\\": [\\n            {\\n              \\"Index\\": 1,\\n              \\"Size\\": 20,\\n              \\"Parts\\": {\\n                \\"Part\\": [\\n                  {\\n                    \\"CanBlock\\": false,\\n                    \\"SizeBytes\\": 21474836480,\\n                    \\"Need\\": false,\\n                    \\"Device\\": \\"1_0\\",\\n                    \\"Path\\": \\"/home/data\\"\\n                  }\\n                ]\\n              },\\n              \\"Path\\": \\"/home/data\\"\\n            }\\n          ]\\n        },\\n        \\"SystemDiskParts\\": {\\n          \\"SystemDiskPart\\": [\\n            {\\n              \\"CanBlock\\": true,\\n              \\"SizeBytes\\": 254803968,\\n              \\"Need\\": true,\\n              \\"Device\\": \\"0_0\\",\\n              \\"Path\\": \\"/boot\\"\\n            }\\n          ]\\n        },\\n        \\"KernelLevel\\": 1,\\n        \\"SourceId\\": \\"s-bp1e2fsl57knvuug****\\",\\n        \\"AgentVersion\\": \\"1.5.2.3\\",\\n        \\"StatusInfo\\": \\"{\\\\\\"error_code\\\\\\": \\\\\\"S1\\\\\\", \\\\\\"error_msg\\\\\\": \\\\\\"Rsync not found. Please install rsync.\\\\\\"}\\",\\n        \\"SystemDiskSize\\": 40,\\n        \\"Description\\": \\"Server Source Imported By GotoAliyun.\\",\\n        \\"ErrorCode\\": \\"SourceServer.Offline\\",\\n        \\"JobId\\": \\"j-bp19vlwm0tyigbmj****\\",\\n        \\"Platform\\": \\"OpenSUSE\\",\\n        \\"ReplicationDriver\\": \\"SMT\\",\\n        \\"Name\\": \\"SourceServerName\\",\\n        \\"SystemInfo\\": \\"{\\\\\\\\\\\\\\"agent_mode\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"daemon\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"agent_type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"aliyun\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"client_type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"cores\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"2\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"cpu_usage\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0.00\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"hostname\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"ixxxxxxxxxx\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"ipv4\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"10.0.0.1\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"memory\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"8.00\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"memory_usage\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"3.61\\\\\\\\\\\\\\"}\\",\\n        \\"Architecture\\": \\"x86_64\\",\\n        \\"ResourceGroupId\\": \\"rg-acfmw3ty5y7****\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"TestKey\\",\\n              \\"Value\\": \\"TestValue\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  },\\n  \\"TotalCount\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"410E6073-66D0-45D3-AB3E-4DC3F5E4****\\",\\n  \\"PageNumber\\": 1\\n}","errorExample":""},{"type":"xml","example":"<DescribeSourceServersResponse>\\n    <SourceServers>\\n        <CreationTime>2019-06-27T02:58:09Z</CreationTime>\\n        <HeartbeatRate>30</HeartbeatRate>\\n        <State>InUse</State>\\n        <DataDisks>\\n            <Index>1</Index>\\n            <Size>20</Size>\\n            <Parts>\\n                <CanBlock>false</CanBlock>\\n                <SizeBytes>21474836480</SizeBytes>\\n                <Need>false</Need>\\n                <Device>1_0</Device>\\n                <Path>/home/data</Path>\\n            </Parts>\\n            <Path>/home/data</Path>\\n        </DataDisks>\\n        <SystemDiskParts>\\n            <CanBlock>true</CanBlock>\\n            <SizeBytes>254803968</SizeBytes>\\n            <Need>true</Need>\\n            <Device>0_0</Device>\\n            <Path>/boot</Path>\\n        </SystemDiskParts>\\n        <KernelLevel>1</KernelLevel>\\n        <SourceId>s-bp1e2fsl57knvuug****</SourceId>\\n        <AgentVersion>1.5.2.3</AgentVersion>\\n        <StatusInfo>{\\"error_code\\": \\"S1\\", \\"error_msg\\": \\"Rsync not found. Please install rsync.\\"}</StatusInfo>\\n        <SystemDiskSize>40</SystemDiskSize>\\n        <Description>Server Source Imported By GotoAliyun.</Description>\\n        <ErrorCode>SourceServer.Offline</ErrorCode>\\n        <JobId>j-bp19vlwm0tyigbmj****</JobId>\\n        <Platform>OpenSUSE</Platform>\\n        <ReplicationDriver>SMT</ReplicationDriver>\\n        <Name>SourceServerName</Name>\\n        <SystemInfo>{\\\\\\"agent_mode\\\\\\":\\\\\\"daemon\\\\\\",\\\\\\"agent_type\\\\\\":\\\\\\"aliyun\\\\\\",\\\\\\"client_type\\\\\\":\\\\\\"\\\\\\",\\\\\\"cores\\\\\\":\\\\\\"2\\\\\\",\\\\\\"cpu_usage\\\\\\":\\\\\\"0.00\\\\\\",\\\\\\"hostname\\\\\\":\\\\\\"ixxxxxxxxxx\\\\\\",\\\\\\"ipv4\\\\\\":\\\\\\"10.0.0.1\\\\\\",\\\\\\"memory\\\\\\":\\\\\\"8.00\\\\\\",\\\\\\"memory_usage\\\\\\":\\\\\\"3.61\\\\\\"}</SystemInfo>\\n        <Architecture>x86_64</Architecture>\\n        <ResourceGroupId>rg-acfmw3ty5y7****</ResourceGroupId>\\n        <Tags>\\n            <Key>TestKey</Key>\\n            <Value>TestValue</Value>\\n        </Tags>\\n    </SourceServers>\\n    <TotalCount>1</TotalCount>\\n    <PageSize>10</PageSize>\\n    <RequestId>410E6073-66D0-45D3-AB3E-4DC3F5E4****</RequestId>\\n    <PageNumber>1</PageNumber>\\n</DescribeSourceServersResponse>","errorExample":""}]',
            'title' => '查询一个或多个迁移源信息',
            'description' => '## 接口说明'."\n"
                ."\n"
                .'请求参数的作用类似于一个过滤器，过滤器为逻辑与（AND）关系。如果某一参数为空，则过滤器不起作用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifySourceServerAttribute' => [
            'summary' => '调用ModifySourceServerAttribute修改一个迁移源的名称和描述。',
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
                'operationType' => 'update',
                'abilityTreeCode' => '18573',
                'abilityTreeNodes' => [
                    'FEATUREsmcBBDD6M',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'SourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 's-bp17m1vi6x20c6g6****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移源名称。长度为2~128个英文或中文字符。必须以大小写字母或中文开头，不能以`http://`或`https://`开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testSourceServerName',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移源描述。长度为0~256个字符，不能以`http://`或`https://`开头。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a source server.',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SourceServerName.Duplicate',
                        'errorMessage' => 'The specified source server name already exists. Please modify the source server name.',
                    ],
                    [
                        'errorCode' => 'SourceServerState.Invalid',
                        'errorMessage' => 'The specified source server status: %s is invalid. This operation can only be performed in the following status: %s.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again. If the problem still exists, please submit a ticket.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteReplicationJobResponse>\\r\\n  <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\r\\n</DeleteReplicationJobResponse>","errorExample":""}]',
            'title' => '修改一个迁移源的名称和描述',
            'description' => '## 接口说明'."\n"
                ."\n"
                .'使用该API修改迁移源的名称和描述时，对迁移源的状态没有要求。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteSourceServer' => [
            'summary' => '调用DeleteSourceServer删除一个迁移源。',
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
                'operationType' => 'delete',
                'abilityTreeCode' => '18563',
                'abilityTreeNodes' => [
                    'FEATUREsmcWZM4IC',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'SourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 's-bp17m1vi6x20c6g6****',
                    ],
                ],
                [
                    'name' => 'Force',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制删除迁移源。'."\n"
                            ."\n"
                            .'- true：强制删除迁移源、迁移源关联的迁移任务及任务对应的中转资源。'."\n"
                            .'- false：无法删除已关联迁移任务的迁移源。',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SourceServer.WithRunningReplicationJob',
                        'errorMessage' => 'The specified source server has related replication jobs that are running.',
                    ],
                    [
                        'errorCode' => 'SourceServerState.Invalid',
                        'errorMessage' => 'The specified source server status: %s is invalid. This operation can only be performed in the following status: %s.',
                    ],
                    [
                        'errorCode' => 'ReplicationJob.Related',
                        'errorMessage' => 'The specified source server has related replication jobs. Please delete replication jobs: %s before delete this source server.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again. If the problem still exists, please submit a ticket.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteSourceServerResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</DeleteSourceServerResponse>","errorExample":""}]',
            'title' => '删除一个迁移源',
            'description' => '## 接口说明'."\n"
                ."\n"
                .'- 迁移源若关联了Running（运行中）状态的迁移任务，则无法删除。'."\n"
                .'- 迁移源若关联了除Running状态外的其他状态的迁移任务，则需设置`Force=true`删除。'."\n",
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateReplicationJob' => [
            'summary' => '调用CreateReplicationJob为迁移源创建一个迁移任务。',
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
                'abilityTreeCode' => '18560',
                'abilityTreeNodes' => [
                    'FEATUREsmcBBDD6M',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移源要迁入的目标阿里云地域ID。'."\n"
                            ."\n"
                            .'例如，您需要迁移源服务器至杭州，则相应的阿里云地域ID为`cn-hangzhou`。您可以调用[DescribeRegions](~~25609~~)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。您可以从客户端生成一个不超过64个ASCII字符的参数值，并将值赋予ClientToken，保证重试请求的幂等性。更多详情，请参见[如何保证幂等性](~~25693~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务名。迁移任务的名称需满足以下要求：'."\n"
                            ."\n"
                            .'- 任务名称必须唯一。'."\n"
                            .'- 长度为2~128个英文或中文字符，必须以大小字母或中文开头，不能以`http://`和`https://`开头，可以包含数字、半角冒号（:）、下划线（_）或者连字符（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testMigrationTaskName',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务描述。'."\n"
                            ."\n"
                            .'长度应为2~128个英文或中文字符，必须以大小字母或中文开头，不能以`http://`和`https://`开头，可以包含数字、半角冒号（:）、下划线（_）或者连字符（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This_is_a_migration_task',
                    ],
                ],
                [
                    'name' => 'SourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 's-bp1e2fsl57knvuug****',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务交付的目标类型。取值范围：'."\n"
                            .'- Image：迁移成功后，SMC为您的迁移源生成阿里云镜像。'."\n"
                            .'- ContainerImage：迁移成功后，SMC为您的迁移源生成Docker容器镜像。'."\n"
                            .'- TargetInstance：迁移成功后，SMC将您的迁移源直接迁移至目标实例。当您设置该参数值时，您需要同时指定`InstanceId`参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Image',
                    ],
                ],
                [
                    'name' => 'ScheduledStartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务的执行时间。该参数值的设置需满足以下要求：'."\n"
                            ."\n"
                            .'- 遵循ISO8601标准，并需要使用UTC+0时间，格式为YYYY-MM-DDThh:mm:ssZ。例如，2018-01-01T12:00:00Z，表示北京时间2018年01月01日20点00分00秒。'."\n"
                            .'- 该参数值必须晚于当前时间，并且需要设置在30天以内。'."\n"
                            ."\n"
                            .'>如果该参数值为空，则SMC不会启动迁移任务，需要您调用[StartReplicationJob](~~121823~~)启动任务。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '2019-06-04T13:35:00Z',
                    ],
                ],
                [
                    'name' => 'ValidTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务的过期时间。取值范围：迁移任务创建时间+7天~迁移任务创建时间+90天。'."\n"
                            ."\n"
                            .'- 过期时间须遵循ISO8601标准，并需要使用UTC+0时间，格式为YYYY-MM-DDThh:mm:ssZ。例如，2018-01-01T12:00:00Z，表示北京时间2018年01月01日20点00分00秒。'."\n"
                            .'- 过期时间设置为空，表示任务无限期有效。'."\n"
                            .'- 任务到期后会被标记为过期状态，保存7天，7天后系统会自动清理。'."\n"
                            ."\n"
                            .'默认值：迁移任务创建时间+30天（表示迁移任务的默认有效期为创建后30天）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2019-06-04T13:35:00Z',
                    ],
                ],
                [
                    'name' => 'ImageName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务交付的目标阿里云镜像名称。目标镜像的名称需满足以下要求：'."\n"
                            ."\n"
                            .'- 同一阿里云地域下，镜像名称必须唯一。'."\n"
                            .'- 长度为2~128个英文或中文字符，必须以大小字母或中文开头，不能以`http://`和`https://`开头，可以包含数字、半角冒号（:）、下划线（_）或者连字符（-）。'."\n"
                            ."\n"
                            .'>迁移任务运行过程中，若当前地域已经存在相同名称的镜像，则系统默认给镜像名称添加迁移任务ID（JobId）作为后缀，如：ImageName_j-2zexxxxxxxxxxxxx。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testAliCloudImageName',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'i-bp1f1dvfto1sigz5****',
                    ],
                ],
                [
                    'name' => 'SystemDiskSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标阿里云服务器ECS的系统盘大小，单位为GiB。取值范围：20~2048。'."\n"
                            ."\n"
                            .'> 该参数取值需要大于迁移源系统盘实际占用大小，例如，源系统盘大小为500 GiB，实际占用100 GiB，则该参数取值需大于100 GiB。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '80',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已配置高速通道服务或者VPN网关的VPC ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-bp1vwnn14rqpyiczj****',
                    ],
                ],
                [
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定VPC下的虚拟交换机ID。'."\n"
                            ."\n"
                            .'使用VPC内网迁移时，该参数为必填参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-bp1ddbrxdlrcbim46****',
                    ],
                ],
                [
                    'name' => 'ReplicationParameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '复制驱动器的参数信息。参数信息为JSON格式键值对，键值固定。最大长度：2048个字符。'."\n"
                            ."\n"
                            .'复制驱动器是指，复制源服务器数据到中转实例时所使用的工具。不同复制驱动器支持参数可能不同。复制驱动器SMT目前支持以下参数：'."\n"
                            .'- bandwidth_limit：传输速度带宽限制。'."\n"
                            .'- compress_level：传输压缩率。'."\n"
                            .'- checksum：是否开启checksum校验。'."\n"
                            ."\n"
                            .'复制驱动器的取值，请参见[DescribeSourceServers](~~121818~~)的返回参数`SourceServers.ReplicationDriver`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"bandwidth_limit":0,"compress_level":1,"checksum":true}',
                    ],
                ],
                [
                    'name' => 'NetMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据传输网络模式。取值范围：'."\n"
                            ."\n"
                            .'- 0：表示公网传输模式。此时要求您的源服务器能够访问公网，迁云数据从公网传输。'."\n"
                            .'- 2：表示内网传输模式，选用此模式必须设置VSwitchId参数（VpcId参数可以不设置，服务内部可以通过接口反查出来）。'."\n"
                            ."\n"
                            .'默认值：0。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'RunOnce',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建一次性迁移任务还是增量迁移任务。取值范围：'."\n"
                            ."\n"
                            .'- true（默认值）：一次性迁移任务。任务创建后，仅执行一次。'."\n"
                            ."\n"
                            .'- false：增量迁移任务。任务创建后，按照您设置的`Frequency`参数值周期性自动执行。使用增量迁移任务，可在业务不暂停的情况下，同步源服务器的增量数据至阿里云，并为源服务器生成任务运行时刻的全量数据镜像。'."\n"
                            ."\n"
                            .'> 该参数值只能在创建迁移任务时指定。参数值一经指定，则无法更改。'."\n"
                            ."\n\n"
                            ."\n\n"
                            ."\n",
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Frequency',
                    'in' => 'query',
                    'schema' => [
                        'description' => '增量迁移任务运行的时间间隔，单位：小时。取值范围：1~168。'."\n"
                            ."\n"
                            .'`RunOnce`参数值为false时，该参数为必填参数。'."\n"
                            ."\n"
                            .'默认值：无。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'MaxNumberOfImageToKeep',
                    'in' => 'query',
                    'schema' => [
                        'description' => '增量迁移任务默认保留的最大镜像数。取值范围：1~10。'."\n"
                            ."\n"
                            .'`RunOnce`参数值为false时，该参数为必填参数。'."\n"
                            ."\n"
                            .'默认值：无。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '中转实例的实例规格。'."\n"
                            ."\n"
                            .'调用[DescribeInstanceTypes](~~25620~~)可查询云服务器ECS提供的实例规格。'."\n"
                            ."\n"
                            .'- 指定该参数后，系统会选择该实例规格创建中转实例。若该实例规格库存不足，则迁移任务创建失败。'."\n"
                            .'- 不指定该参数时，系统默认会按照一定顺序选择实例规格来创建中转实例，详情请参见[SMC'."\n"
                            .' FAQ 中转实例规格有哪些](~~121707~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs.c6.large',
                    ],
                ],
                [
                    'name' => 'LaunchTemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例启动模板ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'lt-bp16jovvln1cgaaq****',
                    ],
                ],
                [
                    'name' => 'LaunchTemplateVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例启动模板的版本。'."\n"
                            .'         ',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceRamRole',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例RAM角色名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SMCAdmin',
                    ],
                ],
                [
                    'name' => 'ContainerNamespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Docker的命名空间。关于Docker容器镜像详情请参见[容器镜像服务](~~60744~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testNamespace',
                    ],
                ],
                [
                    'name' => 'ContainerRepository',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Docker的镜像仓库。关于Docker容器镜像详情请参见[容器镜像服务](~~60744~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testRepository',
                    ],
                ],
                [
                    'name' => 'ContainerTag',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Docker的镜像标签。关于Docker容器镜像详情请参见[容器镜像服务](~~60744~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CentOS:v1',
                    ],
                ],
                [
                    'name' => 'LicenseType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '许可证类型。取值范围：'."\n"
                            ."\n"
                            .'- 空值：无许可证。'."\n"
                            .'- BYOL：自带许可。'."\n"
                            ."\n"
                            .'更多信息，请参见[SMC FAQ](~~121707~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BYOL',
                    ],
                ],
                [
                    'name' => 'DataDisk',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '数据盘信息列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '数据盘信息列表。',
                            'type' => 'object',
                            'properties' => [
                                'Index' => [
                                    'description' => '目标阿里云服务器ECS的数据盘顺序。初始值为1。取值范围：1~16'."\n"
                                        ."\n\n"
                                        .'>您只能为迁移源中存在的数据盘创建目标数据盘。'."\n",
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '1',
                                ],
                                'Part' => [
                                    'description' => '分区列表。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '分区列表。',
                                        'type' => 'object',
                                        'properties' => [
                                            'SizeBytes' => [
                                                'description' => '目标数据盘N分区N的大小。单位：Byte。默认为源数据盘分区大小。'."\n"
                                                    .'> - 分区空间大小不能超过数据盘空间大小，并且在同一数据盘下所有分区空间大小之和不能超过数据盘空间大小。'."\n"
                                                    .'- 当`DataDisk.N.Part.N.Device`不为空时，该参数也不能为空。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                                'example' => '254803968',
                                            ],
                                            'Block' => [
                                                'description' => '数据盘N分区N是否开启块复制。取值范围：'."\n"
                                                    .'- true。'."\n"
                                                    .'- false。'."\n"
                                                    ."\n"
                                                    .'默认值：true。',
                                                'type' => 'boolean',
                                                'required' => false,
                                                'example' => 'true',
                                            ],
                                            'Device' => [
                                                'description' => '目标数据盘N分区N对应的分区设备标识。N的实际取值请参考迁移源的分区设备标识。'."\n"
                                                    .'> 当`DataDisk.N.Part.N.SizeBytes`不为空时，该参数也不能为空。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '0_1',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                    'maxItems' => 32,
                                ],
                                'Size' => [
                                    'description' => '目标阿里云服务器ECS的数据盘大小，单位为GiB。取值范围：20~32768。'."\n"
                                        .'>该参数取值需要大于迁移源数据盘实际占用大小。例如，源数据盘大小为500 GiB，实际占用100 GiB，则该参数取值需大于100 GiB。'."\n",
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '100',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 16,
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
                            'description' => '标签列表。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '迁移任务的标签键。N的取值范围：1~20'."\n"
                                        ."\n"
                                        .'一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以`aliyun`、`acs:`、`http://`或者`https://`开头。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestKey',
                                ],
                                'Value' => [
                                    'description' => '迁移任务的标签值。N的取值范围：1~20。'."\n"
                                        ."\n"
                                        .'一旦传入该值，可以为空字符串。最多支持128个字符，不能以`aliyun`、`acs:`、`http://`或者`https://`开头。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestValue',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'SystemDiskPart',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '系统盘分区信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '系统盘分区列表。',
                            'type' => 'object',
                            'properties' => [
                                'SizeBytes' => [
                                    'description' => '系统盘分区N大小。单位：Byte。默认为源系统盘分区大小。'."\n"
                                        .'> - 分区空间大小不能超过系统盘空间大小，并且在系统盘下所有分区空间大小之和不能超过系统盘空间大小。'."\n"
                                        .'- 当`SystemDiskPart.N.Device`不为空时，该参数也不能为空。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'example' => '254803968',
                                ],
                                'Block' => [
                                    'description' => '系统盘分区N是否开启块复制。取值范围：'."\n"
                                        .'- true。'."\n"
                                        .'- false。'."\n"
                                        ."\n"
                                        .'默认值：true。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                                'Device' => [
                                    'description' => '目标系统盘分区N设备标识。N的实际取值请参考迁移源的分区设备标识。'."\n"
                                        .'> 当`SystemDiskPart.N.SizeBytes`不为空时，该参数也不能为空。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '0_1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 32,
                    ],
                ],
                [
                    'name' => 'JobType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务的类型。取值范围：'."\n"
                            ."\n"
                            .'- 0：服务器迁移。'."\n"
                            .'- 1：操作系统迁移。'."\n"
                            .'- 2：跨可用区迁移。'."\n"
                            .'- 3：VMware无代理迁移。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmw3ty5y7****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。 ',
                                'type' => 'string',
                                'example' => 'C8B26B44-0189-443E-9816-D951F59623A9',
                            ],
                            'JobId' => [
                                'description' => '迁移任务ID。',
                                'type' => 'string',
                                'example' => 'j-bp17bclvg344jlyt****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ReplicationJobDataDiskIndex.Invalid',
                        'errorMessage' => 'The specified replication job contains data disk index not found in source server.',
                    ],
                    [
                        'errorCode' => 'VSwitchIdVpcId.Mismatch',
                        'errorMessage' => 'The specified VSwitchId and VpcId does not match.',
                    ],
                    [
                        'errorCode' => 'InvalidSecurityGroupId.IncorrectNetworkType',
                        'errorMessage' => 'The network type of the specified security group does not support this action.',
                    ],
                    [
                        'errorCode' => 'InvalidSecurityGroupId.VPCMismatch',
                        'errorMessage' => 'The specified security group and the specified virtual switch are not in the same VPC.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.ReplicationJob',
                        'errorMessage' => 'The maximum number of replication jobs is exceeded. Please submit a ticket to raise the quota.',
                    ],
                    [
                        'errorCode' => 'ReplicationJobName.Duplicate',
                        'errorMessage' => 'The specified replication job name already exists.',
                    ],
                    [
                        'errorCode' => 'SourceServerState.Invalid',
                        'errorMessage' => 'The specified source server status: %s is invalid. This operation can only be performed in the following status: %s.',
                    ],
                    [
                        'errorCode' => 'ImageName.UsedByReplicationJob',
                        'errorMessage' => 'The specified imageName: "%s" was used by another replication job in the current region.',
                    ],
                    [
                        'errorCode' => 'InvalidOsMigrationType.NotMatched',
                        'errorMessage' => 'The SourceOsType: %s and TargetOsType: %s are not matched. The supported TargetOsType list is: %s.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'EntityNotExist.Role',
                        'errorMessage' => 'The account is unauthorized. Please assign the role AliyunServiceRoleForSMC to your account.',
                    ],
                    [
                        'errorCode' => 'RealNameAuthenticationError',
                        'errorMessage' => 'You must perform real-name verification for your account.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again. If the problem still exists, please submit a ticket.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C8B26B44-0189-443E-9816-D951F59623A9\\",\\n  \\"JobId\\": \\"j-bp17bclvg344jlyt****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateReplicationJobResponse>\\n    <RequestId>C8B26B44-0189-443E-9816-D951F59623A9</RequestId>\\n    <JobId>j-bp17bclvg344jlyt****</JobId>\\n</CreateReplicationJobResponse>","errorExample":""}]',
            'title' => '创建一个迁移任务',
            'description' => '## 接口说明'."\n"
                ."\n\n"
                .'- 您只能为在线（Available）状态的迁移源创建迁移任务。'."\n"
                .'- 每个迁移源仅能关联一个未完成状态的迁移任务。未完成状态包括Ready（未开始）、Running（运行中）、Stopped（已暂停）、Waiting（等待中）、InError（出错）和Expired（已过期）。'."\n"
                .'- 每个阿里云账号可创建1000个迁移任务。'."\n"
                .'- 迁移目标类型为镜像时，需指定ImageName、SystemDiskSize、DataDisk参数。'."\n"
                .'- 使用VPC内网迁移时，VSwitchId参数为必填，VpcId参数为可选。'."\n"
                .'- 支持迁移源的迁移目标为Docker容器镜像，实现低成本容器化应用迁移。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyReplicationJobAttribute' => [
            'summary' => '调用ModifyReplicationJobAttribute修改迁移任务信息。',
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
                'operationType' => 'update',
                'abilityTreeCode' => '18572',
                'abilityTreeNodes' => [
                    'FEATUREsmcTXNBS6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'j-bp19vlwm0tyigbmj****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务名称。迁移任务的名称需满足以下要求：'."\n"
                            ."\n"
                            .'-  任务名称必须唯一。'."\n"
                            .'- 长度为2~128个英文或中文字符，必须以大小写字母或中文开头，不能以`http://`和`https://`开头，可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testMigrationTaskName',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务描述。'."\n"
                            ."\n"
                            .'长度应为2~128个英文或中文字符，必须以大小写字母或中文开头，不能以`http://`和`https://`开头，可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This_is_my_migration_task',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移交付的目标类型。仅支持在迁移任务启动前修改。取值范围：'."\n"
                            .'- Image：迁移成功后，SMC为您的源服务器生成阿里云镜像，您可使用该镜像创建ECS实例达到迁移至阿里云的目的。'."\n"
                            .'- ContainerImage：迁移成功后，SMC为您的源服务器生成容器镜像，您可以在容器镜像服务中使用该镜像。'."\n"
                            ."\n"
                            .'- TargetInstance：迁移成功后，SMC将您的迁移源直接迁移至目标实例。当您设置该参数值时，您需要同时指定`InstanceId`参数。'."\n"
                            ."\n"
                            .'> - 该参数的取值不区分大小写。'."\n"
                            .'- Windows操作系统和Arm架构操作系统不支持迁移至容器镜像。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Image',
                    ],
                ],
                [
                    'name' => 'ScheduledStartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置迁移任务的执行时间。SMC在指定时间自动为您启动迁移任务。'."\n"
                            ."\n"
                            .'执行时间遵循ISO8601标准，并需要使用UTC时间，格式为YYYY-MM-DDThh:mm:ssZ。例如，2018-01-01T12:00:00Z，表示北京时间2018年01月01日20点00分00秒。'."\n"
                            ."\n"
                            .'>当执行时间为空时，SMC不自动启动迁移任务，您需要调用[StartReplicationJob](~~121823~~)启动。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2019-06-04T13:35:00Z',
                    ],
                ],
                [
                    'name' => 'ImageName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务交付的目标镜像名称。目标镜像的名称需满足以下要求：'."\n"
                            ."\n"
                            .'- 同一阿里云地域下，镜像名称必须唯一。'."\n"
                            .'- 长度为2~128个英文或中文字符，必须以大小写字母或中文开头，不能以`http://`和`https://`开头，可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。'."\n"
                            ."\n"
                            .'>如果迁移任务运行过程中，当前地域已经存在相同名称的镜像，则系统默认在镜像名称后面添加迁移任务ID（JobId）作为后缀，如：ImageName-JobId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testAliCloudImageName',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'i-bp1f1dvfto1sigz5****',
                    ],
                ],
                [
                    'name' => 'SystemDiskSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标阿里云服务器ECS的系统盘大小，单位：GiB。取值范围为20~500。'."\n"
                            ."\n"
                            .'> 参数取值需要大于源服务器系统盘实际占用大小，例如，源系统盘大小为500 GiB，实际占用100 GiB，则该参数取值需大于100 GiB。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'Frequency',
                    'in' => 'query',
                    'schema' => [
                        'description' => '增量迁移任务运行的时间间隔，单位：小时。取值范围为1~168。'."\n"
                            ."\n"
                            .'`RunOnce`参数值为false时，该参数为必填参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'MaxNumberOfImageToKeep',
                    'in' => 'query',
                    'schema' => [
                        'description' => '增量迁移任务默认保留的最大镜像数。取值范围为1~10。'."\n"
                            ."\n"
                            .'`RunOnce`参数值为false时，该参数为必填参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '中转实例的实例规格。'."\n"
                            ."\n"
                            .'调用[DescribeInstanceTypes](~~25620~~)可查询云服务器ECS提供的实例规格。'."\n"
                            ."\n"
                            .'- 指定该参数后，系统会选择该实例规格创建中转实例。若该实例规格库存不足，则迁移任务创建失败。'."\n"
                            .'- 不指定该参数时，系统会默认按照一定顺序选择实例规格来创建中转实例，详情请参见[SMC'."\n"
                            .' FAQ 中转实例规格有哪些](~~121707~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs.c5.large',
                    ],
                ],
                [
                    'name' => 'LaunchTemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例启动模板ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'lt-bp16jovvln1cgaaq****',
                    ],
                ],
                [
                    'name' => 'LaunchTemplateVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例启动模板的版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Latest',
                    ],
                ],
                [
                    'name' => 'InstanceRamRole',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例RAM角色名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SMCAdmin',
                    ],
                ],
                [
                    'name' => 'ContainerNamespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Docker的命名空间。关于Docker容器镜像详情请参见[容器镜像服务](~~60744~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testNamespace',
                    ],
                ],
                [
                    'name' => 'ContainerRepository',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Docker的镜像仓库。关于Docker容器镜像详情请参见[容器镜像服务](~~60744~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testRepository',
                    ],
                ],
                [
                    'name' => 'ContainerTag',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Docker的镜像标签。关于Docker容器镜像详情请参见[容器镜像服务](~~60744~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CentOS:v1',
                    ],
                ],
                [
                    'name' => 'ValidTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务的过期时间。取值范围：迁移任务创建时间+7天~迁移任务创建时间+90天'."\n"
                            ."\n"
                            .'- 过期时间只允许迁移任务在Ready（未开始）、Running（运行中）、Stopped（已暂停）、InError（出错）或Waiting（等待中）状态下修改。'."\n"
                            .'- 过期时间须遵循ISO8601标准，并需要使用UTC+0时间，格式为`YYYY-MM-DDThh:mm:ssZ`。例如，2018-01-01T12:00:00Z，表示北京时间2018年01月01日20点00分00秒。'."\n"
                            .'- 过期时间设置为空，表示任务无限期有效。'."\n"
                            .'- 任务到期后会被标记为过期状态，保存7天，7天后系统会自动清理。'."\n"
                            ."\n"
                            .'默认值：迁移任务创建时间+30天（表示迁移任务的默认有效期为创建后30天）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2019-06-04T13:35:00Z',
                    ],
                ],
                [
                    'name' => 'SystemDiskPart',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '系统盘分区列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '系统盘分区列表。',
                            'type' => 'object',
                            'properties' => [
                                'SizeBytes' => [
                                    'description' => '目标系统盘分区N大小。单位：Byte。默认为源系统盘分区大小。'."\n"
                                        .'> 分区空间大小不能超过系统盘空间大小，并且在系统盘下所有分区空间大小之和不能超过系统盘空间大小。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'example' => '254803968',
                                ],
                                'Block' => [
                                    'description' => '目标系统盘分区N是否开启块复制。取值范围：'."\n"
                                        .'- true。'."\n"
                                        .'- false。'."\n",
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                                'Device' => [
                                    'description' => '目标系统盘分区N设备标识。'."\n"
                                        .'> N的实际取值请参考迁移源的分区设备标识。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '0_1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 32,
                    ],
                ],
                [
                    'name' => 'DataDisk',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '数据盘列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '数据盘列表。',
                            'type' => 'object',
                            'properties' => [
                                'Index' => [
                                    'description' => '目标阿里云服务器ECS的数据盘顺序。取值范围为1~16。'."\n"
                                        ."\n"
                                        .'初始值为1。'."\n"
                                        ."\n"
                                        .'>您只能为源服务器中存在的数据盘创建目标数据盘。'."\n"
                                        ."\n",
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '1',
                                ],
                                'Part' => [
                                    'description' => '分区列表。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '分区列表。',
                                        'type' => 'object',
                                        'properties' => [
                                            'SizeBytes' => [
                                                'description' => '目标数据盘N分区N的大小。单位：Byte。默认为源数据盘分区大小。'."\n"
                                                    .'> 分区空间大小不能超过数据盘空间大小，并且在同一数据盘下所有分区空间大小之和不能超过数据盘空间大小。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                                'example' => '254803968',
                                            ],
                                            'Block' => [
                                                'description' => '目标数据盘N分区N是否开启块复制。取值范围：'."\n"
                                                    .'- true。'."\n"
                                                    .'- false。',
                                                'type' => 'boolean',
                                                'required' => false,
                                                'example' => 'true',
                                            ],
                                            'Device' => [
                                                'description' => '目标数据盘N分区N对应的分区设备标识。'."\n"
                                                    .'> N的实际取值请参考迁移源的分区设备标识。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '0_1',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                    'maxItems' => 32,
                                ],
                                'Size' => [
                                    'description' => '目标阿里云服务器ECS的数据盘大小，单位：GiB。取值范围为20~32768。'."\n"
                                        ."\n"
                                        .'>参数取值需要大于源服务器数据盘实际占用大小。例如，源数据盘大小为500 GiB，实际占用100 GiB，则该参数取值需大于100 GiB。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '100',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'NetMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据传输网络模式。取值范围：'."\n"
                            ."\n"
                            .'- 0：表示公网传输模式。此时要求您的源服务器能够访问公网，迁云数据从公网传输。'."\n"
                            .'- 2：表示内网传输模式，选用此模式必须设置VSwitchId参数（VpcId参数可以不设置，服务内部可以通过接口反查出来）。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定VPC下的虚拟交换机ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-bp1ddbrxdlrcbim46****',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已配置高速通道服务或者VPN网关的VPC ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-bp1vwnn14rqpyiczj****',
                    ],
                ],
                [
                    'name' => 'ReplicationParameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '复制驱动器的参数信息。参数信息为JSON格式键值对，键值固定。最大长度：2048个字符。'."\n"
                            ."\n"
                            .'复制驱动器是指，复制源服务器数据到中转实例时所使用的工具。不同复制驱动器支持参数可能不同。复制驱动器SMT目前支持以下参数：'."\n"
                            ."\n"
                            .'- bandwidth_limit：传输速度带宽限制。'."\n"
                            .'- compress_level：传输压缩率。'."\n"
                            .'- checksum：是否开启checksum校验。'."\n"
                            ."\n"
                            .'复制驱动器的取值，请参见[DescribeSourceServers](~~2402126~~)的返回参数`SourceServers.ReplicationDriver`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"bandwidth_limit":0,"compress_level":1,"checksum":true}',
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
                                'example' => '1C488B66-B819-4D14-8711-C4EAAA13AC01',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DataDisk.DuplicateIndex',
                        'errorMessage' => 'The source server data disk cannot contain the same index.',
                    ],
                    [
                        'errorCode' => 'ReplicationJobDataDiskIndex.Invalid',
                        'errorMessage' => 'The specified replication job contains data disk index not found in source server.',
                    ],
                    [
                        'errorCode' => 'ReplicationJobName.Duplicate',
                        'errorMessage' => 'The specified replication job name already exists.',
                    ],
                    [
                        'errorCode' => 'ReplicationJob.InvalidStatus',
                        'errorMessage' => 'The specified replication job status: %s is invalid. This operation can only be performed in the following status: %s.',
                    ],
                    [
                        'errorCode' => 'ReplicationJob.InvalidBusinessStatus',
                        'errorMessage' => 'The specified business status: %s of the replication job is invalid. This operation can only be performed in the following status: %s.',
                    ],
                    [
                        'errorCode' => 'ImageName.UsedByReplicationJob',
                        'errorMessage' => 'The specified imageName: "%s" was used by another replication job in the current region.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again. If the problem still exists, please submit a ticket.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1C488B66-B819-4D14-8711-C4EAAA13AC01\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyReplicationJobAttributeResponse>\\n    <RequestId>1C488B66-B819-4D14-8711-C4EAAA13AC01</RequestId>\\n</ModifyReplicationJobAttributeResponse>","errorExample":""}]',
            'title' => '修改迁移任务',
            'description' => '## 接口说明'."\n"
                ."\n"
                .'修改迁移任务之前，请阅读以下注意事项：'."\n"
                ."\n"
                .'- 参数`Name`和`Description`在迁移任务的整个生命周期内均可以修改。'."\n"
                ."\n"
                .'- 参数`Frequency`和`MaxNumberOfImageToKeep`只能在迁移任务执行前或任务状态为`等待中`时修改。'."\n"
                ."\n"
                .'- 其他参数只能在迁移任务执行前修改。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'StartReplicationJob' => [
            'summary' => '调用StartReplicationJob启动一个迁移任务。',
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
                'operationType' => 'update',
                'abilityTreeCode' => '18576',
                'abilityTreeNodes' => [
                    'FEATUREsmcTXNBS6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'j-bw526m1vi6x21q****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '请求ID。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ReplicationJob.InvalidStatus',
                        'errorMessage' => 'The specified replication job status: %s is invalid. This operation can only be performed in the following status: %s.',
                    ],
                    [
                        'errorCode' => 'SourceServerState.Invalid',
                        'errorMessage' => 'The specified source server status: %s is invalid. This operation can only be performed in the following status: %s.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again. If the problem still exists, please submit a ticket.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<StartReplicationJobResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</StartReplicationJobResponse>","errorExample":""}]',
            'title' => '启动一个迁移任务',
            'description' => '## 接口说明'."\n"
                ."\n"
                .'您只能使用该API启动**Ready（未开始）**、**Stopped（已暂停）**或**InError（出错）**状态的迁移任务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'StopReplicationJob' => [
            'summary' => '调用StopReplicationJob停止一个迁移任务。',
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
                'operationType' => 'update',
                'abilityTreeCode' => '18577',
                'abilityTreeNodes' => [
                    'FEATUREsmcTXNBS6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'j-bw526m1vi6x21qh****',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ReplicationJob.InvalidStatus',
                        'errorMessage' => 'The specified replication job status: %s is invalid. This operation can only be performed in the following status: %s.',
                    ],
                    [
                        'errorCode' => 'ReplicationJob.InvalidBusinessStatus',
                        'errorMessage' => 'The specified business status: %s of the replication job is invalid. This operation can only be performed in the following status: %s.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again. If the problem still exists, please submit a ticket.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<StopReplicationJobResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</StopReplicationJobResponse>","errorExample":""}]',
            'title' => '停止一个迁移任务',
            'description' => '## 接口说明'."\n"
                ."\n"
                .'您只能使用该API停止正在运行中（Running）且处于同步中（Syncing）状态的迁移任务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeReplicationJobs' => [
            'summary' => '调用DescribeReplicationJobs查询一个或多个迁移任务的详细信息。',
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
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testMigrationTaskName',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移源需迁入的目标阿里云地域ID。'."\n"
                            ."\n"
                            .'例如，您需要迁移源服务器至杭州，则RegionId为`cn-hangzhou`。您可以调用[DescribeRegions](~~25609~~)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务的主状态。取值范围：'."\n"
                            ."\n"
                            .'- Ready：未开始。'."\n"
                            .'- Running：运行中。'."\n"
                            .'- Stopped：已暂停。'."\n"
                            .'- InError：出错。'."\n"
                            .'- Finished：已完成。'."\n"
                            .'- Waiting：等待中。'."\n"
                            .'- Expired：已过期。'."\n"
                            .'- Deleting：删除中。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Ready',
                    ],
                ],
                [
                    'name' => 'BusinessStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务的业务状态。取值范围：'."\n"
                            ."\n"
                            .'- Preparing：准备中。'."\n"
                            .'- Syncing：同步中。'."\n"
                            .'- Processing：处理中。'."\n"
                            .'- Cleaning：清理中。'."\n"
                            ."\n\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Preparing',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果中，迁移任务列表的页码。起始值：1。'."\n"
                            ."\n"
                            .'默认值：1。',
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
                        'description' => '分页查询时设置的每页行数。最大值：50。'."\n"
                            ."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '50',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'SourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '迁移源ID列表。N的最大值为50。',
                        'type' => 'array',
                        'items' => [
                            'description' => '迁移源ID列表。N的最大值为50。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 's-bp1bjhkwk2j5hlbn****',
                        ],
                        'required' => false,
                        'example' => 's-bp1e2fsl57knvuug****',
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '迁移任务ID列表。N的最大值：50。',
                        'type' => 'array',
                        'items' => [
                            'description' => '迁移任务ID列表。N的最大值：50。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'j-bp1h3d33mekxwu0n****',
                        ],
                        'required' => false,
                        'example' => 'j-bp19vlwm0tyigbmj****',
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'JobType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务的类型。取值范围：'."\n"
                            ."\n"
                            .'- 0：服务器迁移。'."\n"
                            .'- 1：操作系统迁移。'."\n"
                            .'- 2：跨可用区迁移。'."\n"
                            .'- 3：VMware无代理迁移。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '目标实例ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'i-bp1f1dvfto1sigz5****',
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmw3ty5y7****',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '为SMC资源指定的标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '为SMC资源指定的标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '为SMC资源指定的标签键。N的取值范围：1~20。'."\n"
                                        ."\n"
                                        .'一旦传入该值，可以为空字符串。最多支持64个字符，不能包含http:\\//或者https:\\//。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestKey',
                                ],
                                'Value' => [
                                    'description' => '为SMC资源指定的标签值。N的取值范围：1~20。'."\n"
                                        ."\n"
                                        .'一旦传入该值，可以为空字符串。最多支持64个字符，不能包含http://或者https://。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestValue',
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
                            'TotalCount' => [
                                'description' => '迁移任务总个数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'ReplicationJobs' => [
                                'type' => 'object',
                                'properties' => [
                                    'ReplicationJob' => [
                                        'description' => '迁移任务详情的集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '迁移任务详情的集合。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Frequency' => [
                                                    'description' => '增量迁移任务自动执行的时间间隔，单位：小时。取值范围：1~168。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '15',
                                                ],
                                                'VpcId' => [
                                                    'description' => '已配置高速通道服务或者VPN网关的VPC ID。',
                                                    'type' => 'string',
                                                    'example' => 'vpc-bp1vwnn14rqpyiczj****',
                                                ],
                                                'CreationTime' => [
                                                    'description' => '迁移任务的创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2014-07-24T13:00:52Z',
                                                ],
                                                'Status' => [
                                                    'description' => '迁移任务的主状态。可能值：'."\n"
                                                        .'- Ready：未开始。'."\n"
                                                        .'- Running：运行中。'."\n"
                                                        .'- Stopped：已暂停。'."\n"
                                                        .'- InError：出错。'."\n"
                                                        .'- Finished：已完成。'."\n"
                                                        .'- Waiting：等待中。'."\n"
                                                        .'- Expired：已过期。'."\n"
                                                        .'- Deleting：删除中。',
                                                    'type' => 'string',
                                                    'example' => 'Running',
                                                ],
                                                'ScheduledStartTime' => [
                                                    'description' => '迁移任务的执行时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。该参数值的设置需满足以下要求：'."\n"
                                                        ."\n"
                                                        .'- 该参数值必须晚于当前时间，并且需要设置在30天以内。'."\n"
                                                        ."\n"
                                                        .'- 如果该参数值为空，则SMC不会启动迁移任务，需要您调用[StartReplicationJob](~~121823~~)启动任务。',
                                                    'type' => 'string',
                                                    'example' => '2019-06-04T13:35:00Z',
                                                ],
                                                'MaxNumberOfImageToKeep' => [
                                                    'description' => '增量迁移任务默认保留的最大镜像数。取值范围：1~10。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '8',
                                                ],
                                                'ContainerNamespace' => [
                                                    'description' => 'Docker的命名空间。',
                                                    'type' => 'string',
                                                    'example' => 'testNamespace',
                                                ],
                                                'DataDisks' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'DataDisk' => [
                                                            'description' => '目标阿里云服务器ECS的数据盘。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '目标阿里云服务器ECS的数据盘。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Index' => [
                                                                        'description' => '数据盘顺序。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '1',
                                                                    ],
                                                                    'Size' => [
                                                                        'description' => '数据盘大小。单位：GiB。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '40',
                                                                    ],
                                                                    'Parts' => [
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'Part' => [
                                                                                'description' => '数据盘分区信息。',
                                                                                'type' => 'array',
                                                                                'items' => [
                                                                                    'description' => '数据盘分区信息。',
                                                                                    'type' => 'object',
                                                                                    'properties' => [
                                                                                        'SizeBytes' => [
                                                                                            'description' => '数据盘分区大小。单位：Byte。',
                                                                                            'type' => 'integer',
                                                                                            'format' => 'int64',
                                                                                            'example' => '21474836480',
                                                                                        ],
                                                                                        'Block' => [
                                                                                            'description' => '分区是否开启块复制。',
                                                                                            'type' => 'boolean',
                                                                                            'example' => 'true',
                                                                                        ],
                                                                                        'Device' => [
                                                                                            'description' => '数据盘分区设备标识。',
                                                                                            'type' => 'string',
                                                                                            'example' => '0_1',
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
                                                'StatusInfo' => [
                                                    'description' => ' 迁移状态的详细信息。',
                                                    'type' => 'string',
                                                    'example' => 'statusinfo',
                                                ],
                                                'InstanceRamRole' => [
                                                    'description' => '实例RAM角色名称。',
                                                    'type' => 'string',
                                                    'example' => 'SMCAdmin',
                                                ],
                                                'SystemDiskSize' => [
                                                    'description' => '目标阿里云服务器ECS的系统盘大小。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '40',
                                                ],
                                                'Description' => [
                                                    'description' => '迁移任务的描述。',
                                                    'type' => 'string',
                                                    'example' => 'This is my migration task.',
                                                ],
                                                'ReplicationParameters' => [
                                                    'description' => '复制驱动器参数信息。',
                                                    'type' => 'string',
                                                    'example' => 'BandWidthLimit:0',
                                                ],
                                                'ErrorCode' => [
                                                    'description' => '迁移任务的错误码。',
                                                    'type' => 'string',
                                                    'example' => 'InternalError',
                                                ],
                                                'ValidTime' => [
                                                    'description' => '   迁移任务的过期时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。'."\n"
                                                        ."\n"
                                                        .'> +8小时后是控制台上显示的时间。',
                                                    'type' => 'string',
                                                    'example' => '2019-06-08T14:40:52Z',
                                                ],
                                                'NetMode' => [
                                                    'description' => '迁移时使用的网络类型。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'ContainerTag' => [
                                                    'description' => 'Docker的镜像标签。',
                                                    'type' => 'string',
                                                    'example' => 'CentOS:v1',
                                                ],
                                                'LicenseType' => [
                                                    'description' => '迁移任务的许可证类型。可能值：'."\n"
                                                        ."\n"
                                                        .'- 空值：无许可证。'."\n"
                                                        .'- BYOL：自带许可。',
                                                    'type' => 'string',
                                                    'example' => 'BYOL',
                                                ],
                                                'Name' => [
                                                    'description' => '迁移任务名称。',
                                                    'type' => 'string',
                                                    'example' => 'testMigrationTaskName',
                                                ],
                                                'ImageId' => [
                                                    'description' => '迁移任务交付的目标镜像ID。',
                                                    'type' => 'string',
                                                    'example' => 'm-o6w3gy99qf89rkga****',
                                                ],
                                                'Progress' => [
                                                    'description' => '迁移任务总进度。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '100',
                                                ],
                                                'RunOnce' => [
                                                    'description' => '区分一次性迁移任务和增量迁移任务。可能值：'."\n"
                                                        ."\n"
                                                        .'- true：一次性迁移任务。任务创建后仅执行一次。'."\n"
                                                        ."\n"
                                                        .'- false：增量迁移任务。任务创建后，按照`Frequency`设置的时间间隔，周期性自动执行。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'LaunchTemplateId' => [
                                                    'description' => '实例启动模板ID。',
                                                    'type' => 'string',
                                                    'example' => 'lt-launchtemplateid',
                                                ],
                                                'ContainerRepository' => [
                                                    'description' => 'Docker的镜像仓库。',
                                                    'type' => 'string',
                                                    'example' => 'testRepository',
                                                ],
                                                'InstanceId' => [
                                                    'description' => '目标实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'i-bp1ff25rzvnul6kr****',
                                                ],
                                                'SystemDiskParts' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'SystemDiskPart' => [
                                                            'description' => '系统盘分区信息。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '系统盘分区信息。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'SizeBytes' => [
                                                                        'description' => '系统盘分区大小。单位：Byte。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int64',
                                                                        'example' => '254803968',
                                                                    ],
                                                                    'Block' => [
                                                                        'description' => '系统盘分区是否开启块复制。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'true',
                                                                    ],
                                                                    'Device' => [
                                                                        'description' => '系统盘分区设备标识符。',
                                                                        'type' => 'string',
                                                                        'example' => '0_1',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'InstanceType' => [
                                                    'description' => '中转实例的实例规格。',
                                                    'type' => 'string',
                                                    'example' => 'ecs.sn1ne.large',
                                                ],
                                                'SourceId' => [
                                                    'description' => '迁移源ID。',
                                                    'type' => 'string',
                                                    'example' => 's-bp1e2fsl57knvuug****',
                                                ],
                                                'LaunchTemplateVersion' => [
                                                    'description' => '一个或多个实例启动模板版本。',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'RegionId' => [
                                                    'description' => '迁移源需迁入的目标阿里云地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'TransitionInstanceId' => [
                                                    'description' => '迁移中转实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'i-bp1ff25rzvnul6kr****',
                                                ],
                                                'EndTime' => [
                                                    'description' => '迁移任务的完成时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。'."\n"
                                                        ."\n"
                                                        .'> +8小时后是控制台上显示的时间。',
                                                    'type' => 'string',
                                                    'example' => '2019-06-04T16:00:52Z',
                                                ],
                                                'StartTime' => [
                                                    'description' => '迁移任务的开始时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。'."\n"
                                                        ."\n"
                                                        .'> +8小时后是控制台上显示的时间。',
                                                    'type' => 'string',
                                                    'example' => '2019-06-04T14:40:52Z',
                                                ],
                                                'VSwitchId' => [
                                                    'description' => '指定VPC下的虚拟交换机ID。',
                                                    'type' => 'string',
                                                    'example' => 'vsw-bp1ddbrxdlrcbim46****',
                                                ],
                                                'JobId' => [
                                                    'description' => '迁移任务ID。',
                                                    'type' => 'string',
                                                    'example' => 'j-bp19vlwm0tyigbmj****',
                                                ],
                                                'ImageName' => [
                                                    'description' => '迁移任务交付的目标镜像名称。',
                                                    'type' => 'string',
                                                    'example' => 'testAliCloudImageName',
                                                ],
                                                'BusinessStatus' => [
                                                    'description' => '迁移任务的业务状态。可能值：'."\n"
                                                        .'- Preparing：准备中。'."\n"
                                                        .'- Syncing：同步中。'."\n"
                                                        .'- Processing：处理中。'."\n"
                                                        .'- Cleaning：清理中。',
                                                    'type' => 'string',
                                                    'example' => 'Preparing',
                                                ],
                                                'ReplicationJobRuns' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ReplicationJobRun' => [
                                                            'description' => '迁移任务运行记录。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '迁移任务运行记录。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'EndTime' => [
                                                                        'description' => '迁移任务运行的结束时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。'."\n"
                                                                            ."\n"
                                                                            .'> +8小时后是控制台上显示的时间。',
                                                                        'type' => 'string',
                                                                        'example' => '2019-10-04T13:35:00Z',
                                                                    ],
                                                                    'Type' => [
                                                                        'description' => '迁移任务的执行方式。可能值：'."\n"
                                                                            ."\n"
                                                                            .'- Manual：手动执行。'."\n"
                                                                            ."\n"
                                                                            .'- Schedule：定时执行或周期执行。',
                                                                        'type' => 'string',
                                                                        'example' => 'Schedule',
                                                                    ],
                                                                    'StartTime' => [
                                                                        'description' => '迁移任务运行的开始时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。'."\n"
                                                                            ."\n"
                                                                            .'> +8小时后是控制台上显示的时间。',
                                                                        'type' => 'string',
                                                                        'example' => '2019-10-01T13:35:00Z',
                                                                    ],
                                                                    'ImageId' => [
                                                                        'description' => '迁移任务生成的镜像ID。',
                                                                        'type' => 'string',
                                                                        'example' => 'm-o6w3gy99qf89rkga****',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'TargetType' => [
                                                    'description' => '迁移交付的目标类型。可能值：'."\n"
                                                        ."\n"
                                                        .'- Image：迁移成功后，SMC为您的迁移源生成阿里云镜像。'."\n"
                                                        .'- ContainerImage：迁移成功后，SMC为您的迁移源生成Docker容器镜像。'."\n"
                                                        .'- TargetInstance：迁移成功后，SMC将您的迁移源直接迁移至目标实例。当您设置该参数值时，您需要同时指定InstanceId参数。',
                                                    'type' => 'string',
                                                    'example' => 'Image',
                                                ],
                                                'JobType' => [
                                                    'description' => '迁移任务的类型。可能值：'."\n"
                                                        ."\n"
                                                        .'- 0：服务器迁移。'."\n"
                                                        .'- 1：操作系统迁移。'."\n"
                                                        .'- 2：跨可用区迁移。'."\n"
                                                        .'- 3：VMware无代理迁移。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'ResourceGroupId' => [
                                                    'description' => '资源组ID。',
                                                    'type' => 'string',
                                                    'example' => 'rg-acfmw3ty5y7****',
                                                ],
                                                'Tags' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Tag' => [
                                                            'description' => '为SMC资源指定的标签。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '为SMC资源指定的标签。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Key' => [
                                                                        'description' => '为SMC资源指定的标签键。N的取值范围：1~20。'."\n"
                                                                            ."\n"
                                                                            .'一旦传入该值，可以为空字符串。最多支持64个字符，不能包含http://或者https://。',
                                                                        'type' => 'string',
                                                                        'example' => 'TestKey',
                                                                    ],
                                                                    'Value' => [
                                                                        'description' => '为SMC资源指定的标签值。N的取值范围：1~20。'."\n"
                                                                            ."\n"
                                                                            .'一旦传入该值，可以为空字符串。最多支持64个字符，不能包含http://或者https://。',
                                                                        'type' => 'string',
                                                                        'example' => 'TestValue',
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
                            'PageSize' => [
                                'description' => '每页行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6E1187E8-843A-4850-B97E-2F17F00D48F7',
                            ],
                            'PageNumber' => [
                                'description' => '迁移任务列表的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Forbidden.Unauthorized',
                        'errorMessage' => 'A required authorization for the specified action is not supplied.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again. If the problem still exists, please submit a ticket.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 5,\\n  \\"ReplicationJobs\\": {\\n    \\"ReplicationJob\\": [\\n      {\\n        \\"Frequency\\": 15,\\n        \\"VpcId\\": \\"vpc-bp1vwnn14rqpyiczj****\\",\\n        \\"CreationTime\\": \\"2014-07-24T13:00:52Z\\",\\n        \\"Status\\": \\"Running\\",\\n        \\"ScheduledStartTime\\": \\"2019-06-04T13:35:00Z\\",\\n        \\"MaxNumberOfImageToKeep\\": 8,\\n        \\"ContainerNamespace\\": \\"testNamespace\\",\\n        \\"DataDisks\\": {\\n          \\"DataDisk\\": [\\n            {\\n              \\"Index\\": 1,\\n              \\"Size\\": 40,\\n              \\"Parts\\": {\\n                \\"Part\\": [\\n                  {\\n                    \\"SizeBytes\\": 21474836480,\\n                    \\"Block\\": true,\\n                    \\"Device\\": \\"0_1\\"\\n                  }\\n                ]\\n              }\\n            }\\n          ]\\n        },\\n        \\"StatusInfo\\": \\"statusinfo\\",\\n        \\"InstanceRamRole\\": \\"SMCAdmin\\",\\n        \\"SystemDiskSize\\": 40,\\n        \\"Description\\": \\"This is my migration task.\\",\\n        \\"ReplicationParameters\\": \\"BandWidthLimit:0\\",\\n        \\"ErrorCode\\": \\"InternalError\\",\\n        \\"ValidTime\\": \\"2019-06-08T14:40:52Z\\",\\n        \\"NetMode\\": 0,\\n        \\"ContainerTag\\": \\"CentOS:v1\\",\\n        \\"LicenseType\\": \\"BYOL\\",\\n        \\"Name\\": \\"testMigrationTaskName\\",\\n        \\"ImageId\\": \\"m-o6w3gy99qf89rkga****\\",\\n        \\"Progress\\": 100,\\n        \\"RunOnce\\": true,\\n        \\"LaunchTemplateId\\": \\"lt-launchtemplateid\\",\\n        \\"ContainerRepository\\": \\"testRepository\\",\\n        \\"InstanceId\\": \\"i-bp1ff25rzvnul6kr****\\",\\n        \\"SystemDiskParts\\": {\\n          \\"SystemDiskPart\\": [\\n            {\\n              \\"SizeBytes\\": 254803968,\\n              \\"Block\\": true,\\n              \\"Device\\": \\"0_1\\"\\n            }\\n          ]\\n        },\\n        \\"InstanceType\\": \\"ecs.sn1ne.large\\",\\n        \\"SourceId\\": \\"s-bp1e2fsl57knvuug****\\",\\n        \\"LaunchTemplateVersion\\": \\"1\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"TransitionInstanceId\\": \\"i-bp1ff25rzvnul6kr****\\",\\n        \\"EndTime\\": \\"2019-06-04T16:00:52Z\\",\\n        \\"StartTime\\": \\"2019-06-04T14:40:52Z\\",\\n        \\"VSwitchId\\": \\"vsw-bp1ddbrxdlrcbim46****\\",\\n        \\"JobId\\": \\"j-bp19vlwm0tyigbmj****\\",\\n        \\"ImageName\\": \\"testAliCloudImageName\\",\\n        \\"BusinessStatus\\": \\"Preparing\\",\\n        \\"ReplicationJobRuns\\": {\\n          \\"ReplicationJobRun\\": [\\n            {\\n              \\"EndTime\\": \\"2019-10-04T13:35:00Z\\",\\n              \\"Type\\": \\"Schedule\\",\\n              \\"StartTime\\": \\"2019-10-01T13:35:00Z\\",\\n              \\"ImageId\\": \\"m-o6w3gy99qf89rkga****\\"\\n            }\\n          ]\\n        },\\n        \\"TargetType\\": \\"Image\\",\\n        \\"JobType\\": 0,\\n        \\"ResourceGroupId\\": \\"rg-acfmw3ty5y7****\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"TestKey\\",\\n              \\"Value\\": \\"TestValue\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  },\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"6E1187E8-843A-4850-B97E-2F17F00D48F7\\",\\n  \\"PageNumber\\": 1\\n}","errorExample":""},{"type":"xml","example":"<DescribeReplicationJobsResponse>\\n    <TotalCount>5</TotalCount>\\n    <ReplicationJobs>\\n        <Frequency>15</Frequency>\\n        <VpcId>vpc-bp1vwnn14rqpyiczj****</VpcId>\\n        <CreationTime>2014-07-24T13:00:52Z</CreationTime>\\n        <Status>Running</Status>\\n        <ScheduledStartTime>2019-06-04T13:35:00Z</ScheduledStartTime>\\n        <MaxNumberOfImageToKeep>8</MaxNumberOfImageToKeep>\\n        <ContainerNamespace>testNamespace</ContainerNamespace>\\n        <DataDisks>\\n            <Index>1</Index>\\n            <Size>40</Size>\\n            <Parts>\\n                <SizeBytes>21474836480</SizeBytes>\\n                <Block>true</Block>\\n                <Device>0_1</Device>\\n            </Parts>\\n        </DataDisks>\\n        <StatusInfo>statusinfo</StatusInfo>\\n        <InstanceRamRole>SMCAdmin</InstanceRamRole>\\n        <SystemDiskSize>40</SystemDiskSize>\\n        <Description>This is my migration task.</Description>\\n        <ReplicationParameters>BandWidthLimit:0</ReplicationParameters>\\n        <ErrorCode>InternalError</ErrorCode>\\n        <ValidTime>2019-06-08T14:40:52Z</ValidTime>\\n        <NetMode>0</NetMode>\\n        <ContainerTag>CentOS:v1</ContainerTag>\\n        <LicenseType>BYOL</LicenseType>\\n        <Name>testMigrationTaskName</Name>\\n        <ImageId>m-o6w3gy99qf89rkga****</ImageId>\\n        <Progress>100</Progress>\\n        <RunOnce>true</RunOnce>\\n        <LaunchTemplateId>lt-launchtemplateid</LaunchTemplateId>\\n        <ContainerRepository>testRepository</ContainerRepository>\\n        <InstanceId>i-bp1ff25rzvnul6kr****</InstanceId>\\n        <SystemDiskParts>\\n            <SizeBytes>254803968</SizeBytes>\\n            <Block>true</Block>\\n            <Device>0_1</Device>\\n        </SystemDiskParts>\\n        <InstanceType>ecs.sn1ne.large</InstanceType>\\n        <SourceId>s-bp1e2fsl57knvuug****</SourceId>\\n        <LaunchTemplateVersion>1</LaunchTemplateVersion>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <TransitionInstanceId>i-bp1ff25rzvnul6kr****</TransitionInstanceId>\\n        <EndTime>2019-06-04T16:00:52Z</EndTime>\\n        <StartTime>2019-06-04T14:40:52Z</StartTime>\\n        <VSwitchId>vsw-bp1ddbrxdlrcbim46****</VSwitchId>\\n        <JobId>j-bp19vlwm0tyigbmj****</JobId>\\n        <ImageName>testAliCloudImageName</ImageName>\\n        <BusinessStatus>Preparing</BusinessStatus>\\n        <ReplicationJobRuns>\\n            <EndTime>2019-10-04T13:35:00Z</EndTime>\\n            <Type>Schedule</Type>\\n            <StartTime>2019-10-01T13:35:00Z</StartTime>\\n            <ImageId>m-o6w3gy99qf89rkga****</ImageId>\\n        </ReplicationJobRuns>\\n        <TargetType>Image</TargetType>\\n        <JobType>0</JobType>\\n        <ResourceGroupId>rg-acfmw3ty5y7****</ResourceGroupId>\\n        <Tags>\\n            <Key>TestKey</Key>\\n            <Value>TestValue</Value>\\n        </Tags>\\n    </ReplicationJobs>\\n    <PageSize>10</PageSize>\\n    <RequestId>6E1187E8-843A-4850-B97E-2F17F00D48F7</RequestId>\\n    <PageNumber>1</PageNumber>\\n</DescribeReplicationJobsResponse>","errorExample":""}]',
            'title' => '查询一个或多个迁移任务的详细信息',
            'description' => '## 接口说明'."\n"
                ."\n"
                .'- 请求参数的作用类似于一个过滤器，过滤器为逻辑与（AND）关系。如果某一参数为空，则过滤器不起作用。'."\n"
                .'- 支持迁移源的迁移目标为Docker容器镜像，实现低成本容器化应用迁移。关于Docker容器镜像详情请参见[容器镜像服务](~~60744~~)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CutOverReplicationJob' => [
            'summary' => '将指定的自动增量迁移任务停止周期执行，并完成迁移任务。',
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
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '18561',
                'abilityTreeNodes' => [
                    'FEATUREsmcTXNBS6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动增量迁移任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'j-bp1fnx5y3djc4cop****',
                    ],
                ],
                [
                    'name' => 'SyncData',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否需要进行最后一次全量数据迁移。取值范围：'."\n"
                            ."\n"
                            .'- true：需要进行最后一次全量数据迁移。'."\n"
                            .'- false：不需要进行最后一次全量数据迁移。'."\n"
                            ."\n"
                            .'默认值：false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '请求ID。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ReplicationJob.InvalidStatus',
                        'errorMessage' => 'The specified replication job status: %s is invalid. This operation can only be performed in the following status: %s.',
                    ],
                    [
                        'errorCode' => 'ReplicationJob.InvalidBusinessStatus',
                        'errorMessage' => 'The specified business status: %s of the replication job is invalid. This operation can only be performed in the following status: %s.',
                    ],
                    [
                        'errorCode' => 'SourceServerState.Invalid',
                        'errorMessage' => 'The specified source server status: %s is invalid. This operation can only be performed in the following status: %s.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again. If the problem still exists, please submit a ticket.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<CutOverReplicationJobResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</CutOverReplicationJobResponse>","errorExample":""}]',
            'title' => '停止周期执行自动增量任务',
            'description' => "\n"
                ."\n\n"
                .'## 接口说明'."\n"
                ."\n\n"
                .'- 自动增量迁移任务的状态必须处于等待中（Waiting）。'."\n"
                ."\n"
                .'- 调用该接口后，自动增量迁移任务将不再周期执行，而是根据`SyncData`参数取值进行判断。当`SyncData=false`时，不再进行数据迁移，直接自动清理中转资源后，完成迁移任务；当`SyncData=true`时，将进行最后一次全量数据迁移，然后自动清理中转资源，完成迁移任务。'."\n",
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteReplicationJob' => [
            'summary' => '调用DeleteReplicationJob删除一个迁移任务。',
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
                'operationType' => 'delete',
                'abilityTreeCode' => '18562',
                'abilityTreeNodes' => [
                    'FEATUREsmcTXNBS6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'j-bp17m1vi6x21qhqk****',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ReplicationJob.InvalidStatus',
                        'errorMessage' => 'The specified replication job status: %s is invalid. This operation can only be performed in the following status: %s.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again. If the problem still exists, please submit a ticket.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteReplicationJobResponse>\\r\\n  <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\r\\n</DeleteReplicationJobResponse>","errorExample":""}]',
            'title' => '删除一个迁移任务',
            'description' => '## 接口说明'."\n"
                ."\n"
                .'- 迁移任务删除后不可恢复。'."\n"
                .'- 迁移任务删除后自动释放已创建的相关资源，如中转实例等。'."\n",
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'TagResources' => [
            'summary' => '调用TagResources为指定的SMC资源（迁移源和迁移任务）列表统一创建并绑定标签。',
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
            ],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SMC资源类型。取值范围：'."\n"
                            ."\n"
                            .'- sourceserver：迁移源'."\n"
                            ."\n"
                            .'- replicationjob：迁移任务',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sourceserver',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => 'SMC资源ID。SMC资源包括迁移源和迁移任务。N的取值范围：1~50',
                        'type' => 'array',
                        'items' => [
                            'description' => 'smc资源id。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 's-bw526m1vi6x20c6g****',
                        ],
                        'required' => true,
                        'example' => 's-bw526m1vi6x20c6g****',
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签信息列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签信息列表。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '为SMC资源指定的标签键。N的取值范围：1~20'."\n"
                                        ."\n"
                                        .'一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以aliyun和acs:开头，不能包含http:\\//或者https:\\//。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestKey',
                                ],
                                'Value' => [
                                    'description' => '为SMC资源指定的标签值。N的取值范围：1~20。'."\n"
                                        ."\n"
                                        .'一旦传入该值，可以为空字符串。最多支持64个字符，不能包含http://或者https://。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestValue',
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
                                'example' => '3E8B9ABB-289A-44E6-942D-8AA9E493****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NumberExceed.Tags',
                        'errorMessage' => 'The maximum number of the Tag parameters cannot exceed 20.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceType',
                        'errorMessage' => 'You must specify ResourceType.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceType.NotFound',
                        'errorMessage' => 'The specified ResourceType does not exist.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.ResourceIds',
                        'errorMessage' => 'The maximum number of ResourceId parameters cannot exceed 50.',
                    ],
                    [
                        'errorCode' => 'Duplicate.ResourceId',
                        'errorMessage' => 'The ResourceId contains duplicate values.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceId.NotFound',
                        'errorMessage' => 'The specified ResourceIds do not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3E8B9ABB-289A-44E6-942D-8AA9E493****\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>3E8B9ABB-289A-44E6-942D-8AA9E493****</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
            'title' => '绑定标签',
            'description' => '## 接口说明'."\n"
                ."\n"
                .'每个SMC资源可绑定的标签限额为20。'."\n"
                ."\n"
                .'绑定标签前，阿里云会校验资源已有标签数量，超过限额后返回报错信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTagResources' => [
            'summary' => '调用ListTagResources查询一个或多个SMC资源（迁移源和迁移任务）已经绑定的标签列表。',
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
                        'description' => 'SMC资源类型。取值范围：'."\n"
                            ."\n"
                            .'- sourceserver：表示迁移源'."\n"
                            .'- replicationjob：表示迁移任务',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sourceserver',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一个查询开始Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => 'SMC资源ID列表。SMC资源包括迁移源和迁移任务。列表最大长度 50',
                        'type' => 'array',
                        'items' => [
                            'description' => 'SMC资源ID。SMC资源包括迁移源和迁移任务',
                            'type' => 'string',
                            'required' => false,
                            'example' => 's-bp1e2fsl57knvuug****',
                        ],
                        'required' => false,
                        'example' => 's-bp1e2fsl57knvuug****',
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
                                    'description' => 'SMC资源的标签键。标签键长度的取值范围：1~64。N的取值范围：1~20。'."\n"
                                        ."\n"
                                        .'Tag.N用于精确查找绑定了指定标签的SMC资源，由一个键值对组成。'."\n"
                                        .'- 标签键和标签值严格区分大小写。'."\n"
                                        .'- 仅指定Tag.N.Key时，则返回关联该标签键的所有资源。'."\n"
                                        .'- 仅指定Tag.N.Value时，则报错InvalidParameter.TagValue。'."\n"
                                        .'- 同时指定多个标签键值对时，仅同时满足所有标签键值对的SMC资源会被查找到。'."\n"
                                        ."\n\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestKey',
                                ],
                                'Value' => [
                                    'description' => 'SMC资源的标签值。标签值长度的取值范围：1~64。N的取值范围：1~20。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestValue',
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
                                'description' => '下一个查询开始Token。'."\n"
                                    ."\n"
                                    .'NextToken为空，说明当页已显示完所有信息。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '17743161-66F3-4E7F-B8AE-845FB28B928F',
                            ],
                            'TagResources' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagResource' => [
                                        'description' => '由SMC资源及其标签组成的集合，包含了资源ID、资源类型和标签键值等信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ResourceType' => [
                                                    'description' => '资源类型。',
                                                    'type' => 'string',
                                                    'example' => 'ALIYUN::SMC::SOURCESERVER',
                                                ],
                                                'TagValue' => [
                                                    'description' => '资源的标签值。',
                                                    'type' => 'string',
                                                    'example' => 'TestValue',
                                                ],
                                                'ResourceId' => [
                                                    'description' => '资源ID。',
                                                    'type' => 'string',
                                                    'example' => 's-bp1e2fsl57knvuug****',
                                                ],
                                                'TagKey' => [
                                                    'description' => '资源的标签键。',
                                                    'type' => 'string',
                                                    'example' => 'TestKey',
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
                        'errorCode' => 'NumberExceed.Tags',
                        'errorMessage' => 'The maximum number of the Tag parameters cannot exceed 20.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceType',
                        'errorMessage' => 'You must specify ResourceType.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceType.NotFound',
                        'errorMessage' => 'The specified ResourceType does not exist.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.ResourceIds',
                        'errorMessage' => 'The maximum number of ResourceId parameters cannot exceed 50.',
                    ],
                    [
                        'errorCode' => 'Duplicate.ResourceId',
                        'errorMessage' => 'The ResourceId contains duplicate values.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceId.NotFound',
                        'errorMessage' => 'The specified ResourceIds do not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a4883\\",\\n  \\"RequestId\\": \\"17743161-66F3-4E7F-B8AE-845FB28B928F\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"ResourceType\\": \\"ALIYUN::SMC::SOURCESERVER\\",\\n        \\"TagValue\\": \\"TestValue\\",\\n        \\"ResourceId\\": \\"s-bp1e2fsl57knvuug****\\",\\n        \\"TagKey\\": \\"TestKey\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a4883</NextToken>\\n    <RequestId>17743161-66F3-4E7F-B8AE-845FB28B928F</RequestId>\\n    <TagResources>\\n        <ResourceType>ALIYUN::SMC::SOURCESERVER</ResourceType>\\n        <TagValue>TestValue</TagValue>\\n        <ResourceId>s-bp1e2fsl57knvuug****</ResourceId>\\n        <TagKey>TestKey</TagKey>\\n    </TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
            'title' => '查询标签列表',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UntagResources' => [
            'summary' => '为指定的SMC资源（迁移源和迁移任务）统一解绑并删除标签。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SMC资源类型。取值范围：'."\n"
                            ."\n"
                            .'- sourceserver：迁移源。'."\n"
                            ."\n"
                            .'- replicationjob：迁移任务。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sourceserver',
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否删除SMC资源绑定的全部标签。仅当请求中未设置`TagKey.N`时该参数有效。取值范围：'."\n"
                            ."\n"
                            .'- true：删除指定SMC资源绑定的全部标签。若指定的SMC资源未绑定任何标签，则不做处理。'."\n"
                            .'- false：不删除指定SMC资源绑定的任何标签。'."\n"
                            ."\n"
                            .'默认值：false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => 'SMC资源ID。SMC资源包括迁移源和迁移任务。N的取值范围：1~50。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'SMC资源ID。SMC资源包括迁移源和迁移任务。N的取值范围：1~50。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 's-bp12tueadp5ndleg****',
                        ],
                        'required' => true,
                        'example' => 's-bw526m1vi6x20c6g****',
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => 'SMC资源的标签键。标签键大小写敏感。N的取值范围：1~20。'."\n"
                            ."\n\n",
                        'type' => 'array',
                        'items' => [
                            'description' => 'SMC资源的标签键。标签键大小写敏感。N的取值范围：1~20。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'smc',
                        ],
                        'required' => false,
                        'example' => 'TestKey',
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
                                'example' => '2D69A58F-345C-4FDE-88E4-BF518948****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NumberExceed.Tags',
                        'errorMessage' => 'The maximum number of the Tag parameters cannot exceed 20.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceType',
                        'errorMessage' => 'You must specify ResourceType.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceType.NotFound',
                        'errorMessage' => 'The specified ResourceType does not exist.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.ResourceIds',
                        'errorMessage' => 'The maximum number of ResourceId parameters cannot exceed 50.',
                    ],
                    [
                        'errorCode' => 'Duplicate.ResourceId',
                        'errorMessage' => 'The ResourceId contains duplicate values.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceId.NotFound',
                        'errorMessage' => 'The specified ResourceIds do not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF518948****\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF518948****</RequestId>\\n</UntagResourcesResponse>","errorExample":""}]',
            'title' => '解绑并删除标签',
            'description' => '如果标签不再使用，您可以使用此接口为迁移源和迁移任务统一解绑并删除标签。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateAccessToken' => [
            'summary' => '调用CreateAccessToken创建激活码。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '激活码名称。长度为2~128个英文或中文字符。必须以大小写字母或中文开头，不能以http://或https://开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_name',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '激活码描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是导入迁移源激活码',
                    ],
                ],
                [
                    'name' => 'Count',
                    'in' => 'query',
                    'schema' => [
                        'description' => '激活码用于注册迁移源的使用次数上限。取值范围为1~1000。'."\n"
                            ."\n"
                            .'默认值为100。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'TimeToLiveInDays',
                    'in' => 'query',
                    'schema' => [
                        'description' => '激活码的有效使用时间，过期后将不能用于注册新的实例。单位：天。取值范围为1~90。'."\n"
                            ."\n"
                            .'默认值为30。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应参数',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DB4A7EA2-6FDA-5655-B067-854532FB****',
                            ],
                            'AccessTokenCode' => [
                                'description' => '激活码的代码。该代码仅在调用接口时返回一次，后续无法被查询。因此，请您务必妥善保存返回值。',
                                'type' => 'string',
                                'example' => 'B57QoTXEA2Tytr0uZWoNY5Aju5Jt****',
                            ],
                            'AccessTokenId' => [
                                'description' => '激活码ID。',
                                'type' => 'string',
                                'example' => 'at-bp1akz2zp67r0k6r****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again. If the problem still exists, please submit a ticket.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DB4A7EA2-6FDA-5655-B067-854532FB****\\",\\n  \\"AccessTokenCode\\": \\"B57QoTXEA2Tytr0uZWoNY5Aju5Jt****\\",\\n  \\"AccessTokenId\\": \\"at-bp1akz2zp67r0k6r****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAccessTokenResponse>\\n    <RequestId>DB4A7EA2-6FDA-5655-B067-854532FB****</RequestId>\\n    <AccessTokenCode>B57QoTXEA2Tytr0uZWoNY5Aju5Jt****</AccessTokenCode>\\n    <AccessTokenId>at-bp1akz2zp67r0k6r****</AccessTokenId>\\n</CreateAccessTokenResponse>","errorExample":""}]',
            'title' => '创建激活码',
            'description' => '如果您使用激活码导入迁移源，需使用此接口创建激活码。',
        ],
        'DisableAccessToken' => [
            'summary' => '调用DisableAccessToken禁用激活码。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AccessTokenId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '激活码ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'at-bp12g5gwup0yzmce****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '请求ID。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '686BB8A6-BBA5-47E5-8A75-D2ADE433****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again. If the problem still exists, please submit a ticket.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"686BB8A6-BBA5-47E5-8A75-D2ADE433****\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableAccessTokenResponse>\\n    <RequestId>686BB8A6-BBA5-47E5-8A75-D2ADE433****</RequestId>\\n</DisableAccessTokenResponse>","errorExample":""}]',
            'title' => '禁用激活码',
            'description' => '如果您担心已创建的激活码存在泄露的风险，可以通过该接口禁用激活码。禁用后无法再通过该激活码注册新的迁移源，但不会影响已经注册的迁移源。',
        ],
        'ListAccessTokens' => [
            'summary' => '调用ListAccessTokens查询已创建的激活码以及激活码的使用情况。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AccessTokenId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '激活码信息集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '激活码信息集合。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'at-bp1akz2zp67r0k6r****',
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '激活码名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_name',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '激活码状态。取值范围：'."\n"
                            ."\n"
                            .'- activated：已激活。'."\n"
                            ."\n"
                            .'- unactivated：未激活。'."\n"
                            .'- expired：已过期。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'activated',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E2DA3097-79B9-53AE-B0DF-281DC54F****',
                            ],
                            'AccessTokens' => [
                                'type' => 'object',
                                'properties' => [
                                    'AccessToken' => [
                                        'description' => '迁移源数组信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '迁移源数组信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'AccessTokenId' => [
                                                    'description' => '激活码ID。',
                                                    'type' => 'string',
                                                    'example' => 'at-bp1akz2zp67r0k6r****',
                                                ],
                                                'TimeToLiveInDays' => [
                                                    'description' => '激活码的有效期。有效期为1~90天，默认为30天。',
                                                    'type' => 'string',
                                                    'example' => '30',
                                                ],
                                                'Count' => [
                                                    'description' => '激活码使用次数上限。取值范围为1~1000。'."\n"
                                                        ."\n"
                                                        .'默认值为100。',
                                                    'type' => 'string',
                                                    'example' => '100',
                                                ],
                                                'RegisteredCount' => [
                                                    'description' => '已注册的迁移源数。',
                                                    'type' => 'string',
                                                    'example' => '5',
                                                ],
                                                'CreationTime' => [
                                                    'description' => '激活码创建时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
                                                    'type' => 'string',
                                                    'example' => '2022-09-09T02:35:44Z',
                                                ],
                                                'Status' => [
                                                    'description' => '激活码状态。可能值：'."\n"
                                                        ."\n"
                                                        .'- activated：已激活。'."\n"
                                                        ."\n"
                                                        .'- unactivated：未激活。'."\n"
                                                        .'- expired：已过期。',
                                                    'type' => 'string',
                                                    'example' => 'activated',
                                                ],
                                                'Name' => [
                                                    'description' => '激活码名称。',
                                                    'type' => 'string',
                                                    'example' => 'test_name',
                                                ],
                                                'Description' => [
                                                    'description' => '激活码描述信息。',
                                                    'type' => 'string',
                                                    'example' => '这是激活码',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '迁移源总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'PageSize' => [
                                'description' => '当前页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageNumber' => [
                                'description' => '每页行数。可能值：'."\n"
                                    ."\n"
                                    .'- 10'."\n"
                                    .'- 20'."\n"
                                    .'- 50'."\n"
                                    ."\n"
                                    .'默认值：20。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again. If the problem still exists, please submit a ticket.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E2DA3097-79B9-53AE-B0DF-281DC54F****\\",\\n  \\"AccessTokens\\": {\\n    \\"AccessToken\\": [\\n      {\\n        \\"AccessTokenId\\": \\"at-bp1akz2zp67r0k6r****\\",\\n        \\"TimeToLiveInDays\\": \\"30\\",\\n        \\"Count\\": \\"100\\",\\n        \\"RegisteredCount\\": \\"5\\",\\n        \\"CreationTime\\": \\"2022-09-09T02:35:44Z\\",\\n        \\"Status\\": \\"activated\\",\\n        \\"Name\\": \\"test_name\\",\\n        \\"Description\\": \\"这是激活码\\"\\n      }\\n    ]\\n  },\\n  \\"TotalCount\\": 2,\\n  \\"PageSize\\": 1,\\n  \\"PageNumber\\": 20\\n}","errorExample":""},{"type":"xml","example":"<ListAccessTokensResponse>\\n    <RequestId>E2DA3097-79B9-53AE-B0DF-281DC54F****</RequestId>\\n    <AccessTokens>\\n        <AccessTokenId>at-bp1akz2zp67r0k6r****</AccessTokenId>\\n        <TimeToLiveInDays>30</TimeToLiveInDays>\\n        <Count>100</Count>\\n        <RegisteredCount>5</RegisteredCount>\\n        <CreationTime>2022-09-09T02:35:44Z</CreationTime>\\n        <Status>activated</Status>\\n        <Name>test_name</Name>\\n        <Description>这是激活码</Description>\\n    </AccessTokens>\\n    <TotalCount>2</TotalCount>\\n    <PageSize>1</PageSize>\\n    <PageNumber>20</PageNumber>\\n</ListAccessTokensResponse>","errorExample":""}]',
            'title' => '查询激活码',
            'description' => '查询已创建的激活码以及激活码的使用情况。'."\n"
                .'激活码的状态包括已激活、未激活和已过期三种。',
        ],
        'DeleteAccessToken' => [
            'summary' => '调用DeleteAccessToken删除激活码。',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'AccessTokenId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '激活码ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'at-bp1akz2zp67r0k6r****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '请求ID。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DB4A7EA2-6FDA-5655-B067-854532FB****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request. Please try again. If the problem still exists, please submit a ticket.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DB4A7EA2-6FDA-5655-B067-854532FB****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAccessTokenResponse>\\n    <RequestId>DB4A7EA2-6FDA-5655-B067-854532FB****</RequestId>\\n</DeleteAccessTokenResponse>","errorExample":""}]',
            'title' => '删除激活码',
            'description' => '如果后续您不再通过激活码的方式导入迁移源，或者激活码已过期等场景，可以使用此接口删除激活码。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'smc.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'smc.aliyuncs.com',
        ],
    ],
];
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'gws',
        'version' => '2019-06-18',
    ],
    'directories' => [
        [
            'id' => 64023,
            'title' => '角色',
            'type' => 'directory',
            'children' => [
                'CreateServiceLinkedRole',
            ],
        ],
        [
            'id' => 64025,
            'title' => '用户',
            'type' => 'directory',
            'children' => [
                'DescribeClusterADDomain',
                'IsUserAdmin',
            ],
        ],
        [
            'id' => 64028,
            'title' => '实例',
            'type' => 'directory',
            'children' => [
                'CreateInstance',
                'DeleteInstance',
                'SetInstanceName',
                'SetInstancePolicy',
                'SetInstanceUser',
                'StartInstance',
                'StopInstance',
                'DescribeInstancePolicy',
                'DescribeInstances',
                'GetConnectTicket',
                'RestartInstance',
            ],
        ],
        [
            'id' => 64040,
            'title' => '镜像',
            'type' => 'directory',
            'children' => [
                'CreateImage',
                'DeleteImage',
                'SetImageName',
                'DescribeImages',
            ],
        ],
        [
            'id' => 64045,
            'title' => '集群',
            'type' => 'directory',
            'children' => [
                'CreateCluster',
                'DeleteCluster',
                'SetClusterDnat',
                'SetClusterName',
                'SetClusterADDomain',
                'SetClusterPolicy',
                'DescribeClusterConnections',
                'DescribeClusterPolicy',
                'DescribeClusters',
                'DescribeAvailableResource',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateServiceLinkedRole' => [
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AlreadyExists' => [
                                'description' => '* true：当前账号**已经**创建过服务关联角色'."\n"
                                    .'* false：当前账号**没有**创建过服务关联角色',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求 id',
                                'type' => 'string',
                                'example' => 'XXX-XXX',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"AlreadyExists\\": true,\\n  \\"RequestId\\": \\"XXX-XXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXX-XXX</RequestId>\\n<AlreadyExists>true</AlreadyExists>","errorExample":""}]',
            'title' => '为云桌面创建服务关联角色',
            'summary' => '为云桌面创建服务关联角色。',
        ],
        'DescribeClusterADDomain' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'gws-rhzlyl5zx3ua****	',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调用SetClusterADDomain获取的任务ID。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 't-xxx',
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
                                'example' => '7FCC0CD3-53C2-508E-9E1C-39BF14F0E75A',
                            ],
                            'IsSupported' => [
                                'description' => '集群是否支持关联AD域。'."\n"
                                    .'* true：支持。'."\n"
                                    .'* false：不支持。'."\n"
                                    ."\n"
                                    .'> 只有gws.s1.advanced集群支持关联AD域。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TaskFinished' => [
                                'description' => '当前查询命令的运行状态。可能值：'."\n"
                                    .'* false：未完成。'."\n"
                                    .'* true：已完成。'."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'DomainDnsIp' => [
                                'description' => 'AD域的DNS IP。'."\n",
                                'type' => 'string',
                                'example' => '192.168.XX.XX',
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 't-xxx',
                            ],
                            'DomainName' => [
                                'description' => 'AD域的域名。',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7FCC0CD3-53C2-508E-9E1C-39BF14F0E75A\\",\\n  \\"IsSupported\\": true,\\n  \\"TaskFinished\\": true,\\n  \\"DomainDnsIp\\": \\"192.168.XX.XX\\",\\n  \\"TaskId\\": \\"t-xxx\\",\\n  \\"DomainName\\": \\"example.com\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeClusterADDomainResponse>\\n    <TaskId>t-xxx</TaskId>\\n    <RequestId>7FCC0CD3-53C2-508E-9E1C-39BF14F0E75A</RequestId>\\n    <DomainName>example.com</DomainName>\\n    <TaskFinished>true</TaskFinished>\\n    <IsSupported>true</IsSupported>\\n    <DomainDnsIp>192.168.XX.XX</DomainDnsIp>\\n</DescribeClusterADDomainResponse>","errorExample":""}]',
            'title' => '查询用户关联 AD 信息',
            'summary' => '查询与云桌面集群的用户关联 AD 的信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'IsUserAdmin' => [
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
                            'IsAllow' => [
                                'description' => '是否可以使用云工作站：'."\n"
                                    .'* true'."\n"
                                    .'* false',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'IsAdmin' => [
                                'description' => '是否为 admin 用户：'."\n"
                                    .'* true'."\n"
                                    .'* false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求 id',
                                'type' => 'string',
                                'example' => 'XXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"IsAllow\\": false,\\n  \\"IsAdmin\\": true,\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<IsAdmin>true</IsAdmin>\\n<IsAllow>true</IsAllow>\\n<RequestId>C8760FD7-61AD-47EA-AAC3-F4E6A973DF51</RequestId>","errorExample":""}]',
            'title' => '查询当前用户的权限',
            'summary' => '查询当前用户的权限。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateInstance' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群 id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'gws-xxx',
                    ],
                ],
                [
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交换机 id。'."\n"
                            .'* 当指定时，选用此交换机来创建实例。推荐在创建时使用此参数，以限定实例的网段与可用区。'."\n"
                            .'* 当不指定时，后台会根据当前实例类型，找到有库存的最新可用区（例如华北 2 可用区 G ），如果此可用区'."\n"
                            .'    * 已有交换机，则直接选用'."\n"
                            .'    * 没有交换机，则会尝试自动创建'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-xxx',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'desktop-xxx',
                    ],
                ],
                [
                    'name' => 'ImageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像 id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'm-xxx',
                    ],
                ],
                [
                    'name' => 'SystemDiskSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统盘大小，单位为 GB。'."\n"
                            .'* 取值范围 20~500。'."\n"
                            .'* 选取不同镜像时，要求系统盘大小 >= 镜像的大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '500',
                        'minimum' => '20',
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'SystemDiskCategory',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统盘的种类：'."\n"
                            .'* cloud_efficiency：高效云盘。'."\n"
                            .'* cloud_ssd：SSD云盘。'."\n"
                            .'* cloud_essd：ESSD 云盘。（只有较新规格族的实例，例如 ecs.g6 系统，才支持 ESSD 云盘）'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cloud_ssd',
                    ],
                ],
                [
                    'name' => 'AllocatePublicAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否分配公网地址'."\n"
                            .'* True'."\n"
                            .'* False',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'InternetChargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '> 此值只在 `AllocatePublicAddress` 为 `true` 时有效'."\n"
                            ."\n"
                            .'网络计费类型。取值范围：'."\n"
                            ."\n"
                            .'- PayByTraffic（默认）：按使用流量计费'."\n"
                            .'- PayByBandwidth：按固定带宽计费'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PayByBandwidth',
                        'default' => 'PayByTraffic',
                    ],
                ],
                [
                    'name' => 'InternetMaxBandwidthIn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '> 此值只在 `AllocatePublicAddress` 为 `true` 时有效'."\n"
                            ."\n"
                            .'公网入带宽最大值，单位为 Mbps'."\n"
                            .'* 取值范围 1~100'."\n"
                            .'* 默认值：4',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'InternetMaxBandwidthOut',
                    'in' => 'query',
                    'schema' => [
                        'description' => '> 此值只在 `AllocatePublicAddress` 为 `true` 时有效'."\n"
                            ."\n"
                            .'公网出带宽最大值，单位为 Mbps'."\n"
                            .'* 取值范围 1~100'."\n"
                            .'* 默认值：4',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '4',
                        'default' => '4',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例规格，请参见 [实例规格族](https://help.aliyun.com/document_detail/25378.html) 或调用 [DescribeInstanceTypes](https://help.aliyun.com/document_detail/25620.html) 获得规格表。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecs.g6.large',
                    ],
                ],
                [
                    'name' => 'InstanceChargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例付费方式：'."\n"
                            .'* PostPaid（默认）：按量付费'."\n"
                            .'* PrePaid：包年包月'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PostPaid',
                        'default' => 'PostPaid',
                    ],
                ],
                [
                    'name' => 'AutoRenew',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动续费：'."\n"
                            .'* False（默认）'."\n"
                            .'* True',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'True',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '> 此值仅在 `InstanceChargeType` 为 `PrePaid`（包年包月）时有效。'."\n"
                            ."\n"
                            .'包年包月的时长。'."\n"
                            .'* `PeriodUnit` 为 `Week`（周）时，取值范围 1~4'."\n"
                            .'* `PeriodUnit` 为 `Month`（月）时，取值范围 1 2 3 4 5 6 7 8 9 12 24 36 48 60',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PeriodUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '> 此值仅在 `InstanceChargeType` 为 `PrePaid`（包年包月）时有效。'."\n"
                            ."\n"
                            .'包年包月的单位。'."\n"
                            .'* Week'."\n"
                            .'* Month',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Week',
                    ],
                ],
                [
                    'name' => 'WorkMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作模式：'."\n"
                            .'* Desktop：桌面模式。'."\n"
                            .'* Application：应用模式。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Desktop',
                    ],
                ],
                [
                    'name' => 'AppList',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '应用列表。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'AppName' => [
                                    'description' => '> 此值仅在 `WorkMode` 为 `Application` 时有效。'."\n"
                                        ."\n"
                                        .'应用名称。其中 AppList.N 的允许范围是 1~10。'."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'notepad',
                                ],
                                'AppPath' => [
                                    'description' => '> 此值仅在 `WorkMode` 为 `Application` 时有效。'."\n"
                                        ."\n"
                                        .'应用的运行路径。其中 AppList.N 的允许范围是 1~10。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'C:\\Windows\\System32\\notepad.exe',
                                ],
                                'AppArgs' => [
                                    'description' => '> 此值仅在 `WorkMode` 为 `Application` 时有效。'."\n"
                                        ."\n"
                                        .'应用的运行参数。其中 AppList.N 的允许范围是 1~10。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'c:/temp.txt',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'InstanceId' => [
                                'description' => '实例 id',
                                'type' => 'string',
                                'example' => 'i-xxx',
                            ],
                            'RequestId' => [
                                'description' => '请求 id',
                                'type' => 'string',
                                'example' => 'XXX-XXX',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"InstanceId\\": \\"i-xxx\\",\\n  \\"RequestId\\": \\"XXX-XXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXX-XXX</RequestId>\\n<InstanceId>i-xxx</InstanceId>","errorExample":""}]',
            'title' => 'CreateInstance',
            'summary' => '创建实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteInstance' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例 id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-xxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求 id',
                                'type' => 'string',
                                'example' => 'XXX-XXX',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXX-XXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXX-XXX</RequestId>","errorExample":""}]',
            'title' => '删除实例',
            'summary' => '删除实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SetInstanceName' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例 id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-xxx',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'desktop-xxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求 id',
                                'type' => 'string',
                                'example' => 'XXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXXX</RequestId>","errorExample":""}]',
            'title' => '设置实例名称',
            'summary' => '设置实例名称。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SetInstancePolicy' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例 id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-xxx',
                    ],
                ],
                [
                    'name' => 'VisualLossless',
                    'in' => 'query',
                    'schema' => [
                        'description' => '> 仅对 GPU 实例有效，打开后可获得更好的画面质量。'."\n"
                            ."\n"
                            .'视频无损模式'."\n"
                            .'* off（默认）：关闭'."\n"
                            .'* on：打开'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'on',
                        'default' => 'off',
                        'enum' => [
                            'on',
                            'off',
                        ],
                    ],
                ],
                [
                    'name' => 'OptimizeFor3d',
                    'in' => 'query',
                    'schema' => [
                        'description' => '> 仅对 GPU 实例有效，打开后可获得更小的桌面延迟。'."\n"
                            ."\n"
                            .'GPU 加速'."\n"
                            .'* off（默认）：关闭'."\n"
                            .'* on：打开'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'on',
                        'default' => 'off',
                        'enum' => [
                            'on',
                            'off',
                        ],
                    ],
                ],
                [
                    'name' => 'AsyncMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异步模式调用：'."\n"
                            .'* false（默认）：设置完成后，api 才会返回'."\n"
                            .'* true：api **立即**返回'."\n"
                            .'    * 当 `TaskId` 为空：设置动作在后台异步执行。调用方需使用**返回值**中的 TaskId，继续调用 DescribeInstancePolicy 来获得设置运作的结果。'."\n"
                            .'    * 当 `TaskId` 不为空：获得设置动作的结果。'."\n",
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TaskId' => [
                                'description' => '> 此值只在 `AsyncMode` 为 `true` 时有效'."\n"
                                    ."\n"
                                    .'调用方可使用此值，用 DescribeInstancePolicy 来查询设置运作的执行状态。'."\n",
                                'type' => 'string',
                                'example' => 't-xxx',
                            ],
                            'RequestId' => [
                                'description' => 'Request id。',
                                'type' => 'string',
                                'example' => 'XXX-XXX',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskId\\": \\"t-xxx\\",\\n  \\"RequestId\\": \\"XXX-XXX\\"\\n}","errorExample":""},{"type":"xml","example":"<TaskId>t-xxx</TaskId>\\n<RequestId>XXX-XXX</RequestId>","errorExample":""}]',
            'title' => '设置实例策略状态',
            'summary' => '设置实例的策略状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SetInstanceUser' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例 id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-xxx',
                    ],
                ],
                [
                    'name' => 'UserUid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户 id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1234',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_xxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求 id',
                                'type' => 'string',
                                'example' => 'XXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXXX</RequestId>","errorExample":""}]',
            'title' => '给实例分配用户',
            'summary' => '给实例分配用户。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'StartInstance' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例 id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-xxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求 id',
                                'type' => 'string',
                                'example' => 'XXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXXX</RequestId>","errorExample":""}]',
            'title' => '启动实例',
            'summary' => '启动实例。',
        ],
        'StopInstance' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例 id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-xxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求 id',
                                'type' => 'string',
                                'example' => 'XXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXXX</RequestId>","errorExample":""}]',
            'title' => '停止实例',
            'summary' => '停止实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeInstancePolicy' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例 id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-xxx',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '> 此值只在 `AsyncMode` 为 `true` 时有效'."\n"
                            ."\n"
                            .'非空时用来获得之前查询命令的执行状态。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 't-xxx',
                    ],
                ],
                [
                    'name' => 'AsyncMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异步模式调用：'."\n"
                            .'* false（默认）：命令执行完成后，API才会返回。'."\n"
                            .'* true：API**立即**返回。'."\n"
                            .'    * 当`TaskId`为空：查询命令在后台异步执行。调用方需使用**返回值**中的TaskId，继续调用此API来获得查询命令的结果。'."\n"
                            .'    * 当`TaskId`不为空：获得查询命令的结果。'."\n",
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'OptimizeFor3d' => [
                                'description' => 'GPU 3D 加速。'."\n"
                                    .'* off：关闭。'."\n"
                                    .'* on：打开。'."\n"
                                    .'* N/A：不适用，例如非 GPU 实例',
                                'type' => 'string',
                                'example' => 'on',
                            ],
                            'TaskFinished' => [
                                'description' => '当前查询命令的运行状态'."\n"
                                    .'* false：还未完成。'."\n"
                                    .'* true：已完成。'."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'VisualLossless' => [
                                'description' => '视频无损模式'."\n"
                                    .'* off：关闭。'."\n"
                                    .'* on：打开。'."\n"
                                    .'* N/A：不适用，例如非 GPU 实例',
                                'type' => 'string',
                                'example' => 'off',
                            ],
                            'RequestId' => [
                                'description' => '请求 id。',
                                'type' => 'string',
                                'example' => 'XXX-XXX',
                            ],
                            'TaskId' => [
                                'description' => '当前查询命令的任务 id。',
                                'type' => 'string',
                                'example' => 't-xxx',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"OptimizeFor3d\\": \\"on\\",\\n  \\"TaskFinished\\": true,\\n  \\"VisualLossless\\": \\"off\\",\\n  \\"RequestId\\": \\"XXX-XXX\\",\\n  \\"TaskId\\": \\"t-xxx\\"\\n}","errorExample":""},{"type":"xml","example":"<TaskId>t-xxx</TaskId>\\n<RequestId>XXX-XXX</RequestId>\\n<VisualLossless>off</VisualLossless>\\n<TaskFinished>true</TaskFinished>\\n<OptimizeFor3d>on</OptimizeFor3d>","errorExample":""}]',
            'title' => '获取实例策略配置状态',
            'summary' => '攻取实例的策略配置状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeInstances' => [
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
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的实例个数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '列出指定集群 id 中的所有实例。'."\n"
                            .'> 如果此参数未指定，则列出所有集群中的实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'gws-xxx',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '列出实例 id 的信息。'."\n"
                            .'> 如果此参数未指定，则列出所有实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'i-xxx',
                    ],
                ],
                [
                    'name' => 'UserUid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '列出分配给指定用户 id 的所有实例。'."\n"
                            .'> 如果此参数未指定，则列出所有用户的实例。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '列出分配给指定用户的所有实例。'."\n"
                            .'> 如果此参数未指定，则列出所有用户的实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'user01',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PageSize' => [
                                'description' => '每页行数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求 id',
                                'type' => 'string',
                                'example' => 'XXX-XXX',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '实例总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Instances' => [
                                'description' => '实例信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '实例状态：'."\n"
                                                .'* Creating：创建中'."\n"
                                                .'* Starting：启动中'."\n"
                                                .'* Stopping：停止中'."\n"
                                                .'* Stopped：已停止'."\n"
                                                .'* Initializing：初始化'."\n"
                                                .'* Unregistered：未注册'."\n"
                                                .'* Registered：已注册'."\n"
                                                .'* InUse：使用中'."\n"
                                                .'* Missing：丢失'."\n"
                                                .'* Cloning：镜像制作中'."\n",
                                            'type' => 'string',
                                            'example' => 'Stopped',
                                        ],
                                        'ExpireTime' => [
                                            'description' => '过期时间。',
                                            'type' => 'string',
                                            'example' => '2099-12-31T15:59Z',
                                        ],
                                        'WorkMode' => [
                                            'description' => '工作模式'."\n"
                                                .'* Desktop：桌面模式'."\n"
                                                .'* Application：应用模式',
                                            'type' => 'string',
                                            'example' => 'Application',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2019-10-12T07:35Z',
                                        ],
                                        'StoppedMode' => [
                                            'description' => '实例停止时的计费状态。'."\n"
                                                .'* KeepCharging：收费中，例如用户通过 Windows 内部关机'."\n"
                                                .'* StopCharging：停止收费'."\n"
                                                .'* Not-applicable：不适用。例如包年包月实例',
                                            'type' => 'string',
                                            'example' => '停止',
                                        ],
                                        'UserUid' => [
                                            'description' => '分配的用户 id'."\n"
                                                ."\n"
                                                .'> 实例未分配给指定用户时，此值为空。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1234',
                                        ],
                                        'HostName' => [
                                            'description' => '主机名称，实例创建时自动生成。不可更改，否则会导致实例状态“未注册”',
                                            'type' => 'string',
                                            'example' => 'c0-i01-xx-t6',
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例 id',
                                            'type' => 'string',
                                            'example' => 'i-xxx',
                                        ],
                                        'InstanceType' => [
                                            'description' => '实例类型。',
                                            'type' => 'string',
                                            'example' => 'ecs.g6.large',
                                        ],
                                        'DomainName' => [
                                            'description' => '实例所在的集群所关联的用户 AD。当集群未做 AD 关联或集群不支持 AD 关联时，此值为空。',
                                            'type' => 'string',
                                            'example' => 'abc.com',
                                        ],
                                        'InstanceChargeType' => [
                                            'description' => '计费方式：'."\n"
                                                .'* PrePaid：包年包月'."\n"
                                                .'* PostPaid：按量付费',
                                            'type' => 'string',
                                            'example' => 'PostPaid',
                                        ],
                                        'MaxBandwidthIn' => [
                                            'description' => '公网入带宽最大值，单位为 Mbps',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '100',
                                        ],
                                        'IsBoundUser' => [
                                            'description' => '当前调用者是否已分配给当前实例'."\n"
                                                .'* true：是'."\n"
                                                .'* false：否',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'MaxBandwidthOut' => [
                                            'description' => '公网出带宽最大值，单位为 Mbps',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '100',
                                        ],
                                        'Name' => [
                                            'description' => '实例名称，用户可以自行设置',
                                            'type' => 'string',
                                            'example' => 'c0-i01-xx-t6-2c8g',
                                        ],
                                        'UserName' => [
                                            'description' => '分配的用户名。'."\n"
                                                ."\n"
                                                .'> 实例未分配给指定用户时，此值为空。',
                                            'type' => 'string',
                                            'example' => 'user-xxx',
                                        ],
                                        'ImageId' => [
                                            'description' => '实例创建时所使用的镜像 id。',
                                            'type' => 'string',
                                            'example' => 'm-xxx',
                                        ],
                                        'ClusterId' => [
                                            'description' => '集群 id',
                                            'type' => 'string',
                                            'example' => 'gws-xxx',
                                        ],
                                        'AppList' => [
                                            'description' => '应用列表。'."\n"
                                                ."\n"
                                                .'> 工作模式为`桌面模式`时，此列表为空',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'AppName' => [
                                                        'description' => '应用名称。',
                                                        'type' => 'string',
                                                        'example' => 'notepad',
                                                    ],
                                                    'AppArgs' => [
                                                        'description' => '应用的运行参数。',
                                                        'type' => 'string',
                                                        'example' => 'c:\\temp.txt',
                                                    ],
                                                    'AppPath' => [
                                                        'description' => '应用的运行路径。',
                                                        'type' => 'string',
                                                        'example' => 'c:\\windows\\system32\\nodepad.exe',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"XXX-XXX\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Instances\\": [\\n    {\\n      \\"Status\\": \\"Stopped\\",\\n      \\"ExpireTime\\": \\"2099-12-31T15:59Z\\",\\n      \\"WorkMode\\": \\"Application\\",\\n      \\"CreateTime\\": \\"2019-10-12T07:35Z\\",\\n      \\"StoppedMode\\": \\"停止\\",\\n      \\"UserUid\\": 1234,\\n      \\"HostName\\": \\"c0-i01-xx-t6\\",\\n      \\"InstanceId\\": \\"i-xxx\\",\\n      \\"InstanceType\\": \\"ecs.g6.large\\",\\n      \\"DomainName\\": \\"abc.com\\",\\n      \\"InstanceChargeType\\": \\"PostPaid\\",\\n      \\"MaxBandwidthIn\\": 100,\\n      \\"IsBoundUser\\": true,\\n      \\"MaxBandwidthOut\\": 100,\\n      \\"Name\\": \\"c0-i01-xx-t6-2c8g\\",\\n      \\"UserName\\": \\"user-xxx\\",\\n      \\"ImageId\\": \\"m-xxx\\",\\n      \\"ClusterId\\": \\"gws-xxx\\",\\n      \\"AppList\\": [\\n        {\\n          \\"AppName\\": \\"notepad\\",\\n          \\"AppArgs\\": \\"c:\\\\\\\\temp.txt\\",\\n          \\"AppPath\\": \\"c:\\\\\\\\windows\\\\\\\\system32\\\\\\\\nodepad.exe\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<Instances>\\n    <Status>Stopped</Status>\\n    <MaxBandwidthOut>100</MaxBandwidthOut>\\n    <MaxBandwidthIn>100</MaxBandwidthIn>\\n    <UserName>user-xxx</UserName>\\n    <DomainName>abc.com</DomainName>\\n    <ClusterId>gws-xxx</ClusterId>\\n    <InstanceId>i-xxx</InstanceId>\\n    <InstanceChargeType>PostPaid</InstanceChargeType>\\n    <StoppedMode>停止</StoppedMode>\\n    <CreateTime>2019-10-12T07:35Z</CreateTime>\\n    <IsBoundUser>true</IsBoundUser>\\n    <Name>c0-i01-xx-t6-2c8g</Name>\\n    <UserUid>1234</UserUid>\\n    <ImageId>m-xxx</ImageId>\\n    <ExpireTime>2099-12-31T15:59Z</ExpireTime>\\n    <InstanceType>ecs.g6.large</InstanceType>\\n    <WorkMode>Application</WorkMode>\\n    <HostName>c0-i01-xx-t6</HostName>\\n    <AppList>\\n        <AppArgs>c:\\\\temp.txt</AppArgs>\\n        <AppPath>c:\\\\windows\\\\system32\\\\nodepad.exe</AppPath>\\n        <AppName>notepad</AppName>\\n    </AppList>\\n</Instances>\\n<TotalCount>1</TotalCount>\\n<PageSize>10</PageSize>\\n<RequestId>XXX-XXX</RequestId>\\n<PageNumber>1</PageNumber>","errorExample":""}]',
            'title' => '获取实例信息',
            'summary' => '描述实例信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetConnectTicket' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例 id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-xxx',
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '> `WorkMode` 为 `Desktop`（桌面模式）时，不要指定此参数。'."\n"
                            .'> `WorkMode` 为 `Application`（应用模式）时，必需指定此参数'."\n"
                            ."\n"
                            .'应用名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'app-xxx',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '> DescribeInstances 返回字段的 DomainName 非空，且调用者身份为该实例的已分配用户时，需要此参数'."\n"
                            ."\n"
                            .'域用户名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'user01',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => '> DescribeInstances 返回字段的 DomainName 非空，且调用者身份为该实例的已分配用户时，需要此参数'."\n"
                            ."\n"
                            .'域用户名的密码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '***',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '> 此值只在 `AsyncMode` 为 `true` 时有效'."\n"
                            ."\n"
                            .'非空时用来获得之前调用的执行状态。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 't-xxx',
                    ],
                ],
                [
                    'name' => 'AsyncMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异步模式调用。'."\n"
                            .'* false（默认）：命令执行完成后，API才会返回。'."\n"
                            .'* true：API **立即**返回。'."\n"
                            .'    * 当 `TaskId` 为空：查询命令在后台异步执行。调用方需使用**返回值**中的TaskId，继续调用此API来获得查询命令的结果。'."\n"
                            .'    * 当 `TaskId` 不为空：获得查询命令的结果。'."\n",
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'UsePrivateIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '使用内网IP连接云桌面：'."\n"
                            .'* false（默认）：获取连接 token 时，优先级从高到低、按以下顺序选择连接云桌面的方式。'."\n"
                            .'    * 实例的弹性IP'."\n"
                            .'    * 实例的公网IP'."\n"
                            .'    * 集群关联NAT时所使用的弹性公网IP'."\n"
                            .'    * 实例的内网IP'."\n"
                            .'* true：获取连接 token 时，以实例的内网IP来连接云桌面。'."\n",
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TaskFinished' => [
                                'description' => '当前调用的运行状态'."\n"
                                    .'* false：还未完成。'."\n"
                                    .'* true：已完成。'."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求 id',
                                'type' => 'string',
                                'example' => 'XXX-XXX',
                            ],
                            'Ticket' => [
                                'description' => '用来连接用户实例 Ticket，使用时需要先将其内容做 base64 的 decode，保存为 xxx.ica 文件，然后打开这个文件。python 代码举例：'."\n"
                                    ."\n"
                                    .'```'."\n"
                                    .'import base64'."\n"
                                    .'response = {'."\n"
                                    .'    "Ticket": "XXXX",'."\n"
                                    .'    "RequestId": "XXX-XXX",'."\n"
                                    .'}'."\n"
                                    .'f = open (\'xxx.ica\', \'w\')'."\n"
                                    .'out = base64.b64decode(response[\'Ticket\'])'."\n"
                                    .'f.write(out)'."\n"
                                    .'f.close()'."\n"
                                    .'```'."\n",
                                'type' => 'string',
                                'example' => 'XXXXXXXXX',
                            ],
                            'TaskId' => [
                                'description' => '当前调用对应的任务 id。调用方可使用此值，继续调用此 API 来获取运行的结果。',
                                'type' => 'string',
                                'example' => 't-xxx',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskFinished\\": true,\\n  \\"RequestId\\": \\"XXX-XXX\\",\\n  \\"Ticket\\": \\"XXXXXXXXX\\",\\n  \\"TaskId\\": \\"t-xxx\\"\\n}","errorExample":""},{"type":"xml","example":"<Ticket>XXXXXXXXX</Ticket>\\n<TaskId>t-xxx</TaskId>\\n<RequestId>XXX-XXX</RequestId>\\n<TaskFinished>true</TaskFinished>","errorExample":""}]',
            'title' => '获取连接实例所需要的 token',
            'summary' => '获取连接实例所需要的token。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RestartInstance' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例 id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-xxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求 id',
                                'type' => 'string',
                                'example' => 'XXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>908AB064-2453-49E9-B062-9B6CC09FA25C</RequestId>","errorExample":""}]',
            'title' => '重启实例',
            'summary' => '重启实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateImage' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例 id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-xxx',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'image-xxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImageId' => [
                                'description' => '镜像 id',
                                'type' => 'string',
                                'example' => 'm-xxx',
                            ],
                            'RequestId' => [
                                'description' => '请求 id',
                                'type' => 'string',
                                'example' => 'XXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ImageId\\": \\"m-xxx\\",\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<ImageId>m-xxx</ImageId>\\n<RequestId>XXXX</RequestId>","errorExample":""}]',
            'title' => '创建镜像',
            'summary' => '创建镜像。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteImage' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ImageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像 id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'm-xxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求 id',
                                'type' => 'string',
                                'example' => 'XXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXXX</RequestId>","errorExample":""}]',
            'title' => '删除镜像',
            'summary' => '删除镜像。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SetImageName' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ImageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像 id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'm-xxx',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'image-xxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求 id',
                                'type' => 'string',
                                'example' => 'XXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXXX</RequestId>","errorExample":""}]',
            'title' => '设置镜像名称',
            'summary' => '设置镜像名称。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeImages' => [
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
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs.g6.large',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PageSize' => [
                                'description' => '当前分页包含多少条目。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'XXXX-XXXX',
                            ],
                            'PageNumber' => [
                                'description' => '当前页码。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '镜像资源总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Images' => [
                                'description' => '镜像信息Images组成的集合。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '镜像状态：'."\n"
                                                .'* Missing'."\n"
                                                .'* Available'."\n"
                                                .'* Creating'."\n"
                                                .'* UnAvailable'."\n"
                                                .'* CreateFailed'."\n",
                                            'type' => 'string',
                                            'example' => 'Available',
                                        ],
                                        'ImageType' => [
                                            'description' => '镜像类型：'."\n"
                                                .'* system'."\n"
                                                .'* custom',
                                            'type' => 'string',
                                            'example' => 'system',
                                        ],
                                        'Progress' => [
                                            'description' => '镜像完成的进度，单位为百分比。',
                                            'type' => 'string',
                                            'example' => '100%',
                                        ],
                                        'Size' => [
                                            'description' => '镜像大小，单位是 GB。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '40',
                                        ],
                                        'CreateTime' => [
                                            'description' => '镜像的创建时间。',
                                            'type' => 'string',
                                            'example' => 'Mon May 27 13:33:42 CST 2019',
                                        ],
                                        'Name' => [
                                            'description' => '镜像名称。',
                                            'type' => 'string',
                                            'example' => 'windows 2016 标准版 citrix 1903',
                                        ],
                                        'ImageId' => [
                                            'description' => '镜像 id。',
                                            'type' => 'string',
                                            'example' => 'm-bp125mb261tmk6tqvoni',
                                        ],
                                        'ProductCode' => [
                                            'description' => '产品代码。  '."\n"
                                                .'如果返回该参数，则表示该镜像是基于镜像市场的镜像制作而成。',
                                            'type' => 'string',
                                            'example' => 'cmjj00042097',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"XXXX-XXXX\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Images\\": [\\n    {\\n      \\"Status\\": \\"Available\\",\\n      \\"ImageType\\": \\"system\\",\\n      \\"Progress\\": \\"100%\\",\\n      \\"Size\\": 40,\\n      \\"CreateTime\\": \\"Mon May 27 13:33:42 CST 2019\\",\\n      \\"Name\\": \\"windows 2016 标准版 citrix 1903\\",\\n      \\"ImageId\\": \\"m-bp125mb261tmk6tqvoni\\",\\n      \\"ProductCode\\": \\"cmjj00042097\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>1</TotalCount>\\n<PageSize>20</PageSize>\\n<RequestId>XXXX-XXXX</RequestId>\\n<PageNumber>1</PageNumber>\\n<Images>\\n    <Status>Available</Status>\\n    <Progress>100%</Progress>\\n    <ProductCode>cmjj00042097</ProductCode>\\n    <Size>40</Size>\\n    <CreateTime>Mon May 27 13:33:42 CST 2019</CreateTime>\\n    <ImageId>m-bp125mb261tmk6tqvoni</ImageId>\\n    <ImageType>system</ImageType>\\n    <Name>windows 2016 标准版 citrix 1903</Name>\\n</Images>","errorExample":""}]',
            'title' => '获取镜像信息列表',
            'summary' => '描述镜像。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'VPC id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc-xxx',
                    ],
                ],
                [
                    'name' => 'ClusterType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群类型：'."\n"
                            .'* gws.s1.standard',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'gws.s1.standard',
                    ],
                ],
                [
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'VSWitch id，用于集群服务器的创建。当不指定时，后台会根据当前集群规格，找到有库存的最新可用区（例如华北 2 可用区 H ），如果此可用区'."\n"
                            .'* 已有交换机，则直接选用'."\n"
                            .'* 没有交换机，则会尝试自动创建',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-xxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ClusterId' => [
                                'description' => '集群 id',
                                'type' => 'string',
                                'example' => 'gws-xxx',
                            ],
                            'RequestId' => [
                                'description' => '请求 id',
                                'type' => 'string',
                                'example' => 'XXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ClusterId\\": \\"gws-xxx\\",\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<ClusterId>gws-xxx</ClusterId>\\n<RequestId>XXXX</RequestId>","errorExample":""}]',
            'title' => '创建新集群',
            'summary' => '创建集群。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群 id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'gws-xxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求 id',
                                'type' => 'string',
                                'example' => 'XXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXXX</RequestId>","errorExample":""}]',
            'title' => '删除集群',
            'summary' => '删除集群。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SetClusterDnat' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群 id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'gws-xxx',
                    ],
                ],
                [
                    'name' => 'NatId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关 id。'."\n"
                            .'* 取值非空时，代表将待关联 NAT id；此 NAT 与云桌面集群必须处在同一个VPC中'."\n"
                            .'* 此值空时，如果当前集群已关联了某个 NAT，将解除集群与此 NAT 的关联',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ngw-xxx',
                    ],
                ],
                [
                    'name' => 'NatEip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '* 当 NatId 非空时，如果此参数'."\n"
                            .'    * 非空，将使用此 EIP 来与集群做关联'."\n"
                            .'    * 为空值，将从 NAT 中状态为 Idle 或 UsedByForwardTable 的 EIP 中自动选择'."\n"
                            .'* 当 NatId 为空值时，此参数无效',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.2.3.4',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求 id',
                                'type' => 'string',
                                'example' => 'XXX-XXX',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXX-XXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXX-XXX</RequestId>","errorExample":""}]',
            'title' => '将集群与网关（NAT）做关联',
            'summary' => '将集群与网关（NAT）做关联，关联后将以 DNAT + EIP 的方式来连接桌面。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SetClusterName' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群 id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'gws-xxx',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要设置的集群名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cluster-xxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求 id',
                                'type' => 'string',
                                'example' => 'XXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXXX</RequestId>","errorExample":""}]',
            'title' => '设置集群名称',
            'summary' => '设置集群名称。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SetClusterADDomain' => [
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
                        'example' => 'gws-rhzlyl5zx3ua****',
                    ],
                ],
                [
                    'name' => 'DomainDnsIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AD域的DNS IP。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '192.168.XX.XX',
                    ],
                ],
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AD域的域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'DomainPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AD域的管理员密码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'password***',
                    ],
                ],
                [
                    'name' => 'DomainAdmin',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AD域的管理员密码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'administrator',
                        'default' => 'administrator',
                    ],
                ],
                [
                    'name' => 'DomainDelete',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否建立集群和AD域的关联。取值范围：'."\n"
                            .'* false：建立集群与AD域的关联。'."\n"
                            .'* true：取消集群与AD域的关联。'."\n"
                            .'默认为false。'."\n"
                            ."\n"
                            .'> 建立集群域AD域的关联前，需要先通过智能接入网关、专线等方式打通AD域与云桌面VPC之间的网络。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TaskId' => [
                                'description' => '任务ID。用于获取escribeClusterADDomain的执行状态。',
                                'type' => 'string',
                                'example' => 't-xxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7FCC0CD3-53C2-508E-9E1C-39BF14F0E75A',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskId\\": \\"t-xxx\\",\\n  \\"RequestId\\": \\"7FCC0CD3-53C2-508E-9E1C-39BF14F0E75A\\"\\n}","errorExample":""},{"type":"xml","example":"<SetClusterADDomainResponse>\\n    <TaskId>t-xxx</TaskId>\\n    <RequestId>7FCC0CD3-53C2-508E-9E1C-39BF14F0E75A</RequestId>\\n</SetClusterADDomainResponse>","errorExample":""}]',
            'title' => '关联云桌面集群与用户 AD',
            'summary' => '调用SetClusterADDomain关联云桌面集群和AD域。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SetClusterPolicy' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群 id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'gws-xxx',
                    ],
                ],
                [
                    'name' => 'UsbRedirect',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'USB 重定向：'."\n"
                            .'* off：关闭'."\n"
                            .'* on：打开'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'on',
                        'enum' => [
                            'off',
                            'on',
                        ],
                    ],
                ],
                [
                    'name' => 'Watermark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '水印：'."\n"
                            .'* off：关闭'."\n"
                            .'* on：打开。水印为星状覆盖屏幕的两行半透明文字，格式为集群信息与主机信息，类似'."\n"
                            .'    * gws-xxx@gws'."\n"
                            .'    * c0-i00-xx-t6',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'off',
                        'enum' => [
                            'off',
                            'on',
                        ],
                    ],
                ],
                [
                    'name' => 'LocalDrive',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本地磁盘映射：'."\n"
                            .'* off：关闭'."\n"
                            .'* read：只可读'."\n"
                            .'* readwrite：可读写'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'readwrite',
                        'enum' => [
                            'off',
                            'read',
                            'readwrite',
                        ],
                    ],
                ],
                [
                    'name' => 'Clipboard',
                    'in' => 'query',
                    'schema' => [
                        'description' => '剪贴板：'."\n"
                            .'* off：关闭'."\n"
                            .'* read：只可读'."\n"
                            .'* write：只可写'."\n"
                            .'* readwrite：可读写'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'read',
                        'enum' => [
                            'off',
                            'read',
                            'readwrite',
                            'write',
                        ],
                    ],
                ],
                [
                    'name' => 'UdpPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'udp 端口：'."\n"
                            .'* on（默认）：打开。推荐配置为 on，带宽占用与网络稳定性更好。'."\n"
                            .'* off：关闭。定位 udp 相关的网络问题时，有时需要在这里设置 off，设置后安全组入方向的 1494 / 2598 的规则会被移除'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'off',
                        'default' => 'on',
                        'enum' => [
                            'off',
                            'on',
                        ],
                    ],
                ],
                [
                    'name' => 'Audio',
                    'in' => 'query',
                    'schema' => [
                        'description' => '音频：'."\n"
                            .'* on（默认）：打开，客户端可以听到云桌面内部的声音。'."\n"
                            .'* off：关闭，客户端听不到云桌面内部的声音。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'on',
                        'default' => 'on',
                        'enum' => [
                            'off',
                            'on',
                        ],
                    ],
                ],
                [
                    'name' => 'DomainList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '域名白名单'."\n"
                            .'* 白名单为空时，允许访问所有域名'."\n"
                            .'* 白名单非空时，仅允许访问列表中的域名'."\n"
                            .'* 支持 `*` 通配符'."\n"
                            .'* 多条域名规则之间用逗号分隔'."\n"
                            .'* 设置后对当前集群的所有实例即时生效'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '*.abc.com,*.xyz.com',
                    ],
                ],
                [
                    'name' => 'AsyncMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异步模式调用：'."\n"
                            .'* false（默认）：命令执行完成后，api 才会返回'."\n"
                            .'* true：命令后台执行，api 立即返回。调用方需要记录返回值中的 TaskId，然后来 DescribeClusterPolicy 查询命令的执行状态。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TaskId' => [
                                'description' => '> 此值只在 `AsyncMode` 为 `true` 时有效'."\n"
                                    ."\n"
                                    .'调用方可使用此值，用 DescribeClusterPolicy 来查询命令的执行状态。',
                                'type' => 'string',
                                'example' => 't-xxx',
                            ],
                            'RequestId' => [
                                'description' => '请求 id',
                                'type' => 'string',
                                'example' => 'XXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskId\\": \\"t-xxx\\",\\n  \\"RequestId\\": \\"XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<TaskId>t-xxx</TaskId>\\n<RequestId>XXXX</RequestId>","errorExample":""}]',
            'title' => '设置集群策略',
            'summary' => '设置集群策略。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeClusterConnections' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云桌面集群 id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'gws-xxx',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询区间的起始日期。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2020-09-07',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询区间的截止日期。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2020-09-01',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '做异步查询时的 task id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 't-xxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求 id。',
                                'type' => 'string',
                                'example' => 'XXX-XXX',
                            ],
                            'TaskFinished' => [
                                'description' => '* true：当前 task 已经完成'."\n"
                                    .'* false：当前 task 还在运行中',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TotalCount' => [
                                'description' => '数组Connections的长度。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TaskId' => [
                                'description' => '* 调用时如果入参TaskId为空，则调用方需使用返回值中的TaskId，继续调用此API来获得查询命令的结果。'."\n"
                                    .'* 调用时如果入参TaskId非空，则返回值会查询此TaskId 的运行状态。',
                                'type' => 'string',
                                'example' => 't-xxx',
                            ],
                            'Connections' => [
                                'description' => '描述连接会话信息的数组。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'LogoffStatus' => [
                                            'description' => '* 0：此会话已正常退出'."\n"
                                                .'* 空值：此会话还未退出',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'InstanceName' => [
                                            'description' => '实例名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'LogonTime' => [
                                            'description' => '此会话的登入时间。 ',
                                            'type' => 'string',
                                            'example' => '2020-09-01T01:02:03.456Z',
                                        ],
                                        'HostName' => [
                                            'description' => '主机名称。',
                                            'type' => 'string',
                                            'example' => 'hostname',
                                        ],
                                        'LogoffTime' => [
                                            'description' => '此会话的退出时间。'."\n"
                                                .'当此值为空时，说明此会话还未退出。',
                                            'type' => 'string',
                                            'example' => '2020-09-03T01:02:03.456Z',
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例 id。',
                                            'type' => 'string',
                                            'example' => 'i-xxx',
                                        ],
                                        'ClientName' => [
                                            'description' => '客户端的主机名称.',
                                            'type' => 'string',
                                            'example' => 'client-xxx',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXX-XXX\\",\\n  \\"TaskFinished\\": true,\\n  \\"TotalCount\\": 1,\\n  \\"TaskId\\": \\"t-xxx\\",\\n  \\"Connections\\": [\\n    {\\n      \\"LogoffStatus\\": \\"0\\",\\n      \\"InstanceName\\": \\"test\\",\\n      \\"LogonTime\\": \\"2020-09-01T01:02:03.456Z\\",\\n      \\"HostName\\": \\"hostname\\",\\n      \\"LogoffTime\\": \\"2020-09-03T01:02:03.456Z\\",\\n      \\"InstanceId\\": \\"i-xxx\\",\\n      \\"ClientName\\": \\"client-xxx\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<Connections>\\n    <LogoffStatus>0</LogoffStatus>\\n    <LogoffTime>2020-09-03T01:02:03.456Z</LogoffTime>\\n    <ClientName>client-xxx</ClientName>\\n    <LogonTime>2020-09-01T01:02:03.456Z</LogonTime>\\n    <InstanceId>i-xxx</InstanceId>\\n</Connections>\\n<TotalCount>1</TotalCount>\\n<TaskId>t-xxx</TaskId>\\n<RequestId>XXX-XXX</RequestId>\\n<TaskFinished>true</TaskFinished>","errorExample":""}]',
            'title' => '查询某集群的会话连接信息',
            'summary' => '查询某集群的会话连接信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeClusterPolicy' => [
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
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '> 此值只在 `AsyncMode` 为 `true` 时有效'."\n"
                            ."\n"
                            .'非空时用来获得之前查询命令的执行状态。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 't-xxx',
                    ],
                ],
                [
                    'name' => 'AsyncMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异步模式调用：'."\n"
                            .'* false（默认）：命令执行完成后，API才会返回。'."\n"
                            .'* true：API **立即**返回。'."\n"
                            .'    * 当 `TaskId` 为空：查询命令在后台异步执行。调用方需使用**返回值**中的TaskId，继续调用此API来获得查询命令的结果。'."\n"
                            .'    * 当 `TaskId` 不为空：获得查询命令的结果。'."\n",
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群 id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'gws-xxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'UdpPort' => [
                                'description' => 'UDP 端口：'."\n"
                                    .'* on：打开'."\n"
                                    .'* off：关闭',
                                'type' => 'string',
                                'example' => 'on',
                            ],
                            'TaskFinished' => [
                                'description' => '> 此值只在 `AsyncMode` 为 `true` 时有效'."\n"
                                    ."\n"
                                    .'当前查询命令的运行状态'."\n"
                                    .'* false：还未完成。'."\n"
                                    .'* true：已完成。'."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => 'Request Id',
                                'type' => 'string',
                                'example' => 'XXX-XXX',
                            ],
                            'UsbRedirect' => [
                                'description' => 'USB 重定向：'."\n"
                                    .'* off'."\n"
                                    .'* on'."\n",
                                'type' => 'string',
                                'example' => 'off',
                            ],
                            'Clipboard' => [
                                'description' => '本地剪贴板在云桌面中：'."\n"
                                    .'* off：关闭'."\n"
                                    .'* read：只可读'."\n"
                                    .'* write：只可写'."\n"
                                    .'* readwrite：可读 & 可写'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'readwrite',
                            ],
                            'Watermark' => [
                                'description' => '水印：'."\n"
                                    .'* off'."\n"
                                    .'* on',
                                'type' => 'string',
                                'example' => 'off',
                            ],
                            'TaskId' => [
                                'description' => '> 此值只在 `AsyncMode` 为 `true` 时有效'."\n"
                                    ."\n"
                                    .'当前查询命令的任务 id。',
                                'type' => 'string',
                                'example' => 't-xxx',
                            ],
                            'DomainList' => [
                                'description' => '域名白名单'."\n"
                                    .'* 白名单为空时，允许访问所有域名'."\n"
                                    .'* 白名单非空时，仅允许访问列表中的域名'."\n"
                                    .'* 支持 `*` 通配符'."\n"
                                    .'* 多条域名规则时之间用逗号分隔'."\n",
                                'type' => 'string',
                                'example' => '*.abc.com,*.xyz.com',
                            ],
                            'Audio' => [
                                'description' => '音频：'."\n"
                                    .'* on：打开'."\n"
                                    .'* off：关闭',
                                'type' => 'string',
                                'example' => 'on',
                            ],
                            'LocalDrive' => [
                                'description' => '本地磁盘在云桌面中的映射驱动器：'."\n"
                                    .'* off：关闭'."\n"
                                    .'* read：只可读'."\n"
                                    .'* readwrite：可读 & 可写'."\n",
                                'type' => 'string',
                                'example' => 'readwrite',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"UdpPort\\": \\"on\\",\\n  \\"TaskFinished\\": true,\\n  \\"RequestId\\": \\"XXX-XXX\\",\\n  \\"UsbRedirect\\": \\"off\\",\\n  \\"Clipboard\\": \\"readwrite\\",\\n  \\"Watermark\\": \\"off\\",\\n  \\"TaskId\\": \\"t-xxx\\",\\n  \\"DomainList\\": \\"*.abc.com,*.xyz.com\\",\\n  \\"Audio\\": \\"on\\",\\n  \\"LocalDrive\\": \\"readwrite\\"\\n}","errorExample":""},{"type":"xml","example":"<TaskId>t-xxx</TaskId>\\n<UdpPort>on</UdpPort>\\n<RequestId>XXX-XXX</RequestId>\\n<LocalDrive>readwrite</LocalDrive>\\n<UsbRedirect>off</UsbRedirect>\\n<TaskFinished>true</TaskFinished>\\n<DomainList>*.abc.com,*.xyz.com</DomainList>\\n<Clipboard>readwrite</Clipboard>\\n<Audio>on</Audio>\\n<Watermark>off</Watermark>","errorExample":""}]',
            'title' => '获取集群策略',
            'summary' => '获取集群策略。',
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
                        'required' => false,
                        'example' => 'gws-rhzlyl5zx3ua****',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的行数。',
                        'type' => 'integer',
                        'format' => 'int64',
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
                            'PageSize' => [
                                'description' => '每页行数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7FCC0CD3-53C2-508E-9E1C-39BF14F0E75A',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '集群总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Clusters' => [
                                'description' => '集群信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'VpcId' => [
                                            'description' => 'VPC ID。',
                                            'type' => 'string',
                                            'example' => 'vpc-bp1vi54o1on2sijpm****',
                                        ],
                                        'Status' => [
                                            'description' => '集群状态。可能值：'."\n"
                                                .'* creating'."\n"
                                                .'* starting'."\n"
                                                .'* running'."\n"
                                                .'* deleted'."\n"
                                                .'* indebt'."\n",
                                            'type' => 'string',
                                            'example' => 'running',
                                        ],
                                        'NatId' => [
                                            'description' => '与集群关联的NAT网关的ID。'."\n"
                                                .'> 当集群没有与NAT网关关联时，此值为空。',
                                            'type' => 'string',
                                            'example' => 'ngw-uf63l0kkf73ieyf9k****',
                                        ],
                                        'InstanceCount' => [
                                            'description' => '集群中的实例个数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2020-09-17T02:02:25Z',
                                        ],
                                        'NatEip' => [
                                            'description' => '与集群关联的NAT网关所使用的弹性公网IP。'."\n"
                                                .'> 当集群没有与NAT网关关联时，此值为空。',
                                            'type' => 'string',
                                            'example' => '192.168.XX.XX',
                                        ],
                                        'SecurityGroup' => [
                                            'description' => '安全组ID。',
                                            'type' => 'string',
                                            'example' => 'sg-bp18ny7dvho4g0s7****',
                                        ],
                                        'Name' => [
                                            'description' => '集群名称。',
                                            'type' => 'string',
                                            'example' => 'cluster-xxx',
                                        ],
                                        'DomainName' => [
                                            'description' => '* gws.s1.standard 集群：返回空值。'."\n"
                                                .'* gws.s1.advanced 集群：关联用户AD域之后，此值对应已关联的用户AD域，例如：example.com。取消关联后，此值为空。',
                                            'type' => 'string',
                                            'example' => 'example.com',
                                        ],
                                        'ClusterId' => [
                                            'description' => '集群ID。',
                                            'type' => 'string',
                                            'example' => 'gws-rhzlyl5zx3ua****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"7FCC0CD3-53C2-508E-9E1C-39BF14F0E75A\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Clusters\\": [\\n    {\\n      \\"VpcId\\": \\"vpc-bp1vi54o1on2sijpm****\\",\\n      \\"Status\\": \\"running\\",\\n      \\"NatId\\": \\"ngw-uf63l0kkf73ieyf9k****\\",\\n      \\"InstanceCount\\": 1,\\n      \\"CreateTime\\": \\"2020-09-17T02:02:25Z\\",\\n      \\"NatEip\\": \\"192.168.XX.XX\\",\\n      \\"SecurityGroup\\": \\"sg-bp18ny7dvho4g0s7****\\",\\n      \\"Name\\": \\"cluster-xxx\\",\\n      \\"DomainName\\": \\"example.com\\",\\n      \\"ClusterId\\": \\"gws-rhzlyl5zx3ua****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeClustersResponse>\\n    <TotalCount>1</TotalCount>\\n    <PageSize>10</PageSize>\\n    <RequestId>7FCC0CD3-53C2-508E-9E1C-39BF14F0E75A</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Clusters>\\n        <Status>running</Status>\\n        <InstanceCount>1</InstanceCount>\\n        <NatId>ngw-uf63l0kkf73ieyf9k****</NatId>\\n        <VpcId>vpc-bp1vi54o1on2sijpm****</VpcId>\\n        <DomainName>example.com</DomainName>\\n        <ClusterId>gws-rhzlyl5zx3ua****</ClusterId>\\n        <CreateTime>2020-09-17T02:02:25Z</CreateTime>\\n        <SecurityGroup>sg-bp18ny7dvho4g0s7****</SecurityGroup>\\n        <NatEip>192.168.XX.XX</NatEip>\\n        <Name>cluster-xxx</Name>\\n    </Clusters>\\n</DescribeClustersResponse>","errorExample":""}]',
            'title' => '描述集群信息',
            'summary' => '调用DescribeClusters查询集群信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeAvailableResource' => [
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => 'Request id。',
                                'type' => 'string',
                                'example' => 'XXX-XXX',
                            ],
                            'AvailableResources' => [
                                'description' => 'AvailableResources',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ClusterType' => [
                                            'description' => '集群类型。',
                                            'type' => 'string',
                                            'example' => 'gws.s1.stardard',
                                        ],
                                        'Zone' => [
                                            'description' => '可用区。',
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
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"XXX-XXX\\",\\n  \\"AvailableResources\\": [\\n    {\\n      \\"ClusterType\\": \\"gws.s1.stardard\\",\\n      \\"Zone\\": \\"cn-hangzhou-i\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXX-XXX</RequestId>\\n<AvailableResources>\\n    <Zone>cn-hangzhou-i</Zone>\\n    <ClusterType>gws.s1.stardard</ClusterType>\\n</AvailableResources>","errorExample":""}]',
            'title' => '查看云桌面集群的规格与可用区列表',
            'summary' => '查看云桌面集群的规格与可用区列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'gws.ap-northeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'ecd.cn-hangzhou-finance.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'gws.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'gws.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'gws.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'gws.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'gws.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'gws.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'gws.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'gws.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'gws.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'gws.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'gws.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'gws.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'gws.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'gws.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'gws.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'gws.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'gws.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'gws.eu-west-1.aliyuncs.com',
        ],
    ],
];
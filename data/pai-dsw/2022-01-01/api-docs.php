<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'pai-dsw',
        'version' => '2022-01-01',
    ],
    'directories' => [
        [
            'id' => 176634,
            'title' => '实例',
            'type' => 'directory',
            'children' => [
                'CreateInstance',
                'DeleteInstance',
                'UpdateInstance',
                'StartInstance',
                'StopInstance',
                'GetInstance',
                'ListInstances',
                'GetInstanceEvents',
            ],
        ],
        [
            'id' => 176670,
            'title' => '生命周期',
            'type' => 'directory',
            'children' => [
                'GetLifecycle',
            ],
        ],
        [
            'id' => 176671,
            'title' => '资源监控',
            'type' => 'directory',
            'children' => [
                'GetInstanceMetrics',
            ],
        ],
        [
            'id' => 176677,
            'title' => '实例快照',
            'type' => 'directory',
            'children' => [
                'CreateInstanceSnapshot',
                'DeleteInstanceSnapshot',
                'GetInstanceSnapshot',
                'ListInstanceSnapshot',
            ],
        ],
        [
            'id' => 176672,
            'title' => '统计',
            'type' => 'directory',
            'children' => [
                'GetResourceGroupStatistics',
                'ListInstanceStatistics',
            ],
        ],
        [
            'id' => 176676,
            'title' => '实例定时自动关机',
            'type' => 'directory',
            'children' => [
                'CreateInstanceShutdownTimer',
                'DeleteInstanceShutdownTimer',
                'GetInstanceShutdownTimer',
            ],
        ],
        [
            'id' => 176675,
            'title' => '闲置实例自动关机',
            'type' => 'directory',
            'children' => [
                'CreateIdleInstanceCuller',
                'DeleteIdleInstanceCuller',
                'GetIdleInstanceCuller',
            ],
        ],
        [
            'id' => 176674,
            'title' => 'ECS规格',
            'type' => 'directory',
            'children' => [
                'ListEcsSpecs',
            ],
        ],
        [
            'id' => 176673,
            'title' => '用户配置',
            'type' => 'directory',
            'children' => [
                'GetUserConfig',
            ],
        ],
        [
            'id' => 180404,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'GetToken',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'GetMetrics',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'DemoCategory' => [
                'title' => '样例目录',
                'description' => '样例目录',
                'type' => 'object',
                'properties' => [
                    'SubCategories' => [
                        'title' => '目录列表',
                        'description' => '目录列表',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DemoCategory',
                        ],
                    ],
                    'CategoryName' => [
                        'title' => '目录名',
                        'description' => '目录名',
                        'type' => 'string',
                        'example' => 'SDK Usage',
                    ],
                    'CategoryCode' => [
                        'title' => '目录码',
                        'description' => '目录码',
                        'type' => 'string',
                        'example' => 'sdk',
                    ],
                    'Order' => [
                        'title' => '序号',
                        'description' => '序号',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '12',
                    ],
                ],
            ],
            'ForwardInfo' => [
                'title' => 'DSW实例端口透出信息',
                'description' => 'DSW实例端口透出配置',
                'type' => 'object',
                'properties' => [
                    'Enable' => [
                        'title' => '是否开启端口映射',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'ContainerName' => [
                        'title' => '目标容器名字',
                        'type' => 'string',
                        'example' => 'dsw-notebook',
                    ],
                    'Port' => [
                        'title' => '目标映射端口',
                        'type' => 'string',
                        'example' => '22',
                    ],
                    'NatGatewayId' => [
                        'title' => '网关ID',
                        'type' => 'string',
                        'example' => 'ngw-bp1uewa15k4iy5770****',
                    ],
                    'EipAllocationId' => [
                        'title' => '公网EIP ID',
                        'type' => 'string',
                        'example' => 'eip-25877c70gddh****',
                    ],
                    'SSHPublicKey' => [
                        'title' => 'SSH公钥',
                        'type' => 'string',
                    ],
                ],
            ],
            'ForwardInfoResponse' => [
                'title' => 'DSW实例端口透出结果',
                'description' => 'DSW实例端口透出结果',
                'type' => 'object',
                'properties' => [
                    'Enable' => [
                        'title' => '是否开启端口映射',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'ContainerName' => [
                        'title' => '目标容器名字',
                        'type' => 'string',
                        'example' => 'dsw-notebook',
                    ],
                    'Port' => [
                        'title' => '目标映射端口',
                        'type' => 'string',
                        'example' => '22',
                    ],
                    'NatGatewayId' => [
                        'title' => '网关ID',
                        'type' => 'string',
                        'example' => 'ngw-bp1uewa15k4iy5770****',
                    ],
                    'EipAllocationId' => [
                        'title' => '公网EIP ID',
                        'type' => 'string',
                        'example' => 'eip-25877c70gddh****',
                    ],
                    'SSHPublicKey' => [
                        'title' => 'SSH公钥',
                        'type' => 'string',
                    ],
                    'ConnectInfo' => [
                        'title' => '链接信息',
                        'type' => 'object',
                        'properties' => [
                            'Phase' => [
                                'title' => '链接状态',
                                'type' => 'string',
                                'example' => 'Ready',
                            ],
                            'Message' => [
                                'title' => '链接状态信息',
                                'type' => 'string',
                                'example' => 'DNAT and privateZone are both ready.',
                            ],
                            'Intranet' => [
                                'title' => '内网链接信息',
                                'type' => 'object',
                                'properties' => [
                                    'Endpoint' => [
                                        'title' => '链接地址',
                                        'type' => 'string',
                                        'example' => 'dsw-notebook-22-urz3u6cnu0uts7ej9r.dsw-5cc6083084818f60.dsw.pai.alibaba.com',
                                    ],
                                    'Port' => [
                                        'title' => '链接端口',
                                        'type' => 'string',
                                        'example' => '22',
                                    ],
                                ],
                            ],
                            'Internet' => [
                                'title' => '外网链接信息',
                                'type' => 'object',
                                'properties' => [
                                    'Endpoint' => [
                                        'title' => '链接地址',
                                        'type' => 'string',
                                        'example' => '47.111.119.114',
                                    ],
                                    'Port' => [
                                        'title' => '链接端口',
                                        'type' => 'string',
                                        'example' => '22',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateInstance' => [
            'summary' => '调用CreateInstance创建一个DSW实例。',
            'path' => '/api/v2/instances',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'chargeType' => 'paid',
                'abilityTreeCode' => '118631',
                'abilityTreeNodes' => [
                    'FEATURElearn63ZC5S',
                    'FEATURElearnQHG7ZB',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '实例属性',
                        'description' => '实例属性。',
                        'type' => 'object',
                        'properties' => [
                            'WorkspaceId' => [
                                'title' => '工作空间Id',
                                'description' => '工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '40823',
                            ],
                            'InstanceName' => [
                                'title' => '实例名称',
                                'description' => '实例名称。格式要求：'."\n"
                                    .'- 只能包含英文字母、数字和下划线（_）。'."\n"
                                    .'- 不能超过27个字符。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'training_data',
                            ],
                            'EcsSpec' => [
                                'title' => '实例对应的Ecs规格',
                                'description' => '实例对应的ECS规格。如何获取ECS规格，请参见[ListEcsSpecs](~~470423~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ecs.c6.large',
                            ],
                            'ImageId' => [
                                'title' => '镜像Id',
                                'description' => '镜像ID。如何获取镜像ID，请参见[ListImages](~~449118~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'image-05cefd0be2exxxx',
                            ],
                            'ImageUrl' => [
                                'title' => '镜像地址',
                                'description' => '镜像地址。如何获取镜像地址，请参见[ListImages](~~449118~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu',
                            ],
                            'Datasets' => [
                                'title' => '数据集集合',
                                'description' => '数据集集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据集。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DatasetId' => [
                                            'title' => '数据集Id',
                                            'description' => '数据集ID。如何获取数据集ID，请参见[ListDatasets](~~457222~~)，使用时不能指定Uri。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'd-vsqjvsjp4orp5l206u',
                                        ],
                                        'MountPath' => [
                                            'title' => '容器内挂载路径',
                                            'description' => '容器内挂载路径。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '/mnt/data',
                                        ],
                                        'Uri' => [
                                            'title' => '数据Uri',
                                            'description' => '需要挂载的OSS目录的Uri，使用时不能同时指定DatasetId。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'oss://bucket-name.oss-cn-shanghai-internal.aliyuncs.com/data/path/',
                                        ],
                                        'Options' => [
                                            'title' => '数据挂载Options',
                                            'description' => '自定义挂载属性，目前仅支持OSS，使用时不能同时指定OptionType。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '{'."\n"
                                                .'  "fs.oss.download.thread.concurrency": "10",'."\n"
                                                .'  "fs.oss.upload.thread.concurrency": "10",'."\n"
                                                .'  "fs.jindo.args": "-oattr_timeout=3 -oentry_timeout=0 -onegative_timeout=0 -oauto_cache -ono_symlink"'."\n"
                                                .'}'."\n",
                                        ],
                                        'OptionType' => [
                                            'description' => '挂载类型，使用时不能同时指定Options，目前仅支持OSS:'."\n"
                                                ."\n"
                                                .'- FastReadWrite：快速读写模式。'."\n"
                                                .'- IncrementalReadWrite：增量读写模式。'."\n"
                                                .'- ConsistentReadWrite：读写一致模式。'."\n"
                                                .'- ReadOnly：只读模式。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'FastReadWrite',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'UserVpc' => [
                                'title' => 'user vpc配置',
                                'description' => 'User VPC配置。',
                                'type' => 'object',
                                'properties' => [
                                    'VpcId' => [
                                        'title' => 'Vpc Id',
                                        'description' => 'VPC ID。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'vpc-xxxxx',
                                    ],
                                    'VSwitchId' => [
                                        'title' => 'VSwitch Id',
                                        'description' => '交换机ID。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'vsw-xxxxx',
                                    ],
                                    'SecurityGroupId' => [
                                        'title' => 'Security Group Id',
                                        'description' => '安全组ID。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'sg-xxxxxx',
                                    ],
                                    'ExtendedCIDRs' => [
                                        'description' => '扩展网段。'."\n"
                                            .'- 当交换机ID为空时，此参数可以不提供，系统会自动获取VPC下的所有网段；'."\n"
                                            .'- 当交换机ID不为空时，此参数必须提供，建议填写VPC下的所有网段。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '扩展网段。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '"172.16.19.0/24","172.16.2.0/24","172.16.12.0/24"',
                                        ],
                                        'required' => false,
                                        'example' => '["192.168.0.1/24", "192.168.1.1/24"]',
                                    ],
                                    'DefaultRoute' => [
                                        'title' => 'Default Route',
                                        'description' => '默认路由。取值如下：'."\n"
                                            ."\n"
                                            .'- eth0：表示使用默认网卡，通过公共网关访问外部网络。'."\n"
                                            .'- eth1：表示使用用户弹性网卡，通过私有网关访问外部网络。具体配置方法，请参考[配置DSW实例通过专有公网网关访问公网](~~2525343~~)。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'eth0',
                                    ],
                                    'ForwardInfos' => [
                                        'title' => 'Forward Infos',
                                        'description' => '端口透出信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '端口透出信息列表。',
                                            'required' => false,
                                            '$ref' => '#/components/schemas/ForwardInfo',
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => false,
                            ],
                            'Accessibility' => [
                                'title' => '工作空间内是否他人可见',
                                'description' => '工作空间内是否他人可见。取值如下：'."\n"
                                    .'- PRIVATE：表示工作空间内自己及管理员可见。'."\n"
                                    .'- PUBLIC：工作空间所有用户可见。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PRIVATE',
                            ],
                            'EnvironmentVariables' => [
                                'title' => '环境变量',
                                'description' => '环境变量。',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'description' => '用户指定环境变量，DSW实例启动后，指定环境变量会被注入到容器中。',
                                    'example' => 'MAAS',
                                ],
                                'example' => '{userName: "Chris"}',
                            ],
                            'ResourceId' => [
                                'title' => '资源Id,预付费时填写',
                                'description' => '资源组ID，预付费时配置。如何创建专有资源组，请参见[准备及管理DLC资源组集群](~~202827~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'dsw-123456789',
                            ],
                            'Priority' => [
                                'title' => '优先级，在分配资源给实例时，优先级越高的实例越优先',
                                'description' => '优先级，在分配资源给实例时，优先级越高的实例越优先。取值范围为1~9。'."\n"
                                    .'- 1为最低优先级。'."\n"
                                    .'- 9为最高优先级。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1',
                            ],
                            'RequestedResource' => [
                                'title' => '资源配置，弹内或者轻量化时使用',
                                'description' => '资源配置，弹内或者轻量化时使用。',
                                'type' => 'object',
                                'properties' => [
                                    'CPU' => [
                                        'title' => 'cpu核数',
                                        'description' => 'CPU核数。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '32',
                                    ],
                                    'Memory' => [
                                        'title' => 'memory大小',
                                        'description' => '内存大小。单位为GB。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '32GB',
                                    ],
                                    'SharedMemory' => [
                                        'title' => 'shared memory大小',
                                        'description' => '共享内存大小。单位为GB。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '32GB',
                                    ],
                                    'GPU' => [
                                        'title' => 'gpu数量',
                                        'description' => 'GPU数量。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '4',
                                    ],
                                    'GPUType' => [
                                        'title' => 'gpu显卡类型',
                                        'description' => 'GPU显卡类型，取值如下：'."\n"
                                            .'- V100'."\n"
                                            .'- A100'."\n"
                                            .'- T4'."\n"
                                            .'- A10'."\n"
                                            .'- P100',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'v100',
                                    ],
                                ],
                                'required' => false,
                                'example' => '{"CPU":"4","Memory":"8Gi","SharedMemory":"4Gi","GPU":"1","GPUType":"Tesla-V100-16G"}',
                            ],
                            'Labels' => [
                                'title' => '用户自定义标签',
                                'description' => '用户自定义标签。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '用户定义标签。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'title' => '用户定义标签键',
                                            'description' => '用户定义标签键。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'stsTokenOwner',
                                        ],
                                        'Value' => [
                                            'title' => '用户定义标签值',
                                            'description' => '用户定义标签值。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '123xxxxxxxx',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                                'example' => '{\'foo\': \'bar\'}',
                            ],
                            'CloudDisks' => [
                                'title' => '云盘列表',
                                'description' => '云盘列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '云盘列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Capacity' => [
                                            'title' => '云盘容量',
                                            'description' => '为每个按量付费实例赠送免费云盘做持久化存储。'."\n"
                                                .'- GPU规格：默认为100 GB。'."\n"
                                                .'- CPU规格：默认为30 GB。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '30',
                                        ],
                                        'SubType' => [
                                            'title' => '云盘使用方式, rootfs 挂载为rootfs',
                                            'description' => 'rootfs：表示将磁盘挂载为系统盘，系统环境存储在磁盘上。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'rootfs',
                                        ],
                                        'MountPath' => [
                                            'title' => '容器内挂载云盘路径',
                                            'description' => '磁盘在容器内额外挂载的数据目录路径。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '/mnt/workspace',
                                        ],
                                        'Path' => [
                                            'title' => '云盘内被挂载目录路径',
                                            'description' => '磁盘被挂载的路径。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '/mnt/systemdist',
                                        ],
                                        'Status' => [
                                            'title' => '云盘状态',
                                            'description' => '云盘或者快照使用情况。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Available' => [
                                                    'description' => '可使用量，单位 Byte。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                    'example' => '31841058816',
                                                ],
                                                'Usage' => [
                                                    'description' => '已使用量，单位 Byte。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                    'example' => '371195904',
                                                ],
                                                'Capacity' => [
                                                    'description' => '容量，单位 Byte。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                    'example' => '32212254720',
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                                'example' => '[]',
                            ],
                            'WorkspaceSource' => [
                                'title' => '工作空间指向的存储，如果不指定，则依次使用NAS，CloudDisk或者本地磁盘',
                                'description' => '选择云盘作为默认工作目录。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'rootfsCloudDisk',
                            ],
                            'UserId' => [
                                'title' => '实例的使用者，可能是子账号或者主账号',
                                'description' => '实例所有者的账号ID。支持阿里云账号或RAM用户。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '161228528250****',
                            ],
                            'Driver' => [
                                'title' => 'Driver for accelerator',
                                'description' => 'NVIDIA驱动配置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '535.54.03',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '执行结果',
                        'description' => '执行结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '返回结果说明。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态码',
                                'description' => 'HTTP状态码，可能值：'."\n"
                                    .'- 400'."\n"
                                    .'- 404'."\n"
                                    .'- 200',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'InstanceId' => [
                                'title' => '实例Id',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'dsw-730xxxxxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"null\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\"\\n}","type":"json"}]',
            'title' => '创建实例',
        ],
        'DeleteInstance' => [
            'summary' => '删除指定DSW实例。',
            'path' => '/api/v2/instances/{InstanceId}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~470439~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsw-730xxxxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '执行结果',
                        'description' => '执行结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '返回结果说明。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态码',
                                'description' => 'HTTP状态码，可能值：'."\n"
                                    .'- 400'."\n"
                                    .'- 404',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'null',
                            ],
                            'InstanceId' => [
                                'title' => '实例Id',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'dsw-730xxxxxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"null\\",\\n  \\"HttpStatusCode\\": 0,\\n  \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\"\\n}","type":"json"}]',
            'title' => '删除实例',
        ],
        'UpdateInstance' => [
            'summary' => '更新DSW实例的属性。',
            'path' => '/api/v2/instances/{InstanceId}',
            'methods' => [
                'put',
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
                'abilityTreeCode' => '118636',
                'abilityTreeNodes' => [
                    'FEATURElearnQHG7ZB',
                    'FEATURElearnQVNGD3',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~470439~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsw-730xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '需要更新的实例属性',
                        'description' => '需要更新的实例属性。',
                        'type' => 'object',
                        'properties' => [
                            'InstanceName' => [
                                'title' => '实例名称',
                                'description' => '实例名称。格式要求：'."\n"
                                    .'- 只能包含英文字母、数字和下划线（_）。'."\n"
                                    .'- 不能超过27个字符。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'training_data',
                            ],
                            'EcsSpec' => [
                                'title' => '实例对应的Ecs规格',
                                'description' => '实例对应的ECS规格。如何获取ECS规格，请参见[ListEcsSpecs](~~470423~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ecs.c6.large',
                            ],
                            'ImageId' => [
                                'title' => '镜像Id',
                                'description' => '镜像ID。如何获取镜像ID，请参见[ListImages](~~449118~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'image-05cefd0be2exxxx',
                            ],
                            'ImageUrl' => [
                                'title' => '镜像地址',
                                'description' => '镜像地址。如何获取镜像地址，请参见[ListImages](~~449118~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu',
                            ],
                            'Datasets' => [
                                'title' => '数据集集合',
                                'description' => '数据集集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据集对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DatasetId' => [
                                            'title' => '数据集Id',
                                            'description' => '数据集ID。如何获取数据集ID，请参见[ListDatasets](~~457222~~)。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'd-vsqjvsjp4orp5l206u',
                                        ],
                                        'MountPath' => [
                                            'title' => '容器内挂载路径',
                                            'description' => '容器内挂载路径。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '/mnt/data',
                                        ],
                                        'Uri' => [
                                            'title' => '数据Uri',
                                            'description' => '需要挂载的OSS目录的Uri，使用时不能同时指定DatasetId。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'oss://bucket-name.oss-cn-shanghai-internal.aliyuncs.com/data/path/',
                                        ],
                                        'Options' => [
                                            'title' => '数据挂载配置项',
                                            'description' => '自定义数据集挂载属性，目前仅支持OSS，使用时不能同时指定OptionType。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '{'."\n"
                                                .'  "fs.oss.download.thread.concurrency": "10",'."\n"
                                                .'  "fs.oss.upload.thread.concurrency": "10",'."\n"
                                                .'  "fs.jindo.args": "-oattr_timeout=3 -oentry_timeout=0 -onegative_timeout=0 -oauto_cache -ono_symlink"'."\n"
                                                .'}',
                                        ],
                                        'OptionType' => [
                                            'description' => '挂载类型，使用是不能指定Options，目前仅支持OSS:'."\n"
                                                ."\n"
                                                .'- FastReadWrite：快速读写模式。'."\n"
                                                .'- IncrementalReadWrite：增量读写模式。'."\n"
                                                .'- ConsistentReadWrite：读写一致模式。'."\n"
                                                .'- ReadOnly：只读模式。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'FastReadWrite',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'UserVpc' => [
                                'title' => 'user vpc配置',
                                'description' => 'User VPC配置。',
                                'type' => 'object',
                                'properties' => [
                                    'VpcId' => [
                                        'title' => 'Vpc Id',
                                        'description' => 'VPC ID。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'vpc-xxxxx',
                                    ],
                                    'VSwitchId' => [
                                        'title' => 'VSwitch Id',
                                        'description' => '交换机ID。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'vsw-xxxxx',
                                    ],
                                    'SecurityGroupId' => [
                                        'title' => 'Security Group Id',
                                        'description' => '安全组ID。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'sg-xxxxxx',
                                    ],
                                    'ExtendedCIDRs' => [
                                        'description' => '扩展网段。'."\n"
                                            .'- 当交换机ID为空时，此参数可以不提供，系统会自动获取VPC下的所有网段；'."\n"
                                            .'- 当交换机ID不为空时，此参数必须提供，建议填写VPC下的所有网段。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '扩展网段。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '"172.16.19.0/24","172.16.2.0/24","172.16.12.0/24"',
                                        ],
                                        'required' => false,
                                        'example' => '["192.168.0.1/24", "192.168.1.1/24"]',
                                    ],
                                    'DefaultRoute' => [
                                        'title' => 'Default Route',
                                        'description' => '默认路由。取值如下：'."\n"
                                            .'- eth0：表示使用默认网卡，通过公共网关访问外部网络。'."\n"
                                            .'- eth1：表示使用用户弹性网卡，通过私有网关访问外部网络。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'eth0',
                                    ],
                                    'ForwardInfos' => [
                                        'title' => 'Forward Infos',
                                        'description' => 'Forward Infos',
                                        'type' => 'array',
                                        'items' => [
                                            'required' => false,
                                            '$ref' => '#/components/schemas/ForwardInfo',
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => false,
                            ],
                            'Accessibility' => [
                                'title' => '工作空间内是否他人可见',
                                'description' => '工作空间内是否他人可见。取值如下：'."\n"
                                    .'- PRIVATE：表示工作空间内自己及管理员可见。'."\n"
                                    .'- PUBLIC：工作空间所有用户可见。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PRIVATE',
                            ],
                            'DisassociateDatasets' => [
                                'title' => '是否删除关联数据集',
                                'description' => '是否删除关联数据集。'."\n"
                                    .'- 打开开关：表示删除关联数据集。'."\n"
                                    .'- 关闭开关：表示保留关联数据集。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'DisassociateVpc' => [
                                'title' => '是否删除关联用户vpc',
                                'description' => '是否删除关联用户VPC。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'DisassociateForwardInfos' => [
                                'title' => '是否删除关联端口透出信息',
                                'description' => '是否删除关联端口透出信息',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'RequestedResource' => [
                                'title' => '资源配置，弹内或者轻量化时使用',
                                'description' => '资源配置，弹内或者轻量化时使用。',
                                'type' => 'object',
                                'properties' => [
                                    'CPU' => [
                                        'title' => 'cpu核数',
                                        'description' => 'CPU核数。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '32',
                                    ],
                                    'Memory' => [
                                        'title' => 'memory大小',
                                        'description' => '内存大小，单位为GB。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '32',
                                    ],
                                    'SharedMemory' => [
                                        'title' => 'shared memory大小',
                                        'description' => '共享内存大小，单位为GB。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '32',
                                    ],
                                    'GPU' => [
                                        'title' => 'gpu数量',
                                        'description' => 'GPU数量。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '4',
                                    ],
                                    'GPUType' => [
                                        'title' => 'gpu显卡类型',
                                        'description' => 'GPU显卡类型。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'v100',
                                    ],
                                ],
                                'required' => false,
                                'example' => '{"CPU":"4","Memory":"8Gi","SharedMemory":"4Gi","GPU":"1","GPUType":"Tesla-V100-16G"}',
                            ],
                            'WorkspaceSource' => [
                                'title' => '工作空间指向的存储，如果不指定，则依次使用NAS，CloudDisk或者本地磁盘',
                                'description' => '工作空间指向的存储，如果不指定，则依次使用NAS，CloudDisk或者本地磁盘。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'd-123456789',
                            ],
                            'UserId' => [
                                'title' => '实例的使用者，可能是子账号或者主账号',
                                'description' => '实例的使用者，可能是子账号或者主账号。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '16122**********',
                            ],
                            'CloudDisks' => [
                                'title' => '云盘列表',
                                'description' => '云盘列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Capacity' => [
                                            'title' => '云盘容量',
                                            'description' => '云盘容量',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '30Gi',
                                        ],
                                        'SubType' => [
                                            'title' => '云盘类型, rootfs 挂载为rootfs',
                                            'description' => '云盘类型, rootfs 挂载为rootfs',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'rootfs',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                                'example' => '[]',
                            ],
                            'Priority' => [
                                'title' => '实例排队优先级',
                                'description' => '优先级，在分配资源给实例时，优先级越高的实例越优先。取值范围为1~9。'."\n"
                                    ."\n"
                                    .'1为最低优先级。'."\n"
                                    .'9为最高优先级。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1',
                            ],
                            'Driver' => [
                                'title' => 'Driver for accelerator',
                                'description' => 'NVIDIA 驱动配置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '535.54.03',
                            ],
                            'DisassociateDriver' => [
                                'title' => '是否删除关联端口透出信息',
                                'description' => '是否删除 NVIDIA 驱动配置。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '执行结果',
                        'description' => '执行结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '返回结果说明。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态码',
                                'description' => 'HTTP状态码，可能值：'."\n"
                                    .'- 400'."\n"
                                    .'- 404',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'null',
                            ],
                            'InstanceId' => [
                                'title' => '实例Id',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'dsw-730xxxxxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"null\\",\\n  \\"HttpStatusCode\\": 0,\\n  \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\"\\n}","type":"json"}]',
            'title' => '更新实例',
        ],
        'StartInstance' => [
            'summary' => '启动DSW实例。',
            'path' => '/api/v2/instances/{InstanceId}/start',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~470439~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsw-730xxxxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '执行结果',
                        'description' => '执行结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '返回结果说明。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态码',
                                'description' => 'HTTP状态码，可能值：'."\n"
                                    .'- 400'."\n"
                                    .'- 404',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'null',
                            ],
                            'InstanceId' => [
                                'title' => '实例Id',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'dsw-730xxxxxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"null\\",\\n  \\"HttpStatusCode\\": 0,\\n  \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\"\\n}","type":"json"}]',
            'title' => '启动实例',
        ],
        'StopInstance' => [
            'summary' => '调用StopInstance，停止DSW实例。',
            'path' => '/api/v2/instances/{InstanceId}/stop',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~470439~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsw-730xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'SaveImage',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否保存环境后再关闭实例',
                        'description' => '是否保存环境后再关闭实例。'."\n"
                            .'-  打开开关：保存环境后再关闭实例。'."\n"
                            .'- 关闭开关：不保存环境数据，直接关闭实例。',
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
                        'title' => '执行结果',
                        'description' => '执行结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '返回结果说明。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态码',
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'null',
                            ],
                            'InstanceId' => [
                                'title' => '实例Id',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'dsw-730xxxxxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"null\\",\\n  \\"HttpStatusCode\\": 0,\\n  \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\"\\n}","type":"json"}]',
            'title' => '停止实例',
        ],
        'GetInstance' => [
            'summary' => '查询DSW实例详情。',
            'path' => '/api/v2/instances/{InstanceId}',
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
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '118634',
                'abilityTreeNodes' => [
                    'FEATURElearnQHG7ZB',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~470439~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsw-730xxxxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '实例详情',
                        'description' => '实例详情。',
                        'type' => 'object',
                        'properties' => [
                            'WorkspaceId' => [
                                'title' => '工作空间Id',
                                'description' => '工作空间ID。',
                                'type' => 'string',
                                'example' => '40823',
                            ],
                            'WorkspaceName' => [
                                'title' => '工作空间名称',
                                'description' => '工作空间名称。',
                                'type' => 'string',
                                'example' => 'training_data',
                            ],
                            'InstanceId' => [
                                'title' => '实例Id',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'dsw-730xxxxxxxxxx',
                            ],
                            'InstanceName' => [
                                'title' => '实例名称',
                                'description' => '实例名称。',
                                'type' => 'string',
                                'example' => 'training_data',
                            ],
                            'EcsSpec' => [
                                'title' => '实例对应的Ecs规格',
                                'description' => '实例对应的ECS规格。',
                                'type' => 'string',
                                'example' => 'ecs.c6.large',
                            ],
                            'Status' => [
                                'title' => '实例状态',
                                'description' => '实例状态。',
                                'type' => 'string',
                                'example' => 'Running',
                            ],
                            'InstanceUrl' => [
                                'title' => '实例Url',
                                'description' => '实例Url。',
                                'type' => 'string',
                                'example' => 'https://dsw-cn-shanghai.data.aliyun.com/notebook.htm?instance=3****#/',
                            ],
                            'JupyterlabUrl' => [
                                'title' => 'Jupyterlab Url',
                                'description' => 'Jupyterlab Url。',
                                'type' => 'string',
                                'example' => 'https://dsw-gateway-cn-shanghai.aliyun.com/dsw-3****/lab/',
                            ],
                            'WebIDEUrl' => [
                                'title' => 'Web IDE url',
                                'description' => 'Web IDE Url。',
                                'type' => 'string',
                                'example' => 'https://dsw-gateway-cn-shanghai.aliyun.com/dsw-3****/ide/',
                            ],
                            'TerminalUrl' => [
                                'title' => '终端url',
                                'description' => '终端Url。',
                                'type' => 'string',
                                'example' => 'https://dsw-gateway-cn-shanghai.aliyun.com/dsw-3****/tty/',
                            ],
                            'AccumulatedRunningTimeInMs' => [
                                'title' => '累计运行时间（ms）',
                                'description' => '累计运行时间，单位为毫秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '3600000',
                            ],
                            'ImageId' => [
                                'title' => '镜像Id',
                                'description' => '镜像ID。',
                                'type' => 'string',
                                'example' => 'image-05cefd0be2exxxx',
                            ],
                            'ImageUrl' => [
                                'title' => '镜像地址',
                                'description' => '镜像地址。',
                                'type' => 'string',
                                'example' => 'registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu',
                            ],
                            'ImageName' => [
                                'title' => '镜像名称',
                                'description' => '镜像名称。',
                                'type' => 'string',
                                'example' => 'py36_cpu_tf1.12_ubuntu',
                            ],
                            'GmtCreateTime' => [
                                'title' => '实例创建时间',
                                'description' => '实例创建时间。',
                                'type' => 'string',
                                'example' => '2021-01-12T14:36:01Z',
                            ],
                            'GmtModifiedTime' => [
                                'title' => '实例修改时间',
                                'description' => '实例修改时间。',
                                'type' => 'string',
                                'example' => '2021-01-12T14:36:01Z',
                            ],
                            'UserId' => [
                                'title' => '用户Id',
                                'description' => '用户ID。',
                                'type' => 'string',
                                'example' => '161228528250****',
                            ],
                            'UserName' => [
                                'title' => '用户名称',
                                'description' => '用户名称。',
                                'type' => 'string',
                                'example' => '测试用户',
                            ],
                            'Datasets' => [
                                'title' => '数据集集合',
                                'description' => '数据集集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据集对象，数据集可以是NAS或者OSS类型。'."\n"
                                        .'数据集对象属性包括数据集ID以及容器内挂载路径。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DatasetId' => [
                                            'title' => '数据集Id',
                                            'description' => '数据集ID。',
                                            'type' => 'string',
                                            'example' => 'd-vsqjvsjp4orp5l****',
                                        ],
                                        'MountPath' => [
                                            'title' => '容器内挂载路径',
                                            'description' => '容器内挂载路径。',
                                            'type' => 'string',
                                            'example' => '/mnt/data',
                                        ],
                                        'Uri' => [
                                            'title' => '数据Uri',
                                            'description' => '指定的数据集Uri。',
                                            'type' => 'string',
                                            'example' => 'oss://bucket-name.oss-cn-shanghai-internal.aliyuncs.com/data/path/',
                                        ],
                                        'Options' => [
                                            'title' => '数据挂载的配置项',
                                            'description' => '指定的数据集的挂载属性。',
                                            'type' => 'string',
                                            'example' => '{'."\n"
                                                .'  "fs.oss.download.thread.concurrency": "10",'."\n"
                                                .'  "fs.oss.upload.thread.concurrency": "10",'."\n"
                                                .'  "fs.jindo.args": "-oattr_timeout=3 -oentry_timeout=0 -onegative_timeout=0 -oauto_cache -ono_symlink"'."\n"
                                                .'}',
                                        ],
                                        'OptionType' => [
                                            'description' => '指定的数据集的挂载类型。',
                                            'type' => 'string',
                                            'example' => 'FastReadWrite',
                                        ],
                                    ],
                                ],
                            ],
                            'UserVpc' => [
                                'title' => 'user vpc配置',
                                'description' => 'User VPC配置。',
                                'type' => 'object',
                                'properties' => [
                                    'VpcId' => [
                                        'title' => 'Vpc Id',
                                        'description' => 'VPC ID。',
                                        'type' => 'string',
                                        'example' => 'vpc-xxxxx',
                                    ],
                                    'VSwitchId' => [
                                        'title' => 'VSwitch Id',
                                        'description' => '交换机ID。',
                                        'type' => 'string',
                                        'example' => 'vsw-xxxxx',
                                    ],
                                    'SecurityGroupId' => [
                                        'title' => 'Security Group Id',
                                        'description' => '安全组ID。',
                                        'type' => 'string',
                                        'example' => 'sg-xxxxxx',
                                    ],
                                    'ExtendedCIDRs' => [
                                        'description' => '扩展网段。'."\n"
                                            .'- 当交换机ID为空时，此参数可以不提供，系统会自动获取VPC下的所有网段。'."\n"
                                            .'- 当交换机ID不为空时，此参数必须提供，建议填写VPC下的所有网段。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '扩展网段。',
                                            'type' => 'string',
                                            'example' => '"172.16.19.0/24","172.16.2.0/24","172.16.12.0/24"',
                                        ],
                                        'example' => '["192.168.0.1/24", "192.168.1.1/24"]',
                                    ],
                                    'DefaultRoute' => [
                                        'title' => 'Default Route',
                                        'description' => 'Default Route',
                                        'type' => 'string',
                                        'example' => 'eth0 | eth1',
                                    ],
                                    'ForwardInfos' => [
                                        'description' => '端口透出信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '端口透出信息列表。',
                                            '$ref' => '#/components/schemas/ForwardInfoResponse',
                                        ],
                                    ],
                                ],
                            ],
                            'InstanceShutdownTimer' => [
                                'title' => '定时关机任务',
                                'description' => '定时关机任务。',
                                'type' => 'object',
                                'properties' => [
                                    'InstanceId' => [
                                        'title' => '实例Id',
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'dsw-730xxxxxxxxxx',
                                    ],
                                    'GmtCreateTime' => [
                                        'title' => '创建时间',
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-01-12T14:36:01Z',
                                    ],
                                    'GmtModifiedTime' => [
                                        'title' => '修改时间',
                                        'description' => '修改时间。',
                                        'type' => 'string',
                                        'example' => '2021-01-12T14:36:01Z',
                                    ],
                                    'DueTime' => [
                                        'title' => '设定关机时间',
                                        'description' => '设定关机时间。',
                                        'type' => 'string',
                                        'example' => '2021-01-12T14:36:01Z',
                                    ],
                                    'RemainingTimeInMs' => [
                                        'title' => '剩余关机时间（ms）',
                                        'description' => '剩余关机时间，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '3600000',
                                    ],
                                ],
                            ],
                            'ReasonCode' => [
                                'title' => '实例错误代码',
                                'description' => '实例错误代码。',
                                'type' => 'string',
                                'example' => 'Internal Error',
                            ],
                            'ReasonMessage' => [
                                'title' => '实例错误原因',
                                'description' => '实例错误原因。',
                                'type' => 'string',
                                'example' => 'ImagePullBackOff',
                            ],
                            'PaymentType' => [
                                'title' => '支付类型',
                                'description' => '支付类型。可能值：'."\n"
                                    .'- PayAsYouGo：后付费。'."\n"
                                    .'- Subscription：预付费。',
                                'type' => 'string',
                                'example' => 'PayAsYouGo',
                            ],
                            'LatestSnapshot' => [
                                'title' => '最新保存的用户镜像',
                                'description' => '最新保存的用户镜像。',
                                'type' => 'object',
                                'properties' => [
                                    'ImageId' => [
                                        'title' => '镜像Id',
                                        'description' => '镜像ID。',
                                        'type' => 'string',
                                        'example' => 'image-05cefd0be2exxxx',
                                    ],
                                    'ImageName' => [
                                        'title' => '镜像名称',
                                        'description' => '镜像名称。',
                                        'type' => 'string',
                                        'example' => 'py36_cpu_tf1.12_ubuntu',
                                    ],
                                    'ImageUrl' => [
                                        'title' => '镜像Url',
                                        'description' => '镜像Url。',
                                        'type' => 'string',
                                        'example' => 'registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu',
                                    ],
                                    'RepositoryUrl' => [
                                        'title' => '镜像仓库Url',
                                        'description' => '镜像仓库Url。',
                                        'type' => 'string',
                                        'example' => 'https://cr.console.aliyun.com/repository/cn-hangzhou/zouxu/kf/images',
                                    ],
                                    'GmtCreateTime' => [
                                        'title' => '快照创建时间',
                                        'description' => '快照创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-01-12T14:36:01Z',
                                    ],
                                    'GmtModifiedTime' => [
                                        'title' => '快照修改时间',
                                        'description' => '快照修改时间。',
                                        'type' => 'string',
                                        'example' => '2021-01-12T14:36:01Z',
                                    ],
                                    'ReasonCode' => [
                                        'title' => '实例快照错误代码',
                                        'description' => '实例快照错误代码。',
                                        'type' => 'string',
                                        'example' => 'Internal Error',
                                    ],
                                    'ReasonMessage' => [
                                        'title' => '实例快照错误消息',
                                        'description' => '实例快照错误消息。',
                                        'type' => 'string',
                                        'example' => 'ImagePullBackOff',
                                    ],
                                    'Status' => [
                                        'title' => '实例快照状态',
                                        'description' => '实例快照状态。',
                                        'type' => 'string',
                                        'example' => 'Pushing',
                                    ],
                                ],
                            ],
                            'AcceleratorType' => [
                                'title' => '实例计算类型',
                                'description' => '实例计算类型。',
                                'type' => 'string',
                                'example' => 'CPU',
                            ],
                            'Accessibility' => [
                                'title' => '工作空间内是否他人可见',
                                'description' => '工作空间内是否他人可见。可能值：'."\n"
                                    .'- PRIVATE：表示工作空间内自己及管理员可见。'."\n"
                                    .'- PUBLIC：工作空间所有用户可见。',
                                'type' => 'string',
                                'example' => 'PRIVATE',
                            ],
                            'EnvironmentVariables' => [
                                'title' => '环境变量',
                                'description' => '环境变量。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'description' => '用户自定义的环境变量，将会在实例启动后，注入到容器内部。',
                                    'example' => 'app: MAAS',
                                ],
                                'example' => '{userName: "Chris"}',
                            ],
                            'ResourceId' => [
                                'title' => '资源Id,预付费时填写',
                                'description' => '资源ID。预付费时填写。',
                                'type' => 'string',
                                'example' => 'dsw-12345****',
                            ],
                            'ResourceName' => [
                                'description' => '实例规格。'."\n"
                                    .'- 预付费（subscription），是请求的CPU和内存大小。'."\n"
                                    .'- 后付费（pay-as-you-go），是选择的ECS规格。',
                                'type' => 'string',
                                'example' => 'ecs.g7.xlarge',
                            ],
                            'Priority' => [
                                'title' => '优先级，在分配资源给实例时，优先级越高的实例越优先',
                                'description' => '优先级，在分配资源给实例时，优先级越高的实例越优先。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestedResource' => [
                                'title' => '资源配置，弹内或者轻量化时使用',
                                'description' => '资源配置，弹内或者轻量化时使用。',
                                'type' => 'object',
                                'properties' => [
                                    'CPU' => [
                                        'title' => 'cpu核数',
                                        'description' => 'CPU核数。',
                                        'type' => 'string',
                                        'example' => '32',
                                    ],
                                    'Memory' => [
                                        'title' => 'memory大小',
                                        'description' => '内存大小，单位GB。',
                                        'type' => 'string',
                                        'example' => '32',
                                    ],
                                    'SharedMemory' => [
                                        'title' => 'shared memory大小',
                                        'description' => '共享内存大小，单位GB。',
                                        'type' => 'string',
                                        'example' => '32',
                                    ],
                                    'GPU' => [
                                        'title' => 'gpu数量',
                                        'description' => 'GPU数量。',
                                        'type' => 'string',
                                        'example' => '4',
                                    ],
                                    'GPUType' => [
                                        'title' => 'gpu显卡类型',
                                        'description' => 'GPU显卡类型。可能值：'."\n"
                                            .'- V100'."\n"
                                            .'- A100'."\n"
                                            .'- T4'."\n"
                                            .'- A10'."\n"
                                            .'- P100',
                                        'type' => 'string',
                                        'example' => 'v100',
                                    ],
                                ],
                                'example' => '{"CPU":"4","Memory":"8Gi","SharedMemory":"4Gi","GPU":"1","GPUType":"Tesla-V100-16G"}',
                            ],
                            'Labels' => [
                                'title' => '用户自定义标签',
                                'description' => '用户自定义标签。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '用户可以对实例进行自定义打标，标记实例的一些自定义属性。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'title' => '用户定义标签键',
                                            'description' => '用户定义标签键。',
                                            'type' => 'string',
                                            'example' => 'stsTokenOwner',
                                        ],
                                        'Value' => [
                                            'title' => '用户定义标签值',
                                            'description' => '用户定义标签值。',
                                            'type' => 'string',
                                            'example' => '123xxxxxxxx',
                                        ],
                                    ],
                                ],
                                'example' => '{\'foo\': \'bar\'}',
                            ],
                            'IdleInstanceCuller' => [
                                'title' => '实例的空闲资源回收器',
                                'description' => '闲置实例自动关机设置。',
                                'type' => 'object',
                                'properties' => [
                                    'InstanceId' => [
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'dsw-730xxxxxxxxxx',
                                    ],
                                    'CpuPercentThreshold' => [
                                        'description' => 'CPU使用率阈值，单位是百分比，取值1~100，低于此值则认为实例当前处于闲置。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '20',
                                    ],
                                    'GpuPercentThreshold' => [
                                        'description' => 'GPU使用率阈值，单位是百分比，取值1~100。如果实例为GPU类型，则此参数生效。CPU和GPU同时低于阈值则认为指定实例处于闲置。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'MaxIdleTimeInMinutes' => [
                                        'description' => '闲置等待时间阈值，单位是分钟。如果闲置时长超过此值，将自动停止DSW实例。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '60',
                                    ],
                                    'IdleTimeInMinutes' => [
                                        'description' => '实例当前闲置时长，单位是分钟。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '30',
                                    ],
                                ],
                                'example' => '{"InstanceId":"dsw-05cefd0be2e5a278","CpuPercentThreshold":20,"GpuPercentThreshold":10,"MaxIdleTimeInMinutes":120,"IdleTimeInMinutes":30}',
                            ],
                            'InstanceSnapshotList' => [
                                'title' => '实例的快照列表',
                                'description' => '实例快照列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例快照。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ImageId' => [
                                            'title' => '镜像Id',
                                            'description' => '镜像ID。',
                                            'type' => 'string',
                                            'example' => 'image-05cefd0be2exxxx',
                                        ],
                                        'ImageName' => [
                                            'title' => '镜像名称',
                                            'description' => '镜像名称。',
                                            'type' => 'string',
                                            'example' => 'py36_cpu_tf1.12_ubuntu',
                                        ],
                                        'ImageUrl' => [
                                            'title' => '镜像Url',
                                            'description' => '镜像Url。',
                                            'type' => 'string',
                                            'example' => 'registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu',
                                        ],
                                        'RepositoryUrl' => [
                                            'title' => '镜像仓库Url',
                                            'description' => '镜像仓库Url。',
                                            'type' => 'string',
                                            'example' => 'https://cr.console.aliyun.com/repository/cn-hangzhou/zouxu/kf/images',
                                        ],
                                        'GmtCreateTime' => [
                                            'title' => '快照创建时间',
                                            'description' => '快照创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-01-12T14:36:01Z',
                                        ],
                                        'GmtModifiedTime' => [
                                            'title' => '快照修改时间',
                                            'description' => '快照修改时间。',
                                            'type' => 'string',
                                            'example' => '2021-01-12T14:36:01Z',
                                        ],
                                        'ReasonCode' => [
                                            'title' => '实例快照错误代码',
                                            'description' => '实例快照错误代码。',
                                            'type' => 'string',
                                            'example' => 'Internal Error',
                                        ],
                                        'ReasonMessage' => [
                                            'title' => '实例快照错误消息',
                                            'description' => '实例快照错误消息。',
                                            'type' => 'string',
                                            'example' => 'ImagePullBackOff',
                                        ],
                                        'Status' => [
                                            'title' => '实例快照状态',
                                            'description' => '实例快照状态。',
                                            'type' => 'string',
                                            'example' => 'Pushing',
                                        ],
                                    ],
                                ],
                                'example' => '[]',
                            ],
                            'CloudDisks' => [
                                'title' => '实例的云盘列表',
                                'description' => '实例的云盘列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Capacity' => [
                                            'title' => '云盘容量',
                                            'description' => '云盘容量',
                                            'type' => 'string',
                                            'example' => '30Gi',
                                        ],
                                        'SubType' => [
                                            'title' => '云盘使用方式, rootfs 挂载为rootfs',
                                            'description' => '云盘使用方式, rootfs 挂载为rootfs',
                                            'type' => 'string',
                                            'example' => 'rootfs',
                                        ],
                                        'MountPath' => [
                                            'title' => '容器内挂载云盘路径',
                                            'description' => '容器内挂载云盘路径',
                                            'type' => 'string',
                                            'example' => '/mmt/workspace',
                                        ],
                                        'Path' => [
                                            'title' => '云盘内被挂载目录路径',
                                            'description' => '云盘内被挂载目录路径',
                                            'type' => 'string',
                                            'example' => '/workspace',
                                        ],
                                    ],
                                ],
                                'example' => '[]',
                            ],
                            'WorkspaceSource' => [
                                'title' => '工作空间指向的存储，如果不指定，则依次使用NAS，CloudDisk或者本地磁盘',
                                'description' => '工作空间指向的存储，如果不指定，则依次使用NAS，CloudDisk或者本地磁盘',
                                'type' => 'string',
                                'example' => 'd-123456789',
                            ],
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FC****',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '操作结果说明。'."\n"
                                    .'- 执行成功时，返回结果为null。'."\n"
                                    .'- 执行失败时，描述失败原因。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态码',
                                'description' => 'HTTP状态码，可能值：'."\n"
                                    .'- 400'."\n"
                                    .'- 404',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'null',
                            ],
                            'Driver' => [
                                'title' => 'NVIDIA 驱动配置',
                                'description' => 'NVIDIA 驱动配置',
                                'type' => 'string',
                                'example' => '535.54.03',
                            ],
                            'NodeErrorRecovery' => [
                                'description' => '节点错误恢复配置。',
                                'type' => 'object',
                                'properties' => [
                                    'hasNodeError' => [
                                        'description' => '是否有节点错误。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'enableAutoSwitchOnNodeError' => [
                                        'description' => '当出现节点错误时，是否开启自动切换。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'autoSwitchCountdownSeconds' => [
                                        'description' => '自动切换时等待秒数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '30',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"WorkspaceId\\": \\"40823\\",\\n  \\"WorkspaceName\\": \\"training_data\\",\\n  \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\",\\n  \\"InstanceName\\": \\"training_data\\",\\n  \\"EcsSpec\\": \\"ecs.c6.large\\",\\n  \\"Status\\": \\"Running\\",\\n  \\"InstanceUrl\\": \\"https://dsw-cn-shanghai.data.aliyun.com/notebook.htm?instance=3****#/\\",\\n  \\"JupyterlabUrl\\": \\"https://dsw-gateway-cn-shanghai.aliyun.com/dsw-3****/lab/\\",\\n  \\"WebIDEUrl\\": \\"https://dsw-gateway-cn-shanghai.aliyun.com/dsw-3****/ide/\\",\\n  \\"TerminalUrl\\": \\"https://dsw-gateway-cn-shanghai.aliyun.com/dsw-3****/tty/\\",\\n  \\"AccumulatedRunningTimeInMs\\": 3600000,\\n  \\"ImageId\\": \\"image-05cefd0be2exxxx\\",\\n  \\"ImageUrl\\": \\"registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu\\",\\n  \\"ImageName\\": \\"py36_cpu_tf1.12_ubuntu\\",\\n  \\"GmtCreateTime\\": \\"2021-01-12T14:36:01Z\\",\\n  \\"GmtModifiedTime\\": \\"2021-01-12T14:36:01Z\\",\\n  \\"UserId\\": \\"161228528250****\\",\\n  \\"UserName\\": \\"测试用户\\",\\n  \\"Datasets\\": [\\n    {\\n      \\"DatasetId\\": \\"d-vsqjvsjp4orp5l****\\",\\n      \\"MountPath\\": \\"/mnt/data\\",\\n      \\"Uri\\": \\"oss://bucket-name.oss-cn-shanghai-internal.aliyuncs.com/data/path/\\",\\n      \\"Options\\": \\"{\\\\n  \\\\\\"fs.oss.download.thread.concurrency\\\\\\": \\\\\\"10\\\\\\",\\\\n  \\\\\\"fs.oss.upload.thread.concurrency\\\\\\": \\\\\\"10\\\\\\",\\\\n  \\\\\\"fs.jindo.args\\\\\\": \\\\\\"-oattr_timeout=3 -oentry_timeout=0 -onegative_timeout=0 -oauto_cache -ono_symlink\\\\\\"\\\\n}\\",\\n      \\"OptionType\\": \\"FastReadWrite\\"\\n    }\\n  ],\\n  \\"UserVpc\\": {\\n    \\"VpcId\\": \\"vpc-xxxxx\\",\\n    \\"VSwitchId\\": \\"vsw-xxxxx\\",\\n    \\"SecurityGroupId\\": \\"sg-xxxxxx\\",\\n    \\"ExtendedCIDRs\\": [\\n      \\"\\\\\\"172.16.19.0/24\\\\\\",\\\\\\"172.16.2.0/24\\\\\\",\\\\\\"172.16.12.0/24\\\\\\"\\"\\n    ],\\n    \\"DefaultRoute\\": \\"eth0 | eth1\\",\\n    \\"ForwardInfos\\": [\\n      {\\n        \\"Enable\\": true,\\n        \\"ContainerName\\": \\"dsw-notebook\\",\\n        \\"Port\\": \\"22\\",\\n        \\"NatGatewayId\\": \\"ngw-bp1uewa15k4iy5770****\\",\\n        \\"EipAllocationId\\": \\"eip-25877c70gddh****\\",\\n        \\"SSHPublicKey\\": \\"\\",\\n        \\"ConnectInfo\\": {\\n          \\"Phase\\": \\"Ready\\",\\n          \\"Message\\": \\"DNAT and privateZone are both ready.\\",\\n          \\"Intranet\\": {\\n            \\"Endpoint\\": \\"dsw-notebook-22-urz3u6cnu0uts7ej9r.dsw-5cc6083084818f60.dsw.pai.alibaba.com\\",\\n            \\"Port\\": \\"22\\"\\n          },\\n          \\"Internet\\": {\\n            \\"Endpoint\\": \\"47.111.119.114\\",\\n            \\"Port\\": \\"22\\"\\n          }\\n        }\\n      }\\n    ]\\n  },\\n  \\"InstanceShutdownTimer\\": {\\n    \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\",\\n    \\"GmtCreateTime\\": \\"2021-01-12T14:36:01Z\\",\\n    \\"GmtModifiedTime\\": \\"2021-01-12T14:36:01Z\\",\\n    \\"DueTime\\": \\"2021-01-12T14:36:01Z\\",\\n    \\"RemainingTimeInMs\\": 3600000\\n  },\\n  \\"ReasonCode\\": \\"Internal Error\\",\\n  \\"ReasonMessage\\": \\"ImagePullBackOff\\",\\n  \\"PaymentType\\": \\"PayAsYouGo\\",\\n  \\"LatestSnapshot\\": {\\n    \\"ImageId\\": \\"image-05cefd0be2exxxx\\",\\n    \\"ImageName\\": \\"py36_cpu_tf1.12_ubuntu\\",\\n    \\"ImageUrl\\": \\"registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu\\",\\n    \\"RepositoryUrl\\": \\"https://cr.console.aliyun.com/repository/cn-hangzhou/zouxu/kf/images\\",\\n    \\"GmtCreateTime\\": \\"2021-01-12T14:36:01Z\\",\\n    \\"GmtModifiedTime\\": \\"2021-01-12T14:36:01Z\\",\\n    \\"ReasonCode\\": \\"Internal Error\\",\\n    \\"ReasonMessage\\": \\"ImagePullBackOff\\",\\n    \\"Status\\": \\"Pushing\\"\\n  },\\n  \\"AcceleratorType\\": \\"CPU\\",\\n  \\"Accessibility\\": \\"PRIVATE\\",\\n  \\"EnvironmentVariables\\": {\\n    \\"key\\": \\"app: MAAS\\"\\n  },\\n  \\"ResourceId\\": \\"dsw-12345****\\",\\n  \\"ResourceName\\": \\"ecs.g7.xlarge\\",\\n  \\"Priority\\": 1,\\n  \\"RequestedResource\\": {\\n    \\"CPU\\": \\"32\\",\\n    \\"Memory\\": \\"32\\",\\n    \\"SharedMemory\\": \\"32\\",\\n    \\"GPU\\": \\"4\\",\\n    \\"GPUType\\": \\"v100\\"\\n  },\\n  \\"Labels\\": [\\n    {\\n      \\"Key\\": \\"stsTokenOwner\\",\\n      \\"Value\\": \\"123xxxxxxxx\\"\\n    }\\n  ],\\n  \\"IdleInstanceCuller\\": {\\n    \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\",\\n    \\"CpuPercentThreshold\\": 20,\\n    \\"GpuPercentThreshold\\": 10,\\n    \\"MaxIdleTimeInMinutes\\": 60,\\n    \\"IdleTimeInMinutes\\": 30\\n  },\\n  \\"InstanceSnapshotList\\": [\\n    {\\n      \\"ImageId\\": \\"image-05cefd0be2exxxx\\",\\n      \\"ImageName\\": \\"py36_cpu_tf1.12_ubuntu\\",\\n      \\"ImageUrl\\": \\"registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu\\",\\n      \\"RepositoryUrl\\": \\"https://cr.console.aliyun.com/repository/cn-hangzhou/zouxu/kf/images\\",\\n      \\"GmtCreateTime\\": \\"2021-01-12T14:36:01Z\\",\\n      \\"GmtModifiedTime\\": \\"2021-01-12T14:36:01Z\\",\\n      \\"ReasonCode\\": \\"Internal Error\\",\\n      \\"ReasonMessage\\": \\"ImagePullBackOff\\",\\n      \\"Status\\": \\"Pushing\\"\\n    }\\n  ],\\n  \\"CloudDisks\\": [\\n    {\\n      \\"Capacity\\": \\"30Gi\\",\\n      \\"SubType\\": \\"rootfs\\",\\n      \\"MountPath\\": \\"/mmt/workspace\\",\\n      \\"Path\\": \\"/workspace\\"\\n    }\\n  ],\\n  \\"WorkspaceSource\\": \\"d-123456789\\",\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FC****\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"null\\",\\n  \\"Code\\": \\"null\\",\\n  \\"HttpStatusCode\\": 0,\\n  \\"Driver\\": \\"535.54.03\\",\\n  \\"NodeErrorRecovery\\": {\\n    \\"hasNodeError\\": false,\\n    \\"enableAutoSwitchOnNodeError\\": true,\\n    \\"autoSwitchCountdownSeconds\\": 30\\n  }\\n}","type":"json"}]',
            'title' => '查询实例详情',
        ],
        'ListInstances' => [
            'path' => '/api/v2/instances',
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
                'operationType' => 'get',
                'abilityTreeCode' => '118637',
                'abilityTreeNodes' => [
                    'FEATURElearnQHG7ZB',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间Id',
                        'description' => '按工作空间ID过滤。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '40823',
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例名称',
                        'description' => '按实例名称过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'training_data',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源组Id',
                        'description' => '按资源组ID过滤，假如为空，只过滤后付费资源组的实例，填ALL会过滤出所有的实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-123456789',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例状态',
                        'description' => '根据实例状态过滤，取值如下：'."\n"
                            .'- Creating：创建中。'."\n"
                            .'- Running：运行中。'."\n"
                            .'- Stopped：已停止。'."\n"
                            .'- Failed：已失败。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Running',
                    ],
                ],
                [
                    'name' => 'PaymentType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '付费类型，取值如下：'."\n"
                            .'- PayAsYouGo：后付费（后付费/按量付费）。'."\n"
                            .'- Subscription：预付费（预付费/包年包月）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PayAsYouGo',
                    ],
                ],
                [
                    'name' => 'Accessibility',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间可见度。取值如下：'."\n"
                            .'- PRIVATE（默认值）：表示工作空间内自己以及管理员可见。'."\n"
                            .'- PUBLIC：为工作空间所有用户可见。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PRIVATE',
                    ],
                ],
                [
                    'name' => 'AcceleratorType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加速器类型。'."\n"
                            .'CPU：无计算加速，只使用CPU计算。'."\n"
                            .'GPU：使用GPU进行计算加速。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CPU',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码',
                        'description' => '实例列表的页码。起始值为1，默认为1。',
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
                        'title' => '分页数量大小',
                        'description' => '分页查询时设置的每页显示的实例数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序字段',
                        'description' => '按字段gmtCreate排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'gmtCreate',
                        'default' => 'GmtModifiedTime',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排列顺序',
                        'description' => '排列顺序。取值如下：'."\n"
                            .'- DESC：降序。'."\n"
                            .'- ASC：升序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DESC',
                        'default' => 'DESC',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按实例ID过滤。如何获取实例ID，请参见[ListInstances](~~470439~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dsw-730xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'Labels',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用于过滤的实例标签，最多支持4组标签。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{'."\n"
                            .'  "key1": "value1",'."\n"
                            .'  "key2": "value2",'."\n"
                            .'  "key3": "value3"'."\n"
                            .'}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '实例列表',
                        'description' => '实例列表。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '返回结果说明。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态码',
                                'description' => 'HTTP状态码，可能值：'."\n"
                                    .'- 400'."\n"
                                    .'- 404',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'null',
                            ],
                            'TotalCount' => [
                                'title' => '实例总数',
                                'description' => '实例总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '35',
                            ],
                            'Instances' => [
                                'title' => '本分页中请求的实例列表',
                                'description' => '本分页中请求的实例列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'WorkspaceId' => [
                                            'title' => '工作空间Id',
                                            'description' => '工作空间ID。',
                                            'type' => 'string',
                                            'example' => '40823',
                                        ],
                                        'WorkspaceName' => [
                                            'title' => '工作空间名称',
                                            'description' => '工作空间名称。',
                                            'type' => 'string',
                                            'example' => 'training_data',
                                        ],
                                        'InstanceId' => [
                                            'title' => '实例Id',
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'dsw-730xxxxxxxxxx',
                                        ],
                                        'InstanceName' => [
                                            'title' => '实例名称',
                                            'description' => '实例名称。',
                                            'type' => 'string',
                                            'example' => 'training_data',
                                        ],
                                        'EcsSpec' => [
                                            'title' => '实例对应的Ecs规格',
                                            'description' => '实例对应的ECS规格。',
                                            'type' => 'string',
                                            'example' => 'ecs.c6.large',
                                        ],
                                        'Status' => [
                                            'title' => '实例状态',
                                            'description' => '实例状态。',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'InstanceUrl' => [
                                            'title' => '实例Url',
                                            'description' => '实例Url。',
                                            'type' => 'string',
                                            'example' => 'https://dsw-cn-shanghai.data.aliyun.com/notebook.htm?instance=39772#/',
                                        ],
                                        'JupyterlabUrl' => [
                                            'title' => 'Jupyterlab Url',
                                            'description' => 'Jupyterlab Url。',
                                            'type' => 'string',
                                            'example' => 'https://dsw-gateway-cn-shanghai.aliyun.com/dsw-39772/lab/',
                                        ],
                                        'WebIDEUrl' => [
                                            'title' => 'Web IDE url',
                                            'description' => 'Web IDE url。',
                                            'type' => 'string',
                                            'example' => 'https://dsw-gateway-cn-shanghai.aliyun.com/dsw-39772/ide/',
                                        ],
                                        'TerminalUrl' => [
                                            'title' => '终端url',
                                            'description' => '终端url。',
                                            'type' => 'string',
                                            'example' => 'https://dsw-gateway-cn-shanghai.aliyun.com/dsw-39772/tty/',
                                        ],
                                        'AccumulatedRunningTimeInMs' => [
                                            'title' => '累计运行时间（ms）',
                                            'description' => '累计运行时间，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3600000',
                                        ],
                                        'ImageId' => [
                                            'title' => '镜像Id',
                                            'description' => '镜像ID。',
                                            'type' => 'string',
                                            'example' => 'image-05cefd0be2exxxx',
                                        ],
                                        'ImageUrl' => [
                                            'title' => '镜像地址',
                                            'description' => '镜像地址。',
                                            'type' => 'string',
                                            'example' => 'registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu',
                                        ],
                                        'ImageName' => [
                                            'title' => '镜像名称',
                                            'description' => '镜像名称。',
                                            'type' => 'string',
                                            'example' => 'py36_cpu_tf1.12_ubuntu',
                                        ],
                                        'GmtCreateTime' => [
                                            'title' => '实例创建时间',
                                            'description' => '实例创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-01-12T14:36:01Z',
                                        ],
                                        'GmtModifiedTime' => [
                                            'title' => '实例修改时间',
                                            'description' => '实例修改时间。',
                                            'type' => 'string',
                                            'example' => '2021-01-12T14:36:01Z',
                                        ],
                                        'UserId' => [
                                            'title' => '用户Id',
                                            'description' => '用户ID。',
                                            'type' => 'string',
                                            'example' => '1612285282502324',
                                        ],
                                        'UserName' => [
                                            'title' => '用户名称',
                                            'description' => '用户名称。',
                                            'type' => 'string',
                                            'example' => '测试用户',
                                        ],
                                        'Datasets' => [
                                            'title' => '数据集集合',
                                            'description' => '数据集集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '数据集对象',
                                                'type' => 'object',
                                                'properties' => [
                                                    'DatasetId' => [
                                                        'title' => '数据集Id',
                                                        'description' => '数据集ID。',
                                                        'type' => 'string',
                                                        'example' => 'd-vsqjvsjp4orp5l206u',
                                                    ],
                                                    'MountPath' => [
                                                        'title' => '容器内挂载路径',
                                                        'description' => '容器内挂载路径。',
                                                        'type' => 'string',
                                                        'example' => '/mnt/data',
                                                    ],
                                                    'Uri' => [
                                                        'title' => '数据Uri',
                                                        'description' => '指定的数据集的Uri。',
                                                        'type' => 'string',
                                                        'example' => 'oss://bucket-name.oss-cn-shanghai-internal.aliyuncs.com/data/path/',
                                                    ],
                                                    'Options' => [
                                                        'title' => '数据挂载的配置项',
                                                        'description' => '数据集的挂载属性。',
                                                        'type' => 'string',
                                                        'example' => '{'."\n"
                                                            .'  "fs.oss.download.thread.concurrency": "10",'."\n"
                                                            .'  "fs.oss.upload.thread.concurrency": "10",'."\n"
                                                            .'  "fs.jindo.args": "-oattr_timeout=3 -oentry_timeout=0 -onegative_timeout=0 -oauto_cache -ono_symlink"'."\n"
                                                            .'}',
                                                    ],
                                                    'OptionType' => [
                                                        'title' => '挂载配置项类型，目前只支持OSS数据集',
                                                        'description' => '挂载配置项类型',
                                                        'type' => 'string',
                                                        'example' => 'FastReadWrite',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'UserVpc' => [
                                            'title' => 'user vpc配置',
                                            'description' => 'User VPC配置。',
                                            'type' => 'object',
                                            'properties' => [
                                                'VpcId' => [
                                                    'title' => 'Vpc Id',
                                                    'description' => 'VPC ID。',
                                                    'type' => 'string',
                                                    'example' => 'vpc-xxxxx',
                                                ],
                                                'VSwitchId' => [
                                                    'title' => 'VSwitch Id',
                                                    'description' => '交换机ID。',
                                                    'type' => 'string',
                                                    'example' => 'vsw-xxxxx',
                                                ],
                                                'SecurityGroupId' => [
                                                    'title' => 'Security Group Id',
                                                    'description' => '安全组ID。',
                                                    'type' => 'string',
                                                    'example' => 'sg-xxxxxx',
                                                ],
                                                'ExtendedCIDRs' => [
                                                    'description' => '扩展网络打通网段列表',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '扩展网络打通网段',
                                                        'type' => 'string',
                                                        'example' => '192.168.0.1/24',
                                                    ],
                                                    'example' => '["192.168.0.1/24", "192.168.1.1/24"]',
                                                ],
                                                'DefaultRoute' => [
                                                    'title' => 'Default Route',
                                                    'description' => 'Default Route',
                                                    'type' => 'string',
                                                    'example' => 'eth0 | eth1',
                                                ],
                                                'ForwardInfos' => [
                                                    'description' => '端口透出信息。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '端口透出信息列表。',
                                                        '$ref' => '#/components/schemas/ForwardInfoResponse',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'InstanceShutdownTimer' => [
                                            'title' => '定时关机任务',
                                            'description' => '定时关机任务。',
                                            'type' => 'object',
                                            'properties' => [
                                                'InstanceId' => [
                                                    'title' => '实例Id',
                                                    'description' => '实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'dsw-730xxxxxxxxxx',
                                                ],
                                                'GmtCreateTime' => [
                                                    'title' => '创建时间',
                                                    'description' => '创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2021-01-12T14:36:01Z',
                                                ],
                                                'GmtModifiedTime' => [
                                                    'title' => '修改时间',
                                                    'description' => '修改时间。',
                                                    'type' => 'string',
                                                    'example' => '2021-01-12T14:36:01Z',
                                                ],
                                                'DueTime' => [
                                                    'title' => '设定关机时间',
                                                    'description' => '设定关机时间。',
                                                    'type' => 'string',
                                                    'example' => '2021-01-12T14:36:01Z',
                                                ],
                                                'RemainingTimeInMs' => [
                                                    'title' => '剩余关机时间（ms）',
                                                    'description' => '剩余关机时间，单位为毫秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '3600000',
                                                ],
                                            ],
                                        ],
                                        'ReasonCode' => [
                                            'title' => '实例错误代码',
                                            'description' => '实例错误代码。',
                                            'type' => 'string',
                                            'example' => 'Internal Error',
                                        ],
                                        'ReasonMessage' => [
                                            'title' => '实例错误原因',
                                            'description' => '实例错误原因。',
                                            'type' => 'string',
                                            'example' => 'ImagePullBackOff',
                                        ],
                                        'PaymentType' => [
                                            'title' => '支付类型',
                                            'description' => '支付类型，可能值：'."\n"
                                                .'- PayAsYouGo：后付费（后付费/按量付费）。'."\n"
                                                .'- Subscription：预付费（预付费/包年包月）。',
                                            'type' => 'string',
                                            'example' => 'PayAsYouGo',
                                        ],
                                        'LatestSnapshot' => [
                                            'title' => '最新保存的用户镜像',
                                            'description' => '最新保存的用户镜像。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ImageId' => [
                                                    'title' => '镜像Id',
                                                    'description' => '镜像ID。',
                                                    'type' => 'string',
                                                    'example' => 'image-05cefd0be2exxxx',
                                                ],
                                                'ImageName' => [
                                                    'title' => '镜像名称',
                                                    'description' => '镜像名称。',
                                                    'type' => 'string',
                                                    'example' => 'py36_cpu_tf1.12_ubuntu',
                                                ],
                                                'ImageUrl' => [
                                                    'title' => '镜像Url',
                                                    'description' => '镜像Url。',
                                                    'type' => 'string',
                                                    'example' => 'registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu',
                                                ],
                                                'RepositoryUrl' => [
                                                    'title' => '镜像仓库Url',
                                                    'description' => '镜像仓库Url。',
                                                    'type' => 'string',
                                                    'example' => 'https://cr.console.aliyun.com/repository/cn-hangzhou/zouxu/kf/images',
                                                ],
                                                'GmtCreateTime' => [
                                                    'title' => '快照创建时间',
                                                    'description' => '快照创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2021-01-12T14:36:01Z',
                                                ],
                                                'GmtModifiedTime' => [
                                                    'title' => '快照修改时间',
                                                    'description' => '快照修改时间。',
                                                    'type' => 'string',
                                                    'example' => '2021-01-12T14:36:01Z',
                                                ],
                                                'ReasonCode' => [
                                                    'title' => '实例快照错误代码',
                                                    'description' => '实例快照错误代码。',
                                                    'type' => 'string',
                                                    'example' => 'Internal Error',
                                                ],
                                                'ReasonMessage' => [
                                                    'title' => '实例快照错误消息',
                                                    'description' => '实例快照错误消息。',
                                                    'type' => 'string',
                                                    'example' => 'ImagePullBackOff',
                                                ],
                                                'Status' => [
                                                    'title' => '实例快照状态',
                                                    'description' => '实例快照状态。',
                                                    'type' => 'string',
                                                    'example' => 'Pushing',
                                                ],
                                            ],
                                        ],
                                        'AcceleratorType' => [
                                            'title' => '实例计算类型',
                                            'description' => '实例计算类型。可能值：'."\n"
                                                .'- CPU'."\n"
                                                .'- GPU',
                                            'type' => 'string',
                                            'example' => 'CPU',
                                        ],
                                        'Accessibility' => [
                                            'title' => '工作空间内是否他人可见',
                                            'description' => '工作空间内是否他人可见。可能值：'."\n"
                                                .'- PRIVATE（默认值）：表示工作空间内自己以及管理员可见。'."\n"
                                                .'- PUBLIC：为工作空间所有用户可见。',
                                            'type' => 'string',
                                            'example' => 'PRIVATE',
                                        ],
                                        'EnvironmentVariables' => [
                                            'title' => '环境变量',
                                            'description' => '环境变量。',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'example' => 'MAAS',
                                                'description' => '用户指定环境变量。DSW实例启动后，指定环境变量会被注入到容器中。',
                                            ],
                                            'example' => '{userName: "Chris"}',
                                        ],
                                        'ResourceId' => [
                                            'title' => '资源Id,预付费时填写',
                                            'description' => '资源ID，预付费时填写。',
                                            'type' => 'string',
                                            'example' => 'dsw-123456789',
                                        ],
                                        'ResourceName' => [
                                            'description' => '资源规格。'."\n"
                                                .'- 后付费场景，资源规格为购买的ECS规格。'."\n"
                                                .'- 预付费场景，资源规格为请求的CPU核数与内存大小。',
                                            'type' => 'string',
                                            'example' => 'resource_group',
                                        ],
                                        'Priority' => [
                                            'title' => '优先级，在分配资源给实例时，优先级越高的实例越优先',
                                            'description' => '优先级，在分配资源给实例时，优先级越高的实例越优先。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'RequestedResource' => [
                                            'title' => '资源配置，弹内或者轻量化时使用',
                                            'description' => '资源配置，弹内或者轻量化时使用。',
                                            'type' => 'object',
                                            'properties' => [
                                                'CPU' => [
                                                    'title' => 'cpu核数',
                                                    'description' => 'CPU核数。',
                                                    'type' => 'string',
                                                    'example' => '32',
                                                ],
                                                'Memory' => [
                                                    'title' => 'memory大小',
                                                    'description' => '内存大小。',
                                                    'type' => 'string',
                                                    'example' => '32',
                                                ],
                                                'SharedMemory' => [
                                                    'title' => 'shared memory大小',
                                                    'description' => '共享内存大小。',
                                                    'type' => 'string',
                                                    'example' => '32',
                                                ],
                                                'GPU' => [
                                                    'title' => 'gpu数量',
                                                    'description' => 'GPU数量。',
                                                    'type' => 'string',
                                                    'example' => '4',
                                                ],
                                                'GPUType' => [
                                                    'title' => 'gpu显卡类型',
                                                    'description' => 'GPU显卡类型。',
                                                    'type' => 'string',
                                                    'example' => 'v100',
                                                ],
                                            ],
                                            'example' => '{"CPU":"4","Memory":"8Gi","SharedMemory":"4Gi","GPU":"1","GPUType":"Tesla-V100-16G"}',
                                        ],
                                        'Labels' => [
                                            'title' => '用户自定义标签',
                                            'description' => '用户自定义标签。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '用户定义标签。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'title' => '用户定义标签键',
                                                        'description' => '用户定义标签键值。',
                                                        'type' => 'string',
                                                        'example' => 'stsTokenOwner',
                                                    ],
                                                    'Value' => [
                                                        'title' => '用户定义标签值',
                                                        'description' => '用户定义标签值。',
                                                        'type' => 'string',
                                                        'example' => '123xxxxxxxx',
                                                    ],
                                                ],
                                            ],
                                            'example' => '{\'foo\': \'bar\'}',
                                        ],
                                        'IdleInstanceCuller' => [
                                            'title' => '实例的空闲资源回收器',
                                            'description' => '实例闲置关机规则。',
                                            'type' => 'object',
                                            'properties' => [
                                                'InstanceId' => [
                                                    'description' => '实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'dsw-730xxxxxxxxxx',
                                                ],
                                                'CpuPercentThreshold' => [
                                                    'description' => 'CPU使用率阈值，单位是百分比，取值1~100，低于此值则认为实例当前处于闲置。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '20',
                                                ],
                                                'GpuPercentThreshold' => [
                                                    'description' => 'GPU使用率阈值，单位是百分比，取值1~100。如果实例为GPU类型，则此参数生效。CPU和GPU同时低于阈值则认为指定实例处于闲置。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '10',
                                                ],
                                                'MaxIdleTimeInMinutes' => [
                                                    'description' => '闲置等待时间阈值，单位是分钟。如果闲置时长超过此值，将自动停止DSW实例。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '60',
                                                ],
                                                'IdleTimeInMinutes' => [
                                                    'description' => '实例当前闲置时长，单位是分钟。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '30',
                                                ],
                                            ],
                                            'example' => '{"InstanceId":"dsw-05cefd0be2e5a278","CpuPercentThreshold":20,"GpuPercentThreshold":10,"MaxIdleTimeInMinutes":120,"IdleTimeInMinutes":30}',
                                        ],
                                        'InstanceSnapshotList' => [
                                            'title' => '实例的快照列表',
                                            'description' => '实例快照列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '实例快照。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'ImageId' => [
                                                        'title' => '镜像Id',
                                                        'description' => '镜像ID。',
                                                        'type' => 'string',
                                                        'example' => 'image-05cefd0be2exxxx',
                                                    ],
                                                    'ImageName' => [
                                                        'title' => '镜像名称',
                                                        'description' => '镜像名称。',
                                                        'type' => 'string',
                                                        'example' => 'py36_cpu_tf1.12_ubuntu',
                                                    ],
                                                    'ImageUrl' => [
                                                        'title' => '镜像Url',
                                                        'description' => '镜像Url。',
                                                        'type' => 'string',
                                                        'example' => 'registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu',
                                                    ],
                                                    'RepositoryUrl' => [
                                                        'title' => '镜像仓库Url',
                                                        'description' => '镜像仓库Url。',
                                                        'type' => 'string',
                                                        'example' => 'https://cr.console.aliyun.com/repository/cn-hangzhou/zouxu/kf/images',
                                                    ],
                                                    'GmtCreateTime' => [
                                                        'title' => '快照创建时间',
                                                        'description' => '快照创建时间。',
                                                        'type' => 'string',
                                                        'example' => '2021-01-12T14:36:01Z',
                                                    ],
                                                    'GmtModifiedTime' => [
                                                        'title' => '快照修改时间',
                                                        'description' => '快照修改时间。',
                                                        'type' => 'string',
                                                        'example' => '2021-01-12T14:36:01Z',
                                                    ],
                                                    'ReasonCode' => [
                                                        'title' => '实例快照错误代码',
                                                        'description' => '实例快照错误代码。',
                                                        'type' => 'string',
                                                        'example' => 'Internal Error',
                                                    ],
                                                    'ReasonMessage' => [
                                                        'title' => '实例快照错误消息',
                                                        'description' => '实例快照错误消息。',
                                                        'type' => 'string',
                                                        'example' => 'ImagePullBackOff',
                                                    ],
                                                    'Status' => [
                                                        'title' => '实例快照状态',
                                                        'description' => '实例快照状态。',
                                                        'type' => 'string',
                                                        'example' => 'Pushing',
                                                    ],
                                                ],
                                            ],
                                            'example' => '[]',
                                        ],
                                        'CloudDisks' => [
                                            'title' => '实例的云盘列表',
                                            'description' => '实例的云盘列表',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Capacity' => [
                                                        'title' => '云盘容量',
                                                        'description' => '云盘容量',
                                                        'type' => 'string',
                                                        'example' => '30Gi',
                                                    ],
                                                    'SubType' => [
                                                        'title' => '云盘使用方式, rootfs 挂载为rootfs',
                                                        'description' => '云盘使用方式, rootfs 挂载为rootfs',
                                                        'type' => 'string',
                                                        'example' => 'rootfs',
                                                    ],
                                                    'MountPath' => [
                                                        'title' => '容器内挂载云盘路径',
                                                        'description' => '容器内挂载云盘路径',
                                                        'type' => 'string',
                                                        'example' => '/mmt/workspace',
                                                    ],
                                                    'Path' => [
                                                        'title' => '云盘内被挂载目录路径',
                                                        'description' => '云盘内被挂载目录路径',
                                                        'type' => 'string',
                                                        'example' => '/workspace',
                                                    ],
                                                ],
                                            ],
                                            'example' => '[]',
                                        ],
                                        'WorkspaceSource' => [
                                            'title' => '工作空间指向的存储，如果不指定，则依次使用NAS，CloudDisk或者本地磁盘',
                                            'description' => '工作空间指向的存储，如果不指定，则依次使用NAS，CloudDisk或者本地磁盘',
                                            'type' => 'string',
                                            'example' => 'd-123456789',
                                        ],
                                        'Driver' => [
                                            'title' => 'NVIDIA 驱动配置',
                                            'description' => 'NVIDIA 驱动配置',
                                            'type' => 'string',
                                            'example' => '535.54.03',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"null\\",\\n  \\"HttpStatusCode\\": 0,\\n  \\"TotalCount\\": 35,\\n  \\"Instances\\": [\\n    {\\n      \\"WorkspaceId\\": \\"40823\\",\\n      \\"WorkspaceName\\": \\"training_data\\",\\n      \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\",\\n      \\"InstanceName\\": \\"training_data\\",\\n      \\"EcsSpec\\": \\"ecs.c6.large\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"InstanceUrl\\": \\"https://dsw-cn-shanghai.data.aliyun.com/notebook.htm?instance=39772#/\\",\\n      \\"JupyterlabUrl\\": \\"https://dsw-gateway-cn-shanghai.aliyun.com/dsw-39772/lab/\\",\\n      \\"WebIDEUrl\\": \\"https://dsw-gateway-cn-shanghai.aliyun.com/dsw-39772/ide/\\",\\n      \\"TerminalUrl\\": \\"https://dsw-gateway-cn-shanghai.aliyun.com/dsw-39772/tty/\\",\\n      \\"AccumulatedRunningTimeInMs\\": 3600000,\\n      \\"ImageId\\": \\"image-05cefd0be2exxxx\\",\\n      \\"ImageUrl\\": \\"registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu\\",\\n      \\"ImageName\\": \\"py36_cpu_tf1.12_ubuntu\\",\\n      \\"GmtCreateTime\\": \\"2021-01-12T14:36:01Z\\",\\n      \\"GmtModifiedTime\\": \\"2021-01-12T14:36:01Z\\",\\n      \\"UserId\\": \\"1612285282502324\\",\\n      \\"UserName\\": \\"测试用户\\",\\n      \\"Datasets\\": [\\n        {\\n          \\"DatasetId\\": \\"d-vsqjvsjp4orp5l206u\\",\\n          \\"MountPath\\": \\"/mnt/data\\",\\n          \\"Uri\\": \\"oss://bucket-name.oss-cn-shanghai-internal.aliyuncs.com/data/path/\\",\\n          \\"Options\\": \\"{\\\\n  \\\\\\"fs.oss.download.thread.concurrency\\\\\\": \\\\\\"10\\\\\\",\\\\n  \\\\\\"fs.oss.upload.thread.concurrency\\\\\\": \\\\\\"10\\\\\\",\\\\n  \\\\\\"fs.jindo.args\\\\\\": \\\\\\"-oattr_timeout=3 -oentry_timeout=0 -onegative_timeout=0 -oauto_cache -ono_symlink\\\\\\"\\\\n}\\",\\n          \\"OptionType\\": \\"FastReadWrite\\"\\n        }\\n      ],\\n      \\"UserVpc\\": {\\n        \\"VpcId\\": \\"vpc-xxxxx\\",\\n        \\"VSwitchId\\": \\"vsw-xxxxx\\",\\n        \\"SecurityGroupId\\": \\"sg-xxxxxx\\",\\n        \\"ExtendedCIDRs\\": [\\n          \\"192.168.0.1/24\\"\\n        ],\\n        \\"DefaultRoute\\": \\"eth0 | eth1\\",\\n        \\"ForwardInfos\\": [\\n          {\\n            \\"Enable\\": true,\\n            \\"ContainerName\\": \\"dsw-notebook\\",\\n            \\"Port\\": \\"22\\",\\n            \\"NatGatewayId\\": \\"ngw-bp1uewa15k4iy5770****\\",\\n            \\"EipAllocationId\\": \\"eip-25877c70gddh****\\",\\n            \\"SSHPublicKey\\": \\"\\",\\n            \\"ConnectInfo\\": {\\n              \\"Phase\\": \\"Ready\\",\\n              \\"Message\\": \\"DNAT and privateZone are both ready.\\",\\n              \\"Intranet\\": {\\n                \\"Endpoint\\": \\"dsw-notebook-22-urz3u6cnu0uts7ej9r.dsw-5cc6083084818f60.dsw.pai.alibaba.com\\",\\n                \\"Port\\": \\"22\\"\\n              },\\n              \\"Internet\\": {\\n                \\"Endpoint\\": \\"47.111.119.114\\",\\n                \\"Port\\": \\"22\\"\\n              }\\n            }\\n          }\\n        ]\\n      },\\n      \\"InstanceShutdownTimer\\": {\\n        \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\",\\n        \\"GmtCreateTime\\": \\"2021-01-12T14:36:01Z\\",\\n        \\"GmtModifiedTime\\": \\"2021-01-12T14:36:01Z\\",\\n        \\"DueTime\\": \\"2021-01-12T14:36:01Z\\",\\n        \\"RemainingTimeInMs\\": 3600000\\n      },\\n      \\"ReasonCode\\": \\"Internal Error\\",\\n      \\"ReasonMessage\\": \\"ImagePullBackOff\\",\\n      \\"PaymentType\\": \\"PayAsYouGo\\",\\n      \\"LatestSnapshot\\": {\\n        \\"ImageId\\": \\"image-05cefd0be2exxxx\\",\\n        \\"ImageName\\": \\"py36_cpu_tf1.12_ubuntu\\",\\n        \\"ImageUrl\\": \\"registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu\\",\\n        \\"RepositoryUrl\\": \\"https://cr.console.aliyun.com/repository/cn-hangzhou/zouxu/kf/images\\",\\n        \\"GmtCreateTime\\": \\"2021-01-12T14:36:01Z\\",\\n        \\"GmtModifiedTime\\": \\"2021-01-12T14:36:01Z\\",\\n        \\"ReasonCode\\": \\"Internal Error\\",\\n        \\"ReasonMessage\\": \\"ImagePullBackOff\\",\\n        \\"Status\\": \\"Pushing\\"\\n      },\\n      \\"AcceleratorType\\": \\"CPU\\",\\n      \\"Accessibility\\": \\"PRIVATE\\",\\n      \\"EnvironmentVariables\\": {\\n        \\"key\\": \\"MAAS\\"\\n      },\\n      \\"ResourceId\\": \\"dsw-123456789\\",\\n      \\"ResourceName\\": \\"resource_group\\",\\n      \\"Priority\\": 1,\\n      \\"RequestedResource\\": {\\n        \\"CPU\\": \\"32\\",\\n        \\"Memory\\": \\"32\\",\\n        \\"SharedMemory\\": \\"32\\",\\n        \\"GPU\\": \\"4\\",\\n        \\"GPUType\\": \\"v100\\"\\n      },\\n      \\"Labels\\": [\\n        {\\n          \\"Key\\": \\"stsTokenOwner\\",\\n          \\"Value\\": \\"123xxxxxxxx\\"\\n        }\\n      ],\\n      \\"IdleInstanceCuller\\": {\\n        \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\",\\n        \\"CpuPercentThreshold\\": 20,\\n        \\"GpuPercentThreshold\\": 10,\\n        \\"MaxIdleTimeInMinutes\\": 60,\\n        \\"IdleTimeInMinutes\\": 30\\n      },\\n      \\"InstanceSnapshotList\\": [\\n        {\\n          \\"ImageId\\": \\"image-05cefd0be2exxxx\\",\\n          \\"ImageName\\": \\"py36_cpu_tf1.12_ubuntu\\",\\n          \\"ImageUrl\\": \\"registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu\\",\\n          \\"RepositoryUrl\\": \\"https://cr.console.aliyun.com/repository/cn-hangzhou/zouxu/kf/images\\",\\n          \\"GmtCreateTime\\": \\"2021-01-12T14:36:01Z\\",\\n          \\"GmtModifiedTime\\": \\"2021-01-12T14:36:01Z\\",\\n          \\"ReasonCode\\": \\"Internal Error\\",\\n          \\"ReasonMessage\\": \\"ImagePullBackOff\\",\\n          \\"Status\\": \\"Pushing\\"\\n        }\\n      ],\\n      \\"CloudDisks\\": [\\n        {\\n          \\"Capacity\\": \\"30Gi\\",\\n          \\"SubType\\": \\"rootfs\\",\\n          \\"MountPath\\": \\"/mmt/workspace\\",\\n          \\"Path\\": \\"/workspace\\"\\n        }\\n      ],\\n      \\"WorkspaceSource\\": \\"d-123456789\\",\\n      \\"Driver\\": \\"535.54.03\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询实例列表',
            'summary' => '查询DSW实例列表。',
        ],
        'GetInstanceEvents' => [
            'path' => '/api/v2/instances/{InstanceId}/events',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsw-730xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'MaxEventsNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取事件的最大数目，默认值：2000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2000',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的起始时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T15:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T15:00:00Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'InstanceEventListResult',
                        'description' => 'DSW实例的事件列表。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '返回结果说明。',
                                'type' => 'string',
                                'example' => 'XXX'."\n",
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'None',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态码',
                                'description' => 'HTTP状态码，可能值：'."\n"
                                    .'- 400：输入参数错误'."\n"
                                    .'- 404：实例不存在'."\n"
                                    .'- 200：请求正常',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'InstanceId' => [
                                'title' => '实例Id',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'dsw-730xxxxxxxxxx',
                            ],
                            'Events' => [
                                'title' => '实例事件列表',
                                'description' => '实例事件列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '事件信息内容。',
                                    'type' => 'string',
                                    'example' => 'You are using pip version 9.0.1, however version 20.2.4 is available. ',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"XXX\\\\n\\",\\n  \\"Code\\": \\"None\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\",\\n  \\"Events\\": [\\n    \\"You are using pip version 9.0.1, however version 20.2.4 is available. \\"\\n  ]\\n}","type":"json"}]',
            'title' => '获取实例的事件列表',
            'summary' => '获取DSW实例的系统事件。',
        ],
        'GetLifecycle' => [
            'path' => '/api/v2/instances/{InstanceId}/lifecycle',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~470439~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsw-9698d842b6***',
                    ],
                ],
                [
                    'name' => 'SessionNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '一个Session为实例从启动到失败或停止的过程，sessionNumber表示实例Session的序号偏移值。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的起始时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T15:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T15:00:00Z',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询获取的Session数量限制。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结果的排序方式，取值如下：'."\n"
                            .'- ASC：按时间升序。'."\n"
                            .'- DESC：按时间降序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DESC',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'LifecycleResult',
                        'description' => '生命周期查询结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FC****',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '操作结果信息。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'Lifecycle' => [
                                'description' => '获取到的实例生命周期详情。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '生命周期结果列表，每一个子项为一个Session对应的生命周期。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '其中一个Session对应的生命周期详情。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Status' => [
                                                'description' => '实例所处的状态。可能值：'."\n"
                                                    .'- Creating：创建中。'."\n"
                                                    .'- SaveFailed：实例镜像保存失败。'."\n"
                                                    .'- Stopped：已停止。'."\n"
                                                    .'- Failed：实例创建失败。'."\n"
                                                    .'- ResourceAllocating：资源准备中。'."\n"
                                                    .'- Stopping：停止中。'."\n"
                                                    .'- Updating：更新中。'."\n"
                                                    .'- Saving：保存中。'."\n"
                                                    .'- Starting：启动中。'."\n"
                                                    .'- Running：运行中。'."\n"
                                                    .'- Saved：已保存。'."\n"
                                                    .'- EnvPreparing：环境准备中。'."\n"
                                                    .'- ArrearStopping：欠费停机中。'."\n"
                                                    .'- Arrearge：欠费停机。'."\n"
                                                    .'- Queuing：排队中。'."\n"
                                                    .'- Recovering：恢复中。',
                                                'type' => 'string',
                                                'enumValueTitles' => [
                                                    'ArrearStopping' => 'ArrearStopping',
                                                    'Creating' => 'Creating',
                                                    'SaveFailed' => 'SaveFailed',
                                                    'Stopped' => 'Stopped',
                                                    'Failed' => 'Failed',
                                                    'ResourceAllocating' => 'ResourceAllocating',
                                                    'Stopping' => 'Stopping',
                                                    'Updating' => 'Updating',
                                                    'Saving' => 'Saving',
                                                    'Arrearge' => 'Arrearge',
                                                    'Queuing' => 'Queuing',
                                                    'Recovering' => 'Recovering',
                                                    'Starting' => 'Starting',
                                                    'Running' => 'Running',
                                                    'Saved' => 'Saved',
                                                    'EnvPreparing' => 'EnvPreparing',
                                                ],
                                                'example' => 'Starting',
                                            ],
                                            'ReasonCode' => [
                                                'description' => '发生某种事件的原因对应的代码。',
                                                'type' => 'string',
                                                'example' => '“”',
                                            ],
                                            'ReasonMessage' => [
                                                'description' => '发生某种事件的原因描述。',
                                                'type' => 'string',
                                                'example' => '“”',
                                            ],
                                            'GmtCreateTime' => [
                                                'description' => '该状态创建的时间，即流转到该状态的时间（GMT）。',
                                                'type' => 'string',
                                                'example' => '2022-10-21T07:27:44Z',
                                            ],
                                        ],
                                    ],
                                ],
                                'example' => '[[{"Status":"Creating","GmtCreateTime":"2022-09-19T22:38:00Z","Reason":"","ReasonCode":""}]]',
                            ],
                            'TotalCount' => [
                                'description' => '查询得到的Session总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '35',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FC****\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"null\\",\\n  \\"Lifecycle\\": [\\n    [\\n      {\\n        \\"Status\\": \\"Starting\\",\\n        \\"ReasonCode\\": \\"“”\\",\\n        \\"ReasonMessage\\": \\"“”\\",\\n        \\"GmtCreateTime\\": \\"2022-10-21T07:27:44Z\\"\\n      }\\n    ]\\n  ],\\n  \\"TotalCount\\": 35\\n}","type":"json"}]',
            'title' => '获取实例生命周期',
            'summary' => '获取实例的生命周期。',
            'description' => '获取实例的生命周期流转信息，可以获取实例在某个时间点流转到某个状态的详情。',
        ],
        'GetInstanceMetrics' => [
            'path' => '/api/v2/instance/{InstanceId}/metrics',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~470439~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsw-730xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'MetricType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例指标类型，取值如下：'."\n"
                            .'- GpuCoreUsage：GPU使用率。'."\n"
                            .'- GpuMemoryUsage：GPU Memory使用率。'."\n"
                            .'- CpuCoreUsage：CPU使用率。'."\n"
                            .'- MemoryUsage：Memory使用率。'."\n"
                            .'- NetworkInputRate：网络写入速率。'."\n"
                            .'- NetworkOutputRate：网络写出速率。'."\n"
                            .'- DiskReadRate：磁盘读取速率。'."\n"
                            .'- DiskWriteRate：磁盘写入速率。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'GpuCoreUsage' => 'GPU使用率',
                            'NetworkInputRate' => '网络写入速率',
                            'DiskWriteRate' => '磁盘写入速率',
                            'CpuCoreUsage' => 'CPU使用率',
                            'GpuMemoryUsage' => 'GPU Memory使用率',
                            'NetworkOutputRate' => '网络写出速率',
                            'DiskReadRate' => '磁盘读取速率',
                            'MemoryUsage' => 'Memory使用率',
                        ],
                        'example' => 'GpuCoreUsage',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取实例指标的起始时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T15:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取实例指标的结束时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T15:00:00Z',
                    ],
                ],
                [
                    'name' => 'TimeStep',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指标获取的时间间隔。单位为分钟。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '15m',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'MetricResult',
                        'description' => '实例指标结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '返回结果说明。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态码',
                                'description' => 'HTTP状态码，可能值：'."\n"
                                    .'- 400'."\n"
                                    .'- 404',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'null',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'dsw-730xxxxxxxxxx',
                            ],
                            'PodMetrics' => [
                                'description' => '实例对应的Pod指标详情。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例对应的某个Pod指标详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PodId' => [
                                            'description' => '实例对应的某个Pod ID。',
                                            'type' => 'string',
                                            'example' => 'dsw-15870-695f44c5bc-hd6xm',
                                        ],
                                        'Metrics' => [
                                            'description' => '实例对应的Pod指标。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '获取到的Pod指标列表。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Time' => [
                                                        'description' => '该指标对应的时间戳。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '1670890560',
                                                    ],
                                                    'Value' => [
                                                        'description' => '指标的值。',
                                                        'type' => 'number',
                                                        'format' => 'float',
                                                        'example' => '25.901031',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"null\\",\\n  \\"HttpStatusCode\\": 0,\\n  \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\",\\n  \\"PodMetrics\\": [\\n    {\\n      \\"PodId\\": \\"dsw-15870-695f44c5bc-hd6xm\\",\\n      \\"Metrics\\": [\\n        {\\n          \\"Time\\": 1670890560,\\n          \\"Value\\": 25.901031\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取实例指标',
            'summary' => '获取实例运行的资源指标。',
        ],
        'CreateInstanceSnapshot' => [
            'summary' => '创建实例快照。',
            'path' => '/api/v2/instances/{InstanceId}/snapshots',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~470439~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsw-730xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '实例快照属性',
                        'description' => '实例快照属性。',
                        'type' => 'object',
                        'properties' => [
                            'SnapshotName' => [
                                'title' => '实例快照名称',
                                'description' => '实例快照名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'training_data_env',
                            ],
                            'SnapshotDescription' => [
                                'title' => '实例快照描述',
                                'description' => '实例快照描述。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'training_data_env',
                            ],
                            'ImageUrl' => [
                                'title' => '镜像地址',
                                'description' => '镜像地址。如何获取镜像地址，请参见[ListImages](~~449118~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu',
                            ],
                            'Labels' => [
                                'title' => '用户自定义标签',
                                'description' => '用户自定义标签。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '用户定义标签键值对。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'title' => '用户定义标签键',
                                            'description' => '用户定义标签键。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'stsTokenOwner',
                                        ],
                                        'Value' => [
                                            'title' => '用户定义标签值',
                                            'description' => '用户定义标签值。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '123xxxxxxxx',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                                'example' => '{\'foo\': \'bar\'}',
                            ],
                            'ExcludePaths' => [
                                'title' => '排除文件路径列表，仅支持 ECI 实例设置， 用于制作镜像时忽略指定文件夹或文件。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'Overwrite' => [
                                'title' => '是否覆盖更新镜像仓库中已存在的镜像 tag。',
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '执行结果',
                        'description' => '执行结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '返回结果说明。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态码',
                                'description' => 'HTTP状态码，可能值：'."\n"
                                    .'- 400'."\n"
                                    .'- 404',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'null',
                            ],
                            'InstanceId' => [
                                'title' => '实例Id',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'dsw-730xxxxxxxxxx',
                            ],
                            'SnapshotId' => [
                                'title' => '实例快照Id',
                                'description' => '实例快照ID。',
                                'type' => 'string',
                                'example' => 'snp-05cexxxxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"null\\",\\n  \\"HttpStatusCode\\": 0,\\n  \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\",\\n  \\"SnapshotId\\": \\"snp-05cexxxxxxxxx\\"\\n}","type":"json"}]',
            'title' => '创建实例快照',
        ],
        'DeleteInstanceSnapshot' => [
            'summary' => '删除实例快照。',
            'path' => '/api/v2/instances/{InstanceId}/snapshots/{SnapshotId}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~470439~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsw-730xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'SnapshotId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例快照Id',
                        'description' => '实例快照ID。如何获取实例快照ID，请参见[ListInstanceSnapshot](~~470434~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'snp-05cexxxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '实例快照详情',
                        'description' => '实例快照详情。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '返回结果说明。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态码',
                                'description' => 'HTTP状态码，可能值：'."\n"
                                    .'- 400'."\n"
                                    .'- 404',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'null',
                            ],
                            'InstanceId' => [
                                'title' => '实例Id',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'dsw-730xxxxxxxxxx',
                            ],
                            'SnapshotId' => [
                                'title' => '实例快照Id',
                                'description' => '实例快照ID。',
                                'type' => 'string',
                                'example' => 'snp-05cexxxxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"null\\",\\n  \\"HttpStatusCode\\": 0,\\n  \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\",\\n  \\"SnapshotId\\": \\"snp-05cexxxxxxxxx\\"\\n}","type":"json"}]',
            'title' => '删除实例快照',
        ],
        'GetInstanceSnapshot' => [
            'summary' => '调用GetInstanceSnapshot，获取用户实例快照。',
            'path' => '/api/v2/instances/{InstanceId}/snapshots/{SnapshotId}',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~470439~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsw-730xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'SnapshotId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例快照Id',
                        'description' => '实例快照ID。如何获取实例快照ID，请参见[ListInstanceSnapshot](~~470434~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'snp-05cexxxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '实例快照详情',
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '返回结果说明。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态码',
                                'description' => 'HTTP状态码，可能值：'."\n"
                                    .'- 400'."\n"
                                    .'- 404',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'null',
                            ],
                            'InstanceId' => [
                                'title' => '实例Id',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'dsw-730xxxxxxxxxx',
                            ],
                            'SnapshotId' => [
                                'title' => '实例快照Id',
                                'description' => '实例快照ID。',
                                'type' => 'string',
                                'example' => 'snp-05cexxxxxxxxx',
                            ],
                            'SnapshotName' => [
                                'title' => '实例快照名称',
                                'description' => '实例快照名称。',
                                'type' => 'string',
                                'example' => 'training_data_env',
                            ],
                            'Status' => [
                                'title' => '实例快照状态',
                                'description' => '实例快照状态。',
                                'type' => 'string',
                                'example' => 'Pushing',
                            ],
                            'ImageId' => [
                                'title' => '实例快照的镜像Id',
                                'description' => '实例快照的镜像ID。',
                                'type' => 'string',
                                'example' => 'image-05cefd0be2exxxx',
                            ],
                            'ImageUrl' => [
                                'title' => '实例快照的镜像地址',
                                'description' => '实例快照的镜像地址。',
                                'type' => 'string',
                                'example' => 'registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu',
                            ],
                            'ReasonCode' => [
                                'title' => '实例快照错误代码',
                                'description' => '实例快照错误代码。',
                                'type' => 'string',
                                'example' => 'Internal Error',
                            ],
                            'ReasonMessage' => [
                                'title' => '实例快照错误消息',
                                'description' => '实例快照错误消息。',
                                'type' => 'string',
                                'example' => 'ImagePullBackOff',
                            ],
                            'GmtCreateTime' => [
                                'title' => '实例快照创建时间',
                                'description' => '实例快照创建时间。',
                                'type' => 'string',
                                'example' => '2021-01-12T14:36:01Z',
                            ],
                            'GmtModifiedTime' => [
                                'title' => '实例快照修改时间',
                                'description' => '实例快照修改时间。',
                                'type' => 'string',
                                'example' => '2021-01-12T14:36:01Z',
                            ],
                            'Labels' => [
                                'title' => '用户自定义标签',
                                'description' => '用户自定义标签',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'title' => '用户定义标签键',
                                            'description' => '用户定义标签键',
                                            'type' => 'string',
                                            'example' => 'stsTokenOwner',
                                        ],
                                        'Value' => [
                                            'title' => '用户定义标签值',
                                            'description' => '用户定义标签值',
                                            'type' => 'string',
                                            'example' => '123xxxxxxxx',
                                        ],
                                    ],
                                ],
                                'example' => '{\'foo\': \'bar\'}',
                            ],
                            'ExcludePaths' => [
                                'title' => '排除文件路径列表，仅支持 ECI 实例设置， 用于制作镜像时忽略指定文件夹或文件',
                                'description' => '排除文件路径列表，仅支持 ECI 实例设置， 用于制作镜像时忽略指定文件夹或文件',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"null\\",\\n  \\"HttpStatusCode\\": 0,\\n  \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\",\\n  \\"SnapshotId\\": \\"snp-05cexxxxxxxxx\\",\\n  \\"SnapshotName\\": \\"training_data_env\\",\\n  \\"Status\\": \\"Pushing\\",\\n  \\"ImageId\\": \\"image-05cefd0be2exxxx\\",\\n  \\"ImageUrl\\": \\"registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu\\",\\n  \\"ReasonCode\\": \\"Internal Error\\",\\n  \\"ReasonMessage\\": \\"ImagePullBackOff\\",\\n  \\"GmtCreateTime\\": \\"2021-01-12T14:36:01Z\\",\\n  \\"GmtModifiedTime\\": \\"2021-01-12T14:36:01Z\\",\\n  \\"Labels\\": [\\n    {\\n      \\"Key\\": \\"stsTokenOwner\\",\\n      \\"Value\\": \\"123xxxxxxxx\\"\\n    }\\n  ],\\n  \\"ExcludePaths\\": [\\n    \\"\\"\\n  ]\\n}","type":"json"}]',
            'title' => '获取实例快照',
        ],
        'ListInstanceSnapshot' => [
            'summary' => '查询实例快照列表。',
            'path' => '/api/v2/instances/{InstanceId}/snapshots',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~470439~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsw-730xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例快照列表的页码。起始值为1，默认为1。',
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
                        'description' => '分页查询时设置的每页显示的实例快照列表数量，默认为10。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按排序字段gmtCreae排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'gmtCreate',
                        'default' => 'gmtCreate',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排列顺序，取值如下：'."\n"
                            .'- Desc： 降序排列。'."\n"
                            .'- Asc： 升序排列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DESC',
                        'default' => 'DESC',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '实例快照列表',
                        'description' => '实例快照列表。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '返回结果说明。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态码',
                                'description' => 'HTTP状态码，可能值：'."\n"
                                    .'- 400'."\n"
                                    .'- 404',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'null',
                            ],
                            'TotalCount' => [
                                'title' => '实例总数',
                                'description' => '实例总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '35',
                            ],
                            'Snapshots' => [
                                'title' => '本分页中请求的实例镜像列表',
                                'description' => '本分页中请求的实例镜像列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例快照对象',
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'title' => '实例Id',
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'dsw-730xxxxxxxxxx',
                                        ],
                                        'SnapshotId' => [
                                            'title' => '实例快照Id',
                                            'description' => '实例快照ID。',
                                            'type' => 'string',
                                            'example' => 'snp-05cexxxxxxxxx',
                                        ],
                                        'SnapshotName' => [
                                            'title' => '实例快照名称',
                                            'description' => '实例快照名称。',
                                            'type' => 'string',
                                            'example' => 'training_data_env',
                                        ],
                                        'Status' => [
                                            'title' => '实例快照状态',
                                            'description' => '实例快照状态。',
                                            'type' => 'string',
                                            'example' => 'Pushing',
                                        ],
                                        'ImageId' => [
                                            'title' => '实例快照的镜像Id',
                                            'description' => '实例快照的镜像ID。',
                                            'type' => 'string',
                                            'example' => 'image-05cefd0be2exxxx',
                                        ],
                                        'ImageUrl' => [
                                            'title' => '实例快照的镜像地址',
                                            'description' => '实例快照的镜像地址。',
                                            'type' => 'string',
                                            'example' => 'registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu',
                                        ],
                                        'ReasonCode' => [
                                            'title' => '实例快照错误代码',
                                            'description' => '实例快照错误代码。',
                                            'type' => 'string',
                                            'example' => 'Internal Error',
                                        ],
                                        'ReasonMessage' => [
                                            'title' => '实例快照错误消息',
                                            'description' => '实例快照错误消息。',
                                            'type' => 'string',
                                            'example' => 'ImagePullBackOff',
                                        ],
                                        'GmtCreateTime' => [
                                            'title' => '实例快照创建时间',
                                            'description' => '实例快照创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-01-12T14:36:01Z',
                                        ],
                                        'GmtModifiedTime' => [
                                            'title' => '实例快照修改时间',
                                            'description' => '实例快照修改时间。',
                                            'type' => 'string',
                                            'example' => '2021-01-12T14:36:01Z',
                                        ],
                                        'Labels' => [
                                            'title' => '用户自定义标签',
                                            'description' => '用户自定义标签。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '用户定义标签键值对。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'title' => '用户定义标签键',
                                                        'description' => '用户定义标签键。',
                                                        'type' => 'string',
                                                        'example' => 'stsTokenOwner',
                                                    ],
                                                    'Value' => [
                                                        'title' => '用户定义标签值',
                                                        'description' => '用户定义标签值。',
                                                        'type' => 'string',
                                                        'example' => '123xxxxxxxx',
                                                    ],
                                                ],
                                            ],
                                            'example' => '{\'foo\': \'bar\'}',
                                        ],
                                        'ExcludePaths' => [
                                            'title' => '排除文件路径列表，仅支持 ECI 实例设置， 用于制作镜像时忽略指定文件夹或文件',
                                            'description' => '排除文件路径列表，仅支持 ECI 实例设置， 用于制作镜像时忽略指定文件夹或文件',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string',
                                            ],
                                            'example' => '["/path1","/path2"]',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"null\\",\\n  \\"HttpStatusCode\\": 0,\\n  \\"TotalCount\\": 35,\\n  \\"Snapshots\\": [\\n    {\\n      \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\",\\n      \\"SnapshotId\\": \\"snp-05cexxxxxxxxx\\",\\n      \\"SnapshotName\\": \\"training_data_env\\",\\n      \\"Status\\": \\"Pushing\\",\\n      \\"ImageId\\": \\"image-05cefd0be2exxxx\\",\\n      \\"ImageUrl\\": \\"registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu\\",\\n      \\"ReasonCode\\": \\"Internal Error\\",\\n      \\"ReasonMessage\\": \\"ImagePullBackOff\\",\\n      \\"GmtCreateTime\\": \\"2021-01-12T14:36:01Z\\",\\n      \\"GmtModifiedTime\\": \\"2021-01-12T14:36:01Z\\",\\n      \\"Labels\\": [\\n        {\\n          \\"Key\\": \\"stsTokenOwner\\",\\n          \\"Value\\": \\"123xxxxxxxx\\"\\n        }\\n      ],\\n      \\"ExcludePaths\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询实例快照列表',
        ],
        'GetResourceGroupStatistics' => [
            'path' => '/api/v2/resourcegroupstatistics',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'WorkspaceIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID列表，多个ID间使用半角逗号（,）分隔。如何获取工作空间ID，请参见 [ListWorkspaces](~~449124~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '27218,34956',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID，唯一标识客户的资源组（机器组）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rg-123456789',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '统计开始时间。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2020-11-08T15:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '统计结束时间。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2020-11-08T15:00:00Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'ResourceGroupStatisticsResult',
                        'description' => '资源组统计信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '返回结果说明。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'InternalError',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态码',
                                'description' => 'HTTP状态码，可能值：'."\n"
                                    ."\n"
                                    .'- 400'."\n"
                                    .'- 404',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'Statistics' => [
                                'title' => '统计信息',
                                'description' => '统计信息。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'additionalProperties' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '5',
                                        'description' => '统计值。',
                                    ],
                                    'description' => '- 运行中的DSW任务：Running：3。'."\n"
                                        .'- 被停止的DSW任务：Stopped：4。',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"InternalError\\",\\n  \\"HttpStatusCode\\": 400,\\n  \\"Statistics\\": {\\n    \\"key\\": {\\n      \\"key\\": 5\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '获取资源组统计信息',
            'summary' => '资源组是特定用户，在使用PAI产品前，预先购买的一组机器资源；这些机器资源专属于此客户，不会被其他客户分享。用户后续的PAI计算任务，或算法开发环境，将运行在这组机器上。'."\n"
                .'此功能用于统计在指定资源组上，运行的DSW实例（算法开发环境）的当前和历史运行状态（成功，失败，停止等等），以帮助用户了解在资源组内运行任务的历史状态，更有效率的利用资源组内的机器资源。',
            'description' => '输入用户的工作空间ID和资源组ID，以及统计时间区间，就可获取在指定工作空间和资源组下DSW实例运行状态统计数据。',
        ],
        'ListInstanceStatistics' => [
            'summary' => '获取实例统计信息。',
            'path' => '/api/v2/instancestatistics',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'WorkspaceIds',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间列表',
                        'description' => '工作空间ID列表。多个ID间使用半角逗号（,）分隔。如何获取工作空间ID，请参见 [ListWorkspaces](~~449124~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '27218,34956',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '实例统计信息',
                        'description' => '实例统计信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '返回结果说明。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'InternalError',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态码',
                                'description' => 'HTTP状态码，可能值：'."\n"
                                    .'- 400'."\n"
                                    .'- 404',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'Statistics' => [
                                'title' => '统计信息',
                                'description' => '统计信息。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'additionalProperties' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '5',
                                        'description' => '统计值。',
                                    ],
                                    'description' => '某项统计信息：RunningCount：3。',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"InternalError\\",\\n  \\"HttpStatusCode\\": 400,\\n  \\"Statistics\\": {\\n    \\"key\\": {\\n      \\"key\\": 5\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '获取实例统计信息',
        ],
        'CreateInstanceShutdownTimer' => [
            'summary' => '调用CreateInstanceShutdownTimer，创建实例定时关机任务。',
            'path' => '/api/v2/instances/{InstanceId}/shutdowntimer',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '定时关机任务对应实例的Id',
                        'description' => '定时关机任务对应实例的ID。如何获取实例ID，请参见[ListInstances](~~470439~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsw-730xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '定时关机属性',
                        'description' => '定时关机属性。',
                        'type' => 'object',
                        'properties' => [
                            'DueTime' => [
                                'title' => '定时关机设定时间',
                                'description' => '定时关机设定时间。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2021-01-12T14:36:01Z',
                            ],
                            'RemainingTimeInMs' => [
                                'title' => '距离定时关机时间段',
                                'description' => '距离定时关机的时间段，单位为毫秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '3600000',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '执行结果',
                        'description' => '执行结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '返回结果说明。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态码',
                                'description' => 'HTTP状态码，可能值：'."\n"
                                    .'- 400'."\n"
                                    .'- 404',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'null',
                            ],
                            'InstanceId' => [
                                'title' => '实例Id',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'dsw-730xxxxxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"null\\",\\n  \\"HttpStatusCode\\": 0,\\n  \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\"\\n}","type":"json"}]',
            'title' => '创建实例定时关机任务',
        ],
        'DeleteInstanceShutdownTimer' => [
            'summary' => '删除实例定时关机任务。',
            'path' => '/api/v2/instances/{InstanceId}/shutdowntimer',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~470439~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsw-730xxxxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '执行结果',
                        'description' => '执行结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '返回结果说明。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态码',
                                'description' => 'HTTP状态码，可能值：'."\n"
                                    .'- 400'."\n"
                                    .'- 404',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'null',
                            ],
                            'InstanceId' => [
                                'title' => '实例Id',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'dsw-730xxxxxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"null\\",\\n  \\"HttpStatusCode\\": 0,\\n  \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\"\\n}","type":"json"}]',
            'title' => '删除实例定时关机任务',
        ],
        'GetInstanceShutdownTimer' => [
            'summary' => '获取实例定时关机任务详情。',
            'path' => '/api/v2/instances/{InstanceId}/shutdowntimer',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~470439~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsw-730xxxxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '定时关机任务',
                        'description' => '定时关机任务。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '返回结果说明。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态码',
                                'description' => 'HTTP状态码，可能值：'."\n"
                                    .'- 400'."\n"
                                    .'- 404',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'null',
                            ],
                            'InstanceId' => [
                                'title' => '实例Id',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'dsw-730xxxxxxxxxx',
                            ],
                            'GmtCreateTime' => [
                                'title' => '创建时间',
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2021-01-12T14:36:01Z',
                            ],
                            'GmtModifiedTime' => [
                                'title' => '修改时间',
                                'description' => '修改时间。',
                                'type' => 'string',
                                'example' => '2021-01-12T14:36:01Z',
                            ],
                            'DueTime' => [
                                'title' => '设定关机时间',
                                'description' => '设定关机时间。',
                                'type' => 'string',
                                'example' => '2021-01-12T14:36:01Z',
                            ],
                            'RemainingTimeInMs' => [
                                'title' => '剩余关机时间（ms）',
                                'description' => '剩余关机时间，单位为毫秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '3600000',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"null\\",\\n  \\"HttpStatusCode\\": 0,\\n  \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\",\\n  \\"GmtCreateTime\\": \\"2021-01-12T14:36:01Z\\",\\n  \\"GmtModifiedTime\\": \\"2021-01-12T14:36:01Z\\",\\n  \\"DueTime\\": \\"2021-01-12T14:36:01Z\\",\\n  \\"RemainingTimeInMs\\": 3600000\\n}","type":"json"}]',
            'title' => '获取实例定时关机任务详情',
        ],
        'CreateIdleInstanceCuller' => [
            'path' => '/api/v2/instances/{InstanceId}/idleinstanceculler',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '设定自动关机的实例ID。如何获取实例ID，请参见[ListInstances](~~470439~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsw-730xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'CpuPercentThreshold' => [
                                'description' => 'CPU使用率阈值，单位是百分比，取值1~100，低于此值则认为实例当前处于闲置。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '20',
                            ],
                            'GpuPercentThreshold' => [
                                'description' => 'GPU使用率阈值，单位是百分比，取值1~100。如果实例为GPU类型，则此参数生效。CPU和GPU同时低于阈值则认为指定实例处于闲置。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
                            ],
                            'MaxIdleTimeInMinutes' => [
                                'description' => '闲置等待时间阈值，单位是分钟。如果闲置时长超过此值，将自动停止DSW实例。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '60',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'IdleInstanceCullerIdResult',
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'enumValueTitles' => [
                                    'true' => 'true',
                                    'false' => 'false',
                                ],
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'dsw-730xxxxxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"null\\",\\n  \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\"\\n}","type":"json"}]',
            'title' => '创建闲置实例自动关机策略',
            'summary' => '创建指定实例的自动关机策略，满足条件时将自动停止DSW实例。一个DSW实例只支持创建一个闲置自动关机策略，如果指定实例已设定过闲置自动关机策略，请先调用DeleteIdleInstanceCuller将其删除。',
        ],
        'DeleteIdleInstanceCuller' => [
            'path' => '/api/v2/instances/{InstanceId}/idleinstanceculler',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~470439~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsw-730xxxxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'IdleInstanceCullerIdResult',
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FC****',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'enumValueTitles' => [
                                    'true' => 'true',
                                    'false' => 'false',
                                ],
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '操作结果信息。'."\n"
                                    .'- 执行成功时，返回结果为null。'."\n"
                                    .'- 执行失败时，描述失败原因。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'dsw-730xxxxxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FC****\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"null\\",\\n  \\"Code\\": \\"ValidationError\\",\\n  \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\"\\n}","type":"json"}]',
            'title' => '删除实例闲置关机策略',
            'summary' => '删除实例闲置关机策略。',
        ],
        'GetIdleInstanceCuller' => [
            'path' => '/api/v2/instances/{InstanceId}/idleinstanceculler',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~470439~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsw-730xxxxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'IdleInstanceCullerResult',
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'enumValueTitles' => [
                                    'true' => 'true',
                                    'false' => 'false',
                                ],
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'dsw-730xxxxxxxxxx',
                            ],
                            'CpuPercentThreshold' => [
                                'description' => 'CPU使用率阈值，单位是百分比，取值1~100，低于此值则认为实例当前处于闲置。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'GpuPercentThreshold' => [
                                'description' => 'GPU使用率阈值，单位是百分比，取值1~100。如果实例为GPU类型，则此参数生效。CPU和GPU同时低于阈值则认为指定实例处于闲置。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'MaxIdleTimeInMinutes' => [
                                'description' => '闲置等待时间阈值，单位是分钟。如果闲置时长超过此值，将自动停止DSW实例。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '60',
                            ],
                            'IdleTimeInMinutes' => [
                                'description' => '实例当前闲置时长，单位是分钟。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"ValidationError\\",\\n  \\"InstanceId\\": \\"dsw-730xxxxxxxxxx\\",\\n  \\"CpuPercentThreshold\\": 20,\\n  \\"GpuPercentThreshold\\": 10,\\n  \\"MaxIdleTimeInMinutes\\": 60,\\n  \\"IdleTimeInMinutes\\": 30\\n}","type":"json"}]',
            'title' => '获取闲置实例自动关机策略',
            'summary' => '获取指定实例的闲置自动关机策略。',
        ],
        'ListEcsSpecs' => [
            'summary' => '获取ECS规格列表。',
            'path' => '/api/v2/ecsspecs',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'AcceleratorType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '加速类型',
                        'description' => '加速器类型。 '."\n"
                            .'- CPU：无计算加速，只使用CPU计算。'."\n"
                            .'- GPU：使用GPU进行计算加速。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'CPU',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页数',
                        'description' => 'ECS规格列表的页码。起始值为1，默认为1。',
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
                        'title' => '每页大小',
                        'description' => '分页查询时设置的每页显示的EC规格数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序字段',
                        'description' => '按排序字段gmtCreate排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'gmtCreate',
                        'default' => 'gmtCreate',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序顺序',
                        'description' => '排序顺序。取值如下：'."\n"
                            .'- ASC：升序。'."\n"
                            .'- DESC：降序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DESC',
                        'default' => 'DESC',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ECS规格列表',
                        'description' => 'ECS规格列表。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '返回结果说明。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态码',
                                'description' => 'HTTP状态码，可能值：'."\n"
                                    .'- 400'."\n"
                                    .'- 404',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'null',
                            ],
                            'TotalCount' => [
                                'title' => '实例总数',
                                'description' => '实例总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '35',
                            ],
                            'EcsSpecs' => [
                                'title' => '本分页中请求的实例列表',
                                'description' => '本分页中请求的实例列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'Ecs规格。',
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceType' => [
                                            'title' => '实例规格',
                                            'description' => '实例规格。',
                                            'type' => 'string',
                                            'example' => 'ecs.gn5-c28g1.7xlarge',
                                        ],
                                        'GPUType' => [
                                            'title' => '显卡类型',
                                            'description' => '显卡类型。可能值：'."\n"
                                                .'- V100'."\n"
                                                .'- A100'."\n"
                                                .'- A10'."\n"
                                                .'- T4'."\n"
                                                .'- P100',
                                            'type' => 'string',
                                            'example' => 'v100',
                                        ],
                                        'CPU' => [
                                            'title' => 'CPU核数',
                                            'description' => 'CPU核数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '32',
                                        ],
                                        'GPU' => [
                                            'title' => 'GPU卡数',
                                            'description' => 'GPU卡数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '4',
                                        ],
                                        'Memory' => [
                                            'title' => '内存大小(GB)',
                                            'description' => '内存大小（GB）。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '32',
                                        ],
                                        'SystemDiskCapacity' => [
                                            'title' => '系统盘大小(GB)',
                                            'description' => '系统盘大小（GB）。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '500',
                                        ],
                                        'AcceleratorType' => [
                                            'title' => '资源类型',
                                            'description' => '资源类型。',
                                            'type' => 'string',
                                            'example' => 'CPU',
                                        ],
                                        'Price' => [
                                            'title' => '价格',
                                            'description' => '价格。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '22.8',
                                        ],
                                        'Currency' => [
                                            'title' => '货币单位',
                                            'description' => '货币单位。',
                                            'type' => 'string',
                                            'example' => 'CNY',
                                        ],
                                        'InstanceBandwidthRx' => [
                                            'title' => '实例接收带宽',
                                            'description' => '实例接收带宽。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '5120000',
                                        ],
                                        'Labels' => [
                                            'title' => '用户自定义标签',
                                            'description' => 'ECS规格标签列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'title' => 'Ecs规格标签键',
                                                        'description' => 'ECS规格标签键。',
                                                        'type' => 'string',
                                                        'example' => 'SupportResourcePackDeduction',
                                                    ],
                                                    'Value' => [
                                                        'description' => 'ECS规格标签值。',
                                                        'type' => 'string',
                                                        'example' => 'true',
                                                    ],
                                                ],
                                            ],
                                            'example' => '{\'foo\': \'bar\'}',
                                        ],
                                        'IsAvailable' => [
                                            'title' => '资源是否可用',
                                            'description' => '资源是否可用',
                                            'type' => 'boolean',
                                            'example' => 'True',
                                            'default' => 'true',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"null\\",\\n  \\"HttpStatusCode\\": 0,\\n  \\"TotalCount\\": 35,\\n  \\"EcsSpecs\\": [\\n    {\\n      \\"InstanceType\\": \\"ecs.gn5-c28g1.7xlarge\\",\\n      \\"GPUType\\": \\"v100\\",\\n      \\"CPU\\": 32,\\n      \\"GPU\\": 4,\\n      \\"Memory\\": 32,\\n      \\"SystemDiskCapacity\\": 500,\\n      \\"AcceleratorType\\": \\"CPU\\",\\n      \\"Price\\": 22.8,\\n      \\"Currency\\": \\"CNY\\",\\n      \\"InstanceBandwidthRx\\": 5120000,\\n      \\"Labels\\": [\\n        {\\n          \\"Key\\": \\"SupportResourcePackDeduction\\",\\n          \\"Value\\": \\"true\\"\\n        }\\n      ],\\n      \\"IsAvailable\\": true\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取ECS规格列表',
        ],
        'GetUserConfig' => [
            'summary' => '调用GetUserConfig，查询用户信息。',
            'path' => '/api/v2/userconfig',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '用户配置',
                        'description' => '用户配置。',
                        'type' => 'object',
                        'properties' => [
                            'AccountSufficient' => [
                                'title' => '用户账号金额是否充足',
                                'description' => '用户账号金额是否充足。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'FreeTierSpecAvailable' => [
                                'title' => '是否可以购买free tier规格的实例',
                                'description' => '是否可以购买free tier规格的实例',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'FreeTier' => [
                                'title' => 'free tier属性',
                                'description' => 'free tier属性',
                                'type' => 'object',
                                'properties' => [
                                    'IsFreeTierUser' => [
                                        'title' => '是否是free tier用户',
                                        'description' => '是否是free tier用户',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'StartTime' => [
                                        'title' => 'free tier开始时间',
                                        'description' => 'free tier开始时间',
                                        'type' => 'string',
                                        'example' => '2020-11-08T15:00:00Z',
                                    ],
                                    'EndTime' => [
                                        'title' => 'free tier结束时间',
                                        'description' => 'free tier结束时间',
                                        'type' => 'string',
                                        'example' => '2020-11-08T15:00:00Z',
                                    ],
                                    'Status' => [
                                        'title' => 'free tier状态,有效或者无效',
                                        'description' => 'free tier状态,有效或者无效',
                                        'type' => 'string',
                                        'example' => 'valid',
                                    ],
                                    'InitBaseValue' => [
                                        'title' => 'free tier，资源初始值',
                                        'description' => 'free tier，资源初始值',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '5000',
                                    ],
                                    'InitShowValue' => [
                                        'title' => 'free tier，资源初始显示值',
                                        'description' => 'free tier，资源初始显示值',
                                        'type' => 'string',
                                        'example' => '5000',
                                    ],
                                    'InitBaseUnit' => [
                                        'title' => 'free tier，资源初始值单位',
                                        'description' => 'free tier，资源初始值单位',
                                        'type' => 'string',
                                        'example' => '个',
                                    ],
                                    'InitShowUnit' => [
                                        'title' => 'free tier，资源初始显示单位',
                                        'description' => 'free tier，资源初始显示单位',
                                        'type' => 'string',
                                        'example' => '个',
                                    ],
                                    'PeriodBaseValue' => [
                                        'title' => 'free tier，资源当前值',
                                        'description' => 'free tier，资源当前值',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '3000',
                                    ],
                                    'PeriodShowValue' => [
                                        'title' => 'free tier，资源当前显示值',
                                        'description' => 'free tier，资源当前显示值',
                                        'type' => 'string',
                                        'example' => '3000',
                                    ],
                                    'PeriodBaseUnit' => [
                                        'title' => 'free tier，资源当前值单位',
                                        'description' => 'free tier，资源当前值单位',
                                        'type' => 'string',
                                        'example' => '个',
                                    ],
                                    'PeriodShowUnit' => [
                                        'title' => 'free tier, 资源当前显示单位',
                                        'description' => 'free tier, 资源当前显示单位',
                                        'type' => 'string',
                                        'example' => '个',
                                    ],
                                ],
                            ],
                            'EnableEciDisk' => [
                                'title' => '是否打开eciDisk',
                                'description' => '是否打开eciDisk',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，可能值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '返回结果说明。',
                                'type' => 'string',
                                'example' => '"Access denied"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，可能值：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态码',
                                'description' => 'HTTP状态码，可能值：'."\n"
                                    .'- 400'."\n"
                                    .'- 404',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'null',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccountSufficient\\": false,\\n  \\"FreeTierSpecAvailable\\": true,\\n  \\"FreeTier\\": {\\n    \\"IsFreeTierUser\\": true,\\n    \\"StartTime\\": \\"2020-11-08T15:00:00Z\\",\\n    \\"EndTime\\": \\"2020-11-08T15:00:00Z\\",\\n    \\"Status\\": \\"valid\\",\\n    \\"InitBaseValue\\": 5000,\\n    \\"InitShowValue\\": \\"5000\\",\\n    \\"InitBaseUnit\\": \\"个\\",\\n    \\"InitShowUnit\\": \\"个\\",\\n    \\"PeriodBaseValue\\": 3000,\\n    \\"PeriodShowValue\\": \\"3000\\",\\n    \\"PeriodBaseUnit\\": \\"个\\",\\n    \\"PeriodShowUnit\\": \\"个\\"\\n  },\\n  \\"EnableEciDisk\\": true,\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"Access denied\\\\\\"\\",\\n  \\"Code\\": \\"null\\",\\n  \\"HttpStatusCode\\": 0\\n}","type":"json"}]',
            'title' => '查询用户信息',
        ],
        'GetToken' => [
            'path' => '/api/v2/tokens',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dsw-730xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'ExpireTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '过期时间，单位为秒。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '60',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'TokenResult',
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D55162-4489-1619-AAF5-3F97D5FCA948',
                            ],
                            'Success' => [
                                'title' => '成功标志',
                                'description' => '成功标志，取值如下：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'enumValueTitles' => [
                                    'true' => 'true',
                                    'false' => 'false',
                                ],
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '说明',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => '"XXX"',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码，取值如下：'."\n"
                                    .'- InternalError：内部错误（除了参数验证错误外的其他错误，目前都归类到内部错误）。'."\n"
                                    .'- ValidationError：参数验证错误。',
                                'type' => 'string',
                                'example' => 'ValidationError',
                            ],
                            'Token' => [
                                'title' => 'token',
                                'description' => '访问DSW实例的临时鉴权信息。',
                                'type' => 'string',
                                'example' => '*******',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7D55162-4489-1619-AAF5-3F97D5FCA948\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"\\\\\\"XXX\\\\\\"\\",\\n  \\"Code\\": \\"ValidationError\\",\\n  \\"Token\\": \\"*******\\"\\n}","type":"json"}]',
            'title' => '获取实例临时鉴权信息',
            'summary' => '获取指定DSW实例的临时鉴权信息。',
        ],
        'GetMetrics' => [
            'summary' => '获取实例的Metrics指标。',
            'path' => '/api/v2/instance/{InstanceId}/cms/metrics',
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
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '223121',
                'abilityTreeNodes' => [
                    'FEATURElearnTBR2KU',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指标保存的云监控的空间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs_pai_dsw',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'DSW 实例 ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dsw-328d2bbf605*****',
                    ],
                ],
                [
                    'name' => 'Dimensions',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"userId":"16122852825*****","jobId":"dsw-328d2bbf605*****","regionId":"cn-wulanchabu","pod":"dsw-45680-76766f8778-95gxh"}',
                    ],
                ],
                [
                    'name' => 'Length',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每一页显示的最大记录数，不超过1440。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '截止时间，默认是当前。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T16:00:00Z',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '时间间隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '60',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页游标标识。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '15761485350009dd70bb64cff1f0fff750b08ffff073be5fb1e785e2b020f1a949d5ea14aea7fed82f01dd8****',
                    ],
                ],
                [
                    'name' => 'MetricName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '监控指标的名字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'INSTANCE_SPEC_MEMORY_SWAP',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '起始时间，默认是1小时前。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T15:00:00Z',
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
                            'NextToken' => [
                                'title' => 'Id of the request',
                                'description' => '分页游标标识。',
                                'type' => 'string',
                                'example' => '15761485350009dd70bb64cff1f0fff750b08ffff073be5fb1e785e2b020f1a949d5ea14aea7fed82f01dd8****',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'DataPoints' => [
                                'description' => '监控指标数据内容。',
                                'type' => 'string',
                                'example' => '[{"timestamp":1548777660000,"userId":"120886317861****","instanceId":"i-abc****","Minimum":9.92,"Average":9.92,"Maximum":9.92}]',
                            ],
                            'Code' => [
                                'description' => '请求代码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '请求信息。',
                                'type' => 'string',
                                'example' => 'Succeed',
                            ],
                            'Period' => [
                                'description' => '时间间隔。',
                                'type' => 'string',
                                'example' => '60',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"15761485350009dd70bb64cff1f0fff750b08ffff073be5fb1e785e2b020f1a949d5ea14aea7fed82f01dd8****\\",\\n  \\"Success\\": true,\\n  \\"DataPoints\\": \\"[{\\\\\\"timestamp\\\\\\":1548777660000,\\\\\\"userId\\\\\\":\\\\\\"120886317861****\\\\\\",\\\\\\"instanceId\\\\\\":\\\\\\"i-abc****\\\\\\",\\\\\\"Minimum\\\\\\":9.92,\\\\\\"Average\\\\\\":9.92,\\\\\\"Maximum\\\\\\":9.92}]\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"Succeed\\",\\n  \\"Period\\": \\"60\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '获取指标',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'pai-dsw.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'pai-dsw.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'pai-dsw.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'pai-dsw.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'pai-dsw.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'pai-dsw.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'pai-dsw.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'pai-dsw.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'pai-dsw.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'pai-dsw.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'pai-dsw.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'pai-dsw.cn-shanghai-finance-1.aliyuncs.com',
        ],
    ],
];